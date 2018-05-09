<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Home')</title>
    @if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' )
        <script src="{{ secure_asset('js/app.js') }}"></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @else 
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    @yield('content')
</body>
</html>
