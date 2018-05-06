@extends('layouts.app')
@section('title' , 'Dashboard')
@section('content')
<div id='login'>
		<form method="POST" accept-charset="utf-8" enctype="utf-8" action="{{ route('home') }}">
			<div class="columnDireita">
				<div class="component" style="text-align: center; ">
					<label style="font-size: 18pt;font-stretch: expanded"><b>Login-In</b></label>
				</div>
				<div class="component">
					<input type="text" placeholder="Usuario" name="users"  title='Campo de Usuario requerido' />
				</div>
				<div class="component" style="display:none">
					@csrf
				</div>
				<div class="component">
					<input type="password" name="pass"  title='Campo de Senha requerido' placeholder="********" />
				</div>

				<div class="component">
					<a href="#">Recuperar senha</a>
				</div>

				<div class="component">
					<input type="submit" name="iniciar_sessao" value="Iniciar Sessão" />
				</div>
			</div>
		</form>
	</div>
	<div class="component">
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="lista">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
@endsection
<style type="text/css">
	*{
		padding: 0;
		margin: 0 auto;
	}
	.lista{
		list-style: none;
	}
	.columnDireita{
		margin-top: 0 auto;
		margin-top: 10%;
		max-width: 400px;
	}

	#login{
		margin:0 auto;
		margin-top:6%;
		min-width: 600px;
		max-width: 700px;
		border:2px solid;
		border-radius: 10px;
		height: <?php
			function height($valor){
				return ($valor/2 + 100);
			}
			echo height(700);
		?>px;
	}

	.component{
		padding: 12px;
	}
	input[type='text']:hover,input[type='password']:hover{
		border-color: #FCCFCF;
		border-radius: 10px 10px 10px 10px;
	}

	input[type='text'],input[type='password']{
		width: 400px;
		padding: 10px;
		font-size: 12pt;
		border-radius: 10px 10px 10px 10px;
		border:2px solid #CCCCCC;
	}

	input[type='submit']{
		border-radius: 10px 10px 10px 10px;
		font-size: 14px;
		color:#FFFF;
		padding: 12px;
		border: none;
		box-shadow: 2px 2px 2px 2px #CCCCCC;
		background-color:blue;
		cursor:pointer;
	}




</style>
