<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Epora - Online Courses & Education HTML Template - shared on themelock.com</title>
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
<header class="header__transparent">
    <div class="header__area pl-220 pr-220 pt-30">
        <div class="main-header" id="header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                        <div class="logo-area d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('/assets/img/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="header-cat-menu ml-40 d-none d-md-block">
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
                    <div
                        class="col-xxl-9 col-xl-9 col-lg-7 col-md-6 col-6 d-flex align-items-center justify-content-end">
                        <div class="main-menu d-flex justify-content-end mr-15">
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
                                            <li><a href="blog.html">Blog Sidebar</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right d-md-flex align-items-center">
                            <div class="header__search d-none d-lg-block">
                                <form action="#">
                                    <div class="header__search-input">
                                        <button class="header__search-btn">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </button>
                                        <input type="text" placeholder="Search Courses">
                                    </div>
                                </form>
                            </div>
                            <div class="header-meta">
                                <ul>
                                    <li><a href="sign-in.html" class="d-none d-md-block"><i
                                                class="fi fi-rr-user"></i></a></li>
                                    <li><a href="cart.html" class="d-none d-md-block"><i
                                                class="	 fi fi-rr-shopping-bag"></i></a></li>
                                    <li><a href="#" class="tp-menu-toggle d-xl-none"><i class="icon_ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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

    <!-- banner-area -->
    <section class="banner-area fix p-relative">
        <div class="banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-8">
                        <div class="hero-content">
                            <h2 class="hero-title mb-35 text-black">HR-POST <br><i>Point Of Success Team</i></h2>
                            <p class="text-black">Точка успеха Вашей команды.</p>
                            <div class="tp-banner-btn">
                                <a href="course-list.html" class="tp-btn">Наши интенсивы</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape d-none d-lg-block">
                        <img src="{{ asset('/assets/img/banner-img-1.png') }}" alt="banner-shape" class="b-shape"
                             height="925" width="827">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->


    <!-- feature-area -->
    <section class="tp-feature-area grey-bg pt-115 pb-90 pl-205 pr-205 bg-bottom"
             data-background="{{ asset('/assets/img/bg/shape-bg-1.png') }}">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title mb-60">
                        <h2 class="tp-sub-title mb-20 tp-section-title">Что мы предлагаем</h2>
                    </div>
                </div>
            </div>
            <div class="tp-feature-cn">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-paper-plane"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-20">Проектная деятельность</h5>
                                <p>Команда экспертов с более 20 летним опытом в HR.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-user"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-20">Программы обучения</h5>
                                <p>Более 5 программ для построения успешной команды силами HR и не только.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-document"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-20">Индивидуальные программы</h5>
                                <p>Проведем обучение под запрос компании.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="tpfea mb-30">
                            <div class="tpfea__icon mb-25">
                                <i class="fi fi-rr-calendar"></i>
                            </div>
                            <div class="tpfea__text">
                                <h5 class="tpfea__title mb-20">Консалтинг</h5>
                                <p>Консультируем в HR сфере, внедряем современные методики и технологии</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-area-end -->

    <!-- about-area -->
    <section class="tp-about-area pt-120 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6">
                    <div class="tp-about-img p-relative pb-30 ml-10">
                        <img src="{{ asset('/assets/img/about/about-3-bg-01.png') }}" alt="about-img">
                        <div class="tp-about-line-shape d-none d-md-block">
                        </div>
                        <div class="tp-about-shape  d-none d-xl-block">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6">
                    <div class="tp-about-content pb-30 ml-80">
                        <div class="section-title mb-55">
                            <span class="tp-sub-title mb-20">Интенсив</span>
                            <h2 class="tp-section-title mb-15">Инструменты эффективного рекрутинга</h2>
                            <p>Интенсив «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы
                                «прокачать» компетенции в области подбора современного рекрутера, получить полезные и
                                мощные инструменты привлечения в компанию лучших сотрудников научиться грамотно
                                продавать вакансию и располагать к себе кандидатов</p>
                        </div>
                        <div class="about-btn">
                            <a href="{{ route('effective_recruting') }}" class="tp-btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- blog-area -->
    <section class="blog-area pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-65 text-center">
                        <h2 class="tp-section-title mb-20">Интенсивы</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="tp-blog mb-60">
                        <div class="tp-blog__thumb p-relative">
                            <div class="tp-blog__timg fix">
                                <a href="blog-details.html"><img src="{{ asset('/assets/img/suit-bg-02.png') }}"
                                                                 alt="blog-img" width="415px" height="320px"></a>
                            </div>
                            <div class="tp-blog__icon"><a href="#"><i class="fi fi-rs-angle-right"></i></a></div>
                        </div>
                        <div class="tp-blog__content p-5">
                            <div class="tp-blog__meta mb-10">
                                <a href="blog-details.html">Интенсив</a>
                            </div>
                            <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Счастливая команда силами
                                    HR</a></h3>
                            <p>На интенсиве Вы научитесь технологиям, которые позволят собрать команду компетентных,
                                лояльных и вовлеченных профессионалов. Узнать как можно этого достичь используя
                                современные методики подбора, мотивации и развития команды. Создайте счастливую команду
                                в своей компании!</p>
                        </div>
                        <div class="btn-toolbar mb-3 p-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <div class="tp-suit__btn pt-5">
                                    <a href="{{ route('happy_team') }}" class="tp-border-btn">Подробнее</a>
                                </div>
                            </div>
                            <div class="btn-group me-2">
                                <div class="tp-suit__btn pt-5">
                                    <a href="{{ route('contact') }}" class="tp-border-btn">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="tp-blog mb-60">
                        <div class="tp-blog__thumb p-relative">
                            <div class="tp-blog__timg fix">
                                <a href="blog-details.html"><img src="{{ asset('/assets/img/suit-bg-01.png') }}"
                                                                 alt="blog-img" width="415px" height="320px"></a>
                            </div>
                            <div class="tp-blog__icon"><a href="#"><i class="fi fi-rs-angle-right"></i></a></div>
                        </div>
                        <div class="tp-blog__content">
                            <div class="tp-blog__meta mb-10">
                                <a href="blog-details.html">Интенсив</a>
                            </div>
                            <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Менеджмент 1.0 базовые навыки
                                    руководителя.</a></h3>
                            <p>Курс тренингов «Менеджмент 1.0 базовые навыки руководителя» направлен на формирование
                                компетенции современного руководителя. Вы научитесь эффективной постановки задач,
                                грамотному принятию управленческих решений, делегированию управлению мотивацией
                                персонала и многому другому...</p>
                        </div>
                        <div class="btn-toolbar mb-3 p-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <div class="tp-suit__btn pt-5">
                                    <a href="{{ route('management') }}" class="tp-border-btn">Подробнее</a>
                                </div>
                            </div>
                            <div class="btn-group me-2">
                                <div class="tp-suit__btn pt-5">
                                    <a href="{{ route('contact') }}" class="tp-border-btn">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- instructor-area -->
    <section class="instructor-area pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-7 col-12">
                    <div class="section-title mb-65">
                        <h2 class="tp-section-title mb-20">Наша команда</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-5 col-6">
                    <div class="tp-instruc-arrow d-flex justify-content-md-end"></div>
                </div>
            </div>
            <div class="intruc-active mb-15 tp-slide-space">
                <div class="tp-instruc-item">
                    <div class="tp-instructor text-center p-relative mb-30">
                        <div class="tp-instructor__thumb mb-25">
                            <img src="{{ asset('/assets/img/about/people/Padalka_Ekaterina.png') }}"
                                 alt="instructor-profile">
                        </div>
                        <div class="tp-instructor__content">
                            <h4 class="tp-instructor__title mb-20"><a href="instructor-profile.html">Падалка
                                    Екатерина</a></h4>
                            <span>Инструктор</span>
                            <div class="tp-instructor__social">
                                <ul>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-instruc-item">
                    <div class="tp-instructor text-center p-relative mb-30">
                        <div class="tp-instructor__thumb mb-20">
                            <img src="{{ asset('/assets/img/about/people/Bondarenko_Oksana.jpg') }}"
                                 alt="instructor-profile">
                        </div>
                        <div class="tp-instructor__content">
                            <h4 class="tp-instructor__title  mb-20"><a href="instructor-profile.html">Бондаренко
                                    Оксана</a></h4>
                            <span>Инструктор</span>
                            <div class="tp-instructor__social">
                                <ul>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-instruc-item">
                    <div class="tp-instructor text-center p-relative mb-30">
                        <div class="tp-instructor__thumb mb-20">
                            <img src="{{ asset('/assets/img/about/people/Kiseleva_Galina.jpg') }}"
                                 alt="instructor-profile">
                        </div>
                        <div class="tp-instructor__content">
                            <h4 class="tp-instructor__title mb-20"><a href="instructor-profile.html">Киселева Галина</a>
                            </h4>
                            <span>Инструктор</span>
                            <div class="tp-instructor__social">
                                <ul>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li><a href="instructor-profile.html"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- instructor-area-enfd -->

    <!-- catrgory-area -->
    <section class="tp-category-area bg-bottom grey-bg pt-110 pb-80" data-background="assets/img/bg/shape-bg-1.png">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title mb-65">
                        <h2 class="tp-section-title">У нас ты научишься</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-01.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Составлять вакансии</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-02.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Оценивать кандидатов</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-03.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Развивать HR брэнд</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-04.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Управлять адаптацией</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-05.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Мотивировать команду</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-06.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Управлять конфликтами</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-07.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Измерять эффективность</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cat-item mb-40 d-flex align-items-center">
                        <div class="tp-category-icon mr-15">
                            <img src="assets/img/category/category-08.png" alt="category-img">
                        </div>
                        <h4 class="tp-category-title"><a href="course-grid.html">Работать не выгорая</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- catrgory-area-end -->

    <!-- choose-area -->
    <section class="choose-area pb-90 p-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="tp-choose-img p-relative mb-30 ml-25">
                        <img src="{{ asset('/assets/img/choose-3-bg-01.png') }}" alt="choose-img" height="640"
                             width="740">
                        <div class="tpchoose-img-text d-none d-md-block">
                            <ul>
                                <li>
                                    <i>20+</i>
                                    <p>Опыта в HR</p>
                                </li>
                                <li>
                                    <i class="fa-light fa-check"></i>
                                    <p>Уникальные методики</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="tp-choose-content mb-30">
                        <div class="section-title mb-25">
                            <h2 class="tp-section-title mb-20">Почему выбирают наши интенсивы</h2>
                        </div>
                        <div class="tp-choose-list mb-35">
                            <ul>
                                <li><i class="fa-light fa-check"></i>Обучение на реальных кейсах</li>
                                <li><i class="fa-light fa-check"></i>Удобные график и формат обучения</li>
                                <li><i class="fa-light fa-check"></i>Индивидуальный подход</li>
                                <li><i class="fa-light fa-check"></i>Закончи курс, получи сертификат</li>
                            </ul>
                        </div>
                        <div class="choose-btn">
                            <a href="about.html" class="tp-btn">Исследуй курсы</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- counter-area -->
    <section class="tp-counter-area bg-bottom grey-bg pt-120 pb-60" data-background="assets/img/bg/shape-bg-1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-60 text-center">
                        <div class="counter-item__icon mb-25">
                            <i class="fi fi-rr-user"></i>
                        </div>
                        <div class="counter-item__content">
                            <h4 class="counter-item__title"><span class="counter">100</span>+</h4>
                            <p>Довольных слушателей</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-60 text-center">
                        <div class="counter-item__icon mb-25">
                            <i class="fi fi-rr-document"></i>
                        </div>
                        <div class="counter-item__content">
                            <h4 class="counter-item__title"><span class="counter">20</span>+</h4>
                            <p>Опыта в HR</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-60 text-center">
                        <div class="counter-item__icon mb-25">
                            <i class="fi fi-rr-apps"></i>
                        </div>
                        <div class="counter-item__content">
                            <h4 class="counter-item__title"><span class="counter">457</span>+</h4>
                            <p>Закрытых вакансий</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="counter-item mb-60 text-center">
                        <div class="counter-item__icon mb-25">
                            <i class="fi fi-rr-star"></i>
                        </div>
                        <div class="counter-item__content">
                            <h4 class="counter-item__title"><span class="counter">30</span>+</h4>
                            <p>Оказанных консультаций</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->


    <!-- testimonial-area -->
    <section class="testimonial-area bg-bottom pt-110 pb-90 " data-background="assets/img/bg/shape-bg-1.png">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                    <div class="section-title mb-65">
                        <h2 class="tp-section-title mb-20">О нас говорят</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-6">
                    <div class="tp-section-arrow d-flex justify-content-md-end mb-40"></div>
                </div>
            </div>
            <div class="testimonial-active tp-slide-space">
                <div class="tp-test-slide-item">
                    <div class="tp-testi p-relative mt-65">
                        <div class="tp-testi__avatar">
                            <img src="{{ asset('/assets/img/about/people/about_people/Kyzina_Tatyana.jpg') }}"
                                 height="130px" width="130px" alt="Татьяна Кузина" class="rounded-circle">
                        </div>
                        <div class="tp-testi__rating pb-5">
                            <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                            </ul>
                        </div>
                        <div class="tp-testi__avainfo">
                            <p>Я прошла обучение в команде профессионалов HR-Post. И просто в восторге от курса!
                                Обучение построено так, что знания нужно сразу применять на практике, и это
                                замечательно! В рамках курса я научилась определять конкурентные преимущества вакансии,
                                строить воронку подбора, грамотно составлять EVP, познакомилась с матрицей
                                омниканального продвижения, с различными источниками найма и многое другое</p>
                            <h3 class="tp-testi__title">Татьяна Кузина</h3>
                            <i>Менеджер по персоналу</i>
                        </div>
                    </div>
                </div>
                <div class="tp-test-slide-item">
                    <div class="tp-testi p-relative mt-65">
                        <div class="tp-testi__avatar">
                            <img src="{{ asset('/assets/img/about/people/about_people/Konovalova_Anna.jpg') }}"
                                 alt="Анна Коновалова" height="130px" width="130px" class="rounded-circle">
                        </div>
                        <div class="tp-testi__rating pb-5">
                            <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                            </ul>
                        </div>
                        <div class="tp-testi__avainfo">
                            <p>Интенсив "Эффективный рекрутинг" предназначен, как для новичков, так и для практиков.
                                Курс отличается ориентированностью на практику, интересными «фишками». Тренеры -
                                практики превосходно владеют тематикой. Благодарю вас за вклад в профессиональное
                                развитие сотрудника моей службы!</p>
                            <h3 class="tp-testi__title">Анна Коновалова</h3>
                            <i>Директор по персоналу</i>
                        </div>
                    </div>
                </div>
                <div class="tp-test-slide-item">
                    <div class="tp-testi p-relative mt-65">
                        <div class="tp-testi__avatar">
                            <img src="{{ asset('/assets/img/about/people/about_people/Bazhanova_Elena.jpg') }}"
                                 alt="Бажанова Елена" height="130px" width="130px" class="rounded-circle">
                        </div>
                        <div class="tp-testi__rating pb-5">
                            <ul class="d-flex align-items-center justify-content-end mr-5 mb-25">
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                                <li><i class="fi fi-ss-star"></i></li>
                            </ul>
                        </div>
                        <div class="tp-testi__avainfo">
                            <p>Хочу выразить искреннюю признательность преподавателям учебного курса «Инструменты
                                эффективного рекрутинга». Все объясняется доступным простым языком со множеством
                                примеров. И каждое новое занятие-это новые знания и наши маленькие победы, может даже
                                над собой. Я получила отличные навыки, новые знакомства с прекрасными людьми и теплоту
                                общения.</p>
                            <h3 class="tp-testi__title">Елена Бажанова</h3>
                            <i>Инспектор отдела кадров</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- brand-area -->
    <section class="brand-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-65 text-center">
                        <h2 class="tp-section-title mb-20">Нам доверяют</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-area tp-brand-active">
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/agroros-logo.jpg') }}"
                                             alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/dimes-logo.png') }}" alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/samson-logo.jpg') }}" alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/umc-logo.png') }}"
                                             alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/agroros-logo.jpg') }}"
                                             alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/dimes-logo.png') }}" alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/samson-logo.jpg') }}" alt="brand-logo"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('/assets/img/partners/umc-logo.png') }}"
                                             alt="brand-logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand-area-end -->


    <!-- suitable-area -->
    <section class="suitable-area pb-90">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title mb-60">
                        <span class="tp-sub-title mb-25">Присоединяйтесь к нам</span>
                        <h2 class="tp-section-title">Выбери свой интенсив</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- suitable-area-end -->

