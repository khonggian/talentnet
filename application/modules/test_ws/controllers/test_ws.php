<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_ws extends MX_Controller {
	private $module = 'user';
	function __construct(){
		parent::__construct();
	}
	
	/*-------------------------------------- FrontEnd --------------------------------------*/	
	function index(){	
		
        $last_name = 'testing232';
        $phone_mobile = '0901234345';
        $address = '232 Cao Thắng';
        $email   = 'test@gmail.com';
        
        
        /*-----Dùng webservice thực hiện việc sync real time với CRM ---*/
        $user_name ='portal';
        $user_password = 'portal';
        if(!empty($user_name)){
            $offset = 0;
            $soapclient = new nusoapclient('http://susasoft.com/crmla/soap.php');  
            $result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTestPortal'));
            $session = $result['id'];
            
            $result = $soapclient->call('set_entry',
				array('session'=>$session , 
				'module_name'=>'Candidates', 
				'name_value_list'=>array(
					array('name'=>'last_name','value'=> $last_name),
					array('name'=>'phone_mobile','value'=>$phone_mobile),
					array('name'=>'primary_address_street','value'=>$address),
					array('name'=>'email1','value'=>$email),
				))
            );
           pr($result);
        }
    }
}
?>