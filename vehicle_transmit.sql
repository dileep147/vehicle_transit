-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 11:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_transmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `description` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `date_time`, `description`, `user_id`) VALUES
(3, '2020-09-17 08:21:27', 'Login - \'admin\'', 1),
(4, '2020-09-17 08:31:08', 'Model - saved : ', 1),
(5, '2020-09-17 09:17:10', 'Color - saved : ', 1),
(6, '2020-09-17 09:34:00', 'Size - saved : ', 1),
(7, '2020-09-17 10:40:08', 'Model - saved : ', 1),
(8, '2020-09-17 10:41:54', 'Car - saved : ', 1),
(9, '2020-09-17 10:43:53', 'Model - saved : ', 1),
(10, '2020-09-17 10:44:02', 'Color - saved : ', 1),
(11, '2020-09-17 10:44:15', 'Size - saved : ', 1),
(12, '2020-09-17 10:44:29', 'Car - saved : ', 1),
(13, '2020-09-17 11:02:44', 'Car - saved : ', 1),
(14, '2020-09-17 11:44:47', 'Logout - \'admin\'', 1),
(15, '2020-09-17 11:44:49', 'Login - \'admin\'', 1),
(16, '2020-09-17 11:59:24', 'Car - saved : ', 1),
(17, '2020-09-17 12:00:03', 'Car - saved : ', 1),
(18, '2020-09-17 12:01:07', 'Car - saved : ', 1),
(19, '2020-09-17 12:07:04', 'Model - updated : ', 1),
(20, '2020-09-17 12:08:11', 'Model - deleted : ', 1),
(21, '2020-09-17 12:17:55', 'Color - deleted : ', 1),
(22, '2020-09-17 12:18:11', 'Color - updated : ', 1),
(23, '2020-09-17 12:20:23', 'Size - deleted : ', 1),
(24, '2020-09-17 12:20:35', 'Size - updated : ', 1),
(25, '2020-09-17 12:25:54', 'Car - saved : ', 1),
(26, '2020-09-17 13:55:03', 'Logout - \'admin\'', 1),
(27, '2020-09-17 13:55:05', 'Login - \'admin\'', 1),
(28, '2020-09-17 14:52:28', 'Logout - \'admin\'', 1),
(29, '2020-09-17 14:52:29', 'Logout - \'admin\'', 1),
(30, '2020-09-17 14:52:33', 'Login - \'admin\'', 1),
(31, '2020-09-17 16:17:49', 'Logout - \'admin\'', 1),
(32, '2020-09-17 16:18:21', 'Login - \'admin\'', 1),
(33, '2020-09-17 16:18:24', 'Login - \'admin\'', 1),
(34, '2020-09-17 16:18:30', 'Login - \'admin\'', 1),
(35, '2020-09-22 09:32:37', 'Logout - \'admin\'', 1),
(36, '2020-09-22 09:32:42', 'Login - \'admin\'', 1),
(37, '2020-09-22 10:28:38', 'Logout - \'admin\'', 1),
(38, '2020-09-22 10:42:16', 'Login - \'admin\'', 1),
(39, '2020-09-22 11:38:01', 'Logout - \'admin\'', 1),
(40, '2020-09-22 11:38:06', 'Login - \'admin\'', 1),
(41, '2020-09-22 12:22:31', 'Logout - \'admin\'', 1),
(42, '2020-09-22 12:26:57', 'Login - \'admin\'', 1),
(43, '2020-09-22 13:35:15', 'Car - saved : ', 1),
(44, '2020-09-22 14:01:15', 'Login - \'admin\'', 1),
(45, '2020-09-22 14:28:16', 'Car - saved : ', 1),
(46, '2020-09-22 14:28:55', 'Car - saved : ', 1),
(47, '2020-09-22 15:01:13', 'Car - saved : ', 1),
(48, '2020-09-23 08:26:11', 'Login - \'admin\'', 1),
(49, '2020-09-23 09:08:09', 'Logout - \'admin\'', 1),
(50, '2020-09-23 09:08:11', 'Login - \'admin\'', 1),
(51, '2020-09-23 09:23:15', 'Currency - saved : ', 1),
(52, '2020-09-23 09:23:47', 'Currency - updated : ', 1),
(53, '2020-09-23 10:27:54', 'Login - \'admin\'', 1),
(54, '2020-09-23 10:53:27', 'Transit - saved : ', 1),
(55, '2020-09-23 10:53:34', 'Transit - saved : ', 1),
(56, '2020-09-23 10:53:49', 'Transit - saved : ', 1),
(57, '2020-09-23 10:55:44', 'Transit - updated : ', 1),
(58, '2020-09-23 10:57:59', 'Transit - saved : ', 1),
(59, '2020-09-23 10:58:41', 'Transit - updated : ', 1),
(60, '2020-09-23 11:00:48', 'Transit - saved : ', 1),
(61, '2020-09-23 11:01:06', 'Transit - updated : ', 1),
(62, '2020-09-23 11:01:16', 'Transit - deleted : ', 1),
(63, '2020-09-23 11:13:01', 'Car - saved : ', 1),
(64, '2020-09-23 11:16:53', 'Car - deleted : ', 1),
(65, '2020-09-23 11:17:10', 'Car - deleted : ', 1),
(66, '2020-09-23 11:30:37', 'Car - saved : ', 1),
(67, '2020-09-23 11:42:30', 'Car - saved : ', 1),
(68, '2020-09-23 11:51:37', 'Car - saved : ', 1),
(69, '2020-09-23 11:52:14', 'Car - saved : ', 1),
(70, '2020-09-23 11:53:38', 'Car - saved : ', 1),
(71, '2020-09-23 12:07:14', 'Car - saved : ', 1),
(72, '2020-09-23 12:08:43', 'Car - updated : ', 1),
(73, '2020-09-23 12:20:50', 'Car - saved : ', 1),
(74, '2020-09-23 12:58:47', 'Logout - \'admin\'', 1),
(75, '2020-09-23 12:58:49', 'Login - \'admin\'', 1),
(76, '2020-09-23 13:21:01', 'Car - saved : ', 1),
(77, '2020-09-23 13:27:44', 'Car - deleted : ', 1),
(78, '2020-09-23 13:28:20', 'Car - updated : ', 1),
(79, '2020-09-23 14:01:48', 'Login - \'admin\'', 1),
(80, '2020-09-23 15:26:34', 'Logout - \'admin\'', 1),
(81, '2020-09-23 15:26:37', 'Login - \'admin\'', 1),
(82, '2020-09-23 15:27:50', 'Car - saved : ', 1),
(83, '2020-09-23 16:02:37', 'Logout - \'admin\'', 1),
(84, '2020-09-23 16:02:39', 'Login - \'admin\'', 1),
(85, '2020-09-23 16:53:43', 'Car - saved : ', 1),
(86, '2020-09-25 11:01:28', 'Login - \'admin\'', 1),
(87, '2020-09-25 11:02:19', 'Car - saved : ', 1),
(88, '2020-09-25 12:02:45', 'Logout - \'admin\'', 1),
(89, '2020-09-25 12:02:48', 'Login - \'admin\'', 1),
(90, '2020-09-25 17:04:56', 'Logout - \'admin\'', 1),
(91, '2020-09-26 08:41:35', 'Login - \'admin\'', 1),
(92, '2020-09-26 10:06:26', 'Logout - \'admin\'', 1),
(93, '2020-09-26 10:06:29', 'Login - \'admin\'', 1),
(94, '2020-09-26 11:03:48', 'Logout - \'admin\'', 1),
(95, '2020-09-26 11:20:26', 'Login - \'admin\'', 1),
(96, '2020-09-26 11:38:33', 'Transit - saved : ', 1),
(97, '2020-09-26 11:43:17', 'Car - saved : ', 1),
(98, '2020-09-26 11:45:51', 'Transit - saved : ', 1),
(99, '2020-09-28 08:38:36', 'Login - \'admin\'', 1),
(100, '2020-09-28 08:56:12', 'ExpencesCategory - saved : ', 1),
(101, '2020-09-28 09:25:05', 'ExpencesCategory - updated : ', 1),
(102, '2020-09-28 09:25:20', 'ExpencesCategory - deleted : ', 1),
(103, '2020-09-28 09:25:35', 'ExpencesCategory - saved : ', 1),
(104, '2020-09-28 09:56:54', 'Logout - \'admin\'', 1),
(105, '2020-09-28 09:56:56', 'Login - \'admin\'', 1),
(106, '2020-09-28 10:49:59', 'Expences - saved : ', 1),
(107, '2020-09-28 10:52:41', 'Expences - saved : ', 1),
(108, '2020-09-28 10:53:43', 'Expences - deleted : ', 1),
(109, '2020-09-28 11:55:02', 'Logout - \'admin\'', 1),
(110, '2020-09-28 11:55:04', 'Login - \'admin\'', 1),
(111, '2020-09-28 14:17:22', 'Logout - \'admin\'', 1),
(112, '2020-09-28 14:17:26', 'Login - \'admin\'', 1),
(113, '2020-09-28 16:05:53', 'Logout - \'admin\'', 1),
(114, '2020-09-28 16:05:55', 'Login - \'admin\'', 1),
(115, '2020-09-30 17:02:24', 'Logout - \'admin\'', 1),
(116, '2020-09-30 17:02:30', 'Login - \'admin\'', 1),
(117, '2020-10-02 10:57:59', 'Login - \'admin\'', 1),
(118, '2020-10-03 08:53:50', 'Login - \'admin\'', 1),
(119, '2020-10-03 11:50:01', 'Logout - \'admin\'', 1),
(120, '2020-10-03 13:30:19', 'Login - \'admin\'', 1),
(121, '2020-10-05 08:54:39', 'Login - \'admin\'', 1),
(122, '2020-10-05 19:01:33', 'Logout - \'admin\'', 1),
(123, '2020-10-05 19:01:57', 'Login - \'admin\'', 1),
(124, '2020-10-06 09:29:01', 'Login - \'admin\'', 1),
(125, '2020-10-06 09:37:32', 'Transit - saved : ', 1),
(126, '2020-10-06 13:50:19', 'Login - \'admin\'', 1),
(127, '2020-10-06 14:31:37', 'Customer - saved : ', 1),
(128, '2020-10-06 14:32:02', 'Customer - deleted : ', 1),
(129, '2020-10-06 14:35:07', 'Customer - saved : ', 1),
(130, '2020-10-06 14:36:16', 'Customer - saved : ', 1),
(131, '2020-10-06 16:54:20', 'Logout - \'admin\'', 1),
(132, '2020-10-06 16:54:22', 'Login - \'admin\'', 1),
(133, '2020-10-06 17:02:34', 'Contracted - saved : ', 1),
(134, '2020-10-06 17:02:45', 'Contracted - deleted : ', 1),
(135, '2020-10-06 17:02:55', 'Contracted - saved : ', 1),
(136, '2020-10-06 17:03:33', 'Contracted - updated : ', 1),
(137, '2020-10-06 17:04:48', 'Contracted - saved : ', 1),
(138, '2020-10-06 17:47:46', 'Customer - saved : ', 1),
(139, '2020-10-06 18:45:10', 'Logout - \'admin\'', 1),
(140, '2020-10-06 18:45:12', 'Login - \'admin\'', 1),
(141, '2020-10-06 19:36:34', 'Logout - \'admin\'', 1),
(142, '2020-10-06 19:36:36', 'Login - \'admin\'', 1),
(143, '2020-10-06 19:37:55', 'Customer - saved : ', 1),
(144, '2020-10-06 19:40:58', 'Customer - deleted : ', 1),
(145, '2020-10-06 19:42:34', 'Customer - saved : ', 1),
(146, '2020-10-06 19:43:41', 'Customer - updated : ', 1),
(147, '2020-10-06 20:03:33', 'ToBeContract - saved : ', 1),
(148, '2020-10-06 20:03:49', 'ToBeContract - updated : ', 1),
(149, '2020-10-06 20:04:34', 'ToBeContract - saved : ', 1),
(150, '2020-10-06 20:04:41', 'ToBeContract - deleted : ', 1),
(151, '2020-10-06 20:04:54', 'ToBeContract - saved : ', 1),
(152, '2020-10-06 20:26:06', 'Customer - saved : ', 1),
(153, '2020-10-06 20:39:18', 'Customer - saved : ', 1),
(154, '2020-10-06 20:39:31', 'Customer - updated : ', 1),
(155, '2020-10-06 21:42:25', 'Login - \'admin\'', 1),
(156, '2020-10-06 22:30:07', 'Logout - \'admin\'', 1),
(157, '2020-10-06 22:30:09', 'Login - \'admin\'', 1),
(158, '2020-10-06 23:02:52', 'Customer - saved : ', 1),
(159, '2020-10-06 23:28:43', 'Customer - saved : ', 1),
(160, '2020-10-06 23:29:10', 'Customer - updated : ', 1),
(161, '2020-10-06 23:48:48', 'Customer - saved : ', 1),
(162, '2020-10-06 23:50:43', 'Customer - updated : ', 1),
(163, '2020-10-06 23:50:54', 'Customer - deleted : ', 1),
(164, '2020-10-07 09:06:57', 'Login - \'admin\'', 1),
(165, '2020-10-07 09:11:05', 'Customer - saved : ', 1),
(166, '2020-10-07 09:12:07', 'Customer - updated : ', 1),
(167, '2020-10-07 09:18:13', 'Customer - saved : ', 1),
(168, '2020-10-07 09:21:44', 'Customer - updated : ', 1),
(169, '2020-10-07 09:21:59', 'Customer - updated : ', 1),
(170, '2020-10-07 09:22:45', 'Customer - saved : ', 1),
(171, '2020-10-07 11:22:42', 'Logout - \'admin\'', 1),
(172, '2020-10-07 11:57:03', 'Login - \'admin\'', 1),
(173, '2020-10-07 19:28:53', 'Login - \'admin\'', 1),
(174, '2020-10-08 09:13:56', 'Login - \'admin\'', 1),
(175, '2020-10-08 09:46:24', 'Logout - \'admin\'', 1),
(176, '2020-10-08 09:46:26', 'Login - \'admin\'', 1),
(177, '2020-10-08 13:19:38', 'Login - \'admin\'', 1),
(178, '2020-10-08 13:20:23', 'Contracted - saved : ', 1),
(179, '2020-10-08 13:20:42', 'Contracted - deleted : ', 1),
(180, '2020-10-08 13:21:14', 'Contracted - updated : ', 1),
(181, '2020-10-08 13:21:41', 'ToBeContract - saved : ', 1),
(182, '2020-10-08 13:21:58', 'ToBeContract - updated : ', 1),
(183, '2020-10-08 13:22:04', 'ToBeContract - deleted : ', 1),
(184, '2020-10-08 13:23:55', 'Customer - saved : ', 1),
(185, '2020-10-08 13:25:48', 'Customer - updated : ', 1),
(186, '2020-10-08 13:26:33', 'Customer - deleted : ', 1),
(187, '2020-10-08 20:12:06', 'Logout - \'admin\'', 1),
(188, '2020-10-08 20:13:27', 'Login - \'admin\'', 1),
(189, '2020-10-09 10:01:29', 'Login - \'admin\'', 1),
(190, '2020-10-09 10:05:01', 'Customer - saved : ', 1),
(191, '2020-10-09 10:05:44', 'Customer - updated : ', 1),
(192, '2020-10-09 10:06:09', 'Customer - updated : ', 1),
(193, '2020-10-09 10:07:16', 'Customer - updated : ', 1),
(194, '2020-10-09 12:23:32', 'Logout - \'admin\'', 1),
(195, '2020-10-09 12:23:36', 'Login - \'admin\'', 1),
(196, '2020-10-09 12:32:58', 'Transit - saved : ', 1),
(197, '2020-10-09 12:34:31', 'Transit - saved : ', 1),
(198, '2020-10-09 12:35:07', 'Transit - updated : ', 1),
(199, '2020-10-09 12:58:56', 'Transit - saved : ', 1),
(200, '2020-10-09 12:59:15', 'Transit - updated : ', 1),
(201, '2020-10-09 18:41:05', 'Logout - \'admin\'', 1),
(202, '2020-10-09 18:41:09', 'Login - \'admin\'', 1),
(203, '2020-10-09 18:53:57', 'Transit - saved : ', 1),
(204, '2020-10-09 18:55:27', 'Transit - updated : ', 1),
(205, '2020-10-09 18:57:14', 'Transit - saved : ', 1),
(206, '2020-10-09 18:59:05', 'Transit - saved : ', 1),
(207, '2020-10-09 19:00:58', 'Transit - saved : ', 1),
(208, '2020-10-09 20:09:53', 'Payment - saved : ', 1),
(209, '2020-10-09 20:10:24', 'Payment - deleted : ', 1),
(210, '2020-10-09 20:10:36', 'Payment - saved : ', 1),
(211, '2020-10-09 20:10:52', 'Payment - updated : ', 1),
(212, '2020-10-09 21:18:31', 'Login - \'admin\'', 1),
(213, '2020-10-09 21:27:58', 'Transit - saved : ', 1),
(214, '2020-10-09 21:28:38', 'Transit - saved : ', 1),
(215, '2020-10-09 21:28:43', 'Transit - saved : ', 1),
(216, '2020-10-09 21:29:51', 'Transit - saved : ', 1),
(217, '2020-10-09 21:30:10', 'Transit - saved : ', 1),
(218, '2020-10-09 21:30:54', 'Transit - saved : ', 1),
(219, '2020-10-10 08:35:15', 'Login - \'admin\'', 1),
(220, '2020-10-10 18:57:53', 'Login - \'admin\'', 1),
(221, '2020-10-10 18:59:20', 'Transit - saved : ', 1),
(222, '2020-10-10 19:00:50', 'Payment - saved : ', 1),
(223, '2020-10-10 20:01:27', 'Logout - \'admin\'', 1),
(224, '2020-10-10 20:11:52', 'Login - \'admin\'', 1),
(225, '2020-10-11 22:50:04', 'Login - \'admin\'', 1),
(226, '2020-10-11 23:08:12', 'Login - \'admin\'', 1),
(227, '2020-10-12 10:21:40', 'Login - \'admin\'', 1),
(228, '2020-10-12 15:55:53', 'Login - \'admin\'', 1),
(229, '2020-10-12 16:09:02', 'Gate - saved : ', 1),
(230, '2020-10-12 16:10:33', 'Gate - updated : ', 1),
(231, '2020-10-12 16:10:40', 'Gate - deleted : ', 1),
(232, '2020-10-12 16:10:55', 'Gate - saved : ', 1),
(233, '2020-10-12 16:23:18', 'Car - saved : ', 1),
(234, '2020-10-12 16:25:07', 'Car - updated : ', 1),
(235, '2020-10-12 16:26:26', 'Car - saved : ', 1),
(236, '2020-10-12 16:29:17', 'Car - saved : ', 1),
(237, '2020-10-12 16:31:17', 'Car - saved : ', 1),
(238, '2020-10-12 16:31:32', 'Car - updated : ', 1),
(239, '2020-10-12 17:38:16', 'Logout - \'admin\'', 1),
(240, '2020-10-13 11:28:43', 'Login - \'admin\'', 1),
(241, '2020-10-13 13:08:19', 'Logout - \'admin\'', 1),
(242, '2020-10-13 13:08:44', 'Login - \'admin\'', 1),
(243, '2020-10-15 20:42:27', 'Login - \'admin\'', 1),
(244, '2020-10-15 21:16:44', 'Transit - saved : ', 1),
(245, '2020-10-15 21:17:12', 'Transit - saved : ', 1),
(246, '2020-10-15 21:25:35', 'Transit - saved : ', 1),
(247, '2020-10-15 21:26:00', 'Transit - saved : ', 1),
(248, '2020-10-16 00:06:45', 'Logout - \'admin\'', 1),
(249, '2020-10-16 00:06:48', 'Login - \'admin\'', 1),
(250, '2020-10-16 00:50:04', 'Transit - saved : ', 1),
(251, '2020-10-16 00:51:58', 'Transit - saved : ', 1),
(252, '2020-10-16 01:32:22', 'Transit - saved : ', 1),
(253, '2020-10-16 10:00:46', 'Login - \'admin\'', 1),
(254, '2020-10-16 12:11:01', 'Logout - \'admin\'', 1),
(255, '2020-10-16 12:11:04', 'Login - \'admin\'', 1),
(256, '2020-10-16 15:12:20', 'Logout - \'admin\'', 1),
(257, '2020-10-16 15:12:23', 'Login - \'admin\'', 1),
(258, '2020-10-16 15:12:49', 'Expences - saved : ', 1),
(259, '2020-10-16 15:13:20', 'Expences - saved : ', 1),
(260, '2020-10-16 19:58:54', 'Login - \'admin\'', 1),
(261, '2020-10-16 21:35:04', 'CarType - saved : ', 1),
(262, '2020-10-16 21:49:09', 'CarType - saved : type', 1),
(263, '2020-10-16 21:49:23', 'CarType - updated : type 01', 1),
(264, '2020-10-16 22:49:48', 'Logout - \'admin\'', 1),
(265, '2020-10-16 22:49:51', 'Login - \'admin\'', 1),
(266, '2020-10-16 23:01:14', 'Car - saved : ', 1),
(267, '2020-10-16 23:06:10', 'Transit - saved : ', 1),
(268, '2020-10-16 23:42:04', 'Transit - saved : ', 1),
(269, '2020-10-17 00:54:37', 'Logout - \'admin\'', 1),
(270, '2020-10-17 00:54:40', 'Login - \'admin\'', 1),
(271, '2020-10-17 11:07:07', 'Login - \'admin\'', 1),
(272, '2020-10-17 12:14:28', 'Logout - \'admin\'', 1),
(273, '2020-10-17 12:14:30', 'Login - \'admin\'', 1),
(274, '2020-10-17 12:15:30', 'Login - \'admin\'', 1),
(275, '2020-10-17 13:03:18', 'Logout - \'admin\'', 1),
(276, '2020-10-17 13:03:20', 'Login - \'admin\'', 1),
(277, '2020-10-17 13:23:04', 'Transit - saved : ', 1),
(278, '2020-10-17 13:26:04', 'Transit - saved : ', 1),
(279, '2020-10-17 13:27:03', 'Car - saved : ', 1),
(280, '2020-10-17 13:27:53', 'Transit - saved : ', 1),
(281, '2020-10-17 20:46:34', 'Login - \'admin\'', 1),
(282, '2020-10-18 13:26:34', 'Login - \'admin\'', 1),
(283, '2020-10-18 18:28:59', 'Login - \'admin\'', 1),
(284, '2020-10-18 19:09:32', 'Transit - saved : ', 1),
(285, '2020-10-18 19:12:01', 'Transit - saved : ', 1),
(286, '2020-10-18 19:12:53', 'Transit - saved : ', 1),
(287, '2020-10-18 19:13:09', 'Transit - updated : ', 1),
(288, '2020-10-18 19:59:56', 'Logout - \'admin\'', 1),
(289, '2020-10-18 19:59:58', 'Login - \'admin\'', 1),
(290, '2020-10-18 21:13:38', 'Logout - \'admin\'', 1),
(291, '2020-10-18 21:13:40', 'Login - \'admin\'', 1),
(292, '2020-10-18 21:38:34', 'Transit - saved : ', 1),
(293, '2020-10-18 21:48:55', 'Transit - saved : ', 1),
(294, '2020-10-18 22:02:34', 'Payment - saved : ', 1),
(295, '2020-10-18 22:04:41', 'Transit - saved : ', 1),
(296, '2020-10-18 22:05:12', 'Transit - updated : ', 1),
(297, '2020-10-18 22:08:09', 'Car - saved : ', 1),
(298, '2020-10-18 22:09:18', 'Transit - saved : ', 1),
(299, '2020-10-18 22:52:27', 'Logout - \'admin\'', 1),
(300, '2020-10-18 22:52:29', 'Login - \'admin\'', 1),
(301, '2020-10-18 23:12:56', 'Transit - saved : ', 1),
(302, '2020-10-18 23:20:20', 'Transit - saved : ', 1),
(303, '2020-10-18 23:23:46', 'Transit - saved : ', 1),
(304, '2020-10-18 23:24:45', 'Transit - saved : ', 1),
(305, '2020-10-18 23:38:32', 'Transit - saved : ', 1),
(306, '2020-10-19 23:20:04', 'Login - \'admin\'', 1),
(307, '2020-10-20 15:09:55', 'Login - \'admin\'', 1),
(308, '2020-10-20 18:01:58', 'Logout - \'admin\'', 1),
(309, '2020-10-20 18:02:01', 'Login - \'admin\'', 1),
(310, '2020-10-20 18:15:25', 'Car - saved : ', 1),
(311, '2020-10-20 18:20:50', 'Transit - saved : ', 1),
(312, '2020-10-20 21:02:23', 'Logout - \'admin\'', 1),
(313, '2020-10-20 21:02:45', 'Login - \'admin\'', 1),
(314, '2020-10-20 22:23:14', 'Transit - saved : ', 1),
(315, '2020-10-20 23:14:59', 'Logout - \'admin\'', 1),
(316, '2020-10-20 23:15:02', 'Login - \'admin\'', 1),
(317, '2020-10-20 23:39:00', 'Transit - saved : ', 1),
(318, '2020-10-20 23:40:55', 'Transit - saved : ', 1),
(319, '2020-10-21 11:05:56', 'Login - \'admin\'', 1),
(320, '2020-10-21 11:16:17', 'Transit - saved : ', 1),
(321, '2020-10-21 11:18:45', 'Transit - saved : ', 1),
(322, '2020-10-21 11:21:10', 'Transit - saved : ', 1),
(323, '2020-10-21 11:22:55', 'Transit - saved : ', 1),
(324, '2020-10-21 11:24:54', 'Transit - saved : ', 1),
(325, '2020-10-21 17:17:31', 'Login - \'admin\'', 1),
(326, '2020-10-21 18:10:39', 'Logout - \'admin\'', 1),
(327, '2020-10-21 18:10:41', 'Login - \'admin\'', 1),
(328, '2020-10-21 20:45:09', 'Logout - \'admin\'', 1),
(329, '2020-10-21 21:14:15', 'Login - \'admin\'', 1),
(330, '2020-10-22 11:20:58', 'Login - \'admin\'', 1),
(331, '2020-10-22 11:52:58', 'Transit - saved : ', 1),
(332, '2020-10-22 11:53:42', 'Payment - saved : ', 1),
(333, '2020-10-22 11:58:37', 'Payment - saved : ', 1),
(334, '2020-10-22 13:25:56', 'Login - \'admin\'', 1),
(335, '2020-10-22 14:21:23', 'Logout - \'admin\'', 1),
(336, '2020-10-22 14:21:25', 'Login - \'admin\'', 1),
(337, '2020-10-22 16:32:55', 'Logout - \'admin\'', 1),
(338, '2020-10-22 16:33:01', 'Login - \'admin\'', 1),
(339, '2020-10-22 16:41:35', 'Transit - saved : ', 1),
(340, '2020-10-22 17:20:47', 'Logout - \'admin\'', 1),
(341, '2020-10-22 17:20:52', 'Login - \'admin\'', 1),
(342, '2020-10-22 18:43:29', 'Expences - saved : ', 1),
(343, '2020-10-22 19:28:23', 'Car - saved : ', 1),
(344, '2020-10-22 21:45:24', 'Logout - \'admin\'', 1),
(345, '2020-10-22 21:45:27', 'Login - \'admin\'', 1),
(346, '2020-10-22 21:45:54', 'Car - saved : ', 1),
(347, '2020-10-22 22:14:21', 'Transit - saved : ', 1),
(348, '2020-10-22 22:16:51', 'Transit - saved : ', 1),
(349, '2020-10-22 22:18:48', 'Transit - saved : ', 1),
(350, '2020-10-22 22:23:46', 'Transit - saved : ', 1),
(351, '2020-10-22 22:35:08', 'Transit - saved : ', 1),
(352, '2020-10-22 23:14:20', 'Logout - \'admin\'', 1),
(353, '2020-10-22 23:14:23', 'Login - \'admin\'', 1),
(354, '2020-10-22 23:30:03', 'Transit - saved : ', 1),
(355, '2020-10-22 23:32:47', 'Payment - saved : ', 1),
(356, '2020-10-23 00:01:42', 'Payment - saved : ', 1),
(357, '2020-10-23 00:21:45', 'Transit - saved : ', 1),
(358, '2020-10-23 00:24:55', 'Transit - saved : ', 1),
(359, '2020-10-23 00:27:55', 'Transit - saved : ', 1),
(360, '2020-10-23 00:29:31', 'Transit - saved : ', 1),
(361, '2020-10-23 00:30:52', 'Transit - saved : ', 1),
(362, '2020-10-23 00:34:57', 'Transit - saved : ', 1),
(363, '2020-10-23 00:35:19', 'Transit - saved : ', 1),
(364, '2020-10-23 00:43:02', 'Payment - saved : ', 1),
(365, '2020-10-23 00:49:45', 'Transit - saved : ', 1),
(366, '2020-10-23 00:51:41', 'Payment - saved : ', 1),
(367, '2020-10-23 00:52:35', 'Payment - saved : ', 1),
(368, '2020-10-23 00:57:34', 'Transit - saved : ', 1),
(369, '2020-10-23 01:00:07', 'Payment - saved : ', 1),
(370, '2020-10-23 18:49:47', 'Login - \'admin\'', 1),
(371, '2020-10-23 19:18:33', 'Transit - saved : ', 1),
(372, '2020-10-23 21:02:34', 'Logout - \'admin\'', 1),
(373, '2020-10-23 21:02:37', 'Login - \'admin\'', 1),
(374, '2020-10-23 21:14:26', 'Expences - saved : ', 1),
(375, '2020-10-23 22:04:30', 'Transit - saved : ', 1),
(376, '2020-10-23 22:04:55', 'Payment - saved : ', 1),
(377, '2020-10-24 00:31:14', 'Logout - \'admin\'', 1),
(378, '2020-10-24 00:31:19', 'Login - \'admin\'', 1),
(379, '2020-10-24 02:09:30', 'Logout - \'admin\'', 1),
(380, '2020-10-24 02:09:32', 'Login - \'admin\'', 1),
(381, '2020-10-24 11:47:24', 'Login - \'admin\'', 1),
(382, '2020-10-24 12:55:07', 'Logout - \'admin\'', 1),
(383, '2020-10-24 12:55:10', 'Login - \'admin\'', 1),
(384, '2020-10-24 16:20:45', 'Logout - \'admin\'', 1),
(385, '2020-10-24 16:20:51', 'Login - \'admin\'', 1),
(386, '2020-10-24 16:46:55', 'Transit - saved : ', 1),
(387, '2020-10-24 16:54:16', 'Transit - saved : ', 1),
(388, '2020-10-24 16:58:51', 'Payment - saved : ', 1),
(389, '2020-10-24 17:01:36', 'Payment - saved : ', 1),
(390, '2020-10-24 19:08:16', 'Login - \'admin\'', 1),
(391, '2020-10-24 21:59:55', 'Logout - \'admin\'', 1),
(392, '2020-10-24 21:59:58', 'Login - \'admin\'', 1),
(393, '2020-10-26 12:47:44', 'Login - \'admin\'', 1),
(394, '2020-10-26 15:10:01', 'Logout - \'admin\'', 1),
(395, '2020-10-26 15:10:04', 'Login - \'admin\'', 1),
(396, '2020-10-26 17:38:01', 'Logout - \'admin\'', 1),
(397, '2020-10-26 17:38:03', 'Login - \'admin\'', 1),
(398, '2020-10-26 18:44:35', 'Logout - \'admin\'', 1),
(399, '2020-10-26 18:44:37', 'Login - \'admin\'', 1),
(400, '2020-10-26 23:27:15', 'Logout - \'admin\'', 1),
(401, '2020-10-26 23:27:20', 'Login - \'admin\'', 1),
(402, '2020-10-27 01:21:15', 'Logout - \'admin\'', 1),
(403, '2020-10-27 01:21:17', 'Logout - \'admin\'', 1),
(404, '2020-10-27 01:21:25', 'Login - \'admin\'', 1),
(405, '2020-10-27 10:15:05', 'Logout - \'admin\'', 1),
(406, '2020-10-27 10:15:10', 'Login - \'admin\'', 1),
(407, '2020-10-31 11:32:22', 'Login - \'admin\'', 1),
(408, '2020-10-31 14:37:17', 'Logout - \'admin\'', 1),
(409, '2020-10-31 14:37:22', 'Login - \'admin\'', 1),
(410, '2020-11-03 11:24:03', 'Login - \'admin\'', 1),
(411, '2020-11-09 16:04:23', 'Logout - \'admin\'', 1),
(412, '2020-11-09 16:04:30', 'Login - \'admin\'', 1),
(413, '2020-11-09 16:05:14', 'Customer - saved : ', 1),
(414, '2020-11-09 16:05:36', 'Customer - saved : ', 1),
(415, '2020-11-09 16:07:59', 'Customer - saved : ', 1),
(416, '2020-11-09 16:09:35', 'Customer - saved : ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car_code` varchar(500) NOT NULL,
  `model` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `system_date` datetime NOT NULL,
  `car_custom` float NOT NULL,
  `car_number` varchar(500) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `image2` varchar(10000) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `image4` varchar(500) NOT NULL,
  `image5` varchar(500) NOT NULL,
  `gate_id` int(11) NOT NULL,
  `car_type_id` int(11) NOT NULL,
  `exit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_code`, `model`, `color`, `size`, `system_date`, `car_custom`, `car_number`, `image`, `image2`, `image3`, `image4`, `image5`, `gate_id`, `car_type_id`, `exit_date`) VALUES
