-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2024 at 07:05 AM
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
-- Database: `cps_d_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_permissions`
--

DROP TABLE IF EXISTS `assign_permissions`;
CREATE TABLE IF NOT EXISTS `assign_permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `manage_bank_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assign_permissions_manage_bank_id_foreign` (`manage_bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=683 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_permissions`
--

INSERT INTO `assign_permissions` (`id`, `manage_bank_id`, `name`, `created_at`, `updated_at`) VALUES
(301, 11, 'country.add', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(302, 11, 'country.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(303, 11, 'country.edit', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(304, 11, 'country.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(305, 11, 'state.add', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(306, 11, 'state.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(307, 11, 'state.edit', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(308, 11, 'state.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(309, 11, 'branch.add', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(310, 11, 'branch.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(311, 11, 'branch.edit', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(312, 11, 'branch.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(313, 11, 'transaction-code.add', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(314, 11, 'transaction-code.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(315, 11, 'transaction-code.edit', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(316, 11, 'transaction-code.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(317, 11, 'cheque-series.add', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(318, 11, 'cheque-series.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(319, 11, 'cheque-series.edit', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(320, 11, 'cheque-series.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(321, 11, 'bank.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(322, 11, 'transaction.delete', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(323, 11, 'transaction.filter', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(324, 11, 'transaction.print', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(325, 11, 'transaction.upload', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(326, 11, 'pending-print-req.cancel', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(327, 11, 'pending-print-req.print', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(328, 11, 'pending-print-req.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(329, 11, 'reprint-request.print', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(330, 11, 'reprint-request.view', '2023-07-13 08:36:43', '2023-07-13 08:36:43'),
(331, 12, 'country.add', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(332, 12, 'country.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(333, 12, 'country.edit', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(334, 12, 'country.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(335, 12, 'state.add', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(336, 12, 'state.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(337, 12, 'state.edit', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(338, 12, 'state.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(339, 12, 'branch.add', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(340, 12, 'branch.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(341, 12, 'branch.edit', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(342, 12, 'branch.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(343, 12, 'transaction-code.add', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(344, 12, 'transaction-code.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(345, 12, 'transaction-code.edit', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(346, 12, 'transaction-code.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(347, 12, 'cheque-series.add', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(348, 12, 'cheque-series.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(349, 12, 'cheque-series.edit', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(350, 12, 'cheque-series.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(351, 12, 'bank.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(352, 12, 'transaction.delete', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(353, 12, 'transaction.filter', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(354, 12, 'transaction.print', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(355, 12, 'transaction.upload', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(356, 12, 'pending-print-req.cancel', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(357, 12, 'pending-print-req.print', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(358, 12, 'pending-print-req.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(359, 12, 'reprint-request.print', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(360, 12, 'reprint-request.view', '2023-07-13 08:38:09', '2023-07-13 08:38:09'),
(361, 13, 'country.add', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(362, 13, 'country.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(363, 13, 'country.edit', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(364, 13, 'country.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(365, 13, 'state.add', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(366, 13, 'state.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(367, 13, 'state.edit', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(368, 13, 'state.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(369, 13, 'branch.add', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(370, 13, 'branch.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(371, 13, 'branch.edit', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(372, 13, 'branch.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(373, 13, 'transaction-code.add', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(374, 13, 'transaction-code.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(375, 13, 'transaction-code.edit', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(376, 13, 'transaction-code.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(377, 13, 'cheque-series.add', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(378, 13, 'cheque-series.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(379, 13, 'cheque-series.edit', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(380, 13, 'cheque-series.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(381, 13, 'bank.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(382, 13, 'transaction.delete', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(383, 13, 'transaction.filter', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(384, 13, 'transaction.print', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(385, 13, 'transaction.upload', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(386, 13, 'pending-print-req.cancel', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(387, 13, 'pending-print-req.print', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(388, 13, 'pending-print-req.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(389, 13, 'reprint-request.print', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(390, 13, 'reprint-request.view', '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(391, 14, 'country.add', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(392, 14, 'country.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(393, 14, 'country.edit', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(394, 14, 'country.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(395, 14, 'state.add', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(396, 14, 'state.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(397, 14, 'state.edit', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(398, 14, 'state.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(399, 14, 'branch.add', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(400, 14, 'branch.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(401, 14, 'branch.edit', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(402, 14, 'branch.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(403, 14, 'transaction-code.add', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(404, 14, 'transaction-code.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(405, 14, 'transaction-code.edit', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(406, 14, 'transaction-code.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(407, 14, 'cheque-series.add', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(408, 14, 'cheque-series.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(409, 14, 'cheque-series.edit', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(410, 14, 'cheque-series.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(411, 14, 'bank.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(412, 14, 'transaction.delete', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(413, 14, 'transaction.filter', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(414, 14, 'transaction.print', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(415, 14, 'transaction.upload', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(416, 14, 'pending-print-req.cancel', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(417, 14, 'pending-print-req.print', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(418, 14, 'pending-print-req.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(419, 14, 'reprint-request.print', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(420, 14, 'reprint-request.view', '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(618, 15, 'country.add', '2023-12-27 08:31:09', '2023-12-27 08:31:09'),
(619, 15, 'country.delete', '2023-12-27 08:31:09', '2023-12-27 08:31:09'),
(620, 15, 'country.edit', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(621, 15, 'country.view', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(622, 15, 'state.add', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(623, 15, 'state.delete', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(624, 15, 'state.edit', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(625, 15, 'state.view', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(626, 15, 'branch.add', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(627, 15, 'branch.delete', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(628, 15, 'branch.edit', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(629, 15, 'branch.view', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(630, 15, 'transaction-code.add', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(631, 15, 'transaction-code.delete', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(632, 15, 'transaction-code.edit', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(633, 15, 'transaction-code.view', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(634, 15, 'cheque-series.add', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(635, 15, 'cheque-series.delete', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(636, 15, 'cheque-series.edit', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(637, 15, 'cheque-series.view', '2023-12-27 08:31:10', '2023-12-27 08:31:10'),
(638, 15, 'bank.view', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(639, 15, 'transaction.delete', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(640, 15, 'transaction.filter', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(641, 15, 'transaction.print', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(642, 15, 'transaction.upload', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(643, 15, 'pending-print-req.cancel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(644, 15, 'pending-print-req.print', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(645, 15, 'pending-print-req.view', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(646, 15, 'reprint-request.print', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(647, 15, 'reprint-request.view', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(648, 15, 'report.printed-report-selected-period', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(649, 15, 'report.printed-report-day-wise', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(650, 15, 'report.printed-report-excel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(651, 15, 'report.printed-report-pdf', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(652, 15, 'report.consolidate-report-daily', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(653, 15, 'report.consolidate-report-daily-excel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(654, 15, 'report.consolidate-report-daily-pdf', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(655, 15, 'report.consolidate-report-monthly', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(656, 15, 'report.consolidate-report-monthly-excel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(657, 15, 'report.consolidate-report-monthly-pdf', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(658, 15, 'report.reprint', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(659, 15, 'report.reprint-excel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(660, 15, 'report.reprint-pdf', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(661, 15, 'report.customer', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(662, 15, 'report.customer-excel', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(663, 15, 'report.customer-pdf', '2023-12-27 08:31:11', '2023-12-27 08:31:11'),
(664, 15, 'report.outputfile', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(665, 15, 'report.outputfile-via-text', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(666, 15, 'report.get-outputfile-excel', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(667, 15, 'report.get-outputfile-via-text', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(668, 15, 'role.edit', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(669, 15, 'role.view', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(670, 15, 'manage-user.add', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(671, 15, 'manage-user.delete', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(672, 15, 'manage-user.edit', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(673, 15, 'manage-user.view', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(674, 15, 'backup', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(675, 15, 'setting', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(676, 15, 'process-reprint.delete', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(677, 15, 'process-reprint.print-in-bunch', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(678, 15, 'process-reprint.print-requisiion-only', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(679, 15, 'process-reprint.print-selected-pages', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(680, 15, 'reprint-single-leaf.delete', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(681, 15, 'reprint-single-leaf.print', '2023-12-27 08:31:12', '2023-12-27 08:31:12'),
(682, 15, 'reprint-single-leaf.view', '2023-12-27 08:31:12', '2023-12-27 08:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

DROP TABLE IF EXISTS `log_table`;
CREATE TABLE IF NOT EXISTS `log_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `table_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `record_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `action_performed` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_details` text COLLATE utf8mb4_unicode_ci,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_table`
--

