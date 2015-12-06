-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 06-12-2015 a las 16:02:39
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `apcix`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `acceso`
-- 

CREATE TABLE `acceso` (
  `IdMenu` int(11) NOT NULL,
  `RangoPerso` int(11) NOT NULL,
  PRIMARY KEY  (`IdMenu`,`RangoPerso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `acceso`
-- 

INSERT INTO `acceso` VALUES (1, 1);
INSERT INTO `acceso` VALUES (1, 2);
INSERT INTO `acceso` VALUES (1, 3);
INSERT INTO `acceso` VALUES (2, 1);
INSERT INTO `acceso` VALUES (2, 2);
INSERT INTO `acceso` VALUES (2, 3);
INSERT INTO `acceso` VALUES (3, 1);
INSERT INTO `acceso` VALUES (3, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `capacitacion`
-- 

CREATE TABLE `capacitacion` (
  `CodCap` int(11) NOT NULL auto_increment,
  `DNIPerso` char(8) NOT NULL,
  `Nivel` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Tiempo` time default NULL,
  PRIMARY KEY  (`CodCap`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `capacitacion`
-- 

INSERT INTO `capacitacion` VALUES (1, '42073411', 'Excelente', '2015-12-06', NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `localvotacion`
-- 

CREATE TABLE `localvotacion` (
  `codlocal` int(11) NOT NULL auto_increment,
  `Descripcion` varchar(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Ubigeo` char(6) NOT NULL,
  PRIMARY KEY  (`codlocal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `localvotacion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `menu`
-- 

CREATE TABLE `menu` (
  `IdMenu` int(11) NOT NULL auto_increment,
  `Nombre` varchar(150) NOT NULL,
  `Modulo` varchar(150) NOT NULL,
  PRIMARY KEY  (`IdMenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `menu`
-- 

INSERT INTO `menu` VALUES (1, 'Evaluacion', 'Evaluacion');
INSERT INTO `menu` VALUES (2, 'Actualizar Datos', 'actulizardato');
INSERT INTO `menu` VALUES (3, 'Registrar otros personeros', 'Registrar');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mesavotacion`
-- 

CREATE TABLE `mesavotacion` (
  `NMesa` char(6) NOT NULL,
  `NVotante` int(11) NOT NULL,
  `codLocal` int(11) NOT NULL,
  PRIMARY KEY  (`NMesa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `mesavotacion`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `partidopolitico`
-- 

CREATE TABLE `partidopolitico` (
  `codPartPol` int(11) NOT NULL auto_increment,
  `Descripcion` varchar(200) default NULL,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY  (`codPartPol`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `partidopolitico`
-- 

INSERT INTO `partidopolitico` VALUES (1, 'Alianza para el Progreso', 'APP');
INSERT INTO `partidopolitico` VALUES (2, 'Peruanos para el Kambio', 'PPK');
INSERT INTO `partidopolitico` VALUES (3, 'Alianza Popular Revolucionada Americana', 'APRA');
INSERT INTO `partidopolitico` VALUES (4, 'Partido Popular Cristiano', 'PPC');
INSERT INTO `partidopolitico` VALUES (5, 'Frente Amplio', 'FA');
INSERT INTO `partidopolitico` VALUES (6, 'Fuerza Popular', 'FP');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `personero`
-- 

CREATE TABLE `personero` (
  `DNI` char(8) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(200) default NULL,
  `NivelEducacion` varchar(100) default NULL,
  `Institucion` varchar(100) default NULL,
  `Carrera` varchar(100) default NULL,
  `MesaVotacion` char(6) default NULL,
  `CodRangPer` int(11) NOT NULL,
  `CodPartiPol` int(11) NOT NULL,
  PRIMARY KEY  (`DNI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `personero`
-- 

INSERT INTO `personero` VALUES ('42322435', 'Ulloque Arbildo', 'Carlos', NULL, NULL, NULL, NULL, NULL, 1, 1);
INSERT INTO `personero` VALUES ('42478037', 'Arista Lucero', 'Sandra', 'Tumbes', 'Bachiller', 'USS', NULL, NULL, 1, 2);
INSERT INTO `personero` VALUES ('10578299', 'Diaz Caramutti', 'Auguto Salomon', NULL, NULL, NULL, NULL, NULL, 1, 3);
INSERT INTO `personero` VALUES ('33564904', 'Molla Arista', 'Juan ', NULL, NULL, NULL, NULL, NULL, 1, 4);
INSERT INTO `personero` VALUES ('42073411', 'Diaz Alcantara', 'Javier Augusto', 'TUMAN', 'Bachiller', 'UNPRG', NULL, NULL, 1, 5);
INSERT INTO `personero` VALUES ('46533900', 'Coronel Gayoso', 'Liseth del Milagro', NULL, NULL, NULL, NULL, NULL, 1, 6);
INSERT INTO `personero` VALUES ('16717170', 'CAPUNAY UCEDA', 'OSCAR', NULL, NULL, NULL, NULL, NULL, 2, 5);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `rangopersonero`
-- 

CREATE TABLE `rangopersonero` (
  `codrango` int(11) NOT NULL auto_increment,
  `Descripcion` varchar(150) NOT NULL,
  PRIMARY KEY  (`codrango`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `rangopersonero`
-- 

INSERT INTO `rangopersonero` VALUES (1, 'Personero Legal');
INSERT INTO `rangopersonero` VALUES (2, 'Personero Local de Votacion');
INSERT INTO `rangopersonero` VALUES (3, 'Personero Mesa de Sufragio');
