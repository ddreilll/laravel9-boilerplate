<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png ') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('favicon/favicon-32x32.png ') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png ') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest ') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="{{ asset('plugins/bootstrap-4.6.2/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/adminlte.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/fontawesome-pro/css/all.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    @yield('content')
    @yield('scripts')
</body>

</html>
