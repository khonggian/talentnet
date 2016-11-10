<?php
    $segment = $this->uri->segment(2);
?>
<nav>
	<ul class="nav navbar-nav">
		<li class="col-md-2"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'account-management':'quan-ly-tai-khoan')?>" title="<?=lang('account_setting')?>" class=""><?=lang('account_setting')?></a></li>
		<li class="option-2 col-md-2"><a class="<?=($segment == 'your-cv' || $segment =='cong-viec-cua-ban' ) ? 'active' : '';?>" href="<?=$link_your_cv?>" title="<?=lang('manage_your_cv')?>"><?=lang('manage_your_cv')?></a></li>
		<li class="option-3 col-md-2"><a class="<?=($segment == 'save-jobs' || $segment =='luu-cong-viec' ) ? 'active' : '';?>" href="<?=$link_save_jobs?>" title="<?=lang('save_jobs')?>"><?=lang('save_jobs')?></a></li>
		<li class="option-4 col-md-2"><a class="<?=($segment == 'new-job-matched' || $segment =='cong-viec-moi-phu-hop' ) ? 'active' : '';?>" href="<?=$link_new_job_matched?>" title="<?=lang('New_jobs_match_you')?>"><?=lang('New_jobs_match_you')?></a></li>
		<li class="option-5 col-md-2"><a class="<?=($segment == 'jobs-applied' || $segment =='ap-dung-cong-viec' ) ? 'active' : '';?>" href="<?=$link_jobs_applied?>" title="<?=lang('jobs_applied')?>"><?=lang('jobs_applied')?></a></li>
		<li class="option-5 col-md-2"><a class="<?=($segment == 'my-download' || $segment =='tai-ve-cua-toi' ) ? 'active' : '';?>" href="<?=$link_my_download?>" title="<?=lang('my_download')?>"><?=lang('my_download')?></a></li>
	</ul>
	<div class="clearAll"></div>
</nav>