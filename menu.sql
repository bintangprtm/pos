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


-- Dumping database structure for pengajuan
CREATE DATABASE IF NOT EXISTS `pengajuan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pengajuan`;

-- Dumping structure for table pengajuan.a_group
CREATE TABLE IF NOT EXISTS `a_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pengajuan.a_group: ~1 rows (approximately)
/*!40000 ALTER TABLE `a_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `a_group` ENABLE KEYS */;

-- Dumping structure for table pengajuan.a_groupprivileges
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pengajuan.a_groupprivileges: ~0 rows (approximately)
/*!40000 ALTER TABLE `a_groupprivileges` DISABLE KEYS */;
/*!40000 ALTER TABLE `a_groupprivileges` ENABLE KEYS */;

-- Dumping structure for table pengajuan.a_menu
CREATE TABLE IF NOT EXISTS `a_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '0',
  `parrent_id` varchar(50) NOT NULL DEFAULT '0',
  `icon_code` varchar(50) NOT NULL DEFAULT '0',
  `link` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Menu and submenu';

-- Dumping data for table pengajuan.a_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `a_menu` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table pengajuan.user: ~5 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
