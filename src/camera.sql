-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 08:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camera`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `img_src` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `short_description`, `description`, `img_src`, `product_class`, `status`) VALUES
(1, 'CAMERA QUAN SÁT', NULL, NULL, 'images/san_pham/camera.png', 'imgwap mission', 1),
(2, 'BÁO ĐỘNG ', NULL, NULL, 'images/san_pham/alarms.png', 'imgwap product', 1),
(3, 'BỘ ĐÀM – INTERCOM', NULL, NULL, 'images/san_pham/talkie.png', 'imgwap testimonial', 1),
(4, 'BÃI XE THÔNG MINH', NULL, NULL, 'images/san_pham/car.png', 'imgwap statistic', 1),
(5, 'AN NINH SIÊU THỊ', NULL, NULL, 'images/san_pham/market.png', 'imgwap mission', 1),
(6, 'HỆ THỐNG CHUÔNG', NULL, NULL, 'images/san_pham/chuongcua.jpg', 'imgwap product', 1),
(7, 'HỆ THỐNG KIỂM SOÁ', NULL, NULL, 'images/san_pham/lock-door.png', 'imgwap testimonial', 1),
(8, 'THIẾT BỊ ĐIỆN', NULL, NULL, 'images/san_pham/light.png', 'imgwap statistic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `slide_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `description`, `slide_class`, `priority`, `status`) VALUES
(1, 'Slide xxx', 'Aenean diam libero, venenatis eu risus eu, tincidunt porttitor orci. Nulla consequat mi et lectus vehicula condimentum. Nulla ullamcorper dolor vehicula dolor interdum, eget fermentum ligula bibendum.', 'templatemo_banner_slide_01', 3, 1),
(2, 'Slide 2', 'Dragonfruit is one of free HTML5 website templates from templatemo. Donec quam neque, porta at pellentesque at, imperdiet ut velit. Pellentesque luctus ac nunc et hendrerit. Aliquam eu scelerisque eros. Vestibulum scelerisque mi nec augue condimentum rhoncus.', 'templatemo_banner_slide_02', 2, 1),
(3, 'Slide 3', 'Cras fermentum convallis elementum. Praesent sit amet auctor erat, vitae auctor dolor. Sed viverra nunc magna, quis placerat augue pellentesque quis. Sed nec pellentesque dolor. Aenean in lectus enim. Phasellus eu egestas libero. Vivamus ultrices ligula a dapibus lobortis.', 'templatemo_banner_slide_03', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
