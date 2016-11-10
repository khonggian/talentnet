<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$slug = language('slug');
?>
<div id="about-talent" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('Market_Entry')?></span>
		</div>
		<div class="ab-l col-md-8">
			<div class="ab-about">
				<div class="top_tt_ab">
					<p>Talentnet – a Vietnamese company operating under License No. 4103007842 issued 18 September 2007 by DPI.</p>
				</div>
				<?php if(!empty($result)){
						foreach($result as $r){
				?>
				<div class="ab-story">
					<h1 class="f-bb"><?=$r->$name?> <a href="javascript: void(0);" class="viewall_tt">View all services</a></h1>
					<div class="ab-story-ct">
						<?=$r->$description?>
					</div>
				</div>
				<?php }
				}
				?>
				<div class="ab-client">
					<div class="ab-tt f-bb">Make An Enquiry</div>
					<div class="border_ata">
						<div class="row ata">
							<img src="<?=base_url()?>assets/img/img_ata.jpg" alt="" />
							<div class="text">
								<div class="tt">HO CHI MINH CITY</div>
								<p class="ad">4th Floor, Star Building Mac Dinh Chi Street, District 1 Ho Chi Minh City, Vietnam</p>
								<p class="ad"><strong>Tel: </strong>(84 8)  6 291 4188</p>
								<p class="ad"><strong>Fax: </strong>(84 8) 6 291 4088</p>
								<a href="" class="mail">contact@talentnet.vn</a>
							</div>
							<div class="clearAll"></div>
						</div>
						<div class="row ata">
							<img src="<?=base_url()?>assets/img/img_ata.jpg" alt="" />
							<div class="text">
								<div class="tt">HO CHI MINH CITY</div>
								<p class="ad">4th Floor, Star Building Mac Dinh Chi Street, District 1 Ho Chi Minh City, Vietnam</p>
								<p class="ad"><strong>Tel: </strong>(84 8)  6 291 4188</p>
								<p class="ad"><strong>Fax: </strong>(84 8) 6 291 4088</p>
								<a href="" class="mail">contact@talentnet.vn</a>
							</div>
							<div class="clearAll"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ab-r col-md-4">
			<div class="ab-surely">
				<div class="ab-surely-tt f-bb"><?=lang('Market_Entry')?></div>
				<div class="tab-surely">
					<?php if(!empty($category)){
							$a = $this->uri->segment(3)==''?0:'';
							foreach($category as $k => $c){
					?>
						<div class="item-surely">
							<div class="btn-surely"><a class="f-bb <?=($this->uri->segment(3)==$c->$slug || $a == $k)?'active':''?>" href="<?=PATH_URL_LANG.url_lang(lang('Market_Entry')).'/'.$c->$slug?>" title="<?=$c->$name?>"><?=$c->$name?></a></div>
							<!--<div class="item-surely-child">
								<ul>
									<li><a class="f-bb" href="javascript:void(0);" title="">Aenean massa</a></li>
									<li><a class="f-bb" href="javascript:void(0);" title="">Nam eget dui</a></li>
									<li><a class="f-bb" href="javascript:void(0);" title="">Aenean vulputate eleifend</a></li>
									<li><a class="f-bb" href="javascript:void(0);" title="">Vivamus elementum semper nisi</a></li>
									<li><a class="f-bb" href="javascript:void(0);" title="">Aenean massa</a></li>
								</ul>
							</div>-->
						</div>
					<?php }
					}
					?>
				</div>
			</div>
			<?=modules::run('block/brochure')?>
			
			<div class="ab-services">
				<div class="ab-services-tt f-bb"><?=lang('services')?><?php if(count($hrservices_category) >= 2){?><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="View all">View all</a><?php }?></div>
				<div class="ab-services-item">
					<?php if(!empty($hrservices_category)){
							foreach($hrservices_category as $hrservices){
					?>
					<div class="row">
						<div class="col-md-3"><img src="<?=img(DIR_UPLOAD_HRSERVICES_CATEGORY.$hrservices->image,83,57)?>" alt="" /></div>
						<div class="col-md-9">
							<div class="ab-services-item-tt f-bb"><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="<?=CutText($hrservices->$name,40)?>"><?=CutText($hrservices->$name,40)?></a></div>
							<div class="ab-services-item-if"><?=CutText($hrservices->$description,80)?></div>
						</div>
					</div>
					<?php }
					}
					?>
				</div>
			</div>
			
			<?=modules::run('home/in_the_news')?>

		</div>
	</div>
</div>
<div style="display: none;">
	<div id="ab-pu-endorse">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">ENDORSE NOW</div>
			<div class="note">Please select the skills you want to endorse</div>
			<div class="ab-pu-endorse-form">
				<div class="ab-scroll">
					<div class="row">
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Advertising</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Online Marketing</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>SEO</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
						<div class="col-md-4">
							<input class="iCheck" type="checkbox" name="" value=""><span>Social Media</span>
						</div>
					</div>
				</div>
			</div>
			<div class="ab-submit">
				<div class="ab-submit-text left"><input type="text" name="" value="" placeholder="Enter your email" /></div><a class="left ab-submit-btn" href="javascript:void(0);" title=""></a>
				<div class="clearall"></div>
			</div>
		</div>
	</div>
</div>
<div style="display: none;">
	<div id="ab-pu-endorse-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">ENDORSE NOW</div>
			<div class="ab-pu-endorse-tk f-bb">
				<span>THANK YOU FOR YOUR ENDORSEMENT!</span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" title=""></a></div>
		</div>
	</div>
</div>