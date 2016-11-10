<?=modules::run('home/banner','9-1')?>

<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Sign_Up')?></span>
		</div>
		
		<div class="form-profile sign-up lo-gin">
			<div class="title"><?=strtolower(lang('Sign_Up'))?></div>
			<div class="col-left">
	            <form class="form-horizontal" role="form" id="_FormRegister">
					<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
	                <div class="form-group">
	                    <div class="lable"><span><?=lang('fullname')?></span></div>
						<div class="input">
							<input type="text" name="full_name" id="full_name" maxlength="150" placeholder="<?=lang('fullname')?>"/>
						</div>
						<!-- <div class="input">
							<input type="text" name="middle_name" id="middle_name" maxlength="100" placeholder="Middle Name"/>
						</div>
						<div class="input">
							<input type="text" name="last_name" id="last_name" maxlength="30" placeholder="Last Name"/>
						</div> -->
						<div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <div class="lable"><span><?=lang('login_email')?></span></div>
						<div class="input">
							<input type="text" name="email" id="email" maxlength="100" placeholder="<?=lang('your_email')?>"/>
						</div>
						<div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <div class="lable"><span><?=lang('password')?></span></div>
						<div class="input">
							<input type="password" name="password" id="password" maxlength="100" placeholder="<?=lang('your_password')?>"/>
						</div>
						<div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <div class="lable"><span><?=lang('confirm_password')?></span></div>
						<div class="input">
							<input type="password" name="re_password" id="re_password" maxlength="100" placeholder="<?=lang('confirm_password')?>"/>
						</div>
						<div class="clearfix"></div>
	                </div>
					<div class="form-group form-left">
						<div class="mbt20 btn-form">
	                        <div class="">
	                                <div>
	                                    <input class="iCheck" type="checkbox" name="receive_job_match_alert" value="1" checked="checked"/><span><?=lang('receive_job_match_alert')?></span>
	            					</div>
	            					<div class="clearfix"></div>
	                        </div>
							<div class="fs13 mt5"><strong style="text-transform: uppercase;"><?=lang('verification')?></strong></div>
							<div class="mt5">
	                            
								<div id="captcha-wrap">
									<div class="captcha-box">
										<img src="<?=PATH_URL_LANG.'captcha'?>" alt="" id="captcha_img" />
									</div>
									<div class="text-box">
										<label><?=lang('type_characters')?>:</label>
										<input name="captcha" type="text" id="captcha-code"/>
									</div>
									<div class="captcha-action">
										<a href="javascript:;" id="captcha-refresh" data-url="<?=PATH_URL_LANG.'captcha?t='?>"><img src="<?=base_url().'assets/img/'?>refresh.jpg"  alt=""  /></a>
									</div>
								</div>
	                            
							</div>
							<div class="clearfix"></div>
							<div class="mt15"><input type="button" value="<?=lang('sign_up')?>" class="submit_register p_submit btn-update" data-form="_FormRegister" data-type="pRegister" />
							<span class="notice error_register"></span>
							</div>
							<div class="fs13 mt18"><?=lang('text_verify')?> <a href="#" title="" class="btn-policy"><?=lang('privacy_policy')?></a> <?=lang('and')?> <a href="#" title="" class="btn-policy"><?=lang('term_of_user')?></a></div>
							
						</div>
	                </div>
	            </form>
	        </div>
	        <div class="col-right mbt20">
	        	<div class="fs18 f-bb c_010"><?=lang('or_sign_up')?></div>
				<div class="fs18 f-bb c_010 mt15"><a href="javascript:;" class="OpenID btn-face" data-title="Facebook Login" data-url="<?=getUrlLoginOpenID('fb');?>"></a>&nbsp;&nbsp;<a href="javascript:;" class="OpenID btn-mail" data-title="Google Login" data-url="<?=getUrlLoginOpenID('google');?>"></a>&nbsp;&nbsp;<a href="javascript:;" class="OpenID btn-yahoo" data-title="Yahoo Login" data-url="<?=getUrlLoginOpenID('yahoo');?>"></a>&nbsp;&nbsp;<a href="#" title="" class="btn-in"></a></div>
	        </div>
	        <div class="clearfix"></div>
        </div>
		
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	Page.submit_form('register');
	Page.home();
	
});
</script>