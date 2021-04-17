@extends('prometheus::admin.layouts.admin-panel')

@section('header', 'Список пользователей')
@section('content')
    <x-success-alert/>
    <x-actions>
        <x-add-button :href="route('admin.users.create')"/>
    </x-actions>
    <x-filter title="Фильтр пользователей">
        <div class="row">
            <div class="col-sm-6">
                <x-filter-input name="full_name" label="Имя"/>
            </div>
            <div class="col-sm-6">
                <x-filter-input name="login" label="Логин"/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <x-filter-select name="role" label="Роль" :items="$roles"/>
            </div>
            <div class="col-sm-6">
                <x-filter-select name="status" label="Статус" :items="$statuses"/>
            </div>
        </div>
    </x-filter>
    @if(count($users) < 1)
        <x-no-data/>
    @else
        <x-section title="Пользователи" theme="default" class="table-responsive p-0">
            <table class="table table-striped text-nowrap">
                <thead>
                <tr>
                    <th>Имя</th>
                    <th>Логин</th>
                    <th>Группа пользователей</th>
                    <th>Статус</th>
                    @can('super-admin')
                    <th>Действия</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->login }}</td>
                        <td>
                            @if ($user->isSuperAdmin())
                                <span class="badge badge-danger">Супер администратор</span>
                            @endif
                            @if ($user->isUser())
                                <span class="badge badge-primary">Пользователь</span>
                            @endif
                            @if ($user->isContentManager())
                                <span class="badge badge-secondary">Контент-менеджер</span>
                            @endif
                        </td>
                        <td>
                            @if ($user->isActive())
                                <x-badge type:="status" :message="Активен" :theme="success" />
                            @endif
                            @if ($user->isInactive())
                                <x-badge type:="status" :message="Неактивен" :theme="warning"/>
                            @endif
                        </td>
                        @can('super-admin')
                            <td>
                                <x-edit-button :href="route('admin.users.edit', $admin)"/>
                                <x-delete-button :item="$admin" :action="route('admin.users.destroy', $user)"/>
                            </td>
                        @endcan

                    </tr>
                @endforeach
                </tbody>
            </table>

            <x-slot name="pagination">
                {{ $admins->links('prometheus::admin.partials.pagination') }}
            </x-slot>
        </x-section>
    @endif
@endsection
