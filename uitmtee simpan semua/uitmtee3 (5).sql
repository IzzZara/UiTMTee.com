-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3345
-- Generation Time: May 23, 2024 at 11:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uitmtee3`
--
CREATE DATABASE IF NOT EXISTS `uitmtee3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uitmtee3`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `ADMIN_NAME` varchar(100) NOT NULL,
  `ADMIN_EMAIL` varchar(100) NOT NULL,
  `ADMIN_PHONE` varchar(15) NOT NULL,
  `ADMIN_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_EMAIL`, `ADMIN_PHONE`, `ADMIN_PASSWORD`) VALUES
(2022454092, 'mirafizh', 'mirafizh@gmail.com', '0174020170', '757204mi');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

DROP TABLE IF EXISTS `clothes`;
CREATE TABLE IF NOT EXISTS `clothes` (
  `CLO_NUM` int(11) NOT NULL,
  `CLO_NAME` varchar(100) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `CLO_PRICE` decimal(10,2) NOT NULL,
  `CLO_TYPE` varchar(50) NOT NULL,
  `XS_QTY` int(11) NOT NULL,
  `S_QTY` int(11) NOT NULL,
  `M_QTY` int(11) NOT NULL,
  `L_QTY` int(11) NOT NULL,
  `XL_QTY` int(11) NOT NULL,
  `2XL_QTY` int(11) NOT NULL,
  `3XL_QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`CLO_NUM`, `CLO_NAME`, `IMAGE`, `CLO_PRICE`, `CLO_TYPE`, `XS_QTY`, `S_QTY`, `M_QTY`, `L_QTY`, `XL_QTY`, `2XL_QTY`, `3XL_QTY`) VALUES
