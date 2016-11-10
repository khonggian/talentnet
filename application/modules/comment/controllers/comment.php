<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment extends MX_Controller {
	private $module = 'comment';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){
		$nid= 1;
		$type= 'news';
		$limit= 10;
		$point= ($this->input->post('point')) ? $this->input->post('point') : 0;
		$pageNum= $this->input->post('page');
		if($pageNum <= 1) $pageNum=1;
		$totalRow = $this->model->getCount($nid, $type);
		$totalPage= ceil($totalRow/$limit);
		
		$data= array(
			'totalPage'			=> $totalPage,
			'pageNum'			=> 1,
			'comment'			=> $this->model->getTopComment($nid, $type)
		);

		$this->load->view('FRONTEND/comment', $data);
	}
	
	function post(){
		$uid= $this->session->userdata('uid');
		$uid= 1;
		$type= filter_input_xss($this->input->post('type'));
		$nid= filter_input_xss($this->input->post('nid'));
		$pid= (int)$this->input->post('pid');
		$content= filter_input_xss($this->input->post('content'));
		
		if(!empty($uid)){
			$data= array(
				'pid'		=> $pid,
				'nid'		=> $nid,
				'uid'		=> $uid,
				'type'		=> $type,
				'content'	=> $content,
				'changed'	=> NOW,
				'created'	=> NOW
			);
			$this->db->insert(COMMENT_TB, $data);

			$limit= 10;
			$point= ($this->input->post('point')) ? $this->input->post('point') : 0;
			$pageNum= $this->input->post('page');
			if($pageNum <= 1) $pageNum=1;
			$totalRow = $this->model->getCount($nid, $type);
			$totalPage= ceil($totalRow/$limit);
			$pageNext= ($totalPage >= ($pageNum + 1)) ? $pageNum + 1 : 0;
			$startRow = ($pageNum - 1) * $limit;			
			$comment= $this->model->getLoadComment($nid, $type, $point, $limit, $startRow, $pageNum);
			$data= array(
				'load'		=> TRUE,
				'pageNext'	=> $pageNext,
				'comment'	=> $comment,
				'pageNum'	=> $pageNum
			);
			
			$json= array(
				'st'		=> 'SUCCESS',
				'html'		=> $this->load->view('FRONTEND/comment', $data, true),
				'pageNum'	=> $pageNum
			);
			print_r(json_encode($json));
		}
	}
	
	function load(){
		$type= filter_input_xss($this->input->post('type'));
		$nid= filter_input_xss($this->input->post('nid'));
		
		$limit= 10;
		$point= ($this->input->post('point')) ? $this->input->post('point') : 0;
		$pageNum= $this->input->post('page');
		if($pageNum <= 1) $pageNum=1;
		$totalRow = $this->model->getCount($nid, $type);
		$totalPage= ceil($totalRow/$limit);	
		$pageNext= ($totalPage >= ($pageNum + 1)) ? $pageNum + 1 : 0;

		$startRow = ($pageNum - 1) * $limit;	
		$comment= $this->model->getLoadComment($nid, $type, $point, $limit, $startRow, $pageNum);
		$data= array(
			'load'			=> TRUE,
			'comment'		=> $comment,
			'pageNum'		=> $pageNum
		);		
		$json= array(
			'st'		=> 'SUCCESS',
			'html'		=> $this->load->view('FRONTEND/comment', $data, true),
			'pageNext'	=> $pageNext
		);
		print_r(json_encode($json));		
	}
}
