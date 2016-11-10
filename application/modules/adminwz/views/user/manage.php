<!-- BEGIN PAGE CONTAINER-->			
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">  
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				User <small>Role</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>adminwz" title="Admin">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="<?=base_url().LINK_ADMIN_USER?>manage">User</a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<span>Manage</span>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box grey">
				<div class="portlet-title">
					<h4><i class="icon-user"></i>User</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">

					<div class="row-fluid">
						<form action="" method="get" enctype="multipart/form-data" id="_frFuntion">
							<div class="span6">
								<div class="btn-group">
									<a href="<?=base_url().LINK_ADMIN_USER?>manage-edit"  class="btn green">
									Add New <i class="icon-plus"></i>
									</a>
								</div>
								<div class="clearAll"></div>								
							</div>
							<div class="span6">
								<div class="dataTables_filter ta-right" id="sample_1_filter">
									<label>Search: <input type="text" name="k" aria-controls="sample_1" class="m-wrap medium" value="<?=$this->input->get('k')?>"></label>
								</div>
							</div>
						</form>
					</div>					
					<table class="table table-striped table-bordered table-hover _table" id="sample_1">
						<thead>
							<tr>
								<th class="center">Role</th>
								<th class="center">Username</th>
								<th class="center">Email</th>
								<th class="center">Fullname</th>
								<th class="center">Status</th>
								<th class="center field_changed">Changed</th>
								<th class="center field_created">Created</th>
								<th class="center field_operation">Operations</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if(!empty($result)){
									foreach($result as $row){
							?>
							<tr class="odd gradeX">
								<td class="center"><?=$row->role_name?></td>
								<td class="center"><?=$row->username?></td>
								<td class="center"><?=$row->email?></td>
								<td class="center"><?=$row->fullname?></td>
								<td class="center"><?=getStatus($row->status)?></td>
								<td class="center"><?=date('d/m/Y H:i:s', strtotime($row->changed))?></td>
								<td class="center"><?=date('d/m/Y H:i:s', strtotime($row->created))?></td>
								<td class="center"><a href="<?=base_url().LINK_ADMIN_USER.'manage-edit?id='.$row->id?>">Edit</a> | <a href="<?=base_url().LINK_ADMIN_MODULE.'delete?id='.$row->id.'&type=user'?>" class="delete">Delete</a></td>
							</tr>
							<?php
									}
								}else{
							?>
							<tr class="odd gradeX"><td colspan="8" class="center"><strong>Empty</strong></td></tr>
							<?php
								}
							?>
						</tbody>
					</table>
					<?php
						if(!empty($pagination))
						{
					?>
					<div class="row-fluid">
						<div class="span6"></div>
						<div class="span6">
							<div class="dataTables_paginate paging_bootstrap pagination">
								<?=$pagination?>
							</div>
						</div>
					</div>	
					<?php
						}
					?>
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
	Admin.modulePageList();
});			
</script>