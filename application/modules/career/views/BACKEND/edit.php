<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
   <div class="span12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			Career <small>Page Edit</small>
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

				<div class="control-group" id="pid">
					<label class="control-label">Function</label>
					<div class="controls">
						<select class="span6 chosen" data-placeholder="Choose a Function" tabindex="1" name="function">
							<?php
								if(!empty($career_category)){
									$selected= (!empty($result->function)) ? $result->function : 0;
									foreach($career_category as $row){
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
				<div class="control-group" id="pid">
					<label class="control-label">Location</label>
					<div class="controls">
						<select class="span6 chosen" data-placeholder="Choose a Province" tabindex="1" name="pid">
							<?php
								if(!empty($provinces)){
									$selected= (!empty($result->work_location)) ? $result->work_location : 0;
									foreach($provinces as $row){
							?>
							<option value="<?=$row->id?>" <?=($row->id==$selected) ? 'selected' : ''?>><?=$row->name?></option>
							<?php
									}
								}
							?>
						</select>
						<span class="help-inline"></span>
						<div class="clearAll"></div>
				  </div>
				</div>

				<div class="control-group" id="pid">
					<label class="control-label">Level</label>
					<div class="controls">
						<select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1" name="level">
							<option value="Assistant" <?=(isset($result->level) &&  $result->level == 'Assistant') ? 'selected' : ''?>> Assistant </option>
							<option value="Consultant" <?=(isset($result->level) &&  $result->level== 'Consultant') ? 'selected' : ''?>> Consultant </option>
							<option value="Senior-Consultant" <?=(isset($result->level) &&  $result->level== 'Senior-Consultant') ? 'selected' : ''?>> Senior Consultant </option>
							<option value="Supervisor" <?=(isset($result->level) &&  $result->level== 'Supervisor') ? 'selected' : ''?>> Supervisor </option>
							<option value="Deputy-Manager" <?=(isset($result->level) &&  $result->level== 'Deputy-Manager') ? 'selected' : ''?>> Deputy Manager </option>
							<option value="Manager" <?=(isset($result->level) &&  $result->level== 'Manager ') ? 'selected' : ''?>> Manager  </option>
						</select>
						<span class="help-inline"></span>
						<div class="clearAll"></div>
				  	</div>
				</div>



				<?php if(!empty($form)) echo modules::run('adminwz/form', $form);?>




				<div class="form-actions">
					<input type="hidden" name="id" value="<?=(int)$this->input->get('id')?>" />
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
});
</script>