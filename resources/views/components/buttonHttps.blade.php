<?php 
	$seach = 'http';
	$replace = 'https';
?>
<a href="{{str_replace($seach,$replace,route('login'))}}" class="cover btn-lg btn-default">Iniciar PDV</a>
<a href="{{str_replace($seach,$replace,route('consulta_index'))}}" class="cover btn-lg btn-default">Consultar Preço</a>