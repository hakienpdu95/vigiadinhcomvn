@extends('layouts.app')

@section('content')
    <section class="wrapper-topstory">
        <div class="news-box tin_host_home w-full" style="padding-bottom: 0">
            <div class="tieudiem main">
                <div class="box-news-larger flex flex-wrap relative mb-5 item-news full-thumb article-topstory">
                    <div class="thumb-art w-full grow-0 shrink-0 basis-full">
                        <div class="image image-wrapper overflow-hidden relative">
                            <a href="https://vntravel.org.vn/le-hoi-banh-mi-viet-nam-2026-mo-rong-khong-gian-giao-thoa-am-thuc-quoc-te-tai-tphcm-a8346.html" class="image image-medium relative overflow-hidden block no-underline" title="Lễ hội Bánh mì Việt Nam 2026: Mở rộng không gian giao thoa ẩm thực quốc tế tại TP.HCM">
                                <img class="w-full !h-full absolute top-0 left-0 object-cover lazy loaded" alt="Lễ hội Bánh mì Việt Nam 2026: Mở rộng không gian giao thoa ẩm thực quốc tế tại TP.HCM" src="https://vntravel.org.vn/zoom/960x576/uploads/images/blog/haingan116/2026/03/19/img-2831-1773903549.JPG">
                            </a>
                        </div>
                    </div>
                    <div class="content text-center bg-white relative ml-auto mr-auto z-2">
                        <p class="meta-news flex items-center justify-center align-middle font-normal text-[#575757]">
                            <a class="author-meta flex items-center font-bold text-[#6d6e72] mr-3 !no-underline" href="https://vntravel.org.vn/user/haingan116">
                                <img class="user-avatar w-[28px] h-[28px] object-cover float-left rounded-[50%] mr-3" src="https://vntravel.org.vn/zoom/156x0/uploads/images/haingan116/2025/07/25/485168043-4060054997601516-2652204820897826730-n-1753417635.jpg" alt="user-avatar">Trần Như Hải Ngân </a>
                            <span class="time-public">1 ngày trước</span>
                        </p>
                        <h3 class="title title-news mb-3 pt-0 mt-0">
                            <a class="!no-underline font-semibold text-[#222b45]" href="https://vntravel.org.vn/le-hoi-banh-mi-viet-nam-2026-mo-rong-khong-gian-giao-thoa-am-thuc-quoc-te-tai-tphcm-a8346.html" title="Lễ hội Bánh mì Việt Nam 2026: Mở rộng không gian giao thoa ẩm thực quốc tế tại TP.HCM"> Lễ hội Bánh mì Việt Nam 2026: Mở rộng không gian giao thoa ẩm thực quốc tế tại TP.HCM </a>
                        </h3>
                        <p class="snippet font-light"> Sáng 19/3, tại TP.HCM, Hiệp hội Du lịch TP.HCM công bố Lễ hội Bánh mì Việt Nam lần thứ 4 năm 2026 sự kiện tiếp tục khẳng định vị thế của bánh mì không chỉ là món ăn đường phố quen thuộc mà còn là biểu tượng văn hóa có khả năng kết nối toàn cầu. </p>
                    </div>
                </div>
                <div class="sub-news-top w-full h-auto pl-0 clear-both">
                    <div class="list-sub-feature grid sm:grid-cols-3 grid-cols-1 gap-3">
                        <div class="item group">
                            <div class="box-news relative mb-5">
                                <div class="image image-wrapper overflow-hidden relative block mb-3">
                                    <a href="https://vntravel.org.vn/94-doanh-nhan-tai-viet-nam-du-bao-kinh-te-se-khoi-sac-trong-nam-nay-a8342.html" class="image image-small relative overflow-hidden block no-underline" title="94% doanh nhân tại Việt Nam dự báo kinh tế sẽ khởi sắc trong năm nay">
                                        <img class="w-full !h-full absolute top-0 left-0 object-cover lazy loaded" src="https://vntravel.org.vn/zoom/480x288/uploads/images/2026/03/19/doanh-nhan-1773857006.jpg" alt="94% doanh nhân tại Việt Nam dự báo kinh tế sẽ khởi sắc trong năm nay">
                                    </a>
                                </div>
                                <div class="content flex flex-col gap-2">
                                    <p class="meta-news flex items-center justify-start align-middle font-normal text-[#575757]">
                                        <a class="author-meta flex items-center font-bold text-[#6d6e72] mr-3 !no-underline" href="https://vntravel.org.vn/user/tuyetvan">
                                            <img class="user-avatar w-[28px] h-[28px] object-cover float-left rounded-[50%] mr-2" src="https://vntravel.org.vn/zoom/156x0/uploads/images/Banbientap/2025/04/20/d912014a-003c-454c-bb30-9d4ecccc8316-1745123818.jpg" alt="user-avatar">Tuyết Vân </a>
                                        <span class="time-public">1 ngày trước</span>
                                    </p>
                                    <h3 class="title m-0 !mb-0">
                                        <a class="!no-underline font-semibold text-[#222b45]" href="https://vntravel.org.vn/94-doanh-nhan-tai-viet-nam-du-bao-kinh-te-se-khoi-sac-trong-nam-nay-a8342.html" title="94% doanh nhân tại Việt Nam dự báo kinh tế sẽ khởi sắc trong năm nay"> 94% doanh nhân tại Việt Nam dự báo kinh tế sẽ khởi sắc trong năm nay </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="item group"></div>
                        <div class="item group"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blocks.tabs-highlight')

    {{ sage_prefetch_link_posts($wp_query->posts ?? []) }}

    @php
        global $wp_query;
        $query = $wp_query;
    @endphp

    @include('partials.content-listing', ['query' => $query])
    {!! \App\Helpers\PaginationHelper::numberPagination($query) !!}
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection