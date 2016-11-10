<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$content = language('content');
	$slug = language('slug');
	$position = language('position');
?>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=$title?></h1>
				<div class="surely_use">
				<?php if(!empty($about_talentnet)){
				        $counter = 0;
						foreach($about_talentnet as $talentnet){ $counter++;
				?>
				<div class="ab-story">
					<h2 class="f-bb"><a href="javascript:void(0);" class="bullet <?=$counter==1?'active':''?>" title=""></a><?=$talentnet->$name?></h2>
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
					<div class="ab-tt f-bb"><?=lang('clients')?><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'list_client')?>" title="<?=lang('clients')?>"><?=lang('view_more')?></a></div>
					<div class="row">
						<?php foreach($list_client as $client){
						?>
						<div class="col-md-3">
							<a href="javascript:void(0);" title="<?=$client->$name?>">
								<img src="<?=img(DIR_UPLOAD_CLIENT.$client->image,104,39)?>" alt="<?=$client->$name?>" />
							</a>
						</div>
						<?php }?>
					</div>
				</div>
				<?php }?>
				<?php if(!empty($executive_team)){?>
				<div class="ab-exec">
					<div class="ab-tt f-bb"><?=lang('Executive_team')?><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team')?>" title="<?=lang('Executive_team')?>"><?=lang('view_all')?></a></div>
					<div class="user-exec pc">
						<ul class="bxslider">
							<?php foreach($executive_team as $team){?>
							<li>
								<div class="item-exec">
									<div class="left item-execl"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$team->image,90,110)?>" alt="" /></a></div>
									<div class="left item-execr"><p class="name"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><?=$team->$name?></a></p><p class="job"><?=$team->$position?></p></div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
					<div class="user-exec androi">
						<ul class="bxslider">
							<?php foreach($executive_team as $team){?>
							<li>
								<div class="item-exec">
									<div class="left item-execl"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$team->image,90,110)?>" alt="" /></a></div>
									<div class="left item-execr"><p class="name"><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'executive_team').'/'.$team->$slug?>" title="<?=$team->$name?>"><?=$team->$name?></a></p><p class="job"><?=$team->$position?></p></div>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<?php }?>
				<div class="ab-story">
					<h2 class="f-bb"><a href="javascript:void(0);" title=""></a><?=!empty($about_award)?$about_award->$name:''?></h2>
					<div class="ab-story-ct">
						<?=!empty($about_award)?output_editor($about_award->$content):''?>
					</div>
				</div>
				<?php if(!empty($list_partners)){?>
				<div class="ab-client">
					<div class="ab-tt f-bb"><?=lang('Partners')?><a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'list_partner')?>" title="<?=lang('Partners')?>"><?=lang('view_more')?></a></div>
					<div class="row">
						<?php foreach($list_partners as $partners){?>
						<div class="col-md-3">
							<a href="<?=PATH_URL_LANG.filter_link($this->uri->segment(1),'list_partner')?>" title="<?=$partners->$name?>"><img src="<?=img(DIR_UPLOAD_PARTNERS.$partners->image,104,39)?>" alt="<?=$partners->$name?>" /></a>
						</div>
						<?php }?>
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
