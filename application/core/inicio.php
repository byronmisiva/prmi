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
    <link href="./css/lubricantes.css?frefresh=4532321" rel="stylesheet"/>
    <link href="./css/tiendas.css?frefresh=45398945" rel="stylesheet"/>

    <link href="./css/servicios.css" rel="stylesheet"/>
    <link href="./css/encuentranos.css" rel="stylesheet"/>
    <link href="./css/contactanos.css" rel="stylesheet" />

     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



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
    	var accion="<?=base_url()?>";    
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
<body style="background:#EAEAEA;">
<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper" style="overflow: hidden;">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" id="menu">
                    <img src="./imagenes/header/smartphone-menu.png"/>
                </button>
                <img src="./imagenes/header/hader-logo-primax.png"
                     onclick="movimiento('row_home');verificarFooter(1);" class="logo-superior" />

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
        <div id="imagenHome"></div>
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
                            <div class="grupo-primax"></div>
                        </div>
                        <div class="columnaInformacion">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li id="misionmenu1"><a href="#" >Misión </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li id="visionmenu1"><a href="#" >Visión </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li id="valoresmenu1"><a href="#" > Valores </a></li>
                                </ul>
                            </div>
                            <div class="row tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenido">
                                        Nacimos con una clara orientación a satisfacer las necesidades de cada
                                        uno de los miles de clientes que atendemos día a día, llegando a ellos
                                        a través de nuestras Estaciones de Servicio a nivel nacional.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item fondo-seccioni">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <div class="nosotroscontrolI"></div>
                        <div class="nosotroscontrolD"></div>
                        <div class="span6 columnaPersonaje">
                            <div class="personaje1"></div>
                        </div>
                        <div class="columnaInformacion">
                            <div class="span5 submenuNosotros">
                                <ul class="nav nav-tabs" id="opciones">
                                    <li class="active" id="misionmenu"><a href="#" >Misión </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li id="visionmenu"><a href="#" >Visión </a></li>
                                    <li><span class="linea-division"></span></li>
                                    <li id="valoresmenu"><a href="#" > Valores </a></li>
                                </ul>
                            </div>


                            <div class="tab-content">
                                <div class="tab-pane active">

                                    <div id="nosotros">
                                        <div class="nosotros-content">
                                            <div class="nosotrosItems " id="">
                                                <div class="nosotrosItem " id="">
                                                    <H2>MISIÓN</H2>
                                                    Somos una empresa comercializadora de derivados de petróleos y productos de
                                                    conveniencia cuya misión es exceder las expectativas de nuestros clientes,
                                                    colaboradores, socios estratégicos y accionistas a través de un excelente
                                                    servicio, la calidad de nuestros productos y altos estándares  en nuestras
                                                    Estaciones de Servicio y negocios aliados, cumpliendo las leyes y cuidando al medio ambiente.
                                                </div>
                                                <div class="nosotrosItem " id="">
                                                    <h2>VISIÓN</h2>
                                                    Ser reconocidos por unir caminos a través  de una
                                                    experiencia de excelencia que facilita la vida,
                                                    motivada por el compromiso de nuestra gente y el orgullo de pertenecer a PRIMAX.
                                                </div>
                                                <div class="nosotrosItem " id="">
                                                    <h2 class="textoValores">VALORES</h2>
                                                    <ul class="textoContenido3">
                                                        <li>Respeto</li>
                                                        <li>Transparencia</li>
                                                        <li>Trabajo en equipo</li>
                                                        <li>Innovación</li>
                                                        <li>Espíritu de servicio</li>
                                                        <li>Energía y Pasión</li>
                                                    </ul>
                                                </div>


                                            </div>

                                        </div>

                                    </div>



                                    <div class="indicador2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 2   -->


                <!-- item 3 -->

                <div class="item fondo-secciond">
                    <div class="carousel-caption">
                        <div id="timeline">
                            <div class="timeline-content">
                                <div class="fechas fechas_fondo" id="TimeNormal2 historia_carrousel">
                                    <div>
                                        <button class="btn-fechas fecha" title="Compra Shell Perú."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                class="encendido" src="./imagenes/nosotros/nosotros-historia-2004.png"/>
                                        </button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Nace PRIMAX Perú."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2005.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Compra de Red de E/S Shell Ecuador."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2006.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Inauguración de la primera estación con imagen PRIMAX y tienda Listo!"
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2007-sep.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Lanzamiento mediático de marca PRIMAX en Ecuador."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2007-nov.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="PRIMAX Ecuador alcanza el 4to. lugar en Market Share."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2008-ene.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Compra del negocio de combustible, lubricantes, venta a la industria y sector aéreo a Repsol Ecuador."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2008-sep.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Se otorga a PRIMAX los premios Gran Effie y Effie de Oro por la mejor campaña de lanzamiento."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2008-dic.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="PRIMAX se convierte en la segunda comercializadora privada más grande del Ecuador."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2009.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Lanzamiento de la campaña “Fórmula G- Prix”."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2010.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Lanzamiento de Listo! Gourmet, oferta propia de comida rápida"
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2011.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Lanzamiento de campaña “Super G-Prix”"
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2012.png"/></button>
                                    </div>
                                    <div>
                                        <button class="btn-fechas fecha" title="Grupo Romero de Perú adquiere el 100% de las acciones de PRIMAX en Ecuador."
                                                data-placement="bottom" data-toggle="tooltip" type="button"><img
                                                src="./imagenes/nosotros/nosotros-historia-2013.png"/></button>
                                    </div>


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
                        <div class="columnaInformacion">
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <div class="textoContenido presenciaInternacional">
                                        <h2 id="presenciaTexto">PRESENCIA INTERNACIONAL</h2>
                                        Contamos con presencia internacional en Perú y Ecuador con
                                        más de 450 Estaciones de Servicio para satisfacer las necesidades
                                        de los negocios de combustible, lubricantes, gas e industria.
                                    </div>
                                    <div class="indicador3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
        </div>
    </div>
