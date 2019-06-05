@extends('layouts.main')
@section('estilos')
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
@stop
@section('content')
<div class="all-cont">
        <div class="lg">
            <div class="row">
                <div class="container">
                    <a href="index"><img src="<?php echo asset("storage/img/solicitud/logo-02.png")?>" alt=""></a>
                </div>
            </div>
        <div id="banner-prin">
            <div class="container">
            <h2 class="" style="font-size: 24px;">Lamentamos informarte que por el momento  no <br> tenemos un préstamo <br> online disponible para vos </h2>
            </div>
        </div>
        <div id="banner-transform">
            <h2 class="bebas">PARA SABER SI CALIFICÁS PARA UN PRÉSTAMO EN<br>NUESTRAS SUCURSALES, REALIZÁ TU CONSULTA AL</h2>
            
            <h2 class="bebasbook"><img src="<?php echo asset("storage/img/solicitud/icon-bg-01.png")?>" class="" alt="">0800-345-2733 O AL <img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-3241-4878 </h2>
    
            
    
    
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
            <h2 class="ubuntu">Lamentamos informarte que por el momento  no <br> tenemos un préstamo <br> online disponible para vos  </h2>
                </div>
        </div>
                <div class="container">
    
        <div id="banner-transform">
            <h2 class="bebas">PARA SABER SI CALIFICÁS PARA UN PRÉSTAMO EN<br>NUESTRAS SUCURSALES, REALIZÁ TU CONSULTA AL</h2>
            
            <h2 class="bebasBook"><img src="<?php echo asset("storage/img/solicitud/icon-bg-01.png")?>" class="" alt="">0800-345-2733 <br> O AL <br> <img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt="">11-3241-4878 </h2>
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

