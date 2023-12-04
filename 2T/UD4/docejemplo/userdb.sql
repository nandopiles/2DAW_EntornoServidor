-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-10-2021 a las 12:48:23
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `userdb`
--
CREATE DATABASE IF NOT EXISTS `userdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `userdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(16) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `userBirthDate` date DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userId`, `userName`, `userBirthDate`) VALUES
(1, 'Sebastian', '2007-10-21'),
(2, 'Zephr', '1992-04-26'),
(3, 'Mason', '2018-07-28'),
(4, 'Leonard', '2021-12-13'),
(5, 'Amy', '1987-02-17'),
(6, 'Wayne', '2006-05-17'),
(7, 'Hedda', '1986-09-28'),
(8, 'Hilda', '2001-04-01'),
(9, 'Walker', '2000-02-19'),
(10, 'Audrey', '2004-02-28'),
(11, 'Melodie', '2002-09-28'),
(12, 'Yoshi', '1987-05-29'),
(13, 'Lila', '1981-12-04'),
(14, 'Myles', '1996-08-18'),
(15, 'Maggie', '1990-04-18'),
(16, 'Libby', '1975-01-23'),
(17, 'Gavin', '2010-02-25'),
(18, 'Hasad', '1979-07-10'),
(19, 'Stone', '1987-02-15'),
(20, 'Griffith', '2022-03-26'),
(21, 'Beck', '2000-03-19'),
(22, 'Kiara', '2014-05-18'),
(23, 'Idona', '1989-11-07'),
(24, 'Buffy', '1991-10-11'),
(25, 'Tiger', '1986-12-25'),
(26, 'Keaton', '2022-06-06'),
(27, 'Chadwick', '2007-12-31'),
(28, 'Doris', '1980-01-17'),
(29, 'Joel', '1991-03-19'),
(30, 'Karen', '1999-04-14'),
(31, 'Cadman', '2000-03-16'),
(32, 'Acton', '1997-07-15'),
(33, 'Hanna', '1982-11-03'),
(34, 'Audrey', '1999-04-30'),
(35, 'David', '1981-03-23'),
(36, 'Roth', '1989-02-25'),
(37, 'Stacy', '2016-04-15'),
(38, 'Madison', '1981-10-26'),
(39, 'Regina', '1987-12-26'),
(40, 'Ursa', '1986-10-31'),
(41, 'Timon', '2017-11-12'),
(42, 'Michelle', '1994-08-07'),
(43, 'Christine', '2001-05-11'),
(44, 'Claudia', '2020-04-26'),
(45, 'Erasmus', '1977-09-26'),
(46, 'Ciaran', '1990-11-05'),
(47, 'Joel', '1985-01-28'),
(48, 'Deanna', '2013-10-11'),
(49, 'Kirk', '1980-11-16'),
(50, 'Heidi', '2004-09-16'),
(51, 'Dorian', '2018-10-07'),
(52, 'Upton', '2015-11-19'),
(53, 'Kylynn', '1986-08-23'),
(54, 'Joshua', '2008-02-19'),
(55, 'Gregory', '1999-05-08'),
(56, 'Kaseem', '1983-07-11'),
(57, 'Nigel', '2007-08-16'),
(58, 'Alvin', '1985-08-19'),
(59, 'Ferris', '1986-01-06'),
(60, 'Ulric', '1988-09-17'),
(61, 'Shellie', '2016-07-09'),
(62, 'Harlan', '1980-12-16'),
(63, 'Lee', '1993-01-24'),
(64, 'Rhona', '2015-03-04'),
(65, 'Lewis', '1980-08-20'),
(66, 'Amena', '2006-04-15'),
(67, 'Callie', '1983-02-04'),
(68, 'Bo', '2000-04-29'),
(69, 'Jorden', '1998-12-02'),
(70, 'Dale', '2005-01-10'),
(71, 'Damian', '1977-06-15'),
(72, 'Jacqueline', '2005-12-25'),
(73, 'Drew', '1982-11-30'),
(74, 'Nelle', '1978-05-27'),
(75, 'Barbara', '1991-07-30'),
(76, 'Linda', '1980-10-09'),
(77, 'Keaton', '2005-04-17'),
(78, 'Carly', '1981-12-13'),
(79, 'Yuri', '2001-01-20'),
(80, 'Jarrod', '2004-01-03'),
(81, 'Murphy', '2020-03-05'),
(82, 'Emerson', '1990-06-23'),
(83, 'Yuli', '1996-06-25'),
(84, 'Reed', '1990-03-04'),
(85, 'Latifah', '2004-12-30'),
(86, 'Stephanie', '1978-08-16'),
(87, 'Stewart', '2014-02-28'),
(88, 'Rudyard', '1996-12-04'),
(89, 'Stewart', '1975-10-19'),
(90, 'Idola', '1989-09-08'),
(91, 'Jolene', '1976-03-08'),
(92, 'Ignatius', '1978-06-09'),
(93, 'Gage', '1990-01-09'),
(94, 'Alfonso', '2007-05-18'),
(95, 'Chelsea', '2015-01-03'),
(96, 'Maxine', '1981-11-29'),
(97, 'Marsden', '2001-12-29'),
(98, 'Matthew', '1980-05-15'),
(99, 'Macy', '1977-04-08'),
(100, 'Pamela', '2005-07-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
