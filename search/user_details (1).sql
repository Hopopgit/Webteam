-- --------------------------------------------------------
-- Host:                         bitnami-mysql-b07f.cloudapp.net
-- Server version:               5.6.31 - MySQL Community Server (GPL)
-- Server OS:                    linux-glibc2.5
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for redbeak_db
CREATE DATABASE IF NOT EXISTS `redbeak_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `redbeak_db`;


-- Dumping structure for table redbeak_db.i_user_details
CREATE TABLE IF NOT EXISTS `i_user_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `login_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `user_role` int(10) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_name` (`login_name`),
  UNIQUE KEY `email_id` (`email_id`),
  KEY `user_role` (`user_role`),
  CONSTRAINT `i_user_details_ibfk_1` FOREIGN KEY (`user_role`) REFERENCES `i_user_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table redbeak_db.i_user_details: ~8 rows (approximately)
/*!40000 ALTER TABLE `i_user_details` DISABLE KEYS */;
INSERT INTO `i_user_details` (`id`, `first_name`, `last_name`, `login_name`, `password`, `email_id`, `user_role`, `contact_number`, `address`) VALUES
	(1, 'soumya', 'akkone', 'soumya', 'd7812b94b1962436cd28c7b5004e059e', 'soumya123@gmail.com', 3, 8050202898, 'Bangalore'),
	(2, 'hari', 'sankar', 'hari', 'a9bcf1e4d7b95a22e2975c812d938889', 'hari@gmail.com', 1, 9876900698, 'TN'),
	(6, 'virat', 'kohli', 'virat', '5a39fe36ce9aa092ffe8faa0eaedd5da', 'virat@gmail.com', 3, 9876545678, 'delhi'),
	(7, 'girish', 'ls', 'girish', 'dabe0d16e465745eb3108c9598d07860', 'gv@gmail.com', 2, 9876000098, 'laxmipura'),
	(8, 'pramod', 'mn', 'pramod', 'pramod', 'pramod@gmail.com', 1, 9876543222, 'shimoga'),
	(9, 'prashant', 'mn', 'prashant', 'af948f0b6334c5d6e822c9bc8cf24034', 'pra@gmail.com', 2, 9999999999, 'shimoga'),
	(11, 'shahid', 'kapoor', 'shahid', 'f3224d90c778d5e456b49c75f85dd668', 's@gmail.com', 1, 9876987621, 'delhi'),
	(15, 'nobita', 'nobi', 'nobita', 'fe33467fa97283fd0c6e39106f020753', 'nobi@gmail.com', 3, 8123844500, 'tokyo');
/*!40000 ALTER TABLE `i_user_details` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
