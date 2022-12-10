<form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="{{ route('sendFeedback') }}">
    <div class="mb-3">
        <label for="firstName"></label>
        <input type="text" class="form-control" id="firstName" placeholder="Введите имя" value="" required=""
               name="userName">
    </div>
    <div class="mb-3">
        <label for="floatingInput"></label>
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="userEmail"
               required="" value="">
    </div>
    <div class="mb-3">
        <label for="phone"></label>
        <input type="text" class="form-control" id="phone" placeholder="+7 999 123-45-67" value="" required=""
               name="userPhone">
    </div>

    <button class="btn btn-sm btn-outline-info w-100" type="submit">Оставить заявку</button>
    <hr class="my-4">
    <small class="text-muted">Нажимая эту кнопку, вы соглашаетесь с условиями использования.</small>
</form>
