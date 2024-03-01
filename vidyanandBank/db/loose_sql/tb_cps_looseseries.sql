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
-- Table structure for table `tb_cps_looseseries`
--

DROP TABLE IF EXISTS `tb_cps_looseseries`;
CREATE TABLE IF NOT EXISTS `tb_cps_looseseries` (
  `series_id` int NOT NULL AUTO_INCREMENT,
  `series_bank_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `series_branch_id` int NOT NULL,
  `series_branch_code` int(3) UNSIGNED ZEROFILL NOT NULL,
  `series_from` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_to` int(6) UNSIGNED ZEROFILL NOT NULL,
  `series_lastno` int(6) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tb_cps_looseseries`
--

INSERT INTO `tb_cps_looseseries` (`series_id`, `series_bank_id`, `series_branch_id`, `series_branch_code`, `series_from`, `series_to`, `series_lastno`) VALUES
(3, 001, 5, 151, 000010, 999999, 000019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
