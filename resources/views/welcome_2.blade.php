<!DOCTYPE html>
<html lang="en">

<head>
    {{--    <link rel="shortcut icon" href="data/logo_title.png" type="image/png">--}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    {{--    <link rel="stylesheet" href="css/style.css">--}}
    {{--    <link rel="stylesheet" href="css/libs/animate.css">--}}
    {{--    <script src="js/script.js"></script>--}}
    <title>HR-POST</title>
</head>

<body>

<header class="header">
    <div class="header_conteiner ">
        <a href="#" class="logo"> <img src="{{ asset('images/logo.png') }}"></a>
    </div>
    <div class="info">
        <div class="email">
            <img src="{{ asset('images/mail.png') }}">
            <p>for-hrpost@yandex.ru</p>
        </div>

        <div class="phone">
            <img src="{{ asset('images/phone.png') }}">
            <p>+7 495 000-00-00</p>
        </div>
    </div>

    </div>
    <div class="icons">
        <a href="#"><img src="{{ asset('images/linkedin.png') }}"></a>
        <a href="https://vk.com/public212480302"><img src="{{ asset('images/vk.png') }}"></a>
    </div>


    <div class="menuToggle" onclick=" toggleMenu();"></div>

    <ul class="nav">
        <div class="menuToggle active" onclick=" toggleMenu();"></div>
        <li><a href="#banner" onclick=" toggleMenu();">Home</a></li>
        <li><a href="#service" onclick=" toggleMenu();">Почему нам доверяют</a></li>
        <li><a href="#team" onclick=" toggleMenu();">Наша команда</a></li>
        <li><a href="#programs" onclick=" toggleMenu();">Программы обучения</a></li>
        <li><a href="#testimonials" onclick=" toggleMenu();">О нас говорят</a></li>
        <li><a href="#company" onclick=" toggleMenu();">Нам доверяют</a></li>
        <li><a href="#contact" onclick=" toggleMenu();">Связаться с нами</a></li>
        <li></li>

    </ul>
</header>
<div class="allblur">

</div>
<div id ="banner" class="banner  _conteiner ">
    <div class="content wow slideInRight">
        <div class="first_line">
            <h2>HR-POST</h2>
        </div>
        <div class="second_line">
            <h2>Point Of Success Team</h2>
        </div>
    </div>
    <div class="third_line">
        <p>Точка успеха Вашей команды</p>
    </div>
</div>

<div id = "service" class="service">
    <div class="row"></div>
    <div class="content">
        <div class="box firstBx">
            <div class="imgBx">
                <div class="img_invert">
                    <img src="{{ asset('images/idea.png') }}">
                </div>
            </div>
            <div class="text">
                <h3>Проектная деятельность</h3>
                <p>Команда экспертов с более 20 летним опытом в HR</p>

            </div>
        </div>
        <div class="box secondBx">
            <div class="imgBx ">
                <img src="{{ asset('images/bull-horn.png') }}">
            </div>
            <div class="text">
                <h3>Программы обучения</h3>
                <p>Более 5 программ обучения для построения успешной команды силами HR и не только</p>

            </div>
        </div>

        <div class="box thirdBx">
            <div class="imgBx ">
                <div class="img_blue">
                    <img src="{{asset('images/pencil.png')}}">
                </div>
            </div>
            <div class="text">
                <h3>Разработка индивидуальных программ</h3>
                <p>Проведем обучение под запрос компании</p>

            </div>
        </div>

        <div class="box fourthBx">
            <div class="imgBx ">
                <div class="img_invert">
                    <img src="{{asset('images/conversation.png')}}">
                </div>
            </div>
            <div class="text">
                <h3>Консалтинг</h3>
                <p>Консультируем компании в HR сфере, внедряем современные методики и технологии</p>

            </div>
        </div>
    </div>

</div>

<section id = "team" class="team_section">
    <div class="row"></div>
    <div class="team _conteiner">

        <div class="title white">
            <h2 class="titleText">Наша команда</h2>
            <p class="line">__</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/P1.png')}}">
                </div>
                <div class="text">
                    <h3><span>Падалка Екатерина</span></h3>
                    <p>Сертифицированный командный коуч-практик (более 500 часов работы с командами), Agile коуч, ментор, бизнес-тренер, фасилитатор, консультант в сфере HR.

                        Сертифицированный тренер по eduScrum, TBR.</p>

                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/p2.jpg')}}">
                </div>
                <div class="text">
                    <h3><span>Бондаренко Оксана</span></h3>
                    <p>Работа в сферах HR и обучения более 20 лет.
                        Реализация свыше 25 консалтинговых проектов. Запуск оценочных процедур: ассессмент, оценка по компетенциям, 360.. Проведение рекрутинговых кампаний с 93%-ной комплектацией штата.
                        Развитие специальности «Управление персоналом» в образовательной среде</p>

                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/p3.jpg')}}">
                </div>
                <div class="text">
                    <h3><span>Киселева Галина</span></h3>
                    <p>В сфере HR более 11 лет.
                        Построение эффективной системы наставничества и адаптации.

                        Senior IT рекрутер. Полный цикл подбора персонала от уровня middle до уровня top в направлениях IT и Digital как в крупные российские и международные компании, так и в продуктовые стартапы из США, Великобритании и Италии</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section id = "programs" class="programs_section">
    <div class="programs _conteiner">
        <div class="row"></div>
        <div class="title white">
            <h2 class="titleText">Программы обучения</h2>
        </div>
        <div class="content">
            <div class="box">
                <div class="text">
                    <div class="top_text">
                        <h2>курс</h2>
                        <h3>ИНСТРУМЕНТЫ ЭФФЕКТИВНОГО РЕКРУТИНГА</h3>
                    </div>
                    <p>Программа «Эффективный рекрутинг» позволит в короткий срок и без отрыва от работы «прокачать» компетенции в области подбора, получить полезные и мощные инструменты привлечения в компанию лучших сотрудников.

                        Занятия проводятся по субботам
                        Действует раннее бронирование </p>


                </div>
            </div>
            <div class="box">
                <div class="text">
                    <div class="top_text">
                        <h2>курс</h2>
                        <h3>СЧАСТЛИВАЯ КОМАНДА
                            СИЛАМИ <span>HR</span></h3>
                    </div>
                    <p>Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе. </p>

                </div>
            </div>
            <div class="box">
                <div class="text">
                    <div class="top_text">
                        <h2>курс тренингов</h2>
                        <h3>КОМАНДООБРАЗОВАНИЕ
                            ЛИДЕРСТВО</h3>
                    </div>
                    <p>Это текст. Нажмите один раз и выберите «Редактировать текст» или просто кликните дважды, чтобы добавить свой текст и настроить шрифт. Вы можете переместить его в любое место на странице. Расскажите посетителям сайта о себе. </p>

                </div>
            </div>

            <div class="btnPlace">
                <div class="row"\>
                    <a href="https://hr-post.vercel.app/" class="btn">Программы</a>
                </div>
            </div>

        </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="row"></div>
    <div class="title white">
        <h2 class="titleText">О НАС ГОВОРЯТ</h2>
    </div>
    <div class="content">
        <div class="box">
            <div class="imgBx">
                <img src="{{ asset('images/1.jpg') }}">
            </div>
            <div class="text">
                <p>"Я прошла обучение в команде  профессионалов HR-Post. И просто в восторге от курса! Обучение построено так, что знания нужно сразу применять на практике, и это замечательно!
                    В рамках курса я научилась определять конкурентные преимущества вакансии, строить воронку подбора, грамотно составлять EVP, познакомилась с матрицей омниканального продвижения, с различными источниками найма и многое другое"</p>

            </div>
            <div class="text">
                <h3>Татьяна Кузина,<br> менеджер по персоналу</h3>
            </div>
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="{{asset('images/2.jpg')}}">
            </div>
            <div class="text">
                <p>"Хочу выразить искреннюю признательность преподавателям учебного курса «Инструменты эффективного рекрутинга».
                    Все объясняется доступным простым языком со множеством примеров. И каждое новое занятие-это новые знания и наши маленькие победы, может даже над собой. Я получила отличные навыки, новые знакомства с прекрасными людьми и теплоту общения."
                </p>

            </div>
            <div class="text">

                <h3>Елена Бажанова, <br>инспектор отдела кадров</h3>
            </div>
        </div>

        <div class="box">
            <div class="imgBx">
                <img src="{{asset('images/3.webp')}}">
            </div>
            <div class="text">
                <p>"Я прошла обучение в команде  профессионалов HR-Post. "</p>

            </div>
            <div class="text">
                <h3>Someone Famous</h3>
            </div>
        </div>
    </div>
</section>



<section id = "company" class="company_section">
    <div class="company _conteiner">
        <div class="row"></div>
        <div class="title white">
            <h2 class="titleText">Нам доверяют</h2>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/agroros-logo.jpg')}}">
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/dimzs.png')}}">
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/UMC.png')}}">
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="{{asset('images/samson.jpg')}}">
                </div>
            </div>



        </div>
    </div>
</section>


<section id = "contact" class="contact_section">
    <div class="contact _conteiner">
        <div class="row"></div>
        <div class="title">
            <h3 class="titleText">ЗАРЕГИСТРИРУЙСЯ СЕЙЧАС</h3>
            <p class="contactText">Пожалуйста, укажите ваши контактные данные:</p>
        </div>

        <div class="contactForm">
            <form action="php/form.php" method="post">
                <div class="inputBox">
                    <input name="Name" type="text" placeholder="Имя">
                </div>
                <div class="inputBox">
                    <input name="Surname"type="text" placeholder="Фамилия">
                </div>
                <div class="inputBox">
                    <input name="Email" type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input name="Phone" type="text" placeholder="Телефон">
                </div>
                <div class="inputBox">
                    <textarea name="Message" type="text" placeholder="Оставьте сообщение"></textarea>
                </div>
                <div class="inputBox">
                    <input name="send" type="submit" value="Отправить">
                </div>
            </form>
        </div>

    </div>
</section>

<section class="footer_section">
    <div class="footer _conteiner">
        <div class="footerlogo"><a href="#" class="logo"> <img src="{{asset('images/logo.png')}}"></a></div>
        <div class="footerfc">
            <div class="footerline">
                <p>______</p>
            </div>
            <div class="footerlogo">
                <h4>Контакты</h4>
            </div>
            <div class="footerinfo">
                <p><strong>for-hrpost@yandex.ru</strong></p>
                <p>Телефон:<strong>+7 495 000-00-00</strong></p>
                <p><strong>г. Саратов</strong></p>
            </div>
        </div>
        <div class="footersc">
            <div class="footerline">
                <p>______</p>
            </div>
            <div class="footerlogo">
                <h4>Соцсети</h4>
            </div>
            <div class="footericons">
                <a href="#"><img src="{{asset('images/linkedin.png')}}"></a>
                <a href="https://vk.com/public212480302"><img src="{{asset('images/vk.png')}}"></a>
            </div>
        </div>
    </div>
</section>


<script src="{{asset('images/wow.js')}}"></script>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>

</body>
</html>
