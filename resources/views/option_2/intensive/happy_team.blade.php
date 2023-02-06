<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Epora - Online Courses & Education HTML Template</title>
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
                                        <li><a href="course-grid.html"> Categorie <span><i
                                                        class="arrow_carrot-down"></i></span></a>
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
                                        <button class="header-search-btn"><i class="fi fi-rs-search mr-5"></i> Search
                                            Now
                                        </button>
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
    <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
    >
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title mb-20">Детали интенсива</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- course-details-area -->
    <section class="c-details-area pt-120 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="c-details-wrapper mr-25">
                        <div class="c-details-thumb p-relative mb-40">
                            <img src="{{ asset('/images/photos_gallery/full_size/1.JPG') }}" alt="details-bg"
                                 height="845" width="480">
                            <div class="c-details-ava d-md-flex align-items-center">
                                <img src="{{ asset('/assets/img/course/c-details-ava-01.png') }}" alt="avata">
                                <span>By <a href="#">Emilia Jonas</a></span>
                            </div>
                        </div>
                        <div class="course-details-content mb-45">
                            <div class="tpcourse__ava-title mb-25">
                                <h4 class="c-details-title"><a href="#">Счастливая команда силами HR</a></h4>
                            </div>
                            <div class="tpcourse__meta course-details-list">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <div class="rating-gold d-flex align-items-center">
                                            <p>4.8</p>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                            <span>(60)</span>
                                        </div>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>3 Модуля</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/clock.png') }}" alt="meta-icon"
                                             width="25px" height="25px"> <span>14 Часов</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-details-about mb-40">
                            <h5 class="tp-c-details-title mb-20">О курсе</h5>
                            <p>Чувства счастья у сотрудника выступает залогом успеха бизнеса и позволяет собрать команду
                                компетентных, лояльных и вовлеченные профессионалов. Узнайте как можно этого достичь
                                используя современные технологии подбора, мотивации и развития команды. Создайте
                                счастливую команду в своей компании!</p>
                        </div>
                        <div class="c-details-review pb-15">
                            <div class="c-review-title-wrapper">
                                <h5 class="c-review-title mb-40">Модули</h5>
                            </div>
                            <div class="course-reviewer-item-wrapper">
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">1. Формирование команд</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Формирование команд с помощью инструментов подбора</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Профиль кандидата: организационные
                                                    и личностные ценности, модель поведения, скоринг. Оценка
                                                    соответствия соискателя организационной культуре
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Особенности отбора членов команд.
                                                    Проведение командных собеседований (разработка оценочного
                                                    инструментария)
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">2. Мотивация и развитие команды</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Развитие членов команды</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Формирование корпоративной базы
                                                    знаний
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>ИПР
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Менторинг
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Тема 2. Мотивация команды</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Система признания заслуг
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Инструменты нематериальной
                                                    мотивации
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Лояльность и вовлеченность
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Социальная политика на основе
                                                    well-being ретроспектива, фасилитация
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">3. Поддержание команд</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Управление конфликтами и стрессами</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Эмоциональное выгорание в команде,
                                                    стратегия нейтрализации конфликтов
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Методы управления стрессами
                                                </li>
                                            </ul>

                                        </div>
                                        <p>Тема 2. Инструменты повышения сплоченности команд</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Тимбилдинг
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Командные встречи
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Методы диагностики эффективности
                                                    команд
                                                </li>
                                            </ul>

                                        </div>
                                        <p>Тема 3. Инструменты мониторинга уровня счастья в компании</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Оценка вовлеченности и
                                                    удовлетворенности сотрудников
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Пульс опросы. Уровень абсентеизма
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Stay интервью
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="c-details-sidebar">
                        <div class="course-details-widget">
                            <div class="section-title mb-60">
                                <h2 class="tp-sub-title">Из чего состоит</h2>
                            </div>
                            <div class="cd-information mb-35">
                                <ul>
                                    <li><i class="fa-light fa-calendars"></i> <label>Лекции (дней)</label>
                                        <span>3</span></li>
                                    <li><i class="fi fi-rr-chart-pie-alt"></i> <label>Консультации</label>
                                        <span>3</span></li>
                                    <li><i class="fi fi-rr-user"></i> <label>Практика (недель)</label> <span>3</span>
                                    </li>
                                    <li><i class="fa-light fa-clock-desk"></i> <label>Теория (%)</label> <span>20</span>
                                    </li>
                                    <li><i class="fi fi-sr-stats"></i> <label>Практика (%)</label> <span>80</span></li>
                                    <li><i class="fi fi-rs-diploma"></i> <label>Сертификат</label> <span>Да</span></li>
                                </ul>
                            </div>
                            <div class="cd-video-price">
                                <h3 class="pricing-video text-center mb-15"><span>&#8381;</span>5000</h3>
                                <div class="cd-pricing-btn text-center mb-30">
                                    <a class="tp-vp-btn-green" href="{{ route('contact') }}">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course-details-area-end -->

    <div class="row text-center">
        <div class="col-lg-12">
            <div class="section-title mb-60">
                <span class="tp-sub-title mb-25">Присоединяйтесь к нам</span>
                <h2 class="tp-section-title">Выбери свой интенсив</h2>
            </div>
        </div>
    </div>

    <!-- counter-area -->
    <section class="tp-counter-area theme-bg pt-90">
        <div class="counter-b-border">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">276</span>K
                                </h4>
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
                                <h4 class="counter-item__title counter-left-title"><span class="counter">735</span>+
                                </h4>
                                <p>Professional Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="counter-item mb-70">
                            <div class="counter-item__content counter-white-text">
                                <h4 class="counter-item__title counter-left-title"><span class="counter">4.7</span>K+
                                </h4>
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
    <div class="footer-bg theme-bg bg-bottom" data-background="assets/img/bg/shape-bg-02.png">
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