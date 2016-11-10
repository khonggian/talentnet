<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<input type="text" name="<?=$field.'_'.$id?>" class="span6 m-wrap" <?=(!empty($require)) ? 'require="true"' : ''?> value="<?=(!empty($field_content)) ? $field_content : ''?>" />
		<span class="help-inline"></span>
	</div>
</div>