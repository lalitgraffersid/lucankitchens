-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 06:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucan_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_description` text NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_description`, `banner_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'slider1', '<h2>Exceptional Personalized\r\n                              <span>Kitchens & Wardrobes</span>\r\n                           </h2>', '1574011766.jpg', 1, '2019-11-19 17:35:22', '2019-11-19 12:05:22', NULL),
(2, 'slider2', '<h2>Exceptional Personalized\r\n                              <span>Kitchens & Wardrobes</span>\r\n                           </h2>', '1574011813.jpg', 1, '2019-11-19 17:35:30', '2019-11-19 12:05:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `slug_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `banner_description` text DEFAULT NULL,
  `page_banner` varchar(255) DEFAULT NULL,
  `content_banner` varchar(255) DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_title`, `slug_name`, `meta_title`, `meta_description`, `meta_keyword`, `page_description`, `banner_description`, `page_banner`, `content_banner`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About us', 'about', 'About us', 'About us', 'About us', '<h1>About Us</h1>\r\n\r\n<p>Lucan Kitchen &amp; Wardrobe Centre was established in 1982 by a brother and sister team at the rear of the family home, and for the last 30 years, our factory and showrooms have been located in the picturesque village of Lucan, on the banks of the River Liffey.<br />\r\nWe are a family-run company, and our success has been founded on providing a high-quality product and exceptional service, and our dedication to these ideals has seen the company grow to where it is today. Our purpose is to design and create fitted kitchens, bedrooms and living spaces that are both beautiful and functional.</p>\r\n\r\n<p>The company is today synonymous with our professional sales and design team, our highly efficient fitting team, and our outstanding customer service. We have our own manufacturing facility, which is staffed by skilled craftsmen and backed up by modern technology to produce the highest standard of product. In addition, we have always sought to build strong relationships with our suppliers and source the best components and materials available when creating your dream kitchens and bedrooms.</p>', NULL, '1574012386.jpg', '1574012386.jpg', '1', '2019-05-21 11:53:48', '2019-11-17 12:09:46', NULL),
(2, 'Contact Us', 'contact-us', 'Contact Us', 'Contact Us', 'Contact Us', '<p>test</p>', NULL, '1563125224.jpg', '1558461497.jpg', '1', '2019-05-21 12:02:54', '2019-08-22 23:57:49', NULL),
(3, 'home box', 'home-box', 'home box', 'home box', 'home box', '<div class=\"row\">\r\n<div class=\"col-md-4\">\r\n<div class=\"box\">\r\n<div class=\"icon\"><img alt=\"\" src=\"frontend/images/icon_freecont.png\" /></div>\r\n\r\n<h3>Free Consultation</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<div class=\"box\">\r\n<div class=\"icon\"><img alt=\"\" src=\"frontend/images/icon_family.png\" /></div>\r\n\r\n<h3>Family-Owned Business</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<div class=\"box\">\r\n<div class=\"icon\"><img alt=\"\" src=\"frontend/images/icon_quality.png\" /></div>\r\n\r\n<h3>High-Quality Craftsmanship</h3>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>\r\n</div>\r\n</div>\r\n</div>', NULL, '', '', '1', '2019-11-17 12:22:22', '2019-11-18 12:21:34', NULL),
(4, 'kitchens', 'kitchens', 'kitchens', 'kitchens', 'kitchens', '<p>kitchens</p>', '<p>kitchens</p>', '', '', '1', '2019-11-18 12:42:26', '2019-11-18 12:42:26', NULL),
(5, 'wardrobes', 'wardrobes', 'wardrobes', 'wardrobes', 'wardrobes', '<p>wardrobes</p>', '<p>wardrobes</p>', '', '', '1', '2019-11-18 12:43:20', '2019-11-18 12:43:20', NULL),
(6, 'faq', 'faq', 'faq', 'faq', 'faq', '<p>faq</p>', '<p>faq</p>', '', '', '1', '2019-11-18 12:43:56', '2019-11-18 12:43:56', NULL),
(7, 'planners', 'planners', 'planners', 'planners', 'planners', '<p>planners</p>', '<p>planners</p>', '', '', '1', '2019-11-18 12:44:38', '2019-11-18 12:44:38', NULL),
(8, 'bespoke', 'bespoke', 'bespoke', 'bespoke', 'bespoke', '<p>bespoke</p>', '<p>bespoke</p>', '', '', '1', '2019-11-18 12:45:15', '2019-11-18 12:45:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `about` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_title`, `description`, `gallery_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'The point of using Lorem Ipsum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it', '1567787701.jpg', 1, '2019-09-08 09:31:49', '2019-09-08 04:01:49', NULL),
(2, 'The point of using Lorem Ipsum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it', '1567787715.jpg', 1, '2019-09-08 09:31:57', '2019-09-08 04:01:57', NULL),
(3, 'The point of using Lorem Ipsum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it', '1567787726.jpg', 1, '2019-09-08 09:32:03', '2019-09-08 04:02:03', NULL),
(4, 'The point of using Lorem Ipsum', '', '1567787736.jpg', 1, '2019-09-06 11:05:36', '2019-09-06 11:05:36', NULL),
(5, 'The point of using Lorem Ipsum', '', '1567787750.jpg', 1, '2019-09-06 11:05:50', '2019-09-06 11:05:50', NULL),
(6, 'The point of using Lorem Ipsum', '', '1567787760.jpg', 1, '2019-09-06 11:06:00', '2019-09-06 11:06:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `manufacturer` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `type`, `manufacturer`, `description`, `image`, `status`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 'Lorem Ipxxxxx', '1567939242.jpg', 1, '2015', '2019-09-08 10:40:42', '2019-09-08 05:23:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `home_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `home_phone`, `email`, `linkedin`, `facebook`, `twitter`, `youtube`, `address`, `pinterest`, `instagram`, `googleplus`, `updated_at`) VALUES
(1, '(01) 628 0475', 'info@lucankitchens.ie', 'https://www.linkedin.com/', NULL, 'https://twitter.com/', NULL, 'Unit 9, Hills Industrial Estate, Lucan Co. Dublin', NULL, NULL, NULL, '2019-11-19 12:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `degination` text NOT NULL,
  `description` text NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `degination`, `description`, `profile_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ddddd', 'ffff', 'dddddddddddddddddd', '1567882048.jpg', 1, '2019-09-07 18:47:28', '2019-09-08 03:52:01', '2019-09-08 03:52:01'),
(2, 'Lorem ipsum dolor sit amet', 'Eiusmod tempor inci', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever.', '1567936237.jpg', 1, '2019-09-08 09:50:38', '2019-09-08 04:20:38', NULL),
(3, 'test2', 'test2', 'test2', '1567936332.jpg', 1, '2019-09-08 09:52:12', '2019-09-08 04:22:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@lucan.com', '$2y$12$1qApfqC9qnDHhw4B.HETp.TtEc6kWAZ..8V9BXFUvOkZAMRxR39zq', '1', '2019-11-19 17:31:40', 'EwKfbjUDywumk800Z1v6xvxtOasuGiQNb9SlV7GTb7TdDoFRv99TO3UlnDEl', '2018-05-14 04:14:04', '2019-11-19 12:01:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_title` (`page_title`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
