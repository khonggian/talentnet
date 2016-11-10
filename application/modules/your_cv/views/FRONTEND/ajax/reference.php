<?php if(!empty($result)){?>
	<div class="form-profile pdbt18 mt29 fr_reference_<?=$result->id?>">
		<div class="g_btncv right form_cv">
			<input type="button" value="<?=lang('edit')?>" class="btn-update w187 edit_item" data-form="form_reference" data-type="reference" data-id="<?=$result->id?>"  />
			<a href="javascript:;" class="delete_item p_submit" data-type="reference" data-id="<?=$result->id?>" data-cv="<?=$cv?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
		</div>
		<div class="clearfix"></div>
		<div class="info_text profile">
			<table class="parent_reference_<?=$result->id?>">
				<tr><td><strong><?=lang('name');?> : </strong></td><td><span class="reference_0"><?=$result->name?></span></td></tr>
				<tr><td><strong><?=lang('Company');?> : </strong></td><td><span class="reference_1"><?=$result->company?></span></td></tr>
				<tr><td><strong><?=lang('Title');?> : </strong></td><td><span class="reference_2"><?=$result->title?></span></td></tr>
				<tr><td><strong><?=lang('Relationship');?> : </strong></td><td><span class="reference_3"><?=$result->relationship?></span></td></tr>
				<tr><td><strong><?=lang('email');?> : </strong></td><td><span class="reference_4"><?=$result->email?></span></td></tr>
				<tr><td><strong><?=lang('phone');?> : </strong></td><td><span class="reference_5"><?=$result->phone?></span></td></tr>
			</table>
			<div class="clearAll"></div>
		</div>
	</div>
<?php }?>
