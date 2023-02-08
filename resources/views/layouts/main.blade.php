<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HRPost @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/img/logo/logo-black.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/ui-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/elegentfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- back to top end -->

@section('header')
    @include('layouts.header')
@show

<div class="tp-sidebar-menu">
    <button class="sidebar-close"><i class="icon_close"></i></button>
    <div class="side-logo mb-30">
        <a href="{{ route('index') }}"><img src="{{ asset('/assets/img/logo/logo-black.png') }}" alt="logo"></a>
    </div>
    <div class="mobile-menu"></div>
    <div class="sidebar-info">
        <h4 class="mb-15">Contact Info</h4>
        <ul class="side_circle">
            <li>27 Division St, New York</li>
            <li><a href="tel:123456789">+1 800 123 456 78</a></li>
            <li><a href="mailto:epora@example.com">epora@example.com</a></li>
        </ul>
        <div class="side-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

@section('container')
    @yield('container')
@show

@section('footer')
    @include('layouts.footer')
@show

<!-- JS here -->
<script src="{{ asset('/assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('/assets/js/vendor/waypoints.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('/assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('/assets/js/slick.js') }}"></script>
<script src="{{ asset('/assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('/assets/js/parallax.js') }}"></script>
<script src="{{ asset('/assets/js/backtotop.js') }}"></script>
<script src="{{ asset('/assets/js/nice-select.js') }}"></script>
<script src="{{ asset('/assets/js/counterup.js') }}"></script>
<script src="{{ asset('/assets/js/wow.js') }}"></script>
<script src="{{ asset('/assets/js/isotope-pkgd.js') }}"></script>
<script src="{{ asset('/assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('/assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
