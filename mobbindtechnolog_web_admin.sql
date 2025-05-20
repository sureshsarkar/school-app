-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2024 at 02:31 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobbindtechnolog_web_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_settings`
--

CREATE TABLE `basic_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_settings`
--

INSERT INTO `basic_settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://mobbindtechnology.co.in/', '2021-04-10 16:24:15', '2024-05-25 16:43:40'),
(2, 'chat-bot', NULL, '2021-04-12 19:24:51', '2021-07-09 03:51:01'),
(3, 'google-analytics', NULL, '2021-04-12 19:24:51', '2023-05-26 00:22:19'),
(4, 'google-tag-master', NULL, '2021-04-12 19:24:51', '2023-01-30 09:39:42'),
(5, 'facebook-pixel-code', NULL, '2021-04-12 19:24:51', '2023-05-26 00:22:19'),
(6, 'twitter', 'https://mobbindtechnology.co.in/', '2021-04-12 19:24:51', '2024-05-25 16:43:40'),
(7, 'linedin', 'https://linkedin.com', '2021-04-12 19:24:51', '2021-10-19 07:50:10'),
(8, 'instagram', 'https://mobbindtechnology.co.in/', '2021-04-12 19:24:52', '2024-05-25 16:43:40'),
(9, 'contact_us_receiving_mail', 'info@example.com', '2021-04-12 19:24:52', '2024-05-05 07:24:19'),
(10, 'newsletter_receiving_mail', 'info@example.com', '2021-04-12 19:24:52', '2024-05-05 07:24:19'),
(11, 'mail_from', 'info@example.com', '2021-04-12 19:24:52', '2024-05-05 07:24:19'),
(12, 'mail_from_name', 'Demo', '2021-04-12 19:24:52', '2024-05-05 07:23:08'),
(13, 'mail_driver', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(14, 'smtp_host', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(15, 'smtp_port', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(16, 'email_encryption', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(17, 'smtp_user', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(18, 'smtp_pass', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(19, 'direct_buyer', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(20, 'wholesale_buyer', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(21, 'auction', NULL, '2021-04-12 19:24:52', '2021-04-12 19:24:52'),
(22, 'address', '<p>Barranco Beatriz 6*<br>\r\nAsh Sharqiyah South Governorate<br>\r\nOman, OM (OMN)<br>\r\nWestern Asia<br>\r\nAsia<br>\r\nLat/Lon<br>\r\n21.5230262,<br>\r\n59.19073020927925<br>', '2021-07-09 02:27:05', '2024-05-25 16:41:21'),
(23, 'open-office', NULL, '2021-07-09 02:27:05', '2024-01-09 01:11:57'),
(24, 'header-top', NULL, '2021-07-09 02:27:05', '2021-07-09 02:27:05'),
(25, 'about', 'I have a recruitment company that is hiring Filipinos on the go.', '2021-07-09 02:27:05', '2024-01-23 07:10:19'),
(26, 'map', NULL, '2021-07-09 02:27:06', '2024-01-23 07:10:19'),
(27, 'mobile', '+968 99 89 9999', '2021-07-09 02:27:06', '2024-05-25 16:37:18'),
(28, 'mobile1', NULL, '2021-07-09 02:27:06', '2024-01-23 07:10:19'),
(29, 'booking-second-data', NULL, '2021-07-09 02:27:06', '2021-07-09 02:27:06'),
(30, 'copyright', '<p>Developed for  All right reserved.<br>2024</p>', '2021-07-09 02:27:06', '2024-05-25 16:43:03'),
(31, 'email', 'info@example.com', '2021-07-09 02:27:19', '2024-05-05 07:22:44'),
(32, 'new_user_receiving_mail', 'gaurav@mailinator.com', '2021-08-02 01:06:26', '2022-02-01 05:13:16'),
(33, 'new_order_receiving_mail', 'gaurav@mailinator.com', '2021-08-02 01:06:26', '2022-02-01 05:13:16'),
(34, 'common-footer-data', NULL, '2022-09-16 13:36:17', '2024-05-25 16:32:33'),
(35, 'common-header-data', NULL, '2022-09-16 13:36:17', '2024-05-25 16:47:02'),
(36, 'linkedin', NULL, '2022-09-16 13:36:17', '2023-09-20 01:41:34'),
(37, 'pinterest', NULL, '2022-09-16 13:36:17', '2023-09-20 01:41:34'),
(38, 'youtube', NULL, '2022-09-16 13:36:17', '2022-09-16 13:36:17'),
(39, 'whatsapp', NULL, '2022-09-16 13:36:17', '2023-09-20 01:41:34'),
(40, 'telegram', NULL, '2022-09-16 13:36:17', '2023-01-30 10:02:15'),
(41, 'skype', NULL, '2022-09-16 13:36:17', '2023-01-30 10:02:15'),
(42, 'stripe_publish_key', NULL, '2022-09-16 13:36:17', '2022-12-15 18:08:48'),
(43, 'stripe_secret_key', NULL, '2022-09-16 13:36:17', '2022-12-15 18:08:48'),
(44, 'paypal_access_token', 'AVdzYV39yGcQKUpVQlzTLd9Q44cy-0JlhYn9vk_nFqLZB1RU0dogVfTP5nzET6gEhU1JRkKzkxp9lbNo', '2022-09-16 13:36:17', '2022-12-14 21:10:29'),
(45, 'igms_access_token', NULL, '2022-09-16 13:36:17', '2022-09-16 13:36:17'),
(46, 'pricelab_access_token', NULL, '2022-09-16 13:36:17', '2022-12-14 18:39:29'),
(47, 'hosttools_access_token', NULL, '2022-09-16 13:36:17', '2022-09-16 13:36:17'),
(48, 'google_captcha_access_token', NULL, '2022-09-16 13:36:17', '2022-09-16 13:36:17'),
(49, 'google_map_access_token', NULL, '2022-09-16 13:36:17', '2022-09-16 13:36:17'),
(50, 'booking_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-09-19 13:13:08', '2022-12-15 17:37:32'),
(51, 'rental_aggrement_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-09-19 14:29:33', '2022-12-15 17:37:32'),
(52, 'welcome_package_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-10-11 16:03:30', '2022-12-15 17:37:32'),
(53, 'welcome_package_send_day', '3', '2022-10-11 16:26:29', '2022-11-07 18:00:05'),
(54, 'review_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-10-11 16:30:55', '2022-12-15 17:37:32'),
(55, 'review_send_day', '10', '2022-10-11 16:30:55', '2022-10-11 16:30:55'),
(56, 'payment_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-10-12 14:43:39', '2022-12-15 17:37:32'),
(57, 'payment_interval', '3', '2022-10-12 14:43:39', '2022-12-15 22:45:45'),
(58, 'second_min_total_days', '90', '2022-10-12 14:43:39', '2022-12-15 22:45:45'),
(59, 'second_how_many_days', '90', '2022-10-12 14:43:39', '2022-12-15 22:45:45'),
(60, 'second_third_how_many_days', '180', '2022-10-12 14:43:39', '2022-12-15 22:46:28'),
(61, 'third_min_total_days', '180', '2022-10-12 14:43:39', '2022-12-15 22:45:45'),
(62, 'third_how_many_days', '90', '2022-10-12 14:43:39', '2022-12-15 22:45:45'),
(63, 'google_captcha_site_key', '6Lc14WkjAAAAAE7beTg25qYWXAE4mKAleX5lUZnd', '2022-10-12 15:53:25', '2022-12-09 16:50:49'),
(64, 'google_captcha_secret_key', '6Lc14WkjAAAAAPFFT-_mTOcBE8HO4sV1OUqi5Pos', '2022-10-12 15:53:25', '2022-12-09 16:50:49'),
(65, 'second_payment_mode', 'online', '2022-10-12 16:50:24', '2022-10-12 16:50:24'),
(66, 'second_payment_per', '50', '2022-10-12 16:50:24', '2022-12-15 22:45:45'),
(67, 'second_third_payment_per', '30', '2022-10-12 16:50:24', '2022-12-15 22:45:45'),
(68, 'third_payment_mode', 'online', '2022-10-12 16:50:24', '2022-10-12 16:50:24'),
(69, 'third_payment_per', '33', '2022-10-12 16:50:24', '2022-12-15 22:45:45'),
(70, 'payment_currency', '$', '2022-10-13 15:14:25', '2022-11-07 16:16:44'),
(71, 'cancel_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-11-04 17:44:23', '2022-12-15 17:37:32'),
(72, 'mailer_admin_name', 'Demo', '2022-11-04 17:44:23', '2024-05-05 07:23:08'),
(73, 'reminder_package_receiving_mail', 'enquiries@stayhappilyeverafter.com', '2022-11-04 19:07:30', '2022-12-15 17:37:32'),
(74, 'which_payment_gateway', 'paypal', '2022-11-21 21:00:33', '2022-12-15 18:08:48'),
(75, 'mail_footer', 'Copyright &copy; 2024  All rights reserved.', '2022-11-23 19:53:19', '2024-01-09 01:12:52'),
(76, 'AUTHORIZED_MERCHANT_LOGIN_ID', NULL, '2022-12-01 16:33:54', '2022-12-14 18:39:29'),
(77, 'AUTHORIZED_MERCHANT_TRANSACTION_KEY', NULL, '2022-12-01 16:33:54', '2022-12-14 18:39:29'),
(78, 'g_captcha_enabled', 'yes', '2022-12-09 16:50:49', '2022-12-09 16:50:49'),
(79, 'featured_store', '561', '2022-12-27 18:33:49', '2023-01-10 17:36:55'),
(80, 'default_country', '1', '2023-01-01 19:33:49', '2023-01-01 19:33:49'),
(81, 'version_css_js', '1.1', '2023-01-05 01:05:22', '2023-02-01 06:52:49'),
(82, 'website', 'Demo', '2023-01-05 01:05:22', '2024-05-05 07:23:51'),
(83, 'favicon', 'uploads/uploads/couponorg-logo-6652130674bdd.png', '2023-01-05 01:05:22', '2024-05-25 16:34:14'),
(84, 'header_logo', 'uploads/uploads/couponorg-logo-66521306755fd.png', '2023-01-05 01:05:22', '2024-05-25 16:34:14'),
(85, 'footer_logo', 'uploads/uploads/couponorg-logo-6652130676334.png', '2023-01-05 01:05:22', '2024-05-25 16:34:14'),
(86, 'project completed', '80', '2023-02-01 06:56:08', '2024-05-25 17:32:32'),
(87, 'Working hours', '10', '2023-02-01 06:56:08', '2024-05-25 17:32:32'),
(88, 'Positive Feeback', '309', '2023-02-01 06:56:08', '2023-02-21 10:09:03'),
(89, 'Happy Clients', '32', '2023-02-01 06:56:08', '2024-05-25 17:32:32'),
(90, 'newsletter', 'Let employers find you', '2023-05-26 00:22:47', '2024-01-30 00:54:51'),
(91, 'Experienced Staff', '58', '2023-05-26 01:53:42', '2024-05-25 17:32:32'),
(92, 'other-thing-on-head', 'Muscat-May 8, 2024', '2023-05-26 06:27:24', '2024-05-25 16:47:02'),
(93, 'office-time', NULL, '2023-09-19 04:24:57', '2024-01-09 01:11:57'),
(94, 'weekend-closed', NULL, '2023-09-19 04:24:57', '2024-01-09 01:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `title_ger` varchar(1091) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longDescription_ger` longtext COLLATE utf8mb4_unicode_ci,
  `shortDescription_ger` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description_ger` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ger` text COLLATE utf8mb4_unicode_ci,
  `meta_title_ger` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `seo_url`, `image`, `publish`, `longDescription`, `shortDescription`, `meta_description`, `meta_keywords`, `meta_title`, `featureImage`, `blog_category_id`, `created_at`, `updated_at`, `agent_id`, `title_ger`, `longDescription_ger`, `shortDescription_ger`, `meta_description_ger`, `meta_keywords_ger`, `meta_title_ger`, `status`) VALUES
(13, 'Lorem Ipsum is simply dummy text  and typesetting industry', 'lorem-lipsum-industry', 'uploads/blogs/659d28dc28834.jpg', 'published', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'By Jone day', 'ghnfgjh', 'ghnfgjh', 'ghnfgjh', 'uploads/blogs/659d28dc29555.jpg', '7', '2023-06-14 00:55:12', '2024-01-09 06:28:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(14, 'teddddfdff', 'vvvvv', 'uploads/blogs/659d3419c3e14.jpg', 'published', '<p>dvcvvc</p>', 'vbbvbvbv', 'teddddfdff', 'teddddfdff', 'teddddfdff', 'uploads/blogs/659d3419c4bc7.jpg', '7', '2024-01-09 06:25:05', '2024-01-09 06:52:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active'),
(15, 'bnnn', 'nvnn', 'uploads/blogs/659d343e62c08.jpg', 'published', '<p>vnnvvn</p>', 'nvcvcnvnc', 'bnnn', 'bnnn', 'bnnn', 'uploads/blogs/659d343e636f2.jpg', '6', '2024-01-09 06:25:42', '2024-01-09 06:26:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `benefits` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `isHome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `isParent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_ger` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription_ger` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription_ger` longtext COLLATE utf8mb4_unicode_ci,
  `meta_title_ger` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords_ger` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ger` text COLLATE utf8mb4_unicode_ci,
  `benefits_ger` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `seo_url`, `image`, `shortDescription`, `benefits`, `longDescription`, `isHome`, `publish`, `isParent`, `meta_title`, `meta_keywords`, `meta_description`, `bannerImage`, `ordering`, `templete`, `created_at`, `updated_at`, `title_ger`, `shortDescription_ger`, `longDescription_ger`, `meta_title_ger`, `meta_keywords_ger`, `meta_description_ger`, `benefits_ger`) VALUES
(6, 'Blogs', 'blogs', 'uploads/blog-category/64895e20b0dad.png', NULL, NULL, NULL, 'true', 'published', NULL, 'n', 'gjj', 'gjj', 'uploads/blog-category/64895fbb704b2.jpg', '0', 'common', '2023-06-14 00:54:57', '2024-01-09 06:30:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'News', 'news', NULL, NULL, NULL, NULL, 'true', 'published', NULL, 'News', 'News', 'News', NULL, '0', 'common', '2024-01-09 06:27:55', '2024-01-09 06:27:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_requests`
--

CREATE TABLE `booking_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `total_guests` int(11) NOT NULL,
  `adults` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `gross_amount` double NOT NULL,
  `total_night` double NOT NULL,
  `sub_amount` double NOT NULL,
  `total_amount` double NOT NULL,
  `after_total_fees` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `before_total_fees` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'booked',
  `email_status` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `payment_status` enum('paid','partially','pending','declined','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `welcome_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `review_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `reminder_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `third_reminder_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `checkin_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `checkout_email` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_reason` longtext COLLATE utf8mb4_unicode_ci,
  `note` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rental_aggrement_status` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `rental_aggrement_signature` text COLLATE utf8mb4_unicode_ci,
  `rental_aggrement_images` longtext COLLATE utf8mb4_unicode_ci,
  `rental_agreement_link` text COLLATE utf8mb4_unicode_ci,
  `total_payment` int(11) NOT NULL DEFAULT '1',
  `amount_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `how_many_payment_done` int(11) NOT NULL DEFAULT '0',
  `total_pets` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pet_fee` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_fee` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rest_guests` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_guest_fee` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_coupon` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_discount_total` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_discount` int(11) NOT NULL DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'red'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `country_id` int(11) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`) VALUES
(1, 'Dell', 'uploads/brands/63a78505c0119.jpg', NULL, NULL, 'dell', NULL, NULL, NULL, 'published', 'true', '2022-12-20 18:28:01', '2022-12-24 19:59:15', NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT '0',
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_position` int(11) DEFAULT '0',
  `exp_year_from` decimal(10,1) DEFAULT '0.0',
  `exp_year_to` decimal(10,1) DEFAULT '0.0',
  `salary_from` double(10,1) DEFAULT '0.0',
  `salary_to` double(10,1) DEFAULT '0.0',
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `shortDescription`, `mediumDescription`, `longDescription`, `description`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `bannerImage`, `publish`, `start_date`, `end_date`, `created_at`, `updated_at`, `location`, `company`, `category`, `is_featured`, `seo_url`, `emp_type`, `skill_id`, `no_of_position`, `exp_year_from`, `exp_year_to`, `salary_from`, `salary_to`, `contact`, `website`, `email`, `address`, `map`, `pincode`, `title`) VALUES
(6, NULL, NULL, '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'uploads/careers/659e415ebc68e.png', NULL, NULL, NULL, 'uploads/careers/659e6cbef0729.jpg', 'published', NULL, NULL, '2024-01-10 01:33:58', '2024-01-10 04:39:02', 'langauage', 'publisher', '23', 0, 'title', NULL, NULL, 0, 0.0, 0.0, 0.0, 0.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'uploads/careers/659e8814e5235.jpg', NULL, NULL, NULL, 'uploads/careers/659e8814e6145.jpg', 'published', NULL, NULL, '2024-01-10 06:35:40', '2024-01-10 06:35:40', 'english', 'abc', '23', 0, 'abc', NULL, NULL, 0, 0.0, 0.0, 0.0, 0.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '<p>fsfssffgssf</p>', '<p>sf</p>', '<p>fssffs</p>', 'sffsf', 'uploads/careers/65bb782be66fa.jpg', NULL, NULL, NULL, NULL, 'published', '2024-02-05', '2024-02-05', '2024-02-01 05:23:31', '2024-02-01 05:23:31', '21', 'Financial Analyst', '5', 1, 'ffffffff', 'Full-Time', '4,6', 1, 0.0, 5.0, 4.0, 10.0, '0120 311 0520', 'https://sheetmusicinternational.com/blogs.xml', 'it@qmbsolution.in', NULL, NULL, NULL, 'Financial Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `career_categories`
--

CREATE TABLE `career_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `benefits` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `isHome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `isParent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `head_section` longtext COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_heading` text COLLATE utf8mb4_unicode_ci,
  `form_paragraph` text COLLATE utf8mb4_unicode_ci,
  `infographics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_categories`
--

INSERT INTO `career_categories` (`id`, `title`, `seo_url`, `image`, `shortDescription`, `benefits`, `longDescription`, `isHome`, `publish`, `isParent`, `meta_title`, `meta_keywords`, `meta_description`, `bannerImage`, `ordering`, `templete`, `created_at`, `updated_at`, `description`, `head_section`, `icon`, `form_heading`, `form_paragraph`, `infographics`) VALUES
(5, 'Database', 'database', 'uploads/packages/659e3500d213f.jpg', NULL, NULL, NULL, 'true', 'published', '1', 'Database', 'Database', 'Database', 'uploads/packages/62c1b0c186e11.jpg', '0', 'common', '2022-07-03 14:34:29', '2024-01-10 00:41:12', NULL, NULL, '<i class=\"fa fa-plus\"></i>', NULL, NULL, NULL),
(7, 'cloud Technology', 'cloud-technology', 'uploads/packages/659e34eebdcca.jpg', NULL, NULL, NULL, 'true', 'published', '1', 'MEAN', 'Java', 'Java', 'uploads/packages/62c1b0c186e11.jpg', '0', 'common', '2022-07-03 14:34:29', '2024-01-10 00:40:54', NULL, NULL, '<i class=\"fa fa-plus\"></i>', NULL, NULL, NULL),
(20, 'Tele communication', 'hire-telecommunication-experts', 'uploads/packages/659e34d7e5285.jpg', NULL, NULL, NULL, 'true', 'published', '5', 'Telecommunication', 'Telecommunication', 'Telecommunication', 'uploads/packages/62c1b0c186e11.jpg', '0', 'common', '2022-07-03 14:34:29', '2024-01-30 02:10:48', NULL, NULL, '<i class=\"fa fa-plus\"></i>', NULL, NULL, NULL),
(23, 'Laravel Developer', 'hire-laravel-developer', 'uploads/packages/659e34cb2a45c.jpg', NULL, NULL, NULL, 'true', 'published', '1', 'Laravel Developer', 'Laravel Developer', 'Laravel Developer', 'uploads/packages/62c1b0c186e11.jpg', '0', 'common', '2022-07-03 14:34:29', '2024-01-10 00:40:19', NULL, NULL, '<i class=\"fa fa-plus\"></i>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `career_enquiry`
--

CREATE TABLE `career_enquiry` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career_enquiry`
--

INSERT INTO `career_enquiry` (`id`, `name`, `email`, `contactnumber`, `image`, `created_at`, `updated_at`, `job_id`, `message`) VALUES
(1, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a707151d3cb.jpg', '2022-06-13 09:44:53', '2022-06-13 09:44:53', 0, NULL),
(2, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a70796a19be.jpg', '2022-06-13 09:47:02', '2022-06-13 09:47:02', 0, NULL),
(3, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a712d23e2c5.jpg', '2022-06-13 10:34:58', '2022-06-13 10:34:58', 0, NULL),
(4, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a738abefff2.jpg', '2022-06-13 13:16:27', '2022-06-13 13:16:27', 0, NULL),
(5, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a739e1eec2b.jpg', '2022-06-13 13:21:37', '2022-06-13 13:21:37', 0, NULL),
(6, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a73ab7c5721.jpg', '2022-06-13 13:25:11', '2022-06-13 13:25:11', 0, NULL),
(7, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a73b0ec2a7b.jpg', '2022-06-13 13:26:38', '2022-06-13 13:26:38', 0, NULL),
(9, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a73e3f96322.jpg', '2022-06-13 13:40:15', '2022-06-13 13:40:15', 0, NULL),
(10, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a81db5d6edf.jpg', '2022-06-14 05:33:41', '2022-06-14 05:33:41', 0, NULL),
(11, 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a83ddef4104.jpg', '2022-06-14 07:50:55', '2022-06-14 07:50:55', 0, NULL),
(19, 'Domain Feedback', 'vishavjeet@qmbsolution.in', '89764686', 'uploads/62a9b5206c700.jpg', '2022-06-15 10:32:00', '2022-06-15 10:33:16', 0, NULL),
(22, 'test abc', 'abc@gmail.com', '09477759999', 'uploads/62b16595c5446.jpg', '2022-06-21 06:30:45', '2022-06-21 06:30:45', 0, NULL),
(24, 'aga', 'adae@gmail.com', '7777777777', 'uploads/62b2b6fc0352c.docx', '2022-06-22 06:30:20', '2022-06-22 06:30:20', 0, NULL),
(25, '787873', 'sgsgs@dkfjjkfvjk', '9999999999', 'uploads/62b2b7309bbd0.png', '2022-06-22 06:31:12', '2022-06-22 06:31:12', 0, NULL),
(26, '5555', 'rerer@fhfhfh', 'dfdfdfsass', 'uploads/62b2b87d62074.jpg', '2022-06-22 06:36:45', '2022-06-22 06:36:45', 0, NULL),
(27, 'gaurav', 'gaurav@mailinator.com', '656464', 'uploads/62c1b8ac03385.jpg', '2022-07-03 15:41:32', '2022-07-03 15:41:32', 0, NULL),
(28, 'gaurav', 'gaurav@mailinator.com', '65656', 'uploads/62c1b94a3a986.jpg', '2022-07-03 15:44:10', '2022-07-03 15:44:10', 0, NULL),
(29, 'guarav', 'gaurav@mailinator.com', '565656', 'uploads/62c1b99b5227a.jpg', '2022-07-03 15:45:31', '2022-07-03 15:45:31', 0, NULL),
(30, 'fff', 'gaurav@mailinator.com', '96566', 'uploads/62c2e14fcb08f.png', '2022-07-04 12:47:11', '2022-07-04 12:47:11', 0, 'ddffd'),
(31, 'Harron Rashid', 'haroon.rashid@curetechservices.com', '898989898', 'uploads/62c2e1f360afb.png', '2022-07-04 12:49:55', '2022-07-04 12:49:55', 0, 'Hello'),
(32, 'MD HAROON', 'mhi.services@gmail.com', '7004548902', 'uploads/62de65a01491a.txt', '2022-07-25 09:42:56', '2022-07-25 09:42:56', 0, 'Testing'),
(33, 'Hariom Dwivedi', 'hariomdwvd6@gmail.com', '7678419694', 'uploads/630e29688ca49.pdf', '2022-08-30 15:14:48', '2022-08-30 15:14:48', 0, 'Please Consider me for the Account executive Vacancy, if any.'),
(34, 'SANDIP GHOSH', 'sandipocean@gmail.com', '9810543826', 'uploads/6322e01989f49.pdf', '2022-09-15 08:19:37', '2022-09-15 08:19:37', 0, 'Real Eastate Account-Noida received through Indeed.com'),
(35, 'SANDIP GHOSH', 'sandipocean@gmail.com', '9810543826', 'uploads/6322e03dc0131.pdf', '2022-09-15 08:20:13', '2022-09-15 08:20:13', 0, 'Real Estate Account-Noida received through Indeed.com'),
(36, 'nishant bb', 'bnishu084@gmail.com', '1140198', 'uploads/63ac4c02011bd.png', '2022-12-28 14:00:34', '2022-12-28 14:00:34', 0, 'Testing'),
(37, 'testing', 'abc@gmail.com', '0000000000', 'uploads/63f4ab4f79736.jpg', '2023-02-21 11:30:23', '2023-02-21 11:30:23', 0, 'testing testing'),
(38, 'Hello World! https://racetrack.top/go/hezwgobsmq5dinbw?hs=2f5edeec85aa059ccf0c9a7ae8390e9d&', 'yhfee@chitthi.in', '333008435558', 'uploads/645d236ec774b.php', '2023-05-11 11:48:38', '2023-05-11 11:48:38', 0, '0hkyz4'),
(39, 'Aniket Walde', 'Aniket.walde@gmail.com', '9503481396', 'uploads/6463153dcb487.pdf', '2023-05-16 00:01:41', '2023-05-16 00:01:41', 0, 'I am Aniket Walde having prior knowledge of Azure Administrator ( Cloud ). I am fresher and immediate joiner.'),
(40, 'Alam', 'badrealam.dhs@gmail.com', '9873801962', 'uploads/65c0caef78e85.webp', '2024-02-05 06:17:59', '2024-02-05 06:17:59', 8, 'fdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `benefits` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `isHome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `isParent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_description` longtext COLLATE utf8mb4_unicode_ci,
  `is_parent` int(11) DEFAULT NULL,
  `longDescriptiontwo` text COLLATE utf8mb4_unicode_ci,
  `longDescriptionthree` text COLLATE utf8mb4_unicode_ci,
  `longDescriptionfour` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `seo_url`, `shortDescription`, `mediumDescription`, `longDescription`, `description`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `templete`, `bannerImage`, `publish`, `footer_section`, `header_section`, `created_at`, `updated_at`, `image2`, `cta_description`, `is_parent`, `longDescriptiontwo`, `longDescriptionthree`, `longDescriptionfour`) VALUES
(1, 'Home', 'home', '<p>Search your career opportunity through 12,800 jobs</p>', '<h4>Search by Category</h4>\r\n\r\n<p>Search your career opportunity with our categories</p>', '<h4>Featured Job Offers</h4>\r\n\r\n<p>Search your career opportunity through 12,800 jobs</p>', 'Find the perfect job for you', 'uploads/cms/65b89784efba5.png', 'Home :: Pinoy', 'Home :: Pinoy', 'Home :: Pinoy', 'home', NULL, 'published', NULL, NULL, '2022-12-24 16:28:09', '2024-01-30 01:27:45', 'uploads/cms/65b89c8c719e6.jpg', NULL, NULL, '<h3>Make a Difference with Your Online Resume!</h3>\r\n\r\n<p><span>Your resume in minutes with JobHunt resume assistant is ready!</span></p>', '<h2>Quick Career Tips</h2>\r\n\r\n<p><span>Found by employers communicate directly with hiring managers and recruiters.</span></p>', '<h6>Top Companies</h6>\r\n\r\n<h4>Get hired in top companies</h4>'),
(2, 'About us', 'about-us', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<h4>We want to know more about you</h4>\r\n\r\n<p>Select your profile</p>', '<h2 class=\"pxp-section-h2 text-center\">Why Customers Love Us</h2>\r\n\r\n<p class=\"pxp-text-light text-center\">What our customers say about us</p>', 'We help companies and candidates find the right fit', 'uploads/cms/65b0eb5ebb936.png', 'About us :: Pinoy', 'About us :: Pinoy', 'About us :: Pinoy', 'about', 'uploads/cms/65afb4dbb849e.png', 'published', NULL, NULL, '2022-12-24 16:28:21', '2024-01-24 05:20:06', NULL, NULL, NULL, '<h4>Stay Up to Date</h4>\r\n\r\n<p>Subscribe to our newsletter to receive our weekly feed.</p>', NULL, NULL),
(3, 'Contact Us', 'contact-us', '<p>Get in touch with us</p>', NULL, NULL, 'We\'d love to hear from you', 'uploads/cms/659d2c6639e06.jpg', 'Contact US  :: Pinoy', 'Contact US  :: Pinoy', 'Contact US  :: Pinoy', 'contact', 'uploads/cms/659d2b3d8e77f.jpg', 'published', NULL, NULL, '2022-12-24 16:28:33', '2024-01-24 05:43:45', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Privacy Policy', 'privacy-policy', NULL, NULL, '<h1 style=\"margin-top:0cm; margin-right:0cm; margin-bottom:15.0pt; margin-left:0cm; margin:20pt 0cm 6pt\"><span style=\"font-size:20pt\"><span style=\"background:white\"><span style=\"line-height:120%\"><span style=\"page-break-after:auto\"><span sans-serif=\"\" style=\"font-family:Arial,\"><span style=\"font-weight:normal\"><a name=\"_r3awvbzbghjh\"></a><b><span lang=\"EN\" style=\"font-size:19.5pt\"><span style=\"line-height:120%\">Privacy Policy</span></span></b></span></span></span></span></span></span></h1>\r\n\r\n<h1 style=\"margin-top:0cm; margin-right:0cm; margin-bottom:15.0pt; margin-left:0cm; margin:20pt 0cm 6pt\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>\r\n\r\n<p style=\"margin:0cm 0cm 0.0001pt\">&nbsp;</p>', 'DHS UP Cloud was established and operated by a team of energetic professionals with excellent technical expertise and experience with the goal of providing optimal IT infrastructure and facilities. We want to help businesses gain clarity through definite objectives and quantifiable results. As professionals in this field, we offer flexible, affordable, and progressive services and solutions.', NULL, 'Privacy Policy  :: Aicapital', 'Privacy Policy  :: Aicapital', 'Privacy Policy  ::Aicapital', 'common', 'uploads/cms/6470886c44f9a.webp', 'published', NULL, NULL, '2022-12-24 16:28:50', '2023-09-20 01:39:22', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Frequently Asked Questions', 'faqs', NULL, NULL, NULL, 'We help employers and candidates find the right fit', 'uploads/cms/659d24aac3c9f.jpg', 'FAQs :: Pinoy', 'FAQs :: Pinoy', 'FAQs :: Pinoy', 'faq', 'uploads/cms/659d20e677e0f.jpg', 'published', NULL, NULL, '2022-12-24 16:29:32', '2024-01-24 05:25:27', NULL, '<h3> GET FULLY MANAGED HOSTING SERVICES</h3>\r\n          <a href=\"https://dhsupcloud.com/about-us\">Get Started</a>', NULL, NULL, NULL, NULL),
(7, 'Blogs', 'blogs', NULL, NULL, NULL, 'DHS UP Cloud was established and operated by a team of energetic professionals with excellent technical expertise and experience with the goal of providing optimal IT infrastructure and facilities. We want to help businesses gain clarity through definite objectives and quantifiable results. As professionals in this field, we offer flexible, affordable, and progressive services and solutions.', NULL, 'Blogs :: Smartleads', 'Blogs :: Smartleads', 'Blogs :: Smartleads', 'blogs', 'uploads/cms/6470885502324.webp', 'published', NULL, NULL, '2022-12-24 16:29:45', '2023-06-13 02:56:54', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Gallery', 'galleries', NULL, NULL, NULL, 'DHS UP Cloud was established and operated by a team of energetic professionals with excellent technical expertise and experience with the goal of providing optimal IT infrastructure and facilities. We want to help businesses gain clarity through definite objectives and quantifiable results. As professionals in this field, we offer flexible, affordable, and progressive services and solutions.', NULL, 'Gallery :: Lighthouse', 'Gallery :: Lighthouse', 'Gallery :: Lighthouse', 'gallery', 'uploads/cms/64708848c1c26.webp', 'published', NULL, NULL, '2023-01-27 02:04:46', '2023-05-26 04:52:00', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'News', 'news', NULL, NULL, NULL, NULL, 'uploads/cms/659d3817eff54.jpg', 'Our Clients :: Gairola', 'Our Clients :: Gairola', 'Our Clients :: Gairola', 'news', 'uploads/cms/659d3817f143f.jpg', 'published', NULL, NULL, '2023-05-26 01:25:08', '2024-01-09 06:48:23', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Books', 'books', NULL, NULL, NULL, NULL, NULL, 'Our Team :: Smartleads', 'Our Team :: Smartleads', 'Our Team :: Smartleads', 'books', 'uploads/cms/659e50de8f644.jpg', 'published', NULL, NULL, '2023-05-26 06:46:33', '2024-01-10 02:40:06', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Services', 'services', '<div class=\"services-head\">\r\n<h4>services</h4>\r\n\r\n<p>We consectetur adipiscing elit tempor incididunt ut labore. Wondering ipsum dolor sit amet?</p>\r\n</div>', '<!--==================================== Home why ai section start================================-->\r\n<section class=\"why-ai-wrapp serv-why-ai\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"why-ai-img wow fadeInUp\"><img src=\"http://localhost/aic/uploads/uploads/650834c403fcf.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"why-ai-con wow fadeInUp\">\r\n<h5>Why AI Capital</h5>\r\n\r\n<p>Extensive Experience With o ur years of experience in the capital markets, we have advised companies across various industries &amp; geographies on successful flotations. Our deep understanding of the regulatory landscape, investor expectations, and market an dynamics allows us to provide valuable insights and guidance to our clients.</p>\r\n\r\n<p>Tailored Approach We recognize that every company is unique, and we tailor our advisory services to meet the specific needs &amp; objectives of each client. Our team takes personalized approach, combining industry expertise with a deep understanding of our client&#39;s business to deliver tailored strategies and solutions.</p>\r\n<a href=\"http://localhost/aic/about-us\">Read More </a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--==================================== Home why ai section end================================-->', '<p>dgerg</p>', NULL, NULL, NULL, NULL, NULL, 'services', 'uploads/cms/6509500a0e69d.png', 'published', NULL, NULL, '2023-06-07 04:58:16', '2023-09-19 02:37:45', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Terms Of Service', 'terms-of-service', '<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to Aicapital!</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt ultrices tincidunt. Suspendisse potenti. Donec vulputate mollis congue. Sed consequat scelerisque nisl, sit amet mollis quam mollis sed. Duis facilisis tellus vitae pharetra lobortis. Mauris venenatis id nunc eget viverra. Vivamus ac lorem sed erat sollicitudin rutrum eget sit amet velit. Aenean ornare et dolor non sollicitudin. Praesent ante felis, ultricies ac dui in, dignissim luctus orci. Donec porttitor felis ut urna condimentum, ut tincidunt nisl rutrum. Sed tempor metus tellus.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common', 'uploads/cms/648067a46b093.png', 'published', NULL, NULL, '2023-06-07 05:49:00', '2023-09-20 01:40:45', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'job counter', 'job-counter', '<p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide.</p>', '<div class=\"pxp-info-caption-list-item\"><img alt=\"-\" decoding=\"async\" src=\"http://localhost/pinoy/uploads/uploads/65b0b26764572.svg\" /> <span>Bring to the table win-win survival</span></div>\r\n\r\n<div class=\"pxp-info-caption-list-item\"><img alt=\"-\" decoding=\"async\" src=\"http://localhost/pinoy/uploads/uploads/65b0b26764572.svg\" /> <span>Capitalize on low hanging fruit to identify</span></div>\r\n\r\n<div class=\"pxp-info-caption-list-item\"><img alt=\"-\" decoding=\"async\" src=\"http://localhost/pinoy/uploads/uploads/65b0b26764572.svg\" /> <span>But I must explain to you how all this</span></div>', NULL, 'Millions of jobs. Find the one that suits you.', 'uploads/cms/65afbf64b61ed.jpg', NULL, NULL, NULL, 'jobs-counter', NULL, 'published', NULL, NULL, '2024-01-23 07:46:35', '2024-01-24 01:19:50', NULL, NULL, 2, NULL, NULL, NULL),
(47, 'customer login', 'customer-login', NULL, NULL, NULL, 'Welcome Back!', 'uploads/cms/65b0f59918080.png', NULL, NULL, NULL, 'login', NULL, 'published', NULL, NULL, '2024-01-24 06:01:33', '2024-01-24 06:05:40', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Forgot Password', 'forgot-password', NULL, NULL, NULL, NULL, 'uploads/cms/65b0f74bc6e7f.png', NULL, NULL, NULL, 'forgot-password', NULL, 'published', NULL, NULL, '2024-01-24 06:10:59', '2024-01-24 06:10:59', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Create an account', 'customer-register', NULL, NULL, NULL, NULL, 'uploads/cms/65b0f99ecf773.png', NULL, NULL, NULL, 'register', NULL, 'published', NULL, NULL, '2024-01-24 06:20:54', '2024-01-24 06:24:01', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Career', 'career', '<p>Here s why youll love it Pinoy Vacancy</p>', '<p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>', '<h3>Job Openings</h3>\r\n\r\n<p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>', 'We help companies and candidates find the right fit', 'uploads/cms/65b0fe098e1dd.png', NULL, NULL, NULL, 'career', 'uploads/cms/65b1027e08f15.png', 'published', NULL, NULL, '2024-01-24 06:39:45', '2024-01-30 00:39:41', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'teams', 'teams', '<h5>Work with the best</h5>\r\n\r\n<h2>MEET OUR TEAM</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>', NULL, NULL, 'We help companies and candidates find the right fit', 'uploads/cms/65b0fe2c0fa30.png', NULL, NULL, NULL, 'teams', 'uploads/cms/65b8c511441ed.png', 'published', NULL, NULL, '2024-01-24 06:40:20', '2024-01-30 04:18:33', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'job Category', 'categories', '<h4>Search by Category</h4>\r\n\r\n<p>Search your career opportunity with our categories</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'careerCategorList', NULL, 'published', NULL, NULL, '2024-01-30 05:10:17', '2024-01-30 05:18:24', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `country_id` int(11) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`) VALUES
(7, 'Food Offers', 'uploads/collections/63aac1b706026.png', NULL, NULL, 'Food-Offers', NULL, NULL, NULL, 'published', 'true', '2022-12-27 09:58:15', '2022-12-27 10:10:43', NULL, NULL, NULL, 1, 2),
(8, 'Republic Day Offers', 'uploads/collections/63b4675f2b8ec.png', NULL, NULL, 'Republic-Day-Offers', NULL, NULL, NULL, 'published', 'true', '2022-12-27 10:07:47', '2023-01-03 17:35:27', NULL, NULL, NULL, 1, 4),
(9, 'Electronics Offers', 'uploads/collections/63b47924417f6.png', NULL, NULL, 'electronics-offers', 'Electronics Offers', 'Electronics Offers', 'Electronics Offers', 'published', 'true', '2023-01-03 18:51:16', '2023-01-03 18:51:16', NULL, NULL, NULL, 1, 1),
(10, 'Fashion Offers', 'uploads/collections/63b47d13cdb2d.png', NULL, NULL, 'fashion-offers', 'Fashion Offers', 'Fashion Offers', 'Fashion Offers', 'published', 'true', '2023-01-03 19:08:03', '2023-01-03 19:08:03', NULL, NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contactus_requests`
--

CREATE TABLE `contactus_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_request` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guests` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus_requests`
--

INSERT INTO `contactus_requests` (`id`, `created_at`, `updated_at`, `name`, `email`, `mobile`, `message`, `date_of_request`, `budget`, `guests`) VALUES
(196, '2023-06-09 06:14:00', '2023-06-09 06:14:34', 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'Hello Form testing', NULL, NULL, NULL),
(197, '2023-06-13 02:14:57', '2023-06-13 02:14:57', 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', '89764686', 'tfertgegy4r5tyht5r4yh', NULL, NULL, NULL),
(198, '2023-06-13 02:17:53', '2023-06-13 02:17:53', 'home form', 'vishavjeet@qmbsolution.in', '89764686', 'home contact us form data', NULL, NULL, NULL),
(199, '2023-06-13 02:28:45', '2023-06-13 02:28:45', 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', NULL, 'cpageeeeeeeeeeeeeeeeeeeeeeeeee', NULL, NULL, NULL),
(200, '2023-06-13 02:29:44', '2023-06-13 02:29:44', 'home again', 'vishavjeet@qmbsolution.in', '89764686', 'home againnnnn', NULL, NULL, NULL),
(201, '2023-06-13 02:51:53', '2023-06-13 02:51:53', 'john deo', 'vishavjeet@qmbsolution.in', NULL, 'GHRTHRTHRTTH', NULL, NULL, NULL),
(202, '2023-06-14 00:50:53', '2023-06-14 00:50:53', 'vishavjeet kumar', 'vishavjeet@qmbsolution.in', NULL, 'fgyhfhtgfjhrtuty', NULL, NULL, NULL),
(203, '2023-09-19 05:01:29', '2023-09-19 05:01:29', 'fggffgfg', 'test@gmail.com', '9854234610', 'test contact page', NULL, NULL, NULL),
(204, '2024-01-09 06:00:31', '2024-01-09 06:00:31', 'Alam', 'badrealam.dhs@gmail.com', '9854234610', 'asd fddggd dgcvdgdg dgdg', NULL, NULL, NULL),
(205, '2024-01-24 05:50:12', '2024-01-24 05:50:12', 'Badre alam', 'badrealam.dhs@gmail.com', NULL, 'haa aha  ha ha', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `ordering`) VALUES
(1, 'India', 'uploads/countries/63a773222a1ee.png', NULL, NULL, 'india', NULL, NULL, NULL, 'published', 'true', '2022-12-20 18:37:51', '2022-12-26 07:42:03', NULL, NULL, NULL, 0),
(2, 'Argentina', 'uploads/countries/63a77340b9943.png', NULL, NULL, 'argentina', NULL, NULL, NULL, 'published', 'true', '2022-12-24 16:16:40', '2022-12-24 20:00:11', NULL, NULL, NULL, 0),
(3, 'Australia', 'uploads/countries/63a77352e47d2.png', NULL, NULL, 'australia', NULL, NULL, NULL, 'published', 'true', '2022-12-24 16:16:58', '2022-12-24 20:00:13', NULL, NULL, NULL, 0),
(4, 'Belarus', 'uploads/countries/63a77368acf98.png', NULL, NULL, 'belarus', NULL, NULL, NULL, 'published', 'true', '2022-12-24 16:17:20', '2022-12-25 07:02:55', NULL, NULL, NULL, 0),
(5, 'Brazil', 'uploads/countries/63a77375a723d.png', NULL, NULL, 'Brazil', NULL, NULL, NULL, 'published', 'true', '2022-12-24 16:17:33', '2022-12-24 20:00:16', NULL, NULL, NULL, 0),
(6, 'Chile', 'uploads/countries/63a773823e22e.png', NULL, NULL, 'Chile', NULL, NULL, NULL, 'published', 'true', '2022-12-24 16:17:46', '2022-12-25 07:02:23', NULL, NULL, NULL, 9),
(7, 'United States', 'uploads/countries/63b19931e2c7a.png', NULL, NULL, 'United-states', NULL, NULL, NULL, 'published', 'true', '2022-12-26 07:38:08', '2023-01-01 14:31:13', NULL, NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `description`, `code`, `amount`, `type`, `created_at`, `updated_at`, `property_id`) VALUES
(1, 'Discount 50%', NULL, 'CODE50', '50', 'per', '2021-07-22 06:44:12', '2022-12-13 16:47:11', 9),
(2, 'Discount 50', NULL, 'CODE50EXACT', '50', 'excat', '2021-07-22 06:44:43', '2022-12-13 16:47:52', 9),
(4, 'Pay by Venmo to save 3% processing fee!', NULL, 'VENMO.03%', '3', 'per', '2022-12-15 18:29:35', '2022-12-15 18:29:35', 7);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', 'it@qmbsolution.in', 'admin', NULL, '$2y$10$xRCRRD.NV5wBQ3CzhmuAA.8o.wZrQpYGYfdiDnVHiKt2fJ725d1wa', 'AO0JWQenSKsGQDNXe915KhaNVGFdGNxXTUe3Pb3vPpYgluDdzTImR2YyYIVk', '2022-06-08 14:49:05', '2023-03-06 07:13:03', 0),
(5, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$GFoI/1i9iQzTfIoE0EjtF.ApgO8weK1wcE9oZsfjduG4t2Mmu05HS', NULL, '2023-06-13 23:32:04', '2024-01-10 05:13:05', 1),
(6, 'badre alam', 'badrealam.dhs@gmail.com', 'candidate', NULL, '$2y$10$iUYuVOk0lnC4hPiGpoGpJuKOxVUP8vDy4tYWr/ssLQuxcuCVXu9ti', NULL, '2024-02-06 02:48:42', '2024-02-06 05:25:59', 1),
(7, 'ffggffg gffgfggffg', 'sushil@digitalhubsolution.com', 'candidate', NULL, '$2y$10$cgMQ4x5m9l8wf8UZdXOO5etq4GluQaKpvY4RFKG7qhDtvJTetNrjC', NULL, '2024-02-06 03:49:07', '2024-02-06 03:49:07', 1),
(8, 'dfdfff fdffdfdd', 'sdsdd@gmail.com', 'candidate', NULL, '$2y$10$K0hZQ1/QwcW34Gck6Jb1PeJUhc25F7RbGbT1BIfEO.SK9xpfMcABq', NULL, '2024-02-06 04:12:38', '2024-02-06 04:12:38', 1),
(9, 'fsfsfsd fdfdfd', 'ssffff@gmail.com', 'candidate', NULL, '$2y$10$kgaHR2KutvJb3sS8dU6IJec4kkwfq4bfzUg.q4RjKYdiSXOBm237y', NULL, '2024-02-06 04:13:41', '2024-02-06 04:13:41', 1),
(10, 'dfdffd dffdfd', 'narottam@digitalhubsolution.net', 'candidate', NULL, '$2y$10$y6poxhjk9Rt0KbGMQrk4ZOZdV3CLf2RXeqh9b1UCP4dKbBTuowoUu', NULL, '2024-02-06 04:40:37', '2024-02-06 04:40:37', 1),
(11, 'cvccc ', 'adminggg@gmail.com', 'company', NULL, '$2y$10$x5kF5mm6SqA6pmV0i3Yvyu1CzsoGQZt3bF9dL7/adlBHLam6gymh2', NULL, '2024-02-06 04:41:16', '2024-02-06 04:41:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `title`, `seo_url`, `image`, `description`, `publish`, `is_home`, `created_at`, `updated_at`, `ordering`, `type`) VALUES
(19, 'Mumbai', '', NULL, NULL, 'published', 'true', '2023-06-12 07:19:20', '2024-01-30 02:51:54', NULL, NULL),
(21, 'Delhi NCR', '', NULL, NULL, 'published', 'true', '2023-06-12 07:23:13', '2024-01-30 02:51:36', NULL, NULL),
(22, 'Noida', '', NULL, NULL, 'published', 'true', '2023-06-12 07:23:24', '2024-01-30 02:51:20', NULL, NULL),
(24, 'Delhi', '', NULL, NULL, 'published', 'true', '2023-06-12 23:13:52', '2024-01-30 02:51:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templetes`
--

CREATE TABLE `email_templetes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templetes`
--

INSERT INTO `email_templetes` (`id`, `email_type`, `email_subject`, `email_body`, `created_at`, `updated_at`) VALUES
(2, 'thank_you_for_feedback_user', 'Your query on  Aicapital', '<meta http–equiv=“Content-Type” content=“text/html; charset=UTF-8” /><meta http–equiv=“X-UA-Compatible” content=“IE=edge” /><meta name=“viewport” content=“width=device-width, initial-scale=1.0 “ />\r\n<style type=\"text/css\">@media screen {\r\n	@font-face {\r\n		font-family: \'Lato\';\r\n		font-style: normal;\r\n		font-weight: 400;\r\n		src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');\r\n	}\r\n	body {margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;font-family: \"Lato\", \"Lucida Grande\", \"Lucida Sans Unicode\", Tahoma, Sans-Serif;}\r\n	table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}\r\n	table td {border-collapse: collapse;}\r\n	strong {font-weight: bold !important;}\r\n	td img {-ms-interpolation-mode:bicubic; display:block; width:auto; max-width:auto; height:auto; margin:auto;display:block!important;border:0px!important;}\r\n	td a {text-decoration:none !important;}\r\n\r\n	@media only screen and (min-width:481px) and (max-width:699px) {\r\n\r\n\r\n	}\r\n\r\n	@media screen and (max-width: 480px) {\r\n\r\n\r\n\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:700px;\" width=\"700\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 30px; font-weight: 600; margin: 20px 0 10px 0; color: #222222;\">Thank you</span></div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"left\" bgcolor=\"#f9f9f9\" style=\"padding:20px;\" valign=\"top\">\r\n			<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" valign=\"top\">\r\n						<h4 style=\"font-size: 17px; color: #222; font-weight: 600\">Dear {username},</h4>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\"><span style=\"color:#2980b9;\">Thank you for reaching out to us.</span></p>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\"><span style=\"color:#2980b9;\">We will review your query and revert in next 12-24 hours.</span><br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\"><span style=\"display: block; font-size: 16px; font-weight: 600; margin: 0px 0 10px 0; color: #222222;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px;\">Copyright &copy; 2022&nbsp;Aicapital, All rights reserved.</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2021-07-22 00:41:46', '2023-09-20 01:43:38'),
(3, 'feedback_admin', 'Query on  Aicapital', '<title></title>\r\n<meta http–equiv=“Content-Type” content=“text/html; charset=UTF-8” /><meta http–equiv=“X-UA-Compatible” content=“IE=edge” /><meta name=“viewport” content=“width=device-width, initial-scale=1.0 “ />\r\n<style type=\"text/css\">@media screen {\r\n	@font-face {\r\n		font-family: \'Lato\';\r\n		font-style: normal;\r\n		font-weight: 400;\r\n		src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');\r\n	}\r\n	body {margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;font-family: \"Lato\", \"Lucida Grande\", \"Lucida Sans Unicode\", Tahoma, Sans-Serif;}\r\n	table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}\r\n	table td {border-collapse: collapse;}\r\n	strong {font-weight: bold !important;}\r\n	td img {-ms-interpolation-mode:bicubic; display:block; width:auto; max-width:auto; height:auto; margin:auto;display:block!important;border:0px!important;}\r\n	td a {text-decoration:none !important;}\r\n\r\n	@media only screen and (min-width:481px) and (max-width:699px) {\r\n\r\n\r\n	}\r\n\r\n	@media screen and (max-width: 480px) {\r\n\r\n\r\n\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:700px;\" width=\"700\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 30px; font-weight: 600; margin: 20px 0 10px 0; color: #222222;\">New feedback</span></div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"left\" bgcolor=\"#f9f9f9\" style=\"padding:20px;\" valign=\"top\">\r\n			<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" valign=\"top\">\r\n						<h4 style=\"font-size: 17px; color: #222; font-weight: 600\">Hey Aicapital,</h4>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\">New Feedback.</p>\r\n\r\n						<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td align=\"right\" style=\"padding: 10px;\" valign=\"top\"><strong>Name :</strong></td>\r\n									<td align=\"left\" style=\"padding: 10px;\" valign=\"top\">{username}</td>\r\n								</tr>\r\n								<tr>\r\n									<td align=\"right\" style=\"padding: 10px;\" valign=\"top\"><strong>Email :</strong></td>\r\n									<td align=\"left\" style=\"padding: 10px;\" valign=\"top\">{useremail}</td>\r\n								</tr>\r\n								<tr>\r\n									<td align=\"right\" style=\"padding: 10px;\" valign=\"top\"><strong>Mobile:</strong></td>\r\n									<td align=\"left\" style=\"padding: 10px;\" valign=\"top\">{usermobile}</td>\r\n								</tr>\r\n								<tr>\r\n									<td align=\"right\" style=\"padding: 10px;\" valign=\"top\"><strong>Message :</strong></td>\r\n									<td align=\"left\" style=\"padding: 10px;\" valign=\"top\">\r\n									<pre>\r\n{usermessage}</pre>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 16px; font-weight: 600; margin: 0px 0 10px 0; color: #222222;\">Thanks for reading!</span></div>\r\n\r\n						<p style=\" font-size: 14px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 5px 0;\">Copyright &copy; 2022 Aicapital, All rights reserved.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2021-07-22 00:42:16', '2023-09-20 01:43:10'),
(7, 'newsletter', 'Newsletter Request', '<title></title>\r\n<meta http–equiv=“Content-Type” content=“text/html; charset=UTF-8” /><meta http–equiv=“X-UA-Compatible” content=“IE=edge” /><meta name=“viewport” content=“width=device-width, initial-scale=1.0 “ />\r\n<style type=\"text/css\">@media screen {\r\n	@font-face {\r\n		font-family: \'Lato\';\r\n		font-style: normal;\r\n		font-weight: 400;\r\n		src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');\r\n	}\r\n	body {margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;font-family: \"Lato\", \"Lucida Grande\", \"Lucida Sans Unicode\", Tahoma, Sans-Serif;}\r\n	table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}\r\n	table td {border-collapse: collapse;}\r\n	strong {font-weight: bold !important;}\r\n	td img {-ms-interpolation-mode:bicubic; display:block; width:auto; max-width:auto; height:auto; margin:auto;display:block!important;border:0px!important;}\r\n	td a {text-decoration:none !important;}\r\n\r\n	@media only screen and (min-width:481px) and (max-width:699px) {\r\n\r\n\r\n	}\r\n\r\n	@media screen and (max-width: 480px) {\r\n\r\n\r\n\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:700px;\" width=\"700\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 30px; font-weight: 600; margin: 20px 0 10px 0; color: #222222;\">New Newsletter</span></div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"left\" bgcolor=\"#f9f9f9\" style=\"padding:20px;\" valign=\"top\">\r\n			<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" valign=\"top\">\r\n						<h4 style=\"font-size: 17px; color: #222; font-weight: 600\">Hey Aicapital,</h4>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\">New Newsletter.</p>\r\n\r\n						<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n							<tbody>\r\n								<tr>\r\n									<td align=\"right\" style=\"padding: 10px;\" valign=\"top\"><strong>Email :</strong></td>\r\n									<td align=\"left\" style=\"padding: 10px;\" valign=\"top\">{useremail}</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 16px; font-weight: 600; margin: 0px 0 10px 0; color: #222222;\">Thanks for reading!</span></div>\r\n\r\n						<p style=\" font-size: 14px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 5px 0;\">Copyright &copy; 2022 Aicapital, All rights reserved.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2021-07-22 01:14:01', '2023-09-20 01:43:25'),
(8, 'forgotpassword', 'Forgot Password Pinoy', '<meta http–equiv=“Content-Type” content=“text/html; charset=UTF-8” /><meta http–equiv=“X-UA-Compatible” content=“IE=edge” /><meta name=“viewport” content=“width=device-width, initial-scale=1.0 “ />\r\n<style type=\"text/css\">@media screen {\r\n	@font-face {\r\n		font-family: \'Lato\';\r\n		font-style: normal;\r\n		font-weight: 400;\r\n		src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');\r\n	}\r\n	body {margin:0px !important; padding:0px !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;font-family: \"Lato\", \"Lucida Grande\", \"Lucida Sans Unicode\", Tahoma, Sans-Serif;}\r\n	table {border-spacing:0; mso-table-lspace:0pt; mso-table-rspace:0pt;}\r\n	table td {border-collapse: collapse;}\r\n	strong {font-weight: bold !important;}\r\n	td img {-ms-interpolation-mode:bicubic; display:block; width:auto; max-width:auto; height:auto; margin:auto;display:block!important;border:0px!important;}\r\n	td a {text-decoration:none !important;}\r\n\r\n	@media only screen and (min-width:481px) and (max-width:699px) {\r\n\r\n\r\n	}\r\n\r\n	@media screen and (max-width: 480px) {\r\n\r\n\r\n\r\n	}\r\n</style>\r\n<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:700px;\" width=\"700\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\">\r\n						<div><span style=\"display: block; font-size: 30px; font-weight: 600; margin: 20px 0 10px 0; color: #222222;\">Thank you</span></div>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"left\" bgcolor=\"#f9f9f9\" style=\"padding:20px;\" valign=\"top\">\r\n			<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"left\" valign=\"top\">\r\n						<h4 style=\"font-size: 17px; color: #222; font-weight: 600\">New Password: {password}</h4>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\"><span style=\"color:#2980b9;\">Thank you for reaching out to us.</span></p>\r\n\r\n						<p style=\" font-size: 15px; color: #454545; line-height: 24px; font-weight: 400; margin: 0 0 15px 0; text-align: left\"><span style=\"color:#2980b9;\">Please visit to Login Page</span><br />\r\n						&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td align=\"center\" bgcolor=\"#ffffff\" style=\"padding:15px;\" valign=\"top\">\r\n			<table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td align=\"center\" valign=\"top\"><span style=\"display: block; font-size: 16px; font-weight: 600; margin: 0px 0 10px 0; color: #222222;\"><span style=\"color: rgb(51, 51, 51); font-size: 13px;\">Copyright &copy; 2022&nbsp;Pinoy, All rights reserved.</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2024-02-06 04:55:40', '2024-02-06 04:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_ger` longtext COLLATE utf8mb4_unicode_ci,
  `answer_ger` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `type`, `created_at`, `updated_at`, `question_ger`, `answer_ger`) VALUES
(1, 'Why choose Lighthouse IoT Solutions  instead of regular electricity meters?', '<p>Lighthouse IoT Solutions is focused on quality and technical excellence. We are among the leading startups manufacturing smart meters in India. We are the first choice of our customers. When a customer chooses our smart meters, they get a quality certified product with best in class support and service.</p>', '24', '2023-02-01 08:09:16', '2023-05-30 02:14:35', NULL, NULL),
(5, 'Salient features of our software apps.', '<ul class=\"circle\">\r\n	<li><i>Up to the minute power consumption details.</i></li>\r\n	<li><i>Daily and monthly usage comparison graph. </i></li>\r\n	<li><i>Current balance available for prepay meters.</i></li>\r\n	<li><i>Emergency support contact details.</i></li>\r\n</ul>', NULL, '2023-05-30 02:15:03', '2023-05-30 02:15:03', NULL, NULL),
(6, 'dfwedg', '<p>fe</p>', '31', '2023-06-09 05:33:06', '2023-06-09 05:36:07', NULL, NULL),
(7, 'DO YOU WANT TO IMPROVE ROI ON YOUR MARKETING EFFORTS?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '2023-06-12 06:23:15', '2023-06-12 06:31:40', NULL, NULL),
(8, 'DO YOU WANT TO IMPROVE ROI ON YOUR MARKETING EFFORTS? 2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 2</p>', NULL, '2023-06-12 06:23:44', '2023-06-12 06:31:32', NULL, NULL),
(9, 'DO YOU WANT TO IMPROVE ROI ON YOUR MARKETING EFFORTS? 3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 3</p>', '42', '2023-06-12 06:24:14', '2023-06-12 06:24:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `type`, `thumbnail`, `created_at`, `updated_at`, `status`) VALUES
(1, 'uploads/galleries/65c0d3dec9349.png', '17', NULL, '2023-01-27 02:05:36', '2024-02-05 06:56:09', 'active'),
(2, 'uploads/galleries/65c0d3d275310.png', '17', NULL, '2023-01-27 02:05:39', '2024-02-05 06:55:54', 'active'),
(3, 'uploads/galleries/65c0d3c2b7e6b.png', '17', NULL, '2023-01-27 02:05:41', '2024-02-05 06:55:38', 'active'),
(4, 'uploads/galleries/65c0d3acac469.png', '17', NULL, '2023-01-27 02:05:42', '2024-02-05 06:55:16', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `ical_events`
--

CREATE TABLE `ical_events` (
  `id` int(11) NOT NULL,
  `ppp_id` int(15) NOT NULL,
  `ical_link` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT 'red',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `text` text NOT NULL,
  `event_pid` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `booking_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ical_import_list`
--

CREATE TABLE `ical_import_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ical_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'red',
  `property_id` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attraction_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` int(11) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `is_home` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_description` text COLLATE utf8mb4_unicode_ci,
  `cta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_anchor` text COLLATE utf8mb4_unicode_ci,
  `broucher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `seo_url`, `shortDescription`, `mediumDescription`, `longDescription`, `description`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `templete`, `bannerImage`, `publish`, `footer_section`, `header_section`, `created_at`, `updated_at`, `attraction_image`, `is_parent`, `ordering`, `is_home`, `cta_description`, `cta_image`, `cta_title`, `cta_anchor`, `broucher`, `parent_id`) VALUES
(13, 'Real Estate', 'real-estate', NULL, '<p>HELLO&nbsp;LongDescription</p>', '<p>HELLO&nbsp;LongDescription</p>', 'Fundraising & International\r\n                                            Business  Development  for\r\n                                            Darvis Inc', 'uploads/locations/650847ddc5f47.png', 'Test', 'Test', 'Test', 'content-writing-services', 'uploads/locations/6480752784f8a.png', 'published', NULL, NULL, '2023-06-07 06:36:21', '2023-09-19 23:46:06', NULL, NULL, 2, 'true', NULL, NULL, NULL, NULL, NULL, 0),
(14, 'Venture Development', 'venture-development', NULL, NULL, NULL, 'Fundraising & International\r\n                                                Business  Development  for\r\n                                                Darvis Inc', 'uploads/locations/65084a6740ddc.png', 'Venture Development', 'Venture Development', 'Venture Development', 'content-writing-services', NULL, 'published', NULL, NULL, '2023-09-18 07:32:31', '2023-09-18 07:33:41', NULL, 1, 1, 'true', NULL, NULL, NULL, NULL, NULL, 0),
(15, 'Strategic advisory', 'strategic-advisory', NULL, NULL, NULL, 'Fundraising & International\r\n                                                Business  Development  for\r\n                                                Darvis Inc', 'uploads/locations/65084b3bc7d59.png', 'Strategic advisory', 'Strategic advisory', 'Strategic advisory', 'content-writing-services', NULL, 'published', NULL, NULL, '2023-09-18 07:36:03', '2023-09-18 07:36:03', NULL, 1, 3, 'true', NULL, NULL, NULL, NULL, NULL, 0),
(18, 'Real estate case Study case', 'real-state-case-study-case', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<h2>Nam aliquet iaculis arcu, vel placerat ligula. Nullam posuere, risus vel pharetra pretium, risus eros laoreet metus, at condimentum libero ex pulvinar velit.</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>', '<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College thin Virginia, looked up one of the more that obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section</p>\r\n\r\n<p>Established in 2005 as Anglo Indian Group Limited, our company initially mistaken form a concentrated on cross-border real estate investment and development between window the United Kingdom and India.</p>\r\n\r\n<p>Over the years the breadth of our business has significantly increased to include Private an Equity and Venture Capital advisory services accross multiple regions and explamin that a countries. Therefore, in 2022 we rebranded the company as AI Capital Partners to window reflect this business expansion. But I explain to you how all this mistaken idea of pleasure &amp; praising pain was born and I will give you a complete account of the system .</p>', NULL, 'uploads/locations/650a84025d4d3.jpeg', 'Real estate case Study case', 'Real estate case Study case', 'Real estate case Study case', 'content-writing-services', 'uploads/locations/650a84026060d.png', 'published', NULL, NULL, '2023-09-19 23:58:21', '2023-09-20 00:47:44', 'uploads/locations/650a8dfd5d5d3.png', NULL, 1, 'false', 'Real estate case', NULL, 'Real estate case Study cases', NULL, NULL, 13),
(19, 'Venture Development', 'case-studies-venture-development', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard what a McClintock, Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going in through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et through Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. who that first line of comes from a line in sectio</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden that middle of text. All the best generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 2k mini Latin words combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. he generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions a have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, 'uploads/locations/650a90b2993b0.jpeg', 'Venture Development', 'Venture Development', 'Venture Development', 'content-writing-services', 'uploads/locations/650a90b29b459.png', 'published', NULL, NULL, '2023-09-20 00:56:58', '2023-09-20 00:56:58', 'uploads/locations/650a90b299cb8.png', NULL, 1, 'false', 'THE MARKET, PRODUCT, AND TEAM', NULL, 'WHAT DO VENTURE CAPITALISTS LOOK FOR IN AN EARLY-STAGE INVESTMENT?', NULL, NULL, 14),
(20, 'IN-DEPTH PERFORMANCE', 'case-studies-venture-development650a936113085', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus. Etiam consectetur massa in nisi porta sodales. Cras non mattis lacus, vel porta risus. Cras auctor nunc luctus, lobortis ex quis, vulputate erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae faucibus ligula.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus tortor ex, quis aliquet massa posuere quis. Donec condimentum in tellus sed cursus.</p>', '<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College thin Virginia, looked up one of the more that obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section</p>\r\n\r\n<h6>Our Journey:</h6>\r\n\r\n<p>Established in 2005 as Anglo Indian Group Limited, our company initially mistaken form a concentrated on cross-border real estate investment and development between window the United Kingdom and India.</p>\r\n\r\n<p>Over the years the breadth of our business has significantly increased to include Private an Equity and Venture Capital advisory services accross multiple regions and explamin that a countries. Therefore, in 2022 we rebranded the company as AI Capital Partners to window reflect this business expansion. But I explain to you how all this mistaken idea of pleasure &amp; praising pain was born and I will give you a complete account of the system .</p>', NULL, NULL, 'uploads/locations/650a936110e96.jpeg', 'IN-DEPTH PERFORMANCE', 'IN-DEPTH PERFORMANCE', 'IN-DEPTH PERFORMANCE', 'content-writing-services', 'uploads/locations/650a93611309a.png', 'published', NULL, NULL, '2023-09-20 01:08:25', '2023-09-20 01:13:07', 'uploads/locations/650a93611179c.png', NULL, 1, 'false', 'LOREM IPSUM', 'uploads/locations/650a947b4f4d6.png', 'IN-DEPTH PERFORMANCE MARKETING CASE STUDY WITH SOCIAL MEDIA', NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `country_id` int(11) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`) VALUES
(1, 'Dell', 'uploads/manufactures/63a78bb21aea4.jpg', NULL, NULL, 'Dell', NULL, NULL, NULL, 'published', 'true', '2022-12-20 18:31:37', '2022-12-24 20:00:32', NULL, NULL, NULL, 1, 0);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_14_195410_create_activity_log_table', 2),
(6, '2022_06_14_195411_add_event_column_to_activity_log_table', 2),
(7, '2022_06_14_195412_add_batch_uuid_column_to_activity_log_table', 2),
(8, '2022_06_14_210436_create_properties_table', 3),
(9, '2022_06_14_210449_create_property_galleries_table', 3),
(10, '2022_06_14_210515_create_property_amenity_groups_table', 3),
(11, '2022_06_14_210523_create_property_amenities_table', 3),
(13, '2022_06_21_192652_create_property_rates_table', 4),
(14, '2022_09_16_223822_create_booking_requests_table', 5),
(15, '2022_12_01_183657_payment_data_logs', 6),
(16, '2023_06_13_052514_create_weoffers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'vishavjeet@qmbsolution.in', '2023-06-13 02:34:33', '2023-06-13 02:34:33'),
(6, 'vishavjeet@qmbsolunbtion.in', '2023-06-13 06:31:32', '2023-06-13 06:31:32'),
(7, 'it@qmbsolution.in', '2024-01-10 00:22:24', '2024-01-10 00:22:24'),
(8, 'badrealam.dhs@gmail.com', '2024-02-05 02:36:27', '2024-02-05 02:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `title`, `image`, `created_at`, `updated_at`, `description`) VALUES
(26, 'partner2', 'uploads/our-clients/65b897e2c05c1.png', '2023-05-30 02:16:24', '2024-01-30 01:02:02', NULL),
(27, 'partner1', 'uploads/our-clients/65b897d772d0f.png', '2023-05-30 02:16:31', '2024-01-30 01:01:51', NULL),
(28, 'partner3', 'uploads/our-clients/65b897cb3a23b.png', '2024-01-09 02:04:24', '2024-01-30 01:01:39', NULL),
(29, 'partner4', 'uploads/our-clients/65b897f20fe12.png', '2024-01-30 01:02:18', '2024-01-30 01:02:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `name`, `message`, `image`, `email`, `mobile`, `profile`, `type`, `country`, `state`, `city`, `created_at`, `updated_at`, `facebook`, `instagram`, `twitter`, `linkedin`) VALUES
(6, 'Nishikant', NULL, 'uploads/our-teams/650a97990915b.png', 'nishikant@lighthouseiot.in', '9879879879', 'Production Operation', NULL, NULL, NULL, NULL, '2023-05-26 06:44:04', '2023-09-20 01:26:25', NULL, NULL, NULL, NULL),
(7, 'crita', NULL, 'uploads/our-teams/650a978ad47f7.png', 'khemchand@lighthouseiot.in', NULL, 'Sales', NULL, NULL, NULL, NULL, '2023-05-26 06:44:04', '2023-09-20 01:27:34', NULL, NULL, NULL, NULL),
(8, 'Sanjay Budhwar', NULL, 'uploads/our-teams/650a977cd2cff.jpg', 'sbudhwar@lighthouseiot.in', NULL, 'CEO', NULL, NULL, NULL, NULL, '2023-05-26 06:44:04', '2023-09-20 01:25:56', NULL, NULL, NULL, NULL),
(9, 'Reverse Mortage List', NULL, 'uploads/our-teams/650a976ed96c0.png', NULL, NULL, 'Specilist', NULL, NULL, NULL, NULL, '2023-06-13 01:32:25', '2023-09-20 01:25:42', 'sfff', 'fss', 'fs', 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vishavjeet@qmbsolution.com', '$2y$10$7hrHFn2fhkB9MdK0Fye0G.Z7BcAGm4cejc1pX18kVwADg5jiYpJF6', '2023-06-07 02:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_id` int(11) NOT NULL,
  `receipt_url` text COLLATE utf8mb4_unicode_ci,
  `customer_id` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_transaction` text COLLATE utf8mb4_unicode_ci,
  `tran_id` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'stripe',
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('mobbindtechnolog', '2024-05-05 16:38:27', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry_now_requests`
--

CREATE TABLE `product_enquiry_now_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `meta_title` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_trending` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'false',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `discounted_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `collection_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `manufacture_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_url` text COLLATE utf8mb4_unicode_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `verified_on` date DEFAULT NULL,
  `badge_text` text COLLATE utf8mb4_unicode_ci,
  `no_of_use` int(11) DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `exclusive` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties_rates_group`
--

CREATE TABLE `properties_rates_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `start_date_timestamp` bigint(20) NOT NULL,
  `end_date` date NOT NULL,
  `end_date_timestamp` bigint(20) NOT NULL,
  `price` double DEFAULT NULL,
  `is_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `platform_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'airbnb',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `base_price` double DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `min_stay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_min_stay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_weekly` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_monthly` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_price` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_price` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monday_price` double DEFAULT NULL,
  `tuesday_price` double DEFAULT NULL,
  `wednesday_price` double DEFAULT NULL,
  `thrusday_price` double DEFAULT NULL,
  `friday_price` double DEFAULT NULL,
  `saturday_price` double DEFAULT NULL,
  `sunday_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_amenities`
--

CREATE TABLE `property_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_amenity_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_amenity_groups`
--

CREATE TABLE `property_amenity_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_fees`
--

CREATE TABLE `property_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Excat',
  `fee_apply` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'total',
  `fee_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_galleries`
--

CREATE TABLE `property_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorting` bigint(20) NOT NULL DEFAULT '0',
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_rates`
--

CREATE TABLE `property_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_date` date NOT NULL,
  `single_date_timestamp` bigint(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `is_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `platform_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'airbnb',
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `base_price` decimal(8,2) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `min_stay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_min_stay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_weekly` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_monthly` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_rooms`
--

CREATE TABLE `property_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_title` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_sub_title` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_description` longtext COLLATE utf8mb4_unicode_ci,
  `room_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_room_items`
--

CREATE TABLE `property_room_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_room_title` varchar(1025) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_room_sub_title` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_room_description` longtext COLLATE utf8mb4_unicode_ci,
  `sub_room_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `room_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_spaces`
--

CREATE TABLE `property_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `space_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_image` varchar(1025) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_status` longtext COLLATE utf8mb4_unicode_ci,
  `space_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_spaces`
--

INSERT INTO `property_spaces` (`id`, `property_id`, `created_at`, `updated_at`, `space_name`, `space_image`, `space_status`, `space_type`) VALUES
(1, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Supply Voltage', 'uploads/uploads/files/64709231c9e68.png', '240V', 'SPECIFICATION'),
(2, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'On-off Control', 'uploads/uploads/files/64709231cc337.png', '24hr/ Relay Control', 'SPECIFICATION'),
(3, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Communication Modes', 'uploads/uploads/files/64709231cdd04.png', 'GSM/2G/3G/4G', 'SPECIFICATION'),
(4, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Compatible with', 'uploads/uploads/files/64709231cf6e1.png', 'Single or three-phase motor', 'SPECIFICATION'),
(5, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Dimension', 'uploads/uploads/files/64709231d0f9d.png', '(262 X 180 X 86)', 'SPECIFICATION'),
(6, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Accuracy Class', 'uploads/uploads/files/64709231d2a73.png', 'Class-1', 'SPECIFICATION'),
(7, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Functions Automatically', 'uploads/uploads/files/64709231d435c.png', 'Constantly peering into the water tank to turn off the motor once the tank is full can be annoying and time-consuming. Because the technique is totally automated, a pump controller eliminates this obstacle entirely. Because of timer switches, the motor will turn on and off on its own whenever the water level in the tank reaches the required level.', 'FEATURES'),
(8, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Conserves Energy', 'uploads/uploads/files/64709231d5cf7.png', 'Water level controllers that regulate the water level automatically save energy. They accomplish this by turning off the motor automatically when the tank is full and when there is no water flow to the tank. This involves using less water and energy to control a water supply.', 'FEATURES'),
(9, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Saves Money', 'uploads/uploads/files/64709231d76e7.png', 'Water level controllers help to save electricity and, as a result, money. Water is handled using these technologies, which means that wasted water and electricity are kept to a minimum.', 'FEATURES'),
(10, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Low-maintenance', 'uploads/uploads/files/64709231d8e8d.png', 'Pump controllers are low-maintenance devices that last a long period with minimum upkeep. They have stainless conducting electrodes that are plastic-coated. They are well-known for their long lifespan and low maintenance.', 'FEATURES'),
(11, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Reliable Design', 'uploads/uploads/files/64709231da9f5.png', 'The solid-state electronics in the latest models help to eliminate the durability issues experienced in older designs. With an innovative modular design, they not only help to alleviate durability difficulties but also produce significant savings throughout the life of the unit.', 'FEATURES'),
(12, '4', '2023-05-26 05:34:17', '2023-05-30 06:53:32', 'Easy installation', 'uploads/uploads/files/64709231dc480.png', 'When compared to the lifespan of the original design, these new solid-state electronics and integrated electronics provide improved performance, hassle-free installation, and cheaper operating costs over time.', 'FEATURES'),
(25, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Standard Applicable', 'uploads/uploads/files/64709231c9e68.png', 'IS: 16444, CBIP88, with latest amendments', 'SPECIFICATION'),
(26, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Voltage', 'uploads/uploads/files/64709231cc337.png', '240 V Phase to Neutral', 'SPECIFICATION'),
(27, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Power Factor', 'uploads/uploads/files/64709231cdd04.png', 'Zero Lag – Unity – Zero Lead', 'SPECIFICATION'),
(28, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Terminal Cover', 'uploads/uploads/files/64709231cf6e1.png', 'ETBC without any groove Polycarbonate - Transparent', 'SPECIFICATION'),
(29, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Base', 'uploads/uploads/files/64709231d0f9d.png', 'Polycarbonate / Engineering Plastic', 'SPECIFICATION'),
(30, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Rated Frequency', 'uploads/uploads/files/64709231d2a73.png', '50 Hz', 'SPECIFICATION'),
(31, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'High Performance', 'uploads/uploads/files/64709231d435c.png', 'It can use a dedicated large-scale digital integrated circuit, which has stable performance, high reliability, low power consumption, long life, a small volume version, is lightweight, and has other advantages.', 'FEATURES'),
(32, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Multi-Functional', 'uploads/uploads/files/64709231d5cf7.png', 'It can be used as a multi-functional energy meter, with anti-theft, prepayment, and other features. It is a form of phase that distributes alternating current power to a circuit via a neutral and a phase cable.', 'FEATURES'),
(33, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Easy Customization', 'uploads/uploads/files/64709231d76e7.png', 'Electric energy can be measured independently based on time intervals, with the benefits of four rates, twelve time periods, and so on; multi-tariff rates and each time period can be set as needed.', 'FEATURES'),
(34, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Real-time Billing', 'uploads/uploads/files/64709231d8e8d.png', 'Deep features a real-time billing function, and multi-parameter harmonic energy measurement, and can automatically read the meter and send it to the RX over the GPRS system, Ethernet, and other communication networks.', 'FEATURES'),
(35, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'High accuracy', 'uploads/uploads/files/64709231da9f5.png', 'It boasts a high level of accuracy and steadiness. A load switch in the meter can also be used to effectively and efficiently manage the load. It has an in-home display that allows token transfers via a mobile app.', 'FEATURES'),
(36, '9', '2023-05-26 05:47:59', '2023-05-30 06:32:38', 'Overload capacity', 'uploads/uploads/files/64709231dc480.png', 'Deep has a broad range and a high overload capacity, as well as a programmable \'high load\' signal that assists the consumer in avoiding disconnection due to overload. In addition, the Emergency credit facility prevents disconnection if the user fails to top up in a timely manner.', 'FEATURES'),
(37, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'High accuracy', 'uploads/uploads/files/64709231c9e68.png', 'When compared to electromechanical meter timers, electronic energy meter timers are highly accurate and have a low error rate.', 'FEATURES'),
(38, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Tamper-proof', 'uploads/uploads/files/64709231cc337.png', 'Uday is difficult to tamper with since it has powerful anti-tampering capabilities that detect and record any efforts at tampering.', 'FEATURES'),
(39, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Remote communication', 'uploads/uploads/files/64709231cdd04.png', 'They can be outfitted with communication modules for remote monitoring, data collecting, and analysis, making them more useful to utility companies.', 'FEATURES'),
(40, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Wide measuring range', 'uploads/uploads/files/64709231cf6e1.png', 'They have a wide measuring range and can detect energy use accurately even at low levels.', 'FEATURES'),
(41, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'More features', 'uploads/uploads/files/64709231d0f9d.png', 'They may include features such as time-of-use metering, load profiling, and power quality analysis, which can give utility companies and customers with more information.', 'FEATURES'),
(42, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Lower maintenance', 'uploads/uploads/files/64709231d2a73.png', 'When compared to electromechanical meters, Uday has fewer moving parts and so requires less maintenance.', 'FEATURES'),
(43, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Voltage', 'uploads/uploads/files/64709231d435c.png', '240V /440V', 'SPECIFICATION'),
(44, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Current Range', 'uploads/uploads/files/64709231d5cf7.png', '10-60A/10-90A', 'SPECIFICATION'),
(45, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'On-Off Control', 'uploads/uploads/files/64709231d76e7.png', '24hr/ Relay Control', 'SPECIFICATION'),
(46, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Dimension', 'uploads/uploads/files/64709231d8e8d.png', '197.5 X 154.5 X 92.5', 'SPECIFICATION'),
(47, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Accuracy Class', 'uploads/uploads/files/64709231da9f5.png', 'Class-1', 'SPECIFICATION'),
(48, '10', '2023-05-26 05:48:02', '2023-05-30 06:22:53', 'Communication Modes', 'uploads/uploads/files/64709231dc480.png', 'GSM/2G/3G/4G', 'SPECIFICATION'),
(49, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Voltage', 'uploads/uploads/files/64709231c9e68.png', 'Nominal Voltage: 230/240V (P-N), 400/415 V (P-P)\r\nVoltage Range: -40% to +20% of nominal voltage', 'SPECIFICATION'),
(50, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Frequency', 'uploads/uploads/files/64709231cc337.png', 'Nominal Frequency: 50 Hz\r\nTolerance: +/- 10%', 'SPECIFICATION'),
(51, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Power Consumption', 'uploads/uploads/files/64709231cdd04.png', 'As per IS - 16444, Part-1\r\nVoltage Circuit: 5W & 15VA Per Phase ( Idle mode)\r\nCurrent Curcuit: < 20VA', 'SPECIFICATION'),
(52, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Current Ranges', 'uploads/uploads/files/64709231cf6e1.png', '10 - 60A, 10 - 80A,\r\nStarting: 20mA (0.2% of Ib)', 'SPECIFICATION'),
(53, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Service and Connection Types', 'uploads/uploads/files/64709231d0f9d.png', 'Designed for direct connection of 3-phase 4-wire Wye/Star', 'SPECIFICATION'),
(54, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Control Wiring Terminal', 'uploads/uploads/files/64709231d2a73.png', 'Maximum wire size: 25mm sq. (used cables may not fit)\r\nTerminal inside diameter: 9.5mm sq.', 'SPECIFICATION'),
(55, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Safer Choice', 'uploads/uploads/files/64709231d435c.png', 'The Edison series of three-phase Smart Energy Meters provides modular, reliable, and robust metering solutions for utilities and their customers for residential and commercial applications. It supports RF mesh, GPRS, 3G, and 4G Communication technology that have been deployed in millions of smart meters worldwide.', 'FEATURES'),
(56, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Highly Reliable', 'uploads/uploads/files/64709231d5cf7.png', 'As with the entire line of LightHouse IoT’s smart meters, the Edison smart meter is a highly reliable bi-directional communication network delivering 99.7- 100% reliability. Their Smart Metering Solution collects power consumption & power quality data that is imperative to gain visibility of the power distribution network.', 'FEATURES'),
(57, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Multiple Communication', 'uploads/uploads/files/64709231d76e7.png', 'Edison meters are available with GPRS, 3G, 4G, and RF mesh communication module options, allowing the relevant communication module to be used for appropriate portions of the distribution network. It provides secure remote communications,  firmware upgrades, rate plans, and on-demand meter readings without a trip to the field.', 'FEATURES'),
(58, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Operational Costs', 'uploads/uploads/files/64709231d8e8d.png', 'With communications enabled, Edison meters create a reliable and robust network, which prevents electricity theft and also helps identify unexpected technical losses. Edison’s rich data collection enables meter data management software to drive operational costs savings and also increase revenue.', 'FEATURES'),
(59, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Distribution Network', 'uploads/uploads/files/64709231da9f5.png', 'Consumers’ heightened demand for power availability, distributed generation, and requirements for greater eﬃciency in power distribution are creating a need for real-time, accurate, and reliable measurements of power consumption and power quality throughout the distribution network.', 'FEATURES'),
(60, '11', '2023-05-26 05:48:04', '2023-05-30 06:14:51', 'Time of Use', 'uploads/uploads/files/64709231dc480.png', 'Edison conforms to a powerful revenue-grade smart meter that provides real-time, reliable advanced metering data that prevent problems and improve grid reliability. Flexible TOU settings are available with eight time zones which are configurable for up to 8 channels for load profiling.', 'FEATURES');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `exlongDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `templete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `seo_url`, `shortDescription`, `mediumDescription`, `longDescription`, `exlongDescription`, `description`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `templete`, `bannerImage`, `publish`, `footer_section`, `header_section`, `created_at`, `updated_at`) VALUES
(1, 'Strategic advisory', 'strategic-advisory', '<!--==================================== real estate mid start================================-->\r\n<section class=\"home-about-wrapp\">\r\n<div class=\"container\">\r\n<div class=\"ext-con-div\">\r\n<h3>Unlocking Your Strategic Potential with AI Capital Partners</h3>\r\n\r\n<p>At AI Capital Partners, we understand that success in today&#39;s dynamic business landscape requires more than just financial resources. It demands a clear and visionary strategy that aligns your company&#39;s goals with market opportunities. Our strategic advisory services are designed to help you navigate the complexities of business with confidence and purpose.</p>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-img wow fadeInUp\"><img src=\"http://localhost/aic/uploads/uploads/65094cf0da9b0.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con\">\r\n<h5>Our Strategic Advisory Services</h5>\r\n\r\n<h6>Visionary Strategy Development:</h6>\r\n\r\n<ul>\r\n	<li>We work closely with company founders and senior management to create a visionary strategy that outlines the path to your desired future.</li>\r\n	<li>Our team conducts in-depth market analysis, competitive assessments, and industry benchmarking to identify growth opportunities and mitigate risks.</li>\r\n	<li>We collaborate with you to set clear goals and objectives, ensuring that every decision aligns with your long-term vision.</li>\r\n</ul>\r\n\r\n<h6>Strategic Planning and Execution:</h6>\r\n\r\n<ul>\r\n	<li>Developing a strategic plan is just the beginning. We assist in translating your vision into actionable steps, providing you with a roadmap for success.</li>\r\n	<li>Our experts help you prioritize initiatives, allocate resources effectively, and establish performance metrics to measure progress.</li>\r\n	<li>We provide ongoing support and guidance to ensure that your strategic plan is executed efficiently and delivers the desired outcomes.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--==================================== real estate mid end================================-->', '<!--==================================== real estate second section start================================-->\r\n<section class=\"home-about-wrapp\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con\">\r\n<h6>Candid and Insightful Advice:</h6>\r\n\r\n<ul>\r\n	<li>We pride ourselves on delivering candid, unbiased, and data-driven advice that puts your company&#39;s best interests first.</li>\r\n	<li>Our team leverages our industry expertise and market insights to help you make informed decisions.</li>\r\n	<li>We act as your trusted confidant, offering a fresh perspective and constructive feedback to drive positive change.</li>\r\n</ul>\r\n\r\n<h6>Stakeholder Alignment:</h6>\r\n\r\n<ul>\r\n	<li>Effective strategy execution requires alignment among stakeholders, including employees, customers, and shareholders.</li>\r\n	<li>We help you communicate your strategic vision throughout your organization, fostering a shared sense of purpose and commitment.</li>\r\n	<li>Our advisory services extend to engaging with shareholders and investors to ensure alignment with your strategic goals.</li>\r\n</ul>\r\n\r\n<h6>Continuous Improvement:</h6>\r\n\r\n<ul>\r\n	<li>In today&#39;s rapidly evolving business environment, adaptability is key to long-term success.</li>\r\n	<li>We support a culture of continuous improvement, helping you adjust your strategy as market conditions change and new opportunities emerge.</li>\r\n	<li>Our goal is to ensure that your company remains agile and responsive to evolving challenges and opportunities.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-img wow fadeInUp\"><img src=\"http://localhost/aic/uploads/uploads/65094cc3e6ffe.png\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--====================================real estate second section end================================-->', '<!--==================================== real estate third section start================================-->\r\n<section class=\"home-about-wrapp real-third-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-7 col-md-7 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con\">\r\n<h5>Why Choose AI Capital Partners for Strategic Advisory Services?</h5>\r\n\r\n<h6>Industry Expertise:</h6>\r\n\r\n<ul>\r\n	<li>Our team brings a wealth of industry knowledge and experience to the table, ensuring that your strategy is informed by the latest market trends.</li>\r\n</ul>\r\n\r\n<h6>Collaborative Partnership:</h6>\r\n\r\n<ul>\r\n	<li>We believe in working closely with your leadership team, fostering a collaborative partnership to achieve the best outcomes for your company.</li>\r\n</ul>\r\n\r\n<h6>Data-Driven Insights:</h6>\r\n\r\n<ul>\r\n	<li>Our recommendations are grounded in data and analysis, providing you with a solid foundation for decision-making.</li>\r\n</ul>\r\n\r\n<h6>Commitment to Success:</h6>\r\n\r\n<ul>\r\n	<li>Your success is our priority. We are dedicated to delivering results that benefit your customers, employees, and shareholders alike.</li>\r\n</ul>\r\n\r\n<h6>Trusted Advisors:</h6>\r\n\r\n<ul>\r\n	<li>We are more than consultants; we are trusted advisors who are passionate about helping you achieve your strategic goals.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-5 col-md-5 col-12\">\r\n<div class=\"home-abt-img wow fadeInUp\"><img src=\"http://localhost/aic/uploads/uploads/65094a202fe38.png\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--==================================== real estate third section end================================-->', NULL, 'Our strategic advisory services cater to clients seeking strategic investments in promising businesses. With an extensive & network of industry', 'uploads/services/65082e22b0ad0.png', NULL, NULL, NULL, 'common', 'uploads/services/650979a17a13f.png', 'published', NULL, NULL, '2023-05-26 02:16:19', '2023-09-19 05:06:17'),
(3, 'Venture Development', 'venture-development', '<!--==================================== real estate mid start================================-->\r\n<section class=\"home-about-wrapp\">\r\n<div class=\"container\">\r\n<div class=\"ext-con-div ven-ext-con\">\r\n<p>At AI Capital Partners, we understand that success in today&#39;s dynamic business landscape requires more than just financial resources. It demands a clear and visionary strategy that aligns your company&#39;s goals with market opportunities. Our strategic advisory services are designed to help you navigate the complexities of business with confidence and purpose.</p>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-img wow fadeInUp\"><img src=\"http://localhost/aic/uploads/uploads/650949bae476b.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con\">\r\n<h5>Our Venture Development Services</h5>\r\n\r\n<h6>Business Strategy and Planning:</h6>\r\n\r\n<ul>\r\n	<li>We work closely with you to develop a comprehensive business strategy tailored to your unique goals and market dynamics.</li>\r\n	<li>Our team assists in defining your vision, mission, and core values, as well as setting clear objectives and key performance indicators (KPIs).</li>\r\n	<li>We help you create a solid business plan that outlines your path to success, including market analysis, competitive positioning, and financial projections.</li>\r\n</ul>\r\n\r\n<h6>International Expansion:</h6>\r\n\r\n<ul>\r\n	<li>Ready to take your business global? We have the knowledge and networks to support your international expansion efforts.</li>\r\n	<li>Our experts provide market research, localization strategies, and entry plans for overseas territories.</li>\r\n	<li>We guide you through legal, regulatory, and cultural considerations to ensure a smooth expansion process.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--==================================== real estate mid end================================-->', '<!--==================================== real estate second section start================================-->\r\n<section class=\"home-about-wrapp\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con vd-con\"><img src=\"http://localhost/aic/uploads/uploads/650949dda1a05.png\" />\r\n<h6>Funding Assistance:</h6>\r\n\r\n<ul>\r\n	<li>Building a customer base is a fundamental step in scaling your business. We help you develop customer acquisition strategies.</li>\r\n	<li>Our experts assist in customer segmentation, marketing, and sales planning to reach your target audience effectively.</li>\r\n	<li>We offer guidance on product-market fit and user acquisition tactics.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-6 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con vd-con\"><img src=\"http://localhost/aic/uploads/uploads/65094a0118e09.png\" />\r\n<h6>Customer Acquisition:</h6>\r\n\r\n<ul>\r\n	<li>Building a customer base is a fundamental step in scaling your business. We help you develop customer acquisition strategies.</li>\r\n	<li>Our experts assist in customer segmentation, marketing, and sales planning to reach your target audience effectively.</li>\r\n	<li>We offer guidance on product-market fit and user acquisition tactics.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--====================================real estate second section end================================-->', '<!--==================================== real estate third section start================================-->\r\n<section class=\"home-about-wrapp real-third-sec\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-7 col-md-7 col-12\">\r\n<div class=\"home-abt-con wow fadeInUp\">\r\n<div class=\"home-abt-con-inn case-real-con realestate-con\">\r\n<h5>Why Choose AI Capital Partners?</h5>\r\n\r\n<h6>Industry Expertise:</h6>\r\n\r\n<ul>\r\n	<li>Our team comprises experienced professionals with a deep understanding of various industries, including technology, healthcare, finance, and more.</li>\r\n</ul>\r\n\r\n<h6>Global Reach:</h6>\r\n\r\n<ul>\r\n	<li>We have a vast network of connections across the globe, making us well-equipped to assist with international expansion and funding opportunities.</li>\r\n</ul>\r\n\r\n<h6>Tailored Solutions:</h6>\r\n\r\n<ul>\r\n	<li>We understand that each company is unique. Our services are customized to meet your specific needs and objectives.</li>\r\n</ul>\r\n\r\n<h6>Results-Driven Approach:</h6>\r\n\r\n<ul>\r\n	<li>Our primary focus is on delivering tangible results. We measure our success by your success.</li>\r\n</ul>\r\n\r\n<h6>Long-Term Partnership:</h6>\r\n\r\n<ul>\r\n	<li>We don&#39;t just offer short-term solutions; we aim to build long-lasting partnerships to support your ongoing growth.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-5 col-md-5 col-12\">\r\n<div class=\"home-abt-img wow fadeInUp\"><img src=\"	http://localhost/aic/uploads/uploads/65094a202fe38.png\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!--==================================== real estate third section end================================-->', NULL, 'In the fast-paced world  of  venture  capital , we provide invaluable guidance to entrepreneurs and investors alike.', 'uploads/services/65082de49f3f2.png', NULL, NULL, NULL, 'common', 'uploads/services/650979af9f443.png', 'published', NULL, NULL, '2023-06-12 04:12:24', '2023-09-19 05:06:31'),
(5, 'Attract More Attention Sales And Profits', 'real-estate', NULL, NULL, NULL, NULL, 'A job is a regular activity performed in exchange becoming an employee, volunteering,', 'uploads/services/65082d880db44.png', NULL, NULL, NULL, 'common', 'uploads/services/6509798ed6b8e.png', 'published', NULL, NULL, '2023-06-12 04:13:00', '2024-01-30 06:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cms_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `publish` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `link`, `image`, `cms_id`, `description`, `created_at`, `updated_at`, `ordering`, `publish`) VALUES
(31, 'Alternative Investment  Advisory Solutions', NULL, 'uploads/sliders/659cf60176dfa.png', 1, '<div class=\"content-info\">\r\n<h6 class=\"sub-title\" data-swiper-parallax=\"-10\">BEST MANAGEMENT</h6>\r\n\r\n<h1 class=\"title mb-0\" data-swiper-parallax=\"-20\">Think and Grow Rich</h1>\r\n\r\n<ul class=\"dz-tags\" data-swiper-parallax=\"-30\">\r\n	<li><a href=\"javascript:void(0);\">Napoleon Hill</a></li>\r\n	<li><a href=\"javascript:void(0);\">Business &amp; Strategy</a></li>\r\n</ul>\r\n\r\n<p class=\"text mb-0\" data-swiper-parallax=\"-40\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>\r\n\r\n<div class=\"content-btn banner-main-btn\" data-swiper-parallax=\"-60\"><!--<a class=\"btn btn-primary btnhover eq-btn\" href=\"#\">Enquiry Now</a>--><a class=\"btn border btnhover ms-4 text-white detail-btn\" href=\"#\">See Details</a></div>\r\n</div>', '2023-06-14 00:14:33', '2024-01-10 06:30:39', 0, 'published'),
(32, 'Alternative Investment  Advisory Solutions', NULL, 'uploads/sliders/659cf5f315f68.png', 1, '<div class=\"content-info\">\r\n<h6 class=\"sub-title\" data-swiper-parallax=\"-10\">BEST MANAGEMENT</h6>\r\n\r\n<h1 class=\"title mb-0\" data-swiper-parallax=\"-20\">Think and Grow Rich</h1>\r\n\r\n<ul class=\"dz-tags\" data-swiper-parallax=\"-30\">\r\n	<li><a href=\"javascript:void(0);\">Napoleon Hill</a></li>\r\n	<li><a href=\"javascript:void(0);\">Business &amp; Strategy</a></li>\r\n</ul>\r\n\r\n<p class=\"text mb-0\" data-swiper-parallax=\"-40\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>\r\n\r\n<div class=\"content-btn banner-main-btn\" data-swiper-parallax=\"-60\"><!--<a class=\"btn btn-primary btnhover eq-btn\" href=\"#\">Enquiry Now</a>--><a class=\"btn border btnhover ms-4 text-white detail-btn\" href=\"#\">See Details</a></div>\r\n</div>', '2023-09-18 03:46:33', '2024-01-10 06:30:17', 1, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_section` longtext COLLATE utf8mb4_unicode_ci,
  `header_section` longtext COLLATE utf8mb4_unicode_ci,
  `country_id` int(11) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `store_affilate_url` text COLLATE utf8mb4_unicode_ci,
  `is_popular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`, `store_affilate_url`, `is_popular`) VALUES
(1, 'Dell', 'uploads/stores/63aaf72e6529c.png', NULL, NULL, 'dell', 'Dell', 'Dell', 'Dell', 'published', 'false', '2022-12-20 18:31:26', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 0, NULL, 'false'),
(2, 'Rapido', 'uploads/stores/63aaf6cce9ed1.png', NULL, NULL, 'rapido', 'Rapido', 'Rapido', 'Rapido', 'published', 'false', '2022-12-24 16:23:13', '2023-01-01 05:28:09', NULL, NULL, NULL, 4, 0, NULL, 'false'),
(3, 'Paytm', 'uploads/stores/63aaf66096fe6.png', NULL, NULL, 'paytm', 'Paytm', 'Paytm', 'Paytm', 'published', 'false', '2022-12-24 16:23:28', '2023-01-01 05:28:09', NULL, NULL, NULL, 1, 0, NULL, 'false'),
(4, 'Bookmyshow', 'uploads/stores/63a774ea1822f.jpg', NULL, NULL, 'bookmyshow', 'Bookmyshow', 'Bookmyshow', 'Bookmyshow', 'published', 'false', '2022-12-24 16:23:46', '2023-01-01 05:28:09', NULL, NULL, NULL, 1, -1, NULL, 'false'),
(5, 'Acer', 'uploads/stores/63a7f6ab786a3.png', NULL, NULL, 'acer', 'Acer', 'Acer', 'Acer', 'published', 'false', '2022-12-25 07:07:23', '2023-01-06 10:37:25', NULL, NULL, NULL, 1, 9, 'https://fas.st/ceRMc', 'true'),
(6, 'Canva', 'uploads/stores/63a7f6d0470ca.png', NULL, NULL, 'canva', 'Canva', 'Canva', 'Canva', 'published', 'false', '2022-12-25 07:08:00', '2023-01-01 05:28:09', NULL, NULL, NULL, 1, 8, NULL, 'false'),
(7, 'Eneba', 'uploads/stores/63a7f6f6f1193.png', NULL, NULL, 'eneba', 'Eneba', 'Eneba', 'Eneba', 'published', 'false', '2022-12-25 07:08:38', '2023-01-01 05:28:09', NULL, NULL, NULL, 1, 7, NULL, 'false'),
(8, 'Firstcry', 'uploads/stores/63a7f74910bab.png', NULL, NULL, 'firstcry', 'Firstcry', 'Firstcry', 'Firstcry', 'published', 'false', '2022-12-25 07:10:01', '2023-01-01 05:28:09', NULL, NULL, NULL, 1, 6, NULL, 'false'),
(9, 'Reebok', 'uploads/stores/63a7f76d3d8df.png', NULL, NULL, 'reebok', 'Reebok', 'Reebok', 'Reebok', 'published', 'false', '2022-12-25 07:10:37', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 5, NULL, 'false'),
(10, 'Flipkart', 'uploads/stores/63a7f7830cbee.jpg', NULL, NULL, 'flipkart', 'Flipkart', 'Flipkart', 'Flipkart', 'published', 'false', '2022-12-25 07:10:59', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 4, NULL, 'false'),
(11, 'Patpat', 'uploads/stores/63a7f797b948d.png', NULL, NULL, 'patpat', 'Patpat', 'Patpat', 'Patpat', 'published', 'false', '2022-12-25 07:11:19', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 3, NULL, 'false'),
(12, 'boAt', 'uploads/stores/63bc0291a65ed.png', NULL, NULL, 'boat', 'boAt', 'boAt', 'boAt', 'published', 'false', '2022-12-25 07:11:39', '2023-01-09 12:03:29', NULL, NULL, NULL, 1, 2, 'https://fas.st/fwTzF', 'false'),
(13, 'Onnit', 'uploads/stores/63a7f7e691e7a.png', NULL, NULL, 'onnit', 'Onnit', 'Onnit', 'Onnit', 'published', 'false', '2022-12-25 07:12:38', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(14, 'Myntra', 'uploads/stores/63a7f7fdd8dfa.png', NULL, '<h1 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">The Latest 5 Myntra Coupons&nbsp;</span></span></u></b></span></span></span></h1>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">A one-stop shop for clothing in fashion and lifestyle for customers all throughout India, Myntra offers a hassle-free shopping experience with great products in a variety of categories. The branded goods sold in this shop are a little pricey. And by taking advantage of Myntra&#39;s promotional deals, you may purchase them for less money.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Rs. 200 OFF on Order Above 299</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Rs. 300 OFF on Orders Above 1999</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Upto 40% OFF on Plus Size Clothes</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Upto 40% OFF on Men&rsquo;s and Women&rsquo;s Apparel</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Upto 35% OFF on Smart Watches </span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">You can avail more discounts while signing in to <a href=\"https://couponorg.co.in/\">Couponorg</a></span></span></span></span></span></p>\r\n\r\n<h2 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Coupon Code For New Users On Myntra</span></span></u></b></span></span></span></h2>\r\n\r\n<h2 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Are you a new user? You&#39;ll have enough justification to start shopping often. No of the size of your first order, you will receive free shipping on Myntra. If free delivery isn&#39;t enough for you, how about flat discounts of Rs. 1000&ndash;2000? Sounds good to you? Avail the amazing offer as a first time user now! </span></span></span></span></span></h2>\r\n\r\n<h2 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">How to avail discounts on Myntra?</span></span></u></b>&nbsp;</span></span></span></h2>\r\n\r\n<h2 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Using coupons is the most effective strategy to increase your savings while purchasing on Myntra.com. Your one-stop shop for the most recent Myntra promo codes should be Couponorg since we regularly update all of the most recent coupon codes and offer extra cashback on top of Couponorg discounts. Additionally, you may get new user discounts on Myntra to help you save even more money on your initial purchase. You can always discover verified codes at Couponorg year-round, not only during the main Myntra discounts. Don&#39;t forget to check our page for the most recent Myntra coupons before you buy on Myntra.</span></span></span></span></span></h2>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<h3 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra- India&rsquo;s Biggest Fashion Company</span></span></u></b></span></span></span></h3>\r\n\r\n<p style=\"margin-bottom:12.0pt; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Based in Bengaluru, India, Myntra is a well-known retailer of fashionable apparel and accessories. The privately held firm solely conducts business online, selling a broad range of goods through Myntra.com and mobile apps for iOS, Android, and Windows-based devices. They can manage small and huge purchases with timely and reasonable shipping, and they cater to men, women, and kids of all sizes. The diversity of special deals offered, which are frequently redeemed using a Myntra coupon code, is one of the reasons people keep visiting. To guarantee you receive the greatest price possible, remember to load this page before placing an order because Couponorg keeps an updated list of these.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra was established in 2007 and has developed into one of India&#39;s most well-liked online shopping portals for branded clothing. Their website provides access to current discounts and bargains on all of your favorite items as well as free styling advice from their fashion experts. &quot;Discover the newest trends in lifestyle and shop for all your favorite fashion stuff by top companies,&quot; it says. Although Myntra is mostly renowned for its assortment of clothing, it also offers a wide range of alternatives for home design. This is the best spot to browse if you&#39;ve been seeking the right artistic or colorful addition to your house. There are various things available on Myntra, such as curtains, towels, sheet sets, carpets, and a variety of other lovely home design alternatives. Not sure if a possible purchase would complement your present d&eacute;cor or sense of style? Consider using the Try on Delivery option offered by Myntra.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:12.0pt; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<h3 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">What all you can get on Myntra?</span></span></u></b></span></span></span></h3>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">One of India&#39;s biggest online stores for clothing and home goods Myntra serves people of all sizes and combines traditional Indian and Western fashions. They have over 2,30,000 different product kinds available from more than 1,600 well-known companies, and you can access them all via their website or mobile applications. Visit Couponorg&#39;s complete list of coupons before redeeming any offers to choose the one that will save you the most money. While some discounts may be available on all orders, others may be limited to certain brands and styles yet still provide substantial savings, such as Myntra coupons for Puma.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\"><strong>Most popular categories:</strong>&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Highlighted brands: Swarovski, Portico New York, Swayam, WelHome, Jack &amp; Jones, Calvin Klein, Fort Collins, Wills Lifestyle, John Players, Benetton, Roadster, Only, Biba, Forever 21, Rain &amp; Rainbow, Vero Moda, DressBerry, The Vanca, Shinning Diva, and several more well-known brands are among those highlighted.&nbsp;</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Home Decor: Bedsheets &amp; Bedding, Blankets &amp; Comforters, Curtains, Cushions &amp; Covers, Pillows, Bath Rugs, Towels, and other items are included in the Home Decor category.&nbsp;</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Clothing and accessory: There are many different types of clothing and accessories available, including tops, tees, jackets, suits, shirts, jeans, trousers, shorts, sportswear, swimwear, Indian &amp; Festive Wear, intimates, sleepwear, Western women&#39;s clothing, lingerie, shoes &amp; footwear, watches &amp; wearables, jewelry, bags &amp; backpacks, luggage &amp; trolleys, personal care &amp; grooming, wallets, belts, ties &amp; pocket squares and much more.&nbsp;</span></span></span></span></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-bottom:12.0pt; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">How to Shop At Myntra</span></span></u></b><b>&nbsp;</b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra has a standard sign in and checkout system, just like any other eCommerce website, thus placing an order is incredibly easy. If you&#39;re on the go, there are mobile applications for Android, iOS, and Windows that you can use to access Myntra.com through the web browser of any device with an internet connection. Direct downloads of these are available through the appropriate Microsoft Store, Apple App Store, and Google Play Store.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">You must first create a free account before you will be buying any item, which is pretty simple. Whether you do it before or after your purchases are in the shopping basket is immaterial. You enter your personal data, including first and last name, email address, and physical address when you&#39;re ready. As long as you are logged into your account, you are not required to provide your personal information each time you make a purchase.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Simply browse through the relevant categories and subcategories to discover what you&#39;re searching for, or use the search box at the top of the page if you know exactly what you&#39;re looking for. The selections may then be further filtered by Type, Brand, Colour, Size, Price Range, Popularity, and other pertinent factors until you find precisely what you&#39;re looking for. Product pages include several images, a thorough description, and information on any current promotions. After that, you may decide whether to include the item in your shopping cart or wishlist for later purchases. If you have a coupon from Couponorg, proceed to the checkout and use a Myntra promo code to receive a discount.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Try on Delivery (ToD) is a very special service offered by Myntra that enables you to test out your item after it has been delivered and decide whether or not you want to proceed with the rest of the transaction. The majority of products are eligible for this service, however, you may only use it with up to three items in your basket. Try on Delivery does not have a minimum order requirement, but you must make sure that it is delivered to a location where you feel secure trying the items and making a decision.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<h2 style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Shop Your Favorite Products At The Best Prices on Myntra&nbsp;</span></span></u></b></span></span></span></h2>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">It&#39;s not always necessary to spend a lot of money to appear fashionable. With Myntra, you can have the appearance you want for less money. Myntra provides you with affordable pricing on top-notch garments and other things throughout the year by running a number of promos, specials, and coupons. No matter what you&#39;re looking to buy, Myntra shopping will help you locate something that fits your style.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Here are the kinds of deals you will come across:</span></span></span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\">First Buy Discount:</span></b><span georgia=\"\" style=\"font-family:\"> You will be able to save up to Rs. 400 on your very first order if you have never made a purchase from Myntra before.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">App Exclusives</span></span></b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">: Myntra occasionally rewards app users with exclusive deals, so make sure to install it on your smartphone so you don&#39;t miss out. On the app, you may frequently receive discounts of up to 20% more.</span></span></span></span></span></span></li>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra Sales:</span></span></b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\"> These are your standard sales that are valid for a limited time on a few things. Simply add them to your cart as usual to save money, but act quickly in case the discount is about to expire. Get discounts of amount 70% off or more!</span></span></span></span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">It&#39;s time to start using the coupons after you&#39;ve put everything you wish to buy in your basket. After signing in with your information, you may enter your Myntra promo code during the checkout process or use the codes available on Couponorg to avail the finest offers. Before submitting your order for confirmation, be sure the discount and the coupon have been applied. Myntra frequently has a selection of bargains and discounts; you might wish to visit the shop sometimes to view the most recent special offers. By agreeing to receive promotional information through email and SMS, you could sometimes uncover some exclusives.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">What is Myntra Studio?&nbsp;</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra studio is your fashion suggestion ethos. The newest men&#39;s and women&#39;s fashion trends, celebrity looks, promotional content, and daily updates from your favorite fashion brands will all be sent to you in a custom fashion feed you create with Myntra Studio. With the Myntra Studio Service, Myntra provides quick fashion advice, the most recent information on what is popular and new product introductions, expert-recommended beauty routines, celebrity confessions, and even updates about their personal lives to help you stay in touch with your favorite celebrities.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">What is Myntra insider?</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Every online shopping experience ought to be free. In order to enhance your online experience, Myntra offers the Insider program, a cashless reward-based customer loyalty program. All registered clients have access to the program, and rewards are calculated using Insider Points.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">There are four stages in the program to reach as the Insider Points collect. Insider, Select, Elite, and Icon are their names. Each grade offers a different set of exclusive advantages in addition to savings on Myntra and partner platform coupons.</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Receive Insider Points worth 10% of your total bill that you can spend on future purchases.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Coupons and a Myntra promo code up to Rs 10,000.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Access to Master Classes and special fashion advice from famous stylists.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Insider VIPs have first access to major sale events before the general public.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Obtain great discounts and deals from our partners.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Most recent fashion trends and carefully curated fashion choices.</span></span></span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:12.0pt; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">How you can use Myntra credits?&nbsp;</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra credit is basically the money that can be further used to buy products on Myntra.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">You can use Myntra Credit in the following way:&nbsp;</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Returns are refunded as Myntra Credits, which you can use to purchase new goods.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Add your Myntra Gift Card to Myntra Credit by adding a Myntra Gift Card.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Top Up - At the Myntra App or Website, you may top up your Myntra Credit using one of the accepted online payment methods.</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Myntra Credit cannot be exchanged for cash by users. Additionally, Myntra Credit cannot be transferred to banks, wallets, or the accounts of other users. Make careful to spend the money before the maximum 1-year expiration date for refunds and top-ups on Myntra Credit.</span></span></span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">What is Myntra Gift card and how to purchase it?&nbsp;</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">The Myntra Gift card satisfies the need for unique events like birthdays and other tailored occasions that fit you. It prevents you from being unsure about what to provide. You may shop on Myntra with a Myntra Gift Card. With a Myntra Present Card, you can give someone a certain number of Myntra Credits as a gift that they may use to purchase on Myntra.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">To purchase a Myntra gift card, follow these steps:</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin: 0cm 0cm 8pt;\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Go to the Gift card option on Myntra</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Click &lsquo;Buy Gift card&rsquo;</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Enter the recipient&rsquo;s email address</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Enter the amount you want to buy the gift card for&nbsp;</span></span></span></span></span></span></span></li>\r\n	<li style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\">Complete the payment and you have brought the card.&nbsp;</span></span></span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-bottom:12.0pt; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Frequently Asked Questions (FAQs)&nbsp;</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><br />\r\n<span style=\"font-size:11pt\"><span style=\"color:black\"><span style=\"line-height:normal\"><span style=\"tab-stops:list 36.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\">1. What are Myntra&rsquo;s shipping and cancellation policies?&nbsp;</span></b></span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">If you make a first-time purchase with the company, the goods are delivered without any shipping charges. For orders over Rs. 1199, there is no shipping price; for orders less Rs. 1199, there is a delivery fee of Rs. 149.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">The cancellation policy is simple. You can choose the order you wish to cancel by going to the platform&#39;s &quot;My Orders&quot; area. As long as the cancel option is there on the website/app, an order may be cancelled whenever desired. The business will start the refund procedure as soon as the order is cancelled.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">2. What are the exchange and refund policy of Myntra?</span></span></b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">&nbsp;</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Myntra has a very convenient exchange and refund policy. Nearly all goods may be returned or exchanged as long as they are in their original packaging. You must first return the item and then purchase a replacement if you wish to swap it for another item. Once the order is returned, the payment is credited to the bank account in one or two days.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><b><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">3. What are the payment options available on Myntra?</span></span></b></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">For the convenience of users, Myntra provides a number of payment options. Looking for further discounts? For additional cashback, use Paytm, PayUMoney, or Mobikwik while making a purchase. By utilizing credit and debit cards from financial institutions like SBI, ICICI, Kotak Mahindra, Axis Bank, and HDFC Bank, you may also take advantage of great discounts in addition to ongoing promotions. So, to save money on your purchase, seek deals before you buy.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><b><u><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Use Couponorg to grab the best deals on Myntra</span></span></u></b></span></span></span></p>\r\n\r\n<p style=\"margin-bottom:0cm; margin:0cm 0cm 8pt\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span georgia=\"\" style=\"font-family:\"><span style=\"color:black\">Couponorg loves to connect with other shopaholics and share discounts and offers. So, if there&#39;s anything we can do to get you a smart discount, we&#39;d be more than pleased to do it. Find a coupon with us today to get started saving.&nbsp;</span></span></span></span></span></p>', 'myntra', 'Latest Myntra Coupons, offers and deals, Get upto 80% Off on Products| Couponorg', 'Myntra coupons, myntra promo code, myntra discount code, myntra coupon code, myntra offers, myntra coupon codes, myntra coupon code today, myntra coupons today, myntra deals,', 'Checkout latest myntra coupons, offers and deals and grab huge discounts on your favourite products| CouponOrg', 'published', 'false', '2022-12-25 07:13:01', '2023-01-23 19:47:31', NULL, NULL, NULL, 1, 1, 'https://fas.st/4m8stT', 'false'),
(16, 'Zaful', 'uploads/stores/63a7f82708a48.png', NULL, NULL, 'zaful', 'Zaful', 'Zaful', 'Zaful', 'published', 'false', '2022-12-25 07:13:43', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 2, NULL, 'false'),
(17, 'Zivame', 'uploads/stores/63a7f893577e1.png', NULL, NULL, 'zivame', 'Zivame Coupons, Offers, Deals, Promocode - January 2023', 'Zivame', 'Zivame', 'published', 'false', '2022-12-25 07:15:31', '2023-01-06 10:37:59', NULL, NULL, NULL, 1, 1, 'https://fas.st/A8YVGp', 'true'),
(18, 'Vevor US', 'uploads/stores/63b4395f3632e.png', NULL, NULL, 'vevor-us', 'Vevor', 'Vevor', 'Vevor', 'published', 'false', '2022-12-25 07:15:55', '2023-01-03 14:19:11', NULL, NULL, NULL, 1, 4, 'https://fas.st/-UO83i', 'false'),
(19, 'Ajio', 'uploads/stores/63a9a5379c4d8.jpg', NULL, '<p>heyyyyy</p>', 'ajio', 'Ajio', 'Ajio', 'Ajio', 'published', 'false', '2022-12-26 13:44:23', '2023-01-16 08:59:35', NULL, NULL, NULL, 1, 0, 'https://ad.admitad.com/g/neoftme9n9bbece05094a663530cb9/?i=3', 'true'),
(20, 'AbhiBus', 'uploads/stores/63aa9cc629052.png', NULL, NULL, 'abhibus', 'AbhiBus', 'AbhiBus', 'AbhiBus', 'published', 'false', '2022-12-27 07:20:38', '2023-01-23 13:01:07', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/o2eddtuivxbbece05094a37882f6fd/', 'true'),
(21, 'Amazon India', 'uploads/stores/63c51138d38e6.png', NULL, NULL, 'amazon', 'Amazon', 'Amazon', 'Amazon', 'published', 'true', '2022-12-27 07:32:16', '2023-01-16 08:56:24', NULL, NULL, NULL, 1, 0, 'https://amzn.to/3GDSBAC', 'false'),
(22, 'Amrapali', 'uploads/stores/63aa9fd60ac3d.png', NULL, NULL, 'amrapali', 'Amrapali', 'Amrapali', 'Amrapali', 'published', 'false', '2022-12-27 07:33:42', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(23, 'Airtel', 'uploads/stores/63aaa0e4584f7.png', NULL, NULL, 'airtel', 'Airtel', 'Airtel', 'Airtel', 'published', 'false', '2022-12-27 07:38:12', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(24, 'Air Asia', 'uploads/stores/63aaa196e84e3.png', NULL, NULL, 'airasia', 'AirAsia', 'AirAsia', 'AirAsia', 'published', 'false', '2022-12-27 07:41:10', '2023-01-18 11:34:09', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/0u7gwxlu7abbece05094b98677c64e/', 'false'),
(25, 'AutoFurnish', 'uploads/stores/63aaa22eb7b65.png', NULL, NULL, 'autofurnish', 'AutoFurnish', 'AutoFurnish', 'AutoFurnish', 'published', 'false', '2022-12-27 07:43:42', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(26, 'Astrospeak', 'uploads/stores/63aaa28586a1a.png', NULL, NULL, 'astrospeak', 'Astrospeak', 'Astrospeak', 'Astrospeak', 'published', 'false', '2022-12-27 07:45:09', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(27, 'Avast', 'uploads/stores/63aaa37bcf3db.png', NULL, NULL, 'avast', 'Avast', 'Avast', 'Avast', 'published', 'false', '2022-12-27 07:49:15', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(28, 'Aliexpress PL', 'uploads/stores/63aaa3aec51d9.png', NULL, NULL, 'aliexpress-pl', 'Aliexpress', 'Aliexpress', 'Aliexpress', 'published', 'false', '2022-12-27 07:50:06', '2023-01-09 06:24:33', NULL, NULL, NULL, 1, 1, 'https://ali.ski/ci-KN', 'false'),
(29, 'Amydus', 'uploads/stores/63aaa3d0372f4.png', NULL, NULL, 'amydus', 'Amydus', 'Amydus', 'Amydus', 'published', 'false', '2022-12-27 07:50:40', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(30, 'Adda52Rummy', 'uploads/stores/63aaa3fbf287a.png', NULL, NULL, 'adda52rummy', 'Adda52Rummy', 'Adda52Rummy', 'Adda52Rummy', 'published', 'false', '2022-12-27 07:51:23', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(31, 'Aroma Shop', 'uploads/stores/63aaa437a600b.png', NULL, NULL, 'aroma-shop', 'Aroma Shop', 'Aroma Shop', 'Aroma Shop', 'published', 'false', '2022-12-27 07:52:23', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(32, 'Alberto torresi', 'uploads/stores/63aaa469cb89f.png', NULL, NULL, 'alberto-torresi', 'Alberto torresi', 'Alberto torresi', 'Alberto torresi', 'published', 'false', '2022-12-27 07:53:13', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(33, 'Avis', 'uploads/stores/63aaa4c72f4da.png', NULL, NULL, 'avis', 'Avis', 'Avis', 'Avis', 'published', 'false', '2022-12-27 07:54:47', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(34, 'Ace2Three', 'uploads/stores/63aaa501a89a6.png', NULL, NULL, 'ace2three', 'Ace2Three', 'Ace2Three', 'Ace2Three', 'published', 'false', '2022-12-27 07:55:45', '2023-01-06 10:37:24', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(35, 'Agoda', 'uploads/stores/63aaa51eb2265.png', NULL, NULL, 'agoda', 'Agoda', 'Agoda', 'Agoda', 'published', 'false', '2022-12-27 07:56:14', '2023-01-06 10:37:38', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(36, 'Asian Paint', 'uploads/stores/63aaa53c6d47c.png', NULL, NULL, 'asian-paint', 'Asian Paint', 'Asian Paint', 'Asian Paint', 'published', 'false', '2022-12-27 07:56:44', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(37, 'Akbar Travels', 'uploads/stores/63aaa56782d65.png', NULL, NULL, 'akbar-travels', 'Akbar Travels', 'Akbar Travels', 'Akbar Travels', 'published', 'false', '2022-12-27 07:57:27', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(38, 'Almosafer', 'uploads/stores/63aaa5a2a07a7.png', NULL, NULL, 'almosafer', 'Almosafer', 'Almosafer', 'Almosafer', 'published', 'false', '2022-12-27 07:58:26', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(39, 'Akash Institute', 'uploads/stores/63aaa5d4a24d3.png', NULL, NULL, 'akash-institute', 'Akash Institute', 'Akash Institute', 'Akash Institute', 'published', 'false', '2022-12-27 07:59:16', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(40, 'Air India', 'uploads/stores/63aaa5fa1be2f.png', NULL, NULL, 'air-india', 'Air India', 'Air India', 'Air India', 'published', 'false', '2022-12-27 07:59:54', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(41, 'AVVNL Bill Payment', 'uploads/stores/63aaa6388bc8a.png', NULL, NULL, 'avvnl-bill-payment', 'AVVNL Bill Payment', 'AVVNL Bill Payment', 'AVVNL Bill Payment', 'published', 'false', '2022-12-27 08:00:56', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(42, 'ASOS', 'uploads/stores/63aaa83d349c8.png', NULL, NULL, 'asos', 'ASOS', 'ASOS', 'ASOS', 'published', 'false', '2022-12-27 08:09:33', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(43, 'ADCOM', 'uploads/stores/63aaa89d6f2b0.png', NULL, NULL, 'adcom', 'ADCOM', 'ADCOM', 'ADCOM', 'published', 'false', '2022-12-27 08:11:09', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(44, 'Alibris Book', 'uploads/stores/63aaa8c9284ed.png', NULL, NULL, 'alibris-book', 'Alibris Book', 'Alibris Book', 'Alibris Book', 'published', 'false', '2022-12-27 08:11:53', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(45, 'ALT Balaji', 'uploads/stores/63aaa8f0df5b9.png', NULL, NULL, 'alt-balaji', 'ALT Balaji', 'ALT Balaji', 'ALT Balaji', 'published', 'false', '2022-12-27 08:12:32', '2023-01-06 10:37:44', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(46, 'Amazon Fashion', 'uploads/stores/63aaa943a1cf8.png', NULL, NULL, 'amazon-fashion', 'Amazon Fashion', 'Amazon Fashion', 'Amazon Fashion', 'published', 'false', '2022-12-27 08:13:55', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(47, 'Allen Solly', 'uploads/stores/63aaab2cd65b0.png', NULL, NULL, 'allen-solly', 'Allen Solly', 'Allen Solly', 'Allen Solly', 'published', 'false', '2022-12-27 08:22:04', '2023-01-10 19:22:00', NULL, NULL, NULL, 1, 1, 'https://fas.st/IdX2x', 'false'),
(48, 'Adda 247', 'uploads/stores/63aaab92e16a4.png', NULL, NULL, 'adda-247', 'Adda 247', 'Adda 247', 'Adda 247', 'published', 'false', '2022-12-27 08:23:46', '2023-01-06 10:37:33', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(49, 'Aurelia', 'uploads/stores/63aaabccd9ae2.png', NULL, NULL, 'aurelia', 'Aurelia', 'Aurelia', 'Aurelia', 'published', 'false', '2022-12-27 08:24:44', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(50, 'A Fragrance Story', 'uploads/stores/63aab737221a4.png', NULL, NULL, 'a-fragrance-story', 'A Fragrance Story', 'A Fragrance Story', 'A Fragrance Story', 'published', 'false', '2022-12-27 09:13:27', '2023-01-06 10:37:07', NULL, NULL, NULL, 1, 1, 'https://afragrancestory.in/', 'true'),
(51, 'AVG', 'uploads/stores/63aab75268824.png', NULL, NULL, 'avg', 'AVG', 'AVG', 'AVG', 'published', 'false', '2022-12-27 09:13:54', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(52, 'Actofit', 'uploads/stores/63aab81f850c1.png', NULL, NULL, 'actofit', 'Actofit', 'Actofit', 'Actofit', 'published', 'false', '2022-12-27 09:17:19', '2023-01-06 10:37:31', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(53, 'AstroVed', 'uploads/stores/63aab842cfd66.png', NULL, NULL, 'astroved', 'AstroVed', 'AstroVed', 'AstroVed', 'published', 'false', '2022-12-27 09:17:54', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(54, 'Anveya', 'uploads/stores/63aab86693bde.png', NULL, NULL, 'anveya', 'Anveya', 'Anveya', 'Anveya', 'published', 'false', '2022-12-27 09:18:30', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(55, 'Addagames', 'uploads/stores/63aab889eb508.png', NULL, NULL, 'addagames', 'Addagames', 'Addagames', 'Addagames', 'published', 'false', '2022-12-27 09:19:05', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(56, 'Apple', 'uploads/stores/63aab8bc43bd1.png', NULL, NULL, 'apple', 'Apple', 'Apple', 'Apple', 'published', 'false', '2022-12-27 09:19:56', '2023-01-06 10:37:46', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(57, 'Amazfit', 'uploads/stores/63aab8ec18426.png', NULL, NULL, 'amazfit', 'Amazfit', 'Amazfit', 'Amazfit', 'published', 'false', '2022-12-27 09:20:44', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false');
INSERT INTO `stores` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`, `store_affilate_url`, `is_popular`) VALUES
(58, 'Apollo247', 'uploads/stores/63aab9164d9ef.png', NULL, NULL, 'apollo247', 'Apollo247', 'Apollo247', 'Apollo247', 'published', 'false', '2022-12-27 09:21:26', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(59, 'Abe Books', NULL, NULL, NULL, 'abe-books', 'Abe Books', 'Abe Books', 'Abe Books', 'published', 'false', '2022-12-27 09:22:16', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(60, 'Alaya', 'uploads/stores/63aaba300d46d.png', NULL, NULL, 'alaya', 'Alaya', 'Alaya', 'Alaya', 'published', 'false', '2022-12-27 09:26:08', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(61, 'Acne Sqaud', 'uploads/stores/63aaba5d888d9.png', NULL, NULL, 'acne-sqaud', 'Acne Sqaud', 'Acne Sqaud', 'Acne Sqaud', 'published', 'false', '2022-12-27 09:26:53', '2023-01-06 10:37:27', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(62, 'Aastey', 'uploads/stores/63aac11a1e31e.png', NULL, NULL, 'aastey', 'Aastey', 'Aastey', 'Aastey', 'published', 'false', '2022-12-27 09:55:38', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(63, 'Amaara', 'uploads/stores/63aac136c5f26.png', NULL, NULL, 'amaara', 'Amaara', 'Amaara', 'Amaara', 'published', 'false', '2022-12-27 09:56:06', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(64, 'Arista Vault', 'uploads/stores/63aac16ce6b6d.png', NULL, NULL, 'arista-vault', 'Arista Vault', 'Arista Vault', 'Arista Vault', 'published', 'false', '2022-12-27 09:57:00', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(65, 'Allianz Assistance', 'uploads/stores/63aac18bbfc14.png', NULL, NULL, 'allianz-assistance', 'Allianz Assistance', 'Allianz Assistance', 'Allianz Assistance', 'published', 'false', '2022-12-27 09:57:31', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(66, 'AR4 Mangoes', 'uploads/stores/63aac25973a84.png', NULL, NULL, 'ar4-mangoes', 'AR4 Mangoes', 'AR4 Mangoes', 'AR4 Mangoes', 'published', 'false', '2022-12-27 10:00:57', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(67, 'Abel', 'uploads/stores/63aac289211fb.png', NULL, NULL, 'abel', 'Abel', 'Abel', 'Abel', 'published', 'false', '2022-12-27 10:01:45', '2023-01-06 10:37:18', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(68, 'Arsty India', 'uploads/stores/63aac2b425762.png', NULL, NULL, 'arsty-india', 'Arsty India', 'Arsty India', 'Arsty India', 'published', 'false', '2022-12-27 10:02:28', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(69, 'Asian Cinemas', 'uploads/stores/63aac2cddb819.png', NULL, NULL, 'asian-cinemas', 'Asian Cinemas', 'Asian Cinemas', 'Asian Cinemas', 'published', 'false', '2022-12-27 10:02:53', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(70, 'Address Home', 'uploads/stores/63aac2efbd612.png', NULL, NULL, 'address-home', 'Address Home', 'Address Home', 'Address Home', 'published', 'false', '2022-12-27 10:03:27', '2023-01-06 10:37:34', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(71, 'Anita Dongre', 'uploads/stores/63aac312e90c7.png', NULL, NULL, 'anita-dongre', 'Anita Dongre', 'Anita Dongre', 'Anita Dongre', 'published', 'false', '2022-12-27 10:04:02', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(72, 'Amazon Prime Video', 'uploads/stores/63aac34a8ccfd.png', NULL, NULL, 'amazon-prime-video', 'Amazon Prime Video', 'Amazon Prime Video', 'Amazon Prime Video', 'published', 'false', '2022-12-27 10:04:58', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(73, 'Amar Chitra Kath', 'uploads/stores/63aac3a86f7e2.png', NULL, NULL, 'amar-chitra-kath', 'Amar Chitra Kath', 'Amar Chitra Kath', 'Amar Chitra Kath', 'published', 'false', '2022-12-27 10:06:32', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(74, 'Airbnb', 'uploads/stores/63aac3cb57004.png', NULL, NULL, 'airbnb', 'Airbnb', 'Airbnb', 'Airbnb', 'published', 'false', '2022-12-27 10:07:07', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(75, 'Adidas IN', 'uploads/stores/63aac3e64a87f.png', NULL, NULL, 'adidas-in', 'Adidas IN', 'Adidas IN', 'Adidas IN', 'published', 'false', '2022-12-27 10:07:34', '2023-01-23 13:00:49', NULL, NULL, NULL, 1, 1, 'https://track.omguk.com/?AID=2339263&PID=17736&r=https%3A%2F%2Fwww.adidas.co.in%2F', 'false'),
(76, 'Adani Electricity Bill Payment', 'uploads/stores/63aac465673b0.png', NULL, NULL, 'adani-electricity-bill-payment', 'Adani Electricity Bill Payment', 'Adani Electricity Bill Payment', 'Adani Electricity Bill Payment', 'published', 'false', '2022-12-27 10:09:41', '2023-01-06 10:37:32', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(77, 'Airydress', 'uploads/stores/63aac489980e0.png', NULL, NULL, 'airydress', 'Airydress', 'Airydress', 'Airydress', 'published', 'false', '2022-12-27 10:10:17', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(78, 'Arrow', 'uploads/stores/63aac4a764d3f.png', NULL, NULL, 'arrow', 'Arrow', 'Arrow', 'Arrow', 'published', 'false', '2022-12-27 10:10:47', '2023-01-06 10:37:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(79, 'Asianet Broadband', 'uploads/stores/63aac4c91b793.png', NULL, NULL, 'asianet-broadband', 'Asianet Broadband', 'Asianet Broadband', 'Asianet Broadband', 'published', 'false', '2022-12-27 10:11:21', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(80, 'Aura', 'uploads/stores/63aac4e6078c3.png', NULL, NULL, 'aura', 'Aura', 'Aura', 'Aura', 'published', 'false', '2022-12-27 10:11:50', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(81, 'Autodesk', 'uploads/stores/63aac4fc3a3ae.png', NULL, NULL, 'autodesk', 'Autodesk', 'Autodesk', 'Autodesk', 'published', 'false', '2022-12-27 10:12:12', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(82, 'AZA', 'uploads/stores/63aac53da2c77.png', NULL, NULL, 'aza', 'AZA', 'AZA', 'AZA', 'published', 'false', '2022-12-27 10:13:17', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(83, 'Andamen', 'uploads/stores/63aac556cb329.png', NULL, NULL, 'andamen', 'Andamen', 'Andamen', 'Andamen', 'published', 'false', '2022-12-27 10:13:42', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(84, 'Admyrin', 'uploads/stores/63aac574e7563.png', NULL, NULL, 'admyrin', 'Admyrin', 'Admyrin', 'Admyrin', 'published', 'false', '2022-12-27 10:14:12', '2023-01-06 10:37:37', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(85, 'Air Arabia', 'uploads/stores/63aac591da9dd.png', NULL, NULL, 'air-arabia', 'Air Arabia', 'Air Arabia', 'Air Arabia', 'published', 'false', '2022-12-27 10:14:41', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(86, 'Aura VR', 'uploads/stores/63aac5afb370c.png', NULL, NULL, 'aura-vr', 'Aura VR', 'Aura VR', 'Aura VR', 'published', 'false', '2022-12-27 10:15:11', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(87, 'Apollo Pharmacy', 'uploads/stores/63aac5f77ffba.png', NULL, NULL, 'apollo-pharmacy', 'Apollo Pharmacy', 'Apollo Pharmacy', 'Apollo Pharmacy', 'published', 'false', '2022-12-27 10:16:23', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(88, 'Aura Beauty Salon', 'uploads/stores/63aac63a9d585.png', NULL, NULL, 'aura-beauty-salon', 'Aura Beauty Salon', 'Aura Beauty Salon', 'Aura Beauty Salon', 'published', 'false', '2022-12-27 10:17:30', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(89, 'AlchemLife', 'uploads/stores/63aac66ced464.png', NULL, NULL, 'alchemlife', 'AlchemLife', 'AlchemLife', 'AlchemLife', 'published', 'false', '2022-12-27 10:18:20', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(90, 'AirMalta', 'uploads/stores/63aac6c733493.png', NULL, NULL, 'airmalta', 'AirMalta', 'AirMalta', 'AirMalta', 'published', 'false', '2022-12-27 10:19:51', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(91, 'Avant Sport', 'uploads/stores/63aac6db15c9c.png', NULL, NULL, 'avant-sport', 'Avant Sport', 'Avant Sport', 'Avant Sport', 'published', 'false', '2022-12-27 10:20:11', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(92, 'AS-IT-IS Nutrition', 'uploads/stores/63aac704e5488.png', NULL, NULL, 'as-it-is-nutrition', 'AS-IT-IS Nutrition', 'AS-IT-IS Nutrition', 'AS-IT-IS Nutrition', 'published', 'false', '2022-12-27 10:20:52', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(93, 'AND', 'uploads/stores/63aac716ba85c.png', NULL, NULL, 'and', 'AND', 'AND', 'AND', 'published', 'false', '2022-12-27 10:21:10', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(94, 'Airtel Broadband', 'uploads/stores/63aac73b6cc8b.png', NULL, NULL, 'airtel-broadband', 'Airtel Broadband', 'Airtel Broadband', 'Airtel Broadband', 'published', 'false', '2022-12-27 10:21:47', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(95, 'ACT Fibernet', 'uploads/stores/63aac757e73de.png', NULL, NULL, 'act-fibernet', 'ACT Fibernet', 'ACT Fibernet', 'ACT Fibernet', 'published', 'false', '2022-12-27 10:22:15', '2023-01-06 10:37:28', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(96, 'Asics', 'uploads/stores/63aac772230b1.png', NULL, NULL, 'asics', 'Asics', 'Asics', 'Asics', 'published', 'false', '2022-12-27 10:22:42', '2023-01-06 10:37:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(97, 'Animoto', 'uploads/stores/63aac7d48bb1f.png', NULL, NULL, 'animoto', 'Animoto', 'Animoto', 'Animoto', 'published', 'false', '2022-12-27 10:24:20', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(98, 'Active Beaute', 'uploads/stores/63aac7eaebcb9.png', NULL, NULL, 'active-beaute', 'Active Beaute', 'Active Beaute', 'Active Beaute', 'published', 'false', '2022-12-27 10:24:42', '2023-01-06 10:37:29', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(99, 'Abuggy', 'uploads/stores/63aacb2e31281.png', NULL, NULL, 'abuggy', 'Abuggy', 'Abuggy', 'Abuggy', 'published', 'false', '2022-12-27 10:38:38', '2023-01-06 10:37:21', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(100, 'Axiobiostore', 'uploads/stores/63aacb5dcc854.png', NULL, NULL, 'axiobiostore', 'Axiobiostore', 'Axiobiostore', 'Axiobiostore', 'published', 'false', '2022-12-27 10:39:25', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(101, 'Avni', 'uploads/stores/63aacb7bc087a.png', NULL, NULL, 'avni', 'Avni', 'Avni', 'Avni', 'published', 'false', '2022-12-27 10:39:55', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(102, 'Alamy', 'uploads/stores/63aacb96db947.png', NULL, NULL, 'alamy', 'Alamy', 'Alamy', 'Alamy', 'published', 'false', '2022-12-27 10:40:22', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(103, 'Analyttica TreasureHunt Leaps', 'uploads/stores/63aacbc840dfd.png', NULL, NULL, 'analyttica-treasurehunt-leaps', 'Analyttica TreasureHunt Leaps', 'Analyttica TreasureHunt Leaps', 'Analyttica TreasureHunt Leaps', 'published', 'false', '2022-12-27 10:41:12', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(104, 'Adlabs Imagica', 'uploads/stores/63aacbfc7a5a5.png', NULL, NULL, 'adlabs-imagica', 'Adlabs Imagica', 'Adlabs Imagica', 'Adlabs Imagica', 'published', 'false', '2022-12-27 10:42:04', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(105, 'Archies', 'uploads/stores/63aacc3b93f5e.png', NULL, NULL, 'archies', 'Archies', 'Archies', 'Archies', 'published', 'false', '2022-12-27 10:43:07', '2023-01-06 10:37:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(106, 'Abof', 'uploads/stores/63aacc58bd993.png', NULL, NULL, 'abof', 'Abof', 'Abof', 'Abof', 'published', 'false', '2022-12-27 10:43:36', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(108, 'Apka Interior', 'uploads/stores/63aacca49660f.png', NULL, NULL, 'apka-interior', 'Apka Interior', 'Apka Interior', 'Apka Interior', 'published', 'false', '2022-12-27 10:44:52', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(109, 'Acko', 'uploads/stores/63aacce5465c0.png', NULL, NULL, 'acko', 'Acko', 'Acko', 'Acko', 'published', 'false', '2022-12-27 10:45:57', '2023-01-06 10:37:27', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(110, 'Aha Taxis', 'uploads/stores/63aace0f3ce7a.png', NULL, NULL, 'aha-taxis', 'Aha Taxis', 'Aha Taxis', 'Aha Taxis', 'published', 'false', '2022-12-27 10:50:55', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(111, 'Aegon Life', 'uploads/stores/63aace338576e.png', NULL, NULL, 'aegon-life', 'Aegon Life', 'Aegon Life', 'Aegon Life', 'published', 'false', '2022-12-27 10:51:31', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(112, 'Autofresh', 'uploads/stores/63aace834b72c.png', NULL, NULL, 'autofresh', 'Autofresh', 'Autofresh', 'Autofresh', 'published', 'false', '2022-12-27 10:52:51', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(113, 'Ashopi', 'uploads/stores/63aaceac5313f.png', NULL, NULL, 'ashopi', 'Ashopi', 'Ashopi', 'Ashopi', 'published', 'false', '2022-12-27 10:53:32', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(114, 'At Home', 'uploads/stores/63b292b1a20cc.png', NULL, NULL, 'at-home', 'At Home', 'At Home', 'At Home', 'published', 'false', '2022-12-27 11:00:29', '2023-01-05 07:13:02', NULL, NULL, NULL, 1, 1, 'https://fas.st/-ZQlUE', 'false'),
(115, 'Adda 52', 'uploads/stores/63aad06c33ce4.png', NULL, NULL, 'adda-52', 'Adda 52', 'Adda 52', 'Adda 52', 'published', 'false', '2022-12-27 11:01:00', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(116, 'Aptech Eductaion', 'uploads/stores/63aad0995152b.png', NULL, NULL, 'aptech-eductaion', 'Aptech Eductaion', 'Aptech Eductaion', 'Aptech Eductaion', 'published', 'false', '2022-12-27 11:01:45', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(117, 'Aha Guru', 'uploads/stores/63aad0e014af0.png', NULL, NULL, 'aha-guru', 'Aha Guru', 'Aha Guru', 'Aha Guru', 'published', 'false', '2022-12-27 11:02:56', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(118, 'Aha Subscription Plan', 'uploads/stores/63aad11bb7923.png', NULL, NULL, 'aha-subscription-plan', 'Aha Subscription Plan', 'Aha Subscription Plan', 'Aha Subscription Plan', 'published', 'false', '2022-12-27 11:03:55', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(121, 'Archies Footwear', 'uploads/stores/63aad2c1e266b.png', NULL, NULL, 'archies-footwear', 'Archies Footwear', 'Archies Footwear', 'Archies Footwear', 'published', 'false', '2022-12-27 11:10:57', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(122, 'AGM Web Hosting', 'uploads/stores/63aad2ef5c4c4.png', NULL, NULL, 'agm-web-hosting', 'AGM Web Hosting', 'AGM Web Hosting', 'AGM Web Hosting', 'published', 'false', '2022-12-27 11:11:43', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(123, 'A2 Hosting', 'uploads/stores/63aad312a5ec5.png', NULL, NULL, 'a2-hosting', 'A2 Hosting', 'A2 Hosting', 'A2 Hosting', 'published', 'false', '2022-12-27 11:12:18', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(124, 'Arttdinox', 'uploads/stores/63aad33102ea2.png', NULL, NULL, 'arttdinox', 'Arttdinox', 'Arttdinox', 'Arttdinox', 'published', 'false', '2022-12-27 11:12:49', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(125, 'Alma Mater', NULL, NULL, NULL, 'alma-mater', 'Alma Mater', 'Alma Mater', 'Alma Mater', 'published', 'false', '2022-12-27 11:13:33', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(126, 'Ace Blend', 'uploads/stores/63aad37eaa5dd.png', NULL, NULL, 'ace-blend', 'Ace Blend', 'Ace Blend', 'Ace Blend', 'published', 'false', '2022-12-27 11:14:06', '2023-01-06 10:37:23', NULL, NULL, NULL, 1, 1, NULL, 'true'),
(127, 'Adobe', 'uploads/stores/63aad3976197f.png', NULL, NULL, 'adobe', 'Adobe', 'Adobe', 'Adobe', 'published', 'false', '2022-12-27 11:14:31', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(128, 'Aditya Birla Capital Health Insurance', 'uploads/stores/63aad3ba5b680.png', NULL, NULL, 'aditya-birla-capital-health-insurance', 'Aditya Birla Capital Health Insurance', 'Aditya Birla Capital Health Insurance', 'Aditya Birla Capital Health Insurance', 'published', 'false', '2022-12-27 11:15:06', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(129, 'Almond House', 'uploads/stores/63aad4079c51b.png', NULL, NULL, 'almond-house', 'Almond House', 'Almond House', 'Almond House', 'published', 'false', '2022-12-27 11:16:23', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(130, 'Ask Apollo', 'uploads/stores/63aad43436d4f.png', NULL, NULL, 'ask-apollo', 'Ask Apollo', 'Ask Apollo', 'Ask Apollo', 'published', 'false', '2022-12-27 11:17:08', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(131, 'Angel Broking', 'uploads/stores/63aad460141a9.png', NULL, NULL, 'angel-broking', 'Angel Broking', 'Angel Broking', 'Angel Broking', 'published', 'false', '2022-12-27 11:17:52', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(132, 'Adventure Nation', 'uploads/stores/63aad48871d77.png', NULL, NULL, 'adventure-nation', 'Adventure Nation', 'Adventure Nation', 'Adventure Nation', 'published', 'false', '2022-12-27 11:18:32', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(133, 'All Online', 'uploads/stores/63aad4c58fd04.png', NULL, NULL, 'all-online', 'All Online', 'All Online', 'All Online', 'published', 'false', '2022-12-27 11:19:33', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(134, 'Amazon Pantry', 'uploads/stores/63aad52173de5.png', NULL, NULL, 'amazon-pantry', 'Amazon Pantry', 'Amazon Pantry', 'Amazon Pantry', 'published', 'false', '2022-12-27 11:21:05', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(135, 'Allen Cooper', 'uploads/stores/63aad53bd2f76.png', NULL, NULL, 'allen-cooper', 'Allen Cooper', 'Allen Cooper', 'Allen Cooper', 'published', 'false', '2022-12-27 11:21:31', '2023-01-01 05:29:50', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(136, 'Airtel Money', 'uploads/stores/63aad560bdd2a.png', NULL, NULL, 'airtel-money', 'Airtel Money', 'Airtel Money', 'Airtel Money', 'published', 'false', '2022-12-27 11:22:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(137, 'Alibaba', 'uploads/stores/63aad5790c4d0.png', NULL, NULL, 'alibaba', 'Alibaba', 'Alibaba', 'Alibaba', 'published', 'false', '2022-12-27 11:22:33', '2023-01-06 10:37:41', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(138, 'Amante', 'uploads/stores/63aad58f86596.png', NULL, NULL, 'amante', 'Amante', 'Amante', 'Amante', 'published', 'false', '2022-12-27 11:22:55', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(139, 'Attic Salt', 'uploads/stores/63aad5cad2a91.png', NULL, NULL, 'attic-salt', 'Attic Salt', 'Attic Salt', 'Attic Salt', 'published', 'false', '2022-12-27 11:23:54', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(140, 'Atlas VPN', 'uploads/stores/63aad5e2ce210.png', NULL, NULL, 'atlas-vpn', 'Atlas VPN', 'Atlas VPN', 'Atlas VPN', 'published', 'false', '2022-12-27 11:24:18', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(141, 'AZANI Car', 'uploads/stores/63aad754960ca.png', NULL, NULL, 'azani-car', 'AZANI Car', 'AZANI Car', 'AZANI Car', 'published', 'false', '2022-12-27 11:30:28', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(142, 'Amazon Pharmacy', 'uploads/stores/63aad776a6267.png', NULL, NULL, 'amazon-pharmacy', 'Amazon Pharmacy', 'Amazon Pharmacy', 'Amazon Pharmacy', 'published', 'false', '2022-12-27 11:31:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(143, 'Akasa Air', 'uploads/stores/63aad799209cb.png', NULL, NULL, 'akasa-air', 'Akasa Air', 'Akasa Air', 'Akasa Air', 'published', 'false', '2022-12-27 11:31:37', '2023-01-06 10:37:40', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(144, 'AndMe', 'uploads/stores/63aad7e82f2b2.png', NULL, NULL, 'andme', 'AndMe', 'AndMe', 'AndMe', 'published', 'false', '2022-12-27 11:32:56', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(145, 'Amkette', 'uploads/stores/63aad80d1027e.png', NULL, NULL, 'amkette', 'Amkette', 'Amkette', 'Amkette', 'published', 'false', '2022-12-27 11:33:33', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(146, 'Auric', 'uploads/stores/63aad8210fac7.png', NULL, NULL, 'auric', 'Auric', 'Auric', 'Auric', 'published', 'false', '2022-12-27 11:33:53', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(147, 'Asort', 'uploads/stores/63aad8368d23a.png', NULL, NULL, 'asort', 'Asort', 'Asort', 'Asort', 'published', 'false', '2022-12-27 11:34:14', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(148, 'Baxi Taxi', 'uploads/stores/63aaeac820b86.png', NULL, NULL, 'baxi-taxi', 'Baxi Taxi', 'Baxi Taxi', 'Baxi Taxi', 'published', 'false', '2022-12-27 12:53:28', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(149, 'Burger Singh', 'uploads/stores/63aaeae7cff94.png', NULL, NULL, 'burger-singh', 'Burger Singh', 'Burger Singh', 'Burger Singh', 'published', 'false', '2022-12-27 12:53:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(150, 'Biryani Pot', 'uploads/stores/63aaeb0453fb9.png', NULL, NULL, 'biryani-pot', 'Biryani Pot', 'Biryani Pot', 'Biryani Pot', 'published', 'false', '2022-12-27 12:54:28', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(151, 'Bikarevala', 'uploads/stores/63aaeb22cbbaa.png', NULL, NULL, 'bikarevala', 'Bikarevala', 'Bikarevala', 'Bikarevala', 'published', 'false', '2022-12-27 12:54:58', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(152, 'Bombay Shirt Company', 'uploads/stores/63aaeb4b0f854.png', NULL, NULL, 'bombay-shirt-company', 'Bombay Shirt Company', 'Bombay Shirt Company', 'Bombay Shirt Company', 'published', 'false', '2022-12-27 12:55:39', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(153, 'Besiva', 'uploads/stores/63aaeb6892548.png', NULL, NULL, 'besiva', 'Besiva', 'Besiva', 'Besiva', 'published', 'false', '2022-12-27 12:56:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(154, 'Big Boys Toys', 'uploads/stores/63aaeb8de3aa3.png', NULL, NULL, 'big-boys-toys', 'Big Boys Toys', 'Big Boys Toys', 'Big Boys Toys', 'published', 'false', '2022-12-27 12:56:45', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(155, 'Bus India', 'uploads/stores/63aaebd1c3dad.png', NULL, NULL, 'bus-india', 'Bus India', 'Bus India', 'Bus India', 'published', 'false', '2022-12-27 12:57:53', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(156, 'Book My Flower', 'uploads/stores/63aaebedb10e0.png', NULL, NULL, 'book-my-flower', 'Book My Flower', 'Book My Flower', 'Book My Flower', 'published', 'false', '2022-12-27 12:58:21', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(157, 'BharatMatrimony', 'uploads/stores/63aaec1c6dfec.png', NULL, NULL, 'bharatmatrimony', 'BharatMatrimony', 'BharatMatrimony', 'BharatMatrimony', 'published', 'false', '2022-12-27 12:59:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(159, 'Big Basket', 'uploads/stores/63aaec68ea74a.png', NULL, NULL, 'big-basket', 'Big Basket', 'Big Basket', 'Big Basket', 'published', 'false', '2022-12-27 13:00:24', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(160, 'BabyCharka', 'uploads/stores/63aaecf094995.png', NULL, NULL, 'babycharka', 'BabyCharka', 'BabyCharka', 'BabyCharka', 'published', 'false', '2022-12-27 13:02:40', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(161, 'BeadsNFashion', 'uploads/stores/63aaed189aae1.png', NULL, NULL, 'beadsnfashion', 'BeadsNFashion', 'BeadsNFashion', 'BeadsNFashion', 'published', 'false', '2022-12-27 13:03:20', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(162, 'Wow Skin Science', 'uploads/stores/63aaed3f53a05.png', NULL, NULL, 'wow-skin-science', 'Wow Skin Science', 'Wow Skin Science', 'Wow Skin Science', 'published', 'false', '2022-12-27 13:03:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(163, 'BSES', 'uploads/stores/63aaed6b69159.png', NULL, NULL, 'bses', 'BSES', 'BSES', 'BSES', 'published', 'false', '2022-12-27 13:04:43', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(164, 'Baby Couture', 'uploads/stores/63aaed99e0820.png', NULL, NULL, 'baby-couture', 'Baby Couture', 'Baby Couture', 'Baby Couture', 'published', 'false', '2022-12-27 13:05:29', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(165, 'BE Awara', 'uploads/stores/63aaedc2f1379.png', NULL, NULL, 'be-awara', 'BE Awara', 'BE Awara', 'BE Awara', 'published', 'false', '2022-12-27 13:06:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(166, 'Banggood', 'uploads/stores/63aaeddf04952.png', NULL, NULL, 'banggood', 'Banggood', 'Banggood', 'Banggood', 'published', 'false', '2022-12-27 13:06:39', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(167, 'Beyond Enough', 'uploads/stores/63aaee0a3a7ee.png', NULL, NULL, 'beyond-enough', 'Beyond Enough', 'Beyond Enough', 'Beyond Enough', 'published', 'false', '2022-12-27 13:07:22', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(168, 'Byju\'s', 'uploads/stores/63aaee4215d0a.png', NULL, NULL, 'byjus', 'Byju\'s', 'Byju\'s', 'Byju\'s', 'published', 'false', '2022-12-27 13:08:18', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(169, 'Bikaji', 'uploads/stores/63aaee6b99849.png', NULL, NULL, 'bikaji', 'Bikaji', 'Bikaji', 'Bikaji', 'published', 'false', '2022-12-27 13:08:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(170, 'Big Breaks', 'uploads/stores/63aaee92ab8a2.png', NULL, NULL, 'big-breaks', 'Big Breaks', 'Big Breaks', 'Big Breaks', 'published', 'false', '2022-12-27 13:09:38', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(171, 'Bath And Body Works', 'uploads/stores/63aaeec6489a0.png', NULL, NULL, 'bath-and-body-works', 'Bath And Body Works', 'Bath And Body Works', 'Bath And Body Works', 'published', 'false', '2022-12-27 13:10:30', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(172, 'Baby Shop', 'uploads/stores/63aaeef274c7d.png', NULL, NULL, 'baby-shop', 'Baby Shop', 'Baby Shop', 'Baby Shop', 'published', 'false', '2022-12-27 13:11:14', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(173, 'BookOtrip', 'uploads/stores/63aaef0a4a54f.png', NULL, NULL, 'bookotrip', 'BookOtrip', 'BookOtrip', 'BookOtrip', 'published', 'false', '2022-12-27 13:11:38', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(174, 'Brand Factory', 'uploads/stores/63aaef287307a.png', NULL, NULL, 'brand-factory', 'Brand Factory', 'Brand Factory', 'Brand Factory', 'published', 'false', '2022-12-27 13:12:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(175, 'Brooks Sports', 'uploads/stores/63aaef590fab8.png', NULL, NULL, 'brooks-sports', 'Brooks Sports', 'Brooks Sports', 'Brooks Sports', 'published', 'false', '2022-12-27 13:12:57', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(176, 'BerryLook', 'uploads/stores/63aaef89a1eb2.png', NULL, NULL, 'berrylook', 'BerryLook', 'BerryLook', 'BerryLook', 'published', 'false', '2022-12-27 13:13:45', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(177, 'BitDefender', 'uploads/stores/63aaefa24d2e3.png', NULL, NULL, 'bitdefender', 'BitDefender', 'BitDefender', 'BitDefender', 'published', 'false', '2022-12-27 13:14:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(178, 'Birkenstock', 'uploads/stores/63aaefd623436.png', NULL, NULL, 'birkenstock', 'Birkenstock', 'Birkenstock', 'Birkenstock', 'published', 'false', '2022-12-27 13:15:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(179, 'Body Cupid', 'uploads/stores/63aaf00e7e5ed.png', NULL, NULL, 'body-cupid', 'Body Cupid', 'Body Cupid', 'Body Cupid', 'published', 'false', '2022-12-27 13:15:58', '2023-01-10 19:28:45', NULL, NULL, NULL, 1, 1, '1', 'false'),
(180, 'Bisleri', 'uploads/stores/63aaf02c28bbb.png', NULL, NULL, 'bisleri', 'Bisleri', 'Bisleri', 'Bisleri', 'published', 'false', '2022-12-27 13:16:28', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(181, 'Body Care', 'uploads/stores/63aaf0ffca289.png', NULL, NULL, 'body-care', 'Body Care', 'Body Care', 'Body Care', 'published', 'false', '2022-12-27 13:19:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(182, 'Bajaj Finserv', 'uploads/stores/63aaf1919bc2f.png', NULL, NULL, 'bajaj-finserv', 'Bajaj Finserv', 'Bajaj Finserv', 'Bajaj Finserv', 'published', 'false', '2022-12-27 13:22:25', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(183, 'Beauty Scentiments', 'uploads/stores/63aaf1df8dbdb.png', NULL, NULL, 'beauty-scentiments', 'Beauty Scentiments', 'Beauty Scentiments', 'Beauty Scentiments', 'published', 'false', '2022-12-27 13:23:43', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(184, 'Bajajfinserv Health', 'uploads/stores/63aaf22019432.png', NULL, NULL, 'bajajfinserv-health', 'Bajajfinserv Health', 'Bajajfinserv Health', 'Bajajfinserv Health', 'published', 'false', '2022-12-27 13:24:48', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(185, 'Bgreen', 'uploads/stores/63aaf2661b2d3.png', NULL, NULL, 'bgreen', 'Bgreen', 'Bgreen', 'Bgreen', 'published', 'false', '2022-12-27 13:25:58', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(186, 'Best Bus', 'uploads/stores/63aaf29164f74.png', NULL, NULL, 'best-bus', 'Best Bus', 'Best Bus', 'Best Bus', 'published', 'false', '2022-12-27 13:26:41', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(187, 'Bata', 'uploads/stores/63aaf2a4de584.png', NULL, NULL, 'bata', 'Bata', 'Bata', 'Bata', 'published', 'false', '2022-12-27 13:27:00', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(188, 'Big Rock', 'uploads/stores/63aaf2bda1add.png', NULL, NULL, 'big-rock', 'Big Rock', 'Big Rock', 'Big Rock', 'published', 'false', '2022-12-27 13:27:25', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(189, 'BlueStone', 'uploads/stores/63aaf2d476f1e.png', NULL, NULL, 'bluestone', 'BlueStone', 'BlueStone', 'BlueStone', 'published', 'false', '2022-12-27 13:27:48', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(190, 'behrouz biryani', 'uploads/stores/63aaf2f050980.png', NULL, NULL, 'behrouz-biryani', 'behrouz biryani', 'behrouz biryani', 'behrouz biryani', 'published', 'false', '2022-12-27 13:28:16', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(191, 'Beardo', 'uploads/stores/63aaf30c7a1d8.png', NULL, NULL, 'beardo', 'Beardo', 'Beardo', 'Beardo', 'published', 'false', '2022-12-27 13:28:44', '2023-01-23 13:01:23', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/v2o70pwh8kbbece05094f3cb4f5322/?i=3', 'false'),
(192, 'Bombae', 'uploads/stores/63aaf32ac88a1.png', NULL, NULL, 'bombae', 'Bombae', 'Bombae', 'Bombae', 'published', 'false', '2022-12-27 13:29:14', '2023-01-10 14:40:54', NULL, NULL, NULL, 1, 1, 'https://fas.st/BEi1G', 'false'),
(193, 'Born Good', 'uploads/stores/63aaf34281a11.png', NULL, NULL, 'born-good', 'Born Good', 'Born Good', 'Born Good', 'published', 'false', '2022-12-27 13:29:38', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(194, 'Bombay Trooper', 'uploads/stores/63aaf38b1fab1.png', NULL, NULL, 'bombay-trooper', 'Bombay Trooper', 'Bombay Trooper', 'Bombay Trooper', 'published', 'false', '2022-12-27 13:30:51', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(195, 'Blackberrys', 'uploads/stores/63aaf3a752b84.png', NULL, NULL, 'blackberrys', 'Blackberrys', 'Blackberrys', 'Blackberrys', 'published', 'false', '2022-12-27 13:31:19', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(196, 'Bajaj Electricals', 'uploads/stores/63aaf3cc6d938.png', NULL, NULL, 'bajaj-electricals', 'Bajaj Electricals', 'Bajaj Electricals', 'Bajaj Electricals', 'published', 'false', '2022-12-27 13:31:56', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(197, 'Bajaao', 'uploads/stores/63aaf3e4d241d.png', NULL, NULL, 'bajaao', 'Bajaao', 'Bajaao', 'Bajaao', 'published', 'false', '2022-12-27 13:32:20', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(198, 'BIBA', 'uploads/stores/63aaf3f6c1728.png', NULL, NULL, 'biba', 'BIBA', 'BIBA', 'BIBA', 'published', 'false', '2022-12-27 13:32:38', '2023-01-10 19:23:44', NULL, NULL, NULL, 1, 1, 'https://fas.st/Bd_QD', 'false'),
(199, 'BlueHost', 'uploads/stores/63bc02265edd7.png', NULL, NULL, 'bluehost', 'BlueHost', 'BlueHost', 'BlueHost', 'published', 'false', '2022-12-27 13:33:01', '2023-01-09 12:03:09', NULL, NULL, NULL, 1, 1, 'https://fas.st/-xhAm', 'false'),
(200, 'Bhane', 'uploads/stores/63aaf42337ef8.png', NULL, NULL, 'bhane', 'Bhane', 'Bhane', 'Bhane', 'published', 'false', '2022-12-27 13:33:23', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(201, 'BookMyCab', 'uploads/stores/63aaf443c7e76.png', NULL, NULL, 'bookmycab', 'BookMyCab', 'BookMyCab', 'BookMyCab', 'published', 'false', '2022-12-27 13:33:55', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(202, 'biotique', 'uploads/stores/63aaf47794166.png', NULL, NULL, 'biotique', 'biotique', 'biotique', 'biotique', 'published', 'false', '2022-12-27 13:34:47', '2023-01-01 05:28:08', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(203, 'BookMyForex', 'uploads/stores/63aaf5a200fff.png', NULL, NULL, 'bookmyforex', 'BookMyForex', 'BookMyForex', 'BookMyForex', 'published', 'false', '2022-12-27 13:39:46', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(204, 'BigBuy', 'uploads/stores/63aaf75d7a2a3.png', NULL, NULL, 'bigbuy', 'BigBuy', 'BigBuy', 'BigBuy', 'published', 'false', '2022-12-27 13:47:09', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(205, 'BESCOM Bill Payment', 'uploads/stores/63aaf78388b70.png', NULL, NULL, 'bescom-bill-payment', 'BESCOM Bill Payment', 'BESCOM Bill Payment', 'BESCOM Bill Payment', 'published', 'false', '2022-12-27 13:47:47', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(206, 'Baggit', 'uploads/stores/63aaf7b54c744.png', NULL, NULL, 'baggit', 'Baggit', 'Baggit', 'Baggit', 'published', 'false', '2022-12-27 13:48:37', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(207, 'Bibo', 'uploads/stores/63abe6f084901.png', NULL, NULL, 'bibo', 'Bibo', 'Bibo', 'Bibo', 'published', 'false', '2022-12-28 06:49:20', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(208, 'bare Anatomy', 'uploads/stores/63abe709aed8d.png', NULL, NULL, 'bare-anatomy', 'bare Anatomy', 'bare Anatomy', 'bare Anatomy', 'published', 'false', '2022-12-28 06:49:45', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(209, 'BioDerma', 'uploads/stores/63abe721cec7d.png', NULL, NULL, 'bioderma', 'BioDerma', 'BioDerma', 'BioDerma', 'published', 'false', '2022-12-28 06:50:09', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(210, 'Black Shark', 'uploads/stores/63abe73e81070.png', NULL, NULL, 'black-shark', 'Black Shark', 'Black Shark', 'Black Shark', 'published', 'false', '2022-12-28 06:50:38', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(211, 'BB Daily', 'uploads/stores/63abe75855c01.png', NULL, NULL, 'bb-daily', 'BB Daily', 'BB Daily', 'BB Daily', 'published', 'false', '2022-12-28 06:51:04', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(212, 'Bounce', 'uploads/stores/63abe79f98408.png', NULL, NULL, 'bounce', 'Bounce', 'Bounce', 'Bounce', 'published', 'false', '2022-12-28 06:52:15', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(213, 'Book Depository', 'uploads/stores/63abe7c1c3d03.png', NULL, NULL, 'book-depository', 'Book Depository', 'Book Depository', 'Book Depository', 'published', 'false', '2022-12-28 06:52:49', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(214, 'BalleBaazi', 'uploads/stores/63abe7dd59fd6.png', NULL, NULL, 'ballebaazi', 'BalleBaazi', 'BalleBaazi', 'BalleBaazi', 'published', 'false', '2022-12-28 06:53:17', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(215, 'Book window', 'uploads/stores/63abe7fe3615e.png', NULL, NULL, 'book-window', 'Book window', 'Book window', 'Book window', 'published', 'false', '2022-12-28 06:53:50', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(216, 'Bantia Furniture', 'uploads/stores/63abe88c1de45.png', NULL, NULL, 'bantia-furniture', 'Bantia Furniture', 'Bantia Furniture', 'Bantia Furniture', 'published', 'false', '2022-12-28 06:56:12', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(217, 'Bira 91', 'uploads/stores/63abe8a25a98e.png', NULL, NULL, 'bira-91', 'Bira 91', 'Bira 91', 'Bira 91', 'published', 'false', '2022-12-28 06:56:34', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(218, 'BidforX', 'uploads/stores/63abe8bee7b69.png', NULL, NULL, 'bidforx', 'BidforX', 'BidforX', 'BidforX', 'published', 'false', '2022-12-28 06:57:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(219, 'BookChor', 'uploads/stores/63abe8e4de93b.png', NULL, NULL, 'bookchor', 'BookChor', 'BookChor', 'BookChor', 'published', 'false', '2022-12-28 06:57:40', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(221, 'Bahuji', 'uploads/stores/63abe940dd841.png', NULL, NULL, 'bahuji', 'Bahuji', 'Bahuji', 'Bahuji', 'published', 'false', '2022-12-28 06:59:12', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(222, 'Bacca Bucci', 'uploads/stores/63abe9582ae75.png', NULL, NULL, 'bacca-bucci', 'Bacca Bucci', 'Bacca Bucci', 'Bacca Bucci', 'published', 'false', '2022-12-28 06:59:36', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(223, 'BeatXP', 'uploads/stores/63abe972dd892.png', NULL, NULL, 'beatxp', 'BeatXP', 'BeatXP', 'BeatXP', 'published', 'false', '2022-12-28 07:00:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(224, 'Benetton', 'uploads/stores/63abe9906eb9f.png', NULL, NULL, 'benetton', 'Benetton', 'Benetton', 'Benetton', 'published', 'false', '2022-12-28 07:00:32', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(225, 'Blinkit', 'uploads/stores/63abe9b014622.png', NULL, NULL, 'blinkit', 'Blinkit', 'Blinkit', 'Blinkit', 'published', 'false', '2022-12-28 07:01:04', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(226, 'Baidyanath', 'uploads/stores/63abe9d851765.png', NULL, NULL, 'baidyanath', 'Baidyanath', 'Baidyanath', 'Baidyanath', 'published', 'false', '2022-12-28 07:01:44', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(227, 'Bestseller Clothing', 'uploads/stores/63abea00b0ba6.png', NULL, NULL, 'bestseller-clothing', 'Bestseller Clothing', 'Bestseller Clothing', 'Bestseller Clothing', 'published', 'false', '2022-12-28 07:02:24', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(228, 'BSNL', 'uploads/stores/63abea3f87192.png', NULL, NULL, 'bsnl', 'BSNL', 'BSNL', 'BSNL', 'published', 'false', '2022-12-28 07:03:27', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(229, 'BonOrganik', 'uploads/stores/63abea58ae751.png', NULL, NULL, 'bonorganik', 'BonOrganik', 'BonOrganik', 'BonOrganik', 'published', 'false', '2022-12-28 07:03:52', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 11, NULL, 'false'),
(230, 'Blinglane', 'uploads/stores/63abea7013919.png', NULL, NULL, 'blinglane', 'Blinglane', 'Blinglane', 'Blinglane', 'published', 'false', '2022-12-28 07:04:16', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(231, 'Bro4u', 'uploads/stores/63abea8cedb87.png', NULL, NULL, 'bro4u', 'Bro4u', 'Bro4u', 'Bro4u', 'published', 'false', '2022-12-28 07:04:44', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(232, 'Buy Test Series', 'uploads/stores/63abeaa6e5dd4.png', NULL, NULL, 'buy-test-series', 'Buy Test Series', 'Buy Test Series', 'Buy Test Series', 'published', 'false', '2022-12-28 07:05:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(233, 'Biryani Blues', 'uploads/stores/63abeacfd6a4d.png', NULL, NULL, 'biryani-blues', 'Biryani Blues', 'Biryani Blues', 'Biryani Blues', 'published', 'false', '2022-12-28 07:05:51', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(234, 'Bla Bla Car', 'uploads/stores/63abeae724139.png', NULL, NULL, 'bla-bla-car', 'Bla Bla Car', 'Bla Bla Car', 'Bla Bla Car', 'published', 'false', '2022-12-28 07:06:15', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(235, 'Boer And Fitch', 'uploads/stores/63abeb249ab88.png', NULL, NULL, 'boer-and-fitch', 'Boer And Fitch', 'Boer And Fitch', 'Boer And Fitch', 'published', 'false', '2022-12-28 07:07:16', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(236, 'Big C Mobiles', 'uploads/stores/63abeb7d04244.png', NULL, NULL, 'big-c-mobiles', 'Big C Mobiles', 'Big C Mobiles', 'Big C Mobiles', 'published', 'false', '2022-12-28 07:08:45', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(237, 'BankBazaar', 'uploads/stores/63abebbab6bea.png', NULL, NULL, 'bankbazaar', 'BankBazaar', 'BankBazaar', 'BankBazaar', 'published', 'false', '2022-12-28 07:09:46', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(238, 'british Airways', 'uploads/stores/63abec3ea8030.png', NULL, NULL, 'british-airways', 'british Airways', 'british Airways', 'british Airways', 'published', 'false', '2022-12-28 07:11:58', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(239, 'Big Bazaar', 'uploads/stores/63abedccad499.png', NULL, NULL, 'big-bazaar', 'Big Bazaar', 'Big Bazaar', 'Big Bazaar', 'published', 'false', '2022-12-28 07:18:36', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(240, 'Bewakoof', 'uploads/stores/63abede145abd.png', NULL, NULL, 'bewakoof', 'Bewakoof', 'Bewakoof', 'Bewakoof', 'published', 'false', '2022-12-28 07:18:57', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(241, 'BOX8', 'uploads/stores/63abedfb484d2.png', NULL, NULL, 'box8', 'BOX8', 'BOX8', 'BOX8', 'published', 'false', '2022-12-28 07:19:23', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(242, 'Booking.com', 'uploads/stores/63abee1f81e3c.com', NULL, NULL, 'bookingcom', 'Booking.com', 'Booking.com', 'Booking.com', 'published', 'false', '2022-12-28 07:19:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(243, 'Boddess', 'uploads/stores/63abee493fd16.png', NULL, NULL, 'boddess', 'Boddess', 'Boddess', 'Boddess', 'published', 'false', '2022-12-28 07:20:41', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(244, 'Big Flex', 'uploads/stores/63abee5c5f5d8.png', NULL, NULL, 'big-flex', 'Big Flex', 'Big Flex', 'Big Flex', 'published', 'false', '2022-12-28 07:21:00', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(245, 'Blibli', 'uploads/stores/63abee7d7a5de.png', NULL, NULL, 'blibli', 'Blibli', 'Blibli', 'Blibli', 'published', 'false', '2022-12-28 07:21:33', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(246, 'BookVIP', 'uploads/stores/63abee9d2e3db.png', NULL, NULL, 'bookvip', 'BookVIP', 'BookVIP', 'BookVIP', 'published', 'false', '2022-12-28 07:22:05', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(247, 'BudgetTicket', 'uploads/stores/63abeeb479c15.png', NULL, NULL, 'budgetticket', 'BudgetTicket', 'BudgetTicket', 'BudgetTicket', 'published', 'false', '2022-12-28 07:22:28', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(248, 'Brevistay', 'uploads/stores/63abeeca32265.png', NULL, NULL, 'brevistay', 'Brevistay', 'Brevistay', 'Brevistay', 'published', 'false', '2022-12-28 07:22:50', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(249, 'Bodybuilding', 'uploads/stores/63abeee1270cc.png', NULL, NULL, 'bodybuilding', 'Bodybuilding', 'Bodybuilding', 'Bodybuilding', 'published', 'false', '2022-12-28 07:23:13', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(250, 'Beyoung', 'uploads/stores/63abeef5b1fef.png', NULL, NULL, 'beyoung', 'Beyoung', 'Beyoung', 'Beyoung', 'published', 'false', '2022-12-28 07:23:33', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(251, 'Blue Tokai Coffee', 'uploads/stores/63abef1148969.png', NULL, NULL, 'blue-tokai-coffee', 'Blue Tokai Coffee', 'Blue Tokai Coffee', 'Blue Tokai Coffee', 'published', 'false', '2022-12-28 07:24:01', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(252, 'Baskin Robbins', 'uploads/stores/63abef2ed3351.png', NULL, NULL, 'baskin-robbins', 'Baskin Robbins', 'Baskin Robbins', 'Baskin Robbins', 'published', 'false', '2022-12-28 07:24:30', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(253, 'Bakingo', 'uploads/stores/63abef434905f.png', NULL, NULL, 'bakingo', 'Bakingo', 'Bakingo', 'Bakingo', 'published', 'false', '2022-12-28 07:24:51', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(254, 'Blockchain', 'uploads/stores/63abf11c808dd.png', NULL, NULL, 'blockchain', 'Blockchain', 'Blockchain', 'Blockchain', 'published', 'false', '2022-12-28 07:26:17', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(255, 'BeatO', 'uploads/stores/63abf1468071b.png', NULL, NULL, 'beato', 'BeatO', 'BeatO', 'BeatO', 'published', 'false', '2022-12-28 07:33:26', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(256, 'Bookswagon', 'uploads/stores/63abf1d78136c.png', NULL, NULL, 'bookswagon', 'Bookswagon', 'Bookswagon', 'Bookswagon', 'published', 'false', '2022-12-28 07:35:51', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(257, 'Bebe', 'uploads/stores/63abf1f334495.png', NULL, NULL, 'bebe', 'Bebe', 'Bebe', 'Bebe', 'published', 'false', '2022-12-28 07:36:19', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(258, 'Betway', 'uploads/stores/63abf232af517.png', NULL, NULL, 'betway', 'Betway', 'Betway', 'Betway', 'published', 'false', '2022-12-28 07:37:22', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(259, 'Barbeque Nation', 'uploads/stores/63abf25a71212.png', NULL, NULL, 'barbeque-nation', 'Barbeque Nation', 'Barbeque Nation', 'Barbeque Nation', 'published', 'false', '2022-12-28 07:38:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(260, 'Baby Dove', 'uploads/stores/63abf326ee780.png', NULL, NULL, 'baby-dove', 'Baby Dove', 'Baby Dove', 'Baby Dove', 'published', 'false', '2022-12-28 07:41:26', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(261, 'Bummer', 'uploads/stores/63b41eeaa0de9.png', NULL, NULL, 'bummer', 'Bummer', 'Bummer', 'Bummer', 'published', 'false', '2022-12-28 07:41:47', '2023-01-03 12:26:18', NULL, NULL, NULL, 1, 1, 'https://fas.st/3dV1g', 'false'),
(262, 'Brillare', 'uploads/stores/63bd785b7525d.png', NULL, NULL, 'brillare', 'Brillare', 'Brillare', 'Brillare', 'published', 'false', '2022-12-28 07:53:55', '2023-01-10 14:38:19', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(263, 'Bablouie', 'uploads/stores/63abf65d5b30f.png', NULL, NULL, 'bablouie', 'Bablouie', 'Bablouie', 'Bablouie', 'published', 'false', '2022-12-28 07:55:09', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(264, 'Bitclass', 'uploads/stores/63abf67753588.png', NULL, NULL, 'bitclass', 'Bitclass', 'Bitclass', 'Bitclass', 'published', 'false', '2022-12-28 07:55:35', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(265, 'Blinctrip', 'uploads/stores/63abf696e35ec.png', NULL, NULL, 'blinctrip', 'Blinctrip', 'Blinctrip', 'Blinctrip', 'published', 'false', '2022-12-28 07:56:06', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(266, 'Bella Vita Organic', 'uploads/stores/63abf6ad1b291.png', NULL, NULL, 'bella-vita-organic', 'Bella Vita Organic', 'Bella Vita Organic', 'Bella Vita Organic', 'published', 'false', '2022-12-28 07:56:29', '2023-01-10 14:40:06', NULL, NULL, NULL, 1, 1, 'https://fas.st/VbFl5', 'false'),
(267, 'Boveee', 'uploads/stores/63abf6d63d538.png', NULL, NULL, 'boveee', 'Boveee', 'Boveee', 'Boveee', 'published', 'false', '2022-12-28 07:57:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(268, 'Be Boywise', 'uploads/stores/63abf6f192ccb.png', NULL, NULL, 'be-boywise', 'Be Boywise', 'Be Boywise', 'Be Boywise', 'published', 'false', '2022-12-28 07:57:37', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(269, 'ColorBar', 'uploads/stores/63abfab66fa56.png', NULL, NULL, 'colorbar', 'ColorBar', 'ColorBar', 'ColorBar', 'published', 'false', '2022-12-28 08:13:42', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(270, 'Cure.Fit', 'uploads/stores/63abfad74846b.png', NULL, NULL, 'curefit', 'Cure.Fit', 'Cure.Fit', 'Cure.Fit', 'published', 'false', '2022-12-28 08:14:15', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(271, 'Cashify ScreenPro', 'uploads/stores/63abfafcd5f3c.png', NULL, NULL, 'cashify-screenpro', 'Cashify ScreenPro', 'Cashify ScreenPro', 'Cashify ScreenPro', 'published', 'false', '2022-12-28 08:14:52', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(272, 'CheapoAir', 'uploads/stores/63abfb1b21d8d.png', NULL, NULL, 'cheapoair', 'CheapoAir', 'CheapoAir', 'CheapoAir', 'published', 'false', '2022-12-28 08:15:23', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(273, 'Case-Mate', 'uploads/stores/63abfcc2eb0ce.png', NULL, NULL, 'case-mate', 'Case-Mate', 'Case-Mate', 'Case-Mate', 'published', 'false', '2022-12-28 08:22:26', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(274, 'Cyahi', NULL, NULL, NULL, 'cyahi', 'Cyahi', 'Cyahi', 'Cyahi', 'published', 'false', '2022-12-28 08:22:44', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(275, 'CARS24', 'uploads/stores/63abfceceb4a7.png', NULL, NULL, 'cars24', 'CARS24', 'CARS24', 'CARS24', 'published', 'false', '2022-12-28 08:23:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(276, 'ClearTax', 'uploads/stores/63abfd06daa6c.png', NULL, NULL, 'cleartax', 'ClearTax', 'ClearTax', 'ClearTax', 'published', 'false', '2022-12-28 08:23:34', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false');
INSERT INTO `stores` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`, `store_affilate_url`, `is_popular`) VALUES
(277, 'ClickOnCare', 'uploads/stores/63b41f7fdd0bd.png', NULL, NULL, 'clickoncare', 'ClickOnCare', 'ClickOnCare', 'ClickOnCare', 'published', 'false', '2022-12-28 08:24:08', '2023-01-05 07:17:53', NULL, NULL, NULL, 1, 1, 'https://fas.st/JHiZK', 'false'),
(278, 'Cookifi', 'uploads/stores/63abfd3acab25.png', NULL, NULL, 'cookifi', 'Cookifi', 'Cookifi', 'Cookifi', 'published', 'false', '2022-12-28 08:24:26', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(279, 'Carlton London', 'uploads/stores/63abfd54bbfd6.png', NULL, NULL, 'carlton-london', 'Carlton London', 'Carlton London', 'Carlton London', 'published', 'false', '2022-12-28 08:24:52', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(280, 'Comic Con', 'uploads/stores/63abfd69d57e3.png', NULL, NULL, 'comic-con', 'Comic Con', 'Comic Con', 'Comic Con', 'published', 'false', '2022-12-28 08:25:13', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(281, 'CoolWinks', 'uploads/stores/63abfd7a871f3.png', NULL, NULL, 'coolwinks', 'CoolWinks', 'CoolWinks', 'CoolWinks', 'published', 'false', '2022-12-28 08:25:30', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(282, 'Cover It Up', 'uploads/stores/63abfd975a7d8.png', NULL, NULL, 'cover-it-up', 'Cover It Up', 'Cover It Up', 'Cover It Up', 'published', 'false', '2022-12-28 08:25:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(283, 'CoinBazaar', 'uploads/stores/63abfdb1328f1.png', NULL, NULL, 'coinbazaar', 'CoinBazaar', 'CoinBazaar', 'CoinBazaar', 'published', 'false', '2022-12-28 08:26:25', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(284, 'Crossword', 'uploads/stores/63abfdd692535.png', NULL, NULL, 'crossword', 'Crossword', 'Crossword', 'Crossword', 'published', 'false', '2022-12-28 08:27:02', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(285, 'ChimpWear', 'uploads/stores/63abfe107046d.png', NULL, NULL, 'chimpwear', 'ChimpWear', 'ChimpWear', 'ChimpWear', 'published', 'false', '2022-12-28 08:28:00', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(286, 'Community Matrimony', 'uploads/stores/63ac12809dbdf.png', NULL, NULL, 'community-matrimony', 'Community Matrimony', 'Community Matrimony', 'Community Matrimony', 'published', 'false', '2022-12-28 09:55:12', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(287, 'Cathay Pacific', 'uploads/stores/63ac12e63394e.png', NULL, NULL, 'cathay-pacific', 'Cathay Pacific', 'Cathay Pacific', 'Cathay Pacific', 'published', 'false', '2022-12-28 09:56:54', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(288, 'Comesum', 'uploads/stores/63ac13033cf0d.png', NULL, NULL, 'comesum', 'Comesum', 'Comesum', 'Comesum', 'published', 'false', '2022-12-28 09:57:23', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(289, 'Country Oven', 'uploads/stores/63ac1400629dd.png', NULL, NULL, 'country-oven', 'Country Oven', 'Country Oven', 'Country Oven', 'published', 'false', '2022-12-28 10:01:36', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(290, 'Candere', 'uploads/stores/63ac14192d0f0.png', NULL, NULL, 'candere', 'Candere', 'Candere', 'Candere', 'published', 'false', '2022-12-28 10:02:01', '2023-01-12 10:15:05', NULL, NULL, NULL, 1, 1, 'https://fas.st/c2msT', 'false'),
(291, 'Clovia', 'uploads/stores/63ac1428a8a55.png', NULL, NULL, 'clovia', 'Clovia', 'Clovia', 'Clovia', 'published', 'false', '2022-12-28 10:02:16', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(292, 'Croma', 'uploads/stores/63bc02113ef16.png', NULL, NULL, 'croma', 'Croma', 'Croma', 'Croma', 'published', 'false', '2022-12-28 10:02:47', '2023-01-09 12:02:55', NULL, NULL, NULL, 1, 1, 'https://fas.st/XwmTS', 'false'),
(293, 'Cultsport', 'uploads/stores/63ac1482c5dfb.png', NULL, NULL, 'cultsport', 'Cultsport', 'Cultsport', 'Cultsport', 'published', 'false', '2022-12-28 10:03:46', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(294, 'Colgate', 'uploads/stores/63ac1495e07e9.png', NULL, NULL, 'colgate', 'Colgate', 'Colgate', 'Colgate', 'published', 'false', '2022-12-28 10:04:05', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(295, 'Crossbeats', 'uploads/stores/63ac14c8c2c8a.png', NULL, NULL, 'crossbeats', 'Crossbeats', 'Crossbeats', 'Crossbeats', 'published', 'false', '2022-12-28 10:04:56', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(296, 'Clever Harvey', 'uploads/stores/63ac14dfebb0e.png', NULL, NULL, 'clever-harvey', 'Clever Harvey', 'Clever Harvey', 'Clever Harvey', 'published', 'false', '2022-12-28 10:05:19', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(297, 'Codingal', 'uploads/stores/63ac14f8f1583.png', NULL, NULL, 'codingal', 'Codingal', 'Codingal', 'Codingal', 'published', 'false', '2022-12-28 10:05:44', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(298, 'Croppd tops', 'uploads/stores/63ac1512e177e.png', NULL, NULL, 'croppd-tops', 'Croppd tops', 'Croppd tops', 'Croppd tops', 'published', 'false', '2022-12-28 10:06:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(299, 'Cuemath', 'uploads/stores/63ac15234a599.png', NULL, NULL, 'cuemath', 'Cuemath', 'Cuemath', 'Cuemath', 'published', 'false', '2022-12-28 10:06:27', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(300, 'Crossloop', 'uploads/stores/63ac1535386fc.png', NULL, NULL, 'crossloop', 'Crossloop', 'Crossloop', 'Crossloop', 'published', 'false', '2022-12-28 10:06:45', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(301, 'Calling Station', 'uploads/stores/63ac154a366d7.png', NULL, NULL, 'calling-station', 'Calling Station', 'Calling Station', 'Calling Station', 'published', 'false', '2022-12-28 10:07:06', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(302, 'Coursesity', 'uploads/stores/63ac156c1ee93.png', NULL, NULL, 'coursesity', 'Coursesity', 'Coursesity', 'Coursesity', 'published', 'false', '2022-12-28 10:07:40', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(303, 'CakeBee', 'uploads/stores/63ac158150830.png', NULL, NULL, 'cakebee', 'CakeBee', 'CakeBee', 'CakeBee', 'published', 'false', '2022-12-28 10:08:01', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(304, 'Coversandall', 'uploads/stores/63ac159beb6fa.png', NULL, NULL, 'coversandall', 'Coversandall', 'Coversandall', 'Coversandall', 'published', 'false', '2022-12-28 10:08:27', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(305, 'Crocoblock', 'uploads/stores/63ac15bb411f4.png', NULL, NULL, 'crocoblock', 'Crocoblock', 'Crocoblock', 'Crocoblock', 'published', 'false', '2022-12-28 10:08:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(306, 'Cinthol', 'uploads/stores/63ac15dbb6cb9.png', NULL, NULL, 'cinthol', 'Cinthol', 'Cinthol', 'Cinthol', 'published', 'false', '2022-12-28 10:09:31', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(307, 'Chicking', 'uploads/stores/63ac15f4d6591.png', NULL, NULL, 'chicking', 'Chicking', 'Chicking', 'Chicking', 'published', 'false', '2022-12-28 10:09:56', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(308, 'Country Delight', 'uploads/stores/63ac163390715.png', NULL, NULL, 'country-delight', 'Country Delight', 'Country Delight', 'Country Delight', 'published', 'false', '2022-12-28 10:10:59', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(309, 'Cadbury', 'uploads/stores/63ac1654c4898.png', NULL, NULL, 'cadbury', 'Cadbury', 'Cadbury', 'Cadbury', 'published', 'false', '2022-12-28 10:11:32', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(310, 'Conduira online', 'uploads/stores/63ac169649187.png', NULL, NULL, 'conduira-online', 'Conduira online', 'Conduira online', 'Conduira online', 'published', 'false', '2022-12-28 10:12:38', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(311, 'Carnival Cinemas', NULL, NULL, NULL, 'carnival-cinemas', 'Carnival Cinemas', 'Carnival Cinemas', 'Carnival Cinemas', 'published', 'false', '2022-12-28 10:13:08', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(312, 'CoutLoot', 'uploads/stores/63ac16d119116.png', NULL, NULL, 'coutloot', 'CoutLoot', 'CoutLoot', 'CoutLoot', 'published', 'false', '2022-12-28 10:13:37', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(313, 'Chrono24', 'uploads/stores/63ac16eecdac3.png', NULL, NULL, 'chrono24', 'Chrono24', 'Chrono24', 'Chrono24', 'published', 'false', '2022-12-28 10:14:06', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(314, 'CASHe', 'uploads/stores/63ac17254d61e.png', NULL, NULL, 'cashe', 'CASHe', 'CASHe', 'CASHe', 'published', 'false', '2022-12-28 10:15:01', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, -3, NULL, 'false'),
(315, 'Cuir Ally', 'uploads/stores/63ac17600c9b5.png', NULL, NULL, 'cuir-ally', 'Cuir Ally', 'Cuir Ally', 'Cuir Ally', 'published', 'false', '2022-12-28 10:16:00', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(316, 'Canvera', 'uploads/stores/63ac177785542.png', NULL, NULL, 'canvera', 'Canvera', 'Canvera', 'Canvera', 'published', 'false', '2022-12-28 10:16:23', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(317, 'Columbia Sportswear', 'uploads/stores/63ac17ab25345.png', NULL, NULL, 'columbia-sportswear', 'Columbia Sportswear', 'Columbia Sportswear', 'Columbia Sportswear', 'published', 'false', '2022-12-28 10:17:15', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(318, 'Cityfurnish', 'uploads/stores/63ac17c1d6773.png', NULL, NULL, 'cityfurnish', 'Cityfurnish', 'Cityfurnish', 'Cityfurnish', 'published', 'false', '2022-12-28 10:17:37', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(319, 'ClubMahindra', 'uploads/stores/63ac17e60702c.png', NULL, NULL, 'clubmahindra', 'ClubMahindra', 'ClubMahindra', 'ClubMahindra', 'published', 'false', '2022-12-28 10:18:14', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(320, 'clickastro', 'uploads/stores/63ac1804bcf9c.png', NULL, NULL, 'clickastro', 'clickastro', 'clickastro', 'clickastro', 'published', 'false', '2022-12-28 10:18:44', '2023-01-01 05:28:08', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(321, 'Cleardekho', 'uploads/stores/63ac181f15617.png', NULL, NULL, 'cleardekho', 'Cleardekho', 'Cleardekho', 'Cleardekho', 'published', 'false', '2022-12-28 10:19:11', '2023-01-01 05:28:08', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(322, 'Cheapticket', 'uploads/stores/63ac1835b9ce4.png', NULL, NULL, 'cheapticket', 'Cheapticket', 'Cheapticket', 'Cheapticket', 'published', 'false', '2022-12-28 10:19:33', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(323, 'Caprese', 'uploads/stores/63ac184b3f1fd.png', NULL, NULL, 'caprese', 'Caprese', 'Caprese', 'Caprese', 'published', 'false', '2022-12-28 10:19:55', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(324, 'CanvasChamp', 'uploads/stores/63ac18622fd9b.png', NULL, NULL, 'canvaschamp', 'CanvasChamp', 'CanvasChamp', 'CanvasChamp', 'published', 'false', '2022-12-28 10:20:18', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(325, 'Care24', 'uploads/stores/63ac1874bc7c0.png', NULL, NULL, 'care24', 'Care24', 'Care24', 'Care24', 'published', 'false', '2022-12-28 10:20:36', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(326, 'Cardekho', 'uploads/stores/63ac1889613e6.png', NULL, NULL, 'cardekho', 'Cardekho', 'Cardekho', 'Cardekho', 'published', 'false', '2022-12-28 10:20:57', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(327, 'Crazy Domains', 'uploads/stores/63ac18b8d1d83.png', NULL, NULL, 'crazy-domains', 'Crazy Domains', 'Crazy Domains', 'Crazy Domains', 'published', 'false', '2022-12-28 10:21:44', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(328, 'Ctrip', 'uploads/stores/63ac18d4534d9.png', NULL, NULL, 'ctrip', 'Ctrip', 'Ctrip', 'Ctrip', 'published', 'false', '2022-12-28 10:22:12', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(329, 'Cottonworld', 'uploads/stores/63ac18f7d7e02.png', NULL, NULL, 'cottonworld', 'Cottonworld', 'Cottonworld', 'Cottonworld', 'published', 'false', '2022-12-28 10:22:47', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(330, 'ChennaiStore', 'uploads/stores/63ac190ee5e47.png', NULL, NULL, 'chennaistore', 'ChennaiStore', 'ChennaiStore', 'ChennaiStore', 'published', 'false', '2022-12-28 10:23:10', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(331, 'Clarks', 'uploads/stores/63ac192626f5a.png', NULL, NULL, 'clarks', 'Clarks', 'Clarks', 'Clarks', 'published', 'false', '2022-12-28 10:23:34', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(332, 'Cilory', 'uploads/stores/63ac19390da86.png', NULL, NULL, 'cilory', 'Cilory', 'Cilory', 'Cilory', 'published', 'false', '2022-12-28 10:23:53', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(333, 'CarzOnRent', 'uploads/stores/63ac19509b59e.png', NULL, NULL, 'carzonrent', 'CarzOnRent', 'CarzOnRent', 'CarzOnRent', 'published', 'false', '2022-12-28 10:24:16', '2023-01-01 05:29:49', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(334, 'coke2Home', 'uploads/stores/63ac196410b55.png', NULL, NULL, 'coke2home', 'coke2Home', 'coke2Home', 'coke2Home', 'published', 'false', '2022-12-28 10:24:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(335, 'Clear Car Rental', 'uploads/stores/63ac19835f06a.png', NULL, NULL, 'clear-car-rental', 'Clear Car Rental', 'Clear Car Rental', 'Clear Car Rental', 'published', 'false', '2022-12-28 10:25:07', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(336, 'Cleartrip', 'uploads/stores/63ac1997f40dc.png', NULL, NULL, 'cleartrip', 'Cleartrip', 'Cleartrip', 'Cleartrip', 'published', 'false', '2022-12-28 10:25:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(337, 'Code Grooming', 'uploads/stores/63ac19d00f73c.png', NULL, NULL, 'code-grooming', 'Code Grooming', 'Code Grooming', 'Code Grooming', 'published', 'false', '2022-12-28 10:26:24', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(338, 'Chaupal', 'uploads/stores/63ac1a54cef35.png', NULL, NULL, 'chaupal', 'Chaupal', 'Chaupal', 'Chaupal', 'published', 'false', '2022-12-28 10:28:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(339, 'Conscious Chemist', 'uploads/stores/63ac1a9087496.png', NULL, NULL, 'conscious-chemist', 'Conscious Chemist', 'Conscious Chemist', 'Conscious Chemist', 'published', 'false', '2022-12-28 10:29:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(340, 'Chola Insurance', 'uploads/stores/63ac1abb10133.png', NULL, NULL, 'chola-insurance', 'Chola Insurance', 'Chola Insurance', 'Chola Insurance', 'published', 'false', '2022-12-28 10:30:19', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(341, 'Coindirect', 'uploads/stores/63ac1b1ba2172.png', NULL, NULL, 'coindirect', 'Coindirect', 'Coindirect', 'Coindirect', 'published', 'false', '2022-12-28 10:31:55', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(342, 'CoinDCX', 'uploads/stores/63ac1b31e3fe7.png', NULL, NULL, 'coindcx', 'CoinDCX', 'CoinDCX', 'CoinDCX', 'published', 'false', '2022-12-28 10:32:17', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(343, 'Corseca', 'uploads/stores/63ac1b4aa3ac9.png', NULL, NULL, 'corseca', 'Corseca', 'Corseca', 'Corseca', 'published', 'false', '2022-12-28 10:32:42', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(344, 'Coco Soul Hair & Skin Care', 'uploads/stores/63ac1b8c9f579.png', NULL, NULL, 'coco-soul-hair-skin-care', 'Coco Soul Hair & Skin Care', 'Coco Soul Hair & Skin Care', 'Coco Soul Hair & Skin Care', 'published', 'false', '2022-12-28 10:33:48', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(345, 'Coccoon', 'uploads/stores/63ac1bbbd5159.png', NULL, NULL, 'coccoon', 'Coccoon', 'Coccoon', 'Coccoon', 'published', 'false', '2022-12-28 10:34:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(346, 'Care Fit', 'uploads/stores/63ac1bdae4f6c.png', NULL, NULL, 'care-fit', 'Care Fit', 'Care Fit', 'Care Fit', 'published', 'false', '2022-12-28 10:35:06', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(347, 'Creme Castle Discount', 'uploads/stores/63ac1c0123040.png', NULL, NULL, 'creme-castle-discount', 'Creme Castle Discount', 'Creme Castle Discount', 'Creme Castle Discount', 'published', 'false', '2022-12-28 10:35:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(349, 'Coltorti', 'uploads/stores/63ac1c39e8402.png', NULL, NULL, 'coltorti', 'Coltorti', 'Coltorti', 'Coltorti', 'published', 'false', '2022-12-28 10:36:41', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(350, 'CarEasy', 'uploads/stores/63ac1c484e583.png', NULL, NULL, 'careasy', 'CarEasy', 'CarEasy', 'CarEasy', 'published', 'false', '2022-12-28 10:36:56', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(351, 'Cubelelo', 'uploads/stores/63ac1c598d4fe.png', NULL, NULL, 'cubelelo', 'Cubelelo', 'Cubelelo', 'Cubelelo', 'published', 'false', '2022-12-28 10:37:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(352, 'Coding Blocks', 'uploads/stores/63ac1c793bba4.png', NULL, NULL, 'coding-blocks', 'Coding Blocks', 'Coding Blocks', 'Coding Blocks', 'published', 'false', '2022-12-28 10:37:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(353, 'Casewale', 'uploads/stores/63ac1c910f08a.png', NULL, NULL, 'casewale', 'Casewale', 'Casewale', 'Casewale', 'published', 'false', '2022-12-28 10:38:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(354, 'Casumo', 'uploads/stores/63ac1cc9af735.png', NULL, NULL, 'casumo', 'Casumo', 'Casumo', 'Casumo', 'published', 'false', '2022-12-28 10:39:05', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(355, 'Cratejoy', 'uploads/stores/63ac1cdd5466c.png', NULL, NULL, 'cratejoy', 'Cratejoy', 'Cratejoy', 'Cratejoy', 'published', 'false', '2022-12-28 10:39:25', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(356, 'CapitalVia', 'uploads/stores/63ac1cf0e1dda.png', NULL, NULL, 'capitalvia', 'CapitalVia', 'CapitalVia', 'CapitalVia', 'published', 'false', '2022-12-28 10:39:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(357, 'Cellspare', 'uploads/stores/63ac1d053b1ce.png', NULL, NULL, 'cellspare', 'Cellspare', 'Cellspare', 'Cellspare', 'published', 'false', '2022-12-28 10:40:05', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(358, 'Chef Bakers', 'uploads/stores/63ac1d1c2774d.png', NULL, NULL, 'chef-bakers', 'Chef Bakers', 'Chef Bakers', 'Chef Bakers', 'published', 'false', '2022-12-28 10:40:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(359, 'Cred', 'uploads/stores/63ac1d3f472e1.png', NULL, NULL, 'cred', 'Cred', 'Cred', 'Cred', 'published', 'false', '2022-12-28 10:41:03', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(360, 'Coursera', 'uploads/stores/63ac1d532d082.png', NULL, NULL, 'coursera', 'Coursera', 'Coursera', 'Coursera', 'published', 'false', '2022-12-28 10:41:23', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(361, 'CESC Bill Payment', 'uploads/stores/63ac1d71e8503.png', NULL, NULL, 'cesc-bill-payment', 'CESC Bill Payment', 'CESC Bill Payment', 'CESC Bill Payment', 'published', 'false', '2022-12-28 10:41:53', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(362, 'Cafago', 'uploads/stores/63ac1d8764648.png', NULL, NULL, 'cafago', 'Cafago', 'Cafago', 'Cafago', 'published', 'false', '2022-12-28 10:42:15', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(363, 'Carmesi', 'uploads/stores/63ac1da282a46.png', NULL, NULL, 'carmesi', 'Carmesi', 'Carmesi', 'Carmesi', 'published', 'false', '2022-12-28 10:42:42', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(364, 'Charles & keith', 'uploads/stores/63ac1dd089956.png', NULL, NULL, 'charles-keith', 'Charles & keith', 'Charles & keith', 'Charles & keith', 'published', 'false', '2022-12-28 10:43:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(365, 'Careers360', 'uploads/stores/63ac1df4caaec.png', NULL, NULL, 'careers360', 'Careers360', 'Careers360', 'Careers360', 'published', 'false', '2022-12-28 10:44:04', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(366, 'CircleOne', 'uploads/stores/63ac1e3e09680.png', NULL, NULL, 'circleone', 'CircleOne', 'CircleOne', 'CircleOne', 'published', 'false', '2022-12-28 10:45:18', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(367, 'CitrusTel', 'uploads/stores/63ac1e5dbb9c7.png', NULL, NULL, 'citrustel', 'CitrusTel', 'CitrusTel', 'CitrusTel', 'published', 'false', '2022-12-28 10:45:49', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(368, 'CasioIndiaShop', 'uploads/stores/63ac1e7399bee.png', NULL, NULL, 'casioindiashop', 'CasioIndiaShop', 'CasioIndiaShop', 'CasioIndiaShop', 'published', 'false', '2022-12-28 10:46:11', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(369, 'Confirm TKT', 'uploads/stores/63ac1e8c1db32.png', NULL, NULL, 'confirm-tkt', 'Confirm TKT', 'Confirm TKT', 'Confirm TKT', 'published', 'false', '2022-12-28 10:46:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(370, 'Coverfox', 'uploads/stores/63ac1f135915b.png', NULL, NULL, 'coverfox', 'Coverfox', 'Coverfox', 'Coverfox', 'published', 'false', '2022-12-28 10:48:51', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(371, 'Cromostyle', 'uploads/stores/63ac1f2ceada7.png', NULL, NULL, 'cromostyle', 'Cromostyle', 'Cromostyle', 'Cromostyle', 'published', 'false', '2022-12-28 10:49:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(372, 'CallHealth', 'uploads/stores/63ac1f4116332.png', NULL, NULL, 'callhealth', 'CallHealth', 'CallHealth', 'CallHealth', 'published', 'false', '2022-12-28 10:49:37', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(373, 'CraftGully', 'uploads/stores/63ac1f504a302.png', NULL, NULL, 'craftgully', 'CraftGully', 'CraftGully', 'CraftGully', 'published', 'false', '2022-12-28 10:49:52', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(374, 'CoHo', 'uploads/stores/63ac1f6335996.png', NULL, NULL, 'coho', 'CoHo', 'CoHo', 'CoHo', 'published', 'false', '2022-12-28 10:50:11', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(375, 'Chai Point', 'uploads/stores/63ac1f7917ba2.png', NULL, NULL, 'chai-point', 'Chai Point', 'Chai Point', 'Chai Point', 'published', 'false', '2022-12-28 10:50:33', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(376, 'CredR', 'uploads/stores/63ac1f8bed802.png', NULL, NULL, 'credr', 'CredR', 'CredR', 'CredR', 'published', 'false', '2022-12-28 10:50:51', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 2, NULL, 'false'),
(377, 'Chaayos', 'uploads/stores/63ac1f9cecb43.png', NULL, NULL, 'chaayos', 'Chaayos', 'Chaayos', 'Chaayos', 'published', 'false', '2022-12-28 10:51:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(378, 'Crocs', 'uploads/stores/63ac1fb01364d.png', NULL, NULL, 'crocs', 'Crocs', 'Crocs', 'Crocs', 'published', 'false', '2022-12-28 10:51:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(379, 'Classic Rummy', 'uploads/stores/63ac1fcbe7257.png', NULL, NULL, 'classic-rummy', 'Classic Rummy', 'Classic Rummy', 'Classic Rummy', 'published', 'false', '2022-12-28 10:51:55', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(380, 'Chocholik', 'uploads/stores/63ac1fe17d53c.png', NULL, NULL, 'chocholik', 'Chocholik', 'Chocholik', 'Chocholik', 'published', 'false', '2022-12-28 10:52:17', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(381, 'Chhabra 555', 'uploads/stores/63ac20009f23f.png', NULL, NULL, 'chhabra-555', 'Chhabra 555', 'Chhabra 555', 'Chhabra 555', 'published', 'false', '2022-12-28 10:52:48', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(382, 'Common Floor', 'uploads/stores/63ac20231e5d0.png', NULL, NULL, 'common-floor', 'Common Floor', 'Common Floor', 'Common Floor', 'published', 'false', '2022-12-28 10:53:23', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(383, 'Caratlane', 'uploads/stores/63ac203882ad0.png', NULL, NULL, 'caratlane', 'Caratlane', 'Caratlane', 'Caratlane', 'published', 'false', '2022-12-28 10:53:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(384, 'Craftsvilla', 'uploads/stores/63ac204e9f0b8.png', NULL, NULL, 'craftsvilla', 'Craftsvilla', 'Craftsvilla', 'Craftsvilla', 'published', 'false', '2022-12-28 10:54:06', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(385, 'Chumbak', 'uploads/stores/63ac205fe7344.png', NULL, NULL, 'chumbak', 'Chumbak', 'Chumbak', 'Chumbak', 'published', 'false', '2022-12-28 10:54:23', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(386, 'Cbazaar', 'uploads/stores/63ac207740d59.png', NULL, NULL, 'cbazaar', 'Cbazaar', 'Cbazaar', 'Cbazaar', 'published', 'false', '2022-12-28 10:54:47', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(387, 'Cora Health', 'uploads/stores/63ac20a49d66c.png', NULL, NULL, 'cora-health', 'Cora Health', 'Cora Health', 'Cora Health', 'published', 'false', '2022-12-28 10:55:32', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(388, 'Clensta', 'uploads/stores/63ac20b730703.png', NULL, NULL, 'clensta', 'Clensta', 'Clensta', 'Clensta', 'published', 'false', '2022-12-28 10:55:51', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(389, 'Casekaro', 'uploads/stores/63ac20d5475b1.png', NULL, NULL, 'casekaro', 'Casekaro', 'Casekaro', 'Casekaro', 'published', 'false', '2022-12-28 10:56:21', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(390, 'CoinSwitch', 'uploads/stores/63ac210c2bf83.png', NULL, NULL, 'coinswitch', 'CoinSwitch', 'CoinSwitch', 'CoinSwitch', 'published', 'false', '2022-12-28 10:57:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(391, 'ChefBoss', 'uploads/stores/63ac213822657.png', NULL, NULL, 'chefboss', 'ChefBoss', 'ChefBoss', 'ChefBoss', 'published', 'false', '2022-12-28 10:58:00', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(392, 'CrazyBulk', 'uploads/stores/63ac2149c7653.png', NULL, NULL, 'crazybulk', 'CrazyBulk', 'CrazyBulk', 'CrazyBulk', 'published', 'false', '2022-12-28 10:58:17', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(393, 'Charak', 'uploads/stores/63ac2171e6fa2.png', NULL, NULL, 'charak', 'Charak', 'Charak', 'Charak', 'published', 'false', '2022-12-28 10:58:57', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(394, 'CyberGhost VPN', 'uploads/stores/63ac218903eb6.png', NULL, NULL, 'cyberghost-vpn', 'CyberGhost VPN', 'CyberGhost VPN', 'CyberGhost VPN', 'published', 'false', '2022-12-28 10:59:21', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(395, 'Colodax', 'uploads/stores/63ac219f36a56.png', NULL, NULL, 'colodax', 'Colodax', 'Colodax', 'Colodax', 'published', 'false', '2022-12-28 10:59:43', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(396, 'Coding Ninja', 'uploads/stores/63ac21b827aeb.png', NULL, NULL, 'coding-ninja', 'Coding Ninja', 'Coding Ninja', 'Coding Ninja', 'published', 'false', '2022-12-28 11:00:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(397, 'Cocomo', 'uploads/stores/63ac21cc011f0.png', NULL, NULL, 'cocomo', 'Cocomo', 'Cocomo', 'Cocomo', 'published', 'false', '2022-12-28 11:00:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(398, 'Davagenie', 'uploads/stores/63ac22506ce15.png', NULL, NULL, 'davagenie', 'Davagenie', 'Davagenie', 'Davagenie', 'published', 'false', '2022-12-28 11:02:40', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(399, 'Dcraf', 'uploads/stores/63ac22691613e.png', NULL, NULL, 'dcraf', 'Dcraf', 'Dcraf', 'Dcraf', 'published', 'false', '2022-12-28 11:03:05', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(400, 'Danube Home', 'uploads/stores/63ac2296505dd.png', NULL, NULL, 'danube-home', 'Danube Home', 'Danube Home', 'Danube Home', 'published', 'false', '2022-12-28 11:03:50', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(401, 'Danta Herbs', 'uploads/stores/63ac22b05ce6b.png', NULL, NULL, 'danta-herbs', 'Danta Herbs', 'Danta Herbs', 'Danta Herbs', 'published', 'false', '2022-12-28 11:04:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(402, 'Discovery Plus', 'uploads/stores/63ac22cd11011.png', NULL, NULL, 'discovery-plus', 'Discovery Plus', 'Discovery Plus', 'Discovery Plus', 'published', 'false', '2022-12-28 11:04:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(403, 'Dr Sheth\'s', 'uploads/stores/63ac22ea4fab5.png', NULL, NULL, 'dr-sheths', 'Dr Sheth\'s', 'Dr Sheth\'s', 'Dr Sheth\'s', 'published', 'false', '2022-12-28 11:05:14', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(404, 'DeposiotPhotos', 'uploads/stores/63ac24267b253.png', NULL, NULL, 'deposiotphotos', 'DeposiotPhotos', 'DeposiotPhotos', 'DeposiotPhotos', 'published', 'false', '2022-12-28 11:05:49', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(405, 'DocsApp', 'uploads/stores/63ac29b19611b.png', NULL, NULL, 'docsapp', 'DocsApp', 'DocsApp', 'DocsApp', 'published', 'false', '2022-12-28 11:34:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(406, 'Daily Fish', 'uploads/stores/63ac29c84f030.png', NULL, NULL, 'daily-fish', 'Daily Fish', 'Daily Fish', 'Daily Fish', 'published', 'false', '2022-12-28 11:34:32', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(407, 'DogBazar', 'uploads/stores/63ac29df624c8.png', NULL, NULL, 'dogbazar', 'DogBazar', 'DogBazar', 'DogBazar', 'published', 'false', '2022-12-28 11:34:55', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(408, 'DocPrime', 'uploads/stores/63ac29f3b4ddf.png', NULL, NULL, 'docprime', 'DocPrime', 'DocPrime', 'DocPrime', 'published', 'false', '2022-12-28 11:35:15', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(409, 'Dr Vaidya', 'uploads/stores/63ac2a10a1736.png', NULL, NULL, 'dr-vaidya', 'Dr Vaidya', 'Dr Vaidya', 'Dr Vaidya', 'published', 'false', '2022-12-28 11:35:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(410, 'Dr Morepen', 'uploads/stores/63ac2a28e8400.png', NULL, NULL, 'dr-morepen', 'Dr Morepen', 'Dr Morepen', 'Dr Morepen', 'published', 'false', '2022-12-28 11:36:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(411, 'DHI India', 'uploads/stores/63ac2a44993f9.png', NULL, NULL, 'dhi-india', 'DHI India', 'DHI India', 'DHI India', 'published', 'false', '2022-12-28 11:36:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(412, 'Dunzo', 'uploads/stores/63ac2a5ceeedb.png', NULL, NULL, 'dunzo', 'Dunzo', 'Dunzo', 'Dunzo', 'published', 'false', '2022-12-28 11:37:00', '2023-01-01 05:28:07', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(413, 'Deco WIndow', 'uploads/stores/63ac2a74709b2.png', NULL, NULL, 'deco-window', 'Deco WIndow', 'Deco WIndow', 'Deco WIndow', 'published', 'false', '2022-12-28 11:37:24', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(414, 'Drivezy', 'uploads/stores/63ac2a8c3537e.png', NULL, NULL, 'drivezy', 'Drivezy', 'Drivezy', 'Drivezy', 'published', 'false', '2022-12-28 11:37:48', '2023-01-01 05:28:07', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(415, 'Dubaria', 'uploads/stores/63ac2a9c5a062.png', NULL, NULL, 'dubaria', 'Dubaria', 'Dubaria', 'Dubaria', 'published', 'false', '2022-12-28 11:38:04', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(416, 'Despegar', 'uploads/stores/63ac2ab64eda6.png', NULL, NULL, 'despegar', 'Despegar', 'Despegar', 'Despegar', 'published', 'false', '2022-12-28 11:38:30', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(417, 'Dunkin Donuts', 'uploads/stores/63ac2acb0f057.png', NULL, NULL, 'dunkin-donuts', 'Dunkin Donuts', 'Dunkin Donuts', 'Dunkin Donuts', 'published', 'false', '2022-12-28 11:38:51', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(418, 'Deal Extreme', 'uploads/stores/63ac2aeec1975.png', NULL, NULL, 'deal-extreme', 'Deal Extreme', 'Deal Extreme', 'Deal Extreme', 'published', 'false', '2022-12-28 11:39:26', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(419, 'Dineout', 'uploads/stores/63ac2b0143550.png', NULL, NULL, 'dineout', 'Dineout', 'Dineout', 'Dineout', 'published', 'false', '2022-12-28 11:39:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(420, 'DeoBazaar', 'uploads/stores/63ac2b243d6c1.png', NULL, NULL, 'deobazaar', 'DeoBazaar', 'DeoBazaar', 'DeoBazaar', 'published', 'false', '2022-12-28 11:40:20', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(421, 'DISH TV', 'uploads/stores/63ac2b3f188e3.png', NULL, NULL, 'dish-tv', 'DISH TV', 'DISH TV', 'DISH TV', 'published', 'false', '2022-12-28 11:40:47', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(422, 'Daily Objects', 'uploads/stores/63ac2b5273298.png', NULL, NULL, 'daily-objects', 'Daily Objects', 'Daily Objects', 'Daily Objects', 'published', 'false', '2022-12-28 11:41:06', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(423, 'Dr Ortho', 'uploads/stores/63ac2bbbc95b5.png', NULL, NULL, 'dr-ortho', 'Dr Ortho', 'Dr Ortho', 'Dr Ortho', 'published', 'false', '2022-12-28 11:42:51', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(424, 'Delhivery', 'uploads/stores/63ac2bd449c58.png', NULL, NULL, 'delhivery', 'Delhivery', 'Delhivery', 'Delhivery', 'published', 'false', '2022-12-28 11:43:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(425, 'Dermalogica', 'uploads/stores/63ac2be8b1574.png', NULL, NULL, 'dermalogica', 'Dermalogica', 'Dermalogica', 'Dermalogica', 'published', 'false', '2022-12-28 11:43:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(426, 'Durfi', 'uploads/stores/63ac2bfbe77c3.png', NULL, NULL, 'durfi', 'Durfi', 'Durfi', 'Durfi', 'published', 'false', '2022-12-28 11:43:55', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(427, 'Duroflex', 'uploads/stores/63ac2c0d2634c.png', NULL, NULL, 'duroflex', 'Duroflex', 'Duroflex', 'Duroflex', 'published', 'false', '2022-12-28 11:44:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(428, 'Domain.Com', 'uploads/stores/63ac2c20286c4.Com', NULL, NULL, 'domaincom', 'Domain.Com', 'Domain.Com', 'Domain.Com', 'published', 'false', '2022-12-28 11:44:32', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(430, 'DataCamp', 'uploads/stores/63ac2c4ce5471.png', NULL, NULL, 'datacamp', 'DataCamp', 'DataCamp', 'DataCamp', 'published', 'false', '2022-12-28 11:45:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(431, 'DriveU', 'uploads/stores/63ac2c5dd64aa.png', NULL, NULL, 'driveu', 'DriveU', 'DriveU', 'DriveU', 'published', 'false', '2022-12-28 11:45:33', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(432, 'DentalKart', 'uploads/stores/63ac2c71d89e9.png', NULL, NULL, 'dentalkart', 'DentalKart', 'DentalKart', 'DentalKart', 'published', 'false', '2022-12-28 11:45:53', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(433, 'Durex', 'uploads/stores/63ac2c818a47f.png', NULL, NULL, 'durex', 'Durex', 'Durex', 'Durex', 'published', 'false', '2022-12-28 11:46:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(434, 'D\'Decor', 'uploads/stores/63ac2c9b918ab.png', NULL, NULL, 'ddecor', 'D\'Decor', 'D\'Decor', 'D\'Decor', 'published', 'false', '2022-12-28 11:46:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(435, 'Dr Batra\'s', NULL, NULL, NULL, 'dr-batras', 'Dr Batra\'s', 'Dr Batra\'s', 'Dr Batra\'s', 'published', 'false', '2022-12-28 11:47:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(436, 'Dhani', 'uploads/stores/63ac2cdbb6c38.png', NULL, NULL, 'dhani', 'Dhani', 'Dhani', 'Dhani', 'published', 'false', '2022-12-28 11:47:39', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(437, 'DressLily', 'uploads/stores/63ac2cf120ffc.png', NULL, NULL, 'dresslily', 'DressLily', 'DressLily', 'DressLily', 'published', 'false', '2022-12-28 11:48:01', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(438, 'DeccanRummy', 'uploads/stores/63ac2d139455f.png', NULL, NULL, 'deccanrummy', 'DeccanRummy', 'DeccanRummy', 'DeccanRummy', 'published', 'false', '2022-12-28 11:48:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(439, 'Dream11', 'uploads/stores/63ac2d20366bf.png', NULL, NULL, 'dream11', 'Dream11', 'Dream11', 'Dream11', 'published', 'false', '2022-12-28 11:48:48', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(440, 'Darveys', 'uploads/stores/63ac2d39a1bf3.png', NULL, NULL, 'darveys', 'Darveys', 'Darveys', 'Darveys', 'published', 'false', '2022-12-28 11:49:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(441, 'Delight Food', 'uploads/stores/63ac2d4f00e1c.png', NULL, NULL, 'delight-food', 'Delight Food', 'Delight Food', 'Delight Food', 'published', 'false', '2022-12-28 11:49:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(442, 'Diabetes', 'uploads/stores/63ac2d5eddc54.png', NULL, NULL, 'diabetes', 'Diabetes', 'Diabetes', 'Diabetes', 'published', 'false', '2022-12-28 11:49:50', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(443, 'Disney Store', 'uploads/stores/63ac2d818aad2.png', NULL, NULL, 'disney-store', 'Disney Store', 'Disney Store', 'Disney Store', 'published', 'false', '2022-12-28 11:50:25', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(444, 'Devi Cinemas', 'uploads/stores/63ac2d8ac5185.png', NULL, NULL, 'devi-cinemas', 'Devi Cinemas', 'Devi Cinemas', 'Devi Cinemas', 'published', 'false', '2022-12-28 11:50:34', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(445, 'Doctor Insta', 'uploads/stores/63ac2da1ddf0e.png', NULL, NULL, 'doctor-insta', 'Doctor Insta', 'Doctor Insta', 'Doctor Insta', 'published', 'false', '2022-12-28 11:50:57', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(446, 'Dominos', 'uploads/stores/63ac2db45c65a.png', NULL, NULL, 'dominos', 'Dominos', 'Dominos', 'Dominos', 'published', 'false', '2022-12-28 11:51:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(447, 'Doctors Dreams', 'uploads/stores/63bd3b7322b67.png', NULL, NULL, 'doctors-dreams', 'Doctors Dreams', 'Doctors Dreams', 'Doctors Dreams', 'published', 'false', '2022-12-28 11:51:59', '2023-01-10 10:18:27', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/2w9um8pix5bbece05094133a473397/?i=3', 'false'),
(448, 'Dilmil', 'uploads/stores/63ac2e067dd14.png', NULL, NULL, 'dilmil', 'Dilmil', 'Dilmil', 'Dilmil', 'published', 'false', '2022-12-28 11:52:38', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(449, 'DTDC', 'uploads/stores/63ac2e18c8de0.png', NULL, NULL, 'dtdc', 'DTDC', 'DTDC', 'DTDC', 'published', 'false', '2022-12-28 11:52:56', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(450, 'Dyson', 'uploads/stores/63b2a11e0e3aa.png', NULL, NULL, 'dyson', 'Dyson', 'Dyson', 'Dyson', 'published', 'true', '2022-12-28 11:53:36', '2023-01-06 10:39:52', NULL, NULL, NULL, 1, 1, 'https://fas.st/OMHEDQ', 'false'),
(451, 'Dr Trust', 'uploads/stores/63ac2e5dcd16b.png', NULL, NULL, 'dr-trust', 'Dr Trust', 'Dr Trust', 'Dr Trust', 'published', 'false', '2022-12-28 11:54:05', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(452, 'DJI', 'uploads/stores/63ac2e6d28182.png', NULL, NULL, 'dji', 'DJI', 'DJI', 'DJI', 'published', 'false', '2022-12-28 11:54:21', '2023-01-19 11:32:36', NULL, NULL, NULL, 1, 1, 'https://click.dji.com/AOhfZvAcY0pg4wMuoSwKiw?pm=link', 'false'),
(453, 'DesertCart', 'uploads/stores/63ac2e8fbdfb5.png', NULL, NULL, 'desertcart', 'DesertCart', 'DesertCart', 'DesertCart', 'published', 'false', '2022-12-28 11:54:55', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(455, 'Ditto', 'uploads/stores/63ac2eb13feda.png', NULL, NULL, 'ditto', 'Ditto', 'Ditto', 'Ditto', 'published', 'false', '2022-12-28 11:55:29', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(456, 'DHgate', 'uploads/stores/63b137206867f.jpg', NULL, NULL, 'dhgate', 'DHgate Coupons, Offers, Deals, Promocode - January 2023', 'DHgate', 'DHgate', 'published', 'false', '2022-12-28 11:55:57', '2023-01-04 10:02:49', NULL, NULL, NULL, 1, 1, 'https://fas.st/TJjwWv', 'false'),
(457, 'Deddimaag', 'uploads/stores/63ac2edf92e6a.png', NULL, NULL, 'deddimaag', 'Deddimaag', 'Deddimaag', 'Deddimaag', 'published', 'false', '2022-12-28 11:56:15', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(458, 'Dr Lal Pathlabs', NULL, NULL, NULL, 'dr-lal-pathlabs', 'Dr Lal Pathlabs', 'Dr Lal Pathlabs', 'Dr Lal Pathlabs', 'published', 'false', '2022-12-28 11:56:38', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(459, 'DMODot', 'uploads/stores/63ac2f1436cc3.png', NULL, NULL, 'dmodot', 'DMODot', 'DMODot', 'DMODot', 'published', 'false', '2022-12-28 11:57:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(460, 'DocOnline', 'uploads/stores/63ac2f29f1cf3.png', NULL, NULL, 'doconline', 'DocOnline', 'DocOnline', 'DocOnline', 'published', 'false', '2022-12-28 11:57:29', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(461, 'DigitalOcean', 'uploads/stores/63ac2f3e94775.png', NULL, NULL, 'digitalocean', 'DigitalOcean', 'DigitalOcean', 'DigitalOcean', 'published', 'false', '2022-12-28 11:57:50', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(462, 'DMart', 'uploads/stores/63ac2f58e924b.png', NULL, NULL, 'dmart', 'DMart', 'DMart', 'DMart', 'published', 'false', '2022-12-28 11:58:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(463, 'Durian', 'uploads/stores/63b299cc7172a.png', NULL, NULL, 'durian', 'Durian', 'Durian', 'Durian', 'published', 'true', '2022-12-28 11:58:29', '2023-01-06 10:43:24', NULL, NULL, NULL, 1, 1, 'https://fas.st/9NeiLP', 'false'),
(464, 'Della Adventure', 'uploads/stores/63ac2f8d762d4.png', NULL, NULL, 'della-adventure', 'Della Adventure', 'Della Adventure', 'Della Adventure', 'published', 'false', '2022-12-28 11:59:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(465, 'Duke', 'uploads/stores/63ac2f9ed1509.png', NULL, NULL, 'duke', 'Duke', 'Duke', 'Duke', 'published', 'false', '2022-12-28 11:59:26', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(466, 'DPauls', 'uploads/stores/63ac2fb0059b7.png', NULL, NULL, 'dpauls', 'DPauls', 'DPauls', 'DPauls', 'published', 'false', '2022-12-28 11:59:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(467, 'Digiarty WinX DVD', 'uploads/stores/63ac2fd033473.png', NULL, NULL, 'digiarty-winx-dvd', 'Digiarty WinX DVD', 'Digiarty WinX DVD', 'Digiarty WinX DVD', 'published', 'false', '2022-12-28 12:00:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(468, 'DreamHost', 'uploads/stores/63ac2fe4468e3.png', NULL, NULL, 'dreamhost', 'DreamHost', 'DreamHost', 'DreamHost', 'published', 'false', '2022-12-28 12:00:36', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(469, 'Droom', 'uploads/stores/63ac2ff4a5c73.png', NULL, NULL, 'droom', 'Droom', 'Droom', 'Droom', 'published', 'false', '2022-12-28 12:00:52', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(470, 'Delfoo', 'uploads/stores/63ac301454883.png', NULL, NULL, 'delfoo', 'Delfoo', 'Delfoo', 'Delfoo', 'published', 'false', '2022-12-28 12:01:24', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(471, 'DogSpot', 'uploads/stores/63ac30303df42.png', NULL, NULL, 'dogspot', 'DogSpot', 'DogSpot', 'DogSpot', 'published', 'false', '2022-12-28 12:01:52', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(472, 'Decathlon', 'uploads/stores/63ac30440ea9b.png', NULL, NULL, 'decathlon', 'Decathlon', 'Decathlon', 'Decathlon', 'published', 'false', '2022-12-28 12:02:12', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(473, 'Eureka Forbes', 'uploads/stores/63ac47d510f5f.png', NULL, NULL, 'eureka-forbes', 'Eureka Forbes', 'Eureka Forbes', 'Eureka Forbes', 'published', 'false', '2022-12-28 13:42:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(474, 'EZMall', 'uploads/stores/63ac47f5b8801.png', NULL, NULL, 'ezmall', 'EZMall', 'EZMall', 'EZMall', 'published', 'false', '2022-12-28 13:43:17', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(475, 'Euphoria By A.Himanshu', 'uploads/stores/63ac4827e68ed.png', NULL, NULL, 'euphoria-by-ahimanshu', 'Euphoria By A.Himanshu', 'Euphoria By A.Himanshu', 'Euphoria By A.Himanshu', 'published', 'false', '2022-12-28 13:44:07', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(476, 'Early Salary', 'uploads/stores/63ac483a8c980.png', NULL, NULL, 'early-salary', 'Early Salary', 'Early Salary', 'Early Salary', 'published', 'false', '2022-12-28 13:44:26', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(477, 'ExpertRating', 'uploads/stores/63ac485113b68.png', NULL, NULL, 'expertrating', 'ExpertRating', 'ExpertRating', 'ExpertRating', 'published', 'false', '2022-12-28 13:44:49', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(478, 'EventJini', 'uploads/stores/63ac48727d145.png', NULL, NULL, 'eventjini', 'EventJini', 'EventJini', 'EventJini', 'published', 'false', '2022-12-28 13:45:22', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(479, 'Explara', 'uploads/stores/63ac488be1fa8.png', NULL, NULL, 'explara', 'Explara', 'Explara', 'Explara', 'published', 'false', '2022-12-28 13:45:47', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(480, 'ESBEDA', 'uploads/stores/63ac48a0b6e01.png', NULL, NULL, 'esbeda', 'ESBEDA', 'ESBEDA', 'ESBEDA', 'published', 'false', '2022-12-28 13:46:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(481, 'Enamor', 'uploads/stores/63ac48b266943.png', NULL, NULL, 'enamor', 'Enamor', 'Enamor', 'Enamor', 'published', 'false', '2022-12-28 13:46:26', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(482, 'EGA Cinemas', 'uploads/stores/63ac48dbb1d7c.png', NULL, NULL, 'ega-cinemas', 'EGA Cinemas', 'EGA Cinemas', 'EGA Cinemas', 'published', 'false', '2022-12-28 13:47:07', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(483, 'Engrave', 'uploads/stores/63ac48ed4b17a.png', NULL, NULL, 'engrave', 'Engrave', 'Engrave', 'Engrave', 'published', 'false', '2022-12-28 13:47:25', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(484, 'Emirates', 'uploads/stores/63ac48fe24c3e.png', NULL, NULL, 'emirates', 'Emirates', 'Emirates', 'Emirates', 'published', 'false', '2022-12-28 13:47:42', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(485, 'ExclusiveLane', 'uploads/stores/63ac491176f11.png', NULL, NULL, 'exclusivelane', 'ExclusiveLane', 'ExclusiveLane', 'ExclusiveLane', 'published', 'false', '2022-12-28 13:48:01', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(486, 'Etihad', 'uploads/stores/63ac4930d8d78.png', NULL, NULL, 'etihad', 'Etihad', 'Etihad', 'Etihad', 'published', 'false', '2022-12-28 13:48:32', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(487, 'EcraftINdia', 'uploads/stores/63ac496970c87.png', NULL, NULL, 'ecraftindia', 'EcraftINdia', 'EcraftINdia', 'EcraftINdia', 'published', 'false', '2022-12-28 13:49:29', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(488, 'Earth Rhytm', 'uploads/stores/63ac498702519.png', NULL, NULL, 'earth-rhytm', 'Earth Rhytm', 'Earth Rhytm', 'Earth Rhytm', 'published', 'false', '2022-12-28 13:49:59', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(489, 'EUME', 'uploads/stores/63ac499a20be3.png', NULL, NULL, 'eume', 'EUME', 'EUME', 'EUME', 'published', 'false', '2022-12-28 13:50:18', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(490, 'ESKE Paris', 'uploads/stores/63ac49bd202b3.png', NULL, NULL, 'eske-paris', 'ESKE Paris', 'ESKE Paris', 'ESKE Paris', 'published', 'false', '2022-12-28 13:50:53', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(491, 'ESPA', 'uploads/stores/63ac49cd00570.png', NULL, NULL, 'espa', 'ESPA', 'ESPA', 'ESPA', 'published', 'false', '2022-12-28 13:51:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(492, 'Edugorilla', 'uploads/stores/63ac49e03ca28.png', NULL, NULL, 'edugorilla', 'Edugorilla', 'Edugorilla', 'Edugorilla', 'published', 'false', '2022-12-28 13:51:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(493, 'East Essence', 'uploads/stores/63ac49f28166f.png', NULL, NULL, 'east-essence', 'East Essence', 'East Essence', 'East Essence', 'published', 'false', '2022-12-28 13:51:46', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(494, 'Ericdress', 'uploads/stores/63ac4a1c30af4.png', NULL, NULL, 'ericdress', 'Ericdress', 'Ericdress', 'Ericdress', 'published', 'false', '2022-12-28 13:52:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(495, 'Express', 'uploads/stores/63ac4a2d4fe71.png', NULL, NULL, 'express', 'Express', 'Express', 'Express', 'published', 'false', '2022-12-28 13:52:45', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(496, 'Ellementry', 'uploads/stores/63ac4a40b5ed5.png', NULL, NULL, 'ellementry', 'Ellementry', 'Ellementry', 'Ellementry', 'published', 'false', '2022-12-28 13:53:04', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(497, 'Eat Fit', 'uploads/stores/63ac4a5602ed2.png', NULL, NULL, 'eat-fit', 'Eat Fit', 'Eat Fit', 'Eat Fit', 'published', 'false', '2022-12-28 13:53:26', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false');
INSERT INTO `stores` (`id`, `title`, `image`, `description`, `long_description`, `seo_url`, `meta_title`, `meta_keywords`, `meta_description`, `publish`, `is_home`, `created_at`, `updated_at`, `bannerImage`, `footer_section`, `header_section`, `country_id`, `ordering`, `store_affilate_url`, `is_popular`) VALUES
(498, 'ETMoney', 'uploads/stores/63ac4a6b46d4d.png', NULL, NULL, 'etmoney', 'ETMoney', 'ETMoney', 'ETMoney', 'published', 'false', '2022-12-28 13:53:47', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(499, 'Etsy Shop', 'uploads/stores/63ac4a8495f3c.png', NULL, NULL, 'etsy-shop', 'Etsy Shop', 'Etsy Shop', 'Etsy Shop', 'published', 'false', '2022-12-28 13:54:12', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(500, 'Elearmarkets', 'uploads/stores/63ac4bc0a6667.png', NULL, NULL, 'elearmarkets', 'Elearmarkets', 'Elearmarkets', 'Elearmarkets', 'published', 'false', '2022-12-28 13:59:28', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(501, 'EvoFox', NULL, NULL, NULL, 'evofox', 'EvoFox', 'EvoFox', 'EvoFox', 'published', 'false', '2022-12-28 14:01:39', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(502, 'Ekdum Biryani', 'uploads/stores/63ac4cddc8a91.png', NULL, NULL, 'ekdum-biryani', 'Ekdum Biryani', 'Ekdum Biryani', 'Ekdum Biryani', 'published', 'false', '2022-12-28 14:04:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(503, 'Environics', 'uploads/stores/63ac4cf300efa.png', NULL, NULL, 'environics', 'Environics', 'Environics', 'Environics', 'published', 'false', '2022-12-28 14:04:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(504, 'Edx', 'uploads/stores/63ac4d0939fc1.png', NULL, NULL, 'edx', 'Edx', 'Edx', 'Edx', 'published', 'false', '2022-12-28 14:04:57', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(505, 'Ekam', 'uploads/stores/63ac4d38ca558.png', NULL, NULL, 'ekam', 'Ekam', 'Ekam', 'Ekam', 'published', 'false', '2022-12-28 14:05:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(506, 'ECO365', 'uploads/stores/63ac4d566ebbf.png', NULL, NULL, 'eco365', 'ECO365', 'ECO365', 'ECO365', 'published', 'false', '2022-12-28 14:06:14', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(507, 'Eatigo', 'uploads/stores/63ac4d6ba9518.png', NULL, NULL, 'eatigo', 'Eatigo', 'Eatigo', 'Eatigo', 'published', 'false', '2022-12-28 14:06:35', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(508, 'Elan', 'uploads/stores/63ac4d8a3f123.png', NULL, NULL, 'elan', 'Elan', 'Elan', 'Elan', 'published', 'false', '2022-12-28 14:07:06', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(509, 'Elle', 'uploads/stores/63ac4d9ca8d90.png', NULL, NULL, 'elle', 'Elle', 'Elle', 'Elle', 'published', 'false', '2022-12-28 14:07:24', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(510, 'Easyday Club', 'uploads/stores/63ac4dbddf764.png', NULL, NULL, 'easyday-club', 'Easyday Club', 'Easyday Club', 'Easyday Club', 'published', 'false', '2022-12-28 14:07:57', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(511, 'Eyewearlabs', 'uploads/stores/63ac4def9ef9c.png', NULL, NULL, 'eyewearlabs', 'Eyewearlabs', 'Eyewearlabs', 'Eyewearlabs', 'published', 'false', '2022-12-28 14:08:47', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(512, 'Ejohri', 'uploads/stores/63ac4e070e02c.png', NULL, NULL, 'ejohri', 'Ejohri', 'Ejohri', 'Ejohri', 'published', 'false', '2022-12-28 14:09:11', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(513, 'Edureka', 'uploads/stores/63ac4e1936162.png', NULL, NULL, 'edureka', 'Edureka', 'Edureka', 'Edureka', 'published', 'false', '2022-12-28 14:09:29', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(514, 'Evolve', 'uploads/stores/63ac4e2a2b327.png', NULL, NULL, 'evolve', 'Evolve', 'Evolve', 'Evolve', 'published', 'false', '2022-12-28 14:09:46', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(515, 'Everstylish', 'uploads/stores/63ac4e401d8c9.png', NULL, NULL, 'everstylish', 'Everstylish', 'Everstylish', 'Everstylish', 'published', 'false', '2022-12-28 14:10:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(516, 'Essel World', 'uploads/stores/63ac4e7e39a39.png', NULL, NULL, 'essel-world', 'Essel World', 'Essel World', 'Essel World', 'published', 'false', '2022-12-28 14:11:10', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(517, 'Evok', 'uploads/stores/63ac4ec8a6788.png', NULL, NULL, 'evok', 'Evok', 'Evok', 'Evok', 'published', 'true', '2022-12-28 14:12:24', '2023-01-06 12:56:12', 'uploads/stores/63b81a6cb2f4d.png', NULL, NULL, 1, 1, 'https://fas.st/yByAS', 'false'),
(518, 'ezRecharge', 'uploads/stores/63ac4ee422f5c.png', NULL, NULL, 'ezrecharge', 'ezRecharge', 'ezRecharge', 'ezRecharge', 'published', 'false', '2022-12-28 14:12:52', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(519, 'Ethos', 'uploads/stores/63ac4ef995195.png', NULL, NULL, 'ethos', 'Ethos', 'Ethos', 'Ethos', 'published', 'false', '2022-12-28 14:13:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(520, 'Easy Mobile Recharge', 'uploads/stores/63ac4f180ec0b.png', NULL, NULL, 'easy-mobile-recharge', 'Easy Mobile Recharge', 'Easy Mobile Recharge', 'Easy Mobile Recharge', 'published', 'false', '2022-12-28 14:13:44', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(521, 'Etravelsmart', 'uploads/stores/63ac4f35a0ec2.png', NULL, NULL, 'etravelsmart', 'Etravelsmart', 'Etravelsmart', 'Etravelsmart', 'published', 'false', '2022-12-28 14:14:13', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(522, 'Expedia', 'uploads/stores/63ac4f4e0b75a.png', NULL, NULL, 'expedia', 'Expedia', 'Expedia', 'Expedia', 'published', 'false', '2022-12-28 14:14:38', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(523, 'EazyDiner', 'uploads/stores/63ac4fd0860a6.png', NULL, NULL, 'eazydiner', 'EazyDiner', 'EazyDiner', 'EazyDiner', 'published', 'false', '2022-12-28 14:16:48', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(524, 'Eduonix', 'uploads/stores/63ac4fe429a56.png', NULL, NULL, 'eduonix', 'Eduonix', 'Eduonix', 'Eduonix', 'published', 'false', '2022-12-28 14:17:08', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(525, 'EverData', 'uploads/stores/63ac4ff2af688.png', NULL, NULL, 'everdata', 'EverData', 'EverData', 'EverData', 'published', 'false', '2022-12-28 14:17:22', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(526, 'eVitamins', 'uploads/stores/63ac5006de50f.png', NULL, NULL, 'evitamins', 'eVitamins', 'eVitamins', 'eVitamins', 'published', 'false', '2022-12-28 14:17:42', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(527, 'EmotionGift', 'uploads/stores/63ac5021e11f9.png', NULL, NULL, 'emotiongift', 'EmotionGift', 'EmotionGift', 'EmotionGift', 'published', 'false', '2022-12-28 14:18:09', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(528, 'Eco Rent a Car', 'uploads/stores/63ac50424a83d.png', NULL, NULL, 'eco-rent-a-car', 'Eco Rent a Car', 'Eco Rent a Car', 'Eco Rent a Car', 'published', 'false', '2022-12-28 14:18:42', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(529, 'Eatsome', 'uploads/stores/63ac5054dfc4e.png', NULL, NULL, 'eatsome', 'Eatsome', 'Eatsome', 'Eatsome', 'published', 'false', '2022-12-28 14:19:00', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(530, 'ePuja', 'uploads/stores/63ac5064960a7.png', NULL, NULL, 'epuja', 'ePuja', 'ePuja', 'ePuja', 'published', 'false', '2022-12-28 14:19:16', '2023-01-01 05:29:48', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(531, 'EasyMovies', 'uploads/stores/63ac50788b185.png', NULL, NULL, 'easymovies', 'EasyMovies', 'EasyMovies', 'EasyMovies', 'published', 'false', '2022-12-28 14:19:36', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(532, 'Egle Shoes', 'uploads/stores/63ac508f90a43.png', NULL, NULL, 'egle-shoes', 'Egle Shoes', 'Egle Shoes', 'Egle Shoes', 'published', 'false', '2022-12-28 14:19:59', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(533, 'Excitinglives', 'uploads/stores/63ac50a5214de.png', NULL, NULL, 'excitinglives', 'Excitinglives', 'Excitinglives', 'Excitinglives', 'published', 'false', '2022-12-28 14:20:21', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(534, 'EaseMyTrip', 'uploads/stores/63ac5313465f4.png', NULL, NULL, 'easemytrip', 'EaseMyTrip', 'EaseMyTrip', 'EaseMyTrip', 'published', 'false', '2022-12-28 14:30:43', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(535, 'eBay', 'uploads/stores/63ac5324522e5.png', NULL, NULL, 'ebay', 'eBay', 'eBay', 'eBay', 'published', 'false', '2022-12-28 14:31:00', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(536, 'EventsNow', 'uploads/stores/63ac533c70e14.png', NULL, NULL, 'eventsnow', 'EventsNow', 'EventsNow', 'EventsNow', 'published', 'false', '2022-12-28 14:31:24', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(537, 'Enrich Salon', 'uploads/stores/63ac5358b1591.png', NULL, NULL, 'enrich-salon', 'Enrich Salon', 'Enrich Salon', 'Enrich Salon', 'published', 'false', '2022-12-28 14:31:52', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(538, 'Eros Now', 'uploads/stores/63ac546474e10.png', NULL, NULL, 'eros-now', 'Eros Now', 'Eros Now', 'Eros Now', 'published', 'false', '2022-12-28 14:36:20', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(539, 'Ed Hardy', 'uploads/stores/63ac54781365b.png', NULL, NULL, 'ed-hardy', 'Ed Hardy', 'Ed Hardy', 'Ed Hardy', 'published', 'false', '2022-12-28 14:36:40', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(540, 'Enn Beauty', 'uploads/stores/63ac548b0ea9f.png', NULL, NULL, 'enn-beauty', 'Enn Beauty', 'Enn Beauty', 'Enn Beauty', 'published', 'false', '2022-12-28 14:36:59', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(541, 'Ecovacs', 'uploads/stores/63ac54a5550be.png', NULL, NULL, 'ecovacs', 'Ecovacs', 'Ecovacs', 'Ecovacs', 'published', 'false', '2022-12-28 14:37:25', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(542, 'EyemyEye', 'uploads/stores/63ac54c1d67c7.png', NULL, NULL, 'eyemyeye', 'EyemyEye', 'EyemyEye', 'EyemyEye', 'published', 'false', '2022-12-28 14:37:53', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(543, 'Eat Sure', 'uploads/stores/63ac54d776173.png', NULL, NULL, 'eat-sure', 'Eat Sure', 'Eat Sure', 'Eat Sure', 'published', 'false', '2022-12-28 14:38:15', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(544, 'Edvoy', 'uploads/stores/63ac54e98b314.png', NULL, NULL, 'edvoy', 'Edvoy', 'Edvoy', 'Edvoy', 'published', 'false', '2022-12-28 14:38:33', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(545, 'Ekeeda', 'uploads/stores/63ac5500d91b9.png', NULL, NULL, 'ekeeda', 'Ekeeda', 'Ekeeda', 'Ekeeda', 'published', 'false', '2022-12-28 14:38:56', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(546, 'EPIC On', 'uploads/stores/63ac551c44be9.png', NULL, NULL, 'epic-on', 'EPIC On', 'EPIC On', 'EPIC On', 'published', 'false', '2022-12-28 14:39:24', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(547, 'Envato Market', 'uploads/stores/63ac55325133f.png', NULL, NULL, 'envato-market', 'Envato Market', 'Envato Market', 'Envato Market', 'published', 'false', '2022-12-28 14:39:46', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(548, 'Enchanteur', 'uploads/stores/63ac554aad007.png', NULL, NULL, 'enchanteur', 'Enchanteur', 'Enchanteur', 'Enchanteur', 'published', 'false', '2022-12-28 14:40:10', '2023-01-01 05:29:47', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(551, 'Hammer', 'uploads/stores/63b29323ca3e0.png', NULL, NULL, 'hammer', 'Hammer', 'Hammer', 'Hammer', 'published', 'true', '2023-01-02 08:17:39', '2023-01-06 10:39:31', NULL, NULL, NULL, 1, 1, 'https://fas.st/Ythu3z', 'false'),
(552, 'Happilo', 'uploads/stores/63b298d6eba5a.png', NULL, NULL, 'Happilo', 'Happilo', 'Happilo', 'Happilo', 'published', 'false', '2023-01-02 08:41:58', '2023-01-02 08:41:58', NULL, NULL, NULL, 1, 1, 'https://fas.st/VTW4d', 'false'),
(553, 'Fossil', 'uploads/stores/63b29960bdfbd.png', NULL, NULL, 'Fossil', 'Fossil India Coupons, Offers, Deals, Promo code', 'Fossil Coupons, Fossil promo code, Fossil offers', 'Fossil India coupons Upto 40% Off on Watches Bags & More', 'published', 'true', '2023-01-02 08:44:16', '2023-01-19 20:11:41', NULL, NULL, NULL, 1, 1, 'https://fas.st/nAxnHT', 'false'),
(554, 'Basicslife', 'uploads/stores/63b2a0be7975a.png', NULL, NULL, 'basicslife', 'Basicslife', 'Basicslife', 'Basicslife', 'published', 'true', '2023-01-02 09:15:42', '2023-01-06 10:40:45', NULL, NULL, NULL, 1, 1, 'https://fas.st/SdqP-', 'false'),
(555, 'Wellbeing Nutrition', 'uploads/stores/63b2bedab5498.png', NULL, NULL, 'wellbeing-nutrition', 'Wellbeing Nutrition Coupons, Offers, Deals, Promo code -', 'Wellbeing Nutrition coupons, Wellbeing Nutrition discount code, Wellbeing Nutrition coupon, Wellbeing Nutrition offers, Wellbeing Nutrition codes, Wellbeing Nutrition discount, wellbeing coupons, wellbeing offers, wellbeing discount, wellbeing coupon, wellbeing discount code', 'Wellbeing Nutrition', 'published', 'true', '2023-01-02 09:16:51', '2023-01-23 10:20:34', NULL, NULL, NULL, 1, 1, 'https://tracking.icubeswire.co/aff_c?offer_id=2822&aff_id=5939', 'false'),
(556, 'Puma', 'uploads/stores/63b2a1495a1f7.png', NULL, NULL, 'puma', 'Puma', 'Puma', 'Puma', 'published', 'false', '2023-01-02 09:18:01', '2023-01-02 09:18:01', NULL, NULL, NULL, 1, 1, 'https://fas.st/-7c4fJ', 'false'),
(557, 'GoNoise', 'uploads/stores/63b2a199a1216.png', NULL, NULL, 'gonoise', 'GoNoise Coupons, Offers, Deals, Promocode - January 2023', 'GoNoise', 'GoNoise', 'published', 'true', '2023-01-02 09:19:21', '2023-01-06 10:40:00', NULL, NULL, NULL, 1, 1, 'https://fas.st/34QNu', 'false'),
(558, 'Hidesign', 'uploads/stores/63b2a1ee3db52.png', NULL, NULL, 'hidesign', 'Hidesign', 'Hidesign', 'Hidesign', 'published', 'true', '2023-01-02 09:20:46', '2023-01-06 10:40:37', NULL, NULL, NULL, 1, 1, 'https://fas.st/4906rk', 'false'),
(559, 'Lenovo IN', 'uploads/stores/63b2bc960c932.png', NULL, NULL, 'lenovo-in', 'Lenovo IN Coupons, Offers, Deals, Promocode - January 2023', 'Lenovo IN', 'Lenovo IN', 'published', 'true', '2023-01-02 10:49:25', '2023-01-06 10:39:02', NULL, NULL, NULL, 1, 1, 'https://fas.st/_Mfyac', 'true'),
(561, 'Nilkamal', 'uploads/stores/63b2bcee4c7a3.png', NULL, NULL, 'nilkamal', 'Nilkamal Coupons, Offers, Deals, Promocode -', 'Nilkamal coupons, nilkamal couponcode, nilkamal discount code, nilkamal promo code, nilkamal coupon,', 'Nilkamal', 'published', 'true', '2023-01-02 10:52:49', '2023-01-23 09:32:47', NULL, NULL, NULL, 1, 1, 'https://fas.st/TVsmuE', 'true'),
(562, 'Govee US', 'uploads/stores/63b2cbb0ce918.png', NULL, NULL, 'govee-us', 'Govee US Coupons & Offers: 80% Off Codes in Jan 2023', 'Govee US', 'Govee US Coupons & Offers: 80% Off Codes in Jan 2023', 'published', 'false', '2023-01-02 12:18:56', '2023-01-06 10:37:52', NULL, NULL, NULL, 1, 4, 'https://fas.st/MGThMT', 'true'),
(563, 'Govee EU', 'uploads/stores/63b2cbb3687f2.png', NULL, NULL, 'govee-eu', 'Govee EU Coupons, Offers, Deals, Promocode - January 2023', 'Govee EU', 'Govee EU', 'published', 'false', '2023-01-02 12:18:59', '2023-01-04 10:02:32', NULL, NULL, NULL, 1, 1, 'https://fas.st/ScnKLx', 'false'),
(564, 'Govee CA', 'uploads/stores/63b2cbb66098d.png', NULL, NULL, 'govee-ca', 'Govee CA Coupons, Offers, Deals, Promocode', 'Govee CA', 'Govee CA', 'published', 'false', '2023-01-02 12:19:02', '2023-01-10 19:03:04', NULL, NULL, NULL, 1, 1, 'https://fas.st/TsM5K', 'false'),
(565, 'Govee UK', 'uploads/stores/63b2cbb8c6694.png', NULL, NULL, 'govee-uk', 'Govee UK Coupons, Offers, Deals, Promocode - January 2023', 'Govee UK', 'Govee UK', 'published', 'false', '2023-01-02 12:19:04', '2023-01-04 10:02:34', NULL, NULL, NULL, 1, 1, 'https://fas.st/Eq-Zg', 'false'),
(566, 'Portronics', 'uploads/stores/63b2e404ac0d7.png', NULL, NULL, 'portronics', 'Portronics', 'Portronics', 'Portronics', 'published', 'true', '2023-01-02 14:02:44', '2023-01-06 10:40:59', NULL, NULL, NULL, 1, 1, 'https://fas.st/zw4Lr', 'false'),
(567, 'Damensch', 'uploads/stores/63b2e40587693.png', NULL, NULL, 'damensch', 'Damensch', 'Damensch', 'Damensch', 'published', 'true', '2023-01-02 14:02:45', '2023-01-06 10:43:46', NULL, NULL, NULL, 1, 1, 'https://fas.st/3KvFFf', 'false'),
(568, 'Only', 'uploads/stores/63b2e407100d5.png', NULL, NULL, 'only', 'Only', 'Only', 'Only', 'published', 'true', '2023-01-02 14:02:47', '2023-01-06 10:43:55', NULL, NULL, NULL, 1, 1, 'https://fas.st/-Td-Rt', 'false'),
(569, 'Jack&Jones', 'uploads/stores/63b2e407f27bc.png', NULL, NULL, 'jackjones', 'Jack&Jones', 'Jack&Jones', 'Jack&Jones', 'published', 'true', '2023-01-02 14:02:47', '2023-01-06 10:41:18', NULL, NULL, NULL, 1, 1, 'https://fas.st/4s8Xp', 'false'),
(570, 'American Eagle', 'uploads/stores/63b2e40fb58d1.png', NULL, NULL, 'american-eagle', 'American Eagle', 'American Eagle', 'American Eagle', 'published', 'true', '2023-01-02 14:02:55', '2023-01-06 10:41:08', NULL, NULL, NULL, 1, 1, 'https://fas.st/Fn_amb', 'false'),
(572, 'Oneplus', 'uploads/stores/63b3f7291e455.png', NULL, NULL, 'Oneplus', 'Oneplus', 'Oneplus', 'Oneplus', 'published', 'false', '2023-01-03 09:36:41', '2023-01-03 09:36:41', NULL, NULL, NULL, 1, 1, 'https://fas.st/g5lh5b', 'false'),
(573, 'Libas', 'uploads/stores/63b3f751d8a9b.png', NULL, NULL, 'Libas', 'Libas', 'Libas', 'Libas', 'published', 'false', '2023-01-03 09:37:21', '2023-01-03 09:37:21', NULL, NULL, NULL, 1, 1, 'https://fas.st/WKBXF', 'false'),
(574, 'Wildcraft', 'uploads/stores/63b3f7e62f0e1.png', NULL, NULL, 'wildcraft', 'Wildcraft', 'Wildcraft', 'Wildcraft', 'published', 'false', '2023-01-03 09:39:50', '2023-01-03 09:39:50', NULL, NULL, NULL, 1, 1, 'https://fas.st/FTW8z', 'false'),
(575, 'Oneplus IN', 'uploads/stores/63b3fa78a9983.png', NULL, NULL, 'OneplusIn', 'Oneplus IN', 'Oneplus IN', 'Oneplus IN', 'published', 'true', '2023-01-03 09:50:30', '2023-01-06 10:42:36', NULL, NULL, NULL, 1, 1, 'https://fas.st/g5lh5b', 'false'),
(576, 'Xpluswear', 'uploads/stores/63b3fab109d48.png', NULL, NULL, 'Xpluswear', 'Xpluswear', 'Xpluswear', 'Xpluswear', 'published', 'false', '2023-01-03 09:51:45', '2023-01-03 09:51:45', NULL, NULL, NULL, 1, 1, 'https://fas.st/WU1l3', 'false'),
(577, 'Powerlook', 'uploads/stores/63b4042cddaa6.png', NULL, NULL, 'powerlook', 'Powerlook', 'Powerlook', 'Powerlook', 'published', 'false', '2023-01-03 10:32:12', '2023-01-03 10:32:12', NULL, NULL, NULL, 1, 1, 'https://fas.st/Kx_eN', 'false'),
(578, 'Tanishq', 'uploads/stores/63b4044d17a89.png', NULL, NULL, 'tanishq', 'Tanishq', 'Tanishq', 'Tanishq', 'published', 'false', '2023-01-03 10:32:45', '2023-01-03 10:32:45', NULL, NULL, NULL, 1, 1, 'https://fas.st/Te-bBZ', 'false'),
(579, 'The Sleep Company', 'uploads/stores/63b4065fa0a80.png', NULL, NULL, 'the-sleep-company', 'The Sleep Company', 'The Sleep Company', 'The Sleep Company', 'published', 'true', '2023-01-03 10:41:35', '2023-01-06 10:42:46', NULL, NULL, NULL, 1, 1, 'https://fas.st/ZXysOf', 'false'),
(580, 'Shopper Stop', 'uploads/stores/63b4068b8c764.png', NULL, NULL, 'shopper-stop', 'Shopper Stop', 'Shopper Stop', 'Shopper Stop', 'published', 'true', '2023-01-03 10:42:19', '2023-01-06 10:41:34', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/cp25pudklnbbece050948ff14b2938/?i=3', 'false'),
(581, 'Uniqlo', 'uploads/stores/63b41f00b930a.png', NULL, NULL, 'uniqlo', 'Uniqlo', 'Uniqlo', 'Uniqlo', 'published', 'false', '2023-01-03 12:26:40', '2023-01-03 12:26:40', NULL, NULL, NULL, 1, 1, 'https://fas.st/sMAXSL', 'false'),
(582, 'Just Herbs', 'uploads/stores/63b41f1b78360.png', NULL, NULL, 'just-herbs', 'Just Herbs', 'Just Herbs', 'Just Herbs', 'published', 'true', '2023-01-03 12:27:07', '2023-01-06 10:42:11', NULL, NULL, NULL, 1, 1, 'https://fas.st/Tf1f4S', 'false'),
(583, 'Bevzilla', 'uploads/stores/63b41f3454ca8.png', NULL, NULL, 'bevzilla', 'Bevzilla', 'Bevzilla', 'Bevzilla', 'published', 'false', '2023-01-03 12:27:32', '2023-01-03 12:27:32', NULL, NULL, NULL, 1, 1, 'https://fas.st/5hnW3z', 'false'),
(584, 'Setu', 'uploads/stores/63b41f5d3582e.png', NULL, NULL, 'setu', 'Setu', 'Setu', 'Setu', 'published', 'false', '2023-01-03 12:28:13', '2023-01-03 12:28:13', NULL, NULL, NULL, 1, 1, 'https://fas.st/rr4g6', 'false'),
(585, 'Ustra', 'uploads/stores/63b42d0d54e2d.png', NULL, NULL, 'ustra', 'Ustra', 'Ustra', 'Ustra', 'published', 'true', '2023-01-03 13:26:37', '2023-01-06 10:42:28', NULL, NULL, NULL, 1, 1, 'https://fas.st/QSCqon', 'false'),
(586, 'Peesafe', 'uploads/stores/63b43258f1ec4.png', NULL, NULL, 'peesafe', 'Peesafe', 'Peesafe', 'Peesafe', 'published', 'true', '2023-01-03 13:49:12', '2023-01-06 10:42:19', NULL, NULL, NULL, 1, 1, 'https://fas.st/dWR1RZ', 'false'),
(587, 'Vevor UK', 'uploads/stores/63b4399dc71b6.png', NULL, NULL, 'vevor-uk', 'Vevor UK', 'Vevor UK', 'Vevor UK', 'published', 'false', '2023-01-03 14:20:13', '2023-01-03 14:20:13', NULL, NULL, NULL, 1, 1, 'https://fas.st/C_eYe', 'false'),
(588, 'my wake up', 'uploads/stores/63b69e1d2ba7c.png', NULL, NULL, 'my-wake-up', 'my wake up', 'my wake up', 'my wake up', 'published', 'false', '2023-01-05 08:22:39', '2023-01-05 09:53:33', 'uploads/stores/63b688cfc3c6a.png', NULL, NULL, 1, 1, 'https://fas.st/xrk9gV', 'false'),
(589, 'The Ayurveda Co.', 'uploads/stores/63b69e26f1ae9.png', NULL, NULL, 'the-ayurveda-co', 'The Ayurveda Co.', 'The Ayurveda Co.', 'The Ayurveda Co.', 'published', 'false', '2023-01-05 08:23:14', '2023-01-05 09:53:42', 'uploads/stores/63b688f20dcde.png', NULL, NULL, 1, 1, 'https://fas.st/FYQs0', 'false'),
(590, 'bombay shaving company', 'uploads/stores/63b69e0fdcc95.png', NULL, NULL, 'bombay-shaving-company', 'bombay shaving company', 'bombay shaving company', 'bombay shaving company', 'published', 'false', '2023-01-05 08:23:40', '2023-01-05 09:53:19', 'uploads/stores/63b6890c7c4dc.png', NULL, NULL, 1, 1, 'https://fas.st/15Avi', 'false'),
(591, 'ReneeCosmetics', 'uploads/stores/63b69e091a362.png', NULL, NULL, 'reneecosmetics', 'ReneeCosmetics', 'ReneeCosmetics', 'ReneeCosmetics', 'published', 'false', '2023-01-05 08:24:19', '2023-01-05 09:53:13', 'uploads/stores/63b6893335ef4.png', NULL, NULL, 1, 1, 'https://ad.admitad.com/g/5ad5qh0ltabbece0509459b6e0a518/?i=3', 'false'),
(592, 'trueBrowns', 'uploads/stores/63b69e006c163.png', NULL, NULL, 'truebrowns', 'trueBrowns', 'trueBrowns', 'trueBrowns', 'published', 'false', '2023-01-05 08:24:58', '2023-01-05 09:53:04', 'uploads/stores/63b6895ad6ddc.png', NULL, NULL, 1, 1, 'https://fas.st/hkekM', 'false'),
(593, 'fablestreet', 'uploads/stores/63b69df7d5908.png', NULL, NULL, 'fablestreet', 'fablestreet', 'fablestreet', 'fablestreet', 'published', 'false', '2023-01-05 08:25:31', '2023-01-05 09:52:55', 'uploads/stores/63b6897b97a72.png', NULL, NULL, 1, 1, 'https://fas.st/fJCIGT', 'false'),
(594, 'fitspire', 'uploads/stores/63b69ddda587b.png', NULL, NULL, 'fitspire', 'fitspire', 'fitspire', 'fitspire', 'published', 'false', '2023-01-05 08:25:50', '2023-01-05 09:52:29', 'uploads/stores/63b6898e87c99.png', NULL, NULL, 1, 1, 'https://fas.st/tYOTd', 'false'),
(595, 'koskii', 'uploads/stores/63b7f85ccf72b.png', NULL, NULL, 'koskii', 'koskii', 'koskii', 'koskii', 'published', 'false', '2023-01-06 10:30:52', '2023-01-06 10:30:52', NULL, NULL, NULL, 1, 1, 'https://fas.st/Hv2Ba', 'false'),
(596, 'Plum goodness', 'uploads/stores/63b7f87964c81.png', NULL, NULL, 'plum-goodness', 'Plum goodness', 'Plum goodness', 'Plum goodness', 'published', 'false', '2023-01-06 10:31:21', '2023-01-06 10:31:21', NULL, NULL, NULL, 1, 1, 'https://fas.st/OtVsn', 'false'),
(597, 'Lakme', 'uploads/stores/63b7f88ee7d20.png', NULL, NULL, 'lakme', 'Lakme', 'Lakme', 'Lakme', 'published', 'false', '2023-01-06 10:31:42', '2023-01-06 10:31:42', NULL, NULL, NULL, 1, 1, 'https://fas.st/d7YoxP', 'false'),
(598, 'The Phylife', 'uploads/stores/63b7f8c754a4a.png', NULL, NULL, 'the-phylife', 'The Phylife', 'The Phylife', 'The Phylife', 'published', 'false', '2023-01-06 10:32:39', '2023-01-06 10:32:39', NULL, NULL, NULL, 1, 1, 'https://fas.st/dXbdEn', 'false'),
(599, 'Sleepy Owl', 'uploads/stores/63b7f8e8c3fe0.png', NULL, NULL, 'sleepy-owl', 'Sleepy Owl', 'Sleepy Owl', 'Sleepy Owl', 'published', 'false', '2023-01-06 10:33:12', '2023-01-06 10:33:12', NULL, NULL, NULL, 1, 1, 'https://fas.st/IJ6XC6', 'false'),
(600, 'Sadhev', 'uploads/stores/63b7f900bbd01.png', NULL, NULL, 'sadhev', 'Sadhev', 'Sadhev', 'Sadhev', 'published', 'false', '2023-01-06 10:33:36', '2023-01-06 10:33:36', NULL, NULL, NULL, 1, 1, 'https://fas.st/5JDZ9', 'false'),
(601, 'Sleepy Cat', 'uploads/stores/63b7f92da4db2.png', NULL, NULL, 'sleepy-cat', 'Sleepy Cat', 'Sleepy Cat', 'Sleepy Cat', 'published', 'false', '2023-01-06 10:34:21', '2023-01-06 10:34:21', NULL, NULL, NULL, 1, 1, 'https://fas.st/ae7T3H', 'false'),
(602, 'Neemli Naturals', 'uploads/stores/63b7f9497a064.png', NULL, NULL, 'neemli-naturals', 'Neemli Naturals', 'Neemli Naturals', 'Neemli Naturals', 'published', 'false', '2023-01-06 10:34:49', '2023-01-06 10:34:49', NULL, NULL, NULL, 1, 1, 'https://fas.st/rVZxe', 'false'),
(603, 'Sebamed', 'uploads/stores/63b803970c87a.png', NULL, NULL, 'sebamed', 'Sebamed', 'Sebamed', 'Sebamed', 'published', 'false', '2023-01-06 11:18:47', '2023-01-06 11:18:47', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/zndz2d6o9abbece050940898743494/?subid=https%3A%2F%2Fwww.sebamed.com%2F', 'false'),
(604, 'Wellify', 'uploads/stores/63b8081633e12.png', NULL, NULL, 'wellify', 'Wellify', 'Wellify', 'Wellify', 'published', 'false', '2023-01-06 11:37:58', '2023-01-06 11:37:58', NULL, NULL, NULL, 1, 1, 'https://fas.st/W08Ju', 'false'),
(605, 'Giva', 'uploads/stores/63b8081adb9a3.png', NULL, NULL, 'giva', 'Giva', 'Giva', 'Giva', 'published', 'false', '2023-01-06 11:38:02', '2023-01-06 11:38:02', NULL, NULL, NULL, 1, 1, 'https://fas.st/wMKWR', 'false'),
(606, 'Aliexpress DE', 'uploads/stores/63bbb2d15e1b9.png', NULL, NULL, 'aliexpress-de', 'Aliexpress DE', 'Aliexpress DE', 'Aliexpress DE', 'published', 'false', '2023-01-09 06:22:22', '2023-01-09 06:23:13', 'uploads/stores/63bbb29e444b5.png', NULL, NULL, 1, 1, 'https://ali.ski/lLpwC', 'false'),
(607, 'Kinguin', 'uploads/stores/63bbd3dec2f30.png', NULL, NULL, 'kinguin', 'Kinguin', 'Kinguin', 'Kinguin', 'published', 'false', '2023-01-09 08:40:18', '2023-01-09 08:44:14', 'uploads/stores/63bbd2f26d17a.png', NULL, NULL, 1, 1, 'https://fas.st/qP2puC', 'false'),
(608, 'Adani One', 'uploads/stores/63bbd30ebe867.png', NULL, NULL, 'adani-one', 'Adani One', 'Adani One', 'Adani One', 'published', 'false', '2023-01-09 08:40:46', '2023-01-09 08:40:46', NULL, NULL, NULL, 1, 1, 'https://tracking.icubeswire.co/aff_c?offer_id=3088&aff_id=5939', 'false'),
(609, 'Unice', 'uploads/stores/63bbd33b3b80d.png', NULL, NULL, 'unice', 'Unice', 'Unice', 'Unice', 'published', 'false', '2023-01-09 08:41:31', '2023-01-09 08:41:31', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/budefmy4z0bbece0509463b3c6827b/?i=3', 'false'),
(610, 'Chicme', 'uploads/stores/63bbd36d77703.png', NULL, NULL, 'chicme', 'Chicme', 'Chicme', 'Chicme', 'published', 'false', '2023-01-09 08:42:21', '2023-01-09 08:42:21', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/hs8mlalfcwbbece05094312b8f391a/?i=3', 'false'),
(611, 'Cotosen', 'uploads/stores/63bbd390dc83d.png', NULL, NULL, 'cotosen', 'Cotosen', 'Cotosen', 'Cotosen', 'published', 'false', '2023-01-09 08:42:56', '2023-01-09 08:42:56', NULL, NULL, NULL, 1, 1, 'https://fas.st/9tpqO', 'false'),
(612, 'Guardian', 'uploads/stores/63bc01dc6bf21.png', NULL, NULL, 'guardian', 'Guardian', 'Guardian', 'Guardian', 'published', 'false', '2023-01-09 12:00:28', '2023-01-09 12:00:28', NULL, NULL, NULL, 1, 1, 'https://fas.st/uKNZb', 'false'),
(614, 'pepperfry', 'uploads/stores/63bc024f0fc8a.png', NULL, NULL, 'pepperfry', 'pepperfry', 'pepperfry', 'pepperfry', 'published', 'false', '2023-01-09 12:02:23', '2023-01-09 12:02:23', NULL, NULL, NULL, 1, 1, 'https://fas.st/GD3X1', 'false'),
(615, 'kama ayurveda', 'uploads/stores/63bc02a44e4dd.png', NULL, NULL, 'kama-ayurveda', 'kama ayurveda', 'kama ayurveda', 'kama ayurveda', 'published', 'false', '2023-01-09 12:03:48', '2023-01-09 12:03:48', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/kb3sei36s7bbece05094940deea487/?i=3', 'false'),
(616, 'Supertails', 'uploads/stores/63bc02b6d9f5a.png', NULL, NULL, 'supertails', 'Supertails', 'Supertails', 'Supertails', 'published', 'false', '2023-01-09 12:04:06', '2023-01-09 12:04:06', NULL, NULL, NULL, 1, 1, 'https://fas.st/Dbo7w8', 'false'),
(617, 'mama earth', 'uploads/stores/63bc1bc7d1939.png', NULL, NULL, 'mama-earth', 'mama earth', 'mama earth', 'mama earth', 'published', 'false', '2023-01-09 13:51:03', '2023-01-09 13:51:03', NULL, NULL, NULL, 1, 1, 'https://fas.st/JWybBX', 'false'),
(619, 'Vero moda', 'uploads/stores/63bd3b0437175.png', NULL, NULL, 'vero-moda', 'Vero moda', 'Vero moda', 'Vero moda', 'published', 'false', '2023-01-10 10:16:36', '2023-01-10 10:16:36', NULL, NULL, NULL, 1, 1, 'https://fas.st/szVXhv', 'false'),
(620, 'Ivrose US', 'uploads/stores/63bd3b1abd521.png', NULL, NULL, 'ivrose-us', 'Ivrose US', 'Ivrose US', 'Ivrose US', 'published', 'false', '2023-01-10 10:16:58', '2023-01-10 10:16:58', NULL, NULL, NULL, 1, 1, 'https://fas.st/xIUYbU', 'false'),
(621, 'Nadula', 'uploads/stores/63bd3b32dadfd.png', NULL, NULL, 'nadula', 'Nadula', 'Nadula', 'Nadula', 'published', 'false', '2023-01-10 10:17:22', '2023-01-10 10:17:22', NULL, NULL, NULL, 1, 1, 'https://fas.st/wCgtbZ', 'false'),
(622, 'Milanoo', 'uploads/stores/63bd3b4bee21a.png', NULL, NULL, 'milanoo', 'Milanoo', 'Milanoo', 'Milanoo', 'published', 'false', '2023-01-10 10:17:47', '2023-01-10 10:17:47', NULL, NULL, NULL, 1, 1, 'https://fas.st/0BZtFQ', 'false'),
(623, 'Ferns and Petals', 'uploads/stores/63bd3b9604271.png', NULL, NULL, 'Fernsnpetals', 'fnp', 'fnp', 'fnp', 'published', 'false', '2023-01-10 10:19:02', '2023-01-21 11:54:22', NULL, NULL, NULL, 1, 1, 'https://fas.st/R7Ou2', 'false'),
(624, 'Bellelily', 'uploads/stores/63bd3baed65db.png', NULL, NULL, 'bellelily', 'Bellelily', 'Bellelily', 'Bellelily', 'published', 'false', '2023-01-10 10:19:26', '2023-01-10 10:19:26', NULL, NULL, NULL, 1, 1, 'https://fas.st/K_M1U', 'false'),
(625, 'Fairy season', 'uploads/stores/63bd3be3c9b7b.png', NULL, NULL, 'fairy-season', 'Fairy season', 'Fairy season', 'Fairy season', 'published', 'false', '2023-01-10 10:20:19', '2023-01-10 10:20:19', NULL, NULL, NULL, 1, 1, 'https://fas.st/vrkMf7\\', 'false'),
(626, 'Kapiva', 'uploads/stores/63bd787a8081c.png', NULL, NULL, 'kapiva', 'Kapiva', 'Kapiva', 'Kapiva', 'published', 'false', '2023-01-10 14:38:50', '2023-01-10 14:38:50', NULL, NULL, NULL, 1, 1, 'https://fas.st/bHPqQj', 'false'),
(627, 'Khadi Essentials', 'uploads/stores/63bd78ad409aa.png', NULL, NULL, 'khadi-essentials', 'Khadi Essentials', 'Khadi Essentials', 'Khadi Essentials', 'published', 'false', '2023-01-10 14:39:41', '2023-01-10 14:39:41', NULL, NULL, NULL, 1, 1, 'https://fas.st/TgyFNS', 'false'),
(628, 'Plush', 'uploads/stores/63bd78d993118.png', NULL, NULL, 'plush', 'Plush', 'Plush', 'Plush', 'published', 'false', '2023-01-10 14:40:25', '2023-01-10 14:40:38', NULL, NULL, NULL, 1, 1, 'https://fas.st/psHib', 'false'),
(629, 'Heads Up For Tails', 'uploads/stores/63bdbb8d3c391.png', NULL, NULL, 'heads-up-for-tails', 'Heads Up For Tails', 'Heads Up For Tails', 'Heads Up For Tails', 'published', 'false', '2023-01-10 19:25:01', '2023-01-10 19:25:01', NULL, NULL, NULL, 1, 1, 'https://fas.st/JYsPwE', 'false'),
(630, 'Snapdeal', 'uploads/stores/63bdbc54e9614.png', NULL, NULL, 'snapdeal', 'Snapdeal', 'Snapdeal', 'Snapdeal', 'published', 'false', '2023-01-10 19:28:20', '2023-01-10 19:28:20', NULL, NULL, NULL, 1, 1, 'https://fas.st/uxxQ2', 'false'),
(631, 'Bigrock', 'uploads/stores/63bfdc9595236.png', NULL, NULL, 'bigrock', 'Bigrock', 'Bigrock', 'Bigrock', 'published', 'false', '2023-01-12 10:10:29', '2023-01-12 10:10:29', NULL, NULL, NULL, 1, 1, 'https://fas.st/uthuO', 'false'),
(632, 'Marks and Spencer', 'uploads/stores/63bfdccf91831.png', NULL, NULL, 'marks-and-spencer', 'Marks and Spencer', 'Marks and Spencer', 'Marks and Spencer', 'published', 'false', '2023-01-12 10:11:27', '2023-01-12 10:11:27', NULL, NULL, NULL, 1, 1, 'https://fas.st/M4k2__', 'false'),
(633, 'FabIndia', 'uploads/stores/63bfdd11d549f.png', NULL, NULL, 'fabindia', 'FabIndia', 'FabIndia', 'FabIndia', 'published', 'false', '2023-01-12 10:12:33', '2023-01-12 10:12:33', NULL, NULL, NULL, 1, 1, 'https://fas.st/NWeTg2', 'false'),
(634, 'Open Secret', 'uploads/stores/63bfdd6fb06b5.png', NULL, NULL, 'open-secret', 'Open Secret', 'Open Secret', 'Open Secret', 'published', 'false', '2023-01-12 10:14:07', '2023-01-12 10:14:07', NULL, NULL, NULL, 1, 1, 'https://fas.st/XAGBF2', 'false'),
(635, 'Candere', 'uploads/stores/63bfdd959df58.png', NULL, NULL, 'candere63bfdd959e43d', 'Candere', 'Candere', 'Candere', 'published', 'false', '2023-01-12 10:14:45', '2023-01-12 10:14:45', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(636, 'Sanfe', 'uploads/stores/63bfdde52b8f1.png', NULL, NULL, 'sanfe', 'Sanfe', 'Sanfe', 'Sanfe', 'published', 'false', '2023-01-12 10:16:05', '2023-01-12 10:16:05', NULL, NULL, NULL, 1, 1, 'https://fas.st/OQO_kd', 'false'),
(637, 'Fast & Up', 'uploads/stores/63bfddf73523c.png', NULL, NULL, 'fast-up', 'Fast & Up', 'Fast & Up', 'Fast & Up', 'published', 'false', '2023-01-12 10:16:23', '2023-01-12 10:16:23', NULL, NULL, NULL, 1, 1, 'https://fas.st/hAFFk', 'false'),
(638, 'Manyavar', 'uploads/stores/63bfde2ca07a5.png', NULL, NULL, 'manyavar', 'Manyavar', 'Manyavar', 'Manyavar', 'published', 'false', '2023-01-12 10:17:16', '2023-01-12 10:17:16', NULL, NULL, NULL, 1, 1, 'https://fas.st/8R-Uv', 'false'),
(639, 'Jockey', 'uploads/stores/63bfde6583d15.png', NULL, NULL, 'jockey', 'Jockey', 'Jockey', 'Jockey', 'published', 'false', '2023-01-12 10:18:13', '2023-01-12 10:18:13', NULL, NULL, NULL, 1, 1, 'https://fas.st/MWhr3E', 'false'),
(640, 'Louis Philippe', 'uploads/stores/63bfde8dc0be9.png', NULL, NULL, 'louis-philippe', 'Louis Philippe', 'Louis Philippe', 'Louis Philippe', 'published', 'false', '2023-01-12 10:18:53', '2023-01-12 10:18:53', NULL, NULL, NULL, 1, 1, 'https://fas.st/aKOIs', 'false'),
(641, 'Swiss Beauty', 'uploads/stores/63bfdeb2bf9b7.png', NULL, NULL, 'swiss-beauty', 'Swiss Beauty', 'Swiss Beauty', 'Swiss Beauty', 'published', 'false', '2023-01-12 10:19:30', '2023-01-12 10:19:30', NULL, NULL, NULL, 1, 1, 'https://fas.st/cz6UWg', 'false'),
(642, 'Hamleys', 'uploads/stores/63bfdee31512d.png', NULL, NULL, 'hamleys', 'Hamleys', 'Hamleys', 'Hamleys', 'published', 'false', '2023-01-12 10:20:19', '2023-01-12 10:20:19', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/jbzrl0j6fwbbece050947d3087ff7d/?i=3', 'false'),
(643, 'Levis', 'uploads/stores/63c00bff97508.png', NULL, NULL, 'levis', 'Levis', 'Levis', 'Levis', 'published', 'false', '2023-01-12 13:32:47', '2023-01-12 13:32:47', NULL, NULL, NULL, 1, 1, 'https://fas.st/9MD-W', 'false'),
(644, 'Karagiri', 'uploads/stores/63c00c1e691f9.png', NULL, NULL, 'karagiri', 'Karagiri', 'Karagiri', 'Karagiri', 'published', 'false', '2023-01-12 13:33:18', '2023-01-12 13:33:18', NULL, NULL, NULL, 1, 1, 'https://fas.st/WUCIMZ', 'false'),
(645, 'Sublime Life', 'uploads/stores/63c00c42d8e4d.png', NULL, NULL, 'sublime-life', 'Sublime Life', 'Sublime Life', 'Sublime Life', 'published', 'false', '2023-01-12 13:33:54', '2023-01-12 13:33:54', NULL, NULL, NULL, 1, 1, 'https://fas.st/uwnMw', 'false'),
(646, 'Selected Homme', 'uploads/stores/63c00c5fde32a.png', NULL, NULL, 'selected-homme', 'Selected Homme', 'Selected Homme', 'Selected Homme', 'published', 'false', '2023-01-12 13:34:23', '2023-01-12 13:34:23', NULL, NULL, NULL, 1, 1, 'https://fas.st/BO6kv', 'false'),
(647, 'Urban Tribe', 'uploads/stores/63c00c74e2ffe.png', NULL, NULL, 'urban-tribe', 'Urban Tribe', 'Urban Tribe', 'Urban Tribe', 'published', 'false', '2023-01-12 13:34:44', '2023-01-12 13:34:44', NULL, NULL, NULL, 1, 1, 'https://fas.st/N5uuR', 'false'),
(648, 'Kimirica', 'uploads/stores/63c00c9459446.png', NULL, NULL, 'kimirica', 'Kimirica', 'Kimirica', 'Kimirica', 'published', 'false', '2023-01-12 13:35:16', '2023-01-12 13:35:16', NULL, NULL, NULL, 1, 1, 'https://fas.st/F0jN4', 'false'),
(649, 'Gas Jeans', 'uploads/stores/63c00cb01e4db.png', NULL, NULL, 'gas-jeans', 'Gas Jeans', 'Gas Jeans', 'Gas Jeans', 'published', 'false', '2023-01-12 13:35:44', '2023-01-12 13:35:44', NULL, NULL, NULL, 1, 1, 'https://fas.st/naSuL', 'false'),
(650, 'Miraggio', 'uploads/stores/63c00ccf968ad.png', NULL, NULL, 'miraggio', 'Miraggio', 'Miraggio', 'Miraggio', 'published', 'false', '2023-01-12 13:36:15', '2023-01-12 13:36:15', NULL, NULL, NULL, 1, 1, 'https://fas.st/O63h_n', 'false'),
(651, 'Selected Homme', 'uploads/stores/63c00d2ad2ffa.png', NULL, NULL, 'selected-homme63c00d2ad3628', 'Selected Homme', 'Selected Homme', 'Selected Homme', 'published', 'false', '2023-01-12 13:37:46', '2023-01-12 13:37:46', NULL, NULL, NULL, 1, 1, 'https://fas.st/BO6kv', 'false'),
(652, 'Peter England', 'uploads/stores/63c13a2bec8b7.png', NULL, NULL, 'peter-england', 'Peter England', 'Peter England', 'Peter England', 'published', 'false', '2023-01-13 11:02:03', '2023-01-13 11:02:03', NULL, NULL, NULL, 1, 1, 'https://fas.st/uD95M', 'false'),
(653, 'Himalaya Wellness', 'uploads/stores/63c13a40c369d.png', NULL, NULL, 'himalaya-wellness', 'Himalaya Wellness', 'Himalaya Wellness', 'Himalaya Wellness', 'published', 'false', '2023-01-13 11:02:24', '2023-01-13 11:02:24', NULL, NULL, NULL, 1, 1, 'https://fas.st/vMV-Xw', 'false'),
(654, 'Aqualens', 'uploads/stores/63c13a574ac5c.png', NULL, NULL, 'aqualens63c13a574b0b2', 'Aqualens', 'Aqualens', 'Aqualens', 'published', 'false', '2023-01-13 11:02:47', '2023-01-13 11:02:47', NULL, NULL, NULL, 1, 1, 'https://fas.st/L8033', 'false'),
(655, 'GlobalDesi', 'uploads/stores/63c13a7a1abc0.png', NULL, NULL, 'globaldesi', 'GlobalDesi', 'GlobalDesi', 'GlobalDesi', 'published', 'false', '2023-01-13 11:03:22', '2023-01-13 11:03:22', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/6fw72ygxjvbbece050944194155763/?i=3', 'false'),
(656, 'Campus Sutra', 'uploads/stores/63c13aa47c43e.png', NULL, NULL, 'campus-sutra', 'Campus Sutra', 'Campus Sutra', 'Campus Sutra', 'published', 'false', '2023-01-13 11:04:04', '2023-01-13 11:04:04', NULL, NULL, NULL, 1, 1, 'https://fas.st/g0CZc', 'false'),
(657, 'Break Bounce', 'uploads/stores/63c13abfb3c79.png', NULL, NULL, 'break-bounce63c13abfb4138', 'Break Bounce', 'Break Bounce', 'Break Bounce', 'published', 'false', '2023-01-13 11:04:31', '2023-01-13 11:04:31', NULL, NULL, NULL, 1, 1, 'https://fas.st/-lZgYx', 'false'),
(658, 'Innovist', 'uploads/stores/63c13adbbbf77.png', NULL, NULL, 'innovist', 'Innovist', 'Innovist', 'Innovist', 'published', 'false', '2023-01-13 11:04:59', '2023-01-13 11:04:59', NULL, NULL, NULL, 1, 1, 'https://fas.st/4k_wX', 'false'),
(659, 'Frangipani', 'uploads/stores/63c13aefb5497.png', NULL, NULL, 'frangipani', 'Frangipani', 'Frangipani', 'Frangipani', 'published', 'false', '2023-01-13 11:05:19', '2023-01-13 11:05:19', NULL, NULL, NULL, 1, 1, 'https://fas.st/zpJ1js', 'false'),
(660, 'Abhishti', 'uploads/stores/63c13b06263ef.png', NULL, NULL, 'abhishti', 'Abhishti', 'Abhishti', 'Abhishti', 'published', 'false', '2023-01-13 11:05:42', '2023-01-13 11:05:42', NULL, NULL, NULL, 1, 1, 'https://fas.st/Isxvo', 'false'),
(661, 'Puresense', 'uploads/stores/63c13b27044ec.png', NULL, NULL, 'puresense', 'Puresense', 'Puresense', 'Puresense', 'published', 'false', '2023-01-13 11:06:15', '2023-01-13 11:06:15', NULL, NULL, NULL, 1, 1, 'https://fas.st/00R_b', 'false'),
(662, 'Body Shop', 'uploads/stores/63c13b4d822d5.png', NULL, NULL, 'body-shop', 'Body Shop', 'Body Shop', 'Body Shop', 'published', 'false', '2023-01-13 11:06:53', '2023-01-13 11:06:53', NULL, NULL, NULL, 1, 1, 'https://fas.st/cH8xa', 'false'),
(663, 'The Label Life', 'uploads/stores/63c150248de8f.png', NULL, NULL, 'the-label-life', 'The Label Life', 'The Label Life', 'The Label Life', 'published', 'false', '2023-01-13 12:35:48', '2023-01-13 12:35:48', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/8rkuun365tbbece05094ea86f5e0f5/?i=3', 'false'),
(664, 'Ikkai', 'uploads/stores/63c15a83a4867.png', NULL, NULL, 'ikkai', 'Ikkai', 'Ikkai', 'Ikkai', 'published', 'false', '2023-01-13 13:20:03', '2023-01-13 13:20:03', NULL, NULL, NULL, 1, 1, 'https://fas.st/3jUxgx', 'false'),
(665, 'Edraw', 'uploads/stores/63c510c5015a1.png', NULL, NULL, 'edraw', 'Edraw', 'Edraw', 'Edraw', 'published', 'false', '2023-01-16 08:54:29', '2023-01-16 08:54:29', NULL, NULL, NULL, 1, 1, 'https://fas.st/mWVYW', 'false'),
(666, 'Flipkart', 'uploads/stores/63c510da60616.png', NULL, NULL, 'flipkart63c510da60aad', 'Flipkart', 'Flipkart', 'Flipkart', 'published', 'false', '2023-01-16 08:54:50', '2023-01-16 08:54:50', NULL, NULL, NULL, 1, 1, 'https://fas.st/L6xYM', 'false'),
(667, 'Onsitego', 'uploads/stores/63c510ee5a49d.png', NULL, NULL, 'onsitego', 'Onsitego', 'Onsitego', 'Onsitego', 'published', 'false', '2023-01-16 08:55:10', '2023-01-16 08:55:10', NULL, NULL, NULL, 1, 1, 'https://fas.st/bzzs9', 'false'),
(668, 'Trident Hotels', 'uploads/stores/63c5110154aa8.png', NULL, NULL, 'trident-hotels', 'Trident Hotels', 'Trident Hotels', 'Trident Hotels', 'published', 'false', '2023-01-16 08:55:29', '2023-01-16 08:55:29', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/70kwmnvb3abbece05094bb6e78f385/?subid=https%3A%2F%2Fwww.tridenthotels.com%2F', 'false'),
(670, 'Big Flex', 'uploads/stores/63c5117671bcd.png', NULL, NULL, 'big-flex63c5117672167', 'Big Flex', 'Big Flex', 'Big Flex', 'published', 'false', '2023-01-16 08:57:26', '2023-01-16 08:57:26', NULL, NULL, NULL, 1, 1, 'https://fas.st/GwRWc4', 'false'),
(671, 'Alaya by Stage 3', 'uploads/stores/63c511881cf99.png', NULL, NULL, 'alaya-by-stage-3', 'Alaya by Stage 3', 'Alaya by Stage 3', 'Alaya by Stage 3', 'published', 'false', '2023-01-16 08:57:44', '2023-01-16 08:57:44', NULL, NULL, NULL, 1, 1, 'https://fas.st/mENi3o', 'false'),
(672, 'Jaquline USA', 'uploads/stores/63c5119d0b858.png', NULL, NULL, 'jaquline-usa', 'Jaquline USA', 'Jaquline USA', 'Jaquline USA', 'published', 'false', '2023-01-16 08:58:05', '2023-01-16 08:58:05', NULL, NULL, NULL, 1, 1, 'https://fas.st/eu2GX', 'false'),
(673, 'KOPARO', 'uploads/stores/63c511c35ec7c.png', NULL, NULL, 'koparo', 'KOPARO', 'KOPARO', 'KOPARO', 'published', 'false', '2023-01-16 08:58:43', '2023-01-16 08:58:43', NULL, NULL, NULL, 1, 1, 'https://fas.st/byurr6', 'false'),
(674, 'Slurrp Farm', 'uploads/stores/63c5120d16397.png', NULL, NULL, 'slurrp-farm', 'Slurrp Farm', 'Slurrp Farm', 'Slurrp Farm', 'published', 'false', '2023-01-16 08:59:57', '2023-01-16 08:59:57', NULL, NULL, NULL, 1, 1, 'https://fas.st/oUkfJQ', 'false'),
(675, 'Lenskart', 'uploads/stores/63c6b78b28af6.png', NULL, NULL, 'lenskart', 'Lenskart', 'Lenskart', 'Lenskart', 'published', 'false', '2023-01-17 14:58:19', '2023-01-17 14:58:19', NULL, NULL, NULL, 1, 1, 'https://fas.st/wWQ7E', 'false'),
(676, 'Sesacare', 'uploads/stores/63c6b7b05ee47.png', NULL, NULL, 'sesacare', 'Sesacare', 'Sesacare', 'Sesacare', 'published', 'false', '2023-01-17 14:58:56', '2023-01-17 14:58:56', NULL, NULL, NULL, 1, 1, 'https://fas.st/iS8DS4', 'false'),
(677, 'GK PROFESSIONALS', 'uploads/stores/63c6b7c914672.png', NULL, NULL, 'gk-professionals', 'GK PROFESSIONALS', 'GK PROFESSIONALS', 'GK PROFESSIONALS', 'published', 'false', '2023-01-17 14:59:21', '2023-01-17 14:59:21', NULL, NULL, NULL, 1, 1, 'https://fas.st/bebeH', 'false'),
(678, 'Faces canada', 'uploads/stores/63c6b7e29530d.png', NULL, NULL, 'faces-canada', 'Faces canada', 'Faces canada', 'Faces canada', 'published', 'false', '2023-01-17 14:59:46', '2023-01-17 14:59:46', NULL, NULL, NULL, 1, 1, 'https://fas.st/Fr1i3', 'false'),
(679, 'Traya Health', 'uploads/stores/63c6b80d7738b.png', NULL, NULL, 'traya-health', 'Traya Health', 'Traya Health', 'Traya Health', 'published', 'false', '2023-01-17 15:00:29', '2023-01-17 15:00:29', NULL, NULL, NULL, 1, 1, 'https://fas.st/lwFxd', 'false'),
(680, 'WishCare', 'uploads/stores/63c7d898d0bfe.png', NULL, NULL, 'wishcare', 'WishCare', 'WishCare', 'WishCare', 'published', 'false', '2023-01-18 11:31:36', '2023-01-18 11:31:36', NULL, NULL, NULL, 1, 1, 'https://fas.st/Kd_nv', 'false'),
(681, 'Goibibo', 'uploads/stores/63c7d8af1f9db.png', NULL, NULL, 'goibibo', 'Goibibo', 'Goibibo', 'Goibibo', 'published', 'false', '2023-01-18 11:31:59', '2023-01-18 11:31:59', NULL, NULL, NULL, 1, 1, 'https://fas.st/L5CaT', 'false'),
(682, 'Nua', 'uploads/stores/63c7d8c83a59f.png', NULL, NULL, 'nua', 'Nua', 'Nua', 'Nua', 'published', 'false', '2023-01-18 11:32:24', '2023-01-18 11:32:24', NULL, NULL, NULL, 1, 1, 'https://fas.st/gWIsYR', 'false'),
(683, 'Pink foundry', 'uploads/stores/63c7d8dc3cfb6.png', NULL, NULL, 'pink-foundry', 'Pink foundry', 'Pink foundry', 'Pink foundry', 'published', 'false', '2023-01-18 11:32:44', '2023-01-18 11:32:44', NULL, NULL, NULL, 1, 1, 'https://fas.st/AuLkp', 'false'),
(684, 'Zigly', 'uploads/stores/63c8e2d81b986.png', NULL, NULL, 'zigly', 'Zigly', 'Zigly', 'Zigly', 'published', 'false', '2023-01-19 06:27:36', '2023-01-19 06:27:36', NULL, NULL, NULL, 1, 1, NULL, 'false'),
(685, 'Globalbees', 'uploads/stores/63c8f52271fad.png', NULL, NULL, 'globalbees', 'Globalbees', 'Globalbees', 'Globalbees', 'published', 'false', '2023-01-19 07:45:38', '2023-01-19 07:45:38', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/bu2hmkudntbbece05094d852b257b3/?i=3', 'false'),
(686, 'Realme', 'uploads/stores/63c8f5242d72d.png', NULL, NULL, 'realme', 'Realme', 'Realme', 'Realme', 'published', 'false', '2023-01-19 07:45:40', '2023-01-19 07:45:40', NULL, NULL, NULL, 1, 1, 'https://fas.st/u3cF9m', 'false'),
(687, 'Bold Care', 'uploads/stores/63c8f525c3730.png', NULL, NULL, 'bold-care', 'Bold Care', 'Bold Care', 'Bold Care', 'published', 'false', '2023-01-19 07:45:41', '2023-01-19 07:45:41', NULL, NULL, NULL, 1, 1, 'https://fas.st/FCuV1y', 'false'),
(688, 'Cosmic Byte', 'uploads/stores/63c8ff0f2d70f.png', NULL, NULL, 'cosmic-byte', 'Cosmic Byte', 'Cosmic Byte', 'Cosmic Byte', 'published', 'false', '2023-01-19 08:27:59', '2023-01-19 08:27:59', NULL, NULL, NULL, 1, 1, 'https://fas.st/e4WTp', 'false'),
(689, 'Suppliments Villa', 'uploads/stores/63c99f92e01df.png', NULL, '<p>Palwal k sher&nbsp;</p>', 'suppliments-villa', 'Suppliments Villa', 'Suppliments Villa', 'Suppliments Villa', 'published', 'true', '2023-01-19 19:52:50', '2023-01-19 19:52:50', NULL, NULL, NULL, 1, 9998, 'https://www.supplementsvilla.com/', 'true'),
(690, 'Hotels In manali', 'uploads/stores/63ca75e47c8ff.png', NULL, NULL, 'hotels-in-manali', 'Hotels In manali', 'Hotels In manali', 'Hotels In manali', 'published', 'false', '2023-01-20 11:07:16', '2023-01-20 11:07:16', NULL, NULL, NULL, 1, 9999, NULL, 'false'),
(691, 'ITC Store', 'uploads/stores/63cbca3e3af47.png', NULL, NULL, 'itc-store', 'ITC Store', 'ITC Store', 'ITC Store', 'published', 'false', '2023-01-21 11:19:26', '2023-01-21 11:19:26', NULL, NULL, NULL, 1, 1, 'https://fas.st/QUmEE', 'false'),
(692, 'Timex', 'uploads/stores/63cbca5520c47.png', NULL, NULL, 'timex', 'Timex', 'Timex', 'Timex', 'published', 'false', '2023-01-21 11:19:49', '2023-01-21 11:19:49', NULL, NULL, NULL, 1, 1, 'https://tracking.icubeswire.co/aff_c?offer_id=2750&aff_id=5939&curl=https%3A%2F%2Fshop.timexindia.com%2Fmen.html%3Futm_source%3DAffiliate%26utm_medium%3DCPS%26utm_campaign%3DLA11_{affiliate_id}_{aff_sub}', 'false'),
(693, 'Wakefit', 'uploads/stores/63cbca7cd0d1f.png', NULL, NULL, 'wakefit', 'Wakefit', 'Wakefit', 'Wakefit', 'published', 'false', '2023-01-21 11:20:28', '2023-01-21 11:20:28', NULL, NULL, NULL, 1, 1, 'https://fas.st/33J3wB', 'false'),
(694, 'Red Chief', 'uploads/stores/63cbcab205b9a.png', NULL, NULL, 'red-chief', 'Red Chief', 'Red Chief', 'Red Chief', 'published', 'false', '2023-01-21 11:21:22', '2023-01-21 11:21:22', NULL, NULL, NULL, 1, 1, 'https://tracking.icubeswire.co/aff_c?offer_id=482&aff_id=5939&curl=https%3A%2F%2Fwww.redchief.in%2Fredchiefb2c%2Ffootwear%3Fflag%3DsetFilters%26cts%3D217%26clg%3D10%26emt%3D%26level%3D0%26size%3D%26typ%3D%26ankl%3D%26closig%3D%26relevence%3D%26selDisc%3D%26selOffer%3D%26prcrng%3D%26color%3D%26sortFilter%3Ddiscount_sort%26countOfProduct%3D568%26utm_source%3Dicubes%26utm_medium%3Daffiliate_{affiliate_id}_{aff_sub}%26utm_campaign%3Ddeals_offers', 'false'),
(695, 'Zouk', 'uploads/stores/63ce854042819.png', NULL, NULL, 'zouk', 'Zouk', 'Zouk', 'Zouk', 'published', 'false', '2023-01-23 13:01:52', '2023-01-23 13:01:52', NULL, NULL, NULL, 1, 1, 'https://fas.st/mQQbx', 'false'),
(696, 'Giva', 'uploads/stores/63ce855565086.png', NULL, NULL, 'giva63ce855565a76', 'Giva', 'Giva', 'Giva', 'published', 'false', '2023-01-23 13:02:13', '2023-01-23 13:02:13', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/zu00bnhzlrbbece05094842dfa1e5f/?i=3', 'false'),
(697, 'Vission Express', 'uploads/stores/63ce856d2bdae.png', NULL, NULL, 'vission-express', 'Vission Express', 'Vission Express', 'Vission Express', 'published', 'false', '2023-01-23 13:02:37', '2023-01-23 13:02:37', NULL, NULL, NULL, 1, 1, 'https://fas.st/f8IZw', 'false'),
(698, 'Samsung', 'uploads/stores/63ce857d26862.png', NULL, NULL, 'samsung', 'Samsung', 'Samsung', 'Samsung', 'published', 'false', '2023-01-23 13:02:53', '2023-01-23 13:02:53', NULL, NULL, NULL, 1, 1, 'https://fas.st/qTGmx', 'false'),
(699, 'mCaffeine', 'uploads/stores/63ce85cc0bc9b.png', NULL, NULL, 'mcaffeine', 'mCaffeine', 'mCaffeine', 'mCaffeine', 'published', 'false', '2023-01-23 13:04:12', '2023-01-23 13:04:12', NULL, NULL, NULL, 1, 1, 'https://ad.admitad.com/g/vhi7abwks3bbece05094506919b225/?i=3', 'false'),
(700, 'The Souled Store', 'uploads/stores/63ce8805ca1d8.png', NULL, NULL, 'the-souled-store', 'The Souled Store', 'The Souled Store', 'The Souled Store', 'published', 'false', '2023-01-23 13:13:41', '2023-01-23 13:13:41', NULL, NULL, NULL, 1, 1, 'http://ad.admitad.com/g/dspd4k8l80bbece0509400d1cdf131/', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stay_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `image`, `email`, `mobile`, `profile`, `stay_date`, `score`, `property_id`, `created_at`, `updated_at`, `status`) VALUES
(5, 'Vijay Rastogi', 'Fantastic support & services. Been with DHS Upcloud for over 3 years and have already been recommended to many local companies. Created an easy-to-use virtual machine solution for me within few hours and provided me a cost-effective solution specifically designed to my needs.', 'uploads/testimonials/6475fb40a6c79.png', NULL, NULL, 'Developer', '2023-01-12', '5', '13', '2023-03-30 01:56:54', '2023-06-12 00:40:43', 'true'),
(6, 'RAJEEV GUPTA', 'DHS Upcloud has been a game changer in many ways for us. However, it still needs some improvements. But, overall, it was a good experience. Mr. Rajneesh did a fantastic job in resolving issues. Good work.', 'uploads/testimonials/6475fb36677df.png', 'vishaal@qmbsolution.in', NULL, 'Designer', '2023-01-12', '4', '13', '2023-03-30 01:56:55', '2023-06-12 00:43:27', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'it@qmbsolution.in', 'admin', NULL, '$2y$10$xRCRRD.NV5wBQ3CzhmuAA.8o.wZrQpYGYfdiDnVHiKt2fJ725d1wa', 'AO0JWQenSKsGQDNXe915KhaNVGFdGNxXTUe3Pb3vPpYgluDdzTImR2YyYIVk', '2022-06-08 14:49:05', '2023-03-06 07:13:03'),
(5, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$GFoI/1i9iQzTfIoE0EjtF.ApgO8weK1wcE9oZsfjduG4t2Mmu05HS', 'Z2Lx15z0lUB6GSI4R5djkl4WzeotfAVJkbABRqHknfBU6s0EGvR201np3S72', '2023-06-13 23:32:04', '2024-01-10 05:13:05'),
(6, 'Employee', 'employee@gmail.com', 'employee', NULL, '$2y$10$GFoI/1i9iQzTfIoE0EjtF.ApgO8weK1wcE9oZsfjduG4t2Mmu05HS', NULL, '2023-06-13 23:32:04', '2024-01-10 05:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_packages`
--

CREATE TABLE `welcome_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannerImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_packages`
--

INSERT INTO `welcome_packages` (`id`, `name`, `seo_url`, `longDescription`, `image`, `bannerImage`, `created_at`, `updated_at`, `location_id`) VALUES
(4, 'ISO 45001', NULL, 'We have an ISO certificate for an international standard for health and safety.', 'uploads/welcome_packages/64747ff4878d3.webp', NULL, '2023-05-26 00:38:12', '2023-05-30 07:24:40', NULL),
(5, 'BIS', NULL, 'We have an ISI certificate stating our item affirms the Indian Standard', 'uploads/welcome_packages/64772d35e71c9.webp', NULL, '2023-05-26 00:38:12', '2023-05-31 05:49:17', NULL),
(6, 'ISO 14001', NULL, 'We have an ISO certificate for an environmental management system.', 'uploads/welcome_packages/64747fc109443.webp', NULL, '2023-05-26 00:38:12', '2023-05-30 07:24:14', NULL),
(7, 'ISO 9001', NULL, 'We have an ISO certificate for quality management systems standards.', 'uploads/welcome_packages/64747fb6ec861.webp', NULL, '2023-05-26 00:38:12', '2023-05-30 07:24:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `weoffers`
--

CREATE TABLE `weoffers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weoffers`
--

INSERT INTO `weoffers` (`id`, `title`, `description`, `image`, `type`, `is_home`, `publish`, `ordering`, `created_at`, `updated_at`, `seo_url`) VALUES
(1, 'I am an employer', '<p>You don&rsquo;t want just any candidate, you want the right fit.</p>', 'uploads/deals/65afb58978034.png', '2', 'false', 'published', NULL, '2023-09-19 00:18:59', '2024-01-23 07:33:47', 'employer'),
(2, 'I am a candidate', '<p>You don&rsquo;t want just any job, you want the right fit. Find it here.</p>', 'uploads/deals/65afb5c834681.png', '2', 'false', 'published', NULL, '2023-09-19 00:36:51', '2024-01-23 07:33:30', 'candidate'),
(3, 'I am a member of the press', '<p>See what is happening at Jobster.</p>', 'uploads/deals/65afb5bc9eea8.png', '2', 'false', 'published', NULL, '2024-01-23 07:19:00', '2024-01-23 07:33:37', 'member'),
(4, '24/7 Support', '<p>Many desktop publishing now use and a search for job</p>', NULL, '50', 'false', 'published', NULL, '2024-01-30 00:25:11', '2024-01-30 00:25:11', 'support'),
(5, '24/7 support', '<p>Many desktop publishing now use and a search for job</p>', NULL, '50', 'false', 'published', NULL, '2024-01-30 00:25:50', '2024-01-30 00:25:50', 'support1'),
(6, '27/7 support', '<p>Many desktop publishing now use and a search for job</p>', NULL, '50', 'false', 'published', NULL, '2024-01-30 00:26:57', '2024-01-30 00:26:57', 'support2'),
(7, '24/7 Support', '<p>Many desktop publishing now use and a search for job</p>', NULL, '50', 'false', 'published', NULL, '2024-01-30 00:27:27', '2024-01-30 00:27:27', 'support3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_settings`
--
ALTER TABLE `basic_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_requests`
--
ALTER TABLE `booking_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_categories`
--
ALTER TABLE `career_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_enquiry`
--
ALTER TABLE `career_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus_requests`
--
ALTER TABLE `contactus_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templetes`
--
ALTER TABLE `email_templetes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ical_events`
--
ALTER TABLE `ical_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ical_import_list`
--
ALTER TABLE `ical_import_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `product_enquiry_now_requests`
--
ALTER TABLE `product_enquiry_now_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_rates_group`
--
ALTER TABLE `properties_rates_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_amenities`
--
ALTER TABLE `property_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_amenity_groups`
--
ALTER TABLE `property_amenity_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_fees`
--
ALTER TABLE `property_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_galleries`
--
ALTER TABLE `property_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_rates`
--
ALTER TABLE `property_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_rooms`
--
ALTER TABLE `property_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_room_items`
--
ALTER TABLE `property_room_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_spaces`
--
ALTER TABLE `property_spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `welcome_packages`
--
ALTER TABLE `welcome_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weoffers`
--
ALTER TABLE `weoffers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_url` (`seo_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_settings`
--
ALTER TABLE `basic_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_requests`
--
ALTER TABLE `booking_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career_categories`
--
ALTER TABLE `career_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `career_enquiry`
--
ALTER TABLE `career_enquiry`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus_requests`
--
ALTER TABLE `contactus_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `email_templetes`
--
ALTER TABLE `email_templetes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ical_events`
--
ALTER TABLE `ical_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ical_import_list`
--
ALTER TABLE `ical_import_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `weoffers`
--
ALTER TABLE `weoffers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
