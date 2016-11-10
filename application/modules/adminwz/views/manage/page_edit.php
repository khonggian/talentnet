<!-- BEGIN PAGE CONTAINER-->			
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				<?=ucfirst($module->name)?> <small> Manage Page Edit</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>adminwz" title="Admin">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE.'?mid='.$module->id?>" title="<?=ucfirst($module->name)?>">Module <?=ucfirst($module->name)?></a>
					<i class="icon-angle-right"></i>
				</li>				
				<li><span>Manage Page Edit</span></li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<h4><i class="icon-reorder"></i>Manage Page Edit</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group">						
							<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT_FIELD.'?mid='.$mid?>" title="Add New" class="btn green mr5">
								<i class="icon-plus"></i> Add New Field
							</a>
							<a href="<?=base_url().LINK_ADMIN_MODULE_PAGE_EDIT.'?mid='.$mid?>" title="Add New Content" class="btn blue">
								<i class="icon-plus"></i> Add New Content
							</a>							
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover _table" id="tableListFieldEdit">
						<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th class="hidden-480">Type</th>
								<th class="hidden-480">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if(!empty($module_list_field)){
									global $op_field_type;
									foreach($module_list_field as $row){
							?>
							<tr class="odd gradeX" data-id="<?=$row->id?>">
								<?php
									if($row->type == 'group'){
								?>
								<td class="sortable"><img src="<?=base_url()?>assets/admin/img/icon/move_24x24.png" class="mt7" alt="" /></td>
								<td colspan="2"><h3 class="name"><?=$row->name?></h3></td>
								<?php
									}else{
								?>
								<td class="sortable"><i class="icon-reorder"></i></td>
								<td>
									<?=$row->name?>
								</td>
								<td>
									<?=(isset($op_field_type[$row->type])) ? $op_field_type[$row->type] : ''?>
								</td>								
								<?php
									}
								?>
								<td class="vl-m">
									<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_EDIT_FIELD.'?mid='.$mid.'&fid='.$row->id?>">Edit</a>
									| <a href="<?=base_url().LINK_ADMIN_MODULE_DELETE.'?mid='.$mid.'&id='.$row->id.'&type=edit'?>" class="delete">Delete</a>
								</td>
							</tr>
							<?php
									}
								}else{
							?>
							<tr>
								<td colspan="3" class="center"><strong>Empty</strong></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>					
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>

	<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
<script>
$(function() {	
	App.setPage("table_managed");
	App.init();
	Admin.setupTableSortField('#tableListFieldEdit tbody', <?=$mid?>, 'edit-field');
});
</script>