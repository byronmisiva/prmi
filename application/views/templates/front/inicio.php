<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Primax :: Ecuador</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="PRIMAX Ecuador ofrece a sus clientes: combustibles líquidos, lubricantes, ventas coportativas, ventas a industria."/>
    <meta name="keywords" content="Primax, ecuador, 10, gasolina, ford escape, gana carro, gana carro gasolina"/>
    <meta property="og:title" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.primax.com.ec/"/>
    <meta property="og:image" content="http://www.primax.com.ec/imagenes/logo-primax.png"/>
    <meta property="og:site_name" content="PRIMAX Ecuador | Todo para seguir"/>
    <meta property="og:description"
          content="PRIMAX Ecuador,  Por cada  $10  de consumo en gasolina,  recibes un cupón para participar en los sorteos de 5 Ford Escape."/>
    <link rel="icon" type="image/png" href="./imagenes/favicon.ico"/>

    <link href="./css/boot/bootstrap.css" rel="stylesheet"/>
    <link href="./css/boot/bootstrap-responsive.css" rel="stylesheet"/>

    <link href="./css/estilo.css?frefresh=45646" rel="stylesheet"/>
    <link href="./css/beneficios.css?frefresh=4532321" rel="stylesheet"/>
    <link href="./css/tiendas.css?frefresh=455646546" rel="stylesheet"/>
    <link href="./css/lubricantes.css?frefresh=455646546" rel="stylesheet"/>

    <link href="./css/servicios.css" rel="stylesheet"/>
    <link href="./css/encuentranos.css" rel="stylesheet"/>
    <link href="./css/contactanos.css?frefresh=48796565612" rel="stylesheet"/>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46705117-1', 'primax.com.ec');
        ga('send', 'pageview');
    </script>
    <!-- <script src="./assets/js/jquery.js"></script> -->
    <script src="./js/bold/easytabs.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/regular/easytabs.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/ligth/easytabs.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/plugin/jquery.scrollTo-min.js" type="text/javascript" charset="utf-8"></script>

    <link rel="stylesheet" href="./js/carusel/colorbox.css" type="text/css">
    <link rel="stylesheet" href="./js/carusel/dark.css" type="text/css">

    <script type="text/javascript" src="./js/carusel/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="./js/carusel/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="./js/carusel/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="./js/carusel/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="./js/carusel/caroufredsel.js"></script>
    <script type="text/javascript" src="./js/carusel/navigation.js"></script>

    <script src="./js/primax.js"></script>
    <script src="./js/validate.js"></script>
    <!-- <script src="<?=base_url('js/validate.js')?>"></script> -->
    <!-- <script src="./js/boot/bootstrap.min.js"></script> -->
    <script src="./js/boot/bootstrap.js"></script>
    <script>
        var accion = "<?=base_url().'index.php/'?>";
    </script>

    <style type="text/css">
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<!-- onload="$('#youvideo').click();" -->
<body style="background:#EAEAEA;" onload="$('#youvideo').click();" >
<!--<body style="background:#EAEAEA;" onload="llamarBanner()" >-->
<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper" style="overflow: hidden;">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"
                        id="menu">
                    <img src="./imagenes/header/smartphone-menu.png"/>
                </button>
                <img src="./imagenes/header/hader-logo-primax.png"
                     onclick="movimiento('row_home');verificarFooter(1);" class="logo-superior"/>

                <div class="nav-collapse collapse">
                    <ul class="nav nav-cabecera">
                        <li id="estado1">
                            <a class="home active">Home</a>
                        </li>
                        <li id="estado2">
                            <a class="nosotros">Nosotros</a>
                        </li>
                        <li id="estado3">
                            <a class="super-g-prix">Super G-Prix</a>
                        </li>
                        <li id="estado4">
                            <a class="tiendas">Tiendas Listo!</a>
                        </li>
                        <li id="estado5">
                            <a class="lubricantes">Lubricantes</a>
                        </li>
                        <li id="estado6">
                            <a class="servicios">Servicios Corporativos</a>
                        </li>
                        <li id="estado7">
                            <a class="encuentranos">Encuéntranos</a>
                        </li>
                        <li id="estado8">
                            <a class="contactenos">Contáctanos</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.navbar-inner -->
        </div>
        <!-- /.navbar -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar-wrapper -->

<div id="contenedor2">
<div class="row_home" style="overflow: hidden;">
    <div id="alinearAbajo">
        <div id="imagenHome" style="background-image: url(<?=base_url($contenidos['0']->imagen)?>);"></div>
        <p><a href="http://youtu.be/vwQ06L3bfWU" data-toggle="lightbox" id="youvideo">Ver video</a></p>
    </div>
</div>

<div class="fondo-nosotros" style="overflow: hidden;">
<div class="container">
<div class="carousel slide" id="myCarousel">
<div class="tituloNosotros">
    <h1>Nosotros</h1>

    <div class="alinearmenuNosotros">
        <ul class="nav nav-tabs" id="menuNosotros">
            <li id="btn-empresa" data-target="#myCarousel" data-slide-to="0" class="active"><a href="#"
                                                                                               data-toggle="tab">Empresa </a>
            </li>
            <li><span class="linea-division"></span></li>
            <li id="btn-mision" data-target="#myCarousel" data-slide-to="1"><a style="display:none;"
                                                                               href="#" data-toggle="tab">Misión</a>
            </li>

            <li data-target="#myCarousel" data-slide-to="2"><a href="#" data-toggle="tab">Historia </a></li>
            <li><span class="linea-division"></span></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#" data-toggle="tab">Presencia
                    Internacional </a></li>
        </ul>
    </div>
</div>

