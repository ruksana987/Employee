-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 01:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaless`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_month` date NOT NULL,
  `time_hr` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_name`, `user_id`, `email`, `date_month`, `time_hr`, `created_at`, `updated_at`) VALUES
(1, 'Nirjar Maharjan', 1, 'nirjar9818@gmail.com', '2020-03-14', 8.00, NULL, NULL),
(2, 'Nirjar Maharjan', 1, 'nirjar9818@gmail.com', '2020-03-15', 8.00, NULL, NULL),
(3, 'Nirjar Maharjan', 1, 'nirjar9818@gmail.com', '2020-03-17', 8.00, NULL, NULL),
(5, 'Ruksana Maharjan', 3, 'ruksana139@gmail.com', '2020-03-17', 8.00, NULL, NULL),
(6, 'nirjar', 1, 'nirjar9818@gmail.com', '2020-04-17', 8.00, NULL, NULL),
(7, 'ruksana', 3, 'ruksana139@gmail.com', '2020-04-17', 8.00, NULL, NULL),
(8, 'ruksana', 3, 'ruksana139@gmail.com', '2020-03-20', 8.00, NULL, NULL),
(9, 'nirjar', 1, 'nirjar9818@gmail.com', '2020-03-21', 8.00, NULL, NULL),
(10, 'ruksana', 3, 'ruksana139@gmail.com', '2020-03-21', 8.00, NULL, NULL),
(11, 'Priyanka Maharjan', 4, 'Priyanka@gmail.com', '2020-03-21', 8.00, NULL, NULL),
(12, 'nirjar', 1, 'nirjar9818@gmail.com', '2020-03-22', 8.00, NULL, NULL),
(13, 'ruksana', 3, 'ruksana139@gmail.com', '2020-03-22', 8.00, NULL, NULL),
(14, 'nirjar', 1, 'nirjar9818@gmail.com', '2020-03-24', 8.00, NULL, NULL),
(15, 'Ruksana Maharjan', 5, 'ruksanamhrz@gmail.com', '2020-03-24', 8.00, NULL, NULL),
(16, 'Nirjar Maharjan', 7, 'nirjjjar12@gmail.com', '2020-03-24', 8.00, NULL, NULL),
(17, 'Ruksana Maharjan', 5, 'ruksanamhrz@gmail.com', '2020-03-25', 8.00, NULL, NULL),
(18, 'Nirjar Maharjan', 7, 'nirjjjar12@gmail.com', '2020-03-25', 8.00, NULL, NULL),
(19, 'nirjar', 1, 'nirjar9818@gmail.com', '2020-03-26', 8.00, NULL, NULL),
(20, 'Nirjar Maharjan', 7, 'nirjjjar12@gmail.com', '2020-03-26', 8.00, NULL, NULL),
(21, 'Ruksana Maharjan', 5, 'ruksanamhrz@gmail.com', '2020-03-26', 8.00, NULL, NULL),
(22, 'Ruksana Maharjan', 5, 'ruksanamhrz@gmail.com', '2020-03-27', 8.00, NULL, NULL),
(23, 'Reety Maharjan', 8, 'reety123@gmail.com', '2020-03-27', 8.00, NULL, NULL),
(24, 'Ruksana Maharjan', 5, 'ruksanamhrz@gmail.com', '2020-12-02', 8.00, NULL, NULL),
(25, 'Ruksana Maharjan', 9, 'admin123@gmail.com', '2020-12-02', 8.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Agra', '2020-04-17 03:17:29', '2020-04-17 03:17:29', NULL),
(2, 2, 'Kathmandu', '2020-04-17 03:18:47', '2020-04-17 03:18:47', NULL),
(3, 1, 'Delhi', '2020-03-17 11:23:21', '2020-03-17 11:23:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '4', 'India', '2020-04-17 02:46:33', '2020-04-17 02:46:33', NULL),
(3, '5', 'Nepal', '2020-04-17 03:15:50', '2020-04-17 03:15:50', NULL),
(4, '6', 'Japan', '2020-03-17 11:22:45', '2020-03-17 11:22:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'marketing department', '2020-04-17 03:14:47', '2020-03-21 11:09:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Manager', '2020-04-17 03:15:11', '2020-03-21 11:12:38', NULL),
(3, 'Board of director', '2020-04-17 03:15:37', '2020-04-17 03:15:37', NULL),
(4, 'CEO', '2020-03-17 11:22:20', '2020-03-17 11:22:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `date_hired` date NOT NULL DEFAULT '2020-03-14',
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `picture` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `name`, `email`, `city_id`, `state_id`, `country_id`, `zip`, `age`, `birthdate`, `date_hired`, `department_id`, `division_id`, `picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 3, 'ruksana', 'ruksana139@gmail.com', 1, 1, 2, '44600', 23, '2019-12-30', '2020-03-14', 2, 2, 'avatars/JN8fVveIVwuiIb0gX6NeKV6joM4bbsGUhT22BeGq.png', '2020-03-17 01:07:23', '2020-03-22 09:43:41', NULL),
(5, 5, 'Ruksana Maharjan', 'ruksanamhrz@gmail.com', 1, 1, 3, '44600', 20, '2020-03-12', '2020-03-14', 2, 2, NULL, '2020-03-24 06:54:19', '2020-03-26 22:04:18', NULL),
(6, 6, 'Nirjar Maharjan', 'nirjar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-14', NULL, NULL, NULL, '2020-03-24 06:58:17', '2020-03-24 06:58:17', NULL),
(7, 7, 'Nirjar Maharjan', 'nirjjjar12@gmail.com', 1, 1, 2, '44600', 23, '2020-03-01', '2020-03-14', 2, 2, 'avatars/5NKwNDdPLV8cZxH6i1ZjVK7e3CC64hbe9XFs5g6F.jpeg', '2020-03-24 06:59:10', '2020-03-24 07:21:41', NULL),
(8, 8, 'Reety Maharjan', 'reety123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-14', NULL, NULL, NULL, '2020-03-26 22:07:07', '2020-03-26 22:07:07', NULL),
(9, 9, 'Ruksana Maharjan', 'admin123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-14', NULL, NULL, NULL, '2020-12-02 06:21:52', '2020-12-02 06:21:52', NULL),
(10, 10, 'Ruksana Maharjan', 'ruksanamaharjan123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-14', NULL, NULL, NULL, '2020-12-02 06:25:08', '2020-12-02 06:25:08', NULL);

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
(85, '2014_10_12_000000_create_users_table', 1),
(86, '2014_10_12_100000_create_password_resets_table', 1),
(87, '2017_02_18_003431_create_department_table', 1),
(88, '2017_02_18_004142_create_division_table', 1),
(89, '2017_02_18_004326_create_country_table', 1),
(90, '2017_02_18_005005_create_state_table', 1),
(91, '2017_02_18_005241_create_city_table', 1),
(92, '2017_03_17_163141_create_employees_table', 1),
(93, '2020_03_04_044717_create_payments_table', 1),
(94, '2020_03_04_044744_create_attendances_table', 1),
(95, '2020_03_14_175114_create_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'February-2020',
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_per_hour` int(11) NOT NULL DEFAULT 150,
  `gross_salary` double(8,2) DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `company_deducations` double(8,2) DEFAULT NULL,
  `net_salary` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Uttar Pradesh', '2020-04-17 03:16:27', '2020-04-17 03:16:27', NULL),
(2, 3, 'Providence 3', '2020-04-17 03:16:58', '2020-04-17 03:16:58', NULL),
(3, 2, 'Utta', '2020-03-17 11:23:07', '2020-03-17 11:23:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nirjar', 'nirjar9818@gmail.com', NULL, '$2y$10$ltswbeVKQF5/CTu56wQ9deCIFvb/GbaSnU3sGDf21KWgE4Yp0Q/Xm', 1, NULL, '2020-03-14 13:29:52', '2020-03-14 13:29:52'),
(3, 'ruksana', 'ruksana139@gmail.com', NULL, '$2y$10$43Asy/1IGkFXJ4l3auB/.OEIMYMRtvu1k49UH/xEBcuTawNxUF21K', 1, 'ClkOotYXojOn8enSksEM4Y3nuCGc9OcEO3aF1ByHGnpmq7X2XSfjLrcYDsCX', '2020-03-17 01:07:23', '2020-03-17 01:07:23'),
(4, 'Priyanka Maharjan', 'Priyanka@gmail.com', NULL, '$2y$10$DVXp6SQnONsEYn.wKbVpM.AmP4/QVMdO7sVmjnktubmflETK1aMra', 0, NULL, '2020-03-21 12:26:07', '2020-03-21 12:26:07'),
(5, 'Ruksana Maharjan', 'ruksanamhrz@gmail.com', NULL, '$2y$10$buzFp.2CFM4.a8ovtnSPge6jNeIO7Prrkxc7S.SxPtj8mQ44TUcoq', 1, NULL, '2020-03-24 06:54:19', '2020-03-24 06:54:19'),
(6, 'Nirjar Maharjan', 'nirjar@gmail.com', NULL, '$2y$10$XNjR8eZ8msnd7RsgngMA2.MXjAsJ/JofoSFS9W9vtSGUEjmmldFNi', 0, NULL, '2020-03-24 06:58:17', '2020-03-24 06:58:17'),
(7, 'Nirjar Maharjan', 'nirjjjar12@gmail.com', NULL, '$2y$10$6/CSqBiYDG3cor6d8Ucj1uort1tPnpGzdiNh6Fj/v3OuAT/DfqBRa', 0, NULL, '2020-03-24 06:59:10', '2020-03-24 06:59:10'),
(8, 'Reety Maharjan', 'reety123@gmail.com', NULL, '$2y$10$1E.FTL7OTeT08SgGSJ0ZZeSY9Z9iCKqOSEgNTHvqUiT.iDxpHyRV6', 0, NULL, '2020-03-26 22:07:07', '2020-03-26 22:07:07'),
(9, 'Ruksana Maharjan', 'admin123@gmail.com', NULL, '$2y$10$GGo.9ElA9tmoMK9KtoWv8.WyBmS9Vks7vR.kSdNaruD30yV9XCXW.', 1, NULL, '2020-12-02 06:21:52', '2020-12-02 06:21:52'),
(10, 'Ruksana Maharjan', 'ruksanamaharjan123@gmail.com', NULL, '$2y$10$oZj6ZXL/XYBstU9VL6xaIOBA.GP8i.KKaaOV2BjiQBfGOTAtMPZ4e', 0, NULL, '2020-12-02 06:25:08', '2020-12-02 06:25:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_user_id_foreign` (`user_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_state_id_foreign` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`),
  ADD KEY `employees_city_id_foreign` (`city_id`),
  ADD KEY `employees_state_id_foreign` (`state_id`),
  ADD KEY `employees_country_id_foreign` (`country_id`),
  ADD KEY `employees_department_id_foreign` (`department_id`),
  ADD KEY `employees_division_id_foreign` (`division_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_country_id_foreign` (`country_id`);

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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
