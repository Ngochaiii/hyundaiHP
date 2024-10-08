@extends('layouts.default_template_hyundai')

@section('content')
    <div class="container">
        <div class="row introduce margintb">
            <div class="col-sm-8  service-left content-thread">
                <h1 class="page-title"><span>{{ $category_name }}</span></h1>
                @foreach($records as $record)
                <article>
                    <div class="cover">
                        <a href="{{ route('news.detail', $record->alias) }}"><img width="500"
                                height="333" src="{{ $record->images }}"
                                class="img-responsive wp-post-image" alt="{{ $record->description }}" decoding="async" fetchpriority="high"/> </a>
                    </div>
                    <header>
                        <p class="title"><a
                                href="{{ route('news.detail', $record->alias) }}">{{$record->title}}</a></p>
                        <p class="summary">{{ $record->description }} </p>
                    </header>
                    <div class="clearfix"></div>
                </article>
                @endforeach



                <nav class="navigation posts-navigation" aria-label="Bài viết">
                    {{ $records->links('partials.pagination') }}
                </nav>
            </div><!-- end left -->
            <div class="col-sm-4 custom-primary service-right">
                <aside id="secondary" class="widget-area">
                    <section>
                        <div class="item-feature-box text-center feature-box-style-daidien">
                            <div class="feature-box-icon">
                                <p class="feature-box-link">
                                    <img class="img-responsive" alt=""
                                        src="../../../wp-content/uploads/2022/03/Dai-dien-kinh-doanh.jpg">
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
