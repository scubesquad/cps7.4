-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2023 at 08:25 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cucc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_accountholdermaster`
--

DROP TABLE IF EXISTS `tb_accountholdermaster`;
CREATE TABLE IF NOT EXISTS `tb_accountholdermaster` (
  `ach_Id` int NOT NULL AUTO_INCREMENT,
  `ach_account_No` int NOT NULL,
  `ach_account_Name` varchar(40) NOT NULL,
  `ach_Bearer_Order` int NOT NULL,
  `ach_Transaction_Code` int NOT NULL,
  `ach_At_Par` int NOT NULL,
  `ach_Joint_Name1` varchar(40) NOT NULL,
  `ach_Joint_Name2` varchar(40) NOT NULL,
  `ach_Authorized_Signatory1` varchar(25) NOT NULL,
  `ach_Authorized_Signatory2` varchar(25) NOT NULL,
  `ach_Authorized_Signatory3` varchar(25) NOT NULL,
  `ach_Address1` varchar(200) NOT NULL,
  `ach_Address2` varchar(200) NOT NULL,
  `ach_Suburb` int NOT NULL,
  `ach_City` int NOT NULL,
  `ach_State` int NOT NULL,
  `ach_Country` int NOT NULL,
  `ach_Pincode` int NOT NULL,
  `ach_Telephone_Residence` int NOT NULL,
  `ach_Telephone_Office` int NOT NULL,
  `ach_Mobile_No` int NOT NULL,
  `ach_Branch` int NOT NULL,
  `ach_emailId` varchar(30) NOT NULL,
  PRIMARY KEY (`ach_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_accountholdermaster`
--

INSERT INTO `tb_accountholdermaster` (`ach_Id`, `ach_account_No`, `ach_account_Name`, `ach_Bearer_Order`, `ach_Transaction_Code`, `ach_At_Par`, `ach_Joint_Name1`, `ach_Joint_Name2`, `ach_Authorized_Signatory1`, `ach_Authorized_Signatory2`, `ach_Authorized_Signatory3`, `ach_Address1`, `ach_Address2`, `ach_Suburb`, `ach_City`, `ach_State`, `ach_Country`, `ach_Pincode`, `ach_Telephone_Residence`, `ach_Telephone_Office`, `ach_Mobile_No`, `ach_Branch`, `ach_emailId`) VALUES
(1, 1001223322, 'RAKESH SHAH', 0, 1, 0, 'RAKESH LUCKY', '', 'SIGN 1', '', '', 'VIKRILI', 'VIKRILI', 3, 1, 1, 105, 400030, 2147483647, 2147483647, 2147483647, 2, 'ach@gmail.com'),
(2, 1001223311, 'LIJESH SHARMA', 0, 1, 0, 'RAKESH LUCKY', '', 'SIGN 1', '', '', 'VIKRILI', 'VIKRILI', 3, 1, 1, 105, 400030, 2147483647, 2147483647, 2147483647, 5, 'lig@gmail.com'),
(5, 1001223344, 'RAKESH SHAHP', 0, 1, 0, 'RAKESH LUCKY', '', 'SIGN 1', '', '', 'VIKRILI', 'VIKRILI', 3, 1, 1, 105, 400030, 2147483647, 2147483647, 2147483647, 0, ''),
(6, 1001223341, 'HSDF', 0, 1, 0, '', '', 'SIGN 1', '', '', 'VIKRILI', 'VIKRILI', 3, 1, 1, 105, 400030, 2147483647, 2147483647, 2147483647, 0, 'ach@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bankdetails`
--

