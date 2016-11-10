<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Salary_calc_model extends MY_Model {
	
	function test(){
		echo $this->load->view('FRONTEND/test', '', true);
	}
	
	function list_category($limit=-1, $page=-1, $pid=0){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('*');
		}
		$this->db->where("pid = '{$pid}' AND status = 1");
		if($limit == -1){
			
		}else{
			$this->db->order_by('datepost desc, id', 'desc');
			$this->db->limit($limit, $page);
		}
		$query= $this->db->get(NEWS_TB);

		if($query->result()){
			if($limit == -1){
				return $query->row()->sum;
			}
			else{
				return $query->result();
			}

		}else{
			return false;
		}
	}	
	
}
?>