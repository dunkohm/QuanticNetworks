-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2025 at 07:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qtcshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Mikrotik'),
(2, 'Cisco'),
(3, 'Tp Link'),
(4, 'Tenda'),
(5, 'Apple'),
(6, 'Windows'),
(7, 'Samsung'),
(8, 'Dell'),
(9, 'Lenovo'),
(10, 'HP'),
(11, 'Omen');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(11, '::1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Networking'),
(2, 'Electrical'),
(3, 'Storage'),
(4, 'Office'),
(5, 'Telephone'),
(6, 'Computers'),
(7, 'Cables'),
(8, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(5, 'Tenda N300', 'Wireless Router', 'Wireless Router, N300, Tenda router, cheap router', 1, 4, 'Tenda3.jpg', 'Tenda4.jpg', 'Tenda2.jpg', '2000', '2023-04-10 18:27:35', 'true'),
(6, 'TP Link Router', 'tp link wireless router', 'tp link, home router,300mbps, wireless', 1, 3, 'Tplink.jpg', 'TP-Link-TL-MR3420-3G-4G-Wireless-Router.webp', 'tp_link_tl_w850n_router_inalambrico_n300_01_l.jpg', '2300', '2023-04-10 18:34:46', 'true'),
(7, 'Tp-Link TL-SF1024D 24-Port Rackmount Switch', 'Tp-Link 24-Port Rackmount Switch', '24-Port, rackmount, Switch ,Tp link,full duplex switch, poe switch', 1, 3, 'Tp-Link-TL-SF1024-24-Port-Switch.webp', 'Tp-Link-TL-SF1024-24-Port-Switch.webp', 'Tp-Link-TL-SF1024-24-Port-Switch.webp', '6,500', '2023-04-10 18:39:41', 'true'),
(8, 'TP-LINK TL-WR841N N', '300Mbps Wireless N Router TL-WR841N', 'Tp-Link Router Prices in kenya, Tp-Link Routers, Tp-link, Tp-Link Routers', 1, 3, 'TL-WR841NEU14.jpg', 'TL-WR841NEU14.jpg', 'TL-WR841NEU14.jpg', '2000', '2023-04-10 18:49:34', 'true'),
(9, 'TP-Link 16Port 10/100Mbps Switch', 'TP-Link TL-SF1016D Fast Ethernet Switch', 'TP-Link, TL-SF1016D, Fast Ethernet Switch,10/100Mbps Switch, 16Port', 1, 3, 'TPLINK 16prt_switch.jpg', 'TPLINK 16prt_switch.jpg', 'TPLINK 16prt_switch.jpg', '4000', '2023-04-10 18:58:51', 'true'),
(10, 'Tenda F6', 'Tenda F6 Wireless Router', 'wireless router, tenda routers in kenya,Tenda F6 ,WiFi Router ,2.4GHz, 4x RJ45 100Mb/s', 1, 4, 'f6-300x300.jpg', 'f6-300x300.jpg', 'f6-300x300.jpg', '2000', '2023-04-10 19:03:58', 'true'),
(11, 'TP-Link  5-Port switch', 'TL-SF1005D desktop switch', 'TP-Link Switch,TL-SF1005D desktop switch,TP-Link  5-Port switch', 1, 3, 'TP-Link-TL-SF1005D-2.jpeg', 'TP-Link-TL-SF1005D-3-300x143.jpeg', 'TP-Link-TL-SF1005D5port.jpeg', '1300', '2023-04-10 19:09:06', 'true'),
(12, 'Category 6 Ethernet Cable', 'Cat 6 Outdoor Ethernet Cable', 'Cat 6, Outdoor, Ethernet Cable.', 7, 6, 'Cat-6-Outdoor-cables-kenya-_sghn1l.webp', 'Cat-6-Outdoor-cables-kenya-_sghn1l.webp', 'Cat-6-Outdoor-cables-kenya-_sghn1l.webp', '12500', '2023-04-10 19:15:34', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ipaddress` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_password`, `user_image`, `user_ipaddress`, `user_address`) VALUES
(1, 'Duncan M', '0745609822', 'sirduncan887@gmail.com', '33333333', 'istockphoto-1301038922-612x612.jpg', ' ::1', 'Roysambu, Nairobi, Kenya'),
(2, 'Wangari', '0745456823', 'wangari@gmail.com', '$2y$10$XimfkfeNtGvzi5vgc7v0FOiJxm/o3m19cxPz2OV9GdRv8Q6PGfclC', 'IRcurtain.jpg', ' ::1', 'Kasarani, Nairobi, Kenya'),
(3, 'Wanjiku', '0113456823', 'wanjiku@gmail.com', '$2y$10$RKyJpTMgaV3XU7MP.1aPKuFkOhGo1Thrb7uamWVJ0EjyrSPLflgyq', 'IR2lampshade.jpg', ' ::1', 'Muranga Kenya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
