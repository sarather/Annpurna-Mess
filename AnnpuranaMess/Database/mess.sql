-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 05:59 AM
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
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmenu`
--

CREATE TABLE `addmenu` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `vegitable` varchar(255) NOT NULL,
  `roti` varchar(255) NOT NULL,
  `rice` varchar(255) NOT NULL,
  `dal` varchar(255) NOT NULL,
  `curd` varchar(255) NOT NULL,
  `sweet` varchar(255) NOT NULL,
  `special` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmenu`
--

INSERT INTO `addmenu` (`id`, `category`, `vegitable`, `roti`, `rice`, `dal`, `curd`, `sweet`, `special`) VALUES
(10, 'lunch', 'Panner', 'Plain', 'Jeera', 'Dal', 'Masala', 'Kaju', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `registrationdate` date NOT NULL,
  `tokens` int(3) NOT NULL,
  `amount` int(10) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `aadhar`, `address`, `registrationdate`, `tokens`, `amount`, `file`) VALUES
(3, 'Ritik Sarathe ', 'ritiksarathe@gmail.com', 'e6450a21cef5e3a1b0aa3681fe4eae6f', 'Male', 2147483647, 999988882, 'Hoshangabad', '2022-10-11', 120, 4500, 'images/Mess.jpg'),
(6, 'Sakshi ', 'sakshi@gmail.com', 'b73a3203047396075ccac51f92358f6e', 'Female', 2147483647, 2147483647, 'Gwalior', '2022-10-02', 0, 3998, 'images/2289_SkVNQSBGQU1PIDEwMjgtMTEz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `registrationdate` date NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `name`, `phone`, `age`, `gender`, `aadhar`, `address`, `registrationdate`, `file`) VALUES
(2, 'Ritik Sarathe ', 0, 23, 'Male', 867633232, 'Radha Madav Nagar Harne colony , Hoshangabad', '2022-10-11', 'images/56506.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'ritiksarathe', 'sarather25@gmail.com', 'e6450a21cef5e3a1b0aa3681fe4eae6f');

-- --------------------------------------------------------

--
-- Table structure for table `manageplans`
--

CREATE TABLE `manageplans` (
  `id` int(11) NOT NULL,
  `tokens` varchar(20) NOT NULL,
  `validty` int(3) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageplans`
--

INSERT INTO `manageplans` (`id`, `tokens`, `validty`, `amount`) VALUES
(1, '50', 80, 3200),
(3, '30', 45, 2800),
(4, '45', 55, 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmenu`
--
ALTER TABLE `addmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manageplans`
--
ALTER TABLE `manageplans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmenu`
--
ALTER TABLE `addmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employeedetails`
--
ALTER TABLE `employeedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manageplans`
--
ALTER TABLE `manageplans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
