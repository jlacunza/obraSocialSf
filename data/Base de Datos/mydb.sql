-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2012 a las 14:45:20
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE IF NOT EXISTS `afiliado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nro_doc` int(11) DEFAULT NULL,
  `apenombre` varchar(45) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `piso` varchar(45) DEFAULT NULL,
  `depto` char(1) DEFAULT NULL,
  `plan_id` int(10) unsigned NOT NULL,
  `tipodoc_id` int(10) unsigned NOT NULL,
  `reparticion_id` int(10) unsigned NOT NULL,
  `localidad_id` int(10) unsigned NOT NULL,
  `fechaingreso` date DEFAULT NULL,
  `sexo_id` int(10) unsigned NOT NULL,
  `estadocivil_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nro_doc_UNIQUE` (`nro_doc`),
  KEY `fk_afiliado_plan` (`plan_id`),
  KEY `fk_afiliado_tipodoc1` (`tipodoc_id`),
  KEY `fk_afiliado_reparticion1` (`reparticion_id`),
  KEY `fk_afiliado_localidad1` (`localidad_id`),
  KEY `fk_afiliado_sexo1` (`sexo_id`),
  KEY `fk_afiliado_estadocivil1` (`estadocivil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`id`, `nro_doc`, `apenombre`, `fechanac`, `calle`, `altura`, `piso`, `depto`, `plan_id`, `tipodoc_id`, `reparticion_id`, `localidad_id`, `fechaingreso`, `sexo_id`, `estadocivil_id`) VALUES
(3, NULL, '23232323232', NULL, '', '', '', '', 1, 1, 1, 1, NULL, 1, 1),
(4, 24345567, 'Ibañez, Claudio', '1996-02-13', 'Mendoza', 'S/N', '', '', 1, 2, 1, 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroatencion`
--

CREATE TABLE IF NOT EXISTS `centroatencion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `depto` varchar(4) DEFAULT NULL,
  `piso` int(10) unsigned NOT NULL,
  `localidad_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_centroatencion_localidad1` (`localidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `centroatencion`
--

INSERT INTO `centroatencion` (`id`, `nombre`, `calle`, `numero`, `depto`, `piso`, `localidad_id`) VALUES
(1, 'Hospital Rural', 'Pichincha', '23', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroatencion_has_prestador`
--

CREATE TABLE IF NOT EXISTS `centroatencion_has_prestador` (
  `centroatencion_id` int(10) unsigned NOT NULL,
  `prestador_id` int(11) NOT NULL,
  PRIMARY KEY (`centroatencion_id`,`prestador_id`),
  KEY `fk_centroatencion_has_prestador_prestador1` (`prestador_id`),
  KEY `fk_centroatencion_has_prestador_centroatencion1` (`centroatencion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centroatencion_has_prestador`
--

INSERT INTO `centroatencion_has_prestador` (`centroatencion_id`, `prestador_id`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion_UNIQUE` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `descripcion`) VALUES
(1, 'fonoaudiologia'),
(3, 'Odontologia'),
(2, 'Pediatria'),
(4, 'Traumatologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE IF NOT EXISTS `estadocivil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion_UNIQUE` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `descripcion`) VALUES
(1, 'Casado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `descripcion`) VALUES
(1, 'Rawson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion_UNIQUE` (`descripcion`),
  UNIQUE KEY `descuento_UNIQUE` (`descuento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id`, `descripcion`, `descuento`) VALUES
(1, 'full', '35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestador`
--

CREATE TABLE IF NOT EXISTS `prestador` (
  `id` int(11) NOT NULL,
  `apenom` varchar(45) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` int(10) unsigned DEFAULT NULL,
  `piso` int(10) unsigned DEFAULT NULL,
  `depto` varchar(4) DEFAULT NULL,
  `localidad_id` int(10) unsigned NOT NULL,
  `especialidad_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prestador_localidad1` (`localidad_id`),
  KEY `fk_prestador_especialidad1` (`especialidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestador`
--

INSERT INTO `prestador` (`id`, `apenom`, `calle`, `numero`, `piso`, `depto`, `localidad_id`, `especialidad_id`) VALUES
(0, 'Torres, Luis', 'Sorongo', 45, NULL, '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparticion`
--

CREATE TABLE IF NOT EXISTS `reparticion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reparticion`
--

INSERT INTO `reparticion` (`id`, `descripcion`) VALUES
(1, 'UDC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion_UNIQUE` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'Afiliado'),
(2, 'Prestador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion_UNIQUE` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `descripcion`) VALUES
(1, 'mujer'),
(2, 'varon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_UNIQUE` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table1_has_table1`
--

CREATE TABLE IF NOT EXISTS `table1_has_table1` (
  `table1_id` int(10) unsigned NOT NULL,
  `table1_id1` int(10) unsigned NOT NULL,
  PRIMARY KEY (`table1_id`,`table1_id1`),
  KEY `fk_table1_has_table1_table12` (`table1_id1`),
  KEY `fk_table1_has_table1_table11` (`table1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE IF NOT EXISTS `tipodoc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`id`, `descripcion`) VALUES
(1, 'DNI'),
(2, 'PASAPORTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_UNIQUE` (`user`),
  KEY `fk_usuario_rol1` (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `rol_id`) VALUES
(1, 'jose', 'jose', 1),
(2, 'luis', 'luis', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD CONSTRAINT `fk_afiliado_estadocivil1` FOREIGN KEY (`estadocivil_id`) REFERENCES `estadocivil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliado_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliado_plan` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliado_reparticion1` FOREIGN KEY (`reparticion_id`) REFERENCES `reparticion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliado_sexo1` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliado_tipodoc1` FOREIGN KEY (`tipodoc_id`) REFERENCES `tipodoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `centroatencion`
--
ALTER TABLE `centroatencion`
  ADD CONSTRAINT `fk_centroatencion_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `centroatencion_has_prestador`
--
ALTER TABLE `centroatencion_has_prestador`
  ADD CONSTRAINT `fk_centroatencion_has_prestador_centroatencion1` FOREIGN KEY (`centroatencion_id`) REFERENCES `centroatencion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_centroatencion_has_prestador_prestador1` FOREIGN KEY (`prestador_id`) REFERENCES `prestador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestador`
--
ALTER TABLE `prestador`
  ADD CONSTRAINT `fk_prestador_especialidad1` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestador_localidad1` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `table1_has_table1`
--
ALTER TABLE `table1_has_table1`
  ADD CONSTRAINT `fk_table1_has_table1_table11` FOREIGN KEY (`table1_id`) REFERENCES `table1` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_has_table1_table12` FOREIGN KEY (`table1_id1`) REFERENCES `table1` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
