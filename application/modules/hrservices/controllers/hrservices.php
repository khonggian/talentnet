<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hrservices extends MX_Controller {
	private $module = 'hrservices';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index(){
		$slug= mysql_real_escape_string($this->uri->segment(2));
		$category= $this->model->get('*', NEWS_CATEGORY_TB, "slug = '{$slug}' AND status = 1");
		if(!empty($category)){
			$pageSize= 10;$pageNum= (int)$this->input->get('p');
			if($pageNum<=1) $pageNum=1;	
			$totalRows= $this->model->list_category(-1,-1, $category->id);	
			$startRow = ($pageNum - 1) * $pageSize;
			$totalPage= ceil($totalRows/$pageSize);
			if($pageNum>$totalPage) redirect(PATH_URL);	
			$pagination= pagination($totalRows, $pageSize, $pageNum , 3);
			$result= $this->model->list_category($pageSize, $startRow, $category->id);
		
			$data= array(
				'head_text'		=> $category->text,
				'category'		=> $category,
				'result'		=> $result,
				'pagination'	=> $pagination
			);

			$this->template->write('title', $category->name);
			$this->template->write_view('content','FRONTEND/category',$data);
			$this->template->render();	
		}
	}
	
	function detail(){
		$slug= mysql_real_escape_string($this->uri->segment(3));
		$result= $this->model->get_detail($slug);
		
		if(!empty($result)){
			$other= $this->model->get_other($result);
			$data= array(
				'result'	=> $result,
				'other'		=> $other
			);
			$this->template->write('meta_description', $result->description);
			$this->template->write('meta_keywords', $result->title);
			$this->template->write('meta_image', img(DIR_NEWS_IMAGE.$result->image,100,100));
			
			$this->model->view($result);
			$this->template->write('title', $result->title);
			$this->template->write_view('content','FRONTEND/detail',$data);
			$this->template->render();			
		}
	}
	
	function test(){
		$data= array();
	
		$this->template->write('title', '');
		$this->template->write_view('content','FRONTEND/test',$data);
		$this->template->render();	
	}
}