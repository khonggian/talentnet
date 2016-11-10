CREATE TABLE IF NOT EXISTS `wz_career_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vi` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `slug_vi` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `description_vi` text NOT NULL,
  `description_en` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

INSERT INTO `wz_career_category` (`id`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `order`, `is_home`, `status`, `changed`, `created`, `description_vi`, `description_en`) VALUES
(1, 'HR - Human Resource', 'HR - Human Resource', 'hr-human-resource', 'hr-human-resource', '2016/07/07/bf862462d82ad241ad27e7873d7b47a1_1467884113.jpg', 7, 0, 1, '2016-07-26 10:29:11', '2015-03-25 15:44:21', '', ''),
(2, 'Marketing', 'Marketing', 'marketing', 'marketing', '2016/07/07/bd05eb6fb1d31c8946a53d9d82836590_1467884157.jpg', 4, 1, 1, '2016-07-09 09:37:00', '2015-03-25 15:44:21', '', ''),
(4, 'IT - Information Technology', 'IT - Information Technology', 'it-information-technology', 'it-information-technology', '2016/07/07/54af112d30f0309319cf3a526b8054bc_1467884124.jpg', 6, 0, 1, '2016-07-26 10:28:52', '2016-07-07 15:09:42', '', ''),
(5, 'Finance &amp; Accounting', 'Finance &amp; Accounting', 'finance-accounting', 'finance-accounting', '2016/07/07/6dfbf7ed5a1ca383e12fcdf77ef4bcab_1467884146.jpg', 5, 0, 1, '2016-07-09 09:37:22', '2016-07-07 16:25:55', '', ''),
(6, 'POS – Payroll &amp; HR Outsourcing Services', 'POS – Payroll &amp; HR Outsourcing Services', 'pos-payroll-hr-outsourcing-services', 'pos-payroll-hr-outsourcing-services', '2016/07/07/d04ca9df79f8710c224d32f9713ca75b_1467884136.jpg', 3, 0, 1, '2016-07-11 11:58:52', '2016-07-07 16:26:58', '<p>See more at <a href="http://www.talentnet.vn/en/hr-services/payroll-and-hr-outsourcing">Payroll and HR Outsourcing Service</a></p>\n', '<p>See more at <a href="http://www.talentnet.vn/en/hr-services/payroll-and-hr-outsourcing">Payroll and HR Outsourcing Service</a></p>\n'),
(7, 'SSC – Salary Survey &amp; HR Consulting', 'SSC – Salary Survey &amp; HR Consulting', 'ssc-salary-survey-hr-consulting', 'ssc-salary-survey-hr-consulting', '2016/07/07/caa2d56d22195d04784b28a6f7bd1e3c_1467884182.jpg', 2, 0, 1, '2016-07-11 11:55:30', '2016-07-07 16:29:26', '<p>See more at <a href="http://www.talentnet.vn/en/hr-services/hr-consulting">HR Consulting Service</a>&nbsp;and <a href="http://www.talentnet.vn/en/hr-services/mercer-salary-surveys">Mercer Salary Surveys</a></p>\n', '<p>See more at&nbsp;<a href="http://www.talentnet.vn/en/hr-services/hr-consulting">HR Consulting Service</a>&nbsp;and&nbsp;<a href="http://www.talentnet.vn/en/hr-services/mercer-salary-surveys">Mercer Salary Surveys</a></p>\n'),
(8, ' ESS – Executive Search &amp; Selection Services', ' ESS – Executive Search &amp; Selection Services', 'ess-executive-search-selection-services', 'ess-executive-search-selection-services', '2016/07/07/32d68f874b0cf912913bc0649d8ecdd1_1467884163.jpg', 1, 0, 1, '2016-07-11 11:54:22', '2016-07-07 16:30:10', '<p>See more at <a href="http://www.talentnet.vn/en/hr-services/executive-search">Executive Search Service</a>.</p>\n', '<p>See more at&nbsp;<a href="http://www.talentnet.vn/en/hr-services/executive-search">Executive Search Service</a>.</p>\n');
