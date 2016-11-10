<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Salary_calc extends MX_Controller {
	private $module = 'salary_calc';
	function __construct(){
		parent::__construct();
		$this->load->model($this->module.'_model','model');
        $this->max_salary_contribution = 23*pow(10,6);
        $this->social_ins_ee = 0.08;
        $this->health_ins_ee = 0.015;
        $this->unemployment_ins_ee= 0.01;
        $this->social_ins_er = 0.18;
        $this->health_ins_er = 0.03;
        $this->unemployment_ins_er= 0.01;
        $this->dependant = 3.6*pow(10,6);
        $this->personal = 9*pow(10,6);
        $this->trade_union = 0.02;
	}
	
	/*-------------------------------------- FRONTEND --------------------------------------*/		
	function index($for=''){
	    $data= array();
        if($for=='' || ($for!='employee'&&$for!='employer'))
            redirect(PATH_URL_LANG);
        if($this->input->get('salary')!=''){
            $method = filter_input_xss($this->input->get('method'));
            $max_salary = filter_input_xss($this->input->get('max_salary'));
            $salary = filter_input_xss($this->input->get('salary'));
            $dependent = filter_input_xss($this->input->get('dependent'));
            $dependent = empty($dependent)?0:$dependent;
            $trade_union = intval($this->input->get('trade_union'));
            $this->trade_union = empty($trade_union)?0.02:$trade_union/100;
            $max_salary = str_replace(',','',$max_salary);
            $data['max_salary']= $max_salary;
            $max_salary_contribution=$max_salary;
            $salary = str_replace(',','',$salary);
            $data['salary']= $salary;
            $data['method'] = $method;
            $data['dependent'] = $dependent; 
            if($method==1){
                $board=$this->gross_to_net($salary,$dependent);
                $data['board']= $board;
            }
            else if($method==2){
                $board=$this->net_to_gross($salary,$dependent);
                $data['board']= $board;
            }
            if($for=='employer')
                $this->calc_tax_er($data['board']);
            //pr($data);
        }
		$this->template->write('title','Salary Calculator');
        if($for=='employee'){
            $data['title'] = lang('cs_for_employee');
            $this->template->write_view('content','FRONTEND/for_employee',$data);
            
        }
        else if($for=='employer'){
            $data['title'] = lang('cs_for_employer');
            $this->template->write_view('content','FRONTEND/for_employer',$data);
        }
            
		$this->template->render();	
	}
    private function calc_tax_er(&$board){
        $board['social_ins_er'] = $board['social_ins_ee']/$this->social_ins_ee*$this->social_ins_er;
        $board['health_ins_er'] = $board['health_ins_ee']/$this->health_ins_ee*$this->health_ins_er;
        $board['unemployment_ins_er'] = $board['unemployment_ins_ee']/$this->unemployment_ins_ee*$this->unemployment_ins_er;
        $board['trade_union'] = $board['social_ins_ee']/$this->social_ins_ee*$this->trade_union;
        $board['total_employer_cost'] = $board['gross']+$board['social_ins_er']
                                        +$board['health_ins_er']+$board['unemployment_ins_er']
                                        +$board['trade_union']; 
    }
    private function calc_tax_ee($s_gross,&$board){
        $board['social_ins_ee'] = ($s_gross>$this->max_salary_contribution?$this->max_salary_contribution:$s_gross)*$this->social_ins_ee;
        $board['health_ins_ee'] = ($s_gross>$this->max_salary_contribution?$this->max_salary_contribution:$s_gross)*$this->health_ins_ee;
        $board['unemployment_ins_ee'] = ($s_gross>$this->max_salary_contribution?$this->max_salary_contribution:$s_gross)*$this->unemployment_ins_ee;
        $salary_before_tax= $s_gross - $board['social_ins_ee'] - $board['health_ins_ee'] - $board['unemployment_ins_ee']
                            - $board['total_dependent'] - $board['total_personnal'];
        // Calculate Personal income tax 
        if($salary_before_tax>80*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.35-9850000;
        }
        else if($salary_before_tax>52*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.3-5850000;
        }
        else if($salary_before_tax>32*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.25-3250000;
        }
        else if($salary_before_tax>18*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.2-1650000;
        }
        else if($salary_before_tax>10*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.15-750000;
        }
        else if($salary_before_tax>5*pow(10,6)){
            $board['personal_tax'] = $salary_before_tax*0.1-250000;
        }
        else if($salary_before_tax>0){
            $board['personal_tax'] = $salary_before_tax*0.05;
        }
        else{
            $board['personal_tax'] =0;
        }
        $board['total_deduction'] = $board['social_ins_ee']+$board['health_ins_ee']+$board['unemployment_ins_ee'] + $board['personal_tax'];
    }
    private function gross_to_net($s_gross,$dep){
        $board = array();
        $dep = empty($dep)?0:$dep;
        $s_gross = floatval($s_gross);
        $board['total_dependent'] = $this->dependant*$dep;
        $board['total_personnal'] = $this->personal;
        
        $board['gross'] = $s_gross;
        $this->calc_tax_ee($s_gross,$board);
        $board['net'] = $s_gross - $board['total_deduction'];
        return $board; 
    }
    
    private function net_to_gross($s_net,$dep){
        $board = array();
        $s_net = floatval($s_net);
        $board['net'] = $s_net;
        $grossed_up =0;
        $board['total_dependent'] = $this->dependant*$dep;
        $board['total_personnal'] = $this->personal;
        if($s_net < ($board['total_personnal']+$board['total_personnal'])){
            $grossed_up = $s_net;
        }
        else{
            $temp= $s_net- $board['total_personnal']-$board['total_dependent'];
            if($temp<4750000) $grossed_up = $temp/0.95;
            else if($temp<9250000) $grossed_up =($temp-250000)/0.9;
            else if($temp<16050000) $grossed_up = ($temp-750000)/0.85;
            else if($temp<27250000) $grossed_up = ($temp-1650000)/0.8;
            else if($temp<42250000) $grossed_up = ($temp-3250000)/0.75;
            else if($temp<61850000) $grossed_up = ($temp-5850000)/0.7;
            else $grossed_up= ($temp - 9850000)/0.65;
            $grossed_up = $grossed_up+$board['total_personnal']+$board['total_dependent'];
        }
        if(($grossed_up/(1-$this->social_ins_ee-$this->health_ins_ee-$this->unemployment_ins_ee))<$this->max_salary_contribution){
            $board['gross']= $grossed_up/(1-$this->social_ins_ee-$this->health_ins_ee-$this->unemployment_ins_ee);
        }
        else{
            $board['gross'] = $grossed_up + ($this->social_ins_ee+$this->health_ins_ee+$this->unemployment_ins_ee)*$this->max_salary_contribution;
        }
        $this->calc_tax_ee($board['gross'],$board);
        return $board;
    }
    
	
}