-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-07-2022 a las 05:37:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SIM_BD_COM`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COM_TM_USU`
--

CREATE TABLE `COM_TM_USU` (
  `TM_USU_COD` int(11) NOT NULL COMMENT 'Identificador del usuario',
  `TM_USU_ALI` varchar(40) NOT NULL COMMENT 'Alias del usuario',
  `TM_USU_EXP` int(5) NOT NULL COMMENT 'Experiencia dentro de la plataforma',
  `TM_USU_FEC` date NOT NULL COMMENT 'Activos que posee el usuario',
  `TM_USU_ACT` float NOT NULL,
  `TM_RAN_COD` int(11) NOT NULL COMMENT 'Llave foranea de la tabla de rango',
  `TM_ROL_COD` int(11) NOT NULL COMMENT 'Llave foranea de la tabla rol',
  `TM_USU_EMA` varchar(40) NOT NULL COMMENT 'Correo electrónico del usuario',
  `TM_USU_PAS` varchar(20) NOT NULL COMMENT 'Contraseña de la cuenta del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `COM_TM_USU`
--
ALTER TABLE `COM_TM_USU`
  ADD PRIMARY KEY (`TM_USU_COD`),
  ADD UNIQUE KEY `TM_USU_EMA` (`TM_USU_EMA`),
  ADD KEY `TM_RAN_COD` (`TM_RAN_COD`),
  ADD KEY `TM_ROL_COD` (`TM_ROL_COD`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `COM_TM_USU`
--
ALTER TABLE `COM_TM_USU`
  MODIFY `TM_USU_COD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario', AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `COM_TM_USU`
--
ALTER TABLE `COM_TM_USU`
  ADD CONSTRAINT `COM_TM_USU_ibfk_1` FOREIGN KEY (`TM_RAN_COD`) REFERENCES `COM_TM_RAN` (`TM-RAN-COD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `COM_TM_USU_ibfk_2` FOREIGN KEY (`TM_ROL_COD`) REFERENCES `COM_TM_ROL` (`TM-ROL-COD`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
