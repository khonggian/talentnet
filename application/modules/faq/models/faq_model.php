<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Faq_model extends MY_Model {

	
	function get_list($page=-1,$limit=-1, $get){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('*');
		}
		$this->db->where("status",1);
        if(isset($get['k']) && trim($get['k'])!=''){
            $this->db->like('question',$get['k']);
        }
		if($limit == -1){
			
		}else{
			$this->db->order_by('created', 'desc');
			$this->db->limit($limit,$page);
		}
		$query= $this->db->get(FAQ_TB);

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
    function insert_faq($user_id=''){
        //if($user_id!=''){
            $email = filter_input_xss($this->input->post('email'));
            $fullname = filter_input_xss($this->input->post('fullname'));
            $company = filter_input_xss($this->input->post('company'));
            $quest = filter_input_xss($this->input->post('quest'));
            $data_insert = array(
                                    'user_id'=> $user_id,
                                    'fullname'=> $fullname,
                                    'company' => $company,
                                    'email'     =>$email,
                                    'question'  =>$quest,
                                    'created'   =>NOW,
                                    'changed'   =>NOW                    
                                );
            $this->db->insert(FAQ_TB,$data_insert);            
        //}
    }	
}
?>