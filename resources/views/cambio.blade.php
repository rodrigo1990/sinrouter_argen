@extends('layouts.main')


@section('content')
@include('layouts.header-cambio')	

<section id="form" class="cambio">
	<div class="row">
		<ul id="cotizador-cont" class="flex">
			<li class="first">
				
				<ul>
				<li><h1 class="text-center white"><b>CAMBIO HOY</b></h1></li>
				<li>
					<h2 clasS="text-center">1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
				<li>
					<h2 clasS="text-center">1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
				<li>
					<h2 clasS="text-center">1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
			</ul>


			</li>
			<li clasS="form-cont">
				<div class="row header">
				<div class="center-block">
					<h2 class="float-left">CALCULADORA</h2>
					<h3 class="">Simulá tu cambio</h3>
					<a>
						<img src="<?php echo asset('storage/img/calculadora/actualizar.svg') ?>" alt="actualizar" class="float-right">
					</a>
					<!--  <hr class="center-block">-->
				</div>
				
			</div>
			<div class="row calculadora result-cont">
				<ul class="flex">
					<li>
						<h2 class=""><b>De:</b>

						<select name="" id="">
						<option value="USD"selected>Dólares (USD)</option>
						<option value="EURO">EURO</option>
						<option value="REAL">REAL</option>
						</select>

						


					</h2>


					<input class="result" value="1">
						

						
					</li>
					<li>
						<a class="float-right">
							<img class="cambiar-btn" src="<?php echo asset('storage/img/calculadora/cambiar.svg') ?>" alt="">
						</a>
					</li>
					<li>
						<h2 class=""><b>A:</b>

						<select name="" id="">
						<option value="USD"selected>Dólares (USD)</option>
						<option value="EURO">EURO</option>
						<option value="REAL">REAL</option>
					</select>

						
					</h2>


					<input class="result" value="$43,00">

					</li>
				</ul>
					


					
					


					
					
					
			</div>

			</li>
		</ul>
		<!--  <div class="first col-lg-5 text-center">
			
			
			
			
			

		</div>
		<div class="col-lg-6 form-cont">
			

		
		</div>-->
	</div>
</section>

<section id="mejor-cot">
	<h2 class="cambio-title text-center margin-top-35">
		<b>LA MEJOR COTIZACIÓN</b>
	</h2>
<div class="row">
		<div class="container">
			<ul class="flex">
				<li class="text-center">
					<img src="<?php echo asset('storage/img/icon-cambio-1.svg') ?>" alt=>
					<p>Acercate a nuestra <br> sucursal y en <br> segundos concretas <br> tu operación.</p>
				</li>
				<li class="text-center">
					<img src="<?php echo asset('storage/img/icon-cambio-2.svg') ?>" alt="">
					<p>
						Sólo debés <br> acercarte a nuestra <br> sucursal  con tu <br> DNI o Pasaporte.
					</p>
				</li>
				<li class="text-center">

					<img src="<?php echo asset('storage/img/icon-cambio-3.svg') ?>" alt="">
					
					<p> Somos una Agencia de <br> Cambios autorizada por <br> el BCRA, sujeta a <br> fiscalizaciones y los <br> controles pertinentes. </p>


				</li>
				<li class="text-center">
					<img src="<?php echo asset('storage/img/icon-cambio-4.svg') ?>" alt="">
					<p>Cambiás tu moneda <br> con los precios más <br> actualizados al <br> momento de <br> decidirlo.</p>
				</li>
			</ul>
		</div>
	</div>	
</section>


<section id="quienes-somos">
	<h2 class="cambio-title text-center">
		<b>QUIÉNES SOMOS</b>
	</h2>
	<div class="row margin-top-44">
		<div class="container text-center">
			<p>Somos una empresa que opera desde el 2005 en el Mercado de Créditos para  trabajadores, jubilados y pensionados.  Contamos con 12 sucursales y  operamos con más de 400 comercializadores de nuestros productos en todo el  país para satisfacer las necesidades de nuestros clientes. A partir del año 2019  expandimos nuestro negocio e inauguramos nuestra agencia de cambio  para moneda extranjera. Estamos convencidos que con nuestras acciones le damos  continuidad a la idea que nos dio origen: <span>dar soluciones rápidas y fáciles a las  necesidades actuales de nuestra comunidad.</span></p>
		</div>
	</div>
