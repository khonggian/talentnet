<?php
	$name = language('name');
	$slug = language('slug');
	$title=language('title');
	$content=language('content');
	$array_about = array('about-talentnet','gioi-thieu-talentnet','client-list','danh-sach-khach-hang','executive-team','doi-ngu-dieu-hanh','awards','giai-thuong','office-locations','dia-diem-van-phong');
	$array_candidates = array('search-job','tim-kiem-viec-lam','tao-cong-viec','create-cv', 'sharing-corner' , 'account-management');
?>
<div id="news-talent" class="content-bg1 licenter fix-pager">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active">Sitemap</span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about faq">
				<h1 class="f-bb">Sitemap</h1>
				<div class="wr-licenter">
					<ul class="sitemap">
						<li class="home"><a href="<?=PATH_URL_LANG?>" class="hover"><?=lang('Homepage')?></a></li>
						<li class="about">
							<a class=""  href="<?=PATH_URL_LANG.url_lang(lang('About_Talentnet'))?>"><?=lang('About_Talentnet')?><span class="caret"></span></a>
							<ul>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('About_Talentnet'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('About_Talentnet')))?'active':''?>" title="<?=lang('About_Talentnet')?>"><?=lang('About_Talentnet')?></a></li>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('Awards'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('Awards')))?'active':''?>" title="<?=lang('Awards')?>"><?=lang('Awards')?></a></li>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('Client_List'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('Client_List')))?'active':''?>" title="<?=lang('Client_List')?>"><?=lang('Client_List')?></a></li>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('Executive_team'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('Executive_team')))?'active':''?>" title="<?=lang('Executive_team')?>"><?=lang('Executive_team')?></a></li>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('Partners'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('Partners')))?'active':''?>" title="<?=lang('Partners')?>"><?=lang('Partners')?></a></li>
								<li><a href="<?=PATH_URL_LANG.url_lang(lang('Office_Locations'))?>" class="<?=($this->uri->segment(2)==url_lang(lang('Office_Locations')))?'active':''?>" title="<?=lang('Office_Locations')?>"><?=lang('Contact_us')?></a></li>
							</ul>
							
						</li>
						<li class="service">
							<a class="" href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>"><?=lang('hr_services')?><span class="caret"></span></a>
							<?php if(!empty($hrservices_category)){?>
							
								
									<ul>
										<?php $i = 0;
												foreach($hrservices_category as $hrservices){?>
										<li><a data-type="<?=$i?>" href="<?=PATH_URL_LANG.url_lang(lang('hr_services')).'/'.$hrservices->$slug ?>" class="<?=($this->uri->segment(3)==$hrservices->$slug)?'active':''?>" title="<?=$hrservices->$name?>"><?=$hrservices->$name?></a></li>
										<?php $i++;
										}
										?>
									</ul>
		
							<?php }?>
						</li>
						<li class="candidates">
							<a class="" href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>"><?=lang('Candidates')?><span class="caret"></span></a>
							
									<ul>
										<?php 
											if($this->uri->segment(1)=='en'){
										?>
											<li><a href="<?=PATH_URL_LANG?>search-job" class="<?=($this->uri->segment(2)=='search-job')?'active':''?>" title="<?=lang('Job_Search')?>"><?=lang('Job_Search')?></a></li>
											<!-- <li><a href="<?=PATH_URL_LANG?>account-management" class="<?=($this->uri->segment(2)=='account-management')?'active':''?>" title="<?=lang('Account_Management')?>"><?=lang('Account_Management')?></a></li> -->
											<!-- <li><a href="<?=PATH_URL_LANG?>create-cv" class="<?=($this->uri->segment(2)=='create-cv')?'active':''?>" title="<?=lang('Submit_CV')?>"><?=lang('Submit_CV')?></a></li> -->
											<li><a href="<?=PATH_URL_LANG.toSlug('Sharing_Corner')?>" class="<?=($this->uri->segment(2)==toSlug('Sharing_Corner'))?'active':''?>" title="<?=lang('Sharing_Corner')?>"><?=lang('Sharing_Corner')?></a></li>
											<!-- <li><a href="<?=PATH_URL_LANG?>job-alert" class="<?=($this->uri->segment(2)=='job-alert')?'active':''?>" title="<?=lang('job_match_alert')?>"><?=lang('job_match_alert')?></a></li> -->
											
										<?php
											}else{
										?>	
											<li><a href="<?=PATH_URL_LANG?>tim-kiem-viec-lam" class="<?=($this->uri->segment(2)=='tim-kiem-viec-lam')?'active':''?>" title="<?=lang('Job_Search')?>"><?=lang('Job_Search')?></a></li>
											<li><a href="<?=PATH_URL_LANG?>goc-chia-se" class="<?=($this->uri->segment(2)=='goc-chia-se')?'active':''?>" title="<?=lang('Sharing_Corner')?>"><?=lang('Sharing_Corner')?></a></li>
											<li><a href="<?=PATH_URL_LANG?>bao-cao-viec-lam" class="<?=($this->uri->segment(2)=='bao-cao-viec-lam')?'active':''?>" title="<?=lang('job_match_alert')?>"><?=lang('job_match_alert')?></a></li>
											<li><a href="<?=PATH_URL_LANG?>quan-ly-tai-khoan" class="<?=($this->uri->segment(2)=='quan-ly-tai-khoan')?'active':''?>" title="<?=lang('Account_Management')?>"><?=lang('Account_Management')?></a></li>
											<li><a href="<?=PATH_URL_LANG?>tao-cong-viec" class="<?=($this->uri->segment(2)=='tao-cong-viec')?'active':''?>" title="<?=lang('Submit_CV')?>"><?=lang('Submit_CV')?></a></li>
											
										<?php
											}
										?>
										
									</ul>

						</li>
						<li class=" market">
							<a class="" href="<?=!empty($new_arrivals_category)?PATH_URL_LANG.url_lang(lang('Market_Entry')).'/'.$new_arrivals_category[0]->$slug:'javscript:void(0);'?>"><?=lang('Market_Entry')?><span class="caret"></span></a>
							<?php if(!empty($new_arrivals_category)){?>
							
									<ul>
										<?php foreach($new_arrivals_category as $new_arrivals){ ?>
										<li><a href="<?=PATH_URL_LANG.($new_arrivals->slug_en=='faq'?($this->uri->segment(1)=='vi')?'thi-truong/cau-hoi':'market-entry/faq':url_lang(lang('Market_Entry')).'/'.$new_arrivals->$slug)?>" class="<?=($this->uri->segment(3)==$new_arrivals->$slug)?'active':''?>" title="<?=$new_arrivals->$name?>"><?=$new_arrivals->$name?></a></li>
										<?php }?>
									</ul>
								
								
							<?php }?>
						</li>
						<li class=" infomation">
							<a class="" href="<?=!empty($infomation_category)?PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$infomation_category[0]->$slug:'javscript:void(0)'?>"><?=lang('Information_Center')?><span class="caret"></span></a>
							<?php if(!empty($infomation_category)){?>
							
									<ul>
										<?php foreach($infomation_category as $infomation){?>
										<li><a href="<?=PATH_URL_LANG.url_lang(lang('Information_Center')).'/'.$infomation->$slug?>" class="<?=($this->uri->segment(3)==$infomation->$slug)?'active':''?>" title="<?=$infomation->$name?>"><?=$infomation->$name?></a></li>
										<?php }?>
									</ul>
								
								
							<?php }?>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div class="ab-r col-md-4">
            <?=modules::run('block/you_surely_use')?>
			<?=modules::run('block/brochure')?>
			<?=modules::run('home/in_the_news')?>
		</div>
	</div>
</div>