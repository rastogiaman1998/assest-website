-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 04:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `margshree`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `customer_id` int(11) NOT NULL,
  `shop_location` varchar(255) NOT NULL,
  `notes_for_customer` varchar(1000) NOT NULL,
  `family_members` varchar(1000) NOT NULL,
  `orders` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customer_id`, `shop_location`, `notes_for_customer`, `family_members`, `orders`) VALUES
(19, 'Mumbai', ' xyz', '', ''),
(23, 'USA', ' aman', '', ''),
(24, 'fuy', ', aman', '', ''),
(25, '', '', '', ''),
(26, 'NOIDA', '', '', ''),
(28, '', '', '', ''),
(30, '', '', '', ''),
(31, 'djfbub', '', '', ''),
(32, '', '', '', ''),
(34, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email_id`, `business_name`, `address`, `phone_no`) VALUES
(19, 'Gagan xyz', 'xyz@gmail.com', '', 'Noida', '9811554027'),
(23, 'xyz', 'xyz@gmail.com', '', 'abcd', '1235650'),
(24, 'xyz', 'aman', '', 'abcs', '41332'),
(25, 'hjjg', 'hjhjb', 'bmbmjb', 'bjmbj', '5464'),
(26, 'gagan', 'jhfkjh', '', 'vh.jb.jb', '21216'),
(28, 'hjhj', 'jkbkjbkj', 'jkbkjb', 'kjbkjb', '788998689'),
(30, 'mjbhjvbjh', 'hjvjhv', 'hjvjhv', 'hjvhv', '879879'),
(31, 'jbjhb', 'bjhvbjk', '', 'bjvb', 'jbjb'),
(32, 'Ashish', 'ashish@gmail.com', 'Polly Computers', 'Bostan', '5678'),
(34, 'Aman Rastogi', 'amanr@gmail.com', 'Rastogi', 'X-113 STREET NO 11', '9811554026');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oeid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oeid`, `orderid`, `customerid`, `pid`, `quantity`, `note`) VALUES
(17, 4, 19, 2, 20, 'blue colour'),
(18, 5, 19, 2, 20, 'blue colour'),
(19, 6, 25, 1, 20, 'blue colour'),
(20, 6, 25, 2, 20, 'nil'),
(21, 7, 25, 1, 20, 'blue colour'),
(22, 7, 25, 2, 20, 'nil'),
(23, 8, 25, 1, 20, 'blue colour'),
(24, 8, 25, 2, 20, 'nil'),
(25, 9, 24, 1, 20, 'nil'),
(26, 10, 24, 1, 20, 'nil'),
(27, 11, 24, 1, 20, 'nil'),
(28, 12, 23, 1, 20, 'blue colour');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `model` varchar(11) NOT NULL,
  `skuid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pcid` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `primary_material` varchar(20) NOT NULL,
  `secondary_material` varchar(20) NOT NULL,
  `price_usd` int(11) NOT NULL,
  `price_euro` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `packaging_inner` int(11) NOT NULL,
  `packaging_outer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `model`, `skuid`, `name`, `pcid`, `height`, `width`, `depth`, `weight`, `primary_material`, `secondary_material`, `price_usd`, `price_euro`, `color`, `packaging_inner`, `packaging_outer`) VALUES
(1, '1234', 12341, 'Model1', 1, 50, 24, 39, 500, 'Glass', 'Steel', 100, 76, 'Green', 25, 20),
(2, '2345', 23451, 'Model2', 1, 0, 0, 0, 0, '', '', 0, 0, '', 0, 0),
(3, '1234', 12342, 'Model1 - Blue', 1, 12, 12, 12, 12, '', '', 12, 12, '', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `pcid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`pcid`, `name`, `description`) VALUES
(1, 'Kitchenware', 'For all products in Kitchen'),
(2, 'Home Decor', 'For all home decor related products'),
(6, 'Light', 'For all Lighting Equipments');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oeid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pcid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
