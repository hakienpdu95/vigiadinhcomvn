<?php
namespace App\Metaboxes;

class PropertyForSaleMetabox extends BaseMetabox {
    protected string $title = 'Thông tin chi tiết nhà đất bán';
    protected array $post_types = ['property-for-sale']; 

    protected function getFields(): array {
        return [
            // ====================== VỊ TRÍ ======================
            ['type' => 'heading', 'name' => 'Vị trí bất động sản'],
            [
                'name' => 'Số nhà và đường',
                'id'   => 'address_detail',
                'type' => 'text',
                'desc' => 'Ví dụ: 12 Nguyễn Văn A, Phường 5',
            ],

            // ====================== GIÁ BÁN ======================
            ['type' => 'heading', 'name' => 'Giá bán'],
            [
                'name' => 'Giá bán (tỷ VND)',
                'id'   => 'price',
                'type' => 'number',
                'step' => '0.1',
            ],
            [
                'name' => 'Bán gấp',
                'id'   => 'urgent_sale',
                'type' => 'checkbox',
            ],
            [
                'name'    => 'Thời gian muốn bán nhanh (số ngày)',
                'id'      => 'urgent_days',
                'type'    => 'number',
                'desc'    => 'Ví dụ: 30 ngày',
                'visible' => ['urgent_sale', '=', 1],
            ],

            // ====================== LOẠI HÌNH ======================
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
        ];
    }

    /**
     * JS FALLBACK MẠNH – HOẠT ĐỘNG HOÀN HẢO TRÊN CẢ CREATE & EDIT
     */
    public static function jsFallback(): void {
        ?>
        <script>
        jQuery(function($) {
            function toggleAll() {
                var type = $('#property_type').val();
                var urgentChecked = $('#urgent_sale').is(':checked');

                // Ẩn tất cả sub-type
                $('#house_subtype, #apartment_subtype').closest('.rwmb-field').hide();

                // Hiển thị đúng sub-type
                if (type === 'house') {
                    $('#house_subtype').closest('.rwmb-field').show();
                } else if (type === 'apartment') {
                    $('#apartment_subtype').closest('.rwmb-field').show();
                }

                // Bán gấp
                if (urgentChecked) {
                    $('#urgent_days').closest('.rwmb-field').show();
                } else {
                    $('#urgent_days').closest('.rwmb-field').hide();
                }
            }

            // === CHẠY NGAY KHI TRANG LOAD (rất quan trọng cho trang chỉnh sửa) ===
            toggleAll();

            // === THEO DÕI THAY ĐỔI ===
            $('#property_type').on('change', toggleAll);
            $('#urgent_sale').on('change', toggleAll);

            // === TRIGGER LẠI SAU KHI META BOX LOAD XONG ===
            $(document).on('rwmb_ready', toggleAll);
        });
        </script>
        <?php
    }

    public function __construct() {
        parent::__construct();
        add_action('rwmb_after', [self::class, 'jsFallback']);
    }
}