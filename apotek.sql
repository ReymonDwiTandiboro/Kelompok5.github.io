-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 11:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotek`
--

CREATE TABLE `apotek` (
  `okl` varchar(500) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `okl` varchar(500) NOT NULL,
  `asal` varchar(400) DEFAULT NULL,
  `nama` varchar(500) NOT NULL,
  `bidang` varchar(500) NOT NULL,
  `hari` varchar(500) NOT NULL,
  `jam` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`okl`, `asal`, `nama`, `bidang`, `hari`, `jam`) VALUES
('2761e7376dd68e8', 'kimia farma', 'dr. EDWELL SEMBIRING', '(Dokter Spesialis Kandungan & Kebidanan)', 'Hari Senin-sabtu (Hari Minggu/Besar Libur)', 'PRAKTEK : 18:00-Selesai'),
('6261e733e0cfd65', 'kimia farma', 'dr. EDWELL SEMBIRING', '(Dokter Spesialis Kandungan & Kebidanan)', 'Hari Senin-sabtu (Hari Minggu/Besar Libur)', 'PRAKTEK : 18:00-Selesai'),
('8461e7377ae9e98', 'kimia farma', 'dr. EDWELL SEMBIRING', '(Dokter Spesialis Kandungan & Kebidanan)', 'Hari Senin-sabtu (Hari Minggu/Besar Libur)', 'PRAKTEK : 18:00-Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `okl` varchar(500) NOT NULL,
  `obat` varchar(400) NOT NULL,
  `golongan` varchar(500) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `manfaat` varchar(500) NOT NULL,
  `digunakan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'REYMOND', 'ASU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`okl`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`okl`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`okl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
