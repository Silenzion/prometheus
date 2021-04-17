<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Админ-панель</title>

    <link href="{{ asset('prometheus/build/css/admin.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini pace-primary layout-fixed">

<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('core/build/img/no-user-image.jpg') }}"
                         class="user-image img-circle elevation-2" alt="Аватар пользователя">
                    <span class="d-none d-md-inline">
{{--                        {{ Auth::user()->full_name }}--}}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header bg-primary h-auto">
                        <img
                                src="{{ asset('core/build/img/no-user-image.jpg') }}"
                                class="img-circle elevation-2"
                                alt="Аватар пользователя">
                        <p>
{{--                            {{ Auth::user()->full_name }}--}}
                            <small>
{{--                                {{ Auth::user()->roleName() }}--}}
                            </small>
                        </p>
                    </li>
                    <li class="user-footer">
{{--                        <a href="{{ route('admin.profile.index') }}"--}}
{{--                           class="btn btn-default btn-flat">--}}
{{--                            Профиль--}}
{{--                        </a>--}}
{{--                        <a href="{{ route('admin.logout') }}"--}}
{{--                           class="btn btn-default btn-flat float-right"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                           document.getElementById('logout-Form').submit();">--}}
{{--                            Выйти--}}
{{--                        </a>--}}
{{--                        <Form id="logout-Form" action="{{ route('admin.logout') }}" method="POST"--}}
{{--                              class="d-none">--}}
{{--                            @csrf--}}
{{--                        </Form>--}}
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
{{--        <a href="{{ route('admin.orders.index') }}" class="brand-link">--}}
{{--            <img src="{{ asset('vendor/core/build/img/AdminLTELogo.png') }}"--}}
{{--                 alt="Логотип AdminLTE"--}}
{{--                 class="brand-image img-circle elevation-3"--}}
{{--                 style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-light">AdminLTE 3</span>--}}
{{--        </a>--}}

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    @include('prometheus::admin.partials.sidebar')
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-5">
{{--                        <h1 class="m-0 text-dark">@yield('header')</h1>--}}
                    </div>

                    <div class="col-sm-7">
{{--                        @section('breadcrumbs')--}}
{{--                            @include('core::admin.partials.breadcrumbs', ['breadcrumbs' => Breadcrumbs::generate()])--}}
{{--                        @show--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('prometheus/build/js/admin.js') }}"></script>

</body>

</html>