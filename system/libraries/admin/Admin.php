<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Admin {

	var $CI;
	var $mid;
	var $uid;

	public function __construct($config = array())
	{
		$this->CI =& get_instance();
		$this->mid = (int)$this->CI->input->get('mid');
		$this->uid= $this->CI->session->userdata('admin_uid');
		$this->CI->template->set_template('admin');
		$this->CI->load->library('admin_model');
		$this->CI->load->library('admin_view');
		$this->CI->load->model('adminwz/adminwz_model','adminwz_model');

		if (count($config) > 0)
		{
			$this->initialize($config);
		}
		
		$this->index();
		log_message('debug', "Admin Class Initialized");
	}

	// --------------------------------------------------------------------

	function initialize($config = array())
	{
		foreach ($config as $key => $val)
		{
			if (isset($this->$key))
			{
				$this->$key = $val;
			}
		}
	}
	
	function index()
	{
		$this->CI->load->helper('security');
		$page= $this->CI->uri->segment(2);
		if($this->CI->input->post('action') || $this->CI->input->post('actions'))
		{
			$this->action();exit();
		}
		if($this->CI->input->post('email')){
			$email=$this->CI->input->post('email');
			$result=$this->CI->admin_model->get('id,email','wz_admin_user',array('email'=>$email));
			if($result){
				$pass=random_string('alnum', 16);
				$new_pass=do_hash(do_hash($pass), 'md5');
				$this->CI->db->update('wz_admin_user',array('password'=>$new_pass),array('id'=>$result->id));
				$data=array(
					'email' => $email,
					'subject' => 'Mật khẩu mới',
					'html' => 'Mật khẩu mới của bạn là ' . $pass
				);
				$this->CI->admin_model->send_email($data);
				echo '<script>alert("Đổi mật khẩu thành công")</script>';
			}else{
				echo '<script>alert("Không có email này")</script>';
			}
		}
		if(!$this->CI->session->userdata('admin_uid'))
		{
			if($this->CI->uri->segment(2) != 'login'){
				redirect(base_url().'adminwz/login');
			}
			$this->CI->admin_view->login();return FALSE;
		}
		//if($page == 'admin') redirect(base_url().'adminwz');
		
		if($page)
		{
			$this->page($page);
		}
		else
		{
			$this->CI->admin_view->dashboard();
		}
	}
	
	function page($page)
	{
		$page= mysql_real_escape_string($page);
		
		switch($page){
			case('faq'):
				$this->CI->admin_view->faq();
				break;
			case('logs'):
				$this->CI->adminwz_model->permission();
				$this->CI->admin_view->logs();
				break;		
			case('logout'):
				$this->CI->admin_view->logout();
				break;		
			case('module'):
				$slug= mysql_real_escape_string($this->CI->uri->segment(3));
				switch($slug){
					case('delete'):
						$this->delete();
						break;
					case('get-tags'):
						$this->CI->admin_view->get_tags();
						break;						
					case('manage'):
						$this->CI->admin_view->manage_module();
						break;
					case('manage-edit'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_module_edit();
						break;						
					case('manage-page-list'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_page_list();
						break;
					case('manage-page-list-field'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_page_list_field();
						break;			
					case('manage-page-list-filter'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_page_list_filter();
						break;						
					case('manage-page-edit'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_page_edit();
						break;	
					case('manage-page-edit-field'):
						$this->CI->adminwz_model->permission($this->mid, 'manage');
						$this->CI->admin_view->manage_page_edit_field();
						break;
					case('page-list'):
						$this->CI->adminwz_model->permission($this->mid, 'read');
						$this->CI->admin_view->module_page_list();
						break;
					case('page-edit'):
						$this->CI->adminwz_model->permission($this->mid, 'edit');
						$this->CI->admin_view->module_page_edit();
						break;	
				}
				break;
			case('user'):
				$slug= mysql_real_escape_string($this->CI->uri->segment(3));
				switch($slug){
					case('manage'):
						$this->CI->adminwz_model->permission();
						$this->CI->admin_view->user_manage();
						break;
					case('manage-edit'):
						$this->CI->adminwz_model->permission();
						$this->CI->admin_view->user_manage_edit();
						break;
					case('profile'):
						$this->CI->admin_view->user_profile();
						break;						
					case('role'):
						$this->CI->adminwz_model->permission();
						$this->CI->admin_view->user_role();
						break;
					case('role-edit'):
						$this->CI->adminwz_model->permission();
						$this->CI->admin_view->user_role_edit();
						break;
				}
				break;
			case('permission-deny'):
				$this->CI->admin_view->permission_deny();
				break;
			case('setting'):
				$this->CI->adminwz_model->permission();
				$this->CI->admin_view->setting();
				break;
		}
	}
		
	function session($user)
	{
		if(!empty($user))
		{
			//session_start();
			$this->CI->session->set_userdata('admin_uid', $user->id);
			$this->CI->session->set_userdata('admin_username', $user->username);
			$this->CI->session->set_userdata('admin_email', $user->email);
			$this->CI->session->set_userdata('admin_fullname', $user->fullname);
			$this->CI->session->set_userdata('admin_rid', $user->rid);
			$this->CI->session->set_userdata('admin_avatar', $user->avatar);
			if($user->admin == 1) $this->CI->session->set_userdata('admin', TRUE);
			setcookie('adminwz', TRUE, time() + 176400, '/', ''); 
			setcookie('base_url', base_url(), time() + 176400, '/', ''); 
		}
	}	
	
	function action()
	{
		$type= filter_input_xss($this->CI->input->post('type'));
		$this->$type();
	}	
	
	function delete(){
		$referrer= 	$this->CI->agent->referrer();
		$id= 		(int)$this->CI->input->get('id');
		$type= 		filter_input_xss($this->CI->input->get('type'));
		
		switch($type){
			case('module'):
				$this->CI->adminwz_model->permission();
				$table= ADMIN_MODULE_TB;
				break;
			case('edit'):
				$this->CI->adminwz_model->permission($this->mid, 'manage');
				$table= ADMIN_MODULE_EDIT_FIELD_TB;
				$result= $this->CI->admin_model->get('id', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$this->mid}' AND id = '{$id}'");
				if(empty($result)) exit();
				break;
			case('filter'):
				$this->CI->adminwz_model->permission($this->mid, 'manage');
				$table= ADMIN_MODULE_LIST_FILTER_TB;
				$result= $this->CI->admin_model->get('id', ADMIN_MODULE_LIST_FILTER_TB, "mid = '{$this->mid}' AND id = '{$id}'");
				if(empty($result)) exit();
				break;				
			case('list'):
				$this->CI->adminwz_model->permission($this->mid, 'manage');
				$table= ADMIN_MODULE_LIST_FIELD_TB;
				$result= $this->CI->admin_model->get('id', ADMIN_MODULE_LIST_FIELD_TB, "mid = '{$this->mid}' AND id = '{$id}'");
				if(empty($result)) exit();				
				break;
			case('role'):
				$this->CI->adminwz_model->permission();
				$table= ADMIN_ROLE_TB;
				break;
			case('user'):
				$this->CI->adminwz_model->permission();
				$table= ADMIN_USER_TB;
				break;				
			default:
				$table= '';
				break;				
		}

		if($this->CI->db->delete($table, "id = '{$id}'")){
			switch($type){
				case('role'):
					$this->CI->db->delete(ADMIN_ROLE_PERMISSION_TB, "rid = '{$id}'");
					break;
			}
			redirect($referrer);
		}
	}	
		
	function postDeleteItem(){
		$mid			= (int)$this->CI->input->post('mid');
		$post_item		= $this->CI->input->post('item');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");

		if(!empty($module)){
			$folder= $module->folder;
			$module_table= PREFIX.$folder;
			$ids = (!is_array($post_item)) ? array($post_item) : $post_item;
			if (!empty($ids))
			{
				$edit_field= $this->CI->admin_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$mid}'");
				foreach ($ids as $id)
				{
					$result= $this->CI->admin_model->get('*', $module_table, "id = '$id'");
					if(!empty($result))
					{
						$item[]= array(
							'id'		=> $id
						);						
						if($this->CI->db->delete($module_table, "id = '{$id}'"))
						{
							$logs['data']= object_to_array($result);
							$this->CI->adminwz_model->logs('delete', $logs, $mid , $id);
							foreach($edit_field as $field)
							{
								switch($field->type)
								{
									case('file'):
										$field_data= json_decode($field->data);
										$field_name= $field->field;
										@unlink($field_data->directory.$result->$field_name);
										break;
									case('file_multiupload'):
										$field_data= json_decode($field->data);
										$file_multiupload= $this->CI->admin_model->fetch('*', FILE_TB, "mid = '{$mid}' AND nid = '{$id}'");
										if(!empty($file_multiupload))
										{
											foreach($file_multiupload as $fm)
											{
												if($this->CI->db->delete(FILE_TB, "id = '{$fm->id}'"))
												{
													@unlink($field_data->directory.$fm->file);
												}
											}
										}
										break;
									case('tags'):
										$this->CI->db->delete(TAGS_JOIN_TB, "mid = '{$mid}' AND nid = '{$id}'");
										break;
								}
							}						
							modules::run($folder.'/admin/delete', $result); 
						}
					}	
				}
			}
			
			$json= array(
				'st'	=> 'SUCCESS',
				'item'	=> $item
			);
			print_r(json_encode($json));
		}	
	}
	
	function postDeleteFile(){
		$nid= $this->CI->input->post('nid');
		$field= $this->CI->input->post('field');
		$url= $this->CI->input->post('url');
		$field_edit= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$field}'");
		if(!empty($field_edit)){
			$data_field= json_decode($field_edit->data);
			$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$field_edit->mid}'");
			if(unlink($data_field->directory.$url)){
				$data= array(
					$field_edit->field => ''
				);
				$this->CI->db->update(PREFIX.$module->folder, $data, "id = '{$nid}'");
				$json= array(
					'st'	=> 'SUCCESS'
				);
				print_r(json_encode($json));
			}
		}
	}
	
	function postDeleteFileMulti(){
		$st= 'FALSE';
		$mid= (int)$this->CI->input->post('mid');
		$nid= (int)$this->CI->input->post('nid');
		$fid= (int)$this->CI->input->post('fid');
		$id= (int)$this->CI->input->post('id');
	
		if(empty($nid))
		{
			//FILE TMP
			$result= $this->CI->admin_model->get('*', FILE_TMP_TB, "id = '{$id}'");
			if(!empty($result))
			{
				if($this->CI->db->delete(FILE_TMP_TB, "id = '{$id}'"))
				{
					@unlink(DIR_UPLOAD_TMP.$result->file);
					$st= 'SUCCESS';
				}
			}
		}
		else
		{
			$result= $this->CI->admin_model->get('*', FILE_TB, "id = '{$id}'");
			if(!empty($result))
			{
				$field= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$fid}'");
	
				if(!empty($field))
				{
					$field_data= json_decode($field->data);
					if($this->CI->db->delete(FILE_TB, "id = '{$id}'"))
					{
						@unlink($field_data->directory.$result->file);
						$st= 'SUCCESS';
					}
				}
			}			
		}
		$json= array(
			'st'	=> $st
		);
		print_r(json_encode($json));
	}		
		
	function postLogin()
	{
		$data= array(
			'username'	=> filter_input_xss($this->CI->input->post('username')),
			'password'	=> filter_input_xss(password($this->CI->input->post('password'))),
			'remember'	=> filter_input_xss($this->CI->input->post('remember'))
		);
		
		$user= $this->CI->admin_model->getUser($data);
		if($user)
		{
			if($user->password== $data['password'])
			{
				$st= 'SUCCESS';
				$error= array();
				$this->session($user);
			}
		}
		else
		{
			$st= 'FALSE';
			$error= array(
				'field'	=>	'username',
				'txt'	=>	'The username or password you entered is incorrect.'
			);
		}
		
		$json= array(
			'st'		=> $st,
			'error'		=> $error
		);
		print_r(json_encode($json));
	}
	
	function postListTableField(){
		$table= filter_input_xss($this->CI->input->post('table'));
		$table= explode('|', $table);
		$foreign_table= (count($table) == 2) ? $table[1] : $table[0];
		$table_fields = $this->CI->db->field_data($foreign_table);
		$data= array(
			'table'				=> $foreign_table,
			'table_fields'		=> $table_fields
		);
		$json= array(
			'st'				=>	'SUCCESS',
			'html'				=> $this->CI->load->view('ajax/select_list_table_field', $data, true)
		);
		print_r(json_encode($json));
	}
	
	function postGaChart(){
		$get= array(
			'start'	=> $this->CI->input->post('start'),
			'end'	=> $this->CI->input->post('end')
		);
		
		$setting= $this->CI->admin_model->get('*', ADMIN_SETTING_TB);
		$config['profile_id'] = 'ga:'.$setting->ga;
		$config['email'] = $setting->email;
		$config['password'] = $setting->password;
		$config['cache_data']	= true; // request will be cached
		$config['cache_folder']	= 'uploads/cache/ga_api/'; // read/write
		$config['clear_cache']	= array('date', '1 day ago'); // keep files 1 day
		$config['debug']		= false; // print request url if true		
		$this->CI->load->library('ga_api', $config);		
		
		$data= array(
			'referrers'		=> $this->CI->admin_model->getGA($get)
		);

		$json= array(
			'st'		=> 'SUCCESS',
			'start'		=> date('F d, Y', strtotime($data['referrers']['summary']->startDate)),
			'end'		=> date('F d, Y', strtotime($data['referrers']['summary']->endDate)),
			'html'		=> $this->CI->load->view('ajax/ga_chart', $data, true)
		);
		print_r(json_encode($json));
	}
	
	function postModule(){
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'field_type', 'This field is required.');
			if($this->CI->input->post('field_type') == 'module'){
				$this->CI->admin_model->validate_module_name($arr_error, $error, ($this->CI->input->post('mid'))?true:false);		
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'folder', 'Field folder is required.');
			}
			//$this->CI->admin_model->validate_table($arr_error, $error, 'folder', 'Table not exist');
			
			if(empty($error)){
				$this->CI->admin_model->manage_module($arr_error, $error, $txt);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
			
		return print_r(json_encode($json));			
	}	

	function postModuleOrder(){
		$module= $this->CI->input->post('module');
		$this->CI->admin_model->manage_module_order($module);
	}	
	
	function postReminder(){
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'reminder_time', 'This field is required.');	
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'reminder_title', 'This field is required.');
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'reminder_content', 'This field is required.');	
		
			if(empty($error)){
				$this->CI->admin_model->reminder($arr_error, $error, $txt);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
			
		return print_r(json_encode($json));		
	}		
		
	function postSavePageEditField(){
		$post= array(
			'mid'					=> $this->CI->input->post('mid'),
			'fid'					=> $this->CI->input->post('fid'),
			'name'					=> $this->CI->input->post('name'),
			'field_type'			=> $this->CI->input->post('field_type'),
			'require'				=> ($this->CI->input->post('require') == 'on') ? 1: 0,
			'field_to_slug'			=> $this->CI->input->post('field_to_slug'),
			'data_field'			=> $this->CI->input->post('data_field'),
			'file_directory'		=> $this->CI->input->post('file_directory'),
			'file_extensions'		=> $this->CI->input->post('file_extensions'),
			'table_foreign'			=> $this->CI->input->post('table_foreign'),
			'table_foreign_field'	=> $this->CI->input->post('table_foreign_field'),
			'parent_field'			=> $this->CI->input->post('parent_field'),
			'primary_field'			=> $this->CI->input->post('primary_field')
		);

		$error= false;$arr_error= array();$txt= '';
	
		$this->CI->adminwz_model->validate_ext($arr_error, $error, 'name', 'Field name is required.');	
		$this->CI->adminwz_model->validate_ext($arr_error, $error, 'field_type', 'Field type is required.');
		switch($post['field_type']){
			case('datetimepicker'):
				$post['data_field']=  json_encode(array(
					'date'	=> ($this->CI->input->post('date') == 'on') ? 1: 0,
				));		
				break;		
			case('text'):
				$post['data_field']=  json_encode(array(
					'unique'	=> ($this->CI->input->post('unique') == 'on') ? 1: 0,
				));		
				break;
			case('checkbox'):				
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'data_field', 'Data field is required.');
				$post['data_field']=  json_encode(array(
					'value'		=> $this->CI->input->post('data_field')
				));					
				break;
			case('color'):
				$post['primary_field']= $post['primary_field'];
				break;
			case('file'):
			case('file_multiupload'):
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'file_directory', 'File directory is required.');
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'file_extensions', 'Allowed file extensions is required.');
				$post['data_field']=  json_encode(array(
					'directory'	=> $post['file_directory'],
					'extension'	=> $post['file_extensions']
				));
				break;
			case('group'):
				$post['primary_field']= toSlug($this->CI->input->post('name'));
				break;
			case('radio'):				
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'data_field', 'Data field is required.');
				$post['data_field']=  json_encode(array(
					'value'		=> $this->CI->input->post('data_field')
				));					
				break;				
			case('select'):	
				$post['data_field']=  json_encode(array(
					'value'		=> $this->CI->input->post('data_field'),
					'multiple'	=> ($this->CI->input->post('multiple') == 'on') ? 1 : 0
				));				
				break;
			case('select_foreign_table'):
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign', 'Table foreign is required.');	
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign_field', 'Foreign field is required.');
				$post['data_field']=  json_encode(array(
					'table_foreign'			=> $post['table_foreign'],
					'table_foreign_field'	=> $post['table_foreign_field'],
					'language'	=> ($this->CI->input->post('language') == 'on') ? 1 : 0,
					'multiple'	=> ($this->CI->input->post('multiple') == 'on') ? 1 : 0
				));
				break;
			case('select_foreign_recursive'):
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign', 'Table foreign is required.');	
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign_field', 'Foreign field is required.');
				$post['data_field']=  json_encode(array(
					'table_foreign'			=> $post['table_foreign'],
					'table_foreign_field'	=> $post['table_foreign_field'],
					'language'	=> ($this->CI->input->post('language') == 'on') ? 1 : 0,
					'multiple'	=> ($this->CI->input->post('multiple') == 'on') ? 1 : 0
				));
				break;				
			case('select_foreign_table_children'):
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign', 'Table foreign is required.');	
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign_field', 'Foreign field is required.');
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'parent_field', 'Parent field is required.');
				$post['data_field']=  json_encode(array(
					'table_foreign'			=> $post['table_foreign'],
					'table_foreign_field'	=> $post['table_foreign_field'],
					'parent_field'			=> $post['parent_field'],
					'language'	=> ($this->CI->input->post('language') == 'on') ? 1 : 0,
					'multiple'	=> ($this->CI->input->post('multiple') == 'on') ? 1 : 0
				));
				break;				
			case('slug'):
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'field_to_slug', 'Field to slug is required.');
				$post['data_field']=  json_encode(array(
					'field_to_slug'			=> $post['field_to_slug']
				));				
				break;
		}
		
		if($post['field_type'] != 'tags' && $post['field_type'] != 'group')
		{
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'primary_field', 'Field is required.');
		}
		
		if(empty($error))
		{
			$this->CI->admin_model->manage_edit_field($arr_error, $error, $txt, $post);
		}		
		
		$json= array(
			'st'		=> (empty($error)) ? 'SUCCESS' : 'FALSE',
			'error'		=> $arr_error,
			'txt'		=> $txt
		);			
		print_r(json_encode($json));		
	}
	
	function postSavePageList(){
		$post= array(
			'mid'					=> 	(int)$this->CI->input->post('mid'),
			'fid'					=> 	(int)$this->CI->input->post('fid'),
			'name'					=>	filter_input_xss($this->CI->input->post('name')),
			'language'				=> ($this->CI->input->post('language') == 'on') ? 1 : 0,
			'foreign_field'			=> 	filter_input_xss($this->CI->input->post('foreign_field')),
			'primary_field'			=>	filter_input_xss($this->CI->input->post('primary_field')),
			'table_foreign_field'	=> 	filter_input_xss($this->CI->input->post('table_foreign_field')),
			'table_type'			=> 	filter_input_xss($this->CI->input->post('table_type')),
			'status'				=> 	filter_input_xss($this->CI->input->post('status')),
		);
		
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'name', 'This field is required.');
			if($post['table_type']=='primary')
			{
				$post['foreign_field']= '';$post['table_foreign_field']= '';
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'primary_field', 'This field is required.');
			}
			else
			{
				$arr_foreign_field= explode('|', $post['foreign_field']);
				$post['primary_field']= $arr_foreign_field[0];
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'foreign_field', 'This field is required.');
				$this->CI->adminwz_model->validate_ext($arr_error, $error, 'table_foreign_field', 'This field is required.');			
			}
		
			if(empty($error)){
				$this->CI->admin_model->manage_list_field($arr_error, $error, $txt, $post);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);			
			print_r(json_encode($json));
	}	
	
	function postSavePageListFilter(){
		$post= array(
			'mid'			=> 	(int)$this->CI->input->post('mid'),
			'filter'		=> 	(int)$this->CI->input->post('filter'),
			'name'			=>	filter_input_xss($this->CI->input->post('name')),
			'where'			=> 	filter_input_xss($this->CI->input->post('where'))	
		);
		
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'name', 'This field is required.');
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'where', 'This field is required.');

			if(empty($error)){
				$this->CI->admin_model->manage_list_filter($arr_error, $error, $txt, $post);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);			
			print_r(json_encode($json));
	}		
	
	function postSavePageEdit(){
		$this->CI->load->helper('video');
		$id= (int)$this->CI->input->post('mid');
		$nid= (int)$this->CI->input->post('nid');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$id}'");
		$data= array();$arr_error= array();$error= false;$txt= '';
		
		$text= array();
		$file= array();$file_multiupload= array();$tags= array();
		
		if(!empty($module))
		{
			$this->CI->adminwz_model->getFormData($module->id, $nid, $data, $data_field, $arr_error, $error);
			if(empty($error))
			{
				$this->CI->admin_model->manage_module_page_edit($nid, $module, $data, $data_field, $txt);
				modules::run($module->folder.'/admin/callback', $nid);
			}		
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> (empty($error)) ? ($txt == 'insert') ? 'Insert Success' : 'Update Success' : ''
			);			
			print_r(json_encode($json));				
		}
	}	
	
	function postSaveUser(){
		$id= (int)$this->CI->input->post('id');
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'rid', 'You have not selected Role');
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'fullname', 'You have not entered Fullname');
			$this->CI->admin_model->validate_username($arr_error, $error, (!empty($id)) ? true : false);
			$this->CI->admin_model->validate_password($arr_error, $error, (!empty($id)) ? true : false);	
			$this->CI->admin_model->validate_confirm_password($arr_error, $error, (!empty($id)) ? true : false);	
			$this->CI->admin_model->validate_email($arr_error, $error, (!empty($id)) ? true : false);
			
			if(empty($error)){
				$this->CI->admin_model->user_manage($arr_error, $error, $txt, $id);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
			
		return print_r(json_encode($json));				
	}
	
	function postSaveUserAvatar(){
		$avatar= array(
			'x1'	=>	$this->CI->input->post('x1'),
			'x2'	=>  $this->CI->input->post('x2'),
			'y1'	=>	$this->CI->input->post('y1'),
			'y2'	=>	$this->CI->input->post('y2'),
			'zoom'	=>  $this->CI->input->post('zoom'),
			'url'	=>  $this->CI->input->post('url'),
		);

		$data= array(
			'avatar'	=> json_encode($avatar)
		);
		
		$this->CI->session->set_userdata('admin_avatar', $data['avatar']);
		$this->CI->db->update(ADMIN_USER_TB, $data, "id = '{$this->uid}'");
	}
	
	function postSaveUserProfile(){
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'fullname', 'You have not entered Fullname');
			if($this->CI->input->post('old_password'))
			{
				$this->CI->admin_model->validate_old_password($arr_error, $error);
				$this->CI->admin_model->validate_password($arr_error, $error, (!empty($id)) ? true : false);	
				$this->CI->admin_model->validate_confirm_password($arr_error, $error, (!empty($id)) ? true : false);			
			}
			
			if(empty($error)){
				$this->CI->admin_model->user_profile($arr_error, $error, $txt);
			}
			
			$json= array(
				'st'		=> (empty($error)) ? 'SUCCESS' : 'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
			
		return print_r(json_encode($json));					
	}
	
	function postSaveUserRole(){
		$id= (int)$this->CI->input->post('id');
		$error= false;$arr_error= array();$txt= '';
			$this->CI->admin_model->validate_user_rolename($arr_error, $error, (!empty($id)) ? true : false);	
			
			if(empty($error)){
				$this->CI->admin_model->user_role($arr_error, $error, $txt, $id);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
		return print_r(json_encode($json));		
	}
		
	function postSortOrder(){
		$mid= 	(int)$this->CI->input->post('mid');
		$post_case=	$this->CI->input->post('post_case');
		$item=	$this->CI->input->post('item');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		if(!empty($module) && !empty($item))
		{
			foreach($item as $k=>$v)
			{
				$data['order']= $k;
				switch($post_case){
					case('edit-field'):
						$this->CI->db->update(ADMIN_MODULE_EDIT_FIELD_TB, $data, "id = '{$v}'");
						break;
					case('list-field'):
						$this->CI->db->update(ADMIN_MODULE_LIST_FIELD_TB, $data, "id = '{$v}'");
						break;
					case('list-filter'):
						$this->CI->db->update(ADMIN_MODULE_LIST_FILTER_TB, $data, "id = '{$v}'");
						break;							
				}				
			}
		}
	}
				
	function postSetting(){
		$error= false;$arr_error= array();$txt= '';
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'name', 'This field is required.');	
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'ga', 'This field is required.');
			$this->CI->admin_model->validate_email($arr_error, $error, true);
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'password', 'This field is required.');	
			$this->CI->adminwz_model->validate_ext($arr_error, $error, 'tracking', 'This field is required.');	
			
			if(empty($error)){
				$file_download= UploadKeepNameFile($_FILES['file_download'], DIR_UPLOAD_FILE_DOWNLOAD);
				$brochure_download= UploadKeepNameFile($_FILES['brochure_download'], DIR_UPLOAD_FILE_DOWNLOAD);
				$cv_sample_download= UploadKeepNameFile($_FILES['cv_sample_download'], DIR_UPLOAD_FILE_DOWNLOAD);
				
				$upload_folder_now_file_download = getFolderNowFile(getFolderNow().$file_download);
				$upload_folder_now_brochure_download = getFolderNowFile(getFolderNow().$brochure_download);
				$upload_folder_now_cv_sample_download = getFolderNowFile(getFolderNow().$cv_sample_download);
				
				newFolder(DIR_UPLOAD_FILE_DOWNLOAD.$upload_folder_now_file_download);
				newFolder(DIR_UPLOAD_FILE_DOWNLOAD.$upload_folder_now_brochure_download);
				newFolder(DIR_UPLOAD_FILE_DOWNLOAD.$upload_folder_now_cv_sample_download);
				$file = array(
					'file_download' => getFolderNow().$file_download,
					'brochure_download' => getFolderNow().$brochure_download,
					'cv_sample_download' => getFolderNow().$cv_sample_download
				);
				$this->CI->admin_model->setting($arr_error, $error, $txt, $file);
			}
			
			$json= array(
				'st'		=> (empty($error))?'SUCCESS':'FALSE',
				'error'		=> $arr_error,
				'txt'		=> $txt
			);		
			
		return print_r(json_encode($json));				
	}
	
	function postSelectChildren(){
		$fid= (int)$this->CI->input->post('fid');
		$pid= (int)$this->CI->input->post('pid');
		$field_content= $this->CI->input->post('field_content');
		$field= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$fid}'");
		if(!empty($field))
		{
			$field_data= json_decode($field->data);
			$table_foreign= 		$field_data->table_foreign;
			$table_foreign_field= 	admin_field($field_data->table_foreign_field, $field_data);
			$slug= admin_field('slug', $field_data);
			$data= array(
				'id'					=> $fid,
				'data'					=> $field_data,
				'name'					=> $field->name,
				'field'					=> $field->field,
				'table_foreign_field'	=> $table_foreign_field,
				'field_content'			=> $field_content,
				'result'				=> $this->CI->admin_model->fetch('*', $table_foreign, "pid = '{$pid}'", "{$slug}", 'asc')
			);
			
			$json= array(
				'st'	=> 'SUCCESS',
				'html'	=> $this->CI->load->view('ajax/select_children', $data, true)
			);
			print_r(json_encode($json));
		}
	}
	
	function postUpdateStatus(){
		$this->CI->adminwz_model->permission($this->CI->input->post('mid'), 'edit');
		$post_item	= $this->CI->input->post('item');
		$mid		= (int)$this->CI->input->post('mid');
		$task		= $this->CI->input->post('task');
		$status		= ($task == 'show') ? 1 : 0;
		$format		= $this->CI->input->post('format')?$this->CI->input->post('format'):'status';

		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		if(!empty($module)){
			$folder= $module->folder;
			$module_table= PREFIX.$folder;

			$ids = (!is_array($post_item)) ? array($post_item) : $post_item;
			if (!empty($ids))
			{
				foreach ($ids as $id){
					$result= $this->CI->admin_model->get('*', $module_table, "id = '$id'");
					if(!empty($result)){
						$data[$format]= $status;
						if($this->CI->db->update($module_table, $data, "id = '{$id}'"));
						$item[]= array(
							'id'		=> $id,
							'status' 	=> getStatus($status,$format)
						);
						modules::run($folder.'/admin/status', $id);
					}	
				}
			}

			modules::run($folder.'/admin_status', $item); 
			$json= array(
				'st'	=> 'SUCCESS',
				'item'	=> $item
			);
			print_r(json_encode($json));
		}		
	}	
	
	function postUploadFile(){
		$this->CI->adminwz_model->permission($this->CI->input->post('mid'), 'edit');
		$mid		= (int)$this->CI->input->post('mid');
		$nid		= (int)$this->CI->input->post('nid');
		$field		= (int)$this->CI->input->post('field');
		$token		= filter_input_xss($this->CI->input->post('file_token'));
		$file_id	= 0;
	
		$field= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$field}'");
		if(!empty($field))
		{
			$this->CI->admin_model->deleteFileTmp();
			$field_data= json_decode($field->data);
			$config['upload_folder_now']= getFolderNow();
			$config['upload_path'] = (empty($nid)) ? DIR_UPLOAD_TMP . $config['upload_folder_now'] : $field_data->directory . $config['upload_folder_now'];
			$config['allowed_types'] = $field_data->extension;
			$config['max_size']	= MAXSIZE_UPLOAD;//MB
			$this->CI->load->library('FUpload', $config);

			$file_info= $this->CI->fupload->do_upload($_FILES['file']);
			if($file_info->st=='SUCCESS')
			{
				//INSERT TABLE FILE TMP
				$data= array(
					'file'		=> $file_info->file_path,
					'changed'	=> NOW,
					'created'	=> NOW
				);
				if(empty($nid))
				{
					$data['token']= $token;
					$this->CI->db->insert(FILE_TMP_TB, $data);
					$file_id= $this->CI->db->insert_id();
				}
				else
				{
					$data['mid']= $mid;
					$data['nid']= $nid;
					$data['field']= $field->id;
					$this->CI->db->insert(FILE_TB, $data);
					$file_id= $this->CI->db->insert_id();
				}
			}

			$json= array(
				'st'			=> $file_info->st,
				'message'		=> $file_info->message,
				'file_id'		=> $file_id,
				'file_path'		=> (!empty($file_info->file_path)) 	? $file_info->file_path : '',
				'full_path'		=> (!empty($file_info->full_path)) ? $file_info->full_path : '',
				'image'			=> (!empty($file_info->full_path)) 	? ($file_info->is_image) ? img($file_info->full_path, 65, 65) : '' : '',
				'is_image'		=> (!empty($file_info->is_image)) 	? $file_info->is_image : '',
				'file_size'		=> (!empty($file_info->file_size)) 	? round($file_info->file_size/1024/1024, 2) . ' MB' : '',
			);
			print_r(json_encode($json));
		}
	}	
	
	function postUploadAvatar(){	
		$user= $this->CI->admin_model->get('*', ADMIN_USER_TB, "id = '{$this->uid}'");
		if(!empty($user))
		{
			$config['upload_folder_now']= getFolderNow();
			$config['upload_path'] =  DIR_UPLOAD_ADMIN_USER_AVATAR . $config['upload_folder_now'];
			$config['allowed_types'] = "jpg|png|gif";
			$config['max_size']	= MAXSIZE_UPLOAD;//MB
			$this->CI->load->library('FUpload', $config);		
			$file_info= $this->CI->fupload->do_upload($_FILES['upl']);
			if($file_info->st=='SUCCESS')
			{
				// RESIZE
					$image_size= getimagesize($file_info->full_path);
					$this->CI->load->library('SimpleImage');
					$this->CI->simpleimage->load($file_info->full_path);
					if($image_size[0] > $image_size[1]){
						//Width > Height
						if($image_size[1] > 1080){
							$this->CI->simpleimage->resizeToHeight(1080);
							$this->CI->simpleimage->save($file_info->full_path);
						}
					}
					
					if($image_size[1] > $image_size[0]){
						//Height > Width
						if($image_size[0] > 1920){
							$this->CI->simpleimage->resizeToWidth(1920);
							$this->CI->simpleimage->save($file_info->full_path);
						}
					}						
				
				$avatar= json_decode($user->avatar);
				@unlink(DIR_UPLOAD_ADMIN_USER_AVATAR.$avatar->url);	
				$avatar= array(
					'x1'	=>	0,
					'x2'	=>  0,
					'y1'	=>	0,
					'y2'	=>	0,
					'zoom'	=>  0,
					'url'	=>  $file_info->file_path,
				);

				$data= array(
					'avatar'	=> json_encode($avatar)
				);
				
				$this->CI->db->update(ADMIN_USER_TB, $data, "id = '{$this->uid}'");				
				
				$json= array(
					'status' 	=> $file_info->st,
					'message'	=> $file_info->message,
					'file'		=> $file_info->full_path
				);
				print_r(json_encode($json));
				exit();				
			}
		
		}		
	}
	
	function postUserChart(){
		$range= ($this->CI->input->post('range')) ? $this->CI->input->post('range') : date('Y/m/d', strtotime('-1 week')) . ' - '. date('Y/m/d');
		
		$range= 	explode(' - ', $range);
		
		$start= 	date('Y-m-d', str_totime($range[0]));
		$end= 		date('Y-m-d', str_totime($range[1]));	
		$date_period= date_period($start, $end);
		$user= array();

		if(!empty($date_period))
		{
			foreach($date_period as $date)
			{
				$user[]= array(
					'date'	=> $date,
					'count'	=> $this->CI->admin_model->getUserChart($date)
				);
			}
		}

		$data= array(
			'start'			=> $start,
			'end'			=> $end,
			'count_user'	=> count($user),
			'result_user'	=> array_to_object($user)
		);
	
		$json= array(
			'st'		=> 'SUCCESS',
			'html'		=> $this->CI->load->view('ajax/user_chart', $data, true)
		);
		print_r(json_encode($json));
	}
	
	function postEmbed(){
		$html= '';
		$embed_type= filter_input_xss($this->CI->input->post('embed_type'));
		$data= array(
			'embed'	=> filter_input_xss($this->CI->input->post('embed'))
		);	
		switch($embed_type){
			case('file'):
				$ext= ext($data['embed']);
				switch($ext){
					case('pdf'):
					case('doc'):
					case('docx'):
					case('ppt'):
					case('pptx'):
					case('xls'):
					case('xlsx'):
						$html= $this->CI->load->view('embed/docs', $data, true);
						break;
					case('jpg'):
					case('png'):
					case('gif'):
						$html= $this->CI->load->view('embed/image', $data, true);
						break;
					case('mp4'):
					case('flv'):
						$html= $this->CI->load->view('embed/video', $data, true);
						break;
				}
				break;
			case('maps'):
				$html= $this->CI->load->view('embed/maps', $data, true);
				break;
			case('youtube'):
				$html= $this->CI->load->view('embed/youtube', $data, true);
				break;
		}
		$json= array(
			'st'	=> 'SUCCESS',
			'html'	=> $html
		);
		print_r(json_encode($json));
	}
}
