
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
		@slot('titleColor')
    		blue
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
  	window.centerGlobal = {lat: -34.562872, lng: -58.451280};
  	window.markers=[];
 	window.locations=[];
 	window.map;
 	window.infoWindows=[];	
</script>
<script type="text/javascript" src="<?php echo asset('/js/sucursales/argenpesosLocations.js') ?>"></script>

<script type="text/javascript" src="<?php echo asset('/js/sucursales/agregarLocaciones.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('/js/sucursales/cerrarInfowInfowindows.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('/js/sucursales/initMap.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('/js/sucursales/zoomOnLocation.js') ?>"></script>
    <script>

    $(document).ready(function(){
    	initMap();

    	$("#content").addClass('bk-grey');
    });
  
    </script>

@stop