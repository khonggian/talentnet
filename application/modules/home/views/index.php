<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$title = language('title');
	$content = language('content');
	$description = language('description');
	$slug = language('slug');
?>
<div class="box-home box-expertise">
	<div class="title1 txt-c"><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title=""><?=$service->$title?></a></div>
	<div class="text1 txt-c mt5"><?=$service->$content?></div>
	<?php if(!empty($hrservices_category)){?>
	<div class="slider-expertise">
		<ul class="bxslider">
			<?php $i = 1;
				foreach($hrservices_category as $hrservices){
			?>
			<li>
				<div class="item-expertise">
					<div class="img">
						<a href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$hrservices->$slug?>" title="<?=$hrservices->$name?>"><img src="<?=img(DIR_UPLOAD_HRSERVICES_CATEGORY.$hrservices->image,276,190)?>" alt="<?=$hrservices->$name?>" /><span class="bg"></span><span class="viewmore"><?=lang('view_more')?></span></a>
					</div>
					<div class="text"><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$hrservices->$slug?>" title="<?=$hrservices->$name?>"><?=CutText($hrservices->$description,100)?></a></div>
					<div class="title bg<?=$i?>"><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$hrservices->$slug?>" title="<?=$hrservices->$name?>"><?=$hrservices->$name?></a></div>
				</div>
			</li>
			<?php $i++;
					$i = $i > 3 ? 1 : $i;
				}
			?>
		</ul>
	</div>
	<?php }?>
</div>

