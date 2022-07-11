-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 17:10:07
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sim-bd-com`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com-tm-cri`
--

CREATE TABLE IF NOT EXISTS `com-tm-cri` (
  `TM-CRI-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de criptomoneda.',
  `TM-CRI-NOM` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Nombre de la criptomoneda.',
  `TM-CRI-IMG` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Logo de la criptomoneda.',
  PRIMARY KEY (`TM-CRI-COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='corresponde a la tabla maestra de las criptomonedas del simulador.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com-tm-ran`
--

CREATE TABLE IF NOT EXISTS `com-tm-ran` (
  `TM-RAN-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de rango.',
  `TM-RAN-TIT` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Título del rango.',
  `TM-RAN-EXP` int(5) NOT NULL COMMENT 'Experiencia mínima requerida para adquirir el título.',
  PRIMARY KEY (`TM-RAN-COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='corresponde a la tabla maestra de los rangos que se le darán a los usuarios del ';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com-tm-rol`
--

CREATE TABLE IF NOT EXISTS `com-tm-rol` (
  `TM-ROL-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de rol.',
  `TM-ROL-TIT` varchar(13) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Usuario' COMMENT 'Título del rol.',
  PRIMARY KEY (`TM-ROL-COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Corresponde a la tabla maestra de los roles que se le darán a los usuarios del s';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com-tm-usu`
--

CREATE TABLE IF NOT EXISTS `com-tm-usu` (
  `TM-USU-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de usuario.',
  `TM-USU-ALI` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Alias de usuario.',
  `TM-USU-EXP` int(5) NOT NULL COMMENT 'Cantidad de experiencia adquirida.',
  `TM-USU-FEC` date NOT NULL COMMENT 'Fecha de inicio.',
  `TM-USU-ACT` float(11,2) NOT NULL COMMENT 'Activos ahorrados del usuario.',
  `TM-RAN-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de rango.',
  `TM-ROL-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de rol.',
  PRIMARY KEY (`TM-USU-COD`),
  KEY `TM-ROL-COD` (`TM-ROL-COD`),
  KEY `TM-RAN-COD` (`TM-RAN-COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com-tt-tra`
--

CREATE TABLE IF NOT EXISTS `com-tt-tra` (
  `TM-USU-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de usuario.',
  `TM-CRI-COD` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Código único de criptomoneda.',
  `TT-TRA-TIP` tinyint(1) NOT NULL COMMENT 'Tipo de transacción: compra o venta.',
  `TT-TRA-HOR` time NOT NULL COMMENT 'Hora de la transacción.',
  `TT-TRA-FEC` date NOT NULL COMMENT 'Fecha en que realizó la transacción.',
  `TT-TRA-CAN` float(11,11) NOT NULL COMMENT 'Cantidad de criptomonedas intercambiadas.',
  `TT-TRA-TAS` float(11,2) NOT NULL COMMENT 'Tasa de cambio con respecto a la moneda estándar.',
  PRIMARY KEY (`TM-USU-COD`,`TM-CRI-COD`),
  KEY `Código único de criptomoneda` (`TM-CRI-COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='corresponde a la tabla transaccional que muestra las transacciones de criptomone';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `com-tm-usu`
--
ALTER TABLE `com-tm-usu`
  ADD CONSTRAINT `Código único de rango.` FOREIGN KEY (`TM-RAN-COD`) REFERENCES `com-tm-ran` (`TM-RAN-COD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Código único de rol.` FOREIGN KEY (`TM-ROL-COD`) REFERENCES `com-tm-rol` (`TM-ROL-COD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `com-tt-tra`
--
ALTER TABLE `com-tt-tra`
  ADD CONSTRAINT `Código único de criptomoneda` FOREIGN KEY (`TM-CRI-COD`) REFERENCES `com-tm-cri` (`TM-CRI-COD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Código único de usuario.` FOREIGN KEY (`TM-USU-COD`) REFERENCES `com-tm-usu` (`TM-USU-COD`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Base de datos: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
