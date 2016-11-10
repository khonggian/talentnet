<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends MY_Model {
	private $table = 'jobs';
	
	function __construct(){
		parent::__construct();
		$this->table = PREFIX.$this->table;
	}	
	
	function getList($limit=-1, $page=-1, $get= array()){
		if($limit == -1)
		{
			$this->db->select('count(*) as sum');
		}
		else
		{
			//$this->db->select("jobs_tb.*, function_job_tb.name_en as name_function, industry_job_tb.name_en as name_industry, location_tb.name as name_location, level_job_tb.name_en as name_level");
			$this->db->select("jobs_tb.* ");
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->db->limit($limit, $page);
			}
		}
				
		$this->db->from(JOBS_TB." AS jobs_tb");
		//$this->db->join(FUNCTION_JOB_TB." AS function_job_tb", "jobs_tb.function_id = function_job_tb.id");
		//$this->db->join(INDUSTRY_JOB_TB." AS industry_job_tb", "jobs_tb.industry_id = industry_job_tb.id");
		//$this->db->join(LOCATION_TB." AS location_tb", "jobs_tb.location_id = location_tb.id");
		//$this->db->join(LEVEL_JOB_TB." AS level_job_tb", "jobs_tb.level_id = level_job_tb.id");
		
		if(!empty($get['keyword']))
		{
			$k= $get['keyword'];
			$this->db->where("jobs_tb.name_vi LIKE '%{$k}%' OR jobs_tb.name_en LIKE '%{$k}%'");
		}

		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
			$start= 	date('Y-m-d', strtotime($range[0])).' 00:00:00';
			$end=		date('Y-m-d', strtotime($range[1])).' 23:59:59';
			$this->db->where("jobs_tb.created >= '".$start. "' AND jobs_tb.created <= '".$end."'");
		}
		$this->db->order_by('jobs_tb.created','desc');
		$query = $this->db->get();

		if($query->result())
		{
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{
				return $query->result();
			}
		}
		else
		{
			return false;
		}			
	}
	
	function save($nid, $mid, $data, $data_field, &$type){
		$module= $this->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		$module_table= 			PREFIX.$module->folder;
		$data['changed']= 		NOW;	
		if(empty($nid))
		{
			$data['created']= NOW;
			if($this->db->insert($module_table, $data)){
				$nid= $this->db->insert_id();
			}
			
		}
		else
		{
			$this->db->update($module_table, $data, "id = '{$nid}'");
		}		
		
		$this->adminwz_model->formFunction($nid, $module, $data, $data_field, $type);
		$this->session->unset_userdata('referrer_page_list');
	}
}
?>