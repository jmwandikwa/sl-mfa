-- MariaDB dump 10.19  Distrib 10.7.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sl
-- ------------------------------------------------------
-- Server version	10.7.3-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `blog_id` int(23) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_cover` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_author` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_status` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_created_at` datetime(6) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES
(34,'Top 10 Services C.A.S','1651003985.jpg','Takes a primary key value as the first parameter and deletes the matching record from the model’s table:Takes a primary key value as the first parameter and deletes the matching record from the model’','<p><strong>Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:</strong></p>\r\n\r\n<p><em>Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:</em></p>\r\n','5','pending','2022-04-26 15:13:04.000000'),
(35,'Ban Konami','1651043291.JPG','Konami is a wastage of time to our students..','<p>Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:</p>\r\n','6','pending','2022-04-27 02:08:11.000000'),
(36,'micsofte','1651043450.png','have access to infinite links','<p>Hi Creat</p>\r\n','6','pending','2022-04-27 02:10:50.000000'),
(37,'Testing things out','1651044243.jpg','Takes a primary key value as the first parameter and deletes the matching record from the model’s table:Takes a primary key value as the first parameter and deletes the matching record from the model’','<p>Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:</p>\r\n','6','pending','2022-04-27 02:24:03.000000'),
(38,'ori LE ale','1651079806.jpg','Takes a primary key value as the first parameter and deletes the matching record from the model’s table:Takes a primary key value as the first parameter and deletes the matching record from the model’','<p>Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:Takes a primary key value as the first parameter and deletes the matching record from the model&rsquo;s table:</p>\r\n','1','pending','2022-04-27 12:16:45.000000'),
(39,'Pentesting master','1651136674.png','Alaaa this is actually happening Alaaa this is actually happening Alaaa this is actually happening','<p>Alaaa this is actually happeningAlaaa this is actually happeningAlaaa this is actually happeningAlaaa this is actually happeningAlaaa this is actually happeningAlaaa this is actually happening</p>\r\n','5','pending','2022-04-28 04:04:33.000000'),
(40,'Testing things out in SL','1651137266.jpeg','I would like to introduce SL Services and ask you for an opportunity to serve your precious company. We are a team of skilled and dynamic professionals and technician, we are a growing organization in','<h2>About Us</h2>\r\n\r\n<p>I would like to introduce SL Services and ask you for an opportunity to serve your precious company. We are a team of skilled and dynamic professionals and technician, we are a growing organization in electronic security ,surveillance system integrator and other IT products.<br />\r\n<br />\r\nSL Services offers advanced security &amp; safety equipment and systems, superior technical support, project design, consultation, and many more to meet the demands of our promising customers. We provide business security solutions that combine best-in-breed security and surveillance technologies, knowledge, service and support .<br />\r\n<br />\r\nSL Services&rsquo;s product range includes video surveillance systems with state-of-the-art IP-solutions, Access Control Systems, Intrusion Detection Systems, and Security Management Systems all of which are designed to minimize your lifetime cost of ownership.</p>\r\n\r\n<h2>About The Company</h2>\r\n\r\n<p>SL Services India Pvt. Ltd. Was Founded in 2012 with a vision to provide a wide range of services under one roof. With a team of skilled and dynamic professionals and technician, we are a growing organization in electronic security,surveillance system integrator and other IT products. We believe that Security intoday&rsquo;s time is an aspect of concern for allto ensure protection of self and family members, property, offices, livestock etchence we commit to securing people and premises, wherever lives and property are at risk.<br />\r\n<br />\r\nSL Services offers advanced security &amp; safety equipment and systems, superior technical support, project design,consultation, and many more to meet the demands of our promising customers. We provide business security solutions that combine best-in-breed security and surveillance technologies, knowledge,service and support to meet each client&rsquo;sunique needs. We understand the key factor to success lies in the integrationand quality of our products and excellent customer service.<br />\r\n<br />\r\nWe are a certified distributor of HONEYWELL to sell its services and products. We hold business relationship with a number of leading IT products and security manufacturers and work with range of diverse products the industry.SL Services&rsquo;s product range Includes video surveillance systems with state-of-the-art IP-solutions, Access Control Systems, Intrusion Detection Systems,and Security Management Systems all of which are designed to minimize your life time cost of ownership<a href=\"https://www.indiamart.com/sl-services/about-the-company.html\">+ Read More</a></p>\r\n\r\n<h2>Our Mission</h2>\r\n\r\n<p>It is the mission of SL Services to distribute, market &amp; sells latest premium qualitycomputer hardware &amp; software&#39;sequipment solutions to our customers, Supported by close working relationshipwith key technology leaders &amp; excellentcustomer service. The goal is to provide IT&amp; Electronic Security products, peripheralsthat reflect the lowest possible total cost ofpurchase.</p>\r\n','5','pending','2022-04-28 04:14:25.000000'),
(41,'Testing my Skills on SL','1651139571.jpeg','I\'m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard th','<p>I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.I&#39;m new to bootstrap and am trying to configure a left side nav-bar to be closed by default on page load so the user must click the menu link to open the menu. The page is a content-heavy dashboard that needs as much real estate as I can get it.</p>\r\n','8','pending','2022-04-28 04:52:50.000000');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_bot`
--

DROP TABLE IF EXISTS `chat_bot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_bot` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `questions` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answers` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_bot`
--

LOCK TABLES `chat_bot` WRITE;
/*!40000 ALTER TABLE `chat_bot` DISABLE KEYS */;
INSERT INTO `chat_bot` VALUES
(1,'hi|hello|hi|holla|good morning|whatsapp|hey|yoo|ni hao|','Hello there how may I help you?'),
(2,'what is your name|who are you?|what\'s your name?|whats your name?|name|','Hey my name ignite Bot, Glad to have you here.'),
(3,'ok|cool|fine|its ok|','cool :)'),
(4,'who made you|who created you|who made you|who is your developer|','proudly made by team ignite ');
/*!40000 ALTER TABLE `chat_bot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `event_title` varchar(100) DEFAULT 'NULL' COMMENT 'content',
  `event_venue` varchar(23) DEFAULT NULL COMMENT 'content',
  `event_author` varchar(23) DEFAULT NULL COMMENT 'content',
  `event_date` varchar(15) DEFAULT 'NULL' COMMENT 'content',
  `event_description` varchar(500) DEFAULT NULL COMMENT 'content',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3 COMMENT='newTable';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES
