<!DOCTYPE html>
<html>
  <head>
  <?php   	$path=base_url();?>
    <title>PRIMAX Ecuador</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="PRIMAX Ecuador ofrece a sus clientes: combustibles líquidos, lubricantes, ventas coportativas, ventas a industria."/>
    <meta name="keywords" content="Primax, ecuador, 10, gasolina, ford escape, gana carro, gana carro gasolina" />
    <meta property="og:title" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.primax.com.ec/"/>
    <meta property="og:image" content="http://www.primax.com.ec/imagenes/logo-primax.png"/>
    <meta property="og:site_name" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:description" content="PRIMAX Ecuador,  Por cada  $10  de consumo en gasolina,  recibes un cupón para participar en los sorteos de 5 Ford Escape."/>       
    <link rel="icon" type="image/png" href="<?php  echo $path;?>imagenes/favicon.ico" />
    <!-- CSS -->    
    <link rel="stylesheet"  href="<?php  echo $path;?>css/estilo.css" />
    <link rel="stylesheet"  href="<?php  echo $path;?>css/boot/bootstrap-responsive.min.css" />
    <!-- JS -->	   
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	<link rel="stylesheet" href="<?=base_url()?>css/specimen_stylesheet.css" type="text/css" charset="utf-8">
    <script src="<?=base_url()?>js/easytabs.js" type="text/javascript" charset="utf-8"></script>
			
	 <style type="text/css">	 
	 @font-face {font-family: 'frutigerbold';
		    src: url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.eot');
		    src: url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.eot?#iefix') format('embedded-opentype'),
		         url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.woff') format('woff'),
		         url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.ttf') format('truetype'),
		         url('frutiger_67_bold_condensed-webfont.svg#frutigerbold') format('svg');
		    font-weight: normal;font-style: normal;s
		}	
				
		body{background-color:#ffffff;font-family: 'frutigerbold';]				
		</style>
	
	
    <script>
		/*(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-44523074-1', 'primax.com.ec');
		  ga('send', 'pageview');
		//script fancibox		  
			$(document).ready(function() {				
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
				});*/	
	</script>
  </head>		
		
<body>
  <!-- Bloque menu --> 
	 <div class="navbar navbar-inverse navbar-fixed-top" style="height:153px;background:#EBEBEB ;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand" >
          	<img src="<?=base_url()?>imagenes/logo.jpg" class="img-responsive" />
          </div>
        </div>
        <div class="navbar-collapse collapse" style="margin-top:100px;paddin:0;" >
          <ul class="nav navbar-nav" >
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>            
          </ul>
          
        </div><!--/.navbar-collapse
      </div>
    </div>
    <!--Fin cloque menu -->    
    <!--Inicio Carrusel   -->
   <div id="carouselSlide" class="carousel slide bs-docs-carousel-example" style="margin-top:160px;background: #ffffff;">
        <ol class="carousel-indicators">
          <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
          <li data-target="#carouselSlide" data-slide-to="1"></li>
          <li data-target="#carouselSlide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?=base_url()?>imagenes/home-primax.jpg"  alt="First slide">            
          </div>
          <div class="item">
            <img src="<?=base_url()?>imagenes/home-primax.jpg"  alt="Second slide">            
          </div>
          <div class="item">
            <img src="<?=base_url()?>imagenes/home-primax.jpg"  alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div>    
    <!-- /.carousel -->    
    <!-- Fin Carrusel -->         
	<!-- Bloque Contenedor 
	<div class="jumbotron" style="margin-top:50px;background: #ffffff;">
	    <div class="container">
	      <!-- Example row of columns 
	      <div class="row">
	        <div class="col-lg-12" style="margin-top:10%;">
	        	<img src="<?=base_url()?>imagenes/home-primax.jpg" class="img-responsive" /> 
	        </div>
	        
	      </div>      
	    </div>
    </div> 
    <!-- Fin contenedor -->    
    <!-- footer -->
     <div class="navbar navbar-inverse navbar-fixed-bottom" style="background:#F17037">
      
        <div class="navbar-header">
          <img src="<?=base_url()?>imagenes/texto-footer.jpg" class="img-responsive" />          
        </div>
         
        <div class="navbar-inner" style="width: 50%">
        	<div id="carouselFooter" class="carousel slide bs-docs-carousel-example" style="margin-top:160px;background: #ffffff;">
		          <div class="item active">		          		          		                  
		          </div>
		      </div>
        </div>
               
      </div>
     
    <!-- Fin Footer -->
    <script src="<?php  echo $path?>js/boot/bootstrap.min.js"></script>     
    <script src="<?php  echo $path?>assets/js/scrollspy.js"></script>

   <script>
   /*$('.carousel').carousel({
	   interval: 3000
	 })*/
   </script>
  
</html>








