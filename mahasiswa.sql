-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 04:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_client`
--

CREATE TABLE `mahasiswa_client` (
  `id` int(10) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomor` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_client`
--

INSERT INTO `mahasiswa_client` (`id`, `nim`, `nama`, `nomor`, `alamat`) VALUES
(2, '19SA3064', 'Fendi Elyon', 81666, 'Sumampir'),
(12, '19SA29101', 'Agung Prakoso', 1204112, 'Grendeng'),
(15, '19SA3456', 'Miuhammad Izam', 84545, 'Banyumas'),
(16, '20SA3456', 'Bambang', 85463, 'Slawi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_client`
--
ALTER TABLE `mahasiswa_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_UNIQUE` (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa_client`
--
ALTER TABLE `mahasiswa_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
