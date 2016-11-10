<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Block_model extends MY_Model {

    function get_list_dorse($type=''){
        $name = language('name');
        $this->db->select('e.*,u.avatar');
        $this->db->from(ENDORSER_TB.' AS e');
        $this->db->join(USER_TB.' AS u','e.last_user = u.id','left');
        $this->db->where('e.status',1);
        $this->db->order_by('e.counter','desc');
        $this->db->order_by('e.'.$name,'asc');
        if($type!='')
            $this->db->where('e.type',$type);
        return $this->db->get()->result();
    }
    function get_list_dorse_by_user(){
        $name = language('name');
            $result= array();
            $this->db->select('*');
            $this->db->from(ENDORSER_TB);
            $this->db->order_by($name,'asc');
            $result['lstDorse']= $this->db->get()->result();
            return $result;
    }
    function update_endorser_counter($skill_id){
        if($skill_id!=''){
            $sql = 'UPDATE '.ENDORSER_TB.' SET counter=counter+1 WHERE id ='.$skill_id;
            $this->db->query($sql);
        }
    }
    function insert_who_download_brochure(){
        $fullname = filter_input_xss($this->input->post('fullname'));
        $company = filter_input_xss($this->input->post('company'));
        $title = filter_input_xss($this->input->post('title'));
        $phone = filter_input_xss($this->input->post('phone'));
        $email = filter_input_xss($this->input->post('email'));
        $this->db->insert(DOWNLOAD_BROCHURE_TB, array(
            'fullname' => $fullname,
            'company'  => $company,
            'title'    => $title,
            'phone'    => $phone,
            'created'  => NOW,
            'changed'  => NOW,
            'email'    => $email,
        ));
    }

    function validate_captcha(&$arr_error='', &$error=''){
        $validate_field= 'captcha';
        $captcha= strtolower($this->input->post($validate_field));
        if($this->validate_null($arr_error, $form_error, $validate_field)){
            if(strtolower($captcha) != strtolower($this->session->userdata('captcha')))
            {
                $arr_error[]= array(
                    'field'    => $validate_field,
                    'txt'    => lang('confirmation_code_incorrect')
                );
                $form_error= true;
            }
        }else{
            $arr_error[]= array(
                'field'    => $validate_field,
                'txt'    => lang('confirmation_code_incorrect')
            );
        }
        $this->validate_error($error, $form_error);
    }
}
?>