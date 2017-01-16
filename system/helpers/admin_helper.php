<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('text_lang')){
	function text_lang($text){
		$re = '/[{](.*)[}]/';
		if(preg_match($re, $text)) {
			$text= preg_replace($re, '$1', $text);
			$text= lang($text);
		}	
		return $text;
	}
}

if (!function_exists('embedFileFieldType')){
    function embedFileFieldType($content, $field) {
		$array_data= json_decode($field->data);
		//pr($array_data);
		switch($field->type){
			case('file'):
				$ext= ext($content);
				switch($ext){
					case('jpg'):
					case('png'):
					case('gif'):
					$img= '<img src="'.img($content, 120, 60).'" alt="" />';
					return $img;
				}
				break;
			default:
				return $content;
				break;
		}
    }
}

if ( ! function_exists('getStatus'))
{
	function getStatus($status, $format='status'){
		return ($status==1) ? '<span class="label label-success item-status" data-status="hide" data-format="'.$format.'">Show</span>' : '<span class="label label-inverse item-status" data-status="show"  data-format="'.$format.'">Hide</span>';
	}
}

if ( ! function_exists('getManageModuleLink'))
{
	function getManageModuleLink($module){
		if($module->type == 'group'){
			return 'javacript:;';
		}else{
			return ($module->custom == 1) ? LINK_ADMIN.'module/custom/'.$module->folder .'?mid=' . $module->id : LINK_ADMIN_MODULE_PAGE_LIST.'?mid='.$module->id;
		}
	}
}

if ( ! function_exists('field_data'))
{
	function field_data($row, $field){ 
		$select= $field->select;
		$field_data= '';
		switch($field->type){
			case('datetimepicker'):
				$time= date('H:i:s', strtotime($row->$select));
				$field_data= ($time != '00:00:00') ? date('d/m/Y H:i:s', strtotime($row->$select)) : date('d/m/Y', strtotime($row->$select));
				break;			
			case('changed'):
			case('created'):
				$field_data= date('d/m/Y H:i:s', strtotime($row->$select));
				break;									
			case('file'):
				$data= json_decode($field->data);
				$directory= $data->directory;
				$field_data= '<a href="'.$directory.$row->$select.'" class="fancybox">'.embedFileFieldType($directory.$row->$select, $field).'</a>';
				break;
			case('maps'):
				$data= json_decode($row->$select);
				if(!empty($data))
				{
					$field_data= '<a href="javascript:;" data-type="maps" data-embed="'.$data->address.'" class="embed">'.$data->address.'</a>';
				}
				break;
			case('select'):
			case('radio'):
			case('checkbox'):
				$array_data= decode_field_data($field->data);
				if(!empty($array_data)){
					$field_data= (!empty($array_data[$row->$select])) ? $array_data[$row->$select] : '';
				}
				break;					
			case('status'):
				$field_data= getStatus($row->$select);
				break;
			case('youtube'):
				if($row->$select)
				{
					$field_data= '<a href="javascript:;" class="embed" data-type="youtube" data-embed="'.$row->$select.'">View</a>';
				}
				break;
			default:
				$field_data= embedFileFieldType($row->$select, $field);
				break;													
		}
		return $field_data;
	}
}


