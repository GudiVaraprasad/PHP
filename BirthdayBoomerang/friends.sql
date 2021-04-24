-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birthday_wishes`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `dob` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `name`, `dob`) VALUES
(1, 'Varaprasad', '2001-11-12 00:00:00'),
(2, 'Harsha', '2001-10-10 00:00:00'),
(3, 'Roopa', '2002-05-24 00:00:00'),
(4, 'Revanth', '2001-11-14 00:00:00'),
(5, 'Dharan', '2002-01-11 00:00:00'),
(6, 'Bipin Bussa', '2001-11-19 00:00:00'),
(7, 'Neha Chowdary', '2002-04-29 00:00:00'),
(8, 'Sravani', '2001-11-25 00:00:00'),
(9, 'Naveen', '2001-03-16 00:00:00'),
(10, 'Sritha', '1999-08-29 00:00:00'),
(11, 'Abhipray', '2002-03-09 00:00:00'),
(12, 'Dhanush', '2001-02-09 00:00:00'),
(13, 'Puneeth', '2001-11-02 00:00:00'),
(14, 'Neeraj', '2001-12-13 00:00:00'),
(15, 'Hanisha', '2002-06-14 00:00:00'),
(16, 'Lahari', '2003-07-14 00:00:00'),
(17, 'Chaithanya', '2001-07-19 00:00:00'),
(18, 'Srinivas', '2001-01-19 00:00:00'),
(19, 'Jr. NTR', '1983-05-20 00:00:00'),
(20, 'Sesha Pranav', '2001-03-29 00:00:00'),
(21, 'Bhavani', '2001-05-07 00:00:00'),
(22, 'Dhanunjay', '2000-05-19 00:00:00'),
(23, 'Harshavardhan', '2002-06-13 00:00:00'),
(24, 'Karthik', '2001-10-09 00:00:00'),
(25, 'Eshwar', '2001-10-08 00:00:00'),
(26, 'Prabhas', '1973-04-24 14:15:13'),
(27, 'Nithin', '1986-04-24 14:15:13'),
(28, 'Rana', '2000-04-24 14:15:13'),
(29, 'Kohli', '2000-04-25 14:15:13'),
(30, 'Dhoni', '2021-04-25 14:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
