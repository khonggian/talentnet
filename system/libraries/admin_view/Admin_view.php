<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Admin_view {

	var $CI;
	var $mid;
	var $uid;
	var $rid;

	public function __construct($config = array())
	{
		$this->CI =& get_instance();
		$this->CI->load->library('admin_model');
		$this->mid= (int)$this->CI->input->get('mid');
		$this->uid= $this->CI->session->userdata('admin_uid');
		$this->rid= $this->CI->session->userdata('admin_rid');

		if (count($config) > 0)
		{
			$this->initialize($config);
		}
		log_message('debug', "Admin view Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize the user preferences
	 *
	 * Accepts an associative array as input, containing display preferences
	 *
	 * @access	public
	 * @param	array	config preferences
	 * @return	void
	 */
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
	
	function login()
	{
		$this->CI->load->view('admin/login');
	}
	
	function logout(){
		//$this->CI->load->library('session');
		$this->CI->session->destroy();
		//session_destroy();
		setcookie('adminwz', '', time() - 3600, '/', ''); 
		setcookie('base_url', '', time() - 3600, '/', ''); ;
		redirect(base_url().LINK_ADMIN);
	}
	
	function dashboard()
	{	
		$data= array(
			'sum_user'		=> $this->CI->admin_model->get('count(*) as count', USER_TB, ""),
			'sum_comment'	=> $this->CI->admin_model->get('count(*) as count', COMMENT_TB, "")		
		);
		$data['user_percent']= array_to_object($this->CI->admin_model->getUserPercent($data['sum_user']->count));
				
		$this->CI->template->add_js('assets/admin/high-charts/highcharts.js');
		$this->CI->template->write('title', 'Admin - Dashboard');
		$this->CI->template->write_view('content', 'dashboard', $data);
		$this->CI->template->render();
	}
	
	function setting(){
		$data= array(
			'result'	=> $this->CI->admin_model->get('*', ADMIN_SETTING_TB)
		);
		
		$this->CI->template->write('title', 'Admin - Setting');
		$this->CI->template->write_view('content', 'setting', $data);
		$this->CI->template->render();		
	}
	
	function get_tags(){
	
		$term= filter_input_xss($this->CI->input->get('term'));

		$result= $this->CI->admin_model->fetch('*', TAGS_TB, "name LIKE '%$term%'");
		$data= array();
		if(!empty($result))
		{
			foreach($result as $row){
				$data[]= array(
					'id' => $row->id,
					'label' => $row->name,
					'value' => $row->name
				);
			}		
		}
		print_r(json_encode($data));		
	}
	
	function manage_module()
	{		
		global $module_list;
		$data= array(
			'permission'	=> $this->CI->admin_model->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$this->rid}' AND mid = '{$this->mid}'"),
			'module'		=> $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$this->mid}'"),
			'menu_module' 	=> $this->CI->adminwz_model->menu_manage_module($module_list),
			'result'		=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_TB, "", "slug", "ASC")
		);
	
		$this->CI->template->add_css('assets/admin/jquery-nestable/jquery.nestable.css');
		$this->CI->template->write('title', 'Admin - Manage module list');
		$this->CI->template->write_view('content', 'manage/module', $data);
		$this->CI->template->render();	
	}		
	
	function manage_module_edit()
	{
		$mid= (int)$this->CI->input->get('mid');
		$this->CI->load->helper('directory');
		$directory = directory_map('application/modules/');
		$data= array(
			'result'		=> $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'"),
			'directory'		=> $directory
		);

		$this->CI->template->write('title', 'Admin - Manage module');
		$this->CI->template->write_view('content', 'manage/module_edit', $data);
		$this->CI->template->render();
	}

	function manage_page_edit(){
		$mid= (int)$this->CI->input->get('mid');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		if(!empty($module))
		{
			$data= array(
				'module'				=> $module,
				'module_list_field'		=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$mid}'", "order", 'asc')
			);

			$this->CI->template->add_css('assets/admin/data-tables/DT_bootstrap.css');
			$this->CI->template->write('title', 'Admin - '.ucfirst($module->name).' - Manage Page Edit');
			$this->CI->template->write_view('content', 'manage/page_edit', $data);
			$this->CI->template->render();
		}		
	}	
	
	function manage_page_edit_field(){
		$fid= (int)$this->CI->input->get('fid');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$this->mid}'");
		
		if(!empty($module))
		{
			$module_table= PREFIX.$module->folder;
			$module_fields = $this->CI->db->field_data($module_table);
			$data= array(
				'module'			=> 	$module,
				'module_table'		=> 	$module_table,
				'module_fields'		=> 	$module_fields,
				'field'				=> 	$this->CI->admin_model->get('*', ADMIN_MODULE_EDIT_FIELD_TB, "id = '{$fid}'"),
				'list_field'		=> 	$this->CI->admin_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$this->mid}' AND type = 'text'", 'order', 'asc'),
				'table_foreign'		=> 	$this->CI->db->query("SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".DB_NAME."' AND TABLE_NAME NOT LIKE '%admin%' AND TABLE_NAME NOT LIKE '$module_table'")->result(),
				'select_foreign_table'	=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$this->mid}' AND (type = 'select_foreign_table' OR type = 'select_foreign_table_children')", "name", "asc")
			);
			$data['field_data']= (!empty($data['field'])) ? json_decode($data['field']->data) : '';
		
			$this->CI->template->add_css('assets/admin/data-tables/DT_bootstrap.css');
			$this->CI->template->write('title', 'Admin -'.ucfirst($module->name).' - Manage Page Edit Field');
			$this->CI->template->write_view('content', 'manage/page_edit_field', $data);
			$this->CI->template->render();						
		}	
	}	
	
	function manage_page_list(){
		$mid= (int)$this->CI->input->get('mid');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		if(!empty($module))
		{
			$data= array(
				'module'				=> $module,
				'module_list_field'		=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_LIST_FIELD_TB, "mid = '{$mid}'", "order", 'asc'),
				'module_list_filter'	=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_LIST_FILTER_TB, "mid = '{$mid}'", "order", 'asc')
			);
		
			$this->CI->template->add_css('assets/admin/data-tables/DT_bootstrap.css');
			$this->CI->template->write('title', 'Admin - '.ucfirst($module->name).' - Manage Page List');
			$this->CI->template->write_view('content', 'manage/page_list', $data);
			$this->CI->template->render();
		}
	}
	
	function manage_page_list_field(){
		$fid= (int)$this->CI->input->get('fid');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$this->mid}'");
		if(!empty($module))
		{
			$module_table= PREFIX.$module->folder;
			$module_fields = $this->CI->db->field_data($module_table);
		
			$data= array(
				'module'			=> 	$module,
				'module_table'		=> 	strtoupper($module_table),
				'module_fields'		=> 	$module_fields,
				'field'				=> 	$this->CI->admin_model->get('*', ADMIN_MODULE_LIST_FIELD_TB, "id = '{$fid}'")
			);
			$data['field_data']= (!empty($data['field']))?json_decode($data['field']->data):'';
			
			$this->CI->template->add_css('assets/admin/data-tables/DT_bootstrap.css');
			$this->CI->template->write('title', 'Admin - '.ucfirst($module->name).' - Manage Page List Field');
			$this->CI->template->write_view('content', 'manage/page_list_field', $data);
			$this->CI->template->render();							
		}	
	}
	
	function manage_page_list_filter(){
		$filter= (int)$this->CI->input->get('filter');
		$module= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$this->mid}'");
		if(!empty($module))
		{
			$module_table= PREFIX.$module->folder;
			$module_fields = $this->CI->db->field_data($module_table);
		
			$data= array(
				'module'			=> 	$module,
				'module_table'		=> 	strtoupper($module_table),
				'module_fields'		=> 	$module_fields,
				'filter'			=> 	$this->CI->admin_model->get('*', ADMIN_MODULE_LIST_FILTER_TB, "id = '{$filter}'")
			);
			$data['field_data']= (!empty($data['field']))?json_decode($data['field']->data):'';
			
			$this->CI->template->add_css('assets/admin/data-tables/DT_bootstrap.css');
			$this->CI->template->write('title', 'Admin - '.ucfirst($module->name).' - Manage Page List Filter');
			$this->CI->template->write_view('content', 'manage/page_list_filter', $data);
			$this->CI->template->render();							
		}	
	}	
	
	function module_page_list(){
		$get= array(
			'mid'			=> $this->mid,
			'module'		=> $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$this->mid}'"),
			'keyword'		=> filter_input_xss($this->CI->input->get('k')),
			'sort'			=> filter_input_xss($this->CI->input->get('sort')),
			'field'			=> filter_input_xss($this->CI->input->get('field')),
			'filter'		=> $this->CI->admin_model->get('*', ADMIN_MODULE_LIST_FILTER_TB, "id = '".(int)$this->CI->input->get('filter')."'"),
			'range'			=> filter_input_xss($this->CI->input->get('range')),
			'excel'			=> filter_input_xss($this->CI->input->get('excel')) 
		);

		if(!empty($get['module']))
		{
			$page_size		= ($this->CI->input->get('ps')) ? (int)$this->CI->input->get('ps') : 10;
			$page_num		= ($this->CI->input->get('p'))? (int)$this->CI->input->get('p') : 1;
			$total_row	 	= $this->CI->admin_model->getQueryPageList(-1,-1, $get, $data_query);	
			$start_row 		= ($page_num - 1) * $page_size;		
			$pagination		= admin_pagination($total_row, $page_size, $page_num , 3);
			$result			= $this->CI->admin_model->getQueryPageList($page_size, $start_row, $get, $data_query);
			
			$data= array(
				'module'				=> $get['module'],
				'permission'			=> $this->CI->admin_model->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$this->rid}' AND mid = '{$this->mid}'"),
				'get_module'			=> json_decode($get['module']->feature),
				'module_list_field'		=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_LIST_FIELD_TB, "mid = '{$this->mid}'", "order", 'asc'),
				'count_data_query'		=> count($data_query),
				'data_query'			=> array_to_object($data_query),
				'sort'					=> ($this->CI->input->get('sort') == 'asc') ? 'desc' : 'asc',
				'current_url'			=> current_url().'?'.$_SERVER['QUERY_STRING'],
				'link_excel'			=> current_url().'?'.$_SERVER['QUERY_STRING'].'&excel=true',
				'filter'				=> $this->CI->admin_model->fetch('*', ADMIN_MODULE_LIST_FILTER_TB, "mid = '{$this->mid}'", "order", "asc"),
				'page_count'			=> $page_size * ($page_num - 1),
				'result'				=> $result,
				'pagination'			=> $pagination
			);
			
			if($get['excel'])
			{
				$this->CI->load->view('excel/index', $data);
			}
			else
			{		
				$this->CI->template->add_js('https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&callback=Admin.mapsInit', 'outside');
				$this->CI->template->add_js('assets/admin/geocomplete/jquery.geocomplete.js');
				$this->CI->template->write('title', 'Admin - '.ucfirst($get['module']->name).' - Page List');
				$this->CI->template->write_view('content', 'module/page_list', $data);
				$this->CI->template->render();						
			}
		}			
	}
	
	function module_page_edit(){
		$this->CI->session->set_userdata('referrer_page_list', $this->CI->agent->referrer());
	
		$mid= (int)$this->CI->input->get('mid');
		$nid= (int)$this->CI->input->get('nid');
		$get= array(
			'mid'	=> $mid
		);
		
		$module		= $this->CI->admin_model->get('*', ADMIN_MODULE_TB, "id = '{$mid}'");
		if(!empty($module))
		{
			/* CASE EDIT */
			if(!empty($nid))
			{
				$result= $this->CI->admin_model->get('*', PREFIX.$module->folder, "id = '{$nid}'");
				if(empty($result)) redirect(base_url().LINK_ADMIN);
			}
			/* END CASE EDIT */
			
			$field = $this->CI->admin_model->fetch('*', ADMIN_MODULE_EDIT_FIELD_TB, "mid = '{$module->id}'", "order", "asc");
			$form= '';
			if(!empty($field))
			{
				foreach($field as $row)
				{
					$field_name= $row->field;
					$row->nid= $nid;$row->mid= $mid;
					$row->field_content= (isset($result->$field_name)) ? $result->$field_name : '';
					$this->CI->adminwz_model->getForm($row, $form);
				}
			}

			$data= array(
				'get_module'	=> json_decode($module->feature),
				'module'		=> $module,
				'form'			=> $form
			);
		
			$this->CI->template->write('title', 'Admin - '.ucfirst($module->name).' - Page Edit');
			$this->CI->template->write_view('content', 'module/page_edit', $data);
			$this->CI->template->render();	
		}			
	}
	
	/* USER */
	
	function user_manage(){
		$get= array(
			'k'	=> filter_input_xss($this->CI->input->get('k'))
		);
		
		$page_size		= ($this->CI->input->get('ps')) ? (int)$this->CI->input->get('ps') : 10;
		$page_num		= ($this->CI->input->get('p')) ? (int)$this->CI->input->get('p'):1;
		$total_row	 	= $this->CI->admin_model->getUserManage(-1,-1, $get);	
		$start_row 		= ($page_num - 1) * $page_size;		
		$pagination		= admin_pagination($total_row, $page_size, $page_num , 3);
		$result			= $this->CI->admin_model->getUserManage($page_size, $start_row, $get);

		$data= array(
			'result'		=> $result,
			'pagination'	=> $pagination
		);
		
		$this->CI->template->write('title', 'Admin - User Manage');
		$this->CI->template->write_view('content', 'user/manage', $data);
		$this->CI->template->render();			
	}	
	
	function user_manage_edit(){
		$id= (int)$this->CI->input->get('id');
		
		$data= array(
			'id'			=> $id,
			'role'			=> $this->CI->admin_model->fetch('*', ADMIN_ROLE_TB, "", "name", "asc"),
			'result'		=> $this->CI->admin_model->get('*', ADMIN_USER_TB, "id = '{$id}'")
		);
		
		$this->CI->template->write('title', 'Admin - User Manage');
		$this->CI->template->write_view('content', 'user/manage_edit', $data);
		$this->CI->template->render();			
	}		
	
	function user_profile(){
		$result= $this->CI->admin_model->get('*', ADMIN_USER_TB, "id = '{$this->uid}'");
		if(!empty($result))
		{
			$data= array(
				'result'	=> $result
			);
			$this->CI->template->add_css('assets/admin/bootstrap-fileupload/bootstrap-fileupload.css');
			$this->CI->template->add_css('assets/admin/bootstrap-fileupload/bootstrap-fileupload.js');
			$this->CI->template->write('title', 'Admin - User Profile');
			$this->CI->template->write_view('content', 'user/profile', $data);
			$this->CI->template->render();			
		}
	}
	
	function user_role(){
		$keyword= filter_input_xss($this->CI->input->get('k'));
	
		$data= array(
			'result'	=> $this->CI->admin_model->fetch('*', ADMIN_ROLE_TB, "name LIKE '%$keyword%'", "name", "asc")
		);
		
		$this->CI->template->write('title', 'Admin - User Role');
		$this->CI->template->write_view('content', 'user/role', $data);
		$this->CI->template->render();			
	}
	
	function user_role_edit(){
		$id= (int)$this->CI->input->get('id');
		$module_permission_role= array();
		global $module_list;


		$data= array(
			'id'			=> $id,
			'module_role'	=> $this->CI->adminwz_model->manage_module_role($module_list),
			'result'		=> $this->CI->admin_model->get('*', ADMIN_ROLE_TB, "id = '{$id}'")
		);

		
		$this->CI->template->write('title', 'Admin - User Role Edit');
		$this->CI->template->write_view('content', 'user/role_edit', $data);
		$this->CI->template->render();				
	}
	
	function permission_deny(){
		$data= array(
			
		);
		$this->CI->template->write('title', 'Admin - Permission Deny');
		$this->CI->template->write_view('content', 'user/permission_deny', $data);
		$this->CI->template->render();				
	}
	
	function logs(){
		$get= array(
			'mid'			=> $this->mid,
			'keyword'		=> filter_input_xss($this->CI->input->get('k')),
			'sort'			=> filter_input_xss($this->CI->input->get('sort')),
			'field'			=> filter_input_xss($this->CI->input->get('field')),
			'range'			=> filter_input_xss($this->CI->input->get('range')),
			'excel'			=> filter_input_xss($this->CI->input->get('excel')) 
		);
		
		$page_size		= ($this->CI->input->get('ps'))?(int)$this->CI->input->get('ps'):10;
		$page_num		= ($this->CI->input->get('p'))?(int)$this->CI->input->get('p'):1;
		$total_row	 	= $this->CI->admin_model->getLogs(-1,-1, $get);	
		$start_row 		= ($page_num - 1) * $page_size;		
		
		$data= array(
			'result'	 	=> $this->CI->admin_model->getLogs($page_size, $start_row, $get),
			'pagination'	=> admin_pagination($total_row, $page_size, $page_num , 3)
		);
				
		$this->CI->template->write('title', 'Admin - Logs');
		$this->CI->template->write_view('content', 'logs/list', $data);
		$this->CI->template->render();			
	}
	
	function faq(){
		$data= array(

		);
				
		$this->CI->template->write('title', 'Admin - FAQ');
		$this->CI->template->write_view('content', 'faq/index', $data);
		$this->CI->template->render();				
	}
}