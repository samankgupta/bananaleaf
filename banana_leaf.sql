-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 06:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banana_leaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Yash Jain', 'yash.jain@gmail.com', 'yash@123'),
(2, 'Samank Gupta', 'samankgupta@gmail.com', 'samank@123'),
(3, 'Tanay', 'tanaybhadula2002@gmail.com', 'tgtguruji');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Veg'),
(2, 'Non Veg'),
(3, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobile` int(100) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_img` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `max_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `product_title`, `product_img`, `product_price`, `product_desc`, `max_quantity`) VALUES
(7, 1, 1, 'Tandoori Paneer Tikka', 'paneertikka.jpg', 140, 'It\'s a famous Indian appetizer where pieces of paneer (Indian cottages cheese) and marinated with yogurt and spices and then grilled until charred. Onion, bell peppers and tomatoes are also added to the marination along with paneer.', 4),
(8, 1, 1, 'Spring Rolls', 'springrolls.jpg', 80, 'Chinese vegetable spring rolls are a popular starter or snack that is served in Indo Chinese restaurants. These are perfect as a starter/snack or for a weekend brunch. They can also be served for a dinner to accompany a bowl of delicious soup or noodles.', 4),
(9, 1, 2, 'Chicken Wings', 'chickenwings.jpg', 200, 'Deep-fried, baked, buffalo, or teriyaki — whichever way you like them, crispy chicken wings are the ultimate game-day food.', 4),
(11, 2, 1, 'Chana Masala', 'chanamasala.jpg', 150, 'Chana masala is a delicious & flavorful Indian curry made by cooking chickpeas in a spicy onion tomato masala gravy.', 4),
(12, 2, 1, 'Paneer Butter Masala', 'paneerbuttermasala.jpg', 250, 'Paneer butter masala is a rich and creamy dish of paneer (cottage cheese) in a tomato, butter and cashew sauce (known as makhani gravy).', 4),
(13, 2, 1, 'Dal Makhani', 'dalmakhani.jpg', 250, 'A classic Indian dish made with whole urad dal, rajma, butter and spices being one of the most popular and delicious lentil dishes.', 4),
(14, 2, 2, 'Butter Chicken', 'butterchicken.jpg', 300, 'Chunks of grilled chicken (tandoori chicken) cooked in a smooth buttery & creamy tomato-based gravy.', 4),
(15, 3, 1, 'Plain Naan', 'plainnaan.jpg', 30, 'The king of Indian breads, light, fluffy and baked in the tandoori oven.', 6),
(16, 3, 1, 'Garlic Naan', 'garlicnaan.jpg', 50, '                              \r\n                              Naan bread topped with finely chopped garlic cloves.                              \r\n                          ', 6),
(17, 3, 1, 'Tandoori Butter Naan', 'butternaan.jpg', 60, 'Healthy bread prepared with whole meal flour and baked in the tandoori oven.', 6),
(18, 3, 1, 'Chapati', 'chapati.jpg', 10, 'Thin rolled bread made from whole meal flour baked on a dry skillet and then further cooked on a naked flame.', 6),
(19, 4, 1, 'Gulab Jamun', 'gulabjamun.jpg', 15, 'Reduced milk dumplings stuffed with pistachio and cardamom, deep fried and doused in sugar syrup.', 6),
(20, 4, 1, 'Kulfi', 'kulfi.jpg', 50, 'A rich and creamy frozen dessert with almonds, served saffron syrup.', 6),
(21, 4, 1, 'Rasmalai', 'rasmalai.jpg', 40, 'Rasmalai is a popular Indian sweet of cottage cheese balls soaked in thickened, sweetened and flavored milk.', 6),
(22, 4, 1, 'Ice Cream Sandwich', 'icecreamsandwich.jpg', 60, 'A frozen dessert consisting of ice cream between two biscuits, wafers, or cookies.', 6),
(23, 1, 1, 'French Fries', 'frenchfries.jpg', 70, 'Fresh-cut fries made from Idaho potatoes. These deliciously classic fries are simple, crisp, and available with both chili and cheese as toppings.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(1, 'Starters'),
(2, 'Main Course'),
(3, 'Breads'),
(4, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(10) NOT NULL,
  `reservation_name` varchar(255) NOT NULL,
  `reservation_mobile` int(100) NOT NULL,
  `reservation_email` varchar(255) NOT NULL,
  `reservation_time` time NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_people` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
