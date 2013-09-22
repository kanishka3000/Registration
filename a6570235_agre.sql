
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2010 at 10:07 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6570235_agre`
--

-- --------------------------------------------------------

--
-- Table structure for table `AreaOfExpertise`
--

CREATE TABLE `AreaOfExpertise` (
  `AE_id` varchar(10) NOT NULL,
  `Value` varchar(40) NOT NULL,
  `Desc` varchar(300) NOT NULL,
  `Status` varchar(2) NOT NULL,
  PRIMARY KEY  (`AE_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AreaOfExpertise`
--

INSERT INTO `AreaOfExpertise` VALUES('AOE001', 'DNA', 'nothing', '1');
INSERT INTO `AreaOfExpertise` VALUES('AOE002', 'PlantLife', 'none', '1');
INSERT INTO `AreaOfExpertise` VALUES('A0043', 'Javascrip', 'good client', '1');
INSERT INTO `AreaOfExpertise` VALUES('A003', 'MyExpertise', 'This is just for the testing purposes....', '1');
INSERT INTO `AreaOfExpertise` VALUES('AK0087', 'myexpertise', 'This is my expertise', '0');
INSERT INTO `AreaOfExpertise` VALUES('S904', 'Myexpertise', 'enter a description to identify the area of interest', '1');

-- --------------------------------------------------------

--
-- Table structure for table `AreaofInterest`
--

CREATE TABLE `AreaofInterest` (
  `A_id` varchar(11) NOT NULL,
  `Value` varchar(40) NOT NULL,
  `Desc` varchar(300) NOT NULL,
  `Status` varchar(2) NOT NULL COMMENT '0fornew1confirmed',
  PRIMARY KEY  (`A_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AreaofInterest`
--

INSERT INTO `AreaofInterest` VALUES('A001', 'Java', 'An object oriented Language', '1');
INSERT INTO `AreaofInterest` VALUES('A002', 'PHP', 'PHP hypertext preprocessor', '1');
INSERT INTO `AreaofInterest` VALUES('AI98', 'AJAX', 'New technoloy', '1');
INSERT INTO `AreaofInterest` VALUES('AE003', 'myInterest', 'This does not contain any valuable information.....', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
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

INSERT INTO `Member` VALUES('870851138v', 'kanishak weeraseara', 'weeraseara', 'mr', 'kan@yahoo.com', 'malabe', 'malabe', 'malbe', 'malage', '', '10015', 1126593, 'colombo');
INSERT INTO `Member` VALUES('870851137v', 'Kanishka GAyan', 'Weerasekara', 'Mr', 'kkgwer@gmail.com', 'Panadura', 'Malbe', 'Colombo', 'Colombo', 'PHD', '01002', 93030, 'UOC');
INSERT INTO `Member` VALUES('870851140v', 'Saman J', 'Jayasekara', 'Mr', 'sa@yahoo.com', 'Kandy', 'Kandy', 'Peradeniya', 'Peradeniya', 'PHD', '93930', 3030, 'UOM');
INSERT INTO `Member` VALUES('870851130v', 'Sujith', 'Bandara', 'Mr', 'su@yaoo.com', 'Kaduwela', 'Malabe', 'Colombo', 'Boralla', 'PHD', '3003', 93939, 'UOC');
INSERT INTO `Member` VALUES('', '', '', '', '', '', '', '', '', 'PHD', '', 0, 'UOC');
INSERT INTO `Member` VALUES('870852138v', 'Chamath', 'Jayapriya', '', 'kan@yahoo.com', 'Kaduwela', 'kaduwela', 'malabe', 'malabe', 'PHD', '3993', 112560175, 'UOM');
INSERT INTO `Member` VALUES('170851138v', 'kanishka gayan ', 'weerasekara', 'Mrs/Miss', 'kanishka@yahoo.com', 'Malabe', 'malabe', 'malabe', 'malabe', 'BSC', '939393', 112560175, 'UOM');
INSERT INTO `Member` VALUES('857160377v', 'Saroopa', 'Samaradivakara', 'Dr', 'kan@yhaool.com', 'Colombo', 'Colombo', 'Colombo', 'kandy', 'BSC', '93949q', 112560175, 'UOM');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_AE`
--

