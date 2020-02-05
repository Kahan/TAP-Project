-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 11:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tap`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `Sr` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `club` varchar(50) NOT NULL,
  `school` varchar(10) NOT NULL,
  `interests` varchar(5000) DEFAULT NULL,
  `why` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Sr`, `name`, `email`, `phone`, `city`, `club`, `school`, `interests`, `why`) VALUES
(1, 'qwed', '@.com', '1234567890', 'pune', 'coding', 'asdfg', NULL, NULL),
(2, 'ppoiuyt', '12@.com', '0987654321', 'mumbai', 'dance', 'qwerty', NULL, NULL),
(3, 'qwed', '123@.com', '1234567890', 'pune', 'dance', 'asdfg', NULL, NULL),
(4, 'bapoiuyt', '1234@.com', '0987654321', 'mumbai', 'coding', 'qwerty', NULL, NULL),
(5, 'cbapoiuyt', '12345@.com', '0987654321', 'm', 'p', 'zxcvb', NULL, NULL),
(6, 'dcbapoiuyt', '123456@.com', '0987654321', 'm', 'c', 'zxcvb', NULL, NULL),
(7, 'dcbapoiuyt', '123456@.com', '0987654321', 'm', 'c', 'zxcvb', NULL, NULL),
(10, 'adcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'asdfg', NULL, NULL),
(11, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', NULL, NULL),
(12, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', NULL, NULL),
(13, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', NULL, NULL),
(14, 'dcbapoiuyt', '123456@.com', '0987654321', 'pune', 'coding', 'qwerty', NULL, NULL),
(15, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'manager', 'zxcvb', NULL, NULL),
(16, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'manager', 'asdfg', NULL, NULL),
(17, 'ujas', 'ujas@gmail.com', '1020304050', 'mumbai', 'coding', 'asdfg', NULL, NULL),
(19, 'tejas', 'tejas@mehta.com', '9768135201', '', 'dance', 'LNMPS', 'asadfdsf', 'fdgdfxgtd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`Sr`),
  ADD UNIQUE KEY `Sr` (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
