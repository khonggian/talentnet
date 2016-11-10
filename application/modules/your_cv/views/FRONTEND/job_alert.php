<?php
	$name = language('name');
	$slug = language('slug');
?>
<?=modules::run('home/banner',uri_string())?>
<div id="jobalert-page" class="content-bg1">
    <div class="row content-row">
        <div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
        </div>
		<form class="form-horizontal" role="form" id="_Form_job_alert">
		<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
		<div class="form-search">
            <div class="title"><?=lang('search_job_alert')?></div>
                <div class="form-group">
					<div class="input">
						<input type="text" name="job_title" id="job_title" class="" maxlength="255" value="<?=!empty($paramater)?$paramater['keyword']:''?>" placeholder="Enter job title,position..."/>
					</div>
                </div>
                <div class="form-group">
					<div class="selectbox">
                        <select class="js-select input" name="function" id="function">
							<option value=""><?=lang('all_functions')?></option>
							<?php if(!empty($function_job)){
									foreach($function_job as $function){
									$selected = !empty($paramater['function_job'])?$paramater['function_job'] == $function->id ?'selected':'':'';
							?>
							<option value="<?=$function->id?>" <?=$selected?>><?=$function->$name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                    <div class="selectbox">
                        <select class="js-select input" name="industry" id="industry">
							<option value=""><?=lang('all_industries')?></option>
							<?php if(!empty($industry_job)){
									foreach($industry_job as $industry){
									$selected = !empty($paramater['industry_job'])?$paramater['industry_job'] == $industry->id ?'selected':'':'';
							?>
							<option value="<?=$industry->id?>" <?=$selected?>><?=$industry->$name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                </div>
                <div class="form-group">
					<div class="selectbox">
                       <select class="js-select input" name="level" id="level">
							<option value=""><?=lang('all_levels')?></option>
							<?php if(!empty($level_job)){
									foreach($level_job as $level){
									$selected = !empty($paramater['level_job'])?$paramater['level_job'] == $level->id ?'selected':'':'';
							?>
							<option value="<?=$level->id?>" <?=$selected?>><?=$level->$name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                    <div class="selectbox">
                        <select class="js-select input" name="location" id="location">
							<option value=""><?=lang('all_locations')?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
									$selected = !empty($paramater['location'])?$paramater['location'] == $l->id ?'selected':'':'';
							?>
							<option value="<?=$l->id?>" <?=$selected?>><?=$l->name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                </div>
                <div class="form-group">
					 <div class="gr_sl_100 left">
                        <div class="inputbox">
						<div class="input input_50">
							<input type="text" name="salary_min" class="" id="salary_min" maxlength="11" value="<?=!empty($paramater)?$paramater['salary_min']:''?>" placeholder="<?=lang('mini_salary')?>" />
						</div>
                        </div>
                        <div class="inputbox">
						<div class="input input_50">
							<input type="text" name="salary_max" class="" id="salary_max" maxlength="30" value="<?=!empty($paramater)?$paramater['salary_max']:''?>" placeholder="<?=lang('maxi_salary')?>"/>
						</div>
                        </div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="form-group">
                    <div class="input">
                        <input type="text" name="email" id="email" class="" maxlength="255" value="<?=$this->session->userdata('email')?>" placeholder="Email" />
                    </div>
                </div>
                <div class="form-group">
				    <div class="selectbox">
                        <select class="search-select js-select input" name="every" id="every">
                            <option value="">Receive Job Alert to Email by</option>
                            <option value="Everyday">Right after a new job matched</option>
                            <option value="Everything">Weekly</option>
                            <option value="Everybody">Monthly</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><?=lang('verification')?></div>
                    <div class="captcha" id="captcha-wrap">
						<div class="captcha-box">
							<img src="<?=PATH_URL_LANG.'/captcha?t='.time();?>" alt="" id="captcha_img" />
						</div>
						<div class="text-box captchar">
							<label>Type the two words:</label>
							<input name="captcha" type="text" id="captcha-code" class="input">
						</div>
						<div class="captcha-action">
							<a href="javascript:;" id="captcha-refresh" data-url="<?=PATH_URL_LANG.'captcha?t='?>"><img src="<?=base_url().'assets/img/'?>refresh.jpg"  alt=""  /></a>
						</div>
                    </div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="btn"><input type="button" value="<?=lang('save')?>" class="submit_job_alert button p_submit" data-form="_Form_job_alert" data-type="save_job_alert" /></div>
                </div>
				<div style="text-align: center;"><span class="notice error_job_alert"></span></div>  
			<div class="clearfix"></div>
       </div>
       <!-- <div class="form-info">
            <div class="title"><?=lang('submit_info')?></div>
                
		</div> -->
	    </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	Page.submit_form('job_alert');
});
</script>