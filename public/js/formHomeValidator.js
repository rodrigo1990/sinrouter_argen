
      var soloLetrasYEspacios= /^[a-zA-Z\s]*$/; 
      var soloNumeros=/^[0-9]*$/;
       var nombre_esta_validado=false;

       var dni_esta_validado=false;

    var apellido_esta_validado=false;

    var celular_esta_validado=false;

    var email_esta_validado=false;
  var cod_area_esta_validado = false;
      var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


$('#form-home-btn').not("#cerrarMenu").click(function (e) {

  var url = $(this).attr('goTo');
    
  var nombre = $("#form-home #nombre").val();
  var apellido = $("#form-home #apellido").val();
  var codArea = $("#form-home #cod_area").val();
  var dni = $("#form-home #dni").val();
  var telefono = $("#form-home #telefono").val();
  var mail = $("#form-home #mail").val();




             

                if(nombre_esta_validado==false){



                    $("#form-home #nombre").removeClass('border-color-green');

                    $("#form-home #nombre").addClass('border-color-red');


                    $(" #form-home #nombre-error").fadeIn();

                }



                if(apellido_esta_validado==false){



                    $("#form-home #apellido").removeClass('border-color-green');

                    $("#form-home #apellido").addClass('border-color-red');

                    $("#form-home #apellido-error").fadeIn();

                }



                if(dni_esta_validado==false){



                    $("#form-home #dni").removeClass('border-color-green');

                    $("#form-home #dni").addClass('border-color-red');

                    $("#form-home #dni-error").fadeIn();

                }

                if(cod_area_esta_validado==false){



                    $("#form-home #cod_area").removeClass('border-color-green');

                    $("#form-home #cod_area").addClass('border-color-red');

                    $("#form-home #cod-area-error").fadeIn();



                }




                if(celular_esta_validado==false){



                    $("#form-home #telefono").removeClass('border-color-green');

                    $("#form-home #telefono").addClass('border-color-red');

                    $("#form-home #fix-celular").removeClass('border-color-green');

                    $("#form-home #fix-celular").addClass('border-color-red');

                    $("#form-home #telefono-error").fadeIn();


                }



                if(email_esta_validado==false){



                    $("#form-home #mail").removeClass('border-color-green');

                    $("#form-home #mail").addClass('border-color-red');

                    $("#form-home #mail-error").fadeIn();

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


            $("#form-home #cod-area-error").fadeOut();   

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

             $("#form-home #form-home #fix-celular").removeClass('border-color-green');

            $("#form-home #form-home #fix-celular").addClass('border-color-red');


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
            



            $("#form-home #telefono-error").fadeIn();





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

     $("#form-home #mail").keyup(function(){

    

        var email=$("#mail").val();

    

      if(email.length<3||email.search(emailValido)){


        $("#form-home #mail").removeClass('border-color-green');

        $("#form-home #mail").addClass('border-color-red');


        $("#form-home #mail-error").fadeIn();
       

        email_esta_validado=false;                    

        }else{



            $("#form-home #mail").removeClass('border-color-red');


         $("#form-home #mail").addClass('border-color-green');

            $("#form-home #mail-error").fadeOut();

            email_esta_validado=true;

        }

    });

      $("#form-home #dni").keyup(function(){

    

        var dni=$("#form-home #dni").val();



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
