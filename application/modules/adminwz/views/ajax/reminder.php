<div id="reminder">
	<form action="" class="form-horizontal _form" id="_frReninder">
		<h3>Reminder</h3>
		<div class="control-group" id="reminder_time">
			<label class="control-label">Ngày hết hạn<span class="required">*</span></label>
			<div class="controls">
				<div id="reminder_time_datetimepicker" class="input-append date datetime-picker">
					<input data-format="dd/MM/yyyy" type="text" class="m-wrap m-ctrl-medium" name="reminder_time" value="<?=(!empty($result->time)) ? date('d/m/Y', strtotime($result->time)) : '';?>"require="true" ></input>
					<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					</span>
				</div>

				<span for="name" class="help-inline"></span>
			</div>
		</div>
		<div class="control-group" id="reminder_title">
			<label class="control-label">Tiêu đề<span class="required">*</span></label>
			<div class="controls">
				<input type="text" class="span6 s-wrap popovers" name="reminder_title" require="true" value="<?=(!empty($result->title)) ? $result->title : '';?>" />
				<span for="name" class="help-inline"></span>
			</div>
		</div>

		<div class="control-group" id="reminder_content">
			<label class="control-label">Nội dung<span class="required">*</span></label>
			<div class="controls">
				<textarea class="span6 s-wrap popovers" name="reminder_content" require="true" cols="30" rows="10"><?=(!empty($result->content)) ? $result->content : '';?></textarea>
				<span for="name" class="help-inline"></span>
			</div>
		</div>

		<div class="control-group" id="reminder_link">
			<label class="control-label">Link</label>
			<div class="controls">
				<input type="text" class="span6 s-wrap popovers" name="reminder_link" value="<?=(!empty($result->link)) ? $result->link : '';?>" />
				<span for="name" class="help-inline"></span>
			</div>
		</div>

		<div class="form-actions">
			<input type="hidden" name="reminder_id" value="<?=(!empty($result->id)) ? $result->id : 0;?>" />
			<button type="button" class="btn blue" id="btnPostReminder">
				<i class="icon-ok"></i>
				Save
			</button>
			<button type="button" class="btn" onclick="return $.fancybox.close();">Cancel</button>
		</div>
	</form>
</div>
<script type="text/javascript">
$(function(){
	Admin.setupDatetimePicker('reminder', 'time');
});
</script>