@extends('layouts.tempateHyundai')
@section('content')
    <!-- boxcar-team-section-three -->
    <section class="cars-section-four v1 layout-radius">
        <div class="boxcar-container">
            <div class="boxcar-title-three wow fadeInUp">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><span>danh sách các xe </span></li>
                </ul>
                <h2>Những mẫu xe </h2>
            </div>
            <div class="text-box">
                <div class="text">Showing 1 to 16 of 1559 vehicles</div>
                <form>
                    <div class="form_boxes v3">
                        <small>Sort by</small>
                        <div class="drop-menu">
                            <div class="select">
                                <span>Any Makes</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <input type="hidden" name="gender">
                            <ul class="dropdown" style="display: none;">
                                <li>Audi</li>
                                <li>Honda</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row wow fadeInUp">
                @foreach ($products as $product)
                    <!-- car-block-four -->
                    <?php
                    // Tách chuỗi thành mảng các đường dẫn ảnh
                    $imageArray = explode(',', $product->images);

                    // Lấy đường dẫn ảnh đầu tiên
                    $firstImage = trim($imageArray[0]);
                    ?>
                    <div class="car-block-four col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure style="height:180px;width:330px " class="image"><a href="#"><img
                                            src="{{ asset($firstImage) }}" alt="Image of {{ $product->name }}"></a></figure>
                                <span>Low Mileage</span>
                                <a class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_601_1274)">
                                            <path
                                                d="M9.39062 12C9.15156 12 8.91671 11.9312 8.71128 11.8009L6.11794 10.1543C6.04701 10.1091 5.95296 10.1096 5.88256 10.1543L3.28869 11.8009C2.8048 12.1082 2.13755 12.0368 1.72722 11.6454C1.47556 11.4047 1.33685 11.079 1.33685 10.728V1.2704C1.33738 0.570053 1.90743 0 2.60778 0H9.39272C10.0931 0 10.6631 0.570053 10.6631 1.2704V10.728C10.6631 11.4294 10.0925 12 9.39062 12ZM6.00025 9.06935C6.24193 9.06935 6.47783 9.13765 6.68169 9.26743L9.27503 10.9135C9.31233 10.9371 9.35069 10.9487 9.39114 10.9487C9.48046 10.9487 9.61286 10.8788 9.61286 10.728V1.2704C9.61233 1.14956 9.51356 1.05079 9.39272 1.05079H2.60778C2.48642 1.05079 2.38817 1.14956 2.38817 1.2704V10.728C2.38817 10.7911 2.41023 10.8436 2.45384 10.8851C2.52582 10.9539 2.63563 10.9708 2.72599 10.9135L5.31934 9.2669C5.52267 9.13765 5.75857 9.06935 6.00025 9.06935Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_601_1274">
                                                <rect width="12" height="12" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="content-box">
                                <h6 class="title text-center mb-2"><a href="{{route('product.detail',$product->alias)}}">{{ $product->title }}</a></h6>
                                <div class="btn-box">
                                    <small class="text-white p-2 bg-primary" style="font-size: 16px;">Giá xe
                                        {{ number_format($product->price / 1000000, 0, ',', '.') }} Triệu</small>
                                    <a href="{{ route('product.detail', ['alias' => $product->alias]) }}"
                                        class="details ">Xem chi tiết<svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_601_4346)">
                                                <path
                                                    d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                                    fill="#405FF2"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_601_4346">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- car-block-four -->
                @endforeach

            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
    </section>
    <!-- End boxcar-team-section-three -->

    <!-- why choose us section -->
    <section class="why-choose-us-section-four">
        <div class="boxcar-container">
            <div class="boxcar-title text-center wow fadeInUp">
                <h2 class="title">Lý Do Nên Chọn Chúng Tôi?</h2>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 car-home ">
            <div class="cover"><a href='san-pham/hyundai-stargazer/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/07/stargazer-car-1.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Stargazer X"></a></div>
            <div class="car-home-detail">
                <p class="title"><a href="san-pham/hyundai-stargazer/index.html">Hyundai Stargazer
                        X</a></p>
                <ul class="list-unstyled list-inline">
                    <li class="price">Giá xe 488 Triệu</li>
                    <li class="plus"><a href="san-pham/hyundai-stargazer/index.html">Xem chi
                            tiết</a></li>
                </ul>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 car-home ">
            <div class="cover"><a href='san-pham/hyundai-custin/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/custin-home.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Custin"></a></div>
            <div class="car-home-detail">
                <p class="title"><a href="san-pham/hyundai-custin/index.html">Hyundai Custin</a></p>
                <ul class="list-unstyled list-inline">
                    <li class="price">Giá xe 820 Triệu</li>
                    <li class="plus"><a href="san-pham/hyundai-custin/index.html">Xem chi tiết</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 car-home ">
            <div class="cover"><a href='san-pham/hyundai-palisade/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/palisade-home.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Palisade"></a></div>
            <div class="car-home-detail">
                <p class="title"><a href="san-pham/hyundai-palisade/index.html">Hyundai Palisade</a>
                </p>
                <ul class="list-unstyled list-inline">
                    <li class="price">Giá xe 1469 Triệu</li>
                    <li class="plus"><a href="san-pham/hyundai-palisade/index.html">Xem chi tiết</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 car-home ">
            <div class="cover"><a href='san-pham/hyundai-ioniq5/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/IONIQ5-home.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai IONIQ 5"></a></div>
            <div class="car-home-detail">
                <p class="title"><a href="san-pham/hyundai-ioniq5/index.html">Hyundai IONIQ 5</a>
                </p>
                <ul class="list-unstyled list-inline">
                    <li class="price">Giá xe 1300 Triệu</li>
                    <li class="plus"><a href="san-pham/hyundai-ioniq5/index.html">Xem chi tiết</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
    </div>
