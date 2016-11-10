<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jobs extends MX_Controller {
	private $module = 'jobs';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
		$this->load->model('home/home_model','home_model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index(){
		//$in_the_news = $this->model->fetch('*', INFOMATION_TB ,"`status` = 1 AND `category_id` = 2 AND `is_home` = 1","created","desc",0,5);
		$in_the_news = $this->model->fetch('*', SHARING_CORNER_TB ,"`status` = 1 ","created","desc",0,5);
		/* $slug = language('slug');
		if(!empty($in_the_news)){
			foreach($in_the_news as $the_news){
				$category = $this->model->get('*', INFORMATION_CATEGORY_TB ,"`status` = 1 AND `id` = '{$the_news->category_id}'");
				$slug_category = !empty($category)?$category->$slug:'';
				$the_news->link = PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$slug_category.'/'.$the_news->$slug;
			}
		}*/
		$data= array(
			'title'					=> lang('Candidates'),
			'in_the_news'			=> $in_the_news,
			'language_link' 		=> filter_link($this->current_lang,'search_job',1),
			'function_job' 			=> $this->model->fetch('id,name,slug', FUNCTION_JOB_TB ,"`status` = 1"),
			'industry_job' 			=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', INDUSTRY_JOB_TB ,"`status` = 1"),
			'level_job' 			=> $this->model->fetch('id,name,slug', LEVEL_JOB_TB ,"`status` = 1"),
			'location' 				=> $this->model->fetch('id,name,slug', LOCATION_TB ,"`status` = 1", "porder DESC, slug", "ASC"),
			'result_jobs' 			=> $this->model->fetch('*', JOBS_TB ,"`status` = 1 AND `hot` = 1","created","desc", 0 ,20),

		);

		$this->template->add_js('assets/js/candidate.js');
		//$this->template->write('title', lang('Candidates'));
		$link=$this->uri->uri_string();
		$seo=$this->model->get('*','wz_seo',"`url` = '{$link}' ");
		if($seo){
			/*$this->template->write('meta_keywords', $seo->meta_keywords);
			$this->template->write('meta_description', $seo->meta_description);
			$this->template->write('meta_image', $seo->meta_image);*/
			$this->template->write('title', $seo->meta_title);
		}
		$this->template->write_view('content','FRONTEND/index',$data);
		$this->template->render();	
	}
	function check_cv(){
		$uid = $this->session->userdata('uid');
		$your_cv = $this->model->fetch('id,slug_cv,work_experience_id,created', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc",0,3);
		$sql=$this->db->last_query();
		if(!empty($your_cv)){		
			$slug=$this->input->post('slug');
			$result  = $this->model->get_result('slug',$slug);
			echo json_encode($result);
		}else{
			$array=array('id'=>0);
			echo json_encode($array);;
		}
	}
	function detail($slug=''){
		$uid = $this->session->userdata('uid');
		$slug_languae = $this->slug_lang;
		$slug = filter_input_xss($slug);
		$slug_name=$slug;
		$result  = $this->model->get_result('slug',$slug);
		if(empty($result)){
			redirect(PATH_URL_LANG.($this->current_lang == 'en' ?'search-job':'tim-kiem-viec-lam'));
		}
		$this->db->update(NOTIFICATION_TB, array('is_viewed'=>1), array('nid' => $result->id,'type'=>'job_alert'));
		$name = language('name');
		$job_description = language('job_description');
		$slug_lang = language('slug',$this->other_lang);
		$result->save = $this->model->get('id', SAVE_JOB_TB, "`status` = 1 AND `uid` = '{$uid}' AND `job_id` = '{$result->id}' AND `type` = 'save'");
		$result->apply = $this->model->get('*', SAVE_JOB_TB, "`status` = 1 AND `uid` = '{$uid}' AND `job_id` = '{$result->id}' AND `type` = 'apply'");
		$your_cv = $this->model->fetch('id,slug_cv,work_experience_id,created', YOUR_CV_TB ,"`status` = 1 AND `uid` = '{$uid}'","created","desc",0,3);
		if(!empty($your_cv)){
			foreach($your_cv as $cv){
				$push = json_decode($cv->work_experience_id);
				if(!empty($push)){
					$experience = $this->model->get('title', WORK_EXPERIENCE_TB ,"`status` = 1 AND `uid` = '{$uid}' AND `id` = '{$push[0]}'");
					$cv->experience = !empty($experience)?$experience->title:'';
				}
			}
			
		}
		if($this->session->userdata('views') != $result->slug){
			$this->session->set_userdata('views',$slug);
			$data_view['views'] = $result->views + 1;
			$this->db->where('id', $result->id);
			$this->db->update(JOBS_TB, $data_view);
			
		}
		
		$data= array(
			'slug_name'				=> $slug_name,
			'title'					=> $result->name,
			'language_link' 		=> ($this->current_lang == 'vi' ? 'job' : 'viec-lam').'/'.$result->slug,
			'result'				=> $result,
			'your_cv'				=> $your_cv,
			'upload_cv'				=> $this->model->fetch('*', UPLOAD_CV_TB, "uid = '{$this->session->userdata('uid')}' AND status = 1", "id", "DESC"),
			'related_jobs'			=> $this->model->related_jobs($result,$result->id,'name',$result->name)
		);
		$this->template->write('meta_description', CutText(strip_tags(htmlspecialchars($result->job_description,ENT_QUOTES)),100));
		$this->template->write('meta_keywords', $result->name);
		$this->template->write('title', $result->name);
		$this->template->write_view('content','FRONTEND/detail',$data);
		$this->template->render();	
	}
	
	function search_job($param=''){

		$uid = $this->session->userdata('uid');
		$array_tid = array();
		$get_param = explode('+',$param);

		$get = array(
			'function_job' 		=> (!empty($get_param[1])?$get_param[1]!='all'?filter_input_xss($get_param[1],1):'':''),
			'industry_job' 		=> (!empty($get_param[2])?$get_param[2]!='all'?filter_input_xss($get_param[2],1):'':''),
			'level_job' 		=> (!empty($get_param[3])?$get_param[3]!='all'?filter_input_xss($get_param[3],1):'':''),
			'location' 			=> (!empty($get_param[4])?$get_param[4]!='all'?filter_input_xss($get_param[4],1):'':'')
		);
		
		$keyword_slug = (!empty($get_param[0])?($get_param[0]=='all-jobs' || $get_param[0]=='tat-ca-viec-lam') ? filter_link($this->current_lang,'all_jobs',1): filter_input_xss(urldecode($get_param[0])):'');
		$keyword = (!empty($get_param[0])?($get_param[0]=='all-jobs' || $get_param[0]=='tat-ca-viec-lam')?'':filter_input_xss(urldecode($get_param[0])):'');
		$salary_min = (!empty($get_param[5])?is_numeric($get_param[5])?intval($get_param[5]):0:0);
		$salary_max = (!empty($get_param[6])?is_numeric($get_param[6])?intval($get_param[6]):0:0);
		$data_array_pid = $this->model->filter_category_job($this->current_lang, $get);
		$pageNum = $this->input->get('p')?$this->input->get('p'):0;
		$pageSize = $this->input->get('pz')?$this->input->get('pz'):10;
		$totalRows = $this->model->search_result(-1, -1,$data_array_pid, $this->uri->segment(1), $keyword, $salary_min, $salary_max);
		$pagination = pagelistLimited($totalRows, $pageNum, $pageSize);
		
		if ($pageNum == '')
		$pageNum = 1;
		$startRow = ($pageNum - 1) * $pageSize;		
		$result = $this->model->search_result($pageSize, $startRow,$data_array_pid, $this->uri->segment(1), $keyword, $salary_min, $salary_max);
		
		if(!empty($result)){
			foreach($result as $r){
				$r->save = $this->model->get('id', SAVE_JOB_TB, "`status` = 1 AND `uid` = '{$uid}' AND `job_id` = '{$r->id}' AND `type` = 'save'");
			}
		}
		$_slug = $this->model->filter_category_job($this->current_lang, $get, 'get_slug');
		
		$language_link = ($this->current_lang == 'vi' ?'search-job':'tim-kiem-viec-lam').'/'.$keyword_slug.(!empty($_slug['function_job'])?'+'.$_slug['function_job']:'').(!empty($_slug['industry_job'])?'+'.$_slug['industry_job']:'').(!empty($_slug['level_job'])?'+'.$_slug['level_job']:'').(!empty($_slug['location'])?'+'.$_slug['location']:'').(!empty($salary_min)?'+'.$salary_min:'').(!empty($salary_max)?'+'.$salary_max:'').($this->input->get('p')?'?p='.$pageNum:'').($this->input->get('pz') ? $this->input->get('p') ? '&pz='.$pageSize:'?pz='.$pageSize:'');

		$data= array(
			'title' 			=> lang('Job_Search'),
			'result' 			=> $result,
			'pagination' 		=> $pagination,
			'totalRows' 		=> !empty($totalRows)?$totalRows:'',
			'language_link' 	=> $language_link,
			'keyword' 			=> ($keyword =='all-jobs' || $keyword =='tat-ca-viec-lam')?'':$keyword,
			's_min' 			=> $salary_min?$salary_min:'',
			's_max' 			=> $salary_max?$salary_max:'',
			'get' 				=> $get,
			'function_job' 		=> $this->model->fetch('id,name,slug', FUNCTION_JOB_TB ,"`status` = 1"),
			'industry_job' 		=> $this->model->fetch('id,name_vi,name_en,slug_vi,slug_en', INDUSTRY_JOB_TB ,"`status` = 1"),
			'level_job' 		=> $this->model->fetch('id,name,slug', LEVEL_JOB_TB ,"`status` = 1"),
			'location' 			=> $this->model->fetch('id,name,slug', LOCATION_TB ,"`status` = 1")
		);

		$this->template->add_js('assets/js/candidate.js');
		$this->template->write('title', lang('Job_Search'));
		$this->template->write_view('content','FRONTEND/list',$data);
		$this->template->render();	
	}
	
	
}