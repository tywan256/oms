-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 09:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clickmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `atrequestlog`
--

CREATE TABLE `atrequestlog` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `msisdn` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `extRefId` varchar(255) NOT NULL,
  `refId` varchar(255) NOT NULL,
  `creationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atrequestlog`
--

INSERT INTO `atrequestlog` (`id`, `userid`, `msisdn`, `amount`, `extRefId`, `refId`, `creationDate`) VALUES
(1, '1005489086', '2147483647', '5', '1233-3333-3888-3333', '', '2019-08-30 08:04:52'),
(2, '1005489086', '2659910785423', '5', '1233-3333-3888-3333', '', '2019-08-30 08:07:57'),
(3, '1005489086', '2659910785423', '5', '1233-3333-3888-3333', '', '2019-08-30 08:10:59'),
(4, '1005489086', '2659910785423', '5', '1233-3333-3888-3333', '', '2019-08-30 08:11:23'),
(5, '1005489086', '2659910785423', '5', '1233-3333-3888-3333', '', '2019-08-30 08:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `topupstatus`
--

CREATE TABLE `topupstatus` (
  `id` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `appId` varchar(255) NOT NULL,
  `referenceId` varchar(255) NOT NULL,
  `appRefId` varchar(255) NOT NULL,
  `topUpStatus` varchar(255) NOT NULL,
  `topUpDescription` varchar(255) NOT NULL,
  `processingStatus` varchar(255) NOT NULL,
  `processingDescription` varchar(255) NOT NULL,
  `extRefId` varchar(255) NOT NULL,
  `creationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topupstatus`
--

INSERT INTO `topupstatus` (`id`, `amount`, `appId`, `referenceId`, `appRefId`, `topUpStatus`, `topUpDescription`, `processingStatus`, `processingDescription`, `extRefId`, `creationDate`) VALUES
(1, 5, '10078', 'qwedfe-wdefjrhg-dwkfjhg', '12345-393-38373-38383', 'ok', 'Success', 'ok', 'Sucuess', '1233-73654-765-9876', '2019-08-30 08:24:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atrequestlog`
--
ALTER TABLE `atrequestlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topupstatus`
--
ALTER TABLE `topupstatus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atrequestlog`
--
ALTER TABLE `atrequestlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topupstatus`
--
ALTER TABLE `topupstatus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
