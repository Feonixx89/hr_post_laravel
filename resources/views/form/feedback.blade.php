<form>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Имя" aria-label="Username" aria-describedby="basic-addon1"
               id="username_id" value="123">
    </div>
    <div class="input-group mb-3">
        <input type="text"
               class="form-control"
               placeholder="Фамилия"
               aria-label="UserSurname"
               aria-describedby="basic-addon2"
               id="surname_id"
        >
    </div>
    <div class="input-group mb-3">
        <input type="text"
               class="form-control"
               placeholder="Телефон"
               aria-label="UserPhone"
               aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
        <input type="email"
               class="form-control"
               placeholder="Электронная почта"
               aria-label="UserEmail"
               aria-describedby="basic-addon3">
    </div>
    <div class="input-group">
        <textarea class="form-control" aria-label="With textarea" placeholder="Сообщение"></textarea>
    </div>
    <div class="mb-3 form-check input-group">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <a href="{{ route('policy') }}"> Отправляя форму, вы соглашаетесь с условиями соглашения обработки персональных
            данных </a>--}}
    </div>
    <button type="submit" class="btn btn-info">Отправить</button>
</form>
