@extends('layouts.app')
@section('title' , 'Bem Vindo')
@section('content')
<?php 
    $httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
    $https = 'https';
?>
<div class="row col-md-12">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <div class="text-center">
            <main role="main" class="inner cover">
                <figure class="figure figure-img">
                    @if (in_array($https, $httpArray)) 
                        <img src="{{secure_asset('storage/logos/logo.png')}}" class="img-fluid "> 
                    @else
                        <img src="{{asset('storage/logos/logo.png')}}" class="img-fluid col-md-10">
                    @endif
                </figure>
                <p class="lead">
                    @if (in_array($https, $httpArray)) 
                        @component('components.buttonHttps')
                        @endcomponent
                    @else
                        @component('components.buttonHttp')
                        @endcomponent
                    @endif
                </p>
            </main>
        </div>
    </div>
</div>

<style type="text/css">
    
    div.cover-container {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        color: #000;
        /*text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);*/
        box-shadow: inset 0 0 5rem rgba(255, 255, 255, .5); 
    }
    /*
    * Cover
    */
    .cover {
        padding: 0 1.5rem;
        padding-top:3px; 
    }
    .cover .btn-lg {
        font-family: 'Sawasdee', Sans-serif;
        padding: .75rem 1.25rem;
        font-weight: 700;
        background-color: #333;
        color:#FFF; 
    }
    
  </style>
@endsection
