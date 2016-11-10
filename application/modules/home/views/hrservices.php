<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$content = language('content');
	$slug = language('slug');
?>
<div id="about-talent" class="content-bg1 hr-services">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('hr_services')?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=lang('hr_services')?></h1>
				<div class="surely_use">
					<?php if(!empty($category)){
						$i = 0;
					?>

						<?php foreach($category as $c){?>
						<div class="ab-story">
							<!-- <h2 class="f-bb"><a href="javascript:void(0);" class="bullet active" title=""></a><a title="<?=$c->$name?>" href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$c->$slug?>"><?=$c->$name?></a></h2> -->
							<div class="tt-tab f-bb"><a title="<?=$c->$name?>" href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$c->$slug?>"><?=$c->$name?> </a><a class="view_more" title="<?=$c->$name?>" href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$c->$slug?>">View more</a></div>
							
							<div class="ab-story-ct" style="display:block">
								<p><?=output_editor($c->$description)?></p>
							</div>
						</div>
						
						<?php }?>
						
					
					<?php }?>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4 hr">
            <?=modules::run('block/endorse',2)?>
			<?=modules::run('block/brochure')?>
			<?=modules::run('block/you_surely_use')?>			
			<?=modules::run('home/in_the_news')?>
			<?php //modules::run('block/salary_calc_for','employee')?>
			

		</div>
	</div>
</div>