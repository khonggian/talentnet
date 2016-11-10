<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div class="ab-surely">
	<!--<div class="ab-surely-tt new f-bb"><?=$title?></div>-->
    <div class="ab-surely-tt f-bb"><?=$title?></div>
	<div class="ab-interest">
		<?php if(!empty($in_the_news)){
				foreach($in_the_news as $the_news){
		?>
		<div class="ab-interest-item">
			<a href="<?=$the_news->link?>" title="<?=CutText($the_news->$name,80)?>"><?=CutText($the_news->$name,80)?></a>
			<p><?=date('d/m/Y',strtotime($the_news->created))?></p>
		</div>
		<?php
		}
		?>
		<?php if(count($in_the_news) ==5){?><a class="ab-view-all" href="<?=PATH_URL_LANG.url_lang(lang('Information_Center')).'/talentnet-viewpoints'?>" title="<?=lang('View_all')?>"><?=lang('View_all')?></a><?php }?>
		<?php
		}
		?>
	</div>
</div>