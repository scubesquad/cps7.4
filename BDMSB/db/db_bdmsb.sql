-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 23, 2024 at 06:44 AM
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
-- Database: `db_bdmsb`
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
(0001, 'BRAHMADEODADA MANE SAHAKARI BANK LTD SOLAPUR', 593, 'JAIN BOARDING COMPLEX ,BUDHWAR', '', '', 1, 2, 1, 1, '413002', '', '', '', '', 0, 0, '', '', '', 'a:1:{i:0;a:3:{i:0;s:13:\"Canon LBP2900\";i:1;s:10:\"Cassette 1\";i:2;s:10:\"Cassette 2\";}}');

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
  `branch_tollfree_no` varchar(20) NOT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_branchdetails`
--

INSERT INTO `tb_branchdetails` (`branch_id`, `branch_code`, `branch_name`, `branch_micr`, `branch_atparmicrcode`, `branch_address1`, `branch_address2`, `branch_address3`, `branch_country_id`, `branch_state_id`, `branch_city_id`, `branch_suburb_id`, `branch_pin`, `branch_telephone1`, `branch_telephone2`, `branch_contactperson1`, `branch_contactperson2`, `branch_contactpersonmobile1`, `branch_contactpersonmobile2`, `branch_email1`, `branch_email2`, `branch_holiday`, `branch_neftifsccode`, `branch_printers`, `branch_working_hours`, `branch_clearingthrough`, `branch_clearingcenter`, `clr_bank_code`, `clr_bank_city`, `branch_City_Code`, `branch_Services`, `branch_reg_busi_hrs`, `branch_half_busi_hrs`, `branch_sunday_working`, `branch_tollfree_no`, `branch_sub_code`) VALUES
(3, '004', 'S P M CAMPUS KUMATHE', '413593004', '', ' SPM CAMPUS KUMATHE, TAL. NORTH ', '', '', 1, 2, 1, 6, 413224, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB03', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '5'),
(5, '003', 'PARK CHOWK', '413593003', '', 'JAVAHARLAL NEHARU HOSTEL, PARK CHOWK, SOLAPUR ', '', '', 1, 2, 1, 1, 413002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB02', NULL, NULL, 0, 0, '', 0, 413, '', 'MON TO SAT : 11 TO 6.30 PM', '', '', '', '3'),
(6, '007', 'ASHOK CHOWK', '413593007', '', '2-5, VYANKATESHWAR COMP., ASHOK CHOWK, SOLAPUR ', '', '', 1, 2, 1, 8, 413006, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB06', NULL, NULL, 0, 0, '', 0, 413, '', 'MON TO SAT : 11 TO 6.30 PM', '', '', '', '2'),
(7, '005', 'DAMANI NAGAR BR', '413593005', '', ' TARANGAN APARTMENT, DAMANI NAGAR , SOLAPUR ', '', '', 1, 2, 1, 1, 413002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB04', NULL, NULL, 0, 0, '', 0, 413, '', 'MON TO SAT : 11 TO 6.30 PM', '', '', '', '4'),
(8, '008', 'VIJAPUR ROAD BR', '413593008', '', '20/21 ANAND NAGAR,  NEAR SHAHU HOSPITAL, VIJAPUR ROAD, SOLAPUR', '', '', 1, 2, 1, 10, 413004, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB07', NULL, NULL, 0, 0, '', 0, 413, '', 'MON TO SAT : 11 TO 6.30 PM', '', '', '', '6'),
(9, '000', 'HEAD OFFICE', '413593000', '', 'TP NO.2 G PLOT NO.97 SUB PLOT NO.6,7 & 8 SHRI SIDDHESHWAR KRUSHI UTPANNA BAZAR', 'SAMITI AREA , RAVIWAR ', '', 1, 2, 1, 1, 413002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB01', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '22'),
(10, '009', 'SIDDHEHWAR MARKET YARD', '413593009', '', 'B-1,SIDDHESHWAR MARKET YARD,HYDERABAD ROAD ', '', '', 1, 2, 1, 9, 413005, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB08', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '8'),
(11, '010', 'BMIT CAMPUS BELATI', '413593010', '', 'SOLAPUR-MANGALWEDHA HIGHWAY BELATI, TAL NORTH', '', '', 1, 2, 1, 1, 413002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB09', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '9'),
(12, '601', 'TULJAPUR', '413593601', '', '11 BROGAONKAR COMP.NALDURG ROAD, TULJAPUR', '', '', 1, 2, 10, 20, 413601, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB10', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '10'),
(13, '501', 'MANGALWEDHA', '413593501', '', '1708, KUMBHAR GALLI, MANGALWEDHA', '', '', 1, 2, 11, 18, 413305, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB11', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '11'),
(14, '502', 'KARMALA', '413593502', '', '1-2, GOURAV NIVAS, OPP. ST STAND, KARMALA', '', '', 1, 2, 8, 17, 413203, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB12', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '12'),
(15, '352', 'SANGOLA', '413593352', '', '1-2, AJINKYA PLAZA, VASUD ROAD, OPP ST STAND, SANGOLA ', '', '', 1, 2, 7, 16, 413307, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB13', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '13'),
(16, '602', 'MANAGRUL(K)', '413593602', '', 'KANCHESHWAR SUGAR MILLS CAMPUS, TAL TULJAPUR, DIST OSMANABAD ', '', '', 1, 2, 10, 20, 413601, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB14', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '14'),
(17, '002', 'LAXMI ROAD PUNE', '411593002', '', '980, RAVIWAR PETH, NEAR TAMBOLI MAJZID,LAXMI ROAD, PUNE ', '', '', 1, 2, 3, 3, 411002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB15', NULL, NULL, 0, 0, '', 0, 411, '', '', '', '', '', '15'),
(18, '151', 'SANGALI BRANCH', '416593151', '', '1-2, SANKLAP ENCLEVE, DHAMANI CHOWK, 100 FIT ROAD, VISHRAMBAG, SANGLI ', '', '', 1, 2, 5, 14, 416416, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB16', NULL, NULL, 0, 0, '', 0, 416, '', '', '', '', '', '16'),
(19, '201', 'BARSHI BRANCH', '413593201', '', '1-4, ATHARV COMPLEX, NEAR DR.ANDHARE HOSPITAL, ALIPUR ROAD, BARSHI', '', '', 1, 2, 6, 15, 413411, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB17', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '17'),
(20, '011', 'SUMITRA PARK BRANCH', '413593011', '', 'SUMITRA PARK, GALA NO.3 & 4 BRAHMA GALAXY, JULE SOLAPUR', '', '', 1, 2, 1, 11, 413004, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB18', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '18'),
(21, '012', 'HOTGI ROAD', '413593012', '', 'KRUSHANA HIGHTS, 14 N.G.MILL HOUSING SOC. ASARA , SOLAPUR ', '', '', 1, 2, 1, 12, 413225, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB19', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '19'),
(22, '101', 'NANDED BRANCH', '431593101', '', 'SHAHJAN BUILDING, 63, KAILAS NAGAR, BHAGYANAGAR ROAD, WORKSHOP CORNER, NANDED ', '', '', 1, 2, 4, 13, 431605, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB20', NULL, NULL, 0, 0, '', 0, 431, '', '', '', '', '', '20'),
(23, '013', 'SRP CAMP AREA', '413593013', '', 'NEW CS NO.12/1/B/1 SOREGAON, SRP CAMP GATE, ', '', '', 1, 2, 1, 1, 413004, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB21', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '21'),
(24, '006', 'KONDI BRANCH', '413593006', '', 'HOTEL PUSHKARAJ COMPUND NEAR NH-9 KONDI', 'TAL. NORTH', '', 1, 2, 1, 7, 413255, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB05', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '7'),
(25, '002', 'SIDDHESHWAR PETH', '413593002', '', '113-A, SIDDHESHWAR PETH OPP. ZP', '', '', 1, 2, 1, 21, 413002, '', '', '', '', '', '', '', '', NULL, 'YESB0BMSB01', NULL, NULL, 0, 0, '', 0, 413, '', '', '', '', '', '1');

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
(001, 'SOL001', 'SOLAPUR', 'SOL', 1, 2, 0),
(002, 'SAT001', 'SATARA', 'SAT', 1, 2, 0),
(003, 'PUN001', 'PUNE', 'PUN', 1, 2, 0),
(004, 'NAN001', 'NANDED', 'NAN', 1, 2, 0),
(005, 'SAN001', 'SANGALI', 'SAN', 1, 2, 0),
(006, 'BAR001', 'BARSHI', 'BAR', 1, 2, 0),
(007, 'SAN002', 'SANGOLA', 'SAN', 1, 2, 0),
(008, 'KAR001', 'KARMALA', 'KAR', 1, 2, 0),
(009, 'MAN001', 'MANAGRUL', 'MAN', 1, 2, 0),
(010, 'TUL001', 'TULJAPUR', 'TUL', 1, 2, 0),
(011, 'MAN002', 'MANGALWEDHA', 'MAN', 1, 2, 0);

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
  `serise_Bank` int(11) NOT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cps_chequeseries`
--

INSERT INTO `tb_cps_chequeseries` (`series_id`, `series_transationcode`, `series_branchcode`, `serise_branchcode_branch`, `series_from`, `series_to`, `series_lastno`, `serise_Bank`, `branch_sub_code`) VALUES
(1, 10, 1, 18, 400000, 500000, 401930, 1, NULL);

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
-- Table structure for table `tb_cps_payorder`
--

