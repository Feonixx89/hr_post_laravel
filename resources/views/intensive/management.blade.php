@extends('layouts.intensive')

@section('title', ' - Менеджмент 1.0 Базовые навыки руководителя')

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
                                <h4 class="c-details-title">
                                    <a href="#">Менеджмент 1.0 Базовые навыки руководителя</a>
                                </h4>
                            </div>
                            <div class="tpcourse__meta course-details-list">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <div class="rating-gold d-flex align-items-center">
                                            <p>4.6</p>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                            <span>(23)</span>
                                        </div>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>3 Модуля</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/clock.png') }}" alt="meta-icon"
                                             width="25px" height="25px"> <span>16 Часов</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-details-about mb-40">
                            <h5 class="tp-c-details-title mb-20">О курсе</h5>
                            <p>Курс направлен на закрепление навыков успешного руководителя. Вы научитесь эффективной
                                постановки задач, грамотному принятию управленческих решений, делегированию управлению
                                мотивацией персонала. Обучение позволит повысить личную и командную эффективность,
                                сформировать системный подход к построению системы мотивации персонала, развить
                                эмоциональный интеллект
                            </p>
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
                                        <h5 class="course-ava-title mb-15">1. Результативное целеполагание в управлении</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Управленческий цикл. Компетенции современного руководителя</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Понятие компетенции современного руководителя</li>
                                                <li><i class="fa-light fa-check"></i>Роли руководителя в организации. Современные тенденции менеджмента</li>
                                            </ul>
                                        </div>
                                        <p>Тема 2. Постановка задач</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Назначение постановки задач в управленческом цикле</li>
                                                <li><i class="fa-light fa-check"></i>Требования, предъявляемые к формулировке целей. MBO как система управления</li>
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
                                        <h5 class="course-ava-title mb-15">2. Секреты мотивации персонала</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Принятие управленческих решений</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Понятие управленческого решения</li>
                                                <li><i class="fa-light fa-check"></i>Составляющие процесса принятия управленческих решений</li>
                                                <li><i class="fa-light fa-check"></i>Факторы, влияющие на процесс принятия решений</li>
                                            </ul>
                                        </div>
                                        <p>Тема 2. Мотивация персонала</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Понятие и содержание мотивации персонала</li>
                                                <li><i class="fa-light fa-check"></i>Подходы к мотивации сотрудников</li>
                                                <li><i class="fa-light fa-check"></i>Самомотивация</li>
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
                                        <h5 class="course-ava-title mb-15">3. Создание здоровой атмосферы в команде</h5>
                                        <div class="tpcourse__rating-icon d-flex align-items-center mb-10">
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-ss-star"></i>
                                            <i class="fi fi-rs-star"></i>
                                        </div>
                                        <p>Тема 1. Делегирование полномочий</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Уровень текучести (в т.ч во время испытательного срока), затраты на персонал, производительность, срок закрытия вакансий</li>
                                            </ul>
                                        </div>
                                        <p>Тема 2. Управление социально-психологическим климатом</p>
                                        <div class="mb-5">
                                            <ul>
                                                <li><i class="fa-light fa-check"></i>Удовлетворенность, вовлеченность персонала</li>
                                                <li><i class="fa-light fa-check"></i>Организационная культура</li>
                                                <li><i class="fa-light fa-check"></i>employer бренд работодателя</li>
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
                                <h3 class="text-center m-5 green-text">Информация</h3>
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