<div class="carousel-inner">
<!-- item 0 -->
<div class="item active fondo-secciond">
    <div class="carousel-caption" style="background-color: transparent;top:0px;">
        <div class="span6 columnaPersonaje">
            <div class="grupo-primax" style="background-image: url(<?=base_url($contenidos['1']->imagen)?>);"></div>
        </div>
        <div class="columnaInformacion">
            <div class="span5 submenuNosotros">
                <ul class="nav nav-tabs" id="opciones">
                    <li id="misionmenu1"><a href="#">Misión </a></li>
                    <li><span class="linea-division"></span></li>
                    <li id="visionmenu1"><a href="#">Visión </a></li>
                    <li><span class="linea-division"></span></li>
                    <li id="valoresmenu1"><a href="#"> Valores </a></li>
                </ul>
            </div>
            <div class="row tab-content">
                <div class="tab-pane active">
                    <div class="textoContenido nosotrosPrincipal">
                    	<?=$contenidos['1']->contenido?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="item fondo-seccioni nosotrosElementos">
    <div class="carousel-caption" style="background-color: transparent;top:0px;">
        <div class="nosotroscontrolI"></div>
        <div class="nosotroscontrolD"></div>
        <div class="span6 columnaPersonaje nosotrosPersonaje">
            <div class="personaje1" style="background-image: url(<?=base_url($contenidos['2']->imagen)?>);"></div>
        </div>
        <div class="columnaInformacion columnaNosotros">
            <div class="span5 submenuNosotros">
                <ul class="nav nav-tabs" id="opciones">
                    <li class="active" id="misionmenu"><a href="#">Misión </a></li>
                    <li><span class="linea-division"></span></li>
                    <li id="visionmenu"><a href="#">Visión </a></li>
                    <li><span class="linea-division"></span></li>
                    <li id="valoresmenu"><a href="#"> Valores </a></li>
                </ul>
            </div>


            <div class="tab-content">
                <div class="tab-pane active">
                    <div id="nosotros">
                        <div class="nosotros-content">
                            <div class="nosotrosItems " id="">
                                <div class="nosotrosItem " id="">
                                    <H2>MISIÓN</H2>
                                    <?=$contenidos['2']->contenido?>
                                </div>
                                <div class="nosotrosItem " id="">
                                    <h2>VISIÓN</h2>
                                    <?=$contenidos['3']->contenido?>
                                </div>
                                <div class="nosotrosItem " id="">
                                    <h2 class="textoValores">VALORES</h2>
                                    <?=$contenidos['4']->contenido?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="indicador2"></div>  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- item 2   -->

<!-- item 3 -->

<div class="item fondo-secciond">
    <div class="carousel-caption">
        <div id="timelineHeader">

        </div>
        <div id="timeline">
            <div class="timeline-content">
                <div class="fechas fechas_fondo" id="TimeNormal2 historia_carrousel">                  
                  <?php 
                  	foreach($historia as $row){?>                  
                  	<div>
                        <button class="btn-fechas fecha" title="<?=$row->titulo?>"
                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                class="encendido" src="<?=base_url($row->imagen)?>"/>
                        </button>
                    </div>                    
                    <?php }?>
                </div>
                <div class="controlI"></div>
                <div class="controlD"></div>
            </div>
        </div>
    </div>
</div>
<!-- fin item 3 -->

<div class="item fondo-seccioni">
    <div class="carousel-caption" style="background-color: transparent;top:0px;">
        <div class="span6 columnaPersonaje">
            <div class="presencia"></div>
        </div>
        <div class="columnaInformacion columnaPresencia">
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="textoContenido presenciaInternacional">
                        <h2 id="presenciaTexto"><?=strtoupper($contenidos['6']->titulo)?></h2>
                        <?=$contenidos['6']->contenido?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<a class="left carousel-control nosotrosControl" href="#myCarousel" data-slide="prev"></a>
<a class="right carousel-control nosotrosControl" href="#myCarousel" data-slide="next"></a>
</div>
</div>
</div>
<!-- inicio-->

<!-- SECCION 3 -->
<!-- Inicio SECCION Beneficios -->
<div class="row fondoGprix" style="overflow: hidden;">
    <div class="container">
        <div class="carousel slide" id="carruselSuper">
            <div class="tituloNosotros beneficio-seccion">
                <h1><?=strtoupper($contenidos['7']->titulo)?></h1>
                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs" id="menuBeneficios">
                        <li id="btn-beneficios" style="display: none;" data-target="#carruselSuper" data-slide-to="0"
                            class="active"><a href="#" data-toggle="tab"><?=strtoupper($contenidos['7']->titulo)?></a>
                        </li>
                        <li style="display: none;"><span class="linea-division"></span></li>
                        <li data-target="#carruselSuper" data-slide-to="1"><a href="#" data-toggle="tab"><?=strtoupper($contenidos['8']->titulo)?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="carousel-inner">
                <!-- item 0 -->
                <div class="item active franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaPersonaje">
                            <div class="beneficios"></div>
                        </div>
                        <div class="columnaInformacion contenidoBeneficios">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="textoBeneficio">
                                        <H2></H2>
                                        <?=$contenidos['7']->contenido?>
                                    </div>
                                    <div class="logoGprix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <!-- <img src="" alt=""> -->
                        <div class="span12">
                            <h2 class="titulo-caracteristicas">BENEFICIOS</h2>

                            <div class="tab-content">
                                <div class="tab-pane active">
                                   <?=$contenidos['8']->contenido?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#carruselSuper" data-slide="prev"></a>
            <a class="right carousel-control" href="#carruselSuper" data-slide="next"></a>
        </div>
    </div>
</div>
<!-- fin-->



