-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 24, 2021 at 05:39 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `unilevel_mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `bonus_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_balance` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount` decimal(11,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci,
  `reference_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`bonus_id`, `user_id`, `user_balance`, `amount`, `type`, `model`, `reference_id`, `created_at`, `updated_at`) VALUES
(82, 16, '100.00', '100.00', 'sponsor', '', 52, '2021-07-03 00:14:03', '2021-07-03 00:14:03'),
(83, 1, '20.00', '20.00', 'dealer', '', 52, '2021-07-03 00:14:03', '2021-07-03 00:14:03'),
(84, 15, '110.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(85, 14, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(86, 13, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(87, 12, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(88, 11, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(89, 10, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(90, 9, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(91, 8, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(92, 7, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(93, 6, '10.00', '10.00', 'Generation', NULL, 52, '2021-07-03 06:14:03', NULL),
(94, 52, '100.00', '100.00', 'sponsor', '', 54, '2021-07-03 00:36:30', '2021-07-03 00:36:30'),
(95, 1, '40.00', '20.00', 'dealer', '', 54, '2021-07-03 00:36:30', '2021-07-03 00:36:30'),
(96, 52, '200.00', '100.00', 'sponsor', '', 55, '2021-07-03 00:38:28', '2021-07-03 00:38:28'),
(97, 1, '60.00', '20.00', 'dealer', '', 55, '2021-07-03 00:38:28', '2021-07-03 00:38:28'),
(98, 16, '210.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(99, 15, '120.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(100, 14, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(101, 13, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(102, 12, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(103, 11, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(104, 10, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(105, 9, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(106, 8, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(107, 7, '20.00', '10.00', 'Generation', NULL, 55, '2021-07-03 06:38:28', NULL),
(108, 15, '120.00', '100.00', 'sponsor', '', 56, '2021-07-03 03:48:56', '2021-07-03 03:48:56'),
(109, 1, '80.00', '20.00', 'dealer', '', 56, '2021-07-03 03:48:56', '2021-07-03 03:48:56'),
(110, 14, '130.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(111, 13, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(112, 12, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(113, 11, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(114, 10, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(115, 9, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(116, 8, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(117, 7, '30.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(118, 6, '20.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL),
(119, 5, '10.00', '10.00', 'Generation', NULL, 56, '2021-07-03 09:48:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carrylogs`
--

CREATE TABLE `carrylogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `carry` decimal(11,2) NOT NULL,
  `down_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `paid` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrylogs`
--

INSERT INTO `carrylogs` (`id`, `user_id`, `carry`, `down_position`, `reference_id`, `paid`, `created_at`, `updated_at`) VALUES
(2, 15, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(3, 5, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:19:29'),
(4, 13, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(5, 12, '100.00', '7', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(6, 11, '100.00', '3', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(7, 10, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(8, 5, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:19:29'),
(9, 8, '100.00', '4', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(10, 5, '100.00', '1', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:19:29'),
(11, 6, '100.00', '7', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:18:53'),
(12, 5, '100.00', '2', 56, NULL, '2021-07-03 03:48:56', '2021-07-09 19:19:29');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_04_071625_create_permission_tables', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2021_05_20_000704_create_packages_table', 3),
(9, '2021_05_24_055057_create_bonus_table', 4),
(10, '2021_05_28_095905_create_transactions_table', 5),
(11, '2021_07_03_044554_create_carry_logs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `name`, `point`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 100, '2021-05-19 18:47:36', '2021-05-19 18:47:36'),
(2, 'Advance', 500, '2021-05-19 18:56:03', '2021-05-19 18:56:03'),
(3, 'Pro', 1000, '2021-05-20 09:15:36', '2021-05-20 09:15:36'),
(4, 'Top', 2000, NULL, NULL);

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
('jakareaparvez@gmail.com', '$2y$10$WfojVBFmd9xTgrZS0ijqqOwu1uETKR2HupeTmnhiu9lcNHdKl/1E6', '2021-05-17 03:38:47'),
('jakarea4@yopmail.com', '$2y$10$2rz0KEOTzV5mUl.yEdWF0usnfJL7/Tm5FWmFeJGnEnqUtHy9Xzud2', '2021-06-03 04:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_balance` decimal(12,2) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender_balance` decimal(12,2) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'member',
  `national_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `position` int(3) NOT NULL,
  `dealer_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealer_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` double(11,2) NOT NULL DEFAULT '0.00',
  `bonus` double(11,2) NOT NULL DEFAULT '0.00',
  `carry` double(11,2) NOT NULL DEFAULT '0.00',
  `carry_counter` int(11) NOT NULL DEFAULT '0',
  `carry_vanished` date DEFAULT NULL,
  `pv` double(11,2) NOT NULL DEFAULT '0.00',
  `total_pv` double(11,2) NOT NULL DEFAULT '0.00',
  `total_sponsor` double(11,2) NOT NULL DEFAULT '0.00',
  `total_bonus` double(11,2) NOT NULL DEFAULT '0.00',
  `downline` int(11) DEFAULT NULL,
  `downline_updated` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `role`, `national_id`, `phone`, `thana`, `district`, `zip_code`, `package_id`, `address`, `sponsor_id`, `parent_id`, `position`, `dealer_code`, `dealer_id`, `rank`, `balance`, `bonus`, `carry`, `carry_counter`, `carry_vanished`, `pv`, `total_pv`, `total_sponsor`, `total_bonus`, `downline`, `downline_updated`, `email_verified_at`, `password`, `transaction_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dosti Shop', 'd.lotze@lufthanse.del', 'jakarea.admin', 'admin', '1234567', '0987654321123', 'Bogura', 'Bogura', '504', 0, 'Bokshibajar, Bogura', 0, 0, 0, '1234', '1234', NULL, 96000.00, 80.00, 0.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, 17, '2021-07-24', NULL, '$2y$10$0q3LF2Ve87w9gLUgmYEn7u/7NxIIvZJ0/wkXfVpSM90Y4V5Yae0ne', 'Taufik.bd7', 'kFT3i6AL2SRiblYul6STdhNm3u00u7VKxUT73M6FUu0BeMkjWSNK27B6CAaN', '2021-05-02 01:24:13', '2021-07-23 18:45:10'),
(2, 'User 2', 'dfghj@fghj.fbn', 'user2', 'member', NULL, '345678', '3456789', '345678', '34567', 2, '3456789', 1, 1, 1, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, 16, '2021-07-10', NULL, '$2y$10$KrOGYhOc.R9DWEy725uLQu83MPgzHl2y7HvYToJVm1MvvZkBXvRAW', '$2y$10$1nGdxzWK2zJ7bGF4ybyMUeohY23PPkmwi3P7tSk3JFWY/xvCJBMv.', NULL, '2021-06-15 20:45:06', '2021-06-15 20:45:06'),
(3, 'User 3', 'dfghj@fghj.fb', 'jakarea.member', 'member', 'we', '345678', '3456789', '345678', '34567', 2, '3456789', 3, 2, 1, NULL, '26242', NULL, 0.00, 0.00, 0.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, 15, '2021-07-24', NULL, '$2y$10$wX3GQoiGdwmQrZUUVBur4OUbkdEuiVo4H/F7SeZs.oAxvug.jAFlW', '$2y$10$Pm6tWiYqynyTY6lHe9zdpeg6P8FSkbsRTeP0QlkslBhl3OBDSauS.', NULL, '2021-06-15 20:48:09', '2021-07-23 22:16:36'),
(4, 'User 4', '098765432165hh@098765432165.hh', 'jakarea.subdealer', 'sub-dealer', NULL, '098765432165', '098765432165hh', '098765432165hh', '098765432165hh', 1, '098765432165hh', 6, 3, 1, NULL, '123123', NULL, 0.00, 0.00, 0.00, 0, NULL, 0.00, 0.00, 0.00, 3.00, 3, '2021-06-16', NULL, '$2y$10$bHU5j237rajuDAsK6qemR.bKEYlUbr/9/YO1k6QOvjvkF6KEPE2U6', '$2y$10$dFgLKDRMxbz9HEFZiH9uuuERvPFUjM023NBWvAYtFNouPAmH.zvei', NULL, '2021-06-16 02:08:30', '2021-06-16 02:08:30'),
(5, 'User 5', '098765432@ff.cd', 'jakarea.dealer', 'dealer', NULL, '098765432', '098765432', '098765432', '098765432', 3, '098765432', 7, 4, 1, NULL, '21910', NULL, 0.00, 0.00, 10.00, 4, NULL, 111.00, 11.00, 0.00, 0.00, 13, '2021-07-24', NULL, '$2y$10$fuMmOJf0RC9HeBAYzgmxtOFWmsRPGFEXI/7506ayjQeyBoJCKX58S', '$2y$10$4FAhWmpSNmACQrWL9yAHp.cBrOgKFUdig/Oa3ISLb8j/WubXG04v2', NULL, '2021-06-16 02:14:55', '2021-07-09 22:41:37'),
(6, 'user 6', '098765432@ff.cdd', 'user6', 'member', NULL, '098765432', '098765432', '098765432', '098765432', 3, '098765432', 3, 5, 1, NULL, NULL, NULL, 0.00, 10.00, 100.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$7/Ko/31Neojmzr7ziOV3o.bXsyWABLQVijTRwy5z.aENoLG2NqDuS', '$2y$10$qV2f7Syqot7xLOYA7lEMBOfNrYcEdTOmqxHre/SCowjyrXeQi5qVW', NULL, '2021-06-16 02:18:10', '2021-06-16 02:18:10'),
(7, 'User 7', '098765432@ff.cdd4', 'user7', 'member', NULL, '098765432', '098765432', '098765432', '098765432', 3, '098765432', 5, 6, 1, NULL, NULL, NULL, 0.00, 20.00, 1100.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$gKpcOs/DyPgsGXl/aCJBH.GdcHvKTgHcV1QMplOntLPZlVH.XaBRq', '$2y$10$NAki8A92V..yy/j1CmPFTuAabWgPsDUsrY68rOXmt0fuYUszynbni', NULL, '2021-06-16 02:19:16', '2021-06-16 02:19:16'),
(8, 'User 8', 'ggg@ddd.com', 'user8', 'member', NULL, '09876543234444', '09876543234444', '09876543234444', '09876543234444', 3, '09876543234444', 4, 7, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, 0, '2021-06-28', NULL, '$2y$10$f8SKA5a7/1qJyKwLN6Sf4e8L3UeoFcxddGkdtezXhDoXRViQqc9jW', '$2y$10$0gmcXupKqZSremK2IrYDYeaQqGIbxZlClycxbxaqYusPdYGKKo33.', NULL, '2021-06-16 02:45:33', '2021-06-16 02:45:33'),
(9, 'User 3', 'loejd@jfiur.ofmd', 'user9', 'member', NULL, '345678', '3456789', '345678', '34567', 2, '3456789', 8, 8, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '1234567890', '1234567890', NULL, '2021-06-19 15:59:29', '2021-07-23 07:57:52'),
(10, 'User 10', 'loejd@jfiur.ofm', 'user10', 'member', NULL, '234567887654', '56789oi654', '34567', '3456', 2, '34567887654', 9, 9, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '1234567890', '1234567890', NULL, '2021-06-19 16:14:09', '2021-06-19 16:14:09'),
(11, 'User 11', 'lojd@jfiur.ofm', 'user11', 'member', NULL, '234567887654', '56789oi654', '34567', '3456', 2, '34567887654', 10, 10, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '1234567890', '1234567890', NULL, '2021-06-19 16:14:48', '2021-06-19 16:14:48'),
(12, 'User 12', '33234444@33234444.33234444', 'user12', 'member', NULL, '33234444', '33234444', '33234444', '33234444', 1, '33234444', 11, 11, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '1234567890', '1234567890', NULL, '2021-06-28 17:30:39', '2021-06-28 17:30:39'),
(13, 'User 13', 'newmember2@gmail.com', 'user13', 'member', NULL, 'newmember@gmail.com', 'newmember@gmail.com', 'newmember@gmail.com', '1234', 1, 'newmember@gmail.com', 11, 12, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, 0, '2021-06-28', NULL, '$2y$10$b068iY3wS6BDTb7Xc4FSTuQpepSdeg7t5W/CsgCwihrBHdH5U6Rni', '$2y$10$x4cPXJHjU4F88J4QGDv9NuQxNhDFkRdvfyflkxN1bbKqydkRW6qoi', NULL, '2021-06-28 17:42:50', '2021-06-28 17:42:50'),
(14, 'User 14', 'newmember3@gmail.com', 'user14', 'member', NULL, '1234', '1234', '1234', '1234', 1, '1234', 12, 13, 1, NULL, NULL, NULL, 0.00, 30.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$LnaT4h/w53gBtXPAk0jgJesq7tEjALy0jmQ9PLouJ3FzjfPPS.092', '$2y$10$bkI./j/8uTnfjTHGculPk.z7ZpvupebH8dv3M92Zexi0QcVA.hi9W', NULL, '2021-06-28 17:49:53', '2021-06-28 17:49:53'),
(15, 'User 15', 'newmember4@gmail.com', 'user15', 'member', NULL, '1234', '1234', '1234', '1234', 1, '1234', 13, 14, 1, NULL, NULL, NULL, 0.00, 130.00, 1200.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$K9zRIs7NuDgfN.w7XMLqAeQ/GVKSB2A1MXS65eeSk2U4INtqRPc3i', '$2y$10$1ArEwT8WIiHDHfBgkLAubeT4RaGH8vbtCMsYPeezXmMlIemFBcwTy', NULL, '2021-06-28 17:51:52', '2021-06-28 17:51:52'),
(16, 'User 16', 'newuser6@yopmail.com', 'user16', 'member', NULL, '12345', '1234567', '123456', '1234', 1, '12345678', 15, 15, 1, NULL, NULL, NULL, 0.00, 120.00, 1100.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$PLluGTqnNwl6zd6ltYYfFesB4W/KFG9zY9jVvreaWgKGDlJBF1Q2a', '$2y$10$l97viScA/mhVl/Kr.DzDDOBThkkwEJ1DgjFhvDPi2/7pXZ25Wzr9W', NULL, '2021-06-29 00:10:48', '2021-06-29 00:10:48'),
(52, 'User 17', 'user17@yopmail.com', 'user17', 'member', NULL, '0987654321', 'Bangladesh', 'Dhaka', '1217', 3, 'Dhaka', 16, 16, 1, NULL, NULL, NULL, 0.00, 210.00, 100.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$Kt3gDOd49EJUfv1bk/i8EeTiquZRbzDj1ceFo9X5HlkGS/qPAgL9C', '$2y$10$WG1FsbMg0I0uy5eApk5ime3trL.gZEWZr1Fr2Gibh1EXYLPQCWlHy', NULL, '2021-07-03 00:14:03', '2021-07-03 00:14:03'),
(56, 'User 18', 'user18@yopmail.com', 'user18', 'member', NULL, '1234567890', 'Bangladesh', 'bogura', '1217', 3, 'Dhaka', 15, 15, 2, NULL, NULL, NULL, 0.00, 0.00, 0.00, 0, NULL, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, '$2y$10$p3QkDfPBqpPXZ9/FHKNAy..CQtYFH17LRqLp/G8lgsnvQ2hR2fyTO', '$2y$10$/yDkVXeHHySL./wwy2Bcfe.vLUYPRMXMVF003zCZ.mSYQwNmVFtLq', NULL, '2021-07-03 03:48:56', '2021-07-03 03:48:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`bonus_id`);

--
-- Indexes for table `carrylogs`
--
ALTER TABLE `carrylogs`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `packages_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_national_id_unique` (`national_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `bonus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `carrylogs`
--
ALTER TABLE `carrylogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
