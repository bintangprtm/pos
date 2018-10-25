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


-- Dumping database structure for bkstechpos
CREATE DATABASE IF NOT EXISTS `bkstechpos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bkstechpos`;

-- Dumping structure for table bkstechpos.item
CREATE TABLE IF NOT EXISTS `item` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.item: ~25 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`ID`, `Name`, `Price`) VALUES
	(1, 'Coca-Cola', '4'),
	(2, 'Fanta', '3'),
	(3, 'Potato Chips', '18'),
	(4, 'French Fries', '2'),
	(5, 'Root Beer', '9'),
	(6, 'Tissue', '5'),
	(7, 'Candy', '1'),
	(8, 'Coffee', '4'),
	(9, 'Sugar', '7'),
	(10, 'Samyang', '4'),
	(11, 'Noodle', '11'),
	(12, 'Sprite', '4'),
	(13, 'Black Beer', '10'),
	(14, 'Rum', '4'),
	(15, 'Milk', '3'),
	(16, 'Ice Cream', '8'),
	(17, 'Energy Drink', '2'),
	(18, 'Mineral Water', '4'),
	(19, 'Shampoo', '9'),
	(20, 'Tea', '4'),
	(21, 'Marlboro', '13'),
	(22, 'Powder', '4'),
	(23, 'Bread', '15'),
	(24, 'Sauce', '2'),
	(25, 'Stamp', '1');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m01_groupauthority
