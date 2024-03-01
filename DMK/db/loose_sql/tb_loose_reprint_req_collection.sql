-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2023 at 09:44 AM
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
-- Database: `db_vidyanand_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_loose_reprint_req_collection`
--

DROP TABLE IF EXISTS `tb_loose_reprint_req_collection`;
CREATE TABLE IF NOT EXISTS `tb_loose_reprint_req_collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pay_branch_id` int NOT NULL,
  `cps_chq_no_from` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_chq_no_to` bigint(6) UNSIGNED ZEROFILL NOT NULL,
  `cps_no_of_books` int(2) UNSIGNED ZEROFILL NOT NULL,
  `cps_book_size` int(3) UNSIGNED ZEROFILL NOT NULL,
  `cps_date` date NOT NULL,
  `cps_process_user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_loose_reprint_req_collection`
--

INSERT INTO `tb_loose_reprint_req_collection` (`id`, `pay_branch_id`, `cps_chq_no_from`, `cps_chq_no_to`, `cps_no_of_books`, `cps_book_size`, `cps_date`, `cps_process_user_id`) VALUES
(1, 5, 000016, 000018, 01, 003, '2023-12-08', 16),
(2, 5, 000013, 000015, 01, 003, '2023-12-08', 16);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
