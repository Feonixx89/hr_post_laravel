<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-1 fw-bold">HR-POST</h1>
        <h2 class="display-2 fw-bold text-info">Point Of Success Team</h2>
        <p class="display-5">Точка успеха Вашей команды</p>
    </div>
</div>

<style>
    /*=================================
    Service Area
    ====================================*/
    .service-card {
        padding: 20px 30px 60px 30px;
        text-align: center;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
    }

    .service-card-1 {
        background-color: black;
        color: white;
    }

    .service-card-2 {
        background-color: gray;
        color: black;
    }

    .service-card-3 {
        background-color: white;
        color: rgb(43, 128, 161);
    }

    .service-card-4 {
        background-color: rgb(43, 128, 161);
        color: white;
    }

    .service-card:hover i {
        color: #ffffff;
    }

    .service-card:hover a h3 {
        color: #ffffff;
    }

    .service-card:hover p {
        color: #ffffff;
    }

    .service-card.active i {
        color: #ffffff;
    }

    .service-card.active a h3 {
        color: #ffffff;
    }

    .service-card.active p {
        color: #ffffff;
    }

    .service-card i {
        font-size: 70px;
        color: #506f90;
        margin-bottom: 15px;
    }

    .service-card a {
        display: block;
    }

    .service-card a h3 {
        font-size: 20px;
        color: #234467;
        font-weight: 900;
        margin-bottom: 10px;
    }

    .service-card .learn-more-btn i {
        font-size: 18px;
        position: relative;
        top: 3px;
        color: #db8c23;
    }

    .service-card p {
        margin-bottom: 10px;
    }

    .service-card-bg {
        position: relative;
    }

    .service-card-bg::before {
        content: '';
        position: absolute;
        width: 0;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        background-color: rgb(121, 139, 89);
        z-index: -1;
        opacity: 0;
        -webkit-transition: 0.7s;
        transition: 0.7s;
    }

    .service-card-bg:hover::before {
        opacity: 1;
        width: 100%;
    }

    .service-card-bg-two:hover .learn-more-btn i {
        color: #ffffff;
    }

    .service-card-bg-two.active .learn-more-btn i {
        color: #ffffff;
    }

    .service-card-bg-three:hover .learn-more-btn i {
        color: #ffffff;
    }

    .service-card-bg-three.active .learn-more-btn i {
        color: #ffffff;
    }

    .service-item:hover i {
        color: #ab842a;
    }

    .service-item i {
        font-size: 70px;
        color: #506f90;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .service-item a {
        display: block;
    }

    .service-item a h3 {
        font-size: 22px;
        color: #020d26;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .service-item .learn-more-btn i {
        font-size: 18px;
        position: relative;
        top: 3px;
        color: #ab842a;
    }

    /*=================================
    Service Area End
    ====================================*/
    .pt-100 {
        padding-top: 100px;
    }

    .pb-70 {
        padding-bottom: 70px;
    }
</style>
<div class="service-area pt-100 pb-70">
    <div class="">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="service-card service-card-1 service-card-bg">
                    <p class="text-break">
                        <img src="{{ asset('images/idea.png') }}" alt="" width="80px" height="80px"
                             style="filter: invert(1)">
                    </p>
                    <h4>Проектная деятельность</h4>
                    <p>Команда экспертов с более 20 летним опытом в HR</p>
                    <br>
                    <br>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="service-card service-card-2 service-card-bg">
                    <p class="text-break">
                        <img src="{{ asset('images/bull-horn.png') }}" alt="" width="80px" height="80px">
                    </p>
                    <h4>Программы обучения</h4>
                    <p>Более 5 программ обучения для построения успешной команды силами HR и не только</p>
                    <br>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="service-card service-card-3 service-card-bg">
                    <p class="text-break">
                        <img src="{{ asset('images/pencil.png') }}" alt="" width="80px" height="80px">
                    </p>
                    <h4>Разработка индивидуальных программ</h4>
                    <p>Проведем обучение под запрос компании</p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="service-card service-card-4 service-card-bg">

                    <p class="text-break">
                        <img src="{{ asset('images/conversation.png') }}" alt="" width="80px" height="80px" style="filter: invert(1)">
                    </p>
                    <h4>Консалтинг</h4>
                    <p>Консультируем компании в HR сфере, внедряем современные методики и технологии</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
