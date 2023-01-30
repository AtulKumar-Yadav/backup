-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 07:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `name` varchar(30) DEFAULT NULL,
  `rollNo` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `dateOfJoining` date DEFAULT NULL,
  `classMode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`name`, `rollNo`, `email`, `phoneNo`, `gender`, `semester`, `dateOfJoining`, `classMode`) VALUES
('atul', '11', 'atul@gandu.com', '9999888819', 'trans', '6', '2020-11-01', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`rollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
