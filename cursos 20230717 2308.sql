-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.11


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema cursos
--

CREATE DATABASE IF NOT EXISTS cursos;
USE cursos;

--
-- Definition of table `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `curso` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `duracion` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  `docente` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_curso_1` (`docente`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curso`
--

/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`id`,`curso`,`descripcion`,`duracion`,`fecha`,`docente`,`created_at`,`updated_at`,`precio`) VALUES 
 (1,'programacion .net','descrsssss',20,'2023-07-13 00:00:00','ggggggggg','2023-07-17 22:41:20','2023-07-18 03:41:20','30.00'),
 (3,'Programación xSSSSSSSSx333x111111x','Curso programación web xxxx',44444,'2023-07-20 00:00:00','Andres F. Pérez','2023-07-17 22:46:52','2023-07-18 03:46:52','10.34'),
 (4,'sdsadasdasd','ddddd',12,'2023-07-20 00:00:00','andres Perez','2023-07-18 03:32:25','2023-07-18 03:32:25','16.00'),
 (6,'Ciencias','estas son',10,'2023-07-20 00:00:00','andres Perez','2023-07-17 22:44:54','2023-07-18 03:44:54','11.00'),
 (7,'Ciencias 1','sASAsasass',5,'2023-07-19 00:00:00','Lina C11','2023-07-17 22:58:47','2023-07-18 03:58:47','20.99');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;


--
-- Definition of table `docente`
--

DROP TABLE IF EXISTS `docente`;
CREATE TABLE `docente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docente`
--

/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` (`id`,`nombre`,`documento`,`correo`,`created_at`,`updated_at`) VALUES 
 (1,'Andrés Perez','8063972','andres109@gmail.com','2023-07-17 17:07:57','0000-00-00 00:00:00'),
 (4,'Lina C11','2020202020211','pep122222211e@gmail.com','2023-07-17 17:44:23','2023-07-17 22:44:23'),
 (5,'Lina C11 xxxx','20202044442020211','pxxxxxxxep122222211e@gmail.com','2023-07-17 23:26:59','2023-07-17 23:26:59'),
 (6,'Lina C11 xxxx','sasasas','eeeee@sfdf.com','2023-07-18 00:39:28','2023-07-18 00:39:28');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;


--
-- Definition of table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;


--
-- Definition of table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES 
 (1,'2014_10_12_000000_create_users_table',1),
 (2,'2014_10_12_100000_create_password_resets_table',1),
 (3,'2019_08_19_000000_create_failed_jobs_table',1),
 (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Definition of table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


--
-- Definition of table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
