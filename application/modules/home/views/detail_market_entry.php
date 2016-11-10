<?php
	$name = language('name');
	$description = language('description');
	$content = language('content');
	$slug = language('slug');
?>
<?=modules::run('home/banner',$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:''))?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:'')?>" title="<?=$title_parent?>"><?=$title_parent?></a><a href="<?=PATH_URL_LANG.$slug_parent.'/'.(!empty($get_category)?$get_category->$slug:'')?>" title="<?=(!empty($get_category)?$get_category->$name:'')?>"><?=(!empty($get_category)?$get_category->$name:'')?></a>
		</div>
		<div class="ab-l col-md-8">
		<?php if(!empty($result)){?>
			<div class="ab-about">
				<h1 class="top-tt"><?=$result->$name?></h1>
				<!-- <div class="banner-main mt10">
					<img src="<?=base_url()?>assets/img/img-news-detail.jpg" class="img-responsive" alt="" />
				</div> -->
				<div class="date-bar-detail">
					<div class="row">
						<div class="col-sm-4"><?=date('d/m/Y, H:i',strtotime($result->created))?></div>
					</div>
				</div>
				<div class="detail-descript">
					<?=output_editor($result->$content)?>
				</div>
				<?php if(!empty($get_tags)){?>
				<div class="news_detail">
                    <div class="col_tag">
					Tag: 
					<?php
							foreach($get_tags as $tags){?>
					<a title="<?=$tags->name?>" href="javascript:void(0);" class="btn-joblist"># <?=$tags->name?></a>
					<?php }
					?>
                    </div>
                    <div class="col_download"></div>
                    <div class="clearAll"></div>
				</div>
				<?php }?>
				
			</div>
			
		<?php }?>
		</div>
		<div class="ab-r col-md-4">
            <?php if($type != 'market_entry'){?>
				<?//=modules::run('home/subscribe',$get_category->id,$table)?>
			<?php } else {?>
				<?=modules::run('block/brochure')?>
			<?php }?>
            <div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=$title_parent?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							foreach($category as $c){
					?>
						<div class="item-surely">
							<div class="btn-surely"><a class="f-bb <?=$this->uri->segment(3)==$c->$slug?'active':''?>" href="<?=PATH_URL_LANG.$slug_parent.'/'.$c->$slug?>" title="<?=$c->$name?>"><?=$c->$name?></a></div>
						</div>
					<?php }
					}
					?>
					<div class="item-surely">
						<div class="btn-surely"><a href="<?=PATH_URL_LANG.url_lang(lang('Client_List'))?>" class=" f-bb <?=($this->uri->segment(2)==url_lang(lang('Client_List')))?'active':''?>" title="<?=lang('Client_List')?>"><?=lang('Client_List')?></a></div>
					</div>
				</div>
			</div>
            <?=modules::run('block/you_surely_use')?>
			<?=modules::run('home/in_the_news','YOU MAY INTEREST',$result->id);?>
		</div>
		
	</div>
</div>