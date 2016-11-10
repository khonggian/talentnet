<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->   
	<div class="row-fluid">
	   <div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				<?=ucfirst($module->name)?> <small>Manage Page Edit Field</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>" title="Admin">Admin</a> 
					<span class="icon-angle-right"></span>
				</li>
				<li>
					<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE.'?mid='.$module->id?>" title="<?=ucfirst($module->name)?>">Module <?=ucfirst($module->name)?></a>
					<span class="icon-angle-right"></span>
				</li>
				<li>
					<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT.'?mid='.$module->id?>" title="<?=ucfirst($module->name)?> page edit">Manage Page Edit</a>
					<span class="icon-angle-right"></span>
				</li>
				<li>
					<span>Manage Page Edit Field</span>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
	   </div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
	   <div class="span12">
		  <!-- BEGIN SAMPLE FORM PORTLET-->   
		  <div class="portlet box blue">
			 <div class="portlet-title">
				<h4><i class="icon-edit"></i><?=ucfirst($module->name)?> page edit field</h4>
				<div class="tools">
				   <a href="javascript:;" class="collapse"></a>
				</div>
			 </div>
			 <div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" class="form-horizontal _form" id="_frModulePageEditField">
					<div class="alert alert-error hide">
						<button data-dismiss="alert" class="close"></button>
						<span></span>
					</div>			
					<div class="control-group" id="name">
						<label class="control-label">Field name</label>
						<div class="controls">
							<input type="text" class="span6 m-wrap" name="name" require="true" value="<?=(!empty($field->name))?$field->name:''?>" />
							<span class="help-inline"></span>
						</div>
					</div>	   
					
					<div class="control-group" id="field_type">
						<label class="control-label">Choose field type</label>
						<div class="controls">
							<select data-placeholder="Choose field type" class="chosen span6" tabindex="-1" name="field_type" style="width:430px;" require="true">
								<option value=""></option>
								<optgroup label="Field type">
									<?php
										global $op_field_type;
										foreach($op_field_type as $k=>$v){
										$selected= (!empty($field->type))?$field->type:'';		
									?>
										<option value="<?=$k?>" <?=($k==$selected) ? 'selected' : ''?>><?=$v?></option>
									<?php
										}
									?>
								</optgroup>
							</select>
						<span class="help-inline"></span>
					  </div>
					</div>	
	
					<!--SELECT FOREIGN FIELD-->
					<div class="hide data_field data_field_select_foreign_table data_field_select_foreign_table_children data_field_select_foreign_recursive">
						<div class="control-group" id="table_foreign">
							<label class="control-label">Table foreign</label>
							<div class="controls">
								<select data-placeholder="Select table foreign" class="chosen span6 m-wrap" tabindex="-1" id="" name="table_foreign" require="true">
								<optgroup label="Table foreign">
									<?php
										if(!empty($table_foreign))
										{
											$selected= (!empty($field_data->table_foreign)) ? $field_data->table_foreign : '';
											foreach($table_foreign as $row){
									?>
									<option value="<?=$row->table_name?>" <?=($row->table_name==$selected)?'selected':''?>>
										<?=$row->table_name?>
									</option>
									<?php
											}
										}
									?>
								</optgroup>
								</select>
							<span class="help-inline"></span>
						  </div>
						</div>

						<div class="control-group hide data_field data_field_select_foreign_table data_field_select_foreign_table_children data_field_select_foreign_table data_field_select_foreign_recursive">
							<label class="control-label">Foreign field </label>
							<div class="controls">
								<div class="wrap_table_foreign_field">
									<select data-placeholder="Select foreign field" class="chosen span6 m-wrap" tabindex="-1" name="table_foreign_field" id="_table_foreign_field" require="true">
									<optgroup label="<?=$field_data->table_foreign?>">	
										<?php
											if(!empty($field_data->table_foreign_field)){
										?>
										<option value="<?=$field_data->table_foreign_field?>" selected><?=$field_data->table_foreign_field?></option>
										<?php
											}
										?>									
									</optgroup>
									</select>
									<span class="help-inline"></span>
								</div>
							</div>
						</div>
						
						<div class="control-group hide data_field data_field_select_foreign_table_children" id="parent_field">
							<label class="control-label">Parent field</label>
							<div class="controls">
								<select data-placeholder="Select foreign field" class="span6 m-wrap" tabindex="-1" name="parent_field" id="parent_field" require="true">
								<option value=""></option>
								<optgroup label="Parent field">
									<?php
										if(!empty($select_foreign_table)){
											$selected= (!empty($field_data->parent_field)) ? $field_data->parent_field : '';
											foreach($select_foreign_table as $row){
									?>
									<option value="<?=$row->id?>" <?=($row->id==$selected)?'selected':''?>>
										<?=$row->name?>
									</option>
									<?php
											}
										}
									?>
								</optgroup>
								</select>
								<span class="help-inline"></span>
							</div>
						</div>
					</div>
					<!--END SELECT FOREIGN FIELD-->
					
					<!--data_field-->
					<div class="hide data_field control-group data_field_datetimepicker">
						<label class="control-label">					
							Date
						</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="date" <?=(!empty($field_data->date)) ? 'checked' : ''?> /> 
								Only Date
							</label>
						</div>						
					</div>						
					
					<?php			
						$in_array_data_field= array('checkbox', 'select', 'radio');						
					?>
					<div class="control-group hide data_field data_field_checkbox data_field_select data_field_radio">
						<label class="control-label">
							Data <span class="label_data_field">data_field</span> <br />
						</label>
						<div class="controls">
							<?php
								$field_data_value= (!empty($field_data->value)) ? $field_data->value : '';
							?>
							<textarea name="data_field" rows="3" class="span6 m-wrap" id="data_field"><?=(!is_object($field_data)) ? $field_data : $field_data_value?></textarea>
							<span class="help-inline"></span>
						</div>						
					</div>
					
					<?php if(!empty($setting->language)){ ?>
					<div class="hide data_field control-group data_field_select data_field_select_foreign_table data_field_select_foreign_table_children data_field_select_foreign_recursive">
						<label class="control-label">					
							Multi Language
						</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="language" <?=(!empty($field_data->language)) ? 'checked' : ''?> /> 
								Multi Language Field
							</label>
						</div>						
					</div>							
					<?php } ?>
					<div class="control-group hide data_field data_field_select data_field_select_foreign_table data_field_select_foreign_table_children">
						<label class="control-label">
							<?php			
								$in_array_data_field= array('checkbox', 'select', 'radio');
								$multiple= (!empty($field_data->multiple)) ? $field_data->multiple : '';
							?>						
							Multiple
						</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="multiple" <?=(!empty($multiple)) ? 'checked' : ''?> /> 
								Multiple Field
							</label>
						</div>						
					</div>					
					<!--END data_field-->
					
					<!--FILE-->
					<?php			
						$in_array_data_field= array('file', 'file_multiupload');
						$directory= (!empty($field_data->directory)) ? $field_data->directory : '';
						$extension= (!empty($field_data->extension)) ? $field_data->extension : '';
					?>
					<div class="hide data_field data_field_file data_field_file_multiupload">
						<div class="control-group">
						  <label class="control-label">
							File directory
						  </label>
						  <div class="controls">
							<input type="text" require="true" name="file_directory" class="span6 m-wrap" value="<?=$directory?>">
							<span class="help-inline"></span>
						  </div>
						</div>		

						<div class="control-group" id="file_extensions">
						  <label class="control-label">
							Allowed file extensions
						  </label>
						  <div class="controls">
							<input type="text" require="true" name="file_extensions" class="span6 m-wrap" value="<?=$extension?>">
							<span class="help-inline"></span>
						  </div>
						</div>							
					</div>
					<!--END FILE-->
						
					<!--SLUG-->
					<?php			
						$in_array_data_field= array('slug');
					?>
					<div class="hide data_field data_field_slug">
						<div class="control-group" id="field_to_slug">
							<label class="control-label">Field to slug</label>
							<div class="controls" id="field_to_slug">
								<select data-placeholder="Select foreign field" class="chosen span6 m-wrap" tabindex="-1" name="field_to_slug" require="true">
									<?php
										if(!empty($list_field)){
											$selected= (!empty($field_data->field_to_slug)) ? $field_data->field_to_slug : '';
											foreach($list_field as $f){
									?>
									<option value="<?=$f->id?>" <?=($f->id==$selected)?'selected':''?>><?=$f->field?></option>
									<?php
											}
										}
									?>									
								</select>							
								<span class="help-inline"></span>
							</div>
						</div>							
					</div>					
					<!--END SLUG-->				
				
					<div class="control-group" id="require_field">
						<label class="control-label">Require</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="require" <?=(!empty($field)) ? ($field->require) ? 'checked' : '' : ''?> /> Required field
							</label>
						</div>
					</div>		

					<div class="hide data_field data_field_text control-group" id="unique_field">
						<label class="control-label">Unique</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="unique" <?=(!empty($field_data->unique)) ? 'checked' : '';?> /> Unique field 
							</label>
						</div>
					</div>							
					
					<div class="control-group" id="primary_field">
						<label class="control-label">Field</label>
						<div class="controls">
							<select data-placeholder="Select primary field" class="chosen span6" tabindex="-1" id="" name="primary_field" require="true">
							<option value=""></option>
							<optgroup label="<?=$module_table?>">
								<?php
									if(!empty($module_fields))
									{
										$selected= (!empty($field)) ? $field->field : '';
										foreach($module_fields as $row){
								?>
								<option value="<?=$row->name?>" <?=($row->name==$selected)?'selected':''?>><?=$row->name?></option>
								<?php
										}
									}
								?>
							</optgroup>
							</select>
							<span class="help-inline"></span>
						</div>
					</div>						
												
					<div class="form-actions">
						<input type="hidden" name="mid" value="<?=$mid?>" />
						<input type="hidden" name="fid" value="<?=$this->input->get('fid')?>" />
						<button type="button" class="btn blue" id="_btnModulePageEditField"><i class="icon-ok"></i> Save</button>
						<a href="<?=LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT.'?mid='.$mid;?>" title="" class="btn">Cancel</a>
					</div>
				</form>
				<!-- END FORM-->           
			 </div>
		  </div>
		  <!-- END SAMPLE FORM PORTLET-->
	   </div>
	</div>

<!-- END PAGE CONTENT-->         
</div>
<!-- END PAGE CONTAINER-->
<script>
$(function() { 
	App.init();
	Admin.managePageEditField();
});
</script>