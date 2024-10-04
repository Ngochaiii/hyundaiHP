@extends('layouts.default_template_hyundai')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-md-9">
                <!-- Contact 6 - Bootstrap Brain Component -->
                <div class="content mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border border-dark rounded shadow-sm overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="row gy-3 gy-md-4 gy-lg-0">
                                        <div class="col-12 col-lg-6 bsb-overlay background-position-center background-size-cover"
                                            style="--bsb-overlay-opacity: 0.7; background-image: url('./assets/img/contact-img-1.webp');">
                                            <div class="row align-items-lg-center justify-content-center h-100">
                                                <div class="col-11 col-xl-10">
                                                    <div class="contact-info-wrapper py-4 py-xl-5">
                                                        <h2 class="h1 mb-3 text-light">HÃY ĐĂNG KÝ</h2>
                                                        <p class="lead fs-4 text-light opacity-75 mb-4 mb-xxl-5">Bạn đang tìm kiếm cơ hội trải nghiệm lái thử xe? Nếu bạn quan tâm và muốn đăng ký, hãy liên hệ với chúng tôi qua một trong những cách sau đây.</p>
                                                        <div class="d-flex mb-4 mb-xxl-5">
                                                            <div class="me-4 text-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                    height="32" fill="currentColor" class="bi bi-geo"
                                                                    viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h4 class="mb-3 text-light">Địa chỉ</h4>
                                                                <address class="mb-0 text-light opacity-75"> Địa chỉ: Shoroom 3s 742 Nguyễn Văn Linh, Lê Chân, Hải Phòng</address>
                                                                <address class="mb-0 text-light opacity-75"> Địa chỉ: Shoroom 1s 9/10B Lê Hồng Phong, Lê Chân, Hải Phòng</address>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4 mb-xxl-5">
                                                            <div class="col-12 col-xxl-6">
                                                                <div class="d-flex mb-4 mb-xxl-0">
                                                                    <div class="me-4 text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="32" height="32"
                                                                            fill="currentColor"
                                                                            class="bi bi-telephone-outbound"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="mb-3 text-light">Phone</h4>
                                                                        <p class="mb-0">
                                                                            <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none"
                                                                                href="tel:+0906026299">0906026299</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-xxl-6">
                                                                <div class="d-flex mb-0">
                                                                    <div class="me-4 text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="32" height="32"
                                                                            fill="currentColor" class="bi bi-envelope-at"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                                            <path
                                                                                d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="mb-3 text-light">E-Mail</h4>
                                                                        <p class="mb-0">
                                                                            <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none"
                                                                                href="mailto:info@hyundaihaiphong.vn">info@hyundaihaiphong.vn</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="me-4 text-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                    height="32" fill="currentColor" class="bi bi-alarm"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                                                    <path
                                                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h4 class="mb-3 text-light">Giờ mở cửa</h4>
                                                                <div class="d-flex mb-1">
                                                                    <p class="text-light fw-bold mb-0 me-5">Thứ hai  - Thứ Bảy</p>
                                                                    <p class="text-light opacity-75 mb-0">08:00 - 17:00</p>
                                                                </div>
                                                                {{-- <div class="d-flex">
                                                                    <p class="text-light fw-bold mb-0 me-5">Sat - Sun</p>
                                                                    <p class="text-light opacity-75 mb-0">9am - 2pm</p>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="row align-items-lg-center h-100">
                                                <div class="col-12">
                                                    <form action="{{route('regis.drive2')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modal_title" value="Tiêu đề Modal: Đăng ký lái thử ">
                                                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                                            <div class="col-12">
                                                                <label for="fullname" class="form-label">Họ Tên  <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="fullname"
                                                                    name="name" value="" required>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <label for="email" class="form-label">Email <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-envelope"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                        </svg>
                                                                    </span>
                                                                    <input type="email" class="form-control"
                                                                        id="email" name="email" value=""
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <label for="phone" class="form-label">Số điện thoại</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-telephone"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                        </svg>
                                                                    </span>
                                                                    <input type="tel" class="form-control"
                                                                        id="phone" name="phone" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="subject" class="form-label">mẫu xe <span
                                                                        class="text-danger">*</span></label>
                                                                        <select class="form-control" id="carSelect" name="car" required>
                                                                            <option value="">-- Chọn loại xe --</option>
                                                                            @foreach($all_cars as $car)
                                                                                <option value="{{ $car->id }}">{{ $car->title }}</option>
                                                                            @endforeach
                                                                        </select>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-grid">
                                                                    <button class="btn btn-primary btn-lg"
                                                                        type="submit">Send Message</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-md-3 mb-3">
                <div class="profile-card text-center">
                    <div class="profile-image">
                        <img src="path_to_image.jpg" alt="Business Manager">
                    </div>
                    <h3>Phú trách kinh doanh</h3>
                    <ul class="list-unstyled icon-list">
                        <li><i class="fas fa-check-circle"></i>Chúng tôi luôn cam kết mang lại mức giá ưu đãi nhất cho quý
                            khách với thời gian giao xe nhanh nhất.</li>
                        <li><i class="fas fa-check-circle"></i>Chúng tôi luôn cập nhật sớm nhất các chương trình khuyến mãi
                            của hàng và đại lý.</li>
                        <li><i class="fas fa-check-circle"></i>Hỗ trợ mua xe trả góp lãi suất thấp & tối ưu tài chính.</li>
                    </ul>
                    <a href="tel:0906026299" class="btn btn-primary call-button">
                        <i class="fas fa-phone-alt"></i> 0906 026 299
                    </a>
                </div>
                <div class="featured-products">
                    <h4 class="featured-title">Sản phẩm nổi bật</h4>
                    @foreach ($products as $item => $product)
                    <?php
                    // Tách chuỗi thành mảng các đường dẫn ảnh
                    $imageArray = explode(',', $product->images);

                    // Lấy đường dẫn ảnh đầu tiên
                    $firstImage = trim($imageArray[0]);
                    ?>
                    <div class="product-item">
                        <div class="product-image">
                            <figure style="height:80px;width:120px" class="image">
                                <a href="#"><img src="{{ asset($firstImage) }}" alt="Image of {{ $product->title }}"></a>
                            </figure>
                        </div>
                        <div class="product-details">
                            <h6>{{ $product->title }}</h6>
                            <span class="product-price">{{ $product->price }}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .profile-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-image img {
            width: 120px;
            /* Adjust size as needed */
            height: 120px;
            /* Adjust size as needed */
            border-radius: 50%;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-card h3 {
            margin-bottom: 15px;
        }

        .icon-list li {
            margin-bottom: 10px;
        }

        .icon-list li i {
            color: #007BFF;
            /* Bootstrap primary color */
            margin-right: 8px;
        }

        .call-button {
            margin-top: 15px;
        }
    </style>
    <style>
        .featured-products {
            border: 1px solid #ddd;
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .featured-title {
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
            /* Khoảng cách từ chữ đến dấu gạch */
        }

        .featured-title::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 1px;
            /* Độ dày của dấu gạch */
            background-color: black;
            /* Màu của dấu gạch */
            width: 100%;
            /* Chiều rộng của dấu gạch */
        }

        .product-item {
            display: flex;
\            margin-bottom: 15px;
        }

        .product-image img {
            width: 60px;
            height: auto;
            margin-right: 15px;
        }

        .product-details {
            font-size: 14px;
        }

        .product-price {
            color: #007BFF;
            /* Bootstrap primary color */
            font-weight: bold;
        }
    </style>
@endpush
