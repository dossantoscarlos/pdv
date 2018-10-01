@extends('layouts.app')
@section('create funcionario')
@section('content')
<div class='container' style='margin-top: 2%'>
	<form method="post" action='{{route('funcionario.saveOne')}}'>		
		<fieldset class="fieldset">
			<legend class="legend col-md-4 offset-md-0">Cadastro do funcionario</legend>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nome">Nome Completo </label>
					<input type="text" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" id="nome" placeholder="nome"  disabled value='{{$finds->nome_completo}}'>
					<input type="hidden" name="nome" value="{{$finds->nome_completo}}">
					@if ($errors->has('nome'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('nome') }}</strong>
                          </span>
                      @endif
				</div>
				{{csrf_field()}}
				<input type="hidden" name="pessoa" value='{{$finds->id}}'>
				<div class="form-group col-md-4">
					<label for="matricula">matricula</label>
					<input type="text" class="form-control {{ $errors->has('matricula') ? ' is-invalid' : '' }}" id="matricula" placeholder="matricula" name='matricula' value='{{old('matricula')}}'>
					 @if ($errors->has('matricula'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('matricula') }}</strong>
                          </span>
                      @endif
				</div>
				<div class="form-group col-md-2">
					<label>Status</label>
					<input type="text" name='status' disabled class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}"  id="status">
					@if($errors->has('status'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('status')}}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="data">Data Admisao</label>
					<input type="date" class="form-control {{ $errors->has('data') ? ' is-invalid' : '' }}" id="data" disabled placeholder="10/11/2010" >
					<input type="hidden" name="data" id='datahidden'>
					 @if ($errors->has('data'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('data') }}</strong>
                          </span>
                      @endif
				</div>
				<div class="form-group col-md-4">
					<label>Funcao</label>
					<input type="text" name="funcao" id='funcao' class="form-control {{ $errors->has('funcao') ? ' is-invalid' : '' }}" value="{{old('funcao')}}" />
					@if($errors->has('funcao'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('funcao') }}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-4">
				<label for='exp'>Possui Experiencia? </label>
				 	@if ($errors->has('experiencia'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('experiencia') }}</strong>
                          </span>
                    @endif
				<select name="experiencia" id='exp' class="form-control {{ $errors->has('experiencia') ? ' is-invalid' : '' }}">
					<option value="nao">Nao</option>
					<option value="sim">Sim</option>
				</select>
				</div>
			</div>
			<div class="form-row" id='exper'>
				<div class="form-group col-md-4">
					<label>Nome da empresa</label>
					<input type="text" name="nome_empresa_one" id='empresa_one' class="form-control {{ $errors->has('nome_empresa_one') ? ' is-invalid' : '' }}" value='{{old('nome_empresa_one')}}' >
					@if ($errors->has('nome_empresa_one'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('nome_empresa_one') }}</strong>
                          </span>
                    @endif
				</div>
				<div class="form-group col-md-2">
					<label>inicio</label>
					<input type="date" name="inicio_one" id='inicio_one' class="form-control {{ $errors->has('inicio_one') ? ' is-invalid' : '' }}" value="{{old('inicio_one')}}" >
					@if($errors->has('inicio_one'))
						<span class="invalid-feedback">
							<strong >{{ $errors->first('inicio_one')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>final</label>
					<input type="date" name="final_one" id='final_one' class="form-control {{ $errors->has('final_one') ? ' is-invalid' : '' }}" value='{{old('final_one')}}'>
					@if($errors->has('final_one'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('final_one')}}</strong>
						</span>
					@endif;
				</div>
				<div class="form-group col-md-2">
					<label >Contado</label>
					<input type="phone" name="telContado_one" class="form-control {{$errors->has('telContado_one') ? 'is-invalid' : ''}}" value="{{old('telContado_one')}}">
					@if($errors->has('telContado_one'))
						<span class="invalid-feedback">
							<strong>{{$erros->first('telContado_one')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>Possui comprovante?</label>
					@if($errors->has('comprovante_one'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('comprovante_one')}}</strong>
						</span>
					@endif
					<select class="form-control {{ $errors->has('comprovante_one') ? ' is-invalid' : '' }}" name="comprovante_one" >
						<option value=""></option>
						<option value="sim">sim</option>
						<option value="nao">nao</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Nome da empresa</label>
					<input type="text" name="nome_empresa_two" class="form-control {{ $errors->has('nome_empresa_two') ? ' is-invalid' : '' }}" value="{{old('nome_empresa_two')}}">
					@if($errors->has('nome_empresa_two'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('nome_empresa_two')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>inicio</label>
					<input type="date" name="inicio_two" class="form-control {{ $errors->has('inicio_two') ? ' is-invalid' : '' }}" value="{{ old('inicio_two') }}">
					@if($errors->has('inicio_two'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('inicio_two')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>final</label>
					<input type="date" name="final_two" class="form-control {{ $errors->has('final_two') ? ' is-invalid' : '' }}" value="{{old('final_two')}}">
					@if($errors->has('final_two'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('final_two')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>Contado</label>
					<input type="phone" name="telContado_two" class="form-control {{ $errors->has('telContado_two') ? ' is-invalid' : '' }}" value="{{old('telContado_two')}}">
					@if($errors->has('telContado_two'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('telContado_two')}}</strong>	
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>Possui comprovante?</label>
					@if($errors->has('comprovante_two'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('comprovante_two')}}</strong>
						</span>
					@endif
					<select class="form-control {{ $errors->has('comprovante_two') ? ' is-invalid' : '' }}" name='comprovante_two'>
						<option value="sim">sim</option>
						<option value="nao">nao</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label>Nome da empresa</label>
					<input type="text" name="nome_empresa_three" class="form-control {{ $errors->has('nome_empresa_three') ? ' is-invalid' : '' }}">
					@if($errors->has('nome_empresa_three'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('nome_empresa_three')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>inicio</label>
					<input type="date" name="inicio_three" class="form-control {{ $errors->has('inicio_three') ? ' is-invalid' : '' }}" value="{{ old('inicio_three') }}">
					@if($errors->has('inicio_three'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('inicio_three')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>final</label>
					<input type="date" name="final_three" class="form-control {{ $errors->has('final_three') ? ' is-invalid' : '' }}" value="{{old('final_three')}}">
					@if($errors->has('final_three'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('final_three')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label >Contado</label>
					<input type="phone" name="telContado_three" class="form-control {{ $errors->has('telContado_three') ? ' is-invalid' : '' }}" value="{{ old('telContado_three')}}">
					@if($errors->has('telContado_three'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('telContado_three')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-2">
					<label>Possui comprovante?</label>
					@if($errors->has('comprovante_three'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('comprovante_three')}}</strong>
						</span>
					@endif
					<select class="form-control {{ $errors->has('comprovante_three') ? ' is-invalid' : '' }}" name='comprovante_three'>
						<option value="sim">sim</option>
						<option value="nao">nao</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="pis">PIS</label>
					<input type="text" class="form-control {{ $errors->has('pis') ? ' is-invalid' : '' }}" id="pis" name="pis" value="{{ old('pis')}}">
					@if($errors->has('pis'))
						<sapn class='invalid-feedback'>
							<strong>{{$errors->first('pis')}}</strong>
						</sapn>
					@endif
				</div>
				<div class="form-group col-md-4">
					<label for="rg">RG</label>
					<input type="text" name="rg" id='rg' class="form-control {{ $errors->has('rg') ? ' is-invalid' : '' }}" value='{{ old('rg') }}'>
					@if($errors->has('rg'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('rg')}}</strong>
						</span>
					@endif
				</div>
				<div class="form-group col-md-4">
					<label for="carteiraTrabalho">Carteira de Trabalho</label>
					<input type="text" class="form-control {{ $errors->has('carteiraTrabalho') ? ' is-invalid' : '' }}" id="carteiraTrabalho" name="carteiraTrabalho" value="{{old('carteiraTrabalho')}}">
					@if($errors->has('carteiraTrabalho'))
						<span class="invalid-feedback">
							<strong>{{$errors->first('carteiraTrabalho')}}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class='form-row justify-content-center'>
				<div class="form-group">
					<input type='submit' class="btn btn-primary" id='submit' value="Cadastrar">
				</div>
			</div>
		</fieldset> 
	</form>
</div>
<script type="text/javascript">
	(function(){
		var data = document.getElementById('data');		
		var exp = document.getElementById('exp');
		var exper= document.getElementById('exper');
		var empresaOne = document.getElementById('empresa_one');
		var inicioOne = document.getElementById('inicio_one');
		var finalOne = document.getElementById('final_one');

		var status = document.getElementById('status');
		status.value='ativo';

		var reset = function (input){
			input.removeAttribute('required');
		};
		var ativa = function(input){
			input.setAttribute('required','true');
		};
		exper.style='display:none';	
		exp.addEventListener('mouseout',function (){
			if(exp.value=='nao'){
				exper.style='display:none';
				reset(empresaOne);
				reset(inicioOne);
				reset(finalOne);
			}else{
				exper.style='display';
				ativa(empresaOne);
				ativa(inicioOne);
				ativa(finalOne);
			}
			});

		datas ="{{ $hora }}";
		data.value = datas;
		document.getElementById('datahidden').value = data.value;
 	})();

</script>
<style type="text/css">
	.fieldset, .legend{
		border:2px solid #000;
		border-radius: 10px;
	}
	.fieldset{
		padding: 20px;
	}
</style>
@endsection