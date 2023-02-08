<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Epora - Online Courses & Education HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/img/favicon.png') }}">

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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
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
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header class="header_white_area d-none d-xl-block">
    <div class="header__area pt-40 pb-5">
        <div class="main-header" id="header-sticky">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-5 col-6">
                        <div class="logo-area d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('/assets/img/logo/logo-black.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="header-cat-menu ml-40">
                                <nav>
                                    <ul>
                                        <li><a href="course-grid.html"> Categorie <span><i class="arrow_carrot-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="course-grid.html">Bangla Medium</a></li>
                                                <li><a href="course-grid.html">English Medium</a></li>
                                                <li><a href="course-grid.html">Video Edition</a></li>
                                                <li><a href="course-grid.html">Logo Design</a></li>
                                                <li><a href="course-grid.html">Francy Medium</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6 col-md-7">
                        <div class="header-right header-right-box">
                            <div class="header-search-box">
                                <form action="#">
                                    <div class="search-input">
                                        <input type="Email" placeholder="What you want to learn?">
                                        <button class="header-search-btn"><i class="fi fi-rs-search mr-5"></i> Search Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-9 col-xl-9 col-lg-6 text-start">
                        <div class="main-menu main-menu-white">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="index.html">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home Style 1</a></li>
                                            <li><a href="index-2.html">Home Style 2</a></li>
                                            <li><a href="index-3.html">Home Style 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="about.html">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="instructor.html">Instructor</a>
                                        <ul class="submenu">
                                            <li><a href="instructor.html">Instructor</a></li>
                                            <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="course-grid.html">Course</a>
                                        <ul class="submenu">
                                            <li><a href="course-grid.html">Course Grid</a></li>
                                            <li><a href="course-list.html">Course List</a></li>
                                            <li><a href="course-details.html">Course Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 d-flex align-items-center justify-content-end">
                        <div class="header-meta-green">
                            <ul>
                                <li><a href="sign-in.html"><i class="fi fi-rr-user"></i></a></li>
                                <li><a href="cart.html"><i class="fi fi-rr-shopping-bag"></i></a></li>
                                <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-header-area d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-5">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('/assets/img/logo/logo-black.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-7 d-flex align-items-center justify-content-end">
                <div class="header-meta-green text-end">
                    <ul>
                        <li><a href="sign-in.html"><i class="fi fi-rr-user"></i></a></li>
                        <li><a href="cart.html"><i class="fi fi-rr-shopping-bag"></i></a></li>
                        <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header area end -->
<div class="tp-sidebar-menu">
    <button class="sidebar-close"><i class="icon_close"></i></button>
    <div class="side-logo mb-30">
        <a href="index.html"><img src="{{ asset('/assets/img/logo/logo-black.png') }}" alt="logo"></a>
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

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="{{ asset('/assets/img/breadcrumb/breadcrumb-bg-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title mb-20">Contact Us</h3>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span class="sub-page-black">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- location-area -->
    <section class="location-area pt-120 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="location-item text-center mb-30">
                        <div class="location-icon mb-25">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="location-content">
                            <h5 class="location-title"><a href="tel:89878351004">+7 (987) 835-1004</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="location-item text-center mb-30">
                        <div class="location-icon mb-25">
                            <i class="fi fi-rr-envelope"></i>
                        </div>
                        <div class="location-content">
                            <h5 class="location-title"><a href="mailto: for-hrpost@yandex.ru">for-hrpost@yandex.ru</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- location-area-end -->

    <!-- contact-area -->
    <section class="contact-area pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-wrapper mr-65 mb-60">
                        <div class="sub-contact-title">
                            <h5 class="contact-title mb-30">Связаться с нами</h5>
                        </div>
                        <div class="contact-form">
                            <form action="{{ route('sendMail') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-input mb-25">
                                            <span>Имя</span>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-input mb-25">
                                            <span>Email</span>
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-input mb-40">
                                            <span>Комментарий</span>
                                            <textarea name="message"></textarea>
                                        </div>
                                        <button type="submit" class="tp-btn">Submit</button>
{{--                                        <a href="#" class="tp-btn">Отправить</a>--}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-bg mb-60">
                        <img src="{{ asset('/assets/img/bg/contact-sub-bg-01.png') }}" alt="contact-bg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- map-area -->
{{--    <div class="map-area">--}}
{{--        <div class="map-wrapper">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16421992.915334428!2d-74.54900526175051!3d53.308708074896664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1654426516184!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- map-area-end -->

    <!-- counter-area -->
    <section class="tp-counter-area theme-bg pt-90">
        <div class="counter-b-border">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">276</span>K</h4>
                                <p>Worldwide Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">23</span>+</h4>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">735</span>+</h4>
                                <p>Professional Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">4.7</span>K+</h4>
                                <p>Beautiful Review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->


</main>

<!-- footer-area -->
<footer>
    <div class="footer-bg theme-bg bg-bottom" data-background="{{ asset('/assets/img/bg/shape-bg-02.png') }}">
        <div class="f-border pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4  col-6">
                        <div class="footer-widget footer-3-col-1 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">About</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">In Press</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <div class="footer-widget footer-3-col-2 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Quick Links</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Chat online</a></li>
                                    <li><a href="#">Order Cancel</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <div class="footer-widget footer-3-col-3 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Support</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Online Chat</a></li>
                                    <li><a href="#">Whatsapp</a></li>
                                    <li><a href="#">Telegram</a></li>
                                    <li><a href="#">Ticketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6">
                        <div class="footer-widget footer-3-col-4 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">FAQ</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="#">Account</a></li>
                                    <li><a href="#">Deliveries</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Return</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6">
                        <div class="footer-widget footer-3-col-5 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Products</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="#">Business Account</a></li>
                                    <li><a href="#">Credit Card</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Rewards</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-copyright pt-60 pb-40">
            <div class="container">
                <div class="row text-center text-lg-start">
                    <div class="col-xl-3 col-lg-3">
                        <div class="f-copyright__logo mb-30">
                            <a href="#"><img src="{{ asset('/assets/img/logo/Logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="f-copyright__text text-center mb-30">
                            <span>Uxaction© 2022, All Rights Reserved</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="f-copyright__social-area mb-20 text-lg-end">
                            <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fi fi-rr-basketball"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->




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
