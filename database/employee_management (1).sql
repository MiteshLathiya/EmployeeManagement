-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 08:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_city`
--

CREATE TABLE `employee_city` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(55) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_city`
--

INSERT INTO `employee_city` (`ct_id`, `ct_name`, `c_id`) VALUES
(1, 'Rajkot', 1),
(2, 'New York', 2),
(3, 'Ahmedabad', 1),
(4, 'Jamnagar', 1),
(5, 'California', 2),
(6, 'Surat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_country`
--

CREATE TABLE `employee_country` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_country`
--

INSERT INTO `employee_country` (`c_id`, `c_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `employee_image`
--

CREATE TABLE `employee_image` (
  `imageid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_image`
--

INSERT INTO `employee_image` (`imageid`, `id`, `name`, `size`, `type`, `created_at`, `updated_at`) VALUES
(106, 1, '1624000229banner1-481x624.png', 219810, 'image/png', '2021-06-18 07:10:29', '2021-06-18 12:40:29'),
(2, 0, '1622892590banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:29:50', '2021-06-05 16:59:50'),
(3, 0, '1622892600banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:30:00', '2021-06-05 17:00:00'),
(4, 0, '1622892725banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:32:05', '2021-06-05 17:02:05'),
(5, 0, '1622892737banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:32:17', '2021-06-05 17:02:17'),
(6, 0, '1622892974banner1-481x624.png', 219810, 'image/png', '2021-06-05 11:36:14', '2021-06-05 17:06:14'),
(7, 0, '1622892974banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:36:14', '2021-06-05 17:06:14'),
(8, 0, '1622892974bird1-481x624.png', 113570, 'image/png', '2021-06-05 11:36:14', '2021-06-05 17:06:14'),
(9, 3, '1622893020banner1-481x624.png', 219810, 'image/png', '2021-06-05 11:37:00', '2021-06-05 17:07:00'),
(10, 3, '1622893020banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:37:00', '2021-06-05 17:07:00'),
(11, 3, '1622893020bird1-481x624.png', 113570, 'image/png', '2021-06-05 11:37:00', '2021-06-05 17:07:00'),
(12, 0, '1622893101banner1-481x624.png', 219810, 'image/png', '2021-06-05 11:38:21', '2021-06-05 17:08:21'),
(13, 0, '1622893101banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:38:21', '2021-06-05 17:08:21'),
(14, 0, '1622893101bird1-481x624.png', 113570, 'image/png', '2021-06-05 11:38:21', '2021-06-05 17:08:21'),
(15, 4, '1622893308banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:41:48', '2021-06-05 17:11:48'),
(16, 4, '1622893308PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-05 11:41:48', '2021-06-05 17:11:48'),
(17, 0, '1622893322banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:42:02', '2021-06-05 17:12:02'),
(18, 0, '1622893322PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-05 11:42:02', '2021-06-05 17:12:02'),
(19, 5, '1622893359banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:42:39', '2021-06-05 17:12:39'),
(21, 6, '1622894070banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:54:30', '2021-06-05 17:24:30'),
(22, 7, '1622894153bird1-481x624.png', 113570, 'image/png', '2021-06-05 11:55:53', '2021-06-05 17:25:53'),
(23, 7, '1622894153banner1-481x624.png', 219810, 'image/png', '2021-06-05 11:55:53', '2021-06-05 17:25:53'),
(37, 8, '1623046535PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 06:15:35', '2021-06-07 11:45:35'),
(25, 0, '1622894330banner2-481x624.png', 250925, 'image/png', '2021-06-05 11:58:50', '2021-06-05 17:28:50'),
(26, 0, '1622894877banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:07:57', '2021-06-05 17:37:57'),
(27, 0, '1622894904banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:08:24', '2021-06-05 17:38:24'),
(28, 0, '1622894912banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:08:32', '2021-06-05 17:38:32'),
(29, 0, '1622894921banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:08:41', '2021-06-05 17:38:41'),
(30, 0, '1622895128banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:12:08', '2021-06-05 17:42:08'),
(31, 0, '1622895145banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:12:25', '2021-06-05 17:42:25'),
(32, 0, '1622895295banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:14:55', '2021-06-05 17:44:55'),
(33, 0, '1622895415banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:16:55', '2021-06-05 17:46:55'),
(34, 0, '1622895435banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:17:15', '2021-06-05 17:47:15'),
(35, 0, '1622895591banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:19:51', '2021-06-05 17:49:51'),
(36, 0, '1622896289banner2-481x624.png', 250925, 'image/png', '2021-06-05 12:31:29', '2021-06-05 18:01:29'),
(38, 0, '1623046768bird1-481x624.png', 113570, 'image/png', '2021-06-07 06:19:28', '2021-06-07 11:49:28'),
(39, 10, '1623046991bird1-481x624.png', 113570, 'image/png', '2021-06-07 06:23:11', '2021-06-07 11:53:11'),
(40, 0, '1623057634banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:20:34', '2021-06-07 14:50:34'),
(41, 0, '1623057634bird1-481x624.png', 113570, 'image/png', '2021-06-07 09:20:34', '2021-06-07 14:50:34'),
(42, 0, '1623057634PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:20:34', '2021-06-07 14:50:34'),
(43, 17, '1623058090banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:28:10', '2021-06-07 14:58:10'),
(44, 17, '1623058090bird1-481x624.png', 113570, 'image/png', '2021-06-07 09:28:10', '2021-06-07 14:58:10'),
(45, 17, '1623058090PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:28:10', '2021-06-07 14:58:10'),
(46, 18, '1623058825banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:40:25', '2021-06-07 15:10:25'),
(47, 18, '1623058825bird1-481x624.png', 113570, 'image/png', '2021-06-07 09:40:25', '2021-06-07 15:10:25'),
(48, 18, '1623058825PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:40:25', '2021-06-07 15:10:25'),
(49, 19, '1623058879banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:41:19', '2021-06-07 15:11:19'),
(50, 19, '1623058879PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:41:19', '2021-06-07 15:11:19'),
(51, 22, '1623059301bird1-481x624.png', 113570, 'image/png', '2021-06-07 09:48:21', '2021-06-07 15:18:21'),
(52, 22, '1623059301PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:48:21', '2021-06-07 15:18:21'),
(53, 23, '1623059419banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:50:19', '2021-06-07 15:20:19'),
(54, 23, '1623059419PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 09:50:19', '2021-06-07 15:20:19'),
(55, 24, '1623059843banner2-481x624.png', 250925, 'image/png', '2021-06-07 09:57:23', '2021-06-07 15:27:23'),
(56, 29, '1623066086banner2-481x624.png', 250925, 'image/png', '2021-06-07 11:41:26', '2021-06-07 17:11:26'),
(57, 29, '1623066086PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-07 11:41:26', '2021-06-07 17:11:26'),
(58, 0, '1623135699Sample-png-image-3mb.png', 3124201, 'image/png', '2021-06-08 07:01:39', '2021-06-08 12:31:39'),
(59, 31, '1623135758banner2-481x624.png', 250925, 'image/png', '2021-06-08 07:02:38', '2021-06-08 12:32:38'),
(60, 0, '1623135994banner2-481x624.png', 250925, 'image/png', '2021-06-08 07:06:34', '2021-06-08 12:36:34'),
(61, 0, '1623135994bird1-481x624.png', 113570, 'image/png', '2021-06-08 07:06:34', '2021-06-08 12:36:34'),
(62, 0, '1623135994PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-08 07:06:34', '2021-06-08 12:36:34'),
(63, 32, '1623136084banner1-481x624.png', 219810, 'image/png', '2021-06-08 07:08:04', '2021-06-08 12:38:04'),
(64, 32, '1623136084banner2-481x624.png', 250925, 'image/png', '2021-06-08 07:08:04', '2021-06-08 12:38:04'),
(65, 32, '1623136084bird1-481x624.png', 113570, 'image/png', '2021-06-08 07:08:04', '2021-06-08 12:38:04'),
(66, 33, '1623142759banner2-481x624.png', 250925, 'image/png', '2021-06-08 08:59:19', '2021-06-08 14:29:19'),
(67, 33, '1623142759bird1-481x624.png', 113570, 'image/png', '2021-06-08 08:59:19', '2021-06-08 14:29:19'),
(68, 33, '1623142759PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-08 08:59:19', '2021-06-08 14:29:19'),
(69, 34, '1623328784banner1-481x624.png', 219810, 'image/png', '2021-06-10 12:39:44', '2021-06-10 18:09:44'),
(70, 34, '1623328784banner2-481x624.png', 250925, 'image/png', '2021-06-10 12:39:44', '2021-06-10 18:09:44'),
(71, 34, '1623328784PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-10 12:39:44', '2021-06-10 18:09:44'),
(72, 35, '1623329084banner1-481x624.png', 219810, 'image/png', '2021-06-10 12:44:44', '2021-06-10 18:14:44'),
(73, 35, '1623329084banner2-481x624.png', 250925, 'image/png', '2021-06-10 12:44:44', '2021-06-10 18:14:44'),
(74, 35, '1623329084PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-10 12:44:44', '2021-06-10 18:14:44'),
(75, 36, '1623930915bird1-481x624.png', 113570, 'image/png', '2021-06-17 11:55:15', '2021-06-17 17:25:15'),
(76, 36, '1623930915bowl-cat-481x624.png', 274357, 'image/png', '2021-06-17 11:55:15', '2021-06-17 17:25:15'),
(78, 5, '1623995784banner1-481x624.png', 219810, 'image/png', '2021-06-18 05:56:24', '2021-06-18 11:26:24'),
(81, 5, '1623995902bowl-cat-481x624.png', 274357, 'image/png', '2021-06-18 05:58:22', '2021-06-18 11:28:22'),
(126, 38, '1624448490bird1-481x624.png', 113570, 'image/png', '2021-06-23 11:41:30', '2021-06-23 17:11:30'),
(124, 37, '1624342931bird1-481x624.png', 113570, 'image/png', '2021-06-22 06:22:11', '2021-06-22 11:52:11'),
(125, 37, '1624342931bowl-cat-481x624.png', 274357, 'image/png', '2021-06-22 06:22:11', '2021-06-22 11:52:11'),
(107, 1, '1624000229banner2-481x624.png', 250925, 'image/png', '2021-06-18 07:10:29', '2021-06-18 12:40:29'),
(108, 1, '1624000229bowl-cat-481x624.png', 274357, 'image/png', '2021-06-18 07:10:29', '2021-06-18 12:40:29'),
(109, 1, '1624000599', 0, '', '2021-06-18 07:16:39', '2021-06-18 12:46:39'),
(123, 37, '1624342931banner1-481x624.png', 219810, 'image/png', '2021-06-22 06:22:11', '2021-06-22 11:52:11'),
(127, 38, '1624448490bowl-cat-481x624.png', 274357, 'image/png', '2021-06-23 11:41:30', '2021-06-23 17:11:30'),
(128, 38, '1624448490PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-23 11:41:30', '2021-06-23 17:11:30'),
(129, 39, '1624543698banner1-481x624.png', 219810, 'image/png', '2021-06-24 14:08:18', '2021-06-24 19:38:18'),
(130, 39, '1624543698banner2-481x624.png', 250925, 'image/png', '2021-06-24 14:08:18', '2021-06-24 19:38:18'),
(131, 39, '1624543698bird1-481x624.png', 113570, 'image/png', '2021-06-24 14:08:18', '2021-06-24 19:38:18'),
(133, 40, '1624544926bowl-cat-481x624.png', 274357, 'image/png', '2021-06-24 14:28:46', '2021-06-24 19:58:46'),
(134, 40, '1624544926PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-24 14:28:46', '2021-06-24 19:58:46'),
(135, 41, '1624597171bird1-481x624.png', 113570, 'image/png', '2021-06-25 04:59:31', '2021-06-25 10:29:31'),
(136, 41, '1624597171bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 04:59:31', '2021-06-25 10:29:31'),
(137, 41, '1624597171PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-25 04:59:31', '2021-06-25 10:29:31'),
(138, 42, '1624597271banner1-481x624.png', 219810, 'image/png', '2021-06-25 05:01:11', '2021-06-25 10:31:11'),
(139, 43, '1624597392banner1-481x624.png', 219810, 'image/png', '2021-06-25 05:03:12', '2021-06-25 10:33:12'),
(140, 44, '1624597465banner1-481x624.png', 219810, 'image/png', '2021-06-25 05:04:25', '2021-06-25 10:34:25'),
(141, 45, '1624597527banner2-481x624.png', 250925, 'image/png', '2021-06-25 05:05:27', '2021-06-25 10:35:27'),
(142, 46, '1624597647banner2-481x624.png', 250925, 'image/png', '2021-06-25 05:07:27', '2021-06-25 10:37:27'),
(143, 47, '1624597902banner2-481x624.png', 250925, 'image/png', '2021-06-25 05:11:42', '2021-06-25 10:41:42'),
(144, 48, '1624598062bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 05:14:22', '2021-06-25 10:44:22'),
(145, 49, '1624598403bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 05:20:03', '2021-06-25 10:50:03'),
(146, 50, '1624603111banner1-481x624.png', 219810, 'image/png', '2021-06-25 06:38:31', '2021-06-25 12:08:31'),
(147, 50, '1624603111banner2-481x624.png', 250925, 'image/png', '2021-06-25 06:38:31', '2021-06-25 12:08:31'),
(148, 50, '1624603111bird1-481x624.png', 113570, 'image/png', '2021-06-25 06:38:31', '2021-06-25 12:08:31'),
(150, 51, '1624603867bird1-481x624.png', 113570, 'image/png', '2021-06-25 06:51:07', '2021-06-25 12:21:07'),
(151, 51, '1624603867bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 06:51:07', '2021-06-25 12:21:07'),
(152, 52, '1624612998banner1-481x624.png', 219810, 'image/png', '2021-06-25 09:23:18', '2021-06-25 14:53:18'),
(153, 53, '1624613060bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 09:24:20', '2021-06-25 14:54:20'),
(154, 53, '1624613060PNG_transparency_demonstration_1.png', 227963, 'image/png', '2021-06-25 09:24:20', '2021-06-25 14:54:20'),
(155, 54, '1624613161bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 09:26:01', '2021-06-25 14:56:01'),
(156, 55, '1624613386bowl-cat-481x624.png', 274357, 'image/png', '2021-06-25 09:29:46', '2021-06-25 14:59:46'),
(157, 56, '1624617976banner1-481x624.png', 219810, 'image/png', '2021-06-25 10:46:16', '2021-06-25 16:16:16'),
(158, 51, '1624619875banner1-481x624.png', 219810, 'image/png', '2021-06-25 11:17:55', '2021-06-25 16:47:55'),
(159, 51, '1624619875banner2-481x624.png', 250925, 'image/png', '2021-06-25 11:17:55', '2021-06-25 16:47:55'),
(160, 57, '1624622253banner1-481x624.png', 219810, 'image/png', '2021-06-25 11:57:33', '2021-06-25 17:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `birthdate` date NOT NULL,
  `mobilecode` int(5) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `organisation` varchar(30) NOT NULL,
  `website` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postcode` int(10) NOT NULL,
  `organisationtype` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `activatecode` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`id`, `firstname`, `lastname`, `email`, `password`, `birthdate`, `mobilecode`, `mobilenumber`, `gender`, `organisation`, `website`, `address`, `city`, `country`, `postcode`, `organisationtype`, `language`, `status`, `activatecode`, `created_at`, `updated_at`) VALUES
(1, 'Mitesh', 'lathiya', 'mit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 2, '2147483647', 'Male', 'dfd', 'https://ww.j.com', 'asdsd', 'Rajkot', 'India', 232, 'dsfdsf', 'PHP,', 1, '245aa7f75bd1a58eb856deef0c07bf39', '2021-06-05 11:28:27', '2021-06-21 15:42:10'),
(37, 'sadksajd', 'kndfksad', 'miteshlathiya77@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 3, '8745693210', 'Male', 'dfdsnfk,', 'https://www.abc.com', 'dfgdfg', 'New York', 'USA', 23424, 'dfgdfgfdg', 'PHP,', 1, '438f79fc6f98b6bdc86c8b3d748806b9', '2021-06-22 06:22:11', '2021-06-22 11:54:00'),
(40, 'reihteib', 'jbdsjfbsj', 'kndfkgksdg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '7896541230', 'Female', 'ghjgj', 'https://www.abc.com', 'sdsafdg', 'New York', 'USA', 34343, 'gfhfghfgh', 'PHP,', 0, '22e7c5052e8d4ba1e5184ae005a125fa', '2021-06-24 14:28:46', '2021-06-24 20:02:29'),
(4, 'asdasd', 'asdasd', 'ajbdajbsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'asdsad', 'https://ww.j.com', 'asdasdsa', 'New York', 'USA', 232, 'asdsad', 'JAVA,', 0, '952561089d48f64f85cda0630843f07d', '2021-06-05 11:41:48', '2021-07-01 16:54:58'),
(5, 'Mitesh', 'Lathiya', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 5, '9632587410', 'Male', 'sdf', 'https://ww.j.com', 'sdfsdf', 'Surat', 'India', 235, 'sdfrsdf', 'PHP,JAVA,', 0, '80427349b073330546eedece91c6226d', '2021-06-05 11:42:39', '2021-06-18 14:51:58'),
(39, 'abcd', 'efgh', 'odjsfojwneoi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 3, '9632541780', 'Male', 'dfgdgd', 'https://www.abc.com', 'dfgdfg', 'California', 'USA', 34343, 'gdfgdfg', '.NET,Python,', 0, '5edac614d091cae9f7c964097fcfb08a', '2021-06-24 14:08:18', '2021-06-24 19:38:18'),
(7, 'asdasd', 'dsadsa', 'jsajdbnajs@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 3, '2147483647', 'Male', 'sdfsdf', 'https://ww.j.com', 'asdjhb', 'Rajkot', 'India', 3434, 'sdfsdf', 'PHP,', 0, '9f93d89bc8965603db6f021b07834fe5', '2021-06-05 11:55:53', '2021-07-01 14:28:29'),
(9, 'sdfsdf', 'sdfsfsf', 'sdfsdfsdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'sdfsdf', 'https://www.abc.com', 'sdfsf', 'Ahmedabad', 'India', 232, 'fsdfsdf', 'PHP,', 0, '3decf084799d76181e169008c6d926f4', '2021-06-07 06:17:06', '2021-06-07 11:47:06'),
(10, 'gdfgh', 'fgfdg', 'jkasbdjasbd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-03', 3, '2147483647', 'Male', 'dsada', 'https://www.abc.com', 'gfh', 'Surat', 'India', 343, 'dfgdfg', 'PHP,', 0, 'cb12c10f52a496a7b26d135bd94ba561', '2021-06-07 06:23:11', '2021-06-07 11:53:11'),
(11, 'sdfsd', 'fsdfsd', 'ffsdfsfk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfgdfg', 'https://www.abc.com', 'dfgd', 'Jamnagar', 'India', 343, 'dfgdfg', 'PHP,', 0, '7a0a939e14158b9665a64ba76b62fcde', '2021-06-07 06:24:07', '2021-06-07 11:54:07'),
(12, 'zjbsdja', 'jsbadb', 'skndnfkjg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dasd', 'https://www.abc.com', 'rajkot', 'Ahmedabad', 'India', 2, 'dfgdfg', 'PHP,', 0, '0b00a010867fee9fb035ef6e85601366', '2021-06-07 09:04:35', '2021-06-07 14:34:35'),
(13, 'fgf', 'gfdg', 'jasbdjb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfgdfg', 'https://www.abc.com', 'sdfsf', 'New York', 'USA', 22, 'sdff', '.NET,Python,', 0, '7e2cd70b201804b6b3a2b9746d1cc28c', '2021-06-07 09:08:01', '2021-06-07 14:38:01'),
(14, 'dfgfg', 'fgdfg', 'kdnfsdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 2, '2147483647', 'Male', 'dfgfdg', 'https://www.abc.com', 'fghgfh', 'New York', 'USA', 343, 'fghfgh', 'PHP,Python,', 0, 'fa83f1bdd62b1903b7115b138afac565', '2021-06-07 09:11:29', '2021-06-07 14:41:29'),
(15, 'gfhfg', 'fghfgh', 'jabsdj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'fgdfg', 'https://www.abc.com', 'dfsdf', 'New York', 'USA', 343, 'fgfh', 'PHP,', 0, '4ed6eaed649b348e4da9f853ff596af1', '2021-06-07 09:17:41', '2021-06-07 14:47:41'),
(16, 'dfgdf', 'gdfggd', 'knaskdnk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfgdfg', 'https://www.abc.com', 'dgfdg', 'New York', 'USA', 34, 'fghgfh', 'PHP,', 0, 'beda5e2b4d3adde474783ad47cb5c68b', '2021-06-07 09:20:18', '2021-06-07 14:50:18'),
(17, 'jasbd', 'ksdkfbk', 'ksnfksdgv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfgdfg', 'https://www.abc.com', 'dsfsdf', 'New York', 'USA', 22, 'fgdfg', 'PHP,', 0, '5ae535d3a109986cee4c305f9537ee25', '2021-06-07 09:28:10', '2021-06-07 14:58:10'),
(18, 'dfsd', 'fdsf', 'knksf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'fgd', 'https://www.abc.com', 'gdgf', 'New York', 'USA', 33, 'fghfg', 'Python,Other,', 0, '2eaf9e9d0e4021595b492df6007a832c', '2021-06-07 09:40:25', '2021-06-07 15:10:25'),
(19, 'dfgdf', 'gfdg', 'sndjn@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfgdf', 'https://www.abc.com', 'ghfhgfh', 'Rajkot', 'India', 343, 'fghfgh', 'JAVA,', 0, '1af3c9c4b989c3c0c1e4e665cf3f765b', '2021-06-07 09:41:19', '2021-06-07 15:11:19'),
(20, 'asdn', 'ksandk', 'afnskand@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 2, '2147483647', 'Male', 'dfgdf', 'https://www.abc.com', 'fgfdg', 'Jamnagar', 'India', 34, 'fghfh', 'PHP,JAVA,', 0, '4ecdf5f67563e0a4a88fad55344fd387', '2021-06-07 09:45:40', '2021-06-07 15:15:40'),
(21, 'fdgdf', 'gdfgdf', 'ksdbn@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dg', 'https://www.abc.com', 'joj', 'New York', 'USA', 232, 'fsdf', 'PHP,Other,', 0, '7df698c93d2382a7c5a055d624acc229', '2021-06-07 09:47:30', '2021-06-07 15:17:30'),
(22, 'sd', 'ffdsf', 'fasdfsdfsfk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfsd', 'https://www.abc.com', 'dsfdsf', 'Rajkot', 'India', 343, 'fghfg', 'Python,', 0, '8caacbdb1a5e9f783e49f1d18d0b0517', '2021-06-07 09:48:21', '2021-06-07 15:18:21'),
(23, 'fgfh', 'fghfh', 'ikbhduia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 3, '2147483647', 'Male', 'sfsdf', 'https://www.abc.com', 'dsfs', 'Rajkot', 'India', 232, 'sdfd', 'PHP,.NET,', 0, '626d83c248b52898eb48c404934a75b5', '2021-06-07 09:50:19', '2021-06-07 15:20:19'),
(24, 'dfgdf', 'gdfgd', 'djbdjasb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 15, '2147483647', 'Male', 'fsdf', 'https://www.abc.com', 'dfgdfg', 'Ahmedabad', 'India', 3434, 'sdfsf', 'PHP,', 0, '3b3d043b694d547920221da0aca38196', '2021-06-07 09:57:23', '2021-06-07 15:27:23'),
(25, 'dgdfg', 'dfgdfg', 'jknsjf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'fdsf', 'https://www.abc.com', 'sdfsdf', 'New York', 'USA', 232, 'dfgd', 'JAVA,', 0, 'd204cb0a98c8f6c9ad4e59ffbada4b50', '2021-06-07 09:58:22', '2021-06-07 15:28:22'),
(26, 'dsad', 'dsad', 'jasbdjabs@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-03', 2, '2147483647', 'Male', 'sdfsd', 'https://www.abc.com', 'sdfsdf', 'New York', 'USA', 232, 'dsfsdf', 'JAVA,', 0, 'ee0aac3c44419bdc7e927bf1e4e382fa', '2021-06-07 10:00:18', '2021-06-07 15:30:18'),
(28, 'jasdb', 'jsbjdb', 'jsbjsabdjsad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'dfsdf', 'https://www.abc.com', 'hfghf', 'Surat', 'India', 343, 'fhfgh', 'JAVA,.NET,', 0, 'be2435ab65b000c7bc8db017cf31a45c', '2021-06-07 10:06:44', '2021-06-07 15:36:44'),
(29, 'ajdgb', 'jksbdfjs', 'jfsdbjfbjdsf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 123, '2147483647', 'Male', 'dfgdf', 'https://www.abc.com', 'asdsad', 'New York', 'USA', 232, 'dsfdsf', 'PHP,.NET,', 0, '79cd3e19dce469e8d3658eee4804c33c', '2021-06-07 11:41:26', '2021-06-07 17:11:26'),
(30, 'gffh', 'asjdb', 'skfnsdjkfs@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'fghfgh', 'https://www.abc.com', 'sadad', 'Ahmedabad', 'India', 232, 'sdfdsf', 'PHP,Python,', 0, '45980a40f08186cedebe16cdb844d0bf', '2021-06-08 04:57:33', '2021-06-08 10:27:33'),
(31, 'gffh', 'asjdb', 'skfnsdjdssadsakfs@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '2147483647', 'Male', 'fghfgh', 'https://www.abc.com', 'sadad', 'Surat', 'India', 232, 'sdfdsf', 'PHP,Python,', 0, '25e92ebedad949cc704561d607dc598f', '2021-06-08 07:02:38', '2021-06-08 12:32:38'),
(32, 'dfgd', 'fgdfgdf', 'gkjbajsd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 4, '2147483647', 'Male', 'dfdf', 'https://www.abc.com', 'dsfsdf', 'Ahmedabad', 'India', 232, 'sdfsdf', '.NET,', 0, '4ad1191070acc9ddad0ca07feec7beed', '2021-06-08 07:08:04', '2021-06-08 12:38:04'),
(33, 'uwgeuwv', 'sdbqjb', 'skdajkbfjf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 91, '2147483647', 'Male', 'knda', 'https://www.abc.com', 'sdfsdf', 'Surat', 'India', 4534, 'dfgdfg', 'PHP,', 0, 'f2648f1cb3e0378c67ca3b80ab26904e', '2021-06-08 08:59:19', '2021-06-08 14:29:19'),
(38, 'mohit', 'j', 'mohitj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 21, '8524036487', 'Male', 'fdgfdg', 'https://www.abc.com', 'sdfsdf', 'New York', 'USA', 3424, 'ghfgh', 'PHP,', 0, '858892d37c921b8f6306a4ccc2714c42', '2021-06-23 11:41:30', '2021-06-23 17:11:30'),
(41, 'asmd b', 'jsdbaj', 'jsbdjsbjfsdf@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-03', 2, '9632541780', 'Male', 'dfgfdg', 'https://www.abc.com', 'dfgdfg', 'California', 'USA', 3434, 'dfgfdgdg', 'PHP,JAVA,', 0, '242bf0de5afb53b2420e9d5f86fc410c', '2021-06-25 04:59:31', '2021-06-25 10:29:31'),
(42, 'asldmsa', 'sadkn', 'sndkasndas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 2, '9632541780', 'Male', 'fdgdfgdf', 'https://www.abc.com', 'sdfsdfsd', 'Jamnagar', 'India', 2232, 'dfgdfgdg', 'JAVA,', 0, '6474cbe8eca3a593f66074c85e12a028', '2021-06-25 05:01:11', '2021-06-25 10:31:11'),
(43, 'sdfds', 'sdfsdf', 'kanskjdnb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-24', 7, '9632541780', 'Male', 'dfgdgdfg', 'https://www.abc.com', 'fdgdfgdfg', 'Ahmedabad', 'India', 675, 'ghjghj', 'PHP,', 0, 'aef22698e4fcab37fcebf53f7fac470d', '2021-06-25 05:03:12', '2021-06-25 10:33:12'),
(44, 'sdfds', 'sdfsdf', 'kansdasdkjdnb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-24', 7, '9632541780', 'Male', 'dfgdgdfg', 'https://www.abc.com', 'fdgdfgdfg', 'Ahmedabad', 'India', 675, 'ghjghj', 'PHP,', 0, '7b490c9fdd9adc9d44fe596fa4207baf', '2021-06-25 05:04:25', '2021-06-25 10:34:25'),
(50, 'askdnb', 'sndfjsa', 'sdsjadb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 3, '9632541780', 'Male', 'dgdfgd', 'https://www.abc.com', 'dgdfgdf', 'Jamnagar', 'India', 3434, 'fdgdfgdg', 'JAVA,', 0, 'cae58aa6653c035d6898f4963048fe60', '2021-06-25 06:38:31', '2021-06-25 12:08:31'),
(57, 'ajbd', 'jsbdj', 'mitulathiya317@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-09', 2, '9632541780', 'Male', 'dfgfdg', 'https://www.abc.com', 'fdgdfg', 'New York', 'USA', 4545, 'fgdfg', 'PHP,', 1, 'f1140404c0ad8854bef64af6a80c320b', '2021-06-25 11:57:33', '2021-06-25 17:29:27'),
(52, 'hijkl', 'mnop', 'ksbajdb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-11', 3, '9632541780', 'Male', 'dfdfs', 'https://www.abc.com', 'dfgdfg', 'Ahmedabad', 'India', 3434, 'fgfdg', 'PHP,JAVA,', 0, '91236c538c66c65c09b8c69bc11ca7bd', '2021-06-25 09:23:18', '2021-06-25 14:53:18'),
(53, 'quvst', 'wxyz', 'z@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-03', 3, '9632541780', 'Male', 'fgfdgd', 'https://www.abc.com', 'dsfsdf', 'Ahmedabad', 'India', 3434, 'gfhfghgf', 'PHP,Python,', 0, '278bc9e28d51586d3f771cdb1d2cae74', '2021-06-25 09:24:20', '2021-06-25 14:54:20'),
(54, 'zjbsdja', 'adsad', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 2, '9632541780', 'Male', 'sdfdsf', 'https://www.abc.com', 'sdfdsfs', 'Ahmedabad', 'India', 3434, 'dfgdfg', 'Other,', 0, 'e68707abcecad59fe48856a479ba739f', '2021-06-25 09:26:01', '2021-06-25 14:56:01'),
(55, 'erjakd', 'llansk', 'g@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01', 3, '9632541780', 'Female', 'dsfdf', 'https://www.abc.com', 'fghfh', 'Surat', 'India', 4545, 'fghfh', 'PHP,', 0, '4aef76ede39fcf8f8ed625540cfa8a6a', '2021-06-25 09:29:46', '2021-06-25 14:59:46'),
(56, 'dsfdsf', 'sdfsdf', 'jabdja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-02', 3, '9632541780', 'Female', 'fgfg', 'https://www.abc.com', 'dsfsdf', 'Ahmedabad', 'India', 3434, 'fdsfdsf', 'PHP,', 0, '9ea9f3aa28382680856f99d7d840d089', '2021-06-25 10:46:16', '2021-06-25 16:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `salary_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `salary` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`salary_id`, `id`, `month`, `salary`, `created_at`, `updated_at`) VALUES
(1, 57, 'January', 15000, '2021-06-30 05:44:58', '2021-06-30 11:14:58'),
(2, 57, 'March', 56000, '2021-06-30 05:45:07', '2021-06-30 11:15:07'),
(3, 57, 'April', 15200, '2021-06-30 05:45:20', '2021-06-30 11:15:20'),
(4, 37, 'January', 5000, '2021-06-30 05:46:52', '2021-06-30 11:16:52'),
(5, 37, 'November', 6300, '2021-06-30 05:46:56', '2021-06-30 11:16:56'),
(6, 37, 'December', 56000, '2021-06-30 05:47:02', '2021-06-30 11:17:02'),
(7, 37, 'August', 22000, '2021-06-30 05:47:14', '2021-06-30 11:17:14'),
(8, 1, 'October', 6000, '2021-06-30 05:48:03', '2021-06-30 11:18:03'),
(9, 1, 'June', 2500, '2021-06-30 05:48:09', '2021-06-30 11:18:09'),
(10, 1, 'January', 4500, '2021-06-30 05:48:14', '2021-06-30 11:18:14'),
(11, 1, 'March', 9600, '2021-06-30 05:48:20', '2021-06-30 11:18:20'),
(12, 1, 'May', 7862, '2021-06-30 05:48:33', '2021-06-30 11:18:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_city`
--
ALTER TABLE `employee_city`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `employee_country`
--
ALTER TABLE `employee_country`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee_image`
--
ALTER TABLE `employee_image`
  ADD PRIMARY KEY (`imageid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD UNIQUE KEY `salary_id` (`id`,`month`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_city`
--
ALTER TABLE `employee_city`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_country`
--
ALTER TABLE `employee_country`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_image`
--
ALTER TABLE `employee_image`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_city`
--
ALTER TABLE `employee_city`
  ADD CONSTRAINT `employee_city_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `employee_country` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
