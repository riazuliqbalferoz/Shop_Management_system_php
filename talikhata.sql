-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 07:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talikhata`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_product`
--

CREATE TABLE `buy_product` (
  `id` int(11) NOT NULL,
  `shopname` varchar(50) NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `amount` int(15) DEFAULT NULL,
  `status` int(15) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_product`
--

INSERT INTO `buy_product` (`id`, `shopname`, `phone`, `amount`, `status`, `address`, `description`, `image`) VALUES
(1, 'sdfhjwertyu', 2147483647, 234, 0, 'sdfghjwerty', 'dfghjweruixcvb', 'assets/image/1017-1.png'),
(2, 'asdfghjk', 2147483647, 7654, 0, 'dfghjrtyu', 'sdfghjwertyuizxcvbnmgh', 'assets/image/1017-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `id` int(11) NOT NULL,
  `date` varchar(256) DEFAULT NULL,
  `cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `date`, `cash`) VALUES
(1, '2021-08-18', 4858);

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `consumerid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE `due` (
  `Personid` int(11) NOT NULL,
  `Amount` int(10) NOT NULL,
  `description` varchar(10) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `phone` int(25) DEFAULT NULL,
  `date` date NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `due`
--

INSERT INTO `due` (`Personid`, `Amount`, `description`, `name`, `phone`, `date`, `picture`, `status`) VALUES
(1, 23, 'dfgherty', 'sdfghxcvbn', 2147483647, '2021-08-18', 'assets/image/227028410_1052482245555978_948412610831783887_n.png', 0),
(2, 2345, 'sdfghjrtyu', 'dfghcvbngh', 2147483647, '2021-08-18', 'assets/image/227028410_1052482245555978_948412610831783887_n.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `extra_expencess`
--

CREATE TABLE `extra_expencess` (
  `id` int(6) NOT NULL,
  `amount` int(5) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra_expencess`
--

INSERT INTO `extra_expencess` (`id`, `amount`, `date`, `description`, `image`) VALUES
(1, 234, '2021-08-18', 'dfghjertyui', 'assets/image/227387611_3045237632387655_279791657252073643_n.png'),
(2, 234, '2021-08-18', 'dfghjfg', 'assets/image/227028410_1052482245555978_948412610831783887_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `recharge_sales`
--

CREATE TABLE `recharge_sales` (
  `id` int(9) NOT NULL,
  `amount` int(5) NOT NULL,
  `number` int(11) NOT NULL,
  `sim_name` tinytext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recharge_sales`
--

INSERT INTO `recharge_sales` (`id`, `amount`, `number`, `sim_name`, `date`) VALUES
(1, 234, 2147483647, 'Grameenphone', '2021-08-18'),
(2, 234, 2147483647, 'TeleTalk', '2021-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `cost` int(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `discount` int(3) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `cost`, `description`, `discount`, `picture`, `date`, `Amount`) VALUES
(1, 3456, 'sdfghjqwertyuxcvbn', 5, 'assets/image/748.png', '2021-08-18', 3283),
(2, 2323, 'wertyuisdfghjkcvbnm', 2, 'assets/image/1017-1.png', '2021-08-18', 2277),
(3, 2000, 'sdfghjk', 5, 'assets/image/images.jpg', '2021-08-18', 1900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_product`
--
ALTER TABLE `buy_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`consumerid`);

--
-- Indexes for table `due`
--
ALTER TABLE `due`
  ADD PRIMARY KEY (`Personid`);

--
-- Indexes for table `extra_expencess`
--
ALTER TABLE `extra_expencess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recharge_sales`
--
ALTER TABLE `recharge_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_product`
--
ALTER TABLE `buy_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `consumerid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `due`
--
ALTER TABLE `due`
  MODIFY `Personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `extra_expencess`
--
ALTER TABLE `extra_expencess`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recharge_sales`
--
ALTER TABLE `recharge_sales`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
