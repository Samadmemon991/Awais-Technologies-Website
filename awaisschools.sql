-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 11:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awaisschools`
--

-- --------------------------------------------------------

--
-- Table structure for table `classfees`
--

CREATE TABLE `classfees` (
  `class` int(11) NOT NULL,
  `Fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classfees`
--

INSERT INTO `classfees` (`class`, `Fees`) VALUES
(1, 500),
(2, 500),
(3, 500),
(4, 500),
(5, 600),
(6, 600),
(7, 800),
(8, 800);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceId` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `grade` int(10) NOT NULL,
  `fees` int(10) NOT NULL,
  `invoiceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceId`, `firstName`, `lastName`, `grade`, `fees`, `invoiceDate`) VALUES
(1, 'Unzilla', 'Memon', 8, 2000, '2021-11-23'),
(2, 'jijjiwe', 'jdjdbd', 12, 1000, '2021-11-03'),
(3, 'jijjiwe', 'jdjdbd', 12, 1000, '2021-11-03'),
(4, 'Unzilla', 'Ali', 12, 2000, '2021-11-03'),
(5, 'jijjiwe', 'jdjdbd', 12, 1000, '2021-11-03'),
(6, 'njrjtr', 'rtnjtjnr', 2, 122, '2021-11-03'),
(7, 'dndb', 'dbbdbd', 112, 0, '2021-11-04'),
(8, 'Unzilla', 'Shaikh', 1, 2000, '2021-11-04'),
(9, 'Unzilla', 'Shaikh', 1, 2000, '2021-11-04'),
(10, 'Ali', 'jdjdbd', 2, 111, '2021-11-04'),
(11, 'Ali', 'jdjdbd', 2, 111, '2021-11-04'),
(12, 'Unzilla', 'Shaikh', 1, 2000, '2021-11-04'),
(13, 'fbhfbh', 'jsjs', 12, 2000, '2021-11-04'),
(14, 'fbhfbh', 'jsjs', 12, 2000, '2021-11-04'),
(15, 'fbhfbh', 'jsjs', 12, 2000, '2021-11-04'),
(16, 'fbhfbh', 'deevev', 12, 11, '2021-11-04'),
(17, 'whshws', 'h2ww2hu2w', 4, 1000, '2021-11-04'),
(18, 'whshws', 'h2ww2hu2w', 4, 1000, '2021-11-04'),
(29, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(30, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(31, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(32, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(33, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(34, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(35, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(36, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(37, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(38, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04'),
(39, 'jwnjwe', 'wnjnjde', 111, 2000, '2021-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` int(100) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `class` int(11) NOT NULL,
  `phone` int(11) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `DoA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `firstName`, `lastName`, `DoB`, `class`, `phone`, `address`, `DoA`) VALUES
(45, 'Sairaa', 'Bano', '1999-02-19', 2, 3368633753, 'A-23, 3rd Floor, Building Manjhi Oreals, Alamdar Chowk, Qasimabad', '2021-11-03'),
(51, 'Unzillla', 'Ali', '1999-02-19', 3, 3368633753, 'A-23, 3rd Floor, Building Manjhi Oreals, Alamdar Chowk, Qasimabad', '2021-11-04'),
(52, 'Saira', 'Bano', '1999-02-19', 2, 3368633753, 'A-23, 3rd Floor, Building Manjhi Oreals, Alamdar Chowk, Qasimabad', '2021-11-04'),
(53, 'Ali', 'Bell', '1998-02-19', 4, 3372828722, '3rd Floor, Building Manjhi Oreals, Alamdar Chowk, Qasimabad', '2021-11-04'),
(54, 'Saira', 'Bano', '1999-02-19', 3, 3368633753, 'A-23, 3rd Floor, Building Manjhi Oreals, Alamdar Chowk, Qasimabad', '2021-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'sairabano', '1234', 'noonarisaira@gmail.com', '03368633753'),
(2, 'sairabano', '1234', 'ss@gmail.com', '23323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classfees`
--
ALTER TABLE `classfees`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`) USING BTREE,
  ADD KEY `classFK` (`class`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classfees`
--
ALTER TABLE `classfees`
  MODIFY `class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `classFK` FOREIGN KEY (`class`) REFERENCES `classfees` (`class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
