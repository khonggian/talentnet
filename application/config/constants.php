<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$op_field_type= array(
	'content'						=> 'Content', 
	'checkbox'						=> 'Checkbox', 
	'color'							=> 'Color', 
	'textarea'						=> 'Textarea',
	'datetimepicker'				=> 'Datetimepicker',
	'file'							=> 'File',
	'file_multiupload'				=> 'File Multiupload',
	'ids'							=> 'IDS',
	'group'							=> 'Group',
	'maps'							=> 'Maps',
	'price'							=> 'Price',
	'select'						=> 'Select',
	'select_foreign_table'			=> 'Select foreign table',
	'select_foreign_recursive'		=> 'Select foreign recursive',
	'select_foreign_table_children'	=> 'Select foreign table children',
	'slug'							=> 'Slug',
	'radio'							=> 'Radio',
	'tags'							=> 'Tags',
	'text'							=> 'Text',
	'youtube'						=> 'Youtube'
);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*EMAIL*/
define('USERAGENT', 'Talentnet');
define('EMAIL_FORM', 'no-reply@talentnet.vn');
define('EMAIL_NAME', 'Talentnet');

/* ADMIN */
	/* TABLE */
	define('ADMIN_SETTING_TB', PREFIX.'admin_setting');
	define('ADMIN_MODULE_TB', PREFIX.'admin_module');
	define('ADMIN_USER_TB', PREFIX.'admin_user');
	define('ADMIN_MODULE_LIST_FIELD_TB', PREFIX.'admin_module_list_field');
	define('ADMIN_MODULE_LIST_FILTER_TB', PREFIX.'admin_module_list_filter');
	define('ADMIN_MODULE_EDIT_FIELD_TB', PREFIX.'admin_module_edit_field');
	define('ADMIN_ROLE_TB', PREFIX.'admin_role');
	define('ADMIN_ROLE_PERMISSION_TB', PREFIX.'admin_role_permission');
	define('ADMIN_LOGS_TB', PREFIX.'admin_logs');
	define('ADMIN_REMINDER_TB', PREFIX.'reminder');
	
	define('FILE_TMP_TB', PREFIX.'file_tmp');
	
	define('LINK_ADMIN', 'adminwz/');
	define('LINK_ADMIN_PERMISSION_DENY', 'adminwz/permission-deny');
	define('LINK_ADMIN_USER', 'adminwz/user/');
	define('LINK_ADMIN_SETTING', 'adminwz/setting/');
	define('LINK_ADMIN_LOGS', 'adminwz/logs/');
	define('LINK_ADMIN_FAQ', 'adminwz/faq/');
	
	define('LINK_ADMIN_MODULE', 'adminwz/module/');
	define('LINK_ADMIN_MODULE_EDIT', 'adminwz/module/manage-edit/');
	define('LINK_ADMIN_MODULE_DELETE', 'adminwz/module/delete/');
	define('LINK_ADMIN_MODULE_MANAGE', 'adminwz/module/manage/');
	define('LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT', 'adminwz/module/manage-page-edit/');
	define('LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT_FIELD', 'adminwz/module/manage-page-edit-field/');	
	define('LINK_ADMIN_MODULE_MANAGE_PAGE_LIST', 'adminwz/module/manage-page-list/');
	define('LINK_ADMIN_MODULE_MANAGE_PAGE_LIST_FIELD', 'adminwz/module/manage-page-list-field/');
	define('LINK_ADMIN_MODULE_MANAGE_PAGE_LIST_FILTER', 'adminwz/module/manage-page-list-filter/');
	define('LINK_ADMIN_MODULE_PAGE_EDIT', 'adminwz/module/page-edit');
	define('LINK_ADMIN_MODULE_PAGE_LIST', 'adminwz/module/page-list');
	//custom
	define('LINK_ADMIN_CUSTOMS_MODULE', 'adminwz/custom/');	
	
	define('DIR_UPLOAD_ADMIN_USER_AVATAR', 'uploads/admin/user/avatar/');
