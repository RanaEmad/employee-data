-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 06:05 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `ssn` varchar(14) DEFAULT NULL,
  `currentEmployee` tinyint(4) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthdate`, `ssn`, `currentEmployee`, `email`, `phone`, `address`) VALUES
(1, 'John Doe', '1992-07-14', '123456789', 1, 'john@doe.com', '123456789', 'Tallinn, Estonia'),
(2, 'Jane Doe', '1990-01-15', '123456781', 0, 'jane@doe.com', '123456781', 'Cairo, Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `id` int(11) NOT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `introduction` text,
  `workExperience` text,
  `education` text,
  `lang` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`id`, `employeeId`, `introduction`, `workExperience`, `education`, `lang`) VALUES
(1, 1, 'Introduction', 'Work', 'Edu', 'en'),
(2, 1, 'Sp Intro', 'Sp Wo', 'Sp Edu', 'sp'),
(3, 1, 'Fr Intro', 'Fr Wo', 'Fr Edu', 'fr');

-- --------------------------------------------------------

--
-- Table structure for table `employeelog`
--

CREATE TABLE `employeelog` (
  `id` int(11) NOT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `datetimeCreated` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `datetimeUpdated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeelog`
--

INSERT INTO `employeelog` (`id`, `employeeId`, `createdBy`, `datetimeCreated`, `updatedBy`, `datetimeUpdated`) VALUES
(1, 1, 2, '2019-01-19 00:00:00', 2, '2019-01-19 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employeeInfo_employee_idx` (`employeeId`);

--
-- Indexes for table `employeelog`
--
ALTER TABLE `employeelog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employeeLog_employee1_idx` (`employeeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employeelog`
--
ALTER TABLE `employeelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD CONSTRAINT `fk_employeeInfo_employee` FOREIGN KEY (`employeeId`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employeelog`
--
ALTER TABLE `employeelog`
  ADD CONSTRAINT `fk_employeeLog_employee1` FOREIGN KEY (`employeeId`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