</div>
<!-- inicio-->

<!-- SECCION Beneficios -->
<!-- SECCION 3 -->
<div class="row fondoGprix" style="overflow: hidden;">
    <div class="container">
        <div class="carousel slide" id="carruselSuper">
            <div class="tituloNosotros beneficio-seccion">
                <h1>Super G-Prix</h1>
                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs" id="menuBeneficios">
                        <li id="btn-beneficios" style="display: none;" data-target="#carruselSuper" data-slide-to="0" class="active"><a href="#" data-toggle="tab">Super G-Prix</a>
                        </li>
                        <li style="display: none;"><span class="linea-division"></span></li>
                        <li data-target="#carruselSuper" data-slide-to="1"><a href="#" data-toggle="tab">Beneficios</a></li>
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
                        <div class="columnaInformacion">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="textoBeneficio">
                                        <H2></H2>
                                        Super G-Prix es la única gasolina aditivada del mercado, con aditivos
                                        desarrollados en laboratorios alemanes <img src="./imagenes/g-prix/alemania.jpg"  />
                                        y americanos, <img src="./imagenes/g-prix/usa.jpg" />
                                        que hacen que el motor del vehículo esté siempre limpio y protegido, respondiendo al 100% y ahorrando costos de mantenimiento.<br>
										<!-- Super G-Prix mejora la calidad del combustible ya que los aditivos tienen un impacto significativo en las características críticas del combustible. <br> -->
										<!-- Los aditivos tienen tres funciones básicas: <br>
										1. Corregir las deficiencias que se pueden encontrar dentro del combustible base.<br>
										2. Mejorar las características de desempeño del combustible.<br>
										3. Mejorar o corregir las características de desempeño de los motores.<br> -->
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
                                    <div class="aditivos">
                                        <div class="beneficio3">
                                            <div class="imagenbeneficio1"></div>
                                            <div class="linea1" onclick="desplegar(1)"></div>
                                            <div class="textoBeneficios texto1">
                                                <h2 class="titulobeneficio titulo1">DETERGENTES:</h2>
                                                Remueven depósitos en el motor.
                                            </div>

                                        </div>
                                        <div class="division-caracteristicas"></div>
                                        <div class="beneficio2">
                                            <div class="imagenbeneficio2"></div>
                                            <div class="linea2" onclick="desplegar(2)"></div>
                                            <div class="textoBeneficios texto2">
                                                <h2 class="titulobeneficio">DISPERSANTES:</h2>
                                                Evitan la formación de depósitos en el motor.
                                            </div>

                                        </div>
                                        <div class="division-caracteristicas"></div>
                                        <div class="beneficio1">
                                            <div class="imagenbeneficio3"></div>
                                            <div class="linea1" onclick="desplegar(3)"></div>
                                            <div class="textoBeneficios texto3">
                                                <h2 class="titulobeneficio">INHIBIDORES:</h2>
                                                Evitan que el motor se dañe por la acción de los gases de la combustión.
                                            </div>
                                        </div>
                                    </div>
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
<!-- inicio-->
<!-- SECCION Tiendas -->

