<?php
	$name = language('name');
	$description = language('description');
?>
<div class="ab-services">
	<div class="ab-services-tt f-bb"><?=lang('services')?><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="<?=lang('services')?>"><?=lang('View_all')?></a></div>
	<div class="ab-services-item">
		<?php if(!empty($result)){
				foreach($result as $r){?>
				<div class="row">
					<div class="col-md-3"><img src="<?=img(DIR_UPLOAD_HRSERVICES_CATEGORY.$r->image,83,57)?>" alt="" /></div>
					<div class="col-md-9">
						<div class="ab-services-item-tt f-bb"><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="<?=CutText($r->$name,30)?>"><?=CutText($r->$name,50)?></a></div>
						<div class="ab-services-item-if"><?=CutText($r->$description,70)?></div>
					</div>
				</div>
		<?php }
		}
		?>
	</div>
</div>