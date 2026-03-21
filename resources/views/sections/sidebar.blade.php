{!! sage_get_sidebar_banner(1) !!}

@php 
$query = \App\Queries\MergedPostsQuery::breaking(6, ['post', 'event']); 
@endphp

@include('partials.blocks.breaking-posts', [
    'title' => 'Tin Nổi Bật',
    'query' => $query 
])

<div class="widget box mb-3 widget-posts blogsidebar3widget type-2">
    <hgroup class="title-box-category td-block-title-wrap default">
        <h2 class="parent-cate">
            <span class="inner-title">Xu hướng</span>
        </h2>
    </hgroup>
    <div class="clearfix"></div>
    <div class="box-body widget-content">
        <div class="item">
            <a href="https://vntravel.org.vn/road-trip-viet-nam-2026-vi-sao-mua-xuan-la-thoi-diem-ly-tuong-nhat-a8347.html" title="Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất?" class="!flex !no-underline style_img_left mb-4">
                <div class="image image-wrapper mr-3">
                    <div class="image image-medium relative overflow-hidden block no-underline">
                        <img class="w-full min-h-full max-h-full !h-[67px] absolute top-0 left-0 object-cover" src="https://vntravel.org.vn/uploads/images/blog/haingan116/2026/03/19/img-2710-1773905362.jpg" alt="Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất?">
                    </div>
                </div>
                <div class="info-wrapper">
                    <h3 class="article-title clamp-4-lines"> Road Trip Việt Nam 2026: Vì sao mùa xuân là thời điểm lý tưởng nhất? </h3>
                    <div class="meta-news">
                        <span class="author-meta">Trần Như Hải Ngân</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="https://vntravel.org.vn/k-home-bai-toan-song-tien-nghi-nhung-van-tiet-kiem-a8345.html" title="K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm" class="!flex !no-underline style_img_left mb-4">
                <div class="image image-wrapper mr-3">
                    <div class="image image-medium relative overflow-hidden block no-underline">
                        <img class="w-full min-h-full max-h-full !h-[67px] absolute top-0 left-0 object-cover" src="https://vntravel.org.vn/uploads/images/blog/lethytheu/2026/03/19/1-1773888845.png" alt="K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm">
                    </div>
                </div>
                <div class="info-wrapper">
                    <h3 class="article-title clamp-4-lines"> K-Home: bài toán sống tiện nghi nhưng vẫn tiết kiệm </h3>
                    <div class="meta-news">
                        <span class="author-meta">Lê Thy Thêu</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>