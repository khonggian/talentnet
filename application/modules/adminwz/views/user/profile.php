 <!-- BEGIN PAGE CONTAINER-->
 <div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->   
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				User <small>Profile</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Admin</a> 
					<span class="icon-angle-right"></span>
				</li>
				<li>
					<a href="<?=base_url().LINK_ADMIN_USER?>">User</a>
					<span class="icon-angle-right"></span>
				</li>
				<li>
					<span>Profile</span>
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
				<h4><i class="icon-edit"></i>User Profile</h4>
				<div class="tools">
				   <a href="javascript:;" class="collapse"></a>
				</div>
			 </div>
			 <div class="portlet-body form">
				<form action="" class="form-horizontal _form" id="_frUserProfile" enctype="multipart/form-data">
				<!-- BEGIN FORM-->
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
							<input type="text" class="span6 m-wrap popovers" name="username" placeholder="<?=(!empty($result->username))?$result->username:''?>" autocomplete="off" disabled="" />
							<span for="name" class="help-inline"></span>
					  </div>
					</div>

					<div class="control-group" id="old_password">
						<label class="control-label">Old Password</label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="old_password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>					
					
					<div class="control-group" id="password">
						<label class="control-label">New Password</label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>
					
					<div class="control-group" id="confirm_password">
						<label class="control-label">Confirm Password</label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="confirm_password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>					

					<!-- <div class="control-group" id="email">
						<label class="control-label">Email <span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="email" value="<?=(!empty($result->email))?$result->email:''?>" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div> -->
				</form>
				
				<form id="upload" class="form-horizontal _form" method="post" action="<?=base_url()?>adminwz" enctype="multipart/form-data">	
					<div class="control-group">
						<label class="control-label">Avatar</label>
						<div class="controls">
							<div id="popup-avatar">
								<div id="pan" class="drop">				
									<!--<a>Browse</a>-->
									<input type="file" name="upl" multiple />					
									<img id="avatar-large" src="">
								</div>
								<div id="drop"></div>
								<div class="clearAll"></div>
								<div id="slider" data-zoom="0"></div>	
								<div style="text-align:center;padding:10px 0 0 0px;">
									<input type="button" id="btn-resize" value="Done" class="btn" />
								</div>
								<input type="hidden" name="actions" value="post" />
								<input type="hidden" name="type" value="postUploadAvatar" />
								<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
								<div id="output" class="hide">
									<h2>Output</h2>
									<table>
									  <tr>
										<td>x1: <input type="text" name="x1" value="0" id="x1"></td><td>x2: <input type="text" name="x2" value="0" id="x2"></td>
									  </tr>
									  <tr>
										<td>y1: <input type="text" name="y1" value="0" id="y1"></td><td>y2: <input type="text" name="y2" value="0" id="y2"></td>
									  </tr>
									</table>
								</div>										
							</div>						
						</div>			
					</div>					
				</form>
				<div class="form-actions">
					<button type="button" class="btn blue" id="_btnProfile">
						<i class="icon-ok"></i>
						Save
					</button>
					<button type="button" class="btn">Cancel</button>
				</div>					
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
	Admin.userProfile();
	Avatar.avatar_init();	
	
	Avatar.avatar_load('<?=$this->session->userdata('admin_avatar')?>');
	
});
</script>