<div class="row fondoTiendas" style="overflow: hidden;">
    <div class="container">
        <div class="carousel slide" id="carruselTiendas">
            <div class="tituloNosotros tiendas-seccion">
                <h1>Tiendas Listo!</h1>

                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs" id="menuBeneficios">
                        <li id="btn-tiendas" style="display:none;" data-target="#carruselTiendas" data-slide-to="0"
                            class="active"><a href="#" data-toggle="tab">Intro</a></li>
                        <li id="btn-menu" data-target="#carruselTiendas" data-slide-to="1"><a href="#" data-toggle="tab">Menú</a></li>
                        <li><span class="linea-division"></span></li>
                        <li data-target="#carruselTiendas" data-slide-to="2"><a href="#"
                                                                                data-toggle="tab">Promociones</a>
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
                        <div class="columnaInformacion">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="iconosTiendas" onclick="$('#btn-menu').click();">
                                    <div class="posicion-tiendas"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 1 -->
                <div class="item franja-tiendasi">
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
                        <div class="columnaInformacion columna-opciones-menu">
                            <div class="row tab-content">
                                <div class="tab-pane active ">
                                    <div class="contenedor-Menu">
                                        <div class="opcion" onclick="getInformacion('id1');">
                                            <div class="menu1"></div>
                                            <div class="nombre">Cubano</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id2');">
                                            <div class="menu2"></div>
                                            <div class="nombre">Mixto</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id3');">
                                            <div class="menu3"></div>
                                            <div class="nombre">Lomo y tocino</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id4');">
                                            <div class="menu4"></div>
                                            <div class="nombre">Italiano</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id5');">
                                            <div class="menu5"></div>
                                            <div class="nombre">Omelette</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id6');">
                                            <div class="menu6"></div>
                                            <div class="nombre">Pollo césar</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id7');">
                                            <div class="menu7"></div>
                                            <div class="nombre">Hot dog</div>
                                        </div>
                                        <div class="opcion" onclick="getInformacion('id8');">
                                            <div class="menu8"></div>
                                            <div class="nombre">Cheese dog</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="item franja-tiendasd">
                    <div class="carousel-caption" style="background-color: transparent;top:0px;">
                        <!-- <img src="" alt=""> -->

                        <div class="contenedor-promociones promociones-content">
                            <div class="fechas" id="TimeNormal2 historia_carrousel">
                                <div><a href="#myModa1" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/cineencasa-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa2" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/empanada-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa3" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/empanadacapu-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa4" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/ensaladayte-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa5" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/frozen-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa6" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/glaceado-low.jpg"/></a>
                                </div>

                                <div><a href="#myModa7" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/guitig-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa8" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/hotdogpepsi-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa9" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/lasagna-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa10" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/pulseras-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa11" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/purewater-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa12" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/ruffles-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa13" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/sanduche1-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa14" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/sanduche2-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa15" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/skittles-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa16" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/tigreton-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa17" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/Twizzlers-low.jpg"/></a>
                                </div>
                                <div><a href="#myModa18" role="button" class="promocion fecha" data-toggle="modal"><img
                                            src="./imagenes/tiendaslisto/promociones/v220-low.jpg"/></a>
                                </div>
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
            </div>

            <a class="left carousel-control" href="#carruselTiendas" data-slide="prev"></a>
            <a class="right carousel-control" href="#carruselTiendas" data-slide="next"></a>

        </div>

    </div>
