@extends('layouts.app')
@section('title','PDV')
@section('content')

<main class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-8">
			@component('components.notafiscal')
			@endcomponent
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p>
				<input type="text" />
			</p>
		</div>
	</div>
</main>

@endsection