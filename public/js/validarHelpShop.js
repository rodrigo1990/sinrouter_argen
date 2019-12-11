	 function validarHelpShop(){


        var celular = $("#helpShop #telefono").val();

        var position = celular.indexOf("15");



        if(position==0){



                var newStr="";



                newStr = celular.replace("15","11");



                $("#helpShop #telefono").val(newStr);

        }


        position = celular.indexOf("0");

       	
       	if(position==0){



                newStr="";



                newStr = celular.replace("0","");



                $("#helpShop #telefono").val(newStr);

        }



        position = celular.indexOf("01115");

       	
       	if(position==0){



                newStr="";



                newStr = celular.replace("01115","11");



                $("#helpShop #telefono").val(newStr);

        }




         if(celular.search(soloNumeros) || celular.length!=10){


         	


            $("#helpShop #telefono").removeClass('border-color-green');

            $("#helpShop #telefono").addClass('border-color-red');

            $("#helpShop #fix-celular").removeClass('border-color-green');

            $("#helpShop #fix-celular").addClass('border-color-red');
            



            $("#helpShop #telefono-error").fadeIn();





            celular_esta_validado=false;



        }else{



            $("#helpShop #telefono").removeClass('border-color-red');


            $("#helpShop #telefono").addClass('border-color-green');

            $("#helpShop #telefono-error").fadeOut();


            celular_esta_validado=true;



        }


        if(celular_esta_validado==true){

        	$("#preloader").show();

            $("#status").show(); 

        	 $.ajax({
                    headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                data:{celular:celular},
                url:'solicitarSoporteShop',
                type:'post',
                dataType:"json",
                success:function(data){

                   alertar("Hemos recibido tu solicitud. <br> ¡En breve nos comunicaremos!");
                   	$("#preloader").fadeOut();
                   



                
                }
                });
        }



    }