INSERT INTO `log_table` (`id`, `table_name`, `name`, `record_id`, `user_id`, `action_performed`, `previous_details`, `details`, `message`, `created`) VALUES
(97, 'tb_print_req_collection', 'Output File', '', 1, 'Output File via text', '[]', '[]', 'Total 16 Record Generate to Output File Report', '2023-07-10 11:44:47'),
(98, 'tb_countrymaster', 'Country Master', '7', 1, 'update', '{\"country_name\":\"Germanyy\",\"country_code\":\"16\",\"country_isdelete\":1}', '{\"country_name\":\"Germany\",\"country_code\":\"16\",\"country_isdelete\":\"1\"}', '', '2023-07-10 17:55:21'),
(99, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992057.png\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"360\",\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992057.png\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 17:57:37'),
(100, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992107.png\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"360\",\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992107.png\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 17:58:27'),
(101, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992181.png\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"360\",\"banklogo\":\"setting\\/banklogo-1688637465.png\",\"desktop_image\":\"setting\\/desktopimage-1688992181.png\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 17:59:41'),
(102, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"360\",\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 18:00:20'),
(103, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"360\",\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 18:28:37'),
(104, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":360,\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"5\",\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 18:28:41'),
(105, 'tb_printadmin', 'System Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-10 18:28:41'),
(106, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-10 18:28:51'),
(107, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":5,\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"400\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"500\",\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-10 18:28:56'),
(108, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-11 10:18:15'),
(109, 'tb_uploadingdata', 'Upload & Print With Text File', '197', 1, 'insert', '[]', '[{\"id\":197,\"cps_unique_req\":\"1024552\",\"cps_micr_code\":\"411312006\",\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"0780511300000043\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":\"410501\",\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":1,\"cps_product_code\":\"023     \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 record uploaded', '2023-07-11 10:18:47'),
(110, 'tb_uploadingdata', 'Upload & Print With Text File', '197', 1, 'delete', '[{\"id\":197,\"cps_unique_req\":1024552,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"078051130000004\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":\"1\",\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', '[]', 'Total 1/1 record deleted', '2023-07-11 10:19:16'),
(111, 'tb_uploadingdata', 'Upload & Print With Text File', '198', 1, 'insert', '[]', '[{\"id\":198,\"cps_unique_req\":\"1024552\",\"cps_micr_code\":\"411312006\",\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"0780511300000043\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":\"410501\",\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":1,\"cps_product_code\":\"023     \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 record uploaded', '2023-07-11 10:19:24'),
(112, 'tb_bankdetails', 'Bank Master', '1', 1, 'update', '{\"bank_name\":\"Axis Bank\",\"bank_code\":442,\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":1,\"bank_state_id\":2,\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":0,\"number_digit_sub_code\":0,\"starting_index_sub_code\":0}', '{\"bank_name\":\"Axis Bank1@\",\"bank_code\":\"442\",\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":\"1\",\"bank_state_id\":\"2\",\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":\"0\",\"number_digit_sub_code\":\"0\",\"starting_index_sub_code\":\"0\"}', '', '2023-07-11 10:20:19'),
(113, 'tb_uploadingdata', 'Upload & Print With Text File', '198', 1, 'delete', '[{\"id\":198,\"cps_unique_req\":1024552,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"078051130000004\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":\"1\",\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', '[]', 'Total 1/1 record deleted', '2023-07-11 10:20:26'),
(114, 'tb_uploadingdata', 'Upload & Print With Text File', '199', 1, 'insert', '[]', '[{\"id\":199,\"cps_unique_req\":\"1024552\",\"cps_micr_code\":\"411312006\",\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"0780511300000043\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":\"410501\",\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":1,\"cps_product_code\":\"023     \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 record uploaded', '2023-07-11 10:20:30'),
(115, 'tb_bankdetails', 'Bank Master', '1', 1, 'update', '{\"bank_name\":\"Axis Bank1@\",\"bank_code\":442,\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":1,\"bank_state_id\":2,\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":0,\"number_digit_sub_code\":0,\"starting_index_sub_code\":0}', '{\"bank_name\":\"Axis Bank\",\"bank_code\":\"442\",\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":\"1\",\"bank_state_id\":\"2\",\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":\"0\",\"number_digit_sub_code\":\"0\",\"starting_index_sub_code\":\"0\"}', '', '2023-07-11 10:20:54'),
(116, 'tb_cps_settings', 'Setting', '', 1, 'update', '{\"chk_taken_from\":0,\"nooffailedpasswordattempt\":400,\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":500,\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":2914}', '{\"chk_taken_from\":\"0\",\"nooffailedpasswordattempt\":\"500\",\"homescreen_text\":\"JANATA URBAN CO-OP.\",\"autolockminutes\":\"500\",\"banklogo\":\"setting\\/banklogo-1688992220.png\",\"desktop_image\":\"setting\\/desktopimage-1688992220.jpg\",\"toner_leaves_capacity\":\"2914\"}', '', '2023-07-11 10:23:59'),
(117, '', 'Database Backup', '', 1, 'backup', '[]', '[]', '', '2023-07-11 10:25:39'),
(118, '', 'Database Backup', '', 1, 'backup', '[]', '[]', '', '2023-07-11 10:26:05'),
(119, '', 'Database Backup', '', 1, 'backup', '[]', '[]', '', '2023-07-11 10:44:29'),
(120, '', 'Database Backup', '', 1, 'backup', '[]', '[]', '', '2023-07-11 10:45:05'),
(121, 'tb_bankdetails', 'Bank Master', '1', 1, 'update', '{\"bank_name\":\"Axis Bank\",\"bank_code\":442,\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":1,\"bank_state_id\":2,\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":0,\"number_digit_sub_code\":0,\"starting_index_sub_code\":0}', '{\"bank_name\":\"Axis Bank11@1\",\"bank_code\":\"442\",\"bank_address1\":\"Ghatkopar\",\"bank_address2\":null,\"bank_country_id\":\"1\",\"bank_state_id\":\"2\",\"bank_pin\":\"421\",\"bank_contact_no1\":null,\"bank_contact_no2\":null,\"bank_contact_per1\":\"User\",\"bank_contact_per2\":null,\"bank_contact_per_LL1\":null,\"bank_contact_per_LL2\":null,\"bank_emailid\":null,\"bank_emailid2\":null,\"bank_website\":null,\"bank_printers\":\"a:1:{i:0;a:3:{i:0;s:25:\\\"HP LaserJet Pro M304-M305\\\";i:1;s:6:\\\"Tray 1\\\";i:2;s:6:\\\"Tray 2\\\";}}\",\"is_branch_sub_code\":\"0\",\"number_digit_sub_code\":\"0\",\"starting_index_sub_code\":\"0\"}', '', '2023-07-11 10:45:19'),
(122, '', 'Database Backup', '', 1, 'backup', '[]', '[]', '', '2023-07-11 10:45:27'),
(123, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-11 11:41:36'),
(124, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-11 11:48:52'),
(125, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-12 09:51:39'),
(126, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-12 17:09:13'),
(127, 'tb_printadmin', 'System Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-12 18:11:38'),
(128, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-12 18:11:48'),
(129, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-13 10:11:00'),
(130, 'tb_uploadingdata', 'Upload & Print With Text File', '200', 1, 'insert', '[]', '[{\"id\":200,\"cps_unique_req\":\"10245512\",\"cps_micr_code\":\"411312006\",\"cps_branchmicr_code\":\"006\",\"cps_tr_code\":\"11\",\"cps_account_no\":\"07805113008000043\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":\"410501\",\"cps_no_of_books\":\"2\",\"cps_book_size\":\"5\",\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":\"470011\",\"cps_chq_no_to\":\"470020\",\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2017-10-06\",\"cps_micr_account_no\":\"000043\",\"cps_process_user_id\":1,\"cps_product_code\":\"023     \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 record uploaded', '2023-07-13 15:29:20'),
(131, 'tb_print_req_collection', 'Print Cheques', '113', 1, 'print', '[]', '[{\"id\":113,\"cps_unique_req\":1024552,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078051130000004\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":2,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":470011,\"cps_chq_no_to\":470020,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-13\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 record printed', '2023-07-13 15:29:48'),
(132, 'tb_cps_reprintque', 'Reprint Cheques Request', '97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113', 1, 'reprint-request', '[{\"id\":97,\"cps_unique_req\":917250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":920061,\"cps_chq_no_to\":920065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":98,\"cps_unique_req\":249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":10,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":300056,\"cps_chq_no_to\":300060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":99,\"cps_unique_req\":250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":300061,\"cps_chq_no_to\":300065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":100,\"cps_unique_req\":1249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":10,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":400056,\"cps_chq_no_to\":400060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":101,\"cps_unique_req\":1250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":400061,\"cps_chq_no_to\":400065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":102,\"cps_unique_req\":2749,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":10,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":800056,\"cps_chq_no_to\":800060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":103,\"cps_unique_req\":2750,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":800061,\"cps_chq_no_to\":800065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":104,\"cps_unique_req\":17249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":10,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":900056,\"cps_chq_no_to\":900060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":105,\"cps_unique_req\":17250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":900061,\"cps_chq_no_to\":900065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":106,\"cps_unique_req\":9249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":320056,\"cps_chq_no_to\":320060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":107,\"cps_unique_req\":9250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":10,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":320061,\"cps_chq_no_to\":320065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":108,\"cps_unique_req\":91249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":420056,\"cps_chq_no_to\":420060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":109,\"cps_unique_req\":12540,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":420061,\"cps_chq_no_to\":420065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":110,\"cps_unique_req\":92749,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":820056,\"cps_chq_no_to\":820060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":111,\"cps_unique_req\":92750,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":10,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":820061,\"cps_chq_no_to\":820065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":112,\"cps_unique_req\":917249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":920056,\"cps_chq_no_to\":920060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-10\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null},{\"id\":113,\"cps_unique_req\":1024552,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078051130000004\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":2,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":470011,\"cps_chq_no_to\":470020,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-13\",\"cps_micr_account_no\":43,\"cps_process_user_id\":1,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', '[]', 'Total 17 request send for reprint', '2023-07-13 15:34:21'),
(133, 'tb_printadmin', 'Login', '2', 2, 'insert', '{\"username\":\"reprint\",\"userid\":\"reprint\"}', '[]', '', '2023-07-13 15:34:35'),
(134, 'tb_reprint_req_collection', 'Reprint Single Leaf', '38', 2, 'reprint', '[]', '[{\"id\":38,\"cps_unique_req\":249,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":10,\"cps_account_no\":\"078011300200073\",\"cps_act_name\":\"NAMRATA LAND *DEVELOPERS\",\"cps_act_jointname1\":\"Joint name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":300056,\"cps_chq_no_to\":300060,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-13\",\"cps_micr_account_no\":43,\"cps_process_user_id\":2,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 single leaf reprint request printed.', '2023-07-13 15:34:49'),
(135, 'tb_reprint_req_collection', 'Reprint Single Leaf', '39', 2, 'reprint', '[]', '[{\"id\":39,\"cps_unique_req\":1024552,\"cps_micr_code\":411312006,\"cps_branchmicr_code\":6,\"cps_tr_code\":11,\"cps_account_no\":\"078051130000004\",\"cps_act_name\":\"#NAMRATA LAND \\\"DEVELOPERS\",\"cps_act_jointname1\":\"\",\"cps_act_jointname2\":\"\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":2,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":470011,\"cps_chq_no_to\":470020,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-13\",\"cps_micr_account_no\":43,\"cps_process_user_id\":2,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 single leaf reprint request printed.', '2023-07-13 15:35:10'),
(136, 'tb_reprint_req_collection', 'Reprint Single Leaf', '40', 2, 'reprint', '[]', '[{\"id\":40,\"cps_unique_req\":917250,\"cps_micr_code\":411312008,\"cps_branchmicr_code\":8,\"cps_tr_code\":12,\"cps_account_no\":\"078011300100073\",\"cps_act_name\":\"NAMRATA LAND $DEVELOPERS\",\"cps_act_jointname1\":\"Joint Name 1\",\"cps_act_jointname2\":\"Joint Name 2\",\"cps_act_address1\":\"     ,SUCCESS MARKET\",\"cps_act_address2\":\"PUNA NASHIK HIGHWAY\",\"cps_act_address3\":\"CHAKAN              PUNE\",\"cps_act_address4\":\"\",\"cps_act_address5\":\"\",\"cps_act_city\":\"PUNE\",\"cps_act_pin\":410501,\"cps_no_of_books\":1,\"cps_book_size\":5,\"cps_dly_bearer_order\":\"Y\",\"cps_chq_no_from\":920061,\"cps_chq_no_to\":920065,\"cps_issue_date\":\"2017-10-06\",\"cps_date\":\"2023-07-13\",\"cps_micr_account_no\":43,\"cps_process_user_id\":2,\"cps_product_code\":\"023  \",\"cps_auth_sign1\":\"Proprietor\",\"cps_auth_sign2\":\"\",\"cps_auth_sign3\":\"\",\"cps_act_mobile\":\"9922884466\",\"cps_act_telephone_res\":\"86988844\",\"cps_act_telephone_off\":\"\",\"cps_bsr_code\":\"1\",\"branch_sub_code\":null}]', 'Total 1 single leaf reprint request printed.', '2023-07-13 15:35:45'),
(137, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-13 15:56:15'),
(138, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-13 16:34:26'),
(139, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-14 12:12:39'),
(140, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-18 11:47:12'),
(141, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-19 11:45:16'),
(142, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-07-21 15:32:37'),
(143, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-25 18:08:50'),
(144, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-25 18:09:29'),
(145, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-25 18:12:16'),
(146, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-25 18:14:57'),
(147, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-28 10:39:42'),
(148, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-28 15:49:45'),
(149, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-31 17:29:13'),
(150, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-08-31 17:29:17'),
(151, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-11-22 15:47:56'),
(152, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-11-22 15:48:41'),
(153, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-11-22 17:03:01'),
(154, 'tb_printadmin', 'Logout', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-11-22 17:07:21'),
(155, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-08 11:51:43'),
(156, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-11 14:29:29'),
(157, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 11:55:34'),
(158, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 12:05:25'),
(159, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 12:06:39'),
(160, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 12:59:47'),
(161, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 14:00:56'),
(162, 'tb_printadmin', 'Login', '1', 1, 'insert', '{\"username\":\"Superadmin\",\"userid\":\"superadmin\"}', '[]', '', '2023-12-27 18:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `manage_banks`
--

DROP TABLE IF EXISTS `manage_banks`;
CREATE TABLE IF NOT EXISTS `manage_banks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdomain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `sales_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_file_format_description` text COLLATE utf8mb4_unicode_ci,
  `sample_input_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file_format_description` text COLLATE utf8mb4_unicode_ci,
  `sample_output_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_requisition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_cheque` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_requirement` text COLLATE utf8mb4_unicode_ci,
  `printer_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printer_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_bit_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcp_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installation_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `training_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_date` date DEFAULT NULL,
  `licence_start_date` date DEFAULT NULL,
  `licence_end_date` date DEFAULT NULL,
  `module_access` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_banks`
--

INSERT INTO `manage_banks` (`id`, `name`, `subdomain`, `email`, `mobile`, `contact_person`, `state`, `city`, `address`, `sales_person`, `input_file_format_description`, `sample_input_file`, `output_file_format_description`, `sample_output_file`, `sample_requisition`, `sample_cheque`, `special_requirement`, `printer_brand`, `printer_model`, `os_name`, `os_bit_version`, `pcp_version`, `installation_by`, `installation_date`, `training_by`, `training_date`, `licence_start_date`, `licence_end_date`, `module_access`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Solapur', 'solapur', 'solapur@gmail.com', '999999999', 'Solapur', 'Maharastra', 'MUMBAI', 'Thane', 'Raghaw', NULL, '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'ABC', '2023-07-12', 'XYZ', '2023-07-12', '2023-07-12', NULL, 'country.add|country.delete|country.edit|country.view|state.add|state.delete|state.edit|state.view|branch.add|branch.delete|branch.edit|branch.view|transaction-code.add|transaction-code.delete|transaction-code.edit|transaction-code.view|cheque-series.add|cheque-series.delete|cheque-series.edit|cheque-series.view|bank.view|transaction.delete|transaction.filter|transaction.print|transaction.upload|pending-print-req.cancel|pending-print-req.print|pending-print-req.view|reprint-request.print|reprint-request.view', 1, '2023-07-13 11:12:57', '2023-07-13 11:12:57'),
(14, 'Melodie Little', 'gpb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, '1970-01-01', '1970-01-01', NULL, 'country.add|country.delete|country.edit|country.view|state.add|state.delete|state.edit|state.view|branch.add|branch.delete|branch.edit|branch.view|transaction-code.add|transaction-code.delete|transaction-code.edit|transaction-code.view|cheque-series.add|cheque-series.delete|cheque-series.edit|cheque-series.view|bank.view|transaction.delete|transaction.filter|transaction.print|transaction.upload|pending-print-req.cancel|pending-print-req.print|pending-print-req.view|reprint-request.print|reprint-request.view', 1, '2023-07-14 06:45:40', '2023-07-14 06:45:40'),
(15, 'Solapur Janta Sahakari Bank', 'sjsbbank', 'dev7@scube.net.in', '1234567890', NULL, 'maharashtra', 'Mumbai', 'Samrat mill compund vikhroli', NULL, NULL, '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Rohit', '2023-12-27', 'Rohit', '2023-12-27', '2024-12-27', '2025-12-27', 'country.add|country.delete|country.edit|country.view|state.add|state.delete|state.edit|state.view|branch.add|branch.delete|branch.edit|branch.view|transaction-code.add|transaction-code.delete|transaction-code.edit|transaction-code.view|cheque-series.add|cheque-series.delete|cheque-series.edit|cheque-series.view|bank.view|transaction.delete|transaction.filter|transaction.print|transaction.upload|pending-print-req.cancel|pending-print-req.print|pending-print-req.view|reprint-request.print|reprint-request.view|report.printed-report-selected-period|report.printed-report-day-wise|report.printed-report-excel|report.printed-report-pdf|report.consolidate-report-daily|report.consolidate-report-daily-excel|report.consolidate-report-daily-pdf|report.consolidate-report-monthly|report.consolidate-report-monthly-excel|report.consolidate-report-monthly-pdf|report.reprint|report.reprint-excel|report.reprint-pdf|report.customer|report.customer-excel|report.customer-pdf|report.outputfile|report.outputfile-via-text|report.get-outputfile-excel|report.get-outputfile-via-text|role.edit|role.view|manage-user.add|manage-user.delete|manage-user.edit|manage-user.view|backup|setting|process-reprint.delete|process-reprint.print-in-bunch|process-reprint.print-requisiion-only|process-reprint.print-selected-pages|reprint-single-leaf.delete|reprint-single-leaf.print|reprint-single-leaf.view', 1, '2023-12-27 06:29:44', '2023-12-27 06:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cps_settings`
--

DROP TABLE IF EXISTS `tb_cps_settings`;
CREATE TABLE IF NOT EXISTS `tb_cps_settings` (
  `inputfolderpath` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivefolderpath` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputfileformat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputfiledelimiter` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outputfolderpath` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outputfileformat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outputfiledelimiter` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeofprinter` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printermodel` int DEFAULT NULL,
  `chk_taken_from` int DEFAULT NULL,
  `chk_no_from` int UNSIGNED DEFAULT NULL,
  `chk_no_to` int UNSIGNED DEFAULT NULL,
  `nooffailedpasswordattempt` int DEFAULT NULL,
  `password_expiry` int DEFAULT NULL,
  `homescreen_text` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poweredby` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banklogo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desktop_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chq_Image` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_employeeid` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_helplineno1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_emailid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autolockminutes` int DEFAULT NULL,
  `help_contactperson` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_helplineno2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_install_date` date DEFAULT NULL,
  `license_period` int DEFAULT NULL,
  `license_end_date` date DEFAULT NULL,
  `license_no_of_users` int DEFAULT NULL,
  `license_cheque_leaves` int DEFAULT NULL,
  `license_users_leaves` int DEFAULT NULL,
  `license_users_leaves_value` int DEFAULT NULL,
  `toner_leaves_capacity` int DEFAULT NULL,
  `is_toner` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_cps_settings`
--

INSERT INTO `tb_cps_settings` (`inputfolderpath`, `archivefolderpath`, `inputfileformat`, `inputfiledelimiter`, `outputfolderpath`, `outputfileformat`, `outputfiledelimiter`, `typeofprinter`, `printermodel`, `chk_taken_from`, `chk_no_from`, `chk_no_to`, `nooffailedpasswordattempt`, `password_expiry`, `homescreen_text`, `poweredby`, `banklogo`, `desktop_image`, `chq_Image`, `country`, `help_employeeid`, `help_helplineno1`, `help_emailid`, `autolockminutes`, `help_contactperson`, `help_helplineno2`, `license_type`, `license_install_date`, `license_period`, `license_end_date`, `license_no_of_users`, `license_cheque_leaves`, `license_users_leaves`, `license_users_leaves_value`, `toner_leaves_capacity`, `is_toner`) VALUES
(NULL, 'uploads/', 'Excel', NULL, NULL, 'Excel', NULL, NULL, 0, 0, 100000, 500000, 500, 365, 'JANATA URBAN CO-OP.', 'DevHarsh Infotech Pvt Ltd', 'setting/banklogo-1688992220.png', '', NULL, NULL, NULL, NULL, NULL, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2914, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_printadmin`
--

DROP TABLE IF EXISTS `tb_printadmin`;
CREATE TABLE IF NOT EXISTS `tb_printadmin` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastlogintime` datetime DEFAULT NULL,
  `adminid` int NOT NULL AUTO_INCREMENT,
  `group_id` int DEFAULT NULL,
  `incorrect_attempt` int DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `password_status` int DEFAULT NULL,
  `user_type` int DEFAULT NULL,
  `userid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `is_temp_password` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_printadmin`
--

INSERT INTO `tb_printadmin` (`username`, `password`, `lastlogintime`, `adminid`, `group_id`, `incorrect_attempt`, `user_status`, `password_status`, `user_type`, `userid`, `create_date`, `is_temp_password`, `updated_by`, `updated_at`) VALUES
('Superadmin', '$2y$10$tq1Fr3Ly9vaJb7fsKeulze2YFUigTB0N//u74J1B8BZ4F1w.80ZSO', '2023-07-07 07:39:27', 1, 0, 0, 1, 1, 150, 'superadmin', '2023-07-07', NULL, 1, '2023-07-07 07:39:27'),
('reprint', '$2y$10$DVNtalwTmN/2Sx8.1OXQWewt2QzlAVxiG4TMXweOesPTr9.423m.C', '2023-07-06 12:14:41', 2, NULL, 0, 1, 1, 1, 'reprint', '2023-07-06', NULL, 1, '2023-07-06 12:14:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
