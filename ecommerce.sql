-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 11:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `is_delete`, `created_at`, `updated_at`, `created_by`, `id`) VALUES
('Gucci', 'guccis', 'slugs', 'gucci', 'gucci', 0, 0, '2023-12-13 15:43:24', '2023-12-13 15:53:05', 1, 1),
('demos', 'sd', 'fd', 'f', 'f', 0, 1, '2023-12-13 15:53:27', '2023-12-13 15:53:32', 1, 2),
('Supreme', 'supreme', 'supreme items', '', 'supreme itesm', 0, 0, '2023-12-17 00:17:03', '2023-12-17 00:17:03', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'cloth', 'clothes-market', 'clothigs', 'awesome outfits i kampala city', 'cloths', 1, 0, 0, '2023-12-12 13:08:14', '2023-12-12 13:53:06'),
(2, 'Babies', 'baby', 'baby stuff', 'baby', 'babe', 1, 0, 0, '2023-12-12 13:55:33', '2024-02-06 17:57:11'),
(3, 'Shoes', 'shoes-sneakers', 'Power shoes', 'Stylish sneakers with a comfortable fit, available for both men and women.', 'shoes', 1, 0, 0, '2023-12-13 12:08:15', '2024-02-17 21:52:32'),
(4, 'Sandals', 'Sandals', 'Perfect Sandals', 'Waterproof sandals perfect for beach outings, available in multiple sizes.', 'Sandals', 1, 0, 0, '2023-12-13 12:08:15', '2024-02-17 20:13:05'),
(5, 'Sharia', 'cover-up', 'Sharia', '', 'sh', 1, 0, 0, '2023-12-16 21:57:59', '2023-12-16 21:57:59'),
(6, 'Bags', 'Bags', 'Bags', 'These are used to store items', 'bags', 1, 0, 0, '2024-02-03 17:22:15', '2024-02-03 17:23:15'),
(7, 'Islamic Women\'s Clothing', 'islamic-womens-clothing', 'Muslima Women\'s Clothings', 'High-quality hijabs made from breathable fabric, various colors and designs available.', 'Muslima', 1, 0, 0, '2024-02-17 20:15:07', '2024-02-17 20:15:07'),
(8, 'Kanzuz (Men\'s Islamic Clothing)', 'kanzuz', 'kanzuz', 'Traditional thobes made from premium quality fabric, suitable for formal occasions.', 'kanzuz', 1, 0, 0, '2024-02-17 20:16:08', '2024-02-17 20:16:08'),
(9, 'Watches', 'watches', 'Watch', 'Timeless classic watches for everyday wear.', 'watch whist', 1, 0, 0, '2024-02-17 20:50:06', '2024-02-17 20:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `name` varchar(200) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`name`, `code`, `status`, `is_delete`, `created_at`, `updated_at`, `created_by`, `id`) VALUES
('black', '#000000', 0, 0, '2023-12-13 16:54:06', '2023-12-13 16:54:06', 1, 1),
('Yellow', '#ffff00', 0, 0, '2023-12-13 16:54:49', '2023-12-13 17:02:02', 1, 2),
('8', '#000000', 0, 1, '2023-12-13 17:03:02', '2023-12-13 17:03:06', 1, 3),
('Blue', '#0080ff', 0, 0, '2024-02-03 16:41:48', '2024-02-03 16:41:48', 1, 4);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `old_price` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:Inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not Deleted, 1: deleted',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `shipping_returns` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `sku`, `category_id`, `sub_category_id`, `brand_id`, `old_price`, `price`, `short_description`, `description`, `additional_information`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`, `shipping_returns`) VALUES
(1, 'Mocasine', 'mocasine-1', 'i', 3, 4, 1, 23, 20, '<p>e<br></p>', '<p>e<br></p>', '<p>dd<br></p>', 0, 0, 1, '2023-12-13 15:02:43', '2023-12-14 09:39:57', '<p>fd<br></p>'),
(2, 'Bata Shoe', 'bata-shoe-2', '1', 3, 3, 1, 30, 40, 'kkj', 'kkj', 'opp', 0, 0, 1, '2023-12-16 23:45:16', '2024-02-17 15:41:40', 'kl'),
(3, 'Air Jordan', 'air-jordan-3', 'jor', 3, 3, 3, 12, 21, 'pp', 'pp', 'kl', 0, 0, 1, '2023-12-17 00:15:43', '2024-02-03 16:09:04', 'kl'),
(4, 'Women\'s Bag', 'womens-bag-4', '122', 6, 8, 1, 12000, 45000, 'This is a very nice bag <br>', 'It is made of coton and wool<br>', 'its reliable and water proof<br>', 0, 0, 1, '2024-02-03 17:26:09', '2024-02-03 17:28:06', 'You can return it within one week ad get back your money<br>'),
(5, 'Coat', 'coat-5', '21', 1, 1, 3, 12000, 45000, '', '', '', 0, 0, 1, '2024-02-06 17:46:47', '2024-02-06 17:47:34', ''),
(6, 'Black Trouser', 'black-trouser-6', '3', 1, 1, 1, 23000, 1222, '', '', '', 0, 0, 1, '2024-02-06 17:48:00', '2024-02-06 17:48:41', ''),
(7, 'gama', 'gama-7', 'gama', 3, 3, 1, 12, 45, 'iu', 'lk', 'kj', 0, 0, 1, '2024-02-17 15:25:27', '2024-02-17 15:26:51', 'l'),
(8, 'Men\'s Cotton Polo Shirt', 'a-8', 'POLO001', 1, 1, 1, 28.99, 29.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Classic polo shirt made from soft cotton fabric.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">This men\'s cotton polo shirt features a classic design with a comfortable fit, perfect for casual wear. Made from high-quality cotton material, it offers breathability and durability.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Available in multiple colors. Machine washable.</span>', 0, 0, 1, '2024-02-17 20:23:16', '2024-02-17 20:31:17', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Free shipping on orders over $50. 30-day return policy.</span>'),
(9, 'Women\'s Leather Ankle Boots', 'womens-leather-ankle-boots-9', 'BOOTS002', 3, 13, 3, 80.99, 79.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Stylish ankle boots made from genuine leather.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Elevate your style with these women\'s leather ankle boots. Crafted from genuine leather, these boots feature a sleek design with a comfortable heel height, perfect for day-to-night wear.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Available in black and brown. Side zipper closure for easy on/off.</span>', 0, 0, 1, '2024-02-17 20:32:08', '2024-02-17 20:35:15', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Standard shipping rates apply. 14-day return policy.</span>'),
(10, 'Women\'s Quilted Crossbody Bag', 'womens-quilted-crossbody-bag-10', 'BAG010', 6, 8, 1, 55.99, 49.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Stylish quilted crossbody bag for everyday use.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Keep your essentials close at hand with this women\'s quilted crossbody bag. Featuring a quilted design and a chain strap, it adds a touch of sophistication to any outfit. Perfect for running errands or a night out.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Interior zip pocket. Magnetic snap closure.</span>', 0, 0, 1, '2024-02-17 20:38:57', '2024-02-17 20:41:32', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Standard shipping rates apply. 30-day return policy.</span>'),
(11, 'Men\'s Athletic Shorts', 'mens-athletic-shorts-11', 'SHORTS011', 1, 14, 1, 26.99, 24.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Lightweight athletic shorts for active days.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Lightweight athletic shorts for active days.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Quick-drying material. Side pockets.</span>', 0, 0, 1, '2024-02-17 20:43:03', '2024-02-17 20:47:44', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Free shipping on orders over $50. 30-day return policy.</span>'),
(12, 'Men\'s Classic Watch', 'mens-classic-watch-12', 'WATCH013', 9, 15, 1, 99.99, 99.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Timeless classic watch for everyday wear.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Stay punctual and stylish with this men\'s classic watch. Featuring a timeless design with a stainless steel case and a genuine leather strap, it adds a sophisticated touch to any ensemble.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Quartz movement. Water-resistant up to 30 meters.</span>', 0, 0, 1, '2024-02-17 20:53:22', '2024-02-17 20:55:07', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Free shipping on orders over $100. 30-day return policy</span>'),
(13, 'Safari Bata Men\'s Timber Boot', 'leather-safari-boots-13', 'SAFARI002', 3, 13, 3, 30.98, 38, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Durable leather boots, perfect for outdoor adventures.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Explore the wild with confidence in these genuine leather safari boots. Handcrafted by local artisans, they feature a rugged design with sturdy soles, providing comfort and protection on rugged terrain. Ideal for safaris, hiking, and outdoor activities.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Water-resistant. Reinforced toe cap for added durability.</span>', 0, 0, 1, '2024-02-17 21:02:06', '2024-02-17 21:04:56', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Delivery within Uganda. 7-day return policy for unused items.</span>'),
(14, 'Youth Men\'s Low Flat Casual Canvas Shoes-White', 'youth-mens-low-flat-casual-canvas-shoes-white-14', 'CA001', 3, 3, 1, 45, 45, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">perfect for outdoor adventures.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">perfect for outdoor adventures.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Water-resistant. Reinforced toe cap for added durability.</span>', 0, 0, 1, '2024-02-17 21:21:39', '2024-02-17 21:24:01', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Delivery within Uganda. 7-day return policy for unused items.</span>'),
(15, 'Habaya', 'habaya-15', 'habayaS017', 7, 12, 1, 54.99, 54.99, '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Premium Polyester Blend</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">Elevate your modest wardrobe with our elegant Habaya. Made from a premium polyester blend, this Habaya combines comfort with sophistication. Its flowing design offers a relaxed fit, while the black color adds a touch of timeless style. Perfect for any occasion, from daily wear to special events.</span>', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\"> Available in sizes S, M, L, XL</span>', 0, 0, 1, '2024-02-17 22:02:48', '2024-02-17 22:05:33', '3 days');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(28, 1, 1, '2023-12-17 01:43:59', '2023-12-17 01:43:59'),
(29, 1, 2, '2023-12-17 01:43:59', '2023-12-17 01:43:59'),
(31, 4, 4, '2024-02-03 17:28:06', '2024-02-03 17:28:06'),
(32, 4, 2, '2024-02-03 17:28:06', '2024-02-03 17:28:06'),
(33, 5, 1, '2024-02-06 17:47:34', '2024-02-06 17:47:34'),
(34, 5, 4, '2024-02-06 17:47:34', '2024-02-06 17:47:34'),
(35, 5, 2, '2024-02-06 17:47:34', '2024-02-06 17:47:34'),
(36, 6, 1, '2024-02-06 17:48:41', '2024-02-06 17:48:41'),
(37, 3, 2, '2024-02-10 13:50:12', '2024-02-10 13:50:12'),
(39, 7, 1, '2024-02-17 15:26:51', '2024-02-17 15:26:51'),
(40, 7, 4, '2024-02-17 15:26:51', '2024-02-17 15:26:51'),
(41, 2, 1, '2024-02-17 15:41:40', '2024-02-17 15:41:40'),
(42, 8, 1, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(43, 9, 1, '2024-02-17 20:35:15', '2024-02-17 20:35:15'),
(44, 10, 1, '2024-02-17 20:41:32', '2024-02-17 20:41:32'),
(46, 11, 1, '2024-02-17 20:47:44', '2024-02-17 20:47:44'),
(47, 12, 1, '2024-02-17 20:55:07', '2024-02-17 20:55:07'),
(48, 13, 1, '2024-02-17 21:04:56', '2024-02-17 21:04:56'),
(49, 14, 1, '2024-02-17 21:24:01', '2024-02-17 21:24:01'),
(50, 15, 1, '2024-02-17 22:05:33', '2024-02-17 22:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_extention` varchar(20) DEFAULT NULL,
  `order_by` int(11) NOT NULL DEFAULT 100,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image_name`, `image_extention`, `order_by`, `created_at`, `updated_at`) VALUES
(3, 1, '15dzycwovaklduyg2igwc.png', 'png', 1, '2023-12-15 09:41:28', '2023-12-17 01:43:51'),
(7, 1, '1fhfq4xbcfk7znuf6p8z4.jpg', 'jpg', 3, '2023-12-17 01:04:27', '2023-12-17 01:42:33'),
(8, 1, '16yzqo9n4eyjdkp6dlvfm.jpg', 'jpg', 2, '2023-12-17 01:04:27', '2023-12-17 01:43:51'),
(10, 4, '4oy3lfsuncww3nozlknsn.jpg', 'jpg', 100, '2024-02-03 17:28:06', '2024-02-03 17:28:06'),
(11, 5, '5nk8akehzwfbkvyl2ofhj.png', 'png', 100, '2024-02-06 17:47:34', '2024-02-06 17:47:34'),
(12, 6, '6dw2ixdd4cljw6vnyexdw.png', 'png', 100, '2024-02-06 17:48:41', '2024-02-06 17:48:41'),
(13, 3, '3xwkz6ck5e1gxk2kjvchv.jpg', 'jpg', 100, '2024-02-10 13:50:12', '2024-02-10 13:50:12'),
(14, 2, '2yx3nia8i18k0m92rqakc.jpg', 'jpg', 100, '2024-02-10 13:51:43', '2024-02-10 13:51:43'),
(15, 7, '7owv06pwjtnptt9etvog0.jpg', 'jpg', 100, '2024-02-17 15:26:51', '2024-02-17 15:26:51'),
(16, 8, '8q1cxdnsa2ftnexqqsc3t.jpg', 'jpg', 100, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(17, 9, '9fykddcatknckgyg58esa.jpg', 'jpg', 100, '2024-02-17 20:35:15', '2024-02-17 20:35:15'),
(18, 10, '101ts8valzindutlwm4uao.jpg', 'jpg', 100, '2024-02-17 20:41:32', '2024-02-17 20:41:32'),
(19, 11, '11kzgcx96qxea0mdplulf5.jpg', 'jpg', 100, '2024-02-17 20:45:20', '2024-02-17 20:45:20'),
(20, 12, '12hw3uoxlluaxrl3ct5set.jpg', 'jpg', 100, '2024-02-17 20:55:07', '2024-02-17 20:55:07'),
(21, 13, '13ugiequfhucj36xqd7ssb.jpeg', 'jpeg', 100, '2024-02-17 21:04:56', '2024-02-17 21:04:56'),
(22, 14, '14wlcchsxhsm05wcm3r9ud.jpg', 'jpg', 100, '2024-02-17 21:24:01', '2024-02-17 21:24:01'),
(23, 15, '155mg5imzloydwe8i0nzov.jpg', 'jpg', 100, '2024-02-17 22:05:33', '2024-02-17 22:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(18, 1, '5', 10, '2023-12-17 01:43:59', '2023-12-17 01:43:59'),
(20, 4, '12', 20000, '2024-02-03 17:28:06', '2024-02-03 17:28:06'),
(21, 4, '14', 40000, '2024-02-03 17:28:06', '2024-02-03 17:28:06'),
(22, 6, '12', 2000, '2024-02-06 17:48:41', '2024-02-06 17:48:41'),
(23, 3, '8', 8, '2024-02-10 13:50:12', '2024-02-10 13:50:12'),
(26, 7, '212', 23, '2024-02-17 15:26:51', '2024-02-17 15:26:51'),
(27, 2, '7.9', 40, '2024-02-17 15:41:40', '2024-02-17 15:41:40'),
(28, 2, '9.0', 50, '2024-02-17 15:41:40', '2024-02-17 15:41:40'),
(29, 8, 'S', 29.99, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(30, 8, 'M', 28.77, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(31, 8, 'L', 30.99, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(32, 8, 'XL', 37.88, '2024-02-17 20:31:17', '2024-02-17 20:31:17'),
(33, 9, '5', 79.99, '2024-02-17 20:35:15', '2024-02-17 20:35:15'),
(34, 9, '6', 89.99, '2024-02-17 20:35:15', '2024-02-17 20:35:15'),
(35, 10, 'S', 49.99, '2024-02-17 20:41:32', '2024-02-17 20:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `category_id`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirts', 'clothes/t-shirts', 't-shirts', 'awesome outfits in kampala city', 't-shirts', 1, 0, 1, 0, '2023-12-12 13:08:14', '2024-02-17 20:04:44'),
(2, 'hjhj', 'hjh', 'ha', 'j', 'k', 1, 0, 1, 1, '2023-12-12 13:55:33', '2023-12-13 12:48:08'),
(3, 'canvas', 'canvas', 'canvas', 'swag shoes', 'convas', 1, 0, 3, 0, '2023-12-13 12:13:44', '2023-12-13 12:13:44'),
(4, 'office shoes', 'office-shoes', 'office closed shoes', 'office shoes for office', 'office', 1, 0, 3, 0, '2023-12-13 12:15:07', '2023-12-13 12:40:42'),
(6, 'office cloth', 'office-cloth', 'office clothes', 'office', 'office', 1, 0, 1, 0, '2023-12-13 20:17:42', '2023-12-13 20:17:42'),
(7, 'Hijab', 'hijab', 'hijabs', '', 'hijab', 1, 0, 5, 0, '2023-12-16 21:59:19', '2023-12-16 21:59:19'),
(8, 'Hand Bags', 'hand-bags', 'Hand Bags', 'Women\'s Bags', 'women like bags', 1, 0, 6, 0, '2024-02-03 17:24:09', '2024-02-03 17:24:09'),
(9, 'School Bags', 'school-bags', 'School Bag', 'These are majorly bags for  students', 'school-bags', 1, 0, 6, 0, '2024-02-03 17:25:21', '2024-02-03 17:25:21'),
(10, 'Hijabs', 'islamic-womens-clothing/hijabs', 'Hijabs', 'High-quality hijabs made from breathable fabric, various colors and designs available.', 'Hijabs', 1, 0, 7, 0, '2024-02-17 20:17:18', '2024-02-17 20:17:18'),
(11, 'Thobes', 'kanzuz/thobes', 'Islamic Thobes', 'Traditional thobes made from premium quality fabric, suitable for formal occasions.', 'Thobes', 1, 0, 8, 0, '2024-02-17 20:18:36', '2024-02-17 20:18:36'),
(12, 'Abayas', 'islamic-womens-clothing/abayas', 'Abayas', 'Elegant abayas with intricate embroidery, available in various sizes.', 'Abayas', 1, 0, 7, 0, '2024-02-17 20:19:40', '2024-02-17 20:19:40'),
(13, 'Boots', 'shoes/boots', 'Boots', 'Fashionable boots made from genuine leather, suitable for winter wear.', 'Boots', 1, 0, 3, 0, '2024-02-17 20:21:01', '2024-02-17 20:21:01'),
(14, 'Men Sports outfits', 'clothes/sports', 'Sports', 'Stay comfortable during workouts with these outfits. Made from lightweight and breathable fabric, they feature an elastic waistband with an adjustable drawstring for a personalized fit.', 'sports', 1, 0, 1, 0, '2024-02-17 20:47:29', '2024-02-17 20:47:29'),
(15, 'Men Watches', 'Men-watches', 'Men Watches', 'Stay punctual and stylish with this men\'s classic watch.', 'watches', 1, 0, 9, 0, '2024-02-17 20:51:11', '2024-02-17 20:51:11'),
(16, 'Women Watches', 'women-watches', 'Women classic watches', 'Stay punctual and stylish with this Women  classic watch.', 'Women  classic watch.', 1, 0, 9, 0, '2024-02-17 20:52:26', '2024-02-17 20:52:26');

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
  `profile_pic` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Customer, 1:Admin',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:inactive',
  `is_delete` tinyint(4) DEFAULT 0 COMMENT '0:not deleted\r\n, 1: deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_pic`, `remember_token`, `is_admin`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$PCN6wv6V5hNsDWpTSg5L1.ipDEoSN4oyrcI9t1xRgFIcLLmrJKnvu', NULL, 'ibe79Xa1gb0tOLcQE4lZtqeIKw5HUEORLsrismQeYec4wJVuE9mU1s78rTFD', 1, 0, 0, '2023-12-05 09:31:31', '2023-12-07 09:31:39'),
(2, 'fahads', 'fahad@gmail.com', NULL, '$2y$12$TUk6iPFBs6aXnEPjv3rm8emtJwC3jxYQSfJgnn8S6BfRDSJVWtd6S', '202312120131579bzdt9xeg1k0a4rmfdtu.png', NULL, 1, 0, 0, '2023-12-12 10:22:57', '2023-12-12 10:48:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
