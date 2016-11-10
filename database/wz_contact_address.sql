-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2014 at 12:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wz_talentnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `wz_contact_address`
--

CREATE TABLE IF NOT EXISTS `wz_contact_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wz_contact_address`
--

INSERT INTO `wz_contact_address` (`id`, `title_vi`, `title_en`, `address_vi`, `address_en`, `phone`, `fax`, `email`, `image`, `status`, `changed`, `created`) VALUES
(7, 'nhan', 'nhan', 'Ho Chi Minh Office: 4th Floor, Star Building, 33 Mac Dinh Chi, District 1, Ho Chi Minh City, Vietnam', 'Ho Chi Minh Office: 4th Floor, Star Building, 33 Mac Dinh Chi, District 1, Ho Chi Minh City, Vietnam', '84 8 6291 4188', '84 8 6291 4188', 'contact-hn@talentnet.vn', '2014/07/08/6e071b504b34f47aaa00dee734ecb3bf_1404813209.jpg', 1, '2014-07-08 17:08:44', '2014-06-20 11:46:20'),
(8, 'nguyen hoang nhan', 'nguyen hoang nhan', 'Ho Chi Minh Office: 4th Floor, Star Building, 33 Mac Dinh Chi, District 1, Ho Chi Minh City, Vietnam', 'Ho Chi Minh Office: 4th Floor, Star Building, 33 Mac Dinh Chi, District 1, Ho Chi Minh City, Vietnam', '84 8 6291 4188', '84 8 6291 4188', 'contact-hn@talentnet.vn', '2014/07/08/e3f65de545a5b405fb9ad268511a35b0_1404813169.jpg', 1, '2014-07-08 17:08:29', '2014-06-20 11:51:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
