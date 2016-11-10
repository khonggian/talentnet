<div class="banner-main">
	<img src="<?=base_url()?>assets/img/careertop.jpg" class="img-responsive" alt="" />
</div>
<div id="career-content" class="career-content">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a>
			<span class="active"><a href="<?=PATH_URL_LANG?>career">Careers At Talentnet</a></span>
			<span class="active"><a href="<?=PATH_URL_LANG.'career/'.$result->slug_en?>"><?=$result->name_en?></a></span>
		</div>
		<div class="ab-l col-md-8">
			<h2 class="sub_title"><?=$result->name_en?></h2>
			<div class="job-description">
				<h2 class="career-content-title">JOB DESCRIPTION</h2>
				<div>
					<?=output_editor($result->{'description_'.$languageurl})?>
				</div>				
			</div>
			<div class="job-description">
				<h2 class="career-content-title">JOB REQUIREMENT</h2>
				<div>
					<?=output_editor($result->{'content_'.$languageurl})?>
				</div>				
			</div>
			<p style="text-align: center;">Click <a href="<?=base_url().DIR_UPLOAD_CAREER.$result->file_sumary?>" target="_blank" class="text-red" style="color:#a84216"> here </a> to download Job Description (.pdf)  </p>
			<div class="attach-file">
				CLICK <input type="button" onclick="window.location.href= '<?=PATH_URL_LANG.'career/submit_job/'.$result->{'slug_'.$languageurl}.'-'.$result->id;?>'" id="btSearchEntry" value="APPLY NOW" class="btn-search"> TO SUBMIT YOUR RESUME 
			</div>
			
		</div>
		<div class="ab-r col-md-4">
			<div class="job-description jobdetail">
				<h2 class="career-content-title">JOB DETAIL</h2>
				<table style="margin-top: 54px;">
					<?php if(0){ ?>
					<tr>
						<td>Jobcode:</td>
						<td><?=$result->id?></td>
					</tr>
					<?php } ?>
					<tr>
						<td>Job Title:</td>
						<td><?=$result->{'name_'.$languageurl}?></td>
					</tr>
					<tr>
						<td>Function:</td>
						<td><?=$category->name_en?></td>
					</tr>
					<tr>
						<td>Level:</td>
						<td><?=$result->{'level'}?></td>
					</tr>
					<tr>
						<td>Location:</td>
						<td><?php if(isset($province->name)) echo $province->name?></td>
					</tr>
					<tr>
						<td>Status:</td>
						<td class="job-status"><?php if($result->status == 1 && strtotime($result->deadline) >= time()) echo "Open"; else echo 'Close';?></td>
					</tr>
				</table>
				<div class="deadline">
					<p>DEADLINE</p>
					<h2><?=date("d", strtotime($result->deadline))?></h2>
					<h4><?=date("M Y", strtotime($result->created))?></h4>
				</div>
			</div>
			<div class="job-description career-info" style="display:none">
				<h2 class="career-content-title">CAREERS</h2>
				<div>
					<img src="<?=base_url()?>assets/img/career-img.png" alt="">
					<p>Welcome to TalentNet internal career site. Join us and explore your exciting career in the professional HR Services</p>
				</div>
				<div class="btn-group">
					<a href="">JOB OPENINGS</a>
					<a href="">INTERNSHIP</a>
				</div>
			</div>
			<div class="job-description job-similar clearfix"  style="display:none">
				<h2 class="sub_title">SIMILAR JOB</h2>
				<ul>
					<?php 
					if($related){ 
						foreach ($related as $key => $value) {
						?>
					<li>
						<a href="">
							<p class="job-name"><?=$value->{'name_'.$languageurl}?></p>
							<p class="text-mute"><?=date("d-m-Y", strtotime($value->created)). ' | '. $value->province;?></p>
						</a>
					</li>

					<?php }
					}
					?>
				</ul>
				<a class="pull-right viewall-similar-job" href="<?=PATH_URL_LANG?>career">View all</a>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>
