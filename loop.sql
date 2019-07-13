-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 01:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adname` varchar(200) NOT NULL,
  `adpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `rid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `available` int(100) NOT NULL,
  `verified` int(100) NOT NULL,
  `rdescription` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `Repicture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sid` int(200) NOT NULL,
  `sname` varchar(2000) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `saddress` varchar(2000) NOT NULL,
  `ppassword` varchar(200) NOT NULL,
  `slpicture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stid` int(100) NOT NULL,
  `stname` varchar(200) NOT NULL,
  `stmail` varchar(200) NOT NULL,
  `stphone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(11) NOT NULL,
  `tname` varchar(200) NOT NULL,
  `temail` varchar(1000) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
