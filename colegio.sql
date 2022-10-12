-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2022 a las 19:48:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `cod_director` varchar(20) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `fecha_ingreso` varchar(20) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `cod_director`, `password_user`, `fecha_ingreso`, `persona_id`) VALUES
(1, '41004', 'hola', '2021', 1),
(2, '41004', 'hola', '2021', 1),
(3, '41004', 'hola', '2021', 1),
(4, '41004', 'hola', '2021', 1),
(5, '41004', 'hola', '2021', 1),
(6, '41004', 'hola', '2021', 1),
(7, '41004', 'hola', '2021', 1),
(8, '41004', 'hola', '2021', 1),
(9, '41004', 'hola', '2021', 1),
(10, '41004', 'hola', '2021', 1),
(11, '41004', 'hola', '2021', 1),
(12, '41004', 'hola', '2021', 1),
(13, '41004', 'hola', '2021', 1),
(14, '41004', 'hola', '2021', 1),
(15, '41004', 'hola', '2021', 1),
(16, '41004', 'hola', '2021', 9),
(17, '41004', 'hola', '2021', 10),
(18, 'Brandon', 'ccee5504c9d889922b101124e9e43b71', '2021', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `codigo`, `nombre`, `descripcion`, `director_id`) VALUES
(3, '1ro-B', 'Primero de Primaria-B', 'otro nivel primarios', 0),
(4, '1ro-A', 'Primero de Primaria-A', 'primero', 0),
(7, '2do-A', 'segundo de primaria', 'segundo', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `direccion`, `telefono`) VALUES
(1, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(2, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(3, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(4, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(5, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(6, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(7, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(8, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(9, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(10, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(11, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(12, 'brandon', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(13, 'dariwn', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(14, 'dariwn', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(15, 'dariwn', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(16, 'danieles', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(17, 'daniel', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(18, 'juan', 'jimenez', 'jair', 'av doble via la guardia', '785547412'),
(19, 'daniel', 'arroyo', 'peña', 'av los tusquis', '785547412'),
(21, 'brandone', 'banana', 'peña', 'av los tusquis', '785547412');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `cod_profesor` varchar(20) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `fecha_ingreso` varchar(20) NOT NULL,
  `sueldo` float NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `grado_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `cod_profesor`, `password_user`, `fecha_ingreso`, `sueldo`, `profesion`, `grado_id`, `persona_id`, `director_id`) VALUES
(1, 'danielProfe', 'ccee5504c9d889922b101124e9e43b71', '1998', 3001, 'Licenciado en educacion', 3, 16, 0),
(3, 'juanprofe', 'ccee5504c9d889922b101124e9e43b71', '2021', 2500, 'Licenciado en educacion', 3, 18, 0),
(6, 'daniele', 'ccee5504c9d889922b101124e9e43b71', '2020', 5000, 'Licenciado en educacion', 7, 21, 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod_profesor` (`cod_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
