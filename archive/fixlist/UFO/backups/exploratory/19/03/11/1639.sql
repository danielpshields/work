-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: ict-prod-hosting03.mysql.osg.ufl.edu:3360
-- Generation Time: Mar 11, 2019 at 08:39 PM
-- Server version: 5.7.25-28-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pace_exploratory`
--

CREATE TABLE `pace_exploratory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pace_exploratory`
--

INSERT INTO `pace_exploratory` (`id`, `name`, `email`, `date`) VALUES
(19, 'Nicole', 'nraymond@advising.ufl.edu', '2019-03-11 08:21:14'),
(21, 'Jacob', 'jnewbold@ufl.edu', '2019-03-11 08:59:48'),
(23, 'Zachary', 'zacharyrezai@ufl.edu', '2019-03-11 10:05:39'),
(25, 'Ronald', 'ronaldjumber@ufl.edu', '2019-03-11 10:49:03'),
(27, 'Olivia', 'oliviamegrath@ufl.edu', '2019-03-11 11:29:36'),
(29, 'Caleb', 'ortegac@ufl.edu', '2019-03-11 11:41:26'),
(31, 'Colin', 'dohertyc@ufl.edu', '2019-03-11 12:24:03'),
(33, 'Bianca', 'bianca.gonzalez@ufl.edu', '2019-03-11 15:56:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pace_exploratory`
--
ALTER TABLE `pace_exploratory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pace_exploratory`
--
ALTER TABLE `pace_exploratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
