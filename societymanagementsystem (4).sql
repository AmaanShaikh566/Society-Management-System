-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 05:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `societymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Username`, `Password`) VALUES
('secretary@orchidsociety.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Flat_No` varchar(11) NOT NULL,
  `FB_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Flat_No`, `FB_Description`) VALUES
('A101', 'Nice....'),
('B101', 'Improve Tap Water...');

-- --------------------------------------------------------

--
-- Table structure for table `flat_details`
--

CREATE TABLE `flat_details` (
  `Flat_No` varchar(10) NOT NULL,
  `Block_no` varchar(10) NOT NULL,
  `Flat_Type` varchar(10) NOT NULL,
  `Flat_Description` varchar(50) NOT NULL,
  `Total_Members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flat_details`
--

INSERT INTO `flat_details` (`Flat_No`, `Block_no`, `Flat_Type`, `Flat_Description`, `Total_Members`) VALUES
('A101', 'Block A', '1BHK', 'No Description...', 2),
('A102', 'Block A', '1BHK', 'No Desc...', 2),
('A201', 'Block A', '1BHK', 'No Desc..', 2),
('A202', 'Block A', '1BHK', 'No Desc..', 3),
('B101', 'Block B', '2BHK', 'No Desc...', 4),
('B102', 'Block B', '2BHK', 'No Desc..', 3),
('B201', 'Block B', '2BHK', 'No Desc...', 3),
('C101', 'Block C', '3BHK', 'No Desc...', 5),
('C102', 'Block C', '3BHK', 'No Desc..', 4),
('C201', 'Block C', '3BHK', 'No Desc..', 4),
('C202', 'Block C', '3BHK', 'No Desc...', 5);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_bill`
--

CREATE TABLE `maintenance_bill` (
  `MB_ID` int(11) NOT NULL,
  `Flat_No` varchar(10) NOT NULL,
  `Electricity_Bill` float NOT NULL,
  `Water_Bill` float NOT NULL,
  `Cable_Bill` float NOT NULL,
  `Cultural_Funds` float NOT NULL,
  `Extra_Charges` float NOT NULL,
  `Total_Bill` float NOT NULL,
  `M_Date` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance_bill`
--

INSERT INTO `maintenance_bill` (`MB_ID`, `Flat_No`, `Electricity_Bill`, `Water_Bill`, `Cable_Bill`, `Cultural_Funds`, `Extra_Charges`, `Total_Bill`, `M_Date`, `Status`) VALUES
(1, 'A101', 1000, 1000, 1000, 1000, 78, 4078, '2021-01-18', 1),
(2, 'B101', 1000, 1000, 1000, 1000, 55, 4055, '2021-01-18', 1),
(3, 'C101', 4000, 4000, 4000, 4000, 250, 16250, '2021-01-18', 0),
(4, 'A201', 8550, 8550, 8550, 1000, 3, 26653, '2021-01-24', 0),
(5, 'A202', 8555, 9550, 7855.82, 1000, 0, 26960.8, '2021-01-24', 0),
(6, 'B102', 9888, 8550, 7525, 1000, 0, 26963, '2021-01-24', 0),
(7, 'B201', 8550, 5220, 6555, 100, 0, 20425, '2021-01-24', 0),
(8, 'C102', 5656, 9898, 2555.12, 100, 0, 18209.1, '2021-01-24', 0),
(9, 'C201', 7412, 4528, 2369, 1522, 0, 15831, '2021-01-24', 0),
(10, 'A102', 7999.25, 2555, 1458, 2555, 100, 14667.2, '2021-01-24', 1),
(11, 'C202', 8550, 4857, 4558, 4211, 100, 22276, '2021-01-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `NDate` date NOT NULL,
  `Info_Type` varchar(25) NOT NULL,
  `NB_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`NDate`, `Info_Type`, `NB_Description`) VALUES
('2021-02-08', 'Suvichar', 'Have a great day all!...'),
('2021-02-08', 'Maintenance Bill', 'It is Updated...\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `Owner_ID` int(11) NOT NULL,
  `Owner_Name` varchar(50) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Register_As` varchar(25) NOT NULL,
  `Flat_No` varchar(10) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_details`
--

INSERT INTO `owner_details` (`Owner_ID`, `Owner_Name`, `Gender`, `Register_As`, `Flat_No`, `Contact`, `Email`, `Password`) VALUES
(1, 'Shivangi Parekh', 'FEMALE', 'Owner', 'A101', 2147483647, 'shivangi@gmail.com', '12345'),
(2, 'Amaan Shaikh', 'MALE', 'Tenant', 'B101', 74747444, 'amaan@gmail.com', '123456'),
(3, 'Bhavesh Rathi', 'MALE', 'Tenant', 'C101', 98888058, 'bhavesh@gmail.com', '123456'),
(4, 'Gaurav Dongarwar', 'MALE', 'Owner', 'A201', 2147483647, 'GauravD@gmail.com', '123456'),
(5, 'Ankita Desai', 'FEMALE', 'Tenant', 'A202', 2147483647, 'Ankita@gmail.com', '123456'),
(6, 'Rocky', 'MALE', 'Owner', 'A102', 2147483647, 'rocky@gmail.com', '123456'),
(7, 'Aarti', 'FEMALE', 'Tenant', 'C102', 2147483647, 'Aarti@gmail.com', '123456'),
(8, 'Kerav Patel', 'MALE', 'Owner', 'C201', 2147483647, 'kerav@gmail.com', '123456'),
(9, 'Virat Kohli', 'MALE', 'Owner', 'C202', 2147483647, 'virat@gmail.com', '123456'),
(10, 'Jethalal Gada', 'MALE', 'Tenant', 'B102', 2147483647, 'j@gmail.com', '123456'),
(11, 'Anjali Mehta', 'FEMALE', 'Tenant', 'B201', 2147483647, 'Anjali@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `worker_details`
--

CREATE TABLE `worker_details` (
  `Worker_ID` int(11) NOT NULL,
  `Worker_Type` varchar(50) NOT NULL,
  `Worker_Name` varchar(50) NOT NULL,
  `Worker_Contact` varchar(11) NOT NULL,
  `No_of_Holiday` int(11) NOT NULL,
  `Worker_TotSalary` float NOT NULL,
  `LastPaidDate` date NOT NULL,
  `Status` int(11) NOT NULL,
  `UpdateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_details`
--

INSERT INTO `worker_details` (`Worker_ID`, `Worker_Type`, `Worker_Name`, `Worker_Contact`, `No_of_Holiday`, `Worker_TotSalary`, `LastPaidDate`, `Status`, `UpdateDate`) VALUES
(1, 'Watchman', 'Bahadur', '9898998980', 2, 8555, '2021-01-07', 0, '2021-01-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `Flat_No` (`Flat_No`);

--
-- Indexes for table `flat_details`
--
ALTER TABLE `flat_details`
  ADD PRIMARY KEY (`Flat_No`);

--
-- Indexes for table `maintenance_bill`
--
ALTER TABLE `maintenance_bill`
  ADD PRIMARY KEY (`MB_ID`),
  ADD KEY `Flat_No` (`Flat_No`);

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`Owner_ID`),
  ADD KEY `Flat_No` (`Flat_No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Flat_No`) REFERENCES `flat_details` (`Flat_No`);

--
-- Constraints for table `maintenance_bill`
--
ALTER TABLE `maintenance_bill`
  ADD CONSTRAINT `maintenance_bill_ibfk_1` FOREIGN KEY (`Flat_No`) REFERENCES `flat_details` (`Flat_No`);

--
-- Constraints for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD CONSTRAINT `owner_details_ibfk_1` FOREIGN KEY (`Flat_No`) REFERENCES `flat_details` (`Flat_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
