-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 07:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustNo` int(4) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) DEFAULT NULL,
  `Lname` varchar(25) NOT NULL,
  `Suffix` varchar(25) DEFAULT NULL,
  `Address` varchar(150) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `TotalOrders` int(11) NOT NULL,
  `Standing` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustNo`, `Fname`, `Mname`, `Lname`, `Suffix`, `Address`, `ContactNo`, `TotalOrders`, `Standing`) VALUES
(7, 'Marc Ferdinand', 'Bobier', 'Leaño', '', '1206, Purok 7, Parang', 2147483647, 0, 'average');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `CustNo` int(4) NOT NULL,
  `Orders` longtext NOT NULL,
  `Total` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `PaymentStat` varchar(11) NOT NULL,
  `DeliveryStat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reward rules`
--

CREATE TABLE `reward rules` (
  `RuleNo` int(11) NOT NULL,
  `Standing` varchar(11) NOT NULL,
  `Min` int(11) NOT NULL,
  `Max` int(11) NOT NULL,
  `Discount` int(11) DEFAULT NULL,
  `Reward` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustNo`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `CustNo` (`CustNo`);

--
-- Indexes for table `reward rules`
--
ALTER TABLE `reward rules`
  ADD PRIMARY KEY (`RuleNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reward rules`
--
ALTER TABLE `reward rules`
  MODIFY `RuleNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
