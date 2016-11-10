<div class="control-group" id="<?=$field.'_'.$id?>">
  <label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
  <div class="controls">
	 <textarea class="span6 m-wrap" rows="3" name="<?=$field.'_'.$id?>" <?=(!empty($require)) ? 'require="true"' : ''?>><?=(!empty($field_content)) ? $field_content : ''?></textarea>
	 <span class="help-inline"></span>
  </div>
</div>