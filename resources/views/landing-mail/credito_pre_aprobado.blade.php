@extends('layouts.main')
@section('estilos')
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
@stop
@section('content')
<div class="all-cont">
        <div class="lg">
            <div class="row">
                <div class="container">
                    <a href="index"><img src="<?php echo asset("storage/img/solicitud/logo-02.png")?>"> </a>
                </div>
            </div>
      <div id="banner-prin">
          <div class="container">
            <h2>TU CRÉDITO ESTA <br> SIENDO ANALIZADO <br><span><p>En breve nos contactaremos con vos</p></span></h2>
            </div>
        </div>
        

        <div class="banner-transform-cont">
            <div id="banner-transform">
                <h2 class="bebas">Por cualquier consulta comunicate al</h2>
                
                <h2 class="bebasbook"><img src="<?php echo asset("storage/img/solicitud/icon-bg-01.png")?>">0800-345-2733 O AL  <a href="https://api.whatsapp.com/send?phone=1126785266&text=Hola%20Argenpesos:%20me%20comunico%20por%20lo%20visto%20en%20el%20formulario%20de%20solicitar%20prestamo" target="_blank"> 

                	<img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-2678-5266</a>  <a href="https://api.whatsapp.com/send?phone=1161213575&text=Hola%20Argenpesos:%20me%20comunico%20por%20lo%20visto%20en%20el%20formulario%20de%20solicitar%20prestamo" target="_blank"><img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-6121-3575</a></h2>
            </div>
            <div class="banner-transform-footer">
                <div class="info-cont">
                    <h2><i class="fab fa-facebook-f"></i> /argenpesos</h2>
                    <h2><i class="fab fa-instagram"></i > @argenpesos</h2>
                </div>
            </div>
        </div>
        </div>



        <div class="xs">
            <div class="row">
                <div class="container">
                    <img src="<?php echo asset("storage/img/solicitud/logo-02.png")?>" alt="">
                </div>
            </div>
        <div id="banner-prin">
            <div class="container">
            <h2 class=>TU CRÉDITO ESTA <br> SIENDO ANALIZADO <span><p>En breve nos contactaremos con vos</p></span></h2>
                </div>
        </div>
                <div class="container">
    
        <div id="banner-transform">
            <h2 class="bebas">Cuanto más rápido nos envíes la documentación, más rápido vas a tener tu préstamo. Por cualquier consulta comunicate al </h2>
            
            <h2 class="bebasbook"><img src="<?php echo asset("storage/img/solicitud/icon-bg-01.png")?>" class="" alt="">0800-345-2733 <br> O AL <br><a href="https://api.whatsapp.com/send?phone=1126785266&text=Hola%20Argenpesos:%20me%20comunico%20por%20lo%20visto%20en%20el%20formulario%20de%20solicitar%20prestamo" target="_blank"> <img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-2678-5266</a> <br> <a href="https://api.whatsapp.com/send?phone=1161213575&text=Hola%20Argenpesos:%20me%20comunico%20por%20lo%20visto%20en%20el%20formulario%20de%20solicitar%20prestamo" target="_blank"><img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-6121-3575</a>  </h2>
            </div>
            
    
    
        </div>
        </div>
    </div>
@stop

@section('scripts')
<script>
    $(document).ready(function(){
        $("#content").css('margin-top',0);
    });
</script>
@stop