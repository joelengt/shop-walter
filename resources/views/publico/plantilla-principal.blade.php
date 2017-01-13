<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    @inject('configuraciones', 'App\Modelos\Configuraciones')
    <?php
//      $config = [];
        $config = [
            'head_title' => 'Tienda Walter',
            'head_description' => 'Una Tienda para toda la familia',
            'head_keywords' => 'a, b, c, d',
            'url_facebook' => 'https://facebook.com'
        ];
//        $configuraciones = $configuraciones->get();
//        foreach ($configuraciones as $configuracion){
//            $config[$configuracion->llave] = $configuracion->valor;
//        }
//        dd($config);
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="@yield('titulo navegador',$config['head_title'])" />

    <meta name="og:title" content="@yield('facebook_title',$config['head_title'])" />
    <meta name="og:description" content="@yield("facebook_descripcion",$config['head_description'])" />
    <meta name="og:image" content="@yield('facebook_imagen','http://www.zecat.com/images/mainLogo.png')" />
    <meta property="og:url" content="@yield('facebook_url',asset('/'))" />
    <meta property="og:type" content="website" />

    <meta name="description" content="{{ $config['head_description'] or '' }}" />
    <meta name="keywords" content="{{ $config['head_keywords'] }}" />
    <meta name="language" content="es" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" />
    <title>@yield('titulo navegador',$config['head_title'])</title>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/styles.css?ver=13') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('/css/fotorama.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/tinycarousel.css?v=3') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap-dropdownhover.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/quienesomos.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/jquery.fancybox.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/nivo-slider.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/default.css') }}" />

    <script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/zoom/jquery.zoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/zoom/jquery.zoom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/customSelect.jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.qtip-1.0.0-rc3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/fotorama.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bxslider/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/video_banners.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tinycarousel/jquery.tinycarousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.browser.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.autocompleter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/default/_main_header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/_popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/nivo-slider/jquery.nivo.slider.pack.js') }}"></script>
