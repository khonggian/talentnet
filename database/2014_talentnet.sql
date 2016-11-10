-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2014 at 09:58 AM
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
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `cityID` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cityName` varchar(50) NOT NULL,
  `stateID` smallint(5) unsigned NOT NULL DEFAULT '0',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`cityID`),
  UNIQUE KEY `unq` (`countryID`,`stateID`,`cityID`),
  KEY `cityName` (`cityName`),
  KEY `stateID` (`stateID`),
  KEY `countryID` (`countryID`),
  KEY `latitude` (`latitude`),
  KEY `longitude` (`longitude`),
  KEY `countrystate` (`countryID`,`stateID`),
  KEY `countrycity` (`countryID`,`cityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=79675 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityID`, `cityName`, `stateID`, `countryID`, `latitude`, `longitude`) VALUES
(7, 'Mountain View', 5, 'USA', 37.42, -122.06),
(8, 'Beijing', 6, 'CHN', 39.93, 116.39),
(11, 'Ackworth', 9, 'USA', 41.36, -93.43),
(13, 'Far Rockaway', 10, 'USA', 40.61, -73.79),
(14, 'Hebei', 11, 'CHN', 39.89, 115.28),
(15, 'Los Angeles', 5, 'USA', 34.04, -118.25),
(16, 'Nanjing', 12, 'CHN', 32.06, 118.78),
(18, 'Sunnyvale', 5, 'USA', 37.42, -122.01),
(20, 'Newark', 14, 'USA', 40.74, -74.17),
(21, 'Malden', 15, 'USA', 42.43, -71.05),
(22, 'Trumbull', 16, 'USA', 41.26, -73.21),
(23, 'Guangzhou', 17, 'CHN', 23.12, 113.25),
(25, 'Cupertino', 5, 'USA', 37.3, -122.09),
(26, 'Fort Lauderdale', 19, 'USA', 26.1, -80.27),
(27, 'South Amboy', 14, 'USA', 40.48, -74.29),
(33, 'Keller', 24, 'USA', 32.93, -97.25),
(34, 'Long Island City', 10, 'USA', 40.74, -73.94),
(38, 'Brooklyn', 10, 'USA', 40.69, -73.99),
(39, 'Army Post Office', 28, 'USA', 56, -100),
(42, 'Mesquite', 24, 'USA', 32.76, -96.61),
(44, 'Mc Minnville', 32, 'USA', 35.65, -85.73),
(45, 'Flatwoods', 33, 'USA', 38.5, -82.73),
(46, 'Saint-maur-des-fossés', 34, 'FRA', 48.8, 2.5),
(47, 'Bogart', 35, 'USA', 33.91, -83.52),
(48, 'Cedar Hill', 24, 'USA', 32.59, -96.97),
(50, 'São Gonçalo', 37, 'BRA', -22.8, -43.03),
(51, 'Levittown', 10, 'USA', 40.72, -73.52),
(52, 'z.... TRIAL VERSION from MYIP.MS ....', 5, 'USA', 33.84, -118.35),
(53, 'Cornelia', 35, 'USA', 34.5, -83.58),
(61, 'Des Plaines', 44, 'USA', 42, -87.9),
(63, 'Fortaleza', 46, 'BRA', -3.32, -41.42),
(64, 'Denver', 47, 'USA', 39.75, -105),
(65, 'Shenzhen', 17, 'CHN', 22.53, 114.13),
(66, 'Wenzhou', 48, 'CHN', 28.02, 120.65),
(67, 'Riverton', 49, 'USA', 40.48, -112.01),
(72, 'Shenyang', 52, 'CHN', 41.79, 123.43),
(77, 'Gurgaon', 56, 'IND', 28.47, 77.03),
(78, 'Glen Burnie', 57, 'USA', 39.16, -76.6),
(79, 'z.... TRIAL VERSION from MYIP.MS ....', 10, 'USA', 40.8, -73.97),
(81, 'Miami', 19, 'USA', 25.81, -80.24),
(83, 'Chicago', 44, 'USA', 41.88, -87.63),
(87, 'Shanghai', 62, 'CHN', 31, 121.41),
(90, 'Tianjin', 64, 'CHN', 39.14, 117.18),
(99, 'Evansdale', 9, 'USA', 42.49, -92.29),
(102, 'Houston', 24, 'USA', 29.8, -95.42),
(103, 'z.... TRIAL VERSION from MYIP.MS ....', 24, 'USA', 32.78, -96.8),
(106, 'Dongguan', 17, 'CHN', 23.05, 113.74),
(107, 'Anderson', 72, 'USA', 34.48, -82.68),
(108, 'Bozeman', 73, 'USA', 45.71, -111.06),
(112, 'Marksville', 76, 'USA', 31.18, -92.02),
(113, 'Xiamen', 77, 'CHN', 24.47, 118.09),
(114, 'Billerica', 15, 'USA', 42.55, -71.26),
(116, 'Florianópolis', 78, 'BRA', -27.58, -48.57),
(118, 'Vitória', 80, 'BRA', -20.32, -40.35),
(121, 'Memphis', 32, 'USA', 35.03, -89.78),
(125, 'Seattle', 84, 'USA', 47.58, -122.3),
(126, 'Hyderabad', 85, 'IND', 17.38, 78.47),
(128, 'Prospect', 87, 'USA', 40.9, -80.08),
(132, 'Nanning', 90, 'CHN', 22.82, 108.32),
(133, 'Bellevue', 84, 'USA', 47.6, -122.16),
(135, 'Apollo Beach', 19, 'USA', 27.77, -82.41),
(138, 'Elgin', 44, 'USA', 42.03, -88.3),
(139, 'Cherryville', 93, 'USA', 35.39, -81.39),
(141, 'Jiazhuang', 94, 'CHN', 37.26, 117.08),
(144, 'Chongqing', 97, 'CHN', 29.56, 106.55),
(145, 'Jinan', 94, 'CHN', 36.67, 117),
(146, 'Grand Blanc', 98, 'USA', 42.92, -83.65),
(147, 'Indiana', 87, 'USA', 40.62, -79.15),
(148, 'Wuhan', 99, 'CHN', 30.58, 114.27),
(149, 'Delhi', 100, 'IND', 28.67, 77.22),
(150, 'Morrilton', 101, 'USA', 35.17, -92.74),
(154, 'Sharon', 15, 'USA', 42.11, -71.18),
(155, 'Pompton Lakes', 14, 'USA', 41, -74.28),
(158, 'Eau Claire', 107, 'USA', 44.79, -91.54),
(160, 'Saint Petersburg', 19, 'USA', 27.63, -82.7),
(162, 'Hangzhou', 48, 'CHN', 30.26, 120.17),
(165, 'Mount Holly', 14, 'USA', 39.99, -74.79),
(166, 'Gindou', 112, 'FRA', 44.63, 1.27),
(167, 'Chaoyang', 52, 'CHN', 41.57, 120.46),
(172, 'z.... TRIAL VERSION from MYIP.MS ....', 19, 'USA', 30.47, -84.22),
(174, 'Daqing', 52, 'CHN', 41.72, 123.2),
(176, 'Meulan', 116, 'FRA', 49.02, 1.9),
(184, 'Salvador', 121, 'BRA', -12.98, -38.52),
(187, 'Atlanta', 35, 'USA', 33.8, -84.39),
(188, 'Harbin', 123, 'CHN', 45.75, 126.65),
(190, 'Hopkins', 72, 'USA', 33.91, -80.83),
(197, 'Paris', 101, 'USA', 35.28, -93.72),
(198, 'Cary', 93, 'USA', 35.78, -78.82),
(200, 'Southgate', 98, 'USA', 42.21, -83.21),
(201, 'Madras', 128, 'IND', 13.08, 80.28),
(202, 'Viola', 101, 'USA', 36.38, -92),
(203, 'Euclid', 129, 'USA', 41.57, -81.53),
(204, 'Benton', 101, 'USA', 34.59, -92.67),
(205, 'z.... TRIAL VERSION from MYIP.MS ....', 14, 'USA', 40.85, -74.02),
(208, 'Rio Rancho', 132, 'USA', 35.25, -106.72),
(210, 'Hutchinson', 133, 'USA', 38.13, -97.93),
(212, 'Montgomery', 87, 'USA', 41.18, -76.95),
(213, 'Colorado Springs', 47, 'USA', 38.83, -104.74),
(214, 'Moriarty', 132, 'USA', 34.96, -106),
(218, 'Vail', 47, 'USA', 39.64, -106.32),
(219, 'z.... TRIAL VERSION from MYIP.MS ....', 101, 'USA', 35.14, -90.15),
(221, 'Sandy', 136, 'USA', 45.38, -122.18),
(223, 'Fennville', 98, 'USA', 42.57, -86.11),
(224, 'Agra', 138, 'IND', 27.18, 78.02),
(227, 'Kearney', 140, 'USA', 40.76, -99.02),
(230, 'Kittanning', 87, 'USA', 40.81, -79.42),
(233, 'Ripley', 143, 'USA', 38.79, -81.68),
(234, 'Norwood', 15, 'USA', 42.18, -71.2),
(235, 'z.... TRIAL VERSION from MYIP.MS ....', 15, 'USA', 42.28, -71.12),
(237, 'z.... TRIAL VERSION from MYIP.MS ....', 87, 'USA', 40.79, -77.87),
(238, 'Alexandria', 144, 'USA', 38.81, -77.13),
(244, 'Richmond', 144, 'USA', 37.54, -77.48),
(245, 'Belton', 145, 'USA', 38.78, -94.55),
(250, 'Laurel', 148, 'USA', 31.7, -89.11),
(252, 'Lolo', 73, 'USA', 46.73, -114.36),
(253, 'Peoria', 44, 'USA', 40.69, -89.59),
(257, 'Iowa City', 9, 'USA', 41.64, -91.46),
(258, 'Pawtucket', 151, 'USA', 41.87, -71.39),
(259, 'Madison', 107, 'USA', 43.07, -89.39),
(260, 'Toledo', 129, 'USA', 41.71, -83.54),
(269, 'Woodbridge', 144, 'USA', 38.65, -77.31),
(270, 'Suzhou', 12, 'CHN', 31.31, 120.62),
(272, 'São Paulo', 155, 'BRA', -23.53, -46.62),
(273, 'Henan', 156, 'CHN', 37.9, 112.19),
(276, 'Lishui', 48, 'CHN', 28.11, 119.56),
(278, 'Bangalore', 160, 'IND', 12.98, 77.58),
(280, 'Zhongxin', 161, 'CHN', 26.97, 109.77),
(283, 'Rolla', 145, 'USA', 37.93, -91.78),
(284, 'z.... TRIAL VERSION from MYIP.MS ....', 44, 'USA', 41.88, -87.88),
(285, 'Shelby', 93, 'USA', 35.36, -81.57),
(286, 'Carbondale', 47, 'USA', 39.18, -107.23),
(287, 'Decatur', 35, 'USA', 33.69, -84.25),
(290, 'Baltimore', 57, 'USA', 39.34, -76.69),
(291, 'Kokomo', 163, 'USA', 40.44, -86.09),
(296, 'Broken Arrow', 164, 'USA', 36.06, -95.81),
(300, 'Taiyüan', 156, 'CHN', 37.73, 112.47),
(304, 'z.... TRIAL VERSION from MYIP.MS ....', 47, 'USA', 39.96, -105.17),
(312, 'Raleigh', 93, 'USA', 35.93, -78.72),
(313, 'Greenville', 72, 'USA', 34.86, -82.25),
(317, 'Saint Paul', 175, 'USA', 45.07, -93.19),
(318, 'Fort Mitchell', 176, 'USA', 32.29, -84.97),
(319, 'Akron', 129, 'USA', 41.07, -81.54),
(321, 'Zhongyuan', 178, 'CHN', 19.14, 110.48),
(327, 'Stamford', 16, 'USA', 41.08, -73.54),
(328, 'Phoenix', 181, 'USA', 33.43, -112.2),
(330, 'Viroflay', 34, 'FRA', 48.8, 2.17),
(331, 'Chengdu', 182, 'CHN', 30.67, 104.07),
(332, 'Putian', 77, 'CHN', 25.44, 119.01),
(334, 'New Palestine', 163, 'USA', 39.73, -85.89),
(336, 'Caldwell', 129, 'USA', 39.73, -81.51),
(337, 'Dundalk', 57, 'USA', 39.26, -76.5),
(340, 'Minneapolis', 175, 'USA', 45.03, -93.3),
(344, 'Brookings', 186, 'USA', 44.33, -96.81),
(348, 'Las Cruces', 132, 'USA', 32.35, -106.77),
(349, 'Mumbai', 187, 'IND', 18.98, 72.83),
(354, 'z.... TRIAL VERSION from MYIP.MS ....', 129, 'USA', 40.04, -82.96),
(362, 'Las Vegas', 192, 'USA', 36.08, -115.09),
(366, 'Fuzhou', 77, 'CHN', 26.06, 119.31),
(367, 'Hazelwood', 145, 'USA', 38.79, -90.38),
(368, 'Moncks Corner', 72, 'USA', 33.12, -80.04),
(372, 'Xian', 11, 'CHN', 40.29, 117.65),
(374, 'Bothell', 84, 'USA', 47.84, -122.2),
(376, 'Changge', 196, 'CHN', 34.22, 113.77),
(378, 'Qingdao', 94, 'CHN', 36.1, 120.37),
(379, 'Gilbert', 181, 'USA', 33.32, -111.76),
(392, 'Sioux Falls', 186, 'USA', 43.52, -96.73),
(398, 'Jinhua', 48, 'CHN', 29.11, 119.65),
(400, 'Richmond', 33, 'USA', 37.77, -84.3),
(404, 'Thana', 187, 'IND', 19.2, 72.97),
(405, 'Thiruvananthapuram', 206, 'IND', 8.51, 76.96),
(408, 'Huntsville', 176, 'USA', 34.64, -86.75),
(409, 'z.... TRIAL VERSION from MYIP.MS ....', 93, 'USA', 34.74, -76.77),
(410, 'Carter Lake', 9, 'USA', 41.29, -95.92),
(411, 'Tupelo', 148, 'USA', 34.22, -88.77),
(413, 'Menomonie', 107, 'USA', 44.85, -92),
(422, 'Weare', 215, 'USA', 43.08, -71.72),
(427, 'Amite', 76, 'USA', 30.73, -90.61),
(428, 'Norfolk', 144, 'USA', 36.89, -76.27),
(432, 'Portland', 218, 'USA', 43.69, -70.29),
(439, 'Honolulu', 220, 'USA', 21.3, -157.79),
(443, 'Overland Park', 133, 'USA', 38.92, -94.7),
(445, 'z.... TRIAL VERSION from MYIP.MS ....', 35, 'USA', 33.44, -82.05),
(452, 'Durg', 225, 'IND', 21.18, 81.28),
(456, 'Williamston', 98, 'USA', 42.68, -84.27),
(459, 'Tempe', 181, 'USA', 33.44, -111.92),
(460, 'Kennewick', 84, 'USA', 46.08, -119.09),
(463, 'Birmingham', 176, 'USA', 33.51, -86.8),
(468, 'z.... TRIAL VERSION from MYIP.MS ....', 98, 'USA', 42.5, -83.41),
(477, 'Coquille', 136, 'USA', 43.2, -124.12),
(479, 'Hefei', 236, 'CHN', 31.86, 117.28),
(480, 'Gardnerville', 192, 'USA', 38.92, -119.8),
(483, 'Changsha', 161, 'CHN', 28.18, 113.11),
(485, 'Salt Lake City', 49, 'USA', 40.71, -111.86),
(491, 'Quitman', 76, 'USA', 32.35, -92.72),
(493, 'Windsor', 16, 'USA', 41.86, -72.68),
(498, 'Paris', 34, 'FRA', 48.87, 2.33),
(503, 'Fort Wayne', 163, 'USA', 40.98, -85.12),
(505, 'Moulton', 176, 'USA', 34.46, -87.3),
(510, 'Sierra Vista', 181, 'USA', 31.59, -110.17),
(511, 'Valparaiso', 163, 'USA', 41.46, -87.14),
(518, 'Washington', 249, 'USA', 38.91, -77.08),
(527, 'Gatlinburg', 32, 'USA', 35.67, -83.46),
(530, 'Dover', 254, 'USA', 39.16, -75.49),
(533, 'Lexington', 33, 'USA', 37.99, -84.49),
(536, 'Olney', 57, 'USA', 39.15, -77.08),
(547, 'z.... TRIAL VERSION from MYIP.MS ....', 144, 'USA', 38.84, -77.47),
(548, 'Calcutta', 258, 'IND', 22.57, 88.37),
(551, 'Knoxville', 32, 'USA', 36.06, -83.91),
(556, 'z.... TRIAL VERSION from MYIP.MS ....', 176, 'USA', 32.36, -86.27),
(567, 'Nasik', 187, 'IND', 19.98, 73.8),
(578, 'New Delhi', 100, 'IND', 28.6, 77.2),
(582, 'Xian', 268, 'CHN', 34.26, 108.94),
(595, 'z.... TRIAL VERSION from MYIP.MS ....', 32, 'USA', 36.14, -86.73),
(597, 'Fraziers Bottom', 143, 'USA', 38.6, -82.03),
(599, 'Pune', 187, 'IND', 18.53, 73.87),
(601, 'Indore', 274, 'IND', 22.72, 75.83),
(622, 'Foshan', 17, 'CHN', 23.03, 113.12),
(625, 'Ahmadabad', 284, 'IND', 23.03, 72.62),
(631, 'Lawrence', 133, 'USA', 39.04, -95.21),
(640, 'z.... TRIAL VERSION from MYIP.MS ....', 84, 'USA', 47.68, -122.12),
(642, 'New Orleans', 76, 'USA', 29.96, -90.08),
(647, 'Columbia', 145, 'USA', 39.04, -92.27),
(655, 'Lucknow', 138, 'IND', 26.85, 80.92),
(660, 'Waukesha', 107, 'USA', 42.94, -88.3),
(663, 'z.... TRIAL VERSION from MYIP.MS ....', 57, 'USA', 39.34, -76.5),
(666, 'z.... TRIAL VERSION from MYIP.MS ....', 72, 'USA', 33.7, -80.44),
(667, 'Belfort', 296, 'FRA', 47.63, 6.87),
(669, 'z.... TRIAL VERSION from MYIP.MS ....', 48, 'CHN', 30, 120.58),
(678, 'z.... TRIAL VERSION from MYIP.MS ....', 181, 'USA', 34.05, -109.2),
(683, 'Bhopal', 274, 'IND', 23.27, 77.4),
(690, 'Middleton', 305, 'USA', 43.74, -116.58),
(691, 'Jaipur', 306, 'IND', 26.92, 75.82),
(692, 'Tiruchchirappalli', 128, 'IND', 10.81, 78.69),
(695, 'Lenexa', 133, 'USA', 38.95, -94.75),
(696, 'Hulun', 307, 'CHN', 49.2, 119.7),
(711, 'Strasbourg', 315, 'FRA', 48.58, 7.75),
(712, 'Pahala', 220, 'USA', 19.2, -155.5),
(718, 'Cuttack', 317, 'IND', 20.5, 85.83),
(722, 'Visakhapatnam', 85, 'IND', 17.7, 83.3),
(723, 'Pocatello', 305, 'USA', 42.91, -112.4),
(735, 'Vanceburg', 33, 'USA', 38.51, -83.41),
(737, 'z.... TRIAL VERSION from MYIP.MS ....', 145, 'USA', 39.11, -94.57),
(739, 'Bristol', 16, 'USA', 41.68, -72.94),
(748, 'Rajkot', 284, 'IND', 22.3, 70.78),
(752, 'Meerut', 138, 'IND', 28.98, 77.7),
(758, 'z.... TRIAL VERSION from MYIP.MS ....', 107, 'USA', 44.26, -88.51),
(771, 'Muzaffarnagar', 138, 'IND', 29.47, 77.68),
(776, 'Changchun', 334, 'CHN', 43.88, 125.32),
(780, 'Suri', 258, 'IND', 23.92, 87.53),
(784, 'Vijayawada', 85, 'IND', 16.52, 80.62),
(787, 'z.... TRIAL VERSION from MYIP.MS ....', 9, 'USA', 41.24, -95.79),
(788, 'Saint Cloud', 175, 'USA', 45.49, -94.23),
(796, 'z.... TRIAL VERSION from MYIP.MS ....', 187, 'IND', 19.22, 73.15),
(801, 'Madurai', 128, 'IND', 9.93, 78.12),
(803, 'Ewa Beach', 220, 'USA', 21.35, -158.02),
(811, 'Vadodara', 284, 'IND', 22.3, 73.2),
(830, 'Ranchi', 355, 'IND', 23.35, 85.33),
(834, 'z.... TRIAL VERSION from MYIP.MS ....', 16, 'USA', 41.14, -73.41),
(848, 'Chandigarh', 363, 'IND', 30.74, 76.79),
(858, 'Montrouge', 34, 'FRA', 48.82, 2.32),
(861, 'Tulsa', 164, 'USA', 36.14, -95.94),
(867, 'Newalla', 164, 'USA', 35.35, -97.2),
(871, 'z.... TRIAL VERSION from MYIP.MS ....', 138, 'IND', 28.67, 77.43),
(873, 'z.... TRIAL VERSION from MYIP.MS ....', 34, 'FRA', 48.58, 2.22),
(878, 'Ludhiana', 377, 'IND', 30.9, 75.85),
(907, 'Surat', 284, 'IND', 20.97, 72.9),
(909, 'Karimnagar', 85, 'IND', 18.43, 79.15),
(923, 'Hillsboro', 136, 'USA', 45.51, -122.94),
(930, 'Thanjavur', 128, 'IND', 10.8, 79.15),
(935, 'z.... TRIAL VERSION from MYIP.MS ....', 284, 'IND', 23.22, 72.68),
(947, 'Sète', 409, 'FRA', 43.4, 3.68),
(952, 'Kapurthala', 377, 'IND', 31.38, 75.38),
(960, 'Silchar', 416, 'IND', 24.82, 92.8),
(987, 'Bourges', 431, 'FRA', 47.08, 2.4),
(988, 'Zhengzhou', 196, 'CHN', 34.68, 113.53),
(994, 'Portland', 136, 'USA', 45.59, -122.71),
(997, 'z.... TRIAL VERSION from MYIP.MS ....', 33, 'USA', 38.22, -85.62),
(1018, 'Bhubaneswar', 317, 'IND', 20.23, 85.83),
(1044, 'Keaau', 220, 'USA', 19.58, -155.02),
(1047, 'Tours', 431, 'FRA', 47.38, 0.68),
(1060, 'Faridabad', 56, 'IND', 28.43, 77.32),
(1063, 'Jacareí', 155, 'BRA', -23.32, -45.97),
(1068, 'Celles-sur-ource', 469, 'FRA', 48.08, 4.4),
(1072, 'Trébeurden', 471, 'FRA', 48.77, -3.57),
(1088, 'Haora', 258, 'IND', 22.59, 88.31),
(1121, 'Sacy-le-grand', 116, 'FRA', 49.35, 2.55),
(1126, 'Langfang', 11, 'CHN', 39.51, 116.69),
(1142, 'z.... TRIAL VERSION from MYIP.MS ....', 136, 'USA', 44.53, -122.82),
(1157, 'Lamorlaye', 116, 'FRA', 49.15, 2.43),
(1163, 'Brewer', 218, 'USA', 44.78, -68.74),
(1174, 'z.... TRIAL VERSION from MYIP.MS ....', 128, 'IND', 11.35, 77.73),
(1197, 'Niederroedern', 315, 'FRA', 48.9, 8.05),
(1214, 'Beauvais', 116, 'FRA', 49.43, 2.08),
(1221, 'Kolkata', 258, 'IND', 22.57, 88.37),
(1242, 'Lyon', 544, 'FRA', 45.75, 4.85),
(1257, 'Henderson', 192, 'USA', 36.03, -115.07),
(1258, 'Coursan', 409, 'FRA', 43.23, 3.07),
(1275, 'Zudausques', 555, 'FRA', 50.75, 2.15),
(1279, 'Nancy', 556, 'FRA', 48.68, 6.2),
(1288, 'Piracicaba', 155, 'BRA', -22.72, -47.63),
(1291, 'Porto Alegre', 561, 'BRA', -30.03, -51.2),
(1293, 'Nogent-le-roi', 431, 'FRA', 48.65, 1.53),
(1296, 'z.... TRIAL VERSION from MYIP.MS ....', 116, 'FRA', 49.25, 3.55),
(1297, 'Grillon', 563, 'FRA', 44.4, 4.93),
(1300, 'Haryana', 56, 'IND', 29.62, 76.98),
(1345, 'Rennes', 471, 'FRA', 48.08, -1.68),
(1353, 'Cuzieu', 544, 'FRA', 45.62, 4.27),
(1361, 'Haikou', 178, 'CHN', 20.05, 110.34),
(1364, 'Tassin-la-demi-lune', 544, 'FRA', 45.77, 4.78),
(1372, 'Cuers', 563, 'FRA', 43.23, 6.07),
(1374, 'Belo Horizonte', 586, 'BRA', -19.92, -43.93),
(1376, 'Kota', 306, 'IND', 25.18, 75.83),
(1380, 'Mieussy', 544, 'FRA', 46.15, 6.53),
(1390, 'Amritsar', 377, 'IND', 31.63, 74.87),
(1393, 'Kochi', 206, 'IND', 9.97, 76.23),
(1410, 'Bauru', 155, 'BRA', -22.32, -49.07),
(1414, 'z.... TRIAL VERSION from MYIP.MS ....', 544, 'FRA', 45.77, 4.88),
(1418, 'Circle Pines', 175, 'USA', 45.17, -93.12),
(1423, 'Limoges', 598, 'FRA', 45.85, 1.25),
(1432, 'Guiyang', 600, 'CHN', 26.58, 106.72),
(1474, 'z.... TRIAL VERSION from MYIP.MS ....', 163, 'USA', 39.47, -87.4),
(1479, 'Lille', 555, 'FRA', 50.63, 3.07),
(1506, 'Martigues', 563, 'FRA', 43.4, 5.05),
(1507, 'Fleury-les-aubrais', 431, 'FRA', 47.93, 1.92),
(1523, 'Aubevoye', 635, 'FRA', 49.15, 1.33),
(1533, 'Thalassery', 206, 'IND', 11.75, 75.49),
(1545, 'z.... TRIAL VERSION from MYIP.MS ....', 155, 'BRA', -23.52, -46.83),
(1575, 'Angoulême', 649, 'FRA', 45.65, 0.15),
(1584, 'Guwahati', 416, 'IND', 26.18, 91.73),
(1611, 'Kannur', 206, 'IND', 11.87, 75.37),
(1618, 'Pauvres', 469, 'FRA', 49.42, 4.5),
(1627, 'Dubois', 667, 'USA', 43.49, -109.64),
(1641, 'Mangaluru', 160, 'IND', 12.86, 74.84),
(1659, 'Wilmington', 254, 'USA', 39.72, -75.53),
(1662, 'Beausoleil', 563, 'FRA', 43.75, 7.43),
(1663, 'Vapi', 676, 'IND', 20.37, 72.9),
(1686, 'Bruguières', 112, 'FRA', 43.73, 1.42),
(1687, 'Olive Branch', 148, 'USA', 34.92, -89.82),
(1713, 'Wheeling', 143, 'USA', 40.06, -80.64),
(1720, 'z.... TRIAL VERSION from MYIP.MS ....', 431, 'FRA', 47.03, 2.92),
(1758, 'Joinville', 78, 'BRA', -26.3, -48.83),
(1760, 'Raymond', 215, 'USA', 43.03, -71.2),
(1761, 'Altamira', 701, 'BRA', -3.2, -52.2),
(1763, 'Nashua', 215, 'USA', 42.73, -71.46),
(1770, 'Valady', 112, 'FRA', 44.45, 2.43),
(1778, 'Taizhou', 12, 'CHN', 32.49, 119.91),
(1785, 'z.... TRIAL VERSION from MYIP.MS ....', 85, 'IND', 13.2, 79.12),
(1786, 'Lisieux', 708, 'FRA', 49.15, 0.23),
(1789, 'Hampstead', 215, 'USA', 42.88, -71.17),
(1808, 'z.... TRIAL VERSION from MYIP.MS ....', 175, 'USA', 44.93, -93.42),
(1822, 'Sigean', 409, 'FRA', 43.03, 2.98),
(1851, 'Rio De Janeiro', 37, 'BRA', -22.9, -43.23),
(1856, 'Patna', 728, 'IND', 25.6, 85.12),
(1857, 'Laruscade', 729, 'FRA', 45.12, -0.33),
(1867, 'Niterói', 37, 'BRA', -22.88, -43.09),
(1899, 'São Leopoldo', 561, 'BRA', -29.77, -51.15),
(1902, 'Biddeford', 218, 'USA', 43.5, -70.49),
(1906, 'Balma', 112, 'FRA', 43.62, 1.5),
(1908, 'Le Recoux', 409, 'FRA', 44.33, 3.15),
(1917, 'Dewas', 274, 'IND', 22.97, 76.07),
(1939, 'La Chapelle', 469, 'FRA', 48.33, 4.05),
(1962, 'z.... TRIAL VERSION from MYIP.MS ....', 112, 'FRA', 42.87, 1.2),
(1976, 'Fernley', 192, 'USA', 39.67, -119.07),
(1982, 'Camps', 598, 'FRA', 44.98, 2),
(1996, 'z.... TRIAL VERSION from MYIP.MS ....', 563, 'FRA', 43.3, 5.4),
(2003, 'Delhi Paharganj', 100, 'IND', 28.62, 77.22),
(2007, 'Lambersart', 555, 'FRA', 50.65, 3.03),
(2022, 'Dole', 296, 'FRA', 47.1, 5.5),
(2023, 'z.... TRIAL VERSION from MYIP.MS ....', 133, 'USA', 37.69, -97.5),
(2026, 'Irati', 773, 'BRA', -25.48, -50.65),
(2058, 'z.... TRIAL VERSION from MYIP.MS ....', 192, 'USA', 36.22, -115.17),
(2067, 'Arras', 555, 'FRA', 50.28, 2.78),
(2103, 'Brive-la-gaillarde', 598, 'FRA', 45.15, 1.53),
(2126, 'z.... TRIAL VERSION from MYIP.MS ....', 555, 'FRA', 51.05, 2.37),
(2133, 'Servilly', 798, 'FRA', 46.28, 3.6),
(2150, 'z.... TRIAL VERSION from MYIP.MS ....', 76, 'USA', 30.23, -93.2),
(2165, 'z.... TRIAL VERSION from MYIP.MS ....', 220, 'USA', 21.41, -158.02),
(2182, 'Baltic', 186, 'USA', 43.74, -96.76),
(2188, 'Olinda', 808, 'BRA', -8.02, -34.85),
(2194, 'Yellapur', 160, 'IND', 14.97, 74.72),
(2202, 'z.... TRIAL VERSION from MYIP.MS ....', 215, 'USA', 43.43, -70.98),
(2209, 'Berwick', 218, 'USA', 43.3, -70.84),
(2221, 'Norman', 164, 'USA', 35.25, -97.46),
(2224, 'z.... TRIAL VERSION from MYIP.MS ....', 164, 'USA', 35.71, -97.43),
(2235, 'Metzeral', 315, 'FRA', 48.02, 7.07),
(2240, 'Claymont', 254, 'USA', 39.8, -75.46),
(2274, 'Angers', 822, 'FRA', 47.47, -0.55),
(2285, 'Sandpoint', 305, 'USA', 48.34, -116.45),
(2290, 'Uberlândia', 586, 'BRA', -18.92, -48.3),
(2321, 'z.... TRIAL VERSION from MYIP.MS ....', 218, 'USA', 44.3, -70.37),
(2328, 'z.... TRIAL VERSION from MYIP.MS ....', 206, 'IND', 10.11, 76.36),
(2338, 'Boise', 305, 'USA', 43.55, -116.29),
(2372, 'Manaus', 838, 'BRA', -3.11, -60.03),
(2374, 'Sonipat', 56, 'IND', 28.98, 77.02),
(2385, 'Laramie', 667, 'USA', 41.43, -105.52),
(2395, 'Besançon', 296, 'FRA', 47.25, 6.03),
(2400, 'Brasília', 842, 'BRA', -15.78, -47.92),
(2456, 'São José', 78, 'BRA', -27.63, -48.65),
(2526, 'Jackson', 148, 'USA', 32.33, -90.2),
(2568, 'Santa Fe', 132, 'USA', 35.68, -105.96),
(2572, 'z.... TRIAL VERSION from MYIP.MS ....', 409, 'FRA', 43.37, 3.15),
(2604, 'z.... TRIAL VERSION from MYIP.MS ....', 305, 'USA', 43.44, -116.32),
(2643, 'z.... TRIAL VERSION from MYIP.MS ....', 148, 'USA', 30.42, -88.65),
(2681, 'Rezonville', 556, 'FRA', 49.1, 6),
(2725, 'Ogden', 49, 'USA', 41.22, -111.97),
(2741, 'Fleet Post Office', 28, 'USA', 57, -100),
(2766, 'Orem', 49, 'USA', 40.29, -111.72),
(2864, 'Jandun', 469, 'FRA', 49.65, 4.55),
(2882, 'z.... TRIAL VERSION from MYIP.MS ....', 132, 'USA', 32.68, -108.51),
(2908, 'Blumenau', 78, 'BRA', -26.93, -49.05),
(2973, 'Bismarck', 924, 'USA', 46.82, -100.71),
(2990, 'Prigonrieux', 729, 'FRA', 44.85, 0.4),
(3024, 'Bédée', 471, 'FRA', 48.18, -1.95),
(3029, 'Clermont-ferrand', 798, 'FRA', 45.78, 3.08),
(3045, 'Lincoln', 140, 'USA', 40.83, -96.67),
(3057, 'Woonsocket', 186, 'USA', 44.05, -98.3),
(3071, 'Guérande', 822, 'FRA', 47.33, -2.43),
(3073, 'Curitiba', 773, 'BRA', -25.42, -49.25),
(3079, 'Recife', 808, 'BRA', -8.05, -34.9),
(3082, 'Auxerre', 937, 'FRA', 47.8, 3.57),
(3093, 'Jaboatão', 808, 'BRA', -8.12, -35.02),
(3104, 'Omaha', 140, 'USA', 41.29, -96.17),
(3107, 'Cariacica', 80, 'BRA', -20.27, -40.42),
(3122, 'Anshan', 52, 'CHN', 41.12, 122.99),
(3138, 'z.... TRIAL VERSION from MYIP.MS ....', 49, 'USA', 41.69, -111.81),
(3145, 'Metz', 556, 'FRA', 49.13, 6.17),
(3162, 'Belém', 701, 'BRA', -1.45, -48.48),
(3202, 'Zaozhuang', 94, 'CHN', 34.86, 117.55),
(3239, 'Kalispell', 73, 'USA', 48.2, -114.39),
(3253, 'Beatrice', 140, 'USA', 40.26, -96.71),
(3260, 'z.... TRIAL VERSION from MYIP.MS ....', 140, 'USA', 40.87, -97.6),
(3275, 'Jackson', 667, 'USA', 43.46, -110.51),
(3281, 'Ferrisburg', 959, 'USA', 44.21, -73.22),
(3324, 'Scott Depot', 143, 'USA', 38.45, -81.89),
(3344, 'z.... TRIAL VERSION from MYIP.MS ....', 143, 'USA', 39.31, -78.05),
(3366, 'z.... TRIAL VERSION from MYIP.MS ....', 258, 'IND', 23.48, 87.32),
(3397, 'Westerly', 151, 'USA', 41.36, -71.8),
(3400, 'Goiânia', 970, 'BRA', -16.67, -49.27),
(3416, 'Jalandhar', 377, 'IND', 31.33, 75.58),
(3464, 'z.... TRIAL VERSION from MYIP.MS ....', 377, 'IND', 31.19, 75.99),
(3514, 'Mulhouse', 315, 'FRA', 47.75, 7.33),
(3552, 'z.... TRIAL VERSION from MYIP.MS ....', 17, 'CHN', 23.08, 114.4),
(3568, 'Jilin', 334, 'CHN', 43.85, 126.56),
(3620, 'Valdoie', 296, 'FRA', 47.67, 6.85),
(3660, 'z.... TRIAL VERSION from MYIP.MS ....', 315, 'FRA', 48.77, 7.98),
(3668, 'Shimla', 1008, 'IND', 31.1, 77.17),
(3682, 'Nagar', 306, 'IND', 27.43, 77.1),
(3685, 'Aracaju', 1011, 'BRA', -10.92, -37.07),
(3703, 'z.... TRIAL VERSION from MYIP.MS ....', 56, 'IND', 28.18, 76.62),
(3778, 'Itaboraí', 37, 'BRA', -22.75, -42.87),
(3792, 'Guipavas', 471, 'FRA', 48.43, -4.4),
(3873, 'z.... TRIAL VERSION from MYIP.MS ....', 471, 'FRA', 48.57, 2.3),
(3893, 'Daman', 676, 'IND', 20.42, 72.85),
(3897, 'Camden Wyoming', 254, 'USA', 39.08, -75.61),
(3991, 'Nantes', 822, 'FRA', 47.22, -1.55),
(4008, 'Eagle River', 1061, 'USA', 61.21, -149.26),
(4017, 'Montreuil-bellay', 822, 'FRA', 47.13, -0.15),
(4042, 'z.... TRIAL VERSION from MYIP.MS ....', 822, 'FRA', 48, 0.2),
(4046, 'Juziers', 635, 'FRA', 49, 1.85),
(4071, 'Flers', 708, 'FRA', 48.75, -0.57),
(4087, 'Raipur', 225, 'IND', 21.23, 81.63),
(4103, 'Viamão', 561, 'BRA', -30.08, -51.03),
(4116, 'Saint-pierre-du-palais', 649, 'FRA', 45.17, -0.15),
(4158, 'Chalon-sur-saône', 937, 'FRA', 46.78, 4.85),
(4166, 'Hebei', 6, 'CHN', 39.82, 115.94),
(4219, 'Woonsocket', 151, 'USA', 42, -71.49),
(4274, 'Rouen', 635, 'FRA', 49.43, 1.08),
(4282, 'Gillette', 667, 'USA', 43.9, -105.55),
(4290, 'Rai', 708, 'FRA', 48.75, 0.58),
(4324, 'Ponta Porã', 1102, 'BRA', -22.53, -55.72),
(4331, 'Bellême', 708, 'FRA', 48.37, 0.57),
(4365, 'z.... TRIAL VERSION from MYIP.MS ....', 667, 'USA', 42.65, -105.87),
(4370, 'Le Havre', 635, 'FRA', 49.5, 0.13),
(4384, 'Beawar', 306, 'IND', 26.1, 74.32),
(4388, 'z.... TRIAL VERSION from MYIP.MS ....', 296, 'FRA', 46.9, 6.37),
(4435, 'Hombourg-haut', 556, 'FRA', 49.13, 6.77),
(4446, 'Dijon', 937, 'FRA', 47.32, 5.02),
(4490, 'Lamarche-sur-saône', 937, 'FRA', 47.27, 5.38),
(4533, 'Gulbarga', 160, 'IND', 17.33, 76.83),
(4573, 'z.... TRIAL VERSION from MYIP.MS ....', 469, 'FRA', 48.3, 4.05),
(4670, 'z.... TRIAL VERSION from MYIP.MS ....', 306, 'IND', 26.29, 73.03),
(4674, 'Lajeado', 561, 'BRA', -29.45, -51.97),
(4717, 'Livingston', 73, 'USA', 45.71, -110.54),
(4777, 'z.... TRIAL VERSION from MYIP.MS ....', 937, 'FRA', 47.32, 5.12),
(4795, 'Seward', 1061, 'USA', 60.06, -149.34),
(4810, 'Providence', 151, 'USA', 41.83, -71.4),
(4820, 'Caruaru', 808, 'BRA', -8.28, -35.97),
(4823, 'z.... TRIAL VERSION from MYIP.MS ....', 160, 'IND', 14.85, 74.43),
(4827, 'Castelo', 80, 'BRA', -20.6, -41.2),
(4833, 'z.... TRIAL VERSION from MYIP.MS ....', 151, 'USA', 41.96, -71.43),
(4861, 'z.... TRIAL VERSION from MYIP.MS ....', 254, 'USA', 39.48, -75.67),
(4894, 'Ychoux', 729, 'FRA', 44.33, -0.95),
(4912, 'Marsac', 729, 'FRA', 45.05, -0.68),
(4958, 'Juneau', 1061, 'USA', 58.58, -134.77),
(4977, 'Paranoá', 842, 'BRA', -15.83, -47.82),
(4978, 'Perpezac-le-noir', 598, 'FRA', 45.32, 1.55),
(4992, 'z.... TRIAL VERSION from MYIP.MS ....', 186, 'USA', 42.94, -97.44),
(5012, 'Issoire', 798, 'FRA', 45.55, 3.25),
(5015, 'z.... TRIAL VERSION from MYIP.MS ....', 635, 'FRA', 49.52, 0.55),
(5119, 'Thouars', 649, 'FRA', 46.97, -0.22),
(5152, 'Kunming', 1178, 'CHN', 25.04, 102.72),
(5273, 'Beihai', 90, 'CHN', 21.48, 109.1),
(5436, 'Fairbanks', 1061, 'USA', 64.82, -147.72),
(5483, 'Saint-julien-l''ars', 649, 'FRA', 46.55, 0.5),
(5496, 'Wuxi', 12, 'CHN', 31.58, 120.29),
(5509, 'z.... TRIAL VERSION from MYIP.MS ....', 649, 'FRA', 45.75, -0.63),
(5510, 'Dehra Dun', 1200, 'IND', 30.32, 78.03),
(5537, 'Shillong', 1203, 'IND', 25.58, 91.87),
(5602, 'Chambre', 798, 'FRA', 45.2, 2.37),
(5607, 'z.... TRIAL VERSION from MYIP.MS ....', 1061, 'USA', 61.08, -149.71),
(5644, 'z.... TRIAL VERSION from MYIP.MS ....', 729, 'FRA', 43.48, -1.48),
(5713, 'Cachoeiro De Itapemirim', 80, 'BRA', -20.85, -41.1),
(5753, 'z.... TRIAL VERSION from MYIP.MS ....', 556, 'FRA', 48.38, 5.48),
(5793, 'z.... TRIAL VERSION from MYIP.MS ....', 37, 'BRA', -22.51, -43.18),
(5809, 'Nanchang', 1231, 'CHN', 28.55, 115.93),
(5936, 'Londrina', 773, 'BRA', -23.3, -51.15),
(6013, 'Lyndonville', 959, 'USA', 44.53, -72.05),
(6119, 'z.... TRIAL VERSION from MYIP.MS ....', 708, 'FRA', 49.18, -0.35),
(6122, 'Sibsagar', 416, 'IND', 26.98, 94.63),
(6239, 'z.... TRIAL VERSION from MYIP.MS ....', 561, 'BRA', -29.03, -51.18),
(6246, 'Barre', 959, 'USA', 44.18, -72.47),
(6263, 'z.... TRIAL VERSION from MYIP.MS ....', 73, 'USA', 46.38, -112.72),
(6325, 'Natal', 1269, 'BRA', -5.78, -35.22),
(6409, 'Kumar', 1008, 'IND', 33.03, 76.45),
(6537, 'Contagem', 586, 'BRA', -19.92, -44.1),
(6720, 'z.... TRIAL VERSION from MYIP.MS ....', 798, 'FRA', 46.38, 3.77),
(6724, 'Cajàzeiras', 1293, 'BRA', -6.9, -38.57),
(6740, 'z.... TRIAL VERSION from MYIP.MS ....', 78, 'BRA', -26.88, -48.65),
(6780, 'Simões', 1297, 'BRA', -7.6, -40.82),
(6781, 'Qinghai', 600, 'CHN', 25.81, 106.07),
(6821, 'z.... TRIAL VERSION from MYIP.MS ....', 12, 'CHN', 31.38, 120.95),
(6868, 'Shangdi', 77, 'CHN', 26.13, 117.98),
(6906, 'Devils Lake', 924, 'USA', 48.14, -98.89),
(6988, 'Lanzhou', 1310, 'CHN', 36.06, 103.79),
(7006, 'Jatni', 317, 'IND', 20.17, 85.7),
(7024, 'Kundan', 1312, 'IND', 33.8, 74.26),
(7055, 'Hubei', 1231, 'CHN', 26.89, 114.53),
(7105, 'Jamshedpur', 355, 'IND', 22.8, 86.18),
(7235, 'Teresina', 1297, 'BRA', -5.08, -42.82),
(7245, 'z.... TRIAL VERSION from MYIP.MS ....', 808, 'BRA', -7.83, -34.9),
(7251, 'Colva', 1334, 'IND', 15.27, 73.92),
(7311, 'São Luís', 1335, 'BRA', -2.52, -44.27),
(7349, 'Itabira', 586, 'BRA', -19.62, -43.22),
(7496, 'Shelburne', 959, 'USA', 44.4, -73.21),
(7604, 'z.... TRIAL VERSION from MYIP.MS ....', 598, 'FRA', 45.9, 1.32),
(7688, 'West Fargo', 924, 'USA', 46.89, -96.93),
(7720, 'Fargo', 924, 'USA', 46.93, -96.83),
(7747, 'União Da Victoria', 773, 'BRA', -26.22, -51.08),
(7790, 'z.... TRIAL VERSION from MYIP.MS ....', 773, 'BRA', -25.87, -49.37),
(7907, 'z.... TRIAL VERSION from MYIP.MS ....', 959, 'USA', 44.49, -73.23),
(7915, 'z.... TRIAL VERSION from MYIP.MS ....', 586, 'BRA', -19.58, -46.92),
(8089, 'Pôrto Seguro', 121, 'BRA', -16.43, -39.08),
(8200, 'Barpeta', 416, 'IND', 26.32, 91),
(8304, 'Solon', 1008, 'IND', 30.92, 77.12),
(8479, 'Haldwani', 1200, 'IND', 29.22, 79.52),
(8747, 'Campina Grande', 1293, 'BRA', -7.22, -35.88),
(8828, 'João Pessoa', 1293, 'BRA', -7.12, -34.87),
(8881, 'Campo Grande', 1102, 'BRA', -20.45, -54.62),
(8953, 'z.... TRIAL VERSION from MYIP.MS ....', 924, 'USA', 48.14, -101.34),
(9077, 'Jiaozuo', 196, 'CHN', 35.24, 113.23),
(9299, 'Tongzhou', 6, 'CHN', 39.91, 116.6),
(9322, 'Udhampur', 1312, 'IND', 32.93, 75.13),
(9351, 'z.... TRIAL VERSION from MYIP.MS ....', 52, 'CHN', 38.91, 121.6),
(9417, 'Panaji', 1334, 'IND', 15.48, 73.83),
(9446, 'Muzaffarpur', 728, 'IND', 26.12, 85.4),
(9548, 'Rondonópolis', 1457, 'BRA', -16.47, -54.63),
(9981, 'z.... TRIAL VERSION from MYIP.MS ....', 80, 'BRA', -19.82, -40.27),
(10162, 'Ajaccio', 1483, 'FRA', 41.92, 8.73),
(10196, 'Itanagar', 1334, 'IND', 27.1, 93.62),
(10354, 'Begusarai', 728, 'IND', 25.42, 86.13),
(10358, 'Jaypur', 317, 'IND', 18.85, 82.58),
(10739, 'Crato', 46, 'BRA', -7.23, -39.38),
(10936, 'Guarabira', 1293, 'BRA', -6.85, -35.48),
(11046, 'Biguglia', 1483, 'FRA', 42.62, 9.42),
(11180, 'Tabuleiro Do Norte', 46, 'BRA', -5.25, -38.12),
(11414, 'z.... TRIAL VERSION from MYIP.MS ....', 94, 'CHN', 36.79, 118.06),
(12462, 'Jiujiang', 1231, 'CHN', 29.62, 115.88),
(12661, 'Madgaon', 1334, 'IND', 15.3, 73.95),
(12805, 'Maceió', 1568, 'BRA', -9.67, -35.72),
(13251, 'z.... TRIAL VERSION from MYIP.MS ....', 317, 'IND', 22.2, 84.88),
(13310, 'Bhilai', 225, 'IND', 21.22, 81.43),
(13326, 'Rishikesh', 1200, 'IND', 30.12, 78.32),
(13333, 'Haridwar', 1200, 'IND', 29.97, 78.17),
(13413, 'Murici', 1568, 'BRA', -9.32, -35.93),
(13597, 'Pondicherry', 1596, 'IND', 11.93, 79.83),
(13652, 'Anápolis', 970, 'BRA', -16.33, -48.97),
(13669, 'Lichuan', 99, 'CHN', 30.3, 108.85),
(13687, 'Juazeiro Do Norte', 46, 'BRA', -7.2, -39.33),
(13749, 'Furiani', 1483, 'FRA', 42.65, 9.42),
(13880, 'Macau', 1269, 'BRA', -5.12, -36.63),
(13884, 'Xianyang', 268, 'CHN', 34.34, 108.71),
(14005, 'Hunyuan', 156, 'CHN', 39.7, 113.68),
(14207, 'z.... TRIAL VERSION from MYIP.MS ....', 1200, 'IND', 29.22, 78.95),
(14628, 'Speloncato', 1483, 'FRA', 42.57, 8.97),
(15367, 'Imphal', 1654, 'IND', 24.82, 93.95),
(15812, 'Jammu', 1312, 'IND', 32.73, 74.87),
(15961, 'Salvador', 1673, 'BRA', -10.17, -48.87),
(16094, 'Ananindeua', 701, 'BRA', -1.37, -48.38),
(16160, 'z.... TRIAL VERSION from MYIP.MS ....', 1334, 'IND', 15.4, 73.83),
(16190, 'Fengtai', 6, 'CHN', 39.85, 116.27),
(16259, 'Hengyang', 161, 'CHN', 26.89, 112.61),
(16264, 'Ujjain', 274, 'IND', 23.18, 75.77),
(16275, 'Dhanbad', 355, 'IND', 23.8, 86.45),
(16378, 'Itabuna', 121, 'BRA', -14.8, -39.27),
(17611, 'Nossa Senhora Do Socorro', 1011, 'BRA', -10.87, -37.12),
(17737, 'Bonfim', 1714, 'BRA', 3.08, -59.95),
(17979, 'Yalongwan', 178, 'CHN', 18.23, 109.7),
(18098, 'Luziânia', 970, 'BRA', -16.25, -47.93),
(18197, 'Ji-paraná', 1723, 'BRA', -10.83, -61.97),
(18404, 'z.... TRIAL VERSION from MYIP.MS ....', 274, 'IND', 26.22, 78.18),
(18582, 'z.... TRIAL VERSION from MYIP.MS ....', 77, 'CHN', 24.91, 118.59),
(18611, 'Bokaro', 355, 'IND', 23.78, 85.97),
(18695, 'Liaohe', 307, 'CHN', 43.73, 122.3),
(18796, 'Lhasa', 1736, 'CHN', 29.65, 91.1),
(18798, 'z.... TRIAL VERSION from MYIP.MS ....', 355, 'IND', 23.98, 85.35),
(18997, 'Yuzhou', 196, 'CHN', 34.16, 113.46),
(19012, 'Yinchuan', 1741, 'CHN', 38.47, 106.27),
(19021, 'Tongji', 182, 'CHN', 31.18, 103.5),
(19030, 'Jingzhou', 99, 'CHN', 30.35, 112.19),
(19032, 'Camaçari', 121, 'BRA', -12.48, -38.22),
(19039, 'Enshi', 99, 'CHN', 30.3, 109.48),
(19061, 'Kaitai', 600, 'CHN', 26.23, 109.13),
(19239, 'Ürümqi', 1751, 'CHN', 43.8, 87.58),
(19258, 'z.... TRIAL VERSION from MYIP.MS ....', 1293, 'BRA', -7.13, -34.93),
(19263, 'Delhi Sabzimandi', 100, 'IND', 28.68, 77.2),
(19269, 'Huangzhong', 1753, 'CHN', 36.5, 101.6),
(19498, 'Liaoyüan', 334, 'CHN', 43.51, 123.51),
(19523, 'Yünnan', 1178, 'CHN', 25.48, 100.58),
(19552, 'Brazlândia', 842, 'BRA', -15.68, -48.2),
(19663, 'z.... TRIAL VERSION from MYIP.MS ....', 99, 'CHN', 30.4, 114.83),
(19898, 'z.... TRIAL VERSION from MYIP.MS ....', 6, 'CHN', 39.98, 116.3),
(19925, 'z.... TRIAL VERSION from MYIP.MS ....', 100, 'IND', 28.57, 77.1),
(19935, 'z.... TRIAL VERSION from MYIP.MS ....', 196, 'CHN', 33.87, 113.07),
(19955, 'Samastipur', 728, 'IND', 25.85, 85.78),
(20013, 'Fortaleza', 1673, 'BRA', -5.98, -48.13),
(20245, 'Baotou', 178, 'CHN', 18.33, 109.53),
(20337, 'Nanping', 97, 'CHN', 29.09, 106.99),
(20370, 'Jiahe', 161, 'CHN', 25.55, 112.25),
(20435, 'Ning', 1310, 'CHN', 35.5, 107.92),
(20477, 'z.... TRIAL VERSION from MYIP.MS ....', 161, 'CHN', 26.23, 112.95),
(20537, 'Mandi', 1008, 'IND', 31.72, 76.92),
(20612, 'z.... TRIAL VERSION from MYIP.MS ....', 1483, 'FRA', 42.57, 8.75),
(20756, 'Mudanjiang', 123, 'CHN', 44.58, 129.6),
(20908, 'Chüan', 90, 'CHN', 25.95, 111.07),
(20937, 'Baodi', 64, 'CHN', 39.72, 117.3),
(21166, 'Aizawl', 1791, 'IND', 23.72, 92.72),
(21220, 'Srinagar', 1312, 'IND', 34.09, 74.8),
(21470, 'Kashi', 1751, 'CHN', 39.45, 75.98),
(21536, 'Japoatã', 1011, 'BRA', -10.33, -36.8),
(21544, 'Itumbiara', 970, 'BRA', -18.42, -49.22),
(21578, 'Youyi', 123, 'CHN', 46.78, 131.81),
(21700, 'Mianyang', 182, 'CHN', 31.47, 104.77),
(21729, 'Longnan', 1231, 'CHN', 24.9, 114.78),
(22001, 'z.... TRIAL VERSION from MYIP.MS ....', 46, 'BRA', -3.88, -40.38),
(22243, 'Shannan', 268, 'CHN', 33.53, 110.87),
(22740, 'São Bernardo', 1335, 'BRA', -3.37, -42.4),
(22772, 'Fenghua', 334, 'CHN', 43.3, 124.33),
(22793, 'Yongkang', 156, 'CHN', 37.63, 112.59),
(23177, 'z.... TRIAL VERSION from MYIP.MS ....', 1008, 'IND', 31.24, 77.04),
(23243, 'Tianheng', 90, 'CHN', 22.49, 110.04),
(23407, 'z.... TRIAL VERSION from MYIP.MS ....', 156, 'CHN', 37.1, 112.9),
(23661, 'z.... TRIAL VERSION from MYIP.MS ....', 90, 'CHN', 24.31, 109.39),
(23889, 'Wuwei', 1310, 'CHN', 37.93, 102.64),
(24182, 'Palmas', 1673, 'BRA', -10.22, -48.28),
(24330, 'z.... TRIAL VERSION from MYIP.MS ....', 1231, 'CHN', 27.8, 114.93),
(24394, 'z.... TRIAL VERSION from MYIP.MS ....', 121, 'BRA', -12.75, -38.17),
(24533, 'Baoding', 11, 'CHN', 38.85, 115.49),
(24777, 'Tefé', 838, 'BRA', -3.37, -64.7),
(24811, 'z.... TRIAL VERSION from MYIP.MS ....', 11, 'CHN', 38.32, 116.87),
(24819, 'Xiangshan', 182, 'CHN', 31.04, 105.19),
(25071, 'Haiyan', 1753, 'CHN', 36.89, 101),
(25097, 'Nova Olímpia', 1457, 'BRA', -14.82, -57.33),
(25359, 'Silvassa', 1846, 'IND', 20.27, 73.02),
(25466, 'Lasa', 1736, 'CHN', 29.65, 91.1),
(25620, 'z.... TRIAL VERSION from MYIP.MS ....', 970, 'BRA', -17.88, -51.72),
(25778, 'Huhehot', 307, 'CHN', 40.81, 111.65),
(25784, 'Karaikal', 1596, 'IND', 10.92, 79.83),
(25786, 'Korba', 225, 'IND', 22.35, 82.68),
(26150, 'Santo Antônio', 1269, 'BRA', -6.3, -35.45),
(26247, 'z.... TRIAL VERSION from MYIP.MS ....', 334, 'CHN', 43.92, 126.94),
(26490, 'z.... TRIAL VERSION from MYIP.MS ....', 182, 'CHN', 31.04, 105.98),
(26530, 'Shizuishan', 1741, 'CHN', 39.04, 106.4),
(26916, 'Xining', 1753, 'CHN', 36.62, 101.77),
(26930, 'Xinyuan', 1751, 'CHN', 43.45, 83.15),
(26936, 'Fengxiang', 268, 'CHN', 34.52, 107.39),
(28156, 'Hong', 1874, 'IND', 27.57, 93.85),
(28491, 'z.... TRIAL VERSION from MYIP.MS ....', 268, 'CHN', 34.65, 109.95),
(28562, 'Gannan', 123, 'CHN', 47.91, 123.5),
(28975, 'z.... TRIAL VERSION from MYIP.MS ....', 123, 'CHN', 50.25, 125.47),
(29140, 'Dong', 1178, 'CHN', 28.5, 98.87),
(29678, 'Santa Isabel Do Pará', 701, 'BRA', -1.27, -48.18),
(29753, 'z.... TRIAL VERSION from MYIP.MS ....', 416, 'IND', 26.33, 90.67),
(29818, 'Cuiabá', 1457, 'BRA', -15.58, -56.08),
(30109, 'z.... TRIAL VERSION from MYIP.MS ....', 728, 'IND', 25.25, 87),
(30346, 'z.... TRIAL VERSION from MYIP.MS ....', 701, 'BRA', -1.88, -48.77),
(30811, 'Jiayuguan', 1310, 'CHN', 39.82, 98.3),
(30820, 'z.... TRIAL VERSION from MYIP.MS ....', 1310, 'CHN', 35.54, 106.69),
(31103, 'Parnaíba', 1297, 'BRA', -2.91, -41.77),
(32167, 'Pudong', 62, 'CHN', 31.24, 121.5),
(32668, 'Agartala', 1918, 'IND', 23.84, 91.28),
(33109, 'São José De Ribamar', 1335, 'BRA', -2.55, -44.05),
(33134, 'z.... TRIAL VERSION from MYIP.MS ....', 178, 'CHN', 18.79, 109.77),
(33154, 'Ceilândia', 842, 'BRA', -15.82, -48.12),
(34046, 'Marechal Deodoro', 1568, 'BRA', -9.72, -35.9),
(34232, 'Kaiyuan', 1178, 'CHN', 23.71, 103.25),
(34757, 'Taiping', 97, 'CHN', 29.9, 106.04),
(35007, 'Eldorado', 1102, 'BRA', -23.78, -54.32),
(35293, 'Wuma', 600, 'CHN', 27.64, 106.25),
(35792, 'Pôrto Velho', 1723, 'BRA', -8.77, -63.9),
(37024, 'Jing', 1751, 'CHN', 44.65, 82.83),
(37198, 'Daan', 97, 'CHN', 29.38, 106.01),
(37384, 'z.... TRIAL VERSION from MYIP.MS ....', 1178, 'CHN', 25.33, 103.63),
(37496, 'z.... TRIAL VERSION from MYIP.MS ....', 600, 'CHN', 26, 105.08),
(37696, 'z.... TRIAL VERSION from MYIP.MS ....', 97, 'CHN', 29.57, 106),
(41443, 'Huochezhan', 1741, 'CHN', 38.96, 106.47),
(41456, 'Zhangpu', 236, 'CHN', 32.76, 118.79),
(41598, 'z.... TRIAL VERSION from MYIP.MS ....', 1751, 'CHN', 43.88, 81.25),
(41651, 'Shou', 236, 'CHN', 32.57, 116.77),
(41664, 'Xiangyang', 236, 'CHN', 29.93, 117.94),
(41683, 'z.... TRIAL VERSION from MYIP.MS ....', 236, 'CHN', 32.9, 115.82),
(41822, 'Kecheng', 1753, 'CHN', 37.08, 97.69),
(41856, 'Lang', 1736, 'CHN', 29.05, 93.2),
(41872, 'Putuo', 62, 'CHN', 31.24, 121.42),
(41885, 'Yuan', 62, 'CHN', 31.53, 121.84),
(41907, 'Jianming', 64, 'CHN', 39, 117.31),
(41916, 'z.... TRIAL VERSION from MYIP.MS ....', 1753, 'CHN', 35.75, 100.25),
(47012, 'Tanggu', 64, 'CHN', 39.02, 117.65),
(62738, 'z.... TRIAL VERSION from MYIP.MS ....', 225, 'IND', 22.08, 82.15),
(62773, 'Tongliao', 307, 'CHN', 43.61, 122.27),
(62786, 'Huibei', 1741, 'CHN', 38.98, 106.65),
(62903, 'z.... TRIAL VERSION from MYIP.MS ....', 307, 'CHN', 40.81, 111.65),
(63008, 'z.... TRIAL VERSION from MYIP.MS ....', 1312, 'IND', 32.98, 74.86),
(63095, 'Nima', 1736, 'CHN', 31.92, 87.88),
(63097, 'z.... TRIAL VERSION from MYIP.MS ....', 1736, 'CHN', 29.38, 85.37),
(63186, 'z.... TRIAL VERSION from MYIP.MS ....', 1741, 'CHN', 39.04, 106.4),
(63323, 'Lagarto', 1011, 'BRA', -10.9, -37.68),
(63341, 'Rio Verde De Mato Grosso', 1102, 'BRA', -18.93, -54.87),
(64419, 'z.... TRIAL VERSION from MYIP.MS ....', 842, 'BRA', -15.83, -47.9),
(64681, 'São Miguel Dos Campos', 1568, 'BRA', -9.78, -36.08),
(66383, 'São Paulo', 2113, 'BRA', -23.53, -46.62),
(66490, 'Mercês', 2116, 'BRA', -9.52, -68.7),
(66621, 'Cacoal', 1723, 'BRA', -11.5, -61.42),
(66622, 'Rio Branco', 2116, 'BRA', -9.97, -67.8),
(66623, 'Ariquemes', 1723, 'BRA', -9.93, -63.07),
(66654, 'Imperatriz', 1335, 'BRA', -5.53, -47.48),
(66664, 'z.... TRIAL VERSION from MYIP.MS ....', 1102, 'BRA', -21.87, -56.53),
(66696, 'Barra Do Garças', 1457, 'BRA', -15.88, -52.25),
(66701, 'Mossoró', 1269, 'BRA', -5.19, -37.34),
(66702, 'Macapá', 2113, 'BRA', 0.03, -51.05),
(66706, 'z.... TRIAL VERSION from MYIP.MS ....', 1723, 'BRA', -12.31, -60.64),
(66713, 'Pádua', 838, 'BRA', -7.33, -62.92),
(66723, 'z.... TRIAL VERSION from MYIP.MS ....', 1335, 'BRA', -7.52, -46.03),
(66726, 'Caracaraí', 1714, 'BRA', 1.83, -61.13),
(66727, 'Boa Vista', 1714, 'BRA', 2.82, -60.67),
(66739, 'Araguaína', 1673, 'BRA', -7.16, -48.06),
(66740, 'z.... TRIAL VERSION from MYIP.MS ....', 1673, 'BRA', -11.72, -49.01),
(66741, 'Cocal', 1297, 'BRA', -3.47, -41.57),
(66752, 'Júlia', 838, 'BRA', -1.62, -67.98),
(66772, 'z.... TRIAL VERSION from MYIP.MS ....', 1457, 'BRA', -15.65, -56.13),
(66807, 'z.... TRIAL VERSION from MYIP.MS ....', 1011, 'BRA', -10.8, -37.17),
(66826, 'z.... TRIAL VERSION from MYIP.MS ....', 1269, 'BRA', -5.6, -35.62),
(66854, 'z.... TRIAL VERSION from MYIP.MS ....', 1568, 'BRA', -10.28, -36.4),
(66910, 'z.... TRIAL VERSION from MYIP.MS ....', 838, 'BRA', -4.07, -65.08),
(66921, 'z.... TRIAL VERSION from MYIP.MS ....', 1297, 'BRA', -4.48, -41.5),
(66936, 'Oiapoque', 2113, 'BRA', 3.83, -51.83),
(67011, 'Consolação', 1714, 'BRA', 3.93, -60.98),
(67207, 'z.... TRIAL VERSION from MYIP.MS ....', 62, 'CHN', 30.88, 121.87),
(67585, 'z.... TRIAL VERSION from MYIP.MS ....', 64, 'CHN', 39.14, 117.18),
(75660, 'z.... TRIAL VERSION from MYIP.MS ....', 1714, 'BRA', 3.83, -60.22),
(75883, 'Gangtok', 2320, 'IND', 27.33, 88.62),
(77715, 'Kohima', 2370, 'IND', 25.67, 94.12),
(79131, 'Minas Gerais', 2116, 'BRA', -8.97, -72.78),
(79674, 'Washington D.c', 249, 'USA', 38.9, -77.04);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `countryName` varchar(52) NOT NULL DEFAULT '',
  `localName` varchar(45) NOT NULL,
  `webCode` varchar(2) NOT NULL,
  `region` varchar(26) NOT NULL,
  `continent` enum('Asia','Europe','North America','Africa','Oceania','Antarctica','South America') NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `surfaceArea` float(10,2) NOT NULL DEFAULT '0.00',
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`countryID`),
  UNIQUE KEY `webCode` (`webCode`),
  UNIQUE KEY `countryName` (`countryName`),
  KEY `region` (`region`),
  KEY `continent` (`continent`),
  KEY `population` (`population`),
  KEY `surfaceArea` (`surfaceArea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countryID`, `countryName`, `localName`, `webCode`, `region`, `continent`, `latitude`, `longitude`, `surfaceArea`, `population`) VALUES
('BRA', 'Brazil', 'Brasil', 'BR', 'South America', 'South America', -10, -55, 8547403.00, 170115000),
('CHN', 'China', 'Zhongquo', 'CN', 'Eastern Asia', 'Asia', 35, 105, 9572900.00, 1277558000),
('FRA', 'France', '', 'FR', 'Western Europe', 'Europe', 47, 2, 551500.00, 59225700),
('IND', 'India', 'Bharat/India', 'IN', 'Southern and Central Asia', 'Asia', 28.47, 77.03, 3287263.00, 1013662000),
('USA', 'USA', 'United States', 'US', 'North America', 'North America', 38, -97, 9363520.00, 278357000);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `stateID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `stateName` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL,
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`stateID`),
  KEY `stateName` (`stateName`),
  KEY `countryID` (`countryID`),
  KEY `unq1` (`countryID`,`stateName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2371 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`stateID`, `stateName`, `countryID`, `latitude`, `longitude`) VALUES
(5, 'California', 'USA', 37.42, -122.06),
(6, 'Beijing', 'CHN', 39.93, 116.39),
(9, 'Iowa', 'USA', 43.03, -96.09),
(10, 'New York', 'USA', 40.76, -73.97),
(11, 'Hebei', 'CHN', 39.89, 115.28),
(12, 'Jiangsu', 'CHN', 32.06, 118.78),
(14, 'New Jersey', 'USA', 39.82, -75.13),
(15, 'Massachusetts', 'USA', 42.56, -72.18),
(16, 'Connecticut', 'USA', 41.14, -73.26),
(17, 'Guangdong', 'CHN', 23.12, 113.25),
(19, 'Florida', 'USA', 28.05, -82.36),
(24, 'Texas', 'USA', 30.27, -97.74),
(28, 'Armed Forces US', 'USA', 60, -100),
(32, 'Tennessee', 'USA', 35.04, -89.93),
(33, 'Kentucky', 'USA', 39.02, -84.56),
(34, 'Ile-de-France', 'FRA', 48.8, 2.5),
(35, 'Georgia', 'USA', 33.84, -84.38),
(37, 'Rio de Janeiro', 'BRA', -22.9, -43.23),
(44, 'Illinois', 'USA', 42.05, -88.05),
(46, 'Ceara', 'BRA', -3.32, -41.42),
(47, 'Colorado', 'USA', 39.74, -104.98),
(48, 'Zhejiang', 'CHN', 28.02, 120.65),
(49, 'Utah', 'USA', 40.76, -111.89),
(52, 'Liaoning', 'CHN', 41.79, 123.43),
(56, 'Haryana', 'IND', 28.47, 77.03),
(57, 'Maryland', 'USA', 39.1, -76.88),
(62, 'Shanghai', 'CHN', 31, 121.41),
(64, 'Tianjin', 'CHN', 39.14, 117.18),
(72, 'South Carolina', 'USA', 33.92, -80.34),
(73, 'Montana', 'USA', 45.77, -110.93),
(76, 'Louisiana', 'USA', 29.91, -90.05),
(77, 'Fujian', 'CHN', 24.47, 118.09),
(78, 'Santa Catarina', 'BRA', -26.48, -49.07),
(80, 'Espirito Santo', 'BRA', -20.12, -40.3),
(84, 'Washington', 'USA', 47.09, -122.65),
(85, 'Andhra Pradesh', 'IND', 17.38, 78.47),
(87, 'Pennsylvania', 'USA', 40.45, -79.99),
(90, 'Guangxi', 'CHN', 22.82, 108.32),
(93, 'North Carolina', 'USA', 35.75, -78.72),
(94, 'Shandong', 'CHN', 37.26, 117.08),
(97, 'Chongqing', 'CHN', 29.56, 106.55),
(98, 'Michigan', 'USA', 43.93, -86.26),
(99, 'Hubei', 'CHN', 30.58, 114.27),
(100, 'Delhi', 'IND', 28.67, 77.22),
(101, 'Arkansas', 'USA', 36.19, -94.24),
(107, 'Wisconsin', 'USA', 44.63, -90.2),
(112, 'Midi-Pyrenees', 'FRA', 43.73, 1.42),
(116, 'Picardie', 'FRA', 49.02, 1.9),
(121, 'Bahia', 'BRA', -12.98, -38.52),
(123, 'Heilongjiang', 'CHN', 45.75, 126.65),
(128, 'Tamil Nadu', 'IND', 13.08, 80.28),
(129, 'Ohio', 'USA', 39.11, -84.5),
(132, 'New Mexico', 'USA', 35.78, -105.87),
(133, 'Kansas', 'USA', 37.69, -97.34),
(136, 'Oregon', 'USA', 45.44, -122.97),
(138, 'Uttar Pradesh', 'IND', 27.18, 78.02),
(140, 'Nebraska', 'USA', 41.11, -95.93),
(143, 'West Virginia', 'USA', 39.46, -77.95),
(144, 'Virginia', 'USA', 37.13, -76.45),
(145, 'Missouri', 'USA', 38.25, -94.31),
(148, 'Mississippi', 'USA', 32.37, -90.11),
(151, 'Rhode Island', 'USA', 41.82, -71.41),
(155, 'Sao Paulo', 'BRA', -23.95, -46.33),
(156, 'Shanxi', 'CHN', 37.9, 112.19),
(160, 'Karnataka', 'IND', 12.98, 77.58),
(161, 'Hunan', 'CHN', 26.97, 109.77),
(163, 'Indiana', 'USA', 39.79, -86.17),
(164, 'Oklahoma', 'USA', 34.66, -98.48),
(175, 'Minnesota', 'USA', 44.98, -93.27),
(176, 'Alabama', 'USA', 33.8, -87.28),
(178, 'Hainan', 'CHN', 19.14, 110.48),
(181, 'Arizona', 'USA', 33.46, -111.99),
(182, 'Sichuan', 'CHN', 30.67, 104.07),
(186, 'South Dakota', 'USA', 43.72, -98.03),
(187, 'Maharashtra', 'IND', 18.98, 72.83),
(192, 'Nevada', 'USA', 36.17, -115.28),
(196, 'Henan', 'CHN', 34.22, 113.77),
(206, 'Kerala', 'IND', 8.51, 76.96),
(215, 'New Hampshire', 'USA', 42.87, -71.39),
(218, 'Maine', 'USA', 44.08, -70.17),
(220, 'Hawaii', 'USA', 21.3, -157.79),
(225, 'Chhattisgarh', 'IND', 21.18, 81.28),
(236, 'Anhui', 'CHN', 31.86, 117.28),
(249, 'District of Columbia', 'USA', 38.9, -77.04),
(254, 'Delaware', 'USA', 39.62, -75.7),
(258, 'West Bengal', 'IND', 22.57, 88.37),
(268, 'Shaanxi', 'CHN', 34.26, 108.94),
(274, 'Madhya Pradesh', 'IND', 22.72, 75.83),
(284, 'Gujarat', 'IND', 23.03, 72.62),
(296, 'Franche-Comte', 'FRA', 47.63, 6.87),
(305, 'Idaho', 'USA', 48.39, -116.89),
(306, 'Rajasthan', 'IND', 26.92, 75.82),
(307, 'Nei Mongol', 'CHN', 49.2, 119.7),
(315, 'Alsace', 'FRA', 48.58, 7.75),
(317, 'Orissa', 'IND', 20.5, 85.83),
(334, 'Jilin', 'CHN', 43.88, 125.32),
(355, 'Jharkhand', 'IND', 23.35, 85.33),
(363, 'Chandigarh', 'IND', 30.74, 76.79),
(377, 'Punjab', 'IND', 30.9, 75.85),
(409, 'Languedoc-Roussillon', 'FRA', 43.4, 3.68),
(416, 'Assam', 'IND', 24.82, 92.8),
(431, 'Centre', 'FRA', 47.08, 2.4),
(469, 'Champagne-Ardenne', 'FRA', 49.42, 4.5),
(471, 'Bretagne', 'FRA', 48.77, 2.3),
(544, 'Rhone-Alpes', 'FRA', 45.75, 4.85),
(555, 'Nord-Pas-de-Calais', 'FRA', 50.75, 2.15),
(556, 'Lorraine', 'FRA', 48.68, 6.2),
(561, 'Rio Grande do Sul', 'BRA', -30.03, -51.2),
(563, 'Provence-Alpes-Cote d''Azur', 'FRA', 44.4, 4.93),
(586, 'Minas Gerais', 'BRA', -19.92, -43.93),
(598, 'Limousin', 'FRA', 45.85, 1.25),
(600, 'Guizhou', 'CHN', 26.58, 106.72),
(635, 'Haute-Normandie', 'FRA', 49.15, 1.33),
(649, 'Poitou-Charentes', 'FRA', 45.65, 0.15),
(667, 'Wyoming', 'USA', 44.78, -107.55),
(676, 'Daman and Diu', 'IND', 20.37, 72.9),
(701, 'Para', 'BRA', -1.27, -48.18),
(708, 'Basse-Normandie', 'FRA', 49.15, 0.23),
(728, 'Bihar', 'IND', 25.6, 85.12),
(729, 'Aquitaine', 'FRA', 45.12, 0.4),
(773, 'Parana', 'BRA', -25.42, -49.25),
(798, 'Auvergne', 'FRA', 46.28, 3.6),
(808, 'Pernambuco', 'BRA', -8.05, -34.9),
(822, 'Pays de la Loire', 'FRA', 47.47, 0.2),
(838, 'Amazonas', 'BRA', -3.11, -60.03),
(842, 'Distrito Federal', 'BRA', -15.78, -47.92),
(924, 'North Dakota', 'USA', 46.96, -97.68),
(937, 'Bourgogne', 'FRA', 47.8, 3.57),
(959, 'Vermont', 'USA', 44.49, -73.23),
(970, 'Goias', 'BRA', -15.93, -50.13),
(1008, 'Himachal Pradesh', 'IND', 31.1, 77.17),
(1011, 'Sergipe', 'BRA', -11.27, -37.43),
(1061, 'Alaska', 'USA', 61.52, -149.57),
(1102, 'Mato Grosso do Sul', 'BRA', -22.22, -54.8),
(1178, 'Yunnan', 'CHN', 25.04, 102.72),
(1200, 'Uttarakhand', 'IND', 30.32, 78.03),
(1203, 'Meghalaya', 'IND', 25.58, 91.87),
(1231, 'Jiangxi', 'CHN', 28.55, 115.93),
(1269, 'Rio Grande do Norte', 'BRA', -5.78, -35.22),
(1293, 'Paraiba', 'BRA', -7.22, -35.88),
(1297, 'Piaui', 'BRA', -5.08, -42.82),
(1310, 'Gansu', 'CHN', 36.06, 103.79),
(1312, 'Jammu and Kashmir', 'IND', 33.8, 74.26),
(1334, 'Goa', 'IND', 15.27, 73.92),
(1335, 'Maranhao', 'BRA', -2.52, -44.27),
(1457, 'Mato Grosso', 'BRA', -15.58, -56.08),
(1483, 'Corse', 'FRA', 41.92, 8.73),
(1568, 'Alagoas', 'BRA', -9.67, -35.72),
(1596, 'Puducherry', 'IND', 11.93, 79.83),
(1654, 'Manipur', 'IND', 24.82, 93.95),
(1673, 'Tocantins', 'BRA', -10.22, -48.28),
(1714, 'Roraima', 'BRA', 3.83, -60.22),
(1723, 'Rondonia', 'BRA', -10.67, -62.3),
(1736, 'Xizang', 'CHN', 29.65, 91.1),
(1741, 'Ningxia', 'CHN', 38.47, 106.27),
(1751, 'Xinjiang', 'CHN', 43.8, 87.58),
(1753, 'Qinghai', 'CHN', 36.5, 101.6),
(1791, 'Mizoram', 'IND', 23.72, 92.72),
(1846, 'Dadra and Nagar Haveli', 'IND', 20.27, 73.02),
(1874, 'Arunachal Pradesh', 'IND', 27.57, 93.85),
(1918, 'Tripura', 'IND', 23.84, 91.28),
(2113, 'Amapa', 'BRA', 0.03, -51.05),
(2116, 'Acre', 'BRA', -9.97, -67.8),
(2320, 'Sikkim', 'IND', 27.33, 88.62),
(2370, 'Nagaland', 'IND', 25.67, 94.12);

-- --------------------------------------------------------

--
-- Table structure for table `wz_about_award`
--

DROP TABLE IF EXISTS `wz_about_award`;
CREATE TABLE IF NOT EXISTS `wz_about_award` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL COMMENT 'news_category',
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `content_vi` text,
  `content_en` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_about_award`
--

INSERT INTO `wz_about_award` (`id`, `parent_id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `content_vi`, `content_en`, `status`, `changed`, `created`) VALUES
(1, 1, 'aaaaaaaaaa', 'bbbbbbbbb', 'aaaaaaaaaa', 'bbbbbbbbb', '<p>aaaaaaaaaaaaaa</p>\n', '<p>bbbbbbbbbbbbb</p>\n', 1, '2014-06-19 17:12:43', '2014-06-19 17:12:43'),
(2, 2, 'ccccccccc', 'ddddddddddddd', 'ccccccccc', 'ddddddddddddd', '<p>cccccccccccccccc</p>\r\n', '<p>ddddddddddddddd</p>\r\n', 1, '2014-07-02 17:41:28', '2014-06-19 17:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_logs`
--

DROP TABLE IF EXISTS `wz_admin_logs`;
CREATE TABLE IF NOT EXISTS `wz_admin_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT 'User ID',
  `mid` int(11) DEFAULT NULL COMMENT 'Module ID',
  `nid` int(11) DEFAULT NULL COMMENT 'Content ID',
  `type` varchar(64) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `data` text,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=236 ;

--
-- Dumping data for table `wz_admin_logs`
--

INSERT INTO `wz_admin_logs` (`id`, `uid`, `mid`, `nid`, `type`, `title`, `data`, `status`, `changed`, `created`) VALUES
(1, 1, 2, 8, 'edit', 'Nguyễn Huệ', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;,\\&quot;3\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;353\\&quot;,\\&quot;355\\&quot;]&quot;,&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7&quot;,&quot;description&quot;:&quot;teo teo&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfsdfsdf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;,\\&quot;kpop\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-10-24 17:26:27&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.755486\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68574330000001\\&quot;,\\&quot;address\\&quot;:\\&quot;24 Nguy\\\\u1ec5n V\\\\u0103n C\\\\u1eeb, C\\\\u1ea7u Kho, Qu\\\\u1eadn 5, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;nguyen-hue&quot;,&quot;youtube&quot;:&quot;BVc_YAJCemw&quot;,&quot;image&quot;:&quot;11&quot;}', 1, '2013-11-09 10:05:39', '2013-11-09 10:05:39'),
(2, 1, 2, 8, 'edit', 'Nguyễn Huệ 2', '{&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7 2&quot;,&quot;slug&quot;:&quot;nguyen-hue-2&quot;}', 1, '2013-11-09 10:06:11', '2013-11-09 10:06:11'),
(3, 1, 2, 9, 'delete', '', '{&quot;id&quot;:&quot;9&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;slug&quot;:&quot;tieu-de&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi dung&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2013\\/10\\/31\\/e9e019f284cb5110ec19e6da81933bc6_1383210203.jpg&quot;,&quot;youtube&quot;:&quot;TbhUCY2NmZE&quot;,&quot;datetime_picker&quot;:&quot;2013-10-30 17:02:09&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;status&quot;:&quot;0&quot;}', 1, '2013-11-09 10:10:59', '2013-11-09 10:10:59'),
(4, 1, 2, 8, 'delete', '', '{&quot;id&quot;:&quot;8&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7 2&quot;,&quot;slug&quot;:&quot;nguyen-hue-2&quot;,&quot;description&quot;:&quot;teo teo&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfsdfsdf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;11&quot;,&quot;video&quot;:&quot;2116da346fe9c1fe50516ef92a2a003e_1382602358.jpg&quot;,&quot;youtube&quot;:&quot;BVc_YAJCemw&quot;,&quot;datetime_picker&quot;:&quot;2013-10-24 17:26:27&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.755486\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68574330000001\\&quot;,\\&quot;address\\&quot;:\\&quot;24 Nguy\\\\u1ec5n V\\\\u0103n C\\\\u1eeb, C\\\\u1ea7u Kho, Qu\\\\u1eadn 5, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;2&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;,\\&quot;kpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;353\\&quot;,\\&quot;355\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;,\\&quot;3\\&quot;]&quot;,&quot;status&quot;:&quot;0&quot;}', 1, '2013-11-09 10:11:24', '2013-11-09 10:11:24'),
(5, 1, 2, 12, 'insert', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;[\\&quot;339\\&quot;]&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-09 11:12:20', '2013-11-09 11:12:20'),
(6, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;[\\&quot;339\\&quot;]&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 16:24:37', '2013-11-15 16:24:37'),
(7, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 16:25:51', '2013-11-15 16:25:51'),
(8, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#7a4e4e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 16:28:10', '2013-11-15 16:28:10'),
(9, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;rgba&quot;:&quot;#d45959&quot;,&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 16:32:52', '2013-11-15 16:32:52'),
(10, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 17:25:10', '2013-11-15 17:25:10'),
(11, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 17:43:47', '2013-11-15 17:43:47'),
(12, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 17:49:31', '2013-11-15 17:49:31'),
(13, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-16 16:41:18', '2013-11-16 16:41:18'),
(14, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;recursive&quot;:&quot;5&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-16 16:42:19', '2013-11-16 16:42:19'),
(15, 1, 2, 13, 'insert', 'TSL', '{&quot;rgba&quot;:&quot;#7d4c4c&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-12-17 15:30:33&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;title&quot;:&quot;TSL&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 TSL&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tsl&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2013-12-16 15:31:28', '2013-12-16 15:31:28'),
(16, 1, 2, 14, 'delete', '', '{&quot;id&quot;:&quot;14&quot;,&quot;recursive&quot;:null,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:null,&quot;title&quot;:&quot;Ngai Ngung - Agela Ph\\u01b0\\u01a1ng Trinh&quot;,&quot;slug&quot;:null,&quot;description&quot;:&quot;Taaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;dfdsfdsfdfdsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:null,&quot;video&quot;:null,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:null,&quot;maps&quot;:null,&quot;tags&quot;:null,&quot;radio&quot;:null,&quot;select&quot;:null,&quot;province&quot;:&quot;0&quot;,&quot;district&quot;:null,&quot;color&quot;:null,&quot;rgba&quot;:null,&quot;status&quot;:&quot;1&quot;}', 1, '2013-12-31 16:27:22', '2013-12-31 16:27:22'),
(17, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tieu-de&quot;,&quot;image&quot;:&quot;18&quot;}', 1, '2014-01-15 11:18:06', '2014-01-15 11:18:06'),
(18, 1, 2, 13, 'delete', '', '{&quot;id&quot;:&quot;13&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;title&quot;:&quot;TSL&quot;,&quot;slug&quot;:&quot;tsl&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 TSL&quot;,&quot;content&quot;:&quot;&lt;p&gt;sssssssss&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;1&quot;,&quot;video&quot;:&quot;2013\\/12\\/16\\/fd67946066ba7a688d2cc3fb8671bfaa_1387182682.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2013-12-17 15:30:33&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#7d4c4c&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-03-05 10:26:52', '2014-03-05 10:26:52'),
(19, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;kpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 10:46:24', '2014-03-14 10:46:24'),
(20, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 11:52:26', '2014-03-14 11:52:26'),
(21, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 12:06:16', '2014-03-14 12:06:16'),
(22, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 12:06:37', '2014-03-14 12:06:37'),
(23, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;uk&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 12:06:51', '2014-03-14 12:06:51'),
(24, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 14:17:42', '2014-03-14 14:17:42'),
(25, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 14:17:57', '2014-03-14 14:17:57'),
(26, 1, 2, 12, 'edit', '', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-19 10:40:18', '2014-03-19 10:40:18'),
(27, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-19 10:41:33', '2014-03-19 10:41:33'),
(28, 1, 2, 12, 'edit', 'Tieu de ne', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de ne&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de-ne&quot;}', 1, '2014-03-19 10:41:47', '2014-03-19 10:41:47'),
(29, 1, 2, 12, 'edit', 'ba dao chua ne', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-19 10:44:40', '2014-03-19 10:44:40'),
(30, 1, 2, 12, 'edit', 'ba dao chua ne', '{&quot;district&quot;:&quot;340&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 11:35:51', '2014-03-20 11:35:51'),
(31, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 11:52:00', '2014-03-20 11:52:00'),
(32, 1, 2, 12, 'edit', '', '{&quot;pid&quot;:&quot;2&quot;,&quot;district&quot;:&quot;340&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 11:52:16', '2014-03-20 11:52:16'),
(33, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 11:59:49', '2014-03-20 11:59:49'),
(34, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;district&quot;:&quot;340&quot;,&quot;title&quot;:&quot;&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 12:00:06', '2014-03-20 12:00:06'),
(35, 1, 2, 12, 'edit', '', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 12:01:52', '2014-03-20 12:01:52'),
(36, 1, 2, 15, 'insert', '', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 09:41:56', '2014-03-26 09:41:56'),
(37, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 09:43:08', '2014-03-26 09:43:08'),
(38, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;}', 1, '2014-03-26 14:57:26', '2014-03-26 14:57:26'),
(39, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:3,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 15:13:10', '2014-03-26 15:13:10'),
(40, 1, 9, 4, 'insert', 'Áo thun', '{&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-03-27 10:10:45', '2014-03-27 10:10:45'),
(41, 1, 9, 4, 'edit', 'Áo thun', '{&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-03-27 10:33:37', '2014-03-27 10:33:37'),
(42, 1, 9, 2, 'delete', '', '{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:null}', 1, '2014-03-27 11:45:29', '2014-03-27 11:45:29'),
(43, 1, 9, 3, 'delete', '', '{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:null}', 1, '2014-03-27 11:45:41', '2014-03-27 11:45:41'),
(44, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;}', 1, '2014-03-27 14:39:46', '2014-03-27 14:39:46'),
(45, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:3,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-27 14:39:59', '2014-03-27 14:39:59'),
(46, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;Tran&quot;}', 1, '2014-04-02 10:20:12', '2014-04-02 10:20:12'),
(47, 1, 2, 16, 'insert', 'Teee', '{&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2014-04-04 14:42:06', '2014-04-04 14:42:06'),
(48, 1, 9, 5, 'insert', 'Test sản phẩm', '{&quot;name&quot;:&quot;Test s\\u1ea3n ph\\u1ea9m&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 s\\u1ea3n ph\\u1ea9m&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;355&quot;,&quot;date&quot;:&quot;2014-04-04 16:08:03&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 16:08:43', '2014-04-04 16:08:43'),
(49, 1, 9, 5, 'delete', '', '{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;Test s\\u1ea3n ph\\u1ea9m&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;0&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 s\\u1ea3n ph\\u1ea9m&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-04-04 16:08:03&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;355&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 16:13:36', '2014-04-04 16:13:36'),
(50, 1, 9, 4, 'delete', '', '{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/03\\/27\\/a97e1a35b6114e7f2c9321ec8bd7e77f_1395891213.jpg&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 16:13:36', '2014-04-04 16:13:36'),
(51, 1, 9, 6, 'insert', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 17:09:13', '2014-04-04 17:09:13'),
(52, 1, 9, 7, 'insert', 'Test 2', '{&quot;name&quot;:&quot;Test 2&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test 2&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-15 17:09:21&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 17:09:49', '2014-04-04 17:09:49'),
(53, 1, 9, 7, 'delete', '', '{&quot;id&quot;:&quot;7&quot;,&quot;name&quot;:&quot;Test 2&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;0&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test 2&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-04-15 17:09:21&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 17:10:04', '2014-04-04 17:10:04'),
(54, 1, 2, 16, 'edit', 'Teee', '{&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;http:\\/\\/local.adminwz.com\\/uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2014-04-04 17:59:53', '2014-04-04 17:59:53'),
(55, 1, 2, 16, 'edit', 'Teee', '{&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-04 18:01:08', '2014-04-04 18:01:08'),
(56, 1, 2, 16, 'edit', 'Teee', '{&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 00:28:16', '2014-04-05 00:28:16'),
(57, 1, 2, 16, 'delete', '', '{&quot;id&quot;:&quot;16&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;slug&quot;:&quot;teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2014\\/04\\/04\\/fc91bc08efd4fbdff7b7a2e3cf38fede_1396597310.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49'),
(58, 1, 2, 15, 'delete', '', '{&quot;id&quot;:&quot;15&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;mo ta test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2014\\/03\\/26\\/ef98d7998e2ec1a47382203e93b19da6_1395801781.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;Tran&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49'),
(59, 1, 2, 12, 'delete', '', '{&quot;id&quot;:&quot;12&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;&quot;,&quot;slug&quot;:&quot;&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;19&quot;,&quot;video&quot;:&quot;2013\\/11\\/15\\/b5ee053697241790a215187f6a85a510_1384512570.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;340&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49'),
(60, 1, 2, 17, 'insert', 'Tran', '{&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Tran&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 09:29:35', '2014-04-05 09:29:35'),
(61, 1, 2, 17, 'edit', 'Tran', '{&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Tran&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 09:43:24', '2014-04-05 09:43:24'),
(62, 1, 10, 1, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:28:10', '2014-04-05 10:28:10'),
(63, 1, 10, 2, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:29:27', '2014-04-05 10:29:27'),
(64, 1, 10, 3, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:30:30', '2014-04-05 10:30:30'),
(65, 1, 10, 3, 'delete', '', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38'),
(66, 1, 10, 2, 'delete', '', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38'),
(67, 1, 10, 1, 'delete', '', '{&quot;id&quot;:&quot;1&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;datepost&quot;:null,&quot;tags&quot;:&quot;1&quot;,&quot;status&quot;:null}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38'),
(68, 1, 10, 4, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:31:18', '2014-04-05 10:31:18'),
(69, 1, 10, 5, 'insert', 'Tesss', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Tesss&quot;,&quot;slug&quot;:&quot;tesss&quot;,&quot;description&quot;:&quot;Mo taa&quot;,&quot;content&quot;:&quot;&lt;p&gt;Content&lt;\\/p&gt;\\r\\n&quot;,&quot;gallery&quot;:&quot;2&quot;}', 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28'),
(70, 1, 11, 2, 'insert', 'Tin tức', '{&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;gallery&quot;:&quot;4&quot;}', 1, '2014-04-05 11:28:45', '2014-04-05 11:28:45'),
(71, 1, 11, 2, 'edit', 'Tin tức', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747231\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67619869999999\\&quot;,\\&quot;address\\&quot;:\\&quot;198-232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:1,&quot;gallery&quot;:&quot;4&quot;}', 1, '2014-04-05 11:31:24', '2014-04-05 11:31:24'),
(72, 1, 11, 2, 'edit', 'Tin tức', '{&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 11:36:12', '2014-04-05 11:36:12');
INSERT INTO `wz_admin_logs` (`id`, `uid`, `mid`, `nid`, `type`, `title`, `data`, `status`, `changed`, `created`) VALUES
(73, 1, 11, 2, 'delete', '', '{&quot;id&quot;:&quot;2&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;image&quot;:&quot;2014\\/04\\/05\\/6d2b91e7f32000897ad4bd9b9932bc77_1396672006.jpg&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;gallery&quot;:&quot;4&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;meta_keyword&quot;:null,&quot;meta_description&quot;:null,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-08 10:19:21', '2014-04-08 10:19:21'),
(74, 1, 11, 1, 'delete', '', '{&quot;image&quot;:&quot;2014\\/04\\/05\\/74522ccfc9dccd84fc964151ff5de2fb_1396671732.jpg&quot;}', 1, '2014-04-08 10:19:21', '2014-04-08 10:19:21'),
(75, 1, 11, 3, 'insert', 'Test', '{&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;}', 1, '2014-04-08 10:23:03', '2014-04-08 10:23:03'),
(76, 1, 12, 1, 'insert', 'Test', '{&quot;link&quot;:&quot;https:\\/\\/www.google.com.vn\\/&quot;}', 1, '2014-04-08 10:30:54', '2014-04-08 10:30:54'),
(77, 1, 2, 17, 'edit', 'Tran', '{&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-08 15:51:38', '2014-04-08 15:51:38'),
(78, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 15:58:38', '2014-04-08 15:58:38'),
(79, 1, 2, 17, 'edit', 'Tran', '{&quot;ids&quot;:null,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-08 16:30:46', '2014-04-08 16:30:46'),
(80, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 16:33:22', '2014-04-08 16:33:22'),
(81, 1, 2, 18, 'insert', 'Tiêu đề 3', '{&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tieu-de-3&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;color&quot;:&quot;[\\&quot;4\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 16:34:01&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 16:34:49', '2014-04-08 16:34:49'),
(82, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-12 11:52:02', '2014-04-12 11:52:02'),
(83, 1, 11, 3, 'edit', 'Test', '{&quot;province&quot;:&quot;&quot;,&quot;ids&quot;:&quot;ebdbef68819&quot;,&quot;district&quot;:&quot;&quot;,&quot;pid&quot;:&quot;&quot;,&quot;article&quot;:&quot;&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test-ebdbef68819&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;,&quot;tags&quot;:1}', 1, '2014-04-12 11:59:02', '2014-04-12 11:59:02'),
(84, 1, 11, 3, 'edit', 'Tran Sang Lap', '{&quot;title&quot;:&quot;Tran Sang Lap&quot;,&quot;slug&quot;:&quot;tran-sang-lap-ebdbef68819&quot;}', 1, '2014-04-12 11:59:23', '2014-04-12 11:59:23'),
(85, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 10:50:51', '2014-04-14 10:50:51'),
(86, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 10:51:52', '2014-04-14 10:51:52'),
(87, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 10:54:16', '2014-04-14 10:54:16'),
(88, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:02:48', '2014-04-14 11:02:48'),
(89, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:03:16', '2014-04-14 11:03:16'),
(90, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:03:54', '2014-04-14 11:03:54'),
(91, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:04:05', '2014-04-14 11:04:05'),
(92, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:45:22', '2014-04-14 11:45:22'),
(93, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:45:50', '2014-04-14 11:45:50'),
(94, 1, 11, 3, 'edit', 'Tran Sang Lap', '{&quot;province&quot;:&quot;64&quot;,&quot;ids&quot;:&quot;ebdbef68819&quot;,&quot;district&quot;:&quot;352&quot;,&quot;pid&quot;:&quot;[\\&quot;1\\&quot;,\\&quot;2\\&quot;]&quot;,&quot;article&quot;:&quot;14&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 10:34:31', '2014-04-15 10:34:31'),
(95, 1, 11, 4, 'insert', 'Test', '{&quot;province&quot;:&quot;64&quot;,&quot;ids&quot;:&quot;fc7dab6d7d4&quot;,&quot;district&quot;:&quot;352&quot;,&quot;pid&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;article&quot;:&quot;4&quot;,&quot;slug&quot;:&quot;test-fc7dab6d7d4&quot;,&quot;description&quot;:&quot;AAAA&quot;,&quot;content&quot;:&quot;&lt;p&gt;Aaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 11:16:31', '2014-04-15 11:16:31'),
(96, 1, 11, 5, 'insert', 'Teaa', '{&quot;province&quot;:&quot;76&quot;,&quot;ids&quot;:&quot;a4112141130&quot;,&quot;district&quot;:&quot;338&quot;,&quot;pid&quot;:&quot;[\\&quot;1\\&quot;]&quot;,&quot;article&quot;:&quot;14&quot;,&quot;title&quot;:&quot;Teaa&quot;,&quot;slug&quot;:&quot;teaa-a4112141130&quot;,&quot;description&quot;:&quot;aaaaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;aaaaaaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 11:20:39', '2014-04-15 11:20:39'),
(97, 1, 9, 6, 'edit', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-15 11:43:41', '2014-04-15 11:43:41'),
(98, 1, 9, 6, 'edit', 'Test', '{&quot;tags&quot;:2}', 1, '2014-04-15 11:43:58', '2014-04-15 11:43:58'),
(99, 1, 9, 6, 'edit', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:3,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12'),
(100, 1, 9, 6, 'edit', 'Test', '{&quot;tags&quot;:4}', 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45'),
(101, 1, 9, 8, 'insert', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 17:32:52', '2014-04-15 17:32:52'),
(102, 1, 9, 9, 'insert', 'ABC', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;ABC&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-16 11:25:26', '2014-04-16 11:25:26'),
(103, 1, 2, 19, 'insert', 'Teaaaaa', '{&quot;title&quot;:&quot;Teaaaaa&quot;,&quot;ids&quot;:&quot;1a2faa8ff61&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;teaaaaa-1a2faa8ff61&quot;,&quot;rgba&quot;:&quot;#7e3636&quot;,&quot;color&quot;:&quot;3&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-16&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;353&quot;,&quot;description&quot;:&quot;AAAAAAAa&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAAAAAAA&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7920536\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67721389999997\\&quot;,\\&quot;address\\&quot;:\\&quot;223 Hu\\\\u1ef3nh V\\\\u0103n B\\\\u00e1nh, 12, Ph\\\\u00fa Nhu\\\\u1eadn, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 11:59:25', '2014-04-16 11:59:25'),
(104, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-16 12:01:36', '2014-04-16 12:01:36'),
(105, 1, 9, 8, 'edit', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-16 14:48:49', '2014-04-16 14:48:49'),
(106, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 15:19:13', '2014-04-16 15:19:13'),
(107, 1, 2, 19, 'delete', '', '{&quot;id&quot;:&quot;19&quot;,&quot;ids&quot;:&quot;1a2faa8ff61&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Teaaaaa&quot;,&quot;slug&quot;:&quot;teaaaaa-1a2faa8ff61&quot;,&quot;description&quot;:&quot;AAAAAAAa&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAAAAAAA&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;1&quot;,&quot;video&quot;:&quot;2014\\/04\\/16\\/1f47484e6ea15e557aedb142a3aea2a8_1397624364.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-16&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7920536\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67721389999997\\&quot;,\\&quot;address\\&quot;:\\&quot;223 Hu\\\\u1ef3nh V\\\\u0103n B\\\\u00e1nh, 12, Ph\\\\u00fa Nhu\\\\u1eadn, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;353&quot;,&quot;color&quot;:&quot;3&quot;,&quot;rgba&quot;:&quot;#7e3636&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-16 16:20:00', '2014-04-16 16:20:00'),
(108, 1, 2, 18, 'edit', 'Tiêu đề 3', '{&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;image&quot;:&quot;6&quot;,&quot;slug&quot;:&quot;tieu-de-3-a17cfacffa6&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;color&quot;:&quot;4&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 16:21:01', '2014-04-16 16:21:01'),
(109, 1, 2, 18, 'delete', '', '{&quot;id&quot;:&quot;18&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;slug&quot;:&quot;tieu-de-3-a17cfacffa6&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;6&quot;,&quot;video&quot;:&quot;2014\\/04\\/08\\/20e3877e6bfbb69bee1f2fc1dcf900e0_1396949688.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;2&quot;,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;color&quot;:&quot;4&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-16 16:23:14', '2014-04-16 16:23:14'),
(110, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-17 11:05:55', '2014-04-17 11:05:55'),
(111, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-17 11:06:16', '2014-04-17 11:06:16'),
(112, 1, 2, 20, 'insert', 'Tesss', '{&quot;title&quot;:&quot;Tesss&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tesss&quot;,&quot;rgba&quot;:&quot;#6a3333&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;761da2c26eb&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;aaa&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;40.46366700000001\\&quot;,\\&quot;lng\\&quot;:\\&quot;-3.7492200000000366\\&quot;,\\&quot;address\\&quot;:\\&quot;Spain\\&quot;}&quot;}', 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26'),
(113, 1, 2, 21, 'insert', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;80e30a996ed&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-17 15:40:31', '2014-04-17 15:40:31'),
(114, 1, 2, 21, 'edit', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;8pgnxosI0aR&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:21:44', '2014-04-18 14:21:44'),
(115, 1, 2, 21, 'edit', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:21:06', '2014-04-18 14:21:06'),
(116, 1, 2, 22, 'insert', 'Dfdsfdf', '{&quot;title&quot;:&quot;Dfdsfdf&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;dfdsfdf&quot;,&quot;rgba&quot;:&quot;#866060&quot;,&quot;color&quot;:&quot;4&quot;,&quot;ids&quot;:&quot;80tpGOrdEsh&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;fdsfdf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-18&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;description&quot;:&quot;dfsdfdsf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02'),
(117, 1, 2, 23, 'insert', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;sfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:26:06', '2014-04-18 14:26:06'),
(118, 1, 11, 5, 'edit', 'Teaa', '{&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;ids&quot;:&quot;a4112141130&quot;,&quot;district&quot;:&quot;338&quot;,&quot;article&quot;:&quot;14&quot;,&quot;title&quot;:&quot;Teaa&quot;,&quot;slug&quot;:&quot;teaa-a4112141130&quot;,&quot;description&quot;:&quot;aaaaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;aaaaaaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-21 14:11:28', '2014-04-21 14:11:28'),
(119, 1, 11, 5, 'edit', 'Title', '{&quot;title_en&quot;:&quot;Title&quot;,&quot;slug_vi&quot;:&quot;tieu-de&quot;,&quot;title_vi&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1&quot;,&quot;slug_en&quot;:&quot;title&quot;,&quot;province&quot;:&quot;79&quot;,&quot;district&quot;:&quot;566&quot;}', 1, '2014-04-21 15:15:36', '2014-04-21 15:15:36'),
(120, 1, 9, 8, 'edit', 'Sandal', '{&quot;price&quot;:&quot;11111111&quot;}', 1, '2014-04-21 17:07:55', '2014-04-21 17:07:55'),
(121, 1, 9, 8, 'edit', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-21 17:08:12', '2014-04-21 17:08:12'),
(122, 1, 9, 8, 'edit', 'Sandal', '{&quot;price&quot;:&quot;11111111&quot;}', 1, '2014-04-21 17:09:58', '2014-04-21 17:09:58'),
(123, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;sfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-22 14:56:57', '2014-04-22 14:56:57'),
(124, 1, 9, 8, 'delete', '', '{&quot;name&quot;:&quot;Sandal&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/04\\/15\\/c57104bdfab22d2a58a062c402322cb0_1397557946.jpg&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;maps&quot;:null,&quot;price&quot;:&quot;11111111&quot;,&quot;date&quot;:null,&quot;youtube&quot;:null,&quot;province&quot;:null,&quot;district&quot;:null,&quot;recursive&quot;:null,&quot;select&quot;:null,&quot;checkbox&quot;:null,&quot;radio&quot;:null}', 1, '2014-04-24 12:01:58', '2014-04-24 12:01:58'),
(125, 1, 9, 9, 'delete', '', '{&quot;name&quot;:&quot;ABC&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/04\\/16\\/b0d7e1078ba98e8af429cbe471686f55_1397622213.jpg&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;maps&quot;:null,&quot;price&quot;:null,&quot;date&quot;:null,&quot;youtube&quot;:null,&quot;province&quot;:null,&quot;district&quot;:null,&quot;recursive&quot;:null,&quot;select&quot;:null,&quot;checkbox&quot;:null,&quot;radio&quot;:null}', 1, '2014-04-24 12:02:21', '2014-04-24 12:02:21'),
(126, 1, 9, 10, 'insert', 'Taa', '{&quot;price&quot;:&quot;111111&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Taa&quot;,&quot;description&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57'),
(127, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-25 10:56:02', '2014-04-25 10:56:02'),
(128, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;3&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:12:31', '2014-05-08 10:12:31'),
(129, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;image&quot;:&quot;4&quot;}', 1, '2014-05-08 10:18:28', '2014-05-08 10:18:28'),
(130, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:19:33', '2014-05-08 10:19:33'),
(131, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;image&quot;:&quot;4&quot;}', 1, '2014-05-08 10:19:54', '2014-05-08 10:19:54'),
(132, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;3&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:20:06', '2014-05-08 10:20:06'),
(133, 1, 22, 1, 'insert', 'aaaaaaaaaaaa', '{&quot;parent&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;aaaaaaaaaaaaa&quot;,&quot;slug_en&quot;:&quot;aaaaaaaaaaaa&quot;}', 1, '2014-06-18 15:43:20', '2014-06-18 15:43:20'),
(134, 1, 24, 1, 'insert', 'IN THE NEWS', '{&quot;name_vi&quot;:&quot;IN THE NEWS&quot;,&quot;slug_vi&quot;:&quot;in-the-news&quot;,&quot;name_en&quot;:&quot;TIN T\\u1ee8C&quot;,&quot;slug_en&quot;:&quot;in-the-news&quot;}', 1, '2014-06-18 16:13:30', '2014-06-18 16:13:30'),
(135, 1, 24, 1, 'delete', '', '{&quot;id&quot;:&quot;1&quot;,&quot;parent&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;IN THE NEWS&quot;,&quot;name_en&quot;:&quot;TIN T\\u1ee8C&quot;,&quot;slug_vi&quot;:&quot;in-the-news&quot;,&quot;slug_en&quot;:&quot;in-the-news&quot;,&quot;status&quot;:&quot;0&quot;}', 1, '2014-06-18 16:15:35', '2014-06-18 16:15:35'),
(136, 1, 24, 2, 'insert', 'IN THE NEWS', '{&quot;parent&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;IN THE NEWS&quot;,&quot;slug_vi&quot;:&quot;in-the-news&quot;,&quot;name_en&quot;:&quot;TIN T\\u1ee8C&quot;}', 1, '2014-06-18 16:15:47', '2014-06-18 16:15:47'),
(137, 1, 24, 2, 'edit', 'TIN TỨC', '{&quot;parent&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;TIN T\\u1ee8C&quot;,&quot;slug_vi&quot;:&quot;tin-tuc&quot;,&quot;name_en&quot;:&quot;IN THE NEWS&quot;,&quot;slug_en&quot;:&quot;in-the-news&quot;}', 1, '2014-06-18 16:20:34', '2014-06-18 16:20:34'),
(138, 1, 344, 1, 'insert', 'tìm kiếm điều hành', '{&quot;name_vi&quot;:&quot;t\\u00ecm ki\\u1ebfm \\u0111i\\u1ec1u h\\u00e0nh&quot;,&quot;slug_vi&quot;:&quot;tim-kiem-dieu-hanh&quot;,&quot;name_en&quot;:&quot;executive search&quot;,&quot;slug_en&quot;:&quot;executive-search&quot;}', 1, '2014-06-19 10:01:24', '2014-06-19 10:01:24'),
(139, 1, 344, 1, 'edit', 'tìm kiếm điều hành', '{&quot;name_vi&quot;:&quot;t\\u00ecm ki\\u1ebfm \\u0111i\\u1ec1u h\\u00e0nh&quot;,&quot;slug_vi&quot;:&quot;tim-kiem-dieu-hanh&quot;,&quot;name_en&quot;:&quot;executive search&quot;,&quot;slug_en&quot;:&quot;executive-search&quot;}', 1, '2014-06-19 10:02:06', '2014-06-19 10:02:06'),
(140, 1, 345, 1, 'insert', 'aaaaaaaaaaaa', '{&quot;category_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;zO3AX7rZjhn&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaaaa-zO3AX7rZjhn&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaa&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbbbbb--zO3AX7rZjhn&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-19 10:07:30', '2014-06-19 10:07:30'),
(141, 1, 346, 1, 'insert', 'aaaaaaaaaa', '{&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaa&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbb&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbb&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-19 17:12:43', '2014-06-19 17:12:43'),
(142, 1, 346, 2, 'insert', 'ccccccccc', '{&quot;parent_id&quot;:&quot;2&quot;,&quot;name_vi&quot;:&quot;ccccccccc&quot;,&quot;slug_vi&quot;:&quot;ccccccccc&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;cccccccccccccccc&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;ddddddddddddd&quot;,&quot;slug_en&quot;:&quot;ddddddddddddd&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;ddddddddddddddd&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-19 17:12:59', '2014-06-19 17:12:59'),
(143, 1, 347, 1, 'insert', 'aaaaaaaaa', '{&quot;is_home&quot;:&quot;[\\&quot;0\\&quot;]&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;industry_vi&quot;:&quot;aaaaaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;bbbbbbbbbbbbbbbb&quot;}', 1, '2014-06-19 17:34:54', '2014-06-19 17:34:54'),
(144, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;is_home&quot;:&quot;[\\&quot;0\\&quot;]&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;industry_vi&quot;:&quot;aaaaaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;bbbbbbbbbbbbbbbb&quot;}', 1, '2014-06-19 17:35:56', '2014-06-19 17:35:56'),
(145, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;is_home&quot;:&quot;false&quot;}', 1, '2014-06-19 17:36:02', '2014-06-19 17:36:02'),
(146, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;industry_vi&quot;:&quot;aaaaaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;bbbbbbbbbbbbbbbb&quot;}', 1, '2014-06-19 17:36:12', '2014-06-19 17:36:12'),
(147, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;is_home&quot;:&quot;[\\&quot;1\\&quot;]&quot;}', 1, '2014-06-19 17:37:07', '2014-06-19 17:37:07'),
(148, 1, 348, 1, 'insert', 'aaaaaaaaaa', '{&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa&quot;}', 1, '2014-06-19 17:51:46', '2014-06-19 17:51:46'),
(149, 1, 349, 1, 'insert', 'aaaaaaaaaa', '{&quot;position_vi&quot;:&quot;afasfsafasfasfasfasfa&quot;,&quot;name_en&quot;:&quot;bbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbb&quot;,&quot;position_en&quot;:&quot;agasgasgdsagsadgsa&quot;}', 1, '2014-06-20 09:57:55', '2014-06-20 09:57:55'),
(150, 1, 350, 1, 'insert', 'aaaaaaaaa', '{&quot;category_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;name_vi&quot;:&quot;dsfdsfds&quot;,&quot;slug_vi&quot;:&quot;dsfdsfds&quot;,&quot;position_vi&quot;:&quot;dsfdsfds&quot;,&quot;category_en&quot;:&quot;sdfdsfd&quot;,&quot;name_en&quot;:&quot;sfdsfds&quot;,&quot;slug_en&quot;:&quot;sfdsfds&quot;,&quot;position_en&quot;:&quot;fdsfds&quot;,&quot;email&quot;:&quot;sdfsdfds@yahoo.com&quot;,&quot;phone&quot;:&quot;01224086541&quot;}', 1, '2014-06-20 10:18:22', '2014-06-20 10:18:22'),
(151, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;industry_vi&quot;:&quot;aaaaaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;bbbbbbbbbbbbbbbb&quot;}', 1, '2014-06-20 16:02:44', '2014-06-20 16:02:44'),
(152, 1, 23, 1, 'insert', 'kjkhkhkh', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;11lCdn54s7m&quot;,&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;kjkhkhkh&quot;,&quot;slug_vi&quot;:&quot;kjkhkhkh-11lCdn54s7m&quot;,&quot;description_vi&quot;:&quot;jhjhkhhkh&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;kj,kn,n,nm,&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;kjkllklkj&quot;,&quot;slug_en&quot;:&quot;kjkllklkj--11lCdn54s7m&quot;,&quot;description_en&quot;:&quot;kjhjkhjkhjjk&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;jhjkhjkhjkhjh&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-20 17:02:29', '2014-06-20 17:02:29'),
(153, 1, 351, 2, 'edit', 'Tin Tức / Hoạt đông', '{&quot;name_vi&quot;:&quot;Tin T\\u1ee9c \\/ Ho\\u1ea1t \\u0111\\u00f4ng&quot;,&quot;slug_vi&quot;:&quot;tin-tuc-hoat-dong&quot;,&quot;name_en&quot;:&quot;News \\/ Activities&quot;,&quot;slug_en&quot;:&quot;news-activities&quot;}', 1, '2014-06-20 17:21:05', '2014-06-20 17:21:05'),
(154, 1, 352, 1, 'insert', 'asaaaaaaaaa', '{&quot;ids&quot;:&quot;ZL3VWFOcAK9&quot;,&quot;name_vi&quot;:&quot;asaaaaaaaaa&quot;,&quot;description_vi&quot;:&quot;asdsadsadsa&quot;,&quot;slug_vi&quot;:&quot;asaaaaaaaaa-ZL3VWFOcAK9&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;asdasdsadsadsa&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;fffasfasfsa&quot;,&quot;slug_en&quot;:&quot;fffasfasfsa--ZL3VWFOcAK9&quot;,&quot;description_en&quot;:&quot;asfFAsdfsddafsad&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;sadfsadfsdafsdfsd&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-20 17:31:59', '2014-06-20 17:31:59'),
(155, 1, 353, 1, 'insert', 'aaaaaaaaaa', '{&quot;parent&quot;:&quot;1&quot;,&quot;is_home&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;3F58etzFssB&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa-3F58etzFssB&quot;,&quot;description_vi&quot;:&quot;afafasfafafas&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;asfafafsafasfsafas&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbb--3F58etzFssB&quot;,&quot;description_en&quot;:&quot;asfafasfasfasfa&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;afAFafaFafA&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-20 17:54:45', '2014-06-20 17:54:45'),
(156, 1, 353, 2, 'insert', 'sdafasdfdsa', '{&quot;is_home&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;4Zh9o5BfEax&quot;,&quot;name_vi&quot;:&quot;sdafasdfdsa&quot;,&quot;slug_vi&quot;:&quot;sdafasdfdsa-4Zh9o5BfEax&quot;,&quot;description_vi&quot;:&quot;sadfdsafd&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;safsdafdsafsda&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;sadfsadfsda&quot;,&quot;slug_en&quot;:&quot;sadfsadfsda--4Zh9o5BfEax&quot;,&quot;description_en&quot;:&quot;fdsafsdafsdafsda&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;sdafsdafsdafsadfsdafsd&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-20 17:55:33', '2014-06-20 17:55:33'),
(157, 1, 355, 1, 'insert', 'aaaaaaaaa', '{&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;}', 1, '2014-06-20 18:26:30', '2014-06-20 18:26:30'),
(158, 1, 357, 1, 'insert', 'Any-Sales', '{&quot;name_vi&quot;:&quot;Any-Sales&quot;,&quot;name_en&quot;:&quot;B\\u1ea5t k\\u1ef3-Kinh doanh&quot;}', 1, '2014-06-24 11:41:20', '2014-06-24 11:41:20'),
(159, 1, 358, 1, 'insert', 'Banking', '{&quot;name_vi&quot;:&quot;Banking&quot;,&quot;name_en&quot;:&quot;Ng\\u00e2n h\\u00e0ng&quot;}', 1, '2014-06-24 11:42:00', '2014-06-24 11:42:00'),
(160, 1, 359, 1, 'insert', 'Study', '{&quot;name_vi&quot;:&quot;Study&quot;,&quot;name_en&quot;:&quot;Nghi\\u00ean c\\u1ee9u&quot;}', 1, '2014-06-24 11:43:59', '2014-06-24 11:43:59'),
(161, 1, 360, 1, 'insert', 'Competitor', '{&quot;salary&quot;:&quot;Competitor&quot;}', 1, '2014-06-24 11:44:33', '2014-06-24 11:44:33'),
(162, 1, 357, 1, 'edit', 'Any-Sales', '{&quot;name_vi&quot;:&quot;Any-Sales&quot;,&quot;slug_vi&quot;:&quot;any-sales&quot;,&quot;name_en&quot;:&quot;B\\u1ea5t k\\u1ef3-Kinh doanh&quot;,&quot;slug_en&quot;:&quot;bat-ky-kinh-doanh&quot;}', 1, '2014-06-24 11:52:38', '2014-06-24 11:52:38'),
(163, 1, 358, 1, 'edit', 'Banking', '{&quot;name_vi&quot;:&quot;Banking&quot;,&quot;slug_vi&quot;:&quot;banking&quot;,&quot;name_en&quot;:&quot;Ng\\u00e2n h\\u00e0ng&quot;,&quot;slug_en&quot;:&quot;ngan-hang&quot;}', 1, '2014-06-24 11:52:53', '2014-06-24 11:52:53'),
(164, 1, 359, 1, 'edit', 'Study', '{&quot;name_vi&quot;:&quot;Study&quot;,&quot;slug_vi&quot;:&quot;study&quot;,&quot;name_en&quot;:&quot;Nghi\\u00ean c\\u1ee9u&quot;,&quot;slug_en&quot;:&quot;nghien-cuu&quot;}', 1, '2014-06-24 11:52:59', '2014-06-24 11:52:59'),
(165, 1, 361, 1, 'insert', 'VD25665', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;salary_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;8I9nZxGMm5B&quot;,&quot;code&quot;:&quot;VD25665&quot;,&quot;tags&quot;:3,&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa-8I9nZxGMm5B&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbbb--8I9nZxGMm5B&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\n&quot;}', 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(166, 1, 362, 2, 'insert', 'Đại học', '{&quot;name_vi&quot;:&quot;\\u0110\\u1ea1i h\\u1ecdc&quot;,&quot;slug_vi&quot;:&quot;dai-hoc&quot;,&quot;name_en&quot;:&quot;DH&quot;,&quot;slug_en&quot;:&quot;dh&quot;}', 1, '2014-06-27 11:53:25', '2014-06-27 11:53:25'),
(167, 1, 344, 2, 'insert', 'dịch vụ tư vấn', '{&quot;name_vi&quot;:&quot;d\\u1ecbch v\\u1ee5 t\\u01b0 v\\u1ea5n&quot;,&quot;slug_vi&quot;:&quot;dich-vu-tu-van&quot;,&quot;name_en&quot;:&quot;hr advisory service&quot;,&quot;slug_en&quot;:&quot;hr-advisory-service&quot;}', 1, '2014-06-30 09:49:45', '2014-06-30 09:49:45'),
(168, 1, 344, 3, 'insert', 'đào tạo nhân sự và phát triển dịch vụ', '{&quot;name_vi&quot;:&quot;\\u0111\\u00e0o t\\u1ea1o nh\\u00e2n s\\u1ef1 v\\u00e0 ph\\u00e1t tri\\u1ec3n d\\u1ecbch v\\u1ee5&quot;,&quot;slug_vi&quot;:&quot;dao-tao-nhan-su-va-phat-trien-dich-vu&quot;,&quot;name_en&quot;:&quot;hr tranning &amp;amp;amp; development service&quot;,&quot;slug_en&quot;:&quot;hr-tranning-development-service&quot;}', 1, '2014-06-30 09:51:04', '2014-06-30 09:51:04'),
(169, 1, 344, 3, 'edit', 'đào tạo nhân sự và phát triển dịch vụ', '{&quot;name_vi&quot;:&quot;\\u0111\\u00e0o t\\u1ea1o nh\\u00e2n s\\u1ef1 v\\u00e0 ph\\u00e1t tri\\u1ec3n d\\u1ecbch v\\u1ee5&quot;,&quot;slug_vi&quot;:&quot;dao-tao-nhan-su-va-phat-trien-dich-vu&quot;,&quot;name_en&quot;:&quot;hr tranning &amp;amp;amp; development service&quot;,&quot;slug_en&quot;:&quot;hr-tranning-development-service&quot;}', 1, '2014-06-30 09:52:12', '2014-06-30 09:52:12'),
(170, 1, 354, 1, 'edit', 'Let our experts solve your HR concerns!', '{&quot;parent&quot;:&quot;1&quot;,&quot;text_vi&quot;:&quot;Let our experts solve your HR concerns!&quot;,&quot;link_vi&quot;:&quot;http:\\/\\/localhost\\/2014\\/talentnet\\/code\\/en&quot;,&quot;text_en&quot;:&quot;Let our experts solve your HR concerns!&quot;,&quot;link_en&quot;:&quot;http:\\/\\/localhost\\/2014\\/talentnet\\/code\\/en&quot;}', 1, '2014-06-30 11:32:28', '2014-06-30 11:32:28');
INSERT INTO `wz_admin_logs` (`id`, `uid`, `mid`, `nid`, `type`, `title`, `data`, `status`, `changed`, `created`) VALUES
(171, 1, 361, 2, 'insert', 'AD5555', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;64&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;salary_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;aWUzTgaoNNE&quot;,&quot;code&quot;:&quot;AD5555&quot;,&quot;tags&quot;:1,&quot;name_vi&quot;:&quot;bbbbbbbbb&quot;,&quot;slug_vi&quot;:&quot;bbbbbbbbb-aWUzTgaoNNE&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;sdfdsfsdfsdfsd&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;asgdsagsadgsgs&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;sagdsgsagsa&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;BBBBBBBBBBBB&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbb--aWUzTgaoNNE&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;BBBBBBBBBBBBBBBBBB&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;sdgsgdfsgdfsgdfs&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;sdfgagdsfgdfsgfdsgd&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:30:50', '2014-06-30 15:30:50'),
(172, 1, 361, 2, 'edit', 'AD5555', '{&quot;function_id&quot;:&quot;1&quot;,&quot;hot&quot;:&quot;[\\&quot;1\\&quot;]&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;64&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;salary_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;aWUzTgaoNN&quot;,&quot;code&quot;:&quot;AD5555&quot;,&quot;tags&quot;:1,&quot;name_vi&quot;:&quot;bbbbbbbbb&quot;,&quot;slug_vi&quot;:&quot;bbbbbbbbb-aWUzTgaoNN&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;sdfdsfsdfsdfsd&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;asgdsagsadgsgs&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;sagdsgsagsa&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;BBBBBBBBBBBB&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbb--aWUzTgaoNN&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;BBBBBBBBBBBBBBBBBB&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;sdgsgdfsgdfsgdfs&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;sdfgagdsfgdfsgfdsgd&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:33:56', '2014-06-30 15:33:56'),
(173, 1, 361, 1, 'edit', 'VD25665', '{&quot;location_id&quot;:&quot;8&quot;,&quot;ids&quot;:&quot;8I9nZxGMm5&quot;,&quot;code&quot;:&quot;VD25665&quot;,&quot;tags&quot;:3,&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa-8I9nZxGMm5&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbbb--8I9nZxGMm5&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:36:29', '2014-06-30 15:36:29'),
(174, 1, 23, 1, 'edit', 'kjkhkhkh', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;11lCdn54s7&quot;,&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;kjkhkhkh&quot;,&quot;slug_vi&quot;:&quot;kjkhkhkh-11lCdn54s7&quot;,&quot;description_vi&quot;:&quot;jhjhkhhkh&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;kj,kn,n,nm,&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;kjkllklkj&quot;,&quot;slug_en&quot;:&quot;kjkllklkj--11lCdn54s7&quot;,&quot;description_en&quot;:&quot;kjhjkhjkhjjk&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;jhjkhjkhjkhjh&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:39:08', '2014-06-30 15:39:08'),
(175, 1, 23, 2, 'insert', 'aaaaaaaa', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;07tzYY6lgRv&quot;,&quot;name_vi&quot;:&quot;aaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaa-07tzYY6lgRv&quot;,&quot;description_vi&quot;:&quot;asfsafsafsdafds&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;gsdagsadgsgdagsa&lt;\\/p&gt;\\r\\n&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbb--07tzYY6lgRv&quot;,&quot;description_en&quot;:&quot;SFSDAFSADSA&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;sadfasdfadsfsafsda&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:39:30', '2014-06-30 15:39:30'),
(176, 1, 24, 3, 'insert', 'Thư Vện', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Th\\u01b0 V\\u00ea\\u0323n&quot;,&quot;slug_vi&quot;:&quot;thu-ven&quot;,&quot;name_en&quot;:&quot;Library&quot;,&quot;slug_en&quot;:&quot;library&quot;}', 1, '2014-06-30 15:42:22', '2014-06-30 15:42:22'),
(177, 1, 24, 4, 'insert', 'Chuyên môn Talentnet', '{&quot;name_vi&quot;:&quot;Chuy\\u00ean m\\u00f4n Talentnet&quot;,&quot;slug_vi&quot;:&quot;chuyen-mon-talentnet&quot;,&quot;name_en&quot;:&quot;Talentnet_Expertise&quot;,&quot;slug_en&quot;:&quot;talentnet-expertise&quot;}', 1, '2014-06-30 15:43:07', '2014-06-30 15:43:07'),
(178, 1, 347, 1, 'edit', 'aaaaaaaaa', '{&quot;name_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;industry_vi&quot;:&quot;aaaaaaaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;bbbbbbbbbbbbbbbb&quot;}', 1, '2014-06-30 15:44:03', '2014-06-30 15:44:03'),
(179, 1, 347, 2, 'insert', 'gggggggg', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;gggggggg&quot;,&quot;slug_vi&quot;:&quot;gggggggg&quot;,&quot;industry_vi&quot;:&quot;ggggggggg&quot;,&quot;name_en&quot;:&quot;GGGGGGGGGG&quot;,&quot;slug_en&quot;:&quot;gggggggggg&quot;,&quot;industry_en&quot;:&quot;GGGGGGGGGGGGG&quot;}', 1, '2014-06-30 15:44:20', '2014-06-30 15:44:20'),
(180, 1, 347, 3, 'insert', 'bbbbbbb', '{&quot;name_vi&quot;:&quot;bbbbbbb&quot;,&quot;slug_vi&quot;:&quot;bbbbbbb&quot;,&quot;industry_vi&quot;:&quot;bbbbbbbbbbbb&quot;,&quot;name_en&quot;:&quot;BBBBBBBBBBBB&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbbbb&quot;,&quot;industry_en&quot;:&quot;BBBBBBBBBBBBBBBBBB&quot;}', 1, '2014-06-30 15:44:39', '2014-06-30 15:44:39'),
(181, 1, 347, 4, 'insert', 'ccccccc', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;ccccccc&quot;,&quot;slug_vi&quot;:&quot;ccccccc&quot;,&quot;industry_vi&quot;:&quot;cccccccccccc&quot;,&quot;name_en&quot;:&quot;CCCCCCCCCC&quot;,&quot;slug_en&quot;:&quot;cccccccccc&quot;,&quot;industry_en&quot;:&quot;CCCCCCCCCCCCCCC&quot;}', 1, '2014-06-30 15:45:05', '2014-06-30 15:45:05'),
(182, 1, 363, 1, 'insert', 'Hasan Haider, ACCA(UK) - CEO, Bengal Investment Ltd', '{&quot;name_vi&quot;:&quot;Hasan Haider, ACCA(UK) - CEO, Bengal Investment Ltd&quot;,&quot;description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(102, 102, 102); font-family: Arial, sans-serif; font-size: 12px; line-height: 16.799999237060547px; background-color: rgb(255, 255, 255);\\&quot;&gt;Ti\\u1ec1n \\u0111\\u1ea1o Arjen Robben c\\u1ee7a H\\u00e0 Lan \\u0111\\u00e3 ph\\u1ea3i h\\u1ee9ng ch\\u1ecbu b\\u00faa r\\u00ecu d\\u01b0 lu\\u1eadn sau khi \\u0103n v\\u1ea1 trong tr\\u1eadn g\\u1eb7p Mexico, gi\\u00fap H\\u00e0 Lan \\u0111o\\u1ea1t v\\u00e9 v\\u00e0o t\\u1ee9 k\\u1ebft World Cup 2014.&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Hasan Haider, ACCA (Anh) - Gi\\u00e1m \\u0111\\u1ed1c \\u0111i\\u1ec1u h\\u00e0nh, Bengal \\u0110\\u1ea7u t\\u01b0 Ltd&quot;,&quot;description_en&quot;:&quot;&lt;p&gt;The striker Arjen Robben of the Netherlands suffered ax after public tantrums against Mexico, Netherlands helped win World Cup quarter-finals in 2014.&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:56:21', '2014-06-30 15:56:21'),
(183, 1, 363, 2, 'insert', 'Hasan Haider, ACCA (Anh) - Giám đốc điều hành, Bengal Đầu tư Ltd', '{&quot;name_vi&quot;:&quot;Hasan Haider, ACCA (Anh) - Gi\\u00e1m \\u0111\\u1ed1c \\u0111i\\u1ec1u h\\u00e0nh, Bengal \\u0110\\u1ea7u t\\u01b0 Ltd&quot;,&quot;description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 12px; line-height: 16.799999237060547px;\\&quot;&gt;C\\u1ea3 gia \\u0111\\u00ecnh nh\\u00e0 \\&quot;s\\u1ebfu v\\u01b0\\u1eddn\\&quot; \\u0111ang t\\u1eadn h\\u01b0\\u1edfng nh\\u1eefng ng\\u00e0y th\\u00e1ng tuy\\u1ec7t v\\u1eddi c\\u1ee7a m\\u1ed9t m\\u00f9a h\\u00e8 kh\\u00f4ng b\\u00f3ng \\u0111\\u00e1 v\\u00e0 World Cup tr\\u00ean b\\u00e3i bi\\u1ec3n Mala, mi\\u1ec1n nam n\\u01b0\\u1edbc Ph\\u00e1p&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Hasan Haider, ACCA(UK) - CEO, Bengal Investment Ltd&quot;,&quot;description_en&quot;:&quot;&lt;p&gt;The family home \\&quot;garden crane\\&quot; is enjoying a great day of summer and the football World Cup is not on the beach Mala, southern France&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-06-30 15:57:17', '2014-06-30 15:57:17'),
(184, 1, 365, 1, 'insert', 'Ảnh chụp / Trong nháy mắt', '{&quot;name_vi&quot;:&quot;\\u1ea2nh ch\\u1ee5p \\/ Trong nh\\u00e1y m\\u1eaft&quot;,&quot;slug_vi&quot;:&quot;anh-chup-trong-nhay-mat&quot;,&quot;name_en&quot;:&quot;Snapshot\\/ At a glance&quot;,&quot;slug_en&quot;:&quot;snapshot-at-a-glance&quot;}', 1, '2014-06-30 16:38:00', '2014-06-30 16:38:00'),
(185, 1, 365, 2, 'insert', 'Hiểu Biết', '{&quot;name_vi&quot;:&quot;Hi\\u1ec3u Bi\\u1ebft&quot;,&quot;slug_vi&quot;:&quot;hieu-biet&quot;,&quot;name_en&quot;:&quot;Insights&quot;,&quot;slug_en&quot;:&quot;insights&quot;}', 1, '2014-06-30 16:38:22', '2014-06-30 16:38:22'),
(186, 1, 344, 1, 'edit', 'tìm kiếm điều hành', '{&quot;name_vi&quot;:&quot;t\\u00ecm ki\\u1ebfm \\u0111i\\u1ec1u h\\u00e0nh&quot;,&quot;slug_vi&quot;:&quot;tim-kiem-dieu-hanh&quot;,&quot;description_vn&quot;:&quot;Nh\\u01b0 \\u0111\\u1ed1i v\\u1edbi th\\u1ee9 h\\u1ea1ng cao qu\\u1ea3n l\\u00fd v\\u1ecb tr\\u00ed \\u0111\\u00f3 \\u0111\\u00f3ng vai tr\\u00f2 quan tr\\u1ecdng trong C\\u00f4ng ty.&quot;,&quot;name_en&quot;:&quot;executive search&quot;,&quot;slug_en&quot;:&quot;executive-search&quot;,&quot;description_en&quot;:&quot;As for high ranking manage position that plays key roles in the Company.&quot;}', 1, '2014-06-30 17:35:44', '2014-06-30 17:35:44'),
(187, 1, 344, 2, 'edit', 'dịch vụ tư vấn', '{&quot;name_vi&quot;:&quot;d\\u1ecbch v\\u1ee5 t\\u01b0 v\\u1ea5n&quot;,&quot;slug_vi&quot;:&quot;dich-vu-tu-van&quot;,&quot;description_vn&quot;:&quot;As for high ranking manage position that plays key roles in the Company.&quot;,&quot;name_en&quot;:&quot;hr advisory service&quot;,&quot;slug_en&quot;:&quot;hr-advisory-service&quot;,&quot;description_en&quot;:&quot;Nh\\u01b0 \\u0111\\u1ed1i v\\u1edbi th\\u1ee9 h\\u1ea1ng cao qu\\u1ea3n l\\u00fd v\\u1ecb tr\\u00ed \\u0111\\u00f3 \\u0111\\u00f3ng vai tr\\u00f2 quan tr\\u1ecdng trong C\\u00f4ng ty.&quot;}', 1, '2014-06-30 17:35:57', '2014-06-30 17:35:57'),
(188, 1, 344, 3, 'edit', 'đào tạo nhân sự và phát triển dịch vụ', '{&quot;description_vn&quot;:&quot;Nh\\u01b0 \\u0111\\u1ed1i v\\u1edbi th\\u1ee9 h\\u1ea1ng cao qu\\u1ea3n l\\u00fd v\\u1ecb tr\\u00ed \\u0111\\u00f3 \\u0111\\u00f3ng vai tr\\u00f2 quan tr\\u1ecdng trong C\\u00f4ng ty.&quot;,&quot;description_en&quot;:&quot;As for high ranking manage position that plays key roles in the Company.&quot;}', 1, '2014-06-30 17:36:16', '2014-06-30 17:36:16'),
(189, 1, 349, 1, 'edit', 'Nguyen Van A', '{&quot;is_home&quot;:&quot;0&quot;,&quot;name_vi&quot;:&quot;Nguyen Van A&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-a&quot;,&quot;position_vi&quot;:&quot;Giam doc ky thuat&quot;,&quot;name_en&quot;:&quot;Nguyen Van A&quot;,&quot;slug_en&quot;:&quot;nguyen-van-a&quot;,&quot;position_en&quot;:&quot;Giam doc ky thuat&quot;}', 1, '2014-07-01 11:30:52', '2014-07-01 11:30:52'),
(190, 1, 349, 2, 'insert', 'Nguyen Van B', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Nguyen Van B&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-b&quot;,&quot;position_vi&quot;:&quot;aaaaaaaaa&quot;,&quot;name_en&quot;:&quot;Nguyen Van B&quot;,&quot;slug_en&quot;:&quot;nguyen-van-b&quot;,&quot;position_en&quot;:&quot;bbbbbbbbbb&quot;}', 1, '2014-07-01 11:31:18', '2014-07-01 11:31:18'),
(191, 1, 349, 3, 'insert', 'Nguyen Van C', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Nguyen Van C&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-c&quot;,&quot;position_vi&quot;:&quot;assssssssss&quot;,&quot;name_en&quot;:&quot;Nguyen Van C&quot;,&quot;slug_en&quot;:&quot;nguyen-van-c&quot;,&quot;position_en&quot;:&quot;dddddddddddddd&quot;}', 1, '2014-07-01 11:31:39', '2014-07-01 11:31:39'),
(192, 1, 349, 4, 'insert', 'Nguyen Van D', '{&quot;name_vi&quot;:&quot;Nguyen Van D&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-d&quot;,&quot;position_vi&quot;:&quot;ggggggggg&quot;,&quot;name_en&quot;:&quot;Nguyen Van D&quot;,&quot;slug_en&quot;:&quot;nguyen-van-d&quot;,&quot;position_en&quot;:&quot;hhhhhhhhhhhhh&quot;}', 1, '2014-07-01 11:32:04', '2014-07-01 11:32:04'),
(193, 1, 349, 5, 'insert', 'Nguyen Van H', '{&quot;name_vi&quot;:&quot;Nguyen Van H&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-h&quot;,&quot;position_vi&quot;:&quot;ddfdfdfs&quot;,&quot;name_en&quot;:&quot;Nguyen Van H&quot;,&quot;slug_en&quot;:&quot;nguyen-van-h&quot;,&quot;position_en&quot;:&quot;sdfdsfdsfdsfsd&quot;}', 1, '2014-07-01 11:32:28', '2014-07-01 11:32:28'),
(194, 1, 349, 5, 'edit', 'Nguyen Van H', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Nguyen Van H&quot;,&quot;slug_vi&quot;:&quot;nguyen-van-h&quot;,&quot;position_vi&quot;:&quot;ddfdfdfs&quot;,&quot;name_en&quot;:&quot;Nguyen Van H&quot;,&quot;slug_en&quot;:&quot;nguyen-van-h&quot;,&quot;position_en&quot;:&quot;sdfdsfdsfdsfsd&quot;}', 1, '2014-07-01 11:32:34', '2014-07-01 11:32:34'),
(195, 1, 354, 2, 'insert', '', '{&quot;parent&quot;:&quot;3-1&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 11:55:39', '2014-07-01 11:55:39'),
(196, 1, 354, 3, 'insert', '', '{&quot;parent&quot;:&quot;10-1&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 15:09:52', '2014-07-01 15:09:52'),
(197, 1, 354, 4, 'insert', '', '{&quot;parent&quot;:&quot;10-2&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 15:10:02', '2014-07-01 15:10:02'),
(198, 1, 354, 5, 'insert', '', '{&quot;parent&quot;:&quot;7-1&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 15:10:16', '2014-07-01 15:10:16'),
(199, 1, 354, 3, 'edit', '', '{&quot;parent&quot;:&quot;6-1&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 15:11:03', '2014-07-01 15:11:03'),
(200, 1, 354, 4, 'edit', '', '{&quot;parent&quot;:&quot;6-2&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-01 15:11:17', '2014-07-01 15:11:17'),
(201, 1, 364, 1, 'insert', 'aaaaaaaaaaaaa', '{&quot;category_id&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaaaaa&quot;,&quot;description_vi&quot;:&quot;Talentnet \\u2013 formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam\\u2019s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;bbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbb&quot;,&quot;description_en&quot;:&quot;Talentnet \\u2013 formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam\\u2019s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 15:31:00', '2014-07-01 15:31:00'),
(202, 1, 364, 2, 'insert', 'ccccccccccc', '{&quot;category_id&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;ccccccccccc&quot;,&quot;slug_vi&quot;:&quot;ccccccccccc&quot;,&quot;description_vi&quot;:&quot;Talentnet \\u2013 formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam\\u2019s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;ccccccccccccccccccccc&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;CCCCCCCCCCCCCC&quot;,&quot;slug_en&quot;:&quot;cccccccccccccc&quot;,&quot;description_en&quot;:&quot;Talentnet \\u2013 formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam\\u2019s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;CCCCCCCCCCCCCCCCCCCC&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 15:31:25', '2014-07-01 15:31:25'),
(203, 1, 365, 3, 'insert', 'FAQ', '{&quot;name_vi&quot;:&quot;FAQ&quot;,&quot;slug_vi&quot;:&quot;faq&quot;,&quot;name_en&quot;:&quot;C\\u00e2u h\\u1ecfi&quot;,&quot;slug_en&quot;:&quot;cau-hoi&quot;}', 1, '2014-07-01 16:17:15', '2014-07-01 16:17:15'),
(204, 1, 365, 4, 'insert', 'Nghiên cứu trường hợp / Khách hàng', '{&quot;name_vi&quot;:&quot;Nghi\\u00ean c\\u1ee9u tr\\u01b0\\u1eddng h\\u1ee3p \\/ Kh\\u00e1ch h\\u00e0ng&quot;,&quot;slug_vi&quot;:&quot;nghien-cuu-truong-hop-khach-hang&quot;,&quot;name_en&quot;:&quot;Case study\\/ Testimonials&quot;,&quot;slug_en&quot;:&quot;case-study-testimonials&quot;}', 1, '2014-07-01 16:17:36', '2014-07-01 16:17:36'),
(205, 1, 364, 3, 'insert', 'aaaaaaaaaaaa', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;1S8m5BQHTsf&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaaaa-1S8m5BQHTsf&quot;,&quot;description_vi&quot;:&quot;aaaaaaaaaaaaaaaaaa&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;aaaaaaaaaaaaaaaaaaaa&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;AAAAAAAAAA&quot;,&quot;slug_en&quot;:&quot;aaaaaaaaaa--1S8m5BQHTsf&quot;,&quot;description_en&quot;:&quot;AAAAAAAAAAAAAAAAAAA&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;AAAAAAAAAAAAAAA&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:25:18', '2014-07-01 16:25:18'),
(206, 1, 364, 4, 'insert', 'bbbbbbbbb', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;ARfLROrHSSV&quot;,&quot;name_vi&quot;:&quot;bbbbbbbbb&quot;,&quot;slug_vi&quot;:&quot;bbbbbbbbb-ARfLROrHSSV&quot;,&quot;description_vi&quot;:&quot;bbbbbbbbbbbbbbbbbbbbbb&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;bbbbbbbbbbbbbbbbbbbbbbb&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;BBBBBBBBB&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbb--ARfLROrHSSV&quot;,&quot;description_en&quot;:&quot;BBBBBBBBBBBBBBBBBBBBBB&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;BBBBBBBBBBBBBBBBBB&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:25:46', '2014-07-01 16:25:46'),
(207, 1, 364, 5, 'insert', 'cccccccccccccc', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;mn5hNWOfCvo&quot;,&quot;name_vi&quot;:&quot;cccccccccccccc&quot;,&quot;slug_vi&quot;:&quot;cccccccccccccc-mn5hNWOfCvo&quot;,&quot;description_vi&quot;:&quot;cccccccccccccccccccccccccccccccccc&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;ccccccccccccccccccccccccccccc&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;CCCCCCCCCCCC&quot;,&quot;slug_en&quot;:&quot;cccccccccccc--mn5hNWOfCvo&quot;,&quot;description_en&quot;:&quot;CCCCCCCCCCCCCCCCCCCC&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;CCCCCCCCCCCCCCCCCCCCCCCCCCC&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:26:13', '2014-07-01 16:26:13'),
(208, 1, 364, 6, 'insert', 'dddddddddddddd', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;JqtKACAclTN&quot;,&quot;name_vi&quot;:&quot;dddddddddddddd&quot;,&quot;slug_vi&quot;:&quot;dddddddddddddd-JqtKACAclTN&quot;,&quot;description_vi&quot;:&quot;ddddddddddddddddddddddd&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;ddddddddddddddddddddd&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;DDDDDDDDDDDD&quot;,&quot;slug_en&quot;:&quot;dddddddddddd--JqtKACAclTN&quot;,&quot;description_en&quot;:&quot;DDDDDDDDDDDDDDDDDDDDD&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;DDDDDDDDDDDDDDDDDDDDDD&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:26:43', '2014-07-01 16:26:43'),
(209, 1, 364, 7, 'insert', 'eeeeeeeeeeeee', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;8LTeRvqdaR3&quot;,&quot;name_vi&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;slug_vi&quot;:&quot;eeeeeeeeeeeee-8LTeRvqdaR3&quot;,&quot;description_vi&quot;:&quot;eeeeeeeeeeeeeeeeeeeeeeeeee&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;eeeeeeeeeeeeeeeeeeeeeeeeeee&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;EEEEEEEEEEEEE&quot;,&quot;slug_en&quot;:&quot;eeeeeeeeeeeee--8LTeRvqdaR3&quot;,&quot;description_en&quot;:&quot;EEEEEEEEEEEEEEEEEEEEEE&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;EEEEEEEEEEEEEEEEEEE&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:27:12', '2014-07-01 16:27:12'),
(210, 1, 364, 8, 'insert', 'ffffffffffff', '{&quot;ids&quot;:&quot;Mnwfk1jW1d6&quot;,&quot;name_vi&quot;:&quot;ffffffffffff&quot;,&quot;slug_vi&quot;:&quot;ffffffffffff-Mnwfk1jW1d6&quot;,&quot;description_vi&quot;:&quot;ffffffffffffffffffffffffffff&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;fffffffffffffffffffffffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;FFFFFFFFFF&quot;,&quot;slug_en&quot;:&quot;ffffffffff--Mnwfk1jW1d6&quot;,&quot;description_en&quot;:&quot;FFFFFFFFFFFFFFFFFFFFFF&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;FFFFFFFFFFFFFFFFFF&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 16:27:35', '2014-07-01 16:27:35'),
(211, 1, 364, 8, 'edit', 'Đến hẹn lại lên, sắp tới thi đại học nữa rồi và mình luôn có một thắc mắc đó là không hiểu sao ngày xưa mình thi đậu', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;Mnwfk1jW1d&quot;,&quot;name_vi&quot;:&quot;\\u0110\\u1ebfn h\\u1eb9n l\\u1ea1i l\\u00ean, s\\u1eafp t\\u1edbi thi \\u0111\\u1ea1i h\\u1ecdc n\\u1eefa r\\u1ed3i v\\u00e0 m\\u00ecnh lu\\u00f4n c\\u00f3 m\\u1ed9t th\\u1eafc m\\u1eafc \\u0111\\u00f3 l\\u00e0 kh\\u00f4ng hi\\u1ec3u sao ng\\u00e0y x\\u01b0a m\\u00ecnh thi \\u0111\\u1eadu&quot;,&quot;slug_vi&quot;:&quot;den-hen-lai-len-sap-toi-thi-dai-hoc-nua-roi-va-minh-luon-co-mot-thac-mac-do-la-khong-hieu-sao-ngay-xua-minh-thi-dau-Mnwfk1jW1d&quot;,&quot;description_vi&quot;:&quot;ffffffffffffffffffffffffffff&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;fffffffffffffffffffffffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;FFFFFFFFFF&quot;,&quot;slug_en&quot;:&quot;ffffffffff--Mnwfk1jW1d&quot;,&quot;description_en&quot;:&quot;FFFFFFFFFFFFFFFFFFFFFF&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;FFFFFFFFFFFFFFFFFF&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-01 17:26:17', '2014-07-01 17:26:17'),
(212, 1, 364, 8, 'edit', 'Đến hẹn lại lên, sắp tới thi đại học nữa rồi và mình luôn có một thắc mắc đó là không hiểu sao ngày xưa mình thi đậu', '{&quot;slug_en&quot;:&quot;den-hen-lai-len-sap-toi-thi-dai-hoc-nua-roi-va-minh-luon-co-mot-thac-mac-do-la-khong-hieu-sao-ngay-xua-minh-thi-dau--Mnwfk1jW1d&quot;}', 1, '2014-07-01 17:26:45', '2014-07-01 17:26:45'),
(213, 1, 364, 8, 'edit', 'Đến hẹn lại lên, sắp tới thi đại học nữa rồi và mình luôn có một thắc mắc đó là không hiểu sao ngày xưa mình thi đậu', '{&quot;category_id&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;Mnwfk1jW1d&quot;,&quot;tags&quot;:3,&quot;name_vi&quot;:&quot;\\u0110\\u1ebfn h\\u1eb9n l\\u1ea1i l\\u00ean, s\\u1eafp t\\u1edbi thi \\u0111\\u1ea1i h\\u1ecdc n\\u1eefa r\\u1ed3i v\\u00e0 m\\u00ecnh lu\\u00f4n c\\u00f3 m\\u1ed9t th\\u1eafc m\\u1eafc \\u0111\\u00f3 l\\u00e0 kh\\u00f4ng hi\\u1ec3u sao ng\\u00e0y x\\u01b0a m\\u00ecnh thi \\u0111\\u1eadu&quot;,&quot;slug_vi&quot;:&quot;den-hen-lai-len-sap-toi-thi-dai-hoc-nua-roi-va-minh-luon-co-mot-thac-mac-do-la-khong-hieu-sao-ngay-xua-minh-thi-dau-Mnwfk1jW1d&quot;,&quot;description_vi&quot;:&quot;ffffffffffffffffffffffffffff&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;fffffffffffffffffffffffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;\\u0110\\u1ebfn h\\u1eb9n l\\u1ea1i l\\u00ean, s\\u1eafp t\\u1edbi thi \\u0111\\u1ea1i h\\u1ecdc n\\u1eefa r\\u1ed3i v\\u00e0 m\\u00ecnh lu\\u00f4n c\\u00f3 m\\u1ed9t th\\u1eafc m\\u1eafc \\u0111\\u00f3 l\\u00e0 kh\\u00f4ng hi\\u1ec3u sao ng\\u00e0y x\\u01b0a m\\u00ecnh thi \\u0111\\u1eadu&quot;,&quot;description_en&quot;:&quot;FFFFFFFFFFFFFFFFFFFFFF&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;FFFFFFFFFFFFFFFFFF&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-02 09:16:43', '2014-07-02 09:16:43'),
(214, 1, 354, 6, 'insert', '', '{&quot;parent&quot;:&quot;9-1&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-02 14:30:29', '2014-07-02 14:30:29'),
(215, 1, 348, 1, 'edit', 'aaaaaaaaaa', '{&quot;is_home&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;slug_vi&quot;:&quot;aaaaaaaaaa&quot;,&quot;name_en&quot;:&quot;bbbbbbbbbb&quot;,&quot;slug_en&quot;:&quot;bbbbbbbbbb&quot;}', 1, '2014-07-02 16:46:43', '2014-07-02 16:46:43'),
(216, 1, 348, 2, 'insert', 'Panasonic', '{&quot;name_vi&quot;:&quot;Panasonic&quot;,&quot;slug_vi&quot;:&quot;panasonic&quot;,&quot;name_en&quot;:&quot;Panasonic&quot;,&quot;slug_en&quot;:&quot;panasonic&quot;}', 1, '2014-07-02 16:47:06', '2014-07-02 16:47:06'),
(217, 1, 348, 1, 'edit', 'Sony', '{&quot;name_vi&quot;:&quot;Sony&quot;,&quot;slug_vi&quot;:&quot;sony&quot;,&quot;name_en&quot;:&quot;Sony&quot;,&quot;slug_en&quot;:&quot;sony&quot;}', 1, '2014-07-02 16:47:29', '2014-07-02 16:47:29'),
(218, 1, 346, 2, 'edit', 'ccccccccc', '{&quot;parent_id&quot;:&quot;2&quot;,&quot;name_vi&quot;:&quot;ccccccccc&quot;,&quot;slug_vi&quot;:&quot;ccccccccc&quot;,&quot;content_vi&quot;:&quot;&lt;p&gt;cccccccccccccccc&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;ddddddddddddd&quot;,&quot;slug_en&quot;:&quot;ddddddddddddd&quot;,&quot;content_en&quot;:&quot;&lt;p&gt;ddddddddddddddd&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-02 17:41:28', '2014-07-02 17:41:28'),
(219, 1, 354, 7, 'insert', '', '{&quot;parent&quot;:&quot;2-3&quot;,&quot;text_vi&quot;:&quot;&quot;,&quot;link_vi&quot;:&quot;&quot;,&quot;text_en&quot;:&quot;&quot;,&quot;link_en&quot;:&quot;&quot;}', 1, '2014-07-02 17:51:04', '2014-07-02 17:51:04'),
(220, 1, 361, 1, 'edit', 'VD25665', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;8I9nZxGMm5&quot;,&quot;code&quot;:&quot;VD25665&quot;,&quot;tags&quot;:3,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;National Operations Manager&quot;,&quot;slug_vi&quot;:&quot;national-operations-manager-8I9nZxGMm5&quot;,&quot;em_description_vi&quot;:&quot;&lt;div class=\\&quot;fs13 c_000\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;Our client is one of global leading dairy companies in the market with more than 100 years experience in dairy technology.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;Please submit CV to&amp;nbsp;&lt;a class=\\&quot;btn-descript\\&quot; href=\\&quot;vi\\/html\\/candidate_jobdetail#\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\&quot; title=\\&quot;\\&quot;&gt;career.solution@talentnet.vn&lt;\\/a&gt;,&amp;nbsp;&lt;a class=\\&quot;btn-descript\\&quot; href=\\&quot;vi\\/html\\/candidate_jobdetail#\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\&quot; title=\\&quot;\\&quot;&gt;le.t.chau.hoang@talentnet.vn&lt;\\/a&gt;&amp;nbsp;or contact directly to Ms. Le Thi Chau Hoang at 62914188, ext: 507.&lt;\\/div&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;div class=\\&quot;fs13\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Collaborates with web programmers in developing of website page, programming to meet overall website objectives.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Code HTML (if can).&lt;\\/div&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;div class=\\&quot;fs13\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Collaborates with web programmers in developing of website page, programming to meet overall website objectives.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Code HTML (if can).&lt;\\/div&gt;\\r\\n&quot;,&quot;salary_min_vi&quot;:&quot;10000&quot;,&quot;salary_max_vi&quot;:&quot;100000&quot;,&quot;name_en&quot;:&quot;National Operations Manager&quot;,&quot;slug_en&quot;:&quot;national-operations-manager--8I9nZxGMm5&quot;,&quot;em_description_en&quot;:&quot;&lt;div class=\\&quot;fs13 c_000\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;Our client is one of global leading dairy companies in the market with more than 100 years experience in dairy technology.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;Please submit CV to&amp;nbsp;&lt;a class=\\&quot;btn-descript\\&quot; href=\\&quot;vi\\/html\\/candidate_jobdetail#\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\&quot; title=\\&quot;\\&quot;&gt;career.solution@talentnet.vn&lt;\\/a&gt;,&amp;nbsp;&lt;a class=\\&quot;btn-descript\\&quot; href=\\&quot;vi\\/html\\/candidate_jobdetail#\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\&quot; title=\\&quot;\\&quot;&gt;le.t.chau.hoang@talentnet.vn&lt;\\/a&gt;&amp;nbsp;or contact directly to Ms. Le Thi Chau Hoang at 62914188, ext: 507.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;&amp;nbsp;&lt;\\/div&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;div class=\\&quot;fs13 c_000\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;\\r\\n&lt;div class=\\&quot;fs13\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Collaborates with web programmers in developing of website page, programming to meet overall website objectives.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Code HTML (if can).&lt;\\/div&gt;\\r\\n&lt;\\/div&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;div class=\\&quot;fs13\\&quot; style=\\&quot;padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;\\&quot;&gt;For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Collaborates with web programmers in developing of website page, programming to meet overall website objectives.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.&lt;\\/div&gt;\\r\\n\\r\\n&lt;div class=\\&quot;fs13 mt5\\&quot; style=\\&quot;padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;\\&quot;&gt;\\u2022 Code HTML (if can).&lt;\\/div&gt;\\r\\n&quot;,&quot;salary_min_en&quot;:&quot;10000&quot;,&quot;salary_max_en&quot;:&quot;100000&quot;}', 1, '2014-07-03 09:43:37', '2014-07-03 09:43:37'),
(221, 1, 361, 2, 'edit', 'AD5555', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;64&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;aWUzTgaoNN&quot;,&quot;code&quot;:&quot;AD5555&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Finance Director&quot;,&quot;slug_vi&quot;:&quot;finance-director-aWUzTgaoNN&quot;,&quot;em_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Finance Director&quot;,&quot;slug_en&quot;:&quot;finance-director--aWUzTgaoNN&quot;,&quot;em_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Finance Director&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;}', 1, '2014-07-03 09:55:30', '2014-07-03 09:55:30');
INSERT INTO `wz_admin_logs` (`id`, `uid`, `mid`, `nid`, `type`, `title`, `data`, `status`, `changed`, `created`) VALUES
(222, 1, 361, 3, 'insert', 'AD588744', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;m7i0bWM12SA&quot;,&quot;code&quot;:&quot;AD588744&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Chief Accountant&quot;,&quot;slug_vi&quot;:&quot;chief-accountant-m7i0bWM12SA&quot;,&quot;em_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Chief Accountant&quot;,&quot;slug_en&quot;:&quot;chief-accountant--m7i0bWM12SA&quot;,&quot;em_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;}', 1, '2014-07-03 09:56:27', '2014-07-03 09:56:27'),
(223, 1, 361, 4, 'insert', 'GF55888', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;7HlhdTBWcVW&quot;,&quot;code&quot;:&quot;GF55888&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh&quot;,&quot;slug_vi&quot;:&quot;quay-phim-va-dao-dien-truyen-hinh-7HlhdTBWcVW&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;&lt;a href=\\&quot;http:\\/\\/www.vietnamworks.com\\/quay-phim-va-dao-dien-truyen-hinh-487919-jd\\&quot; style=\\&quot;box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);\\&quot; target=\\&quot;_blank\\&quot; title=\\&quot;Job - Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh - \\u0110\\u00e0i Ph\\u00e1t Thanh V\\u00e0 Truy\\u1ec1n H\\u00ecnh V\\u0129nh Long\\&quot;&gt;&lt;strong style=\\&quot;box-sizing: border-box; display: block;\\&quot;&gt;Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh&lt;\\/strong&gt;&lt;\\/a&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;&lt;a href=\\&quot;http:\\/\\/www.vietnamworks.com\\/quay-phim-va-dao-dien-truyen-hinh-487919-jd\\&quot; style=\\&quot;box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);\\&quot; target=\\&quot;_blank\\&quot; title=\\&quot;Job - Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh - \\u0110\\u00e0i Ph\\u00e1t Thanh V\\u00e0 Truy\\u1ec1n H\\u00ecnh V\\u0129nh Long\\&quot;&gt;&lt;strong style=\\&quot;box-sizing: border-box; display: block;\\&quot;&gt;Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh&lt;\\/strong&gt;&lt;\\/a&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;&lt;a href=\\&quot;http:\\/\\/www.vietnamworks.com\\/quay-phim-va-dao-dien-truyen-hinh-487919-jd\\&quot; style=\\&quot;box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);\\&quot; target=\\&quot;_blank\\&quot; title=\\&quot;Job - Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh - \\u0110\\u00e0i Ph\\u00e1t Thanh V\\u00e0 Truy\\u1ec1n H\\u00ecnh V\\u0129nh Long\\&quot;&gt;&lt;strong style=\\&quot;box-sizing: border-box; display: block;\\&quot;&gt;Quay Phim V\\u00e0 \\u0110\\u1ea1o Di\\u1ec5n Truy\\u1ec1n H\\u00ecnh&lt;\\/strong&gt;&lt;\\/a&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Film and television director&quot;,&quot;slug_en&quot;:&quot;film-and-television-director--7HlhdTBWcVW&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Film and television director&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Film and television director&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Film and television director&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 09:58:05', '2014-07-03 09:58:05'),
(224, 1, 361, 5, 'insert', 'ER88888', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;1aRNMTn6rdm&quot;,&quot;code&quot;:&quot;ER88888&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Nh\\u00e2n Vi\\u00ean Kinh Doanh&quot;,&quot;slug_vi&quot;:&quot;nhan-vien-kinh-doanh-1aRNMTn6rdm&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Nh\\u00e2n Vi\\u00ean Kinh Doanh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Nh\\u00e2n Vi\\u00ean Kinh Doanh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Nh\\u00e2n Vi\\u00ean Kinh Doanh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Sales Staff&quot;,&quot;slug_en&quot;:&quot;sales-staff--1aRNMTn6rdm&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Sales Staff&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Sales Staff&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Sales Staff&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 09:59:04', '2014-07-03 09:59:04'),
(225, 1, 361, 3, 'edit', 'AD588744', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;m7i0bWM12S&quot;,&quot;code&quot;:&quot;AD588744&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Chief Accountant&quot;,&quot;slug_vi&quot;:&quot;chief-accountant-m7i0bWM12S&quot;,&quot;em_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets\\/img\\/icon\\/icon-shape.png) 0% 1px no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;K\\u1ebf to\\u00e1n tr\\u01b0\\u1edfng&quot;,&quot;slug_en&quot;:&quot;ke-toan-truong--m7i0bWM12S&quot;,&quot;em_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;K\\u1ebf to\\u00e1n tr\\u01b0\\u1edfng&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;K\\u1ebf to\\u00e1n tr\\u01b0\\u1edfng&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;K\\u1ebf to\\u00e1n tr\\u01b0\\u1edfng&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;}', 1, '2014-07-03 09:59:44', '2014-07-03 09:59:44'),
(226, 1, 361, 3, 'edit', 'AD588744', '{&quot;slug_vi&quot;:&quot;ke-toan-truong-m7i0bWM12S&quot;,&quot;slug_en&quot;:&quot;chief-accountant--m7i0bWM12S&quot;,&quot;em_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz\\/module\\/assets\\/img\\/icon\\/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz\\/module\\/assets\\/img\\/icon\\/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;&lt;a href=\\&quot;javscript:void(0);\\&quot; style=\\&quot;font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz\\/module\\/assets\\/img\\/icon\\/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;\\&quot; title=\\&quot;\\&quot;&gt;Chief Accountant&lt;\\/a&gt;&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;}', 1, '2014-07-03 10:00:20', '2014-07-03 10:00:20'),
(227, 1, 361, 2, 'edit', 'AD5555', '{&quot;name_vi&quot;:&quot;Gi\\u00e1m \\u0111\\u1ed1c t\\u00e0i ch\\u00ednh&quot;,&quot;slug_vi&quot;:&quot;giam-doc-tai-chinh-aWUzTgaoNN&quot;,&quot;em_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;Gi\\u00e1m \\u0111\\u1ed1c t\\u00e0i ch\\u00ednh&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;Gi\\u00e1m \\u0111\\u1ed1c t\\u00e0i ch\\u00ednh&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;ul style=\\&quot;padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);\\&quot;&gt;\\r\\n\\t&lt;li style=\\&quot;padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);\\&quot;&gt;Gi\\u00e1m \\u0111\\u1ed1c t\\u00e0i ch\\u00ednh&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n&quot;}', 1, '2014-07-03 10:00:41', '2014-07-03 10:00:41'),
(228, 1, 361, 1, 'edit', 'VD25665', '{&quot;name_vi&quot;:&quot;Gi\\u00e1m \\u0111\\u1ed1c \\u0110i\\u1ec1u h\\u00e0nh qu\\u1ed1c gia&quot;,&quot;slug_vi&quot;:&quot;giam-doc-dieu-hanh-quoc-gia-8I9nZxGMm5&quot;}', 1, '2014-07-03 10:01:05', '2014-07-03 10:01:05'),
(229, 1, 361, 6, 'insert', 'SD58974', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;64&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;2QxtPM07IVH&quot;,&quot;code&quot;:&quot;SD58974&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Ph\\u00e2n t\\u00edch Gi\\u00e1m s\\u00e1t b\\u00e1n h\\u00e0ng&quot;,&quot;slug_vi&quot;:&quot;phan-tich-giam-sat-ban-hang-2QxtPM07IVH&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Ph\\u00e2n t\\u00edch Gi\\u00e1m s\\u00e1t b\\u00e1n h\\u00e0ng&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Ph\\u00e2n t\\u00edch Gi\\u00e1m s\\u00e1t b\\u00e1n h\\u00e0ng&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Ph\\u00e2n t\\u00edch Gi\\u00e1m s\\u00e1t b\\u00e1n h\\u00e0ng&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Sales Analysis Supervisor&quot;,&quot;slug_en&quot;:&quot;sales-analysis-supervisor--2QxtPM07IVH&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Sales Analysis Supervisor&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Sales Analysis Supervisor&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Sales Analysis Supervisor&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:02:56', '2014-07-03 10:02:56'),
(230, 1, 361, 7, 'insert', 'DE88888', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;64&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;2SIo3X0huBi&quot;,&quot;code&quot;:&quot;DE88888&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Qu\\u1ea3n l\\u00fd s\\u1ea3n xu\\u1ea5t \\/ nh\\u00e0 m\\u00e1y&quot;,&quot;slug_vi&quot;:&quot;quan-ly-san-xuat-nha-may-2SIo3X0huBi&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Qu\\u1ea3n l\\u00fd s\\u1ea3n xu\\u1ea5t \\/ nh\\u00e0 m\\u00e1y&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Qu\\u1ea3n l\\u00fd s\\u1ea3n xu\\u1ea5t \\/ nh\\u00e0 m\\u00e1y&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Qu\\u1ea3n l\\u00fd s\\u1ea3n xu\\u1ea5t \\/ nh\\u00e0 m\\u00e1y&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Production \\/ Plant Manager&quot;,&quot;slug_en&quot;:&quot;production-plant-manager--2SIo3X0huBi&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Production \\/ Plant Manager&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Production \\/ Plant Manager&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Production \\/ Plant Manager&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:04:16', '2014-07-03 10:04:16'),
(231, 1, 361, 8, 'insert', 'FR58888', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;9ESlKzcRDhL&quot;,&quot;code&quot;:&quot;FR58888&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&quot;,&quot;slug_vi&quot;:&quot;trung-tam-du-lieu-cao-cap-system-engineer-9ESlKzcRDhL&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Senior Data Center System Engineer&quot;,&quot;slug_en&quot;:&quot;senior-data-center-system-engineer--9ESlKzcRDhL&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:06:29', '2014-07-03 10:06:29'),
(232, 1, 361, 9, 'insert', 'FR55555', '{&quot;location_id&quot;:&quot;76&quot;,&quot;ids&quot;:&quot;szVTTQIXQiM&quot;,&quot;code&quot;:&quot;FR55555&quot;,&quot;name_vi&quot;:&quot;Gi\\u00e1m \\u0110\\u1ed1c T\\u00e0i Ch\\u00ednh&quot;,&quot;slug_vi&quot;:&quot;giam-doc-tai-chinh-szVTTQIXQiM&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Gi\\u00e1m \\u0110\\u1ed1c T\\u00e0i Ch\\u00ednh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Gi\\u00e1m \\u0110\\u1ed1c T\\u00e0i Ch\\u00ednh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;&lt;span style=\\&quot;color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);\\&quot;&gt;Gi\\u00e1m \\u0110\\u1ed1c T\\u00e0i Ch\\u00ednh&lt;\\/span&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Chief Financial Officer&quot;,&quot;slug_en&quot;:&quot;chief-financial-officer--szVTTQIXQiM&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Chief Financial Officer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Chief Financial Officer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Chief Financial Officer&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:07:31', '2014-07-03 10:07:31'),
(233, 1, 361, 10, 'insert', 'F544444', '{&quot;location_id&quot;:&quot;4&quot;,&quot;ids&quot;:&quot;odexA39YXfD&quot;,&quot;code&quot;:&quot;F544444&quot;,&quot;name_vi&quot;:&quot;Nh\\u00e2n Vi\\u00ean T\\u00e0i Ch\\u00ednh K\\u1ebf To\\u00e1n&quot;,&quot;slug_vi&quot;:&quot;nhan-vien-tai-chinh-ke-toan-odexA39YXfD&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Nh\\u00e2n Vi\\u00ean T\\u00e0i Ch\\u00ednh K\\u1ebf To\\u00e1n&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Nh\\u00e2n Vi\\u00ean T\\u00e0i Ch\\u00ednh K\\u1ebf To\\u00e1n&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Nh\\u00e2n Vi\\u00ean T\\u00e0i Ch\\u00ednh K\\u1ebf To\\u00e1n&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Finance and Accounting Staff&quot;,&quot;slug_en&quot;:&quot;finance-and-accounting-staff--odexA39YXfD&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Finance and Accounting Staff&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Finance and Accounting Staff&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Finance and Accounting Staff&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:08:46', '2014-07-03 10:08:46'),
(234, 1, 361, 11, 'insert', 'derrffff', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;67&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;kt2INMjkUNF&quot;,&quot;code&quot;:&quot;derrffff&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Tr\\u01b0\\u1edfng Ph\\u00f2ng Kinh Doanh Qu\\u1ea3ng C\\u00e1o&quot;,&quot;slug_vi&quot;:&quot;truong-phong-kinh-doanh-quang-cao-kt2INMjkUNF&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Tr\\u01b0\\u1edfng Ph\\u00f2ng Kinh Doanh Qu\\u1ea3ng C\\u00e1o&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Tr\\u01b0\\u1edfng Ph\\u00f2ng Kinh Doanh Qu\\u1ea3ng C\\u00e1o&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Tr\\u01b0\\u1edfng Ph\\u00f2ng Kinh Doanh Qu\\u1ea3ng C\\u00e1o&lt;\\/p&gt;\\r\\n&quot;,&quot;name_en&quot;:&quot;Advertising Sales Manager&quot;,&quot;slug_en&quot;:&quot;advertising-sales-manager--kt2INMjkUNF&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Advertising Sales Manager&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Advertising Sales Manager&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Advertising Sales Manager&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-07-03 10:10:15', '2014-07-03 10:10:15'),
(235, 1, 361, 8, 'edit', 'FR58888', '{&quot;function_id&quot;:&quot;1&quot;,&quot;industry_id&quot;:&quot;1&quot;,&quot;location_id&quot;:&quot;8&quot;,&quot;level_id&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;9ESlKzcRDh&quot;,&quot;code&quot;:&quot;FR58888&quot;,&quot;tags&quot;:1,&quot;hot&quot;:&quot;1&quot;,&quot;name_vi&quot;:&quot;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&quot;,&quot;slug_vi&quot;:&quot;trung-tam-du-lieu-cao-cap-system-engineer-9ESlKzcRDh&quot;,&quot;em_description_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_vi&quot;:&quot;&lt;p&gt;Trung t\\u00e2m d\\u1eef li\\u1ec7u cao c\\u1ea5p System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;salary_min_vi&quot;:&quot;1000000&quot;,&quot;salary_max_vi&quot;:&quot;10000000&quot;,&quot;name_en&quot;:&quot;Senior Data Center System Engineer&quot;,&quot;slug_en&quot;:&quot;senior-data-center-system-engineer--9ESlKzcRDh&quot;,&quot;em_description_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_requirement_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;job_description_en&quot;:&quot;&lt;p&gt;Senior Data Center System Engineer&lt;\\/p&gt;\\r\\n&quot;,&quot;salary_min_en&quot;:&quot;100&quot;,&quot;salary_max_en&quot;:&quot;1000&quot;}', 1, '2014-07-04 09:47:27', '2014-07-04 09:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_module`
--

DROP TABLE IF EXISTS `wz_admin_module`;
CREATE TABLE IF NOT EXISTS `wz_admin_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `type` varchar(32) DEFAULT 'module',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `custom` tinyint(1) DEFAULT '0',
  `feature` varchar(50) DEFAULT '',
  `order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=366 ;

--
-- Dumping data for table `wz_admin_module`
--

INSERT INTO `wz_admin_module` (`id`, `pid`, `type`, `name`, `slug`, `folder`, `custom`, `feature`, `order`, `status`, `changed`, `created`) VALUES
(13, 14, 'module', 'Support', 'support', 'support', 0, '{"add":0,"edit":0,"delete":0,"showhide":0}', 0, 1, '2014-04-29 14:19:27', '2014-04-29 14:19:29'),
(24, 0, 'module', 'Manage Information Category', 'manage-information-category', 'information_category', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 0, 1, '2014-06-20 16:59:57', '2014-06-18 16:09:50'),
(23, 0, 'module', 'Manage Information', 'manage-information', 'information', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 24, 1, '2014-06-20 17:00:58', '2014-06-18 15:01:56'),
(25, 0, 'module', 'FAQ', 'faq', 'faq', 0, '{"add":0,"edit":1,"delete":1,"showhide":1}', 23, 1, '2014-06-18 17:49:22', '2014-06-18 16:36:17'),
(344, 0, 'module', 'Manage HR Services Category', 'manage-hr-services-category', 'hrservices_category', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 22, 1, '2014-06-30 17:34:00', '2014-06-19 09:42:01'),
(345, 0, 'module', 'Manage HR Services', 'manage-hr-services', 'hrservices', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 21, 1, '2014-06-30 17:33:02', '2014-06-19 09:51:41'),
(346, 0, 'module', 'Manage About Award', 'manage-about-award', 'about_award', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 20, 1, '2014-06-19 17:03:24', '2014-06-19 17:03:24'),
(347, 0, 'module', 'Manage Client', 'manage-client', 'client', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 19, 1, '2014-06-19 17:33:23', '2014-06-19 17:24:26'),
(348, 0, 'module', 'Manage Partners', 'manage-partners', 'partners', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 18, 1, '2014-06-19 17:46:22', '2014-06-19 17:46:22'),
(349, 0, 'module', 'Manage Executive Team', 'manage-executive-team', 'executive_team', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 17, 1, '2014-06-20 09:45:28', '2014-06-20 09:45:28'),
(350, 0, 'module', 'Office Locations (Contact us)', 'office-locations-contact-us', 'office_location', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 16, 1, '2014-06-20 10:08:12', '2014-06-20 10:08:12'),
(351, 0, 'module', 'Manage Career Talentnet Category', 'manage-career-talentnet-category', 'career_talentnet_category', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 15, 1, '2014-06-20 17:11:00', '2014-06-20 17:11:00'),
(352, 0, 'module', 'Manage Career Talentnet', 'manage-career-talentnet', 'career_talentnet', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 14, 1, '2014-06-20 17:21:44', '2014-06-20 17:21:44'),
(353, 0, 'module', 'Manage Market Entry', 'manage-market-entry', 'market_entry', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 13, 1, '2014-06-20 17:34:59', '2014-06-20 17:34:46'),
(354, 0, 'module', 'Manage Banner', 'manage-banner', 'banner', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 12, 1, '2014-06-20 17:56:30', '2014-06-20 17:56:30'),
(355, 0, 'module', 'Manage Endorser', 'manage-endorser', 'endorser', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 11, 1, '2014-06-20 18:22:41', '2014-06-20 18:19:48'),
(356, 0, 'module', 'Manage Users', 'manage-users', 'user', 0, '{"add":0,"edit":0,"delete":1,"showhide":1}', 10, 1, '2014-06-21 10:18:40', '2014-06-21 10:18:40'),
(357, 0, 'module', 'Manage Function Jobs', 'manage-function-jobs', 'function_job', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 9, 1, '2014-06-24 10:35:30', '2014-06-24 10:35:08'),
(358, 0, 'module', 'Manage Industry Jobs', 'manage-industry-jobs', 'industry_job', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 8, 1, '2014-06-24 10:41:31', '2014-06-24 10:41:31'),
(359, 0, 'module', 'Manage Level Jobs', 'manage-level-jobs', 'level_job', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 7, 1, '2014-06-24 10:44:07', '2014-06-24 10:44:07'),
(360, 0, 'module', 'Manage Salary Jobs', 'manage-salary-jobs', 'salary_job', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 6, 1, '2014-06-24 10:46:05', '2014-06-24 10:46:05'),
(361, 0, 'module', 'Manage Jobs', 'manage-jobs', 'jobs', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 5, 1, '2014-06-24 10:49:40', '2014-06-24 10:49:40'),
(362, 0, 'module', 'Manage Degree', 'manage-degree', 'degree', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 4, 1, '2014-06-27 11:50:09', '2014-06-27 11:50:09'),
(363, 0, 'module', 'Manage Comment Client', 'manage-comment-client', 'comment_client', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 3, 1, '2014-06-30 15:50:00', '2014-06-30 15:50:00'),
(364, 0, 'module', 'Manage New Arrivals', 'manage-new-arrivals', 'new_arrivals', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 2, 1, '2014-06-30 16:32:35', '2014-06-30 16:32:35'),
(365, 0, 'module', 'Manage New Arrivals Category', 'manage-new-arrivals-category', 'new_arrivals_category', 0, '{"add":1,"edit":1,"delete":1,"showhide":1}', 1, 1, '2014-06-30 16:33:19', '2014-06-30 16:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_module_edit_field`
--

DROP TABLE IF EXISTS `wz_admin_module_edit_field`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_edit_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL COMMENT 'Module ID',
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `field` varchar(32) DEFAULT NULL,
  `require` tinyint(1) DEFAULT '1',
  `data` text,
  `order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=325 ;

--
-- Dumping data for table `wz_admin_module_edit_field`
--

INSERT INTO `wz_admin_module_edit_field` (`id`, `mid`, `name`, `type`, `field`, `require`, `data`, `order`, `status`, `changed`, `created`) VALUES
(5, 2, 'Mô tả', 'textarea', 'description', 1, '', 14, 1, '2013-10-31 16:07:30', '2013-10-09 10:47:27'),
(12, 2, 'Thể loại', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_news_category","table_foreign_field":"name","multiple":0}', 9, 1, '2013-11-07 18:06:49', '2013-10-09 12:16:16'),
(56, 2, 'Gallery', 'file_multiupload', 'image', 1, '{"directory":"uploads\\/news\\/gallery\\/","extension":"jpg|jpeg|png|gif"}', 1, 1, '2014-04-05 00:27:45', '2014-04-05 00:27:45'),
(21, 2, 'Maps', 'maps', 'maps', 1, '', 19, 1, '2013-10-11 16:42:08', '2013-10-11 16:42:08'),
(15, 2, 'Tags', 'tags', 'tags', 1, '', 16, 1, '2013-10-10 18:01:26', '2013-10-09 16:10:56'),
(43, 2, 'Slug', 'slug', 'slug', 1, '{"field_to_slug":"26"}', 3, 1, '2014-03-19 10:44:19', '2014-03-19 10:44:19'),
(17, 2, 'Loại', 'checkbox', 'type', 1, '{"value":"7|7\\r\\nvpop|Vpop\\r\\nuk|Uk\\r\\nkpop|Kpop"}', 15, 1, '2014-03-14 11:30:09', '2013-10-10 18:01:04'),
(18, 2, 'Nội dung', 'content', 'content', 1, '', 10, 1, '2013-10-21 11:53:33', '2013-10-11 12:41:32'),
(19, 2, 'Giới tính', 'radio', 'radio', 1, '{"value":"male|Nam\\r\\nfemale|N\\u1eef"}', 17, 1, '2014-04-05 11:59:38', '2013-10-11 12:46:44'),
(20, 2, 'Select', 'select', 'select', 1, '{"value":"Tran|7\\r\\nvpop|Vpop\\r\\nuk|Uk\\r\\nkpop|Kpop","multiple":0}', 18, 1, '2014-04-02 10:19:46', '2013-10-11 13:00:54'),
(23, 2, 'Video (200x200)', 'file', 'video', 1, '{"directory":"uploads\\/news\\/video\\/","extension":"mp4|jpg|pptx|ppt"}', 20, 1, '2014-04-05 12:00:21', '2013-10-18 10:33:23'),
(24, 2, 'Datetimepicker', 'datetimepicker', 'datetime_picker', 1, '{"date":1}', 11, 1, '2014-04-14 11:36:56', '2013-10-18 12:27:48'),
(25, 2, 'Youtube', 'youtube', 'youtube', 0, '', 21, 1, '2013-11-09 11:12:18', '2013-10-18 12:28:06'),
(26, 2, 'Tiêu đề', 'text', 'title', 1, '{"unique":1}', 0, 1, '2014-04-22 15:34:10', '2013-10-19 11:08:48'),
(27, 8, 'Tiêu đề', 'title', 'title', 1, '', 1, 1, '2013-10-24 12:46:25', '2013-10-24 12:46:25'),
(28, 8, 'Mô tả', 'description', 'description', 1, '', 3, 1, '2013-10-24 12:46:33', '2013-10-24 12:46:33'),
(29, 8, 'Nội dung', 'content', 'content', 1, '', 0, 1, '2013-10-24 12:46:48', '2013-10-24 12:46:48'),
(30, 2, 'Tỉnh thành', 'select_foreign_table', 'province', 1, '{"table_foreign":"wz_province","table_foreign_field":"name","multiple":0}', 12, 1, '2013-11-07 17:25:39', '2013-10-28 17:29:33'),
(48, 2, 'Quận huyện', 'select_foreign_table_children', 'district', 1, '{"table_foreign":"wz_district","table_foreign_field":"name","parent_field":"30","multiple":0}', 13, 1, '2014-03-19 15:04:00', '2014-03-19 15:00:41'),
(35, 2, 'Màu sắc', 'select_foreign_table', 'color', 1, '{"table_foreign":"wz_color","table_foreign_field":"name","multiple":0}', 6, 1, '2014-04-08 16:37:18', '2013-11-07 14:14:48'),
(36, 2, 'Tiếng việt', 'group', 'tieng-viet', 0, '', 7, 1, '2013-11-08 10:00:47', '2013-11-08 10:00:47'),
(37, 2, 'Color', 'color', 'rgba', 1, '', 4, 1, '2013-11-15 15:55:38', '2013-11-15 15:55:38'),
(38, 2, 'Đệ quy', 'select_foreign_recursive', 'recursive', 1, '{"table_foreign":"wz_article","table_foreign_field":"name","multiple":0}', 8, 1, '2013-11-16 11:07:01', '2013-11-16 11:07:01'),
(39, 9, 'Hình ảnh', 'file', 'image', 0, '{"directory":"uploads\\/product\\/images\\/","extension":"jpg|jpeg|png"}', 3, 1, '2014-03-14 16:41:17', '2014-03-14 16:41:17'),
(40, 9, 'Gallery', 'file_multiupload', 'gallery', 0, '{"directory":"uploads\\/product\\/gallery\\/","extension":"jpg|jpeg|png"}', 4, 1, '2014-03-15 10:28:11', '2014-03-14 17:19:03'),
(41, 9, 'Tags', 'tags', 'tags', 1, '', 5, 1, '2014-03-26 15:28:15', '2014-03-15 10:31:05'),
(45, 9, 'Tên sản phẩm', 'text', 'name', 1, '', 1, 1, '2014-03-19 14:48:58', '2014-03-19 14:48:58'),
(88, 11, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"87"}', 4, 1, '2014-04-21 15:13:26', '2014-04-21 15:13:26'),
(89, 9, 'Price', 'price', 'price', 1, '', 0, 1, '2014-04-21 16:14:35', '2014-04-21 16:14:35'),
(86, 9, 'Category', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_product_category","table_foreign_field":"name","language":0,"multiple":0}', 0, 1, '2014-04-15 17:29:16', '2014-04-15 17:29:16'),
(87, 11, 'Title', 'text', 'title_en', 1, '{"unique":0}', 1, 1, '2014-04-21 15:05:54', '2014-04-21 15:05:54'),
(55, 9, 'Mô tả', 'textarea', 'description', 1, '', 2, 1, '2014-03-19 16:18:17', '2014-03-19 16:18:17'),
(57, 10, 'Tiêu đề', 'text', 'title', 1, '', 1, 1, '2014-04-05 10:24:26', '2014-04-05 10:24:26'),
(58, 10, 'Slug', 'slug', 'slug', 0, '{"field_to_slug":"57"}', 2, 1, '2014-04-05 10:24:46', '2014-04-05 10:24:46'),
(59, 10, 'Description', 'textarea', 'description', 1, '', 3, 1, '2014-04-05 10:25:26', '2014-04-05 10:25:26'),
(60, 10, 'Content', 'content', 'content', 1, '', 4, 1, '2014-04-05 10:25:44', '2014-04-05 10:25:44'),
(61, 10, 'Tags', 'tags', 'tags', 1, '', 5, 1, '2014-04-05 10:25:57', '2014-04-05 10:25:57'),
(62, 10, 'Thể loại', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_news_category","table_foreign_field":"name","multiple":0}', 0, 1, '2014-04-05 10:27:23', '2014-04-05 10:27:23'),
(63, 10, 'Image', 'file', 'image', 1, '{"directory":"uploads\\/test\\/image\\/","extension":"jpg|jpeg|png"}', 7, 1, '2014-04-05 10:33:57', '2014-04-05 10:33:57'),
(64, 10, 'Gallery', 'file_multiupload', 'gallery', 1, '{"directory":"uploads\\/test\\/gallery\\/","extension":"jpg|jpeg|png"}', 6, 1, '2014-04-05 10:34:37', '2014-04-05 10:34:37'),
(65, 11, 'Tiêu đề', 'text', 'title_vi', 1, '{"unique":0}', 3, 1, '2014-04-21 15:05:26', '2014-04-05 11:18:13'),
(66, 11, 'Slug VI', 'slug', 'slug_vi', 0, '{"field_to_slug":"65"}', 2, 1, '2014-04-21 15:13:05', '2014-04-05 11:19:00'),
(67, 11, 'Mô tả', 'textarea', 'description', 1, '', 9, 1, '2014-04-05 11:19:17', '2014-04-05 11:19:17'),
(68, 11, 'Nội dung', 'content', 'content', 1, '', 10, 1, '2014-04-05 11:19:40', '2014-04-05 11:19:40'),
(78, 12, 'Logo', 'file', 'logo', 1, '{"directory":"uploads\\/channel\\/logo\\/","extension":"jpg|png"}', 1, 1, '2014-04-08 10:06:35', '2014-04-08 10:06:35'),
(75, 11, 'Meta keyword', 'text', 'meta_keyword', 0, '', 11, 1, '2014-04-08 09:50:07', '2014-04-08 09:50:07'),
(76, 11, 'Meta description', 'text', 'meta_description', 0, '', 12, 1, '2014-04-08 09:50:27', '2014-04-08 09:50:27'),
(77, 12, 'Tên', 'text', 'name', 1, '', 0, 1, '2014-04-08 10:06:00', '2014-04-08 10:06:00'),
(71, 11, 'Tags', 'tags', 'tags', 1, '', 13, 1, '2014-04-05 11:25:49', '2014-04-05 11:25:49'),
(79, 12, 'Link', 'text', 'link', 1, '', 2, 1, '2014-04-08 10:06:52', '2014-04-08 10:06:52'),
(74, 2, 'English', 'group', 'english', 0, '', 5, 1, '2014-04-05 11:57:47', '2014-04-05 11:57:47'),
(80, 2, 'IDS', 'ids', 'ids', 0, '', 2, 1, '2014-04-08 16:30:30', '2014-04-08 16:30:30'),
(81, 11, 'Category', 'select_foreign_table', 'pid', 0, '{"table_foreign":"wz_test_category","table_foreign_field":"name_vi","language":1,"multiple":0}', 0, 1, '2014-04-21 14:44:25', '2014-04-10 11:27:52'),
(82, 11, 'Đệ quy', 'select_foreign_recursive', 'article', 0, '{"table_foreign":"wz_test_article","table_foreign_field":"name_vi","language":1,"multiple":0}', 8, 1, '2014-04-11 17:39:04', '2014-04-11 17:39:04'),
(83, 11, 'Province', 'select_foreign_table', 'province', 0, '{"table_foreign":"wz_test_province","table_foreign_field":"name_vi","language":1,"multiple":0}', 5, 1, '2014-04-11 22:02:17', '2014-04-11 22:00:10'),
(84, 11, 'District', 'select_foreign_table_children', 'district', 0, '{"table_foreign":"wz_test_district","table_foreign_field":"name_vi","parent_field":"83","language":1,"multiple":0}', 7, 1, '2014-04-11 22:08:30', '2014-04-11 22:01:37'),
(85, 11, 'IDS', 'ids', 'ids', 0, '', 6, 1, '2014-04-12 11:58:46', '2014-04-12 11:58:46'),
(90, 24, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 2, 1, '2014-06-18 12:03:16', '2014-06-18 12:03:16'),
(91, 24, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-18 12:03:49', '2014-06-18 12:03:49'),
(92, 24, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 3, 1, '2014-06-18 16:16:52', '2014-06-18 12:05:39'),
(93, 24, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"92"}', 4, 1, '2014-06-18 16:15:09', '2014-06-18 12:06:48'),
(94, 24, 'Name EN', 'text', 'name_en', 0, '{"unique":0}', 6, 1, '2014-06-18 16:16:46', '2014-06-18 12:07:14'),
(95, 24, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"94"}', 7, 1, '2014-06-18 16:15:18', '2014-06-18 12:07:35'),
(96, 23, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 4, 1, '2014-06-18 15:07:45', '2014-06-18 15:07:45'),
(97, 23, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 9, 1, '2014-06-18 15:08:10', '2014-06-18 15:08:10'),
(98, 23, 'Category', 'select_foreign_table', 'category_id', 1, '{"table_foreign":"wz_information_category","table_foreign_field":"name_en","language":1,"multiple":0}', 0, 1, '2014-06-20 17:01:22', '2014-06-18 15:09:21'),
(99, 23, 'IDS', 'ids', 'ids', 0, '', 1, 1, '2014-06-18 15:09:59', '2014-06-18 15:09:59'),
(100, 23, 'Name VN', 'text', 'name_vi', 0, '{"unique":0}', 5, 1, '2014-06-18 15:10:29', '2014-06-18 15:10:29'),
(101, 23, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"100"}', 6, 1, '2014-06-18 15:10:50', '2014-06-18 15:10:50'),
(102, 23, 'Name EN', 'text', 'name_en', 0, '{"unique":0}', 10, 1, '2014-06-18 15:11:14', '2014-06-18 15:11:14'),
(103, 23, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"102"}', 11, 1, '2014-06-18 15:11:35', '2014-06-18 15:11:35'),
(104, 23, 'Description VN', 'textarea', 'description_vi', 0, '', 7, 1, '2014-06-18 15:12:00', '2014-06-18 15:12:00'),
(105, 23, 'Description EN', 'textarea', 'description_en', 0, '', 12, 1, '2014-06-18 15:12:37', '2014-06-18 15:12:37'),
(106, 23, 'Content VN', 'content', 'content_vi', 0, '', 8, 1, '2014-06-18 15:13:05', '2014-06-18 15:13:05'),
(107, 23, 'Content EN', 'content', 'content_en', 0, '', 13, 1, '2014-06-18 15:13:22', '2014-06-18 15:13:22'),
(182, 351, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-20 17:11:38', '2014-06-20 17:11:38'),
(183, 351, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 4, 1, '2014-06-20 17:11:50', '2014-06-20 17:11:50'),
(109, 23, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/information\\/","extension":"jpg|png|gif"}', 3, 1, '2014-06-30 11:49:46', '2014-06-18 15:52:15'),
(110, 25, 'Fullname', 'text', 'fullname', 0, '{"unique":0}', 0, 1, '2014-06-18 16:47:16', '2014-06-18 16:47:16'),
(111, 25, 'Company name', 'text', 'company', 0, '{"unique":0}', 0, 1, '2014-06-18 16:47:38', '2014-06-18 16:47:38'),
(112, 25, 'Email', 'text', 'email', 0, '{"unique":0}', 0, 1, '2014-06-18 16:47:54', '2014-06-18 16:47:54'),
(113, 25, 'Question', 'textarea', 'question', 0, '', 0, 1, '2014-06-18 16:48:38', '2014-06-18 16:48:38'),
(114, 25, 'Answer', 'textarea', 'answer', 0, '', 0, 1, '2014-06-18 16:49:05', '2014-06-18 16:49:05'),
(115, 25, 'Ngày tạo', 'datetimepicker', 'created', 0, '{"date":1}', 0, 1, '2014-06-18 16:49:45', '2014-06-18 16:49:45'),
(116, 344, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-19 09:44:39', '2014-06-19 09:44:39'),
(117, 344, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-19 09:45:05', '2014-06-19 09:45:05'),
(118, 344, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 2, 1, '2014-06-19 09:46:19', '2014-06-19 09:46:11'),
(119, 344, 'Name EN', 'text', 'name_en', 1, '{"unique":0}', 6, 1, '2014-06-19 09:46:49', '2014-06-19 09:46:49'),
(120, 344, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/hrservices_category\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-19 09:50:36', '2014-06-19 09:50:36'),
(121, 345, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 2, 1, '2014-06-19 09:53:49', '2014-06-19 09:53:49'),
(122, 345, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 6, 1, '2014-06-19 09:54:00', '2014-06-19 09:54:00'),
(123, 345, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 3, 1, '2014-06-19 09:54:25', '2014-06-19 09:54:25'),
(124, 345, 'Name EN', 'text', 'name_en', 1, '{"unique":0}', 7, 1, '2014-06-19 09:54:47', '2014-06-19 09:54:47'),
(125, 345, 'Content VN', 'content', 'content_vi', 0, '', 5, 1, '2014-06-19 09:55:10', '2014-06-19 09:55:10'),
(126, 345, 'Content EN', 'content', 'content_en', 0, '', 9, 1, '2014-06-19 09:55:42', '2014-06-19 09:55:42'),
(127, 345, 'Category', 'select_foreign_table', 'category_id', 1, '{"table_foreign":"wz_hrservices_category","table_foreign_field":"name_vi","language":1,"multiple":0}', 0, 1, '2014-06-19 10:06:35', '2014-06-19 09:56:22'),
(128, 345, 'IDS', 'ids', 'ids', 0, '', 1, 1, '2014-06-19 09:56:50', '2014-06-19 09:56:50'),
(129, 345, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"124"}', 8, 1, '2014-06-19 09:57:19', '2014-06-19 09:57:08'),
(130, 345, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"123"}', 4, 1, '2014-06-19 09:57:37', '2014-06-19 09:57:37'),
(131, 344, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"119"}', 7, 1, '2014-06-19 09:58:14', '2014-06-19 09:58:14'),
(132, 344, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"118"}', 3, 1, '2014-06-19 09:58:35', '2014-06-19 09:58:35'),
(133, 346, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-19 17:07:05', '2014-06-19 17:07:05'),
(134, 346, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-19 17:07:17', '2014-06-19 17:07:17'),
(135, 346, 'Parent', 'select', 'parent_id', 1, '{"value":"1|About Talentnet\\n2|Adward","multiple":0}', 0, 1, '2014-06-19 17:09:37', '2014-06-19 17:09:37'),
(136, 346, 'Title VN', 'text', 'name_vi', 0, '{"unique":1}', 2, 1, '2014-06-19 17:12:13', '2014-06-19 17:10:10'),
(137, 346, 'Title EN', 'text', 'name_en', 0, '{"unique":1}', 6, 1, '2014-06-19 17:12:20', '2014-06-19 17:10:31'),
(138, 346, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"136"}', 3, 1, '2014-06-19 17:10:51', '2014-06-19 17:10:51'),
(139, 346, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"137"}', 7, 1, '2014-06-19 17:11:22', '2014-06-19 17:11:22'),
(140, 346, 'Content VN', 'content', 'content_vi', 0, '', 4, 1, '2014-06-19 17:11:41', '2014-06-19 17:11:41'),
(141, 346, 'Content EN', 'content', 'content_en', 0, '', 8, 1, '2014-06-19 17:12:01', '2014-06-19 17:12:01'),
(142, 347, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-19 17:26:28', '2014-06-19 17:26:28'),
(143, 347, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-19 17:26:43', '2014-06-19 17:26:43'),
(144, 347, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-19 17:27:27', '2014-06-19 17:27:27'),
(145, 347, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 6, 1, '2014-06-19 17:27:45', '2014-06-19 17:27:45'),
(146, 347, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"145"}', 7, 1, '2014-06-19 17:28:09', '2014-06-19 17:28:09'),
(147, 347, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"144"}', 3, 1, '2014-06-19 17:28:26', '2014-06-19 17:28:26'),
(148, 347, 'Industry VN', 'text', 'industry_vi', 0, '{"unique":0}', 4, 1, '2014-06-19 17:31:06', '2014-06-19 17:31:00'),
(149, 347, 'Industry EN', 'text', 'industry_en', 0, '{"unique":0}', 8, 1, '2014-06-19 17:31:22', '2014-06-19 17:31:22'),
(150, 347, 'Show Talentnet', 'select', 'is_home', 0, '{"value":"0|Hide\\n1|Show","multiple":0}', 0, 1, '2014-06-20 16:02:32', '2014-06-19 17:33:02'),
(151, 347, 'Image', 'file', 'image', 1, '{"directory":"uploads\\/client\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-19 17:51:28', '2014-06-19 17:35:41'),
(152, 348, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-19 17:47:57', '2014-06-19 17:47:57'),
(153, 348, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 4, 1, '2014-06-19 17:48:18', '2014-06-19 17:48:18'),
(154, 348, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-19 17:48:54', '2014-06-19 17:48:54'),
(155, 348, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 5, 1, '2014-06-19 17:49:23', '2014-06-19 17:49:23'),
(156, 348, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"154"}', 3, 1, '2014-06-19 17:49:41', '2014-06-19 17:49:41'),
(157, 348, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"155"}', 6, 1, '2014-06-19 17:50:03', '2014-06-19 17:50:03'),
(158, 348, 'Image', 'file', 'image', 1, '{"directory":"uploads\\/partners\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-19 17:51:15', '2014-06-19 17:51:15'),
(159, 349, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 2, 1, '2014-06-20 09:48:09', '2014-06-20 09:48:09'),
(160, 349, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 7, 1, '2014-06-20 09:48:24', '2014-06-20 09:48:24'),
(161, 349, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 3, 1, '2014-06-20 09:49:23', '2014-06-20 09:49:23'),
(162, 349, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 8, 1, '2014-06-20 09:49:44', '2014-06-20 09:49:44'),
(163, 349, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"162"}', 9, 1, '2014-06-20 09:50:06', '2014-06-20 09:50:06'),
(164, 349, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"161"}', 4, 1, '2014-06-20 09:50:25', '2014-06-20 09:50:25'),
(165, 349, 'Position VN', 'textarea', 'position_vi', 0, '', 5, 1, '2014-06-20 09:51:15', '2014-06-20 09:51:15'),
(166, 349, 'Position EN', 'textarea', 'position_en', 0, '', 10, 1, '2014-06-20 09:54:22', '2014-06-20 09:54:22'),
(167, 349, 'Image', 'file', 'image', 1, '{"directory":"uploads\\/executive_team\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-20 09:57:13', '2014-06-20 09:57:13'),
(168, 350, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-20 10:09:36', '2014-06-20 10:09:36'),
(169, 350, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-20 10:09:50', '2014-06-20 10:09:50'),
(170, 350, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-20 10:10:32', '2014-06-20 10:10:32'),
(171, 350, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 7, 1, '2014-06-20 10:10:56', '2014-06-20 10:10:56'),
(172, 350, 'Category EN', 'text', 'category_en', 0, '{"unique":0}', 6, 1, '2014-06-20 10:11:21', '2014-06-20 10:11:21'),
(173, 350, 'Category VN', 'text', 'category_vi', 0, '{"unique":0}', 1, 1, '2014-06-20 10:11:42', '2014-06-20 10:11:42'),
(174, 350, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"171"}', 8, 1, '2014-06-20 10:12:25', '2014-06-20 10:12:25'),
(175, 350, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"170"}', 3, 1, '2014-06-20 10:12:51', '2014-06-20 10:12:51'),
(176, 350, 'Position VN', 'text', 'position_vi', 0, '{"unique":0}', 4, 1, '2014-06-20 10:14:10', '2014-06-20 10:14:10'),
(177, 350, 'Position EN', 'text', 'position_en', 0, '{"unique":0}', 9, 1, '2014-06-20 10:14:33', '2014-06-20 10:14:33'),
(178, 350, 'General', 'group', 'general', 0, '', 10, 1, '2014-06-20 10:15:15', '2014-06-20 10:15:15'),
(179, 350, 'Phone', 'text', 'phone', 0, '{"unique":0}', 12, 1, '2014-06-20 10:15:38', '2014-06-20 10:15:38'),
(180, 350, 'Email', 'text', 'email', 0, '{"unique":0}', 11, 1, '2014-06-20 10:16:04', '2014-06-20 10:16:04'),
(181, 23, 'Show Home', 'radio', 'is_home', 0, '{"value":"0|Hide\\r\\n1|Show"}', 2, 1, '2014-06-30 15:38:47', '2014-06-20 15:55:51'),
(184, 351, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-20 17:12:25', '2014-06-20 17:12:25'),
(185, 351, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 5, 1, '2014-06-20 17:13:07', '2014-06-20 17:13:07'),
(186, 351, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"184"}', 3, 1, '2014-06-20 17:13:59', '2014-06-20 17:13:59'),
(187, 351, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"185"}', 6, 1, '2014-06-20 17:14:32', '2014-06-20 17:14:32'),
(188, 351, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/career_talentnet_category\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-30 11:48:38', '2014-06-20 17:17:48'),
(189, 24, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/information_category\\/","extension":"jpg|png|gif"}', 1, 1, '2014-06-30 11:49:18', '2014-06-20 17:19:00'),
(190, 352, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 2, 1, '2014-06-20 17:22:46', '2014-06-20 17:22:46'),
(191, 352, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 7, 1, '2014-06-20 17:23:07', '2014-06-20 17:23:07'),
(192, 352, 'Category', 'select_foreign_table', 'category_id', 1, '{"table_foreign":"wz_career_talentnet_category","table_foreign_field":"name_en","language":1,"multiple":0}', 0, 1, '2014-06-20 17:30:44', '2014-06-20 17:23:46'),
(193, 352, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 3, 1, '2014-06-20 17:24:06', '2014-06-20 17:24:06'),
(194, 352, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 8, 1, '2014-06-20 17:24:27', '2014-06-20 17:24:27'),
(195, 352, 'IDS', 'ids', 'ids', 0, '', 1, 1, '2014-06-20 17:24:51', '2014-06-20 17:24:51'),
(196, 352, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"194"}', 9, 1, '2014-06-20 17:25:32', '2014-06-20 17:25:32'),
(197, 352, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"193"}', 5, 1, '2014-06-20 17:25:52', '2014-06-20 17:25:52'),
(198, 352, 'Description VN', 'textarea', 'description_vi', 0, '', 4, 1, '2014-06-20 17:26:16', '2014-06-20 17:26:16'),
(199, 352, 'Description EN', 'textarea', 'description_en', 0, '', 10, 1, '2014-06-20 17:26:32', '2014-06-20 17:26:32'),
(200, 352, 'Content VN', 'content', 'content_vi', 0, '', 6, 1, '2014-06-20 17:26:58', '2014-06-20 17:26:58'),
(201, 352, 'Content EN', 'content', 'content_en', 0, '', 11, 1, '2014-06-20 17:27:18', '2014-06-20 17:27:18'),
(202, 352, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/carrer_talentnet\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-30 11:48:57', '2014-06-20 17:28:03'),
(203, 352, 'Show Frontend', 'select', 'is_home', 0, '{"value":"0|Hide\\n1|Show","multiple":0}', 0, 1, '2014-06-20 17:29:36', '2014-06-20 17:29:36'),
(204, 353, 'Parent', 'select', 'parent', 1, '{"value":"1|HR Services For News Bussines\\n2|Insights","multiple":0}', 0, 1, '2014-06-20 17:43:14', '2014-06-20 17:43:14'),
(205, 353, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 3, 1, '2014-06-20 17:44:22', '2014-06-20 17:44:22'),
(206, 353, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 8, 1, '2014-06-20 17:44:38', '2014-06-20 17:44:38'),
(207, 353, 'Name EN', 'text', 'name_en', 1, '{"unique":0}', 9, 1, '2014-06-20 17:46:24', '2014-06-20 17:46:24'),
(208, 353, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 4, 1, '2014-06-20 17:46:41', '2014-06-20 17:46:41'),
(209, 353, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"207"}', 10, 1, '2014-06-20 17:47:03', '2014-06-20 17:47:03'),
(210, 353, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"208"}', 5, 1, '2014-06-20 17:48:49', '2014-06-20 17:48:49'),
(211, 353, 'IDS', 'ids', 'ids', 0, '', 1, 1, '2014-06-20 17:49:50', '2014-06-20 17:49:50'),
(212, 353, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/market_entry\\/","extension":"jpg|png|gif"}', 2, 1, '2014-06-30 11:50:07', '2014-06-20 17:50:42'),
(213, 353, 'Description EN', 'textarea', 'description_en', 0, '', 11, 1, '2014-06-20 17:52:07', '2014-06-20 17:52:07'),
(214, 353, 'Description VN', 'textarea', 'description_vi', 0, '', 6, 1, '2014-06-20 17:52:38', '2014-06-20 17:52:38'),
(215, 353, 'Content EN', 'content', 'content_en', 0, '', 12, 1, '2014-06-20 17:52:54', '2014-06-20 17:52:54'),
(216, 353, 'Content VN', 'content', 'content_vi', 0, '', 7, 1, '2014-06-20 17:53:16', '2014-06-20 17:53:16'),
(217, 353, 'Show Frontend', 'select', 'is_home', 0, '{"value":"0|Hide\\n1|Show","multiple":0}', 0, 1, '2014-06-20 17:54:08', '2014-06-20 17:54:08'),
(218, 354, 'Select Module', 'select', 'parent', 1, '{"value":"1|HOME\\r\\n2-1|ABOUT TALENTNET \\/ Home\\r\\n2-2|ABOUT \\/ Client List\\r\\n2-3|ABOUT \\/ Executive team\\r\\n2-4|ABOUT \\/ Awards\\r\\n2-5|ABOUT \\/ Office Locations\\r\\n3-1|HR SERVICES \\/ Executive Search Service\\r\\n3-2|HR SERVICES \\/ Payroll and HR Outsourcing Service\\r\\n3-3|HR SERVICES \\/ Mercer Salary Survey and HR Consulting\\r\\n4-1|CAREER AT TALENTNET \\/ News- Activities\\r\\n4-2|CAREER AT TALENTNET \\/ Talentnet Inside\\r\\n4-3|CAREER AT TALENTNET \\/ Carreer\\r\\n5-1|CANDIDATES \\/ Home\\r\\n5-2|CANDIDATES \\/ Job Search\\r\\n5-3|CANDIDATES \\/ Job List\\r\\n5-4|CANDIDATES \\/ Create CV\\r\\n5-5|CANDIDATES \\/ Account Management\\r\\n5-6|CANDIDATES \\/ Account Management\\r\\n5-7|CANDIDATES \\/ Sharing Corner\\r\\n6-1|NEW ARRIVALS \\/ Snapshot\\/ At a glance\\r\\n6-2|NEW ARRIVALS \\/ Insights\\r\\n6-3|NEW ARRIVALS \\/ FAQ\\r\\n6-4|NEW ARRIVALS \\/ Case study - Testimonials\\r\\n7-1|INFORMATION CENTER \\/ Library\\r\\n7-2|INFORMATION CENTER \\/ Press Releases\\r\\n7-3|INFORMATION CENTER \\/ In the news\\r\\n7-4|INFORMATION CENTER \\/ Talentnet Expertise\\r\\n8|CONTACT TALENTNET\\r\\n9-1|Login & Register\\r\\n9-2|Online Payroll\\r\\n9-3|Salary Calculator","multiple":0}', 0, 1, '2014-07-01 15:11:33', '2014-06-20 18:00:10'),
(219, 354, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/banner\\/","extension":"jpg|png|gif"}', 1, 1, '2014-06-30 11:48:21', '2014-06-20 18:00:36'),
(220, 355, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-20 18:20:24', '2014-06-20 18:20:24'),
(221, 355, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 2, 1, '2014-06-20 18:20:37', '2014-06-20 18:20:37'),
(222, 355, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 1, 1, '2014-06-20 18:21:34', '2014-06-20 18:21:34'),
(223, 355, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 3, 1, '2014-06-20 18:21:55', '2014-06-20 18:21:55'),
(224, 356, 'First Name', 'text', 'firstname', 0, '{"unique":0}', 0, 1, '2014-06-21 10:22:04', '2014-06-21 10:22:04'),
(225, 356, 'Middle Name', 'text', 'middlename', 0, '{"unique":0}', 0, 1, '2014-06-21 10:22:28', '2014-06-21 10:22:28'),
(226, 356, 'Last Name', 'text', 'lastname', 0, '{"unique":0}', 0, 1, '2014-06-21 10:22:43', '2014-06-21 10:22:43'),
(227, 356, 'Email', 'text', 'email', 0, '{"unique":0}', 0, 1, '2014-06-21 10:22:55', '2014-06-21 10:22:55'),
(228, 357, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-24 10:36:16', '2014-06-24 10:36:16'),
(229, 357, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 3, 1, '2014-06-24 10:36:30', '2014-06-24 10:36:30'),
(230, 357, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 1, 1, '2014-06-24 10:36:49', '2014-06-24 10:36:49'),
(231, 357, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 4, 1, '2014-06-24 10:37:05', '2014-06-24 10:37:05'),
(232, 358, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-24 10:42:07', '2014-06-24 10:42:07'),
(233, 358, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 3, 1, '2014-06-24 10:42:17', '2014-06-24 10:42:17'),
(234, 358, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 1, 1, '2014-06-24 10:42:40', '2014-06-24 10:42:40'),
(235, 358, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 4, 1, '2014-06-24 10:42:56', '2014-06-24 10:42:56'),
(236, 359, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-24 10:44:50', '2014-06-24 10:44:50'),
(237, 359, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 3, 1, '2014-06-24 10:45:01', '2014-06-24 10:45:01'),
(238, 359, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 1, 1, '2014-06-24 10:45:18', '2014-06-24 10:45:18'),
(239, 359, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 4, 1, '2014-06-24 10:45:41', '2014-06-24 10:45:41'),
(240, 360, 'Salary', 'text', 'salary', 1, '{"unique":1}', 0, 1, '2014-06-24 10:48:13', '2014-06-24 10:48:13'),
(241, 361, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 8, 1, '2014-06-24 10:59:16', '2014-06-24 10:59:16'),
(242, 361, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 16, 1, '2014-06-24 10:59:27', '2014-06-24 10:59:27'),
(243, 361, 'All Function', 'select_foreign_table', 'function_id', 1, '{"table_foreign":"wz_function_job","table_foreign_field":"name_vi","language":1,"multiple":0}', 0, 1, '2014-06-24 11:00:10', '2014-06-24 11:00:10'),
(244, 361, 'All Industry', 'select_foreign_table', 'industry_id', 1, '{"table_foreign":"wz_industry_job","table_foreign_field":"name_vi","language":1,"multiple":0}', 1, 1, '2014-06-24 11:01:00', '2014-06-24 11:01:00'),
(245, 361, 'All Location', 'select_foreign_table', 'location_id', 1, '{"table_foreign":"wz_location","table_foreign_field":"name","language":0,"multiple":0}', 2, 1, '2014-06-24 11:02:17', '2014-06-24 11:02:17'),
(246, 361, 'All Level', 'select_foreign_table', 'level_id', 1, '{"table_foreign":"wz_level_job","table_foreign_field":"name_en","language":1,"multiple":0}', 3, 1, '2014-06-24 11:02:55', '2014-06-24 11:02:55'),
(323, 361, 'Salary Max VN', 'text', 'salary_max_vi', 0, '{"unique":0}', 15, 1, '2014-07-04 09:46:11', '2014-07-04 09:46:11'),
(324, 361, 'Salary Max EN', 'text', 'salary_max_en', 0, '{"unique":0}', 23, 1, '2014-07-04 09:46:29', '2014-07-04 09:46:29'),
(248, 361, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 9, 1, '2014-06-24 11:45:14', '2014-06-24 11:05:27'),
(249, 361, 'Name EN', 'text', 'name_en', 1, '{"unique":0}', 17, 1, '2014-06-24 11:45:21', '2014-06-24 11:06:54'),
(250, 361, 'IDS', 'ids', 'ids', 0, '', 4, 1, '2014-06-24 11:07:42', '2014-06-24 11:07:42'),
(251, 361, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"248"}', 10, 1, '2014-06-24 11:44:58', '2014-06-24 11:08:10'),
(252, 361, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"249"}', 18, 1, '2014-06-24 11:45:08', '2014-06-24 11:08:45'),
(253, 361, 'Job code', 'text', 'code', 0, '{"unique":0}', 5, 1, '2014-06-24 11:09:39', '2014-06-24 11:09:39'),
(254, 361, 'Employer Description VN', 'content', 'em_description_vi', 0, '', 11, 1, '2014-06-24 11:11:34', '2014-06-24 11:11:34'),
(255, 361, 'Employer Description EN', 'content', 'em_description_en', 0, '', 19, 1, '2014-06-24 11:11:56', '2014-06-24 11:11:56'),
(256, 361, 'Job Description VN', 'content', 'job_description_vi', 0, '', 12, 1, '2014-06-24 11:12:35', '2014-06-24 11:12:35'),
(257, 361, 'Job Description EN', 'content', 'job_description_en', 0, '', 21, 1, '2014-06-24 11:12:49', '2014-06-24 11:12:49'),
(258, 361, 'Job Requirement VN', 'content', 'job_requirement_vi', 0, '', 13, 1, '2014-06-24 11:13:26', '2014-06-24 11:13:26'),
(259, 361, 'Job Requirement EN', 'content', 'job_requirement_en', 0, '', 20, 1, '2014-06-24 11:14:20', '2014-06-24 11:14:20'),
(262, 357, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"230"}', 2, 1, '2014-06-24 11:50:13', '2014-06-24 11:50:13'),
(261, 361, 'Tags', 'tags', 'tags', 0, '', 6, 1, '2014-06-24 11:37:39', '2014-06-24 11:37:39'),
(263, 357, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"231"}', 5, 1, '2014-06-24 11:50:29', '2014-06-24 11:50:29'),
(264, 358, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"234"}', 2, 1, '2014-06-24 11:51:28', '2014-06-24 11:51:28'),
(265, 358, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"235"}', 5, 1, '2014-06-24 11:51:43', '2014-06-24 11:51:43'),
(266, 359, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"238"}', 2, 1, '2014-06-24 11:52:13', '2014-06-24 11:52:13'),
(267, 359, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"239"}', 5, 1, '2014-06-24 11:52:28', '2014-06-24 11:52:28'),
(268, 360, 'Slug', 'slug', 'slug', 0, '{"field_to_slug":"240"}', 0, 1, '2014-06-24 11:53:51', '2014-06-24 11:53:51'),
(269, 362, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 0, 1, '2014-06-27 11:50:47', '2014-06-27 11:50:47'),
(270, 362, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 3, 1, '2014-06-27 11:51:01', '2014-06-27 11:51:01'),
(271, 362, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 1, 1, '2014-06-27 11:51:33', '2014-06-27 11:51:33'),
(272, 362, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 4, 1, '2014-06-27 11:52:08', '2014-06-27 11:52:08'),
(273, 362, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"271"}', 2, 1, '2014-06-27 11:52:31', '2014-06-27 11:52:31'),
(274, 362, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"272"}', 5, 1, '2014-06-27 11:52:54', '2014-06-27 11:52:54'),
(275, 354, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 2, 1, '2014-06-30 11:28:58', '2014-06-30 11:28:58'),
(276, 354, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 5, 1, '2014-06-30 11:29:27', '2014-06-30 11:29:27'),
(277, 354, 'Text VN', 'text', 'text_vi', 0, '{"unique":0}', 3, 1, '2014-06-30 11:30:10', '2014-06-30 11:30:10'),
(278, 354, 'Text EN', 'text', 'text_en', 0, '{"unique":0}', 6, 1, '2014-06-30 11:30:25', '2014-06-30 11:30:25'),
(279, 354, 'Link VN', 'text', 'link_vi', 0, '{"unique":0}', 4, 1, '2014-06-30 11:30:55', '2014-06-30 11:30:55'),
(280, 354, 'Link EN', 'text', 'link_en', 0, '{"unique":0}', 7, 1, '2014-06-30 11:31:22', '2014-06-30 11:31:22'),
(281, 361, 'Nổi bật', 'radio', 'hot', 0, '{"value":"0|Kh\\u00f4ng n\\u1ed5i b\\u1eadt\\r\\n1|N\\u1ed5i b\\u1eadt"}', 7, 1, '2014-06-30 15:36:07', '2014-06-30 15:33:38'),
(282, 24, 'Show Home', 'radio', 'is_home', 0, '{"value":"0|Hide\\r\\n1|Show"}', 0, 1, '2014-06-30 15:41:28', '2014-06-30 15:41:28'),
(283, 363, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-30 15:51:32', '2014-06-30 15:51:32'),
(284, 363, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 4, 1, '2014-06-30 15:51:44', '2014-06-30 15:51:44'),
(285, 363, 'Name VN', 'text', 'name_vi', 1, '{"unique":0}', 2, 1, '2014-06-30 15:52:43', '2014-06-30 15:52:06'),
(286, 363, 'Name EN', 'text', 'name_en', 1, '{"unique":0}', 5, 1, '2014-06-30 15:52:48', '2014-06-30 15:52:30'),
(287, 363, 'Avatar', 'file', 'image', 0, '{"directory":"uploads\\/avatar_comment_line\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-30 15:53:26', '2014-06-30 15:53:26'),
(288, 363, 'Comment VN', 'content', 'description_vi', 0, '', 3, 1, '2014-06-30 15:54:23', '2014-06-30 15:54:23'),
(289, 363, 'Comment EN', 'content', 'description_en', 0, '', 6, 1, '2014-06-30 15:54:50', '2014-06-30 15:54:50'),
(290, 365, 'Tiếng Vệt', 'group', 'tieng-vet', 0, '', 1, 1, '2014-06-30 16:34:34', '2014-06-30 16:34:34'),
(291, 365, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 4, 1, '2014-06-30 16:34:44', '2014-06-30 16:34:44'),
(292, 365, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-30 16:35:07', '2014-06-30 16:35:07'),
(293, 365, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 5, 1, '2014-06-30 16:35:21', '2014-06-30 16:35:21'),
(294, 365, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"292"}', 3, 1, '2014-06-30 16:36:13', '2014-06-30 16:35:39'),
(295, 365, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"293"}', 6, 1, '2014-06-30 16:35:56', '2014-06-30 16:35:56'),
(296, 365, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/new_arrivals_category\\/","extension":"jpg|png|gid"}', 0, 1, '2014-06-30 16:37:06', '2014-06-30 16:37:06'),
(297, 364, 'Tiếng Việt', 'group', 'tieng-viet', 0, '', 1, 1, '2014-06-30 16:40:17', '2014-06-30 16:40:17'),
(298, 364, 'Tiếng Anh', 'group', 'tieng-anh', 0, '', 6, 1, '2014-06-30 16:40:35', '2014-06-30 16:40:35'),
(299, 364, 'Name EN', 'text', 'name_en', 1, '{"unique":1}', 7, 1, '2014-06-30 16:40:57', '2014-06-30 16:40:57'),
(300, 364, 'Name VN', 'text', 'name_vi', 1, '{"unique":1}', 2, 1, '2014-06-30 16:41:10', '2014-06-30 16:41:10'),
(301, 364, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"299"}', 8, 1, '2014-06-30 16:41:32', '2014-06-30 16:41:32'),
(302, 364, 'Slug VN', 'slug', 'slug_vi', 0, '{"field_to_slug":"300"}', 3, 1, '2014-06-30 16:41:49', '2014-06-30 16:41:49'),
(303, 364, 'Description VN', 'textarea', 'description_vi', 0, '', 4, 1, '2014-06-30 16:42:53', '2014-06-30 16:42:53'),
(304, 364, 'Description EN', 'textarea', 'description_en', 0, '', 9, 1, '2014-06-30 16:43:07', '2014-06-30 16:43:07'),
(305, 364, 'Content VN', 'content', 'content_vi', 0, '', 5, 1, '2014-06-30 16:43:26', '2014-06-30 16:43:26'),
(306, 364, 'Content EN', 'content', 'content_en', 0, '', 10, 1, '2014-06-30 16:43:37', '2014-06-30 16:43:37'),
(307, 364, 'Parent', 'select_foreign_table', 'category_id', 1, '{"table_foreign":"wz_new_arrivals_category","table_foreign_field":"name_vi","language":1,"multiple":0}', 0, 1, '2014-06-30 16:44:17', '2014-06-30 16:44:17'),
(308, 364, 'Image', 'file', 'image', 0, '{"directory":"uploads\\/new_arrivals\\/","extension":"jpg|png|gif"}', 0, 1, '2014-06-30 16:44:52', '2014-06-30 16:44:52'),
(309, 344, 'Description EN', 'textarea', 'description_en', 0, '', 8, 1, '2014-06-30 17:34:24', '2014-06-30 17:34:24'),
(310, 344, 'Description VN', 'textarea', 'description_vi', 0, '', 4, 1, '2014-06-30 17:40:12', '2014-06-30 17:34:37'),
(311, 349, 'Show Home', 'radio', 'is_home', 0, '{"value":"0|Hide\\r\\n1|Show"}', 1, 1, '2014-07-01 11:18:24', '2014-07-01 11:18:24'),
(312, 364, 'IDS', 'ids', 'ids', 0, '', 0, 1, '2014-07-01 16:24:44', '2014-07-01 16:24:44'),
(313, 364, 'Tags', 'tags', 'tags', 0, '', 0, 1, '2014-07-02 09:16:12', '2014-07-02 09:16:12'),
(314, 348, 'Show Home', 'radio', 'is_home', 0, '{"value":"0|Hide\\r\\n1|Show"}', 0, 1, '2014-07-02 16:46:33', '2014-07-02 16:46:33'),
(315, 349, 'Description VN', 'content', 'description_vi', 0, '', 6, 1, '2014-07-02 17:49:30', '2014-07-02 17:49:30'),
(316, 349, 'Description EN', 'content', 'description_en', 0, '', 11, 1, '2014-07-02 17:49:44', '2014-07-02 17:49:44'),
(322, 361, 'Salary Min EN', 'text', 'salary_min_en', 0, '{"unique":0}', 22, 1, '2014-07-04 09:45:44', '2014-07-04 09:45:44'),
(321, 361, 'Salary Min VN', 'text', 'salary_min_vi', 0, '{"unique":0}', 14, 1, '2014-07-04 09:45:27', '2014-07-04 09:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_module_list_field`
--

DROP TABLE IF EXISTS `wz_admin_module_list_field`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_list_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT '0' COMMENT 'Module ID',
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `data` text,
  `order` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `wz_admin_module_list_field`
--

INSERT INTO `wz_admin_module_list_field` (`id`, `mid`, `name`, `type`, `data`, `order`, `status`, `changed`, `created`) VALUES
(1, 2, 'Tiêu đề', 'primary', '{"foreign_field":"","primary_field":"title","table_foreign_field":"","table_type":"primary"}', 4, 1, '2013-11-05 10:08:12', '2013-09-25 12:26:36'),
(19, 2, 'Maps', 'primary', '{"foreign_field":"","primary_field":"maps","table_foreign_field":"","table_type":"primary"}', 1, 1, '2013-11-05 10:08:05', '2013-10-31 14:33:45'),
(18, 2, 'Video', 'primary', '{"foreign_field":"","primary_field":"video","table_foreign_field":"","table_type":"primary"}', 3, 1, '2013-10-31 10:08:42', '2013-10-30 17:23:42'),
(17, 8, 'Nội dung', 'primary', '{"foreign_field":"","primary_field":"content","table_foreign_field":"","table_type":"primary"}', 0, 1, '2013-10-24 12:46:09', '2013-10-24 12:46:09'),
(24, 2, 'Thể loại', 'foreign', '{"foreign_field":"pid|wz_news_category","primary_field":"","table_foreign_field":"name","table_type":"foreign"}', 2, 1, '2013-11-18 17:00:04', '2013-11-18 16:54:54'),
(26, 2, 'Tiêu đề', 'primary', '{"foreign_field":"","primary_field":"title","table_foreign_field":"","table_type":"primary","language":0}', 0, 0, '2014-04-22 15:18:47', '2013-12-17 15:07:46'),
(27, 2, 'Select', 'primary', '{"foreign_field":"","primary_field":"select","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-03-14 10:51:47', '2014-03-14 10:47:26'),
(28, 2, 'Date', 'primary', '{"foreign_field":"","primary_field":"datetime_picker","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-03-19 16:56:17', '2014-03-19 16:56:17'),
(29, 2, 'Radio', 'primary', '{"foreign_field":"","primary_field":"radio","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-02 10:18:41', '2014-04-02 10:18:41'),
(34, 11, '{title}', 'primary', '{"foreign_field":"","primary_field":"title_vi","table_foreign_field":"","table_type":"primary","language":1}', 1, 1, '2014-04-21 17:37:45', '2014-04-05 11:23:48'),
(41, 11, 'Category', 'foreign', '{"foreign_field":"pid|wz_test_category","primary_field":"pid","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 0, 1, '2014-04-21 14:47:18', '2014-04-21 14:29:41'),
(36, 12, 'Tên', 'primary', '{"foreign_field":"","primary_field":"name","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:12:45', '2014-04-08 10:12:45'),
(37, 12, 'Logo', 'primary', '{"foreign_field":"","primary_field":"logo","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:17:58', '2014-04-08 10:17:58'),
(38, 12, 'Link', 'primary', '{"foreign_field":"","primary_field":"link","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:18:11', '2014-04-08 10:18:11'),
(43, 24, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-18 16:19:28', '2014-06-18 12:02:39'),
(44, 23, 'Category', 'foreign', '{"foreign_field":"category_id|wz_information_category","primary_field":"category_id","table_foreign_field":"name_en","table_type":"foreign","language":1}', 1, 1, '2014-06-20 17:01:07', '2014-06-18 15:06:00'),
(45, 23, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_en","table_foreign_field":"","table_type":"primary","language":1}', 2, 1, '2014-06-18 16:18:47', '2014-06-18 15:06:15'),
(67, 23, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:05:58', '2014-06-20 17:05:58'),
(48, 25, 'Fullname', 'primary', '{"foreign_field":"","primary_field":"fullname","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-18 16:38:29', '2014-06-18 16:38:29'),
(49, 25, 'Question', 'primary', '{"foreign_field":"","primary_field":"question","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-18 16:42:15', '2014-06-18 16:42:15'),
(50, 344, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-30 17:36:46', '2014-06-19 09:42:31'),
(51, 344, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-19 09:43:10', '2014-06-19 09:43:10'),
(52, 345, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 2, 1, '2014-06-19 09:52:38', '2014-06-19 09:52:38'),
(53, 345, 'Category', 'foreign', '{"foreign_field":"category_id|wz_hrservices_category","primary_field":"category_id","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 1, 1, '2014-06-19 09:53:17', '2014-06-19 09:53:17'),
(54, 346, 'Parent', 'primary', '{"foreign_field":"","primary_field":"parent_id","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-19 17:05:52', '2014-06-19 17:05:52'),
(55, 346, 'Title', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-19 17:06:10', '2014-06-19 17:06:10'),
(56, 347, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-19 17:24:46', '2014-06-19 17:24:46'),
(57, 347, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-19 17:25:04', '2014-06-19 17:25:04'),
(58, 347, 'Industry', 'primary', '{"foreign_field":"","primary_field":"industry_vi","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-19 17:26:01', '2014-06-19 17:26:01'),
(60, 348, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-19 17:47:10', '2014-06-19 17:47:10'),
(61, 348, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-19 17:47:25', '2014-06-19 17:47:25'),
(62, 349, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":0}', 1, 1, '2014-06-20 09:46:25', '2014-06-20 09:46:25'),
(63, 349, 'Position', 'primary', '{"foreign_field":"","primary_field":"position_vi","table_foreign_field":"","table_type":"primary","language":1}', 2, 1, '2014-06-20 09:47:06', '2014-06-20 09:47:06'),
(64, 349, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 09:56:17', '2014-06-20 09:56:17'),
(65, 350, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 1, 1, '2014-06-20 10:08:32', '2014-06-20 10:08:32'),
(66, 350, 'Category', 'primary', '{"foreign_field":"","primary_field":"category_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-20 10:08:46', '2014-06-20 10:08:46'),
(69, 351, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:11:18', '2014-06-20 17:11:18'),
(70, 24, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 1, 1, '2014-06-20 17:18:12', '2014-06-20 17:18:12'),
(71, 351, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:19:25', '2014-06-20 17:19:25'),
(72, 352, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-20 17:22:02', '2014-06-20 17:22:02'),
(73, 352, 'Category', 'foreign', '{"foreign_field":"category_id|wz_information_category","primary_field":"category_id","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 1, 1, '2014-06-20 17:32:59', '2014-06-20 17:22:11'),
(74, 352, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 2, 1, '2014-06-20 17:22:27', '2014-06-20 17:22:27'),
(75, 353, 'Parent', 'primary', '{"foreign_field":"","primary_field":"parent","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:35:39', '2014-06-20 17:35:39'),
(76, 353, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-20 17:55:03', '2014-06-20 17:55:03'),
(77, 354, 'Module', 'primary', '{"foreign_field":"","primary_field":"parent","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:57:38', '2014-06-20 17:57:38'),
(78, 354, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-20 17:58:03', '2014-06-20 17:58:03'),
(79, 355, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-20 18:20:03', '2014-06-20 18:20:03'),
(80, 356, 'Email', 'primary', '{"foreign_field":"","primary_field":"email","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-21 10:21:19', '2014-06-21 10:20:39'),
(81, 357, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-24 10:35:40', '2014-06-24 10:35:40'),
(82, 358, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-24 10:41:46', '2014-06-24 10:41:46'),
(83, 359, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_en","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-24 10:44:23', '2014-06-24 10:44:23'),
(84, 360, 'Salary', 'primary', '{"foreign_field":"","primary_field":"salary","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-24 10:47:56', '2014-06-24 10:47:56'),
(85, 361, 'Function', 'foreign', '{"foreign_field":"function_id|wz_function_job","primary_field":"function_id","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 0, 1, '2014-06-24 10:54:50', '2014-06-24 10:54:50'),
(86, 361, 'Location', 'foreign', '{"foreign_field":"location_id|wz_location","primary_field":"location_id","table_foreign_field":"name","table_type":"foreign","language":0}', 2, 1, '2014-06-24 10:55:14', '2014-06-24 10:55:14'),
(87, 361, 'Industry', 'foreign', '{"foreign_field":"industry_id|wz_industry_job","primary_field":"industry_id","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 1, 1, '2014-06-24 10:55:34', '2014-06-24 10:55:34'),
(88, 361, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 3, 1, '2014-06-24 10:55:49', '2014-06-24 10:55:49'),
(89, 362, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_en","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-27 11:50:28', '2014-06-27 11:50:28'),
(90, 363, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-30 15:50:20', '2014-06-30 15:50:20'),
(91, 363, 'Avatar', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-30 15:50:32', '2014-06-30 15:50:32'),
(92, 365, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-30 16:33:31', '2014-06-30 16:33:31'),
(94, 365, 'Image', 'primary', '{"foreign_field":"","primary_field":"image","table_foreign_field":"","table_type":"primary","language":0}', 0, 1, '2014-06-30 16:34:14', '2014-06-30 16:34:14'),
(95, 364, 'Parent', 'foreign', '{"foreign_field":"category_id|wz_new_arrivals_category","primary_field":"category_id","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 0, 1, '2014-06-30 16:39:27', '2014-06-30 16:39:27'),
(96, 364, 'Name', 'primary', '{"foreign_field":"","primary_field":"name_vi","table_foreign_field":"","table_type":"primary","language":1}', 0, 1, '2014-06-30 16:39:38', '2014-06-30 16:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_module_list_filter`
--

DROP TABLE IF EXISTS `wz_admin_module_list_filter`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_list_filter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `where` text,
  `order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wz_admin_module_list_filter`
--

INSERT INTO `wz_admin_module_list_filter` (`id`, `mid`, `name`, `where`, `order`, `status`, `changed`, `created`) VALUES
(3, 2, 'Giải trí', 'pid = 1', 0, 1, '2014-04-14 15:04:24', '2014-04-14 15:04:24'),
(4, 2, 'Thể thao', 'pid = 2', 0, 1, '2014-04-14 15:04:35', '2014-04-14 15:04:35'),
(5, 22, 'parent', 'parent', 0, 1, '2014-06-18 15:16:33', '2014-06-18 15:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_role`
--

DROP TABLE IF EXISTS `wz_admin_role`;
CREATE TABLE IF NOT EXISTS `wz_admin_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_admin_role`
--

INSERT INTO `wz_admin_role` (`id`, `name`, `weight`, `status`, `changed`, `created`) VALUES
(1, 'Content News', 1, 1, '2014-05-09 10:45:59', '2013-10-22 16:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_role_permission`
--

DROP TABLE IF EXISTS `wz_admin_role_permission`;
CREATE TABLE IF NOT EXISTS `wz_admin_role_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL COMMENT 'Rule ID',
  `mid` int(11) DEFAULT NULL COMMENT 'Module ID',
  `permission` varchar(64) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `wz_admin_role_permission`
--

INSERT INTO `wz_admin_role_permission` (`id`, `rid`, `mid`, `permission`, `status`, `changed`, `created`) VALUES
(16, 1, 13, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59'),
(11, 1, 14, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59'),
(12, 1, 20, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59'),
(13, 1, 15, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59'),
(15, 1, 17, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59'),
(14, 1, 18, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_setting`
--

DROP TABLE IF EXISTS `wz_admin_setting`;
CREATE TABLE IF NOT EXISTS `wz_admin_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `language` text,
  `maintenance` tinyint(1) DEFAULT NULL,
  `maintenance_text` text,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `ga` int(11) DEFAULT NULL,
  `tracking` text,
  `brochure_download` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_admin_setting`
--

INSERT INTO `wz_admin_setting` (`id`, `name`, `language`, `maintenance`, `maintenance_text`, `email`, `password`, `ga`, `tracking`, `brochure_download`, `status`, `changed`, `created`) VALUES
(1, 'Admin wizard', 'vi|Tiếng việt\r\nen|English', 0, 'Trang web đang được bảo trì', 'mail.wizardww@gmail.com', 'Mwizardww@', 77753528, '&lt;script type=&quot;text/javascript&quot;&gt;\r\n  var _gaq = _gaq || [];\r\n  _gaq.push([''_setAccount'', ''UA-44837831-1'']);\r\n  _gaq.push([''_trackPageview'']);\r\n\r\n  (function() {\r\n    var ga = document.createElement(''script''); ga.type = ''text/javascript''; ga.async = true;\r\n    ga.src = (''https:'' == document.location.protocol ? ''https://ssl'' : ''http://www'') + ''.google-analytics.com/ga.js'';\r\n    var s = document.getElementsByTagName(''script'')[0]; s.parentNode.insertBefore(ga, s);\r\n  })();\r\n&lt;/script&gt;', NULL, 1, '2013-10-28 16:58:58', '2013-10-28 16:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `wz_admin_user`
--

DROP TABLE IF EXISTS `wz_admin_user`;
CREATE TABLE IF NOT EXISTS `wz_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL COMMENT 'Rule ID',
  `fullname` varchar(64) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `avatar` text,
  `history_ip` text,
  `randomkey` varchar(64) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wz_admin_user`
--

INSERT INTO `wz_admin_user` (`id`, `rid`, `fullname`, `username`, `password`, `email`, `avatar`, `history_ip`, `randomkey`, `admin`, `status`, `changed`, `created`) VALUES
(1, 0, 'Trần Sáng Lập', 'admin', '37900c3ba245ed6761dc79e68710b76d', 'lap.transang@gmail.com', '{"x1":0,"x2":0,"y1":0,"y2":0,"zoom":0,"url":"2014\\/05\\/07\\/2bf2adc763b6ac9e38acfb3c88b8f3db_1399431563.jpg"}', NULL, 'd3a3e1b61a6213ff526efceb6d9fa209', 1, 1, '2013-11-04 10:29:32', '2013-09-10 14:39:45'),
(3, 1, 'Kha Yến Nhi', 'nhi.khayen', '2c9e5f0698129faab4806d83d236bff1', 'nhi.khayen@gmail.com', '{"x1":"-89","x2":"364","y1":"-63","y2":"616","zoom":"22","url":"uploads\\/admin\\/user\\/avatar\\/2014\\/01\\/16\\/3df0beda0d7bd13f46ca8207c9dcbb50_1389868256.jpg"}', NULL, NULL, 0, 1, '2014-05-06 17:21:21', '2013-10-22 18:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `wz_article`
--

DROP TABLE IF EXISTS `wz_article`;
CREATE TABLE IF NOT EXISTS `wz_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `wz_article`
--

INSERT INTO `wz_article` (`id`, `pid`, `name`, `slug`, `changed`, `created`) VALUES
(1, 0, 'Giới thiệu', NULL, '2013-11-11 10:47:22', '2013-11-11 10:47:22'),
(2, 0, 'Lĩnh vực', NULL, '2013-11-11 10:47:22', '2013-11-11 10:47:22'),
(3, 1, 'Thông điệp', NULL, '2013-11-11 10:47:44', '2013-11-11 10:47:47'),
(4, 2, 'Bất động sản', NULL, '2013-11-11 10:47:44', '2013-11-11 10:47:44'),
(5, 3, 'Trách nhiệm xã hội', NULL, '2013-11-11 10:48:58', '2013-11-11 10:48:58'),
(6, 1, 'Công ty', NULL, '2013-11-16 11:28:58', '2013-11-16 11:28:58'),
(7, 1, 'Lịch sử', NULL, '2013-11-16 11:28:58', '2013-11-16 11:28:58'),
(8, 3, 'Trường học', NULL, '2013-11-16 11:30:39', '2013-11-16 11:30:39'),
(9, 3, 'Cộng đồng', NULL, '2013-11-16 11:30:39', '2013-11-16 11:30:39'),
(10, 8, 'Cấp 1', NULL, '2013-11-16 11:31:07', '2013-11-16 11:31:07'),
(11, 8, 'Cấp 2', NULL, '2013-11-16 11:31:07', '2013-11-16 11:31:07'),
(12, 10, 'Cấp a', NULL, '2013-11-16 11:31:39', '2013-11-16 11:31:39'),
(13, 10, 'Cấp b', NULL, '2013-11-16 11:31:39', '2013-11-16 11:31:39'),
(14, 4, 'Nhà đất', NULL, '2013-11-16 16:09:43', '2013-11-16 16:09:45'),
(15, 4, 'Nhà ở', NULL, '2013-11-16 16:09:43', '2013-11-16 16:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `wz_banner`
--

DROP TABLE IF EXISTS `wz_banner`;
CREATE TABLE IF NOT EXISTS `wz_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` varchar(10) DEFAULT NULL,
  `text_vi` varchar(255) DEFAULT NULL,
  `text_en` varchar(255) DEFAULT NULL,
  `link_vi` varchar(255) DEFAULT NULL,
  `link_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wz_banner`
--

INSERT INTO `wz_banner` (`id`, `parent`, `text_vi`, `text_en`, `link_vi`, `link_en`, `image`, `status`, `changed`, `created`) VALUES
(1, '1', 'Let our experts solve your HR concerns!', 'Let our experts solve your HR concerns!', 'http://localhost/2014/talentnet/code/en', 'http://localhost/2014/talentnet/code/en', '2014/06/30/aa3d8b3312aaa69286ec6215fa9a5508_1404103829.jpg', 1, '2014-06-30 11:50:30', '2014-06-20 18:00:46'),
(2, '3-1', '', '', '', '', '2014/07/01/1bcc92cd90e44ee67b033135a4996812_1404190522.jpg', 1, '2014-07-01 11:55:39', '2014-07-01 11:55:39'),
(3, '6-1', '', '', '', '', '2014/07/01/419c81966479e7d3b62ee47c9da49207_1404202191.jpg', 1, '2014-07-01 15:11:03', '2014-07-01 15:09:52'),
(4, '6-2', '', '', '', '', '2014/07/01/9b4e92767e04940915df6dc0d5504617_1404202201.jpg', 1, '2014-07-01 15:11:17', '2014-07-01 15:10:02'),
(5, '7-1', '', '', '', '', '2014/07/01/a7e6628c59c7e9d4bebd76cfebe237e2_1404202214.jpg', 1, '2014-07-01 15:10:16', '2014-07-01 15:10:16'),
(6, '9-1', '', '', '', '', '2014/07/02/456057f711fe53179ec01294f0ebe8a5_1404286227.jpg', 1, '2014-07-02 14:30:29', '2014-07-02 14:30:29'),
(7, '2-3', '', '', '', '', '2014/07/02/d590094f52a972765b119837a2324297_1404298262.jpg', 1, '2014-07-02 17:51:04', '2014-07-02 17:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `wz_career_talentnet`
--

DROP TABLE IF EXISTS `wz_career_talentnet`;
CREATE TABLE IF NOT EXISTS `wz_career_talentnet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT 'information_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `tags` varchar(100) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_career_talentnet`
--

INSERT INTO `wz_career_talentnet` (`id`, `category_id`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `description_vi`, `description_en`, `content_vi`, `content_en`, `tags`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 2, 'ZL3VWFOcAK', 'asaaaaaaaaa', 'fffasfasfsa', 'asaaaaaaaaa-ZL3VWFOcAK9', 'fffasfasfsa--ZL3VWFOcAK9', '2014/06/20/bc3af6b70a3eec67ce09946f6ee868b8_1403260304.jpg', 'asdsadsadsa', 'asfFAsdfsddafsad', '<p>asdasdsadsadsa</p>\n', '<p>sadfsadfsdafsdfsd</p>\n', '', 1, 1, '2014-06-20 17:31:59', '2014-06-20 17:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `wz_career_talentnet_category`
--

DROP TABLE IF EXISTS `wz_career_talentnet_category`;
CREATE TABLE IF NOT EXISTS `wz_career_talentnet_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_career_talentnet_category`
--

INSERT INTO `wz_career_talentnet_category` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `status`, `changed`, `created`) VALUES
(2, 'Tin Tức / Hoạt đông', 'News / Activities', 'tin-tuc-hoat-dong', 'news-activities', '2014/06/20/0abf377447d87641f719e74aae5d6898_1403260190.jpg', 1, '2014-06-20 17:29:51', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `wz_channel`
--

DROP TABLE IF EXISTS `wz_channel`;
CREATE TABLE IF NOT EXISTS `wz_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_channel`
--

INSERT INTO `wz_channel` (`id`, `name`, `logo`, `link`, `status`, `changed`, `created`) VALUES
(1, 'Test', '2014/04/08/dabf157cc751a57e9f9ef136432c5e28_1396927817.jpg', 'https://www.google.com.vn/', 1, '2014-04-08 10:30:54', '2014-04-08 10:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `wz_client`
--

DROP TABLE IF EXISTS `wz_client`;
CREATE TABLE IF NOT EXISTS `wz_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `industry_vi` varchar(255) DEFAULT NULL,
  `industry_en` varchar(255) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wz_client`
--

INSERT INTO `wz_client` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `industry_vi`, `industry_en`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 'aaaaaaaaa', 'bbbbbbbbbb', 'aaaaaaaaa', 'bbbbbbbbbb', '2014/06/30/f516a8f0c73c2d1e622c3ab02aa8a45b_1404117841.jpg', 'aaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbb', 1, 1, '2014-06-30 15:44:03', '2014-06-19 17:34:54'),
(2, 'gggggggg', 'GGGGGGGGGG', 'gggggggg', 'gggggggggg', '2014/06/30/aeed96e328ce51b9c8daa1e58c978446_1404117852.jpg', 'ggggggggg', 'GGGGGGGGGGGGG', 1, 1, '2014-06-30 15:44:20', '2014-06-30 15:44:20'),
(3, 'bbbbbbb', 'BBBBBBBBBBBB', 'bbbbbbb', 'bbbbbbbbbbbb', '2014/06/30/faf8c06dda6748d85842eaefda867926_1404117870.jpg', 'bbbbbbbbbbbb', 'BBBBBBBBBBBBBBBBBB', 1, 1, '2014-06-30 15:44:39', '2014-06-30 15:44:39'),
(4, 'ccccccc', 'CCCCCCCCCC', 'ccccccc', 'cccccccccc', '2014/06/30/0fcfd73173b4a1e6c1a6e35f1d66f83a_1404117893.jpg', 'cccccccccccc', 'CCCCCCCCCCCCCCC', 1, 1, '2014-06-30 15:45:05', '2014-06-30 15:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `wz_comment`
--

DROP TABLE IF EXISTS `wz_comment`;
CREATE TABLE IF NOT EXISTS `wz_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT 'Parent ID',
  `nid` int(11) DEFAULT NULL COMMENT 'Content ID',
  `uid` int(11) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `content` text,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `wz_comment`
--

INSERT INTO `wz_comment` (`id`, `pid`, `nid`, `uid`, `type`, `image`, `video`, `content`, `status`, `changed`, `created`) VALUES
(1, 0, 1, 1, 'news', NULL, NULL, '1', 1, '2014-02-18 14:09:16', '2014-02-18 14:09:16'),
(2, 0, 1, 1, 'news', NULL, NULL, '2', 1, '2014-02-18 14:09:18', '2014-02-18 14:09:18'),
(3, 0, 1, 1, 'news', NULL, NULL, '3', 1, '2014-02-18 14:09:19', '2014-02-18 14:09:19'),
(4, 0, 1, 1, 'news', NULL, NULL, '4', 1, '2014-02-18 14:09:20', '2014-02-18 14:09:20'),
(5, 0, 1, 1, 'news', NULL, NULL, '5', 1, '2014-02-18 14:09:21', '2014-02-18 14:09:21'),
(6, 0, 1, 1, 'news', NULL, NULL, '6', 1, '2014-02-18 14:09:23', '2014-02-18 14:09:23'),
(7, 0, 1, 1, 'news', NULL, NULL, '7', 1, '2014-02-18 14:09:25', '2014-02-18 14:09:25'),
(8, 0, 1, 1, 'news', NULL, NULL, '8', 1, '2014-02-18 14:09:27', '2014-02-18 14:09:27'),
(9, 0, 1, 1, 'news', NULL, NULL, '9', 1, '2014-02-18 14:09:29', '2014-02-18 14:09:29'),
(10, 0, 1, 1, 'news', NULL, NULL, '10', 1, '2014-02-18 14:09:43', '2014-02-18 14:09:43'),
(11, 0, 1, 1, 'news', NULL, NULL, '11', 1, '2014-02-18 14:09:45', '2014-02-18 14:09:45'),
(12, 0, 1, 1, 'news', NULL, NULL, '12', 1, '2014-02-18 14:10:01', '2014-02-18 14:10:01'),
(13, 0, 1, 1, 'news', NULL, NULL, '13', 1, '2014-02-18 14:10:47', '2014-02-18 14:10:47'),
(14, 0, 1, 1, 'news', NULL, NULL, '14', 1, '2014-02-18 14:29:34', '2014-02-18 14:29:34'),
(15, 0, 1, 1, 'news', NULL, NULL, '15', 1, '2014-02-18 14:29:39', '2014-02-18 14:29:39'),
(16, 0, 1, 1, 'news', NULL, NULL, '16', 1, '2014-02-18 14:29:41', '2014-02-18 14:29:41'),
(17, 0, 1, 1, 'news', NULL, NULL, '17', 1, '2014-02-18 14:29:43', '2014-02-18 14:29:43'),
(18, 0, 1, 1, 'news', NULL, NULL, '18', 1, '2014-02-18 14:29:46', '2014-02-18 14:29:46'),
(19, 0, 1, 1, 'news', NULL, NULL, '19', 1, '2014-02-18 14:29:52', '2014-02-18 14:29:52'),
(20, 0, 1, 1, 'news', NULL, NULL, '20', 1, '2014-02-18 14:29:54', '2014-02-18 14:29:54'),
(21, 0, 1, 1, 'news', NULL, NULL, '21', 1, '2014-02-18 14:29:56', '2014-02-18 14:29:56'),
(22, 0, 1, 1, 'news', NULL, NULL, '22', 1, '2014-02-18 14:32:13', '2014-02-18 14:32:13'),
(23, 0, 1, 1, 'news', NULL, NULL, '23', 1, '2014-02-18 14:32:23', '2014-02-18 14:32:23'),
(24, 0, 1, 1, 'news', NULL, NULL, '24', 1, '2014-02-18 14:32:26', '2014-02-18 14:32:26'),
(25, 0, 1, 1, 'news', NULL, NULL, '25', 1, '2014-02-18 14:32:28', '2014-02-18 14:32:28'),
(26, 0, 1, 1, 'news', NULL, NULL, '26', 1, '2014-02-18 14:32:30', '2014-02-18 14:32:30'),
(27, 0, 1, 1, 'news', NULL, NULL, '27', 1, '2014-02-18 14:32:32', '2014-02-18 14:32:32'),
(28, 0, 1, 1, 'news', NULL, NULL, '28', 1, '2014-02-18 14:32:34', '2014-02-18 14:32:34'),
(29, 3, 1, 1, 'news', NULL, NULL, '3.1', 1, '2014-02-18 14:32:51', '2014-02-18 14:32:51'),
(30, 2, 1, 1, 'news', NULL, NULL, '2.1', 1, '2014-02-18 14:33:20', '2014-02-18 14:33:20'),
(31, 10, 1, 1, 'news', NULL, NULL, '10.1', 1, '2014-02-18 14:34:19', '2014-02-18 14:34:19'),
(32, 1, 1, 1, 'news', NULL, NULL, '1.1', 1, '2014-02-18 14:34:28', '2014-02-18 14:34:28'),
(33, 1, 1, 1, 'news', NULL, NULL, '1.2', 1, '2014-02-18 14:34:42', '2014-02-18 14:34:42'),
(34, 1, 1, 1, 'news', NULL, NULL, '1.3', 1, '2014-02-18 14:34:47', '2014-02-18 14:34:47'),
(35, 11, 1, 1, 'news', NULL, NULL, '11.1', 1, '2014-02-18 14:34:52', '2014-02-18 14:34:52'),
(36, 10, 1, 1, 'news', NULL, NULL, '10.2', 1, '2014-02-18 14:35:03', '2014-02-18 14:35:03'),
(37, 0, 1, 1, 'news', NULL, NULL, '29', 1, '2014-02-18 14:35:40', '2014-02-18 14:35:40'),
(38, 0, 1, 1, 'news', NULL, NULL, '30', 1, '2014-02-18 14:37:58', '2014-02-18 14:37:58'),
(39, 23, 1, 1, 'news', NULL, NULL, '23.1', 1, '2014-02-18 14:38:05', '2014-02-18 14:38:05'),
(40, 15, 1, 1, 'news', NULL, NULL, '15.1', 1, '2014-02-18 14:38:11', '2014-02-18 14:38:11'),
(41, 12, 1, 1, 'news', NULL, NULL, '12.1', 1, '2014-02-18 14:38:56', '2014-02-18 14:38:56'),
(42, 38, 1, 1, 'news', NULL, NULL, '30.1', 1, '2014-02-18 14:55:41', '2014-02-18 14:55:41'),
(43, 23, 1, 1, 'news', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.', 1, '2014-02-18 14:57:06', '2014-02-18 14:57:06'),
(44, 38, 1, 1, 'news', NULL, NULL, 'dsfdsfdfdf', 1, '2014-04-18 09:02:49', '2014-04-18 09:02:49'),
(45, 38, 1, 1, 'news', NULL, NULL, 'ssssssssssssssss', 1, '2014-04-18 09:02:53', '2014-04-18 09:02:53'),
(46, 38, 1, 1, 'news', NULL, NULL, 'sdfsdfsdf', 1, '2014-04-18 09:02:57', '2014-04-18 09:02:57'),
(47, 38, 1, 1, 'news', NULL, NULL, 'fffffffffffffff', 1, '2014-04-18 09:03:00', '2014-04-18 09:03:00'),
(48, 38, 1, 1, 'news', NULL, NULL, 'sdfsdf', 1, '2014-04-18 09:03:09', '2014-04-18 09:03:09'),
(49, 38, 1, 1, 'news', NULL, NULL, 'sdfdfdsf', 1, '2014-04-18 09:03:12', '2014-04-18 09:03:12'),
(50, 0, 1, 1, 'news', NULL, NULL, 'dfsdfdsfsdfdsfdsf\nsdfsdf\n', 1, '2014-04-18 09:19:43', '2014-04-18 09:19:43'),
(51, 0, 1, 1, 'news', NULL, NULL, 'dfsdfdsfsdfdsfdsf\nsdfsdf\nsdfsdfs', 1, '2014-04-18 09:19:49', '2014-04-18 09:19:49'),
(52, 0, 1, 1, 'news', NULL, NULL, 'sdfdsfdsf', 1, '2014-04-18 09:23:28', '2014-04-18 09:23:28'),
(53, 0, 1, 1, 'news', NULL, NULL, 'fsdfsdf', 1, '2014-04-18 09:23:30', '2014-04-18 09:23:30'),
(54, 38, 1, 1, 'news', NULL, NULL, 'fsdfafdf', 1, '2014-04-18 09:23:43', '2014-04-18 09:23:43'),
(55, 38, 1, 1, 'news', NULL, NULL, 'safsdafds', 1, '2014-04-18 09:23:46', '2014-04-18 09:23:46'),
(56, 38, 1, 1, 'news', NULL, NULL, 'sdfsdfsdf', 1, '2014-04-18 09:30:46', '2014-04-18 09:30:46'),
(57, 38, 1, 1, 'news', NULL, NULL, '11111111111', 1, '2014-04-18 09:30:51', '2014-04-18 09:30:51'),
(58, 38, 1, 1, 'news', NULL, NULL, 'sdfdsfsdf', 1, '2014-04-18 09:30:55', '2014-04-18 09:30:55'),
(59, 0, 1, 1, 'news', NULL, NULL, 'sdfdsfsdfdsf', 1, '2014-04-18 09:41:32', '2014-04-18 09:41:32'),
(60, 0, 1, 1, 'news', NULL, NULL, 'aaa', 1, '2014-04-18 09:41:35', '2014-04-18 09:41:35'),
(61, 0, 1, 1, 'news', NULL, NULL, 'fsdf', 1, '2014-04-18 09:42:17', '2014-04-18 09:42:17'),
(62, 0, 1, 1, 'news', NULL, NULL, 'sdfdsf', 1, '2014-04-18 09:42:19', '2014-04-18 09:42:19'),
(63, 0, 1, 1, 'news', NULL, NULL, 'aaaaaaaaaaaaaaaa', 1, '2014-04-18 09:42:23', '2014-04-18 09:42:23'),
(64, 0, 1, 1, 'news', NULL, NULL, 'dsfdsf', 1, '2014-04-18 09:42:39', '2014-04-18 09:42:39'),
(65, 63, 1, 1, 'news', NULL, NULL, 'dfdsf', 1, '2014-04-18 09:44:02', '2014-04-18 09:44:02'),
(66, 63, 1, 1, 'news', NULL, NULL, 'sdfsdf', 1, '2014-04-18 09:44:04', '2014-04-18 09:44:04'),
(67, 63, 1, 1, 'news', NULL, NULL, 'aaaaaaaaaaaaa', 1, '2014-04-18 09:44:06', '2014-04-18 09:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `wz_comment_client`
--

DROP TABLE IF EXISTS `wz_comment_client`;
CREATE TABLE IF NOT EXISTS `wz_comment_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_comment_client`
--

INSERT INTO `wz_comment_client` (`id`, `name_vi`, `name_en`, `image`, `description_vi`, `description_en`, `status`, `changed`, `created`) VALUES
(1, 'Hasan Haider, ACCA(UK) - CEO, Bengal Investment Ltd', 'Hasan Haider, ACCA (Anh) - Giám đốc điều hành, Bengal Đầu tư Ltd', '2014/06/30/ee8d8c0c98e7a549a75d359073453fb6_1404118517.jpg', '<p><span style="color: rgb(102, 102, 102); font-family: Arial, sans-serif; font-size: 12px; line-height: 16.799999237060547px; background-color: rgb(255, 255, 255);">Tiền đạo Arjen Robben của Hà Lan đã phải hứng chịu búa rìu dư luận sau khi ăn vạ trong trận gặp Mexico, giúp Hà Lan đoạt vé vào tứ kết World Cup 2014.</span></p>\r\n', '<p>The striker Arjen Robben of the Netherlands suffered ax after public tantrums against Mexico, Netherlands helped win World Cup quarter-finals in 2014.</p>\r\n', 1, '2014-06-30 15:56:21', '2014-06-30 15:56:21'),
(2, 'Hasan Haider, ACCA (Anh) - Giám đốc điều hành, Bengal Đầu tư Ltd', 'Hasan Haider, ACCA(UK) - CEO, Bengal Investment Ltd', '2014/06/30/791a083e9c1c81f2e59c4fabde591d90_1404118590.jpg', '<p><span style="color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 12px; line-height: 16.799999237060547px;">Cả gia đình nhà "sếu vườn" đang tận hưởng những ngày tháng tuyệt vời của một mùa hè không bóng đá và World Cup trên bãi biển Mala, miền nam nước Pháp</span></p>\r\n', '<p>The family home "garden crane" is enjoying a great day of summer and the football World Cup is not on the beach Mala, southern France</p>\r\n', 1, '2014-06-30 15:57:17', '2014-06-30 15:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `wz_contact`
--

DROP TABLE IF EXISTS `wz_contact`;
CREATE TABLE IF NOT EXISTS `wz_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wz_contact`
--

INSERT INTO `wz_contact` (`id`, `fullname`, `department`, `email`, `company`, `address`, `phone`, `position`, `state`, `message`, `status`, `changed`, `created`) VALUES
(7, 'nhan', '1', 'nhanvn1111@gmail.com', 'nhan', 'nhan', '09794221', 'nhan', '70000', 'hello world', 1, '2014-06-20 11:46:20', '2014-06-20 11:46:20'),
(8, 'nguyen hoang nhan', '1', 'nhanvn1111@gma.com', '', 'Cao Thang, Ho Chi Minh', '', '', '', 'ssss', 1, '2014-06-20 11:51:19', '2014-06-20 11:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `wz_contact_address`
--

DROP TABLE IF EXISTS `wz_contact_address`;
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

-- --------------------------------------------------------

--
-- Table structure for table `wz_degree`
--

DROP TABLE IF EXISTS `wz_degree`;
CREATE TABLE IF NOT EXISTS `wz_degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) DEFAULT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_degree`
--

INSERT INTO `wz_degree` (`id`, `name_en`, `name_vi`, `slug_vi`, `slug_en`, `status`, `changed`, `created`) VALUES
(2, 'DH', 'Đại học', 'dai-hoc', 'dh', 1, '2014-06-27 11:53:25', '2014-06-27 11:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `wz_district`
--

DROP TABLE IF EXISTS `wz_district`;
CREATE TABLE IF NOT EXISTS `wz_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL COMMENT 'Parent ID',
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=679 ;

--
-- Dumping data for table `wz_district`
--

INSERT INTO `wz_district` (`id`, `pid`, `order`, `name`, `slug`) VALUES
(1, 8, 1, 'Q. 1', NULL),
(2, 8, 2, 'Q. 2', NULL),
(3, 8, 3, 'Q. 3', NULL),
(4, 8, 4, 'Q. 4', NULL),
(5, 8, 5, 'Q. 5', NULL),
(6, 8, 6, 'Q. 6', NULL),
(7, 8, 7, 'Q. 7', NULL),
(8, 8, 8, 'Q. 8', NULL),
(9, 8, 9, 'Q. 9', NULL),
(10, 8, 10, 'Q. 10', NULL),
(11, 8, 11, 'Q. 11', NULL),
(12, 8, 12, 'Q. 12', NULL),
(13, 8, 13, 'Q. Bình Thạnh', NULL),
(14, 8, 13, 'Q. Bình Tân', NULL),
(15, 8, 13, 'Q. Gò Vấp', NULL),
(16, 8, 13, 'Q. Phú Nhuận', NULL),
(17, 8, 13, 'Q. Tân Bình', NULL),
(18, 8, 13, 'Q. Tân Phú', NULL),
(19, 8, 13, 'Q. Thủ Đức', NULL),
(20, 8, 14, 'H. Bình Chánh', NULL),
(21, 8, 14, 'H. Cần Giờ', NULL),
(22, 8, 14, 'H. Củ Chi', NULL),
(23, 8, 14, 'H. Hóc Môn', NULL),
(24, 8, 14, 'H. Nhà Bè', NULL),
(25, 4, 13, 'Q. Ba Đình', NULL),
(26, 4, 13, 'Q. Cầu Giấy', NULL),
(27, 4, 13, 'Q. Đống Đa', NULL),
(28, 4, 13, 'Q. Hai Bà Trưng', NULL),
(29, 4, 2, 'Q. Hoàn Kiếm', NULL),
(30, 4, 13, 'Q. Long Biên', NULL),
(31, 4, 13, 'Q. Tây Hồ', NULL),
(32, 4, 13, 'Q. Thanh Xuân', NULL),
(33, 4, 13, 'Q. Hoàng Mai', NULL),
(34, 4, 14, 'H. Đông Anh', NULL),
(35, 4, 14, 'H. Gia Lâm', NULL),
(36, 4, 14, 'H. Sóc Sơn', NULL),
(37, 4, 14, 'H. Thanh Trì', NULL),
(38, 4, 14, 'H. Từ Liêm', NULL),
(39, 710, 15, 'TP. Cần Thơ', NULL),
(40, 710, 13, 'Q. Bình Thủy', NULL),
(41, 710, 13, 'Q. Ninh Kiều', NULL),
(42, 710, 13, 'Q. Cái Răng', NULL),
(43, 710, 13, 'Q. Ô Môn', NULL),
(44, 710, 14, 'H. Thốt Nốt', NULL),
(45, 710, 14, 'H. Cờ Đỏ', NULL),
(46, 710, 14, 'H. Phong Điền', NULL),
(47, 710, 14, 'H. Vĩnh Thạnh', NULL),
(48, 711, 14, 'H. Châu Thành', NULL),
(49, 711, 14, 'H. Long Mỹ', NULL),
(50, 711, 14, 'H. Phụng Hiệp', NULL),
(51, 711, 14, 'H. Châu Thành A', NULL),
(52, 711, 14, 'H. Vị Thủy', NULL),
(53, 711, 15, 'TX. Vị Thanh', NULL),
(54, 511, 13, 'Q. Hải Châu', NULL),
(55, 511, 13, 'Q. Liên Chiểu', NULL),
(56, 511, 13, 'Q. Ngũ Hành Sơn', NULL),
(57, 511, 13, 'Q. Sơn Trà', NULL),
(58, 511, 13, 'Q. Thanh Khê', NULL),
(59, 511, 14, 'H. Hòa Vang', NULL),
(60, 511, 14, 'H. Hoàng Sa', NULL),
(61, 241, 15, 'TP. Bắc Ninh', NULL),
(62, 241, 14, 'H. Gia Bình', NULL),
(63, 241, 14, 'H. Quế Võ', NULL),
(64, 241, 14, 'H. Thuận Thành', NULL),
(65, 241, 14, 'H. Tiên Du', NULL),
(66, 241, 14, 'H. Yên Phong', NULL),
(67, 241, 14, 'H. Từ  Sơn', NULL),
(68, 241, 14, 'H. Lương Tài', NULL),
(69, 75, 15, 'TX. Bến Tre', NULL),
(70, 75, 14, 'H. Ba Tri', NULL),
(71, 75, 14, 'H. Bình Đại', NULL),
(72, 75, 14, 'H. Châu Thành', NULL),
(73, 75, 14, 'H. Chợ Lách', NULL),
(74, 75, 14, 'H. Giồng Trôm', NULL),
(75, 75, 14, 'H. Mỏ Cày', NULL),
(76, 75, 14, 'H. Thạnh Phú', NULL),
(77, 56, 15, 'TX. Thủ Dầu Một', NULL),
(78, 56, 14, 'H. Bến Cát', NULL),
(79, 56, 14, 'H. Tân Uyên', NULL),
(80, 56, 14, 'H. Thuận An', NULL),
(81, 56, 14, 'H. Dầu Tiếng', NULL),
(82, 56, 14, 'H. Phú Giáo', NULL),
(83, 56, 14, 'H. Dĩ An', NULL),
(84, 650, 15, 'TP. Quy Nhơn', NULL),
(85, 650, 3, 'H. An Lão', NULL),
(86, 650, 14, 'H. An Nhơn', NULL),
(87, 650, 14, 'H. Hoài An', NULL),
(88, 650, 14, 'H. Hoài Nhơn', NULL),
(89, 650, 14, 'H. Phù Cát', NULL),
(90, 650, 14, 'H. Phù Mỹ', NULL),
(91, 650, 14, 'H. Tuy Phước', NULL),
(92, 650, 14, 'H. Tây Sơn', NULL),
(93, 650, 14, 'H. Vân Canh', NULL),
(94, 650, 14, 'H. Vĩnh Thạnh', NULL),
(95, 651, 15, 'TX. Đồng Xoài', NULL),
(96, 651, 14, 'H. Phước Long', NULL),
(97, 651, 14, 'H. Bình Long', NULL),
(98, 651, 14, 'H. Bù Đăng', NULL),
(99, 651, 14, 'H. Đồng Phú', NULL),
(100, 651, 14, 'H. Lộc Ninh', NULL),
(101, 62, 14, 'TP. Phan Thiết', NULL),
(102, 62, 14, 'H. Bắc Bình', NULL),
(103, 62, 14, 'H. Đức Linh', NULL),
(104, 62, 14, 'H. Hàm Thuận Bắc', NULL),
(105, 62, 14, 'H. Hàm Thuận Nam', NULL),
(106, 62, 14, 'H. Hàm Tân', NULL),
(107, 62, 14, 'H. Phú Qúy', NULL),
(108, 62, 14, 'H. Tánh Linh', NULL),
(109, 62, 14, 'H. Tuy Phong', NULL),
(110, 59, 15, 'TP. Pleiku', NULL),
(111, 59, 14, 'H. A Yun Pa', NULL),
(112, 59, 14, 'H. An Khê', NULL),
(113, 59, 14, 'H. Chư Pah', NULL),
(114, 59, 14, 'H. Chư Prông', NULL),
(115, 59, 14, 'H. Chư Sê', NULL),
(116, 59, 14, 'H. Đức Cơ', NULL),
(117, 59, 3, 'H. KBang', NULL),
(118, 59, 14, 'H. Krông Pa', NULL),
(119, 59, 14, 'H. Kông Chro', NULL),
(120, 59, 14, 'H. Ia Grai', NULL),
(121, 59, 14, 'H. Mang Yang', NULL),
(122, 59, 14, 'H. Đăk Đoa', NULL),
(123, 219, 15, 'TP. Hà Giang', NULL),
(124, 219, 14, 'H. Bắc Mê', NULL),
(125, 219, 14, 'H. Bắc Quang', NULL),
(126, 219, 14, 'H. Đồng Văn', NULL),
(127, 219, 14, 'H. Hoàng Su Phì', NULL),
(128, 219, 14, 'H. Mèo Vạc', NULL),
(129, 219, 14, 'H. Quản Bạ', NULL),
(130, 219, 14, 'H. Vị Xuyên', NULL),
(131, 219, 14, 'H. Xín Mần', NULL),
(132, 219, 14, 'H. Yên Minh', NULL),
(133, 351, 15, 'TX. Phủ Lý', NULL),
(134, 351, 14, 'H. Bình Lục', NULL),
(135, 351, 14, 'H. Duy Tiên', NULL),
(136, 351, 14, 'H. Kim Bảng', NULL),
(137, 351, 14, 'H. Lý Nhân', NULL),
(138, 351, 14, 'H. Thanh Liêm', NULL),
(139, 43, 15, 'TX. Hà Đông', NULL),
(140, 43, 15, 'TX. Sơn Tây', NULL),
(141, 43, 14, 'H. Ba Vì', NULL),
(142, 43, 14, 'H. Chương Mỹ', NULL),
(143, 43, 14, 'H. Đan Phượng', NULL),
(144, 43, 14, 'H. Hoài Đức', NULL),
(145, 43, 14, 'H. Mỹ Đức', NULL),
(146, 43, 14, 'H. Phú Xuyên', NULL),
(147, 43, 14, 'H. Phúc Thọ', NULL),
(148, 43, 14, 'H. Quốc Oai', NULL),
(149, 43, 14, 'H. Thanh Oai', NULL),
(150, 43, 14, 'H. Thạch Thất', NULL),
(151, 43, 14, 'H. Trường Tín', NULL),
(152, 43, 14, 'H. Ứng Hòa', NULL),
(153, 39, 15, 'TP. Hà Tĩnh', NULL),
(154, 39, 15, 'TX. Hồng Lĩnh', NULL),
(155, 39, 14, 'H. Can Lộc', NULL),
(156, 39, 14, 'H. Cẩm Xuyên', NULL),
(157, 39, 14, 'H. Đức Thọ', NULL),
(158, 39, 14, 'H. Hương Khê', NULL),
(159, 39, 14, 'H. Hương Sơn', NULL),
(160, 39, 14, 'H. Kỳ Anh', NULL),
(161, 39, 14, 'H. Nghi Xuân', NULL),
(162, 39, 14, 'H. Thạch Hà', NULL),
(163, 39, 14, 'H. Vũ Quang', NULL),
(164, 60, 15, 'TP. Kon Tum', NULL),
(165, 60, 14, 'H. Đăk Glei', NULL),
(166, 60, 14, 'H. Đăk Hà', NULL),
(167, 60, 14, 'H. Đăk Tô', NULL),
(168, 60, 14, 'H. Kon Plông', NULL),
(169, 60, 14, 'H. Ngọc Hồi', NULL),
(170, 60, 14, 'H. Sa Thầy', NULL),
(171, 230, 15, 'TP. Điện Biên', NULL),
(172, 230, 15, 'TX. Lai Châu', NULL),
(173, 230, 14, 'H. Điện Biên', NULL),
(174, 230, 14, 'H. Điện Biên Đông', NULL),
(175, 230, 14, 'H. Mường Lay', NULL),
(176, 230, 14, 'H. Tuần Giáo', NULL),
(177, 230, 14, 'H. Tủa Chùa', NULL),
(178, 230, 14, 'H. Mường Nhé', NULL),
(179, 230, 14, 'H. Than Uyên', NULL),
(180, 231, 15, 'TX. Lai Châu', NULL),
(181, 231, 14, 'H. Mường Tè', NULL),
(182, 231, 14, 'H. Phong Thổ', NULL),
(183, 231, 14, 'H. Sìn Hồ', NULL),
(184, 231, 14, 'H. Tam Đường', NULL),
(185, 20, 15, 'TP. Lạng Sơn', NULL),
(186, 20, 14, 'H. Bắc Sơn', NULL),
(187, 20, 14, 'H. Bình Gia ', NULL),
(188, 20, 14, 'H. Cao Lộc', NULL),
(189, 20, 14, 'H. Chi Lăng', NULL),
(190, 20, 14, 'H. Đình Lập', NULL),
(191, 20, 14, 'H. Hữu Lũng', NULL),
(192, 20, 14, 'H. Lộc Bình', NULL),
(193, 20, 14, 'H. Tràng Định', NULL),
(194, 20, 14, 'H. Văn Lãng', NULL),
(195, 20, 14, 'H. Văn Quan', NULL),
(196, 63, 15, 'TP Lào Cai', NULL),
(197, 63, 14, 'H. Simacai', NULL),
(198, 63, 14, 'H. Bát Xát', NULL),
(199, 63, 14, 'H. Bảo Thắng', NULL),
(200, 63, 14, 'H. Bảo Yên', NULL),
(201, 63, 14, 'H. Bắc Hà', NULL),
(202, 63, 14, 'H. Mường Khương', NULL),
(203, 63, 14, 'H. Sapa', NULL),
(204, 63, 14, 'H. Than Uyên', NULL),
(205, 63, 14, 'H. Văn Bàn', NULL),
(206, 25, 15, 'TP. Đà Lạt', NULL),
(207, 25, 15, 'TX. Bảo Lộc', NULL),
(208, 25, 14, 'H. Bảo Lâm', NULL),
(209, 25, 14, 'H. Cát Tiên', NULL),
(210, 25, 14, 'H. Di Linh', NULL),
(211, 25, 14, 'H. Đạ Huoai', NULL),
(212, 25, 14, 'H. Đạ Teh', NULL),
(213, 25, 14, 'H. Đơn Dương', NULL),
(214, 25, 14, 'H. Đức Trọng', NULL),
(215, 25, 14, 'H. Lạc Dương', NULL),
(216, 25, 14, 'H. Lâm Hà', NULL),
(217, 210, 15, 'TP. Việt Trì', NULL),
(218, 210, 15, 'TX. Phú Thọ', NULL),
(219, 210, 14, 'H. Đoan Hùng', NULL),
(220, 210, 14, 'H. Hạ Hòa', NULL),
(221, 210, 14, 'H. Phù Ninh', NULL),
(222, 210, 14, 'H. Lâm Thao', NULL),
(223, 210, 14, 'H. Sông Thao', NULL),
(224, 210, 14, 'H. Tam Nông', NULL),
(225, 210, 14, 'H. Thanh Ba', NULL),
(226, 210, 14, 'H. Thanh Sơn', NULL),
(227, 210, 14, 'H. Yên Lập', NULL),
(228, 210, 14, 'H. Thanh Thủy', NULL),
(229, 57, 14, 'TX. Tuy Hòa', NULL),
(230, 57, 14, 'H. Đồng Xuân', NULL),
(231, 57, 14, 'H. Sông Cầu', NULL),
(232, 57, 14, 'H. Sông Hinh', NULL),
(233, 57, 14, 'H. Sơn Hòa', NULL),
(234, 57, 14, 'H. Tuy An', NULL),
(235, 57, 14, 'H. Tuy Hòa', NULL),
(236, 57, 14, 'H. Phú Hòa', NULL),
(237, 52, 15, 'TP. Đồng Hới', NULL),
(238, 52, 14, 'H. Bố Trạch', NULL),
(239, 52, 14, 'H. Lệ Thủy', NULL),
(240, 52, 14, 'H. Minh Hóa', NULL),
(241, 52, 14, 'H. Quảng Ninh', NULL),
(242, 52, 14, 'H. Quảng Trạch', NULL),
(243, 52, 14, 'H. Tuyên Hóa', NULL),
(244, 510, 15, 'TX. Tam Kỳ', NULL),
(245, 510, 15, 'TX. Hội An', NULL),
(246, 510, 14, 'H. Duy Xuyên', NULL),
(247, 510, 14, 'H. Đại Lộc', NULL),
(248, 510, 14, 'H. Điện Bàn', NULL),
(249, 510, 14, 'H. Giằng', NULL),
(250, 510, 14, 'H. Hiên', NULL),
(251, 510, 14, 'H. Hiệp Đức', NULL),
(252, 510, 14, 'H. Núi Thành', NULL),
(253, 510, 14, 'H. Phước Sơn', NULL),
(254, 510, 14, 'H. Quế Sơn', NULL),
(255, 510, 14, 'H. Thăng Bình', NULL),
(256, 510, 14, 'H. Tiên Phước', NULL),
(257, 510, 14, 'H. Trà My', NULL),
(258, 510, 14, 'H. Nam Giang', NULL),
(259, 55, 15, 'TP. Quảng Ngãi', NULL),
(260, 55, 14, 'H. Ba Tơ', NULL),
(261, 55, 14, 'H. Bình Sơn', NULL),
(262, 55, 14, 'H. Đức Phổ', NULL),
(263, 55, 14, 'H. Lý Sơn', NULL),
(264, 55, 14, 'H. Minh Long', NULL),
(265, 55, 0, 'H. Mộ Đức', NULL),
(266, 55, 14, 'H. Nghĩa Hành', NULL),
(267, 55, 14, 'H. Sơn Hà', NULL),
(268, 55, 14, 'H. Sơn Tây', NULL),
(269, 55, 14, 'H. Sơn Tịnh', NULL),
(270, 55, 14, 'H. Trà Bồng', NULL),
(271, 55, 14, 'H. Tư Nghĩa', NULL),
(272, 280, 15, 'TP. Thái Nguyên', NULL),
(273, 280, 15, 'TX. Sông Công', NULL),
(274, 280, 14, 'H. Đại Từ', NULL),
(275, 280, 14, 'H. Định Hóa', NULL),
(276, 280, 14, 'H. Đồng Hỷ', NULL),
(277, 280, 14, 'H. Phổ Yên', NULL),
(278, 280, 14, 'H. Phú Bình', NULL),
(279, 280, 14, 'H. Phú Lương', NULL),
(280, 280, 14, 'H. Võ Nhai', NULL),
(281, 37, 15, 'TP Thanh Hóa', NULL),
(282, 37, 15, 'TX. Bỉm Sơn', NULL),
(283, 37, 15, 'TX. Sầm Sơn', NULL),
(284, 37, 14, 'H. Bá Thước', NULL),
(285, 37, 14, 'H. Cẩm Thủy', NULL),
(286, 37, 14, 'H. Đông Sơn', NULL),
(287, 37, 0, 'H. Hà Trung', NULL),
(288, 37, 14, 'H. Hậu Lộc', NULL),
(289, 37, 14, 'H. Hoằng Hóa', NULL),
(290, 37, 14, 'H. Lang Chánh', NULL),
(291, 37, 14, 'H. Mường Lát', NULL),
(292, 37, 14, 'H. Nga Sơn', NULL),
(293, 37, 14, 'H. Ngọc Lặc', NULL),
(294, 37, 14, 'H. Nông Cống', NULL),
(295, 37, 14, 'H. Như Thanh', NULL),
(296, 37, 14, 'H. Như Xuân', NULL),
(297, 37, 14, 'H. Quan Hóa', NULL),
(298, 37, 14, 'H. Quan Sơn', NULL),
(299, 54, 15, 'TP Huế', NULL),
(300, 54, 14, 'H. A Lưới', NULL),
(301, 54, 14, 'H. Hương Thủy', NULL),
(302, 54, 14, 'H. Hương Trà', NULL),
(303, 54, 14, 'H. Nam Đông', NULL),
(304, 54, 14, 'H. Phong Điền', NULL),
(305, 54, 14, 'H. Phú Lộc', NULL),
(306, 54, 14, 'H. Phú Vang', NULL),
(307, 54, 14, 'H. Quảng Điền', NULL),
(308, 73, 15, 'TP. Mỹ Tho', NULL),
(309, 73, 15, 'TX. Gò Công', NULL),
(310, 73, 14, 'H. Cai Lậy', NULL),
(311, 73, 14, 'H. Cái Bè', NULL),
(312, 73, 14, 'H. Châu Thành', NULL),
(313, 73, 14, 'H. Chợ Gạo', NULL),
(314, 73, 14, 'H. Gò Công Đông', NULL),
(315, 73, 14, 'H. Gò Công Tây', NULL),
(316, 73, 14, 'H. Tân Phước', NULL),
(317, 74, 15, 'TX. Trà Vinh', NULL),
(318, 74, 14, 'H. Càng Long', NULL),
(319, 74, 14, 'H. Cầu Kè', NULL),
(320, 74, 14, 'H. Cầu Ngang', NULL),
(321, 74, 14, 'H. Châu Thành', NULL),
(322, 74, 14, 'H. Duyên Hải', NULL),
(323, 74, 14, 'H. Tiểu Cần', NULL),
(324, 74, 14, 'H. Trà Cú', NULL),
(325, 31, 13, 'Q. Hồng Bàng', NULL),
(326, 31, 13, 'Q. Kiến An', NULL),
(327, 31, 13, 'Q. Lê Chân', NULL),
(328, 31, 0, 'Q. Ngô Quyền', NULL),
(329, 31, 15, 'TX. Đồ Sơn', NULL),
(330, 31, 14, 'H. An Hải', NULL),
(331, 31, 14, 'H. An Lão', NULL),
(332, 31, 14, 'H. Bạch Long Vĩ', NULL),
(333, 31, 14, 'H. Cát Hải', NULL),
(334, 31, 14, 'H. Kiến Thụy', NULL),
(335, 31, 14, 'H. Tiên Lãng', NULL),
(336, 31, 14, 'H. Thủy Nguyên', NULL),
(337, 31, 14, 'H. Vĩnh Bảo', NULL),
(338, 76, 15, 'TX. Châu Đốc', NULL),
(339, 76, 15, 'TP. Long Xuyên', NULL),
(340, 76, 14, 'H. An Phú', NULL),
(341, 76, 14, 'H. Châu Phú', NULL),
(342, 76, 14, 'H. Châu Thành', NULL),
(343, 76, 14, 'H. Chợ Mới', NULL),
(344, 76, 14, 'H. Phú Tân', NULL),
(345, 76, 14, 'H. Tân Châu', NULL),
(346, 240, 15, 'TX. Bạc Liêu', NULL),
(347, 240, 14, 'H. Gía Rai', NULL),
(348, 240, 14, 'H. Hồng Dân', NULL),
(349, 240, 14, 'H. Vĩnh Lợi', NULL),
(350, 240, 14, 'H. Phước Long', NULL),
(351, 240, 14, 'H. Đông Hải', NULL),
(352, 64, 15, 'TP. Vũng Tàu', NULL),
(353, 64, 15, 'TX. Bà Rịa', NULL),
(354, 64, 14, 'H. Châu Đức', NULL),
(355, 64, 14, 'H. Côn Đảo', NULL),
(356, 64, 14, 'H. Long Đất', NULL),
(357, 64, 14, 'H. Tân Thành', NULL),
(358, 64, 14, 'H. Xuyên Mộc', NULL),
(359, 781, 15, 'TX. Bắc Cạn', NULL),
(360, 781, 14, 'H. Ba Bể', NULL),
(361, 781, 14, 'H. Bạch Thông', NULL),
(362, 781, 14, 'H. Chợ Đồn', NULL),
(363, 781, 14, 'H. Na Rì', NULL),
(364, 781, 14, 'H. Ngân Sơn', NULL),
(365, 781, 14, 'H. Chợ Mới', NULL),
(366, 281, 15, 'TP. Bắc Giang', NULL),
(367, 281, 14, 'H. Hiệp Hòa', NULL),
(368, 281, 14, 'H. Lạng Giang', NULL),
(369, 281, 14, 'H. Lục Nam', NULL),
(370, 281, 14, 'H. Lục Ngạn', NULL),
(371, 281, 14, 'H. Sơn Đông', NULL),
(372, 281, 14, 'H. Tân Yên', NULL),
(373, 281, 14, 'H. Việt Yên', NULL),
(374, 281, 14, 'H. Yên Dũng', NULL),
(375, 281, 14, 'H. Yên Thế', NULL),
(376, 26, 15, 'TX. Cao Bằng', NULL),
(377, 26, 14, 'H. Bảo Lạc', NULL),
(378, 26, 14, 'H. Hà Quảng', NULL),
(379, 26, 14, 'H. Hạ Lang', NULL),
(380, 26, 14, 'H. Hòa An', NULL),
(381, 26, 14, 'H. Nguyên Bình', NULL),
(382, 26, 14, 'H. Quảng Uyên', NULL),
(383, 26, 14, 'H. Bảo Lâm', NULL),
(384, 26, 14, 'H. Phục Hòa', NULL),
(385, 26, 14, 'H. Thạch An', NULL),
(386, 26, 14, 'H. Thông Nông', NULL),
(387, 26, 14, 'H. Trà Lĩnh', NULL),
(388, 26, 14, 'H. Trùng Khánh', NULL),
(389, 780, 15, 'TP. Cà Mau', NULL),
(390, 780, 14, 'H. Thới Bình', NULL),
(391, 780, 14, 'H. U Minh', NULL),
(392, 780, 14, 'H. Trần Văn Thời', NULL),
(393, 780, 14, 'H. Cái Nước', NULL),
(394, 780, 14, 'H. Đầm Dơi', NULL),
(395, 780, 14, 'H. Ngọc Điển', NULL),
(396, 500, 15, 'TP. Buôn Ma Thuột', NULL),
(397, 500, 14, 'H. Buôn Đôn', NULL),
(398, 500, 14, 'H. Ea Kar', NULL),
(399, 500, 14, 'H. Ea Súp', NULL),
(400, 500, 14, 'H. Krông Ana', NULL),
(401, 500, 14, 'H. Krông Bông', NULL),
(402, 500, 14, 'H. Krông Buk', NULL),
(403, 500, 14, 'H. Krông Năng', NULL),
(404, 500, 14, 'H. Krông Pắc', NULL),
(405, 500, 14, 'H. Lăk', NULL),
(406, 501, 15, 'TX. Gia Nghĩa', NULL),
(407, 501, 14, 'H. Đăk Mil', NULL),
(408, 501, 14, 'H. Cư Jut', NULL),
(409, 501, 14, 'H. Đăk Rlăp', NULL),
(410, 501, 14, 'H. Krông Nô', NULL),
(411, 501, 14, 'H. Đắk Song', NULL),
(412, 61, 15, 'TP. Biên Hòa', NULL),
(413, 61, 14, 'H. Định Quán', NULL),
(414, 61, 0, 'H. Long Khánh', NULL),
(415, 61, 14, 'H. Long Thành', NULL),
(416, 61, 14, 'H. Nhơn Trạch', NULL),
(417, 61, 0, 'H. Tân Phú', NULL),
(418, 61, 14, 'H. Thống Nhất', NULL),
(419, 61, 14, 'H. Vĩnh Cửu', NULL),
(420, 61, 14, 'H. Xuân Lộc', NULL),
(421, 67, 15, 'TP. Cao Lãnh', NULL),
(422, 67, 15, 'TX. Sa Đéc', NULL),
(423, 67, 14, 'H. Cao Lãnh', NULL),
(424, 67, 14, 'H. Châu Thành', NULL),
(425, 67, 14, 'H. Hồng Hạnh', NULL),
(426, 67, 14, 'H. Lai Vung', NULL),
(427, 67, 14, 'H. Lấp Vò', NULL),
(428, 67, 14, 'H. Tam Nông', NULL),
(429, 67, 14, 'H. Tân Hồng', NULL),
(430, 67, 14, 'H. Thanh Bình', NULL),
(431, 67, 14, 'H. Tháp Mười', NULL),
(432, 320, 15, 'TP. Hải Dương', NULL),
(433, 320, 14, 'H. Bình Giang', NULL),
(434, 320, 14, 'H. Cẩm Giang', NULL),
(435, 320, 14, 'H. Chí Linh', NULL),
(436, 320, 14, 'H. Gia Lộc', NULL),
(437, 320, 14, 'H. Kim Thành', NULL),
(438, 320, 14, 'H. Kinh Môn', NULL),
(439, 320, 0, 'H. Nam Sách', NULL),
(440, 320, 14, 'H. Ninh Giang', NULL),
(441, 320, 14, 'H. Thanh Hà', NULL),
(442, 320, 14, 'H. Thanh Miện', NULL),
(443, 320, 14, 'H. Tứ Kỳ', NULL),
(444, 218, 15, 'TP. Hòa Bình', NULL),
(445, 218, 14, 'H. Đà Bắc', NULL),
(446, 218, 14, 'H. Kim Bôi', NULL),
(447, 218, 14, 'H. Lạc Sơn', NULL),
(448, 218, 14, 'H. Lạc Thủy', NULL),
(449, 218, 14, 'H. Lương Sơn', NULL),
(450, 218, 14, 'H. Mai Châu', NULL),
(451, 218, 14, 'H. Tân Lạc', NULL),
(452, 218, 14, 'H. Yên Thủy', NULL),
(453, 218, 14, 'H. Kỳ Sơn', NULL),
(454, 218, 14, 'H. Cao Phong', NULL),
(455, 321, 15, 'TX. Hưng Yên', NULL),
(456, 321, 14, 'H. An Thi', NULL),
(457, 321, 14, 'H. Kim Động', NULL),
(458, 321, 14, 'H. Phù Cừ', NULL),
(459, 321, 14, 'H. Tiên Lữ', NULL),
(460, 321, 14, 'H. Vân Lâm', NULL),
(461, 321, 14, 'H. Mỹ Hào', NULL),
(462, 321, 14, 'H. Yên Mỹ', NULL),
(463, 321, 14, 'H. Văn Giang', NULL),
(464, 321, 14, 'H. Khoái Châu', NULL),
(465, 58, 15, 'TP. Nha Trang', NULL),
(466, 58, 15, 'TX. Cam Ranh', NULL),
(467, 58, 14, 'H. Diên Khánh', NULL),
(468, 58, 14, 'H. Khánh Sơn', NULL),
(469, 58, 14, 'H. Khánh Vĩnh', NULL),
(470, 58, 14, 'H. Ninh Hòa', NULL),
(471, 58, 14, 'H. Trường Sa', NULL),
(472, 58, 14, 'H. Vạn Ninh', NULL),
(473, 77, 15, 'TX. Rạch Giá', NULL),
(474, 77, 14, 'H. An Biên', NULL),
(475, 77, 14, 'H. Kiên Biên', NULL),
(476, 77, 14, 'H. An Minh', NULL),
(477, 77, 14, 'H. Châu Thành', NULL),
(478, 77, 14, 'H. Gò Quao', NULL),
(479, 77, 14, 'H. Giồng Riềng', NULL),
(480, 77, 14, 'H. Hà Tiên', NULL),
(481, 77, 14, 'H. Hòn Đất', NULL),
(482, 77, 14, 'H. Kiên Hải', NULL),
(483, 77, 14, 'H. Phú Quốc', NULL),
(484, 77, 14, 'H. Tân Hiệp', NULL),
(485, 77, 14, 'H. Vĩnh Thuận', NULL),
(486, 72, 15, 'TX. Tân An', NULL),
(487, 72, 14, 'H. Bến Lức', NULL),
(488, 72, 14, 'H. Cần Đước', NULL),
(489, 72, 14, 'H. Cần Giuộc', NULL),
(490, 72, 14, 'H. Châu Thành', NULL),
(491, 72, 14, 'H. Đức Hòa', NULL),
(492, 72, 14, 'H. Đức Huệ', NULL),
(493, 72, 14, 'H. Mộc Hóa', NULL),
(494, 72, 14, 'H. Tân Hưng', NULL),
(495, 72, 14, 'H. Tân Thạnh', NULL),
(496, 72, 14, 'H. Tân Trụ', NULL),
(497, 72, 14, 'H. Thạnh Hóa', NULL),
(498, 72, 14, 'H. Thủ Thừa', NULL),
(499, 72, 14, 'H. Vĩnh Hưng', NULL),
(500, 350, 15, 'TP. Nam Định', NULL),
(501, 350, 14, 'H. Giao Thủy', NULL),
(502, 350, 14, 'H. Hải Hậu', NULL),
(503, 350, 14, 'H. Mỹ Lộc', NULL),
(504, 350, 14, 'H. Nam Trực', NULL),
(505, 350, 14, 'H. Nghĩa Hưng', NULL),
(506, 350, 14, 'H. Trực Ninh', NULL),
(507, 350, 14, 'H. Xuân Trường', NULL),
(508, 350, 14, 'H. Vụ Bản', NULL),
(509, 350, 14, 'H. Ý Yên', NULL),
(510, 38, 15, 'TP. Vinh', NULL),
(511, 38, 15, 'TX. Cửa Lò', NULL),
(512, 38, 14, 'H. Anh Sơn', NULL),
(513, 38, 14, 'H. Con Cuông', NULL),
(514, 38, 14, 'H. Diễn Châu', NULL),
(515, 38, 14, 'H. Đô Lương', NULL),
(516, 38, 14, 'H. Hưng Nguyên', NULL),
(517, 38, 14, 'H. Kỳ Sơn', NULL),
(518, 38, 14, 'H. Nam Đàn', NULL),
(519, 38, 14, 'H. Nghi Lộc', NULL),
(520, 38, 14, 'H. Nghĩa Đàn', NULL),
(521, 38, 14, 'H. Quế Phong', NULL),
(522, 38, 14, 'H. Qùy Châu', NULL),
(523, 38, 14, 'H. Qùy Hợp', NULL),
(524, 38, 14, 'H. Quỳnh Lưu', NULL),
(525, 38, 0, 'H. Tân Qùy', NULL),
(526, 38, 14, 'H. Thanh Chương', NULL),
(527, 38, 14, 'H. Tương Dương', NULL),
(528, 38, 14, 'H. Yên Thành', NULL),
(529, 30, 15, 'TP. Ninh Bình', NULL),
(530, 30, 15, 'TX. Tam Điệp', NULL),
(531, 30, 14, 'H. Gia Viễn', NULL),
(532, 30, 0, 'H. Hoa Lư', NULL),
(533, 30, 14, 'H. Kim Sơn', NULL),
(534, 30, 14, 'H. Nho Quang', NULL),
(535, 30, 14, 'H. Yên Khánh', NULL),
(536, 30, 14, 'H. Yên Mô', NULL),
(537, 68, 0, 'TX. Phan Rang-Tháp Chàm', NULL),
(538, 68, 14, 'H. Ninh Hải', NULL),
(539, 68, 14, 'H. Ninh Phước', NULL),
(540, 68, 14, 'H. Ninh Sơn', NULL),
(541, 68, 14, 'H. Bác Ai', NULL),
(542, 33, 15, 'TP. Hạ Long', NULL),
(543, 33, 15, 'TX. Cẩm Phả', NULL),
(544, 33, 15, 'TX. Uông Bí', NULL),
(545, 33, 15, 'TX. Móng Cái', NULL),
(546, 33, 14, 'H. Ba Chẽ', NULL),
(547, 33, 14, 'H. Bình Liêu', NULL),
(548, 33, 14, 'H. Cô Tô', NULL),
(549, 33, 14, 'H. Đông Triều', NULL),
(550, 33, 14, 'H. Hải Hà', NULL),
(551, 33, 14, 'H. Hoành Bồ', NULL),
(552, 33, 14, 'H. Đầm Hà', NULL),
(553, 33, 14, 'H. Tiên Yên', NULL),
(554, 33, 14, 'H. Vân Đồn', NULL),
(555, 33, 14, 'H. Yên Hưng', NULL),
(556, 53, 15, 'TX. Đông Hà', NULL),
(557, 53, 15, 'TX. Quảng Trị', NULL),
(558, 53, 14, 'H. Cam Lộ', NULL),
(559, 53, 14, 'H. Đakrông', NULL),
(560, 53, 14, 'H. Gio Linh', NULL),
(561, 53, 14, 'H. Hải Lãng', NULL),
(562, 53, 14, 'H. Hướng Hóa', NULL),
(563, 53, 14, 'H. Triệu Phong', NULL),
(564, 53, 14, 'H. Vĩnh Linh', NULL),
(565, 79, 15, 'TX. Sóc Trăng', NULL),
(566, 79, 14, 'H. Kế Sách', NULL),
(567, 79, 14, 'H. Long Phú', NULL),
(568, 79, 14, 'H. Mỹ Tú', NULL),
(569, 79, 14, 'H. Mỹ Xuyên', NULL),
(570, 79, 14, 'H. Thạnh Trị', NULL),
(571, 79, 14, 'H. Vĩnh Châu', NULL),
(572, 79, 14, 'H. Cù Lao Dung', NULL),
(573, 22, 15, 'TP. Sơn La', NULL),
(574, 22, 14, 'H. Bắc Yên', NULL),
(575, 22, 14, 'H. Mai Sơn', NULL),
(576, 22, 14, 'H. Mộc Châu', NULL),
(577, 22, 14, 'H. Mường La', NULL),
(578, 22, 14, 'H. Phù Yên', NULL),
(579, 22, 14, 'H. Quỳnh Nhai', NULL),
(580, 22, 14, 'H. Sông Mã', NULL),
(581, 22, 14, 'H. Thuận Châu', NULL),
(582, 22, 14, 'H. Yên Châu', NULL),
(583, 66, 15, 'TX. Tây Ninh', NULL),
(584, 66, 14, 'H. Bến Cầu', NULL),
(585, 66, 14, 'H. Châu Thành', NULL),
(586, 66, 14, 'H. Dương Minh Châu', NULL),
(587, 66, 14, 'H. Gò Dầu', NULL),
(588, 66, 14, 'H. Hòa Thành', NULL),
(589, 66, 14, 'H. Tân Biên', NULL),
(590, 66, 14, 'H. Tân Châu', NULL),
(591, 66, 14, 'H. Trảng Bàng', NULL),
(592, 36, 15, 'TP. Thái Bình', NULL),
(593, 36, 14, 'H. Đông Hưng', NULL),
(594, 36, 14, 'H. Hưng Hà', NULL),
(595, 36, 14, 'H. Kiến Xương', NULL),
(596, 36, 14, 'H. Quỳnh Phụ', NULL),
(597, 36, 14, 'H. Thái Thụy', NULL),
(598, 36, 14, 'H. Tiền Hải', NULL),
(599, 36, 14, 'H. Vũ Thư', NULL),
(600, 27, 15, 'TX. Tuyên Quang', NULL),
(601, 27, 14, 'H. Chiêm Hóa', NULL),
(602, 27, 14, 'H. Hàm Yên', NULL),
(603, 27, 14, 'H. Na Hang', NULL),
(604, 27, 14, 'H. Sơn Dương', NULL),
(605, 27, 14, 'H. Yên Sơn', NULL),
(606, 70, 15, 'TP. Vĩnh Long', NULL),
(607, 70, 14, 'H. Long Hồ', NULL),
(608, 70, 14, 'H. Mang Thít', NULL),
(609, 70, 14, 'H. Bình Minh', NULL),
(610, 70, 14, 'H. Tam Bình', NULL),
(611, 70, 14, 'H. Trà On', NULL),
(612, 70, 14, 'H. Vũng Liêm', NULL),
(613, 211, 15, 'TX. Vĩnh Yên', NULL),
(614, 211, 14, 'H. Lập Thạch', NULL),
(615, 211, 14, 'H. Mê Linh', NULL),
(616, 211, 14, 'H. Tam Dương', NULL),
(617, 211, 14, 'H. Bình Xuyên', NULL),
(618, 211, 14, 'H. Vĩnh Tường', NULL),
(619, 211, 14, 'H. Yên Lạc', NULL),
(620, 29, 15, 'TP. Yên Bái', NULL),
(621, 29, 15, 'TX. Nghĩa Lộ', NULL),
(622, 29, 14, 'H. Lục Yên', NULL),
(623, 29, 14, 'H. Mù Căng Chải', NULL),
(624, 29, 14, 'H. Trạm Tấu', NULL),
(625, 29, 14, 'H. Trấn Yên', NULL),
(626, 29, 14, 'H. Văn Chấn', NULL),
(627, 29, 14, 'H. Văn Yên', NULL),
(628, 29, 14, 'H. Yên Bình', NULL),
(629, 4, 12, 'H. Chương Mỹ', NULL),
(630, 4, 12, 'H. Đan Phượng', NULL),
(631, 4, 12, 'Q. Hà Đông', NULL),
(632, 4, 12, 'H. Hoài Đức', NULL),
(633, 4, 12, 'H. Phú Xuyên', NULL),
(634, 241, 12, 'P. Thị Cầu', NULL),
(635, 651, 12, 'H. Chơn Thành', NULL),
(636, 511, 12, 'Q. Cẩm Lệ', NULL),
(637, 500, 12, 'H. Ea H''leo', NULL),
(638, 500, 12, 'H. Ea Kar ', NULL),
(639, 500, 12, 'H. M''adrac', NULL),
(640, 500, 12, 'H. Krông Búk', NULL),
(641, 31, 12, 'H. An Dương', NULL),
(642, 58, 12, 'H. Cam Lâm', NULL),
(643, 350, 12, 'X. Mỹ Xá', NULL),
(644, 38, 12, 'TX. Thái Hòa', NULL),
(645, 510, 2, 'H. Duy Xuyên', NULL),
(646, 37, 122, 'P. Ba Đình', NULL),
(647, 37, 12, 'H. Quảng Xương', NULL),
(648, 211, 12, 'TX. Phúc Yên', NULL),
(649, 4, 2, 'H. Ba Vì', NULL),
(650, 4, 2, 'T. Bắc Ninh', NULL),
(651, 4, 22, 'T. Hà Tây', NULL),
(652, 4, 2, 'T. Hưng Yên', NULL),
(653, 4, 2, 'H. Mê Linh', NULL),
(654, 4, 1, 'H. Mỹ Đức', NULL),
(655, 4, 2, 'P. Nguyễn Tuân', NULL),
(656, 4, 12, 'H. Quốc Oai', NULL),
(657, 4, 2, 'TX. Sơn Tây', NULL),
(658, 4, 11, 'X. Tân Triều', NULL),
(659, 4, 222, 'H. Thạch Thất', NULL),
(660, 4, 12, 'H. Văn Giang', NULL),
(663, 4, 22, 'H. Thường Tín', NULL),
(664, 281, 22, 'H. Sơn Động', NULL),
(665, 651, 2, 'H. Bù Gia Mập', NULL),
(666, 61, 122, 'H. Trảng Bom', NULL),
(667, 38, 22, 'H. Tân Kỳ', NULL),
(668, 280, 11, 'Q. Phú Lương ', NULL),
(669, 37, 22, 'H. Thọ Xuân', NULL),
(670, 37, 22, 'H. Tĩnh Gia', NULL),
(671, 37, 22, 'H. Triệu Sơn', NULL),
(672, 211, 22, 'H. Tam Đảo', NULL),
(673, 281, 22, 'P. Hoàng Văn Thụ', NULL),
(674, 36, 12, 'H. Yên Định', NULL),
(675, 4, 1, 'TT. Xuân Mai', NULL),
(676, 4, 22, 'TT. Phú Minh', NULL),
(677, 4, 22, 'H. Đông Ba', NULL),
(678, 4, 22, 'Q. Hòa Bình', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wz_education`
--

DROP TABLE IF EXISTS `wz_education`;
CREATE TABLE IF NOT EXISTS `wz_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `degree_id` int(11) NOT NULL DEFAULT '0',
  `location_id` int(11) NOT NULL DEFAULT '0',
  `school_program` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `achievement` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wz_education`
--

INSERT INTO `wz_education` (`id`, `uid`, `degree_id`, `location_id`, `school_program`, `major`, `from`, `to`, `achievement`, `status`, `flag`, `changed`, `created`) VALUES
(6, 11, 2, 8, 'dgasgsgs', 'ahhahaha', '2014-07-09', '2014-07-31', 'agahashaha', 1, 1, '2014-07-08 11:04:10', '2014-07-08 11:04:10'),
(7, 11, 2, 8, 'eqrgqeger', 'erwgwe', '2014-07-16', '2014-07-30', 'ergwegew', 1, 1, '2014-07-09 01:00:14', '2014-07-09 01:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `wz_endorser`
--

DROP TABLE IF EXISTS `wz_endorser`;
CREATE TABLE IF NOT EXISTS `wz_endorser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `last_user` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wz_endorser`
--

INSERT INTO `wz_endorser` (`id`, `name_vi`, `name_en`, `counter`, `last_user`, `status`, `changed`, `created`) VALUES
(1, 'Online Advertising', 'Online Advertising', 1, 1, 1, '2014-07-01 11:40:24', '2014-06-20 18:26:30'),
(2, 'SEO', 'SEO', 1, 1, 1, '2014-07-01 11:40:36', '2014-07-01 11:40:36'),
(3, 'Social Media', 'Social Media', 0, NULL, 1, '2014-07-01 11:41:15', '2014-07-01 11:41:15'),
(4, 'Online Marketing', 'Online Marketing', 1, 1, 1, '2014-07-01 11:42:39', '2014-07-01 11:42:39'),
(5, 'AAAAAA', 'AAAAAA', 2, 1, 1, '2014-07-01 11:43:08', '2014-07-01 11:43:08'),
(6, 'BBBBBB', 'BBBBBBB', 1, 1, 1, '2014-07-01 11:43:17', '2014-07-01 11:43:17'),
(7, 'CCCCCC', 'CCCCCC', 1, 1, 1, '2014-07-01 11:43:24', '2014-07-01 11:43:24'),
(8, 'DDDDD', 'DDDDD', 1, 1, 1, '2014-07-01 11:43:34', '2014-07-01 11:43:34'),
(9, 'EEEEE', 'EEEEE', 2, 1, 1, '2014-07-01 11:43:42', '2014-07-01 11:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `wz_endorser_user`
--

DROP TABLE IF EXISTS `wz_endorser_user`;
CREATE TABLE IF NOT EXISTS `wz_endorser_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endorser_id` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `wz_endorser_user`
--

INSERT INTO `wz_endorser_user` (`id`, `endorser_id`, `user_id`, `email`) VALUES
(12, '["5","9"]', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `wz_executive_team`
--

DROP TABLE IF EXISTS `wz_executive_team`;
CREATE TABLE IF NOT EXISTS `wz_executive_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `position_vi` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `image` varchar(255) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wz_executive_team`
--

INSERT INTO `wz_executive_team` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `position_vi`, `position_en`, `description_vi`, `description_en`, `image`, `phone`, `email`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 'Nguyen Van A', 'Nguyen Van A', 'nguyen-van-a', 'nguyen-van-a', 'Giam doc ky thuat', 'Giam doc ky thuat', NULL, NULL, '2014/06/20/25fe25aafa707498868096496d1877ba_1403233053.jpg', NULL, NULL, 0, 1, '2014-07-01 11:30:52', '2014-06-20 09:57:55'),
(2, 'Nguyen Van B', 'Nguyen Van B', 'nguyen-van-b', 'nguyen-van-b', 'aaaaaaaaa', 'bbbbbbbbbb', NULL, NULL, '2014/07/01/c58d8df61bed2f3a278e64479686b1f8_1404189064.jpg', NULL, NULL, 1, 1, '2014-07-01 11:31:18', '2014-07-01 11:31:18'),
(3, 'Nguyen Van C', 'Nguyen Van C', 'nguyen-van-c', 'nguyen-van-c', 'assssssssss', 'dddddddddddddd', NULL, NULL, '2014/07/01/351fe47cf9d206ef5f517b5768030df1_1404189087.jpg', NULL, NULL, 1, 1, '2014-07-01 11:31:39', '2014-07-01 11:31:39'),
(4, 'Nguyen Van D', 'Nguyen Van D', 'nguyen-van-d', 'nguyen-van-d', 'ggggggggg', 'hhhhhhhhhhhhh', NULL, NULL, '2014/07/01/9c1987ecd971d7d06880254cec556581_1404189109.jpg', NULL, NULL, 1, 1, '2014-07-01 11:32:04', '2014-07-01 11:32:04'),
(5, 'Nguyen Van H', 'Nguyen Van H', 'nguyen-van-h', 'nguyen-van-h', 'ddfdfdfs', 'sdfdsfdsfdsfsd', NULL, NULL, '2014/07/01/4d273563eb5e1b56c09f3965bb888a87_1404189136.jpg', NULL, NULL, 1, 1, '2014-07-01 11:32:34', '2014-07-01 11:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `wz_faq`
--

DROP TABLE IF EXISTS `wz_faq`;
CREATE TABLE IF NOT EXISTS `wz_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` text,
  `answer` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wz_faq`
--


-- --------------------------------------------------------

--
-- Table structure for table `wz_file`
--

DROP TABLE IF EXISTS `wz_file`;
CREATE TABLE IF NOT EXISTS `wz_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL COMMENT 'Module ID',
  `nid` int(11) DEFAULT NULL COMMENT 'Content ID',
  `field` int(11) DEFAULT '0' COMMENT 'Field ID',
  `data` text,
  `file` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `wz_file`
--

INSERT INTO `wz_file` (`id`, `mid`, `nid`, `field`, `data`, `file`, `order`, `status`, `changed`, `created`) VALUES
(88, 2, 21, 56, '{"title":"","caption":"","youtube":""}', '2014/04/17/7f934b888c1613dab2d6c84a2d8c2ffc_1397724005.jpg', 0, 1, '2014-04-18 14:21:06', '2014-04-17 15:40:31'),
(72, 2, 17, 56, '{"title":"","caption":"","youtube":""}', '2014/04/05/28a7b3e6fd547b75c905c10948d843f5_1396664940.jpg', 0, 1, '2014-04-17 11:06:16', '2014-04-05 09:29:35'),
(73, 2, 17, 56, '{"title":"","caption":"","youtube":""}', '2014/04/05/eb9df57e6dee06b196cc3e7a3fbb7e09_1396665796.jpg', 0, 1, '2014-04-17 11:06:16', '2014-04-05 09:43:16'),
(74, 10, 5, 64, '{"title":"","caption":"","youtube":""}', '2014/04/05/7d2eb8bb049b51a8c32fbe1482fd9887_1396668925.jpg', 0, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28'),
(75, 10, 5, 64, '{"title":"","caption":"","youtube":""}', '2014/04/05/9b904cdbb4465b7439a0c5963c3b2a57_1396668917.jpg', 0, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28'),
(76, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/f35307d4899f0aebcb009d54a156a5b6_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45'),
(77, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/7c8e2003fd935395fad9d224e0e83e2f_1396672082.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45'),
(78, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/45f3700a66063ba475d0c593b016598d_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45'),
(79, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/2dfa64cd54bb173e66c12f5779fbc57b_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45'),
(93, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/bf43364452c1ed936a39ded89af002e2_1399518744.png', 2, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:23'),
(94, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/9328767c7a6c9ee75f68f606e2b38435_1399518744.png', 0, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:24'),
(95, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/d59f8154cb2262bddd943383b0f52699_1399518744.png', 1, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:24'),
(89, 2, 22, 56, '{"title":"","caption":"","youtube":""}', '2014/04/18/b0ecd1cc0191500bd4f5f5246feb228e_1397805757.jpg', 0, 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02'),
(87, 2, 20, 56, '{"title":"","caption":"","youtube":""}', '2014/04/17/d863780ac7ebd56c431696d12fc1d432_1397723937.jpg', 0, 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `wz_file_tmp`
--

DROP TABLE IF EXISTS `wz_file_tmp`;
CREATE TABLE IF NOT EXISTS `wz_file_tmp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `wz_file_tmp`
--

INSERT INTO `wz_file_tmp` (`id`, `file`, `token`, `status`, `changed`, `created`) VALUES
(99, '2014/07/01/04eff60264ce3058dc6f32d2b281d979_1404206630.jpg', '308_3e0d7250241d137e35866857326d4412382dd666031d92d469181e971ad4f651', 1, '2014-07-01 16:23:50', '2014-07-01 16:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `wz_function_job`
--

DROP TABLE IF EXISTS `wz_function_job`;
CREATE TABLE IF NOT EXISTS `wz_function_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_function_job`
--

INSERT INTO `wz_function_job` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `status`, `changed`, `created`) VALUES
(1, 'Any-Sales', 'Bất kỳ-Kinh doanh', 'any-sales', 'bat-ky-kinh-doanh', 1, '2014-06-24 11:52:38', '2014-06-24 11:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `wz_home`
--

DROP TABLE IF EXISTS `wz_home`;
CREATE TABLE IF NOT EXISTS `wz_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `wz_home`
--

INSERT INTO `wz_home` (`id`, `title`, `description`, `content`, `status`, `changed`, `created`) VALUES
(8, 'Tiêu đề 1', 'Mô tả 1', '<p>Nội dung 1</p>\r\n', 1, '2013-10-25 10:31:01', '2013-10-25 10:31:01'),
(9, 'Tiêu đề 3', 'Mô tả 3', '<p>Nội dung 3</p>\r\n', 1, '2013-10-25 10:31:22', '2013-10-25 10:31:22'),
(10, 'Tiêu đề', '4', '<p>sdfsd</p>\r\n', 1, '2013-10-25 14:18:50', '2013-10-25 10:31:59'),
(14, '77777777', '7777777777777777777777', '<p>7777777777777777777777777777</p>\r\n', 1, '2013-10-25 10:32:37', '2013-10-25 10:32:37'),
(15, '8888888888888', '88888888888888888888888888888', '<p>888888888888888888888888888888888888888888888</p>\r\n', 1, '2013-10-25 14:18:43', '2013-10-25 10:32:46'),
(16, '99999999999999999', '999999999999999999999999999999', '<p>9999999999999999999999999999999999999999999999999</p>\r\n', 1, '2013-10-25 14:18:35', '2013-10-25 10:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `wz_hrservices`
--

DROP TABLE IF EXISTS `wz_hrservices`;
CREATE TABLE IF NOT EXISTS `wz_hrservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT 'hrservices_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content_vi` text,
  `content_en` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_hrservices`
--

INSERT INTO `wz_hrservices` (`id`, `category_id`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `content_vi`, `content_en`, `status`, `changed`, `created`) VALUES
(1, 1, 'zO3AX7rZjh', 'aaaaaaaaaaaa', 'bbbbbbbbbbbbbbb', 'aaaaaaaaaaaa-zO3AX7rZjhn', 'bbbbbbbbbbbbbbb--zO3AX7rZjhn', NULL, '<p>aaaaaaaaaaaa</p>\n', '<p>bbbbbbbbbbbbbbbbbbbbb</p>\n', 1, '2014-06-19 10:07:30', '2014-06-19 10:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `wz_hrservices_category`
--

DROP TABLE IF EXISTS `wz_hrservices_category`;
CREATE TABLE IF NOT EXISTS `wz_hrservices_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `description_en` text,
  `description_vi` text,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wz_hrservices_category`
--

INSERT INTO `wz_hrservices_category` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `description_en`, `description_vi`, `image`, `status`, `changed`, `created`) VALUES
(1, 'tìm kiếm điều hành', 'executive search', 'tim-kiem-dieu-hanh', 'executive-search', 'As for high ranking manage position that plays key roles in the Company.', 'Như đối với thứ hạng cao quản lý vị trí đó đóng vai trò quan trọng trong Công ty.', '2014/06/19/7e39eb549ebd6137999a90fd4cb17434_1403146924.jpg', 1, '2014-06-30 17:35:44', 2014),
(2, 'dịch vụ tư vấn', 'hr advisory service', 'dich-vu-tu-van', 'hr-advisory-service', 'Như đối với thứ hạng cao quản lý vị trí đó đóng vai trò quan trọng trong Công ty.', 'As for high ranking manage position that plays key roles in the Company.', '2014/06/30/b9e6950ef46a83e936bdfad0ec69bc0c_1404096583.jpg', 1, '2014-06-30 17:35:57', 2014),
(3, 'đào tạo nhân sự và phát triển dịch vụ', 'hr tranning &amp;amp; development service', 'dao-tao-nhan-su-va-phat-trien-dich-vu', 'hr-tranning-development-service', 'As for high ranking manage position that plays key roles in the Company.', 'Như đối với thứ hạng cao quản lý vị trí đó đóng vai trò quan trọng trong Công ty.', '2014/06/30/87872082ab0c425210fc3add0059bd15_1404096660.jpg', 1, '2014-06-30 17:36:16', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `wz_industry_job`
--

DROP TABLE IF EXISTS `wz_industry_job`;
CREATE TABLE IF NOT EXISTS `wz_industry_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_industry_job`
--

INSERT INTO `wz_industry_job` (`id`, `name_vi`, `slug_vi`, `slug_en`, `name_en`, `status`, `changed`, `created`) VALUES
(1, 'Banking', 'banking', 'ngan-hang', 'Ngân hàng', 1, '2014-06-24 11:52:53', '2014-06-24 11:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `wz_information`
--

DROP TABLE IF EXISTS `wz_information`;
CREATE TABLE IF NOT EXISTS `wz_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT 'information_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `tags` varchar(100) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_information`
--

INSERT INTO `wz_information` (`id`, `category_id`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `description_vi`, `description_en`, `content_vi`, `content_en`, `tags`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 2, '11lCdn54s7', 'kjkhkhkh', 'kjkllklkj', 'kjkhkhkh-11lCdn54s7', 'kjkllklkj--11lCdn54s7', '2014/06/30/9f24fc2cdc01acb03a77fdf974d0a61b_1404117547.jpg', 'jhjhkhhkh', 'kjhjkhjkhjjk', '<p>kj,kn,n,nm,</p>\r\n', '<p>jhjkhjkhjkhjh</p>\r\n', '', 1, 1, '2014-06-30 15:39:08', '2014-06-20 17:02:29'),
(2, 2, '07tzYY6lgR', 'aaaaaaaa', 'bbbbbbbbb', 'aaaaaaaa-07tzYY6lgRv', 'bbbbbbbbb--07tzYY6lgRv', '2014/06/30/852d8bc5eff7c42e6d2b49bd9aec64db_1404117557.jpg', 'asfsafsafsdafds', 'SFSDAFSADSA', '<p>gsdagsadgsgdagsa</p>\r\n', '<p>sadfasdfadsfsafsda</p>\r\n', '', 1, 1, '2014-06-30 15:39:30', '2014-06-30 15:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `wz_information_category`
--

DROP TABLE IF EXISTS `wz_information_category`;
CREATE TABLE IF NOT EXISTS `wz_information_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wz_information_category`
--

INSERT INTO `wz_information_category` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `is_home`, `status`, `changed`, `created`) VALUES
(2, 'TIN TỨC', 'IN THE NEWS', 'tin-tuc', 'in-the-news', '2014/06/20/52cbcbf69d5974f0d7561e3a4dffae70_1403259576.jpg', 0, 1, '2014-06-20 17:19:37', 2014),
(3, 'Thư Vện', 'Library', 'thu-ven', 'library', '2014/06/30/55f1609b373879252081ac9cea1ab664_1404117725.jpg', 1, 1, '2014-06-30 15:42:22', 2014),
(4, 'Chuyên môn Talentnet', 'Talentnet_Expertise', 'chuyen-mon-talentnet', 'talentnet-expertise', '2014/06/30/590c4ee5481138da707d6007ca4f097a_1404117778.jpg', 1, 1, '2014-06-30 15:43:07', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `wz_jobs`
--

DROP TABLE IF EXISTS `wz_jobs`;
CREATE TABLE IF NOT EXISTS `wz_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `function_id` int(11) DEFAULT '0' COMMENT 'function_job',
  `industry_id` int(11) NOT NULL DEFAULT '0' COMMENT 'industry_job',
  `location_id` int(11) NOT NULL DEFAULT '0' COMMENT 'location',
  `level_id` int(11) NOT NULL DEFAULT '0' COMMENT 'level_job',
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `ids` varchar(10) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `em_description_vi` text,
  `em_description_en` text,
  `job_description_vi` text,
  `job_description_en` text,
  `job_requirement_vi` text,
  `job_requirement_en` text,
  `salary_min_vi` int(11) NOT NULL DEFAULT '0',
  `salary_min_en` int(11) NOT NULL DEFAULT '0',
  `salary_max_vi` bigint(15) NOT NULL DEFAULT '0',
  `salary_max_en` bigint(15) NOT NULL DEFAULT '0',
  `tags` varchar(100) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wz_jobs`
--

INSERT INTO `wz_jobs` (`id`, `function_id`, `industry_id`, `location_id`, `level_id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `ids`, `code`, `em_description_vi`, `em_description_en`, `job_description_vi`, `job_description_en`, `job_requirement_vi`, `job_requirement_en`, `salary_min_vi`, `salary_min_en`, `salary_max_vi`, `salary_max_en`, `tags`, `hot`, `status`, `changed`, `created`) VALUES
(1, 1, 1, 8, 1, 'Giám đốc Điều hành quốc gia', 'National Operations Manager', 'giam-doc-dieu-hanh-quoc-gia-8I9nZxGMm5', 'national-operations-manager--8I9nZxGMm5', '8I9nZxGMm5', 'VD25665', '<div class="fs13 c_000" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;">Our client is one of global leading dairy companies in the market with more than 100 years experience in dairy technology.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">Please submit CV to&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">career.solution@talentnet.vn</a>,&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">le.t.chau.hoang@talentnet.vn</a>&nbsp;or contact directly to Ms. Le Thi Chau Hoang at 62914188, ext: 507.</div>\r\n', '<div class="fs13 c_000" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;">Our client is one of global leading dairy companies in the market with more than 100 years experience in dairy technology.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">Please submit CV to&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">career.solution@talentnet.vn</a>,&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">le.t.chau.hoang@talentnet.vn</a>&nbsp;or contact directly to Ms. Le Thi Chau Hoang at 62914188, ext: 507.</div>\r\n\r\n<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">&nbsp;</div>\r\n', '<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n', '<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n', '<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n', '<div class="fs13 c_000" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;">\r\n<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n</div>\r\n', 0, 0, 0, 0, '3', 1, 1, '2014-07-03 10:01:05', '2014-06-24 11:55:52'),
(2, 1, 1, 64, 1, 'Giám đốc tài chính', 'Finance Director', 'giam-doc-tai-chinh-aWUzTgaoNN', 'finance-director--aWUzTgaoNN', 'aWUzTgaoNN', 'AD5555', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Giám đốc tài chính</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets/img/icon/icon-shape.png) 0% 1px no-repeat;" title="">Finance Director</a></li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Giám đốc tài chính</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets/img/icon/icon-shape.png) 0% 1px no-repeat;" title="">Finance Director</a></li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Giám đốc tài chính</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background: url(assets/img/icon/icon-shape.png) 0% 1px no-repeat;" title="">Finance Director</a></li>\r\n</ul>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:00:41', '2014-06-30 15:30:50'),
(3, 1, 1, 8, 1, 'Kế toán trưởng', 'Chief Accountant', 'ke-toan-truong-m7i0bWM12S', 'chief-accountant--m7i0bWM12S', 'm7i0bWM12S', 'AD588744', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Kế toán trưởng</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz/module/assets/img/icon/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;" title="">Chief Accountant</a></li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Kế toán trưởng</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz/module/assets/img/icon/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;" title="">Chief Accountant</a></li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);">Kế toán trưởng</li>\r\n</ul>\r\n', '<ul style="padding: 0px; margin: 0px 22px 0px 0px; outline: none 0px; box-sizing: border-box; border-width: 0px; border-left-style: dotted; border-left-color: rgb(183, 194, 201); font-size: 15px; list-style: none; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">\r\n	<li style="padding: 13px 0px 0px; margin: 0px 0px 13px; outline: none 0px; box-sizing: border-box; border-width: 1px 0px 0px; border-top-style: dotted; border-top-color: rgb(183, 194, 201); font-size: 13px; line-height: 13px; color: rgb(152, 152, 152);"><a href="javscript:void(0);" style="font-family: Arial, sans-serif; font-size: 13px; line-height: 13px; padding: 0px 0px 0px 14px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(102, 102, 102); display: inline-block; background-image: url(adminwz/module/assets/img/icon/icon-shape.png); background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0% 1px; background-repeat: no-repeat;" title="">Chief Accountant</a></li>\r\n</ul>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:00:20', '2014-07-03 09:56:27'),
(4, 1, 1, 8, 1, 'Quay Phim Và Đạo Diễn Truyền Hình', 'Film and television director', 'quay-phim-va-dao-dien-truyen-hinh-7HlhdTBWcVW', 'film-and-television-director--7HlhdTBWcVW', '7HlhdTBWcV', 'GF55888', '<p><a href="http://www.vietnamworks.com/quay-phim-va-dao-dien-truyen-hinh-487919-jd" style="box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);" target="_blank" title="Job - Quay Phim Và Đạo Diễn Truyền Hình - Đài Phát Thanh Và Truyền Hình Vĩnh Long"><strong style="box-sizing: border-box; display: block;">Quay Phim Và Đạo Diễn Truyền Hình</strong></a></p>\r\n', '<p>Film and television director</p>\r\n', '<p><a href="http://www.vietnamworks.com/quay-phim-va-dao-dien-truyen-hinh-487919-jd" style="box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);" target="_blank" title="Job - Quay Phim Và Đạo Diễn Truyền Hình - Đài Phát Thanh Và Truyền Hình Vĩnh Long"><strong style="box-sizing: border-box; display: block;">Quay Phim Và Đạo Diễn Truyền Hình</strong></a></p>\r\n', '<p>Film and television director</p>\r\n', '<p><a href="http://www.vietnamworks.com/quay-phim-va-dao-dien-truyen-hinh-487919-jd" style="box-sizing: border-box; color: rgb(51, 51, 51); text-decoration: none; -webkit-transition: color 0.3s; transition: color 0.3s; display: block; font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 13px; line-height: 18.571430206298828px; background: rgb(255, 255, 255);" target="_blank" title="Job - Quay Phim Và Đạo Diễn Truyền Hình - Đài Phát Thanh Và Truyền Hình Vĩnh Long"><strong style="box-sizing: border-box; display: block;">Quay Phim Và Đạo Diễn Truyền Hình</strong></a></p>\r\n', '<p>Film and television director</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 09:58:05', '2014-07-03 09:58:05'),
(5, 1, 1, 8, 1, 'Nhân Viên Kinh Doanh', 'Sales Staff', 'nhan-vien-kinh-doanh-1aRNMTn6rdm', 'sales-staff--1aRNMTn6rdm', '1aRNMTn6rd', 'ER88888', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Nhân Viên Kinh Doanh</span></p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Sales Staff</span></p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Nhân Viên Kinh Doanh</span></p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Sales Staff</span></p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Nhân Viên Kinh Doanh</span></p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Sales Staff</span></p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 09:59:04', '2014-07-03 09:59:04'),
(6, 1, 1, 64, 1, 'Phân tích Giám sát bán hàng', 'Sales Analysis Supervisor', 'phan-tich-giam-sat-ban-hang-2QxtPM07IVH', 'sales-analysis-supervisor--2QxtPM07IVH', '2QxtPM07IV', 'SD58974', '<p>Phân tích Giám sát bán hàng</p>\r\n', '<p>Sales Analysis Supervisor</p>\r\n', '<p>Phân tích Giám sát bán hàng</p>\r\n', '<p>Sales Analysis Supervisor</p>\r\n', '<p>Phân tích Giám sát bán hàng</p>\r\n', '<p>Sales Analysis Supervisor</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:02:56', '2014-07-03 10:02:56'),
(7, 1, 1, 64, 1, 'Quản lý sản xuất / nhà máy', 'Production / Plant Manager', 'quan-ly-san-xuat-nha-may-2SIo3X0huBi', 'production-plant-manager--2SIo3X0huBi', '2SIo3X0huB', 'DE88888', '<p>Quản lý sản xuất / nhà máy</p>\r\n', '<p>Production / Plant Manager</p>\r\n', '<p>Quản lý sản xuất / nhà máy</p>\r\n', '<p>Production / Plant Manager</p>\r\n', '<p>Quản lý sản xuất / nhà máy</p>\r\n', '<p>Production / Plant Manager</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:04:16', '2014-07-03 10:04:16'),
(8, 1, 1, 8, 1, 'Trung tâm dữ liệu cao cấp System Engineer', 'Senior Data Center System Engineer', 'trung-tam-du-lieu-cao-cap-system-engineer-9ESlKzcRDh', 'senior-data-center-system-engineer--9ESlKzcRDh', '9ESlKzcRDh', 'FR58888', '<p>Trung tâm dữ liệu cao cấp System Engineer</p>\r\n', '<p>Senior Data Center System Engineer</p>\r\n', '<p>Trung tâm dữ liệu cao cấp System Engineer</p>\r\n', '<p>Senior Data Center System Engineer</p>\r\n', '<p>Trung tâm dữ liệu cao cấp System Engineer</p>\r\n', '<p>Senior Data Center System Engineer</p>\r\n', 1000000, 100, 10000000, 1000, '1', 1, 1, '2014-07-04 09:49:11', '2014-07-03 10:06:29'),
(9, 1, 1, 76, 1, 'Giám Đốc Tài Chính', 'Chief Financial Officer', 'giam-doc-tai-chinh-szVTTQIXQiM', 'chief-financial-officer--szVTTQIXQiM', 'szVTTQIXQi', 'FR55555', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Giám Đốc Tài Chính</span></p>\r\n', '<p>Chief Financial Officer</p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Giám Đốc Tài Chính</span></p>\r\n', '<p>Chief Financial Officer</p>\r\n', '<p><span style="color: rgb(255, 255, 255); font-family: Roboto, Helvetica, Verdana, Arial, sans-serif; font-size: 25px; font-weight: bold; line-height: 50px; background-color: rgb(0, 185, 242);">Giám Đốc Tài Chính</span></p>\r\n', '<p>Chief Financial Officer</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:07:31', '2014-07-03 10:07:31'),
(10, 1, 1, 4, 1, 'Nhân Viên Tài Chính Kế Toán', 'Finance and Accounting Staff', 'nhan-vien-tai-chinh-ke-toan-odexA39YXfD', 'finance-and-accounting-staff--odexA39YXfD', 'odexA39YXf', 'F544444', '<p>Nhân Viên Tài Chính Kế Toán</p>\r\n', '<p>Finance and Accounting Staff</p>\r\n', '<p>Nhân Viên Tài Chính Kế Toán</p>\r\n', '<p>Finance and Accounting Staff</p>\r\n', '<p>Nhân Viên Tài Chính Kế Toán</p>\r\n', '<p>Finance and Accounting Staff</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:08:46', '2014-07-03 10:08:46'),
(11, 1, 1, 67, 1, 'Trưởng Phòng Kinh Doanh Quảng Cáo', 'Advertising Sales Manager', 'truong-phong-kinh-doanh-quang-cao-kt2INMjkUNF', 'advertising-sales-manager--kt2INMjkUNF', 'kt2INMjkUN', 'derrffff', '<p>Trưởng Phòng Kinh Doanh Quảng Cáo</p>\r\n', '<p>Advertising Sales Manager</p>\r\n', '<p>Trưởng Phòng Kinh Doanh Quảng Cáo</p>\r\n', '<p>Advertising Sales Manager</p>\r\n', '<p>Trưởng Phòng Kinh Doanh Quảng Cáo</p>\r\n', '<p>Advertising Sales Manager</p>\r\n', 0, 0, 0, 0, '1', 1, 1, '2014-07-03 10:10:15', '2014-07-03 10:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `wz_job_alert`
--

DROP TABLE IF EXISTS `wz_job_alert`;
CREATE TABLE IF NOT EXISTS `wz_job_alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `function_id` int(11) DEFAULT '0' COMMENT 'function_job',
  `industry_id` int(11) NOT NULL DEFAULT '0' COMMENT 'industry_job',
  `location_id` int(11) NOT NULL DEFAULT '0' COMMENT 'location',
  `level_id` int(11) NOT NULL DEFAULT '0' COMMENT 'level_job',
  `job_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `every` varchar(50) DEFAULT NULL,
  `salary_min` int(11) NOT NULL DEFAULT '0',
  `salary_max` bigint(15) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wz_job_alert`
--

INSERT INTO `wz_job_alert` (`id`, `uid`, `function_id`, `industry_id`, `location_id`, `level_id`, `job_title`, `slug`, `email`, `every`, `salary_min`, `salary_max`, `status`, `changed`, `created`) VALUES
(2, 11, 1, 1, 8, 1, 'bbbbbbbbbb', 'bbbbbbbbbb_de42019f', 'bhhhhh@yahoo.com', 'Everything', 1000, 15000, 1, '2014-07-08 17:42:11', '2014-07-08 17:09:46'),
(3, 11, 1, 1, 8, 1, 'tao là ma', 'tao-la-ma_da071a79', 'nhahuy1990@gmail.com', 'Everything', 300, 6000, 1, '2014-07-08 17:47:33', '2014-07-08 17:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `wz_level_job`
--

DROP TABLE IF EXISTS `wz_level_job`;
CREATE TABLE IF NOT EXISTS `wz_level_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) DEFAULT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_level_job`
--

INSERT INTO `wz_level_job` (`id`, `name_en`, `name_vi`, `slug_vi`, `slug_en`, `status`, `changed`, `created`) VALUES
(1, 'Nghiên cứu', 'Study', 'study', 'nghien-cuu', 1, '2014-06-24 11:52:59', '2014-06-24 11:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `wz_location`
--

DROP TABLE IF EXISTS `wz_location`;
CREATE TABLE IF NOT EXISTS `wz_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `slug` varchar(255) NOT NULL,
  `porder` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=782 ;

--
-- Dumping data for table `wz_location`
--

INSERT INTO `wz_location` (`id`, `name`, `slug`, `porder`, `status`, `changed`, `created`) VALUES
(4, 'Hà Nội', 'ha-noi', 1, 1, NULL, NULL),
(8, 'TP. Hồ Chí Minh', 'tp-ho-chi-minh', 1, 1, NULL, NULL),
(20, 'Lạng Sơn', 'lang-son', 0, 1, NULL, NULL),
(22, 'Sơn La', 'son-la', 0, 1, NULL, NULL),
(25, 'Lâm Đồng', 'lam-dong', 0, 1, NULL, NULL),
(26, 'Cao Bằng', 'cao-bang', 0, 1, NULL, NULL),
(27, 'Tuyên Quang', 'tuyen-quang', 0, 1, NULL, NULL),
(29, 'Yên Bái', 'yen-bai', 0, 1, NULL, NULL),
(30, 'Ninh Bình', 'ninh-binh', 0, 1, NULL, NULL),
(31, 'Hải Phòng', 'hai-phong', 0, 1, NULL, NULL),
(33, 'Quảng Ninh', 'quang-ninh', 0, 1, NULL, NULL),
(36, 'Thái Bình', 'thai-binh', 0, 1, NULL, NULL),
(37, 'Thanh Hóa', 'thanh-hoa', 0, 1, NULL, NULL),
(38, 'Nghệ An', 'nghe-an', 0, 1, NULL, NULL),
(39, 'Hà Tĩnh', 'ha-tinh', 0, 1, NULL, NULL),
(43, 'Hà Tây', 'ha-tay', 0, 1, NULL, NULL),
(52, 'Quảng Bình', 'quang-binh', 0, 1, NULL, NULL),
(53, 'Quảng Trị', 'quang-tri', 0, 1, NULL, NULL),
(54, 'Thừa Thiên Huế', 'thua-thien-hue', 0, 1, NULL, NULL),
(55, 'Quảng Ngãi', 'quang-ngai', 0, 1, NULL, NULL),
(56, 'Bình Dương', 'binh-duong', 0, 1, NULL, NULL),
(57, 'Phú Yên', 'phu-yen', 0, 1, NULL, NULL),
(58, 'Khánh Hòa', 'khanh-hoa', 0, 1, NULL, NULL),
(59, 'Gia Lai', 'gia-lai', 0, 1, NULL, NULL),
(60, 'Kon Tum', 'kon-tum', 0, 1, NULL, NULL),
(61, 'Đồng Nai', 'dong-nai', 0, 1, NULL, NULL),
(62, 'Bình Thuận', 'binh-thuan', 0, 1, NULL, NULL),
(63, 'Lào Cai', 'lao-cai', 0, 1, NULL, NULL),
(64, 'Bà Rịa Vũng Tàu', 'ba-ria-vung-tau', 0, 1, NULL, NULL),
(66, 'Tây Ninh', 'tay-ninh', 0, 1, NULL, NULL),
(67, 'Đồng Tháp', 'dong-thap', 0, 1, NULL, NULL),
(68, 'Ninh Thuận', 'ninh-thuan', 0, 1, NULL, NULL),
(70, 'Vĩnh Long', 'vinh-long', 0, 1, NULL, NULL),
(72, 'Long An', 'long-an', 0, 1, NULL, NULL),
(73, 'Tiền Giang', 'tien-giang', 0, 1, NULL, NULL),
(74, 'Trà Vinh', 'tra-vinh', 0, 1, NULL, NULL),
(75, 'Bến Tre', 'ben-tre', 0, 1, NULL, NULL),
(76, 'An Giang', 'an-giang', 0, 1, NULL, NULL),
(77, 'Kiên Giang', 'kien-giang', 0, 1, NULL, NULL),
(79, 'Sóc Trăng', 'soc-trang', 0, 1, NULL, NULL),
(210, 'Phú Thọ', 'phu-tho', 0, 1, NULL, NULL),
(211, 'Vĩnh Phúc', 'vinh-phuc', 0, 1, NULL, NULL),
(218, 'Hòa Bình', 'hoa-binh', 0, 1, NULL, NULL),
(219, 'Hà Giang', 'ha-giang', 0, 1, NULL, NULL),
(230, 'Điện Biên', 'dien-bien', 0, 1, NULL, NULL),
(231, 'Lai Châu', 'lai-chau', 0, 1, NULL, NULL),
(240, 'Bạc Liêu', 'bac-lieu', 0, 1, NULL, NULL),
(241, 'Bắc Ninh', 'bac-ninh', 0, 1, NULL, NULL),
(280, 'Thái Nguyên', 'thai-nguyen', 0, 1, NULL, NULL),
(281, 'Bắc Giang', 'bac-giang', 0, 1, NULL, NULL),
(282, 'Thanh Hóa', 'thanh-hoa', 0, 1, NULL, NULL),
(320, 'Hải Dương', 'hai-duong', 0, 1, NULL, NULL),
(321, 'Hưng Yên', 'hung-yen', 0, 1, NULL, NULL),
(350, 'Nam Định', 'nam-dinh', 0, 1, NULL, NULL),
(351, 'Hà Nam', 'ha-nam', 0, 1, NULL, NULL),
(500, 'Đăk Lăk', 'dak-lak', 0, 1, NULL, NULL),
(501, 'Đăk Nông', 'dak-nong', 0, 1, NULL, NULL),
(510, 'Quảng Nam', 'quang-nam', 0, 1, NULL, NULL),
(511, 'Đà Nẵng', 'da-nang', 0, 1, NULL, NULL),
(650, 'Bình Định', 'binh-dinh', 0, 1, NULL, NULL),
(651, 'Bình Phước', 'binh-phuoc', 0, 1, NULL, NULL),
(710, 'Cần Thơ', 'can-tho', 0, 1, NULL, NULL),
(711, 'Hậu Giang', 'hau-giang', 0, 1, NULL, NULL),
(780, 'Cà Mau', 'ca-mau', 0, 1, NULL, NULL),
(781, 'Bắc Cạn', 'bac-can', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wz_market_entry`
--

DROP TABLE IF EXISTS `wz_market_entry`;
CREATE TABLE IF NOT EXISTS `wz_market_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL COMMENT 'information_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_market_entry`
--

INSERT INTO `wz_market_entry` (`id`, `parent`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `description_vi`, `description_en`, `content_vi`, `content_en`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 1, '3F58etzFss', 'aaaaaaaaaa', 'bbbbbbb', 'aaaaaaaaaa-3F58etzFssB', 'bbbbbbb--3F58etzFssB', '2014/06/20/d76b2a20673137b09d033a546ede0ed0_1403261669.jpg', 'afafasfafafas', 'asfafasfasfasfa', '<p>asfafafsafasfsafas</p>\n', '<p>afAFafaFafA</p>\n', 1, 1, '2014-06-20 17:54:45', '2014-06-20 17:54:45'),
(2, 2, '4Zh9o5BfEa', 'sdafasdfdsa', 'sadfsadfsda', 'sdafasdfdsa-4Zh9o5BfEax', 'sadfsadfsda--4Zh9o5BfEax', '2014/06/20/18638e9448afad2684981d347aa69e73_1403261723.jpg', 'sadfdsafd', 'fdsafsdafsdafsda', '<p>safsdafdsafsda</p>\n', '<p>sdafsdafsdafsadfsdafsd</p>\n', 1, 1, '2014-06-20 17:55:33', '2014-06-20 17:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `wz_news`
--

DROP TABLE IF EXISTS `wz_news`;
CREATE TABLE IF NOT EXISTS `wz_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL COMMENT 'news_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wz_news`
--


-- --------------------------------------------------------

--
-- Table structure for table `wz_news_category`
--

DROP TABLE IF EXISTS `wz_news_category`;
CREATE TABLE IF NOT EXISTS `wz_news_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(5) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_news_category`
--

INSERT INTO `wz_news_category` (`id`, `parent`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `status`, `changed`, `created`) VALUES
(2, 1, 'TIN TỨC', 'IN THE NEWS', 'tin-tuc', 'in-the-news', 1, '2014-06-18 16:20:34', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `wz_new_arrivals`
--

DROP TABLE IF EXISTS `wz_new_arrivals`;
CREATE TABLE IF NOT EXISTS `wz_new_arrivals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL COMMENT 'new_arrivals_category',
  `ids` varchar(10) NOT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `content_vi` text,
  `content_en` text,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `tags` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wz_new_arrivals`
--

INSERT INTO `wz_new_arrivals` (`id`, `category_id`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `description_vi`, `description_en`, `content_vi`, `content_en`, `is_home`, `tags`, `status`, `changed`, `created`) VALUES
(1, 1, '', 'aaaaaaaaaaaaa', 'bbbbbbbb', 'aaaaaaaaaaaaa', 'bbbbbbbb', '2014/07/01/c8e383b814dcf303790b7c9feadf9fca_1404203414.jpg', 'Talentnet – formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam’s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market', 'Talentnet – formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam’s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '<p>bbbbbbbbbbbbbbbbbb</p>\r\n', 0, '', 1, '2014-07-01 15:31:00', '2014-07-01 15:31:00'),
(2, 1, '', 'ccccccccccc', 'CCCCCCCCCCCCCC', 'ccccccccccc', 'cccccccccccccc', '2014/07/01/34b2bd19f44410979a9d6044af56bacd_1404203471.jpg', 'Talentnet – formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam’s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market', 'Talentnet – formerly Human Resource Services of PricewaterhouseCoopers Vietnam, which operated throughout Indochina. This business has been a market leader in its sector for many years and PricewaterhouseCoopers was proud of the position it had achieved and its ability to provide outstanding services to clients. Conflicts of interest meant that this executive recruitment service was not core to PwC Vietnam’s strategy going forward. The Human Resource Services team enthusiastically grasped the challenge of taking on the ownership and development of this service in the Vietnamese market', '<p>ccccccccccccccccccccc</p>\r\n', '<p>CCCCCCCCCCCCCCCCCCCC</p>\r\n', 0, '', 1, '2014-07-01 15:31:25', '2014-07-01 15:31:25'),
(3, 2, '1S8m5BQHTs', 'aaaaaaaaaaaa', 'AAAAAAAAAA', 'aaaaaaaaaaaa-1S8m5BQHTsf', 'aaaaaaaaaa--1S8m5BQHTsf', '2014/07/01/b2596391b0b7a2ac9af810a87dcd0d80_1404206697.jpg', 'aaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAA', '<p>aaaaaaaaaaaaaaaaaaaa</p>\r\n', '<p>AAAAAAAAAAAAAAA</p>\r\n', 0, '', 1, '2014-07-01 16:25:18', '2014-07-01 16:25:18'),
(4, 2, 'ARfLROrHSS', 'bbbbbbbbb', 'BBBBBBBBB', 'bbbbbbbbb-ARfLROrHSSV', 'bbbbbbbbb--ARfLROrHSSV', '2014/07/01/ae6ef23b5aa2f3749217c97170784da7_1404206728.jpg', 'bbbbbbbbbbbbbbbbbbbbbb', 'BBBBBBBBBBBBBBBBBBBBBB', '<p>bbbbbbbbbbbbbbbbbbbbbbb</p>\r\n', '<p>BBBBBBBBBBBBBBBBBB</p>\r\n', 0, '', 1, '2014-07-01 16:25:46', '2014-07-01 16:25:46'),
(5, 2, 'mn5hNWOfCv', 'cccccccccccccc', 'CCCCCCCCCCCC', 'cccccccccccccc-mn5hNWOfCvo', 'cccccccccccc--mn5hNWOfCvo', '2014/07/01/72ef987eee7fe9278b31d3157d9d4cb2_1404206757.jpg', 'cccccccccccccccccccccccccccccccccc', 'CCCCCCCCCCCCCCCCCCCC', '<p>ccccccccccccccccccccccccccccc</p>\r\n', '<p>CCCCCCCCCCCCCCCCCCCCCCCCCCC</p>\r\n', 0, '', 1, '2014-07-01 16:26:13', '2014-07-01 16:26:13'),
(6, 2, 'JqtKACAclT', 'dddddddddddddd', 'DDDDDDDDDDDD', 'dddddddddddddd-JqtKACAclTN', 'dddddddddddd--JqtKACAclTN', '2014/07/01/f2228a2c421a75c0c7dea2c68e2e0c84_1404206783.jpg', 'ddddddddddddddddddddddd', 'DDDDDDDDDDDDDDDDDDDDD', '<p>ddddddddddddddddddddd</p>\r\n', '<p>DDDDDDDDDDDDDDDDDDDDDD</p>\r\n', 0, '', 1, '2014-07-01 16:26:43', '2014-07-01 16:26:43'),
(7, 2, '8LTeRvqdaR', 'eeeeeeeeeeeee', 'EEEEEEEEEEEEE', 'eeeeeeeeeeeee-8LTeRvqdaR3', 'eeeeeeeeeeeee--8LTeRvqdaR3', '2014/07/01/9e75c058b33e5293ef274565e0841349_1404206817.jpg', 'eeeeeeeeeeeeeeeeeeeeeeeeee', 'EEEEEEEEEEEEEEEEEEEEEE', '<p>eeeeeeeeeeeeeeeeeeeeeeeeeee</p>\r\n', '<p>EEEEEEEEEEEEEEEEEEE</p>\r\n', 0, '', 1, '2014-07-01 16:27:12', '2014-07-01 16:27:12'),
(8, 2, 'Mnwfk1jW1d', 'Đến hẹn lại lên, sắp tới thi đại học nữa rồi và mình luôn có một thắc mắc đó là không hiểu sao ngày xưa mình thi đậu', 'Đến hẹn lại lên, sắp tới thi đại học nữa rồi và mình luôn có một thắc mắc đó là không hiểu sao ngày xưa mình thi đậu', 'den-hen-lai-len-sap-toi-thi-dai-hoc-nua-roi-va-minh-luon-co-mot-thac-mac-do-la-khong-hieu-sao-ngay-xua-minh-thi-dau-Mnwfk1jW1d', 'den-hen-lai-len-sap-toi-thi-dai-hoc-nua-roi-va-minh-luon-co-mot-thac-mac-do-la-khong-hieu-sao-ngay-xua-minh-thi-dau--Mnwfk1jW1d', '2014/07/01/dfb0cf463424d8ec69fa855d4b359297_1404206841.jpg', 'ffffffffffffffffffffffffffff', 'FFFFFFFFFFFFFFFFFFFFFF', '<p>fffffffffffffffffffffffffffff</p>\r\n', '<p>FFFFFFFFFFFFFFFFFF</p>\r\n', 0, '3', 1, '2014-07-02 09:16:43', '2014-07-01 16:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `wz_new_arrivals_category`
--

DROP TABLE IF EXISTS `wz_new_arrivals_category`;
CREATE TABLE IF NOT EXISTS `wz_new_arrivals_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wz_new_arrivals_category`
--

INSERT INTO `wz_new_arrivals_category` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `status`, `changed`, `created`) VALUES
(1, 'Ảnh chụp / Trong nháy mắt', 'Snapshot/ At a glance', 'anh-chup-trong-nhay-mat', 'snapshot-at-a-glance', '2014/06/30/6aa76466895bf1ef24b79a1d4b59c041_1404121050.jpg', 1, '2014-06-30 16:38:00', 2014),
(2, 'Hiểu Biết', 'Insights', 'hieu-biet', 'insights', '2014/06/30/66c84bbabdf4ab4d5a69841ae254e667_1404121089.jpg', 1, '2014-06-30 16:38:22', 2014),
(3, 'FAQ', 'Câu hỏi', 'faq', 'cau-hoi', NULL, 1, '2014-07-01 16:17:15', 2014),
(4, 'Nghiên cứu trường hợp / Khách hàng', 'Case study/ Testimonials', 'nghien-cuu-truong-hop-khach-hang', 'case-study-testimonials', NULL, 1, '2014-07-01 16:17:36', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `wz_office_location`
--

DROP TABLE IF EXISTS `wz_office_location`;
CREATE TABLE IF NOT EXISTS `wz_office_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_vi` varchar(255) DEFAULT NULL,
  `category_en` varchar(255) DEFAULT NULL,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `position_vi` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_office_location`
--

INSERT INTO `wz_office_location` (`id`, `category_vi`, `category_en`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `position_vi`, `position_en`, `phone`, `email`, `status`, `changed`, `created`) VALUES
(1, 'aaaaaaaaa', 'sdfdsfd', 'dsfdsfds', 'sfdsfds', 'dsfdsfds', 'sfdsfds', 'dsfdsfds', 'fdsfds', 1224086541, 'sdfsdfds@yahoo.com', 1, '2014-06-20 10:18:22', '2014-06-20 10:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `wz_partners`
--

DROP TABLE IF EXISTS `wz_partners`;
CREATE TABLE IF NOT EXISTS `wz_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wz_partners`
--

INSERT INTO `wz_partners` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `is_home`, `status`, `changed`, `created`) VALUES
(1, 'Sony', 'Sony', 'sony', 'sony', '2014/06/19/495b6302cd93dbaff6018061b3e6108f_1403175101.jpg', 1, 1, '2014-07-02 16:47:29', '2014-06-19 17:51:46'),
(2, 'Panasonic', 'Panasonic', 'panasonic', 'panasonic', '2014/07/02/e5c11bf1ebaac2b02191e9a6d0b923bd_1404294420.jpg', 1, 1, '2014-07-02 16:47:06', '2014-07-02 16:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `wz_personal`
--

DROP TABLE IF EXISTS `wz_personal`;
CREATE TABLE IF NOT EXISTS `wz_personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `birthday` date DEFAULT NULL,
  `marital` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1|Độc thân 2|Đã kết hôn',
  `address` text,
  `phone` varchar(12) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `wz_personal`
--

INSERT INTO `wz_personal` (`id`, `uid`, `country_id`, `city_id`, `fullname`, `gender`, `birthday`, `marital`, `address`, `phone`, `avatar`, `status`, `flag`, `changed`, `created`) VALUES
(8, 11, 1, 1, 'Nguyen hoang anh huy', 1, '1999-11-30', 1, 'sdsgsdgd', '01224086541', '2014/07/08/80193eb687bf184996666f4c1611e60f_1404792207.jpg', 1, 1, '2014-07-08 11:03:27', '2014-07-08 11:03:27'),
(9, 11, 1, 1, 'wergregerw', 1, '1999-11-30', 1, 'ergergr', '01224086541', '2014/07/09/5550f6e228dc7a724b48af1875571166_1404842369.jpg', 1, 1, '2014-07-09 00:59:29', '2014-07-09 00:59:29'),
(10, 11, 1, 1, 'rggwegewgew', 1, '1999-11-30', 1, 'wegwegwe', '01224086541', '2014/07/09/b8ab2c8140b3d6b78b71f1d8fed938f7_1404842450.jpg', 1, 1, '2014-07-09 01:00:50', '2014-07-09 01:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `wz_product`
--

DROP TABLE IF EXISTS `wz_product`;
CREATE TABLE IF NOT EXISTS `wz_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0' COMMENT 'product_category',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `gallery` int(11) DEFAULT '0',
  `description` text,
  `tags` int(11) DEFAULT '0',
  `maps` text,
  `price` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `youtube` varchar(32) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `recursive` int(11) DEFAULT NULL,
  `select` varchar(32) DEFAULT NULL,
  `checkbox` varchar(32) DEFAULT NULL,
  `radio` varchar(32) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `wz_product`
--

INSERT INTO `wz_product` (`id`, `pid`, `name`, `slug`, `image`, `gallery`, `description`, `tags`, `maps`, `price`, `date`, `youtube`, `province`, `district`, `recursive`, `select`, `checkbox`, `radio`, `status`, `changed`, `created`) VALUES
(6, 0, 'Test', NULL, NULL, 0, 'Mô tả Test', 4, '{"lat":"10.7688283","lng":"106.68344639999998","address":"232 Cao Th\\u1eafng, ph\\u01b0\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam"}', NULL, '2014-04-11 17:08:35', 'h0oabAkzQR8', 781, 359, 5, 'uk', '["7"]', '7', 1, '2014-04-15 11:44:45', '2014-04-04 17:09:13'),
(10, 2, 'Taa', NULL, '2014/04/24/32656da956de970b7fc6071684921dc9_1398315774.jpg', 0, 'aaaaaaaaaaaa', 1, NULL, 111111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `wz_province`
--

DROP TABLE IF EXISTS `wz_province`;
CREATE TABLE IF NOT EXISTS `wz_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `slug` varchar(255) NOT NULL,
  `porder` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=782 ;

--
-- Dumping data for table `wz_province`
--

INSERT INTO `wz_province` (`id`, `name`, `slug`, `porder`, `status`, `changed`, `created`) VALUES
(4, 'Hà Nội', 'ha-noi', 1, 1, NULL, NULL),
(8, 'TP. Hồ Chí Minh', 'tp-ho-chi-minh', 1, 1, NULL, NULL),
(20, 'Lạng Sơn', 'lang-son', 0, 1, NULL, NULL),
(22, 'Sơn La', 'son-la', 0, 1, NULL, NULL),
(25, 'Lâm Đồng', 'lam-dong', 0, 1, NULL, NULL),
(26, 'Cao Bằng', 'cao-bang', 0, 1, NULL, NULL),
(27, 'Tuyên Quang', 'tuyen-quang', 0, 1, NULL, NULL),
(29, 'Yên Bái', 'yen-bai', 0, 1, NULL, NULL),
(30, 'Ninh Bình', 'ninh-binh', 0, 1, NULL, NULL),
(31, 'Hải Phòng', 'hai-phong', 0, 1, NULL, NULL),
(33, 'Quảng Ninh', 'quang-ninh', 0, 1, NULL, NULL),
(36, 'Thái Bình', 'thai-binh', 0, 1, NULL, NULL),
(37, 'Thanh Hóa', 'thanh-hoa', 0, 1, NULL, NULL),
(38, 'Nghệ An', 'nghe-an', 0, 1, NULL, NULL),
(39, 'Hà Tĩnh', 'ha-tinh', 0, 1, NULL, NULL),
(43, 'Hà Tây', 'ha-tay', 0, 1, NULL, NULL),
(52, 'Quảng Bình', 'quang-binh', 0, 1, NULL, NULL),
(53, 'Quảng Trị', 'quang-tri', 0, 1, NULL, NULL),
(54, 'Thừa Thiên Huế', 'thua-thien-hue', 0, 1, NULL, NULL),
(55, 'Quảng Ngãi', 'quang-ngai', 0, 1, NULL, NULL),
(56, 'Bình Dương', 'binh-duong', 0, 1, NULL, NULL),
(57, 'Phú Yên', 'phu-yen', 0, 1, NULL, NULL),
(58, 'Khánh Hòa', 'khanh-hoa', 0, 1, NULL, NULL),
(59, 'Gia Lai', 'gia-lai', 0, 1, NULL, NULL),
(60, 'Kon Tum', 'kon-tum', 0, 1, NULL, NULL),
(61, 'Đồng Nai', 'dong-nai', 0, 1, NULL, NULL),
(62, 'Bình Thuận', 'binh-thuan', 0, 1, NULL, NULL),
(63, 'Lào Cai', 'lao-cai', 0, 1, NULL, NULL),
(64, 'Bà Rịa Vũng Tàu', 'ba-ria-vung-tau', 0, 1, NULL, NULL),
(66, 'Tây Ninh', 'tay-ninh', 0, 1, NULL, NULL),
(67, 'Đồng Tháp', 'dong-thap', 0, 1, NULL, NULL),
(68, 'Ninh Thuận', 'ninh-thuan', 0, 1, NULL, NULL),
(70, 'Vĩnh Long', 'vinh-long', 0, 1, NULL, NULL),
(72, 'Long An', 'long-an', 0, 1, NULL, NULL),
(73, 'Tiền Giang', 'tien-giang', 0, 1, NULL, NULL),
(74, 'Trà Vinh', 'tra-vinh', 0, 1, NULL, NULL),
(75, 'Bến Tre', 'ben-tre', 0, 1, NULL, NULL),
(76, 'An Giang', 'an-giang', 0, 1, NULL, NULL),
(77, 'Kiên Giang', 'kien-giang', 0, 1, NULL, NULL),
(79, 'Sóc Trăng', 'soc-trang', 0, 1, NULL, NULL),
(210, 'Phú Thọ', 'phu-tho', 0, 1, NULL, NULL),
(211, 'Vĩnh Phúc', 'vinh-phuc', 0, 1, NULL, NULL),
(218, 'Hòa Bình', 'hoa-binh', 0, 1, NULL, NULL),
(219, 'Hà Giang', 'ha-giang', 0, 1, NULL, NULL),
(230, 'Điện Biên', 'dien-bien', 0, 1, NULL, NULL),
(231, 'Lai Châu', 'lai-chau', 0, 1, NULL, NULL),
(240, 'Bạc Liêu', 'bac-lieu', 0, 1, NULL, NULL),
(241, 'Bắc Ninh', 'bac-ninh', 0, 1, NULL, NULL),
(280, 'Thái Nguyên', 'thai-nguyen', 0, 1, NULL, NULL),
(281, 'Bắc Giang', 'bac-giang', 0, 1, NULL, NULL),
(282, 'Thanh Hóa', 'thanh-hoa', 0, 1, NULL, NULL),
(320, 'Hải Dương', 'hai-duong', 0, 1, NULL, NULL),
(321, 'Hưng Yên', 'hung-yen', 0, 1, NULL, NULL),
(350, 'Nam Định', 'nam-dinh', 0, 1, NULL, NULL),
(351, 'Hà Nam', 'ha-nam', 0, 1, NULL, NULL),
(500, 'Đăk Lăk', 'dak-lak', 0, 1, NULL, NULL),
(501, 'Đăk Nông', 'dak-nong', 0, 1, NULL, NULL),
(510, 'Quảng Nam', 'quang-nam', 0, 1, NULL, NULL),
(511, 'Đà Nẵng', 'da-nang', 0, 1, NULL, NULL),
(650, 'Bình Định', 'binh-dinh', 0, 1, NULL, NULL),
(651, 'Bình Phước', 'binh-phuoc', 0, 1, NULL, NULL),
(710, 'Cần Thơ', 'can-tho', 0, 1, NULL, NULL),
(711, 'Hậu Giang', 'hau-giang', 0, 1, NULL, NULL),
(780, 'Cà Mau', 'ca-mau', 0, 1, NULL, NULL),
(781, 'Bắc Cạn', 'bac-can', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wz_reference`
--

DROP TABLE IF EXISTS `wz_reference`;
CREATE TABLE IF NOT EXISTS `wz_reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `wz_reference`
--

INSERT INTO `wz_reference` (`id`, `uid`, `name`, `company`, `title`, `relationship`, `email`, `phone`, `status`, `flag`, `changed`, `created`) VALUES
(17, 11, 'agsags', 'gsagasgsa', 'gsagsagsa', 'gsagsgsag', 'aaaaaaaaa@yahoo.com', '01224086541', 1, 1, '2014-07-08 11:04:39', '2014-07-08 11:04:39'),
(18, 11, 'ewrgewr', 'gerw', 'gewrger', 'gewgerwg', 'errrrrrrrrrr@yahoo.com', '01224086541', 1, 1, '2014-07-09 00:59:58', '2014-07-09 00:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `wz_salary_job`
--

DROP TABLE IF EXISTS `wz_salary_job`;
CREATE TABLE IF NOT EXISTS `wz_salary_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salary` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wz_salary_job`
--

INSERT INTO `wz_salary_job` (`id`, `salary`, `slug`, `status`, `changed`, `created`) VALUES
(1, NULL, NULL, 1, '2014-06-24 11:44:33', '2014-06-24 11:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `wz_save_job`
--

DROP TABLE IF EXISTS `wz_save_job`;
CREATE TABLE IF NOT EXISTS `wz_save_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `job_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wz_save_job`
--

INSERT INTO `wz_save_job` (`id`, `uid`, `job_id`, `type`, `status`, `changed`, `created`) VALUES
(2, 11, 11, 'save', 1, '2014-07-07 00:29:15', '2014-07-07 00:29:15'),
(4, 11, 9, 'save', 1, '2014-07-07 14:33:20', '2014-07-07 14:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `wz_sessions`
--

DROP TABLE IF EXISTS `wz_sessions`;
CREATE TABLE IF NOT EXISTS `wz_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wz_sessions`
--

INSERT INTO `wz_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f73c47210c63becfe0ec1204343393e9', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1404818143, 'a:8:{s:9:"user_data";s:0:"";s:7:"captcha";s:2:"GK";s:3:"uid";s:2:"11";s:5:"fb_id";s:1:"0";s:8:"fullname";s:17:"Nguyen Anh  Hùng";s:5:"email";s:17:"anhhung@yahoo.com";s:15:"fb_access_token";N;s:5:"token";s:64:"eba2a1d4a1e83f76a6d228a6bb9cdc3f2b0adb0759600100b5ae6ae0e1cd7df7";}'),
('f4db4cdefd550572aeaf116340a9de40', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1404842959, 'a:7:{s:7:"captcha";s:2:"WW";s:3:"uid";s:2:"11";s:5:"fb_id";s:1:"0";s:8:"fullname";s:17:"Nguyen Anh  Hùng";s:5:"email";s:17:"anhhung@yahoo.com";s:15:"fb_access_token";N;s:5:"token";s:64:"eba2a1d4a1e83f76a6d228a6bb9cdc3f2b0adb0759600100b5ae6ae0e1cd7df7";}'),
('c934a6d356205effe376907c93b05415', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 1404870949, '');

-- --------------------------------------------------------

--
-- Table structure for table `wz_skill_language`
--

DROP TABLE IF EXISTS `wz_skill_language`;
CREATE TABLE IF NOT EXISTS `wz_skill_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `category` tinyint(1) NOT NULL COMMENT '1|skill 2|languages',
  `level_id` int(11) NOT NULL DEFAULT '0',
  `specify_name` varchar(255) DEFAULT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wz_skill_language`
--

INSERT INTO `wz_skill_language` (`id`, `uid`, `category`, `level_id`, `specify_name`, `flag`, `status`, `changed`, `created`) VALUES
(4, 11, 1, 1, 'asgsgsagsa', 1, 1, '2014-07-08 11:04:16', '2014-07-08 11:04:16'),
(5, 11, 1, 1, 'eqrgqegeq', 1, 1, '2014-07-09 01:00:04', '2014-07-09 01:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `wz_tags`
--

DROP TABLE IF EXISTS `wz_tags`;
CREATE TABLE IF NOT EXISTS `wz_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `wz_tags`
--

INSERT INTO `wz_tags` (`id`, `name`, `slug`, `status`, `changed`, `created`) VALUES
(1, 'Thể thao', 'the-thao', 1, '2013-10-11 15:17:23', '2013-10-11 15:17:25'),
(2, 'Tin tức', 'tin-tuc', 1, '2013-10-11 15:17:23', '2013-10-11 15:17:23'),
(3, 'Kha Yen Nhi', 'kha-yen-nhi', 1, '2013-10-17 15:47:39', '2013-10-17 15:47:39'),
(4, 'TSL', 'tsl', 1, '2013-10-17 15:47:39', '2013-10-17 15:47:39'),
(5, 'Soc Trang', 'soc-trang', 1, '2013-10-17 15:52:35', '2013-10-17 15:52:35'),
(6, 'Tran', 'tran', 1, '2013-10-17 16:02:16', '2013-10-17 16:02:16'),
(7, 'Can Thơ', 'can-tho', 1, '2013-10-17 16:34:20', '2013-10-17 16:34:20'),
(8, 'Lập Vĩ', 'lap-vi', 1, '2013-10-18 23:16:47', '2013-10-18 23:16:47'),
(9, 'Bạc Liêu', 'bac-lieu', 1, '2013-10-19 10:23:02', '2013-10-19 10:23:02'),
(10, 'Wizard', 'wizard', 1, '2013-10-19 10:44:27', '2013-10-19 10:44:27'),
(11, 'Array', 'array', 1, '2014-03-20 11:35:09', '2014-03-20 11:35:09'),
(12, 'aaaaaa', 'aaaaaa', 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12'),
(13, 'Giii', 'giii', 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45'),
(14, 'Sandal', 'sandal', 1, '2014-04-15 17:32:52', '2014-04-15 17:32:52'),
(15, 'Design', 'design', 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(16, 'Bussiness', 'bussiness', 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(17, 'Leader', 'leader', 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(18, 'Chief Accountant', 'chief-accountant', 1, '2014-07-03 09:56:27', '2014-07-03 09:56:27'),
(19, 'Sales Staff', 'sales-staff', 1, '2014-07-03 09:59:04', '2014-07-03 09:59:04'),
(20, 'Sales', 'sales', 1, '2014-07-03 10:02:56', '2014-07-03 10:02:56'),
(21, 'Manager', 'manager', 1, '2014-07-03 10:04:16', '2014-07-03 10:04:16'),
(22, 'Kế Toán', 'ke-toan', 1, '2014-07-03 10:08:46', '2014-07-03 10:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `wz_tags_join`
--

DROP TABLE IF EXISTS `wz_tags_join`;
CREATE TABLE IF NOT EXISTS `wz_tags_join` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL COMMENT 'Module ID',
  `nid` int(11) DEFAULT NULL COMMENT 'Node ID',
  `tid` int(11) DEFAULT NULL COMMENT 'Tags ID',
  `status` tinyint(1) DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `wz_tags_join`
--

INSERT INTO `wz_tags_join` (`id`, `mid`, `nid`, `tid`, `status`, `changed`, `created`) VALUES
(25, 2, 17, 2, 1, '2014-04-05 09:29:35', '2014-04-05 09:29:35'),
(32, 11, 3, 1, 1, '2014-04-08 10:23:03', '2014-04-08 10:23:03'),
(30, 10, 5, 2, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28'),
(29, 10, 4, 1, 1, '2014-04-05 10:31:18', '2014-04-05 10:31:18'),
(23, 9, 6, 2, 1, '2014-04-04 17:09:13', '2014-04-04 17:09:13'),
(44, 2, 21, 2, 1, '2014-04-17 15:40:31', '2014-04-17 15:40:31'),
(34, 11, 4, 1, 1, '2014-04-15 11:16:31', '2014-04-15 11:16:31'),
(35, 11, 5, 3, 1, '2014-04-15 11:20:39', '2014-04-15 11:20:39'),
(36, 9, 6, 1, 1, '2014-04-15 11:43:58', '2014-04-15 11:43:58'),
(37, 9, 6, 12, 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12'),
(38, 9, 6, 13, 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45'),
(47, 9, 10, 2, 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57'),
(43, 2, 20, 2, 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26'),
(45, 2, 22, 1, 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02'),
(46, 2, 23, 1, 1, '2014-04-18 14:26:06', '2014-04-18 14:26:06'),
(48, 361, 1, 15, 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(49, 361, 1, 16, 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(50, 361, 1, 17, 1, '2014-06-24 11:55:52', '2014-06-24 11:55:52'),
(51, 361, 2, 15, 1, '2014-06-30 15:30:50', '2014-06-30 15:30:50'),
(52, 364, 8, 15, 1, '2014-07-02 09:16:43', '2014-07-02 09:16:43'),
(53, 364, 8, 10, 1, '2014-07-02 09:16:43', '2014-07-02 09:16:43'),
(54, 364, 8, 16, 1, '2014-07-02 09:16:43', '2014-07-02 09:16:43'),
(55, 361, 3, 18, 1, '2014-07-03 09:56:27', '2014-07-03 09:56:27'),
(56, 361, 4, 10, 1, '2014-07-03 09:58:05', '2014-07-03 09:58:05'),
(57, 361, 5, 19, 1, '2014-07-03 09:59:04', '2014-07-03 09:59:04'),
(58, 361, 6, 20, 1, '2014-07-03 10:02:56', '2014-07-03 10:02:56'),
(59, 361, 7, 21, 1, '2014-07-03 10:04:16', '2014-07-03 10:04:16'),
(60, 361, 8, 20, 1, '2014-07-03 10:06:29', '2014-07-03 10:06:29'),
(61, 361, 9, 20, 1, '2014-07-03 10:07:31', '2014-07-03 10:07:31'),
(62, 361, 10, 22, 1, '2014-07-03 10:08:46', '2014-07-03 10:08:46'),
(63, 361, 11, 17, 1, '2014-07-03 10:10:15', '2014-07-03 10:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `wz_user`
--

DROP TABLE IF EXISTS `wz_user`;
CREATE TABLE IF NOT EXISTS `wz_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(64) DEFAULT '0',
  `type` varchar(32) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `firstname` varchar(64) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `gender` varchar(16) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `fb_access_token` text,
  `token` varchar(64) DEFAULT NULL,
  `randomkey` varchar(64) DEFAULT NULL,
  `history_ip` text,
  `status` tinyint(1) DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wz_user`
--

INSERT INTO `wz_user` (`id`, `fb_id`, `type`, `fullname`, `firstname`, `middlename`, `lastname`, `alias`, `username`, `email`, `password`, `gender`, `avatar`, `fb_access_token`, `token`, `randomkey`, `history_ip`, `status`, `changed`, `created`) VALUES
(1, '100008090042021', 'facebook', NULL, 'Lập Trần Sáng', NULL, NULL, NULL, NULL, NULL, NULL, 'male', '2014/04/92569eb28ff6e92b57286a08ea8053c7.gif', 'CAAHTGv0Wd44BAKKal5VH4MvdS301ebIE5FkgIv9OIP7fFCtPpuZAmAz8fDEOiiQdNtkVkP305334KwZCeBZBp3iD6UvSDPZBUIrIS8ro33gOpJZBTmj25W4F2GLPmaJCaMDc5bA0HBx418hKX1Km0v7CP5HRmCZCjGSsbho69VwDr6idtZAtS0JiRZBRXp9pSEYZD', '39fe37519a108b45fc51a521420adfe037f7c736213ddc6756625c90f63df662', 'c6fff9460ef1aa97d8e90e23fb81aadd50eec205cd9e8692c7c692cbd9ff16e3', '{"115.79.56.189":14}', 1, '2014-04-04 10:26:59', '2014-04-03 10:40:16'),
(3, '0', 'google', NULL, 'Trần Sáng Lập', NULL, NULL, NULL, NULL, 'lap.transang@gmail.com', NULL, 'male', '', NULL, NULL, NULL, '{"115.79.56.189":2}', 1, '2014-04-03 10:43:08', '2014-04-03 10:42:38'),
(5, '0', 'yahoo', NULL, '. TSL', NULL, NULL, NULL, NULL, 'sanglap_st@yahoo.com', NULL, 'male', '', NULL, NULL, NULL, '{"115.79.56.189":1}', 1, '2014-04-03 17:19:19', '2014-04-03 17:19:19'),
(6, '0', 'direct', NULL, 'Tran', NULL, NULL, NULL, 'lap.tran', 'lap.tran@wizardww', NULL, 'male', NULL, NULL, NULL, NULL, NULL, 1, '2014-04-05 10:15:57', '2014-04-05 10:15:57'),
(7, '0', 'direct', NULL, 'Tran', NULL, NULL, NULL, 'lap.tran', 'lap.tran@climaxi.com', NULL, 'male', NULL, NULL, NULL, NULL, NULL, 1, '2014-04-05 10:15:57', '2014-04-05 10:15:57'),
(8, '520144844781378', 'google', 'Huy Nguyen', NULL, NULL, NULL, NULL, NULL, 'nhahuy1990@gmail.com', NULL, 'male', '2014/06/31ef6d56e28dbe0fdaf1f41726abada0.jpg', 'CAALljd49tVYBACFHbxdW49wjEeChuVU7WCZC7bW06fuwDxfZBYHh5vW6hXYeIZCGJWMTlhdZCGy88gxrJLXghMinqji8pT9l41Mjf7p0OaPkguzxz1VywvkodRDZAkZCTHwYxhZBLKQpoHESlRTmXyZBsDo8j5AyhmFWJGoLNT8rg5rbyYZCO5PCk', '3166548106ccd8b80862ed3d2b2fb8414215686b05995be8f96d9e444c5f8670', '34b63ce94e5ce95137bfedcb8f2475356471faed695ba279f66f4937a07bbebe', '{"115.79.56.189":2}', 1, '2014-06-24 15:45:11', '2014-06-24 15:12:12'),
(9, '0', 'yahoo', 'Nguyen Huy', NULL, NULL, NULL, NULL, NULL, 'anhhuy9900@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', NULL, NULL, 'f3caf517752e5acf4ebd046e8d8b99161096e1d7e735ca18cddf6ff05af21ea3', '60a4f68af044424f432497bf560092f82b7c8c69c6c468637ec27fe093b5fa2b', '{"115.79.56.189":1,"::1":2}', 1, '2014-06-24 15:13:13', '2014-06-24 15:13:13'),
(11, '0', NULL, 'Nguyen Anh  Hùng', 'Nguyen', 'Anh ', 'Hùng', 'anhhung', NULL, 'anhhung@yahoo.com', '8997e605a89750aa57abf5e9f624f4ec', NULL, NULL, NULL, 'eba2a1d4a1e83f76a6d228a6bb9cdc3f2b0adb0759600100b5ae6ae0e1cd7df7', 'fecf01e2bae63d64c27b8238e4fe7077949ac9dc9cae2f56bfb8b5abf0c205af', '{"::1":37}', 1, '2014-07-02 16:19:32', '2014-07-02 15:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `wz_work_experience`
--

DROP TABLE IF EXISTS `wz_work_experience`;
CREATE TABLE IF NOT EXISTS `wz_work_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `description` text,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wz_work_experience`
--

INSERT INTO `wz_work_experience` (`id`, `uid`, `country_id`, `city_id`, `title`, `slug`, `company`, `industry`, `from`, `to`, `salary`, `description`, `flag`, `status`, `changed`, `created`) VALUES
(6, 11, 1, 1, 'Nhân viên', NULL, 'sagsdgsdgsd', 'gsagsdgs', '2014-07-01', '2014-07-16', '253532342', 'hfhfsdhdsfhdhdfs', 1, 1, '2014-07-08 11:03:56', '2014-07-08 11:03:56'),
(7, 11, 2, 2, 'ergwegew', NULL, 'gerwgerw', 'gewrgerwg', '2014-07-02', '2014-07-25', '43534543', 'ergewrgrewgre', 1, 1, '2014-07-09 00:59:43', '2014-07-09 00:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `wz_your_cv`
--

DROP TABLE IF EXISTS `wz_your_cv`;
CREATE TABLE IF NOT EXISTS `wz_your_cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `slug_cv` varchar(255) DEFAULT NULL,
  `personal_id` int(11) NOT NULL DEFAULT '0',
  `work_experience_id` varchar(100) DEFAULT NULL,
  `education_id` varchar(100) DEFAULT NULL,
  `skill_language_id` varchar(100) DEFAULT NULL,
  `reference_id` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `wz_your_cv`
--

INSERT INTO `wz_your_cv` (`id`, `uid`, `slug_cv`, `personal_id`, `work_experience_id`, `education_id`, `skill_language_id`, `reference_id`, `status`, `changed`, `created`) VALUES
(11, 11, '_7a2ace27', 8, '["6"]', '["6"]', '["4"]', '["17"]', 1, '2014-07-08 11:04:48', '2014-07-08 11:04:48'),
(12, 11, '_84e642db', 9, '["7"]', '["7"]', '["5"]', '["18"]', 1, '2014-07-09 01:00:18', '2014-07-09 01:00:18'),
(13, 11, '_cfbcf50d', 10, NULL, NULL, NULL, NULL, 1, '2014-07-09 01:00:53', '2014-07-09 01:00:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
