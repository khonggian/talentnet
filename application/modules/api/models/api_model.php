<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class api_model extends MY_Model {
	
	function getIDSJob(){
		$ids=  random_string();
		
		while($this->get('id', JOBS_TB, "ids = BINARY '{$ids}'")){
			$ids=  random_string();
		}
		
		return $ids;
	}	
}
?>