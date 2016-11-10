<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends MY_Model {
	private $table = 'upload_cv';
	
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
			$this->db->select("upload_cv.*");
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->db->limit($limit, $page);
			}
		}
				
		$this->db->from($this->table." AS upload_cv");
		//$this->db->join(NEWS_CATEGORY_TB." AS news_category_tb", "news_tb.category_id = news_category_tb.id");
		
		if(!empty($get['keyword']))
		{
			$k= $get['keyword'];
			$this->db->where("upload_cv.fullname LIKE '%{$k}%' OR upload_cv.email LIKE '%{$k}%'");
		}

		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
			$start= 	date('Y-m-d', strtotime($range[0])).' 00:00:00';
			$end=		date('Y-m-d', strtotime($range[1])).' 23:59:59';
			$this->db->where("upload_cv.created >= '".$start. "' AND upload_cv.created <= '".$end."'");
		}
		$this->db->order_by('created','DESC');
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
		$module					= $this->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		$module_table			= PREFIX.$module->folder;
		$data['parent_id']		= (int)$this->input->post('parent_id');	
		$data['category_id']	= (int)$this->input->post('category_id');	
		$data['changed']		=  NOW;
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