(1,NULL,NULL,'5',NULL,NULL),
(2,NULL,NULL,'5',NULL,NULL),
(3,NULL,NULL,'5',NULL,NULL),
(4,NULL,NULL,'5',NULL,NULL),
(5,NULL,NULL,'5',NULL,NULL),
(6,NULL,NULL,'5',NULL,NULL),
(7,NULL,NULL,'5',NULL,NULL),
(8,NULL,NULL,'5',NULL,NULL),
(9,NULL,NULL,'5',NULL,NULL),
(10,NULL,NULL,'5',NULL,NULL),
(11,NULL,NULL,'5',NULL,NULL),
(12,NULL,NULL,'5',NULL,NULL),
(13,NULL,NULL,'5',NULL,NULL),
(14,NULL,NULL,'5',NULL,NULL),
(15,NULL,NULL,'5',NULL,NULL),
(16,'s','s','5','2022-04-','<p>s</p>\r\n'),
(17,'cleaning the dining hass','home','5','2022-04-29','<p>Alaa&nbsp;The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:</p>\r\n'),
(18,'cleaning the dh','bairobi','1','2022-04-06','<p>The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned by the query. Make sure to call the method using your query result object:The number of FIELDS (columns) returned b'),
(19,'Coocking matoke','Kitchen','8','2022-04-20','<p>&nbsp;Engineers Hope this mail finds you well.We have all been requested to avail ourselves at the biology lab (myp3 block) at exactly 1:30 pm to sign and get our BTEC feedbacks, thankyou and have a great day</p>\r\n'),
(20,'Jojo ','Kwenu','8','2022-04-30','<p>My ability to empathize comes from learning a new language at a young age, which set my ultimate goal of designing an experience for everyone. With a mixture of academic and self-taught skills, I strive to be a problem-solver in everyday settings with a&nbsp;<strong>human-centered</strong>,&nbsp;<strong>research-driven</strong>,&nbsp;<strong>detail-oriented</strong>&nbsp;design approach.My ability to empathize comes from learning a new language at a young age, which set my ultimate goal of de');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created_at` datetime(6) NOT NULL,
  `user_image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar-3.png',
  `user_verified_at` datetime(6) DEFAULT NULL,
  `user_code` int(4) DEFAULT NULL,
  `user_bio` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Micsofte Kibet','maxiszhacks@gmail.com','$2y$10$UNqioQ3U/ki2Yl98ZAnFIe9lLpc8Y2iEGUkSrPtehQI.yC6YriDIW','2022-04-23 09:12:35.000000',NULL,NULL,0,'Ilove Life As you do'),
