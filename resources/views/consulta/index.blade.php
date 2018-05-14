@extends('layouts.app')
@section('title', 'Consulta de preco')
@section('content')
<main class="content">
	<h1><small>Consultar preco</small></h1>
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<form method='get'>
				<input type="text" name="consultar" />
				<button type="submit">Consultar</button>
			</form>
		</div>
		<div class="col-md-12">
			<table>
				<thead>
					<tr>
						<td>Nome</td>
						<td>Codigo de Barra</td>
						<td>descricao</td>
						<td>Preco</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>2</td>
						<td>2</td>
						<td>3</td>
					</tr>
				</tbody>
			</table>
		</div> 

	</div>
</main>
@endsection