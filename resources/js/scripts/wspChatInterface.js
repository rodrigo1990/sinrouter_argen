
	function abrirInterfaceForm(){

		$("#interfaceFormBtn").removeClass("rollIn");
		$("#interfaceFormBtn").addClass("fadeOutUp");


		$("#interfaceForm").show();
		$("#interfaceForm").removeClass("fadeOutUp");
		$("#interfaceForm").addClass("fadeInUp");

		
		//$("#interfaceForm").show();

	}

	function cerrarInterfaceForm(){

		$("#interfaceFormBtn").show();

		$("#interfaceFormBtn").removeClass("fadeOutUp");
		$("#interfaceFormBtn").addClass("rollIn");

		$("#interfaceForm").removeClass("fadeInUp");
		$("#interfaceForm").addClass("fadeOutUp");


		setTimeout( function() {
		$("#interfaceForm").hide();
	  	}, 500);


		//$("#interfaceForm").hide();
		

	}







		function abrirInterfaceFormXs(){

		$("#interfaceFormBtnXs").removeClass("rollIn");
		$("#interfaceFormBtnXs").addClass("fadeOutUp");


		$("#interfaceFormXs").show();
		$("#interfaceFormXs").removeClass("fadeOutUp");
		$("#interfaceFormXs").addClass("fadeInUp");

		
		//$("#interfaceForm").show();

	}

	function cerrarInterfaceFormXs(){

		$("#interfaceFormBtnXs").show();

		$("#interfaceFormBtnXs").removeClass("fadeOutUp");
		$("#interfaceFormBtnXs").addClass("rollIn");

		$("#interfaceFormXs").removeClass("fadeInUp");
		$("#interfaceFormXs").addClass("fadeOutUp");


		setTimeout( function() {
		$("#interfaceFormXs").hide();
	  	}, 500);


		//$("#interfaceForm").hide();
		

	}