@extends('prometheus::admin.layouts.admin-panel')

@section('header', 'Редактировние пользователя')
@section('content')
    <x-actions>
        <x-action-button :href="route('admin.admins.password.edit', $admin)"
                         icon="fas fa-key" value="Редактировать пароль"/>
    </x-actions>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <x-section title="Основная информация" theme="primary">
            <x-input name="full_name" label="Полное имя *" :old="$admin->full_name" type="text"/>
            <x-input name="login" label="Логин *" :old="$admin->login" type="text"/>

            <x-select name="role" label="Роль *">
                @foreach($roles as $value => $role)
                    <option value="{{ $value }}"{{ old('role', $admin->role) === $value ? ' selected' : '' }}>
                        {{ $role }}
                    </option>
                @endforeach
            </x-select>

            <x-select name="status" label="Статус *">
                @foreach($statuses as $value => $status)
                    <option value="{{ $value }}"{{ old('status', $admin->status) === $value ? ' selected' : '' }}>
                        {{ $status }}
                    </option>
                @endforeach
            </x-select>
        </x-section>

        <x-actions>
            <x-back-button :href="route('admin.users.index')"/>
            <x-submit-button class="float-right" value="Сохранить изменения"/>
        </x-actions>
    </form>
@endsection