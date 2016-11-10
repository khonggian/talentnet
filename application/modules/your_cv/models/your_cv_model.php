<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Your_cv_model extends MY_Model {
	
	function test(){
		echo $this->load->view('FRONTEND/test', '', true);
	}
	
	function pushApplyToJob($job_id, $cv_id, $save_job_id, $cv_upload){
		$job= $this->get('vacancy_id, company_id', JOBS_TB, "id = '{$job_id}'");
		if(empty($cv_upload))
		{
			$cv= $this->get('crm_id', YOUR_CV_TB, "id = '{$cv_id}'");
			if(!empty($cv)) $cv->candidate_id= $cv->crm_id;
		}
		else
		{
			$cv= $this->get('candidate_id', UPLOAD_CV_TB, "id = '{$cv_id}'");
		}

		if(!empty($job) && !empty($cv))
		{
			$param= array(
				array('name'=>'id','value'=> ''), 
				array('name'=>'name','value'=> 'TLN website - CV apply via job'), 

				array('name'=>'candidate_id','value'	=>$cv->candidate_id), // ID của Candidates
				array('name'=>'vacancy_id','value'		=>$job->vacancy_id),        // ID của Vacancy
				array('name'=>'account_id','value'		=>$job->company_id),//ID của Company

				array('name'=>'sales_stage','value'=>'1-Self-applied via website'),

				array('name'=>'stage_date','value'=> date('Y-m-d H:i:s.').rand(100, 999)), //Ngày apply. Ex: 2015-03-27 09:03:16.840 


				array('name'=>'candidate_source','value'=>'TLN website - CV apply via jo')		
			);

			$response= soapclient('Matches', $param);
			if(!empty($response['id']))
			{
				$data_matches= array(
					'matches_id'	=> $response['id']
				);
				$this->db->update(SAVE_JOB_TB, $data_matches, "id = '{$save_job_id}'");
			}
		}
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
	
	function save($id = 0, $data = array(), $table=''){
		if(!$id){
			$data['changed'] = NOW;
			$data['created'] = NOW;
			if($this->db->insert($table,$data)){
				return $this->db->insert_id();
			}
		}else{
			$data['changed'] = NOW;
			if($this->db->update($table,$data, "id = $id")){
				return $id;
			}
		}
	}
	
	function save_job_alert($id = 0){
		$data= array(
			'uid' 					=> $this->session->userdata('uid'),
			'slug' 					=> toSlug($this->input->post('job_title')).'_'.random(8),
			'job_title'				=> htmlspecialchars(strip_tags($this->input->post('job_title'))),
			'function_id'			=> $this->input->post('function')?(int)filter_input_xss($this->input->post('function'),1):0,
			'industry_id'			=> $this->input->post('industry')?(int)filter_input_xss($this->input->post('industry'),1):0,
			'level_id'				=> $this->input->post('level')?(int)filter_input_xss($this->input->post('level'),1):0,
			'location_id'			=> $this->input->post('location')?(int)filter_input_xss($this->input->post('location'),1):0,
			'salary_min'			=> (int)filter_input_xss($this->input->post('salary_min'),1),
			'salary_max'			=> (int)filter_input_xss($this->input->post('salary_max'),1),
			'email'					=> htmlspecialchars(strip_tags($this->input->post('email'))),
			'every'					=> filter_input_xss($this->input->post('every'),1),
			'status'				=> 1
		);
		if(!$id){
			$data['changed'] = NOW;
			$data['created'] = NOW;
			if($this->db->insert(JOB_ALERT_TB, $data)){
				$id = $this->db->insert_id();			
				return true;
			} else {
				return false;
			}
		}else{
			$data['changed'] = NOW;
			if($this->db->update(JOB_ALERT_TB, $data, "`id` = $id")){		
				return true;
			} else {
				return false;
			}
		}
	}
	
	function count_all_results_cv($uid){
		$this->db->select('id');
		$this->db->where('uid',$uid);
		$this->db->where('status',1);
		$query = $this->db->count_all_results(YOUR_CV_TB);
		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}
	
	function join_my_download($uid = 0){
		$this->db->select('my_download_tb.created,my_download_tb.id,infomation_tb.*');
		$this->db->from(MY_DOWNLOAD_TB." AS my_download_tb");
		$this->db->join(INFOMATION_TB." AS infomation_tb", "my_download_tb.nid = infomation_tb.id");
		$this->db->where("infomation_tb.status = 1");
		$this->db->where("my_download_tb.uid",$uid);
		$query = $this->db->get();
		if($query->result())
		{
			return $query->result();
		}
		else
		{
			return false;
		}			
	}
	
}
?>