-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for menu
CREATE DATABASE IF NOT EXISTS `menu` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `menu`;

-- Dumping structure for table menu.a_group
CREATE TABLE IF NOT EXISTS `a_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table menu.a_group: ~0 rows (approximately)
/*!40000 ALTER TABLE `a_group` DISABLE KEYS */;
INSERT INTO `a_group` (`id`, `name`) VALUES
	(2, 'Admin');
/*!40000 ALTER TABLE `a_group` ENABLE KEYS */;

-- Dumping structure for table menu.a_groupprivileges
CREATE TABLE IF NOT EXISTS `a_groupprivileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `permission` int(11) NOT NULL DEFAULT '0',
  `created_by` varchar(50) NOT NULL DEFAULT '0',
  `created_at` varchar(50) NOT NULL DEFAULT '0',
  `update_by` varchar(50) NOT NULL DEFAULT '0',
  `update_at` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table menu.a_groupprivileges: ~2 rows (approximately)
/*!40000 ALTER TABLE `a_groupprivileges` DISABLE KEYS */;
INSERT INTO `a_groupprivileges` (`id`, `group_id`, `menu_id`, `permission`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
	(1, 1, 1, 1, 'Bintang', '05 September2018', '0', '0'),
	(2, 1, 2, 1, 'Bintang', '05 September2018', '0', '0'),
	(4, 1, 3, 1, 'Bintang', '05 September2018', '0', '0'),
	(5, 1, 4, 1, 'Bintang', '05 September2018', '0', '0');
/*!40000 ALTER TABLE `a_groupprivileges` ENABLE KEYS */;

-- Dumping structure for table menu.a_menu
CREATE TABLE IF NOT EXISTS `a_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '0',
  `parrent_id` varchar(50) NOT NULL DEFAULT '0',
  `icon_code` varchar(50) DEFAULT NULL,
  `link` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='Menu and submenu';

-- Dumping data for table menu.a_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `a_menu` DISABLE KEYS */;
INSERT INTO `a_menu` (`id`, `menu`, `parrent_id`, `icon_code`, `link`) VALUES
	(1, 'Dashboard', '0', 'fa fa-home nav_icon', 'index.php'),
	(2, 'Masters', '0', 'fa fa-file  nav_icon', '#'),
	(3, 'Setting User', '2', '0', 'user.php'),
	(4, 'Setting Group', '2', '0', 'group.php'),
	(5, 'Inventory', '0', 'fa fa-inventory  nav_icon', '#'),
	(6, 'Table Panel', '0', 'fa store-alt  nav_icon', '#'),
	(7, 'Front End', '0', 'fa fa-shopping-cart  nav_icon', '#'),
	(8, 'Report', '0', 'fa fa-line-chart  nav_icon', '#'),
	(9, 'System', '0', 'fa fa-setting  nav_icon', '#');
/*!40000 ALTER TABLE `a_menu` ENABLE KEYS */;

-- Dumping structure for table menu.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `divisi` varchar(100) NOT NULL DEFAULT '0',
  `posisi` varchar(100) NOT NULL DEFAULT '0',
  `user_level` varchar(100) NOT NULL DEFAULT '0',
  `last_login` varchar(100) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table menu.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
