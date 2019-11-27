  function removeSelectArrow(id){
    $(id).addClass("remove-arrow");
  }

  function allowSelectArrow(id){
    $("id").removeClass("remove-arrow");
  }


  var dni_esta_validado=false;

    var soloNumeros=/^[0-9]*$/;

    var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var soloLetrasYEspacios= /^[a-zA-Z\s]*$/; 

    var soloNumeros=/^[0-9]*$/;

    var soloLetrasEspaciosYNumeros=/^[a-zA-Z0-9\s]+$/;



    var nombre_esta_validado=false;

    var apellido_esta_validado=false;

    var celular_esta_validado=false;

    var email_esta_validado=false;

    var provincia_esta_validado=false;

    var localidad_esta_validado=false;

    var terminos_esta_validado=false;

  /*  var captcha_esta_validado=false;*/

    var sueldo_esta_validado=false;

    var cod_area_esta_validado = false;

    var banco_esta_validado = false;

    var empleador_esta_validado = false;



    

    var apellido=$("#apellido").val();

    var celular=$("#celular").val();

    var email=$("#email").val();

    var localidad=$("#localidad").val();

    var provincia=$("#provincia").val();

    var terminos=$("#terminos").val();

    var sueldo=$("#sueldo").val();





  

    



     $("#nombre").keyup(function(){



        var nombre=$("#nombre").val();



        if(nombre.length<4||nombre.search(soloLetrasYEspacios)){

            $("#nombre-check-icon").fadeOut();

            $("#nombre-error-icon").fadeIn();

            $("#nombre").removeClass('border-color-green');

            $("#nombre").addClass('border-color-red');

            $("#nombre-error").fadeIn();

            nombre_esta_validado=false;





        }else{

            $("#nombre-error-icon").fadeOut();

            $("#nombre-check-icon").css("display","block");

            $("#nombre").removeClass('border-color-red');


            $("#nombre").addClass('border-color-green');

            $("#nombre-error").fadeOut();

            nombre_esta_validado=true;



        }

    });



    $("#apellido").keyup(function(){



        var apellido=$("#apellido").val();



        if(apellido.length<3||apellido.search(soloLetrasYEspacios)){



            $("#apellido-check-icon").fadeOut();

            $("#apellido-error-icon").fadeIn();

            $("#apellido").removeClass('border-color-green');

            $("#apellido").addClass('border-color-red');
            
            apellido_esta_validado=false;

            $("#apellido-error").fadeIn();



        }else{



            $("#apellido-error-icon").fadeOut();

            $("#apellido-check-icon").css("display","block");

            $("#apellido").removeClass('border-color-red');

            $("#apellido").addClass('border-color-green');

            apellido_esta_validado=true;

            $("#apellido-error").fadeOut();



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



             $("#dni-check-icon").fadeOut();

            $("#dni-error-icon").fadeIn();



            $("#dni").removeClass('border-color-green');

            $("#dni").addClass('border-color-red');

 

            dni_esta_validado=false;

            $("#dni-error").fadeIn();

        }else{



            $("#dni-error-icon").fadeOut();

            $("#dni-check-icon").css("display","block");

            $("#dni").removeClass('border-color-red');


            $("#dni").addClass('border-color-green');

            dni_esta_validado=true;


            $("#dni-error").fadeOut();



        }

    });



    

    $("#codigo_area").change(function(){

        var celular = $("#celular").val();
        var codAreaLenght = $("#codigo_area").val();
        var position = celular.indexOf("15");

        if(codAreaLenght == "null"){
            $("#cod-area-check-icon").fadeOut();
            $("#cod-area-error-icon").fadeIn();
            $("#codigo_area").removeClass('border-color-green');
            $("#codigo_area").addClass("border-color-red");

            cod_area_esta_validado = false;


            $("#cod-area-error").fadeIn();

            removeSelectArrow('#codigo_area');


        }else{
            
            
            $("#cod-area-error-icon").fadeOut();
            $("#cod-area-check-icon").fadeIn();
            $("#codigo_area").removeClass('border-color-red');
            $("#codigo_area").addClass("border-color-green");

            cod_area_esta_validado = true;


            $("#cod-area-error").fadeOut();   

            removeSelectArrow('#codigo_area');         
        }


        if(position==0){



                var newStr="";



                newStr = celular.replace("15","");



                $("#celular").val(newStr);

        }

       

        var maxChars = 10-codAreaLenght.length;

        if ($("#celular").val().length > maxChars) {

            $("#celular").val($("#celular").val().substr(0, maxChars));

            

            var celular=$("#celular").val();

        }



         if(celular.length!=maxChars||celular.search(soloNumeros)){



            $("#celular-check-icon").fadeOut();

            $("#celular-error-icon").fadeIn();

            $("#celular").removeClass('border-color-green');

            $("#celular").addClass('border-color-red');

             $("#fix-celular").removeClass('border-color-green');

            $("#fix-celular").addClass('border-color-red');


            $("#telefono-error").fadeIn();


           




            celular_esta_validado=false;



        }else{



            $("#celular-error-icon").fadeOut();

            $("#celular-check-icon").css("display","block");

               
            $("#celular").removeClass('border-color-red');

            $("#fix-celular").removeClass('border-color-red');

            $("#celular").addClass('border-color-green');

            $("#fix-celular").addClass('border-color-green');

            celular_esta_validado=true;

            $("#telefono-error").fadeOut();

        }





    });





                

                

    $("#celular").keyup(function(){

        var celular = $("#celular").val();

        var codAreaLenght = $("#codigo_area").val();



        var position = celular.indexOf("15");



        if(position==0){



                var newStr="";



                newStr = celular.replace("15","");



                $("#celular").val(newStr);

        }

       

        var maxChars = 10-codAreaLenght.length;

        if ($(this).val().length > maxChars) {

            $(this).val($(this).val().substr(0, maxChars));

            

            var celular=$(this).val();

        }



         if(celular.length!=maxChars||celular.search(soloNumeros)){



            $("#celular-check-icon").fadeOut();

            $("#celular-error-icon").fadeIn();

             $("#celular").removeClass('border-color-green');

            $("#celular").addClass('border-color-red');

            $("#fix-celular").removeClass('border-color-green');

            $("#fix-celular").addClass('border-color-red');
            



            $("#telefono-error").fadeIn();





            celular_esta_validado=false;



        }else{



            $("#celular-error-icon").fadeOut();

            $("#celular-check-icon").css("display","block");

            $("#celular").removeClass('border-color-red');


            $("#celular").addClass('border-color-green');

            $("#fix-celular").removeClass('border-color-red');


            $("#fix-celular").addClass('border-color-green');



            $("#telefono-error").fadeOut();


            celular_esta_validado=true;



        }



    });







    $("#email").keyup(function(){

    

        var email=$("#email").val();

    

      if(email.length<3||email.search(emailValido)){

        $("#email-check-icon").fadeOut();

        $("#email-error-icon").fadeIn();

        $("#email").removeClass('border-color-green');

        $("#email").addClass('border-color-red');


        $("#email-error").fadeIn();
       

        email_esta_validado=false;                    

        }else{

            $("#email-error-icon").fadeOut();

            $("#email-check-icon").css("display","block");

            $("#email").removeClass('border-color-red');


         $("#email").addClass('border-color-green');

            $("#email-error").fadeOut();

            email_esta_validado=true;

        }

    });



    $("#sueldo").keyup(function(){

    

        var sueldo=$("#sueldo").val();

        

        if(sueldo.length==0||sueldo.search(soloNumeros)){

            $("#sueldo-check-icon").fadeOut();

            $("#sueldo-error-icon").fadeIn();

            $("#sueldo").removeClass('border-color-green');

        $("#sueldo").addClass('border-color-red');

         $("#sueldo-error").fadeIn();


            sueldo_esta_validado=false;                      

        }else{

            $("#sueldo-error-icon").fadeOut();

            $("#sueldo-check-icon").css("display","block");

            $("#sueldo").removeClass('border-color-red');


         $("#sueldo").addClass('border-color-green');

         $("#sueldo-error").fadeOut();

            sueldo_esta_validado=true;

        }

    });

                

                

   $("#provincia").change(function(){

        $(".localidad-col").html('<div class="spinner-sm spinner-sm-1" id="status"> </div>');
        $("#localidad-check-icon").fadeOut();
                                
        $("#localidad-error-icon").fadeIn();
        $("#localidad").removeClass('border-color-green');
        $("#localidad").addClass("border-color-red");

        $("#localidad-error").fadeIn();


        removeSelectArrow("#localidad");


        localidad_esta_validado=false;
            
        $("#localidad").prop("disabled", false);   
         var provincia = $("#provincia").val();



        if(provincia == "null"){
            $("#provincia-check-icon").fadeOut();
            $("#provincia-error-icon").fadeIn();
            $("#provincia").removeClass('border-color-green');
            $("#provincia").addClass("border-color-red");

            $("#provincia-error").fadeIn();

            removeSelectArrow("#provincia");

            provincia_esta_validado=false;


        }else{
            
            
            $("#provincia-error-icon").fadeOut();
            $("#provincia-check-icon").fadeIn();
            $("#provincia").removeClass('border-color-red');
            $("#provincia").addClass("border-color-green");

            $("#provincia-error").fadeOut();

            removeSelectArrow("#provincia");        

            provincia_esta_validado=true;    
        }



            var provinciaId = $("#provincia").val();
            

                $.ajax({
                    headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                data:{provinciaId:provinciaId},
                url:'buscarCiudadSegunProvincia',
                type:'post',
                dataType:"json",
                success:function(data){
                    $(".localidad-col").html('<select  name="localidad" id="localidad"  class="form-control"> <option value="null">Localidad</option> </select> <div class="error" id="localidad-error">*Ingrese una localidad valida</div> <div class="valid-feedback feedback-icon" id="localidad-check-icon"> <i class="fa fa-check"></i> </div> <div class="invalid-feedback feedback-icon" id="localidad-error-icon"> <i class="fa fa-times"></i> </div>');
                    $("#localidad").empty();
                    $("#localidad").append('<option value="null">Seleccione una ciudad</option>');
                        for(var i in data) {    
                                
                                 $("#localidad").append("<option value="+data[i].id+"> "+
                                    data[i].ciudad_nombre+"</option>");      
                                
                                          
                            }







                }
                });




    });  






                



 $(document).on('change',"#localidad", function(){
           
        var localidad=$("#localidad").val();



        if(localidad == "null"){
            $("#localidad-check-icon").fadeOut();
            $("#localidad-error-icon").fadeIn();
            $("#localidad").removeClass('border-color-green');
            $("#localidad").addClass("border-color-red");

            $("#localidad-error").fadeIn();


            removeSelectArrow("#localidad");


            localidad_esta_validado=false;


        }else{
            
            
            $("#localidad-error-icon").fadeOut();
            $("#localidad-check-icon").fadeIn();
            $("#localidad").removeClass('border-color-red');
            $("#localidad").addClass("border-color-green");

            $("#localidad-error").fadeOut();

            removeSelectArrow("#localidad");   

            localidad_esta_validado=true;         
        }



     }); 


     $("#banco").change(function(){       

        var banco=$("#banco").val();




       if(banco=="null"){

            $("#banco-error").fadeIn();

            $("#banco-check-icon").fadeOut();
            $("#banco-error-icon").fadeIn();
            $("#banco").removeClass('border-color-green');
            $("#banco").addClass("border-color-red");

            banco_esta_validado=false;

            removeSelectArrow("#banco");

        }else{

            $("#banco-error").fadeOut();;

            $("#banco-error-icon").fadeOut();
            $("#banco-check-icon").fadeIn();
            $("#banco").removeClass('border-color-red');
            $("#banco").addClass("border-color-green"); 

            banco_esta_validado=true;

            removeSelectArrow("#banco");

        }



     }); 


     $("#empleador").change(function(){       

        var empleador=$("#empleador").val();




       if(empleador=="null"){

            $("#empleador-error").fadeIn();

            $("#empleador-check-icon").fadeOut();
            $("#empleador-error-icon").fadeIn();
            $("#empleador").removeClass('border-color-green');
            $("#empleador").addClass("border-color-red");
            $("#empleador-error").fadeIn();

            empleador_esta_validado=false;

            removeSelectArrow("#empleador");

        }else{

            $("#empleador-error").fadeOut();

            $("#empleador-error-icon").fadeOut();
            $("#empleador-check-icon").fadeIn();
            $("#empleador").removeClass('border-color-red');
            $("#empleador").addClass("border-color-green");
            $("#empleador-error").fadeOut(); 

            empleador_esta_validado=true;

            removeSelectArrow("#empleador");

        }



     }); 


   


                





