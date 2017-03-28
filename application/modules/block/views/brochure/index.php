<style>
#ab-brochure-popup-right{
	max-width: 700px !important;
}
#ab-brochure-popup-right{
	/*min-width: 488px;*/
	width: 100%;
	max-width: 488px;
	height: 490px;
	background: #fff;
	position: relative;
}
#ab-brochure-popup-right .form_label{
    width:95px;
    line-height: 34px;
    position: absolute;
    top: 0;
    left: 0;
}
#ab-brochure-popup-right .form_label:empty{
		display: none;
}

#ab-brochure-popup-right .ab-submit-text{
    width:100%;
    margin-bottom:9px;
	float: right;
}

#ab-brochure-popup-right .item-captcha .ab-submit-text{
	height: 75px;
}

#ab-brochure-popup-right div.last{
    margin-bottom:18px;
}
#ab-brochure-popup-right .ab-submit-btn,#ab-brochure-popup-right .btn-carrer-right{
    float:left;
    margin-left:0;
	display: inline-block;
    border: 1px solid #7b3111;
    background: #a84216;
    font-size: 18px;
    color: #fff;
    padding: 6px 10px 8px;
    text-align: center;
	width: 150px !important;
}
.ab-submit-status-right {
	min-height: 28px !important;
}
.padding-column2 {
	padding-left: 20px;
}
.item-status {
	padding-left: 0px !important;
}

#ab-brochure-popup-right #how_know_right_group {
    margin-top: 12px;
    display: none;
}
@media (max-width: 767px) {
	#ab-brochure-popup-right .form_label{
		position: relative;
	}
	.ab-submit .item{
		padding-left: 0;
		min-height: 0;
	}
	#ab-brochure-popup-right .form_label:empty{
		display: none;
	}
}
</style>

<!--<div class="ab-brochure"><a href="<?=PATH_URL_LANG.'download'?>" title="Download"></a></div>-->
<div class="ab-brochure"><a href="#ab-brochure-popup-right" onclick="newCaptcha_Brochure()" id="popup_brochure_right" title="Download"><img src="<?=base_url()?>assets/img/btn/btn-brochure.png" alt="" /></a></div>
<div class="legislation" style="margin-bottom:20px"><a href="http://backup.talentnet.vn/edm/client-subcribe.html">Stay update with Vietnam HR Legislation</a></div>
<div style="display: none;">
	<div id="ab-brochure-popup-right">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<div class="ab-pu-endorse-tt f-bb">DOWNLOAD.</div>
            <div class="note">Please enter the information below to download our brochure</div>
            <form method="post" id="form_brochure_info_right" class="contact-form-responsive">
				<table style="width:100%">
				  <tr>
				    <td style="width: 340px" valign="top">
						<div class="ab-submit">
							<div class="item">
								 <div class="form_label"><?=lang('fullname')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="fullname_right" value="" placeholder="<?=lang('enter').' '.lang('fullname')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('title')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="title_right" value="" placeholder="<?=lang('enter').' '.lang('title')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('company')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="company_right" value="" placeholder="<?=lang('enter').' '.lang('company')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label"><?=lang('phone')?> <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left "><input type="text" name="phone_right" value="" placeholder="<?=lang('enter').' '.lang('phone')?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="form_label">Email <span class="note-require">(*)</span></div>
								<div class="ab-submit-text left"><input type="text" name="email_right" value="" placeholder="<?=lang('enter')?> email" /></div>
								<div class="clear"></div>
							</div>
							<div class="item item-captcha">
								<div class="form_label"><?=lang('verification')?> <span class="note-require">(*)</span></div>
								<div class="left ab-submit-text">
									<div class="verifi" id="box_catpcha_right">
										<div><img src="<?=PATH_URL_LANG.'user/captcha'?>" alt="" width="170" /></div>
										<span>Can’t see image?</span>
										<a href="javascript:void(0)" id="btRefresh_right" title="">Reload</a>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="item">
								<div class="ab-submit-text left "><input type="text" name="captcha_right" value="" placeholder="<?=lang('enter').' '.lang('verification')?>" /></div>
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
	    								<select onchange="contact_change_know_right(this);" class="js-select" name="how_know_right_choose" id="how_know_right_choose">
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
									<div id="how_know_right_group" class="input">
										<input type="text" class="field_state" name="how_know_right" id="how_know_right" placeholder="Others (please specify)" value=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<di<div class="form-group" id="chkLookingRightDiv">
								<div class="lable" style="line-height: 18px;"><?=lang('looking_for')?> <span class="required"> *</span></div>
								<div class="right-group">
									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('executive_search')?>"/>
									<span><?=lang('executive_search')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('hr_consulting')?>"/>
									<span><?=lang('hr_consulting')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('mercer_salary_surveys')?>"/>
									<span><?=lang('mercer_salary_surveys')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('payroll_outsourcing')?>"/>
									<span><?=lang('payroll_outsourcing')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('hr_services_market')?>"/>
									<span><?=lang('hr_services_market')?></span>
									<div class="clearfix_slim"></div>

									<input class="iCheck" type="checkbox" name="chkLookingRight[]" value="<?=lang('choise_others')?>"/>
									<span><?=lang('choise_others')?></span>
									<div style="padding-top:5px;" class="clearfix"></div>
									<div class="input">
										<input type="text" class="field_state" name="choise_others_text" id="choise_others_text_right" placeholder="<?=lang('choise_others')?>"/>
									</div>

								</div>
								<div class="clearfix"></div>

								<div class="ab-submit">
									<div class="item item-status">
										<p class="ab-submit-status-right red"></p>
									</div>
								</div>
								<div class="ab-submit">
									<div class="item">
										<a class="btn-carrer-right btn-carrer-create signin f-bb" title="Send" href="javascript:void(0);"><?=lang('send')?></a>
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
<a href="#ab-brochure-popup-tk" id="ab-brochure-popup-right-click"></a>
<div style="display: none;">
	<div id="ab-brochure-popup-tk">
		<a class="ab-pu-close" onclick="$.fancybox.close();" href="javascript:void(0);" title=""></a>
		<div class="ab-pu-endorse">
			<!--<div class="ab-pu-endorse-tt f-bb">ENDORSE NOW</div>-->
			<div class="ab-pu-endorse-tk f-bb" style="height: 110px;padding-left: 5px;padding-right: 5px;">
				<span><?=lang('thank_you_download_brochure')?></span>
			</div>
			<div class="txt-c"><a class="ab-btn-close" href="javascript:void(0);" onclick="$.fancybox.close();" title=""></a></div>
		</div>
	</div>
