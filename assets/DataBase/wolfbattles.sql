-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2020 a las 22:21:40
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
  `TorneosInscritos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Puntajes` float NOT NULL,
  `JugadorUno` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorDos` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorTres` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `JugadorCuatro` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idEquipo`, `NombreEquip`, `TorneosInscritos`, `Puntajes`, `JugadorUno`, `JugadorDos`, `JugadorTres`, `JugadorCuatro`) VALUES
(8, 'UniHuevos4', '', 0, 'Madara', 'Edguix', NULL, NULL),
(9, 'UniHuevos4', '', 0, 'Madara', 'Edguix', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderador`
--

CREATE TABLE `moderador` (
  `idMod` int(11) NOT NULL,
  `CorreoMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ContraseñaMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `NombreMod` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idJuego` int(11) NOT NULL
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
  `idEquipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
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

INSERT INTO `perfil` (`idPerfil`, `Nombre`, `Apellido`, `Email`, `Contraseña`, `Gamertag`, `Plataforma`) VALUES
(1, 'Noel ', 'Andrew', 'nepe@gmail.com', 'nepe123', 'Madara', 'Play Station'),
(2, 'Edgar', 'Hernandez', 'nepe2@gmail.com', 'nepe3', 'Edguix', 'PC');

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
  `idEquipo` int(11) NOT NULL,
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
  ADD PRIMARY KEY (`idEquipo`);

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
  ADD KEY `idJuego` (`idJuego`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`idPartida`),
  ADD KEY `idToreno` (`idToreno`),
  ADD KEY `idEquipo` (`idEquipo`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`idTorneo`),
  ADD KEY `idEquipo` (`idEquipo`),
  ADD KEY `idJuego` (`idJuego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `moderador`
--
ALTER TABLE `moderador`
  ADD CONSTRAINT `moderador_ibfk_1` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`);

--
-- Filtros para la tabla `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `partida_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD CONSTRAINT `torneo_ibfk_2` FOREIGN KEY (`idJuego`) REFERENCES `juego` (`idJuego`),
  ADD CONSTRAINT `torneo_ibfk_3` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
