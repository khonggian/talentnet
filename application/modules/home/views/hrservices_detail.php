<style>
#ab-brochure-popup{
	max-width: 700px !important;
}
.btn-carrer {
	width: 150px !important;
}
.ab-submit-status {
	min-height: 28px !important;
}
.padding-column2 {
	padding-left: 20px;
}
.item-status {
	padding-left: 0px !important;
}
.btn_download{
	color: white !important;
	background-color: #A84216;
	padding: 10px 20px;
	border-radius: 4px;
	text-transform: uppercase;
}
.btn_download:hover{
	color:white;
}
</style>

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
							<div class="col-md-7"><div><p class="phone"><?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
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
							<div class="col-md-6"><div><p class="phone"><?=$office->phone?></p><p class="mail"><a href="mailto:<?=$office->email?>"><?=$office->email?></a></p></div></div>
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

<div style="display: none;">
	<div id="ab-brochure-popup">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">DOWNLOAD</div>
            <div class="note">Please enter the information below to download file</div>
            <form method="post" id="form_brochure_info" class="contact-form-responsive">
				<table style="width:100%">
				  <tr>
				    <td style="width: 340px" valign="top">
						<div class="ab-submit">
							<div class="item">
								 <div class="form_label"><?=lang('fullname')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="fullname" value="" placeholder="<?=lang('enter').' '.lang('fullname')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('title')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="title" value="" placeholder="<?=lang('enter').' '.lang('title')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('company')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="company" value="" placeholder="<?=lang('enter').' '.lang('company')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('phone')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left "><input type="text" name="phone" value="" placeholder="<?=lang('enter').' '.lang('phone')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label">Email <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="email" value="" placeholder="<?=lang('enter')?> email" /></div>
								<div class="clear"></div>
							</div>
							<div class="item item-captcha">
								<div class="form_label"><?=lang('verification')?> <span class="note-require">(*)</span></div>
								<div class="left ab-submit-text">
									<div class="verifi" id="box_catpcha">
										<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
										<span>Can’t see image?</span>
										<a href="javascript:void(0)" id="btRefresh" title="">Reload</a>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="ab-submit-text left "><input type="text" name="captcha" value="" placeholder="<?=lang('enter').' '.lang('verification')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="clearall"></div>
						</div>
					</td>
				    <td style="width: 320px" valign="top">
						<div class="ab-submit padding-column2">
							<div class="form-group">
								<div class="lable" style="line-height: 18px;"><?=lang('how_know')?> <span> *</span></div>
								<div class="right-group">
	                                <div class="select">
	    								<select onchange="contact_change_know(this);" class="js-select" name="how_know_choose" id="how_know_choose">
	    									<option value="<?=lang('select')?>"><?=lang('select')?></option>
	    									<option value="<?=lang('how_know_1')?>"><?=lang('how_know_1')?></option>
	    									<option value="<?=lang('how_know_2')?>"><?=lang('how_know_2')?></option>
	    									<option value="<?=lang('how_know_3')?>"><?=lang('how_know_3')?></option>
	    									<option value="<?=lang('how_know_4')?>"><?=lang('how_know_4')?></option>
	    									<option value="<?=lang('how_know_5')?>"><?=lang('how_know_5')?></option>
	    									<option value="<?=lang('how_know_6')?>"><?=lang('how_know_6')?></option>
	    									<option value="<?=lang('how_know_7')?>"><?=lang('how_know_7')?></option>
	    									<option value="<?=lang('how_know_8')?>"><?=lang('how_know_8')?></option>
	    									<option value=""><?=lang('how_know_9')?></option>
	    								</select>
	                                </div>
									<div class="clearfix"></div>
									<div id="how_know_group" class="input">
										<input type="text" class="field_state" name="how_know" id="how_know" placeholder="Others (please specify)" value=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<di<div class="form-group" id="chkLookingDiv">
								<div class="lable" style="line-height: 18px;"><?=lang('looking_for')?> <span class="required"> *</span></div>
								<div class="right-group">
									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('executive_search')?>"/>
									<span><?=lang('executive_search')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('hr_consulting')?>"/>
									<span><?=lang('hr_consulting')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('mercer_salary_surveys')?>"/>
									<span><?=lang('mercer_salary_surveys')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('payroll_outsourcing')?>"/>
									<span><?=lang('payroll_outsourcing')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('hr_services_market')?>"/>
									<span><?=lang('hr_services_market')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLooking[]" value="<?=lang('choise_others')?>"/>
									<span><?=lang('choise_others')?></span>
									<div style="padding-top:5px;" class="clearfix"></div>
									<div class="input">
										<input type="text" class="field_state" name="choise_others_text" id="choise_others_text" placeholder="<?=lang('choise_others')?>"/>
									</div>

								</div>
								<div class="clearfix"></div>

								<div class="ab-submit">
									<div class="item item-status">
										<p class="ab-submit-status red"></p>
									</div>
								</div>
								<div class="ab-submit">
									<div class="item">
										<a class="btn-carrer btn-carrer-create signin f-bb" title="Send" href="javascript:void(0);"><?=lang('send')?></a>
									</div>
								</div>
							</div>
						</div>
					</td>
				  </tr>


				</table>
            </form>
		</div>
	</div>
