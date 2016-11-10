<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Admin_model {
	var $CI;
	var $uid;
	var $require_txt= 'This field is required';

	public function __construct($config = array())
	{
		$this->CI =& get_instance();		
		$this->uid= $this->CI->session->userdata('admin_uid');
	}

	// --------------------------------------------------------------------

	function get($select = "*", $table = "", $where = "", $order = "", $by = "DESC", $return_array = false)
	{
		$this->CI->db->select($select);
		if($where != "")
		{
			$this->CI->db->where($where);
		}
		if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
		{
			if($order == 'rand'){
				$this->CI->db->order_by('rand()');
			}else{
				$this->CI->db->order_by($order, $by);
			}
		}		
		#Query
		$query = $this->CI->db->get($table);
		if($return_array){
			$result = $query->row_array();
		} else {
			$result = $query->row();
		}
		$query->free_result();
		return $result;
	}

	function fetch($select = "*", $table = "", $where = "", $order = "", $by = "DESC", $start = -1, $limit = 0, $return_array = false)
	{
		$this->CI->db->select($select);
		if($where != "")
		{
			$this->CI->db->where($where);
		}
		if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
		{
			if($order == 'rand'){
				$this->CI->db->order_by('rand()');
			}else{
				$this->CI->db->order_by($order, $by);
			}
		}
		
		if((int)$start >= 0 && (int)$limit > 0)
		{
			$this->CI->db->limit($limit, $start);
		}
		#Query
		$query = $this->CI->db->get($table);
		if($return_array){
			$result = $query->result_array();
		} else {
			$result = $query->result();
		}
		$query->free_result();
		return $result;
	}	
	
	/*Start validate*/
	function validate_module_name(&$arr_error='', &$error='', $skip= ''){
		$id= (int)$this->CI->input->post('id');
		$name= strtolower(htmlspecialchars($this->CI->input->post('name')));
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'name')){
			$slug= toSlug($this->CI->input->post('name'));
			if(empty($skip)){
				$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "slug = '$slug'");
			}else{
				$result= $this->get('*', ADMIN_MODULE_TB, "id = '{$id}'");
				if(empty($result)) return false;
				if($slug != $result->slug){
					$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "slug = '$slug'");
				}else{
					$module= false;
				}
			}
			
			if(!empty($module)){
				$arr_error[]= array(
					'field'	=> 'name',
					'txt'	=> 'Module exist'
				);
				$form_error= true;
			}			
		}else{
			$arr_error[]= array(
				'field'	=> 'name',
				'txt'	=> $this->require_txt
			);	
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}	
	
	function validate_user_rolename(&$arr_error='', &$error='', $skip= ''){
		$id= (int)$this->CI->input->post('id');
		$name= strtolower(htmlspecialchars($this->CI->input->post('name')));
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'name')){
			if(empty($skip)){
				$module= $this->CI->admin_model->get('*', ADMIN_ROLE_TB, "name = '$name'");
			}else{
				$result= $this->get('*', ADMIN_ROLE_TB, "id = '{$id}'");
				if(empty($result)) return false;
				if($name != $result->name){
					$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "name = '$name'");
				}else{
					$module= false;
				}
			}
			
			if(!empty($module)){
				$arr_error[]= array(
					'field'	=> 'name',
					'txt'	=> 'Role exist'
				);
				$form_error= true;
			}			
		}else{
			$arr_error[]= array(
				'field'	=> 'name',
				'txt'	=> $this->require_txt
			);	
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}		
		
	function validate_table(&$arr_error='', &$form_error='', $field='', $txt=''){
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, $field)){	
			if (!$this->CI->db->table_exists(PREFIX.$this->CI->input->post($field)))
			{
				$arr_error[]= array(
					'field'	=> $field,
					'txt'	=> $txt
				);
				$form_error= true;
			} 		
		}else{
			$arr_error[]= array(
				'field'	=> $field,
				'txt'	=> $this->require_txt
			);			
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);		
	}
	
	/* USER */
	function validate_email(&$arr_error='', &$error='', $skip= ''){
		$email= strtolower(filter_input_xss($this->CI->input->post('email')));
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'email')){
			//CHECK USERNAME
			if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){ 
				if(empty($skip)){
					$email= $this->get('*', ADMIN_USER_TB, "email = '$email'");
					if(!empty($email)){
						$arr_error[]= array(
							'field'	=> 'email',
							'txt'	=> 'Someone already has that email'
						);
						$form_error= true;
					}
				}
			}else{
					$arr_error[]= array(
						'field'	=> 'email',
						'txt'	=> 'Invalid Email'
					);
					$form_error= true;
			}
		}else{
			$arr_error[]= array(
				'field'	=> 'email',
				'txt'	=> $this->require_txt
			);	
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}	
	
	function validate_username(&$arr_error='', &$error='', $skip= ''){
		$username= strtolower(mysql_real_escape_string($this->CI->input->post('username')));
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'username')){
			//CHECK USERNAME
			if (preg_match("/^([a-zA-Z0-9.]+@){0,1}([a-zA-Z0-9.])+$/", $username)){ 
				if(empty($skip)){
					$email= $this->get('*', ADMIN_USER_TB, "username = '$username'");
					if(!empty($email)){
						$arr_error[]= array(
							'field'	=> 'username',
							'txt'	=> 'Someone already has that username'
						);
						$form_error= true;
					}
				}
			}else{
				$arr_error[]= array(
					'field'	=> 'username',
					'txt'	=> 'Username does not contain special characters'
				);
				$form_error= true;
			}
		}else{
			$arr_error[]= array(
				'field'	=> 'username',
				'txt'	=> $this->require_txt
			);	
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}		
	
	function validate_old_password(&$arr_error='', &$error=''){
		$old_password= password($this->CI->input->post('old_password'));
		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'old_password')){
			$USER= $this->get('password', ADMIN_USER_TB, "id = {$this->CI->session->userdata('admin_uid')}");
			if($old_password != $USER->password){
				$arr_error[]= array(
					'field'	=> 'old_password',
					'txt'	=> 'Old Password Incorrect'
				);
				$form_error= true;			
			}
		}else{
			$arr_error[]= array(
				'field'	=> 'old_password',
				'txt'	=> $this->require_txt
			);				
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}	
	
	function validate_password(&$arr_error='', &$error='', $skip=''){
		$password= filter_input_xss($this->CI->input->post('password'));
		if($skip && empty($password)) return false;

		if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'password')){
			if(strlen($password)<6){
				$arr_error[]= array(
					'field'	=> 'password',
					'txt'	=> 'Passwords must be at least 6 characters'
				);
				$form_error= true;			
			}elseif($password=='123456'){
				$arr_error[]= array(
					'field'	=> 'password',
					'txt'	=> 'Your password is too simple'
				);
				$form_error= true;								
			}
		}else{
			$arr_error[]= array(
				'field'	=> 'password',
				'txt'	=> $this->require_txt
			);				
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}
	
	function validate_confirm_password(&$arr_error='', &$error='', $skip){
		$password= filter_input_xss($this->CI->input->post('password'));
		$confirm_password= filter_input_xss($this->CI->input->post('confirm_password'));
		if(empty($skip)){
			if($this->CI->adminwz_model->validate_null($arr_error, $form_error, 'confirm_password')){
				if($password!=$confirm_password){
					$arr_error[]= array(
						'field'	=> 'confirm_password',
						'txt'	=> 'Confirm password does not match'
					);
					$form_error= true;							
				}
			}else{
				$arr_error[]= array(
					'field'	=> 'confirm_password',
					'txt'	=> $this->require_txt
				);	
			}
		}
		$this->CI->adminwz_model->validate_error($error, $form_error);
	}	
	/*End validate*/
	
	/*INSERT*/
	function manage_module_order($module, $pid= 0){
		if(!empty($module)){
			$count= 0;
			foreach($module as $row){
				$data= array(
					'pid'	=> $pid,
					'order'	=> $count
				);
				$this->CI->db->update(ADMIN_MODULE_TB, $data, "id = '{$row['id']}'");
				if(!empty($row['children'])){
					$this->manage_module_order($row['children'], $row['id']);
				}
				$count++;
			}
		}
	}
		
	function manage_module(&$arr_error='', &$error='', &$txt){
		$mid= (int)$this->CI->input->post('mid');
		$slug= toSlug($this->CI->input->post('name'));
		$feature = array(
			'add' => ($this->CI->input->post('add') == 1) ? 1 : 0,
			'edit' => ($this->CI->input->post('edit') == 1) ? 1 : 0,
			'delete' => ($this->CI->input->post('delete') == 1) ? 1 : 0,
			'showhide' => ($this->CI->input->post('showhide') == 1) ? 1 : 0
		);
		$data= array(
			'name'			=> $this->CI->input->post('name'),
			'slug'			=> $slug,
			'feature'		=> json_encode($feature),
			'folder'		=> $this->CI->input->post('folder'),
			'custom'		=> ($this->CI->input->post('custom') == 1) ? 1 : 0,
			'status'		=> ($this->CI->input->post('status')) ? 1 : 0,
			'changed'		=> date('Y-m-d H:i:s')
		);
		if(empty($mid))
		{
			//INSERT 
			$data['created']= date('Y-m-d H:i:s');
			$this->CI->db->insert(ADMIN_MODULE_TB, $data);
			$txt= 'Add new module successfully';
		}
		else
		{
			//UPDATE -> CHECK SLUG
			$result= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
			if(!empty($result))
			{
				if($result->slug != $slug)
				{
					$this->CI->admin_model->validate_module_name($arr_error, $error);
				}
			}
			$txt= 'Update module successfully';
			$this->CI->db->update(ADMIN_MODULE_TB, $data, "id = '{$mid}'");
		}
	}
	
	function manage_list_field(&$arr_error='', &$error='', &$txt, $post){
		$data_field= array(
			'foreign_field'			=>	$post['foreign_field'],
			'primary_field'			=>	$post['primary_field'],
			'table_foreign_field'	=>	$post['table_foreign_field'],
			'table_type'			=>	$post['table_type'],
			'language'				=>	$post['language']
		);
	
		$data= array(
			'mid'		=> $post['mid'],
			'name'		=> $post['name'],
			'type'		=> $post['table_type'],
			'data'		=> json_encode($data_field),
			'status'	=> (!empty($post['status'])) ? 1: 0 ,
			'changed'	=> date('Y-m-d H:i:s')
		);		

		if(empty($post['fid']))
		{
			//INSERT
			$data['created']= date('Y-m-d H:i:s');
			$this->CI->db->insert(ADMIN_MODULE_LIST_FIELD_TB, $data);
			$txt= 'Add new field success';
		}
		else
		{
			//UPDATE
			$this->CI->db->update(ADMIN_MODULE_LIST_FIELD_TB, $data, "id = '{$post['fid']}'");
			$txt= 'Update field success';
		}
	}
	
	function manage_list_filter(&$arr_error='', &$error='', &$txt, $post){		
		$data= array(
			'mid'		=> $post['mid'],
			'name'		=> $post['name'],
			'where'		=> $post['where'],
			'changed'	=> date('Y-m-d H:i:s')
		);		
				
		if(empty($post['filter']))
		{
			//INSERT
			$data['created']= date('Y-m-d H:i:s');
			$this->CI->db->insert(ADMIN_MODULE_LIST_FILTER_TB, $data);
			$txt= 'Add new field success';
		}
		else
		{
			//UPDATE
			$this->CI->db->update(ADMIN_MODULE_LIST_FILTER_TB, $data, "id = '{$post['filter']}'");
			$txt= 'Update field success';
		}
	}	
	
	function manage_edit_field(&$arr_error='', &$error='', &$txt, $post){		
		$data= array(
			'mid'			=> $post['mid'],
			'name'			=> $post['name'],
			'type'			=> $post['field_type'],
			'field'			=> $post['primary_field'],
			'require'		=> $post['require'],
			'data'			=> $post['data_field'],
			'changed'		=> date('Y-m-d H:i:s')
		);	
		
		$exist= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$data['mid']}' AND field = '{$data['field']}'");

		if(empty($post['fid']))
		{
			//CHECK EXIST
			if(!empty($exist))
			{
				$error= true; $txt= 'Field exist';
				return;
			}
			
			//INSERT
			$data['created']= date('Y-m-d H:i:s');
			$this->CI->db->insert(ADMIN_MODULE_EDIT_FIELD_TB, $data);
			$txt= 'Add new field success';
		}
		else
		{
			$result= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$post['fid']}'");
			if($result->field != $data['field'])
			{
				//CHECK EXIST
				if(!empty($exist))
				{
					$error= true; $txt= 'Field exist';
					return;
				}				
			}
			//UPDATE
			$this->CI->db->update(ADMIN_MODULE_EDIT_FIELD_TB, $data, "id = '{$post['fid']}'");
			$txt= 'Update field success';
		}
	}	
	
	function manage_module_page_edit(&$nid, $module, $data, $data_field, &$type){
		$module_table= 			PREFIX.$module->folder;
		$data['changed']= 		NOW;
		if(empty($nid))
		{
			$type= 'insert';

			if($this->CI->input->post('created')){
				
			}else{
				$data['created']= NOW;
			}
			$this->CI->db->insert($module_table, $data);
			$nid= $this->CI->db->insert_id();	
		}
		else
		{
			$type= 'update';
			$this->CI->db->update($module_table, $data, "id = '{$nid}'");
		}
		
		$this->CI->adminwz_model->formFunction($nid, $module, $data, $data_field, $type);
	}
	
	function reminder(&$arr_error, &$error, &$txt){
		$id= (int)$this->CI->input->post('reminder_id');
		$data= array(
			'title'				=> filter_input_xss($this->CI->input->post('reminder_title')),
			'time'				=> date('Y-m-d H:i:s', str_totime($this->CI->input->post('reminder_time'))),
			'content'			=> filter_input_xss($this->CI->input->post('reminder_content')),
			'link'				=> filter_input_xss($this->CI->input->post('reminder_link')),
			'changed'			=> NOW
		);

		if(empty($id))
		{
			$data['created']= NOW;
			$this->CI->db->insert(ADMIN_REMINDER_TB, $data);
			$txt= 'Thêm mới thành công';
		}
		else
		{
			$this->CI->db->update(ADMIN_REMINDER_TB, $data, "id = '{$id}'");
			$txt= 'Cập nhật thành công';
		}
	}	
	
	function user_manage(&$arr_error, &$error, &$txt, $id){
		$data= array(	
			'rid'			=> (int)$this->CI->input->post('rid'),
			'username'		=> $this->CI->input->post('username'),
			'email'			=> $this->CI->input->post('email'),
			'fullname'		=> $this->CI->input->post('fullname'),
			'changed'		=> NOW
		);	
		
		if($this->CI->input->post('password'))
		{
			$data['password']= password($this->CI->input->post('password'));
		}
		
		if(empty($id))
		{
			//INSERT
			$data['created']= NOW;
			$this->CI->db->insert(ADMIN_USER_TB, $data);
			$txt= 'Created Success';
		}
		else
		{
			//UPDATE
			$this->CI->db->update(ADMIN_USER_TB, $data, "id = '{$id}'");
			$txt= 'Update Success';			
		}
		$weight= $this->get('count(*) as count', ADMIN_USER_TB, "rid = '{$data['rid']}'");
		$data_role['weight']= $weight->count;
		$this->CI->db->update(ADMIN_ROLE_TB, $data_role, "id = '{$data['rid']}'");
	}
	
	function user_profile(&$arr_error, &$error, &$txt){
		$data= array(
			'fullname'	=> filter_input_xss($this->CI->input->post('fullname'))
		);
		if($this->CI->input->post('password'))
		{
			$data['password']= password($this->CI->input->post('password'));
		}

		if($this->CI->db->update(ADMIN_USER_TB, $data, "id = '{$this->uid}'"))
		{
			$txt= 'Update Success';
		}
	}
	
	function user_role(&$arr_error, &$error, &$txt, $id){
		$module_list= $this->fetch('*', ADMIN_MODULE_TB, "", "name", "asc");
		$data_module= array();
		if(!empty($module_list))
		{
			foreach($module_list as $m)
			{	
				$field= $this->CI->input->post($m->id);
				if(!empty($field))
				{
					foreach($field as $f){
						$p[]= $f;
					}
					$data_module[]= array(
						'mid'			=> $m->id,
						'permission'	=> (array(
							'manage'		=> (in_array('manage', $p)) ? 1 : 0,
							'read'		=> (in_array('read', $p)) ? 1 : 0,
							'edit'		=> (in_array('edit', $p)) ? 1 : 0,
							'delete'	=> (in_array('delete', $p)) ? 1 : 0
						))
					);
				}
			}
		}

		$data= array(
			'name'		=> filter_input_xss($this->CI->input->post('name')),
			'changed'	=> NOW
		);
		if(empty($id))
		{
			//INSERT
			$data['created']= NOW;
			$this->CI->db->insert(ADMIN_ROLE_TB, $data);
			$id= $this->CI->db->insert_id();
		}
		else
		{
			//UPDATE
			$this->CI->db->update(ADMIN_ROLE_TB, $data, "id = '{$id}'");		
		}
		
		if(!empty($data_module))
		{
			$data_module= array_to_object($data_module);
			foreach($data_module as $dm)
			{
				$arr_module[]= $dm->mid;
				$exist= $this->CI->admin_model->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$id}' AND mid = '{$dm->mid}'");
				$data_role_permission= array(
					'rid'			=> $id,
					'mid'			=> $dm->mid,
					'permission'	=> json_encode($dm->permission),
					'changed'		=> NOW
				);
	
				if(empty($exist))
				{
					$data_role_permission['created']= NOW;
					$this->CI->db->insert(ADMIN_ROLE_PERMISSION_TB, $data_role_permission);
				}
				else
				{
					$this->CI->db->update(ADMIN_ROLE_PERMISSION_TB, $data_role_permission, "id = '{$exist->id}'");
				}
			}
			
			$this->CI->db->where_not_in('mid', $arr_module);
			$this->CI->db->delete(ADMIN_ROLE_PERMISSION_TB, "rid = '{$id}'");
		}
		else
		{
			$this->CI->db->delete(ADMIN_ROLE_PERMISSION_TB, "rid = '{$id}'");
		}
	}
	
	function setting($arr_error, $error, &$txt,$file = array()){	
		$data= array(
			'name'				=> $this->CI->input->post('name'),
			'brochure_download'	=> $file['brochure_download'],
			'file_download'		=> $file['file_download'],
			'cv_sample_download'=> $file['cv_sample_download'],
			'language'			=> filter_input_xss($this->CI->input->post('language')),
			'maintenance'		=> ($this->CI->input->post('maintenance') == 'on') ? 1 : 0,
			'maintenance_text'	=> filter_input_xss($this->CI->input->post('maintenance_text')),
			'email'				=> trim($this->CI->input->post('email')),
			'password'			=> trim($this->CI->input->post('password')),
			'ga'				=> trim($this->CI->input->post('ga')),
			'tracking'			=> htmlentities($this->CI->input->post('tracking')),
			'gtm_code'			=> htmlentities($this->CI->input->post('gtm_code')),
		);
		// pr($data,1);
		$this->CI->db->update(ADMIN_SETTING_TB, $data, "id = 1");
		$txt= 'Update successful';
		AdminSetting();
	}
	
	/* Save */				
	function deleteFileTmp(){
		$time_delete= date('Y-m-d 00:00:00', strtotime('-1 day'));
		$file_tmp= $this->fetch('*', FILE_TMP_TB, "created <= '{$time_delete}'");
		if(!empty($file_tmp))
		{
			foreach($file_tmp as $row)
			{
				if($this->CI->db->delete(FILE_TMP_TB, "id = '{$row->id}'"))
				{
					@unlink(DIR_UPLOAD_TMP.$row->file);
				}
			}
		}
	}
	
	/*GET DATA*/
	function getUser($data){
		$query= $this->CI->db
					->select('*')
					->where("username = '{$data['username']}' AND password = '{$data['password']}'")
					->get(ADMIN_USER_TB)
					->row();
		return ($query)? $query : FALSE;
	}
		
	function getQueryPageList($limit=-1, $page=-1, $get= array(), &$data_query=''){
		$module_table= PREFIX.$get['module']->folder;
		$data_query= array();$select= $module_table.'.id, ';
		$status= (empty($get['excel'])) ? " AND status = 1" : "";
		$list_field= $this->fetch('*', ADMIN_MODULE_LIST_FIELD_TB, "mid = '{$get['mid']}' ".$status, "order", "asc");
		
		$where_keyword= '';$array_join= array();
		
		if(!empty($list_field))
		{
			foreach($list_field as $row){
				$data= json_decode($row->data);
	
				$field_edit= $this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$get['mid']}' AND field = '{$data->primary_field}'");
			
				if($row->type=='primary')
				{
					$primary_field= admin_field($data->primary_field, $data);

					$data_query[]= array(
						'name'		=> $row->name,
						'select'	=> $primary_field,
						'field'		=> $primary_field,
						'type'		=> (!empty($field_edit)) ? $field_edit->type : '',
						'data'		=> (!empty($field_edit)) ? $field_edit->data : ''
					);
					$select.= $module_table . '.' . $primary_field . ', ';
					$where_keyword.= $module_table . '.' . $primary_field ." LIKE '%".$get['keyword']."%' OR ";
				}
				else
				{
					$foreign_field= explode('|', $data->foreign_field);
					$foreign_table= $foreign_field[1];
					$table_foreign_field= admin_field($data->table_foreign_field, $data);
				
					$data_query[]= array(
						'name'		=> $row->name,
						'select'	=>	$table_foreign_field.'_'.$foreign_table,
						'field'		=>	$table_foreign_field,
						'join'		=> (!in_array($foreign_table, $array_join)) ? $foreign_table : '',
						'where'		=> $module_table.'.'.$foreign_field[0].' = '.$foreign_table.'.id',
						'type'		=> (!empty($field_edit)) ? $field_edit->type : '',
						'data'		=> (!empty($field_edit)) ? $field_edit->data : ''
					);
					$select.= $foreign_table . '.' . $table_foreign_field .' AS '. $table_foreign_field ."_{$foreign_table}, ";
					$where_keyword.= $foreign_table . '.' . $table_foreign_field ." LIKE '%".$get['keyword']."' OR ";
					$array_join[]= $foreign_field[1];
				}
			}

			$where_keyword= '('.substr($where_keyword,0,-4).')';
	
			$select.= $module_table . '.status, '.$module_table.'.changed, '.$module_table.'.created';
			
			if(empty($get['excel']))
			{
				$data_query[]= array(
					'name'		=> 	'Status',
					'select'	=>	'status',
					'field'		=>  'status',
					'type'		=> 	'status'
				);
			}
			$data_query[]= array(
				'name'		=> 'Created',
				'select'	=> 'created',
				'field'		=> 'created',
				'type'		=> 'created'
			);			
		}

		/*
			SELECT
		*/
		if($limit == -1)
		{
			$this->CI->db->select('count(*) as sum');
		}
		else
		{
			$this->CI->db->select($select);
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->CI->db->limit($limit, $page);
			}
		}
		
		/*
			WHERE
		*/
		if(!empty($get['keyword']))
		{
			$this->CI->db->where($where_keyword);
		}
		
		if(!empty($get['filter']))
		{
			$this->CI->db->where($get['filter']->where);
		}		
		
		if(!empty($get['range']))
		{
			$range= 	explode(' - ', $get['range']);
			$start= 	date('Y-m-d', str_totime($range[0])).' 00:00:00';
			$end=		date('Y-m-d', str_totime($range[1])).' 23:59:59';
			$this->CI->db->where($module_table.".created >= '".$start. "' AND ".$module_table.".created <= '".$end."'");
		}
		
		/* 
			ORDER 
		*/		

		if(!empty($get['field']))
		{	
			$field_sort= substr($get['field'], 1);
			if(isset($data_query[$field_sort]))
			{
				if(!empty($data_query[$field_sort]['join']))
				{
					$this->CI->db->order_by($data_query[$field_sort]['join'].'.'.$data_query[$field_sort]['field'], $get['sort']);
				}
				else
				{
					$this->CI->db->order_by($module_table.'.'.$data_query[$field_sort]['field'], $get['sort']);
				}
			}			
		}
		else
		{
			$this->CI->db->order_by($module_table.'.created', 'DESC');
		}
		
		/*
			JOIN
		*/
		$t='';
		$this->CI->db->from($module_table);
		if(!empty($data_query)){
			foreach($data_query as $row){
				if(!empty($row['join']))
				{
					$t.= $row['join'];
					$this->CI->db->join($row['join'], $row['where'], 'left outer');
				}
			}
		}

		$query = $this->CI->db->get();

		if($query->result())
		{
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{
				return $query->result();
			}
		}
		else
		{
			return false;
		}		
	}
	
	function getLogs($limit=-1, $page=-1, $get){
		if($limit == -1)
		{
			$this->CI->db->select('count(*) as sum');
		}
		else
		{
			$this->CI->db->select('logs.*, user.username, module.name');
			//EXPORT EXCEL
			if(empty($get['excel']))
			{
				$this->CI->db->limit($limit, $page);
			}
		}
		
		$this->CI->db->join(ADMIN_USER_TB." AS user", "user.id = logs.uid", "left outer");
		$this->CI->db->join(ADMIN_MODULE_TB." AS module", "module.id = logs.mid", "left outer");
		$this->CI->db->from(ADMIN_LOGS_TB." AS logs");
		
		if(!empty($get['field']))
		{	
			$this->CI->db->order_by($get['field'], $get['sort']);		
		}
		else
		{
			$this->CI->db->order_by('logs.changed', 'DESC');
		}
		
		if(!empty($get['range']))
		{
			$range= 	explode('-', $get['range']);
			$start= 	date('Y-m-d H:i:s', strtotime($range[0]));
			$end=		date('Y-m-d', strtotime($range[1])).' 23:59:59';
			$this->CI->db->where("logs.created >= '".$start. "' AND logs.created <= '".$end."'");
		}		
		
		if(!empty($get['keyword']))
		{
			$keyword= $get['keyword'];
			$this->CI->db->where("(logs.nid = '{$keyword}' OR logs.type = '$keyword' OR logs.title LIKE '%$keyword%' OR user.username LIKE '%$keyword%' OR module.name LIKE '%$keyword%')"); 
		}		
		
		$query = $this->CI->db->get();

		if($query->result()){
			if($limit == -1){
				return $query->row()->sum;
			}
			else{
				return $query->result();
			}
		}else{
			return false;
		}			
	}
	
	function getGA($get= ''){
		$this->CI->ga_api->dimension('date');
		$this->CI->ga_api->metric('visits, pageviews');
			if(!empty($get['start']) && !empty($get['end'])){
				$start= date('Y-m-d', strtotime($get['start']));
				$end= date('Y-m-d', strtotime($get['end']));
				$end= ($end == '1970-01-01') ? date('Y-m-d') : $end;
				$this->CI->ga_api->when($start, $end);
			}
		$this->CI->ga_api->sort_by('date', 'asc');
		return $this->CI->ga_api->get_object();		
	}
	
	function getUserPercent($sum_user){
		$direct= $this->get('count(*) as count', USER_TB, "type = 'direct'");
		$facebook= $this->get('count(*) as count', USER_TB, "type = 'facebook'");
		$google= $this->get('count(*) as count', USER_TB, "type = 'google'");
		$yahoo= $this->get('count(*) as count', USER_TB, "type = 'yahoo'");
	
		$data= array(
			'direct'		=> (!empty($sum_user)) ? ($direct->count / $sum_user * 100) : 0,
			'facebook'		=> (!empty($sum_user)) ? ($facebook->count / $sum_user * 100) : 0,
			'google'		=> (!empty($sum_user)) ? ($google->count / $sum_user * 100) : 0,
			'yahoo'			=> (!empty($sum_user)) ? ($yahoo->count / $sum_user * 100) : 0
		);
		
		return $data;
	}
	
	function getUserChart($date){
		$query= $this->CI->db
				->select("count(*) as count")
				->where("DATE(created) = '{$date}'")
				->get(USER_TB)
				->row();
		return ($query) ? $query->count : FALSE;
	}
			
	function getPermissionModule(){
		$mid= array();
		$query= $this->CI->db
				->select("role_permission.mid")
				->from(ADMIN_USER_TB." as user")
				->join(ADMIN_ROLE_TB." as role", "role.id = user.rid")
				->join(ADMIN_ROLE_PERMISSION_TB." as role_permission", "role_permission.rid = role.id")
				->where("user.id = '{$this->uid}'")
				->get()
				->result();
		if(!empty($query))
		{
			foreach($query as $row)
			{
				$mid[]= $row->mid;
			}
		}
		
		return ($mid) ? $mid : array();
	}
	
	function getUserManage($limit=-1, $page=-1, $get= array()){
		if($limit == -1)
		{	
			$this->CI->db->select('count(*) as sum');
		}
		else
		{
			$this->CI->db->select('user.*, role.name as role_name');
			$this->CI->db->limit($limit, $page);
		}
		
		$this->CI->db->join(ADMIN_ROLE_TB." as role", "role.id = user.rid");
		$this->CI->db->from(ADMIN_USER_TB." as user");
		
		$this->CI->db->where("user.admin = 0");
		if(!empty($get['k']))
		{
			$keyword= $get['k'];
			$this->CI->db->where("(user.fullname LIKE '%$keyword%' OR user.username LIKE '%$keyword%' OR email LIKE '%$keyword%' OR role.name LIKE '%$keyword%')");
		}
		
		$query= $this->CI->db->get();

		if($query->result())
		{
			if($limit == -1)
			{
				return $query->row()->sum;
			}
			else
			{
				return $query->result();
			}
		}
		else
		{
			return false;
		}				
		
	}
	function send_email($data= '') {
		$this->CI->load->library('email');
		$config['useragent'] = USERAGENT;
		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		/*$config['smtp_host'] = 'smtp.sendgrid.com';
        $config['smtp_user'] = 'wizardtest';
        $config['smtp_pass'] = '75t1NWHWXD';*/
        $config['smtp_host'] = 'smtp.mandrillapp.com';
        $config['smtp_user'] = 'it@talentnet.vn';
        $config['smtp_pass'] = 'MKvSk2le9OuLiGjzp5vj6Q';
        $config['smtp_port'] = '587';
        
		$this->CI->email->initialize($config);

		$this->CI->email->from(EMAIL_FORM, EMAIL_NAME);
		$this->CI->email->to($data['email']);
		$this->CI->email->subject($data['subject']);
		$this->CI->email->message($data['html']);

		if(!empty($data['attach'])){

			$this->CI->email->attach($data['attach']);
		}

		if( isset($data['cc']) && $data['cc'] !== false && !empty($data['cc'])){
            $this->CI->email->cc($data['cc']);
        }

        if( isset($data['bcc']) && $data['bcc'] !== false && !empty($data['bcc'])){
            $this->CI->email->bcc($data['bcc']);
        }
        
		if($this->CI->email->send()) {
			return true;
		}
		//print_r($this->email->print_debugger());
	}	
}