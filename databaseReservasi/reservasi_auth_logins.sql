-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: reservasi
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth_logins`
--

DROP TABLE IF EXISTS `auth_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_logins` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_logins`
--

LOCK TABLES `auth_logins` WRITE;
/*!40000 ALTER TABLE `auth_logins` DISABLE KEYS */;
INSERT INTO `auth_logins` VALUES (1,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 02:10:46',1),(2,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 02:13:19',1),(3,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 02:19:38',1),(4,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 02:37:31',1),(5,'::1','Setyawan69@gmail.com',8,'2022-12-07 03:17:45',1),(6,'::1','indra5656@gmail.com',9,'2022-12-07 03:26:27',1),(7,'::1','indra',NULL,'2022-12-07 03:34:59',0),(8,'::1','indra5656@gmail.com',9,'2022-12-07 03:35:13',1),(9,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 03:35:55',1),(10,'::1','indra5656@gmail.com',9,'2022-12-07 03:46:58',1),(11,'::1','indra5656@gmail.com',9,'2022-12-07 03:47:34',1),(12,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 03:58:52',1),(13,'::1','indra5656@gmail.com',9,'2022-12-07 04:39:01',1),(14,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 04:39:18',1),(15,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 15:36:43',1),(16,'::1','fadilrahman0320@gmail.com',7,'2022-12-07 19:07:30',1),(17,'::1','fadil',NULL,'2022-12-08 00:03:56',0),(18,'::1','fadill',NULL,'2022-12-08 00:04:19',0),(19,'::1','fadilrahman0320@gmail.com',7,'2022-12-08 00:05:01',1),(20,'::1','fadilrahman0320@gmail.com',7,'2022-12-09 19:35:27',1),(21,'::1','fadilrahman0320@gmail.com',7,'2022-12-10 23:16:42',1),(22,'::1','avif',NULL,'2022-12-10 23:17:16',0),(23,'::1','av',NULL,'2022-12-10 23:17:33',0),(24,'::1','avif',NULL,'2022-12-10 23:17:46',0),(25,'::1','indra5656@gmail.com',9,'2022-12-10 23:17:59',1),(26,'::1','fadil',NULL,'2022-12-11 21:48:38',0),(27,'::1','fadilrahman0320@gmail.com',7,'2022-12-11 21:48:51',1),(28,'::1','fadilrahman0320@gmail.com',7,'2022-12-12 15:24:51',1);
/*!40000 ALTER TABLE `auth_logins` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-12 17:49:10
