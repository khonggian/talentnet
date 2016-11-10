<?=modules::run('home/banner',uri_string())?>

<div id="login-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('lost_password')?></span>
		</div>
		
		<div class="form-profile">
			<div class="c_update"><?=$message?></div>
        </div>
		
	</div>
</div>