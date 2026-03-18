<?php
namespace App\Metaboxes;

class ProductLocationMetabox extends BaseMetabox {
    protected string $title = 'Vị trí – Tỉnh & Phường/Xã';
    protected array $post_types = ['viet-product', 'san_pham_ocop', 'diem_du_lich', 'trung_tam_gioi_thieu'];

    protected function getFields(): array {
        global $wpdb;
        $provinces = $wpdb->get_results("SELECT province_code, name FROM {$wpdb->prefix}provinces ORDER BY name", ARRAY_A);

        $options = ['' => 'Chọn tỉnh/thành'];
        foreach ($provinces as $p) {
            $options[$p['province_code']] = $p['name'];
        }

        return [
            [
                'name'    => 'Tỉnh/Thành phố',
                'id'      => 'province_code',
                'type'    => 'select',
                'options' => $options,
                'desc'    => 'Chọn tỉnh để tự động load phường/xã',
            ],
            [
                'name'    => 'Phường/Xã',
                'id'      => 'ward_code',
                'type'    => 'select',
                'options' => ['' => 'Chọn phường/xã'],
                'desc'    => 'Tự động load theo tỉnh',
            ],
        ];
    }
}