<?php if(!empty($result)){?>
<div class="form-profile pdbt18 mt29 fr_education_<?=$result->id?>">
	<div class="g_btncv right form_cv">
		<input type="button" value="<?=lang('edit')?>" class="edit_item btn-update w187" data-form="form_education" data-type="education" data-id="<?=$result->id?>" />
		<a href="javascript:;" class="delete_item p_submit" data-type="education" data-id="<?=$result->id?>" data-cv="<?=$cv?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
	</div>
	<div class="clearfix"></div>
	<div class="info_text profile">
		<table class="parent_education_<?=$result->id?>">
			<tr><td><strong><?=lang('education_type');?> : </strong></td><td><span class="education_0"><?=$result->education_type?></span></td></tr>
			<tr><td><strong><?=lang('Degree');?> : </strong></td><td><span class="education_1" data-id="<?=$result->degree_id?>"><?=$result->degree_id?></span></td></tr>
			<tr><td><strong><?=lang('education_name');?> : </strong></td><td><span class="education_2"><?=$result->education_name?></span></td></tr>
			<tr><td><strong><?=lang('Major');?> : </strong></td><td><span class="education_3"><?=$result->major?></span></td></tr>
			<tr><td><strong><?=lang('From');?> : </strong></td><td><span class="education_4"><?=date('d/m/Y',strtotime($result->from))?></span></td></tr>
			<tr><td><strong><?=lang('To')?> : </strong></td><td><span class="education_5"><?=date('d/m/Y',strtotime($result->to))?></span></td></tr>
			<tr><td><strong><?=lang('Achievement');?> : </strong></td><td><span class="education_6"><?=$result->achievement?></span></td></tr>
		</table>
		<div class="clearAll"></div>
	</div>
</div>
<?php }?>