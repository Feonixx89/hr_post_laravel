<div class="modal fade" id="staticBackdrop{{ $program->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    {{ $program->name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                @include('form.feedback')
            </div>
            <div class="modal-footer">
                <button type="button"
                        class="btn btn-primary apply-for-intensive"
                        data-route="{{ route('sendApply') }}"
                        data-program-name="{{ $program->name }}"
                >
                    Записаться
                </button>
            </div>
        </div>
    </div>
</div>
