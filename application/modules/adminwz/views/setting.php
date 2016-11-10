 <!-- BEGIN PAGE CONTAINER-->
 <div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
	   <div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Setting
			</h3>
			<ul class="breadcrumb">
				<li>
				<i class="icon-home"></i>
					<a href="<?=base_url().LINK_ADMIN?>">Admin</a>
					<span class="icon-angle-right"></span>
				</li>
				<li><span>Setting</span></li>
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
				<h4><i class="icon-cogs"></i>Setting</h4>
				<div class="tools">
				   <a href="javascript:;" class="collapse"></a>
				</div>
			 </div>
			 <div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form name="_frSetting" id="_frSetting" class="form-horizontal _form" role="form" action="<?=base_url().'adminwz'?>" method="POST" enctype="multipart/form-data">
					<div class="alert alert-error hide">
					  <button data-dismiss="alert" class="close"></button>
					  <span></span>
					</div>
					<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
					<input type="hidden" name="action" value="post" />
					<input type="hidden" name="type" value="postSetting" />
					<h3 class="form-section">General</h3>
					<div class="control-group" id="name">
						<label class="control-label">Website name<span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="name" require="true" value="<?=(!empty($result->name))?$result->name:''?>" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>
					<div class="control-group" id="brochure_download">
						<label class="control-label">Brochure Download<span class="required">* (pdf,doc,excel < 2MB)</span></label>
						<div class="controls">
							<input type="file" class="span6 m-wrap" name="brochure_download" value="" />
							<span for="brochure_download" class="help-inline"></span>
							<a href="<?=(!empty($result->brochure_download))?DIR_UPLOAD_FILE_DOWNLOAD.$result->brochure_download:''?>">Download</a>
						</div>
					</div>

					<div class="control-group" id="file_download">
						<label class="control-label">File Download Talentnet Expertise<span class="required">* (pdf,doc,excel < 2MB)</span></label>
						<div class="controls">
							<input type="file" class="span6 m-wrap" name="file_download" value="" />
							<span for="file_download" class="help-inline"></span>
							<a href="<?=(!empty($result->file_download))?DIR_UPLOAD_FILE_DOWNLOAD.$result->file_download:''?>">Download</a>
						</div>
					</div>


					<div class="control-group" id="cv_sample_download">
						<label class="control-label">CV Sample<span class="required">* (pdf,doc,excel < 2MB)</span></label>
						<div class="controls">
							<input type="file" class="span6 m-wrap" name="cv_sample_download" value="" />
							<span for="cv_sample_download" class="help-inline"></span>
							<a href="<?=(!empty($result->cv_sample_download))?DIR_UPLOAD_FILE_DOWNLOAD.$result->cv_sample_download:''?>">Download</a>
						</div>
					</div>
					<!--<div class="control-group" >
						<label class="control-label">Client Order</span></label>
						<div class="controls">
							<select name="client_order" class="span6 m-wrap" >
								<option value="asc" <?php if($result->client_order=='asc') echo 'selected="selected"'; ?>>Tăng dần</option>
								<option value="desc" <?php if($result->client_order=='desc') echo 'selected="selected"'; ?>>Giảm dần</option>
							</select>
						</div>
					</div>-->
					<h3 class="form-section">Language</h3>
					<div class="control-group" id="language">
						<label class="control-label">Language text</label>
						<div class="controls">
							<textarea rows="10" class="span6 m-wrap popovers" name="language"><?=(!empty($result->language)) ? $result->language : ''?></textarea>
							<span for="name" class="help-inline"></span>
						</div>
					</div>

					<h3 class="form-section">Website maintenance</h3>
					<div class="control-group" id="maintenance">
						<label class="control-label">Maintenance</label>
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox" name="maintenance" <?=(!empty($result->maintenance)) ? 'checked' : ''?> class="span6 m-wrap popovers" />
							</label>
							<span for="name" class="help-inline"></span>
						</div>
					</div>
					<div class="control-group" id="maintenance_text">
						<label class="control-label">Maintenance text</label>
						<div class="controls">
							<textarea rows="10" class="span6 m-wrap popovers" name="maintenance_text"><?=(!empty($result->maintenance_text)) ? $result->maintenance_text : ''?></textarea>
							<span for="name" class="help-inline"></span>
						</div>
					</div>

					<h3 class="form-section">Google Analytics</h3>
					<div class="control-group" id="ga">
						<label class="control-label">ID<span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="ga" require="true" value="<?=(!empty($result->ga))?$result->ga:''?>" data-type="int" />
							<span for="name" class="help-inline"></span>
						</div>
					</div>

					<div class="control-group" id="email">
						<label class="control-label">Email<span class="required">*</span></label>
						<div class="controls">
							<input type="text" class="span6 m-wrap popovers" name="email" require="true" value="<?=(!empty($result->email))?$result->email:''?>" />
							<span for="email" class="help-inline"></span>
						</div>
					</div>

					<div class="control-group" id="password">
						<label class="control-label">Password<span class="required">*</span></label>
						<div class="controls">
							<input type="password" class="span6 m-wrap popovers" name="password" require="true" value="<?=(!empty($result->password))?$result->password:''?>" autocomplete="off" />
							<span for="password" class="help-inline"></span>
						</div>
					</div>

					<h3 class="form-section">Tracking Code</h3>
					<div class="control-group" id="tracking">
						<label class="control-label">Tracking<span class="required">*</span></label>
						<div class="controls">
							<textarea rows="10" class="span6 m-wrap" name="tracking" require="true"><?=(!empty($result->tracking))?$result->tracking:''?></textarea>
							<span for="password" class="help-inline"></span>
						</div>
					</div>

					<div class="control-group" id="gtm_code">
						<label class="control-label">GTM<span class="required">*</span></label>
						<div class="controls">
							<textarea rows="10" class="span6 m-wrap" name="gtm_code" require="true"><?=(!empty($result->gtm_code))?$result->gtm_code:''?></textarea>
							<span for="password" class="help-inline"></span>
						</div>
					</div>

					<div class="form-actions">
						<input type="hidden" name="mid" value="<?=$mid?>" />
						<button type="submit" class="btn blue" id="_btnSetting">
							<i class="icon-ok"></i>
							Save
						</button>
						<button type="button" class="btn btn-cancel">Cancel</button>
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
	Admin.setting();
});
</script>