(1001, 'UiTM Lioness V3', 'j1.png', '65.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1002, 'UiTM Lioness V1', 'j3.png', '56.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1003, 'UiTM Lioness V2', 'j2.png', '60.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1004, 'KPPIM Jersey', 'j10.png', '45.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1005, 'UiTM Black', 'j99.png', '65.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1006, 'Korporat FSG', 'j77.png', '80.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1007, 'Korporat KPPIM', 'j23.png', '75.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1008, 'Korporat FP', 'j01.png', '85.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1009, 'Korporat BASCO', 'k1.png', '85.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1010, 'Korporat DiSK', 'k1.png', '85.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1011, 'Korporat MASSCOM', 'k2.png', '80.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1012, 'Korporat EEC', 'k4.png', '83.00', 'Corporate', 100, 100, 100, 100, 100, 100, 100),
(1013, 'UiTM Muslimah Jersey', 'jj1.png', '55.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1014, 'UiTM Long Sleeve', 'jj2.png', '55.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1015, 'KPPIM Jersey V2', 'jj3.png', '60.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100),
(1016, 'KPPIM Jersey V2', 'jj4.png', '65.00', 'Jersey', 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
`MESSAGE_ID` int(11) NOT NULL,
  `MESSAGE` text NOT NULL,
  `SUBMISSION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CUS_ID` int(11) DEFAULT NULL,
  `ADMIN_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`MESSAGE_ID`, `MESSAGE`, `SUBMISSION_DATE`, `CUS_ID`, `ADMIN_ID`) VALUES
(5, 'dfghjgk', '2024-05-22 07:44:59', 2022454065, 2022454092),
(6, 'dfghjgk', '2024-05-22 07:44:59', 2022454065, 2022454092),
(7, 'ghgfrjhyjghjmghmhkjgk', '2024-05-22 08:08:57', 2022454078, 2022454092),
(8, 'jannah busuk sangat harini', '2024-05-22 07:48:42', 2022454078, 2022454092),
(9, 'bapa ku pulang dari kota bapa ku belikan kereta', '2024-05-22 08:07:31', NULL, 2022454092),
(10, 'mira comel', '2024-05-22 08:25:04', 2022123456, 2022454092),
(11, 'hehehehhehehehheee', '2024-05-22 08:28:52', 2022123456, 2022454092),
(12, 'amni terlalu cantik', '2024-05-22 08:29:22', 2022123456, 2022454092),
(13, 'ngokegehryedjkdngejdghejkks', '2024-05-22 08:31:31', 2022454091, 2022454092),
(14, 'nadhir love eillyyyyyyyyyy <33333', '2024-05-22 08:32:22', 2022454091, 2022454092),
(15, 'mira sangat cumell', '2024-05-22 08:34:48', 2022123456, 2022454092),
(16, 'eill', '2024-05-22 09:45:59', 2022123456, 2022454092);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CUS_ID` int(11) NOT NULL,
  `CUS_NAME` varchar(100) NOT NULL,
  `CUS_PHONE` varchar(15) NOT NULL,
  `CUS_EMAIL` varchar(100) NOT NULL,
  `CUS_ADDRESS` text NOT NULL,
  `CUS_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_ID`, `CUS_NAME`, `CUS_PHONE`, `CUS_EMAIL`, `CUS_ADDRESS`, `CUS_PASSWORD`) VALUES
(2022121212, 'nema', '01985472888', 'mena@gmail.com', 'efsgdhjgfjf', '4747'),
(2022121515, 'mena', '01840215547', 'nini@gmail.com', 'dfgd', '4444'),
(2022123456, 'haikal', '012123456789', 'haikal@gmail.com', '111', 'baba14'),
(2022454055, 'Joyah Joshan', '01133438100', 'jojen@gmail.com', 'tiang lampu 19, Bukit Pasir', 'joyah055'),
(2022454065, 'Ixora Camellia', '01133138100', 'xoxo@gmail.com', 'no 39, Jalan Murni', 'xoxo4065'),
(2022454078, 'baekhyunwoo', '01136438100', 'haein@gmail.com', 'no 19, Permatang Tok Mahad', 'haein078'),
(2022454081, 'fakhrul', '01133138600', 'roll@gmail.com', 'no 21, jalan mont kiara', 'roll4081'),
(2022454091, 'lencai', '0154020170', 'lenlen@gmail.com', 'Parit 17 A Sungai Lampam', '$2y$10$ObnQtNvFHDJuuRQ.AURt4./SgypbS5zR.qqo78/grP61oWh53C11i'),
(2022457487, 'mi', '01454255565', 'segrd@gmail.com', 'dfgg', '789'),
(2022787804, 'miraa', 'naem', 'nafiss@gmail.com', 'fsfgfdhgdhd', '545471'),
(2022816422, 'Amni', '01136346952', 'nurulamni23@gmail.com', 'Parit 17 A Sungai Lampam', '1234'),
(2022877957, 'Lin Yee', '01131392934', 'lin@gmail.com', 'no 12 jln ubi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

DROP TABLE IF EXISTS `order_customer`;
CREATE TABLE IF NOT EXISTS `order_customer` (
`ORDER_ID` int(11) NOT NULL,
  `ORDER_DATE` date NOT NULL,
  `ORDER_STATUS` varchar(50) NOT NULL,
  `ADMIN_ID` int(11) DEFAULT NULL,
  `CUS_ID` int(11) DEFAULT NULL,
  `IMG` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`ORDER_ID`, `ORDER_DATE`, `ORDER_STATUS`, `ADMIN_ID`, `CUS_ID`, `IMG`) VALUES
(2, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/bhnc.png'),
(3, '2024-05-23', 'Successful', 2022454092, 2022121212, 'receipts/bhnc.png'),
(4, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/bhnc.png'),
(5, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/bhnc.png'),
(6, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/fp.png'),
(7, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/fp.png'),
(8, '2024-05-23', 'Successful', 2022454092, 2022121212, 'receipts/call2.png'),
(9, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/call2.png'),
(10, '2024-05-23', 'Successful', 2022454092, 2022121212, 'receipts/fp.png'),
(11, '2024-05-23', 'Pending', 2022454092, 2022121212, 'receipts/email.png'),
(12, '2024-05-23', 'Successful', 2022454092, 2022121212, 'receipts/iconperson.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `ORDER_ID` int(11) NOT NULL DEFAULT '0',
  `CLO_NUM` int(11) NOT NULL DEFAULT '0',
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PAY_NUM` int(11) NOT NULL,
  `PAY_DATE` date NOT NULL,
  `PAY_STATUS` varchar(50) NOT NULL,
  `ORDER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ADMIN_ID`), ADD UNIQUE KEY `ADMIN_EMAIL` (`ADMIN_EMAIL`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
 ADD PRIMARY KEY (`CLO_NUM`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
 ADD PRIMARY KEY (`MESSAGE_ID`), ADD KEY `CUS_ID` (`CUS_ID`), ADD KEY `ADMIN_ID` (`ADMIN_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`CUS_ID`), ADD UNIQUE KEY `CUS_EMAIL` (`CUS_EMAIL`);

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
 ADD PRIMARY KEY (`ORDER_ID`), ADD KEY `ADMIN_ID` (`ADMIN_ID`), ADD KEY `CUS_ID` (`CUS_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
 ADD PRIMARY KEY (`ORDER_ID`,`CLO_NUM`), ADD KEY `CLO_NUM` (`CLO_NUM`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`PAY_NUM`), ADD KEY `ORDER_ID` (`ORDER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
MODIFY `MESSAGE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_messages`
--
ALTER TABLE `contact_messages`
ADD CONSTRAINT `contact_messages_ibfk_1` FOREIGN KEY (`CUS_ID`) REFERENCES `customer` (`CUS_ID`),
ADD CONSTRAINT `contact_messages_ibfk_2` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin` (`ADMIN_ID`);

--
-- Constraints for table `order_customer`
--
ALTER TABLE `order_customer`
ADD CONSTRAINT `order_customer_ibfk_1` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin` (`ADMIN_ID`),
ADD CONSTRAINT `order_customer_ibfk_2` FOREIGN KEY (`CUS_ID`) REFERENCES `customer` (`CUS_ID`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`CLO_NUM`) REFERENCES `clothes` (`CLO_NUM`),
ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`ORDER_ID`) REFERENCES `order_customer` (`ORDER_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`ORDER_ID`) REFERENCES `order_customer` (`ORDER_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
