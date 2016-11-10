<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function get_csv_array($file_path)
{
	$row = 0;
	if (($handle = fopen($file_path, "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE)
		{
			$final_array[$row] = $data;
			$row++;
		}
		fclose($handle);
	}
	return $final_array;
}
function post_to_url($url) 
{
	 $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
if (!function_exists('soapclient')) {
	function soapclient($module_name, $param) { 
		$user_name ='portal';
		$user_password = 'portal';

		$offset = 0;
		require_once('nusoap/nusoap.php'); 
		$soapclient = new nusoapclient('http://10.0.0.78/Sugar/soap.php'); 
		$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTestPortal'));
		$session = $result['id'];
		$result = $soapclient->call('set_entry',
			array('session'=>$session , 
			'module_name'=> $module_name, 
			'name_value_list'=> $param
		));		
		$CI = & get_instance();
		$CI->load->helper('file');
		write_file('crm_log/'.$module_name.'.txt',json_encode($param,1));
		return $result;
	}
}

if (!function_exists('soapclient_document')){
	function soapclient_document($upload_cv,$deleted=0){ 
		$user_name ='portal';
		$user_password = 'portal';

		$offset = 0;
		require_once('nusoap/nusoap.php'); 
		$soapclient = new nusoapclient('http://10.0.0.78/Sugar/soap.php'); 
		$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTestPortal'));
		$session = $result['id'];	
		//pr($session,1);
		$document_name= 'Upload_CV_'.$upload_cv->id;
		$result = $soapclient->call('set_entry',
			array('session'=>$session , 
			'module_name'=>'Documents', 
			'name_value_list'=>array(
				array('name' => 'id', 'value' => $upload_cv->candidate_id),
				array('name'=>'document_name','value'=> $document_name), // Tên file
				array('name'=>'deleted','value'=>$deleted),
		   ))
			
		);


		if($deleted){
			return false;
		}
		$note_id = $result['id'];

		$contents = file_get_contents(DIR_UPLOAD_CV.$upload_cv->file); // File CV. Ex: upload/CV.doc

		$set_note_attachment_parameters = array(
			"session" => $session,
			"document" => array(
				'id' 			=> $note_id,
				'filename' 		=> $document_name,
				'file' 			=> base64_encode($contents),
				'document_id' 	=> $note_id,
				'revision' 		=> '1',
			)
		);

		$set_note_attachment_result = $soapclient->call("set_document_revision", $set_note_attachment_parameters);

		$CI = & get_instance();
		$CI->load->helper('file');
		write_file('crm_log/set_document_revision.txt',json_encode($set_note_attachment_parameters,1));

		$result = $soapclient->call('set_entry',
			array('session'=>$session , 
			'module_name'=>'Documents', 
			'name_value_list'=>array(
				array('name'=>'document_name','value'=>$document_name), // File CV. Ex: upload/CV.doc
				array("name" => "id", "value" => $note_id,),
				array("name" => "document_revision_id", "value" => $note_id,),
		   ))
		);
		
		return $result;
	}
}

if (!function_exists('random')) {
	function random($int= 11, $upper= false) { 
		if(!empty($upper))
		{
			$s = strtoupper(md5(uniqid(rand(),true))); 
		}
		else
		{
			$s = md5(uniqid(rand(),true)); 
		}
		// $guidText = 
			// substr($s,0,8) . '-' . 
			// substr($s,8,4) . '-' . 
			// substr($s,12,4). '-' . 
			// substr($s,16,4). '-' . 
			// substr($s,20); 
		$guidText= substr($s,0, $int);
		return $guidText;
	}
}

if (!function_exists('link_lang'))
{
	function link_lang($link){
		$link= lang($link);
		return toSlug($link).'/';
	}
}

if (!function_exists('json_format_like')) {
	function json_format_like($value){ 
		$value= json_encode($value);
		$value= str_replace("/", "\\\\\\\/", $value);
		$value= str_replace("\\", "\\\\\\\\", $value);
		return $value;
	}
}

if (!function_exists('array_like')) {
	function array_like($field, $array){ 
		$count= 0;
		$sql= '';
		if(!empty($array))
		{
			foreach($array as $k=>$v)
			{
				$v= json_format_like($v);
				if($count == 0)
				{
					$sql.= $field." LIKE '%{$v}%' ";
				}
				else
				{
					$sql.= "OR ".$field." LIKE '%{$v}%' ";
				}
				$count++;
			}
			$sql= trim($sql);
			return '('.$sql.')';
		}
	}
}

function implode_json($json){
	if(!empty($json))
	{
		$json= json_decode($json);
		$json = array_filter($json);
		echo implode(', ', $json);
	}
}

function explode_to_json($text){
	return json_encode(explode('^', filter_input_xss($text)));
}

function count_r($array, $i = 0){
    foreach($array as $k){
        if(is_array($k)){ $i += count_r($k, count($k)); }
        else{ $i++; }
    }
    return $i;
}

if ( ! function_exists('input_editor')){
	function input_editor($str){
		$str = str_replace(base_url(), '', $str);
		return $str;
	}
}

if ( ! function_exists('output_editor')){
	function output_editor($str){
		$str = str_replace('uploads/editor/', base_url().'uploads/editor/', $str);
		return $str;
	}
}

if ( ! function_exists('curl_get')){
	function curl_get($url, $param= array(), $decode= true){
		$url= $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
		
		if(!empty($param)) {
			$url .= '?' . http_build_query($param);
		}
		
		curl_setopt($ch, CURLOPT_URL, $url);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param, null, '&'));
		$data = curl_exec($ch);
		curl_close($ch);
		return (!empty($decode)) ? json_decode($data) : $data;		
	}
}

if ( ! function_exists('curl_post')){
	function curl_post($url, $param= array(), $decode= true){
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param, null, '&'));
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			$resp = curl_exec($ch);
			
			return (!empty($decode)) ? json_decode($resp) : $resp;
		}catch (Exception $e) {				
			return null;
		}	
	}
}

