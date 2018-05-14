-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2018 at 03:48 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

DROP TABLE IF EXISTS `choices`;
CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor'),
(2, 1, 0, 'PHP: Private Home Page'),
(3, 1, 0, 'PHP: Personal Homepage'),
(4, 1, 0, 'PHP: Personal Hypertext Preprocessor\r\n'),
(5, 2, 1, 'True'),
(6, 2, 0, 'False'),
(9, 3, 0, 'printf()'),
(10, 3, 0, 'echo'),
(11, 3, 0, 'print()'),
(12, 3, 1, 'println()'),
(13, 4, 1, 'True'),
(14, 4, 0, 'False'),
(15, 5, 0, 'True'),
(16, 5, 1, 'False'),
(17, 6, 0, 'Database, PHP Parser'),
(18, 6, 0, 'Web Page, Database, HTML & PHP Parser'),
(19, 6, 1, 'Web Server, Database, PHP Parser'),
(20, 6, 0, 'Web Page, Database, PHP Parser'),
(25, 7, 1, 'Rasmus Lerdorf'),
(26, 7, 0, 'Tim Berners-Lee'),
(27, 7, 0, 'W3C company'),
(28, 7, 0, 'Haakon Wium Lie'),
(29, 8, 0, 'TRUE'),
(30, 8, 1, 'FALSE'),
(35, 9, 0, '<php start> *code <end php>'),
(36, 9, 0, '<php *code* />'),
(37, 9, 1, '\"<?php  *code*  ?>\"'),
(38, 9, 0, '<php> *code* </php>'),
(39, 10, 0, '1 (one)'),
(40, 10, 0, '5 (five)'),
(41, 10, 0, '3 (three)'),
(42, 10, 1, '8 (eight)');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What does PHP stand for?'),
(2, 'A server-side scripting language, which offers features that allow us to make dynamic and interactive web pages.'),
(3, 'It not part of the displaying of values under PHP syntax.'),
(4, '=! is a conditional statement in PHP that can be use in negative comparison.'),
(5, 'MySQLite can be integrated in PHP.'),
(6, 'In order to run a PHP Web page, it needs three components;'),
(7, 'He unleashed the first version of PHP in 1994.'),
(8, 'PHP can perform system functions such as load, write and delete only on a database.'),
(9, 'PHP uses a delimiting tag'),
(10, 'What is the total data types in PHP?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
