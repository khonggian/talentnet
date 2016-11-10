<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<?=ucfirst($module->name)?> <small>Page Edit</small>
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="<?=base_url()?>" title="Admin">Admin</a> 
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="<?=base_url().'adminwz/module/manage?mid='.$module->id?>" title="<?=ucfirst($module->name)?>">Module <?=ucfirst($module->name)?></a>
				<span class="icon-angle-right"></span>
			</li>
			<li>
				<a href="<?=base_url().LINK_ADMIN_MODULE_PAGE_LIST.'?mid='.$module->id?>" title="<?=ucfirst($module->name)?> page edit">Page List</a>
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
			<h4><i class="icon-edit"></i><?=ucfirst($module->name)?> page edit</h4>
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
				
				<?=$form?>
				
				<div class="form-actions">
					<input type="hidden" name="mid" value="<?=$mid?>" />
					<input type="hidden" name="nid" value="<?=(int)$this->input->get('nid')?>" />
					<?php if($get_module->edit){?>
					<button type="button" class="btn blue" id="_btnPageEdit"><i class="icon-ok"></i> Save</button>
					<?php }?>
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
	Admin.modulePageEdit(<?=$mid?>, '<?=$this->session->userdata('referrer_page_list')?>');
});
</script>