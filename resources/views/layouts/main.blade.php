<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144575306-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144575306-2');
</script>
          <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5RQHK7');</script>
<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Argenpesos | ¡Saca tu prestamo! </title>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")?>"/>
	<link rel="stylesheet" href="<?php echo asset("css/estilos-cambio-green.css")?>">

	<link rel="stylesheet" href="<?php echo asset("css/animate.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css")?>">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo asset("css/rangeslider.css")?>">
	<link rel="stylesheet" href="<?php echo asset("css/wsp-chat.css")?>">
    <link rel="shortcut icon" href="<?php echo asset("storage/logo-xs-01-01.png")?>">
	@yield('estilos')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1592878087484069');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1592878087484069&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php
  
  if(isset($_SERVER['REQUEST_URI'])){
   $currentPage =  $_SERVER['REQUEST_URI'];
  }else{
    $currentPage = null;
  }

 ?>

@if($currentPage == strstr( $currentPage,'/saca_tu_prestamo'  ))

  @include('inc.siisaData')
@endif

</head>
<body @yield('bodyclass')>
	<!-- PRELOADER AL CARGAR -->
	<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>


	   

<div id="content">
@yield('content')
<!-- trabajaConNosotros -->
  @include('inc.trabaja_con_nosotros')

  <!-- comercializador -->
  @include('inc.comercializador_form')
  
  <!-- fichas -->
  @include('inc.fichas')



@component('comp.wsp-chat')
        
@endcomponent

<!-- Modal -->
<div class="modal fade" id="helpShop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document" style=" z-index: 20;">
    <div class="modal-content">
        <div class="modal-header">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times-circle float-right"></i>
        </a>
      </div>
      <div class="modal-body center-block">
        <h1 class="violet text-center">TE AYUDAMOS A COMPRAR</h1>
        <label class="text-center" for="telefono">Por favor, ingresá tu número con código de área sin el 0 y sin el 15 (Ej. 114999000)</label>
        <input type="number" class="form-control" name="telefono" id="telefono" maxlength="10" placeholder="Ingresá tu teléfono">
        <p id="telefono-error" class="error">Ingrese un numero valido</p>
      </div>
      <div class="modal-footer">

        <a  onClick="validarHelpShop()" class="spa-btn border-btn gray text-center center-block">ENVIAR</a>
      </div>
    </div>
  </div>
</div>


<!-- CLOCK Modal -->
<div class="modal fade" id="clockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >

  <div class="modal-dialog" role="document" style=" z-index: 20;">
    <div class="modal-header">
        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
         <i class="fas fa-times-circle float-right"></i>
        </a>
      </div>
      <table>
        <tr>
          <td><img class="center-block" src="<?php echo asset('storage/img/cybermonday/1-2-01.jpg') ?>" alt=""></td>
        </tr>
        <tr>
          <td id="time-cont" class="time-cont" style="background:#EF4623;">
            <h2 class="text-center">QUEDAN</h2>
            <div id="clock" class="center-block clock" style="display:flex;justify-content: center;">
              
                <h1 id="days" class="text-center"> </h1>
                <h1>:</h1>  
                <h1 id="hours" class="text-center"></h1>
                <h1>:</h1>
                <h1 id="minutes" class="text-center"></h1>
                <h1>:</h1>
                <h1 id="seconds" class="text-center"></h1> 
            </div>
          </td>
        </tr>
        <tr>
          <td style="background:white;    padding: 5px 0 5px 0;">
            <h2 class="blue text-center" style="padding:5px 0 5px 0"><b>Promoción válida del 4 al 6 de noviembre</b></h2>
          </td>
        </tr>
      </table>
      
     </div>
</div>















<div id="alert-cont"></div>

<script type="text/javascript" src="<?php echo asset("js/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.min.js")?>"></script>

<script type="text/javascript" src="<?php echo asset("js/manejoDeMenus.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/routerAjax.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/whatsapp-message.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/wspChatInterface.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/enviarWsp.js")?>"></script>
<script type="text/javascript" src="<?php echo asset('js/alertar.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset("OwlCarousel2-2.3.4/dist/owl.carousel.min.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/slider.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/routerAjax.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/formHomeValidator.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/enviarConvertiteEnComercializador.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/enviarTrabajaConNosotros.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/goToShop.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/buscarCiudadSegunProvincia.js') ?>"></script>

 <script>
	$(window).on('load', function() { // makes sure the whole site is loaded 
	
    	$('#status').fadeOut(); // will first fade out the loading animation 
    	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    	$('body').delay(350).css({'overflow-y':'visible'});



    });
</script>

<script>
    function submenuShow(father){
        $(""+father+" .submenu").show();
        console.log(father);
    }

    function submenuHide(father){
        $(""+father+" .submenu").hide();
        console.log(father);
    }
</script>

<script>
         $(document).ready(function(){

           $("#quienes-somos-btn").hover(function(){
                $(".sub-menu").show();

            });


            $("#quienes-somos-btn").mouseleave(function(){
                setTimeout(function(){
                    $(".sub-menu").hide();  
                },100);
                

            });


             $("#file-result").hide();

             @if(isset($msg))

                alertar("Hemos recibido tu solicitud. <br> ¡Muchas Gracias!");

            @endif

             $("#file-result").hide();

            });
</script>
@yield('scripts')
</body>
</html>