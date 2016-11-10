<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fb extends MX_Controller {
	private $module = 'fb';
	private $config_fb;
	
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
		
		$this->template->add_js('assets/js/facebook.js');			
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){
		$this->model->checkLogin();

		$data= array();
		$this->template->write('title', 'Cấp quyền');
		$this->template->write_view('content', 'FRONTEND/index', $data);
		
		$this->template->render();
	}
	
	function home(){
		$data= array();
		$this->template->write('title', 'Trang chủ');
		$this->template->write_view('content', 'FRONTEND/home', $data);
		$this->template->render();		
	}
	
	function run(){
		$this->load->library('Form_validation');
		$data= array(
			'token'	=> $this->form_validation->create_csrf(time(), "secure", false)
		);
		$this->load->view('FRONTEND/run', $data);
	}
	
	function share(){
		$to= $this->input->post('to');
		if(!is_array($to)) exit();
		
		$param_post= array(
			'message'		=> "This is my message",
			'name'			=> "This is my title",
			'caption'      	=> "My Caption",
			'description' 	=> "Some Description...",
			'link'         	=> "http://stackoverflow.com",
			'picture'      	=> "http://colorvisiontesting.com/plate%20with%205.jpg",
			'tags'		   	=> implode(',' , $to)
		);
		$post= $this->model->postWall($param_post);
		$json= array(
			'st'	=> 'SUCCESS',
			'post'	=> $post
		);
		print_r(json_encode($json));
	}
	
	function nolike(){
		$this->load->view('FRONTEND/nolike');
	}
	
	function tracking(){
		$this->load->view('FRONTEND/tracking');
	}
		
	function post_test(){
		//100003485932484
		// $param_photo= array(
				// 'fb_id'				=> 1434724690,
				// 'file'				=> 'test.jpg',
				// 'album_name'		=> 'TSL',
				// 'album_message'		=> '',
				// 'photo_message'		=> 'Photo APIA'
		// );

		// $photo= $this->model->uploadPhoto($param_photo);
		// pr($photo,1);
	
		// $param= array(
			// 'message'	=> "This is my message",
			// 'name'		=> "This is my title",
			// 'caption'      => "My Caption",
			// 'description'  => "Some Description...",
			// 'link'         => "http://stackoverflow.com",
			// 'picture'      => "http://colorvisiontesting.com/plate%20with%205.jpg",
			// 'tags'		   => array(100003485932484)
		// ); 	
		// $tmp= $this->model->postWallFriend($param);
		// pr($tmp,1);
	
		// $param= array(
			// 'message'		=> 'Post Wall API',
			// 'attachment'	=> 'https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/PaperClip4_Black.png',
			// 'caption'		=> 'TSL'
		// );
		// $this->model->postWall($param);
		pr($this->model->getFriend());

	}
}
