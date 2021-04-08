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
  `prog_id` varchar(5) DEFAULT NULL,
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
INSERT INTO `apsds` VALUES (3789000,NULL,'yes','43434','434343','yes','tqrtr','yes','2021-03-14 16:54:00','2021-03-10 15:56:00','2021-03-30 17:58:00','2021-03-16 17:58:00','gfgf','gfgfgf','yes',54,'yes','gfgf','yes','2021-03-18 16:57:00','yes','gfgf','fgfgfg','2021-03-18 00:00:00','gfgfsg','gfgfgsd','','2021-03-16 00:00:00','yes','Goniometer, Oil Holster','2021-03-11','2021-03-12'),(3789005,'CSW','yes','Received and signed','Received with invoice',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes',85,'yes',NULL,NULL,NULL,NULL,'High school diploma received','john.doe@fcstudent.ca','2020-08-15 00:00:00','Received and signed',NULL,'Student Aid BC','2020-09-01 00:00:00','yes',NULL,'2020-09-01','2020-09-01'),(3789006,'BK',NULL,'Received and signed',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes',NULL,NULL,NULL,NULL,'High school diploma received',NULL,NULL,NULL,NULL,'Full Payment',NULL,NULL,NULL,NULL,NULL),(3789007,'DA','yes','Received and signed','Received with invoice',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,90,'yes',NULL,NULL,NULL,NULL,'High school diploma received','samual.odling@fcstudent.ca',NULL,NULL,NULL,'Monthly Payment',NULL,NULL,NULL,NULL,NULL),(3789008,'RMT','yes','Received and signed','Received with invoice','yes','Received ','yes',NULL,NULL,NULL,NULL,'Received with invoice','Completed at DT location','yes',NULL,'yes','Received and review','yes',NULL,'yes','High school diploma received','conner.albert@fcstudent.ca',NULL,'Received and signed','Issued and went through contents','Student Aid BC',NULL,'yes','Sheet Set, Laptop or Learning Support, Goniometer, Oil Holster, Bottle','2021-01-04','2021-01-04'),(3789009,'HCA','yes','Received and signed','Received with invoice',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes',NULL,NULL,NULL,NULL,'High school diploma received','elliot.bryant@fcstudent.ca',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789010,'DA','yes','Received and signed','Received with invoice',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,87,'yes',NULL,NULL,NULL,NULL,'High school diploma received','mysha.anderson@fcstudent.ca',NULL,NULL,NULL,'Full Payment',NULL,NULL,NULL,NULL,NULL),(1234567890,'RMT','yes','Received and signed','Received with invoice','yes','Received one','no',NULL,NULL,NULL,NULL,'Received with invoice','Completed at DT location','no',NULL,NULL,'Received and review','yes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Yes',NULL,NULL,NULL);
/*!40000 ALTER TABLE `apsds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_info`
--

DROP TABLE IF EXISTS `emp_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emp_info` (
  `eid` int(11) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  KEY `eInfo_fk` (`eid`),
  CONSTRAINT `eInfo_fk` FOREIGN KEY (`eid`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_info`
--

LOCK TABLES `emp_info` WRITE;
/*!40000 ALTER TABLE `emp_info` DISABLE KEYS */;
INSERT INTO `emp_info` VALUES (1000,'Jessie Zhang','IT coordinator'),(1001,'Timothy Yang','Director Office'),(1002,'Cecily Qiu','Student Service Department'),(1003,'Jason Zhong','President'),(1234,'pahn trong minh','it'),(123456,'minhphantrong','it');
/*!40000 ALTER TABLE `emp_info` ENABLE KEYS */;
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
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `admin` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_uniq` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1000,'jessie.zhang','(123) 456 - 7890','jessie.zhang@firstcollege.ca','IT Department','f7c3bc1d808e04732adf679965ccc34ca7ae3441','admin'),(1001,'timothy.yang','(123) 456 - 7890','timothy.yang@firstcollege.ca','Director Office','f7c3bc1d808e04732adf679965ccc34ca7ae3441','user'),(1002,'cecily.qiu','(123) 456 - 7890','cecily.qiu@firstcollege.ca','Student Service Department','f7c3bc1d808e04732adf679965ccc34ca7ae3441','user'),(1003,'jason.zhong','(123) 456 - 7890','jason.zhong@firstcollege.ca','President','f7c3bc1d808e04732adf679965ccc34ca7ae3441','user'),(1004,'sydney.stoltz','(123) 456 - 7890','sydney.stoltz@firstcollege.ca','Student Service Department','f7c3bc1d808e04732adf679965ccc34ca7ae3441','user'),(1234,'minhphan','(123) 456 - 7890','trongminh20@gmail.com','it','d53e544ad1a6b9dd81fffef7eaebc820de68d099','user'),(123456,'minhminh','(123) 456 - 7890','trongminh20@gmail.com','it','0a0738ce11f544635af33455fd7d3c0ce8443d1a','1');
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
  `prog_id` varchar(5) DEFAULT NULL,
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
INSERT INTO `graduations` VALUES (3789005,'CSW','yes',NULL,NULL,NULL,NULL,NULL,NULL),(3789008,'RMT',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
INSERT INTO `invoices` VALUES (2104031,'minhphan','2021-04-03',77,'this is test'),(2104032,'minhphan2','2021-04-03',66,'gfsg'),(2104051,'minh Phan','2021-04-05',0,''),(2104052,'','2021-04-05',0,''),(2104053,'minhphhpha','2021-04-05',0,''),(2104054,'minhminh','2021-04-05',0,''),(2104055,'','2021-04-05',0,''),(2104056,'','2021-04-05',0,''),(2104057,'','2021-04-05',0,''),(2104058,'','2021-04-05',0,''),(2104059,'','2021-04-05',0,''),(21040510,'','2021-04-05',0,''),(21040511,'','2021-04-05',0,''),(21040512,'','2021-04-05',0,''),(21040513,'','2021-04-05',0,''),(21040514,'','2021-04-05',0,'');
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
  `prog_id` varchar(5) DEFAULT NULL,
  `application_fee` int(11) DEFAULT NULL,
  `intro_to_message_fee` int(11) DEFAULT NULL,
  `course_materials_fee` int(11) DEFAULT NULL,
  `textbook_fee` int(11) DEFAULT NULL,
  `dom_or_int` varchar(15) DEFAULT NULL,
  `scholarships` int(11) DEFAULT NULL,
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
  `remaining_payment` int(11) DEFAULT NULL,
  KEY `pay_stu_fk` (`student_id`),
  CONSTRAINT `pay_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_tracking`
--

LOCK TABLES `payment_tracking` WRITE;
/*!40000 ALTER TABLE `payment_tracking` DISABLE KEYS */;
INSERT INTO `payment_tracking` VALUES (3789000,'CSW',545454,NULL,NULL,NULL,'domestic',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789001,'CSW',3456,NULL,NULL,NULL,'domestic',23345,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789005,'CSW',150,NULL,NULL,2600,'domestic',1000,NULL,11500,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15250,NULL),(3789006,'BK',NULL,NULL,NULL,NULL,'international',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789007,'DA',150,NULL,NULL,NULL,'domestic',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789008,'RMT',150,300,900,1700,'domestic',NULL,NULL,5600,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35050,26400),(3789009,'HCA',150,NULL,NULL,NULL,'domestic',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789010,'DA',150,NULL,NULL,NULL,'international',NULL,300,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
  `prog_id` varchar(5) DEFAULT NULL,
  `name_tag` varchar(3) DEFAULT NULL,
  `clinic_shirt_size` varchar(30) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `fa_and_cpr_dt` datetime DEFAULT NULL,
  `fa_and_cpr_contact` varchar(100) DEFAULT NULL,
  `cert_fa_cpr_receive` date DEFAULT NULL,
  `foodsafe_dt` datetime DEFAULT NULL,
  `cert_foodsafe_receive` date DEFAULT NULL,
  `speco` varchar(3) DEFAULT NULL,
  `cli_handbook_receive` date DEFAULT NULL,
  `cli_ack_and_agr` varchar(3) DEFAULT NULL,
  `medical_file` varchar(3) DEFAULT NULL,
  `foodsafe_contact` varchar(200) DEFAULT NULL,
  `crc_notes` varchar(50) DEFAULT NULL,
  UNIQUE KEY `ppes_stu_unq` (`student_id`),
  CONSTRAINT `ppe_stu_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ppes`
--

LOCK TABLES `ppes` WRITE;
/*!40000 ALTER TABLE `ppes` DISABLE KEYS */;
INSERT INTO `ppes` VALUES (3789005,'CSW',NULL,'Extra Small',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Received on Aug.8,2020'),(3789008,'RMT',NULL,'Extra Small',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3789009,'HCA',NULL,'Extra Small',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1234567890,'RMT','yes','Small','1222-12-02','1444-12-03',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
  KEY `session_fk` (`user_id`),
  CONSTRAINT `session_fk` FOREIGN KEY (`user_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1052,1000,'2021-04-05 23:41:55','2021-04-06 00:28:45'),(1907,1000,'2021-04-03 20:04:47','2021-04-03 20:04:53'),(1989,1000,'2021-03-19 02:35:20','2021-03-19 02:43:23'),(2074,1000,'2021-03-23 05:11:13','2021-03-23 05:26:42'),(2418,1000,'2021-03-19 01:43:05','2021-03-19 01:48:00'),(2437,1000,'2021-04-03 17:16:35','2021-04-03 18:57:50'),(2477,1000,'2021-03-19 13:11:11','2021-03-19 13:29:39'),(2621,1000,'2021-04-06 22:23:41','2021-04-06 22:56:10'),(2784,1000,'2021-04-06 15:01:35','2021-04-06 16:10:31'),(2872,1000,'2021-03-25 02:24:56','2021-03-25 02:26:19'),(3594,1000,'2021-03-30 13:24:18','2021-03-30 13:25:35'),(3656,1000,'2021-04-06 20:00:15','2021-04-06 20:53:54'),(3879,1000,'2021-03-19 12:46:04','2021-03-19 13:10:13'),(4071,1003,'2021-03-19 02:32:15','2021-03-19 02:32:56'),(4110,1000,'2021-03-25 02:26:25','2021-03-25 02:41:26'),(4462,1000,'2021-03-25 08:09:22','2021-03-25 08:24:28'),(4810,1000,'2021-04-01 12:41:34','2021-04-01 13:14:14'),(4844,1000,'2021-03-26 14:11:34','2021-03-26 14:58:32'),(5065,1000,'2021-03-23 05:37:22','2021-03-23 06:34:31'),(5067,1000,'2021-04-05 18:20:15','2021-04-05 18:29:22'),(5246,1000,'2021-03-26 13:45:38','2021-03-26 13:46:08'),(5444,1000,'2021-03-25 00:55:15','2021-03-25 01:10:43'),(5707,1000,'2021-04-05 23:08:58','2021-04-05 23:29:07'),(5747,1000,'2021-04-01 13:23:21','2021-04-01 14:01:50'),(6063,1000,'2021-04-03 23:06:30','2021-04-03 23:15:27'),(6396,1000,'2021-04-06 10:06:52','2021-04-06 10:10:56'),(6438,1000,'2021-04-04 16:02:01','2021-04-04 23:42:44'),(6495,1000,'2021-04-03 22:42:46','2021-04-03 22:47:24'),(6671,1003,'2021-03-19 02:33:40','2021-03-19 02:35:05'),(6751,1000,'2021-03-25 12:27:33','2021-03-25 12:43:20'),(6937,1000,'2021-03-25 12:50:56','2021-03-25 13:07:57'),(7016,1000,'2021-03-25 12:46:58','2021-03-25 12:57:42'),(7031,1000,'2021-03-25 02:48:54','2021-03-25 03:23:53'),(7695,1000,'2021-04-03 20:05:03','2021-04-03 20:20:04'),(7738,1000,'2021-04-04 11:09:53','2021-04-04 11:10:00'),(8019,1234,'2021-03-26 13:46:18','2021-03-26 13:57:16'),(8113,1000,'2021-03-24 00:05:04','2021-03-24 00:22:25'),(8663,1000,'2021-04-03 15:23:27','2021-04-03 15:45:44'),(8983,1000,'2021-04-04 23:39:48','2021-04-04 23:40:13'),(9019,1000,'2021-03-19 01:27:44','2021-03-19 01:43:00'),(9466,1000,'2021-03-27 16:17:19','2021-03-27 16:32:24'),(9494,1000,'2021-03-19 02:21:33','2021-03-19 02:28:42'),(9786,1000,'2021-04-01 12:12:02','2021-04-01 12:27:27'),(9896,1000,'2021-04-06 16:15:40','2021-04-06 18:15:08'),(9897,1003,'2021-03-25 03:24:23','2021-03-25 03:40:35'),(9928,1000,'2021-03-26 13:45:50','2021-03-26 14:09:31'),(9976,1000,'2021-04-04 10:21:19','2021-04-04 10:21:47'),(9985,1000,'2021-03-26 12:56:32','2021-03-26 13:22:14');
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
  `cohort` varchar(30) DEFAULT NULL,
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
INSERT INTO `students` VALUES (3100567,'CSW','minhphan','2021-03-09','345671','trongminh@kdgndf.cdfd','gangafgf','domestic','minhphan',NULL,'minhpahn'),(3789000,'HCA','Jack Kerwin','2013-09-18','778-959-6325','jack.kerwin@fcstudent.ca','1010 Clement Ave, Kelowna, V1Y 7E3','Domestic','Application fee paid.',NULL,'Interested'),(3789001,'CSW','Abigail Sloan','2020-07-04','250-123-1425','abigail.sloan@fcstudent.ca','101-3533 Carrington Rd,\r\nWest Kelowna, V4T 3G9','Domestic','Waiting for contract',NULL,'Conditional'),(3789002,'HCA','Norman Dreger','2003-10-16','250-748-5362','norman.dreger@fcstudent.ca','202-211 Briarwood Rd,\r\nKelowna, V1X 2G4','International','Complete',NULL,'Enrolled'),(3789003,'RMT','Alec Bryson','2009-01-11','778-582-4785','alec.bryson@fcstudent.ca','1806 Kloppenburg Crt, Kelowna,\r\nV1P 1N6','Domestic','',NULL,'Interested'),(3789004,'RMT','Calista Cornford','2012-07-30','604-582-1213','calista.cornford@fcstudent.ca','2159 Clement Ave,\r\nKelowna, V1Y 7E3','Domestic','Waiting for transcript.',NULL,'Conditional'),(3789005,'CSW','John Doe','1993-06-24','2509797920','johndoe@gmail.com','2339 hwy 97','domestic','Enrolled in csw program','September 2020','Enrolled'),(3789006,'BK','Yvonne Seymour','1998-01-26','2508165263','yvonneseymour@gmail.com','532 leon ave','international','Interest in the program','May 2021','Interested'),(3789007,'DA','Samual Odling','2002-05-23','2508596353','samualodling@gmail.com','532 leon ave','domestic','In process','September 2021','Interested'),(3789008,'RMT','Conner Albert','1999-02-16','2504523618','conneralbert@gmail.com','6133 buswell St','domestic','Enrolled in rmt program','January 2021','Enrolled'),(3789009,'HCA','Elliot Bryant','1985-05-11','7785263502','elliotbryant@gmail.com','1461 K.L.O. Road','domestic','In application process','May 2021','Interested'),(3789010,'DA','Mysha Anderson','1996-01-12','7784652336','mysha.anderson@gmail.com','532 leon ave','international','Interested in this program','September 2021','Interested'),(123456789,'DA','minhphn','2021-03-15','123456789','trongminh20@gmail.com','this is home address','domestic','this is enrollment notes','this is cohort','admission status'),(300258925,'RMT','Marry Sue','1994-12-15','250-658-3354','msue@gmail.com','482 madeup road','domestic','Testing the note section','September 2021','Enrolled'),(1234567890,'RMT','Anna Brown','1997-10-23','7784786611','hr@firstcollege.ca','532 Leon Ave, Second Floor','domestic','this is a very long test this is a very long test this is a very long test this is a very long test this is a very long test this is a very long test','September 2021','waiting for Intetvie');
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

-- Dump completed on 2021-04-07  0:02:08
