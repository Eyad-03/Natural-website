-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2025 at 06:54 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be_natural`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `received_date` date DEFAULT NULL,
  `accepted_date` date DEFAULT NULL,
  `published_online_date` date DEFAULT NULL,
  `image_url` varchar(500) NOT NULL,
  `article_url` varchar(1000) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `received_date`, `accepted_date`, `published_online_date`, `image_url`, `article_url`, `is_active`, `created_at`) VALUES
(1, 'Co-recycling of natural and synthetic carbon materials for a sustainable circular economy', '2024-10-18', '2025-07-29', '2025-08-03', '../media/oil4.jpg', 'https://www.sciencedirect.com/science/article/pii/S0959652622022739', 1, '2025-09-07 13:14:10'),
(2, 'How Recycled Materials Are Used in New Products\r\n', '2024-10-18', '2025-07-29', '2025-08-03', '../media/oil3.jpg', 'https://www.recyclingtoday.org/blogs/news/how-recycled-materials-are-used-in-new-products', 1, '2025-09-07 13:14:10'),
(3, 'The natural products that could replace plastic\r\n', '2024-10-18', '2025-07-29', '2025-08-03', '../media/oil2.jpeg', 'https://www.bbc.com/future/article/20190125-the-natural-products-that-could-replace-plastic', 1, '2025-09-07 13:14:10'),
(4, 'Recycling Basics and Benefits\r\n', '2024-10-18', '2025-07-29', '2025-08-03', '../media/oil.jpg', 'https://www.epa.gov/recycle/recycling-basics-and-benefits', 1, '2025-09-07 13:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `session_id` varchar(64) DEFAULT NULL,
  `status` enum('open','checked_out') DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `unit_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `glass`
--

