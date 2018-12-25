-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 17, 2018 alle 11:33
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
(41, 'RSDVNTVRM66D763', 'A3', 'Alessio', '2019-07-20', '2019-09-01', '2018-12-11 08:30:37');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `NomeUtente` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`NomeUtente`, `Email`, `Password`) VALUES
('Alessio91', 'alessio.susco91@gmail.com', 'alessio'),
('fggdgf', 'stefanomoren@gmail.com', '23456'),
('Mimmo', 'mimmo@gmail.com', 'mimmo'),
('satch93', 'satch@gmail.com', 'satch'),
('sffsg', 'stefanomoren@gmail.com', 'dsrgddf'),
('stefano', 'stefanomoren@gmail.com', 'stefano'),
('steff', 'stefanomoren@gmail.com', 'wewe');

--
-- Indici per le tabelle scaricate
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
