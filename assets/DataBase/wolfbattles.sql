-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 21:28:59
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
-- Base de datos: `wolfbattles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idEquipo` int(11) NOT NULL,
  `NombreEquip` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TorneosInscritos` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Puntajes` float DEFAULT NULL,
  `JugadorUno` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorDos` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorTres` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorCuatro` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idTorneo` int(11) DEFAULT NULL,
  `idPartida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idEquipo`, `NombreEquip`, `TorneosInscritos`, `Puntajes`, `JugadorUno`, `JugadorDos`, `JugadorTres`, `JugadorCuatro`, `idTorneo`, `idPartida`) VALUES
(79, 'UH', '', 0, 'Madara', '', '', '', NULL, NULL),
(80, 'UH', '', 0, 'Madara', '', '', '', NULL, NULL),
(81, 'UH', '', 0, 'Madara', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL,
  `NombreJuego` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Informacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`idJuego`, `NombreJuego`, `Imagen`, `Informacion`) VALUES
(1, 'mw', 'nepe', 'nepe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderador`
--

CREATE TABLE `moderador` (
  `idMod` int(11) NOT NULL,
  `CorreoMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ContraseñaMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NombreMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idPartida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `idPartida` int(11) NOT NULL,
  `Modalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Detalles` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Score` int(11) NOT NULL,
  `idToreno` int(11) NOT NULL,
  `prueba1` blob DEFAULT NULL,
  `prueba2` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `idEquipo` int(11) DEFAULT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Gamertag` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Plataforma` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `idEquipo`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Gamertag`, `Plataforma`) VALUES
(21, 79, 'Noel', 'Andrew', 'npe@gmail.com', 'nepee', 'Madara', ''),
(22, 79, 'Noel', 'Andrew', 'npe@gmail.com', 'nepee', 'Madara', ''),
(23, NULL, 'Noel', 'Andrew', 'nepe@nepe.com', '1234', 'xAndrew', ''),
(24, NULL, 'Noel', 'Andrew', 'nepe@nepe.com', '1234', 'xAndrew', ''),
(25, NULL, 'noel', 'ortiz', 'nepe@supernepe.com', 'nepelico', 'Don nepe', '3'),
(26, NULL, 'noel', 'ortiz', 'nepe@supernepe.com', 'nepelico', 'Don nepe', '3'),
(27, NULL, 'dadsw', 'dqdqwd', 'anjdadn@ldid.com', 'eweqwe', 'asdad', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `NombreTorneo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Juego` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Modalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `idJuego` int(11) NOT NULL,
  `idTorneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `idTorneo` (`idTorneo`),
  ADD KEY `idPartida` (`idPartida`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`);

--
-- Indices de la tabla `moderador`
--
ALTER TABLE `moderador`
  ADD PRIMARY KEY (`idMod`),
  ADD KEY `idJuego` (`idPartida`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`idPartida`),
  ADD KEY `idToreno` (`idToreno`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`idTorneo`),
  ADD KEY `idJuego` (`idJuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `idPartida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`idPartida`) REFERENCES `partida` (`idPartida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moderador`
--
ALTER TABLE `moderador`
  ADD CONSTRAINT `moderador_ibfk_1` FOREIGN KEY (`idMod`) REFERENCES `partida` (`idPartida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD CONSTRAINT `torneo_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
