<div class="control-group <?=($data->multiple) ? 'select-multiple' : ''?>" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<select id="<?=$field.'_'.$id?>" class="span6 chosen" data-placeholder="Choose a <?=$name?>" tabindex="1" name="<?=$field.'_'.$id?><?=($data->multiple) ? '[]' : ''?>" <?=(!empty($require)) ? 'require="true"' : ''?> <?=($data->multiple) ? 'multiple="multiple"' : ''?>>
			<option value=""></option>
			<?php
				$selected= (!empty($field_content)) ? json_decode($field_content) : '';
				if(!is_array($selected)) $selected= array($selected);
				$field_select= admin_field($data->table_foreign_field, $data);
				foreach($select as $s){
			?>		
			<option value="<?=$s->id?>" <?=(in_array($s->id, $selected)) ? 'selected' : ''?>><?=$s->$field_select?></option>
			<?php
				}
			?>
		</select>
		<span class="help-inline"></span>
		<div class="clearAll"></div>
	</div>
</div>