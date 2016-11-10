<?=modules::run('home/banner',uri_string())?>

<div id="profile-page" class="content-bg1">
	<div class="row content-row">
        <?=modules::run('home/menu_user')?>

		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Profile')?></span>
		</div>
		
		<div class="form-profile">
			<div class="title"><?=lang('Profile')?></div>
            <form class="form-horizontal" role="form" id="_FormProfile">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
                <div class="form-group" style="margin-top: 0px;">
                    <div class="lable"><?=lang('fullname')?><span> *</span></div>
                    <div class="input">
						<input type="text" name="fullname" id="fullname" maxlength="100" value="<?=!empty($user)?$user->fullname:''?>" placeholder="<?=lang('fullname')?>" />
					</div>
					<!--<div class="input-group">
						<div class="input">
							<input type="text" name="first_name" id="first_name" maxlength="30" value="<?=!empty($user)?$user->firstname:''?>" placeholder="First Name"/>
						</div>
						<div class="input">
							<input type="text" name="middle_name" id="middle_name" maxlength="100" value="<?=!empty($user)?$user->middlename:''?>" placeholder="Middle Name"/>
						</div>
						<div class="input">
							<input type="text" name="last_name" id="last_name" maxlength="30" value="<?=!empty($user)?$user->lastname:''?>" placeholder="Last Name"/>
						</div>
					</div>-->
					<div class="clearfix"></div>
                </div>
                
                <div class="form-group">
                    <div class="lable"><?=lang('your_email')?><span> *</span></div>
					<div class="input">
						<input type="text" value="<?=!empty($user)?$user->email:''?>" disabled="disabled" />
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('password')?><span> *</span></div>
					<div class="input">
						<input type="password" name="password" id="password" maxlength="100" value="" placeholder="<?=lang('password')?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('confirm_password')?><span> *</span></div>
					<div class="input">
						<input type="password" name="repassword" id="repassword" maxlength="100" value="" placeholder="<?=lang('confirm_password')?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
				<div class="form-group form-left">
					<div class="mt8 mbt20 btn-form">
					<input type="button" class="submit_profile p_submit btn-update" data-form="_FormProfile" data-type="pProfile" value="<?=lang('update')?>" />&nbsp;&nbsp;<input type="button" value="<?=lang('cancel')?>" class="btn-update" onclick="window.location.href='<?=PATH_URL_LANG.($this->uri->segment(1)=='vi'?'quan-ly-tai-khoan':'account-management')?>'" />
					</div>
					<span class="notice error_profile"></span>
					<div class="clearfix"></div>
                </div>
            </form>
        </div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
		Page.submit_form('profile');
	});
</script>