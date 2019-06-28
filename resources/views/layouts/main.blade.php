<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Argenpesos | ¡Saca tu prestamo! </title>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")?>"/>
	<link rel="stylesheet" href="<?php echo asset("css/estilos.css")?>">
	<link rel="stylesheet" href="<?php echo asset("css/animate.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css")?>">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo asset("css/rangeslider.css")?>">
	<link rel="stylesheet" href="<?php echo asset("css/wsp-chat.css")?>">
	@yield('estilos')
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body @yield('bodyclass')>
	<!-- PRELOADER AL CARGAR -->
	<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>
	   

<div id="content">
@yield('content')
<!-- trabajaConNosotros -->
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
                            
                                <a href="" class="border-btn blue float-right  text-center margin-left-10 margin-top-25">ADJUNTAR CV</a>

                                <a href="" class="border-btn red float-right text-center margin-top-25">ENVIAR</a>
                        </div>
                        
                        
                        
        
                        
                    </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- comercializador -->
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

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkne1gpPfJ0B3KrE4OQURwPi492LDjg8g"></script>
<script type="text/javascript" src="<?php echo asset("js/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.min.js")?>"></script>

<script type="text/javascript" src="<?php echo asset("js/manejoDeMenus.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/routerAjax.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/whatsapp-message.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/wspChatInterface.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/enviarWsp.js")?>"></script>

    <script>
    		$(window).on('load', function() { // makes sure the whole site is loaded 
			
			$('#status').fadeOut(); // will first fade out the loading animation 
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
			$('body').delay(350).css({'overflow-y':'visible'});

		});
    </script>

    <script>
            $(document).ready(function(){
            
            $("#quienes-somos-btn, ul.sub-menu").hover(function(){
                $(".sub-menu").show();

            });

             @if(isset($msg))

                alert("mail enviado correctamente");

            @endif


            $("ul.sub-menu").mouseleave(function(){
                setTimeout(function(){
                    $(".sub-menu").hide();  
                },100);
                

            });


             $("#file-result").hide();


        });
    </script>
    
<script type="text/javascript" src="<?php echo asset("OwlCarousel2-2.3.4/dist/owl.carousel.min.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/slider.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/routerAjax.js")?>"></script>


<script>


      var soloLetrasYEspacios= /^[a-zA-Z\s]*$/; 
      var soloNumeros=/^[0-9]*$/;
       var nombre_esta_validado=false;

       var dni_esta_validado=false;

    var apellido_esta_validado=false;

    var celular_esta_validado=false;

    var email_esta_validado=false;
  var cod_area_esta_validado = false;
      var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


// FIXTURE
$('#form-home-btn').not("#cerrarMenu").click(function (e) {

  var url = $(this).attr('goTo');
    
  var nombre = $("#form-home #nombre").val();
  var apellido = $("#form-home #apellido").val();
  var codArea = $("#form-home #cod_area").val();
  var dni = $("#form-home #dni").val();
  var telefono = $("#form-home #telefono").val();
  var mail = $("#form-home #mail").val();




             

                if(nombre_esta_validado==false){



                    $("#nombre").removeClass('border-color-green');

                    $("#nombre").addClass('border-color-red');


                    $("#nombre-error").fadeIn();

                }



                if(apellido_esta_validado==false){



                    $("#apellido").removeClass('border-color-green');

                    $("#apellido").addClass('border-color-red');

                    $("#apellido-error").fadeIn();

                }



                if(dni_esta_validado==false){



                    $("#dni").removeClass('border-color-green');

                    $("#dni").addClass('border-color-red');

                    $("#dni-error").fadeIn();

                }

                if(cod_area_esta_validado==false){



                    $("#cod_area").removeClass('border-color-green');

                    $("#cod_area").addClass('border-color-red');

                    $("#cod-area-error").fadeIn();



                }




                if(celular_esta_validado==false){



                    $("#telefono").removeClass('border-color-green');

                    $("#telefono").addClass('border-color-red');

                    $("#fix-celular").removeClass('border-color-green');

                    $("#fix-celular").addClass('border-color-red');

                    $("#telefono-error").fadeIn();


                }



                if(email_esta_validado==false){



                    $("#mail").removeClass('border-color-green');

                    $("#mail").addClass('border-color-red');

                    $("#mail-error").fadeIn();

                }





              
 

      if(nombre_esta_validado==true&&apellido_esta_validado==true&&dni_esta_validado==true&&cod_area_esta_validado==true&&celular_esta_validado==true&&email_esta_validado==true){





   $("#form-home").submit();



}
});



