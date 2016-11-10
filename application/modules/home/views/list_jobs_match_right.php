<?php
	$name = ('name');
	$slug = ('slug');
?>


<div class="ab-related">
	<div class="ab-related-tt f-bb">Jobs Matched</div>
	<div class="row">
		<?php if(!empty($result_jobs)){?>
			<?php foreach($result_jobs as $jobs){?>
			<div class="col-md-12">
				<div class="job"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$jobs->$slug?>" title="<?=CutText($jobs->$name,70)?>"><?=CutText($jobs->$name,70)?></a></div>
				<div class="time">Exp. <?=date('d/m/Y', strtotime($jobs->created));?>  |  <?=implode_json($jobs->location)?></div>
			</div>
			<?php }?>
			<a class="ab-view-all" href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-moi-phu-hop' : 'new-job-matched')?>" title="<?=lang('View_all')?>"><?=lang('View_all')?></a>
		
		<?php }else{?>
				<?php if($check_alert){ ?>
					<div>No jobs found</div>
				<?php }else{ ?>
					<div>You haven’t subscribed any Job Alerts. Please create your Job Alerts <a href="<?=base_url().($this->uri->segment(1)=='en'?'en/submit-job-alert':'vi/dang-ky-bao-cao-viec-lam')?>" >here</a></div>
				<?php } ?>
		<?php } ?>
	</div>
</div>