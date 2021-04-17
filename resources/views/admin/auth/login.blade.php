@extends("prometheus::admin.layouts.auth")
@section("title")
    Вход в систему
@endsection
@section("content")
    <p class="login-box-msg">Пожалуйста, войдите</p>

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf

        @include('prometheus::admin.partials.alerts.failed')

        <div class="input-group mb-3">
            <input name="login" type="text"
                   class="form-control @error('login') is-invalid @enderror"
                   placeholder="Логин"
                   value="{{ old('login') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            @error('login')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group mb-3">
            <input name="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   placeholder="Пароль">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
            </div>
        </div>
    </form>
@endsection
