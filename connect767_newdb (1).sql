-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 07:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connect767_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email_address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_products`
--

CREATE TABLE `custom_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `sleeve_length` varchar(255) DEFAULT NULL,
  `team_logo` varchar(255) DEFAULT NULL,
  `collar_type` varchar(255) DEFAULT NULL,
  `kit` varchar(255) DEFAULT NULL,
  `fit_type` varchar(255) DEFAULT NULL,
  `inside_collar_message` varchar(255) DEFAULT NULL,
  `socks` varchar(255) DEFAULT NULL,
  `collar_text` varchar(255) DEFAULT NULL,
  `socks_color` varchar(255) DEFAULT NULL,
  `goalkeeper_kit` varchar(255) DEFAULT NULL,
  `padded` varchar(255) DEFAULT NULL,
  `goalkeeper_sleeve` varchar(255) DEFAULT NULL,
  `goalkeeper_jersey_design` varchar(255) DEFAULT NULL,
  `jersey_color` varchar(255) DEFAULT NULL,
  `staff_other` varchar(255) DEFAULT NULL,
  `staff_kit` varchar(255) DEFAULT NULL,
  `staff_collar_type` varchar(255) DEFAULT NULL,
  `staff_fit_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_products`
--

INSERT INTO `custom_products` (`id`, `customer_id`, `sleeve_length`, `team_logo`, `collar_type`, `kit`, `fit_type`, `inside_collar_message`, `socks`, `collar_text`, `socks_color`, `goalkeeper_kit`, `padded`, `goalkeeper_sleeve`, `goalkeeper_jersey_design`, `jersey_color`, `staff_other`, `staff_kit`, `staff_collar_type`, `staff_fit_type`, `created_at`, `updated_at`) VALUES
(1, '24', 'long', 'sublimated', 'v-neck', 'full-kit', 'women', 'no', 'yes', NULL, 'blue', 'yes', NULL, 'long-sleeve', 'same', 'yellow', 'yes', 'no', 'vneck', 'loose', '2024-10-25 07:16:02', '2024-10-25 07:16:02'),
(2, '24', 'long', 'sublimated', 'v-neck', 'full-kit', 'women', 'no', 'yes', NULL, 'blue', 'yes', NULL, 'long-sleeve', 'same', 'yellow', 'yes', 'no', 'vneck', 'loose', '2024-10-25 07:24:53', '2024-10-25 07:24:53'),
(3, '24', 'long', 'sublimated', 'v-neck', 'full-kit', 'women', 'no', 'yes', NULL, 'blue', 'yes', NULL, 'long-sleeve', 'same', 'yellow', 'yes', 'no', 'vneck', 'loose', '2024-10-25 08:33:49', '2024-10-25 08:33:49'),
(4, '24', 'long', 'sublimated', 'v-neck', 'full-kit', 'women', 'no', 'yes', NULL, 'blue', 'yes', NULL, 'long-sleeve', 'same', 'yellow', 'yes', 'no', 'vneck', 'loose', '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(5, '24', 'long', 'embroidered', 'v-neck', 'full-kit', 'men', 'yes', 'yes', NULL, 'purple', 'yes', 'Yes', 'short-sleeve', 'same', 'yellow', 'yes', 'yes', 'round', 'slim', '2024-10-25 08:41:00', '2024-10-25 08:41:00'),
(6, '24', 'long', 'embroidered', 'v-neck', 'full-kit', 'men', 'yes', 'yes', NULL, 'purple', 'yes', 'Yes', 'short-sleeve', 'same', 'yellow', 'yes', 'yes', 'round', 'slim', '2024-10-25 08:42:17', '2024-10-25 08:42:17'),
(7, '24', 'long', 'sublimated', 'v-neck', 'full-kit', 'women', 'no', 'yes', NULL, 'blue', 'yes', NULL, 'long-sleeve', 'same', 'yellow', 'yes', 'no', 'vneck', 'loose', '2024-10-25 08:45:23', '2024-10-25 08:45:23'),
(8, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(9, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(10, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(11, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(12, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(13, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(14, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(15, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(16, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(17, '24', 'long', 'embroidered', 'round-neck', 'full-kit', 'men', 'yes', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'no', 'polo-style', 'regular', '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(18, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(19, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(20, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(21, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(22, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(23, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(24, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(25, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(26, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(27, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(28, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(29, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(30, '24', 'short', 'embroidered', 'round-neck', 'shirt-only', 'men', 'no', 'no', NULL, NULL, 'yes', NULL, NULL, 'same', 'yellow', 'yes', 'yes', 'vneck', 'slim', '2024-10-25 11:59:23', '2024-10-25 11:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `custom_products_size_guides`
--

CREATE TABLE `custom_products_size_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `size_guide_name` varchar(255) NOT NULL,
  `size_guide_number` varchar(255) NOT NULL,
  `size_guide_short_size` varchar(255) NOT NULL,
  `size_guide_shirt_size` varchar(255) NOT NULL,
  `size_guide_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_products_size_guides`
--

INSERT INTO `custom_products_size_guides` (`id`, `customer_id`, `size_guide_name`, `size_guide_number`, `size_guide_short_size`, `size_guide_shirt_size`, `size_guide_quantity`, `created_at`, `updated_at`) VALUES
(1, 24, 'Isabella Morton', '2', 'adult-l', 'adult-m', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(2, 24, 'Maile Barron', '3', 'adult-xl', 'youth-m', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(3, 24, 'Forrest Stevenson', '4', 'youth-s', 'adult-l', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(4, 24, 'Delilah Faulkner', '5', 'adult-l', 'youth-m', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(5, 24, 'Duncan Woodard', '6', 'adult-l', 'adult-xl', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(6, 24, 'Leilani Macdonald', '7', 'youth-s', 'adult-s', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(7, 24, 'Yen Conley', '8', 'adult-l', 'adult-xl', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(8, 24, 'Jeanette Vaughan', '9', 'adult-xl', 'youth-l', 2, '2024-10-25 08:35:00', '2024-10-25 08:35:00'),
(17, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(18, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(19, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(20, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(21, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(22, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(23, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(24, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:12:39', '2024-10-25 10:12:39'),
(25, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(26, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(27, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(28, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(29, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(30, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(31, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(32, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:15:15', '2024-10-25 10:15:15'),
(33, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(34, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(35, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(36, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(37, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(38, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(39, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(40, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:18:51', '2024-10-25 10:18:51'),
(41, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(42, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(43, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(44, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(45, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(46, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(47, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(48, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:19:54', '2024-10-25 10:19:54'),
(49, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(50, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(51, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(52, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(53, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(54, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:23:03', '2024-10-25 10:23:03'),
(55, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:23:04', '2024-10-25 10:23:04'),
(56, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:23:04', '2024-10-25 10:23:04'),
(57, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(58, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(59, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(60, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(61, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(62, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(63, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(64, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:23:57', '2024-10-25 10:23:57'),
(65, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(66, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(67, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(68, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(69, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(70, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(71, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(72, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:25:00', '2024-10-25 10:25:00'),
(73, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(74, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(75, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(76, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(77, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(78, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(79, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(80, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:26:28', '2024-10-25 10:26:28'),
(81, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(82, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(83, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(84, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(85, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(86, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(87, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(88, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:29:20', '2024-10-25 10:29:20'),
(89, 24, 'Nina Cleveland', '39', 'adult-l', 'youth-xl', 57, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(90, 24, 'Merritt Ramsey', '40', 'adult-xs', 'youth-xl', 798, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(91, 24, 'Hammett Mcmillan', '827', 'adult-s', 'youth-l', 587, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(92, 24, 'Ruth Pacheco', '653', 'adult-m', 'youth-xs', 776, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(93, 24, 'Josiah Nunez', '681', 'adult-l', 'adult-m', 617, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(94, 24, 'Colorado Boyle', '794', 'youth-xs', 'youth-s', 295, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(95, 24, 'Chancellor Fuller', '860', 'adult-l', 'adult-xl', 874, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(96, 24, 'Nathan Richardson', '957', 'adult-s', 'youth-xs', 832, '2024-10-25 10:32:28', '2024-10-25 10:32:28'),
(97, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(98, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(99, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(100, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(101, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(102, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(103, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(104, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(105, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(106, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(107, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(108, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(109, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(110, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(111, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(112, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:03:27', '2024-10-25 11:03:27'),
(113, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(114, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(115, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(116, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(117, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(118, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(119, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(120, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:03:48', '2024-10-25 11:03:48'),
(121, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(122, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(123, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(124, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(125, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(126, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(127, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(128, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:11:04', '2024-10-25 11:11:04'),
(129, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(130, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(131, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(132, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(133, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(134, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(135, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(136, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:12:00', '2024-10-25 11:12:00'),
(137, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(138, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(139, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(140, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(141, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(142, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(143, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(144, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:16:10', '2024-10-25 11:16:10'),
(145, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(146, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(147, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(148, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(149, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(150, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(151, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(152, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:35:07', '2024-10-25 11:35:07'),
(153, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(154, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(155, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(156, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(157, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(158, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(159, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(160, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:38:22', '2024-10-25 11:38:22'),
(161, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(162, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(163, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(164, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(165, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(166, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(167, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(168, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:42:34', '2024-10-25 11:42:34'),
(169, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(170, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(171, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(172, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(173, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(174, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(175, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(176, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:44:35', '2024-10-25 11:44:35'),
(177, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(178, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(179, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(180, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(181, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(182, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(183, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(184, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:45:27', '2024-10-25 11:45:27'),
(185, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(186, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(187, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(188, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(189, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(190, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(191, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(192, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(193, 24, 'Barclay Carey', '370', 'adult-l', 'adult-s', 496, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(194, 24, 'Shelby Gross', '566', 'adult-xs', 'adult-l', 944, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(195, 24, 'Benjamin Lowe', '859', 'adult-s', 'youth-l', 337, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(196, 24, 'Leah Gray', '263', 'adult-m', 'youth-l', 292, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(197, 24, 'Yolanda Mercado', '946', 'adult-l', 'adult-xl', 168, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(198, 24, 'Miriam Odonnell', '302', 'youth-xs', 'adult-xl', 159, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(199, 24, 'Maris Little', '316', 'adult-l', 'youth-xs', 41, '2024-10-25 11:59:23', '2024-10-25 11:59:23'),
(200, 24, 'Colby Hopper', '810', 'adult-s', 'adult-l', 204, '2024-10-25 11:59:23', '2024-10-25 11:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `custom_products_size_staff`
--

CREATE TABLE `custom_products_size_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `staff_sleeves_length` varchar(255) DEFAULT NULL,
  `staff_pants_length` varchar(255) DEFAULT NULL,
  `staff_shirt_size` varchar(255) DEFAULT NULL,
  `staff_pants_size` varchar(255) DEFAULT NULL,
  `staff_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_products_size_staff`
--

INSERT INTO `custom_products_size_staff` (`id`, `customer_id`, `staff_name`, `staff_sleeves_length`, `staff_pants_length`, `staff_shirt_size`, `staff_pants_size`, `staff_quantity`, `created_at`, `updated_at`) VALUES
(9, 24, 'Kiona Greene', NULL, 'youth-s', 'youth-m', 'adult-s', 553, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(10, 24, 'Ishmael Lucas', NULL, 'youth-xs', 'adult-m', 'adult-m', 80, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(11, 24, 'Linda Ellis', NULL, 'youth-xs', 'youth-m', 'youth-s', 76, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(12, 24, 'Beau Anthony', NULL, 'youth-s', 'adult-s', 'youth-s', 175, '2024-10-25 10:36:13', '2024-10-25 10:36:13'),
(13, 24, 'Kiona Greene', NULL, 'youth-s', 'youth-m', 'adult-s', 553, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(14, 24, 'Ishmael Lucas', NULL, 'youth-xs', 'adult-m', 'adult-m', 80, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(15, 24, 'Linda Ellis', NULL, 'youth-xs', 'youth-m', 'youth-s', 76, '2024-10-25 11:45:45', '2024-10-25 11:45:45'),
(16, 24, 'Beau Anthony', NULL, 'youth-s', 'adult-s', 'youth-s', 175, '2024-10-25 11:45:45', '2024-10-25 11:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `directory_table`
--

CREATE TABLE `directory_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register_table_id` int(11) DEFAULT 0,
  `professional_or_business_name` varchar(255) DEFAULT 'Default Business Name',
  `email` varchar(255) DEFAULT 'default@example.com',
  `cell_number` varchar(20) DEFAULT '0000000000',
  `building_number` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT 'Industry',
  `website` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT 'Country',
  `state` varchar(255) DEFAULT 'State',
  `city` varchar(255) DEFAULT 'City',
  `street_address` varchar(255) DEFAULT 'Street',
  `goods_or_services_provided` text DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directory_table`
--

INSERT INTO `directory_table` (`id`, `register_table_id`, `professional_or_business_name`, `email`, `cell_number`, `building_number`, `industry`, `website`, `education`, `experience`, `country`, `state`, `city`, `street_address`, `goods_or_services_provided`, `profile_picture`, `created_at`, `updated_at`) VALUES
(54, NULL, 'A Lil\' Touch', 'aliltouch@hotmail.com', '7676123719', NULL, 'Cosmetic/Beauty/Barber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(55, NULL, 'Keda cakes and Delights', 'ambarrie50@gmail.com', '17676165464', NULL, 'Food Services/Beverage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(56, NULL, 'PAXIS', 'yourpaxis@gmail.com', NULL, NULL, 'Automotive/Transportation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(57, NULL, 'Calixte Davis', 'calixteid@gmail.com', '17673179443', NULL, 'Construction/Plumbing/Mining', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(58, NULL, 'Aubrey Frederick', 'info@harlemplaza.com', '7676176180', NULL, 'Salon/Spa/Fitness', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(59, NULL, 'Meraki Designs', 'merakidesigns767@gmail.com', '17672765913', NULL, 'Skills/Trade/Craft/Utilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(60, NULL, 'YOUnique Paints', 'stilljay01@gmail.com', '17673150712', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(61, NULL, 'N&N Products', 'n.npunches@gmail.com', '7672451808', NULL, 'Customer Service/Consumer Goods & Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(62, NULL, 'Choice Brick Factory', 'yokho@live.com', NULL, NULL, 'Construction/Plumbing/Mining', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(63, NULL, 'Maxo’s Appliance Repair', 'maxene.cerat@yahoo.com', NULL, NULL, 'Skills/Trade/Craft/Utilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(64, NULL, 'Budgeat', 'info@budgeat.com', '7676144347', NULL, 'Technology/Technical Support/Web', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(65, NULL, 'Taza Electrical', 'fred@tazaelectrical.com', NULL, NULL, 'Skills/Trade/Craft/Utilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(66, NULL, 'Craig', 'cityoutlet31@yahoo.com', '7676166575', NULL, 'Retail/Wholesale/Trade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(67, NULL, 'Robinson & Associates', 'info@robinsonassc.com', '7674408458', NULL, 'Business Administration/Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(68, NULL, 'Revern Bontiff', 'birdeye832@gmail.com', '17676145722', NULL, 'Manufacturing/Industrial Machinery/Gas/Chemicals', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(69, NULL, 'Birdeye custom designs & Prints', 'birdeyes832@gmail.com', '17676145722', NULL, 'Manufacturing/Industrial Machinery/Gas/Chemicals', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(70, NULL, 'Nadja Odi Thomas', 'nadjao.thomas@gmail.com', '17672950869', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(71, NULL, 'Prime Auto Dealer', 'telthm@aol.com', '7185649524', NULL, 'Automotive/Transportation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(72, NULL, 'Kalingo Tours', 'kdangleben@gmail.com', NULL, NULL, 'Hospitality/Tourism/Accommodation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(73, NULL, 'Lamar Construction', 'lamarconstructionlc@icloud.com', NULL, NULL, 'Construction/Plumbing/Mining', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(74, NULL, 'Cashwiz Dominica', 'demo@cashwiz.com', '767-440-5555', NULL, 'Retail/Wholesale/Trade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(75, NULL, 'Mcpherson Florant', 'florant@demo.com', '721-526-3003', NULL, 'Automotive/Transportation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(76, NULL, 'Caramel Sensations', 'demo@demo.com', '767- 245- 4887', NULL, 'Food Services/Beverage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(77, NULL, 'KayDee Graphics', 'demo@demo.com', '9856478965', NULL, 'Graphic Design/Media Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(78, NULL, 'Daniel Pond', 'daniel23nk@gmail.com', NULL, NULL, 'Technology/Technical Support/Web', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(79, NULL, 'Eric Winston', 'knutkase@gmail.com', '176727755177', NULL, 'Human Resource/Marketing/PR/Advertising', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(80, NULL, 'Finance Focus Consultancy', 'lulaurent001@gmail.com', NULL, NULL, 'Accounting/Financial Services/Insurance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(81, NULL, 'MIKEY\'S BUSINESS AND WELDING ENTERPRISES', 'mikeygarage@hotmail.com', '17672454030', NULL, 'Manufacturing/Industrial Machinery/Gas/Chemicals', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(82, NULL, 'Kerrison George', 'kerrisong92@gmail.com', '7673152106', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(83, NULL, 'Darius James', 'anguillamusicacademy@gmail.com', '12644987812', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(84, NULL, 'Calide Abdul winston', 'The_bess_87@hotmail.com', '9856478965', NULL, 'Education/Professional/Scientific', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(85, NULL, 'gremophoto', 'mrcrushiaal@hotmail.com', '7672765575', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(86, NULL, 'Arnold Johnson', 'worldwidespareparts@hotmail.com', '7673156214', NULL, 'Automotive/Transportation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(87, NULL, 'CORISAV INC.', 'info@corisav.com', '7674401200', NULL, 'Architecture/Engineering/Technical Services', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(88, NULL, 'Nadja Odi Thomas', 'nadjao.thomas@gmail.com', '17672950869', NULL, 'TV/Film/Video', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(89, NULL, 'Yuri A Jones', 'yuri@yuriajones.com', NULL, NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44'),
(90, NULL, 'Signal Band', 'signaltheband@gmail.com', '17672778400', NULL, 'Arts/Music/Entertainment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-24 06:35:44', '2024-10-24 06:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_06_123314_create_register_table_table', 2),
(6, '2024_09_07_114842_add_columns_to_register_table', 3),
(7, '2024_09_09_112850_create_directory_table_table', 4),
(8, '2024_09_11_072722_add_street_address_to_directory_table', 5),
(9, '2024_09_12_155232_rename_work_number_to_building_number_in_directory_table', 6),
(10, '2024_09_14_123310_add_register_table_id_to_directory_table', 7),
(11, '2024_09_14_124816_create_admin_table', 8),
(12, '2024_10_25_082151_create_custom_products_table', 9),
(13, '2024_10_25_125519_create_custom_products_size_guides_table', 10),
(14, '2024_10_25_140911_create_custom_products_size_staff_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`id`, `email_address`, `password`, `created_at`, `updated_at`, `first_name`, `last_name`, `display_name`) VALUES
(24, 'zen@gmail.com', '123', '2024-09-27 09:43:59', '2024-09-27 09:43:59', NULL, NULL, NULL),
(25, 'ali@gmail.com', '123', '2024-10-18 05:31:24', '2024-10-18 05:31:24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_address_unique` (`email_address`);

--
-- Indexes for table `custom_products`
--
ALTER TABLE `custom_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_products_size_guides`
--
ALTER TABLE `custom_products_size_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_products_size_staff`
--
ALTER TABLE `custom_products_size_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directory_table`
--
ALTER TABLE `directory_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_table_email_address_unique` (`email_address`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custom_products`
--
ALTER TABLE `custom_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `custom_products_size_guides`
--
ALTER TABLE `custom_products_size_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `custom_products_size_staff`
--
ALTER TABLE `custom_products_size_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `directory_table`
--
ALTER TABLE `directory_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
