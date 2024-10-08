@extends('layouts.default_template_hyundai')

@section('content')
    <div class="container content-single">
        <div class="row">
            <div class="col-md-8 sigle-post-cus">
                <div id="content-single-post">
                    <div class="product-single-title-cus">
                        <h1 class="title entry-title ">{{ $record->title }}</h1>
                        <div class="entry-meta"><span class="byline"> by <span class="author vcard"><a class="url fn n"
                                        href="#">admin</a></span></span> |<span
                                class="count-view-post"><i class="fa fa-user" aria-hidden="true"></i>Lượt xem: {{ $record->view_count }}</span>
                        </div><!-- .entry-meta -->
                    </div>
                    <div id="detail_product">
                        {!! $record->content !!}
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
                                onclick="javascript:window.open('https://twitter.com/share?text=Hyundai%20Accent%20ti%e1%ba%bfp%20t%e1%bb%a5c%20l%c3%a0%20m%e1%ba%abu%20xe%20%c4%91%c6%b0%e1%bb%a3c%20%c6%b0a%20chu%e1%bb%99ng&amp;url=[https://hyundaihaiphong.vn/hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/]','Twitter-dialog','width=626,height=436'); return false;"></i></span>
                        <span class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true" alt="Share on Pinterest"
                                onclick="javascript:window.open('http://pinterest.com/pin/create/link/?url=https://hyundaihaiphong.vn/hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/&amp;description=Hyundai%20Accent%20ti%e1%ba%bfp%20t%e1%bb%a5c%20l%c3%a0%20m%e1%ba%abu%20xe%20%c4%91%c6%b0%e1%bb%a3c%20%c6%b0a%20chu%e1%bb%99ng','pin-dialog','width=626,height=436'); return false;"></i></span>
                        <span class="linkin"><i class="fa fa-linkedin" aria-hidden="true"
                                onclick="javascript:window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url=https://hyundaihaiphong.vn/hyundai-accent-tiep-tuc-la-mau-xe-duoc-ua-chuong/&amp;title=Hyundai%20Accent%20ti%e1%ba%bfp%20t%e1%bb%a5c%20l%c3%a0%20m%e1%ba%abu%20xe%20%c4%91%c6%b0%e1%bb%a3c%20%c6%b0a%20chu%e1%bb%99ng','LinkedIn','width=626,height=436'); return false;"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="dn-post-relate post-related-wrapper">
                    <h4 class="title-inan">Bài viết liên Quan</h4>
                    @foreach($related_news as $related_new)
                    <div class="col-md-4 col-xs-6 post-related">
                        <div class="cover"><a href='{{ route('news.detail', $related_new->alias) }}'><img
                                    class="loading lazy"
                                    data-src="{{ $related_new->images }}"
                                    src="../wp-content/themes/hyundaiquangnam/includes/img/pixel.html"
                                    alt="{{ $related_new->description }}"></a>
                        </div>
                        <div class="post-related-title">
                            <h4><a href="{{ route('news.detail', $related_new->alias) }}">{{ $related_new->description }}</a></h4>
                        </div>
                    </div>
                    @endforeach

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
                                        Chúng tôi luôn cam kết mang lại mức giá ưu đãi nhất cho quý khách với thời gian giao
                                        xe nhanh nhất.
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        Chúng tôi luôn cập nhật sớm nhất các chương trình khuyến mãi của hãng và đại lý.
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
                            @foreach($products as $product)
                            <li>
                                <a href="{{ route('product.detail', $product->alias) }}"><img class="loading lazy"
                                        src="{{ $product->getImage() }}"
                                        src="../wp-content/themes/hyundai/includes/img/pixel.html"
                                        alt="{{ $product->title }}"></a></a>
                                <div class="detail-car-widget">
                                    <p class="title h-bold"><a href="{{ route('product.detail', $product->alias) }}">{{ $product->title }}</a>
                                    </p>
                                    <p class="widget-price h-bold">Giá xe {{ $product->price }} Triệu</p>
                                </div>

                                <div class="clearfix"></div>
                            </li>
                            @endforeach

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
                            @foreach($featured_news as $featured_new)
                            <li>
                                <a href="{{ route('news.detail', $featured_new->alias) }}"><img
                                        width="480" height="320"
                                        src="{{ $featured_new->images }}"
                                        class="img-responsive wp-post-image" alt="" decoding="async"
                                        loading="lazy"/> </a>
                                <p class="title"><a
                                        href="{{ route('news.detail', $featured_new->alias) }}">{{ $featured_new->title }}</a></p>
                                <div class="clearfix"></div>
                            </li>
                            @endforeach


                        </ul>
                    </section>
                </aside><!-- #secondary -->
            </div>
        </div>
    </div>
@endsection
