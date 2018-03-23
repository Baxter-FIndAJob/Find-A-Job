-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2018 at 08:52 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `baxter_jobquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `employerId` int(11) NOT NULL,
  `employerName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`employerId`, `employerName`) VALUES
(1, 'McDonald''s'),
(2, 'Wal-Mart');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `employerId` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobDescription` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `employerId`, `jobTitle`, `jobDescription`) VALUES
(1, 1, 'Fry Cook', 'Making French fries and chicken nuggets.'),
(2, 1, 'Cashier', 'Ringing up Happy Meals.'),
(3, 2, 'Inventory', 'Loading cargo into the warehouse.'),
(4, 2, 'Greeter', 'Welcoming people to Wal-Mart.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`employerId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `employerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;






-- UPDATE Mar 23
ALTER TABLE `employers` ADD `anus` INT NOT NULL AFTER `employerLocation`; 



