<div class="container d-flex justify-content-center">
	<fieldset class="fieldset col-md-10 ">
		<legend class="legend col-md-4 offset-md-0">Dados Pessoais</legend>
		<form method="post" action='{{route('pessoa.createOne')}}'>
			<div class="form-row">
				{{csrf_field()}}
				<div class="form-group col-md-11">
					<label>Nome Completo</label>
					<input type="text" name="nome_completo" id='nome_completo' class="form-control" />
				</div>
				<div class="form-group col-md-5">
					<label for='cpf'>CPF</label>
					<input type="text" name="cpf" id="cpf" class="form-control" />
				</div>
				<div class="col-md-6">
					<label for='email'>Email</label>
					<input type="email" name="email" id='email' class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label for='cep'>CEP</label>
					<input type="text" name="cep" id='cep' class="form-control" />
				</div>
				<div class="form-group col-md-3">
					<label for='rua'>Estado</label>
					<input type="text" name="rua" id='rua' class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label for='rua'>Cidade</label>
					<input type="text" name="rua" id='rua' class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label for='rua'>Bairro</label>
					<input type="text" name="rua" id='rua' class="form-control">
				</div>	
				<div class="form-group col-md-4">
					<label for='rua'>Rua</label>
					<input type="text" name="rua" id='rua' class="form-control">
				</div>			
				<div class="form-group col-md-4">
					<label for='numero'>Numero</label>
					<input type="number" name="numero" id='numero' class="form-control">
				</div>
				<div class="form-group col-md-4">
					<label for='complemento'>Complemento</label>
					<input type="text" name="complemento" id='complemento' class="form-control">
				</div>
				<div class="col-md-12 row">
				<div class="form-group col-md-3">
					<label for='status_civil'>Status Civil</label>
					<select name="status_civil" id='status_civil' class="form-control">
						<option>...</option>
						<option value="solteiro(a)">Solteiro(a)</option>
						<option value='casado(a)'>Casado(a)</option>
						<option value="viuvo(a)">Viuvo(a)</option>
						<option value="divorciado(a)">Divorciado(a)</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for='complemento'>Fixo</label>
					<input type="tel" name="complemento" id='complemento' class="form-control">
				</div>
				<div class="form-group col-md-2">
					<label for='complemento'>Celular</label>
					<input type="text" name="complemento" id='complemento' class="form-control">
				</div>
				<div class="form-group col-md-5">
					<label>Sexo</label>
					<div class="form-check">
						<div class="row">
							<div class="col-md-3">
								<input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino" checked>
								<label class="form-check-label" for="feminino">
									Feminino
								</label>
							</div>
							<div class="col-md-3">
								<input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
								<label class="form-check-label" for="masculino">
									Masculino
								</label>
							</div>
						</div> 
					</div>
				</div> 
			</div>
			<div class="col-md-12 row justify-content-center top-margin">
				<button type='submit' class="btn btn-lg btn-primary">Salvar</button>
			</div>
			</div>
		</form>
	</fieldset>
</div>
<script type="text/javascript">
	$(document).ready(function (){
		var inputs = document.getElementsByTagName('input');
		for(var i = 1 ; i < inputs.length; i++){
			if(i == 15){
				return ;
			}
			inputs[i].required=true;
		}
		console.log(inputs.length);
	});
</script>
<style type="text/css">
.fieldset, .legend{
	border:2px solid #000;
	border-radius: 10px;
}
.fieldset{
	padding: 20px;
}
.hidden {
	display: none;
}
.container , .top-margin{
	margin-top: 3%;
}
.show{
	display: flex;	}
</style>