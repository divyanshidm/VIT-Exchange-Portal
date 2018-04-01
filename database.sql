-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 09:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vep`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab_forum`
--

CREATE TABLE `cab_forum` (
  `cid` int(10) NOT NULL,
  `regnum` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `doj` date NOT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  `tim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Store Cab sharing forum details';

--
-- Dumping data for table `cab_forum`
--

INSERT INTO `cab_forum` (`cid`, `regnum`, `name`, `source`, `destination`, `start_time`, `doj`, `comment`, `tim`) VALUES
(4, '15BCE0342', 'Vaibhav khand', 'vellore', 'delhi', '01:00:00', '2017-04-06', 'call me', '2017-04-20 23:08:47'),
(6, '15BCE0454', 'Divyanshi', 'kosi', 'delhi', '14:01:00', '2017-04-30', '', '2017-04-29 21:30:06'),
(7, '15BCE0342', 'Vaibhav kh', 'kosi', 'vellore', '02:00:00', '2017-05-01', '', '2017-04-30 22:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_forum`
--

CREATE TABLE `discussion_forum` (
  `mid` int(10) NOT NULL,
  `regnum` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `tim` datetime NOT NULL,
  `attachment` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_forum`
--

INSERT INTO `discussion_forum` (`mid`, `regnum`, `name`, `subject`, `message`, `tim`, `attachment`) VALUES
(23, '15BCE0454', 'Divyanshi', 'VIT University', 'Best Private College of India', '2017-05-01 15:40:27', 'NO'),
(24, '15BCE0454', 'Divyanshi', 'Software engineering', 'projects can be done on web applications\r\n', '2017-05-01 15:41:11', 'NO'),
(25, '15BCE0454', 'Divyanshi', 'Microprocessor', 'arduino is good to go', '2017-05-01 15:41:42', 'NO'),
(26, '15BCE0342', 'Vaibhav kh', 'mess online change', 'last day of every month', '2017-05-01 15:43:17', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(10) NOT NULL,
  `regnum` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `tim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Store feedbacks';

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `regnum`, `name`, `subject`, `comment`, `tim`) VALUES
(1, '15BCE0342', 'Vaibhav khand', 'UI', 'Please Improve', '2017-04-28 19:06:47'),
(2, '15BCE0342', 'Vaibhav khand', 'Test2', 'Kindly Test The Modules Properly', '2017-04-28 19:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `pid` int(10) NOT NULL,
  `place` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='storing places and addresses';

-- --------------------------------------------------------

--
-- Table structure for table `review_exchange`
--

CREATE TABLE `review_exchange` (
  `rid` int(10) NOT NULL,
  `regnum` varchar(9) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `place` varchar(100) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  `tim` datetime NOT NULL,
  `attachment` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Storing Review Forum Details';

--
-- Dumping data for table `review_exchange`
--

INSERT INTO `review_exchange` (`rid`, `regnum`, `name`, `place`, `rating`, `comment`, `tim`, `attachment`) VALUES
(1, '15BCE0342', 'Vaibhav khand', 'CHANDNI CHOWK', '4.0', 'COOL PLACE', '2017-04-25 13:19:54', 'NO'),
(2, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '2.0', NULL, '2017-04-25 13:20:25', 'NO'),
(3, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '3.0', 'NICE\r\n', '2017-04-25 16:48:35', 'NO'),
(4, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '3.0', 'lassi is best', '2017-04-25 16:50:53', 'NO'),
(5, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '5.0', 'NICE PLACE MAN!', '2017-04-25 22:31:22', 'NO'),
(6, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '3.0', 'PANEER IS GOOD', '2017-04-25 20:36:20', 'NO'),
(7, '15BCE0342', 'Vaibhav khand', 'PUNJABI DHABA', '5.0', 'i like it', '2017-04-25 20:38:33', 'NO'),
(11, '15BCE0454', 'Divyanshi', 'VELLORE KITCHEN', '4.0', 'NICE FOOD', '2017-04-30 01:14:51', 'NO'),
(12, '15BCE0342', 'Vaibhav', 'B-ANNEX', '4.5', 'VERY NICE HOSTEL', '2017-10-27 04:06:15', 'NO'),
(13, '15BCE0342', 'Vaibhav', 'ALL MAART', '2.0', 'VHGHG', '2017-10-29 23:19:07', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `regnum` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Store all user details ';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`regnum`, `name`, `gender`, `mobile`, `address`, `email`, `password`) VALUES
('15BCE0342', 'Vaibhav', 'male', '7010932325', 'BX-115, MH, VIT University, Vellore', 'vaibhavkhandelwal20@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('ADMIN@VEP', 'VAIBHAV', 'male', '7533046086', 'BX-115', 'vaibhav@hotmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cab_forum`
--
ALTER TABLE `cab_forum`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `discussion_forum`
--
ALTER TABLE `discussion_forum`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review_exchange`
--
ALTER TABLE `review_exchange`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cab_forum`
--
ALTER TABLE `cab_forum`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `discussion_forum`
--
ALTER TABLE `discussion_forum`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_exchange`
--
ALTER TABLE `review_exchange`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
