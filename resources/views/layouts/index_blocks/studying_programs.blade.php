<style>
    .bg-info, .btn-primary {
        background-color: rgb(121,139,89) !important;
    }
</style>
<h1 class="text-center m-5">Интенсивы</h1>

<div class="row row-cols-1 row-cols-md-3 mb-5 mt-5">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 bg-info">
                <h4 class="my-0 fw-normal m-5">Инструменты эффективного рекрутинга</h4>
            </div>
            <div class="card-body">
                <div class="m-5">
                    Программа «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать»
                    компетенции в области подбора, получить полезные и мощные инструменты привлечения в компанию лучших
                    сотрудников
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <button type="button" class="w-100 btn btn-lg btn-primary">
                    <a class="text-white" href="{{ route('intensiveEffectiveRecruiting') }}">Подробнее</a>
                </button>
                <br>
                <br>
                <button type="button"
                        class="w-100 btn btn-lg btn-primary"
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
            <div class="card-header py-3 bg-info">
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
            <div class="card-header py-3 bg-info">
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
