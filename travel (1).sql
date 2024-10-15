-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 12, 2024 at 04:12 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place` varchar(30) NOT NULL,
  `placeinfo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `place`, `placeinfo`, `price`, `photo`) VALUES
(3, 'Kerala', 'wertghyjkjhgf', 30000, 'river.jpg'),
(2, 'Kashmir', 'Kashmir is the northernmost geographical region of the Indian subcontinent. Until the mid-19th century, the term \"Kashmir\" denoted only the Kashmir Valley between the Great Himalayas and the Pir Panjal Range.', 15000, 'nyc.jpg'),
(4, 'Punjab', 'qasdfgbhnbvcs', 50000, 'temple.jpg'),
(5, 'Punjab', '132434t', 50000, 'paris.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `mobile`, `email`, `password`, `photo`) VALUES
(2, 'admin', '1234567', 'admin@gmail.com', 'admin', ''),
(8, 'xyz', '12345678', 'xyz@gmail.com', 'amps', 'nyc.jpg'),
(9, 'gaurav', '13467653', 'gaurav@gmail.com', 'gaurav', 'desert.jpg'),
(7, 'aarohi', '1234555', 'aarohi@sample.com', 'aarohi', 'river.jpg'),
(10, 'sujal', '12346', 'sujal@gmail.com', 'sujal', 'river.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
