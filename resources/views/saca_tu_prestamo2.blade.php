@extends('layouts.main')
@section('content')
<style>
	footer .cuit{
		margin-top:0px;
	}
</style>
<section id="prestamo" class="animated fadeIn">
<div class="row" id="prestamo-form">

	<div class="col-lg-6 col-md-6 col sm-8 left-side" style="text-align:center">
		<div style="text-align: left;">
				<a href="/" id="logo-cont-a"><img src="<?php echo asset("storage/img/logo.png")?>" id="logo" class="margin-top-23 margin-left-28"  alt=""></a>
		</div>
	    
	    <h1 class="margin-top-35">HOY MISMO LLEVATE <br> <b>HASTA <span class="red">$30.000</span></b></h1>

	    <img class="margin-top-25 img-responsive center-block main-img" src="<?php echo asset("storage/img/form-graphic-06-06.png")?>" class="center-block" alt="">
		
		<div class="bk-red padding-10 inline-block" style="margin-top:-1px">
			<h3 >¡SUPER SIMPLE! ¡ÚNICO REQUISITO!</h3>
		</div>

		<div id="cobrarPorCuenta" class="">
			<h3 class="margin-top-10"><img src="<?php echo asset("storage/img/tilde-07.png")?>" alt="">Cobrar por cuenta bancaria</h3>
			<p class="margin-top-5">Sueldo / Jubilaciones / Pensiones</p>	
		</div>

		<a  class="center-block go-to-form border-btn red margin-top-35">Completá el formulario</a>


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
	                    <input type="text" placeholder="Nombre" name="nombre" class="form-control" id="nombre" value="{{$nombre}}">

	                    <div class="valid-feedback feedback-icon" id="nombre-check-icon">

	                        <i class="fa fa-check"></i>

	                    </div>

	                     <div class="invalid-feedback feedback-icon" id="nombre-error-icon">

	                        <i class="fa fa-times"></i>

	                    </div>

	                    <div class="error" id="nombre-error">*Ingrese un nombre valido Ej: Juan</div>


				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
						<input type="text" placeholder="Apellido" name="apellido" class="form-control" id="apellido" value="{{$apellido}}">
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
					<input type="number" name="dni" id="dni" class="form-control" maxlength="8" min="0" placeholder="DNI (sin puntos)" value={{$dni}}>
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
						<div class="celular-inputs-container">
		                    <input type="text" name="fix-celular" id="fix-celular" value="15" disabled="disabled" class="form-control">
							<input type="number" min="0" name="celular" id="celular" placeholder="Ej:46587925"  class="form-control" value={{$telefono}}>
						</div>
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
						<input type="text" name="mail" id="email" placeholder="Email" class="form-control" value="{{$mail}}">
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
						<select  name="provincia" id="provincia"  class="form-control" onChange="">
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
						 @include('inc.options_bancos_new')
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

							<option value="Empleado_publico">Empleado Sector Público</option>
							<option value="Empleado_privado">Empleado Sector Privado</option>
							<option value="Jubilado">Jubilado/Pensionado</option>


							<option value="Monotributista">Autónomo/Monotributista</option>
							 <option value="Asignacion">Asig. Universal por hijo</option>
			                <option value="Cooperativa">Cooperativa</option>
			                
			                
			                
			                
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
						<input placeholder="¿Cuanto ganas? Ej:10000" min="0" type="number" name="sueldo" id="sueldo" class="form-control">
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
						<h1 class="form-titles"><b>¿CUÁNTO</b> NECESITÁS?</h1>
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
						
						<a class="border-btn red float-right text-center" value="ENVIAR SOLICITUD" id="btn_enviar" style="cursor:pointer" onClick="myFunction()">ENVIAR CONSULTA </a>
						
					</div>
				</div>	
				<div class="row no-margin">
			
				<div class="col-lg-12 col-md-12 col-xs-12">
				<!-- <div
				id='recaptcha'
				class="g-recaptcha"
				data-sitekey="6Lcg21YUAAAAAFjfbU3ZWINWWcy_4pmu5WdyOrx9"
				data-callback="myFunction"
				>
				    
				</div> -->

                <div class="msg-error" style="color:red;"></div>

			<div class="error" id="captcha-error">*Valide el captcha</div>
				</div>
			</div>
			
			<input type="hidden" name="fillSiisaData" id="fillSiisaData">
		</form>
		</div>
	</div>