</div>
<script>
var choise_others_empty = "<?=lang('choise_others_empty')?>";
var choise_service_offerings = "<?=lang('choise_service_offerings')?>";

function newCaptcha_Brochure() {
	$('#form_brochure_info_right #btRefresh_right').trigger('click');
}

function DisplayMessage_Brochure(message, elem) {
	var el_status = $('#form_brochure_info_right .ab-submit-status-right');
	el_status.html(message);
	elem.focus();
}

function contact_change_know_right(element) {
	$("#form_brochure_info_right #how_know_right").val(element.value);
	if(element.value != "") {
		$("#form_brochure_info_right #how_know_right_group").hide();
	} else {
		$("#form_brochure_info_right #how_know_right_group").show();
	}
}

$(document).ready(function(){
	$('#box_catpcha_right #btRefresh_right').bind('click',function(){
		rq= '?'+ new Date().getTime();;
		$('#box_catpcha_right img').attr('src',base_url+'user/captcha'+rq);
	});

    $('#popup_brochure_right').fancybox();
    $('#ab-brochure-popup-right-click').fancybox();
    $('#form_brochure_info_right .btn-carrer-right').bind('click',function(){
        var el_status = $('#form_brochure_info_right .ab-submit-status-right');
		var $this= $(this);
        if(!$(this).hasClass('disabled')){
            $(this).addClass('disabled');
            el_status.html('');

			var data = {};
			var chkLookingRight = "[";
			var stop = false;
			$('input[name*="chkLookingRight"]').each(function(index){
				if($(this).is(':checked')) {
					if(parseInt(index) == 5) {
						if($.trim($("#choise_others_text_right").val()) == "") {
							DisplayMessage_Brochure(choise_others_empty, $("#choise_others_text_right"));
							stop = true;
						} else {
							chkLookingRight = chkLookingRight + "," + $.trim($("#choise_others_text_right").val());
						}
					} else {
						chkLookingRight = chkLookingRight + "," + $(this).val();
					}
				}
			});

			chkLookingRight = chkLookingRight.replace("[,", "").replace("[", "");
			if(chkLookingRight == "") {
				DisplayMessage_Brochure(choise_service_offerings, $("#chkLookingRightDiv"));
				stop = true;
			}
			if(stop == true) {
				$this.removeClass('disabled');
				return;
			}

            var info={
				action:"Download brochure",
                token:token,
                fullname: $('#form_brochure_info_right input[name="fullname_right"]').val(),
                title : $('#form_brochure_info_right input[name="title_right"]').val(),
                company : $('#form_brochure_info_right input[name="company_right"]').val(),
                phone : $('#form_brochure_info_right input[name="phone_right"]').val(),
                email : $('#form_brochure_info_right input[name="email_right"]').val(),
				captcha : $('#form_brochure_info_right input[name="captcha_right"]').val(),
				how_know : $('#form_brochure_info_right input[name="how_know_right"]').val(),
				chkLooking : chkLookingRight
                }
           $.post('<?=PATH_URL_LANG.'block/brochure_ajax_post_info'?>',info,function(res){

                if(res.error.length>0)
                    el_status.html(res.error[0].txt);
                else{
                    $('#form_brochure_info_right input[name="fullname_right"]').val('');
                    $('#form_brochure_info_right input[name="title_right"]').val('');
                    $('#form_brochure_info_right input[name="company_right"]').val('');
                    $('#form_brochure_info_right input[name="phone_right"]').val('');
                    $('#form_brochure_info_right input[name="email_right"]').val('');
					$('#form_brochure_info_right input[name="captcha_right"]').val('');
					$('#form_brochure_info_right input[name="how_know_right"]').val('');
					$('#form_brochure_info_right input[name="choise_others_text"]').val('');
                    $.fancybox.close();
                    // $('#ab-brochure-popup-right-click').trigger('click');

                    window.location = "<?=base_url()?>uploads/file_download/" + res.link_download;
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
