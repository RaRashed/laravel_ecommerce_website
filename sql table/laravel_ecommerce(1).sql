-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Easy', 'Clothes Colection', '1606380242.jpg', '2020-10-28 11:18:58', '2020-11-26 02:44:02'),
(2, 'Yellow', 'Clothes Collection', '1606380225.jpg', '2020-10-28 11:19:37', '2020-11-26 02:43:46'),
(5, 'Samsung', 'The Samsung Group is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul. It comprises numerous affiliated businesses, most of them united under the Samsung brand, and is the largest South Korean chaebol', '1606380832.jpg', '2020-11-26 02:53:52', '2020-11-26 02:53:52'),
(6, 'Apex', 'New Collection', '1606385358.jpeg', '2020-11-26 04:09:18', '2020-11-26 04:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(70, 25, 17, 65, '127.0.0.1', 1, '2020-11-26 04:22:34', '2020-11-26 04:34:46'),
(72, 21, 17, 65, '127.0.0.1', 1, '2020-11-26 04:26:10', '2020-11-26 04:34:46'),
(73, 23, 17, 65, '127.0.0.1', 1, '2020-11-26 04:26:19', '2020-11-26 04:34:46'),
(74, 20, 17, 66, '127.0.0.1', 3, '2020-11-26 09:26:53', '2020-12-05 12:09:54'),
(75, 24, 17, 66, '127.0.0.1', 1, '2020-12-05 12:08:58', '2020-12-05 12:09:54'),
(76, 23, 17, 66, '127.0.0.1', 1, '2020-12-05 12:09:00', '2020-12-05 12:09:55'),
(77, 25, 17, 66, '127.0.0.1', 3, '2020-12-05 12:09:02', '2020-12-05 12:09:55'),
(78, 24, 17, 67, '127.0.0.1', 1, '2020-12-05 12:37:41', '2020-12-06 14:21:41'),
(79, 25, 17, 67, '127.0.0.1', 1, '2020-12-06 14:09:06', '2020-12-06 14:21:41'),
(80, 21, 17, 67, '127.0.0.1', 1, '2020-12-06 14:20:23', '2020-12-06 14:21:41'),
(81, 24, 17, NULL, '127.0.0.1', 2, '2020-12-06 23:28:19', '2020-12-06 23:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(32, 'Electronics', 'Various type of electronics product', '1606380415.jpg', NULL, '2020-11-26 02:46:55', '2020-11-26 02:46:55'),
(33, 'Phone', 'Personal Phone', '1606380586.jpg', 32, '2020-11-26 02:49:46', '2020-11-26 02:49:46'),
(34, 'Men Collections', 'Clothing is items worn on the body.', '1606381114.jpg', NULL, '2020-11-26 02:58:34', '2020-11-26 03:27:18'),
(35, 'Panjabi', 'Panjabi is our traditional cloth', '1606381338.jpg', 34, '2020-11-26 03:02:18', '2020-11-26 03:02:18'),
(36, 'Women Collections', 'Here all women products are available', '1606382929.jpg', NULL, '2020-11-26 03:28:49', '2020-11-26 03:28:49'),
(37, 'Kids Collections', 'Here all kind of kids  products are available.', '1606383024.jpeg', NULL, '2020-11-26 03:30:24', '2020-11-26 03:30:24'),
(38, 'T-Shirt', 'man products', '1606383116.jpg', 34, '2020-11-26 03:31:57', '2020-11-26 03:31:57'),
(40, 'Saari', 'Women products', '1606383602.jpg', 36, '2020-11-26 03:40:02', '2020-11-26 03:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rashedul Aziz Rashed', 'rashedvirus00@gmail.com', 'suggestions', 'qwer', '2020-11-06 13:03:06', '2020-11-06 13:03:06'),
(2, 'Rashedul Aziz Rashed', 'rashedvirus00@gmail.com', 'suggestions', 'qwer', '2020-11-06 13:05:51', '2020-11-06 13:05:51'),
(4, 'virus', 'virus@gmail.com', 'service', 'hey bra', '2020-11-06 14:47:22', '2020-11-06 14:47:22'),
(5, 'mahatab', 'mahatab@gmail.com', 'suggestions', 'update website', '2020-11-06 15:13:14', '2020-11-06 15:13:14'),
(6, 'toha', 'toha@gmail.com', 'service', 'hey sexy', '2020-11-06 15:15:01', '2020-11-06 15:15:01'),
(7, 'mahatab', 'mahatab@gmail.com', 'suggestions', 'hey bro', '2020-11-09 23:57:21', '2020-11-09 23:57:21'),
(8, 'eawsrdtyug', 'fxdgchjk@gmail.com', 'suggestions', 'dfhgjkml', '2020-12-06 14:17:19', '2020-12-06 14:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(2, 'Gazipur', 1, '2020-10-31 04:42:41', '2020-10-31 04:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 2, '2020-10-30 14:41:13', '2020-10-30 14:41:13'),
(3, 'CoxsBazar', 2, '2020-10-31 04:28:20', '2020-10-31 04:28:20'),
(4, 'CoxsBazar', 1, '2020-10-31 04:29:12', '2020-10-31 04:29:12'),
(5, 'Chattagram', 2, '2020-11-09 12:56:06', '2020-11-09 12:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_19_165251_create_products_table', 1),
(5, '2020_10_19_194253_create_categories_table', 1),
(6, '2020_10_19_194311_create_brands_table', 1),
(7, '2020_10_19_194340_create_admins_table', 1),
(8, '2020_10_19_200039_create_product_images_table', 1),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2020_10_30_192931_create_districts_table', 4),
(13, '2020_10_30_192948_create_divisions_table', 4),
(15, '2020_10_22_090255_create_carts_table', 6),
(16, '2020_11_01_194144_create_settings_table', 7),
(17, '2020_11_01_204505_create_payments_table', 8),
(18, '2020_10_22_090255_create_orders_table', 9),
(19, '2020_11_06_184204_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT 0,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_charge` int(11) NOT NULL DEFAULT 60,
  `custom_discount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `created_at`, `updated_at`, `shipping_charge`, `custom_discount`) VALUES
(1, 5, 2, NULL, 'rashedul Aziz Rashed1', '01827801715', 'mirpur', 'rashedvirus00@gmail.com', 'send money', 1, 1, 1, NULL, '2020-11-02 12:06:24', '2020-11-02 12:06:24', 60, 0),
(2, 5, 2, NULL, 'rashedul Aziz Rashed1', '01827801715', '123', 'rashedvirus00@gmail.com', '123', 0, 0, 0, '123456', '2020-11-02 12:09:19', '2020-11-02 12:09:19', 60, 0),
(3, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qq', 'rashedvirus00@gmail.com', 'qq', 0, 0, 0, '123456', '2020-11-02 12:11:38', '2020-11-02 12:11:38', 60, 0),
(4, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 0, '11', '2020-11-02 12:23:37', '2020-11-02 12:23:37', 60, 0),
(5, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 0, '11', '2020-11-02 12:24:12', '2020-11-02 12:24:12', 60, 0),
(6, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 0, '123456', '2020-11-02 12:54:20', '2020-11-02 12:54:20', 60, 0),
(7, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '123', 'rashedvirus00@gmail.com', '123', 0, 0, 0, '123', '2020-11-02 12:56:23', '2020-11-02 12:56:23', 60, 0),
(8, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 0, '123', '2020-11-02 13:54:58', '2020-11-02 13:54:58', 60, 0),
(9, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'aaa', 'rashedvirus00@gmail.com', 'aa', 0, 0, 0, '123', '2020-11-02 23:22:15', '2020-11-02 23:22:15', 60, 0),
(10, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '123', 0, 0, 0, '123456', '2020-11-02 23:29:54', '2020-11-02 23:29:54', 60, 0),
(11, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'coxsBAzar', 'rashedvirus00@gmail.com', 'send me', 0, 0, 0, '66586', '2020-11-02 23:31:47', '2020-11-02 23:31:47', 60, 0),
(12, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'chakaria', 'rashedvirus00@gmail.com', 'send me', 0, 0, 0, '665866', '2020-11-02 23:33:44', '2020-11-02 23:33:44', 60, 0),
(13, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'qqq', 1, 1, 1, '1232345678', '2020-11-02 23:43:10', '2020-11-03 14:35:47', 60, 0),
(16, 9, 7, '127.0.0.1', 'rashed aziz', '123456', '123', 'ra@gmail.com', '123', 1, 1, 0, '66586', '2020-11-03 05:23:19', '2020-11-03 14:34:15', 60, 0),
(17, 5, 2, '127.0.0.1', 'Rashedul Aziz Rashed', '01827801715', 'test', 'rashedvirus00@gmail.com', 'hey sexy', 1, 1, 1, '1234567890', '2020-11-03 13:47:24', '2020-11-03 14:36:14', 60, 0),
(18, 5, 7, '127.0.0.1', 'hey', '01827801715', 'no', 'rashedvirus00@gmail.com', 'nnn', 0, 0, 1, '54321', '2020-11-03 14:37:17', '2020-11-03 14:38:11', 60, 0),
(19, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '1111', 0, 0, 1, '123456', '2020-11-04 10:16:11', '2020-11-04 10:16:59', 60, 0),
(20, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '1', 1, 1, 1, '1232345678', '2020-11-04 10:17:37', '2020-11-04 10:18:16', 60, 0),
(21, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'qqq', 0, 0, 1, '63', '2020-11-04 10:18:56', '2020-11-04 10:19:08', 60, 0),
(22, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 1, NULL, '2020-11-04 10:39:24', '2020-11-04 10:40:07', 60, 0),
(23, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 1, '12', '2020-11-04 10:41:05', '2020-11-04 10:41:27', 60, 0),
(24, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'df', 'rashedvirus00@gmail.com', 'ww', 0, 0, 1, '11111111111111111', '2020-11-04 11:32:22', '2020-11-05 12:57:39', 60, 10),
(25, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1111111111111111111111111', 0, 0, 1, '11111111111111111111', '2020-11-04 11:33:15', '2020-11-04 12:45:32', 60, 10),
(26, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '111', 0, 0, 1, '123456', '2020-11-06 07:16:05', '2020-11-06 08:49:35', 60, 0),
(27, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '111111111111', 'rashedvirus00@gmail.com', '111111111', 0, 0, 1, 'dd', '2020-11-06 08:48:16', '2020-11-06 08:49:25', 60, 0),
(28, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'dd', 'rashedvirus00@gmail.com', 'dd', 0, 0, 1, 'dd', '2020-11-06 08:48:40', '2020-11-06 08:49:11', 60, 0),
(29, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'ff', 'rashedvirus00@gmail.com', 'dd', 0, 0, 1, 'kk', '2020-11-06 08:50:41', '2020-11-06 08:54:30', 60, 30),
(30, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'q', 0, 0, 0, 'qq', '2020-11-06 09:23:36', '2020-11-06 09:23:36', 60, 0),
(31, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'a', 'rashedvirus00@gmail.com', 'a', 0, 0, 0, 'aa', '2020-11-06 09:26:56', '2020-11-06 09:26:56', 60, 0),
(32, 5, 7, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'n', 'rashedvirus00@gmail.com', 'f', 0, 0, 0, 'g', '2020-11-06 09:33:30', '2020-11-06 09:33:30', 60, 0),
(33, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'q', 0, 0, 0, NULL, '2020-11-06 09:35:45', '2020-11-06 09:35:45', 60, 0),
(34, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'a', 'rashedvirus00@gmail.com', 'a', 0, 0, 0, 'aa', '2020-11-06 09:36:28', '2020-11-06 09:36:28', 60, 0),
(35, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'v', 'rashedvirus00@gmail.com', 'd', 0, 0, 0, NULL, '2020-11-06 09:37:15', '2020-11-06 09:37:15', 60, 0),
(36, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'q', 0, 0, 0, 's', '2020-11-06 09:38:16', '2020-11-06 09:38:16', 60, 0),
(37, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qqq', 'rashedvirus00@gmail.com', 'q', 0, 0, 0, 'q', '2020-11-06 09:39:59', '2020-11-06 09:39:59', 60, 0),
(38, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'gg', 'rashedvirus00@gmail.com', 'ff', 0, 0, 0, '11111111111111111', '2020-11-06 09:40:41', '2020-11-06 09:40:41', 60, 0),
(39, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'f', 'rashedvirus00@gmail.com', 'a', 0, 0, 0, 'h', '2020-11-06 09:49:57', '2020-11-06 09:49:57', 60, 0),
(40, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'a', 'rashedvirus00@gmail.com', 'a', 0, 0, 1, NULL, '2020-11-06 09:59:32', '2020-11-06 10:03:59', 60, 0),
(41, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'qq', 'rashedvirus00@gmail.com', 'q', 0, 0, 1, NULL, '2020-11-06 10:03:43', '2020-11-06 10:04:03', 60, 0),
(43, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, '123', '2020-11-06 10:23:15', '2020-11-06 10:23:15', 60, 0),
(44, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 10:36:25', '2020-11-06 10:36:25', 60, 0),
(45, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 10:37:16', '2020-11-06 10:37:16', 60, 0),
(46, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, '123', '2020-11-06 10:37:55', '2020-11-06 10:37:55', 60, 0),
(47, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 10:40:37', '2020-11-06 10:40:37', 60, 0),
(48, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 10:42:01', '2020-11-06 10:42:01', 60, 0),
(49, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 10:43:53', '2020-11-06 10:43:53', 60, 0),
(50, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '1111111111111111111111', 'rashedvirus00@gmail.com', '1', 0, 0, 1, NULL, '2020-11-06 10:44:42', '2020-11-07 06:02:58', 60, 0),
(51, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '1', 0, 0, 0, NULL, '2020-11-06 11:04:01', '2020-11-06 11:04:01', 60, 0),
(52, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'mirpur2', 'rashedvirus00@gmail.com', 'hey sexy bro', 0, 0, 1, NULL, '2020-11-07 06:01:25', '2020-11-07 06:02:47', 60, 0),
(53, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '123', 'rashedvirus00@gmail.com', '123', 0, 0, 1, '123', '2020-11-07 06:02:18', '2020-11-07 06:02:33', 60, 0),
(54, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '111111111111111', 'rashedvirus00@gmail.com', '11111111111111', 0, 0, 1, NULL, '2020-11-07 06:03:29', '2020-11-07 06:03:37', 60, 0),
(55, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', '11', 'rashedvirus00@gmail.com', '11', 0, 0, 0, NULL, '2020-11-07 06:19:03', '2020-11-07 06:19:03', 60, 0),
(56, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'chattagram', 'rashedvirus00@gmail.com', 'satkaniya', 0, 0, 1, '1234', '2020-11-07 06:21:33', '2020-11-07 06:21:48', 60, 0),
(57, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'dd', 'rashedvirus00@gmail.com', 'rashed', 0, 0, 0, NULL, '2020-11-07 06:22:51', '2020-11-07 06:22:51', 60, 0),
(58, 5, 1, '127.0.0.1', 'toha', '01621796596', 'mirpur2', 'toha@gmail.com', 'mirpur', 1, 1, 1, NULL, '2020-11-07 12:55:04', '2020-11-07 12:58:45', 60, 10),
(59, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'mirpur', 'rashedvirus00@gmail.com', 'abba', 0, 0, 0, NULL, '2020-11-08 23:04:43', '2020-11-08 23:04:43', 60, 0),
(60, 5, 1, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'aaa', 'rashedvirus00@gmail.com', 'fff', 0, 0, 0, NULL, '2020-11-09 13:01:59', '2020-11-09 13:01:59', 60, 0),
(61, 5, 2, '127.0.0.1', 'Rashedul Aziz Rashed', '01827801715', 'mirpur', 'rashedvirus00@gmail.com', 'qw', 0, 0, 1, '123', '2020-11-09 23:59:46', '2020-11-10 00:00:42', 60, 10),
(62, 12, 2, '127.0.0.1', 'Mahatab Bhuiyan', '01835547869', '1234', 'mahatab96@gmail.com', '123', 0, 0, 1, '4321', '2020-11-10 00:05:00', '2020-11-10 00:05:42', 60, 10),
(63, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'mirpur2', 'rashedvirus00@gmail.com', 'emergency', 1, 1, 1, '1234567890', '2020-11-18 12:23:30', '2020-11-18 12:24:44', 60, 40),
(64, 5, 2, '127.0.0.1', 'rashedul Aziz Rashed1', '01827801715', 'dgfcvj', 'rashedvirus00@gmail.com', 'dfhgj', 0, 0, 1, '23543', '2020-11-22 11:52:42', '2020-11-22 11:53:06', 60, 0),
(65, 17, 2, '127.0.0.1', 'Rashedul Aziz Rashed', '01827801716', 'mirpur2', 'rnrashedrn@gmail.com', '1234567', 0, 0, 1, '123456', '2020-11-26 04:34:45', '2020-11-26 04:47:46', 60, 0),
(66, 17, 1, '127.0.0.1', 'Rashedul Aziz Rashed', '01827801716', '13rawr', 'rnrashedrn@gmail.com', '132rwge', 0, 0, 0, NULL, '2020-12-05 12:09:54', '2020-12-05 12:09:54', 60, 0),
(67, 17, 2, '127.0.0.1', 'Rashedul Aziz Rashed', '01827801716', 'cvghjbklm', 'rnrashedrn@gmail.com', 'wesrdtygu', 0, 0, 1, '1234567890', '2020-12-06 14:21:41', '2020-12-06 14:22:04', 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rnrashedrn@gmail.com', '$2y$10$CFJuFTj2mJmdeAGELKGCUusxoKsqSRQCL.aJvBLAV/sepvuqgkuZi', '2020-10-30 11:58:05'),
('rashedvirus00@gmail.com', '$2y$10$Zk/BGJLcyilRMZJl5QFDzuSX0.rky09vKhRO.dPYIT0bF3cF6woau', '2020-10-30 12:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 1,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cash In', 'cash.jpg', 1, 'rocket', NULL, NULL, NULL, NULL),
(2, 'Bkash', 'bkash.jpg', 2, 'bkash', '01827801715', '12345678', '2020-11-02 16:10:24', '2020-11-02 16:09:32'),
(7, 'Nagad', 'rocket.jpg', 3, 'nagad', '01827801715', 'personal', '2020-11-01 20:57:24', '2020-11-01 20:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(20, 33, 5, 'Samsung Galaxy', 'The Samsung Group is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul. It comprises numerous affiliated businesses, most of them united under the Samsung brand, and is the largest South Korean chaebol', 'Samsung Galaxy', 15, 40000, 0, NULL, 1, '2020-11-26 02:54:35', '2020-11-26 02:54:35'),
(21, 35, 1, 'Panjabi', 'Panjabi Is our Traditional cloth', 'Panjabi', 20, 1000, 0, NULL, 1, '2020-11-26 03:01:00', '2020-11-26 03:03:09'),
(23, 40, 2, 'Jamdani Saari', 'traditional Cloth of women.', 'Jamdani Saari', 30, 4000, 0, NULL, 1, '2020-11-26 03:41:37', '2020-11-26 03:41:37'),
(24, 38, 2, 'T-shirt', 'Men Collections', 'T-shirt', 40, 350, 0, NULL, 1, '2020-11-26 04:06:44', '2020-11-26 04:06:44'),
(25, 37, 6, 'Apex Shoes', 'Kids collections', 'Apex Shoes', 30, 999, 0, NULL, 1, '2020-11-26 04:10:34', '2020-11-26 04:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1603361321.png', '2020-10-22 04:08:41', '2020-10-22 04:08:41'),
(2, 1, '1603559445.png', '2020-10-24 11:10:46', '2020-10-24 11:10:46'),
(3, 2, '1603559486.png', '2020-10-24 11:11:27', '2020-10-24 11:11:27'),
(4, 6, '1603742842.png', '2020-10-26 14:07:22', '2020-10-26 14:07:22'),
(5, 7, '1603777295.png', '2020-10-26 23:41:35', '2020-10-26 23:41:35'),
(6, 8, '1603817328.png', '2020-10-27 10:48:49', '2020-10-27 10:48:49'),
(7, 9, '1603818268.png', '2020-10-27 11:04:29', '2020-10-27 11:04:29'),
(8, 12, '1603876706.png', '2020-10-28 03:18:27', '2020-10-28 03:18:27'),
(9, 13, '1603882292.png', '2020-10-28 04:51:32', '2020-10-28 04:51:32'),
(10, 13, '1603882293.png', '2020-10-28 04:51:33', '2020-10-28 04:51:33'),
(11, 13, '1603882293.png', '2020-10-28 04:51:33', '2020-10-28 04:51:33'),
(12, 14, '1603882926.png', '2020-10-28 05:02:06', '2020-10-28 05:02:06'),
(13, 14, '1603882926.png', '2020-10-28 05:02:06', '2020-10-28 05:02:06'),
(14, 14, '1603882926.png', '2020-10-28 05:02:07', '2020-10-28 05:02:07'),
(15, 15, '1603882994.png', '2020-10-28 05:03:14', '2020-10-28 05:03:14'),
(16, 15, '1603882994.png', '2020-10-28 05:03:15', '2020-10-28 05:03:15'),
(17, 15, '1603882995.png', '2020-10-28 05:03:15', '2020-10-28 05:03:15'),
(18, 16, '1603908727.png', '2020-10-28 12:12:07', '2020-10-28 12:12:07'),
(19, 16, '1603908728.png', '2020-10-28 12:12:08', '2020-10-28 12:12:08'),
(20, 16, '1603908728.png', '2020-10-28 12:12:08', '2020-10-28 12:12:08'),
(21, 17, '1603909741.png', '2020-10-28 12:29:01', '2020-10-28 12:29:01'),
(22, 17, '1603909741.png', '2020-10-28 12:29:01', '2020-10-28 12:29:01'),
(23, 17, '1603909741.png', '2020-10-28 12:29:02', '2020-10-28 12:29:02'),
(24, 18, '1603918839.png', '2020-10-28 15:00:40', '2020-10-28 15:00:40'),
(25, 18, '1603918840.png', '2020-10-28 15:00:41', '2020-10-28 15:00:41'),
(26, 18, '1603918841.png', '2020-10-28 15:00:41', '2020-10-28 15:00:41'),
(27, 19, '1603923813.png', '2020-10-28 16:23:33', '2020-10-28 16:23:33'),
(28, 20, '1606380875.jpg', '2020-11-26 02:54:35', '2020-11-26 02:54:35'),
(29, 20, '1606380876.jpg', '2020-11-26 02:54:36', '2020-11-26 02:54:36'),
(30, 20, '1606380876.jpg', '2020-11-26 02:54:36', '2020-11-26 02:54:36'),
(31, 21, '1606381260.jpg', '2020-11-26 03:01:00', '2020-11-26 03:01:00'),
(32, 21, '1606381261.jpg', '2020-11-26 03:01:01', '2020-11-26 03:01:01'),
(33, 21, '1606381261.jpg', '2020-11-26 03:01:01', '2020-11-26 03:01:01'),
(34, 22, '1606383369.jpg', '2020-11-26 03:36:09', '2020-11-26 03:36:09'),
(35, 22, '1606383369.jpg', '2020-11-26 03:36:09', '2020-11-26 03:36:09'),
(36, 22, '1606383369.jpg', '2020-11-26 03:36:09', '2020-11-26 03:36:09'),
(37, 23, '1606383697.jpg', '2020-11-26 03:41:37', '2020-11-26 03:41:37'),
(38, 23, '1606383697.jpg', '2020-11-26 03:41:37', '2020-11-26 03:41:37'),
(39, 23, '1606383697.jpg', '2020-11-26 03:41:37', '2020-11-26 03:41:37'),
(40, 24, '1606385204.jpg', '2020-11-26 04:06:44', '2020-11-26 04:06:44'),
(41, 24, '1606385204.jpg', '2020-11-26 04:06:44', '2020-11-26 04:06:44'),
(42, 25, '1606385434.jpeg', '2020-11-26 04:10:34', '2020-11-26 04:10:34'),
(43, 25, '1606385434.jpeg', '2020-11-26 04:10:34', '2020-11-26 04:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division Table ID',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'District Table ID',
  `status` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive|1=Active|2=Ban',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone_no`, `email`, `password`, `street_address`, `division_id`, `district_id`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'rashedul Aziz', 'Rashed1', 'Rashed1', '01827801715', 'rashedvirus00@gmail.com', '$2y$10$N7LL3lbwph4efjHcETuboeVuo0.tis3z7XEaPCMradpxp9EZ16Ltm', 'mirpur2', 4, 2, 0, '127.0.0.1', NULL, NULL, NULL, '2020-10-31 05:35:44', '2020-10-31 05:35:44'),
(6, 'rashed', 'aziz', 'aziz', '12345', 'rashedul@gmail.com', '$2y$10$l4OH33BcFnUfpPTQleQ4.upjHM6rGxR0VczLMgg5ewHAaD/8mBKie', 'mirpur', 4, 2, 0, '127.0.0.1', NULL, NULL, NULL, '2020-10-31 05:37:48', '2020-10-31 05:37:48'),
(9, 'rashed', 'aziz', 'aziz1', '123456', 'ra@gmail.com', '$2y$10$Hy.ZGaACzKYEtvacGM3qR.k8E47/fLvgrUCEbUGQgKL4m9jfVwYyS', 'mirpur1', 4, 2, 0, '127.0.0.1', NULL, NULL, NULL, '2020-10-31 05:44:35', '2020-10-31 05:44:35'),
(12, 'Mahatab Bhuiyan', 'Mahatab', 'Mahatab', '01835547869', 'mahatab96@gmail.com', '$2y$10$3RrJPotRdUTOvN0.P6eXIuUKnuVz16/vGdVkJAob9vHW9zm9PR9ly', 'mirpur 6', 1, 2, 0, '127.0.0.1', NULL, NULL, NULL, '2020-11-10 00:03:26', '2020-11-10 00:03:26'),
(17, 'Rashedul Aziz', 'Rashed', 'Rashed', '01827801716', 'rnrashedrn@gmail.com', '$2y$10$OroOLUNKzTr16Yyw0IrzL.R0yO7aGVxaXQLAJ135j80V2B0TV/RY6', 'mirpur 1', 1, 2, 0, '127.0.0.1', NULL, NULL, NULL, '2020-11-26 04:20:34', '2020-11-26 04:20:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
