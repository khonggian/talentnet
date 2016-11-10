<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<?php if(!empty($result_client)){?>
<div class="box-banner">
	<div id="logo-owl" class="owl-wrap-pn">
		<?php foreach($result_client as $client){?>
			<div class="item-logo"><a href="<?php if($client->link==''){ echo 'javascript:;'; }else{ echo $client->link; };  ?>" <?php if($client->link==''){  }else{ echo 'target="_blank"'; };  ?>><img src="<?=img(DIR_UPLOAD_CLIENT.$client->image,120,60)?>" alt="<?=$client->$name?>" /></a></div>
		<?php }?>
	</div>
	<div class="clearfix"></div>
</div>
<?php }?>
<div class="box-home home-video mt50">
	<?php if(!empty($comment_client)){?>
	<div class="user-talentnet">
		<ul class="bxslider">
			<?php foreach($comment_client as $comment){?>
			<li>
				<div class="user-about">
					<div class="box-text"><?=$comment->$description?><span class="arrow"></span></div>
					<div class="img">
						<table>
							<tr>
								<td class="img-img"><img src="<?=img(DIR_UPLOAD_AVATAR_COMMENT_LINE.$comment->image,34,34)?>" alt="<?=$comment->$name?>" /></td>
								<td class="text"><?=$comment->$name?></td>
							</tr>
						</table>
					</div>
				</div>
			</li>
			<?php }?>
		</ul>
	</div>
	<?php }?>
	<div class="box-video">
		<ul class="bxslider">
			<?php 
			if($video_home){
				foreach ($video_home as $row) {
			?>
			<li>
				<div class="video">
					<a class="" href="<?=PATH_URL_LANG.'video/'.$row->{language('slug')}?>" title=""><img src="http://i3.ytimg.com/vi/<?=$row->link_youtube?>/0.jpg" alt="<?=$row->{language('name')}?>" /><span class="icon-play"></span></a>
					<div class="description"><a class="" href="<?=PATH_URL_LANG.'video/'.$row->{language('slug')}?>" title=""><span><?=$row->{language('name')}?></span></a></div>
				</div>
			</li>
			<?php
				}
			}
			?>
			
			
		</ul>
	</div>
	<div class="clearfix"></div>
</div>