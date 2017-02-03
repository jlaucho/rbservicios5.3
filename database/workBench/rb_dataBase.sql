-- MySQL dump 10.13  Distrib 5.7.16, for Linux (i686)
--
-- Host: localhost    Database: rb_dataBase
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameCli` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `RIF_CedulaCli` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccionCli` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionCli` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `telefonoCli` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Empresa','j-40171387-4','Direccion de empresa','descripcion de empresa de prueba','0212230222222','2016-12-16 22:44:18','2016-12-16 22:44:18');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correosEnviados`
--

DROP TABLE IF EXISTS `correosEnviados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correosEnviados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantHoras` int(11) NOT NULL,
  `cantDesvInter` int(11) NOT NULL,
  `cantDesvExter` int(11) NOT NULL,
  `cantPernocta` int(11) NOT NULL,
  `totalMonto` double(8,2) NOT NULL,
  `bonoFinSemana` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `pagadoConductor` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `id_ticket` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `correosenviados_id_ticket_foreign` (`id_ticket`),
  KEY `correosenviados_user_id_foreign` (`user_id`),
  CONSTRAINT `correosenviados_id_ticket_foreign` FOREIGN KEY (`id_ticket`) REFERENCES `ticket_servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `correosenviados_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correosEnviados`
--

LOCK TABLES `correosEnviados` WRITE;
/*!40000 ALTER TABLE `correosEnviados` DISABLE KEYS */;
INSERT INTO `correosEnviados` VALUES (1,'Este es el mesaje del tipo de correo que se esta enviando al usuario',2,3,4,1,26830.23,'NO','SI',1,1,'2016-12-16 22:56:30','2016-12-16 22:56:30');
/*!40000 ALTER TABLE `correosEnviados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_facturas`
--

DROP TABLE IF EXISTS `detalle_facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_facturas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionFactura` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precioUnidad` double(8,2) NOT NULL,
  `totalUnidad` double(8,2) NOT NULL,
  `cantUnidad` int(11) NOT NULL,
  `id_factura` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detalle_facturas_id_factura_foreign` (`id_factura`),
  CONSTRAINT `detalle_facturas_id_factura_foreign` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_facturas`
--