</main>

<!-- footer-area -->
<footer>
    <div class="footer-bg theme-bg bg-bottom" data-background="{{ asset('/assets/img/bg/shape-bg-1.png') }}">
        <div class="f-border pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4">
                        <div class="footer-widget footer-col-1 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">About</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">In Press</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4">
                        <div class="footer-widget footer-col-2 mb-50">
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
                    <div class="col-xl-3 col-md-4">
                        <div class="footer-widget footer-col-3 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Support</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="#">Online Chat</a></li>
                                    <li><a href="#">Whatsapp</a></li>
                                    <li><a href="#">Telegram</a></li>
                                    <li><a href="#">Ticketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="footer-widget footer-col-4  mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Support</h3>
                            </div>
                            <p>Be the first one to know about discounts, offers and events. Unsubscribe whenever you
                                like.</p>
                            <div class="footer-widget__f-newsletter mb-40">
                                <form action="index.html">
                                    <span><i class="icon_mail_alt"></i></span>
                                    <input type="email" placeholder="Enter your email">
                                    <button class="footer-widget__submit tp-border-btn2">Subscribe Now</button>
                                </form>
                            </div>
                            <div class="footer-widget__social d-flex align-items-center">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-light fa-basketball"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-copyright pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="f-copyright__logo mb-30">
                            <a href="index.html"><img src="assets/img/logo/Logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="f-copyright__text text-md-end mb-30">
                            <span>Copyright©Uxaction 2022, All Rights Reserved</span>
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
