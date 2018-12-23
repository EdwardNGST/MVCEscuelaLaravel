/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.7.17-log : Database - escuela
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`escuela` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `escuela`;

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` smallint(2) NOT NULL AUTO_INCREMENT,
  `nameStudent` varchar(50) COLLATE utf8_bin NOT NULL,
  `career` enum('ITICS','ISC','IGE','ADMON','CP','ARQ','ELECTRO') COLLATE utf8_bin NOT NULL,
  `age` smallint(6) NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `students` */

insert  into `students`(`id`,`nameStudent`,`career`,`age`,`phone`) values 
(1,'Alan','ITICS',22,'12314531'),
(2,'Melisa','ISC',21,'143612'),
(3,'Luis','ITICS',22,'14135'),
(4,'Alondra','ADMON',23,'1543161'),
(5,'Abraham','ELECTRO',27,'41345135'),
(6,'Jesus Avit','ITICS',22,'214535');

/* Procedure structure for procedure `insertStudent` */

/*!50003 DROP PROCEDURE IF EXISTS  `insertStudent` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insertStudent`(
    _name smallint(2),
    _career varchar(10),
    _age smallint(6),
    _phone varchar(20)
)
BEGIN
    insert into students (nameStudent, career, age, phone) VALUES (_name, _career, _age, _phone);
END */$$
DELIMITER ;

/*Table structure for table `showstudents` */

DROP TABLE IF EXISTS `showstudents`;

/*!50001 DROP VIEW IF EXISTS `showstudents` */;
/*!50001 DROP TABLE IF EXISTS `showstudents` */;

/*!50001 CREATE TABLE  `showstudents`(
 `id` smallint(2) ,
 `name` varchar(50) ,
 `career` enum('ITICS','ISC','IGE','ADMON','CP','ARQ','ELECTRO') ,
 `age` smallint(6) ,
 `phone` varchar(20) 
)*/;

/*View structure for view showstudents */

/*!50001 DROP TABLE IF EXISTS `showstudents` */;
/*!50001 DROP VIEW IF EXISTS `showstudents` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `showstudents` AS (select `students`.`id` AS `id`,`students`.`nameStudent` AS `name`,`students`.`career` AS `career`,`students`.`age` AS `age`,`students`.`phone` AS `phone` from `students`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