CREATE TABLE `tb_cps_payorder` (
  `id` int(11) NOT NULL,
  `pay_branch_id` int(11) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_cps_payorder`
--

INSERT INTO `tb_cps_payorder` (`id`, `pay_branch_id`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_no_of_books`, `cps_book_size`, `cps_date`, `cps_process_user_id`) VALUES
(1, 1, 000001, 000003, 01, 003, '2023-11-23', 1),
(2, 1, 000004, 000006, 01, 003, '2023-11-23', 1),
(3, 1, 000004, 000006, 01, 003, '2023-11-23', 1),
(4, 1, 000001, 000003, 01, 003, '2023-12-04', 1),
(5, 1, 415263, 415265, 01, 003, '2023-12-04', 1),
(6, 1, 415266, 415268, 01, 003, '2023-12-04', 1),
(7, 1, 415269, 415271, 01, 003, '2023-12-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_payorderseries`
--

CREATE TABLE `tb_cps_payorderseries` (
  `series_id` int(11) NOT NULL,
  `series_bank_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `series_branch_id` int(11) NOT NULL,
  `series_branch_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `series_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_lastno` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cps_payorderseries`
--

INSERT INTO `tb_cps_payorderseries` (`series_id`, `series_bank_id`, `series_branch_id`, `series_branch_code`, `series_from`, `series_to`, `series_lastno`) VALUES
(2, 001, 1, 002, 415263, 999999, 415272),
(3, 001, 2, 006, 000001, 999999, 000001),
(4, 001, 3, 004, 000001, 999999, 000001),
(5, 001, 5, 003, 000001, 999999, 000001),
(6, 001, 6, 007, 000001, 999999, 000001),
(7, 001, 7, 005, 000001, 999999, 000001),
(8, 001, 8, 008, 000001, 999999, 000001),
(9, 001, 10, 009, 000001, 999999, 000001),
(10, 001, 11, 010, 000001, 999999, 000001),
(11, 001, 12, 601, 000001, 999999, 000001),
(12, 001, 13, 501, 000001, 999999, 000001),
(13, 001, 14, 502, 000001, 999999, 000001),
(14, 001, 15, 352, 000001, 999999, 000001),
(15, 001, 16, 602, 000001, 999999, 000001),
(16, 001, 17, 002, 000001, 999999, 000001),
(17, 001, 18, 151, 000001, 999999, 000001),
(18, 001, 19, 201, 000001, 999999, 000001),
(19, 001, 20, 011, 000001, 999999, 000001),
(20, 001, 21, 012, 000001, 999999, 000001),
(21, 001, 22, 101, 000001, 999999, 000001),
(22, 001, 23, 013, 000001, 999999, 000001);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_payorder_reprintque`
--

CREATE TABLE `tb_cps_payorder_reprintque` (
  `id` int(11) NOT NULL,
  `pay_branch_id` int(11) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL,
  `cps_reprint_approved` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` int(11) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(11) NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(10) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) NOT NULL,
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
  `bank_name` varchar(256) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_cps_reprintque`
--

INSERT INTO `tb_cps_reprintque` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_bsr_code`, `cps_pr_code`, `cps_reprint_approved`, `cps_short_name`, `cps_product_code`, `bank_name`, `branch_sub_code`) VALUES
(148, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 1, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, NULL, NULL, 0, '', '', NULL, '21');

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
('', 'uploads/', 'Excel', '', '', 'Excel', '', '', 0, 0, 000000, 000000, 9, 365, 'BRAHMADEODADA MANE SAHAKARI BANK LTD SOLAPUR', 'DevHarsh Infotech Pvt Ltd', 'thane logo.jpg', 'Penguins.jpg', '', '', '', '', '', 360, '', '', '', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0);

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
(3, 12, 'PAY ORDER', 0),
(4, 13, 'CASH CREDIT', 0),
(5, 14, 'DIVIDEND', 1),
(8, 15, 'PAY ORDER FOR RBI TESTING', 0),
(9, 18, 'MT', 1),
(10, 11, 'CURRENT DEPOSITS', 1),
(11, 10, 'SAVING DEPOSIT', 1),
(12, 14, 'ODFD LOAN', 1),
(13, 13, 'Hyp Cash Credit', 0),
(14, 10, 'STAFF SAVING ACCOUNT', 0);

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
-- Table structure for table `tb_payorder_reprint_req_collection`
--

CREATE TABLE `tb_payorder_reprint_req_collection` (
  `id` int(11) NOT NULL,
  `pay_branch_id` int(11) NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) NOT NULL,
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
  `branch_sub_code` varchar(10) DEFAULT NULL,
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
('admin', '21232f297a57a5a743894a0e4a801fc3', '2012-04-21 00:00:00', 1, 0, 0, 1, 0, 'admin', '2023-12-01', 1),
('reprint', '1babe098befd805689339582881da1d8', '2015-05-31 00:00:00', 16, 0, 0, 1, 1, 'reprint', '2023-12-01', 1),
('superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '2024-01-17 12:17:39', 25, 0, 0, 1, 2, 'superadmin', '2023-12-01', 1);

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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) NOT NULL,
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
  `branch_sub_code` varchar(10) DEFAULT NULL,
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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) NOT NULL,
  `cps_auth_sign2` varchar(100) NOT NULL,
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
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_print_req_collection`
--

INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(50, 00000001, 413593003, 003, '000304030000017796 ', 'MULUK BALASAHEB RANGNATH         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044461, 044470, 017796, '2023-12-22', 1, 0, '', '', '', '', '3', NULL),
(51, 00000006, 413593010, 010, '000904030000013659 ', 'JAGADE BABASAHEB BHAGWAN         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018331, 018340, 013659, '2023-12-22', 1, 0, '', '', '', '', '9', NULL),
(52, 00000003, 413593009, 009, '000804000000000117 ', 'ZAM ZAM FRUIT COMPANY      ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 085801, 085850, 000117, '2023-12-22', 1, 0, '', '', '', '', '8', NULL),
(53, 00000005, 413593009, 009, '000804000000000250 ', 'BHARAT TRADERS                   ', 01, 'Y', 150, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 085851, 086000, 000250, '2023-12-22', 1, 0, '', '', '', '', '8', NULL),
(56, 00000007, 413593009, 009, '000804000000000341 ', 'TUKARAM SHRIKANT CHORAGI         ', 01, 'Y', 100, 11, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086001, 086100, 000341, '2023-12-22', 1, 0, '', '', '', '', '8', NULL),
(57, 00000008, 413593010, 010, '000904000000000044 ', 'SIDDHANATH SHUGAR MILL LTD       ', 01, 'Y', 250, 11, '', '', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 056251, 056500, 000044, '2023-12-22', 1, 0, '', '', '', '', '9', NULL),
(60, 00000003, 413593008, 008, '000604030000001404 ', 'KARADE NITEEN SHRIKANT           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028181, 028190, 001404, '2023-12-26', 1, 0, '', '', '', '', '6', NULL),
(61, 00000006, 413593012, 012, '001904030000000851 ', 'PIRJADE ALTAF ABDULRAFIQUE       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006751, 006760, 000851, '2023-12-26', 1, 0, '', '', '', '', '19', NULL),
(62, 00000001, 413593006, 006, '000704030000003178 ', 'SAPRE SUNIL KESHAV               ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012871, 012880, 003178, '2023-12-26', 1, 0, '', '', '', '', '7', NULL),
(63, 00000001, 413593005, 005, '000402980000000100 ', 'CHAVAN  SUDARSHNA JAGNNATH       ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011761, 011770, 000100, '2023-12-26', 1, 0, '', '', '', '', '4', NULL),
(64, 00000002, 413593005, 005, '000402980000000101 ', 'SHINDE  SUVARNA MANOHAR          ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011771, 011780, 000101, '2023-12-26', 1, 0, '', '', '', '', '4', NULL),
(65, 00000001, 413593005, 005, '000402980000000099 ', 'THITE  SUNIL SUGRIV              ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011751, 011760, 000099, '2023-12-26', 1, 0, '', '', '', '', '4', NULL),
(66, 00000001, 413593003, 003, '000304030000026643 ', 'CHOUGULE NAGANATH PANDURANG      ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044471, 044480, 026643, '2023-12-26', 1, 0, '', '', '', '', '3', NULL),
(67, 00000001, 413593002, 002, '000104030000010240 ', 'Choudhari Pandurang Vishwanbhar  ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053116, 053135, 010240, '2023-12-28', 1, 0, '', '', '', '', '1', NULL),
(68, 00000003, 413593008, 008, '000604030000003147 ', 'KHALSODE SHANKAR BHIMRAO         ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028191, 028210, 003147, '2023-12-28', 1, 0, '', '', '', '', '6', NULL),
(69, 00000002, 413593004, 004, '000502980000000078 ', 'PANPAT  MAHAVIR GANPATRAO        ', 01, 'Y', 020, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 021981, 022000, 000078, '2023-12-28', 1, 0, '', '', '', '', '5', NULL),
(70, 00000004, 413593009, 009, '000804000000000368 ', 'BIRAJDAR TRADERS                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086101, 086150, 000368, '2023-12-28', 1, 0, '', '', '', '', '8', NULL),
(71, 00000005, 413593009, 009, '000804000000000369 ', 'DHANESHWARI TRADING COMPANY      ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086151, 086200, 000369, '2023-12-28', 1, 0, '', '', '', '', '8', NULL),
(72, 00000001, 413593002, 002, '000104000000000485 ', 'Solapur District Labour          ', 01, 'Y', 050, 11, '', 'Societies Co Op', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 063501, 063550, 000485, '2023-12-29', 1, 0, '', '', '', '', '1', NULL),
(73, 00000002, 413593002, 002, '000104030000013007 ', 'MASKE VIJAY VAMANRAO             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053136, 053145, 013007, '2023-12-29', 1, 0, '', '', '', '', '1', NULL),
(74, 00000003, 413593005, 005, '000402980000000102 ', 'PHADNIS APURVA NITIN             ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011781, 011790, 000102, '2023-12-29', 1, 0, '', '', '', '', '4', NULL),
(75, 00000005, 413593009, 009, '000804000000000370 ', 'PRABHULING SIDRAMAPPA THESE      ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086201, 086250, 000370, '2023-12-29', 1, 0, '', '', '', '', '8', NULL),
(76, 00000004, 000, 000, '000704030000002532 ', 'GAIKWAD ANIL RAJARAM             ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012881, 012900, 002532, '2023-12-29', 1, 0, '', '', '', '', '', NULL),
(77, 00000001, 413593005, 005, '000404030000011838 ', 'KARALE GURURAJ CHANDRAKANT       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058121, 058130, 011838, '2023-12-30', 1, 0, '', '', '', '', '4', NULL),
(78, 00000002, 413593009, 009, '000804000000000265 ', 'Nobal  Trading Company           ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086251, 086300, 000265, '2023-12-30', 1, 0, '', '', '', '', '8', NULL),
(79, 00000002, 413593003, 003, '000303010000000607 ', 'MANISHA WINES                    ', 01, 'Y', 100, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 016011, 016110, 000607, '2024-01-02', 1, 0, '', '', '', '', '3', NULL),
(80, 00000004, 413593005, 005, '000404030000010555 ', 'MARATHE VAISHALI  SHRIRANG       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058131, 058140, 010555, '2024-01-02', 1, 0, '', '', '', '', '4', NULL),
(81, 00000007, 413593010, 010, '000904030000009726 ', 'MANALE SOMNATH SIDRAM            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018341, 018350, 009726, '2024-01-02', 1, 0, '', '', '', '', '9', NULL),
(82, 00000005, 413593004, 004, '000504030000009725 ', 'Chavan Balu Singu                ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024441, 024450, 009725, '2024-01-02', 1, 0, '', '', '', '', '5', NULL),
(86, 00000004, 413593012, 012, '001904030000000853 ', 'KEMSHETTI POOJA BRIJJANNA        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006781, 006790, 000853, '2024-01-04', 1, 0, '', '', '', '', '19', NULL),
(87, 00000003, 413593009, 009, '000804000000000113 ', 'SUPER TRADERS', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086301, 086350, 000113, '2024-01-04', 1, 0, '', '', '', '', '8', NULL),
(88, 00000002, 413593008, 008, '000604000000000307 ', 'SUDHIR PHARMA ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 036951, 037050, 000307, '2024-01-04', 1, 0, '', '', '', '', '6', NULL),
(89, 00000001, 413593005, 005, '000404030000001131 ', 'VARDOLE  PRUTHVIRAJ DATTATRAY    ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058141, 058150, 001131, '2024-01-04', 1, 0, '', '', '', '', '4', NULL),
(90, 00000003, 413593006, 006, '000704030000003178 ', 'SAPRE SUNIL KESHAV               ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012901, 012920, 003178, '2024-01-04', 1, 0, '', '', '', '', '7', NULL),
(91, 00000004, 413593011, 011, '001804000000000047 ', 'OK GENTS PARLOUR                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013151, 013200, 000047, '2024-01-04', 1, 0, '', '', '', '', '18', NULL),
(92, 00000002, 413593003, 003, '000304000000001280 ', 'SHREE SIDDHANATH AUTO CONSULTANCY ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048151, 048200, 001280, '2024-01-04', 1, 0, '', '', '', '', '3', NULL),
(93, 00000001, 413593002, 002, '000104030000011101 ', 'SHIKALKAR HAJI JALALODDIN  MAHIBOOBSO      ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053146, 053155, 011101, '2024-01-04', 1, 0, '', '', '', '', '1', NULL),
(94, 00000001, 413593004, 004, '000503010000000133 ', 'SRI RAM GRUHAVASTU BHANDAR KUMTHE', 01, 'Y', 050, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022001, 022050, 000133, '2024-01-04', 1, 0, '', '', '', '', '5', NULL),
(95, 00000004, 413593009, 009, '000804000000000355 ', 'AKSHARA TRADERS                  ', 03, 'Y', 150, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086501, 086650, 000355, '2024-01-04', 1, 0, '', '', '', '', '8', NULL),
(96, 00000001, 413593004, 004, '000504030000002739 ', 'SHAIKH RASUL MAHIBUB KARISHMA COLLECTIO', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024451, 024460, 002739, '2024-01-04', 1, 0, '', '', '', '', '5', NULL),
(97, 00000002, 413593008, 008, '000603010000000125 ', 'SIDHNATH MEDICAL  GEN STORES     ', 02, 'Y', 100, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028491, 028590, 000125, '2024-01-04', 1, 0, '', '', '', '', '6', NULL),
(98, 00000003, 413593009, 009, '000804000000000292 ', 'MARUTI  DHANAPPA BIRAJDAR        ', 03, 'Y', 150, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086351, 086500, 000292, '2024-01-04', 1, 0, '', '', '', '', '8', NULL),
(99, 00000003, 413593009, 009, '000804030000001644 ', 'BHOSALE BALU AMBADAS             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013991, 014000, 001644, '2024-01-05', 1, 0, '', '', '', '', '8', NULL),
(100, 00000002, 413593009, 009, '000804030000001638 ', 'BHOSALE BABASAHEB AMBADAS        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013981, 013990, 001638, '2024-01-05', 1, 0, '', '', '', '', '8', NULL),
(101, 00000001, 413593009, 009, '000804030000001625 ', 'BHOSALE RAJU DHONDIBA            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013971, 013980, 001625, '2024-01-05', 1, 0, '', '', '', '', '8', NULL),
(102, 00000001, 413593352, 352, '001304030000001039 ', 'GHUTUKADE RAVSAHEB AANNA         ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011001, 011020, 001039, '2024-01-06', 1, 0, '', '', '', '', '13', NULL),
(103, 00000001, 413593002, 002, '000104030000001084 ', 'Vernekar Maruti Dhakalo          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053156, 053165, 001084, '2024-01-06', 1, 0, '', '', '', '', '1', NULL),
(104, 00000001, 413593003, 003, '000304030000026521 ', 'KHAN MEHJABEEN SAJID             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044481, 044490, 026521, '2024-01-06', 1, 0, '', '', '', '', '3', NULL),
(105, 00000001, 413593005, 005, '000404000000000309 ', 'PRAGATI CATERERS                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022901, 022950, 000309, '2024-01-06', 1, 0, '', '', '', '', '4', NULL),
(106, 00000001, 413593010, 010, '000904030000016847 ', 'PATIL SAGAR RAJARAM              ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018351, 018360, 016847, '2024-01-06', 1, 0, '', '', '', '', '9', NULL),
(107, 00000001, 413593013, 013, '002104000000000005 ', 'VIJAYRAJ SECURITY FORCE AND LABOUR SUPPLIERS    ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 010651, 010750, 000005, '2024-01-06', 1, 0, '', '', '', '', '21', NULL),
(108, 00000001, 413593004, 004, '000503010000000133 ', 'SRI RAM GRUHAVASTU BHANDAR KUMTHE', 01, 'Y', 050, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022051, 022100, 000133, '2024-01-08', 1, 0, '', '', '', '', '5', NULL),
(109, 00000001, 413593009, 009, '000804030000001459 ', 'SURDE ATUL SHRISHAIL             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014001, 014010, 001459, '2024-01-08', 1, 0, '', '', '', '', '8', NULL),
(111, 00000006, 413593010, 010, '000904030000015358 ', 'MANE TUKARAM LAXMAN              ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018361, 018370, 015358, '2024-01-10', 1, 0, '', '', '', '', '9', NULL),
(112, 00000004, 413593008, 008, '000604030000007241 ', 'BANSODE NIRMALA ARUN             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028211, 028220, 007241, '2024-01-10', 1, 0, '', '', '', '', '6', NULL),
(113, 00000005, 413593006, 006, '000704030000001363 ', 'DESHMUKH LALASAHEB PATANGRAO     ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012941, 012960, 001363, '2024-01-10', 1, 0, '', '', '', '', '7', NULL),
(114, 00000003, 413593004, 004, '000504100000000966 ', 'TAKMOGE LAXMAN NARSING           ', 01, 'Y', 020, 00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024461, 024480, 000966, '2024-01-10', 1, 0, '', '', '', '', '5', NULL),
(115, 00000001, 413593003, 003, '000304000000000949 ', 'NIBHAJ TRANSPORT CONTRACTER', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048201, 048250, 000949, '2024-01-10', 1, 0, '', '', '', '', '3', NULL),
(116, 00000002, 413593004, 004, '000504000000000146 ', 'SAINATH MECHNICAL WORKS', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017151, 017200, 000146, '2024-01-10', 1, 0, '', '', '', '', '5', NULL),
(117, 00000006, 413593352, 352, '001304030000000005 ', 'SAWANT NAVNATH SIDDHESHWAR       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011031, 011040, 000005, '2024-01-10', 1, 0, '', '', '', '', '13', NULL),
(118, 00000007, 413593352, 352, '001304030000001009 ', 'NIKAM BABURAV AGATARAV           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011021, 011030, 001009, '2024-01-10', 1, 0, '', '', '', '', '13', NULL),
(119, 00000008, 413593352, 352, '001304030000001012 ', 'MANERI ABDUL NABILAL             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011041, 011050, 001012, '2024-01-10', 1, 0, '', '', '', '', '13', NULL),
(120, 00000009, 413593011, 011, '001804030000000429 ', 'MALI RAHUL CHANABASAPPA          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 003791, 003800, 000429, '2024-01-10', 1, 0, '', '', '', '', '18', NULL),
(121, 00000001, 413593013, 013, '002104030000001264 ', 'NAVLE AKSHAY SUBHASH             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004181, 004190, 001264, '2024-01-12', 1, 0, '', '', '', '', '21', NULL),
(122, 00000001, 413593009, 009, '000804000000000092 ', 'NADAF MOULALI NABILAL            ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086901, 086950, 000092, '2024-01-12', 1, 0, '', '', '', '', '8', NULL),
(123, 00000002, 413593009, 009, '000804000000000239 ', 'Shrishail Nagnath Dhumaknale     ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086801, 086850, 000239, '2024-01-12', 1, 0, '', '', '', '', '8', NULL),
(124, 00000003, 413593009, 009, '000804000000000341 ', 'TUKARAM SHRIKANT CHORAGI         ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086851, 086900, 000341, '2024-01-12', 1, 0, '', '', '', '', '8', NULL),
(125, 00000004, 413593009, 009, '000804000000000355 ', 'AKSHARA TRADERS                  ', 01, 'Y', 250, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 086951, 087200, 000355, '2024-01-12', 1, 0, '', '', '', '', '8', NULL),
(126, 00000001, 413593006, 006, '000704000000000147 ', 'PARIT  HARIDAS SIDRAM            ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 010801, 010850, 000147, '2024-01-12', 1, 0, '', '', '', '', '7', NULL),
(127, 00000001, 413593352, 352, '001304030000000999 ', 'YADAV HANMANT NATHA              ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011051, 011060, 000999, '2024-01-12', 1, 0, '', '', '', '', '13', NULL),
(128, 00000001, 413593007, 007, '000202980000000009 ', 'CHITTE GURUNATH NAGAPPA          ', 01, 'Y', 020, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 007621, 007640, 000009, '2024-01-15', 1, 0, '', '', '', '', '2', NULL),
(129, 00000002, 413593008, 008, '000604030000000046 ', 'BABALESHWAR MANOJKUMAR MUTANNA   ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028221, 028230, 000046, '2024-01-15', 1, 0, '', '', '', '', '6', NULL),
(130, 00000003, 413593009, 009, '000804030000001560 ', 'BHOSALE VAISHALI SHIVAJI         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014011, 014020, 001560, '2024-01-15', 1, 0, '', '', '', '', '8', NULL),
(131, 00000006, 413593012, 012, '001904030000000858 ', 'SHAIKH SHAMIM FARDIN             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006791, 006800, 000858, '2024-01-15', 1, 0, '', '', '', '', '19', NULL),
(132, 00000004, 413593501, 501, '001102980000000029 ', 'YASHODA MAHILA NAGARI SAHAKARI PATSANSTHA MANGALWEDHA ', 01, 'Y', 050, 14, '', '', '', 'Authorized Signature	    Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 001171, 001220, 000029, '2024-01-15', 1, 0, '', '', '', '', '11', NULL),
(133, 00000005, 413593501, 501, '001104000000000027 ', 'YASHODA  MAHILA NAGARI SAHAKARI  PATSANSTHA  MANGALWEDH          ', 01, 'Y', 100, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012701, 012800, 000027, '2024-01-15', 1, 0, '', '', '', '', '11', NULL),
(134, 00000002, 413593352, 352, '001304030000000761 ', 'JADHAV SUVARNA RAJARAM           ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011061, 011110, 000761, '2024-01-16', 1, 0, '', '', '', '', '13', NULL),
(135, 00000001, 413593007, 007, '000204000000000102 ', 'SUSHIL MEDICAL GENSTORES         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 025001, 025100, 000102, '2024-01-16', 1, 0, '', '', '', '', '2', NULL),
(136, 00000003, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 010751, 010850, 000007, '2024-01-16', 1, 0, '', '', '', '', '21', NULL),
(137, 00000001, 413593011, 011, '001804000000000048 ', 'MOHITE SHUBHAM SHARAD            ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013201, 013250, 000048, '2024-01-17', 1, 0, '', '', '', '', '18', NULL),
(138, 00000002, 413593011, 011, '001804000000000049 ', 'JADHAV AKASH ANIL                ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013251, 013300, 000049, '2024-01-17', 1, 0, '', '', '', '', '18', NULL),
(139, 00000001, 413593003, 003, '000302980000000950 ', 'KADAM  RANJANA HARIDAS           ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 016111, 016120, 000950, '2024-01-17', 1, 0, '', '', '', '', '3', NULL),
(140, 00000001, 413593004, 004, '000504030000000704 ', 'DHULE SURESH BABURAO             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024481, 024490, 000704, '2024-01-17', 1, 0, '', '', '', '', '5', NULL),
(141, 00000001, 413593009, 009, '000804000000000070 ', 'SHRI NAGNATH TRADERS        ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087201, 087250, 000070, '2024-01-17', 1, 0, '', '', '', '', '8', NULL),
(142, 00000001, 413593010, 010, '000904030000000311 ', 'SALWADE SHASHIKANT SHIWA         ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018371, 018390, 000311, '2024-01-17', 1, 0, '', '', '', '', '9', NULL),
(143, 00000002, 413593010, 010, '000904030000016049 ', 'KALE ANIL ISHWAR                 ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018391, 018410, 016049, '2024-01-17', 1, 0, '', '', '', '', '9', NULL),
(144, 00000001, 413593352, 352, '001304030000001051 ', 'SHAIKH AKABAR DHONDIBA           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011111, 011120, 001051, '2024-01-17', 1, 0, '', '', '', '', '13', NULL),
(145, 00000001, 413593013, 013, '002104030000000005 ', 'MALAPURE SHANKAR VIRBHADRAPPA    ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004191, 004210, 000005, '2024-01-17', 1, 0, '', '', '', '', '21', NULL),
(146, 00000001, 413593006, 006, '000704030000002542 ', 'BHOSALE SOMNATH SURYAKANT        ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012961, 012980, 002542, '2024-01-17', 1, 0, '', '', '', '', '7', NULL),
(147, 00000004, 413593002, 002, '000104030000012247 ', 'KHATAKE PRANAY VAMAN             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053176, 053185, 012247, '2024-01-17', 25, 0, '', '', '', '', '1', NULL),
(148, 00000003, 413593002, 002, '000104030000000492 ', 'Kalyan L Patil  Company           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053166, 053175, 000492, '2024-01-17', 25, 0, '', '', '', '', '1', NULL),
(149, 00000002, 413593002, 002, '000104000000000672 ', 'JADHAV AKASH ANIL                ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 063651, 063750, 000672, '2024-01-17', 25, 0, '', '', '', '', '1', NULL),
(150, 00000001, 413593002, 002, '000104030000012910 ', 'BANGALE CHANDRAKANT SAKHARAM     ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053186, 053195, 012910, '2024-01-18', 1, 0, '', '', '', '', '1', NULL),
(151, 00000002, 413593003, 003, '000304000000001290 ', 'GOKUL SUGAR INDUSTRIES LIMITED   ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048251, 048300, 001290, '2024-01-18', 1, 0, '', '', '', '', '3', NULL),
(152, 00000003, 413593010, 010, '000904030000000076 ', 'MATTEKHANE SAMADANI MHATABSAB    ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018431, 018450, 000076, '2024-01-18', 1, 0, '', '', '', '', '9', NULL),
(153, 00000004, 413593010, 010, '000904030000001217 ', 'SHAIKH MDMATEEN MDISHAQUE        ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018411, 018430, 001217, '2024-01-18', 1, 0, '', '', '', '', '9', NULL),
(154, 00000006, 413593012, 012, '001904030000000860 ', 'BHOI RANJITA BHIMASHANKAR        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006801, 006810, 000860, '2024-01-18', 1, 0, '', '', '', '', '19', NULL),
(155, 00000005, 413593012, 012, '001902980000000029 ', 'BANSODE  TAI DINKAR              ', 01, 'Y', 010, 14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 003421, 003430, 000029, '2024-01-18', 1, 0, '', '', '', '', '19', NULL),
(156, 00000001, 413593002, 002, '000104000000000426 ', 'Sidheshwar Super Bajar           ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 063751, 063850, 000426, '2024-01-19', 1, 0, '', '', '', '', '1', NULL),
(157, 00000002, 413593002, 002, '000104040000000029 ', 'Shinde Satish Bhagwan            ', 01, 'Y', 010, 10, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053196, 053205, 000029, '2024-01-19', 1, 0, '', '', '', '', '1', NULL),
(158, 00000003, 413593005, 005, '000404030000009331 ', 'TAKMOGE SATISH LAXMAN            ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058261, 058280, 009331, '2024-01-19', 1, 0, '', '', '', '', '4', NULL),
(159, 00000005, 413593009, 009, '000804000000000250 ', 'BHARAT TRADERS                   ', 01, 'Y', 200, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087251, 087450, 000250, '2024-01-19', 1, 0, '', '', '', '', '8', NULL),
(160, 00000006, 413593009, 009, '000804000000000352 ', 'BHAIRAJE TRADERS                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087451, 087500, 000352, '2024-01-19', 1, 0, '', '', '', '', '8', NULL),
(161, 00000007, 413593010, 010, '000904000000000092 ', 'TVUM AGROTECH PRIVATE LIMITED    ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 056951, 057000, 000092, '2024-01-19', 1, 0, '', '', '', '', '9', NULL),
(162, 00000004, 413593004, 004, '000503010000000132 ', 'ASHWINI GRUHA VASTU BHANDAR      ', 01, 'Y', 200, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022101, 022300, 000132, '2024-01-19', 1, 0, '', '', '', '', '5', NULL),
(163, 00000001, 413593002, 002, '000104000000000677 ', 'ANUSHRI BAHUUDDHESHIYA SEVA SANSTHA       ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 063851, 063900, 000677, '2024-01-20', 1, 0, '', '', '', '', '1', NULL),
(164, 00000002, 413593003, 003, '000304000000001290 ', 'GOKUL SUGAR INDUSTRIES LIMITED   ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048301, 048350, 001290, '2024-01-20', 1, 0, '', '', '', '', '3', NULL),
(165, 00000003, 413593003, 003, '000304030000025459 ', 'MAHINDRAKAR KAMLESH PRABHAKAR    ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044521, 044530, 025459, '2024-01-20', 1, 0, '', '', '', '', '3', NULL),
(166, 00000004, 413593009, 009, '000804000000000333 ', 'AJAY KAILAS POUL                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087501, 087550, 000333, '2024-01-20', 1, 0, '', '', '', '', '8', NULL),
(167, 00000005, 413593012, 012, '001902980000000029 ', 'BANSODE  TAI DINKAR              ', 01, 'Y', 010, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 003431, 003440, 000029, '2024-01-20', 1, 0, '', '', '', '', '19', NULL),
(168, 00000006, 413593013, 013, '002104030000001345 ', 'GAIKWAD SUNITA RAMANNA           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004211, 004220, 001345, '2024-01-20', 1, 0, '', '', '', '', '21', NULL),
(169, 00000002, 413593003, 003, '000304030000023855 ', 'BACHUTE SANDHYA RAMCHANDRA       ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044531, 044550, 023855, '2024-01-23', 1, 0, '', '', '', '', '3', NULL),
(170, 00000003, 413593005, 005, '000404030000011147 ', 'JADHAV SWATI TUKARAM             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058281, 058290, 011147, '2024-01-23', 1, 0, '', '', '', '', '4', NULL),
(171, 00000004, 413593006, 006, '000704030000003733 ', 'BHOSALE PRAMOD NETAJI            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012981, 012990, 003733, '2024-01-23', 1, 0, '', '', '', '', '7', NULL),
(172, 00000001, 413593003, 003, '000304000000001047 ', 'EYE SPECT DIVISION     ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048351, 048400, 001047, '2024-01-23', 1, 0, '', '', '', '', '3', NULL),
(173, 00000005, 413593009, 009, '000804000000000337 ', 'SAMARTH RAJKUMAR MASHALKAR       ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087551, 087600, 000337, '2024-01-23', 1, 0, '', '', '', '', '8', NULL),
(174, 00000006, 413593010, 010, '000904000000000090 ', 'LAXMI AGRO                       ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 057001, 057100, 000090, '2024-01-23', 1, 0, '', '', '', '', '9', NULL),
(175, 00000004, 413593010, 010, '000904030000016063 ', 'SOLANKE SANTOSH LAXMAN           ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018451, 018470, 016063, '2024-01-24', 1, 0, '', '', '', '', '9', NULL),
(176, 00000003, 413593008, 008, '000604030000007675 ', 'KHAN MARJEENA SHABBIR            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028231, 028240, 007675, '2024-01-24', 1, 0, '', '', '', '', '6', NULL),
(177, 00000002, 413593004, 004, '000504030000000084 ', 'SINGARE TANAJI DATTATRAYA        ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024491, 024510, 000084, '2024-01-24', 1, 0, '', '', '', '', '5', NULL),
(178, 00000001, 413593004, 004, '000504000000000032 ', 'ADHYAKSHA SHIKSHAN PRASARAK MANDAL    ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017201, 017250, 000032, '2024-01-24', 1, 0, '', '', '', '', '5', NULL),
(179, 00000005, 413593012, 012, '001903010000000005 ', 'PRATIK INFRASTRUCTURE            ', 01, 'Y', 100, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 003441, 003540, 000005, '2024-01-24', 1, 0, '', '', '', '', '19', NULL),
(180, 00000002, 413593003, 003, '000304030000026426 ', 'KENGAR RUKMINI LAXMAN            ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044551, 044570, 026426, '2024-01-25', 1, 0, '', '', '', '', '3', NULL),
(181, 00000005, 413593008, 008, '000604030000006821 ', 'RANJALKAR  VANDITA SACHIN        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028241, 028250, 006821, '2024-01-25', 1, 0, '', '', '', '', '6', NULL),
(182, 00000006, 413593008, 008, '000604030000007670 ', 'GHATAGE SHWETA SAIPRASAD         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028251, 028260, 007670, '2024-01-25', 1, 0, '', '', '', '', '6', NULL),
(183, 00000007, 413593009, 009, '000804030000001093 ', 'BHORE VISHAL LAHU                ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014021, 014030, 001093, '2024-01-25', 1, 0, '', '', '', '', '8', NULL),
(184, 00000010, 413593010, 010, '000904030000009013 ', 'Savase Ajinath Babasaheb         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018471, 018480, 009013, '2024-01-25', 1, 0, '', '', '', '', '9', NULL),
(185, 00000011, 413593012, 012, '001904030000000838 ', 'KAMBALE VISHAL DOULAT            ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006811, 006830, 000838, '2024-01-25', 1, 0, '', '', '', '', '19', NULL),
(186, 00000013, 413593013, 013, '002104030000000045 ', 'JADHAV RENUKA DATTATRAY          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004221, 004230, 000045, '2024-01-25', 1, 0, '', '', '', '', '21', NULL),
(187, 00000014, 413593013, 013, '002104030000000184 ', 'SINAGARE SAGAR SAMBHAJI          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004231, 004240, 000184, '2024-01-25', 1, 0, '', '', '', '', '21', NULL),
(188, 00000001, 413593003, 003, '000304000000000457 ', 'AWATADE BROTHERS                 ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048401, 048500, 000457, '2024-01-25', 1, 0, '', '', '', '', '3', NULL),
(189, 00000003, 413593004, 004, '000504000000000185 ', 'RENUKACHARYA GRUHA VASTU BHANDAR ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017251, 017300, 000185, '2024-01-25', 1, 0, '', '', '', '', '5', NULL),
(190, 00000004, 413593004, 004, '000504000000000198 ', 'UDAY ENTERPRISES                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017301, 017350, 000198, '2024-01-25', 1, 0, '', '', '', '', '5', NULL),
(191, 00000009, 413593010, 010, '000904000000000044 ', 'SIDDHANATH SHUGAR MILL LTD       ', 01, 'Y', 250, 11, '', '', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 057101, 057350, 000044, '2024-01-25', 1, 0, '', '', '', '', '9', NULL),
(192, 00000008, 413593010, 010, '000904000000000016 ', 'SIDHANATH SUGAR MILLS L THIBAK SINCHAN YOJANA ', 01, 'Y', 100, 11, '', '', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 057351, 057450, 000016, '2024-01-25', 1, 0, '', '', '', '', '9', NULL),
(193, 00000002, 413593003, 003, '000304030000025659 ', 'SHRIVASTAV MANISH RAKESHCHANDRA  ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044571, 044620, 025659, '2024-01-29', 1, 0, '', '', '', '', '3', NULL),
(194, 00000005, 413593009, 009, '000804030000000360 ', 'TIWADI ABHIJEET VITTHALDAS       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014031, 014040, 000360, '2024-01-29', 1, 0, '', '', '', '', '8', NULL),
(195, 00000001, 413593003, 003, '000304000000001290 ', 'GOKUL SUGAR INDUSTRIES LIMITED   ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048501, 048550, 001290, '2024-01-29', 1, 0, '', '', '', '', '3', NULL),
(196, 00000008, 413593012, 012, '001904000000000080 ', 'NAI ZINDAGI KIRANA AND GENERAL STORE ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017401, 017450, 000080, '2024-01-29', 1, 0, '', '', '', '', '19', NULL),
(197, 00000007, 413593011, 011, '001804000000000050 ', 'S R INFRA                        ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013301, 013350, 000050, '2024-01-29', 1, 0, '', '', '', '', '18', NULL),
(198, 00000004, 413593008, 008, '000604000000000293 ', 'DAINK DANAKA TIMES               ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 037051, 037100, 000293, '2024-01-29', 1, 0, '', '', '', '', '6', NULL),
(199, 00000003, 413593008, 008, '000603010000000152 ', 'GOVIND CHEMIST AND DRUGGIST      ', 01, 'Y', 200, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028591, 028790, 000152, '2024-01-29', 1, 0, '', '', '', '', '6', NULL),
(200, 00000001, 413593002, 002, '000104030000012826 ', 'BHINGARE PRALHAD DIGAMBER        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053206, 053215, 012826, '2024-01-31', 1, 0, '', '', '', '', '1', NULL),
(201, 00000002, 413593003, 003, '000304030000022477 ', 'AWATADE JYOTIBA VILAS            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044621, 044630, 022477, '2024-01-31', 1, 0, '', '', '', '', '3', NULL),
(202, 00000003, 413593005, 005, '000404030000012285 ', 'BACHUTE RUPALI MARUTI            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058291, 058300, 012285, '2024-01-31', 1, 0, '', '', '', '', '4', NULL),
(203, 00000004, 413593008, 008, '000604030000003657 ', 'NADARGI SHANTPPA MALAPPA         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028261, 028270, 003657, '2024-01-31', 1, 0, '', '', '', '', '6', NULL),
(204, 00000005, 413593008, 008, '000604030000007677 ', 'INGALE  ANILKUMAR PRALHAD        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028271, 028280, 007677, '2024-01-31', 1, 0, '', '', '', '', '6', NULL),
(205, 00000007, 416593151, 151, '001604030000000300 ', 'UMASHETTY GIRISH PARMESHWAR      ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 002191, 002240, 000300, '2024-01-31', 1, 0, '', '', '', '', '16', NULL),
(206, 00000008, 413593012, 012, '001904030000000851 ', 'PIRJADE ALTAF ABDULRAFIQUE       ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006831, 006850, 000851, '2024-01-31', 1, 0, '', '', '', '', '19', NULL),
(207, 00000006, 413593010, 010, '000904000000000094 ', 'BRAHMASUMITRA PETROCHEMICALS PRIVATE LIMITED        ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 059951, 060000, 000094, '2024-01-31', 1, 0, '', '', '', '', '9', NULL),
(208, 00000001, 413593002, 002, '000102980000000065 ', 'Maratha Seva Nagari SahZPatsanstha                  ', 01, 'Y', 020, 14, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011671, 011690, 000065, '2024-02-01', 1, 0, '', '', '', '', '1', NULL),
(209, 00000002, 413593003, 003, '000302980000000957 ', 'HANJAGE KULDEEP SANJAY           ', 01, 'Y', 020, 14, '', '', '', 'Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 016121, 016140, 000957, '2024-02-01', 1, 0, '', '', '', '', '3', NULL),
(210, 00000003, 413593005, 005, '000404030000000311 ', 'PILLAY NARESHKUMAR RAMU          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058301, 058310, 000311, '2024-02-01', 1, 0, '', '', '', '', '4', NULL),
(211, 00000004, 413593010, 010, '000904000000000059 ', 'Sidhnath Sugar Mills H And T  Account     ', 01, 'Y', 250, 11, '', '', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 060001, 060250, 000059, '2024-02-01', 1, 0, '', '', '', '', '9', NULL),
(212, 00000005, 413593013, 013, '002104000000000003 ', 'DHANSHRI BIO-FUEL INDUSTRIES     ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 010851, 010950, 000003, '2024-02-01', 1, 0, '', '', '', '', '21', NULL),
(213, 00000003, 413593008, 008, '000604000000000323 ', 'SOLAPUR  MEDICAL STORES          ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 037101, 037200, 000323, '2024-02-02', 1, 0, '', '', '', '', '6', NULL),
(214, 00000004, 413593010, 010, '000904030000012049 ', 'Bandgar Vishnu Govind            ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018481, 018500, 012049, '2024-02-02', 1, 0, '', '', '', '', '9', NULL),
(215, 00000001, 413593003, 003, '000304030000022455 ', 'PAWAR BHIMA SOMA                 ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044631, 044640, 022455, '2024-02-02', 1, 0, '', '', '', '', '3', NULL),
(216, 00000002, 413593003, 003, '000304030000026065 ', 'DESHMUKH PANDURANG SARJERAO      ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044641, 044650, 026065, '2024-02-02', 1, 0, '', '', '', '', '3', NULL),
(217, 00000004, 413593012, 012, '001904030000000816 ', 'LAWATE HANMANT SHIVAJI           ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006851, 006870, 000816, '2024-02-03', 1, 0, '', '', '', '', '19', NULL),
(218, 00000001, 413593009, 009, '000804000000000292 ', 'MARUTI  DHANAPPA BIRAJDAR        ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087851, 087950, 000292, '2024-02-03', 1, 0, '', '', '', '', '8', NULL),
(219, 00000002, 413593009, 009, '000804000000000333 ', 'AJAY KAILAS POUL                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087601, 087650, 000333, '2024-02-03', 1, 0, '', '', '', '', '8', NULL),
(220, 00000003, 413593009, 009, '000804000000000355 ', 'AKSHARA TRADERS                  ', 01, 'Y', 200, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087651, 087850, 000355, '2024-02-03', 1, 0, '', '', '', '', '8', NULL),
(221, 00000001, 413593002, 002, '000104000000000457 ', 'Mayur Automobiles ProDudu Shital A          ', 01, 'Y', 200, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 063901, 064100, 000457, '2024-02-06', 1, 0, '', '', '', '', '1', NULL),
(222, 00000002, 413593003, 003, '000304000000001290 ', 'GOKUL SUGAR INDUSTRIES LIMITED   ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048551, 048600, 001290, '2024-02-06', 1, 0, '', '', '', '', '3', NULL),
(223, 00000003, 413593003, 003, '000304030000026683 ', 'SHITOLE BALASAHEB GANGADHAR      ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044651, 044660, 026683, '2024-02-06', 1, 0, '', '', '', '', '3', NULL),
(224, 00000004, 413593004, 004, '000504030000011166 ', 'MORE SWATI SUDHIR                ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 024511, 024520, 011166, '2024-02-06', 1, 0, '', '', '', '', '5', NULL),
(225, 00000006, 413593010, 010, '000904030000000753 ', 'KSHIRSAGAR AMIT VASANT           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018501, 018510, 000753, '2024-02-06', 1, 0, '', '', '', '', '9', NULL),
(226, 00000007, 413593010, 010, '000904030000012049 ', 'Bandgar Vishnu Govind            ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018511, 018530, 012049, '2024-02-06', 1, 0, '', '', '', '', '9', NULL),
(227, 00000008, 413593501, 501, '001104000000000019 ', 'JIJAMATA MAHILA NAGARI BIGAR  SHETI SAHAKARI  PATSANSATHA MARY    ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012801, 012850, 000019, '2024-02-06', 1, 0, '', '', '', '', '11', NULL),
(228, 00000010, 413593012, 012, '001904000000000017 ', 'LOKMANYA MEDICAL                 ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017451, 017550, 000017, '2024-02-06', 1, 0, '', '', '', '', '19', NULL),
(229, 00000009, 413593352, 352, '001302980000000001 ', 'AJINKYATARA NAGARI SAHAKARI PATSANTHA MARAYADIT      ', 01, 'Y', 050, 14, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 003271, 003320, 000001, '2024-02-06', 1, 0, '', '', '', '', '13', NULL),
(230, 00000005, 413593010, 010, '000904000000000097 ', 'UTTAR SOLAPUR TALUKA KHAREDI VIKRI SANGH MARYADIT        ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 060251, 060300, 000097, '2024-02-06', 1, 0, '', '', '', '', '9', NULL),
(231, 00000001, 413593002, 002, '000104030000012247 ', 'KHATAKE PRANAY VAMAN             ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053216, 053235, 012247, '2024-02-08', 1, 0, '', '', '', '', '1', NULL),
(232, 00000002, 413593005, 005, '000404030000003951 ', 'MASKE SANTOSH DATTU              ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058331, 058380, 003951, '2024-02-08', 1, 0, '', '', '', '', '4', NULL),
(233, 00000003, 413593005, 005, '000404030000012039 ', 'KAMBALE  SAPANA SHRIMANT         ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058381, 058430, 012039, '2024-02-08', 1, 0, '', '', '', '', '4', NULL),
(234, 00000004, 413593008, 008, '000604030000000581 ', 'KULKARNI SUDHAKAR NARAYAN        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028301, 028310, 000581, '2024-02-08', 1, 0, '', '', '', '', '6', NULL),
(235, 00000005, 413593008, 008, '000604030000004200 ', 'MASKE DATTATRAYA VISHWANATH      ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028281, 028300, 004200, '2024-02-08', 1, 0, '', '', '', '', '6', NULL),
(236, 00000006, 413593006, 006, '000704030000003637 ', 'BHOSALE MEGHA SATISH             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 012991, 013000, 003637, '2024-02-08', 1, 0, '', '', '', '', '7', NULL),
(237, 00000007, 413593352, 352, '001304030000000596 ', 'JADHAV PRADNYA BALKRISHNA        ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011121, 011130, 000596, '2024-02-08', 1, 0, '', '', '', '', '13', NULL),
(238, 00000008, 413593013, 013, '002104030000000006 ', 'Mhetre Jagdevi Satish            ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004241, 004250, 000006, '2024-02-08', 1, 0, '', '', '', '', '21', NULL),
(239, 00000001, 413593005, 005, '000404030000009932 ', 'PANDARE DATTATRI MAHDEO          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058321, 058330, 009932, '2024-02-09', 1, 0, '', '', '', '', '4', NULL),
(240, 00000002, 413593005, 005, '000404030000010421 ', 'Kulkarni Vishakha Vinod          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058311, 058320, 010421, '2024-02-09', 1, 0, '', '', '', '', '4', NULL),
(241, 00000001, 413593002, 002, '000104030000010189 ', 'Ghadage Anita Raju               ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053236, 053245, 010189, '2024-02-09', 1, 0, '', '', '', '', '1', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(242, 00000003, 413593008, 008, '000604030000002589 ', 'SHAIKH NASIM RAFIQ  SHAIKH  RAFIQ NABILA             ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028311, 028320, 002589, '2024-02-09', 1, 0, '', '', '', '', '6', NULL),
(243, 00000004, 413593008, 008, '000604030000007506 ', 'KALYANI BASAVRAJ MALLIKARJUN     ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028321, 028340, 007506, '2024-02-09', 1, 0, '', '', '', '', '6', NULL),
(244, 00000002, 413593004, 004, '000504000000000032 ', 'ADHYAKSHA SHIKSHAN PRASARAK MANDAL      ', 01, 'Y', 100, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 017351, 017450, 000032, '2024-02-09', 1, 0, '', '', '', '', '5', NULL),
(245, 00000001, 413593005, 005, '000404030000010224 ', 'FURADE ROHIT SUNIL               ', 01, 'Y', 050, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058431, 058480, 010224, '2024-02-12', 1, 0, '', '', '', '', '4', NULL),
(246, 00000002, 413593008, 008, '000604030000000927 ', 'MANGOLI MUMTAZ MURTUZAQADRI      ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028341, 028360, 000927, '2024-02-12', 1, 0, '', '', '', '', '6', NULL),
(247, 00000005, 413593012, 012, '001904030000000821 ', 'PATIL PRIYA SHAM                 ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 006871, 006880, 000821, '2024-02-12', 1, 0, '', '', '', '', '19', NULL),
(248, 00000003, 413593009, 009, '000804000000000292 ', 'MARUTI  DHANAPPA BIRAJDAR        ', 01, 'Y', 250, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 087951, 088200, 000292, '2024-02-12', 1, 0, '', '', '', '', '8', NULL),
(249, 00000004, 413593011, 011, '001804000000000040 ', 'L B TRADERS                      ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013351, 013400, 000040, '2024-02-12', 1, 0, '', '', '', '', '18', NULL),
(250, 00000001, 413593008, 008, '000603010000000125 ', 'SIDHNATH MEDICAL  GEN STORES     ', 01, 'Y', 100, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028791, 028890, 000125, '2024-02-14', 1, 0, '', '', '', '', '6', NULL),
(251, 00000002, 413593008, 008, '000604030000000271 ', 'KASAR SURESH PAYSAGAR  KASAR MALTI S.    ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 028361, 028380, 000271, '2024-02-14', 1, 0, '', '', '', '', '6', NULL),
(252, 00000003, 413593009, 009, '000804000000000088 ', 'KNDESHMUKH PROP DESHMUKH NB      ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088201, 088250, 000088, '2024-02-14', 1, 0, '', '', '', '', '8', NULL),
(253, 00000004, 413593009, 009, '000804000000000341 ', 'TUKARAM SHRIKANT CHORAGI         ', 01, 'Y', 200, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088251, 088450, 000341, '2024-02-14', 1, 0, '', '', '', '', '8', NULL),
(254, 00000005, 413593009, 009, '000804030000001661 ', 'BELLE PRATHAMESH GOPAL           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014041, 014050, 001661, '2024-02-14', 1, 0, '', '', '', '', '8', NULL),
(255, 00000006, 413593010, 010, '000904000000000098 ', 'SHIVAM TOUR AND TRAVEL           ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 060301, 060350, 000098, '2024-02-14', 1, 0, '', '', '', '', '9', NULL),
(256, 00000001, 413593003, 003, '000304000000001290 ', 'GOKUL SUGAR INDUSTRIES LIMITED   ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 048601, 048650, 001290, '2024-02-16', 1, 0, '', '', '', '', '3', NULL),
(257, 00000002, 413593003, 003, '000304030000023215 ', 'CHABUKSWAR SIDHHARAM DHONDAPPA   ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044671, 044690, 023215, '2024-02-16', 1, 0, '', '', '', '', '3', NULL),
(258, 00000003, 413593003, 003, '000304030000026697 ', 'UPASE KAUSHALYA HANUMANT         ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044661, 044670, 026697, '2024-02-16', 1, 0, '', '', '', '', '3', NULL),
(259, 00000004, 413593005, 005, '000404030000010665 ', 'KONDUBHAIRI  VANDANA  SANJAY     ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058481, 058490, 010665, '2024-02-16', 1, 0, '', '', '', '', '4', NULL),
(260, 00000005, 413593009, 009, '000804000000000275 ', 'Shrishail Dharmraj Banajgole     ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088451, 088500, 000275, '2024-02-16', 1, 0, '', '', '', '', '8', NULL),
(261, 00000006, 413593009, 009, '000804030000000092 ', 'NAVGIRE GOPICAND PANDURANG       ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 014051, 014060, 000092, '2024-02-16', 1, 0, '', '', '', '', '8', NULL),
(262, 00000007, 413593010, 010, '000904000000000033 ', 'BRAHMADEVDADA MANE POLYTECHNIC   ', 01, 'Y', 100, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 060351, 060450, 000033, '2024-02-16', 1, 0, '', '', '', '', '9', NULL),
(263, 00000001, 000, 000, '001102980000000034 ', 'YASHODA MAHILA NAGARI SAHAKARI  PATSANSTHA MANGALWEDHA      ', 01, 'Y', 050, 10, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 001221, 001270, 000034, '2024-02-16', 1, 0, '', '', '', '', '', NULL),
(264, 00000001, 000, 000, '001102980000000034 ', 'YASHODA MAHILA NAGARI SAHAKARI PATSANSTHA MANGALWEDHA     ', 01, 'Y', 050, 10, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 001221, 001270, 000034, '2024-02-16', 1, 0, '', '', '', '', '', NULL),
(265, 00000001, 000, 000, '001102980000000034 ', 'YASHODA MAHILA NAGARI SAHAKARI PATSANSTHA MANGALWEDHA     ', 01, 'Y', 050, 10, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 001221, 001270, 000034, '2024-02-17', 1, 0, '', '', '', '', '', NULL),
(266, 00000001, 413593501, 501, '001102980000000034 ', 'YASHODA MAHILA NAGARI SAHAKARI PATSANSTHA MANGALWEDHA          ', 01, 'Y', 050, 14, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 001221, 001270, 000034, '2024-02-17', 1, 0, '', '', '', '', '11', NULL),
(267, 00000001, 413593002, 002, '000104000000000672 ', 'JADHAV AKASH ANIL                ', 01, 'Y', 100, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 064101, 064200, 000672, '2024-02-17', 1, 0, '', '', '', '', '1', NULL),
(268, 00000002, 413593003, 003, '000304030000013317 ', 'BHINGARE SANTOSH LAXMAN          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 044691, 044700, 013317, '2024-02-17', 1, 0, '', '', '', '', '3', NULL),
(269, 00000003, 413593006, 006, '000704000000000114 ', 'MATOSHRI PRINTERS PROPRAWAKADE PN   ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 010851, 010900, 000114, '2024-02-17', 1, 0, '', '', '', '', '7', NULL),
(270, 00000004, 413593009, 009, '000804000000000371 ', 'HARISH ONIONS                    ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088501, 088550, 000371, '2024-02-17', 1, 0, '', '', '', '', '8', NULL),
(271, 00000005, 413593010, 010, '000904030000014229 ', 'AWATADE SUNITA SAMBHAJI          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018531, 018540, 014229, '2024-02-17', 1, 0, '', '', '', '', '9', NULL),
(272, 00000006, 413593352, 352, '001304030000001055 ', 'SHINDE SUNITA HANAMANT           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011131, 011140, 001055, '2024-02-17', 1, 0, '', '', '', '', '13', NULL),
(273, 00000001, 413593002, 002, '000104030000011684 ', 'BHOSALE TANAJI SUBHASH           ', 01, 'Y', 020, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053246, 053265, 011684, '2024-02-21', 1, 0, '', '', '', '', '1', NULL),
(274, 00000003, 413593007, 007, '000204000000000010 ', 'RAMAKANT KARNIK NAGAR SAHAKARI GRAH NIRMAN SANSTHA B MARYADIT S  ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 025101, 025150, 000010, '2024-02-21', 1, 0, '', '', '', '', '2', NULL),
(275, 00000004, 413593005, 005, '000404000000000282 ', 'REVOLUTIONARY MARATHA ENTREPRENEUR ASSOCIATION              ', 01, 'Y', 050, 11, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022951, 023000, 000282, '2024-02-21', 1, 0, '', '', '', '', '4', NULL),
(276, 00000007, 413593009, 009, '000804000000000360 ', 'HIRAPURE TRADERS                 ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088551, 088600, 000360, '2024-02-21', 1, 0, '', '', '', '', '8', NULL),
(277, 00000002, 413593002, 002, '000104030000013199 ', 'TAMBOLI ASMA AMIR                ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 053266, 053275, 013199, '2024-02-21', 1, 0, '', '', '', '', '1', NULL),
(278, 00000005, 413593005, 005, '000404190000000783 ', 'GAIKWAD ATUL MASAJI              ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058491, 058500, 000783, '2024-02-21', 1, 0, '', '', '', '', '4', NULL),
(279, 00000006, 413593004, 004, '000503010000000132 ', 'ASHWINI GRUHA VASTU BHANDAR      ', 01, 'Y', 200, 13, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 022301, 022500, 000132, '2024-02-21', 1, 0, '', '', '', '', '5', NULL),
(280, 00000008, 413593010, 010, '000904030000009890 ', 'JAGTAP  GOVARDHAN DATTATARY      ', 01, 'Y', 030, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 018541, 018570, 009890, '2024-02-21', 1, 0, '', '', '', '', '9', NULL),
(281, 00000009, 413593011, 011, '001804000000000042 ', 'OM TRADERS                       ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 013401, 013500, 000042, '2024-02-21', 1, 0, '', '', '', '', '18', NULL),
(282, 00000010, 413593013, 013, '002104030000001388 ', 'BHIMADE MARUTI KALLAPPA          ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 004251, 004260, 001388, '2024-02-21', 1, 0, '', '', '', '', '21', NULL),
(283, 00000001, 413593009, 009, '000804000000000140 ', 'ASAMAD HAJI HABIBULLA RAMPURE    ', 01, 'Y', 050, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088701, 088750, 000140, '2024-02-22', 1, 0, '', '', '', '', '8', NULL),
(284, 00000002, 413593009, 009, '000804000000000250 ', 'BHARAT TRADERS                   ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 088601, 088700, 000250, '2024-02-22', 1, 0, '', '', '', '', '8', NULL),
(285, 00000003, 413593352, 352, '001304030000000007 ', 'LOTAKE ANILKUMAR GANES           ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011141, 011150, 000007, '2024-02-22', 1, 0, '', '', '', '', '13', NULL),
(286, 00000004, 413593201, 201, '001702980000000005 ', 'KALBHAIRAV NAG SAHA PAT BR SANKESHWER         ', 01, 'Y', 100, 14, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 002021, 002120, 000005, '2024-02-22', 1, 0, '', '', '', '', '17', NULL),
(287, 00000005, 413593201, 201, '001702980000000009 ', 'KALBHAIRAV NAG SAHA PAT BR SANKESHWER          ', 01, 'Y', 100, 14, '', '', '', 'Authorized Signature	Authorized Signature', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 002121, 002220, 000009, '2024-02-22', 1, 0, '', '', '', '', '17', NULL),
(288, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', '', '', '21', NULL);

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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_tr_code` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_atpar` varchar(10) NOT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) NOT NULL,
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
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_reprint_req_collection`
--

INSERT INTO `tb_reprint_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(5, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(6, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(7, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(8, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(9, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(10, 00000006, 413593013, 013, '002104000000000007 ', 'SAGAR GRUH VASTU BHANDAR         ', 01, 'Y', 100, 11, '', '', '', 'Proprietor', '', '', 'NEW C.S.NO.12/1/B/1 SOREGAON SRP CA', '', '', '', '', 'SOLAPUR', '', '', '', 413004, '', '', '', 'YESB0BMSB21', 011001, 011100, 000007, '2024-02-22', 1, 0, '', '', NULL, NULL, NULL, NULL),
(11, 00000005, 413593005, 005, '000404190000000783 ', 'GAIKWAD ATUL MASAJI              ', 01, 'Y', 010, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 058491, 058500, 000783, '2024-02-21', 1, 0, '', '', NULL, NULL, NULL, NULL);

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
(1, 'SOLAPUR', '413004', 'SOL001', 'SOL', 1, 2, 1, 0),
(2, 'SATARA', '415523', 'SAT001', 'SAT', 1, 2, 2, 0),
(3, 'LAXMI ROAD ', '411002', 'LAX001', 'PUN', 1, 2, 3, 0),
(4, 'NEW', '413106', 'NEW001', 'NEW', 1, 2, 1, 1),
(5, 'PARK CHOWK', '413001', 'PAR001', 'PAR', 1, 2, 1, 0),
(6, 'KUMATHE', '413224', 'KUM001', 'KUM', 1, 2, 1, 0),
(7, 'KONDI ', '413255', 'KON001', 'KON', 1, 2, 1, 0),
(8, 'ASHOK CHOWK ', '413006', 'ASH001', 'ASH', 1, 2, 1, 0),
(9, 'MARKET YARD ', '413005', 'MAR001', 'MAR', 1, 2, 1, 0),
(10, 'VIJAPUR ROAD ', '413004', 'VIJ001', 'VIJ', 1, 2, 1, 0),
(11, 'SUMITRA PARK ', '413004', 'SUM001', 'SUM', 1, 2, 1, 0),
(12, 'ASARA', '413225', 'ASA001', 'ASA', 1, 2, 1, 0),
(13, 'NANDED ', '431605', 'NAN001', 'NAN', 1, 2, 4, 0),
(14, 'SANGALI ', '416416', 'SAN001', 'SAN', 1, 2, 5, 0),
(15, 'BARSHI ', '413411', 'BAR001', 'BAR', 1, 2, 6, 0),
(16, 'SANGOLA', '413307', 'SAN002', 'SAN', 1, 2, 7, 0),
(17, 'KARMALA', '413203', 'KAR001', 'KAR', 1, 2, 8, 0),
(18, 'MANGALWEDHA', '413305', 'MAN001', 'MAN', 1, 2, 11, 0),
(19, 'MANAGRUL', '413616', 'MAN002', 'MAN', 1, 2, 9, 0),
(20, 'TULJAPUR', '413601', 'TUL001', 'TUL', 1, 2, 10, 0),
(21, 'SIDDESHWAR', '413002', 'SID001', 'SID', 1, 2, 1, 0);

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
  `cps_act_name` varchar(191) NOT NULL,
  `cps_no_of_books` varchar(2) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` varchar(3) NOT NULL,
  `cps_tr_code` varchar(2) NOT NULL,
  `cps_atpar` varchar(1) DEFAULT NULL,
  `cps_act_jointname1` varchar(45) NOT NULL,
  `cps_act_jointname2` varchar(45) NOT NULL,
  `cps_auth_sign1` varchar(100) DEFAULT NULL,
  `cps_auth_sign2` varchar(35) DEFAULT NULL,
  `cps_auth_sign3` varchar(35) NOT NULL,
  `cps_act_address1` varchar(50) DEFAULT NULL,
  `cps_act_address2` varchar(50) DEFAULT NULL,
  `cps_act_address3` varchar(35) DEFAULT NULL,
  `cps_act_address4` varchar(35) DEFAULT NULL,
  `cps_act_address5` varchar(35) DEFAULT NULL,
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
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_upload`
--

CREATE TABLE `test_upload` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `transcation_type` varchar(100) DEFAULT NULL,
  `sr_no` int(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `sub_acc_no` varchar(50) DEFAULT NULL,
  `account_name` varchar(191) DEFAULT NULL,
  `joint_account_name1` varchar(50) DEFAULT NULL,
  `joint_account_name2` varchar(50) DEFAULT NULL,
  `joint_account_name3` varchar(50) DEFAULT NULL,
  `joint_account_name4` varchar(50) DEFAULT NULL,
  `chequebook_number` varchar(20) DEFAULT NULL,
  `chequebook_leaves` varchar(50) DEFAULT NULL,
  `start_cheque` varchar(100) DEFAULT NULL,
  `end_cheque` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `tb_cps_payorder`
--
ALTER TABLE `tb_cps_payorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cps_payorderseries`
--
ALTER TABLE `tb_cps_payorderseries`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexes for table `tb_cps_payorder_reprintque`
--
ALTER TABLE `tb_cps_payorder_reprintque`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_payorder_reprint_req_collection`
--
ALTER TABLE `tb_payorder_reprint_req_collection`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `test_upload`
--
ALTER TABLE `test_upload`
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
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_citymaster`
--
ALTER TABLE `tb_citymaster`
  MODIFY `city_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `tb_cps_payorder`
--
ALTER TABLE `tb_cps_payorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_cps_payorderseries`
--
ALTER TABLE `tb_cps_payorderseries`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_cps_payorder_reprintque`
--
ALTER TABLE `tb_cps_payorder_reprintque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_cps_reprintque`
--
ALTER TABLE `tb_cps_reprintque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `tb_cps_transactioncodes`
--
ALTER TABLE `tb_cps_transactioncodes`
  MODIFY `transactioncode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `tb_payorder_reprint_req_collection`
--
ALTER TABLE `tb_payorder_reprint_req_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pending_print_req`
--
ALTER TABLE `tb_pending_print_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=450;

--
-- AUTO_INCREMENT for table `tb_printadmin`
--
ALTER TABLE `tb_printadmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_printque`
--
ALTER TABLE `tb_printque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `tb_print_req_collection`
--
ALTER TABLE `tb_print_req_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `tb_reprint_req_collection`
--
ALTER TABLE `tb_reprint_req_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_statemaster`
--
ALTER TABLE `tb_statemaster`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_suburbmaster`
--
ALTER TABLE `tb_suburbmaster`
  MODIFY `suburb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_uploadingdata`
--
ALTER TABLE `tb_uploadingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `test_upload`
--
ALTER TABLE `test_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=828;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
