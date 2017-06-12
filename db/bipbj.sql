CREATE DATABASE  IF NOT EXISTS `bidpj` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bidpj`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: bidpj
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `bid_objects`
--

DROP TABLE IF EXISTS `bid_objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bid_objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `images_a` varchar(255) NOT NULL,
  `images_b` varchar(255) NOT NULL,
  `images_c` varchar(255) NOT NULL,
  `step_call` int(11) NOT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `origin` varchar(50) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `bid_objects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `bid_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bid_objects`
--

LOCK TABLES `bid_objects` WRITE;
/*!40000 ALTER TABLE `bid_objects` DISABLE KEYS */;
INSERT INTO `bid_objects` VALUES (1,1,'bid 1','test','abc','def','ghj',1,4,'1231','','2016-07-16 07:50:00','2017-06-08 07:50:00','2017-06-08 07:51:27','2017-06-08 07:51:27');
/*!40000 ALTER TABLE `bid_objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bid_sponsors`
--

DROP TABLE IF EXISTS `bid_sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bid_sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spon_name` varchar(255) NOT NULL,
  `details` text,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `spon_name` (`spon_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bid_sponsors`
--

LOCK TABLES `bid_sponsors` WRITE;
/*!40000 ALTER TABLE `bid_sponsors` DISABLE KEYS */;
/*!40000 ALTER TABLE `bid_sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bid_topics`
--

DROP TABLE IF EXISTS `bid_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bid_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `declares` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  KEY `obj_key` (`obj_id`),
  CONSTRAINT `bid_topics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `bid_users` (`id`),
  CONSTRAINT `bid_topics_ibfk_2` FOREIGN KEY (`obj_id`) REFERENCES `bid_objects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bid_topics`
--

LOCK TABLES `bid_topics` WRITE;
/*!40000 ALTER TABLE `bid_topics` DISABLE KEYS */;
/*!40000 ALTER TABLE `bid_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bid_users`
--

DROP TABLE IF EXISTS `bid_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bid_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` text NOT NULL,
  `districts` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rolls` tinyint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bid_users`
--

LOCK TABLES `bid_users` WRITE;
/*!40000 ALTER TABLE `bid_users` DISABLE KEYS */;
INSERT INTO `bid_users` VALUES (1,'test1@local.bid','admin',12345678,'dia chi','Hà Nội','c4ca4238a0b923820dcc509a6f75849b',1,'2017-06-06 05:03:53','2017-06-06 05:03:53'),(2,'test2@local.bid','user',12345678,'dia chi','Hà Nội','c4ca4238a0b923820dcc509a6f75849b',1,'2017-06-08 08:03:39','2017-06-08 08:03:39'),(3,'test3@local.bid','hoge',12345678,'dia chi','Hà Nội','c4ca4238a0b923820dcc509a6f75849b',1,'2017-06-06 05:03:53','2017-06-06 05:03:53'),(4,'test4@local.bid','yagi',12345678,'dia chi','Hà Nội','c4ca4238a0b923820dcc509a6f75849b',1,'2017-06-08 08:03:39','2017-06-08 08:03:39');
/*!40000 ALTER TABLE `bid_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-08 19:02:19
