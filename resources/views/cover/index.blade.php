@extends('layouts.app')
@section('title' , 'Bem Vindo')
@section('content')
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
                    <?php 
                        $httpArray = explode(':', $_SERVER['HTTP_REFERER']);
                        $https = 'https';
                     ?>
                    @if (in_array($https, $httpArray)) 
                        <img src="{{secure_asset('storage/logos/logo.png')}}" class="img-fluid "> 
                    @else
                        <img src="{{asset('storage/logos/logo.png')}}" class="img-fluid">
                    @endif
                </figure>
                <p class="lead">
                    <a href="{{route('login',false)}}" class="cover btn-lg btn-default">Iniciar PDV</a>
                    <a href="{{route('consulta_index')}}" class="cover btn-lg btn-default">Consultar Preço</a>
                </p>
              </main>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    testa
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
        height: 40px;
        border-color: #022;
        color: #FFF;
        text-align: center;
        padding: 12px;
        border:2px;
    }

    @font-face{
        font-family: 'Sawasdee';
       <?php 
            $httpArray = explode(':', $_SERVER['HTTP_REFERER']);
            $https = 'https';
        ?>
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
