-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
  ADD PRIMARY KEY (`invoiceId`) USING BTREE;

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
  MODIFY `invoiceId` int(10) NOT NULL AUTO_INCREMENT;

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
