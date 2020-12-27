-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 03:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `aurtoakl`
--

CREATE TABLE `aurtoakl` (
  `Srno` int(11) NOT NULL,
  `Bus` varchar(70) NOT NULL,
  `AC` varchar(5) NOT NULL,
  `Fare` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aurtoakl`
--

INSERT INTO `aurtoakl` (`Srno`, `Bus`, `AC`, `Fare`) VALUES
(1, 'Baba Travels', 'No', 1000),
(2, 'Shree Travels', 'No', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `aurtonag`
--

CREATE TABLE `aurtonag` (
  `Srno` int(11) NOT NULL,
  `Bus` varchar(70) NOT NULL,
  `AC` varchar(5) NOT NULL,
  `Fare` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aurtonag`
--

INSERT INTO `aurtonag` (`Srno`, `Bus`, `AC`, `Fare`) VALUES
(1, 'Saini Travels', 'Yes', 1800),
(2, 'Purple Travels', 'No', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nagtoakl`
--

CREATE TABLE `nagtoakl` (
  `Srno` int(11) NOT NULL,
  `Bus` varchar(70) NOT NULL,
  `AC` varchar(5) NOT NULL,
  `Fare` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nagtoakl`
--

INSERT INTO `nagtoakl` (`Srno`, `Bus`, `AC`, `Fare`) VALUES
(1, 'Baba Travels', 'Yes', 800),
(2, 'Shree Travels', 'Yes', 900);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mbno` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `route` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `boarding` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `passenger` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seatno`
--

CREATE TABLE `seatno` (
  `id` int(11) NOT NULL,
  `seatno` text NOT NULL,
  `totfare` text NOT NULL,
  `busname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aurtoakl`
--
ALTER TABLE `aurtoakl`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `aurtonag`
--
ALTER TABLE `aurtonag`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `nagtoakl`
--
ALTER TABLE `nagtoakl`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatno`
--
ALTER TABLE `seatno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aurtoakl`
--
ALTER TABLE `aurtoakl`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aurtonag`
--
ALTER TABLE `aurtonag`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nagtoakl`
--
ALTER TABLE `nagtoakl`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seatno`
--
ALTER TABLE `seatno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
