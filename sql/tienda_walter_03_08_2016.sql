-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-08-2016 a las 17:18:55
-- Versión del servidor: 5.7.13-0ubuntu0.16.04.2
-- Versión de PHP: 5.6.24-1+deb.sury.org~xenial+1

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
(1, NULL, 'Boligrafos', 2, 3, 'boligrafos', 1, 1),
(2, 1, 'Plasticos + Metal', NULL, 12, 'plasticos-metal', 1, 1),
(3, 1, 'Plasticos', NULL, 13, 'plasticos', 1, 1),
(4, 1, 'Metalicos', NULL, 14, 'metalicos', 1, 1),
(5, 1, 'Estuches', NULL, 15, 'estuches', 1, 1),
(6, 1, 'Sets', NULL, 16, 'sets', 1, 1),
(7, 1, 'Tactiles', NULL, 17, 'tactiles', 1, 1),
(8, NULL, 'Bolsos y Mochilas', 4, 18, 'bolsos-y-mochilas', 1, 1),
(9, 8, 'Bolsos', NULL, 19, 'bolsos', 1, 1),
(10, 8, 'Maletines', NULL, 20, 'maletines', 1, 1),
(11, 8, 'Mochilas', NULL, 21, 'mochilas', 1, 1),
(12, 8, 'Valijas & Carry-On', NULL, 22, 'valijas-carry-on', 1, 1),
(13, NULL, 'Hogar & Tiempo Libre', 5, 23, 'hogar-tiempo-libre', 1, 1),
(14, 13, 'Hogar', NULL, 24, 'hogar', 1, 1),
(15, 13, 'Vinos', NULL, 25, 'vinos', 1, 1),
(16, 13, 'Tiempo Libre', NULL, 26, 'tiempo-libre', 1, 1),
(17, 13, 'Herramientas', NULL, 27, 'herramientas', 1, 1),
(18, NULL, 'Tecnologia', 6, 28, 'tecnologia', 1, 1),
(19, 18, 'Computacion', NULL, 29, 'computacion', 1, 1),
(20, 18, 'Otros', NULL, 30, 'otros', 1, 1),
(21, NULL, 'Escritorio', 7, 31, 'escritorio', 1, 1),
(22, 21, 'Accesorios', NULL, 32, 'accesorios', 1, 1),
(23, 21, 'Libreria', NULL, 33, 'libreria', 1, 1),
(24, NULL, 'Gorros', 8, 34, 'gorros', 1, 1),
(25, 24, 'Gorras', NULL, 35, 'gorras', 1, 1),
(26, 24, 'Chambergo', NULL, 36, 'chambergo', 1, 1),
(27, NULL, 'Termicos', 9, 37, 'termicos', 1, 1),
(28, 27, 'Coolers', NULL, 38, 'coolers', 1, 1),
(29, 27, 'Jarros', NULL, 39, 'jarros', 1, 1),
(30, 27, 'Termos', NULL, 40, 'termos', 1, 1),
(31, NULL, 'Llaveros', 10, 41, 'llaveros', 1, 1),
(32, 31, 'Todos', NULL, 42, 'todos', 1, 1),
(33, NULL, 'Paraguas', 11, 43, 'paraguas', 1, 1),
(34, 33, 'Todos', NULL, 44, 'todos', 1, 1);

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
(5, 'Negro', '#fff', 1),
(6, 'Azul Francia', '#0000ff', 1),
(7, 'Amarillo', '#fff', 1),
(8, 'Celeste', '#fff', 1),
(9, 'Tiza', '#fff', 1),
(10, 'Azul Marino', '#fff', 1),
(11, 'Gris', '#fff', 1),
(12, 'Transparante', '#fff', 1),
(13, 'Naranja', '#fff', 1),
(14, 'Beige', '#fff', 1),
(15, 'Jean', '#fff', 1),
(16, 'Verde Militar', '#fff', 1),
(17, 'Violeta', '#fff', 1);

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
(2, 'categorias/pmbxa1zmuhfp3sx6temitwr0scwhfg1yrcgg4jl0.png', 0),
(3, 'categorias/er1jftbadgmy9v0kw3dfhd0a12wfwm0zu7yvrut4.png', 1),
(4, 'categorias/zs8k3poqngq10nlydti6zsatqm85sw6epmhwcoiw.png', 1),
(5, 'categorias/yviighaeqb5fld0ks33kykx0rjm3vqbvacpjvy2r.png', 1),
(6, 'categorias/6a4v9m0j9tr9lkj6qyq4o8tktmvt8gyl9s63rpv0.png', 1),
(7, 'categorias/o0s2xr4c6xayto16mzy111v4vovzztwhdcpygew8.png', 1),
(8, 'categorias/bz1e8v8rgw1wha73tk7gr36jzk2ciai8oi1z7vno.png', 1),
(9, 'categorias/zqxr1l6zkawmhe9xpo7zh54r29by3e8666czk20b.png', 1),
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
(45, 'productos/6e2e659d38391c5bf8880723b662e9cb52bfa147.jpg', 1),
(46, 'productos/60dcac38a7ee601403f75ce398e913e2ba3863f5.jpg', 1),
(47, 'productos/540f189d10aa42191e0f8dbffab28578e5d6ac70.jpg', 1),
(48, 'productos/905cee8ea4d689f65e0841037faf8168dcdd56fc.jpg', 1),
(49, 'productos/a973a2a90ecbff5bfb3c1ff3ace7d54caf6b4403.jpg', 1),
(50, 'productos/ea8605a02d4f4e15cac185e8a383ac00e00f15b6.jpg', 1),
(51, 'especificaciones/02e69c71ac1bfe082670f7bc124c8fee989c0f84.jpg', 1),
(52, 'especificaciones/9b2a8472013b1bd3bfa2f7fa66e241d723452ecb.jpg', 1),
(53, 'especificaciones/736bb0db3fe63a3a6e31b6bbf7af63cbd0e6d2a0.jpg', 1);

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
(1, 'STARK', 'Boligrafo con cuerpo solid. Retráctil. Trazo 1.0 mm. Cartucho Tipo Parker.', 0, 0.00, 'stark', '2016-08-02', 1, 1, '2016-08-02 00:00:00', '2016-08-03 17:15:04', 1);

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
(22, 1, 2, 1);

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
(84, 1, 6, 1),
(83, 1, 2, 1),
(82, 1, 1, 1);

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
(47, 1, 3, 1),
(46, 1, 2, 1),
(45, 1, 1, 1);

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
(3, 1, 47, 1),
(4, 1, 48, 1),
(5, 1, 49, 1),
(6, 1, 50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(10) UNSIGNED NOT NULL,
  `nombre_slider` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders_imagenes`
--

CREATE TABLE `sliders_imagenes` (
  `id_slider` int(10) UNSIGNED NOT NULL,
  `id_imagen` int(10) UNSIGNED NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`, `id_perfil`, `habilitado`) VALUES
(1, 'admin', 'a6f30815a43f38ec6de95b9a9d74da37', 1, 1);

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
  MODIFY `id_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `especificaciones`
--
ALTER TABLE `especificaciones`
  MODIFY `id_especificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
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
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos_carruseles`
--
ALTER TABLE `productos_carruseles`
  MODIFY `id_producto_carrusel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
  MODIFY `id_producto_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `productos_colores`
--
ALTER TABLE `productos_colores`
  MODIFY `id_producto_color` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `productos_especificaciones`
--
ALTER TABLE `productos_especificaciones`
  MODIFY `id_producto_especificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  MODIFY `id_producto_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
