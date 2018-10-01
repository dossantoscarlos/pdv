<footer class="footer col-md-12">
 <div class="row justify-content-between">
  <copy>NewPdv</copy>
  <div id='statusLabel' > 
      <span class="label">Internet : </span>
      <span id="internet"></span>
    </div>
        <div>
          <span class="label">HOST : </span>
          <span>{{ gethostbyaddr($_SERVER['REMOTE_ADDR'])}}</span>
        </div>
        <div class="afasta">
          <span class="label">IP LOCAL : </span>
          <span class="ip">{{ $_SERVER['REMOTE_ADDR']}}</span>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/internet.js') }}"></script>
    <style type="text/css">
    .afasta{
     padding-right: 14px ; 
   }
   copy{
    padding-left: 14px;
  }
  .footer{
    background-color: #333;
    color: #FFF;
    position: fixed;
    bottom: 0;
    margin-left: 0%
  }
  .label{
    color: rgba(233,233,4,1);
  } 
  span#status, span#ip{
    color:#fff !important;
  }
</style>