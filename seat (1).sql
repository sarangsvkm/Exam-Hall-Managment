-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 12:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seat`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `id` int(100) NOT NULL,
  `assignment_id` int(60) DEFAULT NULL,
  `exam_id` int(50) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `room_id` int(50) DEFAULT NULL,
  `student_id` int(50) DEFAULT NULL,
  `rollnumber` varchar(50) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotments`
--

INSERT INTO `allotments` (`id`, `assignment_id`, `exam_id`, `exam_date`, `start_time`, `end_time`, `room_id`, `student_id`, `rollnumber`, `created_at`, `updated_at`) VALUES
(16, 45, 5, '2003-10-22', '01:25', '13:32', 11, 21, '672', '2022-04-04 10:22:30', '2022-04-04 10:22:30'),
(17, 46, 5, '2003-10-22', '01:25', '13:32', 10, 22, '47', '2022-04-04 10:24:28', '2022-04-04 10:24:28'),
(18, 47, 5, '2003-10-22', '01:25', '13:32', 10, 24, '117', '2022-04-04 10:25:12', '2022-04-04 10:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(60) NOT NULL,
  `group_id` int(50) DEFAULT NULL,
  `type_id` int(60) DEFAULT NULL,
  `subject_id` int(50) DEFAULT NULL,
  `exam_id` int(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `group_id`, `type_id`, `subject_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(45, 2, 3, 10, 5, '2022-04-04 04:52:30', '2022-04-04 04:52:30'),
(46, 2, 2, 10, 5, '2022-04-04 04:54:28', '2022-04-04 04:54:28'),
(47, 7, 2, 11, 5, '2022-04-04 04:55:12', '2022-04-04 04:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(60) NOT NULL,
  `group_id` int(50) DEFAULT NULL,
  `subject_id` int(50) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `start_time` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `group_id`, `subject_id`, `exam_date`, `start_time`, `end_time`, `name`, `created_at`, `updated_at`) VALUES
(5, 2, 10, '2003-10-22', '01:25', '13:32', '1st Semester Examination', '2022-03-31 10:04:56', '2022-03-31 04:34:56'),
(6, 5, 14, '1979-05-15', '09:49', '21:56', '2nd Semester Examination', '2022-03-31 04:34:41', '2022-03-31 04:34:41'),
(7, 2, 10, '1987-07-03', '06:07', '01:28', '5th Semester Examination', '2022-03-31 10:06:04', '2022-03-31 04:36:04'),
(8, 2, 12, '1975-08-15', '03:17', '10:44', '3rd Semester Examination', '2022-03-31 04:35:35', '2022-03-31 04:35:35'),
(9, 2, 12, '2004-01-24', '13:40', '09:37', '4th Semester Examination', '2022-03-31 04:35:53', '2022-03-31 04:35:53'),
(10, 2, 12, '1990-11-29', '07:58', '07:04', '6th Semester Examination', '2022-03-31 04:36:23', '2022-03-31 04:36:23'),
(11, 5, 12, '1995-01-17', '13:45', '16:17', '7th Semester Examination', '2022-03-31 04:37:02', '2022-03-31 04:37:02'),
(12, 7, 12, '2008-03-08', '23:11', '03:16', '8th Semester Examination', '2022-03-31 04:37:50', '2022-03-31 04:37:50');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(30) NOT NULL,
  `classname` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `classname`, `created_at`, `updated_at`) VALUES
(2, 'Meahanical', '2022-03-28 23:03:53', '2022-03-29 02:45:22'),
(5, 'Electronics and Communication', '2022-03-28 23:04:25', '2022-03-28 23:04:25'),
(6, 'Computer Sciences', '2022-03-28 23:04:36', '2022-03-29 02:45:56'),
(7, 'Civil', '2022-03-29 02:46:47', '2022-03-29 02:46:47'),
(8, 'Electrical', '2022-03-29 02:47:14', '2022-03-29 02:47:14');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `type_id` int(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  `strenght` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `type_id`, `name`, `strenght`, `created_at`, `updated_at`) VALUES
(3, 5, 'Main Block', '90', '2022-03-31 04:42:39', '2022-03-31 05:11:02'),
(4, 4, 'ECE', '20', '2022-03-31 04:43:01', '2022-03-31 05:07:43'),
(5, 4, 'CSE', '20', '2022-03-31 04:43:23', '2022-03-31 05:07:14'),
(6, 4, 'CE', '20', '2022-03-31 05:08:54', '2022-03-31 05:08:54'),
(7, 4, 'ME', '20', '2022-03-31 05:09:12', '2022-03-31 05:09:12'),
(8, 4, 'EEE', '20', '2022-03-31 05:09:42', '2022-03-31 05:09:42'),
(9, 4, 'PE', '20', '2022-03-31 05:09:56', '2022-03-31 05:09:56'),
(10, 2, 'Main Block', '80', '2022-03-31 05:10:30', '2022-03-31 05:10:47'),
(11, 3, 'ECE', '20', '2022-03-31 05:11:37', '2022-03-31 05:11:37'),
(12, 3, 'ME', '20', '2022-03-31 05:12:05', '2022-03-31 05:12:05'),
(13, 3, 'CSE', '20', '2022-03-31 05:12:20', '2022-03-31 05:12:20'),
(14, 3, 'PE', '20', '2022-03-31 05:13:55', '2022-03-31 05:13:55'),
(15, 3, 'EEE', '20', '2022-03-31 05:14:40', '2022-03-31 05:14:40'),
(16, 3, 'CE', '20', '2022-03-31 05:15:11', '2022-03-31 05:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `semester` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `sfname` varchar(30) NOT NULL,
  `slname` varchar(30) NOT NULL,
  `group_id` varchar(30) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sgender` varchar(30) NOT NULL,
  `sdob` date NOT NULL,
  `scontact` int(50) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `saddress` varchar(50) NOT NULL,
  `created_at` varchar(300) DEFAULT NULL,
  `updated_at` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `rollnumber`, `sfname`, `slname`, `group_id`, `semail`, `sgender`, `sdob`, `scontact`, `user_id`, `saddress`, `created_at`, `updated_at`) VALUES
(20, '135', 'Sebastian', 'Christen', '5', 'posykuvisy@mailinator.com', 'Female', '2001-08-01', 981, '1', 'Piper', '2022-03-31 09:27:22', '2022-03-31 09:27:22'),
(21, '672', 'Paki', 'Roanna', '2', 'wyxefis@mailinator.com', 'Female', '1989-04-25', 805, '1', 'Aspen', '2022-03-31 09:28:06', '2022-03-31 09:28:06'),
(22, '47', 'Linus', 'Sierra', '2', 'sunomaval@mailinator.com', 'Female', '1970-09-20', 961, '1', 'Keaton', '2022-03-31 09:28:27', '2022-03-31 09:28:27'),
(23, '455', 'Quin', 'Kalia', '5', 'myrovy@mailinator.com', 'Female', '1977-02-01', 443, '1', 'Adara', '2022-03-31 09:28:44', '2022-03-31 09:28:44'),
(24, '117', 'Ginger', 'Genevieve', '7', 'vacux@mailinator.com', 'Male', '1993-10-30', 814, '1', 'Reed', '2022-03-31 09:28:57', '2022-03-31 09:28:57'),
(25, '166', 'Amy', 'Brenna', '6', 'jyrynoqob@mailinator.com', 'Female', '2021-03-03', 161, '1', 'Jasmine', '2022-03-31 09:29:06', '2022-03-31 09:29:06'),
(26, '517', 'Jemima', 'Hu', '5', 'cynanir@mailinator.com', 'Male', '2007-01-13', 692, '1', 'Germane', '2022-03-31 09:29:20', '2022-03-31 09:29:20'),
(27, '573', 'Joelle', 'Mason', '2', 'fozola@mailinator.com', 'Male', '2006-03-19', 219, '1', 'Wang', '2022-03-31 09:30:01', '2022-03-31 09:30:01'),
(28, '798', 'Hunter', 'Paula', '8', 'quhehik@mailinator.com', 'Female', '1997-02-03', 905, '1', 'Maggie', '2022-03-31 09:30:57', '2022-03-31 09:30:57'),
(29, '713', 'Alexander', 'Kadeem', '7', 'tijahago@mailinator.com', 'Male', '2003-04-25', 582, '1', 'Kaseem', '2022-03-31 09:31:18', '2022-03-31 09:31:18'),
(30, '479', 'Colorado', 'Illiana', '7', 'mujyfike@mailinator.com', 'Female', '2005-05-16', 636, '1', 'Chelsea', '2022-03-31 09:31:43', '2022-03-31 09:31:43'),
(31, '653', 'Cherokee', 'Lavinia', '7', 'sypoq@mailinator.com', 'Female', '2014-07-20', 854, '1', 'Charlotte', '2022-03-31 09:32:32', '2022-03-31 09:32:32'),
(32, '722', 'Guy', 'Lynn', '2', 'wizizo@mailinator.com', 'Male', '1986-08-23', 847, '1', 'Chloe', '2022-03-31 09:33:41', '2022-03-31 09:33:41'),
(33, '28', 'Kiara', 'Lev', '7', 'ducole@mailinator.com', 'Female', '1975-09-11', 846, '1', 'Kalia', '2022-03-31 09:34:01', '2022-03-31 09:34:01'),
(34, '90', 'Kirk', 'Cally', '8', 'jemaxanuwe@mailinator.com', 'Male', '1984-07-12', 177, '1', 'Helen', '2022-03-31 09:34:10', '2022-03-31 09:34:10'),
(35, '569', 'Amanda', 'Jeremy', '6', 'dulyfuf@mailinator.com', 'Male', '2017-03-03', 474, '1', 'Alvin', '2022-03-31 09:34:30', '2022-03-31 09:34:30'),
(36, '87', 'Melodie', 'Jaquelyn', '5', 'fyzapakuda@mailinator.com', 'Male', '2013-08-23', 618, '1', 'Ariel', '2022-03-31 09:36:36', '2022-03-31 09:36:36'),
(37, '931', 'Ursa', 'Justine', '8', 'sivomawy@mailinator.com', 'Female', '1977-11-11', 461, '1', 'Signe', '2022-03-31 09:36:43', '2022-03-31 09:36:43'),
(38, '461', 'Justine', 'Judith', '7', 'vaza@mailinator.com', 'Male', '1973-08-21', 9, '1', 'Clinton', '2022-03-31 09:36:58', '2022-03-31 09:36:58'),
(39, '124', 'Tanya', 'Paki', '7', 'zytugav@mailinator.com', 'Female', '1982-11-03', 561, '1', 'Drake', '2022-03-31 09:37:05', '2022-03-31 09:37:05'),
(40, '865', 'Ciara', 'Judah', '8', 'rologiked@mailinator.com', 'Female', '1994-04-15', 598, '1', 'Kirsten', '2022-03-31 09:37:23', '2022-03-31 09:37:23'),
(41, '7', 'Ali', 'Cleo', '6', 'xobi@mailinator.com', 'Male', '1984-12-31', 159, '1', 'Larissa', '2022-03-31 09:37:35', '2022-03-31 09:37:35'),
(42, '981', 'Neil', 'Leilani', '8', 'xupi@mailinator.com', 'Female', '1988-05-12', 857, '1', 'Gay', '2022-03-31 09:37:51', '2022-03-31 09:37:51'),
(43, '863', 'Melyssa', 'Jaime', '6', 'vinovav@mailinator.com', 'Female', '1988-06-23', 426, '1', 'Cadman', '2022-03-31 09:38:22', '2022-03-31 09:38:22'),
(44, '3', 'Cain', 'Quincy', '2', 'xuxikakol@mailinator.com', 'Female', '2010-10-30', 463, '1', 'Hayley', '2022-03-31 09:38:29', '2022-03-31 09:38:29'),
(45, '3', 'Cain', 'Quincy', '2', 'xuxikakol@mailinator.com', 'Female', '2010-10-30', 463, '1', 'Hayley', '2022-03-31 09:38:58', '2022-03-31 09:38:58'),
(46, '542', 'Morgan', 'Alika', '8', 'lavuxa@mailinator.com', 'Female', '2018-08-03', 963, '1', 'Garrett', '2022-03-31 09:39:19', '2022-03-31 09:39:19'),
(47, '287', 'Alice', 'Lamar', '5', 'qejecuciny@mailinator.com', 'Female', '1996-06-30', 934, '1', 'Deborah', '2022-03-31 09:39:50', '2022-03-31 09:39:50'),
(48, '441', 'Scott', 'Eaton', '5', 'vaciga@mailinator.com', 'Female', '2020-11-04', 362, '1', 'Norman', '2022-03-31 09:40:09', '2022-03-31 09:40:09'),
(49, '747', 'Felix', 'Nash', '5', 'vipelaz@mailinator.com', 'Female', '2014-02-28', 292, '1', 'Mara', '2022-03-31 09:40:29', '2022-03-31 09:40:29'),
(50, '106', 'Shay', 'Jakeem', '7', 'gatepowedy@mailinator.com', 'Male', '1984-01-14', 109, '1', 'Keith', '2022-03-31 09:40:37', '2022-03-31 09:40:37'),
(51, '842', 'Aiko', 'Keiko', '6', 'xuqipeb@mailinator.com', 'Female', '1985-05-18', 65, '1', 'Lara', '2022-03-31 09:41:15', '2022-03-31 09:41:15'),
(52, '691', 'Flynn', 'Phyllis', '7', 'rohygofe@mailinator.com', 'Female', '1992-07-20', 2, '1', 'Sigourney', '2022-03-31 09:41:30', '2022-03-31 09:41:30'),
(53, '655', 'Ashton', 'Nichole', '8', 'pewunix@mailinator.com', 'Female', '2006-12-23', 994, '1', 'Marcia', '2022-03-31 09:41:46', '2022-03-31 09:41:46'),
(54, '526', 'Colton', 'Magee', '2', 'loko@mailinator.com', 'Female', '2020-07-31', 552, '1', 'Pearl', '2022-03-31 09:41:57', '2022-03-31 09:41:57'),
(55, '534', 'Clare', 'Flavia', '5', 'pyfozyziti@mailinator.com', 'Female', '1994-05-23', 359, '1', 'Jaquelyn', '2022-03-31 09:42:39', '2022-03-31 09:42:39'),
(56, '247', 'Hedy', 'Maggy', '7', 'gaxa@mailinator.com', 'Male', '1990-07-22', 255, '1', 'Taylor', '2022-03-31 09:42:45', '2022-03-31 09:42:45'),
(57, '948', 'Octavia', 'Plato', '8', 'xyfutotyze@mailinator.com', 'Female', '1979-08-19', 405, '1', 'Cameran', '2022-03-31 09:42:53', '2022-03-31 09:42:53'),
(58, '362', 'Demetria', 'Alexis', '7', 'kuhygu@mailinator.com', 'Female', '2002-11-03', 225, '1', 'Sarah', '2022-03-31 09:43:01', '2022-03-31 09:43:01'),
(59, '97', 'Jael', 'Xerxes', '7', 'tucyn@mailinator.com', 'Female', '2017-03-02', 352, '1', 'Jelani', '2022-03-31 09:43:07', '2022-03-31 09:43:07'),
(60, '118', 'Daphne', 'Grant', '7', 'pugu@mailinator.com', 'Female', '1995-07-17', 708, '1', 'Caldwell', '2022-03-31 09:43:14', '2022-03-31 09:43:14'),
(61, '482', 'Yardley', 'Ori', '5', 'jyfazize@mailinator.com', 'Female', '2000-04-13', 597, '1', 'Eric', '2022-03-31 09:43:43', '2022-03-31 09:43:43'),
(62, '78', 'Kimberley', 'Rashad', '8', 'pirojovamu@mailinator.com', 'Male', '1981-11-29', 332, '1', 'Mark', '2022-03-31 09:43:51', '2022-03-31 09:43:51'),
(63, '22', 'Kareem', 'Justina', '5', 'fojuzyvi@mailinator.com', 'Male', '1984-08-31', 213, '1', 'Ashton', '2022-03-31 09:43:58', '2022-03-31 09:43:58'),
(64, '442', 'Kibo', 'Karyn', '7', 'zonexahele@mailinator.com', 'Female', '1974-11-02', 458, '1', 'Hoyt', '2022-03-31 09:44:10', '2022-03-31 09:44:10'),
(65, '816', 'Harding', 'Kevyn', '6', 'wipijagis@mailinator.com', 'Male', '2014-08-06', 596, '1', 'Jamal', '2022-03-31 09:44:33', '2022-03-31 09:44:33'),
(66, '717', 'Wyoming', 'Cora', '8', 'loso@mailinator.com', 'Female', '1995-12-19', 826, '1', 'Zephania', '2022-03-31 09:44:39', '2022-03-31 09:44:39'),
(67, '942', 'Daryl', 'Felicia', '8', 'vyfyh@mailinator.com', 'Female', '2013-11-15', 564, '1', 'Joan', '2022-03-31 09:45:00', '2022-03-31 09:45:00'),
(68, '86', 'Keith', 'Sasha', '6', 'nanade@mailinator.com', 'Female', '1974-01-11', 211, '1', 'April', '2022-03-31 09:45:08', '2022-03-31 09:45:08'),
(69, '836', 'Roth', 'Sybil', '5', 'mopagyni@mailinator.com', 'Male', '2013-10-20', 299, '1', 'Kaseem', '2022-03-31 09:45:14', '2022-03-31 09:45:14'),
(70, '957', 'Melvin', 'Kibo', '2', 'mehizu@mailinator.com', 'Female', '1988-01-14', 937, '1', 'Brianna', '2022-03-31 09:45:30', '2022-03-31 09:45:30'),
(71, '647', 'Sylvester', 'Meredith', '5', 'synori@mailinator.com', 'Female', '1986-06-12', 935, '1', 'Hoyt', '2022-03-31 09:45:46', '2022-03-31 09:45:46'),
(72, '881', 'Virginia', 'Alma', '6', 'cowasapug@mailinator.com', 'Male', '2004-06-23', 706, '1', 'Amy', '2022-03-31 09:45:58', '2022-03-31 09:45:58'),
(73, '649', 'Deanna', 'Lenore', '5', 'lexuzyr@mailinator.com', 'Male', '1974-01-06', 728, '1', 'Bree', '2022-03-31 09:46:22', '2022-03-31 09:46:22'),
(74, '425', 'Ignatius', 'Daria', '5', 'gaxyp@mailinator.com', 'Female', '2011-10-03', 410, '1', 'Theodore', '2022-03-31 09:46:31', '2022-03-31 09:46:31'),
(75, '144', 'Brock', 'Haley', '5', 'xyxe@mailinator.com', 'Male', '1984-07-30', 944, '1', 'Quail', '2022-03-31 09:46:40', '2022-03-31 09:46:40'),
(76, '317', 'Brett', 'Yetta', '5', 'sejenegy@mailinator.com', 'Male', '1984-07-10', 84, '1', 'Jaime', '2022-03-31 09:46:46', '2022-03-31 09:46:46'),
(77, '102', 'Tarik', 'Avye', '8', 'cacibi@mailinator.com', 'Female', '1977-04-17', 301, '1', 'Quinlan', '2022-03-31 09:46:51', '2022-03-31 09:46:51'),
(78, '172', 'Lucas', 'Colton', '2', 'fizadezej@mailinator.com', 'Male', '1991-06-15', 944, '1', 'Josephine', '2022-03-31 09:46:57', '2022-03-31 09:46:57'),
(79, '581', 'Cameran', 'Kuame', '2', 'viwyhys@mailinator.com', 'Male', '2007-06-07', 907, '1', 'Tatiana', '2022-03-31 09:47:02', '2022-03-31 09:47:02'),
(80, '226', 'Mikayla', 'Joel', '7', 'videweha@mailinator.com', 'Male', '1984-12-09', 1000, '1', 'Blossom', '2022-03-31 09:47:25', '2022-03-31 09:47:25'),
(81, '323', 'Pearl', 'Dakota', '7', 'xabedezome@mailinator.com', 'Female', '2015-12-11', 825, '1', 'Steel', '2022-03-31 09:47:45', '2022-03-31 09:47:45'),
(82, '370', 'Colton', 'Veda', '2', 'vigasaceq@mailinator.com', 'Male', '2011-04-26', 309, '1', 'Alice', '2022-03-31 09:47:52', '2022-03-31 09:47:52'),
(83, '883', 'Jane', 'August', '8', 'fuzuten@mailinator.com', 'Male', '1995-04-01', 50, '1', 'Cameran', '2022-03-31 09:48:01', '2022-03-31 09:48:01'),
(84, '658', 'Jakeem', 'Miriam', '8', 'senuzuna@mailinator.com', 'Male', '2014-02-28', 634, '1', 'Edward', '2022-03-31 09:48:13', '2022-03-31 09:48:13'),
(85, '96', 'Nolan', 'David', '2', 'qemiq@mailinator.com', 'Male', '2001-06-08', 418, '1', 'Selma', '2022-03-31 09:48:19', '2022-03-31 09:48:19'),
(86, '131', 'Daquan', 'Tyrone', '5', 'xenej@mailinator.com', 'Male', '2017-12-02', 903, '1', 'Yvette', '2022-03-31 09:48:26', '2022-03-31 09:48:26'),
(87, '498', 'Micah', 'Daryl', '6', 'jibiwiwyg@mailinator.com', 'Female', '1975-02-14', 846, '1', 'Azalia', '2022-03-31 09:48:32', '2022-03-31 09:48:32'),
(88, '321', 'Megan', 'Henry', '7', 'quzehadoc@mailinator.com', 'Female', '2009-11-09', 198, '1', 'Mary', '2022-03-31 09:48:38', '2022-03-31 09:48:38'),
(89, '732', 'Hedwig', 'Hannah', '2', 'hoby@mailinator.com', 'Male', '2002-12-06', 671, '1', 'Lynn', '2022-03-31 09:48:47', '2022-03-31 09:48:47'),
(90, '118', 'Ella', 'Miranda', '6', 'jidahyw@mailinator.com', 'Female', '2011-04-26', 743, '1', 'Bertha', '2022-03-31 09:48:54', '2022-03-31 09:48:54'),
(91, '918', 'Velma', 'Melodie', '5', 'zizos@mailinator.com', 'Male', '1970-06-10', 886, '1', 'Troy', '2022-03-31 09:48:59', '2022-03-31 09:48:59'),
(92, '82', 'Tanisha', 'George', '2', 'gaqub@mailinator.com', 'Male', '2007-02-28', 16, '1', 'Acton', '2022-03-31 09:49:06', '2022-03-31 09:49:06'),
(93, '254', 'Ciaran', 'Phyllis', '2', 'kodigavo@mailinator.com', 'Male', '2012-01-04', 387, '1', 'Lamar', '2022-03-31 09:49:13', '2022-03-31 09:49:13'),
(94, '907', 'Robin', 'Laith', '8', 'jozec@mailinator.com', 'Female', '1980-01-29', 486, '1', 'Oren', '2022-03-31 09:49:23', '2022-03-31 09:49:23'),
(95, '462', 'Aretha', 'Bianca', '8', 'zakyfi@mailinator.com', 'Male', '2001-04-12', 602, '1', 'Robin', '2022-03-31 09:49:30', '2022-03-31 09:49:30'),
(96, '108', 'Gail', 'Jeanette', '6', 'tifusyg@mailinator.com', 'Male', '2019-07-12', 621, '1', 'Coby', '2022-03-31 09:49:48', '2022-03-31 09:49:48'),
(97, '687', 'Velma', 'Ina', '5', 'tenafurase@mailinator.com', 'Female', '1981-05-19', 602, '1', 'Hedwig', '2022-03-31 09:50:23', '2022-03-31 09:50:23'),
(98, '687', 'Velma', 'Ina', '5', 'tenafurase@mailinator.com', 'Female', '1981-05-19', 602, '1', 'Hedwig', '2022-03-31 09:50:38', '2022-03-31 09:50:38'),
(99, '103', 'Lewis', 'Leila', '7', 'hypux@mailinator.com', 'Male', '1992-08-27', 785, '1', 'Quinn', '2022-03-31 09:50:52', '2022-03-31 09:50:52'),
(100, '515', 'Jenette', 'Minerva', '5', 'matafidyq@mailinator.com', 'Male', '2012-02-25', 602, '1', 'Quyn', '2022-03-31 09:51:03', '2022-03-31 09:51:03'),
(101, '947', 'Rae', 'Kenyon', '6', 'dyvane@mailinator.com', 'Female', '1979-09-02', 322, '1', 'George', '2022-03-31 09:51:10', '2022-03-31 09:51:10'),
(102, '63', 'Hilel', 'Clinton', '2', 'gadupocu@mailinator.com', 'Female', '2021-07-10', 57, '1', 'Baker', '2022-03-31 09:51:16', '2022-03-31 09:51:16'),
(103, '63', 'Hilel', 'Clinton', '2', 'gadupocu@mailinator.com', 'Female', '2021-07-10', 57, '1', 'Baker', '2022-03-31 09:51:28', '2022-03-31 09:51:28'),
(104, '818', 'Tobias', 'Nicholas', '5', 'mijazejoq@mailinator.com', 'Female', '2015-01-22', 515, '1', 'Chava', '2022-03-31 09:51:41', '2022-03-31 09:51:41'),
(105, '709', 'Rashad', 'Kessie', '8', 'husody@mailinator.com', 'Female', '2015-07-31', 362, '1', 'Leandra', '2022-03-31 09:51:49', '2022-03-31 09:51:49'),
(106, '463', 'Aristotle', 'Anne', '6', 'xigyc@mailinator.com', 'Female', '2019-01-11', 424, '1', 'Claudia', '2022-03-31 09:52:00', '2022-03-31 09:52:00'),
(107, '208', 'Odette', 'Iris', '2', 'qulaqu@mailinator.com', 'Male', '1982-03-30', 787, '1', 'Yolanda', '2022-03-31 09:52:08', '2022-03-31 09:52:08'),
(108, '408', 'Amber', 'Sopoline', '6', 'duhiwemyho@mailinator.com', 'Female', '2001-06-04', 58, '1', 'Rebekah', '2022-03-31 09:52:21', '2022-03-31 09:52:21'),
(109, '421', 'Justin', 'Prescott', '8', 'pynoneb@mailinator.com', 'Female', '1996-08-04', 328, '1', 'Gloria', '2022-03-31 09:52:38', '2022-03-31 09:52:38'),
(110, '519', 'Chantale', 'Lacy', '8', 'jehilar@mailinator.com', 'Male', '1985-12-25', 977, '1', 'Sacha', '2022-03-31 09:52:55', '2022-03-31 09:52:55'),
(111, '632', 'Kevyn', 'Carson', '8', 'kyxo@mailinator.com', 'Female', '1979-11-15', 11, '1', 'Harper', '2022-03-31 09:53:05', '2022-03-31 09:53:05'),
(112, '628', 'Jeremy', 'Sybil', '2', 'supoxinowe@mailinator.com', 'Female', '1997-08-16', 344, '1', 'Wendy', '2022-03-31 09:53:27', '2022-03-31 09:53:27'),
(113, '689', 'Allen', 'Martha', '2', 'rakixyjozo@mailinator.com', 'Male', '2019-07-13', 923, '1', 'Alana', '2022-03-31 09:53:47', '2022-03-31 09:53:47'),
(114, '930', 'Linus', 'Stewart', '6', 'nynapetaci@mailinator.com', 'Male', '2002-05-21', 1000, '1', 'Trevor', '2022-03-31 09:53:58', '2022-03-31 09:53:58'),
(115, '886', 'Geraldine', 'Adam', '2', 'tabewiwunu@mailinator.com', 'Male', '1998-08-26', 737, '1', 'Sierra', '2022-03-31 09:54:27', '2022-03-31 09:54:27'),
(116, '405', 'Pandora', 'Clark', '8', 'jopirydi@mailinator.com', 'Male', '1975-08-30', 344, '1', 'Cassidy', '2022-03-31 09:54:41', '2022-03-31 09:54:41'),
(117, '888', 'Celeste', 'Kristen', '7', 'vywu@mailinator.com', 'Female', '2020-11-06', 121, '1', 'Whilemina', '2022-03-31 09:55:08', '2022-03-31 09:55:08'),
(118, '1000', 'Kelsie', 'Yardley', '7', 'jyfelyh@mailinator.com', 'Female', '2014-06-16', 370, '1', 'Hermione', '2022-03-31 09:55:18', '2022-03-31 09:55:18'),
(119, '217', 'Dakota', 'Alexa', '8', 'dyfid@mailinator.com', 'Female', '1984-07-12', 47, '1', 'Michelle', '2022-03-31 09:57:40', '2022-03-31 09:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(30) NOT NULL,
  `group_id` int(60) DEFAULT NULL,
  `subjectname` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `group_id`, `subjectname`, `created_at`, `updated_at`) VALUES
(10, 2, 'Fluid', '2022-03-30 00:13:44', '2022-03-30 00:13:44'),
(11, 7, 'Mechanics', '2022-03-30 08:30:55', '2022-03-30 08:30:55'),
(12, 5, 'Control System', '2022-03-30 08:31:42', '2022-03-30 08:31:42'),
(13, 8, 'Power Management', '2022-03-30 08:32:04', '2022-03-30 08:32:04'),
(14, 6, 'SSOS', '2022-03-30 08:33:26', '2022-03-30 08:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(50) NOT NULL,
  `tfname` varchar(50) DEFAULT NULL,
  `tlname` varchar(50) DEFAULT NULL,
  `group_id` varchar(30) DEFAULT NULL,
  `subject_id` varchar(50) DEFAULT NULL,
  `temail` varchar(50) DEFAULT NULL,
  `tgender` varchar(50) DEFAULT NULL,
  `tdob` date DEFAULT NULL,
  `tcontact` varchar(300) DEFAULT NULL,
  `taddress` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tfname`, `tlname`, `group_id`, `subject_id`, `temail`, `tgender`, `tdob`, `tcontact`, `taddress`, `created_at`, `updated_at`) VALUES
(13, 'Addison', 'Hector', '6', '11', 'Ciara', 'Female', '1987-11-26', '172', 'Arden', '2022-03-31 04:29:01', '2022-03-31 04:29:01'),
(14, 'Vernon', 'Vera', '5', '13', 'Christen', 'Female', '1976-03-04', '907', 'Caesar', '2022-03-31 04:29:12', '2022-03-31 04:29:12'),
(15, 'Reed', 'Buckminster', '2', '11', 'Casey', 'Male', '1974-07-17', '264', 'Maggie', '2022-03-31 04:29:20', '2022-03-31 04:29:20'),
(16, 'Davis', 'Joan', '6', '11', 'Phoebe', 'Female', '1979-06-12', '222', 'Marshall', '2022-03-31 04:29:31', '2022-03-31 04:29:31'),
(17, 'India', 'Mary', '7', '10', 'Lillian', 'Male', '1989-10-26', '367', 'Rooney', '2022-03-31 04:29:38', '2022-03-31 04:29:38'),
(18, 'Amethyst', 'Kirsten', '5', '14', 'Zelda', 'Male', '1997-08-13', '709', 'Lavinia', '2022-03-31 04:29:50', '2022-03-31 04:29:50'),
(19, 'Ashely', 'Yuri', '8', '13', 'Emily', 'Female', '1983-11-25', '15', 'Brandon', '2022-03-31 04:29:55', '2022-03-31 04:29:55'),
(20, 'Rhona', 'Harper', '6', '10', 'Porter', 'Female', '1971-05-17', '150', 'Roanna', '2022-03-31 04:30:03', '2022-03-31 04:30:03'),
(21, 'Abbot', 'Paula', '8', '14', 'Elmo', 'Female', '1978-06-07', '465', 'Indigo', '2022-03-31 04:30:12', '2022-03-31 04:30:12'),
(22, 'Sarah', 'Jael', '5', '10', 'Bruce', 'Female', '2004-09-13', '398', 'Edward', '2022-03-31 04:30:35', '2022-03-31 04:30:35'),
(23, 'Colorado', 'Freya', '7', '13', 'Brynne', 'Male', '2020-12-26', '330', 'Stuart', '2022-03-31 04:30:50', '2022-03-31 04:30:50'),
(24, 'Riley', 'Hannah', '5', '14', 'Yvette', 'Female', '2006-12-19', '462', 'Justine', '2022-03-31 04:31:08', '2022-03-31 04:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(30) NOT NULL,
  `roomname` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `roomname`, `created_at`, `updated_at`) VALUES
(2, 'hall', '2022-03-30 08:06:34', '2022-03-30 08:06:34'),
(3, 'Lab', '2022-03-30 08:34:27', '2022-03-30 08:34:27'),
(4, 'Classroom', '2022-03-30 08:34:37', '2022-03-30 08:34:37'),
(5, 'Auditorium', '2022-03-30 08:34:51', '2022-03-30 08:34:51');

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
  `role` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rishabh', 'baijurishabh@gmail.com', NULL, '$2y$10$lTmiFisLOH4kHXLyGPkn5O541p15wpb6.Fd98o0jDIKHdKsFrkLi2', 'admin', NULL, '2022-03-26 02:03:43', '2022-03-26 02:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
