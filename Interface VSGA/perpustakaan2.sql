-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 08:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kodebk` int(11) NOT NULL,
  `judulbk` varchar(25) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodebk`, `judulbk`, `penulis`, `penerbit`) VALUES
(987104321, 'Romeo & Juliet', 'Shakespeare', 'PT. Unilever'),
(987654102, 'Burung Kakak Tua', 'Lewis Hamilton', 'CV. Surya Kencana'),
(987654321, 'SI Kancil Anak Nakal', 'John Lennon', 'CV. Suka Jaya'),
(987654987, 'Keberangkatan', 'NH Dini', 'PT. Buku Terindah');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `username`, `nama`, `prodi`, `password`) VALUES
('E4123', 'tia', 'Tia agustina', 'TIK', '$2y$10$DxyFPm2PwtmxTXnr0LZMDOO2qerXHYJYetSyRLmIbBelMzF0pQwaG'),
('E41231222', 'alif', 'Alif CD', 'TIF', '123'),
('E41231261', 'Alduy', 'Aldo Rayhan', 'TIK', '12345'),
('E412312751', 'Alduygag', 'Haikal aja', 'g', '$2y$10$bifp3aEb3D0UTCB7u4isvOvQI4asXvf8NFMEbXITDXk4kR4J5ufLq'),
('E412312754', 'Alduygag', 'Haikal aja', 'g', '$2y$10$JICaP4H6AbzFaWmHjCfFHO4oByxxjIVANELKq8BEDrxDRvl.xvNwe'),
('E42349322', 'Rayhan', 'Rayhan Gilang', 'TIK', '123'),
('E42349683', 'Haikal', 'Haikal Ramadhan', 'TIF', '412'),
('gawrr1', 'rayhan', 'gsdgsg', 'gsd', '$2y$10$WVNBLPViZyGdsuYevudf8.bNfEJ7g1kjsA84cm2w6QhegBvtCna8W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kodebk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
