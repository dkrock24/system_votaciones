-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2014 a las 18:03:28
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `control_votacion`
--
CREATE DATABASE IF NOT EXISTS `control_votacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `control_votacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE IF NOT EXISTS `ciudadano` (
  `id_ciudadano` int(200) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dui` int(50) NOT NULL,
  `pais` int(100) NOT NULL,
  `departamento` int(100) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY (`id_ciudadano`),
  KEY `pais` (`pais`),
  KEY `departamento` (`departamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_ciudadano`, `nombres`, `apellidos`, `genero`, `dui`, `pais`, `departamento`, `email`, `edad`, `password`, `usuario`, `estado`) VALUES
(14, 'Diego Rafael', 'Mena Ramirez', 'M', 2147483647, 1, 2, 'diego@hotmail.com', '33', 'diego', 'diego', 1),
(15, 'Diego Rafael', 'Mena Ramirez', 'M', 2147483647, 1, 2, 'diego@hotmail.com', '33', 'diego', 'diego', 1),
(13, 'Diego Rafael', 'Mena Ramirez', 'M', 2147483647, 1, 2, 'diego@hotmail.com', '33', 'diego', 'diego', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE IF NOT EXISTS `comite` (
  `id_comite` int(100) NOT NULL AUTO_INCREMENT,
  `c_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `c_url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `c_estado` int(2) NOT NULL,
  `id_pais` int(100) NOT NULL,
  `id_departamento` int(100) NOT NULL,
  PRIMARY KEY (`id_comite`),
  KEY `id_pais` (`id_pais`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `comite`
--

INSERT INTO `comite` (`id_comite`, `c_nombre`, `c_descripcion`, `c_url`, `c_estado`, `id_pais`, `id_departamento`) VALUES
(1, 'CajaSol', 'Partido Politico', 'CAJASOL.jpg', 1, 1, 1),
(2, 'Ciudadano', 'Partido plitico', 'ciudadano.png', 1, 1, 2),
(3, 'Convergencia', 'Partido Politico', 'convergencia.jpg', 1, 1, 3),
(4, 'Democracia', 'Partido Politico', 'democracia.png', 1, 1, 4),
(5, 'FCR', 'Partido Politico', 'FCR.jpg', 1, 1, 5),
(6, 'Nueva Alienza', 'partido Poltico', 'nueva_alianza.png', 1, 1, 6),
(7, 'PA', 'partido politico', 'pa.jpg', 1, 1, 7),
(8, 'PAN', 'Partido Politico', 'pan.png', 1, 1, 8),
(9, 'Patriota', 'Partido Politico', 'patriota.jpg', 1, 1, 9),
(10, 'PIN', 'Partido Politico', 'pin.png', 1, 1, 10),
(11, 'PRI', 'Partido Politico', 'pri.jpg', 1, 1, 11),
(12, 'PT', 'Partido Politico', 'pt.jpg', 1, 1, 12),
(13, 'Union', 'Partido Politico', 'union.jpg', 1, 1, 13),
(14, 'Verde', 'Partido Politico', 'verde.gif', 1, 1, 14),
(15, 'Nicaragua1', 'nicaraguanicaraguanicaraguanicaraguanicaraguanicaraguanicaraguanicaragua', 'nicaragua1.png', 1, 2, 15),
(16, 'nicaragua2', 'nicaraguanicaraguanicaraguanicaraguanicaraguanicaraguanicaraguanicaraguanicaragua', 'nicaragua2.png', 1, 2, 16),
(17, 'nicaragua3', 'nicaraguanicaraguanicaraguanicaragua', 'nicaragua3.png', 1, 2, 17),
(18, 'nicaragua4', 'nicaraguanicaraguanicaraguanicaraguanicaragua', 'nicaragua4.png', 1, 2, 18),
(19, 'nicaragua5', 'nicaraguanicaraguanicaraguanicaragua', 'nicaragua5.png', 1, 2, 19),
(20, 'nicaragua6', 'nicaraguanicaraguanicaraguanicaragua', 'nicaragua6.png', 1, 2, 20),
(21, 'nicaragua7', 'nicaraguanicaraguanicaraguanicaragua', 'nicaragua7.png', 1, 2, 21),
(22, 'nicaragua8', 'nicaraguanicaraguanicaragua', 'nicaragua8.png', 1, 2, 22),
(23, 'nicaragua9', 'nicaraguanicaraguanicaragua', 'nicaragua9.png', 1, 2, 23),
(24, 'nicaragua10', 'nicaraguanicaraguanicaragua', 'nicaragua10.jpg', 1, 2, 24),
(25, 'nicaragua11', 'nicaraguanicaragua', 'nicaragua11.png', 1, 2, 25),
(26, 'nicaragua12', 'nicaragua', 'nicaragua12.png', 1, 2, 26),
(27, 'nicaragua13', 'nicaraguanicaraguanicaragua', 'nicaragua13.png', 1, 2, 27),
(28, 'nicaragua14', 'nicaraguanicaraguanicaragua', 'nicaragua14.jpg', 1, 2, 28),
(29, 'nicaragua15', 'nicaraguanicaragua', 'nicaragua15.png', 1, 2, 29),
(30, 'nicaragua16', 'nicaraguanicaraguanicaraguanicaragua', 'nicaragua16.png', 1, 2, 30),
(31, 'nicaragua17', 'nicaraguanicaragua', 'nicaragua17.jpg', 1, 2, 31),
(32, 'Guatemala 1', 'GuatemalaGuatemalaGuatemalaGuatemala', 'guatemala1.png', 1, 3, 33),
(33, 'Guatemala 2', 'GuatemalaGuatemalaGuatemalaGuatemalaGuatemalaGuatemala', 'guatemala2.png', 1, 3, 34),
(34, 'Guatemala 3', 'GuatemalaGuatemalaGuatemala', 'guatemala3.png', 1, 3, 35),
(35, 'Guatemala 4', 'GuatemalaGuatemalaGuatemalaGuatemala', 'guatemala4.png', 1, 3, 36),
(36, 'Costa Rica 1', 'costarica1.pngcostarica1.pngcostarica1.pngcostarica1.pngcostarica1.png', 'costarica1.png', 1, 4, 37),
(37, 'Costa Rica 2', 'costarica2costarica2.png', 'costarica2.png', 1, 4, 38),
(38, 'Costa Rica 3', 'costarica1.pngcostarica1.pngcostarica1.png', 'costarica3.png', 1, 4, 39),
(39, 'Costa Rica 4', 'costarica1.pngcostarica1.pngcostarica1.png', 'costarica4.png', 1, 4, 40),
(40, 'Costa Rica 5', 'costarica1.pngcostarica1.pngcostarica1.png', 'costarica5.png', 1, 4, 41),
(41, 'Honduras 1', 'honduras1honduras1', 'honduras1.png', 1, 5, 42),
(42, 'Honduras 2', 'honduras1.pnghonduras1.pnghonduras1.png', 'honduras2.png', 1, 5, 43),
(43, 'Honduras 3', 'honduras1.pnghonduras1.pnghonduras1.png', 'honduras3.png', 1, 5, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(2) NOT NULL,
  `id_pais` int(100) NOT NULL,
  PRIMARY KEY (`id_departamento`),
  KEY `id_pais` (`id_pais`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`, `descripcion`, `estado`, `id_pais`) VALUES
