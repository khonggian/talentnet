<?php
	$field_content= (!empty($field_content)) ? json_decode($field_content) : '';
?>
<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<input class="geocomplete span6 m-wrap" type="text" name="<?=$field.'_'.$id?>" placeholder="Type in an address" <?=(!empty($require)) ? 'require="true"' : ''?> value="<?=(!empty($field_content->address)) ? $field_content->address : ''?>" />
		<span class="help-inline"></span>
	</div>
	<input name="<?=$field.'_'.$id?>_lat" type="hidden" value="<?=(!empty($field_content->lat)) ? $field_content->lat : ''?>" />
	<input name="<?=$field.'_'.$id?>_lng" type="hidden" value="<?=(!empty($field_content->lng)) ? $field_content->lng : ''?>" />
	<input name="<?=$field.'_'.$id?>_formatted_address" type="hidden" value="<?=(!empty($field_content->address)) ? $field_content->address : ''?>" />	
	<div class="map_canvas" id="map_canvas_<?=$id?>"></div>
</div>
<script type="text/javascript">
function geoinitialize(){
	Admin.setupMaps('<?=$field?>', <?=$id?>, '<?=(!empty($field_content)) ? $field_content->address : ''?>');
}
</script>