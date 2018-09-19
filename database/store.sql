-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 08:23 AM
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
-- Table structure for table `oderfulfilment`
--

CREATE TABLE `oderfulfilment` (
  `itemid` varchar(255) NOT NULL,
  `vendorid` varchar(255) NOT NULL,
  `datetimevendoraccepted` datetime NOT NULL,
  `datetimepicked` datetime NOT NULL,
  `delaytime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `itemid` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL DEFAULT '0',
  `productid` varchar(255) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `isreturned` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`itemid`, `orderid`, `productid`, `quantity`, `price`, `instructions`, `isreturned`) VALUES
('3', '1', '1', '4', '20000', '20000.00', '1'),
('4', '1', '1', '1', '20000', '20000.00', '1'),
('5', '2', '1', '2', '20000', '40000.00', '1'),
('6', '3', '1', '1', '20000', '20000.00', '1'),
('7', '3', '1', '2', '20000', '40000.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` varchar(255) NOT NULL,
  `tupucaorder` varchar(255) NOT NULL,
  `datetimereceived` datetime NOT NULL,
  `datetimedelivered` datetime NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `datetimerunneraccepted` varchar(255) NOT NULL,
  `runnerid` varchar(255) NOT NULL,
  `totalitems` varchar(255) NOT NULL,
  `dropofflocation` varchar(255) NOT NULL,
  `datetimedroppedoff` varchar(255) NOT NULL,
  `anyreturns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `tupucaorder`, `datetimereceived`, `datetimedelivered`, `orderstatus`, `datetimerunneraccepted`, `runnerid`, `totalitems`, `dropofflocation`, `datetimedroppedoff`, `anyreturns`) VALUES
('1', '', '2018-09-03 00:00:00', '0000-00-00 00:00:00', '0708675755', '', '', '', '', '', ''),
('2', '', '2018-09-04 00:00:00', '0000-00-00 00:00:00', '0756000777', '', '', '', '', '', ''),
('3', '', '2018-09-04 00:00:00', '0000-00-00 00:00:00', '0708234567', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `productid` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `markup` varchar(255) NOT NULL,
  `markuppercentage` varchar(255) NOT NULL,
  `publishedprice` varchar(255) NOT NULL,
  `publisheddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productimage` text NOT NULL,
  `categoryid` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `tupucaproductid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `productimage`, `categoryid`, `quantity`, `tupucaproductid`) VALUES
