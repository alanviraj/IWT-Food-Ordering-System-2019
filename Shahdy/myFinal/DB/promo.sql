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
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promoCode`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
