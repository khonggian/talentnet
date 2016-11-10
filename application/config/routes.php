<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['^en$'] = $route['default_controller'];
$route['^vi$'] = $route['default_controller'];
$assets = (isset($_SERVER['REQUEST_URI'])) ? strpos($_SERVER['REQUEST_URI'], 'assets') : 0;
if(empty($assets)){
	$route['404_override'] = 'home/page_404';
}else{
	$route['404_override'] = '';
}
$route['vi'] = 'home/page_404';
$route['vi(:any)'] = 'home/page_404';
$route['en/page_404'] = 'home/page_404';
$route['assets/admin/(:any)'] = "";
$route['(:any)/admin/(:any)'] = "adminwz/login";
$route['adminwz/module/custom/(:any)/(:any)'] = "$1/admin/$2";
$route['adminwz/module/custom/(:any)'] = "$1/admin";

$route['(vi|en)/captcha'] = 'user/captcha';
$route['tracking'] = 'fb/tracking';
$route['(vi|en)/sitemap'] = 'home/sitemap';
$route['(vi|en)/legal-notices'] = 'home/legal_notices';
$route['(vi|en)/privacy-policy'] = 'home/privacy_policy';
$route['(vi|en)/openid/(:any)'] = 'user/OpenID/$1';
$route['vi/html/(:any)']                                   = 'html/$1';
$route['vi/tin-tuc']                                       = 'news/test';
$route['(vi|en)/(office-locations|dia-diem-van-phong)']    = 'contact';
$route['(vi|en)/(download)']                               = 'home/download';
$route['(vi|en)/download-document']                        = 'home/download_document';
$route['(vi|en)/download_now']                             = 'your_cv/download_now';
$route['(vi|en)/(dang-nhap|login)']                        = 'user/login';
$route['(vi|en)/(quen-mat-khau|forgot)']                   = 'user/forgot';
$route['(vi|en)/(dang-ky|register)']                       = 'user/register';
$route['(vi|en)/(thong-tin-ca-nhan|profile)']              = 'user/profile';
$route['(vi|en)/(xac-nhan-quen-mat-khau|forgot-password)'] = 'user/active_forgot';
$route['(vi|en)/logout']                                   = 'user/logout';
$route['(vi|en)/(quan-ly-tai-khoan|account-management)']   = 'home/dashboard';
$route['(vi|en)/pRegister']                                = 'user/pRegister';
$route['(vi|en)/pLogin']                                   = 'user/pLogin';
$route['(vi|en)/pProfile']                                 = 'user/pProfile';
$route['(vi|en)/pForgot']                                  = 'user/pForgot';
$route['(vi|en)/load_city']                                = 'your_cv/load_city';
$route['(vi|en)/view_notification']                        = 'home/view_notification';
$route['(vi|en)/upload_avatar']                            = 'your_cv/upload_avatar';
$route['(vi|en)/your_cv/push_cv']                          = 'your_cv/push_cv';
$route['(vi|en)/load_type_language']                       = 'your_cv/load_type_language';


$route['(vi|en)/(gioi-thieu-talentnet|about-talentnet)'] = 'home/about';
$route['(vi|en)/(khach-hang|clients)'] = 'home/list_client';
$route['(vi|en)/(doi-tac|partners)'] = 'home/list_partner';
$route['(vi|en)/(giai-thuong|awards)'] = 'home/list_award';
$route['(vi|en)/(doi-ngu-dieu-hanh|executive-team)'] = 'home/executive_team';
$route['(vi|en)/(doi-ngu-dieu-hanh|executive-team)/(:any)'] = 'home/executive_team_detail/$3';

$route['(vi|en)/post_reference'] = 'your_cv/post_reference';
$route['(vi|en)/post_skill_language'] = 'your_cv/post_skill_language';
$route['(vi|en)/post_education'] = 'your_cv/post_education';
$route['(vi|en)/post_courses'] = 'your_cv/post_courses';
$route['(vi|en)/post_work_experience'] = 'your_cv/post_work_experience';
$route['(vi|en)/post_personal'] = 'your_cv/post_personal';
$route['(vi|en)/delete_type_cv'] = 'your_cv/delete_type_cv';
$route['(vi|en)/(tao-cong-viec|create-cv)'] = 'your_cv/create';
$route['(vi|en)/(cong-viec-cua-ban|your-cv)'] = 'your_cv/index';
$route['(vi|en)/(tai-ve-cua-toi|my-download)'] = 'your_cv/my_download';
$route['(vi|en)/save_cv'] = 'your_cv/save_cv';
$route['(vi|en)/save_jobs'] = 'your_cv/save_jobs';
$route['(vi|en)/delete_jobs'] = 'your_cv/delete_jobs';
$route['(vi|en)/save_job_alert'] = 'your_cv/save_job_alert';
$route['(vi|en)/upload_cv'] = 'your_cv/upload_cv';
$route['(vi|en)/load_level'] = 'your_cv/load_level';
$route['vi/export_excel/(:any)'] = 'your_cv/export_excel/$1';
$route['en/export_excel/(:any)'] = 'your_cv/export_excel/$1';
$route['(vi|en)/(cong-viec-moi-phu-hop|new-job-matched)'] = 'your_cv/new_job_matched';
$route['(vi|en)/submit_subscribe'] = 'home/submit_subscribe';
$route['(vi|en)/notification'] = 'home/notification';

