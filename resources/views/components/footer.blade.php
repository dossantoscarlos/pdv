<footer class="footer">
    <div class="container-fluid row">
        <copy class='col-md-1'>CopyRight</copy>
        <div id='statusLabel' class="col-md-2 offset-md-3"> 
            <span class="label">Status : </span>
            <span class="">
                 @if (fsockopen("www.example.com", 80, $errno, $errstr, 30)==false)
                    DESCONECTADA
                @else
                    CONECTADA
                @endif
            </span>
        </div>
        <div class="col-md-4">
            <span class="label">HOST : </span>
            <span>{{ gethostbyaddr($_SERVER['REMOTE_ADDR'])}}</span>
        </div>
        <div class="col-md-2" >
            <span class="label">IP LOCAL : </span>
            <span class="ip">{{ $_SERVER['REMOTE_ADDR']}}</span>
        </div>
    </div>
</footer>

<style type="text/css">
	.footer{
        min-height: 2vh;
        border: 5px solid #333 !important;
        background-color: #333;
        color: #FFF;
        text-align: center;
        padding: 6px;
        border:2px;
    }
    .label{
        color: rgba(233,233,4,1);
    } 
    span#status, span#ip{
        color:#fff !important;
    }
</style>