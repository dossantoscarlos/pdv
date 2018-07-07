@extends('layouts.app')
<?php 
$httpArray = explode(':', ((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'http'));
$https = 'https';
?>
@section('title', 'Consulta de preco')
@if (in_array($https, $httpArray)) 
<script src="{{ secure_asset('js/avdfraeaq.js') }}"></script>
<script src="{{ secure_asset('js/modal.js') }}"></script>
@else 
<script src="{{asset('js/avdfraeaq.js')}}"></script>
<script src="{{asset('js/modal.js') }}"></script>
@endif
@section('content')
<style type="text/css">
#caixa{
	margin-top: 8%;
	border:2px solid #000;
	padding: 20px;
	border-radius: 20px;
}
</style>
<main>
	<div class="container">
		<div class="row" style="margin-top: 2%;">
			<div class="col-md-8 row">
				<div class="col-md-12" id='caixa' style='display: none'>
					<table class="table " id='table' >
						<thead>
							<th>Nome</th>
							<th>Marca</th>
							<th>Descrição</th>
							<th>Preço</th>
							<th>Codigo de barra</th>
							<th>Quantidade</th>
						</thead>
						<tbody id='tbody'>

						</tbody>
					</table>
					<img src="{{asset('storage/logo_fundo_branco.png')}}" class="img-fluid col-md-8 offset-md-2">
				</div>
				<div class="col-md-12" id='imagem'>
					<figure >
						<img src="{{asset('storage/logo_fundo_branco.png')}}" class="img-fluid col-md-12">
					</figure>
				</div>
			</div>
			<div class='col-md-4'>
				<h1 class="col-md-12">Tela de Consulta</h1>
				<label class="col-md-12">Consulta produto - digite codigo de barras
					<input type="text" name='consultar' id="consultar" class="form form-control" />
				</label>
				<label class="col-md-12">
					Descrição do produto
					<input type="text" name='descricao' id="descricao" class="form form-control" />
				</label>
				<label class="col-md-12">Codigo de Barras
					<input type="text" name='code' id="code" class="form form-control" />	
				</label>
				<label class="col-md-12">Valor Unitario
					<input type="text" name='valorproduto' id="valorproduto" class="form form-control" />
				</label>
			</div>
		</div>
		@component('components.modalDescricao')
		@endcomponent

		@component('components.modalAlert')
		@endcomponent
	</div> 
</main>
@endsection
