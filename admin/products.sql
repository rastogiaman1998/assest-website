-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2020 at 07:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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
(3, '1234', 12342, 'Model1', 1, 12, 12, 12, 12, '', '', 12, 12, '', 12, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
