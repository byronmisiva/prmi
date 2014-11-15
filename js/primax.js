var clickMenuOpcion = 'row_home';
$(function () {
    var numeroPromociones = 4;
    if ($('body').width() > 702)
        numeroPromociones = 4;
    else
        numeroPromociones = 1;
    var promocionTemporal = 0;

    eventosMenusPrincipal();

    $('.carousel').carousel({
        interval: false
    });

    $('.btn-fechas').tooltip({delay: {   hide: 200 }});
    centrarHome();

    callBackRisize();

    //mostrar prommociones
    setTimeout("cambiarPromociones($('body').width())", 500);


    $(window).resize(function () {
        if (numeroPromociones != promocionTemporal) {
            cambiarPromociones($('body').width());
            promocionTemporal = numeroPromociones;
        }

        if ($('body').width() > 768)
            numeroPromociones = 4;
        else
            numeroPromociones = 1;

        centrarHome();
        clickMenu();
    });

    /*
     * selectTextOff; plugin para evitar la selección en los elementos seleccionados por jQuery
     * 22/08/2011
     * MIT/GNU
     */
    (function ($) {
        $.fn.extend({
            selectOff: function () {
                this.attr('unselectable', 'on').css({
                    'KhtmlUserSelect': 'none',
                    'MozUserSelect': 'none'
                }).each(function (i, o) {
                        o["onselectstart"] = o['onmousedown'] = function () {
                            return false;
                        }
                    });
            }
        });
    })(jQuery);

    //evitamos la seleccion involuntaria de textos
    $("#timeline").selectOff();
    $(".contenedor-promociones ").selectOff();


    sliderHistoria('timeline', 50, 4);
    //historia


    var anchoInicial = 0;
    $('#myCarousel').on('slid.bs.carousel', function () {

        if ((anchoInicial == 0) && ($("#nosotros").width() > 0)) {

            if ($(window).width() < 360) {
                anchoInicial = $("#nosotros").width() - 100;

            } else {
                if ($(window).width() < 768) {
                    anchoInicial = $("#nosotros").width() - 100;
                }
                else {
                    anchoInicial = $("#nosotros").width() - 70;
                }
               }

            $("#nosotros").width(anchoInicial);
            $(".nosotrosItem").width(anchoInicial);

            sliderNosotros('nosotros', 30, 3);
        }
    });


    $("#misionmenu1").click(function () {
        $('#btn-mision').click()
        $('#misionmenu').click();
    });
    
    $("#visionmenu1").click(function () {
        $('#btn-mision').click()
        $('#visionmenu').click()
    });
    
    $("#valoresmenu1").click(function () {
        $('#btn-mision').click()
        $('#valoresmenu').click()
    });


    /*sincronizador botones con menu */
   $('.slide').carousel().on('slid', function (e) {
        var ancho = $('body').width();
        if (ancho <= 767) {
            $(".promocionCarouFredSel").carouFredSel({
                items: 1,
                prev: ".controlBotonContent .controlI",
                next: ".controlBotonContent .controlD",
                scroll: {
                    items: 1,
                    easing: null,
                    duration: 1000,
                    pauseOnHover: true
                }
            });

            $("#promocionColorBox img").colorbox({
                href: function () {
                    var url = $(this).attr("data-img");
                    return url;
                },
                rel: "promocionColorBox",
                width: "95%", height: "95%",
                title: function () {
                    var url = $(this).attr("data-link");
                    var title = $(this).attr("title");
                    return '<a href="' + url + '" target="_blank">' + title + '</a>';
                }
            });
        } else {
            $(".promocionCarouFredSel").carouFredSel({
                items: 3,
                prev: ".controlBotonContent .controlI",
                next: ".controlBotonContent .controlD",
                scroll: {
                    items: 3,
                    easing: null,
                    duration: 1000,
                    pauseOnHover: true
                }
            });
            $("#promocionColorBox img").colorbox({
                href: function () {
                    var url = $(this).attr("data-img");
                    return url;
                },
                rel: "promocionColorBox",

                title: function () {
                    var url = $(this).attr("data-link");
                    var title = $(this).attr("title");
                    return '<a href="' + url + '" target="_blank">' + title + '</a>';
                }
            });
        }
        
        var opcionActiva = 0;
        $(this).children('.carousel-inner').children().each(function (index) {
            if ($(this).hasClass('active')) {
                //cambio en el menu
                opcionActiva = index;
            }
        })
        var contador = 0
        $(this).children('.tituloNosotros').children(1).children(0).children().each(function (index) {
            if (typeof $(this).attr("data-slide-to") !== 'undefined') {
                $(this).removeClass("active")

                if (opcionActiva == contador) {
                    $(this).addClass("active");
                }
                //dejo prendido la primera empresa
                if ((opcionActiva == 1))
                    if (typeof $(this).attr("id") !== 'undefined') {
                        if ($(this).attr("id") == "btn-empresa")
                            $(this).addClass("active");
                    }
                contador++;
            }
        })
     })
    /*fin sincronizador botones con menu*/
});


