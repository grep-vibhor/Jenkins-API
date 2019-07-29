-- MySQL dump 10.14  Distrib 5.5.60-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: portal
-- ------------------------------------------------------
-- Server version	5.5.60-MariaDB

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
-- Table structure for table `components`
--

DROP TABLE IF EXISTS `components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `components` (
  `component` varchar(50) DEFAULT NULL,
  `env` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `components`
--

LOCK TABLES `components` WRITE;
/*!40000 ALTER TABLE `components` DISABLE KEYS */;
INSERT INTO `components` VALUES ('192_168_112_108_instance-7_ysl','nextgen'),('192_168_112_137_instance-1_dapgatherer','nextgen'),('192_168_112_137_instance-1_dapgatherer_rollback','nextgen'),('192_168_112_73_instance-8_ysl','BCTS'),('192_168_113_84_instance-8_ysl','BCTS'),('192_168_114_56_instance-1_paymentengine','BCTS'),('192_168_112_254_instance-10_ysl','PSD2'),('192_168_112_254_instance-15_oauthclient','PSD2'),('192_168_112_254_instance-2_dc','PSD2'),('192_168_112_107_instance-7_dcservlets','wells_fargo-jboss10'),('192_168_112_107_instance-8_dc','wells_fargo-jboss10'),('192_168_114_85_instance-16_oauthclient','wells_fargo-jboss10'),('192_168_112_159_instance-6_ysl','PVT1'),('192_168_210_107_instance-10_dc','PVT1'),('192_168_210_107_instance-18_dcservlets','PVT1'),('192_168_112_159_instance-7_ysl','PVT2'),('192_168_114_85_instance-9_oauthclient','PVT2'),('192_168_211_127_instance-1_dapgatherer','PVT2'),('192_168_112_184_instance-14_ysl','PVT3'),('192_168_112_223_instance-10_dc','PVT3'),('192_168_112_223_instance-17_ycc','PVT3'),('192_168_113_228_instance-10_dc','PVT4'),('192_168_113_228_instance-14_ysl','PVT4'),('192_168_113_228_instance-15_alerts','PVT4');
/*!40000 ALTER TABLE `components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table1` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table1`
--

LOCK TABLES `table1` WRITE;
/*!40000 ALTER TABLE `table1` DISABLE KEYS */;
INSERT INTO `table1` VALUES (1,'test');
/*!40000 ALTER TABLE `table1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-26  7:50:10