if ( ! function_exists('curl_copy')){
	function curl_copy($source='',$save=''){
		$fh = fopen($save, 'w');
		if($fh)
		{
			// create a new cURL resource
			$ch = curl_init();
			// set URL and other appropriate options
			curl_setopt($ch, CURLOPT_URL, $source);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_FILE, $fh);
			// grab URL and pass it to the browser
			curl_exec($ch);
			// close cURL resource, and free up system resources
			curl_close($ch);
			fclose($fh);
			
			return (file_exists($save)) ? TRUE : FALSE;
		}	
	}
}

if ( ! function_exists('CutText')){
	function CutText($text, $n=80) 
	{ 
		// string is shorter than n, return as is
		if (strlen($text) <= $n) {
			return $text;}
		$text= substr($text, 0, $n);
		if ($text[$n-1] == ' ') {
			return trim($text)."...";
		}
		$x  = explode(" ", $text);
		$sz = sizeof($x);
		if ($sz <= 1)   {
			return $text."...";}
		$x[$sz-1] = '';
		return trim(implode(" ", $x))."...";
	}
}

if (!function_exists('verify_email')) {
	function verify_email($sToEmail, $sFromDomain = "localhost.com", $sFromEmail = "admin@localhost.com", $bIsDebug = false) {
		$bIsValid = true; // assume the address is valid by default..
		$aEmailParts = explode("@", $sToEmail); // extract the user/domain..
		getmxrr($aEmailParts[1], $aMatches); // get the mx records..

		if (sizeof($aMatches) == 0) {
			return false; // no mx records..
		}

		foreach ($aMatches as $oValue) {

			if ($bIsValid && !isset($sResponseCode)) {

				// open the connection..
				$oConnection = @fsockopen($oValue, 25, $errno, $errstr, 30);
				$oResponse = @fgets($oConnection);

				if (!$oConnection) {

					$aConnectionLog['Connection'] = "ERROR";
					$aConnectionLog['ConnectionResponse'] = $errstr;
					$bIsValid = false; // unable to connect..

				} else {

					$aConnectionLog['Connection'] = "SUCCESS";
					$aConnectionLog['ConnectionResponse'] = $errstr;
					$bIsValid = true; // so far so good..

				}

				if (!$bIsValid) {

					if ($bIsDebug) print_r($aConnectionLog);
					return false;

				}

				// say hello to the server..
				fputs($oConnection, "HELO $sFromDomain\r\n");
				$oResponse = fgets($oConnection);
				$aConnectionLog['HELO'] = $oResponse;

				// send the email from..
				fputs($oConnection, "MAIL FROM: <$sFromEmail>\r\n");
				$oResponse = fgets($oConnection);
				$aConnectionLog['MailFromResponse'] = $oResponse;

				// send the email to..
				fputs($oConnection, "RCPT TO: <$sToEmail>\r\n");
				$oResponse = fgets($oConnection);
				$aConnectionLog['MailToResponse'] = $oResponse;

				// get the response code..
				$sResponseCode = substr($aConnectionLog['MailToResponse'], 0, 3);
				$sBaseResponseCode = substr($sResponseCode, 0, 1);

				// say goodbye..
				fputs($oConnection,"QUIT\r\n");
				$oResponse = fgets($oConnection);

				// get the quit code and response..
				$aConnectionLog['QuitResponse'] = $oResponse;
				$aConnectionLog['QuitCode'] = substr($oResponse, 0, 3);

				if ($sBaseResponseCode == "5") {
					$bIsValid = false; // the address is not valid..
				}

				// close the connection..
				@fclose($oConnection);
			}
		}

		if ($bIsDebug) {
			print_r($aConnectionLog); // output debug info..
		}
		return $bIsValid;
	}
}

if (!function_exists('pr')) {
    function pr($data, $type = 0) {
        print '<pre>';
        print_r($data);
        print '</pre>';
        if ($type != 0) {
            exit();
        }
    }
}

if (!function_exists('getSubDomain')) {
	function getSubDomain(){
		$subdomain = substr($_SERVER['HTTP_HOST'], 0, strpos($_SERVER['HTTP_HOST'], '.')); 
		return $subdomain;
	}
}

