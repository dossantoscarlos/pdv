<ul class="container-fluid nav justify-content-end navbar-dark ">
    <li class="nav-item text-center">
        <span id="date"></span><br/>
        <span id='hora'></span>
    </li>
</ul>
<script type="text/javascript">
    $(document).ready(function (){
        
        const array_mes = ["01","02","03","04","05","06","07","08","09", "10","11","12"];
        function hora (){
            let data = new Date();
            let t = data.toLocaleTimeString();
           
           var datas = function (t){
           		t = data.getDate()+'/'+array_mes[data.getMonth()]+'/'+data.getFullYear();

           		if (t.length ==9){ return vData= '0'.concat(t) }else{ return vData= t};

           	};
       
            document.getElementById("hora").innerHTML = t;
            $('#date').text(datas(data));
        }
         var mhora = setInterval( function (){ hora() }, 1000);
    }); 
</script>
<style type="text/css">
    #date, #hora{
        font-family:'Sawasdee', Sans-serif;
        color:#FFF;
        padding-right: 6px;
    }
    .nav{
        padding-right: 10px !important;
        padding-top:4px;
        padding-bottom: 4px;
    }
     ul.nav{
        max-height: 60px;
     	background-color: #333;
     }
</style>