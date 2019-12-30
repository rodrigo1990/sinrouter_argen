 function enviarWsp(){

     

  var nombre = $(".interfaceForm #nombre-wsp").val();

  var telefono = $(".interfaceForm #telefono-wsp").val();

  var mail  = $(".interfaceForm #email-wsp").val();

  var message = "¡Hola! Queria hacer una consulta acerca de los servicios vistos en www.argenpesos.com.ar ";



  var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  var soloNumeros=/^[0-9]*$/;

  var nombreEstaValidado=false;

  var telefonoEstaValidado=false;

  var emailEstaValidado=false;









    if(nombre.length==0){



      $(".interfaceForm #nombre-error").fadeIn();

      nombreEstaValidado=false; 



    }else{

    $(".interfaceForm #nombre-error").fadeOut(); 

    nombreEstaValidado=true;    

    } 



   





    if(telefono.length>13 || telefono.length==0 || telefono.search(soloNumeros)){



      $(".interfaceForm #telefono-error").fadeIn();

      telefonoEstaValidado=false;



    }else{



      $(".interfaceForm #telefono-error").fadeOut();

      telefonoEstaValidado=true;



    }









    if(mail.length==0 || mail.search(emailValido)){



      $(".interfaceForm #email-error-wsp").fadeIn();

      emailEstaValidado=false;



    }else{



      $(".interfaceForm #email-error-wsp").fadeOut();

      emailEstaValidado=true;



    }



   



  



    if(nombreEstaValidado==true&&telefonoEstaValidado==true&&emailEstaValidado==true){      

      $( ".interfaceFormBody" ).prepend( '<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>' );



      $.ajax({

          data:{nombre:nombre,telefono:telefono,mail:mail},

          

          url:'ajax/enviarEmailWsp.php',

    

          type:'POST',

    

          success:function(response){

    

          $(".interfaceForm #preloader").fadeOut();



          $(".interfaceForm #nombre-wsp").val("");

          $(".interfaceForm #telefono-wsp").val("");


          if (navigator.userAgent.indexOf("Firefox") > 0)
          {
            window.location.replace("https://web.whatsapp.com/send?phone=5491132414878&text="+message+"");
          }
          else
          {
            window.location.replace("https://api.whatsapp.com/send?phone=5491132414878&text="+message+"");
          }





          console.log(response);







              

          }

      });





    }



}



