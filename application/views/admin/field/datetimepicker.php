<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<div id="<?=$field.'_'.$id?>_datetimepicker" class="input-append date datetime-picker">
			<?php
				if(!empty($field_content)){
					$field_content= (!empty($data->date)) ? date('d/m/Y', strtotime($field_content)) : date('d/m/Y H:i:s', strtotime($field_content));
				}else{
					$field_content= '';
				}
			?>
			<input data-format="<?=(!empty($data->date)) ? 'dd/MM/yyyy' : 'dd/MM/yyyy hh:mm:ss';?>" type="text" class="m-wrap m-ctrl-medium" name="<?=$field.'_'.$id?>" value="<?=(!empty($field_content)) ? $field_content : '';?>" <?=(!empty($require)) ? 'require="true"': ''?>></input>
			<span class="add-on">
				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
			</span>
		</div>		
		<span class="help-inline"></span>						
	</div>
</div>
<script type="text/javascript">
$(function() {
	Admin.setupDatetimePicker('<?=$field?>', <?=$id?>);
});
</script>