-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 10:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

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
('Soup', 'Fast Food', '50 taka`', '0', '../images/soup.jpg', 3),
('Burger', 'Fast Food', '40 taka', '0', '../images/McDonalds.jpg', 2),
('Pasta', 'Fast Food', '100 taka', '0', '../images/maxresdefault.jpg', 3),
('Coco Cola', 'Drinks', '15 taka', '0', '../images/3014667-poster-coca-cola-life.jpg', 1),
('Chotpoti', 'Fast Food', '15 taka', '0', '../images/hqdefault.jpg', 3),
('Roll', 'Fast Food', '30 taka', '0', '../images/tkrcrolls-1.jpg', 3);

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
('Chotpoti', 'abdullahmaruf71@gmail.com'),
('Pasta', 'abdullahmaruf71@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`email`, `password`) VALUES
('abdullahmaruf71@gmail.com', '12345'),
('shohag@gmail.com', '123'),
('maruf@hotmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
