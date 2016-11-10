<div class="ab-carrer signin">
	<div class="ab-carrer-tt signin f-bb"><?=lang('Your_CVs')?></div>	
	<div>
		<a class="btn-carrer btn-carrer-create signin  f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/create-cv':'vi/tao-cong-viec')?>" title="<?=lang('create')?>"><?=lang('create')?></a>
		<a class="btn-carrer btn-carrer-create signin  f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/upload_cv':'vi/upload_cv')?>" title="<?=lang('upload')?>"><?=lang('upload')?></a>
		<a class="btn-carrer btn-carrer-create  signin f-bb" href="<?=base_url().($this->uri->segment(1)=='en'?'en/your-cv':'vi/cong-viec-cua-ban')?>" title="<?=lang('edit')?>"><?=lang('edit')?></a>
	</div>
</div>