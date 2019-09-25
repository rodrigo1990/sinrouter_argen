<div class="modal fade" id="comercializador" role="dialog">
     <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h1 class="text-center white"><b>CONVERTITE EN </b> COMERCIALIZADOR</h1>
          <form action="">
              <h2 class="margin-top-5">
                        <img src="<?php echo asset("storage/img/next-arrow-orange.png")?>" alt="">
                        DATOS PERSONALES:
                    </h2>
                    <div class="row margin-top-25">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                            <div class="error" id="nombre-error">Ingrese un nombre valido</div>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                            <div class="error" id="apellido-error">Ingrese un apellido valido</div>
                        </div>
                    </div>
                    <div class="row margin-top-25">
                        <div class="col-sm-6">
                                
                            
                                <input type="number" class="form-control" id="dni" placeholder="DNI (Sin puntos)">
                                <div class="error" id="dni-error">Ingrese un dni valido</div>
                            
                            
                        </div>
                        <div class="col-sm-6">
                            <select name="provincia" class="form-control"  id="provincia2" onChange="buscarCiudadSegunProvincia()">
                                <option value="null">Provincia</option>
                                @foreach($provincias as $provincia)
                                <option value="{{$provincia->id}}">{{$provincia->provincia_nombre}}</option>
                                @endforeach
                            </select>
                            <div class="error" id="provincia-error">Ingrese un provincia valido</div>
                        </div>
                    </div>

                    <div class="row margin-top-25">

                        <div class="col-sm-6">
                            <select name="localidad" class="form-control" id="localidad2" >
                                <option value="null">Localidad</option>
                            </select>
                            <div class="error" id="localidad-error">Ingrese un localidad valido</div>
                        </div>

                        <div class="col-sm-6">
                            
                            <div class="col-sm-6 padding-0">
                                Cuenta con local de venta al público
                            </div>
                            
                            <div class="col-sm-6 padding-0">
                                <div class="radio">
                                    <label for="">
                                        <input type="radio" name="ventaAlpúblico" value="si" checked>
                                        SI
                                    </label>
                                    <label for="">
                                        <input type="radio" name="ventaAlpúblico" value="no">
                                        NO
                                    </label>
                                </div>  
                            </div>
                            
                            
                            <div class="radio">
                                
                            </div>
                        </div>

                    </div>

                    <div class="row margin-top-25">
                        <div class="col-sm-12">
                            <label for="mensaje">Comentarios</label>
                            <textarea name="mensaje" id="comentarios" ></textarea>
                        </div>
                    </div>

                    <div class="row margin-top-25">
                        
                            <a class="border-btn red float-right text-center" onClick="enviarConvertiteEnComercializador()">ENVIAR</a>
                            
                        
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>