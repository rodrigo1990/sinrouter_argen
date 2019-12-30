	 function zoomOnLocation(latitud,longitud){
	      	var center = {lat: latitud, lng: longitud};
			var infowindow = new google.maps.InfoWindow();
			console.log(map);
			//infowindow.close();


	      	if($(window).width()<1024){
				$('html,body').animate({ scrollTop:$('#map').offset().top-50  }, 'slow');
			}

			cerrarInfowInfowindows();

	      	for (var i=0; i<markers.length; i++) {
	    		if (markers[i].getPosition().lat()==latitud) {

	    			var marker = markers[i];
	    			infowindow.setContent(locations[i][0]);
			        infowindow.open(map, marker);

			        infoWindows.push(infowindow);

		      	map.setCenter(center);
		      	map.setZoom(15);
		   		 }
		   	}
	
	      }