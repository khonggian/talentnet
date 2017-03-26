<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta property="og:title"        content='<?=$title?>' />
<meta property="og:url"          content="<?=str_replace("&","&amp;", current_url());?>" />
<meta property="og:description"  content='<?=!empty($meta_description)?$meta_description:''?>' />
<meta property="og:site_name"    content="<?=PATH_URL_LANG?>" />
<meta property="og:language"     content="vi" />
<meta property="og:image"        content="<?=!empty($meta_image)?$meta_image:''?>" />
<meta name="keywords" content='<?=!empty($meta_keywords)?$meta_keywords:''?>' />
<meta name="description" content='<?=!empty($meta_description)?$meta_description:''?>' />
<title><?=$title?></title>

<?= $_styles ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery-ui/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/reset.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.jscrollpane.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.selectbox.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.bxslider.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.fancybox.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/uniform.default.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-theme.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style1.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style2.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/dashboard.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/print.css" media="print" />
<!--[if IE 8]>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/ie8.css" />
<![endif]-->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript">var base_url= '<?=PATH_URL_LANG?>', lang = '<?=$this->uri->segment(1)?>', token= '<?=$this->security->get_csrf_hash();?>';</script>

<script type="text/javascript">
	var root = "<?=base_url()?>";
	var root_lang = "<?=PATH_URL_LANG?>";
</script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?=base_url()?>assets/js/html5shiv.min.js"></script>
  <script src="<?=base_url()?>assets/js/respond.min.js"></script>
<![endif]-->
	<?php if($_SERVER['HTTP_HOST'] != 'localhost') echo html_entity_decode($setting->gtm_code);?>

