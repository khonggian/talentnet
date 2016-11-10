<?=modules::run('home/banner',uri_string())?>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active">Video</span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="top-tt"><?=$video->{'name_'.$this->uri->segment(1)}?></h1>
				<div class="date-bar-detail">
					<div class="row">
						<div class="col-sm-4"><?=date('d-m-Y , H:i',strtotime($video->created))?></div>
					</div>
				</div>
				<div class="detail-descript" style="margin-bottom:20px">
					<iframe id="video_li" src="https://www.youtube.com/embed/<?=$video->link_youtube?>" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4 hr">
			<?=modules::run('block/you_surely_use')?>
			<?=modules::run('home/in_the_news')?>
		</div>
	</div>
</div>