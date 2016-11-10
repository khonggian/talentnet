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
				<div class="date-bar">
					<form action="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug?>" method="GET">
						<div class="text"><?=lang('search_by');?></div>
						<div class="sl-by">
							<div class="select">
								<select class="js-select" name="order">
									<option value=""><?=lang('choose');?></option>
									<option value="desc" <?=$this->input->get('order') == 'desc' ? 'selected':''?>><?=lang('latest')?></option>
									<option value="asc" <?=$this->input->get('order') == 'asc' ? 'selected':''?>><?=lang('older')?></option>
								</select>
							</div>
							<div class="search"><input type="submit" value="<?=lang('search');?>" class="btn-search" /></div>
							<div class="clearfix"></div>
						</div>
						<div class="input"><input type="text" name="keyword" value="<?=$this->input->get('keyword')?htmlspecialchars($this->input->get('keyword')):''?>" placeholder="<?=lang('enter_keywords');?>" /></div>
					</form>
					<div class="clearfix"></div>
				</div>
				<?php if(!empty($result)){
						$i = 0;
						foreach($result as $r){
						if($i == 0){
							$width = 225;
							$height = 126;
						}else{
							$width = 175;
							$height = 106;
						}
				?>
				<div class="item-news-talent <?=$i==0?'large':''?>">
					<div class="img"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><img src="<?=img($path_img.$r->image,$width,$height)?>" alt="" /></a></div>
					<div class="text">
						<div><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=$r->$name?>"><?=ucfirst(strtolower(CutText($r->$name,70)))?></a></div>
						<div class="date"><?=date('d/m/Y',strtotime($r->created))?></div>
						<div class="mt5"><?=CutText($r->$description,150)?></div>
						<div class="txt-r mt10"><a href="<?=PATH_URL_LANG.$slug_parent.'/'.$g_slug.'/'.$r->$slug?>" title="<?=lang('view_more');?>" class="viewmore"><?=lang('view_more');?></a></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php $i++;
				}
				?>
				<div class="page-bar">
					<?=$pagination?>
					<div class="clearfix"></div>
				</div>
				<?php } else {?>
					<div class="c_update"><?=$this->input->get('keyword')?lang('not_found'):lang('updates')?></div>
				<?php }?>
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