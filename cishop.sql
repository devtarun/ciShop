-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 12:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `an` varchar(200) NOT NULL,
  `ae` varchar(200) NOT NULL,
  `ap` varchar(200) NOT NULL,
  `ar` varchar(100) NOT NULL,
  `apwd` varchar(200) NOT NULL,
  `acd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `an`, `ae`, `ap`, `ar`, `apwd`, `acd`) VALUES
(1, 'Tarun', 'admin@cishop.com', '8340490384', 'Administrator', '7815696ecbf1c96e6894b779456d330e', '2019-01-22 13:56:10'),
(2, 'Mukesh', 'editor@cishop.com', '1234567890', 'Editor', '7815696ecbf1c96e6894b779456d330e', '2019-01-22 13:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cn` varchar(200) NOT NULL,
  `ccd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cn`, `ccd`) VALUES
(1, 'Men', '2019-01-22 08:01:28'),
(2, 'Women', '2019-01-22 08:01:28'),
(3, 'Kids', '2019-01-22 08:01:28'),
(4, 'Accessories', '2019-01-22 08:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `cn` varchar(200) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `ct` varchar(50) NOT NULL DEFAULT 'percent',
  `ccd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `cn`, `cc`, `cp`, `ct`, `ccd`) VALUES
(1, 'Mega Discount', 'MEGA50', '50', 'percent', '2019-01-23 05:16:42'),
(2, 'Mega Sale', 'SALE2K', '2000', 'amount', '2019-01-23 05:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cn` varchar(200) NOT NULL,
  `ce` varchar(200) NOT NULL,
  `cp` varchar(200) NOT NULL,
  `cadd` text NOT NULL,
  `cpwd` varchar(200) NOT NULL,
  `ccd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cn`, `ce`, `cp`, `cadd`, `cpwd`, `ccd`) VALUES
(1, 'Tarun', 'tarun.kist@gmail.com', '8340490384', 'Patna', '7815696ecbf1c96e6894b779456d330e', '2019-01-22 13:57:51'),
(3, 'ASTHA DWIVEDI', 'asd@asd.com', '', '', 'asd', '2019-01-22 15:16:48'),
(4, 'Aamir', 'duxtechnology@gmail.com', '', '', 'asd', '2019-01-22 15:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `oq` int(11) NOT NULL,
  `op` int(11) NOT NULL,
  `os` varchar(100) NOT NULL DEFAULT 'incart',
  `ocd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `cid`, `oq`, `op`, `os`, `ocd`) VALUES
(3, 1, 2, 3, 500, 'incart', '2019-01-21 20:35:05'),
(4, 1, 1, 1, 8000, 'pending', '2019-01-23 04:49:02'),
(6, 1, 1, 1, 8000, 'pending', '2019-01-23 06:30:55'),
(10, 1, 1, 1, 8000, 'pending', '2019-01-23 07:09:54'),
(11, 1, 1, 1, 8000, 'pending', '2019-01-23 07:10:10'),
(13, 4, 1, 2, 16000, 'pending', '2019-01-23 07:11:15'),
(14, 6, 1, 5, 40000, 'pending', '2019-01-23 07:12:38'),
(16, 2, 1, 4, 32000, 'incart', '2019-01-23 07:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pn` varchar(200) NOT NULL,
  `psd` text NOT NULL,
  `pld` longtext NOT NULL,
  `prp` varchar(50) NOT NULL,
  `psp` varchar(50) NOT NULL,
  `pcat` int(11) NOT NULL,
  `pimg` varchar(200) NOT NULL,
  `psq` int(11) NOT NULL,
  `isf` int(11) NOT NULL DEFAULT '0',
  `pcd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pn`, `psd`, `pld`, `prp`, `psp`, `pcat`, `pimg`, `psq`, `isf`, `pcd`) VALUES
(1, '123123', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 1, '', 100, 1, '2019-01-22 07:59:23'),
(2, 'Lakme black', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 1, 'uploads/88930.jpg', 100, 1, '2019-01-22 07:59:23'),
(3, 'Product 3', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 1, 'uploads/p (21).jpg', 0, 1, '2019-01-22 09:40:15'),
(4, 'asdProduct Four', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 3, 'uploads/p (31).jpg', 200, 1, '2019-01-22 09:40:49'),
(5, 'Product Five', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 4, 'uploads/p (41).jpg', 50, 0, '2019-01-22 10:54:04'),
(6, 'Product Six', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nDonec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.\r\n\r\nDonec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.', '10000', '8000', 1, 'uploads/p (11).jpg', 30, 0, '2019-01-22 10:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
