-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 03:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_57`
--

-- --------------------------------------------------------

--
-- Table structure for table `files_product`
--

CREATE TABLE `files_product` (
  `id_files` int(11) NOT NULL,
  `relation_company` int(11) NOT NULL,
  `relation_main` int(11) NOT NULL,
  `name_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_admin`
--

CREATE TABLE `menu_admin` (
  `id_menu_admin` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `main_menu_id` int(11) NOT NULL,
  `submenu_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_backoffice`
--

CREATE TABLE `menu_backoffice` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_menu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shout_menu` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shout_css` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `component_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_menu` int(11) NOT NULL,
  `note_menu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_backoffice`
--

INSERT INTO `menu_backoffice` (`id_menu`, `name_menu`, `link_menu`, `icon_menu`, `shout_menu`, `shout_css`, `component_menu`, `type_menu`, `sort_menu`, `note_menu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Permission', NULL, 'ti-settings', 'admin', 'success', NULL, 'main', 1, NULL, '2019-02-10 20:48:49', '2019-03-08 00:45:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_admin`
--

CREATE TABLE `profile_admin` (
  `profile_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_admin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `marital_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_admin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_admin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype_admin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `background_profile` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relation_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_admin`
--

INSERT INTO `profile_admin` (`profile_id`, `full_name`, `gender_admin`, `birth_date`, `marital_status`, `location_admin`, `mobile_number`, `twitter_admin`, `skype_admin`, `website`, `background_profile`, `relation_admin`, `created_at`, `updated_at`) VALUES
(1, 'ำกเะฟหดหก', 'male', NULL, NULL, NULL, '0000', NULL, NULL, NULL, 'fileName7336049271549180012.jpg', 1, '2019-02-02 23:13:20', '2019-02-03 00:46:52'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fileName7225577501549946561.jpg', 3, '2019-02-11 21:42:41', '2019-02-11 21:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_backoffice`
--

CREATE TABLE `sub_menu_backoffice` (
  `id_menu_sub` int(11) NOT NULL,
  `relation_menu` int(11) NOT NULL,
  `name_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link_menu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shout_menu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shout_css` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `component_menu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_menu` int(11) NOT NULL,
  `note_menu` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_menu_backoffice`
--

INSERT INTO `sub_menu_backoffice` (`id_menu_sub`, `relation_menu`, `name_menu`, `link_menu`, `shout_menu`, `shout_css`, `component_menu`, `sort_menu`, `note_menu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'admin', NULL, NULL, NULL, 1, NULL, '2019-02-10 23:46:25', '2019-03-08 00:41:33', NULL),
(2, 1, 'Menu Permission', 'menu_permission', NULL, NULL, NULL, 2, NULL, '2019-02-11 23:30:06', '2019-03-08 00:41:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_admin`
--

CREATE TABLE `system_admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_profile` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat_admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_shops` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_admin`
--

INSERT INTO `system_admin` (`id_admin`, `name`, `email`, `password`, `img_profile`, `stat_admin`, `remember_token`, `relation_shops`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Aekkarat', 'admin@admin.com', '$2y$10$tHI4kurDhb4YHmWMh7HmvO5hBZlsZFrJVG8NtGs4iMYDNHn1bn51e', 'fileName15080324401549180004.png', 'poweradmin', 'JVyRWKSYkMljXiHyP6p9GH1D3T0xciKL7r9bgOPzYMEOIc8pygApSSM1Li65', NULL, '2018-12-13 08:48:13', '2019-02-03 00:46:44', NULL),
(3, 'Aof Aekkarat', 'aof@admin.com', '$2y$10$00nZDfeeSDigUljgNPQtbuVNRy/GdYfxwWXTVhVIEzxUPAY6mPDS.', 'fileName17956689311549952111.png', 'admin', 'vfIKyISgoQGgVHKoIDZWW4wJXWDiwQP2G3QCUH78I3EYUfndXyvIidlyQWvy', NULL, '2019-02-11 21:30:11', '2019-02-11 23:15:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files_product`
--
ALTER TABLE `files_product`
  ADD PRIMARY KEY (`id_files`);

--
-- Indexes for table `menu_admin`
--
ALTER TABLE `menu_admin`
  ADD PRIMARY KEY (`id_menu_admin`);

--
-- Indexes for table `menu_backoffice`
--
ALTER TABLE `menu_backoffice`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `profile_admin`
--
ALTER TABLE `profile_admin`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `sub_menu_backoffice`
--
ALTER TABLE `sub_menu_backoffice`
  ADD PRIMARY KEY (`id_menu_sub`);

--
-- Indexes for table `system_admin`
--
ALTER TABLE `system_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files_product`
--
ALTER TABLE `files_product`
  MODIFY `id_files` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_admin`
--
ALTER TABLE `menu_admin`
  MODIFY `id_menu_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_backoffice`
--
ALTER TABLE `menu_backoffice`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_admin`
--
ALTER TABLE `profile_admin`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menu_backoffice`
--
ALTER TABLE `sub_menu_backoffice`
  MODIFY `id_menu_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_admin`
--
ALTER TABLE `system_admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
