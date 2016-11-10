<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller {
	private $module = 'news';
	public $table= 'news';
	function __construct(){
		parent::__construct();
		$this->table = PREFIX.$this->table;
		$this->load->model('admin_model','model');
		$this->template->set_template('admin');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){
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
			'pagination'	=> admin_pagination($total_row, $page_size, $page_num , 3),
			'result'		=> $this->model->getList($page_size, $start_row, $get)
		);
		
		$this->template->write('title', 'News');
		$this->template->write_view('content', 'BACKEND/list', $data);
		$this->template->render();
	}
	
	function edit(){
		$id= (int)$this->input->get('id');
		$data= array(
			'module'			=> $this->module,
			'news_category'		=> $this->model->fetch('*', NEWS_CATEGORY_TB, "", "slug", "asc"),
			'result'			=> $this->model->get('*', $this->table, "id = '{$id}'")
		);

		$this->template->write('title', 'News');
		$this->template->write_view('content', 'BACKEND/edit', $data);
		$this->template->render();
	}
	
	function delete(){
		
	}
	
	function save(){
		$st= 'FALSE';$txt= '';
		$this->model->save();
		$json= array(
			'st'	=> 'SUCCESS',
			'txt'	=> $txt
		);
		print_r(json_encode($json));
	}
}	