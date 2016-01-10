-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 09:36 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE IF NOT EXISTS `client_tb` (
  `client_id` int(7) unsigned zerofill NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

CREATE TABLE IF NOT EXISTS `type_tb` (
  `type_id` int(2) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `user_tb` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `group_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `fname`, `lname`, `email`, `user`, `pass`, `group_id`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 'admin', '45b43847295c6a6dccf2f4cde6b20aeb45695df7e791c72f9b7059873f7dff28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`client_id`);

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
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `client_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_tb`
--
ALTER TABLE `type_tb`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
