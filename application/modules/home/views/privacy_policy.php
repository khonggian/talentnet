<?php
	$policy = language('policy');
?>
<div id="news-talent" class="content-bg1 licenter fix-pager">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active">Legal Notices</span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about faq">
				<h1 class="f-bb">Privacy Policy</h1>
				<div class="wr-licenter">
					<?php if($result){ ?>
						<?=$result->$policy?>
					<?php } ?>
				</div>
				
			</div>
		</div>
		<div class="ab-r col-md-4">
            <?=modules::run('block/you_surely_use')?>
			<?=modules::run('block/brochure')?>
			<?=modules::run('home/in_the_news')?>
		</div>
	</div>
</div>