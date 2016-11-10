<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			Jobs <small>Page Edit</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="<?=base_url()?>" title="Admin">Admin</a> 
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="" title="">Module Jobs</a>
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
	App.setPage("table_managed");
	Admin.customPageEdit('<?=$module?>');
});
</script>