<select id="<?=$field.'_'.$id?>" class="span6 chosen" data-placeholder="Choose a <?=$name?>" tabindex="1" name="<?=$field.'_'.$id?><?=($data->multiple) ? '[]' : ''?>" <?=(!empty($require)) ? 'require="true"' : ''?> <?=($data->multiple) ? 'multiple="multiple"' : ''?>>
<?php
	if(!empty($result)){
		foreach($result as $row){
		$selected= (!empty($field_content)) ? json_decode($field_content) : '';
		if(!is_array($selected)) $selected= array($selected);
?>
	<option value="<?=$row->id?>" <?=(in_array($row->id, $selected)) ? 'selected' : ''?> ><?=$row->$table_foreign_field?></option>
<?php
		}
	}
?>
</select>
<span class="help-inline"></span>