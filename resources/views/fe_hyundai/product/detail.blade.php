@extends('layouts.default_template_hyundai')

@section('content')
    {!! $product->content !!}

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
        jQuery(document).ready(function(t) {
            var e = t("#big"),
                n = t("#thumbs"),
                d = !1;
            e.owlCarousel({
                items: 1,
                slideSpeed: 5e3,
                nav: !0,
                autoplay: !1,
                dots: !1,
                loop: !0,
                responsiveRefreshRate: 200,
                navText: ["", ""]
            }).on("changed.owl.carousel", function(t) {
                var e = t.item.count - 1,
                    i = Math.round(t.item.index - t.item.count / 2 - .5);
                i < 0 && (i = e);
                i > e && (i = 0);
                n.find(".owl-item").removeClass("current").eq(i).addClass("current");
                var d = n.find(".owl-item.active").length - 1,
                    a = n.find(".owl-item.active").first().index(),
                    r = n.find(".owl-item.active").last().index();
                i > r && n.trigger("to.owl.carousel", [i, 100, !0]);
                i < a && n.trigger("to.owl.carousel", [i - d, 100, !0])
            }), n.on("initialized.owl.carousel", function() {
                n.find(".owl-item").eq(0).addClass("current")
            }).owlCarousel({
                dots: !1,
                nav: !0,
                navText: ['<i class="fa fa-angle-left owl-prev-next-product" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right owl-prev-next-product" aria-hidden="true"></i>'
                ],
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: 4,
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 5
                    }
                }
            }).on("changed.owl.carousel", function(t) {
                if (d) {
                    var i = t.item.index;
                    e.data("owl.carousel").to(i, 100, !0)
                }
            }), n.on("click", ".owl-item", function() {
                var i = t(this).index();
                console.log(i), e.trigger("to.owl.carousel", [i, 200, !0])
            }), t(".lable-car").first().addClass("color-select"), t(".lable-car").click(function() {
                var i = t(this).attr("data-item-car");
                t(".item-color").removeClass("color-select"), t(this).addClass("color-select"), e.trigger(
                    "to.owl.carousel", [i, 200, !0])
            }), t(window).on("scroll", function() {
                t(window).scrollTop() >= t(".site-content").offset().top + t(".site-content")
                    .outerHeight() - window.innerHeight ? t(".nav__product").css("display", "none") : t(
                        ".nav__product ").css("display", "block")
            });
            var a = 10,
                r = 1;
            price = t(".price-all-single").attr("data-price"), name_car = t(".car-title").text(), t(
                "#select-percent-pay").change(function() {
                a = t(this).val()
            }), t("#year-pay").change(function() {
                r = t(this).val()
            }), toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"), t("#calculate-single").click(function() {
                var e = price / 100 * a,
                    n = e / (12 * r),
                    d = e / 100 * .625,
                    o = t("<tr>"),
                    l = 0;
                for (i = 1; i <= 12 * r; i++) {
                    var s = n + d;
                    t(window).width() < 767 ? o.append(
                            '<div class="uoc-tinh-tra-gop-item"><table><tbody><tr><td>Kỳ ' + i +
                            "</td><td></td></tr><tr><td>Tổng số gốc còn nợ</td><td>" + parseFloat(e, 10)
                            .toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                            "</td></tr><tr><td>Tiền gốc trả trong tháng</td><td>" + parseFloat(n, 10)
                            .toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                            "</td></tr><tr><td>Tiền lãi trong tháng <span>(tính trên gốc còn nợ)</span></td><td>" +
                            parseFloat(d, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                            "</td></tr><tr><td>Tổng số tiền thanh toán hàng tháng</td><td>" + parseFloat(s,
                                10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                            "</td></tr></table></tbody></div>") : o.append("<tr><td>" + i + "</td><td>" +
                            parseFloat(e, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                            "</td><td>" + parseFloat(n, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,")
                            .toString() + "</td><td>" + parseFloat(d, 10).toFixed(2).replace(
                                /(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td><td>" + parseFloat(s, 10)
                            .toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + "</td></tr>"),
                        l += d, d = (e -= n) / 100 * .625
                }
                t(".notification").html("Bạn chọn mua xe <span>" + name_car +
                    "</span><div> với số tiền vay là: <span>" + a + "</span>% tương đương:<strong> (" +
                    (price / 100 * a).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
                    " VND) </strong>giá trị xe, trong thời gian là <span>" + r +
                    "</span> năm </div><div>Lãi suất ngân hàng là<span> 7,5%/năm</span></div>"), t(
                    window).width() < 767 ? t("#result-is-single").html(o.html()) : t(
                    "#result-is-single").html(
                    "<table><tbody><tr><th>Kỳ</th><th>Tổng dư nợ</th><th>Tiền gốc</th><th>Tiền lãi</th><th>Tổng tiền</th></tr>" +
                    o.html() + '<tr style="font-weight:bold"><td></td><td>Tổng trả góp</td><td>' + (
                        price / 100 * a).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +
                    "</td><td>" + parseFloat(l, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,")
                    .toString() + '<td style="color:#f00">' + parseFloat(price / 100 * a + l, 10)
                    .toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() +
                    " VND</td></tr></tbody></table>")
            }), t(".owl-related-prd").owlCarousel({
                slideSpeed: 5e3,
                nav: !0,
                autoplay: !0,
                dots: !0,
                loop: !0,
                margin: 10,
                navText: ["", ""],
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function(e) {
            window.onload = function() {
                if (e(window).width() >= 1024 && window.innerWidth >= 1e3 && 0 != e("body").find(".tieudiem")
                    .length) {
                    var o = e("#sidebar").offset().top - parseFloat(e("#sidebar").css("marginTop").replace(
                            /auto/, 0)),
                        t = e(".footer-slider-wrap").offset().top - parseFloat(e(".footer-slider-wrap").css(
                            "marginTop").replace(/auto/, 0)),
                        i = t - e("#sidebar").outerHeight();
                    e(window).scroll(function() {
                        "use strict";
                        var t = e(this).scrollTop();
                        t + 40 > o ? t + 40 < i ? e("#sidebar").addClass("fixed").removeAttr("style") :
                            e("#sidebar").removeClass("fixed").css({
                                position: "relative",
                                top: i - o - 10 + "px"
                            }) : e("#sidebar").removeClass("fixed")
                    });
                    var r = e(".tieudiem"),
                        s = e(".tieudiem").offset().top;
                    ! function o() {
                        r.offset().top != s && (s = e(".tieudiem").offset().top, t = e(".footer-slider-wrap")
                            .offset().top - parseFloat(e(".footer-slider-wrap").css("marginTop").replace(
                                /auto/, 0)), i = t - e("#sidebar").outerHeight(), window.console.log(
                                "changed")), setTimeout(o, 1e3)
                    }()
                }
            }
        });
    </script>
@endsection
