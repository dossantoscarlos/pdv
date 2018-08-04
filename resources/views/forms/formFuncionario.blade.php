<div class='container' style='margin-top: 2%'>
	<form method="post" action='{{route('funcionario.createOne')}}'>		
		<fieldset class="fieldset">
			<legend class="legend col-md-4 offset-md-0">Cadastro do funcionario</legend>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nome Completo </label>
					<input type="email" class="form-control" id="inputEmail4" placeholder="Email" disabled="true">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">matricula</label>
					<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Funcao</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" >
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputCity">City</label>
					<input type="text" class="form-control" id="inputCity">
				</div>
				<div class="form-group col-md-4">
					<label for="inputState">State</label>
					<select id="inputState" class="form-control">
						<option selected>Choose...</option>
						<option>...</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Zip</label>
					<input type="text" class="form-control" id="inputZip">
				</div>
			</div>
			<div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" id="gridCheck">
					<label class="form-check-label" for="gridCheck">
						Check me out
					</label>
				</div>
			</div>
		</fieldset> 
	</form>
</div>
<style type="text/css">
	.fieldset, .legend{
		border:2px solid #000;
		border-radius: 10px;
	}
	.fieldset{
		padding: 20px;
	}
</style>