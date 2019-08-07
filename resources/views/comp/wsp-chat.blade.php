<!-- wsp-chat -->
<!-- NORMAL -->
    <div id="interfaceForm" class="interfaceForm animated fadeInUp" style="display:none">
    <div class="interfaceFormHeader text-left">
            <img src="<?php echo asset("storage/img/wsp-chat/whatsapp-logo-header.svg")?>" alt="">
            <div class="minimize" style="float:right;margin-right:5%;cursor:pointer" onClick="cerrarInterfaceForm()">
            <i class="fas fa-times" style="font-size: 20px;margin-top: 57%;"></i>
            </div>



        
    </div>
    <div class="interfaceFormBody ">
        <h3 class="title">Completá con tus datos</h3>
        <form action="" method="POST">
            <input type="text" name="nombre" id="nombre-wsp" class="form-control" placeholder="Nombre" required>
            <div class="error" id="nombre-error">Ingrese un nombre</div>
            <br>
            <input type="text" name="telefono" id="telefono-wsp" class="form-control" placeholder="Numero" required>
            <div class="error" id="telefono-error">Ingrese un telefono valido</div>
            <br>
            <input type="text" name="email" id="email-wsp" class="form-control" placeholder="Email" required>
            <div class="error" id="email-error-wsp">Ingrese un email valido</div>
            <br>
            <a class="btn btn-primary" onClick="enviarWsp();" ><h3>INICIAR CHAT</h3></a>
            <br>
        </form>
    </div>
</div>


<!-- CELULARES -->
    <div id="interfaceFormXs" class="interfaceForm animated fadeInUp" style="display:none">
    <div class="interfaceFormHeader text-left">
            <img src="<?php echo asset("storage/img/wsp-chat/whatsapp-logo-header.svg")?>" alt="">
            <div class="minimize" style="float:right;margin-right:5%;cursor:pointer" onClick="cerrarInterfaceFormXs()">
            <i class="fas fa-times" style="font-size: 20px;margin-top: 57%;"></i>
            </div>



        
    </div>
    <div class="interfaceFormBody ">
        <h3 class="title">Completá con tus datos</h3>
        <form action="" method="POST">
            <input type="text" name="nombre" id="nombre-wsp" class="form-control" placeholder="Nombre" required>
            <div class="error" id="nombre-error">Ingrese un nombre</div>
            <br>
            <input type="text" name="telefono" id="telefono-wsp" class="form-control" placeholder="Numero" required>
            <div class="error" id="telefono-error">Ingrese un telefono valido</div>
            <br>
            <input type="text" name="email" id="email-wsp" class="form-control" placeholder="Email" required>
            <div class="error" id="email-error-wsp">Ingrese un email valido</div>
            <br>
            <a class="btn btn-primary" onClick="enviarWsp();" ><h3>INICIAR CHAT</h3></a>
            <br>
        </form>
    </div>
</div>



<!-- NORAML -->
<div id="interfaceFormBtn" class="interfaceFormBtn animated rollIn " style="cursor:pointer" onClick="abrirInterfaceForm();">
    <img style="display: inline-block;width:24px;height: 24px; margin-top: -7px; margin-right: 4px;" src="<?php echo asset("storage/img/wsp-chat/whatsapp-logo.svg")?>" alt="">
    <h3 style="display: inline-block;">CONSULTANOS</h3>
</div>  

<!-- XS -->
<div id="interfaceFormBtnXs" class="interfaceFormBtn animated rollIn " style="cursor:pointer" onClick="abrirInterfaceFormXs();">
    <img style="display: inline-block;width:24px;height: 24px;" src="<?php echo asset("storage/img/wsp-chat/whatsapp-logo.svg")?>" alt="">
    <!--  <h3 style="display: inline-block;">CONSULTANOS</h3>-->
</div>  

<!-- /wsp-chat -->