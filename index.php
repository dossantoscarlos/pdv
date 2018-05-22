<!-- <script>
(function (){
  var href = location.href;
  window.location = href+'public/';
})();
</script>
 -->

<?php 
  $url = (isset($_SERVE['HTTP_REFERER'])) $_SERVE['HTTP_REFERER']: '/public/';
  $index = '/public/';
  if($url != $index){
  	$concatena  = $url.$index;
  	header('Location:'.$concatena);
  }else{
 	header('Location:'.$url);
  }
  
  
?>

