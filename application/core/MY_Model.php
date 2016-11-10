<?php
class MY_Model extends CI_Model
{
    public $current_lang ='';
    function __construct(){
        parent::__construct();
        // Load the Database Module REQUIRED for this to work.
        $this->load->database();//Without it -> Message: Undefined property: XXXController::$db
        $this->current_lang = $this->uri->segment(1);
    }

    function fetch($select = "*", $table = "", $where = "", $order = "", $by = "DESC", $start = -1, $limit = 0, $return_array = false)
    {
        $this->db->select($select);
        if($where != "")
        {
            $this->db->where($where);
        }
        if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
        {
            if($order == 'rand'){
                $this->db->order_by('rand()');
            }else{
                $this->db->order_by($order, $by);
            }
        }

        if((int)$start >= 0 && (int)$limit > 0)
        {
            $this->db->limit($limit, $start);
        }
        #Query
        $query = $this->db->get($table);
        if($return_array){
            $result = $query->result_array();
        } else {
            $result = $query->result();
        }
        $query->free_result();
        return $result;
    }

    function get($select = "*", $table = "", $where = "", $order = "", $by = "DESC", $return_array = false,$field='')
    {
        $this->db->select($select);
        if($where != "")
        {
            $this->db->where($where);
        }
        if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
        {
            if($order == 'rand'){
                $this->db->order_by('rand()');
            }else{
                $this->db->order_by($order, $by);
            }
        }
        #Query
        $query = $this->db->get($table);
        if($return_array){
            $result = $query->row_array();

        } else {
            $result = $query->row();
        }
        $query->free_result();
        if($field && !empty($result)){
            if($return_array){
                $result = $result['$field'];

            } else {
                $result = $result->$field;
            }
        }
        return $result;
    }

    function history_ip($USER= array()){
        if(!empty($USER)){
            $ip= getIP();$arr_ip= array();$key= false;
            if(!is_array(json_decode($USER->history_ip))){
                $arr_ip= @get_object_vars(json_decode($USER->history_ip));
            }else{
                $arr_ip= json_decode($USER->history_ip);
            }

            if(!empty($arr_ip)){
                $key = array_key_exists($ip, $arr_ip);   // $key = 1;
            }else{
                $arr_ip= array($ip=>1);
            }

            if(empty($key)){
                //NOT EXIST
                if(empty($USER->history_ip)){
                    $arr_ip= array($ip=>1);
                }else{
                    $new_arr_ip= array($ip=>1);
                    $arr_ip= array_merge($arr_ip, $new_arr_ip);
                }
            }else{
                $arr_ip[$ip]= $arr_ip[$ip]+1;
            }

            $update['history_ip']= json_encode($arr_ip);
            $this->db->update(USER_TB, $update, "id = '{$USER->id}'");
        }
    }

    function send_email($data= '') {
        $this->load->library('email');
        $config['useragent'] = USERAGENT;
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        /*$config['smtp_host'] = 'smtp.sendgrid.com';
        $config['smtp_user'] = 'wizardtest';
        $config['smtp_pass'] = '75t1NWHWXD';*/
        $config['smtp_host'] = 'smtp.mandrillapp.com';
        $config['smtp_user'] = 'it@talentnet.vn';
        $config['smtp_pass'] = 'MKvSk2le9OuLiGjzp5vj6Q';
        $config['smtp_port'] = '587';

        $this->email->initialize($config);

        $this->email->from(EMAIL_FORM, EMAIL_NAME);
        $this->email->to($data['email']);
        $this->email->subject($data['subject']);
        $this->email->message($data['html']);

        if(!empty($data['attach'])){

            $this->email->attach($data['attach']);
        }

        if( isset($data['cc']) && $data['cc'] !== false && !empty($data['cc'])){
            $this->email->cc($data['cc']);
        }

        if( isset($data['bcc']) && $data['bcc'] !== false && !empty($data['bcc'])){
            $this->email->bcc($data['bcc']);
        }

        if($this->email->send()) {
            return true;
        }
        //print_r($this->email->print_debugger());
    }

    function session($USER= ''){
        $this->session->set_userdata('uid', $USER->id);
        $this->session->set_userdata('fb_id', $USER->fb_id);
        //$this->session->set_userdata('username', $USER->username);
        $this->session->set_userdata('fullname', $USER->fullname);
        $this->session->set_userdata('email', $USER->email);
        $this->session->set_userdata('fb_access_token', $USER->fb_access_token);
        $this->session->set_userdata('token', $USER->token);
        $this->history_ip($USER);
    }

