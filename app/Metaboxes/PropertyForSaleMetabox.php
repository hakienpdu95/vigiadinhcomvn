<?php
namespace App\Metaboxes;

class PropertyForSaleMetabox extends BaseMetabox {
    protected string $title = 'Thông tin chi tiết nhà đất bán';
    protected array $post_types = ['property-for-sale'];   // ← PHẢI LÀ gạch dưới (underscore)

    protected function getFields(): array {
        return [
            // ====================== VỊ TRÍ ======================
            ['type' => 'heading', 'name' => 'Vị trí bất động sản'],

            // ====================== LOẠI HÌNH CHÍNH ======================
            ['type' => 'heading', 'name' => 'Loại hình bất động sản'],
            [
                'name'     => 'Loại hình',
                'id'       => 'property_type',
                'type'     => 'select',
                'std'      => '',
                'options'  => [
                    ''          => '-- Chọn loại hình --',
                    'house'     => 'Nhà riêng',
                    'apartment' => 'Căn hộ chung cư',
                    'land'      => 'Đất thổ cư',
                ],
                'required' => true,
            ],

            // ====================== LOẠI NHÀ RIÊNG ======================
            [
                'name'     => 'Loại nhà riêng',
                'id'       => 'house_subtype',
                'type'     => 'select',
                'std'      => '',
                'options'  => [
                    ''          => '-- Chọn loại nhà --',
                    'alley'     => 'Nhà hẻm',
                    'street'    => 'Nhà mặt tiền',
                    'adjacent'  => 'Nhà liền kề',
                    'villa'     => 'Biệt thự',
                ],
                'visible'  => ['property_type', '=', 'house'],
            ],

            // ====================== LOẠI CĂN HỘ ======================
            [
                'name'     => 'Loại căn hộ',
                'id'       => 'apartment_subtype',
                'type'     => 'select',
                'std'      => '',
                'options'  => [
                    ''          => '-- Chọn loại căn hộ --',
                    'apartment' => 'Căn hộ',
                    'officetel' => 'Officetel',
                    'duplex'    => 'Duplex',
                    'penthouse' => 'Penthouse',
                    'shophouse' => 'Shophouse',
                ],
                'visible'  => ['property_type', '=', 'apartment'],
            ],

            // ====================== CÁC FIELD KHÁC ======================
            ['type' => 'heading', 'name' => 'Giá bán & Thông tin khác'],
            ['name' => 'Giá bán (tỷ VND)', 'id' => 'price', 'type' => 'number', 'step' => '0.1'],

            ['type' => 'heading', 'name' => 'Ưu điểm nổi bật'],
            [
                'name'    => 'Ưu điểm',
                'id'      => 'highlights',
                'type'    => 'checkbox_list',
                'options' => [
                    'new_renovated' => 'Nhà mới sửa',
                    'good_light'    => 'Nhiều ánh sáng tự nhiên',
                    'near_school'   => 'Gần trường học',
                    // thêm đầy đủ các option bạn cần
                ],
            ],

            ['type' => 'heading', 'name' => 'Mô tả chi tiết'],
            ['name' => 'Mô tả nhà', 'id' => 'description', 'type' => 'wysiwyg', 'rows' => 10],
        ];
    }

    /**
     * JS FALLBACK – ĐẢM BẢO ẨN/HIỆN NGAY LẬP TỨC (rất quan trọng)
     */
    public static function afterSaveOrLoad(): void {
        ?>
        <script>
        jQuery(function($) {
            function toggleSubtypes() {
                var type = $('#property_type').val();
                
                // Ẩn tất cả trước
                $('#house_subtype, #apartment_subtype').closest('.rwmb-field').hide();
                
                if (type === 'house') {
                    $('#house_subtype').closest('.rwmb-field').show();
                } else if (type === 'apartment') {
                    $('#apartment_subtype').closest('.rwmb-field').show();
                }
            }

            // Chạy khi load trang
            toggleSubtypes();

            // Chạy khi thay đổi select
            $('#property_type').on('change', toggleSubtypes);
        });
        </script>
        <?php
    }

    // Gọi JS fallback sau khi metabox load
    public function __construct() {
        parent::__construct();
        add_action('rwmb_after', [self::class, 'afterSaveOrLoad']);
    }
}