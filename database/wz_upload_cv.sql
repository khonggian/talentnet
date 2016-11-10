-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2014 at 04:07 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talentnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `wz_upload_cv`
--

CREATE TABLE IF NOT EXISTS `wz_upload_cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `wz_upload_cv`
--

INSERT INTO `wz_upload_cv` (`id`, `uid`, `file`, `fullname`, `email`, `phone`, `created`, `changed`, `status`) VALUES
(19, NULL, '2014/07/08/2be0dc05335fdbc071d6f74a611bf748_1404814304.pdf', 'Huy Nguyen', 'nhahuy1990@gmail.com', '34535345', '2014-07-08 17:11:48', '2014-07-08 17:11:48', 1),
(18, NULL, '2014/07/08/4de6383ff554c226e60937217834e5a6_1404814164.pdf', NULL, NULL, NULL, NULL, NULL, 1),
(17, NULL, '2014/07/08/8159957b3be5923d4c3c829fbcafb089_1404814124.pdf', NULL, NULL, NULL, NULL, NULL, 1),
(16, NULL, '2014/07/08/84d1daf075fa3928ef22f8a72cc7ee8a_1404814020.pdf', NULL, NULL, NULL, NULL, NULL, 1),
(15, NULL, '2014/07/08/a369a2c01d1533c3e7065582b989fd11_1404813841.pdf', NULL, NULL, NULL, NULL, NULL, 1),
(14, NULL, '2014/07/08/4475fd3b922c2d44ce00eb034a09d997_1404813723.pdf', NULL, NULL, NULL, NULL, NULL, 1),
(13, NULL, '2014/07/08/ba70233953ce874178a319cc7340b14a_1404813572.pdf', NULL, NULL, NULL, NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
