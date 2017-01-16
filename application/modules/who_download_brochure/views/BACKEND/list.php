<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12"> 
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Manage download <small>Page List</small>
			</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>adminwz" title="Admin">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<a href="">Module </a>
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<span>Page List</span>
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
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group">
							<!--<a href="<?=current_url().'/edit?mid='.$this->input->get('mid')?>" id="sample_editable_1_new" class="btn green">
							Add New <i class="icon-plus"></i>
							</a>-->
						</div>
						<div class="btn-group pull-right">

							<!--<a class="btn blue mr5 _upStatus" data-status="show"><i class="icon-ok"></i> Show</a>
							<a class="btn blue mr5 _upStatus" data-status="hide"><i class="icon-remove"></i> Hide</a>-->

							<a class="btn red mr5" id="_delete"><i class="icon-trash"></i> Delete</a>

							<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
							</button>
							<ul class="dropdown-menu">
								<li><a href="Javascript:void(0)" onclick="return window.print()" title="Print">Print</a></li>
								<li><a href="<?=current_url().'?'.($_SERVER['QUERY_STRING']==''?'excel=true':$_SERVER['QUERY_STRING'].'&excel=true')?>">Export to Excel</a></li>
							</ul>
						</div>
					</div>
					<div class="row-fluid">
						<form action="" method="get" enctype="multipart/form-data" id="_frFuntion">
							<div class="span6">
								<div id="sample_1_length" class="dataTables_length">
									<label>
										<select name="ps" size="1" aria-controls="sample_1" class="m-wrap xsmall" id="_ps">
											<?php
												$select_page_size= array(10,20,30,40,50,100);
												foreach($select_page_size as $ps){
											?>
											<option value="<?=$ps?>" <?=($this->input->get('ps')==$ps)?'selected':''?>><?=$ps?></option>
											<?php
												}
											?>
										</select> records per page &nbsp;
									</label>
								</div>
								<div class="dataTables_filter" id="sample_1_filter">
									 <div class="input-prepend">
										<span class="add-on"><i class="icon-calendar"></i></span>
										<input type="text" class="m-wrap m-ctrl-medium date-range" name="range" value="<?=$this->input->get('range')?>" autocomplete="off" />
									 </div>
								</div>
								<div class="clearAll"></div>
							</div>
							<div class="span6">
								<div class="dataTables_filter" id="sample_1_filter">
									<label>Search: <input type="text" name="k" aria-controls="sample_1" class="m-wrap medium" value="<?=$this->input->get('k')?>"></label>
									<input type="hidden" name="mid" value="<?=$mid?>" />
								</div>
							</div>
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
							<table class="table table-striped table-bordered table-hover _table" id="sample_1">
								<thead>
									<tr>
										<th style="width:8px;" class="center">
											<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
										</th>

										<th class="center" width="50">
											<a href="#">No</a>
										</th>
										<th class="center">
											<a href="">Full name</a>
										</th>
										<th class="center">
											<a href="">Title</a>
										</th>
										<th class="center">
											<a href="">Company</a>
										</th>
										<th class="center">
											<a href="">Phone</a>
										</th>
										<th class="center">
											<a href="">Email</a>
										</th>
										<th class="center">
											<a href="">Action</a>
										</th>
										<!--<th class="center">
											<a href="">Image</a>
										</th>-->

										<?php
											$current_url_field= current_url().'?mid='.$mid.'&range='.$this->input->get('range').'&ps='.$this->input->get('ps').'&p='.$this->input->get('p').'&keyword='.$this->input->get('keyword');
										?>
										<!--<th class="center field_status <?=($this->input->get('field') == 'status') ? 'sorting_'.$sort : 'sorting'?>">
											<a href="<?=$current_url_field.'&field=status&sort='.$sort?>">Status</a>
										</th>-->
										<!--<th class="center field_status <?=($this->input->get('field') == 'changed') ? 'sorting_'.$sort : 'sorting'?>">
											<a href="<?=$current_url_field.'&field=changed&sort='.$sort?>">Changed</a>
										</th>		-->
										<th class="center field_status <?=($this->input->get('field') == 'created') ? 'sorting_'.$sort : 'sorting'?>">
											<a href="<?=$current_url_field.'&field=created&sort='.$sort?>">Created</a>
										</th>
										<th class="center field_operation">Operations</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if(!empty($result)){
											$i = 1;
											foreach($result as $row){
									?>
									<tr class="odd gradeX" data-id="<?=$row->id?>">
										<td class="center vl-m"><input type="checkbox" class="checkboxes item-checkbox" value="<?=$row->id?>" /></td>
										<td class="center vl-m"><?=$i?></td>
										<td class="center vl-m" data-field=""><?=$row->fullname?></td>
										<td class="center vl-m" data-field=""><?=$row->title?></td>
										<td class="center vl-m" data-field=""><?=$row->company?></td>
										<td class="center vl-m" data-field=""><?=$row->phone?></td>
										<td class="center vl-m" data-field=""><?=$row->email?></td>
										<td class="vl-m" style="max-width: 250px;" data-field="">
											<?php
												if(strpos($row->action,"http") === 0) {	
													echo "<a target='_blank' href='" . $row->action. "'><b>Download file</b></a>" . "<br/>" . '<span style="font-size: 13px">-How know: ' . $row->howknow . '<br/>' . '-Offers: ' . $row->serviceoffer . '</span>';;
												} else {
													//echo $row->action . ' <a class="label label-success item-status" href="javascript:void(0);" onclick="alert(\'HOW KNOW: ' . $row->howknow .'\nSERVICE OFFERINGS: ' . $row->serviceoffer .'\')">Show</a>';
													echo '<b>' . $row->action. "</b><br/>" . '<span style="font-size: 13px">-How know: ' . $row->howknow . '<br/>' . '-Offers: ' . $row->serviceoffer . '</span>';
												}
											?>
										</td>
										<!--<td class="center vl-m" data-field=""><?=$row->name_category?></td>
										<td class="center vl-m" data-field=""><a href="<?=!empty($row->link_detail)?$row->link_detail:''?>" target="_blank">LINK</a></td>
										<!--<td class="center vl-m" data-field="status"><span class="label"><?=getStatus($row->status)?></span></td>-->
										<!--<td class="center vl-m" data-field=""><?=$row->image?></td>-->

										<!--<td class="center vl-m" data-field="changed"><?=date('d/m/Y H:i:s', strtotime($row->changed))?></td>-->
										<td class="center vl-m" data-field="created"><?=date('d/m/Y H:i:s', strtotime($row->created))?></td>
										<td class="center vl-m">
											<!--<a href="<?=current_url()."/edit?mid={$mid}&nid={$row->id}"?>">Edit</a>
											|-->
											<a class="item-delete _btn">Delete</a>
										</td>
									</tr>
									<?php
											$i++;
											}
										}else{
									?>
									<tr class="odd gradeX">
										<td colspan="9" class="center"><strong>Empty</strong></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>					<?php
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
	App.init();
	App.setPage("table_managed");
	Admin.customPageEdit('<?=$module?>');
});
</script>