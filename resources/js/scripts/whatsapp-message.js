$('#whatsapp-btn').click(function(e){

    var message = "¡Hola! Queria hacer una consulta acerca de los servicios vistos en www.argenpesos.com.ar ";
    var number = 5491132414878 ;
    
    var url = "https://api.whatsapp.com/send?phone="+number+"&text="+message+"";

    window.open(url);
    
  });