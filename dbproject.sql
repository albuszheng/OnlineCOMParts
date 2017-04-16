-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-16 19:52:58
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer_business`
--

CREATE TABLE `customer_business` (
  `UserID` varchar(11) NOT NULL,
  `BusinessCategory` varchar(11) NOT NULL,
  `AnnualIncome` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `customer_home`
--

CREATE TABLE `customer_home` (
  `UserID` varchar(11) NOT NULL,
  `Age` varchar(11) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Income` varchar(11) NOT NULL,
  `MarriageStatus` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `customer_info`
--

CREATE TABLE `customer_info` (
  `UserID` varchar(11) NOT NULL,
  `FullName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `AddressStreet` varchar(100) NOT NULL,
  `AddressCity` varchar(45) NOT NULL,
  `AddressState` varchar(45) NOT NULL,
  `AddressZip` varchar(11) NOT NULL,
  `Kind` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `inventory`
--

CREATE TABLE `inventory` (
  `StoreID` varchar(11) NOT NULL,
  `ProductID` varchar(11) NOT NULL,
  `InventoryNum` varchar(11) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `ProductID` varchar(11) NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `ProductKind` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `region`
--

CREATE TABLE `region` (
  `RegionID` varchar(11) NOT NULL,
  `RegionName` varchar(45) NOT NULL,
  `RegionManagerID` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `salesperson`
--

CREATE TABLE `salesperson` (
  `UserID` varchar(20) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Salary` varchar(11) NOT NULL,
  `JobTitle` varchar(45) NOT NULL,
  `StoreID` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `store`
--

CREATE TABLE `store` (
  `StoreID` varchar(11) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `SalespersonNum` varchar(11) NOT NULL,
  `ManagerID` varchar(11) NOT NULL,
  `RegionID` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `transactions`
--

CREATE TABLE `transactions` (
  `OrderID` varchar(11) NOT NULL,
  `CustomerID` varchar(11) NOT NULL,
  `ProductID` varchar(11) NOT NULL,
  `SalespersonID` varchar(11) NOT NULL,
  `Quantity` varchar(11) NOT NULL,
  `TransactionDate` date NOT NULL,
  `Totalprice` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `user_login`
--

CREATE TABLE `user_login` (
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_business`
--
ALTER TABLE `customer_business`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `customer_home`
--
ALTER TABLE `customer_home`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`StoreID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`RegionID`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `StoreID` (`StoreID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`StoreID`),
  ADD KEY `RegionID` (`RegionID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `SalespersonID` (`SalespersonID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
