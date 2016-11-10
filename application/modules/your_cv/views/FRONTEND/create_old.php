<div class="banner-main">
	<img src="<?=base_url()?>assets/img/banner/banner-dashboard.jpg" class="img-responsive" />
</div>

<div id="profile-page" class="content-bg1">
	<div class="row content-row">
		<nav>
            <ul class="nav navbar-nav">
                <li><a href="#" title="DASHBOARD" class="">DASHBOARD</a></li>
                <li class="option-2"><a href="#" title="CV-BUILDER">CV-BUILDER</a></li>
                <li class="option-3"><a href="#" title="ACCOUNT">ACCOUNT</a></li>
                <li class="option-4"><a href="#" title="SAVED JOBS">SAVED JOBS</a></li>
                <li class="option-5"><a href="#" title="APPLY JOBS">APPLY JOBS</a></li>
                <li><a href="#" title="LOGOUT">LOGOUT</a></li>
            </ul>
        </nav>
		<div class="menu-ab">
			<a href="<?=PATH_URL_LANG?>" title="<?=lang('Homepage')?>"><?=lang('Homepage')?></a><a href="<?=PATH_URL_LANG.($this->uri->segment(1)=='en'?'job-search':'tim-viec')?>" title="Candidates"><?=lang('Candidates')?></a><span class="active">Create CV</span>
		</div>
		
		<div class="form-profile">
			<div class="title">PERsonal information</div>
            <form name="form_personal" id="form_personal" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_personal'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="personal_id" value="0" />
                <div class="form-group">
                    <div class="lable">Full name</div>
					<div class="input">
						<input type="text" name="fullname" id="fullname" maxlength="30" value="" placeholder="Full name"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Gender</div>
					<div class="select select_483 left">
						<select name="gender" id="gender"  class="js-select">
							<option value="">Choose your gender</option>
							<option value="1">Nam</option>
							<option value="2">Nữ</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Birthday</div>
                    <div class="input-group">
						<div class="select select_158 left">
							<select class="js-select" name="day">
								<option>Day</option>
								<?php
								for ($i=1; $i <= 31 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select" name="month">
								<option>Month</option>
								<?php
								for ($i=1; $i <= 12 ; $i++) { 
									echo "<option>".$i."</option>";
								}
								?>
							</select>
						</div>
						<div class="select select_158 left">
							<select class="js-select" name="year">
								<option>Year</option>
								<?php
								for ($i=1980; $i <= 2030 ; $i++) { 
									echo "<option>".$i."</option>";
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
                <div class="form-group">
                    <div class="lable">Marital status</div>
					<div class="select select_483 left">
						<select name="marital" id="marital" class="js-select">
							<option value="">Choose your marital</option>
							<option value="1">Độc thân</option>
							<option value="2">Đã kết hôn</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Address</div>
					<div class="input">
						<input type="text" name="address" id="address" maxlength="250" value="" placeholder="Your address"/>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Phone</div>
                    <div class="gr_sl left">
						<div class="input">
							<input type="text" name="phone" id="phone" maxlength="12" value=""  placeholder="Phone"/>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="lable">Location</div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country" id="country" class="js-select">
								<option value="">Choose country</option>
								<option value="1">USA</option>
								<option value="2">Việt Nam</option>
							</select>
						</div>
						<div class="select select_235 right">
							<select name="city" id="city" class="js-select">
								<option value="">Choose city</option>
								<option value="1">Los Angeles</option>
								<option value="2">Hồ Chí Minh</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Your avatar</div>
                    <div class="ip_file left">
						<input type="file" name="avatar" id="file-type" class="hide" />
						<div class="input file">
							<input type="text" id="file-name" />
						</div>
                    	<input type="button" id="browse-click" class="button-browse left" value="BROWSE"/>
                    </div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="ADD NEW" id="personal-post" class="btn-update submit_form" data-form="form_personal" data-type="personal" />&nbsp;&nbsp;
					<input type="button" value="CANCEL" id="personal-reset" class="btn-update reset_form" data-form="form_personal" /></div>
					
					<span class="personal_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_personal mbt20 cv_hide">
			<!--append-->
			</div>
        </div>

        <div class="form-profile mt30" id="work_experience">
			<div class="title">work experience</div>
			<form name="form_work_experience" id="form_work_experience" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_work_experience'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="work_experience_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable">Job title *</div>
					<div class="input">
						<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" placeholder="Job title"/>
					</div>
					<div class="clearfix"></div>
                </div>

                 <div class="form-group">
                    <div class="lable">Company<span> *</span></div>
					<div class="input">
						<input type="text" name="company" id="company" class="input field_data val" maxlength="200" value="" placeholder="Company name"/>
					</div>
					<div class="clearfix"></div>
                </div>
				
				 <div class="form-group">
                    <div class="lable">industry of company<span> </span></div>
					<div class="input">
						<input type="text" name="industry" class="input field_data " id="industry" maxlength="200" value="" placeholder="Company name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Time<span> *</span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" name="from" id="from" class="datepicker input field_data val ip_date" value="" placeholder="From"  />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to" id="to" class="datepicker input field_data val ip_date" value="" placeholder="To" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Location<span> *</span></div>
                    <div class="gr_sl left">
						<div class="select select_235 left">
							<select name="country_work" id="country_work" class="input field_data val js-select">
								<option value="">Choose country</option>
								<option value="1">USA</option>
								<option value="2">Việt Nam</option>
							</select>
						</div>
						<div class="select select_235 right">
							<select name="city_work" id="city_work" class="input field_data val js-select">
								<option value="">Choose city</option>
								<option value="1">Los Angeles</option>
								<option value="2">Hồ Chí Minh</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Salary</div>
					<div class="input">
						<input type="text" name="salary" id="salary" class="input field_data" maxlength="100" value="" placeholder="Salary"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Description</div>
					<div class="area left">
						<textarea name="description" class="input field_data val" id="description" placeholder="Description"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="ADD MORE" id="work-post" class="btn-update submit_form" data-form="form_work_experience" data-type="work_experience" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="CANCEL" id="work-reset" class="btn-update reset_form" data-form="form_work_experience" /></div>
					<span class="work_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_work_experience mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="form-profile mt30" id="education">
			<div class="title">EDUCATION</div>
			<form name="form_education" id="form_education" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_education'?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
				<input type="hidden" name="id" id="education_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable">School/Program<span></span></div>
					<div class="input">
						<input type="text" name="school_program" id="school_program" class="input field_data val" maxlength="200" value="" placeholder="School/Program"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Degree</div>
					<div class="select select_483 left">
						<select name="degree" id="degree" class="input field_data val js-select">
							<option value="">Choose Degree</option>
							<?php if(!empty($degree)){
									foreach($degree as $de){
							?>
							<option value="<?=$de->id?>"><?=$de->name_vi?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Major<span></span></div>
					<div class="input">
						<input type="text" name="major" id="major" class="input field_data val" maxlength="200" value="" placeholder="Major"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Location</div>
					<div class="select select_483 left">
						<select name="location" id="location" class="input field_data val js-select">
							<option value="">Choose location</option>
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
                    <div class="lable">Time<span></span></div>
                    <div class="group-date left">
	                    <div class="date2 left">
							<div class="input date left">
								<input type="text" name="from" id="from_education" class="datepicker input field_data val ip_date" value=""  placeholder="From" />
							</div>
							<div class="date_icon"></div>
						</div>
						 <div class="date2 right">
							<div class="input date left">
								<input type="text" name="to" id="to_education" class="datepicker input field_data val ip_date" value="" placeholder="To" />
							</div>
							<div class="date_icon"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Achievement</div>
					<div class="area left">
						<textarea name="achievement" class="input field_data val" id="achievement" placeholder="Achievement"></textarea>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="ADD MORE" id="work-post" class="btn-update submit_form" data-form="form_education" data-type="education" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="CANCEL" id="work-reset" class="btn-update reset_form" data-form="form_education" /></div>
					<span class="education_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_education mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="form-profile mt30" id="skill_language">
			<div class="title">Skill &amp; Languages</div>
			<form name="form_skill_language" class="form-horizontal form_cv" role="form" id="form_skill_language" action="<?=PATH_URL_LANG.'post_skill_language'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="skill_language_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable">Category<span> *</span></div>
					<div class="select select_483 left">
						<select name="category" id="category" class="input field_data val js-select">
							<option value="">Choose category</option>
							<option value="1">Skill</option>
							<option value="2">Language</option>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Specify name</div>
					<div class="input">
						<input type="text" name="specify_name" id="specify_name" class="input field_data val" maxlength="255" value="" placeholder="Specify name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Level</div>
					<div class="select select_483 left">
						<select name="level" id="level" class="input field_data val js-select">
							<option value="">Choose Level</option>
							<?php if(!empty($level)){
									foreach($level as $lv){
							?>
							<option value="<?=$lv->id?>"><?=$lv->name_vi?></option>
							<?php }
							}
							?>
						</select>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
						<input type="button" value="ADD MORE" id="skill_language_post" class="btn-update submit_form" data-form="form_skill_language" data-type="skill" data-id="0" />&nbsp;&nbsp;
						<input type="button" value="CANCEL" id="skill_language_reset" class="btn-update reset_form" data-form="form_skill_language" />
					</div>
					<span class="skill_language_msg notice"></span>
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
			<div class="title">Reference</div>
			<form name="form_reference" id="form_reference" class="form-horizontal form_cv" role="form" action="<?=PATH_URL_LANG.'post_reference'?>" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
			<input type="hidden" name="id" id="reference_id" class="input" value="0" />
                <div class="form-group">
                    <div class="lable">Name<span> *</span></div>
					<div class="input">
						<input type="text" name="name" id="name" class="input field_data val" maxlength="200" value="" placeholder="Reference name"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Company</div>
					<!--<div class="select select_483 left">
						<select class="js-select">
							<option>Company</option>
							<option>Company</option>
							<option>Company</option>
						</select>
					</div>-->
					<div class="input">
						<input type="text" name="company_reference" id="company_reference" class="input field_data val" maxlength="200" value="" placeholder="Company"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Title</div>
					<div class="input">
						<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" placeholder="Title"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Relationship<span> *</span></div>
					<div class="input">
						<input type="text" name="relationship" id="relationship" class="input field_data val" maxlength="200" value="" placeholder="Relationship"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Email<span> *</span></div>
					<div class="input">
						<input type="text" name="email_reference" id="email_reference" class="input field_data val" maxlength="200" value="" placeholder="Your email"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable">Phone<span> *</span></div>
					<div class="input">
						<input type="text" name="phone_reference" id="phone_reference" class="input field_data val" maxlength="12" value="" placeholder="Your phone"/>
					</div>
					<div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="lable btn">&nbsp;</div>
					<div class="mt8 mbt20 btn-form">
					<input type="button" value="ADD MORE" class="btn-update submit_form" data-form="form_reference" data-type="reference" data-id="0" />&nbsp;&nbsp;
					<input type="button" value="CANCEL" id="work-reset" class="btn-update reset_form" data-form="form_reference" />
					</div>
					<span class="reference_msg notice"></span>
					<div class="clearfix"></div>
                </div>
            </form>
			<div class="list_reference mbt20">
			<!-- append -->
			</div>
        </div>

        <div class="group_btncv">
        	<a href="javascript:;" id="preview_sv" class="btn_ left manipulation_sv hs_cv" title="PREVIEW" data-type="unable">PREVIEW</a>
        	<a href="javascript:;" id="save_cv" class="btn_ spec left save_cv hs_cv" title="SAVE">SAVE</a>
        	<a href="javascript:;" onclick="window.location.href = '<?=PATH_URL_LANG.url_lang(lang('create_CV'))?>'" class="btn_ left hs_cv" title="CANCEL">CANCEL</a>
			<a href="javascript:;" id="back_cv" class="btn_ spec left manipulation_sv cv_hide" title="BACK" data-type="available">BACK</a>
        </div>
	</div>
</div>
<script>
$(document).ready(function(){
$array = [], $result = [];
window.selectionData = {};
$( ".datepicker" ).datepicker();
	function getDoc(frame) {
		var doc = null;
		// IE8 cascading access check
		try {
			if (frame.contentWindow) {
				 doc = frame.contentWindow.document;
			}
		} catch(err) {
		}

		if (doc) { // successful getting content
			 return doc;
		}

		try { // simply checking may throw in ie8 under ssl or mismatched protocol
			doc = frame.contentDocument ? frame.contentDocument : frame.document;
		} catch(err) {
			// last attempt
			doc = frame.document;
		}
		return doc;
	}
	
	all_cv($result);
});
function all_cv($result){
	$("#save_cv").click(function(){
		if($result && $(this).hasClass('save_cv')){
			$(this).removeClass('save_cv');
			$.post(
				base_url+'save_cv',
				{token : token, result : $result},
				function(data){	
					$result = [];
					if(data.status){
						alert("CV đã tạo thành công");
						window.location.href = base_url+(lang=='vi'?'job-search':'tim-viec');
					}else{
						alert("CV đã tạo thất bại xin thử lại");
						window.location.href = window.location.href;
					}
				},'json'
			);
		}
	});
	
	$(".manipulation_sv").click(function(){
		if($(this).data('type') == 'available'){
			$(".form_cv").show();
			$(".hs_cv").show();
			$("#back_cv").hide();
			$(".list_personal").hide();
		}else{
			$(".form_cv").hide();
			$(".hs_cv").hide();
			$("#back_cv").show();
			$(".list_personal").show();
		}
	});
	
	$("#category").change(function(){
		if($(this).val()){
			$("#skill_language_post").data('type','');
			if($(this).val() == 1){
				$("#skill_language_post").data('type','skill');
			}else{
				$("#skill_language_post").data('type','language');
			}
		}
	});
	$(".submit_form").live('click',function(){
		$form = $(this).data('form');
		$class_type = $(this).data('type');
		cv_form_submit($form,$class_type);
		$("#"+$form).submit();
	});
	$(".reset_form").click(function(){
		$form = $(this).data('form');
		Page.Reset("#"+$form);
	});
	
	$(".edit_item").live('click',function(){
		Page.Reset("#"+$form);
		$id = $(this).data('id');
		$id_form = $(this).data('form');
		$class_type = $(this).data('type');
		$id_type = ($class_type == 'skill' || $class_type == 'language') ? 'skill_language' : $class_type;
		$("#"+$id_type+"_id").val($id);
		$("#"+$id_form+" .field_data").each(function(index ,value){
			if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).length > 0){
				if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id')){
					var val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id');
				}else{
					var val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).html();
				}
				if($(this).is("select")){
					$(this).selectbox("detach");
					$(this).val(val);
					$(this).selectbox("attach");
				}else{
					$(this).val(val);
				}
				
			}
		});
	});
	$(".delete_item").live('click',function(){
		$_this = $(this);
		$id = $(this).data('id');
		$type = $(this).data('type');
		if($_this.hasClass('p_submit')){
			$_this.removeClass('p_submit');
			$.post(
				base_url+'delete_type_cv',
				{token : token, id : $id, type : $type},
				function(data){					
					if(data.status){
						$(".fr_"+$type+'_'+$id).remove();
					}else{
						$_this.addClass('p_submit');
					}
				},'json'
			);
		}
	});
} 
function check_val(formID){
	$input = true;
	$("#"+formID+" .val").each(function(){
		if(!$(this).val()){
			$input = false;
		}
	});
	return $input;
}
function cv_form_submit($id,class_type){
	$class_type = '';
	$class_type = class_type;
	$("#"+$id).submit(function(e)
	{
		$("#multi-msg").html("<img src='loading.gif'/>");
		
		var formObj = $(this);
		var formID = formObj.attr("id");
		var formURL = formObj.attr("action");
		
		if(window.FormData !== undefined)  // for HTML5 browsers
		{
			
			var formData = new FormData(this);
			$.ajax({
				url: formURL,
				type: 'POST',
				data:  formData,
				mimeType:"multipart/form-data",
				contentType: false,
				cache: false,
				processData:false,
				success: function(data, textStatus, jqXHR)
				{
						var obj = jQuery.parseJSON(data);
						//$("#multi-msg").html('<pre><code>'+data+'</code></pre>');
						if(obj.status == 'SUCCESS'){
							$('.notice').html('');
							$('.notice').removeClass('red');
							$('.notice').addClass('blue');
							if($id == 'form_work_experience' || $id == 'form_education' || $id == 'form_reference' || $id == 'form_skill_language'){
								Page.Reset("#"+$id);
								$id_type = ($class_type == 'skill' || $class_type == 'language') ? 'skill_language' : $class_type;
								$("#"+formID).find("#"+$id_type+"_id").val(0);
								$(".fr_"+$class_type+"_"+obj.id).remove();
								setTimeout(function(){
									$(".list_"+$class_type).append(obj.html);
									if($class_type == 'skill'){
										$(".list_skill").show();
									}else if($class_type == 'language'){
										$(".list_language").show();
									}
								},800);
								
							}else{
								//Page.Reset("#"+$id,1);
								if($id == 'form_personal'){
									$(".list_personal").html('');
									$('.notice').html('Thêm thông tin cá nhân thành công');
									$('#personal-post').val('UPDATE');
									
									$("#"+formID).find("#"+$class_type+"_id").val(obj.id);
									setTimeout(function(){
										$('.notice').html('');
										$(".list_personal").append(obj.html);
									},800);
								}
							}
							switch($id){
								case 'form_personal':
									$result.push("personal-"+obj.id);
									break;
								case 'form_work_experience':
									$result.push("work_experience-"+obj.id);
									break;
								case 'form_education':
									$result.push("education-"+obj.id);
									break;
								case 'form_skill_language':
									$result.push("skill_language-"+obj.id);
									break;
								case 'form_reference':
									$result.push("reference-"+obj.id);
									break;
							}
							//console.log($result);
						}else{
							$('.notice').removeClass('blue');
							$('.notice').addClass('red');
							$.each(obj.error, function(key, value){
								$('#'+value.field).focus();
								//$('#'+value.field).parent().addClass('border_error');
								$('.'+obj.msg).html(value.txt);
								return false;
							});
						}
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					$("#multi-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
				} 	        
		   });
			e.preventDefault();
			e.unbind();
		}
		else  //for olden browsers
		{
			//generate a random id
			var  iframeId = 'unique' + (new Date().getTime());
			//create an empty iframe
			var iframe = $('<iframe src="javascript:false;" name="'+iframeId+'" />');
			//hide it
			iframe.hide();
			//set form target to iframe
			formObj.attr('target',iframeId);
			//Add iframe to body
			iframe.appendTo('body');
			iframe.load(function(e)
			{
				var doc = getDoc(iframe[0]);
				var docRoot = doc.body ? doc.body : doc.documentElement;
				var data = docRoot.innerHTML;
				$("#multi-msg").html('<pre><code>'+data+'</code></pre>');
			});
		}
		return false;
	});
}
</script>