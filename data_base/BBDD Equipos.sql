-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 00:55:58
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

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `Usuario`, `Contraseña`) VALUES
(1, 'Larita', 'Larita123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipo` int(11) NOT NULL,
  `NombreDelEquipo` varchar(100) NOT NULL,
  `Zona` varchar(100) NOT NULL,
  `CapitanEquipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipo`, `NombreDelEquipo`, `Zona`, `CapitanEquipo`) VALUES
(1, 'Denver Nuggets', 'Noroeste', 'Nikola Jokić '),
(2, 'Minnesota Timberwolves', 'Noroeste', 'Russell D\'Angelo'),
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
(6, 'Jaden McDaniels', 22, 84, 2.06, 'Alero', 2),
(7, 'Russell D\'Angelo', 26, 88, 1.93, 'Base', 2),
(8, 'Malik Beasley', 25, 85, 1.93, 'Escolta', 2),
(9, 'Nathan Knight', 25, 115, 2.08, 'Ala-pivot', 2),
(10, 'Naz Reid', 23, 120, 2.06, 'Pivot', 2),
(11, 'Josh Giddey', 20, 93, 2.06, 'Base', 3),
(12, 'Luguentz Dort', 23, 98, 1.91, 'Escolta', 3),
(13, 'Jeremiah Robinson-Earl', 21, 110, 2.03, 'Alero', 3),
(14, 'Aleksej Pokuševski', 20, 86, 2.13, 'Pivot', 3),
(15, 'Mike Muscala', 31, 109, 2.08, 'Ala-pivot', 3),
(16, 'Drew Eubanks', 25, 111, 2.06, 'Ala-pivot', 4),
(17, 'Jerami Grant', 28, 95, 2.03, 'Alero', 4),
(18, 'Keon Johnson', 20, 84, 1.93, 'Escolta', 4),
(19, 'Damian Lillard', 32, 88, 1.88, 'Base', 4),
(20, 'Jusuf Nurkić', 28, 132, 2.11, 'Pivot', 4),
(21, 'Leandro Bolmaro', 22, 91, 1.98, 'Alero', 5),
(22, 'Udoka Azubuike', 23, 122, 2.13, 'Pivot', 5),
(23, 'Collin Sexton', 23, 86, 1.85, 'Base', 5),
(24, 'Stanley Johnson', 26, 110, 1.98, 'Escolta', 5),
(25, 'Kelly Olynyk', 31, 109, 2.11, 'Ala-pivot', 5),
(26, 'Luka Dončić', 23, 104, 2.01, 'Escolta', 6),
(27, 'Jaden Hardy', 20, 90, 1.93, 'Base', 6),
(28, 'Maximilian Kleber', 30, 109, 2.08, 'Ala-pivot', 6),
(29, 'Christian Wood', 27, 97, 2.06, 'Alero', 6),
(30, 'Moses Brown', 22, 111, 2.18, 'Pivot', 6),
(31, 'Eric Gordon', 33, 98, 1.91, 'Escolta', 7),
(32, 'Bruno Fernando', 24, 109, 2.06, 'Ala-pivot', 7),
(33, 'Kenyon Martin Jr.', 21, 98, 1.96, 'Alero', 7),
(34, 'Dennis Schröder', 29, 78, 1.85, 'Base', 7),
(35, 'Alperen Şengün', 20, 110, 2.08, 'Pivot', 7),
(36, 'Kennedy Chandler', 20, 78, 1.83, 'Base', 8),
(37, 'Brandon Clarke', 26, 98, 2.03, 'Ala-pivot', 8),
(38, 'Dillon Brooks', 26, 102, 2.01, 'Escolta', 8),
(39, 'Steven Adams', 29, 120, 2.11, 'Pivot', 8),
(40, 'Ziaire Williams', 21, 84, 2.06, 'Alero', 8),
(41, 'Willy Hernangómez', 28, 109, 2.11, 'Ala-pivot', 9),
(42, 'Jose Alvarado', 24, 81, 1.83, 'Base', 9),
(43, 'Jaxson Hayes', 22, 100, 2.11, 'Pivot', 9),
(44, 'Garrett Temple', 36, 88, 1.96, 'Escolta', 9),
(45, 'Herbert Jones', 24, 93, 2.01, 'Alero', 9),
(46, 'Doug McDermott', 30, 102, 2.01, 'Alero', 10),
(47, 'Joshua Primo', 19, 86, 1.95, 'Base', 10),
(48, 'Romeo Langford', 22, 98, 1.98, 'Escolta', 10),
(49, 'Jakob Pöltl', 26, 108, 2.16, 'Pivot', 10),
(50, 'Zach Collins', 24, 113, 2.11, 'Ala-pivot', 10),
(51, 'Stephen Curry', 34, 87, 1.88, 'Base', 11),
(52, 'Klay Thompson', 32, 98, 1.98, 'Escolta', 11),
(53, 'Draymond Green', 32, 104, 1.98, 'Ala-pivot', 11),
(54, 'Kevon Looney', 26, 100, 2.06, 'Pivot', 11),
(55, 'Andre Iguodala', 38, 98, 1.98, 'Alero', 11),
(56, 'Reggie Jackson', 32, 94, 1.88, 'Base', 12),
(57, 'Nicolas Batum', 33, 104, 2.03, 'Ala-pivot', 12),
(58, 'Ivica Zubac', 25, 109, 2.13, 'Pivot', 12),
(59, 'Xavier Moon', 27, 75, 1.88, 'Escolta', 12),
(60, 'Robert Covington', 31, 95, 2.01, 'Alero', 12),
(61, 'Anthony Davis', 29, 115, 2.08, 'Ala-pivot', 13),
(62, 'Thomas Bryant', 25, 112, 2.08, 'Pivot', 13),
(63, 'Austin Reaves', 24, 89, 1.96, 'Escolta', 13),
(64, 'LeBron James', 37, 113, 2.06, 'Alero', 13),
(65, 'Patrick Beverley', 34, 82, 1.85, 'Base', 13),
(66, 'Devin Booker', 25, 93, 1.96, 'Escolta', 14),
(67, 'Deandre Ayton', 24, 113, 2.11, 'Pivot', 14),
(68, 'Chris Paul\r\n', 37, 79, 1.83, 'Base', 14),
(69, 'Cameron Johnson', 26, 95, 2.03, 'Alero', 14),
(70, 'Bismack Biyombo', 30, 116, 2.03, 'Ala-pivot', 14),
(71, 'Jeremy Lamb', 30, 84, 1.96, 'Alero', 15),
(72, 'De\'Aaron Fox', 24, 82, 1.91, 'Base', 15),
(73, 'Terence Davis', 25, 91, 1.93, 'Escolta', 15),
(74, 'Trey Lyles', 26, 109, 2.06, 'Ala-pivot', 15),
(75, 'Chimezie Metu', 25, 102, 2.11, 'Pivot', 15),
(76, 'Luke Kornet', 27, 109, 2.18, 'Pivot', 16),
(77, 'Jaylen Brown', 25, 101, 1.98, 'Escolta', 16),
(78, 'Blake Griffin', 33, 113, 2.06, 'Ala-pivot', 16),
(79, 'Marcus Smart', 28, 100, 1.93, 'Base', 16),
(80, 'Jake Layman', 28, 95, 2.03, 'Alero', 16),
(81, 'Kevin Durant', 34, 109, 2.08, 'Alero', 17),
(82, 'Kyrie Irving', 30, 88, 1.88, 'Base', 17),
(83, 'Day\'Ron Sharpe', 20, 120, 2.06, 'Ala-pivot', 17),
(84, 'Ben Simmons', 26, 104, 2.11, 'Escolta', 17),
(85, 'Nicolas Claxton', 23, 100, 2.11, 'Pivot', 17),
(86, 'Derrick Rose', 34, 91, 1.88, 'Base', 18),
(87, 'Evan Fournier', 29, 91, 1.98, 'Alero', 18),
(88, 'Immanuel Quickley', 23, 85, 1.91, 'Escolta', 18),
(89, 'Jericho Sims', 23, 113, 2.06, 'Pivot', 18),
(90, 'Obi Toppin', 24, 100, 2.06, 'Ala-pivot', 18),
(91, 'Joel Embiid', 28, 127, 2.13, 'Pivot', 19),
(92, 'James Harden', 33, 102, 1.96, 'Base', 19),
(93, 'Isaiah Joe', 23, 75, 1.93, 'Escolta', 19),
(94, 'Georges Niang', 29, 104, 2.01, 'Ala-pivot', 19),
(95, 'Danuel House', 29, 100, 1.98, 'Alero', 19),
(96, 'Fred VanVleet', 28, 89, 1.85, 'Base', 20),
(97, 'OG Anunoby', 25, 105, 2.01, 'Alero', 20),
(98, 'Precious Achiuwa', 23, 102, 2.03, 'Ala-pivot', 20),
(99, 'Gary Trent Jr.', 23, 95, 1.96, 'Escolta', 20),
(100, 'Khem Birch', 30, 106, 2.06, 'Pivot', 20),
(101, 'DeMar DeRozan', 33, 100, 1.98, 'Escolta', 21),
(102, 'Lonzo Ball', 24, 86, 1.98, 'Base', 21),
(103, 'Derrick Jones Jr.', 25, 95, 1.98, 'Alero', 21),
(104, 'Andre Drummond', 29, 127, 2.08, 'Pivot', 21),
(105, 'Tristan Thompson', 31, 115, 2.06, 'Ala-pivot', 21),
(106, 'Ricky Rubio', 31, 86, 1.88, 'Base', 22),
(107, 'Lamar Stevens', 25, 104, 1.98, 'Alero', 22),
(108, 'Caris LeVert', 28, 93, 1.98, 'Escolta', 22),
(109, 'Robin Lopez', 34, 125, 2.13, 'Pivot', 22),
(110, 'Kevin Love', 34, 114, 2.03, 'Ala-pivot', 22),
(111, 'Killian Hayes', 21, 88, 1.96, 'Base', 23),
(112, 'Saddiq Bey', 23, 98, 2.01, 'Alero', 23),
(113, 'Alec Burks', 31, 97, 1.98, 'Escolta', 23),
(114, 'Jalen Duren', 18, 113, 2.11, 'Pivot', 23),
(115, 'Nerlens Noel', 28, 100, 2.11, 'Pivot', 23),
(116, 'Chris Duarte', 25, 86, 1.96, 'Base', 24),
(117, 'Buddy Hield', 29, 100, 1.93, 'Escolta', 24),
(118, 'Oshae Brissett', 24, 95, 2.01, 'Alero', 24),
(119, 'Goga Bitadze', 23, 113, 2.13, 'Pivot', 24),
(120, 'Isaiah Jackson', 20, 93, 2.08, 'Ala-pivot', 24),
(121, 'Giannis Antetokounmpo', 27, 110, 2.11, 'Alero', 25),
(122, 'Thanasis Antetokounmpo', 30, 99, 1.98, 'Escolta', 25),
(123, 'Jevon Carter', 27, 91, 1.85, 'Base', 25),
(124, 'Brook Lopez', 34, 128, 2.13, 'Pivot', 25),
(125, 'Serge Ibaka', 33, 107, 2.08, 'Ala-pivot', 25),
(126, 'Trae Young', 24, 74, 1.85, 'Base', 26),
(127, 'Justin Holiday', 33, 82, 1.98, 'Alero', 26),
(128, 'Bogdan Bogdanović', 30, 93, 1.98, 'Escolta', 26),
(129, 'Clint Capela', 28, 109, 2.08, 'Pivot', 26),
(130, 'John Collins', 25, 103, 2.06, 'Ala-pivot', 26),
(131, 'Cody Martin', 27, 93, 1.96, 'Alero', 27),
(132, 'LaMelo Ball', 21, 81, 2.01, 'Base', 27),
(133, 'P. J. Washington', 24, 104, 2.01, 'Ala-pivot', 27),
(134, 'Kelly Oubre', 26, 92, 2.01, 'Escolta', 27),
(135, 'Kai Jones', 21, 100, 2.08, 'Pivot', 27),
(136, 'Udonis Haslem', 42, 107, 2.03, 'Ala-pivot', 28),
(137, 'Kyle Lowry', 36, 85, 1.83, 'Base', 28),
(138, 'Nikola Jović', 19, 109, 2.11, 'Pivot', 28),
(139, 'Caleb Martin', 27, 93, 1.96, 'Alero', 28),
(140, 'Tyler Herro', 22, 88, 1.96, 'Escolta', 28),
(141, 'Devin Cannady', 26, 83, 1.88, 'Base', 29),
(142, 'Mohamed Bamba', 24, 105, 2.13, 'Pivot', 29),
(143, 'Paolo Banchero', 19, 113, 2.08, 'Ala-pivot', 29),
(144, 'Franz Wagner', 21, 100, 2.08, 'Alero', 29),
(145, 'Gary Harris', 28, 95, 1.93, 'Escolta', 29),
(146, 'Bradley Beal', 29, 94, 1.93, 'Escolta', 30),
(147, 'Deni Avdija', 21, 95, 2.06, 'Alero', 30),
(148, 'Daniel Gafford', 24, 106, 2.06, 'Ala-pivot', 30),
(149, 'Taj Gibson', 37, 105, 2.06, 'Ala-pivot', 30),
(150, 'Kristaps Porziņģis', 27, 109, 2.21, 'Pivot', 30);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

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
