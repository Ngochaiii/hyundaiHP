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
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    @include('layouts.default.footer_js')
    @stack('js')
</body>

</html>
