-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 08:27 AM
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
-- Database: `deparment_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `Roll_No` varchar(255) NOT NULL,
  `Reg_No` varchar(255) NOT NULL,
  `Session` varchar(255) DEFAULT NULL,
  `Admission_Challan_Draft` varchar(255) DEFAULT NULL,
  `Admission_Challan_Paid` varchar(255) DEFAULT NULL,
  `Admission_Challan_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_1_Draft` varchar(255) DEFAULT NULL,
  `Semester_1_Paid` varchar(255) DEFAULT NULL,
  `Semester_1_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_2_Draft` varchar(255) DEFAULT NULL,
  `Semester_2_Paid` varchar(255) DEFAULT NULL,
  `Semester_2_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_3_Draft` varchar(255) DEFAULT NULL,
  `Semester_3_Paid` varchar(255) DEFAULT NULL,
  `Semester_3_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_4_Draft` varchar(255) DEFAULT NULL,
  `Semester_4_Paid` varchar(255) DEFAULT NULL,
  `Semester_4_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_5_Draft` varchar(255) DEFAULT NULL,
  `Semester_5_Paid` varchar(255) DEFAULT NULL,
  `Semester_5_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_6_Draft` varchar(255) DEFAULT NULL,
  `Semester_6_Paid` varchar(255) DEFAULT NULL,
  `Semester_6_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_7_Draft` varchar(255) DEFAULT NULL,
  `Semester_7_Paid` varchar(255) DEFAULT NULL,
  `Semester_7_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Semester_8_Draft` varchar(255) DEFAULT NULL,
  `Semester_8_Paid` varchar(255) DEFAULT NULL,
  `Semester_8_Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`id`, `Name`, `fatherName`, `CNIC`, `Roll_No`, `Reg_No`, `Session`, `Admission_Challan_Draft`, `Admission_Challan_Paid`, `Admission_Challan_Status`, `Semester_1_Draft`, `Semester_1_Paid`, `Semester_1_Status`, `Semester_2_Draft`, `Semester_2_Paid`, `Semester_2_Status`, `Semester_3_Draft`, `Semester_3_Paid`, `Semester_3_Status`, `Semester_4_Draft`, `Semester_4_Paid`, `Semester_4_Status`, `Semester_5_Draft`, `Semester_5_Paid`, `Semester_5_Status`, `Semester_6_Draft`, `Semester_6_Paid`, `Semester_6_Status`, `Semester_7_Draft`, `Semester_7_Paid`, `Semester_7_Status`, `Semester_8_Draft`, `Semester_8_Paid`, `Semester_8_Status`, `created_at`, `updated_at`) VALUES
