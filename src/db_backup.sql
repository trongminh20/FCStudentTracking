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
-- Table structure for table `apsds`
--

DROP TABLE IF EXISTS `apsds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apsds` (
  `student_id` int(11) DEFAULT NULL,
  `photo_id` varchar(3) DEFAULT NULL,
  `app_form` varchar(50) DEFAULT NULL,
  `app_fee` varchar(50) DEFAULT NULL,
  `app_essay` varchar(3) DEFAULT NULL,
  `refer_letter` varchar(50) DEFAULT NULL,
  `resume` varchar(3) DEFAULT NULL,
  `intro_of_msg_day1_from` datetime DEFAULT NULL,
  `intro_of_msg_day1_to` datetime DEFAULT NULL,
  `intro_of_msg_day2_from` datetime DEFAULT NULL,
  `intro_of_msg_day2_to` datetime DEFAULT NULL,
  `intro_fee` varchar(100) DEFAULT NULL,
  `intro_msg_complete` varchar(100) DEFAULT NULL,
  `welcome_letter` varchar(3) DEFAULT NULL,
  `eng_test_result` int(11) DEFAULT NULL,
  `eng_com_form` varchar(3) DEFAULT NULL,
  `crc_result` varchar(50) DEFAULT NULL,
  `medical_notes` varchar(3) DEFAULT NULL,
  `interview_date` datetime DEFAULT NULL,
  `interview_approved` varchar(3) DEFAULT NULL,
  `dips_and_trans` varchar(50) DEFAULT NULL,
  `stu_email` varchar(50) DEFAULT NULL,
  `accept_letter_date` datetime DEFAULT NULL,
  `enroll_contract` varchar(50) DEFAULT NULL,
  `stu_prog_handbook_notes` varchar(300) DEFAULT NULL,
  `pay_option` varchar(50) DEFAULT NULL,
  `stu_ack_and_agr` datetime DEFAULT NULL,
  `received_card` varchar(3) DEFAULT NULL,
  `rmt_stu_materials` varchar(100) DEFAULT NULL,
  `photo_waiver_date` date DEFAULT NULL,
  `health_check_date` date DEFAULT NULL,
  UNIQUE KEY `apsd_stu_unq` (`student_id`),
  CONSTRAINT `apsd_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apsds`
--

LOCK TABLES `apsds` WRITE;
/*!40000 ALTER TABLE `apsds` DISABLE KEYS */;
INSERT INTO `apsds` VALUES (3789001,'yes','this is test','ttigdagdsg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes',5454,'yes',NULL,NULL,NULL,NULL,'gfsgfd',NULL,'2021-03-16 00:00:00','gfgf','fgsdfg','this is other','2021-03-31 00:00:00','yes',NULL,'2021-03-17',NULL),(3789000,'yes','test form','test fee','yes','test CRL','yes','2021-03-16 03:02:00','2021-03-17 03:02:00','2021-03-16 03:02:00','2021-03-23 03:02:00','test intro','test completed','yes',87,'yes','test crc','yes','2021-03-11 03:03:00','yes','test dip','testemail@email.com','2021-03-16 00:00:00','test contract','test student program handbook','Full Payment','2021-03-18 00:00:00','yes','Sheet Set, Laptop or Learning Support, Goniometer','2021-03-18','2021-03-10');
/*!40000 ALTER TABLE `apsds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_uniq` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1000,'jessie.zhang','250-718-6186','jessie.zhang@firstcollege.ca','IT Department','123456789',1),(1001,'timothy.yang','205-899-3790','timothy.yang@firstcollege.ca','Director Office','123456789',0),(1002,'cecily.qiu','250-859-8417','cecily.qiu@firstcollege.ca','Student Service Department','123456789',0),(1003,'jason.zhong','778-231-3456','jason.zhong@firstcollege.ca','President','123456789',0),(1004,'sydney.stoltz','250-718-8279','sydney.stoltz@firstcollege.ca','Student Service Department','123456789',0);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `prog_id` varchar(5) DEFAULT NULL,
  `fee_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fees_Requirements_FK` (`prog_id`),
  CONSTRAINT `fees_Requirements_FK` FOREIGN KEY (`prog_id`) REFERENCES `programs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
INSERT INTO `fees` VALUES (210101,'HCA','Application Fee'),(210102,'RMT','Intro Course Fee'),(210103,'CSW','Textbook Fee'),(210104,'HCA','Tuition Fee'),(210105,'DA','Administration Fee');
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduations`
--

DROP TABLE IF EXISTS `graduations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graduations` (
  `student_id` int(11) DEFAULT NULL,
  `tuition_paid` varchar(3) DEFAULT NULL,
  `official_transcript` varchar(3) DEFAULT NULL,
  `completion_letter` varchar(3) DEFAULT NULL,
  `signed_diploma` varchar(3) DEFAULT NULL,
  `exam_date` datetime DEFAULT NULL,
  `T2202A` varchar(3) DEFAULT NULL,
  `employment` varchar(200) DEFAULT NULL,
  UNIQUE KEY `grad_stu_unq` (`student_id`),
  CONSTRAINT `grad_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduations`
--

LOCK TABLES `graduations` WRITE;
/*!40000 ALTER TABLE `graduations` DISABLE KEYS */;
INSERT INTO `graduations` VALUES (3789000,'yes','yes','yes','yes','2021-03-23 12:33:00','yes','trtnrla');
/*!40000 ALTER TABLE `graduations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intro_msg_detail`
--

DROP TABLE IF EXISTS `intro_msg_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intro_msg_detail` (
  `id` int(11) NOT NULL,
  `from_date` datetime DEFAULT NULL,
  `to_date` datetime DEFAULT NULL,
  `intro_msg_fee` varchar(100) DEFAULT NULL,
  `intro_msg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intro_msg_detail`
--

LOCK TABLES `intro_msg_detail` WRITE;
/*!40000 ALTER TABLE `intro_msg_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `intro_msg_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `number` int(11) NOT NULL,
  `bill_to` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `number` int(11) NOT NULL,
  `bill_to` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_tracking`
--

DROP TABLE IF EXISTS `payment_tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_tracking` (
  `student_id` int(11) DEFAULT NULL,
  `domestic` varchar(3) DEFAULT NULL,
  `international` varchar(3) DEFAULT NULL,
  `app_fee` int(11) DEFAULT NULL,
  `scholarships` int(11) DEFAULT NULL,
  `intro_msg_fee` int(11) DEFAULT NULL,
  `materials_fee` int(11) DEFAULT NULL,
  `textbook_fee` int(11) DEFAULT NULL,
  `admin_fee` int(11) DEFAULT NULL,
  `1st_payment` int(11) DEFAULT NULL,
  `2nd_payment` int(11) DEFAULT NULL,
  `3rd_payment` int(11) DEFAULT NULL,
  `4th_payment` int(11) DEFAULT NULL,
  `5th_payment` int(11) DEFAULT NULL,
  `6th_payment` int(11) DEFAULT NULL,
  `7th_payment` int(11) DEFAULT NULL,
  `8th_payment` int(11) DEFAULT NULL,
  `9th_payment` int(11) DEFAULT NULL,
  `10th_payment` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  KEY `pay_stu_fk` (`student_id`),
  CONSTRAINT `pay_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_tracking`
--

LOCK TABLES `payment_tracking` WRITE;
/*!40000 ALTER TABLE `payment_tracking` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ppes`
--

DROP TABLE IF EXISTS `ppes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ppes` (
  `student_id` int(11) DEFAULT NULL,
  `name_tag` varchar(3) DEFAULT NULL,
  `clinic_shirt_size` varchar(30) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `fa_and_cpr_dt` datetime DEFAULT NULL,
  `fa_and_cpr_contact` varchar(100) DEFAULT NULL,
  `cert_fa_cpr_receive` date DEFAULT NULL,
  `foodsafe_dt` datetime DEFAULT NULL,
  `cert_foodsafe_receive` date DEFAULT NULL,
  `crc_notes` varchar(200) DEFAULT NULL,
  `crc_receive` date DEFAULT NULL,
  `speco` varchar(3) DEFAULT NULL,
  `cli_handbook_receive` date DEFAULT NULL,
  `cli_ack_and_agr` varchar(3) DEFAULT NULL,
  `medical_file` varchar(3) DEFAULT NULL,
  `foodsafe_contact` varchar(200) DEFAULT NULL,
  UNIQUE KEY `ppes_stu_unq` (`student_id`),
  CONSTRAINT `ppe_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppes`
--

LOCK TABLES `ppes` WRITE;
/*!40000 ALTER TABLE `ppes` DISABLE KEYS */;
INSERT INTO `ppes` VALUES (3789000,'yes','Extra Small',NULL,NULL,'2021-03-23 12:22:00','this is testing','2021-03-23',NULL,NULL,NULL,NULL,'yes',NULL,NULL,NULL,NULL),(3789001,'yes','Small','2021-03-24','2021-03-24','2021-03-24 12:25:00','test','2021-03-23',NULL,NULL,NULL,NULL,NULL,'2021-03-24','no','yes',NULL);
/*!40000 ALTER TABLE `ppes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id` varchar(5) NOT NULL,
  `prog_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  CONSTRAINT `req_fk` FOREIGN KEY (`username`) REFERENCES `employees` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requirements`
--

DROP TABLE IF EXISTS `requirements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `prog_id` varchar(5) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `field_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Requirements_FK` (`prog_id`),
  CONSTRAINT `Requirements_FK` FOREIGN KEY (`prog_id`) REFERENCES `programs` (`id`)
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
  `session_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `logout` datetime DEFAULT NULL,
  PRIMARY KEY (`session_id`),
  KEY `session_fk` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (4067,1000,'2021-03-16 12:10:27','2021-03-16 12:33:04'),(5571,3789111,'2021-03-16 21:12:07','2021-03-16 21:12:45'),(6642,1000,'2021-03-16 20:32:43','2021-03-16 21:12:00'),(6858,3789111,'2021-03-16 21:12:52','2021-03-16 21:13:01');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `prog_id` varchar(5) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `dom_or_int` varchar(13) DEFAULT NULL,
  `enroll_notes` text,
  `admin_status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Students_FK` (`prog_id`),
  CONSTRAINT `Students_FK` FOREIGN KEY (`prog_id`) REFERENCES `programs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (3100567,'CSW','minhphan','2021-03-09','345671','trongminh@kdgndf.cdfd','gangafgf','domestic','minhphan','minhpahn'),(3789000,'HCA','Jack Kerwin','2013-09-18','778-959-6325','jack.kerwin@fcstudent.ca','1010 Clement Ave, Kelowna, V1Y 7E3','Domestic','Application fee paid.','Interested'),(3789001,'CSW','Abigail Sloan','2020-07-04','250-123-1425','abigail.sloan@fcstudent.ca','101-3533 Carrington Rd,\r\nWest Kelowna, V4T 3G9','Domestic','Waiting for contract','Conditional'),(3789002,'HCA','Norman Dreger','2003-10-16','250-748-5362','norman.dreger@fcstudent.ca','202-211 Briarwood Rd,\r\nKelowna, V1X 2G4','International','Complete','Enrolled'),(3789003,'RMT','Alec Bryson','2009-01-11','778-582-4785','alec.bryson@fcstudent.ca','1806 Kloppenburg Crt, Kelowna,\r\nV1P 1N6','Domestic','','Interested'),(3789004,'RMT','Calista Cornford','2012-07-30','604-582-1213','calista.cornford@fcstudent.ca','2159 Clement Ave,\r\nKelowna, V1Y 7E3','Domestic','Waiting for transcript.','Conditional');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studenttracking`
--

DROP TABLE IF EXISTS `studenttracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studenttracking` (
  `req_id` int(11) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `ans` varchar(50) DEFAULT NULL,
  KEY `StudentTracking_FK1` (`stu_id`),
  KEY `StudentTracking_FK2` (`req_id`),
  CONSTRAINT `StudentTracking_FK1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`),
  CONSTRAINT `StudentTracking_FK2` FOREIGN KEY (`req_id`) REFERENCES `requirements` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenttracking`
--

LOCK TABLES `studenttracking` WRITE;
/*!40000 ALTER TABLE `studenttracking` DISABLE KEYS */;
INSERT INTO `studenttracking` VALUES (100,3789001,'Yes'),(100,3789003,'No'),(102,3789004,'No'),(101,3789000,'Yes'),(101,3789001,'Yes');
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

-- Dump completed on 2021-03-16 23:15:12
