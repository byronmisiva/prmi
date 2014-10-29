(function() {	
	var mapaProvincia = '', mapaCiudad = '', mapaServicios = [1,0,0];
	var baseUrl =accion;
	

	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	var dirService = new google.maps.DirectionsService();
	
	var isEND = false;
	var posEND = "";
	var posINI = "";
	
	var gasolinera=1;
	var tiendas=0;
	var lubricantes=0;
	
	var estado_tiendas=0;
	var estado_lubricantes=0;
	
	var sw1=0;
	var sw2=0;
	
	var setup = function() {
		$('.dropdown-toggle').dropdown();	
		$('#select_provincias li a').click(	function(event) {
			event.preventDefault();
			var provincia = $.trim($('#' + this.id).html());
			$.ajax({
				async : false,
				cache : false,
				type : "POST",
				url : baseUrl + 'welcome/get_ciudad_by_provincia',
				data : { 'provincia' : provincia },
				success : function(response) {
					$('#select_ciudades').html(response);
					$('#option_provincia').html("" + provincia);
					 isEND = false;
					 posEND = "";
					 posINI = "";					
							$('#option_ciudad').html("Ciudad....");
							bindEventCiudades();
							mapaProvincia = provincia;
							mapaCiudad = '';
							getMapa();							
							$('#gasolinerasP').addClass(" servicio1-active");
							$('#gasolinerasP').removeClass(" disabled");
							$("#gasolinerasP").removeAttr("disabled");
							estado_lubricantes=0;
							estado_tiendas=0;
						}
					});
				});
				
		
		$('.btn-servicios').click(function(event) {
			event.preventDefault();
			/*if (!$(this).hasClass('active')) {
				mapaServicios[$(this).find('span').html()] = 1;
			} 
			else {
				mapaServicios[$(this).find('span').html()] = 0;
			}*/
			if (mapaProvincia !== '', mapaCiudad !== '') {
				//getMapa();
			}
		});
		
		$('#tiendasP').click(function(event){	
			event.preventDefault();	
				/*if(tiendas==0)
					tiendas=1;
				else
					tiendas=0;				
				mapaServicios=[gasolinera,tiendas,lubricantes];*/
			    if(estado_tiendas==0){
			    	estado_tiendas=1;			    	
			    	getMapaFiltro(1,estado_tiendas,estado_lubricantes);
			    }else{
			    	estado_tiendas=0;
			    	getMapaFiltro(1,estado_tiendas,estado_lubricantes);
			    }
		});
	
		$('#lubricantesP').click(function(event){
			event.preventDefault();	
			/*if(lubricantes==0)
				lubricantes=1;
			else
				lubricantes=0;
			
			mapaServicios=[gasolinera,tiendas,lubricantes];			
			$('#lubricantesP').removeClass("servicio3-active");
			$("#lubricantesP").addClass("servicio3-azul");	*/
			
			if(estado_lubricantes==0){
		    	estado_lubricantes=1;
		    	getMapaFiltro(1,estado_tiendas,estado_lubricantes);
		    }else{
		    	estado_lubricantes=0;
		    	getMapaFiltro(1,estado_tiendas,estado_lubricantes);
		    }
			
		});		
		
		$('#gasolinerasP').click(function(event){
			event.preventDefault();	
			var estado=$('#gasolinerasP').attr( "disabled" );			
			if (estado!="disabled"){
				$('#gasolinerasP').removeClass("servicio1-active");
				$("#gasolinerasP").addClass("servicio1-azul");							
			}				
		});
		
	};	

	var bindEventCiudades = function(){
		$('#select_ciudades li a').click(function(event){
			event.preventDefault();				
			var ciudad = $.trim($('#' + this.id).html());				
			$('#option_ciudad').html("" + ciudad );	    
			mapaCiudad =  ciudad;
			estado_lubricantes=0;
			estado_tiendas=0;
			 isEND = false;
			 posEND = "";
			 posINI = "";
			 getMapa();
		});
	};
	
	var getMapaFiltro= function(a,b,c){
		mapaServicios=[a,b,c];		
		$.ajax({				
    		type: "POST",	    		
    		url: baseUrl + 'welcome/get_mapa',
    		data: { 'provincia' :  mapaProvincia, 'ciudad' : mapaCiudad,  'servicios' : mapaServicios },	    		
    		success: function( response ) {	
    			drawMap(JSON.parse(response)); 			
    		}		
		});
	};		
	
	var getMapa = function(){
		$.ajax({				
    		type: "POST",	    		
    		url: baseUrl + 'welcome/get_mapaCompleto',
    		data: { 'provincia' :  mapaProvincia, 'ciudad' : mapaCiudad,  'servicios' : mapaServicios },	    		
    		success: function( response ) {	
    			drawMap(JSON.parse(response)); 			
    		}		
		});
	};	
	
	
	var drawMap =  function ( locations ){	
		if (locations.length==0){			
			new google.maps.Map(document.getElementById('map_canvas'),{
		 		zoom: 6,
					center: new google.maps.LatLng(-1.252342,-78.619995),
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					streetViewControl: true,
					panControl: false,
					zoomControlOptions: {
						position: google.maps.ControlPosition.LEFT_BOTTOM
					}});			
		}else{
			directionsDisplay = new google.maps.DirectionsRenderer(); 	  
	 		var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';                
	 		var icon = "./imagenes/encuentranos/ecuentranos-picho.png";
	 		var shadow = {			
	 				anchor: new google.maps.Point(15,33),
	 				url: iconURLPrefix + 'msmarker.shadow.png'
	 			};	
	 		var map = new google.maps.Map(document.getElementById('map_canvas'), {
	 			zoom: 8,
	 			center: new google.maps.LatLng(locations[0].latitud, locations[0].longitud),
	 			mapTypeId: google.maps.MapTypeId.ROADMAP,
	 			mapTypeControl: false,
	 			streetViewControl: true,
	 			panControl: false,
	 			zoomControlOptions: {
	 				position: google.maps.ControlPosition.LEFT_BOTTOM
	 			}
	 		});
	 		
	 		var directionsService;
	 	    var directionsDisplay;
	 	    var geocoder;
	
	 		var infowindow = new google.maps.InfoWindow();
	
	 		var marker;
	 		var markers = new Array();  	    
		 	var contServicio1=0;
		 	var contServicio2=0;	 	    
		 	for (var i = 0; i < locations.length; i++) {
		 		var servicioPrimax=locations[i].tipo.split("");
		 		
		 		if (contServicio1==0){
			 		if (servicioPrimax[1]=="1"){
			 			$('#tiendasP').removeClass("disabled");
			 			sw1=1;
			 			contServicio1=1;
			 		}else{
			 			sw1=0;			 			
			 		}
		 		}
		 		if (contServicio2==0){
			 		if (servicioPrimax[2]=="1"){
			 			$('#lubricantesP').removeClass("disabled");			 		
			 			sw2=1;
			 			contServicio2=1;
			 		}else{
			 			sw2=0;			 			;			 			
			 		}
		 		}	 
		 		 
		 		marker = new google.maps.Marker({
		 			position: new google.maps.LatLng(locations[i].latitud, locations[i].longitud),
		 			map: map,
		 			icon : icon,
		 			shadow: shadow
		 		});
		
		 		markers.push(marker);		
		 		google.maps.event.addListener(marker, 'click', (function(marker, i) {				
		 			return function() {
		 				var text = "<div class='marktit'>Primax "+locations[i].nombre + "</div><div class='markdet'><strong>Dirección: </strong>"+locations[i].direccion+" </div>";
		 				infowindow.setContent(text);
		 	            infowindow.open(map, marker);
		 	           posEND = marker.getPosition().toUrlValue(8);			 			
			 			traceRoute();
		 			}})(marker, i)); 	        
		 	} 
			if(sw1==1){
	 			$("#tiendasP").removeAttr("disabled");		 			
	 		}else{		 			
	 			$("#tiendasP").attr("disabled","disabled");
	 		}
	 		
	 		if(sw2==1)
	 			$("#lubricantesP").removeAttr("disabled");	
	 		else
	 			$("#lubricantesP").attr("disabled","disabled");
		 	
		 	if(estado_tiendas==0){
			    	$('#tiendasP').removeClass("servicio2-azul");
			    	$('#tiendasP').addClass("servicio2-active");				    	
			    }else{				    	
			    	$('#tiendasP').removeClass("servicio2-active");
			    	$("#tiendasP").addClass("servicio2-azul");
			    }	 		
	 		 
	 		if(estado_lubricantes==0){
		    	$("#lubricantesP").removeClass("servicio3-azul");
		    	$("#lubricantesP").addClass("servicio3-active");				    	
		    }else{				    	
		    	$("#lubricantesP").removeClass("servicio3-active");
		    	$("#lubricantesP").addClass("servicio3-azul");
		    }

		 	isEND = false;
			dirDisplay = new google.maps.DirectionsRenderer({
				suppressMarkers : true,
				preserveViewport : true,
				hideRouteList : false
			});
			dirDisplay.setMap(map);			
			google.maps.event.addListener(map, 'click', function(event) {				
				if (!isEND) {					
					isEND = true;			
					posINI = event.latLng;
					placeMarker(event.latLng);
				}
			});
		 	
		 	autoCenter(markers,map);
		 	directionsDisplay.setMap(map);
		 	
		 	var  placeMarker= function(location) {
				posINI = location.toUrlValue(8);
				traceRoute();			
				var markUser = new google.maps.Marker({
					position: location,
		 			map: map, 											             
			 		icon : "./imagenes/encuentranos/Encuentranos-intro-icono-ubicacion.png",
					draggable : true
				});
				
				google.maps.event.addListener(markUser, 'dragend', function(event) {
					posINI = event.latLng.toUrlValue(8);
					traceRoute();
				});
			};		 	
			
			var traceRoute = function() {				
				if (posINI != "" && posEND != "") {
					var request = {
						origin : posINI,
						destination : posEND,
						travelMode : google.maps.TravelMode.DRIVING
					};					
					
					dirService.route(request, function(result, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							dirDisplay.setDirections(result);
						}
					});					
				} 
			};		 	
		};			
 	};

 	var  autoCenter = function (markers,map) {		
	    var bounds = new google.maps.LatLngBounds();	    
     	$.each(markers, function (index, marker) {
         	bounds.extend(marker.position);
			 });         
         map.fitBounds(bounds);
		};
 	
 	setup();
 	new google.maps.Map(document.getElementById('map_canvas'),{ 		
 		zoom: 6, 		
		center: new google.maps.LatLng(-1.252342,-78.619995),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		streetViewControl: true,
		panControl: true,
		zoomControlOptions: {
		position: google.maps.ControlPosition.LEFT_BOTTOM
		}});
 	
}());



