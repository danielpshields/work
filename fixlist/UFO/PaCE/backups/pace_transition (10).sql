-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: ict-prod-hosting03.mysql.osg.ufl.edu:3360
-- Generation Time: Mar 21, 2019 at 04:35 PM
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
-- Table structure for table `pace_transition`
--

CREATE TABLE `pace_transition` (
  `id` int(11) NOT NULL,
  `studentID` varchar(11) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `stipulation` varchar(2500) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `grade` varchar(20) DEFAULT NULL,
  `course2` varchar(20) DEFAULT NULL,
  `grade2` varchar(20) DEFAULT NULL,
  `course3` varchar(20) DEFAULT NULL,
  `grade3` varchar(20) DEFAULT NULL,
  `course4` varchar(20) DEFAULT NULL,
  `grade4` varchar(20) DEFAULT NULL,
  `gpaMajor` varchar(11) DEFAULT NULL,
  `gpaUF` varchar(11) DEFAULT NULL,
  `paceMajor` varchar(100) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `ufoMajor` varchar(55) DEFAULT NULL,
  `submitted` tinyint(1) DEFAULT NULL,
  `contacted` tinyint(3) DEFAULT NULL,
  `formCreated` varchar(55) DEFAULT NULL,
  `formSubmitted` varchar(55) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `timeApproved` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pace_transition`
--

INSERT INTO `pace_transition` (`id`, `studentID`, `name`, `email`, `stipulation`, `course`, `grade`, `course2`, `grade2`, `course3`, `grade3`, `course4`, `grade4`, `gpaMajor`, `gpaUF`, `paceMajor`, `semester`, `phone`, `ufoMajor`, `submitted`, `contacted`, `formCreated`, `formSubmitted`, `approved`, `timeApproved`) VALUES
(115, '09911268', 'Abigail', 'a.ladwigconway@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'history', 'fall19', '(850)5700489', NULL, 2, 0, '3/11/19|9:04 am', '3/11/19|1:07 pm', NULL, '3/18/19|2:23 pm'),
(117, '10502545', 'Sarah', 'sarahdiaz@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '3055620886', NULL, 2, 0, '3/11/19|9:09 am', '3/13/19|3:32 pm', NULL, '3/18/19|1:01 pm'),
(119, '11494978', 'Casie', 'casiefort@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'anthropology', 'fall19', '(352)-653-8344', NULL, 2, 0, '3/11/19|9:13 am', '3/11/19|9:07 pm', NULL, '3/19/19|4:19 pm'),
(121, '12466160', 'Samantha', 'samanthanunez@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'spanish', 'summer19', '9549993642', NULL, 2, 0, '3/11/19|9:16 am', '3/12/19|12:51 pm', NULL, '3/18/19|2:38 pm'),
(123, '13591958', 'Hannah', 'hannah.sirlin@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'history', 'summer19', '6099229452', NULL, 2, 0, '3/11/19|9:19 am', '3/12/19|3:30 pm', NULL, '3/18/19|2:44 pm'),
(127, '14199751', 'Hunter', 'hgraysb73@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'history', '', '', NULL, 0, 0, '3/11/19|9:23 am', NULL, NULL, NULL),
(129, '15094161', 'Justin', 'justinboyette@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', '', '', NULL, 0, 0, '3/11/19|9:26 am', NULL, NULL, NULL),
(131, '18131451', 'Hallie', 'hallie.murta@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'linguistics', 'summer19', '', NULL, 1, 0, '3/11/19|9:59 am', '3/20/19|4:37 pm', NULL, NULL),
(133, '21114254', 'Elizabeth', 'punkisapassion@ufl.edu', 'Earn a B+ average in Sociology classes to raise major GPA to a 2.75. \r\nComplete other classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|10:02 am', NULL, NULL, NULL),
(135, '24347256', 'Ana', 'a.collado@ufl.edu', 'Complete current classes with Cs or better', 'ANT 3620', 'Bminus', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'linguistics', '', '', NULL, 0, 0, '3/11/19|10:08 am', NULL, NULL, NULL),
(137, '26952166', 'Evan', 'evanbell@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', 'summer19', '8134680231', NULL, 2, 0, '3/11/19|10:11 am', '3/11/19|1:22 pm', NULL, '3/18/19|2:25 pm'),
(139, '31188954', 'Kathryn', 'kathrynbarnhart@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', 'summer19', '', NULL, 2, 0, '3/11/19|10:14 am', '3/20/19|1:37 pm', NULL, '3/20/19|2:40 pm'),
(141, '31319663', 'Alana', 'alana.hunter@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '(786)972-4174', NULL, 2, 0, '3/11/19|10:16 am', '3/12/19|6:44 pm', NULL, '3/18/19|2:46 pm'),
(143, '32379921', 'Cameron', 'cgangle@ufl.edu', 'Complete current classes with Cs or better', 'SYG 2000', 'B', 'SYG 2010', 'B', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|10:25 am', NULL, NULL, NULL),
(145, '33636995', 'Lucas', 'lucasbaisley@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'mathematics', '', '', NULL, 0, 0, '3/11/19|10:46 am', NULL, NULL, NULL),
(147, '35148106', 'Shaina', 'shaina.kaye@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'anthropology', 'summer19', '9546817431', NULL, 2, 0, '3/11/19|10:51 am', '3/13/19|10:37 am', NULL, '3/18/19|2:12 pm'),
(149, '35299762', 'Abby', 'abbyoconnell@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', 'summer19', '7726961748', NULL, 2, 0, '3/11/19|10:53 am', '3/11/19|1:58 pm', NULL, '3/18/19|2:28 pm'),
(151, '39178351', 'Luis', 'luisaparicio@ufl.edu', 'B+ average in MAC 2313 and Physics and lab to raise tracking GPA to a 2.5\r\nComplete current classes with Cs or better', 'MAC 2313', 'Bplus', 'PHY 2053', 'Bplus', 'PHY 2053L', 'Bplus', '', 'input', '2.5', '2.0', 'computerScience', '', '', NULL, 0, 0, '3/11/19|10:58 am', NULL, NULL, NULL),
(153, '43081151', 'Isabella', 'isabella.montana@ufl.edu', 'Complete current classes with Cs or better', 'ENC 2210', 'Bminus', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '9547907306', NULL, 2, 0, '3/11/19|11:02 am', '3/12/19|2:47 pm', NULL, '3/18/19|2:43 pm'),
(155, '43456983', 'Nora', 'nhogue@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', '', '', NULL, 0, 0, '3/11/19|11:04 am', NULL, NULL, NULL),
(157, '46139763 ', 'Ricardo', 'rvallegonzalez@ufl.edu', 'Complete current classes with Cs or better', 'ANT 3620', 'B', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'linguistics', '', '', NULL, 0, 0, '3/11/19|11:11 am', NULL, NULL, NULL),
(159, '46593828', 'Allison', 'allison.sirianni@ufl.edu', 'Complete current classes with Cs or better', 'ANT 3620', 'B', 'EXP 3604', 'B', 'SPN 1131', 'B', '', 'input', '2.75', '2.0', 'linguistics', '', '', NULL, 0, 0, '3/11/19|11:19 am', NULL, NULL, NULL),
(161, '48881453', 'Roselyn', 'roselyn.castillo@ufl.edu ', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '3052153394', NULL, 2, 0, '3/11/19|11:36 am', '3/11/19|10:02 pm', NULL, '3/18/19|2:16 pm'),
(163, '50168198', 'Shianna', 'shiannagoyco@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '(321)544-2372', NULL, 2, 0, '3/11/19|11:40 am', '3/12/19|2:23 pm', NULL, '3/18/19|2:41 pm'),
(165, '51697633', 'Corla', 'corlaingram@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|11:43 am', NULL, NULL, NULL),
(167, '55318994', 'Kristina', 'kristina.suarez@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'mathematics', 'summer19', '8135082170', NULL, 2, 0, '3/11/19|11:51 am', '3/11/19|12:38 pm', NULL, '3/18/19|2:19 pm'),
(169, '55356646', 'Lissette', 'laponte1@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'philosophy', '', '', NULL, 0, 0, '3/11/19|11:58 am', NULL, NULL, NULL),
(171, '59907069', 'Anastasia', 'agavrilos@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'philosophy', '', '', NULL, 0, 0, '3/11/19|12:02 pm', NULL, NULL, NULL),
(173, '59951678', 'Kennedy', 'hartmankennedy@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '(904)583-9097', NULL, 2, 0, '3/11/19|12:05 pm', '3/15/19|1:38 am', NULL, '3/18/19|12:51 pm'),
(175, '61590326', 'Zach', 'zacharyahdiaz@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'fall19', '8136957684', NULL, 1, 0, '3/11/19|12:16 pm', '3/11/19|11:07 pm', NULL, NULL),
(177, '64249626', 'Alan', 'abossshelby@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|12:18 pm', NULL, NULL, NULL),
(179, '65396506', 'Brygitt', 'brygitt.pfaff@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', 'summer19', '', NULL, 2, 0, '3/11/19|12:20 pm', '3/18/19|1:21 pm', NULL, '3/19/19|4:13 pm'),
(181, '66895169', 'Allison', 'avila.allison@ufl.edu', 'Raise UF GPA to a 2.5\r\nComplete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.5', 'english', '', '', NULL, 0, 0, '3/11/19|12:22 pm', NULL, NULL, NULL),
(183, '70886493', 'Veronica', 'vprelaz@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'geology', '', '', NULL, 0, 0, '3/11/19|12:47 pm', NULL, NULL, NULL),
(185, '71581221', 'Krystal', 'krystallucena@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'philosophy', 'summer19', '', NULL, 2, 0, '3/11/19|2:53 pm', '3/20/19|11:32 am', NULL, '3/20/19|2:36 pm'),
(187, '79488263', 'Ariela', 'arielasantillan@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'linguistics', '', '', NULL, 0, 0, '3/11/19|3:03 pm', NULL, NULL, NULL),
(189, '81198311', 'Niklas', 'nikewall@ufl.edu', 'Raise major GPA to a 2.5 with B-s or better in COP 3502 and MAC 2313\r\nComplete other classes with Cs or better', 'MAC 2313', 'Bminus', 'COP 3502', 'Bminus', '', 'input', '', 'input', '2.5', '2.0', 'computerScience', 'fall19', '5618010620', NULL, 1, 0, '3/11/19|3:08 pm', '3/11/19|3:46 pm', NULL, NULL),
(195, '81912909', 'Alexandra', 'awissinger@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.0', '3.0', 'sustainabilityStudies', '', '', NULL, 0, 0, '3/11/19|3:17 pm', NULL, NULL, NULL),
(199, '85938144', 'Rachel', 'rsegal@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'philosophy', 'summer19', '', NULL, 2, 0, '3/11/19|3:19 pm', '3/20/19|11:07 am', NULL, '3/20/19|2:33 pm'),
(205, '88453216', 'Natalia', 'nataliamatteo@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.0', '3.0', 'sustainabilityStudies', 'fall19', '5613713931', NULL, 2, 0, '3/11/19|3:21 pm', '3/11/19|3:37 pm', NULL, '3/18/19|2:34 pm'),
(211, '88929201', 'Chandler', 'chandlerhall@ufl.edu', 'C+ or better in MAC 2313 to maintain 2.5 major GPA\r\nComplete other classes with Cs or better', 'MAC 2313', 'Cplus', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'computerScience', '', '', NULL, 0, 0, '3/11/19|3:24 pm', NULL, NULL, NULL),
(213, '89543962', 'Gabrielle', 'gcahill@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|3:26 pm', NULL, NULL, NULL),
(215, '91812386', 'Carli', 'carliudine@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'history', 'summer19', '954-913-8552', NULL, 2, 0, '3/11/19|3:33 pm', '3/11/19|4:49 pm', NULL, '3/18/19|2:36 pm'),
(217, '92294212', 'Ben', 'mageec@ufl.edu', 'B or better in MAC 2312\r\nComplete other classes with Cs or better', 'MAC 2312', 'B', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'statistics', '', '', NULL, 0, 0, '3/11/19|3:37 pm', NULL, NULL, NULL),
(219, '93863933', 'Linden', 'linden2198@ufl.edu', 'Bs or better in Sociology classes to raise major GPA to a 2.75\r\nComplete other classes with Cs or better', 'SYG 2010', 'B', 'SYG 2430', 'B', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|3:42 pm', NULL, NULL, NULL),
(223, '96973928', 'Juan', 'jpbeltran@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'anthropology', '', '', NULL, 0, 0, '3/11/19|3:48 pm', NULL, NULL, NULL),
(225, '97910916', 'Elijah', 'emuhaha@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.5', '2.0', 'anthropology', '', '', NULL, 0, 0, '3/11/19|3:51 pm', NULL, NULL, NULL),
(227, '98285183', 'Mariana', 'm.jaimes@ufl.edu', 'B- average in Anthropology courses to raise major GPA to a 2.5\r\nComplete other classes with Cs or better', 'ANT 4462', 'Bminus', 'ANT 3620', 'Bminus', '', 'input', '', 'input', '2.5', '2.0', 'anthropology', '', '', NULL, 0, 0, '3/11/19|3:54 pm', NULL, NULL, NULL),
(229, '98951489', 'Cassandra', 'cassandr.perez@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|3:58 pm', NULL, NULL, NULL),
(231, '99264116', 'Julia', 'juliaconti@ufl.edu', 'Complete current classes with Cs or better', '', 'input', '', 'input', '', 'input', '', 'input', '2.75', '2.0', 'sociology', '', '', NULL, 0, 0, '3/11/19|4:04 pm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pace_transition`
--
ALTER TABLE `pace_transition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pace_transition`
--
ALTER TABLE `pace_transition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
