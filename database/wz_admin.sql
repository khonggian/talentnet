-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 20, 2014 at 04:47 PM
-- Server version: 5.0.51
-- PHP Version: 5.3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `wz_admin`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_logs`
-- 

DROP TABLE IF EXISTS `wz_admin_logs`;
CREATE TABLE IF NOT EXISTS `wz_admin_logs` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL COMMENT 'User ID',
  `mid` int(11) default NULL COMMENT 'Module ID',
  `nid` int(11) default NULL COMMENT 'Content ID',
  `type` varchar(64) default NULL,
  `title` varchar(255) default NULL,
  `data` text,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=133 ;

-- 
-- Dumping data for table `wz_admin_logs`
-- 

INSERT INTO `wz_admin_logs` VALUES (1, 1, 2, 8, 'edit', 'Nguyễn Huệ', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;,\\&quot;3\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;353\\&quot;,\\&quot;355\\&quot;]&quot;,&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7&quot;,&quot;description&quot;:&quot;teo teo&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfsdfsdf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;,\\&quot;kpop\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-10-24 17:26:27&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.755486\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68574330000001\\&quot;,\\&quot;address\\&quot;:\\&quot;24 Nguy\\\\u1ec5n V\\\\u0103n C\\\\u1eeb, C\\\\u1ea7u Kho, Qu\\\\u1eadn 5, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;nguyen-hue&quot;,&quot;youtube&quot;:&quot;BVc_YAJCemw&quot;,&quot;image&quot;:&quot;11&quot;}', 1, '2013-11-09 10:05:39', '2013-11-09 10:05:39');
INSERT INTO `wz_admin_logs` VALUES (2, 1, 2, 8, 'edit', 'Nguyễn Huệ 2', '{&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7 2&quot;,&quot;slug&quot;:&quot;nguyen-hue-2&quot;}', 1, '2013-11-09 10:06:11', '2013-11-09 10:06:11');
INSERT INTO `wz_admin_logs` VALUES (3, 1, 2, 9, 'delete', '', '{&quot;id&quot;:&quot;9&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;slug&quot;:&quot;tieu-de&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi dung&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2013\\/10\\/31\\/e9e019f284cb5110ec19e6da81933bc6_1383210203.jpg&quot;,&quot;youtube&quot;:&quot;TbhUCY2NmZE&quot;,&quot;datetime_picker&quot;:&quot;2013-10-30 17:02:09&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;status&quot;:&quot;0&quot;}', 1, '2013-11-09 10:10:59', '2013-11-09 10:10:59');
INSERT INTO `wz_admin_logs` VALUES (4, 1, 2, 8, 'delete', '', '{&quot;id&quot;:&quot;8&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;title&quot;:&quot;Nguy\\u1ec5n Hu\\u1ec7 2&quot;,&quot;slug&quot;:&quot;nguyen-hue-2&quot;,&quot;description&quot;:&quot;teo teo&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfsdfsdf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;11&quot;,&quot;video&quot;:&quot;2116da346fe9c1fe50516ef92a2a003e_1382602358.jpg&quot;,&quot;youtube&quot;:&quot;BVc_YAJCemw&quot;,&quot;datetime_picker&quot;:&quot;2013-10-24 17:26:27&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.755486\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68574330000001\\&quot;,\\&quot;address\\&quot;:\\&quot;24 Nguy\\\\u1ec5n V\\\\u0103n C\\\\u1eeb, C\\\\u1ea7u Kho, Qu\\\\u1eadn 5, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;2&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;,\\&quot;kpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;353\\&quot;,\\&quot;355\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;,\\&quot;3\\&quot;]&quot;,&quot;status&quot;:&quot;0&quot;}', 1, '2013-11-09 10:11:24', '2013-11-09 10:11:24');
INSERT INTO `wz_admin_logs` VALUES (5, 1, 2, 12, 'insert', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;[\\&quot;339\\&quot;]&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-09 11:12:20', '2013-11-09 11:12:20');
INSERT INTO `wz_admin_logs` VALUES (6, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;[\\&quot;339\\&quot;]&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 16:24:37', '2013-11-15 16:24:37');
INSERT INTO `wz_admin_logs` VALUES (7, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 16:25:51', '2013-11-15 16:25:51');
INSERT INTO `wz_admin_logs` VALUES (8, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#7a4e4e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 16:28:10', '2013-11-15 16:28:10');
INSERT INTO `wz_admin_logs` VALUES (9, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;rgba&quot;:&quot;#d45959&quot;,&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 16:32:52', '2013-11-15 16:32:52');
INSERT INTO `wz_admin_logs` VALUES (10, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 17:25:10', '2013-11-15 17:25:10');
INSERT INTO `wz_admin_logs` VALUES (11, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-15 17:43:47', '2013-11-15 17:43:47');
INSERT INTO `wz_admin_logs` VALUES (12, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-15 17:49:31', '2013-11-15 17:49:31');
INSERT INTO `wz_admin_logs` VALUES (13, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;}', 1, '2013-11-16 16:41:18', '2013-11-16 16:41:18');
INSERT INTO `wz_admin_logs` VALUES (14, 1, 2, 12, 'edit', 'Trần Sáng Lập', '{&quot;recursive&quot;:&quot;5&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;Tr\\u1ea7n S\\u00e1ng L\\u1eadp&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 n\\u00e8&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tran-sang-lap&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2013-11-16 16:42:19', '2013-11-16 16:42:19');
INSERT INTO `wz_admin_logs` VALUES (15, 1, 2, 13, 'insert', 'TSL', '{&quot;rgba&quot;:&quot;#7d4c4c&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-12-17 15:30:33&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;title&quot;:&quot;TSL&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 TSL&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tsl&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2013-12-16 15:31:28', '2013-12-16 15:31:28');
INSERT INTO `wz_admin_logs` VALUES (16, 1, 2, 14, 'delete', '', '{&quot;id&quot;:&quot;14&quot;,&quot;recursive&quot;:null,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:null,&quot;title&quot;:&quot;Ngai Ngung - Agela Ph\\u01b0\\u01a1ng Trinh&quot;,&quot;slug&quot;:null,&quot;description&quot;:&quot;Taaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;dfdsfdsfdfdsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:null,&quot;video&quot;:null,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:null,&quot;maps&quot;:null,&quot;tags&quot;:null,&quot;radio&quot;:null,&quot;select&quot;:null,&quot;province&quot;:&quot;0&quot;,&quot;district&quot;:null,&quot;color&quot;:null,&quot;rgba&quot;:null,&quot;status&quot;:&quot;1&quot;}', 1, '2013-12-31 16:27:22', '2013-12-31 16:27:22');
INSERT INTO `wz_admin_logs` VALUES (17, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;\\&quot;,\\&quot;lng\\&quot;:\\&quot;\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;slug&quot;:&quot;tieu-de&quot;,&quot;image&quot;:&quot;18&quot;}', 1, '2014-01-15 11:18:06', '2014-01-15 11:18:06');
INSERT INTO `wz_admin_logs` VALUES (18, 1, 2, 13, 'delete', '', '{&quot;id&quot;:&quot;13&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;title&quot;:&quot;TSL&quot;,&quot;slug&quot;:&quot;tsl&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 TSL&quot;,&quot;content&quot;:&quot;&lt;p&gt;sssssssss&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;1&quot;,&quot;video&quot;:&quot;2013\\/12\\/16\\/fd67946066ba7a688d2cc3fb8671bfaa_1387182682.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2013-12-17 15:30:33&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;[\\&quot;354\\&quot;]&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#7d4c4c&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-03-05 10:26:52', '2014-03-05 10:26:52');
INSERT INTO `wz_admin_logs` VALUES (19, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;vpop&quot;,&quot;select&quot;:&quot;kpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 10:46:24', '2014-03-14 10:46:24');
INSERT INTO `wz_admin_logs` VALUES (20, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 11:52:26', '2014-03-14 11:52:26');
INSERT INTO `wz_admin_logs` VALUES (21, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 12:06:16', '2014-03-14 12:06:16');
INSERT INTO `wz_admin_logs` VALUES (22, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 12:06:37', '2014-03-14 12:06:37');
INSERT INTO `wz_admin_logs` VALUES (23, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;uk&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 12:06:51', '2014-03-14 12:06:51');
INSERT INTO `wz_admin_logs` VALUES (24, 1, 2, 12, 'edit', 'Tieu de', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-14 14:17:42', '2014-03-14 14:17:42');
INSERT INTO `wz_admin_logs` VALUES (25, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-14 14:17:57', '2014-03-14 14:17:57');
INSERT INTO `wz_admin_logs` VALUES (26, 1, 2, 12, 'edit', '', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de&quot;}', 1, '2014-03-19 10:40:18', '2014-03-19 10:40:18');
INSERT INTO `wz_admin_logs` VALUES (27, 1, 2, 12, 'edit', 'Tieu de', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-19 10:41:33', '2014-03-19 10:41:33');
INSERT INTO `wz_admin_logs` VALUES (28, 1, 2, 12, 'edit', 'Tieu de ne', '{&quot;district&quot;:&quot;[\\&quot;340\\&quot;]&quot;,&quot;title&quot;:&quot;Tieu de ne&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;slug&quot;:&quot;tieu-de-ne&quot;}', 1, '2014-03-19 10:41:47', '2014-03-19 10:41:47');
INSERT INTO `wz_admin_logs` VALUES (29, 1, 2, 12, 'edit', 'ba dao chua ne', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-19 10:44:40', '2014-03-19 10:44:40');
INSERT INTO `wz_admin_logs` VALUES (30, 1, 2, 12, 'edit', 'ba dao chua ne', '{&quot;district&quot;:&quot;340&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 11:35:51', '2014-03-20 11:35:51');
INSERT INTO `wz_admin_logs` VALUES (31, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 11:52:00', '2014-03-20 11:52:00');
INSERT INTO `wz_admin_logs` VALUES (32, 1, 2, 12, 'edit', '', '{&quot;pid&quot;:&quot;2&quot;,&quot;district&quot;:&quot;340&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 11:52:16', '2014-03-20 11:52:16');
INSERT INTO `wz_admin_logs` VALUES (33, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;ba-dao-chua-ne&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;title&quot;:&quot;ba dao chua ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 11:59:49', '2014-03-20 11:59:49');
INSERT INTO `wz_admin_logs` VALUES (34, 1, 2, 12, 'edit', '', '{&quot;slug&quot;:&quot;&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;district&quot;:&quot;340&quot;,&quot;title&quot;:&quot;&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;}', 1, '2014-03-20 12:00:06', '2014-03-20 12:00:06');
INSERT INTO `wz_admin_logs` VALUES (35, 1, 2, 12, 'edit', '', '{&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;province&quot;:&quot;76&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;19&quot;}', 1, '2014-03-20 12:01:52', '2014-03-20 12:01:52');
INSERT INTO `wz_admin_logs` VALUES (36, 1, 2, 15, 'insert', '', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 09:41:56', '2014-03-26 09:41:56');
INSERT INTO `wz_admin_logs` VALUES (37, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 09:43:08', '2014-03-26 09:43:08');
INSERT INTO `wz_admin_logs` VALUES (38, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;}', 1, '2014-03-26 14:57:26', '2014-03-26 14:57:26');
INSERT INTO `wz_admin_logs` VALUES (39, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:3,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-26 15:13:10', '2014-03-26 15:13:10');
INSERT INTO `wz_admin_logs` VALUES (40, 1, 9, 4, 'insert', 'Áo thun', '{&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-03-27 10:10:45', '2014-03-27 10:10:45');
INSERT INTO `wz_admin_logs` VALUES (41, 1, 9, 4, 'edit', 'Áo thun', '{&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-03-27 10:33:37', '2014-03-27 10:33:37');
INSERT INTO `wz_admin_logs` VALUES (42, 1, 9, 2, 'delete', '', '{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:null}', 1, '2014-03-27 11:45:29', '2014-03-27 11:45:29');
INSERT INTO `wz_admin_logs` VALUES (43, 1, 9, 3, 'delete', '', '{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:null}', 1, '2014-03-27 11:45:41', '2014-03-27 11:45:41');
INSERT INTO `wz_admin_logs` VALUES (44, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;}', 1, '2014-03-27 14:39:46', '2014-03-27 14:39:46');
INSERT INTO `wz_admin_logs` VALUES (45, 1, 2, 15, 'edit', 'Test', '{&quot;slug&quot;:&quot;test&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:3,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;uk\\&quot;]&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;2&quot;}', 1, '2014-03-27 14:39:59', '2014-03-27 14:39:59');
INSERT INTO `wz_admin_logs` VALUES (46, 1, 2, 15, 'edit', 'Test', '{&quot;description&quot;:&quot;mo ta test&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;Tran&quot;}', 1, '2014-04-02 10:20:12', '2014-04-02 10:20:12');
INSERT INTO `wz_admin_logs` VALUES (47, 1, 2, 16, 'insert', 'Teee', '{&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2014-04-04 14:42:06', '2014-04-04 14:42:06');
INSERT INTO `wz_admin_logs` VALUES (48, 1, 9, 5, 'insert', 'Test sản phẩm', '{&quot;name&quot;:&quot;Test s\\u1ea3n ph\\u1ea9m&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 s\\u1ea3n ph\\u1ea9m&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;355&quot;,&quot;date&quot;:&quot;2014-04-04 16:08:03&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 16:08:43', '2014-04-04 16:08:43');
INSERT INTO `wz_admin_logs` VALUES (49, 1, 9, 5, 'delete', '', '{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;Test s\\u1ea3n ph\\u1ea9m&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;0&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 s\\u1ea3n ph\\u1ea9m&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-04-04 16:08:03&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;355&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 16:13:36', '2014-04-04 16:13:36');
INSERT INTO `wz_admin_logs` VALUES (50, 1, 9, 4, 'delete', '', '{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;\\u00c1o thun&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/03\\/27\\/a97e1a35b6114e7f2c9321ec8bd7e77f_1395891213.jpg&quot;,&quot;gallery&quot;:&quot;1&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 \\u00e1o&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-03-27 10:05:59&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 16:13:36', '2014-04-04 16:13:36');
INSERT INTO `wz_admin_logs` VALUES (51, 1, 9, 6, 'insert', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 17:09:13', '2014-04-04 17:09:13');
INSERT INTO `wz_admin_logs` VALUES (52, 1, 9, 7, 'insert', 'Test 2', '{&quot;name&quot;:&quot;Test 2&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test 2&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-15 17:09:21&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-04 17:09:49', '2014-04-04 17:09:49');
INSERT INTO `wz_admin_logs` VALUES (53, 1, 9, 7, 'delete', '', '{&quot;id&quot;:&quot;7&quot;,&quot;name&quot;:&quot;Test 2&quot;,&quot;slug&quot;:null,&quot;image&quot;:null,&quot;gallery&quot;:&quot;0&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 test 2&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;price&quot;:null,&quot;date&quot;:&quot;2014-04-15 17:09:21&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-04 17:10:04', '2014-04-04 17:10:04');
INSERT INTO `wz_admin_logs` VALUES (54, 1, 2, 16, 'edit', 'Teee', '{&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;http:\\/\\/local.adminwz.com\\/uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;image&quot;:&quot;1&quot;}', 1, '2014-04-04 17:59:53', '2014-04-04 17:59:53');
INSERT INTO `wz_admin_logs` VALUES (55, 1, 2, 16, 'edit', 'Teee', '{&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-04 18:01:08', '2014-04-04 18:01:08');
INSERT INTO `wz_admin_logs` VALUES (56, 1, 2, 16, 'edit', 'Teee', '{&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;teee&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 00:28:16', '2014-04-05 00:28:16');
INSERT INTO `wz_admin_logs` VALUES (57, 1, 2, 16, 'delete', '', '{&quot;id&quot;:&quot;16&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Teee&quot;,&quot;slug&quot;:&quot;teee&quot;,&quot;description&quot;:&quot;eeeeeeeeeeeee&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;dfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2014\\/04\\/04\\/fc91bc08efd4fbdff7b7a2e3cf38fede_1396597310.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-09 14:40:17&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;rgba&quot;:&quot;#6c5d5d&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49');
INSERT INTO `wz_admin_logs` VALUES (58, 1, 2, 15, 'delete', '', '{&quot;id&quot;:&quot;15&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;mo ta test&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung test&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;2&quot;,&quot;video&quot;:&quot;2014\\/03\\/26\\/ef98d7998e2ec1a47382203e93b19da6_1395801781.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-03-26 09:41:01&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;Tran&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;rgba&quot;:&quot;#421d1d&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49');
INSERT INTO `wz_admin_logs` VALUES (59, 1, 2, 12, 'delete', '', '{&quot;id&quot;:&quot;12&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;&quot;,&quot;slug&quot;:&quot;&quot;,&quot;description&quot;:&quot;mo ta ne&quot;,&quot;content&quot;:&quot;&lt;p&gt;dsfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;19&quot;,&quot;video&quot;:&quot;2013\\/11\\/15\\/b5ee053697241790a215187f6a85a510_1384512570.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2013-11-14 11:10:48&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;select&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;province&quot;:&quot;76&quot;,&quot;district&quot;:&quot;340&quot;,&quot;color&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;rgba&quot;:&quot;#ab136e&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-05 09:28:49', '2014-04-05 09:28:49');
INSERT INTO `wz_admin_logs` VALUES (60, 1, 2, 17, 'insert', 'Tran', '{&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Tran&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 09:29:35', '2014-04-05 09:29:35');
INSERT INTO `wz_admin_logs` VALUES (61, 1, 2, 17, 'edit', 'Tran', '{&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;title&quot;:&quot;Tran&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;Tran&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 09:43:24', '2014-04-05 09:43:24');
INSERT INTO `wz_admin_logs` VALUES (62, 1, 10, 1, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:28:10', '2014-04-05 10:28:10');
INSERT INTO `wz_admin_logs` VALUES (63, 1, 10, 2, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:29:27', '2014-04-05 10:29:27');
INSERT INTO `wz_admin_logs` VALUES (64, 1, 10, 3, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;tags&quot;:1,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:30:30', '2014-04-05 10:30:30');
INSERT INTO `wz_admin_logs` VALUES (65, 1, 10, 3, 'delete', '', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38');
INSERT INTO `wz_admin_logs` VALUES (66, 1, 10, 2, 'delete', '', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38');
INSERT INTO `wz_admin_logs` VALUES (67, 1, 10, 1, 'delete', '', '{&quot;id&quot;:&quot;1&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;datepost&quot;:null,&quot;tags&quot;:&quot;1&quot;,&quot;status&quot;:null}', 1, '2014-04-05 10:30:38', '2014-04-05 10:30:38');
INSERT INTO `wz_admin_logs` VALUES (68, 1, 10, 4, 'insert', 'Test', '{&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;pid&quot;:&quot;2&quot;}', 1, '2014-04-05 10:31:18', '2014-04-05 10:31:18');
INSERT INTO `wz_admin_logs` VALUES (69, 1, 10, 5, 'insert', 'Tesss', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Tesss&quot;,&quot;slug&quot;:&quot;tesss&quot;,&quot;description&quot;:&quot;Mo taa&quot;,&quot;content&quot;:&quot;&lt;p&gt;Content&lt;\\/p&gt;\\r\\n&quot;,&quot;gallery&quot;:&quot;2&quot;}', 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28');
INSERT INTO `wz_admin_logs` VALUES (70, 1, 11, 2, 'insert', 'Tin tức', '{&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;gallery&quot;:&quot;4&quot;}', 1, '2014-04-05 11:28:45', '2014-04-05 11:28:45');
INSERT INTO `wz_admin_logs` VALUES (71, 1, 11, 2, 'edit', 'Tin tức', '{&quot;pid&quot;:&quot;2&quot;,&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747231\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67619869999999\\&quot;,\\&quot;address\\&quot;:\\&quot;198-232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:1,&quot;gallery&quot;:&quot;4&quot;}', 1, '2014-04-05 11:31:24', '2014-04-05 11:31:24');
INSERT INTO `wz_admin_logs` VALUES (72, 1, 11, 2, 'edit', 'Tin tức', '{&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-05 11:36:12', '2014-04-05 11:36:12');
INSERT INTO `wz_admin_logs` VALUES (73, 1, 11, 2, 'delete', '', '{&quot;id&quot;:&quot;2&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;title&quot;:&quot;Tin t\\u1ee9c&quot;,&quot;slug&quot;:&quot;tin-tuc&quot;,&quot;image&quot;:&quot;2014\\/04\\/05\\/6d2b91e7f32000897ad4bd9b9932bc77_1396672006.jpg&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;gallery&quot;:&quot;4&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;meta_keyword&quot;:null,&quot;meta_description&quot;:null,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-08 10:19:21', '2014-04-08 10:19:21');
INSERT INTO `wz_admin_logs` VALUES (74, 1, 11, 1, 'delete', '', '{&quot;image&quot;:&quot;2014\\/04\\/05\\/74522ccfc9dccd84fc964151ff5de2fb_1396671732.jpg&quot;}', 1, '2014-04-08 10:19:21', '2014-04-08 10:19:21');
INSERT INTO `wz_admin_logs` VALUES (75, 1, 11, 3, 'insert', 'Test', '{&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;}', 1, '2014-04-08 10:23:03', '2014-04-08 10:23:03');
INSERT INTO `wz_admin_logs` VALUES (76, 1, 12, 1, 'insert', 'Test', '{&quot;link&quot;:&quot;https:\\/\\/www.google.com.vn\\/&quot;}', 1, '2014-04-08 10:30:54', '2014-04-08 10:30:54');
INSERT INTO `wz_admin_logs` VALUES (77, 1, 2, 17, 'edit', 'Tran', '{&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-08 15:51:38', '2014-04-08 15:51:38');
INSERT INTO `wz_admin_logs` VALUES (78, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 15:58:38', '2014-04-08 15:58:38');
INSERT INTO `wz_admin_logs` VALUES (79, 1, 2, 17, 'edit', 'Tran', '{&quot;ids&quot;:null,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-08 16:30:46', '2014-04-08 16:30:46');
INSERT INTO `wz_admin_logs` VALUES (80, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;slug&quot;:&quot;tran&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;color&quot;:&quot;[\\&quot;3\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 16:33:22', '2014-04-08 16:33:22');
INSERT INTO `wz_admin_logs` VALUES (81, 1, 2, 18, 'insert', 'Tiêu đề 3', '{&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tieu-de-3&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;color&quot;:&quot;[\\&quot;4\\&quot;]&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 16:34:01&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-08 16:34:49', '2014-04-08 16:34:49');
INSERT INTO `wz_admin_logs` VALUES (82, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-12 11:52:02', '2014-04-12 11:52:02');
INSERT INTO `wz_admin_logs` VALUES (83, 1, 11, 3, 'edit', 'Test', '{&quot;province&quot;:&quot;&quot;,&quot;ids&quot;:&quot;ebdbef68819&quot;,&quot;district&quot;:&quot;&quot;,&quot;pid&quot;:&quot;&quot;,&quot;article&quot;:&quot;&quot;,&quot;title&quot;:&quot;Test&quot;,&quot;slug&quot;:&quot;test-ebdbef68819&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;,&quot;tags&quot;:1}', 1, '2014-04-12 11:59:02', '2014-04-12 11:59:02');
INSERT INTO `wz_admin_logs` VALUES (84, 1, 11, 3, 'edit', 'Tran Sang Lap', '{&quot;title&quot;:&quot;Tran Sang Lap&quot;,&quot;slug&quot;:&quot;tran-sang-lap-ebdbef68819&quot;}', 1, '2014-04-12 11:59:23', '2014-04-12 11:59:23');
INSERT INTO `wz_admin_logs` VALUES (85, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 10:50:51', '2014-04-14 10:50:51');
INSERT INTO `wz_admin_logs` VALUES (86, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 10:51:52', '2014-04-14 10:51:52');
INSERT INTO `wz_admin_logs` VALUES (87, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 10:54:16', '2014-04-14 10:54:16');
INSERT INTO `wz_admin_logs` VALUES (88, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:02:48', '2014-04-14 11:02:48');
INSERT INTO `wz_admin_logs` VALUES (89, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:03:16', '2014-04-14 11:03:16');
INSERT INTO `wz_admin_logs` VALUES (90, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:03:54', '2014-04-14 11:03:54');
INSERT INTO `wz_admin_logs` VALUES (91, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08 09:28:55&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:04:05', '2014-04-14 11:04:05');
INSERT INTO `wz_admin_logs` VALUES (92, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-14 11:45:22', '2014-04-14 11:45:22');
INSERT INTO `wz_admin_logs` VALUES (93, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-14 11:45:50', '2014-04-14 11:45:50');
INSERT INTO `wz_admin_logs` VALUES (94, 1, 11, 3, 'edit', 'Tran Sang Lap', '{&quot;province&quot;:&quot;64&quot;,&quot;ids&quot;:&quot;ebdbef68819&quot;,&quot;district&quot;:&quot;352&quot;,&quot;pid&quot;:&quot;[\\&quot;1\\&quot;,\\&quot;2\\&quot;]&quot;,&quot;article&quot;:&quot;14&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;content&quot;:&quot;&lt;p&gt;N\\u1ed9i dung&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;Keyword&quot;,&quot;meta_description&quot;:&quot;description&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 10:34:31', '2014-04-15 10:34:31');
INSERT INTO `wz_admin_logs` VALUES (95, 1, 11, 4, 'insert', 'Test', '{&quot;province&quot;:&quot;64&quot;,&quot;ids&quot;:&quot;fc7dab6d7d4&quot;,&quot;district&quot;:&quot;352&quot;,&quot;pid&quot;:&quot;[\\&quot;2\\&quot;]&quot;,&quot;article&quot;:&quot;4&quot;,&quot;slug&quot;:&quot;test-fc7dab6d7d4&quot;,&quot;description&quot;:&quot;AAAA&quot;,&quot;content&quot;:&quot;&lt;p&gt;Aaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 11:16:31', '2014-04-15 11:16:31');
INSERT INTO `wz_admin_logs` VALUES (96, 1, 11, 5, 'insert', 'Teaa', '{&quot;province&quot;:&quot;76&quot;,&quot;ids&quot;:&quot;a4112141130&quot;,&quot;district&quot;:&quot;338&quot;,&quot;pid&quot;:&quot;[\\&quot;1\\&quot;]&quot;,&quot;article&quot;:&quot;14&quot;,&quot;title&quot;:&quot;Teaa&quot;,&quot;slug&quot;:&quot;teaa-a4112141130&quot;,&quot;description&quot;:&quot;aaaaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;aaaaaaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 11:20:39', '2014-04-15 11:20:39');
INSERT INTO `wz_admin_logs` VALUES (97, 1, 9, 6, 'edit', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-15 11:43:41', '2014-04-15 11:43:41');
INSERT INTO `wz_admin_logs` VALUES (98, 1, 9, 6, 'edit', 'Test', '{&quot;tags&quot;:2}', 1, '2014-04-15 11:43:58', '2014-04-15 11:43:58');
INSERT INTO `wz_admin_logs` VALUES (99, 1, 9, 6, 'edit', 'Test', '{&quot;name&quot;:&quot;Test&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3 Test&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;select&quot;:&quot;uk&quot;,&quot;radio&quot;:&quot;7&quot;,&quot;checkbox&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;date&quot;:&quot;2014-04-11 17:08:35&quot;,&quot;youtube&quot;:&quot;h0oabAkzQR8&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:3,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7688283\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.68344639999998\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, ph\\\\u01b0\\\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12');
INSERT INTO `wz_admin_logs` VALUES (100, 1, 9, 6, 'edit', 'Test', '{&quot;tags&quot;:4}', 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45');
INSERT INTO `wz_admin_logs` VALUES (101, 1, 9, 8, 'insert', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-15 17:32:52', '2014-04-15 17:32:52');
INSERT INTO `wz_admin_logs` VALUES (102, 1, 9, 9, 'insert', 'ABC', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;ABC&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-16 11:25:26', '2014-04-16 11:25:26');
INSERT INTO `wz_admin_logs` VALUES (103, 1, 2, 19, 'insert', 'Teaaaaa', '{&quot;title&quot;:&quot;Teaaaaa&quot;,&quot;ids&quot;:&quot;1a2faa8ff61&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;teaaaaa-1a2faa8ff61&quot;,&quot;rgba&quot;:&quot;#7e3636&quot;,&quot;color&quot;:&quot;3&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-16&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;353&quot;,&quot;description&quot;:&quot;AAAAAAAa&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAAAAAAA&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7920536\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67721389999997\\&quot;,\\&quot;address\\&quot;:\\&quot;223 Hu\\\\u1ef3nh V\\\\u0103n B\\\\u00e1nh, 12, Ph\\\\u00fa Nhu\\\\u1eadn, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 11:59:25', '2014-04-16 11:59:25');
INSERT INTO `wz_admin_logs` VALUES (104, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-16 12:01:36', '2014-04-16 12:01:36');
INSERT INTO `wz_admin_logs` VALUES (105, 1, 9, 8, 'edit', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-16 14:48:49', '2014-04-16 14:48:49');
INSERT INTO `wz_admin_logs` VALUES (106, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 15:19:13', '2014-04-16 15:19:13');
INSERT INTO `wz_admin_logs` VALUES (107, 1, 2, 19, 'delete', '', '{&quot;id&quot;:&quot;19&quot;,&quot;ids&quot;:&quot;1a2faa8ff61&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Teaaaaa&quot;,&quot;slug&quot;:&quot;teaaaaa-1a2faa8ff61&quot;,&quot;description&quot;:&quot;AAAAAAAa&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAAAAAAA&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;1&quot;,&quot;video&quot;:&quot;2014\\/04\\/16\\/1f47484e6ea15e557aedb142a3aea2a8_1397624364.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-16&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7920536\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.67721389999997\\&quot;,\\&quot;address\\&quot;:\\&quot;223 Hu\\\\u1ef3nh V\\\\u0103n B\\\\u00e1nh, 12, Ph\\\\u00fa Nhu\\\\u1eadn, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;1&quot;,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;353&quot;,&quot;color&quot;:&quot;3&quot;,&quot;rgba&quot;:&quot;#7e3636&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-16 16:20:00', '2014-04-16 16:20:00');
INSERT INTO `wz_admin_logs` VALUES (108, 1, 2, 18, 'edit', 'Tiêu đề 3', '{&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;image&quot;:&quot;6&quot;,&quot;slug&quot;:&quot;tieu-de-3-a17cfacffa6&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;color&quot;:&quot;4&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:2,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-16 16:21:01', '2014-04-16 16:21:01');
INSERT INTO `wz_admin_logs` VALUES (109, 1, 2, 18, 'delete', '', '{&quot;id&quot;:&quot;18&quot;,&quot;ids&quot;:&quot;a17cfacffa6&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;title&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1 3&quot;,&quot;slug&quot;:&quot;tieu-de-3-a17cfacffa6&quot;,&quot;description&quot;:&quot;Test&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAAAAAAAA&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;image&quot;:&quot;6&quot;,&quot;video&quot;:&quot;2014\\/04\\/08\\/20e3877e6bfbb69bee1f2fc1dcf900e0_1396949688.jpg&quot;,&quot;youtube&quot;:null,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;,&quot;tags&quot;:&quot;2&quot;,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;color&quot;:&quot;4&quot;,&quot;rgba&quot;:&quot;#954e4e&quot;,&quot;status&quot;:&quot;1&quot;}', 1, '2014-04-16 16:23:14', '2014-04-16 16:23:14');
INSERT INTO `wz_admin_logs` VALUES (110, 1, 2, 17, 'edit', 'Tran', '{&quot;slug&quot;:&quot;tran-69eb9f6ac68&quot;,&quot;color&quot;:&quot;3&quot;,&quot;radio&quot;:&quot;male&quot;}', 1, '2014-04-17 11:05:55', '2014-04-17 11:05:55');
INSERT INTO `wz_admin_logs` VALUES (111, 1, 2, 17, 'edit', 'Tran', '{&quot;title&quot;:&quot;Tran&quot;,&quot;ids&quot;:&quot;69eb9f6ac68&quot;,&quot;image&quot;:&quot;2&quot;,&quot;rgba&quot;:&quot;#9d4242&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;281&quot;,&quot;district&quot;:&quot;369&quot;,&quot;description&quot;:&quot;Mo ta&quot;,&quot;content&quot;:&quot;&lt;p&gt;Noi Dung&lt;\\/p&gt;\\r\\n&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;]&quot;,&quot;tags&quot;:1,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.7747163\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.6761464\\&quot;,\\&quot;address\\&quot;:\\&quot;232 Cao Th\\\\u1eafng, 12, Qu\\\\u1eadn 10, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-17 11:06:16', '2014-04-17 11:06:16');
INSERT INTO `wz_admin_logs` VALUES (112, 1, 2, 20, 'insert', 'Tesss', '{&quot;title&quot;:&quot;Tesss&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;tesss&quot;,&quot;rgba&quot;:&quot;#6a3333&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;761da2c26eb&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;AAAaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-17&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;aaa&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;40.46366700000001\\&quot;,\\&quot;lng\\&quot;:\\&quot;-3.7492200000000366\\&quot;,\\&quot;address\\&quot;:\\&quot;Spain\\&quot;}&quot;}', 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26');
INSERT INTO `wz_admin_logs` VALUES (113, 1, 2, 21, 'insert', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;80e30a996ed&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-17 15:40:31', '2014-04-17 15:40:31');
INSERT INTO `wz_admin_logs` VALUES (114, 1, 2, 21, 'edit', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;8pgnxosI0aR&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:21:44', '2014-04-18 14:21:44');
INSERT INTO `wz_admin_logs` VALUES (115, 1, 2, 21, 'edit', 'Taaaaaaaaaaaaaaaaaaaaa', '{&quot;title&quot;:&quot;Taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;taaaaaaaaaaaaaaaaaaaaa&quot;,&quot;rgba&quot;:&quot;#9f2d2d&quot;,&quot;color&quot;:&quot;2&quot;,&quot;ids&quot;:&quot;&quot;,&quot;recursive&quot;:&quot;5&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;dffffffff&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-10&quot;,&quot;province&quot;:&quot;64&quot;,&quot;district&quot;:&quot;352&quot;,&quot;description&quot;:&quot;fd&quot;,&quot;type&quot;:&quot;[\\&quot;7\\&quot;,\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:21:06', '2014-04-18 14:21:06');
INSERT INTO `wz_admin_logs` VALUES (116, 1, 2, 22, 'insert', 'Dfdsfdf', '{&quot;title&quot;:&quot;Dfdsfdf&quot;,&quot;image&quot;:&quot;1&quot;,&quot;slug&quot;:&quot;dfdsfdf&quot;,&quot;rgba&quot;:&quot;#866060&quot;,&quot;color&quot;:&quot;4&quot;,&quot;ids&quot;:&quot;80tpGOrdEsh&quot;,&quot;recursive&quot;:&quot;8&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;content&quot;:&quot;&lt;p&gt;fdsfdf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-18&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;360&quot;,&quot;description&quot;:&quot;dfsdfdsf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;,\\&quot;uk\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02');
INSERT INTO `wz_admin_logs` VALUES (117, 1, 2, 23, 'insert', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;sfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8013911\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65019329999996\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng Ho\\\\u00e0, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-18 14:26:06', '2014-04-18 14:26:06');
INSERT INTO `wz_admin_logs` VALUES (118, 1, 11, 5, 'edit', 'Teaa', '{&quot;pid&quot;:&quot;1&quot;,&quot;province&quot;:&quot;76&quot;,&quot;ids&quot;:&quot;a4112141130&quot;,&quot;district&quot;:&quot;338&quot;,&quot;article&quot;:&quot;14&quot;,&quot;title&quot;:&quot;Teaa&quot;,&quot;slug&quot;:&quot;teaa-a4112141130&quot;,&quot;description&quot;:&quot;aaaaa&quot;,&quot;content&quot;:&quot;&lt;p&gt;aaaaaaaaaa&lt;br \\/&gt;\\r\\n&amp;nbsp;&lt;\\/p&gt;\\r\\n&quot;,&quot;meta_keyword&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-21 14:11:28', '2014-04-21 14:11:28');
INSERT INTO `wz_admin_logs` VALUES (119, 1, 11, 5, 'edit', 'Title', '{&quot;title_en&quot;:&quot;Title&quot;,&quot;slug_vi&quot;:&quot;tieu-de&quot;,&quot;title_vi&quot;:&quot;Ti\\u00eau \\u0111\\u1ec1&quot;,&quot;slug_en&quot;:&quot;title&quot;,&quot;province&quot;:&quot;79&quot;,&quot;district&quot;:&quot;566&quot;}', 1, '2014-04-21 15:15:36', '2014-04-21 15:15:36');
INSERT INTO `wz_admin_logs` VALUES (120, 1, 9, 8, 'edit', 'Sandal', '{&quot;price&quot;:&quot;11111111&quot;}', 1, '2014-04-21 17:07:55', '2014-04-21 17:07:55');
INSERT INTO `wz_admin_logs` VALUES (121, 1, 9, 8, 'edit', 'Sandal', '{&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Sandal&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-21 17:08:12', '2014-04-21 17:08:12');
INSERT INTO `wz_admin_logs` VALUES (122, 1, 9, 8, 'edit', 'Sandal', '{&quot;price&quot;:&quot;11111111&quot;}', 1, '2014-04-21 17:09:58', '2014-04-21 17:09:58');
INSERT INTO `wz_admin_logs` VALUES (123, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;1&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;sfdsf&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-04-22 14:56:57', '2014-04-22 14:56:57');
INSERT INTO `wz_admin_logs` VALUES (124, 1, 9, 8, 'delete', '', '{&quot;name&quot;:&quot;Sandal&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/04\\/15\\/c57104bdfab22d2a58a062c402322cb0_1397557946.jpg&quot;,&quot;description&quot;:&quot;Test sandal&quot;,&quot;maps&quot;:null,&quot;price&quot;:&quot;11111111&quot;,&quot;date&quot;:null,&quot;youtube&quot;:null,&quot;province&quot;:null,&quot;district&quot;:null,&quot;recursive&quot;:null,&quot;select&quot;:null,&quot;checkbox&quot;:null,&quot;radio&quot;:null}', 1, '2014-04-24 12:01:58', '2014-04-24 12:01:58');
INSERT INTO `wz_admin_logs` VALUES (125, 1, 9, 9, 'delete', '', '{&quot;name&quot;:&quot;ABC&quot;,&quot;slug&quot;:null,&quot;image&quot;:&quot;2014\\/04\\/16\\/b0d7e1078ba98e8af429cbe471686f55_1397622213.jpg&quot;,&quot;description&quot;:&quot;M\\u00f4 t\\u1ea3&quot;,&quot;maps&quot;:null,&quot;price&quot;:null,&quot;date&quot;:null,&quot;youtube&quot;:null,&quot;province&quot;:null,&quot;district&quot;:null,&quot;recursive&quot;:null,&quot;select&quot;:null,&quot;checkbox&quot;:null,&quot;radio&quot;:null}', 1, '2014-04-24 12:02:21', '2014-04-24 12:02:21');
INSERT INTO `wz_admin_logs` VALUES (126, 1, 9, 10, 'insert', 'Taa', '{&quot;price&quot;:&quot;111111&quot;,&quot;pid&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Taa&quot;,&quot;description&quot;:&quot;aaaaaaaaaaaa&quot;,&quot;gallery&quot;:&quot;&quot;,&quot;tags&quot;:1}', 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57');
INSERT INTO `wz_admin_logs` VALUES (127, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;width: 1024px; height: 768px;\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;}', 1, '2014-04-25 10:56:02', '2014-04-25 10:56:02');
INSERT INTO `wz_admin_logs` VALUES (128, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;3&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:12:31', '2014-05-08 10:12:31');
INSERT INTO `wz_admin_logs` VALUES (129, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;image&quot;:&quot;4&quot;}', 1, '2014-05-08 10:18:28', '2014-05-08 10:18:28');
INSERT INTO `wz_admin_logs` VALUES (130, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:19:33', '2014-05-08 10:19:33');
INSERT INTO `wz_admin_logs` VALUES (131, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;image&quot;:&quot;4&quot;}', 1, '2014-05-08 10:19:54', '2014-05-08 10:19:54');
INSERT INTO `wz_admin_logs` VALUES (132, 1, 2, 23, 'edit', 'ADsdsdsd', '{&quot;title&quot;:&quot;ADsdsdsd&quot;,&quot;image&quot;:&quot;3&quot;,&quot;ids&quot;:&quot;qhiMZu4xl76&quot;,&quot;slug&quot;:&quot;adsdsdsd-qhiMZu4xl76&quot;,&quot;rgba&quot;:&quot;#936f6f&quot;,&quot;color&quot;:&quot;2&quot;,&quot;recursive&quot;:&quot;3&quot;,&quot;pid&quot;:&quot;1&quot;,&quot;content&quot;:&quot;&lt;p&gt;&lt;img alt=\\&quot;\\&quot; src=\\&quot;uploads\\/editor\\/images\\/Tulips.jpg\\&quot; style=\\&quot;height:768px; width:1024px\\&quot; \\/&gt;&lt;\\/p&gt;\\r\\n&quot;,&quot;datetime_picker&quot;:&quot;2014-04-08&quot;,&quot;province&quot;:&quot;781&quot;,&quot;district&quot;:&quot;359&quot;,&quot;description&quot;:&quot;fdsfdf&quot;,&quot;type&quot;:&quot;[\\&quot;vpop\\&quot;]&quot;,&quot;tags&quot;:1,&quot;radio&quot;:&quot;male&quot;,&quot;select&quot;:&quot;vpop&quot;,&quot;maps&quot;:&quot;{\\&quot;lat\\&quot;:\\&quot;10.8028981\\&quot;,\\&quot;lng\\&quot;:\\&quot;106.65009140000006\\&quot;,\\&quot;address\\&quot;:\\&quot;232 C\\\\u1ed9ng H\\\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam\\&quot;}&quot;}', 1, '2014-05-08 10:20:06', '2014-05-08 10:20:06');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_module`
-- 

