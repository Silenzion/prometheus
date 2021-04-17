<div class="form-group{{ $counter ? ' js-char-counter' : '' }}">
    <label for="{{ $name }}">
        {{$label}}
        @if($counter)
            <small class="badge badge-info ml-2"></small>
        @endif
    </label>
    <textarea name="{{ $name }}" id="{{ $name }}"
              class="form-control @error($name) is-invalid @enderror" {{ $attributes }}
    >{{ old($name, $old) }}</textarea>
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>