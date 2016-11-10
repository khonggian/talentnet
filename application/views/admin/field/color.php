<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<div class="input-append color <?=$field.'_'.$id?>-colorpicker-default" data-color="<?=(!empty($field_content)) ? $field_content : ''?>" data-color-format="rgba">
			<input type="text" name="<?=$field.'_'.$id?>" class="m-wrap" <?=(!empty($require)) ? 'require="true"' : ''?> value="<?=(!empty($field_content)) ? $field_content : ''?>" />
			<span class="add-on"><i style="background-color: <?=(!empty($field_content)) ? $field_content : ''?>;"></i></span>
			<span class="help-inline"></span>			
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	Admin.settupColorPicker('<?=$field?>', '<?=$id?>');
});
</script>