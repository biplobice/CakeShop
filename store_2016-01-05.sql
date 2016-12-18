# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: store
# Generation Time: 2016-01-04 15:34:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table carts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `product_id` int(11) unsigned DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) unsigned DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `price`, `quantity`, `created`, `modified`, `status`)
VALUES
	(1,1,1,200,1,'2016-01-02 04:52:00','2016-01-02 04:52:00',1),
	(2,1,2,180,1,'2016-01-02 04:52:00','2016-01-02 04:52:00',1);

/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`, `status`)
VALUES
	(1,'Category 1','sdfsaf','2015-12-31 07:13:00','2015-12-31 07:13:00',1),
	(2,'Category 2','','2015-12-31 07:19:50','2015-12-31 07:19:50',1),
	(3,'Category 3','','2015-12-31 07:20:14','2015-12-31 07:20:14',1),
	(4,'Category 4','','2015-12-31 07:23:19','2015-12-31 07:23:19',1);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table discounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `discounts`;

CREATE TABLE `discounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `amount` double NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;

INSERT INTO `discounts` (`id`, `product_id`, `amount`, `start_at`, `end_at`, `created`, `modified`, `status`)
VALUES
	(1,1,25,'2015-12-31 07:38:43','2016-12-20 07:38:43','2015-12-31 07:38:43','2015-12-31 07:38:43',1),
	(2,1,20,'2016-01-31 07:38:43','2016-12-31 07:38:43','2015-12-31 07:38:43','2015-12-31 07:38:43',1);

/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `receiver_address` text,
  `city` varchar(64) DEFAULT NULL,
  `zip` int(11) unsigned NOT NULL,
  `state` varchar(64) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `content` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table product_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned DEFAULT NULL,
  `sub_category_id` int(11) unsigned DEFAULT NULL,
  `sku` varchar(32) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  `model` varchar(64) NOT NULL,
  `description` text,
  `buy_price` double unsigned DEFAULT NULL,
  `sell_price` double unsigned DEFAULT NULL,
  `units_in_stock` int(11) NOT NULL DEFAULT '0',
  `size` varchar(64) DEFAULT NULL,
  `color` varchar(64) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `sku`, `name`, `model`, `description`, `buy_price`, `sell_price`, `units_in_stock`, `size`, `color`, `weight`, `rating`, `thumb`, `created`, `modified`, `status`)
VALUES
	(1,1,1,'MPR01','Product 1','Model 01','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,200,5,'XS','Blue',1,NULL,'products/dress1home.jpg','2015-12-31 07:38:43','2015-12-31 07:38:43',1),
	(2,1,2,'','Product 2','Model 02','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,180,0,'','',0,NULL,'products/dress2home.jpg','2015-12-31 07:39:33','2015-12-31 07:39:33',1),
	(3,3,8,'','Product 3','Model 03','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,150,0,'','',0,NULL,'products/dress3home.jpg','2015-12-31 07:40:21','2015-12-31 07:40:21',1),
	(4,1,1,'','Product 4','Model 04','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,190,0,'','',0,NULL,'products/dress4home.jpg','2015-12-31 07:38:43','2015-12-31 07:38:43',1),
	(5,1,2,'','Product 5','Model 05','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,200,0,'','',0,NULL,'products/dress5home.jpg','2015-12-31 07:39:33','2015-12-31 07:39:33',1),
	(6,3,8,'','Product 6','Model 06','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,210,0,'','',0,NULL,'products/dress6home.jpg','2015-12-31 07:40:21','2015-12-31 07:40:21',1),
	(7,1,1,'','Product 7','Model 07','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,120,0,'','',0,NULL,'products/dress7home.jpg','2015-12-31 07:38:43','2015-12-31 07:38:43',1),
	(8,1,2,'','Product 8','Model 08','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,300,0,'','',0,NULL,'products/dress8home.jpg','2015-12-31 07:39:33','2015-12-31 07:39:33',1),
	(9,3,8,'','Product 9','Model 09','When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then',NULL,250,0,'','',0,NULL,'products/dress9home.jpg','2015-12-31 07:40:21','2015-12-31 07:40:21',1);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table purchases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `purchases`;

CREATE TABLE `purchases` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `rating` int(11) unsigned NOT NULL,
  `message` int(11) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table sub_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_categories`;

CREATE TABLE `sub_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `created`, `modified`, `status`)
VALUES
	(1,1,'Sub Category 1','','2015-12-31 07:20:33','2015-12-31 07:20:33',1),
	(2,1,'Sub Category 2','','2015-12-31 07:35:13','2015-12-31 07:35:13',1),
	(3,1,'Sub Category 3','','2015-12-31 07:35:26','2015-12-31 07:35:26',1),
	(4,2,'Sub Category 1','','2015-12-31 07:20:33','2015-12-31 07:20:33',1),
	(5,2,'Sub Category 2','','2015-12-31 07:35:13','2015-12-31 07:35:13',1),
	(6,2,'Sub Category 3','','2015-12-31 07:35:26','2015-12-31 07:35:26',1),
	(7,3,'Sub Category 1','','2015-12-31 07:20:33','2015-12-31 07:20:33',1),
	(8,3,'Sub Category 2','','2015-12-31 07:35:13','2015-12-31 07:35:13',1),
	(9,3,'Sub Category 3','','2015-12-31 07:35:26','2015-12-31 07:35:26',1);

/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `first_name` varchar(64) NOT NULL DEFAULT '',
  `last_name` varchar(64) NOT NULL DEFAULT '',
  `company_name` varchar(64) DEFAULT '',
  `avatar` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) DEFAULT '',
  `city` varchar(64) NOT NULL DEFAULT '',
  `zip` int(11) unsigned NOT NULL,
  `country` varchar(64) DEFAULT '',
  `phone` varchar(16) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `role` int(1) unsigned NOT NULL DEFAULT '1',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `company_name`, `avatar`, `birth_date`, `address`, `address2`, `city`, `zip`, `country`, `phone`, `created`, `modified`, `role`, `status`)
VALUES
	(1,'admin@example.com','$2y$10$uP02MmkfbML7t5Y/c68k2OKxnP4pTVh2MsF2v/al8z1cYOlN86muG','','','','',NULL,'','','',0,'','','2015-12-30 15:37:18','0000-00-00 00:00:00',1,1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