</div>
@component('comp.preguntas_frecuentes')@endcomponent


	@component('comp.adelantos_creditos_online')
		@slot('class')
			padding-top-100
			padding-bottom-100
			bk-grey
		@endslot
		
	@endcomponent

	@component('comp.contacto')
		@slot('class')
		bk-blue
		@endslot
		@slot('color')
			color:white;
		@endslot
	@endcomponent

	@component('comp.footer')
		@slot('class')
		@endslot
		@slot('terminos')
		<p class="margin-bottom-24">Préstamos personales con cuotas fijas y en pesos. Otorgamos máximo $60.000 y mínimo $3.000 en un plazo máximo de 24 meses y un mínimo de 6 meses. El efectivo otorgamiento del préstamo y sus
condiciones se encuentran sujetos a verificación del departamento de análisis de riesgo crediticio. Tasa nominal anual (TNA): mínima 163,59%, máxima 235,41%. Ejemplo de préstamo: Te damos ·10.000 en 12
cuotas y nos devolvés $1.830 por mes. Tasa efectiva anual (TEA): mínima: 411,53%, máxima: 503,55%. CFTNA: 198,59%.</p>
		@endslot
	@endcomponent

</section>


@stop
@section('scripts')
<script type="text/javascript" src="<?php echo asset("js/validacionesSolicitarPrestamo.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/validarSolicitarPrestamoAlApretarBoton.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/rangeslider.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/rangeSliderImplement.js")?>"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdEebcUAAAAAP-l6P6ooyB-g5fF_wQjqMBBrPxf"></script>
<script>

grecaptcha.ready(function() {
      grecaptcha.execute('6LdEebcUAAAAAP-l6P6ooyB-g5fF_wQjqMBBrPxf', {action: 'homepage'});
  });