$route['vi/chinh-sua-bao-cao-viec-lam/(:any)'] = 'your_cv/edit_job_alert/$1';
$route['en/edit-job-alert/(:any)'] = 'your_cv/edit_job_alert/$1';
$route['(vi|en)/(bao-cao-viec-lam|job-alert)'] = 'your_cv/job_alert';
$route['vi/dang-ky-bao-cao-viec-lam/(:any)'] = 'your_cv/submit_job_alert/$1';
$route['en/submit-job-alert/(:any)'] = 'your_cv/submit_job_alert/$1';
$route['(vi|en)/(dang-ky-bao-cao-viec-lam|submit-job-alert)'] = 'your_cv/submit_job_alert';

$route['vi/cong-viec-cua-ban/(:any)'] = 'your_cv/edit/$1';
$route['en/your-cv/(:any)'] = 'your_cv/edit/$1';

$route['(vi|en)/(cong-viec-nop-don|jobs-applied)'] = 'home/list_save_jobs';
$route['(vi|en)/(cong-viec-da-luu|save-jobs)'] = 'home/list_save_jobs';

$route['vi/viec-lam/(:any)'] = 'jobs/detail/$1';
$route['en/job/(:any)'] = 'jobs/detail/$1';
$route['en/jobs/check_cv'] = 'jobs/check_cv';

$route['vi/tim-kiem-viec-lam/danh-sach-cong-viec'] = 'jobs/search_job/$1';
$route['en/search-job/job-list'] = 'jobs/search_job/$1';

$route['(vi|en)/(tim-kiem-viec-lam|search-job)'] = 'jobs/index';

// $route['(vi|en)/(hr-services|dich-vu-nhan-su)/(:any)/(:any)'] = 'home/hr_services_detail/$3/$4';
$route['(vi|en)/(hr-services|dich-vu-nhan-su)/(:any)'] = 'home/hr_services_detail/$3';
$route['(vi|en)/(hr-services|dich-vu-nhan-su)'] = 'home/hr_services';

$route['(vi|en)/(thi-truong|market-entry)/(cau-hoi|faq)'] = 'faq/index';
$route['(vi|en)/(cau-hoi|faq)'] = 'faq/index';

$route['en/market-entry/hr-services-for-new-businesses'] = 'home/detail_market_entry';
$route['en/market-entry/(:any)/(:any)'] = 'home/detail_news/$1/$2';
$route['vi/thi-truong/(:any)/(:any)'] = 'home/detail_news/$1/$2';
$route['en/market-entry/(:any)'] = 'home/category_news/$1';
$route['vi/thi-truong/(:any)'] = 'home/category_news/$1';
$route['(vi|en)/(market-entry|gia-nhap-thi-truong)'] = 'home/category_news';


$route['en/information-center/(:any)/(:any)'] = 'home/detail_news/$1/$2';
$route['vi/trung-tam-thong-tin/(:any)/(:any)'] = 'home/detail_news/$1/$2';

$route['en/information-center/(:any)'] = 'home/category_news/$1';
$route['vi/trung-tam-thong-tin/(:any)'] = 'home/category_news/$1';

$route['(vi|en)/(goc-chia-se|sharing-corner)'] = 'home/sharing_corner';

$route['en/sharing-corner/(:any)'] = 'home/sharing_corner_detail/$1';
$route['vi/goc-chia-se/(:any)'] = 'home/sharing_corner_detail/$1';

$route['(vi|en)/(tim-kiem|search)'] = 'home/search';
$route['(vi|en)/(video)/(:any)'] = 'home/video/$1';
$route['(vi|en)/thank-you'] = 'home/thank_you';


$route['(en|vi)/(bang-tinh-luong-danh-cho-nguoi-tim-viec|calculate_salary_for_employee)'] = 'salary_calc/index/employee';
$route['(en|vi)/(bang-tinh-luong-danh-cho-doanh-nghiep|calculate_salary_for_employer)'] = 'salary_calc/index/employer';


$route['en/career/submit_job/(:any)-(:num)'] = 'career/submit_job/$1/$2';
$route['en/career/ajax_upload_cv'] = 'career/ajax_upload_cv';
$route['en/career/ajax_upload_file_cv'] = 'career/ajax_upload_file_cv';



$route['en/career/(:any)'] = 'career/detail/$1';



$route['(vi|en)/(:any)'] = '$2';
$route['html'] = 'html';
$route['api'] = 'api';
/* End of file routes.php */
/* Location: ./application/config/routes.php */