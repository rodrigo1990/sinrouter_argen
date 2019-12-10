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
            var cvEstaValidado = false;

        

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

            if($("#trabajaConNosotros #file-cv").is(':empty')){
                alertar("Ingrese un cv");
            }else{
                cvEstaValidado=true;
            }





            if(nombreEstaValidado==true&&apellidoEstaValidado==true&&documentoEstaValidado==true&&telefonoEstaValidado==true&&emailEstaValidado==true&&cvEstaValidado==true){

                    
                $("#content").append('<div id="preloader-mailing" ><div class="spinner-sm spinner-sm-1" id="status"> </div></div>');
                    
                    $("#trabajaConNosotros form").submit();
            }   

            
            



        }


         $('input[type="file"], input[type="file2"]').change(function(){
            
             var name = $(this).val();
            

            var file_size = $(this)[0].files[0].size;

           

            name = name.split('.').pop();

            if(name == "pdf" || name == "docx"){

            if(file_size>2097152) {

                alertar("El archivo NO puede ser superior a 2MB");

            }else{

                $("#file-cv").html($(this).val());

                $("#file-result").fadeIn();
            }

        }else{
            alertar("El archivo debe ser .pdf o .docx");
        }
        });