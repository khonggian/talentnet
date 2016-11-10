<?php
	$name = ('name');
	$slug = ('slug');
?>
<!--Dashboard-->
<div class="dashboard">
    <!--Banner-->
    <?=modules::run('home/banner',uri_string())?>
    <!--End Banner-->
    <!--Content-->
    <div class="content">
        <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="fix-thumbnail">
                    <h4 class="title">JOBS WATCHING YOUR RESUME</h4>
                    <p>You have no matches because you have not posted a resume (or your resume is imcomlete/denide). Post your resume now!</p>
                    <button class="btn fix-btn">VIEW JOB</button>
                </div>
            </div>
        </div> -->

    	<div class="row list-item">
    		<div class="col-md-4 col-sm-12">
    			<div class="top-text">
                    <div class="t-tt"><?=lang("Manage")?></div>
    				<ul class="has-sub">
                        <li class="l4">
                            <a href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-cua-ban' : 'your-cv')?>" title="<?=lang('Your_CVs')?>"><?=lang('Your_CVs')?></a>
                            <ul>
                                <?php if(!$cv) {?>
                                <li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'create-cv':'tao-cong-viec')?>"><?=lang('Create_online')?></a></li>
                                 <?php }?> 
                                <?php if(!$cv_upload) {?>
                                <li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'upload_cv':'upload_cv')?>"><?=lang('Upload_CV')?></a></li>
                                <?php }?>
                                <li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'your-cv':'cong-viec-cua-ban')?>"><?=lang('View_Edit_CV')?></a></li>
                            </ul>
                        </li>
                        <!--<li class="l1">
                            <a href="<?=base_url().($this->uri->segment(1)=='en'?'en/submit-job-alert':'vi/dang-ky-bao-cao-viec-lam')?>" title="<?=lang('job_alert')?>"><?=lang('job_alert')?></a>
                            <ul>
                                <li><a href="<?=base_url().($this->uri->segment(1)=='en'?'en/job-alert':'vi/bao-cao-viec-lam')?>"><?=lang('view_edit_job_alert')?></a></li>
                                <li><a href="<?=base_url().($this->uri->segment(1)=='en'?'en/submit-job-alert':'vi/dang-ky-bao-cao-viec-lam')?>"><?=lang('create_job_alert')?></a></li>
                            </ul>

                        </li>-->
                        <li class="l3"><a href="<?=base_url().($this->uri->segment(1)=='en'?'en/profile':'vi/thong-tin-ca-nhan')?>" title="<?=$this->session->userdata('fullname')?>"><?=lang('Account')?></a></li>
                        
                    </ul>
    			</div>
    		</div>
    		<div class="col-md-8 col-sm-12" style="padding-right: 0px;">
    			<div class="top-text">
                    <div class="t-tt"><?=lang('jobs_matched_you')?></div>
                    <div>
						<?php if(!empty($result_jobs)){
							$count = round(count($result_jobs) / 2);
							$i = 0;
							foreach($result_jobs as $jobs){
						?>
						<?php if($i==0 || $i%$count==0){?>
						<div class="col">
							<ul>
						<?php } $i++; ?>
							<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job':'viec-lam').'/'.$jobs->$slug?>" title="<?=$jobs->$name?>"><?=$jobs->$name?></a></li>
						<?php if($i==0 || $i%$count==0 || count($result_jobs) <= $i){?>
							<?php if((count($result_jobs) - 1) == $i && count($result_jobs) > 7){?>
								<li><a href="<?=PATH_URL_LANG.($this->uri->segment(1) == 'vi' ? 'cong-viec-moi-phu-hop' : 'new-job-matched')?>" title="<?=lang('view_all_jobs')?>"><?=lang('view_all_jobs')?></a></li>
							<?php }?>
							</ul>
						</div>
						<?php }
							}
						}else{ ?>
                            <center><?=lang('updating')?></center>
						<?php } ?>
                    </div>
                    <div class="clearfix"></div>
    			</div>
    		</div>
        </div>
        <div class="row list-item">
    		<div class="col-md-4 col-sm-12">
    			<div class="item" title="" onclick="window.location.href='<?=PATH_URL_LANG.($this->uri->segment(1) == 'en' ? 'save-jobs' : 'cong-viec-da-luu')?>'">
    				<div>
                        <img src="<?=base_url()?>assets/img/dashboard/save-icon.png" class="img-responsive normal"/>
                        <img src="<?=base_url()?>assets/img/dashboard/save-icon-hover.png" class="img-responsive hover"/>
    				    <p><?=lang('save_jobs')?></p>
                    </div>
    			</div>
    		</div>            
    		<div class="col-md-4 col-sm-12">
    			<div class="item" title="" onclick="window.location.href='<?=PATH_URL_LANG.($this->uri->segment(1) == 'en' ? 'jobs-applied' : 'cong-viec-nop-don')?>'">
    				<div>
                        <img src="<?=base_url()?>assets/img/dashboard/apply-icon.png" class="img-responsive normal"/>
                        <img src="<?=base_url()?>assets/img/dashboard/apply-icon-hover.png" class="img-responsive hover"/>
    				    <p><?=lang('jobs_applied')?></p>
                    </div>
    			</div>
    		</div>
    		<div class="col-md-4 col-sm-12">
    			<div class="item" title="" onclick="window.location.href='<?=PATH_URL_LANG.($this->uri->segment(1) == 'en' ? 'my-download' : 'tai-ve-cua-toi')?>'">
    				<div>
                        <img src="<?=base_url()?>assets/img/dashboard/download-icon.png" class="img-responsive normal"/>
                        <img src="<?=base_url()?>assets/img/dashboard/download-icon-hover.png" class="img-responsive hover"/>
    				    <p><?=lang('my_download')?></p>
                    </div>
    			</div>
    		</div>            
    	</div>
    <!--End Content-->
</div>
<!--End Dashboard-->