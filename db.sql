/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - sound-app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sound-app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `sound-app`;

/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `album_photo` varchar(255) DEFAULT NULL,
  `releaseyear` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `album` */

insert  into `album`(`id`,`album_name`,`artist`,`album_photo`,`releaseyear`) values 
(7,'one kiss (with Dua lipa)','8','albumimage/One-Kiss.jpg','2021'),
(8,'Mere Humsafar','9','albumimage/Mere-Humsafar.jpg','2022'),
(9,'Kahani Suno 2.0','10','albumimage/kahani suno 2.0.jpg','2022'),
(10,'Ik Lamha','11','albumimage/ik lamha.jpg','2021'),
(11,'Habibi','12','albumimage/habibi.jpg','2022'),
(12,'Arcad','8','albumimage/arcad.jpeg','2019'),
(13,'Balla Ciao (money heist)','14','albumimage/bala chao song.jpg','2018'),
(14,'What if i said','15','albumimage/what if i.jpeg','2018'),
(15,'Sia this is acting','8','albumimage/sia this is acting.jpg','2016'),
(16,'Shekayat','17','albumimage/shekayat.jpg','2023'),
(17,'Safe Heaven','18','albumimage/safe heaven.jpeg','2017'),
(18,'Arjiti Dunki','19','albumimage/dunki.jpg','2024'),
(19,'Samhjo Na','20','albumimage/samjho na.jpg','2022'),
(20,'one republic vol 1','21','albumimage/ain worried.jpg','2022');

/*Table structure for table `artist` */

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `artist` */

insert  into `artist`(`artist_id`,`artist_name`,`artist_image`) values 
(8,'Dua Lipa','artist_image/time().dualipa.jpg'),
(9,'Yashal Shahid','artist_image/yashal shahid.jpg'),
(10,'Kaifi Khalil','artist_image/kaifi khalil.jpeg'),
(11,'Azan Sami Khan','artist_image/azan sami.jpg'),
(12,'Asim Azhar','artist_image/asim azhar.jpg'),
(13,'Duncan Laurence ','artist_image/duncan lurence.jpg'),
(14,'Manu Pilas','artist_image/manu pilas.jpg'),
(15,'jhonny orlando','artist_image/Johnny-Orlando.jpg'),
(16,'Sia','artist_image/sia.jpg'),
(17,'AUR','artist_image/aur.jpg'),
(18,'Ruth B','artist_image/ruth b.jpeg'),
(19,'Arjit Singh','artist_image/arjit sing.jpg'),
(20,'Aditya Rikhari','artist_image/Aditya_Rikhari.jpg'),
(21,'One Republic','artist_image/one repub.jpg');

/*Table structure for table `music` */

DROP TABLE IF EXISTS `music`;

