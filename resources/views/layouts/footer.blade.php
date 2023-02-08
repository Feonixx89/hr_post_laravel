<!-- footer-area -->
<footer>
    <div class="footer-bg theme-bg bg-bottom" data-background="{{ asset('/assets/img/bg/shape-bg-1.png') }}">
        <div class="f-border pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="footer-widget footer-col-1 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Информация</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="{{ route('contact') }}">О нас</a></li>
                                    <li><a href="{{ route('policy') }}">Политика обработки данных</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="footer-widget footer-col-2 mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Интенсивы</h3>
                            </div>
                            <div class="footer-widget__link">
                                <ul>
                                    <li><a href="{{ route('happy_team') }}">Счастливая команда силами HR</a></li>
                                    <li><a href="{{ route('management') }}">Менеджмент 1.0 Базовые навыки руководителя</a></li>
                                    <li><a href="{{ route('effective_recruting') }}">Эффективный рекрутинг</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="footer-widget footer-col-4  mb-50">
                            <div class="footer-widget__text mb-35">
                                <h3 class="footer-widget__title">Мы в социальных сетях</h3>
                            </div>
                            <p>Следите за скидками, предложениями и мероприятиями.</p>
                            <div class="footer-widget__social d-flex align-items-center">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://vk.com/public212480302"><i class="fa-brands fa-vk"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
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
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('/assets/img/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->
