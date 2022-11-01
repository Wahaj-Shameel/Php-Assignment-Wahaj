-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 07:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentId` int(11) NOT NULL,
  `Image` varchar(450) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `Image`, `FirstName`, `LastName`, `FatherName`, `Gender`, `City`, `Department`, `Phone`) VALUES
(2, 'images/julian-wan-WNoLnJo7tS8-unsplash.jpg', 'Muhammad', 'Ali', 'ali ahmed', 'Male', 'Lahore', 'SoftwareEngineering', '03152032300'),
(3, 'images/julian-wan-WNoLnJo7tS8-unsplash.jpg', 'Muhammad', 'Ahmed', 'Ashfaq Ahmed', 'Male', 'Karachi', 'ComputerScience', '03152032300'),
(5, 'images/jonas-kakaroto-KIPqvvTOC1s-unsplash.jpg', 'Muhammad', 'Ahmed', 'ali ahmed', 'Male', 'Lahore', 'ComputerScience', '0312254569'),
(6, 'images/julian-wan-WNoLnJo7tS8-unsplash.jpg', 'Muhammad', 'ali', 'Ashfaq Ahmed', 'Male', 'Karachi', 'SoftwareEngineering', '03152032300'),
(15, 'images/julian-wan-WNoLnJo7tS8-unsplash.jpg', 'jabbar', 'Ahmed', 'Ashfaq Ahmed', 'Male', 'Karachi', 'SoftwareEngineering', '03152032300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
