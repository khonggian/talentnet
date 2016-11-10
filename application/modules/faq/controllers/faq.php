<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Faq extends MX_Controller {
	private $module = 'faq';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index(){
		$get= array(
                'p'			=> (int)$this->input->get('p'),
                's'			=> filter_input_xss($this->input->get('s')),
                'k'			=> filter_input_xss($this->input->get('k')),
    		);
    	$page_num		= ($get['p']) ? $get['p'] : 1;
        $page_size = ((int)$get['s']) ? $get['s'] : 5;
        $start_row =($page_num - 1) * $page_size;
        $total_row	 	= $this->model->get_list(-1, -1,$get);
        $result = $this->model->get_list($start_row, $page_size,$get);

        $pagination = pagelistLimited($total_row,$page_num,$page_size,3);
		$data= array(
			'title'				=> lang('FAQ'),
			'result'			=> $result,
            'parent_cat'        => $this->current_lang == 'vi' ? 'cau-hoi':'faq',
			'language_link' 	=> filter_link($this->current_lang,'faq',1),
            'total_row'    		=> $total_row,
            'row_per_page'  	=> $page_size,
            'keyword'       	=> $get['k'],
			'pagination'		=> $pagination,
			'new_arrivals_category' => $this->model->fetch('*', NEW_ARRIVALS_CATEGORY_TB ,"`status` = 1","order","asc")
		);
	   $this->template->write('title',lang('FAQ'));
	   $this->template->write_view('content','FRONTEND/index',$data);
	   $this->template->render();	
	}
    function send_quest(){
       $user_id= $this->session->userdata('uid');
           $error= false;$arr_error= array();$txt= '';
           /*if(empty($user_id)){
                $error=1;
           }*/
           $fullname = filter_input_xss($this->input->post('fullname'));
           $company = filter_input_xss($this->input->post('company'));
           $email = filter_input_xss($this->input->post('email'));
           $quest = filter_input_xss($this->input->post('quest'));
           /*if(empty($user_id)){
                $error = true;
                $arr_error[]=array('field'=>'','txt'=> ($this->current_lang == 'en' ? 'Please login to submit questions' : 'Bạn vui lòng đăng nhập trước khi gửi câu hỏi'));
           }*/
           $this->model->validate_general_name($arr_error, $error, 'fullname',lang('fullname'));
           $this->model->validate_general_name($arr_error, $error, 'company',lang('company_name'));
           $this->model->validate_email_md($arr_error,$error,$email,'','','email');
           $this->model->validate_ext($arr_error,$error,'quest',lang('not_question'));
           $this->model->validate_Captcha($arr_error,$error);
          
          if(empty($error)){
      			$this->model->insert_faq($user_id);
            $html='
                <p>Chào bạn! Hệ thống gửi bạn câu hỏi vừa nhận được</p>
                <table>
                  <tr>
                    <td width="200">Họ tên:</td>
                    <td>'.$fullname.'</td>
                  </tr>
                  <tr>
                    <td>Công ty:</td>
                    <td>'.$company.'</td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td>'.$email.'</td>
                  </tr>
                  <tr>
                    <td>Câu hỏi:</td>
                    <td>'.$quest.'</td>
                  </tr>
                </table>
            ';
            $email = array(
                'subject' => 'Gởi câu hỏi',
                'email' => 'contact@talentnet.vn,vu.thichuyen@yahoo.com',
                'html' => $html
              );
            $this->model->send_email($email);
      		}
    		$json= array(
    			'st'		=> (empty($error))?'SUCCESS':'FALSE',
    			'error'		=> $arr_error,
    			'txt'		=> (empty($error))?lang('send_success'):$txt,
    		);		
    		return print_r(json_encode($json));	
        
    }
}