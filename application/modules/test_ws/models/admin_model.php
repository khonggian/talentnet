<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends MY_Model {
	private $table = 'product';
	
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
			if(empty($get['excel']))
			{
				$this->db->limit($limit, $page);
			}
		}
				
		$this->db->from($this->table);
		//$this->db->join(NEWS_CATEGORY_TB." AS gallery_cate", "gallery.pid = news_cate.id");
		
		if(!empty($get['keyword']))
		{
			$k= $get['keyword'];
			$this->db->where("name LIKE '%{$k}%'");
		}

		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
			$start= 	date('Y-m-d', strtotime($range[0])).' 00:00:00';
			$end=		date('Y-m-d', strtotime($range[1])).' 23:59:59';
			$this->db->where("created >= '".$start. "' AND created <= '".$end."'");
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
		$module= $this->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		$module_table= 			PREFIX.$module->folder;
		$data['changed']= 		NOW;	

		if(empty($nid))
		{
			$type= 'insert';
			$data['created']= NOW;
			$this->db->insert($module_table, $data);
			$nid= $this->db->insert_id();	
		}
		else
		{
			$type= 'update';
			$this->db->update($module_table, $data, "id = '{$nid}'");
		}		
		
		$this->adminwz_model->formFunction($nid, $module, $data, $data_field, $type);
	}
}
?>