@extends('layouts.main')


@section('content')
@include('layouts.header')	

<div class="bk-landing">
        <div class="row">
            <h1 class="text-center"><b>¡UPS!</b> <br> ¡PARECE QUE HAY UN PROBLEMA!</h1>
            <br>
          <h2 class="text-center">INTENTÁ NUEVAMENTE EN UNOS INSTANTES</h2>
        </div>


</div>

@component('comp.contacto')
	@slot('class')
    bk-grey 
	
    padding-top-77 
	@endslot
	@slot('titleColor')
    	blue
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