(1, 'Ahuachapán', 'El departamento de Ahuachapán es el más occidental de los 14 departamentos en los que está dividida la República de El Salvador. Su cabecera, la ciudad de Ahuachapán se encuentra a 100 km de San Salva', 1, 1),
(2, 'Santa Ana', 'anta Ana es un departamento ubicado en la zona occidental de El Salvador. Su cabecera es la ciudad de Santa Ana que cuenta con aproximadamente una población de 245,421 habitantes', 1, 1),
(3, 'Sonsonate', 'Sonsonate es una antigua provincia de la Capitanía General de Guatemala que obtuvo su independencia de España en 1821 y que a partir de 1824 junto con la provincia de San Salvador formaron el país que', 1, 1),
(4, 'Usulután', 'Usulután ubicado en la zona oriental es uno de los catorce departamentos que conforman la República de El Salvador.', 1, 1),
(5, 'San Miguel', 'San Miguel es un departamento de El Salvador. Su cabecera departamental es San Miguel, ciudad que se encuentra a 138 km de San Salvador. Limita al Norte con la República de Honduras', 1, 1),
(6, 'Morazán', 'Morazán es un departamento de El Salvador ubicado en la zona oriental del país. Limita al Norte con la república de Honduras; al Sur y al Oeste con el departamento de San Miguel, y al Sur y al Este co', 1, 1),
(7, 'La Unión', 'La Unión es un departamento de la zona oriental de El Salvador. La cabecera departamental es la ciudad de Puerto de La Unión.', 1, 1),
(8, 'La Libertad', 'La Libertad es un departamento de El Salvador. Su capital es la ciudad de Santa Tecla, capital también del municipio homónimo. Tiene una extensión territorial de 112 km', 1, 1),
(9, 'Chalatenango', 'Chalatenango es un departamento de El Salvador. Su cabecera departamental es Chalatenango, se encuentra ubicado al norte de la capital, fronterizo con Honduras. Allí se ubica el cerro El Pital con 280', 1, 1),
(10, 'Cuscatlán', 'Se encuentra situado en la región central del país y limita al N y NE con el departamento de Chalatenango, al E con Cabañas, al SE con San Vicente, al S con el Lago de Ilopango y el departamento de La', 1, 1),
(11, 'San Salvador', 'San Salvador es uno de los 14 departamentos de El Salvador ubicado en la zona central. Su área es de 886,15 kilómetros cuadrados y su población es de 2 557 761 habitantes', 1, 1),
(12, 'La Paz', 'La Paz es uno de los catorce departamentos que conforman la República de El Salvador. La cabecera departamental es la ciudad de Zacatecoluca', 1, 1),
(13, 'Cabañas', 'Cabañas es un departamento de la zona paracentral de El Salvador. Su cabecera departamental es Sensuntepeque. Esta región tiene muchas reservas naturales. El departamento fue nombrado en honor del pol', 1, 1),
(14, 'San Vicente', 'San Vicente es uno de los catorce departamentos que conforman la República de El Salvador, en la región Paracentral. La ciudad cabecera es San Vicente.', 1, 1),
(15, 'León', 'Santiago de los Caballeros de León es una ciudad y municipio de Nicaragua cabecera departamental del departamento homónimo, localizado en el noroeste de este país centroamericano.', 1, 2),
(16, 'Managua', 'es la ciudad capital de Nicaragua. Es la ciudad más grande de Nicaragua en términos de población y extensión geográfica. Situado en la costa suroeste del lago Xolotlán o Lago de Managua', 1, 2),
(17, 'Rivas', 'Rivas es una ciudad y municipio de Nicaragua, fundada en el siglo XVIII con el nombre de la villa de la Purísima Concepción de Rivas de Nicaragua. Fue cabecera del partido de Rivas y actualmente del D', 1, 2),
(18, 'Río San Juan', 'La ciudad de San Carlos está ubicada a unos 290 kilómetros al sureste de Managua, justo donde termina el Lago de Nicaragua y comienza el río San Juan', 1, 2),
(19, 'Nueva Segovia', 'Nueva Segovia es un departamento de la República de Nicaragua cuya cabecera departamental es la ciudad de Ocotal localizada a 226 kilómetros de Managua, ', 1, 2),
(20, 'Matagalpa', 'La ciudad de Matagalpa es la capital del departamento homónimo en Nicaragua. El municipio tiene una superficie de 640,65 km² y la ciudad una población de 200.000', 1, 2),
(21, 'Masaya', 'Masaya es una ciudad y municipio perteneciente al departamento del mismo nombre en la República de Nicaragua, (Centroamérica) que dista 27 km de la capital Managua y forma parte de la Región Metropoli', 1, 2),
(22, 'Managua', 'Managua es la ciudad capital de Nicaragua. Es la ciudad más grande de Nicaragua en términos de población y extensión geográfica.', 1, 2),
(23, 'Madriz', 'Madriz es un departamento de Nicaragua (1.375 km2). Su cabecera departamental es Somoto. Se encuentra al norte del país, en la frontera con Honduras. ', 1, 2),
(24, 'Jinotega', 'San Juan de Jinotega es una ciudad de Nicaragua, cabecera municipal y departamental de los territorios homónimos y del departamento de Jinotega. ', 1, 2),
(25, 'Granada', 'Granada es una ciudad de Nicaragua. Fue fundada en 1524 por Francisco Hernández de Córdoba y una de las primeras ciudades europeas en territorio continental americano. ', 1, 2),
(26, 'Estelí', 'La Villa de San Antonio de Pavia de Estelí o Estelí es una población de Nicaragua, cabecera del municipio y del departamento homónimo. ', 1, 2),
(27, 'Chontales', 'Chontales es un departamento de Nicaragua. Su cabecera departamental es la ciudad de Juigalpa.', 1, 2),
(28, 'Chinandega', 'Chinandega es una ciudad y municipio de la República de Nicaragua. Además, es la cabecera departamental del departamento del mismo nombre en la región occidental del Pacífico', 1, 2),
(29, 'Carazo', 'Carazo es un departamento de Nicaragua. Su cabecera departamental es Jinotepe..', 1, 2),
(30, 'Boaco', 'Boaco es una ciudad de Nicaragua, capital del departamento de Boaco, a esta se le denomina "La ciudad de dos pisos"', 1, 2),
(31, 'RAAS', 'La Región Autónoma del Atlántico Sur, a veces abreviada como RAAS, es una región autónoma de Nicaragua. Su sede administrativa es la ciudad de Bluefields. ', 1, 2),
(32, 'RAAN', 'La Región Autónoma del Atlántico Norte, a veces abreviada como RAAN, es una región autónoma de Nicaragua. Su capital es la ciudad de Bilwi, cabecera del término municipal de Puerto Cabezas.', 1, 2),
(33, 'Alta Verapaz', 'lta Verapaz es un departamento ubicado al norte de Guatemala, a unos 200 km de la Ciudad de Guatemala. Limita al norte con Petén; al este con Izabal;', 1, 3),
(34, 'Chimaltenango', 'El departamento de Chimaltenango se encuentra situado en la región Central de Guatemala. Limita al norte con los departamentos de El Quiché y Baja Verapaz', 1, 3),
(35, 'El Progreso', 'El Progreso es un departamento que se encuentra situado en la región nororiental de Guatemala, su cabecera departamental es Guastatoya', 1, 3),
(36, 'Jalapa', 'El Departamento de Jalapa se encuentra situado en la región Sur-Oriente de Guatemala. Limita al Norte con los departamentos de El Progreso y Zacapa; al Sur con los departamentos de Jutiapa y Santa Ros', 1, 3),
(37, 'San José', 'San José, con un cantón y diez distritos parroquiales.', 1, 4),
(38, 'Alajuela', 'Alajuela, con dos cantones y ocho distritos parroquiales.', 1, 4),
(39, 'Cartago', 'Cartago, con dos cantones y trece distritos parroquiales.', 1, 4),
(40, 'Heredia', 'Heredia, con un cantón y siete distritos parroquiales.', 1, 4),
(41, 'Guanacaste', 'Guanacaste, con cuatro cantones y ocho distritos parroquiales.', 1, 4),
(42, 'Colón', 'El origen de su nombre, fue a partir del hecho histórico que fue la primera tierra firme de Centroamérica pisada por el Almirante Cristóbal Colón, en cuya memoria lleva su nombre.', 1, 5),
(43, 'Cortés', 'istóricamente, el Departamento de Cortés es uno de los más importantes de Honduras. El 14 de agosto de 1502, desembarcó Cristóbal Colón en el cabo Caxinas', 1, 5),
(44, 'Copán', 'Copán es uno de los dieciocho departamentos que integran la república de Honduras, fronterizo con Guatemala. Su cabecera departamental es la ciudad de Santa Rosa de Copán ', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id_pais` int(100) NOT NULL AUTO_INCREMENT,
  `p_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `p_nombre`, `descripcion`, `url`, `estado`) VALUES