</div>
<!-- INICIO SERVICIOS -->
<!-- SECCION 5 -->
<div class="row fondoServicios">
    <div class="container">
        <div class="carousel slide" id="carruselServicios">
            <div class="tituloNosotros servicios-seccion">
                <h1>Servicios Corporativos</h1>
                <div class="alinearmenuNosotros">
                    <ul class="nav nav-tabs menuServicios" id="menuServicios">
                        <li data-target="#carruselServicios" data-slide-to="0" class="active"><a href="#" data-toggle="tab">PRIMAX
                                Card Plus</a></li>
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
                                        <h2>PRIMAX CARD PLUS</h2>
                                        PRIMAX Card Plus, es una tarjeta de consumo 
                                        electrónica con la cual podrás obtener una línea 
                                        de crédito disponible para el abastecimiento de 
                                        combustible y productos de la red PRIMAX; la misma 
                                        se alinea a un sistema de control, el cual garantiza 
                                        seguridad y control a su flota en más de 50 estaciones 
                                        de servicio a nivel nacional.<br><br/>
                                        <div class="ingresar">
                                           Para más información ingresar a :
                                            <div class="icocard" onclick="window.open('http://200.24.202.131/app.php/#!inicio');"></div>
                                        </div>
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
                                        <h2>COMBUSTIBLES INDUSTRIALES</h2>
                                        COMBUSTIBLES INDUSTRIALES OILTRADER es la empresa comercializadora de combustible de PRIMAX para la 
                                        industria. Se encuentra presente desde 1998 ocupando el segundo lugar de participación de mercado.
										<br>
										Fortalezas:<br>
										<ul>
											<li>Logística y transporte de combustible está certificada por la ARCH.</li> 
											<li>Laboratorio de control de calidad de combustible para asegurar la calidad de los mismos.</li>
										</ul>
                                       
                                    </div>
                                    <!-- <div class="indicador-combustible"></div> -->

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
	                            <?php foreach( $provincias  as $key => $provincia ){?>
	                            <li><a id="provincia_<?=$key; ?>" tabindex="-1"
	                                   href="#"><?=$provincia->provincia?> </a></li>
	                            <?php }?>
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
	                        <button type="button" class="btn btn-servicios servicio1 disabled" disabled="disabled" id="gasolinerasP" ></button>
	                        <div class="linea-menu alinear"></div>
	                        <button type="button" class="btn btn-servicios servicio2 disabled " disabled="disabled" id="tiendasP"></button>
	                        <div class="linea-menu alinear"></div>
	                        <button type="button" class="btn btn-servicios servicio3 disabled" disabled="disabled" id="lubricantesP" ></button>
	                    </div>
                    </div>
                </div>
            </div>

            <div class="columnaInformacion columnaMapa" >
                <div class="mapa-content" >
                	<div id="map">
                    	<div id="map_canvas"></div>
                 	</div>
                <div class="map-puntero">
                	<div class="puntero">Selecciona el PIN de PRIMAX para ir a la estación que necesitas.</div>
                </div>
                <div class="linea-menu alinear"></div>
                <div class="map-ubicate">
                	<div class="ubicate">Ubicate en el mapa con un click y selecciona el PIN de PRIMAX de la estación que necesitas.</div>
                </div>

            </div>
        </div>
    </div>
