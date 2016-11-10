<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Career_category extends MX_Controller {
	private $module = 'career_category';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index(){
		$data = array();
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/index',$data);
		$this->template->render();	
	
	}
	
	function detail(){
		$data = array();
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/detail',$data);
		$this->template->render();
	}
	
	function submit_job(){
		$data= array();
	
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/submit_job',$data);
		$this->template->render();	
	}

	function popup(){
		$data= array();
	
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/popup',$data);
		$this->template->render();	
	}
}