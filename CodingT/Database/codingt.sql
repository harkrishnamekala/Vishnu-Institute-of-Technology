-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 12:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codingt`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `cfightsid` varchar(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `pnumber` int(255) NOT NULL DEFAULT '0',
  `wins` int(255) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL,
  `roundid` int(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`cfightsid`, `tname`, `pnumber`, `wins`, `tid`, `roundid`) VALUES
('ct_team1', 'team1', 0, 1, 101, 0),
('ct_team2', 'team2', 0, 0, 102, 0),
('ct_team3', 'team3', 0, 1, 103, 0),
('ct_team4', 'team4', 0, 0, 104, 0),
('ct_team5', 'team5', 0, 0, 105, 0),
('ct_team6', 'team6', 0, 0, 106, 0),
('ct_team7', '', 0, 0, 107, 0),
('ct_team8', '', 0, 0, 108, 0),
('ct_team9', '', 0, 0, 109, 0),
('ct_team10', '', 0, 0, 110, 0),
('ct_team11', '', 0, 0, 111, 0),
('ct_team12', '', 0, 0, 112, 0),
('ct_team13', '', 0, 0, 113, 0),
('ct_team14', '', 0, 0, 114, 0),
('ct_team15', '', 0, 0, 115, 0),
('ct_team16', '', 0, 0, 116, 0),
('ct_team17', '', 0, 0, 117, 0),
('ct_team18', '', 0, 0, 118, 0),
('ct_team19', '', 0, 0, 119, 0),
('ct_team20', '', 0, 0, 120, 0),
('ct_team21', '', 0, 0, 121, 0),
('ct_team22', '', 0, 0, 122, 0),
('ct_team23', '', 0, 0, 123, 0),
('ct_team24', '', 0, 0, 124, 0),
('ct_team25', '', 0, 0, 125, 0),
('ct_team26', '', 0, 0, 126, 0),
('ct_team27', '', 0, 0, 127, 0),
('ct_team28', '', 0, 0, 128, 0),
('ct_team29', '', 0, 0, 129, 0),
('ct_team30', '', 0, 0, 130, 0),
('ct_team31', '', 0, 0, 131, 0),
('ct_team32', '', 0, 0, 132, 0),
('ct_team33', '', 0, 0, 133, 0),
('ct_team34', '', 0, 0, 134, 0),
('ct_team35', '', 0, 0, 135, 0),
('ct_team36', '', 0, 0, 136, 0),
('ct_team37', '', 0, 0, 137, 0),
('ct_team38', '', 0, 0, 138, 0),
('ct_team39', '', 0, 0, 139, 0),
('ct_team40', '', 0, 0, 140, 0),
('ct_team41', '', 0, 0, 141, 0),
('ct_team42', '', 0, 0, 142, 0),
('ct_team43', '', 0, 0, 143, 0),
('ct_team44', '', 0, 0, 144, 0),
('ct_team45', '', 0, 0, 145, 0),
('ct_team46', '', 0, 0, 146, 0),
('ct_team47', '', 0, 0, 147, 0),
('ct_team48', '', 0, 0, 148, 0),
('ct_team49', '', 0, 0, 149, 0),
('ct_team50', '', 0, 0, 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `round1`
--

CREATE TABLE `round1` (
  `roundid` int(255) NOT NULL,
  `tidone` int(255) DEFAULT NULL,
  `tidtwo` int(255) DEFAULT NULL,
  `winner` int(255) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `round1`
--

INSERT INTO `round1` (`roundid`, `tidone`, `tidtwo`, `winner`) VALUES
(1, 101, 102, 101),
(2, 103, 104, 103),
(3, 105, 106, 0),
(4, 107, 108, 0),
(5, 109, 110, 0),
(6, 111, 112, 0),
(7, 113, 114, 0),
(8, 115, 116, 0),
(9, 117, 118, 0),
(10, 119, 120, 0),
(11, 121, 122, 0),
(12, 123, 124, 0),
(13, 125, 126, 0),
(14, 127, 128, 0),
(15, 129, 130, 0),
(16, 131, 132, 0),
(17, 133, 134, 0),
(18, 135, 136, 0),
(19, 137, 138, 0),
(20, 139, 140, 0),
(21, 141, 142, 0),
(22, 143, 144, 0),
(23, 145, 146, 0),
(24, 147, 148, 0),
(25, 149, 150, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `round1`
--
ALTER TABLE `round1`
  ADD PRIMARY KEY (`roundid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `round1`
--
ALTER TABLE `round1`
  MODIFY `roundid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
