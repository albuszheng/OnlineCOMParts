-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-02 22:01:18
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer_business`
--

CREATE TABLE `customer_business` (
  `UserID` int(11) NOT NULL,
  `Business_category` char(45) NOT NULL,
  `Annual_Income` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `customer_home`
--

CREATE TABLE `customer_home` (
  `UserID` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` char(45) NOT NULL,
  `Income` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `customer_info`
--

CREATE TABLE `customer_info` (
  `UserID` int(11) NOT NULL,
  `FullName` char(45) NOT NULL,
  `E_mail` char(45) NOT NULL,
  `Street` char(45) NOT NULL,
  `City` char(45) NOT NULL,
  `State` char(45) NOT NULL,
  `Address_zip` int(11) NOT NULL,
  `Kind` char(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `inventory`
--

CREATE TABLE `inventory` (
  `StoreID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `InventoryNum` int(11) NOT NULL,
  `LastUpdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` char(45) NOT NULL,
  `Price` int(11) NOT NULL,
  `ProductKind` char(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `region`
--

CREATE TABLE `region` (
  `RegionID` int(11) NOT NULL,
  `RegionName` char(45) NOT NULL,
  `RegionManagerID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `salesperson`
--

CREATE TABLE `salesperson` (
  `SalesID` int(11) NOT NULL,
  `FullName` char(45) NOT NULL,
  `E_mail` char(45) NOT NULL,
  `Address` char(45) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Job_Title` char(45) NOT NULL,
  `StoreID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `store`
--

CREATE TABLE `store` (
  `StoreID` int(11) NOT NULL,
  `Address` char(45) NOT NULL,
  `SalespersonNum` int(11) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  `RegionID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `transactions`
--

CREATE TABLE `transactions` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `SalespersonID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TransactionDate` date NOT NULL,
  `Totalprice` int(11) NOT NULL
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
  ADD PRIMARY KEY (`SalesID`),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
