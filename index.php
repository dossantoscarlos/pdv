<title>Ops</title>
<noscript>
  <?php
    echo '<div class=center>';
    echo '<p>Ative o javascript de seu navegador</p>';
    echo '<br>';
    echo '<a href='.(str_ireplace('index.php','',$_SERVER['PHP_SELF'])).' class=button>Refresh</a>';
    echo '</div>';
  ?>
  <style type="text/css">
    body,html{
      padding:0;
      margin: 0;
      text-align: center;
    }
    .center{
      font-size: 14pt;
      width: 450px;
      margin: 0 auto;
      padding: 0;
      margin-top:20%;
    }
    a{
      text-decoration: none;
    }
    .button{
      background-color: #CCCFFF;
      border: 0 solid #FFF;
      padding: 12px;
      border-radius: 3px;
      cursor:pointer;
      box-shadow:2px 2px 2px 2px #CCCCCC;
    }
  </style>
</noscript>
<script>
(function (){
  var href = location.href;
  window.location = href+'public/';
})();
</script>
