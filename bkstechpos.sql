-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2018 at 01:26 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkstechpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `m01_GroupAuthority`
--

CREATE TABLE `m01_GroupAuthority` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `Flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m01_GroupAuthority`
--

INSERT INTO `m01_GroupAuthority` (`ID`, `Name`, `IsActive`, `Flag`) VALUES
(1, 'Superadmin', 1, 1),
(2, 'Admin', 1, 1),
(3, 'Manager', 1, 1),
(4, 'Clark', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m01_GroupPrivileges`
--

CREATE TABLE `m01_GroupPrivileges` (
  `ID` int(11) UNSIGNED NOT NULL,
  `GroupID` int(11) NOT NULL,
  `MenuID` int(11) NOT NULL,
  `Permission` int(11) NOT NULL,
  `CreateBy` varchar(50) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `UpdateBy` int(11) NOT NULL,
  `UpdateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m01_GroupPrivileges`
--

INSERT INTO `m01_GroupPrivileges` (`ID`, `GroupID`, `MenuID`, `Permission`, `CreateBy`, `CreateAt`, `UpdateBy`, `UpdateAt`) VALUES
(1, 1, 1, 1, 'Superadmin', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 1, 2, 1, 'Superadmin', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m01_MenuSystem`
--

CREATE TABLE `m01_MenuSystem` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Description` varchar(50) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `IconCode` varchar(225) NOT NULL,
  `LinkPage` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m01_MenuSystem`
--

INSERT INTO `m01_MenuSystem` (`ID`, `Description`, `ParentID`, `IconCode`, `LinkPage`) VALUES
(1, 'Dashboard', 0, 'fa fa-home nav_icon', 'index.php'),
(2, 'Front End', 0, 'fa fa-shopping-cart  nav_icon', '#'),
(3, 'Inventory', 0, 'fa fa-file  nav_icon', '#'),
(4, 'Panel Setting', 0, 'fa store-alt  nav_icon', '#'),
(5, 'Reports', 0, 'fa fa-line-chart  nav_icon', '#'),
(6, 'Master', 0, 'fa fa-setting  nav_icon', '#'),
(7, 'System', 0, 'fa fa-setting  nav_icon', '#');

-- --------------------------------------------------------

--
-- Table structure for table `m01_User`
--

CREATE TABLE `m01_User` (
  `ID` int(11) NOT NULL,
  `EmpID` varchar(100) NOT NULL DEFAULT '0',
  `Username` varchar(100) NOT NULL DEFAULT '0',
  `Password` varchar(100) NOT NULL DEFAULT '0',
  `FirtsName` varchar(100) NOT NULL DEFAULT '0',
  `LastName` varchar(100) NOT NULL DEFAULT '0',
  `Email` varchar(100) NOT NULL DEFAULT '0',
  `AuthorityID` varchar(100) NOT NULL DEFAULT '0',
  `GroupID` int(11) DEFAULT NULL,
  `LastLogin` varchar(100) NOT NULL DEFAULT '0',
  `CreateBy` varchar(50) NOT NULL DEFAULT '0',
  `CreateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `UpdateBy` varchar(50) NOT NULL DEFAULT '0',
  `UpdateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL DEFAULT '0',
  `Flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m01_User`
--

INSERT INTO `m01_User` (`ID`, `EmpID`, `Username`, `Password`, `FirtsName`, `LastName`, `Email`, `AuthorityID`, `GroupID`, `LastLogin`, `CreateBy`, `CreateAt`, `UpdateBy`, `UpdateAt`, `isActive`, `Flag`) VALUES
(1, 'BK009596', 'Laras', 'c56d0e9a7ccec67b4ea131655038d604', 'Laras', 'Pio', 'laras@bkstech.net', '1', 1, '0', '0', '2018-09-08 17:00:00', '0', '2018-09-08 17:00:00', 0, 0),
(2, 'BK009598', 'Bintang', 'c56d0e9a7ccec67b4ea131655038d604', 'Bintang', 'Gejora', 'bintang@bkstech.net', '2', 2, '0', '0', '2018-09-09 11:25:42', '0', '2018-09-09 11:25:42', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `m02_Stock`
--

CREATE TABLE `m02_Stock` (
  `STOCKID` int(25) NOT NULL,
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
  `Flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m02_Stock`
--

INSERT INTO `m02_Stock` (`STOCKID`, `CATEGORY`, `BRAND`, `MODEL`, `STKGROUP`, `DESCRIP1`, `DESCRIP2`, `ISSTOCK`, `STOCKNO`, `PARTNO`, `TYPE`, `ONHAND`, `ONORDER`, `MINONHAND`, `MAXONHAND`, `REORDQTY`, `POSPrice`, `POSQty`, `POSCost`, `POSDiscPct`, `POSDiscAmt`, `POSMemDiscPct`, `POSMemDiscAmt`, `POSGstInclusive`, `POSLabel1`, `POSLabel2`, `POSLabel3`, `POSDisplayLabel`, `POSPICTURE`, `POSNotes`, `POSQtyDiscYN`, `POSDiscQty`, `POSDiscPrice`, `POSQtyYN`, `POSPriceYN`, `ManualIte`, `POSDescriptionYN`, `BarCode`, `chkMinOnHand`, `ItemStatus`, `POSDiscYN`, `POSDiscountableYN`, `CreateAt`, `UpdateBy`, `UpdateAt`, `isActive`, `Flag`) VALUES
(1, 'FRUIT', NULL, NULL, NULL, 'BEET ROOT', NULL, 1, NULL, NULL, NULL, '50.0000', NULL, '5.0000', '100.0000', NULL, '2.5000', NULL, '1.5000', NULL, NULL, NULL, NULL, '1', 'BEET ROOT', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, '1', '1', '1', '0563684', 1, NULL, '0', NULL, '2018-09-08 17:00:00', '0', '2018-09-08 17:00:00', 1, 1),
(2, 'Drink', 'Coke', NULL, NULL, 'Coca Cola', NULL, 1, NULL, NULL, NULL, '1500.0000', NULL, '120.0000', '5000.0000', '250.0000', '5.0000', NULL, '2.0000', NULL, NULL, NULL, NULL, NULL, 'COLA', NULL, NULL, NULL, '../../resources/Images/cocacola.jpg', NULL, '0', '0', '0.00', '0', '0', '0', '1', '456456', NULL, NULL, NULL, NULL, '2018-09-08 17:00:00', '0', '2018-09-08 17:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m03_Sales`
--

CREATE TABLE `m03_Sales` (
  `SALESNO` int(25) NOT NULL,
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
  `Flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m01_GroupAuthority`
--
ALTER TABLE `m01_GroupAuthority`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m01_GroupPrivileges`
--
ALTER TABLE `m01_GroupPrivileges`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m01_MenuSystem`
--
ALTER TABLE `m01_MenuSystem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m01_User`
--
ALTER TABLE `m01_User`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m02_Stock`
--
ALTER TABLE `m02_Stock`
  ADD PRIMARY KEY (`STOCKID`);

--
-- Indexes for table `m03_Sales`
--
ALTER TABLE `m03_Sales`
  ADD PRIMARY KEY (`SALESNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m01_GroupAuthority`
--
ALTER TABLE `m01_GroupAuthority`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m01_GroupPrivileges`
--
ALTER TABLE `m01_GroupPrivileges`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m01_MenuSystem`
--
ALTER TABLE `m01_MenuSystem`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `m01_User`
--
ALTER TABLE `m01_User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m02_Stock`
--
ALTER TABLE `m02_Stock`
  MODIFY `STOCKID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m03_Sales`
--
ALTER TABLE `m03_Sales`
  MODIFY `SALESNO` int(25) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
