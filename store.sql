-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 02:56 PM
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
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