(1, 'AYESHA NOREEN', 'Shahid Mehmood', '36300-0000000-1', 'CPE-23-01', '1', '2023-2027', '/storage/challans/CPE-23-01_admission_1734291671.pdf', '/storage/receipts/CPE-23-01/wHXSdTENlDdbupMGNGnNIijGzYldhpUkCeMIC2tI.pdf', 'Pending', '/storage/challans/CPE-23-01_semester_1_1734291865.pdf', '/storage/receipts/CPE-23-01/IDrTZYPFEODUJjDe7lIh6Sqq3AR1jWdo7ITQPH6D.pdf', 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 16:29:09'),
(2, 'MUHAMMAD RAZA', ' ', '36300-0000000-2', 'CPE-23-02', '2', '2023-2027', '/storage/challans/CPE-23-02_admission_1734332741.pdf', NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-16 02:05:43'),
(3, 'ANIQA IMRAN', ' ', '36300-0000000-3', 'CPE-23-03', '3', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(4, 'UQAAB HAIDER', ' ', '36300-0000000-4', 'CPE-23-04', '4', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(5, 'BUSHRA KANOOZ KHAN', ' ', '36300-0000000-5', 'CPE-23-05', '5', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(6, 'MUHAMMAD RIZWAN', ' ', '36300-0000000-6', 'CPE-23-06', '6', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(7, 'ALEENA KHAN', ' ', '36300-0000000-7', 'CPE-23-08', '7', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(8, 'EISHA ARAIN', ' ', '36300-0000000-8', 'CPE-23-09', '8', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(9, 'FAHAD USMAN', ' ', '36300-0000000-9', 'CPE-23-10', '9', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(10, 'MUHAMMAD MEHDI', ' ', '36300-0000000-10', 'CPE-23-11', '10', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(11, 'MUHAMMAD UMER', ' ', '36300-0000000-11', 'CPE-23-12', '11', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(12, 'MUHAMMAD ALI', ' ', '36300-0000000-12', 'CPE-23-13', '12', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(13, 'ALIZA NOREEN', ' ', '36300-0000000-13', 'CPE-23-14', '13', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(14, 'ALI SACHAL ABDULLAH', ' ', '36300-0000000-14', 'CPE-23-15', '14', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(15, 'AQIB HUSSAIN', ' ', '36300-0000000-15', 'CPE-23-16', '15', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(16, 'MUHAMMAD SAMI ULLAH', ' ', '36300-0000000-16', 'CPE-23-17', '16', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(17, 'HAFIZ MUHAMMAD ZARYAB', ' ', '36300-0000000-17', 'CPE-23-18', '17', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(18, 'MUHAMMAD REHAN', ' ', '36300-0000000-18', 'CPE-23-19', '18', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(19, 'ANAM BIBI', ' ', '36300-0000000-19', 'CPE-23-20', '19', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(20, 'ESHA ASLAM', ' ', '36300-0000000-20', 'CPE-23-21', '20', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(21, 'AWAIS ALI', ' ', '36300-0000000-21', 'CPE-23-22', '21', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(22, 'MUHAMMAD SHOAIB', ' ', '36300-0000000-22', 'CPE-23-23', '22', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(23, 'NIDA KANWAL', ' ', '36300-0000000-23', 'CPE-23-24', '23', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(24, 'MUHAMMAD NOUMAN', ' ', '36300-0000000-24', 'CPE-23-25', '24', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(25, 'MUBASHIR HASSAN', ' ', '36300-0000000-25', 'CPE-23-26', '25', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(26, 'MUHAMMAD UMAR', ' ', '36300-0000000-26', 'CPE-23-27', '26', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(27, 'RIZWAN ALI', ' ', '36300-0000000-27', 'CPE-23-28', '27', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(28, 'HANIA KHAN', ' ', '36300-0000000-28', 'CPE-23-29', '28', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(29, 'MUHAMMAD MUJAHID', ' ', '36300-0000000-29', 'CPE-23-30', '29', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(30, 'HASSAN GHANI', ' ', '36300-0000000-30', 'CPE-23-31', '30', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(31, 'YUSRA MARYAM', ' ', '36300-0000000-31', 'CPE-23-32', '31', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(32, 'NOOR UL AIN FATIMA', ' ', '36300-0000000-32', 'CPE-23-33', '32', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(33, 'ABID ALI', ' ', '36300-0000000-33', 'CPE-23-34', '33', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(34, 'RIAZ AHMAD', ' ', '36300-0000000-34', 'CPE-23-35', '34', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(35, 'MUHAMMAD AWAIS', ' ', '36300-0000000-35', 'CPE-23-36', '35', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(36, 'SAIFULLAH', ' ', '36300-0000000-36', 'CPE-23-37', '36', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25'),
(37, 'ALISHBA ARIF', ' ', '36300-0000000-37', 'CPE-23-38', '37', '2023-2027', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Pending', '2024-12-15 14:40:25', '2024-12-15 14:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Page` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Body` text NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Link_text` text NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `Page`, `Section`, `Title`, `Body`, `Link`, `Link_text`, `picture_url`, `created_at`, `updated_at`) VALUES
(1, 'Welcome', 'chairman-message', 'Chairman\'s Message', 'Welcome to the Department of Computer Engineering at Bahauddin Zakariya University.\n                        As the chairman, I am proud to lead a team dedicated to providing a quality education\n                        and fostering innovation in the field of computer engineering. Our curriculum is designed\n                        to equip students with the skills and knowledge necessary to excel in today\'s rapidly\n                        evolving technological landscape.\n                       \n                        We are committed to nurturing talent and encouraging research, collaboration, and\n                        community engagement. I invite you to explore our programs, participate in our events,\n                        and join us in our mission to shape the future of technology.\n                   ', '', '', 'https://profiles.bzu.edu.pk/uploads/images/36-imran.png', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(2, 'Welcome', 'dsa-message', 'Departmental Student Advisor\'s Message', 'Welcome to the Department of Computer Engineering at Bahauddin Zakariya University.\n                        As the DSA, I am proud to direct dedicated students to foster innovation in the field of computer\n                        engineering. Our curriculum is designed\n                        to equip students with the skills and knowledge necessary to excel in today\'s rapidly\n                        evolving technological landscape.\n                        <br><br>\n                        We are committed to nurturing talent and encouraging research, collaboration, and\n                        community engagement. I invite you to explore our programs, participate in our events,\n                        and join us in our mission to shape the future of technology.', '', '', 'https://profiles.bzu.edu.pk/uploads/images/38-pic.jpg', '2024-12-12 11:15:05', '2024-12-14 09:28:47'),
(3, 'Welcome', 'events', '20 Years of Excellence', 'This year we celebrated our 20 years of excellence along with HEC Level 2\n                                accredition with pride.', 'https://www.facebook.com/share/p/1EQLebpRNe/', '', 'images/20yrs.jpeg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(4, 'Welcome', 'events', 'Bone Fire 2023', '<br>We continued the legacy of organizing the warm-most Bone Fire in the\n                                chilling cold.<br><br>', 'https://www.facebook.com/share/p/15KkQpvmJk/', '', 'images/bonefire.jpeg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(5, 'Welcome', 'events', 'Sports Galla 2024', '<br>Our brilliant students performed the best in the inter-departmental\n                                Sports Galla 2024.', 'https://www.facebook.com/share/p/18FFXEqoLk/', '', 'images/SportsGala.jpeg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(6, 'Welcome', 'news', 'HEC issued NOC for<br> MSc. Computer Engineering', 'HEC has granted NOC for launching of MSc. Computer Engineering program in\n                                the Department of Computer Engineering at BZU, Multan w.e.f Fall 2024.', 'https://www.facebook.com/share/p/1EtQpP2zHR/', '', 'images/noc.jpeg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(7, 'Welcome', 'news', 'HEC accredits Department of <br>Computer Engineering, <br>BZU Multan\n                                with Level 2', '<br>HEC has granted the Level 2 Accredition to the Department of Computer\n                                Engineering at Bahauddin Zakariya University, Multan.<br> This adds value to our degree that\n                                is also accredited by Washginton DC, the United States of America.<br><br> ', 'https://www.facebook.com/share/p/1KmxessJW9/', '', 'images/acredition.jpg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(8, 'Welcome', 'news', 'Plantation Drive:<br>Grow A Tree', 'Our passionate and youthful minds drove a Departmental Campaign for\n            Plantation and planted trees with their own donations.<br>Our Students showed remarkable\n            management and leadership skill throught the campaign. ', 'https://www.facebook.com/share/p/1XFYQaLrCq/', '', 'images/plantation.jpeg', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(9, 'about-cpe', 'introduction', 'Our Journey', 'Established in 2004 under the Faculty of Engineering and Technology, the Department of Computer\n                       Engineering at Bahauddin Zakariya University, Multan, has been at the forefront of technological\n                       education in Pakistan.<br>\n                       Our programs are accredited by the <a href=\"https://www.pec.org.pk/\" target=\"_blank\">Pakistan\n                       Engineering Council (PEC)</a>, ensuring world-class education standards.', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(10, 'about-cpe', 'achievements', '<b>The Digital Revolution</b>', '<br>In this modern era, we\'ve witnessed rapid developments in Computer Engineering, both in hardware and\n                       software. From home robotics to advanced operating systems, microprocessors, and supercomputers with\n                       massive computational capabilities, our field is ever-evolving.', '#', 'Explore Our Labs', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(11, 'about-cpe', 'impact', '<b>Our Impact</b>', '<br>Computer Engineers are the architects behind the technology we use daily. From personal computers\n                       and smartphones to robotics, we\'re responsible for designing and developing tools that enhance\n                       our lives and productivity.<br>', '/#alumi', 'Meet Our Alumni', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(12, 'about-cpe', 'programs', '<b>Our Programs</b>', '<ul><br>\n                            <li>B.Sc. in Computer Engineering</li>\n                            <li>M.Sc. in Computer Engineering (MS Graduate Program)</li>\n                            <li>Ph.D. in Computer Engineering (Coming Soon)</li>\n                       </ul>', '/Programs', 'Apply Now', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(13, 'about-cpe', 'facilities', '<b>Our Facilities</b>', '<br>We provide state-of-the-art facilities to our students:\n                       <ul>\n                            <li>Multimedia-equipped classrooms</li>\n                            <li>Campus-wide WiFi</li>\n                            <li>Well-equipped Computer laboratories</li>\n                       </ul>', 'http://bit.ly/3Bz5xt5', 'Virtual Tour', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(14, 'AboutUni', 'history', 'Our History', '<p>Multan has always remained a centre of excellence in education. Hazrat Bahauddin Zakariya (1172 - 1262 A.D.), a Muslim religious scholar and saint, established a school of higher learning in theology in Multan; where scholars from all over the world came for studies and research.</p>\n                       <p>The University of Multan was established in 1975 by an Act of the Punjab Legislative Assembly. To pay homage to the Great Saint, the name was changed from University of Multan to Bahauddin Zakariya University in 1979.</p>', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(15, 'AboutUni', 'objectives', '<b>Our Objectives</b>', '<br><p>The main objective of the University is to provide facilities of higher education and research to the population of the Southern region of the Punjab.</p>\n                       <p>The University fulfils three functions: teaching, affiliation and examination.</p>', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(16, 'AboutUni', 'goals', '<b>Our Goals</b>', '<br><p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>\n                       <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(17, 'AboutUni', 'vision', '<b>Our Vision</b>', '<br><p>Bahauddin Zakariya University, Multan as flagship Institution of the South Punjab imparts informed education at all levels of Undergraduate to PhD by diverse world-views and paradigms, grounded in diverse traditions and indigenous culture and heritage.</p>\n                       <p>Make their Graduates leading luminaries with professional approach to preserve, disseminate and execute knowledge.</p>', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(18, 'AboutUni', 'mission', '<b>Our Mission</b>', '<p>To be an internationally acclaimed University, recognized for excellence in teaching, research and outreach; provide the highest quality education to students, nurture their talent, promote intellectual growth and shape their personal development.</p>\n                       <p>To enhance our reputation as a world-class teaching and research institution which is recognized for its innovation, excellence and discovery, and attracts the best students and staff.</p>', '', '', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(19, 'AboutUni', 'vc_message', 'Vice Chancellor\'s Message', '<p>My dear students,</p>\n                       <p>I am fully convinced that you are the future architects of a prosperous Pakistan. If you want a thriving Pakistan then it has to be a knowledge-based Pakistan. You therefore enter the University to seek knowledge and leave to disseminate knowledge. In today\'s world high expectations and demands are placed on the centres of higher education. The 21st century calls for new approaches to learning and innovative thinking. The acquisition of specific knowledge not just about the discipline that they belong to but also about the environment, health and citizenship will hone their ethical values and attitudes.</p>\n                       <p>In our rapidly changing and interdependent world, the universities not only have to ensure that students acquire solid skills in basic subjects, but also that they become responsible local and global citizens, at ease with new technologies and able to make informed decisions about local and global challenges. Going global is the recipe to international peace, harmony and prosperity.</p>\n                       <p>Furthermore, remember one thing; education and all its forms crown those who nurture her. Character building is an important aspect of education. It is our social capital. Strength of character includes faith, discipline, tolerance, patience, sharing, caring and compassion. Development of these qualities in our institutions will help us reduce trust deficit and intolerance which prevails in our society today.</p>\n                       <p>Let us therefore, work together to build knowledge-based prosperous Pakistan.</p>', 'mailto:vc@bzu.edu.pk', 'Contact VC', 'images/vc.png', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(20, 'Programs', 'bsc_computer_engineering', 'B.Sc. Computer Engineering', '<p class=\'mb-2 text-center\'>Undergraduate Program</p>\n                       <h3 class=\'text-info\'>Eligibility:</h3>\n                       <p>\n                           An applicant for admission to any of the B.Sc. Engineering Degree Program offered by the University must fulfill the following requirements:<br><br>\n                           a) He should have obtained at least <b>60% marks</b> in the examination on the basis of which he seeks admission.<br>\n                           Marks for Hafiz-e-Quran and entry test where applicable shall be added only for determination of merit.<br><br>\n                           b) He should be a bonafide resident of the area from where he seeks admission.<br><br>\n                           c) He should meet standards of physique and eyesight laid down in the medical certificate.<br><br>\n                           d) He must have appeared in the Entry Test for Session 2022 arranged by the University of Engineering & Technology Lahore, Pakistan or BZU Test for Session 2023.\n                       </p><br>\n                       <h3 class=\'text-info\'>Merit Determination:</h3>\n                      <br> <p>\n                           The comparative merit of applicants will be determined on the basis of adjusted admission marks obtained by them in the above examinations.<br><br>\n                           A) For applicant with H.S.S.C. (Pre Engineering Part-1) as the highest qualification:<br>\n                           i) H.S.S.C. (Pre Engineering Part-I) or equivalent including Hifz-e-Quran marks. 70%<br>\n                           ii) Entry Test marks 30%<br><br>\n                           B) For applicants with B.Sc. as the highest qualification:<br>\n                           i) B.Sc. Marks 35%<br>\n                           ii) H.S.S.C. or equivalent exam including Hifz-e-Quran marks. 35%<br>\n                           iii) Entry Test Marks 30%<br><br>\n                           C) For Applicants having Diploma of Associate Engineer as the Highest Qualification:<br>\n                           i) Diploma of Associate Engineer including Hifz-e-Quran marks 70%<br>\n                           ii) Entry Test Marks 30%<br><br>\n                           Criteria may be changed as per approval from the online academic committee BZU or further guidelines provided by Honourable Court or PEC on a later stage.\n                       </p>', '#', 'Apply Now', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05'),
(21, 'Programs', 'msc_computer_engineering', 'M.Sc. Computer Engineering', '<p class=\'mb-2 text-center\'>Graduate (MS) Program</p>\n                       <h3 class=\'text-info\'>Eligibility:</h3>\n                       <p>\n                           1. Four years BS/BE/BSc Degree in Computer Engineering, Software Engineering, Electronics Engineering, Computer Systems Engineering, Telecommunication Engineering and Electrical Engineering with specialization in Computer/Electronics.<br><br>\n                           2. The applicant should have obtained at least 60% marks under Annual/Term system or CGPA 2.50 on the scale of 4.00 or equivalent marks in relevant undergraduate degree on the basis of which he/she seeks admission.<br><br>\n                           3. The applicant should have secured at least 50% marks in an Entry Test conducted by the department or GAT general.\n                       </p><br>\n                       <h3 class=\'text-info\'>Merit Determination:</h3>\n                       <p><br>\n                           Admissions for M.Sc. Computer Engineering will be carried out as per the university policy.\n                       </p>', '#', 'Apply Now', '', '2024-12-12 11:15:05', '2024-12-12 11:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ROLE` varchar(255) NOT NULL,
  `Faculty_ID` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Research Interests` varchar(255) NOT NULL,
  `Other_Information` varchar(255) NOT NULL,
  `picture_url` varchar(255) DEFAULT NULL,
  `cv_resume_url` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `google_scholar_url` varchar(255) DEFAULT NULL,
  `researchgate_url` varchar(255) DEFAULT NULL,
  `orcid_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Announcement` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `ROLE`, `Faculty_ID`, `Position`, `Qualification`, `Research Interests`, `Other_Information`, `picture_url`, `cv_resume_url`, `email`, `linkedin_url`, `facebook_url`, `twitter_url`, `google_scholar_url`, `researchgate_url`, `orcid_url`, `created_at`, `updated_at`, `Announcement`) VALUES
(1, 'Dr. Muhammad Imran Malik', 'admin', 'CPE-01-01', 'Associate Professor', 'Ph.D. (Information and Communication Engineering), Beijing Institute of Technology, Beijing, China (2013)', '', 'MANETS', 'https://profiles.bzu.edu.pk/uploads/images/36-imran.png', 'https://profiles.bzu.edu.pk/uploads/pdf/36-doc101.pdf', 'imranmalik@bzu.edu.pk', '', '', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(2, 'Dr. Muhammad Umar Chaudhry', 'admin', 'CPE-01-02', 'Assistant Professor', 'Ph.D. in Computer Engineering, Sungkyunkwan University, Suwon, South Korea (2014-2019)', 'Machine Learning, Artificial Intelligence, Feature Selection, Monte Carlo Tree Search, Heterogeneous Information Networks, Recommender Systems', 'Director Student Affairs (DSA)', 'https://profiles.bzu.edu.pk/uploads/images/38-pic.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/38-cv_dr._umar_bzu.pdf', 'umar.chaudhry@bzu.edu.pk', 'https://www.linkedin.com/in/muhammad-umar-chaudhry', '', '', 'https://scholar.google.com/citations?user=2YN9DwIAAAAJ&hl=en', 'https://www.researchgate.net/profile/Muhammad-Umar-Chaudhry-2', 'https://orcid.org/0000-0002-7287-2372', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(3, 'Dr. Muhammad Waqar Ashraf', 'admin', 'CPE-01-03', 'Assistant Professor', 'PhD', 'Computer Networks, Cloud Computing, Blockchain, Machine Learning, Internet of Things, Optical Networks', 'Incharge Examination', 'https://profiles.bzu.edu.pk/uploads/images/128-dr._waqar_ashraf_khan.jpeg', '', 'waqarashraf@bzu.edu.pk', '', '', '', 'https://scholar.google.com/citations?user=U_ndxmcAAAAJ&hl=en&oi=ao', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(4, 'Engr. Muhammad Wasiq', 'faculty', 'CPE-01-04', 'Assistant Professor', 'Master of Engineering (Information Technology)', 'Operating Systems, Microprocessor Technologies, Embedded Systems', '', 'https://profiles.bzu.edu.pk/uploads/images/823-pic_wasiq_sb.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/823-muhammad_wasiqs_cv.pdf', 'muhammad.wasiq@bzu.edu.pk', '', '', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(5, 'Engr. Muhammad Mohsin Bhatti', 'faculty', 'CPE-01-05', 'Assistant Professor', 'M.Sc. Telecommunication Engineering, MBA-HRM, LLB', 'Digital Transformation', 'Mind & Memory Trainer', 'https://profiles.bzu.edu.pk/uploads/images/51-mohsin_bhatti.png', '', 'mohsin.bhatti@bzu.edu.pk', 'https://www.linkedin.com/in/mohsin-bhatti-6a013110', 'https://www.facebook.com/mohsin.bhatti.1042/', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(6, 'Dr. Yasir Aziz', 'faculty', 'CPE-01-06', 'Assistant Professor', 'Ph.D. Electrical/Computer Engineering (IUB), M.S. Computer Engineering (U.E.T Lahore), B.Sc. Computer Systems Engineering (NFC-IET) Multan.', 'Computer Vision and Pattern Recognition', 'Software Engineer, IT Consultant, Algorithms Expert, Desktop & Web Application Developer', 'https://profiles.bzu.edu.pk/uploads/images/9-testing.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/38-cv_dr._umar_bzu.pdf', 'engr.yasiraziz@bzu.edu.pk', '', '', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(7, 'Dr. Mudassir Khalil', 'faculty', 'CPE-01-07', 'Assistant Professor', 'Ph.D. in Computer Science & Engineering', 'Artificial Intelligence, Machine Learning, Deep Learning', 'OBE In-charge Computer Engineering Department', 'storage/faculty/pictures/IPsf68IXQzF31wxfTiZrpMTcCcijV5mCZOPBkTvn.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/37-cv.pdf', 'mudassir.Khalil@bzu.edu.pk', 'https://linkedin.com/in/mudassirkhalil', 'https://facebook.com/mudassirkhalil', 'https://twitter.com/mudassirkhalil', 'https://scholar.google.com/citations?user=NvVcFWAAAAAJ&hl=en&oi=ao', 'https://researchgate.net/profile/Mudassir_Khalil', 'https://orcid.org/0000-0002-1825-0097', '2024-12-04 12:43:24', '2024-12-07 14:28:39', NULL),
(8, 'Engr. Dr.  Shahid Iqbal', 'faculty', 'CPE-01-08', 'Assistant Professor', 'PhD in Computer Systems Engineering, QUEST Nawab Shah. Masters of Engineering in Computer Systems, NED University of Engineering and Technology, Karachi, Pakistan.', 'Computer Communication and Networks, DBMS, WBSN, IoT, AI, ML', 'Building In Charge', 'https://profiles.bzu.edu.pk/uploads/images/55-shahid_iqbalw.png', 'https://profiles.bzu.edu.pk/uploads/pdf/55-shahid_iqbal_cv_for_profile.pdf', 'shahid.iqbal@bzu.edu.pk', 'https://www.linkedin.com/in/shahid-iqbal-5912732a9', 'https://www.facebook.com/profile.php?id=1836410114', '', 'https://scholar.google.com/citations?hl=en&user=LL8Y8O0AAAAJ', '', 'https://orcid.org/0009-0004-3443-3629', '2024-12-04 12:43:24', '2024-12-08 07:10:58', NULL),
(9, 'Engr. Mirza Khuram Baig', 'faculty', 'CPE-01-09', 'Lecturer', 'MS in Information and Communication Engineering, BIT, China (2013)', 'DIGITAL IMAGE PROCESSING AND ANALYSIS; COMPUTER VISION', '', 'https://profiles.bzu.edu.pk/uploads/images/50-kuram_foto.jpeg', '', 'engr.khurambaig@bzu.edu.pk', '', '', '', '', '', '5', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(10, 'Engr. Muhammad Baqer', 'faculty', 'CPE-01-10', 'Lecturer', 'M.Sc. Computer Systems Engineering.', 'Deep Learning, Artificial Neural Networks, Machine Learning, Pattern Recognition, Computer Vision, Cognitive Robotics, Artificial intelligence', 'FYDP Coordinator', 'https://profiles.bzu.edu.pk/uploads/images/39-baqer.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/39-cv_m.baqer.pdf', 'engr.baqer@bzu.edu.pk', '', '', '', 'https://scholar.google.com/citations?hl=en&view_op=list_works&gmla=ALUCkoV2oszzTzSZ-D1wzb1NILQnCXJ7N_DRNMer_B5Cccl0ULdE9YS4nPRuICWdrk6mzJyUHpEKc1-Vt3e', '', '4', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(11, 'Mr. Muhammad Zahid Iqbal', 'faculty', 'CPE-01-11', 'Lecturer', 'M.Sc. Engineering (Computer Systems)', 'AI', '', 'https://profiles.bzu.edu.pk/uploads/images/52-img_20220513_084123.jpg', 'https://profiles.bzu.edu.pk/uploads/pdf/52-zahid_cv_bzu.pdf', 'mzahidiqbal@bzu.edu.pk', 'http://www.linkedin.com/in/muhammad-zahid-iqbal-28', '', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(12, 'Mr. Usman Humayun', 'faculty', 'CPE-01-12', 'Lecturer', 'M.Sc. Computer Systems Engineering (PhD from UTM Malaysia in progress)', 'Computer Networks and Architecture', '', 'https://profiles.bzu.edu.pk/uploads/images/54-usman_humayun.jpg', '', 'usmanhumayun@bzu.edu.pk', '', '', '', 'https://scholar.google.com/citations?user=EzdXbWMAAAAJ&hl=en&oi=ao', '', 'https://orcid.org/0000-0001-9254-5961', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL),
(13, 'Mr. Yasir Anwar', 'faculty', 'CPE-01-13', 'Assistant Professor', '', '', '', '', '', 'chyasiranwar@bzu.edu.pk', '', '', '', '', '', '', '2024-12-04 12:43:24', '2024-12-04 12:43:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '0001_01_01_000000_create_users_table', 1),
(41, '0001_01_01_000001_create_cache_table', 1),
(42, '0001_01_01_000002_create_jobs_table', 1),
(43, '2024_11_23_145903_create_faculty_table', 1),
(44, '2024_11_30_101652_create_visitors_table', 1),
(54, '2024_12_10_161436_create_content_table', 3),
(55, '2024_12_12_144215_create__content_table', 4),
(56, '2024_12_04_180618_create__result__announcement_table', 5),
(57, '2024_12_03_064811_create_student_table', 6),
(61, '2024_12_15_100745_create_challan_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_annoucement`
--

CREATE TABLE `result_annoucement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Faculty_Name` varchar(255) NOT NULL,
  `Faculty_ID` varchar(255) NOT NULL,
  `Course_Title` varchar(255) NOT NULL,
  `Course_Code` varchar(255) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Session` varchar(255) NOT NULL,
  `Total_Marks` int(11) NOT NULL,
  `assignment_Type` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `ResultFile_url` varchar(255) NOT NULL,
  `PostContent` text NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_annoucement`
--

INSERT INTO `result_annoucement` (`id`, `Faculty_Name`, `Faculty_ID`, `Course_Title`, `Course_Code`, `Semester`, `Session`, `Total_Marks`, `assignment_Type`, `Remarks`, `ResultFile_url`, `PostContent`, `Status`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', 0, '', 0, '', '', '', 'hi', 'Live', '2024-12-14 06:18:00', '2024-12-14 06:18:00'),
(3, 'Dr. Muhammad Imran Malik', 'CPE-01-01', 'Electronic Circuit & Analysis', 'CPE-122T', 3, '2023-27', 30, 'Mid', 'hi', 'results/1734175383_assignment CAO23-27.pdf', 'hi', 'Pending', '2024-12-14 06:23:03', '2024-12-14 06:53:02'),
(4, 'Dr. Muhammad Imran Malik', 'CPE-01-01', 'OOP', 'CPE-111', 3, '2022-26', 30, 'Mid', 'hi', 'results/1734175670_assignment CAO23-27.pdf', '<p><strong>Hey Students of Session: 2022-26, Attention Please!</strong>\n                                    <br> We are pleased to announce that your results for Mid of\n                                    <strong>OOP (CPE-111)</strong>\n                                    have been evaluated by <strong>Dr. Muhammad Imran Malik</strong>. <br><br>\n                                    The grades have been finalized and are now available for your review. The Overall\n                                    Result was <strong> Goof</strong> as per evaluated and\n                                    assessed by Our Respected Sir <strong>Dr. Muhammad Imran Malik</strong>\n                                    \n                                        <br>\n                                        <hr> You can download your results here:\n                                        <a class=\'text-info\' style=\'margin-left:15px\'\n href=\"http://127.0.0.1:8000/storage/results/1734175670_assignment%20CAO23-27.pdf\" \n target=\'_blank\'><strong>Download Here </strong></a>.\n                                    \n                                </p>', 'Live', '2024-12-14 06:27:50', '2024-12-14 06:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uNzc78bjUlOprzGX2OPhMlVQCFAdnhp7HByKPzk1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDZmVFF2MG5NaEhKbnlCZVROa3dhMFkzbDVKWWZraWlNU3F6UThUTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50L0NQRS0yMy0wMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734298490),
('XSFaPWHv0tODxhWlddfYMy9deiscv3eU87fgyQOm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEQxc2p5bjlzUmtNR2VWclBFZVB5QllVTUxHbm5XYjE0S3hNMnZ5OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734333234);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Roll_No` varchar(255) NOT NULL,
  `Session` varchar(255) NOT NULL,
  `Current_Semester` int(11) NOT NULL,
  `CGPA` double DEFAULT NULL,
  `Interests` varchar(255) DEFAULT NULL,
  `Roles` varchar(255) DEFAULT NULL,
  `Work_Experience` varchar(255) DEFAULT NULL,
  `picture_url` varchar(255) DEFAULT NULL,
  `cv_resume_url` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `medium_url` varchar(255) DEFAULT NULL,
  `portfolio_url` varchar(255) DEFAULT NULL,
  `whatsapp_url` varchar(255) DEFAULT NULL,
  `GPA_1` double DEFAULT NULL,
  `Fail_1` varchar(255) DEFAULT NULL,
  `GPA_2` double DEFAULT NULL,
  `Fail_2` varchar(255) DEFAULT NULL,
  `GPA_3` double DEFAULT NULL,
  `Fail_3` varchar(255) DEFAULT NULL,
  `GPA_4` double DEFAULT NULL,
  `Fail_4` varchar(255) DEFAULT NULL,
  `GPA_5` double DEFAULT NULL,
  `Fail_5` varchar(255) DEFAULT NULL,
  `GPA_6` double DEFAULT NULL,
  `Fail_6` varchar(255) DEFAULT NULL,
  `GPA_7` double DEFAULT NULL,
  `Fail_7` varchar(255) DEFAULT NULL,
  `GPA_8` double DEFAULT NULL,
  `Fail_8` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Roll_No`, `Session`, `Current_Semester`, `CGPA`, `Interests`, `Roles`, `Work_Experience`, `picture_url`, `cv_resume_url`, `email`, `linkedin_url`, `github_url`, `medium_url`, `portfolio_url`, `whatsapp_url`, `GPA_1`, `Fail_1`, `GPA_2`, `Fail_2`, `GPA_3`, `Fail_3`, `GPA_4`, `Fail_4`, `GPA_5`, `Fail_5`, `GPA_6`, `Fail_6`, `GPA_7`, `Fail_7`, `GPA_8`, `Fail_8`, `created_at`, `updated_at`) VALUES
(1, 'AYESHA NOREEN', 'CPE-23-01', '2023-2027', 3, 3.9, 'Artificial Intelligence, Machine Learning', 'Student', 'Confiniti | ByteWise Ltd.  |  HeadStarterAI', 'storage/student/pictures/qOjomKiiJvszU85FHbtsLIrQDH2IHHdwusB3pEQp.jpg', 'https://drive.google.com/file/d/1RijbDLaJ8_sqdc4K3kYMLyFF81K-OBF4/view?usp=sharing', 'ayeshanoreen23@student.bzu.edu.pk', 'https://linkedin.com/in/KhatoonInTech', 'https://github.com/KhatoonInTech', 'https://ayeshanoreen.medium.com', 'NULL', 'https://whatsapp.com/channel/0029VaGDt8U89inaawy4Xa15', 3.99, 'NULL', 4, 'NULL', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', '2024-12-14 11:23:07', '2024-12-15 16:34:22'),
(2, 'MUHAMMAD RAZA', 'CPE-23-02', '2023-2027', 3, 3.91, 'Full Stack Development', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadraza23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.91, 'NULL', 3.91, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:46:47'),
(3, 'ANIQA IMRAN', 'CPE-23-03', '2023-2027', 3, 3.6, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'aniqaimran23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.67, 'NULL', 3.53, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(4, 'UQAAB HAIDER', 'CPE-23-04', '2023-2027', 3, 3.58, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'uqaabhaider23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.47, 'NULL', 3.68, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(5, 'BUSHRA KANOOZ KHAN', 'CPE-23-05', '2023-2027', 3, 3.94, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'bushrakanooz23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.9, 'NULL', 3.99, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(6, 'MUHAMMAD RIZWAN', 'CPE-23-06', '2023-2027', 3, 3.74, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadrizwan23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.84, 'NULL', 3.64, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(7, 'ALEENA KHAN', 'CPE-23-08', '2023-2027', 3, 3.86, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'aleenakhan23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.89, 'NULL', 3.79, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(8, 'EISHA ARAIN', 'CPE-23-09', '2023-2027', 3, 3.89, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'eishaarain23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.92, 'NULL', 3.79, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(9, 'FAHAD USMAN', 'CPE-23-10', '2023-2027', 3, 3.51, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'fahadusman23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.99, 'NULL', 3.43, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(10, 'MUHAMMAD MEHDI', 'CPE-23-11', '2023-2027', 3, 3.94, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadmehdi23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.6, 'NULL', 3.95, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(11, 'MUHAMMAD UMER', 'CPE-23-12', '2023-2027', 3, 3.74, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadumer23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.93, 'NULL', 3.59, 'ARAB152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(12, 'MUHAMMAD ALI', 'CPE-23-13', '2023-2027', 3, 3.59, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadali23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.88, 'NULL', 3.37, 'NULL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(13, 'ALIZA NOREEN', 'CPE-23-14', '2023-2027', 3, 3.9, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'alizanoreen23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.81, 'No Course to Show', 3.89, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(14, 'ALI SACHAL ABDULLAH', 'CPE-23-15', '2023-2027', 3, 3.02, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'alisachalabdullah23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.9, 'No Course to Show', 3.24, 'CPE-112T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(15, 'AQIB HUSSAIN', 'CPE-23-16', '2023-2027', 3, 3.6, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'aqibhussain23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.79, 'CPE-112T', 3.55, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(16, 'MUHAMMAD SAMI ULLAH', 'CPE-23-17', '2023-2027', 3, 3.67, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadsamiullah23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.64, 'No Course to Show', 3.58, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(17, 'HAFIZ MUHAMMAD ZARYAB', 'CPE-23-18', '2023-2027', 3, 3.08, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'hafizmuhammadzaryab23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.76, 'No Course to Show', 3.17, 'CPE-112T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(18, 'MUHAMMAD REHAN', 'CPE-23-19', '2023-2027', 3, 2.6, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadrehan23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.6, 'CPE-112T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(19, 'ANAM BIBI', 'CPE-23-20', '2023-2027', 3, 1.67, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'anambibi23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.39, 'CPE-112T', 0, 'CPE-121T, CPE-121P, CPE-122T, CPE-122P, CPE-123T, CPE-123P, CPE-124T, NAS-125T, HUM-126T, ARAB-152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(20, 'ESHA ASLAM', 'CPE-23-21', '2023-2027', 3, 3.73, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'eshaaslam23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.34, 'No Course to Show', 3.77, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(21, 'AWAIS ALI', 'CPE-23-22', '2023-2027', 3, 2.82, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'awaisali23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.68, 'No Course to Show', 2.57, 'CPL-122T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(22, 'MUHAMMAD SHOAIB', 'CPE-23-23', '2023-2027', 3, 3.48, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadshoaib23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.08, 'No Course to Show', 3.23, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(23, 'NIDA KANWAL', 'CPE-23-24', '2023-2027', 3, 3.34, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'nidakanwal23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.74, 'No Course to Show', 3.42, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(24, 'MUHAMMAD NOUMAN', 'CPE-23-25', '2023-2027', 3, 3.12, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadnouman23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.27, 'No Course to Show', 3.39, 'NAS-115T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(25, 'MUBASHIR HASSAN', 'CPE-23-26', '2023-2027', 3, 3.29, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'mubashirhassan23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.84, 'NAS-115T', 3.19, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(26, 'MUHAMMAD UMAR', 'CPE-23-27', '2023-2027', 3, 2.87, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadumar23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.39, 'No Course to Show', 2.83, 'ARAB152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(27, 'RIZWAN ALI', 'CPE-23-28', '2023-2027', 3, 3.26, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'rizwanali23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.91, 'No Course to Show', 3.36, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(28, 'HANIA KHAN', 'CPE-23-29', '2023-2027', 3, 2.62, 'Not Specified', 'Student', 'Not Specified', 'storage/student/pictures/k11RDUbDEuqVnTZbTx93FchGtwVfIrKq4cCceIBO.jpg', 'NULL', 'haniakhan23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.16, 'No Course to Show', 3.17, 'CPE-111T, NAS-115T, CPE-111P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 12:27:25'),
(29, 'MUHAMMAD MUJAHID', 'CPE-23-30', '2023-2027', 3, 3.67, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadmujahid23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.07, 'CPE-111T, NAS-115T, CPE-111P', 3.64, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(30, 'HASSAN GHANI', 'CPE-23-31', '2023-2027', 3, 2.83, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'hassanghani23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.7, 'No Course to Show', 3.05, 'NAS-115T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(31, 'YUSRA MARYAM', 'CPE-23-32', '2023-2027', 3, 2.68, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'yusramaryam23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.6, 'NAS-115T', 2.71, 'NAS-115T, NAS-125T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(32, 'NOOR UL AIN FATIMA', 'CPE-23-33', '2023-2027', 3, 2.9, 'Not Specified', 'Student', 'Not Specified', 'storage/student/pictures/XBl6yA6xHyHHhSRsXO8MdVNDVwk8lPEnSwULJJke.png', 'NULL', 'noorulainfatima23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.66, 'NAS-115T', 2.71, 'CPE-122T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:38:09'),
(33, 'ABID ALI', 'CPE-23-34', '2023-2027', 3, 2.26, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'abidali23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.09, 'No Course to Show', 2.35, 'CPE-IZZT, CPE-112T, NAS-115T, NAS-125T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(34, 'RIAZ AHMAD', 'CPE-23-35', '2023-2027', 3, 1.96, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'riazahmad23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.16, 'CPE-112T, NAS-115T', 1.83, 'CPE-112T, NAS-115T, CPE-122T, NAS-125T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(35, 'MUHAMMAD AWAIS', 'CPE-23-36', '2023-2027', 3, 3.27, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'muhammadawais23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2.09, 'CPE-112T, NAS-115T', 3.35, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(36, 'SAIFULLAH', 'CPE-23-37', '2023-2027', 3, 3.27, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'saifullah23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.19, 'No Course to Show', 3.28, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07'),
(37, 'ALISHBA ARIF', 'CPE-23-38', '2023-2027', 3, 3.24, 'Not Specified', 'Student', 'Not Specified', 'NULL', 'NULL', 'alishbaarif23@student.bzu.edu.pk', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 3.27, 'No Course to Show', 3.2, 'No Course to Show', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-14 11:23:07', '2024-12-14 11:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `auth_source` enum('linkedin','google') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `auth_source`, `created_at`, `updated_at`) VALUES
(1, 'KhatoonInTech (‫خاتون فی التقنییۃ‬‎)', 'ayeshanoreen092@gmail.com', 'google', '2024-12-07 12:50:28', '2024-12-07 12:50:28'),
(2, 'Ayesha Noreen 2023-27', 'ayeshanoreen23@student.bzu.edu.pk', 'google', '2024-12-14 05:43:26', '2024-12-14 05:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `challan_cnic_unique` (`CNIC`),
  ADD UNIQUE KEY `challan_roll_no_unique` (`Roll_No`),
  ADD UNIQUE KEY `challan_reg_no_unique` (`Reg_No`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_faculty_id_unique` (`Faculty_ID`),
  ADD UNIQUE KEY `faculty_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `result_annoucement`
--
ALTER TABLE `result_annoucement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_roll_no_unique` (`Roll_No`),
  ADD UNIQUE KEY `student_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challan`
--
ALTER TABLE `challan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `result_annoucement`
--
ALTER TABLE `result_annoucement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
