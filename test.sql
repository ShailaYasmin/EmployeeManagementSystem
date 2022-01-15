-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 07:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dep_Id` int(200) NOT NULL,
  `Dep_Name` varchar(200) NOT NULL,
  `Div_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `Div_Id` int(200) NOT NULL,
  `Div_Name` varchar(200) NOT NULL,
  `status` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `LOCAL_IP` varchar(200) NOT NULL,
  `HOST_NAME` varchar(200) NOT NULL,
  `MAC_ADDRESS` varchar(200) NOT NULL,
  `PABX_IP` varchar(200) NOT NULL,
  `EXTENSION` varchar(200) NOT NULL,
  `DEPARTMENT` varchar(200) NOT NULL,
  `DIVISION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `NAME`, `EMAIL`, `LOCAL_IP`, `HOST_NAME`, `MAC_ADDRESS`, `PABX_IP`, `EXTENSION`, `DEPARTMENT`, `DIVISION`) VALUES
(1, 'TEST', 'TEST@gmail.com', '1.1.1.1', 'TEST', '1.1.1.1', '1.1.1.1', 'TEST', '', ''),
(2, 'shafin', 'IoT-Product-life-cycle-01.png', '88.89.99', 'xjjjdt', '4365.46456.85858.4566', '463.6576.98789', '54636', '', ''),
(3, 'safa', 'IoT-Product-life-cycle-01.png', '4566', 'xjjjdt', '4365.46456.85858.4566', '463.6576.98789', '54636', '', ''),
(4, 'Tonni', 'IoT-Product-life-cycle-01.png', '88.89.99', 'xjjjdt', '4365.46456.85858.4566', '463.6576.98789', '54636', '', ''),
(5, 'Tonni', 'IoT-Product-life-cycle-01.png', '88.89.99', 'xjjjdt', '7869796', '463.6576.98789', '54636', '', ''),
(6, 'Rashid Khan', 'rashid@gmail.com', '4566', 'xjjjdt', '7869796', '172.16.101.15', 'dhethe', '', ''),
(7, 'Rashid Khan', 'rashid@gmail.com', '172.16.101.15', '4tyj', '7869796', '172.16.101.15', 'dhethe', '', ''),
(8, 'Tarek Rahman', 'tarek@gmail.com', '232525', 'rstsr', '4365.46456.85858.4566', '172.16.101.15', 'astaerta', '', ''),
(9, 'Tarek Rahman', 'tarek@gmail.com', '4566', 'xjjjdt', '172.16.101.15', '172.16.101.15', 'astaerta', 'IT', 'Dhaka'),
(10, 'sakib khan', 'sakib@gmail.com', '88.89.99', 'xjjjdt', '4365.46456.85858.4566', '463.6576.98789', '54636', 'IT', 'Dhaka'),
(11, 'sakib khan', 'sakib@gmail.com', '172.16.101.15', '4tyj', '4365.46456.85858.4566', '172.16.101.15', 'dhethe', 'IT', 'Bogra'),
(12, 'sakib khan', 'sakib@gmail.com', '88.89.99', '4tyj', '172.16.101.15', '463.6576.98789', 'dhethe', 'Accounts', 'Bogra'),
(13, 'sakib khan', 'sakib@gmail.com', '4566', 'xjjjdt', '4365.46456.85858.4566', '463.6576.98789', '54636', 'Corporate Affairs', 'Operations'),
(14, 'Shawon ', 'qashawon@gmail.com', '88.89.99', 'esgwg', '4365.46456.85858.4566', '172.16.101.15', 'dhethe', 'Corporate Affairs', 'Business'),
(15, 'Shawon ', 'qashawon@gmail.com', '172.16.101.15', 'esgwg', '7869796', '463.6576.98789', 'dhethe', 'Corporate Affairs', 'FMD'),
(16, 'safa', 'safa@gmail.com', '172.16.101.15', '4tyj', '172.16.101.15', '463.6576.98789', 'dhethe', 'Corporate Affairs', 'Finance & Accounts'),
(17, 'SHAILA YASMIN', 'shailayasminerin@gmail.com', '4566', 'rstsr', '4365.46456.85858.4566', '346377', 'astaerta', 'Corporate Affairs', 'ORS Factory'),
(18, 'SHAILA YASMIN', 'shailayasminerin@gmail.com', '88.89.99', 'abcd', '7869796', '463.6576.98789', '54636', 'Corporate Affairs', 'Operations'),
(19, 'SHAILA YASMIN', 'shailayasminerin@gmail.com', '88.89.99', 'esgwg', '7869796', '463.6576.98789', '54636', 'Corporate Affairs', 'Corporate Affairs');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `STATUS` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `NAME`, `PASSWORD`, `EMAIL`, `STATUS`) VALUES
(1, 'Shaila', '1234', 'shailayasminerin@gmail.com', 0),
(2, 'Emon', 'goru', 'rhk@gmail.com', 0),
(3, 'shoumik', '12345', 'rhs@gamil.com', 0),
(16, 'shaila', '1234', 'erin@gmail.com', 0),
(20, 'yasmin', '5678', 'sye@gamil.com', 0),
(21, 'Habib rahman', '0987', 'hr@gmail.com', 0),
(22, 'SHAILA YASMIN', '678', 'sye@gmail.com', 0),
(23, 'Meem khanom', '0987', 'meem@gmail.com', 0),
(24, 'safa', '456', 'safa@gmail.com', 0),
(25, 'Tonni', '1234', 'tonni@gmail.com', 0),
(26, 'Rashid Khan', '234', 'rashid@gmail.com', 0),
(27, 'Tarek Rahman', '1234', 'tarek@gmail.com', 0),
(28, 'sakib khan', '098', 'sakib@gmail.com', 0),
(29, 'shofik', '000', 'shofik@gamil.com', 0),
(30, 'Shawon ', '234', 'qashawon@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dep_Id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`Div_Id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dep_Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `Div_Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
