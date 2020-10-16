-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2020 a las 00:48:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proconalu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `matricula` varchar(50) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono1` varchar(12) NOT NULL,
  `telefono2` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `documentos` varchar(100) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `pagos` varchar(100) NOT NULL,
  `tutor` varchar(100) NOT NULL,
  `fecha_baja` date NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `foto` blob NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `asesor_inscribio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `fecha_inscripcion`, `nombre`, `telefono1`, `telefono2`, `email`, `documentos`, `curso`, `pagos`, `tutor`, `fecha_baja`, `estatus`, `foto`, `ciudad`, `pais`, `asesor_inscribio`) VALUES
('MBHGT', '2020-10-20', 'Cristian Cabrera Regino', '2721905275', '2721905275', 'cruzazul_ccr@hotmail.com', 'Acta de Nacimiento', 'Doctorado', '2020', 'Marcelo', '2020-10-20', 'Inactivo', 0x313630323830303634305f30376639366461362d646137382d343933622d396634632d3366376465323835306464332e6a7067, 'Fortin', 'México', 'Manuel Lopez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
