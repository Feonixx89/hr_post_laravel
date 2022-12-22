<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($programs as $program)
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="text-center p-5 p-5">{{ $program->name }}</h5>
                    <p class="card-text">
                        @foreach($program->compounds()->get() as $compound)
                            {{ $compound->name }}
                            <br>
                        @endforeach
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button"
                                    class="btn btn-sm btn-outline-info program-registry"
                                    data-program-id="{{ $program->id }}"
                                    data-route="{{ route('sendFeedback') }}"
                                    data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"
                            >
                                Зарегистрироваться
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-outline-info about-program"
                                    data-route="{{ route('about' , [ 'id' => $program->id ]) }}"
                                    data-program-id="{{ $program->id }}"
                            >Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Заголовок модального окна</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                @include('form.feedback')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Понял</button>
            </div>
        </div>
    </div>
</div>
