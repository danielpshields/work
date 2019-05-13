-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: ict-prod-hosting03.mysql.osg.ufl.edu:3360
-- Generation Time: Mar 21, 2019 at 04:36 PM
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
-- Table structure for table `pace_student_notes`
--

CREATE TABLE `pace_student_notes` (
  `ID` int(11) NOT NULL,
  `studentID` varchar(11) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `note` varchar(2500) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pace_student_notes`
--

INSERT INTO `pace_student_notes` (`ID`, `studentID`, `email`, `note`, `date`) VALUES
(47, '40811353', 'acatalano2@ufl.edu', 'alex submitted', '3/13/19|3:43 pm'),
(49, '', 'acatalano2@ufl.edu', 'alex get a datestamp', '3/13/19|3:44 pm'),
(51, '11494978', 'casiefort@ufl.edu', 'Emailed stu, asking if she still wants to transition for Fall 19, expl that 198 reg will be delayed as a result', '3/18/19|1:09 pm'),
(53, '81198311', 'nikewall@ufl.edu', 'Em\'d stu asking if he still wants to transition for 198, expl 198 reg will be sign delayed', '3/18/19|1:10 pm'),
(55, '88453216', 'nataliamatteo@ufl.edu', 'Em\'d stu asking if she still wants to transition for 198, expl sign reg delay for 198 if she transitions for Fall', '3/18/19|1:21 pm'),
(57, '09911268', 'a.ladwigconway@ufl.edu', 'Em\'d stu asking if she still wants to transition for 198, expl significant reg delay for 198 if she transitions then', '3/18/19|1:23 pm'),
(59, '61590326', 'zacharyahdiaz@ufl.edu', 'Em\'d stu, asking him to confirm if he still wants to transition for 198, expl it will significantly delay 198 reg by waiting to transition', '3/18/19|1:25 pm'),
(61, '09911268', 'a.ladwigconway@ufl.edu', 'Stu decided to transition for Summer instead, approved for transition now', '3/18/19|2:20 pm'),
(63, '88453216', 'nataliamatteo@ufl.edu', 'Stu confirmed she now wants to transition for Summer 2019 instead, approved form now. ', '3/18/19|2:28 pm'),
(65, '11494978', 'casiefort@ufl.edu', 'Student confirmed she wants to transition for Summer 2019, have on-time advanced reg for 195 and 198. Approved transition', '3/19/19|4:14 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pace_student_notes`
--
ALTER TABLE `pace_student_notes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pace_student_notes`
--
ALTER TABLE `pace_student_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
