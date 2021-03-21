<button class="delete-button btn btn-danger btn-sm" type="button" data-toggle="modal"
        data-target="#modal-delete" data-delete-id="{{ $item->id }}">
    <i class="fas fa-trash"></i>
</button>

<form action="{{ $action }}" method="POST" class="d-none" id="delete-form-{{ $item->id }}">
    @csrf
    @method('DELETE')
</form>