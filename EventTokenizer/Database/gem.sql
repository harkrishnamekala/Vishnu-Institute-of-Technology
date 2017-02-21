-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 07:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gem`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `playerid` varchar(255) NOT NULL,
  `playername` varchar(255) NOT NULL,
  `opponent1` varchar(255) NOT NULL DEFAULT 'noset',
  `atone_star` int(255) NOT NULL DEFAULT '0',
  `atone_dest` int(255) NOT NULL DEFAULT '0',
  `opponent2` varchar(255) NOT NULL DEFAULT 'noset',
  `attwo_star` int(255) NOT NULL DEFAULT '0',
  `attwo_dest` int(255) NOT NULL DEFAULT '0',
  `star_avg` int(255) NOT NULL DEFAULT '0',
  `dest_avg` int(255) NOT NULL DEFAULT '0',
  `playerphone` varchar(255) NOT NULL DEFAULT 'noset',
  `volphone` varchar(255) NOT NULL DEFAULT 'noset'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`playerid`, `playername`, `opponent1`, `atone_star`, `atone_dest`, `opponent2`, `attwo_star`, `attwo_dest`, `star_avg`, `dest_avg`, `playerphone`, `volphone`) VALUES
('STRAT-P101', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P102', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P103', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P104', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P105', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P106', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P107', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P108', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P109', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P110', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P111', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P112', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P113', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P114', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P115', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P116', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P117', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P118', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P119', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P120', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P121', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P122', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P123', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P124', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P125', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P126', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P127', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P128', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P129', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P130', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P131', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P132', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P133', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P134', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P135', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P136', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P137', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P138', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P139', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P140', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P141', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P142', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P143', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P144', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P145', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P146', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P147', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P148', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P149', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P150', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P151', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P152', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P153', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P154', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P155', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P156', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P157', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P158', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P159', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P160', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P161', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P162', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P163', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P164', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P165', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P166', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P167', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P168', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P169', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P170', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P171', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P172', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P173', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P174', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P175', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P176', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P177', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P178', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P179', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P180', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P181', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P182', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P183', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P184', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P185', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P186', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P187', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P188', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P189', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P190', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P191', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P192', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P193', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P194', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P195', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P196', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P197', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P198', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P199', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P200', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P201', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P202', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P203', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P204', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P205', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P206', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P207', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P208', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P209', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P210', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P211', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P212', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P213', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P214', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P215', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P216', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P217', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P218', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P219', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P220', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P221', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P222', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P223', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P224', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P225', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P226', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P227', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P228', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P229', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P230', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P231', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P232', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P233', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P234', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P235', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P236', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P237', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P238', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P239', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P240', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P241', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P242', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P243', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P244', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P245', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P246', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P247', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P248', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P249', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P250', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P251', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P252', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P253', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P254', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P255', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P256', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P257', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P258', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P259', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P260', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P261', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P262', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P263', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P264', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P265', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P266', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P267', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P268', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P269', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P270', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P271', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P272', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P273', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P274', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P275', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P276', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P277', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P278', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P279', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P280', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P281', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P282', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P283', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P284', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P285', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P286', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P287', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P288', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P289', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P290', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P291', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P292', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P293', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P294', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P295', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P296', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P297', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P298', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P299', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P300', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P301', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P302', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P303', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P304', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P305', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P306', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P307', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P308', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P309', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P310', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P311', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P312', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P313', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P314', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P315', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P316', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P317', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P318', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P319', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P320', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P321', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P322', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P323', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P324', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P325', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P326', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P327', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P328', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P329', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P330', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P331', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P332', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P333', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P334', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P335', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P336', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P337', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P338', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P339', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P340', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P341', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P342', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P343', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P344', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P345', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P346', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P347', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P348', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P349', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P350', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P351', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P352', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P353', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P354', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P355', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P356', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P357', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P358', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P359', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P360', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P361', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P362', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P363', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P364', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P365', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P366', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P367', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P368', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P369', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P370', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P371', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P372', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P373', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P374', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P375', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P376', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P377', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P378', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P379', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P380', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P381', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P382', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P383', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P384', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P385', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P386', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P387', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P388', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P389', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P390', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P391', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P392', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P393', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P394', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P395', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P396', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P397', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P398', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P399', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P400', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P401', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P402', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P403', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P404', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P405', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P406', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P407', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P408', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P409', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P410', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P411', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P412', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P413', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P414', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P415', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P416', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P417', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P418', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P419', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P420', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P421', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P422', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P423', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P424', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P425', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P426', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P427', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P428', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P429', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P430', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P431', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P432', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P433', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P434', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P435', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P436', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P437', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P438', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P439', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P440', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P441', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P442', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P443', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P444', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P445', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P446', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P447', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P448', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P449', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P450', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P451', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P452', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P453', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P454', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P455', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P456', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P457', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P458', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P459', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P460', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P461', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P462', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P463', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P464', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P465', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P466', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P467', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P468', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P469', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P470', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P471', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P472', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P473', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P474', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P475', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P476', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P477', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P478', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P479', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P480', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P481', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P482', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P483', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P484', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P485', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P486', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P487', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P488', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P489', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P490', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P491', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P492', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P493', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P494', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P495', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P496', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P497', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P498', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset'),
('STRAT-P499', '', 'noset', 0, 0, 'noset', 0, 0, 0, 0, 'noset', 'noset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`playerid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;