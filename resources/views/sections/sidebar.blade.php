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

<section data-v-6338f232="" class="widget box mb-3 flex flex-col space-y-6">
    <h3 class="category-title text-bca-main-01 font-bold text-lg lg:text-xl uppercase pb-[17px] border-b-[1px] border-b-solid border-b-bca-gray-200">Tin tức mới cập nhật</h3>
    <div class="lg:rounded-[8px] lg:shadow-custom lg:p-6">
        <div class="grid grid-cols-1 gap-6 lg:gap-4">
            <article class="card-medium lg:rounded-[8px]">
                <figure class="h-full flex flex-col space-y-[16px]">
                    <a href="/bai-viet/tuyen-quang-cong-an-co-so-khan-truong-ho-tro-nhan-dan-khac-phuc-hau-qua-thien-tai-mua-da-1774237207" class="">
                        <picture data-v-f505a7ed="" class="relative block w-full lg:h-[190px]">
                            <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                            <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                            <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                            <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                            <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg" media="(min-width: 1025px)" type="image/webp">
                            <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/large/photo-library-20260323103450-f7d87b5c-e74e-45a0-b74f-f3fb989d4421-3.jpg" alt="Tuyên Quang: Công an cơ sở khẩn trương hỗ trợ nhân dân khắc phục hậu quả thiên tai, mưa đá" loading="lazy" decoding="async" fetchpriority="auto" width="238" height="160" class="placeholder rounded-[8px] object-cover flex-shrink-0 w-full h-full">
                            <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2 lg:top-4 lg:right-4">
                                <!---->
                            </div>
                        </picture>
                    </a>
                    <figcaption class="card-content flex-1 h-full flex flex-col space-y-[7px] lg:min-h-[82px]">
                        <a href="/bai-viet/tuyen-quang-cong-an-co-so-khan-truong-ho-tro-nhan-dan-khac-phuc-hau-qua-thien-tai-mua-da-1774237207" class="">
                            <h2 class="text-black hover:text-bca-main-01 text-lg font-bold">Tuyên Quang: Công an cơ sở khẩn trương hỗ trợ nhân dân khắc phục hậu quả thiên tai, mưa đá</h2>
                        </a>
                        <span class="hidden lg:block text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                    </figcaption>
                </figure>
            </article>
            <div class="grid grid-cols-1 gap-6 lg:gap-4 lg:max-h-[calc(733px-277px)] custom-scrollbar">
                <a href="/bai-viet/cong-an-tuyen-quang-triet-pha-duong-day-buon-ban-hang-cam-xuyen-bien-gioi-thu-giu-tren-710kg-phao-hoa-no-1774233976" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323094241-ecb4cca7-116d-4fe1-9cc6-22ac2a5519c9-4.jpg" alt="Công an Tuyên Quang triệt phá đường dây buôn bán hàng cấm xuyên biên giới thu giữ gần 710kg pháo hoa nổ" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Công an Tuyên Quang triệt phá đường dây buôn bán hàng cấm xuyên biên giới thu giữ gần 710kg pháo hoa nổ</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/bac-ninh-phat-huy-vai-tro-huong-dan-vien-thuong-truc-ve-chuyen-doi-so-tai-dia-ban-co-so-cua-luc-luong-tham-gia-bao-ve-antt-o-co-so-1774005135" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260320181043-9d446517-9d5c-40e9-8178-39d68e904c85-huong-dan.jpg" alt="Bắc Ninh: Phát huy vai trò “hướng dẫn viên thường trực” về chuyển đổi số tại địa bàn cơ sở của lực lượng tham gia bảo vệ an ninh, trật tự ở cơ sở" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Bắc Ninh: Phát huy vai trò “hướng dẫn viên thường trực” về chuyển đổi số tại địa bàn cơ sở của lực lượng tham gia bảo vệ an ninh, trật tự ở cơ sở</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/bac-ninh-khoi-to-04-bi-can-lam-gia-con-dau-tai-lieu-de-truc-loi-chinh-sach-mua-nha-o-xa-hoi-1774230136" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260323083451-88f8954b-5080-4527-be27-eb9ad1fbc734-img-8097.JPG" alt="Bắc Ninh: Khởi tố 04 bị can làm giả con dấu, tài liệu để trục lợi chính sách mua nhà ở xã hội" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Bắc Ninh: Khởi tố 04 bị can làm giả con dấu, tài liệu để trục lợi chính sách mua nhà ở xã hội</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/cong-an-tinh-phu-tho-nhanh-chong-bat-giu-doi-tuong-giet-nguoi-sau-6-gio-gay-an-1774228625" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 1x, https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 1x, https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 1x, https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 1x, https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/media-library/small/20250812092025_1db1b08f-6d13-4ee2-bcad-6e842fa521ae.webp" alt="Công an tỉnh Phú Thọ nhanh chóng bắt giữ đối tượng gây ra trọng án sau 06 giờ gây án" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Công an tỉnh Phú Thọ nhanh chóng bắt giữ đối tượng gây ra trọng án sau 06 giờ gây án</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/xu-ly-nhom-thanh-thieu-nien-phong-nhanh-vuot-au-gay-mat-trat-tu-an-toan-giao-thong-1774237828" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/small/library-20260323105821-ce5f4ac7-82bc-47a8-823f-ad60eb2a45e6-article-20260323105808-9f3ee8ba-242d-404a-9542-85137e4fbce2-edited-image.png" alt="Sơn La: Xử lý nhóm thanh thiếu niên phóng nhanh, vượt ẩu gây mất trật tự an toàn giao thông" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Sơn La: Xử lý nhóm thanh thiếu niên phóng nhanh, vượt ẩu gây mất trật tự an toàn giao thông</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">23/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/an-giang-trao-tang-25-can-nha-va-hon-200-phan-qua-cho-nguoi-dan-co-hoan-canh-kho-khan-1774185081" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322200905-043d6652-30d2-42df-8967-cbfde262d300-1111.jpeg" alt="An Giang: Trao 25 căn nhà và hơn 200 phần quà tặng người dân có hoàn cảnh khó khăn" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">An Giang: Trao 25 căn nhà và hơn 200 phần quà tặng người dân có hoàn cảnh khó khăn</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/thanh-pho-can-tho-kip-thoi-cuu-nguoi-trong-tinh-huong-nguy-hiem-lan-toa-nghia-cu-dep-giua-doi-thuong-1774175612" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/small/library-20260323110702-9ff3cb2b-1cc4-4c4e-bdb1-f7b670e9a2f6-photo-library-20260322172616-88963bbc-4ce2-49a5-a909-f7e5e0f3a420-anh-2.png" alt="Công an thành phố Cần Thơ liên tiếp cứu người trong tình huống nguy hiểm, lan tỏa nghĩa cử đẹp" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Công an thành phố Cần Thơ liên tiếp cứu người trong tình huống nguy hiểm, lan tỏa nghĩa cử đẹp</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/doan-thanh-nien-cong-san-ho-chi-minh-bo-cong-an-don-nhan-huan-chuong-bao-ve-to-quoc-hang-nhat-1774175276" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/small/library-20260322163828-2d2e037d-8b20-4e81-af26-99f043d5657a-dsc-8753.JPG" alt="Đoàn Thanh niên Cộng sản Hồ Chí Minh Bộ Công an đón nhận Huân chương Bảo vệ Tổ quốc hạng Nhất" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Đoàn Thanh niên Cộng sản Hồ Chí Minh Bộ Công an đón nhận Huân chương Bảo vệ Tổ quốc hạng Nhất</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/tuoi-tre-cong-an-ca-mau-xung-kich-tinh-nguyen-vi-cong-dong-trong-thang-thanh-nien-1774083601" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260321155716-ba54d6ff-babe-41f1-8dee-ad91d0018426-anh-5.JPG" alt="Tuổi trẻ Công an tỉnh Cà Mau xung kích, tình nguyện vì cộng đồng trong tháng Thanh niên" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Tuổi trẻ Công an tỉnh Cà Mau xung kích, tình nguyện vì cộng đồng trong tháng Thanh niên</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/truy-thang-cap-bac-ham-thieu-ta-cho-dong-chi-nguyen-xuan-hai-can-bo-cong-an-xa-dien-lam-hy-sinh-trong-khi-lam-nhiem-vu-1774169538" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322154740-93ef0f26-bbc6-4d42-b98f-b51ed2de34ed-654688413-1460264065467728-1927656869880396033-n.jpg" alt="Truy thăng cấp bậc hàm Thiếu tá đối với đồng chí Nguyễn Xuân Hải" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Truy thăng cấp bậc hàm Thiếu tá đối với đồng chí Nguyễn Xuân Hải</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/cong-an-co-so-kip-thoi-ho-tro-nhan-dan-khac-phuc-hau-qua-giong-loc-tai-lao-cai-1774158083" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/articles-20260322123643-8092526a-24ea-4254-98f1-0391917ef9d7-nhieu-ho-dan-a-uoc-lop-xong-mai-nha-trong-sang-ngay-22-3.jpg" alt="Công an cơ sở kịp thời hỗ trợ Nhân dân khắc phục hậu quả giông lốc tại Lào Cai" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Công an cơ sở kịp thời hỗ trợ Nhân dân khắc phục hậu quả giông lốc tại Lào Cai</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/lan-toa-nghia-tinh-vi-nhan-dan-cong-an-ca-mau-chung-tay-ho-tro-nong-dan-tieu-thu-nong-san-1774153274" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/small/library-20260323104152-b44bceea-ce22-44c3-9652-42d8eed1d0c5-photo-library-20260322111546-38a3d884-7f8a-40f1-ae3a-04f427254ec7-anh-4.jpg" alt="Công an tỉnh Cà Mau chung tay hỗ trợ nông dân tiêu thụ nông sản" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Công an tỉnh Cà Mau chung tay hỗ trợ nông dân tiêu thụ nông sản</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/gan-1-4-trieu-nguoi-trong-ca-nuoc-tham-gia-ngay-chay-olympic-vi-suc-khoe-toan-dan-vi-an-ninh-to-quoc-nam-2026-1774150700" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 1x, https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/small/library-20260322102456-1e4fdaa2-b2ff-4c8e-a8f4-1e99ef3a8331-dsc-8500.JPG" alt="Gần 1,4 triệu người trong cả nước tham gia Ngày chạy Olympic - Vì sức khỏe toàn dân - Vì an ninh Tổ quốc năm 2026" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Gần 1,4 triệu người trong cả nước tham gia Ngày chạy Olympic - Vì sức khỏe toàn dân - Vì an ninh Tổ quốc năm 2026</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
                <a href="/bai-viet/cong-an-xa-dai-phuc-thai-nguyen-ban-giao-01-ba-cu-di-lac-lang-thang-den-trung-tam-bao-tro-va-cong-tac-xa-hoi-tinh-thai-nguyen-1774147484" class="">
                    <article class="card-small h-full cursor-pointer group border-b border-b-bca-gray-100 pb-4">
                        <figure class="h-full flex space-x-4 lg:space-x-[13px]">
                            <picture data-v-f505a7ed="" class="relative block w-[103px] h-[68px] lg:h-[58px]">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 2x" media="(max-width: 640px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 2x" media="(max-width: 768px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 2x" media="(max-width: 1024px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 1x, https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg 2x" media="(min-width: 1025px)" type="image/webp" sizes="100vw">
                                <source data-v-f505a7ed="" srcset="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg" media="(min-width: 1025px)" type="image/webp">
                                <img data-v-f505a7ed="" src="https://bocongan.gov.vn/media/bca-media/bocongan-ctv/bocongan-ctv/small/photo-library-20260322094240-3662be37-3b98-46b2-b258-72395caff542-anh-1.jpg" alt="Thái Nguyên: Công an xã Đại Phúc đưa bà cụ đi lạc đến Trung tâm bảo trợ và công tác xã hội tỉnh" loading="lazy" decoding="async" fetchpriority="auto" width="376" height="268" class="placeholder w-full h-full rounded-[8px] object-cover flex-shrink-0">
                                <div data-v-f505a7ed="" class="absolute flex group z-30 top-2 right-2 top-2 right-2">
                                    <!---->
                                </div>
                            </picture>
                            <figcaption class="card-content flex-1 h-full flex flex-col space-y-[5px] lg:space-y-[7px] rounded-r-[8px]">
                                <h2 class="text-black text-[15px] lg:text-[15px] hover:text-bca-main-01">Thái Nguyên: Công an xã Đại Phúc đưa bà cụ đi lạc đến Trung tâm bảo trợ và công tác xã hội tỉnh</h2>
                                <span class="hidden text-bca-gray-400 text-xs font-medium">22/03/2026</span>
                            </figcaption>
                        </figure>
                    </article>
                </a>
            </div>
        </div>
    </div>
</section>