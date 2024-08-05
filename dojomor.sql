-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dojomor`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerdstudents`
--

CREATE TABLE `registerdstudents` (
  `id` int(5) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `session1` varchar(100) NOT NULL,
  `session2` varchar(100) NOT NULL,
  `session3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerdstudents`
--

INSERT INTO `registerdstudents` (`id`, `Sname`, `address`, `tel`, `session1`, `session2`, `session3`) VALUES
(21, 'test', 'test', '0765121223', 'Thunkable _10AM', 'micro:bit with Python Editor _11AM', 'Scratch _12Noon'),
(23, 'test1', 'test1', '0112288369', 'Thunkable _11AM', '3D Modelling with Blender _10AM', 'Scratch _12Noon');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `session1` varchar(10) NOT NULL,
  `session2` varchar(10) NOT NULL,
  `session3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `technology`, `session1`, `session2`, `session3`) VALUES
(1, 'Scratch', '10AM', '11AM', '12Noon'),
(2, 'Thunkable', '10AM', '11AM', '12Noon'),
(3, 'LightBot', '10AM', '11AM', '12Noon'),
(4, '3D Modelling with Blender', '10AM', '11AM', '12Noon'),
(5, 'micro:bit with Python Editor', '10AM', '11AM', '12Noon'),
(6, 'P5js Create a digital puppet', '10AM', '11AM', '12Noon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerdstudents`
--
ALTER TABLE `registerdstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerdstudents`
--
ALTER TABLE `registerdstudents`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