<!-- inicio  SECCION Tiendas -->
<div class="row fondoTiendas" style="overflow: hidden;">
<div class="container">
<div class="carousel slide" id="carruselTiendas">
    <div class="tituloNosotros tiendas-seccion">
        <h1>Tiendas Listo!</h1>
        <div class="alinearmenuNosotros">
            <ul class="nav nav-tabs" id="menuBeneficios">
                <li id="btn-tiendas" style="display:none;" data-target="#carruselTiendas" data-slide-to="0"
                    class="active"><a href="#" data-toggle="tab">Intro</a></li>
                <li id="btn-menu" data-target="#carruselTiendas" data-slide-to="1"><a href="#" data-toggle="tab">Menú</a>
                </li>
                <li><span class="linea-division"></span></li>
                <li data-target="#carruselTiendas" data-slide-to="2"><a href="#" data-toggle="tab">Promociones</a>
                <li><span class="linea-division"></span></li>
                <li data-target="#carruselTiendas" data-slide-to="3"><a href="#" data-toggle="tab">Precios</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="carousel-inner">
        <!-- item 0 -->
        <div class="item active franja-tiendasd">
            <div class="carousel-caption" style="background-color: transparent;top:0px;">
                <div class="span6 columnaPersonaje">
                    <div class="mesera"></div>
                </div>
                <div class="tiendasContenedor columnaInformacion">
                    <div class="row tab-content">
                        <div class="tab-pane active ">
                            <div class="iconosTiendas">
                                <div class="posicion-tiendas" title="Menú"
                                     onclick="$('#btn-menu').click();"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item 1 -->
        <div class="item franja-tiendasi menuContenedor">
            <div class="carousel-caption" style="background-color: transparent;top:0px;">
                <div class="span6 columnaPersonaje columnaRecuadro">
                    <div class="recuadro">
                        <div class="nombre-menu">LOMO Y TOCINO</div>
                        <div class="imagen-menu"></div>
                        <div class="descripcion-menu"></div>
                        <div class="linea-menu"></div>
                        <div class="precio-menu">
                            <div class="valor">$3.50</div>
                        </div>

                    </div>
                    <div class="logo-tiendas">
                    </div>
                </div>
                <div class="columnaInformacion columna-opciones-menu menu-offset">
                    <div class="row tab-content">
                        <div class="tab-pane active ">
                            <div class="contenedor-Menu">
                            	<?php 
                            	foreach($menus as $row){
                            	$menuopcion=$row->id;?>
                            	<div class="opcion"  onclick="getInformacion(<?=$row->id?>);">
                                    <div class="menu1" style="background-image:url(./<?=$row->foto_pequena?>);background-repeat: no-repeat;"></div>
                                    <div class="nombre"><?=$row->nombre?></div>
                                </div>
                            	<?php }?>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item 2 -->
        <div class="item franja-tiendasd">
            <div class="carousel-caption" style="background-color: transparent;top:0px;">          
                <h2 class="titulo-promociones">PROMOCIONES</h2>
                <div class="promociones-content">
                    <div id="promocionColorBox" class="promocionCarouFredSel">
                    <?php 
                        foreach($promociones as $row){
                        ?>    <img data-img="<?="./".$row->foto_grande?>"
                                 rel="caroufredsel-6" title="<?=$row->nombre?>" data-link=""
                                 src="<?="./".$row->foto_pequena?>"
                                 class="homegallery2"
                                 onclick="ga('send', 'event', 'Promociones','click','<?=$row->nombre?>1');"/>                                 
                          <?php }?>  
                    </div>

                    <div class="controlBotonContent">
                        <div class="controlBoton">
                            <div class="controlI"></div>
                            <div class="controlD"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- item 3 -->
        <div class="item franja-tiendasi">
            <div class="carousel-caption" style="background-color: transparent;top:0px;">
                <div class="span6 columnaPersonaje">
            		<div class="logo-nuestros-precios"></div>            
            		<div class="mensajeDepartamento"></div>
        		</div>
        		<div class="span5 columnaPersonaje">
        		<div class="columnaInformacion columnaListaOferta">		            
		            <div class="row tab-content">
		                <div class="tab-pane active">
		                    <div id="resultadosPrecios"></div>		                    
		                </div>
		            </div>
        		</div>
        		</div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carruselTiendas" data-slide="prev"></a>
    <a class="right carousel-control" href="#carruselTiendas" data-slide="next"></a>
</div>

</div>
</div>

<!-- SECCION 5 -->
<!-- Inicio SECCION Lubricantes -->