DROP TABLE IF EXISTS `tb_bankdetails`;
CREATE TABLE IF NOT EXISTS `tb_bankdetails` (
  `bank_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `bank_address1` text NOT NULL,
  `bank_address2` varchar(36) NOT NULL,
  `bank_address3` varchar(36) NOT NULL,
  `bank_country_id` int NOT NULL,
  `bank_state_id` int NOT NULL,
  `bank_city_id` int NOT NULL,
  `bank_suburb_id` int NOT NULL,
  `bank_pin` varchar(15) NOT NULL,
  `bank_contact_no1` varchar(15) NOT NULL,
  `bank_contact_no2` varchar(15) NOT NULL,
  `bank_contact_per1` varchar(40) NOT NULL,
  `bank_contact_per2` varchar(40) NOT NULL,
  `bank_contact_per_LL1` int NOT NULL,
  `bank_contact_per_LL2` int NOT NULL,
  `bank_emailid2` varchar(30) NOT NULL,
  `bank_emailid` varchar(40) NOT NULL,
  `bank_website` varchar(40) NOT NULL,
  `bank_printers` text NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bankdetails`
--

INSERT INTO `tb_bankdetails` (`bank_id`, `bank_name`, `bank_code`, `bank_address1`, `bank_address2`, `bank_address3`, `bank_country_id`, `bank_state_id`, `bank_city_id`, `bank_suburb_id`, `bank_pin`, `bank_contact_no1`, `bank_contact_no2`, `bank_contact_per1`, `bank_contact_per2`, `bank_contact_per_LL1`, `bank_contact_per_LL2`, `bank_emailid2`, `bank_emailid`, `bank_website`, `bank_printers`) VALUES
(0001, 'THE KARAD URBAN CO-OP BANK LTD, KARAD', 488, 'GURUWARE PETH BRANCH - 243 A,', 'TILAK ROAD,KARAD ', '', 1, 2, 1, 1, '415110', '', '', '', '', 0, 0, '', '', '', 'a:1:{i:0;a:3:{i:0;s:7:\"cdsdsfs\";i:1;s:6:\"Tray 2\";i:2;s:6:\"Tray 3\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_branchdetails`
--

DROP TABLE IF EXISTS `tb_branchdetails`;
CREATE TABLE IF NOT EXISTS `tb_branchdetails` (
  `branch_id` int NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_micr` varchar(20) NOT NULL,
  `branch_atparmicrcode` varchar(20) NOT NULL,
  `branch_address1` varchar(85) NOT NULL,
  `branch_address2` varchar(65) NOT NULL,
  `branch_address3` varchar(85) NOT NULL,
  `branch_country_id` int NOT NULL DEFAULT '0',
  `branch_state_id` int NOT NULL,
  `branch_city_id` int NOT NULL,
  `branch_suburb_id` int NOT NULL,
  `branch_pin` int NOT NULL,
  `branch_telephone1` varchar(12) NOT NULL,
  `branch_telephone2` varchar(12) NOT NULL,
  `branch_contactperson1` varchar(50) NOT NULL,
  `branch_contactperson2` varchar(50) NOT NULL,
  `branch_contactpersonmobile1` varchar(50) NOT NULL,
  `branch_contactpersonmobile2` varchar(50) NOT NULL,
  `branch_email1` varchar(30) NOT NULL,
  `branch_email2` varchar(30) NOT NULL,
  `branch_holiday` varchar(20) DEFAULT NULL,
  `branch_neftifsccode` varchar(20) NOT NULL,
  `branch_printers` text,
  `branch_working_hours` float DEFAULT NULL,
  `branch_clearingthrough` tinyint(1) NOT NULL DEFAULT '0',
  `branch_clearingcenter` tinyint(1) NOT NULL DEFAULT '0',
  `clr_bank_code` varchar(15) NOT NULL,
  `clr_bank_city` int NOT NULL,
  `branch_City_Code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `branch_Services` varchar(100) NOT NULL,
  `branch_reg_busi_hrs` varchar(100) NOT NULL,
  `branch_half_busi_hrs` varchar(100) NOT NULL,
  `branch_sunday_working` varchar(100) NOT NULL,
  `branch_tollfree_no` varchar(20) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_branchdetails`
--

INSERT INTO `tb_branchdetails` (`branch_id`, `branch_code`, `branch_name`, `branch_micr`, `branch_atparmicrcode`, `branch_address1`, `branch_address2`, `branch_address3`, `branch_country_id`, `branch_state_id`, `branch_city_id`, `branch_suburb_id`, `branch_pin`, `branch_telephone1`, `branch_telephone2`, `branch_contactperson1`, `branch_contactperson2`, `branch_contactpersonmobile1`, `branch_contactpersonmobile2`, `branch_email1`, `branch_email2`, `branch_holiday`, `branch_neftifsccode`, `branch_printers`, `branch_working_hours`, `branch_clearingthrough`, `branch_clearingcenter`, `clr_bank_code`, `clr_bank_city`, `branch_City_Code`, `branch_Services`, `branch_reg_busi_hrs`, `branch_half_busi_hrs`, `branch_sunday_working`, `branch_tollfree_no`) VALUES
(2, '352', 'GURUWAR PETH BRANCH', '', '', '243,A, GURUWAR PETH', 'TILAK ROAD', '', 1, 2, 1, 1, 415110, '02164-222243', '', '9850050601', '', '9850050601', '', 'branch1@karadurbanbank.com', '', NULL, 'KUCB0488001', NULL, NULL, 0, 0, '', 0, 415, 'ATM/LOCKER', 'MON. TO FRI.', '', '', ''),
(3, '353', 'TALBHAG BRANCH', '', '', 'KRISHNA BUILDING', 'SHANIWAR PETH', '', 1, 2, 1, 1, 415110, '02164-222234', '', '', '', '9850050602', '', 'branch2@karadurbanbank.com', '', NULL, 'KUCB0488002', NULL, NULL, 0, 0, '', 0, 415, 'ATM/LOCKER', 'MON.TO FRI.', 'NO', '', ''),
(4, '354', 'VIDYANAGAR BRANCH', '', '', 'OPP. COLLEGE OF PHARMACY', 'VIDYANAGAR', '', 1, 2, 1, 1, 415110, '02164-271326', '', '', '', '9850050606', '', 'branch6@karadurbanbank.com', '', NULL, 'KUCB0488006', NULL, NULL, 0, 0, '', 0, 415, 'ATM/LOCKER', 'MON.TO FRI.', '', '', ''),
(5, '357', 'RUKMININAGAR BRANCH', '', '', 'POOJA COMPLEX', 'RUKMININAGAR', '', 1, 2, 1, 1, 415110, '02164-223820', '', '', '', '9850050624', '', 'branch24@karadurbanbank.com', '', NULL, 'KUCB0488024', NULL, NULL, 0, 0, '', 0, 415, 'ATM/LOCKER', 'SUN,2ND & 4TH SAT.', '', '', ''),
(6, '358', 'MANGALWAR PETH BRANCH', '', '', 'OPP. KARAD MUNCIPAL COUNCIL', 'MANGALWAR PETH', '', 1, 2, 1, 1, 415110, '02164-223921', '', '', '', '9850050626', '', 'branch26@karadurbanbank.com', '', NULL, 'KUCB0488026', NULL, NULL, 0, 0, '', 0, 415, '', '', '', '', ''),
(7, '355', 'SAYAM BRANCH', '415488355', '', 'M.G. ROAD,ATTAR BUILDING, ', 'AZAD CHOWK, RAVIWAR PETH, ', ' - 415110', 1, 2, 1, 1, 415110, '02164222533', '', 'SNEHANAL CHOUGALE', '', '9850050607', '', 'branch7@karadurbanbank.com', '', NULL, 'KUCB0488007', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(8, '505', 'MALHARPETH BRANCH', '', '', '904/905, OM PLAZA', 'MALHARPETH ', 'TAL.', 1, 2, 2, 2, 415205, '', '02372285013', 'BRANCH MANAGER', '', '9822272612', '', 'branch12@karadurbanbank.com', '', NULL, 'KUCB0488012', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(9, '501', 'MASUR BRANCH', '', '', 'OPP. S.T. STAND, ', 'AT POST - MASUR ', '', 1, 2, 1, 3, 415106, '', '02164252240', 'BRANCH MANAGER', '', '9850050604', '', 'branch4@karadurbanbank.com', '', NULL, 'KUCB0488004', NULL, NULL, 0, 0, '', 0, 488, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(10, '502', 'UMBRAJ BRANCH', '', '', 'S.NO. - 812, WAKDE BUILDING, ', '', '', 1, 2, 1, 4, 415109, '', '02164264045', '', '', '9850050605', '', 'branch5@karadurbanbank.com', '', NULL, 'KUCB0488005', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(11, '356', 'MALKAPUR BRANCH', '', '', 'PLOT NO. 01, SHINDE BUILDING, ', 'P.B. ROAD, ', 'MALAKAPUR - 415539', 1, 2, 1, 5, 415539, '02164241448', '', 'BRANCH MANAGER', '', '9850050611', '', 'branch11@karadurbanbank.com', '', NULL, 'KUCB0488011', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(12, '509', 'KALE BRANCH', '', '', 'GRAMPANCHAYAT BUILDING, ', 'KALE -  415104', '', 1, 2, 1, 6, 415104, '02164254285', '', 'BRANCH MANAGER', '', '9881302039', '', 'branch20@karadurbanbank.com', '', NULL, 'KUCB0488020', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(13, '359', 'KARVE NAKA KARAD BRANCH', '', '', 'P.NO. 8, PRIYADARSHINI', ' CO - OP HOUSING SOCIETY, ', 'KARVE NAKA, KARAD - 415110', 1, 2, 1, 1, 415110, '02164229563', '', 'BRANCH MANAGER', '', '9850050637', '', 'branch37@karadurbanbank.com', '', NULL, 'KUCB0488037', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(14, '512', 'MIDC TASWADE BRANCH', '', '', 'P- 31, KARAD INDUSTRIAL AREA, BEHIND', ' MIDC OFFICE, TASWADE KARAD -', ' 415109', 1, 2, 1, 1, 415110, '02164258004', '', '', '', '9881130752', '', 'branch37@karadurbanbank.com', '', NULL, 'KUCB0488052', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(15, '201', 'CHIPLUN BRANCH', '', '', 'SWAMI COMPLEX A, MAIN BAJAR, ', 'NEAR OLD S.T. STAND, ', 'CHIPLUN -415605', 1, 2, 8, 7, 415605, '', '', '', '', '', '', '', '', NULL, 'KUCB0488032', NULL, NULL, 0, 0, '', 0, 415, '', '', '', '', ''),
(16, '101', 'ISLAMPUR BRANCH', '', '', 'YUSUFIA BUSINESS CENTER,', 'YUSUF SAVKAR COLONY, ISLAMPUR ,', 'TAL-WALVA DIST-SANGLI 415409', 1, 2, 9, 8, 415409, '02342222696', '', '', '', '9850050618', '', 'branch18@karadurbanbank.com', '', NULL, 'KUCB0488018', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(17, '514', 'PUSESAVALI', '415488514', '', 'YASIN B MANZIL BUILDING, KARAD ROAD,', ' PUSESAVALI, TALUKA-KHATAV, DIST-SATARA,', ' PUSESAVALI.-415512', 1, 2, 10, 9, 415512, '', '', 'BRANCH MANAGER', '', '9112200601', '9112200601', 'branch73@karadurbanbank.com', '', NULL, 'KUCB0488073', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', ''),
(18, '515', 'TALMAVALE', '415488515', '', 'SHIVKANYA BUILDING,KARAD-DHEBEWADI ROAD, ', 'TAIGADEWADI, TALMAVALE,  TALUKA - PATAN , DIST- SATARA.-415', '', 1, 2, 2, 10, 415103, '', '', 'BRANCH MANAGER', '', '9112200606', '', 'branch71@karadurbanbank.com', '', NULL, 'KUCB0488071', NULL, NULL, 0, 0, '', 0, 415, 'ATM / LOCKER', 'MON. TO FRIDAY 10.00AM TO 6.00 PM', 'NO', 'NO', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_citymaster`
--

DROP TABLE IF EXISTS `tb_citymaster`;
CREATE TABLE IF NOT EXISTS `tb_citymaster` (
  `city_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `city_code` varchar(7) NOT NULL,
  `city_place` varchar(30) NOT NULL,
  `city_name_al` varchar(4) NOT NULL,
  `country_id` int NOT NULL,
  `state_id` int NOT NULL,
  `is_delete` int NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_citymaster`
--

INSERT INTO `tb_citymaster` (`city_id`, `city_code`, `city_place`, `city_name_al`, `country_id`, `state_id`, `is_delete`) VALUES
(001, 'KAR001', 'KARAD', 'AMR', 1, 2, 0),
(002, 'PAT001', 'PATAN', 'MAL', 1, 2, 0),
(003, 'MAS001', 'MASUR', 'MAS', 1, 2, 0),
(004, 'UMB001', 'UMBRAJ', 'UMB', 1, 2, 0),
(005, 'MAL002', 'MALKAPUR', 'MAL', 1, 2, 0),
(006, 'MLH001', 'MLHARPETH', 'MLH', 1, 2, 0),
(007, 'KAL001', 'KALE', 'KAL', 1, 2, 0),
(008, 'CHI001', 'CHIPLUN', 'CHI', 1, 2, 0),
(009, 'ISL001', 'ISLAMPUR', 'ISL', 1, 2, 0),
(010, ' PU001', ' PUSESAVALI', ' PU', 1, 2, 0),
(011, 'TAL001', 'TALMAVALE', 'TAL', 1, 2, 0),
(012, 'PAL001', 'PALUS', 'PAL', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_countrymaster`
--

DROP TABLE IF EXISTS `tb_countrymaster`;
CREATE TABLE IF NOT EXISTS `tb_countrymaster` (
  `country_id` int NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb3_unicode_ci NOT NULL,
  `country_isdelete` int NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tb_countrymaster`
--

INSERT INTO `tb_countrymaster` (`country_id`, `country_name`, `country_code`, `country_isdelete`) VALUES
(1, 'INDIA', 'IND', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_adminpasswords`
--

DROP TABLE IF EXISTS `tb_cps_adminpasswords`;
CREATE TABLE IF NOT EXISTS `tb_cps_adminpasswords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminid` int NOT NULL,
  `password` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_adminpasswords`
--

INSERT INTO `tb_cps_adminpasswords` (`id`, `adminid`, `password`, `date`) VALUES
(1, 0, 0, '2012-09-28'),
(2, 0, 192023, '2012-09-28'),
(3, 0, 466, '2013-04-10'),
(4, 0, 1, '2013-04-10'),
(5, 0, 0, '2013-04-10'),
(6, 0, 16, '2013-04-10'),
(7, 0, 192023, '2013-09-25'),
(8, 0, 0, '2013-09-25'),
(9, 0, 192023, '2014-01-02'),
(10, 0, 21232, '2014-01-02'),
(11, 0, 192023, '2014-01-03'),
(12, 0, 0, '2014-01-03'),
(13, 0, 0, '2014-01-08'),
(14, 0, 7, '2014-01-08'),
(15, 0, 9, '2014-01-28'),
(16, 0, 0, '2014-01-28'),
(17, 0, 3407936, '2014-01-28'),
(18, 0, 192023, '2014-02-03'),
(19, 0, 14, '2014-02-03'),
(20, 0, 192023, '2014-02-05'),
(21, 0, 0, '2014-02-05'),
(22, 0, 1, '2014-02-15'),
(23, 0, 8, '2014-02-15'),
(24, 0, 192023, '2015-02-14'),
(25, 0, 0, '2015-02-14'),
(26, 2079, 192023, '2015-06-02'),
(27, 0, 1, '2016-01-13'),
(28, 0, 25, '2016-01-18'),
(29, 0, 192023, '2016-01-18'),
(30, 0, 0, '2016-01-18'),
(31, 0, 202, '2016-01-19'),
(32, 0, 250, '2016-01-19'),
(33, 0, 192023, '2016-01-19'),
(34, 0, 0, '2016-01-19'),
(35, 0, 1, '2016-01-19'),
(36, 0, 7113, '2016-01-29'),
(37, 0, 4, '2023-07-26'),
(38, 0, 4, '2023-07-26'),
(39, 0, 32, '2023-07-26'),
(40, 0, 4, '2023-07-26'),
(41, 0, 4, '2023-07-26'),
(42, 0, 74, '2023-07-26'),
(43, 0, 32, '2023-07-26'),
(44, 0, 0, '2023-08-01'),
(45, 0, 32, '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_chequeseries`
--

DROP TABLE IF EXISTS `tb_cps_chequeseries`;
CREATE TABLE IF NOT EXISTS `tb_cps_chequeseries` (
  `series_id` int NOT NULL AUTO_INCREMENT,
  `series_transationcode` int NOT NULL,
  `series_branchcode` int NOT NULL,
  `serise_branchcode_branch` int NOT NULL,
  `series_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_lastno` int(6) UNSIGNED ZEROFILL NOT NULL,
  `serise_Bank` int NOT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tb_cps_chequeseries`
--

INSERT INTO `tb_cps_chequeseries` (`series_id`, `series_transationcode`, `series_branchcode`, `serise_branchcode_branch`, `series_from`, `series_to`, `series_lastno`, `serise_Bank`) VALUES
(1, 10, 1, 18, 400000, 500000, 401930, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_grouppermissions`
--

DROP TABLE IF EXISTS `tb_cps_grouppermissions`;
CREATE TABLE IF NOT EXISTS `tb_cps_grouppermissions` (
  `permission_id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `page_accessible` varchar(150) NOT NULL,
  `page_read` varchar(2) NOT NULL,
  `page_write` varchar(2) NOT NULL,
  `page_edit` varchar(2) NOT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_groups`
--

DROP TABLE IF EXISTS `tb_cps_groups`;
CREATE TABLE IF NOT EXISTS `tb_cps_groups` (
  `group_id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_groups`
--

INSERT INTO `tb_cps_groups` (`group_id`, `group_name`, `group_createddate`) VALUES
(30, 'ADMINISTRATOR', '2013-02-10 18:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_halfdays`
--

DROP TABLE IF EXISTS `tb_cps_halfdays`;
CREATE TABLE IF NOT EXISTS `tb_cps_halfdays` (
  `branch_halfday_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` int NOT NULL,
  `monday` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `tuesday` tinyint NOT NULL DEFAULT '0',
  `wednesday` tinyint NOT NULL DEFAULT '0',
  `thursday` tinyint NOT NULL DEFAULT '0',
  `friday` tinyint NOT NULL DEFAULT '0',
  `saturday` tinyint NOT NULL DEFAULT '0',
  `sunday` tinyint NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_halfday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `tb_cps_halfdays`
--

INSERT INTO `tb_cps_halfdays` (`branch_halfday_id`, `branch_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `opening_time`, `closing_time`) VALUES
(53, 3, 0, 0, 0, 0, 0, 1, 0, '9:00am', '1:00pm'),
(52, 2, 0, 0, 0, 0, 0, 1, 0, '9:00am', '1:00pm'),
(54, 4, 0, 0, 0, 0, 0, 1, 0, '9:00am', '1:00pm'),
(55, 5, 0, 0, 0, 0, 0, 1, 0, '10:00am', '2:00pm'),
(56, 6, 0, 0, 0, 0, 0, 1, 0, '9:30am', '1:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_holidays`
--

DROP TABLE IF EXISTS `tb_cps_holidays`;
CREATE TABLE IF NOT EXISTS `tb_cps_holidays` (
  `branch_holiday_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` int NOT NULL,
  `monday` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `tuesday` tinyint NOT NULL DEFAULT '0',
  `wednesday` tinyint NOT NULL DEFAULT '0',
  `thursday` tinyint NOT NULL DEFAULT '0',
  `friday` tinyint NOT NULL DEFAULT '0',
  `saturday` tinyint NOT NULL DEFAULT '0',
  `sunday` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_holiday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `tb_cps_holidays`
--

INSERT INTO `tb_cps_holidays` (`branch_holiday_id`, `branch_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(63, 3, 0, 0, 0, 0, 0, 0, 1),
(62, 2, 0, 0, 0, 0, 0, 0, 1),
(61, 3, 0, 0, 0, 0, 0, 0, 1),
(60, 2, 0, 0, 0, 0, 0, 0, 1),
(59, 3, 0, 0, 0, 0, 0, 0, 1),
(58, 3, 0, 0, 0, 0, 0, 0, 1),
(57, 2, 0, 0, 0, 0, 0, 0, 1),
(64, 4, 0, 0, 0, 0, 0, 0, 1),
(65, 5, 0, 0, 0, 0, 0, 0, 1),
(66, 6, 0, 0, 0, 0, 0, 0, 1),
(67, 6, 0, 0, 0, 0, 0, 0, 1),
(68, 2, 0, 0, 0, 0, 0, 0, 1),
(69, 2, 0, 0, 0, 0, 0, 0, 1),
(70, 2, 0, 0, 0, 0, 0, 0, 1),
(71, 2, 0, 0, 0, 0, 0, 0, 1),
(72, 2, 0, 0, 0, 0, 0, 0, 1),
(73, 7, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_mapbankfields`
--

DROP TABLE IF EXISTS `tb_cps_mapbankfields`;
CREATE TABLE IF NOT EXISTS `tb_cps_mapbankfields` (
  `field_id` int NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) NOT NULL,
  `bank_field_name` varchar(50) NOT NULL,
  `field_min_length` int NOT NULL,
  `field_max_length` int NOT NULL,
  `bank_field_length` int NOT NULL,
  `field_data_type` varchar(50) NOT NULL,
  `field_format` varchar(50) NOT NULL,
  PRIMARY KEY (`field_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_mapbankfields`
--

INSERT INTO `tb_cps_mapbankfields` (`field_id`, `field_name`, `bank_field_name`, `field_min_length`, `field_max_length`, `bank_field_length`, `field_data_type`, `field_format`) VALUES
(1, 'cps_unique_req', 'cps_unique_req', 10, 15, 15, 'Numeric', ''),
(2, 'cps_micr_code', 'cps_micr_code', 9, 9, 9, 'Numeric', ''),
(3, 'cps_branchmicr_code', 'cps_branchmicr_code', 3, 3, 3, 'Numeric', ''),
(4, 'cps_account_no', 'cps_account_no', 15, 15, 15, 'Numeric', ''),
(5, 'cps_act_name', 'cps_act_name', 1, 35, 35, 'Varchar', ''),
(6, 'cps_book_size', 'cps_book_size', 1, 3, 3, 'Numeric', ''),
(7, 'cps_no_of_books', 'cps_no_of_books', 1, 2, 2, 'Numeric', ''),
(8, 'cps_dly_bearer_order', 'cps_dly_bearer_order', 1, 1, 1, 'Varchar', ''),
(9, 'cps_tr_code', 'cps_tr_code', 2, 2, 2, 'Numeric', ''),
(10, 'cps_atpar', 'cps_atpar', 1, 1, 1, 'Numeric', ''),
(11, 'cps_act_jointname1', 'cps_act_jointname1', 0, 35, 35, 'Varchar', ''),
(12, 'cps_act_jointname2', 'cps_act_jointname2', 0, 35, 35, 'Varchar', ''),
(13, 'cps_auth_sign1', 'cps_auth_sign1', 0, 35, 35, 'Varchar', ''),
(14, 'cps_auth_sign2', 'cps_auth_sign2', 0, 35, 35, 'Varchar', ''),
(15, 'cps_auth_sign3', 'cps_auth_sign3', 0, 35, 35, 'Varchar', ''),
(16, 'cps_act_address1', 'cps_act_address1', 0, 50, 50, 'Varchar', ''),
(17, 'cps_act_address2', 'cps_act_address2', 0, 50, 50, 'Varchar', ''),
(18, 'cps_act_city', 'cps_act_city', 0, 30, 30, 'Varchar', ''),
(19, 'cps_state', 'cps_state', 0, 30, 30, 'Varchar', ''),
(20, 'cps_country', 'cps_country', 0, 30, 30, 'Varchar', ''),
(21, 'cps_emailid', 'cps_emailid', 0, 50, 50, 'Varchar', ''),
(22, 'cps_act_pin', 'cps_act_pin', 0, 30, 30, 'Varchar', ''),
(23, 'cps_act_telephone_res', 'cps_act_telephone_res', 0, 15, 15, 'Numeric', ''),
(24, 'cps_act_telephone_off', 'cps_act_telephone_off', 0, 15, 15, 'Numeric', ''),
(25, 'cps_act_mobile', 'cps_act_mobile', 0, 15, 15, 'Numeric', ''),
(26, 'cps_chq_no_from', 'cps_chq_no_from', 0, 6, 6, 'Numeric', ''),
(27, 'cps_chq_no_to', 'cps_chq_no_to', 0, 6, 6, 'Numeric', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_nonworkingdays`
--

DROP TABLE IF EXISTS `tb_cps_nonworkingdays`;
CREATE TABLE IF NOT EXISTS `tb_cps_nonworkingdays` (
  `branch_nonworkingday_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` int NOT NULL,
  `monday` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `tuesday` tinyint NOT NULL DEFAULT '0',
  `wednesday` tinyint NOT NULL DEFAULT '0',
  `thursday` tinyint NOT NULL DEFAULT '0',
  `friday` tinyint NOT NULL DEFAULT '0',
  `saturday` tinyint NOT NULL DEFAULT '0',
  `sunday` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_nonworkingday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_reprintque`
--

DROP TABLE IF EXISTS `tb_cps_reprintque`;
CREATE TABLE IF NOT EXISTS `tb_cps_reprintque` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(10) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) NOT NULL,
  `cps_country` varchar(30) NOT NULL,
  `cps_emailid` varchar(50) NOT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_reprint_approved` int NOT NULL DEFAULT '0',
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_reprintque`
--

INSERT INTO `tb_cps_reprintque` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_bsr_code`, `cps_pr_code`, `cps_reprint_approved`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(122, 00032249, 415488352, 352, '1001005067600', 'VIKAS VASANTRAO LELE', 1, 'Y', 30, 10, '', '', '', '', '', '', 'PATIL ROW HOUSE', 'RUKMINI PARK PART 2', 'WAKHAN ROAD KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9730136072', '', 594018, 594047, 067600, '2023-09-25', 24, NULL, NULL, 0, 'Bearer', '', NULL),
(123, 00032256, 415488352, 352, '1001005683910', 'SHUBAHM ASHOK KADAM', 1, 'Y', 15, 10, '', '', '', '', '', '', 'SHINDE GALLI SHANIWARPETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8856975813', '', 594048, 594062, 683910, '2023-09-25', 24, NULL, NULL, 1, 'Order', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_settings`
--

DROP TABLE IF EXISTS `tb_cps_settings`;
CREATE TABLE IF NOT EXISTS `tb_cps_settings` (
  `inputfolderpath` varchar(100) NOT NULL,
  `archivefolderpath` varchar(50) NOT NULL,
  `inputfileformat` varchar(20) NOT NULL,
  `inputfiledelimiter` varchar(15) NOT NULL,
  `outputfolderpath` varchar(100) NOT NULL,
  `outputfileformat` varchar(20) NOT NULL,
  `outputfiledelimiter` varchar(15) NOT NULL,
  `typeofprinter` varchar(20) NOT NULL,
  `printermodel` int NOT NULL,
  `chk_taken_from` int NOT NULL,
  `chk_no_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `chk_no_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nooffailedpasswordattempt` int NOT NULL,
  `password_expiry` int NOT NULL,
  `homescreen_text` varchar(100) NOT NULL,
  `poweredby` varchar(100) NOT NULL,
  `banklogo` varchar(100) NOT NULL,
  `desktop_image` varchar(100) NOT NULL,
  `chq_Image` text NOT NULL,
  `country` varchar(5) NOT NULL,
  `help_employeeid` varchar(20) NOT NULL,
  `help_helplineno1` varchar(30) NOT NULL,
  `help_emailid` varchar(100) NOT NULL,
  `autolockminutes` int NOT NULL,
  `help_contactperson` varchar(200) NOT NULL,
  `help_helplineno2` varchar(20) NOT NULL,
  `license_type` varchar(10) NOT NULL,
  `license_install_date` date NOT NULL,
  `license_period` int NOT NULL,
  `license_end_date` date NOT NULL,
  `license_no_of_users` int NOT NULL,
  `license_cheque_leaves` int NOT NULL,
  `license_users_leaves` int NOT NULL,
  `license_users_leaves_value` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_settings`
--

INSERT INTO `tb_cps_settings` (`inputfolderpath`, `archivefolderpath`, `inputfileformat`, `inputfiledelimiter`, `outputfolderpath`, `outputfileformat`, `outputfiledelimiter`, `typeofprinter`, `printermodel`, `chk_taken_from`, `chk_no_from`, `chk_no_to`, `nooffailedpasswordattempt`, `password_expiry`, `homescreen_text`, `poweredby`, `banklogo`, `desktop_image`, `chq_Image`, `country`, `help_employeeid`, `help_helplineno1`, `help_emailid`, `autolockminutes`, `help_contactperson`, `help_helplineno2`, `license_type`, `license_install_date`, `license_period`, `license_end_date`, `license_no_of_users`, `license_cheque_leaves`, `license_users_leaves`, `license_users_leaves_value`) VALUES
('', 'uploads/', 'Excel', '', '', 'Excel', '', '', 0, 0, 000000, 000000, 9, 365, 'THE KARAD URBAN CO-OP BANK LTD, KARAD', 'DevHarsh Infotech Pvt Ltd', 'thane logo.jpg', 'Penguins.jpg', '', '', '', '', '', 360, '', '', '', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_transactioncodes`
--

DROP TABLE IF EXISTS `tb_cps_transactioncodes`;
CREATE TABLE IF NOT EXISTS `tb_cps_transactioncodes` (
  `transactioncode_id` int NOT NULL AUTO_INCREMENT,
  `transactioncode` int NOT NULL,
  `transactioncodedescription` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `transactionstatus` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`transactioncode_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tb_cps_transactioncodes`
--

INSERT INTO `tb_cps_transactioncodes` (`transactioncode_id`, `transactioncode`, `transactioncodedescription`, `transactionstatus`) VALUES
(1, 10, 'SAVINGS ACCOUNT', 0),
(2, 11, 'CURRENT', 0),
(3, 17, 'PAY ORDER', 0),
(4, 13, 'CASH CREDIT', 0),
(5, 14, 'DIVIDEND', 1),
(8, 15, 'PAY ORDER FOR RBI TESTING', 0),
(9, 18, 'MT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_weekdays`
--

DROP TABLE IF EXISTS `tb_cps_weekdays`;
CREATE TABLE IF NOT EXISTS `tb_cps_weekdays` (
  `branch_workingday_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` int NOT NULL,
  `monday` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `tuesday` tinyint NOT NULL DEFAULT '0',
  `wednesday` tinyint NOT NULL DEFAULT '0',
  `thursday` tinyint NOT NULL DEFAULT '0',
  `friday` tinyint NOT NULL DEFAULT '0',
  `saturday` tinyint NOT NULL DEFAULT '0',
  `sunday` tinyint NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_workingday_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `tb_cps_weekdays`
--

INSERT INTO `tb_cps_weekdays` (`branch_workingday_id`, `branch_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `opening_time`, `closing_time`) VALUES
(53, 3, 1, 1, 1, 1, 1, 0, 0, '9:00am', '5:00pm'),
(52, 2, 1, 1, 1, 1, 1, 0, 0, '9:00am', '6:00pm'),
(54, 4, 1, 1, 1, 1, 1, 0, 0, '9:00am', '5:00pm'),
(55, 5, 1, 1, 1, 1, 1, 0, 0, '10:00am', '6:00pm'),
(56, 6, 1, 1, 1, 1, 1, 0, 0, '9:30am', '5:30pm'),
(57, 7, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE IF NOT EXISTS `tb_customer` (
  `cust_id` int NOT NULL AUTO_INCREMENT,
  `cust_short_name` varchar(30) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_acc_no` varchar(15) NOT NULL,
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`cust_id`, `cust_short_name`, `cust_name`, `cust_address`, `cust_acc_no`) VALUES
(1, 'AADEEPTA', 'AADEEPTA V.SHETTY & VIIVECK V.SHETTY', '27,4/F,GURU BHAKTI NIWAS,GURU MANDIR RD,DOMBIVLI (EAST)-421 201.', 'H15792102956'),
(2, 'ABHILASHA', 'ABHILASHA OZA', 'SHIV-VASANTI,BLDG.16,H.F.SOCIETY ROAD,  JOGESHWARI(E),MUMBAI 400 060.', 'H15792100857'),
(3, 'ABHISHEK', 'ABHISHEK BHARTIA', 'A-603,KRISHRAJ TWR,CHICKUWADI,BORIVALI-WOPP.OMKAR HIGH COURT SOC,M-92.', 'H15792101900');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manual_print`
--

DROP TABLE IF EXISTS `tb_manual_print`;
CREATE TABLE IF NOT EXISTS `tb_manual_print` (
  `mp_Id` int NOT NULL AUTO_INCREMENT,
  `mp_AccountHolder_Id` int NOT NULL,
  `mp_BookSize` int NOT NULL,
  `mp_NoOfBooks` int NOT NULL,
  `mp_Chk_From` int NOT NULL,
  `mp_Chk_To` int NOT NULL,
  PRIMARY KEY (`mp_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pending_print_req`
--

DROP TABLE IF EXISTS `tb_pending_print_req`;
CREATE TABLE IF NOT EXISTS `tb_pending_print_req` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  `cps_isprint` int NOT NULL DEFAULT '0',
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1534 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_printadmin`
--

DROP TABLE IF EXISTS `tb_printadmin`;
CREATE TABLE IF NOT EXISTS `tb_printadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `adminid` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `incorrect_attempt` int NOT NULL,
  `password_status` int NOT NULL,
  `user_type` int NOT NULL,
  `userid` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `is_temp_password` int NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_printadmin`
--

INSERT INTO `tb_printadmin` (`username`, `password`, `lastlogintime`, `adminid`, `group_id`, `incorrect_attempt`, `password_status`, `user_type`, `userid`, `create_date`, `is_temp_password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '2012-04-21 00:00:00', 1, 0, 0, 1, 0, 'admin', '2023-01-19', 1),
('adminreprint', 'e10adc3949ba59abbe56e057f20f883e', '2014-02-05 00:00:00', 15, 0, 0, 1, 1, 'adminreprint', '2023-01-19', 1),
('reprint', '1babe098befd805689339582881da1d8', '2015-05-31 00:00:00', 16, 0, 0, 1, 1, 'reprint', '2023-01-19', 1),
('reprint1', '0192023a7bbd73250516f069df18b500', '2015-02-14 00:00:00', 17, 0, 0, 1, 1, 'reprint1', '2013-01-19', 1),
('smp302', '32bd24a8434465d0f0907f54da043679', '2023-07-26 00:00:00', 23, 0, 0, 1, 1, 'smp302', '2023-07-26', 1),
('smp0302', '74bcc9aa2aff7f0e60fc529ca6b1ec73', '2023-07-26 00:00:00', 22, 0, 17, 0, 0, 'smp0302', '2023-07-26', 0),
('santosh', '32bd24a8434465d0f0907f54da043679', '2023-08-01 00:00:00', 24, 0, 0, 1, 0, 'psm0302', '2023-08-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_printque`
--

DROP TABLE IF EXISTS `tb_printque`;
CREATE TABLE IF NOT EXISTS `tb_printque` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1532 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_printque`
--

INSERT INTO `tb_printque` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_bsr_code`, `cps_pr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(1500, 00032049, 415488352, 352, '1001102000058', 'PIONEER DISTRIBUTORS', 01, 'Y', 060, 13, NULL, '', '', 'Authorised Signatory', 'CHIVATE PRAKASH VASANT', 'CHIVATE ARCHANA ARUN', 'PLOT NO 355  NEAR MANOHAR LODGE  ', 'SHANIWAR PETH', 'KARAD', '', '', 'KARAD', NULL, NULL, NULL, 415110, '93710788', '', '9371078828', NULL, 571651, 571710, 000058, '2023-09-20', 1, '1', NULL, 'Order', '', NULL),
(1501, 00045811, 413602002, 002, '6020010401000638', 'UNITED MEDICO', 01, 'Y', 060, 11, NULL, ' ', ' ', 'PROPRITER', '', '', 'GALA NO 6 SOUTH KASBA', 'SOLAPUR', 'SOUTH KASABA SOLAPUR 413004 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '09096188', '', '8390056565', NULL, 490531, 490590, 000638, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1502, 00045810, 413602002, 002, '6020010401000638', 'UNITED MEDICO', 01, 'Y', 060, 11, NULL, ' ', ' ', 'PROPRITER', '', '', 'GALA NO 6 SOUTH KASBA', 'SOLAPUR', 'SOUTH KASABA SOLAPUR 413004 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '09096188', '', '8390056565', NULL, 490481, 490540, 000638, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1503, 00045796, 413602002, 002, '602001GL000333', 'PAY ORDER PAYABLE', 01, 'Y', 060, 12, NULL, ' ', ' ', '', '', '', '', '', ' SOLAPUR  MAHARASHTRA', '', '', '', NULL, NULL, NULL, 0, '', '', '', NULL, 503201, 503260, 000333, '2023-10-19', 1, '', NULL, 'Bearer', '', NULL),
(1504, 00045794, 413602002, 002, '6020010401001220', 'FATIMA KIDS AND LADIES COLLECTION', 01, 'Y', 060, 11, NULL, ' ', ' ', 'PROPRITER', '', '', '73 SIDDHESHWAR PETH', 'BEGAM PETH NORTH SOLAPUR', 'SIDDHESHWAR PETH SOLAPUR 413001 ', '', '', '', NULL, NULL, NULL, 0, '', '', '8888366073', NULL, 000001, 000060, 001220, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1505, 00045792, 413602002, 002, '6020010401001122', 'VYANKATESH KRUSHI KENDRA', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITOR', '', '', '972 73 UTTAR KASBA', 'SOLAPUR', 'NORTH KASABA SOLAPUR 413007 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '', '', '9922229111', NULL, 000551, 000600, 001122, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1506, 00045791, 413602002, 002, '6020010301000054', 'DHAWARE NITIN SURESH', 01, 'Y', 020, 10, NULL, '', '', '', '', '', '895 25 VYANKATESH NAGAR', '', 'INDAPUR PUNE 413106 MAHARASHTRA', '', '', '', NULL, NULL, NULL, 0, '', '', '9766353500', NULL, 000161, 000180, 007010, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1507, 00045785, 413602002, 002, '6020010301000109', 'KALE SAGAR HARIBHAU', 01, 'Y', 020, 10, NULL, '', '', '', '', '', 'AT WADACHIVADI POST UPLAI BK', 'TAL MADHA', 'MAHATPUR SOLAPUR 413209 ', '', '', '', NULL, NULL, NULL, 0, '', '', '7972207146', NULL, 000021, 000040, 009865, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1508, 00045783, 413602002, 002, '6020011101008923', 'GURUGANESH TRADING COMPANY', 01, 'Y', 050, 13, NULL, ' ', ' ', 'PARTNER', '', '', '90 NORTH KASBA SOLAPUR', '', 'NORTH KASABA SOLAPUR 413007 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '', '', '9421067662', NULL, 468791, 468840, 008923, '2023-11-02', 1, '', NULL, 'Bearer', '', NULL),
(1509, 00045782, 413602002, 002, '6020010401000244', 'SHAH AGRO COMPANY', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITER', '', '', '14A  15 167 BUDHAWAR PETH', 'MEHATA TOWAR PANJARAPOL CHOWK', 'BUDHWAR PETH SOLAPUR 413002 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '', '02172326', '9423334333', NULL, 467581, 467630, 000244, '2023-10-16', 1, '', NULL, 'Bearer', '', NULL),
(1510, 00045781, 413602002, 002, '6020010401000244', 'SHAH AGRO COMPANY', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITER', '', '', '14A  15 167 BUDHAWAR PETH', 'MEHATA TOWAR PANJARAPOL CHOWK', 'BUDHWAR PETH SOLAPUR 413002 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '', '02172326', '9423334333', NULL, 467531, 467580, 000244, '2023-10-16', 1, '', NULL, 'Bearer', '', NULL),
(1511, 00045780, 413602002, 002, '6020010401000244', 'SHAH AGRO COMPANY', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITER', '', '', '14A  15 167 BUDHAWAR PETH', 'MEHATA TOWAR PANJARAPOL CHOWK', 'BUDHWAR PETH SOLAPUR 413002 MAHARAS', '', '', '', NULL, NULL, NULL, 0, '', '02172326', '9423334333', NULL, 467481, 467530, 000244, '2023-10-16', 1, '', NULL, 'Bearer', '', NULL),
(1512, 00045778, 413602002, 002, '6020010301000112', 'GAIKWAD SANTOSH VITTHAL', 01, 'Y', 020, 10, NULL, '', '', '', '', '', 'JUNA PANDHARPUR ROAD DR AMBEDK', 'TAL MALASHIRAS AKLUJ', 'AKLUJ SOLAPUR 413101 ', '', '', '', NULL, NULL, NULL, 0, '', '', '9822057453', NULL, 000001, 000020, 010163, '2023-10-13', 1, '', NULL, 'Bearer', '', NULL),
(1513, 00045776, 413602002, 002, '6020010401001169', 'RENUKA ENTERPRISES', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITOR', '', '', 'RAJDEEP NAGAR TALE HIPPARGA', 'NORTH SOLAPUR', 'TALE HIPPARGA SOLAPUR 413002 MAHARA', '', '', '', NULL, NULL, NULL, 0, '', '', '7276389512', NULL, 000051, 000100, 001169, '2023-10-13', 1, '', NULL, 'Bearer', '', NULL),
(1514, 00045774, 413602002, 002, '6020010101003796', 'GANDHI NATHA RANGAJI DIGAMBAR JAIN JANMANGAL ', 01, 'Y', 050, 10, NULL, 'GANDHI SANJAY SHARADCHANDRA', '', '', '', '', '13 BUDHWAR PETH', 'JAIN BOARDING BALIVES', 'BALIWES SOLAPUR 413002 MAHARASHTRA', '', '', '', NULL, NULL, NULL, 0, '', '', '9370404546', NULL, 481921, 481970, 003796, '2023-10-13', 1, '', NULL, 'Bearer', '', NULL),
(1515, 00045772, 413602002, 002, '6020010401000540', 'SATTE TRADING COMPANY', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITER', '', '', '386 M G  ROAD', '', 'NORTH SOLAPUR SOLAPUR 413003 MAHARA', '', '', '', NULL, NULL, NULL, 0, '', '02172622', '9422457836', NULL, 480671, 480720, 000540, '2023-10-13', 1, '', NULL, 'Bearer', '', NULL),
(1516, 00045808, 413602502, 502, '6020020101004000', 'WAGHMODE ASHOK SARJERAO', 01, 'Y', 020, 10, NULL, '', '', '', '', '', 'AP BANGARDE', 'TAL MALSHIRAS DIST SOLAPUR', 'BANGARDE MALSHIRAS 413109 ', '', '', '', NULL, NULL, NULL, 0, '', '', '9370928018', NULL, 000001, 000020, 007579, '2023-10-19', 1, '', NULL, 'Bearer', '', NULL),
(1517, 00045807, 413602502, 502, '6020020101001804', 'SHRI CHANDRAPRABHU DIGAMBAR JAIN MANDIR', 01, 'Y', 050, 10, NULL, 'DAWADA JAMBUKUMAR RAMCHAND', 'DOSHI RAJMAHENDRA ANANTLAL', '', '', '', 'AP NATEPUTE', 'TAL MALSHIRAS DIST SOLAPUR', 'NATEPUTE SOLAPUR 413109 MAHARASHTRA', '', '', '', NULL, NULL, NULL, 0, '', '', '9527121801', NULL, 402861, 402910, 001804, '2023-10-19', 1, '', NULL, 'Bearer', '', NULL),
(1518, 00045806, 413602502, 502, '6020020101001804', 'SHRI CHANDRAPRABHU DIGAMBAR JAIN MANDIR', 01, 'Y', 050, 10, NULL, 'DAWADA JAMBUKUMAR RAMCHAND', 'DOSHI RAJMAHENDRA ANANTLAL', '', '', '', 'AP NATEPUTE', 'TAL MALSHIRAS DIST SOLAPUR', 'NATEPUTE SOLAPUR 413109 MAHARASHTRA', '', '', '', NULL, NULL, NULL, 0, '', '', '9527121801', NULL, 402811, 402860, 001804, '2023-10-19', 1, '', NULL, 'Bearer', '', NULL),
(1519, 00045805, 413602502, 502, '6020020401000523', 'VAIBHAVKUMAR MAHAVIR DOSHI', 01, 'Y', 050, 11, NULL, ' ', ' ', 'PROPRITOR', '', '', 'PUNE PANDHARPUR ROAD NATEPUTE', 'TAL MALSHIRAS DIST SOLAPUR', 'NATEPUTE SOLAPUR 413109 ', '', '', '', NULL, NULL, NULL, 0, '', '', '9960334420', NULL, 000201, 000250, 000522, '2023-10-19', 1, '', NULL, 'Bearer', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_print_req_collection`
--

DROP TABLE IF EXISTS `tb_print_req_collection`;
CREATE TABLE IF NOT EXISTS `tb_print_req_collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  `cps_is_reprint` int NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reprint_req_collection`
--

DROP TABLE IF EXISTS `tb_reprint_req_collection`;
CREATE TABLE IF NOT EXISTS `tb_reprint_req_collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(10) NOT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) NOT NULL,
  `cps_country` varchar(30) NOT NULL,
  `cps_emailid` varchar(50) NOT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  `cps_is_reprint` int NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) NOT NULL,
  `cps_bsr_code` varchar(6) NOT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_reprint_req_collection`
--

INSERT INTO `tb_reprint_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(14, 00027929, 415488353, 353, '1002103005243', 'VINOD SHIVAJI PATIL', 01, 'Y', 060, 13, '', 'SHIVAJI SHANKAR PATIL', '', '', '', '', 'A P WATHAR  TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922812733', '', 613880, 613939, 005243, '2023-08-05', 23, 0, '', '', NULL, '', NULL),
(15, 00027520, 415488354, 354, '1006005001287', 'BALASAHEB KRISHANARAO GHATAGE', 01, 'Y', 030, 10, '', 'GHATAGE ABHIJEET BALASAHEB', 'VIJAYMALA BALASAHEB GHATAGE', '', '', '', 'P NO 6 SAHAWAS KRISHNA', 'CANOL VIDYANAGAR ', '9422404956', '', '', 'KARAD', '', '', '', 415124, '', '', '9422404956', '', 196337, 196366, 001287, '2023-08-02', 23, 0, '', '', NULL, '', NULL),
(16, 00027929, 415488353, 353, '1002103005243', 'VINOD SHIVAJI PATIL', 01, 'Y', 060, 13, '', 'SHIVAJI SHANKAR PATIL', '', '', '', '', 'A P WATHAR  TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922812733', '', 613880, 613939, 005243, '2023-08-05', 23, 0, '', '', NULL, '', NULL),
(17, 00027929, 415488353, 353, '1002103005243', 'VINOD SHIVAJI PATIL', 01, 'Y', 060, 13, '', 'SHIVAJI SHANKAR PATIL', '', '', '', '', 'A P WATHAR  TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922812733', '', 613880, 613939, 005243, '2023-08-05', 23, 0, '', '', NULL, '', NULL),
(18, 00027520, 415488354, 354, '1006005001287', 'BALASAHEB KRISHANARAO GHATAGE', 01, 'Y', 030, 10, '', 'GHATAGE ABHIJEET BALASAHEB', 'VIJAYMALA BALASAHEB GHATAGE', '', '', '', 'P NO 6 SAHAWAS KRISHNA', 'CANOL VIDYANAGAR ', '9422404956', '', '', 'KARAD', '', '', '', 415124, '', '', '9422404956', '', 196337, 196366, 001287, '2023-08-02', 23, 0, '', '', NULL, '', NULL),
(19, 00027929, 415488353, 353, '1002103005243', 'VINOD SHIVAJI PATIL', 01, 'Y', 060, 13, '', 'SHIVAJI SHANKAR PATIL', '', '', '', '', 'A P WATHAR  TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922812733', '', 613880, 613939, 005243, '2023-08-05', 23, 0, '', '', NULL, '', NULL),
(20, 00027516, 415488501, 501, '1004106000083', 'AMRUT VITTHAL JADHAV', 01, 'Y', 060, 13, '', '', '', '', '', '', 'KHARADE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '00000000', '9623117303', '', 148081, 148140, 000083, '2023-08-02', 23, 0, '', '', NULL, '', NULL),
(21, 00027516, 415488501, 501, '1004106000083', 'AMRUT VITTHAL JADHAV', 01, 'Y', 060, 13, '', '', '', '', '', '', 'KHARADE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '00000000', '9623117303', '', 148081, 148140, 000083, '2023-08-02', 23, 0, '', '', NULL, '', NULL),
(22, 00028225, 415488512, 512, '1052106000011', 'PRAMOD JAGANNATH RAUT', 01, 'Y', 030, 13, '', '', '', '', '', '', 'A P TALBID TAL KARAD', 'DIST SATARA ', 'MOB 9764303095', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9764303095', '', 055936, 055965, 000011, '2023-08-09', 23, 0, '', '', NULL, '', NULL),
(23, 00028372, 415488356, 356, '1011102000145', 'QUALITY LIQUORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'QUALITY LIQUORS', '', 'A P MALKAPUR ', 'M NO 4 293 ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9822179444', '', 446447, 446506, 000145, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(24, 00028367, 415488502, 502, '1005102000719', 'RUSHIKESH RAMESH PAWAR', 01, 'Y', 060, 13, '', 'PIONEER MEDICINE SHOPEE', 'RAMESH RAMCHANDRA PAWAR', '', '', '', 'A P CHAREGAON ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9028485872', '', 269926, 269985, 000719, '2023-08-10', 16, 0, '', '', NULL, '', NULL),
(25, 00028352, 415488501, 501, '1004106000073', 'MS OLYMPICA INDANE GAS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S OLYMPICA INDANE GAS', '', 'A P   MALWADI PANDHARPUR ROAD', 'MASUR M NO 90', 'TAL   KARAD   DIST   SATARA', '', '', 'MASUR', '', '', '', 415106, '02164252', '02164252', '9822458819', '', 148141, 148200, 000073, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(26, 00028360, 415488353, 353, '1002103005235', 'SUNBEAM INFOCOM PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S', '', '203 ANUDA CHAMBERS  NEAR GUJAR HOSPITAL', 'SHANIWAR PETH   KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822301950', '', 614540, 614599, 005235, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(27, 00028361, 415488353, 353, '1002103005235', 'SUNBEAM INFOCOM PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S', '', '203 ANUDA CHAMBERS  NEAR GUJAR HOSPITAL', 'SHANIWAR PETH   KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822301950', '', 614600, 614659, 005235, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(28, 00028367, 415488502, 502, '1005102000719', 'RUSHIKESH RAMESH PAWAR', 01, 'Y', 060, 13, '', 'PIONEER MEDICINE SHOPEE', 'RAMESH RAMCHANDRA PAWAR', '', '', '', 'A P CHAREGAON ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9028485872', '', 269926, 269985, 000719, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(29, 00028382, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186017, 186076, 000102, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(30, 00028383, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186077, 186136, 000102, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(31, 00028384, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186137, 186196, 000102, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(32, 00028373, 415488356, 356, '1011102000147', 'SANGRAM SUBHASH PAWAR', 01, 'Y', 060, 13, '', 'PRATHAMESH AUTOMOBILES', 'SUBHASH VISHNU PAWAR', '', '', '', 'A P  GONDI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9822837492', '', 446507, 446566, 000147, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(33, 00028374, 415488356, 356, '1011102000147', 'SANGRAM SUBHASH PAWAR', 01, 'Y', 060, 13, '', 'PRATHAMESH AUTOMOBILES', 'SUBHASH VISHNU PAWAR', '', '', '', 'A P  GONDI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9822837492', '', 446567, 446626, 000147, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(34, 00028372, 415488356, 356, '1011102000145', 'QUALITY LIQUORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'QUALITY LIQUORS', '', 'A P MALKAPUR ', 'M NO 4 293 ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9822179444', '', 446447, 446506, 000145, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(35, 00028376, 415488356, 356, '1011106000137', 'PRASAD GARMEEN BIGARSHETI PATSANSTHA,MALKAPUR', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'SANJAY SAMBHAJI MOHITE', '', 'A P MALAKAPUR', 'TAL KARAD DIS SATARA', 'PAN AAABP0423A', '', '', 'KARAD', '', '', '', 415110, '', '', '9850646619', '', 446627, 446656, 000137, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(36, 00028379, 415488356, 356, '1011103000078', 'KIRAN BAJRANG TADAKHE', 01, 'Y', 060, 13, '', '5 STAR INTERNATIONALS', 'BAJARANG SUBHANA TADAKHE', '', '', '', 'A P  KALVADE', 'NEAR LAXMI MANDIR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8380979511', '', 446657, 446716, 000078, '2023-08-10', 23, 0, '', '', NULL, '', NULL),
(37, 00028498, 415488502, 502, '1005103000022', 'MANJUSHA PRAVIN YADAV', 01, 'Y', 060, 13, '', 'MS DEEPAK ENTERPRISES', 'PRAVIN SHIVAJI YADAV', '', '', '', 'NEAR RANJIT TIMBAR ', 'A P  UMBRAJ ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881374824', '', 269986, 270045, 000022, '2023-08-11', 16, 0, '', '', NULL, '', NULL),
(38, 00028498, 415488502, 502, '1005103000022', 'MANJUSHA PRAVIN YADAV', 01, 'Y', 060, 13, '', 'MS DEEPAK ENTERPRISES', 'PRAVIN SHIVAJI YADAV', '', '', '', 'NEAR RANJIT TIMBAR ', 'A P  UMBRAJ ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881374824', '', 269986, 270045, 000022, '2023-08-11', 16, 0, '', '', NULL, '', NULL),
(39, 00028498, 415488502, 502, '1005103000022', 'MANJUSHA PRAVIN YADAV', 01, 'Y', 060, 13, '', 'MS DEEPAK ENTERPRISES', 'PRAVIN SHIVAJI YADAV', '', '', '', 'NEAR RANJIT TIMBAR ', 'A P  UMBRAJ ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881374824', '', 269986, 270045, 000022, '2023-08-11', 16, 0, '', '', NULL, '', NULL),
(40, 00028142, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614180, 614239, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(41, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(42, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(43, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(44, 00028140, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614060, 614119, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(45, 00028141, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614120, 614179, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(46, 00028142, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614180, 614239, 005099, '2023-08-08', 16, 0, '', '', NULL, '', NULL),
(47, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(48, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(49, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(50, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(51, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(52, 00028140, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614060, 614119, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(53, 00028141, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614120, 614179, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(54, 00028142, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614180, 614239, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(55, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(56, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(57, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(58, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(59, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(60, 00028140, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614060, 614119, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(61, 00028141, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614120, 614179, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(62, 00028142, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614180, 614239, 005099, '2023-08-08', 23, 0, '', '', NULL, '', NULL),
(63, 00028861, 415488515, 515, '1071016000007', 'SARKAR MENS WEAR', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DIPRAJ UDAYSINH MORE', '', 'KARAD DHEBEWADI ROAD  TALMAVALE', 'TAYAGADE  PATAN', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9545031560', '', 000136, 000150, 000007, '2023-08-18', 23, 0, '', '', NULL, '', NULL),
(64, 00029065, 415488505, 505, '1012005016015', 'RAHUL SHARAD PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  VIHE', 'TAL  PATAN ', 'DIST   SATARA ', '', '', 'PATAN', '', '', '', 415114, '02372-', '02372-', '9373312685', '', 098001, 098015, 016015, '2023-08-19', 16, 0, '', '', NULL, '', NULL),
(65, 00030714, 415488352, 352, '1001106000259', 'MANGALDAS LALLUBHAI AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ARUN SHASHIKANT SHAH', '', '285 GURUWARPETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9975693069', '', 570811, 570870, 000259, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(66, 00030715, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 570871, 570930, 000339, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(67, 00030716, 415488352, 352, '1001106000205', 'PALKAR PHARMACEUTICALS DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PALKAR PHARMACEUTICALS', '', '119 VATSALA HOUSE SHIVAJI NAGAR CO OP HO', 'SHIVAJI NAGAR CO OP HOUSING SOC KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164221', '90961444', '7350666555', '', 570931, 570990, 000205, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(68, 00030709, 415488352, 352, '1001005067326', 'SATISH JANARADHAN SIDAWADKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '187 SOMWAR PETH ', 'VANKATESH APARTMENT KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011529850', '', 592593, 592607, 067326, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(69, 00030717, 415488352, 352, '1001005685147', 'PRIYANKA SANTOSH PALANGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   CHAREGAON', 'TAL   KARAD', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8668383154', '', 592608, 592622, 685147, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(70, 00030720, 415488352, 352, '1001005684983', 'SUJATA PRAKASH SAGARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '58  MANGALWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822597745', '', 592623, 592637, 684983, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(71, 00030707, 415488352, 352, '1001005051695', 'SUNITA DATTATRAY AYACHIT', 01, 'Y', 030, 10, '', '', '', '', '', '', '184 SOMWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9673353188', '', 592533, 592562, 051695, '2023-09-06', 16, 0, '', '', NULL, '', NULL),
(72, 00030874, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 571111, 571170, 000349, '2023-09-07', 23, 0, '', '', NULL, '', NULL),
(73, 00030874, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 571111, 571170, 000349, '2023-09-07', 23, 0, '', '', NULL, '', NULL),
(74, 00030874, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 571111, 571170, 000349, '2023-09-07', 23, 0, '', '', NULL, '', NULL),
(75, 00032249, 415488352, 352, '1001005067600', 'VIKAS VASANTRAO LELE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PATIL ROW HOUSE', 'RUKMINI PARK PART 2', 'WAKHAN ROAD KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9730136072', '', 594018, 594047, 067600, '2023-09-25', 16, 0, '', '', 'Bearer', '', NULL),
(76, 00032256, 415488352, 352, '1001005683910', 'SHUBAHM ASHOK KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHINDE GALLI SHANIWARPETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8856975813', '', 594048, 594062, 683910, '2023-09-25', 16, 0, '', '', 'Order', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_statemaster`
--

DROP TABLE IF EXISTS `tb_statemaster`;
CREATE TABLE IF NOT EXISTS `tb_statemaster` (
  `state_id` int NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `country_id` int NOT NULL,
  `state_code` varchar(7) NOT NULL,
  `state_name_al` varchar(4) NOT NULL,
  `is_delete` int NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_statemaster`
--

INSERT INTO `tb_statemaster` (`state_id`, `state_name`, `country_id`, `state_code`, `state_name_al`, `is_delete`) VALUES
(1, 'GUJRAT', 1, 'GUJ001', 'GUJ', 0),
(2, 'MAHARASHTRA', 1, 'MAH001', 'MAH', 0),
(3, 'KARNATAKA', 1, 'KAR001', 'KAR', 0),
(4, 'GOA', 1, 'GOA001', 'GOA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_suburbmaster`
--

DROP TABLE IF EXISTS `tb_suburbmaster`;
CREATE TABLE IF NOT EXISTS `tb_suburbmaster` (
  `suburb_id` int NOT NULL AUTO_INCREMENT,
  `suburb_name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `suburb_postal_code` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `suburb_code` varchar(7) COLLATE utf8mb3_unicode_ci NOT NULL,
  `suburb_name_al` varchar(4) COLLATE utf8mb3_unicode_ci NOT NULL,
  `country_id` int NOT NULL,
  `state_id` int NOT NULL,
  `city_id` int NOT NULL,
  `is_delete` int NOT NULL,
  PRIMARY KEY (`suburb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tb_suburbmaster`
--

INSERT INTO `tb_suburbmaster` (`suburb_id`, `suburb_name`, `suburb_postal_code`, `suburb_code`, `suburb_name_al`, `country_id`, `state_id`, `city_id`, `is_delete`) VALUES
(1, 'KARAD', '415110', 'KAR001', 'AMR', 1, 2, 1, 0),
(2, 'PATAN', '415205', 'PAT001', 'PAT', 1, 2, 2, 0),
(3, 'MASUR ', '415106', 'MAS001', 'MAS', 1, 2, 1, 0),
(4, 'UMBRAJ ', '415109', 'UMB001', 'UMB', 1, 2, 1, 0),
(5, 'MALKAPUR', '415539', 'MAL001', 'MAL', 1, 2, 1, 0),
(6, 'KALE', '415104', 'KAL001', 'KAL', 1, 2, 1, 0),
(7, 'CHIPALIN ', '415605', 'CHI001', 'CHI', 1, 2, 8, 0),
(8, 'ISLAMPUR', '415409', 'ISL001', 'ISL', 1, 2, 9, 0),
(9, ' PUSESAVALI,', '415512', ' PU001', ' PU', 1, 2, 10, 0),
(10, 'TALMAVALE', '415103', 'TAL001', 'TAL', 1, 2, 2, 0),
(11, 'PALUS', '416310', 'PAL001', 'PAL', 1, 2, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_uploadingdata`
--

DROP TABLE IF EXISTS `tb_uploadingdata`;
CREATE TABLE IF NOT EXISTS `tb_uploadingdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int NOT NULL,
  `cps_branchmicr_code` varchar(3) NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` varchar(2) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` varchar(3) NOT NULL,
  `cps_tr_code` varchar(2) NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(35) NOT NULL,
  `cps_auth_sign2` varchar(35) NOT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) NOT NULL,
  `cps_act_address2` varchar(50) NOT NULL,
  `cps_act_address3` varchar(35) NOT NULL,
  `cps_act_address4` varchar(35) NOT NULL,
  `cps_act_address5` varchar(35) NOT NULL,
  `cps_act_city` varchar(30) NOT NULL,
  `cps_state` varchar(30) DEFAULT NULL,
  `cps_country` varchar(30) DEFAULT NULL,
  `cps_emailid` varchar(50) DEFAULT NULL,
  `cps_act_pin` int NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` varchar(6) NOT NULL,
  `cps_chq_no_to` varchar(6) NOT NULL,
  `cps_micr_account_no` varchar(64) NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` varchar(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_issue_date` varchar(255) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1537 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