('1', 'Fanta', '../assests/images/stock/12171345125b8d35ae4e256.jpg', '1', '1', '93');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `categoryid` varchar(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `categoryactive` int(11) NOT NULL DEFAULT '0',
  `categorystatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`categoryid`, `categoryname`, `categoryactive`, `categorystatus`) VALUES
('1', 'Soda', 1, 1),
('2', 'Soda', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` varchar(255) NOT NULL,
  `useractive` int(11) NOT NULL DEFAULT '0',
  `userstatus` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `categorycode` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `agebracket` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `countrycode` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `xikilaaccount` varchar(255) NOT NULL,
  `bancoaccount` varchar(255) NOT NULL,
  `wantbancoaccount` varchar(255) NOT NULL,
  `creationdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `useractive`, `userstatus`, `firstname`, `lastname`, `category`, `categorycode`, `gender`, `agebracket`, `country`, `countrycode`, `phonenumber`, `email`, `town`, `xikilaaccount`, `bancoaccount`, `wantbancoaccount`, `creationdate`) VALUES
('', 0, 1, 'Magezi', 'Magezi', 'N/A', '', 'MALE', 'N/A', 'N/A', '254', '0756567777', 'tet@gc', 'lka', 'xikilaAccount', 'bancoAccount', 'wantBancoAccount', '2018-09-17 15:41:26'),
('1', 1, 1, '', '', 'n', '', '0756000344', 'Kampala', 'Kampala', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('2', 1, 1, '', '', 'n/a', '', '0788886770', 'Kamapala', 'Kampala', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('3', 1, 2, '', '', '', '', '', '', '', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('4', 1, 2, '', '', 'n/a', '', '0756888888', 'Kampala', 'Kampala.', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('5', 1, 1, '', '', 'qwe', '', '0786555444', 'Kampala', 'Kampala', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('6', 0, 2, '', '', '', '', '', '', '', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('7', 1, 2, '', '', 'ss', '', 'dwd', 'sas', 'aa', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('8', 2, 1, '', '', 'defr1', '', '0788888888', 'Kampala', 'fefrfrF1', '', '', '0', '0', '', '0', '0', '0000-00-00 00:00:00'),
('N/A.1. d', 0, 1, 'cvdv', 'cvdv', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', ' dd', ' d', 'dcd', ' d', 'Yes', 'Yes', 'No', '2018-09-18 18:26:13'),
('N/A.1.bt', 0, 1, 'hyh', 'hyh', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'grgg', 'bt', 'gb', 'gg', 'Yes', 'No', 'No', '2018-09-18 17:36:02'),
('N/A.1.cd', 0, 1, 'csc', 'csc', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'c ', 'cd', 'cdf', 'djh', 'No', 'Yes', 'Yes', '2018-09-18 18:02:52'),
('N/A.1.cdc', 0, 1, 'fvddfvfvv', 'fvddfvfvv', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'dcd', 'cdc', 'ce', 'dc', 'No', 'No', 'Yes', '2018-09-18 17:07:21'),
('N/A.1.ce', 0, 1, 'fefe', 'fefe', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'cec', 'ce', 'ece', 'ce', 'Yes', 'No', 'No', '2018-09-18 17:03:30'),
('N/A.1.cec', 0, 2, 'fefef', 'fefef', 'N/A', 'N/A', 'FEMALE', 'N/A', 'N/A', 'cc', 'cec', 'ddv', 'cec', 'Yes', 'No', 'Yes', '2018-09-18 18:10:29'),
('N/A.1.csc', 0, 1, 'qwqewe', 'qwqewe', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'csc', 'csc', 'csc', 'cc', 'No', 'Yes', 'Yes', '2018-09-18 17:31:55'),
('N/A.1.dc', 0, 1, 'vgefec', 'vgefec', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'fcvd', 'dc', 'c', 'cd', 'Yes', 'Yes', 'Yes', '2018-09-18 16:28:56'),
('N/A.1.dfrf', 0, 1, 'eef', 'eef', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'rf', 'dfrf', 'frf', 'ff', 'Yes', 'Yes', 'Yes', '2018-09-18 15:59:48'),
('N/A.1.efe', 0, 1, 'cvf', 'cvf', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'ef', 'efe', 'g', 'ef', 'No', 'No', 'Yes', '2018-09-18 16:02:22'),
('N/A.1.ffe', 0, 1, 'efef', 'efef', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'efe', 'ffe', 'ef', 'ef', 'Yes', 'Yes', 'No', '2018-09-18 15:55:48'),
('N/A.1.Phone Number', 0, 1, 'First Name:', 'First Name:', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'Country Code: ', 'Phone Number', 'Email: ', 'Town: ', 'Yes', 'Yes', 'No', '2018-09-18 12:58:04'),
('N/A.1.sd', 0, 1, 'wdwww', 'wdwww', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'm,nm', 'sd', 'wd', '.m,l', 'Yes', 'Yes', 'No', '2018-09-18 16:59:54'),
('N/A.1.t5t', 0, 2, 'ry45y', 'ry45y', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 't4t', 't5t', '5y5y', 't4t', 'No', 'No', 'Yes', '2018-09-18 16:23:02'),
('N/A.1.v  ', 0, 1, 'c c', 'c c', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'f', 'v  ', ' dcd', 's', 'Yes', 'Yes', 'No', '2018-09-18 17:40:32'),
('N/A.1.wfe', 0, 2, 'grbrf', 'grbrf', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'rgrgr', 'wfe', 'fef', 'fef', 'Yes', 'Yes', 'Yes', '2018-09-18 17:25:21'),
('N/A.1.www', 0, 1, 'vb', 'vb', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'wwdd', 'www', 'ww', 'wsw', 'No', 'No', 'Yes', '2018-09-18 17:09:16'),
('N/A.1.xe', 0, 1, 'xcx', 'xcx', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 'xx', 'xe', 'xe', 'xe', 'Yes', 'No', 'Yes', '2018-09-18 17:54:10'),
('N/A.1.y5', 0, 1, 'y6h', 'y6h', 'N/A', 'N/A', 'MALE', 'N/A', 'N/A', 't4t4', 'y5', '5y5y', '5y5', 'No', 'Yes', 'Yes', '2018-09-18 16:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `questionid` varchar(255) NOT NULL,
  `questiontext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveyresponse`
--

CREATE TABLE `surveyresponse` (
  `userid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tupucaorder`
--

CREATE TABLE `tupucaorder` (
  `tupucaorderid` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `ordertype` varchar(255) NOT NULL,
  `deliverydate` datetime NOT NULL,
  `deliverytime` datetime NOT NULL,
  `deliveryinstruction` varchar(255) NOT NULL,
  `municipulty` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `pickupURL` varchar(255) NOT NULL,
  `deliveryURL` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `deliverycost` varchar(255) NOT NULL,
  `taxamount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grandtotal` varchar(255) NOT NULL,
  `paymenttype` int(11) NOT NULL,
  `paymentstatus` int(11) NOT NULL,
  `orderstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tupucaorder`
--

INSERT INTO `tupucaorder` (`tupucaorderid`, `orderid`, `customer`, `vendor`, `ordertype`, `deliverydate`, `deliverytime`, `deliveryinstruction`, `municipulty`, `city`, `latitude`, `longitude`, `pickupURL`, `deliveryURL`, `total`, `deliverycost`, `taxamount`, `discount`, `grandtotal`, `paymenttype`, `paymentstatus`, `orderstatus`) VALUES
('1', '', '2018-09-03', 'Tywan', '0708675755', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '40000.00', '', '7200.00', '0', '47200.00', 1, 1, 1),
('2', '', '2018-09-04', 'Tywan', '0756000777', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '40000.00', '', '7200.00', '0', '47200.00', 2, 2, 1),
('3', '', '2018-09-04', 'Roger', '0708234567', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '60000.00', '', '10800.00', '0', '70800.00', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tupucaorderitems`
--

CREATE TABLE `tupucaorderitems` (
  `tupucaproductid` varchar(255) NOT NULL,
  `tupucaorderid` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userauthentication`
--

CREATE TABLE `userauthentication` (
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usergeolocation`
--

CREATE TABLE `usergeolocation` (
  `userid` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`) VALUES
('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
('11', 'tywan', 'e10adc3949ba59abbe56e057f20f883e', 'magezi@boldcashers.com');

-- --------------------------------------------------------

--
-- Table structure for table `vendorproducts`
--

CREATE TABLE `vendorproducts` (
  `productid` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `currency` varchar(255) NOT NULL,
  `productorigin` varchar(255) NOT NULL,
  `productsource` varchar(255) NOT NULL,
  `seasonality` varchar(255) NOT NULL,
  `dateofpurchase` date NOT NULL,
  `purchasemethod` varchar(255) NOT NULL,
  `purchasegroup` varchar(255) NOT NULL,
  `purchasebuddies` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `userid` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `stallnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tupucaorder`
--
ALTER TABLE `tupucaorder`
  ADD PRIMARY KEY (`tupucaorderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vendorproducts`
--
ALTER TABLE `vendorproducts`
  ADD PRIMARY KEY (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