<!-- <div class="box-home box-candidates">
	<div class="title1 txt-c"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title=""><?=lang('For_Candidates')?></a></div>
	<div class="text1 txt-c mt5"><?=lang('Slogan_For_Candidates');?>.</div>
	<div class="mt40">
		<div class="form-candidate">
			<form action="<?=PATH_URL_LANG.link_lang('search_job').link_lang('Job_List')?>" method="get" class="form-horizontal frJobSearch" role="form" id="Form_Search_Jobs">
				<div class="pa-top">
					<div class="input"><input type="text" name="keyword" id="keyword" placeholder="<?=lang('enter_keywords');?>" /></div>
					<input type="button" id="search_job" class="btn-search" value="<?=lang('search');?>" />
				</div>
				<div class="select mt10">
					<select class="js-select" name="function[]" id="function">
						<option value=""><?=lang('All_Functions');?></option>
						<?php if(!empty($function_job)){
								foreach($function_job as $function){
						?>
						<option value="<?=$function->name?>"><?=$function->name?></option>
						<?php }
						}
						?>
					</select>
				</div>
				<div class="select mt10">
					<select class="js-select" name="industry[]" id="industry">
						<option value=""><?=lang('All_Industries');?></option>
						<?php if(!empty($industry_job)){
								foreach($industry_job as $industry){
						?>
						<option value="<?=$industry->slug_en?>"><?=$industry->name_en?></option>
						<?php }
						}
						?>
					</select>
				</div>
				<div class="mt10">
					<div class="select w-146 left">
						<select class="js-select" name="level[]" id="level">
							<option value=""><?=lang('All_Levels');?></option>
							<?php if(!empty($level_job)){
									foreach($level_job as $level){
							?>
							<option value="<?=$level->name?>"><?=$level->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="select w-146 right">
						<select class="js-select" name="location[]" id="location">
							<option value=""><?=lang('All_Locations');?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
							?>
							<option value="<?=$l->name?>"><?=$l->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
		<div class="list-job">
			<div class="row">
				<?php if(!empty($result_jobs)){
					$i = 0;
					foreach($result_jobs as $jobs){
				?>
				<?php if($i==0 || $i%5==0){?>
				<div class="col-md-6">
					<ul>
				<?php } $i++; ?>
						<li>
						<?php if($i < 10){?>
						<a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$jobs->slug?>" title="<?=$jobs->name?>"><?=$jobs->name?></a>
						<?php } else { ?>
						<a class="all-job" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job/job-list':'tim-kiem-viec-lam/danh-sach-cong-viec')?>" title="<?=lang('view_all_jobs')?>"><?=lang('view_all_jobs')?></a>
						<?php }?>
						</li>
				<?php if($i==0 || $i%5==0 || count($result_jobs) <= $i){?>
					</ul>
				</div>
				<?php }
					}
				}
				?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> -->

<div class="box-home box-news">
	<div class="row">
		<div class="col-md-8">
			<div class="title1"><a href="<?=PATH_URL_LANG.url_lang(lang('Information_Center'))?>/<?=url_lang(lang('In_The_News'))?>" title=""><?=lang('In_The_News')?></a></div>
			<div class="mt10"></div>
			<div class="row">
				<?php if(!empty($in_the_news)){?>
				<div class="col-sm-6">
					<div class="item-news">
						<div class="img"><a href="<?=!empty($in_the_news[0]->link)?$in_the_news[0]->link:'javascript:;'?>" title="<?=CutText($in_the_news[0]->$name,80)?>"><img src="<?=img(DIR_UPLOAD_INFORMATION.$in_the_news[0]->image,300,185)?>" alt="<?=$in_the_news[0]->$name?>" /></a></div>
						<div class="date mt10"><?=date('d M Y', strtotime($in_the_news[0]->created));?></div>
						<div class="title mt10 fs15"><a href="<?=!empty($in_the_news[0]->link)?$in_the_news[0]->link:'javascript:;'?>"><?=CutText($in_the_news[0]->$name,80)?></a></div>
						<div class="descript mt10 fs13"><?=CutText($in_the_news[0]->$description,80)?></div>
					</div>
				</div>
				<div class="col-sm-6 other-news">
					<div class="title"><?=lang('Other_News')?></div>
					<div>
						<?php for($i=1;$i<=3;$i++){?>
						<div class="item-news">
							<div class="img">
								<a href="<?=!empty($in_the_news[$i]->link)?$in_the_news[$i]->link:'javascript:;'?>" title="<?=!empty($in_the_news[$i]->$name)?CutText($in_the_news[$i]->$name,80):''?>">
									<img src="<?=!empty($in_the_news[$i]->image)?img(DIR_UPLOAD_INFORMATION.$in_the_news[$i]->image,100):''?>" alt="<?=$in_the_news[$i]->$name?>" />
								</a>
							</div>
							<div class="text"><a href="<?=!empty($in_the_news[$i]->link)?$in_the_news[$i]->link:'javascript:;'?>" title="<?=!empty($in_the_news[$i]->$name)?CutText($in_the_news[$i]->$name,80):''?>"><?=!empty($in_the_news[$i]->$name)?CutText($in_the_news[$i]->$name,80):''?></a></div>
							<div class="clearfix"></div>
						</div>
						<?php }?>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="col-md-4">
			<div class="title1"><a href="<?=PATH_URL_LANG.url_lang(lang('Information_Center'))?>/<?=url_lang(lang('In_The_News'))?>" title=""><?=lang('Information_Center')?></a></div>
			<?php if(!empty($information_category)){
					foreach($information_category as $info){?>
			<div class="item-news mt10">
				<div class="img"><a href="<?=PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$info->$slug?>" title="<?=CutText($info->$name,50)?>"><img src="<?=img(DIR_UPLOAD_INFORMATION_CATEGORY.$info->image,290,125)?>" alt="<?=$info->$name?>" /></a></div>
				<div class="mt5"><a href="<?=PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$info->$slug?>" title="<?=CutText($info->$name,50)?>"><?=CutText($info->$name,50)?></a></div>
			</div>
			<?php }
			}
			?>
		</div>
	</div>
</div>
<?php 
	echo Modules::run('home/footer_block');
?>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
		Page.search_job('search_job','<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>');
	});
</script>