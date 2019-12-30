function agregarLocaciones(locations){
			
	var marker,count;

	/*map.setZoom(5);
	map.setCenter(centerGlobal);*/


	for (count = 0; count < locations.length; count++) {
	    marker = new google.maps.Marker({
	      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
	      map: map,
	      icon: window.location.origin+'/storage/img/g-marker.png',
	      title: locations[count][0]
	    });

	var infowindow =  new google.maps.InfoWindow({});
	
	google.maps.event.addListener(marker, 'click', (function (marker, count) {

	      return function () {
	      	
	        infowindow.setContent(locations[count][0]);
	        cerrarInfowInfowindows();
	        infowindow.open(map, marker);

	        
	      }
	
    })(marker, count));

	infoWindows.push(infowindow);

	markers.push(marker);
	  	
	  }

	  console.log(markers);


}