if ( ! function_exists('getUrlLoginOpenID'))
{
	function getUrlLoginOpenID($type = 'google') {
		$url= '';
		if ($type == 'google') {
			$params = array(
				'response_type' => 'code',
				'client_id' => G_CLIENT_ID,
				'redirect_uri' => base_url().OPENID_REDIRECT_URL.'/google',
				'state' => 'profile',
				'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile https://www.google.com/m8/feeds',
				'access_type'	=> 'offline'
			);

			$url = 'https://accounts.google.com/o/oauth2/auth?';
			foreach ($params as $key => $param) {
				$url .= $key . '=' . urlencode($param) . '&';
			}
		}
		if ($type == 'yahoo') {
			$params = array(
				'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
				'openid.identity' => 'http://specs.openid.net/auth/2.0/identifier_select',
				'openid.mode' => 'checkid_setup',
				'openid.ns' => 'http://specs.openid.net/auth/2.0',
				'openid.realm' => base_url(),
				'openid.return_to' => base_url().OPENID_REDIRECT_URL . '/yahoo',
				'openid.ns.oauth' => 'http://specs.openid.net/extensions/oauth/1.0',
				'openid.oauth.consumer' => YH_CLIENT_KEY,
				'openid.ns.ax' => 'http://openid.net/srv/ax/1.0',
				'openid.ax.mode' => 'fetch_request',
				'openid.ax.required' => 'email,fullname,nickname,gender,language,timezone,image',
				'openid.ax.type.email' => 'http://axschema.org/contact/email',
				'openid.ax.type.fullname' => 'http://axschema.org/namePerson',
				'openid.ax.type.nickname' => 'http://axschema.org/namePerson/friendly',
				'openid.ax.type.gender' => 'http://axschema.org/person/gender',
				'openid.ax.type.image' => 'http://axschema.org/media/image/default',
			);

			$url = 'https://open.login.yahooapis.com/openid/op/auth?';
			foreach ($params as $key => $param) {
				$url .= $key . '=' . urlencode($param) . '&';
			}
		}
		if ($type == 'fb') {
			$url = "http://www.facebook.com/dialog/oauth?"
					. "client_id=" . FB_APP_ID
					. "&redirect_uri=" . urlencode(base_url().OPENID_REDIRECT_URL.'/facebook')
					. "&response_type=code&display=popup"
					. "&scope=email,public_profile,user_friends";
		}
		if ($type == 'linkedin') {
			$params = array('response_type' => 'code',
            	'client_id' => '75iki7qbi6yba3',
            	'scope' => 'r_basicprofile r_emailaddress',
            	'state' => uniqid('', true), // unique long string
            	'redirect_uri' => 'http://localhost/wizard/2013/talentnet/code/en/user/openid/linkedin',
	        );
	        $url = 'https://www.linkedin.com/uas/oauth2/authorization?' . http_build_query($params);
		}
		return $url;
	}
}

if ( ! function_exists('getInfoOpenID'))
{
	function getInfoOpenID($type, $code='', &$access_token= ''){
		$info = array();
		$CI =& get_instance();
		switch($type){
			case('google'):
				$access_token= getAcessTokenFromCodeG($code);
				$param= array(
					'access_token'	=> $access_token
				);
				$info= curl_get('https://www.googleapis.com/oauth2/v1/userinfo?access_token='.$access_token);
			break;
			case('yahoo'):
				$info['type'] = 'yahoo';
				if (isset($_REQUEST['openid_ax_value_email'])) {
					$info['email'] = $_REQUEST['openid_ax_value_email'];
				} else {
					$info['email'] = '';
				}

				if (isset($_REQUEST['openid_ax_value_fullname'])) {
					$info['full_name'] = $_REQUEST['openid_ax_value_fullname'];
				} else {
					$info['full_name'] = '';
				}

				if (isset($_REQUEST['openid_ax_value_nickname'])) {
					$info['nick_name'] = $_REQUEST['openid_ax_value_nickname'];
				} else {
					$info['nick_name'] = '';
				}

				if (isset($_REQUEST['openid_ax_value_gender'])) {
					$info['gender'] = $_REQUEST['openid_ax_value_gender'];
				} else {
					$info['gender'] = '';
				}

				if (isset($_REQUEST['openid_ax_value_image'])) {
					$info['avatar'] = $_REQUEST['openid_ax_value_image'];
				} else {
					$info['avatar'] = '';
				}				
			break;
			case('facebook'):
				$CI->load->model('fb/fb_model','fb_model');
				$access_token= getAcessTokenFromCodeFB($code);
				$access_token= getExtendedTokenFB($access_token);
				$info= $CI->fb_model->getInfo($access_token);
				$info= (!empty($info)) ? $info[0] : array();
			break;
			case('linkedin'):
				$array=getAccessTokenLK($code);
				$access_token=$array['access_token'];
				$profile_fileds = array(
                    'id',
                    'firstName',
                    'maiden-name',
                    'lastName',
                    'picture-url',
                    'email-address',

                );
                $info = fetchLK('GET', '/v1/people/~:(' . implode(',', $profile_fileds) . ')' , $access_token );
			break;
		}
		return array_to_object($info);
	}
}
if (!function_exists('getAcessTokenFromCodeFB')) {
    function getAcessTokenFromCodeFB($code) {
        $params = array('grant_type' => 'authorization_code',
            'client_id' => '75iki7qbi6yba3',
            'client_secret' => 'S5DhM9pGviNcX2WY',
            'code' => $code,
            'redirect_uri' => 'http://localhost/wizard/2013/talentnet/code/en/user/openid/linkedin',
        );
        // Access Token request
        $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . http_build_query($params);
        $response=post_to_url($url);
        // Native PHP object, please
        $token = json_decode($response);
        pr($token,1);

        // Store access token and expiration time
        $ses_params = array('access_token' => $token->access_token,
                            'expires_in' => $token->expires_in,
                            'expires_at' => time() + $token->expires_in);

        return $ses_params;
    }
}
if (!function_exists('getAccessTokenLK')) {
	function getAccessTokenLK($code) {
        $params = array('grant_type' => 'authorization_code',
            'client_id' => '75iki7qbi6yba3',
            'client_secret' => 'S5DhM9pGviNcX2WY',
            'code' => $code,
            'redirect_uri' => 'http://localhost/wizard/2013/talentnet/code/en/user/openid/linkedin',
        );
        // Access Token request
        $url = 'https://www.linkedin.com/uas/oauth2/accessToken?' . http_build_query($params);
        $response=post_to_url($url);
        // Native PHP object, please
        $token = json_decode($response);

        // Store access token and expiration time
        $ses_params = array('access_token' => $token->access_token,
                            'expires_in' => $token->expires_in,
                            'expires_at' => time() + $token->expires_in);

        return $ses_params;
    }
}
if (!function_exists('fetchLK')) {
	function fetchLK($method, $resource, $access_token , $body = '') {
	    $params = array('oauth2_access_token' => $access_token,
	        'format' => 'json',
	    );

	    // Need to use HTTPS
	    $url = 'https://api.linkedin.com' . $resource . '?' . http_build_query($params);
	    $response=post_to_url($url);
	    // Native PHP object, please
	    return json_decode($response);
	}
}
if (!function_exists('ext')) {
    function ext($file) {
       $extension = strtolower(end(explode('.', $file)));
	   return $extension;
    }
}

