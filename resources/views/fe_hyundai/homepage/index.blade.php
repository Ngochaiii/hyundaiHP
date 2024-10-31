@extends('layouts.tempateHyundai')
@section('content')
<div class="container">
    <div class="box-header box-header-cus">
        <h3 class="text-center home-product"><span>Sản Phẩm</span></h3>
    </div>
    <div class="row ">
        @foreach($products as $key => $product)
        <div class="col-md-3 col-sm-6 col-xs-12 car-home ">
            <div class="cover"><a href='{{ route('product.detail', $product->alias) }}'><img style="height:130px; !important;" class="loading lazy"
                        data-src="{{ $product->getImage() }}"
                        src="{{ $product->getImage() }}"
                        alt="{{$product->title}}"></a></div>
            <div class="car-home-detail">
                <p class="title"><a href="{{ route('product.detail', $product->alias) }}">{{ $product->title }}</a></p>
                <ul class="list-unstyled list-inline">
                    <li class="price">Giá xe {{ $product->price }} Triệu</li>
                    <li class="plus"><a href="{{ route('product.detail', $product->alias) }}">Xem chi tiết</a></li>
                </ul>
            </div>
            <div class="clearfix visible-xs-block"></div>
        </div>
        @endforeach
    </div>
</div>
<!-- new promotion -->
@include('fe_hyundai.homepage.promo')
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

        @include('fe_hyundai.homepage.location')
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
        @foreach($sale_promotions as $sale_promotion)
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='{{ route('news.detail', $sale_promotion->alias) }}'><img
                        class="loading lazy"
                        data-src="{{ $sale_promotion->images }}"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="{{ $sale_promotion->description }}"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="{{ route('news.detail', $sale_promotion->alias) }}">{{ $sale_promotion->title }}</a>
                </h3>
                <p class="from_the_blog_excerpt news-description">{{ $sale_promotion->description }} </p>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
</div>
<!-- end new promotion -->
<div class="container">
    <div class="row">
        @include('fe_hyundai.homepage.service')
    </div>
</div>
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
        @foreach($service_promotions as $service_promotion)
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='{{ route('news.detail', $service_promotion->alias) }}'><img
                        class="loading lazy"
                        data-src="{{ $service_promotion->images }}"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="{{ $service_promotion->description }}"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="{{ route('news.detail', $service_promotion->alias) }}">{{ $service_promotion->title }}</a>
                </h3>
                <p class="from_the_blog_excerpt news-description">{{ $service_promotion->description }} </p>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
</div>
<!-- end new promotion Service-->
<!-- new promotion -->
<div class="container">
    <div class="row">
        <div class="box-header box-header-promotions">
            <h3 class="section-title section-title-center"><span class="section-title-main2">Tin Tức
                    Hyundai Hải Phòng</span></h3>
        </div>
        <div class="colored-separator text-center style_1">
            <div class="first-long stm-base-background-color"></div>
            <div class="last-short stm-base-background-color"></div>
            <div class="first-long stm-base-background-color"></div>
        </div>
    </div>
    <div class="row new-home">
        @foreach($news as $new)
        <div class="col-md-3 col-xs-6 dn-post dn-post-spr">
            <div class="cover"><a
                    href='{{ route('news.detail', $new->alias) }}'><img
                        class="loading lazy"
                        data-src="{{ $new->images }}"
                        src="wp-content/themes/hyundaihaiphong/includes/img/pixel.gif"
                        alt="{{ $new->description }}"></a>
            </div>
            <div class="dn-post-detail">
                <h3 class="title"><a
                        href="{{ route('news.detail', $new->alias) }}">{{ $new->title }}</a>
                </h3>
                <p class="from_the_blog_excerpt news-description">{{ $new->description }} </p>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
</div>
<!-- end new promotion -->
<!-- about Hải Phòng -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="about-ngocan">
                <div class="ad-wrapper">
                    <div class="el-xoay">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="img-author">
                                    <img src="wp-content/uploads/2022/03/Dai-dien-kinh-doanh.jpg"
                                        width="100%">
                                </div>
                                <div class="ngocan-info">
                                    <b>Hotline Hải Phòng<br>
                                        <a class="holine-home" href="tel:0906026299">0906 026
                                            299</a></b>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="author-title">
                                    Hyundai Hải Phòng - Đại Lý Hyundai Miền Bắc
                                </div>
                                <p>
                                    <b>GIÁ ƯU ĐÃI - GIAO XE SỚM:</b> Chúng tôi luôn cam kết mang lại
                                    mức giá
                                    ưu đãi nhất cho quý khách với thời gian
                                    giao xe nhanh nhất.
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
    </div>

</div>
<!-- end About Hải Phòng -->
<section class="section_why">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="promo-section">
                    <h4 class="special-head">Tại sao lại chọn chúng tôi</h4>
                </div>
                <div class="why-description">Với mục tiêu trở thành đại lý Hyundai hàng đầu tại Hải Phòng chúng
                    cam
                    kết cung cấp cho khách hàng sản phẩm và dịch vụ chất lượng chuẩn mực của Hyundai toàn cầu
                    <p class="why-link">
                        <a href="#test-drive" data-toggle="modal" data-target="#lai_thu">Về chúng tôi</a> / <a
                            style="color: #FF7911;" href="dang-ky-lai-thu/index.html">Đăng ký lái thử</a>
                    </p>
                </div>
                <div class="why-item-wrapper">
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 40px;">
                            <div class="why-list">
                                <div class="why-icon-wrapp">
                                    <div class="why-icon-content">
                                        <i class="fa fa-star" aria-hidden="true"></i>
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
                                <div class="why-content">
                                    <div class="why-content-1">HẬU MÃI CAO</div>
                                    <div class="why-content-2">Bảo hành chính hãng theo tiêu chuẩn cao nhất
                                        trong
                                        khu vực. Hỗ trợ đăng ký, đăng kiểm, giao xe tận nhà. Đặc biệt có chỗ
                                        nghỉ
                                        ngơi, cho khách ở xa.</div>
                                </div>
                            </div>
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
            <div class="col-md-5 imge-whychooseus">
                <div class="why-img-box">
                    <div class="why-img-content">
                        <img src="wp-content/uploads/2022/03/dai-ly-hyundai-hai-phong-2.jpg">
                        <img src="wp-content/uploads/2022/03/dai-ly-hyundai-hai-phong-1.jpg"
                            style="display: block; margin-top: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('fe_hyundai.homepage.popup')
<style>
      .news-description {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Số dòng muốn hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.5em; /* Điều chỉnh khoảng cách dòng */
        max-height: 4.5em; /* line-height * số dòng */
    }
    </style>
@endsection
