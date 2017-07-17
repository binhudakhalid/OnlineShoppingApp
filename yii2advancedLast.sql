-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 05:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `slug`) VALUES
(1, NULL, 'Electronics', 'electronics'),
(2, NULL, 'book', 'book'),
(3, NULL, 'Cloths', 'cloths');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1492718299),
('m130524_201442_init', 1492718303),
('m140709_173333_widget_text', 1496155484);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `phone`, `address`, `email`, `notes`, `status`) VALUES
(1, 1496169030, 1496169030, 'khalid', NULL, 'khalid@aerzd.com', 'asdfa', 'New'),
(2, 1496178836, 1496178836, '02134503965', NULL, 'khalid.bin.huda@hotmail.com', 'the order', 'New'),
(3, 1496179663, 1496179663, 'asda', NULL, 'khalid.bin.huda@hotmail.com', 'asd', 'New'),
(4, 1496179688, 1496179688, 'sdas', NULL, 'asdasd@gmail.com', 'sdf', 'New'),
(5, 1496179726, 1496179726, '4', NULL, 'w@gmail.com', 'ed', 'New'),
(6, 1496246863, 1496246863, '554854', NULL, 'khalid@aerzd.com', 'asdasd', 'New'),
(7, 1496247015, 1496247015, 'asd', NULL, 'sdasd@gmail.com', 'asd', 'New'),
(8, 1497555504, 1497555504, '5126', NULL, 'ka@f.conm', 'asd', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `title`, `price`, `product_id`, `quantity`) VALUES
(1, 1, '3', '41.0000', 1, 3),
(2, 2, 'Matric Books', '500.0000', 3, 3),
(3, 2, 'sskhalid', '55.0000', 5, 3),
(4, 2, 'THE BALL', '8789.0000', 7, 2),
(5, 3, 'asdas', '948646.0000', 21, 1),
(6, 6, 'Matric Books', '500.0000', 3, 2),
(7, 7, '3889', '888.0000', 1, 5),
(8, 8, 'Matric Books', '500.0000', 3, 3),
(9, 8, 'the product', '455.0000', 2, 2),
(10, 8, '3889', '888.0000', 1, 2),
(11, 8, 'THE BALL', '8789.0000', 7, 2),
(12, 8, '34', '8555.0000', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(19,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `description`, `category_id`, `picture`, `price`) VALUES
(1, 'Easy Polo Non', '3889', 'The USA Designed', 1, 'product1.jpg', '888.0000'),
(2, 'Mark Pol', 'the-product', 'Easy Polo Black Edition', 1, 'product2.jpg', '455.0000'),
(3, 'Matric Books', 'matric-books', 'the book ', 2, 'books.jpg', '500.0000'),
(4, '34', '34', '34', 1, 'product2.jpg', '8555.0000'),
(5, 'sskhalid', 'sskhalid', 'k', 2, 'books.jpg', '55.0000'),
(6, 'THE bALL', 'the-ball', 'BALL OG C', 2, 'books.jpg', '888.0000'),
(7, 'THE BALL', 'the-ball', 'ASDA', 2, 'books.jpg', '8789.0000'),
(8, 'ASDs', 'asds', 'kjbnjkb', 1, 'product2.jpg', '78.0000'),
(9, 'asd', 'asd', 'asdfa', 1, 'product2.jpg', '44.0000'),
(10, 'ali', 'ali', 'asd', 2, 'books.jpg', '888.0000'),
(11, 'asd', 'asd', 'mhbjh', 2, 'books.jpg', '458.0000'),
(12, 'asd', 'asd', 'mhbjh', 2, 'books.jpg', '458.0000'),
(13, 'j', 'j', 'j', 1, 'product2.jpg', '77.0000'),
(14, 'ek', 'ek', 'k', 2, 'books.jpg', '7.0000'),
(15, 'asd', 'asd', 'jnj', 1, 'product2.jpg', '855.0000'),
(16, 'aplh', 'aplh', 'aplk', 1, 'product2.jpg', '10000.0000'),
(17, '1', '1', '1', 2, 'books.jpg', '89.0000'),
(18, '1', '1', '1', 1, 'product2.jpg', '78.0000'),
(19, '1', '1', '1', 1, 'product2.jpg', '78.0000'),
(20, 'wawa', 'wawa', 'wawa', 1, 'product2.jpg', '454.0000'),
(21, 'asdas', 'asdas', 'adfasdf', 1, 'product2.jpg', '948646.0000'),
(22, 'asda', 'asda', 'asda', 2, 'books.jpg', '545.0000'),
(23, 'asd', 'asd', 'adfa', 1, 'product2.jpg', '959.0000'),
(24, 'asd', 'asd', 'kjn', 2, 'books.jpg', '53.0000'),
(25, 'asd', 'asd', 'kjn', 2, 'books.jpg', '53.0000'),
(26, 'b', 'b', 'b', 1, 'product2.jpg', '6594.0000'),
(27, 'b', 'b', 'b', 1, 'product2.jpg', '564.0000'),
(28, 'asd', 'asd', 'asd', 2, 'books.jpg', '42142.0000'),
(29, 'asd', 'asd', 'asdfa', 2, 'books.jpg', '45.0000'),
(30, 'asd', 'asd', 'lknkl', 1, 'product2.jpg', '445.0000'),
(31, 'asd', 'asd', 'm,bj', 2, 'books.jpg', '45561.0000'),
(32, 'lbn', 'lbn', 'jln', 1, 'product2.jpg', '5.0000'),
(33, 'asd', 'asd', 'nn', 1, 'product2.jpg', '44.0000'),
(34, 'asd', 'asd', '.kn', 1, 'product2.jpg', '55.0000'),
(35, 'edi', 'edi', 'eid', 2, 'books.jpg', '5.0000'),
(36, 's', 's', 'oj', 2, 'books.jpg', '55.0000'),
(37, 'Easy Polo Black Edition', 'easy-polo-black-edition', 'The best Product', 3, 'product2.jpg', '90000.0000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'khalid', 'qLdYa6yXUPLDjKFZ65dNjdSTK2vcbwqG', '$2y$13$g97q3QvJtmM6nlcvtSBLQOq0VKnCS27IbsFEmAObExyc291kYmuam', NULL, 'khalid.bin.huda@hotmail.com', 10, 1492718505, 1492718505),
(2, 'root', '1QyONz6o1XsKivoeD1gzaOr4AAEQHXEe', '$2y$13$bTxz.EY.nJwoIzLSk08GReNI6pI2kX/2A0q3TFS9Ze2tionAwP9kW', NULL, 'root@root.com', 10, 1493307952, 1493307952),
(3, 'abcde', 'yFSNgKbfzzNlcjqqyOmu2-XJogsvuf4O', '$2y$13$gVd7S80irtBPnxdAivn/J.agsLu2folmwX0U3vpS7nDifJxnHcIYK', NULL, 'abcde@mal.com', 10, 1496146591, 1496146591),
(4, 'abcdef', 'edWyZ1vilgVFpwm0DJCimNQIuBrRDOj4', '$2y$13$cSnQ.GoKvNkwZ2Uv.ECZ3uzz6plNINXPprj2Z.ZWdDpj0aN6AMMHe', NULL, 'abcdes@mal.com', 10, 1496157946, 1496157946);

-- --------------------------------------------------------

--
-- Table structure for table `widget_text`
--

CREATE TABLE `widget_text` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-category-parent_id-category-id` (`parent_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-image-product_id-product_id` (`product_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-order_item-order_id-order-id` (`order_id`),
  ADD KEY `fk-order_item-product_id-product-id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-product-category_id-category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `widget_text`
--
ALTER TABLE `widget_text`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_widget_text_key` (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `widget_text`
--
ALTER TABLE `widget_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk-category-parent_id-category-id` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk-image-product_id-product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk-order_item-order_id-order-id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-order_item-product_id-product-id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk-product-category_id-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
