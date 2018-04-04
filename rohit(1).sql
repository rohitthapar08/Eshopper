-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2016 at 12:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohit`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `br_id` int(11) NOT NULL,
  `br_name` varchar(100) DEFAULT NULL,
  `br_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`br_id`, `br_name`, `br_time`) VALUES
(3, 'LIFESTYLE', '2016-05-07 10:43:54'),
(4, 'SAMSUNG', '2016-05-07 10:44:04'),
(5, 'LAKME', '2016-05-07 10:44:19'),
(6, 'HYUNDAI', '2016-05-07 10:47:16'),
(7, 'DENIM', '2016-05-07 10:45:08'),
(8, 'PUMA', '2016-05-07 10:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) DEFAULT NULL,
  `ca_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ca_id`, `ca_name`, `ca_time`) VALUES
(4, 'ACCESORIES', '2016-05-07 10:39:53'),
(5, 'ELECTRONICS', '2016-05-07 10:40:39'),
(6, 'MAKEUP', '2016-05-07 10:42:50'),
(7, 'CLOTHES', '2016-05-07 10:44:57'),
(8, 'SHOES', '2016-05-07 10:46:04'),
(9, 'VEHICLE', '2016-05-07 10:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `login_name` varchar(100) DEFAULT NULL,
  `log_mobile` bigint(20) DEFAULT NULL,
  `log_email` varchar(100) DEFAULT NULL,
  `log_pass` varchar(100) DEFAULT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `login_name`, `log_mobile`, `log_email`, `log_pass`, `log_time`) VALUES
(1, 'ffgegesg', 9820124578, 'abcdghjj@yahoo.com', '124578', '2016-04-17 08:31:39'),
(2, 'Peter', 9820212456, 'peter123@gmail.com', 'smith123', '2016-04-30 14:05:06'),
(3, 'Andrew', 9820221456, 'andrew123@gmail.com', '123456', '2016-04-30 14:52:59'),
(4, 'rohit', 7738546347, 'rohit@gmail.com', '83d5e1e49bd5f0ebbf6c9ba40416057fac1b5d76', '2016-05-07 13:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` text,
  `p_mrp` decimal(8,2) DEFAULT NULL,
  `p_dis` tinyint(4) DEFAULT NULL,
  `p_caid` int(11) DEFAULT NULL,
  `p_brid` int(11) DEFAULT NULL,
  `p_desc` text,
  `p_imgpath` longtext,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_mrp`, `p_dis`, `p_caid`, `p_brid`, `p_desc`, `p_imgpath`, `p_time`) VALUES
(2, 'Hyundai i20 asta', '25000.00', 4, 9, 6, 'This is a hyundai i20.', '../assets/product/1462618260car.jpg', '2016-05-07 10:51:00'),
(3, 'Puma mens shoes', '4000.00', 2, 8, 8, 'This is a mens shoes.', '../assets/product/1462618375shoes.jpg', '2016-05-07 10:52:55'),
(4, 'Lifestyle womens dress', '7500.00', 5, 7, 3, 'This is lifestyle product.', '../assets/product/1462618590dress.jpg', '2016-05-07 10:56:30'),
(5, 'Lakme beauty', '6500.00', 10, 6, 5, 'This is a lakme product.', '../assets/product/1462618684image2.jpeg', '2016-05-07 10:58:04'),
(6, 'Samsung A200', '9000.00', 5, 5, 4, 'This is a samsung tv.', '../assets/product/1462618796tv.jpg', '2016-05-07 10:59:56'),
(7, 'Sansui E200', '11000.00', 2, 5, 4, 'dfsafsafgsdgsdh', '../assets/product/1462619017san.jpg', '2016-05-07 11:03:37'),
(8, 'Globus mens shirt', '4300.00', 2, 7, 3, 'cszfvgsdgdhgdfh', '../assets/product/1462619132t1.jpg', '2016-05-07 11:05:32'),
(9, 'Lifestyle womens punjabi', '3600.00', 1, 7, 3, 'sfsdfgdgdgh', '../assets/product/1462619237ser.jpg', '2016-05-07 11:07:17'),
(10, 'Huundai echo sportz', '60000.00', 2, 9, 6, 'dsdsfsdgdg', '../assets/product/1462619334sdsfd.jpg', '2016-05-07 11:08:54'),
(11, 'Hyundai i2o magna', '90000.00', 2, 9, 6, 'wrfwtewteyey', '../assets/product/1462619499car1.jpg', '2016-05-07 11:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wi_id` int(11) NOT NULL,
  `wi_pid` int(11) DEFAULT NULL,
  `wi_uid` int(11) DEFAULT NULL,
  `wi_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wi_id`, `wi_pid`, `wi_uid`, `wi_time`) VALUES
(12, 10, 4, '2016-05-07 15:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
