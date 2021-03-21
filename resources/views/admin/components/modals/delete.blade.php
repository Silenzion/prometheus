<div class="modal fade" id="modal-delete">
    <div class="delete-modal-dialog modal-dialog" data-delete-id="">
        <div class="modal-content bg-danger">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    @if($force)
                        Вы собираетесь удалить безвозвратно. Продолжить?
                    @else
                        Вы собираетесь удалить. Продолжить?
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer justify-content-between border-0">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">
                    Закрыть
                </button>
                <button class="btn btn-outline-light" id="delete-submit">
                    @if($force)
                        Удалить безвозвратно
                    @else
                        Удалить
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>