LOCK TABLES `detalle_facturas` WRITE;
/*!40000 ALTER TABLE `detalle_facturas` DISABLE KEYS */;
INSERT INTO `detalle_facturas` VALUES (1,'TR005','MCBO-CABIMAS-MCBO',50364.56,50400.00,2,1,'2016-12-16 23:17:34','2016-12-16 23:17:34');
/*!40000 ALTER TABLE `detalle_facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `odc` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `numFactura` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `fechaFactura` date NOT NULL,
  `totalFact` double(8,2) NOT NULL,
  `IVA` double(8,2) NOT NULL,
  `pagada` enum('NO','SI') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `correo_id` int(10) unsigned NOT NULL,
  `cliente_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facturas_correo_id_foreign` (`correo_id`),
  KEY `facturas_cliente_id_foreign` (`cliente_id`),
  CONSTRAINT `facturas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_correo_id_foreign` FOREIGN KEY (`correo_id`) REFERENCES `correosEnviados` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (1,'4510962257','240','2016-12-21',50123.65,0.00,'NO',1,1,'2016-12-16 23:11:55','2016-12-16 23:11:55');
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_05_06_142911_clientes',1),(4,'2016_05_06_142912_create_usuario_cliente',1),(5,'2016_05_06_142914_create_ticket_servicio',1),(6,'2016_05_06_145826_correosEnviados',1),(7,'2016_05_06_152910_recorridos',1),(8,'2016_08_01_140048_create_vehiculos_table',1),(9,'2016_08_01_140540_create_tabulador_table',1),(10,'2016_08_01_142913_facturas',1),(11,'2016_08_16_182757_create_detalle_facturas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recorridos`
--

DROP TABLE IF EXISTS `recorridos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recorridos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `origen` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `destino` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Km` int(11) NOT NULL,
  `bono_nocturno` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `vacio` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO',
  `correo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recorridos_correo_id_foreign` (`correo_id`),
  CONSTRAINT `recorridos_correo_id_foreign` FOREIGN KEY (`correo_id`) REFERENCES `correosEnviados` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recorridos`
--

LOCK TABLES `recorridos` WRITE;
/*!40000 ALTER TABLE `recorridos` DISABLE KEYS */;
INSERT INTO `recorridos` VALUES (1,'Maracaibo','Cabimas',58,'NO','NO',1,'2016-12-16 22:58:57','2016-12-16 22:58:57'),(2,'Cabimas','Maracaibo',58,'NO','NO',1,'2016-12-16 22:59:54','2016-12-16 22:59:54');
/*!40000 ALTER TABLE `recorridos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabulador`
--

DROP TABLE IF EXISTS `tabulador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabulador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `presKM` int(11) NOT NULL,
  `presHoras` int(11) NOT NULL,
  `presDesvInternos` int(11) NOT NULL,
  `presDesvExternos` int(11) NOT NULL,
  `presPernocta` int(11) NOT NULL,
  `presAeropuerto` int(11) NOT NULL,
  `porBonoNocturno` int(11) NOT NULL,
  `porBonoFinSemana` int(11) NOT NULL,
  `porFeriado` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabulador`
--

LOCK TABLES `tabulador` WRITE;
/*!40000 ALTER TABLE `tabulador` DISABLE KEYS */;
INSERT INTO `tabulador` VALUES (1,180,4500,4500,6000,20000,7000,20,20,20,'2016-11-01','2017-01-31','2016-12-16 23:23:16','2016-12-16 23:23:16');
/*!40000 ALTER TABLE `tabulador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_servicio`
--

DROP TABLE IF EXISTS `ticket_servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numTicket` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fechaServicio` date NOT NULL,
  `encomienda` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `odc` enum('SI','NO') COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_servicio_id_usuario_foreign` (`id_usuario`),
  CONSTRAINT `ticket_servicio_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios_cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_servicio`
--

LOCK TABLES `ticket_servicio` WRITE;
/*!40000 ALTER TABLE `ticket_servicio` DISABLE KEYS */;
INSERT INTO `ticket_servicio` VALUES (1,'1025234589','2016-12-20','NO','SI',1,1,'2016-12-16 22:49:20','2016-12-16 22:49:20');
/*!40000 ALTER TABLE `ticket_servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('superAdmin','admin','cliente','usuario_cliente','conductor') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cliente',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fulanito','de tal','Alguna direccion','11111111','jlaucho@gmail.com','superAdmin','$2y$10$BCUDAVVL3lN6oalYK1goUu5f/S8HAPa8TEL4DWMzc7D1YerJMLnky',NULL,'2016-12-16 22:39:47','2016-12-16 22:39:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_cliente`
--

DROP TABLE IF EXISTS `usuarios_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_User` int(10) unsigned NOT NULL,
  `id_Cliente` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_cliente_id_user_foreign` (`id_User`),
  KEY `usuarios_cliente_id_cliente_foreign` (`id_Cliente`),
  CONSTRAINT `usuarios_cliente_id_cliente_foreign` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `usuarios_cliente_id_user_foreign` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_cliente`
--

LOCK TABLES `usuarios_cliente` WRITE;
/*!40000 ALTER TABLE `usuarios_cliente` DISABLE KEYS */;
INSERT INTO `usuarios_cliente` VALUES (1,1,1,'2016-12-16 22:46:02','2016-12-16 22:46:02');
/*!40000 ALTER TABLE `usuarios_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `responsabilidadCivil` date NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehiculos_id_user_foreign` (`id_user`),
  CONSTRAINT `vehiculos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (1,'hyundai','Tucson','AA590LI','2017-02-15',1,'2016-12-16 22:41:56','2016-12-16 22:41:56');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-16 16:05:38
