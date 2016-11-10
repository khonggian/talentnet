<div class="ab-subscribe">
	<div class="ab-subscribe-tt f-bb"><?=$category=='wz_information'?lang('subscribe_our_update_news'):lang('subscribe_for_in_the_news')?></div>
	<div class="ab-subscribe-submit">
		<form id="subscribe_form" class="pdbt10">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="category" value="<?=$category?>" />
			<input type="hidden" name="c_id" value="<?=$c_id?>" />
			<input type="hidden" name="link" value="<?php echo current_url(); ?>" />
			<input type="hidden" name="name_link" value="<?=$this->uri->segment(3)?>" />
			<div class="row">
				<div class="col-md-8"><input type="text" name="email" maxlength="200" class="input" placeholder="Your email"></div>
				<div class="col-md-4"><a class="f-bb submit_subscribe p_submit" href="javascript:void(0);" title="SUBMIT" data-form="subscribe_form" data-type="submit_subscribe">SUBMIT</a></div>
			</div>
		</form>
		<span class="notice error_subscribe" style="font-size:13px!important"></span>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	Page.submit_form('subscribe');
});
</script>
