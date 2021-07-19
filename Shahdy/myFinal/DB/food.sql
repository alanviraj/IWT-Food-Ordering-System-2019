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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
