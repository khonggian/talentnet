<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			News <small>Page Edit</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="<?=base_url()?>" title="Admin">Admin</a> 
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="" title="">Module News</a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="" title="page edit">Page List</a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<span>Page edit</span>
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
			<h4><i class="icon-edit"></i> page edit</h4>
			<div class="tools">
			   <a href="javascript:;" class="collapse"></a>
			</div>
		 </div>
		 <div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="" class="form-horizontal _form" id="_frPageEdit">
				<div class="alert alert-error hide">
				  <button data-dismiss="alert" class="close"></button>
				  <span></span>
				</div>		

				<div class="control-group" id="pid">
					<label class="control-label">Thể loại</label>
					<div class="controls">
						<select class="span6 chosen" data-placeholder="Choose a Thể Loại" tabindex="1" name="pid">
							<option value=""></option>
							<?php
								if(!empty($news_category)){
									$selected= (!empty($result->pid)) ? $result->pid : 0;
									foreach($news_category as $row){
							?>
							<option value="<?=$row->id?>" <?=($row->id==$selected) ? 'selected' : ''?>><?=$row->name?></option>
							<?php
									}
								}
							?>
						</select>
						<span class="help-inline"></span>
						<div class="clearAll"></div>
				  </div>
				</div>				
				
				<div class="control-group" id="title">
					<label class="control-label">Tiêu đề</label>
					<div class="controls">
						<input type="text" name="title" class="span6 m-wrap" value="<?=(!empty($result->title)) ? $result->title : '';?>" />
						<span class="help-inline"></span>
					</div>
				</div>		

				<div class="control-group" id="description">
					<label class="control-label">Mô tả</label>
					<div class="controls">
						<input type="text" name="description" class="span6 m-wrap" value="<?=(!empty($result->description)) ? $result->description : '';?>" />
						<span class="help-inline"></span>
					</div>
				</div>				

				<div class="control-group" id="content">
				  <label class="control-label">Content</label>
				  <div class="controls">
						<textarea class="span6 m-wrap" rows="3" id="_content" name="content"><?=(!empty($result->content)) ? $result->content : ''?></textarea>
						<script type="text/javascript">
							$(function() {
								$('#_content').editor();
							});
						</script>
						<span class="help-inline"></span>
				  </div>
				</div>				
				
				<div class="form-actions">
					<input type="hidden" name="id" value="<?=(int)$this->input->get('id')?>" />
					<button type="button" class="btn blue" id="_btnPageEdit"><i class="icon-ok"></i> Save</button>
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
$(function (){       
	App.init();
	Admin.customPageEdit('<?=$module?>');
});
</script>