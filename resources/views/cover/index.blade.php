@extends('layouts.app')
@section('title' , 'Bem Vindo')
@section('content')
<?php 
    $httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
    $https = 'https';
?>
<div class="content">
    <ul class="nav justify-content-end navbar-dark">
        <li class="nav-item text-center">
            <span id="date"></span><br/>
            <span id='hora'></span>
        </li>
    </ul>
    <div class="row col-md-12">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
           <div class="text-center">
              <main role="main" class="inner cover">
                <figure class="figure figure-img">
                    @if (in_array($https, $httpArray)) 
                        <img src="{{secure_asset('storage/logos/logo.png')}}" class="img-fluid "> 
                    @else
                        <img src="{{asset('storage/logos/logo.png')}}" class="img-fluid">
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
</div>
<footer class="footer">
    <div class="container-fluid row">
        <copy class='col-md-2'>CopyRight</copy>
        <div id='statusLabel' class="col-md-2 offset-md-2"> 
            <span class="label">Status : </span>
            <span class="">
                 @if (fsockopen("www.example.com", 80, $errno, $errstr, 30)==false)
                    DESCONECTADA
                @else
                    CONECTADA
                @endif
            </span>
        </div>
        <div class="col-md-4">
            <span class="label">HOST : </span>
            <span>{{ gethostbyaddr($_SERVER['REMOTE_ADDR'])}}</span>
        </div>
        <div class="col-md-2 offset-md-0" >
            <span class="label">IP LOCAL : </span>
            <span class="ip">{{ $_SERVER['REMOTE_ADDR']}}</span>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $(document).ready(function (){
        var array_mes = ["01","02","03","04","05","06","07","08","09", "10","11","12"];
        var data = new Date();
        $('#date').text(data.getDate()+'/'+array_mes[data.getMonth()]+'/'+data.getFullYear());
        if (data.getHours() <10){
            $('#hora').text('0'+data.getHours()+":"+data.getMinutes()+':'+data.getSeconds());
        }
        else{
            $('#hora').text(data.getHours()+":"+data.getMinutes()+':'+data.getSeconds());
        }
    });
</script>
  <style type="text/css">
    
    .label{
        color: rgba(233,233,4,1);
    }

    span#status, span#ip{
        color:#fff !important;
    }

    html,body{
        height: 100%;
        /*background-color: #333;*/
        background-color: #FFF;
    }
    .footer, ul , .cover .btn-lg{
        background-color: #333;
    }
    body {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
    }

    .footer{
        min-height: 5vh;
        border-color: #022;
        color: #FFF;
        text-align: center;
        padding: 12px;
        border:2px;
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
    #date, #hora{
        font-family:'Sawasdee', Sans-serif;
        color:#FFF;
        padding-right: 10px;
    }
    .nav{
        padding-right: 12px !important;
        padding-top:4px;
        padding-bottom: 4px;
    }

    a:hover,a:link{
        text-decoration: none !important; 
    }

    div .cover-container {
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
    color: rgba(0, 0, 0, .5);
    background-color: transparent;
    border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
    border-bottom-color: rgba(0, 0, 0, .25);
    }

    .nav-masthead .nav-link + .nav-link {
    margin-left: 1rem;
    }

    .nav-masthead .active {
    color: #000;
    border-bottom-color: #000;
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
        font-family: 'Sawasdee', Sans-serif;
        padding: .75rem 1.25rem;
        font-weight: 700;
  
        color:#FFF; 
    }


    /*
    * Footer
    */
    .mastfoot {
    color: rgba(0, 0, 0, .5);
    }

  </style>
@endsection
