<?php
    $lang_name = language('name');
    $lang_position = language('position');
    $lang_description = language('description');
?>
<?=modules::run('home/banner',uri_string())?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.url_lang(lang('Executive_team'))?>" title="<?=lang('Executive_team')?>"><?=lang('Executive_team')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<div class="team-detail">
					<img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$result->image,117,143)?>" alt="<?=$result->$lang_name?>" class="left avatar" />
					<div class="name"><?=$result->$lang_name?></div>
					<div class="position"><strong><?=lang('position')?>:</strong> <?=$result->$lang_position?></div>
					<!-- <p><strong><?=lang('professional_profile')?></strong><br/> -->
					<?=output_editor($result->$lang_description)?>
				</div>
			</div>
		</div>
		<div class="ab-r exe col-md-4">
			<?=modules::run('block/you_surely_use')?>

			<?=modules::run('home/in_the_news')?>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>