<?php $file_token= $id .'_'. _token(); ?>
<div class="control-group" id="<?=$field.'_'.$id?>">
	<label class="control-label"><?=$name?> <?=(!empty($require)) ? '<span class="required">*</span>' : ''?></label>
	<div class="controls">
		<div>
		<div id="container_<?=$id?>">
			<a id="pickfiles_<?=$id?>" href="javascript:;" class="btn blue fleft"><i class="icon-plus"></i> Select files</a>
			<a class="_btn collapse_filelist fleft"></a>
			<div class="clearAll"></div>
			<span id="file_message_<?=$id?>"></span>
			<div id="filelist_<?=$id?>"></div>
			<input type="hidden" name="<?=$field.'_'.$id?>" value="<?=(!empty($field_content)) ? count($field_content) : ''?>" />
			<input type="hidden" name="<?=$field.'_'.$id?>_token" value="<?=$file_token?>" />
			<div class="clearAll"></div>
		</div>  
		<span class="help-inline"></span>
		</div>
	</div>
	<div class="wrapper_filelist">
		<table id="table_filelist_<?=$id?>" class="table_filelist table table-striped table-bordered table-advance table-hover">
			<thead>
				<tr>
					<th colspan="2" class="th-1">FILE INFORMATION <img src="<?=base_url()?>assets/admin/img/icon/list_32x32.png" alt="" class="_btn btn-hidden-text" data-collapse="show" /></th>
					<th class="center">OPERATIONS</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(!empty($field_content))
					{
						foreach($field_content as $row){
				?>
				<tr data-id="<?=$row->id?>">
					<td class="td-1">
						<div class="image-preview">
							<img src="<?=base_url()?>assets/admin/img/icon/move_24x24.png" class="move sortable" alt="" />
							<?php
								if(is_image($row->file)){
							?>
							<img src="<?=img($data->directory.$row->file, 65, 65)?>" alt="" />
							<?php
								}
							?>
							<div class="clearAll"></div>
						</div>
					</td>
					<td class="va-t td-2">
						<div class="item-info">
							<span><img src="<?=base_url()?>assets/admin/img/icon/file/image.png" alt="" /></span>
							<span>
								<a href="<?=$data->directory.$row->file?>" class="fancybox" rel="file"><?=$row->file?></a>
							</span>
							<span> (<?=file_size_type($data->directory.$row->file)?>)</span>
						</div>
						<?php
							if(is_image($row->file)){
							$row_data= json_decode($row->data);
						?>						
						<div class="item-text">
							<div class="div_title_text">
								<div><strong>Title text</strong></div>
								<div><input type="text" name="<?=$field.'_'.$id.'_'.$row->id?>_file_title" class="span6 m-wrap"  value="<?=(!empty($row_data->title)) ? $row_data->title : ''?>" /></div>
							</div>
							<div class="div_caption_text">
								<div><strong>Caption text</strong></div>
								<div>
									<textarea class="span6 m-wrap" rows="3" name="<?=$field.'_'.$id.'_'.$row->id?>_file_caption"><?=(!empty($row_data->caption)) ? $row_data->caption : ''?></textarea>
								</div>
							</div>	
							<div class="div_youtube">
								<div><strong>Youtube</strong></div>
								<div><input type="text" name="<?=$field.'_'.$id.'_'.$row->id?>_file_youtube" class="span6 m-wrap"  value="<?=(!empty($row_data->youtube)) ? $row_data->youtube : ''?>" /></div>
							</div>								
							<div class="clearAll"></div>					
						</div>
						<?php
							}
						?>
					</td>
					<td class="td-3 center">
						<a class="mini btn red file-delete _btn" ><i class="icon-trash"></i> Delete Item</a>
						<input type="hidden" name="<?=$field.'_'.$id.'_'.$row->id?>_file_order" class="order" />
					</td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>  
</div>
<script type="text/javascript">
$(function() {
	Admin.setupFileMulti(<?=$mid?>, <?=$nid?>, '<?=$field?>', <?=$id?>, '<?=$file_token?>', '#table_filelist_<?=$id?>');
	Admin.setupSortFile('#table_filelist_<?=$id?> tbody');
});
</script>