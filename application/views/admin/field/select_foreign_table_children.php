<div class="control-group <?=($data->multiple) ? 'select-multiple' : ''?>" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<select id="<?=$field.'_'.$id?>" class="span6 chosen" data-placeholder="Choose a <?=$name?>" tabindex="1" name="<?=$field.'_'.$id?><?=($data->multiple) ? '[]' : ''?>" <?=(!empty($require)) ? 'require="true"' : ''?> <?=($data->multiple) ? 'multiple="multiple"' : ''?>>
			<option value=""></option>
		</select>
		<span class="help-inline"></span>
		<div class="clearAll"></div>
	</div>
</div>
<script type="text/javascript">
$(function() {
	Admin.setupSelectChildren('#<?=$parent_field->field.'_'.$parent_field->id?>', '#<?=$field.'_'.$id?>', <?=$id?>, '<?=$field_content?>');
});
</script>