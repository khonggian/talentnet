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
		
		<div class="form-profile" id="personal">
			<div class="title"><?=lang('Personal_information')?></div>
            <form name="form_personal" id="form_personal" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_personal'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="personal_id" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('fullname');?><span> *</span></div>
					<div class="input">
						<input type="text" class="field_data" data-validate="required" name="fullname" id="fullname" maxlength="30" value="" placeholder="<?=lang('fullname');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Birthday');?></div>
                    <div class="input-group">
						<div class="select select_158 left">
							<select class="js-select field_data" name="day">
								<option value=''><?=lang('Day');?></option>
								<?php
								for ($i=1; $i <= 31 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select field_data" name="month">
								<option value=''><?=lang('Month');?></option>
								<?php
								for ($i=1; $i <= 12 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select field_data" name="year">
								<option value=''><?=lang('Year');?></option>
								<?php
								for ($i=1940; $i <= 2007 ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('POB');?></div>
					<div class="select select_483 left">
						<select name="place_of_brith" id="place_of_brith" class="input field_data val js-select">
							<option value=""><?=lang('Choose_POB');?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
							?>
							<option value="<?=$l->name?>"><?=$l->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Nationlity');?></div>
					<div class="select select_483 left">
						<select name="nationlity" id="nationlity" class="js-select nationlity field_data">
							<option value=""><?=lang('Choose_Nationality');?></option>
							<?php if(!empty($countries)){
									foreach($countries as $tries){?>
									<option data-id ="<?=$tries->id?>"  value="<?=$tries->name?>"><?=$tries->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

				<div class="form-group gd">
                    <div class="lable"><?=lang('gender');?></div>
					<div class="select select_483 left s_gender">
						<select name="gender" id="gender"  class="js-select field_data">
							<option value=""><?=lang('Choose_your_gender');?></option>
							<option value="male"><?=lang('male');?></option>
							<option value="female"><?=lang('female');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group gd">
                    <div class="lable"><?=lang('Marital_status')?></div>
					<div class="select select_483 left">
						<select name="marital" id="marital" class="js-select field_data">
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="Seperate">Seperate</option>
							<option value="Widow">Widow</option>
							<option value="N/A">N/A</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

				<div class="form-group">
                    <div class="lable"><?=lang('email');?><span> *</span></div>
					<div class="input">
						<input type="text" class="field_data" data-validate="required" name="email" id="email" maxlength="30" value="<?=$user->email?>" placeholder="<?=lang('email');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                
                <div class="form-group">
                    <div class="lable"><?=lang('phone');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="input input_50">
							<input type="text" class="field_data" name="home_phone" id="phone" maxlength="20" value=""  placeholder="<?=lang('home_phone');?>"/>
						</div>
						<div class="input input_50">
							<input id="mobile" type="text" class="field_data" data-validate="required" name="mobile"  maxlength="20" value=""  placeholder="<?=lang('mobile');?>"/>
						</div>
						<div class="clearfix"></div>
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
                
                <div class="form-group">
                    <div class="lable"><?=lang('address');?></div>
					<div class="input">
						<input type="text" class="field_data" name="address" id="address" maxlength="250" value="" placeholder="<?=lang('your_address');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                
                <div class="form-group">
                    <div class="lable"><?=lang('Country');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country" id="country" class="js-select country field_data" data-id="province" data-validate="required">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){?>
										<option data-id ="<?=$tries->id?>"  value="<?=$tries->name?>"><?=$tries->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="select select_235 right select_personal">
							<select name="province" id="province" class="js-select field_data" data-validate="required">
								<option value=""><?=lang('Choose_province');?></option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('city');?></div>
					<div class="select select_483 left">
						<select name="city" id="city" class="js-select field_data">
							<option value=""><?=lang('Choose_city');?></option>
							<?php if(!empty($city)){
									foreach($city as $ct){?>
									<option data-id ="<?=$ct->id?>"  value="<?=$ct->crm_id?>"><?=$ct->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

				<div class="form-group">
                    <div class="lable"><?=lang('Computer_Skill');?></div>
					<div class="input">
						<input type="text" class="field_data" name="computer_skill" id="computer_skill" maxlength="250" value="" placeholder="<?=lang('Computer_Skill');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Skills');?></div>
					<div class="input">
						<input type="text" class="field_data" name="other_skill" id="other_skill" maxlength="250" value="" placeholder="<?=lang('Skills');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Your_avatar');?>( < 2MB)</div>
                    <div class="ip_file left">
						<div class="input file">
							<input class="field_data" type="text" id="file-name" readonly="true" />
							<input type="hidden" name="avatar_img" id="avatar_img" value="" />
						</div>
                    	<!--<input type="button" id="browse-click" class="button-browse left" value="BROWSE"/>-->
                        
						<div class="button-browse" id="browse-click">Browse</div>
                        <input type="file" style="display: none;" name="avatar" id="file-type" />
                    </div>
					<div class="clearfix"></div>
                </div>
				
				<div class="form-group">
                    <div class="lable">&nbsp;</div>
                   <div class="img_avatar left"><img id="load_avatar" src="<?=base_url()?>assets/img/img_avatar.jpg" alt="" /></div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('update');?>" id="personal-post" class="btn-update submit_form" data-form="form_personal" data-type="personal" />&nbsp;&nbsp;
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
				<input type="hidden" name="id" id="work_experience_id" value="0" />

				<div class="form-group">
                    <div class="lable"><?=lang('Company');?></div>
					<div class="input">
						<input type="text" name="company" id="company" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Job_title');?> <span>*</span></div>
					<div class="input">
						<input type="text" data-validate="required" name="title" id="title" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>


				<div class="form-group">
                    <div class="lable"><?=lang('industry_company');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="industry" id="industry" class="input field_data val js-select">
							<option value=""><?=lang('Choose_Industry');?></option>
							<?php if(!empty($industry)){
									foreach($industry as $row){
							?>
							<option value="<?=$row->name_en?>"><?=$row->name_en?></option>
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
								<input type="text" name="from_work_experience" id="from_work_experience" class="datepicker field_data val ip_date" value="" placeholder="<?=lang('From');?>"  />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to_work_experience" id="to_work_experience" class="datepicker field_data val ip_date" value="" placeholder="<?=lang('To');?>" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
				<?php /*
                <div class="form-group">
                    <div class="lable"><?=lang('Location');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country_work" id="country_work" class="input field_data val js-select country" data-id="city_work">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){?>
										<option data-id="<?=$tries->id?>" value="<?=$tries->name?>"><?=$tries->name?></option>
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
						<input type="text" name="salary" id="salary" class="field_data val" maxlength="100" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>
				*/?>
                <div class="form-group">
                    <div class="lable"><?=lang('Description');?><span> *</span></div>
					<div class="area left">
						<textarea maxlength="500" name="description" class="field_data val" id="description" placeholder=""></textarea>
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
				<input type="hidden" name="id" id="education_id" value="0" />
               
                <div class="form-group">
                    <div class="lable"><?=lang('education_type');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="education_type" id="education_type" class="input field_data val js-select">
							<option value=""><?=lang('Choose_education_type');?></option>
							<?php global $EDUCATION ?>
							<?php if(!empty($EDUCATION)){
									foreach($EDUCATION as $key => $row){
							?>
							<option value="<?=$row?>"><?=$row?></option>
							<?php }
							}
							?>
						</select>
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
							<option value="<?=$de->name_en?>"><?=$de->name_en?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

				<div class="form-group">
                    <div class="lable"><?=lang('education_name');?><span> *</span></div>
					<div class="input">
						<input type="text" name="education_name" id="education_name" class="field_data val" maxlength="200" value="" placeholder="<?=lang('education_name');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Major');?></div>
					<div class="select select_483 left">
						<select name="major" id="major" class="input field_data val js-select">
							<option value=""><?=lang('Choose_Major');?></option>
							<?php if(!empty($major)){
									foreach($major as $row){
							?>
							<option value="<?=$row->value?>"><?=$row->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
				<?php /*
                <div class="form-group">
                    <div class="lable"><?=lang('Location');?></div>
					<div class="select select_483 left">
						<select name="location" id="location" class="input field_data val js-select">
							<option value=""><?=lang('Choose_location');?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
							?>
							<option value="<?=$l->name?>"><?=$l->name?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div> */?>

                <div class="form-group">
                    <div class="lable"><?=lang('Time');?><span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" name="from_education" id="from_education" class="datepicker field_data val ip_date" value=""  placeholder="<?=lang('From');?>" />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to_education" id="to_education" class="datepicker field_data val ip_date" value="" placeholder="<?=lang('To')?>" />
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
						<textarea maxlength="500" name="achievement" class="input field_data val" id="achievement" placeholder="<?=lang('Achievement');?>"></textarea>
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
			<div class="list_education mbt20"></div>
        </div>
		
		<div class="form-profile mt30" id="courses">
			<div class="title"><?=lang('courses');?></div>
			<form name="form_courses" id="form_courses" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_courses'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="courses_id" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('courses');?><span> *</span></div>
					<div class="input">
						<input type="text" name="name" id="name" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('training_company');?></div>
					<div class="input">
						<input type="text" name="training_company" id="training_company" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('time_duration');?></div>
					<div class="input">
						<input type="text" name="time_duration" id="time_duration" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" class="btn-update submit_form" data-form="form_courses" data-type="courses" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update reset_form" data-form="form_courses" data-type="courses" />
					</div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="courses_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_courses mbt20"></div>
        </div>

        <div class="form-profile mt30" id="skill">
			<div class="title"><?=lang('Skill_Languages');?></div>
			<form name="form_skill_language" class="form-horizontal form_cv" role="form" id="form_skill_language" action="<?=PATH_URL_LANG.'post_skill_language'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="skill_language_id" value="0" />
				
                <div class="form-group" id="parent_specify_name">
                    <div class="lable"><?=lang('language');?></div>
					<div class="select select_483 left">
						<select name="specify_name" id="specify_name" class="input field_data val js-select">
								<option value=""><?=lang('language');?></option>
								<?php if(!empty($language)){
										foreach($language as $tries){?>
										<option value="<?=$tries->value?>"><?=$tries->name?></option>
								<?php }
								}
								?>
						</select>
                    </div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Level');?></div>
					<div class="select select_483 left select_level">
						<select name="level" id="level" class="input field_data val js-select">
							<option value=""><?=lang('Choose_Level');?></option>
							<?php 
								global $LEVEL_LANGUAGE;
								if(!empty($LEVEL_LANGUAGE)){
									foreach($LEVEL_LANGUAGE as $k_level => $v_level){
										echo '<option value="'.$v_level.'">'.$v_level.'</option>';
									}
								}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
				<div class="form-group">
                    <div class="lable">Note</div>
					<div class="input">
						<input type="text" name="name" id="name" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
						<input type="button" value="<?=lang('add_more')?>" id="skill_language_post" class="btn-update submit_form" data-form="form_skill_language" data-type="skill_language" data-id="0" />&nbsp;&nbsp;
						<input type="button" value="<?=lang('cancel')?>" id="skill_language_reset" class="btn-update reset_form" data-form="form_skill_language" data-type="skill_language" />
					</div>
					<div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<span class="skill_language_msg notice"></span>
					</div>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_skill_language mbt20">
				<div class="list_language" style="display:none">
					<div class="sub_tt mt29"><?=lang('Languages');?></div>
					<div class="clearfix"></div>
					<!-- append skill-->
				</div>
				
			</div>
        </div>

        <div class="form-profile mt30" id="reference">
			<div class="title"><?=lang('Reference');?></div>
			<form name="form_reference" id="form_reference" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_reference'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="reference_id" value="0" />
                <div class="form-group">
                    <div class="lable"><?=lang('Reference_name');?></div>
					<div class="input">
						<input type="text" name="name" id="name" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Company');?></div>
					<div class="input">
						<input type="text" name="company_reference" id="company_reference" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Job_title');?></div>
					<div class="input">
						<input type="text" name="title" id="title" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Relationship');?></div>
					<div class="input">
						<input type="text" name="relationship" id="relationship" class="field_data val" maxlength="200" value="" placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('email');?><span> *</span></div>
					<div class="input">
						<input type="text" name="email_reference" id="email_reference" class="field_data val" maxlength="200"  placeholder=""/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('phone');?><span> *</span></div>
					<div class="input">
						<input type="text" name="phone_reference" id="phone_reference" class="field_data val" maxlength="20" value="" placeholder="	"/>
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
			<div class="list_reference mbt20"></div>
        </div>

        <div class="group_btncv">
        	<a href="javascript:;" id="preview_sv" class="btn_ left manipulation_sv hs_cv" title="<?=lang('preview');?>" data-type="unable"><?=lang('preview');?></a>
        	<a href="javascript:;" id="save_cv" class="btn_ spec left save_cv hs_cv" title="<?=lang('save');?>" data-action="<?=$this->input->get('action')?filter_input_xss($this->input->get('action')):''?>"><?=lang('save');?></a>
        	<a href="javascript:;" onclick="window.location.href = '<?=PATH_URL_LANG.url_lang(lang('create_CV'))?>'" class="btn_ left hs_cv" title="<?=lang('cancel');?>"><?=lang('cancel');?></a>
			<a href="javascript:;" id="back_cv" class="btn_ spec left manipulation_sv cv_hide" title="<?=lang('back');?>" data-type="available"><?=lang('back');?></a>
        </div>
	</div>
</div>