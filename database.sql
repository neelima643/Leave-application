-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 10:17 AM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaveapp`
--

CREATE TABLE `leaveapp` (
  `email` varchar(100) DEFAULT NULL,
  `ltype` varchar(100) DEFAULT NULL,
  `lfrom` date DEFAULT NULL,
  `lto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveapp`
--

INSERT INTO `leaveapp` (`email`, `ltype`, `lfrom`, `lto`) VALUES
('devika123@gmail.com', 'sick', '2021-05-13', '2021-05-22'),
('devika123@gmail.com', 'casual', '2021-05-06', '2021-05-09'),
('devika123@gmail.com', 'casual', '2021-05-05', '2021-05-06'),
('devika123@gmail.com', 'paid', '2021-04-30', '2021-05-08'),
('devika123@gmail.com', 'paid', '2021-05-07', '2021-05-19'),
('a@gmail.com', 'casual', '2021-05-05', '2021-05-20'),
('admin@gmailcom', 'casual', '2021-05-10', '2021-05-10'),
('admin@gmailcom', 'casual', '2021-04-27', '2021-05-10'),
('admin@gmail.com', 'casual', '2021-05-15', '2021-05-20'),
('admin@gmail.com', 'casual', '2021-05-07', '2021-05-21'),
('admin@gmail.com', 'casual', '2021-05-01', '2021-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
