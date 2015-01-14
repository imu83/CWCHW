-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 12:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cwchw`
--
CREATE DATABASE IF NOT EXISTS `cwchw` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cwchw`;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
`id` int(11) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `userPassword` varchar(26) NOT NULL,
  `userFullName` varchar(100) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userCity` varchar(20) NOT NULL,
  `userCountry` varchar(20) NOT NULL,
  `userCell` varchar(20) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `userID`, `userPassword`, `userFullName`, `userAddress`, `userCity`, `userCountry`, `userCell`, `userEmail`, `userAddDate`) VALUES
(98, 'amran', '1', 'amran hasan', 'address', 'city', 'country', 'cell', 'email', '2015-01-14 05:38:15'),
(102, 'Babul', 'babul', 'Babul Mirdha', 'Kazipara,Mirpur', 'Dhaka', 'Bangladesh', '0171', 'babul@yahoo.com', '2015-01-14 06:00:50'),
(107, 'BabulMirdh', 'babul123', 'Babul Mirdha', 'Kazipara,Mirpur', 'Dhaka', 'Bangladesh', '0171', 'babul@yahoo.com', '2015-01-14 06:04:22'),
(109, 'Ba', 'babul123', 'Babul Mirdha', 'Kazipara,Mirpur', 'Dhaka', 'Bangladesh', '0171', 'babul@yahoo.com', '2015-01-14 06:06:19'),
(111, 'amran1', '1', 'amran', 'address1', 'city1', 'country1', 'cell1', 'email1', '2015-01-14 06:09:21'),
(113, 'abc', 'babul123', 'Babul Mirdha', 'Kazipara,Mirpur', 'Dhaka', 'Bangladesh', '0171', 'babul@yahoo.com', '2015-01-14 06:11:11'),
(114, 'shajahan', '123456', 'Shajahan Miah', 'Mohammadpur,17/a', 'Dhaka', 'BD', '0171799999999', 'shajahan@yahoo.com', '2015-01-14 06:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `userPassword` varchar(26) NOT NULL,
  `userAddDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userID`, `userPassword`, `userAddDate`) VALUES
(7, 'amran', '1', '2015-01-14 05:38:15'),
(8, 'Babul', 'babul', '2015-01-14 06:00:50'),
(9, 'BabulMirdh', 'babul123', '2015-01-14 06:04:22'),
(10, 'Ba', 'babul123', '2015-01-14 06:06:19'),
(11, 'amran1', '1', '2015-01-14 06:09:21'),
(12, 'abc', 'babul123', '2015-01-14 06:11:11'),
(13, 'shajahan', '123456', '2015-01-14 06:17:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userID` (`userID`), ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userID` (`userID`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
