<?php 
class Linkedin_modules extends MX_Controller{ 
	var $data;
	public function __construct(){ 
		parent::__construct(); 
        $this->data['appKey'] = '75iki7qbi6yba3';
        $this->data['appSecret'] = 'S5DhM9pGviNcX2WY';
        $this->data['callbackUrl'] = site_url() . $this->uri->segment(1).'/linkedin_modules/data/abc';
        $this->load->library('linkedin');
        $this->load->model('linkedin_model','model');
	} 
	public function index(){ 
		$this->load->view('index');
	} 
	function data() {
        if (isset($_GET['code'])) {
            if(!$this->session->userdata('token')){
                $code=$_GET['code'];
                $array=$this->linkedin->getAccessToken($code);
                $this->session->set_userdata('token',$array['access_token']);
            }else{
                $profile_fileds = array(
                    'id',
                    'firstName',
                    'maiden-name',
                    'lastName',
                    'picture-url',
                    'email-address',

                );
                $access_token=$this->session->userdata('token');
                $info = $this->linkedin->fetch('GET', '/v1/people/~:(' . implode(',', $profile_fileds) . ')' , $access_token );
                $this->model->linkedin($info );
                $redirect_link = $this->session->userdata('referrer')? $this->session->userdata('referrer'):PATH_URL_LANG;
                echo '<script type="text/javascript">window.opener.Page.redirect("'.$redirect_link.'");window.close();</script>';
            }
        } else {
                $this->linkedin->getAuthorizationCode();
            
        }        
    }
} 
?>