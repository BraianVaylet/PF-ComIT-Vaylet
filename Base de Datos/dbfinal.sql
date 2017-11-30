-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2017 a las 19:59:21
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_cliente` varchar(500) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `telefono` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='clientes de la pagina';

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `usuario_cliente`, `correo`, `password`, `telefono`) VALUES
(1, 'cliente', 'cliente@mail', 'a123456', '123456'),
(2, 'cliente uno', 'cliente1@mail', 'a123456', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montos`
--

DROP TABLE IF EXISTS `montos`;
CREATE TABLE IF NOT EXISTS `montos` (
  `dni` int(11) NOT NULL,
  `modo_monto_cadete` varchar(50) DEFAULT NULL,
  `modo_monto_flete` varchar(50) DEFAULT NULL,
  `monto_cadeterias` float DEFAULT NULL,
  `monto_fletes` float DEFAULT NULL,
  `extracto` varchar(1500) NOT NULL,
  KEY `dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='monto de los servicios';

--
-- Volcado de datos para la tabla `montos`
--

INSERT INTO `montos` (`dni`, `modo_monto_cadete`, `modo_monto_flete`, `monto_cadeterias`, `monto_fletes`, `extracto`) VALUES
(1, 'Por Hora', 'Por Kilometro', 100, 150, 'asdxzxc asd  zxcadqwe asdzxc'),
(1, 'Por Hora', 'Por todo el Servicio', 100, 150, 'aaaa soy mixtoooo'),
(321, 'Por Hora', NULL, 123, 0, 'asasd'),
(2, 'Por Hora', NULL, 100, 0, 'asdxasdxxxxxasdxca ad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `dni` int(11) NOT NULL,
  `dist_min` varchar(50) DEFAULT NULL,
  `dist_max` varchar(50) DEFAULT NULL,
  `dist_trabajo` tinyint(4) DEFAULT NULL COMMENT 'si realiza trabajos fuera de la ciudad.',
  `peso_max` varchar(50) DEFAULT NULL,
  `am` tinyint(4) DEFAULT NULL,
  `pm` tinyint(4) DEFAULT NULL,
  `encargos` tinyint(4) DEFAULT NULL COMMENT 'si realiza encargos en el dia',
  `tipo` varchar(1500) NOT NULL,
  `trabajos` varchar(1500) NOT NULL,
  `carnet` tinyint(4) DEFAULT NULL,
  KEY `dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla con info sobre el servicio dado por los usuarios.';

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`dni`, `dist_min`, `dist_max`, `dist_trabajo`, `peso_max`, `am`, `pm`, `encargos`, `tipo`, `trabajos`, `carnet`) VALUES
(1, '1', '20', 0, '50', 1, 0, 1, 'Bicicleta', 'asdasdasdasd', 1),
(1, '1', '11', 1, '111', 1, 1, 1, 'Automovil', 'aaaa', 1),
(321, '', '', 0, '', 0, 1, 0, 'Moto', 'asd', 0),
(2, '1', '20', 0, '10', 1, 0, 1, 'Moto', 'asdasdasd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(220) NOT NULL,
  `correo` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `whatsapp` tinyint(4) DEFAULT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL DEFAULT '',
  `foto_perfil` varchar(220) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `calificacion` int(11) DEFAULT NULL,
  `vidas` int(11) UNSIGNED DEFAULT NULL,
  `soy_cadete` tinyint(4) DEFAULT NULL,
  `soy_flete` tinyint(4) DEFAULT NULL,
  `fecha_ingreso` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='tabla datos personales de los usuarios.';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `password`, `telefono`, `whatsapp`, `dni`, `fecha_nacimiento`, `foto_perfil`, `ciudad`, `calificacion`, `vidas`, `soy_cadete`, `soy_flete`, `fecha_ingreso`) VALUES
(70, 'ejemplo', 'ejemplo@mail.com', 'a123456', '111', 0, 1, '30 november, 2017', 'c42.png', 'Punta Alta', 5, 9, 1, 1, '2017-11-30 10:56:53'),
(71, 'mixto uno', 'mixto1@mail', 'a123456', '01115111', 1, 1, '30 november, 2017', 'c2.bmp', 'Bahia Blanca', 5, 10, 1, 1, '2017-11-30 16:01:34'),
(72, 'asd', 'asd@m', 'asd123', '123', 0, 321, '23 november, 2017', 'no_borrar/avatar.png', 'Sierra de la Ventana', 5, 10, 1, 0, '2017-11-30 16:25:56'),
(75, 'cadete', 'cadete@mail', 'a123456', '02202222', 1, 2, '30 november, 2017', 'c1.jpg', 'La Plata', 5, 10, 1, 0, '2017-11-30 17:31:21');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `montos`
--
ALTER TABLE `montos`
  ADD CONSTRAINT `montos_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuarios` (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
