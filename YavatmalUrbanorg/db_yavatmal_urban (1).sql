-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2023 at 04:03 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_yavatmal_urban`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_accountholdermaster`
--

CREATE TABLE IF NOT EXISTS `tb_accountholdermaster` (
  `ach_Id` int(11) NOT NULL AUTO_INCREMENT,
  `ach_account_No` int(12) NOT NULL,
  `ach_account_Name` varchar(40) NOT NULL,
  `ach_Bearer_Order` int(1) NOT NULL,
  `ach_Transaction_Code` int(15) NOT NULL,
  `ach_At_Par` int(1) NOT NULL,
  `ach_Joint_Name1` varchar(40) NOT NULL,
  `ach_Joint_Name2` varchar(40) NOT NULL,
  `ach_Authorized_Signatory1` varchar(25) NOT NULL,
  `ach_Authorized_Signatory2` varchar(25) NOT NULL,
  `ach_Authorized_Signatory3` varchar(25) NOT NULL,
  `ach_Address1` varchar(200) NOT NULL,
  `ach_Address2` varchar(200) NOT NULL,
  `ach_Suburb` int(10) NOT NULL,
  `ach_City` int(10) NOT NULL,
  `ach_State` int(6) NOT NULL,
  `ach_Country` int(3) NOT NULL,
  `ach_Pincode` int(12) NOT NULL,
  `ach_Telephone_Residence` int(12) NOT NULL,
  `ach_Telephone_Office` int(12) NOT NULL,
  `ach_Mobile_No` int(12) NOT NULL,
  `ach_Branch` int(11) NOT NULL,
  `ach_emailId` varchar(30) NOT NULL,
  PRIMARY KEY (`ach_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `tb_bankdetails` (
  `bank_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` int(3) unsigned zerofill NOT NULL,
  `bank_address1` text NOT NULL,
  `bank_address2` varchar(36) NOT NULL,
  `bank_address3` varchar(36) NOT NULL,
  `bank_country_id` int(3) NOT NULL,
  `bank_state_id` int(3) NOT NULL,
  `bank_city_id` int(3) NOT NULL,
  `bank_suburb_id` int(3) NOT NULL,
  `bank_pin` varchar(15) NOT NULL,
  `bank_contact_no1` varchar(15) NOT NULL,
  `bank_contact_no2` varchar(15) NOT NULL,
  `bank_contact_per1` varchar(40) NOT NULL,
  `bank_contact_per2` varchar(40) NOT NULL,
  `bank_contact_per_LL1` int(12) NOT NULL,
  `bank_contact_per_LL2` int(12) NOT NULL,
  `bank_emailid2` varchar(30) NOT NULL,
  `bank_emailid` varchar(40) NOT NULL,
  `bank_website` varchar(40) NOT NULL,
  `bank_printers` text NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_bankdetails`
--

INSERT INTO `tb_bankdetails` (`bank_id`, `bank_name`, `bank_code`, `bank_address1`, `bank_address2`, `bank_address3`, `bank_country_id`, `bank_state_id`, `bank_city_id`, `bank_suburb_id`, `bank_pin`, `bank_contact_no1`, `bank_contact_no2`, `bank_contact_per1`, `bank_contact_per2`, `bank_contact_per_LL1`, `bank_contact_per_LL2`, `bank_emailid2`, `bank_emailid`, `bank_website`, `bank_printers`) VALUES
(0001, 'THE YAVATMAL URBAN COOP BANK LTD YAVATMAL', 810, 'HEAD OFFIC LIC CHOWK GARDEN ROAD ', 'YAVATMAL', '', 1, 2, 2, 2, '445001', '', '', '', '', 0, 0, '', '', 'yavatmalurbanbank.com', 'a:1:{i:0;a:3:{i:0;s:16:"HP Universal 605";i:1;s:6:"Tray 3";i:2;s:6:"Tray 2";}}');

-- --------------------------------------------------------

--
-- Table structure for table `tb_branchdetails`
--

CREATE TABLE IF NOT EXISTS `tb_branchdetails` (
  `branch_id` int(200) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(10) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_micr` varchar(20) NOT NULL,
  `branch_atparmicrcode` varchar(20) NOT NULL,
  `branch_address1` varchar(85) NOT NULL,
  `branch_address2` varchar(65) NOT NULL,
  `branch_address3` varchar(85) NOT NULL,
  `branch_country_id` int(3) NOT NULL DEFAULT '0',
  `branch_state_id` int(11) NOT NULL,
  `branch_city_id` int(11) NOT NULL,
  `branch_suburb_id` int(4) NOT NULL,
  `branch_pin` int(15) NOT NULL,
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
  `clr_bank_city` int(5) NOT NULL,
  `branch_City_Code` int(3) unsigned zerofill NOT NULL,
  `branch_Services` varchar(100) NOT NULL,
  `branch_reg_busi_hrs` varchar(100) NOT NULL,
  `branch_half_busi_hrs` varchar(100) NOT NULL,
  `branch_sunday_working` varchar(100) NOT NULL,
  `branch_tollfree_no` varchar(20) NOT NULL,
  `branch_sub_code` varchar(10) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tb_branchdetails`
--

INSERT INTO `tb_branchdetails` (`branch_id`, `branch_code`, `branch_name`, `branch_micr`, `branch_atparmicrcode`, `branch_address1`, `branch_address2`, `branch_address3`, `branch_country_id`, `branch_state_id`, `branch_city_id`, `branch_suburb_id`, `branch_pin`, `branch_telephone1`, `branch_telephone2`, `branch_contactperson1`, `branch_contactperson2`, `branch_contactpersonmobile1`, `branch_contactpersonmobile2`, `branch_email1`, `branch_email2`, `branch_holiday`, `branch_neftifsccode`, `branch_printers`, `branch_working_hours`, `branch_clearingthrough`, `branch_clearingcenter`, `clr_bank_code`, `clr_bank_city`, `branch_City_Code`, `branch_Services`, `branch_reg_busi_hrs`, `branch_half_busi_hrs`, `branch_sunday_working`, `branch_tollfree_no`, `branch_sub_code`) VALUES
(3, '002', 'YAVATMAL MAIN', '', '', 'KALE COMPLEX,', 'DATTA CHOWK,', 'YAVATMAL', 1, 2, 2, 2, 445001, '07232245183', '', '', '', '', '', 'mgr_ytl@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y02', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '01'),
(2, '501', 'PATANBORI', '', '', 'NEAR BUS STATION, PATANBORI ', 'TQ. KELAPUR, DIST. YAVATMAL', '', 1, 2, 3, 3, 445305, '07235237840', '', '', '', '', '', 'mgr_ptb@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y03', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '02'),
(5, '502', 'ARNI', '', '', 'SAI COMPLEX, YAVATMAL ROAD, ARNI', 'TQ. ARNI, DIST. YAVATMAL', '', 1, 2, 4, 4, 445103, '07234266677', '', '', '', '', '', 'mgr_arn@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y04', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '03'),
(6, '503', 'WANI', '', '', 'NEAR BANK OF MAHARASHTRA CHOWK,', 'HYDERABAD ROAD, WANI', 'TQ. WANI, DIST. YAVATMAL', 1, 2, 5, 5, 445304, '07239225156', '', '', '', '', '', 'mgr_wan@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y05', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '04'),
(7, '504', 'UMARKHED', '', '', 'PATTEWAR COMPLEX, ', 'OPP. BUS STAND UMARKHED', 'TQ. UMARKHED, DIST. YAVATMAL', 1, 2, 6, 6, 445206, '07231237081', '', '', '', '', '', 'mgr_ukd@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y06', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '05'),
(8, '505', 'DIGRAS', '', '', 'MODANI COMPLEX,', 'NEAR POOJA GUEST HOUSE, DIGRAS', 'TQ. DIGRAS DIST. YAVATMAL', 1, 2, 7, 7, 445203, '07234222328', '', '', '', '', '', 'mgr_dig@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y07', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '06'),
(9, '506', 'NER', '', '', 'POHOKAR S BUILDING,', 'NEAR BUS STATION, NER', 'TQ. NER DIST YAVATMAL', 1, 2, 8, 8, 445102, '07238267102', '', '', '', '', '', 'mgr_ner@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y08', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '07'),
(10, '507', 'GHATANJI', '', '', 'NEAR S.B.I.YAVTMAL ROAD,', 'YAVATMAL ROAD, GHATANJI', 'TQ. GHATANJI DIST. YAVATMAL', 1, 2, 9, 9, 445301, '07230277163', '', '', '', '', '', 'mgr_gha@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y09', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '08'),
(11, '508', 'DHANKI', '', '', 'GANDHEWAR S BUILDING, ', 'BUS STATION ROAD,DHANKI', 'TQ. UMARKHED, DIST. YAVATMAL', 1, 2, 10, 10, 445207, '07231241111', '', '', '', '', '', 'mgr_dha@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y10', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '09'),
(12, '510', 'DARWHA', '', '', 'NAGAR PARISHAD BUILDING', 'GOLIBAR CHWOK, DARWHA', 'TQ. DARWHA, DIST. YAVATMAL', 1, 2, 12, 12, 445202, '07238254336', '', '', '', '', '', 'mgr_dar@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y12', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '11'),
(13, '511', 'RALEGAON', '', '', 'MAIN ROAD, RALEGAON', 'TQ. RALEGAON, DIST. YAVATMAL', '', 1, 2, 13, 13, 445402, '07202225123', '', '', '', '', '', 'mgr_ral@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y13', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '12'),
(14, '512', 'KALAMB', '', '', 'CHINTAMANI MANDIR ROAD, KALAMB, ', 'TQ. KALAMB DIST. YAVATMAL', '', 1, 2, 14, 14, 445401, '07201226519', '', '', '', '', '', 'mgr_kal@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y14', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '13'),
(15, '102', 'PUSAD', '', '', 'DEVKRUPA, KAMAN CHOWK,', 'NEAR MENDHYA MAROTI, PUSAD', 'TQ. PUSAD DIST. YAVATMAL', 1, 2, 15, 15, 445204, '07233245300', '', '', '', '', '', 'mgr_pus@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y15', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '14'),
(16, '003', 'VEER SAWARKAR', '', '', 'MAIN LINE,', 'MAHAJANWADI ROAD, YAVATMAL', 'TQ.DIST. YAVATMAL', 1, 2, 16, 16, 445001, '07232246804', '', '', '', '', '', 'mgr_vsr@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y16', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '15'),
(17, '514', 'BABHULGAON', '', '', 'INDIRA CHOWK, BABHULGAON', 'TQ. BABHULGAON DIST. YAVATMAL', '', 1, 2, 17, 17, 445101, '07203270518', '', '', '', '', '', 'mgr_bab@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y17', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '16'),
(18, '004', 'WADGAON', '', '', 'ARNI NAKA, WADGAON ROAD, YAVATMAL', 'TQ.DIST YAVATMAL', '', 1, 2, 18, 18, 445001, '0723245930', '', '', '', '', '', 'mgr_wad@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y18', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '17'),
(19, '102', 'CHANDRAPUR', '', '', 'NAGAR PARISHAD BUILDING', 'GANDHI CHOWK, CHANDRPUR', 'TQ.DIST. CHANDRAPUR', 1, 2, 19, 19, 442402, '07172254361', '', '', '', '', '', 'mgr_cdr@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y19', NULL, NULL, 0, 0, '', 0, 442, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '18'),
(20, '501', 'GADCHANDUR', '', '', 'ACHANAH CHOWK, GADCHANDUR', 'TQ. KORPANA, DIST CHANDRAPUR', '', 1, 2, 21, 20, 442908, '07173246680', '', '', '', '', '', 'mgr_gad@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y21', NULL, NULL, 0, 0, '', 0, 442, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '20'),
(21, '101', 'AMRAVATI', '', '', 'BHONDU COMPLEX, MUDHOLKAR PETH,', 'BADNERA ROAD. AMRAVATI', 'TQ.DIST. AMRAVATI', 1, 2, 1, 1, 444601, '07212578520', '', '', '', '', '', 'mgr_amt@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y20', NULL, NULL, 0, 0, '', 0, 444, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '19'),
(22, '252', 'BHADRAWATI', '', '', 'SHINDE BUILDING, MAIN ROAD, BHADRAWATI', 'TQ. BHADRAWATI, DIST. CHANDRAPUR', '', 1, 2, 22, 21, 442902, '07175265633', '', '', '', '', '', 'mgr_bha@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y22', NULL, NULL, 0, 0, '', 0, 442, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '21'),
(23, '002', 'DEV NAGAR NAGPUR', '', '', 'DEV NAGAR SQUARE, ', 'KHAMLA ROAD, NAGPUR', 'TQ. DIST. NAGPUR', 1, 2, 23, 22, 440015, '07122242320', '', '', '', '', '', 'mgr_ngp@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y23', NULL, NULL, 0, 0, '', 0, 440, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '22'),
(24, '003', 'GANDHIBAG NAGPUR', '', '', '1ST FLOOR, KAMDAR COMPLEX, PLOT NO. 73,', 'SEVA SADAN SQUARE, C. A. ROAD, NAGPUR', 'TQ. DIST. NAGPUR', 1, 2, 24, 23, 440001, '07122728184', '', '', '', '', '', '', '', NULL, 'IBKL0041Y25', NULL, NULL, 0, 0, '', 0, 440, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '25'),
(25, '002', 'AKOLA', '', '', 'ALSHI COMPLEX, OPP. OPEN THEATER', 'GANDH ROAD, AKOLA', 'TQ. DIST. AKOLA', 1, 2, 25, 24, 444002, '07242426278', '', '', '', '', '', 'mgr_akl@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y24', NULL, NULL, 0, 0, '', 0, 444, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '23'),
(26, '102', 'NANDED', '', '', 'KALAS BUILDING, OPP. PALEKAR PETROL PUMP', 'V.I.P. ROAD, VISAVA NAGAR, NANDED', 'TQ.DIST. NANDED ', 1, 2, 26, 25, 431601, '2462256047', '', '', '', '', '', 'mgr_nan@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y28', NULL, NULL, 0, 0, '', 0, 431, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '28'),
(27, '002', 'GONDIA', '', '', 'NEAR HALWAI HOTEL ASSOCIATION,', 'SHREE TALKIES ROAD GONDIA', 'TQ.DIST. GONDIA', 1, 2, 27, 26, 441601, '07182230850', '', '', '', '', '', 'mgr_gon@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y29', NULL, NULL, 0, 0, '', 0, 441, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '29'),
(28, '202', 'WASHIM', '', '', 'BAKLIWAL TOWERS, OPP. STAT BANK OF INDIA', 'AKOLANAKA ROAD, WASHIM', 'TQ. DIST. WASHIM', 1, 2, 28, 27, 444505, '07252231227', '', '', '', '', '', 'mgr_was@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y30', NULL, NULL, 0, 0, '', 0, 444, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '30'),
(29, '081', 'AURANGABAD', '', '', 'CTS 15308/ 15, PLOT NO. 68', 'SARANG CO-OP. SOCIETY, G. M. MANDIR CHOWK', 'GARKHEDA, AURANGABAD', 1, 2, 29, 28, 431001, '02402453550', '', '', '', '', '', 'mgr_aur@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y31', NULL, NULL, 0, 0, '', 0, 431, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '31'),
(30, '052', 'JALNA', '', '', 'ASHA ARCADE, GROUND FLOOR, CTS NO. 4010', 'DURGAMATA MANDIR ROAD JALNA', 'TQ.DIST. JALNA', 1, 2, 30, 29, 431203, '02482241184', '', '', '', '', '', 'mgr_jal@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y32', NULL, NULL, 0, 0, '', 0, 431, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '32'),
(31, '002', 'KOTHRUD PUNE', '', '', 'KUMBARE HIGHTS, VIJAY COMMERCIAL COMPLEX,', 'RAJLAXMI HALL BUILDING, NEW D. P. ROAD', 'PUNE', 1, 2, 31, 30, 411038, '02025380160', '', '', '', '', '', 'mgr_pun@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y33', NULL, NULL, 0, 0, '', 0, 411, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '33'),
(32, '001', 'AHMEDNAGAR', '', '', 'KUKREJA COMPLEX, PREMDAN CHOWK,', 'BESIDE BIG BAZAR, SAWEDI ROAD, ', 'AHMEDNAGAR', 1, 2, 32, 31, 414001, '02412427112', '', '', '', '', '', 'mgr_ahe@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y34', NULL, NULL, 0, 0, '', 0, 414, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '34'),
(33, '152', 'HINGANGHAT', '', '', 'SHARMA BUILDING, OLD POST OFFICE ROAD,', 'NEHARU WARD, KARANJA CHOWK, HIGANGHAT', 'DIST. WARDHA', 1, 2, 33, 32, 442301, '07153245546', '', '', '', '', '', 'mgr_hin@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y35', NULL, NULL, 0, 0, '', 0, 442, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '35'),
(34, '509', 'PANDHARKAWADA', '', '', 'PATKIS BUILDING, MAIN ROAD, PANDHARKAWADA', 'TQ. KELAPUR, DIST. YAVATMAL', '', 1, 2, 11, 11, 445302, '07235227190', '', '', '', '', '', 'mgr_pkd@yavatmalurbanbank.com', '', NULL, 'IBKL0041Y11', NULL, NULL, 0, 0, '', 0, 445, 'ATM, RTGS/NEFT, LOCKER, BILL PAYMENT', '10.45 AM TO 3:00 PM & 3:30 TO 5.00 PM', '2ND & 4TH SAT. HOLIDAY', 'HOLIDAY', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_citymaster`
--

CREATE TABLE IF NOT EXISTS `tb_citymaster` (
  `city_id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `city_code` varchar(7) NOT NULL,
  `city_place` varchar(30) NOT NULL,
  `city_name_al` varchar(4) NOT NULL,
  `country_id` int(200) NOT NULL,
  `state_id` int(200) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tb_citymaster`
--

INSERT INTO `tb_citymaster` (`city_id`, `city_code`, `city_place`, `city_name_al`, `country_id`, `state_id`, `is_delete`) VALUES
(001, 'AMR001', 'AMRAVATI', 'AMR', 1, 2, 0),
(002, 'YAV001', 'YAVATMAL', 'YAV', 1, 2, 1),
(003, 'PAT001', 'PATANBORI', 'PAT', 1, 2, 0),
(004, 'ARN001', 'ARNI', 'ARN', 1, 2, 0),
(005, 'WAN001', 'WANI', 'WAN', 1, 2, 0),
(006, 'UMA001', 'UMARKHED', 'UMA', 1, 2, 0),
(007, 'DIG001', 'DIGRAS', 'DIG', 1, 2, 0),
(008, 'NER001', 'NER', 'NER', 1, 2, 0),
(009, 'GHA001', 'GHATANJI', 'GHA', 1, 2, 0),
(010, 'DHA001', 'DHANKI', 'DHA', 1, 2, 0),
(011, 'PAN001', 'PANDHARKAWADA', 'PAN', 1, 2, 0),
(012, 'DAR001', 'DARWHA', 'DAR', 1, 2, 0),
(013, 'RAL001', 'RALEGAON', 'RAL', 1, 2, 0),
(014, 'KAL001', 'KALAMB', 'KAL', 1, 2, 0),
(015, 'PUS001', 'PUSAD', 'PUS', 1, 2, 0),
(016, 'VEE001', 'VEER SAWARKAR', 'VEE', 1, 2, 0),
(017, 'BAB001', 'BABHULGAON', 'BAB', 1, 2, 0),
(018, 'WAD002', 'WADGAON', 'YAV', 1, 2, 0),
(019, 'CHA001', 'CHANDRAPUR', 'CHA', 1, 2, 0),
(020, 'AMR002', 'AMRAVATI', 'AMR', 1, 2, 0),
(021, 'GAD001', 'GADCHANDUR', 'GAD', 1, 2, 0),
(022, 'BHA001', 'BHADRAWATI', 'BHA', 1, 2, 0),
(023, 'NAG001', 'NAGPUR', 'NAG', 1, 2, 0),
(024, 'NAG002', 'NAGPUR-', 'NAG', 1, 2, 0),
(025, 'AKO001', 'AKOLA', 'AKO', 1, 2, 0),
(026, 'NAN001', 'NANDED', 'NAN', 1, 2, 0),
(027, 'GON001', 'GONDIA', 'GON', 1, 2, 0),
(028, 'WAS001', 'WASHIM', 'WAS', 1, 2, 0),
(029, 'AUR001', 'AURANGABAD', 'AUR', 1, 2, 0),
(030, 'JAL001', 'JALNA', 'JAL', 1, 2, 0),
(031, 'KOT001', 'KOTHRUD PUNE', 'KOT', 1, 2, 0),
(032, 'AHM001', 'AHMEDNAGAR', 'AHM', 1, 2, 0),
(033, 'HIN001', 'HINGANGHAT', 'HIN', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_countrymaster`
--

CREATE TABLE IF NOT EXISTS `tb_countrymaster` (
  `country_id` int(250) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `country_isdelete` int(2) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_countrymaster`
--

INSERT INTO `tb_countrymaster` (`country_id`, `country_name`, `country_code`, `country_isdelete`) VALUES
(1, 'INDIA', 'IND', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_adminpasswords`
--

CREATE TABLE IF NOT EXISTS `tb_cps_adminpasswords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
(36, 0, 7113, '2016-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_chequeseries`
--

CREATE TABLE IF NOT EXISTS `tb_cps_chequeseries` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_transationcode` int(2) NOT NULL,
  `series_branchcode` int(3) NOT NULL,
  `serise_branchcode_branch` int(11) NOT NULL,
  `series_from` int(6) unsigned zerofill NOT NULL,
  `series_to` int(6) unsigned zerofill NOT NULL,
  `series_lastno` int(6) unsigned zerofill NOT NULL,
  `serise_Bank` int(3) NOT NULL,
  `branch_sub_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_cps_chequeseries`
--

INSERT INTO `tb_cps_chequeseries` (`series_id`, `series_transationcode`, `series_branchcode`, `serise_branchcode_branch`, `series_from`, `series_to`, `series_lastno`, `serise_Bank`, `branch_sub_code`) VALUES
(1, 10, 1, 18, 400000, 500000, 401930, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_grouppermissions`
--

CREATE TABLE IF NOT EXISTS `tb_cps_grouppermissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `page_accessible` varchar(150) NOT NULL,
  `page_read` varchar(2) NOT NULL,
  `page_write` varchar(2) NOT NULL,
  `page_edit` varchar(2) NOT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tb_cps_grouppermissions`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_groups`
--

CREATE TABLE IF NOT EXISTS `tb_cps_groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tb_cps_groups`
--

INSERT INTO `tb_cps_groups` (`group_id`, `group_name`, `group_createddate`) VALUES
(30, 'ADMINISTRATOR', '2013-02-10 23:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_halfdays`
--

CREATE TABLE IF NOT EXISTS `tb_cps_halfdays` (
  `branch_halfday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_halfday_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=57 ;

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

CREATE TABLE IF NOT EXISTS `tb_cps_holidays` (
  `branch_holiday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_holiday_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=74 ;

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

CREATE TABLE IF NOT EXISTS `tb_cps_mapbankfields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(50) NOT NULL,
  `bank_field_name` varchar(50) NOT NULL,
  `field_min_length` int(11) NOT NULL,
  `field_max_length` int(11) NOT NULL,
  `bank_field_length` int(11) NOT NULL,
  `field_data_type` varchar(50) NOT NULL,
  `field_format` varchar(50) NOT NULL,
  PRIMARY KEY (`field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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

CREATE TABLE IF NOT EXISTS `tb_cps_nonworkingdays` (
  `branch_nonworkingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`branch_nonworkingday_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_cps_nonworkingdays`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_reprintque`
--

CREATE TABLE IF NOT EXISTS `tb_cps_reprintque` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(3) NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_reprint_approved` int(1) NOT NULL DEFAULT '0',
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_cps_reprintque`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_settings`
--

CREATE TABLE IF NOT EXISTS `tb_cps_settings` (
  `inputfolderpath` varchar(100) NOT NULL,
  `archivefolderpath` varchar(50) NOT NULL,
  `inputfileformat` varchar(20) NOT NULL,
  `inputfiledelimiter` varchar(15) NOT NULL,
  `outputfolderpath` varchar(100) NOT NULL,
  `outputfileformat` varchar(20) NOT NULL,
  `outputfiledelimiter` varchar(15) NOT NULL,
  `typeofprinter` varchar(20) NOT NULL,
  `printermodel` int(11) NOT NULL,
  `chk_taken_from` int(1) NOT NULL,
  `chk_no_from` int(6) unsigned zerofill NOT NULL,
  `chk_no_to` int(6) unsigned zerofill NOT NULL,
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
  `license_period` int(2) NOT NULL,
  `license_end_date` date NOT NULL,
  `license_no_of_users` int(5) NOT NULL,
  `license_cheque_leaves` int(250) NOT NULL,
  `license_users_leaves` int(1) NOT NULL,
  `license_users_leaves_value` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cps_settings`
--

INSERT INTO `tb_cps_settings` (`inputfolderpath`, `archivefolderpath`, `inputfileformat`, `inputfiledelimiter`, `outputfolderpath`, `outputfileformat`, `outputfiledelimiter`, `typeofprinter`, `printermodel`, `chk_taken_from`, `chk_no_from`, `chk_no_to`, `nooffailedpasswordattempt`, `password_expiry`, `homescreen_text`, `poweredby`, `banklogo`, `desktop_image`, `chq_Image`, `country`, `help_employeeid`, `help_helplineno1`, `help_emailid`, `autolockminutes`, `help_contactperson`, `help_helplineno2`, `license_type`, `license_install_date`, `license_period`, `license_end_date`, `license_no_of_users`, `license_cheque_leaves`, `license_users_leaves`, `license_users_leaves_value`) VALUES
('', 'uploads/', 'Excel', '', '', 'Excel', '', '', 0, 0, 000000, 000000, 9, 365, 'AMRAVATI ZILLA MAHILA SAHAKARI BANL LTD., AMRAVATI', 'DevHarsh Infotech Pvt Ltd', 'thane logo.jpg', 'Penguins.jpg', '', '', '', '', '', 360, '', '', '', '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_transactioncodes`
--

CREATE TABLE IF NOT EXISTS `tb_cps_transactioncodes` (
  `transactioncode_id` int(11) NOT NULL AUTO_INCREMENT,
  `transactioncode` int(2) NOT NULL,
  `transactioncodedescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `transactionstatus` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`transactioncode_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `tb_cps_weekdays` (
  `branch_workingday_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `monday` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tuesday` tinyint(4) NOT NULL DEFAULT '0',
  `wednesday` tinyint(4) NOT NULL DEFAULT '0',
  `thursday` tinyint(4) NOT NULL DEFAULT '0',
  `friday` tinyint(4) NOT NULL DEFAULT '0',
  `saturday` tinyint(4) NOT NULL DEFAULT '0',
  `sunday` tinyint(4) NOT NULL DEFAULT '0',
  `opening_time` varchar(7) NOT NULL,
  `closing_time` varchar(7) NOT NULL,
  PRIMARY KEY (`branch_workingday_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ucs2 AUTO_INCREMENT=58 ;

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

CREATE TABLE IF NOT EXISTS `tb_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_short_name` varchar(30) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_acc_no` varchar(15) NOT NULL,
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `tb_manual_print` (
  `mp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `mp_AccountHolder_Id` int(11) NOT NULL,
  `mp_BookSize` int(4) NOT NULL,
  `mp_NoOfBooks` int(4) NOT NULL,
  `mp_Chk_From` int(7) NOT NULL,
  `mp_Chk_To` int(7) NOT NULL,
  PRIMARY KEY (`mp_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_manual_print`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_pending_print_req`
--

CREATE TABLE IF NOT EXISTS `tb_pending_print_req` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_isprint` int(1) NOT NULL DEFAULT '0',
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tb_pending_print_req`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_printadmin`
--

CREATE TABLE IF NOT EXISTS `tb_printadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(3) NOT NULL,
  `incorrect_attempt` int(11) NOT NULL,
  `password_status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `is_temp_password` int(11) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tb_printadmin`
--

INSERT INTO `tb_printadmin` (`username`, `password`, `lastlogintime`, `adminid`, `group_id`, `incorrect_attempt`, `password_status`, `user_type`, `userid`, `create_date`, `is_temp_password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '2012-04-21 00:00:00', 1, 0, 0, 1, 0, 'admin', '2022-08-14', 1),
('adminreprint', 'e10adc3949ba59abbe56e057f20f883e', '2014-02-05 00:00:00', 15, 0, 0, 1, 1, 'adminreprint', '2022-08-14', 1),
('reprint', '21232f297a57a5a743894a0e4a801fc3', '2015-05-31 00:00:00', 16, 0, 0, 1, 1, 'reprint', '2022-08-14', 1),
('reprint1', '0192023a7bbd73250516f069df18b500', '2015-02-14 00:00:00', 17, 0, 0, 1, 1, 'reprint1', '2022-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_printque`
--

CREATE TABLE IF NOT EXISTS `tb_printque` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tb_printque`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_print_req_collection`
--

CREATE TABLE IF NOT EXISTS `tb_print_req_collection` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) DEFAULT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_is_reprint` int(1) NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) DEFAULT NULL,
  `cps_bsr_code` varchar(6) DEFAULT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=574 ;

--
-- Dumping data for table `tb_print_req_collection`
--

INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(1, 00059518, 445810002, 002, '01023030291', 'BHOYAR SANTOSH NAMDEVRAO                     ', 01, 'N', 015, 10, '', '', '', '', '', '', 'DEHANKAR LAY OUT', 'NEAR RENUKA MANGALAM', '', '', '', 'YAVATMAL      ', '', '', '', 445001, '', '', '', '', 249491, 249505, 030291, '2023-06-07', 1, 0, '', '', '', '', NULL, NULL),
(2, 00059517, 442810501, 501, '20023008708', 'GOKHARE KU.TANVI PRASHANT', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAIN ROAD NEAR BUS STOP', 'TALUKA KORPANA', 'DIST CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 062886, 062900, 008708, '2023-06-07', 1, 0, '', '', '', '', NULL, NULL),
(3, 00059490, 445810510, 510, '11173000140', 'JAI ELECTRICALS                              ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'GOLIBAR CHOWK DUBE COMPLEX', 'DARWHA', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 146711, 146770, 000140, '2023-06-07', 1, 0, '', '', '', '', NULL, NULL),
(4, 00059491, 445810510, 510, '11021001350', 'AGM CONSTRUCTION COMPANY', 01, 'N', 060, 11, '', '', '', '', '', '', 'HOUSE NO 118 BALAJI NAGAR', 'DARWHA TQ DARWHA', 'DIST YAVATMAL', '', '', 'DARWHA', '', '', '', 445002, '', '', '', '', 075341, 075400, 001350, '2023-06-07', 1, 0, '', '', '', '', NULL, NULL),
(5, 00059486, 442810102, 102, '18021001466', 'KISHOR READYMADE STORES', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'KISHOR REDYMADE STORES', 'GOAL BAZAR BAZAR WAR          ', 'D                      ', '', '', ' CHANDRAPUR   ', '', '', '', 442402, '', '', '', '', 145606, 145665, 001466, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(6, 00059487, 442810102, 102, '18021001575', 'NEW SAI SHOES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NAGAR BHAVAN NEAR BAZAR WARD', 'CHANDRAPUR', '', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 145666, 145725, 001575, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(7, 00059516, 431532081, 081, '31021000245', 'LAXMI MEDICAL AND GENERAL STORES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SHOP NO 01 GROUND FLOOR ', 'MILKAT NO B0041003', 'TENEMENT NO MIG AWISHKAR COLON', '', '', 'AURANGABAD', '', '', '', 431001, '', '', '', '', 046941, 047000, 000245, '2023-06-08', 1, 0, '', '', '', '', '31', NULL),
(8, 00059515, 440800003, 003, '25023261033', 'JAIN PRAVEEN BHAGWATILAL LALAWAT             ', 01, 'N', 030, 10, '', '', '', '', '', '', 'PLOT 274 NR DAY TO DAY', 'HALDIRAM SUPER MARKET', 'DESHPANDE LAYOUT WARDHAMAN NGR', '', '', 'NAGPUR', '', '', '', 440035, '', '', '', '', 018911, 018940, 261033, '2023-06-08', 1, 0, '', '', '', '', '25', NULL),
(9, 00059514, 441810002, 002, '29021000215', 'SHREE GURUNANAK TEL BHANDAR', 01, 'N', 045, 11, '', '', '', 'Proprietor', '', '', 'SHRI GURUNANAK TEL BHANDAR', 'AT GOUSHALA WARD', 'OLD BUS STAND ROAD', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 030116, 030160, 000215, '2023-06-08', 1, 0, '', '', '', '', '29', NULL),
(10, 00059513, 445810004, 004, '17023008570', 'MANDHAN OMPRAKASH BHAGWANDAS', 01, 'N', 015, 10, '', 'MANDHAN MAHESH BHAGWANDAS', '', '', '', '', 'VAIDYA NAGAR', 'NEAR KAWAR NAGAR', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068641, 068655, 008570, '2023-06-08', 1, 0, '', '', '', '', '17', NULL),
(11, 00059512, 445810502, 502, '03023010030', 'SANGANWAR SANJAY BANDU', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 1 BAHIRAM NAGAR', 'ARNI DIST YAVATMAL', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 052941, 052955, 010030, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(12, 00059506, 445810002, 002, '01023254707', 'BHOOT ASHISH RAMESHCHAND', 01, 'N', 015, 10, '', '', '', '', '', '', 'GANGADHAN SAI MANDIR ROAD BAJO', 'RIYA NAGAR YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249461, 249475, 254707, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(13, 00059508, 445810002, 002, '01023019073', 'CHAVHAN AJAB BADRASING                       ', 01, 'N', 015, 10, '', 'CHAVHAN USHATAI AJABRAO', '', '', '', '', 'AT MALMASOLA', 'PO ARJUNA', 'DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445105, '', '', '', '', 249476, 249490, 019073, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(14, 00059507, 445810002, 002, '01177101407', 'SHIRBHATE KISHOR BHAGWANSA                   ', 01, 'N', 030, 13, '', '', '', '', '', '', 'ATHAVADI BAZAR', 'JAIBHARAT CHOWK ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026681, 026710, 101407, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(15, 00059511, 445810002, 002, '01021003011', 'HUSSANI HARDWARE AND PAINTS', 01, 'N', 030, 11, '', '', '', '.', '', '', 'SHOP NO 1 GAJANAN ', 'NAGAR WAGHAPUR ROAD', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332301, 332330, 003011, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(16, 00059509, 445810002, 002, '01170000909', 'BHAVE SHRIKANT MADHUKARRAO', 01, 'N', 060, 13, '', '', '', '', '', '', ' SHIRE LAY OUT', 'YAVATMAL YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270176, 270235, 000909, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(17, 00059510, 445810002, 002, '01177100277', 'GLOB ADVERTISING FADNAVIS PARIMAL VIJAYRAO', 01, 'N', 045, 13, '', '', '', 'Proprietor', '', '', 'SHROTRI HOSPITAL TILKWADI', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026711, 026755, 100277, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(18, 00059503, 445810503, 503, '04023014669', 'WANDHARE MANGALA ARVIND 04 41220', 01, 'N', 015, 10, '', '', '', '', '', '', 'VITHALWADI NEAR SCHOOL ', 'NO 7 WANI TA WANI', 'DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119091, 119105, 014669, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(19, 00059504, 445810503, 503, '04023001239', 'URKUDE SHALIK MAHADEVRAO', 01, 'N', 030, 10, '', '', '', '', '', '', 'SHIVAJI CHOUK', 'WANI TA WANI DIST', 'YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119106, 119135, 001239, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(20, 00059505, 445810503, 503, '04173000696', 'LAXMI KRUSHI KENDRA WANI', 01, 'N', 060, 13, '', '', '', '.', '', '', 'SHIRPUR ROAD NEAR SAMAJ MANDI ', 'WARD NO1', 'WAGHDARA WANI', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 154551, 154610, 000696, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(21, 00059500, 445810003, 003, '15023006583', 'JOJARE ANIL RAMCHANDRA                       ', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 12 HOUSE NO 108', 'NEAR Z P SCHOOL', 'GANDHI MAGAR', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078521, 078535, 006583, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(22, 00059501, 445810003, 003, '15023009155', 'GADHAVE SHARVARI SARANG', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAIN ROAD GANDHI CHOWK WANI PU', 'RA YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078536, 078550, 009155, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(23, 00059502, 445810003, 003, '15023009055', 'RANGARI SHATIL RAMDAS', 01, 'N', 015, 10, '', '', '', '', '', '', 'TALAV FAIL ', 'PANCHASHIL CHOWK', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078551, 078565, 009055, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(24, 00059498, 444812101, 101, '19021001030', 'SHRI VYANKATESH PHARMACEUTICALS', 01, 'N', 030, 11, '', '', '', '', '', '', 'PLOT NO 22 YOGESHWAR NEW', 'SWASTIK NAGAR NEAR HANUMAN', 'MANDIR BADNERA ROAD AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444607, '', '', '', '', 127596, 127625, 001030, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(25, 00059497, 444812101, 101, '19023004036', 'BUDH ARCHANA BHOLANATH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST MAISPURE TQ BHATKULI', 'DIST AMRAVATI', '', '', '', 'MAISPURE', '', '', '', 444601, '', '', '', '', 083451, 083465, 004036, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(26, 00059499, 444812101, 101, '19023009480', 'KANSE ADITYA RAJENDRA', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 1 YENAS TQ NANDGAON', 'KHANDESHWAR DIST AMRAVATI', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444708, '', '', '', '', 083466, 083480, 009480, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(27, 00059495, 445810511, 511, '12021000224', 'MS OM SAI BOARWELL PRO', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'AT PO TQ RALEGAON', 'DIS YAVATMAL', '', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 060011, 060070, 000224, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(28, 00059496, 445810511, 511, '12023008315', 'WANKHEDE PRASHANT NANAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHIVALAY NAGAR RALEGAON', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050026, 050040, 008315, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(29, 00059492, 445810506, 506, '07021000831', 'RAKHADE AJAY RAJABHAU ALIAS MAHESHWAR', 01, 'N', 060, 11, '', '', '', '', '', '', 'JAMA MASJID ROAD', 'WANIPURA WARD NO 09', 'NER DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091681, 091740, 000831, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(30, 00059493, 445810506, 506, '07173000107', 'JAI AMBE HARDWARE', 01, 'N', 060, 13, '', '', '', '', '', '', 'NERPARSOPANT', 'AT POST NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 044926, 044985, 000107, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(31, 00059494, 445810506, 506, '07023007629', 'WASNIK SURAJ VISHWANATH', 01, 'N', 015, 10, '', '', '', '', '', '', 'ASHOK NAGAR', 'NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047476, 047490, 007629, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(32, 00059488, 445810509, 509, '10173000158', 'ATUL AGENCIES', 01, 'N', 030, 13, '', '', '', 'Proprietor', '', '', 'SATYANARAYAN MANDIR WARD', '', '', '', '', 'PKD', '', '', '', 445302, '', '', '', '', 046431, 046460, 000158, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(33, 00059489, 445810509, 509, '10023008400', 'THAKARE NAGESHWAR MAROTRAO', 01, 'N', 060, 10, '', '', '', '', '', '', 'AT PO TQ AKHADA WARDPANDHARKAW', 'DI YAVATMAL', '', '', '', 'PANDHARKAVDA', '', '', '', 445302, '', '', '', '', 064191, 064250, 008400, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(34, 00059484, 445810508, 508, '09021000348', 'SHRADDHA MEDICAL AND GENRAL STORES', 01, 'N', 030, 11, '', '', '', '.', '', '', 'AT POST DHANKI TQ UMARKHED', 'TQ UMARKHED', 'DIST YAVATMAL', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 034226, 034255, 000348, '2023-06-08', 1, 0, '', '', '', '', '09', NULL),
(35, 00059485, 445810508, 508, '09173000174', 'NILESH KRUSHI AGENCIES PRO SAMEER N KODG', 01, 'N', 030, 13, '', '', '', 'Proprietor', '', '', 'AT POST DHANKI TQ UKD', 'DIST YAVATMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 073456, 073485, 000174, '2023-06-08', 1, 0, '', '', '', '', '09', NULL),
(36, 00059482, 445810507, 507, '08023013007', 'JIVTODE CHARULATA DHYNANESHWAR', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT JARUR POST RAJURWADI', 'TQ GHATANJI DIST YAV', 'ATMAL', '', '', 'JARUR', '', '', '', 445301, '', '', '', '', 081896, 081925, 013007, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(37, 00059483, 445810507, 507, '08023020120', 'KADAM PRIYANKA PRAVIN', 01, 'N', 030, 10, '', '', '', '', '', '', 'JALARAM WARD GHATANJI', 'TA GHATANJI', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 081926, 081955, 020120, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(38, 00059481, 445810507, 507, '08021000698', 'SAHAYOG MULTISTATE CREDIT CO OP SOC', 01, 'N', 060, 11, '', 'PADHYE PAWAN PRAMODRAO', 'SAWANT DATTATRYA SHYAMRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'AABAD BHAVAN TAGORE CHOUK WANI', 'TQ WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 074026, 074085, 000698, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(39, 00059479, 445810504, 504, '05173000254', 'SHREE KRUPA MEDICAL                          ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT PO PALASAPUR TQ HIMAYATNAGA', 'AT PO PALASAPUR TQ HIMAYATNAGA', 'DIST NANDED', '', '', 'PALASAPUR', '', '', '', 431802, '', '', '', '', 132181, 132240, 000254, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(40, 00059480, 445810504, 504, '05021000343', 'SONA AGENCIES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'PRO MO SAJIDULLA MO SANAULLA J', 'AHAGIRDARUMARKHED', 'AZAD WARD UMARKHED', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 091231, 091290, 000343, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(41, 00059477, 445810505, 505, '06170000128', 'TUNDALWAR SAKHRAM VAMANRAO', 01, 'N', 060, 13, '', '', '', '', '', '', 'HOLTEK PURA DIGRAS', 'TQ DIGRAS', 'DIST YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 020926, 020985, 000128, '2023-06-08', 1, 0, '', '', '', '', '06', NULL),
(42, 00059478, 445810505, 505, '06021000038', 'SAGAR KRUSHI KENDRA DIGRAS                   ', 01, 'N', 060, 11, '', 'BANGINWAR RAMDAS VASANTRAO                   ', '', 'Proprietor', '', '', 'ARNI ROAD DIGRAS', '', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068281, 068340, 000038, '2023-06-08', 1, 0, '', '', '', '', '06', NULL),
(43, 00059476, 445810505, 505, '06023006679', 'SHIRFULE PANDURANG UKANDA', 01, 'N', 030, 10, '', '', '', '', '', '', 'UKHALI PO DEURWADA', 'TA DIGRAS', '', '', '', 'DIGRAS', '', '', '', 445204, '', '', '', '', 039076, 039105, 006679, '2023-06-08', 1, 0, '', '', '', '', '06', NULL),
(44, 00059654, 442810152, 152, '35023002415', 'VALKE PADMAKAR MAROTRAV', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT TILAK WARD HINGANGHAT ', 'POST TQ HINGHAT DIST WARDHA', '', '', '', 'HINGANGHAT ', '', '', '', 442301, '', '', '', '', 043706, 043720, 002415, '2023-06-08', 1, 0, '', '', '', '', '35', NULL),
(45, 00059652, 444810202, 202, '30021000205', 'TECTICON INDIA INFRA AND DEVELOPERS PRIVATE L', 01, 'N', 060, 11, '', 'HEDA KUNAL ASHOK', 'HEDA DILIP SHANKARLAL', 'Authorised Signatory', 'Authorised Signatory', '', 'PLOT NO 4 NEAR DR DIOFODE', 'NEAR DR DOIFODE HOSPITAL', 'HINGOLI ROAD WASHIM', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 055816, 055875, 000205, '2023-06-08', 1, 0, '', '', '', '', '30', NULL),
(46, 00059653, 444810202, 202, '30023001555', 'HEDA ROHIT ASHOK', 01, 'N', 060, 10, '', '', '', '', '', '', 'GURUWAR BAZAR WASHIM', 'SHIV CHOWK ', '', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 013851, 013910, 001555, '2023-06-08', 1, 0, '', '', '', '', '30', NULL),
(47, 00059649, 442810501, 501, '20021000005', 'SUBHASH KIRANA STORES                        ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'MAIN ROAD GADCHANDUR', 'TAL KORPANA DIST CHA', 'NDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 060181, 060240, 000005, '2023-06-08', 1, 0, '', '', '', '', '20', NULL),
(48, 00059650, 442810501, 501, '20021000583', 'CITY POINT BEER', 01, 'N', 060, 11, '', 'SHINGADE BALWANT KASHINATH', '', 'Proprietor', '', '', ' WARD NO 5 NEAR POST OFFICE', 'GADCHANDUR', '', '', '', 'GADCHANDUR    ', '', '', '', 442908, '', '', '', '', 060241, 060300, 000583, '2023-06-08', 1, 0, '', '', '', '', '20', NULL),
(49, 00059651, 442810501, 501, '20021000584', 'GODAVARI URBAN MULTISTATE CR CO OP SOCIETY LT', 01, 'N', 060, 11, '', 'CHETAN SURESHRAO DUDHE', 'PATIL RAJSHRI HEMANT', 'Authorised Signatory', 'Authorised Signatory', '', 'SURYAWANSHI COMPLEX', 'TARODA NAKA NANDED', '', '', '', 'NANDED', '', '', '', 431605, '', '', '', '', 060301, 060360, 000584, '2023-06-08', 1, 0, '', '', '', '', '20', NULL),
(50, 00059641, 445810002, 002, '01023010742', 'GAJBE CHANDRAKANT VITHALRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'VITTHALRAO GAJBE PARIJAT SOC', 'WADGAON ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249506, 249520, 010742, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(51, 00059643, 445810002, 002, '01023001769', 'AMDEKAR DHANANJAY KRISHNARAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'BALAJI SOCIETY', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249521, 249535, 001769, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(52, 00059644, 445810002, 002, '01023259785', 'RAUT DINESH RAMKRUSHNA', 01, 'N', 015, 10, '', '', '', '', '', '', '73 PRABHAT SOC WADGOAN ROAD', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249536, 249550, 259785, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(53, 00059642, 445810002, 002, '01170000617', 'SAI CONSTRUCTIONS', 01, 'N', 060, 13, '', '', '', '', '', '', 'S H WADGHWANI S P WADHAWANI', 'WADHWANI COMPLEX ', 'NETAJI CHOWK', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270236, 270295, 000617, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(54, 00059645, 445810002, 002, '01173000273', 'JAIN AGRICULTURE AGENCIES  YAVATMAL', 01, 'N', 060, 13, '', 'DARDA NARENDRA TIKAMCHAND                    ', '', 'Proprietor', '', '', 'SHOP NO 3 NEAR KOTHARI MARKET', 'NEAR KOTHARI MARKET', 'DATTA CHOWK', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 206776, 206835, 000273, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(55, 00059647, 445810002, 002, '01170000062', 'SOLANKE VISHNUPANT PURUSHOTTAMSIHA', 01, 'N', 060, 13, '', '', '', '', '', '', 'LAXMI NAGAR PRATHAMESH BUILDIN', 'JIRAPURE LAYOUT', 'OLD UMARSARA YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270326, 270385, 000062, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(56, 00059646, 445810002, 002, '01021000367', 'GIRIRAJ MEDICALS', 01, 'N', 045, 11, '', '', '', '', '', '', 'DATTA CHOWK YAVATMAL', '', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332331, 332375, 000367, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(57, 00059648, 445810002, 002, '01023258330', 'GADEKAR ARVIND VASANTRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT COTTON MARKET', 'VANJARI FAIL YAVATMAL', 'COTTON MARKET VANJARI', '', '', 'FAIL YAVATMAL', '', '', '', 445001, '', '', '', '', 249551, 249565, 258330, '2023-06-08', 1, 0, '', '', '', '', '01', NULL),
(58, 00059638, 445810514, 514, '16023000001', 'VARBHE SURESH DHNYSHWARRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'KRUSHICHAYA TILAKWADI', 'NEAR DR UMREDKAR YAVATMAL ', 'YAVATMAL ', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 045411, 045425, 000001, '2023-06-08', 1, 0, '', '', '', '', '16', NULL),
(59, 00059640, 445810514, 514, '16023000968', 'KALE PARAG DHYANESHWAER', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO GANORI TQ BABHULGAON', 'DIST YAVATMAL', '', '', '', 'GANORI', '', '', '', 445101, '', '', '', '', 045456, 045470, 000968, '2023-06-08', 1, 0, '', '', '', '', '16', NULL),
(60, 00059639, 445810514, 514, '16023003794', 'JAISWAL DILIP GANESHLAL', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT YAVALI PO ASEGAON', 'POST ASEGAONDEVI', 'TQ BABHULGAON DIST YAVATMAL', '', '', 'YAVALI', '', '', '', 445101, '', '', '', '', 045426, 045455, 003794, '2023-06-08', 1, 0, '', '', '', '', '16', NULL),
(61, 00059637, 440800003, 003, '25023260093', 'BHISIKAR VISHWANATH KISNUJI 26 522', 01, 'N', 060, 10, '', 'BHISIKAR PUSHPA VISHWANATH', '', '', '', '', 'EB 2 2 R R CAT COLONY', 'INDORE INDORE CAT MADHYA', 'PRADESH ', '', '', 'INDORE', '', '', '', 452013, '', '', '', '', 018941, 019000, 260093, '2023-06-08', 1, 0, '', '', '', '', '25', NULL),
(62, 00059636, 441810002, 002, '29023000056', 'SOMANI ASHA OMPRAKASH', 01, 'N', 015, 10, '', 'SOMANI OMPRAKASH AMOLAKCHAND', '', '', '', '', 'JAISTHAMBHA CHOWK  ', 'NEAR SONALI ROAD WAYS', 'GONDIA', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 024936, 024950, 000056, '2023-06-08', 1, 0, '', '', '', '', '29', NULL),
(63, 00059628, 445810503, 503, '04023001960', 'YERNE RAVINDRA DAMODAR', 01, 'N', 045, 10, '', '', '', '', '', '', 'DWRARKA APPARMENT WANI', 'TA WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119136, 119180, 001960, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(64, 00059629, 445810503, 503, '04170000379', 'NILESH MEDICAL AND GENERAL STORES', 01, 'N', 045, 13, '', '', '', 'Proprietor', '', '', 'AT SHIRPUR HOUSE NO 783 WARD ', 'NO 1 WNI SHINDOLA ROAD SHIRPUR', 'TA WANI DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 056501, 056545, 000379, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(65, 00059632, 445810503, 503, '04173000660', 'ASHOK KIRANA BHANDAR', 01, 'N', 045, 13, '', '', '', '', '', '', 'WANI', '', '', '', '', '', '', '', '', 0, '', '', '', '', 154826, 154870, 000660, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(66, 00059630, 445810503, 503, '04170000314', 'JAGDAMBA IRRIGATION SERVICES.', 01, 'N', 060, 13, '', '', '', 'Proprietor', 'Proprietor', '', 'GURU NAGAR  VIRANI TALKIES ROA', 'D WANI  TA WANI  DIST ', 'YAVATMAL ', '', '', 'WANI.', '', '', '', 445304, '', '', '', '', 056701, 056760, 000314, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(67, 00059635, 445810503, 503, '04021001541', 'EKADANT MEDICAL STORES', 01, 'N', 060, 11, '', '', '', '', '', '', 'KALE LAY OUT BRAHMNI ROAD', 'NEAR VIVEKAND HIGHSCHOOL', 'TA WANI DI YAVATMAL', '', '', 'WANI      ', '', '', '', 445304, '', '', '', '', 165836, 165895, 001541, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(68, 00059631, 445810503, 503, '04023020926', 'KINAKE SADANAND RAMBHAU', 01, 'N', 015, 10, '', '', '', '', '', '', 'BHIM NAGAR WANI', 'TA WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119181, 119195, 020926, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(69, 00059633, 445810503, 503, '04023019119', 'BODHALE GEETA MAHADEV', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO GANESHPUR TA WANI', 'AT PO GANESHPUR TA WANI', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119196, 119210, 019119, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(70, 00059634, 445810503, 503, '04023015794', 'MALLURWAR GOPAL PURUSHOTTAM HUF', 01, 'N', 030, 10, '', '', '', '', '', '', 'RAVI NAGAR WARD NO 1', 'TA WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119211, 119240, 015794, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(71, 00059659, 445810503, 503, '04173000663', 'SHIVSHAKTI KRUSHI KENDRA KAYAR', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT MAIN ROAD HOUSE NO 787GALA', ' NO 3 KAYAR AT KAYAR TA WANI ', 'DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 154901, 154960, 000663, '2023-06-08', 1, 0, '', '', '', '', '04', NULL),
(72, 00059658, 445810511, 511, '12023000016', 'CHANDE MEGHSHYAM VINAYAK', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT CHHATRAPATI CHOWK WARD NO 5', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050131, 050145, 000016, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(73, 00059657, 445810506, 506, '07021001058', 'SANT GADGEBABA TRADERS', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SAVARKAR CHOUK WARD NO 8', 'AT POST TQ NER DIST YAVATMAL', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092041, 092100, 001058, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(74, 00059655, 445810004, 004, '17023001009', 'DESHMUKH RENUKADAS PUROSHTAMRAO', 01, 'N', 015, 10, '', 'DESHMUKH VARSHA RENUKADAS.', '', '', '', '', '19 WADGAON ROAD DEORAO PATIL', 'SCHOOL KALE LAY OUT WADGAON', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068656, 068670, 001009, '2023-06-08', 1, 0, '', '', '', '', '17', NULL),
(75, 00059656, 445810004, 004, '17170000183', 'VINIT REFLECTIVES', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'BALAJI SOCIETY', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 077936, 077995, 000183, '2023-06-08', 1, 0, '', '', '', '', '17', NULL),
(76, 00059626, 445810003, 003, '15173000018', 'SHREE OM ENTERPRISES', 01, 'N', 060, 13, '', '', '', '', '', '', 'PATRAKAR COLONY', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 105881, 105940, 000018, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(77, 00059627, 445810003, 003, '15021000757', 'CHANDAN VERITIES', 01, 'N', 060, 11, '', '', '', '.', '', '', '25 INDIRA GANDHI MARKET', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 124061, 124120, 000757, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(78, 00059625, 445810003, 003, '15023006544', 'MUNDHADA NANDA AJAYKUMARJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAJENDRA NAGAR ', 'DHAMANGAON ROAD ', 'NEAR TIMBAR BHAVAN', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078566, 078580, 006544, '2023-06-08', 1, 0, '', '', '', '', '15', NULL),
(79, 00059620, 440800002, 002, '22023005418', 'SHASTRI SWATI VIKAS', 01, 'N', 030, 10, '', '', '', '', '', '', 'PLOT NO 27 LIC COLONY', 'KHAMLA ROAD', '', '', '', 'NAGPUR ', '', '', '', 440015, '', '', '', '', 210471, 210500, 005418, '2023-06-08', 1, 0, '', '', '', '', '22', NULL),
(80, 00059621, 440800002, 002, '22023003123', 'PANDE PARIJAT MADHUSUDAN', 01, 'N', 030, 10, '', '', '', '', '', '', 'PLOT NO 308 FLAT NO 210', 'DEVANJALI APARTMENT  ', 'RESHIMBAG', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 210501, 210530, 003123, '2023-06-08', 1, 0, '', '', '', '', '22', NULL),
(81, 00059622, 440800002, 002, '22023003125', 'MUKEWAR SHRADHA SUNIL                        ', 01, 'N', 045, 10, '', 'PANCHBHAI SHWETA SWAPNIL', '', '', '', '', 'PLOT NO 64 NARENDRA SMRUTI ', 'WARDHA ROAD VIKAS NAGAR SAI ', 'SAI MANDIR MAGE NAGPUR ', '', '', 'NAGPUR', '', '', '', 440015, '', '', '', '', 210531, 210575, 003125, '2023-06-08', 1, 0, '', '', '', '', '22', NULL),
(82, 00059623, 440800002, 002, '22170000076', 'YERNE RAJU GAJANANRAO', 01, 'N', 060, 13, '', '', '', '', '', '', '37 MANISH NAGAR SOMALWADA', 'GRUH NIRMAN SOCIETY', 'NEAR RAILWAY CROSSING', '', '', 'NAGPUR', '', '', '', 440015, '', '', '', '', 006436, 006495, 000076, '2023-06-08', 1, 0, '', '', '', '', '22', NULL),
(83, 00059624, 440800002, 002, '22023007629', 'BORADKAR VAIBHAVI SHASHIKANT', 01, 'N', 015, 10, '', '', '', '', '', '', 'BLOCK NO 3 B GHAISAS', 'LAY OUT SURENDRA NAGAR ', 'NAGPUR ', '', '', 'NAGPUR', '', '', '', 440015, '', '', '', '', 210576, 210590, 007629, '2023-06-08', 1, 0, '', '', '', '', '22', NULL),
(84, 00059619, 431810102, 102, '28173000008', 'SHINDE TRADING COMPANY', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'NEW MONDHA MARKET', 'KAMITI SAMOR', 'NANDED', '', '', 'NANDED', '', '', '', 431602, '', '', '', '', 018976, 019035, 000008, '2023-06-08', 1, 0, '', '', '', '', '28', NULL),
(85, 00059618, 431810102, 102, '28023001786', 'KHANDARE SANTOSH PRALADHRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'INDIRA GANDHI WARD UMARKHED', 'MAHAGAON ROAD UMARKHED', '', '', '', 'UMARKHED ', '', '', '', 445206, '', '', '', '', 010836, 010850, 001786, '2023-06-08', 1, 0, '', '', '', '', '28', NULL),
(86, 00059613, 444812101, 101, '19021000339', 'SUBHASH MEDICAL STORES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'RAMA WASUDEO SANKUL', 'MUDHOLKAR PETH', 'BADNERA ROAD', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 127656, 127715, 000339, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(87, 00059616, 444812101, 101, '19021000842', 'R S COT FIBRE', 01, 'N', 060, 11, '', 'AHUJA SHANKARKUMAR MAHESHKUMAR', '', 'Proprietor', '', '', 'ITWARA BAZAR KADBI BAZAR', 'AMRAVATI', 'PROP SHANKAR MAHESHKUMAR AHUJA', '', '', 'AMRAVATI', '', '', '', 444603, '', '', '', '', 127716, 127775, 000842, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(88, 00059617, 444812101, 101, '19021000842', 'R S COT FIBRE', 01, 'N', 060, 11, '', 'AHUJA SHANKARKUMAR MAHESHKUMAR', '', 'Proprietor', '', '', 'ITWARA BAZAR KADBI BAZAR', 'AMRAVATI', 'PROP SHANKAR MAHESHKUMAR AHUJA', '', '', 'AMRAVATI', '', '', '', 444603, '', '', '', '', 127776, 127835, 000842, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(89, 00059614, 444812101, 101, '19023002440', 'BAKALE LATA WAMANRAO 19 11892', 01, 'N', 015, 10, '', '', '', '', '', '', 'SANTOSH BHUWAN GALLI NEAR', 'GANPATI MANDIR GADGE NAGAR', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 083481, 083495, 002440, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(90, 00059615, 444812101, 101, '19023005486', 'ADWEKAR GANGADHAR NATTHUJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'SANKET COLONY NEAR REKHA', 'COLONY VMV ROAD AMRAVATI', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444701, '', '', '', '', 083496, 083510, 005486, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(91, 00059612, 444812101, 101, '19021001024', 'SURANA AGRAWAL AND ASSOCIATES', 01, 'N', 030, 11, '', '', '', '', '', '', 'FLAT NO 2 PARAS APPARTMENT', 'DEORANKAR NAGAR AMRAVATI', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444605, '', '', '', '', 127626, 127655, 001024, '2023-06-08', 1, 0, '', '', '', '', '19', NULL),
(92, 00059610, 445810506, 506, '07021000987', 'RAHIL KHAN ZABIULLA KHAN', 01, 'N', 060, 11, '', '', '', '', '', '', 'AT POST KHIDKIPURA NER', 'TQ NER ', 'DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091981, 092040, 000987, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(93, 00059611, 445810506, 506, '07173000174', 'HOTEL SAKAR WINE BAR', 01, 'N', 060, 13, '', '', '', '.', '', '', 'FRONT OF AGRAWAL', 'PETROL PUMP NER    ', 'DIST YAVATMAL', '', '', 'NER               ', '', '', '', 445102, '', '', '', '', 044986, 045045, 000174, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(94, 00059609, 445810510, 510, '11023022976', 'MOH.AVESH ABDUL HAKIM', 01, 'N', 030, 10, '', '', '', '', '', '', 'ISLAM PURA ', 'GOLIBAR CHOUK', 'TQ DARWHA DIST YAVATMAL', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 094511, 094540, 022976, '2023-06-08', 1, 0, '', '', '', '', '11', NULL),
(95, 00059598, 445810511, 511, '12173000111', 'VINAY MEDICAL STORES', 01, 'N', 060, 13, '', '', '', '.', '', '', 'SHOP NO 06 and 07  WARD NO 06', 'MAIN ROAD  KRANTI CHOWK ', 'RALEGAON DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 057176, 057235, 000111, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(96, 00059599, 445810511, 511, '12021000486', 'SANTOSH MEDICAL STORES 12 9483', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR YTL  URBAN BANK', 'RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 060071, 060130, 000486, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(97, 00059600, 445810511, 511, '12177004909', 'YASH SANJAY MUTHA', 01, 'N', 060, 13, '', '', '', '', '', '', 'MAIN ROAD RALEGAON', 'RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 057056, 057115, 004909, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(98, 00059601, 445810511, 511, '12023002298', 'SECRETARY ISHWAR SHIKSHAN PRASARAK MAND.', 01, 'N', 015, 10, '', '', '', '', '', '', 'MATA NAGAR RALEGAON', 'RALEGAON', '', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050041, 050055, 002298, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(99, 00059603, 445810511, 511, '12023006470', 'PIMPARE MANGALA SURESH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT EKLARA PO DHOTRA', 'TQ RALEGAON', 'DIST YAVATMAL ', '', '', 'EKLARA', '', '', '', 445401, '', '', '', '', 050056, 050070, 006470, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(100, 00059604, 445810511, 511, '12023001883', 'UPARE SHRIKRUSHNA GANGARAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT MATA NAGAR WARD NO 6', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050071, 050085, 001883, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(101, 00059605, 445810511, 511, '12023008437', 'BHANDEKAR SATISH KAWADU', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT JAGJAI PO UNDARI', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445402, '', '', '', '', 050086, 050100, 008437, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(102, 00059607, 445810511, 511, '12023008438', 'ZADE VAIBHAV RAVINDRA', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT EKBURJI PO SAWANGI PERKA', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050101, 050115, 008438, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(103, 00059608, 445810511, 511, '12023007677', 'DODEWAR DEVIDAS GOVINDRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO SAWANGI TA RALEGAON', 'TA RALEGAON', 'DIST YAVATMAL', '', '', 'SAWANGI', '', '', '', 445402, '', '', '', '', 050116, 050130, 007677, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(104, 00059602, 445810511, 511, '12173000118', 'SAISHA MEDICAL STORES', 01, 'N', 060, 13, '', '', '', '.', '', '', 'UGEMUGE LAYOUT ralegaon', 'AT PO RALEGAON TQ RALEGAON', '', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 057236, 057295, 000118, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(105, 00059606, 445810511, 511, '12021000276', 'OM BUILDING MATERIAL SUPPLAYRS (S V JIDDEWAR)', 01, 'N', 030, 11, '', '', '', '.', '', '', 'AT POST SAWANGI  PERKA  ', 'QT RALEGAON DIST YAVATMAL', '', '', '', 'SAWANGI PERKA', '', '', '', 445402, '', '', '', '', 060131, 060160, 000276, '2023-06-08', 1, 0, '', '', '', '', '12', NULL),
(106, 00059579, 445810502, 502, '03173000088', 'KRUSHI VAIBHAV SEEDS AND FERTILIZERS PVT LTD', 01, 'N', 060, 13, '', 'CHINTAWAR DILIP DHONDOPANT 03 4729', 'NILAWAR ASHOK VISHWANATH.', 'Authorised Signatory', 'Authorised Signatory', '', 'MAIN ROAD OPP YAVATMAL URBAN', 'Arni', '', '', '', 'Dist. Yavatmal', '', '', '', 445103, '', '', '', '', 120411, 120470, 000088, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(107, 00059580, 445810502, 502, '03023061279', 'RATHOD RAMESH AMARSINGH', 01, 'N', 060, 10, '', '', '', '', '', '', 'RATHOD RAMESH AMARSING', 'AT PO SUKLI TQ ARNI', 'DT YAVATMAL', '', '', 'SUKLI', '', '', '', 445103, '', '', '', '', 052956, 053015, 061279, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(108, 00059581, 445810502, 502, '03173000478', 'SHIVGANGA TAYARS', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'MAHUR ROAD NEAR SCHOOL', 'WARD NO 1 ARNI', 'ARNI', '', '', 'ARNI', '', '', '', 445001, '', '', '', '', 120471, 120530, 000478, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(109, 00059582, 445810502, 502, '03177200046', 'SUDARSHAN KRUSHI KENDRA.', 01, 'N', 060, 13, '', '', '', '', '', '', 'MAIN ROAD ', 'ARNI ', '', '', '', 'Dist. Yavatmal', '', '', '', 445001, '', '', '', '', 118951, 119010, 200046, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(110, 00059583, 445810502, 502, '03021000524', 'SAGAR AGRO AGENCIES', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'MAHUR ROAD', 'MAIN ROAD', 'ARNI', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182131, 182190, 000524, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(111, 00059584, 445810502, 502, '03021000802', 'MASTER AGRO SEVA KENDRA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SWAMI SAMARTH COMPLEX', 'UTTAM TALKIES ROAD ARNI', 'TQ ARNI DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182191, 182250, 000802, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(112, 00059586, 445810502, 502, '03173000094', 'DEEPAK JEWELERS', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'DEEPAK JEWELERS', 'MAIN ROAD ARNI', 'TQ ARNI DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 120531, 120590, 000094, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(113, 00059585, 445810502, 502, '03023008458', 'KHAN NASIR NIYAJULLA KHAN', 01, 'N', 015, 10, '', '', '', '', '', '', 'MUBARAK NAGAR ARNI B', '', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 053016, 053030, 008458, '2023-06-08', 1, 0, '', '', '', '', '03', NULL),
(114, 00059568, 445810509, 509, '10023012021', 'AKSHAY VINAYAKRAO KUKSE', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST PANDHARKAWADA', 'RANILAXMIBAI WARD PANDHARKAWAD', '', '', '', 'AT POST PANDHARKAWADA ', '', '', '', 445302, '', '', '', '', 064281, 064295, 012021, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(115, 00059569, 445810509, 509, '10023008655', 'TUPAT DIPAK SAHADEO', 01, 'N', 015, 10, '', '', '', '', '', '', 'SUBHASHCHANDRA BOSE WD PANDHAR', 'KAWADATAL KELAPUR  DIST YA', 'VATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064296, 064310, 008655, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(116, 00059566, 445810509, 509, '10021000271', 'SHARMA MEDICAL STOARS', 01, 'N', 060, 11, '', '', '', '.', '', '', 'MAIN ROAD PANDHARKAWADA', 'TA KELAPUR ', 'DIST  YAVATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 059891, 059950, 000271, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(117, 00059567, 445810509, 509, '10023006645', 'UPLENCHWAR SUNIL SHRIHARI', 01, 'N', 030, 10, '', '', '', '', '', '', 'MAIN ROAD PANDHARKAWADA', 'TA KELAPUR DI YAVATMAL', '', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064251, 064280, 006645, '2023-06-08', 1, 0, '', '', '', '', '10', NULL),
(118, 00059570, 445810510, 510, '11170000068', 'BALAJI AGRO AGENCIES PRO.SUKHDEO R.DAHAPUTE', 01, 'N', 060, 13, '', '', '', '', '', '', 'NEAR VARSHA TALKIES DARWHA', 'TQ DARWHA', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 145426, 145485, 000068, '2023-06-08', 1, 0, '', '', '', '', '11', NULL),
(119, 00059571, 445810506, 506, '07021000882', 'MAKWANI KRUSHI CENTER', 01, 'N', 060, 11, '', '', '', '', '', '', 'MAIN ROAD BUS STOP NEAR', 'NEAR DARGA MASJID', ' AT PO NER DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091741, 091800, 000882, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(120, 00059572, 445810506, 506, '07021000882', 'MAKWANI KRUSHI CENTER', 01, 'N', 060, 11, '', '', '', '', '', '', 'MAIN ROAD BUS STOP NEAR', 'NEAR DARGA MASJID', ' AT PO NER DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091801, 091860, 000882, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(121, 00059573, 445810506, 506, '07021000257', 'SONTAKKE NILESH RAJENDRAAPPA', 01, 'N', 060, 11, '', '', '', '', '', '', 'OLD COTTON MARKET CHOWK', 'NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091861, 091920, 000257, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(122, 00059575, 445810506, 506, '07023007316', 'RATHOD KAILAS KALU', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT SHENDRI KHURD PO SHENDRI BK', 'TQ NER                   ', 'DIST YAVATMAL', '', '', 'AT SHENDRI KHURD ', '', '', '', 445202, '', '', '', '', 047506, 047535, 007316, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(123, 00059576, 445810506, 506, '07023002737', 'PATILKHEDE DEORAOJI UTTAMRAOJI', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT POST PIMPRI KALGA', 'TQ NER DIST YAVATMAL', '', '', '', 'PIMPRIKALGA', '', '', '', 445102, '', '', '', '', 047536, 047565, 002737, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(124, 00059574, 445810506, 506, '07023007917', 'JADHAO RAMESH BALARAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT TAPONA POST BORI ARAB', 'TA DARWHA DIST YAVATMAL', '', '', '', 'NER', '', '', '', 445201, '', '', '', '', 047491, 047505, 007917, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(125, 00059578, 445810506, 506, '07023005712', 'KHODE SAU.MINA LAXMANRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'SAI NAGAR NER', 'TQ NER DIST YAVATMAL', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047566, 047580, 005712, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(126, 00059577, 445810506, 506, '07021000898', 'SONU TRADERS NER', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'AT POST KHANSAHAB PLOT NER', 'TQ NER', 'DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 091921, 091980, 000898, '2023-06-08', 1, 0, '', '', '', '', '07', NULL),
(127, 00059561, 442810102, 102, '18170000159', 'S S D CAR DECOR', 01, 'N', 060, 13, '', 'TALREJA NIKHIL ASHOK', '', 'Proprietor', '', '', 'SAI HARITEJ CHANDRAPUR', 'CIVIL LINE WARORA NAKA', 'CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 018951, 019010, 000159, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(128, 00059562, 442810102, 102, '18177003126', ' GULAMALI ABBASALI SHAKIR                    ', 01, 'N', 060, 13, '', '', '', '', '', '', 'BALVIR WARD NEAR ABHAY ', 'TALKIES CHANDRAPUR', '', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 009556, 009615, 003126, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(129, 00059565, 442810102, 102, '18021001616', 'SANSKAR NAGRI SAHAKARI PATASANSTHA MYDT', 01, 'N', 060, 11, '', 'GHAROTE GHANSHYAM BALWANTRAO', 'UPARE VIDYA SANTOSH', 'Authorised Signatory', 'Authorised Signatory', '', 'NILKANTH APARTMENT BHAGATSINGH', 'CHOWK PATHANPURA ROA', 'D CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442402, '', '', '', '', 145726, 145785, 001616, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(130, 00059563, 442810102, 102, '18023012789', 'AMATE WAMAN SHRIPAT', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR ANNABHAU SATHE SAMAJ MAND', 'BINBA WARD MATANG MOHALLA', 'CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 077731, 077745, 012789, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(131, 00059564, 442810102, 102, '18023012121', 'ALONE NIRMALA MANOHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'SISTER COLONY', 'NAGINABAG', 'MANVATA NAGAR', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 077746, 077760, 012121, '2023-06-08', 1, 0, '', '', '', '', '18', NULL),
(132, 00059560, 445810508, 508, '09173000123', 'KISAN KRISHI KENDRA', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT POST NINGNOOR', 'TQ UMARKHED DIST YAVATMAL', '', '', '', 'NINGNOOR', '', '', '', 445230, '', '', '', '', 073521, 073580, 000123, '2023-06-08', 1, 0, '', '', '', '', '09', NULL),
(133, 00059559, 445810102, 102, '14023008172', 'NETKE PRAJKTA AMAR', 01, 'N', 030, 10, '', '', '', '', '', '', 'HANUMAN WARD PUSAD', 'TA PUSAD DITA YAVATMAL', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 051426, 051455, 008172, '2023-06-08', 1, 0, '', '', '', '', '14', NULL),
(134, 00059554, 445810507, 507, '08173000168', 'GANESH KIRANA STORES 08 13086', 01, 'N', 060, 13, '', '', '', '.', '', '', 'IN FRONT OF NAGAR PAR GHATANJI', 'IN FRONT OF NAGAR PAR GHATANJI', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 036856, 036915, 000168, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(135, 00059558, 445810507, 507, '08173000089', 'ASHOKA HARDWERE GHATANJI.', 01, 'N', 060, 13, '', 'CHATULE ASHOK BHAURAO', '', 'Proprietor', '', '', '1 ASHOKA HARDWARE', 'MAIN ROAD GHATANJI 2', ' JESIS COL', '', '', 'DI.YAVATMAL', '', '', '', 445301, '', '', '', '', 036916, 036975, 000089, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(136, 00059555, 445810507, 507, '08023014693', 'SYD.ASIF SYD.AMIR', 01, 'N', 030, 10, '', '', '', '', '', '', 'GURUDEV WARD GHATI', 'GHATANJI DI YAVATMAL', '', '', '', 'GHATI', '', '', '', 445301, '', '', '', '', 081956, 081985, 014693, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(137, 00059556, 445810507, 507, '08023017796', 'KALE MANISHA SUBHASH', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT PO SASANI TA GHATANJI', '', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 081986, 082015, 017796, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(138, 00059557, 445810507, 507, '08023012145', 'INGOLE MANISH DEVIDASJI', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT MANOLI TA GHATANJI', '', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082016, 082045, 012145, '2023-06-08', 1, 0, '', '', '', '', '08', NULL),
(139, 00059552, 444810002, 002, '23021000533', 'KIRAN TRADERS', 01, 'N', 030, 11, '', '', '', '.', '', '', 'AALSI COMPLEX AKOLA', 'OPP OPEN THEATOR', 'M G ROAD', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 062741, 062770, 000533, '2023-06-08', 1, 0, '', '', '', '', '23', NULL),
(140, 00059553, 444810002, 002, '23021000539', 'SHREEJAADHISHREE MULTIPURPOSE PRIVATE LIMITED', 01, 'N', 030, 11, '', '', '', '', '', '', '813 RAVI NAGAR RING ROAD', 'PLOT NO RNT 16 KAULKHED', '', '', '', 'AKOLA', '', '', '', 444004, '', '', '', '', 062771, 062800, 000539, '2023-06-08', 1, 0, '', '', '', '', '23', NULL),
(141, 00059547, 445810512, 512, '13021000398', 'BHOYAR NILESH ASHOKRAO', 01, 'N', 030, 11, '', '', '', '', '', '', 'AMBIKA NAGAR YAVATMAL', 'JAWAHARLAL DARDA NAGAR YAVATMA', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 047821, 047850, 000398, '2023-06-08', 1, 0, '', '', '', '', '13', NULL),
(142, 00059549, 445810512, 512, '13021000292', 'WAKE MEDICALS KALAMB', 01, 'N', 030, 11, '', '', '', '', '', '', 'WAKE LEYOUT KALAMB', 'AT PO TQ KALAMB', 'DT YAVATMAL', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 047851, 047880, 000292, '2023-06-08', 1, 0, '', '', '', '', '13', NULL),
(143, 00059550, 445810512, 512, '13173000085', 'WAGHAMARE DRESSES                            ', 01, 'N', 030, 13, '', 'WAGHMARE RAJESH RAMESH', '', 'Proprietor', '', '', 'MAIN ROAD KALAMB', 'AT PO KALAMB', 'DT YAVATMAL', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 050216, 050245, 000085, '2023-06-08', 1, 0, '', '', '', '', '13', NULL),
(144, 00059548, 445810512, 512, '13023001035', 'SACHIV G. P. MUSAL( GRAMIN PANI PU. NIDH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT MUSAL PO DONGARKHARDA', 'TQ KALAMB', 'DIST YAVATMAL', '', '', 'MUSAL', '', '', '', 445401, '', '', '', '', 043081, 043095, 001035, '2023-06-08', 1, 0, '', '', '', '', '13', NULL),
(145, 00059551, 445810512, 512, '13023001032', 'SACHIV G. P. PRADHANBORI(GRAMIN PANI P.)', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PRADHANBOERI ', 'TQ KALAMB', 'DIST YAVATMAL', '', '', 'PRADHANBORI', '', '', '', 445401, '', '', '', '', 043096, 043110, 001032, '2023-06-08', 1, 0, '', '', '', '', '13', NULL),
(146, 00059541, 445810504, 504, '05023005408', 'MENDHE RAMESH MAROTI', 01, 'N', 015, 10, '', '', '', '', '', '', 'SADANAND WARD NEAR MAULI KIRAN', 'UMARKHED', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 055616, 055630, 005408, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(147, 00059542, 445810504, 504, '05023010030', 'KAMTHANE GOPAL DIPAK', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST VIDUL TQ UMARKHED', '', 'TQ UMARKHED DIST YAVATMAL', '', '', 'VIDUL', '', '', '', 445206, '', '', '', '', 055631, 055645, 010030, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(148, 00059544, 445810504, 504, '05023010475', 'SHINDE MAHESH VITTHAL', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT KARODI PO PEWA', 'TA HADGAON DIST NANDED', '', '', '', 'KARODI', '', '', '', 431712, '', '', '', '', 055646, 055660, 010475, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(149, 00059543, 445810504, 504, '05170000046', 'NIRMAL COMPUTER', 01, 'N', 060, 13, '', '', '', '.', '', '', 'DYANAND COLONY UMARKHED', 'AT PO TQ UMARKHED DI', 'ST YAVATMA', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 007351, 007410, 000046, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(150, 00059546, 445810504, 504, '05021000781', 'SAI DUDH DAIRY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'PRO PANDIT PANDURANG ', 'WANKHEDE SAI DUDH DAIRY', 'PUSAD ROAD UMARKHED', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 091291, 091350, 000781, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(151, 00059545, 445810504, 504, '05023008826', 'DESHMUKH SANJAY DADARAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT NAGAPUR PO UMARKHED ', '', '', '', '', 'YAWATMAL', '', '', '', 445206, '', '', '', '', 055661, 055675, 008826, '2023-06-08', 1, 0, '', '', '', '', '05', NULL),
(152, 00059539, 445810505, 505, '06021000508', 'MANKAR MILIND NAGSEN', 01, 'N', 060, 11, '', '', '', '', '', '', 'HARSUL TA DIGRAS', 'DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068341, 068400, 000508, '2023-06-08', 1, 0, '', '', '', '', '06', NULL),
(153, 00059540, 445810505, 505, '06173000146', 'BANGINWAR AGRO SERVICE', 01, 'N', 060, 13, '', '', '', '.', '', '', 'NEAR GHANTIBABA MANDIR', 'ARNI ROAD DIGRAS ', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 076351, 076410, 000146, '2023-06-08', 1, 0, '', '', '', '', '06', NULL),
(154, 00059537, 442810252, 252, '21173000090', 'NIKHIL TRADERS PRO.NIKHIL VILASRAO GUNDAWAR', 01, 'N', 060, 13, '', '', '', '.', '', '', 'BAZAR WARD', 'GANDHI CHOWK', 'BHADRAWATI', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 041206, 041265, 000090, '2023-06-08', 1, 0, '', '', '', '', '21', NULL),
(155, 00059538, 442810252, 252, '21173000091', 'GUNDAWAR KIRANA ', 01, 'N', 060, 13, '', '', '', '', '', '', 'BAGADE WADI', 'BANGALI CAMP ROAD', 'BHADARAWATI', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 041266, 041325, 000091, '2023-06-08', 1, 0, '', '', '', '', '21', NULL),
(156, 00059536, 442810252, 252, '21023000265', 'SATPUTE PRAVIN PRAKASH', 01, 'N', 015, 10, '', '', '', '', '', '', 'SANTAJI NAGAR', 'BHADRAWATI', 'DIST CHANDRAPUR', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 040876, 040890, 000265, '2023-06-08', 1, 0, '', '', '', '', '21', NULL),
(157, 00059678, 445810509, 509, '10023012022', 'SIMA VINAYKRAO KUKASE', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST PANDHARKAWADA', 'RANI LAXMI BAI WARD           ', '', '', '', 'AT POST PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064311, 064325, 012022, '2023-06-09', 1, 0, '', '', '', '', '10', NULL),
(158, 00059677, 445810508, 508, '09170000155', 'BHAGWATI PRASAD TRADING', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT KOPRA BU POST CHATARI TQ', 'UMARKHED', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 003276, 003335, 000155, '2023-06-09', 1, 0, '', '', '', '', '09', NULL),
(159, 00059676, 444810002, 002, '23023002489', 'KHADE SUDHKAR RUPRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'GAYATRI NAGAR', 'KAULKHED AKOLA', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044601, 044615, 002489, '2023-06-09', 1, 0, '', '', '', '', '23', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(160, 00059776, 445810504, 504, '05023003548', 'PANDE DEEPA MANOJ', 01, 'N', 030, 10, '', '', '', '', '', '', 'VASANT NAGAR PUSAD ROAD', 'UMARKHED', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 055676, 055705, 003548, '2023-06-12', 1, 0, '', '', '', '', '05', NULL),
(161, 00059774, 445810512, 512, '13021000261', 'SUKHKARTA KRISHI KENDRA', 01, 'N', 060, 11, '', '', '', '', '', '', 'KOTHARI COMPLEX', 'KALAMB DIST YAVATMAL', '', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 047881, 047940, 000261, '2023-06-12', 1, 0, '', '', '', '', '13', NULL),
(162, 00059775, 445810512, 512, '13021000263', 'SANJAY FASHION CLOTH CENTER                  ', 01, 'N', 030, 11, '', '', '', '.', '', '', 'BASIC SCHOOL ROAD', 'KALAMB', 'TO KALAMB DIST YAVATMAL', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 047941, 047970, 000263, '2023-06-12', 1, 0, '', '', '', '', '13', NULL),
(163, 00059772, 444810002, 002, '23170000035', 'AKOLA SURGICALS PVT.LTD.', 01, 'N', 060, 13, '', 'MAHAJAN SUHASINI SACHIN', 'SHAH PRERNA PARAG 23 4953', 'Authorised Signatory', 'Authorised Signatory', '', 'C O G F BIOTECH PVT LTD ', 'RAJESHWAR COMPLEX', 'AKOLA', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 078521, 078580, 000035, '2023-06-12', 1, 0, '', '', '', '', '23', NULL),
(164, 00059773, 444810002, 002, '23170000139', 'JAYANT AGRICULTURE AND ENGINEERING COMPANY   ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'DABAKI ROAD AKOLA', '', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 078581, 078640, 000139, '2023-06-12', 1, 0, '', '', '', '', '23', NULL),
(165, 00059770, 445810507, 507, '08023009568', 'SHENDE DASSHRI PUNDALIKRAO', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT MANOLI PO ANJI TQ GHT', '', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082046, 082075, 009568, '2023-06-12', 1, 0, '', '', '', '', '08', NULL),
(166, 00059771, 445810507, 507, '08023000976', 'MASULKAR JYOTI RAMBHHAU', 01, 'N', 030, 10, '', '', '', '', '', '', 'WARD NO 2  NEAR HANUMAN MANDIR', 'TQ GHATANJI', 'DIST YAVATMAL', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082076, 082105, 000976, '2023-06-12', 1, 0, '', '', '', '', '08', NULL),
(167, 00059766, 445810102, 102, '14021000694', 'ARUN METALS', 01, 'N', 060, 11, '', '', '', '.', '', '', 'ARUN METALS GANDHI CHOWK PUSAD', 'TA PUSAD DIST YAVATMAL', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 090646, 090705, 000694, '2023-06-12', 1, 0, '', '', '', '', '14', NULL),
(168, 00059769, 445810102, 102, '14173000129', 'ASHIRVAD GENERAL STORES', 01, 'N', 060, 13, '', '', '', '.', '', '', 'ASHIRVAD GENERAL STORES', 'NEAR BUS STAND PUSAD', '', '', '', 'PUSAD               ', '', '', '', 445204, '', '', '', '', 048801, 048860, 000129, '2023-06-12', 1, 0, '', '', '', '', '14', NULL),
(169, 00059765, 445810102, 102, '14023000612', 'DUBBEWAR PRABHAKAR MAROTI', 01, 'N', 030, 10, '', '', '', '', '', '', 'DUBBEWAR LAYOUT', 'SHANKAR NAGAR', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 051456, 051485, 000612, '2023-06-12', 1, 0, '', '', '', '', '14', NULL),
(170, 00059768, 445810102, 102, '14021000728', 'PRAVIN TREADERS ANSING', 01, 'N', 030, 11, '', '', '', '.', '', '', 'AT MAIN ROAD ASING FATA', 'ANSING DIST WASHIM', '', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 090706, 090735, 000728, '2023-06-12', 1, 0, '', '', '', '', '14', NULL),
(171, 00059767, 445810102, 102, '14023008445', 'VYAWAHARE BAPURAO KISANRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR NURSINH MANDIR', 'CHAUBARA CHOWK PUSAD', '', '', '', 'PUSAD           ', '', '', '', 445204, '', '', '', '', 051486, 051500, 008445, '2023-06-12', 1, 0, '', '', '', '', '14', NULL),
(172, 00059759, 445810508, 508, '09021000323', 'TIRUPATI KRUSHI SEVA KENDRA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'AT POST AKOLI TAL UMARKHED', 'DIST YAVATMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 034256, 034315, 000323, '2023-06-12', 1, 0, '', '', '', '', '09', NULL),
(173, 00059758, 442810102, 102, '18021001298', 'PARIYOG BUILDERS AND DEVELOPERS', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'RAGHUVANSHI COMPLEX NEAR AZAD', 'GARDEN CHANDRAPUR', '', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 145786, 145845, 001298, '2023-06-12', 1, 0, '', '', '', '', '18', NULL),
(174, 00059757, 445810509, 509, '10173000180', 'JAI GURUDEO KRISHI KENDRA                    ', 01, 'N', 030, 13, '', '', 'DESHATTIWAR KISHOR LACHANNA', 'Proprietor', 'Proprietor', '', 'ATHWADI BAZAR PKD', 'WARD NO 18', 'DIST YAVATMAL', '', '', 'PANDHARKAWDA', '', '', '', 445302, '', '', '', '', 046461, 046490, 000180, '2023-06-12', 1, 0, '', '', '', '', '10', NULL),
(175, 00059754, 445810510, 510, '11021001108', 'ADITYA ANAGHA MULTI STATE CREDIT CO OP SOC LT', 01, 'N', 060, 11, '', '', '', 'Authorised Signatory', '', '', '425 AZAMSHAH LAYOUT', 'ANAND NAGAR', 'NAGPUR', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 075461, 075520, 001108, '2023-06-12', 1, 0, '', '', '', '', '11', NULL),
(176, 00059755, 445810510, 510, '11021001038', 'SHREE GAJANAN KRUSHI SEVA KENDRA', 01, 'N', 060, 11, '', '', '', '', '', '', 'AT PO MANGKINHI', 'TAL DARWHA DIST YAVA', 'TMAL', '', '', 'MANGKINHI', '', '', '', 445202, '', '', '', '', 075521, 075580, 001038, '2023-06-12', 1, 0, '', '', '', '', '11', NULL),
(177, 00059756, 445810510, 510, '11170000066', 'PAYAL JWELLERS DARWHA', 01, 'N', 060, 13, '', '', '', '', '', '', 'NEAR NAGR VACHANALAYA', 'DARWHA  TQ DARWHA DI', 'S YAVATMAL ', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 145651, 145710, 000066, '2023-06-12', 1, 0, '', '', '', '', '11', NULL),
(178, 00059752, 445810510, 510, '11021001006', 'SAMRUDDHI MEDICALS', 01, 'N', 060, 11, '', '', '', '', '', '', 'JIRAPURE NAGAR DARWHA', 'DIST YAVATMAL', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 075401, 075460, 001006, '2023-06-12', 1, 0, '', '', '', '', '11', NULL),
(179, 00059753, 445810510, 510, '11023003533', 'ZADE GANESH MAHADEO DINESH MAHADEO', 01, 'N', 030, 10, '', '', '', '', '', '', 'NEAR RAM MANDIR   DARWHA', 'DARWHA', '', '', '', 'DARWHA ', '', '', '', 445202, '', '', '', '', 094541, 094570, 003533, '2023-06-12', 1, 0, '', '', '', '', '11', NULL),
(180, 00059751, 445810506, 506, '07023006157', 'MATRE SAGAR MANIKRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAIN ROAD NER', 'MAIN ROAD NER', '', '', '', 'NER P.', '', '', '', 445102, '', '', '', '', 047581, 047595, 006157, '2023-06-12', 1, 0, '', '', '', '', '07', NULL),
(181, 00059749, 445810502, 502, '03021000556', 'OMKAR MOTORS ARNI', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'NEAR JADHAO PETROL PUMP', 'YAVATMAL ROAD ARNI', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182251, 182310, 000556, '2023-06-12', 1, 0, '', '', '', '', '03', NULL),
(182, 00059750, 445810502, 502, '03173000492', 'NAWABASI KIRANA STOARS', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'NAWABASI KIRANA STOARS', '', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 120591, 120650, 000492, '2023-06-12', 1, 0, '', '', '', '', '03', NULL),
(183, 00059748, 444812101, 101, '19023007007', 'BHUGUL ANURADHA PRAVIN', 01, 'N', 015, 10, '', '', '', '', '', '', 'AMAR NAGAR NEAR MAHENDRA', 'COLONY NEAR HANUMAN TEMPLE', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444604, '', '', '', '', 083511, 083525, 007007, '2023-06-12', 1, 0, '', '', '', '', '19', NULL),
(184, 00059746, 445810004, 004, '17023007461', 'GIANTS ENGLISH MEDIUM SCHOOL YTL', 01, 'N', 030, 10, '', '', '', '', '', '', 'ARNI ROAD YTL 9422865222', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068671, 068700, 007461, '2023-06-12', 1, 0, '', '', '', '', '17', NULL),
(185, 00059747, 445810004, 004, '17021000715', 'LOBHIWANTAY MEDICALS', 01, 'N', 030, 11, '', '', '', '.', '', '', 'WARD 4 OLD SURVEY NO26', 'OM COLONY ARNI ROAD', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 080296, 080325, 000715, '2023-06-12', 1, 0, '', '', '', '', '17', NULL),
(186, 00059745, 440800002, 002, '22023009093', 'NASIM AHMED ISHARUDDN KAMRUDDIN SIDDIQUE', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR NIJA SETH HOUSE', '1237 A 10 MAIN ROAD', '', '', '', 'NAGPUR', '', '', '', 440017, '', '', '', '', 210591, 210605, 009093, '2023-06-12', 1, 0, '', '', '', '', '22', NULL),
(187, 00059744, 445810003, 003, '15021000942', 'TANAY MEDICAL STORES', 01, 'N', 060, 11, '', '', '', '', '', '', 'AMBEDKAR CHOWK PATIPURA ', 'AT YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 124121, 124180, 000942, '2023-06-12', 1, 0, '', '', '', '', '15', NULL),
(188, 00059743, 445810002, 002, '01173000293', 'NAGDIVE KRISHI KENDRA                        ', 01, 'N', 060, 13, '', 'NAGDIVE SATISH VISHWNATH', '', 'Proprietor', '', '', 'DATTA CHOWK', 'BUSINESS PLAZA YAVAT', 'MAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 207151, 207210, 000293, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(189, 00059740, 445810503, 503, '04021001059', 'GAYATRI AGRO AGENCY.', 01, 'N', 045, 11, '', '', '', 'Proprietor', '', '', 'AT PO MARDI ', 'TA MAREGAON  DIST YA', 'VATMAL ', '', '', 'MAREGAON', '', '', '', 445304, '', '', '', '', 165896, 165940, 001059, '2023-06-12', 1, 0, '', '', '', '', '04', NULL),
(190, 00059741, 445810503, 503, '04021001714', 'SHRI BODHE KRUSHIKENDRA', 01, 'N', 045, 11, '', '', '', '.', '', '', 'BLOK NO 2 VIVEKANAND', 'COMPLEX WANI', 'TA WANI DT YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 165941, 165985, 001714, '2023-06-12', 1, 0, '', '', '', '', '04', NULL),
(191, 00059742, 445810503, 503, '04173000540', 'AZAD ELECTRONICS', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'NEAR SHYAM TALKIES', 'WANI', '', '', '', 'DIST YAVATMAL', '', '', '', 445304, '', '', '', '', 155151, 155210, 000540, '2023-06-12', 1, 0, '', '', '', '', '04', NULL),
(192, 00059738, 440800003, 003, '25177270056', 'CHOUVISIYA RAJESH NAGAR', 01, 'N', 030, 13, '', '', '', '', '', '', 'HOUSE NO 122', 'CHOUVISIYA BUILDING', 'IMAMWADA ROAD ', '', '', 'NAGPUR', '', '', '', 440003, '', '', '', '', 000346, 000375, 270056, '2023-06-12', 1, 0, '', '', '', '', '25', NULL),
(193, 00059739, 440800003, 003, '25023001117', 'TIMANDE DIMESH PANDURANG', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST NAND WARD NO 3', 'GUJARI CHOUK WARD NO 3', 'TH BHIWAPUR DIST NAGPUR', '', '', 'NAGPUR', '', '', '', 441203, '', '', '', '', 019001, 019015, 001117, '2023-06-12', 1, 0, '', '', '', '', '25', NULL),
(194, 00059737, 445810514, 514, '16023002801', 'RAUT YOGESH PREMRAJ 16 13931', 01, 'N', 045, 10, '', '', '', '', '', '', 'AT CHIMNABHAGAPUR', 'TQ BABHULGAON ', 'DIST YAVATMAL', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 045471, 045515, 002801, '2023-06-12', 1, 0, '', '', '', '', '16', NULL),
(195, 00059735, 431532081, 081, '31023002022', 'MAHAJAN MEENAKSHI PRITAM', 01, 'N', 030, 10, '', 'MAHAJAN PRAFULLATA SOMA', 'MAHAJAN PRITAMKUMAR SOMA', '', '', '', 'PLOT NO 19 NEW ROYAL', 'RESIDANT PUSHPA NAGARI', 'C B S ROAD PARGONKAR ', '', '', 'HOSPITAL MARG AURANGABD', '', '', '', 431001, '', '', '', '', 012606, 012635, 002022, '2023-06-12', 1, 0, '', '', '', '', '31', NULL),
(196, 00059736, 431532081, 081, '31173000001', 'BALAJI MEDICAL STORES', 01, 'N', 060, 13, '', '', '', '', '', '', 'C S NO 302 MEHARE SING NAIK CH', 'VASANT NAGAR NEW SHANTI ', 'NIKETAN COLONY AURANGABAD', '', '', 'AURANGABAD', '', '', '', 431001, '', '', '', '', 000421, 000480, 000001, '2023-06-12', 1, 0, '', '', '', '', '31', NULL),
(197, 00059734, 445810514, 514, '16173000036', 'RAJAT KRUSHI KENDRA PR RAVINDRA MANALWAR', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT PO NAIGAON', 'TQ BABHULGAON DIST ', 'YAVATMAL', '', '', 'NAIGAON', '', '', '', 445101, '', '', '', '', 070136, 070195, 000036, '2023-06-12', 1, 0, '', '', '', '', '16', NULL),
(198, 00059725, 445810002, 002, '01173000481', 'RSK AND  SONS YAVATMAL', 01, 'N', 060, 13, '', 'KOTHARI SAGARMAL PREMRAJ', '', 'Proprietor', '', '', 'SAGARMAL PREMRAJ KOTHARI JAYAN', 'T SOMANCOMMERCIAL COMPLEX D', 'ATTA CHAUK', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 206901, 206960, 000481, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(199, 00059726, 445810002, 002, '01021002257', 'BALAJI AGRO AGENCIES', 01, 'N', 060, 11, '', '', '', '', '', '', 'SOMAN COMPLEX DATTA CHAUK', 'YTL 9226767599', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332376, 332435, 002257, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(200, 00059728, 445810002, 002, '01170000775', 'GUGHANE INFRASTRUCTURE PVT LTD YAVATMAL', 01, 'N', 060, 13, '', 'GUGHANE NARENDRA BAPURAOJI', 'GADHAVE GIRISH SUDHAKARRAO', 'Authorised Signatory', 'Authorised Signatory', '', '20 AGRAWAL LAYOUT WAGHAPUR', 'ROAD YAVATMAL 242080', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270386, 270445, 000775, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(201, 00059727, 445810002, 002, '01023035358', 'RAUT PRAKASH MADHUKARRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT SHUBHAM COLONY ', 'NEAR WAGHAPUR', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249566, 249580, 035358, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(202, 00059729, 445810002, 002, '01023258573', 'BOPILWAR PAVAN PRAKASH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO DAHISAWALI TA MAHAGAON', 'DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249581, 249595, 258573, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(203, 00059731, 445810002, 002, '01023038903', 'GUJAR SUNIL RAGHUNATH', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR HANUMAN MANDIR CHAPANWADI', 'ATHAWADI BAZAR', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249596, 249610, 038903, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(204, 00059730, 445810002, 002, '01173000469', 'HUSSAINI CEMENT TRADERS', 01, 'N', 030, 13, '', '', '', '', '', '', 'SAMBHAJI NAGAR', 'WAGHAPUR ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 206961, 206990, 000469, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(205, 00059732, 445810002, 002, '01170000876', 'SHRI SAMARTH SWASTA AUSHADHI SEVA GEN MED STO', 01, 'N', 060, 13, '', '', '', '.', '', '', 'SAIBALAJI PARK WAGHAPUR', '', 'PIMPALGAON ROAD', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270601, 270660, 000876, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(206, 00059733, 445810002, 002, '01021002982', 'BALAJI STONE CRUSHER', 01, 'N', 045, 11, '', '', '', '.', '', '', 'DATTA CHOWK YAVATMAL', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332436, 332480, 002982, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(207, 00059723, 442810501, 501, '20023006929', 'KOTTE ARVIND GANPAT', 01, 'N', 030, 10, '', '', '', '', '', '', 'WARD NO 3 AT BIBI PO NANDA', 'TA KORPANA DT CHANDRAPUR', '', '', '', 'BIBI', '', '', '', 442917, '', '', '', '', 062901, 062930, 006929, '2023-06-12', 1, 0, '', '', '', '', '20', NULL),
(208, 00059724, 442810501, 501, '20021000316', 'AVINASH KRUSHI KENDRA PROP.A CHILRWAR', 01, 'N', 060, 11, '', '', '', '', '', '', 'GANDHI CHOWK', 'GADCHANDUR', '', '', '', 'GADCHANDUR', '', '', '', 0, '', '', '', '', 060361, 060420, 000316, '2023-06-12', 1, 0, '', '', '', '', '20', NULL),
(209, 00059722, 444810202, 202, '30023001989', 'ROKADE KAILAS BALIRAM', 01, 'N', 030, 10, '', '', '', '', '', '', 'CHANDIKAWESH TILAK CHOWK WASHI', 'CHANDIKAWESH TILAK CHOWK WASHI', 'CHANDIKAWESH TILAK CHOWK WASHI', '', '', 'WASHIM ', '', '', '', 444505, '', '', '', '', 013911, 013940, 001989, '2023-06-12', 1, 0, '', '', '', '', '30', NULL),
(210, 00059718, 445810511, 511, '12023004929', 'KHUDSANGE SHAILESH NAMDEVRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'BAHALE LE OUT RALEGAON', 'RALEGAON', '', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050146, 050160, 004929, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(211, 00059719, 445810511, 511, '12023008363', 'MADAVI LAXMAN RAMAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'PRABHAG NO 12 SHANTI NAGAR', 'RALEGAON TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050161, 050175, 008363, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(212, 00059720, 445810511, 511, '12173000095', 'SAINATH KIRANA AND PROVISION STORES RALEGAON ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT GANDHI LEY OUT RALEGAON', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON ', '', '', '', 445402, '', '', '', '', 057296, 057355, 000095, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(213, 00059721, 445810511, 511, '12021000481', 'SHITAL KRUSHI KENDRA WANOJA', 01, 'N', 030, 11, '', '', '', '.', '', '', 'AT WARD NO 1 HOUSE NO 239', 'MAIN ROAD NEAR ZP SCHOOL', 'WANOJA TQ RALEGAON DIST YAVATM', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 060161, 060190, 000481, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(214, 00059716, 442810152, 152, '35023000104', 'KARWATKAR RAJU TANBAJI', 01, 'N', 060, 10, '', '', '', '', '', '', 'NEAR LALA LAJPATRAY SCHOOL', 'VITTHAL MANDIR WARD', ' NEW ADD TUKADOJI W TAM L OUT', '', '', 'HINGAMNGHAT', '', '', '', 442301, '', '', '', '', 043721, 043780, 000104, '2023-06-12', 1, 0, '', '', '', '', '35', NULL),
(215, 00059717, 442810152, 152, '35170000023', 'SSM FORMULATIONS PVT LTD                     ', 01, 'N', 060, 13, '', '', '', 'Authorised Signatory', 'Authorised Signatory', '', 'NEAR KARANJA CHOWK', 'MAIN ROAD HINGANGHAT', '', '', '', 'HINGANGHAT', '', '', '', 442301, '', '', '', '', 062766, 062825, 000023, '2023-06-12', 1, 0, '', '', '', '', '35', NULL),
(216, 00059696, 445810505, 505, '06173000172', 'M/S.KAMAL JWELLERS', 01, 'N', 060, 13, '', '', '', '', '', '', 'SARAFA LINE DIGRAS', 'HOUSE BAPU NAGAR DIG', 'RAS', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 076411, 076470, 000172, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(217, 00059697, 445810505, 505, '06173000131', 'VASANT KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHALAXMI NAGAR DIGRAS', 'TA  DIGRAS DIST YAVATMAL', '', '', '', 'DIGRAS ', '', '', '', 445203, '', '', '', '', 076726, 076785, 000131, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(218, 00059698, 445810505, 505, '06021000388', 'MAULI TRADING CO.', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'AT VISHWASHANTI NAGAR', 'DIGRAS', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068401, 068460, 000388, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(219, 00059699, 445810505, 505, '06173000131', 'VASANT KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHALAXMI NAGAR DIGRAS', 'TA  DIGRAS DIST YAVATMAL', '', '', '', 'DIGRAS ', '', '', '', 445203, '', '', '', '', 076826, 076885, 000131, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(220, 00059700, 445810505, 505, '06173000131', 'VASANT KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHALAXMI NAGAR DIGRAS', 'TA  DIGRAS DIST YAVATMAL', '', '', '', 'DIGRAS ', '', '', '', 445203, '', '', '', '', 077101, 077160, 000131, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(221, 00059701, 445810505, 505, '06173000131', 'VASANT KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHALAXMI NAGAR DIGRAS', 'TA  DIGRAS DIST YAVATMAL', '', '', '', 'DIGRAS ', '', '', '', 445203, '', '', '', '', 077226, 077285, 000131, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(222, 00059702, 445810505, 505, '06173000131', 'VASANT KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHALAXMI NAGAR DIGRAS', 'TA  DIGRAS DIST YAVATMAL', '', '', '', 'DIGRAS ', '', '', '', 445203, '', '', '', '', 077451, 077510, 000131, '2023-06-12', 1, 0, '', '', '', '', '06', NULL),
(223, 00059806, 444812101, 101, '19023005158', 'SHARMA DEVKRUSHNA GORAKHRAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'BHARATIYA COLONY CHHATRI TALAV', 'ROAD NEAR DASTUR NAGAR', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444606, '', '', '', '', 083526, 083540, 005158, '2023-06-12', 1, 0, '', '', '', '', '19', NULL),
(224, 00059805, 445810508, 508, '09023007936', 'GAIKWAD SURAJ DHARAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST DHANKI TQ UMARKHED', 'TQ UMARKHED', 'DIST YAVATMAL', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041246, 041260, 007936, '2023-06-12', 1, 0, '', '', '', '', '09', NULL),
(225, 00059802, 445810511, 511, '12170000068', 'HOLE RAHUL ASHOKRAO', 01, 'N', 060, 13, '', '', '', '', '', '', 'AT POST RALEGAON TQ RALEGAON', 'TQ RALEGAON ', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 056991, 057050, 000068, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(226, 00059803, 445810511, 511, '12023000852', 'GONDE KISHOR DEVRAO', 01, 'N', 015, 10, '', 'GONDE SUNITA KISHOR', '', '', '', '', 'AT PO GUJRI', 'TQ RALEGAON', 'DIST YAVATMAL ', '', '', 'GUJARI', '', '', '', 445402, '', '', '', '', 050176, 050190, 000852, '2023-06-12', 1, 0, '', '', '', '', '12', NULL),
(227, 00059798, 445810002, 002, '01023256964', 'GOHANE SONALI NIMESH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT BAMBALESHWARI NAGAR WADGAON', 'JAMB ROAD YAYATMAL', 'TA DIST YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249611, 249625, 256964, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(228, 00059799, 445810002, 002, '01021002988', 'ARYAN MOBILE SHOP AND RECHARGE AGENCY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'ITWARA CHOWK NEAR R T O', 'PANDHARKAWDA CHOWK', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332481, 332540, 002988, '2023-06-12', 1, 0, '', '', '', '', '01', NULL),
(229, 00059797, 445810003, 003, '15173000180', 'OM SCOOTERS PROP SANJAY RAMKISAN KAKANI', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'NEAR TIMBAR BHAVAN ', 'DHAMANGAON ROAD ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 105941, 106000, 000180, '2023-06-12', 1, 0, '', '', '', '', '15', NULL),
(230, 00059796, 445810504, 504, '05023006705', 'VINAYAK DAMODAR SAWARKAR ENGLISH MEDIUM SCHOO', 01, 'N', 060, 10, '', '', '', '', '', '', 'DEO NAGAR DHANKI ROAD ', 'UMARKHED', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 055706, 055765, 006705, '2023-06-12', 1, 0, '', '', '', '', '05', NULL),
(231, 00059864, 445810501, 501, '02023005441', 'BHANDAKKAR SUHAS MADAN                       ', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT POST PATANBORI', 'TA KELAPUR DIST YAVATMAL', '', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 044721, 044750, 005441, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(232, 00059863, 442810152, 152, '35023000297', 'KUNTEWAR CHETAN SUBHASHRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'SARKARI DAWAKHANA ', 'AT PO WADNER', 'TQ HINGANGHAT DIST WARDH', '', '', 'WADNER', '', '', '', 442301, '', '', '', '', 043781, 043795, 000297, '2023-06-13', 1, 0, '', '', '', '', '35', NULL),
(233, 00059862, 442810501, 501, '20021000392', 'SANDEEP KRUSHI KENDRA', 01, 'N', 060, 11, '', '', '', '', '', '', 'NEAR POLICE STATION', 'AT PO TA JIWATI ', 'DIST CHANDRAPUR', '', '', 'JIWATI', '', '', '', 442908, '', '', '', '', 060421, 060480, 000392, '2023-06-13', 1, 0, '', '', '', '', '20', NULL),
(234, 00059859, 445810002, 002, '01021002549', 'KASHYAP TRADING CO', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'DEVI NAGAR LOHARA YAVATMAL', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332541, 332600, 002549, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(235, 00059860, 445810002, 002, '01170000911', 'THAKRE VINAYAK DADARAOJI', 01, 'N', 060, 13, '', '', '', '', '', '', 'SHASHTRI NAGAR GODAM FAIL', 'DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 270801, 270860, 000911, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(236, 00059861, 445810002, 002, '01023014445', 'TOLIWAL RAJENDRA RAMGOPAL 01 60837', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHIVAM COLLECTION', 'OSWAL MARKET', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249626, 249640, 014445, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(237, 00059858, 411948002, 002, '33021000122', 'VINAYAK SWEETS AND DRY FRUIT                 ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SR NO 62 A 6 PAUD ROAD', 'NR AMDESHIYA RESORT', 'BAVDHAN KHU  PUNE', '', '', 'PUNE', '', '', '', 411021, '', '', '', '', 031971, 032030, 000122, '2023-06-13', 1, 0, '', '', '', '', '33', NULL),
(238, 00059856, 445810514, 514, '16023007217', 'CHAUDHARI BALU VITTHAL', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST KRUSHNA NAGARI', 'BABHULGAON TA BABHULGAON', 'DIST YAVATMAL MAHA', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 045516, 045530, 007217, '2023-06-13', 1, 0, '', '', '', '', '16', NULL),
(239, 00059857, 445810514, 514, '16023006804', 'GANDOLE PRASHANT BABARAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST FALEGAON ', 'TQ BABHULGAON', 'DIST YAVATMAL', '', '', 'FALEGAON', '', '', '', 445101, '', '', '', '', 045531, 045545, 006804, '2023-06-13', 1, 0, '', '', '', '', '16', NULL),
(240, 00059855, 441810002, 002, '29021000232', 'SHREE GANESH SORTEX', 01, 'N', 015, 11, '', '', '', '', '', '', 'B 3 SHARDA VACHNALAYA', 'GANDHI PRATIMA', 'GONDIA', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 030161, 030175, 000232, '2023-06-13', 1, 0, '', '', '', '', '29', NULL),
(241, 00059850, 445810503, 503, '04173000671', 'SAILANIBABA AGRO AGENCIES', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT PO SAKHARA DARA', 'TA ZARI DT YAVATMAL', '', '', '', 'SAKHARA', '', '', '', 445304, '', '', '', '', 150051, 150110, 000671, '2023-06-13', 1, 0, '', '', '', '', '04', NULL),
(242, 00059851, 445810503, 503, '04173000628', 'KRUSHI GANGA KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT PO TA MAREGAON', 'DIST YAVATMAL', '', '', '', 'MAREGAON ', '', '', '', 445303, '', '', '', '', 150111, 150170, 000628, '2023-06-13', 1, 0, '', '', '', '', '04', NULL),
(243, 00059853, 445810503, 503, '04170000393', 'GANGA TRASNPORT', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'RURAL HOSPITAL  WANI', 'NEAR SHETKARI MANDIR ROAD', 'WANI DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 056826, 056885, 000393, '2023-06-13', 1, 0, '', '', '', '', '04', NULL),
(244, 00059852, 445810503, 503, '04023019149', 'SHEIKH SALIM SHEIKH', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHASTRI NAGAR WARD NO 18 ', 'SHASTRI NAGAR WARD NO 18 ', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119241, 119255, 019149, '2023-06-13', 1, 0, '', '', '', '', '04', NULL),
(245, 00059847, 445810003, 003, '15023008266', 'BORA AMAN RAJENDRA', 01, 'N', 015, 10, '', '', '', '', '', '', 'BANGAR NAGAR YAVATMAL', 'NEAR DR THAKARE HOSPITAL ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078581, 078595, 008266, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(246, 00059848, 445810003, 003, '15023001972', 'RAJA SACHIN BHAGAVANJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'GANDHI CHOWAK JAYHIND CHOWK', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078596, 078610, 001972, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(247, 00059849, 445810003, 003, '15021000897', 'HARIOM BHAJI BHANDAR', 01, 'N', 030, 11, '', '', '', '.', '', '', 'N P VYAPARI SANKUL', 'DATTA CHOWK YAVATMAL', 'BORELE LAYOUT YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 124181, 124210, 000897, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(248, 00059841, 440800002, 002, '22021000620', 'NEW ERA REAL ESTATE                          ', 01, 'N', 030, 11, '', '', '', '.', '', '', 'FLAT NO 401 ', 'OMKAR RESIDENCY KHAMLA', 'NAGPUR', '', '', 'NAGPUR', '', '', '', 440025, '', '', '', '', 567141, 567170, 000620, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(249, 00059843, 440800002, 002, '22023006622', 'SUBHEDAR PRASHANT DINKAR', 01, 'N', 030, 10, '', 'SUBHEDAR KUSUM DINKAR', '', '', '', '', 'A 15 GANGADHAR APPARTMENT', 'NIT LAYOUT', 'SWAWLAMBI NAGAR NAGPUR', '', '', 'NAGPUR    ', '', '', '', 440022, '', '', '', '', 210606, 210635, 006622, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(250, 00059846, 440800002, 002, '22021001197', 'ASHISH DHANYA BHANDAR PROP.AMOL SANJ', 01, 'N', 030, 11, '', '', '', '', '', '', 'PLOT NO 3 LANJEWAR LAYOUT DEON', 'AGAR A V MOTORS ORANGE CITY H', 'OSPITAL NAGPUR', '', '', 'NAGPUR', '', '', '', 440015, '', '', '', '', 567171, 567200, 001197, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(251, 00059844, 440800002, 002, '22023004318', 'DESHKAR SHASHIKUMAR GOPALRAO', 01, 'N', 015, 10, '', '', '', '', '', '', '19 NEW RAMDASPETH NAGPUR', 'BEHIND SHRIRAM BHAVAN', '', '', '', 'NAGPUR', '', '', '', 440010, '', '', '', '', 210636, 210650, 004318, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(252, 00059845, 440800002, 002, '22023009426', 'YAMUNA SUKAR RAVIDAS', 01, 'N', 015, 10, '', '', '', '', '', '', '1463 D 30 3 B KATOL ROAD', 'BEHIND MATA MANDIR', 'GOREWADA WASTI KATOLROAD', '', '', 'NAGPUR', '', '', '', 440013, '', '', '', '', 210651, 210665, 009426, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(253, 00059842, 440800002, 002, '22173000007', 'ABHINAV ENGNEERING PRO.M.M.JADHAV 22 477', 01, 'N', 060, 13, '', 'JADHAV MANOJ MADHUKARRAO', '', 'Proprietor', '', '', 'NEAR CHITRA TAKIES', 'GANDHIBAG', '', '', '', 'NAGPUR', '', '', '', 440012, '', '', '', '', 033126, 033185, 000007, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(254, 00059839, 445810004, 004, '17170000219', 'DURGE DEEPAK BALIRAMJI', 01, 'N', 060, 13, '', '', '', '', '', '', 'AR TORODA PO GODEGAON', 'TA DARWHA', 'DIST YAVATMAL', '', '', 'TARODA', '', '', '', 445202, '', '', '', '', 077996, 078055, 000219, '2023-06-13', 1, 0, '', '', '', '', '17', NULL),
(255, 00059840, 445810004, 004, '17023008092', 'DESHPANDE ANJALI DILIP', 01, 'N', 015, 10, '', 'DESHPANDE DILIP GANGADHAR', '', '', '', '', 'HOUSE NO 12 VAIBHAV NAGAR', 'ARNI ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068701, 068715, 008092, '2023-06-13', 1, 0, '', '', '', '', '17', NULL),
(256, 00059837, 444812101, 101, '19021000579', 'AV.S DREAM HOME', 01, 'N', 030, 11, '', '', '', '', '', '', 'C O  ER ASHOK M KALE', 'PRASHANT NAGAR NEAR ', 'BY DR CHAFALE CLINI', '', '', 'AMRAVATI', '', '', '', 0, '', '', '', '', 127836, 127865, 000579, '2023-06-13', 1, 0, '', '', '', '', '19', NULL),
(257, 00059838, 444812101, 101, '19173000110', 'AHUJA ELECTRONICS AMRAVATI', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AMIT KHEMCHAND SACHDEO', '7 NEW COMPLEX', 'JAISTAMBH CHOWK', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 029951, 030010, 000110, '2023-06-13', 1, 0, '', '', '', '', '19', NULL),
(258, 00059836, 445810511, 511, '12021000486', 'SANTOSH MEDICAL STORES 12 9483', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR YTL  URBAN BANK', 'RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 060191, 060250, 000486, '2023-06-13', 1, 0, '', '', '', '', '12', NULL),
(259, 00059834, 445810502, 502, '03173000397', 'M S SANSKAR COLLECTION                       ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'MAIN ROAD  ARNI', 'ROAD ARNI', '', '', '', 'ARNI', '', '', '', 445001, '', '', '', '', 120651, 120710, 000397, '2023-06-13', 1, 0, '', '', '', '', '03', NULL),
(260, 00059835, 445810502, 502, '03021000599', 'MAMATA CYCLE', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'MAHUR ROAD', 'ARNI ', 'TQ ARNI DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182311, 182370, 000599, '2023-06-13', 1, 0, '', '', '', '', '03', NULL),
(261, 00059833, 445810502, 502, '03023007070', 'KATOLE SAU.ARCHANATAI SANDIP', 01, 'N', 030, 10, '', '', '', '', '', '', 'SAMBHAJI NAGAR ARNI', '', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 053031, 053060, 007070, '2023-06-13', 1, 0, '', '', '', '', '03', NULL),
(262, 00059832, 445810506, 506, '07173000146', 'SHREE AGENCIES PRO PANKAJ SHANT.PAGARIYA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AMRAVATI ROAD NER', 'NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 045046, 045105, 000146, '2023-06-13', 1, 0, '', '', '', '', '07', NULL),
(263, 00059828, 445810508, 508, '09023005427', 'GOSAVI BHAGWAN RUPGIRI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PSOT DHANKI TQ UMARKHED', 'TQ UMARKHED', 'DIST YAVATMAL', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041261, 041275, 005427, '2023-06-13', 1, 0, '', '', '', '', '09', NULL),
(264, 00059831, 445810508, 508, '09023007809', 'KALBANDE SUNIL CHIMNAJIE', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT SALLESHWAR POST BITARGAON', 'TQ UMARKHED   ', 'DIST YAVATMAL   ', '', '', 'SAVLESHWAR     ', '', '', '', 445207, '', '', '', '', 041276, 041290, 007809, '2023-06-13', 1, 0, '', '', '', '', '09', NULL),
(265, 00059829, 445810508, 508, '09173000187', 'NISAR GOLI BHANDAR DHANKI', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'MAIN ROAD DHANKI ', 'TQ UMARKHED DIST YAVATMAL ', '', '', '', 'DHANKI ', '', '', '', 445207, '', '', '', '', 073621, 073680, 000187, '2023-06-13', 1, 0, '', '', '', '', '09', NULL),
(266, 00059830, 445810508, 508, '09021000328', 'JIJAI KRUSHI KENDRA', 01, 'N', 060, 11, '', 'KORATWAD ASHISH ASHOK', '', 'Proprietor', '', '', 'AT POST DHANKI TAL UMARKHED ', 'DIST YAVATMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 034316, 034375, 000328, '2023-06-13', 1, 0, '', '', '', '', '09', NULL),
(267, 00059822, 444810002, 002, '23023005659', 'KATARIYA JAYA DILIP', 01, 'N', 015, 10, '', '', '', '', '', '', 'ADARSH COLONY AKOLA', 'WATHURKAR LAYOUT', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044616, 044630, 005659, '2023-06-13', 1, 0, '', '', '', '', '23', NULL),
(268, 00059823, 444810002, 002, '23023005660', 'KATARIYA KAJAL SURESH', 01, 'N', 015, 10, '', '', '', '', '', '', 'ADARSH COLONY AKOLA', 'WATHURKAR LAYOUT', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044631, 044645, 005660, '2023-06-13', 1, 0, '', '', '', '', '23', NULL),
(269, 00059824, 444810002, 002, '23023005632', 'DESHMUKH PRASHANT BABURAO', 01, 'N', 015, 10, '', 'DESHMUKH PANKAJ BABURAO', '', '', '', '', 'RANPISE NAGAR ', 'AKOLA', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044646, 044660, 005632, '2023-06-13', 1, 0, '', '', '', '', '23', NULL),
(270, 00059821, 444810002, 002, '23021000474', 'ARATI KIRANA', 01, 'N', 060, 11, '', 'GYANCHANDANI RAM MANGHARAM', '', 'Proprietor', '', '', 'SINDHI CAMP PAKKI KHOLI', '', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 062801, 062860, 000474, '2023-06-13', 1, 0, '', '', '', '', '23', NULL),
(271, 00059825, 445810507, 507, '08023013274', 'GOLAIT CHANDRAPRAKASH BANDUJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT NEAR POLICE STATION GHATNJI', 'TQ GHATANJI DIST YAV', 'ATMAL', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082106, 082120, 013274, '2023-06-13', 1, 0, '', '', '', '', '08', NULL),
(272, 00059826, 445810507, 507, '08023001977', 'SAYARE ABHIJIT SUDHAKARAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'JASIS COLONY GHATANJI', 'TA GHATANJI', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082121, 082135, 001977, '2023-06-13', 1, 0, '', '', '', '', '08', NULL),
(273, 00059827, 445810507, 507, '08023011345', 'RUKSANA MO.AKIL SHEIKH                       ', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHIWAJI CHOUK', 'AMBADEVI WARD GHATAN', 'JI DIST YA', '', '', 'GHATAJI', '', '', '', 445301, '', '', '', '', 082136, 082150, 011345, '2023-06-13', 1, 0, '', '', '', '', '08', NULL),
(274, 00059819, 445810512, 512, '13021000393', 'RAM SHETKARI SEWALAYA', 01, 'N', 060, 11, '', 'HAJARE NILIMA ASHISH', '', 'Proprietor', '', '', 'PRABHAG NO 16 APMC ', 'JODMOHA ROAD KALAMB', '', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 047971, 048030, 000393, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(275, 00059820, 445810512, 512, '13021000343', 'JALARAM KIRANA BHANDAR', 01, 'N', 060, 11, '', '', '', '', '', '', 'JALARAM KIRANA BHANDAR MAIN RO', 'PRO CHANDRAKANT J RUPAREL', 'INDIRA CHOUK KALAMB DIST YAVAT', '', '', 'TQ.KALAMB.', '', '', '', 445401, '', '', '', '', 048031, 048090, 000343, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(276, 00059817, 445810504, 504, '05173000121', 'HOTEL MUNGSAJI INN WINE BAR', 01, 'N', 060, 13, '', '', '', '.', '', '', 'NATH NAGAR', 'AT POST UMARKHED', 'TQ UMARKHED DIST YAVATMAL', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 132241, 132300, 000121, '2023-06-13', 1, 0, '', '', '', '', '05', NULL),
(277, 00059818, 445810504, 504, '05021000773', 'UTTARESHWAR KRUSHI SEVA KENDRA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'AT POST VIDUL TQ UMARKHED', '', 'TQ UMARKHED DIST YAVATMAL', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 091351, 091410, 000773, '2023-06-13', 1, 0, '', '', '', '', '05', NULL),
(278, 00059816, 442810252, 252, '21173000072', 'SHREE PARSHWANATH TILES PRO M P KATARIYA     ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'BAZAR WARD', 'JAIN MANDIR ROAD', '', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 041326, 041385, 000072, '2023-06-13', 1, 0, '', '', '', '', '21', NULL),
(279, 00059891, 445810002, 002, '01023030079', 'SARODE ROSHAN SUDHIR', 01, 'N', 030, 10, '', 'SARODE RAHUL SUDHIR', '', '', '', '', 'SHIVAJI NAGAR YAVATMAL', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249641, 249670, 030079, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(280, 00059894, 445810002, 002, '01177100987', 'YENUGWAR MADHUKAR SHANKAR', 01, 'N', 030, 13, '', '', '', '', '', '', 'BALAJI SOCIETY ROAD', 'NEAR RAM NAGAR', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026756, 026785, 100987, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(281, 00059892, 445810002, 002, '01173000497', 'MAYUR AGRO CENTER', 01, 'N', 045, 13, '', '', '', '.', '', '', 'AT AKOLA BAZAAR DIST YAVATMAL ', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 209926, 209970, 000497, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(282, 00059893, 445810002, 002, '01023257472', 'TIWADE CHETAN VASANTRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'Z P COLONY  VIKAS NAGAR', 'WAGHAPUR ROAD YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249671, 249685, 257472, '2023-06-13', 1, 0, '', '', '', '', '01', NULL),
(283, 00059887, 445810003, 003, '15021000733', 'SAI BOOK AGENCY PRO.KAILASH A.CHAUDHARI', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SAI NAGAR YERAWAR LAY OUT  ', 'PIMPALGAON ROAD ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 124211, 124270, 000733, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(284, 00059888, 445810003, 003, '15023003579', 'DESHPANDE DIPAK GUNWANTRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAM MANDIR ROAD ', 'NEAR SHYAM TAUKIES', 'YAVATMAL', '', '', 'YAVATMAL.', '', '', '', 445001, '', '', '', '', 078611, 078625, 003579, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(285, 00059889, 445810003, 003, '15023008010', 'BONDRE SUDAM SHRAVAN', 01, 'N', 015, 10, '', '', '', '', '', '', 'WADGAON ROAD NEAR GRAM PANCHAY', 'AT YAVATMAL  DHARMAJI NAGAR', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078626, 078640, 008010, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(286, 00059890, 445810003, 003, '15023006506', 'PARODE SAU.JANHAVI KISHOR', 01, 'N', 015, 10, '', '', '', '', '', '', '85 PARIJAT NARANGE NAGAR', 'DHAMANGAON ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078641, 078655, 006506, '2023-06-13', 1, 0, '', '', '', '', '15', NULL),
(287, 00059885, 445810004, 004, '17023007868', 'WANKHADE MAHESH DATTATRAY', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 4 AMARAIPURA', 'UTTAM TALKIES ROAD ARNI', 'C O ASHOK PADUTWAR 85 HANUMAN ', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 068716, 068730, 007868, '2023-06-13', 1, 0, '', '', '', '', '17', NULL),
(288, 00059886, 445810004, 004, '17023003027', 'ANASANE ASHA DAMODAR ', 01, 'N', 015, 10, '', 'ANASANE DAMODHAR NAGORAO                     ', '', '', '', '', 'PRAGATI COLONY BOARD JAWAL 30', 'MAHADEV NAGAR WADGAON', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068731, 068745, 003027, '2023-06-13', 1, 0, '', '', '', '', '17', NULL),
(289, 00059883, 445810512, 512, '13021000066', 'JAISWAL TRADERS 13 4346', 01, 'N', 060, 11, '', '', '', '.', '', '', 'PRO M R  JAISWAL', '', '', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 048121, 048180, 000066, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(290, 00059881, 445810512, 512, '13021000379', 'SHRI GAJANAN AGRO', 01, 'N', 030, 11, '', 'WASU DILIP JAGANNATH', '', 'Proprietor', '', '', 'DHOBE LAY OUT NEAR PANKAJ BAR', 'KALAMB DIST YAVATMAL', '', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 048091, 048120, 000379, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(291, 00059882, 445810512, 512, '13023000062', 'DESHPANDE CHANDRASHEKHAR BHAGWANTRAO         ', 01, 'N', 030, 10, '', '', '', '', '', '', 'SHIRE LAY OUT LAXMI NAGAR', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 043111, 043140, 000062, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(292, 00059884, 445810512, 512, '13021000216', 'SHIVA AGRO                                   ', 01, 'N', 030, 11, '', '', '', '', '', '', 'PROP VILAS DATTUJI SHRIRAME', 'AGRAWAL COM  COMPLEX', '', '', '', 'NEAR BUSSTAND  KALAM', '', '', '', 445401, '', '', '', '', 048181, 048210, 000216, '2023-06-13', 1, 0, '', '', '', '', '13', NULL),
(293, 00059876, 445810505, 505, '06021000400', 'BHAGYA MEDICAL AND GENERA STORES             ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR SHANKAR TALKIES DIGRAS', '', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068461, 068520, 000400, '2023-06-13', 1, 0, '', '', '', '', '06', NULL),
(294, 00059877, 445810505, 505, '06173000176', 'RAHUL MEDICALS AND GENER DIGRAS', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MANORA ROAD DIGRAS', 'C O NAIK HOSPITAL', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 077551, 077610, 000176, '2023-06-13', 1, 0, '', '', '', '', '06', NULL),
(295, 00059878, 445810505, 505, '06021000400', 'BHAGYA MEDICAL AND GENERA STORES             ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR SHANKAR TALKIES DIGRAS', '', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068521, 068580, 000400, '2023-06-13', 1, 0, '', '', '', '', '06', NULL),
(296, 00059879, 445810505, 505, '06021000400', 'BHAGYA MEDICAL AND GENERA STORES             ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR SHANKAR TALKIES DIGRAS', '', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068581, 068640, 000400, '2023-06-13', 1, 0, '', '', '', '', '06', NULL),
(297, 00059880, 445810505, 505, '06021000400', 'BHAGYA MEDICAL AND GENERA STORES             ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR SHANKAR TALKIES DIGRAS', '', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068641, 068700, 000400, '2023-06-13', 1, 0, '', '', '', '', '06', NULL),
(298, 00059901, 440800002, 002, '22021001791', 'NEST REALTORS', 01, 'N', 030, 11, '', '', '', '', '', '', 'PLOT NO 4 MALHAR', 'AMBAZARI DRIVE LAKE ', 'HINGNA ROAD', '', '', 'NAGPUR', '', '', '', 440016, '', '', '', '', 567201, 567230, 001791, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(299, 00059903, 440800002, 002, '22170000136', 'KAVERI FROZENS PRIVATE LIMITED               ', 01, 'N', 030, 13, '', 'GONNADE RAKESH VIJAYRAO', 'RATHI DILIPKUMAR TULSIRAMJI', 'Authorised Signatory', 'Authorised Signatory', '', '101 LAXMI ANAND BH RENUKA', 'MANDIR GANDHI PUTLA SQ', 'C A ROAD MAHAL ', '', '', 'NAGPUR', '', '', '', 440018, '', '', '', '', 006496, 006525, 000136, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(300, 00059907, 440800002, 002, '22021001792', 'MF INTERIOR DECORATOR', 01, 'N', 030, 11, '', '', '', '.', '', '', 'PLOT NO 21 VRUNDAVAN NAGAR ', 'NEAR HASANBAG POLICE CHOWKI ', 'NANDANVAN NAGPUR ', '', '', 'NAGPUR ', '', '', '', 440009, '', '', '', '', 567291, 567320, 001792, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(301, 00059904, 440800002, 002, '22023009427', 'MALATI ANANT GULHANE NIVADNUK ADHIKARI       ', 01, 'N', 015, 10, '', '', '', '', '', '', 'QUARTER NO 54 TYPE SHASKIYA ', 'VASAHAT RAVI NAGAR NAGPUR ', '', '', '', 'NAGPUR ', '', '', '', 440001, '', '', '', '', 210666, 210680, 009427, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(302, 00059905, 440800002, 002, '22023009429', 'SARIKA HEMANT KANHERE NIVADNUK ADHIKARI', 01, 'N', 015, 10, '', '', '', '', '', '', 'PLOT NO 28 HINGNA ROAD NEAR ', 'H P GAS GODOUN BABADE LAYOUT ', 'MAHAJAN WADI WANADONGRI ', '', '', 'NAGPUR ', '', '', '', 440022, '', '', '', '', 210681, 210695, 009429, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(303, 00059906, 440800002, 002, '22023009430', 'ASHA KAMLESH GAJBHIYE NIVADNUK ADHIKARI', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEW SUBHEDAR LAYOUT HANUMAN ', 'NAGAR NAGPUR ', '', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 210696, 210710, 009430, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(304, 00059902, 440800002, 002, '22021001714', 'SUN BRICKS AND BLOCKS', 01, 'N', 060, 11, '', '', '', '', '', '', 'HOUSE NO 1598 SHREE SAI ', 'BUILDING NEAR GAJANAN MAHARAJ ', 'SUBHASH NAGAR HINGNA ROAD', '', '', 'NAGPUR', '', '', '', 440022, '', '', '', '', 567231, 567290, 001714, '2023-06-13', 1, 0, '', '', '', '', '22', NULL),
(305, 00059896, 445810501, 501, '02023003904', 'YELCHELWAR RAJESH BHUMAREDDY', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT KAMALWELLI POST SATTAPALI', 'TQ ZARI DIST YAVATMAL', '', '', '', 'KAMALWELLI', '', '', '', 445305, '', '', '', '', 044751, 044780, 003904, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(306, 00059897, 445810501, 501, '02173000040', 'GANGSHETTIWAR KRISHI KENDRA  PATANBORI', 01, 'N', 030, 13, '', 'GANGASHETTIWAR MITHUN CHANDRASHEKHAR', '', 'Proprietor', '', '', 'MAIN ROAD PATANBORI ', 'TA PANDHARKAWADA', 'DIST YAVATMAL', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 052976, 053005, 000040, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(307, 00059898, 445810501, 501, '02023004178', 'CHUKKALWAR MOHAN BHUMNNA', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT KAMALVELLI POST SATPALLI', 'TQ ZARI JAMNI DIST YAVATMAL', '', '', '', 'KAMALVELLI ', '', '', '', 445305, '', '', '', '', 044781, 044810, 004178, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(308, 00059899, 445810501, 501, '02023007887', 'RAUT MANOHAR SURYABHAN', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT AHERALI POST SATPALLI', 'TQ ZARI JAMNI DIST YAVATMAL', 'DIST YAVATMAL', '', '', 'AHERALLI', '', '', '', 445305, '', '', '', '', 044811, 044840, 007887, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(309, 00059900, 445810501, 501, '02023005282', 'MISAR NAGESHWAR MADHAO', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT KAWATHA  POST PATANBORI', 'TQ KELPAUR DIST YAVATMAL', '', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 044841, 044870, 005282, '2023-06-13', 1, 0, '', '', '', '', '02', NULL),
(310, 00059910, 444810002, 002, '23023004902', 'KHIYANI SHARDA SURESHKUMAR', 01, 'N', 060, 10, '', '', '', '', '', '', 'KACCHI KHOLI', 'SINDHI CAMP BEHIND ', 'GURUNANAK', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044661, 044720, 004902, '2023-06-13', 1, 0, '', '', '', '', '23', NULL),
(311, 00059909, 441810002, 002, '29023001276', 'SHARMA CHETAN PURSHOTTAM', 01, 'N', 015, 10, '', 'SHARMA JYOTI CHETAN', '', '', '', '', 'S O PURSHOTTAM SHARMA ', 'MUNNA CHOUK NEAR DR  MOUJE ', 'MRRI ROAD GONDIA', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 024951, 024965, 001276, '2023-06-13', 1, 0, '', '', '', '', '29', NULL),
(312, 00059908, 445810004, 004, '17023009900', 'PANE ANKUSH RAMUJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT JAM WADI ', 'POST TIWASA', 'YAVATMAL', '', '', 'TIWASA', '', '', '', 445201, '', '', '', '', 068746, 068760, 009900, '2023-06-13', 1, 0, '', '', '', '', '17', NULL),
(313, 00059951, 442810152, 152, '35023002547', 'MARAPE SANTOSH DHODBAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT KARUL POST WASI', 'TALUKA SAMUDRAPUR', 'KARUL PAWANGAON', '', '', 'KARUL', '', '', '', 442305, '', '', '', '', 043796, 043810, 002547, '2023-06-14', 1, 0, '', '', '', '', '35', NULL),
(314, 00059952, 442810152, 152, '35023002548', 'KANOJE REENA BHAIYYALAL', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAVINDRANATH TIGOR', 'ROAD GOND PLOT', 'DIST WARDHA ', '', '', 'DIST WARDHA', '', '', '', 442001, '', '', '', '', 043811, 043825, 002548, '2023-06-14', 1, 0, '', '', '', '', '35', NULL),
(315, 00059950, 442810501, 501, '20173000117', 'GAMA PLY POINT', 01, 'N', 060, 13, '', '', '', '.', '', '', 'WARD NO 5 NEAR SARN SAW MILL', 'GADCHANDUR TA KORPANA', 'DT CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 044731, 044790, 000117, '2023-06-14', 1, 0, '', '', '', '', '20', NULL),
(316, 00059949, 442810501, 501, '20170000006', 'MEGA MOTORS PROP.ASHUTOSH W CHATAP', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'RAJURA ROAD NEAR RALWY GATE', 'AT PO GADCHANDUR TA KORPANA', 'DIST CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 002126, 002185, 000006, '2023-06-14', 1, 0, '', '', '', '', '20', NULL),
(317, 00059948, 445810514, 514, '16173000124', 'MAROTI AGROAGENCIES BABHULGAON', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAROTI AGRO AGENCIES', 'NEAR ALAHABAD BANK', 'VASTI ROAD ', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 070196, 070255, 000124, '2023-06-14', 1, 0, '', '', '', '', '16', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(318, 00059946, 440800003, 003, '25023000986', 'DAIWATKAR SUBHASH KRISHNARAO', 01, 'N', 030, 10, '', 'GADGE ARUN NARAYANRAO', '', '', '', '', 'NEAR ZULELAL MANDIR ', 'GANDHI SAGAR SUBHASH ROAD', 'MAHATMA FULE BAZAR ', '', '', 'NAGPUR', '', '', '', 440018, '', '', '', '', 019016, 019045, 000986, '2023-06-14', 1, 0, '', '', '', '', '25', NULL),
(319, 00059947, 440800003, 003, '25023000082', 'PANKAJ ASHOK BHANDARKAR                      ', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR KAMGAR KALYAN KENDRA', 'NEHRU WARD MENDHA', 'BHANDARA', '', '', 'BHANDARA', '', '', '', 441904, '', '', '', '', 019046, 019060, 000082, '2023-06-14', 1, 0, '', '', '', '', '25', NULL),
(320, 00059943, 445810503, 503, '04173000687', 'PANKAJ SWASTA AUSHADHI KENDRA GENERIC MEDICAL', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT  JATRA ROAD RAMPURA', 'WARD WANI TA  WANI', 'DIST  YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 150171, 150230, 000687, '2023-06-14', 1, 0, '', '', '', '', '04', NULL),
(321, 00059944, 445810503, 503, '04170000396', 'ADPAWAR DILIP RAMREDDY ', 01, 'N', 030, 13, '', '', '', '', '', '', 'RAVINAGAR WANI', 'TAH WANI ', 'DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 056886, 056915, 000396, '2023-06-14', 1, 0, '', '', '', '', '04', NULL),
(322, 00059941, 445810503, 503, '04023018346', 'GHONGE DAGNATH UDDHAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT NAVEGAON VIRKUND', 'POST MOHRLI', 'TA WANI DIST YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119256, 119270, 018346, '2023-06-14', 1, 0, '', '', '', '', '04', NULL),
(323, 00059942, 445810503, 503, '04023018630', 'BODHE BHASKAR UDHAV', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT DEVALA PO MARDI ', 'TA MAREGAON DI YAVATMAL', '', '', '', 'MAREGAON', '', '', '', 445303, '', '', '', '', 119271, 119285, 018630, '2023-06-14', 1, 0, '', '', '', '', '04', NULL),
(324, 00059945, 445810503, 503, '04023007252', 'BORDE TARENDRA GANGADHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHETKARI MANDIR ROAD WARD NO', '23 WANI TA WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119286, 119300, 007252, '2023-06-14', 1, 0, '', '', '', '', '04', NULL),
(325, 00059940, 444812101, 101, '19173000108', 'N K TRADERS', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'LADDHA COMPLEX BACHCHHRAJ PLOT', 'CHITRA CHOWK AMRAVATI', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 030011, 030070, 000108, '2023-06-14', 1, 0, '', '', '', '', '19', NULL),
(326, 00059939, 444812101, 101, '19023008305', 'DUBEY SWATI SATISH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AMBAGETA ROAD MAHAVIR TRADERS', 'SABUNPURA ', 'AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 083541, 083555, 008305, '2023-06-14', 1, 0, '', '', '', '', '19', NULL),
(327, 00059937, 445810511, 511, '12021000355', 'YASH GARMENTS PRO.LOKESH', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'AT PO WADKI TQ RALEGAON', '', '', '', '', 'WADKI', '', '', '', 445402, '', '', '', '', 060251, 060310, 000355, '2023-06-14', 1, 0, '', '', '', '', '12', NULL),
(328, 00059936, 445810511, 511, '12023007860', 'ZALKE PRAKASH JANARDAN', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PIMPALKHUTI PO ZADGAON ', 'TQ RALEGAON', 'DIST YAVATMAL ', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050191, 050205, 007860, '2023-06-14', 1, 0, '', '', '', '', '12', NULL),
(329, 00059938, 445810511, 511, '12023002349', 'INGOLE YOGESH NARAYANRAO', 01, 'N', 015, 10, '', 'INGOLE MANJUSHA YOGESH                       ', '', '', '', '', 'BARI PURA RALEGAON', 'WARD NO 3', 'TQ RALEGAON DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050206, 050220, 002349, '2023-06-14', 1, 0, '', '', '', '', '12', NULL),
(330, 00059931, 445810502, 502, '03021000775', 'RAJRAJESHWAR PROTINS PVT LTD', 01, 'N', 060, 11, '', '', '', '', '', '', 'PLOT NO1 DATTARAMPUR TAL ARNI', 'PLOT NO1 DATTARAMPUR TAL ARNI', 'PLOT NO1 DATTARAMPUR TAL ARNI', '', '', 'DATTARAMPUR', '', '', '', 445103, '', '', '', '', 182371, 182430, 000775, '2023-06-14', 1, 0, '', '', '', '', '03', NULL),
(331, 00059932, 445810502, 502, '03173000420', 'JAISWAL RAJESH HARDEVLAL', 01, 'N', 060, 13, '', '', '', '', '', '', 'AT POST SAWALI TQ  ARNI', 'DIST  YAVATMAL', '', '', '', 'SAWALI SADOBA', '', '', '', 445103, '', '', '', '', 120711, 120770, 000420, '2023-06-14', 1, 0, '', '', '', '', '03', NULL),
(332, 00059933, 445810502, 502, '03173000443', 'SHIV AGRO TRADERS ARNI', 01, 'N', 060, 13, '', '', '', '', '', '', 'GANESH MARKET NEAR BUS STAND', 'ARNI DIST YAVATMAL', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 120771, 120830, 000443, '2023-06-14', 1, 0, '', '', '', '', '03', NULL),
(333, 00059934, 445810502, 502, '03173000472', 'JITENDRA ENTERPRISES PROP.BAGDAI', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT POST NEAR OLD TAHSIL ARNI', 'TQ ARNI                  ', 'DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 120831, 120890, 000472, '2023-06-14', 1, 0, '', '', '', '', '03', NULL),
(334, 00059935, 445810502, 502, '03021000644', '  JIJAU GENRAL DAILYNEEDS                    ', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'JIJAU GENRAL AND DAILY NEEDS', 'NEAR BUS STAND ARNI', 'AT PO ARNI', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182431, 182490, 000644, '2023-06-14', 1, 0, '', '', '', '', '03', NULL),
(335, 00059929, 445810506, 506, '07021000963', 'MAHAVIR KRUSHI KENDRA', 01, 'N', 060, 11, '', 'RAJESH SURAJMALJI SINGVI', '', 'Proprietor', '', '', 'AT POST MARAWADI CHOUK NER', 'TQ NER', 'DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092101, 092160, 000963, '2023-06-14', 1, 0, '', '', '', '', '07', NULL),
(336, 00059930, 445810506, 506, '07023006422', 'MO.JUNED MO.ADAM MARCHIYA', 01, 'N', 015, 10, '', '', '', '', '', '', 'TADAKPURA NER', '', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047596, 047610, 006422, '2023-06-14', 1, 0, '', '', '', '', '07', NULL),
(337, 00059926, 445810510, 510, '11021001187', 'JAISWAL SAROJANI ISHWARLAL', 01, 'N', 060, 11, '', '', '', '', '', '', 'AT POST MAHATOLI TAL DARWHA ', 'DIST YAVATMAL', '', '', '', 'DARWHA ', '', '', '', 445202, '', '', '', '', 075581, 075640, 001187, '2023-06-14', 1, 0, '', '', '', '', '11', NULL),
(338, 00059927, 445810510, 510, '11021001109', 'SAKSHI AGRO AGENCY', 01, 'N', 060, 11, '', '', '', '', '', '', 'WARD NO 1HOUSE NO 1107 TALEGAO', 'N TA DARWHA', 'DIST YAVATMAL', '', '', 'TALEGAON', '', '', '', 445202, '', '', '', '', 075641, 075700, 001109, '2023-06-14', 1, 0, '', '', '', '', '11', NULL),
(339, 00059928, 445810510, 510, '11173000121', 'ADITYA AGRO AGENCY', 01, 'N', 060, 13, '', '', '', '', '', '', 'AT SHENDRI BK TA DARWHA', 'DIST YAVATMAL', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 146771, 146830, 000121, '2023-06-14', 1, 0, '', '', '', '', '11', NULL),
(340, 00059924, 445810509, 509, '10170000065', 'MAA ASHAPURA GINNING MILL PANDHARKAWADA', 01, 'N', 060, 13, '', '', '', '', '', '', 'MANGURDA ROAD', 'PANDHARKAWADA', '', '', '', 'DIST- YAVATMAL', '', '', '', 445302, '', '', '', '', 028041, 028100, 000065, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(341, 00059925, 445810509, 509, '10023001249', 'THAKRE PRAKASH URAKUDAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'MU BORGAON PO AKOLI', 'TA KELAPUR DIS YAVATMAL', '', '', '', 'BOREGAON', '', '', '', 445302, '', '', '', '', 064326, 064340, 001249, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(342, 00059922, 442810102, 102, '18021001505', 'MODERN WEAR HOUSE', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'MORDEN WAER HOUSE', 'KASTRUBA ROAD', 'CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442402, '', '', '', '', 145846, 145905, 001505, '2023-06-14', 1, 0, '', '', '', '', '18', NULL),
(343, 00059923, 442810102, 102, '18023004974', 'KHATI AARTI RANJAN', 01, 'N', 030, 10, '', '', '', '', '', '', 'KRUSHNABAN APARTMENT', 'SAMADHI WARD', '', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 077761, 077790, 004974, '2023-06-14', 1, 0, '', '', '', '', '18', NULL),
(344, 00059920, 445810508, 508, '09023003422', 'PATIL RAJKUMAR VASANTRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT KARANJI PO BITRGAON', 'TQ UMARKHAD', 'DIST YAVATMAL', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041291, 041305, 003422, '2023-06-14', 1, 0, '', '', '', '', '09', NULL),
(345, 00059921, 445810508, 508, '09023000435', 'KALORE GAJANAN VASANTRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT KARANJI POST AKOLI', 'TQ UMARKHED ', 'DIS YAVATMAL', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041306, 041320, 000435, '2023-06-14', 1, 0, '', '', '', '', '09', NULL),
(346, 00059919, 445810102, 102, '14021000711', 'GURUMAULI AGRO AGENCIES PUSAD', 01, 'N', 060, 11, '', '', '', '.', '', '', 'GURUMAULI AGROAGENCIES PUSAD', 'SHIVAJI WARD CHOWK ', 'MAIN ROAD PUSAD', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 090736, 090795, 000711, '2023-06-14', 1, 0, '', '', '', '', '14', NULL),
(347, 00059918, 445810507, 507, '08023020124', 'TEJANI SHAHANAJA PYARALI', 01, 'N', 030, 10, '', '', '', '', '', '', 'GEDAM NAGAR YAVATMAL', 'TA DI YAVATMAL', '', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082151, 082180, 020124, '2023-06-14', 1, 0, '', '', '', '', '08', NULL),
(348, 00059916, 445810504, 504, '05023009886', 'DHOKE SUMIT VIJAY', 01, 'N', 030, 10, '', '', '', '', '', '', 'VIVEKANAND COLONY AT POST', 'UMARKHED DIS YAVATMAL', 'TQ UMARKHED DIS YAVATMAL', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 055766, 055795, 009886, '2023-06-14', 1, 0, '', '', '', '', '05', NULL),
(349, 00059917, 445810504, 504, '05021000833', 'DANISH KIRANA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'TATAR SHAHA WARD ROHALI ', 'UMARKHED', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 091411, 091470, 000833, '2023-06-14', 1, 0, '', '', '', '', '05', NULL),
(350, 00059956, 445810509, 509, '10170000065', 'MAA ASHAPURA GINNING MILL PANDHARKAWADA', 01, 'N', 060, 13, '', '', '', '', '', '', 'MANGURDA ROAD', 'PANDHARKAWADA', '', '', '', 'DIST- YAVATMAL', '', '', '', 445302, '', '', '', '', 028151, 028210, 000065, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(351, 00059957, 445810509, 509, '10173000107', 'SWASTIK PLYWOOD AND GLASS', 01, 'N', 060, 13, '', '', '', '.', '', '', 'COTTON MARKET WARD ', 'AT PANDHRKAWADA DIST YAVATMAL', '', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 046491, 046550, 000107, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(352, 00059958, 445810509, 509, '10170000065', 'MAA ASHAPURA GINNING MILL PANDHARKAWADA', 01, 'N', 060, 13, '', '', '', '', '', '', 'MANGURDA ROAD', 'PANDHARKAWADA', '', '', '', 'DIST- YAVATMAL', '', '', '', 445302, '', '', '', '', 028426, 028485, 000065, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(353, 00059959, 445810509, 509, '10021000510', 'SAHAYOG MULTISTATE CREDIT CO OP SOC', 01, 'N', 030, 11, '', 'WASNIK VILAS RAMLAL', 'SAWANT DATTATRYA SHYAMRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'AABAD BHAVAN TAGORE CHOUK WANI', 'TQ WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 059951, 059980, 000510, '2023-06-14', 1, 0, '', '', '', '', '10', NULL),
(354, 00059991, 445810514, 514, '16023000968', 'KALE PARAG DHYANESHWAER', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO GANORI TQ BABHULGAON', 'DIST YAVATMAL', '', '', '', 'GANORI', '', '', '', 445101, '', '', '', '', 045546, 045560, 000968, '2023-06-14', 1, 0, '', '', '', '', '16', NULL),
(355, 00059992, 445810514, 514, '16177004757', 'JICHKAR SHUBHAM DHANANJAY', 01, 'N', 030, 13, '', '', '', '', '', '', 'AT GAWANDI POST KHARDA', 'TQ BABHULGAON', 'DIST YAVATMAL', '', '', 'GAWANDI', '', '', '', 445101, '', '', '', '', 070051, 070080, 004757, '2023-06-14', 1, 0, '', '', '', '', '16', NULL),
(356, 00059988, 440800002, 002, '22021001335', 'DAULATKAR SHAILENDRA PRAKASHRAO              ', 01, 'N', 060, 11, '', '', '', '', '', '', 'FLAT NO 101 UNIVERSAL MARVEL', 'NEAR CHATRAPATI SQUARE', 'WARDHA ROAD', '', '', 'NAGPUR', '', '', '', 440015, '', '', '', '', 567321, 567380, 001335, '2023-06-14', 1, 0, '', '', '', '', '22', NULL),
(357, 00059989, 440800002, 002, '22021001764', 'VISHWANATH DEVELOPERS', 01, 'N', 060, 11, '', '', '', '', '', '', 'SHOP NO 12 SANSKRUTI SANKUL', 'ZASHI RANI CHOUCK', 'SITABARDI NAGPUR', '', '', 'NAGPUR', '', '', '', 440012, '', '', '', '', 567381, 567440, 001764, '2023-06-14', 1, 0, '', '', '', '', '22', NULL),
(358, 00059990, 440800002, 002, '22021001763', 'S S R DEVELOPERS', 01, 'N', 060, 11, '', '', '', '', '', '', 'NKY TOWER WARDHA ROAD ', '', '', '', '', 'NAGPUR', '', '', '', 440010, '', '', '', '', 567441, 567500, 001763, '2023-06-14', 1, 0, '', '', '', '', '22', NULL),
(359, 00059978, 444810202, 202, '30021000194', 'SADGURU TRADING COMPANY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SADGURU TRADING CO', 'KANHERGAON NAKA KANERGAON', 'TQ DIST HINGOLI', '', '', 'HINGOLI', '', '', '', 431513, '', '', '', '', 055876, 055935, 000194, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(360, 00059979, 444810202, 202, '30021000194', 'SADGURU TRADING COMPANY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SADGURU TRADING CO', 'KANHERGAON NAKA KANERGAON', 'TQ DIST HINGOLI', '', '', 'HINGOLI', '', '', '', 431513, '', '', '', '', 055936, 055995, 000194, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(361, 00059980, 444810202, 202, '30021000194', 'SADGURU TRADING COMPANY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SADGURU TRADING CO', 'KANHERGAON NAKA KANERGAON', 'TQ DIST HINGOLI', '', '', 'HINGOLI', '', '', '', 431513, '', '', '', '', 055996, 056055, 000194, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(362, 00059981, 444810202, 202, '30021000194', 'SADGURU TRADING COMPANY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SADGURU TRADING CO', 'KANHERGAON NAKA KANERGAON', 'TQ DIST HINGOLI', '', '', 'HINGOLI', '', '', '', 431513, '', '', '', '', 056056, 056115, 000194, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(363, 00059982, 444810202, 202, '30021000194', 'SADGURU TRADING COMPANY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SADGURU TRADING CO', 'KANHERGAON NAKA KANERGAON', 'TQ DIST HINGOLI', '', '', 'HINGOLI', '', '', '', 431513, '', '', '', '', 056116, 056175, 000194, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(364, 00059983, 444810202, 202, '30021000115', 'V AND H TRADERS', 01, 'N', 060, 11, '', 'JADHAO GOVIND NAMDEO', '', 'Proprietor', '', '', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056176, 056235, 000115, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(365, 00059984, 444810202, 202, '30021000115', 'V AND H TRADERS', 01, 'N', 060, 11, '', 'JADHAO GOVIND NAMDEO', '', 'Proprietor', '', '', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056236, 056295, 000115, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(366, 00059985, 444810202, 202, '30021000115', 'V AND H TRADERS', 01, 'N', 060, 11, '', 'JADHAO GOVIND NAMDEO', '', 'Proprietor', '', '', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056296, 056355, 000115, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(367, 00059986, 444810202, 202, '30021000115', 'V AND H TRADERS', 01, 'N', 060, 11, '', 'JADHAO GOVIND NAMDEO', '', 'Proprietor', '', '', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056356, 056415, 000115, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(368, 00059987, 444810202, 202, '30021000115', 'V AND H TRADERS', 01, 'N', 060, 11, '', 'JADHAO GOVIND NAMDEO', '', 'Proprietor', '', '', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', 'APMC MARKET YARD NANDIPETH', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056416, 056475, 000115, '2023-06-14', 1, 0, '', '', '', '', '30', NULL),
(369, 00059976, 445810004, 004, '17023010162', 'AVAZANAKAR PRAMOD RAMKRISHNA', 01, 'N', 015, 10, '', 'AWAZANKAR VANDANA PRAMODRAO', '', '', '', '', 'NEAR JILLA PARISHAD SCHOOL', 'DHARMAJI NAGAR ', 'WADGAON', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068761, 068775, 010162, '2023-06-14', 1, 0, '', '', '', '', '17', NULL),
(370, 00059977, 445810004, 004, '17173000035', 'YOGESH MEDICAL', 01, 'N', 060, 13, '', '', '', '.', '', '', 'THAKRE SADAN SHASHTRI NAGAR', 'DATE COLLEGE ROAD YTL', '', '', '', 'YTL', '', '', '', 445001, '', '', '', '', 041151, 041210, 000035, '2023-06-14', 1, 0, '', '', '', '', '17', NULL),
(371, 00059999, 445810002, 002, '01023255977', 'PANKE SHRIKANT DAMODHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'SAI SHREE APPARTMENT', 'MAINDE CHOWK', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249686, 249700, 255977, '2023-06-14', 1, 0, '', '', '', '', '01', NULL),
(372, 00060000, 445810002, 002, '01023041749', 'RATHI KAVITA HIRALALJI', 01, 'N', 015, 10, '', 'RATHI HIRALAL MOHANLAL', '', '', '', '', 'MAHESH NAGARI SBI CHOWK', 'VIJAY TILES ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249701, 249715, 041749, '2023-06-14', 1, 0, '', '', '', '', '01', NULL),
(373, 00060001, 445810002, 002, '01021003006', 'EROS MEDICALS AND GENERAL STORES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'ROBIN LAY OUT PANDHARKAWDA', 'ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332601, 332660, 003006, '2023-06-14', 1, 0, '', '', '', '', '01', NULL),
(374, 00060002, 445810002, 002, '01173000232', 'SMRUTI GENERAL STORE', 01, 'N', 060, 13, '', 'SAKALECHA VIRENDRAKUMAR KANTILAL', '', 'Proprietor', '', '', 'ANAND BHAWAN AWADUTWADI', 'LALA BUILDING', 'AWADHUTWADI', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 265776, 265835, 000232, '2023-06-14', 1, 0, '', '', '', '', '01', NULL),
(375, 00059996, 445810003, 003, '15177010361', 'KULKARNI ASHISH SUDHIR', 01, 'N', 030, 13, '', '', '', '', '', '', 'SUYOG NAGAR NEAR SUMAN VIHAR A', 'PPT  LOHARA ROAD  YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 012801, 012830, 010361, '2023-06-14', 1, 0, '', '', '', '', '15', NULL),
(376, 00059997, 445810003, 003, '15023008670', 'MANWAR MADHUKAR VYANKATRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST BHAM RAJA DIS YTL', '', '', '', '', 'BHAMRAJA', '', '', '', 445001, '', '', '', '', 078656, 078670, 008670, '2023-06-14', 1, 0, '', '', '', '', '15', NULL),
(377, 00059998, 445810003, 003, '15021000819', 'MANDHANA SILK HOUSE', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'MANDHANA BHAVAN', 'AZAD MAIDAN ROAD', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 124271, 124330, 000819, '2023-06-14', 1, 0, '', '', '', '', '15', NULL),
(378, 00060051, 442810501, 501, '20023001785', 'GORE RAJANI ARUN', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 5 AT PO GADCHANDUR', 'TA KORPANA DIST CHANDRAPUR', '', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 062931, 062945, 001785, '2023-06-15', 1, 0, '', '', '', '', '20', NULL),
(379, 00060052, 442810501, 501, '20173000116', 'ARADHANA ENTERPRISES', 01, 'N', 060, 13, '', '', '', '.', '', '', 'WARD NI 5 GADCHANDUR', 'TAH KORPANA', 'DIST CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 044791, 044850, 000116, '2023-06-15', 1, 0, '', '', '', '', '20', NULL),
(380, 00060050, 445810002, 002, '01021000582', 'CHINTAMANI KRUSHI KENDRA KALAMB', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'NEAR BUS STATION KALAMB', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332661, 332720, 000582, '2023-06-15', 1, 0, '', '', '', '', '01', NULL),
(381, 00060048, 440800003, 003, '25023270067', 'LOKHANDE SANJAY RAMBHAU', 01, 'N', 015, 10, '', '', '', '', '', '', 'B1 10 PATRAKAR SAHNIWAS', 'AMARAVATI ROAD', 'NEAR MAHARAJ BAG ', '', '', 'NAGPUR', '', '', '', 440001, '', '', '', '', 019061, 019075, 270067, '2023-06-15', 1, 0, '', '', '', '', '25', NULL),
(382, 00060049, 440800003, 003, '25023270639', 'SAMARTH PURUSHOTTAM PUNDLIKRAO               ', 01, 'N', 015, 10, '', 'SAMARTH VILAS PURUSHOTTAM', '', '', '', '', 'PLOT NO 144 GOVERMENT PRESS ', 'COLONY DABHA WADI ', '', '', '', 'NAGPUR', '', '', '', 440023, '', '', '', '', 019076, 019090, 270639, '2023-06-15', 1, 0, '', '', '', '', '25', NULL),
(383, 00060047, 445810503, 503, '04173000678', 'SHRI PANDE AND SONS', 01, 'N', 060, 13, '', '', '', '', '', '', 'JATASHANKAR CHOWK WANI', 'TQ WANI DIST YAVATMAL', '', '', '', 'WANI           ', '', '', '', 445304, '', '', '', '', 150231, 150290, 000678, '2023-06-15', 1, 0, '', '', '', '', '04', NULL),
(384, 00060045, 445810503, 503, '04177100004', 'SHUKLA RAHUL SURESHRAO', 01, 'N', 045, 13, '', '', '', '', '', '', 'SHREEKRUSHNA BHAVAN', 'NEAR SHRIKRUSHNA BHAVAN ', 'OLD SBI ROAD WANI', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 001311, 001355, 100004, '2023-06-15', 1, 0, '', '', '', '', '04', NULL),
(385, 00060046, 445810503, 503, '04023014409', 'PAL ARVIND JANTA', 01, 'N', 015, 10, '', '', '', '', '', '', 'YAVATMAL ROAD NEAR', 'GRAMPANCHYAYAT MORE', 'NAGAR WARD NO 3 CHIKHALGAON', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119301, 119315, 014409, '2023-06-15', 1, 0, '', '', '', '', '04', NULL),
(386, 00060044, 440800002, 002, '22021001793', 'VIRAJ CONSULTANCY AND CONSTRUCTION', 01, 'N', 030, 11, '', '', '', '.', '', '', 'PLOT NO 31 NEAR GULMOHAR BAR ', 'GHARKUL HOUSING BESA NAGPUR ', '', '', '', 'NAGPUR ', '', '', '', 440034, '', '', '', '', 567501, 567530, 001793, '2023-06-15', 1, 0, '', '', '', '', '22', NULL),
(387, 00060042, 444812101, 101, '19170000125', 'SS CAFE CORNER AND CHINESE                   ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'DATERAO COLLONY ', 'OPP NANADANVAN COLLONY', 'RUKHAMINI NAGAR', '', '', 'AMRAVATI', '', '', '', 444606, '', '', '', '', 049186, 049245, 000125, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(388, 00060043, 444812101, 101, '19021000637', 'SHRI VINAYAK ELECTRICAL AND GENERAL          ', 01, 'N', 030, 11, '', '', '', '.', '', '', 'BALAJI PLOT AMRAVATI', '', '264500816485', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 127866, 127895, 000637, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(389, 00060039, 445810511, 511, '12177005175', 'FATING NAMDEORAO DEVAJI', 01, 'N', 060, 13, '', '', '', '', '', '', 'AT MATA NAGAR WARD NO 6', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 057116, 057175, 005175, '2023-06-15', 1, 0, '', '', '', '', '12', NULL),
(390, 00060040, 445810511, 511, '12023003422', 'LOHAKARE SUDHAKAR SURYABHAN', 01, 'N', 015, 10, '', '', '', '', '', '', '06 RAJANI PARK NEAR BALAJI ', 'MANGALAM PIMPALGAON ROAD', 'PIMPALGAON YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 050221, 050235, 003422, '2023-06-15', 1, 0, '', '', '', '', '12', NULL),
(391, 00060041, 445810511, 511, '12023007564', 'AMBATKAR AMOL VINAYAKRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT DAPORI POST DHANORA ', 'TQ RALEGAON ', 'DIST YAVATMAL', '', '', 'RALEGAON ', '', '', '', 445402, '', '', '', '', 050236, 050250, 007564, '2023-06-15', 1, 0, '', '', '', '', '12', NULL),
(392, 00060034, 445810502, 502, '03170000083', 'MANUDAS GINNING FACTORY BORGAON', 01, 'N', 060, 13, '', '', '', '', '', '', 'BORGAON  DABHADI  TQ ARNI', 'DIST YAVATMAL ', '', '', '', 'BORGAON', '', '', '', 445103, '', '', '', '', 104526, 104585, 000083, '2023-06-15', 1, 0, '', '', '', '', '03', NULL),
(393, 00060035, 445810502, 502, '03023007715', 'RATHI RADHESHYAM PREMRAJ', 01, 'N', 015, 10, '', '', '', '', '', '', ' SANSKAR COLLECTION', 'ARNI  TQ ARNI ', '', '', '', 'DIST.YAVATMAL.', '', '', '', 445103, '', '', '', '', 053061, 053075, 007715, '2023-06-15', 1, 0, '', '', '', '', '03', NULL),
(394, 00060036, 445810502, 502, '03021000587', 'SHRI MAULI AGRO AGNCIES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'MAIN ROAD ARNI TQ ARNI ', 'MAIN ROAD ARNI TQ ARNI ', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182491, 182550, 000587, '2023-06-15', 1, 0, '', '', '', '', '03', NULL),
(395, 00060037, 445810502, 502, '03170000083', 'MANUDAS GINNING FACTORY BORGAON', 01, 'N', 060, 13, '', '', '', '', '', '', 'BORGAON  DABHADI  TQ ARNI', 'DIST YAVATMAL ', '', '', '', 'BORGAON', '', '', '', 445103, '', '', '', '', 104586, 104645, 000083, '2023-06-15', 1, 0, '', '', '', '', '03', NULL),
(396, 00060038, 445810502, 502, '03173000505', 'MANUDAS KRUSHI KENDRA', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT POST BORGAON TAL ARNI', 'AT POST BORGAON TAL ARNI', 'AT POST BORGAON TAL ARNI', '', '', 'BORGAON', '', '', '', 445103, '', '', '', '', 120891, 120950, 000505, '2023-06-15', 1, 0, '', '', '', '', '03', NULL),
(397, 00060031, 445810506, 506, '07023005976', 'GUGALIYA RASHMI SANDIP', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAHAVIR CHOWK', 'NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047611, 047625, 005976, '2023-06-15', 1, 0, '', '', '', '', '07', NULL),
(398, 00060032, 445810506, 506, '07023004508', 'LUKKAD SUBHASH INDARCHANDJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO SHIVAJI NAGAR ', 'TA NER DIST YAVATMAL', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047626, 047640, 004508, '2023-06-15', 1, 0, '', '', '', '', '07', NULL),
(399, 00060033, 445810506, 506, '07023001281', 'YELANE VINA ASHOKRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'BEHIND SHIVAJI SATACHU', 'SHIVAJI NAGAR WARD NO 1', 'NER', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047641, 047655, 001281, '2023-06-15', 1, 0, '', '', '', '', '07', NULL),
(400, 00060030, 445810510, 510, '11023000734', 'MOR GOPAL ONKARMAL', 01, 'N', 060, 10, '', '', '', '', '', '', 'BALAJI NAGAR DARWHA', 'DARWHA', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 094571, 094630, 000734, '2023-06-15', 1, 0, '', '', '', '', '11', NULL),
(401, 00060026, 445810509, 509, '10023010247', 'YAMSANWAR ASANG MANOHARRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST TA PANDHARKAWADA  ', 'DIST YAVATMAL', '', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064341, 064355, 010247, '2023-06-15', 1, 0, '', '', '', '', '10', NULL),
(402, 00060027, 445810509, 509, '10023010533', 'BOGAWAT NITIN SHANTILAL', 01, 'N', 015, 10, '', '', '', '', '', '', 'JAINMANDIR ROAD PANDHARKAWADA', 'KELAPUR DIST YAVATMAL', 'VATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064356, 064370, 010533, '2023-06-15', 1, 0, '', '', '', '', '10', NULL),
(403, 00060028, 445810509, 509, '10023011848', 'SANJAY KISHOR DHADVE', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT BELORI PO CHALBARDI ', 'TQ KELAPUR ', 'DI YAVATMAL', '', '', 'BELORI', '', '', '', 445302, '', '', '', '', 064371, 064385, 011848, '2023-06-15', 1, 0, '', '', '', '', '10', NULL),
(404, 00060029, 445810509, 509, '10170000065', 'MAA ASHAPURA GINNING MILL PANDHARKAWADA', 01, 'N', 060, 13, '', '', '', '', '', '', 'MANGURDA ROAD', 'PANDHARKAWADA', '', '', '', 'DIST- YAVATMAL', '', '', '', 445302, '', '', '', '', 028651, 028710, 000065, '2023-06-15', 1, 0, '', '', '', '', '10', NULL),
(405, 00060025, 442810102, 102, '18177003025', 'RAYAT NAGRI SAHAKARI PATASANSTHA', 01, 'N', 060, 13, '', '', '', 'Authorised Signatory', 'Authorised Signatory', '', 'NAGINABAG SISTER COLONY NEAR', 'DWANI APARTMENT  BIN', 'BA ROAD', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 009726, 009785, 003025, '2023-06-15', 1, 0, '', '', '', '', '18', NULL),
(406, 00060024, 445810508, 508, '09021000339', 'OM COLOURSAND BUILDING', 01, 'N', 060, 11, '', '', '', '.', '', '', 'SANT GAJANAN NAGAR UMARKHED', 'TQ UMARKHED', 'DIST YAVATMAL', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 034376, 034435, 000339, '2023-06-15', 1, 0, '', '', '', '', '09', NULL),
(407, 00060023, 445810102, 102, '14021000598', 'SHRIKANT SWEET MART', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'PAPINWAR SUNIL PRABHAKAR', 'NEAR PAPINWAR GALLI', 'BALAJI WARD NO 11', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 090796, 090855, 000598, '2023-06-15', 1, 0, '', '', '', '', '14', NULL),
(408, 00060021, 445810512, 512, '13023000632', 'KOTHARI NARENDRA SHANTILAL                   ', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT MAWALNI PO SONEGAON', 'TQ KALAMB DIST YAVATMAL', '', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 043141, 043155, 000632, '2023-06-15', 1, 0, '', '', '', '', '13', NULL),
(409, 00060022, 445810507, 507, '08173000154', 'AMBIKA KRUSHI KENDRA 08 47811', 01, 'N', 060, 13, '', '', '', 'Proprietor', 'Proprietor', '', 'AMBIKA COMPLEX NEHARU NAGAR', 'GHATANJI DIST YAVATM', 'AL', '', '', 'GHATNAJI', '', '', '', 445301, '', '', '', '', 036976, 037035, 000154, '2023-06-15', 1, 0, '', '', '', '', '08', NULL),
(410, 00060019, 445810504, 504, '05023004382', 'JAGAT GOPAL SURYAKANT', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT VIDUL TQ UAMRKHED ', 'DIST YAVATMAL', '', '', '', 'UMARKHED ', '', '', '', 445206, '', '', '', '', 055796, 055825, 004382, '2023-06-15', 1, 0, '', '', '', '', '05', NULL),
(411, 00060020, 445810504, 504, '05023008598', 'GIRI ASHOK MADHAVRAO', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT PO MARSUL TQ UMARKHED', 'AT PO MARSUL TQ UMARKHED', 'DIST YAVATMAL', '', '', 'MARSUL', '', '', '', 445206, '', '', '', '', 055826, 055855, 008598, '2023-06-15', 1, 0, '', '', '', '', '05', NULL),
(412, 00060017, 445810505, 505, '06023010256', 'INGOLE YOGESH MOTIRAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'OLD POLICE STATION ROAD', 'NEAR KAMAN GATE', 'DIGRAS DIST YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039106, 039120, 010256, '2023-06-15', 1, 0, '', '', '', '', '06', NULL),
(413, 00060018, 445810505, 505, '06173000179', 'RIDDHI MEDICAL  GENERAL DIGRAS               ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'NEAR BIG MAROTI MANDIR DIGRAS', 'TQ DIGRAS', 'DIST YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 077701, 077760, 000179, '2023-06-15', 1, 0, '', '', '', '', '06', NULL),
(414, 00060016, 442810252, 252, '21023000272', 'BHADRANAG SWAMI DEVSTAN VISHWASTH MANDAL', 01, 'N', 060, 10, '', '', '', '', '', '', 'NAGH MANDIR', 'BHADRAWATI', '', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 040891, 040950, 000272, '2023-06-15', 1, 0, '', '', '', '', '21', NULL),
(415, 00060062, 440800003, 003, '25023270036', 'JUGADE SUNIL RAMCHANDRA 27 387', 01, 'N', 030, 10, '', '', '', '', '', '', 'PLOT 111 DA', 'DATTATRY NAGAR', 'NAGPUR NAGPUR', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 019091, 019120, 270036, '2023-06-15', 1, 0, '', '', '', '', '25', NULL),
(416, 00060057, 445810004, 004, '17023008380', 'PARDESHI SHITAL SHAM', 01, 'N', 015, 10, '', '', '', '', '', '', ' S 1 RAJMAHAL APARTMENT', 'RANAPRATAP NAGAR', 'ARNI ROAD ', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068776, 068790, 008380, '2023-06-15', 1, 0, '', '', '', '', '17', NULL),
(417, 00060061, 445810004, 004, '17023007868', 'WANKHADE MAHESH DATTATRAY', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 4 AMARAIPURA', 'UTTAM TALKIES ROAD ARNI', 'C O ASHOK PADUTWAR 85 HANUMAN ', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 068791, 068805, 007868, '2023-06-15', 1, 0, '', '', '', '', '17', NULL),
(418, 00060058, 445810004, 004, '17021000453', 'SHREEJI RESTAURANT AND WINE BAR              ', 01, 'N', 060, 11, '', '', '', '', '', '', 'OM SOCIETY', 'ARNI ROAD', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 080416, 080475, 000453, '2023-06-15', 1, 0, '', '', '', '', '17', NULL),
(419, 00060060, 445810004, 004, '17021000698', 'M S BEER SHOPEY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'HOTAL RAJDHANI JAVAL ', 'ARNI ROAD ARNI NAKA', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 080506, 080565, 000698, '2023-06-15', 1, 0, '', '', '', '', '17', NULL),
(420, 00060059, 445810004, 004, '17021000563', 'SUNNY WINEBAR ANDRESTARANT', 01, 'N', 030, 11, '', '', '', '.', '', '', 'ARNI ROAD OM SICIETY', 'YAVATMAL', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 080476, 080505, 000563, '2023-06-15', 1, 0, '', '', '', '', '17', NULL),
(421, 00060056, 442810252, 252, '21023000050', 'SATPUTE SACHIN PRAKASHRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'FLAT NO A 703 A WING', 'JAYANTI NAGARI 5 NEAR MANTRA ', 'CELEBRATION BESA NAGPUR ', '', '', 'BHADRAWATI', '', '', '', 440037, '', '', '', '', 040951, 040965, 000050, '2023-06-15', 1, 0, '', '', '', '', '21', NULL),
(422, 00060090, 442810102, 102, '18023011366', 'KONDELWAR RAJESHWAR RAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'OPP MAJOR GATE KESHRI NANDAN ', 'NAGAR URJA NAGAR', 'CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442404, '', '', '', '', 077791, 077805, 011366, '2023-06-15', 1, 0, '', '', '', '', '18', NULL),
(423, 00060092, 442810102, 102, '18023004349', 'MUPKALWAR SHOBHA NAMDEV                      ', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAMKRUSHNA CHOWK', 'WANKHEDE WADI MAHESH', 'NAGAR TUKUM', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 077806, 077820, 004349, '2023-06-15', 1, 0, '', '', '', '', '18', NULL),
(424, 00060093, 442810102, 102, '18023000432', 'MUPKALWAR NAGENDRA NAMDEO', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAHESH NAGAR RAMKRISHNA ', 'CHOWK WANKHEDE WADI ', 'TUKUM CHANDRAPUR', '', '', 'CHANDRAPUR', '', '', '', 442401, '', '', '', '', 077821, 077835, 000432, '2023-06-15', 1, 0, '', '', '', '', '18', NULL),
(425, 00060091, 442810102, 102, '18021001465', 'RENUKA SADI AND DRESS MATERIAL', 01, 'N', 030, 11, '', '', '', 'Proprietor', '', '', 'S O SAMPAT BOKADE', 'EKTA KRIDA MANDAL', 'BHIWAPUR WARD', '', '', 'CHANDRAPUR', '', '', '', 442402, '', '', '', '', 145906, 145935, 001465, '2023-06-15', 1, 0, '', '', '', '', '18', NULL),
(426, 00060085, 444812101, 101, '19170000124', 'KALYANI PROVISIONS', 01, 'N', 060, 13, '', '', '', '.', '', '', 'PROP RAVINDRA S GULHANE', 'NAMUNA LANE NO 5 AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 049276, 049335, 000124, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(427, 00060086, 444812101, 101, '19170000124', 'KALYANI PROVISIONS', 01, 'N', 060, 13, '', '', '', '.', '', '', 'PROP RAVINDRA S GULHANE', 'NAMUNA LANE NO 5 AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 049426, 049485, 000124, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(428, 00060088, 444812101, 101, '19021001058', 'RAGHUVIR MITHAIYA AMRAVATI', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NAER SHYAM TALKIES', 'SHYAM CHOWK', '', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 127896, 127955, 001058, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(429, 00060087, 444812101, 101, '19023007911', 'GOSAVI KAVITA SUBHASHPURI', 01, 'N', 015, 10, '', '', '', '', '', '', 'CO PAVAN S GOSAVI ', 'LAKSMISHRI APPT ASHIYAD COLONY', 'SHEGAON NAKA RAHATGAON ROAD', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 083556, 083570, 007911, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(430, 00060089, 444812101, 101, '19023003226', 'SAWAI KALPANA BALASAHEB', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAVI NAGAR', 'AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444605, '', '', '', '', 083571, 083585, 003226, '2023-06-15', 1, 0, '', '', '', '', '19', NULL),
(431, 00060096, 445810505, 505, '06023009755', 'DHUT MADHAV JAIPRAKASH', 01, 'N', 030, 10, '', '', '', '', '', '', 'NEAR NAG MANDIR DIGRAS', 'PO TQ DIGRAS', 'DIST YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039121, 039150, 009755, '2023-06-15', 1, 0, '', '', '', '', '06', NULL),
(432, 00060097, 445810505, 505, '06023006135', 'CHAVHAN RAMESH UTTAMRAO', 01, 'N', 030, 10, '', 'CHAVHAN VIDHYA RAMESH                        ', '', '', '', '', 'KESHV NAGAR DIGRAS', 'TQ DIGRAS', 'DISTYAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039151, 039180, 006135, '2023-06-15', 1, 0, '', '', '', '', '06', NULL),
(433, 00060149, 445810501, 501, '02023008539', 'WAZALWAR AMOL RAMDAS', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT POST PATANBORI', 'TQ KELAPUR DIST YAVATMAL', '', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 044871, 044900, 008539, '2023-06-16', 1, 0, '', '', '', '', '02', NULL),
(434, 00060150, 445810501, 501, '02173000121', 'SHRI ASTVINAYAK KRUSHI KENDRA PATANBORI', 01, 'N', 060, 13, '', '', '', '', '', '', 'ZILPELWAR PRAKASH BABARAO', 'TA KELAPUR DIST YAVA', 'TMAL PAN AAIHP5005J', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 053176, 053235, 000121, '2023-06-16', 1, 0, '', '', '', '', '02', NULL),
(435, 00060148, 442810501, 501, '20023001846', 'JAIN GAUTAMCHAND JASVANTLAL.', 01, 'N', 015, 10, '', '', '', '', '', '', 'S B I ROAD GADCHANDUR', 'TA KORPANA DI CHANDRAPUR', '', '', '', 'GADCHANDR', '', '', '', 442908, '', '', '', '', 062946, 062960, 001846, '2023-06-16', 1, 0, '', '', '', '', '20', NULL),
(436, 00060144, 445810002, 002, '01023040170', 'SHRI KANHAIYALAL MOR DHARMASHALA TRUST', 01, 'N', 030, 10, '', '', '', '', '', '', 'JAJU CHOWK', 'CHAPMANWADI', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249716, 249745, 040170, '2023-06-16', 1, 0, '', '', '', '', '01', NULL),
(437, 00060147, 445810002, 002, '01021003012', 'SUPREME FABROCHEM', 01, 'N', 030, 11, '', '', '', '.', '', '', 'NAGSEN SOCIETY PANDHARKAWADA R', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332721, 332750, 003012, '2023-06-16', 1, 0, '', '', '', '', '01', NULL),
(438, 00060145, 445810002, 002, '01170000601', 'ORCHID BAR AND RESTAURANT', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'DATTA CHOWK YAVATMAL', 'DATTA CHOWK YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 271251, 271310, 000601, '2023-06-16', 1, 0, '', '', '', '', '01', NULL),
(439, 00060146, 445810002, 002, '01023041386', 'RAUT MOHAN TUKARAMJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'ANJANEY SOCIETY ARNI ROAD', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249746, 249760, 041386, '2023-06-16', 1, 0, '', '', '', '', '01', NULL),
(440, 00060143, 431886052, 052, '32021000183', 'DHANVANTRI MEDICAL AND GEN STORES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'MAHALAXMI NIWAS', 'SHIVAJI MAHARAJ ROAD', 'TANGA CHOUK', '', '', 'JALNA', '', '', '', 431203, '', '', '', '', 047336, 047395, 000183, '2023-06-16', 1, 0, '', '', '', '', '32', NULL),
(441, 00060141, 441810002, 002, '29023002363', 'ROGHATHIYA MOHDSHAFI MOHD AMIN', 01, 'N', 015, 10, '', '', '', '', '', '', 'SHRI TAKIES ROAD SETH PRATAP', 'WARD GONDIA', '', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 024966, 024980, 002363, '2023-06-16', 1, 0, '', '', '', '', '29', NULL),
(442, 00060142, 441810002, 002, '29023002103', 'CHORWAHE RAJESH SHRIRAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'RAJESH SHRIRAM CHORWAHE', ' RAMCHAND OIL MILL', 'SHRINAGAR', '', '', 'GONDIA', '', '', '', 441601, '', '', '', '', 024981, 024995, 002103, '2023-06-16', 1, 0, '', '', '', '', '29', NULL),
(443, 00060139, 445810503, 503, '04023020231', 'MEHTA GEETA DINESH', 01, 'N', 030, 10, '', 'PANDE PUSHPATAI KASHINATH.', '', '', '', '', 'VIJAY BHAWAN WARDHA ROAD', 'OPP LOKMAT BUILDING DHANTOLI', 'NAGPUR', '', '', 'NAGPUR', '', '', '', 440012, '', '', '', '', 119316, 119345, 020231, '2023-06-16', 1, 0, '', '', '', '', '04', NULL),
(444, 00060140, 445810503, 503, '04023021123', 'GOHANE NANDKISHOR WASUDEV', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT VITTHALNAGAR POST MOHORLI', 'TA WANI DIST YAVATMAL ', '', '', '', 'WANI ', '', '', '', 445304, '', '', '', '', 119346, 119360, 021123, '2023-06-16', 1, 0, '', '', '', '', '04', NULL),
(445, 00060138, 445810003, 003, '15023006320', 'JOJARE RAVINDRA  RAMCHANDRA', 01, 'N', 015, 10, '', '', '', '', '', '', 'JUNI DHARMA SHALA', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078671, 078685, 006320, '2023-06-16', 1, 0, '', '', '', '', '15', NULL),
(446, 00060136, 440800002, 002, '22021001518', 'NEEV BUILDWAY', 01, 'N', 030, 11, '', '', '', '', '', '', 'BLOCK NO 12 13 14 GROUND FLOOR', 'NKY TOWERS AJANI SQUARE       ', 'WARDHA ROAD                   ', '', '', 'NAGPUR                        ', '', '', '', 440015, '', '', '', '', 567531, 567560, 001518, '2023-06-16', 1, 0, '', '', '', '', '22', NULL),
(447, 00060137, 440800002, 002, '22021001261', 'SRINIVASA CONSTRUCTION CORPORA PVT LTD', 01, 'N', 060, 11, '', '', '', '', '', '', 'PL NO 34 KANNAMWAR NAGAR', 'WARDHA ROAD NAGPUR', '', '', '', 'NAGPUR', '', '', '', 440025, '', '', '', '', 567561, 567620, 001261, '2023-06-16', 1, 0, '', '', '', '', '22', NULL),
(448, 00060134, 445810004, 004, '17023003787', 'BAJAJ BHAVIKA MANOHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'SINDHU NAGAR NEAR SHADANI DARB', 'AMRAVATI ', 'SINDHI COLONY VAIDYA NAGAR', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068806, 068820, 003787, '2023-06-16', 1, 0, '', '', '', '', '17', NULL),
(449, 00060135, 445810004, 004, '17021000678', 'RATHOD KRUSHI KENDRAA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'WARD NO 1 HOUSE NO 668', 'GHATANJI ROAD SAWARGAD', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 080566, 080625, 000678, '2023-06-16', 1, 0, '', '', '', '', '17', NULL),
(450, 00060129, 445810502, 502, '03023001252', 'UTTARWAR ACHAL RAJABHAU', 01, 'N', 030, 10, '', '', '', '', '', '', 'NILAWAR LAYOUT SAMBHAJI NAGAR', 'ARNI', '', '', '', 'DIGRAS', '', '', '', 445103, '', '', '', '', 053076, 053105, 001252, '2023-06-16', 1, 0, '', '', '', '', '03', NULL),
(451, 00060130, 445810502, 502, '03021000700', 'RAJLAXMI MULTISTATE CREDIT COOP SOCIETY BRANC', 01, 'N', 060, 11, '', 'MISHRA SONAL KAPIL', 'TAAYADE AMOL MUKUNDRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'RAJLAXMI HEIGHTS', 'SANKAT MOCHAN ROAD', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 182551, 182610, 000700, '2023-06-16', 1, 0, '', '', '', '', '03', NULL),
(452, 00060131, 445810502, 502, '03173000022', 'AMAR AGRO AGEN.', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AMAR AGRAO AGENCY', 'Main Road ', '', '', '', 'Arni  Dist. Yavatmal', '', '', '', 445103, '', '', '', '', 120951, 121010, 000022, '2023-06-16', 1, 0, '', '', '', '', '03', NULL),
(453, 00060132, 445810502, 502, '03021000775', 'RAJRAJESHWAR PROTINS PVT LTD', 01, 'N', 060, 11, '', '', '', '', '', '', 'PLOT NO1 DATTARAMPUR TAL ARNI', 'PLOT NO1 DATTARAMPUR TAL ARNI', 'PLOT NO1 DATTARAMPUR TAL ARNI', '', '', 'DATTARAMPUR', '', '', '', 445103, '', '', '', '', 182611, 182670, 000775, '2023-06-16', 1, 0, '', '', '', '', '03', NULL),
(454, 00060133, 445810502, 502, '03173000027', 'CHHALLANI PRINTING', 01, 'N', 060, 13, '', '', '', '', '', '', 'CHALLANI PRINTING PRESS', 'AT MAIN ROAD ARNI', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 121011, 121070, 000027, '2023-06-16', 1, 0, '', '', '', '', '03', NULL),
(455, 00060127, 445810506, 506, '07021001025', 'PETKAR PRALHAD PUNDLIKRAO', 01, 'N', 060, 11, '', '', '', '', '', '', 'AT POST DESHMUKH NAGAR NER', 'TQ NER', 'DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092161, 092220, 001025, '2023-06-16', 1, 0, '', '', '', '', '07', NULL),
(456, 00060128, 445810506, 506, '07173000083', 'RADHA AGENCIES', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AMRAVATI YAVATMAL ROAD', 'NAER POLICE STATION NER', 'TOLI PURA NER DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 045106, 045165, 000083, '2023-06-16', 1, 0, '', '', '', '', '07', NULL),
(457, 00060124, 445810509, 509, '10173000149', 'SHARMA MEDICAL STOARS', 01, 'N', 060, 13, '', 'SHARMA DIPAK SHIVPRASAD 02 32734', '', 'Proprietor', '', '', 'MAIN ROAD PANDHARKAWADA', 'TA KELAPUR ', 'DIST  YAVATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 046551, 046610, 000149, '2023-06-16', 1, 0, '', '', '', '', '10', NULL),
(458, 00060125, 445810509, 509, '10023010418', 'LAMBAT NITA PRAVIN', 01, 'N', 015, 10, '', '', '', '', '', '', 'RADHEY NAGAR AT POST TA', 'PANDHARKAWADA DIST YAVATMAL', '', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064386, 064400, 010418, '2023-06-16', 1, 0, '', '', '', '', '10', NULL),
(459, 00060126, 445810509, 509, '10173000184', 'LAXMI KRUSHI KENDRA PANDHARKAWADA', 01, 'N', 030, 13, '', '', '', '.', '', '', 'NEAR BUS STAND PANDHARKAWADA', 'TA KELAPUR ', 'DIS YAVATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 046751, 046780, 000184, '2023-06-16', 1, 0, '', '', '', '', '10', NULL),
(460, 00060121, 445810508, 508, '09023007329', 'NANDANWAR PRAFUL DILIP', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST DHANKI TQ UMARKHED', 'DIST YAVATMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041321, 041335, 007329, '2023-06-16', 1, 0, '', '', '', '', '09', NULL),
(461, 00060122, 445810508, 508, '09023006499', 'TATIKUNDALWAR NITIN ASHOK', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST DHANKI TQ UMARKHED', 'DIST YAVATMAL STATE', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041336, 041350, 006499, '2023-06-16', 1, 0, '', '', '', '', '09', NULL),
(462, 00060123, 445810508, 508, '09021000204', 'NAMRATA TECHNICAL SERVICES PRO SATISH J JADHA', 01, 'N', 030, 11, '', '', '', 'Proprietor', '', '', 'AT DHANKI TQ UMARKHED', 'D YAVATMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 034436, 034465, 000204, '2023-06-16', 1, 0, '', '', '', '', '09', NULL),
(463, 00060120, 445810102, 102, '14021000648', 'PAWAR ROSHAN RAMRAO', 01, 'N', 060, 11, '', '', '', '', '', '', 'SO RAMRAO PAWAR              ', 'AT BAJRANG NAGAR POST BANSI   ', 'TA PUSAD DIS YAVATMAL         ', '', '', 'PUSAD                         ', '', '', '', 445204, '', '', '', '', 090856, 090915, 000648, '2023-06-16', 1, 0, '', '', '', '', '14', NULL),
(464, 00060119, 444810002, 002, '23021000139', 'SHRI.GAJANAN NAGARI SAHAKARI PATSANSTHA', 01, 'N', 060, 11, '', '', '', 'Authorised Signatory', 'Authorised Signatory', '', 'MOTI MARKET', 'RENUKA NAGAR DABAKI', ' ROAD', '', '', 'AKOLA', '', '', '', 444002, '', '', '', '', 062861, 062920, 000139, '2023-06-16', 1, 0, '', '', '', '', '23', NULL),
(465, 00060118, 445810512, 512, '13021000263', 'SANJAY FASHION CLOTH CENTER                  ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'BASIC SCHOOL ROAD', 'KALAMB', 'TO KALAMB DIST YAVATMAL', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 048211, 048270, 000263, '2023-06-16', 1, 0, '', '', '', '', '13', NULL),
(466, 00060117, 445810504, 504, '05177002123', 'GURUPRASAD AGENCES UMARKHED', 01, 'N', 060, 13, '', '', '', '.', '', '', 'KHADAKPURA CHOUK UMARKHED', '', '', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 130576, 130635, 002123, '2023-06-16', 1, 0, '', '', '', '', '05', NULL),
(467, 00060116, 442810252, 252, '21021000057', 'NILESH TRADING CO.', 01, 'N', 060, 11, '', '', '', '.', '', '', 'GANDHI CHOWK', 'BHADRAWATI', 'BHADRAWATI', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 034631, 034690, 000057, '2023-06-16', 1, 0, '', '', '', '', '21', NULL),
(468, 00060160, 445810003, 003, '15023004240', 'BIWAL SHARMA KUNDAN SITARAM', 01, 'N', 015, 10, '', '', '', '', '', '', 'GANPATI MANDIR MALIPURA', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078686, 078700, 004240, '2023-06-16', 1, 0, '', '', '', '', '15', NULL),
(469, 00060159, 445810004, 004, '17021000664', 'S S D HOSIERY                                ', 01, 'N', 030, 11, '', 'MANDHAN DIPESH GHANSHYAM', '', 'Proprietor', '', '', '23 24 BEHIND BUS STAND NAGPUR ', ' BEHIND BUS STAND NAGPUR ROAD ', ' BEHIND BUS STAND NAGPUR ROAD ', '', '', 'YAVATMAL    ', '', '', '', 445001, '', '', '', '', 080626, 080655, 000664, '2023-06-16', 1, 0, '', '', '', '', '17', NULL),
(470, 00060156, 445810514, 514, '16170000004', 'BUREWAR NILESH MADHUKAR', 01, 'N', 060, 13, '', '', '', '', '', '', 'AT BABHULGAON', 'TQ BAHULGAON DIST YAVATMAL', 'DIST YAVATMAL ', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 071001, 071060, 000004, '2023-06-16', 1, 0, '', '', '', '', '16', NULL),
(471, 00060158, 445810514, 514, '16173000130', 'ANIL MEDICAL STORES', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT POST BABHULGAON', 'TQ BABHULGAON', 'DIST YAVATMAL', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 070301, 070360, 000130, '2023-06-16', 1, 0, '', '', '', '', '16', NULL),
(472, 00060157, 445810514, 514, '16023001002', 'RAUT NITESH DAMODHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT GIMONA POST GANORI TA BABH', 'ULGAON DIST YAVATMAL', '', '', '', 'GIMONA', '', '', '', 445101, '', '', '', '', 045576, 045590, 001002, '2023-06-16', 1, 0, '', '', '', '', '16', NULL),
(473, 00060215, 445810501, 501, '02173000136', 'SURESH STATIONERY', 01, 'N', 060, 13, '', 'KAILASWAR SURESH KESHAVRAO', '', 'Proprietor', '', '', 'AT PO PATANBORI TA KELAPUR', 'DI YAVATMAL', '', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 053351, 053410, 000136, '2023-06-17', 1, 0, '', '', '', '', '02', NULL),
(474, 00060216, 445810501, 501, '02023005663', 'BHAGANAGARKAR SANDHYA JAYANT', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT WARD NO 3 PATANBORI', 'TQ KELAPUR DIST YAVATMAL', '', '', '', 'PATANBORI', '', '', '', 445305, '', '', '', '', 044901, 044930, 005663, '2023-06-17', 1, 0, '', '', '', '', '02', NULL),
(475, 00060214, 442810152, 152, '35023000613', 'WATKAR VINOD RAMESH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT KARUR PO NANDORI ', 'TQ SAMUDRAPUR', 'DIST WARDHA', '', '', 'KARUR', '', '', '', 442305, '', '', '', '', 043826, 043840, 000613, '2023-06-17', 1, 0, '', '', '', '', '35', NULL);
INSERT INTO `tb_print_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(476, 00060206, 445810002, 002, '01023257035', 'KADAM SURESH UTTAMRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO MITANPUR PO FALEGAON', 'TA BABHULGAON DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249761, 249775, 257035, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(477, 00060207, 445810002, 002, '01023253819', 'CHAUDHARI BABAN CHAMPATRAO 01 100315', 01, 'N', 015, 10, '', '', '', '', '', '', '59 SAI KRUPA AGRAWAL LAY OUT ', 'WAGAPURE ROAD YAVATMAL ', '', '', '', 'YAVATMAL ', '', '', '', 445001, '', '', '', '', 249776, 249790, 253819, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(478, 00060210, 445810002, 002, '01023026932', 'DAMLE DEEPTI RAVINDRA', 01, 'N', 015, 10, '', '', '', '', '', '', 'AVDHUTWADI NEAR DAWA BAZAR', 'YAVATMAL YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249791, 249805, 026932, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(479, 00060208, 445810002, 002, '01021002491', 'ADITYA ANAGHA MULTI STATE CREDIT CO OP SOC LT', 01, 'N', 060, 11, '', 'SARAF SANJEEV SUDHAKAR', 'KULKARNI ABHISHEK SURYAKANT', 'Authorised Signatory', 'Authorised Signatory', '', '425 AZAMSHAH LAYOUT', 'ANAND NAGAR', 'NAGPUR', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 332796, 332855, 002491, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(480, 00060209, 445810002, 002, '01173000419', 'KIRAN TILES KIRAN R CHOKHANI', 01, 'N', 060, 13, '', '', '', '.', '', '', 'SARSWATI VIHAR ', 'AWADHUTWADI YAVATMAL', '', '', '', 'YAVTMAL', '', '', '', 445001, '', '', '', '', 265836, 265895, 000419, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(481, 00060205, 445810002, 002, '01021002769', 'NIRANJAN KRUSHI KENDRA', 01, 'N', 045, 11, '', '', '', 'Proprietor', '', '', 'BHAJI BAZAR NAGAR PARISHAD', 'MARKET DATTA CHOWK', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332751, 332795, 002769, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(482, 00060212, 445810002, 002, '01021001822', 'ARIHANT AGENCIES 01 44617', 01, 'N', 045, 11, '', '', '', '', '', '', 'HITESHKUMAR G BHAYANI AND', 'YOGESHKUMAR G BHAYAN', 'I DAWABAZA', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332856, 332900, 001822, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(483, 00060211, 445810002, 002, '01023259796', 'CHINCHE DHANANJAY ASHOK', 01, 'N', 015, 10, '', '', '', '', '', '', 'KARIM NADAR WAGHAPUR ROAD ', 'YAVATMAL                 ', '', '', '', 'YAVATMAL                  ', '', '', '', 445001, '', '', '', '', 249806, 249820, 259796, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(484, 00060213, 445810002, 002, '01023256661', 'VITHALANI SUBHASH VANMALIDAS', 01, 'N', 015, 10, '', '', '', '', '', '', 'RENUKA APPARTMENT ', 'MAINDE CHOWK', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249821, 249835, 256661, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(485, 00060204, 431886052, 052, '32021000152', 'KHUSHI DEVELOPERS', 01, 'N', 060, 11, '', '', '', '.', '', '', 'PLOT NO E 17 MANTHA ROAD', 'NEAR MAHADEV MANDIR ', 'CHOUDHARI NAGAR DEVMURTI', '', '', 'JALNA', '', '', '', 431203, '', '', '', '', 047396, 047455, 000152, '2023-06-17', 1, 0, '', '', '', '', '32', NULL),
(486, 00060201, 445810503, 503, '04021001649', 'USHA COSMETIC AND GENERAL', 01, 'N', 060, 11, '', 'AADKINE USHA DILIP', '', 'Proprietor', '', '', 'CHHORIYA COLLONY GANESHPUR WAN', 'TQ WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 165986, 166045, 001649, '2023-06-17', 1, 0, '', '', '', '', '04', NULL),
(487, 00060202, 445810503, 503, '04173000647', 'AMOL KRUSHI KENDRA                           ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'AT WAGHDARA PO MANDAR ', 'TA WANI DIST YAVATMAL', '', '', '', 'TQ WANI', '', '', '', 445304, '', '', '', '', 150291, 150350, 000647, '2023-06-17', 1, 0, '', '', '', '', '04', NULL),
(488, 00060203, 445810503, 503, '04170000374', 'HOTEL MANGALYA BAR AND RESTAURANT', 01, 'N', 045, 13, '', '', '', 'Proprietor', '', '', 'TILAK NAGAR', 'WARD NO 1', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 056976, 057020, 000374, '2023-06-17', 1, 0, '', '', '', '', '04', NULL),
(489, 00060239, 411948002, 002, '33023000399', 'YERAWAR POONAM RAVINDRA', 01, 'N', 030, 10, '', '', '', '', '', '', 'A 504 ECLECTICA HOMES PIMPLE', 'SAUDAGAR PUNE', '', '', '', 'PUNE', '', '', '', 0, '', '', '', '', 014361, 014390, 000399, '2023-06-17', 1, 0, '', '', '', '', '33', NULL),
(490, 00060238, 445810514, 514, '16023001153', 'MALKHEDE PRAMOD KRUSHANARAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'KOPARA JANKAR PO DIGHI', 'TQ BABHULGAON', 'DIST YAVATMAL', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 045591, 045605, 001153, '2023-06-17', 1, 0, '', '', '', '', '16', NULL),
(491, 00060237, 440800003, 003, '25021270017', 'SHIVAM ENTERPRISES(PROP.SHRIKANT C. SURYAWANS', 01, 'N', 030, 11, '', '', '', 'Proprietor', '', '', 'SHOP NO 7RAHUL COMPLEX1 WING ', 'I OPPT HOTEL RAHUL NEAR S T', 'BUS STAND SQ GANESHPETH', '', '', 'NAGPUR', '', '', '', 440018, '', '', '', '', 056106, 056135, 270017, '2023-06-17', 1, 0, '', '', '', '', '25', NULL),
(492, 00060236, 445810510, 510, '11173000122', ' KRUSHNA AGENCIES DARWHA                     ', 01, 'N', 060, 13, '', '', '', '', '', '', 'SHIVAJI CHOWK ', 'MAIN LINE', 'DARWHA', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 146861, 146920, 000122, '2023-06-17', 1, 0, '', '', '', '', '11', NULL),
(493, 00060200, 445810003, 003, '15173000159', 'KAKANI SPARES                                ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'DIST CENTRAL COOP BANK COMPLEX', 'NEAR TOWN HALL YAVAT', 'MAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 106001, 106060, 000159, '2023-06-17', 1, 0, '', '', '', '', '15', NULL),
(494, 00060199, 440800002, 002, '22023007302', 'CHOKHANDRE SHAILESH SESHRAO', 01, 'N', 030, 10, '', '', '', '', '', '', '747 A NEAR WATER TANK JAITALA', '', '', '', '', 'NAGPUR', '', '', '', 440016, '', '', '', '', 210711, 210740, 007302, '2023-06-17', 1, 0, '', '', '', '', '22', NULL),
(495, 00060197, 445810511, 511, '12023008390', 'BAVANE PRAGATI SURAJ', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT INDIRA NAGAR WARD NO 15', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050251, 050265, 008390, '2023-06-17', 1, 0, '', '', '', '', '12', NULL),
(496, 00060198, 445810511, 511, '12023006806', 'BORKAR HARISH DAULATRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT MATA NAGAR GAWALI LAYOUT', 'WARD NO 6 TQ RALEGAON', 'DIST YAVATMAL ', '', '', 'RALEGAON ', '', '', '', 445402, '', '', '', '', 050266, 050280, 006806, '2023-06-17', 1, 0, '', '', '', '', '12', NULL),
(497, 00060196, 445810511, 511, '12173000002', 'MS BOTHRA KRISHI KENDRA                      ', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAIN RAOD RALEGAON', 'TQ RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 057356, 057415, 000002, '2023-06-17', 1, 0, '', '', '', '', '12', NULL),
(498, 00060191, 445810502, 502, '03173000501', 'GANESH TRADING COMPANY ARNI', 01, 'N', 060, 13, '', 'BELGAMWAR AMOL SUDHAKARRAO', '', 'Proprietor', '', '', 'APMC GRAIN MARKET', 'MAHUR ROAD ARNI ', 'TQ ARNI DIST YAVATMAL', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 121071, 121130, 000501, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(499, 00060192, 445810502, 502, '03177200046', 'SUDARSHAN KRUSHI KENDRA.', 01, 'N', 060, 13, '', '', '', '', '', '', 'MAIN ROAD ', 'ARNI ', '', '', '', 'Dist. Yavatmal', '', '', '', 445001, '', '', '', '', 119011, 119070, 200046, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(500, 00060193, 445810502, 502, '03021000741', 'GAURAV AGRO AGENCY', 01, 'N', 060, 11, '', '', '', '.', '', '', 'AT POST SAVLI TAL ARNI', 'AT POST SAVLI TAL ARNI', 'AT POST SAVLI TAL ARNI', '', '', 'SAVLI', '', '', '', 445103, '', '', '', '', 182671, 182730, 000741, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(501, 00060194, 445810502, 502, '03170000055', 'HOTEL RASHI', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'PROP SARITA SANTOSH JAISWAL', '', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 104646, 104705, 000055, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(502, 00060195, 445810502, 502, '03021000706', 'SAI BABA KRUSI KENDRA                        ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'AT MANGRUL POST BELORA ', 'DIST YAVATMAL', '', '', '', 'MANGRUL', '', '', '', 445001, '', '', '', '', 182731, 182790, 000706, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(503, 00060188, 445810510, 510, '11023000747', 'DHANORKAR BABURAO SHANKARRAO(JOINT)', 01, 'N', 030, 10, '', 'DHANORKAR SAU.PUSHPATAI BABURAO.', '', '', '', '', 'AT POST BHANDEGAON', 'TAL DARWHA DIST YAVATMAL', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 094631, 094660, 000747, '2023-06-17', 1, 0, '', '', '', '', '11', NULL),
(504, 00060189, 445810510, 510, '11173000098', 'BALAJI STEEL AND  GIFT CENTRE', 01, 'N', 030, 13, '', '', '', '.', '', '', 'GOLIBAR CHOWK', 'PANNALAL PLAZA DARWH', 'A', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 146831, 146860, 000098, '2023-06-17', 1, 0, '', '', '', '', '11', NULL),
(505, 00060190, 445810510, 510, '11023001639', 'KYASTE RAVI KANAHIYA', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAHAVEER COLONEY', 'DARWHA YAVATMAL', '', '', '', 'DARWHA', '', '', '', 445202, '', '', '', '', 094661, 094675, 001639, '2023-06-17', 1, 0, '', '', '', '', '11', NULL),
(506, 00060186, 445810509, 509, '10023000098', 'KOMAWAR KISHOR NANAJI 10 18441', 01, 'N', 015, 10, '', '', '', '', '', '', 'RANILAXMIBAI WARD WARD NO 3', 'PANDHARKAWADA TA KELAPUR', 'DIST YAVATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 064401, 064415, 000098, '2023-06-17', 1, 0, '', '', '', '', '10', NULL),
(507, 00060187, 445810509, 509, '10021000504', 'MADHAV KRUSHI KENDRA', 01, 'N', 060, 11, '', '', '', '.', '', '', 'NEAR MAHILA SAMAJ SCHOOL', 'PANDHARKAWADA', 'TQ KELAPUR DI YAVATMAL', '', '', 'PANDHARKAWADA', '', '', '', 445302, '', '', '', '', 059981, 060040, 000504, '2023-06-17', 1, 0, '', '', '', '', '10', NULL),
(508, 00060185, 445810508, 508, '09021000192', 'HOTEL SOMYA WINE BAR', 01, 'N', 045, 11, '', '', '', '.', '', '', 'AT POST DHANKI TA UMARKHED ', 'DIST YAVATMAL ', 'DHANKI ', '', '', 'DHANKI ', '', '', '', 445207, '', '', '', '', 034466, 034510, 000192, '2023-06-17', 1, 0, '', '', '', '', '09', NULL),
(509, 00060183, 445810102, 102, '14023007445', 'RAHANGADALE SUSHAMA MORESHWAR', 01, 'N', 030, 10, '', '', '', '', '', '', 'LAXMINAGAR BORGADI PUSAD', 'LAXMINAGAR BORGADI PUSAD', '', '', '', 'PUSAD', '', '', '', 445215, '', '', '', '', 051501, 051530, 007445, '2023-06-17', 1, 0, '', '', '', '', '14', NULL),
(510, 00060184, 445810102, 102, '14021000729', 'SANTAJI NAGARI SAH.PATSANSTHA MARYADIT', 01, 'N', 030, 11, '', 'KAJLE BALAJI MAHADEV', 'AHALE SHAKTI VIJAYKUMAR', 'Authorised Signatory', 'Authorised Signatory', '', 'NEAR BALAJI SWEET MART', '', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 090916, 090945, 000729, '2023-06-17', 1, 0, '', '', '', '', '14', NULL),
(511, 00060181, 445810507, 507, '08021000451', 'ADITYA ANAGHA MULTI STATE CREDIT CO OP SOC LT', 01, 'N', 060, 11, '', '', '', 'Authorised Signatory', 'Authorised Signatory', '', '425 AZAMSHAH LAYOUT', 'ANAND NAGAR', 'NAGPUR', '', '', 'NAGPUR', '', '', '', 440009, '', '', '', '', 074086, 074145, 000451, '2023-06-17', 1, 0, '', '', '', '', '08', NULL),
(512, 00060182, 445810507, 507, '08023015517', 'PENSHANAWAR VIVEKANAND PRABHAKAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'MQ POST ANJI', 'TQ GHATANJI', 'DIST YAVATMAL', '', '', 'GHATANJI', '', '', '', 445301, '', '', '', '', 082181, 082195, 015517, '2023-06-17', 1, 0, '', '', '', '', '08', NULL),
(513, 00060179, 445810504, 504, '05023010125', 'TASKE GOVIND KANHUJI', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT HANUMAN NAGAR PATEL', 'LAYOUT UMARKHED TQ ', 'TQ UMARKHED DIS YAVATMAL', '', '', 'UMARKHED', '', '', '', 445206, '', '', '', '', 055856, 055885, 010125, '2023-06-17', 1, 0, '', '', '', '', '05', NULL),
(514, 00060180, 445810504, 504, '05023006986', 'PADGHANE SURESH UTTAMRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'INDIRA GANDHI WARD UMARKHED', '', '', '', '', 'UMARKHED ', '', '', '', 445206, '', '', '', '', 055886, 055900, 006986, '2023-06-17', 1, 0, '', '', '', '', '05', NULL),
(515, 00060176, 445810505, 505, '06023008613', 'DAHANE SUDAM MAROTI', 01, 'N', 030, 10, '', '', '', '', '', '', 'RUI MOTHI TA DIGRAS', 'DIST YAVATMAL', '', '', '', 'RUI MOTHI', '', '', '', 445203, '', '', '', '', 039181, 039210, 008613, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(516, 00060177, 445810505, 505, '06021000340', 'SHRI SAI KRUSHI KENDRA DIGRAS', 01, 'N', 060, 11, '', 'UPLENCHWAR SAMEER SUDHAKAR', '', 'Proprietor', '', '', 'APMC COMPLEX SHOP NO 3', 'SHIVAJI CHOUK DIGRAS', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068701, 068760, 000340, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(517, 00060178, 445810505, 505, '06021000514', 'ATHARAVA MEDICOS', 01, 'N', 060, 11, '', '', '', '', '', '', 'AROGYADHAM HOSPITAL', 'DIGRAS', 'TQ DIGRAS YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068761, 068820, 000514, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(518, 00060278, 442810501, 501, '20021000595', 'PRITAM GENERAL STORES ', 01, 'N', 030, 11, '', '', '', '.', '', '', 'WARD NO 6 NEAR SAIBABA', 'MANDIR AT PO GADCHANDUR', 'TA KORPANA DT CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 060481, 060510, 000595, '2023-06-17', 1, 0, '', '', '', '', '20', NULL),
(519, 00060279, 442810501, 501, '20023007327', 'ASUTAKAR SUDHAKAR NANAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'WARD NO 4 NEAR NARESH TAKIJ', 'AT PO GADCHANDUR TA KORPANA', 'DIST CHANDRAPUR', '', '', 'GADCHANDUR', '', '', '', 442908, '', '', '', '', 062961, 062975, 007327, '2023-06-17', 1, 0, '', '', '', '', '20', NULL),
(520, 00060277, 431886052, 052, '32021000004', 'VIMAL MEDICAL GENERAL STORES                 ', 01, 'N', 060, 11, '', '', '', '.', '', '', 'OPP MISSION HOSPITAL KHARDEKAR', ' COMPLEX DURGA MATA MANDIR ', 'ROAD', '', '', 'JALNA', '', '', '', 431203, '', '', '', '', 047456, 047515, 000004, '2023-06-17', 1, 0, '', '', '', '', '32', NULL),
(521, 00060276, 445810003, 003, '15023003270', 'GOTFODE RAJU SHANKARRAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'BEHIND GANPATI MANDIR', 'MALIPURA YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 078701, 078715, 003270, '2023-06-17', 1, 0, '', '', '', '', '15', NULL),
(522, 00060275, 440800002, 002, '22021001098', 'YUVRAJ ELECTRICALS', 01, 'N', 030, 11, '', '', '', '', '', '', 'PLOT NO 229 INFRONT JAINMANDIR', 'LAXMI NAGAR', '', '', '', 'NAGPUR', '', '', '', 440010, '', '', '', '', 567621, 567650, 001098, '2023-06-17', 1, 0, '', '', '', '', '22', NULL),
(523, 00060274, 445810502, 502, '03170000082', 'POOJA WINEBAR AND RESTORANT', 01, 'N', 060, 13, '', '', '', '.', '', '', 'MAHUR ROAD ARNI', 'TQ ARNI DIST YAVATMA', 'L', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 104706, 104765, 000082, '2023-06-17', 1, 0, '', '', '', '', '03', NULL),
(524, 00060272, 445810002, 002, '01177100101', 'RAJLAXMI MULTISTATE CREDIT COOP SOCIETY', 01, 'N', 030, 13, '', '', 'SARAF NARENDRA PRAKASHRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'MAINDE CHOWK YAVATMAL', 'DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026786, 026815, 100101, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(525, 00060273, 445810002, 002, '01177100101', 'RAJLAXMI MULTISTATE CREDIT COOP SOCIETY', 01, 'N', 030, 13, '', '', 'SARAF NARENDRA PRAKASHRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'MAINDE CHOWK YAVATMAL', 'DIST YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026816, 026845, 100101, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(526, 00060271, 445810002, 002, '01023036418', 'THAKARE VITTHAL RAMAJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO DONGARKEHRDA', 'TQ KALAMB DIST YAVATMAL', '', '', '', 'KALAMB ', '', '', '', 445323, '', '', '', '', 249836, 249850, 036418, '2023-06-17', 1, 0, '', '', '', '', '01', NULL),
(527, 00060269, 445810514, 514, '16023003422', 'RAJURKAR YOGENDRA TUKARAMJI', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT YAWALI PO ASEGAON DEVI', 'TQ BABHULGAON', 'DIST YAVATMAL', '', '', 'BABHULGAON', '', '', '', 445101, '', '', '', '', 045606, 045635, 003422, '2023-06-17', 1, 0, '', '', '', '', '16', NULL),
(528, 00060270, 445810514, 514, '16173000120', 'ASHIRWAD AGROAGENCY', 01, 'N', 060, 13, '', 'RATHI MOHIT NARESHJI', '', 'Proprietor', '', '', 'AT STATE BANK NEAR BABHULGAON', 'AT POST TQ BABHULGAON ', 'DIST YAVATMAL ', '', '', 'BABHULGAON ', '', '', '', 445101, '', '', '', '', 070361, 070420, 000120, '2023-06-17', 1, 0, '', '', '', '', '16', NULL),
(529, 00060267, 445810503, 503, '04023017289', 'BHUSARI BHALCHNDRA NATTHUJI.', 01, 'N', 015, 10, '', 'BHUSARI KALPANA BHALCHANDRA', '', '', '', '', 'AT POST RAJUR COLORI', 'TA WANI DIST YAVATMAL', '', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119361, 119375, 017289, '2023-06-17', 1, 0, '', '', '', '', '04', NULL),
(530, 00060268, 445810503, 503, '04023008894', 'DHAWANE SAGAR MANOHAR 04 11562', 01, 'N', 015, 10, '', '', '', '', '', '', 'NANDEPERA ROAD NEAR', 'N P SCHOOL NO 5 WARD', 'NO 2 WANI DIST  YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119376, 119390, 008894, '2023-06-17', 1, 0, '', '', '', '', '04', NULL),
(531, 00060265, 445810511, 511, '12173000114', 'ARADHY AGRO AGENCY', 01, 'N', 060, 13, '', '', '', '', '', '', 'WARD NO 02 INFRONT OF BUS ', 'STAND WADHONA BAJAR ', 'TQ RALEGAON DIST YAVATMAL ', '', '', 'WADHONA(BAJAR)', '', '', '', 445308, '', '', '', '', 057416, 057475, 000114, '2023-06-17', 1, 0, '', '', '', '', '12', NULL),
(532, 00060266, 445810511, 511, '12023003561', 'DONGRE BHAURAV NANA', 01, 'N', 015, 10, '', 'DONGARE ARCHANA BHAURAO', '', '', '', '', 'AT INZAPUR PO SAWANGI ', 'TA RALEGAON', 'DIST YAVATMAL', '', '', 'RAL', '', '', '', 445402, '', '', '', '', 050281, 050295, 003561, '2023-06-17', 1, 0, '', '', '', '', '12', NULL),
(533, 00060263, 445810508, 508, '09023000207', 'KUMBHARWAR ANAND VISHVANATHA', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST DHANKI', 'TQ UMARHKED DIST YAVTMAL', '', '', '', 'DHANKI', '', '', '', 445207, '', '', '', '', 041351, 041365, 000207, '2023-06-17', 1, 0, '', '', '', '', '09', NULL),
(534, 00060264, 445810508, 508, '09023003787', 'JAISWAL PREMLATA PRAKASH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT PO DHANKI TQ UMARKHED ', 'DIST YAVATMAL ', '', '', '', 'DHANKI.', '', '', '', 445207, '', '', '', '', 041366, 041380, 003787, '2023-06-17', 1, 0, '', '', '', '', '09', NULL),
(535, 00060261, 445810102, 102, '14173000111', 'S.B.FORMULATION', 01, 'N', 060, 13, '', '', '', '', '', '', 'MOTINAGAR PUSAD', 'PUSAD', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 049026, 049085, 000111, '2023-06-17', 1, 0, '', '', '', '', '14', NULL),
(536, 00060262, 445810102, 102, '14021000687', 'PARVATI MEDICAL STORES', 01, 'N', 060, 11, '', '', '', '.', '', '', 'AT POST SHELU B NEAR BUS STAND', 'TQ PUSAD DIST YAVAMAL', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 090946, 091005, 000687, '2023-06-17', 1, 0, '', '', '', '', '14', NULL),
(537, 00060259, 444810002, 002, '23023000302', 'PAMPATTIWAR SANJAY NARSINGRAO(HUF)', 01, 'N', 015, 10, '', '', '', '', '', '', '202 MALTI RESIDENCY BEHIND PUN', 'DLIK MAHARTEMPLE RAUTWADI', '', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 044721, 044735, 000302, '2023-06-17', 1, 0, '', '', '', '', '23', NULL),
(538, 00060260, 444810002, 002, '23021000105', 'KSHITIJ BULIDERS AND DEVELOPERES', 01, 'N', 060, 11, '', '', '', '', '', '', 'IF CHANDAK MANGAL KARYALAYA', 'GADDAM PLOT TAJNAPU', 'R', '', '', 'AKOLA', '', '', '', 444001, '', '', '', '', 062921, 062980, 000105, '2023-06-17', 1, 0, '', '', '', '', '23', NULL),
(539, 00060256, 445810505, 505, '06023003539', 'DHALE NANDRAJ CHARANDAS', 01, 'N', 030, 10, '', '', '', '', '', '', 'SURAJ NAGAR DIGRAS', 'PO TQ DIGRAS', 'DIST YAVATMAL', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039211, 039240, 003539, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(540, 00060257, 445810505, 505, '06023007587', 'GAWANDE GULABRAO BHIMRAO', 01, 'N', 030, 10, '', '', '', '', '', '', 'LAXMI NAGAR PART DIST YAVATMAL', 'DIST YAVATMAL', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039241, 039270, 007587, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(541, 00060258, 445810505, 505, '06021000453', 'TUKAI KRUSHI KENDRA', 01, 'N', 060, 11, '', '', 'MOHITE AMOL PUNDLIKRAO', 'Proprietor', 'Proprietor', '', 'RANA PRATAP COMPEX', 'MANORA CHOWK', 'DIGRAS', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 068821, 068880, 000453, '2023-06-17', 1, 0, '', '', '', '', '06', NULL),
(542, 00060321, 444810202, 202, '30021000186', 'SHRI BALAJI BHARATGAS', 01, 'N', 060, 11, '', 'HEDA DILIP SHANKARLAL', '', 'Proprietor', '', '', 'OPPOSITE OLD ZP OFFICE', 'BELOW BALAJI HONDA SHOWROOM', 'WASHIM', '', '', 'WASHIM', '', '', '', 444505, '', '', '', '', 056476, 056535, 000186, '2023-06-19', 1, 0, '', '', '', '', '30', NULL),
(543, 00060319, 445810002, 002, '01021002983', 'QUALITY BAR AND RESTAURANTS', 01, 'N', 030, 11, '', '', '', '.', '', '', 'BUS STOP CHOWK YAVATMAL', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 332901, 332930, 002983, '2023-06-19', 1, 0, '', '', '', '', '01', NULL),
(544, 00060320, 445810002, 002, '01177100147', 'THE YAVATMAL URBAN CO OP BANK KARMACHARI SAHA', 01, 'N', 060, 13, '', 'DHAWANE ANAND VITTHALRAO', 'MUTTALWAR SANTOSH PUNDLIKRAO', 'Authorised Signatory', 'Authorised Signatory', '', 'YAVATMAL YAVATMAL', '', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 026846, 026905, 100147, '2023-06-19', 1, 0, '', '', '', '', '01', NULL),
(545, 00060318, 431532081, 081, '31023002326', 'MUNDALIK SHIWADAS VISHWANATH', 01, 'N', 030, 10, '', '', '', '', '', '', 'PLOT NO 197 PRAYAG NEAR', 'GAIKWAD CLASSES', 'ULKANAGARI GARKHEDA', '', '', 'AURANGABAD', '', '', '', 431001, '', '', '', '', 012636, 012665, 002326, '2023-06-19', 1, 0, '', '', '', '', '31', NULL),
(546, 00060317, 445810506, 506, '07023004280', 'POHEKAR VASANTRAO SHANTARAMJI', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST MALI PURA NER', 'TA NER DIST YAVATMAL', 'NER', '', '', 'NER', '', '', '', 445102, '', '', '', '', 047656, 047670, 004280, '2023-06-19', 1, 0, '', '', '', '', '07', NULL),
(547, 00060316, 445810503, 503, '04170000263', 'RAUNAK METALS.', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'GANDHI CHOWK', 'WANI', 'DI YAVATMAL', '', '', 'WANI.', '', '', '', 445304, '', '', '', '', 057021, 057080, 000263, '2023-06-19', 1, 0, '', '', '', '', '04', NULL),
(548, 00060314, 440800002, 002, '22023009433', 'RAJURKAR JAGDISH NAMDEORAO', 01, 'N', 015, 10, '', '', '', '', '', '', 'PLOT NUMBER 21 FULSUNGE LAYOUT', 'NEAR AIRPORT COMPOUND WALL', 'INDRAPRASTHA NGR BHAMTI', '', '', 'NAGPUR', '', '', '', 440022, '', '', '', '', 210741, 210755, 009433, '2023-06-19', 1, 0, '', '', '', '', '22', NULL),
(549, 00060315, 440800002, 002, '22021001462', 'ABHYUDAY ENGINEERING', 01, 'N', 060, 11, '', '', '', '', '', '', 'B 504 SHANTI PARK APPARTMENT', 'BESA ROAD', 'MANISH NAGAR', '', '', 'NAGPUR', '', '', '', 440023, '', '', '', '', 567651, 567710, 001462, '2023-06-19', 1, 0, '', '', '', '', '22', NULL),
(550, 00060309, 444812101, 101, '19021000971', 'DR HEDGEWAR AYURVIDNYAN ANUSANDHAN SANST     ', 01, 'N', 060, 11, '', '', '', '', '', '', 'VASUDEO SARSWATI SANKUL', 'MUDHOLKAR PETH AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 127956, 128015, 000971, '2023-06-19', 1, 0, '', '', '', '', '19', NULL),
(551, 00060311, 444812101, 101, '19177200088', 'HOPE MEDICAL SERVICES PRIVATE LIMITED', 01, 'N', 060, 13, '', '', '', '', '', '', 'NEAR KASAT MOTORS ', 'AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444604, '', '', '', '', 048801, 048860, 200088, '2023-06-19', 1, 0, '', '', '', '', '19', NULL),
(552, 00060308, 444812101, 101, '19023008311', 'VARKHADE PRATIBHA GANGADHAR', 01, 'N', 015, 10, '', '', '', '', '', '', 'SAMRA NAGAR OLD BY PASS ROAD', 'AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444606, '', '', '', '', 083586, 083600, 008311, '2023-06-19', 1, 0, '', '', '', '', '19', NULL),
(553, 00060310, 444812101, 101, '19021000971', 'DR HEDGEWAR AYURVIDNYAN ANUSANDHAN SANST     ', 01, 'N', 045, 11, '', '', '', '', '', '', 'VASUDEO SARSWATI SANKUL', 'MUDHOLKAR PETH AMRAVATI', '', '', '', 'AMRAVATI', '', '', '', 444601, '', '', '', '', 130001, 130045, 000971, '2023-06-19', 1, 0, '', '', '', '', '19', NULL),
(554, 00060306, 445810511, 511, '12023007846', 'BAJPAI ARTI OM', 01, 'N', 030, 10, '', '', '', '', '', '', 'AT CHAVHAN LAYOUT ', 'RALEGAON DIST YAVATMAL', '', '', '', 'RALEGAON ', '', '', '', 445402, '', '', '', '', 050296, 050325, 007846, '2023-06-19', 1, 0, '', '', '', '', '12', NULL),
(555, 00060307, 445810511, 511, '12023005555', 'PATELPAIK SURENDRA NAMDEO', 01, 'N', 015, 10, '', '', '', '', '', '', 'HANUMAN MANDIR WARD NO 4', 'RALEGAON', 'DIST YAVATMAL', '', '', 'RALEGAON', '', '', '', 445402, '', '', '', '', 050326, 050340, 005555, '2023-06-19', 1, 0, '', '', '', '', '12', NULL),
(556, 00060305, 445810502, 502, '03021000542', 'ADITYA MEDICAL ARNI', 01, 'N', 060, 11, '', '', '', '.', '', '', 'MAIN ROAD ARNI', 'TQ ARNI DIST YAVATMAL', '', '', '', 'ARNI', '', '', '', 445103, '', '', '', '', 182791, 182850, 000542, '2023-06-19', 1, 0, '', '', '', '', '03', NULL),
(557, 00060301, 445810506, 506, '07021000790', 'GAYATRI TOBACO', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'MAIN ROAD NER', 'TQ  NER DIST YAVATMAL', 'NER', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092221, 092280, 000790, '2023-06-19', 1, 0, '', '', '', '', '07', NULL),
(558, 00060302, 445810506, 506, '07021000322', 'NOOR ASSOCIATES', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'DATTA MARKET MAIN ROAD', 'NER', '', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092281, 092340, 000322, '2023-06-19', 1, 0, '', '', '', '', '07', NULL),
(559, 00060303, 445810506, 506, '07170000084', 'GULSHAN TRADERS NER', 01, 'N', 060, 13, '', '', '', '.', '', '', 'AT POST KHAN SAHAB PLOT', 'NER YAVATMAL', 'TQ NER DIST YAVATMAL', '', '', 'NER', '', '', '', 445102, '', '', '', '', 039946, 040005, 000084, '2023-06-19', 1, 0, '', '', '', '', '07', NULL),
(560, 00060304, 445810506, 506, '07021000994', 'CHUNNU MUNNU DRESSES', 01, 'N', 060, 11, '', 'MOHAMMAD IRFAN MOHAMMAD USMAN VICCHI', '', 'Proprietor', '', '', 'CHANDANI CHAUK NER', 'NER', 'NER', '', '', 'NER', '', '', '', 445102, '', '', '', '', 092341, 092400, 000994, '2023-06-19', 1, 0, '', '', '', '', '07', NULL),
(561, 00060300, 445810510, 510, '11023006486', 'PANDHARKAR VAIBHAV  SUNIL   25/96', 01, 'N', 015, 10, '', '', '', '', '', '', 'ROLD MUNGSAJI MANDIR DARWHA', 'DARWHA', '', '', '', 'DARWHA ', '', '', '', 445202, '', '', '', '', 094676, 094690, 006486, '2023-06-19', 1, 0, '', '', '', '', '11', NULL),
(562, 00060299, 445810509, 509, '10023008866', 'BHUPATWAR DEVARAO VISHAVANATH', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT POST KELAPUR', 'DIST YAVATMAL', '', '', '', 'KELAPUR', '', '', '', 445302, '', '', '', '', 064416, 064430, 008866, '2023-06-19', 1, 0, '', '', '', '', '10', NULL),
(563, 00060297, 445810512, 512, '13173000102', 'RAM ELECTRICALS KALAMB', 01, 'N', 030, 13, '', '', '', '', '', '', 'MUSANI COMPLEX KALAMB', 'NAGPUR ROAD', 'KALAMB DIST YAVATMAL', '', '', 'KALAMB', '', '', '', 445401, '', '', '', '', 050246, 050275, 000102, '2023-06-19', 1, 0, '', '', '', '', '13', NULL),
(564, 00060296, 445810505, 505, '06023003657', 'KHADASKAR SUDHA NARAYAN', 01, 'N', 030, 10, '', '', '', '', '', '', 'PAHARMACY COLLEGE ', 'SEVA NAGRI DIGRAS', '', '', '', 'DIGRAS', '', '', '', 445203, '', '', '', '', 039271, 039300, 003657, '2023-06-19', 1, 0, '', '', '', '', '06', NULL),
(565, 00060342, 445810002, 002, '01023006971', 'M S E B WORKS FEDERATION                     ', 01, 'N', 015, 10, '', '', '', '', '', '', 'MAINDE CHOWK', 'YAVATMAL', '', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 249851, 249865, 006971, '2023-06-19', 1, 0, '', '', '', '', '01', NULL),
(566, 00060341, 445810503, 503, '04023017298', 'BHOYAR ANITA TULSHIRAM', 01, 'N', 015, 10, '', 'BHOYAR TULSHIRAM MAROTI', '', '', '', '', 'AT POST SUKNEGAON', 'TQ WANI', 'DT YAVATMAL', '', '', 'WANI', '', '', '', 445304, '', '', '', '', 119391, 119405, 017298, '2023-06-19', 1, 0, '', '', '', '', '04', NULL),
(567, 00060340, 445810004, 004, '17023001774', 'DINDAYAL SEWA PRATISHTHAN                    ', 01, 'N', 060, 10, '', '', '', '', '', '', 'VIVEKANAND CHHATRAVAS', 'RAMKRISHNNAGAR MULKI WADGAON ', 'YAVATMAL', '', '', 'YAVATMAL', '', '', '', 445001, '', '', '', '', 068821, 068880, 001774, '2023-06-19', 1, 0, '', '', '', '', '17', NULL),
(568, 00060339, 444812101, 101, '19023009545', 'JAMBHOLE KISHOR PANDURANG', 01, 'N', 015, 10, '', '', '', '', '', '', 'AT SHENUGUN PO SHELUGUND ', 'TQ NANDGAON KHANDESHWAR DIST', 'DIST AMRAVATI', '', '', 'AMRAVATI', '', '', '', 444701, '', '', '', '', 083601, 083615, 009545, '2023-06-19', 1, 0, '', '', '', '', '19', NULL),
(569, 00060338, 442810102, 102, '18023014019', 'TATED SAPNA RAJESH                           ', 01, 'N', 015, 10, '', '', '', '', '', '', 'NEAR RAMDEV BABA TEMPLE ', 'KOTWALI WARD', '', '', '', 'CHANDRAPUR', '', '', '', 442402, '', '', '', '', 077836, 077850, 014019, '2023-06-19', 1, 0, '', '', '', '', '18', NULL),
(570, 00060337, 445810102, 102, '14023000998', 'POLKAT NATHURAM PURUSHOTTAM', 01, 'N', 030, 10, '', 'POLKAT VAISHPAYAN PURUSHOTTAM', '', '', '', '', 'MAHAVIR NAGAR SAI MANDIR ROAD', 'PUSAD', '', '', '', 'PUSAD', '', '', '', 445204, '', '', '', '', 051531, 051560, 000998, '2023-06-19', 1, 0, '', '', '', '', '14', NULL),
(571, 00060336, 442810252, 252, '21173000059', 'NIDHI PROVISIN  PRO.LALIT M ASWALE', 01, 'N', 060, 13, '', '', '', '', '', '', 'ANAND NAGAR', 'VIJASAN ROAD BHADRAW', 'ATI', '', '', 'BHADRAWATI', '', '', '', 442902, '', '', '', '', 041386, 041445, 000059, '2023-06-19', 1, 0, '', '', '', '', '21', NULL),
(572, 00060357, 442810152, 152, '35170000009', ' GHEWARCHAND BUDHMALJI BAID                  ', 01, 'N', 060, 13, '', '', '', 'Proprietor', '', '', 'NEHRU WARD HINGANGHAT', 'HINGANGHAT DIST WARDHA', 'STATE MAHARASHTRA', '', '', 'HINGANGHAT', '', '', '', 442301, '', '', '', '', 062826, 062885, 000009, '2023-06-19', 1, 0, '', '', '', '', '35', NULL),
(573, 00060356, 414873001, 001, '34173000004', 'HOTEL ASNANI AND PERMIT ROOM                 ', 01, 'N', 045, 13, '', 'ASNANI MUKESH PURUSHOTTAM', 'ASNANI VISHNU DAULATRAM', 'Proprietor', 'Proprietor', '', '67 MUKINDPUR NEVASA ', 'PHATA TQ NEVASA', 'DIST AHMEDNAGAR', '', '', 'NEVASA', '', '', '', 414603, '', '', '', '', 001301, 001345, 000004, '2023-06-19', 1, 0, '', '', '', '', '34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reprint_req_collection`
--

CREATE TABLE IF NOT EXISTS `tb_reprint_req_collection` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) unsigned zerofill NOT NULL,
  `cps_branchmicr_code` int(3) unsigned zerofill NOT NULL,
  `cps_account_no` varchar(30) NOT NULL,
  `cps_act_name` varchar(45) NOT NULL,
  `cps_no_of_books` int(2) unsigned zerofill NOT NULL,
  `cps_dly_bearer_order` varchar(1) NOT NULL,
  `cps_book_size` int(3) unsigned zerofill NOT NULL,
  `cps_tr_code` int(2) unsigned zerofill NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
  `cps_act_telephone_res` varchar(15) NOT NULL,
  `cps_act_telephone_off` varchar(15) NOT NULL,
  `cps_act_mobile` varchar(15) NOT NULL,
  `cps_ifsc_code` varchar(12) NOT NULL,
  `cps_chq_no_from` bigint(6) unsigned zerofill NOT NULL,
  `cps_chq_no_to` bigint(6) unsigned zerofill NOT NULL,
  `cps_micr_account_no` int(6) unsigned zerofill NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int(6) NOT NULL,
  `cps_is_reprint` int(1) NOT NULL DEFAULT '0',
  `cps_pr_code` varchar(4) NOT NULL,
  `cps_bsr_code` varchar(6) NOT NULL,
  `cps_short_name` varchar(40) DEFAULT NULL,
  `cps_product_code` varchar(5) DEFAULT NULL,
  `branch_sub_code` varchar(10) DEFAULT NULL,
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_reprint_req_collection`
--

INSERT INTO `tb_reprint_req_collection` (`id`, `cps_unique_req`, `cps_micr_code`, `cps_branchmicr_code`, `cps_account_no`, `cps_act_name`, `cps_no_of_books`, `cps_dly_bearer_order`, `cps_book_size`, `cps_tr_code`, `cps_atpar`, `cps_act_jointname1`, `cps_act_jointname2`, `cps_auth_sign1`, `cps_auth_sign2`, `cps_auth_sign3`, `cps_act_address1`, `cps_act_address2`, `cps_act_address3`, `cps_act_address4`, `cps_act_address5`, `cps_act_city`, `cps_state`, `cps_country`, `cps_emailid`, `cps_act_pin`, `cps_act_telephone_res`, `cps_act_telephone_off`, `cps_act_mobile`, `cps_ifsc_code`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_micr_account_no`, `cps_date`, `cps_process_user_id`, `cps_is_reprint`, `cps_pr_code`, `cps_bsr_code`, `cps_short_name`, `cps_product_code`, `branch_sub_code`, `bank_name`) VALUES
(1, 00059486, 442810102, 102, '18021001466', 'KISHOR READYMADE STORES', 01, 'N', 060, 11, '', '', '', 'Proprietor', '', '', 'KISHOR REDYMADE STORES', 'GOAL BAZAR BAZAR WAR          ', 'D                      ', '', '', ' CHANDRAPUR   ', '', '', '', 442402, '', '', '', '', 145606, 145665, 001466, '2023-06-08', 16, 0, '', '', NULL, '', '18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_statemaster`
--

CREATE TABLE IF NOT EXISTS `tb_statemaster` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_code` varchar(7) NOT NULL,
  `state_name_al` varchar(4) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `tb_suburbmaster` (
  `suburb_id` int(240) NOT NULL AUTO_INCREMENT,
  `suburb_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `suburb_name_al` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(240) NOT NULL,
  `state_id` int(240) NOT NULL,
  `city_id` int(240) NOT NULL,
  `is_delete` int(2) NOT NULL,
  PRIMARY KEY (`suburb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_suburbmaster`
--

INSERT INTO `tb_suburbmaster` (`suburb_id`, `suburb_name`, `suburb_postal_code`, `suburb_code`, `suburb_name_al`, `country_id`, `state_id`, `city_id`, `is_delete`) VALUES
(1, 'AMRAVATI', '444601', 'AMR', 'AMR', 1, 2, 1, 0),
(2, 'YAVATMAL-', '445001', 'YAV001', 'YAV', 1, 2, 2, 0),
(3, 'PATANBORI', '445305', 'PAT001', 'PAT', 1, 2, 3, 0),
(4, 'ARNI', '445103', 'ARN001', 'ARN', 1, 2, 4, 0),
(5, 'WANI', '445304', 'WAN001', 'WAN', 1, 2, 5, 0),
(6, 'UMARKHED', '445206', 'UMA001', 'UMA', 1, 2, 6, 0),
(7, 'DIGRAS', '445203', 'DIG001', 'DIG', 1, 2, 7, 0),
(8, 'NER', '445102', 'NER001', 'NER', 1, 2, 8, 0),
(9, 'GHATANJI', '445301', 'GHA001', 'GHA', 1, 2, 9, 0),
(10, 'DHANKI', '445207', 'DHA001', 'DHA', 1, 2, 10, 0),
(11, 'PANDHARKAWADA', '445302', 'PAN001', 'PAN', 1, 2, 11, 0),
(12, 'DARWHA', '445202', 'DAR001', 'DAR', 1, 2, 12, 0),
(13, 'RALEGAON', '445402', 'RAL001', 'RAL', 1, 2, 13, 0),
(14, 'KALAMB', '445401', 'KAL001', 'KAL', 1, 2, 14, 0),
(15, 'PUSAD', '445204', 'PUS001', 'PUS', 1, 2, 15, 0),
(16, 'VEER SAEAKAR', '0445001', 'VEE001', 'VEE', 1, 2, 16, 0),
(17, 'BABHULGAON', '445101', 'BAB001', 'BAB', 1, 2, 17, 0),
(18, 'WADGAON', '00445001', 'WAD001', 'WAD', 1, 2, 18, 0),
(19, 'CHANDRAPUR', '442402', 'CHA001', 'CHA', 1, 2, 19, 0),
(20, 'GADCHANDUR', '442908', 'GAD001', 'GAD', 1, 2, 21, 0),
(21, 'BHADARWATI', '442902', 'BHA001', 'BHA', 1, 2, 22, 0),
(22, 'NAGPUR', '440015', 'NAG001', 'NAG', 1, 2, 23, 0),
(23, 'GANDHIBAG ', '0440001', 'GAN002', 'NAG', 1, 2, 24, 0),
(24, 'AKOLA', '444002', 'AKO001', 'AKO', 1, 2, 25, 0),
(25, 'NANDED', '431601', 'NAN001', 'NAN', 1, 2, 26, 0),
(26, 'GONDIA', '441601', 'GON001', 'GON', 1, 2, 27, 0),
(27, 'WASHIM', '444505', 'WAS001', 'WAS', 1, 2, 28, 0),
(28, 'AURANGABAD', '431001', 'AUR001', 'AUR', 1, 2, 29, 0),
(29, 'JALNA', '431203', 'JAL001', 'JAL', 1, 2, 30, 0),
(30, 'KOTHRUD PUNE', '411038', 'KOT001', 'KOT', 1, 2, 31, 0),
(31, 'AHMEDNAGAR', '414001', 'AHM001', 'AHM', 1, 2, 32, 0),
(32, 'HINGANGHAT', '442301', 'HIN001', 'HIN', 1, 2, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_uploadingdata`
--

CREATE TABLE IF NOT EXISTS `tb_uploadingdata` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cps_unique_req` bigint(8) unsigned zerofill NOT NULL,
  `cps_micr_code` int(3) NOT NULL,
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
  `cps_act_pin` int(30) NOT NULL,
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
  `bank_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_uploadingdata`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
