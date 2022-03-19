-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 09:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minible_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 'منطقة الرياض', 'Riyadh', NULL, NULL),
(2, 'منطقة مكة المكرمة', 'Makkah', NULL, NULL),
(3, 'منطقة المدينة المنورة', 'Al-Medina', NULL, NULL),
(4, 'منطقة القصيم', 'Qassim', NULL, NULL),
(5, 'منطقة الشرقية', 'Eastern', NULL, NULL),
(6, 'منطقة عسير', 'Aseer', NULL, NULL),
(7, 'منطقة تبوك', 'Tabouk', NULL, NULL),
(8, 'منطقة حائل', 'Hail', NULL, NULL),
(9, 'منطقة الحدود الشمالية', 'Northern Borders', NULL, NULL),
(10, 'منطقة جازان', 'Jazan', NULL, NULL),
(11, 'منطقة نجران', 'Najran', NULL, NULL),
(12, 'منطقة الباحة', 'Al-Baha', NULL, NULL),
(13, 'منطقة الجوف', 'Al-Jouf', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
