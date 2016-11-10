<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends MY_Model {
	private $table = 'news';
	
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
			$this->db->select("news.*, news_cate.name");
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->db->limit($limit, $page);
			}
		}
				
		$this->db->from(NEWS_TB." AS news");
		$this->db->join(NEWS_CATEGORY_TB." AS news_cate", "news.pid = news_cate.id");
		
		if(!empty($get['keyword']))
		{
			$k= $get['keyword'];
			$this->db->where("news.title LIKE '%{$k}%' OR news_cate.name LIKE '%{$k}%'");
		}

		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
			$start= 	date('Y-m-d', strtotime($range[0])).' 00:00:00';
			$end=		date('Y-m-d', strtotime($range[1])).' 23:59:59';
			$this->db->where("news.created >= '".$start. "' AND news.created <= '".$end."'");
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
	
	function save(){
		$id= (int)$this->input->post('id');
		if(empty($id))
		{
			//INSERT
			$data= array(
				'pid'			=> (int)$this->input->post('pid'),
				'title'			=> $this->input->post('title'),
				'description'	=> $this->input->post('description'),
				'content'		=> $this->input->post('content'),
				'changed'		=> NOW,
				'created'		=> NOW
			);
			$this->db->insert($this->table, $data);
		}
		else
		{
			//UPDATE
			$result= $this->get('*', $this->table, "id = '{$id}'");
			if(!empty($result))
			{
				
			$data= array(
				'pid'			=> (int)$this->input->post('pid'),
				'title'			=> $this->input->post('title'),
				'description'	=> $this->input->post('description'),
				'content'		=> $this->input->post('content'),
				'changed'		=> NOW
			);
			$this->db->update($this->table, $data, "id = '{$result->id}'");
			
			}
		}
	}
}
?>