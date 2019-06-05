@extends('layouts.main')

@section('content')
@include('layouts.header')	
<section id="institucional" class="animated fadeIn">
	<div class="row ">
		<h1 class="text-center margin-top-50">QUIENES <b>SOMOS</b>  </h1>
	</div>
	<div class="container">
		<p class="text-center margin-top-25">
			Somos <b>una empresa que opera desde el 2005 en el Mercado de Créditos para trabajadores, jubilados y <br> pensionados.</b> Contamos con 12 sucursales y operamos con más de 400 comercializadores de nuestros productos en todo el país para satisfacer las necesidades de nuestros clientes. Estamos convencidos que con nuestras acciones le damos continuidad a la idea que nos dio origen: <b>dar soluciones citicias rápidas y fáciles</b> a las necesidades actuales de nuestra comunidad.
		</p>
	</div>	
		<div id="accordion" class=" margin-top-50"">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          <h3 class="text-center"><b>NUESTRA</b> VISIÓN <br> <div class="arrow"></div></h3>
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
		    	<div class="container">
		      <div class="card-body">
		        <div class="row">
		        	<ul >
		        		<li  class="img-cont" >
		        			<img src="<?php echo asset("storage/img/img-accordeon-01.png")?>" alt="" class="center-block">
		        		</li>
		        		<li class="li-line">
		        			<div class="vertical-line" ></div>
		        		</li>
		        		<li class="li-text">
		        			<p>
		        			Queremos <b>consolidar nuestra posición de liderazgo</b> dentro de está comunidad, fortaleciendo  el vinculo con nuestros clientes, siendo la compañia en la que confíen siempre para cubrir  sus necesidades. <br>
		        			Queremos que cada miembro de <b>Argenpesos</b> se sienta orgulloso de contribuir día a día a cumplir con nuestra misión.
		        			</p>
		        		</li>
		        	</ul>
		        		
		        	</div>
		        </div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          <h3 class=""><b>NUESTRA</b> MISIÓN <br> <div class="arrow"></div></h3>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
		      	<div class="container">
			      	<div class="row">
				      	 	<ul>
				        		<li  class="img-cont " >
				        			<img src="<?php echo asset("storage/img/img-accordeon-02.png")?>" alt="" class="center-block">
				        		</li>
				        		<li class="li-line">
				        			<div class="vertical-line" ></div>
				        		</li>
				        		<li class="li-text">
				        			<p>
				        			Brindar soluciones crediticias rápidas y fáciles a las necesidades de nuestros clientes basándonos en una <b>relación de confianza</b> para acompañarlos en la <b>realización de sus proyectos.</b>
				        			</p>
				        		</li>
				        	</ul>
		        	</div>
	        	</div>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          <h3 class=""><b>NUESTROS</b> VALORES <br> <div class="arrow"></div></h3>
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body">
		        <div class="row">
		        	<div class="container">
			      	 	<ul>
			        		<li  class="img-cont" >
			        			<img src="<?php echo asset("storage/img/img-accordeon-03.png")?>" alt="" class="center-block">
			        		</li>
			        		<li class="li-line">
			        			<div class="vertical-line" ></div>
			        		</li>
			        		<li class="li-text">
			        			<p>
			        			Nuestra prioridad es preservar a <b>nuestros clientes</b> brindándoles <b>calidez y respeto para crear un vínculo duradero</b> porque creemos firmemente que cada uno de ellos es único para nosotros. 
								La <b>proactividad, eficacia y eficiencia</b> en nuestros procesos nos acercan a nuestra principal preocupación: acompañar a nuestros clientes en cada proyecto. 
								El <b>trabajo en equipo</b> es fundamental para alcanzar nuestros objetivos: consideramos que cada integrante de <b>Argenpesos</b> es protagonista activo en el crecimiento de la compañía. 
								La <b>proximidad y empatía</b> con nuestra comunidad, se ven reflejados en el trabajo de cada una de las personas que integran <b>Argenpesos</b> para hacer que cada cliente se sienta conforme con nuestros servicios.
											        			</p>
			        		</li>
			        	</ul>
			        </div>
	        	</div>
		      </div>
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
	
@endcomponent
@stop
@section('scripts')

	<script>
		$(document).ready(function(){
			$("#content").addClass('bk-grey');
		});
		$('.collapse').accordion({
		  disabled: true
		});
	</script>
@stop