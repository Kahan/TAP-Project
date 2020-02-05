-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 08:24 AM
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
  `selected` varchar(10) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Sr`, `name`, `email`, `phone`, `city`, `club`, `school`, `selected`, `date`) VALUES
(1, 'qwed', '@.com', '1234567890', 'pune', 'coding', 'asdfg', 'null', '2020-02-04'),
(2, 'ppoiuyt', '12@.com', '0987654321', 'mumbai', 'dance', 'qwerty', 'null', '2020-02-02'),
(3, 'qwed', '123@.com', '1234567890', 'pune', 'dance', 'asdfg', 'null', '2020-02-05'),
(4, 'bapoiuyt', '1234@.com', '0987654321', 'mumbai', 'coding', 'qwerty', 'null', '2020-02-01'),
(5, 'cbapoiuyt', '12345@.com', '0987654321', 'm', 'p', 'zxcvb', 'null', '2020-01-01'),
(6, 'dcbapoiuyt', '123456@.com', '0987654321', 'm', 'c', 'zxcvb', 'null', '2020-01-01'),
(7, 'dcbapoiuyt', '123456@.com', '0987654321', 'm', 'c', 'zxcvb', 'null', '2020-01-01'),
(10, 'adcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'asdfg', 'null', '2020-01-05'),
(11, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', 'null', '2020-01-01'),
(12, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', 'null', '2020-01-01'),
(13, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'coding', 'zxcvb', 'null', '2020-01-01'),
(14, 'dcbapoiuyt', '123456@.com', '0987654321', 'pune', 'coding', 'qwerty', 'null', '2020-01-04'),
(15, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'manager', 'zxcvb', 'null', '2020-01-09'),
(16, 'dcbapoiuyt', '123456@.com', '0987654321', 'mumbai', 'manager', 'asdfg', 'null', '2020-01-19'),
(17, 'ujas', 'ujas@gmail.com', '1020304050', 'mumbai', 'coding', 'asdfg', '', '2020-02-11');

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
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
