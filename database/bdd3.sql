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
INSERT INTO `documents` VALUES ('094741d9-4968-4277-a3cd-7fcea741066c','image','assets/resources/persons/dd8f3186-c298-4da8-8f20-3f3a86d9581a.jpg','626c0c81-1562-44a7-9936-973628ba07f7','App\\Models\\Person',0,'2025-06-13 14:12:12','2025-06-13 14:12:12'),('2585ae9b-14e8-4474-a184-1907da4e5c5d','image','assets/resources/persons/b4bea2ad-c0bf-4858-8a48-44c0cf199ac6.jpg','58a2ac0a-ef3f-4954-aa20-5880a935cb5d','App\\Models\\Person',0,'2025-06-16 09:31:22','2025-06-16 09:31:22'),('32a2fe32-0332-4b9c-9fd6-76babb1c2842','image','assets/resources/persons/34f5e0f3-172d-4cca-81d8-4043ea9b7bcf.jpg','dbc8a7dd-90ff-43a7-b3c4-06767fa226e0','App\\Models\\Person',0,'2025-06-13 14:00:25','2025-06-13 14:00:25'),('5bf34de0-81ff-4a6e-91e1-5cb0bc4ed52e','image','assets/resources/persons/391fdc7b-9982-4808-a77d-7a37c5df19cc.jpg','465056f5-13fb-452c-816b-62e935e9c59e','App\\Models\\Person',0,'2025-06-30 12:19:46','2025-06-30 12:19:46'),('5d21ec46-84b8-4f49-98f8-8b39fc326366','image','assets/resources/persons/a85afaac-468b-48c1-be60-976363a78f81.jpg','0e188c9a-aae3-4a4f-b607-a641e62966f1','App\\Models\\Person',0,'2025-06-30 12:00:33','2025-06-30 12:00:33'),('73dd2961-8851-46aa-abb4-426066b2b72c','image','assets/resources/persons/46b4597c-1056-49a9-afdd-1a84c4187d9d.jpg','50e17b4f-0be3-41d6-8f5d-575b60d2f1d2','App\\Models\\Person',0,'2025-06-30 12:24:37','2025-06-30 12:24:37'),('d310aeb7-078b-440d-babe-2cc2c447241e','image','assets/resources/persons/d53e82db-4102-4c39-8ff8-23ff44f256d8.jpg','29d6b56d-f8b4-4ba1-abc6-146c39f12db1','App\\Models\\Person',0,'2025-06-13 14:13:28','2025-06-13 14:13:28'),('dfdec71d-4b5d-412b-b3df-d238b7565bff','image','assets/resources/persons/54acc50a-3d29-4339-8410-b9f08fe3cff5.png','746a6f15-ecde-4f2b-a288-f0d9863e0253','App\\Models\\Person',0,'2025-06-30 12:05:51','2025-06-30 12:05:51');
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
INSERT INTO `leaves` VALUES ('01c3d1b4-e972-4aba-8d94-357585bfd090','2024-11-05','2024-11-08',3,2,'2025-06-27 10:19:25','2025-06-27 14:37:52',3,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('1939d52c-0c0a-43d1-910e-e09f28864d1f','2025-06-02','2025-06-05',3,2,'2025-06-30 12:27:50','2025-06-30 12:27:50',1,'50e17b4f-0be3-41d6-8f5d-575b60d2f1d2'),('1d58b426-5732-400c-975e-81da4903b998','2025-01-10','2025-01-15',3,2,'2025-06-27 10:19:25','2025-06-27 14:31:49',2,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('228d3036-7bde-413c-b495-1be27a00ea4f','2024-07-20','2024-07-23',2,8,'2025-06-27 10:19:25','2025-06-27 14:39:19',3,'626c0c81-1562-44a7-9936-973628ba07f7'),('25f48818-8f6a-425e-a513-336ac763a552','2024-08-20','2024-08-26',4,1,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('274c1b00-c5e2-4277-8eba-ee66b9458ff1','2024-09-23','2024-09-25',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('2e36b18e-134f-4dd5-a1c7-ebb00c51dcb7','2025-05-28','2025-06-02',3,4,'2025-06-27 10:19:25','2025-06-27 15:04:35',2,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('2f272772-051b-4805-b6fa-13ee4fd3a635','2025-03-20','2025-03-25',3,2,'2025-06-27 10:19:25','2025-06-27 14:39:32',3,'626c0c81-1562-44a7-9936-973628ba07f7'),('308a14d9-1a68-4e74-95e2-9109b98bcdaa','2025-04-24','2025-04-28',2,9,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('37472302-c0ad-4c30-8108-b71489d57816','2025-07-21','2025-07-23',2,10,'2025-06-27 10:19:25','2025-06-27 14:39:52',3,'626c0c81-1562-44a7-9936-973628ba07f7'),('39f58fe4-f6ca-4232-9250-2405603fb10d','2025-04-08','2025-05-01',17,12,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('3b61086c-b9ad-4fde-b5c9-7febff18bf6e','2024-07-09','2024-07-11',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('3ea5cf8e-c556-4bd8-9f9b-b97433c5a8ec','2025-07-01','2025-08-01',23,12,'2025-06-30 12:26:50','2025-06-30 12:26:50',1,'50e17b4f-0be3-41d6-8f5d-575b60d2f1d2'),('4c05910c-889d-4785-ab61-da6db2e1c0f1','2024-11-19','2024-11-21',2,5,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('4e3c4a43-aeed-46eb-90ab-8d815a34c5c2','2024-12-06','2024-12-10',2,7,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('58e77b74-6a89-489e-9e21-4189d8c993f3','2025-05-23','2025-05-27',2,7,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('5a132c36-25e8-40ac-936e-ca79e3c053b4','2024-12-10','2024-12-12',2,5,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('5a845031-8160-4475-8537-0ca9104b5e73','2024-08-12','2024-08-14',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('5b3b3e0d-d9a3-4bf1-a451-448a869c9028','2025-04-17','2025-04-21',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('5fe0d780-3ab5-4a42-bf09-e1a23e2ab8fe','2025-03-15','2025-03-18',2,5,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('62702711-78ed-44ac-b027-c335def20f8f','2024-10-05','2024-10-08',2,7,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('6362b235-a459-44ff-b559-b34d0aee93f6','2025-05-25','2025-05-26',1,11,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('64018353-fddc-40ca-8ce6-ddf057930de5','2024-10-14','2024-10-15',1,11,'2025-06-27 10:19:25','2025-06-27 14:34:15',2,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('68c4e27e-f117-4665-a652-e290567592a5','2025-03-18','2025-03-20',2,7,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('699c7b98-1dab-41b8-8a38-f377490add47','2025-04-06','2025-04-10',4,1,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('6a25e494-0064-4465-ab08-c2ede71ebd78','2024-07-09','2024-07-22',9,12,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('7c89f64b-7f78-4fc8-ad0b-6fa5162b69e7','2025-02-07','2025-02-11',2,5,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('833a192b-b8b9-45d5-add0-23932acc7bb8','2025-07-02','2025-07-04',2,6,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('8374f918-5ec0-45f0-8ee9-c3d3789d4306','2024-10-06','2024-10-08',2,6,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('84cd6b60-2d21-41a8-92ea-5f882726df23','2024-12-22','2024-12-25',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('865aa726-d62e-429e-a83d-3c67aa89451e','2025-03-24','2025-03-26',2,6,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('8ac958d8-24b9-4cf1-b044-1c947b4ed919','2025-04-06','2025-04-10',4,1,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('93e8edbb-9b5e-41f3-944d-344704f2cfe6','2024-08-08','2024-08-15',5,12,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('9915b752-d8ec-443b-9e32-ac13d2e2b922','2025-06-05','2025-06-09',2,9,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('9caa9c5e-3ef8-41f8-8c9e-2c39b9ccade3','2025-06-27','2025-06-30',1,12,'2025-06-27 12:00:00','2025-06-27 12:00:00',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('9ec23f6f-2f16-4023-a957-1a26a0a8027d','2024-09-17','2024-09-19',2,9,'2025-06-27 10:19:25','2025-06-27 14:35:16',2,'626c0c81-1562-44a7-9936-973628ba07f7'),('a0a3ebe4-9994-434b-8d0c-39330b8349ce','2024-11-05','2024-11-07',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('a5e9d7e6-dbcf-4a5f-8148-ca1f6e5191b3','2024-07-21','2024-07-25',4,1,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('a8553958-004f-4eb5-a1eb-9a215a8240dc','2025-05-27','2025-05-30',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('a9834170-966e-47c8-998d-de9f7763320b','2025-03-06','2025-03-10',2,5,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('b254e27b-0efd-4119-ba74-a80470d0e533','2025-03-30','2025-04-02',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('b31b55cb-bce3-4a30-93e1-4f27cd9334f9','2024-12-22','2024-12-24',2,6,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('b385050a-4b6d-4554-baf4-2be41f5e3c7e','2025-02-03','2025-02-05',2,9,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('be52279a-7b1a-4b70-a9fd-42adf1d4ebdf','2024-12-10','2024-12-12',2,6,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('c9c40c64-f657-4fe2-a3a6-74e199963438','2024-07-07','2024-07-08',1,11,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('d11fda9a-d617-4935-b8b7-9f1e540d2462','2024-11-21','2024-11-25',2,9,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('d17fb616-45cc-4f5a-b0b8-5da99969ac17','2024-09-17','2024-09-18',1,12,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'58a2ac0a-ef3f-4954-aa20-5880a935cb5d'),('e2f53c59-3bc5-4747-b241-8ad3de2e750d','2024-07-19','2024-07-24',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1'),('e4de6789-3541-49b0-bf0c-8f5f001e800f','2024-08-30','2024-09-04',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('e773601c-ec59-47a2-93fd-de437b38ead9','2025-06-08','2025-06-10',2,7,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'626c0c81-1562-44a7-9936-973628ba07f7'),('eb53d610-5aa2-46fc-ae30-e105ca69f4ad','2024-06-29','2024-07-03',3,2,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('f291eba4-1177-4c2c-a116-c192ac73caf2','2025-05-11','2025-05-14',3,3,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'dbc8a7dd-90ff-43a7-b3c4-06767fa226e0'),('f6cc991b-ba72-4d5f-be3c-0ea87366558f','2025-04-05','2025-04-08',2,8,'2025-06-27 10:19:25','2025-06-27 10:19:25',1,'29d6b56d-f8b4-4ba1-abc6-146c39f12db1');
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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (43,'2014_10_12_000000_create_users_table',1),(44,'2014_10_12_100000_create_password_resets_table',1),(45,'2019_08_19_000000_create_failed_jobs_table',1),(46,'2019_12_14_000001_create_personal_access_tokens_table',1),(47,'2025_06_12_131027_create_genders_table',1),(48,'2025_06_12_131047_create_marital_statuses_table',1),(49,'2025_06_12_131104_create_posts_table',1),(50,'2025_06_12_131118_create_roles_table',1),(51,'2025_06_12_131132_create_types_table',1),(52,'2025_06_12_131207_create_leaves_table',1),(53,'2025_06_12_131247_create_people_table',1),(54,'2025_06_12_132753_create_pivot_table_person_role',1),(55,'2025_06_12_133007_create_pivot_table_leave_person',1),(57,'2025_06_12_162055_add_nb_day_column_in_types_table',2),(58,'2025_06_13_132008_create_documents_table',3),(59,'2025_06_27_084942_create_statuses_table',4),(60,'2025_06_27_085203_add_status_id_to_leaves_table',5),(61,'2025_06_27_091130_add_person_id_column_in_leaves_table',6),(62,'2025_06_27_093336_add_hire_date_to_persons_table',7),(63,'2025_06_27_154504_add_password_column_in_persons_table',8);
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
INSERT INTO `person_role` VALUES ('dbc8a7dd-90ff-43a7-b3c4-06767fa226e0',1,NULL,NULL),('dbc8a7dd-90ff-43a7-b3c4-06767fa226e0',3,NULL,NULL),('626c0c81-1562-44a7-9936-973628ba07f7',1,NULL,NULL),('29d6b56d-f8b4-4ba1-abc6-146c39f12db1',2,NULL,NULL),('58a2ac0a-ef3f-4954-aa20-5880a935cb5d',1,NULL,NULL),('58a2ac0a-ef3f-4954-aa20-5880a935cb5d',3,NULL,NULL),('50e17b4f-0be3-41d6-8f5d-575b60d2f1d2',2,NULL,NULL),('50e17b4f-0be3-41d6-8f5d-575b60d2f1d2',4,NULL,NULL);
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
INSERT INTO `persons` VALUES ('29d6b56d-f8b4-4ba1-abc6-146c39f12db1','ergtrtrg','rgrtgdfgfrtgrtfrth','1996-03-22',0,2,2,3,NULL,'2025-06-13 14:13:28','2025-06-13 14:13:28','2005-03-21','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),('50e17b4f-0be3-41d6-8f5d-575b60d2f1d2','zerfzr','zerfzerf','2002-03-01',2,2,3,3,NULL,'2025-06-30 12:24:36','2025-06-30 12:24:36','2019-08-12','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),('58a2ac0a-ef3f-4954-aa20-5880a935cb5d','Prenom','Nom','2002-03-01',2,1,2,5,NULL,'2025-06-16 09:31:22','2025-06-16 09:31:22','2023-05-01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),('626c0c81-1562-44a7-9936-973628ba07f7','Josué','ELONGA','1996-03-22',1,1,3,6,NULL,'2025-06-13 14:12:12','2025-06-27 11:27:41','2020-12-25','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),('dbc8a7dd-90ff-43a7-b3c4-06767fa226e0','Loubna','IGUERMAZDA','2002-03-01',2,2,3,4,NULL,'2025-06-13 14:00:25','2025-06-13 14:00:25','2021-01-01','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
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

-- Dump completed on 2025-07-01  9:54:16
