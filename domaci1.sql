-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `korisnickoIme` varchar(255) NOT NULL,
  `lozinka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `korisnickoIme`, `lozinka`) VALUES
(1, 'admin', 'admin'),
(3, 'radnik', 'radnik'),
(5, 'teodora', 'teodora');

-- --------------------------------------------------------

--
-- Table structure for table `projekcije`
--

CREATE TABLE `projekcije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `trajanje` int(11) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp(),
  `korisnikID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projekcije`
--

INSERT INTO `projekcije` (`id`, `naziv`, `sala`, `trajanje`, `datum`, `korisnikID`) VALUES
(1, 'KLIFORD VELIKI CRVENI PAS', 'sala 1', 97, '2022-02-10', 1),
(2, 'SPAJDERMEN: PUT BEZ POVRATKA', 'sala 2', 146, '2022-01-11', 3),
(6, 'SPAJDERMEN: PUT BEZ POVRATKA', 'sala 2', 146, '2022-02-20', 5),
(7, 'KLIFORD VELIKI CRVENI PAS', 'sala 1', 96, '2022-02-08', 3),
(8, 'SPAJDERMEN: PUT BEZ POVRATKA', 'sala 2', 146, '2022-02-15', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projekcije`
--
ALTER TABLE `projekcije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekcije_ibfk_1` (`korisnikID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projekcije`
--
ALTER TABLE `projekcije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projekcije`
--
ALTER TABLE `projekcije`
  ADD CONSTRAINT `projekcije_ibfk_1` FOREIGN KEY (`korisnikID`) REFERENCES `korisnik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
