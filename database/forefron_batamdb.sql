-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 06:08 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forefron_batamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `certif_register`
--

CREATE TABLE `certif_register` (
  `id` int(11) NOT NULL,
  `management_system` varchar(255) DEFAULT NULL,
  `type_management_system` varchar(255) DEFAULT NULL,
  `type_application` varchar(255) DEFAULT NULL,
  `standard_reference` varchar(255) DEFAULT NULL,
  `issued_by` varchar(255) DEFAULT NULL,
  `date_ready_review` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `scope_company` varchar(255) DEFAULT NULL,
  `address_site` varchar(255) DEFAULT NULL,
  `country_site` varchar(255) DEFAULT NULL,
  `state_site` varchar(255) DEFAULT NULL,
  `city_site` varchar(255) DEFAULT NULL,
  `postal_code_site` varchar(255) DEFAULT NULL,
  `management_fulltime` varchar(255) DEFAULT NULL,
  `management_parttime` varchar(255) DEFAULT NULL,
  `management_totalshift` varchar(255) DEFAULT NULL,
  `management_workonsite` varchar(255) DEFAULT NULL,
  `management_workoffsite` varchar(255) DEFAULT NULL,
  `administration_fulltime` varchar(255) DEFAULT NULL,
  `administration_parttime` varchar(255) DEFAULT NULL,
  `administration_totalshift` varchar(255) DEFAULT NULL,
  `administration_workonsite` varchar(255) DEFAULT NULL,
  `administration_workoffsite` varchar(255) DEFAULT NULL,
  `it_fulltime` varchar(255) DEFAULT NULL,
  `it_parttime` varchar(255) DEFAULT NULL,
  `it_totalshift` varchar(255) DEFAULT NULL,
  `it_workonsite` varchar(255) DEFAULT NULL,
  `it_workoffsite` varchar(255) DEFAULT NULL,
  `support_fulltime` varchar(255) DEFAULT NULL,
  `support_parttime` varchar(255) DEFAULT NULL,
  `support_totalshift` varchar(255) DEFAULT NULL,
  `support_workonsite` varchar(255) DEFAULT NULL,
  `support_workoffsite` varchar(255) DEFAULT NULL,
  `sales_fulltime` varchar(255) DEFAULT NULL,
  `sales_parttime` varchar(255) DEFAULT NULL,
  `sales_totalshift` varchar(255) DEFAULT NULL,
  `sales_workonsite` varchar(255) DEFAULT NULL,
  `sales_workoffsite` varchar(255) DEFAULT NULL,
  `qc_hse_fulltime` varchar(255) DEFAULT NULL,
  `qc_hse_parttime` varchar(255) DEFAULT NULL,
  `qc_hse_totalshift` varchar(255) DEFAULT NULL,
  `qc_hse_workonsite` varchar(255) DEFAULT NULL,
  `qc_hse_workoffsite` varchar(255) DEFAULT NULL,
  `labourers_fulltime` varchar(255) DEFAULT NULL,
  `labourers_parttime` varchar(255) DEFAULT NULL,
  `labourers_totalshift` varchar(255) DEFAULT NULL,
  `labourers_workonsite` varchar(255) DEFAULT NULL,
  `labourers_workoffsite` varchar(255) DEFAULT NULL,
  `helper_fulltime` varchar(255) DEFAULT NULL,
  `helper_parttime` varchar(255) DEFAULT NULL,
  `helper_totalshift` varchar(255) DEFAULT NULL,
  `helper_workonsite` varchar(255) DEFAULT NULL,
  `helper_workoffsite` varchar(255) DEFAULT NULL,
  `other_fulltime` varchar(255) DEFAULT NULL,
  `other_parttime` varchar(255) DEFAULT NULL,
  `other_totalshift` varchar(255) DEFAULT NULL,
  `other_workonsite` varchar(255) DEFAULT NULL,
  `other_workoffsite` varchar(255) DEFAULT NULL,
  `add_comment` text,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `main_language` varchar(255) DEFAULT NULL,
  `how_you_hear_us` varchar(255) DEFAULT NULL,
  `consultant_name` varchar(255) DEFAULT NULL,
  `consultant_phone` varchar(255) DEFAULT NULL,
  `consultant_email` varchar(255) DEFAULT NULL,
  `consultant_website` varchar(255) DEFAULT NULL,
  `num_audit` int(11) DEFAULT NULL,
  `day_audit` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 = Wait Review by QA; 1 = ',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_delete` int(11) NOT NULL DEFAULT '1' COMMENT '1 = active; 0 = deleted;'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certif_register`
--

INSERT INTO `certif_register` (`id`, `management_system`, `type_management_system`, `type_application`, `standard_reference`, `issued_by`, `date_ready_review`, `company_name`, `scope_company`, `address_site`, `country_site`, `state_site`, `city_site`, `postal_code_site`, `management_fulltime`, `management_parttime`, `management_totalshift`, `management_workonsite`, `management_workoffsite`, `administration_fulltime`, `administration_parttime`, `administration_totalshift`, `administration_workonsite`, `administration_workoffsite`, `it_fulltime`, `it_parttime`, `it_totalshift`, `it_workonsite`, `it_workoffsite`, `support_fulltime`, `support_parttime`, `support_totalshift`, `support_workonsite`, `support_workoffsite`, `sales_fulltime`, `sales_parttime`, `sales_totalshift`, `sales_workonsite`, `sales_workoffsite`, `qc_hse_fulltime`, `qc_hse_parttime`, `qc_hse_totalshift`, `qc_hse_workonsite`, `qc_hse_workoffsite`, `labourers_fulltime`, `labourers_parttime`, `labourers_totalshift`, `labourers_workonsite`, `labourers_workoffsite`, `helper_fulltime`, `helper_parttime`, `helper_totalshift`, `helper_workonsite`, `helper_workoffsite`, `other_fulltime`, `other_parttime`, `other_totalshift`, `other_workonsite`, `other_workoffsite`, `add_comment`, `name`, `title`, `position`, `phone`, `email`, `website`, `main_language`, `how_you_hear_us`, `consultant_name`, `consultant_phone`, `consultant_email`, `consultant_website`, `num_audit`, `day_audit`, `status`, `date_created`, `status_delete`) VALUES
(1, 'ISO 9001:2015', 'Single', 'New', '1', '1', '2020-08-20', '1', '', '1', 'Bangladesh', 'Dhaka', 'Dhaka', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, '2020-08-20 02:24:06', 1),
(2, 'ISO 9001:2015', 'Single', 'New', '2', '2', '2020-08-20', '2', '2', '2', 'Bahamas The', 'Abaco', 'Coopers Town', '123', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '-3', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, 0, '2020-08-20 02:28:29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certif_register`
--
ALTER TABLE `certif_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certif_register`
--
ALTER TABLE `certif_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
