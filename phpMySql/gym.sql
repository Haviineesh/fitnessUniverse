-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 01:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `FullName`, `Email`, `Phone`, `Message`) VALUES
(1, 'haviineesh', 'havi@gmail.com', 128889999, 'Testing'),
(2, 'haviineesh', 'havi@gmail.com', 128889999, 'Testing 2'),
(5, 'Hu Tao', 'Genshin@gmail.com', 123549874, 'The problem is that this website is too good.');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `username`, `email`, `password`) VALUES
(1, 'management', 'FitnessUniverse@gmail.com', 'd10af457daa1deed54e2c36b5f295e7e'),
(2, 'haviineesh', 'havii@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'joy', 'joy@gmail.com', '84d4e095af284ee708a4551c5f8639af');

-- --------------------------------------------------------

--
-- Table structure for table `personaltraining`
--

CREATE TABLE `personaltraining` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `IcNum` varchar(14) NOT NULL,
  `tGender` varchar(6) NOT NULL,
  `phNum` varchar(11) NOT NULL,
  `hours` int(2) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personaltraining`
--

INSERT INTO `personaltraining` (`id`, `fname`, `lname`, `IcNum`, `tGender`, `phNum`, `hours`, `datetime`) VALUES
(1, 'Haviineesh', 'Hariharan', '011204070785', 'Male', '0128470188', 3, '2021-04-02 19:45:00'),
(12, 'Teenesh', 'Subramaniam', '011304070795', 'Male', '0129841456', 4, '2021-04-10 12:00:00'),
(13, 'Ningguang', 'Liyue', '011305080885', 'Female', '+6013981456', 1, '2021-04-12 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'first', 'good@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(2, 'Diluc', 'diluc@gmail.com', 'db393c813d292284af2ca6b7d9bf5619'),
(3, 'Teenesh', 'teeneshsubramaniam10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Jeff Bezos ', 'mrj@jeff.com', 'a8c35a069a0b1879bf9965d06710b752');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `workoutID` int(6) UNSIGNED NOT NULL,
  `W_day` varchar(30) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `trainer` varchar(30) NOT NULL,
  `W_time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workoutID`, `W_day`, `exercise`, `trainer`, `W_time`) VALUES
(1, 'Sunday', 'Yoga', 'Alicia Victor', '8a.m-10a.m'),
(2, 'Sunday', 'Body Building', 'Rohan Sharma', '4p.m-6p.m'),
(3, 'Sunday', 'Anaerobic', 'Dong Lee', '7p.m-9p.m'),
(4, 'Monday', 'Yoga', 'Alicia Victor', '6a.m-8a.m'),
(5, 'Monday', 'Body Building', 'Rohan Sharma', '5p.m-7p.m'),
(6, 'Monday', 'Anaerobic', 'Dong Lee', '3p.m-5p.m'),
(7, 'Tuesday', 'Yoga', 'Alicia Victor', '6a.m-8a.m'),
(8, 'Tuesday', 'Body Building', 'Rohan Sharma', '4p.m-6p.m'),
(9, 'Tuesday', 'Anaerobic', 'Dong Lee', '7p.m-9p.m'),
(10, 'Wednesday', 'Yoga', 'Alicia Victor', '6a.m-8a.m'),
(11, 'Wednesday', 'Body Building', 'Rohan Sharma', '7p.m-9p.m'),
(12, 'Wednesday', 'Anaerobic', 'Dong Lee', '3p.m-5p.m'),
(13, 'Thursday', 'Yoga', 'Alicia Victor', '6a.m-8a.m'),
(14, 'Thursday', 'Body Building', 'Rohan Sharma', '7p.m-9p.m'),
(15, 'Thursday', 'Anaerobic', 'Dong Lee', '5p.m-7p.m'),
(16, 'Friday', 'Yoga', 'Alicia Victor', '6a.m-8a.m'),
(17, 'Friday', 'Body Building', 'Rohan Sharma', '3p.m-5p.m'),
(18, 'Friday', 'Anaerobic', 'Dong Lee', '4p.m-6p.m'),
(19, 'Saturday', 'Yoga', 'Alicia Victor', '8a.m-10a.m'),
(20, 'Saturday', 'Body Building', 'Rohan Sharma', '4p.m-6p.m'),
(21, 'Saturday', 'Anaerobic', 'Dong Lee', '6p.m-8p.m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personaltraining`
--
ALTER TABLE `personaltraining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`workoutID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personaltraining`
--
ALTER TABLE `personaltraining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `workoutID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