</section>


<section id="donde-cambio">
	<h2 class="cambio-title text-center">
		<b>¿DÓNDE CAMBIO?</b>
	</h2>
	<div class="row margin-top-25">
		<div id="map"></div>
	</div>
</section>


<section id="contacto-form">
	<div class="container">
		<h2 class="cambio-title text-center">
			<b>Hacenos tu consulta</b>
		</h2>

		<div class="row">
			<form action="">
				<div>
					<label class="text-right" for="nombre" class="float-left">Nombre</label class="text-right">
					<input type="text" class="">
				</div>
				
				<div>
					<label class="text-right" for="apellido">Apellido</label class="text-right">
					<input type="text" class="">
				</div>
				
				<div>
					<label class="text-right" for="telefono">Teléfono</label class="text-right">
					<input type="text" class="">
				</div>

				<div>
					<label class="text-right" for="mail">Mail</label class="text-right">
					<input type="text" class="">
				</div>

				<div>
					<label class="text-right" for="consulta">Consulta</label class="text-right">
					<input type="text" class="">
				</div>


				<a href="sucursales" class="spa-btn border-btn white float-right margin-top-25" target="">ENVIAR</a>

			</form>
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
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkne1gpPfJ0B3KrE4OQURwPi492LDjg8g"></script>
<script>
	 $(document).ready(function(){
    	initMap();
   });


 	window.centerGlobal = {lat: -34.562872, lng: -58.451280};
  	window.markers=[];
 	window.locations=[];
 	window.map;

 	locations.push(['<b>SAN MIGUEL </b><br><br>Presidente Perón 1185 <br><br> <b>TEL:</b> 4664-4449 <br><br> <b>Whatsapp:</b> 15-3252-3061  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.545593,-58.707374]);


	  function initMap() {
 		map = new google.maps.Map(document.getElementById('map'), {
	      center: centerGlobal,
	      zoom: 9
	    });

	    agregarLocaciones(locations);

	    zoomOnLocation(-34.545593,-58.707374);
	  }



	   function agregarLocaciones(locations){
			var infowindow =  new google.maps.InfoWindow({});
			var marker,count;

			/*map.setZoom(5);
			map.setCenter(centerGlobal);*/


			for (count = 0; count < locations.length; count++) {
			    marker = new google.maps.Marker({
			      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
			      map: map,
			      icon: "<?php echo asset("storage/img/g-marker.png")?>",
			      title: locations[count][0]
			    });
			google.maps.event.addListener(marker, 'click', (function (marker, count) {
			      return function () {
			        infowindow.setContent(locations[count][0]);
			        infowindow.open(map, marker);
			      }
			    })(marker, count));

				markers.push(marker);
			  	
			  }

		}


		function zoomOnLocation(latitud,longitud){
	      	var center = {lat: latitud, lng: longitud};


	      	if($(window).width()<1024){
				$('html,body').animate({ scrollTop:$('#map').offset().top-50  }, 'slow');
			}




	      	for (var i=0; i<markers.length; i++) {
	    		if (markers[i].getPosition().lat()==latitud) {

	    			var marker = markers[i];
	    			var infowindow = new google.maps.InfoWindow();
	    			infowindow.setContent(locations[i][0]);
			        infowindow.open(map, marker);

		      	map.setCenter(center);
		      	map.setZoom(15);
		   		 }
		   	}
	
	      }

	      function scrollAnimate(id){

	      $('html,body').animate({ scrollTop:$(id).offset().top-50  }, 'slow');


	      }





</script>
	
@stop