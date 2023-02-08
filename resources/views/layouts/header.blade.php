<!-- header area start -->
<header class="header__transparent">
    <div class="header__area pl-220 pr-220 pt-30">
        <div class="main-header" id="header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-6">
                        <div class="logo-area d-flex align-items-center">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('/assets/img/logo/logo.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="header-cat-menu ml-40 d-none d-md-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#"> Интенсивы <span><i class="arrow_carrot-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('happy_team') }}">Счастливая команда силами HR</a></li>
                                                <li><a href="{{ route('management') }}">Менеджмент 1.0 Базовые навыки руководителя</a></li>
                                                <li><a href="{{ route('effective_recruting') }}">Эффективный рекрутинг</a></li>
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
                                        <a href="{{ route('index') }}">Главная</a>

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Интенсивы</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('happy_team') }}">Счастливая команда силами HR</a></li>
                                            <li><a href="{{ route('management') }}">Менеджмент 1.0 Базовые навыки руководителя</a></li>
                                            <li><a href="{{ route('effective_recruting') }}">Эффективный рекрутинг</a></li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('contact') }}">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
