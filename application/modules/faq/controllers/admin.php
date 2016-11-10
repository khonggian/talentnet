<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller {
	private $module = 'faq';
	public $table= 'faq';
	function __construct(){
		parent::__construct();
		$this->table = PREFIX.$this->table;
		$this->load->model('admin_model','model');
		$this->template->set_template('admin');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function callback($nid= 0){
		
	}
	
	function delete($result= 0){
		
	}
	
	function status($nid= 0){
		
	}
}	