$("#form-home #nombre").keyup(function(){



        var nombre=$("#form-home  #nombre").val();



        if(nombre.length<4||nombre.search(soloLetrasYEspacios)){



            $("#form-home #nombre").removeClass('border-color-green');

            $("#form-home #nombre").addClass('border-color-red');

            $("#form-home #nombre-error").fadeIn();

            nombre_esta_validado=false;





        }else{



            $("#form-home #nombre").removeClass('border-color-red');


            $("#form-home #nombre").addClass('border-color-green');

            $("#form-home #nombre-error").fadeOut();

            nombre_esta_validado=true;



        }

    });



    $("#form-home #apellido").keyup(function(){



        var apellido=$("#form-home #apellido").val();



        if(apellido.length<3||apellido.search(soloLetrasYEspacios)){





            $("#form-home #apellido").removeClass('border-color-green');

            $("#form-home #apellido").addClass('border-color-red');
            
            apellido_esta_validado=false;

            $("#form-home #apellido-error").fadeIn();



        }else{


            $("#form-home #apellido").removeClass('border-color-red');

            $("#form-home #apellido").addClass('border-color-green');

            apellido_esta_validado=true;

            $("#form-home #apellido-error").fadeOut();



        }



    });

    $("#form-home #cod_area").change(function(){

        var celular = $("#telefono").val();
        var codAreaLenght = $("#cod_area").val();
        var position = celular.indexOf("15");

        if(codAreaLenght == "null"){
            $("#form-home #cod_area").removeClass('border-color-green');
            $("#form-home #cod_area").addClass("border-color-red");

            cod_area_esta_validado = false;


            $("#form-home #cod-area-error").fadeIn();



        }else{
            
            
            $("#form-home #cod_area").removeClass('border-color-red');
            $("#form-home #cod_area").addClass("border-color-green");

            cod_area_esta_validado = true;


            $("#cod-area-error").fadeOut();   

        }


        if(position==0){



                var newStr="";



                newStr = celular.replace("15","");



                $("#telefono").val(newStr);

        }

       

        var maxChars = 10-codAreaLenght.length;

        if ($("#form-home #telefono").val().length > maxChars) {

            $("#form-home #telefono").val($("#telefono").val().substr(0, maxChars));

            

            var celular=$("#form-home #telefono").val();

        }



         if(celular.length!=maxChars||celular.search(soloNumeros)){


            $("#form-home #telefono").removeClass('border-color-green');

            $("#form-home #telefono").addClass('border-color-red');

             $("#fix-celular").removeClass('border-color-green');

            $("#fix-celular").addClass('border-color-red');


            $("#telefono-error").fadeIn();


           




            celular_esta_validado=false;



        }else{



               
            $("#form-home #telefono").removeClass('border-color-red');

            $("#form-home #fix-celular").removeClass('border-color-red');

            $("#form-home #telefono").addClass('border-color-green');

            $("#form-home #fix-celular").addClass('border-color-green');

            celular_esta_validado=true;

            $("#telefono-error").fadeOut();

        }





    });





                

                

    $("#form-home #telefono").keyup(function(){

        var celular = $("#form-home #telefono").val();

        var codAreaLenght = $("#form-home #cod_area").val();




        var position = celular.indexOf("15");



        if(position==0){



                var newStr="";



                newStr = celular.replace("15","");



                $("#form-home #telefono").val(newStr);

        }

       

        var maxChars = 10-codAreaLenght.length;

        if ($(this).val().length > maxChars) {

            $(this).val($(this).val().substr(0, maxChars));

            

            var celular=$(this).val();

        }



         if(celular.length!=maxChars||celular.search(soloNumeros)){





             $("#form-home #telefono").removeClass('border-color-green');

            $("#form-home #telefono").addClass('border-color-red');

            $("#form-home #fix-celular").removeClass('border-color-green');

            $("#form-home #fix-celular").addClass('border-color-red');
            



            $("#telefono-error").fadeIn();





            celular_esta_validado=false;



        }else{



            $("#form-home #telefono").removeClass('border-color-red');


            $("#form-home #telefono").addClass('border-color-green');

            $("#form-home #fix-celular").removeClass('border-color-red');


            $("#form-home #fix-celular").addClass('border-color-green');



            $("#form-home #telefono-error").fadeOut();


            celular_esta_validado=true;



        }



    });

     $("#mail").keyup(function(){

    

        var email=$("#mail").val();

    

      if(email.length<3||email.search(emailValido)){


        $("#form-home #mail").removeClass('border-color-green');

        $("#form-home #mail").addClass('border-color-red');


        $("#form-home #mail-error").fadeIn();
       

        email_esta_validado=false;                    

        }else{



            $("#mail").removeClass('border-color-red');


         $("#mail").addClass('border-color-green');

            $("#mail-error").fadeOut();

            email_esta_validado=true;

        }

    });

      $("#dni").keyup(function(){

    

        var dni=$("#dni").val();



        var maxChars = 8;

        if ($(this).val().length > maxChars) {

            $(this).val($(this).val().substr(0, maxChars));

            

            var dni=$(this).val();

        }



      if(dni.length<7||dni.length>8||dni.search(soloNumeros)){



        



            $("#form-home #dni").removeClass('border-color-green');

            $("#form-home #dni").addClass('border-color-red');

 

            dni_esta_validado=false;

            $("#form-home #dni-error").fadeIn();

        }else{




            $("#form-home #dni").removeClass('border-color-red');


            $("#form-home #dni").addClass('border-color-green');

            dni_esta_validado=true;


            $("#form-home #dni-error").fadeOut();



        }

    });











