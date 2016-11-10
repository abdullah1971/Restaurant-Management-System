-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 01:44 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`) VALUES
('abdullahmaruf71@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `current_month_entry_history`
--

CREATE TABLE `current_month_entry_history` (
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_of_entry_on_this_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_month_entry_history`
--

INSERT INTO `current_month_entry_history` (`contact_no`, `email`, `name`, `number_of_entry_on_this_month`) VALUES
('01521477476', 'ahnaf@gmail.com', 'Mir Sakib Ahnaf', 1),
('01737699532', 'shaon@gmail.com', 'Mir Moshraki Shaon', 2);

-- --------------------------------------------------------

--
-- Table structure for table `entry_operator`
--

CREATE TABLE `entry_operator` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_operator`
--

INSERT INTO `entry_operator` (`email`) VALUES
('shaon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food_info`
--

CREATE TABLE `food_info` (
  `food_name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_info`
--

INSERT INTO `food_info` (`food_name`, `catagory`, `price`, `discount`, `photo`, `vote`) VALUES
('Soup', 'Fast Food', '50 taka`', '0', '../images/soup.jpg', 22),
('Burger', 'Fast Food', '40 taka', '0', '../images/McDonalds.jpg', 17),
('Pasta', 'Fast Food', '100 taka', '0', '../images/maxresdefault.jpg', 17),
('Coco Cola', 'Drinks', '15 taka', '0', '../images/3014667-poster-coca-cola-life.jpg', 12),
('Chotpoti', 'Fast Food', '15 taka', '0', '../images/hqdefault.jpg', 29),
('Roll', 'Fast Food', '30 taka', '0', '../images/tkrcrolls-1.jpg', 28);

-- --------------------------------------------------------

--
-- Table structure for table `preserve_voting_info`
--

CREATE TABLE `preserve_voting_info` (
  `food_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preserve_voting_info`
--

INSERT INTO `preserve_voting_info` (`food_name`, `email`) VALUES
('Soup', 'najmul@gmail.com'),
('Burger', 'najmul@gmail.com'),
('Pasta', 'ahnaf@gmail.com'),
('Burger', 'ahnaf@gmail.com'),
('Chotpoti', 'ahnaf@gmail.com'),
('Pasta', 'shohag@gmail.com'),
('Burger', 'shohag@gmail.com'),
('Soup', 'shohag@gmail.com'),
('Chotpoti', 'shohag@gmail.com'),
('Roll', 'shohag@gmail.com'),
('Coco Cola', 'shohag@gmail.com'),
('Coco Cola', 'shohag@gmail.com'),
('Roll', 'abdullahmaruf71@gmail.com'),
('Chotpoti', 'abdullahmaruf71@gmail.com'),
('Burger', 'abdullahmaruf71@gmail.com'),
('Pasta', 'abdullahmaruf71@gmail.com'),
('Coco Cola', 'abdullahmaruf71@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `previous_month_entry_history`
--

CREATE TABLE `previous_month_entry_history` (
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_of_entry_on_this_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`email`, `password`, `first_name`, `last_name`, `contact_no`) VALUES
('shohag@gmail.com', '123', '', '', '0'),
('maruf@hotmail.com', '12345', '', '', '0'),
('zilani@gmail.com', '431e0b5e9c479ba1371181b7e9cbbc554e40202e', 'Abdul Kader', 'Zilani', '01683909417'),
('abdullahmaruf71@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Maruf', 'Abdullah', '01521477634'),
('ahnaf@gmail.com', '1d09ac2ed631d19547207250b17d32b7e4782358', 'Mir Shakib', 'Ahnaf', '01521477476'),
('shaon@gmail.com', '5957cc271bbd8922b3fb7c1b62c616572b13b9c0', 'Mir Moshraki', 'Shaon', '01737699532');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_month_entry_history`
--
ALTER TABLE `current_month_entry_history`
  ADD PRIMARY KEY (`contact_no`);

--
-- Indexes for table `previous_month_entry_history`
--
ALTER TABLE `previous_month_entry_history`
  ADD PRIMARY KEY (`contact_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