    function validate_email_md(&$arr_error='', &$error='',$input='', $skip= '',$table= 'wz_user',$field='email', $id = 0){
        $email= strtolower(mysql_real_escape_string($input));
        $type = $field ? $field : 'email';
        if($this->validate_null($arr_error, $t_error, $type)){
            if($email != 'email'){
                if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
                    if(!empty($skip)){
                        if($id){
                            $email= $this->model->get('*', $table, "email = '$email' AND id != $id");
                        }else{
                            $email= $this->model->get('*', $table, "email = '$email'");
                        }
                        if(!empty($email)){
                            $arr_error[]= array(
                                'field'    => $field,
                                'txt'    => lang('email_1')
                            );
                            $t_error= true;
                        }
                    }
                }else{
                    $arr_error[]= array(
                        'field'    => $field,
                        'txt'    => lang('email_2')
                    );
                    $t_error= true;
                }
            }else{
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => lang('email_3')
                );
                $t_error= true;
            }
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => lang('email_3')
            );
        }
        $this->validate_error($error, $t_error);
    }
    function validate_confirm_password(&$arr_error='', &$error=''){
        //set rules to validation
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        if($password!=$repassword){
            $arr_error[]= array(
                'field'    => 'captcha',
                'txt'    => lang('password_confirmation_not_match')
            );
            $t_error= true;
        }
        $this->validate_error($error, $t_error);
    }

    function validate_general_name(&$arr_error='', &$error='',$field='',$txt='', $string=''){
        if($this->validate_null($arr_error, $form_error, $field)){
            if($this->input->post($field) == $string){
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => lang('Please_enter').' '.$txt
                );
            }else{
                $fullname= filter_input_xss($this->input->post($field));
                if (preg_match("/[^a-zA-Z\_-]/i", str_replace(' ', '', cutUnicode($fullname))))
                {
                    $arr_error[]= array(
                        'field'    => $field,
                        'txt'    => $txt.' '.lang('general_name')
                    );
                    $form_error= true;
                }
            }
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => lang('Please_enter').' '.$txt
            );
        }
        $this->validate_error($error, $form_error);
    }

    function validate_phone(&$arr_error='', &$error='',$field='phone'){
        $phone= $this->input->post($field);
        if($this->validate_null($arr_error, $t_error, $field)){
            if(!is_numeric($phone)){
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => lang('phone_1')
                );
                $t_error= true;
            }
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => lang('phone_2')
            );
        }
        $this->validate_error($error, $t_error);
    }

    function validate_birthday(&$arr_error='', &$error='', $field='', $txt='', $type='' ,$des=''){
        $birthday = $this->input->post($field);
        if($this->validate_null($arr_error, $form_error, $field)){
            if($birthday == 'dd' || $birthday == 'mm' || $birthday == 'yyyy'){
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => (!empty($txt)) ? $txt : $this->require_txt
                );
                $t_error= true;
            }else{
                if (preg_match("/[^0-9]/", $birthday) || $birthday == '00'){
                    $arr_error[]= array(
                        'field'    => $field,
                        'txt'    => $des.' không hợp lệ'
                    );
                    $t_error= true;
                }else{
                    //pr($type);
                    if($type == 'day'){
                        if($birthday <= 0 || $birthday > 31){
                            $arr_error[]= array(
                                'field'    => $field,
                                'txt'    => $des.' phải từ số 1 đến 31'
                            );
                            $form_error= true;
                        }
                    }else if($type == 'month'){
                        if($birthday <= 0 || $birthday > 12){
                            $arr_error[]= array(
                                'field'    => $field,
                                'txt'    => $des.' phải từ số 1 đến 12'
                            );
                            $form_error= true;
                        }
                    }else{
                        if($field == 'year'){
                            if($birthday < date('Y') ||  $birthday > 2016){
                                $arr_error[]= array(
                                    'field'    => $field,
                                    'txt'    => $des.' phải từ năm hiện tại đến 2016'
                                );
                                $form_error= true;
                            }
                        }else{
                            if($birthday < 2000 ||  $birthday > date('Y')){
                                $arr_error[]= array(
                                    'field'    => $field,
                                    'txt'    => $des.' phải từ năm 2000 đến năm hiện tại'
                                );
                                $form_error= true;
                            }
                        }

                    }
                }
            }

        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => (!empty($txt)) ? $txt : $this->require_txt
            );
        }
        $this->validate_error($error, $form_error);
    }

    function validate_Captcha(&$arr_error='', &$error=''){
        //set rules to validation
        $captcha = $this->input->post('captcha');
        $session = $this->session->userdata('captcha');
        //pr($session);
        if(!$this->validate_null($arr_error, $t_error, 'captcha')){
            $arr_error[]= array(
                'field'    => 'captcha',
                'txt'    => lang('captcha_1')
            );
        }else if(strtolower($captcha) != strtolower($session)){
            $arr_error[]= array(
                'field'    => 'captcha',
                'txt'    => lang('captcha_2')
            );
            $t_error= true;
        }else{

        }
        $this->validate_error($error, $t_error);
    }

    function validate_number(&$arr_error='', &$error='',$field='',$txt='', $string=''){
        if($this->validate_null($arr_error, $form_error, $field)){
            if($this->input->post($field) == $string){
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => lang('Please_enter').' '.$txt
                );
            }else{
                $input= filter_input_xss($this->input->post($field));
                if (!is_numeric($input))
                {
                    $arr_error[]= array(
                        'field'    => $field,
                        'txt'    => $txt.' '.lang('must_be_number')
                    );
                    $form_error= true;
                }
            }
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => lang('Please_enter').' '.$txt
            );
        }
        $this->validate_error($error, $form_error);
    }

    function validate_error(&$error='', &$form_error=''){
        $error= (empty($error))?$form_error:true;
        return $error;
    }

    function validate_null(&$arr_error='', &$form_error='', $field=''){
        $field= $this->input->post($field);
        if(!is_array($field))
        {
            if(!trim($field))
            {
                $form_error= true;
                return FALSE;
            }
        }
        else
        {
            if(empty($field[0]))
            {
                $form_error= true;
                return FALSE;
            }
        }
        return TRUE;
    }
    /*function validate_courses(&$arr_error='', &$form_error='', $field=''){
        $name= $this->input->post('name');
        $training_company= $this->input->post('training_company');
        $time_duration= $this->input->post('time_duration');
        if(empty($name) && empty($training_company) && empty($time_duration)){
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => lang('required_once');
            );
            $this->validate_error($error, $form_error);
            return false;
        }

        return TRUE;
    }    */

    function validate_ext(&$arr_error='', &$error='', $field='', $txt=''){
        if($this->validate_null($arr_error, $form_error, $field)){
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => (!empty($txt)) ? $txt : $this->require_txt
            );
        }
        $this->validate_error($error, $form_error);
    }

    function validate_date_from_to(&$arr_error='', &$error='', $field1='' ,$field2='' , $txt=''){
        $_field1 = str_replace('/', '-', $this->input->post($field1,true));
        $_field2 = str_replace('/', '-', $this->input->post($field2,true));

        if(strtotime($_field1) >= strtotime($_field2)){
            $arr_error[]= array(
                'field'    => $field1,
                'txt'    => (!empty($txt)) ? $txt : $this->require_txt
            );
            $form_error = true;
        }

        if(strtotime($_field1) >= time()){
            $arr_error[]= array(
                'field'    => $field1,
                'txt'    => (!empty($txt)) ? $txt : $this->require_txt
            );
            $form_error = true;
        }

        if(strtotime($_field2) >= time()){
            $arr_error[]= array(
                'field'    => $field2,
                'txt'    => (!empty($txt)) ? $txt : $this->require_txt
            );
            $form_error = true;
        }

        $this->validate_error($error, $form_error);
    }

    function validate_email(&$arr_error='', &$error='', $field='', $txt=''){
        $email= $this->input->post($field);
        $input = explode('@', $email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false || preg_match('/[\'^£$%&*()}{@#~?><>,|=+!\/-]/', $input[0]) ){
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => (!empty($txt)) ? $txt : ''
            );
            $error=true;
        }else{

        }
        $this->validate_error($error, $form_error);
    }

    function validate_youtube(&$arr_error='', &$error='', $field='', $txt='', &$youtube_id=''){
        if($this->validate_null($arr_error, $form_error, $field)){
            $youtube_id= youtube_id($this->input->post($field));
            if(empty($youtube_id))
            {
                $arr_error[]= array(
                    'field'    => $field,
                    'txt'    => $txt
                );
                $form_error= true;
            }
        }else{
            $arr_error[]= array(
                'field'    => $field,
                'txt'    => $txt
            );
        }
        $this->validate_error($error, $form_error);
    }

    function permission($mid= 0, $type= ''){
        if(!$this->session->userdata('admin'))
        {
            if(!empty($mid))
            {
                $rid= $this->session->userdata('admin_rid');
                $role_permission= $this->get('*', ADMIN_ROLE_PERMISSION_TB, "rid = '{$rid}' AND mid = '{$mid}'");

                if(empty($role_permission))
                {
                    redirect(base_url().LINK_ADMIN_PERMISSION_DENY);
                }
                else
                {
                    $permission= json_decode($role_permission->permission);
                    switch($type){
                        case('read'):
                        case('edit'):
                        case('delete'):
                        case('manage'):
                            if(empty($permission->$type)) redirect(base_url().LINK_ADMIN_PERMISSION_DENY);
                            break;
                    }
                }
            }
            else
            {
                redirect(base_url().LINK_ADMIN_PERMISSION_DENY);
            }
        }
    }

    public function get_data($params, $type = "object") {
        if (isset($params["select"])) {
            $this->db->select($params["select"]);
        }

        if (isset($params["where"])) {
            $this->db->where($params["where"]);
        }

        if (isset($params["join"])) {
            $i = 0;
            foreach ($params["join"]['table'] as $k => $v) {
                if (isset($params["join"]['type'])) {
                    if (is_array($params["join"]['type'])) {
                        $this->db->join(PREFIX . $k, $v, $params["join"]['type'][$i]);
                    } else {
                        $this->db->join(PREFIX . $k, $v, $params["join"]['type']);
                    }
                } else {
                    $this->db->join(PREFIX . $k, $v);
                }
                $i++;
            }
        }

        if (isset($params["or_where"])) {
            $this->db->or_where($params["or_where"]);
        }

        if (isset($params["where_in"])) {
            foreach ($params["where_in"] as $k => $v) {
                $this->db->where_in($k, $v);
            }
        }

        if (isset($params["or_where_in"])) {
            foreach ($params["or_where_in"] as $k => $v) {
                $this->db->or_where_in($k, $v);
            }
        }

        if (isset($params["where_not_in"])) {
            foreach ($params["where_not_in"] as $k => $v) {
                $this->db->where_not_in($k, $v);
            }
        }

        if (isset($params["or_where_not_in"])) {
            foreach ($params["or_where_not_in"] as $k => $v) {
                $this->db->or_where_not_in($k, $v);
            }
        }
        if (isset($params["group_by"])) {
            $this->db->group_by($params["group_by"]);
        }

        if (isset($params["having"])) {
            $this->db->having($params["having"]);
        }

        if (isset($params["or_having"])) {
            $this->db->or_having($params["having"]);
        }

        if (isset($params["like"])) {
            foreach ($params["like"] as $k => $v) {
                $this->db->like($k, $v);
            }
        }

        if (isset($params["or_like"])) {
            foreach ($params["or_like"] as $k => $v) {
                $this->db->or_like($k, $v);
            }
        }

        if (isset($params["not_like"])) {
            foreach ($params["not_like"] as $k => $v) {
                $this->db->not_like($k, $v);
            }
        }

        if (isset($params["or_not_like"])) {
            foreach ($params["or_not_like"] as $k => $v) {
                $this->db->not_like($k, $v);
            }
        }

        if (isset($params["order_by"])) {
            if(is_array($params["order_by"])){
                foreach ($params["order_by"] as $k => $v) {
                    $this->db->order_by($k, $v);
                }
            }  else {
                $this->db->order_by($params["order_by"]);
            }
        }
        if (isset($params["distinct"])) {
            $this->db->distinct();
        }

        if (isset($params["limit"])) {
            $limit = explode(',', $params["limit"]);
            if (count($limit) > 1) {
                $this->db->limit($limit[0], $limit[1]);
            } else {
                $this->db->limit($params["limit"]);
            }
        }
        $params["table"] = str_replace(PREFIX, '', $params["table"]);
        $query = $this->db->get(PREFIX . $params["table"]);
        if ($type == "object")
            $data= $query->result();
        else if ($type == "array")
            $data= $query->result_array();
        else if ($type == "row")
            $data= $query->first_row();
        else if ($type == "count")
            $data= $query->num_rows();
        if($data){
            return $data;
        }
    }
    function get_all($table, $where ='',$order='',$limit='') {
        $table = str_replace(PREFIX, '', $table);
        if (!empty($where))
            $this->db->where($where);
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        if($order!=''){
            $this->db->order_by($order);
        }
        $query = $this->db->get(PREFIX .$table);
        if ($query->result()){
            return $query->result();
        }
        else
            return false;
    }
    function get_all_array($table, $where = array(),$column='id',$order='desc',$limit=0) {
        $table = str_replace(PREFIX, '', $table);
        if (count($where) > 0)
            $this->db->where($where);
        if($limit>0){
            $this->db->limit($limit);
        }
        $this->db->order_by($column,$order);
        $query = $this->db->get(PREFIX . $table);
        if ($query->result())
            return $query->result_array();
        else
            return false;
    }
    function getid($table,$id,$status = true){
        $table = str_replace(PREFIX, '', $table);
        $this->db->where('id',$this->db->escape_str($id));
        if($status)
          $this->db->where('status',1);
        $query = $this->db->get(PREFIX . $table);
        if ($query->result())
            return $query->first_row();
        else
            return false;
    }
    function row_data($table, $where = array(),$order = 'id DESC') {
        $table = str_replace(PREFIX, '', $table);
        if (count($where) > 0)
            $this->db->where($where);
        $this->db->order_by($order);
        $this->db->limit(1);
        $query = $this->db->get(PREFIX . $table);
        if ($query->result())
            return $query->first_row();
        else
            return false;
    }

    function count_data($table, $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        if (count($where) > 0)
            $this->db->where($where);
        $query = $this->db->get(PREFIX . $table);
        return $query->num_rows();
    }

    function insert_data($table, $array = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set($array);
        $this->db->insert(PREFIX . $table);
        return $this->db->affected_rows();
    }

    function insert_id($table, $array = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set($array);
        $this->db->insert(PREFIX . $table);
        return $this->db->insert_id();
    }

    function update_cong($table, $f, $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set("$f", "$f + 1", FALSE);
        $this->db->where($where);
        $this->db->update(PREFIX . $table);
    }
    function update_tru($table, $f, $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set("$f", "$f - 1", FALSE);
        $this->db->where($where);
        $this->db->update(PREFIX . $table);
    }
    function update_value_tru($table, $f,$v, $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set("$f", "$f - $v", FALSE);
        $this->db->where($where);
        $this->db->update(PREFIX . $table);
    }

    function update_value_cong($table, $f,$v, $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set("$f", "$f + $v", FALSE);
        $this->db->where($where);
        $this->db->update(PREFIX . $table);
    }
    function update_data($table, $data = array(), $where = array()) {
        $table = str_replace(PREFIX, '', $table);
        $this->db->set($data);
        $this->db->update(PREFIX . $table, $data, $where);
        return $this->db->affected_rows();
    }

    function delete_data($table, $where = array()){
        $table = str_replace(PREFIX, '', $table);
        $this->db->where($where);
        $this->db->delete(PREFIX . $table);
        return $this->db->affected_rows();
    }

    function sort_list($table,$parent_id=0,$return = 'obj',$where=array()){
        $table = str_replace(PREFIX, '', $table);
        $w = array_merge($where,array('parent_id'=>$parent_id,'status'=>1));
        $parents=$this->get_all($table,$w,'orders asc');
        if($parents){
            foreach($parents as &$parent){
                $childrens=$this->get_all($table,array('parent_id'=>$parent->id,'status'=>1),'orders asc');
                if($childrens){
                    foreach($childrens as &$children){
                        $children->children = $this->sort_list($table,$children->id,$return);
                    }
                    $parent->children = $childrens;
                }
            }
            if($return !='obj'){
                return object_to_array($parents);
            }
            return $parents;
        }
        return false;
    }

    function max_id($table,$col, $where=''){
        $table = str_replace(PREFIX, '', $table);
        $this->db->select_max($col);
        if($where)
          $this->db->where($where);
          $this->db->limit(1);
        $result = $this->db->get(PREFIX.$table)->first_row();
        if (!empty($result->{$col}))
            return intval($result->{$col})+1;
        else
           return 0;
    }

    function select_sum($table,$col, $where=''){
        $table = str_replace(PREFIX, '', $table);
        $this->db->select_sum($col);
        if($where)
          $this->db->where($where);
        $result = $this->db->get(PREFIX.$table)->first_row();
        if (!empty($result->{$col}))
            return intval($result->{$col});
        else
           return 0;
    }

     function select_field($table,$col, $where=''){
        $table = str_replace(PREFIX, '', $table);
        $this->db->select_sum($col);
        if($where)
          $this->db->where($where);
        $result = $this->db->get(PREFIX.$table)->first_row();
        if (!empty($result->{$col}))
            return $result->{$col};
        else
           return false;
    }

}
?>