$(document).ready(function(){


	fillSiisaData('fillSiisaData');
	
	var cod_area = {{$codArea ? $codArea : 'null'}};

	$("#content").css("margin-top",0);


	$("#creditos-online a").removeAttr("href");


	var token = $_GET('_token');

	
	if($(window).width()<1024){
		if(token!=null){
			$('html,body').animate({ scrollTop:$('#myForm').offset().top-50  }, 'slow');
		}
	}

	
	

	




	if(cod_area!=null){
	$("#codigo_area").val({{$codArea}});
	$("#cod-area-error-icon").fadeOut();
            $("#cod-area-check-icon").fadeIn();
            $("#codigo_area").removeClass('border-color-red');
            $("#codigo_area").addClass("border-color-green");
	cod_area_esta_validado = true;
	}

	var nombre=$("#nombre").val();

	if(nombre.length!=0){

	if(nombre.length<4||nombre.search(soloLetrasYEspacios)){

            $("#nombre-check-icon").fadeOut();

            $("#nombre-error-icon").fadeIn();

            $("#nombre").removeClass('border-color-green');

            $("#nombre").addClass('border-color-red');

            $("#nombre-error").fadeIn();

            nombre_esta_validado=false;





        }else{

            $("#nombre-error-icon").fadeOut();

            $("#nombre-check-icon").css("display","block");

            $("#nombre").removeClass('border-color-red');


            $("#nombre").addClass('border-color-green');

            $("#nombre-error").fadeOut();

            nombre_esta_validado=true;



        }

        }

        var apellido=$("#apellido").val();

		if(apellido.length!=0){

			if(apellido.length<4||apellido.search(soloLetrasYEspacios)){

		            $("#apellido-check-icon").fadeOut();

		            $("#apellido-error-icon").fadeIn();

		            $("#apellido").removeClass('border-color-green');

		            $("#apellido").addClass('border-color-red');

		            $("#apellido-error").fadeIn();

		            apellido_esta_validado=false;





		        }else{

		            $("#apellido-error-icon").fadeOut();

		            $("#apellido-check-icon").css("display","block");

		            $("#apellido").removeClass('border-color-red');


		            $("#apellido").addClass('border-color-green');

		            $("#apellido-error").fadeOut();

		            apellido_esta_validado=true;



		        }

	        }

	         var dni=$("#dni").val();
	         if(dni.length!=0){
 			if(dni.length<7||dni.length>8||dni.search(soloNumeros)){



	             $("#dni-check-icon").fadeOut();

	            $("#dni-error-icon").fadeIn();



	            $("#dni").removeClass('border-color-green');

	            $("#dni").addClass('border-color-red');

	 

	            dni_esta_validado=false;

	            $("#dni-error").fadeIn();

	        }else{



	            $("#dni-error-icon").fadeOut();

	            $("#dni-check-icon").css("display","block");

	            $("#dni").removeClass('border-color-red');


	            $("#dni").addClass('border-color-green');

	            dni_esta_validado=true;


	            $("#dni-error").fadeOut();



	        }




        }


        var celular = $("#celular").val();
        if(celular.length!=0){

        	var codAreaLenght = $("#codigo_area").val();


        	  var maxChars = 10-codAreaLenght.length;

		        if ($("#celular").val().length > maxChars) {

		            $("#celular").val($("#celular").val().substr(0, maxChars));

		            

		            var celular=$("#celular").val();

		        }

 			if(celular.length!=maxChars||celular.search(soloNumeros)){



            $("#celular-check-icon").fadeOut();

            $("#celular-error-icon").fadeIn();

            $("#celular").removeClass('border-color-green');

            $("#celular").addClass('border-color-red');

             $("#fix-celular").removeClass('border-color-green');

            $("#fix-celular").addClass('border-color-red');


            $("#telefono-error").fadeIn();


           




            celular_esta_validado=false;



        }else{



            $("#celular-error-icon").fadeOut();

            $("#celular-check-icon").css("display","block");

               
            $("#celular").removeClass('border-color-red');

            $("#fix-celular").removeClass('border-color-red');

            $("#celular").addClass('border-color-green');

            $("#fix-celular").addClass('border-color-green');

            celular_esta_validado=true;

            $("#telefono-error").fadeOut();

        }

        }

         var email=$("#email").val();

    
         if(email.length!=0){
      if(email.length<3||email.search(emailValido)){

        $("#email-check-icon").fadeOut();

        $("#email-error-icon").fadeIn();

        $("#email").removeClass('border-color-green');

        $("#email").addClass('border-color-red');


        $("#email-error").fadeIn();
       

        email_esta_validado=false;                    

        }else{

            $("#email-error-icon").fadeOut();

            $("#email-check-icon").css("display","block");

            $("#email").removeClass('border-color-red');


         $("#email").addClass('border-color-green');

            $("#email-error").fadeOut();

            email_esta_validado=true;

        }

        }


});


$("#creditos-online a").on("click", function(){ 
	 $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 


 });


$(".go-to-form").on("click", function(){ 
	 $('html,body').animate({ scrollTop:$('#myForm').offset().top  }, 'slow');
        return false; 


 });


function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}


function scale(){
	$("#preguntasFrecuentesCont").addClass('scale');
	$("body").css("overflow-y",'hidden');
	$("#preguntasFrecuentesCont").removeClass('noScale');

}



function noScale(){

	$("#preguntasFrecuentesCont").removeClass('scale');
	$("#preguntasFrecuentesCont").addClass('noScale');
	$("body").css("overflow-y",'scroll');

}





</script>

@stop