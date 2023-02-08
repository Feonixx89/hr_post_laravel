@extends('layouts.intensive')

@section('title', ' - Счастливая команда силами HR')

@section('course')
    <!-- course-details-area -->
    <section class="c-details-area pt-120 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="c-details-wrapper mr-25">
                        <div class="c-details-thumb p-relative mb-40">
                            <img src="{{ asset('/images/photos_gallery/full_size/1.JPG') }}" alt="details-bg"
                                 height="845" width="480">
                            <div class="c-details-ava d-md-flex align-items-center">
                                <img src="{{ asset('/assets/img/course/c-details-ava-01.png') }}" alt="avata">
                                <span>By <a href="#">Emilia Jonas</a></span>
                            </div>
                        </div>
                        <div class="course-details-content mb-45">
                            <div class="tpcourse__ava-title mb-25">
                                <h4 class="c-details-title"><a href="#">Счастливая команда силами HR</a></h4>
                            </div>
                            <div class="tpcourse__meta course-details-list">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <div class="rating-gold d-flex align-items-center">
                                            <p>4.8</p>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                            <span>(60)</span>
                                        </div>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>3 Модуля</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/clock.png') }}" alt="meta-icon"
                                             width="25px" height="25px"> <span>14 Часов</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-details-about mb-40">
                            <h5 class="tp-c-details-title mb-20">О курсе</h5>
                            <p>Чувства счастья у сотрудника выступает залогом успеха бизнеса и позволяет собрать команду
                                компетентных, лояльных и вовлеченные профессионалов. Узнайте как можно этого достичь
                                используя современные технологии подбора, мотивации и развития команды. Создайте
                                счастливую команду в своей компании!</p>
                        </div>
                        <div class="c-details-review pb-15">
                            <div class="c-review-title-wrapper">
                                <h5 class="c-review-title mb-40">Модули</h5>
                            </div>
                            <div class="course-reviewer-item-wrapper">
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">1. Формирование команд</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Формирование команд с помощью инструментов подбора</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Профиль кандидата: организационные
                                                    и личностные ценности, модель поведения, скоринг. Оценка
                                                    соответствия соискателя организационной культуре
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Особенности отбора членов команд.
                                                    Проведение командных собеседований (разработка оценочного
                                                    инструментария)
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">2. Мотивация и развитие команды</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Развитие членов команды</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Формирование корпоративной базы
                                                    знаний
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>ИПР
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Менторинг
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Тема 2. Мотивация команды</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Система признания заслуг
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Инструменты нематериальной
                                                    мотивации
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Лояльность и вовлеченность
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Социальная политика на основе
                                                    well-being ретроспектива, фасилитация
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-reviewer-item d-flex mb-25">
                                    <div class="course-review-ava">
                                        <img src="{{ asset('/assets/img/icon/c-details-avata-01.png') }}"
                                             alt="details-avata">
                                    </div>
                                    <div class="course-review-content p-relative">
                                        <h5 class="course-ava-title mb-15">3. Поддержание команд</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Управление конфликтами и стрессами</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Эмоциональное выгорание в команде,
                                                    стратегия нейтрализации конфликтов
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Методы управления стрессами
                                                </li>
                                            </ul>

                                        </div>
                                        <p>Тема 2. Инструменты повышения сплоченности команд</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Тимбилдинг
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Командные встречи
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Методы диагностики эффективности
                                                    команд
                                                </li>
                                            </ul>

                                        </div>
                                        <p>Тема 3. Инструменты мониторинга уровня счастья в компании</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Оценка вовлеченности и
                                                    удовлетворенности сотрудников
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Пульс опросы. Уровень абсентеизма
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-check"></i>Stay интервью
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="c-details-sidebar">
                        <div class="course-details-widget">
                            <div class="section-title mb-60">
                                <h2 class="tp-sub-title">Из чего состоит</h2>
                            </div>
                            <div class="cd-information mb-35">
                                <ul>
                                    <li><i class="fa-light fa-calendars"></i> <label>Лекции (дней)</label>
                                        <span>3</span></li>
                                    <li><i class="fi fi-rr-chart-pie-alt"></i> <label>Консультации</label>
                                        <span>3</span></li>
                                    <li><i class="fi fi-rr-user"></i> <label>Практика (недель)</label> <span>3</span>
                                    </li>
                                    <li><i class="fa-light fa-clock-desk"></i> <label>Теория (%)</label> <span>20</span>
                                    </li>
                                    <li><i class="fi fi-sr-stats"></i> <label>Практика (%)</label> <span>80</span></li>
                                    <li><i class="fi fi-rs-diploma"></i> <label>Сертификат</label> <span>Да</span></li>
                                </ul>
                            </div>
                            <div class="cd-video-price">
                                <h3 class="pricing-video text-center mb-15"><span>&#8381;</span>5000</h3>
                                <div class="cd-pricing-btn text-center mb-30">
                                    <a class="tp-vp-btn-green" href="{{ route('contact') }}">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course-details-area-end -->
@endsection
