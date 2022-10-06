-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2022 a las 00:23:58
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
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `Zona` varchar(100) NOT NULL,
  `Nombre del Equipo` varchar(100) NOT NULL,
  `Capitán Equipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `Zona`, `Nombre del Equipo`, `Capitán Equipo`) VALUES
(1, 'Noroeste', 'Denver Nuggets', 'Nikola Jokić '),
(2, 'Noroeste', 'Minnesota Timberwolves', 'Patrick Beverley'),
(3, 'Noroeste', 'Oklahoma City Thunder', 'Josh Giddey'),
(4, 'Noroeste', 'Portland Trail Blazers', 'Damian Lillard'),
(5, 'Noroeste', 'Utah Jazz', 'Leandro Bolmaro'),
(6, 'Suroeste', 'Dallas Mavericks', 'Luka Dončić '),
(7, 'Suroeste', 'Houston Rockets', 'Eric Gordon'),
(8, 'Suroeste', 'Memphis Grizzlies', 'Kennedy Chandler'),
(9, 'Suroeste', 'New Orleans Pelicans', 'Willy Hernangómez'),
(10, 'Suroeste', 'San Antonio Spurs', 'Doug McDermott'),
(11, 'Pacífico', 'Golden State Warriors', 'Stephen Curry'),
(12, 'Pacífico', 'Los Angeles Clippers', 'Reggie Jackson'),
(13, 'Pacífico', 'Los Angeles Lakers', 'LeBron James'),
(14, 'Pacífico', 'Phoenix Suns', 'Devin Booker '),
(15, 'Pacífico', 'Sacramento Kings', 'Jeremy Lamb '),
(16, 'Atlántico', 'Boston Celtics', 'Marcus Smart'),
(17, 'Atlántico', 'Brooklyn Nets', 'Kevin Durant'),
(18, 'Atlántico', 'New York Knicks', 'Derrick Rose'),
(19, 'Atlántico', 'Philadelphia 76ers', 'Joel Embiid'),
(20, 'Atlántico', 'Toronto Raptors', 'Fred VanVleet'),
(21, 'Central', 'Chicago Bulls', 'DeMar DeRozan '),
(22, 'Central', 'Cleveland Cavaliers', 'Ricky Rubio'),
(23, 'Central', 'Detroit Pistons', 'Killian Hayes'),
(24, 'Central', 'Indiana Pacers', 'Chris Duarte'),
(25, 'Central', 'Milwaukee Bucks', 'Giannis Antetokounmpo'),
(26, 'Sureste', 'Atlanta Hawks', 'Trae Young'),
(27, 'Sureste', 'Charlotte Hornets', 'Cody Martin'),
(28, 'Sureste', 'Miami Heat', 'Udonis Haslem'),
(29, 'Sureste', 'Orlando Magic', 'Devin Cannady'),
(30, 'Sureste', 'Washington Wizards', 'Bradley Beal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