</head>
<style>
    @font-face {
        font-family: 'Exo2RegularCondensed';
        src: url("{{ asset('fonts/Exo2-RegularCondensed.otf') }}") format("opentype");
    }

    @font-face {
        font-family: 'Exo2RegularCondensed';
        font-weight: bold;
        src: url("{{ asset('fonts/Exo2-SemiBoldCondensed.otf') }}") format("opentype");
    }

    body {
        font-family: Exo2RegularCondensed;
    }


    .header3 ul li a {
        font-family: 'Exo2RegularCondensed';
    }

    .resaltar_texto{
        color:#FF7300;
    }

    .titulo_negrita{
        font-weight: bold;
    }

    .chat-box {
        /*font:normal normal 11px/1.4 Tahoma,Verdana,Sans-Serif;*/
        color:#333;
        width:200px; /* Chatbox width */
        border:1px solid #FF7300;
        border-bottom:none;
        background-color:#FF7300;
        position:fixed;
        right:10px;
        bottom:0;
        z-index:9999;
        -webkit-box-shadow:1px 1px 5px rgba(0,0,0,.2);
        -moz-box-shadow:1px 1px 5px rgba(0,0,0,.2);
        box-shadow:1px 1px 5px rgba(0,0,0,.2);
    }

    .chat-box > input[type="checkbox"] {
        display:block;
        margin:0 0;
        padding:0 0;
        position:absolute;
        top:0;
        right:0;
        left:0;
        width:100%;
        height:26px;
        z-index:4;
        cursor:pointer;
        opacity:0;
        filter:alpha(opacity=0);
    }

    .chat-box > label {
        display:block;
        height:24px;
        line-height:24px;
        background-color:#FF7300;
        color:white;
        font-weight:bold;
        padding:0 1em 1px;
    }

    .chat-box > label:before {content:attr(data-collapsed)}

    .chat-box .chat-box-content {
        padding:10px;
        display:none;
        background-color: white;
    }

    /* hover state */
    .chat-box > input[type="checkbox"]:hover + label {background-color:#FF7300}

    /* checked state */
    .chat-box > input[type="checkbox"]:checked + label {background-color:#FF7300}
    .chat-box > input[type="checkbox"]:checked + label:before {content:attr(data-expanded)}
    .chat-box > input[type="checkbox"]:checked ~ .chat-box-content {display:block}


    .header1 {
        background: #FF7300 !important;
    }

    .listado .destacados .destacado .boton {

        background: #FF7300;
    }

    .listado .paginacion ul li a.selected {
        background: #FF7300;
    }

    @media (min-width: 1200px) {
        .header2 .navbar-default .navbar-nav > li > a:hover {

            border-top: 8px solid #FF7300;

        }
    }

    .footer2 p {
        color: #FF7300;
    }

    .quienessomos .listado h1 {
        color: #FF7300;
    }

    .contacto h1 {
        color: #FF7300;
    }

    .contacto button {
        background: #FF7300;
    }

    .catalogos h1 {
        color: #FF7300;
    }

    .ficha .contenido .datos h1 {
        color: #FF7300;
    }

    .ficha .ruta a {
        color: #FF7300;
    }

    .ficha .contenido .datos button {
        background: #FF7300;
    }

    .ficha .contenido h3 {
        color: #FF7300;
    }

    .ficha .enviarConsulta {
        background: #FF7300;
    }

    .cotizacion h1 {
        color: #FF7300;
    }

    .listado .destacados .destacado .boton:hover {
        background: #ff8b2d;
    }

    .ficha .contenido .datos button:hover {
        background: #ff8b2d;
    }

    .ficha .enviarConsulta:hover {
        background: #ff8b2d;
    }

    @media (min-width: 1230px) {
        .header3 ul li:first-child {
            border-left: 1px solid #dc6300 !important;
        }
    }

    @media (min-width: 1230px) {
        .header3 ul li a {
            border-right: 1px solid #dc6300 !important;
        }
    }

    .ficha .contenido .datos .novedadProd a {
        background: #ff8b2d;
        border: 1px solid #dc6300;
    }

    .ficha .contenido .datos .novedadProd a:hover {
        background: #dc6300 !important;
    }

    @media (min-width: 1230px) {
        .header3 ul li a:hover {
            line-height: 128px;
            -webkit-box-shadow: inset 0 0 6px 1px #e55602;
            box-shadow: inset 0 0 6px 1px #e55602;
            border-top: 8px solid #ff9f4c !important;
            border-left: 1px solid #e55602;
            border-right: 1px solid #e55602;
        }
    }

    /* Estilo para la cabecera */
    @media (max-width: 425px) {
        .header2 #headerLogo {
            width: 33%;
            float: right;

        }
    }

    @media (max-width: 425px) {
        .header2 .buscar2 {
            display: block;
            float: left;
            width: 33.33%;
            margin-top: 5px;
            position: relative;

        }
    }

    @media (max-width: 425px) {
        .header2 .botones {
            width: 33%;
            float: right;
            display: none;
        }
    }

    @media (max-width: 425px) {
        .header2 .navbar-default {
            width: 33%;
            float: right;
        }
    }

    /*
    @media (max-width: 425px) {
        .nav > li {
            float: left;
        }
    }
    */

    /* ******************** */
    .container-fluid > .navbar-header{
        margin-right: 0;
        margin-left: 0;
    }

    .dtabla{ display:table; }
    .dtablacell{ display:table-cell; vertical-align:middle; }

    .navbar {
        position: relative;
        min-height: 40px;
        margin-bottom: 20px;
        border: 1px solid transparent;}

    .xlogo{height:95px; width:123px; float:left}
    .xlogox{
        display: none}
    .rayas{display: none}
    @media (max-width: 768px) {
        .xlogo{float: none; margin: 0 auto; width: 100%}
    }
    @media (max-width: 450px) {
        .header3{display: none}
        .header1 {
            min-height: 50px;}
        .navbar{ display: none !important;}

        .xlogox{ display: block;
            float: left; width: 20%; margin-top: 5px}
        .rayas{
            display: block;width: 33.33%; height: 30px; float: right; margin-top: 5px;padding-right: 20px}
    }

    @media (max-width: 450px) {
        .header2 {
            background: #FF7300 no-repeat right top;
        }
    }



</style>


<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
    * { box-sizing: border-box; }



    a { text-decoration: none; }

    div#overlay { display: none; }

    a#toggle {
        position: fixed;
        top: 3px;
        /*left: 10px;*/
        left: 90%;
        width: 30px;
        height: 30px;
        background-color: #000;
        text-align: center;
        color: white;
        display: none;
        transition: all ease-out 0.3s;
    }

    a#toggle i {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    main#content { padding: 10px; }

    #menu {
        text-align: center;
        transition: all ease-out 0.3s;
    }

    #menu a { color: white; text-decoration: none}

    #menu ul {
        margin: 0;
        padding: 0;
        background-color: rgba(255,115,0, 0.8);
    }

    #menu ul li {
        display: inline-block;
        position: relative;
    }

    #menu ul li > a {
        display: inline-block;
        padding: 10px;
    }

    #menu ul li > a > i {
        margin-left: 15px;
        transition: all ease-out 0.3s;
        -webkit-transition: all ease-out 0.1s;
    }

    #menu ul li ul {
        display: none;
        position: absolute;
        top: 38px;
        width: 200px;
        text-align: left;
    }

    #menu ul li ul li { display: block; }

    #menu ul li ul li a { display: block; }

    #menu ul li:hover > a { background-color: rgba(0, 0, 0, 0.3); }

    #menu ul li:hover > a > i { transform: rotateZ(90deg); }

    #menu ul li:hover ul { display: block; }
    @media screen and (max-width: 767px) {

        a#toggle { display: block; }

        main#content {
            margin-top: 65px;
            transition: all ease-out 0.3s;
        }

        #menu {
            position: fixed;
            width: 250px;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            overflow-y: auto;
            background-color: rgba(255,115,0, 1);
            transform: translateX(-250px);
        }

        #menu ul {
            text-align: left;
            background-color: transparent;
        }

        #menu ul li { display: block; }

        #menu ul li a { display: block; }

        #menu ul li a > i { float: right; }

        #menu ul li ul {
            display: none;
            position: static;
            width: 100%;
            background-color: rgba(87, 85, 85, 0.8);
        }

        #menu ul li:hover > ul { display: none; }

        #menu ul li:hover > a > i { transform: rotateZ(0); }

        #menu ul li.open > a { background-color: rgba(0, 0, 0, 0.3); }

        #menu ul li.open > a > i { transform: rotateZ(90deg); }

        #menu ul li.open > ul { display: block; }

        div#overlay {
            display: block;
            visibility: hidden;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            transition: all ease-out 0.3s;
            z-index: 1000;
            opacity: 0;
        }

        html.open-menu { overflow: hidden; }

        html.open-menu div#overlay {
            visibility: visible;
            opacity: 1;
            width: calc(-150%);
            left: 250px;
        }

        html.open-menu a#toggle,
        html.open-menu main#content { transform: translateX(250px); }

        html.open-menu nav#menu {
            z-index: 100000;
            transform: translateX(0);
        }
    }



    /* */

    @media (min-width: 425px) {
        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important;
        }
    }

    @media (min-width: 425px){
        .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
            margin-right: 0;
            margin-left: 0;
        }
    }

    @media (min-width: 425px){
        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important;
        }
    }

    @media (min-width: 425px){
        .header2 .navbar-collapse {
            position: inherit !important;
            z-index: inherit !important;
            width: inherit;
        }
    }

    @media (min-width: 425px) {
        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    }



    /* */