DROP TABLE IF EXISTS `wz_admin_module`;
CREATE TABLE IF NOT EXISTS `wz_admin_module` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default '0',
  `type` varchar(32) default 'module',
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `folder` varchar(255) default NULL,
  `custom` tinyint(1) default '0',
  `order` int(11) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `wz_admin_module`
-- 

INSERT INTO `wz_admin_module` VALUES (13, 14, 'module', 'Support', 'support', 'support', 0, 0, 1, '2014-04-29 14:19:27', '2014-04-29 14:19:29');
INSERT INTO `wz_admin_module` VALUES (2, 0, 'module', 'Tin tức', 'tin-tuc', 'news', 0, 1, 1, '2014-04-18 10:00:41', '2013-09-16 12:38:08');
INSERT INTO `wz_admin_module` VALUES (9, 0, 'module', 'Sản phẩm', 'san-pham', 'product', 1, 3, 1, '2014-04-22 15:12:31', '2014-03-05 11:14:33');
INSERT INTO `wz_admin_module` VALUES (11, 0, 'module', 'Test', 'test', 'test', 0, 2, 1, '2014-04-22 14:58:53', '2014-04-05 11:17:22');
INSERT INTO `wz_admin_module` VALUES (12, 16, 'module', 'Channel ', 'channel', '', 0, 0, 1, '2014-04-22 15:00:34', '2014-04-08 10:05:33');
INSERT INTO `wz_admin_module` VALUES (14, 17, 'module', 'Baby', 'baby', 'baby', 0, 0, 1, '2014-04-29 14:19:27', '2014-04-29 14:19:27');
INSERT INTO `wz_admin_module` VALUES (15, 13, 'module', 'Dealer', 'dealer', 'dealer', 0, 0, 1, '2014-04-22 14:19:59', '2014-04-22 14:19:59');
INSERT INTO `wz_admin_module` VALUES (16, 9, 'module', 'Search', 'search', 'search', 0, 0, 1, '2014-04-22 14:19:59', '2014-04-22 14:19:59');
INSERT INTO `wz_admin_module` VALUES (17, 18, 'group', 'php', 'php', '', 0, 1, 1, '2014-05-05 11:47:30', '2014-04-29 16:52:10');
INSERT INTO `wz_admin_module` VALUES (18, 0, 'module', 'html', 'html', 'html', 0, 0, 1, '2014-04-29 16:52:08', '2014-04-29 16:52:08');
INSERT INTO `wz_admin_module` VALUES (19, 9, 'module', 'Game', 'game', '', 0, 1, 1, '2014-05-05 11:45:38', '2014-04-29 16:52:08');
INSERT INTO `wz_admin_module` VALUES (20, 18, 'module', 'Css', 'css', 'css', 0, 0, 1, '2014-04-29 16:52:08', '2014-04-29 16:52:08');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_module_edit_field`
-- 

DROP TABLE IF EXISTS `wz_admin_module_edit_field`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_edit_field` (
  `id` int(11) NOT NULL auto_increment,
  `mid` int(11) default NULL COMMENT 'Module ID',
  `name` varchar(255) default NULL,
  `type` varchar(255) NOT NULL,
  `field` varchar(32) default NULL,
  `require` tinyint(1) default '1',
  `data` text,
  `order` int(11) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

-- 
-- Dumping data for table `wz_admin_module_edit_field`
-- 

INSERT INTO `wz_admin_module_edit_field` VALUES (5, 2, 'Mô tả', 'textarea', 'description', 1, '', 14, 1, '2013-10-31 16:07:30', '2013-10-09 10:47:27');
INSERT INTO `wz_admin_module_edit_field` VALUES (12, 2, 'Thể loại', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_news_category","table_foreign_field":"name","multiple":0}', 9, 1, '2013-11-07 18:06:49', '2013-10-09 12:16:16');
INSERT INTO `wz_admin_module_edit_field` VALUES (56, 2, 'Gallery', 'file_multiupload', 'image', 1, '{"directory":"uploads\\/news\\/gallery\\/","extension":"jpg|jpeg|png|gif"}', 1, 1, '2014-04-05 00:27:45', '2014-04-05 00:27:45');
INSERT INTO `wz_admin_module_edit_field` VALUES (21, 2, 'Maps', 'maps', 'maps', 1, '', 19, 1, '2013-10-11 16:42:08', '2013-10-11 16:42:08');
INSERT INTO `wz_admin_module_edit_field` VALUES (15, 2, 'Tags', 'tags', 'tags', 1, '', 16, 1, '2013-10-10 18:01:26', '2013-10-09 16:10:56');
INSERT INTO `wz_admin_module_edit_field` VALUES (43, 2, 'Slug', 'slug', 'slug', 1, '{"field_to_slug":"26"}', 3, 1, '2014-03-19 10:44:19', '2014-03-19 10:44:19');
INSERT INTO `wz_admin_module_edit_field` VALUES (17, 2, 'Loại', 'checkbox', 'type', 1, '{"value":"7|7\\r\\nvpop|Vpop\\r\\nuk|Uk\\r\\nkpop|Kpop"}', 15, 1, '2014-03-14 11:30:09', '2013-10-10 18:01:04');
INSERT INTO `wz_admin_module_edit_field` VALUES (18, 2, 'Nội dung', 'content', 'content', 1, '', 10, 1, '2013-10-21 11:53:33', '2013-10-11 12:41:32');
INSERT INTO `wz_admin_module_edit_field` VALUES (19, 2, 'Giới tính', 'radio', 'radio', 1, '{"value":"male|Nam\\r\\nfemale|N\\u1eef"}', 17, 1, '2014-04-05 11:59:38', '2013-10-11 12:46:44');
INSERT INTO `wz_admin_module_edit_field` VALUES (20, 2, 'Select', 'select', 'select', 1, '{"value":"Tran|7\\r\\nvpop|Vpop\\r\\nuk|Uk\\r\\nkpop|Kpop","multiple":0}', 18, 1, '2014-04-02 10:19:46', '2013-10-11 13:00:54');
INSERT INTO `wz_admin_module_edit_field` VALUES (23, 2, 'Video (200x200)', 'file', 'video', 1, '{"directory":"uploads\\/news\\/video\\/","extension":"mp4|jpg|pptx|ppt"}', 20, 1, '2014-04-05 12:00:21', '2013-10-18 10:33:23');
INSERT INTO `wz_admin_module_edit_field` VALUES (24, 2, 'Datetimepicker', 'datetimepicker', 'datetime_picker', 1, '{"date":1}', 11, 1, '2014-04-14 11:36:56', '2013-10-18 12:27:48');
INSERT INTO `wz_admin_module_edit_field` VALUES (25, 2, 'Youtube', 'youtube', 'youtube', 0, '', 21, 1, '2013-11-09 11:12:18', '2013-10-18 12:28:06');
INSERT INTO `wz_admin_module_edit_field` VALUES (26, 2, 'Tiêu đề', 'text', 'title', 1, '{"unique":1}', 0, 1, '2014-04-22 15:34:10', '2013-10-19 11:08:48');
INSERT INTO `wz_admin_module_edit_field` VALUES (27, 8, 'Tiêu đề', 'title', 'title', 1, '', 1, 1, '2013-10-24 12:46:25', '2013-10-24 12:46:25');
INSERT INTO `wz_admin_module_edit_field` VALUES (28, 8, 'Mô tả', 'description', 'description', 1, '', 3, 1, '2013-10-24 12:46:33', '2013-10-24 12:46:33');
INSERT INTO `wz_admin_module_edit_field` VALUES (29, 8, 'Nội dung', 'content', 'content', 1, '', 0, 1, '2013-10-24 12:46:48', '2013-10-24 12:46:48');
INSERT INTO `wz_admin_module_edit_field` VALUES (30, 2, 'Tỉnh thành', 'select_foreign_table', 'province', 1, '{"table_foreign":"wz_province","table_foreign_field":"name","multiple":0}', 12, 1, '2013-11-07 17:25:39', '2013-10-28 17:29:33');
INSERT INTO `wz_admin_module_edit_field` VALUES (48, 2, 'Quận huyện', 'select_foreign_table_children', 'district', 1, '{"table_foreign":"wz_district","table_foreign_field":"name","parent_field":"30","multiple":0}', 13, 1, '2014-03-19 15:04:00', '2014-03-19 15:00:41');
INSERT INTO `wz_admin_module_edit_field` VALUES (35, 2, 'Màu sắc', 'select_foreign_table', 'color', 1, '{"table_foreign":"wz_color","table_foreign_field":"name","multiple":0}', 6, 1, '2014-04-08 16:37:18', '2013-11-07 14:14:48');
INSERT INTO `wz_admin_module_edit_field` VALUES (36, 2, 'Tiếng việt', 'group', 'tieng-viet', 0, '', 7, 1, '2013-11-08 10:00:47', '2013-11-08 10:00:47');
INSERT INTO `wz_admin_module_edit_field` VALUES (37, 2, 'Color', 'color', 'rgba', 1, '', 4, 1, '2013-11-15 15:55:38', '2013-11-15 15:55:38');
INSERT INTO `wz_admin_module_edit_field` VALUES (38, 2, 'Đệ quy', 'select_foreign_recursive', 'recursive', 1, '{"table_foreign":"wz_article","table_foreign_field":"name","multiple":0}', 8, 1, '2013-11-16 11:07:01', '2013-11-16 11:07:01');
INSERT INTO `wz_admin_module_edit_field` VALUES (39, 9, 'Hình ảnh', 'file', 'image', 0, '{"directory":"uploads\\/product\\/images\\/","extension":"jpg|jpeg|png"}', 3, 1, '2014-03-14 16:41:17', '2014-03-14 16:41:17');
INSERT INTO `wz_admin_module_edit_field` VALUES (40, 9, 'Gallery', 'file_multiupload', 'gallery', 0, '{"directory":"uploads\\/product\\/gallery\\/","extension":"jpg|jpeg|png"}', 4, 1, '2014-03-15 10:28:11', '2014-03-14 17:19:03');
INSERT INTO `wz_admin_module_edit_field` VALUES (41, 9, 'Tags', 'tags', 'tags', 1, '', 5, 1, '2014-03-26 15:28:15', '2014-03-15 10:31:05');
INSERT INTO `wz_admin_module_edit_field` VALUES (45, 9, 'Tên sản phẩm', 'text', 'name', 1, '', 1, 1, '2014-03-19 14:48:58', '2014-03-19 14:48:58');
INSERT INTO `wz_admin_module_edit_field` VALUES (88, 11, 'Slug EN', 'slug', 'slug_en', 0, '{"field_to_slug":"87"}', 4, 1, '2014-04-21 15:13:26', '2014-04-21 15:13:26');
INSERT INTO `wz_admin_module_edit_field` VALUES (89, 9, 'Price', 'price', 'price', 1, '', 0, 1, '2014-04-21 16:14:35', '2014-04-21 16:14:35');
INSERT INTO `wz_admin_module_edit_field` VALUES (86, 9, 'Category', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_product_category","table_foreign_field":"name","language":0,"multiple":0}', 0, 1, '2014-04-15 17:29:16', '2014-04-15 17:29:16');
INSERT INTO `wz_admin_module_edit_field` VALUES (87, 11, 'Title', 'text', 'title_en', 1, '{"unique":0}', 1, 1, '2014-04-21 15:05:54', '2014-04-21 15:05:54');
INSERT INTO `wz_admin_module_edit_field` VALUES (55, 9, 'Mô tả', 'textarea', 'description', 1, '', 2, 1, '2014-03-19 16:18:17', '2014-03-19 16:18:17');
INSERT INTO `wz_admin_module_edit_field` VALUES (57, 10, 'Tiêu đề', 'text', 'title', 1, '', 1, 1, '2014-04-05 10:24:26', '2014-04-05 10:24:26');
INSERT INTO `wz_admin_module_edit_field` VALUES (58, 10, 'Slug', 'slug', 'slug', 0, '{"field_to_slug":"57"}', 2, 1, '2014-04-05 10:24:46', '2014-04-05 10:24:46');
INSERT INTO `wz_admin_module_edit_field` VALUES (59, 10, 'Description', 'textarea', 'description', 1, '', 3, 1, '2014-04-05 10:25:26', '2014-04-05 10:25:26');
INSERT INTO `wz_admin_module_edit_field` VALUES (60, 10, 'Content', 'content', 'content', 1, '', 4, 1, '2014-04-05 10:25:44', '2014-04-05 10:25:44');
INSERT INTO `wz_admin_module_edit_field` VALUES (61, 10, 'Tags', 'tags', 'tags', 1, '', 5, 1, '2014-04-05 10:25:57', '2014-04-05 10:25:57');
INSERT INTO `wz_admin_module_edit_field` VALUES (62, 10, 'Thể loại', 'select_foreign_table', 'pid', 1, '{"table_foreign":"wz_news_category","table_foreign_field":"name","multiple":0}', 0, 1, '2014-04-05 10:27:23', '2014-04-05 10:27:23');
INSERT INTO `wz_admin_module_edit_field` VALUES (63, 10, 'Image', 'file', 'image', 1, '{"directory":"uploads\\/test\\/image\\/","extension":"jpg|jpeg|png"}', 7, 1, '2014-04-05 10:33:57', '2014-04-05 10:33:57');
INSERT INTO `wz_admin_module_edit_field` VALUES (64, 10, 'Gallery', 'file_multiupload', 'gallery', 1, '{"directory":"uploads\\/test\\/gallery\\/","extension":"jpg|jpeg|png"}', 6, 1, '2014-04-05 10:34:37', '2014-04-05 10:34:37');
INSERT INTO `wz_admin_module_edit_field` VALUES (65, 11, 'Tiêu đề', 'text', 'title_vi', 1, '{"unique":0}', 3, 1, '2014-04-21 15:05:26', '2014-04-05 11:18:13');
INSERT INTO `wz_admin_module_edit_field` VALUES (66, 11, 'Slug VI', 'slug', 'slug_vi', 0, '{"field_to_slug":"65"}', 2, 1, '2014-04-21 15:13:05', '2014-04-05 11:19:00');
INSERT INTO `wz_admin_module_edit_field` VALUES (67, 11, 'Mô tả', 'textarea', 'description', 1, '', 9, 1, '2014-04-05 11:19:17', '2014-04-05 11:19:17');
INSERT INTO `wz_admin_module_edit_field` VALUES (68, 11, 'Nội dung', 'content', 'content', 1, '', 10, 1, '2014-04-05 11:19:40', '2014-04-05 11:19:40');
INSERT INTO `wz_admin_module_edit_field` VALUES (78, 12, 'Logo', 'file', 'logo', 1, '{"directory":"uploads\\/channel\\/logo\\/","extension":"jpg|png"}', 1, 1, '2014-04-08 10:06:35', '2014-04-08 10:06:35');
INSERT INTO `wz_admin_module_edit_field` VALUES (75, 11, 'Meta keyword', 'text', 'meta_keyword', 0, '', 11, 1, '2014-04-08 09:50:07', '2014-04-08 09:50:07');
INSERT INTO `wz_admin_module_edit_field` VALUES (76, 11, 'Meta description', 'text', 'meta_description', 0, '', 12, 1, '2014-04-08 09:50:27', '2014-04-08 09:50:27');
INSERT INTO `wz_admin_module_edit_field` VALUES (77, 12, 'Tên', 'text', 'name', 1, '', 0, 1, '2014-04-08 10:06:00', '2014-04-08 10:06:00');
INSERT INTO `wz_admin_module_edit_field` VALUES (71, 11, 'Tags', 'tags', 'tags', 1, '', 13, 1, '2014-04-05 11:25:49', '2014-04-05 11:25:49');
INSERT INTO `wz_admin_module_edit_field` VALUES (79, 12, 'Link', 'text', 'link', 1, '', 2, 1, '2014-04-08 10:06:52', '2014-04-08 10:06:52');
INSERT INTO `wz_admin_module_edit_field` VALUES (74, 2, 'English', 'group', 'english', 0, '', 5, 1, '2014-04-05 11:57:47', '2014-04-05 11:57:47');
INSERT INTO `wz_admin_module_edit_field` VALUES (80, 2, 'IDS', 'ids', 'ids', 0, '', 2, 1, '2014-04-08 16:30:30', '2014-04-08 16:30:30');
INSERT INTO `wz_admin_module_edit_field` VALUES (81, 11, 'Category', 'select_foreign_table', 'pid', 0, '{"table_foreign":"wz_test_category","table_foreign_field":"name_vi","language":1,"multiple":0}', 0, 1, '2014-04-21 14:44:25', '2014-04-10 11:27:52');
INSERT INTO `wz_admin_module_edit_field` VALUES (82, 11, 'Đệ quy', 'select_foreign_recursive', 'article', 0, '{"table_foreign":"wz_test_article","table_foreign_field":"name_vi","language":1,"multiple":0}', 8, 1, '2014-04-11 17:39:04', '2014-04-11 17:39:04');
INSERT INTO `wz_admin_module_edit_field` VALUES (83, 11, 'Province', 'select_foreign_table', 'province', 0, '{"table_foreign":"wz_test_province","table_foreign_field":"name_vi","language":1,"multiple":0}', 5, 1, '2014-04-11 22:02:17', '2014-04-11 22:00:10');
INSERT INTO `wz_admin_module_edit_field` VALUES (84, 11, 'District', 'select_foreign_table_children', 'district', 0, '{"table_foreign":"wz_test_district","table_foreign_field":"name_vi","parent_field":"83","language":1,"multiple":0}', 7, 1, '2014-04-11 22:08:30', '2014-04-11 22:01:37');
INSERT INTO `wz_admin_module_edit_field` VALUES (85, 11, 'IDS', 'ids', 'ids', 0, '', 6, 1, '2014-04-12 11:58:46', '2014-04-12 11:58:46');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_module_list_field`
-- 

DROP TABLE IF EXISTS `wz_admin_module_list_field`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_list_field` (
  `id` int(11) NOT NULL auto_increment,
  `mid` int(11) default '0' COMMENT 'Module ID',
  `name` varchar(255) default NULL,
  `type` varchar(255) default NULL,
  `data` text,
  `order` int(11) default '0',
  `status` tinyint(4) default '1',
  `changed` datetime default NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dumping data for table `wz_admin_module_list_field`
-- 

INSERT INTO `wz_admin_module_list_field` VALUES (1, 2, 'Tiêu đề', 'primary', '{"foreign_field":"","primary_field":"title","table_foreign_field":"","table_type":"primary"}', 4, 1, '2013-11-05 10:08:12', '2013-09-25 12:26:36');
INSERT INTO `wz_admin_module_list_field` VALUES (19, 2, 'Maps', 'primary', '{"foreign_field":"","primary_field":"maps","table_foreign_field":"","table_type":"primary"}', 1, 1, '2013-11-05 10:08:05', '2013-10-31 14:33:45');
INSERT INTO `wz_admin_module_list_field` VALUES (18, 2, 'Video', 'primary', '{"foreign_field":"","primary_field":"video","table_foreign_field":"","table_type":"primary"}', 3, 1, '2013-10-31 10:08:42', '2013-10-30 17:23:42');
INSERT INTO `wz_admin_module_list_field` VALUES (17, 8, 'Nội dung', 'primary', '{"foreign_field":"","primary_field":"content","table_foreign_field":"","table_type":"primary"}', 0, 1, '2013-10-24 12:46:09', '2013-10-24 12:46:09');
INSERT INTO `wz_admin_module_list_field` VALUES (24, 2, 'Thể loại', 'foreign', '{"foreign_field":"pid|wz_news_category","primary_field":"","table_foreign_field":"name","table_type":"foreign"}', 2, 1, '2013-11-18 17:00:04', '2013-11-18 16:54:54');
INSERT INTO `wz_admin_module_list_field` VALUES (26, 2, 'Tiêu đề', 'primary', '{"foreign_field":"","primary_field":"title","table_foreign_field":"","table_type":"primary","language":0}', 0, 0, '2014-04-22 15:18:47', '2013-12-17 15:07:46');
INSERT INTO `wz_admin_module_list_field` VALUES (27, 2, 'Select', 'primary', '{"foreign_field":"","primary_field":"select","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-03-14 10:51:47', '2014-03-14 10:47:26');
INSERT INTO `wz_admin_module_list_field` VALUES (28, 2, 'Date', 'primary', '{"foreign_field":"","primary_field":"datetime_picker","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-03-19 16:56:17', '2014-03-19 16:56:17');
INSERT INTO `wz_admin_module_list_field` VALUES (29, 2, 'Radio', 'primary', '{"foreign_field":"","primary_field":"radio","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-02 10:18:41', '2014-04-02 10:18:41');
INSERT INTO `wz_admin_module_list_field` VALUES (34, 11, '{title}', 'primary', '{"foreign_field":"","primary_field":"title_vi","table_foreign_field":"","table_type":"primary","language":1}', 1, 1, '2014-04-21 17:37:45', '2014-04-05 11:23:48');
INSERT INTO `wz_admin_module_list_field` VALUES (41, 11, 'Category', 'foreign', '{"foreign_field":"pid|wz_test_category","primary_field":"pid","table_foreign_field":"name_vi","table_type":"foreign","language":1}', 0, 1, '2014-04-21 14:47:18', '2014-04-21 14:29:41');
INSERT INTO `wz_admin_module_list_field` VALUES (36, 12, 'Tên', 'primary', '{"foreign_field":"","primary_field":"name","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:12:45', '2014-04-08 10:12:45');
INSERT INTO `wz_admin_module_list_field` VALUES (37, 12, 'Logo', 'primary', '{"foreign_field":"","primary_field":"logo","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:17:58', '2014-04-08 10:17:58');
INSERT INTO `wz_admin_module_list_field` VALUES (38, 12, 'Link', 'primary', '{"foreign_field":"","primary_field":"link","table_foreign_field":"","table_type":"primary"}', 0, 1, '2014-04-08 10:18:11', '2014-04-08 10:18:11');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_module_list_filter`
-- 

DROP TABLE IF EXISTS `wz_admin_module_list_filter`;
CREATE TABLE IF NOT EXISTS `wz_admin_module_list_filter` (
  `id` int(11) NOT NULL auto_increment,
  `mid` int(11) default NULL,
  `name` varchar(255) default NULL,
  `where` text,
  `order` int(11) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `wz_admin_module_list_filter`
-- 

INSERT INTO `wz_admin_module_list_filter` VALUES (3, 2, 'Giải trí', 'pid = 1', 0, 1, '2014-04-14 15:04:24', '2014-04-14 15:04:24');
INSERT INTO `wz_admin_module_list_filter` VALUES (4, 2, 'Thể thao', 'pid = 2', 0, 1, '2014-04-14 15:04:35', '2014-04-14 15:04:35');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_role`
-- 

DROP TABLE IF EXISTS `wz_admin_role`;
CREATE TABLE IF NOT EXISTS `wz_admin_role` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `weight` int(11) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `wz_admin_role`
-- 

INSERT INTO `wz_admin_role` VALUES (1, 'Content News', 1, 1, '2014-05-09 10:45:59', '2013-10-22 16:38:59');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_role_permission`
-- 

DROP TABLE IF EXISTS `wz_admin_role_permission`;
CREATE TABLE IF NOT EXISTS `wz_admin_role_permission` (
  `id` int(11) NOT NULL auto_increment,
  `rid` int(11) default NULL COMMENT 'Rule ID',
  `mid` int(11) default NULL COMMENT 'Module ID',
  `permission` varchar(64) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `wz_admin_role_permission`
-- 

INSERT INTO `wz_admin_role_permission` VALUES (16, 1, 13, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');
INSERT INTO `wz_admin_role_permission` VALUES (11, 1, 14, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');
INSERT INTO `wz_admin_role_permission` VALUES (12, 1, 20, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');
INSERT INTO `wz_admin_role_permission` VALUES (13, 1, 15, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');
INSERT INTO `wz_admin_role_permission` VALUES (15, 1, 17, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');
INSERT INTO `wz_admin_role_permission` VALUES (14, 1, 18, '{"manage":0,"read":1,"edit":0,"delete":0}', 1, '2014-05-09 10:45:59', '2014-05-09 10:45:59');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_setting`
-- 

DROP TABLE IF EXISTS `wz_admin_setting`;
CREATE TABLE IF NOT EXISTS `wz_admin_setting` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `language` text,
  `maintenance` tinyint(1) default NULL,
  `maintenance_text` text,
  `email` varchar(64) default NULL,
  `password` varchar(64) default NULL,
  `ga` int(11) default NULL,
  `tracking` text,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `wz_admin_setting`
-- 

INSERT INTO `wz_admin_setting` VALUES (1, 'Admin wizard', 'vi|Tiếng việt\r\nen|English', 0, 'Trang web đang được bảo trì', 'mail.wizardww@gmail.com', 'Mwizardww@', 77753528, '&lt;script type=&quot;text/javascript&quot;&gt;\r\n  var _gaq = _gaq || [];\r\n  _gaq.push([''_setAccount'', ''UA-44837831-1'']);\r\n  _gaq.push([''_trackPageview'']);\r\n\r\n  (function() {\r\n    var ga = document.createElement(''script''); ga.type = ''text/javascript''; ga.async = true;\r\n    ga.src = (''https:'' == document.location.protocol ? ''https://ssl'' : ''http://www'') + ''.google-analytics.com/ga.js'';\r\n    var s = document.getElementsByTagName(''script'')[0]; s.parentNode.insertBefore(ga, s);\r\n  })();\r\n&lt;/script&gt;', 1, '2013-10-28 16:58:58', '2013-10-28 16:59:02');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_admin_user`
-- 

DROP TABLE IF EXISTS `wz_admin_user`;
CREATE TABLE IF NOT EXISTS `wz_admin_user` (
  `id` int(11) NOT NULL auto_increment,
  `rid` int(11) default NULL COMMENT 'Rule ID',
  `fullname` varchar(64) default NULL,
  `username` varchar(32) default NULL,
  `password` varchar(32) default NULL,
  `email` varchar(64) default NULL,
  `avatar` text,
  `history_ip` text,
  `randomkey` varchar(64) default NULL,
  `admin` tinyint(1) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `wz_admin_user`
-- 

INSERT INTO `wz_admin_user` VALUES (1, 0, 'Trần Sáng Lập', 'admin', '37900c3ba245ed6761dc79e68710b76d', 'lap.transang@gmail.com', '{"x1":0,"x2":0,"y1":0,"y2":0,"zoom":0,"url":"2014\\/05\\/07\\/2bf2adc763b6ac9e38acfb3c88b8f3db_1399431563.jpg"}', NULL, 'd3a3e1b61a6213ff526efceb6d9fa209', 1, 1, '2013-11-04 10:29:32', '2013-09-10 14:39:45');
INSERT INTO `wz_admin_user` VALUES (3, 1, 'Kha Yến Nhi', 'nhi.khayen', '2c9e5f0698129faab4806d83d236bff1', 'nhi.khayen@gmail.com', '{"x1":"-89","x2":"364","y1":"-63","y2":"616","zoom":"22","url":"uploads\\/admin\\/user\\/avatar\\/2014\\/01\\/16\\/3df0beda0d7bd13f46ca8207c9dcbb50_1389868256.jpg"}', NULL, NULL, 0, 1, '2014-05-06 17:21:21', '2013-10-22 18:53:03');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_article`
-- 

DROP TABLE IF EXISTS `wz_article`;
CREATE TABLE IF NOT EXISTS `wz_article` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL,
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `wz_article`
-- 

INSERT INTO `wz_article` VALUES (1, 0, 'Giới thiệu', NULL, '2013-11-11 10:47:22', '2013-11-11 10:47:22');
INSERT INTO `wz_article` VALUES (2, 0, 'Lĩnh vực', NULL, '2013-11-11 10:47:22', '2013-11-11 10:47:22');
INSERT INTO `wz_article` VALUES (3, 1, 'Thông điệp', NULL, '2013-11-11 10:47:44', '2013-11-11 10:47:47');
INSERT INTO `wz_article` VALUES (4, 2, 'Bất động sản', NULL, '2013-11-11 10:47:44', '2013-11-11 10:47:44');
INSERT INTO `wz_article` VALUES (5, 3, 'Trách nhiệm xã hội', NULL, '2013-11-11 10:48:58', '2013-11-11 10:48:58');
INSERT INTO `wz_article` VALUES (6, 1, 'Công ty', NULL, '2013-11-16 11:28:58', '2013-11-16 11:28:58');
INSERT INTO `wz_article` VALUES (7, 1, 'Lịch sử', NULL, '2013-11-16 11:28:58', '2013-11-16 11:28:58');
INSERT INTO `wz_article` VALUES (8, 3, 'Trường học', NULL, '2013-11-16 11:30:39', '2013-11-16 11:30:39');
INSERT INTO `wz_article` VALUES (9, 3, 'Cộng đồng', NULL, '2013-11-16 11:30:39', '2013-11-16 11:30:39');
INSERT INTO `wz_article` VALUES (10, 8, 'Cấp 1', NULL, '2013-11-16 11:31:07', '2013-11-16 11:31:07');
INSERT INTO `wz_article` VALUES (11, 8, 'Cấp 2', NULL, '2013-11-16 11:31:07', '2013-11-16 11:31:07');
INSERT INTO `wz_article` VALUES (12, 10, 'Cấp a', NULL, '2013-11-16 11:31:39', '2013-11-16 11:31:39');
INSERT INTO `wz_article` VALUES (13, 10, 'Cấp b', NULL, '2013-11-16 11:31:39', '2013-11-16 11:31:39');
INSERT INTO `wz_article` VALUES (14, 4, 'Nhà đất', NULL, '2013-11-16 16:09:43', '2013-11-16 16:09:45');
INSERT INTO `wz_article` VALUES (15, 4, 'Nhà ở', NULL, '2013-11-16 16:09:43', '2013-11-16 16:09:43');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_channel`
-- 

DROP TABLE IF EXISTS `wz_channel`;
CREATE TABLE IF NOT EXISTS `wz_channel` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `logo` varchar(128) default NULL,
  `link` varchar(255) default NULL,
  `status` tinyint(1) default NULL,
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `wz_channel`
-- 

INSERT INTO `wz_channel` VALUES (1, 'Test', '2014/04/08/dabf157cc751a57e9f9ef136432c5e28_1396927817.jpg', 'https://www.google.com.vn/', 1, '2014-04-08 10:30:54', '2014-04-08 10:30:54');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_color`
-- 

DROP TABLE IF EXISTS `wz_color`;
CREATE TABLE IF NOT EXISTS `wz_color` (
  `id` smallint(3) NOT NULL auto_increment,
  `name` varchar(99) NOT NULL,
  `code` varchar(99) NOT NULL,
  `code2_hex` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  `order` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `changed` datetime default NULL,
  `slug` varchar(99) default NULL,
  `type` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `wz_color`
-- 

INSERT INTO `wz_color` VALUES (1, 'Bạc', 'Silver', 'c0c0c0', 1, 8, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'bac', 0);
INSERT INTO `wz_color` VALUES (2, 'Cam', 'Orange', 'ffa500', 1, 5, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'cam', 0);
INSERT INTO `wz_color` VALUES (3, 'Đen', 'Black', '000000', 1, 12, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'den', 0);
INSERT INTO `wz_color` VALUES (4, 'Đỏ', 'Red', 'ff0000', 1, 6, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'do', 0);
INSERT INTO `wz_color` VALUES (5, 'Hồng', 'Pink', 'ffc0cb', 1, 4, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'hong', 0);
INSERT INTO `wz_color` VALUES (6, 'Kem', '#FFFDD0', 'fffdd0', 1, 3, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'kem', 0);
INSERT INTO `wz_color` VALUES (7, 'Nâu', 'Brown', 'a52a2a', 1, 9, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'nau', 0);
INSERT INTO `wz_color` VALUES (9, 'Tím', 'Violet', 'ee82ee', 1, 7, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'tim', 0);
INSERT INTO `wz_color` VALUES (10, 'Trắng', 'White', 'ffffff', 1, 2, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'trang', 0);
INSERT INTO `wz_color` VALUES (11, 'Vàng', 'Yellow', 'ffff00', 1, 1, '2011-06-17 12:05:39', '2013-02-28 16:27:54', 'vang', 0);
INSERT INTO `wz_color` VALUES (12, 'Xám', 'Gray', '808080', 1, 10, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'xam', 0);
INSERT INTO `wz_color` VALUES (13, 'Xanh', 'Blue', '0000ff', 1, 11, '2011-06-17 12:05:39', '2011-06-17 12:05:43', 'xanh', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_comment`
-- 

DROP TABLE IF EXISTS `wz_comment`;
CREATE TABLE IF NOT EXISTS `wz_comment` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL COMMENT 'Parent ID',
  `nid` int(11) default NULL COMMENT 'Content ID',
  `uid` int(11) default NULL,
  `type` varchar(64) default NULL,
  `image` varchar(64) default NULL,
  `video` varchar(255) default NULL,
  `content` text,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

-- 
-- Dumping data for table `wz_comment`
-- 

INSERT INTO `wz_comment` VALUES (1, 0, 1, 1, 'news', NULL, NULL, '1', 1, '2014-02-18 14:09:16', '2014-02-18 14:09:16');
INSERT INTO `wz_comment` VALUES (2, 0, 1, 1, 'news', NULL, NULL, '2', 1, '2014-02-18 14:09:18', '2014-02-18 14:09:18');
INSERT INTO `wz_comment` VALUES (3, 0, 1, 1, 'news', NULL, NULL, '3', 1, '2014-02-18 14:09:19', '2014-02-18 14:09:19');
INSERT INTO `wz_comment` VALUES (4, 0, 1, 1, 'news', NULL, NULL, '4', 1, '2014-02-18 14:09:20', '2014-02-18 14:09:20');
INSERT INTO `wz_comment` VALUES (5, 0, 1, 1, 'news', NULL, NULL, '5', 1, '2014-02-18 14:09:21', '2014-02-18 14:09:21');
INSERT INTO `wz_comment` VALUES (6, 0, 1, 1, 'news', NULL, NULL, '6', 1, '2014-02-18 14:09:23', '2014-02-18 14:09:23');
INSERT INTO `wz_comment` VALUES (7, 0, 1, 1, 'news', NULL, NULL, '7', 1, '2014-02-18 14:09:25', '2014-02-18 14:09:25');
INSERT INTO `wz_comment` VALUES (8, 0, 1, 1, 'news', NULL, NULL, '8', 1, '2014-02-18 14:09:27', '2014-02-18 14:09:27');
INSERT INTO `wz_comment` VALUES (9, 0, 1, 1, 'news', NULL, NULL, '9', 1, '2014-02-18 14:09:29', '2014-02-18 14:09:29');
INSERT INTO `wz_comment` VALUES (10, 0, 1, 1, 'news', NULL, NULL, '10', 1, '2014-02-18 14:09:43', '2014-02-18 14:09:43');
INSERT INTO `wz_comment` VALUES (11, 0, 1, 1, 'news', NULL, NULL, '11', 1, '2014-02-18 14:09:45', '2014-02-18 14:09:45');
INSERT INTO `wz_comment` VALUES (12, 0, 1, 1, 'news', NULL, NULL, '12', 1, '2014-02-18 14:10:01', '2014-02-18 14:10:01');
INSERT INTO `wz_comment` VALUES (13, 0, 1, 1, 'news', NULL, NULL, '13', 1, '2014-02-18 14:10:47', '2014-02-18 14:10:47');
INSERT INTO `wz_comment` VALUES (14, 0, 1, 1, 'news', NULL, NULL, '14', 1, '2014-02-18 14:29:34', '2014-02-18 14:29:34');
INSERT INTO `wz_comment` VALUES (15, 0, 1, 1, 'news', NULL, NULL, '15', 1, '2014-02-18 14:29:39', '2014-02-18 14:29:39');
INSERT INTO `wz_comment` VALUES (16, 0, 1, 1, 'news', NULL, NULL, '16', 1, '2014-02-18 14:29:41', '2014-02-18 14:29:41');
INSERT INTO `wz_comment` VALUES (17, 0, 1, 1, 'news', NULL, NULL, '17', 1, '2014-02-18 14:29:43', '2014-02-18 14:29:43');
INSERT INTO `wz_comment` VALUES (18, 0, 1, 1, 'news', NULL, NULL, '18', 1, '2014-02-18 14:29:46', '2014-02-18 14:29:46');
INSERT INTO `wz_comment` VALUES (19, 0, 1, 1, 'news', NULL, NULL, '19', 1, '2014-02-18 14:29:52', '2014-02-18 14:29:52');
INSERT INTO `wz_comment` VALUES (20, 0, 1, 1, 'news', NULL, NULL, '20', 1, '2014-02-18 14:29:54', '2014-02-18 14:29:54');
INSERT INTO `wz_comment` VALUES (21, 0, 1, 1, 'news', NULL, NULL, '21', 1, '2014-02-18 14:29:56', '2014-02-18 14:29:56');
INSERT INTO `wz_comment` VALUES (22, 0, 1, 1, 'news', NULL, NULL, '22', 1, '2014-02-18 14:32:13', '2014-02-18 14:32:13');
INSERT INTO `wz_comment` VALUES (23, 0, 1, 1, 'news', NULL, NULL, '23', 1, '2014-02-18 14:32:23', '2014-02-18 14:32:23');
INSERT INTO `wz_comment` VALUES (24, 0, 1, 1, 'news', NULL, NULL, '24', 1, '2014-02-18 14:32:26', '2014-02-18 14:32:26');
INSERT INTO `wz_comment` VALUES (25, 0, 1, 1, 'news', NULL, NULL, '25', 1, '2014-02-18 14:32:28', '2014-02-18 14:32:28');
INSERT INTO `wz_comment` VALUES (26, 0, 1, 1, 'news', NULL, NULL, '26', 1, '2014-02-18 14:32:30', '2014-02-18 14:32:30');
INSERT INTO `wz_comment` VALUES (27, 0, 1, 1, 'news', NULL, NULL, '27', 1, '2014-02-18 14:32:32', '2014-02-18 14:32:32');
INSERT INTO `wz_comment` VALUES (28, 0, 1, 1, 'news', NULL, NULL, '28', 1, '2014-02-18 14:32:34', '2014-02-18 14:32:34');
INSERT INTO `wz_comment` VALUES (29, 3, 1, 1, 'news', NULL, NULL, '3.1', 1, '2014-02-18 14:32:51', '2014-02-18 14:32:51');
INSERT INTO `wz_comment` VALUES (30, 2, 1, 1, 'news', NULL, NULL, '2.1', 1, '2014-02-18 14:33:20', '2014-02-18 14:33:20');
INSERT INTO `wz_comment` VALUES (31, 10, 1, 1, 'news', NULL, NULL, '10.1', 1, '2014-02-18 14:34:19', '2014-02-18 14:34:19');
INSERT INTO `wz_comment` VALUES (32, 1, 1, 1, 'news', NULL, NULL, '1.1', 1, '2014-02-18 14:34:28', '2014-02-18 14:34:28');
INSERT INTO `wz_comment` VALUES (33, 1, 1, 1, 'news', NULL, NULL, '1.2', 1, '2014-02-18 14:34:42', '2014-02-18 14:34:42');
INSERT INTO `wz_comment` VALUES (34, 1, 1, 1, 'news', NULL, NULL, '1.3', 1, '2014-02-18 14:34:47', '2014-02-18 14:34:47');
INSERT INTO `wz_comment` VALUES (35, 11, 1, 1, 'news', NULL, NULL, '11.1', 1, '2014-02-18 14:34:52', '2014-02-18 14:34:52');
INSERT INTO `wz_comment` VALUES (36, 10, 1, 1, 'news', NULL, NULL, '10.2', 1, '2014-02-18 14:35:03', '2014-02-18 14:35:03');
INSERT INTO `wz_comment` VALUES (37, 0, 1, 1, 'news', NULL, NULL, '29', 1, '2014-02-18 14:35:40', '2014-02-18 14:35:40');
INSERT INTO `wz_comment` VALUES (38, 0, 1, 1, 'news', NULL, NULL, '30', 1, '2014-02-18 14:37:58', '2014-02-18 14:37:58');
INSERT INTO `wz_comment` VALUES (39, 23, 1, 1, 'news', NULL, NULL, '23.1', 1, '2014-02-18 14:38:05', '2014-02-18 14:38:05');
INSERT INTO `wz_comment` VALUES (40, 15, 1, 1, 'news', NULL, NULL, '15.1', 1, '2014-02-18 14:38:11', '2014-02-18 14:38:11');
INSERT INTO `wz_comment` VALUES (41, 12, 1, 1, 'news', NULL, NULL, '12.1', 1, '2014-02-18 14:38:56', '2014-02-18 14:38:56');
INSERT INTO `wz_comment` VALUES (42, 38, 1, 1, 'news', NULL, NULL, '30.1', 1, '2014-02-18 14:55:41', '2014-02-18 14:55:41');
INSERT INTO `wz_comment` VALUES (43, 23, 1, 1, 'news', NULL, NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.', 1, '2014-02-18 14:57:06', '2014-02-18 14:57:06');
INSERT INTO `wz_comment` VALUES (44, 38, 1, 1, 'news', NULL, NULL, 'dsfdsfdfdf', 1, '2014-04-18 09:02:49', '2014-04-18 09:02:49');
INSERT INTO `wz_comment` VALUES (45, 38, 1, 1, 'news', NULL, NULL, 'ssssssssssssssss', 1, '2014-04-18 09:02:53', '2014-04-18 09:02:53');
INSERT INTO `wz_comment` VALUES (46, 38, 1, 1, 'news', NULL, NULL, 'sdfsdfsdf', 1, '2014-04-18 09:02:57', '2014-04-18 09:02:57');
INSERT INTO `wz_comment` VALUES (47, 38, 1, 1, 'news', NULL, NULL, 'fffffffffffffff', 1, '2014-04-18 09:03:00', '2014-04-18 09:03:00');
INSERT INTO `wz_comment` VALUES (48, 38, 1, 1, 'news', NULL, NULL, 'sdfsdf', 1, '2014-04-18 09:03:09', '2014-04-18 09:03:09');
INSERT INTO `wz_comment` VALUES (49, 38, 1, 1, 'news', NULL, NULL, 'sdfdfdsf', 1, '2014-04-18 09:03:12', '2014-04-18 09:03:12');
INSERT INTO `wz_comment` VALUES (50, 0, 1, 1, 'news', NULL, NULL, 'dfsdfdsfsdfdsfdsf\nsdfsdf\n', 1, '2014-04-18 09:19:43', '2014-04-18 09:19:43');
INSERT INTO `wz_comment` VALUES (51, 0, 1, 1, 'news', NULL, NULL, 'dfsdfdsfsdfdsfdsf\nsdfsdf\nsdfsdfs', 1, '2014-04-18 09:19:49', '2014-04-18 09:19:49');
INSERT INTO `wz_comment` VALUES (52, 0, 1, 1, 'news', NULL, NULL, 'sdfdsfdsf', 1, '2014-04-18 09:23:28', '2014-04-18 09:23:28');
INSERT INTO `wz_comment` VALUES (53, 0, 1, 1, 'news', NULL, NULL, 'fsdfsdf', 1, '2014-04-18 09:23:30', '2014-04-18 09:23:30');
INSERT INTO `wz_comment` VALUES (54, 38, 1, 1, 'news', NULL, NULL, 'fsdfafdf', 1, '2014-04-18 09:23:43', '2014-04-18 09:23:43');
INSERT INTO `wz_comment` VALUES (55, 38, 1, 1, 'news', NULL, NULL, 'safsdafds', 1, '2014-04-18 09:23:46', '2014-04-18 09:23:46');
INSERT INTO `wz_comment` VALUES (56, 38, 1, 1, 'news', NULL, NULL, 'sdfsdfsdf', 1, '2014-04-18 09:30:46', '2014-04-18 09:30:46');
INSERT INTO `wz_comment` VALUES (57, 38, 1, 1, 'news', NULL, NULL, '11111111111', 1, '2014-04-18 09:30:51', '2014-04-18 09:30:51');
INSERT INTO `wz_comment` VALUES (58, 38, 1, 1, 'news', NULL, NULL, 'sdfdsfsdf', 1, '2014-04-18 09:30:55', '2014-04-18 09:30:55');
INSERT INTO `wz_comment` VALUES (59, 0, 1, 1, 'news', NULL, NULL, 'sdfdsfsdfdsf', 1, '2014-04-18 09:41:32', '2014-04-18 09:41:32');
INSERT INTO `wz_comment` VALUES (60, 0, 1, 1, 'news', NULL, NULL, 'aaa', 1, '2014-04-18 09:41:35', '2014-04-18 09:41:35');
INSERT INTO `wz_comment` VALUES (61, 0, 1, 1, 'news', NULL, NULL, 'fsdf', 1, '2014-04-18 09:42:17', '2014-04-18 09:42:17');
INSERT INTO `wz_comment` VALUES (62, 0, 1, 1, 'news', NULL, NULL, 'sdfdsf', 1, '2014-04-18 09:42:19', '2014-04-18 09:42:19');
INSERT INTO `wz_comment` VALUES (63, 0, 1, 1, 'news', NULL, NULL, 'aaaaaaaaaaaaaaaa', 1, '2014-04-18 09:42:23', '2014-04-18 09:42:23');
INSERT INTO `wz_comment` VALUES (64, 0, 1, 1, 'news', NULL, NULL, 'dsfdsf', 1, '2014-04-18 09:42:39', '2014-04-18 09:42:39');
INSERT INTO `wz_comment` VALUES (65, 63, 1, 1, 'news', NULL, NULL, 'dfdsf', 1, '2014-04-18 09:44:02', '2014-04-18 09:44:02');
INSERT INTO `wz_comment` VALUES (66, 63, 1, 1, 'news', NULL, NULL, 'sdfsdf', 1, '2014-04-18 09:44:04', '2014-04-18 09:44:04');
INSERT INTO `wz_comment` VALUES (67, 63, 1, 1, 'news', NULL, NULL, 'aaaaaaaaaaaaa', 1, '2014-04-18 09:44:06', '2014-04-18 09:44:06');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_district`
-- 

DROP TABLE IF EXISTS `wz_district`;
CREATE TABLE IF NOT EXISTS `wz_district` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL COMMENT 'Parent ID',
  `order` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=679 ;

-- 
-- Dumping data for table `wz_district`
-- 

INSERT INTO `wz_district` VALUES (1, 8, 1, 'Q. 1', NULL);
INSERT INTO `wz_district` VALUES (2, 8, 2, 'Q. 2', NULL);
INSERT INTO `wz_district` VALUES (3, 8, 3, 'Q. 3', NULL);
INSERT INTO `wz_district` VALUES (4, 8, 4, 'Q. 4', NULL);
INSERT INTO `wz_district` VALUES (5, 8, 5, 'Q. 5', NULL);
INSERT INTO `wz_district` VALUES (6, 8, 6, 'Q. 6', NULL);
INSERT INTO `wz_district` VALUES (7, 8, 7, 'Q. 7', NULL);
INSERT INTO `wz_district` VALUES (8, 8, 8, 'Q. 8', NULL);
INSERT INTO `wz_district` VALUES (9, 8, 9, 'Q. 9', NULL);
INSERT INTO `wz_district` VALUES (10, 8, 10, 'Q. 10', NULL);
INSERT INTO `wz_district` VALUES (11, 8, 11, 'Q. 11', NULL);
INSERT INTO `wz_district` VALUES (12, 8, 12, 'Q. 12', NULL);
INSERT INTO `wz_district` VALUES (13, 8, 13, 'Q. Bình Thạnh', NULL);
INSERT INTO `wz_district` VALUES (14, 8, 13, 'Q. Bình Tân', NULL);
INSERT INTO `wz_district` VALUES (15, 8, 13, 'Q. Gò Vấp', NULL);
INSERT INTO `wz_district` VALUES (16, 8, 13, 'Q. Phú Nhuận', NULL);
INSERT INTO `wz_district` VALUES (17, 8, 13, 'Q. Tân Bình', NULL);
INSERT INTO `wz_district` VALUES (18, 8, 13, 'Q. Tân Phú', NULL);
INSERT INTO `wz_district` VALUES (19, 8, 13, 'Q. Thủ Đức', NULL);
INSERT INTO `wz_district` VALUES (20, 8, 14, 'H. Bình Chánh', NULL);
INSERT INTO `wz_district` VALUES (21, 8, 14, 'H. Cần Giờ', NULL);
INSERT INTO `wz_district` VALUES (22, 8, 14, 'H. Củ Chi', NULL);
INSERT INTO `wz_district` VALUES (23, 8, 14, 'H. Hóc Môn', NULL);
INSERT INTO `wz_district` VALUES (24, 8, 14, 'H. Nhà Bè', NULL);
INSERT INTO `wz_district` VALUES (25, 4, 13, 'Q. Ba Đình', NULL);
INSERT INTO `wz_district` VALUES (26, 4, 13, 'Q. Cầu Giấy', NULL);
INSERT INTO `wz_district` VALUES (27, 4, 13, 'Q. Đống Đa', NULL);
INSERT INTO `wz_district` VALUES (28, 4, 13, 'Q. Hai Bà Trưng', NULL);
INSERT INTO `wz_district` VALUES (29, 4, 2, 'Q. Hoàn Kiếm', NULL);
INSERT INTO `wz_district` VALUES (30, 4, 13, 'Q. Long Biên', NULL);
INSERT INTO `wz_district` VALUES (31, 4, 13, 'Q. Tây Hồ', NULL);
INSERT INTO `wz_district` VALUES (32, 4, 13, 'Q. Thanh Xuân', NULL);
INSERT INTO `wz_district` VALUES (33, 4, 13, 'Q. Hoàng Mai', NULL);
INSERT INTO `wz_district` VALUES (34, 4, 14, 'H. Đông Anh', NULL);
INSERT INTO `wz_district` VALUES (35, 4, 14, 'H. Gia Lâm', NULL);
INSERT INTO `wz_district` VALUES (36, 4, 14, 'H. Sóc Sơn', NULL);
INSERT INTO `wz_district` VALUES (37, 4, 14, 'H. Thanh Trì', NULL);
INSERT INTO `wz_district` VALUES (38, 4, 14, 'H. Từ Liêm', NULL);
INSERT INTO `wz_district` VALUES (39, 710, 15, 'TP. Cần Thơ', NULL);
INSERT INTO `wz_district` VALUES (40, 710, 13, 'Q. Bình Thủy', NULL);
INSERT INTO `wz_district` VALUES (41, 710, 13, 'Q. Ninh Kiều', NULL);
INSERT INTO `wz_district` VALUES (42, 710, 13, 'Q. Cái Răng', NULL);
INSERT INTO `wz_district` VALUES (43, 710, 13, 'Q. Ô Môn', NULL);
INSERT INTO `wz_district` VALUES (44, 710, 14, 'H. Thốt Nốt', NULL);
INSERT INTO `wz_district` VALUES (45, 710, 14, 'H. Cờ Đỏ', NULL);
INSERT INTO `wz_district` VALUES (46, 710, 14, 'H. Phong Điền', NULL);
INSERT INTO `wz_district` VALUES (47, 710, 14, 'H. Vĩnh Thạnh', NULL);
INSERT INTO `wz_district` VALUES (48, 711, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (49, 711, 14, 'H. Long Mỹ', NULL);
INSERT INTO `wz_district` VALUES (50, 711, 14, 'H. Phụng Hiệp', NULL);
INSERT INTO `wz_district` VALUES (51, 711, 14, 'H. Châu Thành A', NULL);
INSERT INTO `wz_district` VALUES (52, 711, 14, 'H. Vị Thủy', NULL);
INSERT INTO `wz_district` VALUES (53, 711, 15, 'TX. Vị Thanh', NULL);
INSERT INTO `wz_district` VALUES (54, 511, 13, 'Q. Hải Châu', NULL);
INSERT INTO `wz_district` VALUES (55, 511, 13, 'Q. Liên Chiểu', NULL);
INSERT INTO `wz_district` VALUES (56, 511, 13, 'Q. Ngũ Hành Sơn', NULL);
INSERT INTO `wz_district` VALUES (57, 511, 13, 'Q. Sơn Trà', NULL);
INSERT INTO `wz_district` VALUES (58, 511, 13, 'Q. Thanh Khê', NULL);
INSERT INTO `wz_district` VALUES (59, 511, 14, 'H. Hòa Vang', NULL);
INSERT INTO `wz_district` VALUES (60, 511, 14, 'H. Hoàng Sa', NULL);
INSERT INTO `wz_district` VALUES (61, 241, 15, 'TP. Bắc Ninh', NULL);
INSERT INTO `wz_district` VALUES (62, 241, 14, 'H. Gia Bình', NULL);
INSERT INTO `wz_district` VALUES (63, 241, 14, 'H. Quế Võ', NULL);
INSERT INTO `wz_district` VALUES (64, 241, 14, 'H. Thuận Thành', NULL);
INSERT INTO `wz_district` VALUES (65, 241, 14, 'H. Tiên Du', NULL);
INSERT INTO `wz_district` VALUES (66, 241, 14, 'H. Yên Phong', NULL);
INSERT INTO `wz_district` VALUES (67, 241, 14, 'H. Từ  Sơn', NULL);
INSERT INTO `wz_district` VALUES (68, 241, 14, 'H. Lương Tài', NULL);
INSERT INTO `wz_district` VALUES (69, 75, 15, 'TX. Bến Tre', NULL);
INSERT INTO `wz_district` VALUES (70, 75, 14, 'H. Ba Tri', NULL);
INSERT INTO `wz_district` VALUES (71, 75, 14, 'H. Bình Đại', NULL);
INSERT INTO `wz_district` VALUES (72, 75, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (73, 75, 14, 'H. Chợ Lách', NULL);
INSERT INTO `wz_district` VALUES (74, 75, 14, 'H. Giồng Trôm', NULL);
INSERT INTO `wz_district` VALUES (75, 75, 14, 'H. Mỏ Cày', NULL);
INSERT INTO `wz_district` VALUES (76, 75, 14, 'H. Thạnh Phú', NULL);
INSERT INTO `wz_district` VALUES (77, 56, 15, 'TX. Thủ Dầu Một', NULL);
INSERT INTO `wz_district` VALUES (78, 56, 14, 'H. Bến Cát', NULL);
INSERT INTO `wz_district` VALUES (79, 56, 14, 'H. Tân Uyên', NULL);
INSERT INTO `wz_district` VALUES (80, 56, 14, 'H. Thuận An', NULL);
INSERT INTO `wz_district` VALUES (81, 56, 14, 'H. Dầu Tiếng', NULL);
INSERT INTO `wz_district` VALUES (82, 56, 14, 'H. Phú Giáo', NULL);
INSERT INTO `wz_district` VALUES (83, 56, 14, 'H. Dĩ An', NULL);
INSERT INTO `wz_district` VALUES (84, 650, 15, 'TP. Quy Nhơn', NULL);
INSERT INTO `wz_district` VALUES (85, 650, 3, 'H. An Lão', NULL);
INSERT INTO `wz_district` VALUES (86, 650, 14, 'H. An Nhơn', NULL);
INSERT INTO `wz_district` VALUES (87, 650, 14, 'H. Hoài An', NULL);
INSERT INTO `wz_district` VALUES (88, 650, 14, 'H. Hoài Nhơn', NULL);
INSERT INTO `wz_district` VALUES (89, 650, 14, 'H. Phù Cát', NULL);
INSERT INTO `wz_district` VALUES (90, 650, 14, 'H. Phù Mỹ', NULL);
INSERT INTO `wz_district` VALUES (91, 650, 14, 'H. Tuy Phước', NULL);
INSERT INTO `wz_district` VALUES (92, 650, 14, 'H. Tây Sơn', NULL);
INSERT INTO `wz_district` VALUES (93, 650, 14, 'H. Vân Canh', NULL);
INSERT INTO `wz_district` VALUES (94, 650, 14, 'H. Vĩnh Thạnh', NULL);
INSERT INTO `wz_district` VALUES (95, 651, 15, 'TX. Đồng Xoài', NULL);
INSERT INTO `wz_district` VALUES (96, 651, 14, 'H. Phước Long', NULL);
INSERT INTO `wz_district` VALUES (97, 651, 14, 'H. Bình Long', NULL);
INSERT INTO `wz_district` VALUES (98, 651, 14, 'H. Bù Đăng', NULL);
INSERT INTO `wz_district` VALUES (99, 651, 14, 'H. Đồng Phú', NULL);
INSERT INTO `wz_district` VALUES (100, 651, 14, 'H. Lộc Ninh', NULL);
INSERT INTO `wz_district` VALUES (101, 62, 14, 'TP. Phan Thiết', NULL);
INSERT INTO `wz_district` VALUES (102, 62, 14, 'H. Bắc Bình', NULL);
INSERT INTO `wz_district` VALUES (103, 62, 14, 'H. Đức Linh', NULL);
INSERT INTO `wz_district` VALUES (104, 62, 14, 'H. Hàm Thuận Bắc', NULL);
INSERT INTO `wz_district` VALUES (105, 62, 14, 'H. Hàm Thuận Nam', NULL);
INSERT INTO `wz_district` VALUES (106, 62, 14, 'H. Hàm Tân', NULL);
INSERT INTO `wz_district` VALUES (107, 62, 14, 'H. Phú Qúy', NULL);
INSERT INTO `wz_district` VALUES (108, 62, 14, 'H. Tánh Linh', NULL);
INSERT INTO `wz_district` VALUES (109, 62, 14, 'H. Tuy Phong', NULL);
INSERT INTO `wz_district` VALUES (110, 59, 15, 'TP. Pleiku', NULL);
INSERT INTO `wz_district` VALUES (111, 59, 14, 'H. A Yun Pa', NULL);
INSERT INTO `wz_district` VALUES (112, 59, 14, 'H. An Khê', NULL);
INSERT INTO `wz_district` VALUES (113, 59, 14, 'H. Chư Pah', NULL);
INSERT INTO `wz_district` VALUES (114, 59, 14, 'H. Chư Prông', NULL);
INSERT INTO `wz_district` VALUES (115, 59, 14, 'H. Chư Sê', NULL);
INSERT INTO `wz_district` VALUES (116, 59, 14, 'H. Đức Cơ', NULL);
INSERT INTO `wz_district` VALUES (117, 59, 3, 'H. KBang', NULL);
INSERT INTO `wz_district` VALUES (118, 59, 14, 'H. Krông Pa', NULL);
INSERT INTO `wz_district` VALUES (119, 59, 14, 'H. Kông Chro', NULL);
INSERT INTO `wz_district` VALUES (120, 59, 14, 'H. Ia Grai', NULL);
INSERT INTO `wz_district` VALUES (121, 59, 14, 'H. Mang Yang', NULL);
INSERT INTO `wz_district` VALUES (122, 59, 14, 'H. Đăk Đoa', NULL);
INSERT INTO `wz_district` VALUES (123, 219, 15, 'TP. Hà Giang', NULL);
INSERT INTO `wz_district` VALUES (124, 219, 14, 'H. Bắc Mê', NULL);
INSERT INTO `wz_district` VALUES (125, 219, 14, 'H. Bắc Quang', NULL);
INSERT INTO `wz_district` VALUES (126, 219, 14, 'H. Đồng Văn', NULL);
INSERT INTO `wz_district` VALUES (127, 219, 14, 'H. Hoàng Su Phì', NULL);
INSERT INTO `wz_district` VALUES (128, 219, 14, 'H. Mèo Vạc', NULL);
INSERT INTO `wz_district` VALUES (129, 219, 14, 'H. Quản Bạ', NULL);
INSERT INTO `wz_district` VALUES (130, 219, 14, 'H. Vị Xuyên', NULL);
INSERT INTO `wz_district` VALUES (131, 219, 14, 'H. Xín Mần', NULL);
INSERT INTO `wz_district` VALUES (132, 219, 14, 'H. Yên Minh', NULL);
INSERT INTO `wz_district` VALUES (133, 351, 15, 'TX. Phủ Lý', NULL);
INSERT INTO `wz_district` VALUES (134, 351, 14, 'H. Bình Lục', NULL);
INSERT INTO `wz_district` VALUES (135, 351, 14, 'H. Duy Tiên', NULL);
INSERT INTO `wz_district` VALUES (136, 351, 14, 'H. Kim Bảng', NULL);
INSERT INTO `wz_district` VALUES (137, 351, 14, 'H. Lý Nhân', NULL);
INSERT INTO `wz_district` VALUES (138, 351, 14, 'H. Thanh Liêm', NULL);
INSERT INTO `wz_district` VALUES (139, 43, 15, 'TX. Hà Đông', NULL);
INSERT INTO `wz_district` VALUES (140, 43, 15, 'TX. Sơn Tây', NULL);
INSERT INTO `wz_district` VALUES (141, 43, 14, 'H. Ba Vì', NULL);
INSERT INTO `wz_district` VALUES (142, 43, 14, 'H. Chương Mỹ', NULL);
INSERT INTO `wz_district` VALUES (143, 43, 14, 'H. Đan Phượng', NULL);
INSERT INTO `wz_district` VALUES (144, 43, 14, 'H. Hoài Đức', NULL);
INSERT INTO `wz_district` VALUES (145, 43, 14, 'H. Mỹ Đức', NULL);
INSERT INTO `wz_district` VALUES (146, 43, 14, 'H. Phú Xuyên', NULL);
INSERT INTO `wz_district` VALUES (147, 43, 14, 'H. Phúc Thọ', NULL);
INSERT INTO `wz_district` VALUES (148, 43, 14, 'H. Quốc Oai', NULL);
INSERT INTO `wz_district` VALUES (149, 43, 14, 'H. Thanh Oai', NULL);
INSERT INTO `wz_district` VALUES (150, 43, 14, 'H. Thạch Thất', NULL);
INSERT INTO `wz_district` VALUES (151, 43, 14, 'H. Trường Tín', NULL);
INSERT INTO `wz_district` VALUES (152, 43, 14, 'H. Ứng Hòa', NULL);
INSERT INTO `wz_district` VALUES (153, 39, 15, 'TP. Hà Tĩnh', NULL);
INSERT INTO `wz_district` VALUES (154, 39, 15, 'TX. Hồng Lĩnh', NULL);
INSERT INTO `wz_district` VALUES (155, 39, 14, 'H. Can Lộc', NULL);
INSERT INTO `wz_district` VALUES (156, 39, 14, 'H. Cẩm Xuyên', NULL);
INSERT INTO `wz_district` VALUES (157, 39, 14, 'H. Đức Thọ', NULL);
INSERT INTO `wz_district` VALUES (158, 39, 14, 'H. Hương Khê', NULL);
INSERT INTO `wz_district` VALUES (159, 39, 14, 'H. Hương Sơn', NULL);
INSERT INTO `wz_district` VALUES (160, 39, 14, 'H. Kỳ Anh', NULL);
INSERT INTO `wz_district` VALUES (161, 39, 14, 'H. Nghi Xuân', NULL);
INSERT INTO `wz_district` VALUES (162, 39, 14, 'H. Thạch Hà', NULL);
INSERT INTO `wz_district` VALUES (163, 39, 14, 'H. Vũ Quang', NULL);
INSERT INTO `wz_district` VALUES (164, 60, 15, 'TP. Kon Tum', NULL);
INSERT INTO `wz_district` VALUES (165, 60, 14, 'H. Đăk Glei', NULL);
INSERT INTO `wz_district` VALUES (166, 60, 14, 'H. Đăk Hà', NULL);
INSERT INTO `wz_district` VALUES (167, 60, 14, 'H. Đăk Tô', NULL);
INSERT INTO `wz_district` VALUES (168, 60, 14, 'H. Kon Plông', NULL);
INSERT INTO `wz_district` VALUES (169, 60, 14, 'H. Ngọc Hồi', NULL);
INSERT INTO `wz_district` VALUES (170, 60, 14, 'H. Sa Thầy', NULL);
INSERT INTO `wz_district` VALUES (171, 230, 15, 'TP. Điện Biên', NULL);
INSERT INTO `wz_district` VALUES (172, 230, 15, 'TX. Lai Châu', NULL);
INSERT INTO `wz_district` VALUES (173, 230, 14, 'H. Điện Biên', NULL);
INSERT INTO `wz_district` VALUES (174, 230, 14, 'H. Điện Biên Đông', NULL);
INSERT INTO `wz_district` VALUES (175, 230, 14, 'H. Mường Lay', NULL);
INSERT INTO `wz_district` VALUES (176, 230, 14, 'H. Tuần Giáo', NULL);
INSERT INTO `wz_district` VALUES (177, 230, 14, 'H. Tủa Chùa', NULL);
INSERT INTO `wz_district` VALUES (178, 230, 14, 'H. Mường Nhé', NULL);
INSERT INTO `wz_district` VALUES (179, 230, 14, 'H. Than Uyên', NULL);
INSERT INTO `wz_district` VALUES (180, 231, 15, 'TX. Lai Châu', NULL);
INSERT INTO `wz_district` VALUES (181, 231, 14, 'H. Mường Tè', NULL);
INSERT INTO `wz_district` VALUES (182, 231, 14, 'H. Phong Thổ', NULL);
INSERT INTO `wz_district` VALUES (183, 231, 14, 'H. Sìn Hồ', NULL);
INSERT INTO `wz_district` VALUES (184, 231, 14, 'H. Tam Đường', NULL);
INSERT INTO `wz_district` VALUES (185, 20, 15, 'TP. Lạng Sơn', NULL);
INSERT INTO `wz_district` VALUES (186, 20, 14, 'H. Bắc Sơn', NULL);
INSERT INTO `wz_district` VALUES (187, 20, 14, 'H. Bình Gia ', NULL);
INSERT INTO `wz_district` VALUES (188, 20, 14, 'H. Cao Lộc', NULL);
INSERT INTO `wz_district` VALUES (189, 20, 14, 'H. Chi Lăng', NULL);
INSERT INTO `wz_district` VALUES (190, 20, 14, 'H. Đình Lập', NULL);
INSERT INTO `wz_district` VALUES (191, 20, 14, 'H. Hữu Lũng', NULL);
INSERT INTO `wz_district` VALUES (192, 20, 14, 'H. Lộc Bình', NULL);
INSERT INTO `wz_district` VALUES (193, 20, 14, 'H. Tràng Định', NULL);
INSERT INTO `wz_district` VALUES (194, 20, 14, 'H. Văn Lãng', NULL);
INSERT INTO `wz_district` VALUES (195, 20, 14, 'H. Văn Quan', NULL);
INSERT INTO `wz_district` VALUES (196, 63, 15, 'TP Lào Cai', NULL);
INSERT INTO `wz_district` VALUES (197, 63, 14, 'H. Simacai', NULL);
INSERT INTO `wz_district` VALUES (198, 63, 14, 'H. Bát Xát', NULL);
INSERT INTO `wz_district` VALUES (199, 63, 14, 'H. Bảo Thắng', NULL);
INSERT INTO `wz_district` VALUES (200, 63, 14, 'H. Bảo Yên', NULL);
INSERT INTO `wz_district` VALUES (201, 63, 14, 'H. Bắc Hà', NULL);
INSERT INTO `wz_district` VALUES (202, 63, 14, 'H. Mường Khương', NULL);
INSERT INTO `wz_district` VALUES (203, 63, 14, 'H. Sapa', NULL);
INSERT INTO `wz_district` VALUES (204, 63, 14, 'H. Than Uyên', NULL);
INSERT INTO `wz_district` VALUES (205, 63, 14, 'H. Văn Bàn', NULL);
INSERT INTO `wz_district` VALUES (206, 25, 15, 'TP. Đà Lạt', NULL);
INSERT INTO `wz_district` VALUES (207, 25, 15, 'TX. Bảo Lộc', NULL);
INSERT INTO `wz_district` VALUES (208, 25, 14, 'H. Bảo Lâm', NULL);
INSERT INTO `wz_district` VALUES (209, 25, 14, 'H. Cát Tiên', NULL);
INSERT INTO `wz_district` VALUES (210, 25, 14, 'H. Di Linh', NULL);
INSERT INTO `wz_district` VALUES (211, 25, 14, 'H. Đạ Huoai', NULL);
INSERT INTO `wz_district` VALUES (212, 25, 14, 'H. Đạ Teh', NULL);
INSERT INTO `wz_district` VALUES (213, 25, 14, 'H. Đơn Dương', NULL);
INSERT INTO `wz_district` VALUES (214, 25, 14, 'H. Đức Trọng', NULL);
INSERT INTO `wz_district` VALUES (215, 25, 14, 'H. Lạc Dương', NULL);
INSERT INTO `wz_district` VALUES (216, 25, 14, 'H. Lâm Hà', NULL);
INSERT INTO `wz_district` VALUES (217, 210, 15, 'TP. Việt Trì', NULL);
INSERT INTO `wz_district` VALUES (218, 210, 15, 'TX. Phú Thọ', NULL);
INSERT INTO `wz_district` VALUES (219, 210, 14, 'H. Đoan Hùng', NULL);
INSERT INTO `wz_district` VALUES (220, 210, 14, 'H. Hạ Hòa', NULL);
INSERT INTO `wz_district` VALUES (221, 210, 14, 'H. Phù Ninh', NULL);
INSERT INTO `wz_district` VALUES (222, 210, 14, 'H. Lâm Thao', NULL);
INSERT INTO `wz_district` VALUES (223, 210, 14, 'H. Sông Thao', NULL);
INSERT INTO `wz_district` VALUES (224, 210, 14, 'H. Tam Nông', NULL);
INSERT INTO `wz_district` VALUES (225, 210, 14, 'H. Thanh Ba', NULL);
INSERT INTO `wz_district` VALUES (226, 210, 14, 'H. Thanh Sơn', NULL);
INSERT INTO `wz_district` VALUES (227, 210, 14, 'H. Yên Lập', NULL);
INSERT INTO `wz_district` VALUES (228, 210, 14, 'H. Thanh Thủy', NULL);
INSERT INTO `wz_district` VALUES (229, 57, 14, 'TX. Tuy Hòa', NULL);
INSERT INTO `wz_district` VALUES (230, 57, 14, 'H. Đồng Xuân', NULL);
INSERT INTO `wz_district` VALUES (231, 57, 14, 'H. Sông Cầu', NULL);
INSERT INTO `wz_district` VALUES (232, 57, 14, 'H. Sông Hinh', NULL);
INSERT INTO `wz_district` VALUES (233, 57, 14, 'H. Sơn Hòa', NULL);
INSERT INTO `wz_district` VALUES (234, 57, 14, 'H. Tuy An', NULL);
INSERT INTO `wz_district` VALUES (235, 57, 14, 'H. Tuy Hòa', NULL);
INSERT INTO `wz_district` VALUES (236, 57, 14, 'H. Phú Hòa', NULL);
INSERT INTO `wz_district` VALUES (237, 52, 15, 'TP. Đồng Hới', NULL);
INSERT INTO `wz_district` VALUES (238, 52, 14, 'H. Bố Trạch', NULL);
INSERT INTO `wz_district` VALUES (239, 52, 14, 'H. Lệ Thủy', NULL);
INSERT INTO `wz_district` VALUES (240, 52, 14, 'H. Minh Hóa', NULL);
INSERT INTO `wz_district` VALUES (241, 52, 14, 'H. Quảng Ninh', NULL);
INSERT INTO `wz_district` VALUES (242, 52, 14, 'H. Quảng Trạch', NULL);
INSERT INTO `wz_district` VALUES (243, 52, 14, 'H. Tuyên Hóa', NULL);
INSERT INTO `wz_district` VALUES (244, 510, 15, 'TX. Tam Kỳ', NULL);
INSERT INTO `wz_district` VALUES (245, 510, 15, 'TX. Hội An', NULL);
INSERT INTO `wz_district` VALUES (246, 510, 14, 'H. Duy Xuyên', NULL);
INSERT INTO `wz_district` VALUES (247, 510, 14, 'H. Đại Lộc', NULL);
INSERT INTO `wz_district` VALUES (248, 510, 14, 'H. Điện Bàn', NULL);
INSERT INTO `wz_district` VALUES (249, 510, 14, 'H. Giằng', NULL);
INSERT INTO `wz_district` VALUES (250, 510, 14, 'H. Hiên', NULL);
INSERT INTO `wz_district` VALUES (251, 510, 14, 'H. Hiệp Đức', NULL);
INSERT INTO `wz_district` VALUES (252, 510, 14, 'H. Núi Thành', NULL);
INSERT INTO `wz_district` VALUES (253, 510, 14, 'H. Phước Sơn', NULL);
INSERT INTO `wz_district` VALUES (254, 510, 14, 'H. Quế Sơn', NULL);
INSERT INTO `wz_district` VALUES (255, 510, 14, 'H. Thăng Bình', NULL);
INSERT INTO `wz_district` VALUES (256, 510, 14, 'H. Tiên Phước', NULL);
INSERT INTO `wz_district` VALUES (257, 510, 14, 'H. Trà My', NULL);
INSERT INTO `wz_district` VALUES (258, 510, 14, 'H. Nam Giang', NULL);
INSERT INTO `wz_district` VALUES (259, 55, 15, 'TP. Quảng Ngãi', NULL);
INSERT INTO `wz_district` VALUES (260, 55, 14, 'H. Ba Tơ', NULL);
INSERT INTO `wz_district` VALUES (261, 55, 14, 'H. Bình Sơn', NULL);
INSERT INTO `wz_district` VALUES (262, 55, 14, 'H. Đức Phổ', NULL);
INSERT INTO `wz_district` VALUES (263, 55, 14, 'H. Lý Sơn', NULL);
INSERT INTO `wz_district` VALUES (264, 55, 14, 'H. Minh Long', NULL);
INSERT INTO `wz_district` VALUES (265, 55, 0, 'H. Mộ Đức', NULL);
INSERT INTO `wz_district` VALUES (266, 55, 14, 'H. Nghĩa Hành', NULL);
INSERT INTO `wz_district` VALUES (267, 55, 14, 'H. Sơn Hà', NULL);
INSERT INTO `wz_district` VALUES (268, 55, 14, 'H. Sơn Tây', NULL);
INSERT INTO `wz_district` VALUES (269, 55, 14, 'H. Sơn Tịnh', NULL);
INSERT INTO `wz_district` VALUES (270, 55, 14, 'H. Trà Bồng', NULL);
INSERT INTO `wz_district` VALUES (271, 55, 14, 'H. Tư Nghĩa', NULL);
INSERT INTO `wz_district` VALUES (272, 280, 15, 'TP. Thái Nguyên', NULL);
INSERT INTO `wz_district` VALUES (273, 280, 15, 'TX. Sông Công', NULL);
INSERT INTO `wz_district` VALUES (274, 280, 14, 'H. Đại Từ', NULL);
INSERT INTO `wz_district` VALUES (275, 280, 14, 'H. Định Hóa', NULL);
INSERT INTO `wz_district` VALUES (276, 280, 14, 'H. Đồng Hỷ', NULL);
INSERT INTO `wz_district` VALUES (277, 280, 14, 'H. Phổ Yên', NULL);
INSERT INTO `wz_district` VALUES (278, 280, 14, 'H. Phú Bình', NULL);
INSERT INTO `wz_district` VALUES (279, 280, 14, 'H. Phú Lương', NULL);
INSERT INTO `wz_district` VALUES (280, 280, 14, 'H. Võ Nhai', NULL);
INSERT INTO `wz_district` VALUES (281, 37, 15, 'TP Thanh Hóa', NULL);
INSERT INTO `wz_district` VALUES (282, 37, 15, 'TX. Bỉm Sơn', NULL);
INSERT INTO `wz_district` VALUES (283, 37, 15, 'TX. Sầm Sơn', NULL);
INSERT INTO `wz_district` VALUES (284, 37, 14, 'H. Bá Thước', NULL);
INSERT INTO `wz_district` VALUES (285, 37, 14, 'H. Cẩm Thủy', NULL);
INSERT INTO `wz_district` VALUES (286, 37, 14, 'H. Đông Sơn', NULL);
INSERT INTO `wz_district` VALUES (287, 37, 0, 'H. Hà Trung', NULL);
INSERT INTO `wz_district` VALUES (288, 37, 14, 'H. Hậu Lộc', NULL);
INSERT INTO `wz_district` VALUES (289, 37, 14, 'H. Hoằng Hóa', NULL);
INSERT INTO `wz_district` VALUES (290, 37, 14, 'H. Lang Chánh', NULL);
INSERT INTO `wz_district` VALUES (291, 37, 14, 'H. Mường Lát', NULL);
INSERT INTO `wz_district` VALUES (292, 37, 14, 'H. Nga Sơn', NULL);
INSERT INTO `wz_district` VALUES (293, 37, 14, 'H. Ngọc Lặc', NULL);
INSERT INTO `wz_district` VALUES (294, 37, 14, 'H. Nông Cống', NULL);
INSERT INTO `wz_district` VALUES (295, 37, 14, 'H. Như Thanh', NULL);
INSERT INTO `wz_district` VALUES (296, 37, 14, 'H. Như Xuân', NULL);
INSERT INTO `wz_district` VALUES (297, 37, 14, 'H. Quan Hóa', NULL);
INSERT INTO `wz_district` VALUES (298, 37, 14, 'H. Quan Sơn', NULL);
INSERT INTO `wz_district` VALUES (299, 54, 15, 'TP Huế', NULL);
INSERT INTO `wz_district` VALUES (300, 54, 14, 'H. A Lưới', NULL);
INSERT INTO `wz_district` VALUES (301, 54, 14, 'H. Hương Thủy', NULL);
INSERT INTO `wz_district` VALUES (302, 54, 14, 'H. Hương Trà', NULL);
INSERT INTO `wz_district` VALUES (303, 54, 14, 'H. Nam Đông', NULL);
INSERT INTO `wz_district` VALUES (304, 54, 14, 'H. Phong Điền', NULL);
INSERT INTO `wz_district` VALUES (305, 54, 14, 'H. Phú Lộc', NULL);
INSERT INTO `wz_district` VALUES (306, 54, 14, 'H. Phú Vang', NULL);
INSERT INTO `wz_district` VALUES (307, 54, 14, 'H. Quảng Điền', NULL);
INSERT INTO `wz_district` VALUES (308, 73, 15, 'TP. Mỹ Tho', NULL);
INSERT INTO `wz_district` VALUES (309, 73, 15, 'TX. Gò Công', NULL);
INSERT INTO `wz_district` VALUES (310, 73, 14, 'H. Cai Lậy', NULL);
INSERT INTO `wz_district` VALUES (311, 73, 14, 'H. Cái Bè', NULL);
INSERT INTO `wz_district` VALUES (312, 73, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (313, 73, 14, 'H. Chợ Gạo', NULL);
INSERT INTO `wz_district` VALUES (314, 73, 14, 'H. Gò Công Đông', NULL);
INSERT INTO `wz_district` VALUES (315, 73, 14, 'H. Gò Công Tây', NULL);
INSERT INTO `wz_district` VALUES (316, 73, 14, 'H. Tân Phước', NULL);
INSERT INTO `wz_district` VALUES (317, 74, 15, 'TX. Trà Vinh', NULL);
INSERT INTO `wz_district` VALUES (318, 74, 14, 'H. Càng Long', NULL);
INSERT INTO `wz_district` VALUES (319, 74, 14, 'H. Cầu Kè', NULL);
INSERT INTO `wz_district` VALUES (320, 74, 14, 'H. Cầu Ngang', NULL);
INSERT INTO `wz_district` VALUES (321, 74, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (322, 74, 14, 'H. Duyên Hải', NULL);
INSERT INTO `wz_district` VALUES (323, 74, 14, 'H. Tiểu Cần', NULL);
INSERT INTO `wz_district` VALUES (324, 74, 14, 'H. Trà Cú', NULL);
INSERT INTO `wz_district` VALUES (325, 31, 13, 'Q. Hồng Bàng', NULL);
INSERT INTO `wz_district` VALUES (326, 31, 13, 'Q. Kiến An', NULL);
INSERT INTO `wz_district` VALUES (327, 31, 13, 'Q. Lê Chân', NULL);
INSERT INTO `wz_district` VALUES (328, 31, 0, 'Q. Ngô Quyền', NULL);
INSERT INTO `wz_district` VALUES (329, 31, 15, 'TX. Đồ Sơn', NULL);
INSERT INTO `wz_district` VALUES (330, 31, 14, 'H. An Hải', NULL);
INSERT INTO `wz_district` VALUES (331, 31, 14, 'H. An Lão', NULL);
INSERT INTO `wz_district` VALUES (332, 31, 14, 'H. Bạch Long Vĩ', NULL);
INSERT INTO `wz_district` VALUES (333, 31, 14, 'H. Cát Hải', NULL);
INSERT INTO `wz_district` VALUES (334, 31, 14, 'H. Kiến Thụy', NULL);
INSERT INTO `wz_district` VALUES (335, 31, 14, 'H. Tiên Lãng', NULL);
INSERT INTO `wz_district` VALUES (336, 31, 14, 'H. Thủy Nguyên', NULL);
INSERT INTO `wz_district` VALUES (337, 31, 14, 'H. Vĩnh Bảo', NULL);
INSERT INTO `wz_district` VALUES (338, 76, 15, 'TX. Châu Đốc', NULL);
INSERT INTO `wz_district` VALUES (339, 76, 15, 'TP. Long Xuyên', NULL);
INSERT INTO `wz_district` VALUES (340, 76, 14, 'H. An Phú', NULL);
INSERT INTO `wz_district` VALUES (341, 76, 14, 'H. Châu Phú', NULL);
INSERT INTO `wz_district` VALUES (342, 76, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (343, 76, 14, 'H. Chợ Mới', NULL);
INSERT INTO `wz_district` VALUES (344, 76, 14, 'H. Phú Tân', NULL);
INSERT INTO `wz_district` VALUES (345, 76, 14, 'H. Tân Châu', NULL);
INSERT INTO `wz_district` VALUES (346, 240, 15, 'TX. Bạc Liêu', NULL);
INSERT INTO `wz_district` VALUES (347, 240, 14, 'H. Gía Rai', NULL);
INSERT INTO `wz_district` VALUES (348, 240, 14, 'H. Hồng Dân', NULL);
INSERT INTO `wz_district` VALUES (349, 240, 14, 'H. Vĩnh Lợi', NULL);
INSERT INTO `wz_district` VALUES (350, 240, 14, 'H. Phước Long', NULL);
INSERT INTO `wz_district` VALUES (351, 240, 14, 'H. Đông Hải', NULL);
INSERT INTO `wz_district` VALUES (352, 64, 15, 'TP. Vũng Tàu', NULL);
INSERT INTO `wz_district` VALUES (353, 64, 15, 'TX. Bà Rịa', NULL);
INSERT INTO `wz_district` VALUES (354, 64, 14, 'H. Châu Đức', NULL);
INSERT INTO `wz_district` VALUES (355, 64, 14, 'H. Côn Đảo', NULL);
INSERT INTO `wz_district` VALUES (356, 64, 14, 'H. Long Đất', NULL);
INSERT INTO `wz_district` VALUES (357, 64, 14, 'H. Tân Thành', NULL);
INSERT INTO `wz_district` VALUES (358, 64, 14, 'H. Xuyên Mộc', NULL);
INSERT INTO `wz_district` VALUES (359, 781, 15, 'TX. Bắc Cạn', NULL);
INSERT INTO `wz_district` VALUES (360, 781, 14, 'H. Ba Bể', NULL);
INSERT INTO `wz_district` VALUES (361, 781, 14, 'H. Bạch Thông', NULL);
INSERT INTO `wz_district` VALUES (362, 781, 14, 'H. Chợ Đồn', NULL);
INSERT INTO `wz_district` VALUES (363, 781, 14, 'H. Na Rì', NULL);
INSERT INTO `wz_district` VALUES (364, 781, 14, 'H. Ngân Sơn', NULL);
INSERT INTO `wz_district` VALUES (365, 781, 14, 'H. Chợ Mới', NULL);
INSERT INTO `wz_district` VALUES (366, 281, 15, 'TP. Bắc Giang', NULL);
INSERT INTO `wz_district` VALUES (367, 281, 14, 'H. Hiệp Hòa', NULL);
INSERT INTO `wz_district` VALUES (368, 281, 14, 'H. Lạng Giang', NULL);
INSERT INTO `wz_district` VALUES (369, 281, 14, 'H. Lục Nam', NULL);
INSERT INTO `wz_district` VALUES (370, 281, 14, 'H. Lục Ngạn', NULL);
INSERT INTO `wz_district` VALUES (371, 281, 14, 'H. Sơn Đông', NULL);
INSERT INTO `wz_district` VALUES (372, 281, 14, 'H. Tân Yên', NULL);
INSERT INTO `wz_district` VALUES (373, 281, 14, 'H. Việt Yên', NULL);
INSERT INTO `wz_district` VALUES (374, 281, 14, 'H. Yên Dũng', NULL);
INSERT INTO `wz_district` VALUES (375, 281, 14, 'H. Yên Thế', NULL);
INSERT INTO `wz_district` VALUES (376, 26, 15, 'TX. Cao Bằng', NULL);
INSERT INTO `wz_district` VALUES (377, 26, 14, 'H. Bảo Lạc', NULL);
INSERT INTO `wz_district` VALUES (378, 26, 14, 'H. Hà Quảng', NULL);
INSERT INTO `wz_district` VALUES (379, 26, 14, 'H. Hạ Lang', NULL);
INSERT INTO `wz_district` VALUES (380, 26, 14, 'H. Hòa An', NULL);
INSERT INTO `wz_district` VALUES (381, 26, 14, 'H. Nguyên Bình', NULL);
INSERT INTO `wz_district` VALUES (382, 26, 14, 'H. Quảng Uyên', NULL);
INSERT INTO `wz_district` VALUES (383, 26, 14, 'H. Bảo Lâm', NULL);
INSERT INTO `wz_district` VALUES (384, 26, 14, 'H. Phục Hòa', NULL);
INSERT INTO `wz_district` VALUES (385, 26, 14, 'H. Thạch An', NULL);
INSERT INTO `wz_district` VALUES (386, 26, 14, 'H. Thông Nông', NULL);
INSERT INTO `wz_district` VALUES (387, 26, 14, 'H. Trà Lĩnh', NULL);
INSERT INTO `wz_district` VALUES (388, 26, 14, 'H. Trùng Khánh', NULL);
INSERT INTO `wz_district` VALUES (389, 780, 15, 'TP. Cà Mau', NULL);
INSERT INTO `wz_district` VALUES (390, 780, 14, 'H. Thới Bình', NULL);
INSERT INTO `wz_district` VALUES (391, 780, 14, 'H. U Minh', NULL);
INSERT INTO `wz_district` VALUES (392, 780, 14, 'H. Trần Văn Thời', NULL);
INSERT INTO `wz_district` VALUES (393, 780, 14, 'H. Cái Nước', NULL);
INSERT INTO `wz_district` VALUES (394, 780, 14, 'H. Đầm Dơi', NULL);
INSERT INTO `wz_district` VALUES (395, 780, 14, 'H. Ngọc Điển', NULL);
INSERT INTO `wz_district` VALUES (396, 500, 15, 'TP. Buôn Ma Thuột', NULL);
INSERT INTO `wz_district` VALUES (397, 500, 14, 'H. Buôn Đôn', NULL);
INSERT INTO `wz_district` VALUES (398, 500, 14, 'H. Ea Kar', NULL);
INSERT INTO `wz_district` VALUES (399, 500, 14, 'H. Ea Súp', NULL);
INSERT INTO `wz_district` VALUES (400, 500, 14, 'H. Krông Ana', NULL);
INSERT INTO `wz_district` VALUES (401, 500, 14, 'H. Krông Bông', NULL);
INSERT INTO `wz_district` VALUES (402, 500, 14, 'H. Krông Buk', NULL);
INSERT INTO `wz_district` VALUES (403, 500, 14, 'H. Krông Năng', NULL);
INSERT INTO `wz_district` VALUES (404, 500, 14, 'H. Krông Pắc', NULL);
INSERT INTO `wz_district` VALUES (405, 500, 14, 'H. Lăk', NULL);
INSERT INTO `wz_district` VALUES (406, 501, 15, 'TX. Gia Nghĩa', NULL);
INSERT INTO `wz_district` VALUES (407, 501, 14, 'H. Đăk Mil', NULL);
INSERT INTO `wz_district` VALUES (408, 501, 14, 'H. Cư Jut', NULL);
INSERT INTO `wz_district` VALUES (409, 501, 14, 'H. Đăk Rlăp', NULL);
INSERT INTO `wz_district` VALUES (410, 501, 14, 'H. Krông Nô', NULL);
INSERT INTO `wz_district` VALUES (411, 501, 14, 'H. Đắk Song', NULL);
INSERT INTO `wz_district` VALUES (412, 61, 15, 'TP. Biên Hòa', NULL);
INSERT INTO `wz_district` VALUES (413, 61, 14, 'H. Định Quán', NULL);
INSERT INTO `wz_district` VALUES (414, 61, 0, 'H. Long Khánh', NULL);
INSERT INTO `wz_district` VALUES (415, 61, 14, 'H. Long Thành', NULL);
INSERT INTO `wz_district` VALUES (416, 61, 14, 'H. Nhơn Trạch', NULL);
INSERT INTO `wz_district` VALUES (417, 61, 0, 'H. Tân Phú', NULL);
INSERT INTO `wz_district` VALUES (418, 61, 14, 'H. Thống Nhất', NULL);
INSERT INTO `wz_district` VALUES (419, 61, 14, 'H. Vĩnh Cửu', NULL);
INSERT INTO `wz_district` VALUES (420, 61, 14, 'H. Xuân Lộc', NULL);
INSERT INTO `wz_district` VALUES (421, 67, 15, 'TP. Cao Lãnh', NULL);
INSERT INTO `wz_district` VALUES (422, 67, 15, 'TX. Sa Đéc', NULL);
INSERT INTO `wz_district` VALUES (423, 67, 14, 'H. Cao Lãnh', NULL);
INSERT INTO `wz_district` VALUES (424, 67, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (425, 67, 14, 'H. Hồng Hạnh', NULL);
INSERT INTO `wz_district` VALUES (426, 67, 14, 'H. Lai Vung', NULL);
INSERT INTO `wz_district` VALUES (427, 67, 14, 'H. Lấp Vò', NULL);
INSERT INTO `wz_district` VALUES (428, 67, 14, 'H. Tam Nông', NULL);
INSERT INTO `wz_district` VALUES (429, 67, 14, 'H. Tân Hồng', NULL);
INSERT INTO `wz_district` VALUES (430, 67, 14, 'H. Thanh Bình', NULL);
INSERT INTO `wz_district` VALUES (431, 67, 14, 'H. Tháp Mười', NULL);
INSERT INTO `wz_district` VALUES (432, 320, 15, 'TP. Hải Dương', NULL);
INSERT INTO `wz_district` VALUES (433, 320, 14, 'H. Bình Giang', NULL);
INSERT INTO `wz_district` VALUES (434, 320, 14, 'H. Cẩm Giang', NULL);
INSERT INTO `wz_district` VALUES (435, 320, 14, 'H. Chí Linh', NULL);
INSERT INTO `wz_district` VALUES (436, 320, 14, 'H. Gia Lộc', NULL);
INSERT INTO `wz_district` VALUES (437, 320, 14, 'H. Kim Thành', NULL);
INSERT INTO `wz_district` VALUES (438, 320, 14, 'H. Kinh Môn', NULL);
INSERT INTO `wz_district` VALUES (439, 320, 0, 'H. Nam Sách', NULL);
INSERT INTO `wz_district` VALUES (440, 320, 14, 'H. Ninh Giang', NULL);
INSERT INTO `wz_district` VALUES (441, 320, 14, 'H. Thanh Hà', NULL);
INSERT INTO `wz_district` VALUES (442, 320, 14, 'H. Thanh Miện', NULL);
INSERT INTO `wz_district` VALUES (443, 320, 14, 'H. Tứ Kỳ', NULL);
INSERT INTO `wz_district` VALUES (444, 218, 15, 'TP. Hòa Bình', NULL);
INSERT INTO `wz_district` VALUES (445, 218, 14, 'H. Đà Bắc', NULL);
INSERT INTO `wz_district` VALUES (446, 218, 14, 'H. Kim Bôi', NULL);
INSERT INTO `wz_district` VALUES (447, 218, 14, 'H. Lạc Sơn', NULL);
INSERT INTO `wz_district` VALUES (448, 218, 14, 'H. Lạc Thủy', NULL);
INSERT INTO `wz_district` VALUES (449, 218, 14, 'H. Lương Sơn', NULL);
INSERT INTO `wz_district` VALUES (450, 218, 14, 'H. Mai Châu', NULL);
INSERT INTO `wz_district` VALUES (451, 218, 14, 'H. Tân Lạc', NULL);
INSERT INTO `wz_district` VALUES (452, 218, 14, 'H. Yên Thủy', NULL);
INSERT INTO `wz_district` VALUES (453, 218, 14, 'H. Kỳ Sơn', NULL);
INSERT INTO `wz_district` VALUES (454, 218, 14, 'H. Cao Phong', NULL);
INSERT INTO `wz_district` VALUES (455, 321, 15, 'TX. Hưng Yên', NULL);
INSERT INTO `wz_district` VALUES (456, 321, 14, 'H. An Thi', NULL);
INSERT INTO `wz_district` VALUES (457, 321, 14, 'H. Kim Động', NULL);
INSERT INTO `wz_district` VALUES (458, 321, 14, 'H. Phù Cừ', NULL);
INSERT INTO `wz_district` VALUES (459, 321, 14, 'H. Tiên Lữ', NULL);
INSERT INTO `wz_district` VALUES (460, 321, 14, 'H. Vân Lâm', NULL);
INSERT INTO `wz_district` VALUES (461, 321, 14, 'H. Mỹ Hào', NULL);
INSERT INTO `wz_district` VALUES (462, 321, 14, 'H. Yên Mỹ', NULL);
INSERT INTO `wz_district` VALUES (463, 321, 14, 'H. Văn Giang', NULL);
INSERT INTO `wz_district` VALUES (464, 321, 14, 'H. Khoái Châu', NULL);
INSERT INTO `wz_district` VALUES (465, 58, 15, 'TP. Nha Trang', NULL);
INSERT INTO `wz_district` VALUES (466, 58, 15, 'TX. Cam Ranh', NULL);
INSERT INTO `wz_district` VALUES (467, 58, 14, 'H. Diên Khánh', NULL);
INSERT INTO `wz_district` VALUES (468, 58, 14, 'H. Khánh Sơn', NULL);
INSERT INTO `wz_district` VALUES (469, 58, 14, 'H. Khánh Vĩnh', NULL);
INSERT INTO `wz_district` VALUES (470, 58, 14, 'H. Ninh Hòa', NULL);
INSERT INTO `wz_district` VALUES (471, 58, 14, 'H. Trường Sa', NULL);
INSERT INTO `wz_district` VALUES (472, 58, 14, 'H. Vạn Ninh', NULL);
INSERT INTO `wz_district` VALUES (473, 77, 15, 'TX. Rạch Giá', NULL);
INSERT INTO `wz_district` VALUES (474, 77, 14, 'H. An Biên', NULL);
INSERT INTO `wz_district` VALUES (475, 77, 14, 'H. Kiên Biên', NULL);
INSERT INTO `wz_district` VALUES (476, 77, 14, 'H. An Minh', NULL);
INSERT INTO `wz_district` VALUES (477, 77, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (478, 77, 14, 'H. Gò Quao', NULL);
INSERT INTO `wz_district` VALUES (479, 77, 14, 'H. Giồng Riềng', NULL);
INSERT INTO `wz_district` VALUES (480, 77, 14, 'H. Hà Tiên', NULL);
INSERT INTO `wz_district` VALUES (481, 77, 14, 'H. Hòn Đất', NULL);
INSERT INTO `wz_district` VALUES (482, 77, 14, 'H. Kiên Hải', NULL);
INSERT INTO `wz_district` VALUES (483, 77, 14, 'H. Phú Quốc', NULL);
INSERT INTO `wz_district` VALUES (484, 77, 14, 'H. Tân Hiệp', NULL);
INSERT INTO `wz_district` VALUES (485, 77, 14, 'H. Vĩnh Thuận', NULL);
INSERT INTO `wz_district` VALUES (486, 72, 15, 'TX. Tân An', NULL);
INSERT INTO `wz_district` VALUES (487, 72, 14, 'H. Bến Lức', NULL);
INSERT INTO `wz_district` VALUES (488, 72, 14, 'H. Cần Đước', NULL);
INSERT INTO `wz_district` VALUES (489, 72, 14, 'H. Cần Giuộc', NULL);
INSERT INTO `wz_district` VALUES (490, 72, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (491, 72, 14, 'H. Đức Hòa', NULL);
INSERT INTO `wz_district` VALUES (492, 72, 14, 'H. Đức Huệ', NULL);
INSERT INTO `wz_district` VALUES (493, 72, 14, 'H. Mộc Hóa', NULL);
INSERT INTO `wz_district` VALUES (494, 72, 14, 'H. Tân Hưng', NULL);
INSERT INTO `wz_district` VALUES (495, 72, 14, 'H. Tân Thạnh', NULL);
INSERT INTO `wz_district` VALUES (496, 72, 14, 'H. Tân Trụ', NULL);
INSERT INTO `wz_district` VALUES (497, 72, 14, 'H. Thạnh Hóa', NULL);
INSERT INTO `wz_district` VALUES (498, 72, 14, 'H. Thủ Thừa', NULL);
INSERT INTO `wz_district` VALUES (499, 72, 14, 'H. Vĩnh Hưng', NULL);
INSERT INTO `wz_district` VALUES (500, 350, 15, 'TP. Nam Định', NULL);
INSERT INTO `wz_district` VALUES (501, 350, 14, 'H. Giao Thủy', NULL);
INSERT INTO `wz_district` VALUES (502, 350, 14, 'H. Hải Hậu', NULL);
INSERT INTO `wz_district` VALUES (503, 350, 14, 'H. Mỹ Lộc', NULL);
INSERT INTO `wz_district` VALUES (504, 350, 14, 'H. Nam Trực', NULL);
INSERT INTO `wz_district` VALUES (505, 350, 14, 'H. Nghĩa Hưng', NULL);
INSERT INTO `wz_district` VALUES (506, 350, 14, 'H. Trực Ninh', NULL);
INSERT INTO `wz_district` VALUES (507, 350, 14, 'H. Xuân Trường', NULL);
INSERT INTO `wz_district` VALUES (508, 350, 14, 'H. Vụ Bản', NULL);
INSERT INTO `wz_district` VALUES (509, 350, 14, 'H. Ý Yên', NULL);
INSERT INTO `wz_district` VALUES (510, 38, 15, 'TP. Vinh', NULL);
INSERT INTO `wz_district` VALUES (511, 38, 15, 'TX. Cửa Lò', NULL);
INSERT INTO `wz_district` VALUES (512, 38, 14, 'H. Anh Sơn', NULL);
INSERT INTO `wz_district` VALUES (513, 38, 14, 'H. Con Cuông', NULL);
INSERT INTO `wz_district` VALUES (514, 38, 14, 'H. Diễn Châu', NULL);
INSERT INTO `wz_district` VALUES (515, 38, 14, 'H. Đô Lương', NULL);
INSERT INTO `wz_district` VALUES (516, 38, 14, 'H. Hưng Nguyên', NULL);
INSERT INTO `wz_district` VALUES (517, 38, 14, 'H. Kỳ Sơn', NULL);
INSERT INTO `wz_district` VALUES (518, 38, 14, 'H. Nam Đàn', NULL);
INSERT INTO `wz_district` VALUES (519, 38, 14, 'H. Nghi Lộc', NULL);
INSERT INTO `wz_district` VALUES (520, 38, 14, 'H. Nghĩa Đàn', NULL);
INSERT INTO `wz_district` VALUES (521, 38, 14, 'H. Quế Phong', NULL);
INSERT INTO `wz_district` VALUES (522, 38, 14, 'H. Qùy Châu', NULL);
INSERT INTO `wz_district` VALUES (523, 38, 14, 'H. Qùy Hợp', NULL);
INSERT INTO `wz_district` VALUES (524, 38, 14, 'H. Quỳnh Lưu', NULL);
INSERT INTO `wz_district` VALUES (525, 38, 0, 'H. Tân Qùy', NULL);
INSERT INTO `wz_district` VALUES (526, 38, 14, 'H. Thanh Chương', NULL);
INSERT INTO `wz_district` VALUES (527, 38, 14, 'H. Tương Dương', NULL);
INSERT INTO `wz_district` VALUES (528, 38, 14, 'H. Yên Thành', NULL);
INSERT INTO `wz_district` VALUES (529, 30, 15, 'TP. Ninh Bình', NULL);
INSERT INTO `wz_district` VALUES (530, 30, 15, 'TX. Tam Điệp', NULL);
INSERT INTO `wz_district` VALUES (531, 30, 14, 'H. Gia Viễn', NULL);
INSERT INTO `wz_district` VALUES (532, 30, 0, 'H. Hoa Lư', NULL);
INSERT INTO `wz_district` VALUES (533, 30, 14, 'H. Kim Sơn', NULL);
INSERT INTO `wz_district` VALUES (534, 30, 14, 'H. Nho Quang', NULL);
INSERT INTO `wz_district` VALUES (535, 30, 14, 'H. Yên Khánh', NULL);
INSERT INTO `wz_district` VALUES (536, 30, 14, 'H. Yên Mô', NULL);
INSERT INTO `wz_district` VALUES (537, 68, 0, 'TX. Phan Rang-Tháp Chàm', NULL);
INSERT INTO `wz_district` VALUES (538, 68, 14, 'H. Ninh Hải', NULL);
INSERT INTO `wz_district` VALUES (539, 68, 14, 'H. Ninh Phước', NULL);
INSERT INTO `wz_district` VALUES (540, 68, 14, 'H. Ninh Sơn', NULL);
INSERT INTO `wz_district` VALUES (541, 68, 14, 'H. Bác Ai', NULL);
INSERT INTO `wz_district` VALUES (542, 33, 15, 'TP. Hạ Long', NULL);
INSERT INTO `wz_district` VALUES (543, 33, 15, 'TX. Cẩm Phả', NULL);
INSERT INTO `wz_district` VALUES (544, 33, 15, 'TX. Uông Bí', NULL);
INSERT INTO `wz_district` VALUES (545, 33, 15, 'TX. Móng Cái', NULL);
INSERT INTO `wz_district` VALUES (546, 33, 14, 'H. Ba Chẽ', NULL);
INSERT INTO `wz_district` VALUES (547, 33, 14, 'H. Bình Liêu', NULL);
INSERT INTO `wz_district` VALUES (548, 33, 14, 'H. Cô Tô', NULL);
INSERT INTO `wz_district` VALUES (549, 33, 14, 'H. Đông Triều', NULL);
INSERT INTO `wz_district` VALUES (550, 33, 14, 'H. Hải Hà', NULL);
INSERT INTO `wz_district` VALUES (551, 33, 14, 'H. Hoành Bồ', NULL);
INSERT INTO `wz_district` VALUES (552, 33, 14, 'H. Đầm Hà', NULL);
INSERT INTO `wz_district` VALUES (553, 33, 14, 'H. Tiên Yên', NULL);
INSERT INTO `wz_district` VALUES (554, 33, 14, 'H. Vân Đồn', NULL);
INSERT INTO `wz_district` VALUES (555, 33, 14, 'H. Yên Hưng', NULL);
INSERT INTO `wz_district` VALUES (556, 53, 15, 'TX. Đông Hà', NULL);
INSERT INTO `wz_district` VALUES (557, 53, 15, 'TX. Quảng Trị', NULL);
INSERT INTO `wz_district` VALUES (558, 53, 14, 'H. Cam Lộ', NULL);
INSERT INTO `wz_district` VALUES (559, 53, 14, 'H. Đakrông', NULL);
INSERT INTO `wz_district` VALUES (560, 53, 14, 'H. Gio Linh', NULL);
INSERT INTO `wz_district` VALUES (561, 53, 14, 'H. Hải Lãng', NULL);
INSERT INTO `wz_district` VALUES (562, 53, 14, 'H. Hướng Hóa', NULL);
INSERT INTO `wz_district` VALUES (563, 53, 14, 'H. Triệu Phong', NULL);
INSERT INTO `wz_district` VALUES (564, 53, 14, 'H. Vĩnh Linh', NULL);
INSERT INTO `wz_district` VALUES (565, 79, 15, 'TX. Sóc Trăng', NULL);
INSERT INTO `wz_district` VALUES (566, 79, 14, 'H. Kế Sách', NULL);
INSERT INTO `wz_district` VALUES (567, 79, 14, 'H. Long Phú', NULL);
INSERT INTO `wz_district` VALUES (568, 79, 14, 'H. Mỹ Tú', NULL);
INSERT INTO `wz_district` VALUES (569, 79, 14, 'H. Mỹ Xuyên', NULL);
INSERT INTO `wz_district` VALUES (570, 79, 14, 'H. Thạnh Trị', NULL);
INSERT INTO `wz_district` VALUES (571, 79, 14, 'H. Vĩnh Châu', NULL);
INSERT INTO `wz_district` VALUES (572, 79, 14, 'H. Cù Lao Dung', NULL);
INSERT INTO `wz_district` VALUES (573, 22, 15, 'TP. Sơn La', NULL);
INSERT INTO `wz_district` VALUES (574, 22, 14, 'H. Bắc Yên', NULL);
INSERT INTO `wz_district` VALUES (575, 22, 14, 'H. Mai Sơn', NULL);
INSERT INTO `wz_district` VALUES (576, 22, 14, 'H. Mộc Châu', NULL);
INSERT INTO `wz_district` VALUES (577, 22, 14, 'H. Mường La', NULL);
INSERT INTO `wz_district` VALUES (578, 22, 14, 'H. Phù Yên', NULL);
INSERT INTO `wz_district` VALUES (579, 22, 14, 'H. Quỳnh Nhai', NULL);
INSERT INTO `wz_district` VALUES (580, 22, 14, 'H. Sông Mã', NULL);
INSERT INTO `wz_district` VALUES (581, 22, 14, 'H. Thuận Châu', NULL);
INSERT INTO `wz_district` VALUES (582, 22, 14, 'H. Yên Châu', NULL);
INSERT INTO `wz_district` VALUES (583, 66, 15, 'TX. Tây Ninh', NULL);
INSERT INTO `wz_district` VALUES (584, 66, 14, 'H. Bến Cầu', NULL);
INSERT INTO `wz_district` VALUES (585, 66, 14, 'H. Châu Thành', NULL);
INSERT INTO `wz_district` VALUES (586, 66, 14, 'H. Dương Minh Châu', NULL);
INSERT INTO `wz_district` VALUES (587, 66, 14, 'H. Gò Dầu', NULL);
INSERT INTO `wz_district` VALUES (588, 66, 14, 'H. Hòa Thành', NULL);
INSERT INTO `wz_district` VALUES (589, 66, 14, 'H. Tân Biên', NULL);
INSERT INTO `wz_district` VALUES (590, 66, 14, 'H. Tân Châu', NULL);
INSERT INTO `wz_district` VALUES (591, 66, 14, 'H. Trảng Bàng', NULL);
INSERT INTO `wz_district` VALUES (592, 36, 15, 'TP. Thái Bình', NULL);
INSERT INTO `wz_district` VALUES (593, 36, 14, 'H. Đông Hưng', NULL);
INSERT INTO `wz_district` VALUES (594, 36, 14, 'H. Hưng Hà', NULL);
INSERT INTO `wz_district` VALUES (595, 36, 14, 'H. Kiến Xương', NULL);
INSERT INTO `wz_district` VALUES (596, 36, 14, 'H. Quỳnh Phụ', NULL);
INSERT INTO `wz_district` VALUES (597, 36, 14, 'H. Thái Thụy', NULL);
INSERT INTO `wz_district` VALUES (598, 36, 14, 'H. Tiền Hải', NULL);
INSERT INTO `wz_district` VALUES (599, 36, 14, 'H. Vũ Thư', NULL);
INSERT INTO `wz_district` VALUES (600, 27, 15, 'TX. Tuyên Quang', NULL);
INSERT INTO `wz_district` VALUES (601, 27, 14, 'H. Chiêm Hóa', NULL);
INSERT INTO `wz_district` VALUES (602, 27, 14, 'H. Hàm Yên', NULL);
INSERT INTO `wz_district` VALUES (603, 27, 14, 'H. Na Hang', NULL);
INSERT INTO `wz_district` VALUES (604, 27, 14, 'H. Sơn Dương', NULL);
INSERT INTO `wz_district` VALUES (605, 27, 14, 'H. Yên Sơn', NULL);
INSERT INTO `wz_district` VALUES (606, 70, 15, 'TP. Vĩnh Long', NULL);
INSERT INTO `wz_district` VALUES (607, 70, 14, 'H. Long Hồ', NULL);
INSERT INTO `wz_district` VALUES (608, 70, 14, 'H. Mang Thít', NULL);
INSERT INTO `wz_district` VALUES (609, 70, 14, 'H. Bình Minh', NULL);
INSERT INTO `wz_district` VALUES (610, 70, 14, 'H. Tam Bình', NULL);
INSERT INTO `wz_district` VALUES (611, 70, 14, 'H. Trà On', NULL);
INSERT INTO `wz_district` VALUES (612, 70, 14, 'H. Vũng Liêm', NULL);
INSERT INTO `wz_district` VALUES (613, 211, 15, 'TX. Vĩnh Yên', NULL);
INSERT INTO `wz_district` VALUES (614, 211, 14, 'H. Lập Thạch', NULL);
INSERT INTO `wz_district` VALUES (615, 211, 14, 'H. Mê Linh', NULL);
INSERT INTO `wz_district` VALUES (616, 211, 14, 'H. Tam Dương', NULL);
INSERT INTO `wz_district` VALUES (617, 211, 14, 'H. Bình Xuyên', NULL);
INSERT INTO `wz_district` VALUES (618, 211, 14, 'H. Vĩnh Tường', NULL);
INSERT INTO `wz_district` VALUES (619, 211, 14, 'H. Yên Lạc', NULL);
INSERT INTO `wz_district` VALUES (620, 29, 15, 'TP. Yên Bái', NULL);
INSERT INTO `wz_district` VALUES (621, 29, 15, 'TX. Nghĩa Lộ', NULL);
INSERT INTO `wz_district` VALUES (622, 29, 14, 'H. Lục Yên', NULL);
INSERT INTO `wz_district` VALUES (623, 29, 14, 'H. Mù Căng Chải', NULL);
INSERT INTO `wz_district` VALUES (624, 29, 14, 'H. Trạm Tấu', NULL);
INSERT INTO `wz_district` VALUES (625, 29, 14, 'H. Trấn Yên', NULL);
INSERT INTO `wz_district` VALUES (626, 29, 14, 'H. Văn Chấn', NULL);
INSERT INTO `wz_district` VALUES (627, 29, 14, 'H. Văn Yên', NULL);
INSERT INTO `wz_district` VALUES (628, 29, 14, 'H. Yên Bình', NULL);
INSERT INTO `wz_district` VALUES (629, 4, 12, 'H. Chương Mỹ', NULL);
INSERT INTO `wz_district` VALUES (630, 4, 12, 'H. Đan Phượng', NULL);
INSERT INTO `wz_district` VALUES (631, 4, 12, 'Q. Hà Đông', NULL);
INSERT INTO `wz_district` VALUES (632, 4, 12, 'H. Hoài Đức', NULL);
INSERT INTO `wz_district` VALUES (633, 4, 12, 'H. Phú Xuyên', NULL);
INSERT INTO `wz_district` VALUES (634, 241, 12, 'P. Thị Cầu', NULL);
INSERT INTO `wz_district` VALUES (635, 651, 12, 'H. Chơn Thành', NULL);
INSERT INTO `wz_district` VALUES (636, 511, 12, 'Q. Cẩm Lệ', NULL);
INSERT INTO `wz_district` VALUES (637, 500, 12, 'H. Ea H''leo', NULL);
INSERT INTO `wz_district` VALUES (638, 500, 12, 'H. Ea Kar ', NULL);
INSERT INTO `wz_district` VALUES (639, 500, 12, 'H. M''adrac', NULL);
INSERT INTO `wz_district` VALUES (640, 500, 12, 'H. Krông Búk', NULL);
INSERT INTO `wz_district` VALUES (641, 31, 12, 'H. An Dương', NULL);
INSERT INTO `wz_district` VALUES (642, 58, 12, 'H. Cam Lâm', NULL);
INSERT INTO `wz_district` VALUES (643, 350, 12, 'X. Mỹ Xá', NULL);
INSERT INTO `wz_district` VALUES (644, 38, 12, 'TX. Thái Hòa', NULL);
INSERT INTO `wz_district` VALUES (645, 510, 2, 'H. Duy Xuyên', NULL);
INSERT INTO `wz_district` VALUES (646, 37, 122, 'P. Ba Đình', NULL);
INSERT INTO `wz_district` VALUES (647, 37, 12, 'H. Quảng Xương', NULL);
INSERT INTO `wz_district` VALUES (648, 211, 12, 'TX. Phúc Yên', NULL);
INSERT INTO `wz_district` VALUES (649, 4, 2, 'H. Ba Vì', NULL);
INSERT INTO `wz_district` VALUES (650, 4, 2, 'T. Bắc Ninh', NULL);
INSERT INTO `wz_district` VALUES (651, 4, 22, 'T. Hà Tây', NULL);
INSERT INTO `wz_district` VALUES (652, 4, 2, 'T. Hưng Yên', NULL);
INSERT INTO `wz_district` VALUES (653, 4, 2, 'H. Mê Linh', NULL);
INSERT INTO `wz_district` VALUES (654, 4, 1, 'H. Mỹ Đức', NULL);
INSERT INTO `wz_district` VALUES (655, 4, 2, 'P. Nguyễn Tuân', NULL);
INSERT INTO `wz_district` VALUES (656, 4, 12, 'H. Quốc Oai', NULL);
INSERT INTO `wz_district` VALUES (657, 4, 2, 'TX. Sơn Tây', NULL);
INSERT INTO `wz_district` VALUES (658, 4, 11, 'X. Tân Triều', NULL);
INSERT INTO `wz_district` VALUES (659, 4, 222, 'H. Thạch Thất', NULL);
INSERT INTO `wz_district` VALUES (660, 4, 12, 'H. Văn Giang', NULL);
INSERT INTO `wz_district` VALUES (663, 4, 22, 'H. Thường Tín', NULL);
INSERT INTO `wz_district` VALUES (664, 281, 22, 'H. Sơn Động', NULL);
INSERT INTO `wz_district` VALUES (665, 651, 2, 'H. Bù Gia Mập', NULL);
INSERT INTO `wz_district` VALUES (666, 61, 122, 'H. Trảng Bom', NULL);
INSERT INTO `wz_district` VALUES (667, 38, 22, 'H. Tân Kỳ', NULL);
INSERT INTO `wz_district` VALUES (668, 280, 11, 'Q. Phú Lương ', NULL);
INSERT INTO `wz_district` VALUES (669, 37, 22, 'H. Thọ Xuân', NULL);
INSERT INTO `wz_district` VALUES (670, 37, 22, 'H. Tĩnh Gia', NULL);
INSERT INTO `wz_district` VALUES (671, 37, 22, 'H. Triệu Sơn', NULL);
INSERT INTO `wz_district` VALUES (672, 211, 22, 'H. Tam Đảo', NULL);
INSERT INTO `wz_district` VALUES (673, 281, 22, 'P. Hoàng Văn Thụ', NULL);
INSERT INTO `wz_district` VALUES (674, 36, 12, 'H. Yên Định', NULL);
INSERT INTO `wz_district` VALUES (675, 4, 1, 'TT. Xuân Mai', NULL);
INSERT INTO `wz_district` VALUES (676, 4, 22, 'TT. Phú Minh', NULL);
INSERT INTO `wz_district` VALUES (677, 4, 22, 'H. Đông Ba', NULL);
INSERT INTO `wz_district` VALUES (678, 4, 22, 'Q. Hòa Bình', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_facebook`
-- 

DROP TABLE IF EXISTS `wz_facebook`;
CREATE TABLE IF NOT EXISTS `wz_facebook` (
  `id` int(11) NOT NULL auto_increment,
  `post_id` varchar(64) default NULL,
  `type` varchar(32) default NULL,
  `from` text,
  `message` text,
  `caption` text,
  `photo` varchar(255) default NULL,
  `link` text,
  `like` int(32) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `wz_facebook`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `wz_facebook_hashtag`
-- 

DROP TABLE IF EXISTS `wz_facebook_hashtag`;
CREATE TABLE IF NOT EXISTS `wz_facebook_hashtag` (
  `id` int(11) NOT NULL auto_increment,
  `hashtag` varchar(255) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `wz_facebook_hashtag`
-- 

INSERT INTO `wz_facebook_hashtag` VALUES (1, 'transanglap', 1, '2014-04-03 15:54:30', '2014-04-03 15:54:30');
INSERT INTO `wz_facebook_hashtag` VALUES (2, 'wizardww', 1, '2014-04-03 15:54:36', '2014-04-03 15:54:36');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_file`
-- 

DROP TABLE IF EXISTS `wz_file`;
CREATE TABLE IF NOT EXISTS `wz_file` (
  `id` int(11) NOT NULL auto_increment,
  `mid` int(11) default NULL COMMENT 'Module ID',
  `nid` int(11) default NULL COMMENT 'Content ID',
  `field` int(11) default '0' COMMENT 'Field ID',
  `data` text,
  `file` varchar(255) default NULL,
  `order` int(11) default '0',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

-- 
-- Dumping data for table `wz_file`
-- 

INSERT INTO `wz_file` VALUES (88, 2, 21, 56, '{"title":"","caption":"","youtube":""}', '2014/04/17/7f934b888c1613dab2d6c84a2d8c2ffc_1397724005.jpg', 0, 1, '2014-04-18 14:21:06', '2014-04-17 15:40:31');
INSERT INTO `wz_file` VALUES (72, 2, 17, 56, '{"title":"","caption":"","youtube":""}', '2014/04/05/28a7b3e6fd547b75c905c10948d843f5_1396664940.jpg', 0, 1, '2014-04-17 11:06:16', '2014-04-05 09:29:35');
INSERT INTO `wz_file` VALUES (73, 2, 17, 56, '{"title":"","caption":"","youtube":""}', '2014/04/05/eb9df57e6dee06b196cc3e7a3fbb7e09_1396665796.jpg', 0, 1, '2014-04-17 11:06:16', '2014-04-05 09:43:16');
INSERT INTO `wz_file` VALUES (74, 10, 5, 64, '{"title":"","caption":"","youtube":""}', '2014/04/05/7d2eb8bb049b51a8c32fbe1482fd9887_1396668925.jpg', 0, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28');
INSERT INTO `wz_file` VALUES (75, 10, 5, 64, '{"title":"","caption":"","youtube":""}', '2014/04/05/9b904cdbb4465b7439a0c5963c3b2a57_1396668917.jpg', 0, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28');
INSERT INTO `wz_file` VALUES (76, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/f35307d4899f0aebcb009d54a156a5b6_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45');
INSERT INTO `wz_file` VALUES (77, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/7c8e2003fd935395fad9d224e0e83e2f_1396672082.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45');
INSERT INTO `wz_file` VALUES (78, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/45f3700a66063ba475d0c593b016598d_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45');
INSERT INTO `wz_file` VALUES (79, 11, 2, 72, '{"title":"","caption":"","youtube":""}', '2014/04/05/2dfa64cd54bb173e66c12f5779fbc57b_1396672086.jpg', 0, 1, '2014-04-05 11:36:12', '2014-04-05 11:28:45');
INSERT INTO `wz_file` VALUES (93, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/bf43364452c1ed936a39ded89af002e2_1399518744.png', 2, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:23');
INSERT INTO `wz_file` VALUES (94, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/9328767c7a6c9ee75f68f606e2b38435_1399518744.png', 0, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:24');
INSERT INTO `wz_file` VALUES (95, 2, 23, 56, '{"title":"","caption":"","youtube":""}', '2014/05/08/d59f8154cb2262bddd943383b0f52699_1399518744.png', 1, 1, '2014-05-19 17:07:20', '2014-05-08 10:12:24');
INSERT INTO `wz_file` VALUES (89, 2, 22, 56, '{"title":"","caption":"","youtube":""}', '2014/04/18/b0ecd1cc0191500bd4f5f5246feb228e_1397805757.jpg', 0, 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02');
INSERT INTO `wz_file` VALUES (87, 2, 20, 56, '{"title":"","caption":"","youtube":""}', '2014/04/17/d863780ac7ebd56c431696d12fc1d432_1397723937.jpg', 0, 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_file_tmp`
-- 

DROP TABLE IF EXISTS `wz_file_tmp`;
CREATE TABLE IF NOT EXISTS `wz_file_tmp` (
  `id` int(11) NOT NULL auto_increment,
  `file` varchar(255) default NULL,
  `token` varchar(128) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

-- 
-- Dumping data for table `wz_file_tmp`
-- 

INSERT INTO `wz_file_tmp` VALUES (61, '2014/05/19/8428a731521b13476e4471f76fd35bc7_1400494724.jpg', '23_29c6674acb72cb2e0a53aacb44fffcc352baddb385155c3d82e5a42505f3ea60', 1, '2014-05-19 17:18:44', '2014-05-19 17:18:44');
INSERT INTO `wz_file_tmp` VALUES (60, '2014/05/19/107a203d01de352b80e6401518af0524_1400494540.jpg', '23_969f20cb1ba0fadfa01bd4c35100af8365ec3a08381ae4b037e6d83e2440f667', 1, '2014-05-19 17:15:40', '2014-05-19 17:15:40');
INSERT INTO `wz_file_tmp` VALUES (59, '2014/05/19/96d30b53d86d661fdbd672df2441737b_1400494491.jpg', '23_ac90a8cf40ab0996f599c9eba94bee8c6f0034fad454c20c63bd2e508bbb6a32', 1, '2014-05-19 17:14:51', '2014-05-19 17:14:51');
INSERT INTO `wz_file_tmp` VALUES (56, '2014/05/19/d4bb67aa41285b569222d456ab928ce5_1400494180.jpg', '23_cdc3b946214a2fc863590c645a6c4f091de537ca593408c68c1b1334f0389e9b', 1, '2014-05-19 17:09:40', '2014-05-19 17:09:40');
INSERT INTO `wz_file_tmp` VALUES (57, '2014/05/19/779b366a2694a491550512beff7aa614_1400494378.jpg', '23_8e556a5a2f772648728160d1634517c7a2b401de5fa00fd7106350b0e29a7d8c', 1, '2014-05-19 17:12:57', '2014-05-19 17:12:57');
INSERT INTO `wz_file_tmp` VALUES (58, '2014/05/19/bdbfe8a5d5dc676503a0cc762f2482d8_1400494417.jpg', '23_82132fec81a5206bdea79d8de1fc4fbb84796e05ee7b042208498283e575db2b', 1, '2014-05-19 17:13:37', '2014-05-19 17:13:37');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_home`
-- 

DROP TABLE IF EXISTS `wz_home`;
CREATE TABLE IF NOT EXISTS `wz_home` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `description` text,
  `content` text,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `wz_home`
-- 

INSERT INTO `wz_home` VALUES (8, 'Tiêu đề 1', 'Mô tả 1', '<p>Nội dung 1</p>\r\n', 1, '2013-10-25 10:31:01', '2013-10-25 10:31:01');
INSERT INTO `wz_home` VALUES (9, 'Tiêu đề 3', 'Mô tả 3', '<p>Nội dung 3</p>\r\n', 1, '2013-10-25 10:31:22', '2013-10-25 10:31:22');
INSERT INTO `wz_home` VALUES (10, 'Tiêu đề', '4', '<p>sdfsd</p>\r\n', 1, '2013-10-25 14:18:50', '2013-10-25 10:31:59');
INSERT INTO `wz_home` VALUES (14, '77777777', '7777777777777777777777', '<p>7777777777777777777777777777</p>\r\n', 1, '2013-10-25 10:32:37', '2013-10-25 10:32:37');
INSERT INTO `wz_home` VALUES (15, '8888888888888', '88888888888888888888888888888', '<p>888888888888888888888888888888888888888888888</p>\r\n', 1, '2013-10-25 14:18:43', '2013-10-25 10:32:46');
INSERT INTO `wz_home` VALUES (16, '99999999999999999', '999999999999999999999999999999', '<p>9999999999999999999999999999999999999999999999999</p>\r\n', 1, '2013-10-25 14:18:35', '2013-10-25 10:32:56');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_like`
-- 

DROP TABLE IF EXISTS `wz_like`;
CREATE TABLE IF NOT EXISTS `wz_like` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(16) default NULL,
  `cid` int(11) default NULL COMMENT 'Contest ID',
  `uid` int(11) default NULL,
  `ip` varchar(32) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `wz_like`
-- 

INSERT INTO `wz_like` VALUES (1, 'photo', 1, 1, '127.0.0.1', 1, '2014-02-20 11:19:32', '2014-02-20 11:19:32');
INSERT INTO `wz_like` VALUES (2, 'photo', 1, 2, '127.0.0.1', 1, '2014-02-20 11:19:40', '2014-02-20 11:19:40');
INSERT INTO `wz_like` VALUES (3, 'photo', 1, 3, '127.0.0.1', 1, '2014-02-20 11:19:47', '2014-02-20 11:19:47');
INSERT INTO `wz_like` VALUES (4, 'photo', 1, 4, '127.0.0.1', 1, '2014-02-20 11:19:53', '2014-02-20 11:19:53');
INSERT INTO `wz_like` VALUES (5, 'photo', 1, 5, '127.0.0.1', 1, '2014-02-20 11:19:58', '2014-02-20 11:19:58');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_news`
-- 

DROP TABLE IF EXISTS `wz_news`;
CREATE TABLE IF NOT EXISTS `wz_news` (
  `id` int(11) NOT NULL auto_increment,
  `ids` varchar(11) default NULL,
  `recursive` int(11) default NULL,
  `pid` int(11) default '0' COMMENT 'news_category',
  `type` varchar(32) default NULL,
  `title` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `description` text,
  `content` text,
  `image` int(11) default NULL,
  `video` varchar(64) default NULL,
  `youtube` varchar(32) default NULL,
  `datetime_picker` date default NULL,
  `maps` text,
  `tags` int(11) default NULL,
  `radio` varchar(32) default NULL,
  `select` varchar(128) default NULL,
  `province` int(11) default '0',
  `district` text,
  `color` text COMMENT 'color',
  `rgba` varchar(32) default NULL,
  `status` int(11) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- Dumping data for table `wz_news`
-- 

INSERT INTO `wz_news` VALUES (17, '69eb9f6ac68', 5, 1, '["7"]', 'Tran', 'tran-69eb9f6ac68', 'Mo ta', '<p>Noi Dung</p>\r\n', 2, '2014/04/05/b924103f2d1b6dc23f5dcf85b8dc7632_1396664974.jpg', NULL, '2014-04-17', '{"lat":"10.7747163","lng":"106.6761464","address":"232 Cao Th\\u1eafng, 12, Qu\\u1eadn 10, Ho Chi Minh City, Vietnam"}', 1, 'male', 'vpop', 281, '369', '3', '#9d4242', 1, '2014-04-17 11:06:16', '2014-04-05 09:29:35');
INSERT INTO `wz_news` VALUES (20, '761da2c26eb', 3, 2, '["vpop"]', 'Tesss', 'tesss', 'aaa', '<p>AAAaaaa<br />\r\n&nbsp;</p>\r\n', 1, '2014/04/17/b79295c0679e919f6ce69b4fb93c5b1f_1397723963.jpg', NULL, '2014-04-17', '{"lat":"40.46366700000001","lng":"-3.7492200000000366","address":"Spain"}', 1, 'male', 'vpop', 781, '359', '2', '#6a3333', 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26');
INSERT INTO `wz_news` VALUES (23, 'qhiMZu4xl76', 3, 1, '["vpop"]', 'ADsdsdsd', 'adsdsdsd-qhiMZu4xl76', 'fdsfdf', '<p><img alt="" src="uploads/editor/images/Tulips.jpg" style="height:768px; width:1024px" /></p>\r\n', 3, '', NULL, '2014-04-08', '{"lat":"10.8028981","lng":"106.65009140000006","address":"232 C\\u1ed9ng H\\u00f2a, 12, Tan Binh District, Ho Chi Minh City, Vietnam"}', 1, 'male', 'vpop', 781, '359', '2', '#936f6f', 1, '2014-05-19 17:07:20', '2014-04-18 14:26:06');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_news_category`
-- 

DROP TABLE IF EXISTS `wz_news_category`;
CREATE TABLE IF NOT EXISTS `wz_news_category` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `order` int(11) default '0',
  `status` tinyint(4) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `wz_news_category`
-- 

INSERT INTO `wz_news_category` VALUES (1, 'Giải trí', 'giai-tri', 0, 1, '2013-09-26 15:43:46', '2013-09-26 15:43:46');
INSERT INTO `wz_news_category` VALUES (2, 'Thể thao', 'the-thao', 0, 1, '2013-09-26 15:43:46', '2013-09-26 15:43:46');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_pin`
-- 

DROP TABLE IF EXISTS `wz_pin`;
CREATE TABLE IF NOT EXISTS `wz_pin` (
  `id` int(11) NOT NULL auto_increment,
  `randomkey` varchar(11) default NULL,
  `status` tinyint(1) default NULL,
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `randomkey` (`randomkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `wz_pin`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `wz_product`
-- 

DROP TABLE IF EXISTS `wz_product`;
CREATE TABLE IF NOT EXISTS `wz_product` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default '0' COMMENT 'product_category',
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `image` varchar(64) default NULL,
  `gallery` int(11) default '0',
  `description` text,
  `tags` int(11) default '0',
  `maps` text,
  `price` int(11) default NULL,
  `date` datetime default NULL,
  `youtube` varchar(32) default NULL,
  `province` int(11) default NULL,
  `district` int(11) default NULL,
  `recursive` int(11) default NULL,
  `select` varchar(32) default NULL,
  `checkbox` varchar(32) default NULL,
  `radio` varchar(32) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `wz_product`
-- 

INSERT INTO `wz_product` VALUES (6, 0, 'Test', NULL, NULL, 0, 'Mô tả Test', 4, '{"lat":"10.7688283","lng":"106.68344639999998","address":"232 Cao Th\\u1eafng, ph\\u01b0\\u1eddng 2, District 3, Ho Chi Minh City, Vietnam"}', NULL, '2014-04-11 17:08:35', 'h0oabAkzQR8', 781, 359, 5, 'uk', '["7"]', '7', 1, '2014-04-15 11:44:45', '2014-04-04 17:09:13');
INSERT INTO `wz_product` VALUES (10, 2, 'Taa', NULL, '2014/04/24/32656da956de970b7fc6071684921dc9_1398315774.jpg', 0, 'aaaaaaaaaaaa', 1, NULL, 111111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_product_category`
-- 

DROP TABLE IF EXISTS `wz_product_category`;
CREATE TABLE IF NOT EXISTS `wz_product_category` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `wz_product_category`
-- 

INSERT INTO `wz_product_category` VALUES (1, 'Quần áo', 'quan-ao', 1, '2014-04-15 17:12:03', '2014-04-15 17:12:03');
INSERT INTO `wz_product_category` VALUES (2, 'Giầy dép', 'giay-dep', 1, '2014-04-15 17:12:38', '2014-04-15 17:12:38');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_province`
-- 

DROP TABLE IF EXISTS `wz_province`;
CREATE TABLE IF NOT EXISTS `wz_province` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `slug` varchar(255) NOT NULL,
  `porder` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=782 ;

-- 
-- Dumping data for table `wz_province`
-- 

INSERT INTO `wz_province` VALUES (4, 0x48c3a0204ee1bb9969, 'ha-noi', 1, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (8, 0x54502e2048e1bb93204368c3ad204d696e68, 'tp-ho-chi-minh', 1, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (20, 0x4ce1baa16e672053c6a16e, 'lang-son', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (22, 0x53c6a16e204c61, 'son-la', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (25, 0x4cc3a26d20c490e1bb936e67, 'lam-dong', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (26, 0x43616f2042e1bab16e67, 'cao-bang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (27, 0x547579c3aa6e205175616e67, 'tuyen-quang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (29, 0x59c3aa6e2042c3a169, 'yen-bai', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (30, 0x4e696e682042c3ac6e68, 'ninh-binh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (31, 0x48e1baa369205068c3b26e67, 'hai-phong', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (33, 0x5175e1baa36e67204e696e68, 'quang-ninh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (36, 0x5468c3a1692042c3ac6e68, 'thai-binh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (37, 0x5468616e682048c3b361, 'thanh-hoa', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (38, 0x4e6768e1bb8720416e, 'nghe-an', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (39, 0x48c3a02054c4a96e68, 'ha-tinh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (43, 0x48c3a02054c3a279, 'ha-tay', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (52, 0x5175e1baa36e672042c3ac6e68, 'quang-binh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (53, 0x5175e1baa36e67205472e1bb8b, 'quang-tri', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (54, 0x5468e1bbab6120546869c3aa6e204875e1babf, 'thua-thien-hue', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (55, 0x5175e1baa36e67204e67c3a369, 'quang-ngai', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (56, 0x42c3ac6e682044c6b0c6a16e67, 'binh-duong', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (57, 0x5068c3ba2059c3aa6e, 'phu-yen', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (58, 0x4b68c3a16e682048c3b261, 'khanh-hoa', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (59, 0x476961204c6169, 'gia-lai', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (60, 0x4b6f6e2054756d, 'kon-tum', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (61, 0xc490e1bb936e67204e6169, 'dong-nai', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (62, 0x42c3ac6e6820546875e1baad6e, 'binh-thuan', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (63, 0x4cc3a06f20436169, 'lao-cai', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (64, 0x42c3a02052e1bb8b612056c5a96e672054c3a075, 'ba-ria-vung-tau', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (66, 0x54c3a279204e696e68, 'tay-ninh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (67, 0xc490e1bb936e67205468c3a170, 'dong-thap', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (68, 0x4e696e6820546875e1baad6e, 'ninh-thuan', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (70, 0x56c4a96e68204c6f6e67, 'vinh-long', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (72, 0x4c6f6e6720416e, 'long-an', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (73, 0x5469e1bb816e204769616e67, 'tien-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (74, 0x5472c3a02056696e68, 'tra-vinh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (75, 0x42e1babf6e20547265, 'ben-tre', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (76, 0x416e204769616e67, 'an-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (77, 0x4b69c3aa6e204769616e67, 'kien-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (79, 0x53c3b363205472c4836e67, 'soc-trang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (210, 0x5068c3ba205468e1bb8d, 'phu-tho', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (211, 0x56c4a96e68205068c3ba63, 'vinh-phuc', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (218, 0x48c3b2612042c3ac6e68, 'hoa-binh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (219, 0x48c3a0204769616e67, 'ha-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (230, 0xc49069e1bb876e204269c3aa6e, 'dien-bien', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (231, 0x4c6169204368c3a275, 'lai-chau', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (240, 0x42e1baa163204c69c3aa75, 'bac-lieu', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (241, 0x42e1baaf63204e696e68, 'bac-ninh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (280, 0x5468c3a169204e677579c3aa6e, 'thai-nguyen', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (281, 0x42e1baaf63204769616e67, 'bac-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (282, 0x5468616e682048c3b361, 'thanh-hoa', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (320, 0x48e1baa3692044c6b0c6a16e67, 'hai-duong', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (321, 0x48c6b06e672059c3aa6e, 'hung-yen', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (350, 0x4e616d20c490e1bb8b6e68, 'nam-dinh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (351, 0x48c3a0204e616d, 'ha-nam', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (500, 0xc490c4836b204cc4836b, 'dak-lak', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (501, 0xc490c4836b204ec3b46e67, 'dak-nong', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (510, 0x5175e1baa36e67204e616d, 'quang-nam', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (511, 0xc490c3a0204ee1bab56e67, 'da-nang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (650, 0x42c3ac6e6820c490e1bb8b6e68, 'binh-dinh', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (651, 0x42c3ac6e68205068c6b0e1bb9b63, 'binh-phuoc', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (710, 0x43e1baa76e205468c6a1, 'can-tho', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (711, 0x48e1baad75204769616e67, 'hau-giang', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (780, 0x43c3a0204d6175, 'ca-mau', 0, 1, NULL, NULL);
INSERT INTO `wz_province` VALUES (781, 0x42e1baaf632043e1baa16e, 'bac-can', 0, 1, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_reminder`
-- 

DROP TABLE IF EXISTS `wz_reminder`;
CREATE TABLE IF NOT EXISTS `wz_reminder` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `content` text,
  `time` datetime default NULL,
  `link` varchar(255) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dumping data for table `wz_reminder`
-- 

INSERT INTO `wz_reminder` VALUES (1, 'Tieu de 1', 'Nội dung', '2014-02-24 17:57:26', '', 1, '2014-02-24 17:59:21', '2014-02-24 17:59:21');
INSERT INTO `wz_reminder` VALUES (2, 'Teee', 'eeeeeeeee', '2014-02-23 17:59:27', '', 1, '2014-02-24 18:01:48', '2014-02-24 18:01:48');
INSERT INTO `wz_reminder` VALUES (18, 'T27', 'M27', '2014-02-27 17:09:05', '', 1, '2014-02-25 17:09:16', '2014-02-25 17:09:16');
INSERT INTO `wz_reminder` VALUES (4, 'T26', 'M26', '2014-02-23 09:33:29', '', 1, '2014-02-25 09:33:38', '2014-02-25 09:33:38');
INSERT INTO `wz_reminder` VALUES (16, 'T26', 'M26', '2014-02-26 17:07:42', '', 1, '2014-02-25 17:07:50', '2014-02-25 17:07:50');
INSERT INTO `wz_reminder` VALUES (24, 'T26', 'M26', '2014-02-26 17:07:42', 'http://localhost/phpMyAdmin/', 1, '2014-02-25 17:17:17', '2014-02-25 17:17:17');
INSERT INTO `wz_reminder` VALUES (7, 'T13', 'M13', '2014-02-13 14:31:51', '', 1, '2014-02-25 14:32:11', '2014-02-25 14:32:11');
INSERT INTO `wz_reminder` VALUES (8, 'T14', 'M14', '2014-02-14 14:32:14', '', 1, '2014-02-25 14:32:24', '2014-02-25 14:32:24');
INSERT INTO `wz_reminder` VALUES (9, 'T15', 'M15', '2014-02-15 14:32:26', '', 1, '2014-02-25 14:32:36', '2014-02-25 14:32:36');
INSERT INTO `wz_reminder` VALUES (17, 'T27', 'M27', '2014-02-27 17:09:05', '', 1, '2014-02-25 17:09:16', '2014-02-25 17:09:16');
INSERT INTO `wz_reminder` VALUES (25, 'T26', 'M26', '2014-02-26 17:07:42', 'http://localhost/phpMyAdmin/', 1, '2014-02-25 17:18:16', '2014-02-25 17:18:16');
INSERT INTO `wz_reminder` VALUES (20, 'T266', 'M266', '2014-02-26 17:10:38', '', 1, '2014-02-25 17:10:48', '2014-02-25 17:10:48');
INSERT INTO `wz_reminder` VALUES (27, 'T25555555555', 'M251', '2014-02-25 17:05:19', 'http://localhost/phpMyAdmin/', 1, '2014-02-25 17:25:54', '2014-02-25 17:24:24');
INSERT INTO `wz_reminder` VALUES (41, 'Nhập bài 2', 'Test', '2014-04-05 00:00:00', '', 1, '2014-04-05 10:39:48', '2014-04-05 10:39:48');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_sessions`
-- 

DROP TABLE IF EXISTS `wz_sessions`;
CREATE TABLE IF NOT EXISTS `wz_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(45) NOT NULL default '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `wz_sessions`
-- 

INSERT INTO `wz_sessions` VALUES ('a65f4c58d7c6f7caa4b6ae813c1a1f67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', 1400494713, 'a:11:{s:9:"user_data";s:0:"";s:12:"adminwz_lang";s:2:"vi";s:9:"admin_uid";s:1:"1";s:14:"admin_username";s:5:"admin";s:11:"admin_email";s:22:"lap.transang@gmail.com";s:14:"admin_fullname";s:18:"Trần Sáng Lập";s:9:"admin_rid";s:1:"0";s:12:"admin_avatar";s:132:"{"x1":0,"x2":0,"y1":0,"y2":0,"zoom":0,"url":"2014{{slash}}/05{{slash}}/07{{slash}}/2bf2adc763b6ac9e38acfb3c88b8f3db_1399431563.jpg"}";s:5:"admin";b:1;s:7:"ga_auth";s:310:"DQAAANEAAACCvKOfXHF-xBESjOH4lsOgJAeBTD0Ax3J_D-GfnXx8tNAm6lmQW14UnHUl6ofaZhg7BN2FP92peMqb_Ou3TZTqmsaInvorW0ZPMpkXPignOuMp4Z6wB3wP1DWU9A79tlrEtLEDQ0ckrOo4vF002YuRRINpnAAtYuN3xn8Af6p-3vSjkCef6IoeYGpTXUjiV22xOP0l5iUnQPy5Vj9EBfhAX4M9Ko6KLkspNMC0ChTLlWao13PH6AHVvDByiHS3fzlyIvZhZQpf_6UszgHkS8cQT9j3doBfDYZUCNHy3-mNgA";s:18:"referrer_page_list";s:0:"";}');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_tags`
-- 

DROP TABLE IF EXISTS `wz_tags`;
CREATE TABLE IF NOT EXISTS `wz_tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `wz_tags`
-- 

INSERT INTO `wz_tags` VALUES (1, 'Thể thao', 'the-thao', 1, '2013-10-11 15:17:23', '2013-10-11 15:17:25');
INSERT INTO `wz_tags` VALUES (2, 'Tin tức', 'tin-tuc', 1, '2013-10-11 15:17:23', '2013-10-11 15:17:23');
INSERT INTO `wz_tags` VALUES (3, 'Kha Yen Nhi', 'kha-yen-nhi', 1, '2013-10-17 15:47:39', '2013-10-17 15:47:39');
INSERT INTO `wz_tags` VALUES (4, 'TSL', 'tsl', 1, '2013-10-17 15:47:39', '2013-10-17 15:47:39');
INSERT INTO `wz_tags` VALUES (5, 'Soc Trang', 'soc-trang', 1, '2013-10-17 15:52:35', '2013-10-17 15:52:35');
INSERT INTO `wz_tags` VALUES (6, 'Tran', 'tran', 1, '2013-10-17 16:02:16', '2013-10-17 16:02:16');
INSERT INTO `wz_tags` VALUES (7, 'Can Thơ', 'can-tho', 1, '2013-10-17 16:34:20', '2013-10-17 16:34:20');
INSERT INTO `wz_tags` VALUES (8, 'Lập Vĩ', 'lap-vi', 1, '2013-10-18 23:16:47', '2013-10-18 23:16:47');
INSERT INTO `wz_tags` VALUES (9, 'Bạc Liêu', 'bac-lieu', 1, '2013-10-19 10:23:02', '2013-10-19 10:23:02');
INSERT INTO `wz_tags` VALUES (10, 'Wizard', 'wizard', 1, '2013-10-19 10:44:27', '2013-10-19 10:44:27');
INSERT INTO `wz_tags` VALUES (11, 'Array', 'array', 1, '2014-03-20 11:35:09', '2014-03-20 11:35:09');
INSERT INTO `wz_tags` VALUES (12, 'aaaaaa', 'aaaaaa', 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12');
INSERT INTO `wz_tags` VALUES (13, 'Giii', 'giii', 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45');
INSERT INTO `wz_tags` VALUES (14, 'Sandal', 'sandal', 1, '2014-04-15 17:32:52', '2014-04-15 17:32:52');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_tags_join`
-- 

DROP TABLE IF EXISTS `wz_tags_join`;
CREATE TABLE IF NOT EXISTS `wz_tags_join` (
  `id` int(11) NOT NULL auto_increment,
  `mid` int(11) default NULL COMMENT 'Module ID',
  `nid` int(11) default NULL COMMENT 'Node ID',
  `tid` int(11) default NULL COMMENT 'Tags ID',
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- 
-- Dumping data for table `wz_tags_join`
-- 

INSERT INTO `wz_tags_join` VALUES (25, 2, 17, 2, 1, '2014-04-05 09:29:35', '2014-04-05 09:29:35');
INSERT INTO `wz_tags_join` VALUES (32, 11, 3, 1, 1, '2014-04-08 10:23:03', '2014-04-08 10:23:03');
INSERT INTO `wz_tags_join` VALUES (30, 10, 5, 2, 1, '2014-04-05 10:35:28', '2014-04-05 10:35:28');
INSERT INTO `wz_tags_join` VALUES (29, 10, 4, 1, 1, '2014-04-05 10:31:18', '2014-04-05 10:31:18');
INSERT INTO `wz_tags_join` VALUES (23, 9, 6, 2, 1, '2014-04-04 17:09:13', '2014-04-04 17:09:13');
INSERT INTO `wz_tags_join` VALUES (44, 2, 21, 2, 1, '2014-04-17 15:40:31', '2014-04-17 15:40:31');
INSERT INTO `wz_tags_join` VALUES (34, 11, 4, 1, 1, '2014-04-15 11:16:31', '2014-04-15 11:16:31');
INSERT INTO `wz_tags_join` VALUES (35, 11, 5, 3, 1, '2014-04-15 11:20:39', '2014-04-15 11:20:39');
INSERT INTO `wz_tags_join` VALUES (36, 9, 6, 1, 1, '2014-04-15 11:43:58', '2014-04-15 11:43:58');
INSERT INTO `wz_tags_join` VALUES (37, 9, 6, 12, 1, '2014-04-15 11:44:12', '2014-04-15 11:44:12');
INSERT INTO `wz_tags_join` VALUES (38, 9, 6, 13, 1, '2014-04-15 11:44:45', '2014-04-15 11:44:45');
INSERT INTO `wz_tags_join` VALUES (47, 9, 10, 2, 1, '2014-04-24 12:02:57', '2014-04-24 12:02:57');
INSERT INTO `wz_tags_join` VALUES (43, 2, 20, 2, 1, '2014-04-17 15:39:26', '2014-04-17 15:39:26');
INSERT INTO `wz_tags_join` VALUES (45, 2, 22, 1, 1, '2014-04-18 14:23:02', '2014-04-18 14:23:02');
INSERT INTO `wz_tags_join` VALUES (46, 2, 23, 1, 1, '2014-04-18 14:26:06', '2014-04-18 14:26:06');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_test`
-- 

DROP TABLE IF EXISTS `wz_test`;
CREATE TABLE IF NOT EXISTS `wz_test` (
  `id` int(11) NOT NULL auto_increment,
  `ids` varchar(11) default NULL,
  `pid` text COMMENT 'test_category',
  `title_vi` varchar(255) default NULL,
  `title_en` varchar(255) default NULL,
  `slug_vi` varchar(255) default NULL,
  `slug_en` varchar(255) default NULL,
  `description` text,
  `content` text,
  `image` varchar(255) default NULL,
  `tags` int(11) default NULL,
  `gallery` int(11) default NULL,
  `maps` text,
  `meta_keyword` text,
  `meta_description` text,
  `article` int(11) default NULL,
  `province` int(11) default NULL,
  `district` int(11) default NULL,
  `status` tinyint(1) default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `wz_test`
-- 

INSERT INTO `wz_test` VALUES (3, 'ebdbef68819', '["1","2"]', 'Tran Sang Lap', NULL, 'tran-sang-lap-ebdbef68819', NULL, 'Mô tả', '<p>Nội dung</p>\r\n', NULL, 1, NULL, NULL, 'Keyword', 'description', 14, 64, 352, 1, '2014-04-15 10:34:31', '2014-04-08 10:23:03');
INSERT INTO `wz_test` VALUES (4, 'fc7dab6d7d4', '["2222","22"]', 'Test', NULL, 'test-fc7dab6d7d4', NULL, 'AAAA', '<p>Aaaaaa<br />\r\n&nbsp;</p>\r\n', NULL, 1, NULL, NULL, '', '', 4, 64, 352, 1, '2014-04-15 11:16:31', '2014-04-15 11:16:31');
INSERT INTO `wz_test` VALUES (5, 'a4112141130', '1', 'Tiêu đề', 'Title', 'tieu-de', 'title', 'aaaaa', '<p>aaaaaaaaaa<br />\r\n&nbsp;</p>\r\n', NULL, 1, NULL, NULL, '', '', 14, 79, 566, 1, '2014-04-21 15:15:36', '2014-04-15 11:20:39');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_test_article`
-- 

DROP TABLE IF EXISTS `wz_test_article`;
CREATE TABLE IF NOT EXISTS `wz_test_article` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL,
  `name_vi` varchar(255) default NULL,
  `name_en` varchar(255) default NULL,
  `slug_vi` varchar(255) default NULL,
  `slug_en` varchar(255) NOT NULL,
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `wz_test_article`
-- 

INSERT INTO `wz_test_article` VALUES (1, 0, 'Giới thiệu', 'About', 'gioi-thieu', 'about', '2013-11-11 10:47:22', '2013-11-11 10:47:22');
INSERT INTO `wz_test_article` VALUES (2, 0, 'Lĩnh vực', NULL, NULL, '', '2013-11-11 10:47:22', '2013-11-11 10:47:22');
INSERT INTO `wz_test_article` VALUES (3, 1, 'Thông điệp', NULL, NULL, '', '2013-11-11 10:47:44', '2013-11-11 10:47:47');
INSERT INTO `wz_test_article` VALUES (4, 2, 'Bất động sản', NULL, NULL, '', '2013-11-11 10:47:44', '2013-11-11 10:47:44');
INSERT INTO `wz_test_article` VALUES (5, 3, 'Trách nhiệm xã hội', NULL, NULL, '', '2013-11-11 10:48:58', '2013-11-11 10:48:58');
INSERT INTO `wz_test_article` VALUES (6, 1, 'Công ty', NULL, NULL, '', '2013-11-16 11:28:58', '2013-11-16 11:28:58');
INSERT INTO `wz_test_article` VALUES (7, 1, 'Lịch sử', NULL, NULL, '', '2013-11-16 11:28:58', '2013-11-16 11:28:58');
INSERT INTO `wz_test_article` VALUES (8, 3, 'Trường học', NULL, NULL, '', '2013-11-16 11:30:39', '2013-11-16 11:30:39');
INSERT INTO `wz_test_article` VALUES (9, 3, 'Cộng đồng', NULL, NULL, '', '2013-11-16 11:30:39', '2013-11-16 11:30:39');
INSERT INTO `wz_test_article` VALUES (10, 8, 'Cấp 1', NULL, NULL, '', '2013-11-16 11:31:07', '2013-11-16 11:31:07');
INSERT INTO `wz_test_article` VALUES (11, 8, 'Cấp 2', NULL, NULL, '', '2013-11-16 11:31:07', '2013-11-16 11:31:07');
INSERT INTO `wz_test_article` VALUES (12, 10, 'Cấp a', NULL, NULL, '', '2013-11-16 11:31:39', '2013-11-16 11:31:39');
INSERT INTO `wz_test_article` VALUES (13, 10, 'Cấp b', NULL, NULL, '', '2013-11-16 11:31:39', '2013-11-16 11:31:39');
INSERT INTO `wz_test_article` VALUES (14, 4, 'Nhà đất', NULL, NULL, '', '2013-11-16 16:09:43', '2013-11-16 16:09:45');
INSERT INTO `wz_test_article` VALUES (15, 4, 'Nhà ở', NULL, NULL, '', '2013-11-16 16:09:43', '2013-11-16 16:09:43');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_test_category`
-- 

DROP TABLE IF EXISTS `wz_test_category`;
CREATE TABLE IF NOT EXISTS `wz_test_category` (
  `id` int(11) NOT NULL auto_increment,
  `name_vi` varchar(255) default NULL,
  `name_en` varchar(255) default NULL,
  `slug_vi` varchar(255) default NULL,
  `slug_en` varchar(255) NOT NULL,
  `status` tinyint(1) default NULL,
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `wz_test_category`
-- 

INSERT INTO `wz_test_category` VALUES (1, 'Thể thao', 'Sport', 'the-thao', 'sport', 1, '2014-04-10 11:26:21', '2014-04-10 11:26:21');
INSERT INTO `wz_test_category` VALUES (2, 'Xã hội', 'Social', 'xa-hoi', 'social', 1, '2014-04-10 11:26:21', '2014-04-10 11:26:21');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_test_district`
-- 

DROP TABLE IF EXISTS `wz_test_district`;
CREATE TABLE IF NOT EXISTS `wz_test_district` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default NULL COMMENT 'Parent ID',
  `order` int(11) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) default NULL,
  `slug_vi` varchar(255) default NULL,
  `slug_en` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=679 ;

-- 
-- Dumping data for table `wz_test_district`
-- 

INSERT INTO `wz_test_district` VALUES (1, 8, 1, 'Q. 1', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (2, 8, 2, 'Q. 2', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (3, 8, 3, 'Q. 3', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (4, 8, 4, 'Q. 4', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (5, 8, 5, 'Q. 5', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (6, 8, 6, 'Q. 6', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (7, 8, 7, 'Q. 7', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (8, 8, 8, 'Q. 8', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (9, 8, 9, 'Q. 9', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (10, 8, 10, 'Q. 10', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (11, 8, 11, 'Q. 11', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (12, 8, 12, 'Q. 12', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (13, 8, 13, 'Q. Bình Thạnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (14, 8, 13, 'Q. Bình Tân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (15, 8, 13, 'Q. Gò Vấp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (16, 8, 13, 'Q. Phú Nhuận', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (17, 8, 13, 'Q. Tân Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (18, 8, 13, 'Q. Tân Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (19, 8, 13, 'Q. Thủ Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (20, 8, 14, 'H. Bình Chánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (21, 8, 14, 'H. Cần Giờ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (22, 8, 14, 'H. Củ Chi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (23, 8, 14, 'H. Hóc Môn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (24, 8, 14, 'H. Nhà Bè', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (25, 4, 13, 'Q. Ba Đình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (26, 4, 13, 'Q. Cầu Giấy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (27, 4, 13, 'Q. Đống Đa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (28, 4, 13, 'Q. Hai Bà Trưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (29, 4, 2, 'Q. Hoàn Kiếm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (30, 4, 13, 'Q. Long Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (31, 4, 13, 'Q. Tây Hồ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (32, 4, 13, 'Q. Thanh Xuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (33, 4, 13, 'Q. Hoàng Mai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (34, 4, 14, 'H. Đông Anh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (35, 4, 14, 'H. Gia Lâm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (36, 4, 14, 'H. Sóc Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (37, 4, 14, 'H. Thanh Trì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (38, 4, 14, 'H. Từ Liêm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (39, 710, 15, 'TP. Cần Thơ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (40, 710, 13, 'Q. Bình Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (41, 710, 13, 'Q. Ninh Kiều', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (42, 710, 13, 'Q. Cái Răng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (43, 710, 13, 'Q. Ô Môn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (44, 710, 14, 'H. Thốt Nốt', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (45, 710, 14, 'H. Cờ Đỏ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (46, 710, 14, 'H. Phong Điền', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (47, 710, 14, 'H. Vĩnh Thạnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (48, 711, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (49, 711, 14, 'H. Long Mỹ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (50, 711, 14, 'H. Phụng Hiệp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (51, 711, 14, 'H. Châu Thành A', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (52, 711, 14, 'H. Vị Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (53, 711, 15, 'TX. Vị Thanh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (54, 511, 13, 'Q. Hải Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (55, 511, 13, 'Q. Liên Chiểu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (56, 511, 13, 'Q. Ngũ Hành Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (57, 511, 13, 'Q. Sơn Trà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (58, 511, 13, 'Q. Thanh Khê', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (59, 511, 14, 'H. Hòa Vang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (60, 511, 14, 'H. Hoàng Sa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (61, 241, 15, 'TP. Bắc Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (62, 241, 14, 'H. Gia Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (63, 241, 14, 'H. Quế Võ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (64, 241, 14, 'H. Thuận Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (65, 241, 14, 'H. Tiên Du', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (66, 241, 14, 'H. Yên Phong', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (67, 241, 14, 'H. Từ  Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (68, 241, 14, 'H. Lương Tài', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (69, 75, 15, 'TX. Bến Tre', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (70, 75, 14, 'H. Ba Tri', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (71, 75, 14, 'H. Bình Đại', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (72, 75, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (73, 75, 14, 'H. Chợ Lách', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (74, 75, 14, 'H. Giồng Trôm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (75, 75, 14, 'H. Mỏ Cày', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (76, 75, 14, 'H. Thạnh Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (77, 56, 15, 'TX. Thủ Dầu Một', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (78, 56, 14, 'H. Bến Cát', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (79, 56, 14, 'H. Tân Uyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (80, 56, 14, 'H. Thuận An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (81, 56, 14, 'H. Dầu Tiếng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (82, 56, 14, 'H. Phú Giáo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (83, 56, 14, 'H. Dĩ An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (84, 650, 15, 'TP. Quy Nhơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (85, 650, 3, 'H. An Lão', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (86, 650, 14, 'H. An Nhơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (87, 650, 14, 'H. Hoài An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (88, 650, 14, 'H. Hoài Nhơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (89, 650, 14, 'H. Phù Cát', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (90, 650, 14, 'H. Phù Mỹ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (91, 650, 14, 'H. Tuy Phước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (92, 650, 14, 'H. Tây Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (93, 650, 14, 'H. Vân Canh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (94, 650, 14, 'H. Vĩnh Thạnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (95, 651, 15, 'TX. Đồng Xoài', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (96, 651, 14, 'H. Phước Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (97, 651, 14, 'H. Bình Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (98, 651, 14, 'H. Bù Đăng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (99, 651, 14, 'H. Đồng Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (100, 651, 14, 'H. Lộc Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (101, 62, 14, 'TP. Phan Thiết', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (102, 62, 14, 'H. Bắc Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (103, 62, 14, 'H. Đức Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (104, 62, 14, 'H. Hàm Thuận Bắc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (105, 62, 14, 'H. Hàm Thuận Nam', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (106, 62, 14, 'H. Hàm Tân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (107, 62, 14, 'H. Phú Qúy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (108, 62, 14, 'H. Tánh Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (109, 62, 14, 'H. Tuy Phong', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (110, 59, 15, 'TP. Pleiku', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (111, 59, 14, 'H. A Yun Pa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (112, 59, 14, 'H. An Khê', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (113, 59, 14, 'H. Chư Pah', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (114, 59, 14, 'H. Chư Prông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (115, 59, 14, 'H. Chư Sê', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (116, 59, 14, 'H. Đức Cơ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (117, 59, 3, 'H. KBang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (118, 59, 14, 'H. Krông Pa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (119, 59, 14, 'H. Kông Chro', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (120, 59, 14, 'H. Ia Grai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (121, 59, 14, 'H. Mang Yang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (122, 59, 14, 'H. Đăk Đoa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (123, 219, 15, 'TP. Hà Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (124, 219, 14, 'H. Bắc Mê', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (125, 219, 14, 'H. Bắc Quang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (126, 219, 14, 'H. Đồng Văn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (127, 219, 14, 'H. Hoàng Su Phì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (128, 219, 14, 'H. Mèo Vạc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (129, 219, 14, 'H. Quản Bạ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (130, 219, 14, 'H. Vị Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (131, 219, 14, 'H. Xín Mần', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (132, 219, 14, 'H. Yên Minh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (133, 351, 15, 'TX. Phủ Lý', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (134, 351, 14, 'H. Bình Lục', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (135, 351, 14, 'H. Duy Tiên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (136, 351, 14, 'H. Kim Bảng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (137, 351, 14, 'H. Lý Nhân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (138, 351, 14, 'H. Thanh Liêm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (139, 43, 15, 'TX. Hà Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (140, 43, 15, 'TX. Sơn Tây', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (141, 43, 14, 'H. Ba Vì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (142, 43, 14, 'H. Chương Mỹ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (143, 43, 14, 'H. Đan Phượng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (144, 43, 14, 'H. Hoài Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (145, 43, 14, 'H. Mỹ Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (146, 43, 14, 'H. Phú Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (147, 43, 14, 'H. Phúc Thọ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (148, 43, 14, 'H. Quốc Oai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (149, 43, 14, 'H. Thanh Oai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (150, 43, 14, 'H. Thạch Thất', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (151, 43, 14, 'H. Trường Tín', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (152, 43, 14, 'H. Ứng Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (153, 39, 15, 'TP. Hà Tĩnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (154, 39, 15, 'TX. Hồng Lĩnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (155, 39, 14, 'H. Can Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (156, 39, 14, 'H. Cẩm Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (157, 39, 14, 'H. Đức Thọ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (158, 39, 14, 'H. Hương Khê', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (159, 39, 14, 'H. Hương Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (160, 39, 14, 'H. Kỳ Anh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (161, 39, 14, 'H. Nghi Xuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (162, 39, 14, 'H. Thạch Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (163, 39, 14, 'H. Vũ Quang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (164, 60, 15, 'TP. Kon Tum', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (165, 60, 14, 'H. Đăk Glei', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (166, 60, 14, 'H. Đăk Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (167, 60, 14, 'H. Đăk Tô', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (168, 60, 14, 'H. Kon Plông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (169, 60, 14, 'H. Ngọc Hồi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (170, 60, 14, 'H. Sa Thầy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (171, 230, 15, 'TP. Điện Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (172, 230, 15, 'TX. Lai Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (173, 230, 14, 'H. Điện Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (174, 230, 14, 'H. Điện Biên Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (175, 230, 14, 'H. Mường Lay', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (176, 230, 14, 'H. Tuần Giáo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (177, 230, 14, 'H. Tủa Chùa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (178, 230, 14, 'H. Mường Nhé', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (179, 230, 14, 'H. Than Uyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (180, 231, 15, 'TX. Lai Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (181, 231, 14, 'H. Mường Tè', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (182, 231, 14, 'H. Phong Thổ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (183, 231, 14, 'H. Sìn Hồ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (184, 231, 14, 'H. Tam Đường', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (185, 20, 15, 'TP. Lạng Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (186, 20, 14, 'H. Bắc Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (187, 20, 14, 'H. Bình Gia ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (188, 20, 14, 'H. Cao Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (189, 20, 14, 'H. Chi Lăng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (190, 20, 14, 'H. Đình Lập', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (191, 20, 14, 'H. Hữu Lũng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (192, 20, 14, 'H. Lộc Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (193, 20, 14, 'H. Tràng Định', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (194, 20, 14, 'H. Văn Lãng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (195, 20, 14, 'H. Văn Quan', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (196, 63, 15, 'TP Lào Cai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (197, 63, 14, 'H. Simacai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (198, 63, 14, 'H. Bát Xát', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (199, 63, 14, 'H. Bảo Thắng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (200, 63, 14, 'H. Bảo Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (201, 63, 14, 'H. Bắc Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (202, 63, 14, 'H. Mường Khương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (203, 63, 14, 'H. Sapa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (204, 63, 14, 'H. Than Uyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (205, 63, 14, 'H. Văn Bàn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (206, 25, 15, 'TP. Đà Lạt', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (207, 25, 15, 'TX. Bảo Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (208, 25, 14, 'H. Bảo Lâm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (209, 25, 14, 'H. Cát Tiên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (210, 25, 14, 'H. Di Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (211, 25, 14, 'H. Đạ Huoai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (212, 25, 14, 'H. Đạ Teh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (213, 25, 14, 'H. Đơn Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (214, 25, 14, 'H. Đức Trọng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (215, 25, 14, 'H. Lạc Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (216, 25, 14, 'H. Lâm Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (217, 210, 15, 'TP. Việt Trì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (218, 210, 15, 'TX. Phú Thọ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (219, 210, 14, 'H. Đoan Hùng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (220, 210, 14, 'H. Hạ Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (221, 210, 14, 'H. Phù Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (222, 210, 14, 'H. Lâm Thao', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (223, 210, 14, 'H. Sông Thao', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (224, 210, 14, 'H. Tam Nông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (225, 210, 14, 'H. Thanh Ba', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (226, 210, 14, 'H. Thanh Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (227, 210, 14, 'H. Yên Lập', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (228, 210, 14, 'H. Thanh Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (229, 57, 14, 'TX. Tuy Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (230, 57, 14, 'H. Đồng Xuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (231, 57, 14, 'H. Sông Cầu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (232, 57, 14, 'H. Sông Hinh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (233, 57, 14, 'H. Sơn Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (234, 57, 14, 'H. Tuy An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (235, 57, 14, 'H. Tuy Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (236, 57, 14, 'H. Phú Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (237, 52, 15, 'TP. Đồng Hới', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (238, 52, 14, 'H. Bố Trạch', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (239, 52, 14, 'H. Lệ Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (240, 52, 14, 'H. Minh Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (241, 52, 14, 'H. Quảng Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (242, 52, 14, 'H. Quảng Trạch', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (243, 52, 14, 'H. Tuyên Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (244, 510, 15, 'TX. Tam Kỳ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (245, 510, 15, 'TX. Hội An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (246, 510, 14, 'H. Duy Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (247, 510, 14, 'H. Đại Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (248, 510, 14, 'H. Điện Bàn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (249, 510, 14, 'H. Giằng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (250, 510, 14, 'H. Hiên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (251, 510, 14, 'H. Hiệp Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (252, 510, 14, 'H. Núi Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (253, 510, 14, 'H. Phước Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (254, 510, 14, 'H. Quế Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (255, 510, 14, 'H. Thăng Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (256, 510, 14, 'H. Tiên Phước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (257, 510, 14, 'H. Trà My', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (258, 510, 14, 'H. Nam Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (259, 55, 15, 'TP. Quảng Ngãi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (260, 55, 14, 'H. Ba Tơ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (261, 55, 14, 'H. Bình Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (262, 55, 14, 'H. Đức Phổ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (263, 55, 14, 'H. Lý Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (264, 55, 14, 'H. Minh Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (265, 55, 0, 'H. Mộ Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (266, 55, 14, 'H. Nghĩa Hành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (267, 55, 14, 'H. Sơn Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (268, 55, 14, 'H. Sơn Tây', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (269, 55, 14, 'H. Sơn Tịnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (270, 55, 14, 'H. Trà Bồng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (271, 55, 14, 'H. Tư Nghĩa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (272, 280, 15, 'TP. Thái Nguyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (273, 280, 15, 'TX. Sông Công', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (274, 280, 14, 'H. Đại Từ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (275, 280, 14, 'H. Định Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (276, 280, 14, 'H. Đồng Hỷ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (277, 280, 14, 'H. Phổ Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (278, 280, 14, 'H. Phú Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (279, 280, 14, 'H. Phú Lương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (280, 280, 14, 'H. Võ Nhai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (281, 37, 15, 'TP Thanh Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (282, 37, 15, 'TX. Bỉm Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (283, 37, 15, 'TX. Sầm Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (284, 37, 14, 'H. Bá Thước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (285, 37, 14, 'H. Cẩm Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (286, 37, 14, 'H. Đông Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (287, 37, 0, 'H. Hà Trung', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (288, 37, 14, 'H. Hậu Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (289, 37, 14, 'H. Hoằng Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (290, 37, 14, 'H. Lang Chánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (291, 37, 14, 'H. Mường Lát', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (292, 37, 14, 'H. Nga Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (293, 37, 14, 'H. Ngọc Lặc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (294, 37, 14, 'H. Nông Cống', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (295, 37, 14, 'H. Như Thanh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (296, 37, 14, 'H. Như Xuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (297, 37, 14, 'H. Quan Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (298, 37, 14, 'H. Quan Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (299, 54, 15, 'TP Huế', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (300, 54, 14, 'H. A Lưới', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (301, 54, 14, 'H. Hương Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (302, 54, 14, 'H. Hương Trà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (303, 54, 14, 'H. Nam Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (304, 54, 14, 'H. Phong Điền', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (305, 54, 14, 'H. Phú Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (306, 54, 14, 'H. Phú Vang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (307, 54, 14, 'H. Quảng Điền', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (308, 73, 15, 'TP. Mỹ Tho', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (309, 73, 15, 'TX. Gò Công', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (310, 73, 14, 'H. Cai Lậy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (311, 73, 14, 'H. Cái Bè', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (312, 73, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (313, 73, 14, 'H. Chợ Gạo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (314, 73, 14, 'H. Gò Công Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (315, 73, 14, 'H. Gò Công Tây', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (316, 73, 14, 'H. Tân Phước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (317, 74, 15, 'TX. Trà Vinh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (318, 74, 14, 'H. Càng Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (319, 74, 14, 'H. Cầu Kè', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (320, 74, 14, 'H. Cầu Ngang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (321, 74, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (322, 74, 14, 'H. Duyên Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (323, 74, 14, 'H. Tiểu Cần', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (324, 74, 14, 'H. Trà Cú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (325, 31, 13, 'Q. Hồng Bàng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (326, 31, 13, 'Q. Kiến An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (327, 31, 13, 'Q. Lê Chân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (328, 31, 0, 'Q. Ngô Quyền', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (329, 31, 15, 'TX. Đồ Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (330, 31, 14, 'H. An Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (331, 31, 14, 'H. An Lão', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (332, 31, 14, 'H. Bạch Long Vĩ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (333, 31, 14, 'H. Cát Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (334, 31, 14, 'H. Kiến Thụy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (335, 31, 14, 'H. Tiên Lãng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (336, 31, 14, 'H. Thủy Nguyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (337, 31, 14, 'H. Vĩnh Bảo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (338, 76, 15, 'TX. Châu Đốc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (339, 76, 15, 'TP. Long Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (340, 76, 14, 'H. An Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (341, 76, 14, 'H. Châu Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (342, 76, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (343, 76, 14, 'H. Chợ Mới', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (344, 76, 14, 'H. Phú Tân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (345, 76, 14, 'H. Tân Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (346, 240, 15, 'TX. Bạc Liêu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (347, 240, 14, 'H. Gía Rai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (348, 240, 14, 'H. Hồng Dân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (349, 240, 14, 'H. Vĩnh Lợi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (350, 240, 14, 'H. Phước Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (351, 240, 14, 'H. Đông Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (352, 64, 15, 'TP. Vũng Tàu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (353, 64, 15, 'TX. Bà Rịa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (354, 64, 14, 'H. Châu Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (355, 64, 14, 'H. Côn Đảo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (356, 64, 14, 'H. Long Đất', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (357, 64, 14, 'H. Tân Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (358, 64, 14, 'H. Xuyên Mộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (359, 781, 15, 'TX. Bắc Cạn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (360, 781, 14, 'H. Ba Bể', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (361, 781, 14, 'H. Bạch Thông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (362, 781, 14, 'H. Chợ Đồn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (363, 781, 14, 'H. Na Rì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (364, 781, 14, 'H. Ngân Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (365, 781, 14, 'H. Chợ Mới', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (366, 281, 15, 'TP. Bắc Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (367, 281, 14, 'H. Hiệp Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (368, 281, 14, 'H. Lạng Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (369, 281, 14, 'H. Lục Nam', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (370, 281, 14, 'H. Lục Ngạn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (371, 281, 14, 'H. Sơn Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (372, 281, 14, 'H. Tân Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (373, 281, 14, 'H. Việt Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (374, 281, 14, 'H. Yên Dũng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (375, 281, 14, 'H. Yên Thế', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (376, 26, 15, 'TX. Cao Bằng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (377, 26, 14, 'H. Bảo Lạc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (378, 26, 14, 'H. Hà Quảng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (379, 26, 14, 'H. Hạ Lang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (380, 26, 14, 'H. Hòa An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (381, 26, 14, 'H. Nguyên Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (382, 26, 14, 'H. Quảng Uyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (383, 26, 14, 'H. Bảo Lâm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (384, 26, 14, 'H. Phục Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (385, 26, 14, 'H. Thạch An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (386, 26, 14, 'H. Thông Nông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (387, 26, 14, 'H. Trà Lĩnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (388, 26, 14, 'H. Trùng Khánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (389, 780, 15, 'TP. Cà Mau', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (390, 780, 14, 'H. Thới Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (391, 780, 14, 'H. U Minh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (392, 780, 14, 'H. Trần Văn Thời', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (393, 780, 14, 'H. Cái Nước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (394, 780, 14, 'H. Đầm Dơi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (395, 780, 14, 'H. Ngọc Điển', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (396, 500, 15, 'TP. Buôn Ma Thuột', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (397, 500, 14, 'H. Buôn Đôn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (398, 500, 14, 'H. Ea Kar', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (399, 500, 14, 'H. Ea Súp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (400, 500, 14, 'H. Krông Ana', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (401, 500, 14, 'H. Krông Bông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (402, 500, 14, 'H. Krông Buk', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (403, 500, 14, 'H. Krông Năng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (404, 500, 14, 'H. Krông Pắc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (405, 500, 14, 'H. Lăk', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (406, 501, 15, 'TX. Gia Nghĩa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (407, 501, 14, 'H. Đăk Mil', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (408, 501, 14, 'H. Cư Jut', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (409, 501, 14, 'H. Đăk Rlăp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (410, 501, 14, 'H. Krông Nô', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (411, 501, 14, 'H. Đắk Song', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (412, 61, 15, 'TP. Biên Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (413, 61, 14, 'H. Định Quán', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (414, 61, 0, 'H. Long Khánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (415, 61, 14, 'H. Long Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (416, 61, 14, 'H. Nhơn Trạch', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (417, 61, 0, 'H. Tân Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (418, 61, 14, 'H. Thống Nhất', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (419, 61, 14, 'H. Vĩnh Cửu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (420, 61, 14, 'H. Xuân Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (421, 67, 15, 'TP. Cao Lãnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (422, 67, 15, 'TX. Sa Đéc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (423, 67, 14, 'H. Cao Lãnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (424, 67, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (425, 67, 14, 'H. Hồng Hạnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (426, 67, 14, 'H. Lai Vung', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (427, 67, 14, 'H. Lấp Vò', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (428, 67, 14, 'H. Tam Nông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (429, 67, 14, 'H. Tân Hồng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (430, 67, 14, 'H. Thanh Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (431, 67, 14, 'H. Tháp Mười', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (432, 320, 15, 'TP. Hải Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (433, 320, 14, 'H. Bình Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (434, 320, 14, 'H. Cẩm Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (435, 320, 14, 'H. Chí Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (436, 320, 14, 'H. Gia Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (437, 320, 14, 'H. Kim Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (438, 320, 14, 'H. Kinh Môn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (439, 320, 0, 'H. Nam Sách', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (440, 320, 14, 'H. Ninh Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (441, 320, 14, 'H. Thanh Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (442, 320, 14, 'H. Thanh Miện', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (443, 320, 14, 'H. Tứ Kỳ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (444, 218, 15, 'TP. Hòa Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (445, 218, 14, 'H. Đà Bắc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (446, 218, 14, 'H. Kim Bôi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (447, 218, 14, 'H. Lạc Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (448, 218, 14, 'H. Lạc Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (449, 218, 14, 'H. Lương Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (450, 218, 14, 'H. Mai Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (451, 218, 14, 'H. Tân Lạc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (452, 218, 14, 'H. Yên Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (453, 218, 14, 'H. Kỳ Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (454, 218, 14, 'H. Cao Phong', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (455, 321, 15, 'TX. Hưng Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (456, 321, 14, 'H. An Thi', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (457, 321, 14, 'H. Kim Động', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (458, 321, 14, 'H. Phù Cừ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (459, 321, 14, 'H. Tiên Lữ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (460, 321, 14, 'H. Vân Lâm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (461, 321, 14, 'H. Mỹ Hào', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (462, 321, 14, 'H. Yên Mỹ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (463, 321, 14, 'H. Văn Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (464, 321, 14, 'H. Khoái Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (465, 58, 15, 'TP. Nha Trang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (466, 58, 15, 'TX. Cam Ranh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (467, 58, 14, 'H. Diên Khánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (468, 58, 14, 'H. Khánh Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (469, 58, 14, 'H. Khánh Vĩnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (470, 58, 14, 'H. Ninh Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (471, 58, 14, 'H. Trường Sa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (472, 58, 14, 'H. Vạn Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (473, 77, 15, 'TX. Rạch Giá', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (474, 77, 14, 'H. An Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (475, 77, 14, 'H. Kiên Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (476, 77, 14, 'H. An Minh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (477, 77, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (478, 77, 14, 'H. Gò Quao', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (479, 77, 14, 'H. Giồng Riềng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (480, 77, 14, 'H. Hà Tiên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (481, 77, 14, 'H. Hòn Đất', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (482, 77, 14, 'H. Kiên Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (483, 77, 14, 'H. Phú Quốc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (484, 77, 14, 'H. Tân Hiệp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (485, 77, 14, 'H. Vĩnh Thuận', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (486, 72, 15, 'TX. Tân An', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (487, 72, 14, 'H. Bến Lức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (488, 72, 14, 'H. Cần Đước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (489, 72, 14, 'H. Cần Giuộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (490, 72, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (491, 72, 14, 'H. Đức Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (492, 72, 14, 'H. Đức Huệ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (493, 72, 14, 'H. Mộc Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (494, 72, 14, 'H. Tân Hưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (495, 72, 14, 'H. Tân Thạnh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (496, 72, 14, 'H. Tân Trụ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (497, 72, 14, 'H. Thạnh Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (498, 72, 14, 'H. Thủ Thừa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (499, 72, 14, 'H. Vĩnh Hưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (500, 350, 15, 'TP. Nam Định', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (501, 350, 14, 'H. Giao Thủy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (502, 350, 14, 'H. Hải Hậu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (503, 350, 14, 'H. Mỹ Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (504, 350, 14, 'H. Nam Trực', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (505, 350, 14, 'H. Nghĩa Hưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (506, 350, 14, 'H. Trực Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (507, 350, 14, 'H. Xuân Trường', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (508, 350, 14, 'H. Vụ Bản', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (509, 350, 14, 'H. Ý Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (510, 38, 15, 'TP. Vinh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (511, 38, 15, 'TX. Cửa Lò', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (512, 38, 14, 'H. Anh Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (513, 38, 14, 'H. Con Cuông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (514, 38, 14, 'H. Diễn Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (515, 38, 14, 'H. Đô Lương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (516, 38, 14, 'H. Hưng Nguyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (517, 38, 14, 'H. Kỳ Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (518, 38, 14, 'H. Nam Đàn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (519, 38, 14, 'H. Nghi Lộc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (520, 38, 14, 'H. Nghĩa Đàn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (521, 38, 14, 'H. Quế Phong', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (522, 38, 14, 'H. Qùy Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (523, 38, 14, 'H. Qùy Hợp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (524, 38, 14, 'H. Quỳnh Lưu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (525, 38, 0, 'H. Tân Qùy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (526, 38, 14, 'H. Thanh Chương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (527, 38, 14, 'H. Tương Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (528, 38, 14, 'H. Yên Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (529, 30, 15, 'TP. Ninh Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (530, 30, 15, 'TX. Tam Điệp', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (531, 30, 14, 'H. Gia Viễn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (532, 30, 0, 'H. Hoa Lư', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (533, 30, 14, 'H. Kim Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (534, 30, 14, 'H. Nho Quang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (535, 30, 14, 'H. Yên Khánh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (536, 30, 14, 'H. Yên Mô', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (537, 68, 0, 'TX. Phan Rang-Tháp Chàm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (538, 68, 14, 'H. Ninh Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (539, 68, 14, 'H. Ninh Phước', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (540, 68, 14, 'H. Ninh Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (541, 68, 14, 'H. Bác Ai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (542, 33, 15, 'TP. Hạ Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (543, 33, 15, 'TX. Cẩm Phả', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (544, 33, 15, 'TX. Uông Bí', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (545, 33, 15, 'TX. Móng Cái', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (546, 33, 14, 'H. Ba Chẽ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (547, 33, 14, 'H. Bình Liêu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (548, 33, 14, 'H. Cô Tô', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (549, 33, 14, 'H. Đông Triều', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (550, 33, 14, 'H. Hải Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (551, 33, 14, 'H. Hoành Bồ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (552, 33, 14, 'H. Đầm Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (553, 33, 14, 'H. Tiên Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (554, 33, 14, 'H. Vân Đồn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (555, 33, 14, 'H. Yên Hưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (556, 53, 15, 'TX. Đông Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (557, 53, 15, 'TX. Quảng Trị', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (558, 53, 14, 'H. Cam Lộ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (559, 53, 14, 'H. Đakrông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (560, 53, 14, 'H. Gio Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (561, 53, 14, 'H. Hải Lãng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (562, 53, 14, 'H. Hướng Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (563, 53, 14, 'H. Triệu Phong', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (564, 53, 14, 'H. Vĩnh Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (565, 79, 15, 'TX. Sóc Trăng', 'TX. SOC TRANG', 'tx.soc-trang', 'tx.spc-trang');
INSERT INTO `wz_test_district` VALUES (566, 79, 14, 'H. Kế Sách', 'H. KE SACH', 'h-ke-sach', 'h-ke-sach');
INSERT INTO `wz_test_district` VALUES (567, 79, 14, 'H. Long Phú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (568, 79, 14, 'H. Mỹ Tú', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (569, 79, 14, 'H. Mỹ Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (570, 79, 14, 'H. Thạnh Trị', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (571, 79, 14, 'H. Vĩnh Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (572, 79, 14, 'H. Cù Lao Dung', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (573, 22, 15, 'TP. Sơn La', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (574, 22, 14, 'H. Bắc Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (575, 22, 14, 'H. Mai Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (576, 22, 14, 'H. Mộc Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (577, 22, 14, 'H. Mường La', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (578, 22, 14, 'H. Phù Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (579, 22, 14, 'H. Quỳnh Nhai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (580, 22, 14, 'H. Sông Mã', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (581, 22, 14, 'H. Thuận Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (582, 22, 14, 'H. Yên Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (583, 66, 15, 'TX. Tây Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (584, 66, 14, 'H. Bến Cầu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (585, 66, 14, 'H. Châu Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (586, 66, 14, 'H. Dương Minh Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (587, 66, 14, 'H. Gò Dầu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (588, 66, 14, 'H. Hòa Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (589, 66, 14, 'H. Tân Biên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (590, 66, 14, 'H. Tân Châu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (591, 66, 14, 'H. Trảng Bàng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (592, 36, 15, 'TP. Thái Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (593, 36, 14, 'H. Đông Hưng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (594, 36, 14, 'H. Hưng Hà', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (595, 36, 14, 'H. Kiến Xương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (596, 36, 14, 'H. Quỳnh Phụ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (597, 36, 14, 'H. Thái Thụy', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (598, 36, 14, 'H. Tiền Hải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (599, 36, 14, 'H. Vũ Thư', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (600, 27, 15, 'TX. Tuyên Quang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (601, 27, 14, 'H. Chiêm Hóa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (602, 27, 14, 'H. Hàm Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (603, 27, 14, 'H. Na Hang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (604, 27, 14, 'H. Sơn Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (605, 27, 14, 'H. Yên Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (606, 70, 15, 'TP. Vĩnh Long', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (607, 70, 14, 'H. Long Hồ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (608, 70, 14, 'H. Mang Thít', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (609, 70, 14, 'H. Bình Minh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (610, 70, 14, 'H. Tam Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (611, 70, 14, 'H. Trà On', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (612, 70, 14, 'H. Vũng Liêm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (613, 211, 15, 'TX. Vĩnh Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (614, 211, 14, 'H. Lập Thạch', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (615, 211, 14, 'H. Mê Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (616, 211, 14, 'H. Tam Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (617, 211, 14, 'H. Bình Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (618, 211, 14, 'H. Vĩnh Tường', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (619, 211, 14, 'H. Yên Lạc', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (620, 29, 15, 'TP. Yên Bái', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (621, 29, 15, 'TX. Nghĩa Lộ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (622, 29, 14, 'H. Lục Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (623, 29, 14, 'H. Mù Căng Chải', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (624, 29, 14, 'H. Trạm Tấu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (625, 29, 14, 'H. Trấn Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (626, 29, 14, 'H. Văn Chấn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (627, 29, 14, 'H. Văn Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (628, 29, 14, 'H. Yên Bình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (629, 4, 12, 'H. Chương Mỹ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (630, 4, 12, 'H. Đan Phượng', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (631, 4, 12, 'Q. Hà Đông', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (632, 4, 12, 'H. Hoài Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (633, 4, 12, 'H. Phú Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (634, 241, 12, 'P. Thị Cầu', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (635, 651, 12, 'H. Chơn Thành', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (636, 511, 12, 'Q. Cẩm Lệ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (637, 500, 12, 'H. Ea H''leo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (638, 500, 12, 'H. Ea Kar ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (639, 500, 12, 'H. M''adrac', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (640, 500, 12, 'H. Krông Búk', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (641, 31, 12, 'H. An Dương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (642, 58, 12, 'H. Cam Lâm', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (643, 350, 12, 'X. Mỹ Xá', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (644, 38, 12, 'TX. Thái Hòa', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (645, 510, 2, 'H. Duy Xuyên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (646, 37, 122, 'P. Ba Đình', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (647, 37, 12, 'H. Quảng Xương', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (648, 211, 12, 'TX. Phúc Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (649, 4, 2, 'H. Ba Vì', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (650, 4, 2, 'T. Bắc Ninh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (651, 4, 22, 'T. Hà Tây', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (652, 4, 2, 'T. Hưng Yên', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (653, 4, 2, 'H. Mê Linh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (654, 4, 1, 'H. Mỹ Đức', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (655, 4, 2, 'P. Nguyễn Tuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (656, 4, 12, 'H. Quốc Oai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (657, 4, 2, 'TX. Sơn Tây', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (658, 4, 11, 'X. Tân Triều', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (659, 4, 222, 'H. Thạch Thất', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (660, 4, 12, 'H. Văn Giang', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (663, 4, 22, 'H. Thường Tín', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (664, 281, 22, 'H. Sơn Động', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (665, 651, 2, 'H. Bù Gia Mập', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (666, 61, 122, 'H. Trảng Bom', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (667, 38, 22, 'H. Tân Kỳ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (668, 280, 11, 'Q. Phú Lương ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (669, 37, 22, 'H. Thọ Xuân', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (670, 37, 22, 'H. Tĩnh Gia', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (671, 37, 22, 'H. Triệu Sơn', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (672, 211, 22, 'H. Tam Đảo', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (673, 281, 22, 'P. Hoàng Văn Thụ', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (674, 36, 12, 'H. Yên Định', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (675, 4, 1, 'TT. Xuân Mai', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (676, 4, 22, 'TT. Phú Minh', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (677, 4, 22, 'H. Đông Ba', NULL, NULL, '');
INSERT INTO `wz_test_district` VALUES (678, 4, 22, 'Q. Hòa Bình', NULL, NULL, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_test_province`
-- 

DROP TABLE IF EXISTS `wz_test_province`;
CREATE TABLE IF NOT EXISTS `wz_test_province` (
  `id` int(11) NOT NULL auto_increment,
  `name_vi` varchar(255) character set utf8 collate utf8_bin default NULL,
  `name_en` varchar(255) default NULL,
  `slug_vi` varchar(255) NOT NULL,
  `slug_en` varchar(255) default NULL,
  `porder` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL default '1',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name_vi`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=782 ;

-- 
-- Dumping data for table `wz_test_province`
-- 

INSERT INTO `wz_test_province` VALUES (4, 0x48c3a0204ee1bb9969, 'Ha Noi', 'ha-noi', 'ha-noi', 1, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (8, 0x54502e2048e1bb93204368c3ad204d696e68, 'TP. Ho Chi Minh', 'tp-ho-chi-minh', 'tp-ho-chi-minh', 1, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (20, 0x4ce1baa16e672053c6a16e, NULL, 'lang-son', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (22, 0x53c6a16e204c61, NULL, 'son-la', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (25, 0x4cc3a26d20c490e1bb936e67, NULL, 'lam-dong', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (26, 0x43616f2042e1bab16e67, NULL, 'cao-bang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (27, 0x547579c3aa6e205175616e67, NULL, 'tuyen-quang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (29, 0x59c3aa6e2042c3a169, NULL, 'yen-bai', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (30, 0x4e696e682042c3ac6e68, NULL, 'ninh-binh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (31, 0x48e1baa369205068c3b26e67, NULL, 'hai-phong', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (33, 0x5175e1baa36e67204e696e68, NULL, 'quang-ninh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (36, 0x5468c3a1692042c3ac6e68, NULL, 'thai-binh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (37, 0x5468616e682048c3b361, NULL, 'thanh-hoa', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (38, 0x4e6768e1bb8720416e, NULL, 'nghe-an', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (39, 0x48c3a02054c4a96e68, NULL, 'ha-tinh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (43, 0x48c3a02054c3a279, NULL, 'ha-tay', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (52, 0x5175e1baa36e672042c3ac6e68, NULL, 'quang-binh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (53, 0x5175e1baa36e67205472e1bb8b, NULL, 'quang-tri', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (54, 0x5468e1bbab6120546869c3aa6e204875e1babf, NULL, 'thua-thien-hue', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (55, 0x5175e1baa36e67204e67c3a369, NULL, 'quang-ngai', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (56, 0x42c3ac6e682044c6b0c6a16e67, NULL, 'binh-duong', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (57, 0x5068c3ba2059c3aa6e, NULL, 'phu-yen', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (58, 0x4b68c3a16e682048c3b261, NULL, 'khanh-hoa', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (59, 0x476961204c6169, NULL, 'gia-lai', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (60, 0x4b6f6e2054756d, NULL, 'kon-tum', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (61, 0xc490e1bb936e67204e6169, NULL, 'dong-nai', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (62, 0x42c3ac6e6820546875e1baad6e, NULL, 'binh-thuan', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (63, 0x4cc3a06f20436169, NULL, 'lao-cai', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (64, 0x42c3a02052e1bb8b612056c5a96e672054c3a075, NULL, 'ba-ria-vung-tau', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (66, 0x54c3a279204e696e68, NULL, 'tay-ninh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (67, 0xc490e1bb936e67205468c3a170, NULL, 'dong-thap', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (68, 0x4e696e6820546875e1baad6e, NULL, 'ninh-thuan', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (70, 0x56c4a96e68204c6f6e67, NULL, 'vinh-long', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (72, 0x4c6f6e6720416e, NULL, 'long-an', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (73, 0x5469e1bb816e204769616e67, NULL, 'tien-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (74, 0x5472c3a02056696e68, NULL, 'tra-vinh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (75, 0x42e1babf6e20547265, NULL, 'ben-tre', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (76, 0x416e204769616e67, NULL, 'an-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (77, 0x4b69c3aa6e204769616e67, NULL, 'kien-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (79, 0x53c3b363205472c4836e67, 'Soc Trang', 'soc-trang', 'soc-trang', 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (210, 0x5068c3ba205468e1bb8d, NULL, 'phu-tho', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (211, 0x56c4a96e68205068c3ba63, NULL, 'vinh-phuc', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (218, 0x48c3b2612042c3ac6e68, NULL, 'hoa-binh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (219, 0x48c3a0204769616e67, NULL, 'ha-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (230, 0xc49069e1bb876e204269c3aa6e, NULL, 'dien-bien', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (231, 0x4c6169204368c3a275, NULL, 'lai-chau', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (240, 0x42e1baa163204c69c3aa75, NULL, 'bac-lieu', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (241, 0x42e1baaf63204e696e68, NULL, 'bac-ninh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (280, 0x5468c3a169204e677579c3aa6e, NULL, 'thai-nguyen', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (281, 0x42e1baaf63204769616e67, NULL, 'bac-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (282, 0x5468616e682048c3b361, NULL, 'thanh-hoa', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (320, 0x48e1baa3692044c6b0c6a16e67, NULL, 'hai-duong', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (321, 0x48c6b06e672059c3aa6e, NULL, 'hung-yen', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (350, 0x4e616d20c490e1bb8b6e68, NULL, 'nam-dinh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (351, 0x48c3a0204e616d, NULL, 'ha-nam', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (500, 0xc490c4836b204cc4836b, NULL, 'dak-lak', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (501, 0xc490c4836b204ec3b46e67, NULL, 'dak-nong', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (510, 0x5175e1baa36e67204e616d, NULL, 'quang-nam', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (511, 0xc490c3a0204ee1bab56e67, NULL, 'da-nang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (650, 0x42c3ac6e6820c490e1bb8b6e68, NULL, 'binh-dinh', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (651, 0x42c3ac6e68205068c6b0e1bb9b63, NULL, 'binh-phuoc', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (710, 0x43e1baa76e205468c6a1, NULL, 'can-tho', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (711, 0x48e1baad75204769616e67, NULL, 'hau-giang', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (780, 0x43c3a0204d6175, NULL, 'ca-mau', NULL, 0, 1, NULL, NULL);
INSERT INTO `wz_test_province` VALUES (781, 0x42e1baaf632043e1baa16e, NULL, 'bac-can', NULL, 0, 1, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_user`
-- 

DROP TABLE IF EXISTS `wz_user`;
CREATE TABLE IF NOT EXISTS `wz_user` (
  `id` int(11) NOT NULL auto_increment,
  `fb_id` varchar(64) default '0',
  `type` varchar(32) default NULL,
  `fullname` varchar(64) default NULL,
  `username` varchar(64) default NULL,
  `email` varchar(128) default NULL,
  `password` varchar(32) default NULL,
  `gender` varchar(16) default NULL,
  `avatar` varchar(255) default NULL,
  `fb_access_token` text,
  `token` varchar(64) default NULL,
  `randomkey` varchar(64) default NULL,
  `history_ip` text,
  `status` tinyint(1) default '0',
  `changed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `wz_user`
-- 

INSERT INTO `wz_user` VALUES (1, '100008090042021', 'facebook', 'Lập Trần Sáng', NULL, NULL, NULL, 'male', '2014/04/92569eb28ff6e92b57286a08ea8053c7.gif', 'CAAHTGv0Wd44BAKKal5VH4MvdS301ebIE5FkgIv9OIP7fFCtPpuZAmAz8fDEOiiQdNtkVkP305334KwZCeBZBp3iD6UvSDPZBUIrIS8ro33gOpJZBTmj25W4F2GLPmaJCaMDc5bA0HBx418hKX1Km0v7CP5HRmCZCjGSsbho69VwDr6idtZAtS0JiRZBRXp9pSEYZD', '39fe37519a108b45fc51a521420adfe037f7c736213ddc6756625c90f63df662', 'c6fff9460ef1aa97d8e90e23fb81aadd50eec205cd9e8692c7c692cbd9ff16e3', '{"115.79.56.189":14}', 1, '2014-04-04 10:26:59', '2014-04-03 10:40:16');
INSERT INTO `wz_user` VALUES (3, '0', 'google', 'Trần Sáng Lập', NULL, 'lap.transang@gmail.com', NULL, 'male', '', NULL, NULL, NULL, '{"115.79.56.189":2}', 1, '2014-04-03 10:43:08', '2014-04-03 10:42:38');
INSERT INTO `wz_user` VALUES (5, '0', 'yahoo', '. TSL', NULL, 'sanglap_st@yahoo.com', NULL, 'male', '', NULL, NULL, NULL, '{"115.79.56.189":1}', 1, '2014-04-03 17:19:19', '2014-04-03 17:19:19');
INSERT INTO `wz_user` VALUES (6, '0', 'direct', 'Tran', 'lap.tran', 'lap.tran@wizardww', NULL, 'male', NULL, NULL, NULL, NULL, NULL, 1, '2014-04-05 10:15:57', '2014-04-05 10:15:57');
INSERT INTO `wz_user` VALUES (7, '0', 'direct', 'Tran', 'lap.tran', 'lap.tran@climaxi.com', NULL, 'male', NULL, NULL, NULL, NULL, NULL, 1, '2014-04-05 10:15:57', '2014-04-05 10:15:57');
