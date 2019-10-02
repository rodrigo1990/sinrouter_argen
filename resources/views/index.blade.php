@extends('layouts.main')


@section('content')
@include('layouts.header')	
	
	<div class="animated fadeIn">
<section id="form">
	<div class="row">
		<div class="first col-lg-5 text-center">
			<ul class="margin-top-60">
				<li><h1><b>HOY MISMO,</b> <br> CON O SIN VERAZ</h1></li>
				<li class="margin-top-25"><a href="saca_tu_prestamo" class="big border-btn red margin-top-50">SACÁ TU PRÉSTAMO</a> <img class="" src="<?php echo asset("storage/img/next-arrow.png")?>" alt="" style="padding-left:5px"></li>
				<li class="margin-top-25"><h3>Hasta $30.000 en 12 cuotas</h3></li>
			
			</ul>
			
			

		</div>
		<div class="col-lg-6 form-cont">
			<form id="form-home" class="text-left" action="saca_tu_prestamo" method="get" >
				@csrf
				<!--  <h1 class="red cursive">¡Empecemos!</h1>-->
				<h2 class="margin-top-5">
					<img src="<?php echo asset("storage/img/next-arrow-orange.png")?>" alt="">
					DATOS PERSONALES:
				</h2>
				<div class="row margin-top-25">
					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
						<div class="error" id="nombre-error">Ingrese un nombre valido</div>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido">
						<div class="error" id="apellido-error">Ingrese un apellido valido</div>
					</div>
				</div>
				<div class="row margin-top-25">
					<div class="col-sm-6">
						<div class="col-sm-4  col-xs-12 padding-0">
							<select name="cod_area" id="cod_area" class="float-left" id="cod_area">
								@include('inc.options_cod_area')
							</select>
							<div class="error" id="cod-area-error">Ingrese un codigo area valido</div>
						</div>
						<div class="col-sm-2 col-xs-2 padding-0">
							<input type="text" name="fix-celular" id="fix-celular" value="15" disabled="disabled" class="form-control">
						</div>
						<div class="col-sm-6 col-xs-10 padding-0">
							<input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono " min="0" >
							<div class="error" id="telefono-error">Ingrese un telefono valido</div>

						</div>
							
					</div>
					<div class="col-sm-6">
						
						<input type="number" name="dni" class="form-control float-left" placeholder="DNI (sin puntos)" id="dni">
						<div class="error" id="dni-error">Ingrese un documento valido</div>
					</div>
				</div>

				<div class="row margin-top-25">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="mail" placeholder="Mail" name="mail">
						<div class="error" id="mail-error">Ingrese un mail valido</div>
					</div>
				</div>
				<div class="row  margin-top-35">
					<div class="btn-row">
						<a id="form-home-btn" class="border-btn red text-center float-right">COMPLETÁ TU FORMULARIO</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<section id="como-funciona" class="text-center margin-top-100">
	<h1 class="blue">¿CÓMO <b>FUNCIONA?</b></h1>
	<img style="width: 20px" class="center-block" src="<?php echo asset("storage/img/arrow.jpg")?>" alt="">
	

	   @component('comp.adelantos_creditos_online')
        @slot('class')
        margin-top-35
        @endslot
    @endcomponent
	


	<section id="creditos-sucursales" class="step-by-step margin-top-60 bk-grey padding-top-47 padding-bottom-47">
		<h2 class="red">CRÉDITOS EN <b>SUCURSALES</b></h2>
		<h4 class="margin-top-10">En 3 simples pasos</h4>
		<ul class="flex center-block margin-top-50">
			<li>
				<img src="<?php echo asset("storage/img/cs-step-1.svg")?>" alt="">
					<div class="number-cont"><h4><b class="number uno">1</b></h4></div>
					<h4> Vení  a nuestra sucursal</h4>
			</li>
			<li class="line">
				<img src="<?php echo asset("storage/img/line.png")?>" alt="">
			</li>
			<li class="esp">
				<img src="<?php echo asset("storage/img/cs-step-2.svg")?>" alt="">
				<div class="number-cont"><h4><b class="number">2</b></h4></div>
				<h4> Presentá la documentación <br> y te aprobamos la solicitud</h4>
			</li>
			<li class="line">
				<img src="<?php echo asset("storage/img/line.png")?>" alt="">
			</li>
			<li>
				<img src="<?php echo asset("storage/img/cs-step-3.svg")?>" alt="">
				<div class="number-cont"><h4><b class="number">3</b></h4></div>
				<h4> RECIBÍ TU DINERO <br> <b> ¡EN EL ACTO! </b></h4>
			</li>
		</ul>
		

		<a href="sucursales" class="spa-btn border-btn red center-block margin-top-25" target="">ENCONTRÁ TU SUCURSAL</a>


	</section>



