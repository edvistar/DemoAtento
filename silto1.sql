-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2020 a las 19:59:04
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id_oferta` int(11) NOT NULL COMMENT 'Identificación de producto ',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `nombre`) VALUES
(1, 'Call center Bancolombia en Chia Cundinamarca'),
(7, 'Call center Atento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_aplicadas`
--

CREATE TABLE `ofertas_aplicadas` (
  `id_oferta_aplicada` int(11) NOT NULL COMMENT 'Id de la solicitud para la ruta.',
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Fecha de la solicitudde ruta.',
  `identificacion` int(11) NOT NULL COMMENT 'Descripcion de la ruta solicitada.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ofertas_aplicadas`
--

INSERT INTO `ofertas_aplicadas` (`id_oferta_aplicada`, `nombre`, `identificacion`) VALUES
(5, '1', 22656626);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificacion de user',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de user',
  `apellido` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido  de user',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email de user',
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de celular',
  `whatsapp` tinyint(1) NOT NULL COMMENT 'Whatsapp',
  `cargo` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Rol de user',
  `estado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del User',
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de ingreso user',
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `nombre`, `apellido`, `email`, `telefono`, `whatsapp`, `cargo`, `estado`, `fecha_ingreso`, `foto`, `pass`) VALUES
(12345777, 'Miguel', 'Lopez castro', 'lavaca@gmail.com', '3138252764', 1, 'bodeguero', 'activo', '2020-06-28 00:00:00', '../../img/upload/20200312_083546.jpg', 'fcea920f7412b5da7be0cf42b8c93759'),
(16838095, 'eduardo', 'sando', 'victorhoyoscolombia@gmail.com', '3138252764', 1, 'supervisor', 'activo', '2020-06-20 00:00:00', '../../img/upload/fotodigital.png', 'fcea920f7412b5da7be0cf42b8c93759'),
(22656626, 'Marta', 'La bandida', 'victorhoyoscolombia@gmail.net', '3138252764', 1, 'aspirante', 'activo', '2020-06-28 00:00:00', '../../img/upload/foto estrella.png', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `ofertas_aplicadas`
--
ALTER TABLE `ofertas_aplicadas`
  ADD PRIMARY KEY (`id_oferta_aplicada`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificación de producto ', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ofertas_aplicadas`
--
ALTER TABLE `ofertas_aplicadas`
  MODIFY `id_oferta_aplicada` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la solicitud para la ruta.', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
