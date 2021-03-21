@extends('prometheus::admin.layouts.admin_panel')

@section('header', 'Список пользователей')
@section('content')
{{--    <x-success-alert/>--}}
    <x-filter title="Фильтр пользователей">
        <div class="row">
            <div class="col-sm-6">
                <x-filter-input name="full_name" label="Имя"/>
            </div>
            <div class="col-sm-6">
                <x-filter-select name="status" label="Статус" :items="$statuses"/>
            </div>
        </div>
    </x-filter>
@endsection