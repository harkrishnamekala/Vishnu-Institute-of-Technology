-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 06:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vit_rc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `ac_stat` int(11) NOT NULL DEFAULT '0',
  `headcount` int(11) NOT NULL DEFAULT '0',
  `names` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `pid` int(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`pid`, `header`, `post`) VALUES
(1, 'SCHEDULE UPDATE', 'The Contest Schedule will be updated soon'),
(3, 'How to register', 'Teams that fabricate their own vehicle must explain the steering mechanism and the chassis layout in detail, along with proper illustrations. Picture(s) showing all the three should be attached.\r\n\r\nThe participants are required to send the photographs of the chassis before assembly so as to ensure that the parts of the car have been built by themselves, that being the case.\r\n\r\nPhotograph of the car in the current state must also be sent with the name of the photograph as the date on which it is taken.\r\n\r\nSpecification of all other components like the engine, remote controllers etc must be specified.\r\n\r\nThe complete abstract along with the photos and the team name and members name..\r\n\r\nIf readymade cars are used by the team then the team should mail the exact specification of the car.\r\n\r\nWrite the name of team along with the name of team leader and team members with contact numbers and e-mail ids. {put contact details here and the email to which they have to send their design illustrations}\r\n\r\nA confirmation mail will be sent to the Team.');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `messageid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `tlname` varchar(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneone` varchar(255) DEFAULT NULL,
  `phonetwo` varchar(255) DEFAULT NULL,
  `emailv` int(1) DEFAULT '0',
  `applications` int(1) DEFAULT '0',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` int(100) NOT NULL,
  `error` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`id`, `error`) VALUES
(33, '1'),
(34, '1'),
(34, '1'),
(36, '1'),
(37, '1'),
(38, '1'),
(29, '1'),
(29, '1'),
(29, '1'),
(29, '1'),
(29, 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting'),
(29, '1'),
(30, 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting'),
(30, '1');

-- --------------------------------------------------------

--
-- Table structure for table `filelocation`
--

CREATE TABLE `filelocation` (
  `id` int(255) NOT NULL,
  `filepath` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verifylog`
--

CREATE TABLE `verifylog` (
  `id` int(255) NOT NULL,
  `checksum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filelocation`
--
ALTER TABLE `filelocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifylog`
--
ALTER TABLE `verifylog`
  ADD PRIMARY KEY (`checksum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `messageid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
