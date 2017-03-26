<?php
    $title_field = field('title');
    $address_field = field('address');
    $content = field('content');
?>
<?=modules::run('home/banner',current_url())?>
<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><span class="active"><?=lang('contact')?></span>
		</div>

		<div class="form-profile ct pdbt18">
			<h1 class="title"><?=lang('contact_us')?></h1>
			<div class="row contact-page">
				<div class="col-md-6">
					<div class="title3"><?=lang('talentnet_office')?></div>
                    <?php if(!empty($address)){?>
                        <?php foreach ($address as $val){?>
                            <div class="item-news-talent contact-page">
        						<div class="img"><a href="<?=$val->google_src?>" title="" class="popup_map"><img src="<?= img(DIR_UPLOAD_CONTACT_ADDRESS. $val->image,200,113);?>" alt="<?=$val->$title_field;?>" /></a></div>
        						<div class="text">
        							<div><a href="<?=$val->google_src?>" class="popup_map" title=""><strong><?=$val->$title_field;?></strong></a></div>
        							<div class="mt5">
                                        <!-- <?=$val->$address_field;?><br/>
                                        Tel: <?=$val->phone;?><br/>
                                        Fax: <?=$val->fax;?><br/>
                                        <a href="mailto:<?=$val->email;?>" title=""><?=$val->email;?></a> -->
                                        <?=$val->$content?>
                                    </div>
        						</div>
        						<div class="clearfix"></div>
        					</div>
                        <?php }?>
                    <?php }?>
				</div>
				<div class="col-md-6">
					<div class="title3"><?=lang('contact_form')?></div>
					<div class="fs14 c_a84216 mt17"><strong><?=lang('please_contact')?></strong></div>
                    <form action="" class="form-horizontal contact-form-responsive" role="form" method="post" enctype="multipart/form-data" id="frContact">

						<div class="form-group">
							<div class="lable"><?=lang('fullname')?> <span> *</span></div>
							<div class="input">
								<input type="text" class="field_fullname" name="fullname" placeholder="<?=lang('fullname')?>"/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="lable"><?=lang('your_position')?> <span> *</span></div>
							<div class="input">
								<input type="text" class="field_position"  name="position" placeholder="<?=lang('your_position')?>"/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="lable"><?=lang('company_name')?> <span> *</span></div>
							<div class="input">
								<input type="text" class="field_company" name="company" placeholder="<?=lang('company_name')?>"/>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="form-group">
							<div class="lable"><?=lang('phone_number')?> <span> *</span></div>
							<div class="input">
								<input type="text" class="field_phone" name="phone" onkeyup="this.value=this.value.replace(/[^\d]/,'')" placeholder="<?=lang('phone_number')?>"/>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="form-group">
							<div class="lable"><?=lang('email')?> <span> *</span></div>
							<div class="input">
								<input type="text" class="field_email" name="email"  placeholder="<?=lang('email')?>"/>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="form-group">
							<div class="lable"><?=lang('city_state_country')?> <span class="required"> *</span></div>
							<div class="input">
								<input type="text" class="field_state" name="state" placeholder="<?=lang('city_state_country')?>" value="Viet Nam"/>
							</div>
							<div class="clearfix"></div>
						</div>

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

						<div class="form-group" id="chkLookingDiv">
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
						</div>

						<div class="form-group">
							<div class="lable"><?=lang('your_request')?> <span> *</span></div>
							<div class="area">

                                <textarea class="txt_contact field_content" placeholder="<?=lang('your_request')?>" name="content"></textarea>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="lable hide-mobile"><span>&nbsp;</span></div>
							<div class="mt8 mbt20 btn-form">
								<div id="div_error" class="style-error"></div>
								<input type="button" value="<?=lang('send')?>" id="btn_send" class="btn-update btn_send btnSend" />
							</div>

							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
        </div>

	</div>
</div>
<script type="text/javascript">
	var choise_others_empty = "<?=lang('choise_others_empty')?>";
	var choise_service_offerings = "<?=lang('choise_service_offerings')?>";
	$(document).ready(function(){
		Page.contact();
		$(".popup_map")
		    .fancybox({
		        type: 'iframe',
		        autoSize : false,
		        beforeLoad : function() {
		             this.width = 600;
		             this.height = 450;
		        }
		    });
	});

	function contact_change_know(element) {
		$("#how_know").val(element.value);
		if(element.value != "") {
			$("#how_know_group").hide();
		} else {
			$("#how_know_group").show();
		}
	}
</script>
<a href="#ab-pu-endorse-tk" id="popup_tk"></a>
<div style="display: none;">
	<div id="ab-pu-endorse-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb"><?php //lang('contact_form')?></div>
			<div class="ab-pu-endorse-tk f-bb">
				<span> <?=lang('send_mail_text')?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a></div>
		</div>
	</div>
</div>
