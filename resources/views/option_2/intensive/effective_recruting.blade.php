<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Epora - Online Courses & Education HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

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
                        <h3 class="breadcrumb__title mb-20">Описание курса</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- feature-area -->
    <section class="feature-area pt-115 pb-90">
        <div class="container">
            <div class="tp-feature-cn">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea tp-feature-item text-center mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-paper-plane"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-5">Онлайн-курсы</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea tp-feature-item text-center mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-user"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-5">Тренер-эксперт</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea tp-feature-item text-center mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-document"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-5">
                                    Получить сертификат</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea tp-feature-item text-center mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-calendar"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-5">Пожизненный доступ</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-area-end -->

    <!-- course-area -->
    <section class="course-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-details-about mb-40">
                        <h2 class="tp-section-title mb-20">Об интенсиве</h2>
                        <p>Интенсив «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать»
                            компетенции в области подбора получить полезные и мощные инструменты привлечения в компанию
                            лучших сотрудников научиться грамотно продавать вакансию и располагать к себе кандидатов</p>
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="tp-choose-content mb-30">
                                <div class="section-title mb-25">
                                    <h2 class="tp-section-title mb-20">Если Вы:</h2>
                                </div>
                                <div class="tp-choose-list mb-35">
                                    <ul>
                                        <li><i class="fa-light fa-check"></i>испытываете постоянный стресс на работе</li>
                                        <li><i class="fa-light fa-check"></i>мечтаете о быстром и качественном закрытии вакансий</li>
                                        <li><i class="fa-light fa-check"></i>хотите освоить или развить компетенции рекрутера</li>
                                        <li><i class="fa-light fa-check"></i>нацелены на получение стабильного дохода</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title text-center mb-65">
                        <h3 class="tp-section-title mb-20">Модули</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-20">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-01.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Продажа вакансий</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>EVP</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Успех взаимодействия с заказчиком</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Что делать если заказчик не знает что ему нужно</li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-02.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Оценка кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Секреты прескрининга</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Как оценить хард скилс и не дать слить кандидата</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Культурный код кандидата</li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-03.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Поиск кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Секреты сорсинга (разбить по площадкам?)</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Матрица омниканальности</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Реферальные программы</li>
                                    <br>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-04.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Удержание кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Разработка оффера</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Предонбординг</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Подготовка к встрече кандидата</li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-05.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Эффективность подбора</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Аналитика подбора</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Бюджетирование подбора</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Автоматизация сбора данных</li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="course-details.html"><img src="{{ asset('/assets/img/course/course-thumb-01.jpg') }}" alt="course-thumb"></a>
                            <div class="tpcourse__tag">
                                <a href="course-details.html"><i class="fi fi-rr-heart"></i></a>
                            </div>
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="course-details.html">Работа не выгорая</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Компетенции рекрутера</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Ментальное здоровье рекрутера</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Карьерные траектории рекрутера</li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span></li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span></li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course-area-end -->


    <!-- choose-area -->
    <section class="choose-area bg-bottom grey-bg pt-120 pb-90" data-background="{{ asset('/assets/img/bg/shape-bg-1.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="tp-choose-content mb-30">
                        <div class="section-title mb-25">
                            <span class="tp-sub-title-box mb-15">Почему выбирают нас</span>
                            <h2 class="tp-section-title mb-20">Вы научитесь</h2>
{{--                            <p>Dramatically supply transparent deliverables before & you backward comp internal or "organic" sources.</p>--}}
                        </div>
                        <div class="tp-choose-list tp-choose-bg mb-60">
                            <ul>
                                <li>
                                    <div class="tp-list-bg">
                                        <i class="fa-light fa-check"></i>Быстро и качественно закрывать вакансии
                                    </div>
                                </li>
                                <li>
                                    <div class="tp-list-bg">
                                        <i class="fa-light fa-check"></i>Грамотно оценивать соискателей
                                    </div>
                                </li>
                                <li>
                                    <div class="tp-list-bg">
                                        <i class="fa-light fa-check"></i>Повышать привлекательность организации на рынке труда
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="choose-btn">
                            <a href="{{ route('contact') }}" class="tp-btn">Записаться</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="tp-choose-img tp-choose-img-2 p-relative mb-30 mr-50 text-end">
                        <img src="{{ asset('/assets/img/bg/choose-2-img.jpg') }}" alt="choose-img">
                        <div class="tpchoose-img-text tp-chose-shape d-none d-md-block">
                            <ul>
                                <li>
                                    <i>20+</i>
                                    <p>Опыт в HR</p>
                                </li>
                                <li>
                                    <i>457+</i>
                                    <p>Закрытых вакансий</p>
                                </li>
{{--                                <li>--}}
{{--                                    <p>Total Students</p>--}}
{{--                                    <img src="{{ asset('/assets/img/icon/choose-2-shape.png') }}" alt="choose-shape">--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- suitable-area -->
    <section class="suitable-area bg-bottom grey-bg pt-115 pb-90" data-background="{{ asset('/assets/img/bg/shape-bg-1.png') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title mb-60">
                        <span class="tp-sub-title-box mb-15">Join With Us</span>
                        <h2 class="tp-section-title">Which One is Suitable For You?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-suit mb-30 p-relative white-bg">
                        <div class="tp-suit__content">
                            <h4 class="tp-suit__title">Do you want to <span>Learn</span> here?</h4>
                            <p>Dramatically supply transpa deliverables before & you.</p>
                            <div class="tp-suit__btn pt-5">
                                <a href="contact.html" class="tp-border-btn">Join Now</a>
                            </div>
                        </div>
                        <div class="tp-suit__img">
                            <img src="{{ asset('/assets/img/bg/suit-bg-01.png') }}" alt="suitable-img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="tp-suit mb-30 p-relative white-bg">
                        <div class="tp-suit__content">
                            <h4 class="tp-suit__title">Do you want to <span>Teach</span> here?</h4>
                            <p>Dramatically supply transpa deliverables before & you.</p>
                            <div class="tp-suit__btn pt-5">
                                <a href="contact.html" class="tp-border-btn">Join Now</a>
                            </div>
                        </div>
                        <div class="tp-suit__tech">
                            <img src="{{ asset('/assets/img/bg/suit-bg-02.png') }}" alt="suitable-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- suitable-area-end -->

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