</div>


    <div id="myModa1" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="contenedor-Modal">
            <div data-dismiss="modal" aria-hidden="true" class="equis"></div>
            <img
                src="./imagenes/tiendaslisto/promociones/cineencasa-high.jpg"
                width="100%"/>
        </div>
    </div>
    <div id="myModa2" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        
        <div class="contenedor-Modal"><div data-dismiss="modal" aria-hidden="true" class="equis"></div>
            <img
                src="./imagenes/tiendaslisto/promociones/empanada-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa3" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/empanadacapu-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa4" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/ensaladayte-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa5" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/frozen-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa6" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/glaceado-high.jpg"
                width="100%"/>
        </div>
    </div>
    <div id="myModa7" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/guitig-high.jpg"
                width="100%"/>
        </div>
    </div>
    <div id="myModa8" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/hotdogpepsi-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa9" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/lasagna-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa10" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/pulseras-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa11" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/purewater-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa12" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/ruffles-high.jpg"
                width="100%"/>
        </div>
    </div>
    <div id="myModa13" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/sanduche1-high.jpg"
                width="100%"/>
        </div>
    </div>
    <div id="myModa14" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/sanduche2-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa15" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/skittles-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa16" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/tigreton-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa17" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/Twizzlers-high.jpg"
                width="100%"/>
        </div>
    </div>

    <div id="myModa18" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="contenedor-Modal">
	<div data-dismiss="modal" aria-hidden="true" class="equis"></div>
	<img
                src="./imagenes/tiendaslisto/promociones/v220-high.jpg"
                width="100%"/>
        </div>
    </div>

