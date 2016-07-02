-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 09:06 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mani`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_login`
--

CREATE TABLE IF NOT EXISTS `sample_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_login`
--

INSERT INTO `sample_login` (`username`, `password`, `email`, `mobile`) VALUES
('arun', 'arun1234', 'arun@gmail.com', '7645286341'),
('kavi', 'kavi1234', 'kavi65@gmail.com', '8623165327'),
('manimaran', 'mani12345', 'mani123@gmail.com', '9600875352'),
('prem', 'prem1234', 'prem234@gmail.com', '9321456783'),
('ram', 'ram1234', 'ram54@gmail.com', '7432896174');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample_login`
--
ALTER TABLE `sample_login`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
