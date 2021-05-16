@extends('prometheus::admin.layouts.admin-panel')

@section('header', 'Добавление пользователя')
@section('content')
    <form action="{{ route('admin.users.password.change', $user) }}" method="POST">
        @csrf

        <x-section title="Пароль" theme="primary">
            <x-password name="new_password" label="Новый пароль *"/>
            <x-password name="new_password_confirmation" label="Подтверждение нового пароля *"/>
        </x-section>

        <x-actions>
            <x-back-button :href="route('admin.users.edit', $admin)"/>
            <x-submit-button class="float-right" value="Сохранить изменения"/>
        </x-actions>
    </form>
@endsection