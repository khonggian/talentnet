<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends MX_Controller {
	private $module = 'user';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){	
		$data= array();
		$this->template->write('title', 'User');
		$this->template->write_view('content', 'FRONTEND/index', $data);
		$this->template->render();
	}
	
	function OpenID($type){
		$type= filter_input_xss($type);
		$code= $this->input->get('code');
		$access_token= '';

		$info= getInfoOpenID($type, $code, $access_token);
		switch($type){
			case('facebook'):
					$this->model->facebook($info, $access_token);
				break;
			case('google'):
					$this->model->google($info, $access_token);
				break;
			case('yahoo'):
					$this->model->yahoo($info, $access_token);
				break;
			case('linkedin'):
					$this->model->linkedin($info);
				break;
		}
		
		$redirect_link = $this->session->userdata('referrer')? $this->session->userdata('referrer'):PATH_URL_LANG;
		echo '<script type="text/javascript">window.opener.Page.redirect("'.$redirect_link.'");window.close();</script>';
	}
	
	function login(){
		if($this->session->userdata('uid')){
			redirect(PATH_URL_LANG);
		}
		$this->load->library('user_agent');
		if ($this->agent->is_referral()){
			$this->session->set_userdata('referrer', $this->agent->referrer());
		}
		$data= array(
			'language_link' 	=> filter_link($this->current_lang,'login',1)
		);
		$this->template->write('title', 'Login User');
		$this->template->write_view('content', 'FRONTEND/login', $data);
		$this->template->render();
	}
    function forgot(){
        if($this->session->userdata('uid')){
			redirect(PATH_URL_LANG);
		}
   	    $data= array(
			'language_link' 	=> filter_link($this->current_lang,'forgot',1)
		);
		$this->template->write('title', 'Forgot Password');
		$this->template->write_view('content', 'FRONTEND/forgot', $data);
		$this->template->render();
    }
	function profile(){
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('*', USER_TB, "id = '{$uid}'");
		if(!$uid || empty($user)){
			redirect(PATH_URL_LANG.($this->current_lang == 'vi' ? 'dang-nhap' : 'login'));
		}
		$data= array(
			'user' 				=> $user,
			'language_link' 	=> filter_link($this->current_lang,'profile',1)
		);
		$this->template->write('title', 'Profile User');
		$this->template->write_view('content', 'FRONTEND/profile', $data);
		$this->template->render();
	}
	function register(){	
		//$captcha = $this->get_captcha();
		if($this->session->userdata('uid')){
			redirect(PATH_URL_LANG);
		}
		$data= array(
			//'captcha' => $captcha
			'language_link' 	=> filter_link($this->current_lang,'register',1)
		);
		$this->load->library('user_agent');
		if ($this->agent->is_referral()){
			$this->session->set_userdata('referrer', $this->agent->referrer());
		}
		pr($this->session->userdata('referrer'));
		$this->template->write('title', 'Register User');
		$this->template->write_view('content', 'FRONTEND/register', $data);
		$this->template->render();
	}
	function pLogin(){
		$txtEmail = strip_tags(strtolower(mysql_real_escape_string($this->input->post('email'))));
		$txtPassword = md5(strip_tags(mysql_real_escape_string($this->input->post('password'))));
		$error= false;$arr_error= array();$txt= '';
		$this->model->validate_email_md($arr_error, $error, $this->input->post('email'));
		$this->model->validate_password($arr_error, $error);
		if(empty($error)){
			$USER= $this->model->get('*', USER_TB, "(email = '$txtEmail') AND `password` = '$txtPassword'");
			if(!empty($USER)){
				//if($USER->status == 1 && $USER->deactive == 0){
					//SUCCESS
					$this->model->session($USER);
					$this->model->history_ip($USER);

					if($this->input->post('remember')=='on'){
						//REMEMBER
						$cookie= _token();
						setcookie("__email", $USER->email, time()+604800, '/');  /* expire in 7 day */
						setcookie("__password", $this->input->post('txtPassword'), time()+604800, '/');  /* expire in 7 day */

						// $data_user['cookie']= $cookie;
						// $this->db->where('id', $USER->id)->update(USER_TB, $data_user);
					}else{
						setcookie("__email", '', time()-604800, '/');
						setcookie("__password", '', time()-604800, '/');
					}
				// }else{
					// $json= array(
						// 'st' 	=> 'FALSE',
						// 'txt' 	=> 'Tài khoàn này chưa kích hoạt'
					// );
				// }
			}else{
				//FALSE
				$error = 1;
				$arr_error[]= array(
					'field'	=> 'password',
					'txt'	=> lang('email_pass_incorrect')
				);
				$txt = lang('email_pass_incorrect');
			}
		}
		//pr($this->session->userdata('referrer'),1);
		$json= array(
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> $txt,
			'link'		=> $this->session->userdata('referrer')? $this->session->userdata('referrer'):PATH_URL_LANG
		);
		return print_r(json_encode($json));
	}
	function pRegister(){
		$error= false;$arr_error= array();$txt= '';
		$this->model->validate_general_name($arr_error, $error, 'full_name',lang('fullname'));
		$this->model->validate_email_md($arr_error, $error, $this->input->post('email'), 1);
		$this->model->validate_password($arr_error, $error);
		$this->model->validate_re_password($arr_error, $error);
		$this->model->validate_Captcha($arr_error, $error);
		if(empty($error)){
			$this->model->insert_user();
			$data=array(
				'email' => $this->input->post('email') ,
				'subject' => 'Bạn đã đăng ký thành công' ,
				'html' => 'Chào mừng bạn đã đến website talentnet.vn, bạn đã có thể vào web để tạo CV cho mình' 
			);
			$this->model->send_email($data);
		}
        
		$json= array(
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> $txt,
			'referrer'  => $this->session->userdata('referrer')? $this->session->userdata('referrer'):PATH_URL_LANG
		);		
		return print_r(json_encode($json));	
	}
	
	function pForgot(){
		$email= mysql_real_escape_string($this->input->post('email'));$st='FALSE';
		$link = $this->current_lang == 'vi' ? 'xac-nhan-quen-mat-khau' : 'forgot-password';
		$error= false;$arr_error= array();$txt= '';
		$this->model->validate_email_md($arr_error, $error, $this->input->post('email'));
		//CHECK USER
		$USER= $this->model->get('*', USER_TB, "email = '$email'");
		if(!empty($USER) && empty($error)){
			$randomkey = _token();
			$data['randomkey']= $randomkey;
			$this->db->where("id", $USER->id);
			if($this->db->update(USER_TB, $data)){
				//SEND EMAIL
				$link_active = PATH_URL_LANG.$link.'?email='.$USER->email.'&key='.$randomkey;
				$data_html= array(
					'fullname'		=> $USER->fullname,
					'email'			=> $USER->email,
					'link_active'	=> $link_active
				);

				$data_email= array(
					'email'		=> $USER->email,
					'html'		=> $this->load->view('FRONTEND/email/active_forgotpass', $data_html, true),
					'subject'	=> 'Mat khau Talentnet'
				);

				if($this->model->send_email($data_email)){
					$json= array(
						'st'		=> 'SUCCESS',
                        'error'		=> $arr_error,
                        'txt'		=> $txt
					);
				}
			}
		}else{
			$json= array(
				'st'	=> 'FALSE',
                'error'	=> $arr_error,
                'txt'	=> 'Địa chỉ email không tồn tại'
			);
		}
		print_r(json_encode($json));
	}
	
	function active_forgot(){
		$email= 	mysql_real_escape_string($this->input->get('email'));
		$randomkey= mysql_real_escape_string($this->input->get('key'));
		$USER= $this->model->get('*', USER_TB, "email = '$email' AND `randomkey` = '$randomkey'");
		if(!empty($USER)){
			//SEND NEW PASS
			$password= strtoupper(random(10));
			$data= array(
				'password'		=> md5($password),
				'randomkey'		=> md5(uniqid(mt_rand())).md5(time())
			);
			$this->db->where("id", $USER->id);
			if($this->db->update(USER_TB, $data))
			{
				$data_html= array(
					'email'		=> $USER->email,
					'fullname'	=> $USER->fullname,
					'password'	=> $password
				);
				//SEND EMAIL NEW PASS
				$data_email= array(
					'email'		=> $USER->email,
					'html'		=> $this->load->view('FRONTEND/email/forgotpass', $data_html, true),
					'subject'	=> 'Mật khẩu mới'
				);
				if($this->model->send_email($data_email)){
					$data= array(
						'st'		=> 'SUCCESS',
						'message'	=> 'Bạn hãy vào email để nhận lại mật khẩu'
					);
				}else{
					$data= array(
						'st'		=> 'FALSE',
						'message'	=> 'Không thể gửi email ngay lúc này, bạn vui lòng thử lại'
					);
				}
			}
		}else{
			$data= array(
				'st'		=> 'FALSE',
				'message'	=> 'Link kích hoạt không hợp lệ'
			);
		}
		$this->template->write('title', 'Xác nhận quên mật khẩu');
		$this->template->write_view('content', 'FRONTEND/active_forgot', $data);
		$this->template->render();
	}
	
	function pProfile(){
		$uid = $this->session->userdata('uid');
		$user = $this->model->get('*', USER_TB, "id = '{$uid}'");
		if(!empty($user)) {
			$error= false;$arr_error= array();$txt= '';
			$this->model->validate_general_name($arr_error, $error, 'fullname', 'Full Name');
			$this->model->validate_confirm_password($arr_error, $error);
			// $this->model->validate_general_name($arr_error, $error, 'alias', 'Alias');
			//$this->model->validate_email_md($arr_error, $error, $this->input->post('email'), 1, 'wz_user', 'email', $uid);
			//$this->model->validate_password($arr_error, $error);
			if(empty($error)){
				$this->model->update_profile($user);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
				
			return print_r(json_encode($json));	
		}
	}
	
	function logout(){
		$link  = $this->session->userdata('referrer')? $this->session->userdata('referrer'):PATH_URL_LANG;
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('fb_id');
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('fb_access_token');
		$this->session->unset_userdata('token');
		setcookie("__email", '', time()-604800, '/');
		setcookie("__password", '', time()-604800, '/');
		redirect($link);
	}
	
	function captcha(){
		$this->load->library('captcha');
		$this->captcha->render();
	}
	
	function session_captcha(){
		$temp='';
		$transanglap= '';
		
		
		pr($this->session->userdata('captcha'));
	}
	
	function catpcha_test(){
		$this->load->view('FRONTEND/test');
	}
	
	function copy(){
		$avatar= 'https://fbcdn-profile-a.akamaihd.net/static-ak/rsrc.php/v2/yL/r/HsTZSDw4avx.gif';
		curl_copy($avatar, 'tmp.gif');
		// $USER->id= 1;
		// $USER->created= '2014-04-03 10:40:16';
		// $this->model->openid_avatar($USER, $avatar);
	}
	
	function test(){
		$data= "<script type='text/javascript'>alert('a');</script>";
		$data =  filter_input_xss($data, true);	
		pr($data,1);
		exit();
		//https://accounts.google.com/o/oauth2/token?client_id=475371053033-ordmc93b9pemuda0v2sopr8j2e3ip1n9.apps.googleusercontent.com&client_secret=9kiDEcynD21SGIiSQZbOFCHq&redirect_uri=http://climaxi.com/fbdemo/2014/wizardww/openid/google&grant_type=authorization_code&code=4/InsYpqa8GbL6cAHlBuNotnFcD3W1.klYaj78NwsgUXE-sT2ZLcbS1sadDigI
		$param= array(
			'client_id'			=> G_CLIENT_ID,
			'client_secret'		=> G_CLIENT_SECRET,
			//'redirect_uri'		=> base_url().OPENID_REDIRECT_URL.'/google',
			'redirect_uri'		=> 'http://climaxi.com/fbdemo/2014/wizardww/openid/google',
			'grant_type'		=> 'authorization_code',
			'code'				=> '4/Siwzksya1C-X37OUnb-w_J-UuIfr.snOUnztVTeUdXE-sT2ZLcbTTkTNEigI'
		);
		
		$tmp = curl_post('https://accounts.google.com/o/oauth2/token', $param);
		pr($tmp,1);
	}
	
	function token(){
		$token= 'CAACEdEose0cBAMWP47VkdUmtylkpGxm6RT2YIOOSiIp20PeB8a7UyAmpEQZCbybOgmRQkMnlt2yrcA2vUCJKzYckYVCnXG7zVmh9EWCzfag52jLsKqBXiB9B43JPeQxVzSkRZAr98Cbdqcw3nzyWJVcjqqy8vCUtrxEDe9NQVLhBOhnyVU1UhZB3egHQt0ZD';
		
		$extend= getExtendedTokenFB($token);
		pr($extend);
	}
	
	function get_facebook(){
		set_time_limit(0);
		$this->load->model('fb/fb_model', 'fb_model');
		$hashtag= $this->model->fetch('*', FACEBOOK_HASHTAG_TB, "status = 1", "hashtag", "asc");
		if(!empty($hashtag)){
			foreach($hashtag as $row){
				$link= 'https://graph.facebook.com/search?q=%23'.$row->hashtag.'&access_token=CAAHTGv0Wd44BAAwzTYSQLpK9sbi4ZAIjcR1cP0xJT2Xzrr8P3ZBfvxeZAdSRlOyFnCNN8ZBmngYtBhUEtLy63Pnr1bbzqbVYfIeOKaPT4kZA6WglZAy5oA6t7bMyEiJLpdmD6T0QTSzFdbnSAB5ghC16386wsxvYK7tfv5Xhw5xPYaJiEYeMcCXvtMT0vtvSIZD';
				$content= curl_get($link);				
				if(!empty($content)){
					foreach($content->data as $post){
						$exist= $this->model->get('id', FACEBOOK_TB, "post_id = '{$post->id}'");
						
						$photo= '';
						switch($post->type){
							case('photo'):
								$photo= $this->fb_model->getPhotoDetail($post->object_id);
								$photo= (!empty($photo)) ? $photo->src_big : '';
							break;
						}
						
						$data= array(
							'post_id'	=> $post->id,
							'type'		=> $post->type,
							'from'		=> json_encode($post->from),
							'message'	=> (!empty($post->message)) ? $post->message : '',
							'caption'	=> (!empty($post->caption)) ? $post->caption : '',
							'photo'		=> $photo,
							'link'		=> (!empty($post->link)) ? $post->link : $post->actions[0]->link,
							'like'		=> (!empty($post->likes)) ? count($post->likes->data) : 0,
							'changed'	=> date('Y-m-d H:i:s', strtotime($post->updated_time)),
							'created'	=> date('Y-m-d H:i:s', strtotime($post->created_time))
						);
						if(empty($exist)){
							$this->db->insert(FACEBOOK_TB, $data);
						}else{
							$this->db->update(FACEBOOK_TB, $data, "id = '{$exist->id}'");
						}
					}
				}
			}
		}	
	}
	
	function getcontent(){
		$q= $this->input->get('q');
		$link= 'https://graph.facebook.com/search?q=%23'.$q.'&limit=2000&access_token=CAAHTGv0Wd44BAAwzTYSQLpK9sbi4ZAIjcR1cP0xJT2Xzrr8P3ZBfvxeZAdSRlOyFnCNN8ZBmngYtBhUEtLy63Pnr1bbzqbVYfIeOKaPT4kZA6WglZAy5oA6t7bMyEiJLpdmD6T0QTSzFdbnSAB5ghC16386wsxvYK7tfv5Xhw5xPYaJiEYeMcCXvtMT0vtvSIZD';
		$content= curl_get($link);		
		pr($content);
	}
	
	function photo(){
		$object_id= '1379440749002247';
		$this->load->model('fb/fb_model', 'fb_model');
		$photo= $this->fb_model->getPhotoDetail($object_id);
		pr($photo);
	}
	
	function count_like(){
		$url= 'https://www.facebook.com/lap.transang/posts/479890512137142';
		$this->load->model('fb/fb_model', 'fb_model');
		$count= $this->fb_model->countLike($url);		
		pr($count);
	}
	
	function curl(){
		$url= 'http://localhost/project/admin/code/user/post';
		$param= array(
			'title'		=> 'test',
			'message'	=> 'abc',
			'p'			=> 3
		);
		$resp= curl_get($url, $param);
		pr($resp);
	}
	
	function post(){
		$json= $_GET;
		print_r(json_encode($json));
	}
	
	function img(){
		echo img('midu0505109.jpg', 250, 100);
	}
	
	function get_captcha(){
		//session_start();
		$word_1 = '';
		$word_2 = '';
		for ($i = 0; $i < 4; $i++) 
		{
			$word_1 .= chr(rand(97, 122));
		}
		for ($i = 0; $i < 4; $i++) 
		{
			$word_2 .= chr(rand(97, 122));
		}
		$this->session->set_userdata('random_number',$word_1.' '.$word_2);
		$dir = BASEFOLDER.'assets/font/';
		$image = imagecreatetruecolor(200, 50);
		$font = "recaptchaFont.ttf"; // font style
		$color = imagecolorallocate($image, 0, 0, 0);// color
		$white = imagecolorallocate($image, 255, 255, 255); // background color white
		imagefilledrectangle($image, 0,0, 709, 99, $white);
		imagettftext ($image, 22, 0, 5, 30, $color, $dir.$font, $this->session->userdata('random_number'));
		//header("Content-type: image/png");
		imagepng($image);
		ob_start();
		imagepng($image);
		$imagestring = ob_get_contents();
		ob_end_clean();
	}
	
	function test_email(){
		$data= array(
			'email'		=> 'lap.transang@gmail.com',
			'subject'	=> 'Good evening Tran',
			'html'		=> '<strong>Tran Sang Lap</strong>'
		);
		
		pr($this->model->send_email($data));
	}
}
?>