function sliderHistoria(contenedorSliderPrincipal, offsetSlider, maxPorPagina) {
    //historia

    //fechas
    var positionFecha = 1;
    var contenedorSlider = "." + contenedorSliderPrincipal + "-content";
    var anchoFechas = $(contenedorSlider + ' .fecha').width() + offsetSlider;
    var maxSleders = maxPorPaginaCuadrar(maxPorPagina, contenedorSliderPrincipal, anchoFechas);

    $("#" + contenedorSliderPrincipal).width(anchoFechas * maxSleders + offsetSlider);
    $(contenedorSlider + ' .fechas').width(anchoFechas * $(contenedorSlider + ' .fechas').children().size());

    var anchocontenedor = $("#" + contenedorSliderPrincipal).width();
    if (anchocontenedor > 0) {
        maxSleders = Math.floor(anchocontenedor / anchoFechas);
        if (((anchocontenedor / anchoFechas) - Math.floor(anchocontenedor / anchoFechas)) > 0.5)
            maxSleders++
        $(contenedorSlider).width(anchoFechas * maxSleders);
        $("#" + contenedorSliderPrincipal).width(anchoFechas * (maxSleders ) + 5);
    }


    function maxPorPaginaCuadrar(maxPorPagina, contenedor, anchoFechas) {

        var ancho = $('body').width();

        if (ancho <= 767) {
            var anchoCalcula = ancho - 100;

            if ((maxPorPagina * anchoFechas) > anchoCalcula) {
                return (Math.floor(anchoCalcula / anchoFechas));
            }
        }
        return maxPorPagina
    }

    $(contenedorSlider + " .controlI").click(function () {
        var anchocontenedor = $(contenedorSlider).width();

        maxSleders = Math.floor(anchocontenedor / anchoFechas);
        if (((anchocontenedor / anchoFechas) - Math.floor(anchocontenedor / anchoFechas)) > 0.4)
            maxSleders++

        $(contenedorSlider).width(anchoFechas * maxSleders);
        $("#" + contenedorSliderPrincipal).width(anchoFechas * (maxSleders ) + 5);


        if (positionFecha > 1) {
            $(contenedorSlider + " .fechas").animate({ "left": "+=" + anchoFechas + "px" }, "fast");
            positionFecha--;
        } else
            positionFecha = 1;


        // ocultar/mostar  los botones
        if ((positionFecha + maxSleders - 1) == maxSleders)   $(this).hide();
        if ((positionFecha + maxSleders - 1) < $(contenedorSlider + ' .fechas').children().size())   $(contenedorSlider + " .controlD").show();
    });

    $(contenedorSlider + " .controlD").click(function () {

        var anchocontenedor = $(contenedorSlider).width();
        maxSleders = Math.floor(anchocontenedor / anchoFechas);
        if (((anchocontenedor / anchoFechas) - Math.floor(anchocontenedor / anchoFechas)) > 0.5)
            maxSleders++;

        $(contenedorSlider).width(anchoFechas * maxSleders);
        $("#" + contenedorSliderPrincipal).width(anchoFechas * (maxSleders ) + 5);

        if ((positionFecha + maxSleders) <= $(contenedorSlider + ' .fechas').children().size()) {
            $(contenedorSlider + " .fechas").animate({ "left": "-=" + anchoFechas + "px" }, "fast");
            positionFecha++;
            if (positionFecha > 1) $(contenedorSlider + " .controlI").show();
        }

        //oculta el boton si ya llego al final
        if ((positionFecha + maxSleders - 1) == $(contenedorSlider + ' .fechas').children().size())   $(this).hide();

    });
    //fin historia
}

