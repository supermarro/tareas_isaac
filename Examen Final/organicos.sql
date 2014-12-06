-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2014 a las 00:12:07
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `organicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `belleza`
--

CREATE TABLE `belleza` (
`id` int(11) unsigned NOT NULL,
  `nombre_de_producto` varchar(255) DEFAULT NULL,
  `tipo_de_producto` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `belleza`
--

INSERT INTO `belleza` (`id`, `nombre_de_producto`, `tipo_de_producto`, `precio`, `imagen`) VALUES
(1, 'Rehab', 'Shampoo', '$455.00 MXN', 'belleza1.jpg'),
(2, 'Snail Extract Gel', 'Crema', '$500.00 MXN', 'belleza2.jpg'),
(4, 'jabón artesanal en barra', 'jabon', '$200.00 MXN', 'belleza3.jpg'),
(5, 'Bee Natural', 'Crema Corporal', '$100.00 MXN', 'belleza4.jpg'),
(6, 'Kare Green', 'Crema', '$700.00 MXN', 'belleza5.jpg'),
(7, 'Aroma Zone', 'Loción', '$500.00 MXN', 'belleza6.jpg'),
(8, 'Beard Oil', 'Aceite', '$300.00 MXN', 'belleza7.jpg'),
(9, 'Cera de bigote', 'Cera', '$400.00 MXN', 'belleza8.jpg'),
(10, 'La Jacinta', 'Crema', '$300.00 MXN', 'belleza9.jpg'),
(11, 'Argán', 'Aceite Corporal', '$200.00 MXN', 'belleza10.jpg'),
(12, 'Massage Oil', 'Aceite', '$500.00 MXN ', 'belleza 11.jpg'),
(13, 'Mar Galisteo', 'Unguento', '$300.00 MXN ', 'belleza12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biodegradables`
--

CREATE TABLE `biodegradables` (
`id` int(11) unsigned NOT NULL,
  `nombre_de_producto` varchar(255) DEFAULT NULL,
  `tipo_de_producto` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `biodegradables`
--

INSERT INTO `biodegradables` (`id`, `nombre_de_producto`, `tipo_de_producto`, `precio`, `imagen`) VALUES
(1, 'libreta reciclada', 'libreta', '$18.00 MXN', 'bio1.jpg'),
(2, 'poop bags', 'bolsa', '$40.00 MXN', 'bio2.jpg'),
(3, 'rhein', 'suplemento de oficina', '$100.00 MXN', 'bio3.jpg'),
(4, 'cubiertos y platos', 'plastico', '$50.00 MXN', 'bio4.jpg'),
(5, 'bolsa ecologica', 'bolsa', '$39.00 MXN', 'bio5.jpg'),
(6, 'Ecover', 'limpiador', '$150.00 MXN', 'bio6.jpg'),
(7, 'Organickiwi', 'recipiente', '$70.00 MXN', 'bio7.jpg'),
(8, 'Macetas', 'Macetas', '$30.00 MXN', 'bio8.jpg'),
(9, 'zapato bio-degradable', 'zapatos', '$900.00 MXN', 'bio9.jpg'),
(10, 'LifeBox', 'Caja', '$60.00 MXN', 'bio10.jpg'),
(11, 'EcoFrego', 'Jabon', '$100.00 MXN', 'bio11.jpg'),
(12, 'Scothc Bright', 'Esponjas', '$30.00 MXN', 'bio12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `med_nat`
--

CREATE TABLE `med_nat` (
`id` int(11) unsigned NOT NULL,
  `nombre_de_producto` varchar(255) DEFAULT NULL,
  `tipo_de_producto` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `med_nat`
--

INSERT INTO `med_nat` (`id`, `nombre_de_producto`, `tipo_de_producto`, `precio`, `imagen`) VALUES
(1, 'Valeriana', 'Benefit', '$150.00 MXN', 'medicina1.jpg'),
(2, 'Marihuana', 'pastillas', '$200.00 MXN', 'medicina2.jpg'),
(3, 'Homacord', 'solucion', '$700.00 MXN', 'medicina3.jpg'),
(4, 'Arnica', 'gotas', '$400.00 MXN', 'medicna4.jpg'),
(5, 'Estracto de Manzanilla', 'gotas', '$500.00 MXN', 'mecina5.jpg'),
(6, 'Chincoal', 'gotas', '$100.00 MXN', 'medicina6.jpg'),
(7, 'Chochos Homeopaticos', 'chochos', '$70.00 MXN', 'medicina7.jpg'),
(8, 'KingBio HEMORROIDES', 'spray', '$120.00 MXN', 'medicina8.jpg'),
(9, 'Capulas Fruto Dragón', 'capsulas', '$150.00 MXN', 'medicina9.jpg'),
(10, 'HCG', 'Aminoacidos', '$300.00 MXN', 'medicina10.jpg'),
(11, 'Estracto de lavanda', 'aromaterapia', '$400.000 MXN', 'medicina11.jpg'),
(12, 'Velas', 'aromaterapia', '$50.00 MXN', 'medicina12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
`id` int(11) unsigned NOT NULL,
  `nombre_de_producto` varchar(255) DEFAULT NULL,
  `tipo_de_producto` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id`, `nombre_de_producto`, `tipo_de_producto`, `precio`, `imagen`) VALUES
(1, 'Repisa', 'repisa', '$457.45 MXN', 'muebles1.jpg'),
(2, 'Pack silla + Mesa', 'mesa', '$1200.00 MXN', 'muebles2.jpg'),
(3, 'Repisa artistica', 'repisa', '$3000.00 MXN', 'muebles3.jpg'),
(4, 'Asiento carton', 'silla', '$300.00 MXN', 'muebles4.jpg'),
(5, 'repisa de madera reciclada', 'repisa', '$4000.00 MXN', 'muebles5.jpg'),
(6, 'repisa de madera artistica', 'repisa', '$1500.00 MXN', 'muebles6.jpg'),
(7, 'Mesa de cartón', 'mesa', '$3000.00 MXN', 'muebles7.jpg'),
(8, 'Banca Skate', 'banca', '$3000.00 MXN', 'muebles8.jpg'),
(9, 'Comedor reciclabe', 'comedor', '$1200.00 MXN', 'muebles9.jpg'),
(10, 'Librero', 'Librero', '$3000.00 MXN ', 'muebles10.jpg'),
(11, 'Sillón corcho', 'Sillon', '$4000.00 MXN', 'muebles11.jpg'),
(12, 'Perchero', 'Perchero', '$5000.00 MXN', 'muebles12.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `belleza`
--
ALTER TABLE `belleza`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `biodegradables`
--
ALTER TABLE `biodegradables`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `med_nat`
--
ALTER TABLE `med_nat`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `belleza`
--
ALTER TABLE `belleza`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `biodegradables`
--
ALTER TABLE `biodegradables`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `med_nat`
--
ALTER TABLE `med_nat`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;