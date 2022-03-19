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
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'الرياض', 'Riyadh', NULL, NULL),
(2, 1, 'الدرعية', 'Ad Diriyah', NULL, NULL),
(3, 1, 'الخرج', 'Al-Kharj', NULL, NULL),
(4, 1, 'الدودامي', 'Dawadmi', NULL, NULL),
(5, 1, 'المجمعة', 'Al Majma`ah', NULL, NULL),
(6, 1, 'القويعية', 'Al-Gwei\'iyyah', NULL, NULL),
(7, 1, 'الافلاج', 'Layla', NULL, NULL),
(8, 1, 'وادي الدواسر', 'Wadi Al-Dawasir', NULL, NULL),
(9, 1, 'الزلفي', 'Zulfi', NULL, NULL),
(10, 1, 'شقراء', 'Shaqraa', NULL, NULL),
(11, 1, 'حوصة بني تميم', 'Howtat Bani Tamim', NULL, NULL),
(12, 1, 'عفيف', 'Afif', NULL, NULL),
(13, 1, 'الغاط', 'Al Ghat', NULL, NULL),
(14, 1, 'السليل', 'As Sulayyil', NULL, NULL),
(15, 1, 'ضرما', 'Dhurma', NULL, NULL),
(16, 1, 'المزاحمية', 'Al-Muzahmiya', NULL, NULL),
(17, 1, 'رماح', 'Rumah', NULL, NULL),
(18, 1, 'ثادق', 'Thadiq', NULL, NULL),
(19, 1, 'حريملاء', 'Huraymila', NULL, NULL),
(20, 1, 'الحريق', 'Al Hariq', NULL, NULL),
(21, 1, 'مرات', 'Murat', NULL, NULL),
(22, 1, 'الرين', 'Ar Rayn', NULL, NULL),
(23, 1, 'الدلم', 'Ad-Dilam', NULL, NULL),
(24, 2, 'العاصمة المقدسة', 'Mecca', NULL, NULL),
(25, 2, 'جدة', 'Jeddah', NULL, NULL),
(26, 2, 'الطائف', 'Taif', NULL, NULL),
(27, 2, 'القنفذة', 'Al Qunfudhah', NULL, NULL),
(28, 2, 'الليث', 'Al Lith', NULL, NULL),
(29, 2, 'خليص', 'Khulais', NULL, NULL),
(30, 2, 'الخرمة', 'Al Khurma', NULL, NULL),
(31, 2, 'رنية', 'Ranyah', NULL, NULL),
(32, 2, 'تربة', 'Turbah', NULL, NULL),
(33, 2, 'الجموم', 'Al-Jumum', NULL, NULL),
(34, 2, 'الكامل', 'Al Kamil', NULL, NULL),
(35, 2, 'المويه', 'Al Muwayh', NULL, NULL),
(36, 2, 'ميسان', 'Maysaan', NULL, NULL),
(37, 2, 'أضم', 'Adham', NULL, NULL),
(38, 2, 'العرضيات', 'Al-Ardiyat', NULL, NULL),
(39, 2, 'بحرة', 'Bahrah', NULL, NULL),
(40, 3, 'المدينة المنورة', 'Medina', NULL, NULL),
(41, 3, 'ينبع', 'Yanbu', NULL, NULL),
(42, 3, 'العلا', 'AlUla', NULL, NULL),
(43, 3, 'المهد', 'Mahd adh Dhahab', NULL, NULL),
(44, 3, 'الحناكية', 'Al Hinakiyah', NULL, NULL),
(45, 3, 'بدر', 'Badr', NULL, NULL),
(46, 3, 'خيبر', 'Khaybar', NULL, NULL),
(47, 3, 'العيص', 'Al Ais', NULL, NULL),
(48, 3, 'وادي الفرع', 'Wadi Al Fora\'a', NULL, NULL),
(49, 4, 'بريدة', 'Buraydah', NULL, NULL),
(50, 4, 'عنيزة', 'Unaizah', NULL, NULL),
(51, 4, 'الرس', 'Ar Rass', NULL, NULL),
(52, 4, 'المذنب', 'Al Mithnab', NULL, NULL),
(53, 4, 'البكيرية', 'Al Bukayriyah', NULL, NULL),
(54, 4, 'البدائع', 'Al Badayea', NULL, NULL),
(55, 4, 'الأسياح', 'Asyah', NULL, NULL),
(56, 4, 'النبهانية', 'An Nabhaniyah', NULL, NULL),
(57, 4, 'الشماسية', 'Al Shimasiyah', NULL, NULL),
(58, 4, 'عيون الجواء', 'Uyun Al Jawa', NULL, NULL),
(59, 4, 'رياض الخبراء', 'Riyadh Al Khabra', NULL, NULL),
(60, 4, 'عقلة الصقور', 'Uglat Asugour', NULL, NULL),
(61, 4, 'ضرية', 'Dariyah', NULL, NULL),
(62, 5, 'الدمام', 'Dammam', NULL, NULL),
(63, 5, 'الأحساء', 'Al-Ahsa', NULL, NULL),
(64, 5, 'حفر الباطن', 'Hafar Al Batin', NULL, NULL),
(65, 5, 'الجبيل', 'Al Jubail', NULL, NULL),
(66, 5, 'القطيف', 'Al Qatif', NULL, NULL),
(67, 5, 'الخبر', 'El Khabar', NULL, NULL),
(68, 5, 'الخفجي', 'Khafji', NULL, NULL),
(69, 5, 'رأس تنورة', 'Ras Tanura', NULL, NULL),
(70, 5, 'بقيق', 'Buqayq', NULL, NULL),
(71, 5, 'النعيرية', 'Nairyah', NULL, NULL),
(72, 5, 'قرية العليا', 'Qaryat Al Ulya', NULL, NULL),
(73, 5, 'العديد', 'Inland Sea', NULL, NULL),
(74, 6, 'أبها', 'Abha', NULL, NULL),
(75, 6, 'خميس مشيط', 'Khamis Mushait', NULL, NULL),
(76, 6, 'بيشة', 'Bisha', NULL, NULL),
(77, 6, 'النماص', 'Al Namas', NULL, NULL),
(78, 6, 'محايل عسير', 'Muhayil', NULL, NULL),
(79, 6, 'ظهران الجنوب', 'Dhahran Al Janub', NULL, NULL),
(80, 6, 'تثليث', 'تثليث', NULL, NULL),
(81, 6, 'سراة عبيدة', 'Sarat Abidah', NULL, NULL),
(82, 6, 'رجال ألمع', 'Rijal Almaa', NULL, NULL),
(83, 6, 'بلقرن', 'Balqarn', NULL, NULL),
(84, 6, 'أحد رفيدة', 'Ahad Rafidah', NULL, NULL),
(85, 6, 'المجاردة', 'Al Majaridah', NULL, NULL),
(86, 6, 'البرك', 'Al Birk', NULL, NULL),
(87, 6, 'بارق', 'Bariq', NULL, NULL),
(88, 6, 'تنومة', 'Tanomah', NULL, NULL),
(89, 6, 'طريب', 'Tereeb', NULL, NULL),
(90, 6, 'الحرجة', 'Al Harajah', NULL, NULL),
(91, 7, 'تبوك', 'Tabuk', NULL, NULL),
(92, 7, 'الوجه', 'Al Wajh', NULL, NULL),
(93, 7, 'ضبا', 'Duba', NULL, NULL),
(94, 7, 'تيماء', 'Tayma', NULL, NULL),
(95, 7, 'أملج', 'Umluj', NULL, NULL),
(96, 7, 'حقل', 'Haql', NULL, NULL),
(97, 7, 'البدع', 'Al-Bad', NULL, NULL),
(98, 8, 'حائل', 'Hail', NULL, NULL),
(99, 8, 'بقعاء', 'Baqaa', NULL, NULL),
(100, 8, 'الغزالة', 'Al Ghazalah', NULL, NULL),
(101, 8, 'الشنان', 'Ash Shinan', NULL, NULL),
(102, 8, 'الحائط', 'Al Hait', NULL, NULL),
(103, 8, 'السليمي', 'Al Sulaimi', NULL, NULL),
(104, 8, 'الشملي', 'Ash Shamli', NULL, NULL),
(105, 8, 'موقق', 'Mawqaq', NULL, NULL),
(106, 8, 'سميراء', 'Sumaira\'a', NULL, NULL),
(107, 9, 'عرعر', 'Arʿar', NULL, NULL),
(108, 9, 'رفحاء', 'Rafha', NULL, NULL),
(109, 9, 'طريف', 'Turaif', NULL, NULL),
(110, 9, 'العويقيلة', 'Al Uwayqilah', NULL, NULL),
(111, 10, 'جازان', 'Jazan', NULL, NULL),
(112, 10, 'صبيا', 'Sabya', NULL, NULL),
(113, 10, 'أبو عريش', 'Abu Arish', NULL, NULL),
(114, 10, 'صامطة', 'Samtah', NULL, NULL),
(115, 10, 'بيش', 'Baish', NULL, NULL),
(116, 10, 'الدرب', 'Ad Darb', NULL, NULL),
(117, 10, 'الحرث', 'Al Harth', NULL, NULL),
(118, 10, 'ضمد', 'Damad', NULL, NULL),
(119, 10, 'الريث', 'Al Reeth', NULL, NULL),
(120, 10, 'فرسان', 'Farasan', NULL, NULL),
(121, 10, 'الدائر', 'Addayer', NULL, NULL),
(122, 10, 'العارضة', 'Al Aridhah', NULL, NULL),
(123, 10, 'أحد المسارحة', 'Ahad Al Masarihah', NULL, NULL),
(124, 10, 'العيدابي', 'Al Edabi', NULL, NULL),
(125, 10, 'فيفاء', 'Fayfa', NULL, NULL),
(126, 10, 'الطوال', 'Al Tuwal', NULL, NULL),
(127, 10, 'هروب', 'Fugitive', NULL, NULL),
(128, 11, 'نجران', 'Najran', NULL, NULL),
(129, 11, 'شرورة', 'Sharorah', NULL, NULL),
(130, 11, 'حبونا', 'Hubuna', NULL, NULL),
(131, 11, 'بدر الجنوب', 'Badr Al Janoub', NULL, NULL),
(132, 11, 'يدمه', 'Yadamah', NULL, NULL),
(133, 11, 'ثار', 'Thar', NULL, NULL),
(134, 11, 'خباش', 'Khbash', NULL, NULL),
(135, 11, 'الخرخير', 'Al Kharkhir', NULL, NULL),
(136, 12, 'الباحة', 'Al Bahah', NULL, NULL),
(137, 12, 'بلجرشي', 'Baljurashi', NULL, NULL),
(138, 12, 'المندق', 'Al Mandaq', NULL, NULL),
(139, 12, 'المخواة', 'Al Makhwah', NULL, NULL),
(140, 12, 'قلوة', 'Qilwah', NULL, NULL),
(141, 12, 'العقيق', 'Al Aqiq', NULL, NULL),
(142, 12, 'القرى', 'Al Qara', NULL, NULL),
(143, 12, 'غامد الزناد', 'Ghamed Al-Zinad', NULL, NULL),
(144, 12, 'الحجرة', 'Hajrah', NULL, NULL),
(145, 12, 'بني حسن', 'Bani Hasan', NULL, NULL),
(146, 13, 'سكاكا', 'Sakakah', NULL, NULL),
(147, 13, 'القريات', 'Al Qurayyat', NULL, NULL),
(148, 13, 'دومة الجندل', 'Dumat Al-Jandal', NULL, NULL),
(149, 13, 'طبرجل', 'Tabarjal', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
