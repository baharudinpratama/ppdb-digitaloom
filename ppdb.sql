-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 02:41 AM
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
(22, 18, 'ayah', 'AAA', '0', '-', '2025-06-14 00:00:00', '-', '-', 0, '-', '2025-06-14 10:01:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` enum('test','re-reg') NOT NULL,
  `amount` decimal(10,0) NOT NULL DEFAULT 0,
  `status` enum('new','paid','confirmed') NOT NULL DEFAULT 'new',
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `type`, `amount`, `status`, `paid_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 18, 'test', 250000, 'confirmed', '2025-06-14 14:30:10', '2025-06-14 10:01:08', '2025-06-14 14:30:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `reg_number` varchar(24) NOT NULL DEFAULT '',
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
  `reg_status` enum('new','approved','rejected') NOT NULL DEFAULT 'new',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_number`, `nik`, `nisn`, `name`, `gender`, `birth_place`, `birth_date`, `nationality`, `address`, `language`, `blood_type`, `medical_history`, `prev_school_name`, `prev_school_npsn`, `prev_school_acc`, `prev_school_anbk`, `prev_school_address`, `diploma_number`, `diploma_year`, `class_program`, `reg_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 'PPDB-1-018', '12345', '1', 'Bubu', 'laki-laki', '-', '2025-06-14', '-', '-', '-', 'o', '-', 'Tadika Mesra', '1', '-', 0, '-', '0', '2000', 'unggulan', 'approved', '2025-06-14 10:01:08', NULL, NULL);

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
(13, 18, 'b9df5f578918938c2b75ffe8e048d581.jpg', 'potongan meme 2.jpg', '2025-06-14 10:01:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_uploads`
--

CREATE TABLE `student_uploads` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` enum('photo','nisn','birth-cert','kk','skl') NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `original_name` varchar(100) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_uploads`
--

INSERT INTO `student_uploads` (`id`, `student_id`, `type`, `filename`, `original_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'photo', 'd34d81d4cb1ad8c5972ad39ee2a03a89.jpeg', 'pexels-photo-799443.jpeg', '2025-06-15 16:21:25', NULL, NULL),
(2, 0, 'nisn', '828ceb062ce68f8806c45d2bbb227a8c.jpeg', 'pexels-photo-799443.jpeg', '2025-06-15 16:21:25', NULL, NULL),
(3, 0, 'birth-cert', '38b5d985578765cd9f61eff7f316330d.jpeg', 'pexels-photo-799443.jpeg', '2025-06-15 16:21:25', NULL, NULL),
(4, 0, 'kk', 'e3e2c1977c1d4c136e12423d6c830e92.jpeg', 'pexels-photo-799443.jpeg', '2025-06-15 16:21:25', NULL, NULL),
(5, 0, 'skl', '5b9ad29a92d7c637febdc965dc85426b.jpeg', 'pexels-photo-799443.jpeg', '2025-06-15 16:21:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` enum('new','passed','failed') NOT NULL DEFAULT 'new',
  `score` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `student_id`, `status`, `score`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 18, 'passed', 0, '2025-06-14 17:23:02', '2025-06-14 14:53:04', NULL);

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
(9, 'admin', '$2y$10$xAM84p3c6QDhabcIM/Zwwe6Kx8sFyXcvAiywZ26bGtLfE3zNb67ae', NULL, '2025-06-11 17:29:19', NULL, NULL),
(10, 'ppdb-18', '$2y$10$M3YQ74cPBSrIkEqdob6cJOFp.UYWxVC3/lNHEZNlfbOw27ZeFebbi', 18, '2025-06-14 15:44:46', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
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
-- Indexes for table `student_uploads`
--
ALTER TABLE `student_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_achievements`
--
ALTER TABLE `student_achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_uploads`
--
ALTER TABLE `student_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
