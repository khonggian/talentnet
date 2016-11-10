<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class api extends MX_Controller {
	private $module = 'api';
	private $api_username= 'api';
	private $api_password= 'KfPsNZT8RKpqm4thrGkfBfmq';
	
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');

	}
	
	function post_job(){
		$vacancy_id= filter_input_xss($this->input->post('id'));

		$job= $this->model->get('id', JOBS_TB, "vacancy_id = '{$vacancy_id}'");

		if(empty($job))
		{
			$ids= $this->model->getIDSJob();
			$data= array(
				'vacancy_id'				=> $vacancy_id,
				'company_id'				=> filter_input_xss($this->input->post('company_id')),
				'function'					=> explode_to_json($this->input->post('tln_function')),
				'industry'					=> explode_to_json($this->input->post('industry_category')),
				'level'						=> explode_to_json($this->input->post('professional_level')),
				'location'					=> explode_to_json($this->input->post('location')),
				'name'						=> filter_input_xss($this->input->post('name')),
				'slug'						=> toSlug($this->input->post('name')).'--'.$ids,
				'ids'						=> $ids,
				'code'						=> filter_input_xss($this->input->post('job_code')),
				'job_description'			=> $this->input->post('internal_description'),
				'job_requirement'			=> $this->input->post('qualifications'),
				'company_name'				=> filter_input_xss($this->input->post('company_name')),
				'hot'						=> (int)$this->input->post('top'),
				'salary_min'				=> (int)$this->input->post('salary_from'),
				'salary_max'				=> (int)$this->input->post('salary_to'),
				'expired'					=> filter_input_xss($this->input->post('expried_on')),
				'pic1'						=> filter_input_xss($this->input->post('pic1')),
				'pic2'						=> filter_input_xss($this->input->post('pic2')),
				'status'					=> 1,
				'changed'					=> date('Y-m-d H:i:s', strtotime($this->input->post('date_modified'))),
				'created'					=> date('Y-m-d H:i:s', strtotime($this->input->post('date_entered'))),
				'created_by'				=> filter_input_xss($this->input->post('created_by'))
			);
			
			if($this->db->insert(JOBS_TB, $data))
			{
				$json= array(
					'st'	=> 'SUCCESS',
					'txt'	=> 'Insert success'
				);		
			}
		}
		else
		{
			$json= array(
				'st'	=> 'FALSE',
				'txt'	=> 'Insert false'
			);		
		}
		
		print_r(json_encode($json));
	}
	
	function update_job(){
		$vacancy_id= filter_input_xss($this->input->post('id'));

		$job= $this->model->get('id, ids', JOBS_TB, "vacancy_id = '{$vacancy_id}'");

		if(!empty($job))
		{
			$data= array(
				'company_id'				=> filter_input_xss($this->input->post('company_id')),
				'function'					=> explode_to_json($this->input->post('tln_function')),
				'industry'					=> explode_to_json($this->input->post('industry_category')),
				'level'						=> explode_to_json($this->input->post('professional_level')),
				'location'					=> explode_to_json($this->input->post('location')),
				'name'						=> filter_input_xss($this->input->post('name')),
				'slug'						=> toSlug($this->input->post('name')).'--'.$job->ids,
				'code'						=> filter_input_xss($this->input->post('job_code')),
				'job_description'			=> filter_input_xss($this->input->post('internal_description')),
				'job_requirement'			=> filter_input_xss($this->input->post('qualifications')),
				'company_name'				=> filter_input_xss($this->input->post('company_name')),
				'hot'						=> (int)$this->input->post('top'),
				'salary_min'				=> (int)$this->input->post('salary_from'),
				'salary_max'				=> (int)$this->input->post('salary_to'),
				'expired'					=> filter_input_xss($this->input->post('expried_on')),
				'status'					=> 1,
				'changed'					=> date('Y-m-d H:i:s', strtotime($this->input->post('date_modified')))
			);
			
			if($this->db->update(JOBS_TB, $data, "vacancy_id = '{$vacancy_id}'"))
			{
				$json= array(
					'st'	=> 'SUCCESS',
					'txt'	=> 'Update success'
				);		
			}
		}
		else
		{
			$json= array(
				'st'	=> 'FALSE',
				'txt'	=> 'Update false'
			);		
		}
		
		print_r(json_encode($json));		
	}
	
	function closed_job(){
		$vacancy_id= filter_input_xss($this->input->post('vacancy_id'));
		$expired= filter_input_xss($this->input->post('expired'));
		
		$job= $this->model->get('id', JOBS_TB, "vacancy_id = '{$vacancy_id}'");
		
		if(!empty($job))
		{
			$data['expired']= $expired;
			$this->db->update(JOBS_TB, $data, "vacancy_id = '{$vacancy_id}'");
			
			$json= array(
				'st'	=> 'SUCCESS',
				'txt'	=> 'Update success'
			);
		}
		else
		{
			$json= array(
				'st'	=> 'FALSE',
				'txt'	=> 'Update false'
			);			
		}
		
		print_r(json_encode($json));		
	}
}