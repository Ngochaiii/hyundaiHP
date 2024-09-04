<!-- Main Header-->
<div class="site-branding">
    <div class="quickcontact">
        <div class="container">
            <div class="row mt-3">
                <div class="col-xs-12 col-sm-8 header-logo-top">
                    <a href="https://hyundaihaiphong.vn" rel="home" class="hyundai-logo">
                        <img width="300"
                            src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/logo-hyundai-htv.png"
                            alt="Hyundai Hải Phòng">
                    </a>

                </div>
                <div class="col-xs-12 col-sm-4 text-right header-logo-top hidden-xs">
                    <p><img src="https://hyundaihaiphong.vn/wp-content/uploads/2022/03/logo-HHP-03.png"
                            alt="logo hyundai Hải Phòng"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="boxcar-header header-style-v1 header-default">
    <div class="header-inner">
        <div class="inner-container">
            <!-- Main box -->
            <div class="c-box">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo-inner">
                        <div class="layout-search">
                            <div class="right-box">
                                <div class="mobile-navigation">
                                    <a href="#nav-mobile" title="" style="color: black">
                                        <!-- <i class="fa fa-bars"></i> -->
                                        <svg width="22" height="11" viewbox="0 0 22 11" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="44" height="6" fill="black"></rect>
                                            <rect y="9" width="44" height="4" fill="black"></rect>
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Nav Box-->
                <div class="nav-out-bar">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li class="current-dropdown current"><span> <a href="{{ route('home.index') }}">Trang chủ
                                    </a></span></li>
                            <li class="current-dropdown"><span>Sản Phẩm <i class="fa-solid fa-angle-down"></i></span>
                                <div class="mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($products as $item => $product)
                                                <?php
                                                // Tách chuỗi thành mảng các đường dẫn ảnh
                                                $imageArray = explode(',', $product->images);

                                                // Lấy đường dẫn ảnh đầu tiên
                                                $firstImage = trim($imageArray[0]);
                                                ?>
                                                <div class="col-md-4">
                                                    <div class="col-md-4 d-flex flex-column align-items-center">
                                                        <figure style="height:80px;width:120px" class="image">
                                                            <a href="#"><img src="{{ asset($firstImage) }}" alt="Image of {{ $product->name }}"></a>
                                                        </figure>
                                                        <h6 class="text-center">{{ $product->title }}</h6>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="current-dropdown"><span>Dịch Vụ <i class="fa-solid fa-angle-down"></i></span>
                                <ul class="dropdown">
                                    <li><a href="inventory-page-single.html" title="">Ứng Dụng Hyundai Me</a></li>
                                    <li><a href="inventory-page-single-v2.html" title="">Trương Trình Dịch Vụ </a>
                                    </li>
                                    <li><a href="inventory-page-single-v3.html" title="">Bảo Hành</a></li>
                                    <li><a href="inventory-page-single-v4.html" title="">Phụ Tùng Chính Hiệu</a>
                                    </li>
                                    <li><a href="inventory-page-single-v5.html" title="">Đặt Lịch Hẹn Sửa Chữa</a>
                                    </li>
                                    <li><a href="inventory-page-single-v5.html" title="">Dịch Vụ Và Cứu Hộ </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="current-dropdown"><span>Tin Tức <i class="fa-solid fa-angle-down"></i></span>
                                <ul class="dropdown">
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="current-dropdown right-one"><span>Chăm Sóc Khách Hàng <i
                                        class="fa-solid fa-angle-down"></i></span>
                                <ul class="dropdown">
                                    <li class="nav-sub"><a href="#">Dashboard <i
                                                class="fa fa-angle-right"></i></a>
                                        <ul class="dropdown deep subnav-menu">
                                            <li><a href="dashboard.html" title="">Dashboard</a></li>
                                            <li><a href="my-listings.html" title="">My Listings</a></li>
                                            <li><a href="add-listings.html" title="">Add Listings</a></li>
                                            <li><a href="favorite.html" title="">Favorites</a></li>
                                            <li><a href="saved.html" title="">Saved Search</a></li>
                                            <li><a href="messages.html" title="">Messages</a></li>
                                            <li><a href="profile.html" title="">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Services</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="team-list.html">Team List</a></li>
                                    <li><a href="team-single.html">Team Single</a></li>
                                    <li><a href="dealer.html">Dealer List</a></li>
                                    <li><a href="dealer-single.html">Dealer Single</a></li>
                                    <li><a href="loan-calculator.html">Loan Calculator</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="ui-elements.html">UI Elements</a></li>

                                </ul>
                            </li>
                            <li class="current-dropdown right-one"><span> <a
                                        href="{{ route('marketing.activation') }}">Đăng Ký Lái Thử</a></li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="right-box">
                    <div class="mobile-navigation">
                        <a href="#nav-mobile" title="" style="color: black" id="okkk">
                            <!-- <i class="fa fa-bars"></i> -->
                            <svg width="22" height="11" viewbox="0 0 22 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="6" fill="black"></rect>
                                <rect y="9" width="22" height="2" fill="black"></rect>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu  -->
        </div>
    </div>

    <div id="nav-mobile"></div>
</header>
<!-- End header-section -->
