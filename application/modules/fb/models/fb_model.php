<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fb_model extends MY_Model {

	function __construct(){
        $this->config->load("facebook",TRUE);
        $this->config_fb = $this->config->item('facebook');
		$config= $this->config_fb;
		unset($config['scope']);
	
		$this->load->library('facebook', $config);			
		
		if($this->session->userdata('fb_access_token')){
			$this->facebook->setAccessToken($this->session->userdata('fb_access_token'));	
		}
	}
	
	function checkLogin(){
		global $setting;
		$scope= $this->config_fb['scope'];
		$auth_url = "http://www.facebook.com/dialog/oauth?" 
							. "client_id=" . FB_APP_ID 
							. "&redirect_uri=" . urlencode(FB_APP_LINK) 
							. "&response_type=token" 
							. "&scope=".$scope;	
							
		$signed_request = (isset($_REQUEST["signed_request"])) ? $_REQUEST["signed_request"] : '';
		
		if(empty($signed_request) || ($this->facebook->getUser() == 0))
		{
			echo html_entity_decode($setting->tracking);
			echo("<script> top.location.href='" . $auth_url . "'</script>");
			exit();
		}

		list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
		$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);	
		
		if(empty($data['page']['liked'])){
			redirect(base_url().'fb/nolike');
		}
	
		$extend_token= getExtendedTokenFB($data['oauth_token']);

		$this->facebook->setAccessToken($data['oauth_token']);	
		$this->session->set_userdata('fb_id', $data['user_id']);
		$this->session->set_userdata('fb_access_token', $extend_token);
		$USER= $this->getUserInfo();

		if(!empty($USER))
		{
			$this->updateUser($USER);
		}
		else
		{
			exit();
		}
	}	
	
	function postWall($param){
		/* 
		param example
		$param= array(
			'message'		=> 'Post Wall API',
			'attachment'	=> 'https://cdn1.iconfinder.com/data/icons/softwaredemo/PNG/256x256/PaperClip4_Black.png',
			'caption'		=> 'TSL'
		);
		*/
	
		// $param  =   array(
		   // 'method'  => 'stream.publish',
		   // 'uid'       => $this->session->userdata('fb_id'),
		   // 'message'     => 'Post Wall API',
		   // 'attachment'  => '',
		   // 'caption' => 'TSL'
		// );
		
		$post= $this->facebook->api($param);
		return $post;
	}
	
	function postWallFriend($param){
		/* 		
			param example
			$param= array(
				'message'	=> "This is my message",
				'name'		=> "This is my title",
				'caption'      => "My Caption",
				'description'  => "Some Description...",
				'link'         => "http://stackoverflow.com",
				'picture'      => "http://colorvisiontesting.com/plate%20with%205.jpg",
				'tags'		   => array(100003485932484)
			); 
		*/
	
		$param= array_to_object($param);
		$current_location = $this->facebook->api('/me?fields=location');
		//DEFAULT VIET NAM LOCATION
		$current_location= (!empty($current_location['location'])) ? $current_location['location']['id'] : 108153009209321;

		$param = array(
		  'message'      => $param->message,
		  'name'         => $param->name,
		  'caption'      => $param->caption,
		  'description'  => $param->description,
		  'link'         => $param->link,
		  'picture'      => $param->picture,
		  'place'		 => $current_location,
		  'tags'		 => implode(',', (array)($param->tags))
		);

		$post = $this->facebook->api("/".$this->session->userdata('fb_id')."/feed", "POST", $param); 
		return $post;		
	}
	
	function postNotification($fid){
		$fb_id=$this->input->post('fid');
		$accessToken = FB_APP_ID . '|' . FB_APP_SECRET;
		$message= 'Message notification';

		$params = array(
					'access_token' => $accessToken,
					'href' => 'home/back',
					'template' => $message,
				);
		$res= $this->facebook->api('/' . $fid . '/notifications/', 'post', $params);
		pr($res,1);
	}		
		
	function updateUser($USER){
		$USER= array_to_object($USER[0]);
		if(!empty($USER->email)){
			$check_user= $this->get('*', USER_TB, "email = '{$USER->email}'");
		}else{
			$check_user= $this->get('*', USER_TB, "fb_id = '{$USER->uid}'");
		}
		
		$data= array(
			'fb_id'				=> $USER->uid,
			'type'				=> 'facebook',
			'fullname'			=> $USER->name,
			'email'				=> $USER->email,
			'fb_access_token'	=> $this->session->userdata('fb_access_token'),
			'status'			=> 1,
			'changed'			=> NOW
		);		
		
		if(empty($check_user))
		{
			$data['created']= NOW;
			$this->db->insert(USER_TB, $data);
			$uid= $this->db->insert_id();
		}
		else
		{
			$this->db->update(USER_TB, $data, "id = '{$check_user->id}'");		
			$uid= $check_user->id;
		}
		$USER= $this->get('*', USER_TB, "id = '{$uid}'");
		$this->session($USER);
	}
	
	function countLike($url){
		$param  =   array(
		   'method'  => 'fql.query',
		   'query'  => "SELECT click_count, comment_count, like_count, share_count, total_count FROM link_stat  WHERE url = '{$url}'"
		);		
		return $this->facebook->api($param);			
	}
	
	function getUserInfo(){
		$param  =   array(
		   'method'  => 'users.getinfo',
		   'uids'       => $this->session->userdata('fb_id'),
		   'fields'     => 'name, current_location, hometown_location, sex, pic_big, email, devices',
		   'callback'  => ''
		);
		return $this->facebook->api($param);		
	}
	
	function getInfo($access_token){
		$this->facebook->setAccessToken($access_token);	
		$fb_id = $this->facebook->getUser();
		$this->session->set_userdata('fb_id', $fb_id);
		$this->session->set_userdata('fb_access_token', $access_token);
		$info= $this->getUserInfo();
		return $info;
	}
	
	function getCurrentLocation(){
		return  $this->facebook->api('/me?fields=location');
	}
	
	function getFriend(){
		$friends= array();
		$group= array();
		$list= array();		
		$param  =   array(
		   'method'  => 'fql.query',
		    'query' => 'SELECT name, uid, pic_big FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = '.$this->session->userdata('fb_id').') ORDER BY name'
		);

		try
		{
			$friends   =   $this->facebook->api($param);
		}
		catch (Exception $e)
		{   
		
		}		

		if(!empty($friends))
		{
			$count= 0;
			foreach($friends as $key=>$row){
				$frist= mb_substr(cutUnicode($row['name']),0,1);
				if(!in_array($frist, $group))
				{
					$group[$count]= $frist;
					$count++;
				}
				
				$list[$frist][]= array(	
					'fid'		=> $row['uid'],
					'name'		=> $row['name'],
					'pic_big'	=> $row['pic_big']
				); 
			}				
		}
		return $list;
	}	
	
	function getAlbum($fid){
		$param  =   array(
		   'method'  => 'fql.query',
		   'query'  => 'SELECT aid, name FROM album  WHERE owner = '.$fid.' LIMIT 4'
		);		

		$album= array_to_object($this->facebook->api($param));
		
		if(!empty($album))
		{
			foreach($album as $a)
			{
				$param_photo  =   array(
				   'method'  => 'fql.query',
					'query' => "SELECT pid, src_big FROM photo WHERE aid = '{$a->aid}' LIMIT 1"
				);		
			
				$photo= $this->facebook->api($param_photo);
				if(!empty($photo))
				{
					$a->photo= array_to_object($photo[0]);
				}
			}
		}
		
		return $album;
	}	
	
	function getPhotoDetail($object_id=0){

		$param_photo  =   array(
		   'method'  => 'fql.query',
			'query' => "SELECT pid, src_big FROM photo WHERE object_id  = '{$object_id}'"
		);		
	
		$photo= $this->facebook->api($param_photo);
		return (!empty($photo)) ? array_to_object($photo[0]) : '';	
	}
	
	function getFeed($fid){
		return $this->facebook->api("/" . $fid . "/feed");
	}	
	
	function uploadPhoto($param_photo){
		/*
			Param example
			$param_photo= array(
					'fb_id'				=> $this->session->userdata('fb_id'),
					'file'				=> 'Koala.jpg',
					'album_name'		=> 'TSL',
					'album_message'		=> '',
					'photo_message'		=> 'Photo API'
			);
			
			return PHOTO ID
		*/
	
		$param_photo= array_to_object($param_photo);
		//$this->facebook->setFileUploadSupport(true);
		$param  =   array(
		   'method'  => 'fql.query',
		   'query'  => "SELECT aid, object_id, name FROM album WHERE owner = '".$param_photo->fb_id."' AND name = '{$param_photo->album_name}'"
		);		
		
		$album= $this->facebook->api($param);		
		
		if(!empty($album)){
			$album= array_to_object($album[0]);
			$album_id= $album->object_id;
		}else{
			$album_detail = array(
				'message' 	=> $param_photo->album_message,
				'name' 		=> $param_photo->album_name
			);
			$create_album = $this->facebook->api('/'.$param_photo->fb_id.'/albums', 'post', $album_detail);
			$album_id = $create_album['id'];			
		}
		//new CURLFile('/foo/bar.jpg', 'image/jpeg'),
		$photo_detail = array(
			'message'	=> $param_photo->photo_message,
			'image'		=> new CURLFile($param_photo->file, 'image/jpeg')
		);	
	
		$photo = $this->facebook->api('/'.$album_id.'/photos', 'post', $photo_detail);
		return $photo;
	}
}
?>