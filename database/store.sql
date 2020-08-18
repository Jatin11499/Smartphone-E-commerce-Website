-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2020 at 05:42 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'POCO F2 Pro', 40790),
(2, 'HUAWEI Mate 30 Pro', 86590),
(3, 'OnePlus 8 Pro', 54999),
(4, 'Realme X2 Pro', 35999),
(5, 'Samsung Galaxy S20 Ultra', 97999),
(6, 'Xiaomi Mi Mix Alpha', 199990);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `registration_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `phone`, `registration_timestamp`, `password`, `city`, `address`) VALUES
(20, 'wdwefr@xyz.com', 'efffrsgrw', '5345322153', '2020-06-16 06:52:52', '81dc9bdb52d04dc20036dbd8313ed055', 'dwerg', 'cdEGETG'),
(21, 'piyush@xyz.com', 'piyush', '5345322199', '2020-06-16 07:02:04', '81dc9bdb52d04dc20036dbd8313ed055', 'wfrgreg', 'rgeheth'),
(24, 'vaibhav15@gmail.com', 'Vaibhav Ghai', '8005678790', '2020-06-17 06:04:58', 'a6fd2bae73f9f19d0c5d050e1d00c89a', 'jaipur', 'vaishali nagar'),
(25, 'shreyansh@gmail.com', 'shreyansh jain', '5345322191', '2020-06-18 05:46:26', 'a6fd2bae73f9f19d0c5d050e1d00c89a', 'ajmer', 'shastri'),
(28, 'webster17013@gmail.com', 'Jatin Kumar Teckchandani', '9414635573', '2020-06-19 05:35:15', '25d55ad283aa400af464c76d713c07ad', 'ajmer', 'shastri nagar');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(11, 25, 2, 'Confirmed'),
(12, 25, 4, 'Confirmed'),
(13, 24, 5, 'Confirmed'),
(14, 24, 2, 'Confirmed'),
(15, 24, 1, 'Confirmed'),
(16, 28, 3, 'Confirmed'),
(17, 28, 6, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
