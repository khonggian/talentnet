<?=modules::run('home/banner',uri_string())?>

<div id="login-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Sign_in')?></span>
		</div>
		
		<div class="form-profile lo-gin">
			<div class="title"><?=lang('sign_in_here')?></div>
            <form class="form-horizontal" role="form" id="_FormLogin">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<div class="col-left">
	                <div class="form-group">
	                    <div class="lable"><?=lang('login_email')?></div>
						<div class="input">
							<input type="text" name="email" id="email" class="input_submit" maxlength="100" placeholder="<?=lang('your_login_email')?>"/>
						</div>
						<div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <div class="lable"><?=lang('password')?></div>
						<div class="input">
							<input type="password" name="password" id="password"  class="input_submit" maxlength="100" placeholder="<?=lang('password')?>"/>
						</div>
						<div class="clearfix"></div>
	                </div>
	                <div class="form-group">
	                    <div class="lable"></div>
							<div class="ck left">
								<input type="checkbox" name="remember" /><?=lang('remember_me')?>
	                            <a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'forgot':'quen-mat-khau')?>" class="forgot-pass"><?=lang('Forgot_password')?>?</a> 
							</div>  
						<div class="clearfix"></div>
		           </div>
					<div class="form-group">
	                    <div class="lable">&nbsp;</div>
						<div><input type="button" class="submit_login p_submit btn-update btn-sign-in" data-form="_FormLogin" data-type="pLogin" value="<?=lang('sign_in')?>" class="btn-update btn-sign-in" />&nbsp;&nbsp;<a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" class="btn-update btn-dont-have-acc"><?=lang('no_account')?></a>
						<div class="clearfix"></div>
						<div class="lable">&nbsp;</div><span class="notice error_login"></span>
						</div>
	                </div>
	            </div>
                <div class="col-right">
					<div class="mbt20 btn-form">
						<div class="fs18 f-bb c_010"><?=lang('or_sign_in')?></div>
						<div class="fs18 f-bb c_010 mt15">
							<a href="javascript:;" class="OpenID btn-face" data-title="Facebook Login" data-url="<?=getUrlLoginOpenID('fb');?>"></a>&nbsp;&nbsp;
							<a href="javascript:;" class="OpenID btn-mail" data-title="Google Login" data-url="<?=getUrlLoginOpenID('google');?>"></a>&nbsp;&nbsp;
							<a href="javascript:;" class="OpenID btn-yahoo" data-title="Yahoo Login" data-url="<?=getUrlLoginOpenID('yahoo');?>"></a>&nbsp;&nbsp;
							<!--<a href="javascript:;" title="" class="btn-in"></a>-->
						</div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
		Page.submit_form('login');
	});
</script>