DROP TABLE IF EXISTS `glass`;
CREATE TABLE IF NOT EXISTS `glass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `glass`
--

INSERT INTO `glass` (`id`, `title`, `description`, `price`, `image_url`, `stock`, `created_at`) VALUES
(4, 'Glass Storage Jar', '1L airtight jar for kitchen storage', 9.50, '../media/g1.webp', 50, '2025-09-21 18:31:15'),
(5, 'Glass Coffee Mug', 'Heat-resistant 350ml coffee mug', 7.25, '../media/m1.webp', 60, '2025-09-21 18:31:15'),
(6, 'Glass Vase', 'Elegant flower vase, 25cm tall', 18.75, '../media/v1-.png', 30, '2025-09-21 18:31:15'),
(7, 'Glass Storage Jar', '1L airtight jar for kitchen storage', 9.50, '../media/g2.webp', 50, '2025-09-21 18:31:15'),
(8, 'Glass Mug', 'Heat-resistant 350ml coffee mug', 7.25, '../media/m2-.png', 60, '2025-09-21 18:31:15'),
(9, 'Glass Vase', 'Elegant flower vase, 25cm tall', 18.75, '../media/v2-.png', 30, '2025-09-21 18:31:15'),
(10, 'Glass Vase', 'Elegant flower vase, 25cm tall', 18.75, '../media/v3-.png', 30, '2025-09-21 18:45:36'),
(11, 'Glass Vase', 'Elegant flower vase, 25cm tall', 18.75, '../media/v4.png', 30, '2025-09-21 18:45:36'),
(12, 'Glass Vase', 'Elegant flower vase, 25cm tall', 18.75, '../media/v5-.png', 30, '2025-09-21 18:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

DROP TABLE IF EXISTS `plants`;
CREATE TABLE IF NOT EXISTS `plants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `title`, `description`, `price`, `image_url`, `stock`, `created_at`) VALUES
(4, 'Snake Plant', 'Low maintenance indoor plant', 15.99, '../media/snake-.png', 30, '2025-09-21 17:57:23'),
(5, 'Peace Lily', 'Air-purifying flowering plant', 18.50, '../media/pl1.png', 25, '2025-09-21 17:57:23'),
(6, 'Spider Plant', 'Easy to grow, great for beginners', 12.75, '../media/pl4-.png', 40, '2025-09-21 17:57:23'),
(7, 'Fiddle Leaf Fig', 'Trendy large-leaf indoor plant', 45.00, '../media/pl7.webp', 15, '2025-09-21 17:57:23'),
(8, 'Aloe Vera', 'Medicinal plant with healing gel', 10.99, '../media/pl8.webp', 50, '2025-09-21 17:57:23'),
(9, 'Pothos', 'Fast-growing vine, perfect for shelves', 13.25, '../media/pl9.webp', 35, '2025-09-21 17:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `plastic`
--

DROP TABLE IF EXISTS `plastic`;
CREATE TABLE IF NOT EXISTS `plastic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plastic`
--

INSERT INTO `plastic` (`id`, `title`, `description`, `price`, `image_url`, `stock`, `created_at`) VALUES
(5, 'Lunch Box', 'Microwave-safe, 1.2L', 11.50, '../media/b2.webp', 45, '2025-09-21 18:14:45'),
(4, 'Reusable Water Bottle', 'BPA-free, 750ml capacity', 14.99, '../media/b1.png', 60, '2025-09-21 18:14:45'),
(6, 'Plastic Storage Bin', 'Stackable, 20L capacity', 24.90, '../media/b3.webp', 30, '2025-09-21 18:14:45'),
(7, 'Portable Cutlery Set', 'Fork, spoon, knife with case', 7.99, '../media/k1.png', 100, '2025-09-21 18:14:45'),
(8, 'Travel Soap Box', 'Compact design, leak-proof', 5.49, '../media/bo2.png', 80, '2025-09-21 18:14:45'),
(10, 'Plastic Organizer Tray', 'Multi-compartment desk organizer', 6.25, '../media/b7.png', 70, '2025-09-21 18:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `stock` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image_url`, `stock`, `created_at`) VALUES
(1, 'T-Shirt\r\n', 'Cotton, short sleeve, unisex\r\n\r\n', 39.99, '../media/t.png', 25, '2025-09-07 19:24:54'),
(2, 'T-Shirt\r\n', 'Cotton, short sleeve, unisex\r\n\r\n', 12.50, '../media/t2.png', 50, '2025-09-07 19:24:54'),
(3, 'T-Shirt', 'Cotton, short sleeve, unisex\r\n\r\n', 18.90, '../media/t3.png', 40, '2025-09-07 19:24:54'),
(4, 'T-Shirt', 'Cotton, short sleeve, unisex', 15.99, '../media/t4-.png', 60, '2025-09-21 17:02:33'),
(5, 'Jeans', 'Slim fit denim, black color', 39.50, '../media/j1.webp', 40, '2025-09-21 17:02:33'),
(6, 'Jacket', 'Waterproof windbreaker', 55.00, '../media/c2.png', 25, '2025-09-21 17:02:33'),
(7, 'Shoes', 'Casual running shoes', 48.90, '../media/s1.webp', 30, '2025-09-21 17:02:33'),
(8, 'Cap', 'Adjustable cotton cap', 12.00, '../media/p1.png', 50, '2025-09-21 17:02:33'),
(9, 'Hoodie', 'Fleece hoodie, comfortable', 29.99, '../media/h2.png', 35, '2025-09-21 17:02:33'),
(10, 'Jeans', 'Slim fit denim, blue color', 39.50, '../media/j2.webp', 40, '2025-09-21 17:28:05'),
(11, 'Jacket', 'Waterproof windbreaker', 55.00, '../media/c1-.png', 25, '2025-09-21 17:28:05'),
(12, 'Shoes', 'Casual running shoes', 48.90, '../media/s3-.png', 30, '2025-09-21 17:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `title`, `description`, `price`, `image_url`, `stock`, `created_at`) VALUES
(1, 'Travel Backpack', '35L cabin size', 39.99, './media/t.png', 25, '2025-09-07 19:24:54'),
(2, 'Neck Pillow', 'Memory foam', 12.50, './media/t.png', 50, '2025-09-07 19:24:54'),
(3, 'Power Adapter', 'Universal', 18.90, './media/t.png', 40, '2025-09-07 19:24:54'),
(4, 'Travel Backpack', '35L cabin size', 39.99, './media/t.png', 25, '2025-09-07 19:24:54'),
(5, 'Neck Pillow', 'Memory foam', 12.50, './media/t.png', 50, '2025-09-07 19:24:54'),
(6, 'Power Adapter', 'Universal', 18.90, './media/t.png', 40, '2025-09-07 19:24:54'),
(7, 'Travel Backpack', '35L cabin size', 39.99, './media/t.png', 25, '2025-09-07 19:24:54'),
(8, 'Neck Pillow', 'Memory foam', 12.50, './media/t.png', 50, '2025-09-07 19:24:54'),
(9, 'Power Adapter', 'Universal', 18.90, './media/t.png', 40, '2025-09-07 19:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `created_at`) VALUES
(1, 'eyad', 'eyad.mansur@yahoo.com', '$2y$10$e52flBh2XEdukJ.1o7zcX.xK6YjMDgbBW0m6swZ95kB7oAjIWfiWS', '2025-08-25 14:14:59'),
(2, 'eyad', 'eyadzzmansur@gmail.com', '$2y$10$hZEluy106.Xs2Q3LJOQnv.2DDeLo.qzy2LKzZtyZ9MSnVCNIfeCDa', '2025-09-07 11:17:20'),
(3, 'eyad', 'eyadzmansur@gmail.com', '$2y$10$HADeHES8omQl2itHlIZweexUvxmS8a1Zxb8vQUKuSGQK0TsNjXuJ.', '2025-09-07 11:34:18'),
(4, 'eyad', 'tx@gmail.com', '$2y$10$htsAzAgMkva0PoDOe4Pjnujjm3RouWCdshnmCD5lDy3nM3lG38gDO', '2025-09-07 19:54:37'),
(5, 'tariq', 'tariq@gmail.com', '$2y$10$bp9mHzKs35bbu4ffuR1hSuzkeghhepFxdf4hOD4W5UBc35ae3/2qm', '2025-09-13 09:24:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
