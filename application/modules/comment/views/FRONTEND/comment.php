<?php
	if(empty($load)){
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/comment.css" />

	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.8.3.min"></script>
	<script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=393862984055480";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="block-comment" data-nid="1" data-type="news" data-point="<?=(!empty($comment)) ? $comment[count($comment)-1]->id : 0;?>">
		<div class="comment-form">
			<table>
				<tr>
					<td class="td-left">
						<div class="avatar">
							<img src="http://avatar.me.zdn.vn/zme_noavatar50.png" alt="" />
						</div>					
					</td>
					<td class="td-right">
						<div class="text">
							<div class="text-comment">
								<textarea name="textComment" id="textComment" cols="30" rows="10"></textarea>
							</div>
							<div class="text-button">
								<input class="btnCommentSend main" type="button" value="Bình luận" />
							</div>
						</div>					
					</td>
				</tr>
			</table>
			<div class="clearAll"></div>
		</div>

		<div class="comment-list">
<?php
	}
?>		
			<?php
				if(!empty($comment)){
			?>
			<div class="comment-page" data-page="<?=(!empty($pageNum)) ? $pageNum : 1;?>">
			<?php
					foreach($comment as $row){
			?>
			<div class="comment-item" data-id="<?=$row->id?>">
				<div class="avatar">
					<img src="http://avatar.me.zdn.vn/zme_noavatar50.png" alt="" />
				</div>	
				<div class="comment-detail">
					<div class="header">
						<div class="fullname">Trần Sáng Lập</div>
						<div class="time ago"><?=time_ago($row->created);?></div>
						<div class="clearAll"></div>
					</div>
					<div class="content">
						<?=$row->content?>
						<div class="comment-reply-text">
							<a href="javascript:;" class="reply">Trả lời</a>						
						</div>
					</div>
				</div>
				<div class="clearAll"></div>
				<?php if(!empty($row->reply)){ ?>
				<div class="comment-reply">
					<?php
						foreach($row->reply as $reply){
					?>
					<div class="comment-reply-item">
						<div class="avatar">
							<img src="http://avatar.me.zdn.vn/zme_noavatar50.png" alt="" />
						</div>					
						<div class="comment-detail">
							<div class="header">
								<div class="fullname">Trần Sáng Lập</div>
								<div class="time ago"><?=time_ago($reply->created);?></div>
								<div class="clearAll"></div>
							</div>
							<div class="content">
								<?=$reply->content?>
								<div class="comment-reply-text">
									<a href="javascript:;" class="reply">Trả lời</a>						
								</div>								
							</div>
						</div>	
						<div class="clearAll"></div>
					</div>
					<?php
						}
					?>
				</div>
				<?php
					}
				?>
			</div>
			<?php
					}
			?>
			</div>
			<?php
				}
			?>			
<?php
	if(empty($load)){
?>					
		</div>
<?php
	}
?>		
<?php
	if(empty($load)){
?>		
	<?php
		if($totalPage > $pageNum){
	?>
		<div class="comment-loadmore">
			<a href="javascript:;" class="btnCommentLoadmore" data-page="2">Load more</a>
		</div>
	<?php
		}
	?>	
	</div>
	
<div class="fb-comments" data-href="http://localhost/project/admin/code/comment" data-numposts="5" data-colorscheme="light"></div>		
	<script type="text/javascript" src="<?=base_url()?>assets/js/comment.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.timeago.js"></script>
</body>
</html>
<?php
	}
?>