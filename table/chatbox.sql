-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 05:22 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`id`, `user_name`, `msg`, `created`) VALUES
(1, 'vishal', 'hello', '2018-11-06 05:37:52'),
(2, 'vikas', 'hello', '2018-11-06 05:55:19'),
(3, 'vikas', 'okay sir how are you', '2018-11-06 05:55:41'),
(4, 'vishal', 'i am good how are you', '2018-11-06 05:55:53'),
(5, 'vikas', 'i am good how are you doing sir', '2018-11-06 05:56:13'),
(6, 'vishal', 'is there any way i can help you with the', '2018-11-06 05:56:33'),
(7, 'vishal', 'any any situattion', '2018-11-06 05:56:46'),
(8, 'vikas', 'ye you can ', '2018-11-06 05:56:55'),
(9, 'vikas', 'i can help you with coding system and if you', '2018-11-06 05:57:12'),
(10, 'vikas', 'okay', '2018-11-06 06:36:35'),
(11, 'vikas', 'hello', '2018-11-06 06:39:27'),
(12, 'vikas', 'jillo', '2018-11-06 06:39:49'),
(13, 'vishal', 'khilo', '2018-11-06 06:40:54'),
(14, 'vikas', 'pilo', '2018-11-06 06:41:30'),
(15, 'vikas', 'adsdsac', '2018-11-06 06:42:23'),
(16, 'vishal', 'hellosir', '2018-11-06 06:48:22'),
(17, 'vikas', 'ffas', '2018-11-06 07:46:44'),
(18, 'vikas', 'svd', '2018-11-06 08:31:44'),
(19, 'vikas', 'hello', '2018-11-06 10:09:13'),
(20, 'vikas', 'where ', '2018-11-06 10:09:26'),
(21, 'vikas', 'hey vikash', '2018-11-06 10:09:51'),
(22, 'vikas', 'sdfds', '2018-11-06 15:48:58'),
(23, 'vikas', 'hello', '2018-11-06 15:52:44'),
(24, 'vikas', 'efewfwefw', '2018-11-06 15:54:43'),
(25, 'vishal', 'hello', '2018-11-06 16:00:45'),
(26, 'vikas', 'vikash', '2018-11-06 16:02:19'),
(27, 'vikas', 'vikash', '2018-11-06 16:02:19'),
(28, 'vikas', 'avava', '2018-11-06 16:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, 'vishal', 'facf925ae4790005bd371ebd7866e091', '2018-11-01 20:05:11'),
(2, 'vikas', 'f3574807c8a97a28c9c911a1529d4a9f', '2018-11-01 20:05:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbox`
--
ALTER TABLE `chatbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbox`
--
ALTER TABLE `chatbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
