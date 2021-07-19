-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 01:03 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodCode` varchar(10) NOT NULL,
  `foodName` varchar(20) DEFAULT NULL,
  `unitPrice` float DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `Availability` int(11) DEFAULT NULL,
  `imagePath` varchar(30) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodCode`, `foodName`, `unitPrice`, `description`, `Availability`, `imagePath`, `category`) VALUES
('M01', 'Oodles of noodles', 250, 'A real taste of chinese', 1, 'Desktop/images/ch4.jpg', 'chinese'),
('M02', 'Pani Poori', 50, 'Best indian sweet worldwide', 1, 'Desktop/images/i4.jpg', 'indian'),
('M03', 'Thali', 375, NULL, 1, 'Desktop/images/i6.jpg', 'indian'),
('M04', 'Cafe Americano', 100, NULL, 1, 'Desktop/images/cafeamericano.j', 'drink'),
('M05', 'DimSums', 80, 'For all sweet lovers', 1, 'Desktop/images/dim.jpg', 'chinese'),
('M06', 'Honey Cake', 150, NULL, 1, 'Desktop/images/w8.jpg', 'westeros'),
('M07', 'Focasia bread', 265, NULL, 1, 'Desktop/images/it4.jpg', 'italian'),
('M08', 'Duck sausages', 120, NULL, 1, 'Desktop/images/w6.jpg', 'westeros'),
('M09', 'Magherita Pizza', 300, 'Cheesiezt pizza ever', 1, 'Desktop/images/it6.jpg', 'italian'),
('M10', 'Cappucino', 150, NULL, 1, 'Desktop/images/cappucino.jpg', 'drink'),
('M11', 'Wontons', 100, NULL, 1, 'Desktop/images/ch2.jpg', 'chinese'),
('M12', 'Hot And Sour Soup', 190, NULL, 1, 'Desktop/images/h&s.jpg', 'chinese'),
('M13', 'Idli', 80, NULL, 1, 'Desktop/images/i1.jpg', 'indian'),
('M14', 'Thosa', 100, NULL, 1, 'Desktop/images/i2s.jpg', 'indian'),
('M15', 'Custard', 90, NULL, 1, 'Desktop/images/w5.jpg', 'westeros'),
('M16', 'Bowl of brown', 200, NULL, 1, 'Desktop/images/w3.jpg', 'westeros'),
('M17', 'Panzella', 180, NULL, 1, 'Desktop/images/it1.jpg', 'italian'),
('M18', 'Carprese', 340, NULL, 1, 'Desktop/images/it2.jpg', 'italian');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `promoCode` varchar(10) NOT NULL,
  `promoName` varchar(20) DEFAULT NULL,
  `Validity` datetime DEFAULT NULL,
  `addedDate` datetime DEFAULT NULL,
  `discountPercent` float DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`promoCode`, `promoName`, `Validity`, `addedDate`, `discountPercent`, `ID`) VALUES
('P01', 'Free Dine In', '2019-03-05 00:00:00', '2019-03-01 00:00:00', 0, 8),
('P02', 'Kids Adventure', '2019-03-05 00:00:00', '2019-05-09 00:00:00', 15, 3),
('P03', 'Ice & Fire', '2019-03-06 00:00:00', '2020-03-01 00:00:00', 20, 4),
('P04', 'The bubbleology', '2019-06-09 00:00:00', '2019-09-10 00:00:00', 10, 5),
('P05', 'Christmas Deals', '2019-03-09 00:00:00', '2020-03-01 00:00:00', 50, 6),
('P06', 'Hit the 20', '2019-03-01 00:00:00', '2020-01-02 00:00:00', 30, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodCode`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promoCode`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
