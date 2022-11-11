@extends('layouts.main.main')

@section('content')
    <main class="px-3">
        <h1>HR-POST</h1>
        <p class="lead">HR-POST Point Of Success Team команда экспертов с 20-летним опытом успешного закрытия
            вакансий</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-info">Узнать больше</a>
        </p>
    </main>

    <div class="row mb-2">
        <h1>УСПЕЙ ЗАПИСАТЬСЯ НА ПРОГРАММУ ЭФФЕКТИВНЫЙ РЕКРУТМЕНТ</h1>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('images/learning/profile.jpg') }}" alt="Успей записаться">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <p class="card-text mb-auto">
                        Если Вы:
                        ✔ испытываете постоянный стресс на работе;
                        ✔ мечтаете о быстром и качественном закрытии вакансий;
                        ✔ хотите освоить или развить компетенции рекрутера;
                        ✔ нацелены на получение стабильного дохода.

                        Программа «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать»
                        компетенции в области подбора, получить полезные и мощные инструменты привлечения в компанию
                        лучших сотрудников.

                        Занятия проводятся по субботам (2.04, 9.04, 16.04.2022г.)
                        Действует раннее бронирование до 21.03.2022г.
                        Стоимость курса 5800 руб.</p>
                    <p class="lead">
                        <a href="https://docs.google.com/document/d/1OFPCO4LUOn_hy2E1nP_fuzASu_eIUKQs/edit?usp=sharing&ouid=102524882000131465361&rtpof=true&sd=true"
                           class="btn btn-lg btn-info">Программа</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <h1>ПРОГРАММА ОБУЧЕНИЯ</h1>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h5>День первый</h5>
                    <p class="card-text mb-auto">
                        Тема 1. Подбор в HR-системе. Компетенции рекрутера
                        Понятие, этапы подбора, его роль и место в HR-системе. Компетенции рекрутера.

                        Тема 2. Экспертиза вакансии, профиль соискателя. EVP.
                        Экспертиза вакансии. Профиль должности, профиль соискателя. EVP, «продающее» объявление,
                        сегментация целевой аудитории
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('images/learning/program_1.jpg') }}" alt="Успей записаться">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h5>День второй</h5>
                    <p class="card-text mb-auto">
                        Тема 3. Планирование и бюджетирование подбора
                        План подбора. Стоимость вакансии, бюджет подбора. Эффективность подбора, метрики подбора.
                        Воронка подбора.

                        Тема 4. Формирование HR-бренда работодателя
                        Формирование бренда работодателя: поведение рекрутера, своевременная обратная связь по этапам
                        прохождения подбора, включая обработку сайтов трудоустройства. Путь кандидата.
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('images/learning/program_2.png') }}" alt="Успей записаться">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h5>День третий</h5>
                    <p class="card-text mb-auto">
                        Тема 5. Внутренние источники подбора: внутренняя мобильность персонала; реферальные программы
                        Внутренние: внутренняя мобильность персонала; реферальные программы

                        Тема 6. Внешние источники подбора
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('images/learning/program_3.jpg') }}" alt="Успей записаться">
                </div>
            </div>
        </div>
    </div>

    <main class="px-3">
        <h2>КОНТАКТЫ</h2>
        <p class="lead">Думаете это невозможно? Докажем обратное!</p>
        <p class="lead">
            <a href="https://forms.gle/rNAjNQTpEsCE1zQE8" class="btn btn-lg btn-info">Записаться</a>
        </p>
    </main>
@endsection
