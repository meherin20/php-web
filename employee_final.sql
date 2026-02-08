-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2026 at 05:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiutech_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_final`
--

CREATE TABLE `employee_final` (
  `EmployeeID` int(11) NOT NULL,
  `EmployeeName` varchar(60) NOT NULL,
  `Department ID` int(11) NOT NULL,
  `Department Name` varchar(60) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Performance Rating` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_final`
--

INSERT INTO `employee_final` (`EmployeeID`, `EmployeeName`, `Department ID`, `Department Name`, `Salary`, `Performance Rating`) VALUES
(1, 'Arif Rahman', 201, 'Software Development', 45000, 'B'),
(2, 'Marium Khan', 201, 'Software Development', 52000, 'A'),
(3, 'Sabbir Hossain', 202, 'Quality Assurance', 38000, 'C'),
(4, 'Samira Begum', 203, 'UI/UX Design', 42000, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_final`
--
ALTER TABLE `employee_final`
  ADD PRIMARY KEY (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
