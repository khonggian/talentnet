<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				Module <small>List</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url().LINK_ADMIN?>">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<span>Module</span>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid mb5">
		<a href="<?=base_url().LINK_ADMIN_MODULE_EDIT?>" title="Add New" class="btn green">
			Add New <i class="icon-plus"></i>
		</a>	
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<div class="portlet box blue">
				<div class="portlet-title">
					<h4><i class="icon-comments"></i>Module</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="#portlet-config" data-toggle="modal" class="config"></a>
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>
					</div>
				</div>
				<div class="portlet-body ">
					<div class="dd" id="nestable_list_m">
						<?=$menu_module;?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="span6">
			<div id="sticker" class="sticker module_sticker hide">
				<div class="portlet box green box-module-action <?=(empty($mid))?'':''?>">
					<div class="portlet-title">
						<h4><i class="icon-cogs"></i>
							<span class="name-module"><?=(!empty($module)) ? ucfirst($module->name) : ''?></span>
						</h4>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a>
						</div>
					</div>		
					<div class="portlet-body">
						<div class="dd" id="nestable_list_2">
							<?php
								if(permission($permission, 'manage')){
							?>
							<div>
								<a class="btn icn-only" href="<?=base_url().LINK_ADMIN_MODULE_EDIT.'?mid='.$mid?>" id="_bt1"><i class="m-icon-swapright"></i> Manage</a>
								<a class="btn icn-only purple" href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_LIST.'?mid='.$mid?>" id="_bt2"><i class="m-icon-swapright m-icon-white"></i> Manage Page List</a>
								<a class="btn icn-only blue" href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT.'?mid='.$mid?>" id="_bt3"><i class="m-icon-swapright m-icon-white"></i> Manage Page Edit</a>
							</div>
							<?php
								}
							?>
							<div class="mt5">
								<a class="btn icn-only green" href="<?=base_url().LINK_ADMIN_MODULE_PAGE_LIST.'?mid='.$mid?>" id="_bt4"><i class="m-icon-swapright m-icon-white"></i> Page List</a>
								<a class="btn icn-only black" href="<?=base_url().LINK_ADMIN_MODULE_PAGE_EDIT.'?mid='.$mid?>" id="_bt5"><i class="m-icon-swapright m-icon-white"></i> Page Edit</a>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>	
	
	<div class="row-fluid">

         <!--<div class="row">
            <div class="col-md-12">
               <h3>Serialised Output (per list)</h3>
               <textarea id="nestable_list_1_output" class="form-control col-md-12 margin-bottom-10"></textarea>
               <textarea id="nestable_list_2_output" class="form-control col-md-12 margin-bottom-10"></textarea>
            </div>
         </div>-->		
		 		 
		
	</div>
	<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->	
<script>
$(function() {
	App.init();
	Admin.module();
});
</script>