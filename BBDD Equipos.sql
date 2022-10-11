-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 22:08:02
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
-- Base de datos: `equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `Nombre del Equipo` varchar(100) NOT NULL,
  `Zona` varchar(100) NOT NULL,
  `Capitán Equipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `Nombre del Equipo`, `Zona`, `Capitán Equipo`) VALUES
(1, 'Denver Nuggets', 'Noroeste', 'Nikola Jokić '),
(2, 'Minnesota Timberwolves', 'Noroeste', 'Patrick Beverley'),
(3, 'Oklahoma City Thunder', 'Noroeste', 'Josh Giddey'),
(4, 'Portland Trail Blazers', 'Noroeste', 'Damian Lillard'),
(5, 'Utah Jazz', 'Noroeste', 'Leandro Bolmaro'),
(6, 'Dallas Mavericks', 'Suroeste', 'Luka Dončić '),
(7, 'Houston Rockets', 'Suroeste', 'Eric Gordon'),
(8, 'Memphis Grizzlies', 'Suroeste', 'Kennedy Chandler'),
(9, 'New Orleans Pelicans', 'Suroeste', 'Willy Hernangómez'),
(10, 'San Antonio Spurs', 'Suroeste', 'Doug McDermott'),
(11, 'Golden State Warriors', 'Pacífico', 'Stephen Curry'),
(12, 'Los Angeles Clippers', 'Pacífico', 'Reggie Jackson'),
(13, 'Los Angeles Lakers', 'Pacífico', 'LeBron James'),
(14, 'Phoenix Suns', 'Pacífico', 'Devin Booker '),
(15, 'Sacramento Kings', 'Pacífico', 'Jeremy Lamb '),
(16, 'Boston Celtics', 'Atlántico', 'Marcus Smart'),
(17, 'Brooklyn Nets', 'Atlántico', 'Kevin Durant'),
(18, 'New York Knicks', 'Atlántico', 'Derrick Rose'),
(19, 'Philadelphia 76ers', 'Atlántico', 'Joel Embiid'),
(20, 'Toronto Raptors', 'Atlántico', 'Fred VanVleet'),
(21, 'Chicago Bulls', 'Central', 'DeMar DeRozan '),
(22, 'Cleveland Cavaliers', 'Central', 'Ricky Rubio'),
(23, 'Detroit Pistons', 'Central', 'Killian Hayes'),
(24, 'Indiana Pacers', 'Central', 'Chris Duarte'),
(25, 'Milwaukee Bucks', 'Central', 'Giannis Antetokounmpo'),
(26, 'Atlanta Hawks', 'Sureste', 'Trae Young'),
(27, 'Charlotte Hornets', 'Sureste', 'Cody Martin'),
(28, 'Miami Heat', 'Sureste', 'Udonis Haslem'),
(29, 'Orlando Magic', 'Sureste', 'Devin Cannady'),
(30, 'Washington Wizards', 'Sureste', 'Bradley Beal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Altura` float NOT NULL,
  `Posición` varchar(50) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `Nombre`, `Edad`, `Peso`, `Altura`, `Posición`, `id_equipo`) VALUES
(1, 'Nikola Jokić', 27, 115, 2.13, 'Pivot', 1),
(2, 'Jeff Green', 36, 107, 2.03, 'Alero', 1),
(3, 'Peyton Watson', 20, 91, 2.03, 'Escolta', 1),
(4, 'Aaron Gordon', 27, 107, 2.03, 'Ala-pivot', 1),
(5, 'Ish Smith ', 34, 107, 1.83, 'Base', 1),
(6, 'Leandro Bolmaro', 22, 91, 1.98, 'Alero', 2),
(7, 'Patrick Beverley', 34, 82, 1.85, 'Base', 2),
(8, 'Malik Beasley', 25, 85, 1.93, 'Escolta', 2),
(9, 'Nathan Knight', 25, 115, 2.08, 'Ala-pivot', 2),
(10, 'Naz Reid', 23, 120, 2.06, 'Pivot', 2),
(11, 'Josh Giddey', 20, 93, 2.06, 'Base', 3),
(12, 'Luguentz Dort', 23, 98, 1.91, 'Escolta', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `FK_id_equipo` (`id_equipo`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
