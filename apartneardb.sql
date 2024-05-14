-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 02:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartneardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apadmin`
--

CREATE TABLE `apadmin` (
  `adminEmail` varchar(200) NOT NULL,
  `adminPass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apadmin`
--

INSERT INTO `apadmin` (`adminEmail`, `adminPass`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `apartmentID` int(11) NOT NULL,
  `apartmentName` varchar(200) NOT NULL,
  `apartmentPrice` varchar(100) NOT NULL,
  `fbPage` varchar(200) NOT NULL,
  `contactNum` varchar(100) NOT NULL,
  `apartmentImage` varchar(200) NOT NULL,
  `apartmentLoc` varchar(200) NOT NULL,
  `apartmentDesc` varchar(2000) NOT NULL,
  `apartmentImage1` varchar(200) NOT NULL,
  `apartmentImage2` varchar(200) NOT NULL,
  `apartmentImage3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`apartmentID`, `apartmentName`, `apartmentPrice`, `fbPage`, `contactNum`, `apartmentImage`, `apartmentLoc`, `apartmentDesc`, `apartmentImage1`, `apartmentImage2`, `apartmentImage3`) VALUES
(96, 'JC APARTMENT', '10,000', 'Jc Fajardo', '09055847896', 'apartment.jpg', 'Poblacion, San Miguel, Bulacan', '      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor dolorum voluptates dolorem iste. Optio distinctio nemo ab facere sunt labore dolorum. Dolorum iusto cupiditate veritatis reiciendi', 'apartment2.img.jpg', 'apartment3.jpg', 'apartment4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `userpass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `fullname`, `username`, `email`, `userpass`) VALUES
(34, 'Kent Jetrick Miranda', 'kent', 'kentap@gmail.com', '123'),
(35, 'John Caezar Fajardo', 'JC', 'JC@gmail.com', '1234'),
(36, 'jules', 'julespogi', 'julespogi@gmail.com', '123123123'),
(37, 'brian somera', 'zush', 'zerotoherocode@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`apartmentID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `apartmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
