-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2009 at 08:18 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Agre`
--

-- --------------------------------------------------------

--
-- Table structure for table `AreaOfExpertise`
--

CREATE TABLE IF NOT EXISTS `AreaOfExpertise` (
  `AE_id` varchar(10) NOT NULL,
  `Value` varchar(40) NOT NULL,
  `Desc` varchar(300) NOT NULL,
  `Status` varchar(2) NOT NULL,
  PRIMARY KEY  (`AE_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AreaOfExpertise`
--

INSERT INTO `AreaOfExpertise` (`AE_id`, `Value`, `Desc`, `Status`) VALUES
('AOE001', 'DNA', 'nothing', '1'),
('AOE002', 'PlantLife', 'none', '1'),
('A0043', 'Javascrip', 'good client', '1');

-- --------------------------------------------------------

--
-- Table structure for table `AreaofInterest`
--

CREATE TABLE IF NOT EXISTS `AreaofInterest` (
  `A_id` varchar(11) NOT NULL,
  `Value` varchar(40) NOT NULL,
  `Desc` varchar(300) NOT NULL,
  `Status` varchar(2) NOT NULL COMMENT '0fornew1confirmed',
  PRIMARY KEY  (`A_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AreaofInterest`
--

INSERT INTO `AreaofInterest` (`A_id`, `Value`, `Desc`, `Status`) VALUES
('A001', 'Java', 'An object oriented Language', '1'),
('A002', 'PHP', 'PHP hypertext preprocessor', '1'),
('AI98', 'AJAX', 'New technoloy', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE IF NOT EXISTS `Member` (
  `NID` varchar(10) NOT NULL,
  `Fname` varchar(70) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Title` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(50) NOT NULL,
  `WAddress` varchar(200) NOT NULL,
  `WCity` varchar(30) NOT NULL,
  `HQualification` varchar(50) NOT NULL,
  `Post_Code` varchar(10) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `University` varchar(30) NOT NULL,
  PRIMARY KEY  (`NID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`NID`, `Fname`, `Lname`, `Title`, `Email`, `Address`, `City`, `WAddress`, `WCity`, `HQualification`, `Post_Code`, `Telephone`, `University`) VALUES
('870851138v', 'kanishak weeraseara', 'weeraseara', 'mr', 'kan@yahoo.com', 'malabe', 'malabe', 'malbe', 'malage', '', '10015', 1126593, 'colombo'),
('870851137v', 'Kanishka GAyan', 'Weerasekara', 'Mr', 'kkgwer@gmail.com', 'Panadura', 'Malbe', 'Colombo', 'Colombo', 'PHD', '01002', 93030, 'UOC'),
('870851140v', 'Saman J', 'Jayasekara', 'Mr', 'sa@yahoo.com', 'Kandy', 'Kandy', 'Peradeniya', 'Peradeniya', 'PHD', '93930', 3030, 'UOM'),
('870851130v', 'Sujith', 'Bandara', 'Mr', 'su@yaoo.com', 'Kaduwela', 'Malabe', 'Colombo', 'Boralla', 'PHD', '3003', 93939, 'UOC'),
('', '', '', '', '', '', '', '', '', 'PHD', '', 0, 'UOC');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_AE`
--

CREATE TABLE IF NOT EXISTS `Mem_AE` (
  `NID` varchar(10) NOT NULL,
  `AE_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mem_AE`
--

INSERT INTO `Mem_AE` (`NID`, `AE_id`) VALUES
('870851138v', 'AOE001'),
('870851137v', 'A0043'),
('870851140v', 'A0043'),
('870851130v', 'AOE001'),
('870851130v', 'AOE002'),
('870851130v', 'A0043'),
('870851137v', 'AOE001');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_AI`
--

CREATE TABLE IF NOT EXISTS `Mem_AI` (
  `NID` varchar(10) NOT NULL,
  `A_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mem_AI`
--

INSERT INTO `Mem_AI` (`NID`, `A_id`) VALUES
('870851138v', 'AE001'),
('870851138v', 'AE002'),
('870851137v', 'A002'),
('870851137v', 'AI98'),
('870851140v', 'A001'),
('870851130v', 'A001'),
('870851130v', 'A002'),
('870851137v', 'A001');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_Qua`
--

CREATE TABLE IF NOT EXISTS `Mem_Qua` (
  `NID` varchar(10) NOT NULL,
  `Q_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mem_Qua`
--


-- --------------------------------------------------------

--
-- Table structure for table `Qualification`
--

CREATE TABLE IF NOT EXISTS `Qualification` (
  `Q_id` varchar(10) NOT NULL,
  `Q_value` varchar(50) NOT NULL,
  `DESC` varchar(200) NOT NULL,
  PRIMARY KEY  (`Q_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Qualification`
--

INSERT INTO `Qualification` (`Q_id`, `Q_value`, `DESC`) VALUES
('PHD', 'Professor', 'he'),
('BSC', 'batulaer of science', 'base');

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE IF NOT EXISTS `University` (
  `U_id` varchar(10) NOT NULL,
  `U_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_id` varchar(15) NOT NULL,
  `Status` varchar(2) NOT NULL,
  PRIMARY KEY  (`U_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `University`
--

INSERT INTO `University` (`U_id`, `U_Name`, `Address`, `Contact_id`, `Status`) VALUES
('UOC', 'university of colombo', 'Reid Avenue, Colombo 07', '9400030', '1'),
('UOM', 'University of Moratuwa', 'Moratuwa', '8494', '1');

