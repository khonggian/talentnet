<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminwz_model extends MY_Model {
	var $require_txt= 'This field is required';

	function getPermissionModule(){
		$mid= array();
		$query= $this->db
				->select("role_permission.mid")
				->from(ADMIN_USER_TB." as user")
				->join(ADMIN_ROLE_TB." as role", "role.id = user.rid")
				->join(ADMIN_ROLE_PERMISSION_TB." as role_permission", "role_permission.rid = role.id")
				->where("user.id = '{$this->session->userdata('admin_uid')}'")
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
	
	function getListTagsName($mid, $nid){
		$query= $this->db
					->select("tags.id, tags.name")
					->from(TAGS_JOIN_TB." AS tags_join")
					->join(TAGS_TB." AS tags", "tags.id = tags_join.tid")
					->order_by("tags_join.created", "asc")
					->where("mid = '{$mid}' AND nid = '{$nid}'")
					->get()
					->result();
		return ($query)? $query : FALSE;
	}	
		
	function getReminder(&$count_result, &$past_reminder, $start= '', $end= ''){
		if(empty($start) && empty($end))
		{
			$past= date('Y-m-d', strtotime("-7 day"));
			$now= date('Y-m-d', strtotime("-1 day"));
			$end= date('Y-m-d', strtotime("+7 day"));
		}
		else
		{
			$past= date('Y-m-d', strtotime($start." - 7day"));
			$now= $start;
			$end= $end;
		}
		
		$list= array();
		$group= array();
		$past_reminder= $this->get("count(*) as count", ADMIN_REMINDER_TB, "DATE(time) > '{$past}' AND DATE(time) < '{$now}' AND status = 1");
		$past_reminder= ($past_reminder->count > 0) ? array($past, $now) : array();
		
		$this->db->select('*, DATE(time) AS date');
		$this->db->where("DATE(time) > '{$now}' AND DATE(time) < '{$end}' AND status = 1");
		$this->db->order_by("time", "asc");
		$query= $this->db->get(ADMIN_REMINDER_TB);
		
		$result= ($query->result()) ? $query->result() : array();
		$count_result= count($result);
		if(!empty($result)){
			$count= 0;
			foreach($result as $row){
				$frist= $row->date;
				if(!in_array($frist, $group))
				{
					$group[$count]= $frist;
					$count++;
				}
				
				$list[$frist][]= $row;
			}
		}
		return array_to_object($list);
	}
	
	function deleteReminder($id){
		$this->db->delete(ADMIN_REMINDER_TB, "id = '{$id}'");
		$json= array(
			'st'	=> 'SUCCESS',
			'type'	=> 'delete'
		);
		print_r(json_encode($json));
	}	
	
	function getForm($row, &$form){
		$row->data= json_decode($row->data);
		$slug= 'slug';
		$slug= admin_field('slug', $row->data);
		
		switch($row->type){
			case('content'):
				$form.= $this->load->view('admin/field/content', $row, true);
				break;		
			case('color'):
				$this->template->add_css('assets/admin/bootstrap-colorpicker/css/colorpicker.css');
				$this->template->add_js('assets/admin/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
				$form.= $this->load->view('admin/field/color', $row, true);
				break;		
			case('checkbox'):
				$form.= $this->load->view('admin/field/checkbox', $row, true);
				break;						
			case('datetimepicker'):
				$form.= $this->load->view('admin/field/datetimepicker', $row, true);
				break;							
			case('file'):
				$form.= $this->load->view('admin/field/file', $row, true);
				break;
			case('file_multiupload'):
				$row->field_content= $this->adminwz_model->fetch('*', FILE_TB, "mid = '{$row->mid}' AND nid = '{$row->nid}' AND field = '{$row->id}'", 'order asc, created', 'desc');
				$form.= $this->load->view('admin/field/file_multiupload', $row, true);						
				break;
			case('maps'):
				$this->template->add_js('http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&callback=geoinitialize', 'outside');
				$this->template->add_js('assets/admin/geocomplete/jquery.geocomplete.js');
				$form.= $this->load->view('admin/field/maps', $row, true);	
				break;
			case('select'):
				$form.= $this->load->view('admin/field/select', $row, true);						
				break;								
			case('select_foreign_table'): 
				$row->select= $this->adminwz_model->fetch('*', $row->data->table_foreign, "status = 1", "{$slug}", "asc");
				$form.= $this->load->view('admin/field/select_foreign_table', $row, true);
				break;
			case('select_foreign_recursive'): 
				$row->select= $this->getRecursive($row->data->table_foreign, 0, $row);
				$row->recursive=  $this->getSelectRecursive($row->select, 0, $row->field_content);
				$form.= $this->load->view('admin/field/select_foreign_recursive', $row, true);
				break;	
			case('select_foreign_table_children'): 
				$parent_id= $row->data->parent_field;
				$row->parent_field= $this->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$parent_id}'");
				$form.=  $this->load->view('admin/field/select_foreign_table_children', $row, true);
				break;	
			case('group'):
				$form.= $this->load->view('admin/field/group', $row, true);	
				break;		
			case('price'):
				$this->template->add_js('assets/admin/jquery.number/jquery.number.js');
				$form.= $this->load->view('admin/field/price', $row, true);	
				break;
			case('radio'):
				$form.= $this->load->view('admin/field/radio', $row, true);
				break;	
			case('textarea'):
				$form.= $this->load->view('admin/field/textarea', $row, true);
				break;								
			case('tags'):
				$row->field_content= $this->adminwz_model->getListTagsName($row->mid, $row->nid);
				$this->template->add_css('assets/admin/tags-input/jquery.tagsinput.css');
				$this->template->add_js('assets/admin/tags-input/jquery.tagsinput.js');
				$form.= $this->load->view('admin/field/tags', $row, true);	
				break;
			case('text'):
				$form.= $this->load->view('admin/field/text', $row, true);
				break;
			case('youtube'):
				$form.= $this->load->view('admin/field/youtube', $row, true);
				break;									
		}		
	}	
	
	function getIDS($module, $row){
		$field_select= $row->field;
		$ids=  random_string();
		
		while($this->get('id', PREFIX.$module->folder, "{$field_select} = BINARY '{$ids}'")){
			$ids=  random_string();
		}
		
		return $ids;
	}
	
	function getFormData($mid, $nid=0, &$data, &$data_field, &$arr_error, &$error){
		$edit_field= $this->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$mid}'", "order", "asc");
		$module= $this->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");

		$result= $this->get('*', PREFIX.$module->folder, "id = '{$nid}'");
		$ids= '';
		if(!empty($edit_field))
		{
			foreach($edit_field as $row)
			{
				$field_data= json_decode($row->data);
				if(!empty($row->require))
				{
					if($row->type!= 'slug')
						$this->validate_ext($arr_error, $error, $row->field.'_'.$row->id, $row->name.' field is required.');
				}	
				$value= $this->input->post($row->field.'_'.$row->id);
				switch($row->type){
					case('content'):
						$data[$row->field]= input_editor($value);
						break;
					case('checkbox'):
						$data[$row->field]= json_encode($value);
						break;
					case('color'):
						$data[$row->field]= $value;
						break;							
					case('textarea'):
						$data[$row->field]= filter_input_xss($value);
						break;
					case('datetimepicker'):
						$data[$row->field]= (!empty($field_data->date)) ? date('Y-m-d', str_totime($value)) : date('Y-m-d H:i:s', str_totime($value));
						break;
					case('file'):
						$data_field['file'][]= $row;
						break;
					case('file_multiupload'):
						$data[$row->field]= $value;
						$data_field['file_multiupload'][]= $row;
						break;
					case('ids'):
						$field_select= $row->field;
						if(empty($result->$field_select)){
							$data[$row->field]= $this->getIDS($module, $row);
						}else{
							$data[$row->field]= $result->$field_select;
						}
						$ids= $data[$row->field];
						break;
					case('maps'):		
						$maps= array(
							'lat'		=> $this->input->post($row->field.'_'.$row->id.'_lat'),
							'lng'		=> $this->input->post($row->field.'_'.$row->id.'_lng'),
							'address'	=> $this->input->post($row->field.'_'.$row->id.'_formatted_address')
						);
						$data[$row->field]=  json_encode($maps);
						break;
					case('price'):
						$data[$row->field]= $value;
						break;							
					case('select'):
						$data[$row->field]= (is_array($value)) ? json_encode($value) : $value;
						break;
					case('select_foreign_table'): 
						$data[$row->field]= (is_array($value)) ? json_encode($value) : $value;
						break;
					case('select_foreign_recursive'): 
						$data[$row->field]= $value;
						break;							
					case('select_foreign_table_children'): 
						$data[$row->field]= (is_array($value)) ? json_encode($value) : $value;
						break;								
					case('slug'):
						$row->data= json_decode($row->data);
						if(!empty($row->data->field_to_slug))
						{
							$field= $this->get('id, field', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$row->data->field_to_slug}'");
							if(!empty($field))
							{
								$ids= (!empty($ids)) ? '-'.$ids : '';
								$data[$row->field]= toSlug($this->input->post($field->field.'_'.$field->id)).$ids;
							}
						}
						break;
					case('radio'):
						$data[$row->field]= $value;
						break;						
					case('tags'):
						$data_field['tags'][]= $row;
						$data[$row->field]= count(explode(',', $value));
						break;
					case('text'):
						if(!empty($field_data->unique)){
							$this->validate_text_unique($arr_error, $error, $module, $result, $row);
						}
						$data[$row->field]= filter_input_xss($value);
						$data_field['text'][]= $value;
						break;
					case('youtube'):
						if($value)
						{
							$this->validate_youtube($arr_error, $error, $row->field.'_'.$row->id, 'Youtube link incorrect', $youtube_id);
							$data[$row->field]= $youtube_id;
						}
						break;
				}
			}
		}
	}
	
	function manage_module_role($module, $pid= 0){
		$id= (int)$this->input->get('id');
		$html= '';
	
		if(!empty($module)){
			$class= (empty($pid)) ? 'class="tree"' : '';
			$html.= '<ul '.$class.'>';
			foreach($module as $row){
				$html.= '<li>';
				$html.= '<div class="name">'.ucfirst($row->name).'</div>';
				
				$module_permission_role[$row->id]= $this->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$id}' AND mid = '{$row->id}'");
				$row->module_permission_role= $module_permission_role;
				$html.= '<div>'.$this->load->view('user/module_role', $row, true).'</div>';
				if(!empty($row->children)){
					$html.= $this->manage_module_role($row->children, $row->id);
				}				
				$html.= '</li>';
			}
			$html.= '</ul>';
		}
		return $html;		
	}
	
	function menu_manage_module($module){
		$html= '';
		if(!empty($module)){
			$html.= '<ol class="dd-list">';
			foreach($module as $row){
				$html.= '<li data-id="'.$row->id.'" class="dd-item">';
				$html.= '<div class="dd-handle">'.ucfirst($row->name).'</div>';
				if(!empty($row->children)){
					$html.= $this->menu_manage_module($row->children);
				}				
				$html.= '</li>';
			}
			$html.= '</ol>';
		}
		return $html;
	}
	
	/* function menu_module_left($module, $pid=0){
		$mid= (int)$this->input->get('mid');
		$html= '';
		if(!empty($module)){
			if($pid != 0) $html.= '<ul class="sub-menu">';
			foreach($module as $row){
				if($this->check_role_module($row->id)){
					$active= ($mid==$row->id) ? 'active' : '';
					$main= ($pid==0) ? 'main' : '';
					$html.= '<li class="'.$main.$active.'">';
					$html.= '<a href="'.getManageModuleLink($row).'">';
					if($pid == 0) $html.= '<i class="icon-folder-open"></i>';
					$html.= ucfirst($row->name);
					if(!empty($row->children)) $html.= '<span class="arrow open"></span>';
					$html.= '</a>';
					if(!empty($row->children)){
						$html.= $this->menu_module_left($row->children, $row->id);
					}				
					$html.= '</li>';
				}
			}
			if($pid != 0) $html.= '</ul>';
		}
		return $html;
	}	*/
	function menu_module_left($module, $pid=0){
	  $mid= (int)$this->input->get('mid');
	  $html= '';
	  if(!empty($module)){
	   if($pid != 0) $html.= '<ul class="sub-menu">';
	   foreach($module as $row){
	    if($row->status == 1)
	    {
	     if($this->check_role_module($row->id)){
	      $active= ($mid==$row->id) ? 'active active-main' : '';
	      $main= ($pid==0) ? 'main ' : '';
	      $class= (!empty($main) || !empty($active)) ? 'class="'.$main.$active.'"' : '';
	      $html.= '<li '.$class.'>';
	      
	      $html.= '<a href="'.getManageModuleLink($row).'">';
	      //if($pid == 0) $html.= '<i class="icon-folder-open"></i>';
	      $html.= ucfirst($row->name);
	      if(!empty($row->children)) $html.= '<span class="arrow open"></span>';
	      $html.= '</a>';
	      if(!empty($row->children)){
	       $html.= $this->menu_module_left($row->children, $row->id);
	      }    
	      $html.= '</li>';
	     }
	    }
	   }
	   if($pid != 0) $html.= '</ul>';
	  }
	  return $html;
	}
	
	function check_role_module($mid){
		if($this->session->userdata('admin')){
			return true;
		}else{
			$role= $this->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$this->session->userdata('admin_rid')}' AND mid = '{$mid}'");

			if(!empty($role)){
				return true;
			}
		}
		return false;
	}
	
	function getSelectRecursive($object, $count=0, $field_content){	
		$html= '';
		if(!empty($object))
		{
			foreach($object as $row){
				$sep= '';
				for($i=0;$i<$count;$i++) {
					if(empty($sep)) {
						$sep= '&nbsp;-';
					}else{
						$sep.= '&nbsp;-';
					}
				}
				if(empty($sep)) $sep= '+';
				$selected= ($field_content==$row->id) ? 'selected' : '';
				$html.='<option value="'.$row->id.'" '.$selected.'>'.$sep.' '.$row->name.'</option>';
				$html.=$this->getSelectRecursive($row->child, $count + 1, $field_content);
				
			}
		}
		return $html;
	}	
	
	function getRecursiveModule($pid=0){
		$result= $this->fetch('id, pid, type, custom, folder, name, status', ADMIN_MODULE_TB, "pid = '{$pid}' AND status = 1", "order", "asc");
		if(!empty($result)){
			foreach($result as $row){
				$row->children= $this->getRecursiveModule($row->id);
			}
		}
		return $result;
	}
	
	function getRecursive($table, $pid= 0, $field){
		$array= array();
		
		$data= $field->data;
		$slug= admin_field('slug', $field->data);
	    $this->db->select('*');
		$this->db->from($table);
		$this->db->where('pid', $pid);

		$this->db->order_by($slug, "asc");
		
		$q = $this->db->get();
		$result = $q->result();
		$n = $q->num_rows();
		$count= 0;
		foreach($result as $row)
		{
			if ($n > 0)
			{
				$field_select= admin_field($field->data->table_foreign_field, $field->data);
				$array[$count]['id'] = $row->id;
				$array[$count]['name'] = $row->$field_select;
				$array[$count]['child']= $this->getRecursive($table, $row->id, $field);
			}
			$count++;
		}
		return array_to_object($array);
	}		
	
	function logs($type, $logs='', $mid=0 , $nid=0, $title= array()){
		$uid= $this->session->userdata('admin_uid');
		$created= date('Y-m-d');
		$result= $this->get('*', ADMIN_LOGS_TB, "nid = '{$nid}' AND type = '{$type}'", "created", "desc");
				
		$data= array(
			'uid'		=> $uid,
			'mid'		=> $mid,
			'nid'		=> $nid,
			'type'		=> $type,
			'title'		=> (!empty($title[0])) ? $title[0] : ''
		);	
		
		if(!empty($logs))
		{
			unset($logs['changed']); unset($logs['created']);
			unset($logs['data']['changed']); unset($logs['data']['created']);	
			$data['data']= htmlentities(json_encode($logs['data']));			
		}		
		
		if(empty($result))
		{		
			$data['changed']= NOW;
			$data['created']= NOW;
			$this->db->insert(ADMIN_LOGS_TB, $data);
		}
		else
		{

			$different=  array_diff(json_decode((html_entity_decode($data['data'])), TRUE), json_decode(html_entity_decode($result->data), TRUE));
			if(!empty($different))
			{
				$data['data']= htmlentities(json_encode($different));
				$data['changed']= NOW;
				$data['created']= NOW;				
				$this->db->insert(ADMIN_LOGS_TB, $data);
			}
		} 
	}
	
	function saveFile($nid, $module, $row, &$item=''){
		$token= filter_input_xss($this->input->post($row->field.'_'.$row->id.'_token'));
		$file_data= json_decode($row->data);
		$row_file_tmp= $this->fetch('*', FILE_TMP_TB, "token = '{$token}'");
		$field_name= $row->field;
		
		if(!empty($row_file_tmp))
		{
			foreach($row_file_tmp as $file_tmp)
			{
				$upload_folder_now= getFolderNowFile($file_tmp->file);
				newFolder($file_data->directory.$upload_folder_now);				
				if(rename(DIR_UPLOAD_TMP.$file_tmp->file, $file_data->directory.$file_tmp->file))
				{
					$result= $this->get('*', PREFIX.$module->folder, "id = '{$nid}'");
					@unlink($file_data->directory.$result->$field_name);
					$data= array(
						$field_name => $file_tmp->file
					);
					$item[]= $file_tmp->file;
					$this->db->update(PREFIX.$module->folder, $data, "id = '{$nid}'");
					$this->db->delete(FILE_TMP_TB, "id = '{$file_tmp->id}'");
				}
			}
		}else{
			$result= $this->get('*', PREFIX.$module->folder, "id = '{$nid}'");
			if(!empty($result))
			{
				$item[]= $result->$field_name;
			}
		}		
	}	
	
	function saveFileMulti($nid, $module, $row, $type, &$item){
		$token= filter_input_xss($this->input->post($row->field.'_'.$row->id.'_token'));
		$file_data= json_decode($row->data);
		if($type == 'insert')
		{
			$row_file_tmp= $this->fetch('*', FILE_TMP_TB, "token = '{$token}'");
			if(!empty($row_file_tmp))
			{
				foreach($row_file_tmp as $file_tmp)
				{
					$upload_folder_now= getFolderNowFile($file_tmp->file);
					newFolder($file_data->directory.$upload_folder_now);				
					if(rename(DIR_UPLOAD_TMP.$file_tmp->file, $file_data->directory.$file_tmp->file))
					{
						$data_file= array(
							'mid'		=> $module->id,
							'nid'		=> $nid,
							'field'		=> $row->id,
							'data'		=> json_encode(array(
								'title'		=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_title')),
								'caption'	=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_caption')),
								'youtube'	=> ($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_youtube')) ? youtube_id($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_youtube')) : ''
							)),
							'file'		=> $file_tmp->file,
							'order'		=> (int)$this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_order'),
							'changed'	=> NOW,
							'created'	=> NOW
						);
						$item[]= array(
							'title'		=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_title')),
							'caption'	=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file_tmp->id.'_file_caption')),
							'file'		=> $data_file['file']
						);
						$this->db->insert(FILE_TB, $data_file);
						$this->db->delete(FILE_TMP_TB, "id = '{$file_tmp->id}'");
					}
				}
			}
		}
		else
		{
			//Update
			$row_file= $this->fetch('*', FILE_TB, "mid = '{$module->id}' AND nid = '{$nid}' AND field = '{$row->id}'", "order asc, created", "desc");
			
			if(!empty($row_file)){
				foreach($row_file as $file){
					$data_file= array(
						'mid'		=> $module->id,
						'nid'		=> $nid,
						'field'		=> $row->id,
						'data'		=> json_encode(array(
							'title'		=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_title')),
							'caption'	=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_caption')),
							'youtube'	=> ($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_youtube')) ? youtube_id($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_youtube')) : ''
						)),
						'order'		=> $this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_order'),
						'changed'	=> NOW
					);		
					$item[]= array(
						'title'		=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_title')),
						'caption'	=> filter_input_xss($this->input->post($row->field.'_'.$row->id.'_'.$file->id.'_file_caption')),
						'file'		=> $file->file
					);			
					$this->db->update(FILE_TB, $data_file, "id = '{$file->id}'");
				}
			}
		}
	}	
	
	function saveTags($nid, $module, $row, &$item= ''){
		$tags= $this->input->post($row->field.'_'.$row->id);
		$item[]= $tags;
		if(!empty($tags))
		{
			$arr_tags= explode(',', $tags);
			/*DELETE OLD TAGS NOT IN CURRENT POST*/
			$join_tags= $this->fetch('*', TAGS_JOIN_TB, "mid = '{$module->id}' AND nid = '{$nid}'");
			if(!empty($join_tags))
			{
				foreach($join_tags as $jtags)
				{
					$tags= $this->get('*', TAGS_TB, "id = '{$jtags->tid}'");
					if(!empty($tags))
					{
						$tags_name= $tags->name;
						if(!in_array($tags_name, $arr_tags))
						{
							$this->db->delete(TAGS_JOIN_TB, "mid = '{$module->id}' AND nid = '{$nid}'");
						}					
					}
				}
			}
			
			/*TAGS INPUT*/
			foreach($arr_tags as $row)
			{
				$row= filter_input_xss($row);
				$tags= $this->get('*', TAGS_TB, "name = '{$row}'");
				if(empty($tags))
				{
					$data_tags= array(
						'name' 		=> $row,
						'slug' 		=> toSlug($row),
						'changed'	=> NOW,
						'created'	=> NOW
					);
					$this->db->insert(TAGS_TB, $data_tags);	
					$tags= $this->get('*', TAGS_TB, "name = '{$row}'");				
				}
				
				/*CHECK JOIN*/
				$check_join= $this->get('*', TAGS_JOIN_TB, "mid = '{$module->id}' AND nid = '{$nid}' AND tid = '{$tags->id}'");
				if(empty($check_join))
				{
					$data_tags_join= array(
						'mid'		=> $module->id,
						'nid'		=> $nid,
						'tid'		=> $tags->id,
						'changed'	=> NOW,
						'created'	=> NOW
					);
					$this->db->insert(TAGS_JOIN_TB, $data_tags_join);
				}			
			}
		}
		else
		{
			$this->db->delete(TAGS_JOIN_TB, "mid = '{$module->id}' AND nid = '{$nid}'");			
		}
	}	
	
	function formFunction($nid, $module, $data, $data_field, $type){
		$logs= array();
		$file= 					(!empty($data_field['file'])) ? array_to_object($data_field['file']) : array();
		$file_multiupload= 		(!empty($data_field['file_multiupload'])) ? array_to_object($data_field['file_multiupload']) : array();
		$tags= 					(!empty($data_field['tags'])) ? array_to_object($data_field['tags']) : array();
		
		/*DATA FIELD*/
			/*FILE*/
			if(!empty($file))
			{
				foreach($file as $f)
				{
					$this->adminwz_model->saveFile($nid, $module, $f, $logs[$f->field]);
				}
			}		
			/*FILE MULTIUPLOAD*/

			if(!empty($file_multiupload))
			{
				foreach($file_multiupload as $file)
				{
					$this->adminwz_model->saveFileMulti($nid, $module, $file, $type, $logs[$file->field]);
				}
			}
			/*TAGS*/
			if(!empty($tags))
			{
				foreach($tags as $t)
				{
					$this->adminwz_model->saveTags($nid, $module, $t, $logs[$t->field]);
				}
			}	
			$logs_type= ($type == 'insert') ? $type : 'edit';
			$logs['data']= $data;
			$title_log= (!empty($data_field['text'])) ? $data_field['text'] : '';
			$this->logs($logs_type, $logs, $module->id, $nid, $title_log);		
	}
	
	function validate_text_unique(&$arr_error='', &$error='', $module, $result, $row){
	  $field= $row->field.'_'.$row->id;
	  $unique= filter_input_xss($this->input->post($field));
	  $skip= false;
	  if($this->adminwz_model->validate_null($arr_error, $form_error, $field)){
	   if(!empty($result)){
	    $field_select= $row->field;
	    if($result->$field_select == $unique){
	     $skip= true;
	    }
	   }
	   
	   if(empty($skip))
	   {
	    $exist= $this->get('*', PREFIX.$module->folder, "{$row->field} = '$unique'");
	    if(!empty($exist)){
	     $arr_error[]= array(
	      'field' => $field,
	      'txt' => $module->name.' is unique'
	     );
	     $form_error= true;
	    }     
	   }
	  }else{
	   $arr_error[]= array(
	    'field' => 'email',
	    'txt' => $this->require_txt
	   ); 
	  }
	  $this->adminwz_model->validate_error($error, $form_error);
	 }	
}
?>