-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 12:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `no_persons` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `reg_id`, `email`, `user`, `no_persons`, `price`, `location`, `total_price`) VALUES
(1, 0, '', '', 0, 3000, 'malda', 15000),
(2, 0, 'avijit@gmail.com', '', 0, 3000, 'malda', 15000),
(3, 0, 'avijit@gmail.com', '', 0, 3000, 'malda', 12000),
(4, 0, 'arin.karmakar.1996@gmail.com', '', 0, 3000, 'malda', 30000),
(5, 0, 'avijit1.karmakar@aot.edu.in', '', 0, 3000, 'malda', 30000),
(6, 0, 'avijit1.karmakar@aot.edu.in', '', 10, 5000, 'chuchura', 50000),
(11, 0, 'avijit1.karmakar@aot.edu.in', '', 12, 6000, 'jalpaiguri', 72000),
(13, 0, 'avijit1.karmakar@aot.edu.in', '', 8, 7000, 'digha', 56000),
(14, 0, 'avijit1.karmakar@aot.edu.in', '', 55, 5000, 'chuchura', 275000),
(15, 0, 'avijit1.karmakar@aot.edu.in', '', 15214, 3000, 'malda', 45642000),
(30, 1000, 'avijit@gmail.com', '', 1996, 3000, 'malda', 5988000),
(31, 1004, 'avijit1.karmakar@aot.edu.in', '', 1996, 5000, 'chuchura', 9980000),
(36, 1006, 'gourob@gmail.com', '', 45, 5000, 'hooghly', 225000),
(38, 1006, 'gourabbatabyal12345@gmail.com', '', 4, 7000, 'digha', 28000),
(39, 1000, 'anikkarmakar3@gmail.com', '', 4, 5000, 'hooghly', 20000),
(40, 1008, 'gourabbatabyal12345@gmail.com', '', 0, 0, 'Select', 0),
(41, 1000, 'avijit@gmail.com', '', 55, 6000, 'jalpaiguri', 330000),
(44, 0, '', '', 0, 0, '', 0),
(45, 1004, 'avijit1.karmakar@aot.edu.in', '', 10, 5000, 'hooghly', 50000),
(46, 1000, 'royalbengaltravels07@gmail.com', '', 5, 7000, 'digha', 31500),
(48, 1004, 'avijit1.karmakar@aot.edu.in', 'Avijit', 2, 5000, 'hooghly', 9000),
(49, 1010, 'anik@gmail.com', 'Anik Karmakar', 12, 3000, 'malda', 32400);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `user`, `password`, `mail`, `mobile`) VALUES
(1000, 'Avijit', 'avijit', 'avijit@gmail.com', 8956237845),
(1001, 'abc', 'abc123', 'abc@gmail.com', 2354784512),
(1002, 'avijit avijit', 'karmakar', 'avi@outlook.com', 8956987452),
(1003, 'Yo Yo', 'yoyo', 'yoyo@yoyo.yoyo', 9090909090),
(1004, 'Avijit', 'avijit', 'avijit1.karmakar@aot.edu.in', 9865321478),
(1005, 'Gopal Pramanik', 'gp', 'gopalpramanik@gmail.com', 852369745),
(1006, 'Gourob Batabyal', 'gb', 'gourob@gmail.com', 89563258745),
(1007, 'Gourab Holbal', 'gh', 'gourabbatabyal12345@gmail.com', 8523698745),
(1008, 'Gourab Holbal', 'gh', 'gourabbatabyal12345@gmail.com', 8523698745),
(1009, 'Puja', 'puja', 'puja@gmail.com', 87452136589),
(1010, 'Anik Karmakar', 'anik', 'anik@gmail.com', 4569874125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
