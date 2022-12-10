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
                                    data-bs-target="#exampleModal"
                            >
                                Зарегистрироваться
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-info">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        @include('form.feedback')
    </div>
</div>
