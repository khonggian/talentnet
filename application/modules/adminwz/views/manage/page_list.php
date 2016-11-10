<!-- BEGIN PAGE CONTAINER-->			
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				<?=ucfirst($module->name)?> <small> Manage Page List</small>
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
				<li><span>Manage Page List</span></li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box purple">
				<div class="portlet-title">
					<h4><i class="icon-reorder"></i>Manage Page List</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">					
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li <?=(!$this->input->get('tab')) ? 'class="active"' : '';?>><a href="#tab_1_1" data-toggle="tab">Field</a></li>
							<li <?=($this->input->get('tab') == 'filter') ? 'class="active"' : '';?>><a href="#tab_1_2" data-toggle="tab">Filter</a></li>
						</ul>
						<div class="tab-content">						
							<div class="tab-pane active" id="tab_1_1">
								<div class="clearfix">
									<div class="btn-group">
										<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_LIST_FIELD.'?mid='.$mid?>" title="Add New" class="btn green">
											Add New <i class="icon-plus"></i>
										</a>
									</div>
								</div>						
								
								<table class="table table-striped table-bordered table-hover _table" id="tableListField">
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
												foreach($module_list_field as $row){
										?>
										<tr class="odd gradeX" data-id="<?=$row->id?>">
											<td class="sortable"><i class="icon-reorder"></i></td>
											<td><?=$row->name?></td>
											<td class="hidden-480"><?=$row->type?></td>
											<td class="hidden-480"><a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_LIST_FIELD.'?mid='.$mid.'&fid='.$row->id?>">Edit</a> | <a href="<?=base_url().LINK_ADMIN_MODULE_DELETE.'?mid='.$mid.'&id='.$row->id.'&type=list'?>" class="delete" title="Delete">Delete</a></td>
										</tr>
										<?php
												}
											}
										?>
									</tbody>
								</table>	
							</div>
							<div class="tab-pane" id="tab_1_2">
								<div class="clearfix">
									<div class="btn-group">
										<a href="<?=base_url().LINK_ADMIN_MODULE_MANAGE_PAGE_LIST_FILTER.'?mid='.$mid?>" title="Add New" class="btn blue">
											Add New Filter <i class="icon-plus"></i>
										</a>
									</div>
								</div>						
								
								<table class="table table-striped table-bordered table-hover _table" id="tableListFilter">
									<thead>
										<tr>
											<th></th>
											<th>Name</th>
											<th class="hidden-480">Where</th>
											<th class="hidden-480">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if(!empty($module_list_filter)){
												foreach($module_list_filter as $row){
										?>
										<tr class="odd gradeX" data-id="<?=$row->id?>">
											<td class="sortable"><i class="icon-reorder"></i></td>
											<td><?=$row->name?></td>
											<td class="hidden-480"><?=$row->where?></td>
											<td class="hidden-480"><a href="<?=base_url().'adminwz/module/manage-page-list-filter?mid='.$mid.'&filter='.$row->id?>">Edit</a> | <a href="<?=base_url().'adminwz/module/delete?mid='.$mid.'&id='.$row->id.'&type=filter'?>" class="delete" title="Delete">Delete</a></td>
										</tr>
										<?php
												}
											}
										?>
									</tbody>
								</table>	
							</div>
						</div>
					</div>
					<!--END TABS-->					
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
	Admin.setupTableSortField('#tableListField tbody', <?=$mid?>, 'list-field');
	Admin.setupTableSortField('#tableListFilter tbody', <?=$mid?>, 'list-filter');
});
</script>