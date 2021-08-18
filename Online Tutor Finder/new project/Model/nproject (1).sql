-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 04:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nid` int(10) NOT NULL,
  `postId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `reqId` int(10) NOT NULL,
  `approve` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `postId`, `userId`, `reqId`, `approve`) VALUES
(1, 12, 46, 43, 1),
(2, 11, 46, 43, 2),
(3, 10, 46, 43, 1),
(4, 9, 46, 43, 2),
(5, 6, 43, 46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lowSal` int(100) NOT NULL,
  `highSal` int(100) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `preftime` varchar(150) NOT NULL,
  `deadline` date NOT NULL,
  `userIdFk` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `medium`, `subject`, `class`, `location`, `lowSal`, `highSal`, `institution`, `preftime`, `deadline`, `userIdFk`, `name`, `status`) VALUES
(1, 'English', 'General Science', 'Twelve', 'Badda', 3000, 7000, 'Aiub', '18:10', '2021-08-25', 43, '', '1'),
(2, 'Others', 'Finance', 'six', 'Nikunjo', 3000, 7000, 'Aiub', '23:49', '2021-08-25', 43, 'Hridoy', '1'),
(3, 'English', 'Biology', 'Nine', 'Nikunjo', 2000, 5000, 'NSU', '23:11', '2021-08-24', 46, 'student', '0'),
(4, 'Bangla', 'Statistics', 'One', 'Badda', 1000, 2000, 'Buet', '18:25', '2021-08-23', 46, 'student', '0'),
(5, 'Bangla', 'Statistics', 'One', 'Badda', 1000, 2000, 'Buet', '18:32', '2021-08-25', 46, 'student', '0'),
(6, 'Others', 'Physic, ', 'One', 'Badda', 1000, 2000, 'Buet', '23:40', '2021-08-18', 43, 'Hridoy', '1'),
(7, 'English', 'Bangla, Chemistry, Statistics, ', 'One', 'Badda', 1000, 2000, 'Buet', '20:43', '2021-08-24', 46, 'student', '0'),
(8, 'Bangla', 'Math, Religion, ', 'One', 'Badda', 1000, 2000, 'Buet', '23:46', '2021-08-31', 46, 'student', '0'),
(9, 'English', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '18:55', '2021-08-26', 46, 'student', '0'),
(10, 'Bangla', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '20:55', '2021-08-17', 46, 'student', '0'),
(11, 'Bangla', 'English, ', 'One', 'Badda', 1000, 2000, 'Buet', '21:56', '2021-08-09', 46, 'student', '0'),
(12, 'Bangla', 'Math, ', 'One', 'Badda', 2000, 3000, 'Buet', '04:11', '2021-08-31', 46, 'student', '0'),
(13, 'Bangla', 'Bangla, General Science, ', 'One', 'Badda', 1000, 2000, 'Buet', '16:13', '2021-08-23', 43, 'Hridoy', '1'),
(14, 'Bangla', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '22:51', '2021-08-16', 46, 'student', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumbe` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `pending` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userName`, `password`, `email`, `phoneNumbe`, `gender`, `userType`, `status`, `pending`) VALUES
(3, 'Suhas', '123', 'suhas.Iftakhar@gmail.com', 1712631233, 'male', 'student', 0, 0),
(4, 'Rafee', '123456', 'rafee88@gmail,com', 1714383864, 'male', 'teacher', 1, 1),
(43, 'Hridoy', '123456', 'hridoy@gmail.com', 1714383864, 'male', 'teacher', 1, 1),
(44, 'Ashraful', '123456', 'ashraful@gmail.com', 1773156204, 'male', 'student', 0, 0),
(46, 'student', '123456', 'student@gmail.com', 1712631233, 'male', 'student', 0, 0),
(48, 'rafa', '123456', 'rafa@gmail.com', 1773156204, 'female', 'admin', 3, 0),
(49, 'asdf', '123456', 'saba@gmail.com', 1712631233, 'female', 'parent', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
