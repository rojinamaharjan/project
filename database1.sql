/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.31-MariaDB : Database - tattoo1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tattoo1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tattoo1`;

/*Table structure for table `apppointment` */

DROP TABLE IF EXISTS `apppointment`;

CREATE TABLE `apppointment` (
  `C_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Time` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `apppointment` */

insert  into `apppointment`(`C_id`,`Firstname`,`Lastname`,`Address`,`Phone`,`Email`,`Password`,`Time`) values (1,'','','','','','',NULL);

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`comment_id`,`comment_subject`,`comment_text`,`comment_status`) values (1,'hello','‰PNG\r\n\Z\n',1);

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Phone_no` varchar(10) DEFAULT NULL,
  `Gender` varchar(5) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`Name`,`Address`,`Age`,`Phone_no`,`Gender`,`Username`,`Email`,`Password`) values ('Dhananjaya','Baniyatar',21,'9860579953','Male','Dhananjaya','djbhetuwal@gmail.com','sjd123'),('nisha','baniyatar',21,'9860445555','Male','nisha','nishabhetuwal@gmail.','djs122'),('dipak','baniyatar',21,'9860579953','Male','pradip','maharjanrajeev344@gm','mdipak123'),('dipak','baniyatar',21,'9860579953','Male','pradip','maharjanrajeev344@gm','mdipak123'),('Amit','Sangghla',20,'9841000000','male','Amit','devilreborn@gmail.co','nimblenira');

/*Table structure for table `design` */

DROP TABLE IF EXISTS `design`;

CREATE TABLE `design` (
  `Design_id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(15) NOT NULL,
  `Cost` int(3) NOT NULL,
  `Size` int(2) NOT NULL,
  `Part` varchar(10) NOT NULL,
  `image` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Design_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `design` */

insert  into `design`(`Design_id`,`Name`,`Cost`,`Size`,`Part`,`image`) values (1,'Japanese',2500,0,'','japanese.jpg'),(2,'Tribal',3200,0,'','tribal.jpg'),(3,'Finelines',2200,0,'','finelines.jpg'),(4,'Tradional',30000,0,'','Traditional.jpg'),(5,'Horror',5000,0,'','horror.jpg'),(6,'Geometric',5500,0,'','geometric.jpg'),(7,'Hand Poked',3500,0,'','handpoked.jpg'),(8,'Ornamental',7000,0,'','ornamental.jpg');

/*Table structure for table `image` */

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `image` varchar(20) DEFAULT NULL,
  `text1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `image` */

insert  into `image`(`image`,`text1`) values ('uploads/inn.PNG',NULL),('uploads/inn.PNG',NULL),('uploads/Capture.PNG','GHGghGFHHGfzgh'),('uploads/95894395_dff','GHGghGFHHGfzgh');

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `owner_id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone_no` varchar(10) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `owner` */

insert  into `owner`(`owner_id`,`Name`,`Address`,`Phone_no`,`Email`,`Password`) values (1,'Mohan Thapa','putalisadk','9861234567','thapamohan123@gmail','thapa'),(2,'Rajeev Maharjan','Baneswor','986544422','maharjanrajeev344@gm','rajeev23');

/*Table structure for table `shop` */

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `pan_no` int(3) NOT NULL,
  `Shop_name` varchar(115) NOT NULL,
  `Owner` varchar(15) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Owner_id` int(3) DEFAULT NULL,
  `Working_time` varchar(15) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `image` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pan_no`),
  KEY `Owner_id` (`Owner_id`),
  CONSTRAINT `Owner_id` FOREIGN KEY (`Owner_id`) REFERENCES `owner` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shop` */

insert  into `shop`(`pan_no`,`Shop_name`,`Owner`,`Contact`,`Owner_id`,`Working_time`,`Address`,`image`) values (1,'Freak Street Tatto','Mohan Thapa','01-4700629',2,'9Am-8PM','Nesthamanda marga','frek.jpg'),(2,'funky Tattoo Zone','Gagan thapa','9849258977',NULL,'11AM-5PM','Saatghumti marga','mokey.png'),(3,'Soulz Tattoo Studio','Suresh Shrestha','014251544',NULL,'11AM-8PM','Thamel Marga','funyy.jpg'),(4,'Xtattoo Zone','Sunil Shakya','',NULL,'10AM-7PM','kalimati','funky.jpg'),(5,'Inkspiration Tattoo','Rajeev Maharjan','014251611',NULL,'10AM-6Pm','dallu','spiration.png'),(6,'Ratnaz Tattoo Inn','Dinesh Basnet','021463672',NULL,'12PM-9PM','Biratnagar','ratna.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Phone_no` varchar(10) DEFAULT NULL,
  `Gender` varchar(5) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`Name`,`Address`,`Age`,`Phone_no`,`Gender`,`Username`,`Email`,`Password`) values (1,'Dhannanjaya','Baniyatar',20,'9860579953','male','Dhanu','djbhetuwal@gmail.com','djsjlove'),(2,'Nisha','Baniyatar',24,'9850674537','femal','Nee','nish@gamil.com','imneesa'),(3,'laxmi','Tokha',20,'9860445555','femal','laxxu','laxmi@gamil.com','LLAXXU23'),(4,'Amit','Sangghla',20,'9849000000','male','Amit','devilreborn@gmail.co','nimblenira'),(5,'pradip','sangala',20,'9803329390','male','Pradip','amitbhetuwal98@gmail','pradip123'),(17,'DEAD','Hell',90,'9841000000','femal','Lucifer','murderer@gmail.com','fyufyfhf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
