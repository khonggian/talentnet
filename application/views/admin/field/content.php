<div class="control-group" id="<?=$field.'_'.$id?>">
  <label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
  <div class="controls">
		<textarea class="span6 m-wrap" rows="3" id="_<?=$field?>" name="<?=$field.'_'.$id?>" <?=(!empty($require)) ? 'require="true"': '' ?> ><?=(!empty($field_content)) ? output_editor($field_content) : ''?></textarea>
		<script type="text/javascript">
			$(function() {
				$('#_<?=$field?>').editor();
			});
		</script>
		<span class="help-inline"></span>
  </div>
</div>