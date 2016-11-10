<?php if(!empty($result)){?>
<div class="form-profile pdbt18 mt29 fr_<?=$result->category == 'Skills' ? 'skill':$result->category == 'Languages'?'language':'computer'?>_<?=$result->id?>">
	<div class="info_text profile sub">
		<div class="border_sub">
			<?php
			$array = array(
					'Skills' => 'Skills',
					'Languages' => 'Languages',
					'Computer Skill' => 'Computer Skill',
				);
			if($result->category == 'Skills'){?>
			<div class="parent_skill_<?=$result->id?>">
				<table class="sub_info">
					<tr><td><strong><?=lang('Category');?> : </strong></td><td><span class="skill_0" data-id="<?=$result->category?>"><?=isset($array[$result->category])? $array[$result->category]:''?></span></tr>td></tr>
					<tr><td><strong><?=lang('Specify_name');?> : </strong></td><td><span class="skill_1"><?=$result->specify_name?></span></tr>td></tr>
					<tr><td><strong><?=lang('Level');?> : </strong></td><td><span class="skill_2" data-id="<?=!empty($result->level_id)?$result->level_id:0?>"><?=!empty($result->level_id)?$result->level_id:''?></span></tr>td></tr>
				</table>
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="btn-update col-3 edit_item" data-form="form_skill_language" data-type="skill" data-id="<?=$result->id?>" />
					<input type="button" value="<?=lang('delete')?>" class="btn-update col-3 delete_item p_submit" data-type="skill" data-id="<?=$result->id?>"  data-cv="<?=$cv?>" />
				</div>
				<div class="clearAll"></div>
			</div>
			<?php } else if($result->category == 'Languages'){?>
			<div class="parent_language_<?=$result->id?>">
				<table class="sub_info">
					<tr><td><strong><?=lang('Category');?> : </strong></td><td><span class="language_0" data-id="<?=$result->category?>"><?=isset($array[$result->category])? $array[$result->category]:''?></span></tr>td></tr>
					<tr><td><strong><?=lang('Specify_name');?> : </strong></td><td><span class="language_1"><?=$result->specify_name?></span></tr>td></tr>
					<tr><td><strong><?=lang('Level');?> : </strong></td><td><span class="language_2" data-id="<?=!empty($result->level_id)?$result->level_id:0?>"><?=!empty($result->level_id)?$result->level_id:''?></span></tr>td></tr>
				</table>
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="btn-update col-3 edit_item is_langguage"  data-form="form_skill_language" data-type="language" data-id="<?=$result->id?>" />
					<input type="button" value="<?=lang('delete')?>" class="btn-update col-3 delete_item p_submit" data-type="language" data-id="<?=$result->id?>" data-cv="<?=$cv?>" />
				</div>
				<div class="clearAll"></div>
			</div>
			<?php } else{?>
			<div class="parent_computer_<?=$result->id?>">
				<table class="sub_info">
					<tr><td><strong><?=lang('Category');?> : </strong></td><td><span class="computer_0" data-id="<?=$result->category?>"><?=isset($array[$result->category])? $array[$result->category]:''?></span></tr>td></tr>
					<tr><td><strong><?=lang('Specify_name');?> : </strong></td><td><span class="computer_1"><?=$result->specify_name?></span></tr>td></tr>
					<tr><td><strong><?=lang('Level');?> : </strong></td><td><span class="computer_2" data-id="<?=!empty($result->level_id)?$result->level_id:0?>"><?=!empty($result->level_id)?$result->level_id:''?></span></tr>td></tr>
				</table>
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="btn-update col-3 edit_item" data-form="form_skill_language" data-type="computer" data-id="<?=$result->id?>" />
					<input type="button" value="<?=lang('delete')?>" class="btn-update col-3 delete_item p_submit" data-type="computer" data-id="<?=$result->id?>" data-cv="<?=$cv?>" />
				</div>
				<div class="clearAll"></div>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }?>