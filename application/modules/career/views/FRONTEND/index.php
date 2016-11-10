<?php 
$languageurl = $this->uri->segment(1);
?>
<style type="text/css">
	.modal-body img{
		width: 60px;
		margin-bottom: 8px;
	}
	.showtext img{
		width: 60px;
		margin-bottom: 8px;
	}
	.showtext2 img{
		float: left;
		width: 60px;
		margin-bottom: 8px;
	}
	.showtext div{
		float: right;
		width: 90%;
		padding-top: 15px;
		margin-left: 15px; 
	}
	.showtext2 div{
		float: left;
		width: 90%;
		padding-top: 15px;
		margin-left: 15px; 
	}
	.showtext{
		margin-top: 10px;
		text-align: center;
	}
	.showtext, .showtext2{
	    padding: 10px 0px;
	    clear: both;
	    display: none;
	}
	.form-group{
		 margin: 15px 0px 15px;
		 float: left;
	}
	.modal-content{
		text-align: justify;
	}
	<?php if($this->input->get("p") == '' || $this->input->get("p") == '1') {?>
		/*.jobboard table tr:nth-child(1) .job-title:before, .jobboard table tr:nth-child(2) .job-title:before, .jobboard table tr:nth-child(3) .job-title:before{
			background: none !important;
			height: 0px !important;
			text-indent: -9990px;
		}*/
		.jobboard table tr:nth-child(1){
			border: 1px solid #e5e5e5;
			border-left-width: 5px;
			border-left-color: #a84216;
		}
		.jobboard table tr:nth-child(2){
			border-left-style: solid;
			border-left-width: 5px;
			border-left-color: #ffbb02;
		}
		.jobboard table tr:nth-child(3){
			border: 1px solid #e5e5e5;
			border-left-width: 5px;
			border-left-color: #2cc1b5;
		}

		<?php }?>
</style>
<div class="banner-main">
	<img src="<?=base_url()?>assets/img/careertop.jpg" class="img-responsive" alt="" />
