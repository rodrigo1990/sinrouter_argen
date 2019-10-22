<div class="fichas full-bk grey-bk" id="{{$id}}">
  <div class="modal-header">
      
          <a  id="" class="close-btn" onClick="noScale('#{{$id}}')">
            <i class="fas fa-times-circle float-right"></i>
          </a>
        </div>
     <div class="modal-dialog modal-sm">
      <div class="">
        
        <div class="modal-body">
            <div class="row">
              <div class="col-sm-6 img-cont">
                @if($memoria!='')
                  <div class="circle blue">
                    <span>MEMORIA <br> <b>{{$memoria}}</b></span>
                  </div>
                 @endif
				
				        @if($camara!='')
                  <div class="circle violet">
                    <span>CÁMARA <br> <b>{{$camara}}</b></span>
                  </div>
                 @endif
                 @if($bateria!='')
                  <div class="circle red">
                    <span>BATERÍA <br> <b>{{$bateria}}</b></span>
                  </div>
                 @endif
  
                   <div class="col-sm-4 thumb-cont">

                    @if(count($imagenes)>1)
                      <ul class="flex ">
                        @foreach($imagenes as $imagen)
                        <li onclick="galleryHandler('{{$imagen}}','{{$id}}')">
                          <img class="center-block" src="<?php echo asset($imagen) ?>" alt="">
                        </li>
                        @endforeach
                      </ul> 
                    @endif
                   </div>

                   <div class="col-sm-8 bg-cont" id="bg-cont-{{$id}}">
                        <span class="zoom" id="zoom-cont-{{$id}}">
                          <img src="<?php echo asset($imagenes[0]) ?>" alt="">
                          <!-- <div style="height: 370px;background:url('<?php /*echo asset($imagenes[0])*/ ?>')" alt=""></div> -->
                        </span>
                   </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <h2 class="violet"><b>{{$marca}}</b> {{$modelo}}</h2>
                </div>
                <div class="row">
                  <h4 class="cuotas"><img src="<?php echo asset('storage/img/fichas-card-07.png') ?>" alt=""> Hasta <b>18 CUOTAS SIN INTERÉS</b> de</h4>
                  <h4 class="precio blue"><b class="blue">{{$precio}}</b></h4>

                  <hr>
                  <p class="precio-lista">*Precio de lista {{$precioLista}}</p>
                </div>
                <div class="row">
            @if($features)
				    <ul>
              
              <?php $i = 0; ?>
              
              <?php end($features) ?>

              <?php  $last = key($features) ?>

                @foreach($features as $feature)
                  
                  

                  @if($i>=7)
                    
                
                        <ul class="more" id="more-{{$id}}">
                
                          @for($k=$i;$k<=$last;$k++)

                              <li><?php echo ($features[$k]) ?> </li>

                          @endfor
                
                        </ul>
                        <div class="clear"></div>
                        <a onClick="showMoreFichas('{{$id}}')" id="more-btn-{{$id}}">Ver más</a>
                    @break;

                  @else
              
                    <li><?php echo($feature)  ?></li>
              
                  @endif                 

                <?php $i++; ?>
                  
                @endforeach
                </ul>
            @endif


                @if($so=='true')
                  <hr>
                  <h3>SISTEMA OPERATIVO</h3>
                  <img class="android-logo" src="<?php echo asset('storage/img/shop/android-logo.png') ?>" alt="">
                @endif
                </div>

              </div>
            </div>
        </div>
       
  



      </div>
    </div>
     <div class="modal-footer">
      <div class="container">
        <ul class="flex">
            <li class="text-right">
             <div class="ahora-18">       
                <h4 class="blue">                       
                  <img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
                  <img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
                  HASTA 12 <br> Y 18 CUOTAS
                </h4>
              </div>
            </li>
            <li class="text-left">
              
              <a href="/sucursales" class="spa-btn border-btn violet text-center center-block" target="_blank">ENCONTRÁ TU SUCURSAL</a>

            </li>

            <li class="text-left">
        

              <a  data-toggle="modal" data-target="#helpShop"class="spa-btn border-btn blue text-center float-left " target="">TE AYUDAMOS A COMPRAR</a>
            </li>
        </ul>
      </div>
        </div>
  </div>

