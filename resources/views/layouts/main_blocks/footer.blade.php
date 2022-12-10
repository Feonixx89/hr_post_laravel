@php $currentYear = date('Y'); @endphp
<footer class="pt-4 my-md-5 pt-md-5 border-top container">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="{{ asset('images/logo_title.png') }}" alt="" width="40" height="40">
            <small class="d-block mb-3 text-muted">© 2020- {{ $currentYear }} </small>
        </div>
        <div class="col-6 col-md">
            <h5>Контакты</h5>
            <ul class="list-unstyled text-small">
                <li class="justify-content-between">
                    <a class="link-secondary text-decoration-none" href="tel:89878351004">
                        <img src="{{ asset('images/icons/social_network/phone.png') }}" alt="+7(987)835-10-04" width="30" height="30">
                        +7 (987) 835-10-04
                    </a>
                </li>
                <li class="mb-1">
                    <a class="link-secondary text-decoration-none" href = "mailto: for-hrpost@yandex.ru">
                        <img src="{{ asset('images/icons/social_network/mail.png') }}" alt="for-hrpost@yandex.ru" width="30" height="30">
                        for-hrpost@yandex.ru
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Мы в социальных сетях</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1">
                    <a class="link-secondary text-decoration-none" href="https://vk.com/public212480302">
                        <img src="{{ asset('images/icons/social_network/vk.png') }}" alt="https://vk.com/public212480302" width="30" height="30">
                    </a>
                    <a class="link-secondary text-decoration-none" href="#">
                        <img src="{{ asset('images/icons/social_network/linkedin.png') }}" alt="" width="30"
                             height="30">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
