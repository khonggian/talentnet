<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			Module <small>Edit</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="<?=base_url().LINK_ADMIN?>">Admin</a> 
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="<?=base_url().LINK_ADMIN_MODULE?>manage">Manage</a>
				<span class="icon-angle-right"></span>
			</li>
			<li><span>Module Edit</span></li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
   <div class="span12">
	  <!-- BEGIN SAMPLE FORM PORTLET-->   
	  <div class="portlet box light-grey">
		 <div class="portlet-title">
			<h4><i class="icon-edit"></i>Manage module</h4>
			<div class="tools">
			   <a href="javascript:;" class="collapse"></a>
			   <a href="#portlet-config" data-toggle="modal" class="config"></a>
			   <a href="javascript:;" class="reload"></a>
			   <a href="javascript:;" class="remove"></a>
			</div>
		 </div>
		 <div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="" class="form-horizontal _form" id="_frModule">
				<div class="alert alert-error hide">
					<button data-dismiss="alert" class="close"></button>
					<span></span>
				</div>
				
				<div class="control-group" id="status">
					<label class="control-label">Status</label>
					<div class="controls">
						<label class="checkbox">
						<input type="checkbox" class="span6 m-wrap" name="status" require="true" value="1" <?=(isset($result->status)) ? ($result->status == 1) ? 'checked': '' : 'checked';?> />
						</label>
					</div>
					<span class="help-inline"></span>
				</div>	
				<?php 
					$feature = !empty($result)?json_decode($result->feature):'';
				?>
				<div class="control-group" id="feature">
					<label class="control-label">Feature</label>
					<div class="controls">
						<div style="float:left;width: 125px;">
							<label class="control-label" style="text-align:left;">Add New</label>
							<label class="checkbox">
							<input type="checkbox" class="span6 m-wrap" name="add" require="true" value="1" <?= (!empty($feature)) ?($feature->add == 1) ? 'checked': '': 'checked';?> />
							</label>
						</div>
						<div style="float:left;width: 125px;">
							<label class="control-label" style="text-align:left;">Edit</label>
							<label class="checkbox">
							<input type="checkbox" class="span6 m-wrap" name="edit" require="true" value="1" <?= (!empty($feature)) ?($feature->edit == 1) ? 'checked': '': 'checked';?> />
							</label>
						</div>
						<div style="float:left;width: 125px;">
							<label class="control-label" style="text-align:left;">Delete</label>
							<label class="checkbox">
							<input type="checkbox" class="span6 m-wrap" name="delete" require="true" value="1" <?= (!empty($feature)) ?($feature->delete == 1) ? 'checked': '': 'checked';?> />
							</label>
						</div>
						<div style="float:left;width: 125px;">
							<label class="control-label" style="text-align:left;">Show Hide</label>
							<label class="checkbox">
							<input type="checkbox" class="span6 m-wrap" name="showhide" require="true" value="1" <?= (!empty($feature)) ?($feature->showhide == 1) ? 'checked': '': 'checked';?> />
							</label>
						</div>
						<div class="clearAll"></div>
					</div>
					<span class="help-inline"></span>
				</div>
				<div class="control-group" id="field_type">
				  <label class="control-label">Type<span class="required">*</span></label>
				  <div class="controls">
					 <select class="span6 m-wrap chosen" data-placeholder="Choose type..." tabindex="1" name="field_type" require="true">
						<option value="module" <?=(isset($result->type)) ? ($result->type == 'module') ? 'selected': '' : '';?>>Module</option>
						<option value="group" <?=(isset($result->type)) ? ($result->type == 'group') ? 'selected': '' : '';?>>Group</option>
					 </select>
					 <span for="name" class="help-inline"></span>
				  </div>
				</div>				
				
				<div class="control-group" id="name">
					<label class="control-label">Module name<span class="required">*</span></label>
					<div class="controls">
						<input type="text" class="span6 m-wrap popovers" name="name" require="true" value="<?=(!empty($result->name))?$result->name:''?>" />
						<span for="name" class="help-inline"></span>
					</div>
				</div>
			   
				<div class="control-group data_field data_field_module" id="folder">
				  <label class="control-label">Folder & Table<span class="required">*</span></label>
				  <div class="controls">
					 <select class="span6 m-wrap chosen" data-placeholder="Choose folder..." tabindex="1" name="folder" require="true">
						<option value="">Choose folder...</option>
						<?php
							if(!empty($directory)){
								foreach($directory as $k=>$v){
									if($k!='adminwz'){
									$selected= (!empty($result->folder)) ? $result->folder : '';
						?>
						<option value="<?=$k?>" <?=($selected==$k)?'selected':''?>><?=$k?></option>
						<?php
									}
								}
							}
						?>
					 </select>
					 <span for="name" class="help-inline"></span>
				  </div>
				</div>
			   
				<div class="control-group data_field data_field_module" id="custom">
					<label class="control-label">Custom</label>
					<div class="controls">
						<label class="checkbox">
							<input type="checkbox" value="1" name="custom" <?=(!empty($result)) ? ($result->custom == 1) ? 'checked' : '' : '';?>  />
						</label>
						<span class="help-inline"></span>
					</div>
				</div>				   

				<div class="form-actions">
					<input type="hidden" name="mid" value="<?=$mid?>" />
					<button type="button" class="btn blue _btnV" id="_btnModule">
						<i class="icon-ok"></i> Save
					</button>
					<a href="<?=LINK_ADMIN_MODULE_MANAGE.'?mid='.$mid;?>" title="" class="btn">Cancel</a>
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
	Admin.moduleEdit();
});
</script>