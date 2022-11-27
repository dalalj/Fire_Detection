-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 03:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-04:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `authorization` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `surname`, `email`, `username`, `password`, `authorization`) VALUES
(1, 'Mehmet Bugra', 'Gunaydin', 'Mehmet.Gunaydin@dcmail.ca', 'Bugra', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(2, 'Marcos', 'Bittencourt', 'Marcos.Bittencourt@dcfaculty.mycampus.ca', 'Marcos', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(3, 'Pritesh', 'Dalal', 'Pritesh.Dalal@dcmail.ca', 'Pritesh', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(4, 'Shenglin', 'Qian', 'Shenglin.Qian@dcmail.ca', 'Shenglin', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(5, 'Rutvik Alkeshbhai', 'Shah', 'Rutvik.Shah1@dcmail.ca', 'Rutvik', 'c4ca4238a0b923820dcc509a6f75849b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
