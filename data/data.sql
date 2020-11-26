-- MySQL dump 10.13  Distrib 8.0.21, for osx10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: PHP_PORTFOLIO_PROJECT
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP DATABASE IF EXISTS PHP_PORTFOLIO_PROJECT;
CREATE DATABASE PHP_PORTFOLIO_PROJECT;
USE PHP_PORTFOLIO_PROJECT;


--
-- Table structure for table `EXPERIENCES`
--

DROP TABLE IF EXISTS `EXPERIENCES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `EXPERIENCES`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `COMPANY` varchar(20) NOT NULL,
  `DESCRIPTION` longtext,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL,
  PRIMARY KEY(`ID`),
  KEY `EXPERIENCES_USER_ID_fk`(`USER_ID`),
  CONSTRAINT `EXPERIENCES_USER_ID_fk` FOREIGN KEY(`USER_ID`) REFERENCES `USER`(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EXPERIENCES`
--

LOCK TABLES `EXPERIENCES` WRITE;
/*!40000 ALTER TABLE `EXPERIENCES` DISABLE KEYS */;
INSERT INTO `EXPERIENCES` (`ID`,`USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES
(1,1,'Entrepreneur Individuel','Le Bateau Ivre','Entrepreneur dans le milieu de la restauration','2003-05-14','2018-11-01');

INSERT INTO `EXPERIENCES` (`ID`,`USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES
(2,1,'Reconversion dans le WEB','MLapalus','Ingénieur en informatique en reconversion dans le WEB','2019-03-01',NULL);


INSERT INTO `EXPERIENCES` (`ID`,`USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES
(3,1,'Ingénieur R&D','Corvis Algety',"Développement et validation de cartes numériques et de composants programmables dans des projets de transmission sur fibre optique.",'1999-10-01','2002-12-31');


INSERT INTO `EXPERIENCES` (`ID`,`USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES
(4,1,'Ingénieur R&D','ALCATEL CIT',"Développement en VHDL dans les telecoms",'1998-01-01','1999-10-01');


INSERT INTO `EXPERIENCES` (`ID`,`USER_ID`, `TITLE`, `COMPANY`, `DESCRIPTION`, `START_DATE`, `END_DATE`) VALUES
(5,1,'Ingénieur R&D','DGSE',"Service militaire en scientifique du contingent. Programmations de circuits intégrés",'1996-09-01','1997-10-01');

UNLOCK TABLES;

--
-- Table structure for table `FORMATIONS`
--

DROP TABLE IF EXISTS `FORMATIONS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FORMATIONS`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `SCHOOL` varchar(20) NOT NULL,
  `GRADUATE` varchar(20) DEFAULT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL,
  `DESCRIPTION` longtext,
  PRIMARY KEY(`ID`),
  KEY `FORMATIONS_USER_ID_fk`(`USER_ID`),
  CONSTRAINT `FORMATIONS_USER_ID_fk` FOREIGN KEY(`USER_ID`) REFERENCES `USER`(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMATIONS`
--

LOCK TABLES `FORMATIONS` WRITE;
/*!40000 ALTER TABLE `FORMATIONS` DISABLE KEYS */;
INSERT INTO `FORMATIONS` (`ID`,`USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES
(1,1,'Microélectronique','Jussieu UPMC','DEA','1995-09-01','1996-06-30',"DEA en même temps que la dernière année de mon cursus d'Ingénieur. Microélectronique et Systèmes Intégrés. Conception d'un coeur de processeur RISC en VHDL");

INSERT INTO `FORMATIONS` (`ID`,`USER_ID`, `TITLE`, `SCHOOL`, `GRADUATE`, `START_DATE`, `END_DATE`, `DESCRIPTION`) VALUES
(2,1,'Ingénieur en Informatique et en Electronique','EFREI - Villejuif','Ingénieur','1991-09-01','1996-06-30',"Diplôme d'ingénieur généraliste en 5 ans après le BAC avec PREPA intégré. ");

/*!40000 ALTER TABLE `FORMATIONS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PORTFOLIO`
--

DROP TABLE IF EXISTS `PORTFOLIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PORTFOLIO`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `USER_ID` int NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `DESCRIPTION` longtext,
  `URL` varchar(100) DEFAULT NULL,
  PRIMARY KEY(`ID`),
  KEY `PORTFOLIO_USER_ID_fk`(`USER_ID`),
  CONSTRAINT `PORTFOLIO_USER_ID_fk` FOREIGN KEY(`USER_ID`) REFERENCES `USER`(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PORTFOLIO`
--

LOCK TABLES `PORTFOLIO` WRITE;
/*!40000 ALTER TABLE `PORTFOLIO` DISABLE KEYS */;

INSERT INTO `PORTFOLIO` (`ID`,`USER_ID`, `TITLE`, `CREATION_DATE`, `DESCRIPTION`, `URL`) VALUES
(1,1,'Bibiche Coiffure','2020-04-01',"Création d'un site pour un salon de coiffure de style Afro. Création en langage PHP.",'http://bibiche-coiffure.fr');

INSERT INTO `PORTFOLIO` (`ID`,`USER_ID`, `TITLE`, `CREATION_DATE`, `DESCRIPTION`, `URL`) VALUES
(2,1,'TOP SERVICES','2020-02-01',"Création d'un site pour une société de nettoyage industriel. Création en HTML / CSS.",'http://top-service-france.fr');


/*!40000 ALTER TABLE `PORTFOLIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PORTFOLIO_TAGS`
--

DROP TABLE IF EXISTS `PORTFOLIO_TAGS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PORTFOLIO_TAGS`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `PORTFOLIO_ID` int NOT NULL,
  `TAG` varchar(20) NOT NULL,
  PRIMARY KEY(`ID`),
  KEY `PORTFOLIO_TAGS_PORTFOLIO_ID_fk`(`PORTFOLIO_ID`),
  CONSTRAINT `PORTFOLIO_TAGS_PORTFOLIO_ID_fk` FOREIGN KEY(`PORTFOLIO_ID`) REFERENCES `PORTFOLIO`(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PORTFOLIO_TAGS`
--

LOCK TABLES `PORTFOLIO_TAGS` WRITE;
/*!40000 ALTER TABLE `PORTFOLIO_TAGS` DISABLE KEYS */;
INSERT INTO `PORTFOLIO_TAGS` (`ID`,`PORTFOLIO_ID`, `TAG`) VALUES
(1,1,'HTML'),
(2,1,'CSS'),
(3,1,'JAVASCRIPT'),
(4,1,'PHP')
(5,2,'HTML'),
(6,2,'CSS');
/*!40000 ALTER TABLE `PORTFOLIO_TAGS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USER`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `LAST_NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `BIRTH_DATE` date NOT NULL,
  `DESCRIPTION` longtext,
  PRIMARY KEY(`ID`),
  UNIQUE KEY `USER_USERNAME_uindex`(`USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
INSERT INTO `USER`
  (`ID`, `LAST_NAME`, `USERNAME`, `FIRST_NAME`, `BIRTH_DATE`, `DESCRIPTION`) 
  VALUES
(1,'Lapalus','Mimi','Michel','21-06-1973',"Jeune homme de 47ans, j'ai un diplôme d'ingénieur en électronique et en informatique, et un DEA en microélectronique. J'ai travaillé 5 ans dans les telecoms, puis j'ai travaillé pendant 15 ans dans la gestion d'établissements de nuit à Paris. Depuis 1 an, je me consacre à un retour dans le milieu de l'informatique. ");
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-20 13:04:42
