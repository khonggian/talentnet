<?=modules::run('home/banner',uri_string())?>
<?php
	$name        = language('name');
	$description = language('description');
	$slug        = language('slug');
	$content     = language('content');
?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a title="<?=lang('Sharing_Corner')?>" href="<?=PATH_URL_LANG?><?=toSlug(lang('Sharing_Corner'))?>"><?=lang('Sharing_Corner')?></a><span class="active"><?=$result->$name?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=$result->$name?></h1>
               <div class="date-bar-detail">
					<div class="row">
						<div class="col-sm-4"><?=date('d/m/Y , H:i',strtotime($result->created))?></div>
					</div>
				</div>
				<div class="detail-descript">
					<?=output_editor($result->$content)?>
				</div>
				<div class="other_post">
					<?php 
						if($other_post){
					?>
						<h2 class="f-bb"><?=lang('other_post')?></h2>
					<?php
							foreach ($other_post as $row) {
					?>
						<div class="item-other">
							<a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$row->{'slug_'.$this->uri->segment(1)}?>" title="<?=$row->{'name_'.$this->uri->segment(1)}?>"><?=$row->{'name_'.$this->uri->segment(1)}?></a>
						</div>
					<?php
							}
						}
					?>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4">
            
			<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=lang('Information_Center')?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely">
								<a class="f-bb" href="<?=PATH_URL_LANG.toSlug(lang('Information_Center')).'/'.$c->{$slug}?>" title="<?=$c->$name?>"><?=$c->$name?></a>
							</div>
						</div>
					<?php }
					}
					?>
				</div>
			</div>
			
            <?php if($type != 'market_entry'){?>
                <?=modules::run('block/you_surely_use')?>
            <?php }?>
			<?php if($type != 'information_center'){?>
			<?=modules::run('block/brochure')?>
			<?php }?>
			<?//=modules::run('home/services')?>
			
			<?=modules::run('home/in_the_news')?>
			
			<?php if($type != 'information_center'){?>
            
			
            <?=modules::run('home/client')?>
			<?php }?>
		</div>
	</div>
</div>
