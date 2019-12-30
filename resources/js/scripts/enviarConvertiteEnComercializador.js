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
                       url:'/enviarConvertiteEnComercializador',
                       type:'post',
                        dataType:"json",
                       success: function(msg){

                            $('#preloader-mailing  #status').fadeOut(); // will first fade out the loading animation 
                            $('#preloader-mailing ').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 

                            $('body').delay(350).css({'overflow-y':'visible'});

                            alertar(msg);


                           setTimeout(function(){
                            $("#preloader-mailing").remove(); 
                          },500);
                            



                          

                        }
                     });
            }

            
            



        }