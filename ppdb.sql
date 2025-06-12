-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 01:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `type` enum('ayah','ibu','wali') DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `phone` varchar(16) NOT NULL DEFAULT '',
  `birth_place` varchar(100) NOT NULL DEFAULT '',
  `birth_date` datetime DEFAULT NULL,
  `education` varchar(100) NOT NULL DEFAULT '',
  `job` varchar(100) NOT NULL DEFAULT '',
  `income` int(11) NOT NULL DEFAULT 0,
  `address` text NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `student_id`, `type`, `name`, `phone`, `birth_place`, `birth_date`, `education`, `job`, `income`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 15:52:06', NULL, NULL),
(2, 5, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 15:52:06', NULL, NULL),
(3, 6, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 16:02:54', NULL, NULL),
(4, 6, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 16:02:54', NULL, NULL),
(5, 7, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 16:04:07', NULL, NULL),
(6, 7, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 16:04:07', NULL, NULL),
(11, 10, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 16:16:01', NULL, NULL),
(12, 10, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 16:16:01', NULL, NULL),
(13, 11, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 16:26:31', NULL, NULL),
(14, 11, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 16:26:31', NULL, NULL),
(15, 12, 'ayah', 'Ayah', '822', 'Surabaya', '2025-06-09 00:00:00', 'S2', 'Programmer', 2, 'Surabaya', '2025-06-11 16:36:19', NULL, NULL),
(16, 12, 'ibu', 'Ibu', '821', 'Surabaya', '2025-06-10 00:00:00', 'S1', 'Tax Officer', 1, 'Surabaya', '2025-06-11 16:36:19', NULL, NULL),
(17, 13, 'wali', '-', '0', '-', '2025-06-11 00:00:00', '-', '-', 0, '-', '2025-06-11 16:40:08', NULL, NULL),
(18, 14, 'wali', '-', '0', '-', '2025-06-11 00:00:00', '-', '-', 0, '-', '2025-06-11 16:43:40', NULL, NULL),
(19, 15, 'wali', '-', '0', '-', '2025-06-11 00:00:00', '-', '-', 0, '-', '2025-06-11 16:44:02', NULL, NULL),
(20, 16, 'wali', '-', '0', '-', '2025-06-11 00:00:00', '-', '-', 0, '-', '2025-06-11 17:16:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL DEFAULT '',
  `nisn` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `gender` enum('laki-laki','perempuan','lain-lain') NOT NULL DEFAULT 'lain-lain',
  `birth_place` varchar(100) NOT NULL DEFAULT '',
  `birth_date` date DEFAULT NULL,
  `nationality` varchar(100) NOT NULL DEFAULT '',
  `address` text NOT NULL DEFAULT '',
  `language` varchar(100) NOT NULL DEFAULT '',
  `blood_type` varchar(2) NOT NULL DEFAULT '',
  `medical_history` text NOT NULL DEFAULT '',
  `prev_school_name` varchar(100) NOT NULL DEFAULT '',
  `prev_school_npsn` varchar(100) NOT NULL DEFAULT '',
  `prev_school_acc` varchar(1) NOT NULL DEFAULT '',
  `prev_school_anbk` int(11) NOT NULL DEFAULT 0,
  `prev_school_address` text NOT NULL DEFAULT '',
  `diploma_number` varchar(100) NOT NULL DEFAULT '',
  `diploma_year` year(4) DEFAULT NULL,
  `class_program` enum('reguler','unggulan','') NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nik`, `nisn`, `name`, `gender`, `birth_place`, `birth_date`, `nationality`, `address`, `language`, `blood_type`, `medical_history`, `prev_school_name`, `prev_school_npsn`, `prev_school_acc`, `prev_school_anbk`, `prev_school_address`, `diploma_number`, `diploma_year`, `class_program`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '35781', '4011197001', 'John Doe', 'laki-laki', 'Surabaya', '2025-06-01', 'Indonesia', 'Surabaya', 'Bahasa Indonesia', 'a', '-', 'Tadika Mesra', '144', 'T', 100, 'Surabaya', '001', '2025', '', '2025-06-05 16:50:05', NULL, NULL),
(2, '35781', '4011197001', 'John Doe', 'laki-laki', 'Surabaya', '2025-06-01', 'Indonesia', 'Surabaya', 'Bahasa Indonesia', 'a', '-', 'Tadika Mesra', '144', 'T', 100, 'Surabaya', '001', '2025', 'reguler', '2025-06-05 16:53:12', NULL, NULL),
(3, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 15:31:07', NULL, NULL),
(4, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 15:31:17', NULL, NULL),
(5, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 15:52:06', NULL, NULL),
(6, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 16:02:54', NULL, NULL),
(7, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 16:04:07', NULL, NULL),
(10, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 16:16:01', NULL, NULL),
(11, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 16:26:31', NULL, NULL),
(12, '357814', '011197', 'John Doe', 'laki-laki', 'Surabaya', '2015-01-01', 'Indonesia', 'Surabaya', 'Indonesia', 'a', '-', 'Tadika Mesra', '404', 'A', 100, 'Surabaya', '001', '2025', 'unggulan', '2025-06-11 16:36:19', NULL, NULL),
(13, '-', '-', '-', 'laki-laki', '-', '2025-06-11', '-', '-', '-', 'a', '-', '-', '-', '-', 0, '-', '-', '0000', 'reguler', '2025-06-11 16:40:08', NULL, NULL),
(14, '-', '-', '-', 'laki-laki', '-', '2025-06-11', '-', '-', '-', 'a', '-', '-', '-', '-', 0, '-', '-', '0000', 'reguler', '2025-06-11 16:43:40', NULL, NULL),
(15, '-', '-', '-', 'laki-laki', '-', '2025-06-11', '-', '-', '-', 'a', '-', '-', '-', '-', 0, '-', '-', '0000', 'reguler', '2025-06-11 16:44:02', NULL, NULL),
(16, '-', '-', '-', 'laki-laki', '-', '2025-06-11', '-', '-', '-', 'a', '-', '-', '-', '-', 0, '-', '-', '0000', 'unggulan', '2025-06-11 17:16:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_achievements`
--

CREATE TABLE `student_achievements` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `original_name` varchar(100) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_achievements`
--

INSERT INTO `student_achievements` (`id`, `student_id`, `filename`, `original_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 10, '826e52fb56139ef6f8c5f48325697bd7.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 16:16:01', NULL, NULL),
(3, 10, '06a337366c52408d83093448d6e41215.webp', 'mobile-phone-wallpaper-soft-focus-delicate-flower-amidst-blurred-orange-meadow-sunset-354016436.webp', '2025-06-11 16:16:01', NULL, NULL),
(4, 11, 'f0dde26578406eac1414f51ef96ec439.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 16:26:32', NULL, NULL),
(5, 11, '982704652892b31159e2fd79d9f7aa0b.webp', 'mobile-phone-wallpaper-soft-focus-delicate-flower-amidst-blurred-orange-meadow-sunset-354016436.webp', '2025-06-11 16:26:32', NULL, NULL),
(6, 12, '5b8bd61da9be6ce93b03d3cd30626e1f.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 16:36:19', NULL, NULL),
(7, 12, '754789bdc6fcd5d3868d7c5aead6af06.webp', 'mobile-phone-wallpaper-soft-focus-delicate-flower-amidst-blurred-orange-meadow-sunset-354016436.webp', '2025-06-11 16:36:19', NULL, NULL),
(8, 13, '9282135b7466f9499a1c0b103d3dfbcf.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 16:40:08', NULL, NULL),
(9, 13, '4042fa0465c053d47cefa72c1d955219.webp', 'mobile-phone-wallpaper-soft-focus-delicate-flower-amidst-blurred-orange-meadow-sunset-354016436.webp', '2025-06-11 16:40:09', NULL, NULL),
(10, 14, '0a3bf12ea37f31ac460e75e73e7ccc4c.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 16:43:40', NULL, NULL),
(11, 14, 'd42ae69f469fadf1ab4aead98dc6293a.webp', 'mobile-phone-wallpaper-soft-focus-delicate-flower-amidst-blurred-orange-meadow-sunset-354016436.webp', '2025-06-11 16:43:40', NULL, NULL),
(12, 16, 'd2b0c93f5e11f0c53ce528774006c8e8.jpeg', 'pexels-photo-799443.jpeg', '2025-06-11 17:16:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `student_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'admin', '$2y$10$xAM84p3c6QDhabcIM/Zwwe6Kx8sFyXcvAiywZ26bGtLfE3zNb67ae', NULL, '2025-06-11 17:29:19', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_achievements`
--
ALTER TABLE `student_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_achievements`
--
ALTER TABLE `student_achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
