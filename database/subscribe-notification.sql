-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 11:01 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2014_talentnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `wz_notification`
--

DROP TABLE IF EXISTS `wz_notification`;
CREATE TABLE IF NOT EXISTS `wz_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `nid` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_notification`
--

INSERT INTO `wz_notification` (`id`, `uid`, `cid`, `nid`, `type`, `status`, `created`) VALUES
(1, 11, 2, 4, 'news', 1, '2014-07-13 00:02:34'),
(2, 11, 1, 9, 'news', 1, '2014-07-13 00:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `wz_subscribe`
--

DROP TABLE IF EXISTS `wz_subscribe`;
CREATE TABLE IF NOT EXISTS `wz_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `c_id` int(11) NOT NULL DEFAULT '0',
  `category` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_subscribe`
--

INSERT INTO `wz_subscribe` (`id`, `uid`, `email`, `c_id`, `category`, `status`, `changed`, `created`) VALUES
(1, 11, 'anhhung@yahoo.com', 2, 'wz_information', 1, '2014-07-12 11:55:51', '2014-07-12 11:55:51'),
(2, 11, 'anhhung@yahoo.com', 1, 'wz_new_arrivals', 1, '2014-07-13 00:10:27', '2014-07-13 00:10:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