if (!function_exists('explode_textarea')) {
	function explode_textarea($text){
		$array= explode(PHP_EOL, $text);
		$arr_explode= array();
		foreach($array as $arr){
			if(!empty($arr)){
				$arr= explode('|', $arr);
				$arr_explode[]= array_to_object(array(
					'key'	=> $arr[0],
					'value'	=> $arr[1]
				));
			}
		}
		return $arr_explode;
	}
}

if ( ! function_exists('filter_input_xss'))
{
	function filter_input_xss($input, $type = 0){
		if($type){
			$input= htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES);
		}else{
			$input= htmlspecialchars($input, ENT_QUOTES);
		}
		return $input;
	}
}

if (!function_exists('getFolderNow')) {
    function getFolderNow() {
        return date('Y') . '/' . date('m') . '/' . date('d') . '/' ;
    }
}

if (!function_exists('getFolderNowFile')) {
    function getFolderNowFile($file) {
		$arr_dir= explode('/', $file);
		return $arr_dir[0] . '/' . $arr_dir[1] . '/' . $arr_dir[2] . '/';
    }
}

if ( ! function_exists('getIP')){
	function getIP(){
		if (!empty($_SERVER['HTTP_CLIENT_IP']))  //check ip from share internet
		{
		  $ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   
		//to check ip is pass from proxy
		{
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}

if (!function_exists('getAcessTokenFromCodeFB')) {
	function getAcessTokenFromCodeFB($code= ''){
		$url = 'https://graph.facebook.com/oauth/access_token?client_id='.FB_APP_ID.'&redirect_uri='.urlencode(base_url().OPENID_REDIRECT_URL.'/facebook').'&client_secret='.FB_APP_SECRET.'&code='.$code;		
		$resp= file_get_contents($url);
		parse_str($resp);	
		return (!empty($access_token)) ? $access_token : FALSE;
	}
}

if (!function_exists('getAcessTokenFromCodeG')) {
	function getAcessTokenFromCodeG($code= ''){
		$param= array(
			'client_id'			=> G_CLIENT_ID,
			'client_secret'		=> G_CLIENT_SECRET,
			'redirect_uri'		=> base_url().OPENID_REDIRECT_URL.'/google',
			'grant_type'		=> 'authorization_code',
			'code'				=> $code
		);
		
		$resp = curl_post('https://accounts.google.com/o/oauth2/token', $param);	
		return (!empty($resp->access_token)) ? $resp->access_token : FALSE;
	}
}

if (!function_exists('getExtendedTokenFB')) {
	function getExtendedTokenFB($access_token= ''){
		$extend_url = 'https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id='.FB_APP_ID.'&client_secret='.FB_APP_SECRET.'&fb_exchange_token='.$access_token;
		$resp = curl_get($extend_url, '', false);
		parse_str($resp,$output);
		$extended_token = $output['access_token'];
		return $extended_token;		
	}	
}

if ( ! function_exists('cutUnicode'))
{
	function cutUnicode($str){ //Cắt dấu tiếng việt
		  if(!$str) return false;
		   $unicode = array(
			 'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
			 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			 'd'=>'đ',
			 'D'=>'Đ',
			 'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			 'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			 'i'=>'í|ì|ỉ|ĩ|ị',	  
			 'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			 'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			 'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
		   );
		   foreach($unicode as $khongdau=>$codau) {
				$arr=explode("|",$codau);
				$str = str_replace($arr,$khongdau,$str);
		   }
		return $str;
	}
}

if ( ! function_exists('current_path'))
{
	function current_path(){
		$CI =& get_instance();
		$current_url= $CI->config->site_url($CI->uri->uri_string());
		$current_path= $_SERVER['PHP_SELF'];
		$end_path = substr($current_path, -1);
		$query_string= ($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : '';
		$end_path= ($end_path == '/') ?  '/' : '';
		$current_url= $current_url.$end_path.$query_string;

		return $current_url;		
	}
}

if ( ! function_exists('toSlug'))
{
	function toSlug($string) {
		$string= trim(cutUnicode($string));
		$string = strtolower($string);
		//Strip any unwanted characters
		$string = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $string);
		$string = strtolower(trim($string, '-'));
		$string = preg_replace("/[\/_|+ -]+/", '-', $string);
		return $string;
	}
}

function time_ago($timestamp){
    //type cast, current time, difference in timestamps
    $timestamp      = strtotime($timestamp);
    $current_time   = time();
    $diff           = $current_time - $timestamp;

    //intervals in seconds
    $intervals      = array (
        'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60
    );

    //now we just find the difference
    if ($diff == 0)
    {
        return 'mới đây';
    }

    if ($diff < 20)
    {
        //return $diff == 1 ? $diff . ' second ago' : $diff . ' seconds ago';
		 return 'mới đây';
    }

    if ($diff >= 60 && $diff < $intervals['hour'])
    {
        $diff = floor($diff/$intervals['minute']);
        return $diff == 1 ? $diff . ' phút trước' : $diff . ' phút trước';
    }

	if ($diff >= 20)
    {
        // return $diff == 1 ? $diff . ' second ago' : $diff . ' seconds ago';
		// return 'ít hơn một phút trước';
    }
	

    if ($diff >= 60 && $diff < $intervals['hour'])
    {
        $diff = floor($diff/$intervals['minute']);
        return $diff == 1 ? $diff . ' phút trước' : $diff . ' phút trước';
    }

    if ($diff >= $intervals['hour'] && $diff < $intervals['day'])
    {
        $diff = floor($diff/$intervals['hour']);
        return $diff == 1 ? $diff . ' giờ trước' : $diff . ' giờ trước';
    }

    if ($diff >= $intervals['day'] && $diff < $intervals['week'])
    {
        $diff = floor($diff/$intervals['day']);
        return $diff == 1 ? $diff . ' ngày trước' : $diff . ' ngày trước';
    }

    if ($diff >= $intervals['week'] && $diff < $intervals['month'])
    {
        $diff = floor($diff/$intervals['week']);
        return $diff == 1 ? $diff . ' tuần trước' : $diff . ' tuần trước';
    }

    if ($diff >= $intervals['month'] && $diff < $intervals['year'])
    {
        $diff = floor($diff/$intervals['month']);
        return $diff == 1 ? $diff . ' tháng trước' : $diff . ' tháng trước';
    }

    if ($diff >= $intervals['year'])
    {
        $diff = floor($diff/$intervals['year']);
        return $diff == 1 ? $diff . ' năm trước' : $diff . ' năm trước';
    }
}


if (!function_exists('password')) {
	function password($password){
		return md5(sha1($password));
	}
}

if (!function_exists('pagination')) {
    function pagination($totalRows, $pageNum = 1, $pageSize, $limit = 3) {
        settype($totalRows, "int"); settype($pageSize, "int");
        
        $totalPages = ceil($totalRows / $pageSize);
        if ($totalRows <= 0 || $totalPages <= 1) return "";
        $currentPage = $pageNum;
        if ($currentPage <= 0 || $currentPage > $totalPages) $currentPage = 1;

        $form = $currentPage - $limit;
        $to = $currentPage + $limit;

        if ($form <= 0) {
            $form = 1; $to = $limit * 2;
        };
		
        if ($to > $totalPages) $to = $totalPages;

        $first = '';$prev = '';$next = '';$last = '';$link = '';

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
		
		/* FIRST */
        if ($currentPage > $limit + 2) {
            //$first= "<a href='$linkUrl' class='first'>...</a>&nbsp;";
        }

        /* PREV */
        if ($currentPage > 1) {
            $prevPage = $currentPage - 1;
            $prev = "<a href='$linkUrl$prevPage' class='prev'>".lang('prev')."</a> ";
        }

        /* NEXT */
        if ($currentPage < $totalPages) {
            $nextPage = $currentPage + 1;
            $next = " <a href='$linkUrl$nextPage' class='next'>".lang('next')."</a>";
        }

        /* LAST */
        if ($currentPage < $totalPages - 4) {
            $lastPage = $totalPages;
            //$last= "<a href='$linkUrl$lastPage' class='last'>...</a>";
        }

        /* LINK */
        for ($i = $form; $i <= $to; $i++) {
            if ($currentPage == $i)
                $link.= " <span>$i</span> ";
            else
                $link.= " <a href='$linkUrl$i'>$i</a> ";
        }

        $pagination = '<div class="bg-pager"><div class="pagination">' . $first . $prev . $link . $next . $last . '</div></div>';

        return $pagination;
    }
}

if (!function_exists('last_query')) {
    function last_query($exit = false) {
        $CI = & get_instance();
        echo $CI->db->last_query();
        if ($exit) {
            exit();
        }
    }
}

if ( ! function_exists('array_to_object'))
{
	function array_to_object($array){
		return (is_array($array)) ? (object) array_map(__FUNCTION__, $array) : $array;
	}
}

if ( ! function_exists('object_to_array'))
{
	function object_to_array($object)
	{
		if (is_object($object))
	{
	// Gets the properties of the given object with get_object_vars function
		$object = get_object_vars($object);
	}
		return (is_array($object)) ? array_map(__FUNCTION__, $object) : $object;
	}
}
if (!function_exists('_token')) {
	function _token() {
		$token = md5(uniqid(rand(), TRUE)) . random(32);
		return $token;
	}
}

if (!function_exists('newfolder')) {
    function newfolder($folder) {
        $arr_folder = explode('/', $folder);
        $fol = '';
        foreach ($arr_folder as $row) {
            if (!empty($row)) {
                $fol.=$row . '/';
                if (!file_exists($fol)) {
                    @mkdir($fol, 0777);
                } else {
					$mod = substr(sprintf('%o', fileperms($fol)), -4);
					if ($mod != 0777) {
						@chmod($fol, 0777);
					}
                }
            }
        }
    }
}
if (!function_exists('Upload')) {
	function Upload($file = '', $uploadDir = '') {
		if ($file['error'] != 0 || empty($uploadDir)) return false;
		$upload_folder_now = $uploadDir.getFolderNow();
		Newfolder($upload_folder_now);
		$tmp_name = $file['tmp_name'];
		$path_parts = pathinfo($file['name']);
		$path_parts['dirname'];
		$path_parts['extension'];

		//TODO: Lay extesion
		$ext = "." . strtolower($path_parts['extension']);
		$name = md5(uniqid(mt_rand())) . '_' . time() . $ext;

		if (move_uploaded_file($tmp_name, $upload_folder_now . $name)) {
			//Upload  thanh cong
			return $name;
		} else {
			return false;
		}//else
	}
}
if (!function_exists('is_image')) {
	function is_image($file){
		$ext = strtolower(end(explode('.', $file)));
		$image_ext = array('gif', 'jpg', 'jpeg', 'png', 'jpe');
		return (in_array($ext, $image_ext)) ? TRUE : FALSE;
	}
}

if (!function_exists('is_json')) {
	function is_json($string) {
		return is_array(json_decode($string));
	}
}

if (!function_exists('field'))
{
	function field($field=''){
		$CI =& get_instance();
		$lang= $CI->uri->segment(1);
		return $field.'_'.$lang;
	}
}

if (!function_exists('file_size_type')) {
	function file_size_type($file, $type= 'mb'){
		if(is_file($file)){
			return round(filesize($file) /1024/1024, 2) .' MB';
		}
	}
}

if (!function_exists('str_totime')) {
	function str_totime($str){
		return strtotime(str_replace('/', '-', $str));
	}
}

if (!function_exists('date_period')) {
	function date_period($start, $end){
		$date_period= array();
		while (strtotime($start) <= strtotime($end)) {
			$date_period[]= date('Y-m-d', strtotime($start));
			$start = date ("Y-m-d", strtotime("+1 day", strtotime($start)));
		}
		return $date_period;
	}
}

if (!function_exists('decode_field_data')) {
	function decode_field_data($data){
		$data= json_decode($data);
		$value=  preg_split('/(\r?\n)+/', $data->value);
		$array= array();
		if(!empty($value)){
			foreach($value as $v){
				$v= explode('|', $v);
				$array[$v[0]]= $v[1];
			}
		}
		return $array;
	}
}

if(!function_exists('pagelistLimited')) {
	function pagelistLimited($totalRows, $pageNum= 1, $pageSize, $limit= 3) {
			settype($totalRows, "int");settype($pageSize, "int");
			if($totalRows <= 0) return "";

			$totalPages= ceil($totalRows / $pageSize);
	
			if($totalPages <= 1) return "";
			$currentPage= $pageNum;
			if($currentPage <= 0 || $currentPage > $totalPages) $currentPage= 1;

			//From to
			$form= $currentPage - $limit;
			$to= $currentPage + $limit;

			//Tinh toan From to
			if($form <= 0) {$form= 1; $to= $limit*2;};
			if($to > $totalPages) $to= $totalPages;

			//Tinh toan nut first prev next last
			$first= '';$prev= '';$next= '';$last= '';$link= '';

			//Link URL
			$linkUrl= current_url();

			$query_string='';
			
			if($_GET)
			{
				$query_get= $_GET;
				unset($query_get['p']);
				$query_string = http_build_query($query_get);
			}
			$sep= (!empty($query_string)) ? '&' : '';
			
			$linkUrl= $linkUrl.'?'.$query_string.$sep.'p=';
		
			if($currentPage > $limit) {
			/** first */
				$first= "<a href='$linkUrl' class='first'> &laquo; </a>&nbsp;";
				//$first= "";
			}

			/****** prev ***/
			if($currentPage > 1) {
				$prevPage= $currentPage - 1;
				$prev= "<a href='$linkUrl$prevPage' class='prev'> &lsaquo;  </a>&nbsp;";
			}

			/***Next***/
			if($currentPage < $totalPages) {
				$nextPage= $currentPage +1;
				$next= "<a href='$linkUrl$nextPage' class='next'> &rsaquo; </a>&nbsp;";
			}

			/***Last***/
			if($currentPage < $totalPages - 4) {
				$lastPage= $totalPages;
				$last= "<a href='$linkUrl$lastPage' class='last'> &raquo; </a>";
				//$last= "";
			}

			/***Link***/
			for($i= $form; $i <= $to; $i++) {
				if($currentPage == $i) $link.= "<span>$i</span>&nbsp;";
				else $link.= "<a href='$linkUrl$i'>$i</a>&nbsp;";
			}

			

			$pagination = '<div class="bg-pager"><div class="pagination">'.$first.$prev.$link.$next.$last.'</div>';
			if($totalPages > 1){


			$pagination .= '<div class="select-view">
						<span></span>
						<div class="select">
							<select class="js-select" id="change_number_page">';
							for($i=1; $i <= $totalPages; $i++){
								$seleted = $currentPage == $i?'selected="selected"':'';
			$pagination .= 		'<option value='.$i.' '.$seleted.'> Trang '.$i.'/ '.$totalPages.'</option>'	;				
							}	
			$pagination .= '</select>
						</div>
					</div></div>';
			}
			return $pagination;

	}//pagelistLimited
}

if (!function_exists('img')) {
    function img($image_path, $width = 0, $height = 0) {
        //Get the Codeigniter object by reference
        $CI = & get_instance();
        //Alternative image if file was not found
        if (!file_exists($image_path) || !is_file($image_path)) {
            $image_path = 'assets/img/no-image.jpg';
        }
		
        //The new generated filename we want
        $fileinfo = pathinfo($image_path);

        //MAKE A FOLDER
		//$upload_folder_time= filemtime($image_path);
		$upload_folder_now= date('Y-m-d').'/';
		
        if (!empty($width) && !empty($height))
		{
            $uploaddir_thumb = 'uploads/cache/'. $upload_folder_now . $width . 'x' . $height . '/' ;
        } elseif(!empty($width)){
            $uploaddir_thumb = 'uploads/cache/thumbnail/'.$upload_folder_now. $width.'/';
        }else{
			$uploaddir_thumb = 'uploads/cache/thumbnail/'.$upload_folder_now;
		}
		
		// $folder_old= date('Y-m-d', strtotime("-8 week"));
		// $map = directory_map('uploads/cache/');
		// foreach($map as $k=>$v)
		// {
			// if($k <= $folder_old) deleteDir('uploads/cache/'.$k);
		// }
		
        newfolder($uploaddir_thumb);
        $new_image_path = $uploaddir_thumb . $fileinfo['filename'] . '.' . $fileinfo['extension'];

        //The first time the image is requested
        //Or the original image is newer than our cache image
        if ((!file_exists($new_image_path)) || filemtime($new_image_path) < filemtime($image_path)) {
            $CI->load->library('image_lib');
            //The original sizes
            $original_size = @getimagesize($image_path);
            $original_width = $original_size[0];
            $original_height = $original_size[1];
            $ratio = $original_width / $original_height;

            //The requested sizes
            $requested_width = $width;
            $requested_height = $height;

            //Initialising
            $new_width = 0; $new_height = 0;
			
            //Calculations
            if ($requested_width > $requested_height) {
                $new_width = $requested_width;
                $new_height = $new_width / $ratio;
                if ($requested_height == 0)
                    $requested_height = $new_height;

                if ($new_height < $requested_height) {
                    $new_height = $requested_height;
                    $new_width = $new_height * $ratio;
                }
            } else {
                $new_height = $requested_height;
                $new_width = $new_height * $ratio;
                if ($requested_width == 0)
                    $requested_width = $new_width;

                if ($new_width < $requested_width) {
                    $new_width = $requested_width;
                    $new_height = $new_width / $ratio;
                }
            }

            $new_width = ceil($new_width); $new_height = ceil($new_height);

            //Resizing
            $config = array();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_path;
            $config['new_image'] = $new_image_path;

            $config['maintain_ratio'] = FALSE;
            $config['height'] = $new_height;
            $config['width'] = $new_width;
            $CI->image_lib->initialize($config);
            $CI->image_lib->resize();
            $CI->image_lib->clear();
            //Crop if both width and height are not zero
            if (($width != 0) && ($height != 0)) {
                $x_axis = floor(($new_width - $width) / 2);
                $y_axis = floor(($new_height - $height) / 2);
                //Cropping
                $config = array();
                $config['source_image'] = $new_image_path;
                $config['maintain_ratio'] = FALSE;
                $config['new_image'] = $new_image_path;
                $config['width'] = $width;
                $config['height'] = $height;
                $config['x_axis'] = $x_axis;
                $config['y_axis'] = 0;
				$config['master_dim'] = 'height';
                $config['quality'] = '100%';
                $CI->image_lib->initialize($config);
                $CI->image_lib->crop();
                $CI->image_lib->clear();
            }
        }
        return base_url() . $new_image_path;
    }
}

if (!function_exists('deleteDir')) {
	function deleteDir($path)
	{
		return is_file($path) ? @unlink($path) : array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
	}
}
if (!function_exists('language')) {
	function language($field = '',$type=''){
		$CI =& get_instance();
		$lang = $type ? $type : $CI->uri->segment(1);
		if($field){
			return  $field.'_'.$lang;
		}else{
			return $lang;
		}
		
	}
}
if (!function_exists('change_lang')) {
	function change_lang($link ='', $language_link = ''){
		$CI =& get_instance();
		$lang = $CI->uri->segment(1);
		if(!empty($language_link)){
			return $link.'/'.$language_link;
		}else{
			return $link;
		}
		
	}
}
if (!function_exists('url_lang')) {
	function url_lang($url_lang = ''){
		return toSlug($url_lang);
	}
}

if (!function_exists('filter_link')) {
	function filter_link($lang = '', $type='', $other = 0){
		$lang_arr = $other ? $lang =='vi' ? 'en' : 'vi' : $lang;
		if($lang && $type){
			$result = array(
				'login' => array(
					'vi' => 'dang-nhap',
					'en' => 'login'
				),
				'register' => array(
					'vi' => 'dang-ky',
					'en' => 'register'
				),
				'profile' => array(
					'vi' => 'thong-tin-ca-nhan',
					'en' => 'profile'
				),
				'forgot' => array(
					'vi' => 'quen-mat-khau',
					'en' => 'forgot'
				),
				'hr_services' => array(
					'vi' => 'dich-vu-nhan-su',
					'en' => 'hr-services'
				),
				'executive_team' => array(
					'vi' => 'doi-ngu-dieu-hanh',
					'en' => 'executive-team'
				),
				'list_client' => array(
					'vi' => 'khach-hang',
					'en' => 'clients'
				),
				'list_award' => array(
					'vi' => 'giai-thuong',
					'en' => 'awards'
				),
				'list_partner' => array(
					'vi' => 'doi-tac',
					'en' => 'partners'
				),
				'office_locations' => array(
					'vi' => 'dia-diem-van-phong',
					'en' => 'office-locations'
				),
				'faq' => array(
					'vi' => 'thi-truong/cau-hoi',
					'en' => 'market-entry/faq'
				),
				'dashboard' => array(
					'vi' => 'quan-ly-tai-khoan',
					'en' => 'account-management'
				),
				'save_jobs' => array(
					'vi' => 'cong-viec-da-luu',
					'en' => 'save-jobs'
				),
				'jobs_applied' => array(
					'vi' => 'cong-viec-nop-don',
					'en' => 'jobs-applied'
				),
				'about_talentnet' => array(
					'vi' => 'gioi-thieu-talentnet',
					'en' => 'about-talentnet'
				),
				'search_job' => array(
					'vi' => 'tim-kiem-viec-lam',
					'en' => 'search-job'
				),
				'create_cv' => array(
					'vi' => 'tao-cong-viec',
					'en' => 'create-cv'
				),
				'your_cv' => array(
					'vi' => 'cong-viec-cua-ban',
					'en' => 'your-cv'
				),
				'job_alert' => array(
					'vi' => 'bao-cao-viec-lam',
					'en' => 'job-alert'
				),
				'submit_job_alert' => array(
					'vi' => 'dang-ky-bao-cao-viec-lam',
					'en' => 'submit-job-alert'
				),
				'edit_job_alert' => array(
					'vi' => 'chinh-sua-bao-cao-viec-lam',
					'en' => 'edit-job-alert'
				),
				'new_job_matched' => array(
					'vi' => 'cong-viec-moi-phu-hop',
					'en' => 'new-job-matched'
				),
				'my_download' => array(
					'vi' => 'tai-ve-cua-toi',
					'en' => 'my-download'
				),
				'all_jobs' => array(
					'vi' => 'tat-ca-viec-lam',
					'en' => 'all-jobs'
				),
				'sharing_corner' => array(
					'vi' => 'goc-chia-se',
					'en' => 'sharing-corner'
				),
				'search' => array(
					'vi' => 'tim-kiem',
					'en' => 'search'
				),
				'video' => array(
					'vi' => 'video',
					'en' => 'video'
				),
			);
		}
		return (!empty($result[$type][$lang_arr]) ? $result[$type][$lang_arr] : '');
	}
}

if (!function_exists('explode_textarea_array')) {

    function explode_textarea_array($string = '') {
		$textarea = array();
		$str_replace = array("\r", "\r\n", "<p>&nbsp;</p>","<p>","</p>","<div>","</div>","<br>","<br />");
		$text = str_replace( $str_replace, "\n", str_replace( "\r\n", "\n", $string ) );
		$splitted = explode( "\n",  $text);
		if(!empty($splitted)){
			foreach($splitted as $split){
				if($split){
					$textarea[] = $split;
				}
			}
		}
		return $textarea;
    }
}

if (!function_exists('explode_editor_array')) {

    function explode_editor_array($string = '') {
		$textarea 	 = array();
		$str_replace = array("\r", "\r\n", "<p>&nbsp;</p>","<p>","</p>");
		$text 		 = str_replace( $str_replace, "\n", str_replace( "\r\n", "\n", $string ) );
		$splitted 	 = explode( "\n",  $text);
		if(!empty($splitted)){
			foreach($splitted as $split){
				if($split){
					$textarea[] = $split;
				}
			}
		}
		return $textarea;
    }
}