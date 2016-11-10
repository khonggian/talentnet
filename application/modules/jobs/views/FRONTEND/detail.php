<?php
	$name = language('name');
	$job_description = language('job_description');
	$em_description = language('em_description');
	$job_requirement = language('job_requirement');
	$industry_name = language('industry_name');
	$salary_min = language('salary_min');
	$salary_max = language('salary_max');
	$slug = language('slug');
?>
<div id="news-talent" class="content-bg1 jdetail">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a> <a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job/job-list/':'tim-kiem-viec-lam/danh-sach-cong-viec/')?>" title="<?=lang('Candidates')?>"><?=lang('Job_Search')?></a> <span class="active"><?=$title?></span>
		</div>
		<div class="ab-l col-md-8">

			<div class="ab-jobdetail ct-view">
				<?php
					$is_expired = false;
					if(strtotime($result->expired)<time())
						$is_expired = true;
				 ?>
				<div class="ab-jobdetail-deadline <?=$is_expired?'fog':''?>">
					<div class="ab-jobdetail-day"><?=date('d', strtotime($result->expired));?></div>
					<div class="ab-jobdetail-month"><?=$this->uri->segment(1)=='en'?date('M Y', strtotime($result->expired)):'T'.date('m Y', strtotime($result->expired));?></div>
				</div>
				<div class="ab-jobdetail-tt f-bb"><?=lang('job_detail')?></div>
				<div class="ab-jobdetail-infor">
					<div class="row">
						<div class="col-md-3"><?=lang('job_code')?>:</div>
						<div class="col-md-9"><?=$result->code?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('job_name')?>:</div>
						<div class="col-md-9"><?=$result->name?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('job_level')?>:</div>
						<div class="col-md-9"><?=implode_json($result->level)?></div>
					</div>					
					<div class="row">
						<div class="col-md-3"><?=lang('industry');?>:</div>
						<div class="col-md-9  <?=$is_expired?'':'cr_color'?> "><?=implode_json($result->industry)?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('Location');?>:</div>
						<div class="col-md-9 <?=$is_expired?'':'cr_color'?>"><?=implode_json($result->location)?>
							<!-- <a href="javascript:void(0);" title=""><img src="<?=base_url()?>assets/img/icon/icon-map.png" alt="" /></a> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('Salary');?>:</div>
						<div class="col-md-9">
							<?=number_format($result->salary_min, 0, ',', ',')?>
							-
							<?=number_format($result->salary_max, 0, ',', ',')?>
						</div>
					</div>
				</div>
			</div>

			<h1 class="title2"><?=$result->name?></h1>
			<div class="ab-about mt17 pdbt18">
				<h2 class="f-bb"><?=lang('Employer_Description')?></h2>
				<?=output_editor($result->em_description)?>
			</div>
			<div class="ab-about mt20 pdbt18">
				<h2 class="f-bb"><?=lang('Job_Description')?></h2>
				<?=output_editor(html_entity_decode(htmlspecialchars_decode($result->job_description)));?>
			</div>
			<div class="ab-about mt20 pdbt18">
				<h2 class="f-bb"><?=lang('Job_Requirement')?></h2>
				<div>
					<?=output_editor(html_entity_decode(htmlspecialchars_decode($result->job_requirement)));?>
				</div>
			</div>
			<div class="mt20 job-detail">
				<?php  if(empty($result->apply) && $result->expired >= date('Y-m-d')){?>
				<!--<input type="button" class="btn-update btn-sign-in w131 sv_jobs p_submit" data-id="<?=$result->id?>" data-type="apply" value="APPLY NOW" />-->
				<?php
					
					$ycv="0";
					$data_upload="0";
					if(!$this->session->userdata('uid')){

					}elseif(!empty($upload_cv)){
						$data_upload="1";
						$ycv=$upload_cv[0]->id;
					}elseif(!empty($your_cv)){
						$ycv=$your_cv[0]->id;
					}

				?>
				<a data-id="<?=$result->id?>" data-ycv="<?=$ycv?>" data-upload="<?=$data_upload?>" class="btn-update btn-sign-in <?php if(empty($upload_cv) && empty($your_cv) ){ echo "fancybox"; }else{ echo "apply_jobs"; } ?>  w131 " href="<?=$this->session->userdata('uid')?'#pop-choose-cv':PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" title="APPLY NOW">APPLY NOW</a>
				<?php }elseif($result->apply){ ?>
				<a  class="btn-update"  title="">Applied on <?=date('d/m/Y',strtotime($result->apply->created))?></a>
				<?php } ?>
				<?php if(empty($result->save)){?>
				<?php if($this->session->userdata('uid')){?>
				<input type="button" class="btn-update sv_jobs p_submit fix-btn" data-id="<?=$result->id?>" data-type="save" value="SAVE JOB" />
				<?php }else{?>
				<a class="btn-update w131 fancybox fix-btn apply_jobs" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'login':'dang-nhap')?>" title="SAVE JOB">SAVE JOB</a>
				<?php }?>
				<?php }?>
			</div>
		</div>
		<div class="ab-r dl col-md-4">
			<div class="ab-jobdetail">
				<?php
					$is_expired = false;
					if(strtotime($result->expired)<time())
						$is_expired = true;
				 ?>
				<div class="ab-jobdetail-deadline <?=$is_expired?'fog':''?>">
					<div class="ab-jobdetail-day"><?=date('d', strtotime($result->expired));?></div>
					<div class="ab-jobdetail-month"><?=$this->uri->segment(1)=='en'?date('M Y', strtotime($result->expired)):'T'.date('m Y', strtotime($result->expired));?></div>
				</div>
				<div class="ab-jobdetail-tt f-bb"><?=lang('job_detail')?></div>
				<div class="ab-jobdetail-infor">
					<div class="row">
						<div class="col-md-3"><?=lang('job_code')?>:</div>
						<div class="col-md-9"><?=$result->code?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('job_name')?>:</div>
						<div class="col-md-9"><?=$result->name?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('job_level')?>:</div>
						<div class="col-md-9"><?=implode_json($result->level)?></div>
					</div>					
					<div class="row">
						<div class="col-md-3"><?=lang('industry');?>:</div>
						<div class="col-md-9  <?=$is_expired?'':'cr_color'?> "><?=implode_json($result->industry)?></div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('Location');?>:</div>
						<div class="col-md-9 <?=$is_expired?'':'cr_color'?>"><?=implode_json($result->location)?>
							<!-- <a href="javascript:void(0);" title=""><img src="<?=base_url()?>assets/img/icon/icon-map.png" alt="" /></a> -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"><?=lang('Salary');?>:</div>
						<div class="col-md-9">
							<?=number_format($result->salary_min, 0, ',', ',')?>
							-
							<?=number_format($result->salary_max, 0, ',', ',')?>
						</div>
					</div>
				</div>
			</div>
			<?php if(!empty($related_jobs)){?>
			<!--<div class="ab-related">
				<div class="ab-related-tt f-bb"><?=lang('related_jobs')?>aaa</div>
				<div class="row">
					<?php $i=-1; foreach($related_jobs as $related){$i++;?>
					<div class="col-md-12 <?=$i%2==0?'bg':''?>">
						<div class="job"><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$related->$slug?>" title="<?=CutText($related->$name,40)?>"><?=CutText($related->$name,40)?></a></div>
						<div class="time">Exp. <?=date('d/m/Y',strtotime($related->created))?>  |  <?=$related->location_name?></div>
					</div>
					<?php }?>
				</div>
				<!--<a class="ab-view-all" href="javascript:void(0);" title="<?=lang('view_more')?>"><?=lang('view_more')?></a>
			</div>-->
			<div class="ab-related">
				<div class="ab-related-tt f-bb">Related Jobs</div>
				<div class="row">
					<?php $i=-1; foreach($related_jobs as $related){$i++;?>
					<div class="col-md-12 <?=$i%2==0?'bg':''?>">
						<div class="job"><a href="<?=$related->slug?>"><?=CutText($related->name,40)?></a></div>
						<div class="time">
							<?php
								$is_expired = false;
								if(strtotime($related->expired)<time())
									$is_expired = true;
							 ?>
							<?php 
								if($is_expired==true){ 
							 		echo "Expired ";
							 	}else{  
							?>
							Exp. <?=date('d/m/Y',strtotime($related->expired))?>
							<?php } ?>
							  |  <?=implode_json($related->location)?></div>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php }?>
			<div class="mt30"></div>
			<?//=modules::run('home/list_jobs_match_right')?>
			<?php if($this->session->userdata('uid')){ ?>
			<?=modules::run('home/account_management')?>
			<?php }else{ ?>
			<?=modules::run('home/your_cv')?>
			<?php } ?>
			<?=modules::run('block/salary_calc_for','employee')?>
			<?//=modules::run('home/in_the_news',lang('Sharing_Corner'))?>
			<!--<?php if(!$this->session->userdata('uid')){?>
			<div class="ab-carrer signin">
				<div class="ab-carrer-tt f-bb"><?=lang('Create_Submit_CV');?></div>
				<div class="ab-carrer-wc create"><?=lang('Create_Submit_CV_intro');?>.</div>
				<a class="btn-carrer btn-carrer-create f-bb" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec')?>" title="<?=lang('click_submit_cv');?>"><?=lang('click_submit_cv');?></a>
				<div class="ab-carrer-tt sign f-bb"><?=lang('Sign_Up')?></div>
				<div class="ab-carrer-wc sign">Talentnet members have access to more information about employers and salaries and job search tips.</div>
				<a class="btn-carrer btn-carrer-sign f-bb" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'register':'dang-ky')?>" title="<?=lang('Sign_Up')?>"><?=lang('sign_up_now')?></a>
			</div>
			<?php }?>-->
			
			
		</div>
	</div>
