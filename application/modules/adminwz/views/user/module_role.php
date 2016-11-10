<?php
	$permission= (!empty($module_permission_role[$id])) ? json_decode($module_permission_role[$id]->permission) : '';
?>
<div class="control-group">
	<div class="controls" style="margin-left:5px;">
		<label class="checkbox">
			<input type="checkbox" name="<?=$id?>[]" value="manage" <?=(!empty($permission->manage)) ? ($permission->manage == 1) ? 'checked' : '' : '' ?> /> Manage
		</label>							
		<label class="checkbox">
			<input type="checkbox" name="<?=$id?>[]" value="read" <?=(!empty($permission->read)) ? ($permission->read == 1) ? 'checked' : '' : '' ?> /> Read
		</label>
		<label class="checkbox">
			<input type="checkbox" name="<?=$id?>[]" value="edit" <?=(!empty($permission->edit)) ? ($permission->edit == 1) ? 'checked' : '' : '' ?> /> Edit
		</label>
		<label class="checkbox">
			<input type="checkbox" name="<?=$id?>[]" value="delete" <?=(!empty($permission->delete)) ? ($permission->delete == 1) ? 'checked' : '' : '' ?> /> Delete
		</label>								
	</div>
</div>