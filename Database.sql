-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 07:31 AM
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
-- Database: `ikanselalu`
--

-- --------------------------------------------------------

--
-- Table structure for table `fish_food`
--

CREATE TABLE `fish_food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish_food`
--

INSERT INTO `fish_food` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Hi - Provite 781-1', '12000.00', NULL, '2023-07-03 23:09:09'),
(3, 'Hi - Provite 781-2', '9200.00', NULL, '2023-06-01 13:08:02'),
(14, 'Hi - Provite 781-3', '15000.00', '2023-06-26 00:32:44', '2023-06-26 00:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `fish_types`
--

CREATE TABLE `fish_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `ukuran_awal` int(11) NOT NULL,
  `waktu_panen` int(11) NOT NULL,
  `ukuran_panen` int(11) NOT NULL,
  `stocking_density` int(11) NOT NULL,
  `fcr` decimal(4,2) NOT NULL,
  `fish_food_id` bigint(20) UNSIGNED NOT NULL,
  `waktu_sampling` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish_types`
--

INSERT INTO `fish_types` (`id`, `name`, `price`, `ukuran_awal`, `waktu_panen`, `ukuran_panen`, `stocking_density`, `fcr`, `fish_food_id`, `waktu_sampling`, `created_at`, `updated_at`) VALUES
(2, 'LELE', '250.00', 7, 3, 125, 200, '1.10', 1, 2, NULL, '2023-06-25 06:06:04'),
(3, 'GURAME', '13000.00', 250, 4, 500, 8, '1.50', 3, 4, NULL, '2023-06-04 13:08:43'),
(4, 'NILA', '1750.00', 50, 3, 250, 40, '1.20', 3, 4, NULL, '2023-06-01 13:09:27');

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
(4, '2023_02_23_071832_create_fish_types_table', 1),
(5, '2023_02_23_074800_create_fish_food_table', 1),
(6, '2023_02_27_073536_add_fish_food_id_to_fish_type_table', 1),
(7, '2023_02_28_115956_create_logs_table', 2),
(8, '2023_03_06_223634_add_waktu_sampling_to_fish_types_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `riwayats`
--

CREATE TABLE `riwayats` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` int(100) NOT NULL,
  `totalFish` int(100) NOT NULL,
  `biomassakg` int(100) NOT NULL,
  `biomassaPanenkg` int(100) NOT NULL,
  `ukuranAwal` int(100) NOT NULL,
  `waktuPanen` int(100) NOT NULL,
  `namaPakan` varchar(100) NOT NULL,
  `ukuranPanen` int(100) NOT NULL,
  `totalFeed` int(100) NOT NULL,
  `fishCost` int(100) NOT NULL,
  `feedCost` bigint(100) NOT NULL,
  `allCost` bigint(100) NOT NULL,
  `sampling` int(100) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayats`
--

INSERT INTO `riwayats` (`id`, `name`, `area`, `totalFish`, `biomassakg`, `biomassaPanenkg`, `ukuranAwal`, `waktuPanen`, `namaPakan`, `ukuranPanen`, `totalFeed`, `fishCost`, `feedCost`, `allCost`, `sampling`, `updated_at`, `created_at`) VALUES
(63, 'LELE', 22, 4400, 31, 605, 7, 3, 'Pakan Ikan Tanpa Sisi', 125, 666, 1100000, 7986000, 9086000, 2, '2023-06-25', '2023-06-25 13:16:05'),
(64, 'LELE', 11, 2200, 15, 303, 7, 3, 'Pakan Ikan Tanpa Sisi', 125, 333, 550000, 3993000, 4543000, 2, '2023-06-25', '2023-06-25 13:17:59'),
(65, 'LELE', 22, 4400, 31, 605, 7, 3, 'Hi - Provite 781-1', 125, 666, 1100000, 6655000, 7755000, 2, '2023-06-26', '2023-06-26 07:33:35'),
(66, 'NILA', 100, 4000, 200, 1200, 50, 3, 'Hi - Provite 781-2', 250, 1440, 7000000, 13248000, 20248000, 4, '2023-07-04', '2023-07-04 06:06:48'),
(67, 'LELE', 10, 2000, 14, 275, 7, 3, 'Hi - Provite 781-1', 125, 303, 500000, 3630000, 4130000, 2, '2023-07-04', '2023-07-04 06:09:19'),
(68, 'LELE', 22, 4400, 31, 605, 7, 3, 'Hi - Provite 781-1', 125, 666, 1100000, 7986000, 9086000, 2, '2023-08-07', '2023-08-07 01:34:37'),
(69, 'LELE', 22, 4400, 31, 605, 7, 3, 'Hi - Provite 781-1', 125, 666, 1100000, 7986000, 9086000, 2, '2023-08-25', '2023-08-25 07:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_samplings`
--

CREATE TABLE `riwayat_samplings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` int(100) NOT NULL,
  `ukuran_ikan_sampling` int(100) NOT NULL,
  `feedDayKG` int(100) NOT NULL,
  `totalFeedSampling` int(100) NOT NULL,
  `sampling` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_samplings`
--

INSERT INTO `riwayat_samplings` (`id`, `name`, `area`, `ukuran_ikan_sampling`, `feedDayKG`, `totalFeedSampling`, `sampling`, `updated_at`, `created_at`) VALUES
(31, 'LELE', 2, 22, 9, 123, 2, '2023-08-07', '2023-08-07 01:35:20'),
(32, 'LELE', 22, 22, 97, 1355, 2, '2023-08-25', '2023-08-25 07:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fish_food`
--
ALTER TABLE `fish_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish_types`
--
ALTER TABLE `fish_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fish_types_fish_food_id_foreign` (`fish_food_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayats`
--
ALTER TABLE `riwayats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_samplings`
--
ALTER TABLE `riwayat_samplings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fish_food`
--
ALTER TABLE `fish_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fish_types`
--
ALTER TABLE `fish_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayats`
--
ALTER TABLE `riwayats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `riwayat_samplings`
--
ALTER TABLE `riwayat_samplings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fish_types`
--
ALTER TABLE `fish_types`
  ADD CONSTRAINT `fish_types_fish_food_id_foreign` FOREIGN KEY (`fish_food_id`) REFERENCES `fish_food` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
