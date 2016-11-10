<?php
/**
* 
*/
class redirect
{
	
	function index(){
		$CI =& get_instance();				
		$array=array();
		$url='/'.uri_string();
		if($_SERVER['QUERY_STRING']){
			$url=$url."?".$_SERVER['QUERY_STRING'];
		}
		$url=urldecode($url);
		if($url=='/download/Total%20Integrated%20Payroll%20Solution%20-%20Brochure.pdf'){
			redirect('/uploads/editor/files/Total Integrated Payroll Solution - Brochure.pdf');
		}
		/*if($url=='/jobs/executive-search?page=3&k=Business Analyst Deputy Manager'){
			redirect('/en/search-job');
		}*/
		//pr($url,1);
		$CI->load->library('PHPExcel');
		$objPHPExcel = PHPExcel_IOFactory::load('assets/301.xlsx');		

		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		//send the data in an array format
		$data['header'] = $header;
		$data['values'] = $arr_data;
		//echo "<table border='1'>";
		foreach ($data['values'] as $key => $val) {
				$old=$val['A'];
				$new=$val['B'];
				if($url==$old){
					$new = str_replace(array('\n\n\t'),'', trim($new));
					redirect($new);
					break;
				} 
				
		}
		//echo "</table>";
		//pr('Khong chuyen duoc',1);
	}
}