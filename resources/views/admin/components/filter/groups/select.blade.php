<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control custom-select" id="{{ $name }}" name="{{ $name }}">
        <option value="">Не выбрано</option>
        @foreach($items as $value => $item)
            <option value="{{ $value }}"{{ request($name) == $value ? ' selected' : '' }}>
                {{ $item }}
            </option>
        @endforeach
    </select>
</div>
