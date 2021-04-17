@extends('prometheus::admin.layouts.admin-panel')

@section('header', 'Добавление пользователя')
@section('content')
    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf
        <x-section title="Основная информация" theme="primary">
            <x-input name="full_name" label="Полное имя *" :old="null" type="text"/>
            <x-input name="login" label="Логин *" :old="null" type="text"/>
            <x-select name="role" label="Роль *">
                @foreach($roles as $value => $role)
                    <option value="{{ $value }}"{{ old('role') === $value ? ' selected' : '' }}>
                        {{ $role }}
                    </option>
                @endforeach
            </x-select>

            <x-select name="status" label="Статус *">
                @foreach($statuses as $value => $status)
                    <option value="{{ $value }}"{{ old('status') === $value ? ' selected' : '' }}>
                        {{ $status }}
                    </option>
                @endforeach
            </x-select>

            <x-password name="password" label="Пароль *"/>
            <x-password name="password_confirmation" label="Подтверждение пароля *"/>
        </x-section>
        <x-actions>
            <x-back-button :href="route('admin.users.index')"/>
            <x-submit-button class="float-right" value="Добавить пользователя"/>
        </x-actions>
    </form>
@endsection