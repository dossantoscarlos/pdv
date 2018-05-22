@extends('layouts.app')
@section('title','Login')
@section('content')
<style type="text/css">
  #main{
    margin-top:2%;
  }
</style>
<?php
    $httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
    $https = 'https';
?>
@component('components.navbarDiaHora')
@endcomponent
<div class="container" id='main'>
        <div class="row justify-content-center">
            <div class='col-md-6' id='divfigure'>
                <div>
                    <img src="{{asset('storage/login-password.png')}}" class="img-fluid" id='login-password'>
                </div>
                <figure class="figure figure-im">
                    @if(in_array($https, $httpArray))
                        <img src="{{secure_asset('storage/logo_fundo_branco.png')}}" class="img-fluid"/>
                    @else
                        <img src="{{asset('storage/logo_fundo_branco.png')}}" class="img-fluid"/>
                    @endif
                </figure>
            </div>
            <div class="col-md-6" id='form'>
                <form>
                    <div class="row col-md-12 d-flex align-items-end">
                        <img src="{{asset('storage/cadeado.png')}}" class="imgWidht">
                        <span class="col-md-6 mt-auto">
                            <b>{{strtoupper('Login')}}<br/>
                            {{strtoupper('Acesso PDV Vendas')}}</b>
                        </span>
                    </div>
                    <div class="col-md-9 p-2">
                       <input type="text" name="" class='form-control' placeholder="Usuario" />
                    </div>
                    <div class="col-md-9 p-2">
                        <input type="password" name="" class="form-control" placeholder="Senha"/>
                    </div>
                    <div class=" col-md-9 d-flex align-items-end flex-column">
                        <div class="p-1">
                            <button type="Button" class="btn btn-primary">Enter</button>
                        </div>
                        <div class="p-1">
                            <button type="Button" class='btn btn-primary'>Limpar Tela</button>
                        </div>
                        <div class="p-1">
                            <button type="button" class='btn btn-primary'>Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
<style type="text/css">
    #login-password{
        height: 64px;
        opacity:0.7; /* Firefox & Chrome */
        filter:alpha(opacity=70); /* IE */
    }
    div#form{
        padding-top: 7%;
    }
    figure{
        border: 0 solid blue;
    }

    .imgWidht{
        width: 70px;
        height: 70px;
    }
    .btn{
      width: 100px;
      background-color: #333;
      border:0 solid #333;
    }
     .btn:hover{
       background-color: #ccc;
       border:0 solid #333;
       color:#000;
     }
</style>
@endsection
