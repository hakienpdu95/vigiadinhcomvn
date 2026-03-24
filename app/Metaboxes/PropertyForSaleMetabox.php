<?php
namespace App\Metaboxes;

class PropertyForSaleMetabox extends BaseMetabox {
    protected string $title = 'Thông tin chi tiết nhà đất bán';
    protected array $post_types = ['property-for-sale'];

    protected function getFields(): array {
        return [
            // === VỊ TRÍ (tái sử dụng) ===
            ['type' => 'heading', 'name' => 'Vị trí bất động sản'],
            // Các field province_code + ward_code sẽ tự động hiển thị từ ProductLocationMetabox

            // === LOẠI HÌNH ===
            ['type' => 'heading', 'name' => 'Loại hình bất động sản'],
            [
                'name'    => 'Loại hình chính',
                'id'      => 'property_type',
                'type'    => 'select',
                'options' => [
                    ''          => 'Chọn loại hình',
                    'house'     => 'Nhà riêng',
                    'apartment' => 'Căn hộ chung cư',
                    'land'      => 'Đất thổ cư',
                ],
                'required' => true,
            ],

            // === Sub-type cho Nhà riêng ===
            [
                'name'    => 'Loại nhà riêng',
                'id'      => 'house_subtype',
                'type'    => 'select',
                'options' => [
                    'alley'     => 'Nhà hẻm',
                    'street'    => 'Nhà mặt tiền',
                    'adjacent'  => 'Nhà liền kề',
                    'villa'     => 'Biệt thự',
                ],
                'visible' => ['property_type', '=', 'house'],
            ],

            // === Sub-type cho Căn hộ ===
            [
                'name'    => 'Loại căn hộ',
                'id'      => 'apartment_subtype',
                'type'    => 'select',
                'options' => [
                    'apartment' => 'Căn hộ',
                    'officetel' => 'Officetel',
                    'duplex'    => 'Duplex',
                    'penthouse' => 'Penthouse',
                    'shophouse' => 'Shophouse',
                ],
                'visible' => ['property_type', '=', 'apartment'],
            ],

            // === GIÁ BÁN & BÁN GẤP ===
            ['type' => 'heading', 'name' => 'Giá bán & Bán gấp'],
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
                'name'    => 'Thời gian bán gấp (ngày)',
                'id'      => 'urgent_days',
                'type'    => 'number',
                'visible' => ['urgent_sale', '=', 1],
            ],

            // === THAM QUAN NHÀ ===
            [
                'name' => 'Cho phép khách tham quan nhà',
                'id'   => 'open_house',
                'type' => 'checkbox',
            ],

            // === THÔNG TIN NHÀ / ĐẤT (conditional theo loại hình) ===
            // (Tôi đã rút gọn để dễ đọc, bạn có thể mở rộng thêm các field khác tương tự)
            ['type' => 'heading', 'name' => 'Thông tin chi tiết nhà/đất'],

            // Nhà riêng
            ['name' => 'Chiều ngang (m)', 'id' => 'width', 'type' => 'number', 'visible' => ['property_type', '=', 'house']],
            ['name' => 'Chiều dài (m)', 'id' => 'length', 'type' => 'number', 'visible' => ['property_type', '=', 'house']],
            ['name' => 'Diện tích đất (m²)', 'id' => 'land_area', 'type' => 'number', 'visible' => ['property_type', '=', 'house']],

            // Căn hộ
            ['name' => 'Diện tích tim tường (m²)', 'id' => 'built_area', 'type' => 'number', 'visible' => ['property_type', '=', 'apartment']],

            // Đất thổ cư
            ['name' => 'Diện tích đất (m²)', 'id' => 'land_area_land', 'type' => 'number', 'visible' => ['property_type', '=', 'land']],

            // === ƯU ĐIỂM NỔI BẬT (checkbox_list) ===
            ['type' => 'heading', 'name' => 'Ưu điểm nổi bật'],
            [
                'name'    => 'Ưu điểm',
                'id'      => 'highlights',
                'type'    => 'checkbox_list',
                'options' => [
                    'new_renovated' => 'Nhà mới sửa',
                    'good_light'    => 'Nhiều ánh sáng tự nhiên',
                    'near_school'   => 'Gần trường học',
                    'garden'        => 'Có sân vườn',
                    // ... bạn thêm đầy đủ các option theo yêu cầu
                ],
            ],

            // === MÔ TẢ CHI TIẾT ===
            ['type' => 'heading', 'name' => 'Mô tả nhà'],
            [
                'name' => 'Mô tả chi tiết',
                'id'   => 'description',
                'type' => 'wysiwyg',
                'rows' => 8,
            ],
        ];
    }
}