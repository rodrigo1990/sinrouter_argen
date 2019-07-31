
@extends('layouts.main')
@section('content')
@include('layouts.header')
<style>
	#map div:has(img){
		display:none !important;
	}
</style>
	<section id="sucursales" class="animated fadeIn margin-bottom-100">
		<div class="row">
			<h1 class="text-center margin-top-50">NUESTRAS <b>SUCURSALES</span></b></h1>
		</div>
		<div class="row margin-top-50">
			<div class="container">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<ul>
						<li class="red"><h3>CAPITAL FEDERAL</h3></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.599867,-58.372815);">Casa central</a></li>
						<li class="blue margin-top-10"><h3>ZONA NOROESTE</h3></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.435619,-58.563499);">San Fernando</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.545593,-58.707374);">San Miguel</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.681403,-58.556553);">San Justo</a></li>
						<li class="margin-top-10 blue"><h3>ZONA SUR</h3></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.660564,-58.367637);">Avellaneda</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.760503,-58.206957);">Berazategui</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.708119,-58.389905);">Lanús</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.762114,-58.398490);">Lomas De Zamora</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.782014, -58.313454);">Solano</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.804170,-58.274902);">Varela</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.762226,-58.360981);">Temperley - Barrio San José</a></li>
						<li class="margin-top-10 margin-left-20">- <a onClick="zoomOnLocation(-34.722831,-58.259495);">Quilmes</a></li>




				
					</ul>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 map">
					<div id="map"></div>			
		
				</div>
			</div>
		</div>
	</section>

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
		@endslot
		
	@endcomponent
@stop
@section('scripts')
 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkne1gpPfJ0B3KrE4OQURwPi492LDjg8g"></script>


    <script>

    $(document).ready(function(){
    	initMap();

    	$("#content").addClass('bk-grey');
    });
	  window.centerGlobal = {lat: -34.562872, lng: -58.451280};
	  window.markers=[];
	 window.locations=[];
	 window.map;






	  locations.push(['<b>CAPITAL FEDERAL<br> </b><br>Reconquista 660, CABA <br><br> <b>TEL:</b> 4510-6594 <br><br> <b>Horario:</b> Lunes a viernes de  9 a 18hs. ',-34.599867,-58.372815]);

	  locations.push(['<b>SAN FERNANDO </b><br><br>Constitución 198 <br><br> <b>TEL:</b> 4506-3730 <br> <br> <b>Whatsapp:</b>  15-3252-4072   <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 13hs y 14 a 18:45hs <br> Sábados de 9 a 13hs. ',-34.435619,-58.563499]);

	  locations.push(['<b>SAN MIGUEL </b><br><br>Presidente Perón 1185 <br><br> <b>TEL:</b> 4664-4449 <br><br> <b>Whatsapp:</b> 15-3252-3061  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.545593,-58.707374]);

	  locations.push(['<b>SAN JUSTO </b><br><br>Dr. Ignacio Arieta 3496 <br><br> <b>TEL:</b> 4651-0046 / 4482-4968 <br><br> <b>Whatsapp:</b> 15-3252-2397  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.681403,-58.556553]);

	  locations.push(['<b>AVELLANEDA </b><br><br>Av. Mitre 531 <br><br> <b>TEL:</b> 4201-5784 / 6561 <br><br> <b>Whatsapp:</b> 15-3252-5817  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.660564,-58.367637]);

	  locations.push(['<b>BERAZATEGUI </b><br><br>Av.14 N°5022 <br><br> <b>TEL:</b> 4356-0717 / 0911 <br><br> <b>Whatsapp:</b> 15-3252-4896  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.760503,-58.206957]);

	  locations.push(['<b>LANUS </b><br><br>9 de Julio 1140, Local 5, Galería de las Américas <br><br> <b>TEL:</b> 4240-4798/ 5448  <br><br> <b>Whatsapp:</b> 15-3252-4303  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.708119,-58.389905]);

	  locations.push(['<b>LOMAS DE ZAMORA </b><br><br>Av. Meeks 101 <br><br> <b>TEL:</b> 4244-1120 / 4243-1456 <br><br> <b>Whatsapp:</b> 15-3252-4297 <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.762114,-58.398490]);


	  locations.push(['<b>FLORENCIO VARELA </b><br><br>Monteagudo 345 <br><br> <b>TEL:</b>4287-8544 / 8567 <br><br> <b>Whatsapp:</b> 15-3252-4920 <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.804170,-58.274902]);

	  locations.push(['<b>TEMPERLEY - BARRIO SAN JOSE </b><br><br>Salta 87  <br><br> <b>TEL:</b> 2144-0093 / 3982-1412 <br><br> <b>Whatsapp:</b> 15-2165-4919  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 13:00 y de 14:00 a 18:45hs <br> Sábados de 9 a 13hs. ',-34.762226,-58.360981]);


	  locations.push(['<b>QUILMES </b><br><br>Rivadavia 96   <br><br> <b>TEL:</b> 4253-1001 <br><br> <b>Whatsapp:</b> 11-6551-0711  <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 18:45hs. <br> Sábados de 9 a 13hs. ',-34.722831,-58.259495]);

	  locations.push(['<b>SOLANO </b><br><br>Calle 845 Nº2590    <br><br> <b>TEL:</b> 4212-6770 / 7174<br><br> <b>Whatsapp:</b> 15-3252-5078   <br><br> <b>Horario:</b><br> Lunes a Viernes de 9 a 13:00hs. y 15 a 19:30hs <br> Sábados de 9 a 13hs. ',-34.782014, -58.313454]);





	  function initMap() {
 		map = new google.maps.Map(document.getElementById('map'), {
	      center: centerGlobal,
	      zoom: 9
	    });

	    agregarLocaciones(locations);
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
	  
    </script>

@stop