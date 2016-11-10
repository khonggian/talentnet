<?php
	$name = language('name');
?>
<?=modules::run('home/banner',uri_string())?>

<div id="profile-page" class="content-bg1 fyour-cv">
	<div class="row content-row">
		<?=modules::run('home/menu_user')?>
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'search-job':'tim-kiem-viec-lam')?>" title="<?=lang('Candidates')?>"><?=lang('Candidates')?></a><span class="active"><?=$title?></span>
		</div>
		
		<div class="form-profile" id="personal">
			<!-- <div class="right mt17">
				<a href="<?=PATH_URL_LANG.'export_excel/'.$your_cv_id?>" class="btn-update abtn col-3">EXPORT CV</a>
			</div> -->
			<div class="clearfix"></div>
			<div class="title" style="line-height: 30px;"><?=lang('Personal_information')?> <div class="right"><input type="button" value="<?=lang('edit_profile')?>" data-form="form_personal" data-type="personal" class="btn-update col-3 w186 add_new_cv" /></div><div class="clearfix"></div></div>
			<div class="clearfix"></div>
			<?php if(!empty($result['personal'])){?>
            <form name="form_personal" id="form_personal" class="mt20 form-horizontal form_cv cv_hide" role="form" action="<?=PATH_URL_LANG.'post_personal'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="personal_id" value="<?=$result['personal']->id?>" />
				<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                <div class="form-group">
                    <div class="lable"><?=lang('fullname');?><span> *</span></div>
					<div class="input">
						<input type="text" name="fullname" id="fullname" class="input" maxlength="30" value="<?=$result['personal']->fullname?>" placeholder="Full name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
					<?php
						$birthday = explode('-',$result['personal']->birthday);
					?>
                    <div class="lable"><?=lang('Birthday');?></div>
                    <div class="input-group">
						<div class="select select_158 left input">
							<select class="js-select" name="day">
								<option><?=lang('Day')?></option>
								<?php
								for ($i=1; $i <= 31 ; $i++) { ?>
									<option value="<?=$i?>" <?=(!empty($birthday[2])?$birthday[2]==$i?'selected':'':'')?>><?=$i?></option>;
								<?php }?>
							</select>
						</div>
						<div class="select select_158 left input">
							<select class="js-select" name="month">
								<option><?=lang('Month')?></option>
								<?php
								for ($i=1; $i <= 12 ; $i++) { ?>
									<option value="<?=$i?>" <?=(!empty($birthday[1])?$birthday[1]==$i?'selected':'':'')?>><?=$i?></option>;
								<?php }?>
							</select>
						</div>
						<div class="select select_158 left input">
							<select class="js-select" name="year">
								<option><?=lang('Year')?></option>
								<?php
								for ($i=1940; $i <= 2007 ; $i++) { ?>
									<option value="<?=$i?>" <?=(!empty($birthday[0])?$birthday[0]==$i?'selected':'':'')?>><?=$i?></option>;
								<?php }?>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('POB');?></div>
					<div class="select select_483 left">
						<select name="place_of_brith" id="place_of_brith" class="field_data val js-select">
							<option value=""><?=lang('Choose_POB');?></option>
							<?php if(!empty($location)){
									foreach($location as $l){
							?>
							<option <?=$result['personal']->place_of_brith==$l->name?'selected':''?> value="<?=$l->name?>"><?=$l->name?></option>
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
						<select name="nationlity" id="nationlity" class="js-select nationlity field_data" data-validate="required">
							<option value=""><?=lang('Choose_Nationality');?></option>
							<?php if(!empty($countries)){
									foreach($countries as $tries){?>
									<option <?=$result['personal']->nationlity==$tries->name?'selected':''?> data-id ="<?=$tries->id?>"  value="<?=$tries->name?>"><?=$tries->name?></option>
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
							<option value="male" <?=$result['personal']->gender=='male'?'selected':''?> ><?=lang('male');?></option>
							<option value="female" <?=$result['personal']->gender=='female'?'selected':''?> ><?=lang('female');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                
                <div class="form-group gd">
                    <div class="lable"><?=lang('Marital_status')?></div>
					<div class="select select_483 left">
						<select name="marital" id="marital" class="js-select field_data">
							<option value="Single" <?=$result['personal']->marital=='Single'?'selected':''?> >Single</option>
							<option value="Married" <?=$result['personal']->marital=='Married'?'selected':''?> >Married</option>
							<option value="Divorced" <?=$result['personal']->marital=='Divorced'?'selected':''?> >Divorced</option>
							<option value="Seperate" <?=$result['personal']->marital=='Seperate'?'selected':''?> >Seperate</option>
							<option value="Widow" <?=$result['personal']->marital=='Widow'?'selected':''?> >Widow</option>
							<option value="N/A">N/A</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('email');?><span> *</span></div>
					<div class="input">
						<input type="text" class="field_data" data-validate="required" name="email" id="email" maxlength="30" value="<?=$result['personal']->email?>" placeholder="<?=lang('email');?>"/>
					</div>
					<div class="clearfix"></div>
                </div> 

                <div class="form-group">
                    <div class="lable"><?=lang('phone');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="input input_50">
							<input type="text" class="field_data" data-validate="required|phone" name="home_phone" id="phone" maxlength="20" value="<?=$result['personal']->home_phone?>"  placeholder="<?=lang('home_phone');?>"/>
						</div>
						<div class="input input_50">
							<input type="text" class="field_data" data-validate="required|phone" name="mobile"  maxlength="20" value="<?=$result['personal']->mobile?>"  placeholder="<?=lang('mobile');?>"/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('address');?></div>
					<div class="input">
						<input type="text" name="address" id="address" class="input" maxlength="250" value="<?=$result['personal']->address?>" placeholder="<?=lang('address');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                
                <div class="form-group">
                    <div class="lable"><?=lang('Country');?><span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country" id="country" class="field_data val js-select country" data-id="province">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){
								?>
										<option value="<?=$tries->name?>" <?=$result['personal']->country==$tries->name?'selected':''?> ><?=$tries->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="select select_235 right select_experience">
							<select name="province" id="province" class="field_data val js-select">
								<option value=""><?=lang('Choose_province');?></option>
								<?php if(!empty($location)){
										foreach($location as $l){
								?>
								<option value="<?=$l->name?>" <?=$result['personal']->province==$l->name?'selected':''?> ><?=$l->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

				<div class="form-group">
                    <div class="lable"><?=lang('city');?></div>
					<div class="select select_483 left">
						<select name="city" id="city" class="js-select field_data" data-validate="required">
							<option value=""><?=lang('Choose_city');?></option>
							<?php if(!empty($city)){
									foreach($city as $ct){?>
									<option data-id ="<?=$ct->id?>"  <?=$result['personal']->city==$ct->name?'selected':''?> value="<?=$ct->name?>"><?=$ct->name?></option>
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
						<input type="text" class="field_data" name="computer_skill" id="computer_skill" maxlength="250" value="<?=$result['personal']->computer_skill?>" placeholder="<?=lang('Computer_Skill');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable"><?=lang('Skills');?></div>
					<div class="input">
						<input type="text" class="field_data" name="other_skill" id="other_skill" maxlength="250" value="<?=$result['personal']->other_skill?>" placeholder="<?=lang('Skills');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Your_avatar');?>( < 2MB)</div>
                    <div class="ip_file left">
						<div class="input file">
							<input class="field_data" type="text" id="file-name" readonly="true" />
							<input type="hidden" name="avatar_img" id="avatar_img" value="<?=$result['personal']->avatar?>" />
						</div>
                    	<!--<input type="button" id="browse-click" class="button-browse left" value="BROWSE"/>-->
                        
						<div class="button-browse" id="browse-click">Browse</div>
                        <input type="file" style="display: none;" name="avatar" id="file-type" />
                    </div>
					<div class="clearfix"></div>
                </div>
				<div class="form-group">
                    <div class="lable">&nbsp;</div>
                   <div class="img_avatar left"><img id="load_avatar" src="<?=(!empty($result['personal']->avatar))?img(DIR_UPLOAD_AVATAR.$result['personal']->avatar,164,196):base_url().'assets/img/img_avatar.jpg'?>" alt="" /></div>
					<div class="clearfix"></div>
                </div>
               
                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('update')?>" id="personal-post" class="btn-update submit_form" data-form="form_personal" data-type="personal" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="personal-reset" class="btn-update p_edit reset_form" data-form="form_personal" data-type="personal" /></div>
					
					<span class="personal_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<?php }?>
			<div class="list_personal mbt20 g_btncv" style="margin-top:0px !important;">
			<!--append-->
			<?php if(!empty($result['personal'])){?>
			<div class="form-profile pdbt18 mt20" style="margin-top:0px !important;">
				<div class="right">
				</div>
				<div class="clearfix"></div>
				<div class="info_text">
					<div class="per_img left">
						<img src="<?=img(DIR_UPLOAD_AVATAR.$result['personal']->avatar,164,196)?>" alt="" /> <br>
					</div>
					<div class="text_pf left">
						<div class="per_name"><?=$result['personal']->fullname?></div>
						<div class="per_info unmobile">
							<ul>
								<li><strong><?=lang('Birthday');?>:</strong> <?=date('d/m/Y',strtotime($result['personal']->birthday))?></li>
								<li><strong><?=lang('Nationlity');?>:</strong> <?=$result['personal']->nationlity?></li>
								<li><strong><?=lang('Marital_status')?>:</strong> <?=$result['personal']->marital?></li>
								<li><strong><?=lang('home_phone');?>:</strong> <?=$result['personal']->home_phone?></li>
								<li><strong><?=lang('address');?>:</strong> <?=$result['personal']->address?></li>
								<li><strong><?=lang('Country');?>:</strong> <?=$result['personal']->country?></li>
								<li><strong><?=lang('Computer_Skill');?>:</strong> <?=$result['personal']->computer_skill?></li>
							</ul>
							<ul>
								<li><strong><?=lang('POB');?>:</strong> <?=$result['personal']->place_of_brith?></li>
								<li><strong><?=lang('gender');?>:</strong> <?=$result['personal']->gender?></li>
								<li><strong>Email:</strong> <?=$result['personal']->email?></li>
								<li><strong><?=lang('phone');?>:</strong> <?=$result['personal']->mobile?></li>
								<li><strong><?=lang('Province');?>:</strong> <?=$result['personal']->province?></li>
								<li><strong><?=lang('city');?>:</strong> <?=$result['personal']->city?></li>
								<li><strong><?=lang('Skills');?>:</strong> <?=$result['personal']->other_skill?></li>
							</ul>
							<div class="clearAll"></div>
						</div>

						<div class="per_info mobile">
							<ul>
								<li><strong><?=lang('Birthday');?>:</strong> <?=date('d/m/Y',strtotime($result['personal']->birthday))?></li>
								<li><strong><?=lang('POB');?>:</strong> <?=$result['personal']->place_of_brith?></li>
								<li><strong><?=lang('Nationlity');?>:</strong> <?=$result['personal']->nationlity?></li>
								<li><strong><?=lang('gender');?>:</strong> <?=$result['personal']->gender?></li>
								<li><strong><?=lang('Marital_status')?>:</strong> <?=$result['personal']->marital?></li>
								<li><strong>Email:</strong> <?=$result['personal']->email?></li>
								<li><strong><?=lang('home_phone');?>:</strong> <?=$result['personal']->home_phone?></li>
								<li><strong><?=lang('phone');?>:</strong> <?=$result['personal']->mobile?></li>
								<li><strong><?=lang('address');?>:</strong> <?=$result['personal']->address?></li>
								<li><strong><?=lang('Country');?>:</strong> <?=$result['personal']->country?></li>
								<li><strong><?=lang('Province');?>:</strong> <?=$result['personal']->province?></li>
								<li><strong><?=lang('city');?>:</strong> <?=$result['personal']->city?></li>
								<li><strong><?=lang('Computer_Skill');?>:</strong> <?=$result['personal']->computer_skill?></li>
								<li><strong><?=lang('Skills');?>:</strong> <?=$result['personal']->other_skill?></li>
							</ul>
							<div class="clearAll"></div>
						</div>
					</div>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }?>
			</div>
        </div>

        <div class="form-profile mt30" id="work_experience">
			<div class="title left"><?=lang('work_experience');?></div>
			<div class="g_btncv right">
				<input type="button" value="<?=lang('add_new');?>" data-form="form_work_experience" class="btn-update col-3 add_new_cv" />
			</div>
			<div class="clearfix"></div>
			<form name="form_work_experience" id="form_work_experience" class="form-horizontal form_cv cv_hide" role="form" action="<?=PATH_URL_LANG.'post_work_experience'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="work_experience_id" class="input" value="0" />
				<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                <div class="form-group">
                    <div class="lable"><?=lang('Job_title');?> <span>*</span></div>
					<div class="input">
						<input type="text" name="title" id="title" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Job_title');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                 <div class="form-group">
                    <div class="lable"><?=lang('Company');?><span> *</span></div>
					<div class="input">
						<input type="text" name="company" id="company" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Company');?> name"/>
					</div>
					<div class="clearfix"></div>
                </div>
				
				<div class="form-group">
                    <div class="lable"><?=lang('industry_company');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="industry" id="industry" class="field_data val js-select">
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
							<select name="country_work" id="country_work" class="field_data val js-select country" data-id="city_work">
								<option value=""><?=lang('Choose_country');?></option>
								<?php if(!empty($countries)){
										foreach($countries as $tries){?>
										<option value="<?=$tries->name?>"><?=$tries->name?></option>
								<?php }
								}
								?>
							</select>
						</div>
						<div class="select select_235 right select_experience">
							<select name="city_work" id="city_work" class="field_data val js-select">
								<option value=""><?=lang('Choose_city');?></option>
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
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Salary');?></div>
					<div class="input">
						<input type="text" name="salary" id="salary" class="input field_data" maxlength="100" value="" placeholder="<?=lang('Salary');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>
				*/?>
                <div class="form-group">
                    <div class="lable"><?=lang('Description');?><span> *</span></div>
					<div class="area left">
						<textarea name="description" class="field_data val" id="description" placeholder="<?=lang('Description');?>"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" id="work-post" class="btn-update submit_form" data-form="form_work_experience" data-type="work_experience" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel')?>" id="work-reset" class="btn-update p_edit reset_form" data-form="form_work_experience" data-type="work_experience" /></div>
					<span class="work_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_work_experience mbt20">
			<!-- append -->
			<?php if(!empty($result['work_experience'])){
					foreach($result['work_experience'] as $work_experience){
			?>
			<div class="form-profile pdbt18 mt29 fr_work_experience_<?=$work_experience->id?>">
				<div class="g_btncv right form_cv">
					<input type="button" class="edit_item btn-update w187" data-form="form_work_experience" data-type="work_experience" data-id="<?=$work_experience->id?>" value="<?=lang('edit')?>" />
					<a href="javascript:;" class="delete_item p_submit" data-type="work_experience" data-id="<?=$work_experience->id?>" data-cv="<?=$your_cv_id?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
				</div>
				<div class="clearfix"></div>
				<div class="info_text profile">
					<!-- <ul class="parent_work_experience_<?=$work_experience->id?>"> -->
						<table class="parent_work_experience_<?=$work_experience->id?>">
							<tr>
								<td><strong><?=lang('Job_title');?>: </strong></td>
								<td><span class="work_experience_0"><?=$work_experience->title?></span></td>
							</tr>
							<tr>
								<td><strong><?=lang('Company');?>: </strong></td>
								<td><span class="work_experience_1"><?=$work_experience->company?></span></td>
							</tr>
							<tr>
								<td><strong><?=lang('industry');?>: </strong></td>
								<td><span class="work_experience_2"><?=$work_experience->industry?></span></td>
							</tr>
							<tr>
								<td><strong><?=lang('From');?>: </strong></td>
								<td><span class="work_experience_3"><?=date('d-m-Y',strtotime($work_experience->from))?></span></td>
							</tr>
							<tr>
								<td><strong><?=lang('To');?>: </strong></td>
								<td><span class="work_experience_4"><?=date('d-m-Y',strtotime($work_experience->to))?></span></td>
							</tr>
							<tr>
								<td><strong><?=lang('Description');?>: </strong></td>
								<td><span class="work_experience_5"><?=nl2br($work_experience->description)?></span></td>
							</tr>
						</table>
					<!-- </ul> -->
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="form-profile mt30" id="education">
			<div class="title left"><?=lang('education');?></div>
			<div class="g_btncv right">
				<input type="button" value="<?=lang('add_new')?>" data-form="form_education" class="btn-update col-3 add_new_cv" />
			</div>
			<div class="clearfix"></div>
			<form name="form_education" id="form_education" class="form-horizontal form_cv cv_hide" role="form" action="<?=PATH_URL_LANG.'post_education'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="education_id" class="input" value="0" />
				<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                <div class="form-group">
                    <div class="lable"><?=lang('education_type');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="education_type" id="education_type" class="field_data val js-select">
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
						<select name="degree" id="degree" class="field_data val js-select">
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
						<select name="major" id="major" class="field_data val js-select">
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
						<select name="location" id="location" class="field_data val js-select">
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
                </div>
				*/ ?>
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
						<textarea name="achievement" class="field_data val" id="achievement" placeholder="Achievement"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more')?>" id="work-post" class="btn-update submit_form" data-form="form_education" data-type="education" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update p_edit reset_form" data-form="form_education" data-type="education" /></div>
					<span class="education_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_education mbt20">
			<!-- append -->
			<?php if(!empty($result['education'])){
					foreach($result['education'] as $education){
			?>
			<div class="form-profile pdbt18 mt29 fr_education_<?=$education->id?>">
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="edit_item btn-update w187" data-form="form_education" data-type="education" data-id="<?=$education->id?>" />
					<a href="javascript:;" class="delete_item p_submit" data-type="education" data-id="<?=$education->id?>" data-cv="<?=$your_cv_id?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
				</div>
				<div class="clearfix"></div>
				<div class="info_text profile">
					<table class="parent_education_<?=$education->id?>">
						<tr><td><strong><?=lang('education_type');?>: </strong></td><td><span class="education_0"><?=$education->education_type?></span></td></tr>
						<tr><td><strong><?=lang('Degree');?>: </strong></td><td><span class="education_1" data-id="<?=$education->degree_id?>"><?=$education->degree_id?></span></td></tr>
						<tr><td><strong><?=lang('education_name');?>: </strong></td><td><span class="education_2"><?=$education->education_name?></span></td></tr>
						<tr><td><strong><?=lang('Major');?>: </strong></td><td><span class="education_3"><?=$education->major?></span></td></tr>
						<?php /*<li><strong><?=lang('Location');?>: </strong><span class="education_3" data-id="<?=$education->location_id?>"><?=$education->location_id?></span></li>*/ ?>
						<tr><td><strong><?=lang('From');?>: </strong></td><td><span class="education_4"><?=date('d-m-Y',strtotime($education->from))?></span></td></tr>
						<tr><td><strong><?=lang('To')?>: </strong></td><td><span class="education_5"><?=date('d-m-Y',strtotime($education->to))?></span></td></tr>
						<tr><td><strong><?=lang('Achievement');?>: </strong></td><td><span class="education_6"><?=nl2br($education->achievement)?></span></td></tr>
					</table>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>
		
		<div class="form-profile mt30" id="courses">
			<div class="title left"><?=lang('courses');?></div>
			<div class="g_btncv right">
				<input type="button" value="<?=lang('add_new')?>" data-form="form_courses" class="btn-update col-3 add_new_cv" />
			</div>
			<div class="clearfix"></div>
			<form name="form_courses" id="form_courses" class="form-horizontal form_cv cv_hide" role="form" action="<?=PATH_URL_LANG.'post_courses'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="courses_id" class="input" value="0" />
				<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                
                <div class="form-group">
                    <div class="lable"><?=lang('courses');?></div>
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
					<input type="button" value="<?=lang('add_more')?>" id="work-post" class="btn-update submit_form" data-form="form_courses" data-type="courses" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update p_edit reset_form" data-form="form_courses" data-type="courses" /></div>
					<span class="courses_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_courses mbt20">
			<!-- append -->
			<?php if(!empty($result['courses'])){
					foreach($result['courses'] as $courses){
			?>
			<div class="form-profile pdbt18 mt29 fr_courses_<?=$courses->id?>">
				<div class="g_btncv right form_cv">
					<input type="button" value="<?=lang('edit')?>" class="edit_item btn-update w187" data-form="form_courses" data-type="courses" data-id="<?=$courses->id?>" />
					<a href="javascript:;" class="delete_item p_submit" data-type="courses" data-id="<?=$courses->id?>" data-cv="<?=$your_cv_id?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
				</div>
				<div class="clearfix"></div>
				<div class="info_text profile">
					<table class="parent_courses_<?=$courses->id?>">
						<tr><td><strong><?=lang('name');?>: </strong></td><td><span class="courses_0"><?=$courses->name?></span></td></tr>
						<tr><td><strong><?=lang('training_company');?>: </strong></td><td><span class="courses_1" data-id="<?=$courses->training_company?>"><?=$courses->training_company?></span></td></tr>
						<tr><td><strong><?=lang('time_duration');?>: </strong></td><td><span class="courses_2"><?=$courses->time_duration?></span></td></tr>
					</table>
					<div class="clearAll"></div>
				</div>
			</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="form-profile mt30" id="skill_language">
			<div class="title left"><?=lang('Skill_Languages');?></div>
			<div class="g_btncv right">
				<input type="button" value="<?=lang('add_new')?>" data-form="form_skill_language" class="btn-update col-3 add_new_cv" />
			</div>
			<div class="clearfix"></div>
			<form name="form_skill_language" class="form-horizontal form_cv cv_hide" role="form" id="form_skill_language" action="<?=PATH_URL_LANG.'post_skill_language'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="skill_language_id" class="input" value="0" />
			<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                
                <?php /*<div class="form-group">
                    <div class="lable"><?=lang('Category');?><span> *</span></div>
					<div class="select select_483 left">
						<select name="category" id="category" class="field_data val js-select">
							<option value=""><?=lang('Choose_category');?></option>
							<option value="Skills"><?=lang('Skills');?></option>
							<option value="Languages"><?=lang('Languages');?></option>
							<option value="Computer Skill"><?=lang('Computer_Skill');?></option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div> */ ?>
                <div class="form-group" id="parent_specify_name">
                    <div class="lable"><?=lang('language');?></div>
					<div class="select select_483 left">
						<select name="specify_name" id="specify_name" class="field_data val js-select">
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
						<select name="level" id="level" class="field_data val js-select level">
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
						<input type="button" value="<?=lang('add_new')?>" id="skill_language_post" class="btn-update submit_form" data-form="form_skill_language" data-type="skill_language" data-id="0" />&nbsp;&nbsp;
						<input type="button" value="<?=lang('cancel');?>" id="skill_language_reset" class="btn-update p_edit reset_form" data-form="form_skill_language" data-type="skill_language" />
					</div>
					<span class="skill_language_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_skill_language mbt20">
				<div class="list_language">
					<div class="sub_tt mt29 ci_show_language" <?=empty($result_language)?'style="display:none;"':''?>><?=lang('Languages');?></div>
					<div class="clearfix ci_show_language" <?=empty($result_language)?'style="display:none;"':''?>></div>
				<?php if(!empty($result['skill_language'])){ ?>
					<!-- append language-->
					<?php foreach($result['skill_language'] as $language){ ?>
					<div class="form-profile pdbt18 mt29 fr_skill_language_<?=$language->id?>">
						<div class="info_text profile sub">
							<div class="border_sub">
								<div class="parent_skill_language_<?=$language->id?>">
									<div class="g_btncv right form_cv">
										<input type="button" value="<?=lang('edit')?>" class="btn-update col-3 edit_item" data-form="form_skill_language" data-type="skill_language" data-id="<?=$language->id?>" />
										<input type="button" value="<?=lang('delete')?>" class="btn-update col-3 delete_item p_submit" data-type="skill_language" data-id="<?=$language->id?>" data-cv="<?=$your_cv_id?>" />
									</div>
									<div class="clearAll"></div>
									<table class="sub_info">
										<tr><td><strong><?=lang('Specify_name');?>: </strong></td><td><span class="skill_language_0"><?=$language->specify_name?></span></td></tr>
										<tr><td><strong><?=lang('Level');?>: </strong></td><td><span class="skill_language_1" data-id="<?=$language->level?>"><?=$language->level?></span></td></tr>
										<tr><td><strong>Note: </strong></td><td><span class="skill_language_2"><?=$language->name?></span></td></tr>
									</table>
									
									
								</div>
							</div>
						</div>
					</div>
				<?php }
				}
				?>
				</div>

			</div>
        </div>

        <div class="form-profile mt30" id="reference">
			<div class="title left"><?=lang('Reference');?></div>
			<div class="g_btncv right">
				<input type="button" value="<?=lang('add_new')?>" data-form="form_reference" class="btn-update col-3 add_new_cv" />
			</div>
			<div class="clearfix"></div>
			<form name="form_reference" id="form_reference" class="form-horizontal form_cv cv_hide" role="form" action="<?=PATH_URL_LANG.'post_reference'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="reference_id" class="input" value="0" />
			<input type="hidden" name="your_cv_id" value="<?=$your_cv_id?>" />
                <div class="form-group">
                    <div class="lable"><?=lang('name');?></div>
					<div class="input">
						<input type="text" name="name" id="name" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Reference_name');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Company');?></div>
					<div class="input">
						<input type="text" name="company_reference" id="company_reference" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Company');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Title');?></div>
					<div class="input">
						<input type="text" name="title" id="title" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Title');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('Relationship');?></div>
					<div class="input">
						<input type="text" name="relationship" id="relationship" class="field_data val" maxlength="200" value="" placeholder="<?=lang('Relationship');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('email');?><span> *</span></div>
					<div class="input">
						<input type="text" name="email_reference" id="email_reference" class="field_data val" maxlength="200" value="" placeholder="<?=lang('email');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable"><?=lang('phone');?><span> *</span></div>
					<div class="input">
						<input type="text" name="phone_reference" id="phone_reference" class="field_data val" maxlength="20" value="" placeholder="<?=lang('phone');?>"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="<?=lang('add_more');?>" class="btn-update submit_form" data-form="form_reference" data-type="reference" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="<?=lang('cancel');?>" id="work-reset" class="btn-update p_edit reset_form" data-form="form_reference" data-type="reference" />
					</div>
					<span class="reference_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_reference mbt20">
			<!-- append -->
			<?php if(!empty($result['reference'])){
					foreach($result['reference'] as $reference){
			?>
				<div class="form-profile pdbt18 mt29 fr_reference_<?=$reference->id?>">
					<div class="g_btncv right form_cv">
						<input type="button" value="<?=lang('edit')?>" class="btn-update edit_item" data-form="form_reference" data-type="reference" data-id="<?=$reference->id?>"  />
						<a href="javascript:;" class="delete_item p_submit" data-type="reference" data-id="<?=$reference->id?>" data-cv="<?=$your_cv_id?>" style="padding:7px 8px 9px 8px;background-color:#A84216;color:#fff;"><?=lang('delete')?></a>
					</div>
					<div class="clearfix"></div>
					<div class="info_text profile">
						<table class="parent_reference_<?=$reference->id?>">
							<tr><td><strong><?=lang('Reference_name');?>: </strong></td><td><span class="reference_0"><?=$reference->name?></span></td></tr>
							<tr><td><strong><?=lang('Company');?>: </strong></td><td><span class="reference_1"><?=$reference->company?></span></td></tr>
							<tr><td><strong><?=lang('Title');?>: </strong></td><td><span class="reference_2"><?=$reference->title?></span></td></tr>
							<tr><td><strong><?=lang('Relationship');?>: </strong></td><td><span class="reference_3"><?=$reference->relationship?></span></td></tr>
							<tr><td><strong><?=lang('email');?>: </strong></td><td><span class="reference_4"><?=$reference->email?></span></td></tr>
							<tr><td><strong><?=lang('phone');?>: </strong></td><td><span class="reference_5"><?=$reference->phone?></span></td></tr>
						</table>
						<div class="clearAll"></div>
					</div>
				</div>
			<?php }
			}
			?>
			</div>
        </div>

        <div class="group_btncv">
			<a href="<?=PATH_URL_LANG.'export_excel/'.$your_cv_id?>" class="btn_  spec left ">EXPORT CV</a>
        	<a href="javascript:;" onclick="window.location.href = '<?=PATH_URL_LANG.($this->uri->segment(1)=='vi'?'cong-viec-cua-ban':'your-cv')?>'" class="btn_ left hs_cv" title="<?=lang('cancel')?>"><?=lang('cancel')?></a>
        </div>
	</div>
</div>