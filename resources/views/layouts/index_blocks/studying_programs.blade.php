<hr class="featurette-divider">

<h1 class="text-center m-5">Интенсивы</h1>

<hr class="featurette-divider">

{{--<div class="row featurette">--}}
{{--    <div class="col-md-7">--}}
{{--        <h2 class="featurette-heading">Инструменты эффективного рекрутинга. <span--}}
{{--                class="text-muted">(курс)</span></h2>--}}
{{--        <p class="lead">Программа «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать»--}}
{{--            компетенции в области подбора, получить полезные и мощные инструменты привлечения в компанию лучших--}}
{{--            сотрудников. Занятия проводятся по субботам Действует раннее бронирование</p>--}}
{{--        <button class="btn btn-outline-info" type="button">--}}
{{--            <a class="text-decoration-none" href="{{ route('learning') }}">Подробнее</a>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="col-md-5">--}}
{{--        <img src="{{ asset('images/plugs/image_1.jpg') }}" alt="Инструменты эффективного рекрутинга" width="500"--}}
{{--             height="500">--}}
{{--    </div>--}}
{{--</div>--}}


<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                <br>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal m-5">Счастливая команда силами HR</h4>
            </div>
            <div class="card-body">
                <div class="m-5">
                    Аннотация СЧАСТЛИВАЯ КОМАНДА СИЛАМИ HR На интенсиве Вы научитесь технологиям, которые позволят
                    собрать команду компетентных, лояльных и вовлеченных профессионалов. Узнать как можно этого достичь
                    используя современные методики подбора, мотивации и развития команды. Создайте счастливую команду в
                    своей компании!
                    <br>
                    <br>
                    <br>
                </div>

                <button type="button" class="w-100 btn btn-lg btn-primary">
                    <a class="text-white" href="{{ route('intensiveHappyTeam') }}">Подробнее</a>
                </button>
                <br>
                <br>
                <button type="button"
                        class="w-100 btn btn-lg btn-primary"
                        {{--                        data-program-id="{{ $program->id }}"--}}
                        data-route="{{ route('sendFeedback') }}"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"
                >
                    Записаться
                </button>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal m-5">Менеджмент 1.0 базовые навыки руководителя.</h4>
            </div>
            <div class="card-body">
                <div class="m-5">
                    Аннотация вместо лидерства - Курс тренингов «Менеджмент 1.0 базовые навыки руководителя» направлен
                    на формирование компетенции современного руководителя. Вы научитесь эффективной постановки задач,
                    грамотному принятию управленческих решений, делегированию управлению мотивацией персонала и
                    многому другому... Все материалы программы представлены в виде кейсов и закрепляются поэтапно на
                    практике
                </div>
                <button type="button" class="w-100 btn btn-lg btn-primary">
                    <a class="text-white" href="{{ route('intensiveManagement_1_0') }}">Подробнее</a>
                </button>
                <br>
                <br>
                <button type="button"
                        class="w-100 btn btn-lg btn-primary"
                        {{--                        data-program-id="{{ $program->id }}"--}}
                        data-route="{{ route('sendFeedback') }}"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"
                >
                    Записаться
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Менеджмент 1.0 базовые навыки руководителя.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                @include('form.feedback')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Записаться</button>
            </div>
        </div>
    </div>
</div>

<hr class="featurette-divider">
