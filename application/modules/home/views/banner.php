<?php if(!empty($banner)){
	$text = language('text');
	$alt = language('alt');
?>
<div class="banner-main">
	<img src="<?=img(DIR_UPLOAD_BANNER.$banner->image,980)?>" class="img-responsive" alt="<?=$banner->$alt?>" />
	<div class="text">
		<div class="title"><?=$banner->$text?$banner->$text:''?></div>
		<div class=""><?php if($banner->link){?><a href="<?=$banner->link?>" title="<?=lang('more_detail');?>" target="_blank" class="viewmore"><?=lang('more_detail');?></a><?php }?></div>
	</div>
</div>
<?php }?>
