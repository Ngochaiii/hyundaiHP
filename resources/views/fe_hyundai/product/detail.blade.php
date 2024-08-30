@extends('layouts.default')

@section('content')
    <!-- inventory-section -->
    <section class="inventory-section pb-0 layout-radius">
        <div class="boxcar-container">
            <div class="boxcar-title-three">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><span></span></li>
                </ul>
                <h2>{{ $detail_product->title }}</h2>
                <div class="text">2.0 D5 PowerPulse Momentum 5dr AWD Geartronic Estate</div>
                <ul class="spectes-list">
                    <li><span><img src="{{ asset('Fe_Hyundai/assets/images/spec1-1.svg') }}">2023</span></li>
                    <li><span><img src="{{ asset('Fe_Hyundai/assets/images/spec1-2.svg') }}">35,000 miles</span></li>
                    <li><span><img src="{{ asset('Fe_Hyundai/assets/images/spec1-3.svg') }}">Automatic</span></li>
                    <li><span><img src="{{ asset('Fe_Hyundai/assets/images/spec1-4.svg') }}">Diesel</span></li>
                </ul>
                <div class="content-box">
                    <h3 class="title">{{ number_format($detail_product->price / 1, 0, ',', '.') }} Vnđ</h3>
                </div>
            </div>
            <div class="gallery-sec">
                <div class="row">
                    <div class="image-column item1 col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ asset(trim($images[0])) }}" data-fancybox="gallery">
                                        <img src="{{ asset(trim($images[0])) }}" alt="Image of {{ $detail_product->name }}">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="row">
                            @foreach ($images as $index => $image)
                                <div class="image-column-two item{{ $index + 2 }} col-6">
                                    <div class="inner-column">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ asset(trim($image)) }}" data-fancybox="gallery"
                                                    class="fancybox">
                                                    <img src="{{ asset(trim($image)) }}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="inspection-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- overview-sec -->
                        <div class="overview-sec">
                            <h4 class="title">Tổng quan về thông số xe</h4>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Hiển thị bảng từ database -->
                                    <div class="table-responsive">
                                        {!! $detail_product->specifications !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- description-sec -->
                        <div
                            class="description-sec d-flex flex-column align-items-center justify-content-center text-center">
                            {!! $detail_product->content !!}
                        </div>

                        @include('fe_hyundai/product/library')

                        <div class="location-box">
                            <h4 class="title">Location</h4>
                            <div class="text"> Địa chỉ: Shoroom 3s 742 Nguyễn Văn Linh, Lê Chân, Hải Phòng
                                Mở cửa 08:00 - 17:00
                            </div>
                            <a href="#" class="brand-btn">Get Directions<svg xmlns="http://www.w3.org/2000/svg"
                                    width="15" height="14" viewBox="0 0 15 14" fill="none">
                                    <g clip-path="url(#clip0_881_14440)">
                                        <path
                                            d="M14.1111 0H5.55558C5.34062 0 5.16668 0.173943 5.16668 0.388901C5.16668 0.603859 5.34062 0.777802 5.55558 0.777802H13.1723L0.613941 13.3362C0.46202 13.4881 0.46202 13.7342 0.613941 13.8861C0.689884 13.962 0.789415 14 0.88891 14C0.988405 14 1.0879 13.962 1.16388 13.8861L13.7222 1.3277V8.94447C13.7222 9.15943 13.8962 9.33337 14.1111 9.33337C14.3261 9.33337 14.5 9.15943 14.5 8.94447V0.388901C14.5 0.173943 14.3261 0 14.1111 0Z"
                                            fill="#405FF2"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_881_14440">
                                            <rect width="14" height="14" fill="white"
                                                transform="translate(0.5)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <div class="goole-iframe">
                                <iframe
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                            </div>
                        </div>
                        <div class="form-box">
                            <h4 class="title">Financing Calculator</h4>
                            <form class="row">
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Vehicle Price ($)</label>
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>$25.000</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>$25.000</li>
                                                <li>$25.000</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Interest rate (%)</label>
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>4</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>4</li>
                                                <li>4</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Period (month)</label>
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>36</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>36</li>
                                                <li>36</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_boxes">
                                        <label>Down Payment ($)</label>
                                        <div class="drop-menu">
                                            <div class="select">
                                                <span>4000</span>
                                            </div>
                                            <input type="hidden" name="gender">
                                            <ul class="dropdown" style="display: none;">
                                                <li>4000</li>
                                                <li>4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-submit">
                                        <button type="submit" class="theme-btn">Calculate<img
                                                src="{{ asset('Fe_Hyundai/assets/images/arrow.svg') }}" alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <ul class="form-list">
                                <li><span>Monthly Payment</span>$687.70</li>
                                <li><span>Total Amount to Pay</span>$687.70</li>
                                <li><span>Total Interest Payment</span>$687.70</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="side-bar-column style-1 col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-box">
                            <div class="content-box">
                                <h6 class="title">{{ $detail_product->title }}</h6>
                                <ul class="contact-list">
                                    <li><a href="#">
                                            <div class="image-box"><img
                                                    src="{{ asset('Fe_Hyundai/assets/images/phone1-1.svg') }}"></div> Địa
                                            chỉ
                                        </a></li>
                                    <li><a href="#">
                                            <div class="image-box"><img
                                                    src="{{ asset('Fe_Hyundai/assets/images/phone1-2.svg') }}"></div>+76
                                            956 039 967
                                        </a></li>
                                </ul>
                                <div class="btn-box">
                                    <button class="side-btn" id="openModalBtn">
                                        Yêu cầu Tư Vấn
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_881_7563)">
                                                <path
                                                    d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_881_7563">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <button class="side-btn two" id="openNewModalBtn">Nhận thông tin mới
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14" fill="none">
                                            <g clip-path="url(#clip0_881_8744)">
                                                <path
                                                    d="M13.6111 0H5.05558C4.84062 0 4.66668 0.173943 4.66668 0.388901C4.66668 0.603859 4.84062 0.777802 5.05558 0.777802H12.6723L0.113941 13.3362C-0.0379805 13.4881 -0.0379805 13.7342 0.113941 13.8861C0.189884 13.962 0.289415 14 0.38891 14C0.488405 14 0.5879 13.962 0.663879 13.8861L13.2222 1.3277V8.94447C13.2222 9.15943 13.3962 9.33337 13.6111 9.33337C13.8261 9.33337 14 9.15943 14 8.94447V0.388901C14 0.173943 13.8261 0 13.6111 0Z"
                                                    fill="#60C961"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_881_8744">
                                                    <rect width="14" height="14" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cars-section-three -->
        <div class="cars-section-three">
            <div class="boxcar-container">
                <div class="boxcar-title wow fadeInUp">
                    <h2>Related Listings</h2>
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

                <div class="row car-slider-three" data-preview="4">
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-1.jpg') }}" alt=""></a>
                                </figure>
                                <span>Low Mileage</span>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-2.jpg') }}" alt=""></a>
                                </figure>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box two">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-3.jpg') }}" alt=""></a>
                                </figure>
                                <span>Great Price</span>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-4.jpg') }}" alt=""></a>
                                </figure>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-1.jpg') }}" alt=""></a>
                                </figure>
                                <span>Low Mileage</span>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-2.jpg') }}" alt=""></a>
                                </figure>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box two">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-3.jpg') }}" alt=""></a>
                                </figure>
                                <span>Great Price</span>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                    <!-- car-block-three -->
                    <div class="car-block-three col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('Fe_Hyundai/assets/images/shop3-4.jpg') }}" alt=""></a>
                                </figure>
                                <a href="#" title="" class="icon-box">
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
                                <h6 class="title"><a href="#">Mercedes-Benz, C Class</a></h6>
                                <div class="text">2023 C300e AMG Line Night Ed Premiu...</div>
                                <ul>
                                    <li><i class="flaticon-gasoline-pump"></i>72,925 miles</li>
                                    <li><i class="flaticon-speedometer"></i>Petrol</li>
                                    <li><i class="flaticon-gearbox"></i>Automatic</li>
                                </ul>
                                <div class="btn-box">
                                    <span>$789</span>
                                    <small>$399</small>
                                    <a href="#" class="details">View Details<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14" height="14" viewBox="0 0 14 14" fill="none">
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
                </div>
            </div>
        </div>
        <!-- End shop section two -->
        @include('fe_hyundai/modal/yeucautuvan')
        @include('fe_hyundai/modal/dangkylaithu')
    </section>
    <!-- End inventory-section -->
@endsection
@push('css')
@endpush
@push('js')
@endpush
