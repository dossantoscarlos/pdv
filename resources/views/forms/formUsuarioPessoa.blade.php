<div class="container d-flex justify-content-center">
	<fieldset class="fieldset col-md-10">
		<legend class="legend col-md-4 offset-md-0">Dados Pessoais</legend>
		<form method="post" action='{{route('pessoa.saveOne')}}'>
			<div class="form-row">
				{{csrf_field()}}
				<div class="form-group col-md-5">
					<label for='nome'>Nome</label>
					<input type="text" name="nome" id='nome' class="form-control" />
				</div>
				<div class="form-group col-md-6">
					<label for='sobrenome'>Sobrenome</label>
					<input type="text" name="sobrenome" id='sobrenome' class="form-control" />
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
					<label for='Estado'>UF</label>
					<input type="text" name="estado" id='estado' class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label for='cidade'>Cidade</label>
					<input type="text" name="cidade" id='cidade' class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label for='bairro'>Bairro</label>
					<input type="text" name="bairro" id='bairro' class="form-control">
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
						<label for='fixo'>Fixo</label>
						<input type="phone" name="fixo" id='fixo' class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label for='complemento'>Celular</label>
						<input type="phone" name="celular" id='celular' class="form-control">
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
					<button type='submit' class="btn btn-lg btn-primary" id='submit'>Salvar</button>
				</div>
			</div>
		</form>
	</fieldset>
</div>
	<script type="text/javascript">
		$(document).ready(function (){
			var cpf =  function (cpf)
		{
			var numeros, digitos, soma, i, resultado, digitos_iguais;
			digitos_iguais = 1;
			if (cpf.length < 11)
				return false;
			for (i = 0; i < cpf.length - 1; i++)
				if (cpf.charAt(i) != cpf.charAt(i + 1))
				{
					digitos_iguais = 0;
					break;
				}
				if (!digitos_iguais)
				{
					numeros = cpf.substring(0,9);
					digitos = cpf.substring(9);
					soma = 0;
					for (i = 10; i > 1; i--)
						soma += numeros.charAt(10 - i) * i;
					resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
					if (resultado != digitos.charAt(0))
						return false;
					numeros = cpf.substring(0,10);
					soma = 0;
					for (i = 11; i > 1; i--)
						soma += numeros.charAt(11 - i) * i;
					resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
					if (resultado != digitos.charAt(1))
						return false;
					return true;
				}
				else
					return false;
			};

			var validCpf = document.getElementById('cpf');
			validCpf.addEventListener('keyup',function(e){
				 console.log(this.value.length)
				 if (this.value.length == 14)
				{
					var ref = null;
					ref = this.value.substring(0,3);
					ref += this.value.substring(4,7);
					ref += this.value.substring(8,11);
					ref += this.value.substring(12,14);

					if(cpf(ref)==false)
					{
						alert('Verfique o CPF: CPF INVALIDO');
					}
				}
			})
			var cep = document.getElementById('cep');
			cep.addEventListener('keyup',function(event){
				var limit =cep.value.length;
				if (limit >= 8 && limit <=10){
					preencher(this);
				}
				if (cep.value.trim() ==""){
					$('#bairro').val('');
					$('#estado').val('');
					$('#cidade').val('');
					$('#rua').val('');					
				} 
			});
			
			var preencher = function (input)
			{
				$.ajax({
					url: "http://cep.republicavirtual.com.br/web_cep.php",
					method: "get",
					data: { 
						cep : input.value,
						formato: 'json' 
					},
					dataType: "html"
				}).done(function (result){
					var obj= JSON.parse(result);
					$('#bairro').val(obj.bairro);
					$('#estado').val(obj.uf);
					$('#cidade').val(obj.cidade);
					$('#rua').val(obj.logradouro);
					var campo = ['#bairro', '#estado', '#cidade','#rua'];
						
					if($('#bairro').val().trim()!="" && $('#estado').val().trim() != "" && $('#cidade').val().trim() != '' && $('#rua').val().trim() != '' )
					{
						for (var i = 0; i <= campo.length; i++){
							$(''+campo[i]+'').attr('disabled','true');
						}
					}else {
						for (var i = 0; i <= campo.length; i++){
							$(''+campo[i]+'').removeAttr('disabled');
						}
					}
				}).fail(function (error){
					console.log(error);
				});
			};
			var inputs = document.getElementsByTagName('input');
			for(var i = 1 ; i < inputs.length; i++){
				if(i == 15){
					return ;
				}
				inputs[i].required=true;
			}
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