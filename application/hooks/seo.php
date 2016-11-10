<?php
/**
* 
*/
class seo
{
	
	function index(){
		$CI =& get_instance();
		//$CI->template->write('title', 'abc');
		$CI->load->model('home/home_model');
		$seo = $CI->home_model->get('*', SEO_TB ,"`status` = 1 AND `url` = '".uri_string()."' ");
		if($seo){
			$CI->template->write('meta_keywords', htmlspecialchars_decode($seo->meta_keywords));
			$CI->template->write('meta_description', htmlspecialchars_decode($seo->meta_description));
			$CI->template->write('meta_image', base_url('uploads/meta_image/'.htmlspecialchars_decode($seo->meta_image)));
		}
		
	}
}