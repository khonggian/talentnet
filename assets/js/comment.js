$(function(){
	$('.time.ago').timeago();

	$(document).on('click', '.btnCommentSend', function(){
		var $this= $(this);
		var pid= $(this).closest('.comment-item').attr('data-id');
		var nid= $(this).closest('.block-comment').attr('data-nid');
		var type= $(this).closest('.block-comment').attr('data-type');
		var $parent= $(this).closest('.comment-form');
		var point= $(this).closest('.block-comment').attr('data-point');
		var page= $(this).closest('.comment-page').attr('data-page');
		var $textComment= $parent.find('#textComment');
		var content= $parent.find('#textComment').val();
		
		if(content){
			$.post(
				base_url + 'comment/post',
				{
					token	: 	token,
					pid		:	pid,
					nid		:	nid,
					type	:	type,
					content	:	content,
					point	: 	point,
					page	: 	page
				},
				function(data){
					if(data.st == 'SUCCESS'){
						$textComment.val('');
						if($this.closest('.block-comment').find('.comment-page[data-page="'+data.pageNum+'"]').length){
							$this.closest('.block-comment').find('.comment-page[data-page="'+data.pageNum+'"]').html(data.html);
						}else{
							$this.closest('.block-comment').find('.comment-list').append(data.html);
							
						}
					}
				},'json'
			);
		}
	});
	
	$(document).on('click', '.comment-reply-text .reply', function(){
		var reply_form= '<div class="comment-form comment-reply-form">';
		reply_form+= '<div class="text">';
		reply_form+=  '<textarea name="textComment" id="textComment" cols="30" rows="10"></textarea>';
		reply_form+= '</div>';
		reply_form+= '<input class="btnCommentSend" type="button" value="Gửi" />';
		reply_form+= '<div class="clearAll"></div>';
		reply_form+= '</div>';
		
		$('.comment-reply-form').remove();
		$(this).closest('.comment-reply-text').append(reply_form);
	});
	
	$(document).on('click', '.btnCommentLoadmore', function(){
		var $this= $(this);
		var nid= $(this).closest('.block-comment').attr('data-nid');
		var type= $(this).closest('.block-comment').attr('data-type');	
		var $parent= $(this).closest('.block-comment');		
		var point= $parent.attr('data-point');
		var page= $(this).attr('data-page');
		
		$.post(
			base_url + 'comment/load',
			{
				token	:	token,
				nid		: 	nid,
				type	: 	type,
				point	: 	point,
				page	: 	page
			},
			function(data){
				if(data.st == 'SUCCESS'){
					if(data.pageNext == 0) $this.parent().remove();
					
					$this.attr({'data-page': data.pageNext});
					$parent.find('.comment-list').append(data.html);
				}
			},'json'
		);
	});
});