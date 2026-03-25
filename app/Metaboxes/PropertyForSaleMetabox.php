<?php namespace App\Metaboxes;

class PropertyForSaleMetabox extends BaseMetabox
{
    protected string $title = 'Thông tin chi tiết nhà đất bán';
    protected array $post_types = ['property-for-sale'];

    protected function getFields(): array
    {
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
                'name'  => 'Thời gian muốn bán nhanh (số ngày)',
                'id'    => 'urgent_days',
                'type'  => 'number',
                'desc'  => 'Ví dụ: 30 ngày',
                'visible' => ['urgent_sale', '=', 1],
            ],

            // ====================== LOẠI HÌNH ======================
            ['type' => 'heading', 'name' => 'Loại hình bất động sản'],
            [
                'name'    => 'Loại hình',
                'id'      => 'property_type',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''         => '-- Chọn loại hình --',
                    'house'    => 'Nhà riêng',
                    'apartment'=> 'Căn hộ chung cư',
                    'land'     => 'Đất thổ cư',
                ],
                'required' => true,
            ],

            // Sub types cũ
            [
                'name'    => 'Loại nhà riêng',
                'id'      => 'house_subtype',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''        => '-- Chọn loại nhà --',
                    'alley'   => 'Nhà hẻm',
                    'street'  => 'Nhà mặt tiền',
                    'adjacent'=> 'Nhà liền kề',
                    'villa'   => 'Biệt thự',
                ],
                'visible' => ['property_type', '=', 'house'],
            ],
            [
                'name'    => 'Loại căn hộ',
                'id'      => 'apartment_subtype',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''         => '-- Chọn loại căn hộ --',
                    'apartment'=> 'Căn hộ',
                    'officetel'=> 'Officetel',
                    'duplex'   => 'Duplex',
                    'penthouse'=> 'Penthouse',
                    'shophouse'=> 'Shophouse',
                ],
                'visible' => ['property_type', '=', 'apartment'],
            ],

            // ====================== THÔNG TIN NHÀ (MỚI) ======================
            ['type' => 'heading', 'name' => 'Thông tin nhà'],

            // === CHUNG NHÀ RIÊNG + ĐẤT THỔ CƯ ===
            [
                'name'  => 'Chiều ngang (m)',
                'id'    => 'width',
                'type'  => 'number',
                'step'  => '0.01',
                'min'   => 0,
                'desc'  => 'Ví dụ: 5.5',
            ],
            [
                'name'  => 'Chiều dài (m)',
                'id'    => 'length',
                'type'  => 'number',
                'step'  => '0.01',
                'min'   => 0,
                'desc'  => 'Ví dụ: 20',
            ],
            [
                'name'  => 'Diện tích đất công nhận (m²)',
                'id'    => 'land_area',
                'type'  => 'number',
                'step'  => '0.1',
                'min'   => 0,
            ],

            // === CHỈ CĂN HỘ CHUNG CƯ ===
            [
                'name'  => 'Diện tích tim tường (m²)',
                'id'    => 'usable_area',
                'type'  => 'number',
                'step'  => '0.1',
                'min'   => 0,
                'desc'  => 'Diện tích sử dụng thực tế',
            ],

            // === GIẤY TỜ PHÁP LÝ (tách riêng 3 field để options đúng từng loại) ===
            [
                'name'    => 'Giấy tờ pháp lý',
                'id'      => 'legal_house',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''               => '-- Chọn loại giấy tờ --',
                    'so_hong_rieng'  => 'Sổ hồng riêng',
                    'so_hong_chung'  => 'Sổ hồng chung',
                    'dang_hoan_cong' => 'Đang làm hoàn công',
                ],
            ],
            [
                'name'    => 'Giấy tờ pháp lý',
                'id'      => 'legal_apartment',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''               => '-- Chọn loại giấy tờ --',
                    'so_hong_rieng'  => 'Sổ hồng riêng',
                    'hop_dong'       => 'Hợp đồng mua bán',
                    'dang_cho_cap_so'=> 'Đang chờ cấp sổ',
                ],
            ],
            [
                'name'    => 'Giấy tờ pháp lý',
                'id'      => 'legal_land',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''               => '-- Chọn loại giấy tờ --',
                    'so_hong_rieng'  => 'Sổ hồng riêng',
                    'so_hong_chung'  => 'Sổ hồng chung',
                ],
            ],

            // === CHỈ NHÀ RIÊNG ===
            [
                'name'    => 'Hướng nhà (cửa chính)',
                'id'      => 'direction',
                'type'    => 'select',
                'std'     => '',
                'options' => [
                    ''          => '-- Chọn hướng --',
                    'tay_bac'   => 'Tây Bắc',
                    'bac'       => 'Bắc',
                    'dong_bac'  => 'Đông Bắc',
                    'tay'       => 'Tây',
                    'dong'      => 'Đông',
                    'tay_nam'   => 'Tây Nam',
                    'nam'       => 'Nam',
                    'dong_nam'  => 'Đông Nam',
                ],
            ],
            [
                'name' => 'Số tầng',
                'id'   => 'floors',
                'type' => 'number',
                'min'  => 1,
            ],

            // === CHUNG NHÀ RIÊNG + CĂN HỘ ===
            [
                'name' => 'Số phòng ngủ',
                'id'   => 'bedrooms',
                'type' => 'number',
                'min'  => 0,
            ],
            [
                'name' => 'Số phòng tắm',
                'id'   => 'bathrooms',
                'type' => 'number',
                'min'  => 0,
            ],
        ];
    }

    /**
     * JS FALLBACK SIÊU MẠNH – Hoạt động hoàn hảo cả Create & Edit
     */
    public static function jsFallback(): void
    {
        ?>
        <script>
        jQuery(function($) {
            function toggleAll() {
                var type = $('#property_type').val() || '';
                var urgentChecked = $('#urgent_sale').is(':checked');

                // Ẩn tất cả field thuộc "Thông tin nhà" + subtype cũ
                $('#house_subtype, #apartment_subtype, #width, #length, #land_area, #usable_area, #legal_house, #legal_apartment, #legal_land, #direction, #floors, #bedrooms, #bathrooms')
                    .closest('.rwmb-field').hide();

                // === SUB-TYPE (giữ nguyên logic cũ) ===
                if (type === 'house') {
                    $('#house_subtype').closest('.rwmb-field').show();
                } else if (type === 'apartment') {
                    $('#apartment_subtype').closest('.rwmb-field').show();
                }

                // === THÔNG TIN NHÀ THEO LOẠI HÌNH ===
                if (type === 'house') {
                    $('#width, #length, #land_area, #legal_house, #direction, #floors, #bedrooms, #bathrooms')
                        .closest('.rwmb-field').show();
                } else if (type === 'apartment') {
                    $('#usable_area, #legal_apartment, #bedrooms, #bathrooms')
                        .closest('.rwmb-field').show();
                } else if (type === 'land') {
                    $('#width, #length, #land_area, #legal_land')
                        .closest('.rwmb-field').show();
                }

                // === BÁN GẤP ===
                if (urgentChecked) {
                    $('#urgent_days').closest('.rwmb-field').show();
                } else {
                    $('#urgent_days').closest('.rwmb-field').hide();
                }
            }

            // === CHẠY NGAY + THEO DÕI THAY ĐỔI ===
            toggleAll();
            $('#property_type').on('change', toggleAll);
            $('#urgent_sale').on('change', toggleAll);

            // === RẤT QUAN TRỌNG CHO TRANG CHỈNH SỬA BÀI CŨ ===
            $(document).on('rwmb_ready', toggleAll);
            setTimeout(toggleAll, 300); // safeguard khi RWMB load chậm
        });
        </script>
        <?php
    }

    public function __construct()
    {
        parent::__construct();
        add_action('rwmb_after', [self::class, 'jsFallback']);
    }
}