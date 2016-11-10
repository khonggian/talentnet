<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminwz extends MX_Controller {
	private $module = 'adminwz';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model', 'adminwz_model');
	}
	
	function index(){
		$this->load->library('admin');
	}
	
	function form($form){
		if(!empty($form)){
			$form= array_to_object($form);
			$field = $this->adminwz_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$form->mid}'", "order", "asc");
			if(!empty($field))
			{
				$form_html= '';
				foreach($field as $row){
					if(!empty($row)){
						$mid= $row->mid;
						$nid= (!empty($form->result->id)) ? $form->result->id : 0;
						$row->nid= $nid;
						$field_name= $row->field;
						$row->field_content= (isset($form->result->$field_name)) ? $form->result->$field_name : '';
						$this->adminwz_model->getForm($row, $form_html);
					}
				}
				echo $form_html;
			}
		}
	}
	
	function language($lang){
		$this->session->set_userdata('adminwz_lang', $lang);
		redirect($this->agent->referrer());
	}
	
	function header(){
		$this->load->view('header');
	}	
		
	function header_reminder(){
		$past_reminder= array();
		$data= array(
			'reminder'		=> $this->adminwz_model->getReminder($count_result, $past_reminder),
			'count_result'	=> $count_result,
			'past_reminder'	=> $past_reminder
		);
		
		$this->load->view('include/header_reminder', $data);
	}

	function reminder(){
		$id= (int)$this->input->post('id');
		$type= $this->input->post('type');
		
		if($type == 'delete')
		{
			$this->adminwz_model->deleteReminder($id);
		}
		
		$data= array(
			'result'	=> $this->adminwz_model->get('*', ADMIN_REMINDER_TB, "id = '{$id}'")
		);
		
		$json= array(
			'st'	=> 'SUCCESS',
			'type'	=> 'edit',
			'html'	=> $this->load->view('ajax/reminder', $data, true)
		);
		print_r(json_encode($json));
	}
		
	function load_reminder(){
		$start= date('Y-m-d', strtotime($this->input->post('start')));
		$end= date('Y-m-d', strtotime($this->input->post('end')));
		$past_reminder= array();
		$reminder= $this->adminwz_model->getReminder($count_result, $past_reminder, $start, $end);
		
		$data= array(
			'reminder'	=> $reminder
		);
		
		$json= array(
			'st'			=> 'SUCCESS',
			'count_result'	=> $count_result,
			'past_reminder'	=> $past_reminder,			
			'html'			=> $this->load->view('ajax/load_reminder', $data , true)
		);
		print_r(json_encode($json));		
	}	
	
	function style(){
		$this->load->view('include/style');
	}	

	function script(){
		$this->load->view('include/script');
	}		
	
	function menu(){
		$this->load->view('menu');
	}
	
	function theme(){
		$this->load->view('theme');
	}
}