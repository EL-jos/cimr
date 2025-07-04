-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: cimr
-- ------------------------------------------------------
-- Server version	8.0.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('image','file','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentable_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES ('15256dbd-9ee9-4512-80cc-f21a05b52e8a','image','assets/resources/persons/81f89609f58d8f84162960ca85908ffa.jpg','d46b3074-4c1d-40a8-86d3-abd54dae1034','App\\Models\\Person',0,'2025-07-04 12:05:23','2025-07-04 12:05:23'),('16dfdd9b-ad15-43ef-83d4-05fd0dced3d9','image','assets/resources/persons/2fce43e7042a3cb866609142eb89854e.jpg','0665a5f2-7bad-4751-ba7d-5b6b3f451ab1','App\\Models\\Person',0,'2025-07-04 12:05:25','2025-07-04 12:05:25'),('19aa8d98-7346-425e-9c98-d149a1acc942','image','assets/resources/persons/de8e40677d91b5a28bfa716d33651861.jpg','b2418634-3a15-4b6d-9e1e-79c69ff53003','App\\Models\\Person',0,'2025-07-04 12:05:24','2025-07-04 12:05:24'),('1f542ed3-2d9d-4712-8bc4-80790f404073','image','assets/resources/persons/efa526c0480e1f9dea5986095258e46f.jpg','0eaded83-a315-4cd5-95f1-ed5d41e8b6b3','App\\Models\\Person',0,'2025-07-04 12:05:25','2025-07-04 12:05:25'),('25ac9c0b-f196-4411-8a7f-0006896b09eb','image','assets/resources/persons/bab0de2a45ef96ab99122a2c56d44d43.jpg','b860b9e1-d99d-49f9-90d8-acf13abff5c1','App\\Models\\Person',0,'2025-07-04 12:05:28','2025-07-04 12:05:28'),('34111e99-c3bc-4964-8f33-aa18c15ab5af','image','assets/resources/persons/5a62111bc1853a9fb4f22b6102cf628d.jpg','660852c0-568a-409b-a461-ecfec7b034ec','App\\Models\\Person',0,'2025-07-04 12:05:29','2025-07-04 12:05:29'),('3d8b1354-61a5-42e1-b746-65c5e753a72f','image','assets/resources/persons/f87f4c1443d7ce97dd307d92eda9590c.jpg','f18d31fd-fbfa-4b0d-8ddf-d0a294abe271','App\\Models\\Person',0,'2025-07-04 12:05:27','2025-07-04 12:05:27'),('45909c50-8992-45c0-b2a7-67bdba553805','image','assets/resources/persons/7f66f87b23ad0624d5b91216b1374f00.jpg','321b8c07-aa05-4ddb-beb9-6eb46c332d0e','App\\Models\\Person',0,'2025-07-04 12:05:22','2025-07-04 12:05:22'),('56dc13fb-cb2d-4831-8724-84f86d41ebe1','image','assets/resources/persons/8267411132aa9d2c21b1dfd38e3c04d6.jpg','125e46e3-f524-4d3e-8368-fc2e804dbcd7','App\\Models\\Person',0,'2025-07-04 12:05:27','2025-07-04 12:05:27'),('79754d42-8ee1-4e8a-a779-06519962778a','image','assets/resources/persons/a14d2e3e8d84a565cb836506613fa6b2.jpg','b62e5996-5f0d-43d6-bae6-fbcbafb44c64','App\\Models\\Person',0,'2025-07-04 12:05:24','2025-07-04 12:05:24'),('8abe140a-6af3-426d-a567-c550a049f081','image','assets/resources/persons/ec21337e544af15d44a4fa3d1cbeba0e.jpg','27f1d038-65b7-4aee-bd25-df1ca68d21df','App\\Models\\Person',0,'2025-07-04 12:05:23','2025-07-04 12:05:23'),('9f557e06-958f-45ee-b84e-68b1826b5afa','image','assets/resources/persons/cca09c9cc7d78136d663c3fd9e3e7204.jpg','a7b91a53-3d75-4069-964f-e5d0787ac36c','App\\Models\\Person',0,'2025-07-04 12:05:27','2025-07-04 12:05:27'),('a49edef4-fbef-4650-a364-4abd89d6170f','image','assets/resources/persons/35105563e5c2553c953f8a0095fa5f7e.jpg','563d201f-633d-4121-b596-36d5c02d303a','App\\Models\\Person',0,'2025-07-04 12:05:28','2025-07-04 12:05:28'),('a9c92bd3-c74a-4d69-a789-d89c15c13e70','image','assets/resources/persons/075859dd50d15fae2e3b75248d771d0c.jpg','e391fe6f-313f-4bbd-92c1-875fdc6d1d7c','App\\Models\\Person',0,'2025-07-04 12:05:26','2025-07-04 12:05:26'),('b393b97f-86fb-44f1-83a2-8f0a01896f58','image','assets/resources/persons/2293b18286e87e218a46d6b61c636a50.jpg','e9fabf28-22a0-49ed-9488-a95d1d9adc0c','App\\Models\\Person',0,'2025-07-04 12:05:22','2025-07-04 12:05:22'),('c4f01293-e4e7-4e3e-a6b1-4d941bb6e544','image','assets/resources/persons/4aafccacedc940703e6e51f64f53cd5b.jpg','86b0a5a5-7944-455c-b36e-fefadb4c73e1','App\\Models\\Person',0,'2025-07-04 12:05:24','2025-07-04 12:05:24'),('c626ba04-f77e-4338-9dbe-7a2177d95c23','image','assets/resources/persons/c68472d43c1a0eb3d886c8d89c58b327.jpg','47198eee-a399-41ec-80c5-2043865e011e','App\\Models\\Person',0,'2025-07-04 12:05:25','2025-07-04 12:05:25'),('ca9e8f4f-a31e-448f-b878-81b0d6d20582','image','assets/resources/persons/5c0bc4a7c6bbeddeb053d632fef540b2.jpg','35c9c921-d130-478c-8e4a-955d3efa9779','App\\Models\\Person',0,'2025-07-04 12:05:26','2025-07-04 12:05:26'),('ce7abbcf-0bee-4900-8369-c9b3590fdc16','image','assets/resources/persons/3a972d51680692876594c0446bdfeec2.jpg','45248bbe-c52b-4308-84fc-48254c17d656','App\\Models\\Person',0,'2025-07-04 12:05:28','2025-07-04 12:05:28'),('db45124d-4f72-412c-b619-78485bd3c612','image','assets/resources/persons/b28cee8fc226f13ef4bcb7830684343b.jpg','2474f6ae-86bf-439d-ae36-f163ec2dc0eb','App\\Models\\Person',0,'2025-07-04 12:05:26','2025-07-04 12:05:26');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genders`
--

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` VALUES (1,'homme',NULL,'2025-06-12 14:04:40','2025-06-12 14:20:07'),(2,'femme',NULL,'2025-06-12 14:44:39','2025-06-13 08:43:27');
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_person`
--

DROP TABLE IF EXISTS `leave_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leave_person` (
  `leave_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `leave_person_leave_id_foreign` (`leave_id`),
  KEY `leave_person_person_id_foreign` (`person_id`),
  CONSTRAINT `leave_person_leave_id_foreign` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `leave_person_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_person`
--

LOCK TABLES `leave_person` WRITE;
/*!40000 ALTER TABLE `leave_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaves` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `number` int unsigned NOT NULL,
  `type_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` bigint unsigned DEFAULT NULL,
  `person_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `leaves_type_id_foreign` (`type_id`),
  KEY `leaves_status_id_foreign` (`status_id`),
  KEY `leaves_person_id_foreign` (`person_id`),
  CONSTRAINT `leaves_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `leaves_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `leaves_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaves`
--

LOCK TABLES `leaves` WRITE;
/*!40000 ALTER TABLE `leaves` DISABLE KEYS */;
INSERT INTO `leaves` VALUES ('02bfea8a-49ac-45d4-9580-62ab668caa8e','2024-12-20','2024-12-23',1,11,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'86b0a5a5-7944-455c-b36e-fefadb4c73e1'),('032a364a-3877-493a-8889-dd867502a159','2025-03-07','2025-03-24',11,12,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('0883f00d-fdfb-4d86-aca0-97b53e171bd6','2025-06-08','2025-06-10',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b62e5996-5f0d-43d6-bae6-fbcbafb44c64'),('0dda9798-2a04-4ef9-855e-a5edf202cc4e','2024-08-16','2024-08-20',2,8,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('181b4f3e-0c3b-49aa-a0be-32250e6cc971','2025-05-27','2025-05-30',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'d46b3074-4c1d-40a8-86d3-abd54dae1034'),('1aff2d89-10f9-4ac9-9ea8-5b71f9a62e2d','2024-09-05','2024-09-06',1,11,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('1ed4814e-c2e2-435a-81f1-105ea7e00adf','2025-05-15','2025-05-19',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('2384a3d4-2718-4067-b4ff-76035b96b581','2024-12-06','2024-12-11',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('27194e44-b2f6-427f-b06b-d879d6eb41c7','2024-11-04','2024-11-06',2,7,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'45248bbe-c52b-4308-84fc-48254c17d656'),('2d273821-682c-462d-8dcb-a82d2b4435ce','2024-12-21','2024-12-24',2,7,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'d46b3074-4c1d-40a8-86d3-abd54dae1034'),('2df5c534-60b4-4adf-b40e-f04d2d516fef','2025-05-18','2025-05-20',2,10,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'a7b91a53-3d75-4069-964f-e5d0787ac36c'),('326c684f-76bd-427e-ac44-d17d00961004','2024-09-12','2024-09-16',2,8,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'2474f6ae-86bf-439d-ae36-f163ec2dc0eb'),('330ab1b7-2c38-4690-b098-19d397268afd','2024-12-26','2024-12-31',3,3,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('33e6ea36-f092-4a8d-a30a-cb6a13497b81','2025-06-26','2025-07-02',4,1,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'2474f6ae-86bf-439d-ae36-f163ec2dc0eb'),('367032cc-4ce1-4cc3-becd-298e7f54dc8c','2025-03-30','2025-04-01',2,8,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'27f1d038-65b7-4aee-bd25-df1ca68d21df'),('45feecf9-38fa-4d38-a343-cb4e53e63842','2025-05-02','2025-05-08',4,1,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'47198eee-a399-41ec-80c5-2043865e011e'),('481e125d-90e6-4126-92aa-84de1071ede6','2025-04-11','2025-04-15',2,10,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('48efbabf-9553-42c5-862f-b7d803b313c9','2025-07-21','2025-07-24',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'f18d31fd-fbfa-4b0d-8ddf-d0a294abe271'),('4cc3f135-37cc-4da4-9d82-4923a7a475e9','2024-12-24','2024-12-27',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0eaded83-a315-4cd5-95f1-ed5d41e8b6b3'),('4d43f057-b856-4d6d-beeb-42da17a08fa5','2024-11-30','2024-12-04',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('4f7a7577-ff3f-493b-9d2d-858c0a8c45b5','2024-08-30','2024-09-03',2,7,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('58f9bbb4-4133-4cfb-8b46-ee245ae721ad','2025-02-16','2025-02-18',2,8,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b62e5996-5f0d-43d6-bae6-fbcbafb44c64'),('603463c0-6ad3-4fef-90af-cacab9de54c1','2025-07-10','2025-07-15',3,2,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'d46b3074-4c1d-40a8-86d3-abd54dae1034'),('630760d6-b628-4174-9809-69605aaa8a43','2024-12-28','2024-12-30',1,11,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0665a5f2-7bad-4751-ba7d-5b6b3f451ab1'),('6a30ed75-23c0-4031-9722-f3ea18fa3081','2024-09-23','2024-09-25',2,10,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('71ff3699-978d-4b4c-b572-dcb9d26e9fcb','2025-07-07','2025-07-10',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0eaded83-a315-4cd5-95f1-ed5d41e8b6b3'),('737f4f36-fc12-4c9b-a265-926aa0d27ca3','2024-07-21','2024-08-01',9,12,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0eaded83-a315-4cd5-95f1-ed5d41e8b6b3'),('749bd853-807b-449e-9f0c-a1e7302c9cfc','2025-02-20','2025-02-24',2,5,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('74f9e5f1-b970-4579-b0a7-8566d9c3f499','2024-12-11','2024-12-16',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('79343ff4-1ee1-4c22-b241-93bbca6e7901','2024-08-06','2024-08-09',3,2,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0665a5f2-7bad-4751-ba7d-5b6b3f451ab1'),('7a366984-93bf-469d-b9ae-ab220cc8c718','2024-07-20','2024-07-23',2,10,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'a7b91a53-3d75-4069-964f-e5d0787ac36c'),('81896d5e-030f-4e03-b8be-dc2eca924373','2024-10-11','2024-10-15',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'86b0a5a5-7944-455c-b36e-fefadb4c73e1'),('8cfc6c61-7529-451e-8528-309cff974019','2025-05-01','2025-05-05',2,7,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'b860b9e1-d99d-49f9-90d8-acf13abff5c1'),('8e3eb6f0-2f50-4c4c-9d8a-0287dfea50d3','2025-07-19','2025-07-22',2,8,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'125e46e3-f524-4d3e-8368-fc2e804dbcd7'),('92d56535-c4e1-42bd-b286-97aa6ac66571','2024-11-15','2024-11-20',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'660852c0-568a-409b-a461-ecfec7b034ec'),('99198f52-14f0-4b49-88df-1b9db4490783','2024-12-28','2025-01-01',3,3,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'563d201f-633d-4121-b596-36d5c02d303a'),('a8999af6-2c05-41d1-837b-c28b82997af6','2024-07-11','2024-07-15',2,6,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'125e46e3-f524-4d3e-8368-fc2e804dbcd7'),('bac765ba-0a30-4bed-9dae-95f8c190a8b5','2024-10-06','2024-10-09',3,3,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'27f1d038-65b7-4aee-bd25-df1ca68d21df'),('bfa9c895-12a3-4d98-b65f-6adeefc37918','2024-07-17','2024-07-19',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'e9fabf28-22a0-49ed-9488-a95d1d9adc0c'),('ca7871ed-74b4-4ec7-9a25-9040abf79b8e','2024-10-14','2024-10-15',1,11,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'563d201f-633d-4121-b596-36d5c02d303a'),('cabdb55a-db89-4f01-aefa-f7db82057ac7','2025-05-30','2025-06-04',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'d46b3074-4c1d-40a8-86d3-abd54dae1034'),('d6cbf273-6ddf-4ecb-a0a2-3d72241b7da1','2024-09-01','2024-09-03',2,6,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'86b0a5a5-7944-455c-b36e-fefadb4c73e1'),('dc4cf41a-4113-4bae-9e65-9a639fcaf77a','2025-03-18','2025-03-20',2,5,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'f18d31fd-fbfa-4b0d-8ddf-d0a294abe271'),('e1add1a7-5527-4b68-93eb-3a2f325cc4b3','2024-07-31','2024-08-01',1,11,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'e9fabf28-22a0-49ed-9488-a95d1d9adc0c'),('e3c65fc8-fb2f-40de-8ddc-5f8f224a60ef','2024-10-14','2024-10-16',2,5,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'e9fabf28-22a0-49ed-9488-a95d1d9adc0c'),('e69c6f53-74cf-4499-97e1-997e53109cb5','2024-07-14','2024-07-16',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'a7b91a53-3d75-4069-964f-e5d0787ac36c'),('e863c9ff-b1b2-4388-bdb1-5d5f8eb81512','2025-04-07','2025-04-10',3,4,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'e391fe6f-313f-4bbd-92c1-875fdc6d1d7c'),('ee618e07-0868-4a79-9013-21ce8ab39ea7','2024-08-28','2024-08-30',2,9,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'35c9c921-d130-478c-8e4a-955d3efa9779'),('fb80633a-9287-4b7c-8ba8-279f72469d38','2024-08-02','2024-08-06',2,7,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'0665a5f2-7bad-4751-ba7d-5b6b3f451ab1'),('fe46e713-b1cf-40d6-8da9-dcfa4435e6ad','2024-11-29','2024-12-03',2,6,'2025-07-04 12:06:02','2025-07-04 12:06:02',1,'47198eee-a399-41ec-80c5-2043865e011e');
/*!40000 ALTER TABLE `leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marital_statuses`
--

DROP TABLE IF EXISTS `marital_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marital_statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marital_statuses`
--

LOCK TABLES `marital_statuses` WRITE;
/*!40000 ALTER TABLE `marital_statuses` DISABLE KEYS */;
INSERT INTO `marital_statuses` VALUES (1,'Célibataire',NULL,'2025-06-12 14:29:01','2025-06-12 14:32:33'),(2,'Divorcé(e)',NULL,'2025-06-12 14:30:20','2025-06-12 14:32:59'),(3,'Marié(e)',NULL,'2025-06-12 14:33:15','2025-06-12 14:33:15'),(4,'Veuf(ve)',NULL,'2025-06-12 14:33:31','2025-06-12 14:33:31');
/*!40000 ALTER TABLE `marital_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (43,'2014_10_12_000000_create_users_table',1),(44,'2014_10_12_100000_create_password_resets_table',1),(45,'2019_08_19_000000_create_failed_jobs_table',1),(46,'2019_12_14_000001_create_personal_access_tokens_table',1),(47,'2025_06_12_131027_create_genders_table',1),(48,'2025_06_12_131047_create_marital_statuses_table',1),(49,'2025_06_12_131104_create_posts_table',1),(50,'2025_06_12_131118_create_roles_table',1),(51,'2025_06_12_131132_create_types_table',1),(52,'2025_06_12_131207_create_leaves_table',1),(53,'2025_06_12_131247_create_people_table',1),(54,'2025_06_12_132753_create_pivot_table_person_role',1),(55,'2025_06_12_133007_create_pivot_table_leave_person',1),(57,'2025_06_12_162055_add_nb_day_column_in_types_table',2),(58,'2025_06_13_132008_create_documents_table',3),(59,'2025_06_27_084942_create_statuses_table',4),(60,'2025_06_27_085203_add_status_id_to_leaves_table',5),(61,'2025_06_27_091130_add_person_id_column_in_leaves_table',6),(62,'2025_06_27_093336_add_hire_date_to_persons_table',7),(63,'2025_06_27_154504_add_password_column_in_persons_table',8),(64,'2025_07_04_111450_add_email_column_in_persons_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `person_role`
--

DROP TABLE IF EXISTS `person_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `person_role` (
  `person_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `person_role_person_id_foreign` (`person_id`),
  KEY `person_role_role_id_foreign` (`role_id`),
  CONSTRAINT `person_role_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `person_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `person_role`
--

LOCK TABLES `person_role` WRITE;
/*!40000 ALTER TABLE `person_role` DISABLE KEYS */;
INSERT INTO `person_role` VALUES ('321b8c07-aa05-4ddb-beb9-6eb46c332d0e',2,NULL,NULL),('e9fabf28-22a0-49ed-9488-a95d1d9adc0c',2,NULL,NULL),('27f1d038-65b7-4aee-bd25-df1ca68d21df',1,NULL,NULL),('d46b3074-4c1d-40a8-86d3-abd54dae1034',1,NULL,NULL),('b2418634-3a15-4b6d-9e1e-79c69ff53003',3,NULL,NULL),('86b0a5a5-7944-455c-b36e-fefadb4c73e1',1,NULL,NULL),('b62e5996-5f0d-43d6-bae6-fbcbafb44c64',2,NULL,NULL),('47198eee-a399-41ec-80c5-2043865e011e',1,NULL,NULL),('0665a5f2-7bad-4751-ba7d-5b6b3f451ab1',1,NULL,NULL),('0eaded83-a315-4cd5-95f1-ed5d41e8b6b3',4,NULL,NULL),('35c9c921-d130-478c-8e4a-955d3efa9779',3,NULL,NULL),('2474f6ae-86bf-439d-ae36-f163ec2dc0eb',1,NULL,NULL),('e391fe6f-313f-4bbd-92c1-875fdc6d1d7c',1,NULL,NULL),('a7b91a53-3d75-4069-964f-e5d0787ac36c',3,NULL,NULL),('f18d31fd-fbfa-4b0d-8ddf-d0a294abe271',1,NULL,NULL),('125e46e3-f524-4d3e-8368-fc2e804dbcd7',4,NULL,NULL),('b860b9e1-d99d-49f9-90d8-acf13abff5c1',3,NULL,NULL),('563d201f-633d-4121-b596-36d5c02d303a',2,NULL,NULL),('45248bbe-c52b-4308-84fc-48254c17d656',2,NULL,NULL),('660852c0-568a-409b-a461-ecfec7b034ec',3,NULL,NULL);
/*!40000 ALTER TABLE `person_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persons` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `kids` int unsigned NOT NULL,
  `gender_id` bigint unsigned NOT NULL,
  `marital_status_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persons_gender_id_foreign` (`gender_id`),
  CONSTRAINT `persons_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES ('0665a5f2-7bad-4751-ba7d-5b6b3f451ab1','Mckayla','Eichmann','1975-11-28',1382223745,2,1,3,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1983-09-06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','precious55@example.org'),('0eaded83-a315-4cd5-95f1-ed5d41e8b6b3','Bernadine','Hane','2023-11-08',1127304690,2,1,10,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1992-04-26','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','angelo43@example.org'),('125e46e3-f524-4d3e-8368-fc2e804dbcd7','Kayley','Beahan','1972-03-15',2044210220,2,2,8,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1972-03-19','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','kade.gerlach@example.net'),('2474f6ae-86bf-439d-ae36-f163ec2dc0eb','Abel','Roberts','1978-01-19',1022274264,2,4,7,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1987-07-22','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','montana.quitzon@example.net'),('27f1d038-65b7-4aee-bd25-df1ca68d21df','Piper','VonRueden','2000-06-29',412947721,1,1,3,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1997-09-29','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','nstanton@example.com'),('321b8c07-aa05-4ddb-beb9-6eb46c332d0e','Reyes','Davis','1989-06-02',1051552604,2,2,7,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2014-02-13','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','stanford30@example.com'),('35c9c921-d130-478c-8e4a-955d3efa9779','Maryjane','Sawayn','1995-02-03',1872892886,1,2,4,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1971-05-26','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ratke.georgianna@example.net'),('45248bbe-c52b-4308-84fc-48254c17d656','Danyka','Halvorson','2012-05-23',205723217,2,2,7,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1990-06-11','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','crawford49@example.com'),('47198eee-a399-41ec-80c5-2043865e011e','Yazmin','Kris','1987-11-12',1773642494,2,3,8,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2022-06-30','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','xgutmann@example.com'),('563d201f-633d-4121-b596-36d5c02d303a','Quincy','Klein','1989-09-30',156602560,2,3,2,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2004-12-04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','tracy18@example.com'),('660852c0-568a-409b-a461-ecfec7b034ec','Ursula','Emard','1996-07-20',514635097,2,1,8,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1985-01-31','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','damian.wuckert@example.com'),('86b0a5a5-7944-455c-b36e-fefadb4c73e1','Jack','Cronin','1996-03-29',254596983,2,3,9,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2022-02-08','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','mbeer@example.net'),('a7b91a53-3d75-4069-964f-e5d0787ac36c','Ezra','Keeling','1985-04-04',350264311,2,4,1,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2014-11-05','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fwisoky@example.org'),('b2418634-3a15-4b6d-9e1e-79c69ff53003','Ron','Nitzsche','2004-05-14',621571057,1,2,8,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1995-06-30','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','mante.kavon@example.com'),('b62e5996-5f0d-43d6-bae6-fbcbafb44c64','Vicente','Grady','1985-02-28',883719264,2,1,3,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2007-11-23','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','kian.williamson@example.net'),('b860b9e1-d99d-49f9-90d8-acf13abff5c1','Janick','Fadel','1999-04-12',647062723,1,3,9,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1990-12-23','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','sschamberger@example.com'),('d46b3074-4c1d-40a8-86d3-abd54dae1034','Jordi','Barrows','1987-10-28',1696451152,2,3,5,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2016-09-30','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','stiedemann.wilford@example.net'),('e391fe6f-313f-4bbd-92c1-875fdc6d1d7c','Jackson','Herzog','1980-10-01',1955622575,2,2,1,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2008-08-04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','akreiger@example.org'),('e9fabf28-22a0-49ed-9488-a95d1d9adc0c','Jessica','Schmeler','2019-06-22',749483328,1,4,10,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','2019-06-15','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','zosinski@example.org'),('f18d31fd-fbfa-4b0d-8ddf-d0a294abe271','Kurtis','Cartwright','2015-02-13',697302304,1,4,5,NULL,'2025-07-04 12:05:21','2025-07-04 12:05:21','1991-06-03','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','dibbert.giovanni@example.org');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Directeur financier',NULL,'2025-06-12 14:45:42','2025-06-12 14:49:41'),(2,'Agent administratif',NULL,'2025-06-12 14:50:56','2025-06-12 14:50:56'),(3,'Assistant RH',NULL,'2025-06-12 14:51:06','2025-06-12 14:51:06'),(4,'Chef de projet',NULL,'2025-06-12 14:51:20','2025-06-12 14:51:20'),(5,'Comptable',NULL,'2025-06-12 14:51:28','2025-06-12 14:51:28'),(6,'Consultant senior',NULL,'2025-06-12 14:51:37','2025-06-12 14:51:37'),(7,'Manager IT',NULL,'2025-06-12 14:51:51','2025-06-12 14:51:51'),(8,'Responsable RH',NULL,'2025-06-12 14:51:59','2025-06-12 14:51:59'),(9,'Secrétaire',NULL,'2025-06-12 14:52:12','2025-06-12 14:52:12'),(10,'Technicien support',NULL,'2025-06-12 14:52:29','2025-06-12 14:52:29');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrateur',NULL,'2025-06-12 15:06:30','2025-06-13 10:18:54'),(2,'Employé',NULL,'2025-06-12 15:06:43','2025-06-12 15:09:22'),(3,'Cadre',NULL,'2025-06-12 15:06:49','2025-06-12 15:09:24'),(4,'RH',NULL,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `statuses_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'En attente',NULL,NULL),(2,'Approuvé',NULL,NULL),(3,'Rejeté',NULL,NULL);
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nb_days` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Mariage du salarié',NULL,'2025-06-12 15:17:09','2025-06-12 15:25:36',4),(2,'Naissance d\'un enfant',NULL,'2025-06-12 15:26:46','2025-06-12 15:26:46',3),(3,'Décès du conjoint',NULL,'2025-06-12 15:27:12','2025-06-12 15:27:12',3),(4,'Décès du père ou de la mère',NULL,'2025-06-12 15:27:48','2025-06-12 15:27:48',3),(5,'Mariage d\'un enfant',NULL,'2025-06-12 15:29:09','2025-06-12 15:29:09',2),(6,'Décès d\'un enfant',NULL,'2025-06-12 15:29:25','2025-06-12 15:29:25',2),(7,'Mariage ou décès d\'un beau fils',NULL,'2025-06-12 15:29:54','2025-06-12 15:29:54',2),(8,'Décès d\'un ascendant du conjoint',NULL,'2025-06-12 15:30:31','2025-06-12 15:30:31',2),(9,'Circoncision',NULL,'2025-06-12 15:30:56','2025-06-12 15:30:56',2),(10,'Opération chirugicale du conjoint ou d\'un enfant',NULL,'2025-06-12 15:31:36','2025-06-12 15:31:36',2),(11,'Déménagement',NULL,'2025-06-12 15:31:47','2025-06-12 15:31:47',1),(12,'Ordinaire',NULL,'2025-06-12 15:32:37','2025-06-12 15:32:37',0);
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2025-07-04 14:07:49
