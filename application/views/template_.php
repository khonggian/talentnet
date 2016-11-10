<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta property="og:title" content="<?=$title?>" /> 
<meta property="og:description" content="<?=$meta_description?>" /> 
<meta property="og:image" content="<?=$meta_image?>" /> 
<meta property="og:video" content="<?=$meta_video?>"/>
<meta name="keywords" content="<?=$meta_keywords?>" />
<meta name="description" content="<?=$meta_description?>" />
<title><?=$title?></title>

<?= $_styles ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery-ui/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/reset.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.jscrollpane.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.selectbox.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.bxslider.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fancybox.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/uniform.default.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-theme.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style1.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style2.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/dashboard.css" />

<!--[if IE 8]>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/ie8.css" />
<![endif]-->

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
<?php if($_SERVER['HTTP_HOST'] != 'localhost') echo html_entity_decode($setting->tracking);?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?=base_url()?>assets/js/html5shiv.min.js"></script>
  <script src="<?=base_url()?>assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class="share-bar">
		<div>SHARE</div>
		<div class="mt5"><a href="#" title=""><img src="<?=base_url()?>assets/img/icon/icon-share-face.jpg" alt="" /></a></div>
		<div class="mt5"><a href="#" title=""><img src="<?=base_url()?>assets/img/icon/icon-share-twitter.jpg" alt="" /></a></div>
		<div class="mt5"><a href="#" title=""><img src="<?=base_url()?>assets/img/icon/icon-share-in.jpg" alt="" /></a></div>
		<div class="line"></div>
		<div><a href="#" title=""><img src="<?=base_url()?>assets/img/icon/icon-share-print.jpg" alt="" /></a></div>
		<div class="mt5"><a href="#" title=""><img src="<?=base_url()?>assets/img/icon/icon-share-mail.jpg" alt="" /></a></div>
		<div class="line"></div>
		<div><a href="#" title="" class="back-top">TOP</a></div>
	</div>
	<div class="container">
		<div id="header">
			<div class="header-top unmobile"><a href="#"title="">Career at Talentnet</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Sign in</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Sign Up</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Vietnam HR Awards</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title=""><img src="<?=base_url()?>assets/img/icon/icon-notification.png" alt="" />&nbsp;Notification</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title=""><img src="<?=base_url()?>assets/img/icon/icon-search.png" alt="" />&nbsp;Search</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Tiếng Việt</a></div>
			<div class="logo unmobile">
				<div class="img"><a href="#" title=""><img src="<?=base_url()?>assets/img/logo.png" alt="" /></a></div>
				<div class="text f-bb">
					<p>HCM: <span><img src="<?=base_url()?>assets/img/icon/icon-plus.png" alt="" />84 8 6291 4188</span></p>
					<p>HN: <span><img src="<?=base_url()?>assets/img/icon/icon-plus.png" alt="" />84 4 3936 7618 </span></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="menu unmobile">
				<ul class="nav nav-pills">
					<li class="home"><a href="#" class="hover"><span></span></a></li>
					<li class="dropdown about">
						<a class="dropdown-toggle active" data-toggle="dropdown" href="#">About Talentnet<span class="caret"></span></a>
						<div role="menu" class="dropdown-menu">
							<div class="left">
								<ul>
									<li><a href="#">Jobs Seach</a></li>
									<li><a href="#">Jobs list</a></li>
									<li><a href="#">Top CV</a></li>
									<li><a href="#">Submit CV</a></li>
								</ul>
							</div>
							<div class="right">
								<p class="title">Top jobs from<br/>top employers</p>
								<p class="mt15">Working with a wide range of businesses,<br/>including multi-national, joint venture<br/>companies and joint-stock.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					<li class="dropdown service">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">HR Services<span class="caret"></span></a>
						<div role="menu" class="dropdown-menu">
							<div class="left">
								<ul>
									<li><a href="#">Jobs Seach</a></li>
									<li><a href="#">Jobs list</a></li>
									<li><a href="#">Top CV</a></li>
									<li><a href="#">Submit CV</a></li>
								</ul>
							</div>
							<div class="right">
								<p class="title">Top jobs from<br/>top employers</p>
								<p class="mt15">Working with a wide range of businesses,<br/>including multi-national, joint venture<br/>companies and joint-stock.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					<li class="dropdown candidates">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Candidates<span class="caret"></span></a>
						<div role="menu" class="dropdown-menu">
							<div class="left">
								<ul>
									<li><a href="#">Jobs Seach</a></li>
									<li><a href="#">Jobs list</a></li>
									<li><a href="#">Top CV</a></li>
									<li><a href="#">Submit CV</a></li>
								</ul>
							</div>
							<div class="right">
								<p class="title">Top jobs from<br/>top employers</p>
								<p class="mt15">Working with a wide range of businesses,<br/>including multi-national, joint venture<br/>companies and joint-stock.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					<li class="dropdown market">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Market Entry<span class="caret"></span></a>
						<div role="menu" class="dropdown-menu">
							<div class="left">
								<ul>
									<li><a href="#">Jobs Seach</a></li>
									<li><a href="#">Jobs list</a></li>
									<li><a href="#">Top CV</a></li>
									<li><a href="#">Submit CV</a></li>
								</ul>
							</div>
							<div class="right">
								<p class="title">Top jobs from<br/>top employers</p>
								<p class="mt15">Working with a wide range of businesses,<br/>including multi-national, joint venture<br/>companies and joint-stock.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
					<li class="dropdown infomation">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Information Center<span class="caret"></span></a>
						<div role="menu" class="dropdown-menu pull-right">
							<div class="left">
								<ul>
									<li><a href="#">Jobs Seach</a></li>
									<li><a href="#">Jobs list</a></li>
									<li><a href="#">Top CV</a></li>
									<li><a href="#">Submit CV</a></li>
								</ul>
							</div>
							<div class="right">
								<p class="title">Top jobs from<br/>top employers</p>
								<p class="mt15">Working with a wide range of businesses,<br/>including multi-national, joint venture<br/>companies and joint-stock.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
			</div>
			<div class="top-hder mobile">
				<ul>
					<li><a href="">Sign in</a></li>
					<li><a href="">Sign up</a></li>
					<li><a href="" class="nf">Notification</a></li>
					<li>
						<select class="lg">
							<option>EN</option>
							<option>VI</option>
						</select>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="hder mobile">
				<div class="logo"><a href=""><img src="<?=base_url()?>assets/img/logo_mb.png" alt="" /></a></div>
				<ul>
					<li><a href="" class="search"></a></li>
					<li><a href="" class="h_mn"></a></li>
				</ul>
			</div>
		</div>
		
		<div id="content">
			<?=$content?>
		</div>
		
		<div id="footer">
			<div class="contact">
				<div class="row">
					<div class="col-md-8">
						<div class="title mt13">CONTACT US</div>
						<div class="mt5">
							Ho Chi Minh Office: 4th Floor, Star Building, 33 Mac Dinh Chi, District 1,<br/>
							Ho Chi Minh City, Vietnam<br/>
							Phone: +84 8 6291 4188<br/>
							Email: <a href="mailto:contact@talentnet.vn?Subject=Hello%20again" target="_blank">contact@talentnet.vn</a><br/>
						</div>
						<div class="mt13">
							Hanoi Office: Unit 6, 6th Floor, International Center Building, 17 Ngo Quyen,<br/>
							Hoan Kiem, Hanoi, Vietnam<br/>
							Phone: +84 4 3936 7618<br/>
							Email: <a href="mailto:contact-hn@talentnet.vn?Subject=Hello%20again" target="_blank">contact-hn@talentnet.vn</a><br/>
						</div>
					</div>
					<div class="col-md-4 txt-r"><a href="#"title="">FOLLOW US <img src="<?=base_url()?>assets/img/icon/icon-in.png" alt="" /></a></div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-6">Copyright © 2013 Talentnet.</div>
					<div class="col-md-6 txt-r"><a href="#"title="">Site map</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Legal Notices</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span><a href="#"title="">Privacy Policy</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fb-root"></div>
	<script type="text/javascript">
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/all.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));	
	</script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.selectbox-0.2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/dashboard.js"></script>
	<?= $_scripts ?>	
</body>
</html>



<!-- menu mobile -->
			<div class="top-hder mobile">
				<ul>
					<li><a href="">Sign in</a></li>
					<li><a href="">Sign up</a></li>
					<li><a href="" class="nf">Notification</a></li>
					<li>
						<select class="lg">
							<option>EN</option>
							<option>VI</option>
						</select>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="hder mobile">
				<div class="logo"><a href=""><img src="<?=base_url()?>assets/img/logo_mb.png" alt="" /></a></div>
				<ul class="mn_img">
					<li><a href="" class="search"></a></li>
					<li><a href="" class="h_mn"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>