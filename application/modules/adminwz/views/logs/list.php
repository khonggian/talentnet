<!-- BEGIN PAGE CONTAINER-->			
<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
			<h3 class="page-title">Logs</h3>
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>adminwz" title="Admin">Admin</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li>
					<span>Logs</span>
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
					<h4><i class="icon-hdd"></i>Logs</h4>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group pull-right">
							<ul class="dropdown-menu">
								<li><a href="javascript:;" onclick="return window.print()" title="Print">Print</a></li>
								<li><a href="">Export to Excel</a></li>
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
												$select_page_size= array(10,20,30,40,50);
												foreach($select_page_size as $ps){
											?>
											<option value="<?=$ps?>" <?=($this->input->get('ps')==$ps)?'selected':''?>><?=$ps?></option>
											<?php
												}
											?>
										</select>
										<p>records per page &nbsp;</p>
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
								</div>
							</div>
						</form>
					</div>			
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover _table" id="sample_1">
								<thead>
									<tr>
										<th class="center">Username</th>
										<th class="center">Module</th>
										<th class="center field_nid">Content ID</th>
										<th class="center">Type</th>
										<th class="center">Title</th>
										<th class="center">Data</th>
										<th class="center" style="width:130px;">Created</th>
									</tr>
								</thead>
								<tbody>		
									<?php
										if(!empty($result)){
											foreach($result as $row){
									?>
									<tr class="odd gradeX">
										<td class="center"><?=$row->username?></td>
										<td class="center"><?=$row->name?></td>
										<td class="center"><?=$row->nid?></td>
										<td class="center"><?=$row->type?></td>
										<td class="center"><?=$row->title?></td>
										<td class="center">
											<a href="#logs_<?=$row->id?>" class="fancybox">view</a>
											<div class="hide">
												<div id="logs_<?=$row->id?>">
													<?php
														if(!empty($row->data)){
															$row_data= json_decode(html_entity_decode($row->data));
													?>
														<table class="table table table-striped table-bordered table-hover">
															<thead>
																<?php
																	foreach($row_data as $k=>$v){
																		echo '<th class="center">'.ucfirst($k).'</th>';
																	}															
																?>
															</thead>
															<tbody>
																<tr>
																<?php
																	foreach($row_data as $k=>$v){
																?>	
																	<td class="center"><?=$v?></td>
																<?php
																	}
																?>
																</tr>
															</tbody>	
														</table>
													<?php

														}
													?>
												</div>
											</div>
										</td>
										<td class="center"><?=date('d/m/Y H:i:s')?></td>
									</tr>
									<?php
											}
										}else{
									?>
									<tr class="odd gradeX">
										<td colspan="7" class="center"><strong>Empty</strong></td>
									</tr>							
									<?php
										}
									?>
								</tbody>
							</table>						
						</div>
					</div>
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