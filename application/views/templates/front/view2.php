<!DOCTYPE html>
<html lang="es">
<?php 
	$secciones=array("0"=>"home","1"=>"nosotros","2"=>"super-g","3"=>"tiendas","4"=>"lubricantes","5"=>"encuentranos","6"=>"contacto");
	$dir=array("0"=>"welcome/home","1"=>"welcome/nosotros","2"=>"welcome/super_g","3"=>"welcome/tiendas","4"=>"welcome/lubricantes","5"=>"welcome/encuentranos","6"=>"welcome/contacto");	
?>
  <head>
    <meta charset="utf-8">
    <title>Primax :: Ecuador</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="PRIMAX Ecuador ofrece a sus clientes: combustibles líquidos, lubricantes, ventas coportativas, ventas a industria."/>
    <meta name="keywords" content="Primax, ecuador, 10, gasolina, ford escape, gana carro, gana carro gasolina" />
    <meta property="og:title" content="PRIMAX Ecuador | Todo para seguir" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.primax.com.ec/"/>
    <meta property="og:image" content="http://www.primax.com.ec/imagenes/logo-primax.png"/>
    <meta property="og:site_name" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:description" content="PRIMAX Ecuador,  Por cada  $10  de consumo en gasolina,  recibes un cupón para participar en los sorteos de 5 Ford Escape."/>       
    <link rel="icon" type="image/png" href="<?=base_url()?>imagenes/favicon.ico" />    
    <!-- Le styles -->
    <link href="<?=base_url()?>css/estilo.css" rel="stylesheet">
    <link href="<?=base_url()?>css/boot/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/boot/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/slide-h/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/slide-h/style.css" />
    
    <script src="<?=base_url()?>assets/js/jquery.js"></script>    
    <script src="<?=base_url()?>js/easytabs.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=base_url()?>js/plugin/jquery.scrollTo-min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="<?=base_url()?>js/slide-h/modernizr.js"></script>  
<script>
	var accion="<?=base_url()?>";
</script>   			
	 <style type="text/css">	 
	 @font-face {font-family: 'frutigerbold';
		    src: url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.eot');
		    src: url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.eot?#iefix') format('embedded-opentype'),
		         url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.woff') format('woff'),
		         url('<?=base_url()?>css/frutiger_67_bold_condensed-webfont.ttf') format('truetype'),
		         url('frutiger_67_bold_condensed-webfont.svg#frutigerbold') format('svg');
		    font-weight: normal;font-style: normal;s
		}			
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/ico/apple-touch-icon-57-precomposed.png">   
  </head>
  <body style="background:#EAEAEA;">
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper" style="overflow: hidden;">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container" >
        <div class="navbar navbar-inverse">
          <div class="navbar-inner"  style="background: #EAEAEA;">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="<?=base_url()?>imagenes/header/hader-logo-primax.png" class="img-responsive" />
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li onclick="$.scrollTo('#home',800);" id="estado1" >
                	<div class="home"></div>
                	<a class="enlace1"  id="menu1"  >Home</a>
                </li>
                <li onclick="$.scrollTo('#nosotros',800);" id="estado2" >
	                <div class="nosotros"></div>
	               <a class="enlace1"  id="menu2" >Nosotros</a>
                </li>                
                <li onclick="$.scrollTo('#super-g',800);" id="estado3" >
                    <div class="super-g-prix"></div>
                	<a class="enlace2"  id="menu3" >Super G-Prix</a>
                </li>
                <li onclick="$.scrollTo('#tiendas',800);" id="estado4" >
	                <div class="tiendas"></div>
	                <a class="enlace2"  id="menu4"  >Tiendas Listo!</a>
                </li>
                <li onclick="$.scrollTo('#lubricantes',800);" id="estado5" >
	                <div class="lubricantes" ></div>
	                <a class="enlace2" id="menu5"   >Lubricantes</a>
                </li>
                <li onclick="$.scrollTo('#encuentranos',800);" id="estado6" >
                	<div class="encuentranos" ></div>
                	<a class="enlace2" id="menu6"  >Encuéntranos</a>
                </li>
                <li onclick="$.scrollTo('#contacto',800);" id="estado7" >
                	<div class="contactenos"></div>
                	<a class="enlace2" id="menu7" >Contáctenos</a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

    <div class="container" style="margin:170px auto;">
	    <?php   	
	    //for($x=0;$x<4;$x++){?>
			<div name="home" id="home" class="row"></div>
		<?php // }?>		
    </div><!-- /.container -->
    <div class="navbar-wrapper2" >   
       <div class="container"  style="border:1px solid red;">
		<footer >
			<br/>
			  <div class="row">
			    <div class="span2">
			    	<img src="<?=base_url()?>imagenes/home/home-novedades-titular.png" class="img-responsive"/>       
		        </div>
		        <div class="span9">
			        <div class="flecha1"></div>
			        <div class="contenedor-banner">
				        <div id="banner1">
				        	<img src="<?=base_url()?>imagenes/home/home-foto-02.jpg" class="img-responsive" />
				        </div>		
				        <div id="banner2">
					        <img src="<?=base_url()?>imagenes/home/home-foto-03.jpg" class="img-responsive" />
					    </div>
					    <div id="banner3">
					        	<img src="<?=base_url()?>imagenes/home/home-foto-04.jpg" class="img-responsive" />
					    </div>
					    <div id="banner4">
					        	<img src="<?=base_url()?>imagenes/home/home-foto-05.jpg" class="img-responsive" />
					    </div> 
			         </div>>
			        <div class="flechad"></div>
		        </div>
	        </div>
      	</footer>
      </div>
     </div> 
    <!--  <div class="container" ></div>    
    <div class="container" ></div> -->
    <script type="text/javascript" src="<?=base_url()?>js/slide-h/jquery.cslider.js"></script>
    <script src="<?=base_url()?>js/boot/bootstrap.min.js"></script>    
    <script>	
		$('#home').load(accion+"<?=$dir['0']?>");
    </script>
    
  </body>
</html>
