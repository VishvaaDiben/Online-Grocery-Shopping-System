-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 04:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiisuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulk_order`
--

CREATE TABLE `bulk_order` (
  `bo_id` bigint(20) NOT NULL,
  `bo_date` date NOT NULL,
  `bo_details` varchar(800) NOT NULL,
  `bo_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL,
  `cart_user_id` bigint(20) NOT NULL,
  `cart_product_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` bigint(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `category`, `sub_category`) VALUES
(29, 'Fresh Vegetables', 'Ginger'),
(30, 'Fresh Vegetables', 'Garlic'),
(31, 'Fresh Vegetables', 'Onion '),
(32, 'Fresh Vegetables', 'Chili'),
(33, 'Fresh Vegetables', 'Potato'),
(34, 'Exotic Vege', 'Leek '),
(35, 'Fresh Fruit', 'Apple'),
(36, 'Exotic Fruit', 'Dragon fruit');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_slot` varchar(200) NOT NULL,
  `delivery_driver` bigint(20) NOT NULL,
  `delivery_address` varchar(500) NOT NULL,
  `delivery_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `farmers_id` bigint(20) NOT NULL,
  `farmers_name` varchar(100) NOT NULL,
  `farmers_address` varchar(500) NOT NULL,
  `farmers_status` varchar(10) NOT NULL,
  `farmers_remark` varchar(200) NOT NULL,
  `farmers_vegelist` varchar(200) NOT NULL,
  `farmers_commision` varchar(200) NOT NULL,
  `farmers_folder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_temp`
--

CREATE TABLE `favourite_temp` (
  `favourite_id` bigint(20) NOT NULL,
  `favourite_userid` bigint(20) NOT NULL,
  `favourite_productid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite_temp`
--

INSERT INTO `favourite_temp` (`favourite_id`, `favourite_userid`, `favourite_productid`) VALUES
(7, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) NOT NULL,
  `order_number` varchar(200) NOT NULL,
  `order_remark` varchar(200) NOT NULL,
  `order_deliveryslot` varchar(100) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `order_time` varchar(50) NOT NULL,
  `order_address` varchar(500) NOT NULL,
  `order_detail` varchar(500) NOT NULL,
  `order_userid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `product_weightkg` varchar(100) NOT NULL,
  `product_pricekg` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_weightkg`, `product_pricekg`, `product_price`, `category`, `sub_category`) VALUES
(11, 'Ginger', '940764.jpg', '1', '1', '1', 'Fresh Vegetables', 'Ginger'),
(12, 'Garlic', '897991.jpg', '2', '2', '4', 'Fresh Vegetables', 'Garlic'),
(13, 'onion', '566444.jpg', '3', '3', '9', 'Fresh Vegetables', 'Onion '),
(14, 'Chili', '278523.jpg', '4', '4', '16', 'Fresh Vegetables', 'Chili'),
(16, 'Broccoli', '649856.jpg', '0.5', '9', '4.5', 'Fresh Vegetables', 'Broccoli'),
(17, 'Eggplant', '640222.jpg', '10', '3', '30', 'Fresh Vegetables', 'Potato');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_pwd` varchar(100) NOT NULL,
  `staff_department` varchar(100) NOT NULL,
  `staff_status` varchar(10) NOT NULL,
  `staff_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_record`
--

CREATE TABLE `staff_record` (
  `staffrec_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `staffrec_lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staffrec_timein` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `staffrec_timeout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `temp_id` bigint(20) NOT NULL,
  `temp_number` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `timeslot` varchar(100) NOT NULL,
  `temp_date` varchar(200) NOT NULL,
  `temp_time` varchar(50) NOT NULL,
  `temp_address` varchar(500) NOT NULL,
  `temp_details` varchar(500) NOT NULL,
  `customer_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`temp_id`, `temp_number`, `message`, `timeslot`, `temp_date`, `temp_time`, `temp_address`, `temp_details`, `customer_id`) VALUES