/* END ADMIN */

/* 	MID */
define('NEW_ARRIVALS_MID', 364);
define('HR_SERVICES_MID', 345);
define('CAREER_TALENTNET_MID', 352);
define('INFORMATION_CENTER_MID', 23);
define('JOBS_MID', 361);
/*
	-------------- Table
*/
define('AWARD_TB', PREFIX.'award');
define('ABOUT_AWARD_TB', PREFIX.'about_award');
define('CONTACT_TB', PREFIX.'contact');
define('CONTACT_ADDRESS_TB', PREFIX.'contact_address');
define('BANNER_TB', PREFIX.'banner');
define('NEWS_CATEGORY_TB', PREFIX.'news_category');
define('INFORMATION_CATEGORY_TB', PREFIX.'information_category');
define('INFOMATION_TB', PREFIX.'information');
define('HRSERVICES_CATEGORY_TB', PREFIX.'hrservices_category');
define('HRSERVICES_TB', PREFIX.'hrservices');
define('NEW_ARRIVALS_CATEGORY_TB', PREFIX.'new_arrivals_category');
define('NEW_ARRIVALS_TB', PREFIX.'new_arrivals');
define('FILE_TB', PREFIX.'file');
define('TAGS_TB', PREFIX.'tags');
define('TAGS_JOIN_TB', PREFIX.'tags_join');
define('USER_TB', PREFIX.'user');
define('COMMENT_TB', PREFIX.'comment');
define('FUNCTION_JOB_TB', PREFIX.'function_job');
define('LOCATION_TB', PREFIX.'location');
define('LEVEL_JOB_TB', PREFIX.'level_job');
define('INDUSTRY_JOB_TB', PREFIX.'industry_job');
define('SALARY_JOB_TB', PREFIX.'salary_job');
define('OFFICE_LOCATION_TB', PREFIX.'office_location');
define('PERSONAL_TB', PREFIX.'personal');
define('REFERENCE_TB', PREFIX.'reference');
define('EDUCATION_TB', PREFIX.'education');
define('SKILL_LANGUAGE_TB', PREFIX.'skill_language');
define('WORK_EXPERIENCE_TB', PREFIX.'work_experience');
define('DEGREE_TB', PREFIX.'degree');
define('JOBS_TB', PREFIX.'jobs');
define('ENDORSER_TB',PREFIX.'endorser');
define('ENDORSER_USER_TB',PREFIX.'endorser_user');
define('CLIENT_TB', PREFIX.'client');
define('COMMENT_CLIENT_TB', PREFIX.'comment_client');
define('EXECUTIVE_TEAM_TB', PREFIX.'executive_team');
define('PARTNERS_TB', PREFIX.'partners');
define('FAQ_TB', PREFIX.'faq');
define('YOUR_CV_TB', PREFIX.'your_cv');
define('SAVE_JOB_TB', PREFIX.'save_job');
define('UPLOAD_CV_TB', PREFIX.'upload_cv');
define('JOB_ALERT_TB', PREFIX.'job_alert');
define('MY_DOWNLOAD_TB', PREFIX.'my_download');
define('COUNTRIES_TB', PREFIX.'countries');
define('SUBSCRIBE_TB', PREFIX.'subscribe');
define('NOTIFICATION_TB', PREFIX.'notification');
define('DOWNLOAD_BROCHURE_TB', PREFIX.'who_download_brochure');
define('COURSES_TB', PREFIX.'courses');
define('VIDEO_HOME_TB', PREFIX.'video_home');
define('SHARING_CORNER_TB', PREFIX.'sharing_corner');
define('MAJOR_TB', PREFIX.'major');
define('LANGUAGE_TB', PREFIX.'language');
define('SEO_TB', PREFIX.'seo');
define('NEWSLETTER_TB', PREFIX.'newsletter');
define('CAREER_TB', PREFIX.'career');
define('CAREER_CATEGORY_TB', PREFIX.'career_category');
define('CAREER_GROUP_TB', PREFIX.'career_group');
define('PROVINCE_TB', PREFIX.'province');
define('CAREER_UPLOAD_CV_TB', PREFIX.'career_upload_cv');

