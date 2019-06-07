@extends('layouts.main')
@section('estilos')
<link rel="stylesheet" href="<?php echo asset("css/rangeslider.css")?>">
@stop
@section('content')
<div class="row" id="prestamo-form">

	<div class="col-lg-6 col-md-6 col sm-8 left-side" style="text-align:center">
		<div style="text-align: left;">
				<a href="/" id="logo-cont-a"><img src="<?php echo asset("storage/img/logo.png")?>" id="logo" class=""  alt=""></a>
		</div>
	    
	    <h1 class="margin-top-50">HOY MISMO LLEVATE <br> <b>HASTA <span class="red">$30.000</span></b></h1>

	    <img class="margin-top-25 img-responsive center-block" src="<?php echo asset("storage/img/form-graphic-06-06.png")?>" class="center-block" alt="">
		
		<div class="bk-red padding-10 inline-block" style="margin-top:-1px">
			<h3 >¡SUPER SIMPLE! ¡ÚNICO REQUISITO!</h3>
		</div>

		<div id="cobrarPorCuenta" class="">
			<h3 class="margin-top-10"><img src="<?php echo asset("storage/img/tilde-07.png")?>" alt="">Cobrar por cuenta bancaria</h3>
			<p class="margin-top-10">Sueldo / Jubilaciones / Pensiones</p>	
		</div>


	</div><!-- col-lg-7 col-md-7 col sm-8 -->
	
	<div class="col-lg-6 col-md-6 col-sm-12 pattern form-cont">
	<div class="my-container">
	<form action="procesarSolicitud" method="POST" name="myForm" id="myForm">
	@csrf
	<h2 style="margin-top: 0;">
	<img src="<?php echo asset("storage/img/next-arrow-orange.png")?>" alt="">
	DATOS PERSONALES:</h2>		
			<div class="row ">
				
				<div class="col-lg-6 col-md-6 col-sm-12  col-xs-12">
	                    <input type="text" placeholder="Nombre" name="nombre" class="form-control" id="nombre">

	                    <div class="valid-feedback feedback-icon" id="nombre-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="nombre-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

	                    <div class="error" id="nombre-error">*Ingrese un nombre valido Ej: Juan</div>


				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
						<input type="text" placeholder="Apellido" name="apellido" class="form-control" id="apellido">
	                     <div class="valid-feedback feedback-icon" id="apellido-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="apellido-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

	                    <div class="error" id="apellido-error">*Ingrese un apellido valido Ej: Valdez</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<input type="number" name="dni" id="dni" class="form-control" maxlength="8" min="0" placeholder="DNI (sin puntos)">
					<div class="valid-feedback feedback-icon" id="dni-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="dni-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>
	                    <div class="error" id="dni-error">*Ingrese un dni valido sin puntos Ej: 20234678</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 radio-btn">
					
						<div class="radio float-left">
						
							<label for="">
								<input type="radio" value="Masculino" name="sexo" class="float-left" checked>
								Masculino
							</label>
						
						</div>

						<div class="radio float-left">
							<label for="">
								<input type="radio" value="Femenino" name="sexo" class="float-left">
								Femenino		
							</label>
						</div>
					</div>
			</div>
			<div class="row ">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<select  name="codigo_area" id="codigo_area"  class="form-control">
						@include('inc.options_cod_area')
					</select>
					<div class="valid-feedback feedback-icon" id="cod-area-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>
					<div class="invalid-feedback feedback-icon" id="cod-area-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>
					<div class="error" id="cod-area-error">*Ingrese un codigo de area valido</div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
	                    <input type="text" name="fix-celular" id="fix-celular" value="15" disabled="disabled" class="form-control">
						<input type="number" name="celular" id="celular" placeholder="Ej:46587925"  class="form-control">
						<div class="valid-feedback feedback-icon" id="celular-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="celular-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>
	                    <div class="error" id="telefono-error">*Ingrese un telefono valido 55668899</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-12 col-md-12 col-xs-12">
						<input type="text" name="mail" id="email" placeholder="Email" class="form-control">
						<div class="error" id="mail-error">*Ingrese un email valido</div>
	                    <div class="valid-feedback feedback-icon" id="email-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="email-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>
	                    <div class="error" id="email-error">*Ingrese un email valido ejemplo@argenpesos.com.ar</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<select  name="provincia" id="provincia"  class="form-control" onChange="buscarCiudadSegunProvincia()">
							<option value="null">Provincia</option>
							 @foreach($provincias as $item)
								<option value="{{$item->id}}">{{$item->provincia_nombre}}</option>
							@endforeach

						</select>
						<div class="error" id="provincia-error">*Ingrese una provincia</div>
						
						<div class="valid-feedback feedback-icon" id="provincia-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="provincia-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<select  name="localidad" id="localidad"  class="form-control">
							<option value="null">Localidad</option>
						</select>
						<div class="error" id="localidad-error">*Ingrese una localidad valida</div>
						<div class="valid-feedback feedback-icon" id="localidad-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="localidad-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<select  name="banco"  class="form-control" id="banco">
						 @include('inc.options_bancos')
						</select>
						<div class="error" id="banco-error">*Ingrese una banco valida</div>
						<div class="valid-feedback feedback-icon" id="banco-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="banco-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<select  name="empleador"  class="form-control" id="empleador">
							<option value="null">Empleador</option>
							 <option value="Asignacion">Asig. Universal por hijo</option>
			                <option value="Cooperativa">Cooperativa</option>
			                <option value="Empleado_publico">Empleado Sector Público</option>
			                <option value="Empleado_privado">Empleado Sector Privado</option>
			                <option value="Monotributista">Autónomo/Monotributista</option>
			                <option value="Jubilado">Jubilado/Pensionado</option>
			                <option value="Sin_empleo">Sin Empleo</option>
						</select>

						<div class="invalid-feedback feedback-icon" id="empleador-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

						<div class="valid-feedback feedback-icon" id="empleador-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     

	                    <div class="error" id="empleador-error">*Ingrese una empleador valida</div>

					</div>
				</div>
				<div class="row ">
				    <div class="col-lg-12 col-md-12 col-xs-12">
						<input placeholder="¿Cuanto ganas? Ej:10000" type="number" name="sueldo" id="sueldo" class="form-control">
						<div class="error" id="sueldo-error">Ingrese un sueldo valido</div>
	                     <div class="valid-feedback feedback-icon" id="sueldo-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="sueldo-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

	                    <div class="error" id="sueldo-error">*Ingrese un sueldo valido sin puntos ni signo $, 10000</div>
					</div>
				</div>
					<div class="row text-center range-row ">
						<h1 class="form-titles">¿<b>CUÁNTO</b> NECESITAS?</h1>
						<div class="range-out center-block">
					       
						    <p style="float:left">$3.000</p>
						    <p style="float:right">$30.000</p></div>
							<div class="range-width range-cont center-block" style="width:75%;">

								
						 		<input step="1000" type="range" name="valor_monto" id="dinero" min="3000" max="30000" data-rangeslider>
								  <output></output>
						         <!--<p class="text-center" style="font-size:2rem;">Tu ingreso neto en mano debe ser de $10.000</p>-->

						</div>
					</div>
				<div class="row center-block last-row" style="">
					<div class="float-left">
						<div class="radio">
							<label for="">
								<input type="radio" value="aceptado" id="terminos" name="terminos" class="float-left">
								Acepto los terminos <br> y condiciones
							</label>
						</div>
						<div class="error" id="terminos-error">*Acepte los terminos</div>
						
					</div>
					
					<div class="float-right">
						
						<a class="border-btn red float-right text-center" value="ENVIAR SOLICITUD" id="btn_enviar" style="cursor:pointer" onClick="myFunction()">ENVIAR SOLICITUD </a>
						
					</div>
				</div>	
				<div class="row ">
				
					<div class="col-lg-12 col-md-12 col-xs-12">
					<div
					id='recaptcha'
					class="g-recaptcha"
					data-sitekey="6Lcg21YUAAAAAFjfbU3ZWINWWcy_4pmu5WdyOrx9"
					data-callback="myFunction"
					>
					    
					</div>

	                <div class="msg-error" style="color:red;"></div>

				<div class="error" id="captcha-error">*Valide el captcha</div>
					</div>
				</div>
		</form>
		</div>
	</div>
