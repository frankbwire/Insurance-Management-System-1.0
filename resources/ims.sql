-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 02:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--
CREATE DATABASE IF NOT EXISTS `ims` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ims`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `email`, `name`, `comment`, `Date_Time`) VALUES
(20, 'admin@email.com', 'admin', 'comment section test', '2019-05-23 16:04:38'),
(23, 'commenter@gmail.com', 'commentor', 'comment test', '2019-05-23 16:51:44'),
(24, 'admin@email.com', 'admin', 'comment again test run', '2019-05-23 22:27:45'),
(26, 'email@comment.com', 'comment', 'comment test test', '2019-05-24 07:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE `company_details` (
  `update_id` int(11) NOT NULL,
  `co_name` varchar(50) NOT NULL,
  `co_email` varchar(50) NOT NULL,
  `co_address` varchar(50) NOT NULL,
  `co_city` varchar(50) NOT NULL,
  `co_country` varchar(50) NOT NULL,
  `co_id` varchar(50) NOT NULL,
  `co_umail` varchar(50) NOT NULL,
  `co_phone` varchar(50) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`update_id`, `co_name`, `co_email`, `co_address`, `co_city`, `co_country`, `co_id`, `co_umail`, `co_phone`, `date_updated`) VALUES
(3, 'OUTLAW', 'hr@outlaw.co.ke', '123 Avenue', 'Nairobi', 'Kenya', '345213OT', 'user@outlaw.co.ke', '0722222222', '2019-05-30 22:46:56'),
(4, 'basic entertainment', 'hr@basicent.co.ke', '3456 Park lane', 'Nakuru', 'Kenya', '345987bsc', 'user@basicent.co.ke', '020 345678', '2019-05-30 22:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `policy_registration`
--

DROP TABLE IF EXISTS `policy_registration`;
CREATE TABLE `policy_registration` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `policy_type` varchar(10) NOT NULL,
  `policy_pricing` varchar(10) NOT NULL,
  `annual_income` varchar(10) NOT NULL,
  `id_number` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_registration`
--

INSERT INTO `policy_registration` (`first_name`, `last_name`, `dob`, `email`, `address`, `city`, `country`, `policy_type`, `policy_pricing`, `annual_income`, `id_number`, `phone_number`, `gender`, `application_date`) VALUES
('User', 'user', '2019-05-17', 'admin@admin.com', '808 Lane', 'Mombasa', 'Kenya', 'Cargo Insu', 'Premium', '32000000', '234234234', '07234234234', 'female', '2019-05-23 16:25:13'),
('Molly', 'Mary', '2015-06-12', 'molly@email.com', '456 Bulliverd', 'Mombasa', 'Kenya', 'Income Pro', 'Business', '80000', '23453212', '072342342', 'female', '2019-05-23 22:20:47'),
('policy ', 'policy user', '2001-07-12', 'policyuser@email.com', '345 Avenue', 'Nairobi', 'Kenya', 'Health Ins', 'Business', '90000', '678345777', '0789456321', 'female', '2019-05-24 07:14:40'),
('admin', 'admin', '1996-06-05', 'admin@gmail.com', '342 Giligan', 'Nakuru', 'Kenya', 'Cargo Insu', 'Business', '450000', '789567432', '0711466391', 'female', '2019-05-23 15:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `application_date`) VALUES
(22, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2019-05-30 22:34:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD UNIQUE KEY `comment` (`comment`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `policy_registration`
--
ALTER TABLE `policy_registration`
  ADD PRIMARY KEY (`id_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `address` (`address`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `address_2` (`address`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`),
  ADD KEY `id_number` (`id_number`),
  ADD KEY `phone_number_2` (`phone_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
