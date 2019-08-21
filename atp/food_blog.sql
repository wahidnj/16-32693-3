-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `mid` int(5) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`mid`, `mname`, `price`, `rname`, `details`) VALUES
(3, 'burger01', 199, 'KFC', 'Cheese'),
(4, 'burger01', 199, 'KFC', 'Cheese');

-- --------------------------------------------------------

--
-- Table structure for table `restuarant`
--

CREATE TABLE `restuarant` (
  `rid` int(5) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `goals` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restuarant`
--

INSERT INTO `restuarant` (`rid`, `rname`, `location`, `area`, `goals`) VALUES
(1, 'Burger King', 'Dhanmondi', 'dhanmondi-15', 'customers satisfaction'),
(2, 'KFC', 'Dhanmondi', 'Dhanmondi-15', 'customers satisfaction');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `serialno` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`serialno`, `uname`, `rname`, `comment`) VALUES
(2, 'Nj', 'BFC', 'GOOD'),
(3, 'Nj', 'BFC', 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `email`, `type`, `address`, `contact`, `password`) VALUES
(1, 'Nj', 'wahidnj@gmail.com', 'member', 'Kuril, Bishoroad', '01777403766', '123'),
(3, 'Wahid', 'wahidnj100@gmail.com', 'admin', 'Banani', '01701083759', '123'),
(5, 'suantor', 'rhshuvo97@gmail.com', 'member', 'Kuril, Bishoroad', '01777403766', '123'),
(6, 'jm', 'jamir10@gmail.com', 'member', 'Kuril, Bishoroad', '01777403766', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `restuarant`
--
ALTER TABLE `restuarant`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `mid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restuarant`
--
ALTER TABLE `restuarant`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
