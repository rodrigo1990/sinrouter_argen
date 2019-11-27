@extends('layouts.main')
@section('estilos')
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
@stop
@section('content')
@include('layouts.header')  

<div class="bk-landing">
        <div class="row">
            <h1><b>TU CRÉDITO ESTÁ</b> <br>SIENDO ANALIZADO</h1>
            <div class="subtitle">
                <h2>EN BREVE NOS CONTACTAREMOS CON VOS</h2>
            </div>
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


@section('scripts')
<script>
    $(document).ready(function(){
        $("#content").css('margin-top',$("header").height());
});

        
</script>

<?php 

    echo "<script>

    var response  =  '".(string)$response."';

        console.log(response);

    </script>"

 ?>
@stop