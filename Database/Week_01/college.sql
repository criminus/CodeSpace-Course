-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2024 at 07:25 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `enrolment_id` int(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `module_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` varchar(20) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `credit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`enrolment_id`),
  ADD KEY `student_id` (`student_id`,`module_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD CONSTRAINT `enrolment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrolment_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
