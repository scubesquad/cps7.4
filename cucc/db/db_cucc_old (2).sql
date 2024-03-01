-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 10:38 AM
-- Server version: 10.4.27-MariaDB
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

CREATE TABLE `tb_accountholdermaster` (
  `ach_Id` int(11) NOT NULL,
  `ach_account_No` int(11) NOT NULL,
  `ach_account_Name` varchar(40) NOT NULL,
  `ach_Bearer_Order` int(11) NOT NULL,
  `ach_Transaction_Code` int(11) NOT NULL,
  `ach_At_Par` int(11) NOT NULL,
  `ach_Joint_Name1` varchar(40) NOT NULL,
  `ach_Joint_Name2` varchar(40) NOT NULL,
  `ach_Authorized_Signatory1` varchar(25) NOT NULL,
  `ach_Authorized_Signatory2` varchar(25) NOT NULL,
  `ach_Authorized_Signatory3` varchar(25) NOT NULL,
  `ach_Address1` varchar(200) NOT NULL,
  `ach_Address2` varchar(200) NOT NULL,
  `ach_Suburb` int(11) NOT NULL,
  `ach_City` int(11) NOT NULL,
  `ach_State` int(11) NOT NULL,
  `ach_Country` int(11) NOT NULL,
  `ach_Pincode` int(11) NOT NULL,
  `ach_Telephone_Residence` int(11) NOT NULL,
  `ach_Telephone_Office` int(11) NOT NULL,
  `ach_Mobile_No` int(11) NOT NULL,
  `ach_Branch` int(11) NOT NULL,
  `ach_emailId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_bankdetails` (
  `bank_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `bank_address1` text NOT NULL,
  `bank_address2` varchar(36) NOT NULL,
  `bank_address3` varchar(36) NOT NULL,
  `bank_country_id` int(11) NOT NULL,
  `bank_state_id` int(11) NOT NULL,
  `bank_city_id` int(11) NOT NULL,
  `bank_suburb_id` int(11) NOT NULL,
  `bank_pin` varchar(15) NOT NULL,
  `bank_contact_no1` varchar(15) NOT NULL,
  `bank_contact_no2` varchar(15) NOT NULL,
  `bank_contact_per1` varchar(40) NOT NULL,
  `bank_contact_per2` varchar(40) NOT NULL,
  `bank_contact_per_LL1` int(11) NOT NULL,
  `bank_contact_per_LL2` int(11) NOT NULL,
  `bank_emailid2` varchar(30) NOT NULL,
  `bank_emailid` varchar(40) NOT NULL,
  `bank_website` varchar(40) NOT NULL,
  `bank_printers` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_bankdetails`
--

INSERT INTO `tb_bankdetails` (`bank_id`, `bank_name`, `bank_code`, `bank_address1`, `bank_address2`, `bank_address3`, `bank_country_id`, `bank_state_id`, `bank_city_id`, `bank_suburb_id`, `bank_pin`, `bank_contact_no1`, `bank_contact_no2`, `bank_contact_per1`, `bank_contact_per2`, `bank_contact_per_LL1`, `bank_contact_per_LL2`, `bank_emailid2`, `bank_emailid`, `bank_website`, `bank_printers`) VALUES
(0001, 'THE KARAD URBAN CO-OP BANK LTD, KARAD', 488, 'GURUWARE PETH BRANCH - 243 A,', 'TILAK ROAD,KARAD ', '', 1, 2, 1, 1, '415110', '', '', '', '', 0, 0, '', '', '', 'a:1:{i:0;a:3:{i:0;s:26:\"HP LaserJet Pro M501 PCL 6\";i:1;s:6:\"Tray 2\";i:2;s:6:\"Tray 3\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_branchdetails`
--

CREATE TABLE `tb_branchdetails` (
  `branch_id` int(11) NOT NULL,
  `branch_code` varchar(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_micr` varchar(20) NOT NULL,
  `branch_atparmicrcode` varchar(20) NOT NULL,
  `branch_address1` varchar(85) NOT NULL,
  `branch_address2` varchar(65) NOT NULL,
  `branch_address3` varchar(85) NOT NULL,
  `branch_country_id` int(11) NOT NULL DEFAULT 0,
  `branch_state_id` int(11) NOT NULL,
  `branch_city_id` int(11) NOT NULL,
  `branch_suburb_id` int(11) NOT NULL,
  `branch_pin` int(11) NOT NULL,
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
  `branch_printers` text DEFAULT NULL,
  `branch_working_hours` float DEFAULT NULL,
  `branch_clearingthrough` tinyint(1) NOT NULL DEFAULT 0,
  `branch_clearingcenter` tinyint(1) NOT NULL DEFAULT 0,
  `clr_bank_code` varchar(15) NOT NULL,
  `clr_bank_city` int(11) NOT NULL,
  `branch_City_Code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `branch_Services` varchar(100) NOT NULL,
  `branch_reg_busi_hrs` varchar(100) NOT NULL,
  `branch_half_busi_hrs` varchar(100) NOT NULL,
  `branch_sunday_working` varchar(100) NOT NULL,
  `branch_tollfree_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_citymaster` (
  `city_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `city_code` varchar(7) NOT NULL,
  `city_place` varchar(30) NOT NULL,
  `city_name_al` varchar(4) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_countrymaster` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `country_isdelete` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_countrymaster`
--

INSERT INTO `tb_countrymaster` (`country_id`, `country_name`, `country_code`, `country_isdelete`) VALUES
(1, 'INDIA', 'IND', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_adminpasswords`
--

CREATE TABLE `tb_cps_adminpasswords` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_cps_chequeseries` (
  `series_id` int(11) NOT NULL,
  `series_transationcode` int(11) NOT NULL,
  `series_branchcode` int(11) NOT NULL,
  `serise_branchcode_branch` int(11) NOT NULL,
  `series_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_lastno` int(6) UNSIGNED ZEROFILL NOT NULL,
  `serise_Bank` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cps_chequeseries`
--

INSERT INTO `tb_cps_chequeseries` (`series_id`, `series_transationcode`, `series_branchcode`, `serise_branchcode_branch`, `series_from`, `series_to`, `series_lastno`, `serise_Bank`) VALUES
(1, 10, 1, 18, 400000, 500000, 401930, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_grouppermissions`
--

CREATE TABLE `tb_cps_grouppermissions` (
  `permission_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `page_accessible` varchar(150) NOT NULL,
  `page_read` varchar(2) NOT NULL,
  `page_write` varchar(2) NOT NULL,
  `page_edit` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_groups`
--

CREATE TABLE `tb_cps_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `group_createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_cps_groups`
--

INSERT INTO `tb_cps_groups` (`group_id`, `group_name`, `group_createddate`) VALUES
(30, 'ADMINISTRATOR', '2013-02-10 18:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_halfdays`
--

CREATE TABLE `tb_cps_halfdays` (
  `branch_halfday_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

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

CREATE TABLE `tb_cps_holidays` (
  `branch_holiday_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

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

CREATE TABLE `tb_cps_mapbankfields` (
  `field_id` int(11) NOT NULL,
  `field_name` varchar(50) NOT NULL,
  `bank_field_name` varchar(50) NOT NULL,
  `field_min_length` int(11) NOT NULL,
  `field_max_length` int(11) NOT NULL,
  `bank_field_length` int(11) NOT NULL,
  `field_data_type` varchar(50) NOT NULL,
  `field_format` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_cps_nonworkingdays` (
  `branch_nonworkingday_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_reprintque`
--

CREATE TABLE `tb_cps_reprintque` (
  `id` int(11) NOT NULL,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_branchmicr_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(11) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_reprint_approved` int(11) NOT NULL DEFAULT 0,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_settings`
--

CREATE TABLE `tb_cps_settings` (
  `inputfolderpath` varchar(100) NOT NULL,
  `archivefolderpath` varchar(50) NOT NULL,
  `inputfileformat` varchar(20) NOT NULL,
  `inputfiledelimiter` varchar(15) NOT NULL,
  `outputfolderpath` varchar(100) NOT NULL,
  `outputfileformat` varchar(20) NOT NULL,
  `outputfiledelimiter` varchar(15) NOT NULL,
  `typeofprinter` varchar(20) NOT NULL,
  `printermodel` int(11) NOT NULL,
  `chk_taken_from` int(11) NOT NULL,
  `chk_no_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `chk_no_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nooffailedpasswordattempt` int(11) NOT NULL,
  `password_expiry` int(11) NOT NULL,
  `homescreen_text` varchar(100) NOT NULL,
  `poweredby` varchar(100) NOT NULL,
  `banklogo` varchar(100) NOT NULL,
  `desktop_image` varchar(100) NOT NULL,
  `chq_Image` text NOT NULL,
  `country` varchar(5) NOT NULL,
  `help_employeeid` varchar(20) NOT NULL,
  `help_helplineno1` varchar(30) NOT NULL,
  `help_emailid` varchar(100) NOT NULL,
  `autolockminutes` int(11) NOT NULL,
  `help_contactperson` varchar(200) NOT NULL,
  `help_helplineno2` varchar(20) NOT NULL,
  `license_type` varchar(10) NOT NULL,
  `license_install_date` date NOT NULL,
  `license_period` int(11) NOT NULL,
  `license_end_date` date NOT NULL,
  `license_no_of_users` int(11) NOT NULL,
  `license_cheque_leaves` int(11) NOT NULL,
  `license_users_leaves` int(11) NOT NULL,
  `license_users_leaves_value` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_cps_settings`
--

INSERT INTO `tb_cps_settings` (`inputfolderpath`, `archivefolderpath`, `inputfileformat`, `inputfiledelimiter`, `outputfolderpath`, `outputfileformat`, `outputfiledelimiter`, `typeofprinter`, `printermodel`, `chk_taken_from`, `chk_no_from`, `chk_no_to`, `nooffailedpasswordattempt`, `password_expiry`, `homescreen_text`, `poweredby`, `banklogo`, `desktop_image`, `chq_Image`, `country`, `help_employeeid`, `help_helplineno1`, `help_emailid`, `autolockminutes`, `help_contactperson`, `help_helplineno2`, `license_type`, `license_install_date`, `license_period`, `license_end_date`, `license_no_of_users`, `license_cheque_leaves`, `license_users_leaves`, `license_users_leaves_value`) VALUES
('', 'uploads/', 'Excel', '', '', 'Excel', '', '', 0, 0, 000000, 000000, 9, 365, 'THE KARAD URBAN CO-OP BANK LTD, KARAD', 'DevHarsh Infotech Pvt Ltd', 'thane logo.jpg', 'Penguins.jpg', '', '', '', '', '', 360, '', '', '', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_transactioncodes`
--

CREATE TABLE `tb_cps_transactioncodes` (
  `transactioncode_id` int(11) NOT NULL,
  `transactioncode` int(11) NOT NULL,
  `transactioncodedescription` varchar(100) NOT NULL,
  `transactionstatus` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `tb_cps_weekdays` (
  `branch_workingday_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `tuesday` tinyint(4) NOT NULL DEFAULT 0,
  `wednesday` tinyint(4) NOT NULL DEFAULT 0,
  `thursday` tinyint(4) NOT NULL DEFAULT 0,
  `friday` tinyint(4) NOT NULL DEFAULT 0,
  `saturday` tinyint(4) NOT NULL DEFAULT 0,
  `sunday` tinyint(4) NOT NULL DEFAULT 0,
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_ci;

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

CREATE TABLE `tb_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_short_name` varchar(30) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_acc_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_manual_print` (
  `mp_Id` int(11) NOT NULL,
  `mp_AccountHolder_Id` int(11) NOT NULL,
  `mp_BookSize` int(11) NOT NULL,
  `mp_NoOfBooks` int(11) NOT NULL,
  `mp_Chk_From` int(11) NOT NULL,
  `mp_Chk_To` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pending_print_req`
--

CREATE TABLE `tb_pending_print_req` (
  `id` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_isprint` int(11) NOT NULL DEFAULT 0,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_printadmin`
--

CREATE TABLE `tb_printadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `adminid` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `incorrect_attempt` int(11) NOT NULL,
  `password_status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `is_temp_password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_printadmin`
--

INSERT INTO `tb_printadmin` (`username`, `password`, `lastlogintime`, `adminid`, `group_id`, `incorrect_attempt`, `password_status`, `user_type`, `userid`, `create_date`, `is_temp_password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '2012-04-21 00:00:00', 1, 0, 0, 1, 0, 'admin', '2023-01-19', 1),
('adminreprint', 'e10adc3949ba59abbe56e057f20f883e', '2014-02-05 00:00:00', 15, 0, 0, 1, 1, 'adminreprint', '2023-01-19', 1),
('reprint', '21232f297a57a5a743894a0e4a801fc3', '2015-05-31 00:00:00', 16, 0, 0, 1, 1, 'reprint', '2023-01-19', 1),
('reprint1', '0192023a7bbd73250516f069df18b500', '2015-02-14 00:00:00', 17, 0, 0, 1, 1, 'reprint1', '2013-01-19', 1),
('smp302', '32bd24a8434465d0f0907f54da043679', '2023-07-26 00:00:00', 23, 0, 0, 1, 1, 'smp302', '2023-07-26', 1),
('smp0302', '74bcc9aa2aff7f0e60fc529ca6b1ec73', '2023-07-26 00:00:00', 22, 0, 17, 0, 0, 'smp0302', '2023-07-26', 0),
('santosh', '32bd24a8434465d0f0907f54da043679', '2023-08-01 00:00:00', 24, 0, 0, 1, 0, 'psm0302', '2023-08-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_printque`
--

CREATE TABLE `tb_printque` (
  `id` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_print_req_collection`
--

CREATE TABLE `tb_print_req_collection` (
  `id` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_is_reprint` int(11) NOT NULL DEFAULT 0,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_print_req_collection`
--

INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(18, 00027286, 415488357, 357, '1024005042379', 'HARINI BABU DEVADIGA', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A  18  RUKMINI GARDAN ', '2 WAKHAN ROAD  KARAD ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9923099526', '', 184714, 184728, 042379, '2023-07-31', 1, 0, '', '1', '', '', NULL),
(19, 00027287, 415488357, 357, '1024005042554', 'JAGANNATH DINKARRAO MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RETHARE TAL KARAD', 'KARAD', 'DI SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 184729, 184743, 042554, '2023-07-31', 1, 0, '', '2', '', '', NULL),
(20, 00027288, 415488357, 357, '1024005042548', 'SHWETA SUBHASH GURSALE', 01, 'Y', 015, 10, '', '', '', '', '', '', '319 RAVIWAR PETH  ', 'NEAR OLD WATER TANK  KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822874004', '', 184744, 184758, 042548, '2023-07-31', 1, 0, '', '3', '', '', NULL),
(21, 00027300, 415488355, 355, '1007005033096', 'MANDA SADASHIV PADALE', 01, 'Y', 015, 10, '', 'KRISHNA SADASHIV PADALE', '', '', '', '', '175  RAVIWAR PETH  BHOI GALLI  KARAD ', 'BHAIRAJ SAMAJ MANDIR PARISAR KARAD ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011544711', '', 123241, 123255, 033096, '2023-07-31', 1, 0, '', '1', '', '', NULL),
(22, 00027302, 415488355, 355, '1007005034101', 'SUSHAMA PRAKASH TUPE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR TATHE HOSPITAL', 'ZOPADPATTI  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9763849848', '', 123256, 123270, 034101, '2023-07-31', 1, 0, '', '3', '', '', NULL),
(23, 00027303, 415488355, 355, '1007005006953', 'TEJAS YASHAWANT WADKAR', 01, 'Y', 015, 10, '', 'SUJATA TEJAS WADKAR', '', '', '', '', 'GANESH COLANY AGASHIVANAR', 'DHEBEWADI ROAD', 'MALKAPUR KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9271405142', '', 123271, 123285, 006953, '2023-07-31', 1, 0, '', '4', '', '', NULL),
(24, 00027301, 415488355, 355, '1007016030219', 'BULDHANA URBN CO-OP CREDIT SOCIETY LIMITED., ', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHIRISH DINKARRAO  DESHPANDE', 'GANESH BABAN PAWAR', 'RAVIWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164222', '02164222', '9860831978', '', 124006, 124065, 030219, '2023-07-31', 1, 0, '', '2', '', '', NULL),
(25, 00027305, 415488356, 356, '1011005036978', 'SACHIN BABULAL SHAHA', 01, 'Y', 030, 10, '', '', '', '', '', '', '127 GURUWAR PETH', 'BATANE GALLI  NEAR MANORA  ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823385319', '', 447497, 447526, 036978, '2023-07-31', 1, 0, '', '2', '', '', NULL),
(26, 00027304, 415488356, 356, '1011016000818', 'SAI ENTERPRISES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'YOGESH ANANT PETHKAR', '', 'SANKALP GAJANAN HOUSING SOCIETY  GOVARE', 'A P  GOVARE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9422030456', '', 448396, 448425, 000818, '2023-07-31', 1, 0, '', '1', '', '', NULL),
(27, 00027306, 415488356, 356, '1011016001006', 'WING AGRO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VANITA SHANKAR KHABALE', '', 'A  P  WING', '2411 6', 'TAL    KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415122, '99751843', '02164-', '9421116037', '', 448426, 448485, 001006, '2023-07-31', 1, 0, '', '3', '', '', NULL),
(28, 00027289, 415488501, 501, '1004005002017', 'VISHWAS DNYANESHWAR BHOJ', 01, 'Y', 015, 10, '', '', '', '', '', '', '770 SHRI KRIPA', 'A P MASUR', 'SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '9423261385', '', 150526, 150540, 002017, '2023-07-31', 1, 0, '', '1', '', '', NULL),
(29, 00027290, 415488501, 501, '1004005013006', 'VIDYA RAMESH JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'MARKET PETH', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '8799825740', '', 150541, 150555, 013006, '2023-07-31', 1, 0, '', '2', '', '', NULL),
(30, 00027338, 415488354, 354, '1006016000764', 'RUSHIKESH INDUSTRIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RUSHIKESH INDUSTRIES', '', 'KARAD INDUSTRIAL ESTATE ', 'PLOT NO 30 M S C B ROAD ', 'OGALEWADI TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9763970266', '', 193321, 193380, 000764, '2023-07-31', 1, 0, '', '3', '', '', NULL),
(31, 00027336, 415488354, 354, '1006005006623', 'DATTU NANA KHUPKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SAIDAPUR  CHINTAMANI APARTMENT', 'I T I ROAD NEAR TALATHI OFFICE', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9860540424', '', 196262, 196276, 006623, '2023-07-31', 1, 0, '', '1', '', '', NULL),
(32, 00027337, 415488354, 354, '1006005003438', 'SAMBHAJIRAO RAJARAM NIKAM', 01, 'Y', 030, 10, '', 'SUJATA SAMBHAJI NIKAM', '', '', '', '', 'ANUBANDH 57', 'VIDYANAGAR TAL KARAD', 'DSIT SATARA', '', '', 'KARAD', '', '', '', 415124, '271870', '', '9921927019', '', 196277, 196306, 003438, '2023-07-31', 1, 0, '', '2', '', '', NULL),
(33, 00027390, 415488352, 352, '1001005058522', 'MAHADEV DINKAR SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '105MANGALWAR PETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9823815309', '', 588723, 588737, 058522, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(34, 00027392, 415488352, 352, '1001005017702', 'JAYASHRI PRUTHVIRAJ PATIL', 01, 'Y', 015, 10, '', 'VIKRAMSINGH PRITHVIRAJ PATIL', '', '', '', '', 'AT POST SUPNE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415114, '', '', '', '', 588798, 588812, 017702, '2023-08-01', 1, 0, '', '3', '', '', NULL),
(35, 00027394, 415488352, 352, '1001005685084', 'RANI RAVINDRA GAIKWAD', 01, 'Y', 015, 10, '', '', '', '', '', '', '302  SHINDE GALLI ', 'SHUKRAWAR PETH  KARAD ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9130265430', '', 588843, 588857, 685084, '2023-08-01', 1, 0, '', '5', '', '', NULL),
(36, 00027397, 415488352, 352, '1001005684264', 'VAIDEHI VISHWANATH THAKAR', 01, 'Y', 015, 10, '', 'VISHWANATH SADASHIV THAKAR', '', '', '', '', 'C O  ASHWINI VIKAS DEO', 'FLAT NO A 14  346 SOMWAR PETH  MADHURYA ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '020-', '020-', '9890213637', '', 588918, 588932, 684264, '2023-08-01', 1, 0, '', '8', '', '', NULL),
(37, 00027393, 415488352, 352, '1001005683026', 'INNER WHEEL CLUB OF KARAD', 01, 'Y', 030, 10, '', '', '', 'Authorised Signatory', 'INNER WHEEL CLUB ,KARAD', '', 'C O KOLEKAR HOSPITAL ', 'SHANIWAR PETH KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '2139', '', '7028654343', '', 588813, 588842, 683026, '2023-08-01', 1, 0, '', '4', '', '', NULL),
(38, 00027395, 415488352, 352, '1001005067217', 'SANTOSH GANPATRAO SUTAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PLOT NO 25 A MSEB STAFF HOUSING SOCIETY', 'NEAR INTAK BHAVAN', 'VISHRAMBAG SANGLI', '', '', 'SANGLI', '', '', '', 416416, '', '', '9021382371', '', 588858, 588887, 067217, '2023-08-01', 1, 0, '', '6', '', '', NULL),
(39, 00027396, 415488352, 352, '1001005012660', 'JAYSING ANNASAHEB JAGTAP', 01, 'Y', 030, 10, '', '', '', '', '', '', 'JAGDAMBA 54 EAST GAJANAN HOUSING SOCITY ', 'NEAR N C C OFFICE GOVARE ', 'TAL KARAD DIST SATARA ', '', '', 'KARAD', '', '', '', 415110, '', '', '9823737737', '', 588888, 588917, 012660, '2023-08-01', 1, 0, '', '7', '', '', NULL),
(40, 00027391, 415488352, 352, '1001005683007', 'VINAYSINH VYANKATRAO JADHAV', 01, 'Y', 060, 10, '', '', '', '', '', '', 'MANIK CHOWK', 'A P UMBRAJ', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8657743173', '', 588738, 588797, 683007, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(41, 00027398, 415488352, 352, '1001005064649', 'KSHITIJ SARANG BELAPURE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PHULORA PLOT NO 5 BANPURIKAR COLONY', 'SHANIWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9423867468', '', 588933, 588962, 064649, '2023-08-01', 1, 0, '', '9', '', '', NULL),
(42, 00027399, 415488353, 353, '1002005006678', 'SAMEER SUBHASHRAO JOSHI', 01, 'Y', 060, 10, '', '', '', '', '', '', '307 2  KARAD MALKAPUR ROAD', 'MARKET YARD  BAIL BAZAR  MALKAPUR KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9822394805', '', 609766, 609825, 006678, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(43, 00027400, 415488353, 353, '1002016003032', 'SAHYADRI HYDRAULICS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'GANESH SHRIRANG NANGARE', '', 'NH 4  NEAR RANADE HOSPITAL ROAD', 'SHASHTRINAGAR  MALKAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9823629872', '', 621152, 621211, 003032, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(44, 00027401, 415488353, 353, '1002005032624', 'ASHOK LAXMAN SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', '177  E SHIVAJINAGAR A P  GOTE  ', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9225809010', '', 609826, 609855, 032624, '2023-08-01', 1, 0, '', '3', '', '', NULL),
(45, 00027402, 415488501, 501, '1004016000412', 'GOOD SOURCE INDIA EXPORTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BAJIRAO RAMCHANDRA CHAVAN', 'INDUTAI BAJIRAO CHAVAN', 'NEAR DUDHGANGA HOUSING SOSAYTI  ', 'BANAVADI COLONY  SAIDAPUR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9890397616', '', 149972, 150031, 000412, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(46, 00027403, 415488501, 501, '1004005013427', 'DHIRAJ BALASAHEB BHOSALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  MASUR', 'PATBHANDARE COLONY VASAHAT ', 'TAL KARAD  DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '7083381163', '', 150556, 150570, 013427, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(47, 00027404, 415488501, 501, '1004005008475', 'BALUTAI BAPU SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KHARADE KALGAON', 'TAL KARAD  DIST SATARA', '', '', '', 'KARAD', '', '', '', 415109, '02164-', '02164-', '9325474079', '', 150571, 150585, 008475, '2023-08-01', 1, 0, '', '3', '', '', NULL),
(48, 00027405, 415488502, 502, '1005016006070', 'RUPALI DRESSES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SWAPNIL SURESH PAKHLE', '', 'MILKAT NO 221', 'A P UMBRAJ', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8888618787', '', 271891, 271950, 006070, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(49, 00027406, 415488354, 354, '1006005009445', 'SUHAS UTTAM JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MALBHAG SAIDAPUR', '9822786475', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822786475', '', 196307, 196321, 009445, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(50, 00027407, 415488354, 354, '1006005158769', 'DHAIRYASHEEL DHANAJAY APSHINGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   DHANANJAY SHAMRAO APSHINGE', 'FLAT NO   2 RUKMINI HEIGHTS RUKMININAGAR', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02372-', '02372-', '9503190315', '', 196322, 196336, 158769, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(51, 00027408, 415488355, 355, '1007005034456', 'SUNANDA SHRIRANG MALWADKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A 2 211 MANTRI CHANDAK NAGAR', 'RUPABHAVANI RAOD BHAVANI PETH', 'SOLAPUR', '', '', 'SOLAPUR', '', '', '', 413002, '', '', '9503115706', '', 123286, 123300, 034456, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(52, 00027409, 415488355, 355, '1007005034879', 'SUNIL MAHADEV KATWATE', 01, 'Y', 015, 10, '', '', '', '', '', '', '188 B BHOI GALLI ', 'RAVIWAR PETH  KARAD ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9665101049', '', 123301, 123315, 034879, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(53, 00027410, 415488356, 356, '1011102000111', 'ROHIT AUTOMOBILES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'rushikesh subash gijare', '', '278  B OLD 297  NEW OPP SOC PETROL PUMP ', 'BANGLORE ROAD  MALKAPUR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '94238664', '9422401130', '', 446327, 446386, 000111, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(54, 00027411, 415488505, 505, '1012005001528', 'SHANKAR YASHWANT MOLAWADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P   MOLAWADEWADI ', 'KUTHARE ', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '', '02372-', '9881984817', '', 097851, 097880, 001528, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(55, 00027412, 415488509, 509, '1020016000106', 'SIDHESHWAR MEDICAL AND GENERAL STORES PROP SA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SIDHESHWAR MEDICAL & GENERAL STORES', '', 'NEAR CHILHAIDEVI MANDIR ', 'KALWADE ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9960202898', '', 058488, 058547, 000106, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(56, 00027413, 415488509, 509, '1020016000106', 'SIDHESHWAR MEDICAL AND GENERAL STORES PROP SA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SIDHESHWAR MEDICAL & GENERAL STORES', '', 'NEAR CHILHAIDEVI MANDIR ', 'KALWADE ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9960202898', '', 058548, 058607, 000106, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(57, 00027414, 415488357, 357, '1024016000446', 'SHIV MEDICAL AND SURGICALS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'NEAR TARANGAN VISHWA', 'A P VIDYANAGAR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9850532916', '', 185986, 186045, 000446, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(58, 00027415, 415488357, 357, '1024005041032', 'DEEPAK BALASO JAGATAP', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST  WADGAON HAVELI ', 'TAL  KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9881904295', '', 184759, 184773, 041032, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(59, 00027416, 415488358, 358, '1026016000191', 'VIKAS HINDURAO KATKAR', 01, 'Y', 060, 11, '', 'PRO.KATKAR VIKAS HINDURAO', '', '', '', '', 'A P OGALEWADI NEAR DATTAM', 'MANDIR TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '272353', '', '9763892121', '', 073921, 073980, 000191, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(60, 00027417, 415488359, 359, '1037016000227', 'SHREE BHAIRAVNATH MULTI STATE CO OP CREDIT SO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AVINASH BHASKAR KADAM', 'KANCHAN VIJAY DABADE', '48 LAXMI NAGAR', 'DECAN CHOUK  PHALTAN', 'TAL  PHALTAN  DIST SATARA', '', '', 'PHALTAN', '', '', '', 415523, '75075573', '02166-', '9766962088', '', 136276, 136335, 000227, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(61, 00027418, 415488359, 359, '1037005007372', 'RAHUL RAYAPPA KARVE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'NEAR SUPANEKAR OIL MILL ', 'KARAD', 'MO NO 9823236686', '', '', 'KARAD', '', '', '', 415210, '', '', '8421560741', '', 137537, 137596, 007372, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(62, 00027421, 415488101, 101, '1018005002919', 'JAYWANT PRAKASH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P BELWADE BUDRUK', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '288160', '', '9823053602', '', 171709, 171723, 002919, '2023-08-01', 1, 0, '', '3', '', '', NULL),
(63, 00027422, 415488101, 101, '1018016001493', 'SHAMRAO KAKA PATIL XEROX AND COMPUTER CENTRE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'SHOP NO 106  HUTATMA SMARAK SHOPPING CEN', 'NEAR TAHSIL OFFICE  ISLAMPUR  URUN   ISL', 'TAL   WALVA DIST   ISLAMPUR', '', '', 'ISLAMPUR', '', '', '', 415409, '02342-', '02342-', '9823053602', '', 176851, 176865, 001493, '2023-08-01', 1, 0, '', '4', '', '', NULL),
(64, 00027423, 415488101, 101, '1018005116661', 'SONAL ASHOK KAMBLE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   PRAKASH SHIKSHAN MANDAL', 'A P   URUN ISLAMPUR', 'TAL   WALWA  DIST   SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '-', '-', '8451889179', '', 171724, 171738, 116661, '2023-08-01', 1, 0, '', '5', '', '', NULL),
(65, 00027426, 415488101, 101, '1018005115438', 'OMKAR PRAKASH KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'DUKE MALA', 'AT  MASUCHIWADI  POST  BORGAON', 'TAL  WALWA  DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415413, '02342-', '02342-', '7058500290', '', 171754, 171768, 115438, '2023-08-01', 1, 0, '', '8', '', '', NULL),
(66, 00027419, 415488101, 101, '1018016001150', 'M/S .SHAH PREMCHAND JIVARAJ & CO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'MAYKET YARD', 'TAL WALAWA', 'DIS SANGALI', '', '', 'ISLAMPUR', '', '', '', 415409, '02342222', '', '', '', 176791, 176850, 001150, '2023-08-01', 1, 0, '', '1', '', '', NULL),
(67, 00027420, 415488101, 101, '1018005115890', 'SRUSHTI DEEPAK DEOKATE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'C O   PRAKASH SHIKSHAN MANDAL', 'A P   URUN ISLAMPUR  PETH SANGLI ROAD ', 'TAL   WALAWA DIST   SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '-', '-', '9096649105', '', 171679, 171708, 115890, '2023-08-01', 1, 0, '', '2', '', '', NULL),
(68, 00027424, 415488101, 101, '1018005116662', 'SANGITA MAHESH PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   URUN ISLAMPUR ', 'KAPUSKHED ROAD  NEHARU NAGAR ', 'TAL   WALWA  DIST   SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '02342-', '02342-', '7030201270', '', 171739, 171753, 116662, '2023-08-01', 1, 0, '', '6', '', '', NULL),
(69, 00027425, 415488101, 101, '1018016001358', 'JAY STONE CRUSHER', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  KAMERI', 'TUJARPUR ROAD', 'TAL  WALWA  DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415403, '', '02342-', '9970777999', '', 176866, 176925, 001358, '2023-08-01', 1, 0, '', '7', '', '', NULL),
(70, 00027498, 415488352, 352, '1001005058754', 'GANESH BABURAO MENKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'GURUKRIPA 17 GANESH', 'COLONY SADARBAZAR SATARA', '', '', '', 'SATARA', '', '', '', 415001, '', '', '9011142480', '', 588963, 588992, 058754, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(71, 00027499, 415488352, 352, '1001005056818', 'SANJAY JAYSING MOHITE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'NILAWATI   PLOT NO 5  INDRAPRASATA COLON', 'AGASHIVNAGAR MALKAPUR', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '8055863777', '', 588993, 589022, 056818, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(72, 00027500, 415488352, 352, '1001005052467', 'SATTYANARAYAN SHIVRAJ MINIYAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '410 SOMWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822498462', '', 589023, 589052, 052467, '2023-08-02', 24, 0, '', '3', '', '', NULL),
(73, 00027501, 415488352, 352, '1001016006692', 'ROOPMANTRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RANKUMARI KISHORKUMAR SANGHAVI', '', '277 GURUWAR PETH BHAJI MANDAI ROAD', 'GURUWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9762076862', '', 568396, 568455, 006692, '2023-08-02', 24, 0, '', '4', '', '', NULL),
(74, 00027502, 415488352, 352, '1001005685108', 'RAJU SHRIMANT RANSHINGARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MANGALWAR PETH ', 'SHIKHAR VASTI  KARAD ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7666150745', '', 589053, 589067, 685108, '2023-08-02', 24, 0, '', '5', '', '', NULL),
(75, 00027503, 415488352, 352, '1001005682868', 'SHIVKUMAR BAJRANG DANGE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P SASPADE', 'TAL DIST  SATARA', '', '', '', 'NAGTHANE', '', '', '', 415519, '02162-', '02162-', '9766131852', '', 589068, 589097, 682868, '2023-08-02', 24, 0, '', '6', '', '', NULL),
(76, 00027504, 415488352, 352, '1001005051525', 'RATILAL SHAMAJI KHONA', 01, 'Y', 015, 10, '', '', '', '', '', '', '458 USHAKAL SOMWAR PETH', 'PANTACHA KOT', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9850050680', '', 589098, 589112, 051525, '2023-08-02', 24, 0, '', '7', '', '', NULL),
(77, 00027505, 415488352, 352, '1001005064663', 'KETAN SURESHCHANDRA GANDHI', 01, 'Y', 030, 10, '', '', '', '', '', '', '73 2 GANDHI MENSION VAKHAR BHAG', 'MAHAVEER NAGAR', 'SANGLI', '', '', 'SANGLI', '', '', '', 416416, '', '', '9421127585', '', 589113, 589142, 064663, '2023-08-02', 24, 0, '', '8', '', '', NULL),
(78, 00027506, 415488353, 353, '1002005852000', 'PRAKASH RAMCHANDRA KADAM', 01, 'Y', 060, 10, '', '', '', '', '', '', 'GURUKRUPA HOSPITAL  SHIVNAGAR  RETHRE BU', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415108, '', '02164-', '8806404074', '', 609856, 609915, 852000, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(79, 00027507, 415488353, 353, '1002016002031', 'SANGHAVI JEWELLERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANGHVI JEWLLERS', '', '99 BUDHWAR PETH KARAD', 'KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9960699000', '', 621212, 621271, 002031, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(80, 00027508, 415488353, 353, '1002016002031', 'SANGHAVI JEWELLERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANGHVI JEWLLERS', '', '99 BUDHWAR PETH KARAD', 'KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9960699000', '', 621272, 621331, 002031, '2023-08-02', 24, 0, '', '3', '', '', NULL),
(81, 00027513, 415488353, 353, '1002005005244', 'KUSUM KISHOR KENIYA', 01, 'Y', 060, 10, '', '', '', '', '', '', '71 SHIVAJI HOUSING SOCIETY KARAD', 'KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9423866719', '', 610126, 610185, 005244, '2023-08-02', 24, 0, '', '8', '', '', NULL),
(82, 00027514, 415488353, 353, '1002016000887', 'AJANTHA TRANSPORT COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AJANTHA TRANSPORT COMPANY', '', 'SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '22022', '', '9922874777', '', 621332, 621391, 000887, '2023-08-02', 24, 0, '', '9', '', '', NULL),
(83, 00027515, 415488353, 353, '1002016001210', 'AJANTA AUTOMOBILE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AJANTA AUTOMOBILE', '', '452 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '222455', '', '9922874777', '', 621392, 621451, 001210, '2023-08-02', 24, 0, '', '10', '', '', NULL),
(84, 00027509, 415488353, 353, '1002005849161', 'JAFARALI ALAM DESAI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'AT POST   GOTE', 'MUDHE GOTE', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9923461558', '', 609916, 609975, 849161, '2023-08-02', 24, 0, '', '4', '', '', NULL),
(85, 00027511, 415488353, 353, '1002005005242', 'KISHOR DHANJI KENIA', 01, 'Y', 060, 10, '', '', '', '', '', '', '71 VIKRANT BANGLO SHIVAJIHOUSING SOCIETY', 'KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '22719', '', '', '', 610006, 610065, 005242, '2023-08-02', 24, 0, '', '6', '', '', NULL),
(86, 00027512, 415488353, 353, '1002005033899', 'SAGAR KISHOR KENIA', 01, 'Y', 060, 10, '', '', '', '', '', '', '71 VIKRANT BANGLO SHIVAJIHOUSING SOCIETY', 'KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '222719', '', '', '', 610066, 610125, 033899, '2023-08-02', 24, 0, '', '7', '', '', NULL),
(87, 00027510, 415488353, 353, '1002005041300', 'ANNASO RAJARAM KALE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P MASUR TAL KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 0, '', '', '9765317519', '', 609976, 610005, 041300, '2023-08-02', 24, 0, '', '5', '', '', NULL),
(88, 00027516, 415488501, 501, '1004106000083', 'AMRUT VITTHAL JADHAV', 01, 'Y', 060, 13, '', '', '', '', '', '', 'KHARADE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '00000000', '9623117303', '', 148081, 148140, 000083, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(89, 00027517, 415488502, 502, '1005102000718', 'AMAZIA VISION ENVIRONMENT PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DHANANJAY SHIVAJI PAWAR', '', 'FLAT NO 201   ANANDI BANGLOW  ', 'SR NO 87 37  VEERBHADRANAGAR  ', 'BANER PUNE  ', '', '', 'PUNE', '', '', '', 411045, '', '', '9665106666', '', 269686, 269745, 000718, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(90, 00027518, 415488502, 502, '1005102000718', 'AMAZIA VISION ENVIRONMENT PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DHANANJAY SHIVAJI PAWAR', '', 'FLAT NO 201   ANANDI BANGLOW  ', 'SR NO 87 37  VEERBHADRANAGAR  ', 'BANER PUNE  ', '', '', 'PUNE', '', '', '', 411045, '', '', '9665106666', '', 269746, 269805, 000718, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(91, 00027519, 415488502, 502, '1005016006025', 'SWARAJ MARKETING PROP SATYAWAN VASANTRAO SHIK', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SATYAWAN VASANTRAO SHIKHARE', '', 'A P UMBRAJ  KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9822275235', '', 271951, 272010, 006025, '2023-08-02', 24, 0, '', '3', '', '', NULL),
(92, 00027520, 415488354, 354, '1006005001287', 'BALASAHEB KRISHANARAO GHATAGE', 01, 'Y', 030, 10, '', 'GHATAGE ABHIJEET BALASAHEB', 'VIJAYMALA BALASAHEB GHATAGE', '', '', '', 'P NO 6 SAHAWAS KRISHNA', 'CANOL VIDYANAGAR ', '9422404956', '', '', 'KARAD', '', '', '', 415124, '', '', '9422404956', '', 196337, 196366, 001287, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(93, 00027521, 415488354, 354, '1006005010209', 'BALASAHEB KRISHANARAO GHATAGE', 01, 'Y', 030, 10, '', 'PATIL PRAKASH DINKARRAO', 'HANBAR ANANDRAO MAHADEO', '', '', '', 'P NO 6 SAHAWAS KRISHNA', 'CANOL VIDYANAGAR ', '9422404956', '', '', 'KARAD', '', '', '', 415124, '', '', '9422404956', '', 196367, 196396, 010209, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(94, 00027522, 415488354, 354, '1006005153007', 'SHUBHANGI SARJERAO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', '1336  AKANSHA  PARVATI NAGAR ', 'VIDYANAGAR SAIDAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7276651323', '', 196397, 196411, 153007, '2023-08-02', 24, 0, '', '3', '', '', NULL),
(95, 00027523, 415488354, 354, '1006005158682', 'ARCHANA RAJENDRA PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  PARLE ', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '8767922756', '', 196412, 196426, 158682, '2023-08-02', 24, 0, '', '4', '', '', NULL),
(96, 00027524, 415488356, 356, '1011005033046', 'BHUJANGRAO VILASRAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   RETHARE KHURD', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415108, '', '', '9011121338', '', 447527, 447541, 033046, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(97, 00027525, 415488356, 356, '1011005033170', 'RAOSAHEB AMBOJAPPA BIRADAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '316 A P SANKH ', 'NEAR MASHID ', 'TAL JAT DIST SANGLI ', '', '', 'SANGLI', '', '', '', 416412, '', '', '7020305148', '', 447542, 447571, 033170, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(98, 00027526, 415488356, 356, '1011102000129', 'S P TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAMESHWAR TRAMBAK SWAMI', 'VASANT BABURAV SHINDE', 'MAGISTIC PLAZA OPP KRISHNA HOSPITAL', 'P B SERVICE ROAD MALKAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415559, '02164243', '', '9822309067', '', 446387, 446446, 000129, '2023-08-02', 24, 0, '', '3', '', '', NULL),
(99, 00027527, 415488356, 356, '1011005034767', 'AJAY GAUTAM SATHE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'OPP GRAMPANCHAYAT PADALI  KESE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415114, '', '02164-', '9822167859', '', 447572, 447601, 034767, '2023-08-02', 24, 0, '', '4', '', '', NULL),
(100, 00027528, 415488505, 505, '1012016000366', 'NEW OM TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AVADHUT MADHUKAR CHINCHKAR', 'ABHIJEET MADHUKAR CHINCHKAR', 'A P   MALHARPETH ', 'MILKAT NO  940 ', 'TAL   PATAN   DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '8237177331', '', 100411, 100470, 000366, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(101, 00027529, 415488357, 357, '1024005042557', 'DIPALI PRADEEP KADAM', 01, 'Y', 015, 10, '', 'ANUP GANESH NIMBALKAR', '', '', '', '', 'FLAT NO 3  K S T PARK  ', 'AGASHIVNAGAR  MALKAPUR', 'TAL   KARAD DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9549903447', '', 184774, 184788, 042557, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(102, 00027496, 415488358, 358, '1026016000331', 'RAJ TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RANJEET RAJENDRA SALUNKHE', '', 'MARKET YARD GATE NO 5  NEAR KARAD MARCHA', 'SHANIWAR PETH  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822477662', '', 073981, 074040, 000331, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(103, 00027497, 415488358, 358, '1026005004902', 'MANE SANJAY TANAJI', 01, 'Y', 030, 10, '', 'CHITRA SANJAY MANE', '', '', '', '', '201', 'MANGALWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 075452, 075481, 004902, '2023-08-02', 24, 0, '', '2', '', '', NULL),
(104, 00027530, 415488359, 359, '1037005000306', 'ANANDRAO MARUTI ES LONDHE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SUYOGNAGAR GOLESHWAR ROAD', 'KARAD PH 23841', '9887413707', '', '', 'KARAD', '', '', '', 415110, '23841', '', '9881413707', '', 137597, 137626, 000306, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(105, 00027531, 415488356, 356, '1011005037810', 'SWAPNALI KIRAN PAVEKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   RETHARE BK  ', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9404057976', '', 447602, 447616, 037810, '2023-08-02', 24, 0, '', '1', '', '', NULL),
(106, 00027611, 415488352, 352, '1001102000058', 'PIONEER DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'CHIVATE PRAKASH VASANT', 'CHIVATE ARCHANA ARUN', 'PLOT NO 355  NEAR MANOHAR LODGE  ', 'SHANIWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '93710788', '', '9371078828', '', 569566, 569625, 000058, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(107, 00027612, 415488352, 352, '1001102000327', 'APEX  ENGINEERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP.MANOHAR GANGARAM SHINDE', '', 'PLOT NO 28 KARAD INDUSTRIAL ESTATE', 'OGALEWADI  KARAD ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '273976', '9822652976', '', 569626, 569685, 000327, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(108, 00027613, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 569686, 569745, 000339, '2023-08-03', 24, 0, '', '3', '', '', NULL),
(109, 00027614, 415488352, 352, '1001103000136', 'MEDIXER LIFE SCIENCE PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MEDIXER LIFE SCIENCE PVT LTD', '', 'TINGRE NAGAR PLOT NO 7 SR NO 33 2 ', 'SHOP NO A 7 OPP  TANISHKA  COLLEGE ROAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7767958947', '', 569746, 569805, 000136, '2023-08-03', 24, 0, '', '4', '', '', NULL),
(110, 00027615, 415488352, 352, '1001106000062', 'S V PATHAK & COMPANY SALES & SERVICES PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S V PATHAK', '', '35 A SOMWAR PETH  ', 'KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9156011099', '', 569806, 569865, 000062, '2023-08-03', 24, 0, '', '5', '', '', NULL),
(111, 00027616, 415488352, 352, '1001106000091', 'THE KARAD MERCHANT SAH CREDIT SANSTHA LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KARAD MERCHANT', '', '7 8 SOMWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '9881908429', '', 569866, 569925, 000091, '2023-08-03', 24, 0, '', '6', '', '', NULL),
(112, 00027617, 415488352, 352, '1001106000205', 'PALKAR PHARMACEUTICALS DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PALKAR PHARMACEUTICALS', '', '119 VATSALA HOUSE SHIVAJI NAGAR CO OP HO', 'SHIVAJI NAGAR CO OP HOUSING SOC KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164221', '90961444', '7350666555', '', 569926, 569985, 000205, '2023-08-03', 24, 0, '', '7', '', '', NULL),
(113, 00027619, 415488352, 352, '1001005682472', 'SAGAR GAJANAN PUJARI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'SHRI RAM COLONY NO 6 PLOT NO 5 ', 'BALWANT NAGAR NEAR MAHADEV MANDIR', 'CHINCHWAD  PUNE', '', '', 'PUNE', '', '', '', 411033, '', '', '9890687122', '', 589173, 589232, 682472, '2023-08-03', 24, 0, '', '9', '', '', NULL),
(114, 00027622, 415488352, 352, '1001016006398', 'PRATHAM ENTERPRISES KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '186 RAJASHRI RESIDENCY', 'SOMAWAR PETH KARAD', '9822628768  AITPK5133H', '', '', 'KARAD', '', '', '', 415110, '224920', '', '9822628768', '', 568456, 568515, 006398, '2023-08-03', 24, 0, '', '12', '', '', NULL),
(115, 00027618, 415488352, 352, '1001005028162', 'MOHAN RAMCHANDRA PAWAR', 01, 'Y', 030, 10, '', 'ABHISHEK MOHAN PAWAR', '', '', '', '', '69 2A  ROW HOUSE NO A3 KRUSHNAANGAN SOCI', 'WAKHAN ROAD  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9421212727', '', 589143, 589172, 028162, '2023-08-03', 24, 0, '', '8', '', '', NULL),
(116, 00027621, 415488352, 352, '1001005000869', 'MAHILA MANDAL KARAD', 01, 'Y', 030, 10, '', '', '', 'Authorised Signatory', '', '', '54 GURUWAR PETH ', 'CHAWADI CHAUK  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9604564830', '', 589248, 589277, 000869, '2023-08-03', 24, 0, '', '11', '', '', NULL),
(117, 00027623, 415488352, 352, '1001005022455', 'VIJAY BHAGWANRAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', '508  NEAR POLICE STATION', 'KARAD', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823760666', '', 589278, 589307, 022455, '2023-08-03', 24, 0, '', '13', '', '', NULL),
(118, 00027620, 415488352, 352, '1001005685001', 'SATISH HANMANT BHISE', 01, 'Y', 015, 10, '', 'GOURI SATISH BHISEF', '', '', '', '', '857   SIDDHARTH COLONY', 'PATAN', 'TAL  PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415206, '02372-', '02372-', '9604936026', '', 589233, 589247, 685001, '2023-08-03', 24, 0, '', '10', '', '', NULL),
(119, 00027624, 415488352, 352, '1001005681110', 'SIMA SUDHIR PADMALE', 01, 'Y', 030, 10, '', '', '', '', '', '', '458  SOMWAR PETH', 'OPP RENUKA MANDIR', 'KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9921136930', '', 589308, 589337, 681110, '2023-08-03', 24, 0, '', '14', '', '', NULL),
(120, 00027627, 415488353, 353, '1002016003099', 'SHRI PAN SHOP AND SNACK CENTER', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'JAYESH ADHIK SHINDE', '', 'A P   WARUNJI PHATA SR NO 43 1 2B', 'GOTE  KARAD PATAN ROAD ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '8329896217', '', 621452, 621481, 003099, '2023-08-03', 24, 0, '', '3', '', '', NULL),
(121, 00027628, 415488353, 353, '1002016003100', 'SAMRAT POULTRY FARM', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'ashwini vijayb shinde', '', 'GOTE  SR NO 45 6 B  PLOT NO 5', 'VARUNJI FATA  ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '7020389199', '', 621482, 621511, 003100, '2023-08-03', 24, 0, '', '4', '', '', NULL),
(122, 00027629, 415488353, 353, '1002016003101', 'A B ENTERPRISE', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   HAJARMACHI ', 'M S E B ROAD ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '7249184981', '', 621512, 621541, 003101, '2023-08-03', 24, 0, '', '5', '', '', NULL),
(123, 00027625, 415488353, 353, '1002005029655', 'RAJESH DAHYABHAI PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'UMIYA NIVAS 97 BUDHWAR', 'PETH KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '3381', '', '9822475095', '', 610186, 610200, 029655, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(124, 00027626, 415488353, 353, '1002005850839', 'BALKRISHNA KHASHABA PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHIVDARSHAN APARTMENT RROM NO 2', 'VISAWA PARK', 'SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9987063064', '', 610201, 610215, 850839, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(125, 00027630, 415488502, 502, '1005005298014', 'YASHODA KARAN GHUTE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  RUTUGANDH  CHAFAL ROAD ', 'NEAR HOLY CONVENT SCHOOL ', 'UMBRAJ', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9922337788', '', 269002, 269061, 298014, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(126, 00027631, 415488502, 502, '1005005298014', 'YASHODA KARAN GHUTE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  RUTUGANDH  CHAFAL ROAD ', 'NEAR HOLY CONVENT SCHOOL ', 'UMBRAJ', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9922337788', '', 269062, 269121, 298014, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(127, 00027632, 415488502, 502, '1005102000075', 'VIPUL CLOTH STORES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SANJIV INDRALAL VORA', '', 'AP UMBRAJ', 'TAL KARAD', 'DIST SATARA   M 9225804241', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '7709144969', '', 269806, 269865, 000075, '2023-08-03', 24, 0, '', '3', '', '', NULL),
(128, 00027633, 415488354, 354, '1006016000005', 'YASHWANTRAO CHAVAN COLLEGE OF SCIENCE KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'Y.C.COLLEGE OF SCIENCE KARAD', 'Y.C.COLLEGE OF SCIENCE KARAD', 'YASHWANTRAO CHAVAN COLLEGE OF SCIENCE KA', 'A P  VIDYANAGAR SAIDAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164271', '', '', '', 193381, 193440, 000005, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(129, 00027634, 415488355, 355, '1007016030387', 'M/S GURSALE SILVER PALACE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '20 RAVIWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9689714377', '', 124066, 124080, 030387, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(130, 00027635, 415488355, 355, '1007005033796', 'DILIPKUMAR SAGARMAL SANGHAVI', 01, 'Y', 030, 10, '', 'VIDHYA DILIP SANGHAVI', '', '', '', '', '289 A 2  GURUWAR PETH ', 'NEAR AZAD HIND AKHADA TALIM   KARAD ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9404403888', '', 123316, 123345, 033796, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(131, 00027636, 415488356, 356, '1011005037249', 'SAMEER ANANDRAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'FLAT NO 14  PARIJAT BUILDING ', 'KRUSHNA HOSPITAL ROAD  Z P COLONY', 'AGASHIVNAGAR  MALKAPULR  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9130028446', '', 447617, 447631, 037249, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(132, 00027637, 415488509, 509, '1020005049254', 'HANMANT UTTAM PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '437 PRATHMIK SHALE JAVAL ', 'DHONDEWADI ', 'TAL   KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415104, '', '02164-', '9518771424', '', 057486, 057500, 049254, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(133, 00027608, 415488358, 358, '1026005003854', 'SHAESTA IMTIYAJ KACCHI', 01, 'Y', 030, 10, '', '', '', '', '', '', '401 1 BANPURKAR COLONY', 'SHANIWAR PETH MARKET YARD KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9423865541', '', 075482, 075511, 003854, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(134, 00027610, 415488358, 358, '1026005001641', 'RAJENDRA TANAJI MANE', 01, 'Y', 030, 10, '', '', '', '', '', '', '201 MANGALWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9922275589', '', 075512, 075541, 001641, '2023-08-03', 24, 0, '', '3', '', '', NULL),
(135, 00027609, 415488358, 358, '1026016000254', 'GANESH TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '83  RAVIVAR PETH  KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9850098500', '', 074041, 074100, 000254, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(136, 00027638, 415488201, 201, '1032102000014', 'SHREE DATTA AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO. UDEG VASANT BALARAM', 'CO. BORROWER UDEG VARSHA VASAN', 'A P  MIRJOLI SAKHARWADI', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355259', '02355259', '9922121670', '', 185897, 185956, 000014, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(137, 00027639, 415488201, 201, '1032102000014', 'SHREE DATTA AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO. UDEG VASANT BALARAM', 'CO. BORROWER UDEG VARSHA VASAN', 'A P  MIRJOLI SAKHARWADI', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355259', '02355259', '9922121670', '', 185957, 186016, 000014, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(138, 00027640, 415488201, 201, '1032016000765', 'SHREE SAMARATH CONSTRUCTION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MANOJ S VICHARE', '', 'C O SHANTARAM VICHARE', 'GHAR KR 58 HUMBARWADI MIRLE KHOPI ', 'TAL KHED DIST RATANAGIRI', '', '', 'RATNAGIRI', '', '', '', 415715, '', '', '7276206522', '', 187996, 188055, 000765, '2023-08-03', 24, 0, '', '3', '', '', NULL),
(139, 00027641, 415488201, 201, '1032005042396', 'MANISHA NILESH SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'KADWEKAR MARG', 'BAZAR PETH  CHIPLUN', 'TAL  CHIPLUN  DIST  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9504571111', '', 185641, 185670, 042396, '2023-08-03', 24, 0, '', '4', '', '', NULL),
(140, 00027642, 415488201, 201, '1032005042706', 'VARSHA BHASKAR KULKARNI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'KRISH FLORA RESIDENCY ROOM NO 208 ', 'VIKASWADI KHERDI ', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '7721954177', '', 185671, 185685, 042706, '2023-08-03', 24, 0, '', '5', '', '', NULL),
(141, 00027643, 415488359, 359, '1037005000309', 'MANGAL MOHAN JAGATAP', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO  WADGAON HAVELI', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '268031', '', '7522916666', '', 137627, 137656, 000309, '2023-08-03', 24, 0, '', '1', '', '', NULL),
(142, 00027644, 415488359, 359, '1037005000108', 'JAYWANT RAMCHANDRA YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'KRISHNA KOYANA HOUSEING', 'SOCITY KARVE NAKA KARAD', '', '', '', 'KARAD', '', '', '', 415110, '98228900', '', '7588059952', '', 137657, 137671, 000108, '2023-08-03', 24, 0, '', '2', '', '', NULL),
(143, 00027775, 415488352, 352, '1001005680919', 'VISHAL DILIP MAHAPURE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 44 BUDHWAR PETH  KARAD', 'MAHATMA FULE NAGAR KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9730583834', '', 589428, 589442, 680919, '2023-08-04', 24, 0, '', '4', '', '', NULL),
(144, 00027781, 415488352, 352, '1001005685118', 'SNEHALI PRANJAL KATKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KHODASHI ', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7709381514', '', 589653, 589667, 685118, '2023-08-04', 24, 0, '', '10', '', '', NULL),
(145, 00027772, 415488352, 352, '1001005008142', 'NALINI BALKRISHNA SHIRALKAR', 01, 'Y', 030, 10, '', 'SHIRALKAR BALKRISHNA  VISHNU', '', '', '', '', '69 GURUWAR PETH', 'KARAD', '9422517292', '', '', 'KARAD', '', '', '', 415110, '', '', '9422517292', '', 589338, 589367, 008142, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(146, 00027773, 415488352, 352, '1001005008142', 'NALINI BALKRISHNA SHIRALKAR', 01, 'Y', 030, 10, '', 'SHIRALKAR BALKRISHNA  VISHNU', '', '', '', '', '69 GURUWAR PETH', 'KARAD', '9422517292', '', '', 'KARAD', '', '', '', 415110, '', '', '9422517292', '', 589368, 589397, 008142, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(147, 00027774, 415488352, 352, '1001005062000', 'SANJAY MARUTI MHASKE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'S NO 116 1 PANDURANG NIVAS JADHAV WASTI', 'ALANDI ROAD NEAR LAXMI TOWN SHOP NO 1 ', 'DIGHI CAMP   PUNE', '', '', 'PUNE', '', '', '', 411015, '', '', '9850077728', '', 589398, 589427, 062000, '2023-08-04', 24, 0, '', '3', '', '', NULL),
(148, 00027776, 415488352, 352, '1001005059275', 'PRASHANT MOHAN MIRLEKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'BUILDING NO 50  FLAT NO 12', 'A WARD   AMBAI TANK  RANKALA PARK', 'KOLHAPUR', '', '', 'KOLHAPUR', '', '', '', 416010, '0231-232', '', '9975441560', '', 589443, 589472, 059275, '2023-08-04', 24, 0, '', '5', '', '', NULL),
(149, 00027777, 415488352, 352, '1001005059874', 'NIJAM DASTAGIR INAMDAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '166  SHURAWAR PETH KARAD', 'TAL KARAD DIS SATARA', '', '', '', 'KARAD', '', '', '', 415110, '20360', '', '', '', 589473, 589502, 059874, '2023-08-04', 24, 0, '', '6', '', '', NULL),
(150, 00027779, 415488352, 352, '1001005682868', 'SHIVKUMAR BAJRANG DANGE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P SASPADE', 'TAL DIST  SATARA', '', '', '', 'NAGTHANE', '', '', '', 415519, '02162-', '02162-', '9766131852', '', 589563, 589592, 682868, '2023-08-04', 24, 0, '', '8', '', '', NULL),
(151, 00027778, 415488352, 352, '1001005058984', 'RAJESH SURESH BARTAKKE', 01, 'Y', 060, 10, '', '', '', '', '', '', '64  SAHAJIVAN HOUSING SOCIETY', 'GODOLI VILASPUR SATARA', '', '', '', 'SATARA', '', '', '', 415004, '', '', '9881170304', '', 589503, 589562, 058984, '2023-08-04', 24, 0, '', '7', '', '', NULL),
(152, 00027780, 415488352, 352, '1001005682903', 'PRIYANKA SURESH AHER', 01, 'Y', 060, 10, '', '', '', '', '', '', 'FLAT NO 7 SHRI GANESH APT MOKATE NAGAR', 'LEFT BHUSARI COL PAUD ROAD KOTHRUD PUNE', 'KOTHRUD PUNE', '', '', 'PUNE', '', '', '', 411038, '', '', '9970041627', '', 589593, 589652, 682903, '2023-08-04', 24, 0, '', '9', '', '', NULL),
(153, 00027807, 415488357, 357, '1024005001216', 'KALPANA VISHVNATH MOHITE', 01, 'Y', 015, 10, '', 'TEJAS VISHWANATH MOHITE', '', '', '', '', 'KALPVISHAV PLOT NO F 2', 'RUKMINIGARDEN ', '9922798262', '', '', 'KARAD', '', '', '', 415110, '25416', '', '', '', 184789, 184803, 001216, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(154, 00027808, 415488353, 353, '1002005041359', 'PARAG VASANTRAO SHENOLKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST WARUNJI', 'JIJAMATANAGAR TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '', '', 610216, 610245, 041359, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(155, 00027809, 415488353, 353, '1002016003102', 'M/S TRIMURTI TRADERS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'parag vasantrao shenolkar', '', 'MILKAT NO  393 B   VARUNJI', 'PATAN ROAD VARUNJI', 'TAL  ARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9403944323', '', 621542, 621571, 003102, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(156, 00027811, 415488353, 353, '1002005852337', 'SAGAR SHIVAJI GAWADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P MUNDHE', 'NEAR SALVE MALA', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9284806605', '', 610261, 610290, 852337, '2023-08-04', 24, 0, '', '4', '', '', NULL),
(157, 00027810, 415488353, 353, '1002005847079', 'UMESHKUMAR NARAYAN TRIVEDI', 01, 'Y', 015, 10, '', '', '', '', '', '', '34 RANJEET TOWERS ', '508 SHANIWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 0, '', '', '9422022021', '', 610246, 610260, 847079, '2023-08-04', 24, 0, '', '3', '', '', NULL),
(158, 00027812, 415488353, 353, '1002016002614', 'YARANA POULTRY SERVICE PROP.BASHIR USMAN KARB', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BASHIR USMAN KARBHARI', '', '241 3 B PATAN COLONY SHANIWAR PETH', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822342037', '', 621572, 621631, 002614, '2023-08-04', 24, 0, '', '5', '', '', NULL),
(159, 00027813, 415488501, 501, '1004005008298', 'VIJAY SUNITA LOHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR ST STAND   KHADAKPETH  AT PO MASUR', 'TAL KARAD', '', '', '', 'MASUR', '', '', '', 415106, '', '', '9657079470', '', 150586, 150600, 008298, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(160, 00027814, 415488501, 501, '1004005006104', 'MADHUMATI SHARAD PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR SHIVAJI VIDYALAY', 'MASUR', 'TAL KARAD', '', '', 'MASUR', '', '', '', 0, '', '', '', '', 150601, 150615, 006104, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(161, 00027815, 415488501, 501, '1004005012485', 'NIRMALA LAXMAN DETAKE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P PATAN PANDHARPUR ROAD ', 'AKASH DUDH DAIRY JAVAL MALWADI MASUR ', 'TAL KARAD DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '7083707231', '', 150616, 150630, 012485, '2023-08-04', 24, 0, '', '3', '', '', NULL),
(162, 00027816, 415488502, 502, '1005005010930', 'PRAJAKTA AMOL KODGULE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P   UMBRAJ ', 'CHAFAL ROAD MADHUBAN ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '9850466177', '', 269122, 269151, 010930, '2023-08-04', 24, 0, '', '1', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(163, 00027817, 415488354, 354, '1006005158737', 'VIDYA SUNIL LOHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KOPARDE HAVELI', 'VADOLI ROAD ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '9767757060', '', 196427, 196441, 158737, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(164, 00027818, 415488354, 354, '1006016000101', 'CHAVAN - ELECTRICALS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'CHAVAN - ELECTRICALS', 'CHAVAN - ELECTRICALS', 'AT PO KOPARDE HAVELI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9881813215', '', 193441, 193500, 000101, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(165, 00027819, 415488356, 356, '1011005005553', 'SACHIN MARUTI MAHAJAN(PAWAR)', 01, 'Y', 015, 10, '', 'SUJATA SACHIN PAWAR', '', '', '', '', 'MANGALMURTI GEN STORES ', 'MAIN ROAD MALKAPUR ', 'M 9860497366 DOB 8 11 81', '', '', 'KARAD', '', '', '', 415539, '', '', '9860497366', '', 447632, 447646, 005553, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(166, 00027820, 415488356, 356, '1011005005757', 'SUNITA CHANDRAKANT LUBAL', 01, 'Y', 015, 10, '', 'CHNDRAKANT PANDURANG LUBAL', '', '', '', '', 'AYODHANAGAR AGASHIVNAGAR', 'MALKAPUR  KARAD', '', '', '', 'KARAD', '', '', '', 415539, '', '', '', '', 447647, 447661, 005757, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(167, 00027821, 415488509, 509, '1020005050043', 'DAWAL DASTAGIR SHAIKH', 01, 'Y', 015, 10, '', 'HASINA DAWAL SHAIKH', 'SURAJ DAWAL SHAIKH', '', '', '', 'AT   JAKHINWADI', 'POST   NANDALAPUR', 'TAL   KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9421439430', '', 057501, 057515, 050043, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(168, 00027822, 415488509, 509, '1020005048433', 'AKKATAI PITAMBAR KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  POST   KALE', 'NEAR DESAI GALLI  KALE', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415104, '', '02164-', '9421003982', '', 057516, 057530, 048433, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(169, 00027823, 415488201, 201, '1032016000607', 'LUCKY TRADERS PROP-PISE SACHIDANAND DADASAHEB', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PISE SACHIDANAND DADASAHEB', '', 'UNITY APPARTMENT 1564 B1 1 KHEND CHIPLUN', 'DIST RATNAGIRI', '', '', '', 'CHIPLUN', '', '', '', 415605, '02355-26', '02355-', '9422438083', '', 188056, 188115, 000607, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(170, 00027824, 415488359, 359, '1037005005613', 'RUKMINI MOHAN MOTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  GOLESHWAR ', 'DHANGAR WASTI  BIROBA MANDIR PARISAR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9623811962', '', 137672, 137686, 005613, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(171, 00027825, 415488359, 359, '1037005007408', 'AASMA HUSEN RANJANGI', 01, 'Y', 015, 10, '', '', '', '', '', '', '341 A 2 3  KHARADE COLONY', 'SHANTINAGAR  SHANIWAR PETH KARAD', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8600431278', '', 137687, 137701, 007408, '2023-08-04', 24, 0, '', '1', '', '', NULL),
(172, 00027826, 415488359, 359, '1037005002288', 'PRATAPRAO ANANTRAO DHUMAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST WARUJI TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822042581', '', 137702, 137731, 002288, '2023-08-04', 24, 0, '', '2', '', '', NULL),
(173, 00027912, 415488358, 358, '1026005006408', 'GANESH BAPUSAHEB JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P GOVARE  ', 'NEAR HANUMAN TEMPAL  ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8698177675', '', 075542, 075556, 006408, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(174, 00027913, 415488358, 358, '1026005000211', 'BALKRISHNA DADU PATIL', 01, 'Y', 030, 10, '', 'PATIL DURGADEVI BALKRISHNA', '', '', '', '', '168 5  BUDHWAR PETH', 'KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9764764000', '', 075557, 075586, 000211, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(175, 00027908, 415488501, 501, '1004005006368', 'ANITA PRAKASH JADHAV', 01, 'Y', 015, 10, '', 'JADHAV PRAKASH DINKAR', '', '', '', '', 'D 17  4 TH FLOOR   GURUPRASAD BLDG', 'RAJYASARTHI GARDEN   MULUND MUMBAI', 'MUMBAI', '', '', 'MUMBAI', '', '', '', 400081, '022-', '022-', '8591649234', '', 150631, 150645, 006368, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(176, 00027910, 415488502, 502, '1005005300153', 'DHANASHRI DIPAK JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   UMBRAJ', 'NEAR AMBABAI TEMPLE  UMBRAJ', 'TAL   KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7276314010', '', 269152, 269166, 300153, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(177, 00027911, 415488502, 502, '1005005300068', 'VISHAL CHANDRAHAS SHEJWAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST UMBRAJ TAL KARAD', 'DIST SATARA', '9823552524', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9823552524', '', 269167, 269181, 300068, '2023-08-05', 24, 0, '', '3', '', '', NULL),
(178, 00027909, 415488502, 502, '1005016000033', 'MS.GHUTE PRALHAD GANPATI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRALHAD GANAPATI GHUTE', 'SUNIL RAGHUNATH PANSARE', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '', '', 272011, 272070, 000033, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(179, 00027914, 415488352, 352, '1001005682810', 'JAYESH BALASO JADHAV', 01, 'Y', 030, 10, '', 'MINAKSHI JAYESH JADHAV', '', '', '', '', 'A P GOLESHWAR ', 'NEW WATER TANK ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8605767568', '', 589668, 589697, 682810, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(180, 00027916, 415488352, 352, '1001005023542', 'SUHAS BAJIRAO SAWANT', 01, 'Y', 030, 10, '', '', '', '', '', '', '300 SHUKARWAR PETH KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '46075', '', '', '', 589713, 589742, 023542, '2023-08-05', 24, 0, '', '3', '', '', NULL),
(181, 00027917, 415488352, 352, '1001005051223', 'SANJEEV NAGESH KHADILKAR', 01, 'Y', 030, 10, '', 'MADHURI SANJIV KHADILKAR', '', '', '', '', '229 A SANJEEVANT APART', 'SHUKARWAR PETH KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822093267', '', 589743, 589772, 051223, '2023-08-05', 24, 0, '', '4', '', '', NULL),
(182, 00027918, 415488352, 352, '1001005059742', 'SANJAY ANANDRAO KAMBLE', 01, 'Y', 030, 10, '', '', '', '', '', '', '889  KRISHNA APARTMENT', 'BEHIND JAIN TEMPLE', 'DHARMAPURI PETH WAI SATARA', '', '', 'SATARA', '', '', '', 412803, '', '02162-', '8999216849', '', 589773, 589802, 059742, '2023-08-05', 24, 0, '', '5', '', '', NULL),
(183, 00027919, 415488352, 352, '1001005059742', 'SANJAY ANANDRAO KAMBLE', 01, 'Y', 030, 10, '', '', '', '', '', '', '889  KRISHNA APARTMENT', 'BEHIND JAIN TEMPLE', 'DHARMAPURI PETH WAI SATARA', '', '', 'SATARA', '', '', '', 412803, '', '02162-', '8999216849', '', 589803, 589832, 059742, '2023-08-05', 24, 0, '', '6', '', '', NULL),
(184, 00027921, 415488352, 352, '1001005682955', 'VARSHA MAHENDRA SABADE', 01, 'Y', 030, 10, '', '', '', '', '', '', '271 YADOGOPAL PETH', 'SATARA', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415001, '', '02162-', '9158879336', '', 589893, 589922, 682955, '2023-08-05', 24, 0, '', '8', '', '', NULL),
(185, 00027915, 415488352, 352, '1001005016399', 'MAKSUD AJIJ PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', '184 SHANIWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '8408888160', '', 589698, 589712, 016399, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(186, 00027922, 415488352, 352, '1001005683178', 'KALPANA PRAMOD JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  RAHIMATPUR', 'ROKADESHWAR GALLI', 'TAL  KOREGAON DIST  SATARA ', '', '', 'RAHIMATPUR', '', '', '', 415511, '', '02163-', '9960309048', '', 589923, 589952, 683178, '2023-08-05', 24, 0, '', '9', '', '', NULL),
(187, 00027920, 415488352, 352, '1001005058492', 'RANJIT KHASHABA JADHAV', 01, 'Y', 060, 10, '', 'BHARATI RANJEET JADHAV', '', '', '', '', 'OLYMPICA NIWAS ', 'KARAD TASGAON ROAD GOLESHWAR ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822458819', '', 589833, 589892, 058492, '2023-08-05', 24, 0, '', '7', '', '', NULL),
(188, 00027925, 415488353, 353, '1002106005178', 'SHRI DHANLAXMI NAGARI SAHAKARI PATSANSTHA MAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHRIDHANLAXMI NAG SAH PAT MAR', '', '482 MORYA AARCADE', 'NEAR POPATBHAI PUMP', 'SHANIWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '02164226', '', '9158884625', '', 613640, 613699, 005178, '2023-08-05', 24, 0, '', '3', '', '', NULL),
(189, 00027926, 415488353, 353, '1002106005086', 'K P DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHAH MUKESH B.', '', 'MI NO 301  FIRST FLOOR   ROOM NO 4  ', 'NEW MI NO 665  PARIWARE HOUSE   A P  OGA', 'TAL  KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164271', '02164223', '9423005828', '', 613700, 613759, 005086, '2023-08-05', 24, 0, '', '4', '', '', NULL),
(190, 00027927, 415488353, 353, '1002106005086', 'K P DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHAH MUKESH B.', '', 'MI NO 301  FIRST FLOOR   ROOM NO 4  ', 'NEW MI NO 665  PARIWARE HOUSE   A P  OGA', 'TAL  KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164271', '02164223', '9423005828', '', 613760, 613819, 005086, '2023-08-05', 24, 0, '', '5', '', '', NULL),
(191, 00027923, 415488353, 353, '1002005032497', 'BASU SOMALU RATHOD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'ANUSAYA  78 WAKHAN ROAD', 'RUKMININAGAR KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822117401', '', 610291, 610305, 032497, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(192, 00027924, 415488353, 353, '1002005852733', 'RAJENDRA BHIMRAO GAIKWAD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P VASANTGAD', 'PASHCIM SUPANE', 'TAL  KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '7378962741', '', 610306, 610320, 852733, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(193, 00027928, 415488353, 353, '1002106005086', 'K P DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHAH MUKESH B.', '', 'MI NO 301  FIRST FLOOR   ROOM NO 4  ', 'NEW MI NO 665  PARIWARE HOUSE   A P  OGA', 'TAL  KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164271', '02164223', '9423005828', '', 613820, 613879, 005086, '2023-08-05', 24, 0, '', '6', '', '', NULL),
(194, 00027929, 415488353, 353, '1002103005243', 'VINOD SHIVAJI PATIL', 01, 'Y', 060, 13, '', 'SHIVAJI SHANKAR PATIL', '', '', '', '', 'A P WATHAR  TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922812733', '', 613880, 613939, 005243, '2023-08-05', 24, 0, '', '7', '', '', NULL),
(195, 00027930, 415488353, 353, '1002016003027', 'SHREE JAGGERY PRODUCTION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'A P KHODASHI', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '7798727173', '', 621632, 621661, 003027, '2023-08-05', 24, 0, '', '8', '', '', NULL),
(196, 00027939, 415488359, 359, '1037005007418', 'SAIFANSAB HUSSAINSAB JATKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'BARGE VASTI ', 'SHIVAJI STEDIUM ROAD  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9028746005', '', 137732, 137746, 007418, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(197, 00027940, 415488359, 359, '1037005007417', 'RAFIK RAJASAHAB JATGAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHANIWAR PETH ', 'SURYAWANSHI MALA KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9309884287', '', 137747, 137761, 007417, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(198, 00027941, 415488359, 359, '1037005007342', 'BARMU BASAPPA KALLUR', 01, 'Y', 015, 10, '', 'JAYASHREE BHARAMANNA KALLUR', '', '', '', '', 'ANANDAVAN COLONY SHANIWAR PETH ', 'BAIL BAZAR  ROAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9970987609', '', 137762, 137776, 007342, '2023-08-05', 24, 0, '', '3', '', '', NULL),
(199, 00027937, 415488357, 357, '1024103000066', 'MEGA AUTOBAHN PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT NAMRATA AKASH SA', '', '655  GAJANAN HOUSING SOCIETY', 'SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9545298999', '', 180856, 180915, 000066, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(200, 00027938, 415488357, 357, '1024103000066', 'MEGA AUTOBAHN PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT NAMRATA AKASH SA', '', '655  GAJANAN HOUSING SOCIETY', 'SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9545298999', '', 180916, 180975, 000066, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(201, 00027935, 415488356, 356, '1011005036996', 'ARCHANA BAJARANG TADAKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KALAWADE', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8379817026', '', 447662, 447676, 036996, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(202, 00027936, 415488356, 356, '1011016000550', 'DNYANDEEP CO OP CREDIT SOCIETY LIMITED', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'YASHWANT MUGATRAO PAWAR', 'RUBINA  JAVED SAYYAD', 'PRISTINE PARK   1 ST FLOOR GALA NO102  1', 'NEAR RELIANCE PETROL PUMP  ASTA NAKA   I', 'TAL  WALWA   DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '02342-', '02342-', '9503100273', '', 448486, 448545, 000550, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(203, 00027934, 415488355, 355, '1007005001214', 'DNYANDEV VITTHAL MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'K B L   KARAD', 'TALKARAD', 'DISTSATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9604811216', '', 123346, 123360, 001214, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(204, 00027932, 415488354, 354, '1006005013864', 'BADRINATH LALASO THORAT', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST  BANAWADI', 'BANAWADI COLLEGE ROAD GURAV COLONY', 'TAL KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '99226159', '', '9822441445', '', 196442, 196471, 013864, '2023-08-05', 24, 0, '', '2', '', '', NULL),
(205, 00027933, 415488354, 354, '1006016000842', 'J P CONSTRUCTIONS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'REKHA KUMARI', '', '45 A P  SAIDAPUR', 'OPP JIVHALA DHABA ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9637876444', '', 193561, 193590, 000842, '2023-08-05', 24, 0, '', '3', '', '', NULL),
(206, 00027931, 415488354, 354, '1006016000234', 'SUNIL PRINTING PRESS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  OGALEWADI ', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '9325215611', '', 193501, 193560, 000234, '2023-08-05', 24, 0, '', '1', '', '', NULL),
(207, 00028009, 415488352, 352, '1001005063778', 'MILIND BALKRISHANA DHAWALIKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '112 113 VAIBHAV RESIDANCI', 'PAVSKAR GALLI  ', 'SOMWAR PETH KARAD', '', '', 'KARAD-1', '', '', '', 415110, '', '02164-', '9422093197', '', 589953, 589982, 063778, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(208, 00028010, 415488352, 352, '1001005682969', 'MEENA RAJENDRA KODAK', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SAROJ BANGALA NO 20', 'SHAHUNAGAR GODOLI', 'SATARA', '', '', 'SATARA', '', '', '', 415002, '', '', '9422065350', '', 589983, 590012, 682969, '2023-08-07', 24, 0, '', '3', '', '', NULL),
(209, 00028011, 415488352, 352, '1001005057769', 'SANTOSH NAMDEO WAIDANDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST SASURVE', 'TAL KOREGAON DIST SATARA', '', '', '', 'KOREGOAN', '', '', '', 415501, '02163-', '02163-', '9960031999', '', 590013, 590042, 057769, '2023-08-07', 24, 0, '', '4', '', '', NULL),
(210, 00028012, 415488352, 352, '1001005685121', 'BAGWAN IMRAN MAHAMAD', 01, 'Y', 015, 10, '', '', '', '', '', '', '372 RAVIWAR PETH KARAD ', 'TAL KARAD AWDPB 8958 R', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9850017672', '', 590043, 590057, 685121, '2023-08-07', 24, 0, '', '5', '', '', NULL),
(211, 00028008, 415488352, 352, '1001102000599', 'M/S AARYA INFRASTRUCTURES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'OSWAL SANJAY BABULAL', '', '12 SAHAKAR BHAVAN SHIVAJI', 'NAGAR KARAD   AASFA0897R', '9326999099 AUTHO ANY TWO', '', '', 'KARAD', '', '', '', 415110, '', '', '9765575555', '', 569986, 570045, 000599, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(212, 00028013, 415488353, 353, '1002005009322', 'SMITA DATTATRAY UMRANI', 01, 'Y', 030, 10, '', 'UMARANI AMRUT DATTATRAYA', '', '', '', '', '305 SOMWARPETH KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9423360691', '', 610321, 610350, 009322, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(213, 00028014, 415488501, 501, '1004005003538', 'RAMCHANDRA BHIKOBA DHARANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KIVAL  MASUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '7385676028', '', 150646, 150660, 003538, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(214, 00028015, 415488501, 501, '1004016000157', 'SANJAY PETROLEUM', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANJAY NATHA PAWAR', '', 'S NO 1356 2', 'KARAD MASUR ROAD', 'A P MASUR TAL   KARAD IST   SATARA', '', '', 'KARAD', '', '', '', 0, '02164249', '02164249', '9850045650', '', 150032, 150091, 000157, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(215, 00028016, 415488502, 502, '1005005005511', 'SUNITA RAVINDRA TODKAR', 01, 'Y', 015, 10, '', 'TODKAR SUNITA RAVINDRA', 'GAJET AUG TEO THOU FIVE', '', '', '', 'UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '', '', 269182, 269196, 005511, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(216, 00028017, 415488354, 354, '1006005156155', 'SHREYAS RAJENDRA SURYAVANSHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SANJEEVANI ENGG COLLEGE ', 'CAMPUS B  24 SAHAJANAND NAGAR ', 'SHINGANAPUR KOPARGAON AHMADNAGR ', '', '', 'AHMEDNAGAR', '', '', '', 423603, '', '', '7028661383', '', 196472, 196486, 156155, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(217, 00028018, 415488355, 355, '1007005033567', 'SOURABH SUNIL KATWATE', 01, 'Y', 015, 10, '', '', '', '', '', '', '188 B RAVIWAR PETH', 'BHOI GALLI  AZAD CHOUK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7028486292', '', 123361, 123375, 033567, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(218, 00028019, 415488355, 355, '1007016030388', 'RUPALI PHOTO STUDIO AND MATERIAL SHOPY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '133  SHANIWAR PETH', 'KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7378600374', '', 124081, 124095, 030388, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(219, 00028020, 415488355, 355, '1007016030372', 'VIDYA MOHAN POOJA HALL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VIDYA MOHAN POOJA HALL', '', '350  A ', 'KRUSHANABAI GHAT  KARAD', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9420493506', '', 124096, 124155, 030372, '2023-08-07', 24, 0, '', '3', '', '', NULL),
(220, 00028021, 415488356, 356, '1011005036651', 'GANESH MAHAVIR SHINDE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'KHANDOBANAGAR', 'MALKAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9860851146', '', 447677, 447736, 036651, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(221, 00028022, 415488509, 509, '1020005048660', 'JAYWANT ADHIKRAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P NANDGAON TAL KARAD', 'DIST SATARA ', '', '', '', 'KARAD', '', '', '', 415110, '51119', '', '9881423184', '', 057531, 057560, 048660, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(222, 00028007, 415488357, 357, '1024005041539', 'RAFIYA RASHID SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 24 10  NEAR SHRI HOSPITAL ASARA', 'MANGALWAR PETH  KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9420602792', '', 184804, 184818, 041539, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(223, 00028006, 415488358, 358, '1026005001195', 'DATTATRAY RAMCHANDRA GAJARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '115 SHUKRAWAR PETH', 'SAT SHAHID WATER TANK', 'SERVICE K M C ', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 075587, 075601, 001195, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(224, 00028025, 415488352, 352, '1001016000788', 'KARAD N.P.S ADARNIYA P.D. PATIL SAH PATH MARY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'C O KARAD NAGARPALIKA KARYALAY ', 'BUDHAWAR PETH ', 'KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 568516, 568575, 000788, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(225, 00028026, 415488352, 352, '1001016000788', 'KARAD N.P.S ADARNIYA P.D. PATIL SAH PATH MARY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'C O KARAD NAGARPALIKA KARYALAY ', 'BUDHAWAR PETH ', 'KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 568576, 568635, 000788, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(226, 00028027, 415488352, 352, '1001016000788', 'KARAD N.P.S ADARNIYA P.D. PATIL SAH PATH MARY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'C O KARAD NAGARPALIKA KARYALAY ', 'BUDHAWAR PETH ', 'KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 568636, 568695, 000788, '2023-08-07', 24, 0, '', '3', '', '', NULL),
(227, 00028028, 415488352, 352, '1001016000788', 'KARAD N.P.S ADARNIYA P.D. PATIL SAH PATH MARY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'C O KARAD NAGARPALIKA KARYALAY ', 'BUDHAWAR PETH ', 'KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 568696, 568755, 000788, '2023-08-07', 24, 0, '', '4', '', '', NULL),
(228, 00028030, 415488352, 352, '1001016006628', 'LIONS CLUB OF KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'LIONS CLUB OF KARAD', '', 'R K LAHOTI LIONS EYE HOSPITAL', '434  SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822431384', '', 568756, 568815, 006628, '2023-08-07', 24, 0, '', '6', '', '', NULL),
(229, 00028031, 415488352, 352, '1001016006669', 'LIONS CLUB OF KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'LIONS CLUB OF KARAD', '', 'R K LAHOTI LIONS EYE HOSPITAL', '434  SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822431384', '', 568816, 568875, 006669, '2023-08-07', 24, 0, '', '7', '', '', NULL),
(230, 00028029, 415488352, 352, '1001005011064', 'KARAD N.P.S ADARNIYA P.D. PATIL SAH PATH MARY', 01, 'Y', 030, 10, '', '', '', 'Authorised Signatory', '', '', 'C O KARAD NAGARPALIKA KARYALAY ', 'BUDHAWAR PETH ', 'KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 590058, 590087, 011064, '2023-08-07', 24, 0, '', '5', '', '', NULL),
(231, 00028032, 415488514, 514, '1073005000026', 'GANESH DATTATRYA GADAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9665942846', '', 000001, 000015, 000026, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(232, 00028033, 415488514, 514, '1073016000001', 'KRUSHIBHUSHAN AGRO AGENCY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DATTATRAY DADASAHEB MAGAR', '', 'AT PO   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9881864830', '', 000001, 000015, 000001, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(233, 00028034, 415488514, 514, '1073016000002', 'THE KARAD MERCHANT SAHKARI CREDIT SANSTHA LIM', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SHAHAJI BAPU GAIWAD', 'HEMA ANIL CHAVAN', '7 8 SOMWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '9881908429', '', 000001, 000015, 000002, '2023-08-07', 24, 0, '', '3', '', '', NULL),
(234, 00028035, 415488514, 514, '1073016000003', 'SHRI SOMESHWAR GINJAR COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AKSHAY DIPAK SUDAKE', '', 'A P  PUSESAWALI', 'NEAR GRAMPANCHAYAT', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '09552770', '02162-', '09552770085', '', 000001, 000015, 000003, '2023-08-07', 24, 0, '', '4', '', '', NULL),
(235, 00028036, 415488514, 514, '1073016000004', 'SHRI SWAMI MEDICO', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AVINASH KISAN KASHID', '', 'AT PO   PUSESAWALI', 'KARAD ROAD', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9665357807', '', 000001, 000015, 000004, '2023-08-07', 24, 0, '', '5', '', '', NULL),
(236, 00028037, 415488514, 514, '1073016000005', 'RAJ JANERAL STOERS AND ZEROX CENTER', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'AT PO   PUSESAWALI', 'KARAD ROAD', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9561382849', '', 000001, 000015, 000005, '2023-08-07', 24, 0, '', '6', '', '', NULL),
(237, 00028117, 415488515, 515, '1071005000022', 'PRAKASH BALKRUSHNA SAGAVKAR', 01, 'Y', 015, 10, '', 'JYOTI TUSHAR MANE', '', '', '', '', 'A P   KUMBHARGAON ', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9623046117', '', 000001, 000015, 000022, '2023-08-07', 24, 0, '', '1', '', '', NULL),
(238, 00028118, 415488515, 515, '1071005000022', 'PRAKASH BALKRUSHNA SAGAVKAR', 01, 'Y', 015, 10, '', 'JYOTI TUSHAR MANE', '', '', '', '', 'A P   KUMBHARGAON ', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9623046117', '', 000016, 000030, 000022, '2023-08-07', 24, 0, '', '2', '', '', NULL),
(239, 00028131, 415488502, 502, '1005005001158', 'KAMAL BHAGAVANRAO CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  PARLE TAL KARAD', 'PARLE', 'PARLE', '', '', 'KARAD', '', '', '', 415124, '', '', '9552541244', '', 269197, 269211, 001158, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(240, 00028132, 415488502, 502, '1005005012335', 'DHANAJI NANASAHEB CHAVAN', 01, 'Y', 030, 10, '', 'SAVITA DHANAJI CHAVAN', '', '', '', '', 'A P PERLE  TAL KARAD', 'DIST SATARA', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9822338959', '', 269212, 269241, 012335, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(241, 00028134, 415488502, 502, '1005005014258', 'SAGAR BHIMRAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P KHODASHI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9921572257', '', 269242, 269271, 014258, '2023-08-08', 24, 0, '', '4', '', '', NULL),
(242, 00028133, 415488502, 502, '1005016006140', 'SAIRAJ KIRANA AND BAKERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DATTATARAY DYANOBA KENJALE', '', 'A P UMBRAJ ', 'OPP MARUTI TEMPLE ', 'COLLAGE ROAD KARAD', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '8805024402', '', 272071, 272130, 006140, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(243, 00028135, 415488352, 352, '1001005054770', 'SANJAY DINKAR GAIKWAD', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO   RETHARE BUDRUK', 'MAHADEV WARD GRAMPANCHAYAT OFFIE JAVAL', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415108, '', '', '8766762205', '', 590088, 590117, 054770, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(244, 00028136, 415488352, 352, '1001005058125', 'SUJIT SHANTARAM CHAVAN', 01, 'Y', 030, 10, '', 'H.O', '', '', '', '', '76 BUDHWAR PETH', 'MAHATMA PHULE NAGAR KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9923117781', '', 590118, 590147, 058125, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(245, 00028137, 415488352, 352, '1001005059073', 'PRAKASH RAJARAM POTDAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'FLAT NO 405 WING B SAMRUDDHI PALACE ', 'LONI STATION KADAM WASTI LONI KALBHOR PU', 'DIST PUNE', '', '', 'PUNE', '', '', '', 412201, '', '', '9922753011', '', 590148, 590177, 059073, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(246, 00028138, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 613940, 613999, 005099, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(247, 00028139, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614000, 614059, 005099, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(248, 00028140, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614060, 614119, 005099, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(249, 00028141, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614120, 614179, 005099, '2023-08-08', 24, 0, '', '4', '', '', NULL),
(250, 00028142, 415488353, 353, '1002106005099', 'M/S KHOJA & SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S KHOJA  & SONS', '', 'GENERAL MERCHANT ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422039508', '', 614180, 614239, 005099, '2023-08-08', 24, 0, '', '5', '', '', NULL),
(251, 00028143, 415488353, 353, '1002106005263', 'THE KARAD URBAN MADHYAWARTI SAHAKARI GRAHAK S', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'THE KARAD URBAN MADHY.SAHA.GHR', '', '130 BUDHWAR PETH KARAD', 'OPP SHIVAJI CLOTH MARKET KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '7774082489', '', 614240, 614299, 005263, '2023-08-08', 24, 0, '', '6', '', '', NULL),
(252, 00028144, 415488353, 353, '1002106005263', 'THE KARAD URBAN MADHYAWARTI SAHAKARI GRAHAK S', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'THE KARAD URBAN MADHY.SAHA.GHR', '', '130 BUDHWAR PETH KARAD', 'OPP SHIVAJI CLOTH MARKET KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '7774082489', '', 614300, 614359, 005263, '2023-08-08', 24, 0, '', '7', '', '', NULL),
(253, 00028145, 415488353, 353, '1002106005263', 'THE KARAD URBAN MADHYAWARTI SAHAKARI GRAHAK S', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'THE KARAD URBAN MADHY.SAHA.GHR', '', '130 BUDHWAR PETH KARAD', 'OPP SHIVAJI CLOTH MARKET KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '7774082489', '', 614360, 614419, 005263, '2023-08-08', 24, 0, '', '8', '', '', NULL),
(254, 00028146, 415488353, 353, '1002106005263', 'THE KARAD URBAN MADHYAWARTI SAHAKARI GRAHAK S', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'THE KARAD URBAN MADHY.SAHA.GHR', '', '130 BUDHWAR PETH KARAD', 'OPP SHIVAJI CLOTH MARKET KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '7774082489', '', 614420, 614479, 005263, '2023-08-08', 24, 0, '', '9', '', '', NULL),
(255, 00028147, 415488353, 353, '1002106005263', 'THE KARAD URBAN MADHYAWARTI SAHAKARI GRAHAK S', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'THE KARAD URBAN MADHY.SAHA.GHR', '', '130 BUDHWAR PETH KARAD', 'OPP SHIVAJI CLOTH MARKET KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '7774082489', '', 614480, 614539, 005263, '2023-08-08', 24, 0, '', '10', '', '', NULL),
(256, 00028148, 415488501, 501, '1004016000337', 'BALAJI MARBAL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ALKA SHRIRANG INGAVALE', '', 'SAKET BUILDING  B 205', 'KOKANI PADA ROAD  KURAR VILLAGE', 'MALAD EAST   MUMBAI', '', '', 'MUMBAI', '', '', '', 400097, '', '', '9028316718', '', 150092, 150151, 000337, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(257, 00028149, 415488354, 354, '1006016000719', 'ICE FROST FROZEN AGRO PRODUCTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ICE FROST FROZEN AGRO PRODUCTS', 'ICE FROST FROZEN', 'MILKAT NO 800 A  GAT NO 160', 'A P  MUNDHE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7218893758', '', 193591, 193650, 000719, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(258, 00028150, 415488354, 354, '1006005012229', 'DATTU BABU SHINDE', 01, 'Y', 015, 10, '', 'CHAMPABAI DATTATRAY SHINDE', '', '', '', '', 'A P SAIDAPUR ', 'KARMAVIR COLONY ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '8999157610', '', 196487, 196501, 012229, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(259, 00028151, 415488354, 354, '1006005005450', 'ADHIKRAO VITHOBA CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', '8 B NEAR HOLLY FAM SCHOOL', 'VIDYANGAR', '', '', '', 'KARAD', '', '', '', 415124, '', '', '9730178008', '', 196502, 196516, 005450, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(260, 00028152, 415488355, 355, '1007016030328', 'ACCOUNTANCY COCHING CLASSES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '350 1 NEAR KRISHNA BAI GHAT  ', 'SOMWAR PETH KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '08999875', '02164-', '9420493506', '', 124156, 124215, 030328, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(261, 00028154, 415488356, 356, '1011005037829', 'VISHWANATH GOPAL BAGAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'LAXMI NAGAR  MALKAPUR KARAD ', 'TAL   KARAD ', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9404901607', '', 447767, 447781, 037829, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(262, 00028153, 415488356, 356, '1011005002511', 'VASANT BABURAO SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AYODHYANAGARI ', 'AGASHIVNAGAR', 'MALKAPUR', '', '', 'KARAD', '', '', '', 415110, '02164243', '', '9999999999', '', 447737, 447766, 002511, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(263, 00028155, 415488356, 356, '1011005037800', 'VINAYAK MUKUNDRAJ BADAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  BAHE', '259 A BADAVE GALLI', 'TAL  WALWA DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '02342-', '02342-', '9960434037', '', 447782, 447796, 037800, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(264, 00028156, 415488505, 505, '1012016000258', 'VEDANT CONSTRUCTION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   MARALI KADAM ALI', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9766867161', '', 100471, 100530, 000258, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(265, 00028157, 415488509, 509, '1020016000181', 'PATHAN FABRICATORS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  WATHAR ', 'RETHARE ROAD  NEAR GANESH ELECTRICALS ', 'TAL  KARAD  DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '7558270220', '', 058608, 058622, 000181, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(266, 00028161, 415488357, 357, '1024005040546', 'P00JA SUHAS ANGAPURKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'OMKAR APPARTMENT 252 ', 'MANGALWAR PETH  KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '9423263950', '', 184879, 184908, 040546, '2023-08-08', 24, 0, '', '4', '', '', NULL),
(267, 00028158, 415488357, 357, '1024016000514', 'MAHILA GRUH UDYOG', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '207   MANGALWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '', '', 186046, 186105, 000514, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(268, 00028159, 415488357, 357, '1024106000080', 'S M PATTERN WORKS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHAUKAT MAHAMAD PATEL', '', '54 KARAD INDUSTRIAL', 'ESTATE OGALEWADI ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '', '9881402544', '', 180976, 181035, 000080, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(269, 00028160, 415488357, 357, '1024005041386', 'ASHA LALASO JAGTAP', 01, 'Y', 060, 10, '', '', '', '', '', '', 'SERVE NO 20 3  PLOT NO 8  ', 'NEAR WAKHAN ROAD', 'PRASHWANATH NAGAR KARAD', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9423265021', '', 184819, 184878, 041386, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(270, 00028130, 415488358, 358, '1026005251672', 'PRAMOD ATMARAM KAMBALE', 01, 'Y', 015, 10, '', 'ABHIJIT ANANDA KHAWALE', 'FAIYAJ GANI BARGIR', '', '', '', '9  BUDHAWAR PETH KARAD', 'KMC', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9881799570', '', 075602, 075616, 251672, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(271, 00028162, 415488359, 359, '1037005005064', 'SHRAVANI SHRIKANT JOSHI', 01, 'Y', 030, 10, '', 'SHRIKANT RAGHUNATH JOSHI', '', '', '', '', 'ASHOK RAJ UDAY COLONY', 'GANESH MANDIRA MAGE  KARVE NAKA', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922813543', '', 137777, 137806, 005064, '2023-08-08', 24, 0, '', '1', '', '', NULL),
(272, 00028163, 415488359, 359, '1037005006319', 'KIRAN BANDU NAVADKAR', 01, 'Y', 030, 10, '', 'BANDU YASHVANT NAVADKAR', '', '', '', '', 'PLOT NO 37 B MAHER BANGLA  MIRAJ', 'MAJI SAINIK VASAHAT  MIRAJ', 'TAL MIRAJ DIST SANGLI', '', '', 'MIRAJ', '', '', '', 416410, '', '', '9011646740', '', 137807, 137836, 006319, '2023-08-08', 24, 0, '', '2', '', '', NULL),
(273, 00028164, 415488359, 359, '1037005003294', 'YUVRAJ DATTATRAY CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'YASHWANT NAGAR SAI NAGAR MALKAPUR', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9921943580', '', 137837, 137866, 003294, '2023-08-08', 24, 0, '', '3', '', '', NULL),
(274, 00028249, 415488515, 515, '1071016000004', 'JANVIKAS GRAM BIGAR SHETI SAH PATSANSTHA MARY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7875473013', '', 000001, 000015, 000004, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(275, 00028250, 415488515, 515, '1071016000001', 'KRISHNA KOYANA NAGARI SAH. PAT SANSTHA MARYA.', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'NEAR KRISHANA CANOL', 'VIDYANAGAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164273', '', '9922444857', '', 000016, 000030, 000001, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(276, 00028251, 415488515, 515, '1071016000002', 'APLA BAZAR', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAVALE ', '619  KARAD DHEBEWADI ROAD  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '9503302233', '', 000031, 000045, 000002, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(277, 00028252, 415488515, 515, '1071016000003', 'TRIMURTI PRINTERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'BLOCK NO 519 DHEBEWADI', 'KARAD DHBEWADI ROAD ', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9764885090', '', 000046, 000060, 000003, '2023-08-09', 24, 0, '', '4', '', '', NULL),
(278, 00028253, 415488515, 515, '1071016000004', 'JANVIKAS GRAM BIGAR SHETI SAH PATSANSTHA MARY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7875473013', '', 000061, 000075, 000004, '2023-08-09', 24, 0, '', '5', '', '', NULL),
(279, 00028254, 415488515, 515, '1071016000005', 'RAMESH STEEL FURNITURE AND BHANDI STORES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P TALMAVALE', 'TAIGADEWADI', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '8329498299', '', 000076, 000090, 000005, '2023-08-09', 24, 0, '', '6', '', '', NULL),
(280, 00028224, 415488512, 512, '1052016000124', 'SANTOSH DUDH DAIRY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'JADHAV BALASO POPAT', 'BALASO POPAT JADHAV', 'A P TASAWADE  KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9881887716', '', 060016, 060075, 000124, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(281, 00028225, 415488512, 512, '1052106000011', 'PRAMOD JAGANNATH RAUT', 01, 'Y', 030, 13, '', '', '', '', '', '', 'A P TALBID TAL KARAD', 'DIST SATARA ', 'MOB 9764303095', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9764303095', '', 055936, 055965, 000011, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(282, 00028226, 415488359, 359, '1037005001077', 'VITTAL BAJIRAO GUJALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KARVE TAL KARAD', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822450775', '', 137867, 137881, 001077, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(283, 00028246, 415488505, 505, '1012016000147', 'KOYANA HARDWARES PROP KISHOR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'KISHOR GANPATI KAMBALE', '', 'A P NISAREPHATA', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9881763464', '', 100531, 100590, 000147, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(284, 00028248, 415488505, 505, '1012005014550', 'VIVEK VITTHAL CHAVAN', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P VASANTGAD ', '69 SARVAJANIK ADA', 'TAL   KARAD DIS SATARA', '', '', 'KARAD', '', '', '', 415114, '', '02164-', '9850839573', '', 097926, 097985, 014550, '2023-08-09', 24, 0, '', '4', '', '', NULL),
(285, 00028245, 415488505, 505, '1012005002518', 'SUNIL MAHADEO SHETE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'NEAR GANESH MANDIR', 'MALHARPETH', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '7499276556', '', 097881, 097910, 002518, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(286, 00028247, 415488505, 505, '1012005016011', 'YOGESH RAJARAM SAWANT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   DHARESHWAR  ', 'DIVSHI KHURD', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415207, '02372-', '02372-', '9527418384', '', 097911, 097925, 016011, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(287, 00028243, 415488356, 356, '1011016001013', 'VASANT RAMCHANDRA SHINDE HUF', 01, 'Y', 015, 11, '', '', '', '', '', '', 'MALKAPUR ', 'NEAR GANDHARV HOTEL  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9422404508', '', 448606, 448620, 001013, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(288, 00028244, 415488356, 356, '1011016001014', 'SHRI SHUBHAM ENTERPRISES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'VIKRAMSINH SHAHAJIRAO PATIL', '', 'AJINKYA PLOT NO 89', 'VITTHALDEV HOU SOCIETY', 'MALKAPUR  TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9822022999', '', 448621, 448635, 001014, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(289, 00028242, 415488356, 356, '1011016000884', 'LAXMIKRUPA MULTIPURPURPOSE HALL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VISHAL PANDURANG PAWAR', 'SACHIN PANDURANG PAWAR', '296  KOSHTI GALLI', 'RAVIWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9850224411', '', 448546, 448605, 000884, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(290, 00028241, 415488355, 355, '1007005034631', 'VIKAS BABAN AVAGHADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '99 BUDHAWAR PETH', 'KARAD', 'MB NO 9637006579', '', '', 'KARAD', '', '', '', 415110, '', '', '9922098515', '', 123376, 123390, 034631, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(291, 00028238, 415488354, 354, '1006016000795', '3S SALES AND SERVICES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TEMBHU  SR NO 479 A P', 'NEAR MARATHI SCHOOL  KARAD ', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '7507059789', '', 193651, 193710, 000795, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(292, 00028239, 415488354, 354, '1006005158736', 'RAMRAO SAYAJIRAO YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KADEPUR ', 'TAL   KADEGAON ', 'DIST   SANGLI', '', '', 'SANGLI', '', '', '', 416305, '0233-', '0233-', '9975504897', '', 196517, 196531, 158736, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(293, 00028240, 415488354, 354, '1006005155715', 'RUPALI PRASHANT BHOSALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O SHANKARRAO K  BHOSALE', 'PANDHARI NIWAS  CHAPHAL ROAD', 'CHAREGAON COLONY  UMBRAJ', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9689347796', '', 196532, 196546, 155715, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(294, 00028237, 415488502, 502, '1005005006558', 'SANJAY NATHURAM RAKSHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AP PERLE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '9552924917', '', 269272, 269286, 006558, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(295, 00028236, 415488501, 501, '1004042000002', 'BULDHANA URBN CO-OP CREDIT SOCIETY LIMITED., ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SHIRISH DINKARRAO DESHPANDE', 'MANOHAR VILASRAO DESHMUKH', 'RAVIWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164222', '02164222', '9860831978', '', 150152, 150166, 000002, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(296, 00028233, 415488353, 353, '1002005009315', 'PRADIP VISHNU DESAI', 01, 'Y', 015, 10, '', '', '', '', '', '', '10 Z P COLONY AGASHIVNAGA', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9422600727', '', 610351, 610365, 009315, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(297, 00028234, 415488353, 353, '1002005044263', 'AVADHUT ANANDRAO DUBAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P OGALEWADI   DUBAL MALA', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '7020440074', '', 610366, 610395, 044263, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(298, 00028235, 415488353, 353, '1002005041040', 'SAGAR SURESH DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P KUSUR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '250703', '', '9823746704', '', 610396, 610425, 041040, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(299, 00028231, 415488352, 352, '1001005063725', 'ASIF NASIR ATTAR', 01, 'Y', 015, 10, '', 'ASMA ASIF ATTAR', '', '', '', '', '274 GURUWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '222327', '', '9923118017', '', 590313, 590327, 063725, '2023-08-09', 24, 0, '', '5', '', '', NULL),
(300, 00028230, 415488352, 352, '1001005685043', 'KIRAN MADAN PHULAMBRIKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '208 1 A AUDUMBAR APARTMENT ', 'SOMWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822945089', '', 590298, 590312, 685043, '2023-08-09', 24, 0, '', '4', '', '', NULL),
(301, 00028229, 415488352, 352, '1001005685125', 'TEJKUMAR SHANTINATH BANKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'MADHURA APARTMENT  GULMOHAR COLONY ', 'FLAT NO 2  MAIN ROAD  NEAR SANJEEN HOSPI', 'SANGLI', '', '', 'SANGLI', '', '', '', 416416, '0233-', '0233-', '7507024747', '', 590268, 590297, 685125, '2023-08-09', 24, 0, '', '3', '', '', NULL),
(302, 00028228, 415488352, 352, '1001005685124', 'SUHAS DATTATRAY BHALWANKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'FLAT NO R 11 SHEFALI GARDEN', 'BHIGWAN ROAD  BARAMATI', 'TAL BARAMATI DIST  PUNE', '', '', 'PUNE', '', '', '', 411102, '020-', '020-', '9850058235', '', 590238, 590267, 685124, '2023-08-09', 24, 0, '', '2', '', '', NULL),
(303, 00028227, 415488352, 352, '1001005060433', 'DILIP DATTU KAMBALE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P KAPASHI ', 'TAL SHUHUWADI', 'DIST  KOLHAPUR', '', '', 'KOLHAPUR', '', '', '', 416214, '', '', '9860580032', '', 590178, 590237, 060433, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(304, 00028232, 415488352, 352, '1001005684558', 'OMKAR ANKUSH GAIKWAD', 01, 'Y', 060, 10, '', '', '', '', '', '', 'S NO 305 7  YASHWANT NAGAR', 'BAIL BAJAR ROAD  NEAR GANESH TEMPLE', 'MALKAPUR  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9011201116', '', 590328, 590387, 684558, '2023-08-09', 24, 0, '', '6', '', '', NULL),
(305, 00028222, 415488514, 514, '1073016000001', 'KRUSHIBHUSHAN AGRO AGENCY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DATTATRAY DADASAHEB MAGAR', '', 'AT PO   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9881864830', '', 000016, 000030, 000001, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(306, 00028223, 415488514, 514, '1073005000085', 'KSHITEEJ SANJAY KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  PUSESAWALI', 'TAL  KHATAV  ', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9503127423', '', 000001, 000015, 000085, '2023-08-09', 24, 0, '', '2', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(307, 00028349, 415488514, 514, '1073005000038', 'HARSHAD CHANDRAKANT GAIKWAD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO   DHAUNDEWADI', 'JAKHANGAON', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9595958693', '', 000016, 000030, 000038, '2023-08-09', 24, 0, '', '1', '', '', NULL),
(308, 00028357, 415488352, 352, '1001005684949', 'ANKITA ABHIJEET TIWATANE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'MAIN PETH ', 'SANTOSH ELECTRONICS', 'A P  VADUJ TAL  KHATAV  DIST  SATAR', '', '', 'VADUJ', '', '', '', 415506, '02161-', '02161-', '7057757105', '', 590388, 590417, 684949, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(309, 00028358, 415488352, 352, '1001016006559', 'DHANAJI SUBHASH VELHAL', 01, 'Y', 030, 11, '', '', '', '', '', '', 'A P 89 3 KHANDAGALE  WADA ', 'SHUKRAWAR PETH SATSHAHID CHOWK ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011807446', '', 568876, 568905, 006559, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(310, 00028363, 415488353, 353, '1002005847996', 'SAVITA RAHUL SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  TALBID', 'NEAR RAM MANDIR', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9960370097', '', 610456, 610470, 847996, '2023-08-10', 24, 0, '', '5', '', '', NULL),
(311, 00028364, 415488353, 353, '1002005029637', 'JITENDRA BHAGWANDAS LOHANA HUF', 01, 'Y', 030, 10, '', '', '', '', '', '', '14 KALIDAS MARKET', 'NEAR SANGAM HOTEL', 'A P MALKAPUR  TAL KARAD DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9890534355', '', 610471, 610500, 029637, '2023-08-10', 24, 0, '', '6', '', '', NULL),
(312, 00028362, 415488353, 353, '1002005853250', 'JITENDRA RAMESH PARANJAPE', 01, 'Y', 030, 10, '', '', '', '', '', '', '176  SOMWAR PETH', 'DHANLAXMI APARTMENT  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8149431846', '', 610426, 610455, 853250, '2023-08-10', 24, 0, '', '4', '', '', NULL),
(313, 00028359, 415488353, 353, '1002016002382', 'PANKAJ TEA DEPOT PRO- JIGNESH ASHOK SHAH', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P 233 D SHINIWARPETH', 'OPP SYNDICATE BANK KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '9850312357', '', 621662, 621721, 002382, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(314, 00028360, 415488353, 353, '1002103005235', 'SUNBEAM INFOCOM PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S', '', '203 ANUDA CHAMBERS  NEAR GUJAR HOSPITAL', 'SHANIWAR PETH   KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822301950', '', 614540, 614599, 005235, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(315, 00028361, 415488353, 353, '1002103005235', 'SUNBEAM INFOCOM PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S', '', '203 ANUDA CHAMBERS  NEAR GUJAR HOSPITAL', 'SHANIWAR PETH   KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822301950', '', 614600, 614659, 005235, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(316, 00028351, 415488501, 501, '1004005006379', 'DINESH VISHNU DONGARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST YASHWANTNAGAR E TYPE COLONY ', 'ROOM NO 83 YASHWANTNAGAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD-1', '', '', '', 415110, '', '', '9423360610', '', 150661, 150675, 006379, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(317, 00028352, 415488501, 501, '1004106000073', 'MS OLYMPICA INDANE GAS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S OLYMPICA INDANE GAS', '', 'A P   MALWADI PANDHARPUR ROAD', 'MASUR M NO 90', 'TAL   KARAD   DIST   SATARA', '', '', 'MASUR', '', '', '', 415106, '02164252', '02164252', '9822458819', '', 148141, 148200, 000073, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(318, 00028356, 415488501, 501, '1004005012509', 'ASHOK SHRIRANG NALAWADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P   SHAHAPUR', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '9890653727', '', 150721, 150750, 012509, '2023-08-10', 24, 0, '', '6', '', '', NULL),
(319, 00028353, 415488501, 501, '1004005013428', 'ADHIKRAO NARAYAN POL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST SHAMGAON', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '02164-', '9552131840', '', 150676, 150690, 013428, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(320, 00028354, 415488501, 501, '1004005008025', 'RAJENDRA ANANDRAO SHINDE', 01, 'Y', 015, 10, '', 'SHINDE SARITA RAJENDRA', '', '', '', '', 'AT POST ANTAWADI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '', '9765876966', '', 150691, 150705, 008025, '2023-08-10', 24, 0, '', '4', '', '', NULL),
(321, 00028355, 415488501, 501, '1004005007393', 'LAXMAN ANANDRAO SALUNKHE', 01, 'Y', 015, 10, '', 'KAMAL LAXMAN SALUNKHE', '', '', '', '', 'AT PO KIVAL', 'TAL KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 150706, 150720, 007393, '2023-08-10', 24, 0, '', '5', '', '', NULL),
(322, 00028365, 415488502, 502, '1005016006063', 'SARASWATI MEDICAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SUNITA HANMANT RANAWARE', '', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9422603807', '', 272131, 272190, 006063, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(323, 00028366, 415488502, 502, '1005103000016', 'VILAS VISHAVNATH MANE', 01, 'Y', 060, 13, '', 'SUNANDA VILAS MANE', '', '', '', '', 'AP CHAREGAON', '', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881545377', '', 269866, 269925, 000016, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(324, 00028367, 415488502, 502, '1005102000719', 'RUSHIKESH RAMESH PAWAR', 01, 'Y', 060, 13, '', 'PIONEER MEDICINE SHOPEE', 'RAMESH RAMCHANDRA PAWAR', '', '', '', 'A P CHAREGAON ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9028485872', '', 269926, 269985, 000719, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(325, 00028369, 415488354, 354, '1006005157486', 'SANGRAM SUKHADEV SAKAT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'KRUSHANA CANOL SAIDAPUR  ', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756863779', '', 196607, 196621, 157486, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(326, 00028368, 415488354, 354, '1006005014774', 'HOLY FAMILY CONVENT TRUST', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', 'HEAD MISTRESS HOLY FAMILY', '', 'HOLY FAMILY CONVENT SCHOOL', 'A P VIDYANAGAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164272', '', '7721829743', '', 196547, 196606, 014774, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(327, 00028378, 415488356, 356, '1011005005075', 'MUMTAJ ISMAIL SHAIKH', 01, 'Y', 015, 10, '', 'ANWAR ISMAILE SHAIKH', '', '', '', '', 'LAXMINAGAR MALKAPUR', 'NEAR LAXMI TEMPLE ', 'MALKAPUR KARAD', '', '', 'KARAD', '', '', '', 415539, '243292', '', '9766555710', '', 447872, 447886, 005075, '2023-08-10', 24, 0, '', '9', '', '', NULL),
(328, 00028376, 415488356, 356, '1011106000137', 'PRASAD GARMEEN BIGARSHETI PATSANSTHA,MALKAPUR', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'SANJAY SAMBHAJI MOHITE', '', 'A P MALAKAPUR', 'TAL KARAD DIS SATARA', 'PAN AAABP0423A', '', '', 'KARAD', '', '', '', 415110, '', '', '9850646619', '', 446627, 446656, 000137, '2023-08-10', 24, 0, '', '7', '', '', NULL),
(329, 00028375, 415488356, 356, '1011005037495', 'PRADIP JAYAVANT YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   WING', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415122, '02164-', '02164-', '8888026376', '', 447857, 447871, 037495, '2023-08-10', 24, 0, '', '6', '', '', NULL),
(330, 00028379, 415488356, 356, '1011103000078', 'KIRAN BAJRANG TADAKHE', 01, 'Y', 060, 13, '', '5 STAR INTERNATIONALS', 'BAJARANG SUBHANA TADAKHE', '', '', '', 'A P  KALVADE', 'NEAR LAXMI MANDIR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8380979511', '', 446657, 446716, 000078, '2023-08-10', 24, 0, '', '10', '', '', NULL),
(331, 00028373, 415488356, 356, '1011102000147', 'SANGRAM SUBHASH PAWAR', 01, 'Y', 060, 13, '', 'PRATHAMESH AUTOMOBILES', 'SUBHASH VISHNU PAWAR', '', '', '', 'A P  GONDI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9822837492', '', 446507, 446566, 000147, '2023-08-10', 24, 0, '', '4', '', '', NULL),
(332, 00028374, 415488356, 356, '1011102000147', 'SANGRAM SUBHASH PAWAR', 01, 'Y', 060, 13, '', 'PRATHAMESH AUTOMOBILES', 'SUBHASH VISHNU PAWAR', '', '', '', 'A P  GONDI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9822837492', '', 446567, 446626, 000147, '2023-08-10', 24, 0, '', '5', '', '', NULL),
(333, 00028377, 415488356, 356, '1011016000797', 'SHREE GAJANAN NAGARI SAH PATSANSTHA MARYADIT,', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VASANTRAO RAMCHANDRA SHINDE', 'SAVITA ANANDRAO JADHAV', 'GAJANAN PATHSANSTHA ', 'A P MALKAPUR MAIN ROAD ', 'TAL KARAD ', '', '', 'MALKAPUR', '', '', '', 415539, '-0216442', '02164415', '9604381079', '', 448696, 448755, 000797, '2023-08-10', 24, 0, '', '8', '', '', NULL),
(334, 00028370, 415488356, 356, '1011016000121', 'JYOTIRLING NAGARI SAHA PAT SAN', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'LAXMAN GOPALA DESAI', 'RAVINDRA SHRIRANG JADHAV', 'BR NISARE', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '02164-25', '02372-', '7722008173', '', 448636, 448695, 000121, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(335, 00028371, 415488356, 356, '1011005035548', 'DALARAM HARJIJI PARIHAR', 01, 'Y', 060, 10, '', '', '', '', '', '', 'NEAR RADHA KRUSHNA MANGAL KARYALAYA ', 'DHEBEWADI ROAD ', 'AGASHIVNAGAR  TAL  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '', '', '', '', 447797, 447856, 035548, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(336, 00028372, 415488356, 356, '1011102000145', 'QUALITY LIQUORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'QUALITY LIQUORS', '', 'A P MALKAPUR ', 'M NO 4 293 ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9822179444', '', 446447, 446506, 000145, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(337, 00028380, 415488505, 505, '1012016000302', 'VEDANT MEDICAL AND GENERAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   CHAREGAON', 'PAWAR MALA', 'TAL    KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '7709645534', '', 100591, 100650, 000302, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(338, 00028389, 415488512, 512, '1052005003977', 'ANIKET SUBHASH JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  TASAWADE', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415109, '02164-', '02164-', '7620372311', '', 057586, 057600, 003977, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(339, 00028381, 415488201, 201, '1032005000270', 'PRAKASH BANDU PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'DURGA NIWAS  DATTAWADI', 'NEAR DATTA MANDIR', 'KHERDI  CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415604, '', '', '8888254646', '', 185686, 185700, 000270, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(340, 00028382, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186017, 186076, 000102, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(341, 00028383, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186077, 186136, 000102, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(342, 00028384, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186137, 186196, 000102, '2023-08-10', 24, 0, '', '4', '', '', NULL),
(343, 00028386, 415488359, 359, '1037005003489', 'SANTOSH ANANDA AUNDHAKAR', 01, 'Y', 015, 10, '', 'VIDYA SANTOSH AUDHAKAR', '', '', '', '', 'KALPATRU COLONY THORAT HOSPITAL', 'KAPIL GOLEWSHWAR KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7057388465', '', 137882, 137896, 003489, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(344, 00028387, 415488359, 359, '1037005007385', 'TOUFIK AYUB SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHANIWAR PETH ', 'BEHIND POLICE LINE', 'SHANIWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8459406471', '', 137897, 137911, 007385, '2023-08-10', 24, 0, '', '3', '', '', NULL),
(345, 00028388, 415488359, 359, '1037005007301', 'RUCHIRA NILESH DESHMUKH', 01, 'Y', 015, 10, '', '', '', '', '', '', '104 DURGA DEVI CHOUK', 'A P  NANDGAON ', 'TAL DIST  SATARA', '', '', 'SATARA', '', '', '', 415107, '02162-', '02162-', '7757071264', '', 137912, 137926, 007301, '2023-08-10', 24, 0, '', '4', '', '', NULL),
(346, 00028385, 415488359, 359, '1037016000332', 'PATIL ENTERPRISE', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'INDRAJIT YASHWANT PATIL', '', 'PLOT NO 8  NEAR VISHAL COLONY', 'BAIL BAZAR ROAD', 'MALKAPUR  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '8806466000', '', 136336, 136365, 000332, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(347, 00028423, 415488354, 354, '1006005155810', 'PUSHPALATA RAHUL JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', '312  KRISHNA CANOL', 'VIDYANAGAR  SAIDAPUR', 'KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '8796018262', '', 196622, 196636, 155810, '2023-08-10', 24, 0, '', '1', '', '', NULL),
(348, 00028424, 415488354, 354, '1006016000462', 'S D KADAM', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P PUSESAWALI ', 'TAL KHATAV  DIST SATARA', '', '', '', 'VADUJ', '', '', '', 415512, '02161-', '02161-', '9730689999', '', 193711, 193770, 000462, '2023-08-10', 24, 0, '', '2', '', '', NULL),
(349, 00028485, 415488515, 515, '1071016000006', 'SHREE LAXMI NARAYAN TREDING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'AT POST TAIGADEWADI TALMAVALE', 'MILAKAT NO  168', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7034259999', '', 000091, 000105, 000006, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(350, 00028486, 415488515, 515, '1071016000006', 'SHREE LAXMI NARAYAN TREDING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'AT POST TAIGADEWADI TALMAVALE', 'MILAKAT NO  168', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7034259999', '', 000106, 000120, 000006, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(351, 00028487, 415488515, 515, '1071016000006', 'SHREE LAXMI NARAYAN TREDING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'AT POST TAIGADEWADI TALMAVALE', 'MILAKAT NO  168', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7034259999', '', 000121, 000135, 000006, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(352, 00028522, 415488515, 515, '1071106000001', 'JANVIKAS GRAM BIGAR SHETI SAH PATSANSTHA MARY', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7875473013', '', 000001, 000015, 000001, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(353, 00028523, 415488515, 515, '1071005000002', 'SUBHASH MOHANRAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   GUDHE ', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9765719444', '', 000031, 000045, 000002, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(354, 00028524, 415488515, 515, '1071005000004', 'SANJAY BABURAO NALAWADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  KUTHARE', 'TAL PATAN', 'DIST  PATAN', '', '', 'PATAN', '', '', '', 415112, '', '02372-', '9423360137', '', 000046, 000060, 000004, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(355, 00028525, 415488515, 515, '1071005000007', 'BHUSHAN ASHOK DINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   DINDEWADI', 'POST   GUDHE', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9307648542', '', 000061, 000075, 000007, '2023-08-11', 24, 0, '', '4', '', '', NULL),
(356, 00028526, 415488515, 515, '1071005000009', 'HARIBHAU RAMCHANDRA KOKATE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   SHIBEWADI POST   KUMBHARGAON ', 'NEAR LAXMI MANDIR', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7083760062', '', 000076, 000090, 000009, '2023-08-11', 24, 0, '', '5', '', '', NULL),
(357, 00028527, 415488515, 515, '1071005000020', 'RAJENDRA VIJAY SARAKALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SANJAY NAGAR  ', 'KALE', 'TA   KARAD', '', '', 'SATARA', '', '', '', 415104, '', '02162-', '9823027895', '', 000091, 000105, 000020, '2023-08-11', 24, 0, '', '6', '', '', NULL),
(358, 00028528, 415488515, 515, '1071005000021', 'TANAJI MARUTI MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KUMBHARGAON', 'CHALAKEWADI', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415103, '', '02164-', '9764208304', '', 000106, 000120, 000021, '2023-08-11', 24, 0, '', '7', '', '', NULL),
(359, 00028529, 415488515, 515, '1071005000022', 'PRAKASH BALKRUSHNA SAGAVKAR', 01, 'Y', 015, 10, '', 'JYOTI TUSHAR MANE', '', '', '', '', 'A P   KUMBHARGAON ', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9623046117', '', 000121, 000135, 000022, '2023-08-11', 24, 0, '', '8', '', '', NULL),
(360, 00028530, 415488515, 515, '1071005000023', 'SHIVAJI DHONDIRAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  TALAMAVALE', 'TAYGADEWADI', 'TAL  PATAN   DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7798939514', '', 000136, 000150, 000023, '2023-08-11', 24, 0, '', '9', '', '', NULL),
(361, 00028531, 415488515, 515, '1071005000027', 'AMAR VISHNU PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P BANAPURI ', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '8830942575', '', 000151, 000165, 000027, '2023-08-11', 24, 0, '', '10', '', '', NULL),
(362, 00028532, 415488515, 515, '1071005000035', 'MAHESH HANMANT MORE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   SUTARWADI ', 'POST   MALDAN ', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9619272537', '', 000166, 000180, 000035, '2023-08-11', 24, 0, '', '11', '', '', NULL),
(363, 00028533, 415488515, 515, '1071005000036', 'SUJATA DHANANJAY SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KALAVADE  KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8390014200', '', 000181, 000195, 000036, '2023-08-11', 24, 0, '', '12', '', '', NULL),
(364, 00028534, 415488515, 515, '1071005000041', 'MANIKRAO NANDKUMAR KHATAVKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KUMBHARGAON', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7261970666', '', 000196, 000210, 000041, '2023-08-11', 24, 0, '', '13', '', '', NULL),
(365, 00028535, 415488515, 515, '1071005000051', 'VIKAS RAVAJI MORE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VAZOLI', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415206, '02372-', '02372-', '9823384895', '', 000211, 000225, 000051, '2023-08-11', 24, 0, '', '14', '', '', NULL),
(366, 00028536, 415488515, 515, '1071005000056', 'OMKAR CHANDRAKANT KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KUSURUND', 'TAL PATAN ', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9145308136', '', 000226, 000240, 000056, '2023-08-11', 24, 0, '', '15', '', '', NULL),
(367, 00028537, 415488515, 515, '1071005000061', 'SUDHIR UTTAM KUMBHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KUMBHARGAON ', 'TAL PATAN ', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '8975671331', '', 000241, 000255, 000061, '2023-08-11', 24, 0, '', '16', '', '', NULL),
(368, 00028538, 415488515, 515, '1071005000070', 'SUDHIR DINKAR KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  GUDHE', 'TAL  PATAN', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415112, '', '02162-', '9049188873', '', 000256, 000270, 000070, '2023-08-11', 24, 0, '', '17', '', '', NULL),
(369, 00028539, 415488515, 515, '1071005000072', 'KAVITA UTTAM KATE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  TALMAVALE TAYGADEWADI ', 'NEAR TALMAVALE KUMBHARGAON ROAD ', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7066783563', '', 000271, 000285, 000072, '2023-08-11', 24, 0, '', '18', '', '', NULL),
(370, 00028540, 415488515, 515, '1071005000076', 'MAYUR BALASO SAPKAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VAZOLI ', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9765743036', '', 000286, 000300, 000076, '2023-08-11', 24, 0, '', '19', '', '', NULL),
(371, 00028502, 415488355, 355, '1007016030249', 'MALLIKARJUN KIRANA STORES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'MALLIKARJUN GURUPADAPPA WANGI', '', 'PLOT NO 386 2  SHANIWAR PETH', 'KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9730842800', '', 124216, 124245, 030249, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(372, 00028503, 415488355, 355, '1007005033499', 'VANAMALA VIKRAMSINH RAJEBHOSALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'HUTATMA COLONY ', 'A P  WALWA', 'TAL WALWA  DIST SANGLI', '', '', 'KARAD', '', '', '', 416313, '', '02164-', '9922494862', '', 123391, 123405, 033499, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(373, 00028541, 415488515, 515, '1071005000058', 'AMAR VIKAS WAYDANDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   KESHAV GANPATI PAWAR', 'A P   TALMAVALE   135 136  GAOTHAN', 'TAL  PATAN DIST  SATARA', '', '', 'PATAN', '', '', '', 415103, '0233-', '0233-', '9762130300', '', 000301, 000315, 000058, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(374, 00028488, 415488352, 352, '1001005683348', 'SONALI ANKUSH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR OLD S T STAND  KALE', 'TAL  KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415104, '', '02164-', '9527503241', '', 590418, 590432, 683348, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(375, 00028489, 415488352, 352, '1001005001776', 'ABHAY VIDYADHAR LATKAR', 01, 'Y', 030, 10, '', 'ANAGHA ABHAY() LATKAR', '', '', '', '', '220  SOMWAR PETH', 'OPP HATKESHWAR TEMPLE', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '', '9823305454', '', 590433, 590462, 001776, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(376, 00028493, 415488501, 501, '1004005006717', 'TATYABA VITTHAL BOBADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P BELWADI KALGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 150751, 150765, 006717, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(377, 00028494, 415488501, 501, '1004005000856', 'VILAS BHANUDAS KAMBIRE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MASUR', 'MASUR', 'MASUR', '', '', 'MASUR', '', '', '', 415106, '', '', '3322210388', '', 150766, 150780, 000856, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(378, 00028499, 415488354, 354, '1006005015299', 'ADITYA SHANKARRAO KALBHOR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  SAIDAPUR', 'SHIVAJI CHOUK  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9765882606', '', 196637, 196666, 015299, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(379, 00028500, 415488354, 354, '1006005006571', 'BHAVANA PADMAKAR KULKARNI', 01, 'Y', 015, 10, '', '', '', '', '', '', '52  VIDYANAGAR', 'SAIDAPUR', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 196667, 196681, 006571, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(380, 00028501, 415488354, 354, '1006005153517', 'SANJEEVANI SANJAY MAHADAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '135 PATIL GALLI', 'MANGALWAR PETH KARAD', 'TAL  KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '97655365', '02164-', '9834470876', '', 196682, 196696, 153517, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(381, 00028504, 415488357, 357, '1024016000383', 'AMARJIT RAGHUNATH PATIL', 01, 'Y', 060, 11, '', '', '', '', '', '', 'KRISHNA KAMAL BENGLOW', 'A P  SAIDAPUR', 'TAL  KARAD   DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-97', '02164-', '9850377611', '', 186106, 186165, 000383, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(382, 00028505, 415488357, 357, '1024005041889', 'VASIM JAHID SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', '1  MANGALWAR PETH ', 'OPP KANYA SHALA ', 'KARAD  DIST  SATARA ', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 184909, 184923, 041889, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(383, 00028484, 415488358, 358, '1026005251630', 'VANDANA PRAMOD SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '160  BUDHWAR PETH  ', 'FULE PARISAR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9607777612', '', 075617, 075631, 251630, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(384, 00028506, 415488359, 359, '1037005007423', 'RAJARAM NIVRATTI NIKAM', 01, 'Y', 015, 10, '', 'ASHOK SHAMRAO JADHAV', '', '', '', '', '349 2 KHARADE COLONY KARAD', 'MARKET YARD ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9503271138', '', 137927, 137941, 007423, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(385, 00028507, 415488512, 512, '1052016000174', 'GANESH COMMUNICATION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TASWADE ', 'NEAR ROLL PLAZA ', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7057484628', '', 060076, 060135, 000174, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(386, 00028508, 415488514, 514, '1073016000003', 'SHRI SOMESHWAR GINJAR COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AKSHAY DIPAK SUDAKE', '', 'A P  PUSESAWALI', 'NEAR GRAMPANCHAYAT', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '09552770', '02162-', '09552770085', '', 000031, 000045, 000003, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(387, 00028509, 415488514, 514, '1073016000004', 'SHRI SWAMI MEDICO', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AVINASH KISAN KASHID', '', 'AT PO   PUSESAWALI', 'KARAD ROAD', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9665357807', '', 000046, 000060, 000004, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(388, 00028510, 415488514, 514, '1073016000005', 'RAJ JANERAL STOERS AND ZEROX CENTER', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'CHHAYA NETAJI DANGE', '', 'AT PO   PUSESAWALI', 'KARAD ROAD', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9561382849', '', 000061, 000075, 000005, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(389, 00028511, 415488514, 514, '1073016000006', 'MALI DECORATION', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PARAG SUBHASH YADAV', '', 'A P  PUSESAWALI   AZAD CHOUK', 'KARAD ROAD', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '7083674074', '', 000076, 000090, 000006, '2023-08-11', 24, 0, '', '4', '', '', NULL),
(390, 00028512, 415488514, 514, '1073016000007', 'JAYDEEP TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'YOGESH SAMPATRAO SHINDE', '', 'AT PO   PUSESAWALI', 'MILKAT NO 944 2 GAT NO 859', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9850514351', '', 000091, 000105, 000007, '2023-08-11', 24, 0, '', '5', '', '', NULL),
(391, 00028513, 415488514, 514, '1073016000009', 'MORE STEEL TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'BHIMRAO SITARAM MORE', '', '1279 MAYANI ROAD  ', 'A P  PUSESAWALI', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9822283629', '', 000106, 000120, 000009, '2023-08-11', 24, 0, '', '6', '', '', NULL),
(392, 00028514, 415488514, 514, '1073016000010', 'HOTEL DISHA', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'BAPU DAGDU SHINDE', '', 'AT PO   PUSESAVALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '', '', 000121, 000135, 000010, '2023-08-11', 24, 0, '', '7', '', '', NULL),
(393, 00028515, 415488514, 514, '1073016000011', 'SHIVAM PETROLEUM', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DADASO SHANKAR BANSODE', '', 'AT PO   SHAMGAON', 'PUSESAWALI ROAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415106, '02164-', '02164-', '9834296675', '', 000136, 000150, 000011, '2023-08-11', 24, 0, '', '8', '', '', NULL),
(394, 00028516, 415488514, 514, '1073016000012', 'SAVLESHWAR SUPER MARKET', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'YUVRAJ NANDKUMAR SOLAPURE', '', 'AT PO   PUSESAWALI', 'OPP OLD BUS STAND 1062 DATTA CHOWK', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9405565526', '', 000151, 000165, 000012, '2023-08-11', 24, 0, '', '9', '', '', NULL),
(395, 00028517, 415488514, 514, '1073016000013', 'D P KADAM AND SONS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'VIKRAMSHIL DYANDEO KADAM', '', 'A P  PUSESAVALI   GAT NO 631 2', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415001, '02162-', '02162-', '9730687777', '', 000166, 000180, 000013, '2023-08-11', 24, 0, '', '10', '', '', NULL),
(396, 00028518, 415488514, 514, '1073016000014', 'DIPAK ELECTRONICS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DIPAK ABA GHORPADE', '', 'A P  PUSESAWALI  ', 'PUSESAWALI POLICE STATION SAMOR', 'TAL KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415001, '02162-', '02162-', '9922942342', '', 000181, 000195, 000014, '2023-08-11', 24, 0, '', '11', '', '', NULL),
(397, 00028519, 415488514, 514, '1073016000015', 'MAITHILY TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'VARSHA SUDARSHAN MITHARE', '', 'GANGA SHANKAR COMPLEX', 'A P  PUSESAWALI', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '8855957735', '', 000196, 000210, 000015, '2023-08-11', 24, 0, '', '12', '', '', NULL),
(398, 00028520, 415488514, 514, '1073016000016', 'PRADIP JANARDHAN SOLAPURE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'SOLAPURE NIWAS A P  PUSESAVALI ', 'NEAR GANPATI TEMPLE VADUJ ROAD', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9421178875', '', 000211, 000225, 000016, '2023-08-11', 24, 0, '', '13', '', '', NULL),
(399, 00028521, 415488514, 514, '1073005000026', 'GANESH DATTATRYA GADAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9665942846', '', 000031, 000045, 000026, '2023-08-11', 24, 0, '', '14', '', '', NULL),
(400, 00028490, 415488353, 353, '1002005853289', 'JAYAWANT JANARDAN GHARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   GHAREWADI', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '9588545319', '', 610501, 610515, 853289, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(401, 00028491, 415488353, 353, '1002005034829', 'MAHESH KHIMAJI PATEL', 01, 'Y', 030, 10, '', 'SING CHANGE DT', 'VANDANA MAHESH PATEL', '', '', '', '448 49 SHANIWAR PETH ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 610516, 610545, 034829, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(402, 00028492, 415488353, 353, '1002103005206', 'KARNANAVAL CONSTRUCTION', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ATUL MOHANRAO SHINDE', '', '303 K SHUKRAWAR PETH SHINDE GALLI ', 'KARAD', 'TAL  KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-22', '9881908447', '', 614660, 614719, 005206, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(403, 00028495, 415488502, 502, '1005005006000', 'JAYPRAKASH RANGRAO SURYAVANSHI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '', '', 269287, 269316, 006000, '2023-08-11', 24, 0, '', '1', '', '', NULL),
(404, 00028496, 415488502, 502, '1005005297334', 'SHANKAR PRALHAD YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'H NO 91  A P SASPADE ', 'TAL DIST SATARA', '', '', '', 'SATARA', '', '', '', 415519, '', '', '9637566217', '', 269317, 269331, 297334, '2023-08-11', 24, 0, '', '2', '', '', NULL),
(405, 00028497, 415488502, 502, '1005005011215', 'VINAYAK MAHADEO JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P UMBRAJ TAL KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 0, '', '', '9822427218', '', 269332, 269361, 011215, '2023-08-11', 24, 0, '', '3', '', '', NULL),
(406, 00028498, 415488502, 502, '1005103000022', 'MANJUSHA PRAVIN YADAV', 01, 'Y', 060, 13, '', 'MS DEEPAK ENTERPRISES', 'PRAVIN SHIVAJI YADAV', '', '', '', 'NEAR RANJIT TIMBAR ', 'A P  UMBRAJ ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881374824', '', 269986, 270045, 000022, '2023-08-11', 24, 0, '', '4', '', '', NULL),
(407, 00028615, 415488352, 352, '1001005007458', 'BABAN MITHU SAYYAD', 01, 'Y', 015, 10, '', 'SHARIFA BABAN SAYYAD', '', '', '', '', '317 3 NEAR DHANYA MANDAI MARKET  GUR', 'GURUWAR PETH KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9422401851', '', 590493, 590507, 007458, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(408, 00028614, 415488352, 352, '1001005061233', 'MADHURI SHANKARRAO DHUMAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P   VARUNJI', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '8087145714', '', 590463, 590492, 061233, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(409, 00028616, 415488352, 352, '1001005063279', 'NITIN GANPAT CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'NER SAI SAWALI', 'A P  NER', 'TAL KHATAV DIST SATARA', '', '', 'PUSEGOAN', '', '', '', 415502, '', '02375-', '9423320320', '', 590508, 590537, 063279, '2023-08-14', 24, 0, '', '3', '', '', NULL),
(410, 00028625, 415488353, 353, '1002005046314', 'ANIL APPASO MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO   UMARKANCHAN', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '', '02372-', '9764638672', '', 610576, 610590, 046314, '2023-08-14', 24, 0, '', '9', '', '', NULL),
(411, 00028623, 415488353, 353, '1002102001691', 'M/S KRUSHIBHUSHAN KARAD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '209001   M/S KRUSHIBHUSHAN KARAD', 'ANITA SIDDHNATH SAGARE', 'MARKET YARD  ', 'SHANIWAR PETH ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '', '9420627438', '', 614795, 614854, 001691, '2023-08-14', 24, 0, '', '7', '', '', NULL),
(412, 00028624, 415488353, 353, '1002102001691', 'M/S KRUSHIBHUSHAN KARAD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '209001   M/S KRUSHIBHUSHAN KARAD', 'ANITA SIDDHNATH SAGARE', 'MARKET YARD  ', 'SHANIWAR PETH ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '', '9420627438', '', 614855, 614914, 001691, '2023-08-14', 24, 0, '', '8', '', '', NULL),
(413, 00028617, 415488353, 353, '1002106005358', 'SUCHETA MAHESH DHAVALE', 01, 'Y', 015, 13, '', 'MAHESH MAHADEV DHAVALE', '', '', '', '', '30 TELI GALLI', 'SHANIWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9970216364', '', 614720, 614734, 005358, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(414, 00028619, 415488353, 353, '1002005852385', 'AJIT ARJUN JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PADALI', 'POST  SUPANE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '9112464266', '', 610546, 610560, 852385, '2023-08-14', 24, 0, '', '3', '', '', NULL),
(415, 00028622, 415488353, 353, '1002005853290', 'VIJAY MAHADEO PATIL', 01, 'Y', 015, 10, '', 'KAVITA VIJAY PATIL', '', '', '', '', '158 HIRA NIWAS', 'MANGALWAR PETH', 'TA KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9921147477', '', 610561, 610575, 853290, '2023-08-14', 24, 0, '', '6', '', '', NULL),
(416, 00028618, 415488353, 353, '1002106005127', 'THE KARAD MERCHANT SAHKARI CREDIT SANSTHA LIM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KARAD MERCHANT CO OP CREDIT SANTHA ', '', '7 8 SOMWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '9881908429', '', 614735, 614794, 005127, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(417, 00028620, 415488353, 353, '1002016001697', 'METRO AUTO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'TANVIR J MULLA', '', '379 3 P B ROAD', 'MALKAPUR KARAD', 'TAL KARAD', '', '', 'KARAD', '', '', '', 415110, '228163', '', '9822007863', '', 621722, 621781, 001697, '2023-08-14', 24, 0, '', '4', '', '', NULL),
(418, 00028621, 415488353, 353, '1002016002806', 'AVANTIKA ELECTRICAL PROP MANISHA MAHADEV SURY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MANISHA MAHADEV SURYAVANSHI', '', '602  NEAR VITTHAL MANDIR', 'A P  NERLI', 'TAL  KADEGAON  DIST  SANGLI', '', '', 'SANGLI', '', '', '', 415304, '', '', '9970259696', '', 621782, 621841, 002806, '2023-08-14', 24, 0, '', '5', '', '', NULL),
(419, 00028629, 415488502, 502, '1005016006175', 'MEERA TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VARAD SHANTARAM TODKAR', '', 'MANIK CHOUK', 'A P  UMBRAJ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8668205661', '', 272191, 272250, 006175, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(420, 00028630, 415488355, 355, '1007016030353', 'DARLESHA EXIM', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VIKRAM GANESHMAL OSWAL', '', '185 A 1 E RAVIWAR PETH', 'AZAD CHOWK  KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7249233000', '', 124246, 124305, 030353, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(421, 00028611, 415488505, 505, '1012016000149', 'MAYUR CLOTH STORES PROP', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PUROHIT SAKALARAM LILAJI', '', 'AT POST MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9890745515', '', 100651, 100710, 000149, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(422, 00028636, 415488201, 201, '1032102000104', 'M/S WARWATKAR  AND SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S WARWATKAR AND SONS', '', 'RANGOBA SABALE MARG', 'BAZAR PETH CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9011052292', '', 186197, 186256, 000104, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(423, 00028637, 415488359, 359, '1037005002142', 'BABURAO SRIPATI PATIL', 01, 'Y', 030, 10, '', 'VIDYARANI BABURAO PATIL', '', '', '', '', 'BAPUJI SALUNKHE NAGAR', 'KARVENAKA', 'TAL KARAD', '', '', 'KARAD', '', '', '', 415110, '229482', '81494038', '8007282041', '', 137942, 137971, 002142, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(424, 00028612, 415488514, 514, '1073005000079', 'AVINASH SHIVLING NASHTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SARKARI HOSPITAL ROAD GUEST HOUSE RAOD', 'NASHTE HOSPITAL PUSESAVALI', 'TAL   KHATAV DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '', '', '9403348953', '', 000046, 000060, 000079, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(425, 00028613, 415488514, 514, '1073005000002', 'SANJAY PRAKASH KANASE', 01, 'Y', 015, 10, '', 'SARIKA SANJAY KANASE', '', '', '', '', 'AT PO   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '', '', 000061, 000075, 000002, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(426, 00028626, 415488354, 354, '1006005153608', 'VISHAL PANDURANG KUMBHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   1403 VIDYNAGAR TAL KARAD DIST SATA', 'PARVATI NAGAR VIDYANAGAR ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9970360594', '', 196697, 196711, 153608, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(427, 00028627, 415488354, 354, '1006005158503', 'BALKRISHNA BHIMRAO JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'OPP SGM COLLEGE 1096', 'CHHAYA NIVAS VIDYANAGAR', 'SAIDAPUR VIDYANAGAR KARAD', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '7447445187', '', 196712, 196741, 158503, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(428, 00028628, 415488354, 354, '1006005153132', 'MANISHA BALKRISHNA JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'S G M COLLEGE SAMOR ', '1096 CHHAYA NIVAS ', 'VIDYANAGAR SAIDAPUR', '', '', 'KARAD', '', '', '', 415124, '97650321', '', '8788017807', '', 196742, 196771, 153132, '2023-08-14', 24, 0, '', '3', '', '', NULL),
(429, 00028631, 415488356, 356, '1011016000094', 'M/S DHANANJAY ENGG.WORKS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 448756, 448815, 000094, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(430, 00028632, 415488356, 356, '1011005005503', 'RAJU KASAM MULLA', 01, 'Y', 060, 10, '', '', '', '', '', '', 'YASHWANT HOUSING SOCIETY', 'MALKAPUR TAL KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '9420496148', '', 447887, 447946, 005503, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(431, 00028635, 415488356, 356, '1011016000722', 'SUJIT INDUSTRIES PROP INDRAJIT J PATIL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'INDRAJIT JALINDAR PATIL', '', 'A P ATAKE', 'TAL KARAD DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823061961', '', 448816, 448875, 000722, '2023-08-14', 24, 0, '', '5', '', '', NULL),
(432, 00028633, 415488356, 356, '1011005002661', 'ARAVIND MARUTI CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A 18 2 KOYANA VASAHAT', 'MALKAPUR TAL KARAD DIST SATARA ', '', '', '', 'KARAD', '', '', '', 0, '', '', '9922035836', '', 447947, 447961, 002661, '2023-08-14', 24, 0, '', '3', '', '', NULL),
(433, 00028634, 415488356, 356, '1011005033933', 'SHKUNTALA SHANKAR LAVAND', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P NANDLAPUR ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9923812727', '', 447962, 447976, 033933, '2023-08-14', 24, 0, '', '4', '', '', NULL),
(434, 00028638, 415488352, 352, '1001005055144', 'RAJESH PRAKASH SHENDE', 01, 'Y', 060, 10, '', '', '', '', '', '', '326 SOMWAR PETH  BHAIROBA GALLI', 'NEAR RAMMANDIR KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '8975762064', '', 590538, 590597, 055144, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(435, 00028736, 415488514, 514, '1073016000018', 'RAJ OMKAR JWELLERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'RAJ OMKARE JWELLERSA', '', 'GALA NO 29  GRAMPANCHAYAT SHOPPING CENTE', 'OPP POLICE STATION  PUSESAWALI', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9850491329', '', 000226, 000240, 000018, '2023-08-14', 24, 0, '', '1', '', '', NULL),
(436, 00028737, 415488514, 514, '1073016000019', 'HOTEL MINAKSHI', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MS HOTEL MINAKSHI PRO SATVASHIL DNY', '', 'MILKAT NO 1054 ', 'A P  PUSESAVALI ', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9730689999', '', 000241, 000255, 000019, '2023-08-14', 24, 0, '', '2', '', '', NULL),
(437, 00028744, 415488352, 352, '1001005055401', 'HIRALAL BHARATJI PUROHIT', 01, 'Y', 015, 10, '', 'LILABAN HIRALAL PUROHIT', '', '', '', '', '93 MANGALWAR PETH ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 590598, 590612, 055401, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(438, 00028745, 415488352, 352, '1001005681060', 'MARUTI KHASHABA KADAM', 01, 'Y', 030, 10, '', 'VAISHALI MARUTI KADAM', '', '', '', '', 'AT  DHAVARWADI  UMBRAJ', 'POST  CHORE  BUS STOP JAVAL ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8975036591', '', 590613, 590642, 681060, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(439, 00028746, 415488352, 352, '1001016006585', 'RAJ ELECTRICALS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'FUTARMAL CHELARAMJI KUMAWAT', '', '245  GURUWAR PETH', 'NEAR URBAN BANK  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922218119', '', 568906, 568965, 006585, '2023-08-17', 24, 0, '', '3', '', '', NULL),
(440, 00028747, 415488352, 352, '1001016002331', 'KANTILAL POPATLAL SHAHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '186 GURUWARPETH KARAD', 'OPP KARAD URBAN BANK H O', '222887', '', '', 'KARAD', '', '', '', 415110, '22887', '', '8275370087', '', 568966, 569025, 002331, '2023-08-17', 24, 0, '', '4', '', '', NULL),
(441, 00028761, 415488357, 357, '1024005002479', 'MAHESH DILIP PATIL', 01, 'Y', 060, 10, '', '', '', '', '', '', '150 MANGALWAR PETH ', 'KAMANI MARUTI TEMPLE AREA ', 'KARAD SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9881380370', '', 184924, 184983, 002479, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(442, 00028762, 415488357, 357, '1024016000522', 'MEGA BUILDERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT', '', '655 GAJANAN HOUSING SOCIETY  ', 'A P  SAIDAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9545298999', '', 186166, 186225, 000522, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(443, 00028763, 415488357, 357, '1024016000522', 'MEGA BUILDERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT', '', '655 GAJANAN HOUSING SOCIETY  ', 'A P  SAIDAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9545298999', '', 186226, 186285, 000522, '2023-08-17', 24, 0, '', '3', '', '', NULL),
(444, 00028764, 415488357, 357, '1024016000539', 'HOTEL PAYTHA', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'HOTEL PAYTHA', 'WAKHAN ROAD ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9860042044', '', 186286, 186315, 000539, '2023-08-17', 24, 0, '', '4', '', '', NULL),
(445, 00028765, 415488357, 357, '1024005042546', 'SHASHIKANT JOTIRAM PAWAR', 01, 'Y', 015, 10, '', 'RANI SHASHIKANT PAWAR', '', '', '', '', 'A P   CHAREGAON ', 'BELADAR ROAD  ', 'TAL   KARAD DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9284245706', '', 184984, 184998, 042546, '2023-08-17', 24, 0, '', '5', '', '', NULL),
(446, 00028748, 415488353, 353, '1002005849840', 'MEGHA SANJAY DHAGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  NANDALAPUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823606393', '', 610591, 610605, 849840, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(447, 00028751, 415488502, 502, '1005005011079', 'SHANKARRAO KHANDOJI BHOSALE', 01, 'Y', 015, 10, '', 'VIKAS PRALHAD MORE', '', '', '', '', 'A P UMBRAJ NITIRAJ COLONY', 'CHAFAL ROAD TAL KARAD', 'DIS SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9850914363', '', 269362, 269376, 011079, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(448, 00028767, 415488357, 357, '1024005041469', 'SMITA DEVENDRA PISAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'GAJANAN HOUSING SOCIETY  EAST', 'BEHIND N C C OFFICE GOVARE', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '', '9130169398', '', 184999, 185028, 041469, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(449, 00028760, 415488505, 505, '1012016000374', 'SHRIRAM JEWELLERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   NAVARASTA ', 'MARALI KARKHANA ROAD ', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9330491431', '', 100711, 100725, 000374, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(450, 00028755, 415488355, 355, '1007102030010', 'PRABHAT MARKETING', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PADALKAR AJIT JAGANNATH', '', '185 RAVIWAR PETH', 'MAIN ROAD AZAD CHOUK ', 'KARAD', '', '', 'KARAD', '', '', '', 0, '', '', '8275370668', '', 122476, 122535, 030010, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(451, 00028749, 415488501, 501, '1004102000212', 'SANGITA PRADIP BHANDARE', 01, 'Y', 060, 13, '', 'SHRINIVAS PRADIP BHANDARE', 'PRADIP GANPATI BHANDARE', '', '', '', 'A P MASUR TAL KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9881984329', '', 148201, 148260, 000212, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(452, 00028750, 415488501, 501, '1004016000263', 'DEVASHRI MEDICALS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PROP AJAY SARJERAO THORAT', '', 'A P  SHIRAVADE', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415115, '', '02164-', '7756058083', '', 150167, 150226, 000263, '2023-08-17', 24, 0, '', '2', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(453, 00028752, 415488354, 354, '1006016000842', 'J P CONSTRUCTIONS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'REKHA KUMARI', '', '45 A P  SAIDAPUR', 'OPP JIVHALA DHABA ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9637876444', '', 193771, 193830, 000842, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(454, 00028753, 415488354, 354, '1006005154352', 'PRAMILA ARVIND PAWAR', 01, 'Y', 030, 10, '', 'ARVIND PANDURANG PAWAR', '', '', '', '', 'MATOSHREE  NEAR KRISHNA CANOL', 'GOVARE ROAD  VIDYANAGAR', 'SAIDAPUR  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7741009469', '', 196772, 196801, 154352, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(455, 00028754, 415488354, 354, '1006005009784', 'MANGAL NIWASRAO JADHAV', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P SAIDAPUR ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415110, '', '', '9604807405', '', 196802, 196861, 009784, '2023-08-17', 24, 0, '', '3', '', '', NULL),
(456, 00028758, 415488356, 356, '1011005037666', 'VIJAY ANANDRAO MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST MALKAPUR', '13 YASHWANT HOU SOCIETY', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9096541004', '', 447977, 447991, 037666, '2023-08-17', 24, 0, '', '3', '', '', NULL),
(457, 00028759, 415488356, 356, '1011005006594', 'RAMESH JAGANNATH KUMBHAR', 01, 'Y', 015, 10, '', 'JAYAMALA RAMESH KUMBHAR', '', '', '', '', 'OPP EMARSAN FACTORY', '1042 SONUJ NIVAS AGASHIVNAGAR MALKAPUR', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9822995851', '', 447992, 448006, 006594, '2023-08-17', 24, 0, '', '4', '', '', NULL),
(458, 00028756, 415488356, 356, '1011103000064', 'DATTAGURU STONE CRUSHER', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SHUBHANGI UMAKANT KHABALE', '', 'A P  KOLEWADI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9421116037', '', 446717, 446776, 000064, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(459, 00028757, 415488356, 356, '1011103000081', 'OKP BUILDERS AND DEVELOPERS PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'UMAKANT RAGHUNATH KHABALE', 'OMKAR SHANKAR KHABALE', '2231 21 A P WING', 'NEAR WING HOTEL', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415122, '02164-', '02164-', '7219386037', '', 446777, 446836, 000081, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(460, 00028741, 415488358, 358, '1026005250197', 'PRAVIN BHASKAR CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P KOPARDE HAVELI', 'TAL KARAD DIST SATARA', '', '', '', 'KARAD', '', '', '', 0, '', '', '9921479595', '', 075632, 075661, 250197, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(461, 00028742, 415488358, 358, '1026005003113', 'VASEEM NISAR MUTAWALLI', 01, 'Y', 015, 10, '', 'MUTWALLI UNUS NISAR', '', '', '', '', '190 1 DARGE MOHALLA ', 'GURUWAR PETH  KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9561925306', '', 075662, 075676, 003113, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(462, 00028743, 415488358, 358, '1026005249077', 'TARANNUM VASIM MUTAWALLI', 01, 'Y', 015, 10, '', '', '', '', '', '', '190 1  GURUWAR PETH  KARAD', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9923087351', '', 075677, 075691, 249077, '2023-08-17', 24, 0, '', '3', '', '', NULL),
(463, 00028766, 415488512, 512, '1052106000010', 'JAGANNATH CO OP CREDIT SOCITY LTD', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'RajendraGulabraoMohite', 'ArchanaAshokKadam', 'SHRI GANESH PRASAD CO OP', 'HOUSING SOCIETY  BLDG NO', '50  NEHRUNAGAR  KURLA ESAT MUMBAI', '', '', 'MUMBAI', '', '', '', 400024, '85910202', '25234472', '9322022775', '', 055966, 055995, 000010, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(464, 00028768, 415488352, 352, '1001005060498', 'ASHARAFAALLI ABDULRAJJAK SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PADALI  POST  SUPANE', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415114, '', '', '9960628144', '', 590643, 590657, 060498, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(465, 00028769, 415488352, 352, '1001005685041', 'SOHEL HUSEN PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'S O HUSEN PATEL 63 A P  WAGHERI', 'NEAR GAV VIHIR ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '7741810812', '', 590658, 590672, 685041, '2023-08-17', 24, 0, '', '2', '', '', NULL),
(466, 00028770, 415488353, 353, '1002005852181', 'MAYURI GHANSHYAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KARAVADI', 'TAL  KARAD DIST SATARA', '', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '8928397123', '', 610606, 610620, 852181, '2023-08-17', 24, 0, '', '1', '', '', NULL),
(467, 00028861, 415488515, 515, '1071016000007', 'SARKAR MENS WEAR', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'DIPRAJ UDAYSINH MORE', '', 'KARAD DHEBEWADI ROAD  TALMAVALE', 'TAYAGADE  PATAN', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9545031560', '', 000136, 000150, 000007, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(468, 00028862, 415488515, 515, '1071016000008', 'SWAMI SAMARTH MOTORS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'ROHIT MANIKRAO', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9284816978', '', 000151, 000165, 000008, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(469, 00028863, 415488515, 515, '1071016000008', 'SWAMI SAMARTH MOTORS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'ROHIT MANIKRAO', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9284816978', '', 000166, 000180, 000008, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(470, 00028864, 415488515, 515, '1071016000008', 'SWAMI SAMARTH MOTORS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'ROHIT MANIKRAO', '', 'A P   TALMAVALE ', 'TAL   PATAN ', 'DIST SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9284816978', '', 000181, 000195, 000008, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(471, 00028994, 415488515, 515, '1071016000009', 'JYOTIRLING MOBILE SHOPY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'KIRAN MAHADEV PATIL', '', 'C O   KIRAN MAHADEV PATIL', 'A P   GUDHE', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9168242149', '', 000197, 000211, 000009, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(472, 00028931, 415488352, 352, '1001102000619', 'DUBAL PHARMA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PUSHKARAJ RAJENDRA DUBAL', 'APURVA INDRANIL DUBAL', '313 DUBAL GALLI ', 'SHUKRAVAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9960063444', '', 570046, 570105, 000619, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(473, 00028932, 415488352, 352, '1001102000599', 'M/S AARYA INFRASTRUCTURES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'OSWAL SANJAY BABULAL', '', '12 SAHAKAR BHAVAN SHIVAJI', 'NAGAR KARAD   AASFA0897R', '9326999099 AUTHO ANY TWO', '', '', 'KARAD', '', '', '', 415110, '', '', '9765575555', '', 570106, 570165, 000599, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(474, 00028933, 415488352, 352, '1001102000208', 'BAGWAN MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP.BAGWAN MEDICALS', '', '130 GURUWAR PETH  MAIN ROAD ', 'NEAR CHAWDI CHOWK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9422403555', '', 570166, 570225, 000208, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(475, 00028934, 415488352, 352, '1001102000577', 'SUHAS RAJARAM INGAWALE PROP INGAWALE TRADERS ', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'INGAWALE SUHAS RAJARAM', '', 'OPP ANU AGENCY', 'MARKET YARD KARAD', '9850987893', '', '', 'KARAD', '', '', '', 415110, '', '', '9158884610', '', 570226, 570285, 000577, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(476, 00028935, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 570286, 570345, 000339, '2023-08-18', 24, 0, '', '5', '', '', NULL),
(477, 00028936, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 570346, 570405, 000339, '2023-08-18', 24, 0, '', '6', '', '', NULL),
(478, 00028941, 415488352, 352, '1001005067609', 'SUMAN TANAJIRAO THORAT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'GANAPATI MADIR ', 'BANAVADI COLONY KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9561449192', '', 590733, 590747, 067609, '2023-08-18', 24, 0, '', '11', '', '', NULL),
(479, 00028942, 415488352, 352, '1001005685051', 'ASHWINI AMIT PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   ANE ', 'NANGARE MALA ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '8010985780', '', 590748, 590762, 685051, '2023-08-18', 24, 0, '', '12', '', '', NULL),
(480, 00028943, 415488352, 352, '1001005685052', 'PRAJAKTA SANGRAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   NANDGAON', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415111, '', '', '9325166452', '', 590763, 590777, 685052, '2023-08-18', 24, 0, '', '13', '', '', NULL),
(481, 00028937, 415488352, 352, '1001106000205', 'PALKAR PHARMACEUTICALS DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PALKAR PHARMACEUTICALS', '', '119 VATSALA HOUSE SHIVAJI NAGAR CO OP HO', 'SHIVAJI NAGAR CO OP HOUSING SOC KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164221', '90961444', '7350666555', '', 570406, 570465, 000205, '2023-08-18', 24, 0, '', '7', '', '', NULL),
(482, 00028938, 415488352, 352, '1001106000145', 'VIJAY MANSIGRAO JAGTAP', 01, 'Y', 060, 13, '', '', '', '', '', '', 'NARMADA 16 RAJARAM NAGAR', 'HOUSING SCO KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9822284831', '', 570466, 570525, 000145, '2023-08-18', 24, 0, '', '8', '', '', NULL),
(483, 00028944, 415488352, 352, '1001005682815', 'ANIL LAXMAN BORNAK', 01, 'Y', 060, 10, '', '', '', '', '', '', 'ROOM NO 114 2 2 SHASTRI NAGAR', 'DHARAVI CROSS ROAD DHARAVI', 'MUMBAI', '', '', 'MUMBAI', '', '', '', 400017, '', '', '8108049200', '', 590778, 590837, 682815, '2023-08-18', 24, 0, '', '14', '', '', NULL),
(484, 00028939, 415488352, 352, '1001005683809', 'GIRISH DATTATRAY YADAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'RAVIWAR PETH  OPP NAGARPALIKA', 'NEAR SOMESHWAR MANDIR', 'TAL   KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '7387817150', '', 590673, 590702, 683809, '2023-08-18', 24, 0, '', '9', '', '', NULL),
(485, 00028940, 415488352, 352, '1001005685115', 'BILAL AHAMAD NAUSHAD NADAF', 01, 'Y', 030, 10, '', 'SALAMA NAUSHAD NADAF', '', '', '', '', 'C O PRAKASH SHIKSHAN MANDAL', 'PETH SANGLI ROAD URUN ISLAMPUR', 'TAL WALWA DIST SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '02164-', '02164-', '9359187198', '', 590703, 590732, 685115, '2023-08-18', 24, 0, '', '10', '', '', NULL),
(486, 00028946, 415488353, 353, '1002016002724', 'BALAJI TRADING COMPANY PROP  DHANAJI UTTAM GU', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'GATE NO 3  PLOT NO 25 ', 'SHANIWAR PETH MARKET YARD ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 621902, 621961, 002724, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(487, 00028945, 415488353, 353, '1002016002724', 'BALAJI TRADING COMPANY PROP  DHANAJI UTTAM GU', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'GATE NO 3  PLOT NO 25 ', 'SHANIWAR PETH MARKET YARD ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 621842, 621901, 002724, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(488, 00028947, 415488353, 353, '1002106005361', 'MADHURI SHANKARRAO DHUMAL', 01, 'Y', 015, 13, '', '', '', '', '', '', 'A P   VARUNJI', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '8087145714', '', 614915, 614929, 005361, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(489, 00028948, 415488353, 353, '1002016003092', 'RIDDHESH MIRCHI MASALA CENTER', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VIKRAM BHIMRAO KUMBHAR', '', 'A P  BELAWADE BUDRUK', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8857070692', '', 621962, 621991, 003092, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(490, 00028949, 415488501, 501, '1004005010526', 'SANTOSH SHANKAR KACHARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P VING', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '02164-', '9545832122', '', 150781, 150795, 010526, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(491, 00028950, 415488501, 501, '1004005012845', 'VIKRANT NANA KAMBALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  SHIRAWADE', 'BAUDDHAVASATI', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '7741001267', '', 150796, 150810, 012845, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(492, 00028951, 415488501, 501, '1004005013111', 'PINTU SHANKAR CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SHAHAPUR', 'TAL KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '9881421666', '', 150811, 150825, 013111, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(493, 00028952, 415488501, 501, '1004005008457', 'SIKANDAR KADAR SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P NADSHI', 'DIST SATARA', 'TAL KARAD', '', '', 'KARAD', '', '', '', 415106, '', '', '9595603394', '', 150826, 150840, 008457, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(494, 00028957, 415488502, 502, '1005106000141', 'SAMRUDDHI ENTERPRISE', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MINAKSHI NILESH SUPANEKA', '', 'M NO 401 OPP GRAMPANCHAYAT ', 'A P  UMBRAJ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9028852020', '', 270166, 270225, 000141, '2023-08-18', 24, 0, '', '5', '', '', NULL),
(495, 00028953, 415488502, 502, '1005016006174', 'SHASHIDHAN PETROLEUM', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'HEMANT DHANAJIRAO JADHAV', '', 'GAT NO 186', 'UMBRAJ MASUR ROAD', 'A P  VADOLI BHIKESHWAR TAL  KARAD  ', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9822284699', '', 272251, 272310, 006174, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(496, 00028954, 415488502, 502, '1005016006131', 'AVNEESH DISTRIBUTORS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'NARAYAN ASHOK THORAT', '', 'A P KORTI ', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '7972907423', '', 272311, 272370, 006131, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(497, 00028955, 415488502, 502, '1005102000588', 'SATYAM PETROCHEMICALS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAJENDRA PRALHAD GHUTE', 'VIKRANT RAJENDRA GHUTE', '120 AT  VANYACHIWADI POST MASUR', 'TAL KARAD DIST SATARA', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9922337777', '', 270046, 270105, 000588, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(498, 00028956, 415488502, 502, '1005102000588', 'SATYAM PETROCHEMICALS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAJENDRA PRALHAD GHUTE', 'VIKRANT RAJENDRA GHUTE', '120 AT  VANYACHIWADI POST MASUR', 'TAL KARAD DIST SATARA', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9922337777', '', 270106, 270165, 000588, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(499, 00028958, 415488354, 354, '1006016000587', 'BALASO PRALHAD JADHAV', 01, 'Y', 060, 11, '', '', '', '', '', '', 'A P SAIDAPUR TAL KARAD', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '9850604252', '', 193831, 193890, 000587, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(500, 00028959, 415488355, 355, '1007005034892', 'VIKAS RAGHUNATH SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', '88 SHUKRAWAR PETH', 'SATH SHAHID CHOWK SANT TUKARAM HIGH SCHO', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9561121993', '', 123406, 123420, 034892, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(501, 00028963, 415488356, 356, '1011005037619', 'PRAMODINI RAMESH DHUPKAR', 01, 'Y', 015, 10, '', 'SHRIKRISHNA RAMESH DHUPKAR', '', '', '', '', 'SHRI KRUPA  A 24 2', 'KOYANA VASAHAT', 'MALKAPUR  KARAD', '', '', 'KARAD', '', '', '', 415539, '02164-24', '', '9920802310', '', 448112, 448126, 037619, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(502, 00028964, 415488356, 356, '1011005037689', 'MAHADEO NANASO KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  UDHAVANE', 'PO  DHEBEWADI', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9975436323', '', 448127, 448141, 037689, '2023-08-18', 24, 0, '', '5', '', '', NULL),
(503, 00028965, 415488356, 356, '1011005037421', 'DIPAK LAXMAN TANDALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHIVAJINAGAR', 'MALKAPUR  KARAD', '', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9527278575', '', 448142, 448156, 037421, '2023-08-18', 24, 0, '', '6', '', '', NULL),
(504, 00028961, 415488356, 356, '1011005002091', 'ANANDA SHANKAR YEDAGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AHILYANAGAR', 'AT POST MALKAPUR', 'TAL KARAD DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '', '', '9423869831', '', 448037, 448051, 002091, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(505, 00028960, 415488356, 356, '1011005034586', 'RAGHUNATH BALU KHABALE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  VING  ', 'TAL KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415122, '', '02164-', '9421116037', '', 448007, 448036, 034586, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(506, 00028966, 415488356, 356, '1011005033052', 'RAVINDRA ASHOK CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'GOPALWADI  NEAR PACH MANDIR ', 'KOYANAVASAHAT MALKAPUR', 'TEL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '8484977812', '', 448157, 448186, 033052, '2023-08-18', 24, 0, '', '7', '', '', NULL),
(507, 00028962, 415488356, 356, '1011005004897', 'SHRIKRISHNA BALASO BAGAL', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P MALKAPUR TAL KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9764229871', '', 448052, 448111, 004897, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(508, 00028969, 415488505, 505, '1012005015711', 'VISHAL DATTATRAY DESHMUKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   PATAN  LAIBRARY CHOUK ', 'KUMBHAR WADA ', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415206, '02372-', '02372-', '9960231965', '', 097986, 098000, 015711, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(509, 00028967, 415488505, 505, '1012016000188', 'SHARAD GOVIND BHISE', 01, 'Y', 060, 11, '', '', '', '', '', '', 'A P   MALHARPETH', '882  MATANG VASTI ', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '', '8605151651', '', 100726, 100785, 000188, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(510, 00028968, 415488505, 505, '1012016000105', 'RUTURAJ JEWELLERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'KADAM SANJAY APPASO', '', '781A KARAD CHIPALUN ROAD  NORTH SIDE  MA', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9822292503', '', 100786, 100845, 000105, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(511, 00028970, 415488509, 509, '1020016000046', 'DHANRAJ NAGARI SAHKARI PATSANTHA LTD.DHONDEWA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRDIP SHAMRAO KAKDE', '', 'DHONDEWADI TAL KARAD DIST SATARA', '', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9890705844', '', 058623, 058682, 000046, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(512, 00028971, 415488509, 509, '1020005050225', 'SURYAKANT MAHADEV DUBAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   BELAVADE BK ', 'NEAR MARUTI TEMPLE  ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8237676009', '', 057561, 057575, 050225, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(513, 00028975, 415488357, 357, '1024005041149', 'NUTAN JAGANNATH MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', '641  NEAR DR PAWAR HOSPITAL ', 'A P RETHARE BUDRUK ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415108, '', '02164-', '9765655556', '', 185029, 185043, 041149, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(514, 00028972, 415488357, 357, '1024016000118', 'DIMENSION BUILDERS PROP SANJIV JADHAVJI SHAH ', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', '233 K 1 SHANIWAR PETH', 'KARAD', 'OPP SYNDICATE BANK', '', '', 'KARAD', '', '', '', 415510, '225456', '', '9422400548', '', 186316, 186345, 000118, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(515, 00028973, 415488357, 357, '1024016000518', 'SAI DEVELOPERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '52  SAVITRI COMPLEX', 'MANGALWAR PETH  KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7588637515', '', 186346, 186405, 000518, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(516, 00028974, 415488357, 357, '1024016000479', 'SANJAY BABULAL OSWAL', 01, 'Y', 060, 11, '', '', '', '', '', '', '12 SAHAKAR BHUVAN', 'BHUDHWAR PETH KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9422600287', '', 186406, 186465, 000479, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(517, 00028976, 415488358, 358, '1026103000020', 'ABHIJIT DIGAMBAR SURYAVANSHI', 01, 'Y', 060, 13, '', 'SURYAWANSHI DIGAMBAR AMBRUSHI', '', '', '', '', '19 A RAJARAM NAGAR SHIKSHAK COLONY KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-98', '02164-', '9923321444', '', 072136, 072195, 000020, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(518, 00028977, 415488358, 358, '1026005001911', 'RIYAJ KUSRUDDIN BHALDAR', 01, 'Y', 060, 10, '', '', '', '', '', '', '32 MANGALWAR PETH', 'NEAR JOTIBA MANDIR', ' KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9422400150', '', 075692, 075751, 001911, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(519, 00028978, 415488358, 358, '1026016000188', 'SARASWATI COMMUNICATION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'DHAIRYASHIL RAMESH PATIL', '', 'NEAR SHIVAJI VIDYAPITH', 'SHIVAJI CHOUK', 'MALKAPUR  KARAD', '', '', 'KARAD', '', '', '', 415539, '', '', '7775955666', '', 074101, 074130, 000188, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(520, 00028979, 415488358, 358, '1026005249658', 'SANJAY BABURAO LADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '30 B  BUDHWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 075752, 075766, 249658, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(521, 00028982, 415488201, 201, '1032005002632', 'IMRAN ASHRAF MEMAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'KHATIK GALLI ', 'BAZARPETH CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9373610588', '', 185701, 185730, 002632, '2023-08-18', 24, 0, '', '3', '', '', NULL),
(522, 00028983, 415488201, 201, '1032005000171', 'ASHRAF KASAM MEMAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'BAJAR PETH  KHATIK GALLI', 'CHIPLUN  RATNAGIRI', 'TAL   CHIPLUN   DIST   RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9373610595', '', 185731, 185760, 000171, '2023-08-18', 24, 0, '', '4', '', '', NULL),
(523, 00028984, 415488201, 201, '1032005043076', 'NITYA PRATHMESH SALVI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  MADHALIWADI', 'KONDHE', 'TAL  CHIPLUN  DIST  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-', '02355-', '7276770364', '', 185761, 185790, 043076, '2023-08-18', 24, 0, '', '5', '', '', NULL),
(524, 00028990, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 060, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 185851, 185910, 042692, '2023-08-18', 24, 0, '', '11', '', '', NULL),
(525, 00028980, 415488201, 201, '1032016000600', 'SADHANA BUILDERS PVT.LTD.', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'GHAG VEERDHAWAL SITARAM', '', 'DHAVALCHHAYA RAM GANESH', 'GADKARI PATH  TALAV PALI ', 'THANE  02225425663 67', '', '', 'KARAD', '', '', '', 400601, '', '', '9892317575', '', 188116, 188175, 000600, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(526, 00028981, 415488201, 201, '1032016000600', 'SADHANA BUILDERS PVT.LTD.', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'GHAG VEERDHAWAL SITARAM', '', 'DHAVALCHHAYA RAM GANESH', 'GADKARI PATH  TALAV PALI ', 'THANE  02225425663 67', '', '', 'KARAD', '', '', '', 400601, '', '', '9892317575', '', 188176, 188235, 000600, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(527, 00028985, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188236, 188295, 000452, '2023-08-18', 24, 0, '', '6', '', '', NULL),
(528, 00028986, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188296, 188355, 000452, '2023-08-18', 24, 0, '', '7', '', '', NULL),
(529, 00028987, 415488201, 201, '1032016000700', 'M/S RAHUL SOHAN AYURVED AUSHADHALAY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VANITA RAJARAM MATE', '', 'SHOP NO 17  DESAI PLAZA', 'KARAD ROAD  CHINCHNAKA', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9028480744', '', 188356, 188415, 000700, '2023-08-18', 24, 0, '', '8', '', '', NULL),
(530, 00028988, 415488201, 201, '1032016000700', 'M/S RAHUL SOHAN AYURVED AUSHADHALAY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VANITA RAJARAM MATE', '', 'SHOP NO 17  DESAI PLAZA', 'KARAD ROAD  CHINCHNAKA', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9028480744', '', 188416, 188475, 000700, '2023-08-18', 24, 0, '', '9', '', '', NULL),
(531, 00028989, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 060, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 185791, 185850, 042692, '2023-08-18', 24, 0, '', '10', '', '', NULL),
(532, 00028991, 415488359, 359, '1037016000163', 'NEW KUSMA MARKETING PROP RAJESH SHIVAJI KASHI', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'RAJESH SHIVAJI KASHID', '', 'MILKAT NO 760 GOLESHWAR ROAD', 'A P GOLESHWAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881159820', '', 136366, 136395, 000163, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(533, 00028992, 415488512, 512, '1052016000160', 'MANGALMURTI ENGINEERING WORKS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MANGESH SHANKAR THORAT', '', 'PLOT NO B 162', 'M I D C TASAWADE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7798327616', '', 060136, 060195, 000160, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(534, 00028993, 415488512, 512, '1052016000150', 'SHREE SHIV SAI AGRO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RESHMA MANOJ PAWAR', '', 'A P VAHAGAON 823 ', 'NEAR D C C BANK ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9172541089', '', 060196, 060255, 000150, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(535, 00028995, 415488514, 514, '1073016000017', 'VARDHAN AGRO PROCESSING LTD', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'VIKRAMSHIL DYANDEO KADAM', '', 'GAT NO 644 1', 'A P  TRIMALI ', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415510, '2355-', '2355-', '9730687777', '', 000256, 000270, 000017, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(536, 00029004, 415488356, 356, '1011005035698', 'PRIYANKA NARAYAN YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', '903 NEAR GANESH MANGAL KARYALAY ', 'MALKAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '7559787040', '', 448187, 448201, 035698, '2023-08-18', 24, 0, '', '1', '', '', NULL),
(537, 00029005, 415488356, 356, '1011005037821', 'KIRAN RAMESH SAPKAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   SAPKALWADI', 'PO   KUTHARE', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '7350591802', '', 448202, 448216, 037821, '2023-08-18', 24, 0, '', '2', '', '', NULL),
(538, 00029042, 415488352, 352, '1001016006719', 'SAMRUDDHI BAG HOUSE', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SWATI S JADHAV', '', 'KARAD TASGAON ROAD', 'GODAVARI NAGAR KARVE NAKA', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9420693032', '', 569026, 569055, 006719, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(539, 00029043, 415488352, 352, '1001016006720', 'GREEN INDIA CORPORATION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VAISHALI VAIBHAV PATIL', '', 'M N 80  SOMWAR PETH  KARAD', 'TAL   KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9960760666', '', 569056, 569085, 006720, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(540, 00029044, 415488352, 352, '1001016006450', 'M/S SATYAM MEDICAL SHOPEE  PROP HEMANT BHUJAN', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '122 A GURUWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164-69', '02164-02', '9403598904', '', 569086, 569145, 006450, '2023-08-19', 24, 0, '', '3', '', '', NULL),
(541, 00029045, 415488352, 352, '1001005061630', 'SUBODH SUBHASHCHANDRA AKKALKOTE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'C   1 14  MANIBANDH SOCIETY  NEAR NITYAN', 'VITTHAL WADI  HINGANE KHURD', 'PUNE', '', '', 'PUNE', '', '', '', 411051, '0217-234', '020-2739', '9850070085', '', 590838, 590897, 061630, '2023-08-19', 24, 0, '', '4', '', '', NULL),
(542, 00029052, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 615110, 615169, 001266, '2023-08-19', 24, 0, '', '7', '', '', NULL),
(543, 00029053, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 615170, 615229, 001266, '2023-08-19', 24, 0, '', '8', '', '', NULL),
(544, 00029054, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 615230, 615289, 001266, '2023-08-19', 24, 0, '', '9', '', '', NULL),
(545, 00029049, 415488353, 353, '1002016002714', 'PRIDE PHARMACEUTICALS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'GALA NO 42   FINAL PLOT NO 432 433 ', 'SHANIWAR PETH  SUPER MARKET  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9821611608', '', 622022, 622081, 002714, '2023-08-19', 24, 0, '', '4', '', '', NULL),
(546, 00029050, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 614990, 615049, 001266, '2023-08-19', 24, 0, '', '5', '', '', NULL),
(547, 00029051, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 615050, 615109, 001266, '2023-08-19', 24, 0, '', '6', '', '', NULL),
(548, 00029047, 415488353, 353, '1002103005257', 'SHREE NAVRANG STEEL TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ARJUN VARDICHAND SOLANKI', '', 'WARUNJI FATA FLAT NO 516', 'RENUKA PLAZA NEAR GANPATI TEMPLE', 'KARAD PATAN ROAD TA KARAD DI SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9097132111', '', 614930, 614989, 005257, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(549, 00029046, 415488353, 353, '1002016003103', 'MAHALAXMI ENGINEERING', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'bharati sharadchandra desai', '', 'MILKAT NO 1501 Z P COLONY', 'DHEBEWADI ROAD  AGASHIVNAGAR  MALKAPUR', 'TAL   KARAD DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9850708007', '', 621992, 622021, 003103, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(550, 00029048, 415488353, 353, '1002005035116', 'VISHNU DNYANDEO NALAWADE', 01, 'Y', 030, 10, '', 'L I C AGENT', '', '', '', '', 'A P  JAKHINWADI', 'TAL  KARAD', 'DI SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9823949071', '', 610621, 610650, 035116, '2023-08-19', 24, 0, '', '3', '', '', NULL),
(551, 00029056, 415488502, 502, '1005005300173', 'SHASHIKALA LAXMAN JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   UMBRAJ ', 'OPP  RUTUGANDH BANGALA PATAN ROAD ', 'TAL   PATAN  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9607256252', '', 269407, 269421, 300173, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(552, 00029057, 415488502, 502, '1005005300172', 'MANGAL DADASAHEB KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   PERLE ', 'GRAMPANCHAYAT', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7620395555', '', 269422, 269436, 300172, '2023-08-19', 24, 0, '', '3', '', '', NULL),
(553, 00029058, 415488502, 502, '1005005300174', 'DATTATRAY JAYSING MANE', 01, 'Y', 015, 10, '', 'AKASH DATTATRAY MANE', '', '', '', '', 'H NO 309  SANMITRA COLONY NO 2  MANJARI ', 'MAHADEV NAGAR  MANJARI BK  HADAPSAR', 'PUNE', '', '', 'PUNE', '', '', '', 411028, '020-', '020-', '8805069614', '', 269437, 269451, 300174, '2023-08-19', 24, 0, '', '4', '', '', NULL),
(554, 00029055, 415488502, 502, '1005005001569', 'SUNIL TUKARAM KODGULE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P UMBRAJ', 'BEHIND S T STAND', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9822274570', '', 269377, 269406, 001569, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(555, 00029059, 415488502, 502, '1005005013412', 'PADMANABHA VISHVANATHA RAI', 01, 'Y', 030, 10, '', 'N SAVITHA  RAI', '', '', '', '', 'HOTEL PANCHAMI  PUNE BANGLORE ROAD', 'A P  UMBRAJ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9657822828', '', 269452, 269481, 013412, '2023-08-19', 24, 0, '', '5', '', '', NULL),
(556, 00029060, 415488502, 502, '1005016000605', 'MAHAVEER STEEL TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'fulchand ramjiji gehlon', '', 'A P UMBRAJ PATAN ROAD', 'TAL  KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9922185584', '', 272371, 272430, 000605, '2023-08-19', 24, 0, '', '6', '', '', NULL),
(557, 00029061, 415488354, 354, '1006016000831', 'SUMA BUSINESS CORP', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'OM MAHENDR KONNUR', '', 'A P  SAIDAPUR   RENUKA NAGAR', 'MSEB ROAD   BEHIND MUKHBADHIR SCHOOL', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9860072666', '', 193891, 193950, 000831, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(558, 00029062, 415488354, 354, '1006016000830', 'SAHARA INDUSTRIES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'NIKHIL SURAJ POL', '', 'INDUSTRIAL ESTATE VIRWADE  PLOT NO 59 ', 'VIRAWADE BANAWADI ROAD  OGALEWADI  HAJAR', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '8600803582', '', 193951, 193980, 000830, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(559, 00029063, 415488355, 355, '1007016030217', 'HINDUSTHAN BEARING CORPORATION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '138 C SHANIWAR PETH ', 'NEAR KASAMBHAI BOARDING ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9423263873', '', 124306, 124365, 030217, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(560, 00029064, 415488505, 505, '1012016000375', 'JADHAV VIT SUPPLIERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'VIKAS RAGHUNATH JADHAV', '', 'A P   NISARE ', '287 KARAD PATAN ROAD ', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9881983857', '', 100846, 100860, 000375, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(561, 00029065, 415488505, 505, '1012005016015', 'RAHUL SHARAD PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  VIHE', 'TAL  PATAN ', 'DIST   SATARA ', '', '', 'PATAN', '', '', '', 415114, '02372-', '02372-', '9373312685', '', 098001, 098015, 016015, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(562, 00029066, 415488505, 505, '1012005002052', 'SANDEEP VITTHAL PANASKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P BAHULE  GRAM BAHULE', '391 3  KUMBHARAVADA', 'TAL PATAN DIST  SATARA', '', '', 'PATAN', '', '', '', 415209, '02372-', '02372-', '9850778756', '', 098016, 098045, 002052, '2023-08-19', 24, 0, '', '3', '', '', NULL),
(563, 00029067, 415488509, 509, '1020016000099', 'SUHAS SAMBHAJI THORAT', 01, 'Y', 030, 11, '', '', '', '', '', '', 'KRISHNA IRRIGATION SCHEM ', 'KALAVADE ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9423974747', '', 058683, 058712, 000099, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(564, 00029068, 415488357, 357, '1024005040723', 'RAMESH TATYARAO BANKAR', 01, 'Y', 030, 10, '', 'APRNA RAMESH BANKAR', '', '', '', '', '16 SHIVAJI HOUS SOCITY', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9326712300', '', 185044, 185073, 040723, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(565, 00029041, 415488358, 358, '1026005249308', 'SHEKHAR JAGANNATH BARGE', 01, 'Y', 060, 10, '', 'SHITAL SHEKHAR BARGE', '', '', '', '', '156  MANGALWAR PETH  KARAD', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9850273399', '', 075767, 075826, 249308, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(566, 00029069, 415488359, 359, '1037005007431', 'SATISH SHAMRAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P GOLESHWAR ', 'KARAD TASGAON ROAD ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9850651858', '', 137972, 137986, 007431, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(567, 00029070, 415488359, 359, '1037005005803', 'TEJASVINI SHAHAJI PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  GOLESHWAR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9921551763', '', 137987, 138001, 005803, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(568, 00029071, 415488514, 514, '1073016000020', 'BALIRAJA KRUSHI BHANDAR', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'BALIRAJA KRUSHI BHANDAR', '', 'A P   PUSESAWALI ', 'GAT NO  737 6', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9763071832', '', 000271, 000285, 000020, '2023-08-19', 24, 0, '', '1', '', '', NULL),
(569, 00029072, 415488514, 514, '1073016000021', 'SHRI RAMESHWAR AGRO HITECH', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SHRI RAMESHWAR AGRO HITECH PRO HARS', '', 'A P   PUSESAWALI', 'NEAR BUST STAND PUSESAWALI AUNDH ROAD', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9595958693', '', 000286, 000300, 000021, '2023-08-19', 24, 0, '', '2', '', '', NULL),
(570, 00029169, 415488514, 514, '1073005000032', 'SHRIPATI NAMDEV GHARGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO   VADGAON JS', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9421120416', '', 000076, 000090, 000032, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(571, 00029168, 415488512, 512, '1052102000012', 'TRIMURTI ENGINEERINPART 1 HARSHASRAI V METALI', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRAMILA PRAMOD MANE', 'SURESH GOPAL SUTAR', 'PLOT NO C 24 ', 'MIDC TASAWADE', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9881900308', '', 055996, 056055, 000012, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(572, 00029146, 415488358, 358, '1026005003264', 'PRATAPRAO PANDURANG BHOSALE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P   KARAVADI', 'NEAR Z P SCHOOL', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '', '', '9975211158', '', 075827, 075856, 003264, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(573, 00029166, 415488357, 357, '1024005042514', 'JAVED KADAR PATHAN', 01, 'Y', 030, 10, '', '', '', '', '', '', '83 84  MANGALWAR PETH ', 'MASHID PARISAR  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7020340318', '', 185074, 185103, 042514, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(574, 00029167, 415488357, 357, '1024005003777', 'MARUTIRAO TUKARAM DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P ANE', 'NEAR JOTIBA TEMPLE  ', 'TAL  KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822977932', '', 185104, 185133, 003777, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(575, 00029164, 415488505, 505, '1012016000291', 'HOTEL RAJE PARMIT ROOM BEAR BAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  NADE', 'TAL  PATAN', 'DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9049496166', '', 100861, 100920, 000291, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(576, 00029165, 415488505, 505, '1012016000291', 'HOTEL RAJE PARMIT ROOM BEAR BAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  NADE', 'TAL  PATAN', 'DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9049496166', '', 100921, 100980, 000291, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(577, 00029163, 415488356, 356, '1011016000359', 'HOUSE OF TYRE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'chalisan chinoy paul', '', 'PLOT NO 10 RANGSAGAR', 'P B ROAD MALKAPUR', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '228643', '', '9766555673', '', 448876, 448935, 000359, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(578, 00029160, 415488355, 355, '1007016000369', 'M/S VINOD L SAWANT AND CO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'PLOT NO 146 BUDHWAR PETH', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '228515', '', '9423033216', '', 124366, 124425, 000369, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(579, 00029161, 415488355, 355, '1007102030100', 'RADHAKRISHNA ENTERPRISES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'anup sanjay laddad', '', 'S NO 139 C  1 1   SHUKRAWAR PETH', 'NEAR OLD WATER HOUSE  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9503886333', '', 122536, 122595, 030100, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(580, 00029162, 415488355, 355, '1007102030100', 'RADHAKRISHNA ENTERPRISES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'anup sanjay laddad', '', 'S NO 139 C  1 1   SHUKRAWAR PETH', 'NEAR OLD WATER HOUSE  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9503886333', '', 122596, 122655, 030100, '2023-08-21', 24, 0, '', '3', '', '', NULL),
(581, 00029158, 415488354, 354, '1006005158206', 'ASHWINI BABURAO SHELAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MATOSHREE ', 'VAIBHAV COLONY  OPP HOLY FAMILY SCHOOL ', 'VIDYANAGAR  SAIDAPUR', '', '', 'KARAD', '', '', '', 415124, '87934593', '02164-', '', '', 196862, 196876, 158206, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(582, 00029159, 415488354, 354, '1006016000633', 'PRINCIPAL,GOVT COLLEGE OF PHARAMACY,KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'COLLEGE FO PHARMACY', 'VIDYANAGAR', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '71196', '', '7709826328', '', 193981, 194040, 000633, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(583, 00029149, 415488353, 353, '1002005028975', 'BALASO MARUTI KAMBALE', 01, 'Y', 015, 10, '', '', '', '', '', '', '305 A 1 SHRI SAI NAGAR MARKET YARD', 'BAIL BAZAR ROAD KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822915456', '', 610651, 610665, 028975, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(584, 00029147, 415488352, 352, '1001005010269', 'MANEKLAL GANGARAM SHAH', 01, 'Y', 015, 10, '', 'YOGESH MANEKLAL SHAH', '', '', '', '', '56 RAVIWAR PETH KARAD ', 'KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '7020254722', '', 590898, 590912, 010269, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(585, 00029148, 415488352, 352, '1001005054314', 'HARESH SHAMJI SHAHA', 01, 'Y', 015, 10, '', 'SHAH HARESH SHAMJI', 'SANGITA HARESH SHAHA', '', '', '', '65 A PATIL CHEMBERS  ', 'SHUKRAWAR PETH  ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '8668980689', '', 590913, 590927, 054314, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(586, 00029154, 415488502, 502, '1005005016672', 'MILIND MANOHAR BAILE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P UMBRAJ ', 'BOUDDH VASTI TAKSHASHILA NAGAR ', 'TAL    KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9579487556', '', 269482, 269496, 016672, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(587, 00029155, 415488502, 502, '1005016006131', 'AVNEESH DISTRIBUTORS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'NARAYAN ASHOK THORAT', '', 'A P KORTI ', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '7972907423', '', 272431, 272490, 006131, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(588, 00029156, 415488502, 502, '1005016006005', 'HOTEL SHREE GANESHA PERMIT ROOM AND BEER BAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHIVAJI JAGANNATH BHOPATE', '', 'GRAMPANCHAYAT MILKAT NO 568', 'A P  SHIVADE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881914543', '', 272491, 272550, 006005, '2023-08-21', 24, 0, '', '3', '', '', NULL),
(589, 00029157, 415488502, 502, '1005016006005', 'HOTEL SHREE GANESHA PERMIT ROOM AND BEER BAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHIVAJI JAGANNATH BHOPATE', '', 'GRAMPANCHAYAT MILKAT NO 568', 'A P  SHIVADE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881914543', '', 272551, 272610, 006005, '2023-08-21', 24, 0, '', '4', '', '', NULL),
(590, 00029150, 415488501, 501, '1004005013319', 'UMESH PRAKASH KAMBIRE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  MASUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '8830496872', '', 150841, 150855, 013319, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(591, 00029151, 415488501, 501, '1004005007393', 'LAXMAN ANANDRAO SALUNKHE', 01, 'Y', 015, 10, '', 'KAMAL LAXMAN SALUNKHE', '', '', '', '', 'AT PO KIVAL', 'TAL KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 150856, 150870, 007393, '2023-08-21', 24, 0, '', '2', '', '', NULL),
(592, 00029152, 415488501, 501, '1004005006028', 'KHUSHALCHAND GENMAL OSWAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '', '', 150871, 150885, 006028, '2023-08-21', 24, 0, '', '3', '', '', NULL),
(593, 00029153, 415488501, 501, '1004005013361', 'VIJAY JAGANNATH MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   RAJACHE KURLE', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9975506019', '', 150886, 150900, 013361, '2023-08-21', 24, 0, '', '4', '', '', NULL),
(594, 00029177, 415488354, 354, '1006005007757', 'PARSHARAM BASAWANT KANBARAKAR', 01, 'Y', 015, 10, '', 'MEGHA PARASHARAM KANABARAKAR', '', '', '', '', 'PARVATINAGAR S G M ', 'COLLEGE PHONE NO 272243', 'VIDYANAGAR', '', '', 'KARAD', '', '', '', 415110, '', '', '8308365937', '', 196877, 196891, 007757, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(595, 00029196, 415488356, 356, '1011005004678', 'LAXMAN HANAMANT PUJARI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'LAXMI COLONY MALKAPUR', 'TAL   KARAD ', 'DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '', '-', '9822434442', '', 448217, 448231, 004678, '2023-08-21', 24, 0, '', '1', '', '', NULL),
(596, 00029287, 415488352, 352, '1001005056859', 'IJAJ RAJJAK PATHAN', 01, 'Y', 015, 10, '', '', '', '', '', '', '7 2 PRAKASHNAGAR MANGALWAR PETH ', 'WAKHAN ROAD KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 591048, 591062, 056859, '2023-08-22', 24, 0, '', '4', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(597, 00029288, 415488352, 352, '1001005056859', 'IJAJ RAJJAK PATHAN', 01, 'Y', 015, 10, '', '', '', '', '', '', '7 2 PRAKASHNAGAR MANGALWAR PETH ', 'WAKHAN ROAD KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 591063, 591077, 056859, '2023-08-22', 24, 0, '', '5', '', '', NULL),
(598, 00029289, 415488352, 352, '1001005015215', 'RAVIKIRAN VASANT SHROTRI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHRKRUWAR PETH KARAD', 'TALKARAD', 'DISTSATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9823502249', '', 591078, 591092, 015215, '2023-08-22', 24, 0, '', '6', '', '', NULL),
(599, 00029284, 415488352, 352, '1001005682804', 'ABHIJEET GORAKH SALI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'PLOT 14 NEW KRANTI SOC', 'NEAR KANASE DHABA   SAMBHAJINAGAR', 'NEW MIDC SATARA', '', '', 'SATARA', '', '', '', 415002, '', '', '7972535215', '', 590928, 590987, 682804, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(600, 00029285, 415488352, 352, '1001005067619', 'NITA RANJIT KALE', 01, 'Y', 030, 10, '', 'RANJIT UTTAMRAO KALE', '', '', '', '', '314 SHUKRAWAR PETH', 'DUBAL GALLI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9890049623', '', 590988, 591017, 067619, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(601, 00029286, 415488352, 352, '1001005067619', 'NITA RANJIT KALE', 01, 'Y', 030, 10, '', 'RANJIT UTTAMRAO KALE', '', '', '', '', '314 SHUKRAWAR PETH', 'DUBAL GALLI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9890049623', '', 591018, 591047, 067619, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(602, 00029290, 415488353, 353, '1002005030899', 'SHREEKANT MADHAVRAO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', '65 GAJANAN HOS SOCITY  ', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9226195737', '', 610666, 610680, 030899, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(603, 00029292, 415488353, 353, '1002005853298', 'DADASAHEB DNYANDEO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'HARI OM NIWAS A P  TAMBAVE ', 'GANDHI CHOWK', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '9420465563', '', 610741, 610755, 853298, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(604, 00029291, 415488353, 353, '1002005853091', 'KETAN SATISH CHAVAN', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  NERLE ', 'WATAHRKAR VADAR GALLI ', 'TAL  WALAWA  DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415406, '', '', '9604271222', '', 610681, 610740, 853091, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(605, 00029293, 415488502, 502, '1005016006249', 'SHREE GURUDEV DATTA KRUPA TRANSPORT', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'CHANDRAKANT GULA', 'SAMBHAJIRAJE BABURAO GHADGE', 'A P  UMBRAJ  ', 'NEAR SHREE HOSPITAL ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9921443255', '', 272611, 272640, 006249, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(606, 00029295, 415488502, 502, '1005042000004', 'RAJAN TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PROP SANGRAM DINKAR JAMDADE', '', 'OM NIVAS  P B ROAD ', 'WARUNJI PHATA ', 'A P GOTE MUNDHE  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756891234', '', 272701, 272715, 000004, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(607, 00029296, 415488502, 502, '1005005002713', 'MOHANRAO EAKNAT MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  CHAREGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '9881655368', '', 269497, 269511, 002713, '2023-08-22', 24, 0, '', '4', '', '', NULL),
(608, 00029294, 415488502, 502, '1005016000240', 'M/S SHANKAR M. MOHIRE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SUNIL VISHNU MOHIRE', '', 'AP   UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '264049', '', '9527839100', '', 272641, 272700, 000240, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(609, 00029297, 415488354, 354, '1006005015189', 'SARIKA BALASO JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST  SAIDAPUR', 'MAL VIBHAG', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9730014252', '', 196892, 196921, 015189, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(610, 00029298, 415488354, 354, '1006005013249', 'SHAILESH SHANKARRAO KALBHOR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  VIDYANAGAR SAIDAPUR', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '8806686866', '', 196922, 196951, 013249, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(611, 00029299, 415488354, 354, '1006005153659', 'YOGESH JAYWANT PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P HAJARMACHI ', 'TAL KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9766303809', '', 196952, 196966, 153659, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(612, 00029300, 415488356, 356, '1011102000138', 'MANGALMURTI VARIETY', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP ASHOK RANGNATH CHAVAN', '', 'A P ATAKE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9767592806', '', 446837, 446896, 000138, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(613, 00029301, 415488356, 356, '1011005037795', 'SNEHAL PRAMOD PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  UNDALE ', 'TULSAN ROAD ', 'TAL  KARAD  DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9158982022', '', 448232, 448246, 037795, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(614, 00029302, 415488505, 505, '1012005016016', 'SOURABH SANJAY VIGAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   MALHARPETH', 'NEAR BANK OF MAHARASHTRA', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '8600929213', '', 098046, 098060, 016016, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(615, 00029303, 415488505, 505, '1012016000376', 'ANUPAM ENTERPRISES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P  MALHARPETH ', 'TAL  PATAN ', 'DIST   SATARA ', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '8600929213', '', 100981, 100995, 000376, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(616, 00029304, 415488509, 509, '1020005048081', 'JAGANNATH DADU KAMBALE', 01, 'Y', 015, 10, '', 'SHARADA JAGANNATH KAMBALE', '', '', '', '', 'A P KALE ', 'NEAR AMBEDKAR STATUE ', 'TAL KARAD ', '', '', 'KALE', '', '', '', 415104, '', '02164-', '9969880357', '', 057576, 057590, 048081, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(617, 00029282, 415488358, 358, '1026016000215', 'KALIDAS DHONDIRAM KAMBALE', 01, 'Y', 060, 11, '', 'SANJAY KALIDAS KAMBLE', '', '', '', '', '32 MANGALWAR PETH  KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9764997700', '', 074131, 074190, 000215, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(618, 00029283, 415488358, 358, '1026005249658', 'SANJAY BABURAO LADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '30 B  BUDHWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 075857, 075871, 249658, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(619, 00029309, 415488201, 201, '1032005002418', 'UMESH PRAKASH RAHATE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P TEPARWADI KAPSAL', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-', '02355-', '9921435527', '', 185971, 186000, 002418, '2023-08-22', 24, 0, '', '5', '', '', NULL),
(620, 00029308, 415488201, 201, '1032005002207', 'PREVIN CHANDRAKANT TALATHI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'ATPOST LAVEL BRHMANWADI', 'TAL  KHED', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415708, '', '02355-', '9822122091', '', 185911, 185970, 002207, '2023-08-22', 24, 0, '', '4', '', '', NULL),
(621, 00029305, 415488201, 201, '1032016000757', 'SHUBHAM SERVICES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RAVIKANT S  INDULKAR', '', 'FLAT NO 8  NOOR APARTMENT', 'KARAD ROAD  OPP DEVDHAR HOSPITAL ', 'A P MARKANDI  CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9673801411', '', 188476, 188535, 000757, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(622, 00029306, 415488201, 201, '1032016000815', 'NEW INDIA SALES CORPORATION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'GALA NO 5 KADAVEKAR CHEMB', 'APPO NAGARPARISHAD BAZAR ', '9657124811 9860952288', '', '', 'CHIPLUN', '', '', '', 415605, '', '96571248', '7588855576', '', 188536, 188595, 000815, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(623, 00029307, 415488201, 201, '1032016000607', 'LUCKY TRADERS PROP-PISE SACHIDANAND DADASAHEB', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PISE SACHIDANAND DADASAHEB', '', 'UNITY APPARTMENT 1564 B1 1 KHEND CHIPLUN', 'DIST RATNAGIRI', '', '', '', 'CHIPLUN', '', '', '', 415605, '02355-26', '02355-', '9422438083', '', 188596, 188655, 000607, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(624, 00029310, 415488359, 359, '1037005007435', 'SHANTA ASHOK MULLAY', 01, 'Y', 015, 10, '', '', '', '', '', '', '333 2 K  ANNADI PLAZA  ', 'KARVE NAKA  ABHIJIT HOTEL JAVAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9665686604', '', 138002, 138016, 007435, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(625, 00029312, 415488359, 359, '1037005000815', 'NISAR ADAM MULLA', 01, 'Y', 015, 10, '', 'SHAHEEN NISAR MULLA', '', '', '', '', 'OPP ASTAVINAYAK MANGAL', 'KARYALYA KARVENAKA KARAD ', 'LETUS MATTON SHOP', '', '', 'KARAD', '', '', '', 0, '', '', '9028745393', '', 138017, 138031, 000815, '2023-08-22', 24, 0, '', '3', '', '', NULL),
(626, 00029311, 415488359, 359, '1037106000097', 'SHIV SHAMBHO GRAMIN BIGAR SHETI SAHKARI PATSA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRADEEP JAYAVANTRAO JADHAV ID 57639', 'EKNATH BHAU THORAT', 'A P  GOLESHWAR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-22', '02164-', '8805011700', '', 133771, 133830, 000097, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(627, 00029313, 415488359, 359, '1037106000094', 'MAHADEV KALU ZIMARE', 01, 'Y', 030, 13, '', 'ROHIT MAHADEV ZIMARE', '', '', '', '', 'PLOT NO 31 KHARADE COLONY', 'MARKET YARD KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9921168214', '', 133831, 133860, 000094, '2023-08-22', 24, 0, '', '4', '', '', NULL),
(628, 00029314, 415488512, 512, '1052005003940', 'ANANDRAO JAGANNATH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  SHIRAWADE   153  SWAPNAPURTI', 'SHIVAJI CHOUK', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '9850361422', '', 057601, 057615, 003940, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(629, 00029315, 415488512, 512, '1052005002094', 'MAHENDRA NAMDEV NALAWADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '130 B  NEAR S T STOP  SHIRAWADE ', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7387884785', '', 057616, 057630, 002094, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(630, 00029316, 415488515, 515, '1071005000019', 'MANOJ MOHAN SHIDRUK', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SHIDRUKWADI KHALE', 'TAL DIST SATARA', '', '', '', 'SATARA', '', '', '', 415103, '02162-', '02162-', '9765320117', '', 000316, 000330, 000019, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(631, 00029317, 415488515, 515, '1071005000029', 'PRACHI MANOJ SHIDRUK', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT SHIDRUKWADI POST KHALE ', 'TAL PATAN ', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '7507958032', '', 000331, 000345, 000029, '2023-08-22', 24, 0, '', '2', '', '', NULL),
(632, 00029318, 415488514, 514, '1073005000125', 'SACHIN HARICHANDRA RATHOD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  HAJARMACHI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9156580220', '', 000091, 000105, 000125, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(633, 00029319, 415488357, 357, '1024005002237', 'RAHUL PRAMOD VELHAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RADHA GOVIND PURAM', 'WAKHAN ROAD MANGALWAR', 'PETH KARAD 9422606434', '', '', 'KARAD', '', '', '', 415110, '', '', '9503086868', '', 185134, 185148, 002237, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(634, 00029320, 415488352, 352, '1001005681435', 'SANJAY ANNASAHEB MUTHEKAR', 01, 'Y', 030, 10, '', 'SAVITA ASHOK LATUR', 'RUPALI SANJAY MUTHEKAR', '', '', '', '175 MANGALWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 1, '20103', '', '8605461373', '', 591093, 591122, 681435, '2023-08-22', 24, 0, '', '1', '', '', NULL),
(635, 00029407, 415488352, 352, '1001005057153', 'CHANDRAKANT BHALCHANDRA KHAMBE', 01, 'Y', 060, 10, '', 'KAMBE MANASI CHANDRAKANT', '', '', '', '', 'A P  KAPSAL  FLAT NO 303', 'AVDHUT RECIDENCE', 'TAL  CHIPLUN  DIST  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-', '02355-', '9594933044', '', 591123, 591182, 057153, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(636, 00029408, 415488352, 352, '1001005062195', 'ASHA VIJAYKUMAR PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', '443 RAJ APPARMENT', 'SOMEWAR PETH  KARAD', '', '', '', 'KARAD', '', '', '', 415110, '227625', '', '9561429900', '', 591183, 591212, 062195, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(637, 00029409, 415488352, 352, '1001005056500', 'KAMALESHWAR DEO TRUST KARAD', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', '', '', '219 MANGALWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '45318', '', '', '', 591213, 591272, 056500, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(638, 00029410, 415488352, 352, '1001005066698', 'SANDHYA ANANT BHARASKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '629 GANPATI ALI ', 'SHANKAR PARVATI APARTMENT', 'A P  WAI TAL  WAI DIST SATARA', '', '', 'SATARA', '', '', '', 412803, '', '02162-', '9850146941', '', 591273, 591302, 066698, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(639, 00029411, 415488352, 352, '1001005053571', 'GAJANAN VITTHAL GIRI', 01, 'Y', 030, 10, '', '', '', '', '', '', '215 D GURUWAR PETH KARAD', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 591303, 591332, 053571, '2023-08-23', 24, 0, '', '5', '', '', NULL),
(640, 00029412, 415488352, 352, '1001005050778', 'DADASO CHANDRU BABAR', 01, 'Y', 030, 10, '', 'SHARADA DADASO BABAR', '', '', '', '', 'A P JAKHINWADI NANDLAPUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9420228611', '', 591333, 591362, 050778, '2023-08-23', 24, 0, '', '6', '', '', NULL),
(641, 00029413, 415488353, 353, '1002102001645', 'ASHOKRAJ TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SANTOSH JAYSING CHAVAN', '', 'MILKAT NO 159  ', 'A P  NADE NAVARASTA  ', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9421210321', '', 615290, 615349, 001645, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(642, 00029414, 415488353, 353, '1002102001645', 'ASHOKRAJ TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SANTOSH JAYSING CHAVAN', '', 'MILKAT NO 159  ', 'A P  NADE NAVARASTA  ', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9421210321', '', 615350, 615409, 001645, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(643, 00029417, 415488353, 353, '1002005847698', 'VISHWAS RAMCHANDRA ARABUNE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'H NO 5582  VASANT NAGAR  ', 'A P  DUDHONDI  ', 'TAL  PALUS  DIST  SANGLI  ', '', '', 'SANGLI', '', '', '', 416308, '', '', '7709327232', '', 610786, 610845, 847698, '2023-08-23', 24, 0, '', '5', '', '', NULL),
(644, 00029415, 415488353, 353, '1002005852474', 'KEDAR PANDURANG GORAD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   VITTHALRAO GANPATI HULVAN', '363  SHANIWAR PETH  MARKET YARD ', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '0233-', '0233-', '9975193666', '', 610756, 610770, 852474, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(645, 00029416, 415488353, 353, '1002005035578', 'VARSHA ANIL GAWANDE', 01, 'Y', 015, 10, '', 'GAVANDE ANIL GULABRAO', '', '', '', '', 'KELKAR SANKUL 34 A', 'MANGALWAR PETH OPPOSITE NUTAN MARATHI SH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9822301950', '', 610771, 610785, 035578, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(646, 00029418, 415488501, 501, '1004005013092', 'SALIMUNISA HAKIKULLA KHAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '02164-', '02164-', '8956183166', '', 150901, 150915, 013092, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(647, 00029419, 415488501, 501, '1004005003875', 'VASANT SITARAM CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   KONEGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '9158597673', '', 150916, 150930, 003875, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(648, 00029420, 415488501, 501, '1004016000342', 'ASHWAMEGH MEDICAL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHALAKA AMOL PATOLE', '', 'M NO 397 GALA NO 1 ', 'GROUND FLOOR ASHWAMEGH BUILDING ', 'MASUR TAL KARAD DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '9922410091', '', 150227, 150286, 000342, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(649, 00029422, 415488502, 502, '1005005011159', 'DHAIRYASHIL SHASHIKANT JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P UMBRAJ  JADHAV MALA', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '8087305478', '', 269527, 269556, 011159, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(650, 00029423, 415488502, 502, '1005016006250', 'SHRI SIDDHIVINAYAK ROADLINES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'GANESH JAYPRAKASH SURYAWANSHI', 'SOMNATH RAMESH CHAVAN', 'AT PO  UMBRAJ', 'SURABHI CHOUK', 'TAL KARAD  DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8308796777', '', 272716, 272745, 006250, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(651, 00029425, 415488502, 502, '1005005295552', 'SHRUTI SATISH KHARADE', 01, 'Y', 030, 10, '', '', '', '', '', '', '1903 BA  A P UMBRAJ ', 'CHORE ROAD  KOLI PLAZA ', 'TAL KARAD ', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9822520490', '', 269557, 269586, 295552, '2023-08-23', 24, 0, '', '5', '', '', NULL),
(652, 00029421, 415488502, 502, '1005005300171', 'POONAM MAYUR HOLKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  UMBRAJ KRISHNANAGAR', 'SHAHID ASHOK SURYAWANSHI ROAD ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8010847475', '', 269512, 269526, 300171, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(653, 00029424, 415488502, 502, '1005102000709', 'SHIVAM MEDICAL AND GENRAL STORES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DIGANBAR RAMCHANDRA BHISE', '', 'A P  UMBRAJ', 'TAL  KARAD', 'DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9822380204', '', 270226, 270285, 000709, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(654, 00029426, 415488354, 354, '1006005006950', 'SHIVAJI SHRIRANG JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P SAIDAPUR SHIVAJI CHOW  Z P SCHOOL', 'TAL KARAD DIST SATARA', '9822342637', '', '', 'KARAD', '', '', '', 415124, '', '', '9822342637', '', 196967, 196996, 006950, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(655, 00029427, 415488354, 354, '1006005014923', 'MANOJ NAMDEO KARANDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST  BANWADI', 'TAL KARAD DIST SATARA', 'M NO  9011974697', '', '', 'KARAD', '', '', '', 415110, '', '', '9011974697', '', 196997, 197011, 014923, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(656, 00029428, 415488355, 355, '1007005009026', 'DADASAHEB SHIVAJIRAO DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'MEGHDOOT S NO 217 NR FOREST OFFICE KOYAN', 'MALKAPUR TAL KARAD DIST SATARA ', 'NULL', '', '', 'KARAD', '', '', '', 415539, '', '', '8805027821', '', 123421, 123450, 009026, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(657, 00029429, 415488505, 505, '1012016000364', 'LUCKY SADEE CENTER', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'HIRALAL KEVARAM PUROHIT', '', 'A P   NADE NAVARASTA ', 'MARALI KARKHANA ROAD ', 'TAL   PATAN   DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '7028909840', '', 100996, 101055, 000364, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(658, 00029430, 415488505, 505, '1012005015943', 'REKHA SHIVAJI KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHINVER CHAWL  DEVIPADA ROAD ', 'NEAR SHIVSENA SHAKHA DEVIPADA', 'BORIVALI  EAST  MUMBAI', '', '', 'MUMBAI', '', '', '', 400066, '022-', '022-', '7499542258', '', 098061, 098075, 015943, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(659, 00029431, 415488505, 505, '1012005015942', 'NILESH SHIVAJI KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHINVER CHAWL  DEVIPADA ROAD ', 'SHIVSENA SHAKHA DEVIPADA JAVAL ', 'BORIWALI EAST  MUMBAI', '', '', 'MUMBAI', '', '', '', 400066, '022-', '022-', '7499542258', '', 098076, 098090, 015942, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(660, 00029432, 415488509, 509, '1020016000164', 'NISARG GRAMIN BIGARSHETI SAHKARI PATSANSTHA L', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P BAIRAVNATHNAGAR  KALE  TAL KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7875470785', '', 058713, 058772, 000164, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(661, 00029435, 415488515, 515, '1071016000010', 'RUPALI TRADERS KUSUR', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'BALWANT SHAMRAO DESHMUKH', '', 'AT POST KUSUR', 'KARAD DHEBEWADI ROAD', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415103, '', '', '9561626055', '', 000212, 000226, 000010, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(662, 00029436, 415488515, 515, '1071005000102', 'SAGAR KANTILAL SWAMI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'GANESH COLONY', 'AGASHIVANAGAR  MALKAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8806729888', '', 000346, 000360, 000102, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(663, 00029433, 415488359, 359, '1037005007238', 'SAYARA BILAL PATEL', 01, 'Y', 015, 10, '', 'JUBER BILAL PATEL', '', '', '', '', 'K 66 BUDHWAR PETH', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9765159719', '', 138032, 138046, 007238, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(664, 00029434, 415488359, 359, '1037005003545', 'DATTATRAY DADA WAGHMODE', 01, 'Y', 015, 10, '', 'SARASWATI DATTATRAY WAGHMODE', '', '', '', '', '590  GOLEWSHWAR ', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7709259341', '', 138047, 138061, 003545, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(665, 00029406, 415488358, 358, '1026005249494', 'HARIDAS NIVRUTTI SORTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  YELGAON', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9975608787', '', 075932, 075946, 249494, '2023-08-23', 24, 0, '', '5', '', '', NULL),
(666, 00029402, 415488358, 358, '1026005000838', 'MANIK NAMDEO BANKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 9 ASHOK VIHAR', 'KARAD VITA RAOD OPP JIVAL', 'DHABA SAIDAPUR KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 075872, 075886, 000838, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(667, 00029403, 415488358, 358, '1026005249494', 'HARIDAS NIVRUTTI SORTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  YELGAON', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9975608787', '', 075887, 075901, 249494, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(668, 00029404, 415488358, 358, '1026005249494', 'HARIDAS NIVRUTTI SORTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  YELGAON', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9975608787', '', 075902, 075916, 249494, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(669, 00029405, 415488358, 358, '1026005249494', 'HARIDAS NIVRUTTI SORTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  YELGAON', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9975608787', '', 075917, 075931, 249494, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(670, 00029437, 415488352, 352, '1001005022054', 'DEEPAK MAHADEV APHALE', 01, 'Y', 030, 10, '', '', '', '', '', '', '35 B A SAMATA SADAN APARTMENT', 'MANGALWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9850883472', '', 591363, 591392, 022054, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(671, 00029438, 415488352, 352, '1001005682857', 'VIKAS VILASRAO BHOSALE', 01, 'Y', 030, 10, '', '', '', '', '', '', '155  SHUKRAWAR PETH', 'KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9421214122', '', 591393, 591422, 682857, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(672, 00029483, 415488353, 353, '1002005035524', 'GAJANAN KHANDERAO AVARE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  KALE', 'TAL KARAD', 'IL 9423252056', '', '', 'KALE', '', '', '', 0, '', '', '8275215023', '', 610846, 610875, 035524, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(673, 00029490, 415488353, 353, '1002005007258', 'UMA AJIT DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', '424 DESAI GALLI  A P KALE', 'TAL KARAD', 'DIST SATARA', '', '', 'KALE', '', '', '', 415104, '', '', '9561184923', '', 610966, 610995, 007258, '2023-08-23', 24, 0, '', '8', '', '', NULL),
(674, 00029491, 415488353, 353, '1002005033784', 'SUHAS TANAJI DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', '216 MANGALWAR PETH ', 'KARAD ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9881601244', '', 610996, 611025, 033784, '2023-08-23', 24, 0, '', '9', '', '', NULL),
(675, 00029486, 415488353, 353, '1002016002724', 'BALAJI TRADING COMPANY PROP  DHANAJI UTTAM GU', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'GATE NO 3  PLOT NO 25 ', 'SHANIWAR PETH MARKET YARD ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 622082, 622141, 002724, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(676, 00029488, 415488353, 353, '1002016001994', 'VIVEK AUTOMOBILES KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VIVEK AUTOMOBILES KARAD', '', '482 SHANIWAR PETH', 'NEAR POPATBHAI PETROL PUP', 'KARAD  AJTPP9385M', '', '', 'KARAD', '', '', '', 415110, '227321', '', '', '', 622142, 622201, 001994, '2023-08-23', 24, 0, '', '6', '', '', NULL),
(677, 00029489, 415488353, 353, '1002005033784', 'SUHAS TANAJI DESAI', 01, 'Y', 015, 10, '', '', '', '', '', '', '216 MANGALWAR PETH ', 'KARAD ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9881601244', '', 610951, 610965, 033784, '2023-08-23', 24, 0, '', '7', '', '', NULL),
(678, 00029485, 415488353, 353, '1002005000826', 'SHIVAJIRAO RAMCHANDRA KOLEKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHANIWAR PETH KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '223288', '', '9225211777', '', 610906, 610920, 000826, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(679, 00029484, 415488353, 353, '1002005002166', 'SUNIL GOVIND KULKARNI', 01, 'Y', 030, 10, '', '', '', '', '', '', '207 SHANIWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '223205', '9421178269', '', 610876, 610905, 002166, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(680, 00029487, 415488353, 353, '1002005029220', 'TRIGUN MARUTI KSHIRSAGAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '114 SAUDAMINI APARTMENT', 'SHANIWAR PETH ', 'SHINDE GALLI KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9822599595', '', 610921, 610950, 029220, '2023-08-23', 24, 0, '', '5', '', '', NULL),
(681, 00029495, 415488501, 501, '1004005007843', 'AMRUT PRAKASH KAMBALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR TAL KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '252037', '', '', '', 150931, 150945, 007843, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(682, 00029496, 415488501, 501, '1004005011979', 'CHETAN BALASAHEB JAGADALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '8149679009', '', 150946, 150960, 011979, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(683, 00029497, 415488501, 501, '1004005004585', 'DATTATRYA KRISHNA PATOLE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '', '', 150961, 150975, 004585, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(684, 00029498, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 272746, 272760, 000005, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(685, 00029499, 415488502, 502, '1005005016634', 'MANIKRAO JAYSINGH PATIL', 01, 'Y', 015, 10, '', 'JAYASHRI MANIK PATIL', '', '', '', '', 'AT POST UMBRAJ YASHWANT COLONI VARADRAJ ', '', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9869804739', '', 269587, 269601, 016634, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(686, 00029501, 415488502, 502, '1005005012322', 'MAYUR SUDHIR MIRAJKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 20 BUILDING NO K 5 ', 'GAURI SHANKAR ENCLAVE SINHAGAD ROAD ', 'ADITYA NAKODA PUNE', '', '', 'PUNE', '', '', '', 411030, '020-', '020-', '9766633407', '', 269602, 269616, 012322, '2023-08-23', 24, 0, '', '4', '', '', NULL),
(687, 00029500, 415488502, 502, '1005102000722', 'SWAROOP JAGANNATH TODKAR', 01, 'Y', 060, 13, '', '', '', '', '', '', 'AT POST UMBRAJ TAL KARAD', 'DIST SATARA', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '8421769969', '', 270286, 270345, 000722, '2023-08-23', 24, 0, '', '3', '', '', NULL),
(688, 00029502, 415488355, 355, '1007005034868', 'PANDURANG RANGARAO PATIL', 01, 'Y', 015, 10, '', 'RANGRAV RAMCHANDRA PATIL', '', '', '', '', 'AT PO  GHOGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415111, '02164-', '02164-', '9960757114', '', 123451, 123465, 034868, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(689, 00029503, 415488356, 356, '1011005006253', 'HINDURAO TUKARAM BAGAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'GIRIDARSHAN COLONY PLOT NO6', 'GODOLI VILASPUR  SATARA', 'SATARA', '', '', 'SATARA', '', '', '', 415004, '02162-', '02162-', '9422601005', '', 448247, 448276, 006253, '2023-08-23', 24, 0, '', '1', '', '', NULL),
(690, 00029504, 415488356, 356, '1011102000111', 'ROHIT AUTOMOBILES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'rushikesh subash gijare', '', '278  B OLD 297  NEW OPP SOC PETROL PUMP ', 'BANGLORE ROAD  MALKAPUR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '94238664', '9422401130', '', 446897, 446956, 000111, '2023-08-23', 24, 0, '', '2', '', '', NULL),
(691, 00029535, 415488357, 357, '1024005000357', 'TANAJI GANPATI NALAWDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEELAM SUSHANTNAGAR ', 'MANGALWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '224721', '', '9421209700', '', 185209, 185223, 000357, '2023-08-24', 24, 0, '', '2', '', '', NULL),
(692, 00029540, 415488357, 357, '1024005042565', 'BHARAT IDANDAS TALREJA', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 3 4 5 SIMRAT BUNGLOW', 'WAKHAN ROAD OPP KARAD URBAN BANK KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9422605588', '', 185284, 185298, 042565, '2023-08-24', 24, 0, '', '7', '', '', NULL),
(693, 00029541, 415488357, 357, '1024005042566', 'IDANDAS MAINOMAL TALREJA', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 3 4 5 SIMRAT BUNGLOW', 'OPP KARAD URBAN BANK WAKHAN ROAD KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9422605588', '', 185299, 185313, 042566, '2023-08-24', 24, 0, '', '8', '', '', NULL),
(694, 00029536, 415488357, 357, '1024005040604', 'NANDA SANJAY AVALAKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '384 NEAR DADACHE TEMPLE ', 'A P MUNDHE ', 'TAL  KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7722037220', '', 185224, 185253, 040604, '2023-08-24', 24, 0, '', '3', '', '', NULL),
(695, 00029537, 415488357, 357, '1024005042437', 'AMIT PRABHAKAR DHAKRAS', 01, 'Y', 030, 10, '', '', '', '', '', '', 'MALAI TOWERS OPP SANGAM HOTEL ', 'AGASHIVNAGAR  MALKAPUR  KARAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9850893147', '', 185254, 185283, 042437, '2023-08-24', 24, 0, '', '4', '', '', NULL),
(696, 00029539, 415488357, 357, '1024016000375', 'SAPTAHIK RAJSATYA PROP GORAKH KASHINATH TAWAR', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'LAXMI NAVAS  324 B  RAVIWAR PETH  ', 'NEAR WATER TANK  ', 'KARAD  ', '', '', 'KARAD', '', '', '', 415110, '93267117', '02164-', '9423502355', '', 186526, 186555, 000375, '2023-08-24', 24, 0, '', '6', '', '', NULL),
(697, 00029534, 415488357, 357, '1024005000885', 'VIJAY PANDURANG WATEGAONKAR', 01, 'Y', 060, 10, '', '', '', '', '', '', '460 SOMWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9423826533', '', 185149, 185208, 000885, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(698, 00029538, 415488357, 357, '1024016000455', 'AJAY KALE AND ASSOCIATES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AJAY KALE AND ASSOCIATES', '', '428  SOMWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8275456287', '', 186466, 186525, 000455, '2023-08-24', 24, 0, '', '5', '', '', NULL),
(699, 00029528, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 570526, 570540, 000349, '2023-08-24', 24, 0, '', '2', '', '', NULL),
(700, 00029529, 415488352, 352, '1001005684083', 'SHABANA ABDUL PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  WAGHERI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '7559321143', '', 591453, 591467, 684083, '2023-08-24', 24, 0, '', '3', '', '', NULL),
(701, 00029530, 415488352, 352, '1001005684016', 'SANJAY VITTHAL DHUMAL', 01, 'Y', 015, 10, '', 'SARIKA SANJAY DHUMAL', '', '', '', '', '246 68 3 A P  MALKAPUR', 'SHASTRINAGAR ROAD NEAR RIMAND HOME  ', 'TAL  KARAD  DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9604058011', '', 591468, 591482, 684016, '2023-08-24', 24, 0, '', '4', '', '', NULL),
(702, 00029527, 415488352, 352, '1001005053896', 'ASHVINI RAJESH BADRAYANI', 01, 'Y', 030, 10, '', '', '', '', '', '', '346 1  MADHURYA HERITAGE', 'SOMWAR PETH  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '8605598805', '', 591423, 591452, 053896, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(703, 00029531, 415488352, 352, '1001005058802', 'SHIRISH VASANT BAGADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SURABHI HIGHTES APARTMENT', '86 SHANIWAR PETH SATARA', '', '', '', 'SATARA', '', '', '', 415002, '', '', '9850987550', '', 591483, 591512, 058802, '2023-08-24', 24, 0, '', '5', '', '', NULL),
(704, 00029532, 415488354, 354, '1006005009517', 'SATISH PANDURANG JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SAIDAPUR VIDYANAGAR', 'NEAR ENGG COLLEGE', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '', '', 197012, 197026, 009517, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(705, 00029533, 415488354, 354, '1006005007173', 'DIPAK UTTAMRAO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHIVAJI CHOWK  SAIDAPUR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9890148155', '', 197027, 197041, 007173, '2023-08-24', 24, 0, '', '2', '', '', NULL),
(706, 00029542, 415488358, 358, '1026005004628', 'SURAJ SADASHIV BHOSALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'M FULE NAGAR BUDHAWARPETH', 'KARAD', 'MOB 9762273831', '', '', 'KARAD', '', '', '', 415110, '', '', '8805188049', '', 075947, 075961, 004628, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(707, 00029543, 415488201, 201, '1032005041896', 'IQBAL ASHRAF MEMAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'KHATIK GALLI', 'BAZAR PETH  CHIPLUN', 'TAL  CHIPLUN  DIST  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9923485786', '', 186001, 186030, 041896, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(708, 00029544, 415488201, 201, '1032005003134', 'BABURAO LAXMAN AKHADE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'C O  VISHNU LAXMAN AKHADE', 'SHOP NO 36  GROUND FLOOR', 'PATEL PLAZA  CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '02372-', '02372-', '8888954438', '', 186031, 186090, 003134, '2023-08-24', 24, 0, '', '2', '', '', NULL),
(709, 00029545, 415488359, 359, '1037106000100', 'NIKHIL CHANDRAKANT SANKPAL', 01, 'Y', 060, 13, '', '', '', '', '', '', 'H 301 GULISTAN COMPOUND  CHIRAG NAGAR PO', 'L B S  MARG  POLICE LINE  GHATKOPAR WEST', 'MUMBAI  TAL DIST   MUMBAI', '', '', 'MUMBAI', '', '', '', 400086, '', '', '8390300288', '', 133861, 133920, 000100, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(710, 00029546, 415488356, 356, '1011016001015', 'PRASAD CONSTRUCTION', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MANOJ PANDURANG TIBE', '', 'AHILYA NAGAR ', 'MALKAPUR  KARAD ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415519, '02164-', '02164-', '9545139402', '', 448936, 448950, 001015, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(711, 00029547, 415488356, 356, '1011016001015', 'PRASAD CONSTRUCTION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'MANOJ PANDURANG TIBE', '', 'AHILYA NAGAR ', 'MALKAPUR  KARAD ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415519, '02164-', '02164-', '9545139402', '', 448951, 448980, 001015, '2023-08-24', 24, 0, '', '2', '', '', NULL),
(712, 00029567, 415488354, 354, '1006005158752', 'SHUBHANGI DIPAK YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  WAGHERI', 'KANASE MALA', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9096758959', '', 197042, 197056, 158752, '2023-08-24', 24, 0, '', '1', '', '', NULL),
(713, 00029624, 415488514, 514, '1073016000022', 'KRUSHIDHAN AGRO SERVICES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'KRUSHIDHAN AGRO SERVICES', '', 'A   P   PUSESAVALI', 'KARAD ROAD', 'TAL   KHATAV DIST   SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '7387391441', '', 000301, 000315, 000022, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(714, 00029625, 415488514, 514, '1073016000023', 'SAIRAJ ELECTRICALS WORKS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SAIRAJ ELECTRICALS WORKS PRO SHANKA', '', 'A P   PUSESAWALI GAT NO  833 ', 'TAL   KHATAV ', 'DIST   SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '8652145331', '', 000316, 000330, 000023, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(715, 00029627, 415488514, 514, '1073005000053', 'BHIMRAO RAMCHANDRA MANDAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  PUSESAWALI  ', 'TAL  KHATAV ', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9922615474', '', 000106, 000120, 000053, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(716, 00029623, 415488512, 512, '1052005003975', 'KISHOR BALU SATHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   MHOPRE ', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '7821010454', '', 057631, 057645, 003975, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(717, 00029622, 415488359, 359, '1037005005742', 'JAYASHRI HARIVIJAY KUMBHAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '406  MATRUCHHAYA ', 'RAVIVAR PETH  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822243070', '', 138062, 138091, 005742, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(718, 00029621, 415488201, 201, '1032005002563', 'UJWALA GAUTAM JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PAG BAUDDHA COLONY OPP', 'SEETA LODGE CHIPLUN', 'RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9890338074', '', 186091, 186105, 002563, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(719, 00029604, 415488358, 358, '1026005001615', 'LAXMAN JOTIRAM PANDHARPATTE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'INDRAPRASTHA COLONY ', 'AGASHIVNAGAR MALKAPUR ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9860264470', '', 075962, 076021, 001615, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(720, 00029619, 415488357, 357, '1024005041979', 'AMEY MAHESH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 96  WEST GAJANAN HOU SOC', 'NEAR GANPATI TEMPLE  GOVARE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9665643364', '', 185314, 185328, 041979, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(721, 00029620, 415488357, 357, '1024005042002', 'UMESH SANJAY WATEGAONKAR', 01, 'Y', 060, 10, '', '', '', '', '', '', '19 RUKMININAGAR', 'NEAR SHREE HOSPITAL', 'KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8308151199', '', 185329, 185388, 042002, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(722, 00029617, 415488505, 505, '1012005001528', 'SHANKAR YASHWANT MOLAWADE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P   MOLAWADEWADI ', 'KUTHARE ', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '', '02372-', '9881984817', '', 098121, 098180, 001528, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(723, 00029616, 415488505, 505, '1012005001173', 'PANDURANG VITTHAL PANASKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PLOT NO 10 JAGATAP WADI SHAHUNAGR', 'GODOLI SATARA', 'GODOLI  SATARA', '', '', 'SATARA', '', '', '', 415001, '02162-22', '02162-', '9422038648', '', 098091, 098120, 001173, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(724, 00029618, 415488505, 505, '1012005015400', 'PRIYANKA DIPTIRAJ BHOSALE', 01, 'Y', 015, 10, '', 'DIPTIRAJ SAMBHAJI BHOSALE', '', '', '', '', 'A P GARVADE ', 'TAL PATAN ', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '7387951100', '', 098181, 098195, 015400, '2023-08-25', 24, 0, '', '3', '', '', NULL),
(725, 00029615, 415488356, 356, '1011102000135', 'SHREERAM PETROLEUM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ANANDA SOPAN KHABALE', '', 'KARAD DHEBEWADI ROAD  ', 'A P  WING  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415122, '', '', '9422050241', '', 446957, 447016, 000135, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(726, 00029614, 415488355, 355, '1007005034490', 'ALLISAB DASTAGEER NADAF', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VARUNJI', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9370124774', '', 123466, 123480, 034490, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(727, 00029613, 415488501, 501, '1004005010090', 'PRASAD GAJANAN KHEDKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MASUR', '', '', '', '', 'KARAD', '', '', '', 415106, '', '', '', '', 151006, 151020, 010090, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(728, 00029612, 415488501, 501, '1004005006631', 'MAHENDRA GOVINDJI DHARAMSI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '52367', '', '9422404469', '', 150976, 151005, 006631, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(729, 00029610, 415488353, 353, '1002016001990', 'BADIYANI STEEL  PATNER', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '743 HOTEL ANPURNA P B', 'ROAD GOTE TAL KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164222', '', '9421118759', '', 622202, 622261, 001990, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(730, 00029611, 415488353, 353, '1002005849217', 'NIYAZ JAHANGIR MULANI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P TALBID ', '134 NEAR SMRAK', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9922000012', '', 611026, 611085, 849217, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(731, 00029609, 415488352, 352, '1001005067165', 'RAMESHWARI CHANDRAKANT PANDIT', 01, 'Y', 060, 10, '', '', '', '', '', '', '172 SHANIWAR PETH', 'MULIK CHOUK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9552003969', '', 591603, 591662, 067165, '2023-08-25', 24, 0, '', '5', '', '', NULL),
(732, 00029605, 415488352, 352, '1001005056464', 'SUNIL BHAGWAN MULE', 01, 'Y', 030, 10, '', '', '', '', '', '', '234 RAVIWAR PETH', 'KHALACHI BHOI GALLI  KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9860881104', '', 591513, 591542, 056464, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(733, 00029606, 415488352, 352, '1001005060992', 'BHIMRAO YANKAPPA SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST KESE PADLI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9011074392', '', 591543, 591572, 060992, '2023-08-25', 24, 0, '', '2', '', '', NULL),
(734, 00029607, 415488352, 352, '1001005680931', 'PRASHANT UTTAM JATKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'WARD NO 5 ', 'MAHATMA PHULE NAGAR ', 'A P  JAT TAL  JAT DIST  SANGLI', '', '', 'SANGLI', '', '', '', 416404, '', '', '7420072810', '', 591573, 591587, 680931, '2023-08-25', 24, 0, '', '3', '', '', NULL),
(735, 00029608, 415488352, 352, '1001005067876', 'ASHOK DNYANOBA MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P TALBID', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9324702167', '', 591588, 591602, 067876, '2023-08-25', 24, 0, '', '4', '', '', NULL),
(736, 00029628, 415488357, 357, '1024106000183', 'AVINASH NARSAPPA RANSUBHE', 01, 'Y', 015, 13, '', '', '', '', '', '', 'PLOT NO 1 ', 'PRAKASHANAGAR ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '221465', '', '9422460404', '', 181036, 181050, 000183, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(737, 00029658, 415488512, 512, '1052005004003', 'RAVINDRA SHRIRANG JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST  TASAVADE', 'TAL KARAD DIST SATARA', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9226768495', '', 057646, 057660, 004003, '2023-08-25', 24, 0, '', '1', '', '', NULL),
(738, 00029837, 415488357, 357, '1024005004056', 'VINAYAK SARJERAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', '47 MANGALWAR PETH KARAD', 'INFRONT OF PANDHARICHA MARUTI', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9423962009', '', 185389, 185418, 004056, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(739, 00029838, 415488357, 357, '1024005004255', 'YOGITA ASHOK SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', '24 10 CHNADRAKAMAL  ', 'RUKMINI GARDEN PART 2  ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9309198599', '', 185419, 185433, 004255, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(740, 00029839, 415488357, 357, '1024016000315', 'M/S PARSHWA CONTRACTOR   PRO. SANJAY  BABULAL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANJAY BABULAL OSWAL', '', '18 ', 'SHIVAJI CLOTH MARKET BUDHWAR PETH KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164223', '', '9890284444', '', 186556, 186615, 000315, '2023-08-28', 24, 0, '', '3', '', '', NULL),
(741, 00029822, 415488352, 352, '1001005067194', 'BHALCHANDRA VIJAY SHROTRI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'FLAT NO 8 GANRJ SOCIETY SHIVAJI ROAD', 'NEAR DAGDUSHETH HALWAI TEMPLE', 'BUDHWAR PETH PUNE', '', '', 'PUNE', '', '', '', 411002, '', '98606672', '7350084882', '', 591783, 591842, 067194, '2023-08-28', 24, 0, '', '9', '', '', NULL),
(742, 00029821, 415488352, 352, '1001016006587', 'SHRI SAIRAM HARDWARE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANJAY SAMBHAJIRAO PAWAR', '', 'SHRI SAIRAM HARDWARE  PLOT NO 56 A', 'NEAR BIROBA TEMPEL', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7588865157', '', 569146, 569205, 006587, '2023-08-28', 24, 0, '', '8', '', '', NULL),
(743, 00029814, 415488352, 352, '1001005058102', 'AMAR BABANRAO BHOKARE', 01, 'Y', 030, 10, '', '', '', '', '', '', '226 RAVIWAR PETH ', 'BHOI GALLI  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9823842149', '', 591663, 591692, 058102, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(744, 00029815, 415488352, 352, '1001005684386', 'DHANAJI VILAS MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  BELAWADE BUDRUK', 'NEAR NAGRAJ TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8390717499', '', 591693, 591707, 684386, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(745, 00029816, 415488352, 352, '1001005684386', 'DHANAJI VILAS MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  BELAWADE BUDRUK', 'NEAR NAGRAJ TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8390717499', '', 591708, 591722, 684386, '2023-08-28', 24, 0, '', '3', '', '', NULL),
(746, 00029817, 415488352, 352, '1001005685138', 'CHAITANYA AUDUMBAR WANGIKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '241   B   SOMWAR PETH', 'LAXMI NURSINGH MANDIR JAVAL', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8530099549', '', 591723, 591737, 685138, '2023-08-28', 24, 0, '', '4', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(747, 00029818, 415488352, 352, '1001005685139', 'AMRUTA AUDUMBAR WANGIKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '241 B SOMWAR PETH ', 'NEAR LAXMI NRUSINGH MANDIR ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 591738, 591752, 685139, '2023-08-28', 24, 0, '', '5', '', '', NULL),
(748, 00029819, 415488352, 352, '1001005068176', 'SHAMSHAD RAJAMAHAMAD PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', '65 NEAR JYOTIBA MANDIR ', 'MANGALWAR PETH KARAD ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9022101762', '', 591753, 591767, 068176, '2023-08-28', 24, 0, '', '6', '', '', NULL),
(749, 00029820, 415488352, 352, '1001005009989', 'ANISA MUNIR PATEL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR NEW PRANT OFFICE  OLD THANA NAKA RO', 'AKASHDEEP BUILDING  PLOT NO  58 4  ROOM ', 'PANVEL  RAIGARH  MAHARASHTRA', '', '', 'PANVEL', '', '', '', 410206, '022-', '022-', '9421571806', '', 591768, 591782, 009989, '2023-08-28', 24, 0, '', '7', '', '', NULL),
(750, 00029828, 415488353, 353, '1002016001999', 'JEEVAN MEDICALS AND GEN.STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '322703   JEEVAN MEDICALS AND GEN.ST', '', 'AT PO TALBID TAL KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '258289', '', '9850065521', '', 622352, 622411, 001999, '2023-08-28', 24, 0, '', '6', '', '', NULL),
(751, 00029827, 415488353, 353, '1002005044026', 'ABHAY BAPURAO MOHIRE', 01, 'Y', 030, 10, '', '', '', '', '', '', '240 C SHANIWAR PETH ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 321146, '', '', '', '', 611116, 611145, 044026, '2023-08-28', 24, 0, '', '5', '', '', NULL),
(752, 00029826, 415488353, 353, '1002005031772', 'DHANAJI VILAS MOHITE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  BELAWADE BUDRUK', 'NEAR NAGRAJ TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8390717499', '', 611086, 611115, 031772, '2023-08-28', 24, 0, '', '4', '', '', NULL),
(753, 00029823, 415488353, 353, '1002016003091', 'DIAMOND RICE MILL', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SAGAR KISHIRBHAI KENIYA', 'RAJESH ZUMBARLAL SHAH', 'A P  VIJAYNAGAR   GATE NO 117', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9423866729', '', 622262, 622291, 003091, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(754, 00029824, 415488353, 353, '1002016003091', 'DIAMOND RICE MILL', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SAGAR KISHIRBHAI KENIYA', 'RAJESH ZUMBARLAL SHAH', 'A P  VIJAYNAGAR   GATE NO 117', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9423866729', '', 622292, 622321, 003091, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(755, 00029825, 415488353, 353, '1002016003091', 'DIAMOND RICE MILL', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SAGAR KISHIRBHAI KENIYA', 'RAJESH ZUMBARLAL SHAH', 'A P  VIJAYNAGAR   GATE NO 117', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9423866729', '', 622322, 622351, 003091, '2023-08-28', 24, 0, '', '3', '', '', NULL),
(756, 00029829, 415488501, 501, '1004016000281', 'KALYANI SALES PROP SANDEEP JAGANNATH NALGUNE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANDEEP JAGANNATH NALGUNE', '', 'NEAT ST STAND', 'A P  MASUR', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '9881813407', '', 150287, 150346, 000281, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(757, 00029830, 415488502, 502, '1005106000165', 'DIPAK ANANDRAO MANE', 01, 'Y', 060, 13, '', '', '', '', '', '', 'NEAR HIGH SCHOOL', 'A P  CHAREGAON', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9822548556', '', 270346, 270405, 000165, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(758, 00029831, 415488502, 502, '1005106000165', 'DIPAK ANANDRAO MANE', 01, 'Y', 060, 13, '', '', '', '', '', '', 'NEAR HIGH SCHOOL', 'A P  CHAREGAON', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9822548556', '', 270406, 270465, 000165, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(759, 00029832, 415488354, 354, '1006005158609', 'KIRAN ADHIKRAO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR GRAMPANCHAYAT', 'A P  SAIDAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9767163077', '', 197057, 197071, 158609, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(760, 00029833, 415488505, 505, '1012005000879', 'SANJAYKUMAR VILASHRAO NIKAM', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  URUL', 'TAL  PATAN', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '8975064901', '', 098196, 098255, 000879, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(761, 00029834, 415488505, 505, '1012005001858', 'NAVNATH ATMARAM CHINCHKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P MARUTI MANDIRA SHEJARI  MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9822071721', '', 098256, 098285, 001858, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(762, 00029835, 415488505, 505, '1012016000377', 'VAIBHAVI BHARAT GAS AGENCY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'AT   PANASKARWADI PO   MALHARPETH', 'MARUTI MANDIRA JAVAL', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9890765508', '', 101056, 101070, 000377, '2023-08-28', 24, 0, '', '3', '', '', NULL),
(763, 00029836, 415488509, 509, '1020016000129', 'PANCHRATNA DUDH SANKALAN KENDRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DILIP ANNA THORAT', '', 'MILKAT NO 310', 'A P KALAVADE', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9049778959', '', 058773, 058832, 000129, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(764, 00029813, 415488358, 358, '1026005000987', 'BAJARANG SHAMARAV JAGTAP', 01, 'Y', 030, 10, '', 'TRISHALA BAJARANG JAGTAP', '', '', '', '', '', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '9823335172', '', 076022, 076051, 000987, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(765, 00029843, 415488514, 514, '1073016000024', 'V D KADAM', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'V D KADAM PRO VIKRAMSHIL DYANDEO KA', '', 'A P   PUSESAWALI ', 'D P KADAM COMPLEX  DATTA CHOUK ', 'TAL   KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9730687777', '', 000331, 000345, 000024, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(766, 00029844, 415488514, 514, '1073016000025', 'SHRI LAXMI VISHNU TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SHRI LAXMI VISHNU TRADERSPRO SANJAY', '', 'S NO 1812   PUSESAWALI', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '7058816583', '', 000346, 000360, 000025, '2023-08-28', 24, 0, '', '2', '', '', NULL),
(767, 00029866, 415488352, 352, '1001005685142', 'KAVITA SANDEEP PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '405 A  SOMWAR PETH', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9823287810', '', 591843, 591857, 685142, '2023-08-28', 24, 0, '', '1', '', '', NULL),
(768, 00029919, 415488515, 515, '1071005000113', 'VIKRAM NILKANTH SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P JINTI TAL PATAN', 'JINTI', '', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9860772008', '', 000376, 000390, 000113, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(769, 00029918, 415488512, 512, '1052005002757', 'BABAN BANDU WAGHAMARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   TASWADE', 'POST UMBRAJ', 'TAL   KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9021319304', '', 057661, 057675, 002757, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(770, 00029915, 415488359, 359, '1037005001640', 'TANAJI BABURAO PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'DIMOND HOUSE TRIMUTI', 'COLONY KARVE NAKA KARAD', '', '', '', 'KARAD', '', '', '', 415110, '225134', '', '9312634377', '', 138092, 138106, 001640, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(771, 00029916, 415488359, 359, '1037005007363', 'ABASAHEB PANDURANG SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KESE TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9422600734', '', 138107, 138121, 007363, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(772, 00029917, 415488359, 359, '1037005004326', 'SHWETA VILAS RAO', 01, 'Y', 015, 10, '', '', '', '', '', '', '389 3 OPP KARVE NAKA', 'SHANIWAR PETH  KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9096934628', '', 138122, 138136, 004326, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(773, 00029914, 415488201, 201, '1032005001233', 'PANDIRAJ MADURAI MUTTU PILLAI', 01, 'Y', 030, 10, '', 'MAHESHWARI PANDIRAJ PILLAI', '', '', '', '', 'EVERSHINE APARTMENT  ', 'FLAT NO113  BAHADUR SHAIKH NAKA  ', 'A P  CHIPLUN  TAL  CHIPLUN  DIST  R', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9325053262', '', 186106, 186135, 001233, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(774, 00029912, 415488201, 201, '1032102000033', 'M/S WARWATKAR AND  COMPANY', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PARTNER- WARWATKAR M S', 'WARWATKAR S M', '1877 A  RANGOBA SABLE PATH', 'BAZARPETH CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI 415605', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9422052292', '', 186257, 186316, 000033, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(775, 00029913, 415488201, 201, '1032016000078', 'YASHWANT SAHAKARI TALUKA KHAREDI VIKRI SANGH ', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANDIP ARUN NARAKE', 'DAULATRAO GANPATRAO PATIL', '612 B E WARD  ANANDI CHEMBERS', 'SHAHUPURI 2ND LANE', 'KOLHAPUR', '', '', 'KOLHAPUR', '', '', '', 416001, '0231-265', '0231-', '8600025418', '', 188656, 188715, 000078, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(776, 00029893, 415488358, 358, '1026005251541', 'DIPALI GANESH PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '375  DIVATE GALLI ', 'RAWIWAR PETH KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9561907345', '', 076052, 076066, 251541, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(777, 00029894, 415488358, 358, '1026005000656', 'PARSHURAM ISHWR MALI', 01, 'Y', 015, 10, '', 'JAYASHRI PARSHURAM MALI', '', '', '', '', 'GOWARE TAL KARAD', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '9881179363', '', 076067, 076081, 000656, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(778, 00029909, 415488357, 357, '1024005001627', 'SANTOSH PANDHARINATH KOLI', 01, 'Y', 030, 10, '', 'KOLI VIMAL PANDHARINATH', 'KOLI CHANDRKANT PANDARINATH', '', '', '', '124 SOMWAR PETH', 'SAISHWAR SANKUL', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9822822184', '', 185434, 185463, 001627, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(779, 00029911, 415488357, 357, '1024005004056', 'VINAYAK SARJERAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', '47 MANGALWAR PETH KARAD', 'INFRONT OF PANDHARICHA MARUTI', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9423962009', '', 185479, 185508, 004056, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(780, 00029910, 415488357, 357, '1024005041065', 'SANTOSH BALASAHEB KONDHALKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MAITRI PARK 825 ', 'WAKHAN ROAD  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9763975133', '', 185464, 185478, 041065, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(781, 00029908, 415488509, 509, '1020102000155', 'VIJAY MADHUKAR DESHMANE', 01, 'Y', 060, 13, '', '', '', '', '', '', 'SHIVAJI CHOWK KALE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415104, '', '', '9665717309', '', 056326, 056385, 000155, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(782, 00029905, 415488356, 356, '1011005004473', 'SANTOSH BABURAO LOKHANDE', 01, 'Y', 060, 10, '', 'RESHMA SANTOSH LOKHANDE', '', '', '', '', 'A P MALKAPUR AGASHIVNAGAR', 'AYODHYA NAGARI', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '7350667284', '', 448277, 448336, 004473, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(783, 00029906, 415488356, 356, '1011005009149', 'MOHAN SHANKAR MULE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MALKAPUR ', 'SHASTRI NAGAR VIR LINE ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9860856212', '', 448337, 448351, 009149, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(784, 00029907, 415488356, 356, '1011005002756', 'RAMCHANDRA NAMDEO PATIL', 01, 'Y', 015, 10, '', 'VIJAYMALA RAMCHANDRA PATIL', '', '', '', '', 'NEAR N H4 HIGHWAY  126  KHANDOBANAGAR ', 'ANUKSHA ADAKRUSHAN COLONY MALKAPUR  KARA', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9422601227', '', 448352, 448366, 002756, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(785, 00029902, 415488355, 355, '1007005030037', 'YASHWANT LAXMANSA KALBURGI', 01, 'Y', 030, 10, '', '', '', '', '', '', '158 B RAVIWAR PETH KARAD', '11 NO SHALE SAMOR KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '90218108', '', '9326710919', '', 123481, 123510, 030037, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(786, 00029903, 415488355, 355, '1007005032060', 'ARCHANA AVINASH BHOKARE', 01, 'Y', 015, 10, '', 'AVINASH JANARDHAN BHOKARE', '', '', '', '', 'NEAR ARUN JADHAV BANGALOW OMKAR ', '11 B SHAHIR YADAV NAGAR  SURVE MALA ROAD', '', '', '', 'KARAD', '', '', '', 415110, '326163', '', '9096725757', '', 123511, 123525, 032060, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(787, 00029904, 415488355, 355, '1007016030343', 'MARK DRESSES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '41 2 ', 'RAVIWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9158296624', '', 124426, 124485, 030343, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(788, 00029901, 415488354, 354, '1006102000065', 'REAL MICRO METALICS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'JAYESH PRAKASH HEREKAR', '', 'A P BANAWADI M NO 887 ', 'TAL KARAD  DIST SATARA', 'KARAD', '', '', 'KARAD', '', '', '', 410115, '', '02164-', '9225312565', '', 190651, 190710, 000065, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(789, 00029899, 415488501, 501, '1004005010056', 'MANISHA JEETENDRA NIKAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  MASUR', 'SHIVAJI NAGAR  NAVIN GAOTHAN', 'TAL KARAD  DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '8055657074', '', 151021, 151035, 010056, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(790, 00029900, 415488501, 501, '1004005005916', 'SHRINIWAS MARUTI PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SHIRWADE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '', '', '', 151036, 151050, 005916, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(791, 00029898, 415488353, 353, '1002005849753', 'DILIP KASHINATH THORAT', 01, 'Y', 030, 10, '', '', '', '', '', '', 'THORAT MALA MALAKAPUR', 'TAL KARAD DIST SATARA ', 'M 9822204150 DOB 2 6 073', '', '', 'KARAD', '', '', '', 415539, '', '', '9822204150', '', 611146, 611175, 849753, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(792, 00029895, 415488352, 352, '1001103000135', 'MAHESH SARJERAO SHINDE', 01, 'Y', 030, 13, '', 'SARJERAO SHAMRAO SHINDE', 'ONKAR MAHESH SHINDE', '', '', '', 'A P   SUPANE', '581 NAVIN GAVTHAN', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '9421928913', '', 570541, 570570, 000135, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(793, 00029896, 415488352, 352, '1001005059482', 'VISHWANATH NANU MAHANGADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P PASARANI KOLAN', 'TAL WAI DIST SATARA', '', '', '', 'SATARA', '', '', '', 412803, '', '02162-', '9689153223', '', 591858, 591887, 059482, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(794, 00029897, 415488352, 352, '1001005051718', 'PRAVIN VITTHAL BHOKARE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'WAKHAN RAOD NAR URBAN BANK ', 'SHRIRAM PRESTIGE  MANGALWAR PETH   KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9175376666', '', 591888, 591917, 051718, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(795, 00029963, 415488356, 356, '1011005035500', 'ARCHANA SURAJ THORAT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'CHOUGULE MALA', 'A P KALE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415104, '', '', '7083150811', '', 448367, 448381, 035500, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(796, 00030007, 415488515, 515, '1071005000119', 'VIKAS TANAJI AVGHADE', 01, 'Y', 015, 10, '', 'SANTOSH TANAJI AVAGHADE', '', '', '', '', 'MATANG WASTI   A P MANDRUL KOLE', 'TAL PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '', '02372-', '9168574591', '', 000391, 000405, 000119, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(797, 00030091, 415488515, 515, '1071016000011', 'JOTIRLING PASHU KHADYA TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'RAJKUMAR SAMBHAJI PATIL', '', 'A P   TALMAVALE ', 'KARAD DHEBEWADI ROAD  ', 'TAL   PATAN DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '7350592576', '', 000257, 000271, 000011, '2023-08-29', 24, 0, '', '1', '', '', NULL),
(798, 00030092, 415488515, 515, '1071016000012', 'SHRI JYOTIRLING METALS AND FURNITURE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SACHIN DADU KALUGADE', '', 'A  P   TALMAVALE ', 'SHOP NO  361 KHALE PHATA ', 'TAL   PATAN  DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9673159846', '', 000272, 000286, 000012, '2023-08-29', 24, 0, '', '2', '', '', NULL),
(799, 00030093, 415488515, 515, '1071005000103', 'SAKHARAM SITARAM SUPUGADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   TAIGADEWADI  TALMAWALE', 'OPP KARAD URBAN BANK  ', 'TAL   PATAN DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '7798272728', '', 000406, 000420, 000103, '2023-08-29', 24, 0, '', '3', '', '', NULL),
(800, 00030094, 415488515, 515, '1071005000104', 'SANDEEP RAJARAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KUTHARE', 'NEAR MALAWAR VASTI', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9158146232', '', 000421, 000435, 000104, '2023-08-29', 24, 0, '', '4', '', '', NULL),
(801, 00030095, 415488515, 515, '1071005000106', 'VARSHARANI UTTAM PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  KUSUR', 'NEAR BIROBA MANDIR', 'TAL PATAN  DIST SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '8177971108', '', 000436, 000450, 000106, '2023-08-29', 24, 0, '', '5', '', '', NULL),
(802, 00030174, 415488514, 514, '1073016000026', 'AMBIKA COLLECTION', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AMBIKA COLLECTION PRO DINESHSINGH S', '', 'GAT NO 770   KARAD ROAD', 'NEAR KARAD URBAN BANK  PUSESAWLI', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9823383391', '', 000361, 000375, 000026, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(803, 00030175, 415488514, 514, '1073016000027', 'NILESH AUTOMOBILES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'NILESH AUTOMOBILES PRORAJENDRA GANG', '', 'AT PO   PUSESAWALI', 'MILKAT NO 482 8', 'TAL   KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '07775876', '2355-', '7775876611', '', 000376, 000390, 000027, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(804, 00030176, 415488514, 514, '1073005000146', 'RAMESH SHRIRANG MALAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  WANJARWADI   PO  PUSESAWALI', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9172755266', '', 000121, 000135, 000146, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(805, 00030173, 415488512, 512, '1052106000015', 'SHRIDHAR LAXMAN JOSHI', 01, 'Y', 015, 13, '', '', '', '', '', '', '265 A DHANWANTARI APARTMENT', 'SOMWAR PETH KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '7020536598', '', 056056, 056070, 000015, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(806, 00030170, 415488359, 359, '1037016000267', 'SHRI AVDHUT INDUSTRIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'RAJ ARCADE GALA NO 4', 'MARKET YARD RETHAREKAR COLONY', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7558711711', '', 136396, 136455, 000267, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(807, 00030171, 415488359, 359, '1037016000267', 'SHRI AVDHUT INDUSTRIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'RAJ ARCADE GALA NO 4', 'MARKET YARD RETHAREKAR COLONY', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7558711711', '', 136456, 136515, 000267, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(808, 00030172, 415488359, 359, '1037103000025', 'RANJEET DHONDIRAM SHIRKE', 01, 'Y', 015, 13, '', 'DHONDIRAM MAHADEO SHIRKE', 'VILAS MAHADEV SHIRKE', '', '', '', 'AT POST NANDLAPUR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011910532', '', 133921, 133935, 000025, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(809, 00030156, 415488201, 201, '1032005042442', 'SAPANA MALLIKARJUN PUJARI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'MALIVADI   CHIPLUN', 'PEDHE', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9673239975', '', 186136, 186195, 042442, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(810, 00030157, 415488201, 201, '1032005043046', 'VEERDHAVAL SITARAM GHAG', 01, 'Y', 060, 10, '', '', '', '', '', '', 'DHAWAL CHAYA BANGLOW  ', 'RAM GANESH GADAKARI PATH  RAM MARUTI ROA', 'TALAV PALI THANE', '', '', 'THANE', '', '', '', 400601, '02225426', '', '9870066908', '', 186196, 186255, 043046, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(811, 00030159, 415488201, 201, '1032016000785', 'SAPNA ENTERPRISES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SAPNA ENTERPRISES', '', 'VAISHNA VIHAR   BLOCK NO 101', 'VINDHYAVASINI ROAD   NEAR MEHATA PETROL ', 'RAOTALE   CHIPLUN   RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9422431571', '', 188716, 188775, 000785, '2023-08-30', 24, 0, '', '4', '', '', NULL),
(812, 00030158, 415488201, 201, '1032005000304', 'ISHWAR YASHWANT MANKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '101  GOVARDHAN APARTMENT ', 'CHITALEWADA KHEND CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9175022169', '', 186256, 186285, 000304, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(813, 00030160, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 030, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 186286, 186315, 042692, '2023-08-30', 24, 0, '', '5', '', '', NULL),
(814, 00030161, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 030, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 186316, 186345, 042692, '2023-08-30', 24, 0, '', '6', '', '', NULL),
(815, 00030162, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 030, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 186346, 186375, 042692, '2023-08-30', 24, 0, '', '7', '', '', NULL),
(816, 00030163, 415488201, 201, '1032005042692', 'RAJARAM BABU MATE', 01, 'Y', 030, 10, '', 'VANITA RAJARAM MATE', '', '', '', '', 'TAMBAD WADI KAMATHE', 'CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355-25', '02355-', '8625810050', '', 186376, 186405, 042692, '2023-08-30', 24, 0, '', '8', '', '', NULL),
(817, 00030164, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188776, 188805, 000452, '2023-08-30', 24, 0, '', '9', '', '', NULL),
(818, 00030165, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188806, 188835, 000452, '2023-08-30', 24, 0, '', '10', '', '', NULL),
(819, 00030166, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188836, 188865, 000452, '2023-08-30', 24, 0, '', '11', '', '', NULL),
(820, 00030167, 415488201, 201, '1032016000452', 'M/S RAHUL SOHAN MEDICAL STORES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'DESAI PLAZA GALA NO 4', 'CHIPLUN 252253', 'PAN NO   ABDPM1331L', '', '', 'CHIPLUN', '', '', '', 415605, '320659', '', '9028480744', '', 188866, 188895, 000452, '2023-08-30', 24, 0, '', '12', '', '', NULL),
(821, 00030168, 415488201, 201, '1032016000700', 'M/S RAHUL SOHAN AYURVED AUSHADHALAY', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VANITA RAJARAM MATE', '', 'SHOP NO 17  DESAI PLAZA', 'KARAD ROAD  CHINCHNAKA', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9028480744', '', 188896, 188925, 000700, '2023-08-30', 24, 0, '', '13', '', '', NULL),
(822, 00030169, 415488201, 201, '1032016000700', 'M/S RAHUL SOHAN AYURVED AUSHADHALAY', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VANITA RAJARAM MATE', '', 'SHOP NO 17  DESAI PLAZA', 'KARAD ROAD  CHINCHNAKA', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9028480744', '', 188926, 188955, 000700, '2023-08-30', 24, 0, '', '14', '', '', NULL),
(823, 00030128, 415488358, 358, '1026103000009', 'RIYAJ KUSRUDDIN BHALDAR', 01, 'Y', 030, 13, '', '', '', '', '', '', '32 MANGALWAR PETH', 'NEAR JOTIBA MANDIR', ' KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9422400150', '', 072196, 072225, 000009, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(824, 00030153, 415488357, 357, '1024005002356', 'VIDYA SIDHARTH PATIL', 01, 'Y', 015, 10, '', 'SIDDHART RAGHUNATH PATIL', '', '', '', '', 'KRUSHNAKAMAL COLLEGE ROAD', 'NEAR URBAN BAZAR VIDYNAGAR', 'DIST SATARA 9822596122', '', '', 'KARAD', '', '', '', 415110, '', '', '8805188011', '', 185509, 185523, 002356, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(825, 00030155, 415488357, 357, '1024005003538', 'DHANAJI BABAN KUMBHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MANGALWAR PETH', 'AKHAN ROAD  GANAVE WASTI', 'KARAD', '', '', 'KARAD', '', '', '', 0, '', '', '7558379391', '', 185524, 185538, 003538, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(826, 00030154, 415488357, 357, '1024103000067', 'SUNIL DNYANDEO JADHAV', 01, 'Y', 060, 13, '', 'SHUBHAM SUNIL JADHAV', '', '', '', '', '115 B RAVIWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9823110444', '', 181051, 181110, 000067, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(827, 00030152, 415488509, 509, '1020016000183', 'MAYUR AGRO AGENCIES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MAYUR SHANKAR PATIL', '', 'A P   KALE  154 CHAUGULE MALA ', 'KARAD CHANDOLI ROAD  NEAR AKASH ROP VATI', 'TAL   KARAD DIST   SATARA', '', '', 'KALE', '', '', '', 415104, '02164-', '02164-', '8087652424', '', 058833, 058847, 000183, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(828, 00030150, 415488355, 355, '1007102000001', 'KRISHNA BHANDI BHANDAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'TAWATE SHAMSUNDAR BALKRISHNAS', 'tavate', 'AT POST   MALKAPUR', 'KARAD MALKAPUR ROAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9850646008', '', 122656, 122715, 000001, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(829, 00030151, 415488355, 355, '1007102000001', 'KRISHNA BHANDI BHANDAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'TAWATE SHAMSUNDAR BALKRISHNAS', 'tavate', 'AT POST   MALKAPUR', 'KARAD MALKAPUR ROAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9850646008', '', 122716, 122775, 000001, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(830, 00030148, 415488354, 354, '1006005009639', 'TANAJI VISHNU SANAP', 01, 'Y', 015, 10, '', 'SANAP VISHNU GANAPATI', '', '', '', '', 'I T I SAIDAPUR TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 0, '', '', '9975645411', '', 197072, 197086, 009639, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(831, 00030149, 415488354, 354, '1006005154715', 'PRIYANKA KRISHNAT NALAWADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P JAKHIWADI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9673006756', '', 197087, 197101, 154715, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(832, 00030144, 415488502, 502, '1005016006251', 'NEW HANDSOME SHOE PALACE', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SUNIL GANPATI KHUSTE', '', 'A P   UMBRAJ YASHWANT COMPLEX', 'P B ROAD  BEHIND BUDHANA URBAN SOCIETY', 'TAL   KARAD DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7058609397', '', 272761, 272790, 006251, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(833, 00030145, 415488502, 502, '1005005298487', 'SARIKA HEMANT JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MANIK CHOUK  ', 'A P  UMBRAJ ', 'TAL KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '264255', '', '9028084699', '', 269617, 269631, 298487, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(834, 00030146, 415488502, 502, '1005005294915', 'CHARUSHILA NANASO JAGDALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'H NO 192 SHIVAJI CHOUK', 'A P  SHIRAWADE  ', 'TAL  KARAD   DIST  SATARA  ', '', '', 'KARAD', '', '', '', 415115, '', '02164-', '9765743016', '', 269632, 269646, 294915, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(835, 00030147, 415488502, 502, '1005103000007', 'SUNSHINE COMPUTER ACADEMY', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', 'BEHIND POST OFFICE', 'UMBRAJ TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '264724', '', '7620155416', '', 270466, 270525, 000007, '2023-08-30', 24, 0, '', '4', '', '', NULL),
(836, 00030140, 415488501, 501, '1004005012365', 'BHAUSO PRAKASH KAMBIRE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   KAMBIRWADI  NEAR YADOBA MANDIR', 'POST   MASUR ', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415106, '', '', '9922098266', '', 151051, 151065, 012365, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(837, 00030143, 415488501, 501, '1004005013078', 'GANPATRAO TUKARAM BARKADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '020-', '020-', '8975937892', '', 151066, 151080, 013078, '2023-08-30', 24, 0, '', '4', '', '', NULL),
(838, 00030141, 415488501, 501, '1004102000212', 'SANGITA PRADIP BHANDARE', 01, 'Y', 060, 13, '', 'SHRINIVAS PRADIP BHANDARE', 'PRADIP GANPATI BHANDARE', '', '', '', 'A P MASUR TAL KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9881984329', '', 148261, 148320, 000212, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(839, 00030142, 415488501, 501, '1004102000214', 'SACHIN TANAJI BHOPATE', 01, 'Y', 060, 13, '', 'TANAJI SHRIPATI BHOPATE', '', '', '', '', 'A P KONEGAON', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '7038454810', '', 148321, 148380, 000214, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(840, 00030134, 415488353, 353, '1002016002980', 'MOHIRE TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '240 2 DATT CHOWK ', 'SHANIWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9422605681', '', 622412, 622471, 002980, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(841, 00030137, 415488353, 353, '1002106005279', 'DEEPAK MEDICAL AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DEEPAK MEDICAL AGENCIES', '', 'GC NO 1824 KALIDAS MARKET MARKET 1 ST FL', 'FLAT NO 4  P  B  ROAD  MALKAPUR ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '02164-22', '227968', '9371154429', '', 615470, 615529, 005279, '2023-08-30', 24, 0, '', '4', '', '', NULL),
(842, 00030138, 415488353, 353, '1002016003078', 'AJANTA DEVELOPERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '452 SHANIWAR PETH ', 'TALBHAG KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9922874777', '', 622472, 622531, 003078, '2023-08-30', 24, 0, '', '5', '', '', NULL),
(843, 00030136, 415488353, 353, '1002106005279', 'DEEPAK MEDICAL AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DEEPAK MEDICAL AGENCIES', '', 'GC NO 1824 KALIDAS MARKET MARKET 1 ST FL', 'FLAT NO 4  P  B  ROAD  MALKAPUR ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '02164-22', '227968', '9371154429', '', 615410, 615469, 005279, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(844, 00030135, 415488353, 353, '1002005851273', 'JAYESH RAJENDRA SHAH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR MAHATE ELECTRONIK  ', '660 SARASWATI NIWAS MARKET YARD ', 'SHANIWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8605946808', '', 611176, 611190, 851273, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(845, 00030139, 415488353, 353, '1002005850484', 'ABHIJEET UTTAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR WATER TANK', 'A P  UTTAR TAMBAVE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415119, '', '02164-', '7066433072', '', 611191, 611205, 850484, '2023-08-30', 24, 0, '', '6', '', '', NULL),
(846, 00030129, 415488352, 352, '1001005685146', 'DIGVIJAY PRADEEP PATANKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '285  DHANASHANKARI APAT', 'SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8999797911', '', 591918, 591932, 685146, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(847, 00030130, 415488352, 352, '1001005683139', 'SURESH BABAN SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'D 16 SIDDHARTH CO OP HOUSING SOCITY', 'DATTANAGAR ROAD  NEAR PICT COLLEGE', 'KATRAJ PUNE', '', '', 'PUNE', '', '', '', 411046, '', '', '9373599080', '', 591933, 591947, 683139, '2023-08-30', 24, 0, '', '2', '', '', NULL),
(848, 00030131, 415488352, 352, '1001005020643', 'PRALHAD TUKARAM JATHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '56 SHUKRAWAR PETH KARAD', 'SAMBHAJI CHOUK', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9096525945', '', 591948, 591962, 020643, '2023-08-30', 24, 0, '', '3', '', '', NULL),
(849, 00030132, 415488352, 352, '1001005059431', 'PRAMOD BAJIRAO PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AJINKYANAGER ROAD NO 3', 'EAST SIDE OF PETH M S E B  SUB STATION', 'ISLAMPUR TAL  WALWA  DIST SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '', '', '8830205113', '', 591963, 591992, 059431, '2023-08-30', 24, 0, '', '4', '', '', NULL),
(850, 00030133, 415488352, 352, '1001005683756', 'YASMEEN NIYAJ MUJAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '114  RAVIWAR PETH', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9158372088', '', 591993, 592007, 683756, '2023-08-30', 24, 0, '', '5', '', '', NULL),
(851, 00030178, 415488352, 352, '1001005066537', 'SURESH DATTATRAYA KARANDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P SHALGAON', 'TAL KADEGAON DIST SANGLI', '', '', '', 'SANGLI', '', '', '', 415324, '', '0233-976', '9737930994', '', 592008, 592037, 066537, '2023-08-30', 24, 0, '', '1', '', '', NULL),
(852, 00030230, 415488515, 515, '1071016000013', 'MANE BANDHU JWELLERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'ANANDA TANAJI MANE', '', 'A P  TALMAVALE TAIGADEWADI ', '1 ST FLOOR  98  KARAD DHEBEWADI ROAD', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415103, '02372-', '02372-', '9764105684', '', 000287, 000301, 000013, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(853, 00030229, 415488512, 512, '1052016000175', 'SWAPNAJA COSMOCEUTICALS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'C   29 C   30 TASAWADE MIDC KARAD', 'TAL   KARAD', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9820023867', '', 060256, 060285, 000175, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(854, 00030225, 415488359, 359, '1037102000062', 'BASARAGI KIRANA STORES', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'DHARMARAY VITTHAL BASARGI', 'RAHUL DHARMARAY BASARAGI', '341 A 2 3 B ', 'POSTAL COLONY ', 'KARVE NAKA KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850849187', '', 133936, 133965, 000062, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(855, 00030226, 415488359, 359, '1037102000062', 'BASARAGI KIRANA STORES', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'DHARMARAY VITTHAL BASARGI', 'RAHUL DHARMARAY BASARAGI', '341 A 2 3 B ', 'POSTAL COLONY ', 'KARVE NAKA KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850849187', '', 133966, 133995, 000062, '2023-08-31', 24, 0, '', '2', '', '', NULL),
(856, 00030227, 415488359, 359, '1037102000062', 'BASARAGI KIRANA STORES', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'DHARMARAY VITTHAL BASARGI', 'RAHUL DHARMARAY BASARAGI', '341 A 2 3 B ', 'POSTAL COLONY ', 'KARVE NAKA KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850849187', '', 133996, 134025, 000062, '2023-08-31', 24, 0, '', '3', '', '', NULL),
(857, 00030228, 415488359, 359, '1037102000062', 'BASARAGI KIRANA STORES', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'DHARMARAY VITTHAL BASARGI', 'RAHUL DHARMARAY BASARAGI', '341 A 2 3 B ', 'POSTAL COLONY ', 'KARVE NAKA KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850849187', '', 134026, 134055, 000062, '2023-08-31', 24, 0, '', '4', '', '', NULL),
(858, 00030210, 415488357, 357, '1024016000466', 'SHRI GURUKRUPA ELECTRICALS AND ELECTRONICS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'KRISHNA JAKAT NAKA BULDING ', '252 3 MANGALWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '226924', '', '9850708439', '', 186616, 186645, 000466, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(859, 00030211, 415488357, 357, '1024005042568', 'KAUSTUBH KESHAV SAPKAL', 01, 'Y', 015, 10, '', 'KESHAV PANDURANG SAPKAL', '', '', '', '', 'A   4 PARVTINAGAR', 'VIDYANAGAR SAIDAPUR', 'KARAD', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9145038570', '', 185539, 185553, 042568, '2023-08-31', 24, 0, '', '2', '', '', NULL),
(860, 00030224, 415488505, 505, '1012005015589', 'RAJESH APPASO PANASKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  MALHARPETH  ', 'GANESH CHOUK  ', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9822426456', '', 098286, 098300, 015589, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(861, 00030223, 415488354, 354, '1006005156934', 'SHUBHAM ANANDA LAVAND', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR NANDLAI MANDIR ', 'NANDLAPUR ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '7875866330', '', 197102, 197116, 156934, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(862, 00030222, 415488502, 502, '1005005007098', 'PRATAP RAMCHANDRA YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P CHORE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '9921352293', '', 269647, 269661, 007098, '2023-08-31', 24, 0, '', '4', '', '', NULL),
(863, 00030219, 415488502, 502, '1005016006242', 'SHIVKRUPA TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RAMESH SADASHIV MORKAL', '', 'M NO 782  OLD S T STAND  PATAN ', 'TAL PATAN ', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9921641644', '', 272791, 272850, 006242, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(864, 00030220, 415488502, 502, '1005016006127', 'KAKA SALES AND CORPORATION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PANKAJ HANMANT MORKAL', '', 'A P CHAREGAON MAIN LINE ', 'NEAR MARUTI TEMPLE ', 'TAL KARAD  DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '7798119547', '', 272851, 272910, 006127, '2023-08-31', 24, 0, '', '2', '', '', NULL),
(865, 00030221, 415488502, 502, '1005102000054', 'MS GEETA ENTERPRISES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO-M/S GEETA ENTERPRISES', 'BAJARE MADAN RAMCHANDRA', 'P B ROAD A P  UMBRAJ', 'TAL  KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '8308373266', '', 270526, 270585, 000054, '2023-08-31', 24, 0, '', '3', '', '', NULL),
(866, 00030218, 415488501, 501, '1004106000108', 'TUSHAR ARUN SHINDE', 01, 'Y', 015, 13, '', '', '', '', '', '', 'A P ANTVADI', 'TAL DIST SATARA', '', '', '', 'SATARA', '', '', '', 415106, '', '02162-', '9545764825', '', 148381, 148395, 000108, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(867, 00030214, 415488353, 353, '1002016003056', 'CHAITANYA DISTRIBUTORS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DATTATRYA VITHAL JOSHI', '', '457 2 SNEHA PLAZA  KOLHAPUR NAKA ROAD  ', 'OPP POPATBHAI PETROL PUMP  ', 'SHANIWAR PETH KARAD  ', '', '', 'KARAD', '', '', '', 415110, '', '222105', '9881423443', '', 622532, 622591, 003056, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(868, 00030217, 415488353, 353, '1002016002038', 'POLYFABRIC ENGINEERS KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'POLYFABRIC ENGINEERS KARAD', '', 'S NO 8 2 GOTE PO MUNDHE', 'KARAD AGJPA5623N 30 11 78', '', '', '', 'KARAD', '', '', '', 415110, '222803', '', '9822263492', '', 622592, 622651, 002038, '2023-08-31', 24, 0, '', '4', '', '', NULL),
(869, 00030215, 415488353, 353, '1002005041141', 'AVINASH BABURAO PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P GOTE TAL KARAD', 'DIST SATARA', 'NEAR GARMPANCHYAT', '', '', 'KARAD', '', '', '', 415110, '', '', '9922854580', '', 611206, 611220, 041141, '2023-08-31', 24, 0, '', '2', '', '', NULL),
(870, 00030216, 415488353, 353, '1002102001266', 'MANGHARAM AND CO', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', 'MANGHARAM & CO', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '02164322', '', '9422038443', '', 615530, 615544, 001266, '2023-08-31', 24, 0, '', '3', '', '', NULL),
(871, 00030212, 415488352, 352, '1001005066685', 'PARAG PRADEEP PATHAK', 01, 'Y', 030, 10, '', '', '', '', '', '', 'C O  SR NO 35 A 1  NAKHATE NAGAR', 'RAHATANI PHATA  PIMPARI PUNE', 'PUNE', '', '', 'PUNE', '', '', '', 411017, '0233-', '0233-', '7875658395', '', 592038, 592067, 066685, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(872, 00030213, 415488352, 352, '1001016006702', 'RADHESHYAM MILK AND MILK PRODUCTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DILIP BHALCHANDRA CHANDORKAR', '', 'SR NO 78 2  PRAKASH NAGAR', 'PRAKASH NAGAR ROAD  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9422403112', '', 569206, 569265, 006702, '2023-08-31', 24, 0, '', '2', '', '', NULL),
(873, 00030301, 415488358, 358, '1026016000316', 'KRISHNAKATH FOUNDATION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', '184  SHANIWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9890994467', '', 074191, 074220, 000316, '2023-08-31', 24, 0, '', '1', '', '', NULL),
(874, 00030358, 415488514, 514, '1073005000152', 'RAMCHANDRA PANDURANG MAGAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  VANZOLI  PO  PALASHI', 'TAL KHATAV', 'DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9623279160', '', 000136, 000150, 000152, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(875, 00030359, 415488514, 514, '1073016000028', 'MALAVE FERTILIAZER', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MS MALAVE FERTILIZERS PRO AMOL RAVS', '', '1703 MALAVE FERTILIZER  MAHASURNE ROAD', 'OPP SHRIRAM VIDYALAY  MHASURNE  SATARA', 'SATARA', '', '', 'SATARA', '', '', '', 415538, '02162-', '02162-', '9922797901', '', 000391, 000405, 000028, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(876, 00030355, 415488359, 359, '1037005007445', 'CHAITALI NILESH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A   P   SHERE', 'NEAR TO LAXMI TEMPLE', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '9325939190', '', 138152, 138166, 007445, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(877, 00030356, 415488359, 359, '1037005007226', 'RUPALI MAHENDRA GAVALI', 01, 'Y', 015, 10, '', '', '', '', '', '', '389 10 VIRUPAKSHA ESTAT ', 'SHANIWAR PETH KARVE NAKA ', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8530741816', '', 138167, 138181, 007226, '2023-09-01', 24, 0, '', '4', '', '', NULL),
(878, 00030357, 415488359, 359, '1037005007400', 'DIGVIJAY SAMBHAJI DEVKAR', 01, 'Y', 015, 10, '', 'SAMBHAJI GANPATI DEOKAR', 'MANALI SAMBHAJI DEOKAR', '', '', '', 'PLOT NO 700  SHIVRAJ HOUSING SOCIETY', 'KOYANA VASAHAT MALKAPUR   KARAD', 'TAL   KARAD DIST    SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8208052142', '', 138182, 138196, 007400, '2023-09-01', 24, 0, '', '5', '', '', NULL),
(879, 00030353, 415488359, 359, '1037005007444', 'DIPAK GUNDOPANTH JOSHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KAPIL GOLESHWAR KARVE NAKA', 'KALPATARU COLONY NEAR THORAT HOSPITAL', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '9921191886', '', 138137, 138151, 007444, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(880, 00030354, 415488359, 359, '1037016000342', 'R K AGRO POULTRY FARM', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'ANANDA TUKARAM JAGTAP', 'SHIVAJI TUKARAM JAGTAP', 'GAT NO 1038 WAKHAN ROAD ', 'A P  KODOLI ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9923205555', '', 136516, 136530, 000342, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(881, 00030352, 415488201, 201, '1032016000526', 'CHIPLUN TALUKA SUVARNAKAR NAGARI SAHAKARI PAT', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'SWAMI COMPLEX NO 1 FIRST MALA', 'BAJAR PETH', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '02355260', '', '9420906609', '', 188956, 189015, 000526, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(882, 00030350, 415488201, 201, '1032005002839', 'SUHAS DATTATRAY SHEWADE', 01, 'Y', 030, 10, '', 'SMITA SUHAS SHEVDE', '', '', '', '', 'DATTA LAXMI KRUPA NEW', 'BAHIRI TEMPLES CHIPLUN', 'MO 9420524572    9975104501', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9975104501', '', 186406, 186435, 002839, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(883, 00030351, 415488201, 201, '1032005042337', 'DAYALALJI GOPALAJI SHAHA', 01, 'Y', 030, 10, '', '', '', '', '', '', 'OPP SHREE DATTA AGENCIES ', 'MIRJOLI  CHIPLUN', 'TAL CHIPLUN DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9049817603', '', 186436, 186465, 042337, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(884, 00030330, 415488357, 357, '1024103000026', 'SHRI MAHALAXMI TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', 'MILKAT NO 536 HAJARMACHI SADASHIVGAD ', 'TAL KARD DIST SATARA', 'MOB 9022565827', '', '', 'KARAD', '', '', '', 415110, '', '', '9226894809', '', 181111, 181170, 000026, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(885, 00030331, 415488357, 357, '1024103000026', 'SHRI MAHALAXMI TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', 'MILKAT NO 536 HAJARMACHI SADASHIVGAD ', 'TAL KARD DIST SATARA', 'MOB 9022565827', '', '', 'KARAD', '', '', '', 415110, '', '', '9226894809', '', 181171, 181230, 000026, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(886, 00030332, 415488357, 357, '1024005041282', 'AJIT KAKASO PAWAR', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  CHITALI', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'VADUJ', '', '', '', 415538, '', '02161-', '9561609640', '', 185554, 185613, 041282, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(887, 00030349, 415488505, 505, '1012005014018', 'KIRAN NATHAJI JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'H NO 337  JOTIBA TEMPLE WEST SIDE  ', 'A P  CHOPADI  ', 'TAL  PATAN DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '', '', 098301, 098330, 014018, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(888, 00030346, 415488356, 356, '1011016000735', 'RIYA CONSTRUCTION SALES AND SERVICES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'HANMANT SHANKAR BHOPATE', '', 'A P  KHODASHI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9850007969', '', 448981, 449040, 000735, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(889, 00030347, 415488356, 356, '1011005006388', 'VIJAY SHIVAJI WAGH', 01, 'Y', 030, 10, '', 'REKHA VIJAY WAGH', '', '', '', '', 'DNYANDEEP COLONY G C 604', 'MALKAPUR TAL KARAD ', 'M 9822456347 DOB 1 6 73', '', '', 'KARAD', '', '', '', 415539, '', '', '9822456347', '', 448382, 448411, 006388, '2023-09-01', 24, 0, '', '2', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(890, 00030348, 415488356, 356, '1011005006591', 'RAVIRAJ SARJERAO SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', '288 3 A PLOT NO 21 RUTUGANDHA BANGLO', 'DATTANAGAR MALKAPUR', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9890079469', '', 448412, 448441, 006591, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(891, 00030344, 415488355, 355, '1007016030027', 'SHRI GANESH LIGHT', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'BADIYANI PLAZADATTA CHOWK', 'TALKARAD', 'DISTSATARA', '', '', 'KARAD', '', '', '', 0, '26529', '', '9226355789', '', 124486, 124545, 030027, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(892, 00030345, 415488355, 355, '1007016030312', 'ADITI ENTERPRISES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'P D  PATIL NAGAR  CHOUNDESHWARI NAGAR', 'A P  GOWARE', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9764044567', '', 124546, 124560, 030312, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(893, 00030340, 415488354, 354, '1006005155706', 'RANI KRUSHANT CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   KOPARDE HAVELI', 'TAL   KARAD  DIST   SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9763352477', '', 197117, 197131, 155706, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(894, 00030341, 415488354, 354, '1006103000073', 'PERENNIAL TECHNOLOGIES PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PERENNIAL TECHNOLOGIES PVT LTD', '', 'PERENNIAL HOUSE  PLOT NO 70', 'LANE NO 3  SAGAR CO OP HOUSING SOCIETY', 'BAVDHAN  PUNE', '', '', 'PUNE', '', '', '', 411021, '020-2295', '020-2295', '9850244555', '', 190711, 190770, 000073, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(895, 00030342, 415488354, 354, '1006103000073', 'PERENNIAL TECHNOLOGIES PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PERENNIAL TECHNOLOGIES PVT LTD', '', 'PERENNIAL HOUSE  PLOT NO 70', 'LANE NO 3  SAGAR CO OP HOUSING SOCIETY', 'BAVDHAN  PUNE', '', '', 'PUNE', '', '', '', 411021, '020-2295', '020-2295', '9850244555', '', 190771, 190830, 000073, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(896, 00030343, 415488354, 354, '1006016000670', 'KUSUM BUILDERS AND DEVELOPERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VIKAS BALASAHEB MALI', '', 'NEAR KRISHNA CANOL', '400  BHAGYODAY BANGLA VIDYANAGAR  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9890495822', '', 194041, 194100, 000670, '2023-09-01', 24, 0, '', '4', '', '', NULL),
(897, 00030339, 415488502, 502, '1005005001475', 'ANIL DNYANDEV JADHAV', 01, 'Y', 030, 10, '', 'SUMAN ANIL JADHAV', '', '', '', '', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '7588378289', '', 269662, 269691, 001475, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(898, 00030338, 415488501, 501, '1004005010298', 'JAY MAHENDRA DHARMSI', 01, 'Y', 015, 10, '', '', '', '', '', '', '658 JUNYA VYAPAR PETHECHA BHAG', 'A P  MASUR', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '9022166100', '', 151081, 151095, 010298, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(899, 00030336, 415488353, 353, '1002005006490', 'MAHADEV NIVRUTTI JAMALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MUNDHE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9922787370', '', 611221, 611235, 006490, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(900, 00030337, 415488353, 353, '1002005853154', 'SHRIKANT BHASKAR MANE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT  ABAICHIWADI ', 'POST  VASANTGAD', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '7410762223', '', 611236, 611265, 853154, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(901, 00030333, 415488352, 352, '1001005056658', 'SUDHIR SHIVRAM KOKARE', 01, 'Y', 030, 10, '', '', '', '', '', '', '814 B SOMWAR PETH', 'PANTACHA KOT KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8208257534', '', 592068, 592097, 056658, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(902, 00030334, 415488352, 352, '1001005066725', 'TANAJI MARUTI TATE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P    VAHAGAON', 'TAL   KARAD', 'DIST     SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '8433562563', '', 592098, 592157, 066725, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(903, 00030335, 415488352, 352, '1001005024498', 'AYSHABI USMANGANI ATTAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '142 B MANGALWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9767856924', '', 592158, 592172, 024498, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(904, 00030395, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 272911, 272925, 000005, '2023-09-01', 24, 0, '', '1', '', '', NULL),
(905, 00030396, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 272926, 272940, 000005, '2023-09-01', 24, 0, '', '2', '', '', NULL),
(906, 00030397, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 272941, 272955, 000005, '2023-09-01', 24, 0, '', '3', '', '', NULL),
(907, 00030443, 415488352, 352, '1001016006721', 'KIDS NATION', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'AFRIN ARIF MULLA', '', '20  GURUWAR PETH ', 'KASAR GALLI  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7972986120', '', 569266, 569295, 006721, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(908, 00030444, 415488352, 352, '1001016006368', 'CHANDAK MOHANLAL NARAYANDAS', 01, 'Y', 060, 11, '', '', '', '', '', '', '336 SOMWAR PETH KARAD', 'MB NO 9823841143 KARAD', 'MB NO 9422603354', '', '', 'KARAD', '', '', '', 415110, '220754', '', '9823841143', '', 569296, 569355, 006368, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(909, 00030445, 415488352, 352, '1001005017600', 'SHIVAJINAGAR CO-OP.HOUSING', 01, 'Y', 030, 10, '', '', '', 'Authorised Signatory', '', '', '97 a community hall ramma', 'SHIVAJINAGAR KARAD', '9096212297 SECRETARI', '', '', 'KARAD', '', '', '', 415110, '225384', '', '', '', 592173, 592202, 017600, '2023-09-02', 24, 0, '', '3', '', '', NULL),
(910, 00030449, 415488353, 353, '1002005041860', 'UMESH MAHADEV JAMALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MUNDHE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9921570298', '', 611326, 611340, 041860, '2023-09-02', 24, 0, '', '4', '', '', NULL),
(911, 00030446, 415488353, 353, '1002016003105', 'PRASAD PRAKASH KANASE', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   SHENOLI ', 'MILKAT NO 534  ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '8668791125', '', 622652, 622681, 003105, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(912, 00030447, 415488353, 353, '1002016002672', 'HOTEL SWARAJ', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'HOTEL SWARAJ PRO.SANTOSH MAHADEO SH', '', '379 B  SHANIWAR PETH ', 'OPP TAHSIL KARYALAY  KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9657737735', '', 622682, 622741, 002672, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(913, 00030448, 415488353, 353, '1002005004219', 'DAUD DASTGIR AMBEKARI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'MUJAWAR COLONY ', 'MARKET YARD KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '', '9822441660', '', 611266, 611325, 004219, '2023-09-02', 24, 0, '', '3', '', '', NULL),
(914, 00030450, 415488501, 501, '1004005008755', 'KALYANI SHANKAR PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEHARU CHOWK', 'RISWAD  TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '', '9527564770', '', 151096, 151110, 008755, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(915, 00030451, 415488501, 501, '1004016000419', 'SHRI KRUPA MASALA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PAVITRA SAMBHAJI POL', '', 'A   P   MASUR', 'NEAR RAILWAY GATE MASUR UMBRAJ ROAD', 'TAL   KARAD DIST   SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '8451098454', '', 150347, 150406, 000419, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(916, 00030455, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 273031, 273045, 000005, '2023-09-02', 24, 0, '', '4', '', '', NULL),
(917, 00030456, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 273046, 273060, 000005, '2023-09-02', 24, 0, '', '5', '', '', NULL),
(918, 00030457, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 273061, 273075, 000005, '2023-09-02', 24, 0, '', '6', '', '', NULL),
(919, 00030452, 415488502, 502, '1005005300129', 'RAVINDRA DADASO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  KORTI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '02164-', '02164-', '9860145516', '', 269692, 269706, 300129, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(920, 00030454, 415488502, 502, '1005042000005', 'M/S. SANJAY MADAN KENJALE PROP. SANJAY MADAN ', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY MADAN KENJALE', '', 'NEAR  IDBI BANK UMBRAJ TAL KARAD DIST SA', '', '', '', '', 'KARAD', '', '', '', 415110, '02164264', '', '9579244883', '', 273016, 273030, 000005, '2023-09-02', 24, 0, '', '3', '', '', NULL),
(921, 00030453, 415488502, 502, '1005016005925', 'ASHISH CONTRUCTION PROP-MAHESH SHRIRANG SHIND', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MAHESH SHRIRANG SHINDE', '', 'A P KILLE MACHINDRAGAD ', 'TAL VALAWA', 'DIST SANGLI', '', '', 'SANGLI', '', '', '', 415302, '', '', '9764373737', '', 272956, 273015, 005925, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(922, 00030458, 415488502, 502, '1005016006202', 'SHREE SAMARTH WINDER TAPEES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AMOL MARUTI SALUNKHE', '', 'AT   SABALWADI  POST   KORIWALE', 'NEAR MARUTI MANDIR ', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7350181424', '', 273076, 273135, 006202, '2023-09-02', 24, 0, '', '7', '', '', NULL),
(923, 00030459, 415488502, 502, '1005016000611', 'BALAJI TYRES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ABHIJIT KRISHNARAO JADHAV', '', 'A P   UMBRAJ KRISHNA PRIDE', 'NEAR SERVICE ROAD', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9881871009', '', 273136, 273195, 000611, '2023-09-02', 24, 0, '', '8', '', '', NULL),
(924, 00030460, 415488502, 502, '1005016000577', 'BHAIRAVNATHA TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VINOD DINKAR PAWAR', '', 'UMBRAJ NEAR HOTEAL VIKAS', 'TAL KARAD DIST SATARA', 'MOB 9922797898', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9922797898', '', 273196, 273255, 000577, '2023-09-02', 24, 0, '', '9', '', '', NULL),
(925, 00030461, 415488502, 502, '1005106000113', 'JAYVANT SHRIPATI PAKHALE', 01, 'Y', 060, 13, '', '', '', '', '', '', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '8975558927', '', 270586, 270645, 000113, '2023-09-02', 24, 0, '', '10', '', '', NULL),
(926, 00030462, 415488354, 354, '1006005153877', 'UDAY DHANAJIRAO JADHAV', 01, 'Y', 060, 10, '', '', '', '', '', '', '333  KRISHNA CANAL', 'VIDYANAGAR SAIDAPUR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9850520783', '', 197132, 197191, 153877, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(927, 00030463, 415488354, 354, '1006005157356', 'SACHIN LAXMAN BAJUGADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   BABARMACHI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9922217252', '', 197192, 197206, 157356, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(928, 00030464, 415488354, 354, '1006005153755', 'PARSHURAM VILAS KHUDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'CHAUNDESHWARI NAGAR ', 'A P  GOVARE ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '02164-', '9923395870', '', 197207, 197236, 153755, '2023-09-02', 24, 0, '', '3', '', '', NULL),
(929, 00030465, 415488355, 355, '1007005030877', 'PRADIP BHOGILAL SHAH', 01, 'Y', 030, 10, '', '', '', '', '', '', 'LAXMI NARAYN SVAKUL', 'SOMWAR PETH PAWASKAR GALLI KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9021450914', '', 123526, 123555, 030877, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(930, 00030466, 415488355, 355, '1007016030385', 'SANGHAVI SAGARMAL LUMBAJI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '276  GURUWAR PETH ', 'BHAJI MANDAI  KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7083400444', '', 124561, 124620, 030385, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(931, 00030467, 415488356, 356, '1011106000121', 'HOTEL DELUXE', 01, 'Y', 030, 13, '', '', '', 'Authorised Signatory', 'SHETTY RAJANI RATNAKAR', '', 'FLAT NO 4  SUYASH PLAZA', 'VITTHAL DEV HOUSING SOCIETY', 'MALKAPUR  KARAD', '', '', 'KARAD', '', '', '', 415539, '', '98901473', '9595495123', '', 447017, 447046, 000121, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(932, 00030468, 415488505, 505, '1012005003114', 'ANANDA RAGHU PANASKAR', 01, 'Y', 030, 10, '', 'KAMAL ANANDA PANASKAR', '', '', '', '', 'A P  MUNDRUL HAVELI PANASKAR ALI', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9049232816', '', 098331, 098360, 003114, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(933, 00030469, 415488505, 505, '1012005016021', 'NILKANTH SHANKAR KHABALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VING ', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415122, '02164-', '02164-', '7066533350', '', 098361, 098375, 016021, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(934, 00030470, 415488357, 357, '1024005003228', 'ABDULKADAR TAJUDDIN PIRJADE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'FLAT NO 29 RANJIT TOWER', 'SHANIWAR PETH KARAD', '9850087787', '', '', 'KARAD', '', '', '', 415110, '', '', '9850087787', '', 185614, 185643, 003228, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(935, 00030471, 415488357, 357, '1024016000216', 'LAXMI CONSTRUCTIONS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PATIL MAHESH MAHADJI', '', 'OFFICE NO S 5 2ND FLOOR  LAXMI MADHAV TR', 'M NO 32 33A 2  NEAR ALANKAR HOTEL', 'OPP S T STAND  KARAD', '', '', 'KARAD', '', '', '', 415110, '02164226', '77740566', '9822630670', '', 186646, 186705, 000216, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(936, 00030442, 415488358, 358, '1026005001111', 'MARUTI KRISHNA KATARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '9 BUDHAWAR PETH KARAD', 'MOB 9881675876', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9423178819', '', 076082, 076096, 001111, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(937, 00030472, 415488512, 512, '1052005001171', 'ANKUSH MARUTI SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'S O MARUTI SALUNKHE', 'A P VARADE', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9623280080', '', 057676, 057690, 001171, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(938, 00030473, 415488515, 515, '1071005000092', 'PRASAD ANANDRAO KULKARNI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   KARPEWADI', 'PO   MANEWADI', 'TAL   PATAN DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9765107054', '', 000451, 000465, 000092, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(939, 00030474, 415488515, 515, '1071005000089', 'PRABHAKAR KHASHABA SHELAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KUTHARE ', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '', '', 000466, 000480, 000089, '2023-09-02', 24, 0, '', '2', '', '', NULL),
(940, 00030475, 415488515, 515, '1071005000103', 'SAKHARAM SITARAM SUPUGADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   TAIGADEWADI  TALMAWALE', 'OPP KARAD URBAN BANK  ', 'TAL   PATAN DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '7798272728', '', 000481, 000495, 000103, '2023-09-02', 24, 0, '', '3', '', '', NULL),
(941, 00030476, 415488515, 515, '1071005000104', 'SANDEEP RAJARAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KUTHARE', 'NEAR MALAWAR VASTI', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9158146232', '', 000496, 000510, 000104, '2023-09-02', 24, 0, '', '4', '', '', NULL),
(942, 00030477, 415488515, 515, '1071005000107', 'SHANKAR SHIVAJI PATIL', 01, 'Y', 015, 10, '', 'MINAKSHI SHANKARRAO PATIL', '', '', '', '', 'A P   KUTHARE', 'NEAR NINAI MANDIR', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '8806502630', '', 000511, 000525, 000107, '2023-09-02', 24, 0, '', '5', '', '', NULL),
(943, 00030478, 415488515, 515, '1071005000112', 'NIKHIL SUNIL PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   WING ', 'TAL   KARAD ', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415122, '02164-', '02164-', '9960174682', '', 000526, 000540, 000112, '2023-09-02', 24, 0, '', '6', '', '', NULL),
(944, 00030486, 415488352, 352, '1001005685134', 'VAISHNAVI SUDHIR KOKARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '814 B  PANTANCH KOT MAHARASHTRA HIGHSCHO', 'SOMWAR PETH  KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8668293484', '', 592203, 592217, 685134, '2023-09-02', 24, 0, '', '1', '', '', NULL),
(945, 00030575, 415488352, 352, '1001005682445', 'NITIN AUDUMBAR BARASKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PATIL GALLI ', 'KASHINATH CHOWK ', 'KILLE DHARPUR  BEED', '', '', 'BEED', '', '', '', 431124, '', '', '9860402407', '', 592218, 592232, 682445, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(946, 00030576, 415488352, 352, '1001005016824', 'MANIKRAO HINDURAO JAGDALE', 01, 'Y', 015, 10, '', '', '', '', '', '', '43 1 SUYOG APT NEAR SBI', 'SHANIWAR PETH KARAD', 'SB 16824', '', '', 'KARAD', '', '', '', 415110, '', '', '9822427634', '', 592233, 592247, 016824, '2023-09-04', 24, 0, '', '2', '', '', NULL),
(947, 00030577, 415488352, 352, '1001005682922', 'ARCHANA SHAILESH PAWAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '868 SHANIVAR PETH', 'NEAR GAJANAN MANGAL KARYALAY', 'SATARA', '', '', 'SATARA', '', '', '', 415002, '', '', '9763615977', '', 592248, 592277, 682922, '2023-09-04', 24, 0, '', '3', '', '', NULL),
(948, 00030578, 415488352, 352, '1001005682816', 'AMOL SHANKAR MADAKE', 01, 'Y', 060, 10, '', '', '', '', '', '', '3 7 SAI KRUPA COLONY', 'TIWARI CHAWL ANANDWADI KALYAN PURV', 'NEAR SARSWATI VIDYA MANDIR HIGH SCH', '', '', 'THANE', '', '', '', 421306, '-', '-', '9987819650', '', 592278, 592337, 682816, '2023-09-04', 24, 0, '', '4', '', '', NULL),
(949, 00030580, 415488352, 352, '1001005682811', 'MOHINI ASHOK KUMBHAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '406  NEAR NAGAR PALIKA', 'RAVIWAR PETH KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '96571158', '02164-', '9657115800', '', 592398, 592427, 682811, '2023-09-04', 24, 0, '', '6', '', '', NULL),
(950, 00030579, 415488352, 352, '1001005057621', 'SURESH RAGHUNATH KASHID', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '9881491852', '', 592338, 592397, 057621, '2023-09-04', 24, 0, '', '5', '', '', NULL),
(951, 00030581, 415488353, 353, '1002016002683', 'SANYAM TRADERS PROP. SANYAM SURESH SHAH', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANYAM TRADERS PROP. SANYAM SURESH ', '', '438  SILVER LAND  GALA NO 11', 'MARKET YARD ROAD ', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '02164227', '02164227', '9422093101', '', 622742, 622801, 002683, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(952, 00030582, 415488501, 501, '1004005009447', 'AMOL SUBHASH JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST  PADALI', 'TAL KARAD', '9922615070', '', '', 'KARAD', '', '', '', 415110, '', '', '9922615070', '', 151111, 151125, 009447, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(953, 00030583, 415488355, 355, '1007005034707', 'VIJAY BHERUMAL GANDHI', 01, 'Y', 060, 10, '', '', '', '', '', '', '63 B ROAD', 'OPP DR DESHPANDE HOSPITAL PACHGANI', 'SATARA', '', '', 'SATARA', '', '', '', 412805, '02162-', '02162-', '9158059292', '', 123556, 123615, 034707, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(954, 00030584, 415488505, 505, '1012016000263', 'SHRIKANT HINDURAO KUMBHAR', 01, 'Y', 060, 11, '', '', '', '', '', '', '300 5 NAVI PETH', 'PATAN', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415206, '', '02372-', '9881567483', '', 101071, 101130, 000263, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(955, 00030585, 415488505, 505, '1012005004061', 'SURAJ VIJAYKUMAR SATHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9970111519', '', 098376, 098390, 004061, '2023-09-04', 24, 0, '', '2', '', '', NULL),
(956, 00030586, 415488357, 357, '1024005001741', 'KASHINATH AKARAM MOKASHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'DEVDATTA BANGALA', '75 EAST GAJANAN HOUSING', 'SOCIETY KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-27', '', '9790518820', '', 185644, 185658, 001741, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(957, 00030587, 415488357, 357, '1024005003243', 'CHHAYA KASHINATH MOKASHI', 01, 'Y', 015, 10, '', 'MOKASHI KASHINATH AKARAM', '', '', '', '', '75  GAJANAN HOUSING SOCIETY', 'GOVARE', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '', '', '8888533015', '', 185659, 185673, 003243, '2023-09-04', 24, 0, '', '2', '', '', NULL),
(958, 00030588, 415488357, 357, '1024005042411', 'RAMDAS JANARDAN POL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHRI KRUSHAN COLONY  NEAR MUKBADHIR SCHO', 'SAIDAPUR  VIDYANAGAR  KARAD', 'TAL    KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9145253454', '', 185674, 185688, 042411, '2023-09-04', 24, 0, '', '3', '', '', NULL),
(959, 00030589, 415488357, 357, '1024005003375', 'ANJUM KARIM KHOJA', 01, 'Y', 015, 10, '', '', '', '', '', '', '275 2 BUDHWAR PETH ', 'CORPORATION BANK BACK SIDE ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 185689, 185703, 003375, '2023-09-04', 24, 0, '', '4', '', '', NULL),
(960, 00030573, 415488201, 201, '1032016000377', 'BHATIYA CONSTRUCTION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BHATIYA DIPAK HANSRAJ', '', 'BHATIYA ALI KHEND', 'CHIPLUN', 'TAL CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '261178', '', '9822160891', '', 189016, 189075, 000377, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(961, 00030574, 415488201, 201, '1032016000833', 'SHRI BHAVANI TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'MILKAT NO 38 B WARD NO 3', 'AT KUCHAMBE POST KUMBHARKHANI', 'TAL SANGAMESHWAR DIST RATNAGIRI', '', '', 'RATNAGIRI', '', '', '', 415607, '', '', '9767380549', '', 189076, 189135, 000833, '2023-09-04', 24, 0, '', '2', '', '', NULL),
(962, 00030590, 415488359, 359, '1037016000343', 'LAXMI NARAYAN EARTHMOVERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANJAY BALWANT PAWAR', 'MANISHA SANJAY PAWAR', '467 12 LAXMI NARAYAN CHOWK', 'MARKET YARD ROAD SHANIWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822780511', '', 136531, 136545, 000343, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(963, 00030592, 415488359, 359, '1037005005142', 'SUPRIYA SHITAL KSHIRSAGAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'B 3  F 1  AYODHYA APARTMENT ', 'BEHIND MARATHA SAMAJ KARYALAY ', 'SITARAM NAGAR  ANKALI  SANGLI', '', '', 'SANGLI', '', '', '', 416416, '', '', '8421945295', '', 138197, 138211, 005142, '2023-09-04', 24, 0, '', '3', '', '', NULL),
(964, 00030591, 415488359, 359, '1037016000303', 'SUHAS BUILDERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SUHAS SHANKARRAO JAGTAP', 'SUHAS RAJARAM INGAWALE', 'MILKAT NO 1540  BANSHANKARI EMPIRE', 'HIRAI PARK  OPP BANK OF MAHARASHTRA', 'KARVE NAKA  KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8108975444', '', 136546, 136605, 000303, '2023-09-04', 24, 0, '', '2', '', '', NULL),
(965, 00030593, 415488515, 515, '1071016000014', 'PAWAR EARTHMOVERS AND DEVELOPERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   MANDRUL KOLE ', 'DHEBEWADI ', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9975416555', '', 000302, 000316, 000014, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(966, 00030609, 415488354, 354, '1006005158764', 'DNYANESHWAR HAMBIRRAO KARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   SHRIRANG JAGANNATH DEVKANT', 'M NO 1837 5  GANESH RESIDENCI  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '-', '-', '8275061189', '', 197237, 197251, 158764, '2023-09-04', 24, 0, '', '1', '', '', NULL),
(967, 00030644, 415488352, 352, '1001005059817', 'SANJAY LAXMAN WAIKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '1559 1  SAI PRASAD COLONY  ', 'AMBEDARE RAOD   SHAHUPURI SATARA', 'SATARA', '', '', 'SATARA', '', '', '', 415002, '', '', '9421868693', '', 592458, 592487, 059817, '2023-09-05', 24, 0, '', '4', '', '', NULL),
(968, 00030646, 415488352, 352, '1001005057827', 'SUREKHA PRAMOD GANGAWANE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'FLAT NO 101  BUILDING NO 8  ADARSH SOCIE', 'SAMTA COLONY PANT NAGAR ', 'GHATKOPAR EAST  MUMBAI', '', '', 'MUMBAI', '', '', '', 400075, '', '', '9967338029', '', 592503, 592532, 057827, '2023-09-05', 24, 0, '', '6', '', '', NULL),
(969, 00030647, 415488352, 352, '1001016006722', 'ANIRUDDHA SUPPLIER', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VIJAY JAYAWANTRAO KADAM', '', '184', 'MANGALWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8600084694', '', 569416, 569445, 006722, '2023-09-05', 24, 0, '', '7', '', '', NULL),
(970, 00030641, 415488352, 352, '1001016006085', 'PARMAR STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PARMAR STORES PRAKASH BHAVARLAL PAR', '', '50 A GURUWAR PETH PARMAR', 'STORES KARAD', '', '', '', 'KARAD', '', '', '', 415110, '222882', '', '9421210440', '', 569356, 569415, 006085, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(971, 00030642, 415488352, 352, '1001005681511', 'MANALI VINAYAK EKBOTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'B 206  BLUE SPRINGS   PLOT NO 9 ', 'S NO 5 6 7 JAMBHULWADI ROAD   NEAR TELCO', 'AMBEGAON BK  PUNE', '', '', 'PUNE', '', '', '', 411046, '', '', '8657608070', '', 592428, 592442, 681511, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(972, 00030643, 415488352, 352, '1001005681511', 'MANALI VINAYAK EKBOTE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'B 206  BLUE SPRINGS   PLOT NO 9 ', 'S NO 5 6 7 JAMBHULWADI ROAD   NEAR TELCO', 'AMBEGAON BK  PUNE', '', '', 'PUNE', '', '', '', 411046, '', '', '8657608070', '', 592443, 592457, 681511, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(973, 00030645, 415488352, 352, '1001005024083', 'ONKAR SANJIV CHIVATE', 01, 'Y', 015, 10, '', 'SANJEEV VINAYAK CHIVATE', 'AVANI ONKAR CHIVATE', '', '', '', 'SOHAM  PLOT NO 204 ', 'MANGALWAR PETH  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822282554', '', 592488, 592502, 024083, '2023-09-05', 24, 0, '', '5', '', '', NULL),
(974, 00030648, 415488353, 353, '1002016003102', 'M/S TRIMURTI TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'parag vasantrao shenolkar', '', 'MILKAT NO  393 B   VARUNJI', 'PATAN ROAD VARUNJI', 'TAL  ARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9403944323', '', 622802, 622861, 003102, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(975, 00030649, 415488353, 353, '1002102001623', 'M/S CHINGALE DISTRIBUTORS PROP.ABHIJIT SADANA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '233 7  P B ROAD MALKAPUR', 'TAL KARAD  DIST SATARA', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164223', '', '9422592333', '', 615545, 615604, 001623, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(976, 00030650, 415488353, 353, '1002102001623', 'M/S CHINGALE DISTRIBUTORS PROP.ABHIJIT SADANA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '233 7  P B ROAD MALKAPUR', 'TAL KARAD  DIST SATARA', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164223', '', '9422592333', '', 615605, 615664, 001623, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(977, 00030651, 415488502, 502, '1005042000004', 'RAJAN TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PROP SANGRAM DINKAR JAMDADE', '', 'OM NIVAS  P B ROAD ', 'WARUNJI PHATA ', 'A P GOTE MUNDHE  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756891234', '', 273256, 273270, 000004, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(978, 00030652, 415488502, 502, '1005042000004', 'RAJAN TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PROP SANGRAM DINKAR JAMDADE', '', 'OM NIVAS  P B ROAD ', 'WARUNJI PHATA ', 'A P GOTE MUNDHE  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756891234', '', 273271, 273285, 000004, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(979, 00030653, 415488502, 502, '1005042000004', 'RAJAN TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PROP SANGRAM DINKAR JAMDADE', '', 'OM NIVAS  P B ROAD ', 'WARUNJI PHATA ', 'A P GOTE MUNDHE  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756891234', '', 273286, 273300, 000004, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(980, 00030654, 415488502, 502, '1005042000004', 'RAJAN TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PROP SANGRAM DINKAR JAMDADE', '', 'OM NIVAS  P B ROAD ', 'WARUNJI PHATA ', 'A P GOTE MUNDHE  KARAD', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7756891234', '', 273301, 273315, 000004, '2023-09-05', 24, 0, '', '4', '', '', NULL),
(981, 00030655, 415488354, 354, '1006005012618', 'HARSHAD TANAJI DESAI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'NEAR HOLY FAMILY SCHOOL', 'PRATHMESH COLONY VIDYANAG', 'MOB 9823855166', '', '', 'KARAD', '', '', '', 415124, '', '', '9823855166', '', 197252, 197311, 012618, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(982, 00030656, 415488355, 355, '1007016030067', 'DAY NIGHT DISTRIBUTORS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DAY NIGHT DIST', '', '694  GROUND FLOUR', 'SHUKRAWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '222507', '', '9823676964', '', 124621, 124680, 030067, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(983, 00030657, 415488355, 355, '1007102030083', 'SHREE CLASSIC', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAJESH ROOPRAJ CHAGED', '', '24 SHANIWAR PETH DATTA CHOK KARAD', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9890266555', '', 122776, 122835, 030083, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(984, 00030658, 415488355, 355, '1007102030083', 'SHREE CLASSIC', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAJESH ROOPRAJ CHAGED', '', '24 SHANIWAR PETH DATTA CHOK KARAD', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9890266555', '', 122836, 122895, 030083, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(985, 00030660, 415488356, 356, '1011005034778', 'ARUN TUKARAM THORAT', 01, 'Y', 030, 10, '', '', '', '', '', '', '622  JILHA PARISHAD MARATHI SCHOOL ', 'THORAT MALA  OND', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9604450271', '', 448442, 448471, 034778, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(986, 00030659, 415488356, 356, '1011016000842', 'PRATHAMESH TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PROP PRAKASH DHONDIRAM DESAI', '', 'NEAR SARASWATI COLONY ', 'A P MALKAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9890678559', '', 449041, 449100, 000842, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(987, 00030661, 415488356, 356, '1011005003353', 'BHASKAR BABURAO SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'LAXMINAGAR AT POST MALKAP', 'UR', 'TAL KARAD   DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '', '', 448472, 448501, 003353, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(988, 00030662, 415488357, 357, '1024005041919', 'YASHODEEP SADASHIV CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', '37 A  MANGALWAR PETH', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9673181005', '', 185704, 185718, 041919, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(989, 00030663, 415488357, 357, '1024005042371', 'MADHUMATI SADASHIV CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR TILAK HAYSCHOOL', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9511762379', '', 185719, 185733, 042371, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(990, 00030639, 415488358, 358, '1026005251680', 'KRISHNAKATH INSTITUTE FOR SKILL DEVELOPMENT A', 01, 'Y', 015, 10, '', '', '', 'Authorised Signatory', '', '', 'SHIKSHAN MANDAL KARAD', 'FINAL PLOT NO 222', 'MANGALWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9822099655', '', 076142, 076156, 251680, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(991, 00030637, 415488358, 358, '1026005000665', 'SARJERAO SHAMRAO PATIL', 01, 'Y', 015, 10, '', 'DEVAL SARJERAO PATIL', '', '', '', '', 'OPP KANYASHALA  FARDIPIR ROAD', '250  MANGALWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9921065959', '', 076097, 076111, 000665, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(992, 00030638, 415488358, 358, '1026005002459', 'MAHIBUB BASHU KADAPI', 01, 'Y', 030, 10, '', 'RAMIJA MEHABUB KADAPI', '', '', '', '', '305 MANGALWAR PETH ', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9423178640', '', 076112, 076141, 002459, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(993, 00030640, 415488358, 358, '1026005002669', 'NASIR GULAB BAGWAN', 01, 'Y', 030, 10, '', 'JABBIN NASIR BAGWAN', '', '', '', '', '128 GURUWAR PETH  BATANE GALLI ', 'MANORYA SAMOR  KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '8421685279', '', 076157, 076186, 002669, '2023-09-05', 24, 0, '', '4', '', '', NULL),
(994, 00030664, 415488201, 201, '1032016000483', 'ANISH SERVICES PROP', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'AT PO LAVEL BRAMHANWADI', 'OPP MARATHA SHALA', 'TAL KHED  9822122091', '', '', 'KARAD', '', '', '', 415605, '', '', '9822122091', '', 189136, 189195, 000483, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(995, 00030665, 415488359, 359, '1037016000316', 'ANU EYE CLINIC PHARMACY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ANIKET SHRIKRISHNA DHAGE', 'SONALI TUKARAM JADHAV', '389 3  KARVE NAKA', 'SHANIWAR PETH  KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9960429602', '', 136606, 136665, 000316, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(996, 00030666, 415488515, 515, '1071005000124', 'JAGANNATH BHAGVANT PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PAWARWADI  ', 'POST  TARUKH', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '7506212727', '', 000541, 000555, 000124, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(997, 00030667, 415488515, 515, '1071005000125', 'RAHUL JAGANNATH PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PAWARWADI  ', 'POST  TARUKH  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '9579498907', '', 000556, 000570, 000125, '2023-09-05', 24, 0, '', '2', '', '', NULL),
(998, 00030668, 415488515, 515, '1071005000126', 'SATISH KUBERRAO JAGTAP', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   MALKAPUR', 'SAMADHAN   OPP IMARSAN COMPANY  AGASHIVN', 'TAL   KARAD  DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9764126740', '', 000571, 000585, 000126, '2023-09-05', 24, 0, '', '3', '', '', NULL),
(999, 00030669, 415488358, 358, '1026005251132', 'GAURAV RAJENDRA SAWANT', 01, 'Y', 015, 10, '', '', '', '', '', '', '129  JALTARA SMRUTI', 'SHIVAJI HOUSING SOCIETY', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7058532992', '', 076187, 076201, 251132, '2023-09-05', 24, 0, '', '1', '', '', NULL),
(1000, 00030719, 415488352, 352, '1001102000599', 'M/S AARYA INFRASTRUCTURES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'OSWAL SANJAY BABULAL', '', '12 SAHAKAR BHAVAN SHIVAJI', 'NAGAR KARAD   AASFA0897R', '9326999099 AUTHO ANY TWO', '', '', 'KARAD', '', '', '', 415110, '', '', '9765575555', '', 571051, 571110, 000599, '2023-09-06', 24, 0, '', '13', '', '', NULL),
(1001, 00030722, 415488352, 352, '1001016006635', 'SATYAJEET VILLA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'NAMDEV KASHINATH PATIL', '', 'S NO 29 4K 2B AND S NO 29 4K 2K ', 'NEAR KANASE HUNDAI SHOWROOM ', 'PUNE BENGLORE HIGHWAY MUNDHE KARAD', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9822081434', '', 569446, 569505, 006635, '2023-09-06', 24, 0, '', '16', '', '', NULL),
(1002, 00030723, 415488352, 352, '1001016006501', 'PAWAR KIRANA STORES PROP SHANKAR NAMDEV PAWAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '392  RAVIWAR PETH', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9765153043', '', 569506, 569565, 006501, '2023-09-06', 24, 0, '', '17', '', '', NULL),
(1003, 00030710, 415488352, 352, '1001106000189', 'SHRI PARSHWANATH N S PATHSANTH', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '75 76 77 1GURUWAR PETH KARAD DIST SATARA', 'CHAWADI CHOWK KARAD', '220589', '', '', 'KARAD', '', '', '', 415110, '02164221', '', '9999999999', '', 570571, 570630, 000189, '2023-09-06', 24, 0, '', '4', '', '', NULL),
(1004, 00030711, 415488352, 352, '1001103000136', 'MEDIXER LIFE SCIENCE PVT LTD', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MEDIXER LIFE SCIENCE PVT LTD', '', 'TINGRE NAGAR PLOT NO 7 SR NO 33 2 ', 'SHOP NO A 7 OPP  TANISHKA  COLLEGE ROAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7767958947', '', 570631, 570690, 000136, '2023-09-06', 24, 0, '', '5', '', '', NULL),
(1005, 00030712, 415488352, 352, '1001102000058', 'PIONEER DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'CHIVATE PRAKASH VASANT', 'CHIVATE ARCHANA ARUN', 'PLOT NO 355  NEAR MANOHAR LODGE  ', 'SHANIWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '93710788', '', '9371078828', '', 570691, 570750, 000058, '2023-09-06', 24, 0, '', '6', '', '', NULL),
(1006, 00030714, 415488352, 352, '1001106000259', 'MANGALDAS LALLUBHAI AND CO', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ARUN SHASHIKANT SHAH', '', '285 GURUWARPETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9975693069', '', 570811, 570870, 000259, '2023-09-06', 24, 0, '', '8', '', '', NULL),
(1007, 00030715, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 570871, 570930, 000339, '2023-09-06', 24, 0, '', '9', '', '', NULL),
(1008, 00030716, 415488352, 352, '1001106000205', 'PALKAR PHARMACEUTICALS DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PALKAR PHARMACEUTICALS', '', '119 VATSALA HOUSE SHIVAJI NAGAR CO OP HO', 'SHIVAJI NAGAR CO OP HOUSING SOC KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164221', '90961444', '7350666555', '', 570931, 570990, 000205, '2023-09-06', 24, 0, '', '10', '', '', NULL),
(1009, 00030709, 415488352, 352, '1001005067326', 'SATISH JANARADHAN SIDAWADKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '187 SOMWAR PETH ', 'VANKATESH APARTMENT KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011529850', '', 592593, 592607, 067326, '2023-09-06', 24, 0, '', '3', '', '', NULL),
(1010, 00030717, 415488352, 352, '1001005685147', 'PRIYANKA SANTOSH PALANGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   CHAREGAON', 'TAL   KARAD', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8668383154', '', 592608, 592622, 685147, '2023-09-06', 24, 0, '', '11', '', '', NULL),
(1011, 00030720, 415488352, 352, '1001005684983', 'SUJATA PRAKASH SAGARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '58  MANGALWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822597745', '', 592623, 592637, 684983, '2023-09-06', 24, 0, '', '14', '', '', NULL),
(1012, 00030707, 415488352, 352, '1001005051695', 'SUNITA DATTATRAY AYACHIT', 01, 'Y', 030, 10, '', '', '', '', '', '', '184 SOMWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9673353188', '', 592533, 592562, 051695, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1013, 00030718, 415488352, 352, '1001102000445', 'ANIL PRASHURAM BHAMBURE', 01, 'Y', 060, 13, '', '', '', '', '', '', '118 19 GURUWAR PETH  BATANE GALLI', 'KARAD', 'TAL   KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '8087420908', '', 570991, 571050, 000445, '2023-09-06', 24, 0, '', '12', '', '', NULL),
(1014, 00030713, 415488352, 352, '1001106000062', 'S V PATHAK AND COMPANY SALES AND SERVICES PVT', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S V PATHAK', '', '35 A SOMWAR PETH  ', 'KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9156011099', '', 570751, 570810, 000062, '2023-09-06', 24, 0, '', '7', '', '', NULL),
(1015, 00030708, 415488352, 352, '1001005059863', 'PRUTHVIRAJ DILIP CHAVAN', 01, 'Y', 030, 10, '', 'SAYALI PRUTHAVIRAJ CHAVAN', '', '', '', '', '318 PRIYADARSHANI COLONY KARVE NAKA KARA', 'KARAD TASGAON ROAD KARVE NAKA KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9860823800', '', 592563, 592592, 059863, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1016, 00030721, 415488352, 352, '1001005056706', 'BHAGWAN MARUTI CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P SHIVADE', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9921359705', '', 592638, 592667, 056706, '2023-09-06', 24, 0, '', '15', '', '', NULL),
(1017, 00030724, 415488352, 352, '1001005683448', 'ADITI PARAG PHANSALKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PLOT NO 15 FLAT NO 18 SHUBHASHREE PARIJA', 'BEHIND PHARMACY COLLEGE VIDYANAGAR SAIDA', 'TAL KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823553804', '', 592668, 592697, 683448, '2023-09-06', 24, 0, '', '18', '', '', NULL),
(1018, 00030704, 415488358, 358, '1026005251552', 'NILESH RAVINDRANATH TADAKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   NARAYANWADI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '9545017774', '', 076202, 076216, 251552, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1019, 00030705, 415488358, 358, '1026005000859', 'TANAJI SHANKAR SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MALKAPUR ', 'AGASHIVNAGAR', 'KARAD NAGARPALIKA KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 076217, 076231, 000859, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1020, 00030706, 415488358, 358, '1026106000088', 'RANJEET RAJENDRA SALUNKHE', 01, 'Y', 030, 13, '', '', '', '', '', '', '264 MANGALWAR PETH ', 'KARAD ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822477662', '', 072226, 072255, 000088, '2023-09-06', 24, 0, '', '3', '', '', NULL),
(1021, 00030837, 415488505, 505, '1012005016022', 'SHASHIKANT PANDURANG SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O  KISAN PANDURANG SALUNKHE', '55 NIHIMBE   CHIRAMBE', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02162-', '02162-', '7219241960', '', 098451, 098465, 016022, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1022, 00030838, 415488505, 505, '1012005016023', 'KRUSHNAJI PANDURANG SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   MENDHEGHAR', 'PO  HELWAK', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415207, '02372-', '02372-', '9075502791', '', 098466, 098480, 016023, '2023-09-06', 24, 0, '', '3', '', '', NULL),
(1023, 00030836, 415488505, 505, '1012005002817', 'PRAMOD RATAN NALWADE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  NAVADI', 'TAL PATAN', 'DIST  SATARA', '', '', 'PATAN', '', '', '', 415209, '', '02372-', '9545454528', '', 098391, 098450, 002817, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1024, 00030725, 415488353, 353, '1002005036704', 'SUNIL(UMESH) VILASRAO SALUNKHE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  KIVAL TAL KARAD DIST SATARA', 'TAL KARAD ', 'DIST SATARA 9922274344', '', '', 'KARAD', '', '', '', 415106, '64168', '', '9922274344', '', 611341, 611370, 036704, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1025, 00030726, 415488353, 353, '1002016002858', 'METRO CAR PARTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'JOHEBJAHANGIR MULLA', '', 'MILKAT NO 1 1540 ', 'A P MALKAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9075286567', '', 622862, 622921, 002858, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1026, 00030727, 415488353, 353, '1002016002858', 'METRO CAR PARTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'JOHEBJAHANGIR MULLA', '', 'MILKAT NO 1 1540 ', 'A P MALKAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9075286567', '', 622922, 622981, 002858, '2023-09-06', 24, 0, '', '3', '', '', NULL),
(1027, 00030728, 415488353, 353, '1002005009244', 'SWATI CHANDRASHEKHAR AUNDHAKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '140 BUDHWAR PETH', 'NEAR ERANI VASTI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9960697814', '', 611371, 611400, 009244, '2023-09-06', 24, 0, '', '4', '', '', NULL),
(1028, 00030729, 415488501, 501, '1004005011573', 'RAMESH SHAMRAO PARVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '7039466842', '', 151126, 151140, 011573, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1029, 00030730, 415488502, 502, '1005005016708', 'PRASHANT JAYVANT PAKHALE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P   UMBRAJ', 'MARUTI MANDIRA JAVAL', 'TAL   KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8308384757', '', 269707, 269766, 016708, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1030, 00030737, 415488356, 356, '1011005003574', 'MAHENDRABHAI CHAGANBHAI MANSURIYA', 01, 'Y', 030, 10, '', '', '', '', '', '', 'FLAT NO A 301  PUSHKRAJ', 'GOWARE ROAD  SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9422384688', '', 448502, 448531, 003574, '2023-09-06', 24, 0, '', '7', '', '', NULL),
(1031, 00030731, 415488356, 356, '1011016000917', 'MUKESH AGENCIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DILEEPKUMAR BHAJANDAS MULCHANDANI', 'MUKESH GURMUKHDAS UDASI', 'A P MUNDHE ', 'GRAM M NO 1372 ', 'PUNE BENGLOR ROAD KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881084899', '', 449101, 449160, 000917, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1032, 00030732, 415488356, 356, '1011016000917', 'MUKESH AGENCIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DILEEPKUMAR BHAJANDAS MULCHANDANI', 'MUKESH GURMUKHDAS UDASI', 'A P MUNDHE ', 'GRAM M NO 1372 ', 'PUNE BENGLOR ROAD KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881084899', '', 449161, 449220, 000917, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1033, 00030733, 415488356, 356, '1011102000109', 'BHAUSAHEB HARI MORE', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'more bharatkumar bhauso', '', '258 P B ROAD OPP AKSHATA MANGAL KARYALAY', 'MALKAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164228', '', '9422401403', '', 447047, 447106, 000109, '2023-09-06', 24, 0, '', '3', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(1034, 00030734, 415488356, 356, '1011102000109', 'BHAUSAHEB HARI MORE', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'more bharatkumar bhauso', '', '258 P B ROAD OPP AKSHATA MANGAL KARYALAY', 'MALKAPUR  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164228', '', '9422401403', '', 447107, 447166, 000109, '2023-09-06', 24, 0, '', '4', '', '', NULL),
(1035, 00030735, 415488356, 356, '1011102000129', 'S P TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAMESHWAR TRAMBAK SWAMI', 'VASANT BABURAV SHINDE', 'MAGISTIC PLAZA OPP KRISHNA HOSPITAL', 'P B SERVICE ROAD MALKAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415559, '02164243', '', '9822309067', '', 447167, 447226, 000129, '2023-09-06', 24, 0, '', '5', '', '', NULL),
(1036, 00030736, 415488356, 356, '1011102000129', 'S P TRADERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RAMESHWAR TRAMBAK SWAMI', 'VASANT BABURAV SHINDE', 'MAGISTIC PLAZA OPP KRISHNA HOSPITAL', 'P B SERVICE ROAD MALKAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415559, '02164243', '', '9822309067', '', 447227, 447286, 000129, '2023-09-06', 24, 0, '', '6', '', '', NULL),
(1037, 00030738, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186706, 186720, 000001, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1038, 00030739, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186721, 186735, 000001, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1039, 00030740, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186736, 186750, 000001, '2023-09-06', 24, 0, '', '3', '', '', NULL),
(1040, 00030741, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186751, 186765, 000001, '2023-09-06', 24, 0, '', '4', '', '', NULL),
(1041, 00030742, 415488357, 357, '1024103000066', 'MEGA AUTOBAHN PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT NAMRATA AKASH SA', '', '655  GAJANAN HOUSING SOCIETY', 'SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9545298999', '', 181231, 181290, 000066, '2023-09-06', 24, 0, '', '5', '', '', NULL),
(1042, 00030743, 415488357, 357, '1024103000066', 'MEGA AUTOBAHN PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT NAMRATA AKASH SA', '', '655  GAJANAN HOUSING SOCIETY', 'SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9545298999', '', 181291, 181350, 000066, '2023-09-06', 24, 0, '', '6', '', '', NULL),
(1043, 00030744, 415488357, 357, '1024005004019', 'MAHESH DINKAR PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PLOT NO 205', 'MANGALWAR PETH KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9637249664', '', 185734, 185763, 004019, '2023-09-06', 24, 0, '', '7', '', '', NULL),
(1044, 00030745, 415488357, 357, '1024005042445', 'ASHWINI PRAVIN JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT POST OGALEWADI', 'MALA WARD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9373617386', '', 185764, 185793, 042445, '2023-09-06', 24, 0, '', '8', '', '', NULL),
(1045, 00030746, 415488357, 357, '1024005003000', 'SANJAY SHIVAJI LANDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SAI CHHAYA 255 1 A 1', 'LAHOTINAGAR  A P  MALKAPUR  ', 'TAL  KARAD  DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '', '', '9730530003', '', 185794, 185823, 003000, '2023-09-06', 24, 0, '', '9', '', '', NULL),
(1046, 00030747, 415488359, 359, '1037005007446', 'KIRAN PRATAP JOSHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   HINDURAO TUKARAM BAGAL', 'G A 385 4 PLOT NO 23 ANANDIVIHAR VITTHAL', 'OLD BHAJI MANDAI MALKAPUR KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '02164-', '02164-', '9403245584', '', 138212, 138226, 007446, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1047, 00030748, 415488359, 359, '1037016000344', 'AJINKYA SHETI FARM', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SACHIN SAMBHAJI NIVRUTTI THORAT', '', 'A   P   KARVE', 'WARD NO 5 BULBUL MALA', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9922642135', '', 136666, 136680, 000344, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1048, 00030749, 415488512, 512, '1052005000399', 'SAGAR ABASO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P TASAWDE  UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8805566052', '', 057691, 057705, 000399, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1049, 00030750, 415488514, 514, '1073005000216', 'SANTOSH KAKASAHEB KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9011091010', '', 000151, 000165, 000216, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1050, 00030845, 415488352, 352, '1001005067185', 'ANJALI PRASHANT KOLI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'RAGHUNATH PRASAD APARTMENT FLAT NO 6', 'NEAR RAM MANDIR RAM ALI   CHINCHWADGAON', 'CHINCHWADGAON PUNE', '', '', 'PUNE', '', '', '', 411033, '', '', '7767933446', '', 592698, 592757, 067185, '2023-09-06', 24, 0, '', '1', '', '', NULL),
(1051, 00030846, 415488352, 352, '1001005058007', 'KRISHNAT SHAMRAO LOHAR', 01, 'Y', 030, 10, '', 'MALHARPETH PEON', '', '', '', '', 'NEAR SAMBHU APPA MATH  SUTAR WADA', 'A P  ISLAMPUR', 'TAL  WALWA  DIST  SANGLI', '', '', 'ISLAMPUR', '', '', '', 415409, '02342-', '02342-', '8805531702', '', 592758, 592787, 058007, '2023-09-06', 24, 0, '', '2', '', '', NULL),
(1052, 00030875, 415488352, 352, '1001005681667', 'PRIYAKA SANDIP SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '331  GURUWAR PETH', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881789364', '', 592788, 592802, 681667, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1053, 00030874, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 571111, 571170, 000349, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1054, 00030876, 415488352, 352, '1001005682990', 'DNYANESHWAR VINAYAK SHINDE', 01, 'Y', 060, 10, '', 'RAJSHREE DNYANESHWAR SHINDE', '', '', '', '', 'PUSHPA HOUSING SOCIETY FLAT NO 10', 'R H 28 3 G BLOCK M I D C ', 'SAMBHAJINGAR CHINCHWAD  PUNE', '', '', 'PUNE', '', '', '', 411019, '', '', '9623321532', '', 592803, 592862, 682990, '2023-09-07', 24, 0, '', '3', '', '', NULL),
(1055, 00030884, 415488353, 353, '1002005044872', 'EKNATH CHANDRU SALUNKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P UDHAWANE ', 'TAL PATAN ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 611491, 611505, 044872, '2023-09-07', 24, 0, '', '8', '', '', NULL),
(1056, 00030881, 415488353, 353, '1002146000001', 'SAIRAM FOOTWEAR', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', 'SAIRAM FOOTWEAR', '', 'PATAN ROAD NEAR VAJAN KATA ', 'WARUNJI PHATA WARUNJI', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9970897452', '', 615785, 615799, 000001, '2023-09-07', 24, 0, '', '5', '', '', NULL),
(1057, 00030885, 415488353, 353, '1002005852929', 'SUHAS LAXMAN SAWANT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST KOREGAON TEMBHU', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9373565555', '', 611506, 611520, 852929, '2023-09-07', 24, 0, '', '9', '', '', NULL),
(1058, 00030877, 415488353, 353, '1002102001668', 'JADHAV PETROLEUM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'JADHAV PETROLEUM', '', 'GAT NO 743  VIMANTAL PATAN ROAD ', 'CHIPLUN TO KARAD ROAD ', 'VARUJI  TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823302244', '', 615665, 615724, 001668, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1059, 00030878, 415488353, 353, '1002102001668', 'JADHAV PETROLEUM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'JADHAV PETROLEUM', '', 'GAT NO 743  VIMANTAL PATAN ROAD ', 'CHIPLUN TO KARAD ROAD ', 'VARUJI  TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823302244', '', 615725, 615784, 001668, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1060, 00030879, 415488353, 353, '1002016003024', 'HOTEL NEW PYASSA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'HOTEL NEW PYASSA', '', 'A P  GOTE M NO 372 A', 'KARAD PATAN ROAD  WARUNJI PHATA  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9049055050', '', 622982, 623041, 003024, '2023-09-07', 24, 0, '', '3', '', '', NULL),
(1061, 00030880, 415488353, 353, '1002005009157', 'ARIF GULAB BAGWAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'GIRNAR CLASSIC FL 201 1021 B', 'NANA PETH PUNE', 'PUNE CITI PUNE', '', '', 'PUNE', '', '', '', 411002, '020-', '020-', '9422034309', '', 611401, 611430, 009157, '2023-09-07', 24, 0, '', '4', '', '', NULL),
(1062, 00030882, 415488353, 353, '1002016000805', 'KOYANA ENTERPRISES', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'M/S KOYANA ENTERPRISES', '', '469 A SHANIWAR PETH', 'KARAD  222025 229775', 'DIST SATARA 9860727575 B', '', '', 'KARAD', '', '', '', 415110, '', '98607275', '9860727575', '', 623042, 623071, 000805, '2023-09-07', 24, 0, '', '6', '', '', NULL),
(1063, 00030886, 415488353, 353, '1002016003104', 'PROWARD LEARNING', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'POOJA AKSHAY SHAHA', '', 'AT   PIMPARI PO   SHAHAPUR', 'MILKAT NO 150', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '8308686288', '', 623072, 623101, 003104, '2023-09-07', 24, 0, '', '10', '', '', NULL),
(1064, 00030883, 415488353, 353, '1002005850871', 'KARAD URBAN SEVAK KOUTUMBIK SAHAYYATA TRUST', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', 'KARAD URBAN SEVAK KOUTUMBIK SAHAYYA', '', 'THE KARAD URBAN CO OP BANK LTD  KARAD', '516 2  SHANIWAR PETH  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '', '', 611431, 611490, 850871, '2023-09-07', 24, 0, '', '7', '', '', NULL),
(1065, 00030887, 415488353, 353, '1002016002914', 'SHIVSHAKTI PLY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MANDAR BALU SHINDE', '', 'A P SHIVAJINAGAR  GOTE 177 E ', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9561873239', '', 623102, 623161, 002914, '2023-09-07', 24, 0, '', '11', '', '', NULL),
(1066, 00030888, 415488353, 353, '1002016002914', 'SHIVSHAKTI PLY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MANDAR BALU SHINDE', '', 'A P SHIVAJINAGAR  GOTE 177 E ', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9561873239', '', 623162, 623221, 002914, '2023-09-07', 24, 0, '', '12', '', '', NULL),
(1067, 00030889, 415488502, 502, '1005005300169', 'GULABCHANDRA', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   SWARUP JAGANNATH TODKAR', 'A P   UMBRAJ ', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415110, '02164-', '02164-', '9721362734', '', 269767, 269781, 300169, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1068, 00030890, 415488502, 502, '1005016006154', 'SHREE SAMARTH ENTERPRISES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AVINASH NIVRUTTI GHADAGE', 'SHREE SAMARTH ENTERPRISES', '50 A  SAMPURN GAON', 'GODWADI  A P UMBRAJ', 'TA KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8408026021', '', 273316, 273375, 006154, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1069, 00030891, 415488354, 354, '1006005015476', 'SHARMISHTHA SANJAY POL', 01, 'Y', 015, 10, '', '', '', '', '', '', '185', 'BANWADI COLONY ', 'BANWADI', '', '', 'KARAD', '', '', '', 415110, '02164-27', '02164-27', '9420466439', '', 197312, 197326, 015476, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1070, 00030892, 415488354, 354, '1006005152750', 'RAHUL KRUSHNAT CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KOPARDE HAVELI ', 'TAL KARAD ', 'DIST SATRAA', '', '', 'KARAD', '', '', '', 415115, '', '02164-', '9922408911', '', 197327, 197341, 152750, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1071, 00030893, 415488355, 355, '1007005032068', 'KAMALABAI UTTAMCHAND JAIN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SAI VYANKATESH HIGHTS', 'FLAT NO 202 PATAN COLNY', 'DISTSATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9423831083', '', 123616, 123630, 032068, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1072, 00030898, 415488356, 356, '1011016001016', 'TANUJA ENTERPRISES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MAHESH BALKRISHANA GADE', '', 'A P   KALAWADE NEAR D MART BULET SHOWROO', 'P B ROAD  CHILAI DEVI SOC ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '7875493721', '', 449281, 449295, 001016, '2023-09-07', 24, 0, '', '5', '', '', NULL),
(1073, 00030895, 415488356, 356, '1011106000155', 'UMESH DIGAMBAR KULKARNI', 01, 'Y', 030, 13, '', '', '', '', '', '', 'AT POST   MALKAPUR', 'B 43 2  KOYANA VASAHAT  MALKAPUR', 'TAL   KARAD   DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9922274734', '', 447287, 447316, 000155, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1074, 00030896, 415488356, 356, '1011005001771', 'RAMESHWAR TRIMBAK SWAMI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SHIVPUJA VISHRAMNAGAR', 'MALKAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9096384477', '', 448532, 448561, 001771, '2023-09-07', 24, 0, '', '3', '', '', NULL),
(1075, 00030897, 415488356, 356, '1011005001771', 'RAMESHWAR TRIMBAK SWAMI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'SHIVPUJA VISHRAMNAGAR', 'MALKAPUR', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9096384477', '', 448562, 448591, 001771, '2023-09-07', 24, 0, '', '4', '', '', NULL),
(1076, 00030894, 415488356, 356, '1011016000579', 'DILIP PANDURANG PATIL (HUF)', 01, 'Y', 060, 11, '', '', '', '', '', '', 'PANDURANG BHAVAN P B ROAD', 'NEAR HOTEL PUNJAB MALKAPR', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '229784', '', '7507822003', '', 449221, 449280, 000579, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1077, 00030899, 415488505, 505, '1012005002935', 'SANDEEP YASHWANT KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P 692 KADAMWADI MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9657824141', '', 098481, 098495, 002935, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1078, 00030900, 415488357, 357, '1024005000460', 'KISHORKUMAR LAXMAN SAWANT', 01, 'Y', 030, 10, '', '', '', '', '', '', 'MANGALMURTI PLOT NO 34 ', 'RUKMINI ESTATE  BUDHWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '220844', '', '9823241844', '', 185824, 185853, 000460, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1079, 00030901, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186766, 186780, 000001, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1080, 00030902, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186781, 186795, 000001, '2023-09-07', 24, 0, '', '3', '', '', NULL),
(1081, 00030903, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186796, 186810, 000001, '2023-09-07', 24, 0, '', '4', '', '', NULL),
(1082, 00030904, 415488357, 357, '1024042000001', 'ANUNI INFRASTUCTURES PARTNER SACHIN AND RANJE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', '78 KARAD WAKHAN ROAD', 'MANGALWAR PETH KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9823366779', '', 186811, 186825, 000001, '2023-09-07', 24, 0, '', '5', '', '', NULL),
(1083, 00030905, 415488357, 357, '1024005003376', 'FARHEEN KARIM KHOJA', 01, 'Y', 015, 10, '', '', '', '', '', '', '275 2 BUDHWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9028738780', '', 185854, 185868, 003376, '2023-09-07', 24, 0, '', '6', '', '', NULL),
(1084, 00030906, 415488358, 358, '1026005002306', 'MEGHANA AMOL SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', '272  MANGALWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9822968562', '', 076232, 076261, 002306, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1085, 00030907, 415488201, 201, '1032102000108', 'BALKRISHNA STORES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP BIPIN RAMAKANT NALAWADE', '', 'THATTE COMPLEX  SHOP NO  8', 'OPP POOJA THEATRE  BAZAR PETH  MAIN ROAD', 'CHIPLUN  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8149441616', '', 186317, 186376, 000108, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1086, 00030908, 415488514, 514, '1073005000093', 'VISHAL DATTU KAMBLE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P PUSESAWALI', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9146228002', '', 000166, 000180, 000093, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1087, 00030909, 415488514, 514, '1073016000010', 'HOTEL DISHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BAPU DAGDU SHINDE', '', 'AT PO   PUSESAVALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '', '', 000406, 000465, 000010, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1088, 00030980, 415488352, 352, '1001005066332', 'SUMAN PRABHAKAR GONDAL', 01, 'Y', 015, 10, '', '', '', '', '', '', '175 A  SIDDHIVINAYAK SCHOOL', 'NEAR BHAIROBA MANDIR  FLAT NO 5', 'SOMWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '8975559242', '', 592863, 592877, 066332, '2023-09-07', 24, 0, '', '1', '', '', NULL),
(1089, 00030981, 415488352, 352, '1001005051419', 'DATTATRAYA JAGANNTH KUMBHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MATRUCHAYA 406 RAVIWAR PETH', 'KUMBHAR LANE KARAD ', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415110, '', '', '8007204641', '', 592878, 592892, 051419, '2023-09-07', 24, 0, '', '2', '', '', NULL),
(1090, 00031017, 415488353, 353, '1002005032666', 'RAMESH LAXMAN SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   VARUNJI PHATA  ', 'SHIVAJI NAGAR   ', 'TAL KARAD', '', '', 'KARAD', '', '', '', 0, '', '', '9960606306', '', 611521, 611535, 032666, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1091, 00031018, 415488353, 353, '1002005045323', 'VARSHA MILINDA NAWALE', 01, 'Y', 030, 10, '', '', '', '', '', '', '395 19 SHANIWAR PETH', 'TAL KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9552599950', '', 611536, 611565, 045323, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1092, 00031019, 415488501, 501, '1004005006676', 'HITESH KHUSHALCHAND OSWAL', 01, 'Y', 015, 10, '', 'OSWAL KHUSHALCHAND GENMAL', '', '', '', '', '', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 151141, 151155, 006676, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1093, 00031020, 415488501, 501, '1004005001956', 'VIJAYA KHUSHALCHAND OSAWAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '', '', 151156, 151170, 001956, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1094, 00031021, 415488501, 501, '1004005002444', 'KHUSHALCHAND GENMAL OSWAL H.U.F', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST MASUR TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415106, '', '', '9850027288', '', 151171, 151185, 002444, '2023-09-08', 24, 0, '', '3', '', '', NULL),
(1095, 00031024, 415488502, 502, '1005005295813', 'PRAMOD NAMDEVRAO KARANJKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P UMBRAJ TAL KARAD', '9850250155', '', '', '', 'UMBRAJ', '', '', '', 0, '264421', '', '9850250155', '', 269782, 269796, 295813, '2023-09-08', 24, 0, '', '3', '', '', NULL),
(1096, 00031025, 415488502, 502, '1005005006300', 'PRADEEP SAMBHAJIRAO NIKAM', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  INDOLI ', 'NEAR PARA', 'TAL   KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9850117790', '', 269797, 269826, 006300, '2023-09-08', 24, 0, '', '4', '', '', NULL),
(1097, 00031022, 415488502, 502, '1005102000708', 'ADVAIT POLYMERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KUSUM MARUTI RUPNAR', 'SONALI VISHWAS MOTE', 'PLOT NO 7 STATE BANK COLONY', 'KUSUMAGANDH GARDEN', 'MAHADEV NAGAR  ISLAMPUR', '', '', 'ISLAMPUR', '', '', '', 415409, '', '02342-', '8793812142', '', 270646, 270705, 000708, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1098, 00031023, 415488502, 502, '1005102000708', 'ADVAIT POLYMERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KUSUM MARUTI RUPNAR', 'SONALI VISHWAS MOTE', 'PLOT NO 7 STATE BANK COLONY', 'KUSUMAGANDH GARDEN', 'MAHADEV NAGAR  ISLAMPUR', '', '', 'ISLAMPUR', '', '', '', 415409, '', '02342-', '8793812142', '', 270706, 270765, 000708, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1099, 00031026, 415488502, 502, '1005016006151', 'SHRIKRUSHNA TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRADIPKUMAR RAMCHANDRA HAJARE', '', 'A P CHAREGAON ', 'TAL  KARAD  ', 'DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9767290085', '', 273376, 273435, 006151, '2023-09-08', 24, 0, '', '5', '', '', NULL),
(1100, 00031027, 415488502, 502, '1005016006151', 'SHRIKRUSHNA TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRADIPKUMAR RAMCHANDRA HAJARE', '', 'A P CHAREGAON ', 'TAL  KARAD  ', 'DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9767290085', '', 273436, 273495, 006151, '2023-09-08', 24, 0, '', '6', '', '', NULL),
(1101, 00031028, 415488354, 354, '1006005014778', 'HOLY FAMILY CONVENT TRUST', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', 'HEAD MISTRESS HOLY FAMILY', '', 'HOLY FAMILY CONVENT SCHOOL', 'A P VIDYANAGAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164272', '', '7721829743', '', 197342, 197401, 014778, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1102, 00031029, 415488354, 354, '1006005011829', 'MANGAL VASANT POTE', 01, 'Y', 015, 10, '', '', '', '', '', '', '40 SONA KIRANA STORE', 'VIDYANAGER', 'KARAD', '', '', 'KARAD', '', '', '', 415124, '271441', '', '', '', 197402, 197416, 011829, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1103, 00031030, 415488355, 355, '1007005032555', 'PRINCIPAL CHAIRMAN SHALA MGT SAMITI SHALA NO-', 01, 'Y', 030, 10, '', '', '', 'Authorised Signatory', '', '', '189 B RAVIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9823761666', '', 123631, 123660, 032555, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1104, 00031031, 415488355, 355, '1007016030309', 'ROOPSONERY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'SR NO 3 A  165  MAIN ROAD', 'GURUWAR PETH  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8956024896', '', 124681, 124740, 030309, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1105, 00031032, 415488355, 355, '1007005034248', 'PALLAVI KAUSHAL PATANKAR', 01, 'Y', 060, 10, '', '', '', '', '', '', '35  RAVIWAR PETH ', 'KARAD ', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8856833770', '', 123661, 123720, 034248, '2023-09-08', 24, 0, '', '3', '', '', NULL),
(1106, 00031033, 415488356, 356, '1011102000146', 'SANJAY YASHWANT PAWAR', 01, 'Y', 060, 13, '', 'SHIVPRASAD INDUSTRIES PROP SANJAY YASHWANT PA', 'NEW ASHIRWAD INDUSTRIES PROP VIMAL SANJAY PAW', '', '', '', 'AP CHACHEGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '267193', '', '9921572707', '', 447317, 447376, 000146, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1107, 00031034, 415488356, 356, '1011005037409', 'DHANANJAY SHANKAR JAGTAP', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RUKMINI NIWAS INDRAPRASTHA COLONY ', 'AGASHIVNAGAR MALKAPUR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '02164-', '9822994525', '', 448592, 448606, 037409, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1108, 00031035, 415488505, 505, '1012005016026', 'KRUSHNAJI PANDURANG SALUNKHE', 01, 'Y', 015, 10, '', 'SHASHIKANT PANDURANG SALUNKHE', '', '', '', '', 'AT   MENDHEGHAR', 'PO  HELWAK', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415207, '02372-', '02372-', '9075502791', '', 098496, 098510, 016026, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1109, 00031036, 415488509, 509, '1020005050128', 'SUPRIYA BAPURAO PATIL', 01, 'Y', 015, 10, '', 'BAPURAO BAJIRAO PATIL', '', '', '', '', 'A P  DHONDEWADI', 'NEAR MARUTI MANDIR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415104, '02164-', '02164-', '9146104127', '', 057591, 057605, 050128, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1110, 00031044, 415488357, 357, '1024005040375', 'JAGADISHCHANDRA JAYAVANTRAO JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', '386 1  DATTA MANDIR MATH ', 'NAJIK KAPIL GRAM KAPIL', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9766338350', '', 185869, 185883, 040375, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1111, 00031015, 415488358, 358, '1026005251685', 'KARTIK DILIP MOHOLKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '87  BUDHWAR PETH ', 'MOHOLKAR HOSPITAL  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9604111551', '', 076262, 076276, 251685, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1112, 00031016, 415488358, 358, '1026005251656', 'DIPALI RAJENDRA KHILARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '54  MAHATMA FULE NAGAR ', 'BUDHWAR PETH  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9975003954', '', 076277, 076291, 251656, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1113, 00031037, 415488359, 359, '1037005007316', 'SAMPAT BALI JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'M NO  1627 25  S NO 191 12 2  F NO 11 ', 'GROUND FLOOR NOBAL HIGHTS KARVE ROAD  KA', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '0233-', '0233-', '7038638624', '', 138227, 138241, 007316, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1114, 00031039, 415488512, 512, '1052005003879', 'GAURAV SURESH DEVARUKHAKAR', 01, 'Y', 015, 10, '', 'AMIT PRAKASH SHINDE', '', '', '', '', 'A P   TASAVADE', 'TAL   KARAD', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8888583241', '', 057707, 057721, 003879, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1115, 00031042, 415488515, 515, '1071005000140', 'AVINASH ATMARAM CHALKE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PAWARWADI   PO  TARUKH', 'TAL   KARAD', 'DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '-', '-', '9373284030', '', 000586, 000600, 000140, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1116, 00031043, 415488515, 515, '1071005000140', 'AVINASH ATMARAM CHALKE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PAWARWADI   PO  TARUKH', 'TAL   KARAD', 'DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '-', '-', '9373284030', '', 000601, 000615, 000140, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1117, 00031040, 415488514, 514, '1073005000062', 'SANJAY SURYAKANT SHAHA', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   PUSESAWALI', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9421213227', '', 000181, 000195, 000062, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1118, 00031041, 415488514, 514, '1073005000001', 'SAMBHAJI JOTIRAM THORAT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   RAHATANI', 'PO   CHORADE', 'TAL   KHATAV DIST   SATARA', '', '', 'SATARA', '', '', '', 415538, '02162-', '02162-', '9822953151', '', 000196, 000210, 000001, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1119, 00031061, 415488515, 515, '1071016000015', 'MARCHANT SYNDICATE GRAMIN BIGAR SHETI SAH CRE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAWALE  TAIGADEWADI', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9764019917', '', 000317, 000331, 000015, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1120, 00031062, 415488515, 515, '1071016000015', 'MARCHANT SYNDICATE GRAMIN BIGAR SHETI SAH CRE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TALMAWALE  TAIGADEWADI', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9764019917', '', 000332, 000346, 000015, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1121, 00031064, 415488354, 354, '1006005014961', 'AMOL BHIMRAO PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P YESHWANTNAGAR NR Y C ', 'COLLAGE KARAD 15 05 1984', 'PAN ATUPP8404C', '', '', 'KARAD', '', '', '', 415115, '', '', '9011757513', '', 197417, 197431, 014961, '2023-09-08', 24, 0, '', '1', '', '', NULL),
(1122, 00031065, 415488354, 354, '1006005153897', 'RUCHITA RAMESH KURADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  GOSHATWADI', 'TAL  PATAN', 'DIST  SATARA', '', '', 'PATAN', '', '', '', 415207, '', '02372-', '8605785232', '', 197432, 197446, 153897, '2023-09-08', 24, 0, '', '2', '', '', NULL),
(1123, 00031066, 415488354, 354, '1006005155411', 'DIPAK SHAHAJI JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SAI PRASAD COLONEY BANAWADI TAL KARAD', 'OPP DEEPA POLTRY FORM SAIDAPUR VIDYANAGA', 'SAIDAPUR TAL KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9673280135', '', 197447, 197461, 155411, '2023-09-08', 24, 0, '', '3', '', '', NULL),
(1124, 00031094, 415488352, 352, '1001005685110', 'VIMAL KAKASAHEB MORE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RAJARAM PARK 3PLOT NO 4', 'VAKAN ROAD', 'KARAD 9423827782', '', '', 'KARAD', '', '', '', 415110, '224202', '', '9423827782', '', 592953, 592967, 685110, '2023-09-11', 24, 0, '', '2', '', '', NULL),
(1125, 00031095, 415488352, 352, '1001005013862', 'ANIL SHRINIVAS LAHOTI', 01, 'Y', 030, 10, '', '', '', '', '', '', '76 GURUWAR PETH', 'CHAVADI CHOUK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '21792', '', '9881898599', '', 592968, 592997, 013862, '2023-09-11', 24, 0, '', '3', '', '', NULL),
(1126, 00031096, 415488352, 352, '1001005013862', 'ANIL SHRINIVAS LAHOTI', 01, 'Y', 030, 10, '', '', '', '', '', '', '76 GURUWAR PETH', 'CHAVADI CHOUK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '21792', '', '9881898599', '', 592998, 593027, 013862, '2023-09-11', 24, 0, '', '4', '', '', NULL),
(1127, 00031093, 415488352, 352, '1001005056466', 'RAMESH MARUTI KAMBALE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  SAIDAPUR VIDYANAGAR', 'NEAR MILTARY HOTEL', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9922274501', '', 592893, 592952, 056466, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1128, 00031097, 415488353, 353, '1002005852477', 'DATTATRAY MAHADEV MALI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  OND ', 'TAL  KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9970657134', '', 611566, 611580, 852477, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1129, 00031102, 415488353, 353, '1002005035008', 'LALCHAND CHOTALAL SHAH(HUF)', 01, 'Y', 030, 10, '', '', '', '', '', '', '61 PUSHKAR RAM MANDIRAJAVAL', 'SHIVAJI HOUSING SO KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 611581, 611610, 035008, '2023-09-11', 24, 0, '', '6', '', '', NULL),
(1130, 00031101, 415488353, 353, '1002016000497', 'MOHAN TRADING COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MOHAN TRADING CO.', '', '241  TRANSPORT ROAD', 'NEAR PANPOI', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '22136', '', '9881103233', '', 623402, 623461, 000497, '2023-09-11', 24, 0, '', '5', '', '', NULL),
(1131, 00031098, 415488353, 353, '1002016000374', 'KANTILAL AND SONS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'KANTILAL AND SONS', '', '241 SHANIWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '87881797', '', '9850731911', '', 623222, 623281, 000374, '2023-09-11', 24, 0, '', '2', '', '', NULL),
(1132, 00031099, 415488353, 353, '1002016003047', 'NEW INDIA FRUIT COMPANY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'TOHID FARUKH BAGWAN', '', 'SHAMRAO PATIL FRUIT AND VEGITABLE MARKET', 'G 5 29 302 398 BAIL BAJAR ROAD KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9970171120', '', 623282, 623341, 003047, '2023-09-11', 24, 0, '', '3', '', '', NULL),
(1133, 00031100, 415488353, 353, '1002016003034', 'BHARAT PAINTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHABANA GULAMHUSEN WAIKAR', '', '296  PUNE BANGLOR HIGHWAY', 'OPP SOCIETY PETROL PUMP', 'MALKAPUR  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9822077762', '', 623342, 623401, 003034, '2023-09-11', 24, 0, '', '4', '', '', NULL),
(1134, 00031103, 415488501, 501, '1004005003187', 'BASWESHWAR RAMCHANDRA CHENAGE', 01, 'Y', 015, 10, '', 'CHENAGE JYOTI BASAWESHWAR', '', '', '', '', 'A P  MASUR', 'GUNPHAN BANGLOW NAVIN GAVTHAN KIVAL ROAD', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '9850659708', '', 151186, 151200, 003187, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1135, 00031106, 415488502, 502, '1005005001303', 'SURESH NANASAHEB MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P CHAREGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415120, '', '', '', '', 269827, 269841, 001303, '2023-09-11', 24, 0, '', '3', '', '', NULL),
(1136, 00031108, 415488502, 502, '1005016000033', 'MS.GHUTE PRALHAD GANPATI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRALHAD GANAPATI GHUTE', 'SUNIL RAGHUNATH PANSARE', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '', '', 273586, 273645, 000033, '2023-09-11', 24, 0, '', '5', '', '', NULL),
(1137, 00031107, 415488502, 502, '1005016000033', 'MS.GHUTE PRALHAD GANPATI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PRALHAD GANAPATI GHUTE', 'SUNIL RAGHUNATH PANSARE', 'A P UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '', '', 273526, 273585, 000033, '2023-09-11', 24, 0, '', '4', '', '', NULL),
(1138, 00031104, 415488502, 502, '1005016006252', 'ANAND VIT SUPPLIERS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'SARIKA HEMANT JADHAV', '', 'A P   UMBRAJ ', '20  MANIK CHOUK ', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9028084699', '', 273496, 273525, 006252, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1139, 00031105, 415488502, 502, '1005106000151', 'PRAVIN YASHWANT JADHAV', 01, 'Y', 030, 13, '', '', '', '', '', '', 'A P  UMBRAJ', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9607407172', '', 270766, 270795, 000151, '2023-09-11', 24, 0, '', '2', '', '', NULL),
(1140, 00031109, 415488502, 502, '1005005011162', 'SHAHAJI APPA (ABA) JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P TASAVADE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '', '', '8975994561', '', 269842, 269871, 011162, '2023-09-11', 24, 0, '', '6', '', '', NULL),
(1141, 00031110, 415488356, 356, '1011016000974', 'PATIL SALES CORPORATION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DILIP PANDURANG PATIL', '', 'A P MALKAPUR', 'PANDURANG BHAVAN P B ROAD NEAR HOTEL PUN', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '02164228', '', '9890162727', '', 449296, 449355, 000974, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1142, 00031111, 415488356, 356, '1011005036471', 'RAMESH LAXMAN JADHAV', 01, 'Y', 060, 10, '', '', '', '', '', '', '449 32 BEGHAR  ', 'NEAR WATER TANK  GOLESHWAR ', 'TAL   KARAD DIST   SATARA  ', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850278343', '', 448607, 448666, 036471, '2023-09-11', 24, 0, '', '2', '', '', NULL),
(1143, 00031112, 415488359, 359, '1037005004288', 'ABHIJIT VITTHAL PAWAR', 01, 'Y', 015, 10, '', 'AISHWARYA DEEPAK NIPRUL', '', '', '', '', '1635  KALA ANAND ', 'SUBHADRA NAGAR GOLESHWAR ROAD ', 'KARVE NAKA  KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8956909211', '', 138242, 138256, 004288, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1144, 00031113, 415488512, 512, '1052005003962', 'SULTANA MUJAMIN SHAIKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  KONEGAON', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '02164-', '02164-', '9637601076', '', 057722, 057736, 003962, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1145, 00031114, 415488514, 514, '1073016000015', 'MAITHILY TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'VARSHA SUDARSHAN MITHARE', '', 'GANGA SHANKAR COMPLEX', 'A P  PUSESAWALI', 'TAL  KHATAV   DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '8855957735', '', 000466, 000525, 000015, '2023-09-11', 24, 0, '', '1', '', '', NULL),
(1146, 00031115, 415488514, 514, '1073106000001', 'V D KADAM', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', '', '', 'A P   PUSESAWALI ', 'D P KADAM COMPLEX  DATTA CHOUK ', 'TAL   KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9730687777', '', 000001, 000015, 000001, '2023-09-11', 24, 0, '', '2', '', '', NULL),
(1147, 00031208, 415488512, 512, '1052005000035', 'APPASO HINDURAO SHEDAGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P VADOLI BHIKESHWAR ', 'TAL KARAD', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415106, '655788', '', '9689526290', '', 057767, 057781, 000035, '2023-09-12', 24, 0, '', '3', '', '', NULL),
(1148, 00031209, 415488512, 512, '1052005002717', 'MAYUR RAJENDRA PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  PAL', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415014, '', '02164-', '9881426475', '', 057782, 057796, 002717, '2023-09-12', 24, 0, '', '4', '', '', NULL),
(1149, 00031207, 415488512, 512, '1052005003919', 'RAMESH CHANDRAKANT SALUNKHE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT   VARADE  POST   UMBRAJ', 'TAL   KARAD', 'DIST    SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9284560028', '', 057737, 057766, 003919, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1150, 00031206, 415488512, 512, '1052016000112', 'SALUNKHE ENTERPRISES PROP CHANDRAKANT NIVRUTT', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'CHANDRAKANT NIVRATI SALUNKHE', '', 'A P  WARADE', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '9822643268', '', 060286, 060345, 000112, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1151, 00031203, 415488359, 359, '1037005005103', 'PANDIT KHANDU DHAPARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'NEAR LAXMI MANDIR ', 'BOUDHA WADA PARISAR ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9822281209', '', 138257, 138271, 005103, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1152, 00031204, 415488359, 359, '1037005004371', 'CHHAYA PRAKASH DHUMAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'VITTHAL NAGAR ', 'SHANIWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8180806017', '', 138272, 138286, 004371, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1153, 00031205, 415488359, 359, '1037005002176', 'RANJANA SATISH ROKADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'VIJAYALAXMI PARK GOLESHWAR ROAD KARVE NA', 'GOLESHWAR KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9422604251', '', 138287, 138301, 002176, '2023-09-12', 24, 0, '', '3', '', '', NULL),
(1154, 00031202, 415488201, 201, '1032005000120', 'RAVINDRA SUBHASH SALVI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'HOUSE NO  571   MURADPUR KUMBHAR WADI', 'TAL  CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9422433267', '', 186466, 186495, 000120, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1155, 00031179, 415488358, 358, '1026005251686', 'MOHAN SAMBHAJI KADAM', 01, 'Y', 015, 10, '', 'SHIVAJI ADHIKRAO CHAVAN', '', '', '', '', '133  PATIL GALLI', 'MANGALWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7720006200', '', 076292, 076306, 251686, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1156, 00031180, 415488358, 358, '1026005001673', 'SUDESH JOHARI KAROSE', 01, 'Y', 015, 10, '', 'REKHA SUDESH KAROSE', '', '', '', '', '103 SHANIWAR PETH KARAD', 'MUNCIPAL COLONY KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 076307, 076321, 001673, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1157, 00031199, 415488357, 357, '1024005002756', 'SUDHAKAR VASNATRAO KUMBHAR', 01, 'Y', 060, 10, '', '', '', '', '', '', '192 D 3 MANGALWAR PETH', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '227456', '', '9922444856', '', 185884, 185943, 002756, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1158, 00031200, 415488357, 357, '1024016000238', 'OMKAR PHARMA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '252 4 7 YASH VAIBHAV', 'GALA NO 8 GROUND FLOOR', 'MANGALWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '224004', '', '7387244033', '', 186826, 186885, 000238, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1159, 00031201, 415488357, 357, '1024103000054', 'SHRI MAHALAXMI SCRAP TRADERS PRO RAJJAKBHAI N', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PATHAN', '', '7 2 PRAKASHNAGAR BUDHWAR', 'PETH KARAD', '9420486410', '', '', 'KARAD', '', '', '', 415110, '', '', '9420486410', '', 181351, 181410, 000054, '2023-09-12', 24, 0, '', '3', '', '', NULL),
(1160, 00031197, 415488505, 505, '1012016000302', 'VEDANT MEDICAL AND GENERAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   CHAREGAON', 'PAWAR MALA', 'TAL    KARAD   DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '7709645534', '', 101131, 101190, 000302, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1161, 00031198, 415488505, 505, '1012005002716', 'RAJARAM VITTHAL DESAI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P THOMASE GAONTHAN', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415109, '', '02372-', '9823913751', '', 098511, 098540, 002716, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1162, 00031195, 415488356, 356, '1011005037835', 'SHOBHA JOTIRAM SHINGAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   KALPANA SURYAKANT THORAT', 'M NO 2306 2 1 GF 1 DHANRAJ HEIGHTS  KRUS', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9420881037', '', 448667, 448681, 037835, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1163, 00031196, 415488356, 356, '1011005003036', 'DATTATRYA KHANDU SURYVANSHI', 01, 'Y', 015, 10, '', '', '', '', '', '', '1026 VISHRAMNAGAR', 'MALKAPUR MAHSOBA MANDIR', 'M 9850096901', '', '', 'KARAD', '', '', '', 415539, '', '', '', '', 448682, 448696, 003036, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1164, 00031194, 415488355, 355, '1007102000064', 'SADASHIV VITHOBA PADALKAR AND SONS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PARTNERS:-PADALKAR SADASHIV V.', 'PADALKAR GANESH SADASHIV', '60 SHANIWAR PETH KARAD', 'KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-22', '', '9423827773', '', 122896, 122955, 000064, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1165, 00031192, 415488354, 354, '1006005011084', 'PRASHANT SAMPATRAO PATIL', 01, 'Y', 030, 10, '', 'SAMPATRAO APPASO PATIL', '', '', '', '', 'A P GOVARE TAL KARAD', 'TAL KARAD', 'DIST SATATA', '', '', 'KARAD', '', '', '', 415110, '', '', '9960466496', '', 197462, 197491, 011084, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1166, 00031193, 415488354, 354, '1006016000572', 'PRASHANT PANDURANG BHOSALE', 01, 'Y', 060, 11, '', '', '', '', '', '', 'A P  KADEGAON', 'NEAR BHAIRAVNATH MANDIR', 'TAL KADEGAON DIST SANGLI', '', '', 'SANGLI', '', '', '', 415304, '0233-', '0233-', '9921274455', '', 194101, 194160, 000572, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1167, 00031191, 415488502, 502, '1005042000009', 'SHREETEJ TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AMIT RAJENDRA KENJALE', '', 'A P CHAREGAON', 'NEAR MAHADEV TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9881562147', '', 273691, 273705, 000009, '2023-09-12', 24, 0, '', '5', '', '', NULL),
(1168, 00031187, 415488502, 502, '1005005295197', 'VIKAS SHMARAO CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT BHUYACHIWADI PO PERLE ', 'TAL KARAD DIST SATARA ', '', '', '', 'KARAD', '', '', '', 0, '', '', '9359824237', '', 269872, 269901, 295197, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1169, 00031188, 415488502, 502, '1005042000009', 'SHREETEJ TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AMIT RAJENDRA KENJALE', '', 'A P CHAREGAON', 'NEAR MAHADEV TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9881562147', '', 273646, 273660, 000009, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1170, 00031189, 415488502, 502, '1005042000009', 'SHREETEJ TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AMIT RAJENDRA KENJALE', '', 'A P CHAREGAON', 'NEAR MAHADEV TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9881562147', '', 273661, 273675, 000009, '2023-09-12', 24, 0, '', '3', '', '', NULL),
(1171, 00031190, 415488502, 502, '1005042000009', 'SHREETEJ TRADING COMPANY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'AMIT RAJENDRA KENJALE', '', 'A P CHAREGAON', 'NEAR MAHADEV TEMPLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9881562147', '', 273676, 273690, 000009, '2023-09-12', 24, 0, '', '4', '', '', NULL),
(1172, 00031185, 415488501, 501, '1004005011211', 'BAJIRAO RAMCHANDRA CHAVAN', 01, 'Y', 030, 10, '', 'ARVIND BAJIRAO CHAVAN', '', '', '', '', 'DUDHGANGA HOUSING SOCIETY', 'BANAWADI COLONY BANAWADI ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '272280', '', '9890397616', '', 151201, 151230, 011211, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1173, 00031186, 415488501, 501, '1004106000085', 'RAHUL SHAMKUMAR SHAH', 01, 'Y', 060, 13, '', '', '', '', '', '', 'MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9527218463', '', 148396, 148455, 000085, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1174, 00031181, 415488352, 352, '1001005684368', 'PADMAPRIYA NARENDRA WALVADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '361  SOMWAR PETH', 'NEAR HATKESHWAR MANDIR', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9075773356', '', 593028, 593042, 684368, '2023-09-12', 24, 0, '', '1', '', '', NULL),
(1175, 00031182, 415488352, 352, '1001005681063', 'SHIVAJI YASHAWANT LANDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '173  KULKARNI  LANDE GALLI', 'TUNG', 'TAL MIRAJ DIST SANGLI', '', '', 'MIRAJ', '', '', '', 416301, '', '', '9730530003', '', 593043, 593057, 681063, '2023-09-12', 24, 0, '', '2', '', '', NULL),
(1176, 00031183, 415488352, 352, '1001005681091', 'SOMNATH VINAYAK BHISE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P KIROLI', 'TAL KOREGOAN', 'DIST SATARA', '', '', 'KOREGOAN', '', '', '', 415116, '', '02163-', '7972651260', '', 593058, 593117, 681091, '2023-09-12', 24, 0, '', '3', '', '', NULL),
(1177, 00031184, 415488352, 352, '1001016006148', 'SHRI SAI CYCLES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '16 GURUWAR PETH', 'KASAR GALLI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '224703', '', '9422401103', '', 569566, 569625, 006148, '2023-09-12', 24, 0, '', '4', '', '', NULL),
(1178, 00031260, 415488358, 358, '1026005251157', 'AKSHAY NIVAS DURGAVALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   LAVANDMACHI ', 'KILLEMACHINDRAGAD ', 'TAL   WALWA  DIST  SANGLI ', '', '', 'SANGLI', '', '', '', 415302, '0233-', '0233-', '9920209263', '', 076322, 076336, 251157, '2023-09-12', 24, 0, '', '1', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(1179, 00031391, 415488358, 358, '1026005250336', 'GOJABAI SURESH MANE', 01, 'Y', 015, 10, '', 'SHIVAJI SURESH MANE', '', '', '', '', '240  FULENAGAR KARAD', 'BUDHAWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8485888563', '', 076337, 076351, 250336, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1180, 00031412, 415488356, 356, '1011005001047', 'ANIL BHAUSO SHINDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO  MALAKAPUR', 'SHINDE MALA', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '8806638179', '', 448697, 448726, 001047, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1181, 00031411, 415488355, 355, '1007016030359', 'HARSHAD KIRANA STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '180  RAVIWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9923377633', '', 124741, 124800, 030359, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1182, 00031407, 415488501, 501, '1004005012640', 'MAHADEV ANANDA GAWADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST CHIKHALI', 'TAL KARAD', 'DIST SATARA ', '', '', 'KARAD', '', '', '', 415106, '02164-', '02164-', '8826889052', '', 151231, 151245, 012640, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1183, 00031413, 415488201, 201, '1032016000431', 'COMFORT COOL CA', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', '', '', 'SHREE COMPLEX BAZAR PETH', 'CHIPLUN', 'RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415405, '', '', '9822487324', '', 189196, 189225, 000431, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1184, 00031414, 415488201, 201, '1032016000759', 'SHIVKRUPA SAHAKARI PATHPEDHI L', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'A P MHASWAD TAL MAN', 'OPP S T STAND MHASWAD', 'DIST SATARA    PIN CODE 415509', '', '', 'MHASWAD', '', '', '', 415509, '270346', '', '9850831853', '', 189226, 189285, 000759, '2023-09-13', 24, 0, '', '2', '', '', NULL),
(1185, 00031392, 415488357, 357, '1024016000524', 'JANLAXMI DEVELOPERS AND SUPPLIERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHIVAJI JANARDHAN MANE', '', 'PO SURLI KAMATHI', 'KADEGAON ROAD', 'TAL    KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9067112277', '', 186886, 186945, 000524, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1186, 00031393, 415488357, 357, '1024005002058', 'MANGESH PRAKASH PATKI', 01, 'Y', 030, 10, '', '', '', '', '', '', '387 KONARKA SOMWAR PETH', 'KARAD', '9890469469', '', '', 'KARAD', '', '', '', 415110, '', '', '9890469469', '', 185944, 185973, 002058, '2023-09-13', 24, 0, '', '2', '', '', NULL),
(1187, 00031394, 415488357, 357, '1024005002828', 'ANGHA SHEKHAR DESHPANDE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'E 4  A  RUKMINIGARDAN', 'BHAG 2 MANGALWAR PETH', 'KARAD  226297', '', '', 'KARAD', '', '', '', 415110, '226297', '', '9011200955', '', 185974, 186003, 002828, '2023-09-13', 24, 0, '', '3', '', '', NULL),
(1188, 00031410, 415488354, 354, '1006005158589', 'LALIT NANDKUMAR ZIRPE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KHATAV', 'TAL KHATAV', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415505, '', '', '9370301207', '', 197492, 197506, 158589, '2023-09-13', 24, 0, '', '3', '', '', NULL),
(1189, 00031408, 415488354, 354, '1006103000084', 'SATVASHIL DNYANDEV KADAM PRO S D KADAM AND AS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SATVASHIL DNYANDEV KADAM', '', 'MILKAT NO 956  PUSESAVLI', 'TAL KHATAV', 'DIST SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9730689999', '', 190831, 190890, 000084, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1190, 00031409, 415488354, 354, '1006103000084', 'SATVASHIL DNYANDEV KADAM PRO S D KADAM AND AS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SATVASHIL DNYANDEV KADAM', '', 'MILKAT NO 956  PUSESAVLI', 'TAL KHATAV', 'DIST SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '9730689999', '', 190891, 190950, 000084, '2023-09-13', 24, 0, '', '2', '', '', NULL),
(1191, 00031395, 415488352, 352, '1001005681595', 'TATYABA KHASHABA PAWAR', 01, 'Y', 015, 10, '', 'LAXMIKANT TATYABA PAWAR', 'HARI TUKARAM LAD', '', '', '', '439  A P  VELE', 'TAL  VAI', 'DIST  SATARA', '', '', 'SATARA', '', '', '', 415001, '', '', '9822008865', '', 593118, 593132, 681595, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1192, 00031397, 415488352, 352, '1001005685148', 'VIKRAM RAMESH MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MARUTI MANDIR JAVAL', 'GOLESHWAR', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '8805106330', '', 593133, 593147, 685148, '2023-09-13', 24, 0, '', '3', '', '', NULL),
(1193, 00031396, 415488352, 352, '1001016006689', 'MILAN HOSIERY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PROP SURESH JETHALAL DEDHIYA', '', 'SURESH JETHALA DEDHIYA', '47  SOMWAR PETH  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9404661421', '', 569626, 569685, 006689, '2023-09-13', 24, 0, '', '2', '', '', NULL),
(1194, 00031406, 415488353, 353, '1002005853326', 'RAJIYA ALAMSHA SHIKALGAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'P B ROAD NEAR STATE BANK MALKAPUR', 'MALKAPUR KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9665596000', '', 611731, 611745, 853326, '2023-09-13', 24, 0, '', '9', '', '', NULL),
(1195, 00031405, 415488353, 353, '1002016002543', 'AAI PAINTING WORKS PROP.WAGHMARE SAMBHAJI BHI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AAI PAINTING WORKS PROP.WAGHMARE SA', '', 'KACHAREWADI POST HELGAON ', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-20', '02164-', '9004589109', '', 623762, 623821, 002543, '2023-09-13', 24, 0, '', '8', '', '', NULL),
(1196, 00031404, 415488353, 353, '1002005045892', 'BABY MADANLAL SOLANKI', 01, 'Y', 060, 10, '', '', '', '', '', '', 'FLAT NO 2 SHRIKRISHANA APPARTMENT', 'SOMWARPETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9028511239', '', 611671, 611730, 045892, '2023-09-13', 24, 0, '', '7', '', '', NULL),
(1197, 00031401, 415488353, 353, '1002016003017', 'INGENIOUS TRIBE PRIVATE LIMITED', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ANIKET SURESH BHANGE', 'SURESH DIGAMBAR BHANGE', 'A P GOVARE  NEAR Z P SCHOOL', 'CHOUNDESHVARI NAGAR', 'KARAD', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7249184981', '', 623582, 623641, 003017, '2023-09-13', 24, 0, '', '4', '', '', NULL),
(1198, 00031402, 415488353, 353, '1002016003017', 'INGENIOUS TRIBE PRIVATE LIMITED', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ANIKET SURESH BHANGE', 'SURESH DIGAMBAR BHANGE', 'A P GOVARE  NEAR Z P SCHOOL', 'CHOUNDESHVARI NAGAR', 'KARAD', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7249184981', '', 623642, 623701, 003017, '2023-09-13', 24, 0, '', '5', '', '', NULL),
(1199, 00031403, 415488353, 353, '1002016003017', 'INGENIOUS TRIBE PRIVATE LIMITED', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ANIKET SURESH BHANGE', 'SURESH DIGAMBAR BHANGE', 'A P GOVARE  NEAR Z P SCHOOL', 'CHOUNDESHVARI NAGAR', 'KARAD', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7249184981', '', 623702, 623761, 003017, '2023-09-13', 24, 0, '', '6', '', '', NULL),
(1200, 00031398, 415488353, 353, '1002016002884', 'RATNARAJ TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PROP RAKESH LALCHAND SHAH', '', 'PLOT NO  376  THORAT BUILDING', 'IN FRONT OF URBAN BANK TALBHAG BRANCH', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8421461777', '', 623462, 623521, 002884, '2023-09-13', 24, 0, '', '1', '', '', NULL),
(1201, 00031399, 415488353, 353, '1002005025125', 'NEELAM ABHIJIT PATIL', 01, 'Y', 060, 10, '', '', '', '', '', '', 'R G P HOUSE  NEAR VRUNDAVAN LOWN', 'ANANDI NAGAR  GANGAPUR ROAD', 'NASHIK', '', '', 'NASHIK', '', '', '', 422013, '-', '-', '9623028200', '', 611611, 611670, 025125, '2023-09-13', 24, 0, '', '2', '', '', NULL),
(1202, 00031400, 415488353, 353, '1002016003017', 'INGENIOUS TRIBE PRIVATE LIMITED', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ANIKET SURESH BHANGE', 'SURESH DIGAMBAR BHANGE', 'A P GOVARE  NEAR Z P SCHOOL', 'CHOUNDESHVARI NAGAR', 'KARAD', '', '', 'KARAD', '', '', '', 415105, '020-', '020-', '7249184981', '', 623522, 623581, 003017, '2023-09-13', 24, 0, '', '3', '', '', NULL),
(1203, 00031484, 415488515, 515, '1071005000135', 'SAMPAT RAMCHANDRA KARALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KUSUR ', 'NEAR S G M HIGH SCHOOL', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '7798726131', '', 000616, 000630, 000135, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1204, 00031482, 415488512, 512, '1052103000002', 'SACHIN SHIVAJIRAO PAWAR', 01, 'Y', 060, 13, '', 'SHIVAJIRAO NAMDEO PAWAR', 'MS JAY ENGINEERING WORKS PRO.SACHIN SHIVAJI P', '', '', '', 'A P   CHAREGAON', 'TAL  KARAD', ' DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9822829598', '', 056071, 056130, 000002, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1205, 00031483, 415488512, 512, '1052016000045', 'B.RAMCHANDRA & CO', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'KUMBHAR ARJUN RAMCHANDRA', 'KUMBHAR PRASAD ARJUN', 'PLOT NO  C 38 ', 'TASWADE M I D C', 'MIDC TASWADE', '', '', 'KARAD', '', '', '', 415110, '02164-32', '02164-25', '9820310782', '', 060346, 060405, 000045, '2023-09-14', 24, 0, '', '2', '', '', NULL),
(1206, 00031479, 415488359, 359, '1037005005501', 'RUPALI SUNDAR SADAMATE', 01, 'Y', 015, 10, '', '', '', '', '', '', '391 1  YASHWANT TRIMURTI COLONY', 'KARVE NAKA', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7709499857', '', 138302, 138316, 005501, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1207, 00031480, 415488359, 359, '1037005000833', 'UJWALA SUNDAR SADAMATE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'YASHWANT NIWAS TRIMURTI COLONY', 'GOLESHWAR ROAD KARVENAKA KARAD', 'KARVENAKA TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '223876', '', '9923470087', '', 138317, 138331, 000833, '2023-09-14', 24, 0, '', '2', '', '', NULL),
(1208, 00031481, 415488359, 359, '1037005007452', 'SHIVAJI RAMCHANDRA PATIL', 01, 'Y', 015, 10, '', 'PADMAJA SHIVAJIRAO PATIL', '', '', '', '', 'C O   SHIVAJIRAO HANMANTRAO NAGARE', 'AT PO   GOLESHWAR  NEAR MARUTI TEMPLE', 'TAL   KARAD   DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9423778740', '', 138332, 138346, 007452, '2023-09-14', 24, 0, '', '3', '', '', NULL),
(1209, 00031501, 415488505, 505, '1012016000378', 'SANKET AGENCY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SANKET GOVIND KALAKE', '', 'A P   PATAN M NO 691 692 ', 'MAIN ROAD  SOMWAR PETH', 'TAL   PATAN  DIST   SATARA', '', '', 'PATAN', '', '', '', 415206, '02372-', '02372-', '9404506623', '', 101191, 101205, 000378, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1210, 00031500, 415488356, 356, '1011005003800', 'RANGUBAI SHANKAR CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RANGUBAI NIVAS', 'VITHHALDEO SOCIETY', 'MALKAPUR', '', '', 'KARAD', '', '', '', 415539, '', '', '9223261423', '', 448727, 448741, 003800, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1211, 00031499, 415488355, 355, '1007005034898', 'BHARATIYA POSTAL EMPLOYEES ASSOCIATION GROUP ', 01, 'Y', 015, 10, '', '', '', 'Authorised Signatory', '', '', 'BHARATIYA POSTAL OFFICE', 'SHANIWAR PETH KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9850302027', '', 123721, 123735, 034898, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1212, 00031496, 415488501, 501, '1004005007438', 'SHIVAJI JAGANNATH JADHAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P TASWADE', 'TAL KARAD', 'DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9923479748', '', 151246, 151260, 007438, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1213, 00031497, 415488501, 501, '1004005013477', 'VIKAS JAYVANT CHAVHAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KALGAON ', 'KALGAON  UMBRAJ  SATARA', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415109, '', '02164-', '8149353003', '', 151261, 151275, 013477, '2023-09-14', 24, 0, '', '2', '', '', NULL),
(1214, 00031498, 415488501, 501, '1004005013470', 'ABHISHEK RAMESH GHOLAP', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P NIGDAI', 'TAL KARAD', 'DIST   SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '7620338835', '', 151276, 151290, 013470, '2023-09-14', 24, 0, '', '3', '', '', NULL),
(1215, 00031495, 415488353, 353, '1002005006965', 'SWAPNIL RAVINDRA SHAH', 01, 'Y', 030, 10, '', '', '', '', '', '', '190 B SHANIWAR PETH KARAD BEHIND POLICE ', 'NEAR KARPE DHARMASHALA RAM AUTO MOBILE ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '222258', '', '9422400584', '', 611911, 611940, 006965, '2023-09-14', 24, 0, '', '6', '', '', NULL),
(1216, 00031494, 415488353, 353, '1002005006965', 'SWAPNIL RAVINDRA SHAH', 01, 'Y', 030, 10, '', '', '', '', '', '', '190 B SHANIWAR PETH KARAD BEHIND POLICE ', 'NEAR KARPE DHARMASHALA RAM AUTO MOBILE ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '222258', '', '9422400584', '', 611881, 611910, 006965, '2023-09-14', 24, 0, '', '5', '', '', NULL),
(1217, 00031490, 415488353, 353, '1002005851671', 'SHRIPATI HANMANT SHIRKE', 01, 'Y', 015, 10, '', 'VINOD SHRIPATI SHIRKE', '', '', '', '', 'A P  NANDALAPUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9552159965', '', 611746, 611760, 851671, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1218, 00031491, 415488353, 353, '1002005850617', 'PRASHANT POPATLAL SHAH HUF', 01, 'Y', 060, 10, '', '', '', '', '', '', '286 2  PARAG  BUDHWAR PETH ', 'STATION ROAD  KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822458155', '', 611761, 611820, 850617, '2023-09-14', 24, 0, '', '2', '', '', NULL),
(1219, 00031492, 415488353, 353, '1002005850618', 'RAHUL LALCHAND SHAH HUF', 01, 'Y', 060, 10, '', '', '', '', '', '', '286 2 PARAG  ', 'STATION ROAD  ', 'BUDHAWAR PETH   KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9096988555', '', 611821, 611880, 850618, '2023-09-14', 24, 0, '', '3', '', '', NULL),
(1220, 00031493, 415488353, 353, '1002016002883', 'K N GUJAR MEMORIAL HOSPITAL KARAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'ASHOK GANGARAM GUJAR', '', 'PLOT NO 203  A 6', 'SHANIWAR PETH  NEAR ST STAND', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9850332268', '', 623822, 623881, 002883, '2023-09-14', 24, 0, '', '4', '', '', NULL),
(1221, 00031485, 415488352, 352, '1001005020438', 'KAMAL CHANDRAKANT PAWAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '24 RANJEET TOWERS ', 'SHANIWAR PETH ', 'KARAD ', '', '', 'KARAD', '', '', '', 415110, '', '', '9822855594', '', 593148, 593177, 020438, '2023-09-14', 24, 0, '', '1', '', '', NULL),
(1222, 00031487, 415488352, 352, '1001005050872', 'KUMARPAL PADAMASI SHAH', 01, 'Y', 030, 10, '', '', '', '', '', '', '457 5 SHANIWAR PETH KARAD DIST SATARA', 'OPP POPATBHAI PETROL PUMP KARAD', 'KARAD MOB 9403598757', '', '', 'KARAD', '', '', '', 415110, '02164222', '', '9403598757', '', 593178, 593207, 050872, '2023-09-14', 24, 0, '', '3', '', '', NULL),
(1223, 00031489, 415488352, 352, '1001005682839', 'VIKAS SUDAM PATOLE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  AASAD', 'TAL  KADEGAON  DIST  SANGLI', '', '', '', 'SANGLI', '', '', '', 416303, '0233-', '0233-', '9021459359', '', 593208, 593237, 682839, '2023-09-14', 24, 0, '', '5', '', '', NULL),
(1224, 00031486, 415488352, 352, '1001016006167', 'PAR EXCELLANCE PROP PROP', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'PAR EXCELLANCE', '245 GURUWAR PETH', 'KARAD 9423262500', '', '', 'KARAD', '', '', '', 415110, '226248', '', '8600356005', '', 569686, 569745, 006167, '2023-09-14', 24, 0, '', '2', '', '', NULL),
(1225, 00031488, 415488352, 352, '1001016006115', 'CHAITANYA NAGARI SAHAKARI PATSANSTHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '91 SOMWAR PETH', 'PAWASKAR GALLI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164228', '', '8796233673', '', 569746, 569805, 006115, '2023-09-14', 24, 0, '', '4', '', '', NULL),
(1226, 00031579, 415488353, 353, '1002005853168', 'PRAMOD BHIMRAO YADAV', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  TAMBAVE', 'TAL KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415114, '02164-', '02164-', '9850021449', '', 611971, 611985, 853168, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1227, 00031578, 415488353, 353, '1002005038363', 'DATTATRAY NIWAS GANESHKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A PAGASHIVKAR', 'NEAR CHAVAN KIRANA STORES', 'TALKARAD MO 9689361945', '', '', 'KARAD', '', '', '', 0, '', '', '9689361945', '', 611941, 611970, 038363, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1228, 00031580, 415488353, 353, '1002016002614', 'YARANA POULTRY SERVICE PROP.BASHIR USMAN KARB', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BASHIR USMAN KARBHARI', '', '241 3 B PATAN COLONY SHANIWAR PETH', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822342037', '', 623882, 623941, 002614, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1229, 00031581, 415488353, 353, '1002016002614', 'YARANA POULTRY SERVICE PROP.BASHIR USMAN KARB', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BASHIR USMAN KARBHARI', '', '241 3 B PATAN COLONY SHANIWAR PETH', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822342037', '', 623942, 624001, 002614, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1230, 00031600, 415488501, 501, '1004106000073', 'MS OLYMPICA INDANE GAS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'M/S OLYMPICA INDANE GAS', '', 'A P   MALWADI PANDHARPUR ROAD', 'MASUR M NO 90', 'TAL   KARAD   DIST   SATARA', '', '', 'MASUR', '', '', '', 415106, '02164252', '02164252', '9822458819', '', 148456, 148515, 000073, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1231, 00031601, 415488501, 501, '1004005003538', 'RAMCHANDRA BHIKOBA DHARANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KIVAL  MASUR', 'TAL  KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '7385676028', '', 151291, 151305, 003538, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1232, 00031602, 415488501, 501, '1004005007105', 'SHAMRAO SHANKARRAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KAVATHE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9820918196', '', 151306, 151320, 007105, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1233, 00031603, 415488501, 501, '1004005012940', 'RAMCHANDRA SHAMRAO JAGADALE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P SHIRAWADE', 'TAL KARAD ', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415115, '', '02164-', '9421213062', '', 151321, 151335, 012940, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1234, 00031604, 415488502, 502, '1005005296018', 'MINAKSHI NILESH SUPANEKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P UMBRAJ ', 'TAL KARAD DIST SATARA', 'KARAD', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9028852020', '', 269902, 269931, 296018, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1235, 00031605, 415488502, 502, '1005005299609', 'RAJBALA DATTATRAY MOHITE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO  UMBRAJ', 'S T STAND JAVAL', 'TAL  KARAD   DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8554088828', '', 269932, 269961, 299609, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1236, 00031606, 415488354, 354, '1006005011422', 'DATTATRAY BHIKU JADHAV', 01, 'Y', 060, 10, '', 'ANITA DATTATRYA JADHAV', '', '', '', '', '310 BHAGRTHI KUNJE ', 'S G M COLLEGE PATHIMAGE VIDYANAGAR SAIDA', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9960676917', '', 197507, 197566, 011422, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1237, 00031607, 415488355, 355, '1007005034890', 'SANJAY VITTHAL OMBASE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   HAJARMACHI  ', '478  OPP ATMARAM SCHOOL ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9422021824', '', 123736, 123750, 034890, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1238, 00031608, 415488355, 355, '1007005032240', 'BHASKAR NARAYAN GAMBARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'FLAT NO A 403 PUSHKARAJ APARTMENT', 'KRISHNA CANOL SAIDAPUR KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9689980030', '', 123751, 123765, 032240, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1239, 00031609, 415488356, 356, '1011005004067', 'AMOL MAHADEV SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST WING', 'KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '9423360668', '', 448742, 448756, 004067, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1240, 00031610, 415488356, 356, '1011005037853', 'VIJAYMALA RAMCHANDRA PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'ANU  AKSHA RADHA KRUSHNA COLONY MALKAPUR', 'KHANDOBA NAGAR ', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9422601227', '', 448757, 448771, 037853, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1241, 00031611, 415488356, 356, '1011016001017', 'VISHVAKARMA INDUSTRIES AND FABRICATORS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MANOHAR BHANUDAS LOHAR', '', 'AT POST   VARUNJI', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9767719330', '', 449356, 449370, 001017, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1242, 00031612, 415488356, 356, '1011005009609', 'ASHISH NADIR PATEL', 01, 'Y', 060, 10, '', '', '', '', '', '', '69 C 1 D 1  PATEL VILLA  P D PATIL PARK ', 'WAKHAN ROAD KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8087244143', '', 448772, 448831, 009609, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1243, 00031613, 415488356, 356, '1011106000166', 'DADASO CHANDRU BABAR', 01, 'Y', 030, 13, '', '', '', '', '', '', 'A P JAKHINWADI NANDLAPUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9420228611', '', 447377, 447406, 000166, '2023-09-15', 24, 0, '', '5', '', '', NULL),
(1244, 00031614, 415488505, 505, '1012005016024', 'VAIBHAV VIJAY DESHMUKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VIHE ', 'TAL   PATAN ', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415114, '02372-', '02372-', '9922099210', '', 098541, 098555, 016024, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1245, 00031615, 415488505, 505, '1012016000171', 'SHRI SAI HARDWARE & ELECTRICAL', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'PARSHURAM VITHAL ADIMUNI', '', 'A P MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9405251589', '', 101206, 101265, 000171, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1246, 00031617, 415488357, 357, '1024005042554', 'JAGANNATH DINKARRAO MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'RETHARE TAL KARAD', 'KARAD', 'DI SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 186034, 186048, 042554, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1247, 00031616, 415488357, 357, '1024005042217', 'VANITA SHAMRAO WAYADANE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  SHERE STATION  SHERE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415108, '02164-', '02164-', '7447550480', '', 186004, 186033, 042217, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1248, 00031618, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186377, 186436, 000102, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1249, 00031619, 415488201, 201, '1032102000102', 'SMITH MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SRIKA RAHULMATE', '', 'GALA NO 3 BUILDING NO 1846 ', 'NAKODA HAIGHTS VARACHI PETH ', 'KHERDI CHIPLUN KARAD ROAD', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '8329230998', '', 186437, 186496, 000102, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1250, 00031620, 415488201, 201, '1032005043091', 'CHALOBA MANGESH MAJUKAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'H NO 522 A', 'A P  UMROLI  BHARADEWADI ', 'TAL  CHIPLUN  DIST  RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9420583409', '', 186496, 186525, 043091, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1251, 00031621, 415488201, 201, '1032005042881', 'SUBHASH  MADHUA', 01, 'Y', 030, 10, '', '', '', '', '', '', 'C O   VASANT BALARAM UDEG', 'A P   MIRJOLI ', 'TAL   CHIPLUN  DIST   RATNAGIRI', '', '', 'RATNAGIRI', '', '', '', 411111, '02164-', '02164-', '8007164462', '', 186526, 186555, 042881, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1252, 00031622, 415488359, 359, '1037005000581', 'JAYABAI JAGANATH DHAPARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'KARVENAKA KARAD', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 138347, 138361, 000581, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1253, 00031623, 415488359, 359, '1037005006004', 'SUSHILA SHAMRAO MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MANE MALA ', 'KAPIL GOLESHWAR ', 'TAL  KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9881786662', '', 138362, 138376, 006004, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1254, 00031591, 415488352, 352, '1001005062873', 'SAMPAT BABURAO PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'FLAT NO 103   VING  B', 'PAHILA MAJALA   VRUNDAWAN CITY MANJIRI', 'MALKAPUR   TAL  KARAD', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9689149422', '', 593268, 593282, 062873, '2023-09-15', 24, 0, '', '10', '', '', NULL),
(1255, 00031595, 415488352, 352, '1001005685162', 'SURAJ DIPAK PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SAIDAPUR  KARAD', 'TAL   KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9730067377', '', 593283, 593297, 685162, '2023-09-15', 24, 0, '', '14', '', '', NULL),
(1256, 00031597, 415488352, 352, '1001005685161', 'SHOBHA DIPAK PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SAIDAPUR  GAOTHAN  KARAD', 'TAL   KARAD ', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9730067377', '', 593358, 593372, 685161, '2023-09-15', 24, 0, '', '16', '', '', NULL),
(1257, 00031590, 415488352, 352, '1001005050782', 'ATMARAM SAKHARAM KAMBLE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  GOVARE  ', 'P D PATILNAGAR', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415105, '', '', '9881908445', '', 593238, 593267, 050782, '2023-09-15', 24, 0, '', '9', '', '', NULL),
(1258, 00031582, 415488352, 352, '1001102000208', 'BAGWAN MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP.BAGWAN MEDICALS', '', '130 GURUWAR PETH  MAIN ROAD ', 'NEAR CHAWDI CHOWK', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9422403555', '', 571171, 571230, 000208, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1259, 00031599, 415488352, 352, '1001005058158', 'HINDURAO SHIVRAM SABALE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'AT PO  TADAVALE', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'VADUJ', '', '', '', 415506, '', '02161-', '7219444849', '', 593433, 593492, 058158, '2023-09-15', 24, 0, '', '18', '', '', NULL),
(1260, 00031583, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 571231, 571290, 000339, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1261, 00031584, 415488352, 352, '1001102000605', 'SUDHIR VYANKATESH GHATE', 01, 'Y', 060, 13, '', '', '', '', '', '', '64 RAVIWAR PETH KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9881484526', '', 571291, 571350, 000605, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1262, 00031585, 415488352, 352, '1001104000066', 'VISHAL ENGINEERING WORKS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'VISHAL ENGINEERING WORKS', '', '211 SOMWAR PETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011568795', '', 571351, 571410, 000066, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1263, 00031586, 415488352, 352, '1001106000062', 'S V PATHAK AND COMPANY SALES AND SERVICES PVT', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S V PATHAK', '', '35 A SOMWAR PETH  ', 'KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9156011099', '', 571411, 571470, 000062, '2023-09-15', 24, 0, '', '5', '', '', NULL),
(1264, 00031587, 415488352, 352, '1001106000205', 'PALKAR PHARMACEUTICALS DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PALKAR PHARMACEUTICALS', '', '119 VATSALA HOUSE SHIVAJI NAGAR CO OP HO', 'SHIVAJI NAGAR CO OP HOUSING SOC KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164221', '90961444', '7350666555', '', 571471, 571530, 000205, '2023-09-15', 24, 0, '', '6', '', '', NULL),
(1265, 00031588, 415488352, 352, '1001102000281', 'JAGDISH SADASHIV PORE', 01, 'Y', 060, 13, '', '', '', '', '', '', '263 SOMWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9890916061', '', 571531, 571590, 000281, '2023-09-15', 24, 0, '', '7', '', '', NULL),
(1266, 00031589, 415488352, 352, '1001102000339', 'PALKAR MEDICAL', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'RUSHIKESH PRAKASH PALKAR', '', '156 GURUWAR PETH KARAD ', 'PAN NO  ABWPP1766H', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9765745566', '', 571591, 571650, 000339, '2023-09-15', 24, 0, '', '8', '', '', NULL),
(1267, 00031592, 415488352, 352, '1001016005714', 'KRISHNABAI GHAT TRUST', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '458 B SOMWAR PETH KARAD', '', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 569806, 569865, 005714, '2023-09-15', 24, 0, '', '11', '', '', NULL),
(1268, 00031593, 415488352, 352, '1001016005750', 'SIDDHESHWAR AUTO INDUSTRIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'PLOT NO 55 KARAD INDUSTRIAL ESTATE ', 'OPP HINDUSTAN GLAS PVT LTD ', 'OGALEWADI VIRVAD', '', '', 'KARAD', '', '', '', 415105, '71976', '', '9822652976', '', 569866, 569925, 005750, '2023-09-15', 24, 0, '', '12', '', '', NULL),
(1269, 00031594, 415488352, 352, '1001016005750', 'SIDDHESHWAR AUTO INDUSTRIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'PLOT NO 55 KARAD INDUSTRIAL ESTATE ', 'OPP HINDUSTAN GLAS PVT LTD ', 'OGALEWADI VIRVAD', '', '', 'KARAD', '', '', '', 415105, '71976', '', '9822652976', '', 569926, 569985, 005750, '2023-09-15', 24, 0, '', '13', '', '', NULL),
(1270, 00031596, 415488352, 352, '1001005066764', 'SANJAY SUDHIR KULKRANI', 01, 'Y', 060, 10, '', '', '', '', '', '', '844  NEAR LAXMI NARAYAN TEMPLE', 'ALTE  ', 'TAL  HATKALANGALE   DIST  KOLHAPUR', '', '', 'KOLHAPUR', '', '', '', 416109, '0231-', '0231-', '9975105067', '', 593298, 593357, 066764, '2023-09-15', 24, 0, '', '15', '', '', NULL),
(1271, 00031598, 415488352, 352, '1001005066744', 'ANNASAHEB KRISHNA SALUNKHE', 01, 'Y', 060, 10, '', 'ARCHANA ANNASAHEB SALUNKHE', '', '', '', '', 'CHAITANYA BANGLA PLOT NO 18 ', 'BASAWESHWAR HOUSING SOC  NEAR LAXMI TEMP', 'VASNAT NAGAR   SANGLI', '', '', 'SANGLI', '', '', '', 416416, '', '', '9421126960', '', 593373, 593432, 066744, '2023-09-15', 24, 0, '', '17', '', '', NULL),
(1272, 00031624, 415488352, 352, '1001005058191', 'ANIL VASANT CHAVAN', 01, 'Y', 015, 10, '', 'SANGITA ANIL CHAVAN', '', '', '', '', '36 LAXMI KRUPA APARTMENT ', 'SOMWAR PETH KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9922797881', '', 593493, 593507, 058191, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1273, 00031651, 415488359, 359, '1037005005508', 'MANGAL BAJIRAO JAMALE', 01, 'Y', 015, 10, '', '', '', '', '', '', '292  SUMANGAL NAGAR', 'KARVE NAKA', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9422605547', '', 138377, 138391, 005508, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1274, 00031652, 415488515, 515, '1071005000129', 'SHRIKANT VILAS SAWANT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P GUDHE TAL PATAN', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9604807145', '', 000631, 000645, 000129, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1275, 00031654, 415488356, 356, '1011005034600', 'AMOL UTTAM PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SITAMAI SADAN JAKHINWADI ROAD KARVE VIHI', 'KOYANAVASAHAT  MALKAPUR', 'TAL KARAD DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9764759524', '', 448832, 448846, 034600, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1276, 00031673, 415488353, 353, '1002005008410', 'HEMLATA MARUTI JAGDALE', 01, 'Y', 030, 10, '', 'MARUTI VITTHAL JAGADALE', '', '', '', '', 'GOTE TAL KARAD', 'DIST SATARA', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 611986, 612015, 008410, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1277, 00031674, 415488353, 353, '1002005850782', 'LATA NANDKUMAR NALAWADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  KASBE DIGRAJ', 'WARD NO 2 TATE GALLI', 'TA SANGLI DIST SANGLI', '', '', 'SANGLI', '', '', '', 416305, '', '', '7057022148', '', 612016, 612030, 850782, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1278, 00031675, 415488353, 353, '1002146000004', 'SURYAKANT ANANDRAO JADHAV', 01, 'Y', 015, 13, '', '', '', '', '', '', 'A P   UMBRAJ   NEAR HERAMBH BANGLA', 'OPP BHAIRAVNATH TEMPLE', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9850076302', '', 615800, 615814, 000004, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1279, 00031676, 415488353, 353, '1002106005154', 'MAHILA MERCHANT NAGARI SAH PATSANSTHA LTD KAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MAHILA MERCHANT NAGARI SAH', 'MAHILA MERCHANT NAGARI SAH', 'SURYA COMPLEX DATTA', 'CHOUK KARAD TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164272', '', '9881908435', '', 615815, 615874, 005154, '2023-09-15', 24, 0, '', '4', '', '', NULL),
(1280, 00031677, 415488353, 353, '1002106005154', 'MAHILA MERCHANT NAGARI SAH PATSANSTHA LTD KAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'MAHILA MERCHANT NAGARI SAH', 'MAHILA MERCHANT NAGARI SAH', 'SURYA COMPLEX DATTA', 'CHOUK KARAD TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164272', '', '9881908435', '', 615875, 615934, 005154, '2023-09-15', 24, 0, '', '5', '', '', NULL),
(1281, 00031702, 415488514, 514, '1073005000229', 'ALPESH SHAMRAV SARVGAOD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  YELIV', 'TAL  KHATAV', 'DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9545040858', '', 000211, 000225, 000229, '2023-09-15', 24, 0, '', '1', '', '', NULL),
(1282, 00031703, 415488514, 514, '1073016000029', 'SIDDHARAJ MART', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   PUSESAWALI', 'S NO 678', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9665188975', '', 000526, 000540, 000029, '2023-09-15', 24, 0, '', '2', '', '', NULL),
(1283, 00031704, 415488514, 514, '1073016000030', 'DURVANKUR LAWN', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   PUSESAVALI  S NO 477 ', 'NEAR SAWATA MALI TEMPLE BAYPASS ROAD PUS', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9011277788', '', 000541, 000555, 000030, '2023-09-15', 24, 0, '', '3', '', '', NULL),
(1284, 00031761, 415488515, 515, '1071005000145', 'AVINASH ASHOK KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   GUDHE', 'TAL   PATAN', 'DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '7058423164', '', 000646, 000660, 000145, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1285, 00031762, 415488515, 515, '1071016000018', 'SHREE JYOTIRLING HARDWARE AND ELECTRICALS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'RAJENDRA JOTIRAM TAIGADE', '', 'A P   TALMAVALE ', 'KARAD DHEBEWADI ROAD  MAIN ROAD', 'TAL   PATAN DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '8806016264', '', 000347, 000361, 000018, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1286, 00031723, 415488358, 358, '1026005000523', 'KASHINATH LAXMAN BARGE', 01, 'Y', 015, 10, '', 'HOUSABAI KASHINATH BARGE', '', '', '', '', '175 B  3 MANGALWAR PETH KARAD', 'TAL KARAD', 'DIST    SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '8421399201', '', 076352, 076366, 000523, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1287, 00031726, 415488358, 358, '1026005251624', 'MANOJ GAUTAM LADE', 01, 'Y', 015, 10, '', '', '', '', '', '', '40 B MANGALWAR PETH', 'KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '8459528002', '', 076487, 076501, 251624, '2023-09-16', 24, 0, '', '4', '', '', NULL),
(1288, 00031724, 415488358, 358, '1026005251680', 'KRISHNAKATH INSTITUTE FOR SKILL DEVELOPMENT A', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', '', '', 'SHIKSHAN MANDAL KARAD', 'FINAL PLOT NO 222', 'MANGALWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9822099655', '', 076367, 076426, 251680, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1289, 00031725, 415488358, 358, '1026005251680', 'KRISHNAKATH INSTITUTE FOR SKILL DEVELOPMENT A', 01, 'Y', 060, 10, '', '', '', 'Authorised Signatory', '', '', 'SHIKSHAN MANDAL KARAD', 'FINAL PLOT NO 222', 'MANGALWAR PETH KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9822099655', '', 076427, 076486, 251680, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1290, 00031754, 415488357, 357, '1024005001083', 'VIJAYSINH VISHNU THORAT', 01, 'Y', 015, 10, '', '', '', '', '', '', '252 MANGALWAR PETH ', '', '', '', '', 'KARAD', '', '', '', 415110, '228357', '', '9096453642', '', 186079, 186093, 001083, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1291, 00031755, 415488357, 357, '1024005001653', 'SIDDHARTH MAHADEV THORAWADE', 01, 'Y', 015, 10, '', 'KAMBALE NILESH VITTHAL', '', '', '', '', '174 BUDHWAR PETH', 'KARAD ', 'TAL KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '311415', '', '9423315999', '', 186094, 186108, 001653, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1292, 00031753, 415488357, 357, '1024005041871', 'UMA SUNIL MUNDRAVALE', 01, 'Y', 030, 10, '', 'SANIKA SANTOSH DESHPANDE', '', '', '', '', 'POOJA COMPLEX', 'SHEELANAGAR WAKHAN ROAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '26380', '', '9822262624', '', 186049, 186078, 041871, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1293, 00031756, 415488357, 357, '1024016000501', 'CITY PRIDE GENERIC MEDICIES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', 'FLAT NO 29', 'RANJEET TOWERS', 'SHANIWAR PETH  KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9922696080', '', 186946, 187005, 000501, '2023-09-16', 24, 0, '', '4', '', '', NULL),
(1294, 00031757, 415488357, 357, '1024106000137', 'CHETAN AVINASH RANSUBHE', 01, 'Y', 060, 13, '', '', '', '', '', '', 'BEHIND COTTEGE HOSPITAL ', 'PLOT NO 1  PRAKASH NAGAR  BUDHWAR PETH ', 'TAL   KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9422604094', '', 181411, 181470, 000137, '2023-09-16', 24, 0, '', '5', '', '', NULL),
(1295, 00031759, 415488201, 201, '1032102000094', 'VICTOR INTERIORS AND HARDWARE', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PROP JOSNA SANJEEV NAIR', '', '8 9 AJINKYA ARCADE', 'SHIVAJI CHOWK  KARAD ROAD', 'CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '02355-', '9673520562', '', 186497, 186556, 000094, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1296, 00031758, 415488359, 359, '1037103000025', 'RANJEET DHONDIRAM SHIRKE', 01, 'Y', 060, 13, '', 'DHONDIRAM MAHADEO SHIRKE', 'VILAS MAHADEV SHIRKE', '', '', '', 'AT POST NANDLAPUR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9011910532', '', 134056, 134115, 000025, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1297, 00031760, 415488512, 512, '1052005001043', 'SHUBHANGI UTTAM CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KOPARDE', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7875885552', '', 057797, 057811, 001043, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1298, 00031751, 415488509, 509, '1020016000127', 'KRUSHIRATNA DUDH SANSTHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BALASAHEB BAJIRAO JUJAR', 'BALASAHEB BAJIRAO JUGAR', 'JUJARWADI N V', 'A P KALE', 'TAL  KARAD  DIST  SATARA', '', '', 'KALE', '', '', '', 415104, '', '02164-', '9922615830', '', 058848, 058907, 000127, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1299, 00031752, 415488509, 509, '1020016000127', 'KRUSHIRATNA DUDH SANSTHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BALASAHEB BAJIRAO JUJAR', 'BALASAHEB BAJIRAO JUGAR', 'JUJARWADI N V', 'A P KALE', 'TAL  KARAD  DIST  SATARA', '', '', 'KALE', '', '', '', 415104, '', '02164-', '9922615830', '', 058908, 058967, 000127, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1300, 00031749, 415488505, 505, '1012005002548', 'MANOJ ADHIKRAO CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', '33  DINDUKALEWADI POST   MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '7387474757', '', 098556, 098570, 002548, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1301, 00031750, 415488505, 505, '1012005015954', 'SUMIT RAMESH PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   VETALWADI ', 'POST   NAVADI ', 'TAL   PATAN   DIST   SATARA', '', '', 'PATAN', '', '', '', 415209, '02372-', '02372-', '8010759476', '', 098571, 098585, 015954, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1302, 00031748, 415488356, 356, '1011005035370', 'SATISH DATTU KAMBLE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KALE', 'TAL KARAD  DIST SATARA', '', '', '', 'KALE', '', '', '', 415104, '', '', '8379924077', '', 448847, 448861, 035370, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1303, 00031746, 415488355, 355, '1007102030098', 'KAUSHAL SURESHRAO PATANKAR', 01, 'Y', 060, 13, '', '', '', '', '', '', '35 RAVIWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '8806644744', '', 122956, 123015, 030098, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1304, 00031747, 415488355, 355, '1007005034607', 'SACHIN SHANKAR PARKHE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   VARUNJI ', 'TAL   KARAD ', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9021747201', '', 123766, 123780, 034607, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1305, 00031743, 415488354, 354, '1006005009466', 'SUREKHA GOVIND KULKARNI', 01, 'Y', 030, 10, '', 'GOVIND RAGHUNATH KULKARNI', 'SANDHYA SANJAY RAJOPADHYE', '', '', '', 'C O L6 PARVATINAGAR BHUPE', 'BHUPESH APARTMENT', 'VIDYANAGAR', '', '', 'KARAD', '', '', '', 415124, '274034', '', '', '', 197567, 197596, 009466, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1306, 00031744, 415488354, 354, '1006005009944', 'ARUNA MACHINDRA JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', '21 RAM LEELA BUNGLOW', 'PRAKASHANAND COLONY', 'VIDYANAGAR SAIDAPUR', '', '', 'KARAD', '', '', '', 415124, '272355', '', '', '', 197597, 197626, 009944, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1307, 00031745, 415488354, 354, '1006016000697', 'SHRI FASHION DESIGNER AND BEAUTY PARLOUR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SHRI FASHION DESIGNER AND BEAUTY PA', '', 'SR NO 37 21  PLOT NO 13', 'JANARDHAN RESIDENCY  BANAWADI CORNER', 'VIDYANAGAR  KARAD  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7517701977', '', 194161, 194220, 000697, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1308, 00031741, 415488502, 502, '1005005300139', 'VAISHALI RAJENDRA MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   SHAHAPUR  ', 'NAVIN GAVTHAN  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '8788743078', '', 269962, 269976, 300139, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1309, 00031742, 415488502, 502, '1005106000181', 'TANAJI JOTIRAM SHINDE', 01, 'Y', 030, 13, '', '', '', '', '', '', 'A P  UMBRAJ CHANDRAKANT NIVAS', 'CHORE ROAD  ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9175831365', '', 270796, 270825, 000181, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1310, 00031736, 415488501, 501, '1004005012365', 'BHAUSO PRAKASH KAMBIRE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   KAMBIRWADI  NEAR YADOBA MANDIR', 'POST   MASUR ', 'TAL   KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415106, '', '', '9922098266', '', 151351, 151365, 012365, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1311, 00031734, 415488501, 501, '1004016000418', 'SANTOSH SAW MILL', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PANKAJ BALKRISHNA DIXIT', '', 'A P   MASUR ', 'GAT NO 1073  MASUR UMBRAJ ROAD', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '8956902519', '', 150407, 150421, 000418, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1312, 00031735, 415488501, 501, '1004005011315', 'PANDURANG SAHEBRAO DESHMUKH', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  NANDGAON', 'GRAMPANCHAYAT', 'TAL  KARAD DIST  SATARA', '', '', 'KARAD', '', '', '', 415107, '', '02164-', '9881497920', '', 151336, 151350, 011315, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1313, 00031737, 415488501, 501, '1004005006622', 'SANTOSH VILAS KAMBIRE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P MASUR', 'TAL KARAD 9921066266', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9921066266', '', 151366, 151380, 006622, '2023-09-16', 24, 0, '', '4', '', '', NULL),
(1314, 00031738, 415488501, 501, '1004106000100', 'SHOBHA SUBHASH SHAH', 01, 'Y', 060, 13, '', '', '', '', '', '', 'NEAR JAIN MANDIR', 'A P  MASUR', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9834136283', '', 148516, 148575, 000100, '2023-09-16', 24, 0, '', '5', '', '', NULL),
(1315, 00031739, 415488501, 501, '1004016000367', 'JYOTIRLING DUDH SANKLAN KENDRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AMOL SUBHASH JADHAV', '', 'A P PADALI HELGAON', '', 'TAL  KARAD  DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '7775921033', '', 150422, 150481, 000367, '2023-09-16', 24, 0, '', '6', '', '', NULL),
(1316, 00031740, 415488501, 501, '1004016000301', 'SATKAR DUDH SANKALAN KENDRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANTOSH DHONDIRAM SALUNKHE', '', 'MILKAT NO 348', 'A P KIVAL', 'TAL KARAD  DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '02164-', '9561449244', '', 150482, 150541, 000301, '2023-09-16', 24, 0, '', '7', '', '', NULL),
(1317, 00031730, 415488353, 353, '1002005847325', 'VASANTRAO JIJABA DUBAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO UMBRAJ TAL KARAD', 'DIS SATARA 9422039579', 'PAN AASPD0001A', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '9422039579', '', 612031, 612060, 847325, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1318, 00031732, 415488353, 353, '1002005005384', 'SURESH YASHWANT MANE', 01, 'Y', 015, 10, '', 'SHALAN SURESH MANE', '', '', '', '', 'SUB RAGISTAR SAHKARI   M', 'SANSTHA KARAD', '', '', '', 'KARAD', '', '', '', 415110, '227839', '', '9881280453', '', 612061, 612075, 005384, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1319, 00031733, 415488353, 353, '1002005853328', 'SUNANDA RAJENDRA HESHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'BHAGYALAXMI BUNGLOW  BAILBAZAR ROAD ', 'OPP AJANTA POLTRY FARM VISHAL COLONY  MA', 'TAL   KARAD DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9881442454', '', 612076, 612090, 853328, '2023-09-16', 24, 0, '', '4', '', '', NULL),
(1320, 00031731, 415488353, 353, '1002016002648', 'SADIK SHAUKAT AMBEKERI', 01, 'Y', 060, 11, '', '', '', '', '', '', 'AT POST PALI TAL KARAD', 'DIST SATARA SUTAR WADA', 'NEAR INJAI DEVI TEMPLE', '', '', 'KARAD', '', '', '', 0, '261495', '', '9922812309', '', 624002, 624061, 002648, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1321, 00031727, 415488352, 352, '1001016006632', 'ALTAFHUSAIN YUSUF MUTAVALLI', 01, 'Y', 060, 11, '', '', '', '', '', '', '190 B GURUWAR PETH', 'KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9823605606', '', 569986, 570045, 006632, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1322, 00031728, 415488352, 352, '1001005023536', 'SHIVAJI BABURAO THORAT', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P KALAWADE', 'TAL KARAD', 'DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9011756877', '', 593508, 593537, 023536, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1323, 00031729, 415488352, 352, '1001005057469', 'GHALSASI NARAYAN KRISHNARAO', 01, 'Y', 015, 10, '', '', '', '', '', '', '101 SOMEWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 593538, 593552, 057469, '2023-09-16', 24, 0, '', '3', '', '', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `bank_name`) VALUES
(1324, 00031763, 415488352, 352, '1001005685111', 'SWAROOP KASHINATH LOTLIKAR', 01, 'Y', 015, 10, '', 'SHRADDHA SWAROOP LOTLIKAR', '', '', '', '', 'FLAT NO 1605 TOWER 7 F RESIDENCES', 'SERVE NO 7 1 KALYANI NAGAR ROAD ', 'VADGAON SHERI PUNE', '', '', 'PUNE', '', '', '', 411014, '020-', '020-', '9850524434', '', 593553, 593567, 685111, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1325, 00031764, 415488352, 352, '1001005057785', 'SANDIP SUBHASH PAWAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '405 A SOMWAR PETH', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9823287810', '', 593568, 593597, 057785, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1326, 00031819, 415488352, 352, '1001016006724', 'SATYAJEET HEALTH CLUB LLP', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'NAMDEV K PATIL', 'MUKESH M PATIL', 'A P   GOTE ', 'NEAR HUNDAI SHOW ROOM ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822081434', '', 570046, 570075, 006724, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1327, 00031840, 415488354, 354, '1006005003019', 'NIWAS RAGHUNATH JADHAV', 01, 'Y', 060, 10, '', 'JADHAV SWATI NIWAS', 'JADAHV SHUBHARANI NIWAS', '', '', '', '292  AMBAK VASTI  SAIDAPUR', 'TAL KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9604807405', '', 197627, 197686, 003019, '2023-09-16', 24, 0, '', '1', '', '', NULL),
(1328, 00031841, 415488354, 354, '1006005010256', 'SAMPATRAO VITHTHAL PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SWAPNGANDHA PLOT NO 6 VAIBHAV COLONY ', 'NEAR HOLY FAMILY SCHOOL VIDYANAGAR', 'TAL KARAD  DIST SATARA ', '', '', 'KARAD', '', '', '', 415124, '02164-65', '', '9096139624', '', 197687, 197701, 010256, '2023-09-16', 24, 0, '', '2', '', '', NULL),
(1329, 00031842, 415488354, 354, '1006005012015', 'APPASAHEB PANDURANG CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'BHAGIRTHI NIVAS NEAR HOLE', 'FAMILY VIDYANAGAR', 'TAL KARAD', '', '', 'KARAD', '', '', '', 415124, '', '', '8796576965', '', 197702, 197716, 012015, '2023-09-16', 24, 0, '', '3', '', '', NULL),
(1330, 00031870, 415488501, 501, '1004005010696', 'SANTOSH MARUTI JADHAV', 01, 'Y', 030, 10, '', '', '', '', '', '', '17 2 NEAR GRAM PANCHAYAT', 'A P KHARADE', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415106, '', '02164-', '8605203637', '', 151381, 151410, 010696, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1331, 00031879, 415488356, 356, '1011005037613', 'RUPALI SANGRAM PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'M NO 259 1 2  F NO F 07 ', 'GANESH RESIDENSI  MALKAPUR  KARAD', 'TAL    KARAD  DIST    SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '8975559227', '', 448862, 448876, 037613, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1332, 00031880, 415488505, 505, '1012005015589', 'RAJESH APPASO PANASKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  MALHARPETH  ', 'GANESH CHOUK  ', 'TAL  PATAN  DIST  SATARA', '', '', 'PATAN', '', '', '', 415205, '02372-', '02372-', '9822426456', '', 098586, 098600, 015589, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1333, 00031855, 415488359, 359, '1037005002244', 'SHANTA ASHOK SAWANT', 01, 'Y', 015, 10, '', '', '', '', '', '', 'HARSHJIT', 'NEAR SIDHARTH MANGAL KAYL', 'GOLESHWAR ROAD', '', '', 'KARAD', '', '', '', 0, '', '', '8275912321', '', 138392, 138406, 002244, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1334, 00031856, 415488512, 512, '1052005002777', 'VIJAYSINHA ARUN PATIL', 01, 'Y', 030, 10, '', '', '', '', '', '', '305 A  SHREE KRUPA', 'SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '7350119285', '', 057812, 057841, 002777, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1335, 00031857, 415488515, 515, '1071005000075', 'ANIL NIVRUTTI SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  MOLAVADEWADI  POST  KUTHARE', 'TAL  PATAN  DIST  SATARA', '', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '9764019917', '', 000661, 000675, 000075, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1336, 00031858, 415488515, 515, '1071016000017', 'MAHESH AUTO MOBILES', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'PRAKASH DINKAR JANUGADE', '', 'PLOT NO 975  TALMAVALE', 'OPP PETROL PUMP  TAYGADEWADI', 'TAL   PATAN   DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9823926066', '', 000362, 000376, 000017, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1337, 00031859, 415488515, 515, '1071016000016', 'MAHARASHTRA ELECTRICAL SALES AND SERVICE', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'IBRAHIM DASTGIR KHATIB', '', 'A P   MANEGAON  MANEWADI ', 'TAL   PATAN', 'DIST  SATARA', '', '', 'PATAN', '', '', '', 415103, '09527056', '02372-', '09527056225', '', 000377, 000391, 000016, '2023-09-18', 24, 0, '', '3', '', '', NULL),
(1338, 00031861, 415488514, 514, '1073005000193', 'AMEY SURYAKANT PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   GOREGAON WANGI ', 'TAL   KHATAV', 'DIST   SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '7774824194', '', 000226, 000240, 000193, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1339, 00031860, 415488514, 514, '1073106000001', 'V D KADAM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', 'A P   PUSESAWALI ', 'D P KADAM COMPLEX  DATTA CHOUK ', 'TAL   KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9730687777', '', 000016, 000075, 000001, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1340, 00031862, 415488352, 352, '1001016006654', 'MAHARASHTRA ENTERPRISES KARAD', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'VAIBHAV SHANKAR PATIL', '', '158 MANGALWAR PETH', 'KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9970099609', '', 570076, 570105, 006654, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1341, 00031863, 415488352, 352, '1001016006515', 'RUPRATAN PROP KISHORKUMAR SAGARMAL SANGHVI', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '43  SHUKRAWAR PETH', 'KARAD', 'SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9850017651', '', 570106, 570165, 006515, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1342, 00031864, 415488352, 352, '1001016005929', 'VIJAY MEDICAL STORES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RAJASHREE SANJAY THORAT', 'SANJAY THORAT', 'C O SHAH RAJENDRA 47 B', 'MANGALWAR PETH ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '99210657', '', '9822377913', '', 570166, 570225, 005929, '2023-09-18', 24, 0, '', '3', '', '', NULL),
(1343, 00031877, 415488355, 355, '1007016030341', 'RUPMALA SAREE CENTER', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '38 A SHUKRAWAR PETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9834105940', '', 124801, 124860, 030341, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1344, 00031878, 415488355, 355, '1007016030341', 'RUPMALA SAREE CENTER', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '38 A SHUKRAWAR PETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9834105940', '', 124861, 124920, 030341, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1345, 00031866, 415488353, 353, '1002016003069', 'SAI SANGAM HOLDINGS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'bhalchandra kulkarni', 'sneha kulkarni', 'C O   HOTEL SANGAM ', 'P B ROAD  KARAD ', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9975587007', '', 624122, 624136, 003069, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1346, 00031867, 415488353, 353, '1002005852614', 'KHASHIBAI DATTU THORAT', 01, 'Y', 030, 10, '', 'VANDANA MOHANRAO YADAV', '', '', '', '', 'A P   KALWADE', 'TA   KARAD', 'DIST     SATARA', '', '', 'KARAD', '', '', '', 415539, '02164-', '02164-', '7738912115', '', 612091, 612120, 852614, '2023-09-18', 24, 0, '', '3', '', '', NULL),
(1347, 00031865, 415488353, 353, '1002016002995', 'DIAMOND AGRO INDUSTRY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DIMOND AGRO INDUSTRY', '', '71  VIKRANT BANGLOW', 'SHIVAJI HOUSING SOCIETY', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9422866719', '', 624062, 624121, 002995, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1348, 00031868, 415488353, 353, '1002106005213', 'THE KARAD MERCHANT SAHKARI CREDIT SANSTHA LIM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KARAD MERCHANT SAH.', '', '7 8 SOMWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '9881908429', '', 615935, 615994, 005213, '2023-09-18', 24, 0, '', '4', '', '', NULL),
(1349, 00031869, 415488353, 353, '1002106005213', 'THE KARAD MERCHANT SAHKARI CREDIT SANSTHA LIM', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'KARAD MERCHANT SAH.', '', '7 8 SOMWAR PETH', 'KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164220', '', '9881908429', '', 615995, 616054, 005213, '2023-09-18', 24, 0, '', '5', '', '', NULL),
(1350, 00031871, 415488502, 502, '1005016006248', 'SHRI BHAIRAVNATH KRUSHI SEVA KENDRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'TEJAS CHANDRAKANT SURYAWANSHI', '', 'A P   UMBRAJ  ML NO 702 ', 'BEHIND IDBI BANK  NH 4 ', 'TAL   KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9822661447', '', 273706, 273765, 006248, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1351, 00031876, 415488502, 502, '1005103000025', 'SHUBHAM AUTOMOBILES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'UTTAM ANANT KENJALE', 'NOOPUR NIKHIL PATIL', 'PUNE BANGLORE HIGHWAY NH 4', 'SR NO 232 2  UMBRAJ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9822022106', '', 271006, 271065, 000025, '2023-09-18', 24, 0, '', '6', '', '', NULL),
(1352, 00031875, 415488502, 502, '1005005300046', 'ROHIT RAJU TATE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT PO  UMBRAJ', 'SAMARTH NAGAR', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415109, '02164-', '02164-', '9527440312', '', 269977, 269991, 300046, '2023-09-18', 24, 0, '', '5', '', '', NULL),
(1353, 00031872, 415488502, 502, '1005102000718', 'AMAZIA VISION ENVIRONMENT PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DHANANJAY SHIVAJI PAWAR', '', 'FLAT NO 201   ANANDI BANGLOW  ', 'SR NO 87 37  VEERBHADRANAGAR  ', 'BANER PUNE  ', '', '', 'PUNE', '', '', '', 411045, '', '', '9665106666', '', 270826, 270885, 000718, '2023-09-18', 24, 0, '', '2', '', '', NULL),
(1354, 00031873, 415488502, 502, '1005102000718', 'AMAZIA VISION ENVIRONMENT PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'DHANANJAY SHIVAJI PAWAR', '', 'FLAT NO 201   ANANDI BANGLOW  ', 'SR NO 87 37  VEERBHADRANAGAR  ', 'BANER PUNE  ', '', '', 'PUNE', '', '', '', 411045, '', '', '9665106666', '', 270886, 270945, 000718, '2023-09-18', 24, 0, '', '3', '', '', NULL),
(1355, 00031874, 415488502, 502, '1005106000171', 'RAJENDRA KRISHANARAO JADHAV', 01, 'Y', 060, 13, '', '', '', '', '', '', 'AT POST UMBRAJ TAL KARAD', 'DIST SATARA', 'PATIL GALLI', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9881882703', '', 270946, 271005, 000171, '2023-09-18', 24, 0, '', '4', '', '', NULL),
(1356, 00031881, 415488356, 356, '1011005037447', 'SAKSHI AJIT MALI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P JAKHINWADI ROAD ', 'KOYNAVASAHAT MALKAPUR', 'TAL KARAD DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9765228054', '', 448877, 448891, 037447, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1357, 00031906, 415488352, 352, '1001005014034', 'NALINI DILIP KULKARNI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AP OGLEWADI DATTAKRUPA', 'S ROAD KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 593598, 593612, 014034, '2023-09-18', 24, 0, '', '1', '', '', NULL),
(1358, 00031989, 415488514, 514, '1073016000020', 'BALIRAJA KRUSHI BHANDAR', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'BALIRAJA KRUSHI BHANDAR', '', 'A P   PUSESAWALI ', 'GAT NO  737 6', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9763071832', '', 000556, 000615, 000020, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1359, 00031990, 415488514, 514, '1073005000221', 'RAVINDRA PANDURANG BONGE PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A   P   SHAMGAON', 'JUNYA PANYACHYA TAKI JAVAL', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415106, '02164-', '02164-', '9766459700', '', 000241, 000255, 000221, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1360, 00031991, 415488514, 514, '1073106000002', 'HOTEL MINAKSHI', 01, 'Y', 015, 13, '', '', '', 'Authorised Signatory', '', '', 'MILKAT NO 1054 ', 'A P  PUSESAVALI ', 'TAL  KHATAV  DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9730689999', '', 000076, 000090, 000002, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1361, 00031988, 415488515, 515, '1071005000141', 'LAXMAN CHANDRU LOHAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT  PAWARWADI  PO KUTHARE', 'TAL PATAN', 'DIST   SATARA ', '', '', 'TALMAVALE', '', '', '', 415112, '2355-', '2355-', '9421179976', '', 000676, 000690, 000141, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1362, 00031986, 415488359, 359, '1037106000016', 'MAHILA MERCHANT NAGARI SAH PATSANSTHA LTD KAR', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'ANIL SHIVAJI KADAM', 'SHARDA RAMESH MOHITE', 'SURYA COMPLEX DATTA', 'CHOUK KARAD TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '02164272', '', '9881908435', '', 134116, 134175, 000016, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1363, 00031987, 415488359, 359, '1037005007046', 'HASAN HARUN MULANI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SUMANGAL NAGAR  KHAIRATKHAN MALA', 'A P  KAPIL  GOLESHWAR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '7020064489', '', 138407, 138421, 007046, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1364, 00031982, 415488201, 201, '1032016000834', 'KOKAN TRADERS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', '', '', 'A P   TINWAD 976 ', 'PIMPLI KH CHIPLUN', 'TAL   CHIPLUN  DIST   RATNAGIRI ', '', '', 'CHIPLUN', '', '', '', 415605, '02355-', '02355-', '9890876799', '', 189286, 189300, 000834, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1365, 00031983, 415488201, 201, '1032102000014', 'SHREE DATTA AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO. UDEG VASANT BALARAM', 'CO. BORROWER UDEG VARSHA VASAN', 'A P  MIRJOLI SAKHARWADI', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355259', '02355259', '9922121670', '', 186557, 186616, 000014, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1366, 00031984, 415488201, 201, '1032102000014', 'SHREE DATTA AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO. UDEG VASANT BALARAM', 'CO. BORROWER UDEG VARSHA VASAN', 'A P  MIRJOLI SAKHARWADI', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355259', '02355259', '9922121670', '', 186617, 186676, 000014, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1367, 00031985, 415488201, 201, '1032102000014', 'SHREE DATTA AGENCIES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'PRO. UDEG VASANT BALARAM', 'CO. BORROWER UDEG VARSHA VASAN', 'A P  MIRJOLI SAKHARWADI', 'TAL CHIPLUN', 'DIST RATNAGIRI', '', '', 'CHIPLUN', '', '', '', 415605, '02355259', '02355259', '9922121670', '', 186677, 186736, 000014, '2023-09-20', 24, 0, '', '4', '', '', NULL),
(1368, 00031980, 415488505, 505, '1012005014455', 'APRNA PRATAP KUMBHAR', 01, 'Y', 030, 10, '', '', '', '', '', '', 'NEAR GRAMPANCHAYAT', 'A P  PERLE', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7709020813', '', 098601, 098630, 014455, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1369, 00031981, 415488505, 505, '1012005014653', 'SANJEEV SOPANRAO CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'VIKRAMNAGAR COLLEGE PARISAR', 'TAL PATAN DIST SATARA', '', '', '', 'SATARA', '', '', '', 415206, '', '', '9999999999', '', 098631, 098660, 014653, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1370, 00031979, 415488356, 356, '1011102000111', 'ROHIT AUTOMOBILES', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'rushikesh subash gijare', '', '278  B OLD 297  NEW OPP SOC PETROL PUMP ', 'BANGLORE ROAD  MALKAPUR  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415539, '', '94238664', '9422401130', '', 447407, 447466, 000111, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1371, 00031977, 415488356, 356, '1011005037856', 'ANUJ SURESH PHALKE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'F NO 4  MEGHAPARSH  WING B', 'KOYANA VASAHT  MALKAPUR', 'TAL   KARAD DIST   SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '7020214655', '', 448892, 448906, 037856, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1372, 00031978, 415488356, 356, '1011005036923', 'SHREYAS NAVNATH KAPURKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', '220 MANGALWAR PETH ', 'BEHIND JOTIBA MANDIR KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9762464966', '', 448907, 448921, 036923, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1373, 00031976, 415488355, 355, '1007106030088', 'M/S. GHADGE IRRIGATORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'SUJITKUMAR ANANDRAO GHADAGE', '', 'PLOT NO 386 2 DATTAPRASAD ', 'SHANIWAR PETH MARKET YARD ', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '20232', '', '9850707435', '', 123016, 123075, 030088, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1374, 00031965, 415488501, 501, '1004005007994', 'SATISH SHIVAJI MORE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'BAINGWADA SHEJARI  A P KONEGAON TAL KARA', 'TAL KARAD PAN BAGPM2446F', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '8806017567', '', 151411, 151440, 007994, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1375, 00031972, 415488354, 354, '1006016000486', 'PRATHMESH SHIKSHAN SANSTHA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'CHAIRMAN PRATHMESH SHIKSHAN SANSTHA', '', 'AT POST  VIDYANAGAR', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 0, '', '', '9764489693', '', 194221, 194280, 000486, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1376, 00031971, 415488354, 354, '1006005006050', 'KUMUD RAGHUNATH KENGAR', 01, 'Y', 015, 10, '', 'KENGAR RAGHUNATH ANNA', '', '', '', '', 'GAJANAN HOS SOC SAIDAPUR', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 197717, 197731, 006050, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1377, 00031973, 415488354, 354, '1006005010261', 'RAGHUNATH KASHINATH BEDEKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'GURUKUL COMPUTER EDUC ', 'KRISHNA CANOL VIDYANAGAR', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415124, '71005', '', '', '', 197732, 197746, 010261, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1378, 00031974, 415488354, 354, '1006005005433', 'ADHIKARAV SHAMARAO SUTAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SAIDAPUR', 'TAL KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '9975430609', '', 197747, 197761, 005433, '2023-09-20', 24, 0, '', '4', '', '', NULL),
(1379, 00031975, 415488354, 354, '1006005015299', 'ADITYA SHANKARRAO KALBHOR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  SAIDAPUR', 'SHIVAJI CHOUK  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '02164-', '9765882606', '', 197762, 197776, 015299, '2023-09-20', 24, 0, '', '5', '', '', NULL),
(1380, 00031958, 415488352, 352, '1001005057778', 'SUREKHA RAVINDRA PAWAR', 01, 'Y', 015, 10, '', 'PAWAR RAVINDRA CHANDRAKANT', '', '', '', '', '24 RANJIT TOWER ', 'SHANIWAR PETH KARAD', 'MOB  9860945559', '', '', 'KARAD', '', '', '', 415110, '', '', '9860945559', '', 593613, 593627, 057778, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1381, 00031959, 415488352, 352, '1001005683165', 'ABHIJEET VIJAY MANE', 01, 'Y', 030, 10, '', 'DIVYA ABHIJEET MANE', '', '', '', '', '1750 15 A P  RAHIMATPUR ', 'SAP ROAD  ASHTAVINAYAK', 'TAL  KOREGAON DIST  SATARA ', '', '', 'RAHIMATPUR', '', '', '', 415511, '', '', '8806779779', '', 593628, 593657, 683165, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1382, 00031962, 415488352, 352, '1001005052049', 'RAJMAHAMAD MEHABUB BAGWAN', 01, 'Y', 030, 10, '', 'HASINA RAJMAHAMAD BAGWAN', '', '', '', '', '128 GURUWAR PETH ', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '223134', '', '9422403555', '', 593733, 593762, 052049, '2023-09-20', 24, 0, '', '5', '', '', NULL),
(1383, 00031961, 415488352, 352, '1001005682684', 'IMRAN KHUDBUDDIN FAKIR', 01, 'Y', 060, 10, '', 'NILOFAR IMRAN FAKIR', '', '', '', '', '348  7  A', 'MUJAWAR COLONY ', 'MARKET YARD  KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9767044413', '', 593673, 593732, 682684, '2023-09-20', 24, 0, '', '4', '', '', NULL),
(1384, 00031960, 415488352, 352, '1001005685167', 'DILIP RAMCHANDRA SANKPAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   HELGAON', 'TAL   KARAD ', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '9527837519', '', 593658, 593672, 685167, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1385, 00031963, 415488352, 352, '1001005065424', 'RANI RAJU KARANDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '385 GURUWAR PETH KARAD', 'KARAD', 'SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '7057277131', '', 593763, 593777, 065424, '2023-09-20', 24, 0, '', '6', '', '', NULL),
(1386, 00031964, 415488352, 352, '1001005056244', 'SANTOSH PRAKASH MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KOREGAON TAL  KARAD', 'KOREGAON', 'MB NO 9823031973', '', '', 'KARAD', '', '', '', 280243, '', '', '9823031973', '', 593778, 593792, 056244, '2023-09-20', 24, 0, '', '7', '', '', NULL),
(1387, 00031970, 415488502, 502, '1005016006199', 'SIDDHANATH MOTORS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANJAY BALWANT KATE', '', 'A P SHIVDE ', 'P B ROAD ', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164264', '', '9881321844', '', 273826, 273885, 006199, '2023-09-20', 24, 0, '', '5', '', '', NULL),
(1388, 00031969, 415488502, 502, '1005016006218', 'PATIL TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'JAYASHREE MANIKRAO PATIL', '', 'A P   SHIVADE SHOP NO 3  GROUND FLOOR ', '578 3  PUNE BANGLORE ROAD  KARAD', 'TAL    KARAD  DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '95274137', '02164-', '9822785885', '', 273766, 273825, 006218, '2023-09-20', 24, 0, '', '4', '', '', NULL),
(1389, 00031966, 415488502, 502, '1005005014399', 'RUPALI VIJAY PACHUPATE', 01, 'Y', 030, 10, '', '', '', '', '', '', '1433 158 1A OM COLONY ', 'NEAR H F C S  SAIDAPUR VIDYANAGAR ', 'TAL KARAD DIST SATARA ', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9890105759', '', 269992, 270021, 014399, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1390, 00031967, 415488502, 502, '1005005300204', 'POPAT NIVRUTTI BOLKE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  NANEGAON PUN KALANTREWADI', 'TAL   KARAD', 'DIST   SATARA ', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9689388420', '', 270022, 270036, 300204, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1391, 00031968, 415488502, 502, '1005005300064', 'RAM SAMBHAJI CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   CHAREGAON ', 'TAL   KARAD ', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '9623867230', '', 270037, 270051, 300064, '2023-09-20', 24, 0, '', '3', '', '', NULL),
(1392, 00031992, 415488356, 356, '1011016000684', 'HINDUSTAN MARBLE & HARDWARE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'LAKHMARAM RANCHODAJI GEHALOT', '', 'DHEBEWADI PHATA', 'MALKAPUR  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9766558828', '', 449371, 449430, 000684, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1393, 00031993, 415488356, 356, '1011016000684', 'HINDUSTAN MARBLE & HARDWARE', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'LAKHMARAM RANCHODAJI GEHALOT', '', 'DHEBEWADI PHATA', 'MALKAPUR  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9766558828', '', 449431, 449490, 000684, '2023-09-20', 24, 0, '', '2', '', '', NULL),
(1394, 00032049, 415488352, 352, '1001102000058', 'PIONEER DISTRIBUTORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'CHIVATE PRAKASH VASANT', 'CHIVATE ARCHANA ARUN', 'PLOT NO 355  NEAR MANOHAR LODGE  ', 'SHANIWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '93710788', '', '9371078828', '', 571651, 571710, 000058, '2023-09-20', 24, 0, '', '1', '', '', NULL),
(1395, 00032110, 415488357, 357, '1024005002560', 'SUJATA PRATAP DISALE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PLOT NO 7 MANGALWAR PETH', 'RUKMININAGAR KARAD', '', '', '', 'KARAD', '', '', '', 0, '', '', '8714147065', '', 186109, 186138, 002560, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1396, 00032116, 415488357, 357, '1024005042221', 'DIPAK SHIVAJI THORAT', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P  SAVADE', 'TAL  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415111, '02164-', '02164-', '8805325581', '', 186154, 186183, 042221, '2023-09-21', 24, 0, '', '7', '', '', NULL),
(1397, 00032117, 415488357, 357, '1024005002665', 'LALASO BABURAO PUJARI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P AGASHIVNAGAR TAL KARD', 'KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9881714154', '', 186184, 186213, 002665, '2023-09-21', 24, 0, '', '8', '', '', NULL),
(1398, 00032115, 415488357, 357, '1024005001857', 'SINDHU NIVAS PAWAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'MANGALWAR PETH RAJARAM PARK KARAD', 'RADHE SHAM DUDH DEARY SAMOR KARAD', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9763886607', '', 186139, 186153, 001857, '2023-09-21', 24, 0, '', '6', '', '', NULL),
(1399, 00032118, 415488357, 357, '1024005003468', 'AMLA MOHAN KALE', 01, 'Y', 015, 10, '', 'KALE MAMTA MOHAN', '', '', '', '', 'SOMWAR PETH  KARAD', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '', '', 186214, 186228, 003468, '2023-09-21', 24, 0, '', '9', '', '', NULL),
(1400, 00032119, 415488357, 357, '1024005042572', 'SANKET SATISH KULKARNI', 01, 'Y', 015, 10, '', '', '', '', '', '', '14 RANJIT NAGAR  ', 'MANGALWAR PETH KARAD', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9373718294', '', 186229, 186243, 042572, '2023-09-21', 24, 0, '', '10', '', '', NULL),
(1401, 00032111, 415488357, 357, '1024016000522', 'MEGA BUILDERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT', '', '655 GAJANAN HOUSING SOCIETY  ', 'A P  SAIDAPUR', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9545298999', '', 187006, 187065, 000522, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1402, 00032112, 415488357, 357, '1024103000066', 'MEGA AUTOBAHN PRIVATE LIMITED', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'AKASH UTTAM SAWANT NAMRATA AKASH SA', '', '655  GAJANAN HOUSING SOCIETY', 'SAIDAPUR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9545298999', '', 181471, 181530, 000066, '2023-09-21', 24, 0, '', '3', '', '', NULL),
(1403, 00032113, 415488357, 357, '1024103000024', 'SS INGAVALE AND COMPANY', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'S S INGAVALE', '', 'OPP PANKAJ HOTEL', 'NEAR PADAM GARAGE', 'PUNE BANGLOR ROAD N H 4 TAL  KARAD ', '', '', 'KARAD', '', '', '', 415110, '98220553', '', '9822055347', '', 181531, 181590, 000024, '2023-09-21', 24, 0, '', '4', '', '', NULL),
(1404, 00032114, 415488357, 357, '1024103000040', 'STYLE STAR TAILORS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'JAVED NOORMAHAMAD PATHAN', '', '57 58 ANANT COMPLEX ', 'MANGALWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9822786105', '', 181591, 181650, 000040, '2023-09-21', 24, 0, '', '5', '', '', NULL),
(1405, 00032139, 415488515, 515, '1071005000038', 'PRANALI PRAKASH GARUD', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT   SUTARWADI  ', 'POST   MALDAN', 'TAL   PATAN DIST   SATARA', '', '', 'PATAN', '', '', '', 415112, '02372-', '02372-', '7262851163', '', 000691, 000705, 000038, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1406, 00032138, 415488512, 512, '1052005001245', 'PUSHPA SAMBHAJI MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P TALBID', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9881683096', '', 057842, 057856, 001245, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1407, 00032135, 415488505, 505, '1012016000326', 'TRINITY HIGHWAY SERVICES', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'SANJAY JAYWANT CHAVAN', '', 'A P MHAVASHI ', 'KARAD CHIPLUN ROAD ', 'TAL PATAN DIST SATARA', '', '', 'PATAN', '', '', '', 415206, '02372-', '02372-', '9850612681', '', 101266, 101325, 000326, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1408, 00032132, 415488354, 354, '1006005158545', 'RUKMINI RAMRAO BHARPURE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SWAPNTARA  SAI PRASAD COLONY ', 'NEAR SARASWATI COLONY  SAIDAPUR  KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9175081503', '', 197777, 197791, 158545, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1409, 00032129, 415488502, 502, '1005005298584', 'AMIT SHIVAJI YADAV', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P ANDHARWADI  ', 'UMBRAJ', 'DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '8975055541', '', 270052, 270111, 298584, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1410, 00032130, 415488502, 502, '1005016006169', 'WAGHJAI KRUSHI SEVA KENDRA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AMIT SHIVAJI YADAV', '', 'AT ANDHARWADI POST UMBRAJ ', 'MAIN ROAD ', 'TAL KARAD DIST SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8975055541', '', 273886, 273945, 006169, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1411, 00032131, 415488502, 502, '1005005300190', 'NOMAN IMRAN PATAVEKARI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   UMBRAJ', 'KASHID GALLI', 'TAL   KARAD DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8626024066', '', 270112, 270126, 300190, '2023-09-21', 24, 0, '', '3', '', '', NULL),
(1412, 00032133, 415488356, 356, '1011005000227', 'SAMBHAJI DNYANDEO KARALE', 01, 'Y', 015, 10, '', 'KANTA SAMBHAJI KARALE', '', '', '', '', 'NEAR KARAD URBAN BANK ', 'MALKAPUR TAL KARAD ', '', '', '', 'KARAD', '', '', '', 415539, '02164-24', '', '9822093195', '', 448922, 448936, 000227, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1413, 00032134, 415488356, 356, '1011005036081', 'ROHINI DILIP MAHAMUNI', 01, 'Y', 030, 10, '', '', '', '', '', '', 'AT PO UMBRAJ TAL KARAD', '', '', '', '', 'UMBRAJ', '', '', '', 415109, '', '', '8806637027', '', 448937, 448966, 036081, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1414, 00032136, 415488358, 358, '1026005002091', 'ARIF MOHAMMADALI NADAF', 01, 'Y', 015, 10, '', 'JAHARABI MAHAMANDAARIF NADAF', '', '', '', '', '140 BUDHAWAR PETH', 'FULE NAGAR', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '29909', '', '8624989119', '', 076502, 076516, 002091, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1415, 00032137, 415488358, 358, '1026005001208', 'SACHIN LAXMAN LADE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'OPP  SHALA NO  10', '43 BUDHWAR PETH ', 'TA   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9075688689', '', 076517, 076531, 001208, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1416, 00032127, 415488353, 353, '1002005853003', 'PAVAN SUDHIR DESAI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   KIRPE', 'YENAKE ', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '9373398342', '', 612121, 612135, 853003, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1417, 00032128, 415488353, 353, '1002005026091', 'DAGADU SHANKAR SAWANT', 01, 'Y', 015, 10, '', 'DAGADU SHANKAR SAWANT', 'SUSHILA DAGDU SAWANT', '', '', '', 'C9 7 KOYANA VASAHAT', 'MALAKAPUR', 'DIST SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9822162488', '', 612136, 612150, 026091, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1418, 00032123, 415488352, 352, '1001005067104', 'HARISH MANCHALAL KUMBHAR', 01, 'Y', 030, 10, '', '', '', '', '', '', '325 SHUKRAWAR PETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '94052166', '9421938866', '', 593823, 593852, 067104, '2023-09-21', 24, 0, '', '4', '', '', NULL),
(1419, 00032120, 415488352, 352, '1001016006710', 'RALEESONS CONSTRUCTION', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RALEESONS CONSTRUCTION', '', '425   SAVITRI HIGHTS', 'SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8605699666', '', 570226, 570285, 006710, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1420, 00032124, 415488352, 352, '1001016006362', 'SHREE KALIKADEVI NAGARI SAH.PATSANSTHA MARYAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '6 1 GURUWAR PETH KARAD ', 'KASAR GALLI KARAD ', 'FAX 226375 ', '', '', 'KARAD', '', '', '', 0, '220680', '', '9822816933', '', 570286, 570345, 006362, '2023-09-21', 24, 0, '', '5', '', '', NULL),
(1421, 00032125, 415488352, 352, '1001016006362', 'SHREE KALIKADEVI NAGARI SAH.PATSANSTHA MARYAD', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '6 1 GURUWAR PETH KARAD ', 'KASAR GALLI KARAD ', 'FAX 226375 ', '', '', 'KARAD', '', '', '', 0, '220680', '', '9822816933', '', 570346, 570405, 006362, '2023-09-21', 24, 0, '', '6', '', '', NULL),
(1422, 00032121, 415488352, 352, '1001005067215', 'POPAT GOVINDA SHEJAVAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT SURYAWANSHIWADI POST SANGWAD', 'TAL PATAN DIST SATARA', '', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '7588377559', '', 593793, 593807, 067215, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1423, 00032122, 415488352, 352, '1001005684649', 'NIRMALA MOHAN VAYACHAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P KAPIL GOLESHWAR', 'TAL    KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415124, '02164-', '02164-', '9011953618', '', 593808, 593822, 684649, '2023-09-21', 24, 0, '', '3', '', '', NULL),
(1424, 00032126, 415488352, 352, '1001005684145', 'SWATI ABHIJIT BHANDARE', 01, 'Y', 015, 10, '', '', '', '', '', '', '350 1  KRISHNA KONARK APPARTMENT', 'SOMWAR PETH  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '95525379', '02164-', '8087337968', '', 593853, 593867, 684145, '2023-09-21', 24, 0, '', '7', '', '', NULL),
(1425, 00032142, 415488353, 353, '1002016001668', 'MAHENDRA RAMNIWAS PANCHARIYA', 01, 'Y', 060, 11, '', '', '', '', '', '', '430  SOMWAR PETH', 'BALAJI CHOUK  KARAD', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9422403248', '', 624137, 624196, 001668, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1426, 00032143, 415488353, 353, '1002005853323', 'FAIZAN NOORAHMED PATWEKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   UMBRAJ BAJAR PETH ', 'NEAR KANYA SHALA ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7218757471', '', 612151, 612165, 853323, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1427, 00032144, 415488353, 353, '1002005853321', 'AFFAN NOORAHMED PATWEKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   UMBRAJ  BAJAR PETH ', 'NEAR KANYA SHALA', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '8600001900', '', 612166, 612180, 853321, '2023-09-21', 24, 0, '', '3', '', '', NULL),
(1428, 00032145, 415488502, 502, '1005005300207', 'RAJARAM NARAYAN DESHAMUKH', 01, 'Y', 015, 10, '', 'KAMAL RAJARAM DESHMUKH', '', '', '', '', '', '', '', '', '', 'KARAD', '', '', '', 0, '', '', '97665777000', '', 270127, 270141, 300207, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1429, 00032157, 415488515, 515, '1071016000020', 'SANTKRUPA TOURS AND TRAVELS', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'SAHEBRAO DILIP SUTAR', '', 'AT POST   TALMAVALE', 'NEAR KARAD DHEBEWADI ROAD ', 'TAL   PATAN   DIST   SATARA', '', '', 'TALMAVALE', '', '', '', 415103, '2355-', '2355-', '9421928875', '', 000392, 000406, 000020, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1430, 00032158, 415488515, 515, '1071005000154', 'SUNIL BABASAHEB PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', '387 1  NEAR KANASE PANAND ROAD ', 'A P WING  KARAD', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415122, '67049', '', '9766375049', '', 000706, 000720, 000154, '2023-09-21', 24, 0, '', '2', '', '', NULL),
(1431, 00032159, 415488352, 352, '1001016006725', 'AERONIC ENGINEERING', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'APSANA MAHAMADSAID KHAN', '', '329 1 1A 1 1  SAHARA RESIDENCY ', 'KARVE NAKA  KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7219020090', '', 570406, 570435, 006725, '2023-09-21', 24, 0, '', '1', '', '', NULL),
(1432, 00032189, 415488352, 352, '1001005684967', 'NISHIGANDHA DIPRAJ MANE', 01, 'Y', 015, 10, '', '', '', '', '', '', '244  MANGALWAR PETH  KARAD', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9834899685', '', 593868, 593882, 684967, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1433, 00032190, 415488352, 352, '1001005066897', 'SAMBHAJI SHAMRAO HOWAL', 01, 'Y', 030, 10, '', '', '', '', '', '', 'VADOLI NILESHWAR ROAD ', 'A P KOPARDE HAVELI ', 'TAL KARAD  DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9665409565', '', 593883, 593912, 066897, '2023-09-22', 24, 0, '', '2', '', '', NULL),
(1434, 00032191, 415488352, 352, '1001005683442', 'CHINMAY SHRIDHAR JOSHI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SOMWAR PETH ', 'DHANWANTARI APARTMENT ', 'TAL   KARAD   DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '7020756501', '', 593913, 593927, 683442, '2023-09-22', 24, 0, '', '3', '', '', NULL),
(1435, 00032192, 415488352, 352, '1001005058891', 'ABDUL RAHIM ABDUL KARIM SAYYAD', 01, 'Y', 060, 10, '', '', '', '', '', '', 'A P  BANAWADI  BANWADI COLONY', 'NEAR DUDHGANGA AUTO STOP  ', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415124, '', '', '9860737920', '', 593928, 593987, 058891, '2023-09-22', 24, 0, '', '4', '', '', NULL),
(1436, 00032193, 415488352, 352, '1001016006707', 'RUPKALASH', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RAKHI RAKESH SANGHAVI', '', '288   GURUWAR PETH', 'NEAR BHAJI MANDAI   KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '9822655551', '', 570436, 570495, 006707, '2023-09-22', 24, 0, '', '5', '', '', NULL),
(1437, 00032207, 415488514, 514, '1073016000031', 'GANESH AGENCY', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'MS GANESH AGENCY PRO KOMAL CHANDRAK', '', 'A P   PUSESAWALI ', 'S NO 804 ', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9689258090', '', 000631, 000690, 000031, '2023-09-22', 24, 0, '', '3', '', '', NULL),
(1438, 00032205, 415488514, 514, '1073005000238', 'RUSHIKESH PRAKASH MALAVE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P PUSESAWALI', 'SAMBHAJINAGAR', 'TAL  KHATAV  DIST  SATARA', '', '', 'SATARA', '', '', '', 415512, '02162-', '02162-', '7387412115', '', 000256, 000270, 000238, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1439, 00032206, 415488514, 514, '1073016000031', 'GANESH AGENCY', 01, 'Y', 015, 11, '', '', '', 'Authorised Signatory', 'MS GANESH AGENCY PRO KOMAL CHANDRAK', '', 'A P   PUSESAWALI ', 'S NO 804 ', 'TAL   KHATAV DIST  SATARA', '', '', 'PUSESAVALI', '', '', '', 415512, '2355-', '2355-', '9689258090', '', 000616, 000630, 000031, '2023-09-22', 24, 0, '', '2', '', '', NULL),
(1440, 00032195, 415488501, 501, '1004016000184', 'TEJAS TRADERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'RUPESHUTTAMLALSHAH', '', 'MASUR', 'TAL KARAD', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '252524', '', '9850032751', '', 150542, 150601, 000184, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1441, 00032196, 415488501, 501, '1004005003971', 'AVINASH MAHALING DHOBALE', 01, 'Y', 015, 10, '', 'SUNITA AVINASH DHOBALE', '', '', '', '', 'A P  MASUR  SHIVAJI NAGAR', 'MASUR RISWAD ROAD', 'TAL KARAD   DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '', '', '9881812874', '', 151441, 151455, 003971, '2023-09-22', 24, 0, '', '2', '', '', NULL),
(1442, 00032197, 415488501, 501, '1004005013483', 'SHANKAR SHIVRAM CHAVAN', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  HANBARWADI', 'TAL   KARAD', 'DIST  SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '8806183168', '', 151456, 151470, 013483, '2023-09-22', 24, 0, '', '3', '', '', NULL),
(1443, 00032199, 415488355, 355, '1007102030077', 'PRASAD COMPUTERS', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', 'prasad m pore', '', '7 C  SHANIWAR PETH', 'NEAR MARUTI MANDIR  KARAD', 'TAL  KARAD  DIST  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9890595738', '', 123076, 123135, 030077, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1444, 00032200, 415488355, 355, '1007016030357', 'DIGAMBAR KASHINATH PALKAR BROTHERS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', '', '', '157  PALKAR HOUSE', 'MAIN ROAD  GURUWAR PETH', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '222460', '99754940', '9850143001', '', 124921, 124980, 030357, '2023-09-22', 24, 0, '', '2', '', '', NULL),
(1445, 00032194, 415488353, 353, '1002005852483', 'PRAVIN PRAKASH PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   TEMBU', 'TAL   KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '7755991959', '', 612181, 612195, 852483, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1446, 00032198, 415488354, 354, '1006005010220', 'SOPAN NAMDEO BUDHE', 01, 'Y', 030, 10, '', 'BUDHE KHASHIBAI SOPAN', '', '', '', '', 'A P KOPARDE HAVELI', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '73826', '', '', '', 197792, 197821, 010220, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1447, 00032201, 415488356, 356, '1011005037842', 'ASHVINI AMIT GHARE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P   GHAREWADI', 'TAL  KARAD', 'DIST   SATARA', '', '', 'KARAD', '', '', '', 415103, '02164-', '02164-', '9021788396', '', 448967, 448981, 037842, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1448, 00032202, 415488505, 505, '1012016000203', 'PRAKASHRAO TUKARAM PATIL', 01, 'Y', 060, 11, '', '', '', '', '', '', 'A P  753 SHIVAJI NAGAR MALHARPETH', 'TAL PATAN', 'DIST SATARA', '', '', 'PATAN', '', '', '', 415205, '', '02372-', '9421382222', '', 101326, 101385, 000203, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1449, 00032203, 415488509, 509, '1020005049604', 'VAISHALI BHAGWAN NALAWADE', 01, 'Y', 060, 10, '', '', '', '', '', '', 'AT POST PARALE', 'TALUKA KARAD', 'DIST SATARA', '', '', 'KALE', '', '', '', 415124, '02164-', '02164-', '9765646128', '', 057606, 057665, 049604, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1450, 00032188, 415488358, 358, '1026005251595', 'PARSHURAM BHIMRAO SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHIVAJI STEDEUM SOCIETY', 'PRAKASH CHAVAN VAKILA SHEJARI', 'KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '8007984444', '', 076532, 076546, 251595, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1451, 00032204, 415488512, 512, '1052005003988', 'VIJAY ANANDA BORGAONKAR', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P YEVATI', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415111, '', '02164-', '9673425446', '', 057857, 057871, 003988, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1452, 00032208, 415488356, 356, '1011005037859', 'TRUPTI RAHUL PATIL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'C O   YUVRAJ DILIP CHAVAN', '121 3 B SHRI DATTASHRUTHI SANKUL', 'VIDHYANAGAR  KARAD', '', '', 'KARAD', '', '', '', 415105, '02164-', '02164-', '9579171639', '', 448982, 448996, 037859, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1453, 00032210, 415488355, 355, '1007016030389', 'M/S TAVATE DEVELOPERS', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'sourabh p tavate', 'rohit s tavate', '1047 TAVATE MARKET', 'MALKAPUR', 'TAL   KARAD DIST  SATARA', '', '', 'MALKAPUR', '', '', '', 415539, '-', '-', '9673815159', '', 124981, 125010, 030389, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1454, 00032213, 415488352, 352, '1001005054293', 'SANJAY GANPATRAO DESAI', 01, 'Y', 015, 10, '', '', '', '', '', '', 'PLOT NO 20 DOULAT COLONY', 'MARKAT YARD KARAD', '', '', '', 'KARAD', '', '', '', 415110, '', '', '9421687069', '', 594003, 594017, 054293, '2023-09-22', 24, 0, '', '3', '', '', NULL),
(1455, 00032212, 415488352, 352, '1001005685080', 'MAHESH NIVRUTTI MOHITE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'A P  SHIRAVADE', 'TAL  KARAD', 'DIST  SATARA', '', '', 'KARAD', '', '', '', 415115, '02164-', '02164-', '9922272809', '', 593988, 594002, 685080, '2023-09-22', 24, 0, '', '2', '', '', NULL),
(1456, 00032211, 415488352, 352, '1001016006687', 'MADARASA MIPHATAHUL ULUM', 01, 'Y', 030, 11, '', '', '', 'Authorised Signatory', 'MADARSA MIFTAHUL ULUM', '', 'JUMMA MASJID 50 A 1', 'GURUWAR PETH KARAD', 'TAL KARAD DIS  SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9158321313', '', 570496, 570525, 006687, '2023-09-22', 24, 0, '', '1', '', '', NULL),
(1457, 00032239, 415488201, 201, '1032005002164', 'VIKAS VISHWAS PISAL', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT GHONASHI PO VAHAGAON', 'TAL KARAD DIST SATARA', 'BHADURSHIKH NAKA CHIPLUN', '', '', 'CHIPLUN', '', '', '', 415605, '', '', '9423294052', '', 186556, 186570, 002164, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1458, 00032238, 415488358, 358, '1026005000464', 'SHANKARAO DINKAR CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', '348  MUJAWAR COLONY', 'MARKET YARD KARAD', 'TAL   KARAD  DIST   SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 076547, 076576, 000464, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1459, 00032240, 415488509, 509, '1020005001426', 'RAJENDRA KONDIBA CHAVAN', 01, 'Y', 030, 10, '', '', '', '', '', '', 'A P MALKAPUR DARSHAN BUILDING', 'PUNE BANGLORE ROAD  MALKAPUR', 'TAL   KARAD DIST   SATARA', '', '', 'KARAD', '', '', '', 415539, '', '', '9822226063', '', 057666, 057695, 001426, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1460, 00032241, 415488354, 354, '1006005003751', 'NANDKUMER DYANESWAR LOKHANDE', 01, 'Y', 015, 10, '', '', '', '', '', '', '254 BANVADI COLANEY ', 'TAL  KARAD ', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '', '', 197822, 197836, 003751, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1461, 00032244, 415488501, 501, '1004016000357', 'SAJAWAT PAINTS', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'DEEPTIRAHULSALUNKHE', '', 'A P MASUR ', 'TAL KARAD ', 'DIST SATARA', '', '', 'MASUR', '', '', '', 415106, '02164-', '02164-', '9975807922', '', 150602, 150661, 000357, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1462, 00032245, 415488353, 353, '1002005036966', 'SANJANA SUJIT SHINDE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHIVAJI HSG  SOCIETY', 'PLOT NO 325 A 1', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '', '9850672644', '', 612196, 612210, 036966, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1463, 00032246, 415488353, 353, '1002106005342', 'SANGITA PRAVIN NALAWADE', 01, 'Y', 030, 13, '', '', '', '', '', '', '92 SHIVAJI HOUSING SOCIETY', 'KARAD', '', '', '', 'KARAD', '', '', '', 415110, '02164-22', '02164-', '9881677310', '', 616055, 616084, 005342, '2023-09-25', 24, 0, '', '2', '', '', NULL),
(1464, 00032242, 415488502, 502, '1005005300197', 'TANAJI LAXMAN BHANDIRGE', 01, 'Y', 015, 10, '', '', '', '', '', '', 'AT POST   INDOLI', 'NEAR SARKARI DAVAKHANA ', 'TAL   KARAD DIST   SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '02164-', '02164-', '7038799728', '', 270142, 270156, 300197, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1465, 00032243, 415488502, 502, '1005016005966', 'M/S AMITRAJ TRADERS PROP AMIT BHARGAVRAM YADA', 01, 'Y', 060, 11, '', '', '', 'Authorised Signatory', 'AMIT BHARGAVRAM YADAV', '', 'MARKET YARD', 'A P  UMBRAJ', 'TAL  KARAD  DIST  SATARA', '', '', 'UMBRAJ', '', '', '', 415109, '', '02164-', '9096148085', '', 273946, 274005, 005966, '2023-09-25', 24, 0, '', '2', '', '', NULL),
(1466, 00032249, 415488352, 352, '1001005067600', 'VIKAS VASANTRAO LELE', 01, 'Y', 030, 10, '', '', '', '', '', '', 'PATIL ROW HOUSE', 'RUKMINI PARK PART 2', 'WAKHAN ROAD KARAD', '', '', 'KARAD', '', '', '', 415110, '', '', '9730136072', '', 594018, 594047, 067600, '2023-09-25', 24, 0, '', '1', '', '', NULL),
(1467, 00032256, 415488352, 352, '1001005683910', 'SHUBAHM ASHOK KADAM', 01, 'Y', 015, 10, '', '', '', '', '', '', 'SHINDE GALLI SHANIWARPETH KARAD', 'TAL KARAD', 'DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '02164-', '02164-', '8856975813', '', 594048, 594062, 683910, '2023-09-25', 24, 0, '', '1', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reprint_req_collection`
--

CREATE TABLE `tb_reprint_req_collection` (
  `id` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_account_no` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_is_reprint` int(11) NOT NULL DEFAULT 0,
  `cps_pr_code` varchar(4) NOT NULL,
  `cps_bsr_code` varchar(6) NOT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(74, 00030874, 415488352, 352, '1001102000349', 'RAJLAXMI INDUSTRIES PROP SHANTARAM BHAUSO CHA', 01, 'Y', 060, 13, '', '', '', 'Authorised Signatory', '', '', '161 SHUKRAWAR PETH', 'KARAD', 'TAL KARAD DIST SATARA', '', '', 'KARAD', '', '', '', 415110, '', '02164-', '9225809055', '', 571111, 571170, 000349, '2023-09-07', 23, 0, '', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_statemaster`
--

CREATE TABLE `tb_statemaster` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_code` varchar(7) NOT NULL,
  `state_name_al` varchar(4) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

CREATE TABLE `tb_suburbmaster` (
  `suburb_id` int(11) NOT NULL,
  `suburb_name` varchar(50) NOT NULL,
  `suburb_postal_code` varchar(10) NOT NULL,
  `suburb_code` varchar(7) NOT NULL,
  `suburb_name_al` varchar(4) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `tb_uploadingdata` (
  `id` int(11) NOT NULL,
  `cps_unique_req` bigint(8) UNSIGNED ZEROFILL NOT NULL,
  `cps_micr_code` int(11) NOT NULL,
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
  `cps_act_pin` int(11) NOT NULL,
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
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_uploadingdata`
--

INSERT INTO `tb_uploadingdata` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_bsr_code`, `cps_pr_code`, `cps_short_name`, `cps_issue_date`, `cps_product_code`, `bank_name`) VALUES
(50, 00000000, 0, '', '', '', '', 'Y', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, 0, '', '', '', NULL, '', '', '', '0000-00-00', '1', '', NULL, NULL, '--', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_accountholdermaster`
--
ALTER TABLE `tb_accountholdermaster`
  ADD PRIMARY KEY (`ach_Id`);

--
-- Indexes for table `tb_bankdetails`
--
ALTER TABLE `tb_bankdetails`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tb_branchdetails`
--
ALTER TABLE `tb_branchdetails`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tb_citymaster`
--
ALTER TABLE `tb_citymaster`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tb_countrymaster`
--
ALTER TABLE `tb_countrymaster`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tb_cps_adminpasswords`
--
ALTER TABLE `tb_cps_adminpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cps_chequeseries`
--
ALTER TABLE `tb_cps_chequeseries`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexes for table `tb_cps_grouppermissions`
--
ALTER TABLE `tb_cps_grouppermissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `tb_cps_groups`
--
ALTER TABLE `tb_cps_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tb_cps_halfdays`
--
ALTER TABLE `tb_cps_halfdays`
  ADD PRIMARY KEY (`branch_halfday_id`);

--
-- Indexes for table `tb_cps_holidays`
--
ALTER TABLE `tb_cps_holidays`
  ADD PRIMARY KEY (`branch_holiday_id`);

--
-- Indexes for table `tb_cps_mapbankfields`
--
ALTER TABLE `tb_cps_mapbankfields`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `tb_cps_nonworkingdays`
--
ALTER TABLE `tb_cps_nonworkingdays`
  ADD PRIMARY KEY (`branch_nonworkingday_id`);

--
-- Indexes for table `tb_cps_reprintque`
--
ALTER TABLE `tb_cps_reprintque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cps_transactioncodes`
--
ALTER TABLE `tb_cps_transactioncodes`
  ADD PRIMARY KEY (`transactioncode_id`);

--
-- Indexes for table `tb_cps_weekdays`
--
ALTER TABLE `tb_cps_weekdays`
  ADD PRIMARY KEY (`branch_workingday_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `tb_manual_print`
--
ALTER TABLE `tb_manual_print`
  ADD PRIMARY KEY (`mp_Id`);

--
-- Indexes for table `tb_pending_print_req`
--
ALTER TABLE `tb_pending_print_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_printadmin`
--
ALTER TABLE `tb_printadmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tb_printque`
--
ALTER TABLE `tb_printque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_print_req_collection`
--
ALTER TABLE `tb_print_req_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reprint_req_collection`
--
ALTER TABLE `tb_reprint_req_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_statemaster`
--
ALTER TABLE `tb_statemaster`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tb_suburbmaster`
--
ALTER TABLE `tb_suburbmaster`
  ADD PRIMARY KEY (`suburb_id`);

--
-- Indexes for table `tb_uploadingdata`
--
ALTER TABLE `tb_uploadingdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_accountholdermaster`
--
ALTER TABLE `tb_accountholdermaster`
  MODIFY `ach_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_bankdetails`
--
ALTER TABLE `tb_bankdetails`
  MODIFY `bank_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_branchdetails`
--
ALTER TABLE `tb_branchdetails`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_citymaster`
--
ALTER TABLE `tb_citymaster`
  MODIFY `city_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_countrymaster`
--
ALTER TABLE `tb_countrymaster`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cps_adminpasswords`
--
ALTER TABLE `tb_cps_adminpasswords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_cps_chequeseries`
--
ALTER TABLE `tb_cps_chequeseries`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_cps_grouppermissions`
--
ALTER TABLE `tb_cps_grouppermissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_cps_groups`
--
ALTER TABLE `tb_cps_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_cps_halfdays`
--
ALTER TABLE `tb_cps_halfdays`
  MODIFY `branch_halfday_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_cps_holidays`
--
ALTER TABLE `tb_cps_holidays`
  MODIFY `branch_holiday_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_cps_mapbankfields`
--
ALTER TABLE `tb_cps_mapbankfields`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_cps_nonworkingdays`
--
ALTER TABLE `tb_cps_nonworkingdays`
  MODIFY `branch_nonworkingday_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cps_reprintque`
--
ALTER TABLE `tb_cps_reprintque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tb_cps_transactioncodes`
--
ALTER TABLE `tb_cps_transactioncodes`
  MODIFY `transactioncode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_cps_weekdays`
--
ALTER TABLE `tb_cps_weekdays`
  MODIFY `branch_workingday_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_manual_print`
--
ALTER TABLE `tb_manual_print`
  MODIFY `mp_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pending_print_req`
--
ALTER TABLE `tb_pending_print_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1499;

--
-- AUTO_INCREMENT for table `tb_printadmin`
--
ALTER TABLE `tb_printadmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_printque`
--
ALTER TABLE `tb_printque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1497;

--
-- AUTO_INCREMENT for table `tb_print_req_collection`
--
ALTER TABLE `tb_print_req_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1468;

--
-- AUTO_INCREMENT for table `tb_reprint_req_collection`
--
ALTER TABLE `tb_reprint_req_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tb_statemaster`
--
ALTER TABLE `tb_statemaster`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_suburbmaster`
--
ALTER TABLE `tb_suburbmaster`
  MODIFY `suburb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_uploadingdata`
--
ALTER TABLE `tb_uploadingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1512;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