</div>
<!-- fin  -->
<!--CONTACTANOS -->
<div class="row fondoContactanos">
			<div  class="container"  >		
			   <div class="carousel slide" id="carruselContactanos" >				
				<div class="tituloNosotros contactos-seccion" >
					<h1>Contáctanos</h1>
					<div class="alinearmenuNosotros">
					<ul class="nav nav-tabs"  id="menuNosotros">
						<li id="btn-formaContacto" data-target="#carruselContactanos" data-slide-to="0" class="active"><a href="#" data-toggle="tab" >Forma de Contacto </a></li>
						<li ><span class="linea-division"></span></li>
						<li id="btn-oferta" data-target="#carruselContactanos" data-slide-to="1" ><a href="#" data-toggle="tab">Trabaja con Nosotros </a></li>
						<li  style="display:none;" data-target="#carruselContactanos" data-slide-to="1"><a  href="#" data-toggle="tab">Oferta Laboral</a></li>						
						<li id="btn-hoja"  style="display:none;" data-target="#carruselContactanos" data-slide-to="2"><a  href="#" data-toggle="tab">Hoja de Vida</a></li>
					</ul>
					</div>	 									
				</div>  
                <div class="carousel-inner"  >                
                 <div class="item active franja-contactanosd" >                 
  					<div class="carousel-caption" style="background-color: transparent;top:0px;">                  
                    <div class="span6 columnaPersonaje informacionContactos"  >					
						<h2>FORMA DE CONTACTO</h2>
						<div class="textoForma">
						Si tienes alguna consulta o sugerencia sobre nuestros 
						productos y servicios, puedes llenar este formulario 
						y un representante de PRIMAX se pondrá en contacto contigo.		
                        </div>  
					</div>
					<div class="columnaContactanos">
						<form id="contactoNormal" >
								<input class="contacto-nombre" type="text" value="" placeholder="Nombre y Apellido*" id="nombre" name="nombre" />
								<input class="contacto-email" type="text" value="" placeholder="Correo electrónico*" id="email" name="email" />
								<input class="contacto-ciudad" type="text" value="" placeholder="Ciudad*" id="ciudad" name="ciudad" />
								<textarea  class="textarea1 contacto-mensaje" type="text"  value=""placeholder="Mensaje" id="mensaje" name="mensaje"   > </textarea>								
								<input class="contacto-telefono" type="text" value="" placeholder="Teléfono*" id="telefono" name="telefono" maxlength="10" />							
								<input class="contacto-sector" type="text" value="" placeholder="Sector de la ciudad" id="sector" name="sector" />
								<input type="submit" class="enviar contacto-enviar" placeholder=" " value=" " id="btnEnviar" />
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
                 
                  <div class="item franja-contactanosi" >                  
  					<div class="carousel-caption" style="background-color: transparent;top:0px;">                  
                    <div class="span6 columnaPersonaje"  > 
						<h2 class="tituloHoja">OFERTA LABORAL</h2>
						<div class="departamento">
							<div class="btn-group display-block alinearDropdown" >
								<button id="option_depto" class="btn opcionDropdown" id="cargo" name="cargo" data-toggle="dropdown">Departamento</button>
								<button class="btn dropdown-toggle" data-toggle="dropdown">
									<span class="caret flecha-drop"></span>
								</button>
								<ul id="select_depto" class="dropdown-menu">
									<?php 
						  			for( $x=1;$x<count($cargos) ;$x++){?>
					    			<li><a id="<?=$x?>" tabindex="-1" href="#" ><?=$cargos[$x]?></a></li>
						    		<?php }?>		
								</ul>
							</div>
							<script>
							$('#select_depto li a').click(function(event) {
								event.preventDefault();
								var depto = $.trim($('#' + this.id).html());
								cargarDepartamentos(this.id,'resultadosDepartamentos');
								$('#option_depto').html("" + depto);
							});
								</script>
						</div>	
						<div class="mensajeDepartamento"></div>
					</div>
					
					
                 
                    <div class="columnaInformacion columnaListaOferta"  >													
						<div class="span5 submenuNosotros subcontactanos">		
							<ul class="nav nav-tabs" id="opciones" >
								<li class="active"><a href="#"  >Oferta Laboral </a></li>
								<li ><span class="linea-division"></span></li>									
								<li ><a href="#"  onclick="$('#btn-hoja').click();" >Hoja de Vida </a></li>										
							</ul>
						</div>																						
						<div class="row tab-content">
						<div class="tab-pane active"  >
							<div id="resultadosDepartamentos"></div>								
							<div id="detalleOferta" class="modal hide fade" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">								  
								</div>
						</div>									
						</div>	
                     </div>                      
                  </div>  
                  </div>
                  
                  <div class="item franja-contactanosd" >                  
  					<div class="carousel-caption" style="background-color: transparent;top:0px;">
                    <div class="span6 columnaHoja"  >						
								<div class="submenuNosotros">		
									<ul class="nav nav-tabs" id="opciones" >
										<li onclick="$('#btn-oferta').click();"><a href="#"  >Oferta Laboral </a></li>
										<li ><span class="linea-division"></span></li>									
										<li class="active"><a href="#"  onclick="$('#btn-hoja').click();" >Hoja de Vida </a></li>										
									</ul>
								</div>	
								<h2 class="tituloHoja">HOJA DE VIDA</h2>	
								<div class="tab-content" style="width:100%;">									
									<div class="tab-pane active columnaContactanos" >																										
									<form id="contactoHoja" > 
											<input type="text" class="hoja-nombre" style="margin-left: 20px;" placeholder="Nombres*" id="nombres" name="nombres" />
											<input type="text" class="hoja-email" style="margin-left: 20px;" placeholder="Email*" id="email2" name="email2" />
											<input type="text" class="hoja-celular" style="margin-left: 20px;" placeholder="Teléfono celular*" id="celular" name="celular" maxlength="10" />
											<input type="hidden"  style="margin-left: 20px;" placeholder="" id="campo_id" name="campo_id" />											
											 <div class="btn-group display-block alinearDropdown1" style="margin-left:30px;margin-top: 0px;">
						                        <button id="option_campo" class="btn opcionDropdown" id="campo" name="campo" data-toggle="dropdown">Campo Aplicar</button>
						                        <button class="btn dropdown-toggle" data-toggle="dropdown">
						                            <span class="caret flecha-drop"></span>
						                        </button>
						                        <ul id="select_campo" class="dropdown-menu">
						                            <?php 
											  			for( $x=1;$x<count($campos) ;$x++){?>
											    			<li><a id="campo_<?=$x?>" tabindex="-1" href="#" ><?=$campos[$x]?></a></li>
											    		<?php }?>						
						                        </ul>
						                    </div>  
											<script>
												$('#select_campo li a').click(	function(event) {
													event.preventDefault();
													var cargo = $.trim($('#' + this.id).html());
													$("#campo_id").val(this.id);
													$('#option_campo').html("" + cargo);
												});
										    </script>
										
										
										<div class="linea-contactanos hoja1"></div>
										
											<input type="text" class="hoja-apellido"  placeholder="Apellido*" id="apellido" name="apellido"/>
											<input type="text" class="hoja-ciudad"  placeholder="Ciudad*" id="ciudad2" name="ciudad2" />
											<input type="text" class="hoja-telefono"  placeholder="Teléfono fijo*" id="telefono2" name="telefono2" maxlength="10" />
											<input type="hidden"   placeholder="" id="cargo_id" name="cargo_id" />											
											<div class="btn-group display-block alinearDropdown2" style="margin-left:30px;margin-top: 0px;">
						                        <button id="option_cargo" class="btn opcionDropdown" id="cargo" name="cargo" data-toggle="dropdown">Cargo Aplicar</button>
						                        <button class="btn dropdown-toggle" data-toggle="dropdown">
						                            <span class="caret flecha-drop"></span>
						                        </button>
						                        <ul id="select_cargo" class="dropdown-menu">
						                            <?php 
											  			for( $x=1;$x<count($cargos) ;$x++){?>
											    			<li><a id="cargo_<?=$x?>" tabindex="-1" href="#" ><?=$cargos[$x]?></a></li>
											    		<?php }?>						
						                        </ul> 
						                    </div> 
										<script>
											$('#select_cargo li a').click(	function(event) {
												event.preventDefault();
												var cargo = $.trim($('#' + this.id).html());
												$("#cargo_id").val(this.id);
												$('#option_cargo').html("" + cargo);
											});
										</script>
										
										<div class="linea-contactanos hoja2"></div>
										 
											<textarea  class="textarea1 hoja-comentario" type="text" placeholder="Comentarios" id="mensaje2" name="mensaje2" onclick="limpiarTexare('mensaje2')">Comentarios </textarea>
											<input type="text" class="hoja-archivo" placeholder="Nombre de archivo*"  style="width: 100px;margin-left: 20px;" id="foto" name="foto"/>   
											<div class="hoja-adjuntar" style="margin-top:-1px;margin-left:140px;position: relative;">  
												<iframe src ="<?=base_url().'welcome/archivo'?>" 
												frameborder=0 height=31px marginheight=0 marginwidth=0 width=145" class="upload " scrolling="no" style="overflow:hidden;color:#ffffff;">
												</iframe>
											</div> 
										
										<input type="submit" class="enviar enviar-hoja" style="margin-top:-30px;" placeholder=" " value=" " id="btn-enviar-hoja" />
										
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
                 <!-- item 2   -->                        
                </div>                
               <a class="left carousel-control"  href="#carruselContactanos" data-slide="prev"></a>
               <a class="right carousel-control" href="#carruselContactanos" data-slide="next"></a>                
              </div>
			</div>		
		
	</div> 	

