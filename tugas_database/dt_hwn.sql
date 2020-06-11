-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 03:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hewan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_hwn`
--

CREATE TABLE `dt_hwn` (
  `Id` int(5) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Ordo` varchar(50) NOT NULL,
  `Makanan` varchar(50) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_hwn`
--

INSERT INTO `dt_hwn` (`Id`, `Nama`, `Kelas`, `Ordo`, `Makanan`, `Gambar`) VALUES
(1, 'Katak', 'Amphibia', 'Anura', 'Serangga', 'katak.jpg'),
(2, 'Hiu', 'Chondrichthyes', 'Selachimorpha', 'Ikan dan Cumi-Cumi', 'hiu.jpg'),
(3, 'Gajah', 'Mamalia', 'Proboscidea', 'Tumbuhan dan Buah', 'gajah.jpg'),
(4, 'Perkutut', 'Aves', 'Columbiformes', 'Biji - Bijian', 'perkutut.jpg'),
(5, 'Kalajengking', 'Arachnida', 'Scorpiones', 'Serangga Kecil', 'kalajengking.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_hwn`
--
ALTER TABLE `dt_hwn`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_hwn`
--
ALTER TABLE `dt_hwn`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
