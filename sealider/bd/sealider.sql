-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2017 a las 20:07:47
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sealider`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `CED_ESTUDIANTE` varchar(10) NOT NULL,
  `NOMBRE_APELLIDO` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `NROTELF` varchar(10) DEFAULT NULL,
  `CONGREGACION` varchar(100) DEFAULT NULL,
  `CARGO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CED_ESTUDIANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `CED_INSTRUCTOR` varchar(10) NOT NULL,
  `NOMBRE_APELLIDO` varchar(100) DEFAULT NULL,
  `NROTELF` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CED_INSTRUCTOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `ID_MATERIA` int(11) NOT NULL AUTO_INCREMENT,
  `CED_INSTRUCTOR` varchar(10) DEFAULT NULL,
  `DESCRIPCION` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_MATERIA`),
  UNIQUE KEY `CED_INSTRUCTOR` (`CED_INSTRUCTOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CED_ESTUDIANTE` varchar(10) DEFAULT NULL,
  `ID_MATERIA` int(11) DEFAULT NULL,
  `TRIMESTRE` varchar(20) DEFAULT NULL,
  `NOTA1` varchar(2) DEFAULT NULL,
  `NOTA2` varchar(2) DEFAULT NULL,
  `NOTA3` varchar(2) DEFAULT NULL,
  `NOTA4` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_REFERENCE_2` (`CED_ESTUDIANTE`),
  KEY `FK_REFERENCE_3` (`ID_MATERIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(100) DEFAULT NULL,
  `CONTRASENA` varchar(100) DEFAULT NULL,
  `TIPO` varchar(50) DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `USUARIO`, `CONTRASENA`, `TIPO`, `ESTADO`) VALUES
(1, '1003149737', '1f48372cec4b6fddeb97fe82c0551b28bc0c7413', 'Administrador', 'Habilitado');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`CED_INSTRUCTOR`) REFERENCES `instructor` (`CED_INSTRUCTOR`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`CED_ESTUDIANTE`) REFERENCES `estudiante` (`CED_ESTUDIANTE`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materias` (`ID_MATERIA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
