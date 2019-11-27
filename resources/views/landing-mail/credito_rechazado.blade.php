@extends('layouts.main')
@section('estilos')
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
@stop
@section('content')
@include('layouts.header')  

<div class="bk-landing">
        <div class="row rechazado">
            <h1>LAMENTAMOS INFORMARTE QUE POR EL MOMENTO <br> <b>NO TENEMOS UN PRÉSTAMO ONLINE <br></b>DISPONIBLE PARA VOS</h1>
        </div>


</div>

<div class="row rechazado-aviso margin-top-80">
    <div class="container">
        <h1 class="text-center"><b>PARA SABER</b> SI CALIFICÁS</h1>

        <p class="text-center">Para un préstamo en nuestras sucursales <br> realizá tu consulta al</p>

        <h3 class="text-center"><img src="<?php echo asset("storage/img/solicitud/icon-bg-01.png")?>" class="" alt=""> 0800-222-2743 o al <img src="<?php echo asset("storage/img/solicitud/icon-bg-02.png")?>" class="" alt=""> 11-3241-4878</h3>
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
        $("#content").css('margin-top',0);

        
    });
</script>

<?php 

    echo "<script>

    var response  =  ".$response.";

        console.log(response);

    </script>"

 ?>
@stop