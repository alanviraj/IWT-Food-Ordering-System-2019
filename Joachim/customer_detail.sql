-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 11:22 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `Phone` char(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`firstName`, `lastName`, `Phone`, `Address`, `Email`, `Password`, `ID`) VALUES
('agil', 'rock', '0112536987', '124/2 kandy', 'rock@gmail.com', '', 1),
('smaith', 'aaaaa', '0114785968', '147/2 kandy', 'asdf@gmail.com', '', 2),
('Steven', 'Skylar', '0710721688', '34 , 14th lane , Kollupitiya', 'Sskylar@hotmail.com', '', 3),
('Avishka', 'Sheik', '0721236547', '14/2 peradeniya', 'avi_@gmail.com', 'Avis1234', 4),
('kasun', 'Kumara', '0723216547', '14/2 katugastota,kandy', 'kasun_@gmail.com', 'Kasun#234', 19),
('Stephan', 'Johns', '0751236547', '44,colombo', 'ste12@gmail.com', 'Stephan2', 5),
('Stuart', 'Broad', '0754213658', '14, ampitiya,kandy', 'stuart_123@gmail.com', '', 6),
('Dean', 'Johns', '0754587896', '14/2 , kandy', 'dean_@gmail.com', 'Dean12345', 7),
('Nimal', 'Silva', '0757894561', '12, peradeniya road,kandy', 'nimal@hotmail.com', 'Nimal#456', 18),
('Richie', 'William', '0761236547', '45,colombo', 'rich12@gmail.com', 'William12', 8),
('Stella', 'Maria', '0763888911', '29, Alphonso rd, Kandy', 'StellaM@gmail.com', '', 9),
('Kane', 'James', '0771235478', '145/2 kandy', 'kj@gmail.com', '', 10),
('Matilda', 'Rose', '0771472589', '12/2 gampola road,kandy', 'rose12@gmail.com', 'Rose*484', 17),
('Alex', 'Rodrigue', '0771644553', '15, Peradeniya , Kandy', 'Alex23R@gmail.com', '', 11),
('Akil', 'Yadhushan', '0774587234', 'No 3 , havelockdrive , kandy', 'akilyathushan@gmail.com', '', 12),
('Brittani', 'Anna', '0774696319', '17, Williams Avenue , Dehiwela', 'Brittani@yahoo.com', '', 13),
('kamal', 'silva', '0774841234', '25,kandy', 'silva_q@hotmail.com', '', 14),
('Hannah', 'Baker', '0775963527', '05/A, Barnes Place , Colombo', 'HannahBaker7@gmail.com', '', 15),
('roy', 'jack', '0776572522', '154/2 katogastota', 'avj@gmail.com', '', 16),
('Roshan', 'Desilva', '0787894561', '25/4 colombo4', 'desilva_1@gmail.com', 'Roshan@456', 20),
('Bruce', 'Wayne', '0812490000', 'Wayne Manner, Gotham', 'brucewayne@gmail.com', 'IronmanSuckss11@', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
