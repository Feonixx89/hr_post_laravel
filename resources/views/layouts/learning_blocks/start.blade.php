<style>

    #start {
        min-height: 100vh;
        height: 100vh;
        display: flex;
        align-items: center;
        border-bottom: 0;
        background: #fff;
        font-weight: 400;
        color: #272341;
        padding: 0 5.6rem;
        margin-bottom: 0;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
    }

    .cta-btn {
        display: inline-block;
        position: relative;
        padding: 0.8rem 1.6rem;;
        font-weight: bold;
        line-height: 1;
        z-index: 1;
        transition: all cubic-bezier(0.19, 1, 0.22, 1) 0.6s;
    }

    .cta-btn:after {
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

    .text-color-main {
        background-image: linear-gradient(135deg, #02aab0, #00cdac);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-title {
        font-size: 5.6rem;
        font-weight: 700;
        margin-bottom: 3.2rem;
        text-align: left;
    }

    .hero-cta {
        display: flex;
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

    .cta-btn--hero::after {
        background-image: linear-gradient(135deg, #02aab0 0%, #00cdac 100%);
        width: 100%;
    }

    .cta-btn--hero:hover {
        -webkit-text-fill-color: #fff;
        text-decoration: none;
    }

</style>

<section id="start" class="jumbotron">
    <div class="container">
        <h1 class="hero-title">
            HR-POST
            <span class="text-color-main">Point Of Success Team</span>
            <br>
            команда экспертов с 20-летним опытом успешного закрытия вакансий
        </h1>
        <p class="hero-cta">
            <span class="cta-btn cta-btn--hero">
                <a href="{{ route('index') }}">Узнать больше</a>
            </span>
        </p>
    </div>
</section>
