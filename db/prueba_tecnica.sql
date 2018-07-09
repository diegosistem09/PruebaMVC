-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2018 a las 06:14:31
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--
CREATE DATABASE IF NOT EXISTS `prueba_tecnica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `prueba_tecnica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

DROP TABLE IF EXISTS `proceso`;
CREATE TABLE `proceso` (
  `id_proceso` int(11) NOT NULL,
  `nombre_proceso` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `proceso`:
--

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `nombre_proceso`) VALUES
(1, 'Convocatoria'),
(2, 'preselección'),
(3, 'Selección'),
(4, 'contratación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
CREATE TABLE `solicitud` (
  `numero_proceso` int(8) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `sede` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `presupuesto` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `id_proceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `solicitud`:
--

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`numero_proceso`, `descripcion`, `fecha_creacion`, `sede`, `presupuesto`, `usuario`, `id_proceso`) VALUES
(1, 'probando 9999	      				      				      ', '2018-07-08', 'Peru', 99999999, 1072, 0),
(2, 'convocatoria 89', '2018-07-09', 'México', 11111, 1073, 1),
(3, 'prueba descrip 1', '2018-07-08', 'Bogota', 22222, 1072, 0),
(4, 'convocatoria 3', '2018-07-16', 'MÃ©xico', 5555, 1073, 0),
(5, 'prueba descrip 1', '2018-07-08', 'Bogota', 22222, 1072, 0),
(6, 'perperperp', '0000-00-00', 'MÃ©xico', 8888, 1072638, 0),
(7, 'prueba descrip 1', '2018-07-08', 'Bogota', 22222, 1072, 0),
(8, 'oooooo', '0000-00-00', 'BogotÃ¡', 7888, 1072638, 0),
(9, 'prueba descrip 1', '2018-07-08', 'Bogota', 22222, 1072, 0),
(10, 'oooooo', '0000-00-00', 'BogotÃ¡', 7888, 1072638, 0),
(11, 'oooooo', '0000-00-00', 'BogotÃ¡', 7888, 1072638, 0),
(12, 'prueba 34', '0000-00-00', 'MÃ©xico', 66666, 1072638, 0),
(13, 'prueba', '0000-00-00', 'MÃ©xico', 5555, 1072638, 0),
(14, '', '0000-00-00', '', 0, 0, 0),
(15, '', '0000-00-00', '', 0, 0, 0),
(16, 'ppppppppppppppxxxxxxxxxxxxx', '0000-00-00', 'Peru', 9999999, 1072638, 0),
(17, 'prueba88888889999999', '0000-00-00', 'MÃ©xico', 11111, 1072638, 0),
(18, 'prueba 55555555', '0000-00-00', 'MÃ©xico', 2147483647, 1072638, 0),
(19, 'prueba 55555555', '0000-00-00', 'MÃ©xico', 2147483647, 1072638, 0),
(20, 'prueba 55555555', '0000-00-00', 'MÃ©xico', 2147483647, 1072638, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `identidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- RELACIONES PARA LA TABLA `usuario`:
--

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `contrasena`, `identidad`) VALUES
(1, 'diego', 'diego', 1072638);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`numero_proceso`),
  ADD UNIQUE KEY `numero_proceso` (`numero_proceso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `numero_proceso` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
