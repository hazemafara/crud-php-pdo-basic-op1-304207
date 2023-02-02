-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 02 feb 2023 om 18:29
-- Serverversie: 5.7.36
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-2209c`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Persoon`
--

DROP TABLE IF EXISTS `Persoon`;
CREATE TABLE IF NOT EXISTS `Persoon` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussencoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `haarkleur` varchar(20) NOT NULL,
  `telefoonnummer` varchar(100) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `huisnummer` varchar(10) NOT NULL,
  `woonplaats` varchar(30) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `landnaam` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Persoon`
--

INSERT INTO `Persoon` (`id`, `voornaam`, `tussencoegsel`, `achternaam`, `haarkleur`, `telefoonnummer`, `straatnaam`, `huisnummer`, `woonplaats`, `postcode`, `landnaam`) VALUES
(10, 'new', 'new', 'new', 'new', '', '', '', '', '', ''),
(14, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(15, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(16, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(17, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(18, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(19, 'new', 'h', 'h', 'de', '', '', '', '', '', ''),
(20, 'hjhv', 'jh', 'vjhvjh', 'vj', '', '', '', '', '', ''),
(21, 'hjhv', 'jh', 'vjhvjh', 'vj', '', '', '', '', '', ''),
(22, 'asd', 'asdc', 'sfdcz', 'sdfc', '', '', '', '', '', ''),
(24, 'mahmoud', 'yo', 'rsgfvweasfdc', 'sdrfsdv', '', '', '', '', '', ''),
(26, 'Hazem', 'de', 'ruiter', 'sdrfsdv', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
