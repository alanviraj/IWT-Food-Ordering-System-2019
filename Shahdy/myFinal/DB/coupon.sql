-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 01:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `customer_id` int(11) NOT NULL,
  `receiverName` varchar(20) NOT NULL,
  `receiverPhone` varchar(20) NOT NULL,
  `receiverMail` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `purchaserName` varchar(20) NOT NULL,
  `purchaserPhone` varchar(20) NOT NULL,
  `purchaserMail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`customer_id`, `receiverName`, `receiverPhone`, `receiverMail`, `date`, `purchaserName`, `purchaserPhone`, `purchaserMail`) VALUES
(1, 'shahdiya', '0763888911', 'shahimaria@gmail.com', '2019-09-30', 'kovisha', '0761234567', 'kovishak@gmail.com'),
(5, 'shahdiya', '0763888911', 'shahimaria@gmail.com', '2019-09-30', 'kovisha', '0812475216', 'kovishak@gmail.com'),
(6, 'hannahBaker', '0763452672', 'shahimaria@gmail.com', '2019-09-30', 'clay', '0761234567', 'kovishak@gmail.com'),
(28, 'jansan', '0763888911', 'jansonj@gmail.com', '2019-09-25', 'baker', '0761234567', 'bakerh@gmail.com'),
(29, 'samantha', '0753478659', 'smtha@gmail.com', '2019-06-07', 'prabhu', '0765432789', 'prabhu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
