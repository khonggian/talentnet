<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller {
	private $module = 'product';
	public $table= 'product';
	public $mid= '';
	
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
			'ps'		=> (int)$this->input->get('ps'),
			'p'			=> (int)$this->input->get('p'),
			'range'		=> filter_input_xss($this->input->get('range')),
			'keyword'	=> filter_input_xss($this->input->get('k'))
		);
		
		$page_size		= ($get['ps']) ? $get['ps'] : 10;
		$page_num		= ($get['p']) ? $get['p'] : 1;
		$total_row	 	= $this->model->getList(-1,-1, $get);	
		$start_row 		= ($page_num - 1) * $page_size;		
		
		$data= array(
			'module'		=> $this->module,
			'pagination'	=> admin_pagination($total_row, $page_size, $page_num , 3),
			'result'		=> $this->model->getList($page_size, $start_row, $get)
		);
		$this->template->write('title', 'Product');
		$this->template->write_view('content', 'BACKEND/list', $data);
		$this->template->render();
	}
	
	function edit(){
		$nid= (int)$this->input->get('nid');
		$this->model->permission($this->mid, 'edit');
		$result= $this->model->get('*', $this->table, "id = '{$nid}'");

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

		$this->template->write('title', 'Product');
		$this->template->write_view('content', 'BACKEND/edit', $data);
		$this->template->render();
	}
	
	function save(){
		$nid= (int)$this->input->post('nid');
		$mid= (int)$this->input->post('mid');
		$this->model->permission($mid, 'edit');
		$data= array();$arr_error= array();$error= false;$txt= '';
		
		$this->adminwz_model->getDataForm($mid, $data, $data_field, $arr_error, $error);
		
		if(empty($error)){
			$this->model->save($nid, $mid, $data, $data_field, $txt);
		}
		
		$json= array(
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> ($txt == 'insert') ? 'Insert Success' : 'Update Success'
		);	
		print_r(json_encode($json));
	}
	
	function delete($nid= 0){
		
	}
	
	function status($nid= 0){
		
	}
}	