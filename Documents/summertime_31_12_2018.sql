-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 31, 2018 alle 17:21
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
-- Struttura della tabella `copertina`
--

CREATE TABLE `copertina` (
  `idLido` varchar(50) NOT NULL,
  `nomeFoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `copertina`
--

INSERT INTO `copertina` (`idLido`, `nomeFoto`) VALUES
('BNCDRTC45G482', 'Lido_bianco.jpg'),
('RRALNGMRMTTTT20G482', 'Lido_aurora.jpg'),
('RSDVNTVRM66D763', 'Lido_rosa_dei_venti.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `lido`
--

CREATE TABLE `lido` (
  `IDLido` varchar(100) NOT NULL,
  `nomeLido` varchar(100) NOT NULL,
  `righe` int(3) NOT NULL,
  `colonne` int(3) NOT NULL,
  `dataApertura` date NOT NULL,
  `dataChiusura` date NOT NULL,
  `via` varchar(70) NOT NULL,
  `civico` int(4) NOT NULL,
  `comune` varchar(100) NOT NULL,
  `provincia` text NOT NULL,
  `idGestore` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `lido`
--

INSERT INTO `lido` (`IDLido`, `nomeLido`, `righe`, `colonne`, `dataApertura`, `dataChiusura`, `via`, `civico`, `comune`, `provincia`, `idGestore`) VALUES
('BNCDRTC45G482', 'Bianco', 6, 6, '2019-05-01', '2019-09-30', 'Adriatica', 45, 'Pescara', 'PE', 'Pippo'),
('RRALNGMRMTTTT20G482', 'Aurora', 5, 8, '2019-05-01', '2019-09-30', 'Lungomare Matteotti', 20, 'Pescara', 'PE', 'Alex'),
('RSDVNTVRM66D763', 'Rosa dei venti', 3, 4, '2019-06-01', '2019-09-15', 'via roma', 66, 'Francavilla al Mare', 'CH', 'Mimmo');

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
(39, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2019-06-01', '2019-06-04', '2018-12-11 08:28:37'),
(40, 'RSDVNTVRM66D763', 'C2', 'Alessio', '2019-06-01', '2019-06-04', '2018-12-11 08:29:54'),
(41, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2019-07-20', '2019-09-01', '2018-12-11 08:30:37'),
(42, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2019-06-05', '2019-06-12', '2018-12-17 11:29:55'),
(43, 'RSDVNTVRM66D763', 'B3', 'Alessio1991', '2018-12-20', '2018-12-20', '2018-12-18 17:51:13'),
(44, 'RSDVNTVRM66D763', 'B3', 'Alessio1991', '2018-12-20', '2018-12-20', '2018-12-18 17:51:21'),
(45, 'RSDVNTVRM66D763', 'B4', 'Alessio1991', '2018-12-21', '2018-12-22', '2018-12-18 17:51:49'),
(46, 'RSDVNTVRM66D763', 'B3', 'Alessio1991', '2018-12-21', '2018-12-22', '2018-12-18 17:51:49'),
(47, 'RSDVNTVRM66D763', 'B2', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:24:58'),
(48, 'RSDVNTVRM66D763', 'B1', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:25:10'),
(49, 'RSDVNTVRM66D763', 'A4', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:25:44'),
(50, 'RSDVNTVRM66D763', 'A3', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:25:44'),
(51, 'RSDVNTVRM66D763', 'A2', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:25:44'),
(52, 'RSDVNTVRM66D763', 'A1', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-18 18:25:44'),
(53, 'RSDVNTVRM66D763', 'A3', 'Alessio1991', '2018-12-18', '2018-12-18', '2018-12-18 18:28:36'),
(54, 'RSDVNTVRM66D763', 'A4', 'Alessio1991', '2018-12-18', '2018-12-18', '2018-12-18 18:28:36'),
(55, 'RSDVNTVRM66D763', 'A3', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-20 13:47:10'),
(56, 'RSDVNTVRM66D763', 'C4', 'Alessio1991', '2018-12-21', '2018-12-21', '2018-12-20 13:47:11'),
(57, 'RSDVNTVRM66D763', 'A4', 'Alessio1991', '2018-12-27', '2018-12-27', '2018-12-27 17:44:32'),
(58, 'RSDVNTVRM66D763', 'A3', 'Alessio1991', '2018-12-31', '2018-12-31', '2018-12-27 18:32:55'),
(59, 'RSDVNTVRM66D763', 'B3', 'Alessio1991', '2018-12-31', '2018-12-31', '2018-12-27 18:32:55'),
(60, 'BNCDRTC45G482', 'A1', 'Alessio91', '2018-12-31', '2018-12-31', '2018-12-31 16:14:05'),
(61, 'RRALNGMRMTTTT20G482', 'A1', 'Mimmo', '2018-12-31', '2018-12-31', '2018-12-31 16:14:58');

-- --------------------------------------------------------

--
-- Struttura della tabella `sessions`
--

CREATE TABLE `sessions` (
  `sessions_id` varchar(32) NOT NULL,
  `sessions_userid` varchar(10) NOT NULL,
  `sessions_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sessions`
--

INSERT INTO `sessions` (`sessions_id`, `sessions_userid`, `sessions_date`) VALUES
('8lgsv2v38jgumoj07hql4bb3mo', 'Alessio91', '1546272842'),
('8lgsv2v38jgumoj07hql4bb3mo', 'Mimmo', '1546272889');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `NomeUtente` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `is_Gestore` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`NomeUtente`, `Email`, `Password`, `is_Gestore`) VALUES
('Alessio91', 'alessio.susco91@gmail.com', 'alessio', 0),
('fggdgf', 'stefanomoren@gmail.com', '23456', 0),
('Freddie12345', 'gianni@gmail.com', 'Mercury12345', 0),
('Mimmo', 'mimmo@gmail.com', 'pazzo', 0),
('satch93', 'satch@gmail.com', 'satch', 0),
('sffsg', 'stefanomoren@gmail.com', 'dsrgddf', 0),
('ste95', 'a@gmail.com', 'dajefunonzia', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `copertina`
--
ALTER TABLE `copertina`
  ADD PRIMARY KEY (`idLido`);

--
-- Indici per le tabelle `lido`
--
ALTER TABLE `lido`
  ADD PRIMARY KEY (`IDLido`);

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
-- Indici per le tabelle `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sessions_userid`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`NomeUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prenotazione`
--
ALTER TABLE `prenotazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