(2,'fn fn','maxwell.kemboi.3@m.d','$2y$10$PmwqRufOycTntatu.IlDO.5RtXHZVbA/qiFJxn3DljOOoAR4/AtU.','2022-04-23 09:39:07.000000',NULL,NULL,NULL,NULL),
(3,'maxwell kibet','max@me.com','$2y$10$7i8npn.OM7LUORyPvZTGrewjkQ/VjHT7PyO3dvDP4aUSaQbYavZVa','2022-04-24 01:38:03.000000',NULL,NULL,NULL,'Alaaa!!'),
(4,'Premium','test@me.com','$2y$10$jGA.c0UxeTYn1KioMCAsmugF15CLj3Ss9Ck7Gp5p8uyeVLhJLo4OW','2022-04-25 14:08:44.000000','avatar-13.png',NULL,NULL,NULL),
(5,'testerr kuruto','tester1@me.com','$2y$10$.L8htQ0CPvtXjxAXWsfuIub2gmQPtEW4Hl9U0PRxP0XK4PB6J0oDm','2022-04-25 14:36:47.000000','avatar-3.png',NULL,0,'Ilove Killing the Show Beat and evry creator is normally not in sane just as you are :) Ilove Killing the Show Beat and evry creator is normally not in sane just as you are :) Ilove Killing the Show Beat and evry creator is normally not in sane just as you are :)Ilove Killing the Show Beat and evry '),
(6,'Kiki Msafe','kikimsafe@gmail.com','$2y$10$63/POyI0DJuysmrq.mCdWebzYPkUz0iRIR0fzROjih0Ew9jnLjKzq','2022-04-27 01:54:44.000000','avatar-3.png',NULL,NULL,'Former head officer of the hyrdra bird longistics and current affairs.'),
(7,'watinda oloo','watinda@me.com','$2y$10$pkBOrSejoosKTlpL5D.2Q.ByYH.BJCZfap47AH9PKsBStvkNVYqq6','2022-04-27 17:00:00.000000','avatar-3.png',NULL,NULL,NULL),
(8,'Developer #1','developer@sl.com','$2y$10$3Mlg8CzGLUhvyUP3kVMBXOkHItWApCkh6RltaMwZwxlewQZwGdhGu','2022-04-28 04:28:38.000000','avatar-3.png',NULL,NULL,'Hello Engineers Hope this mail finds you well.We have all been requested to avail ourselves at the biology lab (myp3 block) at exactly 1:30 pm to sign and get our BTEC feedbacks, thankyou and have a great day');
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

-- Dump completed on 2022-04-28 17:13:03
