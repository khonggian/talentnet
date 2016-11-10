<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
	<?php
		$checked= (isset($field_content)) ? $field_content : '';
		$data=  preg_split('/(\r?\n)+/', $data->value);
		foreach($data as $radio){
			$arr_radio= explode('|', $radio);
			if(isset($arr_radio[0]) && isset($arr_radio[1])){
	?>
	<label class="radio">
		<input type="radio" value="<?=$arr_radio[0]?>" name="<?=$field.'_'.$id?>" <?=(!empty($require)) ? 'require="true"' : ''?> <?=($arr_radio[0]== $checked) ? 'checked' : ''?> /> <?=$arr_radio[1]?>
	</label>
	<?php
			}
		}
	?>
	<span class="help-inline"></span>
	</div>
</div>