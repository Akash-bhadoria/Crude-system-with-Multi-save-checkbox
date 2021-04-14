-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2021 at 08:30 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--
CREATE DATABASE IF NOT EXISTS `task` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `task`;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
CREATE TABLE IF NOT EXISTS `detail` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`userid`, `first`, `last`, `gender`, `hobbies`) VALUES
(1, 'Akash', 'Bhadoria', 'male', 'Reading'),
(2, 'Poonam', 'Bhadoria', 'Female', 'Travelling'),
(3, 'Gitika ', 'Lakesh', 'Female', 'Writing,Playing'),
(4, 'Harsh', 'Jain', 'male', 'Writing,Playing'),
(5, 'Himanshu ', 'Singh', 'male', 'Travelling'),
(6, 'Sonarika', 'Bhadoria', 'Female', 'Reading,Writing,Playing,Travelling');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `movies` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `userid`, `movies`) VALUES
(1, 1, 'Harry Potter'),
(2, 2, 'Transformer'),
(3, 2, 'Transpoter'),
(4, 3, 'Lord Of The Rings'),
(5, 3, 'Aquaman'),
(6, 3, 'Transformer'),
(7, 4, 'Transpoter'),
(8, 5, 'Harry Potter'),
(9, 5, 'Lord Of The Rings'),
(10, 5, 'Aquaman'),
(11, 5, 'Transformer'),
(12, 5, 'Transpoter'),
(13, 6, 'Harry Potter'),
(14, 6, 'Lord Of The Rings'),
(15, 6, 'Aquaman'),
(16, 6, 'Transformer'),
(17, 6, 'Transpoter');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
