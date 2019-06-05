// FIXTURE
/*$('#nav a.spa-btn, #logo-btn, #xsMenu .spa-btn, footer ul li .spa-btn, .spa-btn').not("#cerrarMenu").click(function (e) {

  var url = $(this).attr('goTo');
  $("#content").html('<div id="preloader" ><div class="spinner-sm spinner-sm-1" id="status"> </div></div>');
  
    e.preventDefault();

     $.ajax({
       type: "GET",
       url: url,
       dataType: "html",
       scriptCharset: "ISO-8859-1",
       success: function(msg){



            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 

            $('body').delay(350).css({'overflow-y':'visible'});

              $("#content").html(msg);



              var cosa = $('#prestamo').attr('id');


              if(cosa == "prestamo"){
                $("#content").css("margin-top",0);
                $("header").fadeOut();
              }else{
                $("#content").css("margin-top","");
                $("header").fadeIn();
              }

               setTimeout(function(){
                window.scrollTo(0, 0); 
              },100);



              
          


            }
          

     });
});
*/



