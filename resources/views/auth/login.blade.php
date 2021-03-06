@extends('layouts.app')
@section('title','Login')
@section('content')
<style type="text/css">
 
</style>
<?php
    $httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
    $https = 'https';
?>
<div class="container" id='main'>
        <div class="row justify-content-center">
            <div class='col-md-6' id='divfigure'>
                <figure class="figure figure-im">
                    @if(in_array($https, $httpArray))
                        <img src="{{secure_asset('storage/logos/Telaloginicon.png')}}" class="img-fluid"/>
                    @else
                        <img src="{{asset('storage/logos/Telaloginicon.png')}}" class="img-fluid"/>
                    @endif
                </figure>
            </div>
            <div class="col-md-6" id='form'>
              <form method="POST" action="{{ route('login') }}">
                {{csrf_field()}}
                    <div class="row col-md-12 d-flex align-items-end">
                        <img src="{{asset('storage/cadeado.png')}}" class="imgWidht">
                        <span class="col-md-6 mt-auto">
                            <b>{{strtoupper('Login')}}<br/>
                            {{strtoupper('Acesso PDV Vendas')}}</b>
                        </span>
                    </div>
                    <div class="col-md-9 p-2">
                      <input id="email" type="text" class="form-control{{ $errors->has('matricula') ? ' is-invalid' : '' }}" name="matricula" value="{{ old('matricula') }}" required autofocus>
                      @if ($errors->has('matricula'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('matricula') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="col-md-9 p-2">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif                    </div>
                    <div class="remove_right_padding col-md-9 d-flex align-items-end flex-column">
                        <div class="p-1">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Enter') }}
                          </button>
                        </div>
                        <div class="p-1">
                            <button type="Reset" class='btn btn-primary'>{{__('Limpar Campos')}}</button>
                        </div>
                        <div class="p-1">
                            <a href='{{url('/')}}' class='btn btn-primary'>{{__('Cancelar')}}</a>
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
        margin-top:10%;
    }

    .imgWidht{
        width: 70px;
        height: 70px;
    }
    .remove_right_padding{
      padding-right: 0 !important;
    }
    .btn{
      width: 150px;
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
