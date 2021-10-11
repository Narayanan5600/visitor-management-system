-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 06:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehan-visitorrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `AdminName` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`FirstName`, `LastName`, `EmailID`, `AdminName`, `Password`) VALUES
('Mohammed ', 'Rehan', 'mohammedrehan6532@gmail.com', 'rehan', '1137');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(3) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `Feedback` varchar(60) NOT NULL,
  `PostingTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `FirstName`, `LastName`, `EmailID`, `Feedback`, `PostingTime`) VALUES
(1, 'Mohammed ', 'Rehan', 'mohammedrehan6532@gmail.com', 'This app is very useful to track visitors info. No need of m', '2020-02-09 10:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `visitorinfo`
--

CREATE TABLE `visitorinfo` (
  `ID` int(3) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `WhomToMeet` varchar(40) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `ReasonToMeet` varchar(40) NOT NULL,
  `EntryTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OutingRemark` varchar(10) NOT NULL,
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorinfo`
--

INSERT INTO `visitorinfo` (`ID`, `FullName`, `EmailID`, `PhoneNumber`, `Address`, `WhomToMeet`, `Department`, `ReasonToMeet`, `EntryTime`, `OutingRemark`, `OutTime`) VALUES
(1, 'Mohammed Rehan', 'mohammedrehan6532@gmail.com', '9087611150', '26/ 450, B,\r\nBangla Street,\r\nPeriyapet,\r\nVNB', 'Mr. Francis D Souza', 'IT Department', 'Interview', '2020-02-09 08:09:47', 'Done', '2020-02-09 08:11:08'),
(2, 'Mohammed Farhan', 'mohammedfarhan439@gmail.com', '8220130806', '17/D, 37,\r\nPMO Street,\r\nChennampet,\r\nVNB', 'Mrs. Anjali Sharma', 'HR Department', 'Project discussion', '2020-02-09 08:12:53', 'Done', '2020-02-09 08:13:03'),
(4, 'Abdul Majeed Fazil', 'abdulmajeedfazil123@gmail.com', '9876543210', '20, HMO Street,\r\nPeriyapet,\r\nVNB', 'Mr. Rajesh Verma', 'Marketing', 'Sales discussion', '2020-02-09 08:16:00', 'Done', '2020-02-09 08:32:23'),
(5, 'Aafaq Aadeel P S', 'psaafaqaadeel123@gmail.com', '9878985432', '6th Cross street,\r\nAnna Salai,\r\nMount Road,\r\nChenn', 'Mrs. Komathi Hansraj', 'HR Department', 'HR Interview', '2020-02-09 08:41:31', 'Done', '2020-02-09 08:42:05'),
(6, 'Mohammed Affan', 'mdaffan123@yahoo.com', '7895643201', '28, Nethaji Nagar,\r\nTambaram,\r\nChennai', 'Mrs. Kaviya Mehta', 'IT Department', 'Technical Interview', '2020-02-09 08:44:59', 'Done', '2020-02-09 08:45:11'),
(7, 'Mohammed Fasee', 'fasee123@gmail.com', '9876512345', '45, 5th Street, \r\nGafoorabad,\r\nVNB', 'Mr. Rajesh Gopinathan', 'Testing', 'Project discussion', '2020-02-10 05:15:40', 'Done', '2020-02-10 05:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitorinfo`
--
ALTER TABLE `visitorinfo`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
