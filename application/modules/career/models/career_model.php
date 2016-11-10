<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Career_model extends MY_Model {
	
	function test(){
		echo $this->load->view('FRONTEND/test', '', true);
	}
	
	function list_career($limit=-1, $page=-1, $catid=0){
		$level = filter_input_xss($this->input->get("level"));
		$function = filter_input_xss($this->input->get("function"));
		$location = (int) filter_input_xss($this->input->get("location"));
		$getkeyword = filter_input_xss($this->input->get("keyword"));
		$currentlanguage = $this->uri->segment(1);
		

		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('career_tb.*, career_tb.hot  as is_hot, province_tb.name as province, career_category_tb.name_vi as cat_vi, career_category_tb.name_en as cat_en');
		}
	
		$this->db->from(CAREER_TB." AS career_tb");
		$this->db->join(PROVINCE_TB." AS province_tb", "career_tb.work_location = province_tb.id");
		$this->db->join(CAREER_CATEGORY_TB." AS career_category_tb", "career_tb.function = career_category_tb.id");
		if($function != 0){
			$this->db->where("career_tb.function = '{$function}' AND career_tb.status = 1");	
		}
		else{
			$this->db->where("career_tb.status = 1");	
		}

	
		if(!empty($level) && $level != '') {
			$this->db->where("career_tb.level like '%$level%'");	
		}

		if(!empty($location) && $location != '0') {
			$this->db->where("career_tb.work_location = $location");	
		}


		
		

		if( !empty($getkeyword) && $getkeyword != '' && $getkeyword != '0' ) {
			$namewhere = 'name_'.$currentlanguage;
			$description = 'description_'.$currentlanguage;
			$content = 'content_'.$currentlanguage;
			$this->db->where("career_tb.$namewhere like '%$getkeyword%' ");	// OR career_tb.$description like '%$getkeyword%' OR career_tb.$content like '%$getkeyword%'
		}


		
		if($limit == -1){
			
		}else{
			$this->db->order_by('career_tb.hot desc, career_tb.order desc ,  career_tb.created ', 'desc');
			$this->db->limit($limit, $page);
		}
		
		$query= $this->db->get();
		// pr(last_query());
		// pr($query->result());
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