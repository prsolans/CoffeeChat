-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2013 at 03:35 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `DateStatus`
--

CREATE TABLE `DateStatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `school` int(11) DEFAULT NULL,
  `location` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contactName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FA6F25A3F99EDABB` (`school`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `EventDate`
--

CREATE TABLE `EventDate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventdate` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `school` int(11) DEFAULT NULL,
  `timeIncrement` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D4F9C6CE3BAE0AA7` (`school`),
  KEY `IDX_D4F9C6CE7B00651C` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `EventDate`
--

INSERT INTO `EventDate` (`id`, `eventdate`, `school`, `timeIncrement`, `status`) VALUES
(19, 'May 9, 2013', 1, 0, 0),
(20, 'January 11, 2013', 9, 0, 0),
(21, 'February 1, 2014', 9, 0, 0),
(25, 'June 1, 2014', 4, 0, 0),
(26, 'May 9, 2013', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eventdate` int(11) DEFAULT NULL,
  `timeslot` int(11) NOT NULL,
  `add1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question1` text COLLATE utf8_unicode_ci,
  `question2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_7A997C5FF63AEB53` (`eventdate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `School`
--

CREATE TABLE `School` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `School`
--

INSERT INTO `School` (`id`, `name`, `image`) VALUES
(1, 'Booth School of Business', 'IMG-Booth.jpg'),
(2, 'Columbia Business School', 'IMG-Columbia.jpg'),
(3, 'Darden School of Business', 'IMG-Darden.jpg'),
(4, 'Haas School of Business', 'IMG-Haas.jpg'),
(5, 'Ivey School of Business', 'IMG-Ivey.jpg'),
(6, 'Kellogg School of Business', 'IMG-Kellogg.jpg'),
(7, 'McCombs School of Business', 'IMG-McCombs.jpg'),
(8, 'Queen''s School of Business', 'IMG-Queens.jpg'),
(9, 'Ross School of Business', 'IMG-Ross.jpg'),
(10, 'Rotman School of Business', 'IMG-Rotman.jpg'),
(11, 'Tepper School of Business', 'IMG-Tepper.jpg'),
(12, 'Wharton School of Business', 'IMG-Wharton.jpg'),
(13, 'University of Pennsylvania Undergrad', ''),
(14, 'GALA', ''),
(15, 'Women''s Networking', ''),
(18, 'University of Pennsylvania Undergrad', '');

-- --------------------------------------------------------

--
-- Table structure for table `Timeslot`
--

CREATE TABLE `Timeslot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slot_time` varchar(45) NOT NULL,
  `slots_total` int(10) unsigned NOT NULL DEFAULT '0',
  `slots_filled` int(10) unsigned NOT NULL DEFAULT '0',
  `date` varchar(45) NOT NULL,
  `status` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=296 ;

--
-- Dumping data for table `Timeslot`
--

INSERT INTO `Timeslot` (`id`, `slot_time`, `slots_total`, `slots_filled`, `date`, `status`) VALUES
(20, '8:00 - 8:15', 0, 0, '13', '1'),
(21, '8:15 - 8:30', 0, 0, '13', '1'),
(22, '8:30 - 8:45', 0, 0, '13', '1'),
(23, '8:45 - 9:00', 0, 0, '13', '1'),
(24, '9:00 - 9:15', 0, 0, '13', '1'),
(25, '9:15 - 9:30', 0, 0, '13', '1'),
(26, '9:30 - 9:45', 0, 0, '13', '1'),
(27, '9:45 - 10:00', 0, 0, '13', '1'),
(28, '10:00 - 10:15', 0, 0, '13', '1'),
(29, '10:15 - 10:30', 0, 0, '13', '1'),
(30, '10:30 - 10:45', 0, 0, '13', '1'),
(31, '10:45 - 11:00', 0, 0, '13', '1'),
(32, '11:00 - 11:15', 0, 0, '13', '1'),
(33, '11:15 - 11:30', 0, 0, '13', '1'),
(34, '12:30 - 12:50', 0, 0, '13', '1'),
(35, '12:50 - 1:10', 0, 0, '13', '1'),
(36, '1:10 - 1:30', 0, 0, '13', '1'),
(37, '1:30 - 1:50', 0, 0, '13', '1'),
(38, '1:50 - 2:10', 0, 0, '13', '1'),
(39, '2:10 - 2:30', 0, 0, '13', '1'),
(40, '2:30 - 2:50', 0, 0, '13', '1'),
(41, '2:50 - 3:10', 0, 0, '13', '1'),
(42, '3:10 - 3:30', 0, 0, '13', '1'),
(43, '8:00 - 8:15', 0, 0, '15', '1'),
(44, '8:15 - 8:30', 0, 0, '15', '1'),
(45, '8:30 - 8:45', 0, 0, '15', '1'),
(46, '8:45 - 9:00', 0, 0, '15', '1'),
(47, '9:00 - 9:15', 0, 0, '15', '1'),
(48, '9:15 - 9:30', 0, 0, '15', '1'),
(49, '9:30 - 9:45', 0, 0, '15', '1'),
(50, '9:45 - 10:00', 0, 0, '15', '1'),
(51, '10:00 - 10:15', 0, 0, '15', '1'),
(52, '10:15 - 10:30', 0, 0, '15', '1'),
(53, '10:30 - 10:45', 0, 0, '15', '1'),
(54, '10:45 - 11:00', 0, 0, '15', '1'),
(55, '11:00 - 11:15', 0, 0, '15', '1'),
(56, '11:15 - 11:30', 0, 0, '15', '1'),
(57, '12:30 - 12:50', 0, 0, '15', '1'),
(58, '12:50 - 1:10', 0, 0, '15', '1'),
(59, '1:10 - 1:30', 0, 0, '15', '1'),
(60, '1:30 - 1:50', 0, 0, '15', '1'),
(61, '1:50 - 2:10', 0, 0, '15', '1'),
(62, '2:10 - 2:30', 0, 0, '15', '1'),
(63, '2:30 - 2:50', 0, 0, '15', '1'),
(64, '2:50 - 3:10', 0, 0, '15', '1'),
(65, '3:10 - 3:30', 0, 0, '15', '1'),
(66, '8:00 - 8:15', 0, 0, '16', '1'),
(67, '8:15 - 8:30', 0, 0, '16', '1'),
(68, '8:30 - 8:45', 0, 0, '16', '1'),
(69, '8:45 - 9:00', 0, 0, '16', '1'),
(70, '9:00 - 9:15', 0, 0, '16', '1'),
(71, '9:15 - 9:30', 0, 0, '16', '1'),
(72, '9:30 - 9:45', 0, 0, '16', '1'),
(73, '9:45 - 10:00', 0, 0, '16', '1'),
(74, '10:00 - 10:15', 0, 0, '16', '1'),
(75, '10:15 - 10:30', 0, 0, '16', '1'),
(76, '10:30 - 10:45', 0, 0, '16', '1'),
(77, '10:45 - 11:00', 0, 0, '16', '1'),
(78, '11:00 - 11:15', 0, 0, '16', '1'),
(79, '11:15 - 11:30', 0, 0, '16', '1'),
(80, '12:30 - 12:50', 0, 0, '16', '1'),
(81, '12:50 - 1:10', 0, 0, '16', '1'),
(82, '1:10 - 1:30', 0, 0, '16', '1'),
(83, '1:30 - 1:50', 0, 0, '16', '1'),
(84, '1:50 - 2:10', 0, 0, '16', '1'),
(85, '2:10 - 2:30', 0, 0, '16', '1'),
(86, '2:30 - 2:50', 0, 0, '16', '1'),
(87, '2:50 - 3:10', 0, 0, '16', '1'),
(88, '3:10 - 3:30', 0, 0, '16', '1'),
(89, '8:00 - 8:15', 0, 0, '17', '1'),
(90, '8:15 - 8:30', 0, 0, '17', '1'),
(91, '8:30 - 8:45', 0, 0, '17', '1'),
(92, '8:45 - 9:00', 0, 0, '17', '1'),
(93, '9:00 - 9:15', 0, 0, '17', '1'),
(94, '9:15 - 9:30', 0, 0, '17', '1'),
(95, '9:30 - 9:45', 0, 0, '17', '1'),
(96, '9:45 - 10:00', 0, 0, '17', '1'),
(97, '10:00 - 10:15', 0, 0, '17', '1'),
(98, '10:15 - 10:30', 0, 0, '17', '1'),
(99, '10:30 - 10:45', 0, 0, '17', '1'),
(100, '10:45 - 11:00', 0, 0, '17', '1'),
(101, '11:00 - 11:15', 0, 0, '17', '1'),
(102, '11:15 - 11:30', 0, 0, '17', '1'),
(103, '12:30 - 12:50', 0, 0, '17', '1'),
(104, '12:50 - 1:10', 0, 0, '17', '1'),
(105, '1:10 - 1:30', 0, 0, '17', '1'),
(106, '1:30 - 1:50', 0, 0, '17', '1'),
(107, '1:50 - 2:10', 0, 0, '17', '1'),
(108, '2:10 - 2:30', 0, 0, '17', '1'),
(109, '2:30 - 2:50', 0, 0, '17', '1'),
(110, '2:50 - 3:10', 0, 0, '17', '1'),
(111, '3:10 - 3:30', 0, 0, '17', '1'),
(112, '8:00 - 8:15', 0, 0, '18', '1'),
(113, '8:15 - 8:30', 0, 0, '18', '1'),
(114, '8:30 - 8:45', 0, 0, '18', '1'),
(115, '8:45 - 9:00', 0, 0, '18', '1'),
(116, '9:00 - 9:15', 0, 0, '18', '1'),
(117, '9:15 - 9:30', 0, 0, '18', '1'),
(118, '9:30 - 9:45', 0, 0, '18', '1'),
(119, '9:45 - 10:00', 0, 0, '18', '1'),
(120, '10:00 - 10:15', 0, 0, '18', '1'),
(121, '10:15 - 10:30', 0, 0, '18', '1'),
(122, '10:30 - 10:45', 0, 0, '18', '1'),
(123, '10:45 - 11:00', 0, 0, '18', '1'),
(124, '11:00 - 11:15', 0, 0, '18', '1'),
(125, '11:15 - 11:30', 0, 0, '18', '1'),
(126, '12:30 - 12:50', 0, 0, '18', '1'),
(127, '12:50 - 1:10', 0, 0, '18', '1'),
(128, '1:10 - 1:30', 0, 0, '18', '1'),
(129, '1:30 - 1:50', 0, 0, '18', '1'),
(130, '1:50 - 2:10', 0, 0, '18', '1'),
(131, '2:10 - 2:30', 0, 0, '18', '1'),
(132, '2:30 - 2:50', 0, 0, '18', '1'),
(133, '2:50 - 3:10', 0, 0, '18', '1'),
(134, '3:10 - 3:30', 0, 0, '18', '1'),
(135, '8:00 - 8:15', 10, 0, '19', '1'),
(136, '8:15 - 8:30', 1, 0, '19', '1'),
(137, '8:30 - 8:45', 12, 0, '19', '1'),
(138, '8:45 - 9:00', 0, 0, '19', '1'),
(139, '9:00 - 9:15', 0, 0, '19', '1'),
(140, '9:15 - 9:30', 0, 0, '19', '1'),
(141, '9:30 - 9:45', 0, 0, '19', '1'),
(142, '9:45 - 10:00', 0, 0, '19', '1'),
(143, '10:00 - 10:15', 0, 0, '19', '1'),
(144, '10:15 - 10:30', 0, 0, '19', '1'),
(145, '10:30 - 10:45', 0, 0, '19', '1'),
(146, '10:45 - 11:00', 0, 0, '19', '1'),
(147, '11:00 - 11:15', 0, 0, '19', '1'),
(148, '11:15 - 11:30', 0, 0, '19', '1'),
(149, '12:30 - 12:50', 0, 0, '19', '1'),
(150, '12:50 - 1:10', 0, 0, '19', '1'),
(151, '1:10 - 1:30', 0, 0, '19', '1'),
(152, '1:30 - 1:50', 0, 0, '19', '1'),
(153, '1:50 - 2:10', 0, 0, '19', '1'),
(154, '2:10 - 2:30', 0, 0, '19', '1'),
(155, '2:30 - 2:50', 0, 0, '19', '1'),
(156, '2:50 - 3:10', 0, 0, '19', '1'),
(157, '3:10 - 3:30', 0, 0, '19', '1'),
(158, '8:00 - 8:15', 0, 0, '20', '1'),
(159, '8:15 - 8:30', 0, 0, '20', '1'),
(160, '8:30 - 8:45', 0, 0, '20', '1'),
(161, '8:45 - 9:00', 0, 0, '20', '1'),
(162, '9:00 - 9:15', 0, 0, '20', '1'),
(163, '9:15 - 9:30', 0, 0, '20', '1'),
(164, '9:30 - 9:45', 0, 0, '20', '1'),
(165, '9:45 - 10:00', 22, 0, '20', '1'),
(166, '10:00 - 10:15', 0, 0, '20', '1'),
(167, '10:15 - 10:30', 0, 0, '20', '1'),
(168, '10:30 - 10:45', 0, 0, '20', '1'),
(169, '10:45 - 11:00', 0, 0, '20', '1'),
(170, '11:00 - 11:15', 0, 0, '20', '1'),
(171, '11:15 - 11:30', 0, 0, '20', '1'),
(172, '12:30 - 12:50', 0, 0, '20', '1'),
(173, '12:50 - 1:10', 0, 0, '20', '1'),
(174, '1:10 - 1:30', 0, 0, '20', '1'),
(175, '1:30 - 1:50', 0, 0, '20', '1'),
(176, '1:50 - 2:10', 20, 0, '20', '1'),
(177, '2:10 - 2:30', 0, 0, '20', '1'),
(178, '2:30 - 2:50', 0, 0, '20', '1'),
(179, '2:50 - 3:10', 0, 0, '20', '1'),
(180, '3:10 - 3:30', 0, 0, '20', '1'),
(181, '8:00 - 8:15', 0, 0, '21', '1'),
(182, '8:15 - 8:30', 0, 0, '21', '1'),
(183, '8:30 - 8:45', 0, 0, '21', '1'),
(184, '8:45 - 9:00', 0, 0, '21', '1'),
(185, '9:00 - 9:15', 0, 0, '21', '1'),
(186, '9:15 - 9:30', 0, 0, '21', '1'),
(187, '9:30 - 9:45', 0, 0, '21', '1'),
(188, '9:45 - 10:00', 0, 0, '21', '1'),
(189, '10:00 - 10:15', 0, 0, '21', '1'),
(190, '10:15 - 10:30', 0, 0, '21', '1'),
(191, '10:30 - 10:45', 0, 0, '21', '1'),
(192, '10:45 - 11:00', 0, 0, '21', '1'),
(193, '11:00 - 11:15', 0, 0, '21', '1'),
(194, '11:15 - 11:30', 0, 0, '21', '1'),
(195, '12:30 - 12:50', 0, 0, '21', '1'),
(196, '12:50 - 1:10', 0, 0, '21', '1'),
(197, '1:10 - 1:30', 0, 0, '21', '1'),
(198, '1:30 - 1:50', 0, 0, '21', '1'),
(199, '1:50 - 2:10', 0, 0, '21', '1'),
(200, '2:10 - 2:30', 0, 0, '21', '1'),
(201, '2:30 - 2:50', 0, 0, '21', '1'),
(202, '2:50 - 3:10', 10, 0, '21', '1'),
(203, '3:10 - 3:30', 10, 0, '21', '1'),
(204, '8:00 - 8:15', 0, 0, '24', '1'),
(205, '8:15 - 8:30', 0, 0, '24', '1'),
(206, '8:30 - 8:45', 0, 0, '24', '1'),
(207, '8:45 - 9:00', 0, 0, '24', '1'),
(208, '9:00 - 9:15', 0, 0, '24', '1'),
(209, '9:15 - 9:30', 0, 0, '24', '1'),
(210, '9:30 - 9:45', 0, 0, '24', '1'),
(211, '9:45 - 10:00', 0, 0, '24', '1'),
(212, '10:00 - 10:15', 0, 0, '24', '1'),
(213, '10:15 - 10:30', 0, 0, '24', '1'),
(214, '10:30 - 10:45', 0, 0, '24', '1'),
(215, '10:45 - 11:00', 0, 0, '24', '1'),
(216, '11:00 - 11:15', 0, 0, '24', '1'),
(217, '11:15 - 11:30', 0, 0, '24', '1'),
(218, '12:30 - 12:50', 0, 0, '24', '1'),
(219, '12:50 - 1:10', 0, 0, '24', '1'),
(220, '1:10 - 1:30', 0, 0, '24', '1'),
(221, '1:30 - 1:50', 0, 0, '24', '1'),
(222, '1:50 - 2:10', 0, 0, '24', '1'),
(223, '2:10 - 2:30', 0, 0, '24', '1'),
(224, '2:30 - 2:50', 0, 0, '24', '1'),
(225, '2:50 - 3:10', 0, 0, '24', '1'),
(226, '3:10 - 3:30', 0, 0, '24', '1'),
(227, '8:00 - 8:15', 0, 0, '25', '1'),
(228, '8:15 - 8:30', 0, 0, '25', '1'),
(229, '8:30 - 8:45', 0, 0, '25', '1'),
(230, '8:45 - 9:00', 0, 0, '25', '1'),
(231, '9:00 - 9:15', 0, 0, '25', '1'),
(232, '9:15 - 9:30', 0, 0, '25', '1'),
(233, '9:30 - 9:45', 0, 0, '25', '1'),
(234, '9:45 - 10:00', 0, 0, '25', '1'),
(235, '10:00 - 10:15', 0, 0, '25', '1'),
(236, '10:15 - 10:30', 0, 0, '25', '1'),
(237, '10:30 - 10:45', 0, 0, '25', '1'),
(238, '10:45 - 11:00', 0, 0, '25', '1'),
(239, '11:00 - 11:15', 0, 0, '25', '1'),
(240, '11:15 - 11:30', 0, 0, '25', '1'),
(241, '12:30 - 12:50', 0, 0, '25', '1'),
(242, '12:50 - 1:10', 0, 0, '25', '1'),
(243, '1:10 - 1:30', 0, 0, '25', '1'),
(244, '1:30 - 1:50', 0, 0, '25', '1'),
(245, '1:50 - 2:10', 0, 0, '25', '1'),
(246, '2:10 - 2:30', 0, 0, '25', '1'),
(247, '2:30 - 2:50', 0, 0, '25', '1'),
(248, '2:50 - 3:10', 0, 0, '25', '1'),
(249, '3:10 - 3:30', 0, 0, '25', '1'),
(250, '8:00 - 8:15', 0, 0, '26', '1'),
(251, '8:15 - 8:30', 0, 0, '26', '1'),
(252, '8:30 - 8:45', 0, 0, '26', '1'),
(253, '8:45 - 9:00', 0, 0, '26', '1'),
(254, '9:00 - 9:15', 0, 0, '26', '1'),
(255, '9:15 - 9:30', 0, 0, '26', '1'),
(256, '9:30 - 9:45', 0, 0, '26', '1'),
(257, '9:45 - 10:00', 0, 0, '26', '1'),
(258, '10:00 - 10:15', 0, 0, '26', '1'),
(259, '10:15 - 10:30', 0, 0, '26', '1'),
(260, '10:30 - 10:45', 0, 0, '26', '1'),
(261, '10:45 - 11:00', 0, 0, '26', '1'),
(262, '11:00 - 11:15', 0, 0, '26', '1'),
(263, '11:15 - 11:30', 0, 0, '26', '1'),
(264, '12:30 - 12:50', 0, 0, '26', '1'),
(265, '12:50 - 1:10', 0, 0, '26', '1'),
(266, '1:10 - 1:30', 0, 0, '26', '1'),
(267, '1:30 - 1:50', 0, 0, '26', '1'),
(268, '1:50 - 2:10', 0, 0, '26', '1'),
(269, '2:10 - 2:30', 0, 0, '26', '1'),
(270, '2:30 - 2:50', 0, 0, '26', '1'),
(271, '2:50 - 3:10', 0, 0, '26', '1'),
(272, '3:10 - 3:30', 0, 0, '26', '1'),
(273, '8:00 - 8:15', 0, 0, '27', '1'),
(274, '8:15 - 8:30', 0, 0, '27', '1'),
(275, '8:30 - 8:45', 0, 0, '27', '1'),
(276, '8:45 - 9:00', 0, 0, '27', '1'),
(277, '9:00 - 9:15', 0, 0, '27', '1'),
(278, '9:15 - 9:30', 0, 0, '27', '1'),
(279, '9:30 - 9:45', 0, 0, '27', '1'),
(280, '9:45 - 10:00', 0, 0, '27', '1'),
(281, '10:00 - 10:15', 0, 0, '27', '1'),
(282, '10:15 - 10:30', 0, 0, '27', '1'),
(283, '10:30 - 10:45', 0, 0, '27', '1'),
(284, '10:45 - 11:00', 0, 0, '27', '1'),
(285, '11:00 - 11:15', 0, 0, '27', '1'),
(286, '11:15 - 11:30', 0, 0, '27', '1'),
(287, '12:30 - 12:50', 0, 0, '27', '1'),
(288, '12:50 - 1:10', 0, 0, '27', '1'),
(289, '1:10 - 1:30', 0, 0, '27', '1'),
(290, '1:30 - 1:50', 0, 0, '27', '1'),
(291, '1:50 - 2:10', 0, 0, '27', '1'),
(292, '2:10 - 2:30', 0, 0, '27', '1'),
(293, '2:30 - 2:50', 0, 0, '27', '1'),
(294, '2:50 - 3:10', 0, 0, '27', '1'),
(295, '3:10 - 3:30', 0, 0, '27', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `FK_FA6F25A3F99EDABB` FOREIGN KEY (`school`) REFERENCES `School` (`id`);

--
-- Constraints for table `EventDate`
--
ALTER TABLE `EventDate`
  ADD CONSTRAINT `EventDate_ibfk_1` FOREIGN KEY (`school`) REFERENCES `School` (`id`);

--
-- Constraints for table `Registration`
--
ALTER TABLE `Registration`
  ADD CONSTRAINT `FK_7A997C5FF63AEB53` FOREIGN KEY (`eventdate`) REFERENCES `EventDate` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
