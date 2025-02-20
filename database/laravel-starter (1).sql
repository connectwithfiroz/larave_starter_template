-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 04:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-starter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password_hint` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `name`, `email`, `email_verified_at`, `password_hint`, `password`, `phone`, `image`, `address`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', NULL, '1-8', '$2y$12$pxDqjCheo/fQ56hYpf4.c.icl8pLmml9KflsJfO2BgyMofLvWXJXu', '9712345678', 'logo.png', 'SOme', NULL, '2025-02-05 10:55:16', '2025-02-05 22:38:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Banner 3', 'banner-21738774985', 'banner1738775851.jpg', 'Active', '2025-02-05 11:33:05', '2025-02-05 11:47:31', NULL),
(5, 'banner3', 'banner31738775303', 'banner1738775874.jpg', 'Active', '2025-02-05 11:38:23', '2025-02-05 11:47:54', NULL),
(6, 'Banner 4', 'banner-41738776024', 'beautiful-landscape-mother-nature.jpg', 'Active', '2025-02-05 11:50:24', '2025-02-05 11:50:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donation_for` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `razorpay_order_id` varchar(255) DEFAULT NULL,
  `razorpay_signature` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pan_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `donation_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `donation_for`, `message`, `name`, `email`, `mobile_number`, `amount`, `razorpay_payment_id`, `razorpay_order_id`, `razorpay_signature`, `status`, `address`, `pan_no`, `bank_name`, `branch_name`, `donation_id`, `created_at`, `updated_at`) VALUES
(19, '1', NULL, 'Firoz', 'contacttofiroz@gmail.com', '8789701916', '201.00', NULL, 'order_PtEr9chJy3CYiM', NULL, 'Pending', NULL, NULL, NULL, NULL, '123', '2025-02-08 08:19:51', '2025-02-08 08:19:51'),
(20, 'Food', NULL, 'Firoz', 'contacttofiroz@gmail.com', '8789701916', '201.00', 'pay_PtEvmic6WzMPzU', 'order_PtEvdpsMvp7gBv', 'fc3f5a353a63ccf1c6fc2da6cb9c2c9ac41f7541da26fb77bf443628a9ae7c2f', 'Success', NULL, NULL, NULL, NULL, '', '2025-02-08 08:24:06', '2025-02-08 08:24:30'),
(21, 'Youth Empowerment', NULL, 'Firoz', 'contacttofiroz@gmail.com', '8789701916', '100.00', 'pay_PtUpCLUWIGnrYs', 'order_PtUov6cSUFBJMA', '4e0b555022072c2914e4ab80fa48cc1e7097e90b3ca4caece7caee7597493cdd', 'Success', NULL, NULL, NULL, NULL, '', '2025-02-08 23:56:50', '2025-02-08 23:57:21'),
(22, 'Not Selected', NULL, 'Firoz', 'firoz@gmail.com', '8789701916', '1000.00', NULL, 'order_PtVJlizSi3VDPM', NULL, 'Pending', NULL, NULL, NULL, NULL, '', '2025-02-09 00:26:01', '2025-02-09 00:26:01'),
(23, 'Not Selected', NULL, 'Firoz', 'firoz@gmail.com', '8789701916', '1000.00', NULL, 'order_PtVKEqWrVFaI1I', NULL, 'Pending', NULL, NULL, NULL, NULL, '', '2025-02-09 00:26:28', '2025-02-09 00:26:28'),
(24, 'Not Selected', NULL, 'Firoz', 'firoz@gmail.com', '8789701916', '1000.00', NULL, 'order_PtVL6aM8RpOSOk', NULL, 'Pending', NULL, NULL, NULL, NULL, '', '2025-02-09 00:27:17', '2025-02-09 00:27:17'),
(25, 'Not Selected', NULL, 'Firoz', 'firoz@gmail.com', '8789701916', '1000.00', NULL, 'order_PtVLtn61dHNAr7', NULL, 'Pending', NULL, NULL, NULL, NULL, '', '2025-02-09 00:28:02', '2025-02-09 00:28:02'),
(26, 'Not Selected', NULL, 'Shahbaz', 'shahbaz@gmail.com', '8789701911', '180.00', 'pay_PtW1pePtcuz41X', 'order_PtW1jDyzWds9nw', 'b4f39fed8ef0f5e0bd3354642c3d0215127d02bf6ac41333fe2b54ccd9d9a9bc', 'Success', NULL, NULL, NULL, NULL, '', '2025-02-09 01:07:38', '2025-02-09 01:08:00'),
(27, 'Bed x 1 = Rs. 500, Bedsheets, Pillow & Mattress x 1 = Rs. 1000', NULL, 'Afzal', 'afzal@gmail.com', '8789701916', '1500.00', 'pay_Ptb3fLVAKgdt1I', 'order_Ptb3WbxaXqk5Gu', '46814209ec68b0267f417649f2e7df26b6f51fe0c65634d261ff591d73e678f3', 'Success', NULL, NULL, NULL, NULL, '', '2025-02-09 06:02:49', '2025-02-09 06:03:11'),
(28, 'Youth Empowerment', NULL, 'Firoz', 'contacttofiroz@gmail.com', '8789701916', '20.00', NULL, 'order_PxF2EwP8zaLnZr', NULL, 'Pending', NULL, NULL, NULL, NULL, 'DON-53821739896581', '2025-02-18 11:06:21', '2025-02-18 11:06:21'),
(29, 'Youth Empowerment', NULL, 'Firoz', 'contact@gmail.com', '8789701916', '100.00', 'pay_PxF9X17wGnr4qb', 'order_PxF9MWWqjacTzf', '3294a7e6b2fe1c0544b7db73e4e1354459f3f59aefb7e1d5aee294978d48f7f9', 'Success', NULL, NULL, NULL, NULL, 'DON-28271739896985', '2025-02-18 11:13:05', '2025-02-18 11:13:31');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'What motivates you to donate to our charity?', 'Explore the variety of volunteer opportunities available. From event planning and fundraising to fieldwork and administrative support, there are many ways to lend your talents. Find the perfect fit for your skills and interests.', 'Active', '2025-02-09 00:53:54', '2025-02-09 00:53:54', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_032609_create_admins_table', 2),
(6, '2022_10_27_091454_create_banners_table', 3),
(7, '2022_10_27_112305_create_faqs_table', 3),
(8, '2022_10_28_060300_create_testimonials_table', 3),
(9, '2022_11_03_091341_create_blogs_table', 3),
(11, '2025_02_07_152514_create_donations_table', 4),
(13, '2025_02_08_162635_create_news_table', 5),
(15, '2025_02_09_084543_create_products_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `thumbnail`, `youtube_url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'test', '1739077385-full-shot-family-running-meadow.jpg', 'https://www.youtube.com/watch?v=JgKJj2iDEHM&t=38s', 'description update', '2025-02-08 12:19:25', '2025-02-08 23:33:05');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bedsheets, Pillow & Mattress', '1739094070-bedsheet.jpg', 1000, 'Active', '2025-02-09 03:40:13', '2025-02-09 04:11:10'),
(2, 'Bed', 'product_img_1739094015-homeless-shelter.jpg', 500, 'Active', '2025-02-09 04:10:15', '2025-02-09 04:15:06'),
(3, 'Cupboard', 'product_img_1739100092-cupboard.jpg', 3500, 'Active', '2025-02-09 05:51:33', '2025-02-09 05:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `slug`, `image`, `content`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Firoz updated', 'firoz1738776717', '1738776931-beautiful-landscape-mother-nature.jpg', '<p>testing <strong>bold</strong></p>', 'Active', '2025-02-05 12:01:57', '2025-02-05 12:05:31', NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Firoz', 'admin@gmail.com', NULL, '$2y$12$qpyGMNH2AimP9mguGJyZg.lLaiTqPLepKkJVAIUaxHWRZWPWqudYa', NULL, '2025-02-05 08:16:58', '2025-02-05 08:16:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
