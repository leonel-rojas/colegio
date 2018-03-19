-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: colegio
-- ------------------------------------------------------
-- Server version	5.6.28-1

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `representant_id` int(11) DEFAULT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `representante_id` (`representant_id`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`representant_id`) REFERENCES `representants` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (2,26,5,1);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bancos`
--

DROP TABLE IF EXISTS `bancos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bancos`
--

LOCK TABLES `bancos` WRITE;
/*!40000 ALTER TABLE `bancos` DISABLE KEYS */;
INSERT INTO `bancos` VALUES (7,50000.00),(8,50300.00),(9,51100.00),(10,51100.00),(11,41100.00),(12,46100.00),(13,1100.00),(14,48100.00);
/*!40000 ALTER TABLE `bancos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacoras`
--

DROP TABLE IF EXISTS `bitacoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacoras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `modulo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `accion` mediumtext COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `bitacoras_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacoras`
--

LOCK TABLES `bitacoras` WRITE;
/*!40000 ALTER TABLE `bitacoras` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Director'),(2,'Sub - Director'),(3,'Obrero'),(4,'Docente'),(5,'Personal Administrativo');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'7mo'),(2,'8vo'),(3,'9no'),(4,'4to'),(5,'5to');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `egresos`
--

DROP TABLE IF EXISTS `egresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `egresos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `tipoegreso_id` int(11) DEFAULT NULL,
  `monto` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipoegreso_id` (`tipoegreso_id`),
  CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`tipoegreso_id`) REFERENCES `tipoegresos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `egresos`
--

LOCK TABLES `egresos` WRITE;
/*!40000 ALTER TABLE `egresos` DISABLE KEYS */;
INSERT INTO `egresos` VALUES (2,'2016-06-06',1,1000.00),(3,'2016-08-06',1,35000.00),(4,'2016-06-08',1,20000.00),(5,'2016-06-08',1,20000.00),(6,'2016-06-08',1,10000.00),(7,'2016-06-08',1,5000.00),(8,'2016-06-08',1,50000.00),(9,'2016-06-08',1,3000.00);
/*!40000 ALTER TABLE `egresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresos`
--

DROP TABLE IF EXISTS `ingresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `periodo_id` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `monto` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno_id` (`alumno_id`),
  CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresos`
--

LOCK TABLES `ingresos` WRITE;
/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
INSERT INTO `ingresos` VALUES (6,'2016-06-08',1,'Mensualidad',2,500.00),(7,'2016-06-08',1,'Mensualidad',2,500.00),(8,'2016-06-08',1,'Mensualidad',2,200.00);
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `sumar_ganancias` AFTER INSERT ON `ingresos` FOR EACH ROW update bancos set total=total+new.monto WHERE id=id */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `inscripcions`
--

DROP TABLE IF EXISTS `inscripcions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscripcions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `periodo_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  `turno_id` int(11) DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periodo_id` (`periodo_id`),
  KEY `curso_id` (`curso_id`),
  KEY `seccion_id` (`seccion_id`),
  KEY `turno_id` (`turno_id`),
  KEY `alumno_id` (`alumno_id`),
  CONSTRAINT `inscripcions_ibfk_1` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`),
  CONSTRAINT `inscripcions_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  CONSTRAINT `inscripcions_ibfk_3` FOREIGN KEY (`seccion_id`) REFERENCES `seccions` (`id`),
  CONSTRAINT `inscripcions_ibfk_4` FOREIGN KEY (`turno_id`) REFERENCES `turnos` (`id`),
  CONSTRAINT `inscripcions_ibfk_5` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscripcions`
--

