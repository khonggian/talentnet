<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-dashboard.jpg" class="img-responsive" />
	<div class="menu-ab ma-mobile">
		<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
	</div>
	<div class="form-profile form-banner">
		<!-- <div class="form_background">
		           <form action="<?=PATH_URL_LANG.link_lang('search_job').link_lang('Job_List')?>" method="get" class="form-horizontal frJobSearch" role="form" id="Form_Search_Jobs">
		                <div class="form-group rl100">
		                    <div class="ip_file_100 left">
						<div class="input input_100 file">
							<input type="text" name="keyword" id="keyword" placeholder="<?=lang('enter_keywords');?>"/>
						</div>
		                    	<input type="button" id="search_job" class="button-browse left" value="<?=lang('search');?>"/>
		                    </div>
					<div class="clearfix"></div>
		                </div>
		                <div class="form-group rl100">
		                    <div class="gr_sl_100 left">
						<div class="select select_49 left overflow">
							<div class="item" data-select="1">
								<select class="job-select2" name="function[]" id="function" data-placeholder="<?=lang('All_Functions');?>" multiple>
									<option value="-1"><?=lang('All_Functions');?></option>
		
									<?php if(!empty($function_job)){
											foreach($function_job as $function){
									?>
									<option value="<?=$function->name?>"><?=$function->name?></option>
									<?php }
									}
									?>
								</select>
							</div>
						</div>
						<div class="select select_49 right overflow">
							<div class="item" data-select="1">
								<select class="job-select2" name="industry[]" id="industry" data-placeholder="<?=lang('All_Industries');?>" multiple>
									<option value="-1"><?=lang('All_Industries');?></option>
									<?php if(!empty($industry_job)){
											foreach($industry_job as $industry){
									?>
									<option value="<?=$industry->name_en?>"><?=$industry->$name?></option>
									<?php }
									}
									?>
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		                </div>
		                <div class="form-group rl99">
		                    <div class="gr_sl_100 left">
						<div class="select select_49 left overflow">
							<div class="item" data-select="1">
								<select class="job-select2" name="level[]" id="level" data-placeholder="<?=lang('All_Levels');?>" multiple>
									<option value="-1"><?=lang('All_Levels');?></option>
									<?php if(!empty($level_job)){
											foreach($level_job as $level){
									?>
									<option value="<?=$level->name?>"><?=$level->name?></option>
									<?php }
									}
									?>
								</select>
							</div>
						</div>
						<div class="select select_49 right overflow">
							<div class="item" data-select="1">
								<select class="job-select2" name="location[]" id="location" data-placeholder="<?=lang('All_Locations');?>" multiple>
									<option value="-1"><?=lang('All_Locations');?></option>
									<?php if(!empty($location)){
											foreach($location as $l){
									?>
									<option value="<?=$l->name?>"><?=$l->name?></option>
									<?php }
									}
									?>
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		                </div>
		
		            </form>
		        </div> -->
    </div>
