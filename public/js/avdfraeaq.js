window.onload=(function () {
	var inputNomeProduto =document.getElementById('consultar');
	var inputCodigoBarra =document.getElementById('code'); 
	jsonProduto(inputNomeProduto);
	jsonProduto(inputCodigoBarra);
});

function jsonProduto(inputs){
	inputs.addEventListener('keypress', 
		function(e)	{
			if(e.which == 13)
			{
				var removeEspaco = inputs.value.trim();
				if (removeEspaco.length > 0){
					enviar(inputs);
				}else{
					$('#alertModal').modal('show');
					
					$('#alertBody').text('Valor esta em branco! Favor Corrigir');
				}
			}
		}, false);
}

function enviar (inputValue) {
	if(inputValue.name =='consultar')
	{
		$.ajax({
			url : '/consulta/show',
			type : 'get',
			data : {
				consultar : inputValue.value,
			}, 
			success:function(result,status){
				console.log(status);
				rest(result);
			}
		}).fail(function(json,data,status){
			alertaModal('Error ao processar dados entre em contado com o administrador');
			inputValue.onfocus=function(e){
				return true;
			};
		});

	}else if(inputValue.name == 'code'){

		$.ajax({
			url : '/consulta/show',
			type : 'get',
			data : {
				code: inputValue.value
			}, 
			success:function(result){
				rest(result);
			}
		}).fail(function(){
			alertaModal('Campo nao aceita dados digitado pra busca!!!');
			inputValue.onfocus=function(e){
				return true;
			};
		});
	}
};

function alertaModal(msg){
	$('#caixa').attr('style','display:none');
	$('#imagem').removeAttr('style');
	$('#alertModal').modal('show');
	$('#alertBody').text(msg);
}

function rest(result){

	$('#tbody').html(' ');
	if (result.length > 0 ){	

		$('#caixa').show();
		$('#imagem').attr('style','display:none');
		
		var tabela;
		for(var index = 0 ; index < result.length ; index++)
		{
			tabela +=("<tr><td>"+result[index].nome_produto+"</td><td>"+result[index].marca_produto
				+"</td><td><button type='button' class='btn btn-md' data-id='"+result[index].id+"' data-toggle='modal' data-target='#exampleModalCenter'>Abrir descricao</button></td><td> R$ "+result[index].preco_produto+"</td><td>"
				+result[index].serial+"</td><td>"+result[index].quantidade_atual+"</td></tr>");
			$('#tbody').html(tabela);
		} 

	}else{
		alertaModal('Produto nao encontrado');
	}
  
		  $('button[data-id]').each(function(){
			'use strict';
			$(this).click(function(){
				const agenda = $(this).attr('data-id');
				$.ajax({
					url : '/consulta/'+agenda,
					type : 'get',
					data : {
						id : agenda
					}, 
					success: function(data){
						console.log(data[0].descricao_produto)
						document.getElementById('description').innerHTML=data[0].descricao_produto;
					}
				}).fail(function(msg){
					alert(msg)
				});
			});
		}); 	
} 