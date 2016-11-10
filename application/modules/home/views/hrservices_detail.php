<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$description = language('description');
	$content = language('content');
	$slug = language('slug');
?>
<div id="about-talent" class="content-bg1 hr-detail">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.url_lang(lang('hr_services'))?>" title="<?=lang('hr_services')?>"><?=lang('hr_services')?></a><span class="active"><?=$category->$name?></span>
		</div>
		<div class="ab-l col-md-8">
			<?php if(!empty($category)){?>
			<div class="ab-about">
				<h1 class="top-tt"><?=$category->$name?></h1>
				<!-- <div class="banner-main mt10">
					<img src="<?=base_url()?>assets/img/img-news-detail.jpg" class="img-responsive" alt="" />
				</div> -->
				<div class="date-bar-detail">
					<div class="row">
						<!--<div class="col-sm-4"><?=date('d/m/Y , H:i',strtotime($category->created))?></div>-->
					</div>
				</div>
				<div class="detail-descript" style="margin-top:0px;">

					
					<?php if($result){ ?>
					<?php foreach($result as $key=>$row){ ?>
					<h2 class="sub_title"><?=$row->$name?> <span >view more</span></h2>
					<div class="sub_content">
						<?=output_editor($row->$content)?>
						<?php
							$sub=$this->model->fetch('*','wz_hrservices_sub2',"`status` = 1 and hrservices_sub={$row->id}","order","asc");
							if($sub){
							foreach($sub as $key=>$row2){ 
						?>
							<h3 class="sub2_title"><?=$row2->$name?><span class="arrow"></span></h3>
							<div class="sub2_content">
								<?=output_editor($row2->$content)?>
							</div>
							<?php } ?>
							<?php } ?>
					</div>
					<?php } ?>
					<?php } ?>
					<h2 class="sub_title ctu"><?=lang('contact_us')?></h2>
					<div class="sub_content info">
						<?php 
							$category_offline = language('category');
							$position = language('position');
							if(!empty($office_location)){
								$i = 0;
								foreach($office_location as $office){
						?>

						<div class="row <?=$i%2!=0?'one':'';?>">
							<div class="col-md-5 f-bb">
								<div>
									<span><?=$office->$name?></span>
									<p class="job"><?=$office->$position?></p>
								</div>
							</div>
							<div class="col-md-7"><div><p class="phone">+<?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
						</div>

						<?php $i++;}
						}
						?>
					</div>
				</div>
				<!-- <div class="ab-story services-contact">
					<h2 class="f-bb"><?=lang('contact_us')?><a class="bullet active" title=""></a></h2>
					<div class="ab-story-ct" style="display:block">
						<?php 
							$category_offline = language('category');
							$position = language('position');
							if(!empty($office_location)){
								$i = 0;
								foreach($office_location as $office){
						?>

						<div class="row <?=$i%2!=0?'one':'';?>">
							<div class="col-md-6 f-bb">
								<div>
									<span><?=$office->$name?></span>
									<p class="job"><?=$office->$position?></p>
								</div>
							</div>
							<div class="col-md-6"><div><p class="phone">+<?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
						</div>

						<?php $i++;}
						}
						?>
					</div>
				</div> -->
			</div>
			<?php if(!empty($get_category) && $this->session->userdata('uid')){
					if($get_category->slug_en == 'talentnet-expertise'){
			?>
			<div class="mt20 job-detail">
				<input type="button" class="btn-update btn-sign-in w131 p_submit" id="download_now" value="DOWNLOAD NOW" data-id="<?=$result->id?>" />
			</div>
			<?php }
			}
			?>
		  <?php }?>
		</div>
		<div class="ab-r col-md-4 hr">
			<?php //pr($category,1); 
				if(!empty($category)){ ?>
            	<?=modules::run('block/endorse',intval($category->id)+1)?>
			<?php }?>	
			<?=modules::run('block/brochure')?>
			<?=modules::run('block/you_surely_use')?>
			
			
			
			<?=modules::run('home/in_the_news')?>
			<?php
			if($this->uri->segment(3) == 'payroll-and-hr-outsourcing' || $this->uri->segment(3) == 'dich-vu-gia-cong-phan-mem-nhan-su-va-luong'){
				//echo modules::run('block/salary_calc_for','employer');
			}
			?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.sub_title',function(){
			$this=$(this);
			$this.next().stop().slideToggle();
		});
		$('.sub_title').first().trigger('click');
		$('.sub_title.ctu').trigger('click');
		$(document).on('click','.sub2_title',function(){
			$this=$(this);
			$this.find('.arrow').toggleClass('active');
			$this.next().stop().slideToggle();
		});
	});
</script>