</div>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab ma-pc">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l sbj col-md-8">
			<!-- <div class="top-job">
				<h1 class="f-bb"><?=lang('Top_jobs')?> <a href="<?=PATH_URL_LANG.link_lang('search_job').link_lang('Job_List')?>" title="" class="viewmore"><?=lang('view_more')?></a></h1>
				<div class="row">
					<?php if(!empty($result_jobs)){
						$count = round(count($result_jobs) / 2);
						$i = 0;
						foreach($result_jobs as $jobs){
					?>
					<?php if($i==0 || $i%$count==0){?>
					<div class="col-md-6">
						<ul>
					<?php } $i++; ?>
							<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$jobs->slug?>" title="<?=$jobs->name?>"><?=$jobs->name?><br/><span><?=implode_json($jobs->industry)?></span></a></li>
					<?php if($i==0 || $i%$count==0 || count($result_jobs) <= $i){?>
						</ul>
					</div>
					<?php }
						}
					}
					?>
				</div>
			</div>
			<div class="top-job sharing">
				<h2 class="f-bb"><?=lang('Sharing_Corner')?></h2>
				<div class="row">
					<?php $slug = language('slug');  if(!empty($in_the_news)){?>
					<div class="col-md-7">
						<img src="<?=img(DIR_UPLOAD_SHARING_CORNER.$in_the_news[0]->image,300,185)?>" alt="" />
						<p class="time"><?=date('d M Y', strtotime($in_the_news[0]->created));?></p>
						<p class="tt"><a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$in_the_news[0]->$slug?>"><?=ucfirst(strtolower(CutText($in_the_news[0]->$name,80)))?></a></p>
						<p class="infor"><?=CutText($in_the_news[0]->$description,80)?></p>
					</div>
					<div class="col-md-5">
						<span class="f-bb"><?=lang('Other_News')?></span>
						<ul>
							<?php for($i=1;$i<=4;$i++){
								if(!empty($in_the_news[$i])){
							?>
							<li><a href="<?=PATH_URL_LANG.toSlug(lang('Sharing_Corner')).'/'.$in_the_news[$i]->$slug?>" title="<?=CutText($in_the_news[$i]->$name,80)?>"><?=ucfirst(strtolower(CutText($in_the_news[$i]->$name,80)))?></a></li>
							<?php }
							}
							?>
						</ul>
					</div>
					<?php }?>
				</div>
			</div> -->
			<div class="ab-salary calculator">
				<p style="margin-bottom: 10px;">
					Our Job-search tool is in progression for candidates' better convenience.
				</p>
				<p><i>Please contact <a style="color:black;text-decoration:underline;" href="mailto:career.solution@talentnet.vn">career.solution@talentnet.vn</a></i> for any job opportunities.</p>
			</div>
		</div>
		<div class="ab-r jl sbj col-md-4">
			<?php if($this->session->userdata('uid')){ ?>
				<?=modules::run('home/account_management')?>
				<?=modules::run('home/list_jobs_match_right')?>
				<?=modules::run('block/salary_calc_for','employee')?>
			<?php }else{ ?>
				<?//=modules::run('home/job_alert_right')?>
				<!--<div class="ab-carrer signin">
					<div class="ab-carrer-tt f-bb"><?=lang('Create_Submit_CV');?></div>
					<div class="ab-carrer-wc create"><?=lang('Create_Submit_CV_intro');?>.</div>
					<a class="btn-carrer btn-carrer-create f-bb" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec')?>" title="<?=lang('click_submit_cv');?>"><?=lang('click_submit_cv');?></a>
					
					<div class="ab-carrer-tt sign f-bb"><?=lang('Sign_Up')?></div>
					<div class="ab-carrer-wc sign">Talentnet members have access to more information about employers and salaries and job search tips.</div>
					<a class="btn-carrer btn-carrer-sign f-bb" style="width: 44.5%;" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" title="<?=lang('Sign_Up')?>"><?=lang('sign_up_now')?></a>
				</div>-->
				<?//=modules::run('home/your_cv')?>
				<?//=modules::run('block/salary_calc_for','employee')?>
			<?php  }?>

			
			
		</div>
	</div>
</div>
<div style="display: none;">
	<div id="ab-pu-endorse-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse job-alert">
			<div class="ab-pu-endorse-tt f-bb">JOB ALERT</div>
			<div class="job-alert-note">Please submit your email address to receive the jobs match your resume</div>
			<div class="row">
				<div class="col-md-2">Your Email</div>
				<div class="col-md-10"><input type="text" name="" value="" placeholder=""/></div>
				<div class="col-md-12 txt-c"><a class="f-bb" href="javascript:void(0);" title="">SEND</a></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$("#keyword").autocomplete({
			source: availableTags
		});
		Page.search_job('search_job','<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>');
		Candidate.job_search();
	});
</script>