<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends MY_Model {
	
	function __construct(){
		parent::__construct();
	}
    
    function insert(&$txt){
		$data= array(
			'fullname'		=> filter_input_xss($this->input->post('fullname'), true),
            'department'	=> $this->input->post('department'),
            'position'		=> $this->input->post('position'),
            'company'		=> $this->input->post('company'),
            'address'		=> filter_input_xss($this->input->post('address'), true),
			'phone'			=> filter_input_xss($this->input->post('phone'), true),
			'email'			=> filter_input_xss($this->input->post('email'), true),
            'state'		    => $this->input->post('state'),
			'message'		=> filter_input_xss($this->input->post('content'), true),
			'changed'		=> NOW,
			'created'		=> NOW
		);
		if($this->db->insert(CONTACT_TB, $data)){
			$txt= lang('form_contact_success');
		}
	}
    
    function validate_email(&$arr_error='', &$error=''){
		$email= $this->input->post('email');
		if($this->validate_null($arr_error, $form_error, 'email')){
			//CHECK USERNAME
			if(filter_var($email, FILTER_VALIDATE_EMAIL)== FALSE){
				$arr_error[]= array(
					'field'	=> 'email',
					'txt'	=> lang('email_2')
				);
				$form_error= true;
			}
		}else{
			$arr_error[]= array(
				'field'	=> 'email',
				'txt'	=> lang('form_validate_null').' Email'
			);	
		}
		$this->validate_error($error, $form_error);
	}	
}