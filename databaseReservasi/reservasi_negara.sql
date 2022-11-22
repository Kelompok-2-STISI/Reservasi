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
-- Table structure for table `negara`
--

DROP TABLE IF EXISTS `negara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `negara` (
  `id_country` int NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `code1` varchar(10) NOT NULL,
  `code2` varchar(10) NOT NULL,
  `flag` varchar(20) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negara`
--

LOCK TABLES `negara` WRITE;
/*!40000 ALTER TABLE `negara` DISABLE KEYS */;
INSERT INTO `negara` VALUES (1,'Aruba','ABW','AW','AW.png'),(2,'Afghanistan','AFG','AF','AF.png'),(3,'Angola','AGO','AO','AO.png'),(4,'Anguilla','AIA','AI','AI.png'),(5,'Åland','ALA','AX','AX.png'),(6,'Albania','ALB','AL','AL.png'),(7,'Andorra','AND','AD','AD.png'),(8,'United Arab Emirates','ARE','AE','AE.png'),(9,'Argentina','ARG','AR','AR.png'),(10,'Armenia','ARM','AM','AM.png'),(11,'American Samoa','ASM','AS','AS.png'),(12,'Antarctica','ATA','AQ','AQ.png'),(13,'French Southern Territories','ATF','TF','TF.png'),(14,'Antigua and Barbuda','ATG','AG','AG.png'),(15,'Australia','AUS','AU','AU.png'),(16,'Austria','AUT','AT','AT.png'),(17,'Azerbaijan','AZE','AZ','AZ.png'),(18,'Burundi','BDI','BI','BI.png'),(19,'Belgium','BEL','BE','BE.png'),(20,'Benin','BEN','BJ','BJ.png'),(21,'Bonaire','BES','BQ','BQ.png'),(22,'Burkina Faso','BFA','BF','BF.png'),(23,'Bangladesh','BGD','BD','BD.png'),(24,'Bulgaria','BGR','BG','BG.png'),(25,'Bahrain','BHR','BH','BH.png'),(26,'Bahamas','BHS','BS','BS.png'),(27,'Bosnia and Herzegovina','BIH','BA','BA.png'),(28,'Saint Barthélemy','BLM','BL','BL.png'),(29,'Belarus','BLR','BY','BY.png'),(30,'Belize','BLZ','BZ','BZ.png'),(31,'Bermuda','BMU','BM','BM.png'),(32,'Bolivia','BOL','BO','BO.png'),(33,'Brazil','BRA','BR','BR.png'),(34,'Barbados','BRB','BB','BB.png'),(35,'Brunei','BRN','BN','BN.png'),(36,'Bhutan','BTN','BT','BT.png'),(37,'Bouvet Island','BVT','BV','BV.png'),(38,'Botswana','BWA','BW','BW.png'),(39,'Central African Republic','CAF','CF','CF.png'),(40,'Canada','CAN','CA','CA.png'),(41,'Cocos [Keeling] Islands','CCK','CC','CC.png'),(42,'Switzerland','CHE','CH','CH.png'),(43,'Chile','CHL','CL','CL.png'),(44,'China','CHN','CN','CN.png'),(45,'Ivory Coast','CIV','CI','CI.png'),(46,'Cameroon','CMR','CM','CM.png'),(47,'Democratic Republic of the Congo','COD','CD','CD.png'),(48,'Republic of the Congo','COG','CG','CG.png'),(49,'Cook Islands','COK','CK','CK.png'),(50,'Colombia','COL','CO','CO.png'),(51,'Comoros','COM','KM','KM.png'),(52,'Cape Verde','CPV','CV','CV.png'),(53,'Costa Rica','CRI','CR','CR.png'),(54,'Cuba','CUB','CU','CU.png'),(55,'Curacao','CUW','CW','CW.png'),(56,'Christmas Island','CXR','CX','CX.png'),(57,'Cayman Islands','CYM','KY','KY.png'),(58,'Cyprus','CYP','CY','CY.png'),(59,'Czech Republic','CZE','CZ','CZ.png'),(60,'Germany','DEU','DE','DE.png'),(61,'Djibouti','DJI','DJ','DJ.png'),(62,'Dominica','DMA','DM','DM.png'),(63,'Denmark','DNK','DK','DK.png'),(64,'Dominican Republic','DOM','DO','DO.png'),(65,'Algeria','DZA','DZ','DZ.png'),(66,'Ecuador','ECU','EC','EC.png'),(67,'Egypt','EGY','EG','EG.png'),(68,'Eritrea','ERI','ER','ER.png'),(69,'Western Sahara','ESH','EH','EH.png'),(70,'Spain','ESP','ES','ES.png'),(71,'Estonia','EST','EE','EE.png'),(72,'Ethiopia','ETH','ET','ET.png'),(73,'Finland','FIN','FI','FI.png'),(74,'Fiji','FJI','FJ','FJ.png'),(75,'Falkland Islands','FLK','FK','FK.png'),(76,'France','FRA','FR','FR.png'),(77,'Faroe Islands','FRO','FO','FO.png'),(78,'Micronesia','FSM','FM','FM.png'),(79,'Gabon','GAB','GA','GA.png'),(80,'United Kingdom','GBR','GB','GB.png'),(81,'Georgia','GEO','GE','GE.png'),(82,'Guernsey','GGY','GG','GG.png'),(83,'Ghana','GHA','GH','GH.png'),(84,'Gibraltar','GIB','GI','GI.png'),(85,'Guinea','GIN','GN','GN.png'),(86,'Guadeloupe','GLP','GP','GP.png'),(87,'Gambia','GMB','GM','GM.png'),(88,'Guinea-Bissau','GNB','GW','GW.png'),(89,'Equatorial Guinea','GNQ','GQ','GQ.png'),(90,'Greece','GRC','GR','GR.png'),(91,'Grenada','GRD','GD','GD.png'),(92,'Greenland','GRL','GL','GL.png'),(93,'Guatemala','GTM','GT','GT.png'),(94,'French Guiana','GUF','GF','GF.png'),(95,'Guam','GUM','GU','GU.png'),(96,'Guyana','GUY','GY','GY.png'),(97,'Hong Kong','HKG','HK','HK.png'),(98,'Heard Island and McDonald Islands','HMD','HM','HM.png'),(99,'Honduras','HND','HN','HN.png'),(100,'Croatia','HRV','HR','HR.png'),(101,'Haiti','HTI','HT','HT.png'),(102,'Hungary','HUN','HU','HU.png'),(103,'Indonesia','IDN','ID','ID.png'),(104,'Isle of Man','IMN','IM','IM.png'),(105,'India','IND','IN','IN.png'),(106,'British Indian Ocean Territory','IOT','IO','IO.png'),(107,'Ireland','IRL','IE','IE.png'),(108,'Iran','IRN','IR','IR.png'),(109,'Iraq','IRQ','IQ','IQ.png'),(110,'Iceland','ISL','IS','IS.png'),(111,'Israel','ISR','IL','IL.png'),(112,'Italy','ITA','IT','IT.png'),(113,'Jamaica','JAM','JM','JM.png'),(114,'Jersey','JEY','JE','JE.png'),(115,'Jordan','JOR','JO','JO.png'),(116,'Japan','JPN','JP','JP.png'),(117,'Kazakhstan','KAZ','KZ','KZ.png'),(118,'Kenya','KEN','KE','KE.png'),(119,'Kyrgyzstan','KGZ','KG','KG.png'),(120,'Cambodia','KHM','KH','KH.png'),(121,'Kiribati','KIR','KI','KI.png'),(122,'Saint Kitts and Nevis','KNA','KN','KN.png'),(123,'South Korea','KOR','KR','KR.png'),(124,'Kuwait','KWT','KW','KW.png'),(125,'Laos','LAO','LA','LA.png'),(126,'Lebanon','LBN','LB','LB.png'),(127,'Liberia','LBR','LR','LR.png'),(128,'Libya','LBY','LY','LY.png'),(129,'Saint Lucia','LCA','LC','LC.png'),(130,'Liechtenstein','LIE','LI','LI.png'),(131,'Sri Lanka','LKA','LK','LK.png'),(132,'Lesotho','LSO','LS','LS.png'),(133,'Lithuania','LTU','LT','LT.png'),(134,'Luxembourg','LUX','LU','LU.png'),(135,'Latvia','LVA','LV','LV.png'),(136,'Macao','MAC','MO','MO.png'),(137,'Saint Martin','MAF','MF','MF.png'),(138,'Morocco','MAR','MA','MA.png'),(139,'Monaco','MCO','MC','MC.png'),(140,'Moldova','MDA','MD','MD.png'),(141,'Madagascar','MDG','MG','MG.png'),(142,'Maldives','MDV','MV','MV.png'),(143,'Mexico','MEX','MX','MX.png'),(144,'Marshall Islands','MHL','MH','MH.png'),(145,'Macedonia','MKD','MK','MK.png'),(146,'Mali','MLI','ML','ML.png'),(147,'Malta','MLT','MT','MT.png'),(148,'Myanmar [Burma]','MMR','MM','MM.png'),(149,'Montenegro','MNE','ME','ME.png'),(150,'Mongolia','MNG','MN','MN.png'),(151,'Northern Mariana Islands','MNP','MP','MP.png'),(152,'Mozambique','MOZ','MZ','MZ.png'),(153,'Mauritania','MRT','MR','MR.png'),(154,'Montserrat','MSR','MS','MS.png'),(155,'Martinique','MTQ','MQ','MQ.png'),(156,'Mauritius','MUS','MU','MU.png'),(157,'Malawi','MWI','MW','MW.png'),(158,'Malaysia','MYS','MY','MY.png'),(159,'Mayotte','MYT','YT','YT.png'),(160,'Namibia','NAM','NA','NA.png'),(161,'New Caledonia','NCL','NC','NC.png'),(162,'Niger','NER','NE','NE.png'),(163,'Norfolk Island','NFK','NF','NF.png'),(164,'Nigeria','NGA','NG','NG.png'),(165,'Nicaragua','NIC','NI','NI.png'),(166,'Niue','NIU','NU','NU.png'),(167,'Netherlands','NLD','NL','NL.png'),(168,'Norway','NOR','NO','NO.png'),(169,'Nepal','NPL','NP','NP.png'),(170,'Nauru','NRU','NR','NR.png'),(171,'New Zealand','NZL','NZ','NZ.png'),(172,'Oman','OMN','OM','OM.png'),(173,'Pakistan','PAK','PK','PK.png'),(174,'Panama','PAN','PA','PA.png'),(175,'Pitcairn Islands','PCN','PN','PN.png'),(176,'Peru','PER','PE','PE.png'),(177,'Philippines','PHL','PH','PH.png'),(178,'Palau','PLW','PW','PW.png'),(179,'Papua New Guinea','PNG','PG','PG.png'),(180,'Poland','POL','PL','PL.png'),(181,'Puerto Rico','PRI','PR','PR.png'),(182,'North Korea','PRK','KP','KP.png'),(183,'Portugal','PRT','PT','PT.png'),(184,'Paraguay','PRY','PY','PY.png'),(185,'Palestine','PSE','PS','PS.png'),(186,'French Polynesia','PYF','PF','PF.png'),(187,'Qatar','QAT','QA','QA.png'),(188,'Réunion','REU','RE','RE.png'),(189,'Romania','ROU','RO','RO.png'),(190,'Russia','RUS','RU','RU.png'),(191,'Rwanda','RWA','RW','RW.png'),(192,'Saudi Arabia','SAU','SA','SA.png'),(193,'Sudan','SDN','SD','SD.png'),(194,'Senegal','SEN','SN','SN.png'),(195,'Singapore','SGP','SG','SG.png'),(196,'South Georgia and the South Sandwich Islands','SGS','GS','GS.png'),(197,'Saint Helena','SHN','SH','SH.png'),(198,'Svalbard and Jan Mayen','SJM','SJ','SJ.png'),(199,'Solomon Islands','SLB','SB','SB.png'),(200,'Sierra Leone','SLE','SL','SL.png'),(201,'El Salvador','SLV','SV','SV.png'),(202,'San Marino','SMR','SM','SM.png'),(203,'Somalia','SOM','SO','SO.png'),(204,'Saint Pierre and Miquelon','SPM','PM','PM.png'),(205,'Serbia','SRB','RS','RS.png'),(206,'South Sudan','SSD','SS','SS.png'),(207,'São Tomé and Príncipe','STP','ST','ST.png'),(208,'Suriname','SUR','SR','SR.png'),(209,'Slovakia','SVK','SK','SK.png'),(210,'Slovenia','SVN','SI','SI.png'),(211,'Sweden','SWE','SE','SE.png'),(212,'Swaziland','SWZ','SZ','SZ.png'),(213,'Sint Maarten','SXM','SX','SX.png'),(214,'Seychelles','SYC','SC','SC.png'),(215,'Syria','SYR','SY','SY.png'),(216,'Turks and Caicos Islands','TCA','TC','TC.png'),(217,'Chad','TCD','TD','TD.png'),(218,'Togo','TGO','TG','TG.png'),(219,'Thailand','THA','TH','TH.png'),(220,'Tajikistan','TJK','TJ','TJ.png'),(221,'Tokelau','TKL','TK','TK.png'),(222,'Turkmenistan','TKM','TM','TM.png'),(223,'East Timor','TLS','TL','TL.png'),(224,'Tonga','TON','TO','TO.png'),(225,'Trinidad and Tobago','TTO','TT','TT.png'),(226,'Tunisia','TUN','TN','TN.png'),(227,'Turkey','TUR','TR','TR.png'),(228,'Tuvalu','TUV','TV','TV.png'),(229,'Taiwan','TWN','TW','TW.png'),(230,'Tanzania','TZA','TZ','TZ.png'),(231,'Uganda','UGA','UG','UG.png'),(232,'Ukraine','UKR','UA','UA.png'),(233,'U.S. Minor Outlying Islands','UMI','UM','UM.png'),(234,'Uruguay','URY','UY','UY.png'),(235,'United States','USA','US','US.png'),(236,'Uzbekistan','UZB','UZ','UZ.png'),(237,'Vatican City','VAT','VA','VA.png'),(238,'Saint Vincent and the Grenadines','VCT','VC','VC.png'),(239,'Venezuela','VEN','VE','VE.png'),(240,'British Virgin Islands','VGB','VG','VG.png'),(241,'U.S. Virgin Islands','VIR','VI','VI.png'),(242,'Vietnam','VNM','VN','VN.png'),(243,'Vanuatu','VUT','VU','VU.png'),(244,'Wallis and Futuna','WLF','WF','WF.png'),(245,'Samoa','WSM','WS','WS.png'),(246,'Kosovo','XKX','XK','XK.png'),(247,'Yemen','YEM','YE','YE.png'),(248,'South Africa','ZAF','ZA','ZA.png'),(249,'Zambia','ZMB','ZM','ZM.png'),(250,'Zimbabwe','ZWE','ZW','ZW.png');
/*!40000 ALTER TABLE `negara` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-21 16:24:30
