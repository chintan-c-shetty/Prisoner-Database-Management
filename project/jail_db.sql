-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jail_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `CASE_ID` int(20) NOT NULL,
  `CASE_TYPE` varchar(200) NOT NULL,
  `CASE_VERDICT` varchar(200) NOT NULL,
  `PRISONER_ID` int(20) NOT NULL,
  `LAWYER_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`CASE_ID`, `CASE_TYPE`, `CASE_VERDICT`, `PRISONER_ID`, `LAWYER_ID`) VALUES
(301, 'CRIMINAL', 'LIFETIME', 202, 401),
(302, 'CIVIL', '6 MONTHS', 204, 402),
(303, 'CRIMINAL', '12 YEARS', 206, 403),
(304, 'CIVIL', '6 MONTHS', 203, 401),
(305, 'CRIMINAL', '12 YEARS', 205, 402),
(306, 'CIVIL', '4 MONTHS', 207, 403);

-- --------------------------------------------------------

--
-- Table structure for table `jail`
--

CREATE TABLE `jail` (
  `JAIL_ID` int(20) NOT NULL,
  `JAIL_NAME` varchar(200) NOT NULL,
  `CITY` varchar(200) NOT NULL,
  `STATE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jail`
--

INSERT INTO `jail` (`JAIL_ID`, `JAIL_NAME`, `CITY`, `STATE`) VALUES
(1, 'TIHAR', 'TIHAR', 'DELHI'),
(2, 'BALLARI', 'BALLARI', 'KARNATAKA'),
(3, 'PARAPAN', 'BANGALORE', 'KARNATAKA'),
(4, 'YERWADA CENTRAL JAIL', 'YERWADA', 'MAHARASTRA'),
(5, 'NAINI CENTRAL JAIL', 'NAINI', 'UTTARPRADESH'),
(6, 'TUMKUR CENTRAL JAIL', 'TUMKUR', 'KARNATAKA'),
(7, 'KORANDA', 'Tiptur', 'KARNATAKA');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JOB_ID` int(20) NOT NULL,
  `JOB_NAME` varchar(200) NOT NULL,
  `SALARY` int(20) NOT NULL,
  `JAIL_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JOB_ID`, `JOB_NAME`, `SALARY`, `JAIL_ID`) VALUES
(101, 'Gardening', 10000, 1),
(102, 'laundry', 11000, 2),
(103, 'cleaning', 12000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `LAWYER_ID` int(20) NOT NULL,
  `LAWYER_NAME` varchar(200) NOT NULL,
  `AGE` int(20) NOT NULL,
  `CITY` varchar(200) NOT NULL,
  `STATE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`LAWYER_ID`, `LAWYER_NAME`, `AGE`, `CITY`, `STATE`) VALUES
(401, 'RAJASHEKAR', 24, 'SHIMOGA', 'KARNATAKA'),
(402, 'ANANTH', 35, 'HOSANAGARA', 'KARNATAKA'),
(403, 'DEVARATHA', 56, 'UDUPI', 'KARNATAKA');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `PRISONER_ID` int(20) NOT NULL,
  `PRISONER_NAME` varchar(200) NOT NULL,
  `AGE` int(20) NOT NULL,
  `CITY` varchar(200) NOT NULL,
  `STATE` varchar(200) NOT NULL,
  `jail_id` int(20) NOT NULL,
  `JOB_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`PRISONER_ID`, `PRISONER_NAME`, `AGE`, `CITY`, `STATE`, `jail_id`, `JOB_ID`) VALUES
(202, 'SAGAR', 23, 'BHADRAVATHI', 'KARNATAKA', 1, 101),
(203, 'MANU', 45, 'UDUPI', 'KARNATAKA', 1, 101),
(204, 'SHABAD', 34, 'BALLARI', 'KARNATAKA', 2, 102),
(205, 'RANGA', 45, 'DAVENGERE', 'KARNATAKA', 2, 102),
(206, 'RUDRA', 34, 'KARWAR', 'KARNATAKA', 3, 103),
(207, 'GANGU', 35, 'HUBLI', 'KARNATAKA', 3, 103);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`CASE_ID`),
  ADD KEY `LAWYER_ID` (`LAWYER_ID`),
  ADD KEY `PRISONER_ID` (`PRISONER_ID`);

--
-- Indexes for table `jail`
--
ALTER TABLE `jail`
  ADD PRIMARY KEY (`JAIL_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JOB_ID`),
  ADD KEY `JAIL_ID` (`JAIL_ID`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`LAWYER_ID`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`PRISONER_ID`),
  ADD KEY `JOB_ID` (`JOB_ID`),
  ADD KEY `fk12` (`jail_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case`
--
ALTER TABLE `case`
  ADD CONSTRAINT `case_ibfk_1` FOREIGN KEY (`LAWYER_ID`) REFERENCES `lawyer` (`LAWYER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `case_ibfk_2` FOREIGN KEY (`PRISONER_ID`) REFERENCES `prisoner` (`PRISONER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`JAIL_ID`) REFERENCES `jail` (`JAIL_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`jail_id`) REFERENCES `jail` (`JAIL_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prisoner_ibfk_2` FOREIGN KEY (`JOB_ID`) REFERENCES `job` (`JOB_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
