@extends('layouts.intensive')

@section('title', ' - Эффективный рекрутинг')

@section('course')
    <!-- course-area -->
    <section class="course-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-details-about mb-40">
                        <h2 class="tp-section-title mb-20">Об интенсиве</h2>
                        <p>Интенсив «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать»
                            компетенции в области подбора получить полезные и мощные инструменты привлечения в компанию
                            лучших сотрудников научиться грамотно продавать вакансию и располагать к себе кандидатов</p>
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="tp-choose-content mb-30">
                                <div class="section-title mb-25">
                                    <h2 class="tp-section-title mb-20">Если Вы:</h2>
                                </div>
                                <div class="tp-choose-list mb-35">
                                    <ul>
                                        <li><i class="fa-light fa-check"></i>испытываете постоянный стресс на работе
                                        </li>
                                        <li><i class="fa-light fa-check"></i>мечтаете о быстром и качественном закрытии
                                            вакансий
                                        </li>
                                        <li><i class="fa-light fa-check"></i>хотите освоить или развить компетенции
                                            рекрутера
                                        </li>
                                        <li><i class="fa-light fa-check"></i>нацелены на получение стабильного дохода
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title text-center mb-65">
                        <h3 class="tp-section-title mb-20">Модули</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-20">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-01.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Продажа
                                        вакансий</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>EVP</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Успех взаимодействия с
                                        заказчиком
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Что делать если
                                        заказчик не знает что ему нужно
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-02.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Оценка
                                        кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Секреты прескрининга
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Как оценить хард скилс
                                        и не дать слить кандидата
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Культурный код
                                        кандидата
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-03.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Поиск
                                        кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Секреты сорсинга
                                        (разбить по площадкам?)
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Матрица омниканальности
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Реферальные программы
                                    </li>
                                    <br>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-04.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Удержание
                                        кандидата</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Разработка оффера</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Предонбординг</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Подготовка к встрече
                                        кандидата
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-05.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Эффективность
                                        подбора</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Аналитика подбора</li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Бюджетирование подбора
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Автоматизация сбора
                                        данных
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tpcourse mb-40">
                        <div class="tpcourse__thumb p-relative w-img fix">
                            <a href="#"><img
                                    src="{{ asset('/assets/img/course/course-thumb-01.jpg') }}" alt="course-thumb"></a>
                            {{--                            <div class="tpcourse__tag">--}}
                            {{--                                <a href="#"><i class="fi fi-rr-heart"></i></a>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="tpcourse__content-2">

                            <div class="tpcourse__ava-title mb-15">
                                <h4 class="tpcourse__title tp-cours-title-color"><a href="#">Работа не
                                        выгорая</a></h4>
                                <div class="tpcourse__rating d-flex align-items-center right">
                                    <div class="tpcourse__pricing">
                                        <h5 class="price-title p-3"><span>&#8381;</span>5000</h5>
                                    </div>
                                </div>
                                <ul class="p-3">
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Компетенции рекрутера
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Ментальное здоровье
                                        рекрутера
                                    </li>
                                    <li><i class="fa-light fa-check"></i><span>&#32; &#32;</span>Карьерные траектории
                                        рекрутера
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__meta tpcourse__meta-gap pb-15 mb-15">
                                <ul class="d-flex align-items-center">
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-01.png') }}" alt="meta-icon"> <span>Онлайн занятия (4 часа)</span>
                                    </li>
                                    <li><img src="{{ asset('/assets/img/icon/c-meta-02.png') }}" alt="meta-icon"> <span>Групповой менторинг</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpcourse__category mb-10">
                                <ul class="tpcourse__price-list d-flex align-items-center">
                                    <li><a class="c-color-yellow" href="{{ route('contact') }}">Записаться</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course-area-end -->
@endsection