</div>

	@include('inc.adelantos_creditos_online')

	@component('comp.contacto')
		@slot('class')
		bk-blue
		@endslot
		@slot('color')
		@endslot
	@endcomponent
	
	<footer >
	<div class="first padding-12 bk-red row text-center">
		<p>
			<b>Horario de atención:</b>  Lunes a viernes de 09 a 19 hs. - Sábados: de 09 a 13 hs.
		</p>
	</div>
	<div class="row second margin-top-50 ">
		<div class="container-fluid">
			<div class="col-lg-2">
				<img class="logo img-responsive" src="<?php echo asset("storage/img/logo.png")?>"></img> 
			</div>
			<div class="col-lg-3">
				<h4>NUESTROS SERVICIOS</h4>
				<hr>
					<ul>
						<li class="margin-top-10"><a href="saca_tu_prestamo" class="red"><b>SACA TU PRESTAMO</b></a></li>
						<li class="margin-top-10"><a href="saca_tu_prestamo" class="blue"><b>PEDI TU ADELANTO</b></a></li>
						<li class="margin-top-10"><a href="https://www.argenpesos.com.ar/solicitarprestamo/">Consultá tu préstamo</a></li>
					</ul>
				
			</div>
			<div class="col-lg-7">
				<h4>SOBRE ARGENPESOS</h4>
				<hr>
				<div class="row">
					<div class="col-lg-4">
						<ul>
							<li class="margin-top-10"><a goTo="institucional" class="spa-btn">Quienes somos</a></li>
							<li class="margin-top-10"><a goTo="resp_social" class="spa-btn">Responsabilidad social </a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<ul>
							<li class="margin-top-10"><a  goTo="sucursales" class="spa-btn">Nuestras sucursales </a></li>
							<li class="margin-top-10"><a goTo="preguntas_frecuentes" class="spa-btn">Preguntas frecuentes </a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<ul>
							<li class="margin-top-10"><a href="">Trabajá con nosotros </a></li>
							<li class="margin-top-10"><a href="">Convertite en comercializador </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row terminos margin-bottom-50">
			
				<div class="col-sm-12 terminos">
					<div class="container-fluid">
							<div class="margin-top-25">
								Préstamos personales con cuotas fijas y en pesos. Otorgamos máximo $60.000 y mínimo $3.000 en un plazo máximo de 24 meses y un mínimo de 6 meses. El efectivo otorgamiento del préstamo y sus
								condiciones se encuentran sujetos a verificación del departamento de análisis de riesgo crediticio. Tasa nominal anual (TNA): mínima 163,59%, máxima 235,41%. Ejemplo de préstamo: Te damos ·10.000 en 12
								cuotas y nos devolvés $1.830 por mes. Tasa efectiva anual (TEA): mínima: 411,53%, máxima: 503,55%.
								<br><br>
								CFTNA: 198,59%.
								</div>
					</div>	
				</div>
			
		</div>
	

</footer>
			
	


@stop
@section('scripts')
<script type="text/javascript" src="<?php echo asset("js/validacionesSolicitarPrestamo.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/rangeslider.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/rangeSliderImplement.js")?>"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf7iKQUAAAAAEzdiNtjuPOEY8wu6yJvekMC5YKp"></script>

@stop