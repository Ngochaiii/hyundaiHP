<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $siteTitle ?? 'Hyundai Hải Phòng - Đại lý Hyundai Hải Phòng - Hotline 0906 026 299' }}</title>

    <link rel="shortcut icon" href="favicons/8705-images-favicon.png" type="image/x-icon">
    <link rel="icon" href="favicons/2446-images-favicon.png" type="image/x-icon">
    @include('layouts.default.header_css')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @stack('css')
</head>

<body>
    <div class="boxcar-wrapper">
        @include('layouts.default.sidebar')
        @include('layouts.default.header')
        @yield('content')
        @include('layouts.default.footer')
    </div>
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <!-- Biểu tượng góc lên -->
        <span class="bi bi-chevron-up"></span>
    </div>
    <div class="social-icons">
        <!-- Messenger icon -->
        <a href="https://m.me/yourmessengerlink" class="icon messenger" target="_blank">
            <i class="bi bi-messenger"></i>
        </a>

        <!-- Zalo icon -->
        <a href="https://zalo.me/yourzalolink" class="icon zalo" target="_blank">
            <img src="{{asset('Fe_Hyundai/images/zalo-2.png')}}" alt="Zalo">
        </a>
    </div>


    @include('layouts.default.footer_js')
    @stack('js')
    <style>
        /* Style chung cho cả div chứa 2 icon */
        .social-icons {
            position: fixed;
            bottom: 150px;
            /* Vị trí cố định phía dưới */
            right: 20px;
            /* Căn phải màn hình */
            display: flex;
            flex-direction: column;
            gap: 10px;
            /* Khoảng cách giữa 2 icon */
            z-index: 1000;
            /* Hiển thị trên các phần tử khác */
        }

        /* Style chung cho icon Messenger và Zalo */
        .social-icons .icon {
            width: 60px;
            height: 60px;
            background-color: #4b9de1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-icons .icon img {
            width: 50%;
            /* Kích thước biểu tượng Zalo */
        }

        .social-icons .icon i {
            font-size: 30px;
            color: white;
            /* Màu biểu tượng Messenger */
        }

        /* Hiệu ứng phóng to khi hover */
        .social-icons .icon:hover {
            transform: scale(1.1);
        }

        /* Style riêng cho Messenger */
        .social-icons .icon.messenger {
            background-color: #0084ff;
            /* Màu nền Messenger */
        }

        /* Style riêng cho Zalo */
        .social-icons .icon.zalo {
            background-color: #0172e1;
            /* Màu nền Zalo */
        }
    </style>
</body>

</html>