CREATE TABLE `Mem_AE` (
  `NID` varchar(10) NOT NULL,
  `AE_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mem_AE`
--

INSERT INTO `Mem_AE` VALUES('870851138v', 'AOE001');
INSERT INTO `Mem_AE` VALUES('870851137v', 'A0043');
INSERT INTO `Mem_AE` VALUES('870851140v', 'A0043');
INSERT INTO `Mem_AE` VALUES('870851130v', 'AOE001');
INSERT INTO `Mem_AE` VALUES('870851130v', 'AOE002');
INSERT INTO `Mem_AE` VALUES('870851130v', 'A0043');
INSERT INTO `Mem_AE` VALUES('870851137v', 'AOE001');
INSERT INTO `Mem_AE` VALUES('870852138v', 'AOE002');
INSERT INTO `Mem_AE` VALUES('170851138v', 'AOE002');
INSERT INTO `Mem_AE` VALUES('857160377v', 'AOE001');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_AI`
--

CREATE TABLE `Mem_AI` (
  `NID` varchar(10) NOT NULL,
  `A_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Mem_AI`
--

INSERT INTO `Mem_AI` VALUES('870851138v', 'AE001');
INSERT INTO `Mem_AI` VALUES('870851138v', 'AE002');
INSERT INTO `Mem_AI` VALUES('870851137v', 'A002');
INSERT INTO `Mem_AI` VALUES('870851137v', 'AI98');
INSERT INTO `Mem_AI` VALUES('870851140v', 'A001');
INSERT INTO `Mem_AI` VALUES('870851130v', 'A001');
INSERT INTO `Mem_AI` VALUES('870851130v', 'A002');
INSERT INTO `Mem_AI` VALUES('870851137v', 'A001');
INSERT INTO `Mem_AI` VALUES('870852138v', 'A002');
INSERT INTO `Mem_AI` VALUES('170851138v', 'A002');
INSERT INTO `Mem_AI` VALUES('170851138v', 'AI98');
INSERT INTO `Mem_AI` VALUES('857160377v', 'A001');
INSERT INTO `Mem_AI` VALUES('857160377v', 'A002');

-- --------------------------------------------------------

--
-- Table structure for table `Mem_Qua`
--

CREATE TABLE `Mem_Qua` (
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

CREATE TABLE `Qualification` (
  `Q_id` varchar(10) NOT NULL,
  `Q_value` varchar(50) NOT NULL,
  `DESC` varchar(200) NOT NULL,
  PRIMARY KEY  (`Q_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Qualification`
--

INSERT INTO `Qualification` VALUES('PHD', 'Professor', 'he');
INSERT INTO `Qualification` VALUES('BSC', 'batulaer of science', 'base');
INSERT INTO `Qualification` VALUES('Q001', 'myQualification', 'noreal value');

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE `University` (
  `U_id` varchar(10) NOT NULL,
  `U_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_id` varchar(15) NOT NULL,
  `Status` varchar(2) NOT NULL,
  PRIMARY KEY  (`U_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `University`
--

INSERT INTO `University` VALUES('UOC', 'university of colombo', 'Reid Avenue, Colombo 07', '9400030', '1');
INSERT INTO `University` VALUES('UOM', 'University of Moratuwa', 'Moratuwa', '8494', '1');
INSERT INTO `University` VALUES('UOP', 'University of Peradeniya', 'irkkrk', '0112560175', '1');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) default NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tpno` int(10) NOT NULL,
  `Nic` int(10) NOT NULL,
  `AccessLevel` varchar(30) default NULL,
  PRIMARY KEY  (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` VALUES('R', 'abc', 'kan', 'none', 3939, 9003, 'RegistrationOfficer');
INSERT INTO `User` VALUES('A', 'abc', 'adm', 'none', 3030, 39393, 'Admin');
INSERT INTO `User` VALUES('RU', '123', 'kanishka', 'malabe', 112560175, 870851138, 'RegistrationOfficer');
