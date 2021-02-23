-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: fc_student_tracking
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `user_uniq` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1000,'jessie.zhang','250-718-6186','jessie.zhang@firstcollege.ca','IT Department','jessie',1),(1001,'timothy.yang','205-899-3790','timothy.yang@firstcollege.ca','Director Office','123456789',0),(1002,'cecily.qiu','250-859-8417','cecily.qiu@firstcollege.ca','Student Service Department','123456789',0),(1003,'jason.zhong','778-231-3456','jason.zhong@firstcollege.ca','President','123456789',0),(1005,' minhphan','123456789','torngminh2@gdfgf.vdf','IT','a2c107e4d07333d5aac3463dec6f79e6568a20cf',0);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `ID` int(11) NOT NULL,
  `Prog_ID` varchar(5) DEFAULT NULL,
  `Fee_Name` varchar(50) DEFAULT NULL,
  `Dom_Price` int(11) DEFAULT NULL,
  `Int_Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fees_Requirements_FK` (`Prog_ID`),
  CONSTRAINT `fees_Requirements_FK` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
INSERT INTO `fees` VALUES (210101,'HCA','Application Fee',150,150),(210102,'RMT','Intro Course Fee',300,300),(210103,'CSW','Textbook Fee',100,100),(210104,'HCA','Tuition Fee',7795,9580),(210105,'DA','Administration Fee',0,300);
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `ID` varchar(5) NOT NULL,
  `Prog_Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES ('BK','Bookkeeping'),('CSW','Community Support Worker'),('DA','Data Analytics'),('HCA','Health Care Assistant'),('RMT','Registered Massage Therapy');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `request` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `req_fk` (`username`),
  CONSTRAINT `req_fk` FOREIGN KEY (`username`) REFERENCES `employees` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (5,NULL,'Reset password'),(6,NULL,'Reset password'),(7,NULL,'Reset password'),(8,'jessie.zhang','Reset password'),(10,'timothy.yang','Reset password'),(11,'jason.zhong','Reset password');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `ID` int(11) NOT NULL,
  `Prog_ID` varchar(5) DEFAULT NULL,
  `Section` varchar(50) DEFAULT NULL,
  `Field_Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Requirements_FK` (`Prog_ID`),
  CONSTRAINT `Requirements_FK` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requirements`
--

LOCK TABLES `requirements` WRITE;
/*!40000 ALTER TABLE `requirements` DISABLE KEYS */;
INSERT INTO `requirements` VALUES (100,'HCA','Admission Prior to Start Date','Photo ID'),(101,'HCA','Prior to Practice Education','Name Tag'),(102,'CSW','Graduation','Official Completion Letter'),(103,'RMT','Prior to Practice Education','Uniform Size'),(104,'RMT','Admission Prior to Start Date','CRC');
/*!40000 ALTER TABLE `requirements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `sessionID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `logout` datetime DEFAULT NULL,
  PRIMARY KEY (`sessionID`),
  KEY `session_fk` (`userID`),
  CONSTRAINT `session_fk` FOREIGN KEY (`userID`) REFERENCES `employees` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Prog_ID` varchar(5) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Dom_OR_Int` varchar(13) DEFAULT NULL,
  `Enroll_Notes` text,
  `Admin_Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Students_FK` (`Prog_ID`),
  CONSTRAINT `Students_FK` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (3789000,'HCA','Jack Kerwin','778-959-6325','jack.kerwin@fcstudent.ca','1010 Clement Ave, Kelowna, V1Y 7E3','Domestic','Application fee paid.','Interested'),(3789001,'CSW','Abigail Sloan','250-123-1425','abigail.sloan@fcstudent.ca','101-3533 Carrington Rd, West Kelowna, V4T 3G9','Domestic','Waiting for contract','Conditional'),(3789002,'HCA','Norman Dreger','250-748-5362','norman.dreger@fcstudent.ca','202-211 Briarwood Rd, Kelowna, V1X 2G4','International','Complete','Enrolled'),(3789003,'RMT','Alec Bryson','778-582-4785','alec.bryson@fcstudent.ca','1806 Kloppenburg Crt, Kelowna, V1P 1N6','Domestic','','Interested'),(3789004,'RMT','Calista Cornford','604-582-1213','calista.cornford@fcstudent.ca','2159 Clement Ave, Kelowna, V1Y 7E3','Domestic','Waiting for transcript.','Conditional');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studenttracking`
--

DROP TABLE IF EXISTS `studenttracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studenttracking` (
  `Req_ID` int(11) DEFAULT NULL,
  `Stu_ID` int(11) DEFAULT NULL,
  `ANS` varchar(50) DEFAULT NULL,
  KEY `StudentTracking_FK1` (`Stu_ID`),
  KEY `StudentTracking_FK2` (`Req_ID`),
  CONSTRAINT `StudentTracking_FK1` FOREIGN KEY (`Stu_ID`) REFERENCES `students` (`ID`),
  CONSTRAINT `StudentTracking_FK2` FOREIGN KEY (`Req_ID`) REFERENCES `requirements` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenttracking`
--

LOCK TABLES `studenttracking` WRITE;
/*!40000 ALTER TABLE `studenttracking` DISABLE KEYS */;
INSERT INTO `studenttracking` VALUES (100,3789001,'Yes'),(100,3789003,'No'),(102,3789004,'No'),(101,3789001,'Yes');
/*!40000 ALTER TABLE `studenttracking` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-21  2:35:30
