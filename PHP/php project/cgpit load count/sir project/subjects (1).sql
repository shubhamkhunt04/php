-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2019 at 05:04 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultyselection`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `VALUE` varchar(255) NOT NULL,
  `Semester` int(5) NOT NULL,
  `class` varchar(10) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Lecture` int(10) NOT NULL,
  `Tutorial` int(10) NOT NULL,
  `Practical` int(10) NOT NULL,
  `Batch` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`ID`, `NAME`, `VALUE`, `Semester`, `class`, `Branch`, `Lecture`, `Tutorial`, `Practical`, `Batch`) VALUES
(1, 'Pool 1', 'Basic Programming', 1, 'CE A', 'CE', 0, 0, 0, 0),
(2, 'Pool 2', 'Web Technology', 2, 'CE A', 'CE', 0, 0, 0, 0),
(3, 'Pool 3', 'Operating System', 3, 'CE A', 'CE', 0, 0, 0, 0),
(4, 'Pool 3', 'Operating System', 4, 'CE A', 'CE', 0, 0, 0, 0),
(5, 'Pool 3', 'Operating System', 5, 'CE A', 'CE', 0, 0, 0, 0),
(6, 'Pool 3', 'Operating System', 6, 'CE A', 'CE', 0, 0, 0, 0),
(7, 'Pool 3', 'Operating System', 7, 'CE A', 'CE', 0, 0, 0, 0),
(8, 'Pool 3', 'Operating System', 8, 'CE A', 'CE', 0, 0, 0, 0),
(9, 'Pool 4', 'Network', 1, 'CE B', 'CE', 0, 0, 0, 0),
(10, 'Pool 5', 'Software Engineering', 2, 'CE B', 'CE', 0, 0, 0, 0),
(11, 'Pool 4', 'Network', 3, 'CE B', 'CE', 0, 0, 0, 0),
(12, 'Pool 4', 'Network', 4, 'CE B', 'CE', 0, 0, 0, 0),
(13, 'Pool 4', 'Network', 5, 'CE B', 'CE', 0, 0, 0, 0),
(14, 'Pool 4', 'Network', 6, 'CE B', 'CE', 0, 0, 0, 0),
(15, 'Pool 4', 'Network', 7, 'CE B', 'CE', 0, 0, 0, 0),
(16, 'Pool 4', 'Network', 8, 'CE B', 'CE', 0, 0, 0, 0),
(17, 'Pool 4', 'Security', 1, 'CE C', 'CE', 0, 0, 0, 0),
(18, 'Pool 4', 'Security', 2, 'CE C', 'CE', 0, 0, 0, 0),
(19, 'Pool 4', 'Security', 3, 'CE C', 'CE', 0, 0, 0, 0),
(20, 'Pool 4', 'Security', 4, 'CE C', 'CE', 0, 0, 0, 0),
(21, 'Pool 4', 'Security', 5, 'CE C', 'CE', 0, 0, 0, 0),
(22, 'Pool 4', 'Security', 6, 'CE C', 'CE', 0, 0, 0, 0),
(23, 'Pool 4', 'Security', 7, 'CE C', 'CE', 0, 0, 0, 0),
(24, 'Pool 4', 'Security', 8, 'CE C', 'CE', 0, 0, 0, 0),
(25, 'Pool 7', 'Data Structure', 3, 'CE C', 'CE', 0, 0, 0, 0),
(26, 'Pool 8', 'Data Science', 3, 'CE  C', 'CE', 0, 0, 0, 0),
(27, 'Pool 9', 'Advance Programming', 3, '', 'M.TECH_CE', 0, 0, 0, 0),
(28, 'Pool 10', 'Embedded System', 4, '', 'M.TECH_CE', 0, 0, 0, 0),
(29, 'Pool 11', 'Computer Graphics', 4, '', 'M.TECh_CE', 0, 0, 0, 0),
(30, 'Pool 12', 'Compiler', 4, '', 'M.TECH_CE', 0, 0, 0, 0),
(31, 'Pool 13', 'Student Development', 4, '', 'M.TECH_CE', 0, 0, 0, 0),
(32, 'Pool 14', 'Micro Processor', 4, 'Diploma A', 'Diploma', 0, 0, 0, 0),
(33, 'Pool 15', 'Computing', 5, 'Diploma B', 'Diploma', 0, 0, 0, 0),
(34, 'Pool 16', 'Machine Learning', 6, 'Diploma A', 'Diploma', 0, 0, 0, 0),
(35, 'Pool 17', 'Advance C++', 2, '', 'M.TECH_CE', 4, 0, 2, 1),
(36, 'Pool 18', 'Temp', 1, 'CE A', 'CE', 4, 0, 2, 4),
(37, 'Pool 19', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(38, 'Pool 22', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(39, 'Pool 21', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(40, 'Pool 22', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(41, 'Pool 23', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(42, 'Pool 24', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(43, 'Pool 25', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(44, 'Pool 26', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(45, 'Pool 27', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(46, 'Pool 28', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(47, 'Pool 29', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4),
(48, 'Pool 30', 'Temp', 2, 'CE A', 'CE', 4, 0, 2, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
