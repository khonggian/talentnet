<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
	private $module = 'home';
	private $array_mid = '';
	private $filter_parent = '';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
		$this->load->model('home/home_model','home_model');
		$this->load->model('jobs/jobs_model','jobs_model');
		$this->array_mid = array('market_entry'=> NEW_ARRIVALS_MID, 'hr_services '=> HR_SERVICES_MID, 'career_talentnet '=> CAREER_TALENTNET_MID, 'information_center'=> INFORMATION_CENTER_MID);
		$this->filter_parent = array(
				'market_entry'=> array(
					lang('Market_Entry'),
					'market-entry',
					'thi-truong'
				),
				'hr_services'=> array(
					lang('hr_services'),
					'hr-services',
					'dich-vu-nhan-su'
				),
				'information_center'=> array(
					lang('Information_Center'),
					'information-center',
					'trung-tam-thong-tin'
				),
				// 'career_talentnet'=> array(
					// lang('Information_Center'),
					// 'career-talentnet',
					// 'trung-tam-thong-tin'
				// ),
		);
		//pr($this->session->all_userdata(),1);
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/
	function index(){
		$in_the_news = $this->model->fetch('*', INFOMATION_TB ,"`status` = 1 AND `category_id` = 2 AND `is_home` = 1","created","desc",0,4);
		$slug = language('slug');

		if(!empty($in_the_news)){
			foreach($in_the_news as $the_news){
				$category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `id` = '{$the_news->category_id}'");
				$slug_category = !empty($category)?$category->$slug:'';
				$the_news->link = PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$slug_category.'/'.$the_news->$slug;
			}
		}
		$service=$this->model->get('*', 'wz_text_menu' , "`id` = 5" );
		$data = array(
			'title' 				=> lang('Homepage'),
			'hrservices_category' 	=> $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1"),
			'function_job' 			=> $this->model->fetch('id,name,slug', FUNCTION_JOB_TB ,"`status` = 1"),
			'industry_job' 			=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', INDUSTRY_JOB_TB ,"`status` = 1"),
			'level_job' 			=> $this->model->fetch('id,name,slug', LEVEL_JOB_TB ,"`status` = 1"),
			'location' 				=> $this->model->fetch('id,name,slug', LOCATION_TB ,"`status` = 1", "porder DESC, slug", "ASC"),
			'salary_job' 			=> $this->model->fetch('id,salary', SALARY_JOB_TB ,"`status` = 1"),
			'result_jobs' 			=> $this->model->fetch('*', JOBS_TB ,"`status` = 1 AND `hot` = 1","created","desc",0,10),
			'information_category' 	=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en,image', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `is_home` = 1","order","asc",0,2),
			'in_the_news' 			=> $in_the_news,
			'service' 			=> $service,
			'language_link' 		=> ''
		);
		$link=$this->uri->uri_string();
		$seo=$this->model->get('*','wz_seo',"`url` = '{$link}' ");
		if($seo){
			//$this->template->write('meta_keywords', $seo->meta_keywords);
			//$this->template->write('meta_description', $seo->meta_description);
			//$this->template->write('meta_image', $seo->meta_image);
			$this->template->write('title', $seo->meta_title);
		}
		$this->template->write_view('content', 'index',$data);
		$this->template->render();
	}

	function video(){
		$slug = $this->uri->segment(3);
		$lang = $this->uri->segment(1);
		
		$video = $this->model->row_data('video_home',array('status'=>1,'slug_'.$lang=>$slug));
		if(!$video){
			 show_404();
		}
		if($lang == 'vi'){
			$link_slug = $video->slug_en;
		}else{
			$link_slug = $video->slug_vi;
		}
		$data = array('video'=>$video);
		$data['language_link'] = filter_link($this->current_lang,'video',1).'/'.$link_slug;
		$this->template->write('title', 'Video');
		$this->template->write_view('content', 'video',$data);
		$this->template->render();
	}
	function footer_block(){
		$slug = language('slug');
		//language('name') client
		$data = array(
			'result_client'  => $this->model->fetch('*', CLIENT_TB ,"`status` = 1 AND `is_home` = 1",'order',"asc"),
			'video_home'     => $this->model->fetch('*', VIDEO_HOME_TB ,"`status` = 1", "created","desc",0,7),
			'comment_client' => $this->model->fetch('*', COMMENT_CLIENT_TB ,"`status` = 1"),
		);
		$this->load->view('footer_block', $data);
	}
	
	function page_404(){
		if($this->current_lang == 'vi'){
			redirect(PATH_URL.'en');
		}
		$this->template->write('title', lang('title_404'));
		$this->template->write_view('content', '404');
		$this->template->render();
	}
	
	function dashboard(){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$cv = $this->model->fetch('id', YOUR_CV_TB ,"`status` = 1 AND uid = $uid");
		$cv_upload = $this->model->get('*', UPLOAD_CV_TB ,"`status` = 1 AND `uid` = '{$uid}'");
		$result_jobs = $this->home_model->match_jobs($uid,$this->current_lang,7);
		$data = array(
			'title'         => lang('Dashboard'),
			'result_jobs'   => $result_jobs,
			'cv'            => $cv,
			'cv_upload'     => $cv_upload,
			'language_link' => filter_link($this->current_lang,'dashboard',1),
		);
		$this->template->write('title', lang('Dashboard'));
		$this->template->write_view('content', 'dashboard',$data);
		$this->template->render();
	}
	
	function menu_user(){
		$data = array(
			'link_dashboard' => PATH_URL_LANG.($this->current_lang == 'en' ? 'dashboard' : 'bang-dieu-khien'),
			'link_your_cv' => PATH_URL_LANG.($this->current_lang == 'en' ? 'your-cv' : 'cong-viec-cua-ban'),
			'link_save_jobs' => PATH_URL_LANG.($this->current_lang == 'en' ? 'save-jobs' : 'cong-viec-da-luu'),
			'link_jobs_applied' => PATH_URL_LANG.($this->current_lang == 'en' ? 'jobs-applied' : 'ap-dung-cong-viec'),
			'link_my_download' => PATH_URL_LANG.($this->current_lang == 'en' ? 'my-download' : 'tai-ve-cua-toi'),
			'link_new_job_matched' => PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-moi-phu-hop' : 'new-job-matched')
		);
		$this->load->view('menu_user',$data);
	}
	
	function list_save_jobs(){
		//$result = array();
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		if($this->uri->segment(2) == 'save-jobs' || $this->uri->segment(2) == 'cong-viec-da-luu'){
			$language_link = filter_link($this->current_lang,'save_jobs',1);
			$type = 'save';
			$title = lang('save_jobs');
            // Delete list of expired jobs
            //$this->model->delete_list_expired_jobs($uid);
            
		}else{
			$language_link = filter_link($this->current_lang,'jobs_applied',1);
			$type = 'apply';
			$title = lang('jobs_applied');
		}
		// $fetch = $this->model->fetch('id,cv_id', SAVE_JOB_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `type` = '{$type}' AND `cv_id` != 0",'created','desc');
		// if(!empty($fetch)){
			// foreach($fetch  as $ft){
				// $get_result = $this->model->get('slug_cv,work_experience_id,created', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$ft->cv_id}'");
				// if(!empty($get_result)){
					// $push = json_decode($get_result->work_experience_id);
					// $work_experience_id = !empty($push) ? $push[0] : 0;	
					// $experience = $this->model->get('title,country_id,salary', WORK_EXPERIENCE_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = $work_experience_id");
					// $get_result->experience = !empty($experience)?$experience->title:'';
					// $get_result->salary = !empty($experience)?$experience->salary:'';
					// $get_result->p_type = 'cv';
					// $get_result->id = $ft->id;
					// if(!empty($experience->country_id)){
						// $get_result->location = $this->home_model->return_field(COUNTRIES_TB ,"`id` = '{$experience->country_id}'",'name');
					// }
				// }
				// $result[] = $get_result;
			// }
		// }
		$get_result = $this->model->get_list_join_jobs($uid,$type);
		if(!empty($get_result)){
			foreach($get_result as $get){
				$get->p_type = $type == 'apply' ? 'apply' : 'save';
				//$result[] = $get;
			}
			
		}
		$data = array(
			'title' 			=> $title,
			'type' 				=> $type.'_job',
			'result' 			=> $get_result,
			'language_link' 	=> $language_link
		);
		$this->template->write('title', $title);
		$this->template->write_view('content', 'savedjobs',$data);
		$this->template->render();
		
	}
	function email_similar(){
		$this->load->view('box/email_similar');
	}
	function your_cv(){
		$this->load->view('box/your_cv');
	}
	function account_management(){
		$this->load->view('box/account_management');
	}
	function check_cv(){
		$type=$this->input->post('type');
		if($type=='create_cv'){
			$your_cv = $this->model->fetch('id', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$this->session->userdata('uid')}'","created","desc",0,3);
			if($your_cv){
				//$txt=lang('can_not_upload_cv');
				$html='You can only have 1 online CV, please choose to <a href="'.base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban').'">edit your current online CV</a> or <a href="'.base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban').'">upload new CV</a> instead.';
				$data=array(
					'st' => 'success',
					'html' => $html
				);
			}else{
				$data=array(
					'st' => 'failed',
				);
			}
		}elseif($type=='upload_cv'){
			$upload_cv=$this->model->fetch('id', UPLOAD_CV_TB, "uid = '{$this->session->userdata('uid')}' AND status = 1", "id", "DESC");	
			if($upload_cv){
				//$txt=lang('can_not_upload_cv');
				$html='You can only have 1 online CV, please choose to <a href="'.base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban').'">edit your current online CV</a> or <a href="'.base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban').'">upload new CV</a> instead.';
				$data=array(
					'st' => 'success',
					'html' => $html
				);
			}else{
				$data=array(
					'st' => 'failed',
				);
			}
		}
		return print_r(json_encode($data));
	}
	function job_alert_right(){
		$this->load->view('job_alert_right');
	}
	function your_cv_right(){
		$this->load->view('your_cv_right');
	}
	
	public function download(){
		$result = $this->model->get('*', ADMIN_SETTING_TB ,"`id` = 1");
		if(!empty($result->brochure_download)){
			header("Content-Description: File Transfer");
			header("Content-type: application/vnd.ms-word");
			header("Content-type: application/x-www-form-urlencoded\r\n" );
			header('Content-disposition: attachment; filename='.str_replace('/','_',$result->brochure_download));
			readfile(DIR_UPLOAD_FILE_DOWNLOAD.$result->brochure_download);
		}
	}
	
	public function download_document(){
		if($this->session->userdata('uid')){
			$setting = $this->model->get('file_download', ADMIN_SETTING_TB ,"`id` = 1");
			if(!empty($setting->file_download)){
				header("Content-Description: File Transfer");
				header("Content-type: application/vnd.ms-word");
				header("Content-type: application/x-www-form-urlencoded\r\n" );
				header('Content-disposition: attachment; filename='.str_replace('/','_',$setting->file_download));
				readfile(DIR_UPLOAD_FILE_DOWNLOAD.$setting->file_download);
			}
		}
	}
	
	function list_jobs_match_right(){
		$uid = $this->session->userdata('uid');
		if($uid){
			$result_jobs = $this->home_model->match_jobs($uid,$this->current_lang,3);
			$data =  array(
				'result_jobs' => $result_jobs,
				'check_alert' => $result_job_alert = $this->model->fetch('id,job_title', JOB_ALERT_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc")
			);
			$this->load->view('list_jobs_match_right',$data);
		}
	}
	
	function banner($url = ''){
		$url = filter_input_xss($url);
		$url_lang = language('url');
		$banner = $this->model->get('*', BANNER_TB ,"`status` = 1 AND $url_lang = '{$url}'","created","desc");
		$data =  array('banner' => $banner);
		$this->load->view('banner',$data);
	}
	
	function services(){
		$result = $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1","id","asc",0,2);
		$data =  array('result' => $result);
		$this->load->view('services',$data);
	}
	function menu($type = ''){
		$slug = language('slug');
		$hrservices_category = $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1", 'Order', "ASC");
		$infomation_category = $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1",'order','asc');
		$new_arrivals_category = $this->model->fetch('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1", 'Order','asc');

		$about=$this->model->get('*', 'wz_text_menu' , "`id` = 1" );
		$hr=$this->model->get('*', 'wz_text_menu' , "`id` = 2" );
		$candidate=$this->model->get('*', 'wz_text_menu' , "`id` = 6" );
		$market=$this->model->get('*', 'wz_text_menu' , "`id` = 3" );
		$info=$this->model->get('*', 'wz_text_menu' , "`id` = 4" );

		$data =  array(
			'hrservices_category' => $hrservices_category,
			'infomation_category' => $infomation_category,
			'new_arrivals_category' => $new_arrivals_category,
			'about'				=> $about,
			'hr'				=> $hr,
			'candidate'				=> $candidate,
			'market'				=> $market,
			'info'				=> $info,
		);
		$this->load->view('menu'.$type,$data);
	}
	function legal_notices(){
		$data=array(
			'result' => $this->model->get('*','wz_policy')
		);
		$this->template->write('title', 'Legal Notices');
		$this->template->write_view('content', 'legal_notices',$data);
		$this->template->render();
	}
	function privacy_policy(){
		$data=array(
			'result' => $this->model->get('*','wz_policy')
		);
		$this->template->write('title', 'Privacy Policy');
		$this->template->write_view('content', 'privacy_policy',$data);
		$this->template->render();
	}
	function sitemap(){
		$slug = language('slug');
		$hrservices_category = $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1", 'Order', "ASC");
		$infomation_category = $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1",'order','asc');
		$new_arrivals_category = $this->model->fetch('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1", 'Order','asc');

		$about=$this->model->get('*', 'wz_text_menu' , "`id` = 1" );
		$hr=$this->model->get('*', 'wz_text_menu' , "`id` = 2" );
		$candidate=$this->model->get('*', 'wz_text_menu' , "`id` = 6" );
		$market=$this->model->get('*', 'wz_text_menu' , "`id` = 3" );
		$info=$this->model->get('*', 'wz_text_menu' , "`id` = 4" );

		$data =  array(
			'hrservices_category' => $hrservices_category,
			'infomation_category' => $infomation_category,
			'new_arrivals_category' => $new_arrivals_category,
			'about'				=> $about,
			'hr'				=> $hr,
			'candidate'				=> $candidate,
			'market'				=> $market,
			'info'				=> $info,
		);
		$this->template->write('title', 'Sitemap');
		$this->template->write_view('content', 'sitemap',$data);
		$this->template->render();
	}
	function in_the_news($title = 'YOU MAY INTEREST',$id = 0){
		$title = $title == 'YOU MAY INTEREST' ? lang('you_may_interest') : $title;
        /*if($this->uri->rsegment(2)!='hr_services' AND $this->uri->rsegment(2)!='hr_services_detail')
            $in_the_news = $this->model->fetch('*', INFOMATION_TB ,"`status` = 1 AND `id` != $id","created","desc",0,5);
        else{
            $in_the_news1 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>2),"created","desc",0,2);
            $in_the_news2 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>3),"created","desc",0,2);
            $in_the_news3 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>4),"created","desc",0,1);
            $in_the_news = array_merge($in_the_news1,$in_the_news2,$in_the_news3);
        }*/

        $in_the_news1 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>2),"created","desc",0,3);
        $in_the_news2 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>3),"created","desc",0,2);
        $in_the_news3 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>4),"created","desc",0,1);
        $in_the_news = array_merge($in_the_news1,$in_the_news2,$in_the_news3);
        //$in_the_news = $this->model->fetch('*',INFOMATION_TB,"`status` = 1","id","desc",0,5);
		$slug = language('slug');
		if(!empty($in_the_news)){
			foreach($in_the_news as $the_news){
				$g_category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `id` = '{$the_news->category_id}'");
				$slug_category = !empty($g_category)?$g_category->$slug:'';
				$the_news->link = PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$slug_category.'/'.$the_news->$slug;
			}
		}
		$data =  array(
			'in_the_news' 			=> $in_the_news,
			'title' 				=> $title,
			'slug_category' 		=> !empty($slug_category)?$slug_category:''
		);
		$this->load->view('in_the_news',$data);
	}
	
	function about(){
	    
		$data =  array(
			'title' 			=> lang('About_Talentnet'),
			'language_link' 	=> filter_link($this->current_lang,'about_talentnet',1),
			'about_talentnet' 	=> $this->model->fetch('*', ABOUT_AWARD_TB ,"`status` = 1 AND `parent_id` = 1","id","asc"),
			'about_award' 		=> $this->model->fetch('*', AWARD_TB ,"`status` = 1  AND `is_home` = 1","id","asc"),
			'executive_team' 	=> $this->model->fetch('*', EXECUTIVE_TEAM_TB ,"`status` = 1 AND `is_home` = 1","order","asc"),
			'list_partners' 	=> $this->model->fetch('*', PARTNERS_TB ,"`status` = 1 AND `is_home` = 1","created","desc"),
			'list_client' 		=> $this->model->fetch('*', CLIENT_TB ,"`status` = 1 AND `is_home` = 1",language('name'),"asc"),
			'office_location' 	=> $this->model->fetch('*', OFFICE_LOCATION_TB ,"`status` = 1","created","desc")
		);
		$link=$this->uri->uri_string();
		$seo=$this->model->get('*','wz_seo',"`url` = '{$link}' ");
		if($seo){
			//$this->template->write('meta_keywords', $seo->meta_keywords);
			//$this->template->write('meta_description', $seo->meta_description);
			//$this->template->write('meta_image', $seo->meta_image);
			$this->template->write('title', $seo->meta_title);
		}
		$this->template->write_view('content', 'about',$data);
		$this->template->render();
	}
	
	function executive_team(){
		$data =  array(
			'title' 			=> lang('Executive_team'),
			'language_link' 	=> filter_link($this->current_lang,'executive_team',1),
			'result' 			=> $this->model->fetch('*', EXECUTIVE_TEAM_TB ,"`status` = 1","order","asc")
            
		);
		$link=$this->uri->uri_string();
		$seo=$this->model->get('*','wz_seo',"`url` = '{$link}' ");
		if($seo){
			$this->template->write('meta_keywords', $seo->meta_keywords);
			$this->template->write('meta_description', $seo->meta_description);
			$this->template->write('meta_image', $seo->meta_image);
			$this->template->write('title', $seo->meta_title);
		}
		//$this->template->write('title', lang('Executive_team'));
		$this->template->write_view('content', 'executive_team',$data);
		$this->template->render();
	}
    function executive_team_detail($slug_name=''){	
		$name = $this->name_lang;
        $result=  $this->model->get('*', EXECUTIVE_TEAM_TB,"`status` = 1 AND (`slug_vi` = '{$slug_name}' OR `slug_en`='{$slug_name}')");
        if(empty($result)) show_404();
        
		$data =  array(
			'title' 			=> $result->$name,
			'language_link' 	=> ($this->current_lang == 'vi' ? 'executive-team/'.$result->slug_en : 'doi-ngu-dieu-hanh/'.$result->slug_vi),
			'result' 			=> $result
		);
		$this->template->write('title', lang('Executive_team'));
		$this->template->write_view('content', 'executive_team_detail',$data);
		$this->template->render();
	}
	
	function hr_services(){
		//language('name')

		$category = $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1",'Order',"asc");
		if(!empty($category)){
			foreach($category as $c){
				$c->child = $this->model->fetch('*', HRSERVICES_TB ,"`status` = 1 AND `category_id` = '{$c->id}'",language('name'),"asc");
			}
		}
		$data =  array(
			'language_link' 	=> filter_link($this->current_lang,'hr_services',1),
			'category' 			=> $category,
			'our_team' 			=> $this->model->fetch('*', EXECUTIVE_TEAM_TB ,"`status` = 1 AND `is_home` = 1","created","desc",0,5),
			'office_location' 	=> $this->model->fetch('*', OFFICE_LOCATION_TB ,"`status` = 1","created","desc"),
		);
		$link=$this->uri->uri_string();
		$seo=$this->model->get('*','wz_seo',"`url` = '{$link}' ");
		if($seo){
			/*$this->template->write('meta_keywords', $seo->meta_keywords);
			$this->template->write('meta_description', $seo->meta_description);
			$this->template->write('meta_image', $seo->meta_image);*/
			$this->template->write('title', $seo->meta_title);
		}
		//$this->template->write('title', lang('hr_services'));
		$this->template->write_view('content', 'hrservices',$data);
		$this->template->render();
	}
    function hr_services_detail($slug_cate){
        $lang_slug = language('slug');
        $detail ='';
        $category = $this->model->get('*', HRSERVICES_CATEGORY_TB ,array("status"=>1,$lang_slug=>$slug_cate));
        if(!empty($category)){

			$slug_other_lang = language('slug', $this->other_lang);
            // $detail = $this->model->get('*',HRSERVICES_TB,array('status'=>1,'category_id'=>$category->id,$lang_slug=>$slug_detail)); 
            $data['office_location'] = false;
            if(!empty($category->contact)){
	            $arr_in = implode(',',json_decode($category->contact));
	            $data['office_location'] = $this->model->fetch('*', OFFICE_LOCATION_TB ,"`status` = 1 AND id IN ($arr_in)","order","asc");     
	        }
            $data['category'] = $category;
			$data['result']=$this->model->fetch('*','wz_hrservices_sub',"`status` = 1 and hrservices_category={$category->id}","order","asc");
			$data['language_link'] = filter_link($this->current_lang,'hr_services', 1).'/'.$category->$slug_other_lang;
			
			$this->template->write('meta_keywords', $category->{language('keywords')} );
			$this->template->write('meta_description', $category->{language('description')} );
            $this->template->write('title', $category->{language('title')});
    		$this->template->write_view('content', 'hrservices_detail',$data);
    		$this->template->render();
        }
        else{
            //show_404();
            redirect('en/page_404');
        }   
    }
	
	// function new_arrivals($g_slug=''){
		// $g_slug = filter_input_xss($g_slug);
		// $name = $this->name_lang;
		// if($g_slug){
			// $get_category = $this->model->get('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1 AND $this->slug_lang = '{$g_slug}'");
		// }else{
			// $get_category = $this->model->get('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1","id","asc");
		// }
		// if(empty($get_category)){
			// redirect(PATH_URL_LANG);
		// }
		// if($get_category->slug_en != 'insights'){
			// $result  = $this->model->fetch('*', NEW_ARRIVALS_TB ,"`status` = 1 AND `category_id` = '{$get_category->id}'","id","asc");
			// $slug_lang = language('slug',$this->other_lang);
			// $lang_parent = $this->current_lang == 'vi' ? 'market-entry' : thi-truong';
			// $language_link = $lang_parent.'/'.$get_category->$slug_lang;
			
			// $category = $this->model->fetch('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1","id","asc");
			// $title = $g_slug?$get_category->$name:lang('Market_Entry');
			// $data =  array(
				// 'title_parent' 			=> lang('Market_Entry'),
				// 'title' 				=> $title,
				// 'slug_parent' 			=> $this->current_lang == 'en' ? $this->filter_parent['new_arrivals'][1] : $this->filter_parent['new_arrivals'][2],
				// 'g_slug' 				=> $g_slug,
				// 'get_category' 			=> $get_category,
				// 'category' 				=> $category,
				// 'result' 				=> $result,
				// 'hrservices_category' 	=> $this->model->fetch('*', HRSERVICES_CATEGORY_TB ,"`status` = 1","created","desc",0,2),
				// 'pagination' 			=> !empty($pagination)?$pagination:'',
				// 'totalRows' 			=> !empty($totalRows)?$totalRows:'',
				// 'language_link' 		=> $language_link
			// );
			// $this->template->write('title', $title);
			// $this->template->write_view('content', 'new_arrivals' ,$data);
			// $this->template->render();
		// }else{
			// $this->category_news($g_slug);
		// }
		
		
	// }
	
	function category_news($g_slug=''){
		$slug_parent = $this->uri->segment(2);
		$g_slug = filter_input_xss($g_slug);
		
		switch($slug_parent){
			case 'market-entry':
			case 'thi-truong':
				$this->market_entry_page($g_slug);
				break;
			case 'information-center':
			case 'trung-tam-thong-tin':
				//$this->information_center_page($g_slug, 'information_center', INFOMATION_TB, INFORMATION_CATEGORY_TB, DIR_UPLOAD_INFORMATION);
                $this->information_center_page($g_slug);
				break;
		};
	}
    function market_entry_page($g_slug){
        $type='market_entry';
        $table=NEW_ARRIVALS_TB;
        $table_category=NEW_ARRIVALS_CATEGORY_TB;
        $path_img = DIR_UPLOAD_NEW_ARRIVALS;
        $name = $this->name_lang;
		$g_slug = filter_input_xss($g_slug);
		if($g_slug){
			$get_category = $this->model->get('*', $table_category ,"`status` = 1 AND $this->slug_lang = '{$g_slug}'");
		}else{
			$get_category = $this->model->get('*', $table_category ,"`status` = 1","id","asc");
		}
		if(empty($get_category)){
			redirect(PATH_URL_LANG);
		}
		$get = array(
			'order' => $this->input->get('order')=='asc'?'asc':'desc',
			'keyword' => $this->input->get('keyword'),
			'pz' => $this->input->get('pz')?$this->input->get('pz'):5,
		);
		$pageNum = $this->input->get('p');
		$pageSize = $get['pz'];
		$totalRows = $this->model->getList(-1, -1,$get,$get_category->id,$table);
		$pagination = pagelistLimited($totalRows, $pageNum, $pageSize);
		if ($pageNum == '')
		$pageNum = 1;
		$startRow = ($pageNum - 1) * $pageSize;
		$result = $this->model->getList($pageSize, $startRow,$get,$get_category->id,$table);
		
		$slug_lang = language('slug',$this->other_lang);
		$lang_parent = $this->current_lang == 'vi' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2];
		$language_link = $lang_parent.'/'.$get_category->$slug_lang;
		
		$category = $this->model->fetch('*', $table_category ,"`status` = 1","id","asc");
		$data =  array(
			'title_parent' 			=> $this->filter_parent[$type][0],
			'type' 					=> $type,
			'title' 				=> $get_category->$name,
			'slug_parent' 			=> $this->current_lang == 'en' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2],
			'g_slug' 				=> $g_slug,
			'get_category' 			=> $get_category,
			'table' 				=> $table,
			'category' 				=> $category,
			'result' 				=> $result,
			'path_img' 				=> $path_img,
			'pagination' 			=> !empty($pagination)?$pagination:'',
			'totalRows' 			=> !empty($totalRows)?$totalRows:'',
			'language_link' 		=> $language_link
		);
		if(!empty($category->image)){
			$img_share = img($path_img.$category->image,200,200);
		}else{
			$img_share = IMG_SHARE_SOCIAL;
		}
		$this->template->write('meta_keywords', $get_category->$name);
		$this->template->write('meta_description', $get_category->$name);
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', $get_category->$name);
		$this->template->write_view('content', 'market_entry' ,$data);
		$this->template->render();
    }
    function information_center_page($g_slug){
		
    	global $LIST_SERVICE;
        $type='information_center';
        $name = $this->name_lang;
		$g_slug = filter_input_xss($g_slug);
		
        $get_category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND $this->slug_lang = '{$g_slug}'");
		
        if(empty($get_category)){
			redirect(PATH_URL_LANG);
		}
        $get = array(
			'order' => $this->input->get('order')=='asc'?'asc':'desc',
            'view_by' => $this->input->get('view_by'),
			'keyword' => $this->input->get('keyword'),
            'by_day' => $this->input->get('by_day'),
            'by_month' => $this->input->get('by_month'),
            'by_year' => $this->input->get('by_year'),
			'pz' => $this->input->get('pz')?$this->input->get('pz'):5,
		);
        $pageNum = $this->input->get('p');
		$pageSize = $get['pz'];
		$totalRows = $this->model->getList(-1, -1,$get,$get_category->id,INFOMATION_TB);
        //pr($this->db->last_query());
		$pagination = pagelistLimited($totalRows, $pageNum, $pageSize);
		if ($pageNum == '')
		$pageNum = 1;
		$startRow = ($pageNum - 1) * $pageSize;
		$result = $this->model->getList($pageSize, $startRow,$get,$get_category->id,INFOMATION_TB);
		
		//pr($this->db->last_query());
		$slug_lang = language('slug',$this->other_lang);
		$lang_parent = $this->current_lang == 'vi' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2];
		$language_link = $lang_parent.'/'.$get_category->$slug_lang;
		$slug=language('slug');
		$category = $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1",'order',"asc");
		$data =  array(
			'title_parent' 			=> $this->filter_parent[$type][0],
			'type' 					=> $type,
			'title' 				=> $get_category->$name,
			'slug_parent' 			=> $this->current_lang == 'en' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2],
			'g_slug' 				=> $g_slug,
			'get_category' 			=> $get_category,
			'table' 				=> INFOMATION_TB,
			'category' 				=> $category,
			'result' 				=> $result,
			'path_img' 				=> DIR_UPLOAD_INFORMATION,
			'pagination' 			=> !empty($pagination)?$pagination:'',
			'totalRows' 			=> !empty($totalRows)?$totalRows:'',
			'language_link' 		=> $language_link,
            'list_service'          => $LIST_SERVICE,
            'view_by'               => $get['view_by'],
            'library_keyword'       => $get['keyword'],
            'by_day'                => $get['by_day'],
            'by_month'              => $get['by_month'],
            'by_year'               => $get['by_year'],
		);
		if(!empty($category->image)){
			$img_share = img(DIR_UPLOAD_INFORMATION.$category->image,200,200);
		}else{
			$img_share = IMG_SHARE_SOCIAL;
		}
		$this->template->write('meta_keywords', $get_category->$name);
		$this->template->write('meta_description', $get_category->$name);
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', $get_category->$name);
		$this->template->write_view('content', 'information_center' ,$data);
		$this->template->render();
    }



	function filter_category($g_slug='',$type='', $table='', $table_category='',$path_img = ''){
		$name = $this->name_lang;
		$g_slug = filter_input_xss($g_slug);
		if($g_slug){
			$get_category = $this->model->get('*', $table_category ,"`status` = 1 AND $this->slug_lang = '{$g_slug}'");
		}else{
			$get_category = $this->model->get('*', $table_category ,"`status` = 1","id","asc");
		}
		if(empty($get_category)){
			redirect(PATH_URL_LANG);
		}
		$get = array(
			'order' => $this->input->get('order')=='asc'?'asc':'desc',
			'keyword' => $this->input->get('keyword'),
			'pz' => $this->input->get('pz')?$this->input->get('pz'):5,
		);
		$pageNum = $this->input->get('p');
		$pageSize = $get['pz'];
		$totalRows = $this->model->getList(-1, -1,$get,$get_category->id,$table);
		$pagination = pagelistLimited($totalRows, $pageNum, $pageSize);
		if ($pageNum == '')
		$pageNum = 1;
		$startRow = ($pageNum - 1) * $pageSize;
		$result = $this->model->getList($pageSize, $startRow,$get,$get_category->id,$table);
		
		$slug_lang = language('slug',$this->other_lang);
		$lang_parent = $this->current_lang == 'vi' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2];
		$language_link = $lang_parent.'/'.$get_category->$slug_lang;
		
		$category = $this->model->fetch('*', $table_category ,"`status` = 1","id","asc");
		$data =  array(
			'title_parent' 			=> $this->filter_parent[$type][0],
			'type' 					=> $type,
			'title' 				=> $get_category->$name,
			'slug_parent' 			=> $this->current_lang == 'en' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2],
			'g_slug' 				=> $g_slug,
			'get_category' 			=> $get_category,
			'table' 				=> $table,
			'category' 				=> $category,
			'result' 				=> $result,
			'path_img' 				=> $path_img,
			'pagination' 			=> !empty($pagination)?$pagination:'',
			'totalRows' 			=> !empty($totalRows)?$totalRows:'',
			'language_link' 		=> $language_link
		);
		if(!empty($category->image)){
			$img_share = img($path_img.$category->image,200,200);
		}else{
			$img_share = IMG_SHARE_SOCIAL;
		}
		$this->template->write('meta_keywords', $get_category->$name);
		$this->template->write('meta_description', $get_category->$name);
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', $get_category->$name);
		$this->template->write_view('content', 'category' ,$data);
		$this->template->render();
	}
	function detail_market_entry(){
		$result=$this->model->get('*','wz_new_arrivals',"`status` = 1 and `category_id` = 1");
		$type="market_entry";
		$slug_lang = language('slug',$this->other_lang);
		$lang_parent = $this->current_lang == 'vi'?'vi':'en';
		$language_link = $lang_parent.'/market_entry/'.$result->$slug_lang;

		$data =  array(
			'result'        => $result,
			'language_link' => $language_link,
			'type'          => $type,
			'slug_parent'   => $this->current_lang == 'en' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2],
			'title_parent'  => $this->filter_parent[$type][0],
			'category'      => $this->model->fetch('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1","id","asc")
		);
		$name=language('name');
		$this->template->write('meta_keywords', $result->{language('meta_keyword')});
		$this->template->write('meta_description', $result->{language('description')});
		$this->template->write('title', $result->{language('meta_title')});
		$this->template->write_view('content', 'detail_market_entry' ,$data);
		$this->template->render();
	}
	function detail_news($slug_category='',$slug=''){
		$slug = filter_input_xss($slug);
		$slug_category = filter_input_xss($slug_category);
		$slug_parent = $this->uri->segment(2);
			
		switch($slug_parent){
			case 'market-entry':
			case 'thi-truong':
				$this->filter_detail($slug_category, $slug, 'market_entry', NEW_ARRIVALS_TB, NEW_ARRIVALS_CATEGORY_TB, DIR_UPLOAD_NEW_ARRIVALS);
				break;
			case 'information-center':
			case 'trung-tam-thong-tin':
				$this->filter_detail($slug_category, $slug, 'information_center', INFOMATION_TB, INFORMATION_CATEGORY_TB, DIR_UPLOAD_INFORMATION);
				break;
		};
	}
	
	function filter_detail($slug_category='', $slug='', $type='', $table='', $table_category='', $path_img=''){
		$description = language('description');
		$meta_keyword = language('meta_keyword');
		$meta_title = language('meta_title');
		$name = $this->name_lang;
		$gslug = $this->slug_lang;
		$result  = $this->model->get('*', $table ,"`status` = 1 AND $this->slug_lang = '{$slug}'");
		if(empty($result)){
			redirect(PATH_URL_LANG.$this->filter_parent[$type][0].'/'.$this->uri->segment(3));
		}
		// UPDATE 
		$this->db->update(NOTIFICATION_TB, array('is_viewed'=>1), array('nid' => $result->id,'type'=>'news'));
		// END UPDATE
		$get_category = $this->model->get('*', $table_category ,"`status` = 1 AND `id` = '{$result->category_id}' AND $this->slug_lang = '{$slug_category}'");
		$array_tid = array();
		$mid = $this->array_mid[$type];
		/*$get_join_tags = $this->model->fetch('tid',TAGS_JOIN_TB,"`status` = 1 AND `mid` = ".$mid." AND `nid` = '{$result->id}'");*/
		$get_join_tags='';
		if(!empty($get_join_tags)){
			foreach($get_join_tags as $tags){
				$array_tid[] = $tags->tid;
			}
		}
		$get_tags = $this->model->get_tags($mid,$result->id,$array_tid,3);

		$slug_lang = language('slug',$this->other_lang);
		$lang_parent = $this->current_lang == 'vi' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2];
		$lang_slug_cate = (!empty($get_category))?$get_category->$slug_lang:'';
		$language_link = $lang_parent.'/'.$lang_slug_cate.'/'.$result->$slug_lang;
		// redirect_link
		$redirect_link = ($this->current_lang == 'vi' ? $this->filter_parent[$type][2] : $this->filter_parent[$type][1]).'/'.(!empty($get_category)?$get_category->$gslug:'').'/'.$result->$gslug.'?no-download';
		$category = $this->model->fetch('*', $table_category ,"`status` = 1","id","asc");
		$title = $result->$name;
		
		$where_other = array('id <>'=> $result->id,'status'=>1,'category_id'=>$result->category_id);

		$data =  array(
			'title_parent'  => $this->filter_parent[$type][0],
			'type'          => $type,
			'slug_parent'   => $this->current_lang == 'en' ? $this->filter_parent[$type][1] : $this->filter_parent[$type][2],
			'category'      => $category,
			'table'         => $table,
			'get_category'  => $get_category,
			'slug_category' => $slug_category,
			'get_tags'      => $get_tags,
			'result'        => $result,
			'title'         => $title,
			'language_link' => $language_link,
			'redirect_link' => $redirect_link,
			'other_post'    => $this->model->get_all($table,$where_other,'created desc',5)

		);
		if(!empty($result->image)){
			$img_share = img($path_img.$result->image,200,200);
		}else{
			$img_share = IMG_SHARE_SOCIAL;
		}
		$this->template->write('meta_keywords', $result->$meta_keyword);
		$this->template->write('meta_description', $result->$description);
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', $result->$meta_title);
		$this->template->write_view('content', 'detail',$data);
		$this->template->render();
	}
    function list_client(){
        $data = array();
        $get= array(
                'p'			=> (int)$this->input->get('p'),
                's'			=> filter_input_xss($this->input->get('s')),
                'k'			=> filter_input_xss(urldecode($this->input->get('k'))),
                'r'			=> filter_input_xss($this->input->get('r')),
                'i'			=> filter_input_xss($this->input->get('i')),
    		);
        $get['k'] = ($get['k'])?$get['k']:'';
        $get['i'] = ($get['i'])?$get['i']:'';
    	$page_num		= ($get['p']) ? $get['p'] : 1;
        $page_size = ($get['s']) ? $get['s'] : 20;
        $start_row =($page_num - 1) * $page_size;
        $total_row	 	= $this->model->get_list_clients(-1, -1,$get);
        $result = $this->model->get_list_clients($start_row, $page_size,$get);
        $result_client = $this->model->fetch('*', CLIENT_TB ,"`status` = 1 AND `is_home` = 1 ",language('name'),"asc",0,7);
        
        $pagination = pagelistLimited($total_row,$page_num,$page_size,3);
		$data= array(
			'title'         => lang('Client_List'),
			'result'        => $result,
			'total_row'     => $total_row,
			'row_per_page'  => $page_size,
			'keyword'       => $get['k'],
			'range'         => $get['r'],
			'pagination'    => $pagination,
			'language_link' => filter_link($this->current_lang,'list_client',1),
			'result_client' => $this->model->fetch('*', CLIENT_TB ,"`status` = 1 and `image`!='' ",language('name'),"asc"),
			'industry' => $this->model->fetch('id,name_vi,name_en', 'wz_industry' ,"`status` = 1" )
		);
        $this->template->write('title', lang('Client_List'));
		$this->template->write_view('content', 'list_client',$data);
		$this->template->render();
    }
    function list_partner(){
        $data = array();
        $get= array(
                'p'			=> (int)$this->input->get('p'),
                's' 		=> filter_input_xss($this->input->get('s')),
                'r'			=> filter_input_xss($this->input->get('r')),
    		);
        $get['r'] 	= ($get['r'])?$get['r']:'';
    	$page_num	= ($get['p']) ? $get['p'] : 1;
        $page_size 	= ($get['s']) ? $get['s'] : 40;
        $start_row 	= ($page_num - 1) * $page_size;
        $total_row	 	= $this->model->get_list_partner(-1, -1,$get);
        $result = $this->model->get_list_partner($start_row, $page_size,$get);
        
        $pagination = pagination($total_row,$page_num,$page_size,3);
		$data= array(
			'title'			=> lang('Partners_list'),
			'result'		=> $result,
            'total_row'     => $total_row,
            'row_per_page'  => $page_size,
            'range'         => $get['r'],
			'pagination'	=> $pagination,
            'language_link' => filter_link($this->current_lang,'list_partner',1),
		);
        $this->template->write('title', lang('Partners_list'));
		$this->template->write_view('content', 'list_partner',$data);
		$this->template->render();
    }

    function list_award(){
        $data = array();
        $get= array(
                'p'			=> (int)$this->input->get('p')
        );
    	$page_num		= ($get['p']) ? $get['p'] : 1;
        $page_size = '5';
        $start_row =($page_num - 1) * $page_size;
        $total_row	 	= $this->model->get_list_award2(-1, -1);
        $result = $this->model->get_list_award2($start_row, $page_size);
        $pagination = pagelistLimited($total_row,$page_num,$page_size,3);
		$data= array(
			'title'				=> lang('Awards'),
			'result'			=> $result,
            'total_row'     	=> $total_row,
            'row_per_page'  	=> $page_size,
			'pagination'		=> $pagination,
			'language_link' 	=> filter_link($this->current_lang,'list_award',1)
            
		);
        $this->template->write('title', lang('Awards'));
		$this->template->write_view('content', 'list_award',$data);
		$this->template->render();
    }
    function contact(){
        $data['address'] = $this->model->fetch('*', CONTACT_ADDRESS_TB,'status =1 ', 'created','desc');
        echo $this->load->view('contact',$data);
    }
    function client_partners($title = '', $table = '', $dir_img = DIR_UPLOAD_CLIENT){
		$data = array(
			'result' 	=> 	$this->model->fetch('*', $table,'status =1','created','desc',0,6),
			'title'		=>	$title,
			'dir_img'	=>	$dir_img
		);
        echo $this->load->view('client',$data);
    }
    function executive_team_left(){
        $data['executive_team_left'] = $this->model->fetch('*', EXECUTIVE_TEAM_TB,'status =1','created','desc');
        echo $this->load->view('executive_team_left',$data);
    }
	function subscribe($c_id = 0, $category = ''){
		$category = filter_input_xss($category);
		$data =  array('category' => $category,'c_id' => $c_id);
		$this->load->view('subscribe',$data);
	}
    function comment_client_left(){
        $data['comment_client_left'] = $this->model->fetch('*', COMMENT_CLIENT_TB ,"`status` = 1");
        echo $this->load->view('comment_client_left',$data);
    }
	function submit_subscribe(){
		if($this->input->post()){
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_email_md($arr_error, $error, $this->input->post('email'));
			$email = htmlspecialchars(strip_tags($this->input->post('email')));
			$c_id = (int)filter_input_xss($this->input->post('c_id'),1);
			$category = filter_input_xss($this->input->post('category'));
			$link = filter_input_xss($this->input->post('link'));
			$name_link = filter_input_xss($this->input->post('name_link'));
			if(empty($error)){
				$result = $this->model->get('', SUBSCRIBE_TB , "`email` = '{$email}' AND `c_id` = $c_id AND `category` ='{$category}'");
				if(empty($result)){
					$this->model->insert_subscribe($email,$c_id,$category,$link,$name_link);
					$txt = $this->current_lang == 'en' ? 'You have registered to receive email communication success' : 'Bạn đã đăng ký email để nhận thông tin thành công.';
				}else{
					$txt = $this->current_lang == 'en' ? 'Email already registered' : 'Bạn đã dùng email để nhận thông tin này rồi.';
					$arr_error[]= array(
						'field'	=> 'email',
						'txt'	=> $txt
					);	
					$error = TRUE;
				}
			}		
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
				
			return print_r(json_encode($json));	
		}
	}
	
	/* notification */
	function notification(){
		$notification_subscribe = array();
		$notification_job_alert = array();
		$array_field = array('function_id','industry_id','location_id','level_id','job_title');
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('id,email', USER_TB, "`status` = 1 AND `id` ='{$uid}'");
		if(!empty($user)){
			$get_subscribe = $this->model->fetch('c_id,category,created', SUBSCRIBE_TB, "`email` = '{$user->email}' AND `uid` = '{$user->id}'");
            
			if(!empty($get_subscribe)){
				foreach($get_subscribe as $subscribe){
					$article = $this->model->fetch('*', $subscribe->category , "`category_id` = '{$subscribe->c_id}' AND `created` >= '".date('Y-m-d',strtotime($subscribe->created))."'");
					if(!empty($article)){
						foreach($article as $arr){
							$get_result = $this->model->get('id', NOTIFICATION_TB, "`uid` = '{$user->id}' AND `cid` = '{$arr->category_id}' AND `nid` = '{$arr->id}' AND `type` = 'news'");
							if(empty($get_result)){
								$notification_subscribe[] = $arr;
							}
						}
					}
					// pr($notification_subscribe,1);
				}
			}
			$get_job_alert = $this->model->fetch('*', JOB_ALERT_TB, "`status` = '1' AND `uid` = '{$user->id}'");
			$array_id = array();
            //pr($get_job_alert);
			if(!empty($get_job_alert)){
				foreach($get_job_alert as $job_alert){
					foreach($array_field as $field){
						$implode = !empty($array_id)?implode(',',$array_id):0;
						if($field == 'job_title'){
							$result_job = $this->model->fetch('*', JOBS_TB , "(`name_vi` LIKE '%{$job_alert->$field}%' OR `name_en` LIKE '%{$job_alert->$field}%') AND `created` >= '".date('Y-m-d',strtotime($job_alert->created))."' AND `id` NOT IN ($implode)");
						}else{
							$result_job = $this->model->fetch('*', JOBS_TB , "$field = '{$job_alert->$field}' AND `created` >= '".date('Y-m-d',strtotime($job_alert->created))."' AND `id` NOT IN ($implode)");
						}
                        //pr($this->db->last_query());
						if(!empty($result_job)){
							foreach($result_job as $job){
								$notification_job_alert[] = $job;
								$array_id[] = $job->id;
							}
						}
                        //pr($array_id);
						$result_job = '';
					}
				}
			}
			// pr($notification_job_alert,1);
		}
		$data = array(
			'notification_subscribe' => $notification_subscribe,
            'notification_job_alert' => $notification_job_alert
		);
		 // pr($data,1);
		// $this->template->write_view('content', 'notification',$data);
		// $this->template->render();
        $this->load->view('notification',$data);
	}
	
	function view_notification(){
		$data_insert = array();
		$notification_subscribe = array();
		$notification_job_alert = array();
		$array_field = array('function','industry','location','level','job_title');
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('id,email', USER_TB, "`status` = 1 AND `id` ='{$uid}'");
		$view_more = $this->input->get('view_more');
		$from = $this->input->get('from');
		if(!empty($user)){
			if($view_more==''){
				// -------------- insert notification news
				$arr_cate = array();
				/*$get_subscribe = $this->model->fetch('c_id,category,created', SUBSCRIBE_TB, "`email` = '{$user->email}' AND `uid` = '{$user->id}'");
				$category_info = $this->model->fetch('*',INFORMATION_CATEGORY_TB , "slug_en='in-the-news' ");
				if(!empty($category_info))
					foreach ($category_info as $cate) {
						$arr_cate[$cate->id]['slug_vi'] = $cate->slug_vi;
						$arr_cate[$cate->id]['slug_en'] = $cate->slug_en;
					}
				
				//if(!empty($get_subscribe)){
					//foreach($get_subscribe as $subscribe){
						$sql = "SELECT * FROM  {$subscribe->category} 
								WHERE category_id= '{$subscribe->c_id}' AND created >= '".date('Y-m-d',strtotime($subscribe->created))."' 
								AND id NOT IN (SELECT nid FROM ".NOTIFICATION_TB." WHERE type='news' AND cid = {$subscribe->c_id})";
						$articles = $this->db->query($sql)->result();

						if(!empty($articles)){
							foreach($articles as $ar){
								$data_insert[]= array(
									'uid' => $uid,
									'cid' => $ar->category_id,
									'nid' => $ar->id,
									'type'=> 'news',
									'title_vi' => $ar->name_vi,
									'title_en' => $ar->name_en,
									'link_vi' => 'vi/trung-tam-thong-tin/'.$arr_cate[$ar->category_id]['slug_vi'].'/'.$ar->slug_vi,
									'link_en' => 'en/information-center/'.$arr_cate[$ar->category_id]['slug_en'].'/'.$ar->slug_en,
									'status' =>1,
									'created'=> NOW
								);
							}
						}

						
						// pr($notification_subscribe,1);
					//}
					if(count($data_insert)>0)
						$this->db->insert_batch(NOTIFICATION_TB,$data_insert);
				//}*/
				$news=$this->model->fetch('*', INFOMATION_TB, "`status` = '1' AND `category_id` = 2");
				foreach($news as $key=>$row){
					$link_vi='vi/trung-tam-thong-tin/tin-tuc/'.$row->slug_vi;
					$link_en='en/information-center/in-the-news/'.$row->slug_en;
					$item=$this->model->fetch('*', NOTIFICATION_TB,array('type'=>'news','uid'=>$uid,'link_en'=>$link_en ) );
					//pr($item,1);
					if(empty($item)){
						$data_insert= array(
							'uid' => $uid,
							'cid' => 0,
							'nid' => 0,
							'type'=> 'news',
							'title_vi' => $row->name_vi,
							'title_en' => $row->name_en,
							'link_vi' => $link_vi,
							'link_en' => $link_en,
							'status' =>1,
							'created'=> NOW
						);
						$this->db->insert(NOTIFICATION_TB,$data_insert);
					}
				}
				//pr($news,1);

				// ------------- insert notification jobalert
				$array_id = array();
				$get_job_alert = $this->model->fetch('*', JOB_ALERT_TB, "`status` = '1' AND `uid` = '{$user->id}'");
				$notification_ja = $this->model->fetch('*',NOTIFICATION_TB,array('type'=>'job_alert'));
				
				if(!empty($notification_ja)){
					foreach ($notification_ja as $noti) {
						$array_id[]= $noti->nid;
					}
				}
				
				if(!empty($get_job_alert)){
					foreach($get_job_alert as $job_alert){
						foreach($array_field as $field){
							//$field = $field.'_id';
							$implode = !empty($array_id)?implode(',',$array_id):0;
							if($field == 'job_title'){
								$result_job = $this->model->fetch('*', JOBS_TB , "(`name` LIKE '%{$job_alert->$field}%') AND `created` >= '".date('Y-m-d',strtotime($job_alert->created))."' AND `id` NOT IN ($implode)");
							}else{
								$field_value = $job_alert->{$field.'_id'};
								$result_job = $this->model->fetch('*', JOBS_TB , "$field = '$field_value' AND `created` >= '".date('Y-m-d',strtotime($job_alert->created))."' AND `id` NOT IN ($implode)");
							}
							if(!empty($result_job)){
								foreach($result_job as $job){
									$notification_job_alert[] = $job;
									$array_id[] = $job->id;
								}
							}
	                        //pr($array_id);
							$result_job = '';
						}
					}
				}
				// pr($notification_job_alert);
				$data_insert = array();
				if(!empty($notification_job_alert)){
					foreach($notification_job_alert as $noti ){
						$data_insert[] = array(
							'uid' => $uid,
							'cid' => 0,
							'nid' => $noti->id,
							'type'=> 'job_alert',
							'title_vi' => $noti->name_vi,
							'title_en' => $noti->name_en,
							'link_vi' => 'vi/viec-lam/'.$noti->slug_vi,
							'link_en' => 'en/job/'.$noti->slug_en,
							'status' =>1,
							'created'=> NOW
						);
					}
					// pr($data_insert,1);
					$this->db->insert_batch(NOTIFICATION_TB,$data_insert);
				}
				$data['counter'] =0;
				$this->db->where('is_viewed', '0');
				$this->db->where('uid', $this->session->userdata['uid']);
				$this->db->from(NOTIFICATION_TB);
				$data['counter'] = $this->db->count_all_results();
				$data['html'] = '';
				$data['status'] = 1;

				echo json_encode($data);
			}
			else{
				$from = empty($from)?0:$from;
				$this->db->select('*');
				$this->db->from(NOTIFICATION_TB);
				$this->db->where(array('is_viewed'=>0,'uid'=>$this->session->userdata['uid']));
				$this->db->order_by('type','asc');
				$this->db->limit(5,$from);
				$list_notification = $this->db->get()->result();
				if(empty($list_notification)){
					$this->db->select('*');
					$this->db->from(NOTIFICATION_TB);
					$this->db->where(array('is_viewed'=>1,'uid'=>$this->session->userdata['uid']));
					$this->db->order_by('created','desc');
					$this->db->limit(5,$from);
					$list_notification = $this->db->get()->result();
				}
				$data_output['list_notification'] = $list_notification;
				$data['html'] = $this->load->view('notification',$data_output,true);
				$data['debug'] = $from;
				$data['debug2'] = $this->db->last_query();
				$data['status'] = 1;
				echo json_encode($data);
			}
		}
		else{
			$data['html'] = '';
			$data['status'] = 0;
			echo json_encode($data);		
		}
		
		
	}


	function sharing_corner(){
        $type='information_center';
        $name = $this->name_lang;
		
        
        $pageNum = $this->input->get('p');
		$pageSize = 5;
		$totalRows = $this->model->count_data(SHARING_CORNER_TB,'status =1');
		$pagination = pagelistLimited($totalRows, $pageNum, $pageSize);
		if ($pageNum == '')
		$pageNum = 1;
		$startRow = ($pageNum - 1) * $pageSize;
		$q = array(
				'table' => SHARING_CORNER_TB,
				'where' => 'status = 1',
				'order_by' => 'id desc',
				'limit' => "$pageSize,$startRow"
			);
		$result = $this->model->get_data($q);

		$language_link = filter_link($this->current_lang,'sharing_corner',1);
		$data =  array(
			'result'        => $result,
			'path_img'      => DIR_UPLOAD_SHARING_CORNER,
			'pagination'    => !empty($pagination)?$pagination:'',
			'totalRows'     => !empty($totalRows)?$totalRows:'',
			'type'          => $type,
			'language_link' => $language_link,
			'category'      => $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1"),
		);
		$img_share = IMG_SHARE_SOCIAL;
		$this->template->write('meta_keywords', '');
		$this->template->write('meta_description', '');
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', 'Sharing corner');
		$this->template->write_view('content', 'sharing_corner' ,$data);
		$this->template->render();
    }
    function sharing_corner_detail($slug=''){
    	$type='information_center';
		$q = array(
				'table' => SHARING_CORNER_TB,
				'where' => 'status = 1 AND '.language('slug').' = "'.$slug.'"',
			);
		$result = $this->model->get_data($q,'row');

		if(!$result){
			redirect(PATH_URL_LANG);
		}
		$slug_lang = language('slug',$this->other_lang);
		$language_link = filter_link($this->current_lang,'sharing_corner',1).'/'.$result->$slug_lang;
		$data =  array(
			'result'        => $result,
			'type'          => $type,
			'language_link' => $language_link,
			'category'      => $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1"),
			'other_post'    => $this->model->get_all(SHARING_CORNER_TB,array('id <>'=> $result->id,'status'=>1),'created desc',10)
		);
		$img_share = IMG_SHARE_SOCIAL;
		$this->template->write('meta_keywords', '');
		$this->template->write('meta_description', '');
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', $result->{'name_'.$this->uri->segment(1)});
		$this->template->write_view('content', 'sharing_corner_detail' ,$data);
		$this->template->render();
    }

    function search(){
    	$type='information_center';
	
		$slug_lang = language('slug',$this->other_lang);
		$language_link = filter_link($this->current_lang,'search',1);
		$data =  array(
			'type'          => $type,
			'language_link' => $language_link,
			'category'      => $this->model->fetch('*', INFORMATION_CATEGORY_TB ,"`status` = 1"),
		);

		$img_share = IMG_SHARE_SOCIAL;
		$this->template->write('meta_keywords', '');
		$this->template->write('meta_description', '');
		$this->template->write('meta_image', $img_share);
		$this->template->write('title', '');
		$this->template->write_view('content', 'search' ,$data);
		$this->template->render();
    }

    function thank_you(){	        
		$data =  array(
			"title" => "Thank You",
			'result_client'  => $this->model->fetch('*', CLIENT_TB ,"`status` = 1 AND `is_home` = 1",'order',"asc"),
		);
		$this->template->write('title', lang('Thank You Page'));
		$this->template->write_view('content', 'thank_you',$data);
		$this->template->render();
	}
}
?>