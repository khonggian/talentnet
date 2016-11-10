<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>" title="<?=$title_parent?>"><?=$title_parent?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=$title?></h1>
				<div class="surely_use">
				<?php if(!empty($result)){
						$i = 0;
						foreach($result as $r){
				?>
				<div class="ab-story">
					<h2 class="f-bb"><a href="javascript:void(0);" class="bullet active" title=""></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><?=$r->$name?></a></h2>
					<div class="ab-story-ct" style="display:block">
						<p><?=$r->$description?></p>
					</div>
				</div>
				<!-- <div class="item-news-talent <?=$i==0?'large':''?>">
					<div class="img"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><img src="<?=img($path_img.$r->image,$width,$height)?>" alt="" /></a></div>
					<div class="text">
						<div><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><?=ucfirst(strtolower(CutText($r->$name,70)))?></a></div>
						<div class="date"><?=date('d/m/Y',strtotime($r->created))?></div>
						<div class="mt5"><?=CutText($r->$description,150)?></div>
						<div class="txt-r mt10"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=lang('view_more');?>" class="viewmore"><?=lang('view_more');?></a></div>
					</div>
					<div class="clearfix"></div>
				</div> -->
				<?php 
				}
				?>
				
				<?php } ?>
				</div>	
				<div class="ab-client">
					<div class="ab-tt f-bb">Make An Enquiry</div>
					<div class="border_ata">
						<div class="row ata">
							<img src="<?=base_url()?>assets/img/img_ata.jpg" alt="" />
							<div class="text">
								<div class="tt">Ms. Nguyen Thi An Ha</div>
								<p class="ad">Marketing and Communications Manager</p>
								<p class="ad"><strong>Tel: </strong>+84 8 6291 4188 - 400</p>
								
								<a href="" class="mail">nguyen.t.an.ha@talentnet.vn</a>
							</div>
							<div class="clearAll"></div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4">
            <?php if($type != 'market_entry'){?>
            <?=modules::run('home/subscribe',$get_category->id,$table)?>
            <?=modules::run('block/you_surely_use')?>
			
			<?php }?>
			<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=$title_parent?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely">
								<a class="f-bb <?=$this->uri->segment(3)==$c->$slug?'active':''?>" href="<?=PATH_URL_LANG.($c->slug_en =='faq'?'faq':$slug_parent.'/'.$c->$slug)?>" title="<?=$c->$name?>"><?=$c->$name?></a>
							</div>
						</div>
					<?php }
					}
					?>
					<div class="item-surely">
							<div class="btn-surely">
								<a class="f-bb <?=$this->uri->segment(3)==$c->$slug?'active':''?>" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='vi'?'danh-sach-khach-hang':'clients')?>" title="<?=$c->$name?>"><?=lang('clients_list')?></a>
							</div>
					</div>
				</div>
			</div>
			
			<?php if($type != 'information_center'){?>
			<?=modules::run('block/brochure')?>
			<?php }?>
			<?//=modules::run('home/services')?>
			
			
			<?php if($type != 'information_center'){?>
            
			<?=modules::run('home/in_the_news')?>
            <?=modules::run('home/client')?>
			<?php }?>
		</div>
	</div>
</div>
