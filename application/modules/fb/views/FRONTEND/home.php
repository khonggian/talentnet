<script type="text/javascript">
	$(function(){
		
		$('.btnSelectFriend').click(function(){
			console.log('btnSelectFriend');
			Facebook.shareFriend('Share friend', 3, callback_share);
		});			
	});
	function callback_share(data){
		console.log(data);
	}		
</script>
<a href="javascript:;" >Token nè: <?=$this->security->get_csrf_hash();?></a>
<a href="javascript:;" class="btnSelectFriend">Friend</a>
<a href="<?=base_url()?>fb/post_test">Post Wall</a>
