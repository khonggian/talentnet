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
		<input type="hidden" name="id" id="job_alert_id" value="<?=$result->id?>" />
		<div class="form-search">
            <div class="title"><?=lang('search_job_alert')?></div>
                <div class="form-group">
					<div class="input">
						<input type="text" name="job_title" id="job_title" value="<?=$result->job_title?>"  class="" maxlength="255" placeholder="Enter job title,position..."/>
					</div>
                </div>
                <div class="form-group">
					<div class="selectbox">
                        <select class="js-select input" name="function" id="function">
							<option value="">All Functions</option>
							<?php if(!empty($function_job)){
									foreach($function_job as $function){
									$selected = $result->function_id == $function->id ? 'selected' : '';
							?>
							<option value="<?=$function->id?>" <?=$selected?>><?=$function->$name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                    <div class="selectbox">
                        <select class="js-select input" name="industry" id="industry">
							<option value="">All Industries</option>
							<?php if(!empty($industry_job)){
									foreach($industry_job as $industry){
									$selected = $result->industry_id == $industry->id ? 'selected' : '';
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
							<option value="">All Levels</option>
							<?php if(!empty($level_job)){
									foreach($level_job as $level){
									$selected = $result->level_id == $level->id ? 'selected' : '';
							?>
							<option value="<?=$level->id?>" <?=$selected?>><?=$level->$name?></option>
							<?php }
							}
							?>
						</select>
                    </div>
                    <div class="selectbox">
                        <select class="js-select input" name="location" id="location">
							<option value="">All Locations</option>
							<?php if(!empty($location)){
									foreach($location as $l){
									$selected = $result->location_id == $l->id ? 'selected' : '';
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
						<div class="input input_50">
							<input type="text" name="salary_min" class="" id="salary_min" maxlength="11" value="<?=$result->salary_min?>" placeholder="Minimun Monthly Salary (USD)" />
						</div>
						<div class="input input_50 mt15">
							<input type="text" name="salary_max" class="" id="salary_max" maxlength="30" value="<?=$result->salary_max?>" placeholder="Minimun Monthly Salary (USD)"/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
       </div>
       <div class="form-info">
            <div class="title"><?=lang('search_job_alert')?></div>
                <div class="form-group">
                    <div class="input">
                        <input type="text" name="email" id="email" class="" value="<?=$result->email?>" maxlength="255" placeholder="Email"/>
                    </div>
                </div>
                <div class="form-group">
				    <div class="selectbox">
                        <select class="search-select js-select input" name="every" id="every">
                            <option value="">All Every</option>
                            <option value="Everyday" <?=$result->every == 'Everyday' ? 'selected' : ''?>>Everyday</option>
                            <option value="Everything" <?=$result->every == 'Everything' ? 'selected' : ''?>>Everything</option>
                            <option value="Everybody" <?=$result->every == 'Everybody' ? 'selected' : ''?>>Everybody</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn"><input type="button" value="SAVE" class="submit_job_alert button p_submit" data-form="_Form_job_alert" data-type="save_job_alert" /></div>
                </div>
				<span class="notice error_job_alert"></span>     
			<div class="clearfix"></div>
		</div>
	    </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	Page.submit_form('job_alert');
});
</script>