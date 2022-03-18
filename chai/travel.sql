-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2018 at 09:27 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(38) NOT NULL AUTO_INCREMENT,
  `package` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `adult` int(30) NOT NULL,
  `child` int(30) NOT NULL,
  `date` date NOT NULL,
  `travel` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `package`, `first_name`, `adult`, `child`, `date`, `travel`, `food`) VALUES
(38, 'Golden Triangle', 'bhaskar', 3, 2, '2018-11-08', 'Train', 'yes'),
(35, 'Golden Triangle', 'aditya', 3, 2, '2018-11-08', 'bus', 'No'),
(34, 'Golden Triangle', 'Abhinetra', 2, 5, '2018-11-30', 'Train', 'No'),
(33, 'Golden Triangle', 'Divij', 4, 1, '2020-07-08', 'bus', 'yes'),
(31, 'Mini North India', 'Chaitanya', 2, 2, '2020-02-06', 'Train', 'yes'),
(32, 'Golden Triangle', 'Abhinav', 2, 3, '2019-11-14', 'Train', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

DROP TABLE IF EXISTS `final`;
CREATE TABLE IF NOT EXISTS `final` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mobile` int(38) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`fname`, `lname`, `mobile`, `dob`, `email`, `pass`, `type`) VALUES
('chaitanya ', 'anand', 4678, '2018-11-02', 'chai83@gmail.com', 'abc', 'male'),
('gg', 'fdgf', 64664, '1334-12-12', 'abc@gmail.com', 'abc', 'male'),
('f', 'd', 1234, '2018-11-02', 'chai856@gmail.com', 'asd', 'male'),
('Chaitanya1', 'Anand1', 95, '1997-09-09', 'chai8156@gmail.com', 'aqsw', 'male'),
('Chaitanya', 'Anand', 953, '1997-09-09', 'chaitanyaanand83@gmail.com', 'rama', 'male'),
('aditya', 'deep', 7079, '1994-04-04', 'abhi@gmail.com', '1234', 'male'),
('abhinetra', 'k', 66666666, '2018-10-31', 'adi@gmail.com', '4567', 'male'),
('abhinetra', 'kumar', 9090787, '2018-10-29', 'adi@gmail.com', 'av', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Mobile Number` int(10) NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Email-id` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