<div id="footer-promociones" class="navbar-wrapper2" style="display:block;">
    <div class="container">
        <div class="promociones-container">
            <div class="promociones-centrar">
                <div class="img-promocion">
                    Hoy en PRIMAX
                </div>
                <div class="promoContenedorMobile">
                    <div class="flechaI"></div>
                    <div class="image_carousel">


                        <div id="foo2" class="foo3">
                            <img data-img="./imagenes/tiendaslisto/promociones/navicombo1-high.jpg"
                                 rel="caroufredsel-6" title="" data-link="" src="./imagenes/tiendaslisto/promociones/navicombo1-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/navicombo2-high.jpg"
                                 rel="caroufredsel-6" title="" data-link="" src="./imagenes/tiendaslisto/promociones/navicombo2-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/novedades/promo-tanquea-high.jpg"
                                 rel="caroufredsel-6" title="ganadores" data-link="http://www.google.com" src="./imagenes/tiendaslisto/novedades/promo-tanquea-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/cineencasa-high.jpg"
                                 title="" data-link="" src="./imagenes/tiendaslisto/promociones/cineencasa-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/empanada-high.jpg"
                                 rel="caroufredsel-6" title="" data-link="" src="./imagenes/tiendaslisto/promociones/empanada-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/empanadacapu-high.jpg"
                                 rel="caroufredsel-6" title="" data-link="" src="./imagenes/tiendaslisto/promociones/empanadacapu-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/ensaladayte-high.jpg"
                                 rel="caroufredsel-6" title="" data-link="" src="./imagenes/tiendaslisto/promociones/ensaladayte-low.jpg"
                                 class="homegallery">
                            <img data-img="./imagenes/tiendaslisto/promociones/frozen-high.jpg"
                                 title="" data-link="" src="./imagenes/tiendaslisto/promociones/frozen-low.jpg"
                                 class="homegallery">                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="flechad"></div>
                </div>
            </div>
        </div>

        <div class="promociones-container">
            <div class="promociones-centrar">
                <a class="yt" href="#"></a>
                <a class="fb" href="#"></a>
                <a class="tw" href="#"></a>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <a class="yt2" href="#"></a>
        <a class="fb2" href="#"></a>
        <a class="tw2" href="#"></a>
        <div class="logo-misiva" onclick="window.open('http://www.misiva.com.ec');"></div>
    </div>
