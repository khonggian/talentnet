<?php if($is_laguage == 1){ ?>
<div class="select select_483 left">
	<select name="specify_name" id="specify_name" class="input field_data val js-select">
		<option value=""><?=lang('Specify_name');?></option>
		<?php if(!empty($countries)){
				foreach($countries as $tries){?>
				<option <?=$selected==$tries->name?'selected="selectedt"':''?> value="<?=$tries->name?>"><?=$tries->name?></option>
		<?php }
		}
		?>
	</select>
</div>
<?php }else{?>
<div class="input">
	<input type="text" name="specify_name" id="specify_name" class="field_data val" maxlength="255" value="" placeholder="<?=lang('Specify_name');?>"/>
</div>
<?php }?>
