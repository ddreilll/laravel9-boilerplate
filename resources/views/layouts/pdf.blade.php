<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $deliveryOrder->code }}</title>
    <link href="{{ asset('plugins/bootstrap-4.6.2/css/bootstrap.min.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    @yield('content')
</body>

</html>