function sliderNosotros(contenedorSliderPrincipal, offsetSlider, maxPorPagina) {
    //historia
    var contenedorSliderPrincipal2 = $("#nosotros").width();

    //fechas
    var positionFecha = 1;
    var contenedorSlider = "." + contenedorSliderPrincipal + "-content";

    var maxSleders = maxPorPagina;
    $(".nosotroscontrolI").hide();


    var anchonosotrosItem = $('.nosotrosItem').width();

    var anchocontenedor = $(contenedorSlider).width();
    //$(contenedorSlider).width(anchonosotrosItem * maxSleders);

    $(contenedorSlider + ' .nosotrosItems').width(anchonosotrosItem * ($(contenedorSlider + ' .nosotrosItem').children().size() - 1));

    var anchocontenedor = $("#" + contenedorSliderPrincipal).width();
    if (anchocontenedor > 0) {
        maxSleders = Math.floor(anchocontenedor / anchonosotrosItem);
        if (((anchocontenedor / anchonosotrosItem) - Math.floor(anchocontenedor / anchonosotrosItem)) > 0.5)
            maxSleders++

    }


    $(".nosotroscontrolI").click(function () {

        var anchocontenedor = $(contenedorSlider).width();


        $(contenedorSlider).width(anchonosotrosItem * maxSleders);
        $("#" + contenedorSliderPrincipal).width(anchonosotrosItem * (maxSleders ) + 5);


        if (positionFecha > 1) {
            $(contenedorSlider + " .nosotrosItems").animate({ "left": "+=" + anchonosotrosItem + "px" }, "fast");
            positionFecha--;
        } else
            positionFecha = 1;


        // ocultar/mostar  los botones
        if ((positionFecha + maxSleders - 1) == maxSleders)   $(this).hide();
        $(".nosotroscontrolD").show();
        enciendeOpcion(positionFecha)
    });

    $(".nosotroscontrolD").click(function () {

        var anchocontenedor = $(contenedorSlider).width();

        if ((positionFecha) <= $(contenedorSlider + ' .nosotrosItem').children().size()) {
            $(contenedorSlider + " .nosotrosItems").animate({ "left": "-=" + anchonosotrosItem + "px" }, "fast");
            positionFecha++;
            if (positionFecha > 1) $(".nosotroscontrolI").show();
        }

        //oculta el boton si ya llego al final

        if ((positionFecha + 1) >= $(contenedorSlider + ' .nosotrosItem').children().size())   $(this).hide();

        enciendeOpcion(positionFecha)

    });
    //fin historia

    function enciendeOpcion(positionFecha) {

        $(".submenuNosotros li").removeClass("active");

        switch (positionFecha) {
            case 1:
                $("#misionmenu").addClass("active");
                break;
            case 2:
                $("#visionmenu").addClass("active");
                break;
            default:
                $("#valoresmenu").addClass("active");
                break;
        }
    }

    //botones mision vision

    $("#misionmenu").click(function () {
        $('#btn-mision').click()
        $(contenedorSlider + " .nosotrosItems").animate({ "left": "0px" }, "fast");
        positionFecha = 1;
        $(".nosotroscontrolI").hide();
        $(".nosotroscontrolD").show();
        $(".submenuNosotros li").removeClass("active");
        $("#misionmenu").addClass("active");
    });
    $("#visionmenu").click(function () {
        $('#btn-mision').click()
        $(contenedorSlider + " .nosotrosItems").animate({ "left": "-" + anchonosotrosItem + "px" }, "fast");
        positionFecha = 2;
        $(".nosotroscontrolI").show();
        $(".nosotroscontrolD").show();
        $(".submenuNosotros li").removeClass("active");
        $("#visionmenu").addClass("active");
    });
    $("#valoresmenu").click(function () {
        $('#btn-mision').click()
        var anchonosotrosItem2 = anchonosotrosItem * 2
        $(contenedorSlider + " .nosotrosItems").animate({ "left": "-" + anchonosotrosItem2 + "px" }, "fast");
        positionFecha = 3;
        $(".nosotroscontrolD").hide();
        $(".nosotroscontrolI").show();
        $(".submenuNosotros li").removeClass("active");
        $("#valoresmenu").addClass("active");
    });


}


