<?php if(!empty($result)){?>
	<div class="form-profile pdbt18 mt29 fr_courses_<?=$result->id?>">
		<div class="g_btncv right form_cv">
			<input type="button" value="<?=lang('edit')?>" class="btn-update w187 edit_item" data-form="form_courses" data-type="courses" data-id="<?=$result->id?>"  />
			<a href="javascript:;" class="delete_item p_submit" data-type="courses" data-id="<?=$result->id?>" data-cv="<?=$cv?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
		</div>
		<div class="clearfix"></div>
		<div class="info_text profile">
			<table class="parent_courses_<?=$result->id?>">
				<tr><td><strong><?=lang('courses');?> : </strong></td><td><span class="courses_0"><?=$result->name?></span></td></tr>
				<tr><td><strong><?=lang('training_company');?> : </strong></td><td><span class="courses_1"><?=$result->training_company?></span></td></tr>
				<tr><td><strong><?=lang('time_duration');?> : </strong></td><td><span class="courses_2"><?=$result->time_duration?></span></td></tr>
			</table>
			<div class="clearAll"></div>
		</div>
	</div>
<?php }?>
