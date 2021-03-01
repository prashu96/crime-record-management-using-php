-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 04:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `desg` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user`, `email`, `pass`, `desg`, `gender`, `dob`, `date`) VALUES
(1, 'prashanth', 'prashanth@gmail.com', '123456', 'admin', 'male', '0000-00-00', '2019-07-31 14:47:24'),
(2, 'vishnu', 'vishnu@gmail.com', '123456', 'admin', 'male', '1996-09-04', '2019-07-31 14:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fid` int(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `size` int(20) NOT NULL,
  `file` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `fid` int(15) NOT NULL,
  `id` int(15) NOT NULL,
  `aotp` int(15) NOT NULL,
  `totp` int(15) NOT NULL,
  `valid` int(15) NOT NULL DEFAULT '0',
  `state` int(15) NOT NULL DEFAULT '0',
  `tr` int(15) NOT NULL DEFAULT '0',
  `ar` int(15) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
