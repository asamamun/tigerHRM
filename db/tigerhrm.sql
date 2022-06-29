-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tigerhrm
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `userpass` varchar(40) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `plantid` int(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createdate` date NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'mangoit','aa75520f89ca1de156d9d0c63b8c9e5d4c22116f','1',1,1,'2016-04-28',0),(2,'mangotex','9f451970733ec7381a7a2c7171c299505a010e93','1',2,1,'2016-04-28',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companysetup`
--

DROP TABLE IF EXISTS `companysetup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companysetup` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `companyaddress1` text NOT NULL,
  `companyaddress2` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) NOT NULL,
  `tradeli` varchar(40) NOT NULL,
  `ownername` varchar(40) NOT NULL,
  `tin` varchar(40) NOT NULL,
  `establishmentdate` date NOT NULL,
  `alias` varchar(20) NOT NULL,
  `companytype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companyname` (`companyname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companysetup`
--

LOCK TABLES `companysetup` WRITE;
/*!40000 ALTER TABLE `companysetup` DISABLE KEYS */;
INSERT INTO `companysetup` VALUES (1,'GNSL','description','Dhaka','Dhaka','01911039525','8802-123456','asamamun.web@gmail.com','http://isdbstudents.com','43545dfsdgf','Mr Tiger 213','234354554','2000-01-02','Tiger','GNSL49');
/*!40000 ALTER TABLE `companysetup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `countryid` int(3) NOT NULL AUTO_INCREMENT,
  `countryname` varchar(40) NOT NULL,
  `countrycode` varchar(5) NOT NULL,
  PRIMARY KEY (`countryid`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'Afghanistan','AF'),(2,'Åland Islands','AX'),(3,'Albania','AL'),(4,'Algeria','DZ'),(5,'American Samoa','AS'),(6,'Andorra','AD'),(7,'Angola','AO'),(8,'Anguilla','AI'),(9,'Antarctica','AQ'),(10,'Antigua and Barbuda','AG'),(11,'Argentina','AR'),(12,'Armenia','AM'),(13,'Aruba','AW'),(14,'Australia','AU'),(15,'Austria','AT'),(16,'Azerbaijan','AZ'),(17,'Bahamas','BS'),(18,'Bahrain','BH'),(19,'Bangladesh','BD'),(20,'Barbados','BB'),(21,'Belarus','BY'),(22,'Belgium','BE'),(23,'Belize','BZ'),(24,'Benin','BJ'),(25,'Bermuda','BM'),(26,'Bhutan','BT'),(27,'Bolivia (Plurinational State of)','BO'),(28,'Bonaire, Sint Eustatius and Saba','BQ'),(29,'Bosnia and Herzegovina','BA'),(30,'Botswana','BW'),(31,'Bouvet Island','BV'),(32,'Brazil','BR'),(33,'British Indian Ocean Territory','IO'),(34,'Brunei Darussalam','BN'),(35,'Bulgaria','BG'),(36,'Burkina Faso','BF'),(37,'Burundi','BI'),(38,'Cabo Verde','CV'),(39,'Cambodia','KH'),(40,'Cameroon','CM'),(41,'Canada','CA'),(42,'Cayman Islands','KY'),(43,'Central African Republic','CF'),(44,'Chad','TD'),(45,'Chile','CL'),(46,'China','CN'),(47,'Christmas Island','CX'),(48,'Cocos (Keeling) Islands','CC'),(49,'Colombia','CO'),(50,'Comoros','KM'),(51,'Congo','CG'),(52,'Congo (Democratic Republic of the)','CD'),(53,'Cook Islands','CK'),(54,'Costa Rica','CR'),(55,'Côte d\'Ivoire','CI'),(56,'Croatia','HR'),(57,'Cuba','CU'),(58,'Curaçao','CW'),(59,'Cyprus','CY'),(60,'Czech Republic','CZ'),(61,'Denmark','DK'),(62,'Djibouti','DJ'),(63,'Dominica','DM'),(64,'Dominican Republic','DO'),(65,'Ecuador','EC'),(66,'Egypt','EG'),(67,'El Salvador','SV'),(68,'Equatorial Guinea','GQ'),(69,'Eritrea','ER'),(70,'Estonia','EE'),(71,'Ethiopia','ET'),(72,'Falkland Islands (Malvinas)','FK'),(73,'Faroe Islands','FO'),(74,'Fiji','FJ'),(75,'Finland','FI'),(76,'France','FR'),(77,'French Guiana','GF'),(78,'French Polynesia','PF'),(79,'French Southern Territories','TF'),(80,'Gabon','GA'),(81,'Gambia','GM'),(82,'Georgia','GE'),(83,'Germany','DE'),(84,'Ghana','GH'),(85,'Gibraltar','GI'),(86,'Greece','GR'),(87,'Greenland','GL'),(88,'Grenada','GD'),(89,'Guadeloupe','GP'),(90,'Guam','GU'),(91,'Guatemala','GT'),(92,'Guernsey','GG'),(93,'Guinea','GN'),(94,'Guinea-Bissau','GW'),(95,'Guyana','GY'),(96,'Haiti','HT'),(97,'Heard Island and McDonald Islands','HM'),(98,'Holy See','VA'),(99,'Honduras','HN'),(100,'Hong Kong','HK'),(101,'Hungary','HU'),(102,'Iceland','IS'),(103,'India','IN'),(104,'Indonesia','ID'),(105,'Iran (Islamic Republic of)','IR'),(106,'Iraq','IQ'),(107,'Ireland','IE'),(108,'Isle of Man','IM'),(109,'Israel','IL'),(110,'Italy','IT'),(111,'Jamaica','JM'),(112,'Japan','JP'),(113,'Jersey','JE'),(114,'Jordan','JO'),(115,'Kazakhstan','KZ'),(116,'Kenya','KE'),(117,'Kiribati','KI'),(118,'Korea (Democratic People\'s Republic of)','KP'),(119,'Korea (Republic of)','KR'),(120,'Kuwait','KW'),(121,'Kyrgyzstan','KG'),(122,'Lao People\'s Democratic Republic','LA'),(123,'Latvia','LV'),(124,'Lebanon','LB'),(125,'Lesotho','LS'),(126,'Liberia','LR'),(127,'Libya','LY'),(128,'Liechtenstein','LI'),(129,'Lithuania','LT'),(130,'Luxembourg','LU'),(131,'Macao','MO'),(132,'Macedonia (the former Yugoslav Republic ','MK'),(133,'Madagascar','MG'),(134,'Malawi','MW'),(135,'Malaysia','MY'),(136,'Maldives','MV'),(137,'Mali','ML'),(138,'Malta','MT'),(139,'Marshall Islands','MH'),(140,'Martinique','MQ'),(141,'Mauritania','MR'),(142,'Mauritius','MU'),(143,'Mayotte','YT'),(144,'Mexico','MX'),(145,'Micronesia (Federated States of)','FM'),(146,'Moldova (Republic of)','MD'),(147,'Monaco','MC'),(148,'Mongolia','MN'),(149,'Montenegro','ME'),(150,'Montserrat','MS'),(151,'Morocco','MA'),(152,'Mozambique','MZ'),(153,'Myanmar','MM'),(154,'Namibia','NA'),(155,'Nauru','NR'),(156,'Nepal','NP'),(157,'Netherlands','NL'),(158,'New Caledonia','NC'),(159,'New Zealand','NZ'),(160,'Nicaragua','NI'),(161,'Niger','NE'),(162,'Nigeria','NG'),(163,'Niue','NU'),(164,'Norfolk Island','NF'),(165,'Northern Mariana Islands','MP'),(166,'Norway','NO'),(167,'Oman','OM'),(168,'Pakistan','PK'),(169,'Palau','PW'),(170,'Palestine, State of','PS'),(171,'Panama','PA'),(172,'Papua New Guinea','PG'),(173,'Paraguay','PY'),(174,'Peru','PE'),(175,'Philippines','PH'),(176,'Pitcairn','PN'),(177,'Poland','PL'),(178,'Portugal','PT'),(179,'Puerto Rico','PR'),(180,'Qatar','QA'),(181,'Réunion','RE'),(182,'Romania','RO'),(183,'Russian Federation','RU'),(184,'Rwanda','RW'),(185,'Saint Barthélemy','BL'),(186,'Saint Helena, Ascension and Tristan da C','GH'),(187,'Saint Kitts and Nevis','KN'),(188,'Saint Lucia','LC'),(189,'Saint Martin (French part)','MF'),(190,'Saint Pierre and Miquelon','PM'),(191,'Saint Vincent and the Grenadines','VC'),(192,'Samoa','WS'),(193,'San Marino','SM'),(194,'Sao Tome and Principe','ST'),(195,'Saudi Arabia','SA'),(196,'Senegal','SN'),(197,'Serbia','RS'),(198,'Seychelles','SC'),(199,'Sierra Leone','SL'),(200,'Singapore','SG'),(201,'Sint Maarten (Dutch part)','SX'),(202,'Slovakia','SK'),(203,'Slovenia','SI'),(204,'Solomon Islands','SB'),(205,'Somalia','SO'),(206,'South Africa','ZA'),(207,'South Georgia and the South Sandwich Isl','GS'),(208,'South Sudan','SS'),(209,'Spain','ES'),(210,'Sri Lanka','LK'),(211,'Sudan','SD'),(212,'Suriname','SR'),(213,'Svalbard and Jan Mayen','SJ'),(214,'Swaziland','SZ'),(215,'Sweden','SE'),(216,'Switzerland','CH'),(217,'Syrian Arab Republic','SY'),(218,'Taiwan, Province of China[a]','TW'),(219,'Tajikistan','TJ'),(220,'Tanzania, United Republic of','TZ'),(221,'Thailand','TH'),(222,'Timor-Leste','TL'),(223,'Togo','TG'),(224,'Tokelau','TK'),(225,'Tonga','TO'),(226,'Trinidad and Tobago','TT'),(227,'Tunisia','TN'),(228,'Turkey','TR'),(229,'Turkmenistan','TM'),(230,'Turks and Caicos Islands','TC'),(231,'Tuvalu','TV'),(232,'Uganda','UG'),(233,'Ukraine','UA'),(234,'United Arab Emirates','AE'),(235,'United Kingdom of Great Britain and Nort','GB'),(236,'United States of America','US'),(237,'United States Minor Outlying Islands','UM'),(238,'Uruguay','UY'),(239,'Uzbekistan','UZ'),(240,'Vanuatu','VU'),(241,'Venezuela (Bolivarian Republic of)','VE'),(242,'Viet Nam','VN'),(243,'Virgin Islands (British)','VG'),(244,'Virgin Islands (U.S.)','VI'),(245,'Wallis and Futuna','WF'),(246,'Western Sahara','EH'),(247,'Yemen','YE'),(248,'Zambia','ZM'),(249,'Zimbabwe','ZW');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(512) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Manegment','','12345','Maneg@gmail.com','2022-06-25 17:53:15','2022-06-25 17:53:15'),(2,'Admin','','01245789','admin@gmil.com','2022-06-25 17:58:42','2022-06-25 17:58:42'),(3,'Web','','012345678','default@gmail.com','2022-06-26 09:58:12','2022-06-26 09:58:12');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `desigdesc` text NOT NULL,
  `grade` varchar(15) NOT NULL,
  `createdate` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES (1,'Driver','company driver >10 years','9','0000-00-00',0),(2,'CEO','Chief Technical Officer 1','1','0000-00-00',0),(3,'Lead Engineer','Lead Engineer','5','0000-00-00',0),(4,'Network Engineer','Network Engineer','5','2016-05-19',0),(5,'Web Programmer','Web Programmer','2','2016-05-19',0),(6,'System Analyst','System Analyst','3','2016-05-19',0),(7,'Production Officer','Production Officer','5','2016-05-19',0),(8,'Company Assistant','Company Assistant','9','2016-05-19',0),(9,'Manager','manager','3','2016-05-19',0);
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_address`
--

DROP TABLE IF EXISTS `emp_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_address` (
  `id` int(5) NOT NULL COMMENT 'fkey of employee',
  `p_address1` varchar(80) NOT NULL,
  `p_address2` varchar(80) NOT NULL,
  `p_village` varchar(40) NOT NULL,
  `p_post_name` varchar(20) NOT NULL,
  `p_post_code` varchar(10) NOT NULL,
  `p_upazila` varchar(20) NOT NULL,
  `p_dist` varchar(20) NOT NULL,
  `p_country` varchar(20) NOT NULL,
  `sameornot` enum('yes','no') NOT NULL,
  `c_address1` varchar(80) NOT NULL,
  `c_address2` varchar(80) NOT NULL,
  `c_village` varchar(40) NOT NULL,
  `c_post_name` varchar(20) NOT NULL,
  `c_post_code` varchar(10) NOT NULL,
  `c_upazila` varchar(20) NOT NULL,
  `c_dist` varchar(20) NOT NULL,
  `c_country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_address`
--

LOCK TABLES `emp_address` WRITE;
/*!40000 ALTER TABLE `emp_address` DISABLE KEYS */;
INSERT INTO `emp_address` VALUES (2,'Dhanmondi','Dhanmondi','Dhanmondi','Dhanmondi','1221','Dhanmondi','Dhaka','BD','no','Mirpur','Golchokkor','Mirpur','Mirpur','1216','Mirpur','Dhaka','BD'),(1,'Dsaf','Sadf','Sdaf','Sadf','1216','Sadf','Sadf','BD','yes','Dsaf','Sadf','Sdaf','Sadf','1216','Sadf','Sadf','BD');
/*!40000 ALTER TABLE `emp_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_attachment`
--

DROP TABLE IF EXISTS `emp_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_attachment` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `eid` int(5) unsigned zerofill NOT NULL,
  `title` varchar(40) NOT NULL COMMENT 'employee section id',
  `filename` varchar(80) NOT NULL,
  `filedesc` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_attachment`
--

LOCK TABLES `emp_attachment` WRITE;
/*!40000 ALTER TABLE `emp_attachment` DISABLE KEYS */;
INSERT INTO `emp_attachment` VALUES (30,00002,'dsf','1466402189600.jpg','sdfsdf','2016-06-20 11:56:29'),(31,00002,'fdsf','1466402218163.mp4','sdfsdf','2016-06-20 11:56:58'),(32,00002,'c','1466402241583.jpg','fsdf','2016-06-20 11:57:21'),(33,00002,'df','1466402858923.jpg','dsfdsf','2016-06-20 12:07:38'),(34,00002,'dfg','1466402982274.jpg','dfg','2016-06-20 12:09:42'),(35,00002,'sdf','1466403005772.jpg','sdf','2016-06-20 12:10:05'),(36,00002,'sdf','1466403134565.jpg','sdf','2016-06-20 12:12:14'),(37,00002,'dsf','1466403312501.jpg','sdf','2016-06-20 12:15:12'),(38,00002,'sdf','1466403404203.jpg','sdf','2016-06-20 12:16:44');
/*!40000 ALTER TABLE `emp_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_attendance`
--

DROP TABLE IF EXISTS `emp_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_attendance` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `companyid` int(3) NOT NULL,
  `plantid` int(3) NOT NULL,
  `eid` int(5) NOT NULL,
  `a_year` int(4) NOT NULL,
  `a_month` int(2) NOT NULL,
  `a_day` int(2) NOT NULL,
  `a_hour` int(2) NOT NULL,
  `a_min` int(2) NOT NULL,
  `a_sec` int(2) NOT NULL,
  `shiftid` int(3) NOT NULL,
  `status` enum('p','a','l','ol','q') NOT NULL COMMENT 'late=l, onleave=lv,q=make query',
  `in_out` enum('in','out') NOT NULL,
  `comment` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `day_wise_emp_attendance_status` (`companyid`,`plantid`,`eid`,`a_year`,`a_month`,`a_day`,`shiftid`,`in_out`),
  KEY `empid` (`eid`,`shiftid`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_attendance`
--

LOCK TABLES `emp_attendance` WRITE;
/*!40000 ALTER TABLE `emp_attendance` DISABLE KEYS */;
INSERT INTO `emp_attendance` VALUES (220,1,1,1,2016,1,1,6,0,0,2,'p','in','NA','2016-07-27 01:57:04'),(221,1,1,2,2016,1,1,5,36,40,2,'q','in','NA','2016-07-27 01:57:04'),(222,1,1,3,2016,1,1,5,58,20,2,'p','in','NA','2016-07-27 01:57:04'),(223,1,1,4,2016,1,1,5,56,40,2,'p','in','NA','2016-07-27 01:57:04'),(224,1,1,5,2016,1,1,6,0,0,2,'p','in','NA','2016-07-27 01:56:44'),(225,1,1,4,2016,1,1,14,0,50,2,'p','out','NA','2016-07-27 01:57:04'),(226,1,1,8,2016,1,1,14,1,20,2,'p','out','NA','2016-07-27 01:57:04'),(227,1,1,6,2016,1,1,6,0,0,2,'p','in','NA','2016-07-27 03:24:35'),(228,1,1,8,2016,1,1,6,0,0,2,'p','in','NA','2016-07-27 03:24:36'),(229,1,1,1,2016,1,1,14,0,30,2,'p','out','NA','2016-07-27 01:57:04'),(230,1,1,2,2016,1,1,14,0,40,2,'p','out','NA','2016-07-27 01:57:04'),(231,1,1,3,2016,1,1,14,0,40,2,'p','out','NA','2016-07-27 01:57:04');
/*!40000 ALTER TABLE `emp_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_attendance_archive`
--

DROP TABLE IF EXISTS `emp_attendance_archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_attendance_archive` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `companyid` int(3) NOT NULL,
  `plantid` int(3) NOT NULL,
  `eid` int(5) NOT NULL,
  `a_year` int(4) NOT NULL,
  `a_month` int(2) NOT NULL,
  `a_day` int(2) NOT NULL,
  `a_hour` int(2) NOT NULL,
  `a_min` int(2) NOT NULL,
  `a_sec` int(2) NOT NULL,
  `shiftid` int(3) NOT NULL,
  `status` enum('p','a','l','ol','q') NOT NULL COMMENT 'late=l, onleave=lv,q=make query',
  `in_out` enum('in','out') NOT NULL,
  `comment` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `day_wise_emp_attendance_status` (`eid`,`a_year`,`a_month`,`a_day`,`shiftid`,`in_out`),
  KEY `empid` (`eid`,`shiftid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_attendance_archive`
--

LOCK TABLES `emp_attendance_archive` WRITE;
/*!40000 ALTER TABLE `emp_attendance_archive` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_attendance_archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_education`
--

DROP TABLE IF EXISTS `emp_education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_education` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `eid` int(5) NOT NULL COMMENT 'foreign key of employee(id)',
  `level` varchar(20) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `board` varchar(20) NOT NULL,
  `major` varchar(40) NOT NULL,
  `year` year(4) NOT NULL,
  `score` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_eid_level` (`eid`,`level`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='unique(empid,level)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_education`
--

LOCK TABLES `emp_education` WRITE;
/*!40000 ALTER TABLE `emp_education` DISABLE KEYS */;
INSERT INTO `emp_education` VALUES (1,2,'SSC','Mirpur ABC School','Dhaka','Science',2006,'5','2003-01-01','2004-12-31','2022-06-28 16:07:05'),(2,2,'HSC','Mirpur ABC School','Dhaka','Science',2008,'5','2006-01-01','2007-12-31','2022-06-28 16:07:05');
/*!40000 ALTER TABLE `emp_education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_experience`
--

DROP TABLE IF EXISTS `emp_experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_experience` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `eid` int(5) NOT NULL COMMENT 'fkey of employee(id)',
  `company` varchar(40) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `exp_from` date NOT NULL,
  `exp_to` date NOT NULL,
  `comment` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_experience`
--

LOCK TABLES `emp_experience` WRITE;
/*!40000 ALTER TABLE `emp_experience` DISABLE KEYS */;
INSERT INTO `emp_experience` VALUES (9,7,'777','sdfg','2016-05-03','2016-05-12','sdfg','2016-05-16 16:53:52'),(10,7,'e','eee','2016-05-04','2016-05-12','eee','2016-05-16 16:55:43'),(11,2,'pran ltd','Web Programmer','2015-01-01','2015-12-31','programmer','2016-05-16 18:14:07'),(12,2,'Genuity','Designer','2016-01-01','2016-05-16','cont','2016-05-16 18:14:40'),(13,1,'dsfdsf','dsfsdf','2016-08-03','2016-08-27','sdfdsf','2016-08-28 22:52:40');
/*!40000 ALTER TABLE `emp_experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_grade`
--

DROP TABLE IF EXISTS `emp_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_grade` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `gradeid` int(3) NOT NULL,
  `gradename` varchar(20) NOT NULL,
  `basic` double(10,2) NOT NULL,
  `houserent` double(10,2) NOT NULL,
  `medical` double(10,2) NOT NULL,
  `other` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_grade`
--

LOCK TABLES `emp_grade` WRITE;
/*!40000 ALTER TABLE `emp_grade` DISABLE KEYS */;
INSERT INTO `emp_grade` VALUES (1,3,'Manager Admin',35000.00,35.00,10.00,5000.00),(2,3,'Manager Admin',35000.00,35.00,10.00,5000.00),(3,3,'Manager IT',50000.00,35.00,10.00,18000.00),(4,9,'Office Assistant x10',12000.00,35.00,10.00,2000.00),(5,5,'Engineer(lead)',20000.00,35.00,10.00,5000.00),(6,5,'Engineer(Fresh)',12000.00,35.00,10.00,0.00),(7,5,'Engineer(inter)',15000.00,35.00,10.00,3500.00);
/*!40000 ALTER TABLE `emp_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_job`
--

DROP TABLE IF EXISTS `emp_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_job` (
  `id` int(5) NOT NULL COMMENT 'fkey of employee',
  `job_title` varchar(60) NOT NULL,
  `job_spec` varchar(80) NOT NULL,
  `emp_status` enum('active','onleave','dismissed','terminated','resigned','suspended','other') NOT NULL,
  `job_category` int(2) NOT NULL COMMENT 'fkey of emp_job_category',
  `joindate` date NOT NULL,
  `job_location` int(11) NOT NULL COMMENT 'HQ=1, Factory=2',
  `basic_salary` decimal(10,2) NOT NULL,
  `shift` int(3) NOT NULL COMMENT 'fkey from shift(id)',
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `continued` tinyint(4) NOT NULL COMMENT '1 for active employees',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_job`
--

LOCK TABLES `emp_job` WRITE;
/*!40000 ALTER TABLE `emp_job` DISABLE KEYS */;
INSERT INTO `emp_job` VALUES (2,'','','active',10,'2016-06-01',1,0.00,2,'2016-06-01','0000-00-00',1,'2016-06-01 15:59:24'),(3,'','','active',1,'2016-06-01',1,0.00,2,'2016-06-02','0000-00-00',1,'2016-06-01 16:00:21'),(4,'','','active',2,'2016-06-01',1,0.00,2,'2016-06-01','0000-00-00',1,'2016-06-01 16:00:53'),(1,'','','active',4,'2016-06-01',1,0.00,2,'2016-06-02','0000-00-00',1,'2016-06-01 16:01:28'),(6,'','','active',6,'2016-06-01',1,0.00,2,'2016-06-02','0000-00-00',1,'2016-06-01 16:02:14'),(5,'','','active',8,'2016-06-01',1,0.00,2,'2016-06-01','0000-00-00',1,'2016-06-01 16:03:09'),(8,'','','active',3,'2016-06-01',1,0.00,2,'2016-06-01','0000-00-00',1,'2016-06-01 16:03:40');
/*!40000 ALTER TABLE `emp_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_job_category`
--

DROP TABLE IF EXISTS `emp_job_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_job_category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `desc` varchar(40) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_job_category`
--

LOCK TABLES `emp_job_category` WRITE;
/*!40000 ALTER TABLE `emp_job_category` DISABLE KEYS */;
INSERT INTO `emp_job_category` VALUES (1,'Officials and Managers','Officials and Managers','2016-05-10 00:00:00'),(2,'Professionals','Professionals','2016-05-10 00:00:00'),(3,'Technicians','Technicians','2016-05-10 00:00:00'),(4,'Sales Workers','Sales Workers','2016-05-10 00:00:00'),(5,'Operatives','Operatives','2016-05-10 00:00:00'),(6,'Office and Clerical Workers','Office and Clerical Workers','0000-00-00 00:00:00'),(7,'Craft Workers','Craft Workers','0000-00-00 00:00:00'),(8,'Service Workers','Service Workers','0000-00-00 00:00:00'),(9,'Laborers and Helpers','Laborers and Helpers','0000-00-00 00:00:00'),(10,'Admin','Admin','0000-00-00 00:00:00'),(11,'help desk','help desk','2016-05-10 00:00:00'),(12,'HR Department','HR Department','2016-05-10 00:00:00'),(13,'Accountant','Accountant','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `emp_job_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_leave`
--

DROP TABLE IF EXISTS `emp_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_leave` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `eid` int(5) NOT NULL,
  `leave_id` int(3) NOT NULL COMMENT 'fkey of leavetype(id)',
  `leave_from` datetime NOT NULL,
  `leave_to` datetime NOT NULL,
  `leave_days` int(2) NOT NULL,
  `approved_by` int(5) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `comments` varchar(80) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_leave`
--

LOCK TABLES `emp_leave` WRITE;
/*!40000 ALTER TABLE `emp_leave` DISABLE KEYS */;
INSERT INTO `emp_leave` VALUES (1,2,2,'2016-05-01 00:00:00','2016-05-02 00:00:00',2,1,1,'sadf','2016-05-16 00:00:00'),(2,2,3,'2016-05-11 00:00:00','2016-05-11 00:00:00',1,1,1,'asdf','2016-05-16 00:00:00'),(3,2,3,'2016-05-14 00:00:00','2016-05-18 00:00:00',1,1,1,'sadf','2016-05-16 00:00:00'),(4,2,2,'2016-05-29 00:00:00','2016-05-30 00:00:00',1,0,1,'sick','2016-05-29 19:09:24');
/*!40000 ALTER TABLE `emp_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_reportto`
--

DROP TABLE IF EXISTS `emp_reportto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_reportto` (
  `id` int(5) NOT NULL,
  `report_to` int(5) NOT NULL COMMENT 'fk of emp',
  `report_method` enum('direct','indirect','email','daily','weekly','monthly','yearly','other') NOT NULL,
  `other_method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_reportto`
--

LOCK TABLES `emp_reportto` WRITE;
/*!40000 ALTER TABLE `emp_reportto` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_reportto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `empid` varchar(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dln` varchar(40) NOT NULL COMMENT 'driving license number',
  `dl_expdate` date NOT NULL COMMENT 'driving license exp date',
  `gender` enum('male','female','other','') NOT NULL,
  `dob` date NOT NULL,
  `maritalstatus` enum('married','unmarried','','') NOT NULL,
  `phone` varchar(20) NOT NULL,
  `homephone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `tin` varchar(40) NOT NULL,
  `nid` varchar(40) NOT NULL,
  `fathersname` varchar(40) NOT NULL,
  `mothersname` varchar(40) NOT NULL,
  `bankname` varchar(40) NOT NULL,
  `bankaccno` varchar(40) NOT NULL,
  `bankacctype` enum('current','savings','salary','') NOT NULL,
  `plantid` int(3) NOT NULL DEFAULT 1,
  `deptid` int(5) NOT NULL,
  `secid` int(5) NOT NULL,
  `desigid` int(5) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empid` (`empid`,`tin`,`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'man008','Idb','-','BISEW','','0000-00-00','male','0000-00-00','married','','','','NA','','','','','','','current',1,3,2,3,0),(2,'TR202','Aman','','Ullah','','0000-00-00','male','2016-05-14','unmarried','9865432','234987','aman@gmail.com','B+','4356786465','43256435879655','Aman\'s Father','Aman\'s Mother','','','savings',1,4,4,5,0),(3,'TANJIMSTORE055','Tanjimul','','Islam','','0000-00-00','male','2016-05-15','married','346436','3464','tanjim@gmail.com','A+','46546','436546546','Father','Mother','','','current',1,4,5,4,0),(4,'SADF','Sadf','Sdfa','Sdaf','','0000-00-00','male','2016-05-02','married','346','678','em@gmail.com','AB-','3245','657','Father','Mother','','','current',1,1,3,1,0),(5,'DRIV4','First','','Driver','','0000-00-00','male','0000-00-00','married','','','','NA','','','','','','','current',1,1,2,1,0),(6,'III123','Iiii','','Iiii','','0000-00-00','male','0000-00-00','married','','','','NA','','','','','','','current',1,1,2,1,0),(7,'WW123','Www','Www','Www','','0000-00-00','male','0000-00-00','married','','','','NA','','','','','','','current',1,3,1,2,1),(8,'5444','Fdg','Fdg','Fdg','','0000-00-00','male','0000-00-00','married','','','','NA','','','','','','','current',1,1,3,1,0),(9,'123234','ASA','adf','Al-Mamun','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',0,2,3,9,0),(10,'444','ASA4','al4','Al-Mamun4','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',0,3,4,5,0),(12,'445','ASA55','55','Al-Mamun55','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',0,2,1,1,0),(13,'123111','IDB','65','BISEW','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',0,3,4,8,0),(14,'123','ASA','45','Al-Mamun','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',1,1,1,6,0),(15,'1232355','ASA556','666','Al-Mamun666','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',1,1,1,4,0),(16,'999','9991','9992','9993','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',1,1,3,8,0),(18,'44477','4441','4442','4443','','0000-00-00','male','0000-00-00','married','','','','','','','','','','','current',1,3,5,4,0);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leavetype`
--

DROP TABLE IF EXISTS `leavetype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leavetype` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `leavetype` varchar(30) NOT NULL,
  `desc` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leavetype`
--

LOCK TABLES `leavetype` WRITE;
/*!40000 ALTER TABLE `leavetype` DISABLE KEYS */;
INSERT INTO `leavetype` VALUES (1,'Annual','Annual Leave','2016-05-16 00:00:00'),(2,'Sick','Sick Leave','2016-05-16 00:00:00'),(3,'Casual','Casual Leave','2016-05-16 00:00:00'),(4,'Leave With Pay','Leave With Pay','2016-05-16 00:00:00'),(5,'Leave Without Pay','Leave Without Pay','2016-05-16 00:00:00'),(6,'Earned','Earned Leave','2016-05-16 00:00:00'),(7,'Short Leave','Short Leave','2016-05-16 00:00:00'),(8,'Maternity','Maternity Leave','2016-05-16 00:00:00'),(9,'Paternity','Paternity Leave','2016-05-16 00:00:00');
/*!40000 ALTER TABLE `leavetype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plant`
--

DROP TABLE IF EXISTS `plant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plant` (
  `plantid` int(3) NOT NULL AUTO_INCREMENT,
  `plantname` varchar(40) NOT NULL,
  `plantdesc` text NOT NULL,
  `companyid` int(3) NOT NULL,
  `createdate` date NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`plantid`),
  UNIQUE KEY `plantname` (`plantname`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plant`
--

LOCK TABLES `plant` WRITE;
/*!40000 ALTER TABLE `plant` DISABLE KEYS */;
INSERT INTO `plant` VALUES (1,'Mango IT','Mango IT',1,'2016-04-28',0),(2,'Mango Textile','Mango Textile',1,'2016-04-28',0);
/*!40000 ALTER TABLE `plant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `start_date` varchar(128) DEFAULT NULL,
  `end_date` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `summary` varchar(512) DEFAULT NULL,
  `status` enum('upcoming','complete','running') NOT NULL DEFAULT 'running',
  `progress` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Project X23','Jan 4, 2022','Feb 2, 2022',' This is just a demo project! This is just a demo project! This is just a demo project! This is just a demo project!','This is just a demo project!','upcoming',NULL),(2,'Multi User Chat System','Jan 1, 2022','April 14, 2022',' You are required to develop a system that supports multi-user chatting with the help of top level technologies.','Development of Multi-User Chatting System','running',NULL),(3,'Image Enhancement Software','Dec 10, 2021','Mar 20, 2022','You are required to develop of computer based software where end users can receive quality results on image enhancement. This particular project requires large number of technologies with proper use and its features.','Development of Image Enhancement Software','running',NULL),(4,'Customer support service operation','Dec 25, 2021','Feb 16, 2022','You are required to develop a customer support service based operation using DotNet (.Net)','Develop a customer support service operation','running',NULL),(5,'Real Estate Site','Dec 29, 2021','Mar 21, 2022',' You are required to develop a real estate website using React, Nodejs.','Develop a real-estate website','running',NULL),(6,'Graphics Illustration','Jan 2, 2022','Jan 10, 2022','You are required to make a graphic illustration for XYZ company. ','Make a graphic illustration for ....','running',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(3) NOT NULL,
  `plantid` int(3) NOT NULL,
  `deptid` int(5) NOT NULL,
  `sectionid` int(5) NOT NULL,
  `desigid` int(5) NOT NULL,
  `shiftid` int(3) NOT NULL,
  `eid` int(5) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `present` int(2) NOT NULL,
  `absent` int(2) NOT NULL,
  `basic` decimal(10,2) NOT NULL,
  `houserent` double(10,2) NOT NULL,
  `medical` double(10,2) NOT NULL,
  `other` double(10,2) NOT NULL,
  `grosspay` double(11,2) NOT NULL,
  `deduction` decimal(10,2) NOT NULL,
  `netpay` double(11,2) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `status` varchar(40) NOT NULL,
  `processdata` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary_archive`
--

DROP TABLE IF EXISTS `salary_archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(3) NOT NULL,
  `plantid` int(3) NOT NULL,
  `deptid` int(5) NOT NULL,
  `sectionid` int(5) NOT NULL,
  `desigid` int(5) NOT NULL,
  `shiftid` int(3) NOT NULL,
  `eid` int(5) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `present` int(2) NOT NULL,
  `absent` int(2) NOT NULL,
  `basic` decimal(10,2) NOT NULL,
  `houserent` double(10,2) NOT NULL,
  `medical` double(10,2) NOT NULL,
  `other` double(10,2) NOT NULL,
  `grosspay` double(11,2) NOT NULL,
  `deduction` decimal(10,2) NOT NULL,
  `netpay` double(11,2) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `status` varchar(40) NOT NULL,
  `processdata` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary_archive`
--

LOCK TABLES `salary_archive` WRITE;
/*!40000 ALTER TABLE `salary_archive` DISABLE KEYS */;
/*!40000 ALTER TABLE `salary_archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary_temp`
--

DROP TABLE IF EXISTS `salary_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(3) NOT NULL,
  `plantid` int(3) NOT NULL,
  `deptid` int(5) NOT NULL,
  `sectionid` int(5) NOT NULL,
  `desigid` int(5) NOT NULL,
  `shiftid` int(3) NOT NULL,
  `eid` int(5) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `present` int(2) NOT NULL,
  `absent` int(2) NOT NULL,
  `basic` decimal(10,2) NOT NULL,
  `houserent` double(10,2) NOT NULL,
  `medical` double(10,2) NOT NULL,
  `other` double(10,2) NOT NULL,
  `grosspay` double(11,2) NOT NULL,
  `deduction` decimal(10,2) NOT NULL,
  `netpay` double(11,2) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `status` varchar(40) NOT NULL,
  `processdata` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary_temp`
--

LOCK TABLES `salary_temp` WRITE;
/*!40000 ALTER TABLE `salary_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `salary_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `secdesc` text NOT NULL,
  `department_id` int(5) NOT NULL,
  `createdate` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'sewing','some desc',3,'2016-04-30',0),(2,'store','store sec',1,'2016-04-30',0),(3,'asef','sadf',1,'2016-05-07',0),(4,'Web','web',4,'2016-05-19',0),(5,'Networking','Networking',4,'2016-05-19',0);
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shift`
--

DROP TABLE IF EXISTS `shift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shift` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `shiftname` varchar(50) NOT NULL,
  `starthour` int(2) NOT NULL,
  `startminuite` int(2) NOT NULL,
  `endhour` int(2) NOT NULL,
  `endminuite` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shift`
--

LOCK TABLES `shift` WRITE;
/*!40000 ALTER TABLE `shift` DISABLE KEYS */;
INSERT INTO `shift` VALUES (1,'general',9,0,18,0),(2,'Shift-A',6,0,14,0),(3,'Shift-B',14,0,22,0),(4,'Shift-C',22,0,6,0);
/*!40000 ALTER TABLE `shift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','$2y$10$N.urp1wXxwH1bX4zyguve.kSIoDjMDoozcuG0Y01hcDSXViBjknUC',1,'2022-06-23 10:00:58',NULL),(2,'ibrahim','ibrahim@gmail.com','$2y$10$0eWs9f1Z94jtIpkMfg7IFesKJGvzO3a7IUYvYsGM735/ckBZZzqlq',1,'2022-06-25 17:33:55',NULL),(3,'Imran','umer@mail.com','$2y$10$P45KdMV7gIuOeh/qH0v6qePHmyrWh6l7POoNSZ6jJ5aInh9NEbztS',1,'2022-06-28 15:20:04',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-29 12:47:44
