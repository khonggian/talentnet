<?php $file_token= $id .'_'. _token(); ?>
<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<div id="container_<?=$id?>">
			<a id="pickfiles_<?=$id?>" href="javascript:;" class="btn"><i class="icon-plus"></i> Select files</a>
			<span id="fileupload_preview_<?=$id?>" class="fileupload-preview">
				<a href="javascript:;" class="embed" data-type="file" data-embed="<?=(!empty($field_content)) ? base_url() . $data->directory.$field_content : ''?>" ><?=(!empty($field_content)) ? $field_content : ''?></a> <?=(!empty($field_content)) ? '(' . file_size_type($data->directory.$field_content) . ')' : ''?>
				<?php if(!empty($field_content)){ ?>
				<img src="<?=base_url()?>assets/admin/img/icon/detele_26x26.png" alt="" class="pointer btnDeleteFile" data-field="<?=$id?>" data-type="edit" />
				<?php } ?>
			</span>
			<span id="file_message_<?=$id?>"></span>
			<div id="filelist_<?=$id?>"></div>
			<input type="hidden" name="<?=$field.'_'.$id?>" class="file_url" value="<?=(!empty($field_content)) ? $field_content : ''?>" />
			<input type="hidden" name="<?=$field.'_'.$id?>_token" value="<?=$file_token?>" />
		</div>  
		<span class="help-inline"></span>
	</div>
</div>
<script type="text/javascript">
$(function() {
	Admin.setupFile('<?=$mid?>', '<?=$field?>', '<?=$id?>', '<?=$file_token?>');
});
</script>