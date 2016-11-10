<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<?=ucfirst($module->name)?> <small>Manage Page List Field</small>
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
				<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_LIST.'?mid='.$module->id?>" title="<?=ucfirst($module->name)?> page list">Manage Page List</a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<span>Manage Page List Field</span>
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
	  <div class="portlet box purple">
		 <div class="portlet-title">
			<h4><i class="icon-edit"></i><?=ucfirst($module->name)?> page list field</h4>
			<div class="tools">
			   <a href="javascript:;" class="collapse"></a>
			</div>
		 </div>
		 <div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="" class="form-horizontal _form" id="_frModulePageListField">
				<div class="alert alert-error hide">
				  <button data-dismiss="alert" class="close"></button>
				  <span></span>
				</div>			
				
				<div class="control-group" id="status">
					<label class="control-label">Status</label>
					<div class="controls">
						<label class="checkbox">
						<input type="checkbox" class="span6 m-wrap" name="status" require="true" value="1" <?=(isset($field->status)) ? ($field->status == 1) ? 'checked': '' : 'checked';?> />
						</label>
					</div>
					<span class="help-inline"></span>
				</div>	 
				
				<div class="control-group" id="name">
				  <label class="control-label">Field name</label>
				  <div class="controls">
					 <input type="text" class="span6 m-wrap" name="name" require="true" value="<?=(!empty($field->name))?$field->name:''?>" />
					 <span class="help-inline"></span>
				  </div>
				</div>
				
				<?php if(!empty($setting->language)){ ?>
				<div class="control-group">
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
			   
				<div class="control-group" id="table_type">
				  <label class="control-label">Choose type table</label>
				  <div class="controls">
					 <label class="radio">
					 <input type="radio" name="table_type" value="primary" <?=(!empty($field_data))? ($field_data->table_type=='primary')?'checked':'checked':'checked'?> />
						Table primary
					 </label>
					 <label class="radio">
					 <input type="radio" name="table_type" value="foreign" <?=(!empty($field_data))? ($field_data->table_type=='foreign')?'checked':'':''?> />
						Table foreign
					 </label>  
				  </div>
				</div>
				
				<div class="table_primary wrap_select_table_type <?=(!empty($field_data))? ($field_data->table_type=='primary')?'':'hide':''?>">
					<div class="control-group" id="primary_field">
					  <label class="control-label">Primary field</label>
					  <div class="controls">
						 <select data-placeholder="Select primary field" class="chosen span6" tabindex="-1" id="" style="width:430px;" name="primary_field" require="true">
							<option value=""></option>
							<optgroup label="<?=$module_table?>">
								<?php
									if(!empty($module_fields))
									{
										$selected= (!empty($field_data))?$field_data->primary_field:'';							
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
				</div>
				
				<div class="table_foreign wrap_select_table_type <?=(!empty($field_data))? ($field_data->table_type=='foreign')?'':'hide':'hide'?>">
					<div class="control-group" id="foreign_field">
					  <label class="control-label">Foreign field </label>
					  <div class="controls">
						<select data-placeholder="Select foreign field" class="chosen span6 m-wrap" tabindex="-1" name="foreign_field" id="_foreign_field" require="true">
						<option value=""></option>
						<optgroup label="<?=$module_table?>">
							<?php
								if(!empty($module_fields))
								{
									foreach($module_fields as $row){
										if($row->comment){
											$selected= '';
											if(!empty($field_data)){
												$selected= explode('|', $field_data->foreign_field);
												$selected= $selected[0];
											}
							?>
							<option value="<?=$row->name?>|<?=PREFIX.$row->comment?>" <?=($row->name==$selected)?'selected':''?>><?=$row->name?></option>
							<?php
										}
									}
								}
							?>
						</optgroup>
						</select>
						<span class="help-inline"></span>
					  </div>
					</div>
					
					<div class="control-group" id="table_foreign_field">
					  <label class="control-label">Table foreign field</label>
					  <div class="controls">
						<span class="wrap_table_foreign_field">
							<select data-placeholder="Select foreign field" class="chosen span6 m-wrap" tabindex="-1" name="table_foreign_field" require="true">
								<option value=""></option>
								<?php
									if(!empty($field_data)){
								?>
								<option value="<?=$field_data->table_foreign_field?>" selected><?=$field_data->table_foreign_field?></option>
								<?php
									}
								?>
							</select>
						</span>
						<span class="help-inline"></span>
					  </div>
					</div>					
					
				</div>
				<div class="form-actions">
					<input type="hidden" name="mid" value="<?=$mid?>" />
					<input type="hidden" name="fid" value="<?=$this->input->get('fid')?>" />
					<button type="button" class="btn blue" id="_btnModulePageListField"><i class="icon-ok"></i> Save</button>
					<a href="<?=LINK_ADMIN_MODULE_MANAGE_PAGE_LIST.'?mid='.$mid;?>" title="" class="btn">Cancel</a>
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
$(function(){  
	App.init(); 
	Admin.managePageListField();
});
</script>