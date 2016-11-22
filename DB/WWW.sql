-- MySQL dump 10.13  Distrib 5.7.14, for osx10.11 (x86_64)
--
-- Host: localhost    Database: WWW
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `BOARD`
--

DROP TABLE IF EXISTS `BOARD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BOARD` (
  `Idx` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Regld` int(11) DEFAULT NULL,
  `Main` longtext,
  `RegDate` date DEFAULT NULL,
  `BoardNum` int(11) DEFAULT NULL,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BOARD`
--

LOCK TABLES `BOARD` WRITE;
/*!40000 ALTER TABLE `BOARD` DISABLE KEYS */;
/*!40000 ALTER TABLE `BOARD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMENT`
--

DROP TABLE IF EXISTS `COMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMENT` (
  `Idx` int(11) NOT NULL,
  `RegIdx` int(11) DEFAULT NULL,
  `Idxof` int(11) DEFAULT NULL,
  `Main` text,
  `RegDate` date DEFAULT NULL,
  `BoardNum` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMENT`
--

LOCK TABLES `COMENT` WRITE;
/*!40000 ALTER TABLE `COMENT` DISABLE KEYS */;
/*!40000 ALTER TABLE `COMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FILE`
--

DROP TABLE IF EXISTS `FILE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FILE` (
  `Idx` int(11) NOT NULL,
  `FileName` text,
  `Idxof` int(11) DEFAULT NULL,
  `FilePath` longtext,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FILE`
--

LOCK TABLES `FILE` WRITE;
/*!40000 ALTER TABLE `FILE` DISABLE KEYS */;
/*!40000 ALTER TABLE `FILE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GALLERY`
--

DROP TABLE IF EXISTS `GALLERY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GALLERY` (
  `Idx` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Main` longtext,
  `RegIdx` int(11) DEFAULT NULL,
  `RegDate` date DEFAULT NULL,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GALLERY`
--

LOCK TABLES `GALLERY` WRITE;
/*!40000 ALTER TABLE `GALLERY` DISABLE KEYS */;
/*!40000 ALTER TABLE `GALLERY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GALLERYIMG`
--

DROP TABLE IF EXISTS `GALLERYIMG`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GALLERYIMG` (
  `Idx` int(11) NOT NULL,
  `ImgName` text,
  `Idxof` int(11) DEFAULT NULL,
  `ImgPath` longtext,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GALLERYIMG`
--

LOCK TABLES `GALLERYIMG` WRITE;
/*!40000 ALTER TABLE `GALLERYIMG` DISABLE KEYS */;
/*!40000 ALTER TABLE `GALLERYIMG` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEMBER`
--

DROP TABLE IF EXISTS `MEMBER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEMBER` (
  `Idx` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `ID` varchar(45) DEFAULT NULL,
  `PWD` varchar(255) DEFAULT NULL,
  `Level` tinyint(1) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `PhoneNumber` varchar(13) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `Introduction` text,
  `RegDate` date DEFAULT NULL,
  PRIMARY KEY (`Idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEMBER`
--

LOCK TABLES `MEMBER` WRITE;
/*!40000 ALTER TABLE `MEMBER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MEMBER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-01 22:06:32
