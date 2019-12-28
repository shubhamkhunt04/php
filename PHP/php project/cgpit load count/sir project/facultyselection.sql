-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2019 at 01:59 PM
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
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAILID` varchar(255) DEFAULT NULL,
  `FILLED` varchar(255) NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`ID`, `NAME`, `EMAILID`, `FILLED`) VALUES
(4, 'KBM', 'kinjal.mistree@utu.ac.in', 'NO'),
(3, 'PHT', 'purvi.tandel@utu.ac.in', 'YES'),
(2, 'VAP', 'vibha.patel@utu.ac.in', 'YES'),
(1, 'DVT', 'devendra.thakor@utu.ac.in', 'YES'),
(5, 'RMP', 'rachna.patel@utu.ac.in', 'NO'),
(6, 'ARK', 'ankit.kharwar@utu.ac.in', 'NO'),
(7, 'FAK', 'fenil.khatiwala@utu.ac.in', 'NO'),
(8, 'VDB', 'vishvajit.bakrola@utu.ac.in', 'NO'),
(9, 'AJD', 'ankita.desai@utu.ac.in', 'NO'),
(11, 'SVV', 'shivani.vora@utu.ac.in', 'NO'),
(12, 'DPD', 'dipak.dabhi@utu.ac.in', 'NO'),
(13, 'MRP', 'mihir.patel@utu.ac.in', 'NO'),
(14, 'HSP', 'himani.parekh@utu.ac.in', 'NO'),
(15, 'NKD', 'niyanta.desai@utu.ac.in', 'NO'),
(16, 'CAN', 'chandni.naik@utu.ac.in', 'NO'),
(17, 'MRS', 'mithila.sompura@utu.ac.in', 'NO'),
(18, 'SNP', 'supriya.pati@utu.ac.in', 'NO'),
(19, 'DRD', 'dhara.desai@utu.ac.in', 'NO'),
(20, 'KCP', 'krishna.apatel@utu.ac.in', 'NO'),
(21, 'SSS', 'slesha.sanghvi@utu.ac.in', 'NO'),
(34, 'KHJ', 'khushbu.jadeja@utu.ac.in', 'NO'),
(35, 'MBD', 'madhavi.desai@utu.ac.in', 'NO'),
(36, 'HSG', 'hiteshwari.gamit@utu.ac.in', 'NO'),
(40, 'YNC', 'yashi.choksi@utu.ac.in', 'NO'),
(42, 'VBS', 'vidhi.sutaria@utu.ac.in', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `FACULTY_NAME` varchar(255) NOT NULL DEFAULT '',
  `PRIORTY1` varchar(255) DEFAULT NULL,
  `PRIORTY2` varchar(255) DEFAULT NULL,
  `PRIORTY3` varchar(255) DEFAULT NULL,
  `PRIORTY4` varchar(255) DEFAULT NULL,
  `PRIORTY5` varchar(255) DEFAULT NULL,
  `PRIORTY6` varchar(255) DEFAULT NULL,
  `PRIORTY7` varchar(255) DEFAULT NULL,
  `PRIORTY8` varchar(255) DEFAULT NULL,
  `PRIORTY9` varchar(255) DEFAULT NULL,
  `PRIORTY10` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FACULTY_NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FACULTY_NAME`, `PRIORTY1`, `PRIORTY2`, `PRIORTY3`, `PRIORTY4`, `PRIORTY5`, `PRIORTY6`, `PRIORTY7`, `PRIORTY8`, `PRIORTY9`, `PRIORTY10`) VALUES
('VAP', '', '', '', 'Network', 'Software Engineering', 'Security', 'Data Structure', 'Data Science', '', ''),
('DVT', '', '', '', 'Basic Programming', 'Web Technology', 'Operating System', 'Network', 'Software Engineering', '', ''),
('PHT', '', '', '', 'Basic Programming', 'Web Technology', 'Operating System', 'Network', 'Software Engineering', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pools`
--

DROP TABLE IF EXISTS `pools`;
CREATE TABLE IF NOT EXISTS `pools` (
  `POOL` varchar(255) NOT NULL,
  `PRIORTY1` longtext,
  `PRIORTY2` longtext,
  `PRIORTY3` longtext,
  `PRIORTY4` longtext,
  `PRIORTY5` longtext,
  `PRIORTY6` longtext,
  `PRIORTY7` longtext,
  `PRIORTY8` longtext,
  `PRIORTY9` longtext,
  `PRIORTY10` longtext,
  PRIMARY KEY (`POOL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pools`
--

INSERT INTO `pools` (`POOL`, `PRIORTY1`, `PRIORTY2`, `PRIORTY3`, `PRIORTY4`, `PRIORTY5`, `PRIORTY6`, `PRIORTY7`, `PRIORTY8`, `PRIORTY9`, `PRIORTY10`) VALUES
('Pool 16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Pool 8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VAP', NULL, NULL),
('Pool 7', NULL, NULL, NULL, NULL, NULL, NULL, 'VAP', NULL, NULL, NULL),
('Pool 6', NULL, NULL, NULL, NULL, NULL, 'VAP', NULL, NULL, NULL, NULL),
('Pool 5', NULL, NULL, NULL, NULL, 'VAP', NULL, NULL, 'DVT, PHT', NULL, NULL),
('Pool 4', NULL, NULL, NULL, 'VAP', NULL, NULL, 'DVT, PHT', NULL, NULL, NULL),
('Pool 3', NULL, NULL, NULL, NULL, NULL, 'DVT, PHT', NULL, NULL, NULL, NULL),
('Pool 2', NULL, NULL, NULL, NULL, 'DVT, PHT', NULL, NULL, NULL, NULL, NULL),
('Pool 1', NULL, NULL, NULL, 'DVT, PHT', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `VALUE` varchar(255) NOT NULL,
  `Semester` int(5) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Lecture` int(10) NOT NULL,
  `Tutorial` int(10) NOT NULL,
  `Practical` int(10) NOT NULL,
  `Batch` int(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`ID`, `NAME`, `VALUE`, `Semester`, `Branch`, `Lecture`, `Tutorial`, `Practical`, `Batch`,`Class`) VALUES
(1, 'Pool 1', 'Basic Programming', 1, 'CE', 0, 0, 0, 0,`A`),
(2, 'Pool 2', 'Web Technology', 1, 'CE', 0, 0, 0, 0,`A`),
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
