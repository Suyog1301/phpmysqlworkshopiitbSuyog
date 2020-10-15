-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 13, 2020 at 04:48 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portal_db`
--

CREATE TABLE `portal_db` (
  `id` int(11) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` text NOT NULL,
  `Userid` text NOT NULL,
  `Password` text NOT NULL,
  `PHP` int(11) NOT NULL,
  `HTML` int(11) NOT NULL,
  `MYSQL` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Percentage` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portal_db`
--

INSERT INTO `portal_db` (`id`, `Firstname`, `Lastname`, `Email`, `Userid`, `Password`, `PHP`, `HTML`, `MYSQL`, `Total`, `Percentage`) VALUES
(1, 'Praful', 'Kumar', 'prafulponnappan@gmail.com', 'Praful05', 'praful05', 90, 90, 90, 270, '90'),
(2, 'Vishnu', 'Kumar', 'Vishnukumar@gmail.com', 'vishnu', 'root', 75, 99, 92, 266, '89'),
(3, 'Amit', 'Naik', 'amitnaik@gamil.com', 'amit', 'amit123', 80, 80, 80, 240, '80'),
(6, 'Saurav', 'Kumar', 'sauravkumar@gmail.com', 'saurav', 'saurav123', 89, 69, 79, 237, '79'),
(7, 'Pramod', 'Nair', 'pramodnair@gmail.com', 'pramod', 'pramod1234', 80, 95, 90, 265, '88'),
(8, 'Deepak', 'lal', 'deepaklal12@outlook.com', 'deepak', 'deepak1234', 80, 90, 70, 240, '80'),
(9, 'Rishab', 'Jadhav', 'rishabjad15@gmail.com', 'rishab', 'rishab123', 90, 96, 90, 276, '92'),
(10, 'Piyush', 'yadav', 'yadavpiy@gmail.com', 'piyush', 'piyush1234', 85, 89, 65, 239, '80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portal_db`
--
ALTER TABLE `portal_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portal_db`
--
ALTER TABLE `portal_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