</div>
<!-- /.container -->

<script type="text/javascript">	    
	rules = [ { name: 'nombre', display: 'Nombre', rules: 'required'},
	      	{ name: 'ciudad', display: 'Ciudad', rules: 'required'},
          	{ name: 'telefono', display: 'Telefono', rules: 'required'},
          	{ name: 'email', display: 'E-mail', rules: 'required'},
          	{ name: 'sector', display: 'Sector de la ciudad', rules: 'required'},
          	{ name: 'mensaje', display: 'Mensaje', rules: 'required'} ];
	
	new FormValidator('contactoNormal',rules, function(errors, event) {				
		for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {		
	        //$('#'+rules[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
	    }
	    if ( errors.length > 0 ) {        
	        for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
	            $('#'+errors[i].id).css( { 'color': 'red' } );
	        }
	    }
	    else{	
		    $('#btnEnviar').hide();
		    $('.procesoenvio').show();		    		    	 
	    	$.ajax({
	    		  type: "POST",  
				  url:"<?=base_url('welcome/contactoFormaNormal/')?>",  
				  data: $('#contactoNormal').serialize(),
				  success: function( response ) {		
		    		if(response=="1"){
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

	reglas = [  { name: 'nombres',  display: 'Nombre', rules: 'required'},
	            { name: 'apellido', display: 'Apellide', rules: 'required'},
		      	{ name: 'ciudad2',   display: 'Ciudad', rules: 'required'},
	          	{ name: 'telefono2', display: 'Telefono', rules: 'required'},
	          	{ name: 'celular',  display: 'Celular', rules: 'required'},
	          	{ name: 'email2',    display: 'E-mail', rules: 'required'},
	          	//{ name: 'cargo',    display: 'Cargo Profesional', rules: 'required'},
	          	//{ name: 'campo',    display: 'Campo Laboral', rules: 'required'},
	          	//{ name: 'foto',  display: 'Archivo', rules: 'required'},
	          	{ name: 'mensaje2',  display: 'Mensaje', rules: 'required'} ];
	   
		new FormValidator('contactoHoja',reglas, function(errors, event) {				
			for (var i = 0 , rulesLength = reglas.length; i < rulesLength; i++) {		
		        //$('#'+reglas[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
		    }
		    if ( errors.length > 0 ) {        
		        for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
		            $('#'+errors[i].id).css( { 'color': 'red' } );
		        }
		    }
		    else{	
			    $('#btn-enviar-hoja').hide();
			    $('.procesoenvioHoja').show();		    		    	 
		    	$.ajax({
		    		  type: "POST",  
					  url:"<?=base_url('welcome/contactoFormaHoja/')?>",  
					  data: $('#contactoHoja').serialize(),
					  success: function( response ) {		
			    		if(response=="1"){
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

function cargarDepartamentos(id,contenedor){
	$( "#"+contenedor ).load( "welcome/resultadoDepartamento/"+id );	
};

function verInformacion(id,contenedor){
	$( "#"+contenedor ).load( "welcome/resultadoOferta/"+id );	
}

function aplicarOferta(cargo_id,campo_id){
	$('#btn-hoja').click();
	$('#cargo_'+cargo_id).click();
	$('#campo_'+campo_id).click();
};

function limpiarTexare(id){
	$('#'+id).val("");
};


$( "#resultadosDepartamentos").load( "welcome/allOferta");	


/**************************************************/

getInformacion('id1');

</script>



<!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"> </script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<!--  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?&sensor=false"></script> -->

<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
    <script src="./js/maps.js"></script>

</body>
</html>
