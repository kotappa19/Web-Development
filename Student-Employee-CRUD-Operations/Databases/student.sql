-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `rollno` int(255) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `sub1` int(255) NOT NULL,
  `sub2` int(255) NOT NULL,
  `sub3` int(255) NOT NULL,
  `sub4` int(255) NOT NULL,
  `sub5` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`rollno`, `sname`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES
(3, 'Adam', 97, 95, 96, 97, 99),
(5, 'Ranjit', 78, 75, 79, 75, 75),
(37, 'Girish', 87, 88, 89, 88, 89),
(40, 'Jayanth', 96, 87, 96, 78, 98),
(43, 'Karthik', 98, 97, 87, 89, 99),
(47, 'Kotappa', 95, 99, 90, 97, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
