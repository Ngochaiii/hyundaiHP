@extends('layouts.default_template_hyundai')

@section('content')
    <div id="content" class="site-content">
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var toggler = '.navbar-toggle',
                    pagewrapper = '#page-content',
                    navigationwrapper = '.navbar-header',
                    menuwidth = '100%',
                    slidewidth = '280px',
                    menuneg = '-100%',
                    slideneg = '-280px';
                $("#slide-nav").on("click", toggler, function(e) {
                    var selected = $(this).hasClass('slide-active');
                    $('#slidemenu').stop().animate({
                        left: selected ? menuneg : '0px'
                    });
                    $('#navbar-height-col').stop().animate({
                        left: selected ? slideneg : '0px'
                    });
                    $(pagewrapper).stop().animate({
                        left: selected ? '0px' : slidewidth
                    });
                    $('.uix_panelMask').css({
                        'visibility': selected ? 'hidden' : 'visible',
                        'opacity': selected ? '0' : '.3',
                    });
                    $('body').css({
                        'position': selected ? 'static' : 'relative'
                    });
                    $(this).toggleClass('slide-active', !selected);
                    $('#slidemenu').toggleClass('slide-active');
                    $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active')
                });
                var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';
                var menu_click = function() {
                    if ($(window).width() < 768) {
                        $('.menu-item-has-children').addClass('mobile-menu')
                    } else {
                        $('.menu-item-has-children').removeClass('mobile-menu')
                    }
                    $('.mobile-menu').click(function(e) {
                        $this = $(this);
                        var state = $('> .sub-menu', $this).hasClass('add-menu-mobile');
                        $('.sub-menu').removeClass("add-menu-mobile");
                        $('> .sub-menu', $this).toggleClass('add-menu-mobile', !state)
                    })
                }
                if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                    $(selected).removeClass('slide-active');
                    $('.uix_panelMask').css({
                        'visibility': selected ? 'hidden' : 'visible',
                        'opacity': selected ? '0' : '.3',
                    })
                }
                window.onresize = function(event) {
                    if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                        $(selected).removeClass('slide-active');
                        $('.uix_panelMask').css({
                            'visibility': selected ? 'hidden' : 'visible',
                            'opacity': selected ? '0' : '.3',
                        })
                    }
                }
                menu_click();
                $('.close-menu').click(function() {
                    $(".navbar-toggle").trigger("click")
                })
                $('.uix_panelMask').click(function() {
                    $(".navbar-toggle").trigger("click")
                })
                $('.sub-menu ').append('<div class="clearfix"></div>')
            })
        </script>
        <div class="container content-single entry-content content-slider">
            <div class="row">
                <div class="col-md-12" id="info">
                    <div class="col-md-6 mar-mobile">
                        <div class="outer">
                            <div id="big" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-1-2.png') }}"
                                        alt="" class="image-big" style="object-fit:cover" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-2-1.png') }}"
                                        alt="" class="image-big" style="object-fit:cover" />
                                </div>
                                <div class="item">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong.png') }}"
                                        alt="" class="image-big" style="object-fit:cover" />
                                </div>
                            </div>
                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item item-thumb-1">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-1-2-300x152.png') }}"
                                        alt="" />
                                </div>
                                <div class="item item-thumb-2">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-2-1-300x114.png') }}"
                                        alt="" />
                                </div>
                                <div class="item item-thumb-3">
                                    <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-300x114.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mar-mobile">
                        <div class="content-single-detail">
                            <div class="car-version-right-box">
                                <div>
                                    <div class="car-version-right-box-left">
                                        <h1 class="title entry-title car-title">Hyundai IONIQ 5</h1>
                                        <p class="car-price-top">Giá xe:<span class="price-all-single price-title"
                                                data-price='1300000000'> 1,300,000,000</span></p>
                                        <div class="color-car-top">
                                            <div class="color-text">Màu Sắc:</div>
                                            <div class="lable-car item-color" data-item-car="0">
                                                <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-1-2-300x152.png') }}"
                                                    alt="" />
                                                <span class="name-car-lable"></span>
                                                <span class="check"><img
                                                        src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/select-pro.png') }}" /></span>
                                            </div>
                                            <div class="lable-car item-color" data-item-car="1">
                                                <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-2-1-300x114.png') }}"
                                                    alt="" />
                                                <span class="name-car-lable"></span>
                                                <span class="check"><img
                                                        src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/select-pro.png') }}" /></span>
                                            </div>
                                            <div class="lable-car item-color" data-item-car="2">
                                                <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/tai-xuong-300x114.png') }}"
                                                    alt="" />
                                                <span class="name-car-lable"></span>
                                                <span class="check"><img
                                                        src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/select-pro.png') }}" /></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="car-line-parameter car-version-parameter">
                                            <p><span>Kiểu dáng :</span>SUV</p>
                                            <p><span>Kích thước :</span>4635 x 1890 x 1650</p>
                                            <p><span>Hộp số :</span>Động cơ điện</p>
                                            <p><span>Nhiên liệu :</span>Điện</p>
                                        </div>
                                        <div class="car-version-btn">
                                            <a class="button btn-car btn-yeu-cau-bao-gia" data-toggle="modal"
                                                data-target="#bao_gia">Nhận báo giá</a>
                                            <a href="tel:0906026299" class="button btn-car btn-tu-van-tra-gop">Gọi
                                                Ngay</a>
                                            <a class="button btn-car btn-yeu-cau-bao-gia btn-test-drive" data-toggle="modal"
                                                data-target="#bao_gia">Đăng ký lái thử</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content-single-product">
                <div class="detail-product-single">
                    <div class="row">
                        <div class="col-t-sgp col-md-10">
                            <div id="detail_product">
                                <div class="product-single-title">
                                    <h2 class="title entry-title tit-na">Đánh giá chi tiết</h2>
                                </div>
                                <div>
                                    <h4>Giá bán của Hyundai IONIQ5 tại Đại lý Hyundai Hải Phòng</h4>
                                    <table style="height: 123px;" width="849">
                                        <tbody>
                                            <tr>
                                                <td width="140"><strong>Phiên bản</strong></td>
                                                <td width="140"><strong>Giá xe IONIQ 5 (đã bao gồm thuế
                                                        VAT):</strong></td>
                                            </tr>
                                            <tr>
                                                <td width="140">Hyundai IONIQ 5 Prestige</td>
                                                <td width="140">1,45 tỷ đồng</td>
                                            </tr>
                                            <tr>
                                                <td width="140">Hyundai IONIQ 5 Exclusive</td>
                                                <td width="140">1,3 tỷ đồng</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="container_info" class="container-car ">
                                    <div class="product-detail">
                                        <div class="container-primary">
                                            <div class="text_play">
                                                <div class="text1">IONIQ 5 đạt giải xe của năm 2022</div>
                                                <p><img style="margin:auto;" class="img-responsive"
                                                        src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-80.jpg') }}"
                                                        alt="Hyundai IONIQ5"></p>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">IONIQ 5 - Xe thế giới của năm và nhiều hơn thế
                                                    nữa</div>
                                                <div class="text2">IONIQ 5 được đón nhận trên toàn cầu với thiết kế
                                                    độc đáo, công nghệ và trải nghiệm khác biệt của thế hệ xe EV mới
                                                </div>
                                            </div>
                                            <div id="product_sugget" class="product-related slider-car-vh">
                                                <div class="owl-related-vh owl-carousel owl-theme">
                                                    <div class="item">
                                                        <img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-81.jpg') }}"
                                                            style="margin:auto" alt="Hyundai IONIQ5"
                                                            class="img-responsive" />
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-82.jpg') }}"
                                                            style="margin:auto" alt="Hyundai IONIQ5"
                                                            class="img-responsive" />
                                                    </div>
                                                    <div class="item">
                                                        <img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-83.jpg') }}"
                                                            style="margin:auto" alt="Hyundai IONIQ5"
                                                            class="img-responsive" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-84.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Vehicle to Load (V2L).</strong>
                                                    </p>
                                                    <p>Công nghệ V2L cho phép IONIQ 5 hoạt động như một nguồn cấp
                                                        điện lên đến 3,6 kW cho các thiết bị điện tử, tăng đáng kể
                                                        sự tiện lợi và thoải mái cho bạn khi di chuyển và trải
                                                        nghiệm</p>
                                                </div>
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-85.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Nội thất thân thiện với môi
                                                            trường</strong></p>
                                                    <p>Các nhà thiết kế đã giải quyết những lo ngại liên quan đến
                                                        tác động xấu môi trường thông qua việc IONIQ 5 sử dụng các
                                                        vật liệu có nguồn gốc bền vững và thân thiện với môi trường.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="title-info">
                                                <h4 class="reset">Thư Viện</h4>
                                            </div>
                                            <!--slide internal -->
                                            <div class="car-slide-private">
                                                <div class="car-version-slider">
                                                    <div class="car-version-slider-list owl-carousel owl-theme">
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-78-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-72-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-74-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-75-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-76-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-79-1024x549-1-770x413.jpg') }}"
                                                                alt="" class="image-big-cus"
                                                                style="object-fit:cover" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="car-version-thumb">
                                                    <div id="thumbsitn"
                                                        class="car-version-thumb-list owl-carousel owl-theme">
                                                        <div class="item itemthumbitn" data-item-itn="0">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-78-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                        <div class="item itemthumbitn" data-item-itn="1">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-72-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                        <div class="item itemthumbitn" data-item-itn="2">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-74-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                        <div class="item itemthumbitn" data-item-itn="3">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-75-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                        <div class="item itemthumbitn" data-item-itn="4">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-76-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                        <div class="item itemthumbitn" data-item-itn="5">
                                                            <img src="{{ asset('Fe_Hyundai/wp-content/uploads/2023/09/Xe-dien-Hyundai-Iomiq-5-79-1024x549-1-555x298.jpg') }}"
                                                                alt="" class="img-thumb-cus" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end slide internal -->
                                            <div class="title-info">
                                                <h4 class="reset">Ngoại Thất</h4>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Vẻ đẹp của ngôn ngữ thiết kế "Parametric Pixel"
                                                </div>
                                                <div class="text2">Phong cách thiết kế "Parametric Pixel" trên IONIQ
                                                    5 kết hợp các sắc thái pixel và kỹ thuật số để tạo ra tính thẩm
                                                    mỹ độc đáo và vượt thời gian.</div>
                                                <p><img style="margin:auto;" class="img-responsive"
                                                        src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-78.jpg') }}"
                                                        alt="Hyundai IONIQ5"></p>
                                            </div>
                                            <div class="item-pc" style="margin-bottom: 20px;">
                                                <div class="img"><img class="bgCenter responsive-image img-responsive"
                                                        src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-56.jpg') }}"
                                                        alt="Hyundai IONIQ5"></div>
                                                <div class="info">
                                                    <h3 class="subTit" style="word-wrap: break-word;">Mặt trước</h3>
                                                </div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-54.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Đèn chiếu sáng thiết kế "Parametric Pixel"
                                                    </p>
                                                </div>
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-51.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Mui xe dạng vỏ sò</p>
                                                </div>
                                            </div>
                                            <div class="item-pc" style="margin-bottom: 20px;">
                                                <div class="img"><img class="bgCenter responsive-image img-responsive"
                                                        src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-57.jpg') }}"
                                                        alt="Hyundai IONIQ5"></div>
                                                <div class="info">
                                                    <h3 class="subTit" style="word-wrap: break-word;">Mặt bên</h3>
                                                </div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-53.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Cổng sạc ẩn</p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-52.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Tay nắm cửa dạng ẩn</p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-50.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Vành xe 20 inch</p>
                                                </div>
                                            </div>

                                            <div class="item-pc" style="margin-bottom: 20px;">
                                                <div class="img"><img class="bgCenter responsive-image img-responsive"
                                                        src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-55.jpg') }}"
                                                        alt="Hyundai IONIQ5"></div>
                                                <div class="info">
                                                    <h3 class="subTit" style="word-wrap: break-word;">Mặt sau</h3>
                                                </div>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Cụm đèn hậu LED thiết kế "Parametric Pixel" độc
                                                    đáo</div>
                                            </div>
                                            <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-49.jpg') }}"
                                                    style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                            </p>
                                            <div class="title-info">
                                                <h4 class="reset">Nội Thất</h4>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Nội thất rộng rãi và có thể tùy chỉnh</div>
                                                <div class="text2">Nền tảng khung gầm mới E-GMP (Electric-Global
                                                    Modular Platform) giúp tối đa hóa không gian nội thất. Nó không
                                                    chỉ là một phương tiện giao thông, mà nó còn thay đổi lối sống
                                                    của bạn.</div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-40.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Thân thiện với thiên nhiên cho cuộc sống bền
                                                    vững.</div>
                                                <div class="text2">Cabin được xây dựng hoàn toàn bằng vật liệu thân
                                                    thiện với môi trường để thúc đẩy cuộc sống bền vững. Đây là
                                                    những bộ phận độc đáo chỉ có trên IONIQ 5.</div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-64.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Các vật liệu từ lớp lót và vải thảm được
                                                        tạo nên từ các thành phần sinh học chiết xuất từ mía và ngô.
                                                        Ghế ngồi và tay vịn cửa cũng sử dụng vải làm từ chai PET tái
                                                        chế.p</p>
                                                </div>
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-63.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Các thành phần da ghế được nhuộm bằng dầu
                                                        hạt lanh, được xử lý hoàn toàn thân thiện với môi trường.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Sự rộng rãi của IONIQ 5</div>
                                                <div class="text2">Tận hưởng tiện nghi cao cấp vơi ghế thư giãn cho
                                                    người lái có thể ngả hoàn toàn ở phía trước. Ghế ngả theo góc
                                                    tối ưu, mang lại cảm giác không trọng lượng cho người ngồi.
                                                </div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-65.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>
                                            <div class="title-info">
                                                <h4 class="reset">Vận Hành</h4>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Hiệu suất mạnh mẽ</div>
                                                <div class="text2">Tận hưởng trải nghiệm lái xe tuyệt vời với IONIQ
                                                    5 được trang bị đầy đủ công nghệ thông minh tiên tiến.</div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-69.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-67.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Nút bấm chế độ lái</p>
                                                </div>
                                                <div class="box-img col-sm-6">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-66.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center">Cần số điện tử dạng núm xoay</p>
                                                </div>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Nền tảng E-GMP</div>
                                                <div class="text2">Nền tảng khung gầm độc quyền cho thế hệ EV hoàn
                                                    toàn mới. E-GMP mang đến thiết kế sáng tạo, cho phép sạc nhanh
                                                    hơn, tăng phạm vi lái xe và nhiều không gian nội thất hơn.</div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-60.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>

                                            <div class="title-info">
                                                <h4 class="reset">An Toàn</h4>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Hyundai SmartSense</div>
                                                <div class="text2">An toàn và vui vẻ hơn với tính năng ga tự động
                                                    thích ứng Smart Cruise Control</div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-46.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-45.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hỗ trợ phòng tránh tai nạn khi rời
                                                            khỏi xe SEA</strong></p>
                                                    <p>Cảm biến sẽ tự động khóa cửa sau nếu phát hiện có vật thể di
                                                        chuyển tiếp cận từ phía sau khi cửa sắp mở.</p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-41.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hỗ trợ giữ và duy trì làn đương
                                                            (LKA & LFA)</strong></p>
                                                    <p>Sử dụng camera phía trước để theo dõi vạch kẻ đường. Trong
                                                        trường hợp chệch làn đường ngoài ý muốn, hệ thống sẽ cảnh
                                                        báo bạn và có thể hỗ trợ đánh lái để đưa xe đi lại đúng làn
                                                        đường</p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-62.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hỗ trợ phòng tránh va chạm phía
                                                            trước FCA</strong></p>
                                                    <p>Phân tích dữ liệu từ camera và radar phía trước. Nếu dự đoán
                                                        được sắp có va chạm với xe, người đi bộ, xe đạp, hệ thống
                                                        cánh bảo và phanh tự động sẽ giúp người lái phòng tránh va
                                                        chạm và tai nạn</p>
                                                </div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-39.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Camera 360</strong></p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-44.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hỗ trợ phòng tránh va chạm khi lùi
                                                            xe</strong></p>
                                                    <p>Khi lùi xe, nếu tiềm ẩn nguy hiểm va chạm phía hông xe từ bên
                                                        trái hoặc bên phải, hệ thống sẽ đưa ra cảnh báo. Nếu sau tín
                                                        hiệu cảnh báo, nguy hiểm gia tăng, hệ thống sẽ hỗ trợ phanh.
                                                    </p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-58.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hỗ trợ phòng tránh va chạm điểm mù
                                                            BCA</strong></p>
                                                    <p>Khi có tín hiệu chuyển làn, nếu tiềm ẩn nguy hiểm va chạm
                                                        phía hông xe, hệ thống sẽ đưa ra cảnh báo. Nếu sau tín hiệu
                                                        cảnh báo, nguy hiểm gia tăng, hệ thống sẽ kiểm soát để phòng
                                                        tránh va chạm.</p>
                                                </div>
                                            </div>

                                            <div class="title-info">
                                                <h4 class="reset">Tiện Nghi</h4>
                                            </div>
                                            <div class="text_play">
                                                <div class="text1">Tính năng & công nghệ tiên tiến.</div>
                                                <div class="text2">Tận hưởng nhiều tính năng cao cấp của IONIQ 5 với
                                                    công nghệ cao mới nhất mang đến sự thoải mái giúp nâng niu hành
                                                    khách từng điểm chạm</div>
                                                <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-68.jpg') }}"
                                                        style="margin:auto" alt="Hyundai IONIQ5" class="img-responsive">
                                                </p>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-61.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Cụm Console có thể trượt</strong>
                                                    </p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-42.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Hệ thống Loa Bose Cao cấp</strong>
                                                    </p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-70.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Cửa sổ trời toàn cảnh</strong></p>
                                                </div>
                                            </div>
                                            <div class="row margintb">
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-59.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Điều hòa tự động 2 vùng độc
                                                            lậpt</strong></p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-47.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Sạc không dây</strong></p>
                                                </div>
                                                <div class="box-img col-sm-4">
                                                    <p><img src="{{ asset('Fe_Hyundai/hyundai-quangnam.com.vn/wp-content/uploads/2023/08/Xe-dien-Hyundai-Iomiq-5-43.jpg') }}"
                                                            alt="Hyundai IONIQ5"></p>
                                                    <p class="acc-center"><strong>Cụm màn hình đôi kích thước
                                                            12.3"</strong></p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .product-detail {
                                        margin: 30px 0;
                                    }

                                    .title-info {
                                        border-bottom: 2px solid #0071bc;
                                        height: 40px;
                                        margin: 15px 0;
                                    }

                                    .title-info h4 {
                                        background-color: #0071bc;
                                        padding: 8px 18px;
                                        float: left;
                                        color: #fff;
                                        width: auto;
                                        margin-top: 0;
                                    }

                                    .text_play {
                                        margin: 20px 0;
                                    }

                                    .text1 {
                                        color: #222;
                                        font-size: 24px;
                                        text-transform: uppercase;
                                        text-align: center;
                                        font-weight: bold;
                                    }

                                    .text2 {
                                        text-align: center;
                                        color: #5a5a5a;
                                    }

                                    .acc-center {
                                        text-align: center;
                                    }

                                    .item-pc {
                                        position: relative;
                                        text-align: center;
                                    }

                                    .item-pc .info {
                                        position: absolute;
                                        top: 50%;
                                        left: 0;
                                        width: 100%;
                                    }

                                    .item-pc .info .subTit {
                                        color: #fff;
                                    }

                                    .item-pc .info .conArea {
                                        color: #fff;
                                        margin-top: 10px;
                                        font-size: 20px;
                                        line-height: 28px;
                                    }

                                    @media (max-width: 650px) {
                                        .item-pc .info {
                                            margin-top: 20px;
                                            position: relative;
                                        }

                                        .item-pc .info .subTit {
                                            color: #000;
                                        }

                                        .item-pc .info .conArea {
                                            color: #5a5a5a;
                                        }

                                        .text1 {
                                            font-size: 18px;
                                        }

                                        .image-big {
                                            height: 200px !important;
                                        }
                                    }

                                    @media (max-width: 650px) {
                                        .image-big-cus {
                                            height: 250px !important;
                                            object-fit: cover;
                                        }

                                        .slider-car-vh .owl-stage-outer .item img {
                                            height: 250px !important;
                                            object-fit: cover;
                                        }

                                        .image-big-cus {}
                                    }

                                    .car-version-thumb .owl-theme .owl-controls .owl-next,
                                    .car-version-thumb .owl-theme .owl-controls .owl-prev {
                                        width: 35px;
                                        height: 50px;
                                        background-color: rgba(0, 0, 0, .3) !important;
                                        position: absolute;
                                        top: calc(50% - 17.5px);
                                        right: 0;
                                        z-index: 20;
                                    }

                                    .car-version-slider .owl-theme .owl-controls .owl-next,
                                    .car-version-slider .owl-theme .owl-controls .owl-prev {
                                        width: 40px;
                                        height: 60px;
                                        background-color: rgb(0 0 0 / 51%) !important;
                                        position: absolute;
                                        top: calc(50% - 17.5px);
                                        right: 0;
                                        z-index: 20;
                                        margin: 0;
                                    }

                                    .slider-car-vh .owl-theme .owl-controls .owl-nav .owl-next,
                                    .slider-car-vh .owl-theme .owl-controls .owl-nav .owl-prev {
                                        width: 40px;
                                        height: 60px;
                                        background-color: rgb(0 0 0 / 51%) !important;
                                        position: absolute;
                                        top: 50%;
                                        right: 0;
                                        z-index: 20;
                                    }

                                    .slider-car-vh .owl-theme .owl-dots {
                                        position: absolute;
                                        bottom: 20px;
                                        margin: 0 auto;
                                        display: inline;
                                    }

                                    .slider-car-vh .owl-theme .owl-dots .owl-dot.active span,
                                    .slider-car-vh .owl-theme .owl-dots .owl-dot:hover span {
                                        background-color: #37aad2 !important;
                                    }

                                    .slider-car-vh .owl-theme .owl-controls .owl-nav .owl-prev {
                                        right: 0;
                                    }

                                    .slider-car-vh .owl-theme .owl-controls .owl-nav .owl-prev {
                                        left: 0;
                                    }

                                    .slider-car-vh .owl-theme .owl-controls i {
                                        font-size: 30px !important;
                                    }

                                    .car-version-slider .owl-theme .owl-controls .owl-nav .owl-prev {
                                        right: 0;
                                    }

                                    .car-version-slider .owl-theme .owl-controls .owl-nav .owl-prev {
                                        left: 0;
                                    }

                                    .car-version-slider .owl-theme .owl-controls i {
                                        font-size: 34px !important;
                                        display: block !important;
                                        margin: 4px 2px 8px !important;
                                        color: #ffffff9e !important;
                                    }

                                    .car-version-slider .owl-theme .owl-controls .owl-next:hover i,
                                    .car-version-slider .owl-theme .owl-controls .owl-prev:hover i {
                                        color: #fff !important;
                                    }

                                    .car-version-thumb .owl-theme .owl-controls i {
                                        font-size: 30px !important;
                                        margin: 0 0 20px !important;
                                        ;
                                        display: block !important;
                                        color: #ffffff9e !important;
                                    }

                                    .owl-item .itemthumbitn img {
                                        height: 110px;
                                        object-fit: cover;
                                    }

                                    .owl-item.current .itemthumbitn:after,
                                    .itemthumbitn:hover:after {
                                        background: transparent;
                                    }

                                    .itemthumbitn:after {
                                        content: "";
                                        position: absolute;
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                        height: 100%;
                                        background: rgba(0, 0, 0, .7);
                                        transition: .3s ease;
                                    }

                                    .car-version-thumb .owl-theme .owl-controls .owl-nav .owl-prev {
                                        right: 0;
                                    }

                                    .car-version-thumb .owl-theme .owl-controls .owl-nav .owl-prev {
                                        left: 0;
                                    }

                                    .car-slide-private .owl-controls {
                                        margin-top: 0 !important;
                                    }

                                    .slider-car-vh .owl-theme .owl-controls .owl-nav i {
                                        color: #fff !important;
                                        display: block;
                                    }

                                    .car-version-slider-list .owl-theme .owl-controls .owl-nav i {
                                        color: #fff !important;
                                    }

                                    .slider-car-vh .owl-stage-outer .item img {
                                        height: auto;
                                        object-fit: cover;
                                    }
                                </style>
                                <script type="text/javascript">
                                    jQuery(document).ready(function ($) {

                                        var owl_car_version_slider = $('.car-version-slider-list');
                                        owl_car_version_slider.owlCarousel({
                                            items: 1,
                                            loop: $('.car-version-slider-list .item').size() > 1 ? true : false,
                                            dots: false,
                                            nav: true,
                                            navText: ['<i class="fa fa-angle-left owl-prev-next-product" aria-hidden="true"></i>', '<i class="fa fa-angle-right owl-prev-next-product" aria-hidden="true"></i>'],
                                            autoplay: false,
                                            autoplayTimeout: 5000,
                                        }).on('changed.owl.carousel', syncPosition);
                                        $('.owl-prev-car-version').click(function () {
                                            owl_car_version_slider.trigger('prev.owl');
                                        });
                                        $('.owl-next-car-version').click(function () {
                                            owl_car_version_slider.trigger('next.owl');
                                        });
                                        var owl_car_version_thumb = $('.car-version-thumb-list');
                                        owl_car_version_thumb.on('initialized.owl.carousel', function () {
                                            owl_car_version_thumb.find('.owl-item.active').first().addClass("current");
                                        }).owlCarousel({
                                            dots: false,
                                            nav: true,
                                            autoplay: false,
                                            navText: ['<i class="fa fa-angle-left owl-prev-next-product" aria-hidden="true"></i>', '<i class="fa fa-angle-right owl-prev-next-product" aria-hidden="true"></i>'],
                                            margin: 0,
                                            responsive: {
                                                0: {
                                                    items: 3,
                                                },
                                                480: {
                                                    items: 3,
                                                },
                                                1000: {
                                                    items: 4,
                                                },
                                                1200: {
                                                    items: 4,
                                                }
                                            }
                                        });

                                        function syncPosition(e) {
                                            var count = e.item.count - 1;
                                            var current = e.item.index - 2;
                                            if (current < 0) {
                                                current = count;
                                            }
                                            if (current > count) {
                                                current = 0;
                                            }
                                            owl_car_version_thumb.find('.owl-item').removeClass('current').eq(current).addClass('current');
                                            var onscreen = owl_car_version_thumb.find('.owl-item.active').length - 1;
                                            var start = owl_car_version_thumb.find('.owl-item.active').first().index();
                                            var end = owl_car_version_thumb.find('.owl-item.active').last().index();
                                            if (current > end) {
                                                owl_car_version_thumb.trigger('to.owl.carousel', [current, 100, true]);
                                            }
                                            if (current < start) {
                                                owl_car_version_thumb.trigger('to.owl.carousel', [current - onscreen, 100, true]);
                                            }
                                        }
                                        owl_car_version_thumb.on('click', '.owl-item', function () {
                                            var number = $(this).index();
                                            owl_car_version_slider.trigger('to.owl.carousel', [number, 300, true]);
                                        });


                                        $('.owl-related-vh').owlCarousel({
                                            loop: true,
                                            margin: 10,
                                            nav: true,
                                            autoplay: false,
                                            navText: ['<i class="fa fa-angle-left owl-prev-next-product" aria-hidden="true"></i>', '<i class="fa fa-angle-right owl-prev-next-product" aria-hidden="true"></i>'],
                                            responsive: {
                                                0: {
                                                    items: 1
                                                },
                                                600: {
                                                    items: 1
                                                },
                                                1000: {
                                                    items: 1
                                                }
                                            }
                                        })

                                    });
                                </script>
                            </div>
                            <div id="specifications" class="thong-so-tab thong-so-ky-thuat">
                                <div class="product-single-title">
                                    <h2 class="title entry-title tit-na">Thông số kỹ thuật</h2>
                                </div>
                                <div class="tab-content zing-content thong-so-content">
                                    <div id="tab1" class="tab" style="display: block;">
                                        <table style="width: 1152px; height: 813px;" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td width="390"><strong>Thông số kỹ thuật</strong></td>
                                                    <td width="390"><strong>Ioniq 5</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Số chỗ ngồi</td>
                                                    <td width="390">5</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Kích thước tổng thể DxRxC (mm)</td>
                                                    <td width="390">4.635 x 1.890 x 1.605</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Chiều dài cơ sở (mm)</td>
                                                    <td width="390">3.000</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Khoảng sáng gầm xe (mm)</td>
                                                    <td width="390">160</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Dung lượng pin (kWh)</td>
                                                    <td width="390">72,6</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Công suất điện (kW)</td>
                                                    <td width="390">160 kW (RWD)</p>
                                                        <p>225 kW (AWD)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Công suất tối đa (mã lực)</td>
                                                    <td width="390">215 (RWD)</p>
                                                        <p>315 (AWD)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Mô-men xoắn cực đại (Nm)</td>
                                                    <td width="390">350 (RWD)</p>
                                                        <p>605 (AWD)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Tốc độ tối đa (km/h)</td>
                                                    <td width="390">185</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Tăng tốc từ 0 – 100 km/h</td>
                                                    <td width="390">7,4 giây (RWD)</p>
                                                        <p>5,2 giây (AWD)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;" colspan="2" width="390">
                                                        <strong>Sạc AC</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Thời gian sạc</td>
                                                    <td width="390">369 phút (tương đương 6,09 giờ)</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Nguồn sạc</td>
                                                    <td width="390">11 kW</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;" colspan="2" width="390">
                                                        <strong>Sạc DC</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Thời gian sạc, đến 80%</td>
                                                    <td width="390">18 phút</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Nguồn sạc</td>
                                                    <td width="390">200 kW</td>
                                                </tr>
                                                <tr>
                                                    <td width="390">Quãng đường di chuyển tối đa (km/h)</td>
                                                    <td width="390">480</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>
                            <div class="footer-slider-wrap"></div>
                            <div id="ism_pay">
                                <!-- installment pay -->
                                <div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="product-single-title">
                                                <h2 class="title entry-title tit-na">Tính phí trả góp xe</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row insatallment-pay">
                                        <div class="col-sm-2">Số tiền vay</div>
                                        <div class="col-sm-10">
                                            <select id="select-percent-pay" class="form-control form-ism">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="60">60</option>
                                                <option value="70">70</option>
                                            </select>
                                            <span style="float: left; margin: 8px 0 0 10px;">(% giá trị xe)</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row insatallment-pay">
                                        <div class="col-sm-2">Thời hạn vay</div>
                                        <div class="col-sm-10">
                                            <select id="year-pay" class="form-control form-ism">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <span style="float: left; margin: 8px 0 0 10px;">(năm)</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"><a id="calculate-single"
                                                class="button btn-car btn-yeu-cau-bao-gia">Tính toán</a></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="notification"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="result-is-single"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end installment pay -->
                                <!-- call -->
                                <div>
                                    <div style="padding: 8px; border: 2px dashed #FD0101; word-wrap: break-word;">
                                        <p style="text-align: center;"><strong><span style="color: #ff0000;"><span
                                                        style="color: #000000;">Hyundai Hải Phòng</span> – Đại lý
                                                    Hyundai Miền Bắc</span></strong></p>
                                        <p style="text-align: center;"><span style="font-size: 12pt;"><strong><span
                                                        style="color: #ff0000;">Địa chỉ</span></strong> : 742 Nguyễn
                                                Văn Linh, phường Niệm Nghĩa, quận Lê Chân, Hải Phòng</span></p>
                                        <p style="text-align: center;"><span style="font-size: 14pt;"><span
                                                    style="color: #ff0000;"><strong>Phòng Kinh
                                                        Doanh</strong></span> : Gọi ngay <a style="color: #f00;"
                                                    title="0961242474 " href="tel:0906026299"><strong>0906 026 299
                                                    </strong></a><strong> </strong><em>Để được Báo giá đặc biệt,
                                                    Khuyến mại hấp dẫn + Quà tặng giá trị</em></span></p>
                                        <p style="text-align: center;"><strong><span style="color: #ff0000;"><span
                                                        style="color: #333399; font-family: 'trebuchet ms', geneva, sans-serif; font-size: 14pt;"><em><img
                                                                decoding="async"
                                                                class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                alt="" width="60" height="13"
                                                                data-lazyloaded="1"
                                                                data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                data-was-processed="true" /><noscript><img
                                                                    decoding="async"
                                                                    class="size-full wp-image-244 alignnone"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60"
                                                                    height="13" /></noscript></em></span>Giờ làm
                                                    việc</span></strong>: Bán hàng: 07:30 – 17:00 từ Thứ 2 đến Chủ
                                            nhật<span
                                                style="color: #333399; font-family: 'trebuchet ms', geneva, sans-serif; font-size: 14pt;"><strong><span
                                                        style="color: #ff0000;"><em><img decoding="async"
                                                                class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                alt="" width="60" height="13"
                                                                data-lazyloaded="1"
                                                                data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                data-was-processed="true" /><noscript><img
                                                                    decoding="async"
                                                                    class="size-full wp-image-244 alignnone"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60"
                                                                    height="13" /></noscript></em></span></strong></span>
                                        </p>
                                        <ul style="padding: 0 15px;">
                                            <li style="text-align: left;"><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /><noscript><img
                                                                        decoding="async"
                                                                        class="size-full wp-image-244 alignnone"
                                                                        src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                        alt="" width="60"
                                                                        height="13" /></noscript></em></span></strong>Hỗ
                                                    trợ thủ tục vay trả góp tối đa đến 80%, thời gian 7 năm.</span>
                                            </li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Hỗ
                                                    trợ cho khách hàng không chứng minh được thu nhập, nợ xấu nhóm,
                                                    hộ khẩu tỉnh có kết quả trong ngày (cam kết tỉ lệ đậu hồ sơ lên
                                                    đến 90%, hoàn toàn không thu phí khách hàng).</span></li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Cam
                                                    kết hồ sơ đơn giản, thủ tục nhanh chóng, không gây mất thời
                                                    gian, có kết quả liền.</span></li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Lựa
                                                    chọn cho khách hàng ngân hàng tốt nhất hiện nay, tư vấn tại
                                                    nhà/showroom nếu khách hàng có yêu cầu.</span></li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Giải
                                                    ngân kịp tiến độ nhận xe, không phát sinh chi phí khi làm hồ
                                                    sơ.</span></li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Lái
                                                    thử xe tại nhà miễn phí, có xe ngay, giao xe tại nhà trên toàn
                                                    quốc.</span></li>
                                            <li><span style="color: #333399;"><strong><span
                                                            style="color: #ff0000;"><em><img decoding="async"
                                                                    class="size-full wp-image-244 alignnone litespeed-loaded"
                                                                    src="{{ asset('Fe_Hyundai/wp-content/uploads/2022/03/hot.gif') }}"
                                                                    alt="" width="60" height="13"
                                                                    data-lazyloaded="1"
                                                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hot.gif')}}"
                                                                    data-was-processed="true" /></em></span></strong>Hỗ
                                                    trợ đăng kí, ra biển số xe trong 1 ngày.</span></li>
                                        </ul>
                                    </div>
                                    <h4 style="padding: 15px 0;">Để được tư vấn chi tiết và nhận giá xe Hyundai
                                        IONIQ5 giá tốt, Quý khách vui lòng liên hệ:</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Báo giá Lăn Bánh Hyundai IONIQ5, Tư Vấn Trả
                                                        Góp miễn phí gọi Hotline:   ‭<a href="tel:0906026299"><span
                                                                style="color: #c8102e;">0906 026
                                                                299</span></a></strong></td>
                                            </tr>
                                            <tr>
                                                <td><a href="tel:0906026299"><img decoding="async"
                                                            class="alignleft size-full wp-image-3314"
                                                            src="{{ asset('Fe_Hyundai/hyundaibinhdinh.com.vn/wp-content/uploads/2020/07/goi-ngay-nhan-gia-tot.jpg') }}"
                                                            alt="" width="350" height="80" /></a></td>
                                                <td><a href="https://hyundaibinhdinh.com.vn/dang-ky-lai-thu/"><img
                                                            decoding="async" class="alignleft size-full wp-image-3315"
                                                            src="{{ asset('Fe_Hyundai/hyundaibinhdinh.com.vn/wp-content/uploads/2020/07/mua-xe-tra-gop.jpg') }}"
                                                            alt="" width="350" height="80" /></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-t-sgp col-t-sgp-right col-md-2">
                            <div class="tieudiem"></div>
                            <div class="sidebar-widget">
                                <div class="widget-sub">
                                    <ul id="sidebar">
                                        <li class="info"><a href="#info"><span>1.</span> Thông tin cơ bản</a></li>
                                        <li class="info"><a href="#content"><span>2.</span> Nội dung</a></li>
                                        <li class="info"><a href="#specifications"><span>3.</span> Thông số kỹ
                                                thuật</a></li>
                                        <li class="info"><a href="#product_sugget"><span>4. </span>Sản phẩm liên
                                                quan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product related -->
                <div id="product_sugget" class="product-related slider-car">
                    <h5 class="car-readmore">Xem thêm các phiên bản khác</h5>
                    <div class="owl-related-prd owl-carousel owl-theme">
                        <div class="item">
                            <a href="../hyundai-i10/index.html" title="Hyundai i10">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/07/grrand-i10.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai i10"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-i10/index.html" title="Hyundai i10" class="color-setting">Hyundai
                                        i10</a>
                                </div>
                                <div class="price-product-rl">360,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-venue/index.html" title="Hyundai Venue">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/venue-22.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Venue"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-venue/index.html" title="Hyundai Venue"
                                        class="color-setting">Hyundai Venue</a>
                                </div>
                                <div class="price-product-rl">499,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-accent/index.html" title="Hyundai Accent">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/Accne-2024r-car.png')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Accent"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-accent/index.html" title="Hyundai Accent"
                                        class="color-setting">Hyundai Accent</a>
                                </div>
                                <div class="price-product-rl">439,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-elantra/index.html" title="Hyundai Elantra">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/hyundai-elantra-300x179-2.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Elantra"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-elantra/index.html" title="Hyundai Elantra"
                                        class="color-setting">Hyundai Elantra</a>
                                </div>
                                <div class="price-product-rl">639,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-creta-2024/index.html" title="Hyundai Creta">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/Hyundai-creta-anh-dai-dien.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Creta"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-creta-2024/index.html" title="Hyundai Creta"
                                        class="color-setting">Hyundai Creta</a>
                                </div>
                                <div class="price-product-rl">599,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-tucson/index.html" title="Hyundai Tucson">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/Hyundai-Tucsonmau-do2.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Tucson"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-tucson/index.html" title="Hyundai Tucson"
                                        class="color-setting">Hyundai Tucson</a>
                                </div>
                                <div class="price-product-rl">769,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-santafe/index.html" title="Hyundai Santafe">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/san2021-thumbnail-300x179-1-1.jpg')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Santafe"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-santafe/index.html" title="Hyundai Santafe"
                                        class="color-setting">Hyundai Santafe</a>
                                </div>
                                <div class="price-product-rl">979,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-stargazer/index.html" title="Hyundai Stargazer X">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2024/07/stargazer-car-1.png')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Stargazer X"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-stargazer/index.html" title="Hyundai Stargazer X"
                                        class="color-setting">Hyundai Stargazer X</a>
                                </div>
                                <div class="price-product-rl">489,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-custin/index.html" title="Hyundai Custin">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/custin-home.png')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Custin"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-custin/index.html" title="Hyundai Custin"
                                        class="color-setting">Hyundai Custin</a>
                                </div>
                                <div class="price-product-rl">820,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="../hyundai-palisade/index.html" title="Hyundai Palisade">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/palisade-home.png')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai Palisade"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="../hyundai-palisade/index.html" title="Hyundai Palisade"
                                        class="color-setting">Hyundai Palisade</a>
                                </div>
                                <div class="price-product-rl">1,469,000,000đ</div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="index.html" title="Hyundai IONIQ 5">
                                <img class="loading lazy"
                                    data-src="https://hyundaihaiphong.vn/wp-content/uploads/2023/09/IONIQ5-home.png')}}"
                                    src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                    alt="Hyundai IONIQ 5"> </a>
                            <div class="product-name">
                                <div class="product-title">
                                    <a href="index.html" title="Hyundai IONIQ 5" class="color-setting">Hyundai IONIQ
                                        5</a>
                                </div>
                                <div class="price-product-rl">1,300,000,000đ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end post related -->
            </div>
        </div>
    </div>
    <style>
        .is-divider-center {
            height: 2px;
            display: block;
            margin: 1em 0;
            width: 103px;
            margin: 15px auto;
            background-color: #fff
        }

        .sologan-tvbh {
            text-transform: uppercase;
            font-size: 25px;
            color: #000;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px
        }

        .footer-slider-wrap .owl-carousel .item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin: 5px auto
        }

        .footer-slider-wrap .owl-carousel .owl-nav {
            display: none
        }

        .info-tvbh span {
            color: #fff;
            display: block;
            font-size: 16px
        }

        .info-tvbh {
            text-align: center
        }

        .call-container {
            position: fixed;
            width: 40px;
            height: 40px;
            bottom: 175px;
            right: 10px;
            z-index: 9999999
        }

        .call-container span {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            -ms-align-items: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: red;
            position: relative
        }

        .regis-container {
            position: fixed;
            width: 60px;
            bottom: 200px;
            right: 6px;
            z-index: 9999999;
            display: none
        }

        .regis-container img {
            position: relative
        }

        .modal-footer {
            text-align: center !important
        }

        .cmoz-alo-circle2 {
            width: 70px;
            height: 69px;
            top: -5px;
            right: -5px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid #ccc;
            opacity: .1;
            border-color: #ccc;
            opacity: .5
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function (o) {
            if (o("#back-to-top").length) { var n = function () { o(window).scrollTop() > 100 ? o("#back-to-top").addClass("show") : o("#back-to-top").removeClass("show") }; n(), o(window).on("scroll", function () { n() }), o("#back-to-top").on("click", function (n) { n.preventDefault(), o("html,body").animate({ scrollTop: 0 }, 700) }) } if (o(".site-header").length) { var t = function () { o(window).scrollTop() > 150 ? o(".fix-header-home").addClass("stuck") : o(".fix-header-home").removeClass("stuck") }; t(), o(window).on("scroll", function () { t() }) }
            setTimeout(function () {
                //  o("#bao_gia").modal('show');
            }, 20000);
        });
    </script>
    <style>
        .detail-product-single .col-t-sgp {
            padding-left: 8px;
            padding-right: 8px
        }

        .car-title {
            color: #000
        }

        .tit-na {
            border-left: 4px solid #014488;
            padding-left: 8px;
            font-size: 22px;
            color: #333;
            line-height: 28px;
            margin: 15px 0;
            text-transform: uppercase
        }

        .car-price-top {
            font-weight: 600
        }

        .car-price-top .price-title {
            color: #c8102e
        }

        .color-car-top .color-text {
            float: left;
            line-height: 47px;
            font-weight: 600;
            font-size: 14px;
            height: 38px;
            margin-right: 10px
        }

        .car-version-btn .btn-yeu-cau-bao-gia {
            background: #c8102e;
            color: #fff !important;
            margin-bottom: 15px;
            cursor: pointer
        }

        .btn-car {
            width: 155px;
            display: inline-block;
            border: 1px solid #c8102e;
            border-radius: 3px;
            background: #fff;
            color: #c8102e !important;
            text-transform: inherit;
            font-size: 15px;
            text-align: center;
            padding: 3px 0
        }

        .btn-test-drive {
            display: block;
            background: #f76b1c !important;
            border-color: #f76b1c;
            width: 315px;
            border-radius: 4px;
            text-align: center
        }

        .car-readmore {
            border-left: 4px solid #014488;
            padding-left: 8px;
            font-size: 20px;
            color: #333;
            line-height: 28px;
            margin: 15px 0
        }

        .image-big {
            height: 199px;
            width: unset !important;
            margin: 0 auto
        }

        .outer {
            margin: 0 auto;
            max-width: 800px
        }

        #sidebar {
            list-style: none;
            padding: 0
        }

        #detail_product .col-sm-4 {
            padding-left: 5px;
            padding-right: 5px;
            overflow: hidden
        }

        #big .item {
            background: #fff;
            padding: 10px 0;
            margin: 2px;
            color: #fff;
            border-radius: 3px;
            text-align: center
        }

        #thumbs .item {
            background: #fff;
            height: 100px;
            margin: 2px;
            text-align: center;
            cursor: pointer;
            border: 1px solid #e6e6e6;
            border-radius: 3px
        }

        #thumbs .item h1 {
            font-size: 18px
        }

        #thumbs .current .item,
        #thumbs .item:hover {
            border-color: #014488
        }

        #thumbs.owl-theme .owl-next,
        #thumbs.owl-theme .owl-prev {
            background: 0 0 !important;
            z-index: 20;
            position: absolute;
            padding: 0;
            margin: 0
        }

        #thumbs.owl-theme .owl-next {
            right: -30px
        }

        #thumbs.owl-theme .owl-prev {
            left: -30px
        }

        #thumbs .item img {
            width: auto;
            max-height: 90px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            padding: 8px
        }

        .owl-theme .owl-nav [class*=owl-] {
            -webkit-transition: all .3s ease;
            transition: all .3s ease;
            background: 0 0 !important;
            color: #333 !important;
            font-size: 44px !important
        }

        .owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
            background: 0 0
        }

        .owl-theme .owl-nav [class*=owl-].disabled:hover {
            background-color: #d6d6d6
        }

        #big.owl-theme {
            position: relative
        }

        #big.owl-theme .owl-next,
        #big.owl-theme .owl-prev {
            background: 0 0;
            width: 22px;
            line-height: 40px;
            height: 40px;
            margin-top: -20px;
            position: absolute;
            text-align: center;
            top: 50%
        }

        #big.owl-theme .owl-prev {
            left: 10px
        }

        #big.owl-theme .owl-next {
            right: 10px
        }

        #thumbs.owl-theme .owl-next,
        #thumbs.owl-theme .owl-prev {
            top: 18px
        }

        #thumbs.owl-theme .owl-prev,
        .owl-nav {
            cursor: pointer
        }

        .lable-car {
            border: 1px solid #e5e5e5;
            float: left;
            position: relative;
            margin-right: 5px;
            margin-bottom: 5px;
            padding: 2px 6px;
            cursor: pointer
        }

        .lable-car.color-select {
            border: 1px solid #c8102e
        }

        .lable-car img {
            width: 40px
        }

        .lable-car .name-car-lable {
            color: #333;
            font-size: 12px
        }

        .lable-car.color-select .name-car-lable {
            color: #c8102e
        }

        .lable-car.color-select .check {
            display: block
        }

        .lable-car .check {
            position: absolute;
            bottom: 10px;
            width: 14px;
            height: 14px;
            right: 0;
            display: none
        }

        .product-single-title {
            font-size: 18px;
            font-weight: 700
        }

        .product-price .gia {
            font-size: 16px;
            font-weight: 600;
            color: #c8102e;
            opacity: .8
        }

        .car-version-right-box-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px
        }

        .car-version-parameter {
            margin-top: 0
        }

        .car-line-parameter p {
            min-height: 21px;
            position: relative;
            padding-left: 110px;
            margin-bottom: 5px
        }

        .car-line-parameter p span {
            font-weight: 600;
            position: absolute;
            top: 0;
            left: 0
        }

        .zing-select {
            position: relative
        }

        .car-lan-banh-box .select-city {
            font-size: 14px;
            font-style: normal;
            color: #4a4a4a;
            margin-bottom: 15px
        }

        .car-lan-banh-box .zing-radio {
            display: none
        }

        .car-lan-banh-box .chi-phi-lan-banh-result .gia {
            display: none
        }

        .car-line-parameter p,
        .chi-phi-lan-banh-result p {
            margin-bottom: 2px;
            font-size: 16px
        }

        .chi-phi-lan-banh-result p span {
            float: right;
            font-weight: 700
        }

        .nav__product {
            background: #fff;
            display: block;
            padding-bottom: 10px;
            position: fixed;
            z-index: 10
        }

        .nav__product ul {
            padding-left: 0
        }

        .nav__product ul li a {
            display: block;
            padding-top: 7px;
            padding-left: 7px;
            color: #c8102e
        }

        .tong-phi {
            border-top: 1px solid #d3d3d3;
            border-bottom: 1px solid #d3d3d3;
            padding: 10px 0
        }

        .tong-phi span,
        .tra-gop span,
        .tra-ngay span {
            color: #d0021b
        }

        .thong-so-title {
            background: #c8102e;
            padding: 7px 20px;
            color: #fff;
            margin-bottom: 0
        }

        .thong-so-tab .tab-content {
            border: 0;
            padding: 0
        }

        .zing-content table {
            width: 100%;
            margin: 0 0 15px 0
        }

        .thong-so-content table tr.thong-so-nhom-title {
            background: #efefef
        }

        .thong-so-content table td:nth-child(1) {
            width: 180px
        }

        .thong-so-content table td:nth-child(2) {
            width: 360px
        }

        .thong-so-content table td {
            border-color: #ccc;
            padding: 6px 10px;
            color: #333
        }

        .zing-content td {
            padding: 9px 15px;
            border: 1px solid #ddd
        }

        .nav__product ul {
            list-style: none
        }

        #content-single-product {
            margin-top: 20px
        }

        #calculate-single {
            background: #c8102e;
            color: #fff !important;
            cursor: pointer
        }

        #result-is-single {
            margin-top: 20px
        }

        #result-is-single table {
            width: 100%;
            text-align: center
        }

        #result-is-single th {
            background: #c8102e;
            padding: 15px;
            color: #fff;
            border: 1px solid #c8102e;
            font-size: 11px;
            line-height: 18px;
            text-align: center
        }

        #result-is-single td {
            padding: 5px 10px;
            border: 1px solid #ccc
        }

        #calculate-single {
            margin-bottom: 20px
        }

        .form-ism {
            width: 300px !important;
            float: left
        }

        .insatallment-pay {
            margin-bottom: 15px
        }

        .notification span {
            color: red;
            margin-bottom: 20px;
            font-weight: 700
        }

        .uoc-tinh-tra-gop-item {
            border-bottom: 1px solid #d3d3d3;
            padding-bottom: 5px;
            margin-bottom: 15px
        }

        .uoc-tinh-tra-gop-item tr:first-child {
            font-size: 16px;
            font-weight: 700
        }

        .uoc-tinh-tra-gop-item td {
            padding-bottom: 10px !important;
            vertical-align: top;
            text-align: left;
            border: none !important
        }

        .uoc-tinh-tra-gop-item td:first-child {
            padding-right: 10px
        }

        .owl-related-prd .item img {
            object-fit: cover;
            height: 119px;
        }

        .owl-related-prd .item .product-name {
            text-align: center;
            margin-top: 10px;
        }

        .owl-related-prd .item .product-name a {
            color: #c8102e
        }

        .owl-related-prd.owl-theme .owl-dots .owl-dot.active span,
        .owl-related-prd.owl-theme .owl-dots .owl-dot:hover span {
            background: #014488
        }

        .thong-so-ky-thuat .thong-so-ky-thuat-content {
            max-height: 404px;
            overflow-y: auto;
            font-size: 14px
        }

        .thong-so-ky-thuat .thong-so-ky-thuat-content::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #f5f5f5
        }

        .thong-so-ky-thuat .thong-so-ky-thuat-content::-webkit-scrollbar {
            width: 6px;
            background-color: #f5f5f5
        }

        .thong-so-ky-thuat .thong-so-ky-thuat-content::-webkit-scrollbar-thumb {
            background-color: #c8102e;
            border-radius: 3px
        }

        #specifications {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px
        }

        .thong-so-ky-thuat .thong-so-ky-thuat-content h4 {
            border-left: 4px solid #c8102e;
            padding-left: 8px;
            font-size: 18px;
            color: #333;
            margin: 15px 0;
            font-weight: 500
        }

        .btn-mua {
            margin-top: 20px;
            text-align: center;
        }

        .btn-mua a {
            color: #fff;
            background-color: #c8102e;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1.2px;
            height: auto;
            line-height: inherit;
            box-shadow: none;
            padding: 15px 30px;
            min-width: 350px;
            text-align: center;
            display: inline-block;
        }

        .gradient-heading {
            font-weight: 600;
            line-height: auto;
            text-align: center;
            background: linear-gradient(45deg, #ff8a00, #e52e71, #044bea, #7a00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 300% 300%;
            animation: gradient-text 8s ease infinite;
            border: dashed 1px #908787;
            padding: 10px;
            font-size: 17px;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        #detail_product ul {
            padding-left: 30px
        }

        @media (min-width:767px) {
            .car-version-right-box-right {
                padding: 10px 70px
            }
        }

        @media (max-width:767px) {
            #detail_product .col-sm-4 {
                padding-left: 15px;
                padding-right: 15px
            }

            .image-big {
                height: 140px
            }

            .car-title {
                text-align: center
            }

            .car-price-top {
                text-align: center;
                font-size: 21px;
                margin: 15px 0 20px
            }

            #detail_product h3 {
                font-size: 18px
            }

            .product-single-title h2 {
                font-size: 18px;
                font-weight: 700
            }

            .owl-related-prd .item img {
                height: 60px
            }

            .col-t-sgp-right {
                display: none
            }

            .detail-product-single .col-t-sgp {
                overflow: hidden
            }

            .form-ism {
                width: 60% !important
            }
        }

        @media (max-width:415px) {
            .entry-content .zing-content table {
                font-size: 13px
            }

            .entry-content tr:first-child td {
                padding: 2px
            }

            .thong-so-content table td {
                padding: 2px
            }

            .owl-related-prd .item img {
                height: 52px
            }

            .owl-related-prd .item .product-name {
                font-size: 14px
            }

            #calculate-single {
                margin: 0 auto;
                display: block
            }
        }

        @media (max-width:320px) {
            .btn-car {
                width: 100% !important;
                margin-bottom: 10px !important;
            }
        }

        @media only screen and (min-width:1024px) {
            #sidebar {
                position: absolute
            }

            #sidebar .info {
                background: #ddd;
                margin-bottom: 5px;
                border-radius: 3px;
                padding-left: 5px;
                line-height: 40px;
                height: 40px
            }

            #sidebar .info a {
                color: #333;
                text-decoration: none
            }

            #sidebar .info a:hover {
                color: #c8102e
            }

            #sidebar.fixed {
                position: fixed;
                top: 80px
            }

            .item-feature-box ul li {
                list-style: none
            }
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function (t) { var e = t("#big"), n = t("#thumbs"), d = !1; e.owlCarousel({ items: 1, slideSpeed: 5e3, nav: !0, autoplay: !1, dots: !1, loop: !0, responsiveRefreshRate: 200, navText: ["", ""] }).on("changed.owl.carousel", function (t) { var e = t.item.count - 1, i = Math.round(t.item.index - t.item.count / 2 - .5); i < 0 && (i = e); i > e && (i = 0); n.find(".owl-item").removeClass("current").eq(i).addClass("current"); var d = n.find(".owl-item.active").length - 1, a = n.find(".owl-item.active").first().index(), r = n.find(".owl-item.active").last().index(); i > r && n.trigger("to.owl.carousel", [i, 100, !0]); i < a && n.trigger("to.owl.carousel", [i - d, 100, !0]) }), n.on("initialized.owl.carousel", function () { n.find(".owl-item").eq(0).addClass("current") }).owlCarousel({ dots: !1, nav: !0, navText: ['<i class="fa fa-angle-left owl-prev-next-product" aria-hidden="true"></i>', '<i class="fa fa-angle-right owl-prev-next-product" aria-hidden="true"></i>'], smartSpeed: 200, slideSpeed: 500, slideBy: 4, responsiveRefreshRate: 100, responsive: { 0: { items: 3 }, 600: { items: 4 }, 1000: { items: 5 } } }).on("changed.owl.carousel", function (t) { if (d) { var i = t.item.index; e.data("owl.carousel").to(i, 100, !0) } }), n.on("click", ".owl-item", function () { var i = t(this).index(); console.log(i), e.trigger("to.owl.carousel", [i, 200, !0]) }), t(".lable-car").first().addClass("color-select"), t(".lable-car").click(function () { var i = t(this).attr("data-item-car"); t(".item-color").removeClass("color-select"), t(this).addClass("color-select"), e.trigger("to.owl.carousel", [i, 200, !0]) }), t(window).on("scroll", function () { t(window).scrollTop() >= t(".site-content").offset().top + t(".site-content").outerHeight() - window.innerHeight ? t(".nav__product").css("display", "none") : t(".nav__product ").css("display", "block") }); var a = 10, r = 1; price = t(".price-all-single").attr("data-price"), name_car = t(".car-title").text(), t("#select-percent-pay").change(function () { a = t(this).val() }), t("#year-pay").change(function () { r = t(this).val() }), toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"), t("#calculate-single").click(function () { var e = price / 100 * a, n = e / (12 * r), d = e / 100 * .625, o = t("<tr>"), l = 0; for (i = 1; i <= 12 * r; i++) { var s = n + d; t(window).width() < 767 ? o.append('<div class="uoc-tinh-tra-gop-item"><table><tbody><tr><td>Kỳ ' + i + "</td><td></td></tr><tr><td>Tổng số gốc còn nợ</td><td>" + parseFloat(e, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr><tr><td>Tiền gốc trả trong tháng</td><td>" + parseFloat(n, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr><tr><td>Tiền lãi trong tháng <span>(tính trên gốc còn nợ)</span></td><td>" + parseFloat(d, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr><tr><td>Tổng số tiền thanh toán hàng tháng</td><td>" + parseFloat(s, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr></table></tbody></div>") : o.append("<tr><td>" + i + "</td><td>" + parseFloat(e, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td><td>" + parseFloat(n, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td><td>" + parseFloat(d, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td><td>" + parseFloat(s, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr>"), l += d, d = (e -= n) / 100 * .625 } t(".notification").html("Bạn chọn mua xe <span>" + name_car + "</span><div> với số tiền vay là: <span>" + a + "</span>% tương đương:<strong> (" + (price / 100 * a).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VND) </strong>giá trị xe, trong thời gian là <span>" + r + "</span> năm </div><div>Lãi suất ngân hàng là<span> 7,5%/năm</span></div>"), t(window).width() < 767 ? t("#result-is-single").html(o.html()) : t("#result-is-single").html("<table><tbody><tr><th>Kỳ</th><th>Tổng dư nợ</th><th>Tiền gốc</th><th>Tiền lãi</th><th>Tổng tiền</th></tr>" + o.html() + '<tr style="font-weight:bold"><td></td><td>Tổng trả góp</td><td>' + (price / 100 * a).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + "</td><td>" + parseFloat(l, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + '<td style="color:#f00">' + parseFloat(price / 100 * a + l, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + " VND</td></tr></tbody></table>") }), t(".owl-related-prd").owlCarousel({ slideSpeed: 5e3, nav: !0, autoplay: !0, dots: !0, loop: !0, margin: 10, navText: ["", ""], responsive: { 0: { items: 3 }, 600: { items: 4 }, 1000: { items: 5 } } }) });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function (e) { window.onload = function () { if (e(window).width() >= 1024 && window.innerWidth >= 1e3 && 0 != e("body").find(".tieudiem").length) { var o = e("#sidebar").offset().top - parseFloat(e("#sidebar").css("marginTop").replace(/auto/, 0)), t = e(".footer-slider-wrap").offset().top - parseFloat(e(".footer-slider-wrap").css("marginTop").replace(/auto/, 0)), i = t - e("#sidebar").outerHeight(); e(window).scroll(function () { "use strict"; var t = e(this).scrollTop(); t + 40 > o ? t + 40 < i ? e("#sidebar").addClass("fixed").removeAttr("style") : e("#sidebar").removeClass("fixed").css({ position: "relative", top: i - o - 10 + "px" }) : e("#sidebar").removeClass("fixed") }); var r = e(".tieudiem"), s = e(".tieudiem").offset().top; !function o() { r.offset().top != s && (s = e(".tieudiem").offset().top, t = e(".footer-slider-wrap").offset().top - parseFloat(e(".footer-slider-wrap").css("marginTop").replace(/auto/, 0)), i = t - e("#sidebar").outerHeight(), window.console.log("changed")), setTimeout(o, 1e3) }() } } });
    </script>
@endsection