<div class="fondoLubricantes" style="overflow: hidden;">
    <div class="container">
        <div class="carousel slide" id="carruselLubricantes">
            <div class="tituloLubricantes">
                <h1><?=$contenidos['12']->titulo?></h1>

                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs" id="menuNosotros">
                        <li id="btn-linea-automotriz" data-target="#carruselLubricantes" data-slide-to="0" class="active"><a href="#"
                                                                                                           data-toggle="tab">Línea Automotriz</a>
                        </li>
                        <li><span class="linea-division"></span></li>
                        <li id="btn-hellix" data-target="#carruselLubricantes" data-slide-to="1" class="hide"><a href="#"
                                                                                                                    data-toggle="tab">Hellix</a>
                        </li>
                        <li id="btn-rimula" data-target="#carruselLubricantes" data-slide-to="5" class="hide"><a
                                href="#" data-toggle="tab">Rimula</a>
                        </li>
                        <li id="btn-advance" data-target="#carruselLubricantes" data-slide-to="8" class="hide"><a
                                href="#" data-toggle="tab">Advance</a>
                        </li>
                        <li id="btn-pennzoil" data-target="#carruselLubricantes" data-slide-to="9" class="hide"><a
                                href="#" data-toggle="tab">Pennzoil</a>
                        </li>

                        <li id="btn-linea-industrial" data-target="#carruselLubricantes" data-slide-to="14"><a
                                                                                           href="#" data-toggle="tab">Línea Industrial</a>
                        </li>
                        <li id="btn-tellus" data-target="#carruselLubricantes" data-slide-to="15" class="hide"><a
                                                                                           href="#" data-toggle="tab">tellus</a>
                        </li>



                    </ul>
                </div>
            </div>
            <div class="carousel-inner">
                <!-- item 0 -->
                <div opcion="0" class="item active franja-Gprixd" >
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['12']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub2 nosotrosPrincipalLub">
                                        <?=$contenidos['12']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="1" class="item  franja-lubricantesi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['13']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['13']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="1" class="item   franja-lubricantesd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['14']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['14']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="1" class="item  franja-lubricantesi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['15']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['15']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="1" class="item   franja-lubricantesd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['16']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['16']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="5" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['17']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['17']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="5" class="item   franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['18']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['18']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="5" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['19']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['19']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="8" class="item   franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['20']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub2 nosotrosPrincipalLub">
                                        <?=$contenidos['20']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="9" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['21']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['21']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="9" class="item   franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['22']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['22']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="9" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['23']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['23']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="9" class="item   franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['24']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['24']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="9" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['25']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu10"><a href="#"> Helix </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu11"><a href="#"> Rimula </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu12"><a href="#">Advance </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu13"><a href="#">Pennzoil </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['25']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- item   -->
                <div opcion="14" class="item   franja-Gprixd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['27']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu14"><a href="#"> Gadus </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu15"><a href="#"> Tellus </a></li>

                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['27']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div opcion="15" class="item  franja-Gprixi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaLubricantes">
                            <div class="grupo-lubricantes" style="background-image: url(<?=base_url($contenidos['26']->imagen)?>);"></div>
                        </div>
                        <div class="columnaInformacionLub">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="valoresmenu14"><a href="#">Gadus </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li class="valoresmenu15"><a href="#">Tellus </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenidoLub nosotrosPrincipalLub">
                                        <?=$contenidos['26']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <a class="left carousel-control nosotrosControl" href="#carruselLubricantes" data-slide="prev"></a>
            <a class="right carousel-control nosotrosControl" href="#carruselLubricantes" data-slide="next"></a>
        </div>
    </div>
</div>
<!-- fin Lubircantes-->

<!-- SECCION 5 -->
<div class="row fondoServicios" style="overflow:hidden;">
    <div class="container">
        <div class="carousel slide" id="carruselServicios">
            <div class="tituloNosotros servicios-seccion">
                <h1>Servicios Corporativos</h1>
                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs menuServicios" id="menuServicios">
                        <li data-target="#carruselServicios" data-slide-to="0" class="active">
                        <a href="#" data-toggle="tab">PRIMAX Card Plus</a></li>
                        <li><span class="linea-division-servicios"></span></li>
                        <li data-target="#carruselServicios" data-slide-to="1"><a href="#" data-toggle="tab">Combustibles
                                Industriales</a></li>
                    </ul>
                </div>
            </div>

            <div class="carousel-inner">
                <!-- item 0 -->
                <div class="item active franja-serviciosd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="span6 columnaPersonaje columnaCarplus">
                            <div class="cardplus"></div>
                        </div>
                        <div class="columnaInformacion texto-cardplus">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="texto-servicos-cardplus">
                                        <h2><?=strtoupper($contenidos['9']->titulo)?></h2>
                                      <?=$contenidos['9']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 1 -->
                <div class="item franja-serviciosi">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">

                        <div class="columnaInformacionCombustibles">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="texto-servicos-combustibles">
                                        <h2><?=strtoupper($contenidos['10']->titulo)?></h2>
                                       <?=$contenidos['10']->contenido?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carruselServicios" data-slide="prev"></a>
            <a class="right carousel-control" href="#carruselServicios" data-slide="next"></a>
        </div>
    </div>
