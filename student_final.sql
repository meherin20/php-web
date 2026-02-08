-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2026 at 08:00 PM
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
-- Database: `uiuweb_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_final`
--

CREATE TABLE `student_final` (
  `StudentID` int(11) NOT NULL,
  `StudentName` varchar(60) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `CourseTitle` varchar(60) NOT NULL,
  `Grade` int(11) NOT NULL,
  `LetterGrade` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_final`
--

INSERT INTO `student_final` (`StudentID`, `StudentName`, `CourseID`, `CourseTitle`, `Grade`, `LetterGrade`) VALUES
(1, 'Karim Uddin', 101, 'Web Programming', 85, 'B'),
(2, 'Rahim ahmed', 101, 'Web Programming', 92, 'A'),
(3, 'Jashim Hossain', 102, 'Project Management', 78, 'C'),
(4, 'Jasika Ahmded ', 101, 'Web Programming', 65, 'D'),
(5, 'Faria Karim', 102, 'Project Management', 95, 'A'),
(6, 'Niassoh Dihan', 103, 'System Analysis and Design', 80, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_final`
--
ALTER TABLE `student_final`
  ADD PRIMARY KEY (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
