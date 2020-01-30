
<?php 

require_once('Clases/Novedad.php'); 

$nov  = new Novedad();


?>

@extends('layouts.main')

@section('content')
@include('layouts.header')  

<section id="club_argenpesos" class="animated fadeIn">
<div class="row ">
	<h1 class="text-center margin-top-50"><b>RESPONSABILIDAD</b> SOCIAL</h1>
</div>
<?php $i=0; ?>


@foreach($novedades as $novedad)
  <?php $i++ ?>
  
  @if($i%2 == 0)
    
  <div class="resp-soc-row row  padding-top-50 padding-bottom-50 bk-grey  ">
            
            <div class="container">
              
              <div class="col-lg-6 col-sm-6">
                <h2 class="titulos red"><?php echo strtoupper($novedad->titulo)  ?></h2>
                <h3 class="subtitulos red"><i><?php echo strtoupper(utf8_encode($novedad->subtitulo))  ?></i></h3>
                <br>
                <p><?php echo ucfirst(utf8_encode($novedad->descripcion))  ?></p>
              </div>
              
              <div class="col-lg-6 col-sm-6 img-section">
                  <div class="overlay">
                  @foreach($novedad->img as $img)
                    <a class="content" data-fancybox="gallery{{$i}}" href="<?php echo asset('storage/img/novedades/'.$img->ruta) ?>" data-caption="<?php echo utf8_encode($novedad->descripcion)  ?>" >
                      <div class="link-cont text-center">
                        <a class="lightbox a-button"><i class="fa fa-search"></i></a>
                      </div>
                    </a>
                  @endforeach

                  </div>
                  @foreach($novedad->img as $img)
                    
                    @if($img->tipo == 'PRESENTACION')

                    <div class="img-portada" style="background-image:url(<?php echo asset('storage/img/novedades/'.$img->ruta) ?>);"></div>

                    @endif

                  @endforeach
                  
                </div>

                @foreach($novedad->img as $img)
                    
                    @if($img->tipo == 'SLIDE')

                    <a  style='display:none' data-fancybox='gallery{{$i}}' href='<?php echo asset('storage/img/novedades/'.$img->ruta) ?>' data-caption="<?php echo utf8_encode($novedad->descripcion) ?>">
                    </a>

                    @endif

                @endforeach


       

            </div>





  </div>

  @else

   <div class="resp-soc-row row  padding-top-50 padding-bottom-50 ">
            
            <div class="container">
              
             
              
              <div class="col-lg-6 col-sm-6 img-section">
                  <div class="overlay">
                  @foreach($novedad->img as $img)
                    <a class="content" data-fancybox="gallery{{$i}}" href="<?php echo asset('storage/img/novedades/'.$img->ruta) ?>" data-caption="<?php echo utf8_encode($novedad->descripcion)  ?>" >
                      <div class="link-cont text-center">
                        <a class="lightbox a-button"><i class="fa fa-search"></i></a>
                      </div>
                    </a>
                  @endforeach

                  </div>
                  @foreach($novedad->img as $img)
                    
                    @if($img->tipo == 'PRESENTACION')

                    <div class="img-portada" style="background-image:url(<?php echo asset('storage/img/novedades/'.$img->ruta) ?>);"></div>

                    @endif

                  @endforeach
                  
                </div>

                <div class="col-lg-6 col-sm-6">
                  <h2 class="titulos red"><?php echo strtoupper($novedad->titulo)  ?></h2>
                  <h3 class="subtitulos red"><i><?php echo strtoupper(utf8_encode($novedad->subtitulo))  ?></i></h3>
                  <br>
                  <p><?php echo ucfirst(utf8_encode($novedad->descripcion))  ?></p>
                </div>

                @foreach($novedad->img as $img)
                    
                    @if($img->tipo == 'SLIDE')

                    <a  style='display:none' data-fancybox='gallery{{$i}}' href='<?php echo asset('storage/img/novedades/'.$img->ruta) ?>' data-caption="<?php echo utf8_encode($novedad->descripcion) ?>">
                    </a>

                    @endif

                @endforeach

            </div>





  </div>
  


  @endif



  
@endforeach





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
