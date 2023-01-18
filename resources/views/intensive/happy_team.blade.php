@extends('layouts.main.main')

@section('title', 'Главная')

@section('header')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection

@section('container')
    @parent
    <h1 class="text-center m-5 fs-1 text-info">Счастливая команда силами HR</h1>
    <div class="container">
        <div>
            <p class="lead">
                <strong class="p-5 fw-bold fs-3">Чувства счастья у сотрудника выступает залогом успеха бизнеса и
                    позволяет собрать команду компетентных, лояльных и вовлеченные профессионалов. Узнайте как
                    можно этого достичь используя современные технологии подбора, мотивации и развития команды.
                    Создайте счастливую команду в своей компании!
                </strong>
            </p>
        </div>
        <br>
        <div>
            <p class="bg-secondary bg-gradient bg-opacity-25 p-5">
                Цель обучения: освоение инструментов формирования счастливой команды
            </p>
        </div>
        <br>
        <div>
            <p class="lead fw-bold fs-4"> Продолжительность обучения:</p>
            <ul>
                <li class="p-1">3 недели обучение офлайн</li>
                <li class="p-1">3 онлайн консультации</li>
                <li class="p-1">3 недели самостоятельной отработки навыков</li>
            </ul>
        </div>
        <br>
        <div>
            <p class="bg-secondary bg-gradient bg-opacity-25 p-5">
                Занятия проходят в интерактивной форме: 20% теории, 80% практики
            </p>
        </div>
        <br>
        <div>
            <p class="fs-4 fst-italic">Модуль 1. Формирование команд</p>
            <p class="fs-5 fst-italic">Тема 1. Формирование команд с помощью инструментов подбора</p>
            <ul>
                <li class="p-1">Профиль кандидата: организационные и личностные ценности, модель поведения,
                    скоринг. Оценка соответствия соискателя организационной культуре
                </li>
                <li class="p-1">Особенности отбора членов команд. Проведение командных собеседований
                    (разработка оценочного инструментария)
                </li>
            </ul>
            <p class="fs-5 fst-italic">Тема 2. Управление адаптацией</p>
            <ul>
                <li class="p-1">Ритуалы и традиции. Применение сторителлинга. Онбординг,  велком пак</li>
            </ul>
            <p class="text-decoration-underline fw-bolder">
                Отрабатываемые инструменты: составление профиля соискателя; разработка общих программ адаптации
            </p>
        </div>
        <br>
        <div>
            <p class="fs-4 fst-italic">Модуль 2. Мотивация и развитие команды</p>
            <p class="fs-5 fst-italic">Тема 1. Развитие членов команды</p>
            <ul>
                <li class="p-1">Формирование корпоративной базы знаний</li>
                <li class="p-1">ИПР</li>
                <li class="p-1">Менторинг</li>
            </ul>
            <p class="fs-5 fst-italic">Тема 2. Мотивация команды</p>
            <ul>
                <li class="p-1">Система признания заслуг</li>
                <li class="p-1">Инструменты нематериальной мотивации</li>
                <li class="p-1">Лояльность и вовлеченность</li>
                <li class="p-1">Социальная политика на основе well-being ретроспектива, фасилитация</li>
            </ul>
            <p class="text-decoration-underline fw-bolder">
                Отрабатываемые инструменты: разработка программы развития персонала, навыки проведения командных встреч
            </p>
        </div>
        <br>
        <div>
            <p class="fs-4 fst-italic">Модуль 3. Поддержание команд</p>
            <p class="fs-5 fst-italic">Тема 1. Управление конфликтами и стрессами</p>
            <ul>
                <li class="p-1">Эмоциональное выгорание в команде, стратегия нейтрализации конфликтов</li>
                <li class="p-1">Методы управления стрессами</li>
            </ul>
            <p class="fs-5 fst-italic">Тема 2. Инструменты повышения сплоченности команд</p>
            <ul>
                <li class="p-1">Тимбилдинг</li>
                <li class="p-1">Командные встречи</li>
                <li class="p-1">Методы диагностики эффективности команд</li>
            </ul>
            <p class="fs-5 fst-italic">Тема 3. Инструменты мониторинга уровня счастья в компании</p>
            <ul>
                <li class="p-1">Оценка вовлеченности и удовлетворенности сотрудников</li>
                <li class="p-1">Пульс опросы. Уровень абсентеизма</li>
                <li class="p-1"> Stay интервью</li>
            </ul>
            <p class="text-decoration-underline fw-bolder">
                Отрабатываемые инструменты: инструменты оценки уровня счастья сотрудников
            </p>
        </div>
        <br>
        <div>
            <p class="fw-bold fs-5 text-info">Успейте зарегистрироваться!</p>
            <p class="fw-bold fs-5 text-info">
                На нашем курсе Вы получите не только уникальные знания, но и помощь и поддержку коллег, обмен опытом
            </p>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    {{-- Если хотим дополнить родительский --}}
@endsection