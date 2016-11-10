<?=modules::run('home/banner',uri_string())?>
<?php
	$name = language('name');
	$slug = language('slug');
?>
<div id="saved-jobs-page" class="content-bg1">
	<div class="row content-row">
		<?=modules::run('home/menu_user')?>
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
		</div>
		
		<div class="form-profile">
			<div class="title"><?=lang('Personal_information')?></div>
            <form name="form_personal" id="form_personal" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_personal'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="personal_id" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('fullname');?></div>
					<div class="input">
						<input type="text" name="fullname" id="fullname" maxlength="30" value="" placeholder="<?=lang('fullname');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group gd">
                    <div class="lable"><?=lang('gender');?></div>
					<div class="select select_483 left">
						<select name="gender" id="gender"  class="js-select">
							<option value=""><?=lang('Choose_your_gender');?></option>
							<option value="1"><?=lang('male');?></option>
							<option value="2"><?=lang('female');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Birthday');?></div>
                    <div class="input-group">
						<div class="select select_158 left">
							<select class="js-select" name="day">
								<option><?=lang('Day');?></option>
								<?php
								for ($i=1; $i <= 31 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select" name="month">
								<option><?=lang('Month');?></option>
								<?php
								for ($i=1; $i <= 12 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select" name="year">
								<option><?=lang('Year');?></option>
								<?php
								for ($i=1980; $i <= 2020 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
                </div>

                <!-- <div class="form-group">
                    <div class="lable">Birthday</div>
                    <div class="date1 left">
						<div class="input date">
							<input type="text" placeholder="Your birthday" class="ip_date" />
						</div>
						<div class="date_icon"></div>
					</div>
					<div class="clearfix"></div>
                </div> -->
                <div class="form-group gd">
                    <div class="lable"><?=lang('Marital_status')?></div>
					<div class="select select_483 left">
						<select name="marital" id="marital" class="js-select">
							<option value=""><?=lang('Choose_your_marital');?></option>
							<option value="1"><?=lang('single');?></option>
							<option value="2"><?=lang('Married');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('address');?></div>
					<div class="input">
						<input type="text" name="address" id="address" maxlength="250" value="" placeholder="<?=lang('address');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('phone');?></div>
                    <div class="gr_sl left">
						<div class="input">
							<input type="text" name="phone" id="phone" maxlength="12" value=""  placeholder="<?=lang('phone');?>"/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Location');?></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country" id="country" class="js-select country" data-id="city">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){?>
										<option value="<?=$tries->id?>"><?=$tries->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="select select_235 right select_personal">
							<select name="city" id="city" class="js-select">
								<option value=""><?=lang('Choose_city');?></option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
				<input type="file" name="avatar" id="file-type" />
                

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" id="personal-post" onclick="save()" class="btn-update" data-form="form_personal" data-type="personal" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel')?>" id="personal-reset" class="btn-update reset_form" data-form="form_personal" data-type="personal" /></div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="personal_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_personal mbt20 cv_hide">
			<!--append-->
			</div>
        </div>

        <div class="form-profile mt30" id="work_experience">
			<div class="title"><?=lang('work_experience');?></div>
			<form name="form_work_experience" id="form_work_experience" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_work_experience'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="work_experience_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('Job_title');?> <span>*</span></div>
					<div class="input">
						<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Job_title');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                 <div class="form-group">
                    <div class="lable"><?=lang('Company');?><span> *</span></div>
					<div class="input">
						<input type="text" name="company" id="company" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Company');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
				
				 <div class="form-group">
                    <div class="lable"><?=lang('industry_company');?><span></span></div>
					<div class="input">
						<input type="text" name="industry" class="input field_data val" id="industry" maxlength="200" value="" placeholder="<?=lang('industry_company');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Time');?><span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" name="from_work_experience" id="from_work_experience" class="input datepicker field_data val ip_date" value="" placeholder="<?=lang('From');?>"  />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to_work_experience" id="to_work_experience" class="input datepicker field_data val ip_date" value="" placeholder="<?=lang('To');?>" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Location');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country_work" id="country_work" class="input field_data val js-select country" data-id="city_work">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){?>
										<option value="<?=$tries->id?>"><?=$tries->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="select select_235 right select_experience">
							<select name="city_work" id="city_work" class="input field_data val js-select">
								<option value=""><?=lang('Choose_city');?></option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Salary');?></div>
					<div class="input">
						<input type="text" name="salary" id="salary" class="input field_data" maxlength="100" value="" placeholder="<?=lang('Salary');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Description');?></div>
					<div class="area left">
						<textarea name="description" class="input field_data val" id="description" placeholder="<?=lang('Description');?>"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" id="work-post" class="btn-update submit_form" data-form="form_work_experience" data-type="work_experience" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel')?>" id="work-reset" class="btn-update reset_form" data-form="form_work_experience" data-type="work_experience" /></div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="work_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_work_experience mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="form-profile mt30" id="education">
			<div class="title"><?=lang('education');?></div>
			<form name="form_education" id="form_education" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_education'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="education_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('School_Program');?><span> *</span></div>
					<div class="input">
						<input type="text" name="school_program" id="school_program" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('School_Program');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Degree');?></div>
					<div class="select select_483 left">
						<select name="degree" id="degree" class="input field_data val js-select">
							<option value=""><?=lang('Choose_Degree');?></option>
							<?php if(!empty($degree)){
									foreach($degree as $de){
							?>
							<option value="<?=$de->id?>"><?=$de->$name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Major');?><span> *</span></div>
					<div class="input">
						<input type="text" name="major" id="major" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Major');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Location');?></div>
					<div class="select select_483 left">
						<select name="location" id="location" class="input field_data val js-select">
							<option value=""><?=lang('Choose_location');?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
							?>
							<option value="<?=$l->id?>"><?=$l->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Time');?><span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" name="from_education" id="from_education" class="input datepicker field_data val ip_date" value=""  placeholder="<?=lang('From');?>" />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to_education" id="to_education" class="input datepicker field_data val ip_date" value="" placeholder="<?=lang('To')?>" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Achievement');?></div>
					<div class="area left">
						<textarea name="achievement" class="input field_data val" id="achievement" placeholder="<?=lang('Achievement');?>"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more')?>" id="work-post" class="btn-update submit_form" data-form="form_education" data-type="education" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update reset_form" data-form="form_education" data-type="education" /></div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="education_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_education mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="form-profile mt30" id="skill_language">
			<div class="title"><?=lang('Skill_Languages');?></div>
			<form name="form_skill_language" class="form-horizontal form_cv" role="form" id="form_skill_language" action="<?=PATH_URL_LANG.'post_skill_language'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="skill_language_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('Category');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="category" id="category" class="input field_data val js-select">
							<option value=""><?=lang('Choose_category');?></option>
							<option value="1">Skill</option>
							<option value="2">Language</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Specify_name');?></div>
					<div class="input">
						<input type="text" name="specify_name" id="specify_name" class="input field_data val" maxlength="255" value="" placeholder="<?=lang('Specify_name');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Level');?></div>
					<div class="select select_483 left select_level">
						<select name="level" id="level" class="input field_data val js-select">
							<option value=""><?=lang('Choose_Level');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
						<input type="button" value="<?=lang('add_more')?>" id="skill_language_post" class="btn-update submit_form" data-form="form_skill_language" data-type="skill" data-id="0" />&nbsp;&nbsp;
						<input type="button" value="<?=lang('cancel')?>" id="skill_language_reset" class="btn-update reset_form" data-form="form_skill_language" data-type="skill" />
					</div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="skill_language_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_skill_language mbt20">
				<div class="list_skill" style="display:none">
					<div class="sub_tt mt29">SKILLS</div>
					<div class="clearfix"></div>
					<!-- append skill-->
				</div>
				<div class="list_language" style="display:none">
					<div class="sub_tt mt29">LANGUAGES</div>
					<div class="clearfix"></div>
					<!-- append language-->
				</div>
			</div>
        </div>

        <div class="form-profile mt30" id="reference">
			<div class="title"><?=lang('Reference');?></div>
			<form name="form_reference" id="form_reference" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_reference'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="reference_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('name');?><span> *</span></div>
					<div class="input">
						<input type="text" name="name" id="name" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('name');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Company');?></div>
					<div class="input">
						<input type="text" name="company_reference" id="company_reference" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Company');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Title');?></div>
					<div class="input">
						<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Title');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Relationship');?><span> *</span></div>
					<div class="input">
						<input type="text" name="relationship" id="relationship" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('Relationship');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('email');?><span> *</span></div>
					<div class="input">
						<input type="text" name="email_reference" id="email_reference" class="input field_data val" maxlength="200" value="" placeholder="<?=lang('email');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('phone');?><span> *</span></div>
					<div class="input">
						<input type="text" name="phone_reference" id="phone_reference" class="input field_data val" maxlength="12" value="" placeholder="<?=lang('phone');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" class="btn-update submit_form" data-form="form_reference" data-type="reference" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update reset_form" data-form="form_reference" data-type="reference" />
					</div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="reference_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_reference mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="group_btncv">
        	<a href="javascript:;" id="preview_sv" class="btn_ left manipulation_sv hs_cv" title="<?=lang('preview');?>" data-type="unable"><?=lang('preview');?></a>
        	<a href="javascript:;" id="save_cv" class="btn_ spec left save_cv hs_cv" title="<?=lang('save');?>"><?=lang('save');?></a>
        	<a href="javascript:;" onclick="window.location.href = '<?=PATH_URL_LANG.url_lang(lang('create_CV'))?>'" class="btn_ left hs_cv" title="<?=lang('cancel');?>"><?=lang('cancel');?></a>
			<a href="javascript:;" id="back_cv" class="btn_ spec left manipulation_sv cv_hide" title="<?=lang('back');?>" data-type="available"><?=lang('back');?></a>
        </div>
	</div>
</div>
<script>
//$(document).ready(function() {
	// $("#personal-post").click(function(){
		// var formObj = $("#form_personal");
		// var formID = $("#form_personal").attr("id");
		// var formURL = $("#form_personal").attr("action");
		// $("#form_personal").ajaxForm({
			// beforeSend: function(){
				// formObj.hide();
				// $("#form_personal").parent().find('.title').hide();
				// $("#form_personal").parent().find('.g_btncv').hide();
				// $("#form_personal").parent().find('.title').after("<img src='"+root+"assets/img/loading.gif' class='img_loading' width='124' height='124' />");
			// },
			// success: function(e){
				// $("#form_personal").parent().find('.img_loading').remove();
				// $("#form_personal").parent().find('.title').show();
				// $("#form_personal").parent().find('.g_btncv').show();
				// var obj = $.parseJSON(e);
				// console.log(obj);
				// setTimeout(function(){
					// if(obj.status == 'SUCCESS')
					// {
						// $('.notice').html('');
						// $('.notice').removeClass('red');
						// $('.notice').addClass('blue');
						// $(".list_personal").html('');
						// var notify = (lang == 'vi' ? 'Thêm thông tin cá nhân thành công' : 'More info personal success');
						// $('.notice').html(notify);
						// $('#personal-post').val('UPDATE');
						
						// $("#"+formID).find("#personal_id").val(obj.id);
						// setTimeout(function(){
							// $('.notice').html('');
							// $(".list_personal").append(obj.html);
							// $result.push("personal-"+obj.id);
							// if(obj.your_cv_id){
								// $("#"+formID).hide();
								// $(".list_personal").show();
							// }else{
								// $("#"+formID).show();
							// }
						// },800);
					// }else{
						// $("#"+formID).show();
						// $('.notice').removeClass('blue');
						// $('.notice').addClass('red');
						// $.each(obj.error, function(key, value){
							// $('#'+value.field).focus();
							// $('.'+obj.msg).html(value.txt);
							// return false;
						// });
					// }
				// },1000);
			// },
			// error: function(e){
				// b.removeAttr('disabled');
				// p.html(obj.message).fadeIn(300);
			// }
		// });
	// });
	
function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback
		success:       showResponse  // post-submit callback
    };
	$('#form_personal').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var form = jqForm[0];
	
}

function showResponse(responseText, statusText, xhr, $form) {
	if(responseText=='success'){
		location.href="<?=PATH_URL_LANG.'post_personal'?>";
	}

}

//});
</script>