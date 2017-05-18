-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: construction
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `Client_ID` varchar(10) NOT NULL,
  `First_Name` varchar(40) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Age` varchar(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact_No` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Client_ID`),
  CONSTRAINT `fk_cli` FOREIGN KEY (`Client_ID`) REFERENCES `user` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('','','','','',''),('CLI111','Pooja','Singh ','20','Raipur','123456'),('CLI112','Shabir','Singh ','49','pune,Mumbai,Maharashtra','2017051589'),('CLI113','Rajeev','Singh ','43','Shirdi,Mumbai,Maharashtra','3420170515'),('CLI114','Raghunath','Singh ','40','Malad,Mumbai,Maharashtra','5620170'),('CLI115','Rajveer','Singh ','50','Andheri,Mumbai,Maharashtra','4320170'),('CLI116','Shreya','Banjare','20','Bhilai','7585214'),('CLI117','Shreya','Banjare','20','Bhilai','7585214'),('CLI118','Shreya','Banjare','20','Bhilai','7585214'),('CLI119','Shreya','Banjare','20','Bhilai','7585214'),('CLI120','Shreya','Banjare','20','Bhilai','7585214'),('ClI122','pooja','sonkar','20','Dhamtari','7587093406'),('ClI123','pooja','sonkar','20','Dhamtari','7587093406');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `Emp_ID` varchar(10) NOT NULL,
  `First_Name` varchar(40) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Age` varchar(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Contact_No` varchar(10) DEFAULT NULL,
  `Hours_Worked` varchar(20) DEFAULT NULL,
  `Date_Of_Join` date DEFAULT NULL,
  PRIMARY KEY (`Emp_ID`),
  CONSTRAINT `fk_EMP` FOREIGN KEY (`Emp_ID`) REFERENCES `user` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('EMP101','Arvind','Sahu','26','Telibandha','0986123409','150','2017-05-22'),('EMP102','Praveen','Sahu','26','Telibandha Raipur','0986145678','12','2017-03-02'),('EMP103','Ramesh','Sahu','24','Shankar','0984532178','50','2017-02-20'),('EMP104','Ramu','Kumar','24','Devendra Nagar Raipur','1234532178','18','2017-01-28'),('EMP105','Raveinsh','Sharma','28','Shakti Nagar Raipur','092442178','20','2017-04-13'),('EMP106','Kartik','Sharma','32','Shanti Nagar Raipur','092412536','27','2017-02-24'),('EMP107','Abhishek','Sathia','27','Shatabdi Nagar Raipur','092456736','36','2017-04-02'),('EMP108','Kamesh','Jain','30','Shanti Nagar Raipur','092412536','27','2017-02-24'),('EMP109','Rajesh','Sharma','23','Vasant Nagar Raipur','096743536','30','2017-05-01'),('EMP110','Shadab','Hussain','31','Ram Nagar Raipur','092312536','29','2017-02-02'),('EMP112','kriti','pawar','20','Dhamtari','98263825',NULL,NULL);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `Emp_ID` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Salary_Per_Hour` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Designation`,`Emp_ID`),
  KEY `fk_Emp_ID` (`Emp_ID`),
  CONSTRAINT `fk_Emp_ID` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES ('EMP102','Designer','4000'),('EMP105','Designer','4000'),('EMP108','Designer','1000'),('EMP110','Designer','1000'),('EMP103','Manager','6000'),('EMP109','Manager','6000'),('EMP101','Worker','2000'),('EMP104','Worker','2000'),('EMP106','Worker','3000'),('EMP107','Worker','2000');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `Pro_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) DEFAULT NULL,
  `Project_Details` varchar(100) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Date_Of_Start` date DEFAULT NULL,
  `Charge_Per_Hour` varchar(20) DEFAULT NULL,
  `Date_Of_End` date DEFAULT NULL,
  PRIMARY KEY (`Pro_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Boyshostel','3 floor Building with 400 rooms','IIIT-Naya','started','2017-02-02','1000','2017-05-15'),(2,'Girls hostel','3 floor building having 350rooms ','IIIT-Naya Raipur','Started','2017-02-02','1000','2017-04-10'),(3,'Mess','Building having 12 rooms 2 Bathrooms with a good ventilation and proper drainage ','IIIT-Naya Raipur','Finished','2017-02-02','5000','2017-04-10'),(4,'Shopping Complex','Building having 12 Shops with a good ventilation and proper drainage ','IIIT-Naya Raipur','Finished','2017-01-22','1500','2017-04-16'),(5,'Staff Quaters','4 Building having 12 Rooms with a good ventilation and proper drainage ','IIIT-Naya Raipur','Finished','2017-03-22','1700','2017-04-19'),(6,'Shop','Shop','Raipur',NULL,NULL,NULL,NULL),(7,'Shop','Two Storey complex in main market','Raipur',NULL,NULL,NULL,NULL),(11,'Bunglow','4BHK with lawn terrace and a pool ','Raipur',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `Project_ID` varchar(20) NOT NULL,
  `Client_ID` varchar(20) NOT NULL,
  `Duration` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Project_ID`,`Client_ID`),
  KEY `fk_Cli_ID` (`Client_ID`),
  CONSTRAINT `fk_Cli_ID` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES ('01','CLI111','56'),('02','CLI112','30'),('03','CLI113','58'),('04','CLI114','42'),('05','CLI115','52');
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('','','Client'),('ADMIN101','1234567','Administrator'),('CLI111','7894561','Client'),('CLI112','1234567','Client '),('CLI113','1234567','Client '),('CLI114','1234567','Client '),('CLI115','1234567','Client '),('CLI116','1234567','Client'),('CLI117','1234567','Client'),('CLI118','1234567','Client'),('CLI119','1234567','Client'),('CLI120','1234567','Client'),('ClI122','apurv1234','Client'),('ClI123','apurv1234','Client'),('EMP101','1234567','Employee'),('EMP102','123456789','Employee'),('EMP103','1234567','Employee'),('EMP104','1234567','Employee'),('EMP105','1234567','Employee'),('EMP106','1234567','Employee'),('EMP107','1234567','Employee'),('EMP108','1234567','Employee'),('EMP109','1234567','Employee'),('EMP110','1234567','Employee'),('EMP111','1234567','Employee'),('EMP112','1234567','Employee');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `works_on`
--

DROP TABLE IF EXISTS `works_on`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `works_on` (
  `Project_ID` varchar(20) NOT NULL,
  `Emp_ID` varchar(20) NOT NULL,
  `Hrs_Worked` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Project_ID`,`Emp_ID`),
  KEY `fk_Emp_IDW` (`Emp_ID`),
  CONSTRAINT `fk_Emp_IDW` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `works_on`
--

LOCK TABLES `works_on` WRITE;
/*!40000 ALTER TABLE `works_on` DISABLE KEYS */;
INSERT INTO `works_on` VALUES ('01','EMP101','4'),('01','EMP102','1'),('02','EMP103','2'),('02','EMP104','2'),('03','EMP103','7'),('03','EMP104','8'),('03','EMP107','9'),('03','EMP110','5'),('04','EMP104','5'),('04','EMP105','3'),('04','EMP107','3'),('04','EMP110','4'),('05','EMP106','5'),('05','EMP107','2'),('05','EMP108','3'),('05','EMP110','5');
/*!40000 ALTER TABLE `works_on` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-18 15:39:36
