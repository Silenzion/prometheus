@extends('prometheus::admin.layouts.admin-panel')

@section('header', 'Добавление пользователя')
@section('content')
    <x-actions>
        <x-action-button :href="route('admin.users.edit', $user)"
                         icon="fas fa-pencil-alt" value="Редактировать"/>
    </x-actions>
    <x-section title="Основная информация" theme="default" class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th>Полное имя</th>
                <td>{{ $user->full_name }}</td>
            </tr>
            <tr>
                <th>Логин</th>
                <td>{{ $user->login }}</td>
            </tr>
            <tr>
                <th>Роль</th>
                <td>{{ $user->role }}</td>
            </tr>
            <tr>
                <th>Статус</th>
                <td>{{ $user->status }}</td>
            </tr>
            </tbody>
        </table>
    </x-section>
    <x-actions>
        <x-back-button :href="route('admin.users.index')"/>
    </x-actions>
@endsection