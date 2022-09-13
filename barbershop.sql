-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2021 at 11:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `datebooked` date NOT NULL,
  `bookingdate` date NOT NULL,
  `bookingtime` time NOT NULL,
  `email` varchar(25) NOT NULL,
  `services` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `comment` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `datebooked`, `bookingdate`, `bookingtime`, `email`, `services`, `phone`, `comment`) VALUES
(22, '2021-06-07', '2021-06-13', '19:13:00', 'prabin@gmail.com', 'Haircuting, Beard Shaving, ', '1241241254', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Prashant Pokhrel', 'prashantpokhrel15@gmail.com', 'hello test message'),
(2, 'Surya Subedi', 'ss_subedi9@yahoo.com', 'as'),
(3, 'Bimal', 'bimal@gmail.com', 'Hello this just a test and trial'),
(4, 'Santosh', 'santosh@gmail.com', 'alksnfasnf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
(1, 'Surya', 'Subedi', 'prashant@gmail.com', '$2y$10$bFmnZ7jzPuY4DnZLZ6AhFup19C65wBnzKTioCdD/UUk8.hFROyeXe', '0405245085'),
(2, 'Prashant', 'Pokhrel', 'pras@gmail.com', '$2y$10$fyb3Q4qNg7c89g1uO6zozeyes0khFWm4Prvj.t5J58OcGkdSHeuWG', '0405845199'),
(3, 'Prashant', 'Pokhrel', 'abc@gmail.com', '$2y$10$6lUHdhPFBeYQpSzl7oXPMuhaaLFBcxLd7gnGn6uKW7BsE41dtNS32', '1234512345'),
(4, 'Man', 'Pol', 'man@gmail.com', '$2y$10$guIWwp7ScbqzjKHGeUut8ORAiVnDARBCVTPyzMeJrt4GzTb2J7tB2', '12451234124'),
(5, 'Bimal', 'Shrestha', 'bimal@gmail.com', '$2y$10$eGTq4r2qcN4RpGpB7o3Dfeha.jQFLjfKLvColaPAt4Ke119.fZ5y2', '12351235125'),
(6, 'Harry', 'Br', 'harry@gmail.com', '$2y$10$F3VivMsaosOy082s7stUueXgLgdfgArRwRS9dCHECNYdc8MpeBht2', '1241345132'),
(7, 'Prabin', 'Tamang', 'prabin@gmail.com', '$2y$10$AQD5.h5brrxLLsj4/ztT3.TCWeR4j9yjsLqYlEcl8jQv6XN/8ypkG', '1241241254'),
(8, 'Anish', 'Shrestha', 'anish@gmail.com', '$2y$10$FpiXHRi6t75tL2yUk0lRyubuw7YQ41BL69/8VNCgbIHpJjftoRTxi', '1241254151'),
(9, 'Santosh', 'Pokhrel', 'santosh@gmail.com', '$2y$10$HTcu81mNn1Ydb25Sk0lpbOJ5PRN.zb3lLWIFfz7gk.LRPmR.cdVcC', '29835723875');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
