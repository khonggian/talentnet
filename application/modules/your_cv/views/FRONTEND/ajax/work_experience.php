<?php if(!empty($result)){?>
<div class="form-profile pdbt18 mt29 fr_work_experience_<?=$result->id?>">
	<div class="g_btncv right form_cv">
		<input type="button" class="edit_item btn-update w187" data-form="form_work_experience" data-type="work_experience" data-id="<?=$result->id?>" value="<?=lang('edit')?>" />
		<a href="javascript:;" class="delete_item p_submit" data-type="work_experience" data-id="<?=$result->id?>" data-cv="<?=$cv?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
	</div>
	<div class="clearfix"></div>
	<div class="info_text profile">
		<table class="parent_work_experience_<?=$result->id?>">
			<tr><td><strong><?=lang('Job_title');?> : </strong></td><td><span class="work_experience_0"><?=$result->title?></span></td></tr>
			<tr><td><strong><?=lang('Company');?> : </strong></td><td><span class="work_experience_1"><?=$result->company?></span></td></tr>
			<tr><td><strong><?=lang('industry');?> : </strong></td><td><span class="work_experience_2"><?=$result->industry?></span></td></tr>
			<tr><td><strong><?=lang('From');?> : </strong></td><td><span class="work_experience_3"><?=date('d/m/Y',strtotime($result->from))?></span></td></tr>
			<tr><td><strong><?=lang('To');?> : </strong></td><td><span class="work_experience_4"><?=date('d/m/Y',strtotime($result->to))?></span></td></tr>
			<tr><td><strong><?=lang('Description');?> : </strong></td><td><span class="work_experience_5"><?=nl2br($result->description)?></span></td></tr>
		</table>
		<div class="clearAll"></div>
	</div>
</div>
<?php }?>