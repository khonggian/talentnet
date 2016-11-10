<?php
	$name = language('name');
	$slug = language('slug');
?>
<!-- <div class="ab-account signin">
	<div class="ab-account-tt f-bb"><?=lang('Account_Management')?></div>
	<div class="ab-account-edit">
		<div class="row">
			<div class="col-md-5 f-bb"><a href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-cua-ban' : 'your-cv')?>" title="<?=lang('edit_your_cv')?>"><?=lang('edit_your_cv')?></a></div>
			<div class="col-md-7 f-bb"><a href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'bao-cao-viec-lam' : 'job-alert')?>" title="<?=lang('edit_job_alert')?>"><?=lang('edit_job_alert')?></a></div>
		</div>
	</div>
	<div class="ab-account-list f-bb"><?=lang('New_job_matched')?></div>
	<div class="row">
	<?php if(!empty($result_jobs)){?>
		<?php foreach($result_jobs as $jobs){?>
		<div class="col-md-12">
			<div class="job"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$jobs->$slug?>" title="<?=CutText($jobs->$name,70)?>"><?=CutText($jobs->$name,70)?></a></div>
			<div class="time">Exp. <?=date('d/m/Y', strtotime($jobs->created));?>  |  <?=$jobs->location_name?></div>
		</div>
		<?php }?>
	
	<a class="ab-view-all" href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-moi-phu-hop' : 'new-job-matched')?>" title="<?=lang('View_all')?>"><?=lang('View_all')?></a>
	<?php } else { ?>
	<div class="c_update"><?=lang('updates')?></div>
	<?php }?>
	</div>
</div> -->