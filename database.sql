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
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `apppointment` */

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

insert  into `customer`(`Name`,`Address`,`Age`,`Phone_no`,`Gender`,`Username`,`Email`,`Password`) values ('Dhananjaya','Baniyatar',21,'9860579953','Male','Dhananjaya','djbhetuwal@gmail.com','sjd123'),('nisha','baniyatar',21,'9860445555','Male','nisha','nishabhetuwal@gmail.','djs122'),('dipak','baniyatar',21,'9860579953','Male','pradip','maharjanrajeev344@gm','mdipak123'),('dipak','baniyatar',21,'9860579953','Male','pradip','maharjanrajeev344@gm','mdipak123');

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

insert  into `owner`(`owner_id`,`Name`,`Address`,`Phone_no`,`Email`,`Password`) values (1,'Sunil Shakya','putalisadk','9861234567','shakyasunil123@gmail','sssss1'),(2,'Rajeev Maharjan','Baneswor','986544422','maharjanrajeev344@gm','rajeev23');

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
  PRIMARY KEY (`pan_no`),
  KEY `Owner_id` (`Owner_id`),
  CONSTRAINT `Owner_id` FOREIGN KEY (`Owner_id`) REFERENCES `owner` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shop` */

insert  into `shop`(`pan_no`,`Shop_name`,`Owner`,`Contact`,`Owner_id`,`Working_time`,`Address`) values (0,'Xtattoo Zone','Sunil Shakya','',NULL,'10:00-7:00','kalimati'),(1,'Mohan Tattoo INN','Mohan Thapa','01-4700629',2,'10:30-7:00','Narshing chowk'),(2,'Gagan Tattoo INN','Gagan thapa','9846104526',NULL,'7:30-5:00','Thamel marga'),(3,'Soulz Tattoo Studio','Suresh Shrestha','014251544',NULL,'11:00-8:00','Thamel Marga'),(5,'Inkspiration Tattoo','Rajeev Maharjan','014251611',NULL,'10:00-6:30','dallu');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`Name`,`Address`,`Age`,`Phone_no`,`Gender`,`Username`,`Email`,`Password`) values (1,'Dhannanjaya','Baniyatar',20,'9860579953','male','Dhanu','djbhetuwal@gmail.com','djsjlove'),(2,'Nisha','Baniyatar',24,'9850674537','femal','Nee','nish@gamil.com','imneesa'),(3,'laxmi','Tokha',20,'9860445555','femal','laxxu','laxmi@gamil.com','LLAXXU23'),(4,'laxmi','Tokha',20,'9860445555','femal','laxxu','laxmi@gamil.com','LLAXXU23'),(5,'laxmi','Tokha',20,'9860445555','femal','laxxu','laxmi@gamil.com','LLAXXU23'),(6,'laxmi','Tokha',20,'9860445555','','laxxu','laxmi@gamil.com','LLAXXU23'),(7,'laxmi','Tokha',20,'9860445555','','laxxu','laxmi@gamil.com','LLAXXU23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
