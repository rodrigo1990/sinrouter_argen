@extends('layouts.main')


@section('content')
@include('layouts.header')	
	
	<div class="animated fadeIn">
<section id="form">
	<div class="row">
		<div class="first col-lg-5 text-center">
			<ul class="margin-top-60">
				<li><h1><b>HOY MISMO,</b> <br> CON O SIN VERAZ</h1></li>
				<li class="margin-top-25"><a href="" class="big border-btn red margin-top-50">SACÁ TU PRESTAMO</a> <img class="" src="<?php echo asset("storage/img/next-arrow.png")?>" alt="" style="padding-left:5px"></li>
				<li class="margin-top-25"><h3>Hasta $30.000 en 12 cuotas</h3></li>
			
			</ul>
			
			

		</div>
		<div class="col-lg-6 form-cont">
			<form id="form-home" class="text-left" action="saca_tu_prestamo" method="get" >
				@csrf
				<h1 class="red cursive">¡Empecemos!</h1>
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
							<input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono ">
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
						<a id="form-home-btn" class="border-btn red text-center float-right">SACÁ TU  PRÉSTAMO</a>
					
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
				<img src="<?php echo asset("storage/img/cs-step-1.png")?>" alt="">
				<h4><b>1.</b> Vení  a nuestra sucursal</h4>
			</li>
			<li class="line">
				<img src="<?php echo asset("storage/img/line.png")?>" alt="">
			</li>
			<li>
				<img src="<?php echo asset("storage/img/cs-step-2.png")?>" alt="">
				<h4><b>2.</b> Presentá la documentación <br> y te aprobamos la solicitud</h4>
			</li>
			<li class="line">
				<img src="<?php echo asset("storage/img/line.png")?>" alt="">
			</li>
			<li>
				<img src="<?php echo asset("storage/img/cs-step-3.png")?>" alt="">
				<h4><b>3.</b> RECIBÍ TU DINERO <br> <b> ¡EN EL ACTO! </b></h4>
			</li>
		</ul>
		

		<a href="sucursales" class="spa-btn border-btn red center-block margin-top-25" target="_blank">NUESTRAS SUCURSALES</a>


	</section>



</section>
<div class="space-grey"></div>
<section id="banner" class="">
	<div class="owl-one owl-carousel owl-theme slider" id="owl-1">
		<div>
			<img src="<?php echo asset("storage/img/banner_2.png")?>" alt="">
		</div>
		<div>
			<img src="<?php echo asset("storage/img/banner.jpg")?>" alt="">
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
	@endcomponent
  
@stop

@section('scripts')

	
@stop