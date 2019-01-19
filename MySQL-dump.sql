-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 19, 2019 at 08:16 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `grades`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `studentid` int(11) unsigned NOT NULL,
  `studentname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `studentpercent` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `studentlettergrade` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`studentid`, `studentname`, `studentpercent`, `studentlettergrade`) VALUES
(28, 'Raphael', '80', 'B'),
(29, 'Leonardo', '99.9', 'A'),
(30, 'Donatello', '100', 'A'),
(31, 'Michelangelo', '40', 'F'),
(32, 'Splinter', '100', 'A'),
(33, 'Casey Jones', '69', 'D'),
(34, 'April O''Niel', '79.9', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `studentid` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;