</div>
<!-- new promotion -->
<div class="container">
    <div class="row">
        <div class="box-header box-header-promotions">
            <h3 class="section-title section-title-center"><span class="section-title-main2">HYUNDAI
                    HẢI PHÒNG</span></h3>
        </div>
        <div class="colored-separator text-center style_1">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
            <div class="first-long stm-base-background-color"></div>
        </div>
        <link rel="stylesheet"
            href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <div class="new-service-container">
            <div class="new-text-section">
                <h1>SHOWROOM 1S</h1>
                <p><i class="fas fa-map-marker-alt"></i> Địa chỉ: Shoroom 1S 9/10B Lê Hồng Phong, Lê
                    Chân, Hải Phòng</p>
                <button
                    onclick="window.location.href='https://www.google.com/maps/place/Hyundai+Lê+Hồng+Phong/@20.8407086,106.7128558,20.58z/data=!4m15!1m8!3m7!1s0x314a7aaf95e6de9d:0xbfa3b286ae52b0af!2zOSAxMGIsIDEwYiDEkC4gTMOqIEjhu5NuZyBQaG9uZywgxJDhurFuZyBI4bqjaSwgSOG6o2kgQW4sIEjhuqNpIFBow7JuZywgVmnhu4d0IE5hbQ!3b1!8m2!3d20.8406417!4d106.713065!16s%2Fg%2F11thr8nq0k!3m5!1s0x314a7bbe8878e049:0xeec9e832a0d33ebb!8m2!3d20.8406047!4d106.7129821!16s%2Fg%2F11qnbk536c?hl=vi-VN&amp;entry=ttu'">Chỉ
                    đường</button>
            </div>
            <div class="new-image-section">
                <img src="wp-content/themes/hyundaihaiphong/cad854f4c6ab63f53aba.jpg"
                    alt="Showroom 1S">
            </div>
        </div>
    </section>
    <!-- End why choose us section -->

    <!-- cars-section-three -->
    <section class="cars-section-nine">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Xe nổi bật</h2>
                <a href="#" class="btn-title">View All<svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_601_243)">
                            <path
                                d="M13.6109 0H5.05533C4.84037 0 4.66643 0.173943 4.66643 0.388901C4.66643 0.603859 4.84037 0.777802 5.05533 0.777802H12.6721L0.113697 13.3362C-0.0382246 13.4881 -0.0382246 13.7342 0.113697 13.8861C0.18964 13.962 0.289171 14 0.388666 14C0.488161 14 0.587656 13.962 0.663635 13.8861L13.222 1.3277V8.94447C13.222 9.15943 13.3959 9.33337 13.6109 9.33337C13.8259 9.33337 13.9998 9.15943 13.9998 8.94447V0.388901C13.9998 0.173943 13.8258 0 13.6109 0Z"
                                fill="#050B20"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_601_243">
                                <rect width="14" height="14" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="new-image-section">
                <img src="wp-content/themes/hyundaihaiphong/e0d28a2b1f74ba2ae365.jpg"
                    alt="Showroom 3S">
            </div>
        </div>


        <div class="box-header box-header-promotions">
            <h3 class="section-title section-title-center"><span class="section-title-main2">Khuyến
                    Mãi Bán Hàng</span></h3>
        </div>
        <div class="colored-separator text-center style_1">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
            <div class="first-long stm-base-background-color"></div>
        </div>
    </div>
    <div class="row new-home">
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='hyundai-thanh-cong-hai-phong-trien-khai-chuong-trinh-khuyen-mai-dich-vu-he-2024/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/07/Frame_FB-1000x1000_1000x1000-555x312.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Thành Công Hải Phòng triển khai chương trình khuyến mại dịch vụ hè 2024"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="hyundai-thanh-cong-hai-phong-trien-khai-chuong-trinh-khuyen-mai-dich-vu-he-2024/index.html">Hyundai
                        Thành Công Hải Phòng triển khai chương trình khuyến mại dịch vụ hè 2024</a>
                </h3>
                <p class="from_the_blog_excerpt">Từ ngày 01/06/2024 cho đến hết 30/06/2024, Liên
                    doanh ô tô Hyundai Thành Công Việt Nam (HTV) chính... </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- End shop section two -->

    <!-- pricing section -->
    <section class="boxcar-pricing-section-four v7 pb-0 pt-0">
        <div class="boxcar-container">
            <div class="row">
                <!-- image-column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('Fe_Hyundai/assets/images/pricing7-1.jpg') }}"
                                alt=""></figure>
                        <figure class="image-2"><img src="{{ asset('Fe_Hyundai/assets/images/pricing7-2.jpg') }}"
                                alt=""></figure>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="boxcar-title wow fadeInUp">
                            <h2>Nhận giá tốt cho xe của bạn - Nhận ngay hôm nay</h2>
                            <div class="text">Chúng tôi cam kết mang đến cho khách hàng dịch vụ xuất sắc, giá cả cạnh
                                tranh và đa dạng các lựa chọn.</div>
                        </div>
                        <ul class="list-style-one wow fadeInUp" data-wow-delay="100ms">
                            <li><i class="fa-solid fa-check"></i>Chúng tôi là nhà cung cấp lớn nhất tại Hải Phòng,</li>
                            <li><i class="fa-solid fa-check"></i>Bạn sẽ nhận được hỗ trợ cứu hộ 24/7 bên đường.</li>
                            <li><i class="fa-solid fa-check"></i>Chúng tôi sửa chữa được 4 trong 5 xe ngay tại hiện
                                trường.</li>
                        </ul>
                        <a href="#" class="read-more wow fadeInUp" data-wow-delay="200ms">Liên hệ với chúng
                            tôi<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <g clip-path="url(#clip0_634_2156)">
                                    <path
                                        d="M13.6106 0H5.05509C4.84013 0 4.66619 0.173943 4.66619 0.388901C4.66619 0.603859 4.84013 0.777802 5.05509 0.777802H12.6719L0.113453 13.3362C-0.0384687 13.4881 -0.0384687 13.7342 0.113453 13.8861C0.189396 13.962 0.288927 14 0.388422 14C0.487917 14 0.587411 13.962 0.663391 13.8861L13.2218 1.3277V8.94447C13.2218 9.15943 13.3957 9.33337 13.6107 9.33337C13.8256 9.33337 13.9996 9.15943 13.9996 8.94447V0.388901C13.9995 0.173943 13.8256 0 13.6106 0Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_634_2156">
                                        <rect width="14" height="14" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='hyundai-hai-phong-trien-khai-chuong-trinh-uu-dai-thang-1-cho-khach-hang/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/01/1920-x-1080-300x169.png"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Hải Phòng triển khai chương trình ưu đãi tháng 1 cho khách hàng"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="hyundai-hai-phong-trien-khai-chuong-trinh-uu-dai-thang-1-cho-khach-hang/index.html">Hyundai
                        Hải Phòng triển khai chương trình ưu đãi tháng 1 cho khách hàng</a></h3>
                <p class="from_the_blog_excerpt">Từ nay cho đến hết 31/01/2024, Liên doanh ô tô
                    Hyundai Hải Phòng chính thức triển khai chương... </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end new promotion -->
