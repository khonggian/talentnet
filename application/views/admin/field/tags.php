<div class="control-group textarea-tags" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<textarea class="span6 m-wrap" rows="3" name="<?=$field.'_'.$id?>" style="width:48.7179%;" <?=(!empty($require)) ? 'require="true"' : ''?>></textarea>
		<span class="help-inline"></span>
		<div class="clearAll"></div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	<?php
		$tags= '';
		if(!empty($field_content)){
			foreach($field_content as $row){
				$tags.= $row->name.',';
			}
			$tags= substr($tags, 0, -1);
		}
	?>
	Admin.setupTags('<?=$field?>', <?=$id?>, '<?=$tags?>');
});
</script>