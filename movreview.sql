-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movreview`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_resets_table', 1),
(29, '2019_08_19_000000_create_failed_jobs_table', 1),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(31, '2022_09_30_152156_create_origins_table', 1),
(32, '2022_10_24_134605_create_movies_table', 1),
(33, '2023_01_13_153110_create_user_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `originId` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `originId`, `genre`, `mname`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 'Thriller', 'Seven', 'September 22, 1995', '1692629629.jpg', '2023-08-21 08:49:38', '2023-08-21 08:53:49'),
(2, 1, 'Drama', 'Oppenheimer', 'July 21, 2023', '1692631287.jpeg', '2023-08-21 09:21:27', '2023-08-21 09:21:27'),
(3, 1, 'Romance', 'Barbie', 'July 21, 2023', '1692631513.jpg', '2023-08-21 09:25:13', '2023-08-21 09:25:13'),
(4, 1, 'Comedy', 'The Wolf of Wall Street', 'December 25, 2013', '1692631744.jpg', '2023-08-21 09:29:04', '2023-08-21 09:29:04'),
(5, 1, 'Science Fiction', 'Dune', 'October 22, 2021', '1692631873.jpg', '2023-08-21 09:31:14', '2023-08-21 09:31:14'),
(6, 1, 'Thriller', 'Top Gun: Maverick', 'May 27, 2022', '1692633725.jpg', '2023-08-21 10:02:06', '2023-08-21 10:02:06'),
(7, 1, 'Action', 'The Batman', 'March 4, 2022', '1692633816.jpg', '2023-08-21 10:03:37', '2023-08-21 10:03:37'),
(8, 1, 'Science Fiction', 'Coherence', 'February 13, 2015', '1692634015.jpg', '2023-08-21 10:06:55', '2023-08-21 10:06:55'),
(9, 2, 'Action', 'Pathaan', 'January 25, 2023', '1692634140.jpg', '2023-08-21 10:09:00', '2023-08-21 10:09:00'),
(10, 2, 'Action', 'RRR', 'March 24, 2022', '1692634268.jpg', '2023-08-21 10:11:08', '2023-08-21 10:11:08'),
(11, 2, 'Drama', 'Hindi Medium', 'May 19, 2017', '1692634377.jpg', '2023-08-21 10:12:58', '2023-08-21 10:12:58'),
(12, 2, 'Comedy', '3 Idiots', 'December 25, 2009', '1692634473.jpg', '2023-08-21 10:14:35', '2023-08-21 10:14:35'),
(13, 2, 'Romance', 'Sultan', 'July 6, 2016', '1692634539.jpg', '2023-08-21 10:15:39', '2023-08-21 10:15:39'),
(14, 2, 'Action', 'Dangal', 'December 23, 2016', '1692634616.jpg', '2023-08-21 10:16:56', '2023-08-21 10:16:56'),
(15, 2, 'Comedy', 'PK', 'December 19, 2014', '1692634723.jpg', '2023-08-21 10:18:43', '2023-08-21 10:18:43'),
(16, 2, 'Romance', 'Jab We Met', 'October 26, 2007', '1692634820.jpg', '2023-08-21 10:20:20', '2023-08-21 10:20:20'),
(17, 3, 'Action', 'Dhaka Attack', 'October 6, 2017', '1692634940.jpg', '2023-08-21 10:22:20', '2023-08-21 10:22:20'),
(18, 3, 'Thriller', 'Surongo', 'June 29, 2023', '1692635359.jpg', '2023-08-21 10:29:20', '2023-08-21 10:29:20'),
(19, 3, 'Thriller', 'Hawa', 'July 29, 2022', '1692635434.jpg', '2023-08-21 10:30:34', '2023-08-21 10:30:34'),
(20, 3, 'Thriller', 'Aynabaji', 'September 30, 2016', '1692635587.jpg', '2023-08-21 10:33:07', '2023-08-21 10:33:07'),
(21, 3, 'Horror', 'Debi', 'October 19, 2018', '1692635682.jpg', '2023-08-21 10:34:42', '2023-08-21 10:34:42'),
(22, 3, 'Romance', 'Monpura', 'February 13, 2009', '1692635847.jpg', '2023-08-21 10:37:27', '2023-08-21 10:37:27'),
(23, 3, 'Drama', 'Daruchini Dwip', 'August 31, 2007', '1692635985.jpg', '2023-08-21 10:39:45', '2023-08-21 10:39:45'),
(24, 3, 'Comedy', 'Television', 'January 25, 2013', '1692636103.jpg', '2023-08-21 10:41:43', '2023-08-21 10:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `origins`
--

CREATE TABLE `origins` (
  `id` int(10) UNSIGNED NOT NULL,
  `oname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `origins`
--

INSERT INTO `origins` (`id`, `oname`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ENGLISH', 'All English movies will be under this origin', '2023-08-21 08:46:34', '2023-08-21 08:46:34'),
(2, 'HINDI', 'All Hindi movies will be under this origin', '2023-08-21 08:47:37', '2023-08-21 08:47:37'),
(3, 'BANGLA', 'All Bangla movies will be under this origin', '2023-08-21 08:48:57', '2023-08-21 08:48:57');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nayem', 'nayem@gmail.com', NULL, '1', '$2y$10$2wrGsqVvuK699eN.L5uJdu2OPuUmwuaAnn45s4kn2hPJhuO5lDB4S', NULL, '2023-08-21 01:35:16', '2023-08-21 01:35:16'),
(2, 'Nayeem', 'nayem2@gmail.com', NULL, '2', '$2y$10$PLenhfYHLmNQnstQqSoyluqNN.LuJXNJTHtZk9mcaMkDw42lL.1XC', NULL, '2023-08-21 10:53:38', '2023-08-21 10:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movieId` int(11) NOT NULL,
  `textReview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `userName`, `movieId`, `textReview`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Nayem', 9, 'Good', '7.00', '2023-08-21 10:09:32', '2023-08-21 10:09:32'),
(2, 'Nayeem', 9, 'vg', '8.00', '2023-08-21 10:54:16', '2023-08-21 10:54:16');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `origins`
--
ALTER TABLE `origins`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `origins`
--
ALTER TABLE `origins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
