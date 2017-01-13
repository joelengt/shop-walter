-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-10-2016 a las 15:52:01
-- Versión del servidor: 5.7.15-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.26-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_walter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carruseles`
--

CREATE TABLE `carruseles` (
  `id_carrusel` int(10) UNSIGNED NOT NULL,
  `nombre_carrusel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '1',
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carruseles`
--

INSERT INTO `carruseles` (`id_carrusel`, `nombre_carrusel`, `nombre_corto`, `orden`, `habilitado`) VALUES
(1, 'PRODUCTOS DESTACADOS', 'DESTACADOS', 1, 1),
(2, 'NOVEDADES', 'NOVEDADES', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `id_categoria_padre` int(10) UNSIGNED DEFAULT NULL,
  `nombre_categoria` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_imagen` int(10) UNSIGNED DEFAULT NULL,
  `id_imagen_principal` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '1',
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `id_categoria_padre`, `nombre_categoria`, `id_imagen`, `id_imagen_principal`, `slug`, `orden`, `habilitado`) VALUES
(1, NULL, 'USB', 2, 3, 'usb', 1, 1),
(2, 1, 'Microinyectados', NULL, 12, 'microinyectados', 1, 1),
(3, 1, 'Económicos', NULL, 13, 'economicos', 1, 1),
(4, 1, 'Silicona', NULL, 14, 'silicona', 1, 1),
(5, 1, 'Resinados', NULL, 15, 'resinados', 1, 1),
(6, 1, 'Ecológicos', NULL, 16, 'ecologicos', 1, 1),
(7, 1, 'Varios', NULL, 17, 'varios', 1, 1),
(8, NULL, 'Tecnologia', 4, 18, 'tecnologia', 1, 1),
(9, 8, 'Bolsos', NULL, 19, 'bolsos', 1, 1),
(10, 8, 'Maletines', NULL, 20, 'maletines', 1, 1),
(11, 8, 'Mochilas', NULL, 21, 'mochilas', 1, 1),
(12, 8, 'Valijas & Carry-On', NULL, 22, 'valijas-carry-on', 1, 1),
(13, NULL, 'Pad Mouse', 5, 23, 'pad-mouse', 1, 1),
(14, 13, 'Hogar', NULL, 24, 'hogar', 1, 1),
(15, 13, 'Vinos', NULL, 25, 'vinos', 1, 1),
(16, 13, 'Tiempo Libre', NULL, 26, 'tiempo-libre', 1, 1),
(17, 13, 'Herramientas', NULL, 27, 'herramientas', 1, 1),
(18, NULL, 'Microinyectado', 6, 28, 'microinyectado', 1, 1),
(19, 18, 'Computacion', NULL, 29, 'computacion', 1, 1),
(20, 18, 'Otros', NULL, 30, 'otros', 1, 1),
(21, NULL, 'Sombrillas', 7, 31, 'sombrillas', 1, 1),
(22, 21, 'Accesorios', NULL, 32, 'accesorios', 1, 1),
(23, 21, 'Libreria', NULL, 33, 'libreria', 1, 1),
(24, NULL, 'Lenticular', 8, 34, 'lenticular', 1, 1),
(25, 24, 'Gorras', NULL, 35, 'gorras', 1, 1),
(26, 24, 'Chambergo', NULL, 36, 'chambergo', 1, 1),
(27, NULL, 'Sublimado', 9, 37, 'sublimado', 1, 1),
(28, 27, 'Coolers', NULL, 38, 'coolers', 1, 1),
(29, 27, 'Jarros', NULL, 39, 'jarros', 1, 1),
(30, 27, 'Termos', NULL, 40, 'termos', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_marcas`
--

CREATE TABLE `categorias_marcas` (
  `id_categoria_marca` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `id_marca` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id_color` int(10) UNSIGNED NOT NULL,
  `nombre_color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo_color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `nombre_color`, `codigo_color`, `habilitado`) VALUES
(1, 'Rojo', '#ff3d3d', 1),
(2, 'Verde', '#3fa63f', 1),
(3, 'Plata', '#fff', 1),
(4, 'Marron', '#fff', 1),
(5, 'Negro', '#000000', 1),
(6, 'Azul Francia', '#0000ff', 1),
(7, 'Amarillo', '#fff33d', 1),
(8, 'Celeste', '#fff', 1),
(9, 'Tiza', '#fff', 1),
(10, 'Azul Marino', '#fff', 1),
(11, 'Gris', '#fff', 1),
(12, 'Transparante', '#fff', 1),
(13, 'Naranja', '#ff9a00', 1),
(14, 'Beige', '#fff', 1),
(15, 'Jean', '#fff', 1),
(16, 'Verde Militar', '#fff', 1),
(17, 'Violeta', '#fff', 1),
(18, 'Blanco', '#f7f7f7', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id_configuracion` int(11) NOT NULL,
  `etiqueta` varchar(400) NOT NULL,
  `llave` varchar(250) NOT NULL,
  `valor` text NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1',
  `id_imagen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`id_configuracion`, `etiqueta`, `llave`, `valor`, `habilitado`, `id_imagen`) VALUES
(1, 'Titulo navegador de la pagina', 'head_title', 'ZeCat', 0, NULL),
(2, 'Direccion Facebook', 'url_facebook', 'https://www.facebook.com/owpsac/', 1, NULL),
(3, 'Descripcion de la web', 'head_description', 'Zecat  entrega productos promocionales a mas de 40 países, teniendo un gran stock para entrega inmediata, realizado desarrollos especiales, sourcing y logística de los productos. Artículos promocionales.', 1, NULL),
(4, 'Keywords de la pagina', 'head_keywords', 'zecat, articulos promocionales, merchandising, marketing, promociones, importaciones, china, lider regional, doe', 1, NULL),
(5, 'Texto de pie de pagina', 'pie_pagina', '<p>Zecat Internacional</p>\r\n<p class="pDisplay">:&nbsp;</p>\r\n<p><a>Copyright © 2016</a></p>', 1, NULL),
(6, 'Correo a donde se enviaran mails', 'correo_envio_mail', 'nadla20xx@gmail.com', 1, NULL),
(7, 'Logo para navegador', 'logo_navegador', 'logo.ico', 1, NULL),
(8, 'Url Linkedin', 'url_linkedin', 'https://www.linkedin.com/company/zecat', 1, NULL),
(9, 'Url chat facebook', 'url_chat_facebook', '//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=471235882979513', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificaciones`
--

CREATE TABLE `especificaciones` (
  `id_especificacion` int(10) UNSIGNED NOT NULL,
  `nombre_especificacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icono` int(11) NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `especificaciones`
--

INSERT INTO `especificaciones` (`id_especificacion`, `nombre_especificacion`, `icono`, `habilitado`) VALUES
(1, 'PULSADOR', 51, 1),
(2, 'CARTUCHO DE TINTA', 52, 1),
(3, 'TRAZO 1MM', 53, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(10) UNSIGNED NOT NULL,
  `ruta_imagen` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `ruta_imagen`, `habilitado`) VALUES
(1, 'categorias/w08830eiq63iurzpeev9rw5sl4i5zzgeyp1ooa92.png', 0),
(2, 'categorias/36aBSrdLvI6vnHDCjrnTmqw05kYiSEQIlLMbyduC.png', 0),
(3, 'categorias/er1jftbadgmy9v0kw3dfhd0a12wfwm0zu7yvrut4.png', 1),
(4, 'categorias/RDszkmtMgAsbpDszmOLozmc6x7m7L4lUfqJBTpHu.png', 1),
(5, 'categorias/t3wwgaVIhRIxrqL3GxH81KwUbUyMjoPO07plWhXv.png', 1),
(6, 'categorias/iSM2KLIVCDVuxvpEoX6G0fmFQC8bn9Yz5zrHFPCN.png', 1),
(7, 'categorias/gwDvvbf7x8etvQax2O4jJItHtZDfKkH02vIWMEW6.png', 1),
(8, 'categorias/K6RfK7WXRje4X1iZQyyP4tfhmu3KULblfHXGKKmK.png', 1),
(9, 'categorias/ZVveJiWR3VaPnVT2dpbIGgvLDjIXLjInL2p5Ycut.png', 1),
(10, 'categorias/qczl1rwhhl7s60wrd8ju3hgmv7draeolt2n792a9.png', 1),
(11, 'categorias/x6pzfxccvkxfe2djt3e50o6djsfwt9tjck1ycjqs.png', 1),
(12, 'categorias/ok2pgx65bq5w803jbmlkvhj87ne38cpwe07ce81i.png', 1),
(13, 'categorias/2jb3ijxdeb84oga4hf3yqjmbyuyl1m0g2w0o22vw.png', 1),
(14, 'categorias/o3mf3wv4h5whf8mevtbe7ac45ny6vz7y7lgkji4w.png', 1),
(15, 'categorias/90e5gtz7yta7vwnk5bsrlhq4c6elrg3ka621l2mv.png', 1),
(16, 'categorias/k87xts8do90jtvzkktq4erp1nsejmqisjuro5fok.png', 1),
(17, 'categorias/2kt6iafwt18kg7sro7kft8nhiv75xgiiqfrsi03n.png', 1),
(18, 'categorias/ldg3o3c837nbirhta0jlbelyvndn0fnnxh5v9gor.png', 1),
(19, 'categorias/w3ejhc684bsssf70almih51cagkca8llb6ng2jff.png', 1),
(20, 'categorias/n3904szqn14dioi65xgkl61w7cxrc5e3ropov9tq.png', 1),
(21, 'categorias/cner9ctm56hhthcx67p97r0jd6g9q9s5rmyyucr5.png', 1),
(22, 'categorias/dashhr1n5wh7if6ctq6qs67tnhpreoxv2rdmgs3w.png', 1),
(23, 'categorias/i27h511wlxv8peefb25vrs10sry7bcmba2wcacyu.png', 1),
(24, 'categorias/6qjcjj1tx7b39emtr8uc47g43uz9cnwvv1hjuwt2.png', 1),
(25, 'categorias/n9ec5vhm68tw7qsnqo6039p1aghvun175km6xi1f.png', 1),
(26, 'categorias/yd4lkewc9ah7p66ehu8hbhr4vb7eex8j3gwlkpps.png', 1),
(27, 'categorias/l1ufz1mj7gq1ljs0wdwgosfv8y0lti6ie9v2989q.png', 1),
(28, 'categorias/br86tg0nmac0z3waz1297n2mtedmldwt14vugndc.png', 1),
(29, 'categorias/oe1b25uz7b80f44j224bslkyin73ttsd4l02uzgu.png', 1),
(30, 'categorias/ae3ao3eyzdawhmpyxrh639nxb00zjmi4nmmzmz6c.png', 1),
(31, 'categorias/hfsr25w5ywyipfn0r200xc11mn5ep12wmmxczype.png', 1),
(32, 'categorias/php07iq17l9h6t27fobot9mlpmie4wpzxtdawbsj.png', 1),
(33, 'categorias/4ug74zzt9va176rk5yx4nz7s4kgobwd2zl88u6w0.png', 1),
(34, 'categorias/75p596xczzl63flm01hzh1l1apznataztd0z8sft.png', 1),
(35, 'categorias/p5yuyzx6x51z55slokyj8gmop6vxbsfd6ly2x06d.png', 1),
(36, 'categorias/lfxzam1e7s6so7k8bg2qzkd51kz0vrwgnk76n6md.png', 1),
(37, 'categorias/dff5cynlswnj0g49wwoi76olzing9jcmzb4ogpgi.png', 1),
(38, 'categorias/bjfwccpp6m42kbwdogf514wf4t4ohyb6c0o7t99k.png', 1),
(39, 'categorias/ntlroe40pex6ok81ab42i52vu4rw8ofg1txqynsw.png', 1),
(40, 'categorias/xe0q26uqellnhhd2qrro0mkcrehedyd6kemoffnn.png', 1),
(41, 'categorias/9s4vfs6b1tddkktf9alfcaroywt82ekgkz4hqpda.png', 1),
(42, 'categorias/d9ok1ys161rr0y0ag6kpgixcaptn32v4h7tdoy2q.png', 1),
(43, 'categorias/qyhvc84886aq66zxoefyqwizz8w03gzx34mbxfpx.png', 1),
(44, 'categorias/x7364u7r0xzvobx4s3hllslcqzqkqkzx9wgi83w4.png', 1),
(45, 'productos/MFbc7b9LHq1aU9fKWvNn3wEd26sRHVB6g2Rmdi7Z.png', 1),
(46, 'productos/XNJQOsmQEJKmOUcUGTNnJPeWt87182wY9XaSTbK5.png', 1),
(51, 'especificaciones/02e69c71ac1bfe082670f7bc124c8fee989c0f84.jpg', 1),
(52, 'especificaciones/9b2a8472013b1bd3bfa2f7fa66e241d723452ecb.jpg', 1),
(53, 'especificaciones/736bb0db3fe63a3a6e31b6bbf7af63cbd0e6d2a0.jpg', 1),
(54, 'productos/YAgX0iV80nUP3bXkt27ot6WXEZrecXwfXc1OtOlJ.png', 1),
(55, 'productos/mNRnKVjOejvIY51ewx831jRPExpErvPOtyaFErfR.png', 1),
(58, 'productos/zqZe2fNA9paDUUxztZ8K4N9q3tt5nYly6Yrh55Qx.png', 1),
(59, 'productos/pqsYWmdgvP14AiP1ZG450mqQtI7COqXXP6DRplFL.png', 1),
(63, 'productos/gBictbAqVyCS6kk3DxYKIW6JQw01k0jO6hxEouKU.png', 1),
(64, 'productos/qfciV9VgbfoZoIfs0VlT57UeXCpwk3HUcQAoKmsZ.png', 1),
(65, 'productos/j86pc2HBfUwaSbbfzzNWAhcs7fXBNtRPxVYugtMD.png', 1),
(66, 'productos/FdMSfvbBMkecpgmYhQmeXgbygkEpWgy2T0cEzaPn.png', 1),
(69, 'productos/9pl3yJjRXDvGmWMMgXe1VaEGsBFsEO743bxfNb3G.png', 1),
(70, 'productos/EJoyKtNl2RDN5UmmlJZDJWztaAMHF9qhJIPbiAfA.png', 1),
(73, 'productos/nrqV3pilpTGn9PzFdvjXxtwiRj8SZTkBTdkhk4W2.png', 1),
(74, 'productos/SYbNVeMdQT7bVo9aiEDnjhHGAGAvq9nmjr2o22VA.png', 1),
(75, 'productos/Awk4nd1qOGBWAktVkGQPSTpgKsxLJKpzkwWADxIF.png', 1),
(76, 'productos/to3s5qdZkLyGciW4FRJnl0oVwRO6YirLBVV9Hc87.png', 1),
(77, 'productos/tYpGzmNvz0csK00CeIqsqcop6jnAbxIN0kkISuLY.png', 1),
(78, 'productos/FbVNqrZAqb1OIL2McDxi9A0v6yQkDtqkz08sZAQX.png', 1),
(81, 'productos/JfckzeKwGi9OalrMkfqDM3Xo9sASUZP3jbypSNIv.png', 1),
(82, 'productos/Cm7LN1In1qN2UvPwVtMzPkTVtwdVF4HNjGZtpHhI.png', 1),
(85, 'productos/vvDxLRldPSb3CMAv4QTLYNbMFqX5koSoLlqWU2AS.png', 1),
(89, 'productos/ycxqiXnFo2WukuTVItwteWXCDWcyV9d81QwIg3G3.png', 1),
(90, 'productos/sfvoTLUgdb9E49xYDOB5reprnWOmCPLCmJqch4Xi.png', 1),
(93, 'productos/uN0hJntvLuasnd7XbxjamHWt5hymJ9NH71qmB96K.png', 1),
(94, 'productos/CJGavjZZOjbv7HYCImJjpDF8cSoPjYObIlAsAQfo.png', 1),
(106, 'productos/T22wrmxHXUVjvjhH4MFNp1DJ3l1nL3lCrODVjOiv.png', 1),
(107, 'productos/8MdJT2Mz0HDX6j4Ji5DD1bRXqRpEOEtsc8sz8cNs.png', 1),
(97, 'sliders/4df593437c254c73c6d6367a62ece19a399ce007.png', 1),
(98, 'sliders/37bb8a9c32021f7519e52ce060bf3935e5d19479.png', 1),
(99, 'sliders/0152cd88815fe3dad91a4ed99c56fe66486b99c5.png', 1),
(100, 'sliders/1038b34e3c338d75995146a6ffef30cd013e047d.png', 1),
(101, 'sliders/3446d24d9b93d2b9ddab63cb604d279872ee6554.png', 1),
(102, 'sliders/13629c0b8389b4c9f8a203b9a4c6187962e4269c.png', 1),
(103, 'sliders/c33f4c6435bb71908e9d1049dcfb7c606f9ec3e9.png', 1),
(104, 'sliders/e1d02112918cf8efffc389dba215da3c8b6efb2c.png', 1),
(105, 'sliders/e5ca4655aa37a8f51fed035c3a3c6b70e954be24.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(10) UNSIGNED NOT NULL,
  `nombre_marca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_29_220222_tablas_iniciales', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(10) UNSIGNED NOT NULL,
  `nombre_perfil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `nombre_perfil`, `habilitado`) VALUES
(1, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `nombre_producto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  `precio` double(8,2) NOT NULL DEFAULT '0.00',
  `slug` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `id_usuario_creacion` int(11) DEFAULT NULL,
  `id_usuario_modificacion` int(11) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion`, `stock`, `precio`, `slug`, `fecha_publicacion`, `id_usuario_creacion`, `id_usuario_modificacion`, `fecha_creacion`, `fecha_modificacion`, `habilitado`) VALUES
(1, 'Usb 2d', 'Usb 2d', 0, 0.00, 'usb-2d', '2016-08-02', 1, 1, '2016-08-02 00:00:00', '2016-10-12 13:26:47', 1),
(2, 'Usb 3d', 'Boligrafo con cuerpo solid. Retráctil.\r\nTrazo 1.0 mm.\r\nCartucho Tipo Parker.', 0, 0.00, 'usb-3d', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 13:29:02', 1),
(3, 'Usb Totem', 'Boligrafo con cuerpo solid. Retráctil.\r\nTrazo 1.0 mm.\r\nCartucho Tipo Parker', 0, 0.00, 'usb-totem', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 13:30:30', 1),
(4, 'Usb Card', 'Boligrafo con cuerpo retráctil. Clip, grip y pulsador silver.\r\nTrazo 1.0 mm.\r\nCartucho Tipo Parker', 0, 0.00, 'usb-card', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 13:32:16', 1),
(5, 'Usb Twister', 'Bolígrafo plástico cuerpo frosted. Aro, clip, botón y puntera silver. Grip azebrado combinando plástico frosted con lineas blancas.\r\nTrazo 1.0 Mm. Cartucho tipo parker. ', 0, 0.00, 'usb-twister', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 13:35:33', 1),
(6, 'Usb Llavero', 'Bolígrafo de plástico translúcido. Botón tipo resorte con detalle interior en shining chrome. Aro y clip de metal.\r\nTrazo 1.0 mm. Cartucho tipo Parker.', 0, 0.00, 'usb-llavero', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 13:59:09', 1),
(7, 'Usb Pulsera', 'Bolígrafo plástico con laterales planos. Cuerpo silver. Aro, puntera y detalles de grip lateral en plastico translucido.\r\nTrazo 1.0 Mm. Cartucho tipo Parker. ', 0, 0.00, 'usb-pulsera', '2016-08-05', 1, 1, '2016-08-05 00:00:00', '2016-10-12 14:00:19', 1),
(8, 'Usb Slap', 'Bolígrafo plástico cuerpo silver. Aro, clip, grip y puntera de plástico translúcido. Aro y grip acanalado.', 0, 0.00, 'usb-slap', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 14:01:36', 1),
(9, 'Usb Cuadrado', 'Bolígrafo retractil de cuerpo solido con clip metalico.\r\nGrip siliconado.', 0, 0.00, 'usb-cuadrado', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 15:01:16', 1),
(10, 'Usb Redondo', 'Bolígrafo plástico frosted con grip y clip transparente.', 0, 0.00, 'usb-redondo', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 15:02:45', 1),
(11, 'Usb Bambu', 'Bolígrafo plástico con puntera, aro y botón metalizado.\r\nDiseño italiano.', 0, 0.00, 'usb-bambu', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 15:04:03', 1),
(12, 'Usb Destapador', 'Boligrafo cuerpo silver, grip en plastico transparente. Clip de metal con detalle en plastico. Detalles en shining chrome.\r\nTrazo 1,0 Mm.\r\nCartucho tipo Parker. ', 0, 0.00, 'usb-destapador', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 15:05:30', 1),
(13, 'Usb Lanyard', 'Boligrafo de cuerpo sólido retractil. Clip, grip y pulsador silver.\r\nTrazo 1.0 mm.\r\nCartucho tipo parker. \r\nPeso: 6 Gr.\r\nMedida: 13cm.', 0, 0.00, 'usb-lanyard', '2016-08-06', 1, 1, '2016-08-06 00:00:00', '2016-10-12 15:06:40', 1),
(14, 'Usb Lapicero', 'Usb Lapicero', 0, 0.00, 'usb-lapicero', '2016-10-12', 1, NULL, '2016-10-12 15:08:09', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_carruseles`
--

CREATE TABLE `productos_carruseles` (
  `id_producto_carrusel` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_carrusel` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_carruseles`
--

INSERT INTO `productos_carruseles` (`id_producto_carrusel`, `id_producto`, `id_carrusel`, `habilitado`) VALUES
(24, 1, 2, 1),
(23, 1, 1, 1),
(26, 2, 2, 1),
(27, 3, 2, 1),
(28, 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE `productos_categorias` (
  `id_producto_categoria` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_categorias`
--

INSERT INTO `productos_categorias` (`id_producto_categoria`, `id_producto`, `id_categoria`, `habilitado`) VALUES
(46, 2, 2, 1),
(44, 1, 2, 1),
(47, 3, 2, 1),
(48, 4, 3, 1),
(49, 5, 3, 1),
(50, 6, 4, 1),
(51, 7, 4, 1),
(60, 14, 9, 1),
(55, 9, 5, 1),
(56, 10, 5, 1),
(57, 11, 6, 1),
(58, 12, 7, 1),
(59, 13, 7, 1),
(54, 8, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_colores`
--

CREATE TABLE `productos_colores` (
  `id_producto_color` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_color` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_colores`
--

INSERT INTO `productos_colores` (`id_producto_color`, `id_producto`, `id_color`, `habilitado`) VALUES
(170, 2, 18, 1),
(158, 1, 6, 1),
(157, 1, 2, 1),
(156, 1, 1, 1),
(169, 2, 13, 1),
(168, 2, 7, 1),
(167, 2, 6, 1),
(166, 2, 5, 1),
(165, 2, 2, 1),
(174, 3, 6, 1),
(173, 3, 5, 1),
(172, 3, 2, 1),
(171, 3, 1, 1),
(176, 4, 18, 1),
(175, 4, 5, 1),
(180, 6, 18, 1),
(179, 6, 6, 1),
(178, 6, 2, 1),
(177, 6, 1, 1),
(188, 8, 18, 1),
(187, 8, 6, 1),
(186, 8, 2, 1),
(185, 8, 1, 1),
(189, 9, 18, 1),
(193, 11, 6, 1),
(192, 11, 5, 1),
(191, 11, 2, 1),
(190, 11, 1, 1),
(197, 12, 6, 1),
(196, 12, 5, 1),
(195, 12, 2, 1),
(194, 12, 1, 1),
(200, 13, 18, 1),
(199, 13, 6, 1),
(198, 13, 5, 1),
(201, 14, 1, 1),
(202, 14, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_especificaciones`
--

CREATE TABLE `productos_especificaciones` (
  `id_producto_especificacion` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_especificacion` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_especificaciones`
--

INSERT INTO `productos_especificaciones` (`id_producto_especificacion`, `id_producto`, `id_especificacion`, `habilitado`) VALUES
(109, 1, 3, 1),
(108, 1, 2, 1),
(107, 1, 1, 1),
(113, 2, 3, 1),
(112, 2, 2, 1),
(116, 3, 3, 1),
(115, 3, 2, 1),
(114, 3, 1, 1),
(119, 4, 3, 1),
(118, 4, 2, 1),
(117, 4, 1, 1),
(122, 5, 3, 1),
(121, 5, 2, 1),
(120, 5, 1, 1),
(125, 6, 3, 1),
(124, 6, 2, 1),
(123, 6, 1, 1),
(128, 7, 3, 1),
(127, 7, 2, 1),
(126, 7, 1, 1),
(134, 8, 3, 1),
(133, 8, 2, 1),
(132, 8, 1, 1),
(137, 9, 3, 1),
(136, 9, 2, 1),
(135, 9, 1, 1),
(139, 10, 3, 1),
(138, 10, 1, 1),
(141, 11, 3, 1),
(140, 11, 1, 1),
(144, 13, 3, 1),
(143, 13, 2, 1),
(142, 13, 1, 1),
(145, 14, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_imagenes`
--

CREATE TABLE `productos_imagenes` (
  `id_producto_imagen` int(11) NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `id_imagen` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_imagenes`
--

INSERT INTO `productos_imagenes` (`id_producto_imagen`, `id_producto`, `id_imagen`, `habilitado`) VALUES
(1, 1, 45, 1),
(2, 1, 46, 1),
(7, 2, 54, 1),
(8, 2, 55, 1),
(11, 3, 58, 1),
(12, 3, 59, 1),
(16, 4, 63, 1),
(17, 4, 64, 1),
(18, 5, 65, 1),
(19, 5, 66, 1),
(22, 6, 69, 1),
(23, 6, 70, 1),
(26, 7, 73, 1),
(27, 7, 74, 1),
(28, 8, 75, 1),
(29, 8, 76, 1),
(30, 9, 77, 1),
(31, 9, 78, 1),
(34, 10, 81, 1),
(35, 10, 82, 1),
(38, 11, 85, 1),
(42, 12, 89, 1),
(43, 12, 90, 1),
(46, 13, 93, 1),
(47, 13, 94, 1),
(50, 14, 106, 1),
(51, 14, 107, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(10) UNSIGNED NOT NULL,
  `nombre_slider` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id_slider`, `nombre_slider`, `habilitado`) VALUES
(1, 'Slider Principal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders_imagenes`
--

CREATE TABLE `sliders_imagenes` (
  `id_slider_imagen` int(11) NOT NULL,
  `id_slider` int(10) UNSIGNED NOT NULL,
  `id_imagen` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sliders_imagenes`
--

INSERT INTO `sliders_imagenes` (`id_slider_imagen`, `id_slider`, `id_imagen`, `habilitado`) VALUES
(1, 1, 97, 1),
(2, 1, 98, 1),
(3, 1, 99, 1),
(4, 1, 100, 1),
(5, 1, 101, 1),
(6, 1, 102, 1),
(7, 1, 103, 1),
(8, 1, 104, 1),
(9, 1, 105, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`, `id_perfil`, `habilitado`, `remember_token`) VALUES
(1, 'admin', 'a6f30815a43f38ec6de95b9a9d74da37', 1, 1, 'npSYAvPwpwCMs6scAielr3KEQtpu9lDIwH5ozJvBczvSacDXTIG63mbM7O1O');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carruseles`
--
ALTER TABLE `carruseles`
  ADD PRIMARY KEY (`id_carrusel`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `categorias_id_categoria_padre_foreign` (`id_categoria_padre`),
  ADD KEY `categorias_id_imagen_foreign` (`id_imagen`),
  ADD KEY `categorias_id_imagen_principal_foreign` (`id_imagen_principal`);

--
-- Indices de la tabla `categorias_marcas`
--
ALTER TABLE `categorias_marcas`
  ADD PRIMARY KEY (`id_categoria_marca`),
  ADD KEY `categorias_marcas_id_categoria_foreign` (`id_categoria`),
  ADD KEY `categorias_marcas_id_marca_foreign` (`id_marca`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id_configuracion`),
  ADD UNIQUE KEY `llave` (`llave`);

--
-- Indices de la tabla `especificaciones`
--
ALTER TABLE `especificaciones`
  ADD PRIMARY KEY (`id_especificacion`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_carruseles`
--
ALTER TABLE `productos_carruseles`
  ADD PRIMARY KEY (`id_producto_carrusel`),
  ADD KEY `productos_carruseles_id_producto_foreign` (`id_producto`),
  ADD KEY `productos_carruseles_id_carrusel_foreign` (`id_carrusel`);

--
-- Indices de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  ADD PRIMARY KEY (`id_producto_categoria`),
  ADD KEY `productos_categorias_id_producto_foreign` (`id_producto`),
  ADD KEY `productos_categorias_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `productos_colores`
--
ALTER TABLE `productos_colores`
  ADD PRIMARY KEY (`id_producto_color`),
  ADD KEY `productos_colores_id_producto_foreign` (`id_producto`),
  ADD KEY `productos_colores_id_color_foreign` (`id_color`);

--
-- Indices de la tabla `productos_especificaciones`
--
ALTER TABLE `productos_especificaciones`
  ADD PRIMARY KEY (`id_producto_especificacion`),
  ADD KEY `productos_especificaciones_id_producto_foreign` (`id_producto`),
  ADD KEY `productos_especificaciones_id_especificacion_foreign` (`id_especificacion`);

--
-- Indices de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  ADD PRIMARY KEY (`id_producto_imagen`),
  ADD KEY `productos_imagenes_id_producto_foreign` (`id_producto`),
  ADD KEY `productos_imagenes_id_imagen_foreign` (`id_imagen`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `sliders_imagenes`
--
ALTER TABLE `sliders_imagenes`
  ADD PRIMARY KEY (`id_slider_imagen`),
  ADD KEY `sliders_imagenes_id_slider_foreign` (`id_slider`),
  ADD KEY `sliders_imagenes_id_imagen_foreign` (`id_imagen`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carruseles`
--
ALTER TABLE `carruseles`
  MODIFY `id_carrusel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `categorias_marcas`
--
ALTER TABLE `categorias_marcas`
  MODIFY `id_categoria_marca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  MODIFY `id_configuracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `especificaciones`
--
ALTER TABLE `especificaciones`
  MODIFY `id_especificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `productos_carruseles`
--
ALTER TABLE `productos_carruseles`
  MODIFY `id_producto_carrusel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  MODIFY `id_producto_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `productos_colores`
--
ALTER TABLE `productos_colores`
  MODIFY `id_producto_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT de la tabla `productos_especificaciones`
--
ALTER TABLE `productos_especificaciones`
  MODIFY `id_producto_especificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  MODIFY `id_producto_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sliders_imagenes`
--
ALTER TABLE `sliders_imagenes`
  MODIFY `id_slider_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
