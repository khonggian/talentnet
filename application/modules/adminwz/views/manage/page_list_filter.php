<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<?=ucfirst($module->name)?> <small>Manage Page List Filter</small>
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
				<span>Manage Page List Filter</span>
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
			<h4><i class="icon-edit"></i><?=ucfirst($module->name)?> page list filter</h4>
			<div class="tools">
			   <a href="javascript:;" class="collapse"></a>
			</div>
		 </div>
		 <div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="" class="form-horizontal _form" id="_frModulePageListFilter">
				<div class="alert alert-error hide">
					<button data-dismiss="alert" class="close"></button>
					<span></span>
				</div>			
				<div class="control-group" id="name">
					<label class="control-label">Filter name</label>
					<div class="controls">
						<input type="text" class="span6 m-wrap" name="name" require="true" value="<?=(!empty($filter->name))?$filter->name:''?>" />
						<span class="help-inline"></span>
					</div>
				</div>
				
				<div class="control-group" id="where">
					<label class="control-label">Where</label>
					<div class="controls">
					 <input type="text" class="span6 m-wrap" name="where" require="true" value="<?=(!empty($filter->where))?$filter->where:''?>" />
					 <span class="help-inline"></span>
					</div>
				</div>				
				
				<div class="form-actions">
					<input type="hidden" name="mid" value="<?=$mid?>" />
					<input type="hidden" name="filter" value="<?=$this->input->get('filter')?>" />
					<button type="button" class="btn blue" id="_btnModulePageListFilter"><i class="icon-ok"></i> Save</button>
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
	Admin.managePageListFilter();
});
</script>