CREATE TABLE `music` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `music_loc` varchar(255) DEFAULT NULL,
  `music_title` varchar(255) DEFAULT NULL,
  `music_thumbnail` varchar(255) DEFAULT NULL,
  `music_year` varchar(255) DEFAULT NULL,
  `music_artist` varchar(255) DEFAULT NULL,
  `music_album` varchar(255) DEFAULT NULL,
  `music_genre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `music` */

insert  into `music`(`id`,`music_loc`,`music_title`,`music_thumbnail`,`music_year`,`music_artist`,`music_album`,`music_genre`) values 
(10,'music/One Kiss (with Dua Lipa).mp3','one kiss','music_thumbnail/One-Kiss.jpg','2018','8','7','3'),
(12,'music/Mere Humsafar (Original Score) [Female Version].mp3','Mara Humsafar','music_thumbnail/Mere-Humsafar.jpg','2022','9','8','5'),
(13,'music/Kahani Suno 2.0.mp3','Kahani Suno','music_thumbnail/kahani suno.jpeg','2022','10','7','4'),
(14,'music/Ik Lamha.mp3','Ik Lamha','music_thumbnail/ik lamha.jpg','2021','11','10','5'),
(15,'music/Habibi.mp3','Habibi','music_thumbnail/habibi song.jpeg','2022','12','11','3'),
(16,'music/Arcade.mp3','loving you is losing game','music_thumbnail/arcad song.jpg','2019','13','7','4'),
(17,'music/ Money Heist.mp3','Bella ciao','music_thumbnail/bala chao.jpg','2018','14','13','6'),
(18,'music/What If (I Told You I Like You).mp3','What if (i told you i like you)','music_thumbnail/what if i.jpeg','2018','15','14','5'),
(19,'music/Unstoppable.mp3','Unstoppable ','music_thumbnail/unstop.jpg','2018','16','15','3'),
(20,'music/Shikayat.mp3','Shekayat','music_thumbnail/shekayat song.jpg','2023','17','16','4'),
(21,'music/Dandelions.mp3','Dandelions','music_thumbnail/dandlions.jpg','2017','18','17','5'),
(22,'music/O Maahi.mp3','O Maahi','music_thumbnail/o mahee.jpg','2023','19','18','5'),
(23,'music/[SPOTIFY-DOWNLOADER.COM] Samjho Na.mp3','Samjho Na','music_thumbnail/samjho na.jpg','2022','20','19','5');

/*Table structure for table `musicgenre` */

DROP TABLE IF EXISTS `musicgenre`;

CREATE TABLE `musicgenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `music_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `musicgenre` */

insert  into `musicgenre`(`id`,`music_genre_name`) values 
(3,'pop music'),
(4,'Sad '),
(5,'Romantic'),
(6,'Folk');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`role`) values 
(3,'Danish Siddiqui','danish@gmail.com','danish','Admin'),
(4,'waqar Hussain','waqar@gmail.com','Waqar','User');

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_loc` varchar(255) DEFAULT NULL,
  `video_artist` varchar(255) DEFAULT NULL,
  `video_thumbnail` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `video_genre` varchar(255) DEFAULT NULL,
  `video_description` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `video` */

insert  into `video`(`id`,`video_loc`,`video_artist`,`video_thumbnail`,`video_title`,`release_date`,`video_genre`,`video_description`) values 
(2,'video/The Bhopal Gas Leak _ Who were Railway Men_ _ Dhruv Rathee.mp4','8','thumbnail/druv2.jpg','The Bhopal  gas leak who were Railway men','November  26 2023','3','Unveil the chilling account of the Bhopal gas tragedy that shook the world on December 3 1984 This eye opening video exposes the horrifying aftermath of the poisonous gas leak from the Union Carbide plant'),
(5,'video/Create Undetectable AI Content Online with this tool_2.mp4','9','thumbnail/harry9.jpg','Create Undetectable AI Content Online with this tool','jun 21 2024','5','In this exciting video, we delve into the world of content creation with artifcial intelligence Join us as we explore the powerful tool known as BypassGPT designed to create undetectable AI generated content online. With BypassGPT you can bypass all AI detectors and achieve a 100 percent human score making your AI generated content indistinguishable from human written content'),
(6,'video/This is why you are not confident in logic building.mp4','10','thumbnail/chai3.jpg','This is why you are not confdent in logic building','Jun 14 2024','5','How to build logic is the most asked question in programming world There are many factors that contribute in logic building but we will discuss one such topic in this video'),
(9,'video/I Built 100 Houses And Gave Them Away!.mp4','7','thumbnail/beast.jpg','I Built 100 Houses And Gave Them Away!','jun 29 2024','3','we building and giving 100 house to families in need improving their quality life');

/*Table structure for table `video_artist` */

DROP TABLE IF EXISTS `video_artist`;

CREATE TABLE `video_artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `video_artist` */

insert  into `video_artist`(`id`,`artist_name`,`artist_img`) values 
(7,'Mr Beast','video_artist_image/MrBeast.jpg'),
(8,'Druv Rathee','video_artist_image/druv rathee.jpg'),
(9,'Harry','video_artist_image/harry pic.jpg'),
(10,'Chai or code','video_artist_image/chai or code.jpg');

/*Table structure for table `videogenre` */

DROP TABLE IF EXISTS `videogenre`;

CREATE TABLE `videogenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_genre_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `videogenre` */

insert  into `videogenre`(`id`,`video_genre_name`) values 
(3,'Infotainment '),
(4,'Entertainment '),
(5,'Education ');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
