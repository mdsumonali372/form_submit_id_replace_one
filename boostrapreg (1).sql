-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 08:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boostrapreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `reginfo`
--

CREATE TABLE `reginfo` (
  `ID` int(11) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reginfo`
--

INSERT INTO `reginfo` (`ID`, `Full_Name`, `Email`, `Position`, `Password`, `Gender`) VALUES
(20, 'Md Sumon  Ali454', 'mdsumonali0002412@gmail.com', 'jwd', '1234425452', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reginfo`
--
ALTER TABLE `reginfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reginfo`
--
ALTER TABLE `reginfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
