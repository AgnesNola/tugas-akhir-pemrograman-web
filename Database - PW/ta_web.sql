-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 06:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_perlombaan`
--

CREATE TABLE `detail_perlombaan` (
  `KD_PERLOMBAAN` varchar(9) NOT NULL,
  `KD_USER` varchar(9) NOT NULL,
  `RANK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_perlombaan`
--

CREATE TABLE `kategori_perlombaan` (
  `KD_KATEGORI` varchar(9) NOT NULL,
  `NAMA_KATEGORI` varchar(15) DEFAULT NULL,
  `LINGKUP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_perlombaan`
--

INSERT INTO `kategori_perlombaan` (`KD_KATEGORI`, `NAMA_KATEGORI`, `LINGKUP`) VALUES
('KAT001', 'Ikan Kecil', 1),
('KAT002', 'Ikan Sedang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `perlombaan`
--

CREATE TABLE `perlombaan` (
  `KD_PERLOMBAAN` varchar(9) NOT NULL,
  `KD_KATEGORI` varchar(9) NOT NULL,
  `NAMA_PERLOMBAAN` varchar(25) DEFAULT NULL,
  `TANGGAL_PERLOMBAAN` date DEFAULT NULL,
  `WAKTU_PERLOMBAAN` time DEFAULT NULL,
  `DESKRIPSI_PERLOMBAAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perlombaan`
--

INSERT INTO `perlombaan` (`KD_PERLOMBAAN`, `KD_KATEGORI`, `NAMA_PERLOMBAAN`, `TANGGAL_PERLOMBAAN`, `WAKTU_PERLOMBAAN`, `DESKRIPSI_PERLOMBAAN`) VALUES
('LOM201810', 'KAT001', 'yeah', '2018-01-01', '21:09:00', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `KD_USER` varchar(9) NOT NULL,
  `NAMA_USER` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `MEMBERSHIP` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT NULL,
  `STATUS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`KD_USER`, `NAMA_USER`, `PASSWORD`, `MEMBERSHIP`, `EMAIL`, `FOTO`, `STATUS`) VALUES
('user001', 'admin', '465b1f70b50166b6d05397fca8d600b0', 'admin', 'sasada', 'klhdfklsafk;as', 'banned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_perlombaan`
--
ALTER TABLE `detail_perlombaan`
  ADD PRIMARY KEY (`KD_PERLOMBAAN`,`KD_USER`),
  ADD KEY `FK_RELATIONSHIP_2` (`KD_USER`);

--
-- Indexes for table `kategori_perlombaan`
--
ALTER TABLE `kategori_perlombaan`
  ADD PRIMARY KEY (`KD_KATEGORI`);

--
-- Indexes for table `perlombaan`
--
ALTER TABLE `perlombaan`
  ADD PRIMARY KEY (`KD_PERLOMBAAN`),
  ADD KEY `FK_RELATIONSHIP_3` (`KD_KATEGORI`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`KD_USER`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_perlombaan`
--
ALTER TABLE `detail_perlombaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`KD_PERLOMBAAN`) REFERENCES `perlombaan` (`KD_PERLOMBAAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`);

--
-- Constraints for table `perlombaan`
--
ALTER TABLE `perlombaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`KD_KATEGORI`) REFERENCES `kategori_perlombaan` (`KD_KATEGORI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
