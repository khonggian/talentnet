<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>No Like</title>
<style type="text/css">
*{margin:0px;padding:0px;}
</style>
<script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
<?php if($_SERVER['HTTP_HOST'] != 'localhost') echo html_entity_decode($setting->tracking);?>	
</head>
<body>	
	<img src="<?=base_url()?>assets/img/facebook/nolike.png" alt="" />
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
			  appId      : '<?=FB_APP_ID?>',
			  status     : true,
			  xfbml      : true
			});
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/all.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
		window.fbAsyncInit = function(){
			FB.Canvas.setSize({width:810,height:document.body.offsetHeight+20});
			setTimeout("FB.Canvas.setAutoGrow()", 100);		
		}
	</script>		
</body>
</html>