</style>

<body>

@inject('categorias', 'App\Modelos\Categorias')

<?php
$principales = $categorias->CategoriasPrincipales()->with('subcategorias')->get();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "{!! $config['url_chat_facebook'] or '' !!}";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<input type="hidden" id="doLogin" value="1"/>

<div id="blackout" style="display:none;"></div>
<!--<div id="mainContainer">-->

<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
<div class="header1">



    <div class="header2">

        <div class="rayas" align="right">


            <a id="toggle" href="#">
                <img src="{{ asset('iconos/menu.png') }}">
            </a>
            <div id="overlay"></div>
            <nav id="menu" style="font-family: 'Exo2RegularCondensed'; font-size: 16px">
                <ul>
                    <li style="color:#fff; background:#575555">
                        <a href="#">PRODUCTOS</a>
                    </li>


                    @foreach($principales as $principal)
                        <li>
                            <a href="#">{{ $principal->nombre_categoria }}</a>
                            <ul>
                                @foreach($principal->subcategorias as $subcategoria)
                                    <li><a href="{{ asset("/productos/".str_slug($principal->nombre_categoria)."/".str_slug($subcategoria->nombre_categoria)) }}" title="Ver {{ $subcategoria->nombre_categoria }}">{{ $subcategoria->nombre_categoria }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    <li style="color:#fff; background:#575555"><a href="#">EMPRESA</a></li>
                    <li><a href="{{ route('inicio-publico') }}" class="li1">Inicio</a></li>
                    <li><a href="{{ route('clientes') }}">Nuestros clientes</a></li>
                    <li><a href="{{ route('lista-precios') }}">Lista de precios</a></li>
                    <li><a href="{{ route('quienes-somos') }}">Nosotros</a></li>
                    <li><a href="{{ route('contacto') }}">Contáctenos</a></li>
                    <li><a href="{{ route('cotizacion') }}">Carrito</a></li>
                </ul>
            </nav>

        </div>

        <div class="botones">
            <div id="" style="margin-top: 5px; margin-left: 10px; margin-right: 30px">
                <a id="valueBtn2" href="{{ route('cotizacion') }}" title="Ver cotización">
                    <img src="{{ asset('iconos/carrito.png') }}">
                </a>
                <div id="actualQuotationResume">

                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr class="row2 row" id="row_">
                            <td style="overflow: hidden;" width="50"><img width="50" style="border:1px solid #efefef;" src="img/social/skype.png"></td>
                            <td class="prod_name">Pendrive Slim (usb / micro usb)</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn" href="#" title="Ver cotización">Ver cotización</a>
                </div>
                <script>
                    var global_has_loaded_products = 1;
                    $(function () {
                        $('#valueBtn, #actualQuotationResume').mouseover(function (e) {
                            $('#actualQuotationResume').show();
                            $('#valueBtn').addClass('hover');
                        });
                        $('#valueBtn, #actualQuotationResume').mouseout(function (e) {
                            $('#actualQuotationResume').hide();
                            $('#valueBtn').removeClass('hover');
                        });
                        window.onunload = function (e) {
                            if (document.all ? self.screenTop > 9000 : apply()) {
                                alert('Tienes productos sin enviar a cotizar. Puedes acceder a la lista de productos que seleccionaste desde el icono del carrito en el encabezado del sitio y enviar la lista para que podamos enviarte una cotización.')
                            }
                            function apply() {
                                if (parseInt(navigator.appVersion) > 3)
                                    var top = navigator.appName == "Netscape" ? window.innerWidth : top.window.document.body.offsetWidth;
                                return (top == 0 || window.screenX > (top - 25))
                            }
                        }
                    });
                </script>
            </div>
        </div>



        <div class="xlogox" align="left">
            <a href="/">
                <img src="{{ asset('iconos/logo-owp-movil.png') }}">
            </a>
        </div>
        <!--
        <div class="buscar2">
            <form id="mainSearch" action="{{ route('buscar-productos') }}">
                <input name="query" src="{{ route('buscar-query-productos') }}" id="search_query" type="text" placeholder="Buscar productos" rel="" autocomplete="off" class="ac_input">

            </form>
        </div>
        -->


        <div class="buscar2">
            <form id="mainSearch" action="{{ route('buscar-productos') }}">
                <input name="query" src="{{ route('buscar-query-productos') }}" id="search_query" type="text" placeholder="Buscar productos" rel="" autocomplete="off" class="ac_input">

            </form>
        </div>


        <nav class="navbar navbar-default navbar-display" style="height: 40px;">

            <div class="container-fluid">


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('inicio-publico') }}" class="li1">Inicio</a>
                        </li>

                        <li>
                            <a href="{{ route('clientes') }}">Nuestros clientes</a>
                        </li>
                        <li>
                            <a href="{{ route('lista-precios') }}">Lista de precios</a>
                        </li>
                        <li>
                            <a href="{{ route('quienes-somos') }}">Nosotros</a>
                        </li>
                        <li><a href="{{ route('contacto') }}">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <!--
    <div class="header2">
        <div id="headerLogo">
            <a href="{{ route('inicio-publico') }}"></a>
        </div>

        <div class="botones">


            <div id="action_buttons">
                <a id="valueBtn2" href="{{ route('cotizacion') }}" title="Ver cotización">Ver cotización</a>
                <div id="actualQuotationResume">

                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr class="row2 row" id="row_">
                            <td style="overflow: hidden;" width="50"><img width="50" style="border:1px solid #efefef;" src="{{ asset('/img/social/skype.png') }}" /></td>
                            <td class="prod_name">Pendrive Slim (usb / micro usb)</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn" href="#" title="Ver cotización">Ver cotización</a>
                </div>
                <script>
                    var global_has_loaded_products = 1;
                    $(function () {
                        $('#valueBtn, #actualQuotationResume').mouseover(function (e) {
                            $('#actualQuotationResume').show();
                            $('#valueBtn').addClass('hover');
                        });
                        $('#valueBtn, #actualQuotationResume').mouseout(function (e) {
                            $('#actualQuotationResume').hide();
                            $('#valueBtn').removeClass('hover');
                        });
                        window.onunload = function (e) {
                            if (document.all ? self.screenTop > 9000 : apply()) {
                                alert('Tienes productos sin enviar a cotizar. Puedes acceder a la lista de productos que seleccionaste desde el icono del carrito en el encabezado del sitio y enviar la lista para que podamos enviarte una cotización.')
                            }
                            function apply() {
                                if (parseInt(navigator.appVersion) > 3)
                                    var top = navigator.appName == "Netscape" ? window.innerWidth : top.window.document.body.offsetWidth;
                                return (top == 0 || window.screenX > (top - 25))
                            }
                        }
                    });
                </script>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-display">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('inicio-publico') }}" class="li1">Inicio</a>
                        </li>

                        <li>
                            <a href="{{ route('clientes') }}">Nuestros clientes</a>
                        </li>
                        <li>
                            <a href="{{ route('lista-precios') }}">Lista de precios</a>
                        </li>
                        <li>
                            <a href="{{ route('quienes-somos') }}">Nosotros</a>
                        </li>
                        <li><a href="{{ route('contacto') }}">Contáctenos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="buscar2">
            <form id="mainSearch" action="{{ route('buscar-productos') }}">
                <input name="query" src="{{ route('buscar-query-productos') }}" id="search_query" type="text" placeholder="Buscar productos">
                <div class="buscarBtn"><button type="submit"></button></div>
            </form>
        </div>
    </div>
    -->



    <div class="container header3" id="bs-menus-categorias">

        <div class="dtabla xlogo">
            <div class="dtablacell">
                <a href="{{ asset('/') }}">
                    <img src="{{ asset('iconos/logo-owpx.png') }}" alt="">
                </a>
            </div>
        </div>

        <ul class="nav" data-hover="dropdown" data-animations="flip fadeInLeft fadeInUp fadeInRight">
        @foreach($principales as $principal)
        <li class="dropdown">
            <a class="btn btn-default"   style="background: url({{ asset($principal->imagen_menu->ruta_imagen) }}) no-repeat top center;" href="{{ asset("/productos/".str_slug($principal->nombre_categoria)) }}">
                {{ $principal->nombre_categoria }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                @foreach($principal->subcategorias as $subcategoria)
                <li><a href="{{ asset("/productos/".str_slug($principal->nombre_categoria)."/".str_slug($subcategoria->nombre_categoria)) }}" title="Ver {{ $subcategoria->nombre_categoria }}">{{ $subcategoria->nombre_categoria }}</a></li>
                @endforeach

            </ul>
        </li>
        @endforeach
        </ul>
    </div>

</div>

<div class="popup popups" id="addQuotationProduct" style="display:none;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr class="top">
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
        <tr class="middle">
            <td class="left"></td>
            <td class="center">
                <div class="popup_content">
                    <div class="popups">
                        <div class="left">
                            <h1>Cotización</h1>
                        </div>
                        <a href="javascript:closePopup('addQuotationProduct')" class="close_simple_btn_big right"></a>
                        <div class="clear"></div>
                        <h5 id="quotation_add_ok_message" style="color: #008800; display: none;">Se agregó el producto a la cotización.</h5>
                        <h5 id="quotation_add_no_message" style="color: #880000; display: none;">Ocurrió un error al agregar el producto.</h5>
                        <div style="text-align: center;">
                            <ul class="addQuotationProductUl">
                                <li><a href="/AR/es/user_quotations/actual">> Enviar la cotización</a></li>
                                <li><a href="javascript:closePopup('addQuotationProduct');">> Continuar navegando catálogo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </td>
            <td class="right"></td>
        </tr>
        <tr class="bottom">
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
    </table>
</div>

@yield('contenido')

<div class="footer1">
    <div class="container footer2">
        <div class="col-md-3">
            <div class="colsText">
                <p>Menú Principal</p>
                <p class="pDisplay">:&nbsp;</p>
                <p><a href="{{ route('inicio-publico') }}">Inicio</a></p>
                <p class="pDisplay">&nbsp;|&nbsp;</p>
                <p><a href="#">Nosotros</a></p>
                <p class="pDisplay">&nbsp;|&nbsp;</p>
                <p><a href="#">¿Cómo comprar?</a></p>
                <p class="pDisplay">&nbsp;|&nbsp;</p>
                <p><a href="#">Lista de precios</a></p>
                <p class="pDisplay">&nbsp;|&nbsp;</p>
                <p><a href="{{ route('contacto') }}">Contáctenos</a></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="colsText">
                <p>Productos</p>
                <p class="pDisplay">:&nbsp;</p>
                @foreach($principales as $principal)
                <p><a href="{{ asset("/productos/".$principal->slug) }}">{{ $principal->nombre_categoria }}</a></p>
                <p class="pDisplay">&nbsp;|&nbsp;</p>
                @endforeach

            </div>
        </div>
        <div class="col-md-3">
            <div class="colsText">
                <p>Redes sociales</p>
                @if(isset($config['url_facebook']) && !empty($config['url_facebook']))
                <p class="pDisplay">:&nbsp;</p>
                <p><a class="icon-button facebook" href="{{ $config['url_facebook'] }}" target="_blank"><img src="{{ asset('/img/social/facebook.png') }}" border="0"><span style="margin-left: 0.2em;">Facebook</span></a></p>
                @endif

                <p class="pDisplay">&nbsp;|&nbsp;</p>
                <p><a class="icon-button twitter" href="https://www.youtube.com/channel/UC_flEpk1iwioADt7lp_02BQ" target="_blank"><img src="{{ asset('/img/social/youtube.png') }}" border="0"><span style="margin-left: 0.2em;">Youtube</span></a></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="colsText">
                {!! $config['pie_pagina'] or '' !!}
                <a href="" class="qr"></a>
            </div>

        </div>
    </div>
</div>

<div class="chat-box" style="width: 360px;">
    <input type="checkbox" />
    <label data-expanded="Cerrar, podemos hablar mas tarde" data-collapsed="Listo para empezar tu proyecto?"></label>
    <div class="chat-box-content"><div class="fb-page" data-href="{{ $config['url_facebook'] }}" data-tabs="messages,timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{ $config['url_facebook'] }}/" class="fb-xfbml-parse-ignore"><a href="{{ $config['url_facebook'] }}">OWP</a></blockquote></div>
    </div>
</div>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>


<script>
    (function($){

        var ico = $('<i class="fa fa-caret-right"></i>');
        $('nav#menu li:has(ul) > a').append(ico);

        $('nav#menu li:has(ul)').on('click',function(){
            $(this).toggleClass('open');
        });

        $('a#toggle').on('click',function(e){
            $('html').toggleClass('open-menu');

            if ($('a#toggle').css('left') == '10px')
            {
                $('a#toggle').css( "left","90%" );
            }else{
                $('a#toggle').css( "left","10px" );
            }

            return false;
        });


        $('div#overlay').on('click',function(){
            $('html').removeClass('open-menu');
        })

    })(jQuery)
</script>

</body>
</html>