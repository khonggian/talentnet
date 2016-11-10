<div class="ab-carrer signin">
	<div class="ab-carrer-tt signin f-bb"><?=lang('Account_Management')?></div>
	<!--<h3><?=lang('job_alert')?></h3>
	<div>
		<a class="btn-carrer btn-carrer-create signin f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/submit-job-alert':'vi/dang-ky-bao-cao-viec-lam')?>" title="<?=lang('create')?>"><?=lang('create')?></a>
		<a class="btn-carrer btn-carrer-create signin f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/job-alert':'vi/bao-cao-viec-lam')?>" title="<?=lang('edit')?>"><?=lang('edit')?></a>
	</div>-->
	
	<h3><?=lang('Your_CVs')?></h3>
	<div>
		<a class="btn-carrer btn-carrer-create signin  f-bb btn_create_cv" href="<?=base_url().($this->uri->segment(1)=='en'?'en/create-cv':'vi/tao-cong-viec')?>" title="<?=lang('create')?>"><?=lang('create')?></a>
		<a class="btn-carrer btn-carrer-create signin  f-bb btn_upload_cv" href="<?=base_url().($this->uri->segment(1)=='en'?'en/upload_cv':'vi/upload_cv')?>" title="<?=lang('upload')?>"><?=lang('upload')?></a>
		<a class="btn-carrer btn-carrer-create  signin f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban')?>" title="<?=lang('edit')?>"><?=lang('edit')?></a>
	</div>
</div>
<script>
	$(document).ready(function(){
		Page.check_cv();
	});
</script>