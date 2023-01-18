<form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="{{ route('sendFeedback') }}">
    <div class="mb-3">
        <label for="firstName"></label>
        <input type="text" class="form-control" id="firstName" placeholder="Введите ваше имя" value="" required=""
               name="userName">
    </div>
    <div class="mb-3">
        <label for="floatingInput"></label>
        <input type="email" class="form-control" id="floatingInput" placeholder="Введите ваш эл. адрес" name="userEmail"
               required="" value="">
    </div>
    <div class="mb-3">
        <label for="phone"></label>
        <input type="text" class="form-control" id="phone" placeholder="Введите ваш телефон" value="" required=""
               name="userPhone">
    </div>

    <hr class="my-4">
    <small class="text-muted">Я согласен на обработку моих персональных данных, в соответствии с условиями
        <a href="{{ route('policy') }}">
            политики
        </a>
    </small>
</form>
