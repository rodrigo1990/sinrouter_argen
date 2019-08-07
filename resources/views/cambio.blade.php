@extends('layouts.main')


@section('content')
@include('layouts.header-cambio')	

<section id="form" class="cambio">
	<div class="row">
		<ul id="cotizador-cont" class="flex">
			 <li class="first" style="">
				
				<ul>
				<li><h1 class="text-center white"><b>CAMBIO HOY</b></h1></li>
				<li>
					<h2 clasS="text-center">1 USD = ${{$archivo[5]}}</h2>
					<div>Compra: <span id="dolar-compra"></span></div>
					<div>Venta: <span id="dolar-venta"></span></div>
				</li>
				<!--  <li>
					<h2 clasS="text-center">1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
				<li>
					<h2 clasS="text-center">1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>-->
			</ul>


			  </li>
			<li clasS="form-cont">
				<div class="row header">
				<div class="center-block">
					<h2 class="float-left">CALCULADORA</h2>
					<h3 class="">Simulá tu cambio</h3>
					<a id="actualizar-btn" onClick="actualizar()">
						<img src="<?php echo asset('storage/img/calculadora/actualizar.svg') ?>" alt="actualizar" class="float-right">
					</a>
					<!--  <hr class="center-block">-->
				</div>
				
			</div>
			<div class="row calculadora result-cont">
				<ul class="flex">
					<li id="de">

						<div class="select-cont">
							<h2 class="de"><b>De:</b>
							<span>Pesos Argentinos</span>
								
							</h2>
						</div>
						


					
				
					<div id="input1-cont">
						<input type="number" id="input1" class="result" value="1">
					</div>

						
					</li>
					  <li>
						<a id="cambiar-btn" class="float-right" onClick="cambiar()">
							<img class="cambiar-btn" src="<?php echo asset('storage/img/calculadora/cambiar.svg') ?>" alt="">
						</a>
					</li>
					<li id="a">

						<div class="select-cont">
							<h2 class="a"><b>A:</b>
							
							

								<select name="" id="divisaInput2">
									<option value="USD"selected>Dólares (USD)</option>
								</select>
							

							
							</h2>

						</div>

					<div id="input2-cont">
						<input type="number" id="input2" class="result" value=1>
					</div>
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
			<form action="" id="argencambio">
				<div>
					<label class="text-right" for="nombre" class="float-left">Nombre</label class="text-right">
					<input id="nombre" name="nombre" type="text" class="">
					<div class="error" id="nombre-error">Ingrese un nombre válido</div>
				</div>
				
				<div>
					<label class="text-right" for="apellido">Apellido</label class="text-right">
					<input id="apellido" name="apellido" type="text" class="">
					<div class="error" id="apellido-error">Ingrese un apellido válido</div>
				</div>
				
				<div>
					<label class="text-right" for="telefono">Teléfono</label class="text-right">
					<input id="telefono" name="telefono" type="text" class="">
					<div class="error" id="telefono-error">Ingrese un teléfono valido</div>
				</div>

				<div>
					<label class="text-right" for="mail">Mail</label class="text-right">
					<input id="mail" name="mail" type="text" class="">
					<div class="error" id="mail-error">Ingrese una dirección válida</div>
				</div>

				<div>
					<label class="text-right" for="consulta">Consulta</label class="text-right">
					<input id="consulta" name="consulta" type="text" class="">
				</div>


				<a onClick="enviarArgencambio();"  class="spa-btn border-btn white float-right margin-top-25" target="">ENVIAR</a>

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
		
	
	
	window.dolarCompra = {{$archivo[4]}};
	window.dolarVenta = {{$archivo[5]}};





	//controlo el estado de la interface de la calculadora
	window.calculadoraEstado = 0;

	 $(document).ready(function(){


	 	setTimeout(function() {
          location.reload();
        }, 900000);


    	initMap();
    	console.log(dolarCompra.toFixed(2));
    	console.log(dolarVenta.toFixed(2));
    	dolarCompra=dolarCompra.toFixed(2);
		dolarVenta=dolarVenta.toFixed(2);

    	calculadoraConstructor(dolarCompra,dolarVenta);

    	modificarTituloPestania();





    	$("#interfaceFormBtn,#interfaceFormXs,#interfaceForm, #interfaceFormBtnXs").addClass('cambio');
    	$("#interfaceFormBtn img,#interfaceFormBtnXs img").attr('src','<?php echo asset('storage/img/wsp-cambio-02.svg') ?>');



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


	      	/*if($(window).width()<1024){
				$('html,body').animate({ scrollTop:$('#map').offset().top-50  }, 'slow');
			}*/




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


	      function calculadoraConstructor(dolarCompra,dolarVenta){

	      	$("span#dolar-compra").html("$"+dolarCompra);
	      	$("span#dolar-venta").html("$"+dolarVenta);


	      	$("#input1").val(dolarVenta);


	      }















	      $("#input1").on("keyup",function(){

	      	var valor = $(this).val();

	      	var total = valor/dolarVenta;
	   		
	   		console.log(total);

      		$("#input2").val(total.toFixed(2));
	      	

	      });



	      $("#input2").on("keyup",function(){

	      	var valor = $(this).val();

	      	var total = valor*dolarVenta;
	   		
	   		console.log(total);

      		$("#input1").val(total.toFixed(2));
	      	

	      });



	      function actualizar(){

	      	$("#input1").val(1);

	      	$("#input2").val(dolarVenta);

	      	$("#input2").appendTo($("#input2-cont"));

	     	$("li#de h2.a").appendTo($("li#a .select-cont"));
					      



	      	$("#input1").appendTo($("#input1-cont"));
	      	$("li#a h2.de").appendTo($("li#de .select-cont"));

	      	$("li#de h2.de b").text('De:');

	      	$("li#a h2.a b").text('A:');


	      }


	      function cambiar(){
	      	if(calculadoraEstado==0){

		      	$("#input1").appendTo($("#input2-cont"));
		      	$("li#de h2.de").appendTo($("li#a .select-cont"))




		      	$("#input2").appendTo($("#input1-cont"));

		      	$("li#a h2.a").appendTo($("li#de .select-cont"));

		      	$("li#de h2.a b").text('De:');

		      	$("li#a h2.de b").text('A:');

	
		      	
				
		    


		      	var valor = $("#input2").val();

		      	var total = valor*dolarVenta;
		   		
		   		console.log(total);

	      		$("#input1").val(total.toFixed(2));


		     	calculadoraEstado = 1;

		     }else{


		     	$("#input2").appendTo($("#input2-cont"));

		     	$("li#de h2.a").appendTo($("li#a .select-cont"));
						      



		      	$("#input1").appendTo($("#input1-cont"));
		      	$("li#a h2.de").appendTo($("li#de .select-cont"));

		      	$("li#de h2.de b").text('De:');

		      	$("li#a h2.a b").text('A:');



		    

		      	calculadoraEstado = 0;
		     }
      		




	      }




	      function enviarArgencambio(){

            var nombre  = $("#argencambio #nombre").val();
            var apellido  = $("#argencambio #apellido").val();
            var telefono  = $("#argencambio #telefono").val();
            var mail  = $("#argencambio #mail").val();
            var consulta  = $("#argencambio #consulta").val();
           


            var nombreEstaValidado=false;
            var apellidoEstaValidado=false;
            var telefonoEstaValidado = false;
            var mailEstaValidado = false;

            if(nombre.length==0){
                $("#argencambio #nombre-error").fadeIn();
                nombreEstaValidado=false;
            }else{
                $("#argencambio #nombre-error").fadeOut();
                nombreEstaValidado=true;
            }

            if(apellido.length==0){
                $("#argencambio #apellido-error").fadeIn();
                apellidoEstaValidado=false;
            }else{
                $("#argencambio #apellido-error").fadeOut();
                apellidoEstaValidado=true;
            }

            if(telefono.length==0){
                $("#argencambio #telefono-error").fadeIn();
                telefonoEstaValidado=false;
            }else{
                $("#argencambio #dni-error").fadeOut();
                telefonoEstaValidado=true;
            }

            if((mail.length==0||mail.search(emailValido))){
                $("#argencambio #mail-error").fadeIn();
                mailEstaValidado=false;
            }else{
                $("#argencambio #mail-error").fadeOut();
                mailEstaValidado=true;
            }


            if(nombreEstaValidado==true&&apellidoEstaValidado==true&&telefonoEstaValidado==true&&mailEstaValidado==true){
                    $("#content").append('<div id="preloader-mailing" ><div class="spinner-sm spinner-sm-1" id="status"> </div></div>');
                    $.ajax({
                        headers:{
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                       
                       data: {nombre:nombre,apellido:apellido,telefono:telefono,mail:mail,consulta:consulta},
                       url:'/enviarArgencambio',
                       type:'post',
                        dataType:"json",
                       success: function(msg){

                            $('#preloader-mailing  #status').fadeOut(); // will first fade out the loading animation 
                            $('#preloader-mailing ').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 

                            $('body').delay(350).css({'overflow-y':'visible'});

                            alert(msg);


                           setTimeout(function(){
                            $("#preloader-mailing").remove(); 
                          },500);
                            



                          

                        }
                     });
            }

            
            



        }


        function modificarTituloPestania(){

        	$("title").text("Argenpesos - Agencia de Cambio");
        }

    


</script>
	
@stop