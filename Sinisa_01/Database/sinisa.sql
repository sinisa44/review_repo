-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 08:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cegek`
--

CREATE TABLE `cegek` (
  `id` int(11) NOT NULL,
  `Datum_Cegregisztralas` datetime NOT NULL DEFAULT current_timestamp(),
  `Naziv_Firme` varchar(400) NOT NULL,
  `Opstina` varchar(400) NOT NULL,
  `mesto` varchar(200) NOT NULL,
  `Kategorija` varchar(100) NOT NULL,
  `Podkategorija` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(400) NOT NULL,
  `O_nama` varchar(400) NOT NULL,
  `Radno_Vreme` varchar(400) NOT NULL,
  `Galerija` varchar(400) NOT NULL,
  `Podaci_Firme` varchar(400) NOT NULL,
  `Gde_smo` varchar(400) NOT NULL,
  `Kontakt` varchar(400) NOT NULL,
  `Facebook` varchar(400) NOT NULL,
  `Web_Page` varchar(400) NOT NULL,
  `Google_Maps` varchar(400) NOT NULL,
  `Prosireni_Podaci` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cegek`
--

INSERT INTO `cegek` (`id`, `Datum_Cegregisztralas`, `Naziv_Firme`, `Opstina`, `mesto`, `Kategorija`, `Podkategorija`, `image`, `image2`, `O_nama`, `Radno_Vreme`, `Galerija`, `Podaci_Firme`, `Gde_smo`, `Kontakt`, `Facebook`, `Web_Page`, `Google_Maps`, `Prosireni_Podaci`) VALUES
(3, '2020-08-10 20:06:05', 'Test', 'Becej', 'Becej', '2', '3', 'Beuro 01.jpg', 'Beuro 02.jpg', '', '', '', '', '', '', '', '', '', 'NE');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`cid`, `cname`) VALUES
(2, ' Auto-moto'),
(3, ' Deca i bebe'),
(4, ' Edukacija'),
(5, 'Finansije'),
(6, 'Finansijske i pravne usluge'),
(7, ' Hrana i ugostiteljstvo'),
(8, ' Kucni ljubimci'),
(9, ' Mediji i marketing'),
(10, ' Smestaj i turizam'),
(11, ' Sport'),
(12, ' Tehnika'),
(13, ' Transport'),
(14, ' Trgovina'),
(15, ' Usluge'),
(16, ' Zanatske radnje'),
(17, ' Zdravstvo');

-- --------------------------------------------------------

--
-- Table structure for table `mesto`
--

CREATE TABLE `mesto` (
  `mesto_id` int(11) NOT NULL,
  `mesto` varchar(400) CHARACTER SET utf8mb4 NOT NULL,
  `opstina_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mesto`
--

INSERT INTO `mesto` (`mesto_id`, `mesto`, `opstina_id`) VALUES
(1, 'Bečej', 1),
(2, 'Bačko Petrovo Selo', 1),
(3, 'Bačko Gradiste', 1),
(4, 'Bačka Topola', 2),
(5, 'Gunaras', 2),
(6, 'Mali Iđos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `opstina`
--

CREATE TABLE `opstina` (
  `opstina_id` int(11) NOT NULL,
  `opstina` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `opstina`
--

INSERT INTO `opstina` (`opstina_id`, `opstina`) VALUES
(1, 'Bečej\r\n'),
(2, 'Bačka Topola\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `podkategorija`
--

CREATE TABLE `podkategorija` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podkategorija`
--

INSERT INTO `podkategorija` (`sid`, `sname`, `country`) VALUES
(2, 'Auto-mehanicari', 2),
(3, 'Auto-elektricari', 2),
(4, 'Auto perionice', 2),
(5, 'Vulkanizeri', 2),
(6, 'Registracija vozila i tehnicki pregled', 2),
(7, 'Auto skole', 2),
(8, 'Benzinske pumpe', 2),
(9, 'slep sluzba', 2),
(10, 'Deciji butici', 3),
(11, 'Kursevi, skole i radionice', 4),
(12, 'Menjacnice', 5),
(13, 'Zalgaonice', 5),
(14, 'Knjigovodstvene agencije', 6),
(15, 'Krediti', 6),
(16, 'Platni promet', 6),
(17, 'Zaposljavanje i consulting', 6),
(18, 'Gradevina', 6),
(19, 'Stovarista', 6),
(20, 'Brza hrana', 7),
(21, 'Pekare', 7),
(22, 'Mesare', 7),
(23, 'Mlekare', 7),
(24, 'Kafici', 7),
(25, 'Picerije', 7),
(26, 'Poslasticarnice', 7),
(27, 'Restorani', 7),
(28, 'Svecane sale', 7),
(29, 'Veterinari', 8),
(30, 'Nega kucnih ljubimaca', 8),
(31, 'Marketing agencije', 9),
(32, 'Moteli', 10),
(33, 'Turisticke agencije', 10),
(34, 'Teretane', 11),
(35, 'Bela tehnika', 12),
(36, 'TV i audio', 12),
(37, 'Elektro i rucni alat', 12),
(38, 'Prevoz putnika i robe', 13),
(39, 'Cvecare', 14),
(40, 'Podrumi pica', 14),
(41, 'Trafike', 14),
(42, 'Elektromaterijal', 14),
(43, 'Farbare', 14),
(44, 'Marketi', 14),
(45, 'Prodavnice obuce', 14),
(46, 'Prodavnice tekstila', 14),
(47, 'Butici', 14),
(48, 'Second hand', 14),
(49, 'Rasveta, tepisi', 14),
(50, 'Poljoprivreda i stocarstvo', 14),
(51, 'Saloni namestaja', 14),
(52, 'Nekretnine', 14),
(53, 'Gvozdare', 14),
(54, 'Elektricari', 15),
(55, 'Servis racunara', 15),
(56, 'Servis mobilnih telefona', 15),
(57, 'Tepih servisi', 15),
(58, 'Fizicko-tehnicka zastita (FTO)', 15),
(59, 'Teska industrija', 15),
(60, 'Obucarske radnje', 16),
(61, 'Stolarija', 16),
(62, 'Grejanje i oprema', 16),
(63, 'Pedijatrijske ordinacije', 17),
(64, 'Poliklinike', 17),
(65, 'Oftalmoloske ordinacije', 17),
(66, 'Ginekoloske ordinacije', 17),
(67, 'Opticarske radnje', 17),
(68, 'Stomatoloske ordinacije', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cegek`
--
ALTER TABLE `cegek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mesto`
--
ALTER TABLE `mesto`
  ADD PRIMARY KEY (`mesto_id`);

--
-- Indexes for table `opstina`
--
ALTER TABLE `opstina`
  ADD PRIMARY KEY (`opstina_id`);

--
-- Indexes for table `podkategorija`
--
ALTER TABLE `podkategorija`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cegek`
--
ALTER TABLE `cegek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mesto`
--
ALTER TABLE `mesto`
  MODIFY `mesto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opstina`
--
ALTER TABLE `opstina`
  MODIFY `opstina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `podkategorija`
--
ALTER TABLE `podkategorija`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
