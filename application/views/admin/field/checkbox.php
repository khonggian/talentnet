<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<?php
			$field_content=  (isset($field_content)) ? json_decode($field_content) : '';
			$field_content= (!is_array($field_content)) ? array($field_content) : $field_content;
			$data=  preg_split('/(\r?\n)+/', $data->value);
			foreach($data as $checkbox){
			$arr_checkbox= explode('|', $checkbox);
			$checked= '';
			if(isset($arr_checkbox[0]) && isset($arr_checkbox[1])) {
				if(isset($field_content)) $checked= (in_array($arr_checkbox[0], $field_content)) ? 'checked' : '';
		?>
		<label class="checkbox">
			<input type="checkbox" value="<?=$arr_checkbox[0]?>" name="<?=$field.'_'.$id?>[]" <?=$checked?> <?=(!empty($require)) ? 'require="true"' : ''?>  /> <?=$arr_checkbox[1]?>
		</label>
		<?php
				}
			}
		?>
		<span class="help-inline"></span>
	</div>
</div>