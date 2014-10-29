<!DOCTYPE html>
<html>
  <head>
  <?php 
  	$path=base_url();
  ?>
    <title>PRIMAX Ecuador</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description"
          content="PRIMAX Ecuador ofrece a sus clientes: combustibles líquidos, lubricantes, ventas coportativas, ventas a industria."/>
    <meta name="keywords" content="Primax, ecuador, 10, gasolina, ford escape, gana carro, gana carro gasolina" />
    <meta property="og:title" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.primax.com.ec/"/>
    <meta property="og:image" content="http://www.primax.com.ec/imagenes/logo-primax.png"/>
    <meta property="og:site_name" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:description"
          content="PRIMAX Ecuador,  Por cada  $10  de consumo en gasolina,  recibes un cupón para participar en los sorteos de 5 Ford Escape."/>
    <link rel="stylesheet"  href="<?php  echo $path;?>css/bootstrap.css" />
    <link rel="icon" type="image/png" href="<?php  echo $path;?>imagenes/favicon.ico" />
    <link rel="stylesheet"  href="<?php  echo $path;?>css/estilo.css" />
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <!-- <script src="<?php  echo $path;?>js/jquery.js"></script> -->
    
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> 
    <!--cargando fancibox.... -->
     <script type="text/javascript" src="<?php  echo $path;?>js/fancybox/jquery.fancybox.js"></script>
     <link rel="stylesheet" type="text/css" href="<?php  echo $path;?>js/fancybox/jquery.fancybox.css" media="screen" />
     <!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php  echo $path;?>js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
     <!--fancibox cargado-->
     <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-44523074-1', 'primax.com.ec');
		  ga('send', 'pageview');
		//script fancibox		  
			$(document).ready(function() {
				/*
				*  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
				*/
				$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
				    padding: 0,
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',				
					arrows : false,
					helpers : {
					media : {},
					buttons : {},
				    overlay : null
				}
				});
				});	
	</script>
  </head>
  <body>
   <div class="img-logo-inicio" style="cursor:pointer;" onclick="window.open('http://www.primax.com.ec');">
	   	<img src="<?php  echo $path;?>imagenes/logo-primax-movil.png" width="100%" />
	</div>   	
	
    <div class="container contenedor-principal fondo-principal">       		
	  <div class="row" style="vertical-align: middle;">
		   <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1  col-lg-5 col-lg-offset-1 seccion1" >		   			
				    <div class="img-tanquea" >
				    	<img src="<?php  echo $path;?>imagenes/tanquea.png" width="100%" />
				    </div>
				    <div class="carro" style="margin-top:10px;margin-bottom:45px;text-align: center;">
				    	 <img src="<?php  echo $path?>imagenes/carro.png"   class="img-responsive" alt="tanquea hacia tu escape G-prix premio ford escape" />
				    </div>	
				    <div class="flecha" >
				    	 <a href="#gana"> <img src="<?php  echo $path?>imagenes/flechanaranja.png"   width="10%" /></a>
				    </div>			    
			</div>	
		
			<div class="col-xs-12 seccion2" id="fondo-gana">
			    	<div class="gana-img">
			    		<a name="gana">	<img src="<?php  echo $path?>imagenes/gana5.png"  style="width:100%;" alt="premio ford escape" /></a>
			    	</div>				    	
			    	<div class="flecha" >
				    	 <a href="#instruccion"><img src="<?php  echo $path?>imagenes/flechablanco.png"   width="10%" /></a>
				    </div>	
			</div>			    	
				  		
		    <div class="col-xs-12 col-sm-5 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-4 col-lg-offset-0 seccion3" style="padding-top:7%;">
		    	<a name="instruccion"></a>
		    		<div class="texto1">
			    			Por cada <span class="texto-dolar">$10</span> de consumo en gasolina,
							recibes un cupón para participar en los sorteos
							de 5 Ford Escape.
					</div> 
					<div class="texto1">
				    		Los consumos de Super G-Prix y los pagos con
							Bankard o Visa Electron del Banco Bolivariano,
							ganan el doble de cupones.							
					</div>
					<div onclick="window.open('<?php  echo $path?>archivo/bases-de-la-promocion.pdf');" class="boton" > 
				   			<img src="<?php  echo $path?>imagenes/botonnaranja.png"  class="img-responsive" />
				   	</div>
				   	
				   	<div onclick="window.open('https://www.misiva.com.ec');" class="texto-creditos" > 
				   		 <!--  © 2013 www.misiva.com.ec -->
				   	</div>
				   	
				   	<div class="footer_movil">
						<div class="link-footer-der" style="cursor:pointer;" onclick="window.open('http://www.primax.com.ec');">				    
					    	www.primax.com.ec
						</div>				    
						<div class="video-footer-der" >
							<a class="fancybox-media" href="http://www.youtube.com/watch?v=p0nlCs_W3R4">
							  	<img src="<?php  echo $path;?>imagenes/youtube.png" class="img-responsive" alt="Responsive image" />
							  	</a>
						</div>
					</div> 
		    </div>		    	
		  </div>		    
	</div>	
	
	<div id="footer">
	 		<div  id="footer1" >
			    <div class="footer1-img" >
			    	<img src="<?php  echo $path?>imagenes/gana-5-ford.png" class="img-responsive" alt="Responsive image" />  	
			    </div>
	  		</div>
	<div  id="footer2">
		    <div class="logo-footer-izq">				    
				    	<img src="<?php  echo $path;?>imagenes/logo-super-gprix.png" class="img-responsive" alt="Responsive image" alt="primax logo" />				    	
			</div>
			<div class="texto-footer">
			   	La <strong>única</strong> gasolina <strong>super</strong> de <strong>92</strong> octanos que se aditiva en el Ecuador. © 2013
			<span style="cursor:pointer;font-size:10px;margin-top:5px;" onclick="window.open('https://www.misiva.com.ec');">
				<!-- © 2013 www.misiva.com.ec -->
			</span> 
			    </div>
			   <div class="logo-footer-der" style="cursor:pointer;" onclick="window.open('http://www.primax.com.ec');">				    
				    	<img src="<?php  echo $path;?>imagenes/logo-primax.png" class="img-responsive" alt="Responsive image" />
				    </div>
				    <div class="link-footer-der" style="cursor:pointer;" onclick="window.open('http://www.primax.com.ec');">				    
				    	www.primax.com.ec
				    </div>				    
				    <div class="video-footer-der" >						    
				    	<a class="fancybox-media" href="http://www.youtube.com/watch?v=p0nlCs_W3R4">
						   	<img src="<?php  echo $path;?>imagenes/youtube.png" class="img-responsive" alt="Responsive image" />
						</a>								
				    </div>
				    
				    
		    </div>
	</div>
	
    <script src="<?php  echo $path?>js/bootstrap.min.js"></script>
     
  </body>
</html>