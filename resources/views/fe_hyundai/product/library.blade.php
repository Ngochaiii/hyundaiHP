<!-- start Car exterior -->
@if (isset($detail_product->library_slide))
    <div class="features-sec mb-5">
        <h4 class="title fw-bold text-primary">Thư viện</h4>
        <div class="row">
            <div class="col-md-12">
                <div id="custCarousel" class="carousel slide w-100" data-ride="carousel" align="center">
                    <!-- slides -->
                    @php
                        // Chuyển đổi chuỗi thành mảng các đường dẫn ảnh
                        $image_paths = explode(',', $detail_product->library_slide);
                    @endphp

                    <div class="carousel-inner">
                        @foreach ($image_paths as $index => $path)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($path) }}" alt="Slide Image">
                            </div>
                        @endforeach
                    </div>

                    <!-- Left right -->
                    <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                    <!-- Thumbnails -->
                    <ol class="carousel-indicators list-inline">
                        @foreach ($image_paths as $index => $path)
                            <li class="list-inline-item {{ $index == 0 ? 'active' : '' }}">
                                <a id="carousel-selector-{{ $index }}" class="selected"
                                    data-slide-to="{{ $index }}" data-target="#custCarousel">
                                    <img src="{{ asset($path) }}" class="img-fluid">
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- libary -->
<!-- start Car exterior -->
<div class="features-sec mb-5">
    <h4 class="title fw-bold text-primary">Ngoại thất</h4>

    @if (isset($detail_product->exterior_slide) && !empty($detail_product->exterior_slide))
        @php
            $exterior_slides = explode(',', $detail_product->exterior_slide);
        @endphp

        <div class="card-raised card-carousel">
            <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    @foreach ($exterior_slides as $index => $slide)
                        <div class="carousel-item {{ $index == 0 ? 'active carousel-item-left' : '' }}">
                            <img class="d-block w-100" src="{{ asset($slide) }}" alt="Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true">
                    <i class="fa fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true">
                    <i class="fa fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @elseif (isset($detail_product->exterior_content) && !empty($detail_product->exterior_content))
        <div class="description-sec d-flex flex-column align-items-center justify-content-center text-center">
            {!! $detail_product->exterior_content !!}
        </div>
    @endif
</div>

<div class="features-sec mb-5">
    <h4 class="title fw-bold text-primary">Nội thất</h4>

    @if (isset($detail_product->interior_slide) && !empty($detail_product->interior_slide))
        @php
            // Chuyển đổi chuỗi thành mảng các đường dẫn ảnh
            $interior_slides = explode(',', $detail_product->interior_slide);
        @endphp

        <div class="card-raised card-carousel">
            <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    @foreach ($interior_slides as $index => $slide)
                        <div class="carousel-item {{ $index == 0 ? 'active carousel-item-left' : '' }}">
                            <img class="d-block w-100" src="{{ asset($slide) }}" alt="Slide {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true">
                    <i class="fa fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true">
                    <i class="fa fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @elseif (isset($detail_product->interior_content) && !empty($detail_product->interior_content))
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            {!! $detail_product->interior_content !!}
        </div>
    @endif
</div>

@if (isset($detail_product->operate_slide) && !empty($detail_product->operate_slide))
    <div class="features-sec mb-5">
        <h4 class="title fw-bold text-primary">Vận hành</h4>
        <div class="row">
            <div class="col-md-12">
                @php
                    // Chuyển đổi chuỗi thành mảng các đường dẫn ảnh
                    $operate_slides = explode(',', $detail_product->operate_slide);
                @endphp

                <div class="card-raised card-carousel">
                    <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            @foreach ($operate_slides as $index => $slide)
                                <div class="carousel-item {{ $index == 0 ? 'active carousel-item-left' : '' }}">
                                    <img class="d-block w-100" src="{{ asset($slide) }}" alt="Slide {{ $index + 1 }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true">
                            <i class="fa fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true">
                            <i class="fa fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                @if (isset($detail_product->operate_content) && !empty($detail_product->operate_content))
                    <div class="mt-4">
                        {!! $detail_product->operate_content !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@elseif (isset($detail_product->operate_content) && !empty($detail_product->operate_content))
    <div class="features-sec mb-5">
        <h4 class="title fw-bold text-primary">Vận hành</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column align-items-center justify-content-center text-center">
                    {!! $detail_product->operate_content !!}
                </div>
            </div>
        </div>
    </div>
@endif

@if (isset($detail_product->safe_slide) && !empty($detail_product->safe_slide))
    <div class="features-sec mb-5">
        <h4 class="title fw-bold text-primary">An Toàn</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="text_play d-flex flex-column align-items-center justify-content-center text-center">
                    <h2 class="fw-bold">An Toàn vượt chội</h2>
                </div>
                @php
                    // Chuyển đổi chuỗi thành mảng các đường dẫn ảnh
                    $safe_slides = explode(',', $detail_product->safe_slide);
                @endphp

                <div class="card-raised card-carousel">
                    <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            @foreach ($safe_slides as $index => $slide)
                                <div class="carousel-item {{ $index == 0 ? 'active carousel-item-left' : '' }}">
                                    <img class="d-block w-100" src="{{ asset($slide) }}"
                                        alt="Slide {{ $index + 1 }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev"
                            data-abc="true">
                            <i class="fa fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next"
                            data-abc="true">
                            <i class="fa fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if (isset($detail_product->safe_content) && !empty($detail_product->safe_content))
    <div class="features-sec mb-5">
        <div class="row">
            <div class="safe-content d-flex flex-column align-items-center justify-content-center text-center">
                {!! $detail_product->safe_content !!}
            </div>
        </div>
    </div>
@endif

<!-- libary -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    .slide {
        width: 100%;
        height: 100% !important;
    }


    .carousel-inner img {
        width: 100%;
        height: 100%;
    }

    #custCarousel .carousel-indicators {
        position: static;
        margin-top: 20px;
    }

    #custCarousel .carousel-indicators>li {
        width: 100px;
    }

    #custCarousel .carousel-indicators li img {
        display: block;
        opacity: 0.1;
    }

    #custCarousel .carousel-indicators li.active img {
        opacity: 1;
    }

    #custCarousel .carousel-indicators li:hover img {
        opacity: 0.25;
    }

    .carousel-item img {

        width: 100%;
    }

    .carousel-item {
        transition: transform 0.2s ease-in-out;
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block;
    }

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        opacity: 0;
        transform: translateX(0%);
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
