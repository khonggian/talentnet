<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$slug = language('slug');
	$position = language('position');
?>
<div id="news-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<h1 class="f-bb"><?=$title?></h1>
				<div class="it-group">
				<?php if(!empty($result)){
						$i = 0;
						foreach($result as $r){?>
						<?php if($i==0 || $i%2==0){?>
						<div class="row_item_team">
						<?php }$i++;?>
							<div class="team_item">
								<div class="img left">
									<a href="<?=current_url().'/'.$r->$slug?>" title="<?=$r->$name?>"><img src="<?=img(DIR_UPLOAD_EXECUTIVE_TEAM.$r->image,95,115)?>" alt="<?=$r->$name?>" /></a>
								</div>
								<div class="text left">
									<div class="name"><a href="<?=current_url().'/'.$r->$slug?>" title="<?=$r->$name?>"><?=$r->$name?></a></div>
									<div class="info"><?=$r->$position?></div>
								</div>
								<div class="clearfix"></div>
							</div>
						<?php if($i%2==0 || count($result) <= $i){?>
							<div class="clearfix"></div>
						</div>
						<?php }?>
				<?php 
					}
				}
				?>
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