//cambiar prodctos en tiendas
var menuTiendas = new Object();
menuTiendas.id1 = new Array("Cubano", "Un clásico de Listo! Gourmet. Crocante pan baguette tipo casero y una deliciosa combinación de rebanadas de jamón, pernil y queso holandés. Acompañado de tomates frescos, lechuga romana, mantequilla y sazonado con nuestra exclusiva salsa Relish.", "$4.60", "tiendas-listo-menu-cubano.jpg"),
    menuTiendas.id2 = new Array("Mixto", "Un clásico de Listo! Gourmet. Crocante pan baguette tipo casero y una combinación de queso holandés y jamón americano acompañado de tomates frescos. Lechuga romana. Mantequilla y sazonado con nuestra exclusiva salsa casera  que hará  de este clásico una de tus opciones favoritas", "$4.30", "tiendas-listo-menu-mixto.jpg"),
    menuTiendas.id3 = new Array("Lomo y tocino", "Una opción para los amantes de la carne, esta una increíble combinación de lomo, tocino y vegetales frescos de la huerta; sazonados con mayonesa y nuestra exquisita salsa Provenzal (perejil y ajo).", "$4.80", "tiendas-listo-menu-lomo-y-tocino.jpg"),
    menuTiendas.id4 = new Array("Italiano", "Una deliciosa combinación de pan baguette, rebanadas de jamón, queso y salami de nuestra exclusiva colección de ahumados. Acompañado de tomates frescos, lechuga romana, mantequilla y sazonada con nuestra salsa Relish. El Chef recomienda: 'Un poco de temperatura intensifica el sabor del salami y sus especias, disfrútalo tostado'.", "$4.30", "tiendas-listo-menu-italiano.jpg"),
    menuTiendas.id5 = new Array("Omelette", "Para tu desayuno o a cualquier hora del día, nadie supera nuestro sándwich omelette. El pan baguette de siempre con un extraordinario omelette de jamón y queso recién hecho es una experiencia que no te debes perder.", "$3.30", "tiendas-listo-menu-omelette.jpg"),
    menuTiendas.id6 = new Array("Pollo césar", "El legado de César Cardini convertido en un delicioso sándwich que combina un crocante pan baguette con lechuga romana, pollo, tomate y queso parmesano. Sazonado con la receta secreta de la salsa César, creada por nuestro Chef para realzar el sabor de este increíble sándwich.", "$4.80", "tiendas-listo-menu-pollo-cesar.jpg"),
    menuTiendas.id7 = new Array("Hot dog", "Hemos re-inventado nuestros clásicos hot dogs de res y pollo dándole un toque ahumado. No puedes perderte nuestras mejores salchichas y nuestro nuevo pan exclusivo para nuestras tiendas Listo!", "$2.70", "tiendas-listo-menu-hot-dog1.jpg"),
    menuTiendas.id8 = new Array("Cheese dog", "No te pierdas de combinar nuestro clásico Dog de ternera o de pollo con exquisito queso fundido.", "$3.10", "tiendas-listo-menu-cheesedog.jpg");

function getInformacion(id) {
	var nombre, descripcion, valor, imagen;  
	var menu;
	    $.ajax({				
			type: "POST",	    		
			url: 'index.php/welcome/buscar_Menu/'+id,			    		
			success: function( response) {			
				menu=JSON.parse(response);				
				nombre = menu.nombre;
			    descripcion = menu.descripcion;
			    valor = menu.precio;
			    imagen = menu.foto_grande;
			    $('.nombre-menu').html(nombre);
			    $('.descripcion-menu').html(descripcion);
			    $('.imagen-menu').css('background-image', "url(./" + imagen + ")")
                $('.valor').html("$" + valor);
			}		
		});
	
    
	    
};
//fin cambiar prodctos en tiendas

