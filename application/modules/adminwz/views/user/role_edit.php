<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
	<div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			User <small>Role Edit</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Admin</a> 
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="<?=base_url().LINK_ADMIN_USER?>manage">User</a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="<?=base_url().LINK_ADMIN_USER?>role">Role</a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<span>Role Edit</span>
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
	  <div class="portlet box grey">
		 <div class="portlet-title">
			<h4><i class="icon-edit"></i>User Role Edit</h4>
			<div class="tools">
			   <a href="javascript:;" class="collapse"></a>
			   <a href="#portlet-config" data-toggle="modal" class="config"></a>
			   <a href="javascript:;" class="reload"></a>
			   <a href="javascript:;" class="remove"></a>
			</div>
		 </div>
		 <div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="" class="form-horizontal _form" id="_frUserRoleEdit">
				<div class="alert alert-error hide">
				  <button data-dismiss="alert" class="close"></button>
				  <span></span>
				</div>
				<div class="control-group" id="name">
				  <label class="control-label">Role name <span class="required">*</span></label>
				  <div class="controls">
					 <input type="text" class="span6 m-wrap popovers" name="name" require="true" value="<?=(!empty($result->name))?$result->name:''?>" />
					 <span for="name" class="help-inline"></span>
				  </div>
				</div>
				<div class="wrap-tree">
					<?=$module_role?>
				</div>
				<div class="form-actions">
					<input type="hidden" name="id" value="<?=$id?>" />
					<button type="button" class="btn blue" id="_btnUserRole">
						<i class="icon-ok"></i>
						Save
					</button>
					<button type="button" class="btn">Cancel</button>
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
	Admin.userRoleEdit();
});
</script>