-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 10:20 AM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` int(100) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `class` int(10) UNSIGNED NOT NULL,
  `phone` int(11) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `DoA` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `firstName`, `lastName`, `DoB`, `class`, `phone`, `address`, `DoA`) VALUES
(1, 'Saira', 'Bano', '1999-04-15', 1, 13245679, 'qasimabad', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classfees`
--
ALTER TABLE `classfees`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classfees`
--
ALTER TABLE `classfees`
  MODIFY `class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
