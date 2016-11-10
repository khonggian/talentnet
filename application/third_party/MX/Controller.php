<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__).'/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link	http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright	Copyright (c) 2011 Wiredesignz
 * @version 	5.4
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller 
{
	public $autoload = array();
	
	public function __construct() 
	{
		$class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
		log_message('debug', $class." MX_Controller Initialized");
		Modules::$registry[strtolower($class)] = $this;	
		
		/* copy a loader instance and initialize */
		$this->load = clone load_class('Loader');
		$this->load->initialize($this);	
		
		$this->current_lang = $this->uri->segment(1);
		$this->other_lang = $this->current_lang == 'vi' ? 'en' : 'vi';
		$this->slug_lang = language("slug");
		$this->name_lang = language("name");
		if(!defined('PATH_URL_LANG') && !defined('CURRENT_LANG')){
			define('CURRENT_LANG', base_url().'en/');
			define('PATH_URL_LANG', base_url().$this->current_lang.'/');
		}
		$CI =& get_instance();
		if($this->current_lang != 'html' && $this->current_lang != 'api' && $this->current_lang != 'adminwz'){
			if(!$this->current_lang || ($this->current_lang != 'en' && $this->current_lang != 'vi')){
				redirect(CURRENT_LANG);
			}
		}
		if( $this->uri->segment(1) == 'en'){
			$CI->lang->load('general','english');
		} else{
			if($this->uri->segment(2)=='cong-viec-cua-ban' || $this->uri->segment(2)=='your-cv'){
				$CI->lang->load('general','english');
			}else{
				$CI->lang->load('general','vietnamese');
			}
			
		}
		if(strpos($this->agent->referrer(),'login') || strpos($this->agent->referrer(),'register') ){

		}else{
			$this->session->set_userdata('referrer',$this->agent->referrer() );
		}
		//pr($this->session->userdata('referrer'),1);
		// $this->load->library('user_agent');
		// if ($this->agent->is_referral()){
			// $this->session->set_userdata('referrer', $this->agent->referrer());
		// }
		/* autoload module items */
		$this->load->_autoloader($this->autoload);
			
		AdminInit();
	}
		
	public function __get($class) {
		return CI::$APP->$class;
	}
}