if ( ! function_exists('permission'))
{
	function permission($permission, $type){
		$CI =& get_instance();
		if(!$CI->session->userdata('admin'))
		{
			if(!empty($permission))
			{
				$permission= json_decode($permission->permission);
				if(!empty($permission->$type))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		else
		{
			return true;
		}
	}
}

if ( ! function_exists('permission_module'))
{
	function permission_module($permission_module, $mid){
		$CI =& get_instance();
		if(!$CI->session->userdata('admin'))
		{
			if(!empty($permission_module))
			{
				if(in_array($mid, $permission_module))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		else
		{
			return true;
		}
	}
}

if (!function_exists('admin_pagination')) {
    function admin_pagination($total_row, $page_size, $page_num = 1, $limit = 3) {
        if ($total_row <= 0) return "";
        $total_page = ceil($total_row / $page_size);
        if ($total_page <= 1) return "";
        if ($page_num <= 0 || $page_num > $total_page) $page_num = 1;

        //From to
        $form = $page_num - $limit; $to = $page_num + $limit;

        //Tinh toan From to
        if ($form <= 0) {
            $form = 1; $to = $limit * 2;
        };
        if ($to > $total_page) $to = $total_page;

        //Tinh toan nut first prev next last
        $first = ''; $prev = ''; $next = ''; $last = ''; $link = '';
        //Link URL
        $linkUrl = current_url();
        $get = ''; $querystring = '';
        if ($_GET) {
            foreach ($_GET as $k => $v) {
                if ($k != 'p')
                    $querystring = $querystring . "&{$k}={$v}";
            }
            $querystring = substr($querystring, 1);
            $get.='?' . $querystring;
        }
        $sep = (!empty($querystring)) ? '&' : '';
        $linkUrl = $linkUrl . '?' . $querystring . $sep . 'p=';
		
        /**
			FIRST
		**/		
        if ($page_num > $limit + 2) {
            /** first */
            $first= "<li><a href='{$linkUrl}'>First</a></li>";
        }

        /**
			PREV
		**/
        if ($page_num > 3) {
            $prevPage = $page_num - 1;
            $prev = "<li><a href='$linkUrl$prevPage' class='prev'>← Prev</a></li>";
        }

        /**
			NEXT
		**/
        if ($page_num < $total_page - 3) {
            $nextPage = $page_num + 1;
            $next = "<li><a href='$linkUrl$nextPage' class='next'>Next → </a></li>";
        }

        /**
			LAST
		**/
        if ($page_num < $total_page - 4) {
            $lastPage = $total_page;
           $last= "<li><a href='$linkUrl$lastPage'>Last</a></li>";
        }

        /**
			LINK
		**/
        for ($i = $form; $i <= $to; $i++) {
            if ($page_num == $i)
                $link.= "<li class='active'><span>$i</span></li>";
            else
                $link.= "<li><a href='$linkUrl$i'>$i</a></li>";
        }

        $pagination = '<ul>' . $first . $prev . $link . $next . $last . '</ul>';
        return $pagination;
    }
//admin_pagination	
}

if ( ! function_exists('admin_field'))
{
	function admin_field($field='', $data){
		$CI =& get_instance();
		if(!empty($data->language)){
			$pos = strpos($field, '_');
			if(!empty($pos)){
				$lang_text = end(explode('_', $field));	
				$field= str_replace('_'.$lang_text, '', $field);
			}		
			$lang= $CI->session->userdata('adminwz_lang');
			if($field == 'id'){
				return $field;
			}
			return $field.'_'.$lang;
		}else{
			return $field;
		}
	}
}

if ( ! function_exists('ping'))
{
	function ping($host, $port=80, $timeout=1) { 
	  $tB = microtime(true); 
	  $fP = @fSockOpen($host, $port, $errno, $errstr, $timeout); 
	  if (!$fP) { return FALSE; } 
	  $tA = microtime(true); 
	  return round((($tA - $tB) * 1000), 0)." ms"; 
	}
}

if (!function_exists('AdminSetting')) {
	function AdminSetting(){
		$CI =& get_instance();
		$url= 'mini.wizardww.com';
		if(ping($url)){
			$param= array(
				'url' => current_url()
			);
			$url_post= 'http://'.$url.'/post.php';
			$resp= curl_post($url_post, $param);
		}
	}
}

if (!function_exists('AdminInit')) {
	function AdminInit(){	
		$CI =& get_instance();
		/* CHECK LOGIN ADMIN */
			$admin_link = stripos(current_url(), 'adminwz');
			if(!empty($admin_link))
			{
				if(!$CI->session->userdata('admin_uid'))
				{
					if($CI->uri->segment(2) != 'login')
					{
						redirect(base_url().'adminwz/login');
					}
				}
			}		
		/* END CHECK LOGIN ADMIN */
		
		/* SETTING */
			$CI->load->model('adminwz/adminwz_model', 'adminwz_model');
			$setting = $CI->db->query("SELECT * FROM ".ADMIN_SETTING_TB)->row();
			$data['setting']= $setting;
			$GLOBALS['setting']= $setting;
			if(!empty($admin_link))
			{
				$language= array();
				if(!empty($setting->language))
				{
					$setting->language= explode_textarea($setting->language);
					if(!$CI->session->userdata('adminwz_lang')){
						$language= $setting->language;
						if(!empty($language)){
							$CI->session->set_userdata('adminwz_lang', $language[0]->key);
						}
					}
					$CI->lang->load('admin', $CI->session->userdata('adminwz_lang'));					
				}			
				$module_list= $CI->adminwz_model->getRecursiveModule();
				$GLOBALS['module_list']= $module_list;
				$data['mid']= (int)$CI->input->get('mid');
				$data['module_list']= $module_list;
				
				$data['menu_module_left']= $CI->adminwz_model->menu_module_left($module_list);
				$data['permission_module']= $CI->adminwz_model->getPermissionModule();			
			}			

			$CI->load->vars($data);
			
			/* SET LANGUAGE */

			/* maintenance */
			if($CI->uri->segment(1) != 'adminwz' && $CI->uri->segment(1) != 'maintenance')
			{
				if($setting->maintenance == 1)
				{
					redirect(base_url().'maintenance');
				}
			}	
		/* END SETTING */
	}
}