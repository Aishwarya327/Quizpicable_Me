-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 05:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `timesplayed` varchar(222) NOT NULL DEFAULT '0',
  `points` varchar(222) NOT NULL DEFAULT '0',
  `wallentLink` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `status`, `timesplayed`, `points`, `wallentLink`, `date`) VALUES
(1, 'maseeraShaikh', 'maseera', 'shaikh', 'maseerashaikh27@gmail.com', '9920930921', '698f31e58975c9f1fca87af820cba630', 1, '3', '2', 'wuhwhsjsbsh', '2021-10-11 14:58:15'),
(2, 'moinshaikh', 'moin', 'shaikh', 'moinshaikh@gmail.com', '3214569870', '13665e53884a3701029c71e8abebc685', 1, '0', '0', '', '2021-10-11 15:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `usersgames`
--

CREATE TABLE `usersgames` (
  `id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `game` varchar(222) NOT NULL,
  `token` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersgames`
--

INSERT INTO `usersgames` (`id`, `username`, `email`, `date`, `game`, `token`) VALUES
(1, 'maseeraShaikh', 'maseerashaikh27@gmail.com', '2021-10-11 12:06:22', 'Slangs', '9547158111'),
(2, 'maseeraShaikh', 'maseerashaikh27@gmail.com', '2021-10-11 12:09:15', 'Movies', '9547158111'),
(3, 'maseeraShaikh', 'maseerashaikh27@gmail.com', '2021-10-11 14:56:11', 'Series', '5157484350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `usersgames`
--
ALTER TABLE `usersgames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usersgames`
--
ALTER TABLE `usersgames`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
