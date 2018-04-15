-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2014 a las 19:25:25
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turnoapp_db`
--
CREATE DATABASE IF NOT EXISTS `turnoapp_db` DEFAULT CHARACTER SET ascii COLLATE ascii_general_ci;
USE `turnoapp_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `id_usuario`) VALUES
(42, 'UCA', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sucursal_empresa` (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`, `ciudad`, `id_empresa`) VALUES
(5, 'Facultad de Ingenieria', 'Alicia Moreau de Justo 1300', 'Facultad de Ingenieria', 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `temp_users`
--

INSERT INTO `temp_users` (`id`, `nombre`, `apellido`, `email`, `key`, `password`) VALUES
(11, 'La anonima', 'sadfasdf', 'oveja2003@msn.com', 'f0f7b88047962afaf06fe8ce7a4b5845', '4269f22ccc09fb17214d8baf8f6e1789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketeras`
--

CREATE TABLE IF NOT EXISTS `ticketeras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `turno` int(11) NOT NULL,
  `promedio` double NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ticketera_sucursal` (`id_sucursal`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `ticketeras`
--

INSERT INTO `ticketeras` (`id`, `turno`, `promedio`, `id_sucursal`) VALUES
(22, 3, 54.5, 5),
(23, 3, 6.5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timestamps`
--

CREATE TABLE IF NOT EXISTS `timestamps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` int(15) NOT NULL,
  `id_ticketera` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timestamps_ticketera` (`id_ticketera`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=451 ;

--
-- Volcado de datos para la tabla `timestamps`
--

INSERT INTO `timestamps` (`id`, `ts`, `id_ticketera`) VALUES
(445, 1412585066, 22),
(446, 1412585077, 22),
(447, 1412585086, 23),
(448, 1412585092, 23),
(449, 1412585099, 23),
(450, 1412585175, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_sucursales` (`id_sucursal`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `username`, `password`, `email`, `tipo`, `id_sucursal`) VALUES
(47, 'Juan', 'Ramon', 'aaaaaaa', '4269f22ccc09fb17214d8baf8f6e1789', 'oveja1987@gmail.com', 2, NULL),
(53, 'Agustin', 'Renteria Beltran', 'no-username', '4269f22ccc09fb17214d8baf8f6e1789', 'agustinrenteria@gmail.com', 1, 5);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresa_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD CONSTRAINT `sucursal_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ticketeras`
--
ALTER TABLE `ticketeras`
  ADD CONSTRAINT `ticketera_sucursal` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `timestamps`
--
ALTER TABLE `timestamps`
  ADD CONSTRAINT `timestamps_ticketera` FOREIGN KEY (`id_ticketera`) REFERENCES `ticketeras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_sucursales` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