/*
	-------------- End Table
*/
define('BASEFOLDER', substr(BASEPATH, 0, count(BASEPATH)-8));
define('MAXSIZE_UPLOAD', 50);
define('IMG_SHARE_SOCIAL', 'assets/img_share.png');
define('DIR_UPLOAD_FILE_DOWNLOAD', 'uploads/file_download/');
define('DIR_UPLOAD_AVATAR', 'uploads/user/avatar/');
define('DIR_UPLOAD_PRODUCT', 'uploads/product/');
define('DIR_UPLOAD_TMP', 'uploads/tmp/');
define('DIR_UPLOAD_BANNER', 'uploads/banner/');
define('DIR_UPLOAD_HRSERVICES_CATEGORY', 'uploads/hrservices_category/');
define('DIR_UPLOAD_HRSERVICES', 'uploads/hrservices/');
define('DIR_UPLOAD_INFORMATION_CATEGORY', 'uploads/information_category/');
define('DIR_UPLOAD_INFORMATION', 'uploads/information/');
define('DIR_UPLOAD_CLIENT', 'uploads/client/');
define('DIR_UPLOAD_AVATAR_COMMENT_LINE', 'uploads/avatar_comment_line/');
define('DIR_UPLOAD_EXECUTIVE_TEAM', 'uploads/executive_team/');
define('DIR_UPLOAD_NEW_ARRIVALS', 'uploads/new_arrivals/');
define('DIR_UPLOAD_PARTNERS', 'uploads/partners/');
define('DIR_UPLOAD_AWARDS', 'uploads/awards/');
define('DIR_UPLOAD_CV', 'uploads/cv/');
define('DIR_UPLOAD_CONTACT_ADDRESS', 'uploads/contact_address/');
define('DIR_UPLOAD_FAQ', 'uploads/faq/');
define('DIR_UPLOAD_SHARING_CORNER', 'uploads/sharing_corner/');
define('DIR_UPLOAD_CAREER', 'uploads/career/');
define('DIR_UPLOAD_CAREER_CATEGORY', 'uploads/career_category/');
define('DIR_UPLOAD_CAREER_GROUP', 'uploads/career_group/');
/*
	-------------- link
*/
$LEVEL_LANGUAGE = array(
	'Advanced'=>'Advanced',	
	'Average'=>'Average',	
	'Basic'=>'Basic',	
	'Beginner'=>'Beginner',	
	'Excellent'=>'Excellent',	
	'Fair'=>'Fair',	
	'Fluent'=>'Fluent',	
	'Good'=>'Good',	
	'Insufficient'=>'Insufficient',	
	'Mother tongue'=>'Mother tongue',	
);
$LEVEL_SKILL = array(
	'Advance' => 'Advance',
	'Basic' => 'Basic',
	'Intermediate' => 'Intermediate'
);
$LIST_SERVICE = array(
	'1' => array('vi'=>'Corporate','en'=>'Corporate'),
	'2' => array('vi'=>'Executive Search','en'=>'Executive Search'),
	'3' => array('vi'=>'HR Consulting','en'=>'HR Consulting'),
	'4' => array('vi'=>'Mercer Salary Surveys','en'=>'Mercer Salary Surveys'),
	'5' => array('vi'=>'Payroll and HR Outsourcing','en'=>'Payroll and HR Outsourcing'),
	
);

$EDUCATION = array(
		'College'=>'College',		
		'High school' => 'High school',		
		'In-service' => 'In-service',		
		'Institute'=>'Institute',		
		'Intermediate'=> 'Intermediate',		
		'Post Graduate Diploma' => 'Post Graduate Diploma',		
		'Post-graduate' => 'Post-graduate',		
		'University'=>'University',	
	);
// Define Ajax Request
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
define('LINK_ONPAGE',"http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
/* End of file constants.php */
/* Location: ./application/config/constants.php */
