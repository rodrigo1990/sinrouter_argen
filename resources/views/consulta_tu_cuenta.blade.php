
@extends('layouts.main')
@section('content')
@include('layouts.header')
<style>
	body{
		background-color:#f5f5f6; 
	}
</style>	
	<section id="consulta_tu_cuenta" class="">
		<div class=" bk-title">
			<h1><b>¡BIENVENIDO</b> CLIENTE!</h1>
		</div>
		<div class="row">
			<div class="container">
				<iframe src="/quiero-pagar-components/quiero-pagar-form.php" id="iFrame" frameborder="0" style="width:100%;height: 800px;"></iframe>
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
@stop