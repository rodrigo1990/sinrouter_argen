function validarSolicitarPrestamoAlCargar(){

	

	var cod_area = $_GET('cod_area');

	console.log(cod_area);

	if(cod_area!=null){
	$("#codigo_area").val(cod_area);
	$("#cod-area-error-icon").fadeOut();
            $("#cod-area-check-icon").fadeIn();
            $("#codigo_area").removeClass('border-color-red');
            $("#codigo_area").addClass("border-color-green");
	cod_area_esta_validado = true;
	}

	var nombre=$("#nombre").val();

	if(nombre.length!=0){

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

        }

        var apellido=$("#apellido").val();

		if(apellido.length!=0){

			if(apellido.length<4||apellido.search(soloLetrasYEspacios)){

		            $("#apellido-check-icon").fadeOut();

		            $("#apellido-error-icon").fadeIn();

		            $("#apellido").removeClass('border-color-green');

		            $("#apellido").addClass('border-color-red');

		            $("#apellido-error").fadeIn();

		            apellido_esta_validado=false;





		        }else{

		            $("#apellido-error-icon").fadeOut();

		            $("#apellido-check-icon").css("display","block");

		            $("#apellido").removeClass('border-color-red');


		            $("#apellido").addClass('border-color-green');

		            $("#apellido-error").fadeOut();

		            apellido_esta_validado=true;



		        }

	        }

	         var dni=$("#dni").val();
	         if(dni.length!=0){
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




        }


        var celular = $("#celular").val();
        if(celular.length!=0){

        	var codAreaLenght = $("#codigo_area").val();


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

        }

         var email=$("#email").val();

    
         if(email.length!=0){
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

        }

}