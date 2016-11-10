<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller {
	private $module = 'career_upload_cv';
	public $table= 'career_upload_cv';
	function __construct(){
		parent::__construct();
		$this->table = PREFIX.$this->table;
		$this->mid= (int)$this->input->get('mid');
		$this->load->model('admin_model','model');
		$this->load->model('adminwz/adminwz_model', 'adminwz_model');
		$this->template->set_template('admin');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){
		$this->model->permission($this->mid, 'read');
		$get= array(
			'ps'			=> (int)$this->input->get('ps'),
			'p'				=> (int)$this->input->get('p'),
			'field'			=> filter_input_xss($this->input->get('field')),
			'sort'			=> filter_input_xss($this->input->get('sort')),
			'range'			=> filter_input_xss($this->input->get('range')),
			'keyword'		=> filter_input_xss($this->input->get('k'))
		);
		$page_size		= ($get['ps']) ? $get['ps'] : 10;
		$page_num		= ($get['p']) ? $get['p'] : 1;
		$total_row	 	= $this->model->getList(-1,-1, $get);	
		$start_row 		= ($page_num - 1) * $page_size;		
		$result = $this->model->getList($page_size, $start_row, $get);
		
		// pr($result,1);
		$data= array(
			'module'		=> $this->module,
			'sort'			=> ($this->input->get('sort') == 'asc') ? 'desc' : 'asc',
			'pagination'	=> admin_pagination($total_row, $page_size, $page_num , 3),
			'current_url'	=> current_url().'?'.$_SERVER['QUERY_STRING'],
			'result'		=> $result,
			'mid'           => (int)$this->input->get('mid')
		);
		
        if($this->input->get('excel')!='' && $this->input->get('excel')){
            $this->load->view('BACKEND/report', $data);
        }
        else{
    		$this->template->write('title', 'Subscribe');
    		$this->template->write_view('content', 'BACKEND/list', $data);
    		$this->template->render();
        }
	}
	function edit(){
		$this->session->set_userdata('referrer_page_list', $this->agent->referrer());
		
		$nid= (int)$this->input->get('nid');
		$this->model->permission($this->mid, 'edit');
		$result= $this->model->get('*', CAREER_UPLOAD_CV_TB, "id = '{$nid}'");
		if(!empty($result)){
			//$result->type = $result->category =='wz_information' ? 'Information' : 'New Arrivals';
		}
		$form= array(
			'result'	=> $result,
			'mid'		=> $this->mid
		);
				
		$data= array(
			'module'			=> $this->module,
			'result'			=> $result,
			'nid' 				=> $nid,
			'form'				=> $form
		);

		$this->template->write('title', 'Subscribe');
		$this->template->write_view('content', 'BACKEND/edit', $data);
		$this->template->render();
	}
	
	function save(){
		$nid= (int)$this->input->post('nid');
		$mid= (int)$this->input->post('mid');
		$this->model->permission($mid, 'edit');
		$data= array();$arr_error= array();$error= false;$txt= '';
		
		$this->adminwz_model->getFormData($mid, $nid, $data, $data_field, $arr_error, $error);
		
		$array_field = array();
	
		foreach($array_field as $field=>$value){
			$this->admin_model->validate_ext($arr_error, $error, $field, $value.' chưa nhập');
		}		
		
		if(empty($error)){
			$this->model->save($nid, $mid, $data, $data_field, $txt);
		}
		
		$json= array(
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> (!empty($txt)) ? ($txt == 'insert') ? 'Insert Success' : 'Update Success' : ''
		);	
		print_r(json_encode($json));
	}
	
	function download(){
		$file = $this->input->get('file');
		header('Content-disposition: attachment; filename='.$file);
		header("Content-Type: application/docx");
		readfile(base_url().DIR_UPLOAD_CV.$file);
	}
}	