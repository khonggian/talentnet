<?php

///////// TẠO MỚI CANDIDATE TỪ WEBSITE /////

/* đoạn code thực hiện việc insert Candidate mới*/

///////////////////

$last_name = 'Test Nguyen Van B';
$phone_mobile = '2222222222';
$address = '22 Cao Thắng';
$email   = 'test33@gmail.com';

/*-----Dùng webservice thực hiện việc sync real time với CRM ---*/
$user_name ='portal';
$user_password = 'portal';
if(!empty($user_name)){
$offset = 0;
require_once('nusoap/nusoap.php'); 
$soapclient = new nusoapclient('http://10.0.0.60/Sugar/soap.php');  
//$soapclient = new nusoapclient('http://susasoft.com/crmla/soap.php');  
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTestPortal'));
$session = $result['id'];

$result = $soapclient->call('set_entry',
	array('session'=>$session , 
	'module_name'=>'Candidates', 
	'name_value_list'=>array(

	array('name'=>'id','value'=> $id), 
	array('name'=>'last_name','value'=> $last_name), 
	array('name'=>'phone_mobile','value'=>$phone_mobile),
	array('name'=>'primary_address_street','value'=>$address),
	array('name'=>'email1','value'=>$email ),
	))
);


 $candidate_id = $result['id'];

$exp_name = 'Sale Manager, Deputy Manager, Manager.';
$company = 'Test test test test';
$description   = '- Clarifying & building channels (12 provinces, 18 distributors, 72 salesman) - Controlling & developing channels - Managing salesman - Implementing in charged target - Analyzing distributor business situation - Analyzing and finding the best way for decreasing transportation fee - Checking, reviewing and controlling sales facilities - Planning sales for next year - Organizing events by attending VN High Quality Trade Fair to expand brand name - Deploying & evaluating efficient of consumer promotion programs - Training sales skill for salesman and distributors';


 $result = $soapclient->call('set_entry',
	array('session'=>$session , 
	'module_name'=>'Candidates_Experiences', 
	'name_value_list'=>array(

	array('name'=>'id','value'=> $id), 
	array('name'=>'name','value'=> $exp_name), 
	array('name'=>'parent_id','value'=>$candidate_id),
	array('name'=>'company','value'=>$company),
   array('name'=>'description','value'=>$description),

	))
);




}