(1, 'El Salvador', 'este país, consiste en la fragmentación en departamentos para su administración política. Cada uno de ellos se subdivide sucesivamente en municipios que son gobernados por los Concejos Municipales, el', 'el_salvador.gif', 1),
(2, 'Nicaragua', 'es un país ubicado en el istmo centroamericano que limita con Honduras, al norte, y con Costa Rica, al sur, en cuanto a límites marítimos colinda con El Salvador, Honduras, Costa Rica y Jamaica. Posee', 'nicaragua.jpg', 1),
(3, 'Guatemala', 'es un país situado en América Central, en su extremo noroccidental, con una amplia cultura autóctona producto de la herencia maya y la influencia castellana durante la época colonial', 'guatemala.png', 1),
(4, 'Costa Rica', 'denominado oficialmente República de Costa Rica, es un país de Centroamérica. Limita al norte con la República de Nicaragua y al sureste con la República de Panamá. Cuenta con 4,889,826 de habitantes ', 'costa_rica.jpg', 1),
(5, 'Honduras', 'es un país de América, ubicado en el extremo norte de América Central. Su nombre oficial es República de Honduras y su capital es el Distrito Central constituido conjuntamente por las ciudades de Tegu', 'honduras.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion`
--

CREATE TABLE IF NOT EXISTS `votacion` (
  `id_votacion` int(200) NOT NULL AUTO_INCREMENT,
  `id_comite` int(200) NOT NULL,
  `id_pais` int(200) NOT NULL,
  `id_departamento` int(200) NOT NULL,
  `id_ciudadano` int(200) NOT NULL,
  `fecha_votacion` datetime NOT NULL,
  PRIMARY KEY (`id_votacion`),
  KEY `id_pais` (`id_pais`),
  KEY `id_departamento` (`id_departamento`),
  KEY `id_ciudadano` (`id_ciudadano`),
  KEY `id_comite` (`id_comite`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `votacion`
--

INSERT INTO `votacion` (`id_votacion`, `id_comite`, `id_pais`, `id_departamento`, `id_ciudadano`, `fecha_votacion`) VALUES
(1, 3, 1, 1, 13, '2003-04-14 19:04:19'),
(2, 19, 2, 17, 13, '2003-04-14 20:04:37'),
(4, 1, 1, 2, 14, '2003-04-14 21:04:32'),
(5, 15, 2, 15, 14, '2003-04-14 21:04:51'),
(6, 35, 3, 36, 13, '2003-04-14 21:04:06'),
(7, 38, 4, 39, 13, '2003-04-14 21:04:18'),
(8, 42, 5, 43, 13, '2003-04-14 21:04:33'),
(9, 43, 5, 44, 14, '2003-04-14 22:04:15'),
(10, 38, 4, 39, 14, '2003-04-14 22:04:27'),
(11, 33, 3, 34, 14, '2003-04-14 22:04:35'),
(12, 7, 1, 7, 15, '2004-04-14 07:04:06'),
(13, 26, 2, 26, 15, '2004-04-14 07:04:18'),
(14, 35, 3, 36, 15, '2004-04-14 07:04:25'),
(15, 38, 4, 39, 15, '2004-04-14 07:04:32'),
(16, 43, 5, 44, 15, '2004-04-14 07:04:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
