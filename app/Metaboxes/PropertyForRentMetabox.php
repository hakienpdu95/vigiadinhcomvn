<?php
namespace App\Metaboxes;

class PropertyForRentMetabox extends BaseMetabox {
    protected string $title = 'Thông tin chi tiết nhà đất cho thuê';
    protected array $post_types = ['property-for-rent'];

    protected function getFields(): array {
        return [
            // Vị trí (tái sử dụng)
            ['type' => 'heading', 'name' => 'Vị trí bất động sản'],

            // Loại hình
            ['type' => 'heading', 'name' => 'Loại hình cho thuê'],
            [
                'name'    => 'Loại hình',
                'id'      => 'rent_type',
                'type'    => 'select',
                'options' => [
                    'house'     => 'Nhà riêng',
                    'apartment' => 'Căn hộ chung cư',
                    'shop'      => 'Mặt bằng',
                ],
            ],

            // Thông tin mặt bằng
            ['type' => 'heading', 'name' => 'Thông tin mặt bằng cho thuê'],
            ['name' => 'Diện tích sử dụng (m²)', 'id' => 'usable_area', 'type' => 'number'],
            ['name' => 'Giá cho thuê (VNĐ/tháng)', 'id' => 'rent_price', 'type' => 'number'],
            ['name' => 'Tiền cọc tối thiểu (VNĐ)', 'id' => 'deposit', 'type' => 'number'],
            ['name' => 'Thời hạn tối thiểu (tháng)', 'id' => 'min_term', 'type' => 'number'],

            // Nội thất, số phòng (conditional)
            ['name' => 'Nội thất', 'id' => 'furniture', 'type' => 'select', 'options' => ['full' => 'Nội thất đầy đủ', 'basic' => 'Nội thất cơ bản', 'raw' => 'Bàn giao thô']],

            // Mô tả
            ['type' => 'heading', 'name' => 'Mô tả'],
            ['name' => 'Mô tả chi tiết', 'id' => 'description', 'type' => 'wysiwyg'],
        ];
    }
}