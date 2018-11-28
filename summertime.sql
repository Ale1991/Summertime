-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 28, 2018 alle 18:15
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
('C2', 3, 2, 0, 'RSDVNTVRM66D763');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione`
--

CREATE TABLE `prenotazione` (
  `id` int(11) NOT NULL,
  `idLido` varchar(50) NOT NULL,
  `numOmbrellone` varchar(3) NOT NULL,
  `idUtente` varchar(70) NOT NULL,
  `dataInizio` date NOT NULL,
  `dataFine` date NOT NULL,
  `Effettuata` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prenotazione`
--

INSERT INTO `prenotazione` (`id`, `idLido`, `numOmbrellone`, `idUtente`, `dataInizio`, `dataFine`, `Effettuata`) VALUES
(25, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2018-05-03', '2018-05-08', '2018-11-20 15:30:08'),
(26, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2018-11-23', '2018-11-24', '2018-11-27 09:16:10'),
(27, 'RSDVNTVRM66D763', 'C2', 'Alessio', '2018-05-03', '2018-05-15', '2018-11-27 09:17:28'),
(28, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2019-06-14', '2019-06-19', '2018-11-28 17:02:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