(1, 'A-00001', 3, 1, 2, '2020-10-22 21:45:54', 0, '555', '', '', '', '', '', 2, 1, '2020-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`id`, `name`) VALUES
(1, 'type 01');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'test 01');

-- --------------------------------------------------------

--
-- Table structure for table `contracted`
--

CREATE TABLE `contracted` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contracted`
--

INSERT INTO `contracted` (`id`, `name`) VALUES
(2, 'facebook'),
(3, 'viber');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `symbol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES
(1, 'test 01', '$.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `married` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `birthdate` date NOT NULL,
  `anniversary` date NOT NULL,
  `child` varchar(500) NOT NULL,
  `child_age_1` int(11) NOT NULL,
  `child_birthdate_1` date NOT NULL,
  `child_age_2` int(11) NOT NULL,
  `child_birthdate_2` date NOT NULL,
  `child_age_3` int(11) NOT NULL,
  `child_birthdate_3` date NOT NULL,
  `child_age_4` int(11) NOT NULL,
  `child_birthdate_4` date NOT NULL,
  `child_age_5` int(11) NOT NULL,
  `child_birthdate_5` date NOT NULL,
  `child_age_6` int(11) NOT NULL,
  `child_birthdate_6` date NOT NULL,
  `child_age_7` int(11) NOT NULL,
  `child_birthdate_7` date NOT NULL,
  `child_age_8` int(11) NOT NULL,
  `child_birthdate_8` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `address`, `city`, `state`, `zip`, `phone`, `mobile`, `birthday`, `married`, `name`, `birthdate`, `anniversary`, `child`, `child_age_1`, `child_birthdate_1`, `child_age_2`, `child_birthdate_2`, `child_age_3`, `child_birthdate_3`, `child_age_4`, `child_birthdate_4`, `child_age_5`, `child_birthdate_5`, `child_age_6`, `child_birthdate_6`, `child_age_7`, `child_birthdate_7`, `child_age_8`, `child_birthdate_8`) VALUES