(9, 'maiisuu-1496085260', '', '7AM - 9AM', '30-05-2017', '03:14 am', 'No 44,Simpang Ampat,Brunei,12000', '13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_business`
--

CREATE TABLE `user_business` (
  `userb_id` bigint(20) NOT NULL,
  `userb_name` varchar(100) NOT NULL,
  `userb_bizname` varchar(100) NOT NULL,
  `userb_officetel` varchar(20) NOT NULL,
  `user_bmobile` varchar(20) NOT NULL,
  `userb_add1` varchar(500) NOT NULL,
  `userb_add2` varchar(500) NOT NULL,
  `userb_email` varchar(100) NOT NULL,
  `userb_pwd` varchar(20) NOT NULL,
  `userb_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_business_register`
--

CREATE TABLE `user_business_register` (
  `userid` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `number1` int(50) NOT NULL,
  `number2` int(50) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `business_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_business_register`
--

INSERT INTO `user_business_register` (`userid`, `email`, `password`, `number`, `number1`, `number2`, `business_name`, `business_type`) VALUES
(1, 'vishbaa@gmail.com', '12345678', 1234567890, 0, 0, '1', 'volvo');

-- --------------------------------------------------------

--
-- Table structure for table `user_favourites`
--

CREATE TABLE `user_favourites` (
  `fav_id` bigint(100) NOT NULL,
  `product_id` varchar(500) NOT NULL,
  `list_name` varchar(100) NOT NULL,
  `fav_userid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_favourites`
--

INSERT INTO `user_favourites` (`fav_id`, `product_id`, `list_name`, `fav_userid`) VALUES
(1, '', 'thiben', 1),
(2, '', 'Vege', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_individual`
--

CREATE TABLE `user_individual` (
  `useri_id` bigint(20) NOT NULL,
  `useri_name` varchar(100) NOT NULL,
  `useri_fullname` varchar(100) NOT NULL,
  `user_officetel` varchar(20) NOT NULL,
  `useri_mobile` varchar(20) NOT NULL,
  `useri_shiipingadd1` varchar(500) NOT NULL,
  `useri_shippingadd2` varchar(500) NOT NULL,
  `useri_email` varchar(100) NOT NULL,
  `useri_pwd` varchar(20) NOT NULL,
  `useri_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_individual_register`
--

CREATE TABLE `user_individual_register` (
  `userid` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `number1` int(50) NOT NULL,
  `number2` int(50) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_individual_register`
--

INSERT INTO `user_individual_register` (`userid`, `email`, `password`, `number`, `number1`, `number2`, `address1`, `address2`) VALUES
(1, 'vishvaadiben@yahoo.com', '11111111', 123456789, 12345678, 187654321, 'No 64,Simpang Empat puluh,Brunei,12000', 'No 106,Jalan Jaggung,Brunei,123'),
(2, 'maiisuu@yahoo.com', '22222222', 123456789, 134567895, 0, 'No 44,,Jalan 13,Brunei,111111', 'No 64,Bdr Jaya, Kg. Paya,Brunei,111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulk_order`
--
ALTER TABLE `bulk_order`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`farmers_id`);

--
-- Indexes for table `favourite_temp`
--
ALTER TABLE `favourite_temp`
  ADD PRIMARY KEY (`favourite_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_record`
--
ALTER TABLE `staff_record`
  ADD PRIMARY KEY (`staffrec_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `user_business`
--
ALTER TABLE `user_business`
  ADD PRIMARY KEY (`userb_id`);

--
-- Indexes for table `user_business_register`
--
ALTER TABLE `user_business_register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_favourites`
--
ALTER TABLE `user_favourites`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `user_individual`
--
ALTER TABLE `user_individual`
  ADD PRIMARY KEY (`useri_id`);

--
-- Indexes for table `user_individual_register`
--
ALTER TABLE `user_individual_register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulk_order`
--
ALTER TABLE `bulk_order`
  MODIFY `bo_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `farmers_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favourite_temp`
--
ALTER TABLE `favourite_temp`
  MODIFY `favourite_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_record`
--
ALTER TABLE `staff_record`
  MODIFY `staffrec_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `temp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_business`
--
ALTER TABLE `user_business`
  MODIFY `userb_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_business_register`
--
ALTER TABLE `user_business_register`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_favourites`
--
ALTER TABLE `user_favourites`
  MODIFY `fav_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_individual`
--
ALTER TABLE `user_individual`
  MODIFY `useri_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_individual_register`
--
ALTER TABLE `user_individual_register`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
