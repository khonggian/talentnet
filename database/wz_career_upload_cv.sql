CREATE TABLE IF NOT EXISTS `wz_career_upload_cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` varchar(36) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `yearsex` int(11) NOT NULL,
  `curtit` text NOT NULL,
  `linkedin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

INSERT INTO `wz_career_upload_cv` (`id`, `candidate_id`, `uid`, `file`, `firstname`, `lastname`, `email`, `phone`, `created`, `changed`, `status`, `yearsex`, `curtit`, `linkedin`) VALUES
(28, NULL, 0, '2016/07/26/144b0bd55222693d6cb4f09b0574511f_1469531007.pdf', 'A', 'Nguyen Ngoc', 'dongoctruongthien@gmail.com', '0909090909', '2016-07-26 18:03:41', '2016-07-26 18:03:41', 1, 7, 'HR', ''),
(8, NULL, 0, '2016/07/11/51324052833f39af96950c786c9a6ef7_1468208139.docx', 'Test', 'test', 'test@gmail.com', NULL, '2016-07-11 10:36:29', '2016-07-11 10:36:29', 1, 0, '', ''),
(23, NULL, 0, '2016/07/11/eab3f4d2ed8f15e4341908dd3d811ca6_1468217232.pdf', 'fhgj', 'fj', 'sfr@mail.com', NULL, '2016-07-11 13:07:29', '2016-07-11 13:07:29', 1, 0, '', ''),
(20, NULL, 0, '2016/07/11/07a640594f591f20356c2b4c1ff06c4a_1468217148.docx', 'a', 'n', 'a@mail.com', NULL, '2016-07-11 13:06:08', '2016-07-11 13:06:08', 1, 0, '', ''),
(27, NULL, 0, '2016/07/19/88db7b418d20d5a42a608614bee1a5a8_1468903753.docx', 'Minh', 'Minh', 'Minh@gmail.com', '0912123321', '2016-07-19 12:11:09', '2016-07-19 12:11:09', 1, 3, 'Minh', 'https://www.linkedin.com'),
(25, NULL, 0, '2016/07/19/4944d6ad3f0a96bd83230e3b3e914207_1468901749.docx', 'Quang Minh', 'Nguyen', 'nguyenquangminh@gmail.com', '0912123321', '2016-07-19 11:16:03', '2016-07-19 11:16:03', 1, 1, 'Employee 2', ''),
(24, NULL, 0, '2016/07/19/648511e369ed4cc34ea8de3ef0bd8ca9_1468900651.docx', 'Quang Minh', 'Nguyen', 'nguyenquangminh@gmail.com', '0912123321', '2016-07-19 10:57:42', '2016-07-19 10:57:42', 1, 2, 'Employee', ''),
(26, NULL, 0, '2016/07/19/b1942e29a64f6d5d7c3f62a728419fda_1468901844.docx', 'Quang Minh 2', 'Tran', 'tranquangminn2@gmail.com', '0912123321', '2016-07-19 11:17:34', '2016-07-19 11:17:34', 1, 3, 'Employee3', '');
