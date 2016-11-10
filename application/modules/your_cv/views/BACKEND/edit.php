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
				<div class="control-group" id="parent">
					<label class="control-label">Parent</label>
					<div class="controls">
						<select class="span6 chosen" data-placeholder="Choose a Parent" tabindex="1" name="parent_id" id="parent_id">
							<option value=""></option>
							<?php
									$selected= (!empty($result->parent_id)) ? $result->parent_id : 0;
							?>
							<option value="1" <?=(!empty($result->parent_id)) ? ($result->parent_id==$selected) ? 'selected' : '' : '';?>>Information</option>
							<option value="2" <?=(!empty($result->parent_id)) ? ($result->parent_id==$selected) ? 'selected' : '' : '';?>>Career At Talentnet</option>
				
						</select>
						<span class="help-inline"></span>
						<div class="clearAll"></div>
				  </div>
				</div>
				
				<div class="control-group" id="category_id">
					<label class="control-label">Category</label>
					<div class="controls ajax_category">
						<select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1" name="category_id">
							<option value=""></option>
							<?php
								if(!empty($news_category)){
									$selected= (!empty($result->category_id)) ? $result->category_id : 0;
									foreach($news_category as $row){
							?>
							<option value="<?=$row->id?>" <?=($row->id==$selected) ? 'selected' : ''?>><?=$row->name_en?></option>
							<?php
									}
								}
							?>
						</select>
						<span class="help-inline"></span>
						<div class="clearAll"></div>
				  </div>
				</div>				
				
				<?php if(!empty($form)) echo modules::run('adminwz/form', $form);?>			
				
				<div class="form-actions">
					<input type="hidden" name="nid" value="<?=(int)$this->input->get('nid')?>" />
					<input type="hidden" name="mid" value="<?=(int)$this->input->get('mid')?>" />
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
	$("#parent_id").change(function(){
		var parent_id = $(this).val();
		if(parent_id){
			$.post( base_url + 'adminwz/module/custom/'+'<?=$module?>'+'/filter_category',{
				parent_id : parent_id,
				token : token
			},function(data){
				if(data){
					$(".ajax_category").val(data);
				}
			});
		}
	});
});
</script>