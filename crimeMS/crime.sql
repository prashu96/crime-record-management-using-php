-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 07:49 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `description` varchar(1000) NOT NULL,
  `complainer` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhar` int(100) NOT NULL,
  `status` enum('RECEIVED','PROCESS','COMPLETED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `c_date`, `description`, `complainer`, `address`, `aadhar`, `status`) VALUES
(1, '2018-02-05', 'Theft', 'raju', 'Hyderabad', 343353153, 'PROCESS');

-- --------------------------------------------------------

--
-- Table structure for table `cop`
--

CREATE TABLE `cop` (
  `id` int(11) NOT NULL,
  `copname` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `reportto` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `station` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cop`
--

INSERT INTO `cop` (`id`, `copname`, `designation`, `dob`, `reportto`, `address`, `phone`, `station`) VALUES
(2, 'Raju', 'SI', '2018-02-05', 'CI', 'hyderabad', '9441168122', 1),
(3, 'mallesh', 'head conistable', '2018-02-01', 'SI', 'hyderabad', '9446668233', 1);

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(11) NOT NULL,
  `firno` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` enum('MALE','FEMALE','OTHERS') NOT NULL,
  `offence` varchar(100) NOT NULL,
  `offence_date` datetime NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `photo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `firno`, `cname`, `age`, `gender`, `offence`, `offence_date`, `place`, `description`, `photo`) VALUES
(1, 0, 'suresh', 32, 'MALE', '1', '2018-02-02 00:00:00', 'kurnool', 'gold chain theft', ''),
(2, 123, 'anandh', 20, 'MALE', '1', '2019-11-22 00:00:00', 'mangalore', 'chain robary', ''),
(4, 123, 'anya', 20, 'MALE', '1', '2019-11-20 00:00:00', 'mangalore', 'chain robary', ''),
(5, 123, 'anya nn', 20, 'MALE', '1', '2019-11-01 00:00:00', 'mangalore', 'chain robary', ''),
(6, 123, 'anya', 20, 'MALE', '2', '2019-11-14 00:00:00', 'mangalore', 'chain robary', ''),
(7, 123, 'anandh', 20, 'MALE', '2', '2019-11-02 00:00:00', 'mangalore', 'chain robary', 'IMG_3463.JPG'),
(8, 123, 'anya nn', 20, 'MALE', '2', '2019-11-16 00:00:00', 'mangalore', 'chain robary', 'IMG_3463.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `id` int(11) NOT NULL,
  `fnumber` varchar(100) NOT NULL,
  `station` int(11) NOT NULL,
  `complaint` int(11) NOT NULL,
  `log_date` datetime NOT NULL,
  `description` varchar(100) NOT NULL,
  `offence_nature` varchar(100) NOT NULL,
  `cop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`id`, `fnumber`, `station`, `complaint`, `log_date`, `description`, `offence_nature`, `cop`) VALUES
(1, '123', 0, 1, '2018-02-05 00:00:00', 'cooking masala', 'doubt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `incharge` varchar(100) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `incharge`, `iname`, `sname`, `location`, `phone`) VALUES
(1, '1', 'raju', 'police station', 'kurnool', '9446668233'),
(2, '02', 'me', 'asd', 'dsa', '9901894160'),
(3, '03', 'prash', 'manglore', 'adyar', '99018941');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cop`
--
ALTER TABLE `cop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `station` (`station`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaint` (`complaint`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cop`
--
ALTER TABLE `cop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cop`
--
ALTER TABLE `cop`
  ADD CONSTRAINT `cop_ibfk_1` FOREIGN KEY (`station`) REFERENCES `station` (`id`);

--
-- Constraints for table `fir`
--
ALTER TABLE `fir`
  ADD CONSTRAINT `fir_ibfk_1` FOREIGN KEY (`complaint`) REFERENCES `complaint` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
