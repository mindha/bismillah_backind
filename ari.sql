-- MySQL dump 10.13  Distrib 5.7.16, for osx10.11 (x86_64)
--
-- Host: localhost    Database: backind
-- ------------------------------------------------------
-- Server version	5.7.16

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
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id_review` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `judul_review` varchar(50) DEFAULT NULL,
  `isi_review` varchar(1000) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (9,'ariapridana','tangkuban perahu wisata keren sekali','<p>jadi kemarin saya dan teman\" sedang bermain di suatu wisata</p>','Tangkuban perahu'),(10,'ariapridana','Bandung sangat bagus','kemarin blabalbalbalbal enak banget','asasas'),(11,'ariapridana','kejogja murah banget gannn','kemarin blabalbalbalbal enak banget','asasas'),(12,'ariapridana','ke lombok cuman 1jt perjalanan','kemarin blabalbalbalbal enak banget','lol'),(13,'ariapridana','Ke gunung bromo cuman 500 ribu gann','<p>jadi kemarin sama temen nih kesana dan ga ngeluarin duit banyak</p>','Gunung Bromo');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','admin','21232f297a57a5a743894a0e4a801fc3','admin@backind.com','1','08192019312'),(2,'Aril lol','ariapridana','21232f297a57a5a743894a0e4a801fc3','ari@backind.com','2','08192019312'),(3,'amrizal','aam','21232f297a57a5a743894a0e4a801fc3','aam@backind.com','2','08192019312'),(4,'mindha lol','mindha','21232f297a57a5a743894a0e4a801fc3','mindha@backind.com','2','08192019312');
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

-- Dump completed on 2017-05-07 19:39:54
