-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detail_perlombaan`
--

DROP TABLE IF EXISTS `detail_perlombaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_perlombaan` (
  `KD_PERLOMBAAN` varchar(9) NOT NULL,
  `KD_USER` varchar(9) NOT NULL,
  `RANK` int(11) DEFAULT NULL,
  PRIMARY KEY (`KD_PERLOMBAAN`,`KD_USER`),
  KEY `FK_RELATIONSHIP_2` (`KD_USER`),
  CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`KD_PERLOMBAAN`) REFERENCES `perlombaan` (`KD_PERLOMBAAN`),
  CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`KD_USER`) REFERENCES `user` (`KD_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_perlombaan`
--

LOCK TABLES `detail_perlombaan` WRITE;
/*!40000 ALTER TABLE `detail_perlombaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_perlombaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_perlombaan`
--

DROP TABLE IF EXISTS `kategori_perlombaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_perlombaan` (
  `KD_KATEGORI` varchar(9) NOT NULL,
  `NAMA_KATEGORI` varchar(15) DEFAULT NULL,
  `LINGKUP` int(11) DEFAULT NULL,
  PRIMARY KEY (`KD_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_perlombaan`
--

LOCK TABLES `kategori_perlombaan` WRITE;
/*!40000 ALTER TABLE `kategori_perlombaan` DISABLE KEYS */;
INSERT INTO `kategori_perlombaan` VALUES ('KAT001','Ikan Kecil',1),('KAT002','Ikan Sedang',2);
/*!40000 ALTER TABLE `kategori_perlombaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perlombaan`
--

DROP TABLE IF EXISTS `perlombaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perlombaan` (
  `KD_PERLOMBAAN` varchar(9) NOT NULL,
  `KD_KATEGORI` varchar(9) NOT NULL,
  `NAMA_PERLOMBAAN` varchar(25) DEFAULT NULL,
  `TANGGAL_PERLOMBAAN` date DEFAULT NULL,
  `WAKTU_PERLOMBAAN` time DEFAULT NULL,
  `DESKRIPSI_PERLOMBAAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`KD_PERLOMBAAN`),
  KEY `FK_RELATIONSHIP_3` (`KD_KATEGORI`),
  CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`KD_KATEGORI`) REFERENCES `kategori_perlombaan` (`KD_KATEGORI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perlombaan`
--

LOCK TABLES `perlombaan` WRITE;
/*!40000 ALTER TABLE `perlombaan` DISABLE KEYS */;
INSERT INTO `perlombaan` VALUES ('LOM201810','KAT001','yeah','2018-01-01','21:09:00','j'),('LOM201811','KAT001','Lucu','2018-01-01','01:14:00','yeah');
/*!40000 ALTER TABLE `perlombaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `KD_USER` varchar(9) NOT NULL,
  `NAMA_USER` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `MEMBERSHIP` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `STATUS` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`KD_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('user001','admin','465b1f70b50166b6d05397fca8d600b0','admin','sasada','Terdaftar');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-17 17:42:22