(3, 'rgwe', 'gw', 'gwr', 'grw', 'grwa', 'g', 245, 357, 3576, '2020-09-27', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(4, 'tre', 'fgds', 'dfgnbr', 'bdghnbr', 'bgdfb', 'dbhdenb', 7587, 0, 0, '2020-10-19', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(5, 'jgkgjk', 'gjkjgkgjk', 'jkjgkjgl', 'jkjkjlk', 'jkjkj', 'hgfhtgfd', 535737, 425732, 25732753, '2020-09-28', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(6, 'jgkgjk', 'gjkjgkgjk', 'jkjgkjgl', 'jkjkjlk', 'jkjkj', 'hgfhtgfd', 535737, 425732, 25732753, '2020-09-28', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(7, 'gdhdh', 'ghgfdhgh', 'ghgdfhdg', 'ghgdfhr', 'gnhgfhng', 'gnhgfdnhgfj', 7587, 654564564, 565548989, '2020-10-19', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(8, 'Lakshika', 'Rasanjali', 'lakshikarasanjali1114@gmail.com', 'qqq', 'Kurunegala', 'dfbfb', 42, 716471077, 11, '2020-09-29', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(9, 'ukut', 'gkhgk', 'ghkjg', 'ghkg', 'grwa', 'dfbfb', 42, 716471077, 11, '2020-09-29', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(11, 'Lakshika', 'Rasanjali', 'chamithruwinda@gmail.com.com', 'qqq', 'jkjkj', 'gnhgfdnhgfj', 42, 357, 718578621, '2020-10-27', '', 'test11', '2020-10-28', '2020-10-28', '', 55, '2020-10-13', 55, '2020-10-30', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(12, 'Lakshika', 'Prabath', 'dileeepprabath@yahoo.com', 'bdghnbr', 'bgdfb', 'dfbfb', 42, 716471077, 3576, '2020-11-05', '', 'test 01', '2020-10-11', '2020-10-26', '', 55, '2020-10-30', 5, '2020-10-27', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(13, 'gfthgth', 'gdhjn', 'gdhndgn', 'ghnfdn', '', '', 0, 0, 0, '0000-00-00', 'Male', 'dhndfg', '2020-10-09', '2020-10-08', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(14, 'ergg', 'rfgrfeg', 'rgregh', '', '', '', 0, 0, 0, '0000-00-00', 'Male', '', '0000-00-00', '0000-00-00', '', 53, '2020-10-24', 8, '2020-10-30', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(16, 'test 01', 'test 01', 'test 01', 'test 01', 'test 01', 'test 01', 10, 10, 10, '2020-10-09', 'Feale', 'test 01', '2020-10-09', '2020-10-09', 'No', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09', 10, '2020-10-09'),
(17, 'qwqw', 'qwqw', 'qwqw', 'qwqw', 'qwqw', 'qwqw', 0, 565, 4847, '0000-00-00', 'Yes', 'fgd', '2020-11-05', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(18, 'Dileep', 'Prabath', '', '40/B Green View', 'Maspotha', 'Kurunegala', 60000, 716471077, 11, '2020-11-17', '', 'Dileep Prabath', '2020-11-06', '2020-11-11', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(19, 'Dileep', 'Prabath', '', '40/B Green View', 'Maspotha', 'Kurunegala', 60000, 0, 0, '0000-00-00', 'No', 'Dileep Prabath', '0000-00-00', '0000-00-00', 'No', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(20, 'qqq', '', '', '', '', '', 0, 0, 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00'),
(21, 'nnn', 'qqq', 'qqq', '', '', '', 0, 0, 0, '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contracted`
--

CREATE TABLE `customer_contracted` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contracted_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contracted`
--

INSERT INTO `customer_contracted` (`id`, `customer_id`, `contracted_id`) VALUES
(1, 6, 2),
(2, 6, 3),
(3, 7, 3),
(4, 7, 2),
(5, 7, 3),
(6, 8, 3),
(7, 9, 3),
(9, 11, 3),
(10, 12, 3),
(11, 13, 3),
(13, 16, 2),
(14, 16, 3),
(15, 17, 3),
(16, 18, 2),
(17, 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer_regarding`
--

CREATE TABLE `customer_regarding` (
  `id` int(11) NOT NULL,
  `to_be_contract_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_regarding`
--

INSERT INTO `customer_regarding` (`id`, `to_be_contract_id`, `customer_id`) VALUES
(1, 1, 8),
(4, 1, 9),
(8, 1, 12),
(10, 1, 16),
(11, 4, 16),
(12, 1, 18),
(13, 4, 18);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `name`) VALUES
(1, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `amount` float NOT NULL,
  `discription` varchar(10000) NOT NULL,
  `system_date` date NOT NULL,
  `expences_date` date NOT NULL,
  `car_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `category`, `amount`, `discription`, `system_date`, `expences_date`, `car_number`) VALUES
(3, 1, 101329, 'Transit Amount', '2020-10-15', '2020-10-15', 1),
(4, 1, 30, 'Transit Amount', '2020-10-22', '2020-10-22', 1),
(5, 1, 50, 'Transit Amount', '2020-10-22', '2020-10-22', 1),
(6, 1, 961.55, 'Transit Amount', '2020-10-22', '2020-10-22', 1),
(7, 1, 1549.6, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(8, 1, 25, 'Transit Amount', '2020-10-22', '2020-10-22', 1),
(9, 1, 375, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(10, 1, 165, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(11, 1, 275, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(12, 1, 165, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(13, 1, 165, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(14, 1, 165, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(15, 1, 165, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(16, 1, 110, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(17, 1, 110, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(18, 1, 1421.6, 'Transit Amount', '2020-11-11', '2020-11-11', 1),
(19, 2, 300, 'gdfgdg', '2020-10-23', '2020-10-23', NULL),
(20, 1, 8263, 'Transit Amount', '2020-10-23', '2020-10-23', 1),
(21, 1, 1500, 'Transit Amount', '2020-10-24', '2020-10-24', 1),
(22, 1, 500, 'Transit Amount', '2020-10-24', '2020-10-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expences_category`
--

CREATE TABLE `expences_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expences_category`
--

INSERT INTO `expences_category` (`id`, `name`) VALUES
(1, 'transit_expences'),
(2, 'test 01');

-- --------------------------------------------------------

--
-- Table structure for table `gate`
--

CREATE TABLE `gate` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gate`
--

INSERT INTO `gate` (`id`, `name`) VALUES
(2, 'Gate 01');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`) VALUES
(1, 'wef'),
(3, 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Privilege'),
(3, 'Designation'),
(26, 'Role');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transit_id` int(11) NOT NULL,
  `system_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transit_id`, `system_date`, `customer_id`, `amount`) VALUES
(1, 1, '2020-10-24 16:58:51', 3, 500),
(2, 1, '2020-10-24 17:01:36', 3, 300);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `view` tinyint(1) DEFAULT NULL,
  `ins` tinyint(1) DEFAULT NULL,
  `upd` tinyint(1) DEFAULT NULL,
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `role_id`, `module_id`, `view`, `ins`, `upd`, `del`) VALUES
(1, 1, 2, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 1, 1),
(3, 1, 3, 1, 1, 1, 1),
(26, 1, 26, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin Manager');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(2, 'test 01');

-- --------------------------------------------------------

--
-- Table structure for table `to_be_contract`
--

CREATE TABLE `to_be_contract` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_be_contract`
--

INSERT INTO `to_be_contract` (`id`, `name`) VALUES
(1, 'test 01'),
(4, 'Promotion');

-- --------------------------------------------------------

--
-- Table structure for table `transit`
--

CREATE TABLE `transit` (
  `id` int(11) NOT NULL,
  `currency` int(11) NOT NULL,
  `fees` float NOT NULL,
  `transit_fee` float NOT NULL,
  `extra_expences` float NOT NULL,
  `car_number` int(11) NOT NULL,
  `memphis_number` varchar(500) NOT NULL,
  `car_custom` float NOT NULL,
  `customer_charges` float NOT NULL,
  `total` float NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment` float DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `transit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `processing_date` date NOT NULL,
  `top_history` date NOT NULL,
  `bottom_history_1` date NOT NULL,
  `bottom_history_2` date NOT NULL,
  `invoice_value` float NOT NULL,
  `iqd_value` float NOT NULL,
  `received` varchar(500) NOT NULL,
  `temporary_number` varchar(500) NOT NULL,
  `note` varchar(10000) NOT NULL,
  `received_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transit`
--

INSERT INTO `transit` (`id`, `currency`, `fees`, `transit_fee`, `extra_expences`, `car_number`, `memphis_number`, `car_custom`, `customer_charges`, `total`, `customer_id`, `payment`, `status`, `transit_date`, `processing_date`, `top_history`, `bottom_history_1`, `bottom_history_2`, `invoice_value`, `iqd_value`, `received`, `temporary_number`, `note`, `received_amount`) VALUES
(1, 1, 100, 100, 100, 1, '123', 100, 100, 500, 3, 1000, 1, '2020-10-24 16:54:15', '2020-10-24', '2020-10-24', '2020-10-24', '2020-10-24', 1000, 100, 'fdghjgfdhjfgrd', '123', 'ergerge', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `user_status_id` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` text,
  `dob` date DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nic` varchar(400) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `image` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `designation_id`, `user_status_id`, `name`, `username`, `password`, `dob`, `contact_no`, `email`, `nic`, `address`, `image`) VALUES
(1, 1, 1, 'Admin', 'admin', '$2y$10$ZDUyNDYzYjYzM2VjZTNmMOkH2c0VKNI5.N43XGEQCXPHwSqInqNTW', '1995-05-05', '0336665552', 'test@test.com', '65465465v', '313/1 skjhsdkjcnbdkjcbnkdjnc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`, `user_id`) VALUES
(0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`id`, `name`) VALUES
(1, 'Active'),
(2, 'Deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_activity_user1_idx` (`user_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color` (`color`),
  ADD KEY `model` (`model`),
  ADD KEY `size` (`size`),
  ADD KEY `gate_id` (`gate_id`),
  ADD KEY `car_type_id` (`car_type_id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracted`
--
ALTER TABLE `contracted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contracted`
--
ALTER TABLE `customer_contracted`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracted` (`contracted_id`),
  ADD KEY `customer` (`customer_id`);

--
-- Indexes for table `customer_regarding`
--
ALTER TABLE `customer_regarding`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `to_be_contract_id` (`to_be_contract_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `car_number` (`car_number`);

--
-- Indexes for table `expences_category`
--
ALTER TABLE `expences_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gate`
--
ALTER TABLE `gate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transit_id` (`transit_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_has_module_module1_idx` (`module_id`),
  ADD KEY `fk_role_has_module_role1_idx` (`role_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_be_contract`
--
ALTER TABLE `to_be_contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transit`
--
ALTER TABLE `transit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency` (`currency`),
  ADD KEY `car_number` (`car_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_designation1_idx` (`designation_id`),
  ADD KEY `fk_user_user_status1_idx` (`user_status_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_has_role_role1_idx` (`role_id`),
  ADD KEY `fk_user_role_user1_idx` (`user_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contracted`
--
ALTER TABLE `contracted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customer_contracted`
--
ALTER TABLE `customer_contracted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customer_regarding`
--
ALTER TABLE `customer_regarding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `expences_category`
--
ALTER TABLE `expences_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gate`
--
ALTER TABLE `gate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `to_be_contract`
--
ALTER TABLE `to_be_contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transit`
--
ALTER TABLE `transit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`color`) REFERENCES `color` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`model`) REFERENCES `model` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_ibfk_3` FOREIGN KEY (`size`) REFERENCES `size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_ibfk_4` FOREIGN KEY (`gate_id`) REFERENCES `gate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_ibfk_5` FOREIGN KEY (`car_type_id`) REFERENCES `car_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_contracted`
--
ALTER TABLE `customer_contracted`
  ADD CONSTRAINT `customer_contracted_ibfk_1` FOREIGN KEY (`contracted_id`) REFERENCES `contracted` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_contracted_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_regarding`
--
ALTER TABLE `customer_regarding`
  ADD CONSTRAINT `customer_regarding_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_regarding_ibfk_2` FOREIGN KEY (`to_be_contract_id`) REFERENCES `to_be_contract` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expences`
--
ALTER TABLE `expences`
  ADD CONSTRAINT `expences_ibfk_1` FOREIGN KEY (`category`) REFERENCES `expences_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expences_ibfk_2` FOREIGN KEY (`car_number`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`transit_id`) REFERENCES `transit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transit`
--
ALTER TABLE `transit`
  ADD CONSTRAINT `transit_ibfk_1` FOREIGN KEY (`currency`) REFERENCES `currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transit_ibfk_2` FOREIGN KEY (`car_number`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transit_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
