<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('index') }}"
               class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="{{ asset('images/logo_title.png') }}" alt="Логотип" width="40" height="40" role="img">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary disabled">Клиенты</a></li>
                <li><a href="{{ route('learning') }}" class="nav-link px-2 link-dark">Программы обучения</a></li>
            </ul>

            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-between">
                    <a class="link-secondary text-decoration-none" href="mailto: for-hrpost@yandex.ru">
                        <img src="{{ asset('images/icons/social_network/mail.png') }}" alt="for-hrpost@yandex.ru"
                             width="30" height="30">
                        for-hrpost@yandex.ru
                    </a>
                </div>

                <div class="d-flex justify-content-between px-5">
                    <a class="link-secondary text-decoration-none" href="tel:89878351004">
                        <img src="{{ asset('images/icons/social_network/phone.png') }}" alt="+7(987)835-10-04"
                             width="30" height="30">
                        +7 (987) 835-10-04
                    </a>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="https://vk.com/public212480302">
                        <img src="{{ asset('images/icons/social_network/vk.png') }}"
                             alt="https://vk.com/public212480302" width="30" height="30">
                    </a>

                    <a href="#">
                        <img src="{{ asset('images/icons/social_network/linkedin.png') }}" alt="" width="30"
                             height="30">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
