function myFunction() {



                



               if(!$('input[name=terminos]:checked').val() ){

                    $("#terminos-error").fadeIn();

                    terminos_esta_validado=false;

                }else{

                    $("#terminos-error").fadeOut();

                    terminos_esta_validado=true;

                }





                if(nombre_esta_validado==false){

                    $("#nombre-check-icon").fadeOut();

                    $("#nombre-error-icon").fadeIn();

                    $("#nombre").removeClass('border-color-green');

                    $("#nombre").addClass('border-color-red');


                    $("#nombre-error").fadeIn();

                }



                if(apellido_esta_validado==false){

                    $("#apellido-check-icon").fadeOut();

                    $("#apellido-error-icon").fadeIn();

                    $("#apellido").removeClass('border-color-green');

                    $("#apellido").addClass('border-color-red');

                    $("#apellido-error").fadeIn();

                }



                if(dni_esta_validado==false){

                    $("#dni-check-icon").fadeOut();

                    $("#dni-error-icon").fadeIn();

                    $("#dni").removeClass('border-color-green');

                    $("#dni").addClass('border-color-red');

                    $("#dni-error").fadeIn();

                }

                if(cod_area_esta_validado==false){

                    $("#cod-area-check-icon").fadeOut();

                    $("#cod-area-error-icon").fadeIn();

                    $("#codigo_area").removeClass('border-color-green');

                    $("#codigo_area").addClass('border-color-red');

                    $("#cod-area-error").fadeIn();

                    removeSelectArrow('#codigo_area');


                }




                if(celular_esta_validado==false){

                    $("#celular-check-icon").fadeOut();

                    $("#celular-error-icon").fadeIn();

                    $("#celular").removeClass('border-color-green');

                    $("#celular").addClass('border-color-red');

                    $("#telefono-error").fadeIn();


                }



                if(email_esta_validado==false){

                    $("#email-check-icon").fadeOut();

                    $("#email-error-icon").fadeIn();

                    $("#email").removeClass('border-color-green');

                    $("#email").addClass('border-color-red');

                    $("#email-error").fadeIn();

                }



                if(provincia_esta_validado==false){

                     $("#provincia-check-icon").fadeOut();

                    $("#provincia-error-icon").fadeIn();


                     $("#provincia-error").css("display","block");


                     $("#provincia").removeClass('border-color-green');

                    $("#provincia").addClass('border-color-red');


                    $("#provincia-error").fadeIn();

                    removeSelectArrow("#provincia");
                }



                if(localidad_esta_validado==false){

                    $("#localidad-check-icon").fadeOut();

                    $("#localidad-error-icon").fadeIn();

                    $("#localidad-error").css("display","block");

                    $("#localidad").removeClass('border-color-green');

                    $("#localidad").addClass('border-color-red');

                    $("#localidad-error").fadeIn();

                    removeSelectArrow("#localidad");


                }


                if(banco_esta_validado==false){

                    $("#banco-check-icon").fadeOut();

                    $("#banco-error-icon").fadeIn();

                    $("#banco-error").css("display","block");

                    $("#banco").removeClass('border-color-green');

                    $("#banco").addClass('border-color-red');

                    $("#banco-error").fadeIn();

                    removeSelectArrow("#banco");

                }

                if(empleador_esta_validado==false){

                    $("#empleador-check-icon").fadeOut();

                    $("#empleador-error-icon").fadeIn();

                    $("#empleador").removeClass('border-color-green');

                    $("#empleador").addClass('border-color-red');

                    $("#empleador-error").fadeIn();

                    removeSelectArrow("#empleador");

                }                



                if(sueldo_esta_validado==false){

                    $("#sueldo-check-icon").fadeOut();

                    $("#sueldo-error-icon").fadeIn();

                    $("#sueldo").removeClass('border-color-green');

                    $("#sueldo").addClass('border-color-red');

                    $("#sueldo-error").fadeIn();


                }
                
                if(captcha_esta_validado==false){

                    var $captcha = $( '#recaptcha' ),
                    response = grecaptcha.getResponse();

                    if(response.length === 0) {
                        $( '.msg-error').text( "Debe validar el captcha" );
                    }
                    else 
                    {
                        $( '.msg-error').text( "" );
                        captcha_esta_validado=true;
                    }

                }



                









                if(nombre_esta_validado==true && apellido_esta_validado==true &&

                    dni_esta_validado==true && celular_esta_validado==true && email_esta_validado==true && provincia_esta_validado==true && localidad_esta_validado==true && terminos_esta_validado==true && sueldo_esta_validado==true/* && captcha_esta_validado==true*/){

                        

                        

                        $("body").css("overflow-y","hidden");





                    	$("#preloader").show();

                        $("#status").show(); 


                      /*  grecaptcha.execute('6Lf7iKQUAAAAAEzdiNtjuPOEY8wu6yJvekMC5YKp', {action: 'create_comment'}).then(function(token) {
                        
                            // add token to form
                            alert(token);
                            
                            $.ajax({
                                headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data:{token},
                                url:'validarCaptchaToken',
                                type:'post',
                                dataType:"json",
                                success:function(response){
                                    alert(response);
                                }
                            });
                            
                        });*/




                    	document.getElementById("myForm").submit();




                }else{

                         // makes sure the whole site is loaded 

                         $('#status').fadeOut(); // will first fade out the loading animation 

                        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 

                         $('body').delay(350).css({'overflow':'visible'});

                }



                



        



        

    }