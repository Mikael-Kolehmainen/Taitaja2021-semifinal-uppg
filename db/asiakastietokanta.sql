-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:35 PM
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
-- Database: `asiakastietokanta`
--

-- --------------------------------------------------------

--
-- Table structure for table `asiakaat`
--

CREATE TABLE `asiakaat` (
  `id` int(11) NOT NULL,
  `etunimi` varchar(255) NOT NULL,
  `sukunimi` varchar(255) NOT NULL,
  `osoite` varchar(255) NOT NULL,
  `postinumero` varchar(255) NOT NULL,
  `puhelinnumero` varchar(255) NOT NULL,
  `eposti` varchar(255) NOT NULL,
  `salasana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asiakaat`
--

INSERT INTO `asiakaat` (`id`, `etunimi`, `sukunimi`, `osoite`, `postinumero`, `puhelinnumero`, `eposti`, `salasana`) VALUES
(1, 'Mikael', 'Kolehmainen', 'Koulukatu 57 61', '65100', '0409310570', 'mikaelkolehmainen05atgmailcom', '12345678'),
(2, 'Mikael', 'Kolehmainen', 'Koulukatu 57-61', '65100', '0409310570', 'mikaelkolehmainen05@gmail.com', '12345678'),
(3, '', '', '', '', '', '', ''),
(4, 'Mikael', 'Kolehmainen', 'Koulukatu 57-61', '65100', '0409310570', 'mikaelkolehmainen05@gmail.com', '12345678'),
(5, 'Mikael', 'Kolehmainen', 'Koulukatu 57-61', '65100', '0409310570', 'mikaelkolehmainen05@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asiakaat`
--
ALTER TABLE `asiakaat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asiakaat`
--
ALTER TABLE `asiakaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
