CREATE TABLE IF NOT EXISTS `wz_career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `work_location` int(11) NOT NULL,
  `function` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `deadline` datetime NOT NULL,
  `order` int(11) NOT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `file_sumary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;


INSERT INTO `wz_career` (`id`, `ids`, `name_vi`, `name_en`, `slug_vi`, `slug_en`, `image`, `description_vi`, `description_en`, `content_vi`, `content_en`, `tags`, `is_home`, `status`, `changed`, `created`, `work_location`, `function`, `level`, `deadline`, `order`, `hot`, `file_sumary`) VALUES
(20, '', 'Insurance Consultant', 'Insurance Consultant', 'insurance-consultant', 'insurance-consultant', NULL, '<p>A. Function</p>\n\n<ul>\n	<li>Develop and maintain strong business relationships with clients by provide good customer services</li>\n	<li>Making report to Social Insurance Department for clients to accomplish within required time and proper manner</li>\n	<li>Control figures SI, HI &amp; UI payment of Payroll clients</li>\n	<li>Follow process to reduce risks and increase the accuracy report to clients</li>\n	<li>Together with Senior Consultant to set up procedures, forms, formula to facilitate for the works of preparing monthly insurance reports and reconciliation data.</li>\n	<li>Prepare all labor reports and labor books registrations for all payroll clients.</li>\n	<li>Consult clients about Insurance and Labor related regulations and documents (if any)</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Ensure that all SI, Labor reports are fulfilled in timely manner to complete the requests from the Senior consultants</li>\n	<li>Directly work with different Governments officers</li>\n</ul>\n', '<p>A. Function</p>\n\n<ul>\n	<li>Develop and maintain strong business relationships with clients by provide good customer services</li>\n	<li>Making report to Social Insurance Department for clients to accomplish within required time and proper manner</li>\n	<li>Control figures SI, HI &amp; UI payment of Payroll clients</li>\n	<li>Follow process to reduce risks and increase the accuracy report to clients</li>\n	<li>Together with Senior Consultant to set up procedures, forms, formula to facilitate for the works of preparing monthly insurance reports and reconciliation data.</li>\n	<li>Prepare all labor reports and labor books registrations for all payroll clients.</li>\n	<li>Consult clients about Insurance and Labor related regulations and documents (if any)</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Ensure that all SI, Labor reports are fulfilled in timely manner to complete the requests from the Senior consultants</li>\n	<li>Directly work with different Governments officers</li>\n</ul>\n', '<ul>\n	<li>College / Bachelor degree in HR, Business Administration, English, Economics, Law</li>\n	<li>1 year working experience in human resources management fields</li>\n	<li>Minimum of 1 year working experience related to SI, HI, UI and Labor report with Social Insurance Department and Department of Labor</li>\n	<li>Have a high level of Patience, ability to do multi-tasks, attention to details</li>\n	<li>Ability to work independently</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Good at MS office</li>\n	<li>Strong teamwork oriented and ability to support the teams</li>\n	<li>Strong willingness to learn and to work extra hours</li>\n	<li>Helpful and supportive</li>\n</ul>\n', '<ul>\n	<li>College / Bachelor degree in HR, Business Administration, English, Economics, Law</li>\n	<li>1 year working experience in human resources management fields</li>\n	<li>Minimum of 1 year working experience related to SI, HI, UI and Labor report with Social Insurance Department and Department of Labor</li>\n	<li>Have a high level of Patience, ability to do multi-tasks, attention to details</li>\n	<li>Ability to work independently</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Good at MS office</li>\n	<li>Strong teamwork oriented and ability to support the teams</li>\n	<li>Strong willingness to learn and to work extra hours</li>\n	<li>Helpful and supportive</li>\n</ul>\n', NULL, 0, 1, '2016-07-26 17:16:57', '2016-07-26 17:16:57', 8, 6, 'Consultant', '2016-08-31 00:00:00', 0, 0, ''),
(21, '', 'Recruitment &amp; Training Manager', 'Recruitment &amp; Training Manager', 'recruitment-training-manager', 'recruitment-training-manager', NULL, '<p>A. Recruitment</p>\n\n<ul>\n	<li>Manage full cycle, timely recruiting process for the whole organization. Be in charge of recruitment of Deputy Manager levels up and of HR team members.</li>\n	<li>Be a TLN ambassador to build relationships and networks with target groups, professional associations, educational institutions and others (recommended via professional seminars, conferences or job fairs, etc.). Also maintain this role internally, especially to new employees within their first year of service at TLN.</li>\n	<li>Manage and administer reporting to reflect accurate open positions and talent metrics while effectively controlling recruitment budget</li>\n	<li>Build, manage and maintain a profuse and diverse candidate database. Analyze data and make recommendations to continue to build and develop pipeline and recruiting strategy</li>\n</ul>\n\n<p>B. Internal Communication and Events</p>\n\n<ul>\n	<li>Implement internal communication strategy. Manage internal communications channels and be point of contact and advice on internal communication</li>\n	<li>Lead to implement We Care activities and employee benefit events.</li>\n	<li>Partner with Marketing in building and managing Career at Talentnet (part of Talentnet website)</li>\n</ul>\n\n<p>C. HR Engagement</p>\n\n<ul>\n	<li>According to the status of building HRBP model at the Company, act as HR Business partner of assigned department. Be engaged with stakeholders at a level to understand the business/ operation (Product/ service, key challenges and talent management) and provide timely and proper HR services</li>\n	<li>Provide professional coaching/sharing to team/colleagues where their expertise is a help.</li>\n</ul>\n\n<p>D. Training</p>\n\n<ul>\n	<li>Conduct Training Need Analysis process then working out the annual training plan and programs</li>\n	<li>Conduct T&amp;D approved timely and effectively.</li>\n	<li>Work with HR Head and line manager to develop core training materials for employees and Talentnet trainee program (TTP).</li>\n	<li>Conduct training workshop relating to assigned soft skills, entry supervisory skills, performance management circle skills.</li>\n	<li>Search and recommend proper training courses/ professional membership to line managers (when appropriated)</li>\n	<li>Conduct and organize orientation training/on-boarding process for new TLN members</li>\n	<li>Develop the matrix to assess the effectiveness of training &amp; development program and recommend improvement where necessary. Generate reports related to training activities</li>\n	<li>Promote learning &amp; sharing culture. Manage sharing documentation source and do follow-ups with participants after training.</li>\n	<li>Be in charge of controlling annual training budget.</li>\n	<li>Work closely with HR Head to build up and maintain internal trainer sources (trainer and materials). Propose Reward and Recognition policies for internal trainers�</li>\n</ul>\n\n<p>E. Development</p>\n\n<ul>\n	<li>Be involved in developing T&amp;D policy for company. Work closely with HR Head to execute the Talentnet Development program</li>\n	<li>Be the key contributor in building Talentnet T&amp;D roadmap, list of core competencies and core training library for TTP and for employee</li>\n</ul>\n\n<p>F. Performance Management</p>\n\n<ul>\n	<li>Manage the annual performance appraisal process including form preparation, communication and training to ensure effective implementation and use of performance rating scales, increasing skills in setting SMART objectives, and conducting effective performance appraisal.</li>\n	<li>Systematically follow up to collect on time and properly save all PA, KPIs (soft &amp; hard copy) for using when needed. Follow up KPIs of new joined employee</li>\n	<li>Completing the performance appraisal report as required at the year-end time for management further actions</li>\n</ul>\n\n<p>G. Culture Building Event</p>\n\n<ul>\n	<li>Develop annual action plan for WE CARE program based on the annual theme. Engage HR members and employee across departments to execute successfully WE CARE annual activities.</li>\n	<li>Support HR team in other related works and conduct other works assigned by HR Head</li>\n</ul>\n\n<p>MAJOR CHALLENGES</p>\n\n<ul>\n	<li>Ensure that system and processes in the in-charge areas will run smoothly and can be used as guidance for the staffs to follow when performing their tasks.</li>\n	<li>Build SLA with internal clients in related services to increase service levels</li>\n</ul>\n', '<p>A. Recruitment</p>\n\n<ul>\n	<li>Manage full cycle, timely recruiting process for the whole organization. Be in charge of recruitment of Deputy Manager levels up and of HR team members.</li>\n	<li>Be a TLN ambassador to build relationships and networks with target groups, professional associations, educational institutions and others (recommended via professional seminars, conferences or job fairs, etc.). Also maintain this role internally, especially to new employees within their first year of service at TLN.</li>\n	<li>Manage and administer reporting to reflect accurate open positions and talent metrics while effectively controlling recruitment budget</li>\n	<li>Build, manage and maintain a profuse and diverse candidate database. Analyze data and make recommendations to continue to build and develop pipeline and recruiting strategy</li>\n</ul>\n\n<p>B. Internal Communication and Events</p>\n\n<ul>\n	<li>Implement internal communication strategy. Manage internal communications channels and be point of contact and advice on internal communication</li>\n	<li>Lead to implement We Care activities and employee benefit events.</li>\n	<li>Partner with Marketing in building and managing Career at Talentnet (part of Talentnet website)</li>\n</ul>\n\n<p>C. HR Engagement</p>\n\n<ul>\n	<li>According to the status of building HRBP model at the Company, act as HR Business partner of assigned department. Be engaged with stakeholders at a level to understand the business/ operation (Product/ service, key challenges and talent management) and provide timely and proper HR services</li>\n	<li>Provide professional coaching/sharing to team/colleagues where their expertise is a help.</li>\n</ul>\n\n<p>D. Training</p>\n\n<ul>\n	<li>Conduct Training Need Analysis process then working out the annual training plan and programs</li>\n	<li>Conduct T&amp;D approved timely and effectively.</li>\n	<li>Work with HR Head and line manager to develop core training materials for employees and Talentnet trainee program (TTP).</li>\n	<li>Conduct training workshop relating to assigned soft skills, entry supervisory skills, performance management circle skills.</li>\n	<li>Search and recommend proper training courses/ professional membership to line managers (when appropriated)</li>\n	<li>Conduct and organize orientation training/on-boarding process for new TLN members</li>\n	<li>Develop the matrix to assess the effectiveness of training &amp; development program and recommend improvement where necessary. Generate reports related to training activities</li>\n	<li>Promote learning &amp; sharing culture. Manage sharing documentation source and do follow-ups with participants after training.</li>\n	<li>Be in charge of controlling annual training budget.</li>\n	<li>Work closely with HR Head to build up and maintain internal trainer sources (trainer and materials). Propose Reward and Recognition policies for internal trainers�</li>\n</ul>\n\n<p>E. Development</p>\n\n<ul>\n	<li>Be involved in developing T&amp;D policy for company. Work closely with HR Head to execute the Talentnet Development program</li>\n	<li>Be the key contributor in building Talentnet T&amp;D roadmap, list of core competencies and core training library for TTP and for employee</li>\n</ul>\n\n<p>F. Performance Management</p>\n\n<ul>\n	<li>Manage the annual performance appraisal process including form preparation, communication and training to ensure effective implementation and use of performance rating scales, increasing skills in setting SMART objectives, and conducting effective performance appraisal.</li>\n	<li>Systematically follow up to collect on time and properly save all PA, KPIs (soft &amp; hard copy) for using when needed. Follow up KPIs of new joined employee</li>\n	<li>Completing the performance appraisal report as required at the year-end time for management further actions</li>\n</ul>\n\n<p>G. Culture Building Event</p>\n\n<ul>\n	<li>Develop annual action plan for WE CARE program based on the annual theme. Engage HR members and employee across departments to execute successfully WE CARE annual activities.</li>\n	<li>Support HR team in other related works and conduct other works assigned by HR Head</li>\n</ul>\n\n<p>MAJOR CHALLENGES</p>\n\n<ul>\n	<li>Ensure that system and processes in the in-charge areas will run smoothly and can be used as guidance for the staffs to follow when performing their tasks.</li>\n	<li>Build SLA with internal clients in related services to increase service levels</li>\n</ul>\n', '<ul>\n	<li>Bachelor�s degree in Human Resource Management/Education/Business Administration&nbsp;</li>\n	<li>7 (or above) years of working experience in HR field, in which there are at least 2 years of working experience in T&amp;D area, and 4 years in recruitment</li>\n	<li>Logistics arrangement for Training &amp; Development activities</li>\n	<li>Being facilitator of some training courses, e.g. orientation, soft skills, basic supervisory skills</li>\n	<li>Ability to design and develop and customize training materials</li>\n	<li>Organize company events relating to employee relation or culture building</li>\n	<li>Experience working in the services industry.</li>\n	<li>Understanding of current HR legislation, policies and practices in Vietnam</li>\n	<li>Involvement in OD activities</li>\n	<li>Effective communication and interpersonal skills</li>\n	<li>Excellent organization skills</li>\n	<li>Excellent people skill and passion to develop people</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Strong presentation skills with inspiration ability</li>\n	<li>High sense of responsibility and professionalism</li>\n	<li>Ability to work under high pressure in well-organized and multi-tasked approach</li>\n	<li>Work well independently as well as with team</li>\n	<li>Demonstrate good commitment aptitude and customer orientation</li>\n	<li>Skill set of talent acquisition &amp; networking</li>\n	<li>Proficient with MS Office</li>\n</ul>\n', '<ul>\n	<li>Bachelor�s degree in Human Resource Management/Education/Business Administration&nbsp;</li>\n	<li>7 (or above) years of working experience in HR field, in which there are at least 2 years of working experience in T&amp;D area, and 4 years in recruitment</li>\n	<li>Logistics arrangement for Training &amp; Development activities</li>\n	<li>Being facilitator of some training courses, e.g. orientation, soft skills, basic supervisory skills</li>\n	<li>Ability to design and develop and customize training materials</li>\n	<li>Organize company events relating to employee relation or culture building</li>\n	<li>Experience working in the services industry.</li>\n	<li>Understanding of current HR legislation, policies and practices in Vietnam</li>\n	<li>Involvement in OD activities</li>\n	<li>Effective communication and interpersonal skills</li>\n	<li>Excellent organization skills</li>\n	<li>Excellent people skill and passion to develop people</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Strong presentation skills with inspiration ability</li>\n	<li>High sense of responsibility and professionalism</li>\n	<li>Ability to work under high pressure in well-organized and multi-tasked approach</li>\n	<li>Work well independently as well as with team</li>\n	<li>Demonstrate good commitment aptitude and customer orientation</li>\n	<li>Skill set of talent acquisition &amp; networking</li>\n	<li>Proficient with MS Office</li>\n</ul>\n', NULL, 0, 1, '2016-07-26 17:42:21', '2016-07-26 17:30:50', 8, 1, 'Manager', '2016-08-31 00:00:00', 0, 1, ''),
(17, '', 'Payroll Consultant', 'Payroll Consultant', 'payroll-consultant', 'payroll-consultant', NULL, '<p>A. Function</p>\n\n<ul>\n	<li>Build and maintain strong relationships with client by providing quality service</li>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Council Clients on HR policies, procedures and employment laws</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Answer inquiries from client and client�s employees</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Investigate and bring to resolution of customer questions</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Handle various clients� orders simultaneously</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Directly deal and work with different Clients &amp; Employees properly</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n', '<p>A. Function</p>\n\n<ul>\n	<li>Build and maintain strong relationships with client by providing quality service</li>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Council Clients on HR policies, procedures and employment laws</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Answer inquiries from client and client�s employees</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Investigate and bring to resolution of customer questions</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Handle various clients� orders simultaneously</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Directly deal and work with different Clients &amp; Employees properly</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n\n<p>&nbsp;</p>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>2-3 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n</ul>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>2-3 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n</ul>\n', NULL, 0, 1, '2016-07-26 17:32:03', '2016-07-26 17:00:11', 8, 6, 'Consultant', '2016-08-31 00:00:00', 1, 0, ''),
(18, '', 'Payroll Assistant', 'Payroll Assistant', 'payroll-assistant', 'payroll-assistant', NULL, '<p>A. Function</p>\n\n<ul>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n', '<p>A. Function</p>\n\n<ul>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>1 year of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office</li>\n</ul>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>1 year of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office</li>\n</ul>\n', NULL, 0, 1, '2016-07-28 14:23:22', '2016-07-26 17:07:37', 8, 6, 'Assistant', '2016-08-31 00:00:00', 1, 1, ''),
(19, '', 'Payroll Senior Consultant', 'Payroll Senior Consultant', 'payroll-senior-consultant', 'payroll-senior-consultant', NULL, '<p>A. Function</p>\n\n<ul>\n	<li>Build and maintain strong relationships with client by providing quality service</li>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Council Clients on HR policies, procedures and employment laws</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Answer inquiries from client and client�s employees</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Investigate and bring to resolution of customer questions</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Handle various clients� orders simultaneously</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Directly deal and work with different Clients &amp; Employees properly</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n', '<p>A. Function</p>\n\n<ul>\n	<li>Build and maintain strong relationships with client by providing quality service</li>\n	<li>Be accountable for processing payroll and benefit administration for Clients.</li>\n	<li>Council Clients on HR policies, procedures and employment laws</li>\n	<li>Prepare monthly payroll statements; and related quarterly and year-end reports exactly and in a timely manner</li>\n	<li>Answer inquiries from client and client�s employees</li>\n	<li>Calculate, declare and clean PIT tax</li>\n	<li>Process terminations and severance payments for client�s employees</li>\n	<li>Investigate and bring to resolution of customer questions</li>\n	<li>Perform other administrative duties as assigned</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Reach the individual sales target</li>\n	<li>Handle various clients� orders simultaneously</li>\n	<li>Produce service products to customers exactly and in a timely manner</li>\n	<li>Directly deal and work with different Clients &amp; Employees properly</li>\n	<li>Handle all admin and paper work accuracy and properly</li>\n</ul>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>3-4 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-</li>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>3-4 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n	<li>tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n</ul>\n', '<ul>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>3-4 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-</li>\n	<li>Must be having a Bachelor�s degree either in HR, Business Administration, English, Economics, Law</li>\n	<li>3-4 years of human resources experience in multinational companies with emphasis on compensation and benefits</li>\n	<li>In addition to the above requirement, preferably in other areas in HR management or Service industry</li>\n	<li>Good knowledge of basic accounting principles, payroll systems</li>\n	<li>Ability to multi-tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n	<li>tasks, attention to details</li>\n	<li>Ability to work independently, proactively under high pressure and good problem solving</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Strong interpersonal and communication skills</li>\n	<li>Proven good customer service skill</li>\n	<li>Good verbal and written communication and problem-solving abilities</li>\n	<li>Proficient in MS Office&nbsp;</li>\n</ul>\n', NULL, 0, 1, '2016-07-26 17:11:21', '2016-07-26 17:11:07', 8, 6, 'Senior-Consultant', '2016-08-31 00:00:00', 0, 0, ''),
(16, '', 'Insurance Assistant', 'Insurance Assistant', 'insurance-assistant', 'insurance-assistant', NULL, '<p>A. Function</p>\n\n<ul>\n	<li>Provide logistic aspects of a Insurance Service</li>\n	<li>Be accountable for conducting all administrative works in P&amp;O includes filling and secretary duties, preparing draft proposal and follow up to the clients</li>\n	<li>Work with Social Insurance Office for apply documents as necessary</li>\n	<li>Be accountable for supporting consultants in all aspects</li>\n	<li>Follow up budget of the whole team</li>\n	<li>Maintain the security of confidential information.</li>\n	<li>Maintaining business/customer contact database, corporate files and business plans.</li>\n	<li>Conducting Internet research; reviewing and synthesizing information.</li>\n	<li>Coordinate, create, edit and distribute both internal and external correspondence under the direction of Executive Management.</li>\n	<li>Composing, designing and editing correspondence and reports.</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Ensure that all administrative tasks run smoothly and fulfilled in timely manner to complete the requests from the consultants</li>\n	<li>Directly work with different Governments officers</li>\n</ul>\n', '<p>A. Function</p>\n\n<ul>\n	<li>Provide logistic aspects of a Insurance Service</li>\n	<li>Be accountable for conducting all administrative works in P&amp;O includes filling and secretary duties, preparing draft proposal and follow up to the clients</li>\n	<li>Work with Social Insurance Office for apply documents as necessary</li>\n	<li>Be accountable for supporting consultants in all aspects</li>\n	<li>Follow up budget of the whole team</li>\n	<li>Maintain the security of confidential information.</li>\n	<li>Maintaining business/customer contact database, corporate files and business plans.</li>\n	<li>Conducting Internet research; reviewing and synthesizing information.</li>\n	<li>Coordinate, create, edit and distribute both internal and external correspondence under the direction of Executive Management.</li>\n	<li>Composing, designing and editing correspondence and reports.</li>\n</ul>\n\n<p>B. Major Challenges</p>\n\n<ul>\n	<li>Ensure that all administrative tasks run smoothly and fulfilled in timely manner to complete the requests from the consultants</li>\n	<li>Directly work with different Governments officers</li>\n</ul>\n', '<ul>\n	<li>Bachelor degree in English, business administration or other related fields</li>\n	<li>1 year working experience in human resources management fields</li>\n	<li>Minimum of 1 year working experience as a secretary or admin Executive</li>\n	<li>Have a high level of Patience, ability to do multi-tasks, attention to details</li>\n	<li>Ability to work independently</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Good at MS office</li>\n	<li>Strong teamwork oriented and ability to support the teams</li>\n	<li>Strong willingness to learn and to work extra hours</li>\n	<li>Helpful and supportive</li>\n</ul>\n', '<ul>\n	<li>Bachelor degree in English, business administration or other related fields</li>\n	<li>1 year working experience in human resources management fields</li>\n	<li>Minimum of 1 year working experience as a secretary or admin Executive</li>\n	<li>Have a high level of Patience, ability to do multi-tasks, attention to details</li>\n	<li>Ability to work independently</li>\n	<li>Ability to maintain a high level of discretion and confidentiality</li>\n	<li>Good planning, time management and organization skills</li>\n	<li>Good at MS office</li>\n	<li>Strong teamwork oriented and ability to support the teams</li>\n	<li>Strong willingness to learn and to work extra hours</li>\n	<li>Helpful and supportive</li>\n</ul>\n', NULL, 0, 1, '2016-07-26 16:37:32', '2016-07-26 16:37:32', 8, 6, 'Assistant', '2016-08-31 00:00:00', 1, 1, '');
