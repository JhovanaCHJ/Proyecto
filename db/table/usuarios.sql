-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2020 a las 13:11:22
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `clave`) VALUES
(1, 'cristiancedano1030@gmail.com', 'cristian', '$2y$10$2zxLD5hKzIxJVry5N1bKquZJqMzQnShj/jdVGkP5Fmu5QI1jJapg.'),
(2, 'cristian', 'cristiancedano1030@gmail.com', '$2y$10$V.P9IiAXneiEdV1XDJGqa.VzdK0GYksBFsLsrm3EA3G4xkgQUzIkO'),
(3, 'JUAN', 'juan@gmail.com', '$2y$10$XXqX4oe8YHIhy.WN3EU6FeqratJdbF45UuKaitXDuUkvnGLSESJPa'),
(4, 'jhovanachura', 'churajulyesperanza@gmail.com', '$2y$10$2pQu0tySmYzyXK2aWdEA3el2mp.oGNpSU3ovsFIqQaq1qCYaCmTma'),
(5, 'jechurajuly', 'churajulyester@gmail.com', '$2y$10$mCE8QwyVa6XyuzCW3b/KZ.2Mk8Er1B.dIelYPWpuGp4eq7UVm6Jd2'),
(6, 'mia', 'miaculuchi@gmail.com', '$2y$10$805uxEovXVgPsTdM07BuwONn9huRPrS8g5xO8jb58iadlssPuzGd2'),
(7, 'Sara', 'saranogales@gmail.com', '$2y$10$bZhLihNR68bOpmPYaxfz1eesLH9jy11WrwefAlXU/DHC7qc91RFYC'),
(8, 'Sonia', 'sonia@gmail.com', '$2y$10$ot4lqdgPB44E7MucNQrDV.DGTfFKd1SzF0jPGsgf0wCtrOE7lKGWO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
