-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 20:11:01
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotacion`
--

CREATE TABLE `anotacion` (
  `UserName` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `Comentario` varchar(3000) COLLATE utf32_spanish2_ci NOT NULL,
  `Fecha` varchar(14) COLLATE utf32_spanish2_ci NOT NULL,
  `Hora` varchar(16) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `anotacion`
--

INSERT INTO `anotacion` (`UserName`, `Comentario`, `Fecha`, `Hora`) VALUES
('Luis Andres Esteban', 'Hola Loco\r\n', '02/12/2019', '15:46:34'),
('Luis Andres Esteban', 'Hola Loco\r\n', '02/12/2019', '16:04:28'),
('Luis Andres Esteban', 'Hola Loco\r\n', '02/12/2019', '16:05:26'),
('Luis Andres Esteban', 'Hola Loco\r\n', '02/12/2019', '16:05:35'),
('Luis Andres Esteban', 'Hola Loco\r\n', '02/12/2019', '16:09:26'),
('Luis Andres Esteban', '', '02/12/2019', '16:09:28'),
('Luis Andres Esteban', '', '02/12/2019', '16:09:30'),
('Luis Andres Esteban', '', '02/12/2019', '16:09:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `an_usu`
--

CREATE TABLE `an_usu` (
  `UserName` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `UserApellidos` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `Comentario` varchar(3000) COLLATE utf32_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` varchar(16) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UserName` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `UserApellidos` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `UserEmail` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `UserPass` varchar(16) COLLATE utf32_spanish2_ci NOT NULL,
  `UserDirection` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `UserCharge` varchar(16) COLLATE utf32_spanish2_ci NOT NULL,
  `UserUbic` varchar(30) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UserName`, `UserApellidos`, `UserEmail`, `UserPass`, `UserDirection`, `UserCharge`, `UserUbic`) VALUES
('Juan Quintana', 'Quintana', 'silicon_123@gmail.com', '', 'hoy 999', 'Portero', 'Portería'),
('Elon Musk', 'Gonzalez Vargas', 'thinktd369@gmail.com', '369', 'angol 208', 'Supervisor', 'NULL'),
('Luis Andres Esteban', 'Musk', 'silicon_123@gmail.com', 'iron', 'angol 208', 'Inspector', 'Internado B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UserPass`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
