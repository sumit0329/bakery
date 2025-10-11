-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2025 at 02:22 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `clock_in` datetime DEFAULT NULL,
  `clock_out` datetime DEFAULT NULL,
  `hours_worked` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `clock_in`, `clock_out`, `hours_worked`) VALUES
(9, 122, '2025-10-08 22:46:43', NULL, NULL),
(8, 123, '2025-10-08 22:45:58', NULL, NULL),
(7, 123, '2025-10-08 22:43:46', NULL, NULL),
(6, 123, '2025-10-08 22:43:36', NULL, NULL),
(10, 123, '2025-10-08 22:52:37', '2025-10-08 23:11:45', 0.32),
(11, 123, '2025-10-08 22:52:42', '2025-10-08 23:03:34', 0.17),
(12, 4, '2025-10-08 23:13:16', '2025-10-08 23:13:20', 0.00),
(13, 4, '2025-10-08 23:15:43', '2025-10-08 23:15:49', 0.00),
(14, 2, '2025-10-09 00:35:38', '2025-10-09 00:35:44', 0.00),
(15, 23, '2025-10-10 15:15:31', '2025-10-10 15:15:38', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_id` int NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_id`, `order_date`, `total`, `quantity`) VALUES
(1, '', 1, '2025-10-10 03:51:59', 47.40, 0),
(2, '', 1, '2025-10-10 03:53:53', 395.00, 0),
(3, '', 1, '2025-10-10 03:55:59', 70.00, 10),
(4, '', 1, '2025-10-10 04:13:19', 595.00, 100),
(5, 'lal', 0, '2025-10-11 13:10:48', 39.50, 10),
(6, 'saugat', 0, '2025-10-11 14:15:20', 39.50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `product_name`) VALUES
(1, 7382, 1, 1, 5.95, NULL),
(2, 2, 3, 10, 6.60, NULL),
(3, 0, 1, 10, 59.50, 'High Fibre White Loaf Bread'),
(4, 0, 1, 10, 59.50, 'High Fibre White Loaf Bread'),
(5, 0, 1, 10, 59.50, 'High Fibre White Loaf Bread'),
(6, 0, 1, 10, 59.50, 'High Fibre White Loaf Bread'),
(7, 0, 1, 10, 59.50, 'High Fibre White Loaf Bread'),
(8, 0, 3, 10, 19.50, 'Round White Roll'),
(9, 0, 15, 20, 65.00, 'Pain au Chocolat'),
(10, 0, 15, 20, 65.00, 'Pain au Chocolat'),
(11, 0, 15, 20, 65.00, 'Pain au Chocolat'),
(12, 0, 13, 2, 6.00, 'Croissant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Admin', '$2y$10$5ydtHgzR7LzA1AvHybeBd.CTkkO/uMW2MJrIfgS/AM9ZNaSMrLomm'),
(123, 'sumit', '$2y$10$OXD.trIzlaht5fOPPbcl6O3Zxg8n7uSzg8A3nGEbCFwctfcl07oLu'),
(4, 'saugat', '$2y$10$B.DZsy4Sc.xWbeIHwmjhnuVba6OAEhGThheYeUr20bDj6FOX9WLCy'),
(2, 'tshewang', '$2y$10$8V6RBF7cB3KNw4qWVXHpPOAkuUxcDtb7fSvfBgV1I7GMfEQZ60NPe'),
(3, 'krijan', '$2y$10$m9HFoUnUUEIHUq477DBHmeTZjsxYKEO6kmFsjNXe4Y3zU0HorY6Bu'),
(23, 'Ethan', '$2y$10$aRN79eOxakS34/UgI26jke5vq2K.mPGP3LIYv5vK.f/PQSNjHMcTm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
