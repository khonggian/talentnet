<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Html extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->template->set_template('default');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/
	function index(){
		$this->template->write_view('content', 'index');
		$this->template->render();
	}
	function candidate_jobdetail(){
		$this->template->write_view('content', 'candidate_jobdetail');
		$this->template->render();
	}
	function register(){
		$this->template->write_view('content', 'register');
		$this->template->render();
	}
	function contact(){
		$this->template->write_view('content', 'contact');
		$this->template->render();
	}
	function news_activities(){
		$this->template->write_view('content', 'news_activities');
		$this->template->render();
	}
	function news_detail(){
		$this->template->write_view('content', 'news_detail');
		$this->template->render();
	}
	function about(){
		$this->template->write_view('content', 'about');
		$this->template->render();
	}
	function dashboard(){
		$this->template->write_view('content', 'dashboard');
		$this->template->render();
	}
	function profile(){
		$this->template->write_view('content', 'profile');
		$this->template->render();
	}
	function cvbuilder(){
		$this->template->write_view('content', 'cvbuilder');
		$this->template->render();
	}
	function cvbuilder_preview(){
		$this->template->write_view('content', 'cvbuilder_preview');
		$this->template->render();
	}
	function savedjobs(){
		$this->template->write_view('content', 'savedjobs');
		$this->template->render();
	}
	function career(){
		$this->template->write_view('content', 'career');
		$this->template->render();
	}
	function login(){
		$this->template->write_view('content', 'login');
		$this->template->render();
	}
	function candidate_signin(){
		$this->template->write_view('content', 'candidate_signin');
		$this->template->render();
	}
	function hrservices(){
		$this->template->write_view('content', 'hrservices');
		$this->template->render();
	}
	function faq(){
		$this->template->write_view('content', 'faq');
		$this->template->render();
	}
	function ataglance(){
		$this->template->write_view('content', 'ataglance');
		$this->template->render();
	}
	function onlinepayroll(){
		$this->template->write_view('content', 'onlinepayroll');
		$this->template->render();
	}
	function salarycalculator(){
		$this->template->write_view('content', 'salarycalculator');
		$this->template->render();
	}
	function team(){
		$this->template->write_view('content', 'team');
		$this->template->render();
	}
	function carrer_at_talent(){
		$this->template->write_view('content', 'carrer_at_talent');
		$this->template->render();
	}
	function carrer_at_talent_detail(){
		$this->template->write_view('content', 'carrer_at_talent_detail');
		$this->template->render();
	}
	function talent_candi_joblist(){
		$this->template->write_view('content', 'talent_candi_joblist');
		$this->template->render();
	}
	function talent_candi_joblist_signin(){
		$this->template->write_view('content', 'talent_candi_joblist_signin');
		$this->template->render();
	}
	function team_detail(){
		$this->template->write_view('content', 'team_detail');
		$this->template->render();
	}

    function clients(){
		$this->template->write_view('content', 'clients');
		$this->template->render();
	}

	function manager_cv(){
		$this->template->write_view('content', 'manager_cv');
		$this->template->render();
	}
	function upload_cv(){
		$this->template->write_view('content', 'upload_cv');
		$this->template->render();
	}
	function salary_employer(){
		$this->template->write_view('content', 'salary_employer');
		$this->template->render();
	}
	function jobalert(){
		$this->template->write_view('content', 'jobalert');
		$this->template->render();
	}
	function inthenews_detail(){
		$this->template->write_view('content', 'inthenews_detail');
		$this->template->render();
	}

}