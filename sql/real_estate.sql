# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.2.8-MariaDB)
# Database: realestate
# Generation Time: 2018-03-07 11:17:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table house
# ------------------------------------------------------------

DROP TABLE IF EXISTS `house`;

CREATE TABLE `house` (
  `idhouse` int(11) NOT NULL AUTO_INCREMENT,
  `house_name` varchar(75) DEFAULT NULL,
  `house_location` varchar(75) NOT NULL,
  `house_price` float NOT NULL,
  `house_description` varchar(255) DEFAULT NULL,
  `house_area` float DEFAULT NULL,
  `house_bedroom` int(11) DEFAULT NULL,
  `house_bath` int(11) DEFAULT NULL,
  `house_garage` varchar(45) DEFAULT NULL,
  `house_image` varchar(200) DEFAULT NULL,
  `house_status` varchar(20) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `house_owner` int(11) NOT NULL,
  PRIMARY KEY (`idhouse`),
  KEY `house_owner_fk_idx` (`house_owner`),
  CONSTRAINT `house_owner_fk` FOREIGN KEY (`house_owner`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `house` WRITE;
/*!40000 ALTER TABLE `house` DISABLE KEYS */;

INSERT INTO `house` (`idhouse`, `house_name`, `house_location`, `house_price`, `house_description`, `house_area`, `house_bedroom`, `house_bath`, `house_garage`, `house_image`, `house_status`, `create_time`, `update_time`, `house_owner`)
VALUES
	(24,'Rehema Court','Juja',12000000,'Located along Thka Super Highway.',123,3,2,NULL,'[\"algorithm5.jpg\",\"algorithm114.jpg\",\"autonomous7.png\"]','Buy','2018-02-26 15:00:08',NULL,1),
	(25,'Kenya South','Kitengela',8000000,'This house was built in September 2017',321,3,3,NULL,'[\"adan-fruit-and-sea-485451.jpg\",\"algorithm115.jpg\",\"autonomous21.png\",\"bg1.jpg\"]','Buy','2018-02-26 15:02:23',NULL,1),
	(26,'Caucasian House','Thika',6500000,'Located in juja south estate',234,3,4,NULL,'[\"autonomous22.png\",\"1a14fad76d9e6__HM_GRILL_11.png\",\"adan-fruit-and-sea-485452.jpg\",\"algorithm116.jpg\",\"autonomous8.png\"]','Rent','2018-02-26 15:05:50',NULL,1),
	(27,'Kennedy\'s ','Kikuyu',1200000,'A rental house',200,2,2,NULL,'[\"adan-fruit-and-sea-485453.jpg\",\"1a14fad76d9e6__HM_GRILL_12.png\",\"adan-fruit-and-sea-485454.jpg\",\"algorithm6.jpg\",\"algorithm117.jpg\"]','Buy','2018-02-26 15:09:30',NULL,1);

/*!40000 ALTER TABLE `house` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `house_BEFORE_INSERT` BEFORE INSERT ON `house` FOR EACH ROW BEGIN

END */;;
/*!50003 SET SESSION SQL_MODE="STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `house_BEFORE_UPDATE` BEFORE UPDATE ON `house` FOR EACH ROW BEGIN

END */;;
/*!50003 SET SESSION SQL_MODE="STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `house_AFTER_UPDATE` AFTER UPDATE ON `house` FOR EACH ROW BEGIN
SET @update_time = CURRENT_TIMESTAMP;
END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table land
# ------------------------------------------------------------

DROP TABLE IF EXISTS `land`;

CREATE TABLE `land` (
  `land_id` int(11) NOT NULL AUTO_INCREMENT,
  `land_lr` varchar(100) DEFAULT NULL,
  `land_location` varchar(45) DEFAULT NULL,
  `land_area` float DEFAULT NULL,
  `land_price` float DEFAULT NULL,
  `land_description` varchar(200) DEFAULT NULL,
  `land_image` varchar(255) DEFAULT NULL,
  `land_owner` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`land_id`),
  UNIQUE KEY `land_lr_UNIQUE` (`land_lr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ALLOW_INVALID_DATES,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `land_AFTER_UPDATE` AFTER UPDATE ON `land` FOR EACH ROW BEGIN
SET @update_time = CURRENT_TIMESTAMP;
END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table timestamps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `timestamps`;

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`username`, `email`, `password`, `create_time`, `id`, `phone`)
VALUES
	('Clifford','betaclifford@gmail.com','8cb2237d0679ca88db6464eac60da96345513964','2018-02-22 12:37:09',1,'');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
