<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	*{font-size:14px!important;}
	.report_table tr td{height: 70px;padding: 5px;}
	.video{width: 130px!important;}
	.report_table{
		border-collapse:collapse;
	}
	.report_table th{
		background:#00B3F1;
		color:#FFFFFF;
		font-weight:bold;
		padding:5px 0px 3px 5px;
		border:1px solid black;
	}
	.report_table td{
		padding:5px; 
		border:1px solid black;
	}
	.report_table tr{
		background:#f4f4f4;
	}
	caption{background:#F7F7F7;font-weight:bold;height:30px;line-height:30px;font-size:24px;}
	.center{text-align:center;}
</style>
<title><?=$module->name?></title>
</head>
<body>
<table width="100%" class="report_table" >
  <caption >
	<strong><?=strtoupper(cutUnicode($module->name))?> - (<?=date('d/m/y H:i:s')?>)</strong>
  </caption>	
	<tr>
		<th width='20'>No.</th>
		<?php
			if(!empty($data_query))
			{
				foreach($data_query as $row){
		?>
		<th><?=$row->name?></th>
		<?php
				}
			}
		?>
	</tr>
	<?php
		if(!empty($result))
		{
			$count=1;
			foreach($result as $row){
	?>
	<tr class="odd gradeX" data-id="<?=$row->id?>">
		<td><?=$count?></td>
		<?php
			if(!empty($data_query))
			{
				foreach($data_query as $field){
		?>
		<td class="center" <?=($field->select == 'file' || $field->select == 'video') ? 'style="width:130px;"' : ''?> data-field="<?=$field->select?>">
			<?=field_data($row, $field)?>
		</td>
		<?php
				}
			}
		?>
	</tr>
	<?php
			$count++;
			}
		}
	?>
</table>
<?php
	header("Content-type: application/x-www-form-urlencoded\r\n" );
    header('Content-Disposition: attachment; filename="'.strtoupper(cutUnicode($module->name)).'_'.date('d.m.Y_H.i.s').'.xls"');
?>
</body>
</html>
