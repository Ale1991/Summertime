-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 08, 2018 alle 18:29
-- Versione del server: 10.1.30-MariaDB
-- Versione PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summertime`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ombrellone`
--

CREATE TABLE `ombrellone` (
  `id` varchar(2) NOT NULL,
  `riga` int(4) NOT NULL,
  `colonna` int(4) NOT NULL,
  `occupato` tinyint(1) NOT NULL,
  `idLido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ombrellone`
--

INSERT INTO `ombrellone` (`id`, `riga`, `colonna`, `occupato`, `idLido`) VALUES
('A3', 1, 3, 0, 'RSDVNTVRM66D763'),
('C2', 3, 2, 0, '0'),
('C2', 3, 2, 0, '9'),
('C2', 3, 2, 0, 'RSDVNTVRM66D763');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `id` int(11) NOT NULL,
  `idLido` varchar(50) NOT NULL,
  `numOmbrellone` varchar(3) NOT NULL,
  `idUtente` int(11) NOT NULL,
  `dataPrenotazione` date NOT NULL,
  `Effettuata` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`id`, `idLido`, `numOmbrellone`, `idUtente`, `dataPrenotazione`, `Effettuata`) VALUES
(13, '66', 'A13', 10, '2017-11-11', '2018-10-10 14:11:35'),
(14, 'RSDVNTVRM66D763', 'C2', 0, '2018-11-22', '2018-11-08 08:48:21'),
(15, 'RSDVNTVRM66D763', 'C2', 0, '2018-11-24', '2018-11-08 08:57:27'),
(16, 'RSDVNTVRM66D763', 'C2', 0, '2018-11-20', '2018-11-08 10:02:24'),
(17, 'RSDVNTVRM66D763', 'A3', 0, '2018-11-07', '2018-11-08 10:16:34'),
(18, 'RSDVNTVRM66D763', 'C2', 0, '2018-11-16', '2018-11-08 10:34:29'),
(19, 'RSDVNTVRM66D763', 'C2', 0, '2018-11-30', '2018-11-08 10:36:00'),
(20, 'RSDVNTVRM66D763', 'C2', 0, '2018-02-14', '2018-11-08 10:42:39'),
(21, 'RSDVNTVRM66D763', 'A3', 0, '2018-02-02', '2018-11-08 14:52:42'),
(22, 'RSDVNTVRM66D763', 'A3', 0, '2018-12-27', '2018-11-08 16:27:09');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ombrellone`
--
ALTER TABLE `ombrellone`
  ADD PRIMARY KEY (`id`,`idLido`);

--
-- Indici per le tabelle `prenotazione`
--
ALTER TABLE `prenotazione`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
