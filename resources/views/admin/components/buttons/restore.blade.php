<form action="{{ $action }}" method="POST" class="d-inline-block">
    @csrf
    <button class="btn btn-primary btn-sm" type="submit">
        <i class="fas fa-trash-restore"></i>
    </button>
</form>