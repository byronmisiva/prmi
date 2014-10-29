<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="<?php echo base_url().'css/boot/bootstrap.css'?>" rel="stylesheet" media="screen">		
		<link href="<?php echo base_url().'css/styles.css'?>" rel="stylesheet">
	</head>
	<body>
		<div class="container fondo">
			<h1 class="text-right">Encu&eacute;ntranos</h1>
			
			<div class="row-fluid franja">				
				<div class="form-encuentranos">
					<div class="one-side-float">
						<p>Selecciona la provincia y la ciudad</p>
						<div class="btn-group display-block">
							<button id="option_provincia" class="btn opcion">Provincia..</button>
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul id="select_provincias" class="dropdown-menu">
							
							<li><a id="provincia_0" tabindex="-1" href="#">Azuay</a></li>
							<li><a id="provincia_1" tabindex="-1" href="#">Pichincha</a></li>
							<li><a id="provincia_2" tabindex="-1" href="#">Guayas</a></li>
								
							</ul>
						</div>
					
						<div class="btn-group margin-zero">
							<button id="option_ciudad" class="btn opcion">Ciudad....</button>
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul id="select_ciudades" class="dropdown-menu"></ul>
						</div>
					</div>
					<div class="other-side-float">
						<p class="text-left">Elige el servicio que necesitas</p>												
						<button type="button" class="btn btn-primary servicios servicio1" data-toggle="button"></button>
						<button type="button" class="btn btn-primary servicios servicio2" data-toggle="button"></button>
						<button type="button" class="btn btn-primary servicios servicio3" data-toggle="button"></button>
					</div>
				</div>				
				<div class="mapa-content">
					<div id="map_canvas"></div>
				</div>				
			</div>
		</div>		

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo base_url().'js/boot/bootstrap.min.js'?>"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>				
		<script type="text/javascript" src="<?php echo base_url().'js/maps2.js'?>"></script>
	</body>
</html>