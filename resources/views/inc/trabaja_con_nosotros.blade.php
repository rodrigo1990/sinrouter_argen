<div class="modal fade" id="trabajaConNosotros" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h1 class="text-center white"><b>TRABAJÁ CON </b> NOSOTROS</h1>
          
         <form class="" action="enviarTrabajaConNosotros" method="POST" enctype="multipart/form-data">
                    @csrf
              <h2 class="margin-top-5">
                        <img src="<?php echo asset("storage/img/next-arrow-orange.png")?>" alt="">
                        DATOS PERSONALES:
                    </h2>
                    <div class="row margin-top-25">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                            <div class="error" id="nombre-error">Ingrese un nombre valido</div>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido">
                            <div class="error" id="apellido-error">Ingrese un apellido valido</div>
                        </div>
                    </div>
                    <div class="row margin-top-25">
                        <div class="col-sm-6">
                                
                            
                                <input type="number" name="dni" class="form-control" placeholder="DNI (Sin puntos)" id="dni">

                            <div class="error" id="dni-error">Ingrese un dni valido</div>
                            
                            
                        </div>
                        <div class="col-sm-6">
                            <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Teléfono celular">

                            <div class="error" id="telefono-error">Ingrese un teléfono valido</div>
                        </div>
                    </div>

                    <div class="row margin-top-25">
                        <div class="col-sm-12">
                            <input type="text" name="mail" id="mail" class="form-control" placeholder="Mail">
                            <div class="error" id="mail-error">Ingrese un mail valido</div>
                        </div>
                    </div>

                    <div class="row margin-top-25">
                        <div class="col-sm-12">
                            <label for="mensaje">Comentarios</label>
                            <textarea name="comentarios"  id="comentarios" ></textarea>

                            <div id="file-result">
                                CV: <span id="file-cv"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-top-25">
                         <div class="hidden-xs col-sm-12">

                            <a onClick="enviarTrabajaConNosotros()" class="border-btn red float-right text-center">ENVIAR</a>
                            
                            <span id="file-btn" class="btn btn-primary btn-file border-btn blue float-right" >
                                ADJUNTAR CV <input name="file" type="file" id="file-btn">
                            </span>
                        </div>

                        <div class="col-xs-12 hidden-sm hidden-lg hidden-md">
                            
                                <span id="file-btn" class="btn btn-primary btn-file border-btn blue float-right" >
                                ADJUNTAR CV <input name="file" type="file" id="file-btn">
                              </span>

                                <a onClick="enviarTrabajaConNosotros()"  class="border-btn red float-right text-center margin-top-25">ENVIAR</a>
                        </div>
                        
                        
                        
        
                        
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>