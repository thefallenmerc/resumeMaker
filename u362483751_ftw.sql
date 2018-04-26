
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2018 at 10:48 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u362483751_ftw`
--

-- --------------------------------------------------------

--
-- Table structure for table `userData`
--

CREATE TABLE IF NOT EXISTS `userData` (
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `projects` varchar(500) NOT NULL DEFAULT 'Edit this.',
  `motivating` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `graduation` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `sSecondary` varchar(200) DEFAULT 'Edit this.',
  `secondary` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `languages` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `technologies` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `skills` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `interests` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `subjects` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `training` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `achievements` varchar(200) NOT NULL DEFAULT 'Edit this.',
  `seminars` varchar(500) NOT NULL DEFAULT 'Edit this.',
  PRIMARY KEY (`sno`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userData`
--

INSERT INTO `userData` (`sno`, `userName`, `projects`, `motivating`, `graduation`, `sSecondary`, `secondary`, `languages`, `technologies`, `skills`, `interests`, `subjects`, `training`, `achievements`, `seminars`) VALUES
(1, 'consectetur', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.'),
(2, 'rohanK', 'Sunshine Weather App', 'Hardwork is for hardheaded.\r\nI do smart work.', 'B. Tech. A.K.T.U.', 'Saint Pauls', 'Saint Pauls', 'c,c++,java,html,css,js', 'jQuery,Android,JSP,SERVLET', 'Can eat 5 burgers at a time.', 'Sleeping,Gaming,Excessive Masturbation', 'Graphics, Cryptography', 'UDEMY, CPP at NIIT,JSP and SERVLET at NIIT', 'Will update this in future.,Stay tuned.', 'IOT,Big DATA'),
(4, 'demo', 'Killing the Marvel universe,Killing the literatur universe.,\r\nKilled wolverine (My fav).', 'MAXIMUM EFFORTS', 'Afghan Merc Academy', 'Afghan Merc Academy', 'Afghan Merc Academy', 'English, Manadarin, Russian, Spanish', 'Guns, Granades, Rockets, anything that goes boom.', 'Double tap, Multi-Kill, Headshots', 'Guns-a-blazing, sword fights', 'Boobies', 'Under Captain America, With Wolverine, With Task Master', 'Jumped outta plane with a chute.', 'I dont do girl stuff.'),
(5, 'Hell', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.', 'Edit this.');

-- --------------------------------------------------------

--
-- Table structure for table `userList`
--

CREATE TABLE IF NOT EXISTS `userList` (
  `fullName` varchar(50) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `about` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(30) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `hash` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`sno`),
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phoneNo` (`phoneNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userList`
--

INSERT INTO `userList` (`fullName`, `userName`, `address`, `email`, `password`, `phoneNo`, `about`, `dob`, `pob`, `fName`, `sno`, `hash`, `status`) VALUES
('cillumsa', 'consectetur', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'mollit@mfg.bk', 'consectetur', '334', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2017-09-12', 'et', 'Duis', 5, '6babbfd22a1a89d15dba92c7e7aabaa348e47dc9', 'inactive'),
('Rohan Kashyap', 'rohanK', 'Purani Idgah,\r\nKabristan ke Peechhe', 'drPohan@gmail.com', 'password', '9897337722', 'I love food, am lazy and dont fit through gates.', '1996-09-16', 'Mathura', 'Mr. Kashyap', 6, '8a38bcebb6814e7c256e12cdd6fed3e5547db816', 'inactive'),
('DeadPool', 'demo', 'Xaviers Mansion', 'themercwithamouth@gmail.com', 'chimichangas', '9696969696', 'I kill people, they die.', '1996-02-23', 'Valley of Shadow of Death', 'Classified', 8, '841f33663391946162be8538219ba66bfa3e15c2', 'inactive'),
('Hell', 'Hell', 'Xjdkxn', 'Hell', 'hell', '97376', 'Hell', '2017-09-14', 'Ndjdn', 'Osnsk', 9, '730c2b3921a59b525a235b1386141c5d7ac7eca9', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `userPref`
--

CREATE TABLE IF NOT EXISTS `userPref` (
  `userName` varchar(30) NOT NULL,
  `sno` int(5) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL DEFAULT 'Resume 1',
  `variant` varchar(20) NOT NULL DEFAULT 'dodgerBlue.php',
  `privacy` varchar(20) NOT NULL DEFAULT 'private',
  PRIMARY KEY (`sno`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userPref`
--

INSERT INTO `userPref` (`userName`, `sno`, `class`, `variant`, `privacy`) VALUES
('RohanK', 1, 'Resume 1', 'matteGrey.php', 'public'),
('demo', 2, 'Superhero', 'deadPool.php', 'public'),
('Hell', 3, 'Resume 1', 'dodgerBlue.php', 'private');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
