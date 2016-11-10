<?php ob_start('ob_gzhandler'); ?>
<!DOCTYPE HTML>
<html>
<!-- BEGIN HEAD -->
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<base href="<?=base_url()?>">
	<link href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/metro.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/style_responsive.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/style_<?=(!empty($_COOKIE['style_color']) ? $_COOKIE['style_color'] : 'default')?>.css" rel="stylesheet" id="style_color" />
	<link href="<?=base_url()?>assets/admin/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/uniform/css/uniform.default.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/jquery-ui/jquery-ui-1.10.3.custom.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/fancybox/source/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/avatar/css/styles.css" />
	
	<link rel="shortcut icon" href="<?=base_url()?>admin/favicon.ico" />
	<script src="<?=base_url()?>assets/admin/js/jquery-1.8.3.min.js"></script>	
	<script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<?=modules::run('adminwz/header');?>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<?=modules::run('adminwz/menu');?>
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide fade" tabindex="-1" role="dialog">
				<div class="modal-header">
					<button data-dismiss="modal" class="close close-modal" type="button"></button>
					<h3></h3>
				</div>
				<div class="modal-body">
					<p></p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<?=modules::run('adminwz/theme');?>
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
					<div class="alert alert-error hide">
					  <button data-dismiss="alert" class="close"></button>
					  <span></span>
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
							<input type="text" class="span6 m-wrap popovers" name="username" placeholder="<?=(!empty($result->username))?$result->username:''?>" autocomplete="off" disabled="" />
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
					
					<div class="control-group" id="re_password">
						<label class="control-label">Re Password <span class="required">*</span></label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="re_password" autocomplete="off" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>					

					<div class="control-group" id="email">
						<label class="control-label">Email <span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="email" placeholder="<?=(!empty($result->email))?$result->email:''?>" autocomplete="off" disabled="" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>
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
								<input type="hidden" name="type" value="upload_avatar" />
								<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
								<div id="output" style="display:none;">
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
	<div class="wrap-avatar" style="margin:35px 0 0 0;">

		<div>
			<svg width="28" height="28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
				<defs>
					<clipPath id="r-9fd3b85b09574f07b104583306412dcc">
						<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
					</clipPath>
					<clipPath id="r-c68bd35044794eb797f6e30f55f0550f">
						<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
					</clipPath>
					<clipPath id="r-1f438ec6161b4f6580b78135d6dc9a63">
						<rect x="0" y="0" width="28" height="28" r="65" rx="65" ry="65"/>
					</clipPath>
				</defs>
				<image id="avatar-small" xlink:href="" x="" y="" width="28" height="28" clip-path="url(#r-9fd3b85b09574f07b104583306412dcc)" transform="" />
			</svg>		
		</div>
		
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

		<svg width="118" height="118" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
			<defs>
				<clipPath id="r-9fd3b85b09574f07b104583306412dcd">
					<rect x="0" y="0" width="118" height="118" r="65" rx="65" ry="65"/>
				</clipPath>
				<clipPath id="r-c68bd35044794eb797f6e30f55f0550f">
					<rect x="0" y="0" width="118" height="118" r="65" rx="65" ry="65"/>
				</clipPath>
				<clipPath id="r-1f438ec6161b4f6580b78135d6dc9a63">
					<rect x="0" y="0" width="118" height="118" r="65" rx="65" ry="65"/>
				</clipPath>
			</defs>
			<image id="avatar-medium" xlink:href="ex.jpg" x="-40.763636363" y="-5.36363636364" width="188.8" height="118" clip-path="url(<?=current_url()?>#r-9fd3b85b09574f07b104583306412dcd)" transform="" />
		</svg>		
 </div>
 <!-- END PAGE CONTAINER-->
<script>
$(function() {
	App.init();
	Admin.userProfile();
});
</script>
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<div class="footer">
		2013 &copy; by Wizard.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-angle-up"></i></span>
		</div>
	</div>
	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/breakpoints/breakpoints.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/uniform/jquery.uniform.min.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery.blockui.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/validate.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap-daterangepicker/date.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/bootstrap-daterangepicker/daterangepicker.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery.livequery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/upload-process/plupload.full.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/fancybox/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/flow-player/flowplayer-3.2.12.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/editor/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/admin.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/js/app.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/admin/avatar/js/main.js"></script>

</body>
<!-- END BODY -->
</html>