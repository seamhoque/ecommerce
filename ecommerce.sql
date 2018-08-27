-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 10:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Dell'),
(3, 'Motorolla'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(13, '::1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Computers'),
(3, 'Mobiles'),
(4, 'Cameras'),
(5, 'ipads'),
(6, 'iphones ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_type` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_image` varchar(100) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_type`, `customer_name`, `customer_email`, `customer_pass`, `customer_image`, `customer_contact`, `customer_address`) VALUES
('Customer', 'asad', '', 'asd', 'Activity.png', 'asf', 'fsaf'),
('Customer', '', 'asd', 'dasd', 'AIUB_whole_logo.png', 'asdad', 'saddd'),
('Customer', 'mustakim', 'mustakim@gmail.com', '12345', 'customer/customer_images/customer1.jpg', '01680459329', 'banani'),
('Customer', 'asdadasd', 'rafi33@gmail.com', '123456666666', 'AIUB_whole_logo.png', 'asddd', 'dasdadsd'),
('Customer', 'rafi', 'rafi@gmail.com', '12345', 'shit.PNG', '01933340833', 'uttara'),
('Customer', 'sdff', 'sdffff', 'sdffff', 'AIUB_whole_logo.png', 'fsdfff', 'gdsfgdsgg'),
('Admin', 'seam', 'seam@gmail.com', '12345', 'admin_area/images/admin1.jpg', '01993049333', 'khilgaon'),
('Customer', 'yuii', 'yui', 'yui', 'Activity.png', 'wer', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(8, 6, 6, 'Iphone 6', 60000, '<p>&nbsp;Used with box</p>', 'Apple-iPhone6.jpg', 'iphone old used '),
(9, 6, 6, 'iphone 7', 70000, '<p>brand new international</p>', 'Apple-iPhone6.jpg', 'new unlocked usa'),
(10, 5, 6, 'ipad5', 50000, '<p>6 month used</p>', 'apple-ipad 1.jpg', 'old used tab'),
(13, 2, 2, 'desktop', 90000, '<p>asdasd asad</p>', 'lenovo desktop.png', 'asf jfhyt'),
(14, 4, 4, 'dslr400', 45000, '<p>asd rtert ujj</p>', 'sony DSLR.jpg', 'dfgwgwe tterw'),
(15, 4, 5, 'handicam', 12000, '<p>asdasdw</p>', 'toshiba camera.jpg', 'tyutut ert'),
(16, 1, 1, 'lv9699', 63000, '<p>sdfsdfs heawe</p>', 'lenovo laptop.png', 'yoiyui rty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
