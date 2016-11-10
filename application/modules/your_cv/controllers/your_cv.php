<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Your_cv extends MX_Controller {
	private $module = 'your_cv';
	private $array_yourcv = array();
	function __construct(){
		parent::__construct();

		$this->load->model($this->module.'_model','model');
		$this->load->model('home/home_model','home_model');
		$this->load->model('jobs/jobs_model','jobs_model');
		$this->array_yourcv = array('work_experience' => 'work_experience_id', 'education' => 'education_id','skill_language' => 'skill_language_id','reference' => 'reference_id','courses'=>'courses_id');
	}
	

	/*-------------------------------------- FRONTEND --------------------------------------*/	
	function index(){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = $this->model->fetch('id,slug_cv,work_experience_id,created', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc",0,3);
		if(!empty($result)){
			foreach($result as $r){
				if(!empty($r->work_experience_id)){
					$push = json_decode($r->work_experience_id);
					$we_id = !empty($push)?$push[0]:0;
					$r->experience = $this->home_model->return_field(WORK_EXPERIENCE_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$we_id}'",'title');
				}
			}
		}
		$data = array(
			'title' 			=> lang('Your_CVs'),
			'result' 			=> $result,
			'cv_upload' 		=> $this->model->row_data(UPLOAD_CV_TB,array('uid'=>$uid,'status'=>1)),
			'language_link' 	=> PATH_URL_LANG.$this->current_lang == 'vi' ?'cong-viec-cua-ban':'your-cv',
		);
		$this->template->write('title', lang('Your_CVs'));
		$this->template->write_view('content', 'FRONTEND/manager_cv',$data);
		$this->template->render();
		
	}
	function create(){
		$uid = $this->session->userdata('uid');

		$user = $this->model->get('*', USER_TB, "id = '{$uid}'");
		if(empty($user)) {
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$cv = $this->model->fetch('id', YOUR_CV_TB ,"`status` = 1 AND uid = $uid");

		
		if(!empty($cv)) {
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'cong-viec-cua-ban' : 'your-cv'));
		}
		$count = $this->model->count_all_results_cv($uid);
		if($count >= 3){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'tim-kiem-viec-lam' : 'search-job').'#fail_cv');
		}
		$data= array(
			'title'         => lang('Your_CVs'),
			'level'         => $this->model->fetch('*', LEVEL_JOB_TB, "status = 1","created","asc"),
			'industry'      => $this->model->fetch('*', INDUSTRY_JOB_TB, "status = 1","created","asc"),
			'location'      => $this->model->fetch('*', LOCATION_TB, "status = 1","porder desc, slug","asc"),
			'countries'     => $this->model->fetch('*', COUNTRIES_TB, "status = 1","type","desc"),
			'degree'        => $this->model->fetch('*', DEGREE_TB, "status = 1","created","asc"),
			'major'         => $this->model->fetch('*', MAJOR_TB, "status = 1","created","asc"),
			'language'      => $this->model->fetch('*', LANGUAGE_TB, "status = 1","created","asc"),
			'city'          => $this->model->fetch('*', 'wz_city', "status = 1","name","asc"),
			'language_link' => filter_link($this->current_lang,'create_cv',1),
			'user'          => $user
		);
		$this->template->write('title', lang('Your_CVs'));
		$this->template->write_view('content','FRONTEND/create',$data);
		$this->template->render();
	}
	
	function edit($slug=''){

		$name = $this->name_lang;
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('*', USER_TB, "id = '{$uid}'");
		$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `slug_cv` ='{$slug}'");
		if(empty($user) || empty($result_your_cv)) {
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = array();
		if(!empty($result_your_cv)){
			$result['personal'] = $this->model->get('*', PERSONAL_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$result_your_cv->personal_id}'","created","asc");
			$city = $this->model->row_data('city',array('crm_id'=>$result['personal']->city,'status'=>1));
			if($city){
				$result['personal']->city = $city->name;
			}
			foreach($this->array_yourcv as $k => $v){
				if(!empty($result_your_cv->$v)){
					$push = json_decode($result_your_cv->$v);
					$implode = !empty($push)?implode(',',$push):0;
					$result[$k] = $this->model->fetch('*', PREFIX.$k ,"`status` = 1 AND `uid` = '{$uid}' AND `id` IN ($implode) AND `flag` = 1","created","desc");
				}
			}
		}
		// pr($result,1);
		$data= array(
			'title'         => lang('Your_CVs'),
			'result'        => $result,
			'your_cv_id'    => $result_your_cv->id,
			'level'         => $this->model->fetch('*', LEVEL_JOB_TB, "status = 1","created","asc"),
			'industry'      => $this->model->fetch('*', INDUSTRY_JOB_TB, "status = 1","created","asc"),
			'location'      => $this->model->fetch('*', LOCATION_TB, "status = 1","porder desc, slug","asc"),
			'degree'        => $this->model->fetch('*', DEGREE_TB, "status = 1","created","asc"),
			'countries'     => $this->model->fetch('*', COUNTRIES_TB, "","type","desc"),
			'major'         => $this->model->fetch('*', MAJOR_TB, "status = 1","created","asc"),
			'city'          => $this->model->fetch('*', 'wz_city', "status = 1","created","asc"),
			'language'      => $this->model->fetch('*', LANGUAGE_TB, "status = 1","created","asc"),
			'language_link' => filter_link($this->current_lang,'your_cv',1).'/'.$slug,
		);
		$this->template->write('title', lang('Your_CVs'));
		$this->template->write_view('content','FRONTEND/edit',$data);
		$this->template->render();
	}
	
	function export_excel($id=''){
		$name = $this->name_lang;
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('*', USER_TB, "id = '{$uid}'");
		$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$id}'");
		if(empty($user) || empty($result_your_cv)) {
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = array();
		if(!empty($result_your_cv)){
			$result['personal'] = $this->model->get('*', PERSONAL_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$result_your_cv->personal_id}'","created","asc");
			$city = $this->model->row_data('city',array('crm_id'=>$result['personal']->city,'status'=>1));
			if($city){
				$result['personal']->city = $city->name;
			}
			foreach($this->array_yourcv as $k => $v){
				if(!empty($result_your_cv->$v)){
					$push = json_decode($result_your_cv->$v);
					$implode = !empty($push)?implode(',',$push):0;
					$result[$k] = $this->model->fetch('*', PREFIX.$k ,"`status` = 1 AND `uid` = '{$uid}' AND `id` IN ($implode) AND `flag` = 1","created","asc");
					if(!empty($result[$k])){
						foreach($result[$k] as $value){
							/*if(!empty($value->degree_id)){
								$value->degree = $this->home_model->return_field(DEGREE_TB ,"`status` = 1 AND `id` = '{$value->degree_id}'",$name);
							}
							if(!empty($value->location_id)){
								//$value->location = $this->home_model->return_field(LOCATION_TB ,"`status` = 1 AND `id` = '{$value->location_id}'",'name');
							}
							if(!empty($value->level_id)){
								$value->level = $this->home_model->return_field(LEVEL_JOB_TB ,"`status` = 1 AND `id` = '{$value->level_id}'",$name);
							}*/
						}
					}
				}
			}
		}
		
		$data= array(
			'title'      => lang('Your_CVs'),
			'result'     => $result,
			'your_cv_id' => $result_your_cv->id,
		);
		
		$html_top = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        Zhtml xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
        <body>';
        $html_bot = ' </body></html>';
        $report = $result;
        $filename ='Your_CV_'.date('d.m.Y_H.i.s');
		$html = $this->load->view('FRONTEND/export_excel',$data,true);
        header("Content-type: application/vnd.ms-word");
        header("Content-type: application/x-www-form-urlencoded\r\n" );
        header('Content-Disposition: attachment; filename="'.$filename.'.doc"');
        echo $html_top.$html.$html_bot;
	}
	
	function post_personal(){
		$maxsize    = 20000000;
		$html	= '';
		if($this->input->post() && $this->session->userdata('uid')){
			$uid = $this->session->userdata('uid');
			$id = $this->input->post('id')?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_general_name($arr_error, $error, 'fullname', lang('fullname'));
			$this->model->validate_email($arr_error, $error, 'email', lang('email_2'));
			//$this->model->validate_birthday($arr_error, $error, 'day', 'Bạn chưa nhập ngày sinh', 'day', 'Ngày sinh');
			//$this->model->validate_phone($arr_error, $error, 'home_phone');
            $this->model->validate_phone($arr_error, $error,'mobile', lang('mobile'));
			$this->model->validate_ext($arr_error, $error, 'country', lang('country_work'));
			//$this->model->validate_ext($arr_error, $error, 'city', 'Bạn chưa chọn thành phố');
			if(empty($error)){	
				$day = (int)mysql_real_escape_string($this->input->post('day'));
				$month = (int)mysql_real_escape_string($this->input->post('month'));
				$year = (int)mysql_real_escape_string($this->input->post('year'));
				$database = array(
					'uid'             => $this->session->userdata('uid'),
					'fullname'        => htmlspecialchars(strip_tags($this->input->post('fullname'))),
					'email'           => htmlspecialchars(strip_tags($this->input->post('email'))),
					'gender'          => (filter_input_xss($this->input->post('gender'),1)),
					'marital'         => (filter_input_xss($this->input->post('marital'),1)),
					'birthday'        => date('Y-m-d',strtotime($day.'-'.$month.'-'.$year)),
					'address'         => htmlspecialchars(strip_tags($this->input->post('address'))),
					'home_phone'      => filter_input_xss($this->input->post('home_phone'),1),
					'mobile'          => filter_input_xss($this->input->post('mobile'),1),
					'country'      => filter_input_xss($this->input->post('country'),1),
					'province'     => filter_input_xss($this->input->post('province'),1),
					'city'            => filter_input_xss($this->input->post('city'),1),
					'computer_skill'  => filter_input_xss($this->input->post('computer_skill'),1),
					'other_skill'     => filter_input_xss($this->input->post('other_skill'),1),
					'nationlity	'     => filter_input_xss($this->input->post('nationlity'),1),
					'place_of_brith	' => filter_input_xss($this->input->post('place_of_brith'),1),
					'avatar'          => (strip_tags($this->input->post('avatar_img'))),
					'status'          => 1,
				);
				// Validate the file type
				// $fileTypes =  array('jpg','jpeg','gif','png');
				// $fileParts = $_FILES['avatar']['name'] ? pathinfo($_FILES['avatar']['name']) : '';
				// if($fileParts && $_FILES['avatar']){
					
					// if(!in_array($fileParts['extension'],$fileTypes)){
						// $error = 1;
						// $arr_error[]= array(
							// 'field'	=> 'avatar',
							// 'txt'	=> 'File upload không hợp lệ'
						// );
						// $txt = 'File upload không hợp lệ';
					// }else if(($_FILES['avatar']['size'] >= $maxsize)) {
						// $error = 1;
						// $arr_error[]= array(
							// 'field'	=> 'avatar',
							// 'txt'	=> 'File upload kích thước phải < 1MB'
						// );
						// $txt = 'File upload kích thước phải < 1MB';
					// }else{
						// $img= Upload($_FILES['avatar'], DIR_UPLOAD_TMP);
						// $upload_folder_now = getFolderNowFile(getFolderNow().$img);
						// newFolder(DIR_UPLOAD_TMP.$upload_folder_now);
						// $database['avatar'] = getFolderNow().$img;
					// }
				// }				
				$id = $this->model->save($id, $database, PERSONAL_TB);
				$result = $this->model->get('*', PERSONAL_TB ,"`status` = 1 AND `id` = '{$id}'");

				if(!empty($result)){
					if($your_cv_id){
						if($this->input->post('avatar_img')){
							$upload_folder_now = getFolderNowFile($result->avatar);
							newFolder(DIR_UPLOAD_AVATAR.$upload_folder_now);
							if(@rename(DIR_UPLOAD_TMP.$result->avatar, DIR_UPLOAD_AVATAR.$result->avatar))
							{
							
								@unlink(DIR_UPLOAD_TMP.$result->avatar);
							}
						}
						$this->push_cv($your_cv_id,$id,false);
					}
					$city = $this->model->row_data('city',array('crm_id'=>$result->city,'status'=>1));
					if($city){
						$result->city = $city->name;
					}
				}
				$data = array(
					'result' => $result,
					'your_cv_id' => $your_cv_id
				);
				$html = $this->load->view('FRONTEND/ajax/personal',$data,true);
				
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'personal_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function post_work_experience(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$html = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_ext($arr_error, $error, 'title', lang('job_title'));
			$this->model->validate_ext($arr_error, $error, 'industry', lang('industry_company'));
			$this->model->validate_ext($arr_error, $error, 'from_work_experience', lang('from'));
			$this->model->validate_ext($arr_error, $error, 'to_work_experience', lang('to'));
			$this->model->validate_date_from_to($arr_error, $error, 'from_work_experience','to_work_experience', lang('from_to'));
			//$this->model->validate_ext($arr_error, $error, 'country_work', lang('country_work'));
			//$this->model->validate_ext($arr_error, $error, 'city_work', 'Bạn chưa chọn thành phố');
			$this->model->validate_ext($arr_error, $error, 'description', lang('validate_description'));
			if(empty($error)){
				$from_work_experience = str_totime($this->input->post('from_work_experience'));
				$to_work_experience = str_totime($this->input->post('to_work_experience'));
				$database = array(
					'uid' 				=> $this->session->userdata('uid'),
					// 'country_id' 		=> filter_input_xss($this->input->post('country_work'),1),
					// 'city_id' 			=> filter_input_xss($this->input->post('city_work'),1),
					'title' 			=> htmlspecialchars(strip_tags($this->input->post('title'))),
					'company' 			=> htmlspecialchars(strip_tags($this->input->post('company'))),
					'industry' 			=> htmlspecialchars(strip_tags($this->input->post('industry'))),
					'from' 				=> date('Y-m-d',$from_work_experience),
					'to' 				=> date('Y-m-d',$to_work_experience),
					//'salary' 			=> htmlspecialchars(strip_tags($this->input->post('salary'))),
					'description' 		=> htmlspecialchars(strip_tags($this->input->post('description'))),
					'status' 			=> 1,
					'flag' 				=> !empty($your_cv_id)?1:0
				);
				$id = $this->model->save($id,$database,WORK_EXPERIENCE_TB);
				$result = $this->model->get('*', WORK_EXPERIENCE_TB ,"`status` = 1 AND `id` = '{$id}'");
				$data = array(
					'result' 	=> $result,
					'cv'		=> !empty($your_cv_id)?$your_cv_id:0
				);
				$html = $this->load->view('FRONTEND/ajax/work_experience',$data,true);
				if(!empty($your_cv_id)){
					$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$your_cv_id}'");
					if(!empty($result_your_cv->work_experience_id)){
						$push = json_decode($result_your_cv->work_experience_id);
						if(!in_array($id,$push)){
							$push[] =  (string)$id;
						}
					}else{
						$push[] =  (string)$id;
					}
					$data_cv['work_experience_id'] = !empty($push)? json_encode($push):0;
					$this->db->update(YOUR_CV_TB,$data_cv, "id = $your_cv_id");
					$this->push_experience($result_your_cv,$id);
				}
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'work_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function post_education(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$html = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_ext($arr_error, $error, 'education_type', lang('school_program'));
			$this->model->validate_ext($arr_error, $error, 'education_name', lang('school_program_name'));
			$this->model->validate_ext($arr_error, $error, 'major', lang('major'));
			$this->model->validate_ext($arr_error, $error, 'from_education', lang('from'));
			$this->model->validate_ext($arr_error, $error, 'to_education', lang('to'));
			$this->model->validate_date_from_to($arr_error, $error, 'from_education','to_education', lang('from_to'));

			if(empty($error)){
				$from_education = str_totime($this->input->post('from_education'));
				$to_education = str_totime($this->input->post('to_education'));
				$database = array(
					'uid' 				=> $this->session->userdata('uid'),
					'degree_id' 		=> filter_input_xss($this->input->post('degree'),1),
					// 'location_id' 		=> filter_input_xss($this->input->post('location'),1),
					'education_type' 	=> htmlspecialchars(strip_tags($this->input->post('education_type'))),
					'education_name' 	=> htmlspecialchars(strip_tags($this->input->post('education_name'))),
					'major' 			=> htmlspecialchars(strip_tags($this->input->post('major'))),
					'from' 				=> date('Y-m-d',$from_education),
					'to' 				=> date('Y-m-d',$to_education),
					'achievement' 		=> htmlspecialchars(strip_tags($this->input->post('achievement'))),
					'status' 			=> 1,
					'flag' 				=> !empty($your_cv_id)?1:0
				);
				$id = $this->model->save($id,$database,EDUCATION_TB);
				$result = $this->model->get('*', EDUCATION_TB ,"`status` = 1 AND `id` = '{$id}'");
				
				$data = array(
					'result' 	=> $result,
					'cv'		=> !empty($your_cv_id)?$your_cv_id:0
				);
				$html = $this->load->view('FRONTEND/ajax/education',$data,true);
				if(!empty($your_cv_id)){
					$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$your_cv_id}'");
					if(!empty($result_your_cv->education_id)){
						$push = json_decode($result_your_cv->education_id);
						if(!in_array($id,$push)){
							$push[] =  (string)$id;
						}
					}else{
						$push[] =  (string)$id;
					}
					$data_cv['education_id'] = !empty($push)? json_encode($push):0;
					$this->db->update(YOUR_CV_TB,$data_cv, "id = $your_cv_id");
					$this->push_education($result_your_cv,$id);
				}
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'education_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function post_reference(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$html = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_email_md($arr_error, $error, $this->input->post('email_reference'), 0, REFERENCE_TB, 'email_reference');
			$this->model->validate_phone($arr_error, $error, 'phone_reference');
			if(empty($error)){
				$database = array(
					'uid' 				=> $this->session->userdata('uid'),
					'name' 				=> htmlspecialchars(strip_tags($this->input->post('name'))),
					'company' 			=> htmlspecialchars(strip_tags($this->input->post('company_reference'))),
					'title' 			=> htmlspecialchars(strip_tags($this->input->post('title'))),
					'relationship' 		=> htmlspecialchars(strip_tags($this->input->post('relationship'))),
					'email' 			=> htmlspecialchars(strip_tags($this->input->post('email_reference'))),
					'phone' 			=> filter_input_xss($this->input->post('phone_reference'),1),
					'status' 			=> 1,
					'flag' 				=> !empty($your_cv_id)?1:0
				);
				$id = $this->model->save($id,$database,REFERENCE_TB);
				$result = $this->model->get('*', REFERENCE_TB ,"`status` = 1 AND `id` = '{$id}'");
				$data = array(
					'result' 	=> $result,
					'cv'		=> !empty($your_cv_id)?$your_cv_id:0
				);
				$html = $this->load->view('FRONTEND/ajax/reference',$data,true);
				if(!empty($your_cv_id)){
					$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$your_cv_id}'");
					if(!empty($result_your_cv->reference_id)){
						$push = json_decode($result_your_cv->reference_id);
						if(!in_array($id,$push)){
							$push[] =  (string)$id;
						}
					}else{
						$push[] =  (string)$id;
					}
					$data_cv['reference_id'] = !empty($push)? json_encode($push):0;
					$this->db->update(YOUR_CV_TB,$data_cv, "id = $your_cv_id");
					$this->push_reference($result_your_cv,$id);
				}
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'reference_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}


	function post_courses(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$html = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_ext($arr_error, $error, 'name', lang('courses_required'));

			if(empty($error)){
				$database = array(
					'uid'              => $this->session->userdata('uid'),
					'name'             => htmlspecialchars(strip_tags($this->input->post('name'))),
					'training_company' => htmlspecialchars(strip_tags($this->input->post('training_company'))),
					'time_duration'    => htmlspecialchars(strip_tags($this->input->post('time_duration'))),
					'status'           => 1,
					'flag'             => !empty($your_cv_id)?1:0
				);
				$id = $this->model->save($id,$database,COURSES_TB);
				$result = $this->model->get('*', COURSES_TB ,"`status` = 1 AND `id` = '{$id}'");
				$data = array(
					'result' 	=> $result,
					'cv'		=> !empty($your_cv_id)?$your_cv_id:0
				);
				$html = $this->load->view('FRONTEND/ajax/courses',$data,true);
				if(!empty($your_cv_id)){
					$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$your_cv_id}'");
					if(!empty($result_your_cv->courses_id)){
						$push = json_decode($result_your_cv->courses_id);
						if(!in_array($id,$push)){
							$push[] =  (string)$id;
						}
					}else{
						$push[] =  (string)$id;
					}
					$data_cv['courses_id'] = !empty($push)? json_encode($push):0;
					$this->db->update(YOUR_CV_TB,$data_cv, "id = $your_cv_id");
					$this->push_courses($result_your_cv,$id);
				}
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'courses_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function post_skill_language(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$html = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$your_cv_id = is_numeric($this->input->post('your_cv_id'))?(int)mysql_real_escape_string($this->input->post('your_cv_id')):0;
			$error= false;$arr_error= array();$txt= '';
			//$this->model->validate_ext($arr_error, $error, 'category', lang('skill_language'));
			$this->model->validate_ext($arr_error, $error, 'level', lang('valid_level'));
			if(empty($error)){
				$database = array(
					'uid'          => $this->session->userdata('uid'),
					'name'         => filter_input_xss($this->input->post('name'),1),
					'level'        => filter_input_xss($this->input->post('level'),1),
					'specify_name' => htmlspecialchars(strip_tags($this->input->post('specify_name'))),
					'status'       => 1,
					'flag'         => !empty($your_cv_id)?1:0
				);
				$id = $this->model->save($id,$database,SKILL_LANGUAGE_TB);
				$result = $this->model->get('*', SKILL_LANGUAGE_TB ,"`status` = 1 AND `id` = '{$id}'");
				
				$data = array(
					'result' 	=> $result,
					'cv'		=> !empty($your_cv_id)?$your_cv_id:0
				);
				$html = $this->load->view('FRONTEND/ajax/skill_language',$data,true);
				if(!empty($your_cv_id)){
					$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$your_cv_id}'");
					if(!empty($result_your_cv->skill_language_id)){
						$push = json_decode($result_your_cv->skill_language_id);
						if(!in_array($id,$push)){
							$push[] =  (string)$id;
						}
					}else{
						$push[] =  (string)$id;
					}
					$data_cv['skill_language_id'] = !empty($push)? json_encode($push):0;
					$this->db->update(YOUR_CV_TB,$data_cv, "id = $your_cv_id");
					$this->push_skill_language($result_your_cv,$id);
				}
			}
			$json= array(
				'status'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'			=> $arr_error,
				'msg'			=> 'skill_language_msg',
				'id'			=> $id,
				'your_cv_id'	=> $your_cv_id,
				'html'			=> $html,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function save_cv(){
		$status = FALSE;
		$array = array();
		$txt = lang('txt_save_cv_fail');

		$uid = $this->session->userdata('uid');
		if($this->input->post() && $this->session->userdata('uid')){
			$result = is_array($this->input->post('result'))?$this->input->post('result'):'';
			//pr($result,1);
			$action = $this->input->post('action')?filter_input_xss($this->input->post('action')):'';
			if(!empty($result)){
				foreach($result as $r){
					$val = explode('-',$r);
					switch($val[0]){
						case 'personal':
							$array['personal'] = $val[1];
							break;
						case 'work_experience':
							$array['work_experience'][] = $val[1];
							break;
						case 'education':
							$array['education'][] = $val[1];
							break;
						case 'skill_language':
							$array['skill_language'][] = $val[1];
							break;
						case 'reference':
							$array['reference'][] = $val[1];
							break;
						case 'courses':
							$array['courses'][] = $val[1];
							break;
					}
				}
				if(!empty($array)){
					$data['uid'] = $this->session->userdata('uid');
					$data['slug_cv'] = md5(date('Y-m-d H:i:s')).random(8);
					foreach($array as $key => $value){
						if(is_array($value)){
							$data[$key.'_id'] = !empty($value)? json_encode($value):0;
							if(!empty($value)){
								foreach($value as $k => $v){
									$data_update['flag'] = 1;
									$this->db->update(PREFIX.$key,$data_update, "id = $v");
								}
							}
						}else{
							$data[$key.'_id'] = !empty($value)? $value:0;
							$data_update['flag'] = 1;
							if($this->db->update(PREFIX.$key,$data_update, "id = $value")){
								$personal = $this->model->get('avatar', PREFIX.$key, "`flag` = 1 AND `id` = $value");
								
								if(!empty($personal->avatar)){
								    $upload_folder_now = getFolderNowFile($personal->avatar);
								    newFolder(DIR_UPLOAD_AVATAR.$upload_folder_now);
									if(@rename(DIR_UPLOAD_TMP.$personal->avatar, DIR_UPLOAD_AVATAR.$personal->avatar))
									{
										@unlink(DIR_UPLOAD_TMP.$personal->avatar);
									}
								}
							}
						}
					}
					$data['status'] = 1;
					$data['changed'] = NOW;
					$data['created'] = NOW;
					if($this->db->insert(YOUR_CV_TB,$data)){
						$id = $this->db->insert_id();
						

						if($action){
							$explode = explode('-',$action);
							$exp = !empty($explode[1])?$explode[1]:'';
							$get_job = $this->model->get('id', JOBS_TB, "`status` = 1 AND `ids` = '{$exp}'");
							if(!empty($get_job)){
								$data_apply_job = array(
									'uid' 		=> $uid,
									'cv_id' 	=> $id,
									'job_id' 	=> $get_job->id,
									'status' 	=> 1,
									'type' 		=> 'apply',
									'changed' 	=> NOW,
									'created' 	=> NOW
								);
								$this->db->insert(SAVE_JOB_TB,$data_apply_job);
							}
							
						}
						// push to crm
						$this->push_cv($id);

						$status = TRUE;
						$txt = lang('txt_save_cv_success');
					}
				}
			}
			echo json_encode(array(
				'status' => $status,
				'txt' => $txt
			));
		}
	}
	
	function delete_type_cv(){
		$key = '';
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$status = false;
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$cv = is_numeric($this->input->post('cv'))?(int)mysql_real_escape_string($this->input->post('cv')):0;
			$table = mysql_real_escape_string($this->input->post('type'));
			$table = ($table == 'skill' || $table == 'language' ||  $table == 'computer')?'skill_language':$table;
			if($id && $table){
				$result = $this->model->get('*', PREFIX.$table ,"`status` = 1 AND `id` = '{$id}'");
				$result_your_cv = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` ='{$cv}'");
				if($result_your_cv){
					if($table == 'work_experience'){
						$this->push_experience($result_your_cv,$id,1);
					}
					if($table == 'education'){
						$this->push_education($result_your_cv,$id,1);
					}
					if($table == 'courses'){
						$this->push_courses($result_your_cv,$id,1);
					}
					if($table == 'skill_language'){
						$this->push_skill_language($result_your_cv,$id,1);
					}
					if($table == 'reference'){
						$this->push_reference($result_your_cv,$id,1);
					}
				}
				if(!empty($result)){
					if($this->db->delete(PREFIX.$table,"id = '{$result->id}'")){
						$status = true;
						$id_type = $table.'_id';
						if(!empty($cv)){
							if(!empty($result_your_cv->$id_type)){
								$push = json_decode($result_your_cv->$id_type);
								if(!empty($push)){	
									foreach($push as $k => $p){
										if($p == $id){
											$key = $k;
										}
									}
								}
								if(is_numeric($key)){
									unset($push[$key]);
								}
								$push = array_values($push);
								$data_cv[$id_type] = !empty($push)? json_encode($push):0;
								$this->db->update(YOUR_CV_TB,$data_cv, "id = $cv");
							}
						}
					}
				}
			}
			$json= array(
				'status'	=> $status,
			);
			echo json_encode($json);
		}
	}
	
	function move_Img($images='',$tmp_img_id='',$status=''){
		$upload_folder_now= getFolderNowFile($images);
		newFolder(DIR_UPLOAD_STEPS.$upload_folder_now);	
		if($status){
			rename(DIR_UPLOAD_TMP.$images, DIR_UPLOAD_STEPS.$images);
		}else{
			@rename(DIR_UPLOAD_TMP.$images, DIR_UPLOAD_STEPS.$images);
		}
		// $result= $this->get('*', PREFIX.'file_tmp', "id = '{$tmp_img_id}'");
		// @unlink(DIR_UPLOAD_TMP.$images);
		// if(!empty($result)){
			// $this->db->where("id",$result->id);
			// $this->db->delete(PREFIX.'file_tmp');
		// }
	}
	
	function save_jobs(){
		$status = FALSE;
		$txt = '';
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $this->session->userdata('uid')){
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$ycv = is_numeric($this->input->post('ycv'))?(int)mysql_real_escape_string($this->input->post('ycv')):0;
			$cv_upload= (int)$this->input->post('upload');
			
			$type = $this->input->post('type')?trim(mysql_real_escape_string($this->input->post('type'))):'';
			if($type == 'save'){
				$txt = $this->current_lang == 'vi' ? "Bạn đã lưu công việc thất bại. Xin thử lại" : "You have failed to save the job. Please try again";
			}else{
				$txt = $this->current_lang == 'vi' ? "Bạn đã nộp đơn công việc thất bại. Xin thử lại" : "You've failed job applicant. Please try again";
			}
			if(in_array($type,array('apply','save'))){
				$result = $this->model->get('id', SAVE_JOB_TB, "`status` = 1 AND `uid` = $uid AND `job_id` = $id AND `type` = '{$type}'");
				if(empty($result)){
					$data = array(
						'uid' 		=> $uid,
						'job_id' 	=> $id,
						'cv_id' 	=> $ycv,
						'status' 	=> 1,
						'type' 		=> $type,
						'upload'	=> $cv_upload,
						'changed' 	=> NOW,
						'created' 	=> NOW
					);
					if($this->db->insert(SAVE_JOB_TB,$data)){
						$save_job_id= $this->db->insert_id();
						$status = 1;
						if($type == 'save'){
							$txt = $this->current_lang == 'vi' ? "Bạn đã lưu công việc thành công" : "You have successfully saved jobs";
						}else{
							$txt = $this->current_lang == 'vi' ? "Bạn đã nộp đơn công việc thành công" : "You have successfully applying job";
						}
						$this->model->pushApplyToJob($id, $ycv, $save_job_id, $cv_upload);
					}
				}else{
					$status = 2;
					if($type == 'save'){
						$txt = $this->current_lang == 'vi' ? "Công việc này bạn đã lưu rồi. Hãy chọn công việc khác" : "The work you've saved already. Please choose another job";
					}else{
						$txt = $this->current_lang == 'vi' ? "Công việc này bạn đã nộp đơn rồi. Hãy chọn công việc khác" : "The work you have already filed. Please choose another job";
					}
				}
			}
			$json= array(
				'status'	=> $status,
				'txt'		=> $txt,
			);
			echo json_encode($json);
		}
	}
	
	function delete_jobs(){
		$uid = $this->session->userdata('uid');
		if($this->input->post() && $uid){
			$status = false;
			$id = $this->input->post('id')?(int)mysql_real_escape_string($this->input->post('id')):0;
			$type = $this->input->post('type')?mysql_real_escape_string($this->input->post('type')):'';
			if(in_array($type,array('your_cv','save_job','apply_job','job_alert','cv_upload'))){
				if( $type == 'save_job' || $type == 'apply_job'){
					$j_type = $type == 'save_job' ? 'save' : 'apply';
					$result = $this->model->get('*', SAVE_JOB_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$id}' AND `type` = '{$j_type}'");
					if(!empty($result)){
						if($this->db->delete(SAVE_JOB_TB,"id = '{$result->id}'")){
							@unlink(DIR_UPLOAD_CV.$result->file);
							$status = true;
						}
					}
				}else if($type == 'job_alert'){
					$result = $this->model->get('*', JOB_ALERT_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$id}'");
					if(!empty($result)){
						if($this->db->delete(JOB_ALERT_TB,"id = '{$result->id}'")){
							$status = true;
						}
					}
				}else if($type == 'cv_upload'){
					$result = $this->model->get('*', UPLOAD_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$id}'");
					if(!empty($result)){
						soapclient_document($result,1);
						if($this->db->delete(UPLOAD_CV_TB,"id = '{$result->id}'")){
							$status = true;
						}
					}
				}else{
					$result = $this->model->get('*', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$id}'");
					if(!empty($result)){
						$this->push_cv($result->id,'',true,1);
						if($this->db->delete(YOUR_CV_TB,"id = '{$result->id}'")){
							$this->db->delete(PERSONAL_TB,"id = '{$result->personal_id}'");
							$this->db->delete(SAVE_JOB_TB,"cv_id = '{$result->id}'");
							foreach($this->array_yourcv as $k => $v){
								if(!empty($result->$v)){
									$push = json_decode($result->$v);
									if(!empty($push)){
										foreach($push as $p){
											$this->db->delete(PREFIX.$k,"id = '{$p}'");
										}
									}
								}
							}
							$status = true;
						}
					}
				}
			}
			$json= array(
				'status'	=> $status,
				'id'		=> $id
			);
			echo json_encode($json);
		}
	}
	
	function job_alert(){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = $this->model->fetch('*', JOB_ALERT_TB, "`status` = 1 AND `uid` ='{$uid}'");
		if(!empty($result)){
			foreach($result as $r){
				$r->industry = $this->model->get('name_en,name_vi', INDUSTRY_JOB_TB ,"`status` = 1 AND `id` = '{$r->industry_id}'");
				$r->location = $this->model->get('name', LOCATION_TB ,"`status` = 1 AND `id` = '{$r->location_id}'");
			}
		}
		$data = array(
			'title' 			=> lang('job_alert'),
			'type' 				=> 'job_alert',
			'result' 			=> $result,
			'language_link' 	=> filter_link($this->current_lang,'job_alert',1),
		);
		$this->template->write('title', lang('job_alert'));
		$this->template->write_view('content', 'FRONTEND/list_job_alert',$data);
		$this->template->render();
	}
	
	function submit_job_alert($param=''){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$get_param = explode('+',$param);
		$get = array(
			'function_job' 		=> (!empty($get_param[1])?$get_param[1]!='all'?filter_input_xss($get_param[1],1):'':''),
			'industry_job' 		=> (!empty($get_param[2])?$get_param[2]!='all'?filter_input_xss($get_param[2],1):'':''),
			'level_job' 		=> (!empty($get_param[3])?$get_param[3]!='all'?filter_input_xss($get_param[3],1):'':''),
			'location' 			=> (!empty($get_param[4])?$get_param[4]!='all'?filter_input_xss($get_param[4],1):'':'')
		);
		$keyword = (!empty($get_param[0])?($get_param[0]=='all-jobs' || $get_param[0]=='tat-ca-viec-lam')?'':filter_input_xss(urldecode($get_param[0])):'');
		$salary_min = (!empty($get_param[5])?is_numeric($get_param[5])?intval($get_param[5]):0:'');
		$salary_max = (!empty($get_param[6])?is_numeric($get_param[6])?intval($get_param[6]):0:'');
		$paramater = $this->jobs_model->filter_category_job($this->current_lang, $get);
		$paramater['keyword'] = $keyword;
		$paramater['salary_min'] = $salary_min;
		$paramater['salary_max'] = $salary_max;
		//$result_jobs = $this->home_model->match_jobs($uid);
		$data = array(
			'title' 			=> lang('job_alert'),
			'paramater' 		=> $paramater,
			'function_job' 		=> $this->model->fetch('id,name,slug', FUNCTION_JOB_TB ,"`status` = 1"),
			'industry_job' 		=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', INDUSTRY_JOB_TB ,"`status` = 1"),
			'level_job' 		=> $this->model->fetch('id,name,slug', LEVEL_JOB_TB ,"`status` = 1"),
			'location' 			=> $this->model->fetch('id,name,slug', LOCATION_TB ,"`status` = 1", "porder DESC, slug", "ASC"),
			'language_link' 	=> filter_link($this->current_lang,'submit_job_alert',1),
		);
		$this->template->write('title', lang('job_alert'));
		$this->template->write_view('content', 'FRONTEND/job_alert',$data);
		$this->template->render();
	}
	
	function save_job_alert(){
		if($this->input->post() && $this->session->userdata('uid')){
			$id = $this->input->post('id')?(int)mysql_real_escape_string($this->input->post('id')):0;
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_general_name($arr_error, $error, 'job_title', 'Job Title, Position');
			// $this->model->validate_ext($arr_error, $error, 'function', 'Bạn chưa chọn All Functions');
			// $this->model->validate_ext($arr_error, $error, 'industry', 'Bạn chưa chọn All Industries');
			// $this->model->validate_ext($arr_error, $error, 'level', 'Bạn chưa chọn All Level');
			// $this->model->validate_ext($arr_error, $error, 'location', 'Bạn chưa chọn All Location');
			// $this->model->validate_number($arr_error, $error, 'salary_min', 'Bạn chưa nhập Minimun Monthly Salary');
			// $this->model->validate_number($arr_error, $error, 'salary_max', 'Bạn chưa chọn Maximum Monthly Salary');
			$this->model->validate_email_md($arr_error, $error, $this->input->post('email'));
			$this->model->validate_ext($arr_error, $error, 'every', lang('all_every'));
			if(!$id){
				$this->model->validate_Captcha($arr_error, $error);
			}
			if(empty($error)){
				$this->model->save_job_alert($id);
			}
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'id'			=> $id,
				'txt'			=> $txt
			);
			echo json_encode($json);
		}
	}
	
	function edit_job_alert($slug =''){
		$slug = filter_input_xss($slug,1);
		$uid = $this->session->userdata('uid');
		$result = $this->model->get('*', JOB_ALERT_TB, "`status` = 1 AND `uid` ='{$uid}' AND `slug` ='{$slug}'");
		if(!$uid || empty($result)){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$data = array(
			'title' 			=> lang('job_alert'),
			'result'			=> $result,
			'function_job' 		=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', FUNCTION_JOB_TB ,"`status` = 1"),
			'industry_job' 		=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', INDUSTRY_JOB_TB ,"`status` = 1"),
			'level_job' 		=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', LEVEL_JOB_TB ,"`status` = 1"),
			'location' 			=> $this->model->fetch('id,name,slug', LOCATION_TB ,"`status` = 1", "porder DESC, slug", "ASC"),
			'language_link' 	=> filter_link($this->current_lang,'edit_job_alert',1),
		);
		$this->template->write('title', lang('job_alert'));
		$this->template->write_view('content', 'FRONTEND/edit_job_alert',$data);
		$this->template->render();
	}
	function new_job_matched(){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = $this->home_model->match_jobs($uid,$this->current_lang);
		$data = array(
			'title' 			=> lang('New_job_matched'),
			'result' 			=> $result,
			'language_link' 	=> filter_link($this->current_lang,'new_job_matched',1),
		);
		$this->template->write('title', lang('New_job_matched'));
		$this->template->write_view('content', 'FRONTEND/new_job_matched',$data);
		$this->template->render();
	}
	
	function download_now(){
		$uid = $this->session->userdata('uid');
		if($uid){
			$status = false;
			$txt = '';
			$id = is_numeric($this->input->post('id'))?(int)mysql_real_escape_string($this->input->post('id')):0;
			$result = $this->model->get('id', MY_DOWNLOAD_TB ,"`id` = $id AND `uid` = $uid");
			if(empty($result)){
				$data = array(
					'uid' 		=> $this->session->userdata('uid'),
					'nid' 		=> $id,
					'changed' 	=> NOW,
					'created' 	=> NOW
				);
				if($this->db->insert(MY_DOWNLOAD_TB,$data)){
					$status = true;
				}
			}else{
				$txt = 'File download phần tin tức này bạn đã tải rồi';
			}
			echo json_encode(array('status' => $status, 'txt' => $txt));
		}
	}
	
	function my_download(){
		$uid = $this->session->userdata('uid');
		if(!$uid){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$result = $this->model->join_my_download($uid);
		$data = array(
			'title' 			=> lang('my_download'),
			'result' 			=> $result,
			'language_link' 	=> filter_link($this->current_lang,'my_download',1),
		);
		$this->template->write('title', lang('my_download'));
		$this->template->write_view('content', 'FRONTEND/my_download',$data);
		$this->template->render();
	}

	
	function load_city(){
		$html ='';
		$id = $this->input->post('id')?filter_input_xss($this->input->post('id')):'';
		$result = $this->model->fetch('*', LOCATION_TB, "status = 1","porder desc, slug","asc");
		if(!empty($result) && $this->input->post('val') == 'Vietnamese'){
			$html = '<select name="'.$id.'" id="'.$id.'" class="input field_data val js-select" data-validate="required">';
			$html .='<option value="">'.lang('Choose_provice').'</option>';
			foreach($result as $r){
				$html .='<option  value="'.$r->name.'">'.$r->name.'</option>';
			}
			$html .= '	</select>';
		}
		echo $html;
	}
	
	function load_level(){
		$html ='';
		$type = $this->input->post('type')?filter_input_xss($this->input->post('type')):'';
		//if(in_array($type,array(1,2))){
		$html = '<select name="level" id="level" class="input field_data val js-select level">';
		$html .='<option value="">'.lang('Choose_Level').'</option>';
		/*if($type == 1){
			global $LEVEL_SKILL;
			if(!empty($LEVEL_SKILL)){
				foreach($LEVEL_SKILL as $k_skill => $v_skill){
					$html .='<option value="'.$k_skill.'">'.$v_skill.'</option>';
				}
			}
		}else{
			global $LEVEL_LANGUAGE;
			if(!empty($LEVEL_LANGUAGE)){
				foreach($LEVEL_LANGUAGE as $k_level => $v_level){
					$html .='<option value="'.$k_level.'">'.$v_level.'</option>';
				}
			}
		}*/
		global $LEVEL_LANGUAGE;
			if(!empty($LEVEL_LANGUAGE)){
				foreach($LEVEL_LANGUAGE as $k_level => $v_level){
					$html .='<option value="'.$v_level.'">'.$v_level.'</option>';
				}
			}
		$html .= '	</select>';
		//}
		echo $html;
	}
	

	function load_type_language(){
		$data['countries']  = $this->model->fetch('*', COUNTRIES_TB, "","type","desc");
		$data['is_laguage'] = filter_input_xss($this->input->post('is_language'));
		$data['selected']   = filter_input_xss($this->input->post('selected'));
		$this->load->view('FRONTEND/ajax/load_location',$data);
	}
	//Trường
	function upload_cv(){
		$user_id = $this->session->userdata('uid');
		if(!$user_id){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}

		$check = $this->model->get('*', UPLOAD_CV_TB ,"`status` = 1 AND `uid` = '{$user_id}' AND created != ''");
		if($check){
			redirect(base_url());
            exit();
		}
        $USER = $this->model->get('*',USER_TB,array('id'=>$user_id));
        $data = array();
        if(!empty($USER)) $data['user'] = $USER;
        $data['language_link'] = 'upload_cv';
        $this->template->write('title', 'Upload CV');
		$this->template->write_view('content', 'FRONTEND/upload_cv',$data);
		$this->template->render();
    }
    function ajax_upload_cv(){
        //pr($this->session->userdata('captcha'),1);
        $uid = $this->session->userdata('uid');

		$check = $this->model->get('*', UPLOAD_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND created != ''");
		if($check){
			$result['st'] = 'FALSE';
            $result['alert'] = lang('once_upload');
            echo json_encode($result);  
            exit();
		}

        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $uploaded_id = $this->input->post('uploaded_id');
        $captcha = $this->input->post('captcha');
        if($fullname!='' && $email!='' && $phone!=''){
            if(strtolower($captcha)== strtolower($this->session->userdata('captcha'))){
                $data_update = array(
					'fullname'=>$fullname,
					'email'=>$email,
					'phone'=>$phone,
					'created'=>NOW,
					'changed'=>NOW,
				);
                
                
				$upload_cv= $this->model->get('*', UPLOAD_CV_TB, "id = '{$uploaded_id}'");
				
				if(!empty($upload_cv))
				{
					$result_crm= soapclient_document($upload_cv);
					if(!empty($result_crm))
					{
						$data_update['candidate_id']= $result_crm['id'];
					}
				}
				
				$this->db->update(UPLOAD_CV_TB,$data_update,array('id'=>$uploaded_id));
				$this->db->delete(UPLOAD_CV_TB,array('uid'=>$uid,'created'=>NULL));
                $result['st'] = 'TRUE';
                $result['alert'] = '';
            }
            else{
                $result['st'] = 'FALSE';
                $result['alert'] = lang('confirmation_code_incorrect');
            }
        }
        else{
            $result['st']='FALSE';
            $result['alert'] = lang('not_entered_fully');
        } 
        echo json_encode($result);    
    }
    function ajax_upload_file_cv(){
		$config['upload_folder_now']= getFolderNow();
		$config['upload_path'] = DIR_UPLOAD_CV . $config['upload_folder_now'];
		$config['allowed_types'] = 'doc|docx|pdf';
		$config['max_size']	= MAXSIZE_UPLOAD;//MB
		$this->load->library('FUpload', $config);
		$file_info= $this->fupload->do_upload($_FILES['file']);
		if($file_info->st=='SUCCESS')
		{
			//INSERT TABLE FILE TMP
			$data['file']= $file_info->file_path;
			$data['uid']= $this->session->userdata('uid');
            $this->db->insert(UPLOAD_CV_TB,$data);
            $id = $this->db->insert_id();
            $result['status']= "true";
            $result['id'] = $id;
            echo json_encode($result);
		}      
    }
	
	function upload_avatar(){
		//$uid = mysql_real_escape_string($this->input->post('uid'));
		//$maxsize    = 1007152;
		$maxsize    = 2000000;
		if(isset($_FILES['avatar'])){
			$fileTypes =  array('jpg','jpeg','gif','png');
			$fileParts = $_FILES['avatar']['name'] ? pathinfo($_FILES['avatar']['name']) : '';
			if($fileParts && $_FILES['avatar']){
				
				if(!in_array($fileParts['extension'],$fileTypes)){
					$arr_error[]= array(
						'st'	=> 'FAIL',
						'txt'	=> 'File upload không hợp lệ'
					);
				}else if(($_FILES['avatar']['size'] >= $maxsize)) {
					$json= array(
						'st'	=> 'FAIL',
						'txt'	=> 'File upload kích thước phải < 2MB'
					);
				}else{
					$img= Upload($_FILES['avatar'], DIR_UPLOAD_TMP);
					$upload_folder_now = getFolderNowFile(getFolderNow().$img);
					newFolder(DIR_UPLOAD_TMP.$upload_folder_now);
					$json= array(
						'st'		=> 'SUCCESS',
						'txt'		=> 'Cập nhật avatar thành công.',
						'file'		=> getFolderNow().$img
					);
				}
			}
			print_r(json_encode($json));
		}

	}


	function push_cv($cv_id,$id='',$call=true,$deleted = 0){
		$cv = $this->model->get('*',YOUR_CV_TB,"id = $cv_id");

		if($cv){
			$personal = $this->model->get('*',PERSONAL_TB,"id = $cv->personal_id");
			// post 
			if($personal){
				$data = array(
					array('name'=>'id','value'=> $cv->crm_id), 
					array('name'=>'last_name','value'=> $personal->fullname), //có
					array('name'=>'phone_home','value'=>$personal->home_phone),
					array('name'=>'email1','value'=>$personal->email ),
				    array('name'=>'dob_day','value'=>date('d',strtotime($personal->birthday)) ),  // Ngày sinh có
					array('name'=>'dob_month','value'=>date('m',strtotime($personal->birthday)) ), // Tháng có 
					array('name'=>'dob_year','value'=>date('Y',strtotime($personal->birthday)) ), //Năm sinh. Ex: 1980 có
					array('name'=>'department','value'=>$personal->place_of_brith ),	//Place of Birth + vào web nơi sinh
					array('name'=>'nationality','value'=>$personal->nationlity ), // Vietnamese có 
				    array('name'=>'sex','value'=>$personal->gender ),               // male, female  Gender
					array('name'=>'marital_status','value'=>$personal->marital ),   // Marital Status.Ex: Single,Married.. 
				    array('name'=>'office_region','value'=>$personal->province ), //Office by Region. Ex:HCMC Office
				    array('name'=>'susa_city_candidates_1susa_city_ida','value'=>$personal->city ), //Office by Region. Ex:HCMC Office
					array('name'=>'phone_other','value'=>$personal->mobile), //Mobile home phone
					array('name'=>'primary_address_street','value'=>$personal->address),
				    array('name'=>'primary_address_state','value'=>$personal->province ), //Province 
					array('name'=>'primary_address_country','value'=>$personal->country ),//Country
					array('name'=>'computer_skills','value'=>$personal->computer_skill ),//Free text
					array('name'=>'other_skills','value'=>$personal->other_skill ),  //Free text
					array('name'=>'product_image','value'=>random(11111,9999999)), //Tên file photo. Vd: Hinh.jpg
					array('name'=>'file_url','value'=>'http://gallery.thesemite.com/var/resizes/Nepal-2012/IMG_0848.jpg?m=1342483091'), // Đường dẫn lưu file trên website. Vd: http://abc.com/upload/Hinh.jpg'
					//array('name'=>'file_url','value'=>base_url().DIR_UPLOAD_AVATAR.$personal->avatar ), // Đường dẫn lưu file trên website. Vd: http://abc.com/upload/Hinh.jpg'
   					array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);

				$crm_id = soapclient('Candidates',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(PERSONAL_TB,array('crm_id'=>$crm_id),array('id'=>$personal->id));
				$this->model->update_data(YOUR_CV_TB,array('crm_id'=>$crm_id),array('id'=>$cv_id));
				$cv = $this->model->get('*',YOUR_CV_TB,"id = $cv_id");
				if(!$call){
					return true;
				}
				$this->push_experience($cv,0,$deleted);
				$this->push_education($cv,0,$deleted);
				$this->push_courses($cv,0,$deleted);
				$this->push_skill_language($cv,0,$deleted);
				$this->push_reference($cv,0,$deleted);
			}
		}
		
	}


	function push_experience($cv,$id='',$deleted=0){
		$experience = false;
		if($id > 0){
			$experience = $this->model->fetch('*',WORK_EXPERIENCE_TB,"id = $id");
		}else{
			$work_experience_id = @implode(',', json_decode($cv->work_experience_id));
			if(!empty($work_experience_id)){
				$experience = $this->model->fetch('*',WORK_EXPERIENCE_TB,"id in ($work_experience_id)");
			}
		}

		
		if($experience){
			foreach ($experience as $row) {
				$data = array(
						array('name'=>'id','value'=> $row->crm_id), 
						array('name'=>'name','value'=> $row->title), //Job title
						array('name'=>'parent_id','value'=>$cv->crm_id), // ID của Candidates
						array('name'=>'company','value'=>$row->company),        // Company  name

						array('name'=>'working_from_month','value'=>date('m',strtotime($row->from))),//Period From 
						array('name'=>'working_from_year','value'=>date('Y',strtotime($row->from))), //Period From
						array('name'=>'working_to_month','value'=>date('m',strtotime($row->to))), //Period From
						array('name'=>'working_to_year','value'=>date('Y',strtotime($row->to))), //Period From
						array('name'=>'employment_industry','value'=>$row->industry),//Industry
					    array('name'=>'description','value'=>$row->description),  //Responsibility
   						array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);
				$crm_id = soapclient('Candidates_Experiences',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(WORK_EXPERIENCE_TB,array('crm_id'=>$crm_id),array('id'=>$row->id));
			}
		}
	}

	function push_education($cv,$id=0,$deleted=0){
		$education = false;
		if($id > 0){
			$education = $this->model->fetch('*',EDUCATION_TB,"id = $id");
		}else{
			$education_id = @implode(',', json_decode($cv->education_id));
			if(!empty($education_id)){
				$education = $this->model->fetch('*',EDUCATION_TB,"id in ($education_id)");
			}
		}
		if($education){
			foreach ($education as $row) {
				$data = array(
						array('name' =>'id','value'=> $row->crm_id), 
						array('name' =>'parent_id','value'=>$cv->crm_id), // ID của Candidates
						array('name' =>'educator_type','value'=>$row->education_type),        // Educator type. Ex: University,College...
						array('name' =>'degree','value'       =>$row->degree_id),//Degree. Ex: B.A.
						array('name' =>'name','value'=>$row->education_name), //Name of Educator. Ex: DHKT-HCM
						array('name' =>'major','value'=>$row->major), //Major
						array('name' =>'year_from','value'=>date('Y',strtotime($row->from))),//Start year
						array('name' =>'year_to','value'=>date('Y',strtotime($row->to))),  //Year completed
						array('name' =>'other_educations','value'=>$row->achievement),  //Other Educations
						array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);
				$crm_id = soapclient('Candidates_Educations',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(EDUCATION_TB,array('crm_id'=>$crm_id),array('id'=>$row->id));
			}
		}
	}

	function push_courses($cv,$id='',$deleted=0){
		$courses = false;
		if($id > 0){
			$courses = $this->model->fetch('*',COURSES_TB,"id = $id");
		}else{
			$courses_id = @implode(',', json_decode($cv->courses_id));
			if(!empty($courses_id)){
				$courses = $this->model->fetch('*',COURSES_TB,"id in ($courses_id)");
			}
		}

		if($courses){
			foreach ($courses as $row) {
				$data = array(
						array('name'=>'id','value'=> $row->crm_id), 
						array('name'=>'name','value'     => $row->name), //Course name  Ex: Banking Platform and Product Knowledge Training
						array('name'=>'parent_id','value'=> $cv->crm_id), // ID của Candidates
						array('name'=>'training_company','value'=>$row->training_company),      // Training Company. Ex: Ford Motor Company
					    array('name'=>'time_duration','value'=>$row->time_duration),//Time duration. Ex: B.A.
						array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);
				$crm_id = soapclient('Candidates_Courses',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(COURSES_TB,array('crm_id'=>$crm_id),array('id'=>$row->id));
			}
		}
	}

	function push_skill_language($cv,$id='',$deleted=0){
		$skill_language = false;
		if($id > 0){
			$skill_language = $this->model->fetch('*',SKILL_LANGUAGE_TB,"id = $id");
		}else{
			$skill_language_id = @implode(',', json_decode($cv->skill_language_id));
			if(!empty($skill_language_id)){
				$skill_language = $this->model->fetch('*',SKILL_LANGUAGE_TB,"id in ($skill_language_id)");
			}
		}
		
		if($skill_language){
			foreach ($skill_language as $row) {
				$data = array(
						array('name'=>'id','value'=> $row->crm_id), 
						array('name'=>'parent_id','value'=> $cv->crm_id), // ID của Candidates
						array('name'=>'name','value'     => $row->name), //Free text
						array('name'=>'skill_language','value'=> $row->specify_name), // Ex: English, Vietnamese..
						array('name'=>'skill_level','value'=>$row->level),
						array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);
				$crm_id = soapclient('Candidates_Skills',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(SKILL_LANGUAGE_TB,array('crm_id'=>$crm_id),array('id'=>$row->id));
			}
		}
	}

	function push_reference($cv,$id='',$deleted=0){
		$reference = false;
		if($id > 0){
			$reference = $this->model->fetch('*',REFERENCE_TB,"id = $id");
		}else{
			$reference_id = @implode(',', json_decode($cv->reference_id));
			if(!empty($reference_id)){
				$reference = $this->model->fetch('*',REFERENCE_TB,"id in ($reference_id)");
			}
		}

		if($reference){
			foreach ($reference as $row) {
				$data = array(
						array('name'=>'id','value'=> $row->crm_id),
						array('name'=>'parent_id','value'=> $cv->crm_id), // ID của Candidates
						array('name'=>'name','value'     => $row->name), //Nguyen Van A
						array('name'=>'description','value'=> $row->company), // Company
					    array('name'=>'title','value'=>$row->title),      //  Title
						array('name'=>'relationship','value'=>$row->relationship),      //  Relationship
						array('name'=>'email','value'=>$row->email),  
						array('name'=>'mobile','value'=>$row->phone),  
						array('name'=>'deleted','value'=>$deleted), //  xóa: deleted =1, mặc định là deleted= 0, 
				);
				$crm_id = soapclient('ReferencePerson',$data);
				$crm_id = $crm_id['id'];
				$this->model->update_data(REFERENCE_TB,array('crm_id'=>$crm_id),array('id'=>$row->id));
			}
		}
	}

	function test_api(){
		soapclient('a','1');
	}

}
?>