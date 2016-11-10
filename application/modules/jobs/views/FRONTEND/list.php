<?php
	$name = language('name');
	$industry_name = language('industry_name');
	$salary_min = language('salary_min');
	$salary_max = language('salary_max');
	$slug = language('slug');
?>
<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-dashboard.jpg" class="img-responsive" />
	<div class="menu-ab ma-mobile">
		<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=$title?></span>
	</div>
	<div class="form-profile form-banner">
		<div class="form_background">
            <form action="<?=PATH_URL_LANG.link_lang('search_job').link_lang('Job_List')?>" method="get" class="form-horizontal frJobSearch" role="form" id="Form_Search_Jobs">
                <div class="form-group rl100">
                    <div class="ip_file_100 left">
						<div class="input input_100 file">
							<input type="text" name="keyword" id="keyword" placeholder="<?=lang('enter_keywords');?>" value="<?=$this->input->get('keyword')?>"/>
						</div>
                    	<input type="button" id="search_job" class="button-browse left" value="<?=lang('search');?>"/>
                    </div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group rl100">
                    <div class="gr_sl_100 left">
						<div class="select select_49 left overflow">
							<div class="item" data-select="<?=count($this->input->get('function', true))?>">
								<select class="job-select2" name="function[]" id="function" data-placeholder="<?=lang('All_Functions');?>" multiple>
									<option value="-1"><?=lang('All_Functions');?></option>
									<?php 
										if(!empty($function_job))
										{
											$get_function= ($this->input->get('function', true)) ? $this->input->get('function', true) : array();
											
											foreach($function_job as $function){
											$selected= (in_array($function->name, $get_function)) ? 'selected' : '';
									?>
									<option value="<?=$function->name?>" <?=$selected?>><?=$function->name?></option>
									<?php 	}
										}
									?>
								</select>
							</div>
						</div>
						<div class="select select_49 right overflow">
							<div class="item" data-select="<?=count($this->input->get('industry', true))?>">
								<?php
									
								?>
								<select class="job-select2" name="industry[]" id="industry" data-placeholder="<?=lang('All_Industries');?>" multiple>
									<option value="-1"><?=lang('All_Industries');?></option>
									<?php 
										if(!empty($industry_job)){
											$get_industry= ($this->input->get('industry', true)) ? $this->input->get('industry', true) : array();
											foreach($industry_job as $industry){
											$selected= (in_array($industry->name_en, $get_industry)) ? 'selected' : '';
									?>
									<option value="<?=$industry->name_en?>" <?=$selected?>><?=$industry->name_en?></option>
									<?php 
											}
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
							<div class="item" data-select="<?=count($this->input->get('level', true))?>">
								<?php
																		
								?>								
								<select class="job-select2" name="level[]" id="level" data-placeholder="<?=lang('All_Levels');?>" multiple>
									<option value="-1"><?=lang('All_Levels');?></option>
									<?php 
										if(!empty($level_job)){
											$get_level= ($this->input->get('level', true)) ? $this->input->get('level', true) : array();
											foreach($level_job as $level){
											$selected= (in_array($level->name, $get_level)) ? 'selected' : '';
									?>
									<option value="<?=$level->name?>" <?=$selected?>><?=$level->name?></option>
									<?php 
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="select select_49 right overflow">
							<div class="item" data-select="<?=count($this->input->get('location', true))?>">
								<select class="job-select2" name="location[]" id="location" data-placeholder="<?=lang('All_Locations');?>" multiple>
									<option value="-1"><?=lang('All_Locations');?></option>
									<?php 
										$get_location= ($this->input->get('location', true)) ? $this->input->get('location', true) : array();
										if(!empty($location)){
											foreach($location as $l){
											$selected= (in_array($l->name, $get_location)) ? 'selected' : '';
									?>
									<option value="<?=$l->name?>" <?=$selected?>><?=$l->name?></option>
									<?php 
											}
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
        </div>
    </div>
</div>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab ma-pc">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
		</div>
		<div class="ab-l jl col-md-8">
			<div class="carrer-talent">
				<?php if(!empty($result)){?>
				<div class="carrer-talent-item joblist">
					<h1 class="f-bb">Job Search ResultS</h1>
					<p class="result"><?=$totalRows?> <span><?=$this->input->get('keyword')?></span> <?=lang('jobs_found');?>.</p>
					<div class="ljob">
						<?php $i = 0;
								foreach($result as $r){
						?>
						<div class="row <?=$i%2==0?'bg':''?>">
							<div class="col-md-6">
								<p class="text-1"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$r->slug?>" title="<?=$r->name?>"><?=CutText($r->name,60)?></a></p>
								<p class="text-2">
									<?php
										$is_expired = false;
										if(strtotime($r->expired)<time())
											$is_expired = true;
									 ?>
									<?php 
										if($is_expired==true){ 
									 		echo "Expired ";
									 	}else{  
									?>
									Exp. <?=date('d/m/Y', strtotime($r->expired));?>  <?php } ?>
									| <?=implode_json($r->location)?>
									
								</p>

							</div>
							<div class="col-md-6">
								<p class="text-3"> <?=implode_json($r->industry)?></p>
								<p class="text-4">
									<?=number_format($r->salary_min, 0, ',', ',')?>
									-
									<?=number_format($r->salary_max, 0, ',', ',')?>
								</p>
								<?php if($this->session->userdata('uid')){
										if(empty($r->save)){
								?>
								<a class="f-bb btn-savejob sv_jobs p_submit" href="javascript:void(0);" data-id="<?=$r->id?>" data-type="save" title="SAVE JOB">SAVE JOB</a>
								<?php }
								}
								?>
							</div>
						</div>
						<?php $i++;
						}
						?>
						
					</div>
				</div>
				<div class="page-bar">
					<!--<div class="select-view">
						<span><?=lang('Display')?></span>
						<div class="select">
							<select class="js-select" id="change_number_page">
								<?php for($i=10;$i<=50;$i = $i + 5){?>
								<option value="<?=$i?>" <?=$this->input->get('pz') == $i ? 'selected':''?>><?=$i?></option>
								<?php }?>
							</select>
						</div>
						<span>/ <?=lang('Total')?> <strong><?=$totalRows?></strong></span>
					</div>-->
					<?=$pagination?>
					<div class="clearfix"></div>
				</div>
				<?php }else{ ?>
				<div class="carrer-talent-item joblist">
				<h1 class="f-bb">Job Search ResultS</h1>
					<p class="result">0 <span><?=htmlentities($keyword)?></span> <?=lang('jobs_found');?>.</p>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="ab-r jl col-md-4">
			<?php if(!$this->session->userdata('uid')){ ?>
				<?=modules::run('home/email_similar')?>
				<?=modules::run('home/your_cv')?>
				<!--<div class="ab-carrer signin">
					<div class="ab-carrer-tt f-bb"><?=lang('Create_Submit_CV');?></div>
					<div class="ab-carrer-wc create"><?=lang('Create_Submit_CV_intro');?>.</div>
					<a class="btn-carrer btn-carrer-create f-bb" href="<?=$this->session->userdata('uid')?PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec'):PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap');?>" title="<?=lang('click_submit_cv');?>"><?=lang('click_submit_cv');?></a>
	                
					<div class="ab-carrer-tt sign f-bb"><?=lang('Sign_Up')?></div>
					<div class="ab-carrer-wc sign">Talentnet members have access to more information about employers and salaries and job search tips.</div>
					<a class="btn-carrer btn-carrer-sign f-bb" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" title="<?=lang('Sign_Up')?>"><?=lang('sign_up_now')?></a>
				</div>-->
				<?=modules::run('block/salary_calc_for','employee')?>
				<?=modules::run('home/in_the_news',lang('Sharing_Corner'))?>
			<?php }else { ?>
				<?=modules::run('home/email_similar')?>
				<?=modules::run('home/account_management')?>
				<?//=modules::run('home/your_cv')?>
				<?=modules::run('home/list_jobs_match_right')?>
				<?=modules::run('block/salary_calc_for','employee')?>
				<?=modules::run('home/in_the_news',lang('Sharing_Corner'))?>
			<?php } ?>

		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		function gotoURL(){
	        var view_by='';
	        var keyword ='';
	        var str_query ='';
	        var by_day ='';
	        var by_month ='';
	        var by_year='';
	        p=$('#change_number_page').val();
	        
	        if(typeof p=='undefined') 
	            str_query='p=1';
	        else 
	            str_query ='p='+p;
	        
	        if($('#viewby').size()>0){
	            view_by = $('#viewby').val();
	            str_query += '&view_by='+view_by;
	        }
	        
	        if($('#txtKeyword').size()>0){
	            keyword = $('#txtKeyword').val();
	            str_query += '&keyword='+keyword;
	        }
	        if($('#by_day').size()>0){
	            by_day = $('#by_day').val();
	            str_query += '&by_day='+by_day;
	        }
	        if($('#by_month').size()>0){
	            by_month = $('#by_month').val();
	            str_query += '&by_month='+by_month;
	        }
	        if($('#by_year').size()>0){
	            by_year = $('#by_year').val();
	            str_query += '&by_year='+by_year;
	        }
	        window.location= '<?=PATH_URL_LANG.$this->uri->segment(2).'/'.$this->uri->segment(3)?>?'+str_query;
	    }

	    //scroll to menu-ab when change page 
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('?');
	    var w = $(window).width();
	    if(sURLVariables!=""){
	    	if(w > 980){
	    		scroll_to(".menu-ab.ma-pc");
	    	}else{
	    		scroll_to(".menu-ab.ma-mobile");
	    	}
	    }

	    $('#change_number_page').change(gotoURL);

		Page.search_job('search_job','<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>');
        //Page.search_job('change_number_page','<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>');
		Page.search_job('job_alert','<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'submit-job-alert':'dang-ky-bao-cao-viec-lam')?>');
		Candidate.job_search();

	});
</script>