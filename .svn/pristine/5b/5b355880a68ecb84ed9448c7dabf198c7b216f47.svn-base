-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2016 a las 18:26:25
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `categorias_id_categoria_padre_foreign` (`id_categoria_padre`),
  ADD KEY `categorias_id_imagen_foreign` (`id_imagen`),
  ADD KEY `categorias_id_imagen_principal_foreign` (`id_imagen_principal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_id_categoria_padre_foreign` FOREIGN KEY (`id_categoria_padre`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `categorias_id_imagen_foreign` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`),
  ADD CONSTRAINT `categorias_id_imagen_principal_foreign` FOREIGN KEY (`id_imagen_principal`) REFERENCES `imagenes` (`id_imagen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
