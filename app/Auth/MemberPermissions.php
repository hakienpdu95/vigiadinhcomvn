<?php
namespace App\Auth;

use App\Helpers\CacheHelper;

class MemberPermissions {
    private static array $allowed_cpts = ['viet-product'];
    private static bool $initialized = false;

    public static function init(): void {
        if (self::$initialized) return;
        self::$initialized = true;

        // === CÁC HOOK CHÍNH ===
        add_filter('wp_insert_post_data', [self::class, 'forcePendingStatus'], 10, 2);
        add_action('admin_enqueue_scripts', [self::class, 'hidePublishButton']);
        add_action('admin_menu', [self::class, 'removeTaxonomyMetaboxForMember']);

        // === RESTRICT BÀI VIẾT – PHIÊN BẢN MẠNH NHẤT ===
        add_action('parse_query', [self::class, 'restrictToOwnPosts'], 5);
        add_action('pre_get_posts', [self::class, 'restrictToOwnPosts'], 5);

        // Cấp quyền 1 lần duy nhất
        add_action('after_setup_theme', [self::class, 'grantRoleMemberCapabilities'], 20);
    }

    /**
     * MEMBER CHỈ THẤY BÀI CỦA CHÍNH MÌNH (phiên bản mạnh nhất)
     */
    public static function restrictToOwnPosts(\WP_Query $query): void {
        if (!is_admin()) return;
        if ($query->get('post_type') !== 'viet-product') return;

        $user = wp_get_current_user();
        if (!$user || $user->ID === 0) return;

        // Admin thì không giới hạn
        if (current_user_can('administrator')) {
            error_log("[MemberPermissions] ADMIN - Hiển thị tất cả bài viet-product");
            return;
        }

        // Chỉ áp dụng cho member
        if (!in_array('member', (array)$user->roles)) return;

        // Set author = chính user đó
        $query->set('author', $user->ID);

        // Debug log để bạn kiểm tra
        if (defined('WP_DEBUG') && WP_DEBUG) {
            $screen = get_current_screen();
            error_log("[MemberPermissions] MEMBER #{$user->ID} - Chỉ hiển thị bài của chính mình | Screen: " . ($screen->id ?? 'unknown'));
        }
    }

    public static function grantRoleMemberCapabilities(): void {
        if (get_option('member_caps_granted_v2')) return;

        $role = get_role('member');
        if ($role) {
            $caps = [
                'read', 'upload_files',
                'read_viet_product', 'read_private_viet_products',
                'edit_viet_product', 'edit_viet_products',
                'create_viet_products',
                'delete_viet_product', 'delete_viet_products'
            ];
            foreach ($caps as $cap) {
                if (!$role->has_cap($cap)) $role->add_cap($cap);
            }
        }

        update_option('member_caps_granted_v2', true, true);
    }

    public static function publishProduct(int $post_id): bool {
        $post = get_post($post_id);
        if (!$post || $post->post_type !== 'viet-product') return false;

        $result = wp_update_post(['ID' => $post_id, 'post_status' => 'publish']);
        if (!is_wp_error($result)) {
            CacheHelper::bumpDataVersion('viet-product');
            return true;
        }
        return false;
    }

    public static function forcePendingStatus(array $data, array $postarr): array {
        if (!in_array($data['post_type'], self::$allowed_cpts)) return $data;

        $user = wp_get_current_user();
        if (in_array('member', (array)$user->roles) && $data['post_status'] !== 'trash') {
            $data['post_status'] = 'pending';
        }
        return $data;
    }

    public static function hidePublishButton(): void {
        if (current_user_can('administrator')) return;
        if (!in_array(get_post_type(), self::$allowed_cpts)) return;

        wp_add_inline_style('wp-admin', '
            .editor-post-publish-button,
            .editor-post-publish-panel__toggle { display: none !important; }
        ');
    }

    public static function removeTaxonomyMetaboxForMember(): void {
        if (current_user_can('administrator')) return;
        if (!in_array('member', (array)wp_get_current_user()->roles)) return;

        remove_meta_box('categorydiv', 'viet-product', 'side');
        remove_meta_box('tagsdiv-post_tag', 'viet-product', 'side');
    }
}