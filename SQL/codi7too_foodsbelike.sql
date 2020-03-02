-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 03:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codi7too_foodsbelike`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(999) NOT NULL,
  `country` int(255) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `email`, `country`, `subject`) VALUES
(1, 'Test', 'Test', 'Test@Test.Test', 18, 'Test'),
(2, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(9999) NOT NULL,
  `rname` text NOT NULL,
  `Ingradients` longtext NOT NULL,
  `HowToMake` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `email`, `rname`, `Ingradients`, `HowToMake`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sbi`
--

CREATE TABLE `sbi` (
  `id` int(9) NOT NULL,
  `Name` text NOT NULL,
  `Ingradients` text NOT NULL,
  `HowToMake` text NOT NULL,
  `TimeToMake` text NOT NULL,
  `UploadedBy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sbi`
--

INSERT INTO `sbi` (`id`, `Name`, `Ingradients`, `HowToMake`, `TimeToMake`, `UploadedBy`) VALUES
(1, 'Pizza', 'Dough Sausgae Cheese Mushrooms and other Random things', 'Put everything on the dough and bake for 40 min', '55 min', 'Iliyan'),
(2, 'Stranjanki', 'Slice of bread Mince', 'Put the mince on the slice of bread and bake it', '15 min', 'Yanko'),
(3, 'Chicken soup', 'Checken meat Carrots Spagethi other Spices', 'Cut the ingradients and boil them', '1h and 30min', 'Kemal'),
(4, 'Beef Steak', 'Beef Spices', 'Grill the steak', '35 min', 'Ivana'),
(5, 'Cupcakes', 'Oil Flour Eggs Yoghurt Soda', 'Mix the ingradients and bake them for 35 min', '50 min', 'Todorka'),
(6, 'Onion circles', 'Onion Flour Eggs', 'Mix flour and eggs and put the sliced onion in the mixture. Fry the circes', '40 min', 'Iliyan'),
(7, 'Squid with butter', 'Squid Spices Butter', 'Fry the squids with butter', '30 min', 'Katya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sbi`
--
ALTER TABLE `sbi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sbi`
--
ALTER TABLE `sbi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
