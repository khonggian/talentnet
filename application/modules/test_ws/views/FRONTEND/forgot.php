<?=modules::run('home/banner',uri_string())?>

<div id="login-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('lost_password')?></span>
		</div>
		
		<div class="form-profile">
			<div class="title"><?=lang('Forgot_password')?></div>
            <form class="form-horizontal" role="form" id="_FormForgot">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
                <div class="form-group">
                    <div class="lable"><?=lang('login_email')?></div>
					<div class="input">
						<input type="text" name="email" id="email" class="input_submit" maxlength="100" placeholder="<?=lang('your_login_email')?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
               
				<div class="form-group">
                    <div class="lable">&nbsp;</div>
					<div><input type="button" class="submit_forgot p_submit btn-update btn-sign-in" data-form="_FormForgot" data-type="pForgot" value="<?=lang('send')?>" class="btn-update btn-sign-in" />
					<div class="clearfix"></div>
					<div class="lable">&nbsp;</div><span class="notice error_forgot"></span>
					</div>
                </div>
                
                <div class="clearfix"></div>
            </form>
        </div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
		Page.submit_form('forgot');
	});
</script>