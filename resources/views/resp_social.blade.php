
<?php 
require_once('Clases/Novedad.php'); 

$nov  = new Novedad();


?>

@extends('layouts.main')

@section('content')
@include('layouts.header')  

<section id="club_argenpesos" class="animated fadeIn margin-bottom-100">
<div class="row ">
	<h1 class="text-center margin-top-50"><b>RESPONSABILIDAD</b> SOCIAL</h1>
</div>


  <?php 

    $nov->listarNovedadesUser();

   ?>





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

<!-- FANCYBOX -->
<script type="text/javascript" src="<?php echo asset("storage/js/jquery.mousewheel-3.0.6.pack.js")?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.js"></script>
<!-- FANCY BOX -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.css" />
<script type="text/javascript">
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>

@stop
