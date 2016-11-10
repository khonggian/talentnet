<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Linkedin_model extends MY_Model {
	function linkedin( $info ){
        $data= array(
            'type'      => 'linkedin',
            'fullname'  => $info->firstName." ".$info->lastName,
            'email'     => $info->emailAddress,
            'token'     => _token(),
            'randomkey' => _token(),                
            'status'    => 1,
            'changed'   => NOW
        );          
        $email=$info->emailAddress;
        $exist= $this->get('id', USER_TB, "email = '{$email}'");
        if(empty($exist))
        {
            $data['created']= NOW;
            $this->db->insert(USER_TB, $data);
            $uid=  $this->db->insert_id();              
        }
        else
        {
            $this->db->update(USER_TB, $data, "id = '{$exist->id}'");
        }
        $uid= (!empty($uid)) ? $uid : $exist->id;
        $USER= $this->get('*', USER_TB, "id = '{$uid}'");
        $this->session($USER);      
    }
}
?>