function eventosMenusPrincipal() {

    $(".home, .nosotros, .super-g-prix, .tiendas,.lubricantes,.servicios, .encuentranos, .contactenos").click(function () {
        $('.nav-cabecera a').removeClass("active");
        $(this).addClass("active");
    });

    $(".nosotros, .super-g-prix, .tiendas,.lubricantes,.servicios, .encuentranos, .contactenos").click(function () {
        verificarFooter(0);
        $('#menu').click();

    });

    $(".home").click(function () {
        movimiento('row_home');
        verificarFooter(1);
        $('#menu').click();
        clickMenuOpcion = 'row_home';
        cambiarPromociones($('body').width());
    });

    $(".nosotros").click(function () {
        movimiento('fondo-nosotros');
        $('#btn-empresa').click();
        clickMenuOpcion = 'fondo-nosotros';
    });
    $(".super-g-prix").click(function () {
        movimiento('fondoGprix');
        $('#btn-beneficios').click();
        clickMenuOpcion = 'fondoGprix';
    });
    $(".lubricantes").click(function () {
        movimiento('fondoLubricantes');
        $('#btn-lubricantes').click();
        clickMenuOpcion = 'fondoLubricantes';
    });
    $(".tiendas").click(function () {
        movimiento('fondoTiendas');
        $('#btn-tiendas').click();
        clickMenuOpcion = 'fondoTiendas';
    });

    $(".lubricantes").click(function () {
        movimiento('fondoLubricantes');
        clickMenuOpcion = 'fondoLubricantes';
    });
    $(".servicios").click(function () {
        movimiento('fondoServicios');
        clickMenuOpcion = 'fondoServicios';
    });
    $(".encuentranos").click(function () {
        movimiento('fondoEncuentranos');
        clickMenuOpcion = 'fondoEncuentranos';

    });
    $(".contactenos").click(function () {
        movimiento('fondoContactanos');
        clickMenuOpcion = 'fondoContactanos';
    })

}

function desplegar(id) {
    if (id == 1) {
        $('.imagenbeneficio1').addClass("activo");
        $('.texto1').show();
    } else if (id == 2) {
        $('.imagenbeneficio2').addClass("activo");
        $('.texto2').show();
    } else {
        $('.imagenbeneficio3').addClass("activo");
        $('.texto3').show();
    }

}

function verificarFooter(dato) {
    if (dato == 0)
        $('#footer-promociones').fadeOut();
    else
        $('#footer-promociones').fadeIn();
}


function cambiarPromociones(ancho) {




    if (ancho >= 768) {

        $(".foo3 img").colorbox({
            href: function () {
                var url = $(this).attr("data-img");
                return url;
            },
            rel: "foo3",

            title: function () {
                var url = $(this).attr("data-link");
                var title = $(this).attr("title");
                return '<a href="' + url + '" target="_blank">' + title + '</a>';
            }
        });

        $("#foo2").carouFredSel({
            items: 4,
            prev: ".flechaI",
            next: ".flechad",
            scroll: {
                items: 4,
                easing: null,
                duration: 2000,
                pauseOnHover: true
            }
        });

    } else {

        $(".foo3 img").colorbox({
            href: function () {
                var url = $(this).attr("data-img");
                return url;
            },
            rel: "foo3",
            width: "95%", height: "95%",
            title: function () {
                var url = $(this).attr("data-link");
                var title = $(this).attr("title");
                return '<a href="' + url + '" target="_blank">' + title + '</a>';
            }
        });

        $("#foo2").carouFredSel({
            items: 1,
            prev: ".flechaI",
            next: ".flechad",
            scroll: {
                items: 1,
                easing: null,
                duration: 1000,
                pauseOnHover: true
            }
        });
    }
}
;


//centrar imagen alta en home
function centrarHome() {

    var altoContenedor = $(window).height() - $('#footer').height() - $('.navbar-wrapper').height();
    var anchoContenedor = $(window).width();
    $('#contenedor2').height(altoContenedor);

    if (altoContenedor >= 490) {
        var desplazamiento = ($(".row_home").height() - $("#imagenHome").height() - $("#footer-promociones").height() - 10) / 2;
        $("#imagenHome").css("margin-top", desplazamiento - 50);
    } else {
        if (anchoContenedor > 360)
            $("#imagenHome").css("margin-top", -120)
        else
            $("#imagenHome").css("margin-top", -160)
    }
}
//fin  centrar imagen alta en home
//centrar imagen alta en home
function clickMenu() {
    movimiento(clickMenuOpcion);
}

function movimiento(pos) {
    var $a = $("#contenedor2");
console.log (pos);
    $a.stop().scrollTo('div.' + pos, {duration: 1000}, setTimeout("callBackRisize()", 1600));
}
//fin  centrar imagen alta en home
function callBackRisize() {

    var altoContenedor = $(window).height() - $('#footer').height() - 124;
    if ($('#footer').height() < 43)      altoContenedor = $(window).height() - $('#footer').height() - $('.navbar-wrapper').height();
    $('#contenedor2').height(altoContenedor);
}

