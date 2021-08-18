-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 10:20 PM
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
(8, 19, 50, 54, 1),
(9, 21, 54, 50, 2),
(10, 18, 50, 54, 0),
(11, 23, 52, 54, 0),
(12, 22, 54, 52, 0),
(13, 24, 54, 50, 0);

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
(18, 'Bangla', 'Bangla, ', 'Two', 'Badda', 3000, 2000, 'Buet', '12:54', '2021-08-15', 50, 'Suhas', '0'),
(19, 'English', 'English, ', 'One', 'Badda', 1000, 2000, 'Buet', '14:55', '2021-08-22', 50, 'Suhas', '0'),
(20, 'Bangla', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '14:15', '2021-08-23', 50, 'Suhas', '0'),
(21, 'Bangla', 'Bangla, Economics, ', 'One', 'Badda', 1000, 2000, 'Buet', '14:16', '2021-08-15', 54, 'Ashraful', '1'),
(22, 'Bangla', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '15:40', '2021-08-31', 54, 'Ashraful', '1'),
(23, 'Bangla', 'Bangla, ', 'One', 'Badda', 1000, 2000, 'Buet', '13:48', '2021-08-31', 52, 'Hridoy', '2'),
(24, 'Bangla', 'ICT, ', 'One', 'Badda', 1000, 2000, 'Buet', '15:57', '2021-08-26', 54, 'Ashraful', '1');

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
(48, 'Mim', '123456', 'mim@gmail.com', 1773156204, 'female', 'admin', 3, 0),
(50, 'Suhas', '123456', 'suhas.Iftakhar@gmail.com', 1307380845, 'male', 'student', 0, 0),
(52, 'Hridoy', '123456', 'hridoy@gmail.com', 1712631233, 'male', 'parent', 2, 0),
(53, 'Ashraful', '123456', 'ashraful@gmail.com', 1773156204, 'male', 'teacher', 1, 1),
(54, 'Ashraful', '123456', 'ashraful@gmail.com', 1773156204, 'male', 'teacher', 1, 1);

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
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
