# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: mydb
# Generation Time: 2017-10-23 18:22:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table order_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  KEY `order_id` (`order_id`),
  KEY `prod_id` (`prod_id`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;

INSERT INTO `order_details` (`order_id`, `prod_id`, `quantity`, `subtotal`)
VALUES
	(1,1,1,15.99),
	(1,2,1,5.99),
	(1,3,1,10.99),
	(4,1,1,15.99),
	(4,2,3,5.99);

/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_total` decimal(10,2) DEFAULT NULL,
  `shipped` tinyint(1) DEFAULT NULL,
  `placed_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shipped_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`order_id`, `order_total`, `shipped`, `placed_date`, `shipped_date`, `user_id`)
VALUES
	(1,0.00,0,'2017-10-21 16:02:14','2017-10-21 16:02:14',3),
	(2,32.97,0,'2017-10-21 16:02:14','2017-10-21 16:02:14',4),
	(3,32.97,0,'2017-10-21 16:02:14','2017-10-21 16:02:14',5),
	(4,33.96,0,'2017-10-21 16:02:14','2017-10-21 16:02:14',3);

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(30) DEFAULT NULL,
  `prod_desc` text,
  `picture` text,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_desc`, `picture`, `unit_price`, `category`, `in_stock`, `featured`)
VALUES
	(1,'Hammer','Hammer wooden handle','https://www.montessoriservices.com/media/catalog/product/cache/1/thumbnail/550x/9df78eab33525d08d6e5fb8d27136e95/v/5/v508_hammer.jpg',15.99,'Hardware',20,1),
	(2,'Wrench','Sinple wrench','http://www.stanleytools.com/_Classes/SBDShared/Customizations/Imageresizer.ashx?path=%2FProductImages%2F3000X3000%2FSTMT79116OSP_1_3000X3000.jpg&w=0&h=0&crop=false&defaultimage=%2Fen-us%2F~%2Fmedia%2Fstanleytools%2Fimages%2Fdefault-images%2Fdefaultimage.jpg&showdefaultimage=true',5.99,'Garage',50,1),
	(3,'Cement','Sack of cement','https://4.imimg.com/data4/HS/KV/GLADMIN-182413/ambuja-cement-250x250.jpg',10.99,'Construction',25,0);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `last_name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `address_1` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `address_2` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `zip_code` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telephone` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `creditcard` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `user_type` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `address_1`, `address_2`, `city`, `country`, `zip_code`, `telephone`, `creditcard`, `user_type`, `password`, `signup_date`, `last_loggedin`)
VALUES
	(1,'Jose','Padilla','North Brumswick St','Smithfield','Dublin 7','Ireland','D07','0876036525','6635300534','admin','','2017-10-21 13:43:01','2017-10-21 13:43:01'),
	(2,'Bruno','Ramires','Parnell St','Dublin 1','Dublin 1','Ireland','D01','0858882726','5555555555','admin','','2017-10-21 13:43:01','2017-10-21 13:43:01'),
	(3,'James','Hetfield','37 mansion','posh st','Hollywood','United States','ZD5TD','01777444645323','47636423424','customer','','2017-10-21 13:50:01','2017-10-21 13:50:01'),
	(4,'Tom','Torero','45 house','hustle st','Cardiff','United Kindom','55TGD','004434324234234','35235423524','customer','','2017-10-21 13:52:01','2017-10-21 13:52:01'),
	(5,'Jacky','Chan','12 Canton','Kungfu st','Hong Kong','Hong Kong','44332','003463353252323','3521312235','customer','','2017-10-21 14:03:59','2017-10-21 14:03:59'),
	(6,'Jennifer','Lopez','34 Glamurouse','Hot st','Hollywood','United States','443322','18383635323231','3423423432','customer','','2017-10-21 14:06:41','2017-10-21 14:06:41'),
	(7,'Gordon','Ramsey','22 Chef','Grumpy st','London','United Kindom','D33252','453453453421','3423432423','customer','','2017-10-21 14:08:12','2017-10-21 14:08:12');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
