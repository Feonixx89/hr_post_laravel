<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach($programs as $program)
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="text-center p-5 p-5" style="height: 150px">{{ $program->name }}</h5>
                    <p class="card-text">
                        @foreach($program->compounds()->get() as $compound)
                            {{ $compound->name }}
                            <br>
                        @endforeach
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button"
                                    class="btn btn-sm btn-primary m-1 show-form-send-feedback "
                                    data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop{{ $program->id }}">
                                Зарегистрироваться
                            </button>
                            <button type="button"
                                    class="btn btn-sm btn-primary intensive-module m-1"
                                    data-route="{{ route('intensiveModule', ['id' => $program->id]) }}"
                            >
                                Подробнее
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-modal :program="$program"></x-modal>
    @endforeach
</div>
