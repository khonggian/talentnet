<div class="control-group <?=($data->multiple) ? 'select-multiple' : ''?>" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<select class="span6 chosen" data-placeholder="Choose a <?=$name?>" tabindex="1" name="<?=$field.'_'.$id?><?=($data->multiple) ? '[]' : ''?>" <?=(!empty($require)) ? 'require="true"' : ''?> <?=($data->multiple) ? 'multiple="multiple"' : ''?>>
			<option value=""></option>
			<?php
				
				$selected= (isset($field_content)) ? (is_json($field_content)) ? json_decode($field_content) :  $field_content : '';
				if(!is_array($selected)) $selected= array($selected);
				$value=  preg_split('/(\r?\n)+/', $data->value);
				foreach($value as $select){
				$arr_select= explode('|', $select);		
					if(isset($arr_select[0]) && isset($arr_select[1])){
			?>		
			<option value="<?=$arr_select[0]?>" <?=(in_array($arr_select[0], $selected)) ? 'selected' : '' ?>><?=$arr_select[1]?></option>
			<?php
					}
				}
			?>
		</select>
		<span class="help-inline"></span>
		<div class="clearAll"></div>
  </div>
</div>