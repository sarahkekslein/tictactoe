-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jul 2015 um 10:16
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `tictactoe`
--
CREATE DATABASE IF NOT EXISTS `tictactoe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tictactoe`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `statistic`
--

CREATE TABLE IF NOT EXISTS `statistic` (
  `userId` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `tie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `statistic`
--

INSERT INTO `statistic` (`userId`, `win`, `lose`, `tie`) VALUES
(14, 15, 3, 4),
(15, 11, 2, 6),
(16, 7, 3, 12),
(17, 22, 0, 2),
(18, 11, 1, 1),
(19, 4, 16, 11);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `description`) VALUES
(14, 'Marvin', '$2y$10$xFaU67EFGlXMJ1QwUE0.uu9gWAoiHG6dqyhDJH/KLL4rNAV2QWTa.', 'ms@gmail.com', ''),
(15, 'Sarah', '$2y$10$KnnopFlbaRRBvlU688/0VuQ2iXZG9Vj/1buS258akMMIVXfTHRQv6', 'sarah@gmail.com', ''),
(16, 'Basti', '$2y$10$88VC1Z5lAD0qSlkMxStBPexu1zdjoBEhgPxq6fhFOtcWNGyjJNiPO', 'basti@aol.de', ''),
(17, 'Deike', '$2y$10$8OiuJ.VRduqFsewdaNyx1eoAqG8YCRh3rw3ARRIvO9A9w9xeyimPi', 'deike@online.de', ''),
(18, 'Nicole', '$2y$10$LS/PIb/Sus/HPhC43PXuo.Njl/8tsC7rFIkGkegO0zwhddvqrL6FC', 'nicole@gmx.de', ''),
(19, 'benno', '$2y$10$LuXySqN73PgLaROYcRo6OO92NHlHWX.2bSfxzRt4yOxEuUyCBCmcG', 'willemsen@itc.rwth-aachen.de', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`userId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `statistic`
--
ALTER TABLE `statistic`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
