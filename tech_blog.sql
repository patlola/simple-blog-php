-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `post_title` varchar(150) NOT NULL,
  `post_body` varchar(12000) NOT NULL,
  `author` varchar(30) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (65,'This is Apache2 Default Page Content','Apache2 default configuration is different from the upstream default configuration, and split into several files optimized for interaction with Ubuntu tools. The configuration system is fully documented in /usr/share/doc/apache2/README.Debian.gz. Refer to this for the full documentation. Documentation for the web server itself can be found by accessing the manual if the apache2-doc package was installed on this server. ','asdasd','2015-06-14 16:16:37'),(66,'This is some Random Content','He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to. Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor. \r\n\r\nOh acceptance apartments up sympathize astonished delightful. Waiting him new lasting towards. Continuing melancholy especially so to. Me unpleasing impossible in attachment announcing so astonished. What ask leaf may nor upon door. Tended remain my do stairs. Oh smiling amiable am so visited cordial in offices hearted. \r\n\r\nHis having within saw become ask passed misery giving. Recommend questions get too fulfilled. He fact in we case miss sake. Entrance be throwing he do blessing up. Hearts warmth in genius do garden advice mr it garret. Collected preserved are middleton dependent residence but him how. Handsome weddings yet mrs you has carriage packages. Preferred joy agreement put continual elsewhere delivered now. Mrs exercise felicity had men speaking met. Rich deal mrs part led pure will but. \r\n','praveen','2015-06-14 16:18:19'),(68,'This is a Hindi Text post','&#2361;&#2367;&#2306;&#2342;&#2368; &#2357;&#2381;&#2351;&#2366;&#2325;&#2352;&#2339; &#2361;&#2367;&#2306;&#2342;&#2368; &#2349;&#2366;&#2359;&#2366; &#2325;&#2379; &#2358;&#2369;&#2342;&#2381;&#2343; &#2352;&#2370;&#2346; &#2360;&#2375; &#2354;&#2367;&#2326;&#2344;&#2375; &#2324;&#2352; &#2348;&#2379;&#2354;&#2344;&#2375; &#2360;&#2306;&#2348;&#2306;&#2343;&#2368; &#2344;&#2367;&#2351;&#2350;&#2379;&#2306; &#2325;&#2366; &#2348;&#2379;&#2343; &#2325;&#2352;&#2366;&#2344;&#2375; &#2357;&#2366;&#2354;&#2366; &#2358;&#2366;&#2360;&#2381;&#2340;&#2381;&#2352; &#2361;&#2376;&#2404; &#2351;&#2361; &#2361;&#2367;&#2306;&#2342;&#2368; &#2349;&#2366;&#2359;&#2366; &#2325;&#2375; &#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2325;&#2366; &#2350;&#2361;&#2340;&#2381;&#2357;&#2346;&#2370;&#2352;&#2381;&#2339; &#2361;&#2367;&#2360;&#2381;&#2360;&#2366; &#2361;&#2376;&#2404; &#2311;&#2360;&#2350;&#2375;&#2306; &#2361;&#2367;&#2306;&#2342;&#2368; &#2325;&#2375; &#2360;&#2349;&#2368; &#2360;&#2381;&#2357;&#2352;&#2370;&#2346;&#2379;&#2306; &#2325;&#2379; &#2330;&#2366;&#2352; &#2326;&#2306;&#2337;&#2379;&#2306; &#2325;&#2375; &#2309;&#2306;&#2340;&#2352;&#2381;&#2327;&#2340; &#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2325;&#2367;&#2351;&#2366; &#2332;&#2366;&#2340;&#2366; &#2361;&#2376;&#2404; &#2311;&#2360;&#2350;&#2375;&#2306; &#2357;&#2352;&#2381;&#2339; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2375; &#2309;&#2306;&#2340;&#2352;&#2381;&#2327;&#2340; &#2357;&#2352;&#2381;&#2339; &#2324;&#2352; &#2343;&#2381;&#2357;&#2344;&#2367; &#2346;&#2352; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2367;&#2351;&#2366; &#2327;&#2351;&#2366; &#2361;&#2376; &#2340;&#2379; &#2358;&#2348;&#2381;&#2342; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2375; &#2309;&#2306;&#2340;&#2352;&#2381;&#2327;&#2340; &#2358;&#2348;&#2381;&#2342; &#2325;&#2375; &#2357;&#2367;&#2357;&#2367;&#2343; &#2346;&#2325;&#2381;&#2359;&#2379;&#2306; &#2360;&#2375; &#2360;&#2306;&#2348;&#2306;&#2343;&#2367;&#2340; &#2344;&#2367;&#2351;&#2350;&#2379;&#2306; &#2346;&#2352; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2367;&#2351;&#2366; &#2327;&#2351;&#2366; &#2361;&#2376;&#2404; &#2357;&#2366;&#2325;&#2381;&#2351; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2375; &#2309;&#2306;&#2340;&#2352;&#2381;&#2327;&#2340; &#2357;&#2366;&#2325;&#2381;&#2351; &#2360;&#2306;&#2348;&#2306;&#2343;&#2368; &#2357;&#2367;&#2349;&#2367;&#2344;&#2381;&#2344; &#2360;&#2381;&#2341;&#2367;&#2340;&#2367;&#2351;&#2379;&#2306; &#2319;&#2357;&#2306; &#2331;&#2306;&#2342; &#2357;&#2367;&#2330;&#2366;&#2352; &#2350;&#2375;&#2306; &#2360;&#2366;&#2361;&#2367;&#2340;&#2381;&#2351;&#2367;&#2325; &#2352;&#2330;&#2344;&#2366;&#2323;&#2306; &#2325;&#2375; &#2358;&#2367;&#2354;&#2381;&#2346;&#2327;&#2340; &#2346;&#2325;&#2381;&#2359;&#2379;&#2306; &#2346;&#2352; &#2357;&#2367;&#2330;&#2366;&#2352; &#2325;&#2367;&#2351;&#2366; &#2327;&#2351;&#2366; &#2361;&#2376;&#2404;','Paveen','2015-06-19 08:42:21');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-19 14:17:01
