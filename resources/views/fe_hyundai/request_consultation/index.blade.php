@extends('layouts.default_template_hyundai')

@section('content')
    <div class="container content-single">
        <div class="row">
            <div class="col-md-8 sigle-post-cus">
                <div id="content-single-post">
                    <div class="product-single-title-cus">
                        <h1 class="title entry-title ">Đăng ký lái thử</h1>
                        <div class="entry-meta"><span class="byline"> by <span class="author vcard"><a class="url fn n"
                                        href="../author/admin/index.html">admin</a></span></span> |<span
                                class="count-view-post"><i class="fa fa-user" aria-hidden="true"></i>Lượt xem:
                                8989</span></div><!-- .entry-meta -->
                    </div>
                    <div id="detail_product">
                        <h2 style="text-align: center;"><span style="color: #ff0000;"><strong>ĐĂNG KÝ LÁI
                                    THỬ</strong> </span></h2>
                        <p>Để nhận được hướng dẫn đăng ký lái thử, quý khách vui lòng điền vào form dưới đây,
                            chúng tôi sẽ gọi lại sau ít phút. Xin cám ơn quý khách !</p>
                        <h4>
                            <div class="wpcf7 no-js" id="wpcf7-f12581-p12576-o1" lang="vi" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                @include('fe_hyundai.request_consultation.form_request')
                            </div>
                        </h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="dn-social-share">
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <span class="facebook"><i class="fa fa-facebook" aria-hidden="true" alt="Share on Facebook"
                                onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('index.html'),'facebook-share-dialog','width=626,height=436'); return false;"></i></span>
                        <span class="twitter"><i class="fa fa-twitter" aria-hidden="true" alt="Share on Twitter"
                                onclick="javascript:window.open('https://twitter.com/share?text=%c4%90%c4%83ng%20k%c3%bd%20l%c3%a1i%20th%e1%bb%ad&amp;url=[https://hyundaihaiphong.vn/dang-ky-lai-thu/]','Twitter-dialog','width=626,height=436'); return false;"></i></span>
                        <span class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true" alt="Share on Pinterest"
                                onclick="javascript:window.open('http://pinterest.com/pin/create/link/?url=https://hyundaihaiphong.vn/dang-ky-lai-thu/&amp;description=%c4%90%c4%83ng%20k%c3%bd%20l%c3%a1i%20th%e1%bb%ad','pin-dialog','width=626,height=436'); return false;"></i></span>
                        <span class="linkin"><i class="fa fa-linkedin" aria-hidden="true"
                                onclick="javascript:window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=https://hyundaihaiphong.vn/dang-ky-lai-thu/&amp;title=%c4%90%c4%83ng%20k%c3%bd%20l%c3%a1i%20th%e1%bb%ad','LinkedIn','width=626,height=436'); return false;"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 sigle-post-cus">
                <aside id="secondary" class="widget-area">
                    <section>
                        <div class="item-feature-box text-center feature-box-style-daidien">
                            <div class="feature-box-icon">
                                <p class="feature-box-link">
                                    <img class="img-responsive" alt=""
                                        src="../wp-content/uploads/2022/03/Dai-dien-kinh-doanh.jpg">
                                </p>
                            </div>
                            <div class="feature-box-info">
                                <div class="feature-box-info-header">
                                    <strong>Phụ trách kinh doanh</strong>
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        Chúng tôi luôn cam kết mang lại mức giá ưu đãi nhất cho quý khách với
                                        thời gian giao xe nhanh nhất.
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        Chúng tôi luôn cập nhật sớm nhất các chương trình khuyến mãi của hãng và
                                        đại lý.
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        Hỗ trợ mua xe trả góp lãi suất thấp &amp; tối ưu tài chính.
                                    </li>
                                </ul>
                                <p class="phone-siderbar"><i class="fa fa-phone" aria-hidden="true"></i> <a
                                        href="tel:0906026299" title="0906 026 299">0906 026 299</a></p>
                            </div>
                        </div>
                    </section>
                    <section id="recent-posts-product" class="widget widget_recent_entries">
                        <h2 class="widget-title">Sản phẩm nổi bật</h2>
                        <ul>
                            <li>
                                <a href="../san-pham/hyundai-i10/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2024/07/grrand-i10.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai i10"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-i10/index.html">Hyundai
                                            i10</a></p>
                                    <p class="widget-price h-bold">Giá xe 360 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-venue/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/venue-22.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Venue"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-venue/index.html">Hyundai
                                            Venue</a></p>
                                    <p class="widget-price h-bold">Giá xe 499 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-accent/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/Accne-2024r-car.png"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Accent"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-accent/index.html">Hyundai
                                            Accent</a></p>
                                    <p class="widget-price h-bold">Giá xe 426 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-elantra/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/hyundai-elantra-300x179-2.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Elantra"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-elantra/index.html">Hyundai
                                            Elantra</a>
                                    </p>
                                    <p class="widget-price h-bold">Giá xe 639 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-creta-2024/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/Hyundai-creta-anh-dai-dien.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Creta"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-creta-2024/index.html">Hyundai
                                            Creta</a>
                                    </p>
                                    <p class="widget-price h-bold">Giá xe 599 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-tucson/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/Hyundai-Tucsonmau-do2.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Tucson"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-tucson/index.html">Hyundai
                                            Tucson</a></p>
                                    <p class="widget-price h-bold">Giá xe 769 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-santafe/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2022/03/san2021-thumbnail-300x179-1-1.jpg"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Santafe"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-santafe/index.html">Hyundai
                                            Santafe</a>
                                    </p>
                                    <p class="widget-price h-bold">Giá xe 979 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-stargazer/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2024/07/stargazer-car-1.png"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Stargazer X"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-stargazer/index.html">Hyundai
                                            Stargazer
                                            X</a></p>
                                    <p class="widget-price h-bold">Giá xe 488 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-custin/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2023/09/custin-home.png"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Custin"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-custin/index.html">Hyundai
                                            Custin</a></p>
                                    <p class="widget-price h-bold">Giá xe 820 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-palisade/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2023/09/palisade-home.png"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai Palisade"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-palisade/index.html">Hyundai
                                            Palisade</a>
                                    </p>
                                    <p class="widget-price h-bold">Giá xe 1469 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                            <li>
                                <a href="../san-pham/hyundai-ioniq5/index.html"><img class="loading lazy"
                                        src="../wp-content/uploads/2023/09/IONIQ5-home.png"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="Hyundai IONIQ 5"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="../san-pham/hyundai-ioniq5/index.html">Hyundai IONIQ
                                            5</a></p>
                                    <p class="widget-price h-bold">Giá xe 1300 Triệu</p>
                                </div>

                                <div class="clearfix"></div </li>
                        </ul>
                    </section>
                    <section id="recent-posts-2" class="widget widget_recent_entries">
                        <h2 class="widget-title">Khuyến mãi</h2>
                        <ul>

                        </ul>
                    </section>
                    <section id="recent-posts-2" class="widget widget_recent_entries">
                        <h2 class="widget-title">Tin tức</h2>
                        <ul>
                            <li>
                                <a href="../hyundai-santa-fe-all-new-ra-mat-tai-viet-nam/index.html"> </a>
                                <p class="title"><a
                                        href="../hyundai-santa-fe-all-new-ra-mat-tai-viet-nam/index.html">HYUNDAI
                                        SANTA FE ALL NEW RA MẮT TẠI VIỆT NAM</a></p>
                                <div class="clearfix"></div>
                            </li>
                            </article>
                            <li>
                                <a href="../chuc-mung-dinh-van-huu-ky-thuat-vien-sua-chua-c/index.html"><img
                                        width="480" height="320"
                                        src="../wp-content/uploads/2024/09/thi-tay-nghe-480x320.jpg"
                                        class="img-responsive wp-post-image" alt="" decoding="async"
                                        loading="lazy"
                                        srcset="https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe-480x320.jpg 480w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe-500x333.jpg 500w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe-693x462.jpg 693w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe-768x512.jpg 768w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe-1536x1024.jpg 1536w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/thi-tay-nghe.jpg 2048w"
                                        sizes="(max-width: 480px) 100vw, 480px" /> </a>
                                <p class="title"><a
                                        href="../chuc-mung-dinh-van-huu-ky-thuat-vien-sua-chua-c/index.html">Chúc
                                        mừng Đinh Văn Hữu, Kỹ thuật viên sửa chữa của Hyundai Thành Công Hải
                                        Phòng, đã xuất sắc giành GIẢI NHẤT Kỹ thuật viên sửa chữa chung xuất sắc
                                        tại hội thi tay nghề toàn quốc Hyundai Thành Công 2024!</a></p>
                                <div class="clearfix"></div>
                            </li>
                            </article>
                            <li>
                                <a href="../hyundai-hai-phong-to-chuc-chuong-trinh-tri-an/index.html"><img width="480"
                                        height="320"
                                        src="../wp-content/uploads/2024/09/z5852196771578_a57a5026f7933ae2e39477bfacb25c35-480x320.jpg"
                                        class="img-responsive wp-post-image" alt="" decoding="async"
                                        loading="lazy" /> </a>
                                <p class="title"><a
                                        href="../hyundai-hai-phong-to-chuc-chuong-trinh-tri-an/index.html">HYUNDAI
                                        HẢI PHÒNG TỔ CHỨC CHƯƠNG TRÌNH TRI ÂN</a></p>
                                <div class="clearfix"></div>
                            </li>
                            </article>
                            <li>
                                <a href="../hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/index.html"><img
                                        width="480" height="320"
                                        src="../wp-content/uploads/2024/09/t9.5-480x320.jpg"
                                        class="img-responsive wp-post-image" alt="" decoding="async"
                                        loading="lazy"
                                        srcset="https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5-480x320.jpg 480w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5-500x333.jpg 500w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5-693x462.jpg 693w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5-768x512.jpg 768w, https://hyundaihaiphong.vn/wp-content/uploads/2024/09/t9.5.jpg 1200w"
                                        sizes="(max-width: 480px) 100vw, 480px" /> </a>
                                <p class="title"><a
                                        href="../hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/index.html">Hyundai
                                        Accent tiếp tục là mẫu xe được ưa chuộng</a></p>
                                <div class="clearfix"></div>
                            </li>
                            </article>

                        </ul>
                    </section>
                </aside><!-- #secondary -->
            </div>
        </div>
    </div>
@endsection