</script>
    <script>

        function buscarCiudadSegunProvincia(){

            var provinciaId = $("#provincia2").val();
            

                $.ajax({
                    headers:{
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{provinciaId:provinciaId},
                url:'buscarCiudadSegunProvincia',
                type:'post',
                dataType:"json",
                success:function(data){
                    $("#localidad2").empty();
                    $("#localidad2").append('<option value="null">Seleccione una ciudad</option>');
                        for(var i in data) {    
                                
                                $("#localidad2").append("<option value="+data[i].id+"> "+
                                    data[i].ciudad_nombre+"</option>");             
                            }

            





                }
                });

        }

        $(document).ready(function(){
            $.ajax({
               type: "GET",
               url: 'home',
               dataType: "html",
               scriptCharset: "ISO-8859-1",
               success: function(msg){

                    $('#content').html(msg);

                   
                }
             });

            $("#quienes-somos-btn, ul.sub-menu").hover(function(){
                $(".sub-menu").show();

            });


            $("ul.sub-menu").mouseleave(function(){
                setTimeout(function(){
                    $(".sub-menu").hide();  
                },100);
                

            });


             $("#file-result").hide();


        });

    
        
    </script>
    <script>
        function enviarTrabajaConNosotros(){

            var nombre  = $("#trabajaConNosotros #nombre").val();
            var apellido  = $("#trabajaConNosotros #apellido").val();
            var dni  = $("#trabajaConNosotros #dni").val();
            var telefono  = $("#trabajaConNosotros #telefono").val();
            var email  = $("#trabajaConNosotros #mail").val();
            var comentarios  = $("#trabajaConNosotros #comentarios").val();

            var nombreEstaValidado=false;
            var apellidoEstaValidado=false;
            var documentoEstaValidado = false;
            var telefonoEstaValidado = false;
            var emailEstaValidado = false;

        

            var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var soloNumeros=/^[0-9]*$/;

            if(nombre.length==0){
                $("#trabajaConNosotros #nombre-error").fadeIn();
                nombreEstaValidado=false;
            }else{
                $("#trabajaConNosotros #nombre-error").fadeOut();
                nombreEstaValidado=true;
            }

            if(apellido.length==0){
                $("#trabajaConNosotros #apellido-error").fadeIn();
                apellidoEstaValidado=false;
            }else{
                $("#trabajaConNosotros #apellido-error").fadeOut();
                apellidoEstaValidado=true;
            }

            if(dni.length!=8){
                $("#trabajaConNosotros #dni-error").fadeIn();
                documentoEstaValidado=false;
            }else{
                $("#trabajaConNosotros #dni-error").fadeOut();
                documentoEstaValidado=true;
            }

            if(telefono.length==0 || telefono.search(soloNumeros)){
                $("#trabajaConNosotros #telefono-error").fadeIn();
                telefonoEstaValidado=false;
            }else{
                $("#trabajaConNosotros #telefono-error").fadeOut();
                telefonoEstaValidado=true;
            }

            if(email.length==0||email.search(emailValido)){
                $("#trabajaConNosotros #mail-error").fadeIn();
                emailEstaValidado=false;
            }else{
                $("#trabajaConNosotros #mail-error").fadeOut();
                emailEstaValidado=true;
            }





            if(nombreEstaValidado==true&&apellidoEstaValidado==true&&documentoEstaValidado==true&&telefonoEstaValidado==true&&emailEstaValidado==true){

                    
                $("#content").append('<div id="preloader-mailing" ><div class="spinner-sm spinner-sm-1" id="status"> </div></div>');
                    
                    $("#trabajaConNosotros form").submit();
            }   

            
            



        }


         $('input[type="file"]').change(function(){
            
            

            var file_size = $('input[type="file"]')[0].files[0].size;

            var name = $('input[type="file"]').val();

            name = name.split('.').pop();

            if(name == "pdf" || name == "docx"){

            if(file_size>2097152) {

                alert("El archivo NO puede ser superior a 2MB");

            }else{

                $("#file-cv").html($(this).val());

                $("#file-result").fadeIn();
            }

        }else{
            alert("El archivo debe ser .pdf o .docx")
        }
        });


         function enviarConvertiteEnComercializador(){

            var nombre  = $("#comercializador #nombre").val();
            var apellido  = $("#comercializador #apellido").val();
            var dni  = $("#comercializador #dni").val();
            var comentarios  = $("#comercializador #comentarios").val();
            var provincia  = $("#comercializador #provincia2").val();
            var localidad = $("#comercializador #localidad2").val();
            var venta = $("input[name='ventaAlpúblico']:checked").val();


            var nombreEstaValidado=false;
            var apellidoEstaValidado=false;
            var documentoEstaValidado = false;
            var provinciaEstaValidado = false;
            var localidadEstaValidado = false;

            if(nombre.length==0){
                $("#comercializador #nombre-error").fadeIn();
                nombreEstaValidado=false;
            }else{
                $("#comercializador #nombre-error").fadeOut();
                nombreEstaValidado=true;
            }

            if(apellido.length==0){
                $("#comercializador #apellido-error").fadeIn();
                apellidoEstaValidado=false;
            }else{
                $("#comercializador #apellido-error").fadeOut();
                apellidoEstaValidado=true;
            }

            if(dni.length!=8){
                $("#comercializador #dni-error").fadeIn();
                documentoEstaValidado=false;
            }else{
                $("#comercializador #dni-error").fadeOut();
                documentoEstaValidado=true;
            }

            if(provincia=="null"){
                $("#comercializador #provincia-error").fadeIn();
                provinciaEstaValidado=false;
            }else{
                $("#comercializador #provincia-error").fadeOut();
                provinciaEstaValidado=true;
            }

            if(localidad=="null"){
                $("#comercializador #localidad-error").fadeIn();
                localidadEstaValidado=false;
            }else{
                $("#comercializador #localidad-error").fadeOut();
                localidadEstaValidado=true;
            }



            if(nombreEstaValidado==true&&apellidoEstaValidado==true&&documentoEstaValidado==true&&provinciaEstaValidado==true&&localidadEstaValidado==true){
                    $("#content").append('<div id="preloader-mailing" ><div class="spinner-sm spinner-sm-1" id="status"> </div></div>');
                    $.ajax({
                        headers:{
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                       
                       data: {nombre:nombre,apellido:apellido,dni:dni,comentarios:comentarios,provincia:provincia,localidad:localidad,venta:venta},
                       url:'enviarConvertiteEnComercializador',
                       type:'post',
                        dataType:"json",
                       success: function(msg){

                            $('#preloader-mailing  #status').fadeOut(); // will first fade out the loading animation 
                            $('#preloader-mailing ').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 

                            $('body').delay(350).css({'overflow-y':'visible'});

                            alert(msg);


                           setTimeout(function(){
                            $("#preloader-mailing").remove(); 
                          },500);
                            



                          

                        }
                     });
            }

            
            



        }


    
    </script>
@yield('scripts')
</body>
</html>