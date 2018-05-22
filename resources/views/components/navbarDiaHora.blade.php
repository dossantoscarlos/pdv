<ul class="nav justify-content-end navbar-dark">
    <li class="nav-item text-center">
        <span id="date"></span><br/>
        <span id='hora'></span>
    </li>
</ul>
<script type="text/javascript">
    $(document).ready(function (){
        var array_mes = ["01","02","03","04","05","06","07","08","09", "10","11","12"];
        function hora (){
            var data = new Date()
            var t = data.toLocaleTimeString();
            document.getElementById("hora").innerHTML = t;
            $('#date').text(data.getDate()+'/'+array_mes[data.getMonth()]+'/'+data.getFullYear());
        }
         var mhora = setInterval( function (){ hora() }, 1000);
    }); 
</script>
<style type="text/css">
    #date, #hora{
        font-family:'Sawasdee', Sans-serif;
        color:#FFF;
        padding-right: 10px;
    }
    .nav{
        padding-right: 12px !important;
        padding-top:4px;
        padding-bottom: 4px;
    }
     ul.nav{
     	background-color: #333;
     }
</style>