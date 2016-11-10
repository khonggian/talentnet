<div style="min-height:500px;margin: 30px 0;">
	<h2>Personal</h2>
	<form name="form_personal" id="form_personal" action="<?=base_url().'your_cv/post_personal'?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
	<input type="hidden" name="id" id="personal_id" value="0" />
	Your Name :<input type="text" name="first_name" id="first_name" maxlength="30" value="" /> 
		<input type="text" name="middle_name" id="middle_name" maxlength="100" value="" /> 
		<input type="text" name="last_name" id="last_name" maxlength="30" value="" /> <br /><br />
	Gender 	:<select name="gender" id="gender">
				<option value="">Choose your gender</option>
				<option value="1">Nam</option>
				<option value="2">Nữ</option>
			</select>
	<br /><br />
	Birthday *:<input type="text" name="birthday" id="birthday" class="datepicker" value="" />	<br /><br />
	Marital Status 	:<select name="marital" id="marital">
				<option value="">Choose your marital</option>
				<option value="1">Độc thân</option>
				<option value="2">Đã kết hôn</option>
			</select>
	<br /><br />
	Address *:<input type="text" name="address" id="address" maxlength="250" value="" />	<br /><br />
	Phone *:<input type="text" name="phone" id="phone" maxlength="12" value="" />	<br /><br />
	Location	:<select name="country" id="country">
				<option value="">Choose country</option>
				<option value="1">USA</option>
				<option value="2">Việt Nam</option>
			</select>
			<select name="city" id="city">
				<option value="">Choose city</option>
				<option value="1">Los Angeles</option>
				<option value="2">Hồ Chí Minh</option>
			</select>
	<br /><br />
	Avatar :<input type="file" name="avatar" id="avatar" /><br/>
	<a href="javascript:;" id="personal-post" class="submit_form" data-form="form_personal" data-type="personal" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Update</a>
	<a href="javascript:;" id="personal-reset" class="reset_form" data-form="form_personal" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
	<span class="personal_msg notice"></span>
	</form>

	<div class="clearAll"></div>
	<div style="width:100%;border-top:solid 1px #000;margin-top:20px;"></div> 

	<div id="work_experience">
		<h2>Work Experience</h2>
		<form name="form_work_experience" id="form_work_experience" action="<?=base_url().'your_cv/post_work_experience'?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
		<input type="hidden" name="id" id="work_experience_id" class="input" value="0" />
		Job title *:<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Company *:<input type="text" name="company" id="company" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Industry of company :<input type="text" name="industry" class="input field_data " id="industry" maxlength="200" value="" /> <br /><br />
		<br /><br />
		Time *:<input type="text" name="from" id="from" class="datepicker input field_data val" value="" /> <input type="text" name="to" id="to" class="datepicker input field_data val" value="" /><br /><br />
		Location *:<select name="country_work" id="country_work" class="input field_data val">
					<option value="">Choose country</option>
					<option value="1">USA</option>
					<option value="2">Việt Nam</option>
				</select>
				<select name="city_work" id="city_work" class="input field_data val">
					<option value="">Choose city</option>
					<option value="1">Los Angeles</option>
					<option value="2">Hồ Chí Minh</option>
				</select>
		<br /><br />
		Salary :<input type="text" name="salary" id="salary" class="input field_data" maxlength="100" value="" />	<br /><br />
		Description *:<textarea name="description" class="input field_data val" id="description"></textarea>	<br /><br />
		<a href="javascript:;" id="work-post" class="submit_form" data-form="form_work_experience" data-type="work_experience" data-id="0" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Add More</a>
		<a href="javascript:;" id="work-reset" class="reset_form" data-form="form_work_experience" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
		<span class="work_msg notice"></span>
		</form>
		<div style="height:30px;"></div>
		<div class="list_work_experience">
			
		</div>
	</div>
	
	<div class="clearAll"></div>
	<div style="width:100%;border-top:solid 1px #000;margin-top:20px;"></div> 

	<div id="education">
		<h2>Education</h2>
		<form name="form_education" id="form_education" action="<?=base_url().'your_cv/post_education'?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
		<input type="hidden" name="id" id="education_id" class="input" value="0" />
		School/program :<input type="text" name="school_program" id="school_program" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Degree :<select name="degree" id="degree" class="input field_data val">
					<option value="">Choose Degree</option>
					<?php if(!empty($degree)){
							foreach($degree as $de){
					?>
					<option value="<?=$de->id?>"><?=$de->name_vi?></option>
					<?php }
					}
					?>
				</select>
		<br /><br />
		Major:<input type="text" name="major" id="major" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Location :<select name="location" id="location" class="input field_data val">
					<option value="">Choose location</option>
					<?php if(!empty($location)){
							foreach($location as $l){
					?>
					<option value="<?=$l->id?>"><?=$l->name?></option>
					<?php }
					}
					?>
				</select>
		<br /><br />
		Time :<input type="text" name="from" id="from_education" class="datepicker input field_data val" value="" /> <input type="text" name="to" id="to_education" class="datepicker input field_data val" value="" /><br /><br />
		Achievement :<textarea name="achievement" class="input field_data val" id="achievement"></textarea>	<br /><br />
		<a href="javascript:;" id="work-post" class="submit_form" data-form="form_education" data-type="education" data-id="0" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Add More</a>
		<a href="javascript:;" id="work-reset" class="reset_form" data-form="form_education" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
		<span class="education_msg notice"></span>
		</form>
		<div style="height:30px;"></div>
		<div class="list_education">
			
		</div>
	</div>
	
	<div class="clearAll"></div>
	<div style="width:100%;border-top:solid 1px #000;margin-top:20px;"></div> 

	<div id="skill_language">
		<h2>SKILLS & LANGUAGE</h2>
		<form name="form_skill_language" id="form_skill_language" action="<?=base_url().'your_cv/post_skill_language'?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
		<input type="hidden" name="id" id="skill_language_id" class="input" value="0" />
		Category :<select name="category" id="category" class="input field_data val">
					<option value="">Choose category</option>
					<option value="1">Skill</option>
					<option value="2">Language</option>
				</select><br /><br />
		Specify Name :<input type="text" name="specify_name" id="specify_name" class="input field_data val" maxlength="255" value="" /> <br /><br />
		Level :<select name="level" id="level" class="input field_data val">
					<option value="">Choose Level</option>
					<?php if(!empty($level)){
							foreach($level as $lv){
					?>
					<option value="<?=$lv->id?>"><?=$lv->name_vi?></option>
					<?php }
					}
					?>
				</select>
		<br /><br />

		<a href="javascript:;" id="skill_language_post" class="submit_form" data-form="form_skill_language" data-type="skill" data-id="0" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Add More</a>
		<a href="javascript:;" id="skill_language_reset" class="reset_form" data-form="form_skill_language" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
		<span class="skill_language_msg notice"></span>
		</form>
		<div style="height:30px;"></div>
		<div class="list_skill_language">
			<div class="list_skill">
				<h4>SKILLS</h4>
			</div>
			<div class="list_language">
				<h4>LANGUAGE</h4>
			</div>
		</div>
	</div>
	
	<div class="clearAll"></div>
	<div style="width:100%;border-top:solid 1px #000;margin-top:20px;"></div> 

	<div id="reference">
		<h2>Reference</h2>
		<form name="form_reference" id="form_reference" action="<?=base_url().'your_cv/post_reference'?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
		<input type="hidden" name="id" id="reference_id" class="input" value="0" />
		 Name :<input type="text" name="name" id="name" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Company :<input type="text" name="company_reference" id="company_reference" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Title :<input type="text" name="title" id="title" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Relationship :<input type="text" name="relationship" id="relationship" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Email :<input type="text" name="email_reference" id="email_reference" class="input field_data val" maxlength="200" value="" /> <br /><br />
		Phone :<input type="text" name="phone_reference" id="phone_reference" class="input field_data val" maxlength="12" value="" /> <br /><br />

		<a href="javascript:;" id="work-post" class="submit_form" data-form="form_reference" data-type="reference" data-id="0" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Add More</a>
		<a href="javascript:;" id="work-reset" class="reset_form" data-form="form_reference" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
		<span class="reference_msg notice"></span>
		</form>
		<div style="height:30px;"></div>
		<div class="list_reference">
			
		</div>
	</div>
	<div class="clearAll"></div>
	<div style="width:100%;margin-top:40px;"></div> 
	<a href="javascript:;" id="form-preview" class="_form" data-id="0" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Preview</a>
	<a href="javascript:;" id="form-save" class="_form" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Save</a>
	<a href="javascript:;" id="form-reset" class="_form" style="padding:10px;padding:10px;background-color:#ddd;color:#000;">Cancel</a>
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
		$("#"+$class_type+"_id").val($id);
		$("#"+$id_form+" .field_data").each(function(index ,value){
			if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).length > 0){
				if($(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id')){
					var val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).data('id');
				}else{
					var val = $(".parent_"+$class_type+"_"+$id).find("span."+$class_type+"_"+index).html();
				}
				
				$(this).val(val)
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
				base_url+'your_cv/delete_type_cv',
				{token : token, id : $id, type : $type},
				function(data){					
					if(data.status){
						$_this.parent().remove();
					}else{
						$_this.addClass('p_submit');
					}
				},'json'
			);
		}
		
	});
});

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
								$("#"+formID).find("#"+class_type+"_id").val(0);
								$(".parent_"+class_type+"_"+obj.id).remove();
								setTimeout(function(){
									$(".list_"+$class_type).append(obj.html);
								},800);
								
							}else{
								Page.Reset("#"+$id,1);
							}
							var arr = [];
							switch($id){
								case 'form_personal':
									$result.push("personal-"+obj.id);
									break;
								case 'form_work_experience':
									$result.push("work_experience-"+obj.id);
									break;
								case 'form_work_education':
									$result.push("work_education-"+obj.id);
									break;
								case 'form_skill_language':
									$result.push("skill_language-"+obj.id);
									break;
								case 'form_reference':
									$result.push("reference-"+obj.id);
									break;
							}
							console.log($result);
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