CREATE TABLE IF NOT EXISTS `m01_groupauthority` (
  `ID` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `Flag` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m01_groupauthority: ~4 rows (approximately)
/*!40000 ALTER TABLE `m01_groupauthority` DISABLE KEYS */;
INSERT INTO `m01_groupauthority` (`ID`, `Name`, `IsActive`, `Flag`) VALUES
	(1, 'Superadmin', 1, 1),
	(2, 'Admin', 1, 1),
	(3, 'Manager', 1, 1),
	(4, 'Clark', 0, 0);
/*!40000 ALTER TABLE `m01_groupauthority` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m01_groupprivileges
CREATE TABLE IF NOT EXISTS `m01_groupprivileges` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `GroupID` int(11) NOT NULL,
  `MenuID` int(11) NOT NULL,
  `Permission` int(11) NOT NULL,
  `CreateBy` varchar(50) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` varchar(50) NOT NULL,
  `UpdateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m01_groupprivileges: ~48 rows (approximately)
/*!40000 ALTER TABLE `m01_groupprivileges` DISABLE KEYS */;
INSERT INTO `m01_groupprivileges` (`ID`, `GroupID`, `MenuID`, `Permission`, `CreateBy`, `CreateAt`, `UpdateBy`, `UpdateAt`) VALUES
	(1, 1, 1, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:32'),
	(2, 1, 2, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:32'),
	(3, 1, 8, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:47'),
	(4, 1, 9, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:28:37'),
	(5, 1, 10, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-17 04:19:46'),
	(6, 1, 11, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:28:29'),
	(7, 1, 12, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:32'),
	(8, 1, 7, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:32'),
	(9, 1, 3, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:23:32'),
	(10, 1, 4, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-15 23:28:29'),
	(11, 1, 5, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-16 19:08:34'),
	(12, 1, 6, 1, 'Superadmin', '0000-00-00 00:00:00', 'Administrator', '2018-10-16 19:08:34'),
	(14, 2, 1, 1, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:32:09'),
	(15, 2, 2, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(16, 2, 3, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(17, 2, 4, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(18, 2, 5, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(19, 2, 6, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(20, 2, 7, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(21, 2, 8, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(22, 2, 9, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(23, 2, 10, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(24, 2, 11, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(25, 2, 12, 0, 'Superadmin', '2018-10-17 04:29:19', 'Administrator', '2018-10-17 04:29:19'),
	(29, 3, 1, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(30, 3, 2, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(31, 3, 3, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(32, 3, 4, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(33, 3, 5, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(34, 3, 6, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(35, 3, 7, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(36, 3, 8, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(37, 3, 9, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(38, 3, 10, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(39, 3, 11, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(40, 3, 12, 0, 'Superadmin', '2018-10-17 04:30:43', 'Administrator', '2018-10-17 04:30:43'),
	(44, 4, 1, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(45, 4, 2, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(46, 4, 3, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(47, 4, 4, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(48, 4, 5, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(49, 4, 6, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(50, 4, 7, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(51, 4, 8, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(52, 4, 9, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(53, 4, 10, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(54, 4, 11, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01'),
	(55, 4, 12, 0, 'Superadmin', '2018-10-17 04:31:01', 'Administrator', '2018-10-17 04:31:01');
/*!40000 ALTER TABLE `m01_groupprivileges` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m01_loghistory
CREATE TABLE IF NOT EXISTS `m01_loghistory` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `log` varchar(3000) NOT NULL,
  `user` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m01_loghistory: ~41 rows (approximately)
/*!40000 ALTER TABLE `m01_loghistory` DISABLE KEYS */;
INSERT INTO `m01_loghistory` (`id`, `log`, `user`, `timestamp`, `category`, `group`) VALUES
	(4, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:36:56', 'log masuk', ''),
	(5, 'bintang telah gagal login dari ip ::1', 'bintang', '2018-10-13 00:37:22', 'log masuk', ''),
	(6, 'superadmin telah berhasil login dari ip ::1', 'superadmin', '2018-10-13 00:37:34', 'log masuk', ''),
	(7, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:38:25', 'log masuk', ''),
	(8, 'superadmin telah berhasil login dari ip ::1', 'superadmin', '2018-10-13 00:38:29', 'log masuk', ''),
	(9, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:39:31', 'log masuk', ''),
	(10, 'superadmin telah berhasil login dari ip ::1', 'superadmin', '2018-10-13 00:39:35', 'log masuk', ''),
	(11, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:40:01', 'log masuk', 'Superadmin'),
	(12, 'superadmin telah berhasil login dari ip ::1', 'superadmin', '2018-10-13 00:40:05', 'log masuk', ''),
	(13, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:43:14', 'log masuk', 'Superadmin'),
	(14, 'Administrator telah berhasil login dari ip ::1', 'Administrator', '2018-10-13 00:44:00', 'log masuk', 'Superadmin'),
	(15, 'Administrator telah logout dari ip ::1', 'Administrator', '2018-10-13 00:44:05', 'log masuk', 'Superadmin'),
	(16, 'Administrator telah berhasil login dari ip ::1', 'Administrator', '2018-10-13 00:44:09', 'log masuk', 'Superadmin'),
	(17, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:01:43', 'Update Privileges', 'Superadmin'),
	(18, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:02:03', 'Update Privileges', 'Superadmin'),
	(19, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:02:09', 'Update Privileges', 'Superadmin'),
	(20, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:08:06', 'Update Privileges', 'Superadmin'),
	(21, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:09:06', 'Update Privileges', 'Superadmin'),
	(22, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:10:30', 'Update Privileges', 'Superadmin'),
	(23, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:12:40', 'Update Privileges', 'Superadmin'),
	(24, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:23:32', 'Update Privileges', 'Superadmin'),
	(25, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:23:47', 'Update Privileges', 'Superadmin'),
	(26, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:24:50', 'Update Privileges', 'Superadmin'),
	(27, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:27:32', 'Update Privileges', 'Superadmin'),
	(28, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:28:18', 'Update Privileges', 'Superadmin'),
	(29, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:28:29', 'Update Privileges', 'Superadmin'),
	(30, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:28:37', 'Update Privileges', 'Superadmin'),
	(31, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:29:15', 'Update Privileges', 'Superadmin'),
	(32, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:32:22', 'Update Privileges', 'Superadmin'),
	(33, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:32:28', 'Update Privileges', 'Superadmin'),
	(34, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:34:46', 'Update Privileges', 'Superadmin'),
	(35, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-15 23:34:52', 'Update Privileges', 'Superadmin'),
	(36, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-16 19:08:34', 'Update Privileges', 'Superadmin'),
	(37, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-17 04:19:30', 'Update Privileges', 'Superadmin'),
	(38, 'Administrator telah update privileges for group Superadmin dari ip ::1', 'Administrator', '2018-10-17 04:19:46', 'Update Privileges', 'Superadmin'),
	(39, 'Administrator telah update privileges for group Admin dari ip ::1', 'Administrator', '2018-10-17 04:32:09', 'Update Privileges', 'Superadmin'),
	(40, 'Administrator telah Delete Group  dari ip ::1', 'Administrator', '2018-10-17 18:10:29', 'Group Manage', 'Superadmin'),
	(41, 'Administrator telah Add Group  dari ip ::1', 'Administrator', '2018-10-17 18:10:39', 'Group Manage', 'Superadmin'),
	(42, 'Administrator telah Delete Group  dari ip ::1', 'Administrator', '2018-10-17 18:12:07', 'Group Manage', 'Superadmin'),
	(43, 'Administrator telah Add Group Operator dari ip ::1', 'Administrator', '2018-10-17 18:12:16', 'Group Manage', 'Superadmin'),
	(44, 'Administrator telah Delete Group  dari ip ::1', 'Administrator', '2018-10-17 18:12:19', 'Group Manage', 'Superadmin');
/*!40000 ALTER TABLE `m01_loghistory` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m01_menusystem
CREATE TABLE IF NOT EXISTS `m01_menusystem` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `IconCode` varchar(225) NOT NULL,
  `LinkPage` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m01_menusystem: ~12 rows (approximately)
/*!40000 ALTER TABLE `m01_menusystem` DISABLE KEYS */;
INSERT INTO `m01_menusystem` (`ID`, `Description`, `ParentID`, `IconCode`, `LinkPage`) VALUES
	(1, 'Dashboard', 0, 'fa fa-home nav_icon', 'index.php'),
	(2, 'Front End', 0, 'fa fa-shopping-cart  nav_icon', 'index.php?page=frontend'),
	(3, 'Inventory', 0, 'fa fa-file  nav_icon', '#'),
	(4, 'Panel Setting', 0, 'fa store-alt  nav_icon', '#'),
	(5, 'Reports', 0, 'fa fa-line-chart  nav_icon', '#'),
	(6, 'Master', 0, 'fa fa-setting  nav_icon', '#'),
	(7, 'System', 0, 'fa fa-gear nav_icon', '#'),
	(8, 'User List', 7, 'fa fa-user nav_icon', 'index.php?page=userlist'),
	(9, 'Group Privileges', 7, 'fa fa-users nav_icon', 'index.php?page=grouplist'),
	(10, 'Terminal', 7, '', 'index.php?page=terminal'),
	(11, 'General', 7, '', 'index.php?page=general'),
	(12, 'Log History', 7, 'fa fa-users nav_icon', 'index.php?page=loghstr');
/*!40000 ALTER TABLE `m01_menusystem` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m01_user
CREATE TABLE IF NOT EXISTS `m01_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmpID` varchar(100) NOT NULL DEFAULT '0',
  `Username` varchar(100) NOT NULL DEFAULT '0',
  `Password` varchar(100) NOT NULL DEFAULT '0',
  `FirstName` varchar(100) NOT NULL DEFAULT '0',
  `LastName` varchar(100) NOT NULL DEFAULT '0',
  `Email` varchar(100) NOT NULL DEFAULT '0',
  `AuthorityID` varchar(100) NOT NULL DEFAULT '0',
  `GroupID` int(11) NOT NULL,
  `LastLogin` varchar(100) NOT NULL DEFAULT '0',
  `CreateBy` varchar(50) NOT NULL DEFAULT '0',
  `CreateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdateBy` varchar(50) NOT NULL DEFAULT '0',
  `UpdateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL DEFAULT '0',
  `Flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m01_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `m01_user` DISABLE KEYS */;
INSERT INTO `m01_user` (`ID`, `EmpID`, `Username`, `Password`, `FirstName`, `LastName`, `Email`, `AuthorityID`, `GroupID`, `LastLogin`, `CreateBy`, `CreateAt`, `UpdateBy`, `UpdateAt`, `isActive`, `Flag`) VALUES
	(1, 'BK009596', 'Laras', 'c56d0e9a7ccec67b4ea131655038d604', 'Laras', 'Pio', 'laras@bkstech.net', '1', 1, '0', '0', '2018-09-09 00:00:00', '0', '2018-09-09 00:00:00', 0, 0),
	(2, 'BK009598', 'Bintang', 'c56d0e9a7ccec67b4ea131655038d604', 'Bintang', 'Gejora', 'bintangp@bkstech.net', '2', 2, '0', '0', '2018-09-09 18:25:42', '0', '2018-10-09 05:02:59', 0, 0);
/*!40000 ALTER TABLE `m01_user` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m02_general
CREATE TABLE IF NOT EXISTS `m02_general` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Curency` varchar(50) NOT NULL DEFAULT '0',
  `TimeZone` varchar(50) NOT NULL DEFAULT '0',
  `CreatedBy` varchar(50) NOT NULL DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m02_general: ~1 rows (approximately)
/*!40000 ALTER TABLE `m02_general` DISABLE KEYS */;
INSERT INTO `m02_general` (`ID`, `Curency`, `TimeZone`, `CreatedBy`, `CreatedAt`, `UpdatedAt`, `UpdatedBy`) VALUES
	(1, 'IDR', 'Asia/Jakarta', 'Administrator', '2018-10-15 23:38:33', '2018-10-15 23:38:33', 'Administrator');
/*!40000 ALTER TABLE `m02_general` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m02_stock
CREATE TABLE IF NOT EXISTS `m02_stock` (
  `STOCKID` int(25) NOT NULL AUTO_INCREMENT,
  `CATEGORY` varchar(15) DEFAULT NULL,
  `BRAND` varchar(15) DEFAULT NULL,
  `MODEL` varchar(25) DEFAULT NULL,
  `STKGROUP` varchar(15) DEFAULT NULL,
  `DESCRIP1` varchar(100) DEFAULT NULL,
  `DESCRIP2` varchar(100) DEFAULT NULL,
  `ISSTOCK` int(1) NOT NULL,
  `STOCKNO` varchar(15) DEFAULT NULL,
  `PARTNO` varchar(30) DEFAULT NULL,
  `TYPE` varchar(10) DEFAULT NULL,
  `ONHAND` decimal(14,4) DEFAULT NULL,
  `ONORDER` decimal(14,4) DEFAULT NULL,
  `MINONHAND` decimal(14,4) DEFAULT NULL,
  `MAXONHAND` decimal(14,4) DEFAULT NULL,
  `REORDQTY` decimal(14,4) DEFAULT NULL,
  `POSPrice` decimal(18,4) DEFAULT NULL,
  `POSQty` decimal(18,2) DEFAULT NULL,
  `POSCost` decimal(18,4) DEFAULT NULL,
  `POSDiscPct` decimal(18,2) DEFAULT NULL,
  `POSDiscAmt` decimal(18,2) DEFAULT NULL,
  `POSMemDiscPct` decimal(18,2) DEFAULT NULL,
  `POSMemDiscAmt` decimal(18,2) DEFAULT NULL,
  `POSGstInclusive` varchar(1) DEFAULT NULL,
  `POSLabel1` varchar(20) DEFAULT NULL,
  `POSLabel2` varchar(20) DEFAULT NULL,
  `POSLabel3` varchar(20) DEFAULT NULL,
  `POSDisplayLabel` varchar(20) DEFAULT NULL,
  `POSPICTURE` varchar(100) DEFAULT NULL,
  `POSNotes` varchar(500) DEFAULT NULL,
  `POSQtyDiscYN` decimal(1,0) DEFAULT NULL,
  `POSDiscQty` decimal(18,0) DEFAULT NULL,
  `POSDiscPrice` decimal(18,2) DEFAULT NULL,
  `POSQtyYN` varchar(1) DEFAULT NULL,
  `POSPriceYN` varchar(1) DEFAULT NULL,
  `ManualIte` varchar(1) DEFAULT NULL,
  `POSDescriptionYN` varchar(1) DEFAULT NULL,
  `BarCode` varchar(30) DEFAULT NULL,
  `chkMinOnHand` int(1) DEFAULT NULL,
  `ItemStatus` varchar(1) DEFAULT NULL,
  `POSDiscYN` varchar(1) DEFAULT NULL,
  `POSDiscountableYN` varchar(1) DEFAULT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `UpdateBy` varchar(50) NOT NULL DEFAULT '0',
  `UpdateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL DEFAULT '0',
  `Flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`STOCKID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m02_stock: ~2 rows (approximately)
/*!40000 ALTER TABLE `m02_stock` DISABLE KEYS */;
INSERT INTO `m02_stock` (`STOCKID`, `CATEGORY`, `BRAND`, `MODEL`, `STKGROUP`, `DESCRIP1`, `DESCRIP2`, `ISSTOCK`, `STOCKNO`, `PARTNO`, `TYPE`, `ONHAND`, `ONORDER`, `MINONHAND`, `MAXONHAND`, `REORDQTY`, `POSPrice`, `POSQty`, `POSCost`, `POSDiscPct`, `POSDiscAmt`, `POSMemDiscPct`, `POSMemDiscAmt`, `POSGstInclusive`, `POSLabel1`, `POSLabel2`, `POSLabel3`, `POSDisplayLabel`, `POSPICTURE`, `POSNotes`, `POSQtyDiscYN`, `POSDiscQty`, `POSDiscPrice`, `POSQtyYN`, `POSPriceYN`, `ManualIte`, `POSDescriptionYN`, `BarCode`, `chkMinOnHand`, `ItemStatus`, `POSDiscYN`, `POSDiscountableYN`, `CreateAt`, `UpdateBy`, `UpdateAt`, `isActive`, `Flag`) VALUES
	(1, 'FRUIT', NULL, NULL, NULL, 'BEET ROOT', NULL, 1, NULL, NULL, NULL, 50.0000, NULL, 5.0000, 100.0000, NULL, 2.5000, NULL, 1.5000, NULL, NULL, NULL, NULL, '1', 'BEET ROOT', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '1', '1', '0563684', 1, NULL, '0', NULL, '2018-09-09 00:00:00', '0', '2018-09-09 00:00:00', 1, 1),
	(2, 'Drink', 'Coke', NULL, NULL, 'Coca Cola', NULL, 1, NULL, NULL, NULL, 1500.0000, NULL, 120.0000, 5000.0000, 250.0000, 5.0000, NULL, 2.0000, NULL, NULL, NULL, NULL, NULL, 'COLA', NULL, NULL, NULL, '../../resources/Images/cocacola.jpg', NULL, 0, 0, 0.00, '0', '0', '0', '1', '456456', NULL, NULL, NULL, NULL, '2018-09-09 00:00:00', '0', '2018-09-09 00:00:00', 1, 1);
/*!40000 ALTER TABLE `m02_stock` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m02_terminal
CREATE TABLE IF NOT EXISTS `m02_terminal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TypeFrontEnd` varchar(50) NOT NULL,
  `PrinterSet` varchar(50) NOT NULL,
  `CreatedBy` varchar(50) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedBy` varchar(50) NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m02_terminal: ~1 rows (approximately)
/*!40000 ALTER TABLE `m02_terminal` DISABLE KEYS */;
INSERT INTO `m02_terminal` (`ID`, `TypeFrontEnd`, `PrinterSet`, `CreatedBy`, `CreatedAt`, `UpdatedBy`, `UpdatedAt`) VALUES
	(1, 'Store', 'HP DeskJet', 'Administrator', '2018-10-15 23:45:50', 'Administrator', '2018-10-17 20:31:05');
/*!40000 ALTER TABLE `m02_terminal` ENABLE KEYS */;

-- Dumping structure for table bkstechpos.m03_sales
CREATE TABLE IF NOT EXISTS `m03_sales` (
  `SALESNO` int(25) NOT NULL AUTO_INCREMENT,
  `SALESDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `STAFFID` varchar(25) DEFAULT NULL,
  `POSID` varchar(10) DEFAULT NULL,
  `LOCATION` varchar(10) DEFAULT NULL,
  `STATUS` varchar(1) DEFAULT NULL,
  `TYPE` varchar(2) DEFAULT NULL,
  `SALESVALUE` decimal(18,2) DEFAULT NULL,
  `DISCVALUE` decimal(18,2) DEFAULT NULL,
  `VALUE` decimal(18,2) DEFAULT NULL,
  `TAXVALUE` decimal(18,2) DEFAULT NULL,
  `APPLIEDVALUE` decimal(18,2) DEFAULT NULL,
  `CASHVALUE` decimal(18,2) DEFAULT NULL,
  `SETTLEVALUE1` decimal(18,2) DEFAULT NULL,
  `SETTLEVALUE2` decimal(18,2) DEFAULT NULL,
  `SETTLETYPE1` varchar(20) DEFAULT NULL,
  `SETTLETYPE2` varchar(20) DEFAULT NULL,
  `CUSTID` varchar(25) DEFAULT NULL,
  `CODE` decimal(18,2) DEFAULT NULL,
  `SALESTIME` varchar(15) DEFAULT NULL,
  `GSTVALUE` decimal(18,2) DEFAULT NULL,
  `REFTYPE` varchar(25) DEFAULT NULL,
  `DESCRIPTION` varchar(100) DEFAULT NULL,
  `BALANCEVALUE` decimal(18,2) DEFAULT NULL,
  `CREDITVALUE` decimal(18,2) DEFAULT NULL,
  `CHANGEVALUE` decimal(18,2) DEFAULT NULL,
  `CASHSETTLED` decimal(18,2) DEFAULT NULL,
  `TABLENO` varchar(15) DEFAULT NULL,
  `ROOMCODE` varchar(15) DEFAULT NULL,
  `STKSTATUS` varchar(1) DEFAULT NULL,
  `ROUNDVALUE` decimal(18,2) DEFAULT NULL,
  `CUSTCODE` varchar(25) DEFAULT NULL,
  `CUSTNAME` varchar(100) DEFAULT NULL,
  `SALESSTAFF` varchar(25) DEFAULT NULL,
  `TAXVALUE1` decimal(18,2) DEFAULT NULL,
  `TAXVALUE2` decimal(18,2) DEFAULT NULL,
  `POPTIMES` decimal(18,2) DEFAULT NULL,
  `VOIDDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `VOIDTIME` varchar(8) DEFAULT NULL,
  `VOIDSTAFF` varchar(50) DEFAULT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `UpdateBy` varchar(50) NOT NULL DEFAULT '0',
  `UpdateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL DEFAULT '0',
  `Flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`SALESNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bkstechpos.m03_sales: ~0 rows (approximately)
/*!40000 ALTER TABLE `m03_sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `m03_sales` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
