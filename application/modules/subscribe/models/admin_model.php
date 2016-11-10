<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends MY_Model {
	private $table = 'subscribe';
	
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
			$this->db->select("subscribe_tb.*");
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->db->limit($limit, $page);
			}
		}
				
		$this->db->from(SUBSCRIBE_TB." AS subscribe_tb");
		
		if(!empty($get['keyword']))
		{
			$k= $get['keyword'];
			$this->db->where("subscribe_tb.email LIKE '%{$k}%'");
		}

		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
            $start_date =  explode('/',trim($range[0]));
            $end_date = explode('/',trim($range[1]));
			$start= 	$start_date[2].'-'.$start_date[1].'-'.$start_date[0].' 00:00:00';
			$end=		$end_date[2].'-'.$end_date[1].'-'.$end_date[0].' 23:59:59';
            
			$this->db->where("subscribe_tb.created >= '".$start. "' AND subscribe_tb.created <= '".$end."'");
		}

		   /* 
		    ORDER 
		   */  

		   if(!empty($get['field']))
		   { 
		    $field_sort= $get['field'];
		    $this->db->order_by($field_sort, $get['sort']); 
		   }
		   else
		   {
		    $this->db->order_by('subscribe_tb.created', 'DESC');
		   }

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