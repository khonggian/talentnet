<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Block extends MX_Controller {
	private $module = 'block';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','block_model');
        $this->load->model('user/user_model','user_model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function endorse($type=1,$mode=''){
	    $output= array();
        $type2=$type-1;
        $this->db->where('id',$type2);
        $output['hr_cate']=$this->db->get(HRSERVICES_CATEGORY_TB)->row_array();
        $output['lstDorse']= $this->block_model->get_list_dorse($type);
        //pr($this->db->last_query(),1);
        $output['url_log'] = PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login');
        //pr($output['url_log']);
        if($mode=='test'){
            $this->template->write('title', 'Testing');
			$this->template->write_view('content','endorser/endorse',$output);
			$this->template->render();
        }
        else{
            $this->load->view('endorser/endorse',$output);
        }
	}
    function endorse_ajax(){
        $output['lstDorse']= $this->block_model->get_list_dorse(7);
        $this->load->view('endorser/endorse_ajax',$output);
    }
    function ajax_skill(){
        $json = $this->block_model->get_list_dorse_by_user();
        if($json) $json['st']= 'true';
        else $json['st'] = 'false';
        $json['listCheck'] = $this->load->view('endorser/ajax_skill',$json,true);
        echo json_encode($json);   
    }
    function post_skill(){
        $result ='';
        $arr_skill = array();
        $skill_id= $this->input->post('skill_id',TRUE);
        /*$arr_insert = array(
                            'endorser_id'=>json_encode($arrDorse),
                            'email'     =>$email
                        );*/
        //$result['login']='true';
        if($skill_id!=''){
            /*$this->db->insert(ENDORSER_USER_TB,$arr_insert);*/
            /*if(!$this->session->userdata('uid')){
                $result['status'] ='false';
                $result['login']='false';
            }
            else*/
            if(!$this->input->cookie('str_endorse')){
                $arr_skill[] = $skill_id;
                    $str_endorse = json_encode($arr_skill);
                    $cookie = array(
                        'name'   => 'str_endorse',
                        'value'  => $str_endorse,
                        'expire' => 365*24*3600,
                        'domain' => $_SERVER['SERVER_NAME'],
                        'path'   => '/',
                        'prefix' => '',
                        'secure' => FALSE
                    );
                    
                    $this->input->set_cookie($cookie);
                    setcookie('str_endorse', $str_endorse , time() + 24*3600*7, '/');
                $this->block_model->update_endorser_counter($skill_id);
                $result['status'] ='true';
                
            }
            else{
                $str_endorse = $this->input->cookie('str_endorse');
                $arr_skill = json_decode($str_endorse,true);
                if(in_array($skill_id,$arr_skill)){
                    $result['status']=false;
                }
                else{
                    $arr_skill[] = $skill_id;
                    $str_endorse = json_encode($arr_skill);
                    $cookie = array(
                        'name'   => 'str_endorse',
                        'value'  => $str_endorse,
                        'expire' => 365*24*3600,
                        'domain' => $_SERVER['SERVER_NAME'],
                        'path'   => '/',
                        'prefix' => '',
                        'secure' => FALSE
                    );
                    
                    $this->input->set_cookie($cookie); 
                    setcookie('str_endorse', $str_endorse , time() + 24*3600*7, '/');
                    $this->block_model->update_endorser_counter($skill_id);
                    $result['status'] ='true';
                }
            }
            $result['counter'] = $this->block_model->get('*',ENDORSER_TB,array('id'=>$skill_id))->counter;    
        }
        
        echo json_encode($result);
        
    }
    function hr_calc(){
        $this->load->view('salary/hr_calc');
    }
    function salary_calc_for($for=''){
        if($for=='employee') 
           $this->load->view('salary/for_employee');
        else if($for=='employer') 
           $this->load->view('salary/for_employer');
    }
    function you_surely_use(){
        $data_you_surely_use['list_hrservice']=$this->model->fetch('*',HRSERVICES_CATEGORY_TB,'status = 1','order','ASC');
        $this->load->view('you_surely_use/index',$data_you_surely_use);
    }
    function brochure(){
        $this->load->view('brochure/index');
    }
    function brochure_ajax_post_info(){
        $error= false;$arr_error= array();$txt= '';
        //echo $this->input->post('fullname');
		$this->block_model->validate_general_name($arr_error, $error, 'fullname',lang('fullname'));
        $this->block_model->validate_ext($arr_error,$error,'title',lang('Please_enter').' '.lang('title'));
        $this->block_model->validate_ext($arr_error,$error,'company',lang('Please_enter').' '.lang('company_name'));
        $this->block_model->validate_phone($arr_error,$error,'phone');
        $this->block_model->validate_ext($arr_error,$error,'email',lang('Please_enter').' '.'email');
        $this->block_model->validate_email($arr_error,$error,'email',lang('form_invalid').' '.'email address');
		$this->block_model->validate_captcha($arr_error,$error);
		
        if(empty($error)){
			$this->block_model->insert_who_download_brochure();
		}
        
		$json= array(
            'link_download' => PATH_URL_LANG.'download',
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> $txt
		);
        echo json_encode($json);		
    }
    function ajax_download(){
        $error= false;$arr_error= array();$txt= '';
        //echo $this->input->post('fullname');
        $this->block_model->validate_general_name($arr_error, $error, 'fullname',lang('fullname'));
        $this->block_model->validate_ext($arr_error,$error,'title',lang('Please_enter').' '.lang('title'));
        $this->block_model->validate_ext($arr_error,$error,'company',lang('Please_enter').' '.lang('company_name'));
        $this->block_model->validate_phone($arr_error,$error,'phone');
        $this->block_model->validate_ext($arr_error,$error,'email',lang('Please_enter').' '.'email');
        $this->block_model->validate_email($arr_error,$error,'email',lang('form_invalid').' '.'email address');
        $this->block_model->validate_captcha($arr_error,$error);
        
        if(empty($error)){
            $this->block_model->insert_who_download_brochure();
        }
        
        $json= array(
            'link_download' => PATH_URL_LANG.'download',
            'st'        => (empty($error))?'SUCCESS':'FALSE',
            'error'     => $arr_error,
            'txt'       => $txt
        );
        echo json_encode($json);        
    }
    function you_may_interest_service($sid = 0){
        $title =lang('you_may_interest');
        $in_the_news1 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>2),"created","desc",0,2);
        $in_the_news2 = $this->model->fetch('*',INFOMATION_TB,'status = 1 AND category_id = 3 AND service_id like \'%"'.$sid.'"%\'',"created","desc",0,2);
        $in_the_news3 = $this->model->fetch('*',INFOMATION_TB,array('status'=>1,'category_id'=>4),"created","desc",0,1);
        $in_the_news = array_merge($in_the_news1,$in_the_news2,$in_the_news3);
        $slug = language('slug');
        if(!empty($in_the_news)){
            foreach($in_the_news as $the_news){
                $g_category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `id` = '{$the_news->category_id}'");
                $slug_category = !empty($g_category)?$g_category->$slug:'';
                $the_news->link = PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$slug_category.'/'.$the_news->$slug;
            }
        }
        $data =  array(
            'in_the_news'           => $in_the_news,
            'title'                 => $title,
            'slug_category'         => !empty($slug_category)?$slug_category:''
        );
        $this->load->view('you_may_interest_service',$data);
    }

    function you_may_interest_information($sid = 0){
        $title =lang('you_may_interest');
        if($sid){
            $in_the_news = $this->model->fetch('*',INFOMATION_TB,'status = 1 AND service_id like \'%"'.$sid.'"%\'',"created","desc",0,2);
        }else{
            $in_the_news = $this->model->fetch('*',INFOMATION_TB,array('status'=>1),"created","desc",0,5);
        }
        $slug = language('slug');
        if(!empty($in_the_news)){
            foreach($in_the_news as $the_news){
                $g_category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `id` = '{$the_news->category_id}'");
                $slug_category = !empty($g_category)?$g_category->$slug:'';
                $the_news->link = PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$slug_category.'/'.$the_news->$slug;
            }
        }
        $data =  array(
            'in_the_news'           => $in_the_news,
            'title'                 => $title,
            'slug_category'         => !empty($slug_category)?$slug_category:''
        );
        $this->load->view('you_may_interest_service',$data);
    }
    
}