-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 12, 2015 at 12:02 PM
-- Server version: 5.5.41
-- PHP Version: 5.5.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `wz_talentnet`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `wz_jobs`
-- 

DROP TABLE IF EXISTS `wz_jobs`;
CREATE TABLE IF NOT EXISTS `wz_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancies_id` char(36) DEFAULT NULL COMMENT 'vacancies',
  `company_id` char(36) DEFAULT NULL,
  `function` text COMMENT 'function_job',
  `industry` text NOT NULL COMMENT 'industry_job',
  `location` text NOT NULL COMMENT 'location',
  `level` text NOT NULL COMMENT 'level_job',
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `ids` varchar(10) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `em_description` text,
  `job_description` text,
  `job_requirement` text,
  `company_name` varchar(255) DEFAULT NULL,
  `salary_min` int(11) NOT NULL DEFAULT '0',
  `salary_max` bigint(15) NOT NULL DEFAULT '0',
  `tags` varchar(100) DEFAULT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `expired` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `VACANCIES_ID` (`vacancies_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `wz_jobs`
-- 

INSERT INTO `wz_jobs` VALUES (1, '3951448d-9dcf-bc03-6078-54f9646670f2', NULL, '["BAK-Business Development","BAK-Corporate-Client Service (by Product)","BAK-Corporate-Global Markets\\/ Investment Banking","BAK-Corporate-Operations","BAK-Corporate-Partnership"]', '["Banking","Construction","Hi-tech","Consumer Finance","Consumer Goods","Education"]', '["H\\u00e0 N\\u1ed9i","TP. H\\u1ed3 Ch\\u00ed Minh","L\\u1ea1ng S\\u01a1n","S\\u01a1n La","L\\u00e2m \\u0110\\u1ed3ng","Cao B\\u1eb1ng","Tuy\\u00ean Quang","Y\\u00ean B\\u00e1i"]', '["Study","Manager","Team Leader\\/Supervisor","Vice Director","New Grad\\/Entry Level\\/Internship","Experienced (Non-Manager)"]', 'National Operations Manager', 'national-operations-manager--8I9nZxGMm5', '8I9nZxGMm5', 'VD25665', '<div class="fs13 c_000" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;">Our client is one of global leading dairy companies in the market with more than 100 years experience in dairy technology.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">Please submit CV to&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">career.solution@talentnet.vn</a>,&nbsp;<a class="btn-descript" href="vi/html/candidate_jobdetail#" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; text-decoration: none; color: rgb(168, 66, 22); background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;" title="">le.t.chau.hoang@talentnet.vn</a>&nbsp;or contact directly to Ms. Le Thi Chau Hoang at 62914188, ext: 507.</div>\r\n\r\n<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">&nbsp;</div>\r\n', '<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n', '<div class="fs13 c_000" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 18px;">\r\n<div class="fs13" style="padding: 0px; margin: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">For our upcoming projects we are recruiting Senior Interior Designers with solid experience in hospitality and residential design. The successful candidate will be responsible for the following</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Responsible for the creation of all online visual design, including visual concept, banners, Flash demos, web site layout and icon design.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Collaborates with web programmers in developing of website page, programming to meet overall website objectives.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Use Graphic tools such as Adobe Photoshop, Adobe Illustrator to make graphic materials.</div>\r\n\r\n<div class="fs13 mt5" style="padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: none 0px; box-sizing: border-box; border: 0px; font-size: 13px; color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px; margin-top: 5px !important;">• Code HTML (if can).</div>\r\n</div>\r\n', NULL, 1000000, 2000000, '3', 1, 34, '2015-03-07', 1, '2014-07-03 10:01:05', '2014-06-24 11:55:52', NULL);
INSERT INTO `wz_jobs` VALUES (19, '2951448d-9dcf-bc03-6078-54f9646670f2', '1231448d-9dcf-ac03-6078-44f9646670f2', '["BAK-Business Development"]', '["Construction"]', '["TP. H\\u1ed3 Ch\\u00ed Minh"]', '["Team Leader\\/Supervisor","Vice Director"]', 'Job name Update', 'job-name-update--mcYUfmr7vw', 'mcYUfmr7vw', 'VD25664', NULL, 'Text', 'Requirement', 'Company Name', 100, 200, NULL, 1, 0, '2015-03-07', 1, '2014-07-03 10:01:05', '2014-07-03 10:01:05', '55548d-9dcf-bc03-6078-54f9646670f211');
