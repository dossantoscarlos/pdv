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
        <link href="{{ secure_asset('css/dashboard.css')}}" rel="stylesheet">
        <link href="{{ secure_asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">
    @else 
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
        <link href="{{ asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">
    @endif
    <style type="text/css">       
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
<body style="background-color: #FFF">
    @if(Auth::check())
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">NEWPDV</a>
          <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="#">Sign out</a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <span data-feather="home"></span>
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file"></span>
                      Orders
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="shopping-cart"></span>
                      Products
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="users"></span>
                      Customers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="bar-chart-2"></span>
                      Reports
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="layers"></span>
                      Integrations
                    </a>
                  </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved reports</span>
                  <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
                <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Current month
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Last quarter
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Social engagement
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Year-end sale
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 pt-0 px-0">
                @yield('content')
                @component('components.footer')
                @endcomponent
            </main>
        </div>
    </div>
    @elseif(Auth::check()==false)
        @component('components.navbarDiaHora')
        @endcomponent
        <div class="col-md-12">
            @yield('content')
        </div>
        @component('components.footerPdv')
        @endcomponent
    @endif
    
</body>
</html>