LOCK TABLES `inscripcions` WRITE;
/*!40000 ALTER TABLE `inscripcions` DISABLE KEYS */;
INSERT INTO `inscripcions` VALUES (1,'2016-06-01',1,1,1,1,2);
/*!40000 ALTER TABLE `inscripcions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesespagos`
--

DROP TABLE IF EXISTS `mesespagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesespagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesesyear_id` int(11) NOT NULL,
  `tarjeta_id` int(11) DEFAULT NULL,
  `ingreso_id` int(11) DEFAULT NULL,
  `condicion` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tarjeta_id` (`tarjeta_id`),
  KEY `ingreso_id` (`ingreso_id`),
  KEY `mesesyear_id` (`mesesyear_id`),
  CONSTRAINT `mesespagos_ibfk_1` FOREIGN KEY (`tarjeta_id`) REFERENCES `tarjetas` (`id`),
  CONSTRAINT `mesespagos_ibfk_2` FOREIGN KEY (`ingreso_id`) REFERENCES `ingresos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesespagos`
--

LOCK TABLES `mesespagos` WRITE;
/*!40000 ALTER TABLE `mesespagos` DISABLE KEYS */;
INSERT INTO `mesespagos` VALUES (1,1,1,NULL,'Pendiente'),(2,2,1,NULL,'Pendiente'),(3,3,1,NULL,'Pendiente'),(4,4,1,NULL,'Pendiente'),(5,5,1,NULL,'Pendiente'),(6,6,1,NULL,'Pendiente'),(7,7,1,NULL,'Pendiente'),(8,8,1,NULL,'Pendiente'),(9,9,1,NULL,'Pendiente'),(10,10,1,NULL,'Pendiente'),(11,11,1,NULL,'Pendiente'),(12,12,1,NULL,'Pendiente'),(49,1,6,6,'Cancelado'),(50,2,6,7,'Cancelado'),(51,3,6,8,'Cancelado'),(52,4,6,NULL,'Pendiente'),(53,5,6,NULL,'Pendiente'),(54,6,6,NULL,'Pendiente'),(55,7,6,NULL,'Pendiente'),(56,8,6,NULL,'Pendiente'),(57,9,6,NULL,'Pendiente'),(58,10,6,NULL,'Pendiente'),(59,11,6,NULL,'Pendiente'),(60,12,6,NULL,'Pendiente');
/*!40000 ALTER TABLE `mesespagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesesyears`
--

DROP TABLE IF EXISTS `mesesyears`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesesyears` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesesyears`
--

LOCK TABLES `mesesyears` WRITE;
/*!40000 ALTER TABLE `mesesyears` DISABLE KEYS */;
INSERT INTO `mesesyears` VALUES (1,'Septiembre'),(2,'Octubre'),(3,'Noviembre'),(4,'Diciembre'),(5,'Enero'),(6,'Febrero'),(7,'Marzo'),(8,'Abril'),(9,'Mayo'),(10,'Junio'),(11,'Julio'),(12,'Agosto');
/*!40000 ALTER TABLE `mesesyears` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (1,'2015-2016','2015-09-01','2016-08-31'),(2,'2016-2017','2016-09-01','2017-08-31'),(3,'2017-2018','2017-09-01','2018-08-31'),(4,'2018-2019','2018-09-01','2019-08-31'),(5,'2019-2020','2019-09-01','2020-08-31'),(6,'2020-2021','2020-09-01','2021-08-31'),(7,'2021-2022','2021-09-01','2022-08-31');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento` date DEFAULT NULL,
  `direccion` mediumtext COLLATE utf8_spanish_ci,
  `foto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_dir` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (9,'Admin','Admin','1111111','04123332211','1981-11-10','DirecciÃ³n Admin','',NULL),(26,'Miguel','Cabrera','28776889','0412445887','1994-03-10','San Juan','',NULL),(30,'Jose','Cabrera','10444777','04123339900','1991-03-08','asds',NULL,NULL),(36,'Nina','Zeoli','23629615','04243779297','1993-10-29','Santa Cruz','',NULL),(37,'MarÃ­a','Garcia','20527384','04123322211','1993-06-17','San Juan','',NULL),(38,'Alexis','ChacÃ³n','20988126','04123332244','1994-10-14','Cagua','',NULL);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesions`
--

DROP TABLE IF EXISTS `profesions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesions`
--

LOCK TABLES `profesions` WRITE;
/*!40000 ALTER TABLE `profesions` DISABLE KEYS */;
INSERT INTO `profesions` VALUES (1,'Ingeniero'),(2,'Contador'),(3,'Administrador'),(4,'Medico'),(5,'Docente'),(6,'Ninguna');
/*!40000 ALTER TABLE `profesions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representants`
--

DROP TABLE IF EXISTS `representants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `profesion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `profesion_id` (`profesion_id`),
  CONSTRAINT `representants_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `representants_ibfk_2` FOREIGN KEY (`profesion_id`) REFERENCES `profesions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representants`
--

LOCK TABLES `representants` WRITE;
/*!40000 ALTER TABLE `representants` DISABLE KEYS */;
INSERT INTO `representants` VALUES (5,30,6),(6,32,6),(7,35,1);
/*!40000 ALTER TABLE `representants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rols`
--

DROP TABLE IF EXISTS `rols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rols`
--

LOCK TABLES `rols` WRITE;
/*!40000 ALTER TABLE `rols` DISABLE KEYS */;
INSERT INTO `rols` VALUES (1,'Administrador'),(2,'Normal');
/*!40000 ALTER TABLE `rols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccions`
--

DROP TABLE IF EXISTS `seccions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccions`
--

LOCK TABLES `seccions` WRITE;
/*!40000 ALTER TABLE `seccions` DISABLE KEYS */;
INSERT INTO `seccions` VALUES (1,'A'),(2,'B'),(3,'C'),(4,'D');
/*!40000 ALTER TABLE `seccions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `periodo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno_id` (`alumno_id`),
  KEY `periodo_id` (`periodo_id`),
  CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetas`
--

LOCK TABLES `tarjetas` WRITE;
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` VALUES (1,'CJFR-1516-0000002',2,1),(6,'CJFR-1617-0000002',2,2);
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoegresos`
--

DROP TABLE IF EXISTS `tipoegresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipoegresos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoegresos`
--

LOCK TABLES `tipoegresos` WRITE;
/*!40000 ALTER TABLE `tipoegresos` DISABLE KEYS */;
INSERT INTO `tipoegresos` VALUES (1,'Pago de Personal'),(2,'Servicios Publicos');
/*!40000 ALTER TABLE `tipoegresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadors`
--

DROP TABLE IF EXISTS `trabajadors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  `profesion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `cargo_id` (`cargo_id`),
  KEY `profesion_id` (`profesion_id`),
  CONSTRAINT `trabajadors_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `trabajadors_ibfk_2` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  CONSTRAINT `trabajadors_ibfk_3` FOREIGN KEY (`profesion_id`) REFERENCES `profesions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadors`
--

LOCK TABLES `trabajadors` WRITE;
/*!40000 ALTER TABLE `trabajadors` DISABLE KEYS */;
INSERT INTO `trabajadors` VALUES (1,36,3,6),(2,9,5,1),(3,37,5,5),(4,38,5,3);
/*!40000 ALTER TABLE `trabajadors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadors_egresos`
--

DROP TABLE IF EXISTS `trabajadors_egresos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadors_egresos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trabajador_id` int(11) NOT NULL,
  `egreso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadors_egresos`
--

LOCK TABLES `trabajadors_egresos` WRITE;
/*!40000 ALTER TABLE `trabajadors_egresos` DISABLE KEYS */;
INSERT INTO `trabajadors_egresos` VALUES (1,2,2),(2,1,3),(3,2,4),(4,1,5),(5,1,6),(6,1,7),(7,1,8),(8,1,9);
/*!40000 ALTER TABLE `trabajadors_egresos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turnos`
--

DROP TABLE IF EXISTS `turnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turnos`
--

LOCK TABLES `turnos` WRITE;
/*!40000 ALTER TABLE `turnos` DISABLE KEYS */;
INSERT INTO `turnos` VALUES (1,'Diurno'),(2,'Vespertino');
/*!40000 ALTER TABLE `turnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `eliminado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  KEY `rol_id` (`rol_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (13,9,'admin@colegio.com','$2a$10$e3CsjyOEIGHi6HX.YYzZX.yasDkyrub.Ap2QNUdxJMBmHIyHK66f6',1,'A','2016-05-25 08:40:44','2016-06-08 14:08:28',0),(14,37,'maria@colegio.com','$2a$10$ZH150jXj.Z9PLnI8J2M4luSWtj.9Zg3oWWbJEp0USobk3uP2E.IL.',1,'A','2016-06-08 22:25:05','2016-06-08 22:25:05',0),(15,38,'alexis@colegio.com','$2a$10$kL5rqFw6gnL9W5oYGw8nu.YM5AHlM/aexF6g8JsSccLOeAJl1nBnG',1,'A','2016-06-08 22:26:22','2016-06-08 22:26:22',0);
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

-- Dump completed on 2016-06-09 10:46:34
