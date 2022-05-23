-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 10:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `single_price` double NOT NULL,
  `total` double NOT NULL,
  `customer_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `quantity`, `single_price`, `total`, `customer_email`) VALUES
(50, 3, 1, 200, 200, 'default@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`) VALUES
(6, 'Electronics'),
(7, 'Toys'),
(8, 'Women\'s Wear');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_team`
--

CREATE TABLE `delivery_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `delivery_team_id` int(11) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message`, `customer_email`, `delivery_team_id`, `user_type`) VALUES
(2, 'dassdadsa', 'Enter customer email here if you are a customer', 1, 'delviery_team'),
(3, 'asdasdasdasddasdas', '', 1, 'delivery_team'),
(4, 'adjijasodasasd', 'iftekhar@gmail.com', 1, 'customer'),
(5, 'Hello you there?', 'iftekhar@gmail.com', 1, 'customer'),
(6, 'Your product is near.', '', 1, 'delivery_team');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_price` double NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `transactionID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_type`, `name`, `order_date`, `order_address`, `status`, `total_price`, `customer_email`, `transactionID`) VALUES
(3, 'personal', 'Iftekhar Hyder', '2021-09-19 22:19:13', 'Shaheenbag 440, Bangladesh, Dhaka', 'Delivered', 6800, 'iftekhar@gmail.com', '2322423'),
(4, 'personal', 'Mazidul Meem', '2021-09-20 18:42:39', 'Dhaka', 'Not Paid', 800, 'meem@gmail.com', '78216378'),
(5, 'personal', 'Kiasd Uti Kalam', '2021-09-20 18:45:29', 'Dhaka', 'Paid', 10200, 'kalam@gmail.com', '913892'),
(6, 'personal', 'daisjoidas', '2021-09-20 19:25:31', 'Dhaka', 'Not Paid', 800, 'dasdojas@gmail.com', '1232123'),
(8, 'personal', 'Rofaid', '2021-09-21 07:20:15', 'Dhaka', 'Paid', 50000, 'rofaid@gmail.com', '123213231'),
(9, 'personal', 'Zahir Hyder', '2021-09-21 09:28:23', 'Banglamotor, Dhaka', 'Not Paid', 3400, 'zhbd440@gmail.com', 'TX201533'),
(10, 'personal', 'Iftekhar Hyder', '2021-09-28 12:44:55', 'Dhaka', 'Not Payed', 1700, 'ifty@gmail.com', '123123213');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `name`, `description`, `price`, `image`, `cat_id`, `rating`) VALUES
(3, 'Hawai S34', 'Elegant smartphone. With comfortable price.', 200, 'images/6_3.png', 6, 5),
(4, 'Samsung Galaxy', 'Very expensive smartphone with good quality', 1700, 'images/6_4.png', 6, 3),
(10, ' Laptop x890', ' Gaming laptop', 50000, 'images/6_10.jpg', 6, 2),
(12, ' laptop100', ' Student Laptop.', 30000, 'images/6_12.png', 6, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `delivery_team`
--
ALTER TABLE `delivery_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