</div>

<script type="text/javascript">
var lang_click="";
var link_down="";
var choise_others_empty = "<?=lang('choise_others_empty')?>";
var choise_service_offerings = "<?=lang('choise_service_offerings')?>";

function newCaptcha() {
	$('#btRefresh').trigger('click');
}

function DisplayMessage(message, elem) {
	var el_status = $('#form_brochure_info .ab-submit-status');
	el_status.html(message);
	elem.focus();
}
function contact_change_know(element) {
	$("#how_know").val(element.value);
	if(element.value != "") {
		$("#how_know_group").hide();
	} else {
		$("#how_know_group").show();
	}
}
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






	$('#box_catpcha #btRefresh').bind('click',function(){
		rq= '?'+ new Date().getTime();;
		$('#box_catpcha img').attr('src',base_url+'user/captcha'+rq);
	});
	$('.btn_download').click(function(){
		lang_click=$(this).data('id');
		link_down=$(this).attr('rel');
		$('#btRefresh').trigger('click');
	});
    $('.btn_download').fancybox();
    $('#form_brochure_info .btn-carrer').bind('click',function(){
		if(link_down != "" && link_down.indexOf("http") != 0) {
			link_down = '<?=base_url()?>' + link_down;
		}
        var el_status = $('#form_brochure_info .ab-submit-status');
		var $this= $(this);
        if(!$(this).hasClass('disabled')){
            $(this).addClass('disabled');
            el_status.html('');

			var data = {};
			var chkLooking = "[";
			var stop = false;
			$('input[name*="chkLooking"]').each(function(index){
				if($(this).is(':checked')) {
					if(parseInt(index) == 5) {
						if($.trim($("#choise_others_text").val()) == "") {
							DisplayMessage(choise_others_empty, $("#choise_others_text"));
							stop = true;
						} else {
							chkLooking = chkLooking + "," + $.trim($("#choise_others_text").val());
						}
					} else {
						chkLooking = chkLooking + "," + $(this).val();
					}
				}
			});

			chkLooking = chkLooking.replace("[,", "").replace("[", "");
			if(chkLooking == "") {
				DisplayMessage(choise_service_offerings, $("#chkLookingDiv"));
				stop = true;
			}
			if(stop == true) {
				$this.removeClass('disabled');
				return;
			}

            var info={
				action: link_down,
                token:token,
                fullname: $('#form_brochure_info input[name="fullname"]').val(),
                title : $('#form_brochure_info input[name="title"]').val(),
                company : $('#form_brochure_info input[name="company"]').val(),
                phone : $('#form_brochure_info input[name="phone"]').val(),
                email : $('#form_brochure_info input[name="email"]').val(),
				captcha : $('#form_brochure_info input[name="captcha"]').val(),
				how_know : $('#form_brochure_info input[name="how_know"]').val(),
				chkLooking : chkLooking
                }
           $.post('<?=base_url()?>en/block/ajax_download',info,function(res){

                if(res.error.length>0)
                    el_status.html(res.error[0].txt);
                else{
                    $('#form_brochure_info input[name="fullname"]').val('');
                    $('#form_brochure_info input[name="title"]').val('');
                    $('#form_brochure_info input[name="company"]').val('');
                    $('#form_brochure_info input[name="phone"]').val('');
                    $('#form_brochure_info input[name="email"]').val('');
					$('#form_brochure_info input[name="captcha"]').val('');
					$('#form_brochure_info input[name="how_know"]').val('');
					$('#form_brochure_info input[name="choise_others_text"]').val('');
                    $.fancybox.close();
     				// $('#ab-brochure-popup-click').trigger('click');
					// $('#btRefresh').trigger('click');
					/*
					if(lang_click=="en"){
						window.location = '<?=base_url()?>assets/Mercer and Talentnet Salary Survey 2015.pdf';
					}else{
						window.location = '<?=base_url()?>assets/Ket Qua Khao Sat Luong Mercer va Talentnet 2015.pdf';
					}
					*/
					window.location = link_down;
                    setTimeout(function(){
                    	window.location.href = '<?=PATH_URL_LANG?>' + 'thank-you';
                    }, 200);


                }

				$this.removeClass('disabled');
           },'JSON');
        }
    });
});

</script>