</div>
<div id="career-list" class="career">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active">Careers at Talentnet</span>
		</div>
		<h2 class="sub_title" style="padding: 0px; position: relative;">
			<a  id="click_sub_title" style="position: absolute; z-index: 2; width: 100%; display: block; padding: 10px;" href="javascript:;" 
					data-target="#InfoViewmore" class="">TALENTNET VISION & VALUES
			</a>
			<a id="click_sub_title2" style="position: absolute;z-index: 4;right: 16px; width: 50%; text-align:right; top: 11px;font-size: 15px;text-decoration: underline;" data-target="#InfoViewmore">View more</a>
			<div class="clear"></div>
		</h2> 
		<script type="text/javascript">
		link = "<?=PATH_URL_LANG."career?keyword=".$this->input->get("keyword")."&level=".$this->input->get("level")."&function=".$this->input->get("function")."&location=".$this->input->get("location")."&search=".$this->input->get("search")."SEARCH&";?>";
		$(document).ready(function(){

			$("#gopage").click(function(){
				num = $("#numpage").val();
				if(num.trim() == ''){
					alert("Enter Number"); return false;
				}
				if(isNaN(num)  == true){
					alert("Only Enter Number"); return false;
				}
				link += 'p='+ num;
				window.location.href= link;
			});


			<?php if($this->input->get("search") != ''){ ?>
				setTimeout(function(){
					$( "body" ).scrollTop(600 );
				},1000);
			<?php } ?>
			bool = 1;

			$(".sub_title #click_sub_title, .sub_title #click_sub_title2").click(function(){

				if(bool == 1){
					id = $(this).data("target");
					text = $(id).find(".modal-body").html();
					$(".showtext2").show();
					$(".showtext2").html(text);
					$("#click_sub_title2").hide();
					bool = 0;
				}
				else{
					bool = 1;
					$(".showtext2").hide();
					$(".showtext2").html("");	
					$("#click_sub_title2").show();
				}
			});

			

			// $(".sub_title #click_sub_title").mouseout(function(){
			// 	bool = 1;
			// 	$(".showtext2").hide();
			// 	$(".showtext2").html("");	
			// 	$("#click_sub_title2").show();
			// })


			$(function() {
			    $("body").click(function(e) {
			        if (e.target.id == "click_sub_title" || $(e.target).parents("#click_sub_title").size() 
			        	|| e.target.id == "click_sub_title2" || $(e.target).parents("#click_sub_title2").size()) { 
			            
			        } else { 
			           	bool = 1;
						$(".showtext2").hide();
						$(".showtext2").html("");	
						$("#click_sub_title2").show();
			        }
			    });
			})

			$(".vision a").hover(function(){
				id = $(this).data("target");
				text = $(id).find(".modal-body").html();
				$(".showtext").html(text);
				$(".showtext").fadeIn("slow");
			}, 
			 function(){
			 	$(".showtext").html("");
			 	$(".showtext").hide();
			 }
			);
		});
		</script>


		<?php if(0){ ?>

		<div class="vision">
			<a href="javascript:;"  data-toggle="modal" data-target="#Professionalism">Professionalism</a>
			<a href="javascript:;"  data-toggle="modal" data-target="#Improvement">Continuous Improvement</a>
			<a href="javascript:;"  data-toggle="modal" data-target="#Teamwork">Teamwork</a>
			<a href="javascript:;"  data-toggle="modal" data-target="#Development">People Development</a>
			<a href="javascript:;"  data-toggle="modal" data-target="#Partnership">Partnership</a>
		</div>
		<?php } ?>

		<p class="showtext2"></p>
		<div class="clear"></div>
		<div class="vision">
			<a href="javascript:;"  data-target="#Professionalism">Professionalism</a>
			<a href="javascript:;"  data-target="#Improvement">Continuous Improvement</a>
			<a href="javascript:;"  data-target="#Teamwork">Teamwork</a>
			<a href="javascript:;"  data-target="#Development">People Development</a>
			<a href="javascript:;"  data-target="#Partnership">Partnership</a>
		</div>
		<div class="clear"></div>
		<p class="showtext"></p>
		<!-- Modal -->
		<div class="modal fade" id="InfoViewmore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">VISION & CORE VALUE</h4>
		      </div>
		      <div class="modal-body">
		      <img src="<?=base_url()?>assets/img/icon/vision-and-values.png" style="  float:left;    margin-top: 27px;  margin-bottom: 20px;"/>
		      <div>  
		      	Priding ourselves on being the Leading HR Consulting firm in Vietnam, we provide <b>Total HR Solutions</b> to
				established multinationals and large Vietnamese corporations.<br/>

				At Talentnet, we value the vital contribution of people to our organization’s successes and ASEAN footprint
				expansion. We nurture and foster We Care culture, which promotes an inspiring and caring working
				environment to pursue our mission <span style="color: #821313; font-weight: bold;">of making the difference in the lives of every employee.</span>
			  </div>

		      </div>
		    </div>
		  </div>
		</div>


		<div class="modal fade" id="Professionalism" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Professionalism</h4>
		      </div>
		      <div class="modal-body">
		       
		        <div><img src="<?=base_url()?>assets/img/icon/professionalism.png"/> We hold ourselves and others accountable for promises and commitments.</div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="Improvement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Continuous Improvement</h4>
		      </div>
		      <div class="modal-body">
		      
		        <div>
		        <img src="<?=base_url()?>assets/img/icon/continuous-improvement.png"/>
		        We enhance our efficiency by continuously improving the business processes.</div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="Teamwork" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Teamwork</h4>
		      </div>
		      <div class="modal-body">
		        
		        <div>
		        <img src="<?=base_url()?>assets/img/icon/teamwork.png"/>
		        We promote effective collaboration in and across functions. We treat everyone with respect and fairness regardless of individual differences.</div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="Development" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">People Development</h4>
		      </div>
		      <div class="modal-body">
		       
		        <div><img src="<?=base_url()?>assets/img/icon/people-development.png"/>
		        We engage our talents through motivating, effective learning and coaching.</div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="Partnership" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Partnership</h4>
		      </div>
		      <div class="modal-body">
		        
		        <div><img src="<?=base_url()?>assets/img/icon/partnership.png"/>
		        We sustain our long-term relationship with clients through service excellence.</div>
		      </div>
		    </div>
		  </div>
		</div>
		
	</div>
	<div class="row content-row">
		<div class="ab-l col-md-8">
			<div class="jobboard">
				<h2 class="sub_title">JOB BOARD</h2>
				<form class="form-inline" role="form" method="get">
					<div class="form-group">
						<div class="input fst"><input type="text" name="keyword" id="txtKeyword" value="<?php  if(!empty($getkeyword)) echo $getkeyword;?>" placeholder="<?php if(empty($getkeyword)) echo 'Enter JOB TITLE'; ?>"></div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="sl-by">
							<div class="select">
							
								<select class="js-select" name="level">
									<option value="" <?php if($this->input->get("level") == '') echo 'selected="selected"'?> >Select LEVEL</option>
									<option value="Assistant" <?php if($this->input->get("level") == 'Assistant') echo 'selected="selected"'?> >Assistant</option>
									<option value="Consultant" <?php if($this->input->get("level") == 'Consultant') echo 'selected="selected"'?> >Consultant</option>
									<option value="Senior-Consultant" <?php if($this->input->get("level") == 'Senior-Consultant') echo 'selected="selected"'?> >Senior Consultant</option>
									<option value="Supervisor" <?php if($this->input->get("level") == 'Supervisor') echo 'selected="selected"'?> >Supervisor</option>
									<option value="Deputy-Manager" <?php if($this->input->get("level") == 'Deputy-Manager') echo 'selected="selected"'?> >Deputy Manager</option>
									<option value="Manager" <?php if($this->input->get("level") == 'Manager') echo 'selected="selected"'?> >Manager</option>
									
									
								</select>														
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="sl-by">
							<div class="select">
							
								<select class="js-select" name="function">
									<option value="">Select FUNCTION</option>
									<?php
									if($categories)
									 foreach ($categories as $key => $value) {
									?>
									<option value="<?=$value->id?>" <?php if($this->input->get("function") == $value->id) echo 'selected="selected"' ?> ><?=$value->{'name_'.$languageurl}?></option>
									<?php 
										}
									?>
								</select>													
							</div>
							<div class="clearfix"></div>
						</div>
					</div>			
						
					<div class="form-group">
						<div class="sl-by">
							<div class="select">
								<select class="js-select" name="location">
									<option value="">Select LOCATION</option>
									<?php
									if($provinces)
									 foreach ($provinces as $key => $value) {
									?>
									<option value="<?=$value->id?>" <?php if($this->input->get("location") == $value->id) echo 'selected="selected"' ?> ><?=$value->name?></option>
									<?php 
									}?>
								</select>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="form-group" style="float: right;">
						<div class="search"><input type="submit" name="search" id="btSearchEntry" value="SEARCH" class="btn-search"></div>
					</div>
				</form>
				<div class="clearfix" style="margin-bottom: 15px;"></div>
				<div class="row job-list" id="scroll-list">
					<table>
						<!-- 10 items -->
						<?php if($result){
							foreach ($result as $key => $value) {
						 ?>
						<tr>
							<td style="width: 200px;">
								<div class="job-title <?php if($value->is_hot == 1) echo 'hot-tit';?>"><a href="<?=PATH_URL_LANG.'career/'.$value->{'slug_'.$languageurl}?>"?><?=$value->{'name_'.$languageurl}?></div>
								<div class="job-info"><p class="text-mute"><?=date("d-m-Y",strtotime($value->created))?>| <span class="job-location"><?=$value->province?></span></p></div>
							</td>
							<td>
								<div class="job-department">
									<?=$value->{'cat_'.$languageurl}?>
								</div>
							</td>
							<td>
								<div class="job-name">
									<?=$value->level?>
								</div>
							</td>
						</tr>
						
						<?php } 
						}
						?>
					</table>
					<?php
						if(!empty($pagination)){
					?>
					<div class="listpage page-bar clearfix">
						<div class="pull-left">
							<p class="text-mute">Display <?=$pageNum?> <i class="fa fa-long-arrow-right"></i> 10 / Total: <?=$totalRows?></p>
						</div>
						<div class="pull-right">
								<?=$pagination?>
								<p style="padding: 17px 0px 0px;display: block;margin: 20px 0px 0px;    text-align: right;">
									<input style="width: 40px;padding: 3px;height: 25px;" type="text" id="numpage"/> 
									<a href="javascript:;" id="gopage" style="background: #4f2507; color: #fff; width: 40px; padding: 3px 4px; height: 25px; font-size: 13px; margin-left: 6px;"> Go to page </a>
								</p>
						</div>
					</div>	
					<?php
						}
					?>
	
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4">
			<div class="recruitment-process">
				<h2 class="sub_title">RECRUITMENT PROCESS</h2>
				<div class="process">
					<a href="javascript:;"  data-toggle="modal" data-target="#Application"><span class="process-number"><label>1</label></span><span class="process-name">Application</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#ScreeningInterview"><span class="process-number"><label>2</label></span><span class="process-name">Screening Interview</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#Test"><span class="process-number"><label>3</label></span><span class="process-name">Assessment</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#SecondInterview"><span class="process-number"><label>4</label></span><span class="process-name">Second Interview</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#FinalInterview"><span class="process-number"><label>5</label></span><span class="process-name">Final Interview</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#ReferenceCheck"><span class="process-number"><label>6</label></span><span class="process-name">Reference Check</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#Offer"><span class="process-number"><label>7</label></span><span class="process-name">Offer</span></a>
					<a href="javascript:;"  data-toggle="modal" data-target="#Onboarding"><span class="process-number"><label>8</label></span><span class="process-name">On boarding</span></a>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="Application" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Application</h4>
				      </div>
				      <div class="modal-body">
				      	<p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/application.png"/></p>
				        <p>Start your application by clicking on APPLY button and sending us your most updated CV. </p>

						<p>- We will contact you within 02 weeks since the date of your application. Please be noted that only shortlisted candidates will be contacted for Screening Interview. </p>

						<p>- All of CVs submitted will be kept in our Talent database. If you’re not contacted for a your preferred job, you may be referred to other available vacancies at Talentnet in the future. </p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="ScreeningInterview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Screening Interview</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/screening-interview.png"/></p>
				        <p>
				        	We would like to meet you in person to understand your motivation to apply for Talentnet, learn more about your competency and listen to your career expectation and aspiration. We will move your application to the next stage should you fit into the qualities we are looking for.
				        </p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="Test" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Assessment</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/test.png"/></p>
				        <p>The assessment tests evaluates your technical competencies required for certain job needs. There will be different test formats depending on specific vacancy that you apply for.</p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="SecondInterview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Second Interview</h4>
				      </div>
				      <div class="modal-body">
				      	<p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/second-interview.png"/></p>
				        <p>We use behavioral-based interview to get to know your accomplishment, skills and capabilities. We aim to see how you would join in Talentnet working environment and culture.</p>
						<p>This is also a great opportunity to find out more about us. We respect two-way communication and would love to address any question or concern of yours.</p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="FinalInterview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Final Interview</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/final-interview.png"/></p>
				        <p>We’ll go into greater details around your skills and capabilities. Please be expected to have a one-on-one session or a panel interview. A panel interview usually consists of two or three interviewers. This is also an opportunity to have an in-depth understanding of our unique culture, values and endless career paths.</p>
				        <?php if(0){
				        	//<p><b><span style="color:#a84216">6. Presentation</span></b></p>
				        }?>
						<p>Presentation is applicable for Deputy Manager level and above (if any).</p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="ReferenceCheck" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Reference Check</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/reference-check.png"/></p>
				        <p>We would like to receive the feedback from your line managers and colleagues at your previous companies to understand how your performance and competency are evaluated to prepare for your Training & Development plan.</p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="Offer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Offer</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/job-offer.png"/></p>
				        <p>Congratulations! You’ve proven you have a lot to offer. We look forward to welcoming you at Talentnet, where you will work and grow with our senior leaders, face fresh and exciting challenges in a consulting firm, raise the profile and business impact of Human Resources Management on Organization Development.</p>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="Onboarding" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">On boarding</h4>
				      </div>
				      <div class="modal-body">
				      <p style="text-align:center;"><img src="<?=base_url()?>assets/img/icon/recruitment-process/on-boarding.png"/></p>
				        <p>HR will conduct a brief orientation to help new employees obtain necessary knowledge for a smooth and effective integration.</p>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
			<?php if ($categories) 
			{
			
			?>
			<div class="area-opportunities" style="display:none;">
				<h2 class="sub_title">AREAS OF OPPORTUNITIES</h2>
				
				<div class="areas">
					<?php foreach ($categories as $key => $value) {
					?>
					<details>
						<summary class="clearfix"><?=$value->{'name_'.$languageurl}?>
							<?php if(!empty($value->{'description_'.$languageurl}) && $value->{'description_'.$languageurl} != ''){ ?>
								<span class="pull-right">+</span>
							<?php }?>
						</summary>
						<?php if(!empty($value->{'description_'.$languageurl})){ ?>
						<?='<p>'.$value->{'description_'.$languageurl}.'</p>'?>
						<?php } ?>
					</details>
					<?php } ?>
				</div>
				
			</div>
			<?php 
			}
			?>
		</div>
	</div>
	<div class="row content-row">
		<div class="banner-career">
			<?php if($banner) { ?>
			<a href="<?=$banner->link?>"><img src="<?=img(DIR_UPLOAD_BANNER.$banner->image)?>"/></a>
			<?php } ?>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		Page.home();
	});
</script>
<style type="text/css">
	.listpage .bg-pager .pagination, 
	.listpage .bg-pager{
		border-top: none !important;
		padding: 0px !important;
		margin: 0px !important;
	}
	.listpage {
		padding: 12px 0px !important;
	    border-top: 1px solid #e5e5e5 !important;
	}
</style>