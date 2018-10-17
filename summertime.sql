-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 17, 2018 alle 16:43
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
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `id` int(11) NOT NULL,
  `idLido` int(11) NOT NULL,
  `numOmbrellone` varchar(3) NOT NULL,
  `idUtente` int(11) NOT NULL,
  `dataPrenotazione` date NOT NULL,
  `Effettuata` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`id`, `idLido`, `numOmbrellone`, `idUtente`, `dataPrenotazione`, `Effettuata`) VALUES
(2, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:17:39'),
(3, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:29:46'),
(4, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:44:06'),
(5, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:55:02'),
(6, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:56:26'),
(7, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:56:43'),
(8, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:56:58'),
(9, 0, ':nu', 0, '0000-00-00', '2018-10-10 13:58:27'),
(10, 0, ':nu', 0, '0000-00-00', '2018-10-10 14:02:01'),
(11, 0, ':nu', 0, '0000-00-00', '2018-10-10 14:02:41'),
(12, 0, ':nu', 0, '0000-00-00', '2018-10-10 14:06:59'),
(13, 66, 'A13', 10, '2017-11-11', '2018-10-10 14:11:35'),
(14, 66, 'A13', 10, '2017-11-11', '2018-10-17 13:14:01'),
(15, 66, 'A13', 10, '2017-11-11', '2018-10-17 13:15:21'),
(16, 66, 'A13', 10, '2017-11-11', '2018-10-17 13:16:32'),
(17, 66, 'A13', 10, '2017-11-11', '2018-10-17 14:17:43'),
(18, 66, 'A13', 10, '2017-11-11', '2018-10-17 14:18:41'),
(19, 66, 'A13', 10, '2017-11-11', '2018-10-17 14:40:42');

--
-- Indici per le tabelle scaricate
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