</div>
<!-- -FIN SERVICIOS- -->
<!-- seccion encuentranos -->
<!-- SECCION 6 -->
<div class="row fondoEncuentranos" style="overflow: hidden;">
    <div class="container">
        <div class="tituloNosotros encuentranos-seccion">
            <h1>Encuéntranos</h1>
        </div>
        <!-- item 0 -->
        <div class="franja-encuentranosi">
            <div class="span6 columnaPersonaje columnaEncuentranos">
                <div class="form-encuentranos">
                    <div class="grupo1">
                        <h2>Selecciona la provincia y la ciudad</h2>
                        <div class="btn-group display-block alinearDropdown">
                            <button id="option_provincia" class="btn opcionDropdown">Provincia..</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul id="select_provincias" class="dropdown-menu">
                                <?php foreach ($provincias as $key => $provincia) { ?>
                                    <li><a id="provincia_<?= $key; ?>" tabindex="-1"
                                           href="#"><?= $provincia->provincia ?> </a></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="btn-group margin-zero alinearDropdown">
                            <button id="option_ciudad" class="btn opcionDropdown">Ciudad....</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul id="select_ciudades" class="dropdown-menu"></ul>
                        </div>
                    </div>
                    <div class="grupo2">
                        <div class="other-side-float">
                            <h2>Elige el servicio que necesitas</h2>
                            <button type="button" class="btn btn-servicios servicio1 disabled" disabled="disabled"
                                    id="gasolinerasP"></button>
                            <div class="linea-menu alinear"></div>
                            <button type="button" class="btn btn-servicios servicio2 disabled " disabled="disabled"
                                    id="tiendasP"></button>
                            <div class="linea-menu alinear"></div>
                            <button type="button" class="btn btn-servicios servicio3 disabled" disabled="disabled"
                                    id="lubricantesP"></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columnaInformacion columnaMapa">
                <div class="mapa-content">
                    <div id="map">
                        <div id="map_canvas"></div>
                    </div>
                    <div class="map-puntero">
                        <div class="puntero">Selecciona el PIN de PRIMAX para ir a la estación que necesitas.</div>
                    </div>
                    <div class="linea-menu alinear"></div>
                    <div class="map-ubicate">
                        <div class="ubicate">Ubicate en el mapa con un click y selecciona el PIN de PRIMAX de la
                            estación que necesitas.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- fin  -->
<!--CONTACTANOS -->
<div class="row fondoContactanos">
<div class="container">
<div class="carousel slide" id="carruselContactanos">
<div class="tituloNosotros contactos-seccion">
    <h1>Contáctanos</h1>
    <div class="alinearmenuNosotros">
        <ul class="nav nav-tabs" id="menuNosotros">
            <li id="btn-formaContacto" data-target="#carruselContactanos" data-slide-to="0" class="active">
                <a href="#" data-toggle="tab">Escríbenos </a></li>
            <li><span class="linea-division"></span></li>
            
            <li id="btn-oferta" data-target="#carruselContactanos" data-slide-to="1">
            <a href="#" data-toggle="tab">Trabaja con Nosotros </a></li>
            
            
            
            <li style="display:none;" data-target="#carruselContactanos" data-slide-to="1">
            	<a href="#" data-toggle="tab">Oferta Laboral</a></li>
            <li id="btn-hoja" style="display:none;" data-target="#carruselContactanos" data-slide-to="2">
            	<a href="#" data-toggle="tab">Hoja de Vida</a></li>
            <li><span class="linea-division"></span></li>
           	<li id="btn-oferta" data-target="#carruselContactanos" data-slide-to="3">
           	 	<a href="#" data-toggle="tab">Proveedores </a>
           	 </li>	
        </ul>
    </div>
</div>
<div class="carousel-inner">
	<div class="item active franja-contactanosd">
	    <div class="carousel-caption" style="background-color: transparent;top:0px;">
	        <div class="span6 columnaPersonaje informacionContactos">
	            <h2>ESCRÍBENOS</h2>
	            <div class="textoForma">
	            	<?=$contenidos['11']->contenido?>
	            </div>
	        </div>
	        <div class="columnaContactanos">
	            <form id="contactoNormal">
	                <input class="contacto-nombre" type="text" value="" placeholder="Nombre y Apellido*"
	                       id="nombre" name="nombre"/>
	                <input class="contacto-email" type="text" value="" placeholder="Correo electrónico*"
	                       id="email" name="email"/>
	                <input class="contacto-ciudad" type="text" value="" placeholder="Ciudad*" id="ciudad"
	                       name="ciudad"/>
	                <textarea class="textarea1 contacto-mensaje" type="text" value="" placeholder="Mensaje"
	                          id="mensaje" name="mensaje"> </textarea>
	                <input class="contacto-telefono" type="text" value="" placeholder="Teléfono*"
	                       id="telefono" name="telefono" maxlength="10"/>
	                <input class="contacto-sector" type="text" value="" placeholder="Sector de la ciudad"
	                       id="sector" name="sector"/>
	                <input type="submit" class="enviar contacto-enviar" placeholder=" " value=" "
	                       id="btnEnviar"/>
	            </form>
	            <div class="linea-contactanos"></div>
	            <div class="alertaFormulario">
	                Los campos que se encuentran con * deben ser llenados obligatoriamente.
	            </div>
	
	            <div class="procesoenvio">
	                Su mensaje fue enviado correctamente
	            </div>
	        </div>
	    </div>
	</div>

	<div class="item franja-contactanosi">
	    <div class="carousel-caption" style="background-color: transparent;top:0px;">
	        <div class="span6 columnaPersonaje">
	            <h2 class="tituloHoja">OFERTA LABORAL</h2>
	            <div class="departamento">
	                <div class="btn-group display-block alinearDropdown">
	                    <button id="option_depto" class="btn opcionDropdown" id="cargo" name="cargo"
	                            data-toggle="dropdown">Departamento
	                    </button>
	                    <button class="btn dropdown-toggle" data-toggle="dropdown">
	                        <span class="caret flecha-drop"></span>
	                    </button>
	                    <ul id="select_depto" class="dropdown-menu">
	                        <?php
	                        for ($x = 0; $x < count($departamentos); $x++) {
	                            ?>
	                            <li><a id="<?= $x ?>" tabindex="-1" href="#"><?= $departamentos[$x] ?></a>
	                            </li>
	                        <?php } ?>
	                    </ul>
	                </div>
	                <script>
	                    $('#select_depto li a').click(function (event) {
	                        event.preventDefault();
	                        var depto = $.trim($('#' + this.id).html());
	                        cargarDepartamentos(this.id, 'resultadosDepartamentos');
	                        $('#option_depto').html("" + depto);
	                    });
	                </script>
	            </div>
	            <div class="mensajeDepartamento"></div>
	        </div>
	
	        <div class="columnaInformacion columnaListaOferta">
	            <div class="span5 submenuNosotros subcontactanos">
	                <ul class="nav nav-tabs" id="opciones">
	                    <li class="active"><a href="#">Oferta Laboral </a></li>
	                    <li><span class="linea-division"></span></li>
	                    <li><a href="#" onclick="$('#btn-hoja').click();">Hoja de Vida </a></li>
	                </ul>
	            </div>
	            <div class="row tab-content">
	                <div class="tab-pane active">
	                    <div id="resultadosDepartamentos"></div>
	                    <div id="detalleOferta" class="modal hide fade" tabindex="-1" role="dialog"
	                         aria-labelledby="myModalLabel" aria-hidden="true">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="item franja-contactanosd">
	    <div class="carousel-caption" style="background-color: transparent;top:0px;">
	        <div class="span6 columnaHoja">
	            <div class="submenuNosotros">
	                <ul class="nav nav-tabs" id="opciones">
	                    <li onclick="$('#btn-oferta').click();"><a href="#">Oferta Laboral </a></li>
	                    <li><span class="linea-division"></span></li>
	                    <li class="active"><a href="#" onclick="$('#btn-hoja').click();">Hoja de Vida </a>
	                    </li>
	                </ul>
	            </div>
	            <h2 class="tituloHoja alinear-izquierda">HOJA DE VIDA</h2>
	            <div class="tab-content" style="width:100%;">
	                <div class="tab-pane active columnaContactanos">
	                    <form id="contactoHoja">
	                        <input type="text" class="hoja-nombre" style="margin-left: 20px;"
	                               placeholder="Nombres*" id="nombres" name="nombres"/>
	                        <input type="text" class="hoja-email" style="margin-left: 20px;"
	                               placeholder="Email*" id="email2" name="email2"/>
	                        <input type="text" class="hoja-celular" style="margin-left: 20px;"
	                               placeholder="Teléfono celular*" id="celular" name="celular"
	                               maxlength="10"/>
	                        <input type="hidden" style="margin-left: 20px;" placeholder="" id="campo_id"
	                               name="campo_id"/>
	
	                        <div class="btn-group display-block alinearDropdown1"
	                             style="margin-left:30px;margin-top: 0px;">
	                            <button id="option_campo" class="btn opcionDropdown" id="campo" name="campo"
	                                    data-toggle="dropdown">Área Profesional
	                            </button>
	                            <button class="btn dropdown-toggle" data-toggle="dropdown">
	                                <span class="caret flecha-drop"></span>
	                            </button>
	                            <ul id="select_campo" class="dropdown-menu">
	                                <?php
	                                for ($x = 1; $x < count($campos); $x++) {
	                                    ?>
	                                    <li><a id="campo_<?= $x ?>" tabindex="-1"
	                                           href="#"><?= $campos[$x] ?></a></li>
	                                <?php } ?>
	                            </ul>
	                        </div>
	                        <script>
	                            $('#select_campo li a').click(function (event) {
	                                event.preventDefault();
	                                var cargo = $.trim($('#' + this.id).html());
	                                $("#campo_id").val(this.id);
	                                $('#option_campo').html("" + cargo);
	                            });
	                        </script>
	                        
	                        <div class="linea-contactanos hoja1"></div>
	                        <input type="text" class="hoja-apellido" placeholder="Apellido*" id="apellido" name="apellido"/>
	                        <input type="text" class="hoja-ciudad" placeholder="Ciudad*" id="ciudad2" name="ciudad2"/>
	                        <input type="text" class="hoja-telefono" placeholder="Teléfono fijo*" id="telefono2" name="telefono2" maxlength="10"/>
	                        <input type="hidden" placeholder="" id="cargo_id" name="cargo_id"/>
	                        <div class="btn-group display-block alinearDropdown2"
	                             style="margin-left:30px;margin-top: 0px;">
	                            <button id="option_cargo" class="btn opcionDropdown" id="cargo" name="cargo" data-toggle="dropdown">Cargo Aplicar</button>
	                            <button class="btn dropdown-toggle" data-toggle="dropdown">
	                                <span class="caret flecha-drop"></span>
	                            </button>
	                            <ul id="select_cargo" class="dropdown-menu">
	                                <?php
	                                for ($x = 1; $x < count($cargos); $x++) {
	                                    ?>
	                                    <li><a id="cargo_<?= $x ?>" tabindex="-1"
	                                           href="#"><?= $cargos[$x] ?></a></li>
	                                <?php } ?>
	                            </ul>
	                        </div>
	                        <script>
	                            $('#select_cargo li a').click(function (event) {
	                                event.preventDefault();
	                                var cargo = $.trim($('#' + this.id).html());
	                                $("#cargo_id").val(this.id);
	                                $('#option_cargo').html("" + cargo);
	                            });
	                        </script>
	
	                        <div class="linea-contactanos hoja2"></div>
	                        <textarea class="textarea1 hoja-comentario" type="text" placeholder="Comentarios" id="mensaje2" name="mensaje2"
	                                  onclick="limpiarTexare('mensaje2')">Comentarios </textarea>
	                        <input type="text" class="hoja-archivo" placeholder=""
	                               style="width: 120px;margin-left: 20px;background-color: transparent;color:#ffffff;border:none;display:none;"
	                               id="foto" name="foto"/>
	
	                        <div class="hoja-adjuntar">
	                            <iframe src="<?= base_url() . 'index.php/welcome/archivo' ?>"
	                                    frameborder=0 height=31px marginheight=0 marginwidth=0 width=145"
	                                    class="upload " scrolling="no"
	                                    style="overflow:hidden;color:#ffffff;">
	                            </iframe>
	                        </div>
	
	                        <input type="submit" class="enviar enviar-hoja" style="margin-top:-30px;"
	                               placeholder=" " value=" " id="btn-enviar-hoja"/>
	
	                    </form>
	                    <div class="textoHoja">
	                        Los campos que se encuentra con * deben ser llenados obligatoriamente.
	                    </div>
	                    <div class="procesoenvioHoja">
	                        Su hoja de vida se envió correctamente
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- PROVEEDORES -->
	<div class="item franja-contactanosi">
	    <div class="carousel-caption" style="background-color: transparent;top:0px;">
	        <div class="span6 columnaPersonaje informacionContactos">
	            <h2>PROVEEDORES</h2>
	            <div class="textoForma texto-proveedor-contacto proveedor-normal">
	            	¿Deseas convertirte en proveedor? Envíanos tu solicitud llenando estos campos 
	            	y subiendo un archivo en PDF que contenga: Nombre de producto, Tipo de Producto 
	            	y una imagen correspondiente al mismo para que un representante de PRIMAX se contacte contigo. 
	            </div>	
	            
	            <div class="textoForma texto-proveedor-contacto proveedor-smart">
	            Conviértete en proveedor. Llena los datos y adjunta un PDF con nombre, tipo e imagen 
	            del producto y nos comunicaremos contigo.
	            </div>            
	        </div>
	        <div class="columnaContactanos">
	            <form id="contactoProveedores">            
	            <input type="text" class="input-proveedor" placeholder="Razón social*" id="razon-proveedor" name="razon-proveedor"/>
	            <input type="text" class="input-proveedor" placeholder="Correo electrónico*" id="mail-proveedor" name="mail-proveedor"/>	            
	            <input type="text" class="input-proveedor" placeholder="RUC*" id="ruc" name="ruc"/>
	            <input type="text" class="input-proveedor" placeholder="Registro sanitario*" id="resgitro-proveedor" name="resgitro-proveedor"/>	            
	            <input type="text" class="input-proveedor" placeholder="Dirección*" id="direccion-proveedor" name="direccion-proveedor"/>
	            <input type="text" class="input-proveedor" placeholder="Teléfono*" id="telefono-proveedor" name="telefono-proveedor"/>         	                
	              
	                <div class="hoja-adjuntar doc-proveedor" >
	                            <iframe src="<?= base_url() . 'index.php/welcome/archivoProveedores' ?>"
	                                    frameborder=0 height=31px marginheight=0 marginwidth=0 width=145"
	                                    class="upload " scrolling="no" style="overflow:hidden;color:#ffffff;">
	                            </iframe>
	                        </div>       
	                	                
	                <input type="text" class="archivo-adjuntado" placeholder="" id="archivo_proveedor" name="archivo_proveedor"/>	                
	                <input type="submit" class="enviar contacto-enviar btn-env-proveedor" placeholder=" " value=" " id="btnEnviar"/>
	            </form>
	            <div class="linea-contactanos"></div>
	            <div class="alertaFormulario">
	                Los campos que se encuentran con * deben ser llenados obligatoriamente.
	            </div>
	
	            <div class="procesoenvio">
	                Su mensaje fue enviado correctamente
	            </div>
	            <div class="icono-pdf" onclick="window.open('<?php echo base_url().'archivo/Requisitos-Proveedor-ATIMASA.pdf'?>')">
			            <div class="icono-flecha"></div>
			            <div class="icono-documento"></div>
			            <div class="texto-descarga">
			            OBSERVA NUESTRAS POLÍTICAS PARA PROVEEDORES.
			            </div>
		            </div>
	        </div>      
	    </div>
	</div>
	<!-- FIN PROVEEDORES -->
<!-- item 2   -->
</div>
	<a class="left carousel-control" href="#carruselContactanos" data-slide="prev"></a>
	<a class="right carousel-control" href="#carruselContactanos" data-slide="next"></a>
</div>
</div>
</div>
<div id="footer-promociones" class="navbar-wrapper2" style="display:block;">
    <div class="container">
        <div class="promociones-container">
            <div class="promociones-centrar">
                <div class="img-promocion">
                    <img class="icono-tienda-listo img-responsive "src="<?php echo base_url(); ?>imagenes/hoy-listo.png">
                </div>
                <div class="promoContenedorMobile">
                    <div class="flechaI"></div>
                    <div class="image_carousel">

                        <div id="foo2" class="foo3">
                        <?php 
                        foreach($novedades as $row){
                        ?>    <img id="<?php echo $row->id?>" data-img="<?="./".$row->foto_grande?>"
                                 rel="caroufredsel-6" title="<?=$row->nombre?>" data-link="<?php echo $row->uri?>"
                                 src="<?php echo "./".$row->foto_pequena?>"
                                 class="homegallery"
                                 onclick="ga('send', 'event', 'Promociones','click','<?=$row->nombre?>1');"/>                                 
                          <?php }?>                                  
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="flechad"></div>
                </div>
            </div>
        </div>

        <div class="promociones-container">
            <div class="promociones-centrar">
                <!--<a class="yt" href="http://www.youtube.com/user/PrimaxEcuador?feature=watch" target="_blank" ></a>-->
                <a class="fb" href="https://www.facebook.com/PrimaxEcuador" target="_blank"></a>
                
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">        
         <a class="fb2" href="https://www.facebook.com/PrimaxEcuador" target="_blank"></a>        
        <div class="logo-misiva" onclick="window.open('http://www.misiva.com.ec');"></div>
    </div>
</div>
<!-- /.container -->

<script src="js/ekko-lightbox.js"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function() {

                }
            });
        });
        //$("#youvideo").click();
    });
