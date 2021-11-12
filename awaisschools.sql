-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 11:38 AM
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
(40, 'asdas', 'das', 1, 464, '2021-11-05'),
(41, 'asdas', 'das', 1, 464, '2021-11-05'),
(42, 'asda', 'asda', 1, 464, '2021-11-05');

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
(56, 'John', 'doe', '1992-03-20', 2, 4294967295, 'asdasdas', '2021-11-08'),
(57, 'John', 'doe', '1992-03-20', 2, 123123, 'asdasdas', '2021-11-08'),
(58, 'John', 'doe', '1992-03-20', 2, 123123, 'asdasdas', '2021-11-08'),
(59, 'John', 'doe', '1992-03-20', 2, 123123, 'asdasdas', '2021-11-08'),
(60, 'John', 'doe', '1992-03-20', 1, 123, 'asdasdas', '2021-11-08'),
(61, 'John', 'doe', '1992-03-20', 1, 123, 'asdasdas', '2021-11-08'),
(62, 'John', 'doe', '1992-03-20', 1, 123, 'asdasdas', '2021-11-08'),
(63, 'John', 'doe', '1992-03-20', 1, 123, 'asdasdas', '2021-11-08'),
(64, 'John', 'doe', '1992-03-20', 1, 123, 'asdasdas', '2021-11-08');

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
(1, 'asd', 'dsa', 'abc@xyz.com', '01234567890');

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
  MODIFY `invoiceId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
