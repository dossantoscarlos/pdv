@extends('layouts.app')
@section('title' , 'Bem Vindo')
@section('content')
  <div class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto" >
        <div class="inner" style="display:none">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Bem vindo</h1>
        <p class="lead">Cover is a one-page template for building simple and
           beautiful home pages. Download, edit the text, and add your own
           fullscreen background photo to make it your own.</p>
        <p class="lead">
          <a href="{{route('login')}}" class="btn btn-lg btn-primary">Iniciar Sessão</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for.</p>
        </div>
      </footer>
    </div>
  </div>
  <style type="text/css">
    
    html,body{
    height: 100%;
    background-color: #333;
    }

    body {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    color: #fff;
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
    max-width: 42em;
    }

    .masthead {
    margin-bottom: 2rem;
    }

    .masthead-brand {
    margin-bottom: 0;
    }

    .nav-masthead .nav-link {
    padding: .25rem 0;
    font-weight: 700;
    color: rgba(255, 255, 255, .5);
    background-color: transparent;
    border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
    border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link + .nav-link {
    margin-left: 1rem;
    }

    .nav-masthead .active {
    color: #fff;
    border-bottom-color: #fff;
    }

    @media (min-width: 48em) {
    .masthead-brand {
      float: left;
    }
    .nav-masthead {
      float: right;
    }
    }


    /*
    * Cover
    */
    .cover {
    padding: 0 1.5rem;
    }
    .cover .btn-lg {
    padding: .75rem 1.25rem;
    font-weight: 700;
    }


    /*
    * Footer
    */
    .mastfoot {
    color: rgba(255, 255, 255, .5);
    }

  </style>
@endsection
