-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 06:55 PM
-- Server version: 5.6.24
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arduino`
--
CREATE DATABASE IF NOT EXISTS `arduino` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `arduino`;

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `id` int(11) NOT NULL,
  `firstbeat` text NOT NULL,
  `secondbeat` text NOT NULL,
  `thirdbeat` text NOT NULL,
  `fourthbeat` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`id`, `firstbeat`, `secondbeat`, `thirdbeat`, `fourthbeat`, `time`) VALUES
(1, '90', '95', '96', '112', '2020-03-02 02:49:55'),
(2, '214', '108', '82', '67', '2020-03-07 13:06:53'),
(3, '45', '110', '82', '68', '2020-03-07 13:07:04'),
(4, '217', '108', '107', '109', '2020-03-08 04:23:37'),
(5, '220', '112', '110', '238', '2020-03-08 04:31:36'),
(6, '33', '35', '37', '39', '2020-03-08 04:31:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heart`
--
ALTER TABLE `heart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heart`
--
ALTER TABLE `heart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
