@extends('layouts.main')


@section('content')
@include('layouts.header-cambio')	

<section id="form" class="cambio">
	<div class="row">
		<div class="first col-lg-5 text-center">
			
			<h1 class="text-center white"><b>CAMBIO HOY</b></h1>
			<ul>
				<li>
					<h2>1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
				<li>
					<h2>1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
				<li>
					<h2>1 USD = $43,00</h2>
					<div>Compra: $42,00</div>
					<div>Venta: $42,00</div>
				</li>
			</ul>
			
			

		</div>
		<div class="col-lg-6 form-cont">
			<div class="row">
				<div class="center-block">
					<h2 class="float-left"><b>CALCULADORA</b></h2>
					<h3 class="">Simulá tu cambio</h3>
					<img src="" alt="">
					<hr class="center-block">
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
						<img class="cambiar-btn" src="<?php echo asset('storage/img/calculadora/cambiar.svg') ?>" alt="">
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

		
		</div>
	</div>
</section>


<?php 
	
	//var_dump($divisas);


	$connectionInfo = array( "Database"=>"Fx_Cambio", "UID"=>"Legion", "PWD"=>"L3g10nCr34t1v4");
	$conn = sqlsrv_connect( 'VM-FX', $connectionInfo);

		if( $conn ) {
		     echo "Conexión establecida.<br />";
		}else{
		     echo "Conexión no se pudo establecer.<br />";
		     die( print_r( sqlsrv_errors(), true));
		}	

 ?>

	
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

	
@stop