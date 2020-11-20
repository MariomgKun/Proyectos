-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 06:51:42
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
(10, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(11, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(12, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(13, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(14, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(15, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(16, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(17, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(18, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(19, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(20, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(21, 'UniHuevos', '', 0, 'Madara', '', NULL, NULL),
(22, 'zentenitos', '', 0, 'Madara', '', NULL, NULL),
(23, 'zentenitos', '', 0, 'Madara', '', NULL, NULL),
(24, 'zentenitos', '', 0, 'Madara', '', NULL, NULL),
(25, 'zentenitos', '', 0, 'Madara', '', NULL, NULL),
(26, 'zentenitos', '', 0, 'Madara', '', NULL, NULL),
(27, 'zentenitos2', '', 0, 'Madara', '', NULL, NULL),
(28, 'zentenitos2', '', 0, 'Madara', '', NULL, NULL),
(29, 'Noelitos', '', 0, 'Madara', '', NULL, NULL),
(30, 'Noelitos', '', 0, 'Madara', '', NULL, NULL),
(31, 'Noelitos2', '', 0, 'Madara', '', NULL, NULL),
(32, 'Noelitos2', '', 0, 'Madara', '', NULL, NULL),
(33, 'Noelitos2', '', 0, 'Madara', '', NULL, NULL),
(34, 'Noelitos2', '', 0, 'Madara', '', NULL, NULL),
(35, 'Noelitos3', '', 0, 'Madara', '', NULL, NULL),
(36, 'Noelitos3', '', 0, 'Madara', '', NULL, NULL),
(37, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(38, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(39, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(40, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(41, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(42, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(43, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(44, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(45, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(46, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(47, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(48, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(49, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(50, 'LPMX', '', 0, 'Madara', '', NULL, NULL),
(51, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(52, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(53, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(54, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(55, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(56, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(57, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(58, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(59, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(60, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(61, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(62, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(63, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(64, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(65, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(66, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(67, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(68, 'LPMXww', '', 0, 'Madara', '', NULL, NULL),
(69, 'LPMXww', '', 0, 'Madara', '', NULL, NULL);

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
(15, 51, 'Noel', 'Andrew', 'nepe@gmail.com', 'nepeeee', 'Madara', ''),
(16, 51, 'Noel', 'Andrew', 'nepe@gmail.com', 'nepeeee', 'Madara', '');

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
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `idEquipo` (`idEquipo`);

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
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
