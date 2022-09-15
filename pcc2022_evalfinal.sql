-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2022 a las 01:22:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pcc2022_evalfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactologin`
--

CREATE TABLE `contactologin` (
  `USUARIO` varchar(150) NOT NULL,
  `CONTRASENA` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactologin`
--

INSERT INTO `contactologin` (`USUARIO`, `CONTRASENA`) VALUES
('LCP', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactomensajes`
--

CREATE TABLE `contactomensajes` (
  `id` int(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` int(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactomensajes`
--

INSERT INTO `contactomensajes` (`id`, `nombre`, `telefono`, `correo`, `mensaje`) VALUES
(6, ' Maryorie Flores ', 55555567, ' mafer@hotmal.com ', ' como estas?\r\n '),
(7, ' alejandra ', 888888, ' alejandra@hotmail.com ', ' Hola mundo '),
(8, ' sebas ', 23459876, ' sebasuwu@gmail.com ', ' Que precio? '),
(9, ' 67ytuh ', 0, ' 0000@gmail.com ', ' Muy buenos productos\r\n ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactologin`
--
ALTER TABLE `contactologin`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Indices de la tabla `contactomensajes`
--
ALTER TABLE `contactomensajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactomensajes`
--
ALTER TABLE `contactomensajes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
