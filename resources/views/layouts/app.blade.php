<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Home')</title>
    <?php 
        $httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
        $https = 'https';
    ?>
    @if (in_array($https, $httpArray)) 
        <script src="{{ secure_asset('js/app.js') }}"></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @else 
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    <style type="text/css">
        body {
          min-height: 100%;
          display: flex;
          flex-direction: column;
        }
        html,body{
            height: 100%;
            /*background-color: #333;*/
            background-color: #FFF!important;
        }
        .content{
            flex:1;
        }
        @font-face{
            font-family: 'Sawasdee';
            @if (in_array($https, $httpArray))
                src:local('Sawasdee.ttf'),url({{secure_asset('font/Sawasdee.ttf')}});
            @else 
                src:local('Sawasdee.ttf'),url({{asset('font/Sawasdee.ttf')}});
            @endif
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
    @component('components.footer')
    @endcomponent
</body>
</html>
