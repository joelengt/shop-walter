-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2016 a las 18:26:40
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
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(10) UNSIGNED NOT NULL,
  `ruta_imagen` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(44, 'categorias/x7364u7r0xzvobx4s3hllslcqzqkqkzx9wgi83w4.png', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