</script>

<script type="text/javascript">
    rules = [
        { name: 'nombre', display: 'Nombre', rules: 'required'},
        { name: 'ciudad', display: 'Ciudad', rules: 'required'},
        { name: 'telefono', display: 'Telefono', rules: 'required|numeric|max_length[10]'},
        { name: 'email', display: 'E-mail', rules: 'required|valid_email'},
        { name: 'sector', display: 'Sector de la ciudad', rules: 'required'},
        { name: 'mensaje', display: 'Mensaje', rules: 'required'}
    ];

    new FormValidator('contactoNormal', rules, function (errors, event) {
        for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {
            //$('#'+rules[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
        }
        if (errors.length > 0) {
            for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
                $('.alertaFormulario').html('Verifica que todos los campos con * estén ingresados.');
                $('#' + errors[i].id).css({ 'color': '#616161' });
            }
        }
        else {
            $('#btnEnviar').hide();
            $('.procesoenvio').show();
            $.ajax({
                type: "POST",
                url: "<?=base_url('index.php/welcome/contactoFormaNormal/')?>",
                data: $('#contactoNormal').serialize(),
                success: function (response) {
                    if (response == "1") {
                        $('.procesoenvio').hide();
                        $('#btnEnviar').show();

                        $('#nombre').val("");
                        $('#ciudad').val("");
                        $('#telefono').val("");
                        $('#email').val("");
                        $('#sector').val("");
                        $('#mensaje').val("");
                    }
                }
            });
        }
    });

    
    rulesProveedores = [
             { name: 'razon-proveedor', display: 'Razon Social', rules: 'required'},
             { name: 'ruc', display: 'Ruc', rules: 'required'},
             { name: 'telefono-proveedor', display: 'Telefono', rules: 'required|numeric|max_length[10]'},
             { name: 'mail-proveedor', display: 'E-mail', rules: 'required|valid_email'},
             { name: 'resgitro-proveedor', display: 'Registro sanitario', rules: 'required'},
             { name: 'archivo_proveedor',  display: 'Archivo', rules: 'required'},
             { name: 'direccion-proveedor', display: 'Direccion', rules: 'required'}
         ];    

         new FormValidator('contactoProveedores', rulesProveedores, function (errors, event) {
             for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {
                 //$('#'+rules[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
             }
             if (errors.length > 0) {
                 for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
                     $('.alertaFormulario').html('Verifica que todos los campos con * estén ingresados.');
                     $('#' + errors[i].id).css({ 'color': '#616161' });
                 }
             }
             else {
                 $('.btn-env-proveedor').hide();
                 $('.procesoenvio').show();
                 $.ajax({
                     type: "POST",
                     url: "<?=base_url('index.php/welcome/contactoFormaProveedores/')?>",
                     data: $('#contactoProveedores').serialize(),
                     success: function (response) {
                         if (response == "1") {
                             $('.procesoenvio').hide();
                             $('.btn-env-proveedor').show();                             
                             $('#contactoProveedores').each (function(){
                            	   this.reset();
                            	 }); 
                         }
                     }
                 });
             }
         });


    

    reglas = [
        { name: 'nombres', display: 'Nombre', rules: 'required'},
        { name: 'apellido', display: 'Apellide', rules: 'required'},
        { name: 'ciudad2', display: 'Ciudad', rules: 'required'},
        { name: 'telefono2', display: 'Telefono', rules: 'required|numeric|max_length[10]'},
        { name: 'celular', display: 'Celular', rules: 'required|numeric|max_length[10]'},
        { name: 'email2', display: 'E-mail', rules: 'required|valid_email'},
        //{ name: 'cargo',    display: 'Cargo Profesional', rules: 'required'},
        //{ name: 'campo',    display: 'Campo Laboral', rules: 'required'},
       { name: 'foto',  display: 'Archivo', rules: 'required'},
        { name: 'mensaje2', display: 'Mensaje', rules: 'required'}
    ];

    new FormValidator('contactoHoja', reglas, function (errors, event) {
        for (var i = 0 , rulesLength = reglas.length; i < rulesLength; i++) {
            //$('#'+reglas[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
        }
        if (errors.length > 0) {
            for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
                $('.textoHoja').html('Verifica que todos los campos con * estén ingresados.');
                $('#' + errors[i].id).css({ 'color': '#616161' });

                if(errors[i].id=="foto")
                    alert("Error...Archibo no cargada, se recuerda que se aceptan archivos doc, docx, pdf");
            }
        }
        else {
            $('#btn-enviar-hoja').hide();
            $('.procesoenvioHoja').show();
            $.ajax({
                type: "POST",
                url: "<?=base_url('index.php/welcome/contactoFormaHoja/')?>",
                data: $('#contactoHoja').serialize(),
                success: function (response) {
                    if (response == "1") {
                        $('.procesoenvioHoja').hide();
                        $('#btn-enviar-hoja').show();
                        $('#nombres').val("");
                        $('#ciudad').val("");
                        $('#telefono').val("");
                        $('#email').val("");
                        $('#sector').val("");
                        $('#mensaje').val("");
                        $('#nombres').val("");
                        $('#apellido').val("");
                        $('#ciudad2').val("");
                        $('#telefono2').val("");
                        $('#celular').val("");
                        $('#email2').val("");
                        $('#foto').val("");
                        $('#mensaje2').val("");
                    }
                }
            });
        }
    });

    function cargarDepartamentos(id, contenedor) {
        $("#" + contenedor).load("index.php/welcome/resultadoDepartamento/" + id);
    };

    function verInformacion(id, contenedor) {
        $("#" + contenedor).load("index.php/welcome/resultadoOferta/" + id);
    }

    function aplicarOferta(cargo_id, campo_id) {
        $('#btn-hoja').click();
        $('#cargo_' + cargo_id).click();
        $('#campo_' + campo_id).click();
    }
    ;

    function limpiarTexare(id) {
        $('#' + id).val("");
    };

    function llamarBanner(){
		$("#60").click();
    }
   $("#resultadosDepartamentos").load("index.php/welcome/allOferta");
   $("#resultadosPrecios").load("index.php/welcome/allPrecios");
   


    /**************************************************/
     getInformacion(<?=$menuopcion?>);
	

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="./js/maps.js"></script>

</body>
</html>
