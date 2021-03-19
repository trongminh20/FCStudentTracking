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
  `dom_or_int` varchar(15) DEFAULT NULL,
  `scholarships` int(11) DEFAULT NULL,
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
INSERT INTO `payment_tracking` VALUES (3789000,'CSW',545454,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'domestic',NULL,NULL);
/*!40000 ALTER TABLE `payment_tracking` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-18 18:12:05
