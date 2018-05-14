<!-- <script>
(function (){
  var href = location.href;
  window.location = href+'public/';
})();
</script>
 -->

<?php 
  $url = $_SERVE['HTTP_REFERER'];
  $index = '/public/';
  $concatena  = $url.$index;
  header('Location:'.$concatena);
?>

