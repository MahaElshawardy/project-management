-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 12:18 AM
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
-- Database: `project_management`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dascription` varchar(255) NOT NULL,
  `statue` enum('On-Progress','Done') NOT NULL DEFAULT 'On-Progress',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `result` varchar(255) DEFAULT NULL,
  `assigner_id` bigint(20) NOT NULL,
  `task_parent_id` bigint(20) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `assigner_to_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `dascription`, `statue`, `start_date`, `end_date`, `result`, `assigner_id`, `task_parent_id`, `create_at`, `update_at`, `assigner_to_id`) VALUES
(1, 'Create unique style of inner pages', 'The table valued subquery MUST have alias (see below). It does not matter that you would not use it. Slightly offtopic, but you are using full join, in your post you are talking about outer join, and it somehow feels you actually need inner join. SELECT *', 'On-Progress', '2022-08-27', '2022-09-16', '', 3, NULL, '2022-08-27 17:24:33', '2022-08-27 17:24:33', NULL),
(2, 'Create unique style of inner pages', 'The table valued subquery MUST have alias (see below). It does not matter that you would not use it. Slightly offtopic, but you are using full join, in your post you are talking about outer join, and it somehow feels you actually need inner join. SELECT *', 'On-Progress', '2022-08-27', '2022-09-16', '', 3, 1, '2022-08-29 08:17:30', '2022-08-29 08:17:30', 4),
(3, 'desing', 'The table valued subquery MUST have alias (see bel...\r\n', 'Done', '2022-08-27', '2022-09-16', '', 5, 1, '2022-08-29 09:37:57', '2022-08-29 09:37:57', 4),
(4, 'make document', '1 : a written or printed paper that gives information about or proof of something Your birth certificate is a legal document. ... 1 : to record (as on paper', 'On-Progress', '2022-08-27', '2022-09-16', '', 3, NULL, '2022-08-29 09:34:21', '2022-08-29 09:34:21', NULL),
(6, 'The Inauguration of Adly Mansour Central Interchange Station', 'The station is built on an area of 30 feddans. The service at the station exchanges between five different means of transport: the Light Rail Transit (LRT), the Third Metro Line,  Cairo/Suez Railway line, the Superjet Station (Regional Buses)', 'On-Progress', '2022-09-02', '2022-09-10', '', 3, NULL, '2022-08-29 09:16:41', '2022-08-29 09:16:41', NULL),
(7, 'laravel projecct', 'If you need to persist your flash data for several requests,', 'Done', '2022-08-29', '2022-08-31', 'dsfuhudshfufhsi', 3, 4, '2022-08-29 15:52:27', '2022-08-29 15:52:27', 8),
(8, 'dskaKFNJDUSH', 'DSFHUHHDFAJJASDSADS', 'On-Progress', '2022-10-10', '2022-10-28', NULL, 3, 4, '2022-08-29 16:39:14', '2022-08-29 16:39:14', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` enum('Supervisor','Employee') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supervisor_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `position`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `supervisor_id`) VALUES
(3, 'maha mohamed', 'melshawardy@gmail.com', 'Supervisor', '01066655142', '2022-08-26 20:21:50', '$2y$10$emn/8Ks9MzHz4TifPHef0Oy.53sbbh0bhFP6ZW3CiCfr7dWipYVHG', NULL, '2022-08-26 20:20:08', '2022-08-26 20:21:50', NULL),
(4, 'Eman mohamed', 'emmohamed902@gmail.com', 'Employee', '01003322123', NULL, '12341234', NULL, NULL, NULL, 3),
(5, 'maher mohamed', 'maher@gmail.com', 'Employee', '01003352123', NULL, '12341234', NULL, NULL, NULL, 4),
(7, 'Ahmed Elshawardy', 'ahmedelshawardy213@gmail.com', 'Employee', '01066655145', NULL, '12341234', NULL, NULL, NULL, 3),
(8, 'twin labs', 'twinlabs2@gmail.com', 'Employee', '01066655146', '2022-08-29 10:40:39', '$2y$10$2eGq1QgB8kj8L7z1F/qzxeg7RRl4cZOCXhQAndONlbnVgTINJuNAK', '1aVF3FzsDJslIFGjVTedAqAUPpo0Z2pvlyA7mBPIf6nSrdm0TEuMuB9MCVHZ', NULL, '2022-08-29 10:40:39', 3);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_fk1` (`assigner_id`),
  ADD KEY `task_fk3` (`task_parent_id`),
  ADD KEY `assigner_to_id` (`assigner_to_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `supervisor_id` (`supervisor_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `task_fk1` FOREIGN KEY (`assigner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_fk2` FOREIGN KEY (`assigner_to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `task_fk3` FOREIGN KEY (`task_parent_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `User_fk` FOREIGN KEY (`supervisor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