</section>
<!--  <div class="space-grey"></div>-->
<section id="shop" class="margin-top-60 padding-bottom-47">
	@include('inc.productos')

</section>

<section id="banner" class="margin-top-60">
	<div class="owl-one owl-carousel owl-theme slider" id="owl-1">
		<div class="">
			<a href="/shop" target=>
				<img src="<?php echo asset("storage/img/slider_home/banner_5.jpg")?>" alt="">
			</a>
		</div>
		<div>
			<img src="<?php echo asset("storage/img/slider_home/banner_3.jpg")?>" alt="">
		</div>
		<div class="">
			<a href="/cambio" target="_blank">
				<img src="<?php echo asset("storage/img/slider_home/banner_4.jpg")?>" alt="">
			</a>
		</div>
		
	</div>

	<div class="owl-one owl-carousel owl-theme slider" id="owl-2">
		<div class="">
			<a href="/shop" target=>
				<img src="<?php echo asset("storage/img/slider_home/banner_xs_5.jpg")?>" alt="">
			</a>
		</div>
		
		<div>
			<img src="<?php echo asset("storage/img/slider_home/banner_xs_3.jpg")?>" alt="">
		</div>

		<div>
			<a href="/cambio" target="_blank">
				<img src="<?php echo asset("storage/img/slider_home/banner_xs_4.jpg")?>" alt="">
			</a>
		</div>
		
	</div>

</section>

@component('comp.contacto')
	@slot('class')
    bk-grey 
	
    padding-top-77 
	@endslot

	@slot('color')
	color:#333;
	@endslot
	
@endcomponent

</div>


	@component('comp.footer')
		@slot('class')
		@endslot
		@slot('color')
		@endslot
			@slot('terminos')
				
		@endslot
	@endcomponent
  
@stop

@section('scripts')
	<script src="<?php echo asset('/js/jquery.zoom.min.js') ?>"></script>
	<script>
	
	$(document).ready(function(){
	    if(window.location.pathname.indexOf('shop') >= 0){
	        $('html,body').animate({ scrollTop:$('#shop').offset().top -150  }, 'slow');
            return false; 
	    }

	    $('.zoom').zoom({magnify:1.2});
	    
	    
	        
	});
		
	
	</script>

	<script>
		function galleryHandler(route,target){
			$('.fichas .bg-cont#'+target+' span img').fadeOut(function(){
				$('.fichas .bg-cont#'+target+' span img').attr('src',route);	
				$('.fichas .bg-cont#'+target+' span img').fadeIn();
			});		
		}
	</script>


	<script>
		function scale(id){

			$("body").css("overflow-y",'hidden');
			
			$(id).addClass('scale');
			
			$(id).removeClass('noScale');


		}


		function noScale(id){

			$("body").css("overflow-y",'scroll');
			$(id).removeClass('scale');
			$(id).addClass('noScale');
			

		}

	</script>

	<script>
			function showMoreFichas(id){
				
				$("#more-"+id+"").show();

				$("#more-btn-"+id+"").text('Ver menos');

				$("#more-btn-"+id+"").attr('onClick','hideMoreFichas("'+id+'")');
			}

			function hideMoreFichas(id){

				$("#more-"+id+"").hide();

				$("#more-btn-"+id+"").text('Ver más');

				$("#more-btn-"+id+"").attr('onClick','showMoreFichas("'+id+'")');
			}

	</script>
@stop