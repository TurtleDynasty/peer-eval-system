-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2015 at 04:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peerevaluaion`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Position` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `Name`, `Username`, `Password`, `Position`, `Email`) VALUES
(1, 'Luke Sanchez', 'luke', 'test', 'admin', NULL),
(2, 'Fellipe Gurgel', 'fellipe', 'test', 'supervisor', NULL),
(3, 'David Miller', 'david', 'test', 'employee', NULL),
(4, 'Adam TA', 'adam', 'test', 'employee', 'faa227@nau.edu');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `Score1` int(10) NOT NULL,
  `Score2` int(10) NOT NULL,
  `Score3` int(10) NOT NULL,
  `Notes` text NOT NULL,
  `ProjectID` int(10) NOT NULL,
  `EvaluatorID` int(10) NOT NULL,
  `EvaluatteeID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`Score1`, `Score2`, `Score3`, `Notes`, `ProjectID`, `EvaluatorID`, `EvaluatteeID`) VALUES
(9, 10, 10, 'blah blah blah blah blah blah', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`ID` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `DueDate` varchar(255) DEFAULT NULL,
  `EmployerID` int(10) NOT NULL,
  `Status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Name`, `DueDate`, `EmployerID`, `Status`) VALUES
(1, 'Peer Evaluation Project ', '2015-04-13', 2, 'open'),
(2, 'Internship Project', '2015-04-17', 2, 'open'),
(3, 'New Application Project', '2015-04-24', 2, 'open'),
(4, 'Test project', '2015-06-01', 2, 'open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
