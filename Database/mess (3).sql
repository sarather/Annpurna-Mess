-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 09:26 AM
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
  `menuid` int(11) NOT NULL,
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

INSERT INTO `addmenu` (`menuid`, `category`, `vegitable`, `roti`, `rice`, `dal`, `curd`, `sweet`, `special`) VALUES
(10, 'lunch', 'Panner', 'Plain', 'Jeera', 'Dal', 'Masala', 'Kaju Katri', 'Salad');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `contactname` varchar(200) NOT NULL,
  `contactemail` varchar(200) NOT NULL,
  `contactmobile` int(11) NOT NULL,
  `contactmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactname`, `contactemail`, `contactmobile`, `contactmessage`) VALUES
(2, 'Prachi', 'prachi@gmail.com', 2147483647, 'Want to know about Sunday special dish ');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `customerid` int(11) NOT NULL,
  `customername` varchar(200) NOT NULL,
  `customeremail` varchar(200) NOT NULL,
  `customerpassword` varchar(200) NOT NULL,
  `customergender` varchar(200) NOT NULL,
  `customermobile` int(10) NOT NULL,
  `customeraadhar` int(10) NOT NULL,
  `customeraddress` varchar(200) NOT NULL,
  `registrationdate` date NOT NULL,
  `tokens` int(3) NOT NULL,
  `amount` int(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  `customerusername` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customerid`, `customername`, `customeremail`, `customerpassword`, `customergender`, `customermobile`, `customeraadhar`, `customeraddress`, `registrationdate`, `tokens`, `amount`, `file`, `customerusername`) VALUES
(3, 'Ritik Sarathe ', 'ritiksarathe@gmail.com', 'e6450a21cef5e3a1b0aa3681fe4eae6f', 'Male', 2147483647, 999988882, 'Hoshangabad', '2022-10-11', 52, 4500, 'images/Mess.jpg', 'ritik'),
(6, 'Sakshi ', 'sakshi@gmail.com', 'b73a3203047396075ccac51f92358f6e', 'Female', 2147483647, 2147483647, 'Gwalior', '2022-10-02', 0, 3998, 'images/2289_SkVNQSBGQU1PIDEwMjgtMTEz.jpg', 'sakshi'),
(7, 'Chetna Agrawal ', 'chetna@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 874334334, 45674733, 'Gwalior', '2022-10-12', 30, 2000, 'images/2289_SkVNQSBGQU1PIDEwMjgtMTEz.jpg', 'chetna'),
(8, 'Dewansh Mishra ', 'dewansh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 2147483647, 2147483647, 'Delhi', '2022-10-21', 120, 4000, 'images/pngwing.com.png', 'dewansh'),
(9, 'Priyanshu Thakur ', 'priyanshu@gmail.com', 'fe9642294f8e3bdacf9de8d8caff83ad', 'Male', 2147483647, 2147483647, 'Gwalior', '2022-11-15', 117, 3000, 'images/dewansh.jpg', 'mukesh'),
(10, 'Ayush Tiwari ', 'ayush@gmail.com', '691c720c3152c8686e0ff812a767c552', 'Male', 2147483647, 2147483647, 'Gwalior', '2022-11-16', 29, 2000, 'images/dewansh.jpg', 'ayush123'),
(11, 'aman1 ', 'aman@gmail.com', 'e6450a21cef5e3a1b0aa3681fe4eae6f', 'Male', 8887, 887, 'gwalior', '2022-11-16', 20, 3000, 'images/dewansh.jpg', 'aman123');

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
  `eregistrationdate` date NOT NULL,
  `efile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `name`, `phone`, `age`, `gender`, `aadhar`, `address`, `eregistrationdate`, `efile`) VALUES
(2, 'Ritik Sarathe ', 0, 23, 'Male', 867633232, 'Radha Madav Nagar Harne colony , Hoshangabad', '2022-10-11', 'images/56506.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `fmobile` int(11) NOT NULL,
  `fmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fname`, `fmobile`, `fmessage`) VALUES
(2, 'Rashi', 2147483647, 'monday lunch was not good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`aid`, `username`, `email`, `password`) VALUES
(1, 'ritiksarathe', 'sarather25@gmail.com', 'e6450a21cef5e3a1b0aa3681fe4eae6f');

-- --------------------------------------------------------

--
-- Table structure for table `manageplans`
--

CREATE TABLE `manageplans` (
  `pid` int(11) NOT NULL,
  `ptokens` varchar(20) NOT NULL,
  `validty` int(3) NOT NULL,
  `pamount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageplans`
--

INSERT INTO `manageplans` (`pid`, `ptokens`, `validty`, `pamount`) VALUES
(1, '120', 80, 3200),
(3, '60', 45, 2800),
(4, '30', 20, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmenu`
--
ALTER TABLE `addmenu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `manageplans`
--
ALTER TABLE `manageplans`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmenu`
--
ALTER TABLE `addmenu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employeedetails`
--
ALTER TABLE `employeedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manageplans`
--
ALTER TABLE `manageplans`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
