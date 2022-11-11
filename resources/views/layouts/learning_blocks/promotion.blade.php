<style>
    #promotion {
        background-color: #02aab0;
        background-image: linear-gradient(135deg, #02aab0, #00cdac);
        color: #fff;
        height: 100%;
        border-top: 0;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        padding-bottom: 10%;
    }

    .section-title {
        margin: 0px;
        margin-bottom: 4.5rem;
        font-size: 4rem;;
        font-weight: bold;
        text-transform: uppercase;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .about-wrapper__image {
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    .about-wrapper__info {
        display: flex;
        height: 100%;
        justify-content: center;
        flex-direction: column;
    }

    .about-wrapper__info-text {
        text-align: left;
        white-space: pre-line;
    }

    .cta-btn {
        display: inline-block;
        position: relative;
        padding: 0.8rem 1.6rem;
        font-weight: bold;
        line-height: 1;
        z-index: 1;
        transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.6s;
    }

    .cta-btn::after {
        content: '';
        display: block;
        position: absolute;
        width: 0;
        height: 100%;
        left: 0;
        bottom: 0;
        z-index: -1;
        transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.3s;
    }

    .cta-btn--hero {
        background-image: linear-gradient(135deg, #02aab0 0%, #00cdac 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        border-width: 2px;
        border-style: solid;
        border-image: linear-gradient(135deg, #02aab0 0%, #00cdac 100%);
        border-image-slice: 1;
        cursor: pointer;
    }

    .cta-btn--hero:after {
        background-image: linear-gradient(135deg, #02aab0 0%, #00cdac 100%);
        width: 100%;
    }

    .cta-btn--hero:hover {
        -webkit-text-fill-color: #fff;
        text-decoration: none;
    }

    .cta-btn--resume {
        color: #fff;
        border: 2px solid #fff;
    }

    .cta-btn--resume:after {
        background: #fff;
        width: 100%;
    }

    .cta-btn--resume:hover {
        color: #00cdac;
        text-decoration: none;
    }

</style>
<section id="promotion">
    <div class="container">
        <h2 class="section-title">Успей записаться на программу "Эффективный рекрутмент"</h2>
        <div class="about-wrapper row">
            <div class="col-md-6 col-sm-6">
                <div class="about-wrapper__image">
                    <div class="rounded shadow-lg">
                        <img src="{{ asset('images/learning/profile.jpg') }}" alt="Успей записаться">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-wrapper__info">
                    <p class="about-wrapper__info-text">
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
                        Стоимость курса 5800 руб.
                    </p>
                    <span class="d-flex mt-3">
                        <a href="https://docs.google.com/document/d/1OFPCO4LUOn_hy2E1nP_fuzASu_eIUKQs/edit?usp=sharing&ouid=102524882000131465361&rtpof=true&sd=true"
                           class="cta-btn cta-btn--resume">Программа</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
