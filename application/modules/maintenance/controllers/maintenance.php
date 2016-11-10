<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maintenance extends MX_Controller {

	function __construct(){
		parent::__construct();
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/
	function index(){
		$this->load->view('maintenance/index');
	}

}