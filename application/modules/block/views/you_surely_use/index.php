<?php
    $service_name= language('name');
?>
<div class="ab-surely">
	<div class="ab-surely-tt f-bb"><?=lang('you_surely_use');?></div>
	<div class="tab-surely">
		
<?php if(!empty($list_hrservice)){?>
			
				
					<?php foreach($list_hrservice as $row){
					?>
					<div class="item-surely ab">
						<div class="btn-surely"><a class="f-bb" href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'hr_services',0).'/'.$row->{'slug_'.$this->uri->segment(1)}?>" title="<?=$row->$service_name?>"><?=$row->$service_name?></a></div>
					</div>
					<?php }?>
				
		
			<?php }?>

		<div class="item-surely ab">
			<div class="btn-surely"><a class="f-bb" href="<?=PATH_URL_LANG.url_lang(lang('Market_Entry'))?>" title=""><?=lang('Market_Entry')?></a></div>
		</div>
	</div>
</div>