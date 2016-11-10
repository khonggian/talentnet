 <!-- BEGIN PAGE CONTAINER-->
 <div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->   
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				User <small>Edit</small>
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
					<span>User Edit</span>
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
				<h4><i class="icon-edit"></i>User Edit</h4>
				<div class="tools">
				   <a href="javascript:;" class="collapse"></a>
				</div>
			 </div>
			 <div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="" class="form-horizontal _form" id="_frUserEdit">
					<div class="alert alert-error hide">
					  <button data-dismiss="alert" class="close"></button>
					  <span></span>
					</div>

					<div class="control-group" id="rid">
						<label class="control-label">Role <span class="required">*</span></label>
						<div class="controls">
							<select class="span6 chosen" data-placeholder="Choose a Role" tabindex="1" name="rid" require="true" >
								<option value=""></option>
								<?php
									if(!empty($role)){
										$selected= (!empty($result)) ? $result->rid : '';
										foreach($role as $r){
								?>		
								<option value="<?=$r->id?>" <?=($r->id == $selected) ? 'selected' : '' ?>><?=$r->name?></option>
								<?php
										}
									}
								?>
							</select>
							&nbsp;<span class="help-inline"></span>
					  </div>
					</div>					

					<div class="control-group" id="fullname">
						<label class="control-label">Fullname <span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="fullname" value="<?=(!empty($result->fullname))?$result->fullname:''?>" require="true" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>						
					
					<div class="control-group" id="username">
						<label class="control-label">Username <span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="username" require="true" value="<?=(!empty($result->username))?$result->username:''?>" autocomplete="off" />
							<span for="name" class="help-inline"></span>
					  </div>
					</div>

					<div class="control-group" id="password">
						<label class="control-label">Password <span class="required">*</span></label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>
					
					<div class="control-group" id="confirm_password">
						<label class="control-label">Confirm Password <span class="required">*</span></label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="confirm_password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>					

					<div class="control-group" id="email">
						<label class="control-label">Email <span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="email" value="<?=(!empty($result->email))?$result->email:''?>" require="true" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>		

					<div class="form-actions">
						<input type="hidden" name="id" value="<?=$id?>" />
						<button type="button" class="btn blue" id="_btnUser">
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
	Admin.userEdit();
});
</script>