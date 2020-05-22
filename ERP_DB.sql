/*
SQLyog Ultimate v8.82 
MySQL - 5.0.86-community-nt : Database - erp_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erp_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erp_db`;

/*Table structure for table `t_role_master` */

DROP TABLE IF EXISTS `t_role_master`;

CREATE TABLE `t_role_master` (
  `Role_Id` int(3) NOT NULL auto_increment,
  `Role_Name` varchar(200) NOT NULL,
  `Status` enum('Active','In_Active') NOT NULL default 'Active',
  `Update_Date` date default NULL,
  `Updated_By` int(5) default NULL,
  PRIMARY KEY  (`Role_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_role_master` */

insert  into `t_role_master`(`Role_Id`,`Role_Name`,`Status`,`Update_Date`,`Updated_By`) values (1,'Admin','Active','2020-05-21',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(200) default NULL,
  `password` varchar(100) NOT NULL,
  `Role_Id` int(3) NOT NULL,
  `updated_at` datetime default NULL,
  `created_at` datetime default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`Id`,`name`,`email`,`country`,`password`,`Role_Id`,`updated_at`,`created_at`) values (1,'Tshewang Tenzin','admin','Bhutan','$2y$10$RP4KXnyj2fJy76ThOvPaku1zNTYHqmP5aPp4V5d66av9L/8XSmWtS',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
