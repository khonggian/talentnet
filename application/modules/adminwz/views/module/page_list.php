<!-- BEGIN PAGE CONTAINER-->			
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12"> 
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">
				<?=ucfirst($module->name)?> <small>Page List</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>adminwz" title="Admin">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="<?=base_url().'adminwz/module/manage?mid='.$mid?>">Module <?=ucfirst($module->name)?></a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="<?=current_url().'?mid='.$mid;?>" title="">Page List</a>
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
			<div class="portlet box green">
				<div class="portlet-title">
					<h4><i class="icon-reorder"></i>Page List</h4>
				</div>
				<div class="portlet-body">
					<div class="clearfix">

						<?php if($get_module->add){?>
						<div class="btn-group">
							<a href="<?=base_url().'adminwz/module/page-edit?mid='.$mid?>" id="sample_editable_1_new" class="btn green">
								Add New <i class="icon-plus"></i>
							</a>
						</div>
						<?php }?>
						<div class="btn-group pull-right">
							<?php
								if(permission($permission, 'edit')){
									if($get_module->showhide){
							?>
							<a class="btn blue mr5 _upStatus" data-status="show"><i class="icon-ok"></i> Show</a>
							<a class="btn blue mr5 _upStatus" data-status="hide"><i class="icon-remove"></i> Hide</a>
							<?php	}
								}
							?>
							<?php
								if(permission($permission, 'delete')){
									if($get_module->delete){
							?>							
							<a class="btn red mr5" id="_delete"><i class="icon-trash"></i> Delete</a>
							<?php	}
								}
							?>
							<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
							</button>
							<ul class="dropdown-menu">
								<li><a href="Javascript:void(0)" onclick="return window.print()" title="Print">Print</a></li>
								<li><a href="<?=$link_excel?>">Export to Excel</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<form action="" method="get" enctype="multipart/form-data" id="_frFuntion">
							<div class="span6">
								<div id="sample_1_length" class="dataTables_length">
									<label>
										<select name="ps" size="1" aria-controls="sample_1" class="chosen m-wrap xsmall" id="_ps">
											<?php
												$select_page_size= array(10,20,30,40,50,100);
												foreach($select_page_size as $ps){
											?>
											<option value="<?=$ps?>" <?=($this->input->get('ps')==$ps)?'selected':''?>><?=$ps?></option>
											<?php
												}
											?>
										</select>
										<span>records per page &nbsp;</span>
									</label>
								</div>
								<div class="dataTables_filter" id="sample_1_filter">
									 <div class="input-prepend">
										<span class="add-on"><i class="icon-calendar"></i></span>
										<input type="text" class="m-wrap m-ctrl-medium date-range" name="range" value="<?=$this->input->get('range');?>" autocomplete="off" />
									 </div>									
								</div>		
								<div class="clearAll"></div>								
							</div>
							<div class="span6">
								<div class="dataTables_filter" id="sample_1_filter">
									<label>Search: <input type="text" name="k" aria-controls="sample_1" class="m-wrap medium" value="<?=$this->input->get('k')?>"></label>
								</div>
							</div>
							<input type="hidden" name="mid" value="<?=$mid?>" />
						</form>
					</div>		
					
					<div>
						<?php
							if(!empty($filter)){
								foreach($filter as $f){
						?>
						<a href="<?=current_url().'?mid='.$mid.'&filter='.$f->id?>" class="btn <?=($this->input->get('filter') == $f->id) ? 'blue' : ''?>"><?=$f->name?></a>
						<?php
								}
							}
						?>
					</div>
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover _table flip-content" id="sample_1">
								<thead>
									<tr>
										<th style="width:8px;" class="center vl-m">
											<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
										</th>
										<th class="center" style="width: 35px;">No.</th>
										<?php
											if(!empty($data_query)){
												$current_url_field= current_url().'?mid='.$mid.'&range='.$this->input->get('range').'&ps='.$this->input->get('ps').'&p='.$this->input->get('p').'&keyword='.$this->input->get('keyword');
												foreach($data_query as $k=>$row){
										?>
										<th class="center <?=($this->input->get('field') == 'f'.$k) ? 'sorting_'.$sort : 'sorting'?> field_<?=$row->type?>">
											<a href="<?=$current_url_field.'&field=f'.$k.'&sort='.$sort?>"><?=text_lang($row->name)?></a>
										</th>
										<?php
												}
											}
										?>
										<th class="center field_operation">Operations</th>
									</tr>
								</thead>
								<tbody>								
									<?php
										if(!empty($result)){
											$count= $page_count + 1;
											foreach($result as $row){
									?>
									<tr class="odd gradeX" data-id="<?=$row->id?>">
										<td class="vl-m"><input type="checkbox" class="checkboxes item-checkbox" value="<?=$row->id?>" /></td>
										<td class="center vl-m"><?=$count;?></td>
										<?php
											if(!empty($data_query)){
												foreach($data_query as $field){
										?>
										<td class="center vl-m" data-field="<?=$field->select?>"><?=field_data($row, $field)?></td>
										<?php
												}
											}
										?>
										<td class="center vl-m">
											<?php
											
												if(permission($permission, 'edit')){
													if($get_module->edit){
											?>	
											<a href="<?=base_url().LINK_ADMIN_MODULE_PAGE_EDIT.'?mid='.$mid.'&nid='.$row->id?>">Edit</a> 
											<?php }
												}
											?>
											<?php
												if(permission($permission, 'edit') && permission($permission, 'delete')){
													if($get_module->edit){
											?>										
											|
											<?php }
												}
											?>
											<?php
												if(permission($permission, 'delete')){
													if($get_module->delete){
											?>										
											<a class="item-delete _btn">Delete</a>
											<?php	}
												}
											?>
										</td>
									</tr>
									<?php
											$count++;
											}
										}else{
									?>
									<tr class="odd gradeX">
										<td class="center td-colspan"><strong>Empty</strong></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<?php
						if(!empty($pagination)){
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