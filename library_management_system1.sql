-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2024 at 04:11 AM
-- Server version: 8.3.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system1`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `pob` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_in` datetime DEFAULT NULL,
  `borrow_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`, `barcode`, `author`, `written_in`, `borrow_id`, `status`) VALUES
(1, 'Laravel Application', NULL, '2024-10-13 20:54:08', '2024-10-13 21:04:12', 'L001', 'Soeurng Lim', '2014-10-24 03:54:08', 1, 0),
(2, 'Network Administrator', NULL, '2024-10-13 20:54:49', '2024-10-13 21:10:03', 'N001', 'San SokVisal', '2014-10-24 03:54:49', 2, 0),
(3, 'Introduction to Linux OS', NULL, '2024-10-13 20:55:08', '2024-10-13 21:10:16', 'LN001', 'Rin Tino', '2014-10-24 03:55:08', 3, 0),
(4, 'System Analysis', NULL, '2024-10-13 20:55:26', '2024-10-13 21:10:24', 'S001', 'Sou Sopheap', '2014-10-24 03:55:26', 4, 0),
(5, 'Client Server Application Dev', NULL, '2024-10-13 20:55:58', '2024-10-13 21:04:34', 'S001', 'You Cholamony', '2014-10-24 03:55:58', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_types`
--

DROP TABLE IF EXISTS `book_types`;
CREATE TABLE IF NOT EXISTS `book_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_writers`
--

DROP TABLE IF EXISTS `book_writers`;
CREATE TABLE IF NOT EXISTS `book_writers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

DROP TABLE IF EXISTS `borrows`;
CREATE TABLE IF NOT EXISTS `borrows` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `student_idcard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_faculty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `student_idcard`, `student_name`, `student_gender`, `student_faculty`, `book_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'STU001', 'Dara', 'Male', 'Computer Science', 1, NULL, '2024-10-13 21:04:12', '2024-10-13 21:04:12'),
(2, 'STU002', 'Prathna', 'Female', 'Account', 2, NULL, '2024-10-13 21:10:03', '2024-10-13 21:10:03'),
(3, 'STU004', 'Bunna', 'Male', 'Information Technology', 3, NULL, '2024-10-13 21:10:16', '2024-10-13 21:10:16'),
(4, 'STU005', 'Kunthea', 'Female', 'Human Resources', 4, NULL, '2024-10-13 21:10:24', '2024-10-13 21:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

DROP TABLE IF EXISTS `libraries`;
CREATE TABLE IF NOT EXISTS `libraries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `checkout_date` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `checkout_date`, `deleted_at`, `created_at`, `updated_at`, `student_id`) VALUES
(1, NULL, NULL, '2024-10-13 21:01:31', '2024-10-13 21:01:31', 2),
(2, NULL, NULL, '2024-10-13 21:01:58', '2024-10-13 21:01:58', 3),
(3, NULL, NULL, '2024-10-13 21:02:48', '2024-10-13 21:02:48', 4),
(4, NULL, NULL, '2024-10-13 21:03:17', '2024-10-13 21:03:17', 5),
(5, NULL, NULL, '2024-10-13 21:03:37', '2024-10-13 21:03:37', 6);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_05_060057_create_students_table', 1),
(5, '2024_10_05_060112_create_books_table', 1),
(6, '2024_10_05_060120_create_book_types_table', 1),
(7, '2024_10_05_060139_create_book_writers_table', 1),
(8, '2024_10_05_060150_create_authors_table', 1),
(9, '2024_10_05_060208_create_faculties_table', 1),
(10, '2024_10_05_060334_create_libraries_table', 1),
(11, '2024_10_07_034340_add_column_to_books_table', 1),
(12, '2024_10_08_043814_add_column_borrow_id_to_books_table', 1),
(13, '2024_10_08_050639_add_column_status_to_books_table', 1),
(14, '2024_10_12_060751_add_column_to_students_table', 1),
(15, '2024_10_14_035940_add_column_student_id_to_libraries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GBktG7NtjrfQINWjRCsMkbdoCEdOA9nf3BWVRFaw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSTVPc0JOZmxvTkR3cTF4N2k4c0xuUTdmWUF1SVZsb2Ryb3BrNk96aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJ0eXBlIjtpOjE7czo1OiJsb2dpbiI7czoxNzoibWFuYWdlckBnbWFpbC5jb20iO30=', 1728879030);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `pob` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `library_id` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `dob`, `pob`, `phone`, `library_id`, `deleted_at`, `created_at`, `updated_at`, `faculty`, `id_card`) VALUES
(2, 'Dara', 'Male', NULL, NULL, NULL, 0, NULL, '2024-10-13 21:01:31', '2024-10-13 21:01:31', 'Computer Science', 'STU001'),
(3, 'Prathna', 'Female', NULL, NULL, NULL, 0, NULL, '2024-10-13 21:01:58', '2024-10-13 21:01:58', 'Account', 'STU002'),
(4, 'Cheata', 'Female', NULL, NULL, NULL, 0, NULL, '2024-10-13 21:02:48', '2024-10-13 21:02:48', 'Human Resources', 'STU003'),
(5, 'Bunna', 'Male', NULL, NULL, NULL, 0, NULL, '2024-10-13 21:03:17', '2024-10-13 21:03:17', 'Information Technology', 'STU004'),
(6, 'Kunthea', 'Female', NULL, NULL, NULL, 0, NULL, '2024-10-13 21:03:37', '2024-10-13 21:03:37', 'Human Resources', 'STU005');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 'manager@gmail.com', 1, NULL, '$2y$12$Bb.9wxMIIYZDBbYqmmBTMekXhyoCnq72b6d1FZREOL3fmBBIzmcH6', NULL, '2024-10-13 20:51:42', '2024-10-13 20:51:42'),
(2, 'Supervisor', 'supervisor@gmail.com', 0, NULL, '$2y$12$ETN8v2QMA1x914ShWZ/so.oQkd.3A5IT/QP.vh/orqVM.5dBUBLrC', NULL, '2024-10-13 20:52:36', '2024-10-13 20:52:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