</head>
<body>
	<?php if($_SERVER['HTTP_HOST'] != 'localhost') echo html_entity_decode($setting->tracking);?>

	<div class="loading"></div>
	<!--<div class="advertise"></div>-->
	<?php $link_body_mail = current_url()?urlencode(current_url()):PATH_URL_LANG;?>
	<div class="mb-share-tt">SHARE</div>
	<div class="share-bar">
		<div class="mb-cl-ss">X</div>
		<div>SHARE</div>
		<div class="mt5"><a href="javascript:void(0)" class="floating_fb" onclick="return window.open ('https://www.facebook.com/sharer/sharer.php?u=<?=urlencode(current_url())?>&amp;t=<?=urlencode($title)?>','mywindow','menubar=0,resizable=1,width=600,height=300');" id="fb_share" title="Chia sẻ Facebook"><img src="<?=base_url()?>assets/img/icon/icon-share-face.jpg" alt="" /></a></div>

		<div class="mt5"><a href="javascript:void(0)" onclick="return window.open ('http://twitter.com/share?text=<?=urlencode($title)?>&url=<?=urlencode(current_url())?>','mywindow','menubar=0,resizable=1,width=600,height=300');" title="Chia sẻ Twitter"><img src="<?=base_url()?>assets/img/icon/icon-share-twitter.jpg" alt="" /></a></div>

		<div class="mt5"><a href="javascript:void(0)" onclick="return window.open ('http://www.linkedin.com/shareArticle?mini=true&url=<?=urlencode(current_url())?>&title=<?=urlencode($title)?>&summary=<?=urlencode($title)?>&source=Tanlennet','mywindow','menubar=0,resizable=1,width=600,height=300');" title="Chia sẻ Linkedin"><img src="<?=base_url()?>assets/img/icon/icon-share-in.jpg" alt="" /></a></div>

		<div class="line"></div>
		<div><a href="javascript:;" id="btPrint" onclick="window.print();" title="Print"><img src="<?=base_url()?>assets/img/icon/icon-share-print.jpg" alt="" /></a></div>
		<div class="mt5"><a href='mailto:?subject=<?php $str_title = str_replace(" ","%20", $title);echo str_replace("&","&amp;", $str_title);?>&amp;body=<?php
				$str_meta_description = str_replace(" ","%20", $meta_description);
				echo str_replace("&","&amp;", $str_meta_description);
				echo '%0D%0A';
				$str_link_body_mail = str_replace(" ","%20", $link_body_mail);
				echo str_replace("&","&amp;", $str_link_body_mail);?>' class="floating_mail" title="Chia sẻ Email"><img src="<?=base_url()?>assets/img/icon/icon-share-mail.jpg" alt="" /></a></div>
		<div class="line"></div>
		<div><a href="javascript:void(0);" title="" class="back-top">UP</a><a href="javascript:void(0);" title="" class="no-top">DOWN</a></div>
	</div>
	<div class="container">
		<div id="header">
			<?php $language_link = !empty($language_link) ? $language_link : '';?>
			<div class="header-top unmobile">
				<ul class="right">
					<?php if(!$this->session->userdata('uid')){?>
					<!-- <li><a class="tt" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" title="<?=lang('Sign_in')?>"><?=lang('Sign_in')?></a>
						<div class="submenu-sign">
												<form class="form-horizontal" role="form" id="_FormLoginT">
												<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
							<div class="ip-text"><input type="text" name="email" class="input_popup_sb" maxlength="100" placeholder="<?=lang('email')?>"/></div>
							<div class="ip-text" style="margin-bottom: 0px;"><input type="password" name="password" class="input_popup_sb" maxlength="100" placeholder="<?=lang('password')?>"/></div>
							<a class="forgot-pass" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'forgot':'quen-mat-khau')?>" title="<?=lang('Forgot_password')?>"><?=lang('Forgot_password')?>?</a>
							<a class="f-bb sub-login right submit_login_popup p_submit" data-form="_FormLoginT" data-type="pLogin" href="javascript:void(0);" title=""><?=lang('sign_in_here')?></a>
							<div class="clearAll"></div>
												<span class="notice error_login_popup"></span>
							<div class="f-bb note-or"><span><?=lang('Or')?></span></div>
							<div class="submenu-all">
								<a href="javascript:;" class="OpenID face" data-title="Facebook Login" data-url="<?=getUrlLoginOpenID('fb');?>"></a>
													<a href="javascript:;" class="OpenID mail" data-title="Google Login" data-url="<?=getUrlLoginOpenID('google');?>"></a>
													<a href="javascript:;" class="OpenID yahoo" data-title="Yahoo Login" data-url="<?=getUrlLoginOpenID('yahoo');?>"></a>
													<a class="OpenID linkedin in" href="javascript:void(0);" data-title="Linkedin Login" data-url="<?=getUrlLoginOpenID('linkedin');?>"></a>
							</div>
												</form>
						</div>
					</li> -->
					<!-- <li><span>&nbsp;-&nbsp;</span></li>
					<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" data-type="submenu-sign" title="<?=lang('Sign_Up')?>"><?=lang('Sign_Up')?></a>
					</li> -->
					<li><span>&nbsp;-&nbsp;</span></li>
					<?php } else { ?>
					<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'account-management':'quan-ly-tai-khoan')?>" title="<?=$this->session->userdata('fullname')?>"><?=$this->session->userdata('fullname')?></a></li>
					<li><span>&nbsp;-&nbsp;</span></li>
					<li><a href="<?=PATH_URL_LANG.'logout'?>" title="<?=lang('Log_out')?>"><?=lang('Log_out')?></a></li>
					<li><span>&nbsp;-&nbsp;</span></li>
					<?php }?>
					<!-- <li><a href="#" title="<?=lang('Career_at_Talentnet')?>"><?=lang('Career_at_Talentnet')?></a></li>
					<li><span>&nbsp;-&nbsp;</span></li> -->
					<li><a href="<?=PATH_URL_LANG?>career" title="">Careers at Talentnet</a></li>
					<li><a class="vnaward" target="_blank" href="http://vietnamhrawards.com/" title="<?=lang('Vietnam_HR_Awards')?>"><?=lang('Vietnam_HR_Awards')?></a></li>
					<li><span>&nbsp;-&nbsp;</span></li>
					<!-- <li style="position:relative" class="hv-noti"><a href="javascript:void(0)" title="" id="show_list_notify"><img src="<?=base_url()?>assets/img/icon/icon-notification.png" alt="" />&nbsp;<?=lang('Notification')?></a>
						<span class="counter_ntf">10</span>
						<div id="box_notification">

							<div class="_top"></div>
							<div class="scrollpane">
								<div class="_body">
									Please subscribe <span <?php if(!$this->session->userdata('uid')){ echo 'class="bl"'; }?> >Job Alert/News/Talentnet Expertise</span> for notifications
								</div>
							</div>
							<div class="_more">
								<a data-limit="5" data-from="0" href="javascript:void(0)"><?=lang('view_more')?></a>
							</div>
							<div class="_bottom"></div>
						</div>
					</li>
					<li><span>&nbsp;-&nbsp;</span></li> -->
					<li><a href="<?=PATH_URL_LANG.toSlug('search')?>" title=""><img src="<?=base_url()?>assets/img/icon/icon-search.png" alt="" />&nbsp;<?=lang('Search')?></a></li>
					<li><span>&nbsp;-&nbsp;</span></li>
					<!-- <li><a class="lang_popup" href="<?=change_lang(base_url().($this->uri->segment(1)=='vi'?'en':'vi'),$language_link)?>" title="<?=$this->uri->segment(1)=='en'?'Tiếng Việt':'English';?>"><?=$this->uri->segment(1)=='en'?'Tiếng Việt':'English';?></a></li> -->
					<div class="clearAll"></div>
				</ul>
				<div class="clearAll"></div>
			</div>
			<div class="logo unmobile">
				<div class="img"><a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><img src="<?=base_url()?>assets/img/logo.png" alt="<?=lang('Homepage')?>" /></a></div>
				<div class="text f-bb">
					<p>HCM: <span><img src="<?=base_url()?>assets/img/icon/icon-plus.png" alt="" />84 8 6291 4188</span></p>
					<p>HN: <span><img src="<?=base_url()?>assets/img/icon/icon-plus.png" alt="" />84 4 3936 7618 </span></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="menu unmobile">
				<?=modules::run('home/menu')?>
			</div>
			<!-- menu mobile -->
			<div class="top-hder mobile">
				<ul>
					<?php if(!$this->session->userdata('uid')){?>
					<li style="display:none;"><a class="tt" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" title="<?=lang('Sign_in')?>"><?=lang('Sign_in')?></a>
						<!-- <div class="submenu-sign">
							<form class="form-horizontal" role="form" id="_FormLoginT">
							<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
							<div class="ip-text"><input type="text" name="email" class="input_popup_sb" maxlength="100" placeholder="<?=lang('email')?>"/></div>
							<div class="ip-text" style="margin-bottom: 0px;"><input type="password" name="password" class="input_popup_sb" maxlength="100" placeholder="<?=lang('password')?>"/></div>
							<a class="forgot-pass" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'forgot':'quen-mat-khau')?>" title="<?=lang('Forgot_password')?>"><?=lang('Forgot_password')?>?</a>
							<a class="f-bb sub-login right submit_login_popup p_submit" data-form="_FormLoginT" data-type="pLogin" href="javascript:void(0);" title=""><?=lang('sign_in_here')?></a>
							<div class="clearAll"></div>
							<span class="notice error_login_popup"></span>
							<div class="f-bb note-or"><span><?=lang('Or')?></span></div>
							<div class="submenu-all">
								<a href="javascript:;" class="OpenID face" data-title="Facebook Login" data-url="<?=getUrlLoginOpenID('fb');?>"></a>
								<a href="javascript:;" class="OpenID mail" data-title="Google Login" data-url="<?=getUrlLoginOpenID('google');?>"></a>
								<a href="javascript:;" class="OpenID yahoo" data-title="Yahoo Login" data-url="<?=getUrlLoginOpenID('yahoo');?>"></a>
								<a class="OpenID linkedin in" href="javascript:void(0);" data-title="Linkedin Login" data-url="<?=getUrlLoginOpenID('linkedin');?>"></a>
							</div>
							</form>
						</div> -->
					</li>
					<li style="display:none;"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" title="<?=lang('Sign_Up')?>"><?=lang('Sign_Up')?></a></li>
					<script type="text/javascript">
						$(document).ready(function(){
							Page.submit_form('login_popup');
							Page.submit_form('login_mobile');
						});
					</script>
					<?php } else { ?>
					<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'account-management':'bang-dieu-khien')?>" title="<?=$this->session->userdata('fullname')?>"><?=$this->session->userdata('fullname')?></a></li>
					<li><a href="<?=PATH_URL_LANG.'logout'?>" title="<?=lang('Log_out')?>"><?=lang('Log_out')?></a></li>
					<?php }?>
					<li style="display:none;"><a href="#" title="<?=lang('Career_at_Talentnet')?>"><?=lang('Career_at_Talentnet')?></a></li>
					<li style="border-left: 0px;"><a class="vnaward" target="_blank" href="http://vietnamhrawards.com/" title="<?=lang('Vietnam_HR_Awards')?>"><?=lang('Vietnam_HR_Awards')?></a></li>

					<li>
						<a href="javascript: void(0);" class="nf">Notification</a>
						<span class="counter_ntf mb-nt">10</span>
						<div id="box_notification" class="mb-nf">

							<div class="_top"></div>
							<div class="scrollpane">
								<div class="_body">
									Please subscribe <span <?php if(!$this->session->userdata('uid')){ echo 'class="bl"'; }?> >Job Alert/News/Talentnet Expertise</span> for notifications
								</div>
							</div>
							<!--<div class="_more">
								<a data-limit="5" data-from="0" href="javascript:void(0)"><?=lang('view_more')?></a>
							</div>-->
							<div class="_bottom"></div>
						</div>
					</li>
					<!-- <li>
						<select class="lg change_lang">
							<option value="<?=change_lang(base_url().'en',$language_link)?>">EN</option>
							<option value="<?=change_lang(base_url().'vi',$language_link)?>">VI</option>
						</select>
					</li> -->
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="hder mobile">
				<div class="logo"><a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><img src="<?=base_url()?>assets/img/logo_mb.png" alt="" /></a></div>
				<ul class="mn_btn">
					<li><a href="javascript: void(0);" class="search"></a></li>
					<li><a href="javascript: void(0);" class="h_mn"></a></li>
				</ul>
				<div class="clearfix"></div>
				<?=modules::run('home/menu','_mobile')?>
			</div>
		</div>

		<div id="content">
			<?=$content?>
		</div>

		<div id="footer">
			<div class="contact">
				<div class="row">
					<div class="col-md-8">
						<div class="title mt13"><?=lang('contact_us');?></div>
						<?=Modules::run('home/contact');?>
					</div>
					<div class="col-md-4 txt-r">
						<a href="https://www.linkedin.com/company/talentnet-corporation?trk=tyah&trkInfo=tarId%3A1423191960019%2Ctas%3Atalentnet+cor%2Cidx%3A1-1-1" title="" target="_blank">FOLLOW US <img src="<?=base_url()?>assets/img/icon/icon-in.png" alt="" /></a>
						<div class="legislation" style="margin-top:10px;"><a href="http://backup.talentnet.vn/edm/client-subcribe.html">STAY UPDATED WITH VIETNAM’S HR LEGISLATION</a></div>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-6">Copyright © 2015 Talentnet.</div>
					<div class="col-md-6 txt-r">
						<a href="<?=PATH_URL_LANG.'sitemap'?>" title="">Site map</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
						<a href="<?=PATH_URL_LANG.'legal-notices'?>" title="">Legal Notices</a><span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</span>
						<a href="<?=PATH_URL_LANG.'privacy-policy'?>" title="">Privacy Policy</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="imgprev"></div>
	<a href="#pu-upload-cv" class="fancybox" style="display:none" title=""></a>
	<div style="display:none;">
		<div id="pu-upload-cv">
			<div class="pu-upload-cv">
				<a class="pu-upload-cv-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a>
				<span class="f-bb note"><?=$this->uri->segment(1)=='vi'?'Cám ơn bạn':'Thank You'?></span>
				<p class="pop_content"></p>
				<div class="txt-c"><a class="btn-ok f-bb" href="javascript:void(0);" onclick="$.fancybox.close();" title="">OK</a></div>
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
	<script type="text/javascript" src="<?=base_url()?>assets/js/html2canvas.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.selectbox-0.2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/autoNumeric.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.upload.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.PrintArea.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/plugins/select2/js/select2.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/js.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/php.js"></script>
	<?= $_scripts ?>
</body>
</html>
