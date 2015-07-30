-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 11:42 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwheredoyoufall`
--
CREATE DATABASE IF NOT EXISTS `dbwheredoyoufall` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbwheredoyoufall`;

-- --------------------------------------------------------

--
-- Table structure for table `tblagree`
--

CREATE TABLE IF NOT EXISTS `tblagree` (
  `user_id` varchar(16) NOT NULL,
  `bbc` tinyint(4) NOT NULL,
  `guardian` tinyint(4) NOT NULL,
  `telegraph` tinyint(4) NOT NULL,
  `dailymail` tinyint(4) NOT NULL,
  `times` tinyint(4) NOT NULL,
  `sun` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnewspapers`
--

CREATE TABLE IF NOT EXISTS `tblnewspapers` (
  `url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbc` int(11) NOT NULL,
  `guardian` int(11) NOT NULL,
  `telegraph` int(11) NOT NULL,
  `dailymail` int(11) NOT NULL,
  `times` int(11) NOT NULL,
  `sun` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
