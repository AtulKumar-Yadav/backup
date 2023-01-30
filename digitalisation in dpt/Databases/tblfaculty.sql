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
-- Database: `faculity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `name` varchar(30) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `facultyid` varchar(10) NOT NULL,
  `dateOfJoining` date DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`name`, `Subject`, `email`, `phoneNo`, `gender`, `facultyid`, `dateOfJoining`, `post`) VALUES
('manoj rajora', 'web d', 'manoj@gmail.com', '9211420420', 'male', '0205ms032', '2000-11-15', 'HoD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`facultyid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
