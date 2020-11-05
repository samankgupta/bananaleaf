-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 12:55 PM
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
(3, 'Tanay', 'tanaybhadula2002@gmail.com', 'tgtguruji'),
(5, 'Nishant Kashyap', 'nishkash4@gmail.com', 'nishkash4');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `contact_mobile` varchar(10) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_message`) VALUES
(1, 'Yash Jain', 'yash.tushar15@gmail.com', '2147483647', 'Had a great Experience!'),
(3, 'Samank Gupta', 'samankgupta@gmail.com', '2147483647', 'Nice Website');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `mobile`, `email`, `address`, `password`) VALUES
('Nishant Kashyap', '2147483647', 'nishant.kashyap2019@vitstudent.ac.in', 'gurgaon', 'nishant123'),
('yash jain', '2147483647', 'topper@gmail.com', 'tupperpur', 'ststopper123'),
('yash ', '2147483647', 'topper@topper.com', 'topperpur', 'yash123'),
('Nishant ', '2147483647', 'nishant.kashyap2019@gmail.com', 'gurugram', 'nishant124'),
('Samank Gupta', '8586960596', 'samankgupta@gmail.com', '204, Regalia Heights, Shipra Suncity, Indirapuram', 'samank15'),
('Vikas Gupta', '9873012430', 'vikas.manthan@gmail.com', '204, Regalia Heights, Shipra Suncity, Indirapuram', 'vikas230767');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `order_time` datetime NOT NULL,
  `order_summary` varchar(400) NOT NULL,
  `order_total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_email`, `order_time`, `order_summary`, `order_total`) VALUES
(1, 'Samank Gupta', 'samankgupta@gmail.com', '2020-11-05 05:24:48', '<p>Chicken Wings : 2</p><p>Butter Chicken : 1</p><p>Tandoori Butter Naan : 3</p><p>Ice Cream Sandwich : 3</p>', 1060);

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
  `reservation_mobile` varchar(10) NOT NULL,
  `reservation_email` varchar(255) NOT NULL,
  `reservation_time` time NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_people` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `reservation_name`, `reservation_mobile`, `reservation_email`, `reservation_time`, `reservation_date`, `reservation_people`) VALUES
(3, 'Yash Jain', '948925892', 'yash.tushar15@gmail.com', '11:15:00', '2020-11-07', 6),
(4, 'Samank Gupta', '2147483647', 'samankgupta@gmail.com', '12:12:00', '2020-11-11', 2);

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
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
