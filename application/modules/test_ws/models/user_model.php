<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends MY_Model {
	
	function facebook($info, $access_token){
		if(!empty($info))
		{
			$avatar= $info->pic_big;
			$data= array(
				'type'				=> 'facebook',
				'fb_id'				=> $info->uid,
				'fullname'			=> $info->name,
				'gender'			=> $info->sex,
				'fb_access_token'	=> $access_token,
				'token'				=> _token(),
				'randomkey'			=> _token(),
				'status'			=> 1,
				'changed'			=> NOW
			);
			
			if(!empty($info->email))
			{
				$data['email']= $info->email;
				$exist_uid= $this->model->get('id', USER_TB, "fb_id = '{$info->uid}'");
				if(!empty($exist_uid)){
					$this->db->update(USER_TB, $data, "id = '{$exist_uid->id}'");
					$uid= $exist_uid->id;
				}else{
					$exist_email= $this->model->get('id', USER_TB, "email = '{$info->email}'");
					if(empty($exist_email))
					{
						$data['created']= NOW;
						$this->db->insert(USER_TB, $data);
						$uid=  $this->db->insert_id();
					}
					else
					{
						$this->db->update(USER_TB, $data, "id = '{$exist_email->id}'");
						$uid= $exist_email->id;
					}
				}
			}
			else
			{
				$exist= $this->model->get('id', USER_TB, "fb_id = '{$info->uid}'");
				if(empty($exist))
				{
					$data['created']= NOW;
					$this->db->insert(USER_TB, $data);
					$uid=  $this->db->insert_id();
				}
				else
				{
					$this->db->update(USER_TB, $data, "id = '{$exist->id}'");
					$uid= $exist->id;
				}
			}

			$USER= $this->get('*', USER_TB, "id = '{$uid}'");
			$this->session($USER);
			$this->openid_avatar($USER, $avatar);
		}
	}
	
	function google($info, $access_token){
		if(!empty($info))
		{
			$avatar= $info->picture;
			$data= array(
				'type'		=> 'google',
				'fullname'	=> $info->name,
				'email'		=> $info->email,
				'gender'	=> $info->gender,
				'token'		=> _token(),
				'randomkey'	=> _token(),				
				'status'	=> 1,
				'changed'	=> NOW
			);			
			$exist= $this->get('id', USER_TB, "email = '{$info->email}'");
			if(empty($exist))
			{
				$data['created']= NOW;
				$this->db->insert(USER_TB, $data);
				$uid=  $this->db->insert_id();				
			}
			else
			{
				$this->db->update(USER_TB, $data, "id = '{$exist->id}'");
			}
			$uid= (!empty($uid)) ? $uid : $exist->id;
			$USER= $this->get('*', USER_TB, "id = '{$uid}'");
			$this->session($USER);			
			$this->openid_avatar($USER, $avatar);
		}
	}
	
	function yahoo($info, $access_token){
		if(!empty($info))
		{
			$avatar= '';
			$data= array(
				'type'		=> 'yahoo',
				'fullname'	=> $info->full_name,
				'email'		=> $info->email,
				'gender'	=> ($info->gender == 'M') ? 'male' : 'female', 
				'token'		=> _token(),
				'randomkey'	=> _token(),				
				'status'	=> 1,
				'changed'	=> NOW
			);			
			$exist= $this->get('id', USER_TB, "email = '{$info->email}'");
			if(empty($exist))
			{
				$data['created']= NOW;
				$this->db->insert(USER_TB, $data);
				$uid=  $this->db->insert_id();				
			}
			else
			{
				$this->db->update(USER_TB, $data, "id = '{$exist->id}'");
			}
			$uid= (!empty($uid)) ? $uid : $exist->id;
			$USER= $this->get('*', USER_TB, "id = '{$uid}'");
			$this->session($USER);			
			$this->openid_avatar($USER, $avatar);
		}		
	}
	
	function openid_avatar($USER, $avatar){
		if(!empty($avatar))
		{
			$created= date('Y/m/', strtotime($USER->created));
			$save= $created.random(32).'.'.ext($avatar);
			newfolder(DIR_UPLOAD_AVATAR.$created);
			if(curl_copy($avatar, DIR_UPLOAD_AVATAR.$save)){
				// /* pr('curl_copy'); */
				$data['avatar']= $save;
				if($this->db->update(USER_TB, $data, "id = '{$USER->id}'")){
					if(!empty($USER->avatar)){
						@unlink(DIR_UPLOAD_AVATAR.$USER->avatar);
					}
				}
			}
			return true;
		}
	}
	
	function validate_password(&$arr_error='', &$error='', $skip=''){
		$password= $this->input->post('password');
		if(!$this->validate_null($arr_error, $t_error, 'password', 'Mật khẩu')){
			$arr_error[]= array(
				'field'	=> 'password',
				'txt'	=> lang('you_enter_password')
			);
		}else{
			if(empty($skip)){
				if(strlen($password)<6){
					$arr_error[]= array(
						'field'	=> 'password',
						'txt'	=> lang('passwords_must_six_characters')
					);
					$t_error= true;
				}/* elseif($password=='123456'){
					$arr_error[]= array(
						'field'	=> 'password',
						'txt'	=> 'Mật khẩu của bạn quá đơn giản'
					);
					$t_error= true;
				} */
			}
		}
		$this->validate_error($error, $t_error);
	}

	function validate_check_password(&$arr_error='', &$error=''){
		$old_password= $this->input->post('old_password');
		$check_user = $this->model->get('*', USER_TB, "`status` = 1 AND save_password = '{$old_password}' AND id = '{$this->session->userdata('ss_user_id')}'");
		if(empty($check_user)){
			$arr_error[]= array(
					'field'	=> 'old_password',
					'txt'	=> lang('old_password_incorrect')
				);
			$t_error= true;
			$this->validate_error($error, $t_error);
		}
	}

	function validate_re_password(&$arr_error='', &$error=''){
		$password= $this->input->post('password');
		$re_password= $this->input->post('re_password');
		if(!empty($password)){
			if($this->validate_null($arr_error, $t_error, 're_password')){
				if($password!=$re_password){
					$arr_error[]= array(
						'field'	=> 're_password',
						'txt'	=> lang('password_confirmation_not_match')
					);
					$t_error= true;
				}
			}else{
				$arr_error[]= array(
					'field'	=> 're_password',
					'txt'	=> lang('enter_password_confirmation'),
				);
			}
		}
		$this->validate_error($error, $t_error);
	}
	
	function insert_user(){
		$data= array(
			'fullname'				=> htmlspecialchars(strip_tags($this->input->post('full_name'))),
			'email'					=> htmlspecialchars(strip_tags($this->input->post('email'))),
			'password'				=> md5($this->input->post('password')),
			'history_ip'			=> getIP(),
			'token'					=> _token(),
			'randomkey'				=> _token(),
			'status'				=> 1,
			'changed'				=> NOW,
			'created'				=> NOW
		);
		if($this->db->insert(USER_TB, $data)){
			$id = $this->db->insert_id();
			$user= $this->get('*', USER_TB, "id = '{$id}'");
			$this->session($user);		
			// $html = $this->load->view('FRONTEND/mail',$data,true);
			// if($this->model->send_email(array('email' => $user->email,'subject' => 'Dược Việt Đúc thông báo','html' => $html))){					
				return true;
			// }
		}
		else
		{
			return false;
		}	
	}
	
	function update_profile($user){
		$data= array(
			'firstname'				=> htmlspecialchars(strip_tags($this->input->post('first_name'))),
			'middlename'			=> htmlspecialchars(strip_tags($this->input->post('middle_name'))),
			'lastname'				=> htmlspecialchars(strip_tags($this->input->post('last_name'))),
			'alias'					=> htmlspecialchars(strip_tags($this->input->post('alias'))),
			//'email'					=> htmlspecialchars(strip_tags($this->input->post('email'))),
			'changed'				=> NOW
		);
        if($this->input->post('password')){
			$data['password'] = md5($this->input->post('password'));
		}
		//$this->db->where('id', $user->id);
		if($this->db->update(USER_TB, $data, "id = '{$user->id}'")){
			$user= $this->get('*', USER_TB, "id = '{$user->id}'");
			$this->session($user);		
			return true;
		}
		else
		{
			return false;
		}	
	}
}
?>