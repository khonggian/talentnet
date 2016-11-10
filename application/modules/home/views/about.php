<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$content = language('content');
	$slug = language('slug');
	$position = language('position');
?>
<div id="about-talent" class="content-bg1 about-page">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-client">
				<h1 class="f-bb"><?=$title?></h1>
				<div class="surely_use">
				<?php if(!empty($about_talentnet)){
				        $counter = 0;
						foreach($about_talentnet as $talentnet){ $counter++;
				?>
				<div class="ab-client">
					<div class="ab-tt f-bb"><?=$talentnet->$name?><a href="javascript:void(0);" class="bullet view_more <?=$counter==1?'active':''?>" title=""><?=lang('view_more')?></a></div>
					<div class="ab-story-ct" <?=$counter==1?'style="display:block"':''?>>
						<?=output_editor($talentnet->$content)?>
					</div>
				</div>
				<?php }
				}
				?>
				</div>
				<?php if(!empty($list_client)){?>
				<div class="ab-client">
					<div class="ab-tt f-bb"><?=lang('clients')?><a class="view_more" href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'list_client')?>" title="<?=lang('clients')?>"><?=lang('view_more')?></a></div>
					<div class="row">
						<div class="owl-wrap-pn">
							<?php foreach($list_client as $client){?>
								<div class="item-logo"><a href="<?php echo $client->link; ?>" target="_blank"><img src="<?=img(DIR_UPLOAD_CLIENT.$client->image,120,60)?>" alt="<?=$client->$name?>" /></a></div>
							<?php }?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php }?>
				<?php if(!empty($executive_team)){?>
				<div class="ab-exec">
					<div class="ab-tt f-bb"><?=lang('Executive_team')?><a class="view_more" href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team')?>" title="<?=lang('Executive_team')?>"><?=lang('view_more')?></a></div>
					<div class="user-exec pc">
						<div class="owl-user-exec">
							<?php foreach($executive_team as $team){?>
								<div class="item-exec">
									<div class="item-execl"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$team->image,90,110)?>" alt="<?=$team->$name?>" /></a></div>
									<div class="item-execr"><p class="name"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><?=$team->$name?></a></p><p class="job"><?=CutText($team->$position,60)?></p></div>
									<div class="clear"></div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
				<?php }?>
				<div class="ab-client">
					<div class="ab-tt f-bb"><?=lang('Awards')?><a class="view_more" href="<?=PATH_URL_LANG.url_lang(lang('Awards'))?>" title="<?=lang('Partners')?>"><?=lang('view_more')?></a></div>
					<div class="row">
						<div class="owl-wrap-pn">
							<?php
							$name=language('name');
							 foreach($about_award as $award){?>
								<div class="item-logo"><a href="<?=PATH_URL_LANG.url_lang(lang('Awards'))?>" title="<?=$award->$name?>" ><img src="<?=img(DIR_UPLOAD_AWARDS.$award->image,150,75)?>" alt="<?=$award->$name?>" /></a></div>
							<?php }?>
						</div>
						<div class="clearfix"></div>
					</div>	
					
				</div>
				<?php if(!empty($list_partners)){?>
				<div class="ab-client">
					<div class="ab-tt f-bb"><?=lang('Partners')?><a class="view_more" href="<?=PATH_URL_LANG.url_lang(lang('Partners'))?>" title="<?=lang('Partners')?>"><?=lang('view_more')?></a></div>
					<div class="row">
						<div class="owl-wrap-pn">
							<?php foreach($list_partners as $partners){?>
								<div class="item-logo"><a href="<?=PATH_URL_LANG.url_lang(lang('Partners'))?>" title="<?=$partners->$name?>" ><img src="<?=img(DIR_UPLOAD_PARTNERS.$partners->image,236,73)?>" alt="<?=$partners->$name?>" /></a></div>
							<?php }?>
						</div>
					</div>
				</div>
				<?php }?>
				
			</div>
		</div>
		<div class="ab-r col-md-4">
            <?=modules::run('block/endorse',1)?>
            <?=modules::run('block/brochure')?>
			<?=modules::run('block/you_surely_use')?>
			<?=modules::run('home/in_the_news')?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>