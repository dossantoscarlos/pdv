        window.onload= function ()
        {
          var connect = document.getElementById('internet');
          function connecta (){
          $.ajax({
          url:'http://cep.republicavirtual.com.br/web_cep.php',
          method:'GET',
          data:{
          cep: '',
          formato:'json'
        },
        dataType: 'html' 
      }).done(function(result){
      connect.innerHTML = 'Connectada';
      console.log(result);
    }).fail(function(err,status){
    connect.innerHTML = 'Desconectada';
    console.log(status)
  });

}
connecta();

setInterval(connecta,60000);

}