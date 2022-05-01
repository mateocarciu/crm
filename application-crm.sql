-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for application-crm
CREATE DATABASE IF NOT EXISTS `application-crm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `application-crm`;

-- Dumping structure for table application-crm.achats
CREATE TABLE IF NOT EXISTS `achats` (
  `IdAchat` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `IdCli` int(11) NOT NULL,
  `IdProd` int(11) NOT NULL,
  `Qte` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdAchat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.achats: ~0 rows (approximately)
/*!40000 ALTER TABLE `achats` DISABLE KEYS */;
INSERT INTO `achats` (`IdAchat`, `IdCli`, `IdProd`, `Qte`, `created_at`, `updated_at`) VALUES
	(1, 5, 1, 21, '2022-04-13 08:45:40', '2022-04-13 08:45:40');
/*!40000 ALTER TABLE `achats` ENABLE KEYS */;

-- Dumping structure for table application-crm.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `IdCli` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NomCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PreCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CpCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VilleCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MailCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelCli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdCli`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.clients: ~1 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`IdCli`, `NomCli`, `PreCli`, `AdrCli`, `CpCli`, `VilleCli`, `MailCli`, `TelCli`, `created_at`, `updated_at`) VALUES
	(5, 'CARCIU', 'Mateo', '5 Rue de la Saone', '71100', 'Luxxx', 'ddL@GMAIL.com', '0766780825', '2022-04-13 08:22:22', '2022-04-18 16:42:26'),
	(6, 'TEST', 'TEST', 'AAA @gmail.com', '71100', 'dada', 'dL@GMAIL.com', '0766780825', '2022-04-18 17:27:54', '2022-04-18 17:27:54');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table application-crm.commercials
CREATE TABLE IF NOT EXISTS `commercials` (
  `IdCom` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NomCom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PreCom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelCom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MailCom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdCom`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.commercials: ~2 rows (approximately)
/*!40000 ALTER TABLE `commercials` DISABLE KEYS */;
INSERT INTO `commercials` (`IdCom`, `NomCom`, `PreCom`, `TelCom`, `MailCom`, `created_at`, `updated_at`) VALUES
	(1, 'Mateo', 'Carciu', '0123456789', 'uz@gmail.com', '2022-04-13 09:02:10', '2022-04-18 16:35:02'),
	(2, 'COMMERCIAL1', 'COMMERCIAL1', '0123456789', 'COMMERCIAL1@GMAIL.COM', '2022-04-18 17:28:39', '2022-04-18 17:28:39');
/*!40000 ALTER TABLE `commercials` ENABLE KEYS */;

-- Dumping structure for table application-crm.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table application-crm.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table application-crm.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table application-crm.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table application-crm.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table application-crm.produits
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProd` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `TypeProd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrixProd` int(11) NOT NULL,
  `NomProd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LibProd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdProd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.produits: ~2 rows (approximately)
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` (`IdProd`, `TypeProd`, `PrixProd`, `NomProd`, `LibProd`, `created_at`, `updated_at`) VALUES
	(1, 'cacadada', 2100121, 'pipiIIada', 'onmelangeaaaaaaaa', '2022-04-13 08:39:20', '2022-04-13 08:43:58');
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;

-- Dumping structure for table application-crm.prospects
CREATE TABLE IF NOT EXISTS `prospects` (
  `IdPro` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NomPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrePro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CpPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VillePro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MailPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelPro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdPro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.prospects: ~2 rows (approximately)
/*!40000 ALTER TABLE `prospects` DISABLE KEYS */;
INSERT INTO `prospects` (`IdPro`, `NomPro`, `PrePro`, `AdrPro`, `CpPro`, `VillePro`, `MailPro`, `TelPro`, `created_at`, `updated_at`) VALUES
	(1, 'Carciu', 'Carciu', '5 Rue de la Saone', '71100', 'Lux', 'dadada@gmail.com', '0766780825', '2022-04-13 08:53:15', '2022-04-18 16:23:23'),
	(2, 'PROSPECT', 'PROSPECT', 'PROSPECT', '71100', 'Lux', 'PROSPECT@GMAIL.COM', '0766780825', '2022-04-18 17:28:20', '2022-04-18 17:28:20');
/*!40000 ALTER TABLE `prospects` ENABLE KEYS */;

-- Dumping structure for table application-crm.rendez_vous
CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `IdRdv` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `DateRdv` datetime NOT NULL,
  `IdCli` int(11) NOT NULL,
  `IdPro` int(11) NOT NULL,
  `IdCom` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdRdv`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.rendez_vous: ~3 rows (approximately)
/*!40000 ALTER TABLE `rendez_vous` DISABLE KEYS */;
INSERT INTO `rendez_vous` (`IdRdv`, `DateRdv`, `IdCli`, `IdPro`, `IdCom`, `created_at`, `updated_at`) VALUES
	(1, '2022-04-14 00:00:00', 5, 1, 1, '2022-04-13 09:04:07', '2022-04-13 09:04:07'),
	(2, '2022-04-19 00:00:00', 5, 1, 1, '2022-04-18 17:27:23', '2022-04-18 17:27:23'),
	(3, '2022-04-20 00:00:00', 6, 2, 2, '2022-04-18 17:29:12', '2022-04-18 17:29:12');
/*!40000 ALTER TABLE `rendez_vous` ENABLE KEYS */;

-- Dumping structure for table application-crm.users
CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table application-crm.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'azda', 'carciu98@gmail.com', NULL, '$2y$10$ViPHEMv.vuv.iGRKIciX3OxbAsPcEc99hTfOwdfEqHKwA7U0yKpCa', NULL, '2022-04-19 18:44:41', '2022-04-19 18:44:41'),
	(2, 'Mateo Carciu', 'mateo@gmail.com', NULL, '$2y$10$yRHGK5OslqVl34SxOuBV1O/3ES7xzAvMGyc.yTwvEcw9jUhaLkpyK', NULL, '2022-04-19 18:46:14', '2022-04-19 18:46:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
