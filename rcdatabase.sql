-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 07:54 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `rcdata`
--

CREATE TABLE `rcdata` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rcdata`
--

INSERT INTO `rcdata` (`id`, `firstname`, `lastname`, `course`, `email`, `mobile`) VALUES
(125, 'Sourav', 'yadav', 'B.Tech', 'pratapsouravyadav225', '9935331562'),
(126, 'Aman', 'sagar', 'B.Tech', 'amansagar@123gamil.c', '8936582456'),
(127, 'Ankit', 'singh', 'B.Tech', 'annkistcs@gmail.com', '9025080348'),
(128, 'Mujtaba', 'ali', 'B.Tech', 'Asa@gmil.com', '9012485103'),
(129, 'Rekha', 'chauhan', 'B.Tech', 'rekha@gamil.com', '7379013251'),
(130, 'ankita', 'tiwari', 'm.tech', 'ankita@tiwari.com', '9935331562');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rcdata`
--
ALTER TABLE `rcdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rcdata`
--
ALTER TABLE `rcdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