<!-- new promotion Service -->
<div class="container">
    <div class="row">
        <div class="box-header box-header-promotions">
            <h3 class="section-title section-title-center"><span class="section-title-main2">khuyến
                    mãi Dịch Vụ</span></h3>
        </div>
        <div class="colored-separator text-center style_1">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
            <div class="first-long stm-base-background-color"></div>
        </div>
    </div>
    <div class="row new-home">
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5-500x333.jpg"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Hyundai Accent tiếp tục là mẫu xe được ưa chuộng"></a></div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/index.html">Hyundai
                        Accent tiếp tục là mẫu xe được ưa chuộng</a></h3>
                <p class="from_the_blog_excerpt">Hyundai Accent tiếp tục là mẫu xe có số lượng bán
                    hàng tốt nhất tháng 8 với 937 xe, nâng... </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='o-to-lap-rap-trong-nuoc-sap-duoc-giam-phi-truoc-ba-trong-3-thang/index.html'><img
                        class="loading lazy"
                        data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/08/add-473x333.jpg"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="Ô tô lắp ráp trong nước sắp được giảm phí trước bạ trong 3 tháng"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="o-to-lap-rap-trong-nuoc-sap-duoc-giam-phi-truoc-ba-trong-3-thang/index.html">Ô
                        tô lắp ráp trong nước sắp được giảm phí trước bạ trong 3 tháng</a></h3>
                <p class="from_the_blog_excerpt">Chính sách giảm 50% phí trước bạ cho ô tô sản xuất
                    và lắp ráp trong nước sẽ có hiệu... </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- End Fun Fact Section-->

    <!-- boxcar-testimonial-section-four -->
    <section class="boxcar-testimonial-section-four v7">
        <div class="boxcar-container">
            <div class="right-box">
                <div class="boxcar-title">
                    <h2>Khách hàng nói gì về chúng tôi</h2>
                    <div class="text">Được đánh giá 4.7 / 5 dựa trên 28.370 đánh giá Hiển thị các đánh giá 4 và 5 sao
                        của chúng tôi</div>
                </div>
                <div class="row stories-slider">
                    <!-- testimonial-block-four -->
                    <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="icon"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/comas.png') }}" alt=""></a>
                            </figure>
                            <h6 class="title">Tốt</h6>
                            <div class="text"> "Dịch vụ chăm sóc khách hàng tuyệt vời! Tôi đã có trải nghiệm mua xe suôn
                                sẻ và nhanh chóng tại Hyundai Hải Phòng."</div>
                            <div class="auther-info">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/test-auther-1.jpg') }}"
                                            alt=""></a></figure>
                                <h6 class="name">Hoàng Thúy Vân</h6>
                                <span>Hải Phòng</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial-block-four -->
                    <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="icon"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/comas.png') }}"alt=""></a></figure>
                            <h6 class="title">Tuyệt Vời</h6>
                            <div class="text"> "Xe chất lượng, giá cả hợp lý. Tôi rất hài lòng với chiếc Hyundai mới mua
                                từ đại lý này."</div>
                            <div class="auther-info">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/test-auther-2.jpg') }}"
                                            alt=""></a></figure>
                                <h6 class="name">Mai Anh Khôi</h6>
                                <span>Quảng Ninh</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial-block-four -->
                    <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="icon"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/comas.png') }}" alt=""></a>
                            </figure>
                            <h6 class="title">Giá cả hợp lý</h6>
                            <div class="text"> "Đội ngũ nhân viên nhiệt tình, tư vấn rõ ràng và hỗ trợ mọi thắc mắc của
                                khách hàng. Hyundai Hải Phòng thực sự là một nơi đáng tin cậy."</div>
                            <div class="auther-info">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/test-auther-3.jpg') }}"
                                            alt=""></a></figure>
                                <h6 class="name">Trương Văn Thanh</h6>
                                <span>Hải Phòng</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial-block-four -->
                    <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="icon"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/comas.png') }}"alt=""></a></figure>
                            <h6 class="title">Chất Lượng Cao</h6>
                            <div class="text"> "Quy trình mua xe nhanh gọn, giá cả minh bạch. Tôi rất ấn tượng với dịch
                                vụ của Hyundai Hải Phòng."</div>
                            <div class="auther-info">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/test-auther-1.jpg') }}"
                                            alt=""></a></figure>
                                <h6 class="name">Nguyễn Văn Sơn</h6>
                                <span>Hải Phòng</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial-block-four -->
                    <div class="testimonial-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="icon"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/comas.png') }}"alt=""></a></figure>
                            <h6 class="title">Dịch vụ tuyệt vời</h6>
                            <div class="text"> "Hyundai Hải Phòng mang đến cho tôi sự yên tâm với dịch vụ bảo hành và
                                bảo dưỡng chuyên nghiệp."</div>
                            <div class="auther-info">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/test-auther-2.jpg') }}"
                                            alt=""></a></figure>
                                <h6 class="name">Trần Thành Đạt</h6>
                                <span>Hải Phòng</span>
                            </div>
                            <div class="col-md-9">
                                <div class="author-title">
                                    Hyundai Hải Phòng - Đại Lý Hyundai Miền Bắc
                                </div>
                                <p>
                                    <b>GIÁ ƯU ĐÃI - GIAO XE SỚM:</b> Chúng tôi luôn cam kết mang lại
                                    mức giá
                                    ưu đãi nhất cho quý khách với thời gian giao xe nhanh nhất.
                                </p>
                                <p>
                                    <b>KHUYẾN MÃI NHIỀU NHẤT:</b> Với hoạt động bán hàng sôi động,
                                    chúng tôi
                                    luôn cập nhật sớm nhất các chương trình khuyến mãi của hãng và
                                    đại lý.
                                </p>
                                <p>
                                    <b>CHƯƠNG TRÌNH TÀI CHÍNH - VAY XE TRẢ GÓP:</b> Hỗ trợ mua xe
                                    trả góp
                                    lãi suất thấp &amp; tối ưu tài chính.
                                </p>
                                <p>
                                    <b>BẢO HÀNH TIÊU CHUẨN CHẤT LƯỢNG TOÀN CẦU:</b> Quý khách hãy
                                    yên tâm về
                                    xe Hyundai mua ở Hyundai Hải Phòng, vì chúng tôi bảo hành, bảo
                                    dưỡng và
                                    sửa chữa theo tiêu chuẩn chất lượng của Hyundai trên toàn cầu
                                    cùng với
                                    hệ thống máy móc thiết bị tiên tiến được nhập khẩu. Chúng tôi
                                    tin sẽ
                                    mang lại sự tận tâm về chất lượng và trải nghiệm dịch vụ sau bán
                                    hàng.
                                </p>
                                <p>
                                    <b>LÁI THỬ TẬN NHÀ:</b> Giúp quý khách nhanh chóng trải nghiệm
                                    xe
                                    Hyundai mà không tốn thời gian.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End boxcar-testimonial-section-four -->


    <!-- calculater-section -->
    <section class="calculater-section pt-0 v2">
        <div class="boxcar-container">
            <div class="right-box">
                <div class="row">
                    <div class="col-lg-6 image-column">
                        <div class="image-box">
                            <img src="{{ asset('Fe_Hyundai/assets/images/loan-img.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 content-column">
                        <div class="inner-column">
                            <div class="boxcar-title white">
                                <h2>Điền thông tin của bạn dưới đây</h2>
                                <p>Chúng Tôi Sẽ Gọi Cho Bạn Ngay Tư Vấn Cho Bạn Liền </p>
                            </div>
                            <form class="row">
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Mẫu xe cần tư vấn </label>
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>45$</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>$45</li>
                                                <li>$50</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-content">
                                    <div class="why-content-1">Thương Hiệu Uy Tín</div>
                                    <div class="why-content-2">Là đại lý Hyundai Lâu đời với sự phát triển có
                                        chiều
                                        sâu, Hyundai Hải Phòng luôn là thương hiệu Hyundai hàng đầu tại Hải
                                        Phòng
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 40px;">
                            <div class="why-list">
                                <div class="why-icon-wrapp">
                                    <div class="why-icon-content">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="why-content">
                                    <div class="why-content-1">Cơ sở vật chất</div>
                                    <div class="why-content-2">Showroom trưng bày xe đa dạng và phong phú. Hệ
                                        thống
                                        kho bãi rộng rãi, đầy đủ các dòng xe có sẵn để quý khách lựa chọn và lái
                                        thử.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-list">
                                <div class="why-icon-wrapp">
                                    <div class="why-icon-content">
                                        <i class="fa fa-diamond" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End calculater-section -->

    <!-- blog section -->
    <section class="blog-section">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Khuyến mãi bán hàng</h2>
            </div>
            <div class="row">
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/blog-1.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">news</span>
                        </div>
                        <div class="col-md-6">
                            <div class="why-list">
                                <div class="why-icon-wrapp">
                                    <div class="why-icon-content">
                                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="why-content">
                                    <div class="why-content-1">Dịch vụ tận tâm</div>
                                    <div class="why-content-2">Trân trọng từng khách hàng và luôn nỗ lực mang
                                        đến
                                        những sản phẩm, dịch vụ đáp ứng tốt nhất nhu cầu của khách hàng.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-section -->
    <!-- blog section -->
    <section class="blog-section">
        <div class="boxcar-container">
            <div class="boxcar-title wow fadeInUp">
                <h2>Khuyến mãi dịch vụ</h2>
            </div>
            <div class="row">
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/blog-1.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/blog-2.jpg') }} "alt=""></a></figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
                <!-- blog-block -->
                <div class="blog-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <figure class="image"><a href="#"><img
                                        src="{{ asset('Fe_Hyundai/assets/images/blog-3.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">news</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>Ali Tufan</li>
                                <li>April 20, 2023</li>
                            </ul>
                            <h6 class="title"><a href="blog-single.html" title="">This Long-Awaited Technology
                                    May Finally Change the World</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-section -->
@endsection
