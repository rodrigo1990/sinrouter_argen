function alertar(msg){

	$("#alert-cont").html('<div class="alert-bkground"> <div style="" class="alert-window"> <div class="header"> <img src="'+window.location.protocol+'//'+window.location.host+'/storage/img/logo-xs-white.svg"> </div> <div class="body"> <h2 class="text-center">'+msg+'</h2> <a class="center-block border-btn red text-center" onClick="closeAlertar()">ACEPTAR</a> </div> </div> </div>')

	$(".alert-bkground").addClass('poner');

}


function closeAlertar(){

	$(".alert-window").addClass('fadeOut');



	$(".alert-bkground").removeClass('poner');

	$(".alert-bkground").addClass('sacar');


	setTimeout(function(){
		$(".alert-bkground ").remove();
	},500)




	

}