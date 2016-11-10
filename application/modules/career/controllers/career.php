<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Career extends MX_Controller {
	private $module = 'career';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index(){
		$pageSize= 5;$pageNum= (int)$this->input->get('p');
		if($pageNum<=1) $pageNum = 1;	
		$totalRows= $this->model->list_career(-1,-1);	

		$startRow = ($pageNum - 1) * $pageSize;
		$totalPage= ceil($totalRows/$pageSize);
		// if($pageNum>$totalPage) redirect(PATH_URL);	
		// pr($totalRows);
		// pr($pageSize);
		// pr($pageNum);
		// pr($pageSize);
		$pagination= pagination($totalRows, $pageNum, $pageSize,  3);
		// pr($pagination,1);
		$result= $this->model->list_career($pageSize, $startRow);

	
		$data= array(
			'result'		=> $result,
			'pagination'	=> $pagination,
			'pageNum'	=>	$pageNum,
			'totalRows' 	=> $totalRows,
			'provinces' => $this->model->fetch("*", "wz_province", "status = 1"),
			'categories' => $this->model->fetch("*", "wz_career_category", "status = 1", "order", "ASC"),
			'banner' => $this->model->get("*", "wz_banner", "id = 36 AND status = 1"),
			'getkeyword' => filter_input_xss($this->input->get("keyword"))
		);
		
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/index',$data);
		$this->template->render();	
	
	}
	
	function detail($slug = ''){
		$languageurl = $this->uri->segment(1);
		$slugwhere = 'slug_'.$languageurl;

		$result = $this->model->get("*", "wz_career", "{$slugwhere} = '$slug'");
		if(empty($result)){
			show_404();
		}
		$province = $this->model->get("*", "wz_province", "id = '$result->work_location'");

		$sqlrelated = "SELECT a.*, b.`name` as province FROM wz_career as a,  wz_province as b WHERE a.`work_location` = b.`id`  AND {$slugwhere} != '$slug' AND function = $result->function";
		$datarelated = $this->db->query($sqlrelated);
		$related = array();
		if($datarelated->num_rows() > 0){
			$related = $datarelated->result();
		}



		 
		$data = array("result" => $result, "related" => $related, "languageurl" => $languageurl, "province" => $province,
			'category' => $this->model->get("*", "wz_career_category", "id = $result->function", "order", "ASC")
			);
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/detail',$data);
		$this->template->render();
	}
	
	function submit_job($slug, $id){
		$data= array();
		$languageurl = $this->uri->segment(1);
		$slugwhere = 'slug_'.$languageurl;

		$result = $this->model->get("*", "wz_career", "{$slugwhere} = '$slug' AND `id` = $id");
		if(empty($result)){
			show_404();
		}
		$province = $this->model->get("*", "wz_province", "id = '$result->work_location'");
		$setting = $this->model->get("*", "wz_admin_setting", "id = 1");

		$data = array("result" => $result, "languageurl" => $languageurl, "province" => $province, "setting" => $setting,
					'category' => $this->model->get("*", "wz_career_category", "id = $result->function", "order", "ASC"));
		
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/submit_job',$data);
		$this->template->render();	
	}
	 function ajax_upload_cv(){
        //pr($this->session->userdata('captcha'),1);
        $uid = -1;//$this->session->userdata('uid');

		$check = $this->model->get('*', CAREER_UPLOAD_CV_TB ,"`status` = 1 AND `uid` = '{$uid}' AND created != ''");
		if($check){
			$result['st'] = 'FALSE';
            $result['alert'] = lang('once_upload');
            echo json_encode($result);  
            exit();
		}


        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $curtit = $this->input->post('curtit');
        $yearsex = $this->input->post('yearsex');
        $linkedin = $this->input->post('linkedin');
        $uploaded_id = $this->input->post('uploaded_id');
        $captcha = $this->input->post('captcha');
        if($firstname!='' && $lastname!='' && $email!=''){
            if(strtolower($captcha)== strtolower($this->session->userdata('captcha'))){

                $data_update = array(
					'firstname'=>$firstname,
					'lastname'=>$lastname,
					'email'=>$email,
					'phone'=> $phone,
					'curtit'=> $curtit,
					'yearsex'=> $yearsex,
					'linkedin'=> $linkedin,
					'created'=>NOW,
					'changed'=>NOW,
				);
                
				$upload_cv= $this->model->get('*', CAREER_UPLOAD_CV_TB, "id = '{$uploaded_id}'");
				
				// if(!empty($upload_cv))
				// {
				// 	$result_crm= soapclient_document($upload_cv);
				// 	if(!empty($result_crm))
				// 	{
				// 		$data_update['candidate_id']= $result_crm['id'];
				// 	}
				// }
				// pr($_POST,1);
				if($upload_cv){
					$this->db->update(CAREER_UPLOAD_CV_TB,$data_update,array('id'=>$uploaded_id));
				}
				else{
					$this->db->insert(CAREER_UPLOAD_CV_TB,$data_update);	
				}
				
				$this->db->delete(CAREER_UPLOAD_CV_TB,array('uid'=>$uid,'created'=>NULL));
				
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
            $this->db->insert(CAREER_UPLOAD_CV_TB,$data);
            $id = $this->db->insert_id();
            $result['status']= "true";
            $result['id'] = $id;
            echo json_encode($result);
		}      
    }
    
	function popup(){
		$data= array();
	
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/popup',$data);
		$this->template->render();	
	}
}