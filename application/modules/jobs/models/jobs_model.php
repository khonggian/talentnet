<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jobs_model extends MY_Model {
	
	function get_result($type='',$slug=''){
		$this->db->select('jobs_tb.*');
		$this->db->from(JOBS_TB." AS jobs_tb");

		$this->db->where("jobs_tb.status",1);
		$this->db->where("jobs_tb.".$type,$slug);
		$query = $this->db->get();
		if($query->row()){
			return $query->row();
		}else{
			return false;
		}
	}
	function related_jobs($result = array(), $id = 0, $type ='', $name =''){
		$function ='%'.$result->function.'%';
		$industry ='%'.$result->industry.'%';
		$location ='%'.$result->location.'%';
		$level    ='%'.$result->level.'%';
		//,location_tb.name as location_name
		$this->db->select('jobs_tb.*');
		$this->db->from(JOBS_TB." AS jobs_tb");
		//$this->db->join(LOCATION_TB." AS location_tb", "jobs_tb.location_id = location_tb.id");
		$this->db->where("jobs_tb.status = 1 AND jobs_tb.id != $id AND jobs_tb.function like '{$function}'   ");
		$this->db->limit(5);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			$this->db->select('jobs_tb.*');
			$this->db->from(JOBS_TB." AS jobs_tb");
			$this->db->where("jobs_tb.status = 1 AND jobs_tb.id != $id AND jobs_tb.level like '{$level}'   ");
			$this->db->limit(5);
			$query = $this->db->get();
			if($query->result()){
				return $query->result();
			}else{
				$this->db->select('jobs_tb.*');
				$this->db->from(JOBS_TB." AS jobs_tb");
				$this->db->where("jobs_tb.status = 1 AND jobs_tb.id != $id AND jobs_tb.location like '{$location}'  ");
				$this->db->limit(5);
				$query = $this->db->get();
				if($query->result()){
					return $query->result();
				}else{
					return false;
				}
			}
		}
	}
	
	function search_result($limit=-1, $page=-1,$category = array(), $type='vi', $keyword='', $salary_min='', $salary_max=''){
		$function= $this->input->get('function', true);
		$industry= $this->input->get('industry', true);
		$level= $this->input->get('level', true);
		$location= $this->input->get('location', true);
		$keyword= filter_input_xss($this->input->get('keyword'));
		
		if($limit == -1)
		{
			$this->db->select('count(*) as sum');
		}
		else
		{
			$this->db->select('jobs_tb.*');
		}
		$this->db->from(JOBS_TB." AS jobs_tb");

		$this->db->where("jobs_tb.status",1);
		
		if(!empty($keyword))
		{
			$this->db->where("jobs_tb.name LIKE '%{$keyword}%'");
		}
		
		if(!empty($function[0]))
		{
			$sql= array_like('jobs_tb.function', $function);
			if(!empty($sql))
			{
				$this->db->where($sql);		
			}
		}
		
		if(!empty($industry[0]))
		{
			$sql= array_like('jobs_tb.industry', $industry);
			if(!empty($sql))
			{
				$this->db->where($sql);		
			}			
		}		
		
		if(!empty($level[0]))
		{
			$sql= array_like('jobs_tb.level', $level);
			if(!empty($sql))
			{
				$this->db->where($sql);		
			}				
		}			
		
		if(!empty($location[0]))
		{		
			$sql= array_like('jobs_tb.location', $location);
			if(!empty($sql))
			{
				$this->db->where($sql);		
			}					
		}				
				
		if($limit == -1) {

		}else {
			$this->db->limit($limit,$page);
		}
		$this->db->order_by('jobs_tb.created','desc');
		$query = $this->db->get();
		//pr(last_query(),1);
		if($query->result()){
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{
				return $query->result();
			}
		}else{
			return false;
		}
	}
	
	function filter_category_job($lang = '',$array_category = array(), $note = ''){
		$array_id = array();

		if(!empty($array_category)){
			foreach($array_category as $k => $val){
				if($k=='function_job' || $k=='level_job'){

					$type = $k == 'location' ? 'name' : 'name';
					$select = $k == 'location' ? 'id,name' : 'id,name';
					$slug = $k == 'location' ? 'name' : ($lang == 'vi' ? 'name' :  'name');

					$result = $this->model->get($select, PREFIX.$k ,"`status` = 1 AND $type = '{$val}'");
					
					if(!empty($result)){
						if($note != 'get_slug'){
							$array_id[$k]= !empty($result)?$result->id:0;
						}else{
							if(!empty($result)){
								$array_id[$k]= $k != 'location' ? $lang == 'vi' ? $result->slug :  $result->slug : 'slug';
							}
						}
					}
				}else{
					$type = $k == 'location' ? 'slug' : language('slug');
					$select = $k == 'location' ? 'id,slug' : 'id,slug_vi,slug_en';
					$slug = $k == 'location' ? 'slug' : ($lang == 'vi' ? 'slug_en' :  'slug_vi');
					$result = $this->model->get($select, PREFIX.$k ,"`status` = 1 AND $type = '{$val}'");

					if(!empty($result)){
						if($note != 'get_slug'){
							$array_id[$k]= !empty($result)?$result->id:0;
						}else{
							if(!empty($result)){
								$array_id[$k]= $k != 'location' ? $lang == 'vi' ? $result->slug_en :  $result->slug_vi : 'slug';
							}
						}
					}
				}
				
			}
		}
		
		return $array_id;

	}
}
?>