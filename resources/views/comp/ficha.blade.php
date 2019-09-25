<div class="modal fade fichas" id="{{$id}}" role="dialog">
     <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="img-cont">
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
                  <img class="center-block" src="<?php echo asset($imagenFicha) ?>" alt="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <h2 class="violet"><b>{{$marca}}</b> {{$modelo}}</h2>
                </div>
                <div class="row">
                  <h4 class="cuotas"><img src="<?php echo asset('storage/img/fichas-card-07.png') ?>" alt=""> Hasta <b>18 CUOTAS SIN INTERÉS</b> de</h4>
                  <h4 class="precio blue"><b>{{$precio}}</b></h4>

                  <hr>
                  <p class="precio-lista">*Precio de lista {{$precioLista}}</p>
                </div>
                <div class="row">
				<ul>
                @foreach($features as $feature)
                    <li><?php echo($feature)  ?></li>
                  
                @endforeach
                </ul>
                @if($so=='true')
                  <hr>
                  <h3>SISTEMA OPERATIVO</h3>
                  <img class="android-logo" src="<?php echo asset('storage/img/shop/android-logo.png') ?>" alt="">
                @endif
                </div>

              </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="col-sm-6 text-right">
             <div class="ahora-18">       
                <h4 class="blue">                       
                  <img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
                  <img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
                  HASTA 12 <br> Y 18 CUOTAS
                </h4>
              </div>
            </div>
            <div class="col-sm-6 text-left">
              
              <a href="/sucursales" class="spa-btn border-btn violet text-center center-block" target="_blank">ENCONTRÁ TU SUCURSAL</a>
            </div>
        </div>
  



      </div>
    </div>
  </div>