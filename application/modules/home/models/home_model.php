<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends MY_Model {
	public $name = '';
	function __construct(){
		parent::__construct();
		$this->name = language('name');
		$this->description = language('description');
	}	
	function getList($limit=-1, $page=-1, $get=array(), $category_id='', $table=HRSERVICES_TB){
		if($limit == -1)
		{
			$this->db->select('count(*) as sum');
		}
		else
		{
			$this->db->select('data_tb.*');
		}

		$this->db->from($table." AS data_tb");
		$this->db->where("data_tb.status = 1");
		$this->db->where("data_tb.category_id = '{$category_id}'");
        if(isset($get['view_by']) AND $get['view_by']!=''){
			$view_by = '"'.$get['view_by'].'"';

			$this->db->where("data_tb.service_id LIKE '%{$view_by}%'");
        }
		if(!empty($get['keyword']))
		{
			$keyword = filter_input_xss($get['keyword']);
            //pr($this->name,1);
			$this->db->where("(data_tb.".$this->name." LIKE '%{$keyword}%' OR data_tb.".$this->description." LIKE '%{$keyword}%')");
		}
        if(!empty($get['by_day']) AND !empty($get['by_month']) AND !empty($get['by_year']) ){
            $this->db->where('DATE(data_tb.created)',$get['by_year'].'-'.$get['by_month'].'-'.$get['by_day']);
        }
        else if(!empty($get['by_month']) AND !empty($get['by_year'])){
            $this->db->where('MONTH(data_tb.created)',$get['by_month']);
            $this->db->where('YEAR(data_tb.created)',$get['by_year']);
        }
        else if(!empty($get['by_year'])){
            $this->db->where('YEAR(data_tb.created)',$get['by_year']);
        }
		if($limit == -1) {

		}else {
			$this->db->limit($limit,$page);
		}
		$this->db->order_by('data_tb.created',$get['order']);
		$query = $this->db->get();
		//pr(last_query(),1);
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
	
	function get_list_join_jobs($uid = 0,$type = ''){
		$this->db->select('save_job_tb.id,save_job_tb.created as sv_created,jobs_tb.name ,jobs_tb.slug,jobs_tb.salary_min,jobs_tb.salary_max,jobs_tb.industry,jobs_tb.location,jobs_tb.created,jobs_tb.expired');
		$this->db->from(SAVE_JOB_TB." AS save_job_tb");
		$this->db->join(JOBS_TB." AS jobs_tb", "save_job_tb.job_id = jobs_tb.id");
		$this->db->where("save_job_tb.uid",$uid);
		$this->db->where("save_job_tb.type",$type);
		$this->db->order_by('save_job_tb.created', 'desc');
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
    function delete_list_expired_jobs($uid=0){
        if($uid!=0){
            // Just for saved jobs , not applied jobs
            $this->db->flush_cache();
            $result=$this->db->query("SELECT id FROM wz_jobs WHERE expired<'".date('Y-m-d')."' AND id IN (SELECT job_id FROM wz_save_job WHERE uid=$uid)");
            $result = $result->result();
            $arr_id = array();
            foreach($result as $row){
                $arr_id[] = $row->id;
            }
            $this->db->flush_cache();
            if(count($arr_id)>0){
                $this->db->where('uid',$uid);
                $this->db->where_in('job_id',$arr_id);
                $this->db->where('type','save');
                $this->db->delete(SAVE_JOB_TB);    
            }
        }
    }
	
	function get_tags($mid='',$nid='',$array_tid='',$limit=3){
		$this->db->select('tags_join_tb.nid,tags_join_tb.mid,tags_tb.name');
		$this->db->from(TAGS_JOIN_TB." AS tags_join_tb");
		$this->db->join(TAGS_TB." AS tags_tb", "tags_join_tb.tid = tags_tb.id");
		$this->db->where("tags_join_tb.mid",$mid);
		$this->db->where("tags_join_tb.nid",$nid);
		if(!empty($array_tid)){
			$this->db->where_in("tags_join_tb.tid",$array_tid);
		}
		$this->db->limit($limit);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function get_list_award2($page=-1,$limit=-1){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('*');
		}
		$this->db->where("status",1);
		if($limit == -1){
			
		}else{
			$this->db->order_by('id', 'desc');
			$this->db->limit($limit,$page);
		}
		$query= $this->db->get(AWARD_TB);

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
    function get_list_clients($page=-1,$limit=-1, $get){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('wz_client.*,wz_industry.name_vi as indus_vi , wz_industry.name_en as indus_en ');
		}
		$this->db->join('wz_industry','wz_client.industry_id = wz_industry.id','left');
		$this->db->where("wz_client.status",1);
        if(!empty($get['k'])){
            $keyword = $get['k'];
            $lang_name = 'wz_client.'.language('name');
            $lang_industry = language('industry');
            $this->db->like($lang_name,$keyword);
            //$this->db->or_like($lang_industry,$keyword);
        }
        if(isset($get['r'])){
            $range = $get['r'];
            $lang_name = 'wz_client.'.language('name');
            $name=language('name');
            switch($range){
                case 'a-d': $where="(`wz_client`.`{$name}` like 'a%' OR `wz_client`.`{$name}` like 'b%' OR `wz_client`.`{$name}` like 'c%' OR `wz_client`.`{$name}` like 'd%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'a','after');
                            $this->db->or_like($lang_name,'b','after');
                            $this->db->or_like($lang_name,'c','after');
                            $this->db->or_like($lang_name,'d','after');*/
                            break;
                case 'e-h': $where="(`wz_client`.`{$name}` like 'e%' OR `wz_client`.`{$name}` like 'f%' OR `wz_client`.`{$name}` like 'g%' OR `wz_client`.`{$name}` like 'h%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'e','after');
                            $this->db->or_like($lang_name,'f','after');
                            $this->db->or_like($lang_name,'g','after');
                            $this->db->or_like($lang_name,'h','after');*/
                            break;
                case 'i-l': $where="(`wz_client`.`{$name}` like 'i%' OR `wz_client`.`{$name}` like 'j%' OR `wz_client`.`{$name}` like 'k%' OR `wz_client`.`{$name}` like 'l%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'i','after');
                            $this->db->or_like($lang_name,'j','after');
                            $this->db->or_like($lang_name,'k','after');
                            $this->db->or_like($lang_name,'l','after');*/
                            break;
                case 'm-p': $where="(`wz_client`.`{$name}` like 'm%' OR `wz_client`.`{$name}` like 'n%' OR `wz_client`.`{$name}` like 'o%' OR `wz_client`.`{$name}` like 'p%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'m','after');
                            $this->db->or_like($lang_name,'n','after');
                            $this->db->or_like($lang_name,'o','after');
                            $this->db->or_like($lang_name,'p','after');*/
                            break;
                case 'q-t': $where="(`wz_client`.`{$name}` like 'q%' OR `wz_client`.`{$name}` like 'r%' OR `wz_client`.`{$name}` like 's%' OR `wz_client`.`{$name}` like 't%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'q','after');
                            $this->db->or_like($lang_name,'r','after');
                            $this->db->or_like($lang_name,'s','after');
                            $this->db->or_like($lang_name,'t','after');*/
                            break;
                case 'u-x': $where="(`wz_client`.`{$name}` like 'u%' OR `wz_client`.`{$name}` like 'v%' OR `wz_client`.`{$name}` like 'w%' OR `wz_client`.`{$name}` like 'x%')";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'u','after');
                            $this->db->or_like($lang_name,'v','after');
                            $this->db->or_like($lang_name,'w','after');
                            $this->db->or_like($lang_name,'x','after');*/
                            break;
                case 'y-z': $where="(`wz_client`.`{$name}` like 'y%' OR `wz_client`.`{$name}` like 'z%') ";
                			$this->db->where($where, NULL, FALSE);
                			/*$this->db->like($lang_name,'y','after');
                            $this->db->or_like($lang_name,'z','after');*/
                            break;
            }
        }
        if($get['i']!=''){
            $indus = $get['i'];
            //$lang_industry = language('industry');
            $this->db->where('wz_client.industry_id',$indus);
        }
		if($limit == -1){
			
		}else{

			$this->db->order_by($lang_name, 'asc');
			$this->db->limit($limit,$page);
		}
		$query= $this->db->get(CLIENT_TB);
		//pr($this->db->last_query(),1);
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
    function get_list_partner($page=-1,$limit=-1, $get){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('*');
		}
		$this->db->where("status",1);
		$lang_name = language('name');
        if(isset($get['r'])){
            $range = $get['r'];
            
            switch($range){
                case 'a-d': $this->db->like($lang_name,'a','after');
                            $this->db->or_like($lang_name,'b','after');
                            $this->db->or_like($lang_name,'c','after');
                            $this->db->or_like($lang_name,'d','after');
                            break;
                case 'e-h': $this->db->like($lang_name,'e','after');
                            $this->db->or_like($lang_name,'f','after');
                            $this->db->or_like($lang_name,'g','after');
                            $this->db->or_like($lang_name,'h','after');
                            break;
                case 'i-l': $this->db->like($lang_name,'i','after');
                            $this->db->or_like($lang_name,'j','after');
                            $this->db->or_like($lang_name,'k','after');
                            $this->db->or_like($lang_name,'l','after');
                            break;
                case 'm-p': $this->db->like($lang_name,'m','after');
                            $this->db->or_like($lang_name,'n','after');
                            $this->db->or_like($lang_name,'o','after');
                            $this->db->or_like($lang_name,'p','after');
                            break;
                case 'q-t': $this->db->like($lang_name,'q','after');
                            $this->db->or_like($lang_name,'r','after');
                            $this->db->or_like($lang_name,'s','after');
                            $this->db->or_like($lang_name,'t','after');
                            break;
                case 'u-x': $this->db->like($lang_name,'u','after');
                            $this->db->or_like($lang_name,'v','after');
                            $this->db->or_like($lang_name,'w','after');
                            $this->db->or_like($lang_name,'x','after');
                            break;
                case 'y-z': $this->db->like($lang_name,'y','after');
                            $this->db->or_like($lang_name,'z','after');
                            break;
            }
        }
		if($limit == -1){
			
		}else{
			$this->db->order_by('order', 'asc');
			$this->db->limit($limit,$page);
		}
		$query= $this->db->get(PARTNERS_TB);

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

	function get_list_award($page=-1,$limit=-1, $get){
		if($limit == -1){
			$this->db->select('count(*) as sum');
		}else{
			$this->db->select('*');
		}
		$lang_name = language('name');
		$this->db->where("status",1);
        
		if($limit == -1){
			
		}else{
			$this->db->order_by($lang_name, 'asc');
			$this->db->limit($limit,$page);
		}
		$query= $this->db->get(ABOUT_AWARD_TB);

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
	
	function return_field($table = JOBS_TB,$where = '', $field= ''){
		$this->db->select('data_tb.'.$field);
		$this->db->from($table." AS data_tb");
		if($where){
			$this->db->where($where);
		}
		$query = $this->db->get();
		if($query->row())
		{
			return $query->row()->$field;
		}
		else
		{
			return false;
		}			
	}
	function match_jobs($uid = 0,$lang='en',$limit = ''){
		$name = $this->name;
		$result_jobs = array();
		$array_id = array();
		$result = $this->model->fetch('work_experience_id', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc",0,3);
	
		if(!empty($result)){
			foreach($result as $r){
				if(!empty($r->work_experience_id)){
					$push = json_decode($r->work_experience_id);
					if(!empty($push)){
						foreach($push as $p){
							$work_experience[] = $p;
						}
					}					
				}
			}
			if(!empty($work_experience)){
				$implode = implode(',',$work_experience);
				$experience = $this->model->fetch('title', WORK_EXPERIENCE_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` IN ($implode)","created","desc",0,3);
				if(!empty($experience)){
					foreach($experience as $exp){
						$res = $this->search_name_jobs(JOBS_TB,$exp->title,$limit);
						if(!empty($res)){
							foreach($res as $es){
								$es->name_type = 'Your CV';
								$array_id[] = $es->id;
								$result_jobs[] = $es;
							}
						}
					}
				}
			}
		}
	
		$arr_id = !empty($array_id)?implode(',',$array_id):'';
		$result_job_alert = $this->model->fetch('id,job_title', JOB_ALERT_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc");		
		if(!empty($result_job_alert)){
			foreach($result_job_alert as $job_alert){
				$alert = $this->search_name_jobs(JOBS_TB,$job_alert->job_title,$limit,$arr_id);
				if(!empty($alert)){
					foreach($alert as $al){
						$al->name_type = 'Jobs Alert';
						$result_jobs[] = $al;
					}
					
				}
			}
		}
		
		return !empty($result_jobs)? array_splice($result_jobs,0 ,3): array();
	}
	function search_name_jobs($table = JOBS_TB, $name= '',$limit='',$arr_id=''){
		$name_lang = $this->name;
		$this->db->select('data_tb.*');
		$this->db->from($table." AS data_tb");
		//$this->db->join(LOCATION_TB." AS location_tb", "data_tb.location_id = location_tb.id");
		$this->db->where("data_tb.status = 1");
		if($arr_id){
			$this->db->where("data_tb.id NOT IN ($arr_id)");
		}
		$this->db->where("data_tb.name LIKE '%{$name}%'");
		if($limit){
			$this->db->limit($limit);
		}
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
	
	function insert_subscribe($email='', $c_id = 0, $category = '',$link='',$name_link=''){
		$slug=language('slug');
		$name=language('name');
		$this->db->where($slug,$name_link);
		$kq=$this->db->get(INFORMATION_CATEGORY_TB)->row_array();
		$name_link=$kq[$name];
		$uid = $this->session->userdata('uid');
		$data= array(
			'uid'			=> $uid,
			'email'			=> $email,
			'c_id'			=> $c_id,
			'category'		=> $category,
			'link'			=> $link,
			'name_link'		=> $name_link,
			'status'		=> 1,
			'changed'		=> NOW,
			'created'		=> NOW
		);
		if($this->db->insert(SUBSCRIBE_TB, $data)){
			$id = $this->db->insert_id();			
			return true;
		}
		else
		{
			return false;
		}	
	}

}
?>