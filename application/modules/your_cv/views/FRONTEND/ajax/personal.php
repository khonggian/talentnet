<?php if(!empty($result)){
	$dir = $your_cv_id ? DIR_UPLOAD_AVATAR : DIR_UPLOAD_TMP;
?>
<div class="form-profile pdbt18 mt20 fr_personal_<?=$result->id?>" >
	<div class="g_btncv right">
		<div class="g_btncv right form_cv">
		<input type="button" class="edit_item btn-update w187 <?=$your_cv_id?'hide':''?>" data-form="form_personal" data-type="personal" data-id="<?=$result->id?>" value="<?=lang('edit').' '.lang('personal')?>" />
		<!-- <a href="javascript:;" class="delete_item p_submit" data-type="personal" data-id="<?=$result->id?>" data-cv="<?=$your_cv_id?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a> -->
	</div>
	<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	<div class="info_text">
		<div class="per_img left">
			<img src="<?=img($dir.$result->avatar,164,196)?>" alt="" /> <br>
		</div>
		<div class="text_pf left">
			<div class="per_name"><?=$result->fullname?></div>
			<div class="per_info parent_personal_<?=$result->id?>">
				<ul>
					<li><strong><?=lang('Birthday');?>:</strong> <?=date('d/m/Y',strtotime($result->birthday))?></li>
					<li><strong><?=lang('POB');?>:</strong>  <?=$result->place_of_brith?></li>
					<li><strong><?=lang('Nationlity');?>:</strong> <?=$result->nationlity?></li>
					<li><strong><?=lang('gender');?>:</strong> <?=$result->gender?></li>
					<li><strong><?=lang('Marital_status');?>:</strong> <?=$result->marital?></li>
					<li><strong><?=lang('email');?>:</strong>  <?=$result->email?></li>
					<li><strong><?=lang('home_phone');?>:</strong> <?=$result->home_phone?></li>						
				</ul>
				<ul>
					<li><strong><?=lang('mobile');?>:</strong> <?=$result->mobile?></li>
					<li><strong><?=lang('address');?>:</strong> <?=$result->address?></li>
					<li><strong><?=lang('Country');?>:</strong> <?=$result->country?></li>
					<li><strong><?=lang('Location');?>:</strong> <?=$result->province?></li>
					<li><strong><?=lang('city');?>:</strong> <?=$result->city?></li>
					<li><strong><?=lang('Computer_Skill');?>:</strong> <?=$result->computer_skill?></li>					
					<li><strong><?=lang('Skills');?>:</strong> <?=$result->other_skill?></li>
					
				</ul>
				<div class="clearAll"></div>
			</div>
		</div>
		<div class="clearAll"></div>
	</div>
</div>
<?php }?>
