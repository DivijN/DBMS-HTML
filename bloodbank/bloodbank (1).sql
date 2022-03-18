-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 08:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `view` ()  NO SQL
select name,location,unit from patreg$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `blood_avail`
--

CREATE TABLE `blood_avail` (
  `id` varchar(2) NOT NULL DEFAULT '1',
  `AP` int(3) NOT NULL DEFAULT '0',
  `AN` int(3) NOT NULL DEFAULT '0',
  `BP` int(3) NOT NULL DEFAULT '0',
  `BN` int(3) NOT NULL DEFAULT '0',
  `ABP` int(3) NOT NULL DEFAULT '0',
  `ABN` int(3) NOT NULL DEFAULT '0',
  `OP` int(3) NOT NULL DEFAULT '0',
  `ONN` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_avail`
--

INSERT INTO `blood_avail` (`id`, `AP`, `AN`, `BP`, `BN`, `ABP`, `ABN`, `OP`, `ONN`) VALUES
('1', 2, 3, 1, 1, 3, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE `camps` (
  `id` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `location`, `start`, `end`) VALUES
(1, 'HESARGHATTA', '2017-12-01', '2019-01-01'),
(4, 'INDIRANAGAR', '2018-11-01', '2019-11-01'),
(3, 'KORAMANGALA', '2018-09-03', '2019-09-03'),
(2, 'TUMKUR', '2018-05-08', '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(3) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `bg` varchar(20) DEFAULT NULL,
  `units` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `email`, `bg`, `units`) VALUES
(1, 'divya@gmail.com', 'ABP', 3),
(2, 'bindhu@gmail.com', 'AP', 3),
(3, 'divij@gmail.com', 'ABN', 1),
(4, 'chathurya@gmail.com', 'BN', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donorreg`
--

CREATE TABLE `donorreg` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `bloodgroup` varchar(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorreg`
--

INSERT INTO `donorreg` (`name`, `gender`, `dob`, `number`, `bloodgroup`, `email`, `password`) VALUES
('ANAGHA', 'female', '1998-07-28', '8884290725', 'O+', 'anagha@gmail.com', '123456'),
('anagha', 'female', '1998-06-28', '8985214731', 'A+', 'anaghar@gmail.com', '1234'),
('BINDHU', 'female', '1998-03-01', '9742572959', 'A+', 'bindhu@gmail.com', '12345'),
('bindhu', 'female', '1998-03-01', '9856754281', 'AB+', 'bindhumv@gmail.com', '12345'),
('CHATHURYA', 'female', '1998-06-09', '9964342435', 'B-', 'chathurya@gmail.com', '12345678'),
('DIVIJ', 'male', '1997-12-10', '9535497506', 'AB-', 'divij@gmail.com', '1234567'),
('divya', 'female', '1998-09-03', '8105869362', 'B+', 'divya123@gmail.com', '123456'),
('DIVYA', 'female', '1999-09-03', '9620142990', 'AB+', 'divya@gmail.com', '1234');

--
-- Triggers `donorreg`
--
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `donorreg` FOR EACH ROW insert into userlog (mail,time) values(NEW.email,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `num` int(10) NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `unit` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`id`, `name`, `gender`, `dob`, `num`, `bloodgrp`, `unit`, `email`, `disease`, `location`) VALUES
(1, 'AHANA', 'female', '2018-11-30', 2147483647, 'AP', 1, 'ahana@gmail.com', 'anemia', 'Hesarghatta'),
(2, 'arghya', 'female', '2018-11-30', 2147483647, 'BN', 2, 'arghya@gmail.com', 'surgery', 'Indiranagar'),
(3, 'GAGAN', 'male', '2006-09-28', 2147483647, 'ABP', 5, 'gagan@gmail.com', 'surgery', 'Koramangala');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `mail` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`mail`, `time`) VALUES
('anagha@gmail.com', '2018-12-01 11:04:23'),
('anaghar@gmail.com', '2018-12-01 01:17:06'),
('bindhu@gmail.com', '2018-12-01 11:00:21'),
('bindhumv@gmail.com', '2018-12-01 01:15:12'),
('chathurya@gmail.com', '2018-12-01 11:11:18'),
('divij@gmail.com', '2018-12-01 11:07:05'),
('divya123@gmail.com', '2018-12-01 01:02:37'),
('divya@gmail.com', '2018-12-01 10:56:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_avail`
--
ALTER TABLE `blood_avail`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `camps`
--
ALTER TABLE `camps`
  ADD PRIMARY KEY (`location`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `donorreg`
--
ALTER TABLE `donorreg`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`email`) REFERENCES `donorreg` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
