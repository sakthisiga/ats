-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 09:28 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aanoorgl_ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `ags_legal_jobs_build_tb`
--

CREATE TABLE `ags_legal_jobs_build_tb` (
  `alj_id` int(3) NOT NULL,
  `alj_name` varchar(25) NOT NULL,
  `alj_prop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ags_legal_jobs_build_tb`
--

INSERT INTO `ags_legal_jobs_build_tb` (`alj_id`, `alj_name`, `alj_prop`) VALUES
(1, 'Trademark Registration', 'trademark_registration'),
(2, 'Trademark Queries Reply', 'trademark_queries_reply'),
(3, 'Copyright', 'copyright'),
(4, 'Patent Right', 'patent_right'),
(5, 'Consultation', 'alj_consultation');

-- --------------------------------------------------------

--
-- Table structure for table `ags_legal_jobs_tb`
--

CREATE TABLE `ags_legal_jobs_tb` (
  `ags_legal_jobs_id` int(5) NOT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `trademark_registration` varchar(5) DEFAULT NULL,
  `trademark_queries_reply` varchar(5) DEFAULT NULL,
  `copyright` varchar(5) DEFAULT NULL,
  `patent_right` varchar(5) DEFAULT NULL,
  `alj_consultation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ags_legal_jobs_tb`
--

INSERT INTO `ags_legal_jobs_tb` (`ags_legal_jobs_id`, `lead_id`, `trademark_registration`, `trademark_queries_reply`, `copyright`, `patent_right`, `alj_consultation`) VALUES
(1, 0000000001, NULL, 'Y', 'Y', NULL, NULL),
(2, 0000000003, NULL, 'Y', NULL, NULL, NULL),
(3, 0000000004, NULL, 'Y', NULL, NULL, NULL),
(4, 0000000010, NULL, NULL, 'Y', NULL, NULL),
(5, 0000000011, NULL, NULL, NULL, 'Y', NULL),
(6, 0000000012, NULL, 'Y', NULL, NULL, NULL),
(7, 0000000018, NULL, NULL, 'Y', NULL, NULL),
(8, 0000000019, NULL, 'Y', NULL, NULL, NULL),
(9, 0000000020, NULL, 'Y', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ags_reg_jobs_build_tb`
--

CREATE TABLE `ags_reg_jobs_build_tb` (
  `arj_id` int(3) NOT NULL,
  `arj_name` varchar(25) NOT NULL,
  `arj_prop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ags_reg_jobs_build_tb`
--

INSERT INTO `ags_reg_jobs_build_tb` (`arj_id`, `arj_name`, `arj_prop`) VALUES
(1, 'Sales Tax Registration', 'sales_tax_registration'),
(2, 'Service Tax Registration', 'service_tax_registration'),
(3, 'Prof Tax Registration', 'prof_tax_registration'),
(4, 'MSME Registration', 'msme_registration'),
(5, 'Food License', 'food_license'),
(6, 'Fire License', 'fire_license'),
(7, 'IE Code', 'ie_code'),
(8, 'Lease Deed', 'lease_deed'),
(9, 'Partnership Deed', 'partnership_deed');

-- --------------------------------------------------------

--
-- Table structure for table `ags_reg_jobs_tb`
--

CREATE TABLE `ags_reg_jobs_tb` (
  `ags_reg_jobs_id` int(5) NOT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `sales_tax_registration` varchar(5) DEFAULT NULL,
  `service_tax_registration` varchar(5) DEFAULT NULL,
  `prof_tax_registration` varchar(5) DEFAULT NULL,
  `msme_registration` varchar(5) DEFAULT NULL,
  `food_license` varchar(5) DEFAULT NULL,
  `fire_license` varchar(5) DEFAULT NULL,
  `ie_code` varchar(5) DEFAULT NULL,
  `lease_deed` varchar(5) DEFAULT NULL,
  `partnership_deed` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ags_reg_jobs_tb`
--

INSERT INTO `ags_reg_jobs_tb` (`ags_reg_jobs_id`, `lead_id`, `sales_tax_registration`, `service_tax_registration`, `prof_tax_registration`, `msme_registration`, `food_license`, `fire_license`, `ie_code`, `lease_deed`, `partnership_deed`) VALUES
(1, 0000000001, NULL, NULL, 'Y', NULL, NULL, NULL, 'Y', NULL, NULL),
(2, 0000000002, NULL, 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0000000003, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y'),
(5, 0000000004, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL),
(6, 0000000007, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `audit_jobs_build_tb`
--

CREATE TABLE `audit_jobs_build_tb` (
  `ajb_id` int(3) NOT NULL,
  `ajb_name` varchar(25) NOT NULL,
  `ajb_prop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_jobs_build_tb`
--

INSERT INTO `audit_jobs_build_tb` (`ajb_id`, `ajb_name`, `ajb_prop`) VALUES
(1, 'Sales Tax Filing', 'sales_tax_filing'),
(2, 'Service Tax Filing', 'service_tax_filing'),
(3, 'Prof Tax Filing', 'prof_tax_filing'),
(4, 'TDS Filing', 'tds_filing'),
(5, 'IT Filing', 'it_filing'),
(6, 'Consultation', 'ajb_consultation');

-- --------------------------------------------------------

--
-- Table structure for table `audit_jobs_tb`
--

CREATE TABLE `audit_jobs_tb` (
  `audit_jobs_id` int(5) NOT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `sales_tax_filing` varchar(5) DEFAULT NULL,
  `service_tax_filing` varchar(5) DEFAULT NULL,
  `prof_tax_filing` varchar(5) DEFAULT NULL,
  `tds_filing` varchar(5) DEFAULT NULL,
  `it_filing` varchar(5) DEFAULT NULL,
  `ajb_consultation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_jobs_tb`
--

INSERT INTO `audit_jobs_tb` (`audit_jobs_id`, `lead_id`, `sales_tax_filing`, `service_tax_filing`, `prof_tax_filing`, `tds_filing`, `it_filing`, `ajb_consultation`) VALUES
(1, 0000000001, 'Y', NULL, 'Y', NULL, NULL, NULL),
(2, 0000000002, NULL, 'Y', NULL, NULL, NULL, NULL),
(3, 0000000004, 'Y', NULL, NULL, NULL, NULL, NULL),
(4, 0000000005, NULL, NULL, NULL, 'Y', NULL, NULL),
(5, 0000000008, NULL, NULL, 'Y', NULL, NULL, NULL),
(7, 0000000009, NULL, NULL, NULL, 'Y', NULL, NULL),
(8, 0000000010, NULL, NULL, 'Y', NULL, NULL, NULL),
(9, 0000000017, NULL, NULL, 'Y', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `client_id` int(7) UNSIGNED ZEROFILL NOT NULL,
  `date` date NOT NULL,
  `cname` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `cnumber` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `cst` varchar(20) NOT NULL,
  `pan` varchar(15) NOT NULL,
  `vatuser` varchar(50) NOT NULL,
  `vatpass` varchar(200) NOT NULL,
  `fileloc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tb`
--

INSERT INTO `client_tb` (`client_id`, `date`, `cname`, `type`, `cperson`, `cnumber`, `email`, `address`, `tin`, `cst`, `pan`, `vatuser`, `vatpass`, `fileloc`) VALUES
(0000001, '1970-01-01', 'sraj', 'LIMITED', 'sdfd', '256', 'subaraj@aanoorglobal.com', 'dfdada', '98765432111', '69857412', 'afdad', 'fddfd', 'adfa', 'afddad'),
(0000002, '1970-01-01', 'subavalar', 'PVT LTD', 'sdfd', '9876543211', 'gssubaraj@gmail.com', 'safdad', '69875412', '987654321', 'aclfsc1235', 'adad', 'adfdfdf', 'dfd');

-- --------------------------------------------------------

--
-- Table structure for table `incorporation_tb`
--

CREATE TABLE `incorporation_tb` (
  `incorporation_id` int(5) NOT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `new_pvt_company` varchar(5) DEFAULT NULL,
  `new_opc_company` varchar(5) DEFAULT NULL,
  `new_llp_company` varchar(5) DEFAULT NULL,
  `new_trust` varchar(5) DEFAULT NULL,
  `alteration_of_capital` varchar(5) DEFAULT NULL,
  `lib_consultation` varchar(5) DEFAULT NULL,
  `address_change` varchar(5) DEFAULT NULL,
  `roc_compliances` varchar(5) DEFAULT NULL,
  `alteration_of_directors` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incorporation_tb`
--

INSERT INTO `incorporation_tb` (`incorporation_id`, `lead_id`, `new_pvt_company`, `new_opc_company`, `new_llp_company`, `new_trust`, `alteration_of_capital`, `lib_consultation`, `address_change`, `roc_compliances`, `alteration_of_directors`) VALUES
(1, 0000000001, 'Y', NULL, 'Y', NULL, 'Y', NULL, 'Y', NULL, NULL),
(2, 0000000003, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL),
(3, 0000000004, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL),
(4, 0000000005, 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0000000006, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y'),
(6, 0000000007, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0000000009, NULL, NULL, 'Y', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0000000013, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL),
(9, 0000000014, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL),
(10, 0000000015, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL),
(11, 0000000016, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lead_info_build_tb`
--

CREATE TABLE `lead_info_build_tb` (
  `lib_id` int(2) NOT NULL,
  `lib_name` varchar(25) NOT NULL,
  `lib_prop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead_info_build_tb`
--

INSERT INTO `lead_info_build_tb` (`lib_id`, `lib_name`, `lib_prop`) VALUES
(1, 'New PVT Company', 'new_pvt_company'),
(2, 'New OPC Company', 'new_opc_company'),
(5, 'New LLP Company', 'new_llp_company'),
(6, 'New Trust', 'new_trust'),
(7, 'Alteration of Capital', 'alteration_of_capital'),
(8, 'Consultation', 'lib_consultation'),
(9, 'Address Change', 'address_change'),
(10, 'ROC Compliances', 'roc_compliances'),
(11, 'Alteration of Directors', 'alteration_of_directors');

-- --------------------------------------------------------

--
-- Table structure for table `lead_info_tb`
--

CREATE TABLE `lead_info_tb` (
  `date` date DEFAULT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `name_1` varchar(50) DEFAULT NULL,
  `name_2` varchar(50) DEFAULT NULL,
  `contact_1` varchar(50) DEFAULT NULL,
  `contact_2` varchar(50) DEFAULT NULL,
  `email_1` varchar(50) DEFAULT NULL,
  `email_2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead_info_tb`
--

INSERT INTO `lead_info_tb` (`date`, `lead_id`, `source`, `name_1`, `name_2`, `contact_1`, `contact_2`, `email_1`, `email_2`) VALUES
('2016-01-26', 0000000001, 'Just Dial', 'sakthivel deivasigamani', '', 'Anitha Karunakaran', '', 'sakthisiga@gmail.com', ''),
('2016-01-26', 0000000002, 'Just Dial', 'Sakthivel Deivasigamani', '', 'Anitha Karunakaran', '', 'sakthisiga@gmail.com', ''),
('2016-01-26', 0000000003, 'Just Dial', 'Thirumurugan Samynathan', '', 'Anitha Karunakaran', '', 'sakthisiga@gmail.com', ''),
('2016-01-26', 0000000004, 'Just Dial', 'Sakthivel Deivasigamani', '', 'John Hill', '', 'sakthisiga@gmail.com', ''),
('2016-01-28', 0000000005, 'Just Dial', 'subaraj', 'sathish', '9942655566', '1234567890', 'gssubaraj@gmail.com', 'subaraj@aanoorglobal.com'),
('2016-01-28', 0000000006, 'Just Dial', 'Samynathan', '', 'Samynathan', '', 'samy@nathan.com', ''),
('2016-01-29', 0000000007, 'Just Dial', 'Sakthivel Deivasigamani', '', 'sakthi', '', 'sakthisiga@gmail.com', ''),
('2016-01-30', 0000000008, 'Just Dial', 'Manikandan', '', 'Mani', '', 'mani@mani.com', ''),
('2016-02-04', 0000000009, 'Just Dial', 'Sakthivel Deivasigamani', '', 'Sakthivel deivasigamani', '', 'sakthisiga@gmail.com', ''),
('2016-02-13', 0000000010, 'Just Dial', 'Sakthivel Deivasigamani', '', 'Sakthivel deivasigamani', '', 'samy@nathan.com', ''),
('2016-02-22', 0000000011, 'Just Dial', 'Sakthivel Deivasigamani', '', 'John Hill', '', 'sakthisiga@gmail.com', ''),
('2016-03-18', 0000000012, 'Just Dial', 'Sakthivel', '', 'sakthi', '', 'sakthi@sakthi.com', ''),
('2016-03-18', 0000000013, 'Just Dial', 'Kumar', '', 'Kumar', '', 'kumar@kumar.com', ''),
('2016-03-18', 0000000014, 'Just Dial', 'Kumar', '', 'Kumar', '', 'kumar@kumar.com', ''),
('2016-03-23', 0000000015, 'Just Dial', 'Sakthivel Deivasigamani', '', 'Sakthivel Deivasigamani', '', 'sakthisiga@gmail.com', 'sakthisiga@gmail.com'),
('2016-03-23', 0000000016, 'Just Dial', 'Mani', '', 'Mani', '', 'mani@mani.com', ''),
('2016-03-23', 0000000017, 'Just Dial', 'Mohan', '', 'Mohan', '', 'mohan@mohan.com', ''),
('2016-03-24', 0000000018, 'Just Dial', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', '', 'sakthisiga@gmail.com', 'sakthisiga@gmail.com'),
('2016-03-24', 0000000019, 'Just Dial', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', '', 'sakthisiga@gmail.com', 'sakthisiga@gmail.com'),
('2016-03-24', 0000000020, 'Just Dial', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', 'Sakthivel Deivasigamani', '', 'sakthisiga@gmail.com', 'sakthisiga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tech_jobs_build_tb`
--

CREATE TABLE `tech_jobs_build_tb` (
  `tj_id` int(3) NOT NULL,
  `tj_name` varchar(25) NOT NULL,
  `tj_prop` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_jobs_build_tb`
--

INSERT INTO `tech_jobs_build_tb` (`tj_id`, `tj_name`, `tj_prop`) VALUES
(1, 'Website', 'website'),
(2, 'Mail', 'mail'),
(3, 'Logo', 'logo'),
(4, 'Letter Pad', 'letter_pad'),
(5, 'Visiting Card', 'visiting_card'),
(6, 'Consultation', 'tj_consultation');

-- --------------------------------------------------------

--
-- Table structure for table `tech_jobs_tb`
--

CREATE TABLE `tech_jobs_tb` (
  `tech_jobs_id` int(5) NOT NULL,
  `lead_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `website` varchar(5) DEFAULT NULL,
  `mail` varchar(5) DEFAULT NULL,
  `logo` varchar(5) DEFAULT NULL,
  `letter_pad` varchar(5) DEFAULT NULL,
  `visiting_card` varchar(5) DEFAULT NULL,
  `tj_consultation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_jobs_tb`
--

INSERT INTO `tech_jobs_tb` (`tech_jobs_id`, `lead_id`, `website`, `mail`, `logo`, `letter_pad`, `visiting_card`, `tj_consultation`) VALUES
(1, 0000000001, NULL, NULL, 'Y', NULL, NULL, NULL),
(2, 0000000002, NULL, NULL, 'Y', NULL, NULL, NULL),
(3, 0000000004, NULL, NULL, NULL, NULL, NULL, 'Y'),
(4, 0000000005, 'Y', NULL, NULL, NULL, 'Y', NULL),
(5, 0000000006, NULL, NULL, NULL, NULL, NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

CREATE TABLE `type_tb` (
  `type_id` int(2) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_tb`
--

INSERT INTO `type_tb` (`type_id`, `type`) VALUES
(3, 'PVT LTD'),
(4, 'PARTNERSHIP'),
(5, 'PROPRIETORSHIP'),
(6, 'LIMITED');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `group_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `fname`, `lname`, `email`, `user`, `pass`, `group_id`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 'admin', '45b43847295c6a6dccf2f4cde6b20aeb45695df7e791c72f9b7059873f7dff28', 1),
(2, 'test', 'test', 'sakthisiga@gmail.com', 'test', 'd8e47836988873de618b6cd0a8280dbc47037149f4ba543d6e92526040707f17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ags_legal_jobs_tb`
--
ALTER TABLE `ags_legal_jobs_tb`
  ADD PRIMARY KEY (`ags_legal_jobs_id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `ags_reg_jobs_tb`
--
ALTER TABLE `ags_reg_jobs_tb`
  ADD PRIMARY KEY (`ags_reg_jobs_id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `audit_jobs_tb`
--
ALTER TABLE `audit_jobs_tb`
  ADD PRIMARY KEY (`audit_jobs_id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `incorporation_tb`
--
ALTER TABLE `incorporation_tb`
  ADD PRIMARY KEY (`incorporation_id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `lead_info_tb`
--
ALTER TABLE `lead_info_tb`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `tech_jobs_tb`
--
ALTER TABLE `tech_jobs_tb`
  ADD PRIMARY KEY (`tech_jobs_id`),
  ADD UNIQUE KEY `lead_id` (`lead_id`);

--
-- Indexes for table `type_tb`
--
ALTER TABLE `type_tb`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ags_legal_jobs_tb`
--
ALTER TABLE `ags_legal_jobs_tb`
  MODIFY `ags_legal_jobs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ags_reg_jobs_tb`
--
ALTER TABLE `ags_reg_jobs_tb`
  MODIFY `ags_reg_jobs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `audit_jobs_tb`
--
ALTER TABLE `audit_jobs_tb`
  MODIFY `audit_jobs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_id` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `incorporation_tb`
--
ALTER TABLE `incorporation_tb`
  MODIFY `incorporation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lead_info_tb`
--
ALTER TABLE `lead_info_tb`
  MODIFY `lead_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tech_jobs_tb`
--
ALTER TABLE `tech_jobs_tb`
  MODIFY `tech_jobs_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type_tb`
--
ALTER TABLE `type_tb`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
