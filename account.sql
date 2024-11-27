-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 01:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `srno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gstin` varchar(200) NOT NULL,
  `paymentdetail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`srno`, `name`, `location`, `mobile`, `email`, `gstin`, `paymentdetail`) VALUES
(13, 'bsm1', 'skak', '8160008875', 'sanju2002it@gmail.com', 'swd', 'asad'),
(16, 'deep', 'bhagwati', '123456789', 'deep@gmail.com', 'gstin1234', 'upi'),
(17, 'parth mori', 'bhavnagar', '8888888888', 'parth123@gmail.com', '21065145', 'cash'),
(18, 'deep', 'bhavnagar', '22222', 'sdfdsd@gmail.com', '21065145', 'cash'),
(19, 'SANJYA', 'bhavnagar', '37373737', 'sanjay@gmail.com', '2106', 'cash'),
(20, 'neet', 'neet1', '1233', 'neet@gmail.com', '221132', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `payin`
--

CREATE TABLE `payin` (
  `srno` int(255) NOT NULL,
  `receiptno` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `accountname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `paymenttype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payin`
--

INSERT INTO `payin` (`srno`, `receiptno`, `amount`, `date`, `accountname`, `mobile`, `paymenttype`) VALUES
(36, '111', 'sanjay', '2024-01-11', 'deep', '2106', 'UPI'),
(37, '21', '2222', '2024-01-03', 'SANJYA', '7885555', 'UPI'),
(38, '28', '3500', '2024-01-01', 'neet', '878788789', 'Net Banking');

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `srno` int(255) NOT NULL,
  `receiptno` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `accountname` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `paymenttype` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`srno`, `receiptno`, `amount`, `date`, `accountname`, `mobile`, `paymenttype`) VALUES
(10, '13', '13', '2024-01-11', 'frgeb', '888888888888888', 'UPI'),
(12, '28', '3700', '2024-01-02', 'neet', '78332212', 'UPI'),
(13, '45', '777777', '2024-01-03', 'SANJYA', '22222', 'Card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `payin`
--
ALTER TABLE `payin`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payin`
--
ALTER TABLE `payin`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
