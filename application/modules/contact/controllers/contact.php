<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {

	private $module = 'contact';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
	}

    function index(){
        $data= array();
        $data['language_link']=  filter_link($this->current_lang,'office_locations',1);
        $data['address'] = $this->model->fetch('*', CONTACT_ADDRESS_TB,'status =1 ', 'created','desc');
        $this->template->write('title', lang('contact_us'));
		$this->template->write_view('content','index',$data);
		$this->template->render();
    }

    function post(){

		//var_dump($this->input);die;

    	$content = language('content');
    	$subject = language('subject');
        $error= false;$arr_error= array();$txt= '';
		$this->model->validate_ext($arr_error, $error, 'fullname', lang('form_validate_null').' '. lang('fullname'));
        $this->model->validate_ext($arr_error, $error, 'position', lang('form_validate_null').' '. lang('your_position'));
        $this->model->validate_ext($arr_error, $error, 'company', lang('form_validate_null').' '. lang('company_name'));
        $this->model->validate_ext($arr_error, $error, 'phone', lang('form_validate_null').' '. lang('phone_number'));
		$this->model->validate_email($arr_error, $error );
        $this->model->validate_ext($arr_error, $error, 'state', lang('form_validate_null').' '. lang('city_state_country'));
		$this->model->validate_ext($arr_error, $error, 'how_know', lang('form_validate_null') .' '.lang('how_know'));	
		$this->model->validate_ext($arr_error, $error, 'content', lang('form_validate_null') .' '.lang('your_request'));
		$this->model->validate_ext($arr_error, $error, 'chkLooking', lang('form_validate_null') .' '.lang('choise_service_offerings'));

		if(empty($error)){
			$this->model->insert($txt);
			$data_email= array(
					'fullname'=>$this->input->post('fullname'),
					'position'=>$this->input->post('position'),
					'company'=>$this->input->post('company'),
					'phone'=>$this->input->post('phone'),
					'email'=>$this->input->post('email'),
					'state'=>$this->input->post('state'),
					'content'=>$this->input->post('content'),
					'how_know'=>$this->input->post('how_know'),
					'service_offerings'=>$this->input->post('chkLooking'),
				);


			$email_data_config = $this->model->get('*',NEWSLETTER_TB,'status = 1 AND slug = "contact"');
			$this->load->library('Shortcodes');
			$s = $this->shortcodes->parse($email_data_config->$content);


			$html = $email_data_config->$content;


			if(!empty($s)){
				foreach ($s as $search => $shortcode) {
					if(in_array($shortcode['code'], array_keys($data_email))){
						$html = str_replace($search, $data_email[$shortcode['code']], $html);
					}
				}
			}

			$email = array(
					'subject' => $email_data_config->$subject,
					'email' => $email_data_config->email_to,
					'html' => $html
				);
			if(!empty($email_data_config->email_cc)){
				$email['cc'] = $email_data_config->email_cc;
			}
			if(!empty($email_data_config->email_bcc)){
				$email['bcc'] = $email_data_config->email_bcc;
			}
			$this->model->send_email($email);
		}

		$json= array(
			'st'		=> (empty($error))?'SUCCESS':'FALSE',
			'error'		=> $arr_error,
			'txt'		=> $txt
		);

		print_r(json_encode($json));
    }
}
