-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 07:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rengastietokanta`
--

-- --------------------------------------------------------

--
-- Table structure for table `renkaat`
--

CREATE TABLE `renkaat` (
  `id` int(11) NOT NULL,
  `kuva` varchar(255) NOT NULL,
  `merkki` varchar(64) NOT NULL,
  `koko` varchar(12) NOT NULL,
  `hinta` float NOT NULL,
  `tyyppi` tinyint(1) NOT NULL COMMENT 'Kesa vai talvi renkaat.',
  `kappale` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renkaat`
--

INSERT INTO `renkaat` (`id`, `kuva`, `merkki`, `koko`, `hinta`, `tyyppi`, `kappale`) VALUES
(1, 'media/db-images/michelin_x_ice_north_4.jpeg', 'MICHELIN X-ICE NORTH 4', '215/50R18', 217.5, 1, 20),
(2, 'media/db-images/michelin_e_primacy.png', 'MICHELIN E PRIMACY', '235/60R17', 177.28, 0, 20),
(3, 'media/db-images/bfgoodrich_advantage.jpeg', 'BFGOODRICH ADVANTAGE', '185/55R14', 88.04, 0, 20),
(4, 'media/db-images/nokian_hakkapeliitta_9.png', 'NOKIAN Hakkapeliitta 9', '235/40R18', 246.64, 1, 20),
(5, 'media/db-images/continental_ecocontact_6.png', 'CONTINENTAL EcoContact 6', '155/80R13', 80.25, 0, 20),
(6, 'media/db-images/good_year_ultra_grip_ice_2.gif', 'GOODYEAR ULTRAGRIP ICE 2 MS', '195/65R15', 93.16, 0, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `renkaat`
--
ALTER TABLE `renkaat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `renkaat`
--
ALTER TABLE `renkaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
