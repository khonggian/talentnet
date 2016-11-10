<?php if(!empty($result)){?>
<div class="form-profile pdbt18 mt29 fr_skill_language_<?=$result->id?>">
	<div class="info_text profile sub">
		<div class="border_sub">
			<div class="parent_skill_language_<?=$result->id?>">
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="btn-update col-3 edit_item"  data-form="form_skill_language" data-type="skill_language" data-id="<?=$result->id?>" />
					<input type="button" value="<?=lang('delete')?>" class="btn-update col-3 delete_item p_submit" data-type="skill_language" data-id="<?=$result->id?>" data-cv="<?=$cv?>" />
				</div>
				<div class="clearAll"></div>
				<table class="sub_info">
					<tr><td><strong><?=lang('Specify_name');?> : </strong></td><td><span class="skill_language_0"><?=$result->specify_name?></span></td></tr>
					<tr><td><strong><?=lang('Level');?> : </strong></td><td><span class="skill_language_1" data-id="<?=$result->level?>"><?=$result->level?></span></td></tr>
					<tr><td><strong>Note : </strong></td><td><span class="skill_language_2"><?=$result->name?></span></td></tr>
				</table>
				
			</div>
		</div>	
	</div>
</div>
<?php }?>