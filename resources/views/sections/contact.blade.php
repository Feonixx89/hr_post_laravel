<!-- contact-area -->
<section class="contact-area pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="contact-wrapper mr-65 mb-60">
                    <div class="sub-contact-title">
                        <h5 class="contact-title mb-30">Связаться с нами</h5>
                    </div>
                    <div class="contact-form">
                        <form action="{{ route('sendMail') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form-input mb-25">
                                        <span>Имя</span>
                                        <input type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form-input mb-25">
                                        <span>Email</span>
                                        <input type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-input mb-40">
                                        <span>Комментарий</span>
                                        <textarea name="message" required></textarea>
                                    </div>
                                    <button type="submit" class="tp-btn">Записаться</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="contact-bg mb-60">
                    <img src="{{ asset('/assets/img/bg/contact-sub-bg-01.png') }}" alt="contact-bg">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
