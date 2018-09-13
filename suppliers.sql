-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 08:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_active` int(11) NOT NULL DEFAULT '0',
  `supplier_status` int(11) NOT NULL DEFAULT '0',
  `supplier_type` varchar(255) NOT NULL,
  `supplier_contact` varchar(255) NOT NULL,
  `supplier_location` varchar(255) NOT NULL,
  `supplier_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_active`, `supplier_status`, `supplier_type`, `supplier_contact`, `supplier_location`, `supplier_city`) VALUES
(1, 'CocaCola', 1, 1, 'n', '0756000344', 'Kampala', 'Kampala'),
(2, 'Pepsi', 1, 1, 'n/a', '0788886770', 'Kamapala', 'Kampala'),
(3, 'Test1', 1, 2, '', '', '', ''),
(4, 'Test2', 1, 2, 'n/a', '0756888888', 'Kampala', 'Kampala.'),
(5, 'Riham', 1, 1, 'qwe', '0786555444', 'Kampala', 'Kampala'),
(6, '', 0, 2, '', '', '', ''),
(7, 'dd', 1, 2, 'ss', 'dwd', 'sas', 'aa'),
(8, 'Text1', 2, 1, 'defr1', '0788888888', 'Kampala', 'fefrfrF1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
