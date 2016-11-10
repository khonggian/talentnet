<?php
	$html= '<script type="text/javascript">alert("Hello")</script>';
	$tmp= filter_input_xss($html);
	echo $tmp;
?>