</div>
<div style="display:none;">
	<div id="pop-choose-cv">
		<div class="pop-choose-cv">
			<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
			<div class="row">
				<?php if(!empty($your_cv)){?>
				<div class="col-md-6 has_cv ycv">
					<h1 class="f-bb"><?=lang('choose_your_cv')?></h1>
					<p>Choose your exist CVs</p>
					<table>
						<tbody>
							<?php $i = 1;
								foreach($your_cv as $cv){?>
							<tr>
								<td><input class="iCheck i-cv" type="radio" name="CV" value="<?=$cv->id?>" placeholder=""/></td><td>CV : <?=!empty($cv->experience)?$cv->experience:''?></td>
							</tr>
							<?php $i++;
							}
							?>
						</tbody>
					</table>
					<p>Choose your Upload CVs</p>
					<table>
						<tbody>
							<?php $i = 1;
								foreach($upload_cv as $cv){
								?>
							<tr>
								<td><input class="iCheck i-cv" type="radio" name="CV" value="<?=$cv->id?>" placeholder="" data-upload="1" /></td>
								<td><?=!empty($cv->fullname)?$cv->fullname:''?></td>
							</tr>
							<?php $i++;
							}
							?>
						</tbody>
					</table>					
					<a class="btn-carrer f-bb mt10 sv_jobs p_submit btnSubmitApply" href="javascript:void(0);" data-id="<?=$result->id?>" data-type="apply" title="SUBMIT" data-upload="">SUBMIT</a>
				</div>
				<?php }?>
				<div class="col-md-6 <?=!empty($your_cv)?'has_cv':''?>">
					<h1 class="f-bb"><?=lang('create_your_cv')?></h1>
					<div class="pu-carrer-wc">Create your CV now so you can be matched to these top jobs.</div>
					<a class="btn-carrer f-bb mt13" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec').'?action=apply-'.$result->ids?>" title="<?=lang('create_CV')?>"><?=lang('create_CV')?></a>
					<a class="btn-carrer f-bb mt13" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'your-cv':'cong-viec-cua-ban')?>" title="<?=lang('Upload_CV')?>"><?=lang('Upload_CV')?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>